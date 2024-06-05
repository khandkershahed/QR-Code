<?php

namespace App\Http\Controllers\Subscription;

use Stripe\Webhook;
use App\Models\User;
use App\Models\Admin\Plan;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules;
use App\Mail\UserRegistrationMail;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Validator;
use Stripe\Exception\SignatureVerificationException;
use Laravel\Cashier\Http\Controllers\WebhookController as CashierWebhookController;

class StripeWebhookController extends CashierWebhookController
{
    public function handleWebhook(Request $request)
    {
        $payload = @file_get_contents('php://input');
        $sig_header = $request->header('Stripe-Signature');
        $endpoint_secret = config('services.stripe.webhook_secret');

        try {
            $event = \Stripe\Webhook::constructEvent($payload, $sig_header, $endpoint_secret);
        } catch (\Stripe\Exception\SignatureVerificationException $e) {
            Log::error('Stripe webhook signature verification failed.', ['exception' => $e]);
            return response()->json(['error' => 'Invalid signature.'], 400);
        }

        // Handle the event
        if ($event->type === 'checkout.session.completed') {
            $session = $event->data->object;
            \Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));
            // Extract session identifier from metadata
            $sessionId = $session->client_reference_id;

            // Retrieve the checkout session based on the client_reference_id
            $checkoutSession = \Stripe\Checkout\Session::retrieve($sessionId);

            // Retrieve metadata from the checkout session
            $metadata = $checkoutSession->metadata;

            // Now you have the metadata associated with the client_reference_id
            // You can proceed to handle the checkout session completion
            $this->handleCheckoutSessionCompleted($session, $metadata);
        }

        return response()->json(['status' => 'success']);
    }

    protected function handleCheckoutSessionCompleted($session, $metadata)
    {
        // Validate registration data
        $validatedData = Validator::make($metadata, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
            'plan_id' => ['required', 'exists:plans,id'],
        ])->validate();

        // Create the user
        $user = User::create([
            'name' => $validatedData['name'],
            'email' => $validatedData['email'],
            'password' => Hash::make($validatedData['password']),
        ]);
        // Create or get Stripe customer
        $user->createOrGetStripeCustomer();

        // Update default payment method
        $user->updateDefaultPaymentMethod($session->payment_method);

        // Find plan
        $plan = Plan::find($metadata['plan_id']);

        // Subscribe user to plan
        $user->newSubscription($plan->slug, $plan->stripe_plan)->create($session->payment_method);

        // Log in user
        Auth::login($user);

        // Send registration email
        Mail::to($user->email)->send(new UserRegistrationMail($user->name));
    }

    public function stripeCheckout()
    {
        $data['plan'] = Plan::where('billing_cycle', 'trial_period')->first();
        return view('frontend.pages.checkout',$data);
    }
}

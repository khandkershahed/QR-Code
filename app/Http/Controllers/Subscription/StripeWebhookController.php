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
            $this->handleCheckoutSessionCompleted($session);
        }

        return response()->json(['status' => 'success']);
    }

    protected function handleCheckoutSessionCompleted($session)
    {
        // Retrieve registration data from cache using the session ID
        $sessionId = $session->client_reference_id;
        $registrationData = Cache::get('registration_data_' . $sessionId);

        Log::info('Registration Data:', ['data' => $registrationData]);
        Log::info('Checkout Session:', ['session' => $session]);

        // Ensure $registrationData is not null before proceeding
        if (!$registrationData) {
            Log::error('Registration data is null.');
            return response()->json(['error' => 'Registration data is null.'], 400);
        }

        // Validate registration data
        $validatedData = Validator::make($registrationData, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ])->validate();

        // Create user
        $user = User::create([
            'name' => $validatedData['name'],
            'email' => $validatedData['email'],
            'password' => \Illuminate\Support\Facades\Hash::make($validatedData['password']),
        ]);

        // Create or get Stripe customer
        $user->createOrGetStripeCustomer();

        // Update default payment method
        $user->updateDefaultPaymentMethod($session->payment_method);

        // Find plan
        $plan = Plan::find($registrationData['plan']);

        // Subscribe user to plan
        $user->newSubscription($plan->slug, $plan->stripe_plan)->create($session->payment_method);

        // Log in user
        Auth::login($user);

        // Send registration email
        Mail::to($user->email)->send(new UserRegistrationMail($user->name));
    }

}

<?php

namespace App\Http\Controllers\Subscription;

use Stripe\Webhook;
use App\Models\User;
use App\Models\Admin\Plan;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules;
use App\Mail\UserRegistrationMail;
use App\Models\Subscription;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Cache;
use App\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\Validator;
use Stripe\Exception\SignatureVerificationException;
use Laravel\Cashier\Http\Controllers\WebhookController as CashierWebhookController;

class StripeWebhookController extends CashierWebhookController
{
    // public function handleWebhook(Request $request)
    // {
    //     $payload = @file_get_contents('php://input');
    //     $sig_header = $request->header('Stripe-Signature');
    //     $endpoint_secret = config('services.stripe.webhook_secret');

    //     try {
    //         $event = \Stripe\Webhook::constructEvent($payload, $sig_header, $endpoint_secret);
    //     } catch (\Stripe\Exception\SignatureVerificationException $e) {
    //         Log::error('Stripe webhook signature verification failed.', ['exception' => $e]);
    //         return response()->json(['error' => 'Invalid signature.'], 400);
    //     }

    //     // Handle the event
    //     if ($event->type === 'checkout.session.completed') {
    //         $session = $event->data->object;
    //         \Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));
    //         // Extract session identifier from metadata
    //         $sessionId = $session->client_reference_id;

    //         // Retrieve the checkout session based on the client_reference_id
    //         $checkoutSession = \Stripe\Checkout\Session::retrieve($sessionId);

    //         // Retrieve metadata from the checkout session
    //         $metadata = $checkoutSession->metadata;

    //         // Now you have the metadata associated with the client_reference_id
    //         // You can proceed to handle the checkout session completion
    //         $this->handleCheckoutSessionCompleted($session, $metadata);
    //     }

    //     return response()->json(['status' => 'success']);
    // }

    // protected function handleCheckoutSessionCompleted($session, $metadata)
    // {
    //     // Validate registration data
    //     $validatedData = Validator::make($metadata, [
    //         'name' => ['required', 'string', 'max:255'],
    //         'email' => ['required', 'string', 'email', 'max:255'],
    //         'password' => ['required', 'confirmed', Rules\Password::defaults()],
    //         'plan_id' => ['required', 'exists:plans,id'],
    //     ])->validate();

    //     // Create the user
    //     $user = User::create([
    //         'name' => $validatedData['name'],
    //         'email' => $validatedData['email'],
    //         'password' => Hash::make($validatedData['password']),
    //     ]);
    //     // Create or get Stripe customer
    //     $user->createOrGetStripeCustomer();

    //     // Update default payment method
    //     $user->updateDefaultPaymentMethod($session->payment_method);

    //     // Find plan
    //     $plan = Plan::find($metadata['plan_id']);

    //     // Subscribe user to plan
    //     $user->newSubscription($plan->slug, $plan->stripe_plan)->create($session->payment_method);

    //     // Log in user
    //     Auth::login($user);

    //     // Send registration email
    //     Mail::to($user->email)->send(new UserRegistrationMail($user->name));
    // }

    public function stripeCheckout($id)
    {
        $data['plan'] = Plan::where('slug', $id)->first();
        $data['intent'] = auth()->user()->createSetupIntent();
        return view('frontend.pages.checkout',$data);
    }
    public function stripePayment(Request $request)
    {
        $request->user()->createOrGetStripeCustomer();
        $plan = Plan::find($request->plan);
        $subscription = $request->user()->newSubscription($plan->slug, $plan->stripe_plan)->create($request->token);

        // Check if the subscription was successfully created
        if ($subscription) {
            // Retrieve the active subscription using Laravel Cashier's methods
            $activeSubscription = $request->user()->subscription($plan->slug);

            // Ensure an active subscription exists
            if ($activeSubscription) {
                return redirect(RouteServiceProvider::HOME)->with('success', 'You have successfully registered with the ' . $activeSubscription->plan->title );
            } else {
                // Subscription not found, handle the error
                $request->user()->delete();
                return redirect()->route('register')->with('error', 'Error occurred while subscribing to a plan.');
            }
        } else {
            // Subscription creation failed, handle the error
            $request->user()->delete();
            return redirect()->route('register')->with('error', 'Error occurred while subscribing to a plan.');
        }
    }



    public function handleWebhook(Request $request)
    {
        $payload = $request->getContent();
        $sigHeader = $request->header('Stripe-Signature');
        $endpointSecret = config('services.stripe.webhook_secret');

        try {
            $event = \Stripe\Webhook::constructEvent(
                $payload, $sigHeader, $endpointSecret
            );
        } catch (\UnexpectedValueException $e) {
            return response()->json(['error' => 'Invalid payload'], 400);
        } catch (\Stripe\Exception\SignatureVerificationException $e) {
            return response()->json(['error' => 'Invalid signature'], 400);
        }

        if ($event->type == 'checkout.session.completed') {
            $session = $event->data->object;
            $this->handleCheckoutSessionCompleted($session);
        }elseif ($event->type == 'checkout.session.async_payment_failed' || $event->type == 'checkout.session.expired') {
            $session = $event->data->object;
            $this->handleCheckoutSessionFailed($session);
        }

        return response()->json(['success' => 'Webhook handled'], 200);
    }

    protected function handleCheckoutSessionCompleted($session)
    {
        \Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));

        // Retrieve the user by client reference ID
        $user = User::find($session->client_reference_id);

        if (!$user) {
            // Handle the case where the user is not found
            return;
        }

        // Retrieve metadata from the checkout session
        $metadata = $session->metadata;
        $planId = $metadata->plan_id;

        // Find the plan
        $plan = Plan::find($planId);

        if (!$plan) {
            // Handle the case where the plan is not found
            return;
        }

        // Create or get Stripe customer
        $user->createOrGetStripeCustomer();

        // Retrieve the payment method ID from the session
        $paymentMethod = $session->payment_method;

        // Subscribe the user to the plan
        $user->newSubscription($plan->slug, $plan->stripe_plan)->create($paymentMethod);

        // Log in the user
        Auth::login($user);

        // Send registration email
        Mail::to($user->email)->send(new UserRegistrationMail($user->name));

        flash()->addSuccess('You have successfully registered.');

        return redirect(RouteServiceProvider::HOME);
    }
    protected function handleCheckoutSessionFailed($session)
    {
        $user = User::find($session->client_reference_id);
            $user->delete();
    }

}

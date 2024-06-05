<?php

namespace App\Http\Controllers\Subscription;

use App\Models\User;
use App\Models\Admin\Plan;
use Illuminate\Http\Request;
use App\Mail\UserRegistrationMail;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rules;
use Laravel\Cashier\Http\Controllers\WebhookController as CashierWebhookController;

class StripeWebhookController extends CashierWebhookController
{
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
        }

        return response()->json(['success' => 'Webhook handled'], 200);
    }

    protected function handleCheckoutSessionCompleted($session)
    {
        $registrationData = json_decode($session->metadata->registration_data, true);

        $validatedData = Validator::make($registrationData, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ])->validate();

        $user = User::create([
            'name'     => $validatedData['name'],
            'email'    => $validatedData['email'],
            'password' => Hash::make($validatedData['password']),
        ]);

        $user->createOrGetStripeCustomer();

        // Retrieve the payment method ID from the session
        \Stripe\Stripe::setApiKey(config('services.stripe.secret'));
        $checkoutSession = \Stripe\Checkout\Session::retrieve($session->id);
        $paymentMethod = $checkoutSession->payment_method;

        $plan = Plan::find($registrationData['plan']);
        $user->newSubscription($plan->slug, $plan->stripe_plan)->create($paymentMethod);

        Mail::to($user->email)->send(new UserRegistrationMail($user->name));
    }

}

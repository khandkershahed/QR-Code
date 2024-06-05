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
use Stripe\Webhook;
use Illuminate\Support\Facades\Log;
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
            $event = Webhook::constructEvent(
                $payload, $sig_header, $endpoint_secret
            );
        } catch (SignatureVerificationException $e) {
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
        $registrationData = session()->get('registration_data');
        dd($registrationData);
        $validatedData = Validator::make($registrationData, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ])->validate();

        $user = User::create([
            'name' => $validatedData['name'],
            'email' => $validatedData['email'],
            'password' => Hash::make($validatedData['password']),
        ]);

        $user->createOrGetStripeCustomer();
        $user->updateDefaultPaymentMethod($session->payment_method);

        $plan = Plan::find($registrationData['plan']);
        $user->newSubscription($plan->slug, $plan->stripe_plan)->create($session->payment_method);

        Auth::login($user);
        Mail::to($user->email)->send(new UserRegistrationMail($user->name));
    }

}

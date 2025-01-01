<?php

namespace App\Http\Controllers\Subscription;

use Carbon\Carbon;
use Stripe\Charge;
use Stripe\Stripe;
use Stripe\Invoice;
use Stripe\Webhook;
use App\Models\User;
use App\Models\Admin\Plan;
use App\Models\CardProduct;
use App\Models\Subscription;
use Illuminate\Http\Request;
use App\Models\UserCardProduct;
use Illuminate\Validation\Rules;
use App\Mail\UserRegistrationMail;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Cache;
use App\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\Session;
use Stripe\Exception\ApiErrorException;
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
        $data['user_id'] = Auth::user()->id;
        return view('frontend.pages.checkout', $data);
    }
    public function stripePayment(Request $request)
    {
        $request->validate([
            'user_id' => 'required|exists:users,id',
            'plan' => 'required|exists:plans,id',
            'token' => 'required|string',
        ]);

        try {
            $user = User::findOrFail($request->user_id);
            $user->createOrGetStripeCustomer();

            $plan = Plan::findOrFail($request->plan);

            // Check for an existing active subscription
            $existingSubscription = Subscription::where('user_id', $user->id)
                ->active()
                ->first();

            if ($existingSubscription) {
                return redirect()->route('register')->with('error', 'You already have an active subscription.');
            }

            $subscription = $user->newSubscription($plan->slug, $plan->stripe_plan)->create($request->token);

            // Set the subscription end date
            $subscription->update([
                'subscription_ends_at' => now()->addDays($plan->interval),
            ]);

            // Ensure the subscription was successfully created
            if ($subscription) {
                // Retrieve the active subscription
                $activeSubscription = Subscription::where('user_id', $user->id)->active()->first();

                if ($activeSubscription) {
                    try {
                        Mail::to($user->email)->send(new UserRegistrationMail($user->name));
                    } catch (\Exception $e) {
                        // Log the email sending failure
                        Log::error('Failed to send registration email to ' . $user->email . ': ' . $e->getMessage());
                    }

                    return redirect(RouteServiceProvider::HOME)->with('success', 'You have successfully registered with the ' . $activeSubscription->plan->title);
                } else {
                    // Subscription not found, handle the error
                    $user->delete();
                    return redirect()->route('register')->with('error', 'Error occurred while subscribing to a plan.');
                }
            } else {
                // Subscription creation failed, handle the error
                $user->delete();
                return redirect()->route('register')->with('error', 'Error occurred while subscribing to a plan.');
            }
        } catch (ApiErrorException $e) {
            // Handle Stripe API errors
            return redirect()->route('register')->with('error', 'Payment failed: ' . $e->getMessage());
        } catch (\Exception $e) {
            // Handle other errors
            return redirect()->route('register')->with('error', 'An unexpected error occurred: ' . $e->getMessage());
        }
    }



    public function handleWebhook(Request $request)
    {
        $payload = $request->getContent();
        $sigHeader = $request->header('Stripe-Signature');
        $endpointSecret = config('services.stripe.webhook_secret');

        try {
            $event = \Stripe\Webhook::constructEvent(
                $payload,
                $sigHeader,
                $endpointSecret
            );
        } catch (\UnexpectedValueException $e) {
            return response()->json(['error' => 'Invalid payload'], 400);
        } catch (\Stripe\Exception\SignatureVerificationException $e) {
            return response()->json(['error' => 'Invalid signature'], 400);
        }

        if ($event->type == 'checkout.session.completed') {
            $session = $event->data->object;
            $this->handleCheckoutSessionCompleted($session);
        } elseif ($event->type == 'checkout.session.async_payment_failed' || $event->type == 'checkout.session.expired') {
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
        try {
            Mail::to($user->email)->send(new UserRegistrationMail($user->name));
        } catch (\Exception $e) {
            Log::error('Error sending email: ' . $e->getMessage());
        }


        flash()->addSuccess('You have successfully registered.');

        return redirect(RouteServiceProvider::HOME);
    }
    protected function handleCheckoutSessionFailed($session)
    {
        $user = User::find($session->client_reference_id);
        $user->delete();
    }

    public function cardCheckout($id)
    {
        $data['plan'] = CardProduct::where('slug', $id)->first();

        if (Auth::check()) {
            $data['intent'] = auth()->user()->createSetupIntent();
            $data['user_id'] = Auth::user()->id;
            return view('frontend.pages.cardCheckout', $data);
        } else {
            // This will automatically store the current URL and redirect to the login page
            // return redirect()->route('login');
            session(['redirect_after_login' => route('card.checkout', $id)]);
            return redirect()->route('login');
            // return redirect()->route('login')->with('redirectTo', route('card.checkout', $id));
        }
    }

    // public function cardPayment(Request $request)
    // {
    //     $request->validate([
    //         'user_id' => 'required|exists:users,id',
    //         'plan' => 'required|exists:card_products,id',
    //     ]);

    //     try {
    //         $product = CardProduct::findOrFail($request->product_id);
    //         $user = User::findOrFail($request->user_id);

    //         Stripe::setApiKey(env('STRIPE_SECRET'));

    //         // Create charge
    //         $charge = Charge::create([
    //             "amount" => $product->price * 100, // Amount in cents
    //             "currency" => !empty($product->currency) ? $product->currency : "usd",
    //             "source" => $request->stripeToken,
    //             "description" => "NFC Card Payment"
    //         ]);

    //         $usercardproduct = UserCardProduct::create([
    //             'user_id' => $user->id,
    //             'card_product_id' => $product->id,
    //             'payment_status' => ($charge->status == 'succeeded') ? 'paid' : 'unpaid',
    //             'status' => 'unused',
    //             'paid_at' => Carbon::now(),
    //         ]);
    //         // Create invoice
    //         $invoice = Invoice::create([
    //             'customer' => $charge->customer,
    //             'billing' => 'send_invoice',
    //         ]);
    //         $email = $request->customer_email;
    //         try {
    //             Mail::send('emails.invoice', ['invoice' => $invoice,'product' => $product], function ($message) use ($email) {
    //                 $message->to($email)->subject('NFC Card Payment Invoice');
    //             });
    //         } catch (\Exception $e) {
    //             Session::flash('error', "Email sent will be delayed due to server issue.");
    //         }
    //     } catch (ApiErrorException $e) {
    //         return redirect()->route('register')->with('error', 'Payment failed: ' . $e->getMessage());
    //     } catch (\Exception $e) {
    //         return redirect()->route('register')->with('error', 'An unexpected error occurred: ' . $e->getMessage());
    //     }
    // }
    public function cardPayment(Request $request)
    {
        // Validate the incoming request
        $request->validate([
            'user_id' => 'required|exists:users,id',
            'plan' => 'required|exists:card_products,id',
            'stripeToken' => 'required|string', // Add validation for the stripeToken
        ]);

        // Begin a database transaction to ensure atomic operations
        DB::beginTransaction();

        try {
            // Fetch product and user details
            $product = CardProduct::findOrFail($request->plan); // Use 'plan' here
            $user = User::findOrFail($request->user_id);

            // Set Stripe API key
            Stripe::setApiKey(env('STRIPE_SECRET'));

            // Create a PaymentIntent for the transaction
            $paymentIntent = \Stripe\PaymentIntent::create([
                'amount' => $product->price * 100, // Amount in cents
                'currency' => !empty($product->currency) ? $product->currency : "usd",
                'description' => "NFC Card Payment",
                'payment_method' => $request->stripeToken, // Payment method (the Stripe token from frontend)
                'confirm' => true, // Immediately attempt to confirm the payment
            ]);

            // Check if the payment was successful
            if ($paymentIntent->status !== 'succeeded') {
                throw new \Exception('Payment was not successful');
            }

            // Create the user card product record
            $usercardproduct = UserCardProduct::create([
                'user_id' => $user->id,
                'card_product_id' => $product->id,
                'payment_status' => 'paid', // Only mark as paid if the payment succeeded
                'status' => 'unused',
                'paid_at' => Carbon::now(),
            ]);

            // Create the invoice
            $invoice = Invoice::create([
                'customer' => $paymentIntent->customer,
                'billing' => 'send_invoice', // Adjust depending on your actual invoice handling
            ]);

            // Send the invoice via email
            try {
                $email = $request->customer_email;
                Mail::send('emails.invoice', ['invoice' => $invoice, 'product' => $product], function ($message) use ($email) {
                    $message->to($email)->subject('NFC Card Payment Invoice');
                });
            } catch (\Exception $e) {
                // Flash a message if the email fails
                Session::flash('error', "Email sent will be delayed due to server issue.");
            }

            // Commit the transaction as everything is successful
            DB::commit();

            // Return success response if payment is successful
            return redirect()->route('dashboard')->with('success', 'Payment successful!');
        } catch (\Stripe\Exception\ApiErrorException $e) {
            // Catch Stripe-specific errors (e.g., card declined, network issues)
            DB::rollBack(); // Rollback transaction to avoid any database changes if payment fails
            return redirect()->route('register')->with('error', 'Payment failed: ' . $e->getMessage());
        } catch (\Exception $e) {
            // Catch any other errors (e.g., database errors, system errors)
            DB::rollBack(); // Rollback transaction
            return redirect()->route('register')->with('error', 'An unexpected error occurred: ' . $e->getMessage());
        }
    }
}

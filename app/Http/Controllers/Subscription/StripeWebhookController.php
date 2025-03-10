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
use App\Models\VirtualCard;
use Illuminate\Support\Str;
use App\Models\Subscription;
use App\Models\UserCardPlan;
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
use App\Mail\UserCheckoutRegistration;
use App\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\Session;
use Stripe\Exception\ApiErrorException;
use App\Models\Admin\NfcShippingDetails;
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

    public function cardCheckout(Request $request)
    {
        ini_set('max_execution_time', 300);
        if (Auth::check()) {
            $user_id = auth()->id();
        } else {
            $user = User::where('email', $request->input('email'))->first();
            if ($user) {
                Auth::login($user);
                $request->session()->regenerate();
            } else {
                $password = Str::random(8);
                $hashedPassword = Hash::make($password);
                $user = User::create([
                    'name'        => $request->input('name'),
                    'email'       => $request->input('email'),
                    'status'      => 'active',
                    'password'    => $hashedPassword,
                ]);
                // Send email
                $data = [
                    'name'     => $request->input('name'),
                    'email'    => $request->input('email'),
                    'password' => $password,
                ];
                // Send mail (ensure Mail is configured)
                try {
                    Mail::to($user->email)->send(new UserCheckoutRegistration($data));
                } catch (\Exception $e) {
                    Log::error('Error sending registration email: ' . $e->getMessage());
                    Session::flash('error', 'Mail Not Send :' . $e->getMessage());
                }
                Auth::login($user);
                $request->session()->regenerate();
            }
            $user_id = auth()->id();
        }
        // dd($user_id);

        $data['plan'] = Plan::where('id', $request->plan_id)->first();
        $files = [
            'card_logo' => $request->file('card_logo'),
        ];

        $uploadedFiles = [];
        foreach ($files as $key => $file) {
            if ($file) {
                $filePath = 'card_products/' . $key;
                $uploadedFiles[$key] = customUploadEcommerce($file, $filePath);

                // Check upload status and handle errors
                if ($uploadedFiles[$key]['status'] === 0) {
                    return redirect()->back()->with('error', $uploadedFiles[$key]['error_message']);
                }
            } else {
                $uploadedFiles[$key] = ['status' => 0];
            }
        }

        $request->session()->put('card_checkout', [
            "card_user"        => $request->card_user,
            "plan"             => $request->plan,
            "card_preference"  => $request->card_preference,
            "card_logo"        => $uploadedFiles['card_logo']['status'] == 1 ? $uploadedFiles['card_logo']['file_path'] : null,
            "card_name"        => $request->card_name,
            "card_designation" => $request->card_designation,
            "card_color"       => $request->card_color,
            "design_note"      => $request->design_note,
            "subtotal"         => $request->subtotal,
            "plan_id"          => $request->plan_id,
            "name"             => $request->name,
            "email"            => $request->email,
            "shipping_charge"  => $request->shipping_charge,
        ]);

        $data['card']     = $request->card_preference;
        $data['user_id']  = $user_id;
        $data['intent']   = auth()->user()->createSetupIntent();
        $data['subtotal'] = $request->input('subtotal', session('subtotal', $data['plan']->package_price));
        return view('frontend.pages.cardCheckout', $data);
    }


    public function cardPayment(Request $request)
    {
        $cardCheckout = session('card_checkout');
        // dd($request->all());
        // dd($cardCheckout);
        $request->validate([
            'user_id'       => 'required|exists:users,id',
            'plan_id'       => 'required|exists:plans,id',
            'stripeToken'   => 'required|string',
        ]);

        DB::beginTransaction();

        try {
            $product = Plan::findOrFail($request->plan_id);
            $user = User::findOrFail($request->user_id);

            $price = $request->subtotal;

            Stripe::setApiKey(env('STRIPE_SECRET'));

            $paymentIntent = \Stripe\Charge::create([
                "amount" => $price * 100,
                "currency" => "usd",
                "source" => $request->stripeToken,
                'description' => "NFC Card Payment",
            ]);
            $subscription = $user->newSubscription($product->slug, $product->stripe_plan)->create($request->stripeToken);

            // Set the subscription end date
            $subscription->update([
                'subscription_ends_at' => now()->addDays($product->interval),
            ]);
            // $paymentIntent = \Stripe\Charge::create([
            //     'amount' => $price * 100,
            //     'currency' => !empty($product->currency) ? $product->currency : "usd",
            //     'description' => "NFC Card Payment",
            //     "source" => $request->stripeToken,
            //     // 'payment_method' => $request->token,
            //     // 'confirm' => true,
            // ]);

            // Check if the payment was successful
            if ($paymentIntent->status !== 'succeeded') {
                throw new \Exception('Payment was not successful');
                Session::flash('error', 'Error occurred while subscribing to a plan.');
                return redirect()->back();
            }

            if ($paymentIntent->status == 'succeeded') {
                $usercardplan = UserCardPlan::create([
                    'plan_id'              => $request->plan_id,
                    'user_id'              => $request->user_id,
                    'plan_cycle'           => $product->billing_cycle,
                    'card_preference'      => $cardCheckout['card_preference'],
                    'card_logo'            => $cardCheckout['card_logo'],
                    'card_name'            => $cardCheckout['card_name'],
                    'card_designation'     => $cardCheckout['card_designation'],
                    'card_color'           => $cardCheckout['card_color'],
                    'design_note'          => $cardCheckout['design_note'],
                    'max_user'             => $cardCheckout['card_user'],
                    'amount'               => $request->subtotal,
                    'shipping_charge'      => $cardCheckout['shipping_charge'],
                    'shipping_name'        => $request->shipping_name,
                    'shipping_email'       => $request->shipping_email,
                    'shipping_phone'       => $request->shipping_phone,
                    'shipping_address'     => $request->shipping_address,
                    'shipping_city'        => $request->shipping_city,
                    'shipping_state'       => $request->shipping_state,
                    'shipping_zip_code'    => $request->shipping_zip_code,
                    'shipping_country'     => $request->shipping_country,
                    'subscription_ends_at' => now()->addDays($product->interval),
                ]);
                $card = VirtualCard::create([
                    'card_id'               => $request->card_id,
                    'user_id'               => $request->user_id,
                    'virtual_card_template' => 'virtual-card-one',
                    'card_preference'       => $cardCheckout['card_preference'],
                    'card_logo'             => $cardCheckout['card_logo'],
                    'card_name'             => $cardCheckout['card_name'],
                    'card_designation'      => $cardCheckout['card_designation'],
                    'card_color'            => $cardCheckout['card_color'],
                    'card_email'            => $cardCheckout['email'] ?? null,
                ]);

                NfcShippingDetails::create([
                    'card_id'              => $card->id,
                    'shipping_name'        => $request->shipping_name,
                    'shipping_phone'       => $request->shipping_phone,
                    'shipping_address'     => $request->shipping_address,
                    'shipping_city'        => $request->shipping_city,
                    'shipping_state'       => $request->shipping_state,
                    'shipping_zip_code'    => $request->shipping_zip_code,
                    'shipping_country'     => $request->shipping_country,
                ]);
                // Session::flash('success', 'Plan activated successfully.');
                session()->forget('card_checkout');
            } else {
                Session::flash('error', 'Error occurred while subscribing to a plan.');
                return redirect()->back();
            }
            // Create the invoice
            // $invoice = Invoice::create([
            //     'customer' => $paymentIntent->customer,
            //     // 'billing' => 'send_invoice', // Adjust depending on your actual invoice handling
            // ]);

            // // Send the invoice via email
            // try {
            //     $email = $user->email;
            //     Mail::send('emails.invoice', ['invoice' => $invoice, 'product' => $product], function ($message) use ($email) {
            //         $message->to($email)->subject('NFC Card Payment Invoice');
            //     });
            // } catch (\Exception $e) {
            //     Session::flash('error', "Email sent will be delayed due to server issue.");
            // }
            DB::commit();
            Session::flash('success', 'Plan Activated Successfully');
            return redirect()->route('user.nfc-card.index');
        } catch (\Stripe\Exception\ApiErrorException $e) {
            DB::rollBack();
            return redirect()->back()->with('error', 'Payment failed: ' . $e->getMessage());
        } catch (\Exception $e) {
            DB::rollBack();
            return redirect()->back()->with('error', 'An unexpected error occurred: ' . $e->getMessage());
        }
    }
}

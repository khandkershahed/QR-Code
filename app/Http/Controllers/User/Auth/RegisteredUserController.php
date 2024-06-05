<?php

namespace App\Http\Controllers\User\Auth;

use App\Models\User;
use Illuminate\View\View;
use App\Models\Admin\Plan;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules;
use App\Mail\UserRegistrationMail;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Cache;
use Illuminate\Auth\Events\Registered;
use App\Notifications\UserRegistration;
use App\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\Validator;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        $data['plan'] = Plan::where('billing_cycle', 'trial_period')->first();
        return view('user.auth.register',$data);
    }


    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:' . User::class],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
            'plan' => ['required', 'exists:plans,id'],
        ]);

        return view('');
    }

    // public function stripeCheckout(): View
    // {
    //     $data['plan'] = Plan::where('billing_cycle', 'trial_period')->first();
    //     return view('user.auth.register',$data);
    // }
    // public function store(Request $request): RedirectResponse
    // {
    //     $request->validate([
    //         'name' => ['required', 'string', 'max:255'],
    //         'email' => ['required', 'string', 'email', 'max:255', 'unique:' . User::class],
    //         'password' => ['required', 'confirmed', Rules\Password::defaults()],
    //         'plan' => ['required', 'exists:plans,id'],
    //     ]);

    //     // Generate a unique session identifier
    //     $sessionId = Str::uuid();
    //     \Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));
    //     // Find the selected plan
    //     $plan = Plan::findOrFail($request->input('plan'));

    //     // Set up metadata with the unique session identifier
    //     $metadata = [
    //         'session_id' => $sessionId,
    //         'name' => $request->input('name'),
    //         'email' => $request->input('email'),
    //         'password' => $request->input('password'),
    //         'plan_id' => $plan->id,
    //     ];

    //     // Create checkout session with client_reference_id set to session ID
    //     $checkoutSession = \Stripe\Checkout\Session::create([
    //         'payment_method_types' => ['card'],
    //         'line_items' => [[
    //             'price' => $plan->stripe_plan, // Ensure this is a recurring price ID
    //             'quantity' => 1,
    //         ]],
    //         'mode' => 'subscription',
    //         'success_url' => route('stripe.success', [], true) . "?session_id={CHECKOUT_SESSION_ID}",
    //         'cancel_url' => route('stripe.cancel', [], true),
    //         'client_reference_id' => $sessionId,
    //         'metadata' => $metadata,
    //     ]);

    //     return redirect()->to($checkoutSession->url);
    // }


    // public function stripeCallback()
    // {
    //     // Retrieve registration data from session
    //     $data = session()->get('registration_data');

    //     if (!$data) {
    //         return redirect()->route('register')->withErrors('Registration data not found.');
    //     }

    //     // Assume the user creation was successful in the webhook
    //     return redirect(RouteServiceProvider::HOME)->with('success', 'You have successfully registered with the plan.');
    // }

}

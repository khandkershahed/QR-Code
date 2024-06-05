<?php

namespace App\Http\Controllers\User\Auth;

use App\Models\User;
use Illuminate\View\View;
use App\Models\Admin\Plan;
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

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    // public function store(Request $request): RedirectResponse
    // {
    //     $request->session()->put('registration_data', $request->all());
    //     $request->validate([
    //         'name' => ['required', 'string', 'max:255'],
    //         'email' => ['required', 'string', 'email', 'max:255', 'unique:'.User::class],
    //         'password' => ['required', 'confirmed', Rules\Password::defaults()],
    //     ]);

    //     // Find the plan
    //     $plan = Plan::find($request->plan);

    //     // Create a new user
    //     $user = User::create([
    //         'name' => $request->name,
    //         'email' => $request->email,
    //         'password' => Hash::make($request->password),
    //     ]);
    //     Auth::login($user);
    //     return redirect()->to('https://buy.stripe.com/test_3cseWR79h3M53bG000');
    //     $subscription = $user->newSubscription($plan->slug, $plan->stripe_plan)->create($request->payment_method);
    //     $user->syncStripePlan();

    //     if ($subscription) {



    //         Mail::to($user->email)->send(new UserRegistrationMail($user->name));

    //         return redirect(RouteServiceProvider::HOME)->with('success', 'You have successfully registered with the plan.');
    //     } else {
    //         $user->delete();
    //         return redirect()->back()->with('error', 'Subscription failed. Please try again.');
    //     }
    // }
    // public function store(Request $request): RedirectResponse
    // {
    //     $request->validate([
    //         'name' => ['required', 'string', 'max:255'],
    //         'email' => ['required', 'string', 'email', 'max:255', 'unique:'.User::class],
    //         'password' => ['required', 'confirmed', Rules\Password::defaults()],
    //     ]);

    //     // Store registration data along with a unique identifier
    //     $sessionId = session()->getId(); // Get the session ID
    //     Cache::put('registration_data_' . $sessionId, $request->all(), 60);
    // \Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));
    //     // Create checkout session with client_reference_id set to session ID
    //     $checkoutSession = \Stripe\Checkout\Session::create([
    //         // Other parameters...
    //         'client_reference_id' => $sessionId,
    //     ]);

    //     if (!empty($request->payment_link)) {
    //         return redirect()->to($request->payment_link);
    //     } else {
    //         return redirect()->route('stripe.callback');
    //     }
    // }

    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:' . User::class],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        // Store registration data along with a unique identifier
        $sessionId = session()->getId(); // Get the session ID
        Cache::put('registration_data_' . $sessionId, $request->all(), 60);

        // Find the selected plan
        $plan = Plan::find($request->input('plan'));
        \Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));

        // Create checkout session with client_reference_id set to session ID
        $checkoutSession = \Stripe\Checkout\Session::create([
            'payment_method_types' => ['card'],
            'line_items' => [[
                'price' => $plan->stripe_plan, // Ensure this is a recurring price ID
                'quantity' => 1,
            ]],
            'mode' => 'subscription',
            'success_url' => route('stripe.success', [], true) . "?session_id={CHECKOUT_SESSION_ID}",
            'cancel_url' => route('stripe.cancel', [], true),
            'client_reference_id' => $sessionId,
        ]);

        return redirect()->to($checkoutSession->url);
    }


    // public function stripeCallback(Request $request)
    // {

    //     // Retrieve registration data from session
    //     $data = session()->get('registration_data');
    //     $plan = Plan::find($data['plan']);
    //     // Validate registration data
    //     $validatedData = Validator::make($data, [
    //         'name' => ['required', 'string', 'max:255'],
    //         'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
    //         'password' => ['required', 'confirmed', Rules\Password::defaults()],
    //     ])->validate();

    //     // Create the user
    //     $user = User::create([
    //         'name' => $validatedData['name'],
    //         'email' => $validatedData['email'],
    //         'password' => Hash::make($validatedData['password']),
    //     ]);

    //     $subscription = $user->newSubscription($plan->slug, $plan->stripe_plan)->create($request->payment_method);
    //     $user->syncStripePlan();

    //     Auth::login($user);

    //     Mail::to($user->email)->send(new UserRegistrationMail($user->name));

    //     session()->forget('registration_data');

    //     // Redirect to the dashboard or landing page
    //     return redirect(RouteServiceProvider::HOME)->with('success', 'You have successfully registered with the plan.');
    // }
    public function stripeCallback()
    {
        // Retrieve registration data from session
        $data = session()->get('registration_data');

        if (!$data) {
            return redirect()->route('register')->withErrors('Registration data not found.');
        }

        // Assume the user creation was successful in the webhook
        return redirect(RouteServiceProvider::HOME)->with('success', 'You have successfully registered with the plan.');
    }

}

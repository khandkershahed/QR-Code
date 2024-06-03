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
    public function store(Request $request): RedirectResponse
    {
        $request->session()->put('registration_data', $request->all());
        if (!empty($request->payment_link)) {
            return redirect()->to($request->payment_link);
        } else {
            return redirect()->route('stripe.callback');
        }


    }

    public function stripeCallback(Request $request)
    {
        // Retrieve registration data from session
        $data = session()->get('registration_data');

        // Validate registration data
        $validatedData = Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ])->validate();

        // Create the user
        $user = User::create([
            'name' => $validatedData['name'],
            'email' => $validatedData['email'],
            'password' => Hash::make($validatedData['password']),
        ]);

        Auth::login($user);

        Mail::to($user->email)->send(new UserRegistrationMail($user->name));

        session()->forget('registration_data');

        // Redirect to the dashboard or landing page
        return redirect(RouteServiceProvider::HOME)->with('success', 'You have successfully registered with the plan.');
    }

}

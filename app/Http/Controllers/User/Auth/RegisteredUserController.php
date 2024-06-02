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
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:'.User::class],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        // Find the plan
        $plan = Plan::find($request->plan);

        // Create a new user
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);


        $subscription = $user->newSubscription($plan->slug, $plan->stripe_plan)->create($request->payment_method);
        $user->syncStripePlan();

        if ($subscription) {

            Auth::login($user);

            Mail::to($user->email)->send(new UserRegistrationMail($user->name));

            return redirect(RouteServiceProvider::HOME)->with('success', 'You have successfully registered with the plan.');
        } else {
            $user->delete();
            return redirect()->back()->with('error', 'Subscription failed. Please try again.');
        }
    }
}

<?php

namespace App\Http\Controllers\Reseller\Auth;

use App\Models\User;
use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules;
use App\Http\Controllers\Controller;
use App\Mail\ResellerRegistrationMail;
use App\Models\Reseller;
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
        return view('reseller.auth.register');
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
            'email' => ['required', 'string', 'email', 'max:255', 'unique:'.Reseller::class],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        $user = Reseller::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        event(new Registered($user));
        // $user->notify(new UserRegistration($user->name));
        Auth::login($user);
        Mail::to($user->email)->send(new ResellerRegistrationMail($user->name));
        flash()->addSuccess('You have successfully registered.');
        return redirect(RouteServiceProvider::RESELLER_HOME);
    }
}

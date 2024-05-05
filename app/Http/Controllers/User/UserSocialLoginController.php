<?php

namespace App\Http\Controllers\User;

use Exception;
use App\Models\User;
use Illuminate\Http\Request;
use App\Mail\UserRegistrationMail;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use App\Notifications\UserRegistration;
use App\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\Log;
use Laravel\Socialite\Facades\Socialite;

class UserSocialLoginController extends Controller
{

    public function redirectToGoogle()
    {
        return Socialite::driver('google')->redirect();
    }

    public function handleGoogleCallback()
    {
        try {
            $user = Socialite::driver('google')->user();

            $findUser = User::where('google_id', $user->id)->first();

            if ($findUser) {
                Auth::login($findUser);
                return redirect()->intended(RouteServiceProvider::HOME)->with('success', 'You have logged in Successfully.');
            } else {
                $newUser = User::create([
                    'name' => $user->name,
                    'email' => $user->email,
                    'google_id' => $user->id,
                    'password' => bcrypt('goQRDummy') // Use bcrypt for password hashing
                ]);

                // Send registration email
                // Mail::to($user->email)->send(new UserRegistrationMail($user->name));

                Auth::login($newUser);
            }

            return redirect()->intended(RouteServiceProvider::HOME)->with('success', 'You have logged in Successfully.');
        } catch (Exception $e) {
            Log::error($e->getMessage());
            return redirect()->route('login')->with('error', 'Google cannot recognize you as authorized user. Try again or Login/SignUp manually');
        }
    }


    public function redirectFacebook()
    {
        return Socialite::driver('facebook')->redirect();
    }

    public function facebookCallback()
    {
        try {

            $user = Socialite::driver('facebook')->user();

            $finduser = User::where('facebook_id', $user->id)->first();

            if ($finduser) {

                Auth::login($finduser);
                return redirect()->intended(RouteServiceProvider::HOME)->with('success', 'You have logged in Successfully.');
            } else {
                $newUser = User::create([
                    'name' => $user->name,
                    'email' => $user->email,
                    'facebook_id' => $user->id,
                    'password' => encrypt('goQRDummy')
                ]);
                // $newUser->notify(new UserRegistration($user->name));
                Auth::login($newUser);
                Mail::to($user->email)->send(new UserRegistrationMail($user->name));

                return redirect()->intended(RouteServiceProvider::HOME)->with('success', 'You have logged in Successfully.');
            }
        } catch (Exception $e) {
            Log::error($e->getMessage());
            return redirect()->route('login')->with('error', 'Google cannot recognize you as authorized user. Try again or Login/SignUp manually');
        }
    }


    public function redirectToGithub()
    {
        return Socialite::driver('github')->redirect();
    }

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function handleGithubCallback()
    {
        try {

            $user = Socialite::driver('github')->user();

            $finduser = User::where('github_id', $user->id)->first();

            if ($finduser) {

                Auth::login($finduser);

                return redirect()->intended(RouteServiceProvider::HOME)->with('success', 'You have logged in Successfully.');
            } else {
                $newUser = User::updateOrCreate(['email' => $user->email], [
                    'name' => $user->name,
                    'github_id' => $user->id,
                    'password' => encrypt('goQRDummy')
                ]);
                // $newUser->notify(new UserRegistration($user->name));
                Auth::login($newUser);
                Mail::to($user->email)->send(new UserRegistrationMail($user->name));

                return redirect()->intended(RouteServiceProvider::HOME)->with('success', 'You have logged in Successfully.');
            }
        } catch (Exception $e) {

            Log::error($e->getMessage());
            return redirect()->route('login')->with('error', 'Google cannot recognize you as authorized user. Try again or Login/SignUp manually');
        }
    }
}

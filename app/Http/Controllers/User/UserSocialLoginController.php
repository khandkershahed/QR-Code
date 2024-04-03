<?php

namespace App\Http\Controllers\User;

use Exception;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Providers\RouteServiceProvider;
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

            $finduser = User::where('google_id', $user->id)->first();

            if($finduser){

                Auth::login($finduser);

                return redirect()->intended(RouteServiceProvider::HOME);

            }else{
                $newUser = User::create([
                    'name' => $user->name,
                    'email' => $user->email,
                    'google_id'=> $user->id,
                    'password' => encrypt('123456dummy')
                ]);

                Auth::login($newUser);

                return redirect()->intended(RouteServiceProvider::HOME);
            }

        } catch (Exception $e) {
            dd($e->getMessage());
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

            if($finduser){

                Auth::login($finduser);

                return redirect()->intended(RouteServiceProvider::HOME);

            }else{
                $newUser = User::create([
                    'name' => $user->name,
                    'email' => $user->email,
                    'facebook_id'=> $user->id,
                    'password' => encrypt('Test123456')
                ]);

                Auth::login($newUser);

                return redirect()->intended(RouteServiceProvider::HOME);
            }

        } catch (Exception $e) {
            dd($e->getMessage());
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

            if($finduser){

                Auth::login($finduser);

                return redirect()->intended(RouteServiceProvider::HOME);

            }else{
                $newUser = User::updateOrCreate(['email' => $user->email],[
                        'name' => $user->name,
                        'github_id'=> $user->id,
                        'password' => encrypt('123456dummy')
                    ]);

                Auth::login($newUser);

                return redirect()->intended(RouteServiceProvider::HOME);
            }

        } catch (Exception $e) {
            dd($e->getMessage());
        }
    }


}

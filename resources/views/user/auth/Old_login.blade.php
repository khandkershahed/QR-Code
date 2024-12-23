<x-frontend-app-layout :title="'Login Page'">
    <!-- Session Status -->
    <x-auth-session-status class="mb-4 login_box" :status="session('status')" />
    <div class="container container-box-login">
        <div class="row login-row" style="height: 100vh;position: relative;top: 12rem;">
            <div class="row">
                <div class="col-lg-8 offset-lg-2 mx-auto">
                    <div class="row align-items-center bg-white shadow-sm">
                        <div class="col-lg-6 px-0">
                            <div class="screen">
                                <div class="screen__content">
                                    <form class="login" method="POST" action="{{ route('login') }}"
                                        onsubmit="return validation();" enctype="multipart/form-data">
                                        {{-- <form class="login" action="{{ route('login') }}" method="POST"> --}}
                                        @csrf
                                        <h3 class="mb-4">Login</h3>
                                        <div class="form-outline">
                                            <x-input-label class="form-label" for="email" :value="__('Email')" />
                                            <x-text-input id="email"
                                                class="form-control form-control-sm p-0 px-2 w-75 rounded-0"
                                                type="email" name="email" :value="old('email')" required
                                                autocomplete="username" />
                                            <x-input-error :messages="$errors->get('email')" class="mt-2" />

                                        </div>
                                        <div class="form-outline">
                                            <x-input-label class="form-label" for="password" :value="__('Password')" />

                                            <x-text-input id="password"
                                                class="form-control form-control-sm p-0 px-2 w-75 rounded-0"
                                                type="password" name="password" required autocomplete="new-password" />
                                            <x-input-error :messages="$errors->get('password')" class="mt-2" />
                                        </div>
                                        <div class="form-outline pt-3">
                                            <input class="form-check-input p-0" type="checkbox" value=""
                                                style="width: 20px;height: 20px;" id="remember_me" name="remember" />
                                            <label class="form-check-label" for="remember_me">
                                                {{ __('Remember me') }}
                                            </label>
                                        </div>
                                        @if (Route::has('password.request'))
                                            <div
                                                class="form-check ps-0 pt-2 mb-0 d-flex justify-content-start align-items-center">
                                                <p class="d-flex justify-content-start align-items-center">
                                                <div class="ps-0">
                                                    <span class=""> {{ __('Forgot your password?') }}</span>
                                                </div>
                                                <div class="ps-1">
                                                    <a href="{{ route('password.request') }}"
                                                        class="btn btn-sm btn-link text-warning fw-bold fs-6"
                                                        style="color: var(--)">{{ __('Click Here') }}</a>
                                                </div>
                                                </p>
                                            </div>
                                        @endif
                                        <div
                                            class="form-check ps-0 d-flex justify-content-start align-items-center mb-1">
                                            <p class="d-flex  justify-content-start align-items-center mb-0">
                                                Don't Have an Account ?<span class="text-white"></span>
                                                <a href="{{ route('register') }}"
                                                    class="btn btn-sm btn-link text-warning fw-bold fs-6"
                                                    style="color: var(--)">{{ __('Sign Up') }}</a>
                                            </p>
                                        </div>
                                        <button class="button login__submit rounded-0 mt-3" type="submit">
                                            <span class="button__text">{{ __('Log in') }}</span>
                                            <i class="button__icon fas fa-chevron-right"></i>
                                        </button>
                                        <div class="d-flex align-items-center justify-content-center mt-2">
                                            <a href="{{ route('auth.google') }}">
                                                <img src="https://developers.google.com/identity/images/btn_google_signin_dark_normal_web.png"
                                                    style="margin-left: 3em;">
                                            </a>
                                        </div>


                                        <div class="d-flex align-items-center justify-content-center mt-2">
                                            <a class="ml-1 btn btn-primary" href="{{ route('auth.facebook') }}"
                                                style="margin-top: 0px !important;background: #4c6ef5;color: #ffffff;padding: 7px 10px;border-radius:2px;"
                                                id="btn-fblogin">
                                                <i class="fa fa-facebook-square" aria-hidden="true"></i> Login with
                                                Facebook
                                            </a>
                                        </div>

                                        {{-- <div class="d-flex align-items-center justify-content-center mt-2">
                                            <a class="btn" href="{{ route('auth.github') }}"
                                                style="background: black; padding: 7px; width: 80%; text-align: center; display: block; border-radius:2px; color: #ffffff;">
                                                Login with Github
                                            </a>
                                        </div> --}}
                                    </form>
                                </div>
                                <div class="screen__background">
                                    <span class="screen__background__shape screen__background__shape4"></span>
                                    <span class="screen__background__shape screen__background__shape3"></span>
                                    <span class="screen__background__shape screen__background__shape2"></span>
                                    <span class="screen__background__shape screen__background__shape1"></span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 login-secoand-box">
                            <h4 class="text-center">Thank you for choosing us.</h4>
                            <p class="text-center">Access your account securely and conveniently to unlock a world of
                                personalized experiences. Simply enter your credentials below to gain access to your
                                profile</p>
                            <img class="img-fluid"
                                src="https://img.freepik.com/premium-vector/qr-code-scanning-concept-people-use-smartphone-scan-qr-code-payment-everything_566886-10826.jpg"
                                alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- <div class="row g-3 mb-9">
                                <div class="col-md-6 mx-auto">
                                    <a href="{{ route('auth.google') }}"
                                        class="btn btn-flex border btn-outline btn-text-gray-700 btn-active-color-primary bg-state-light flex-center text-nowrap w-100">
                                        <img alt="Logo"
                                            src="https://preview.keenthemes.com/metronic8/demo1/assets/media/svg/brand-logos/google-icon.svg"
                                            class="h-15px me-3">
                                        Sign in with Google
                                    </a>
                                </div> --}}

    {{-- <div class="col-md-6">
                                    <a href="{{ route('auth.facebook') }}"
                                        class="btn btn-flex border btn-outline btn-text-gray-700 btn-active-color-primary bg-state-light flex-center text-nowrap w-100">
                                        <img alt="Logo"
                                            src="https://i.ibb.co/4twXxBk/png-clipart-facebook-logo-computer-icons-facebook-logo-facebook-thumbnail-removebg-preview.png"
                                            class="theme-light-show h-25px me-3">
                                        Sign in with Facebook
                                    </a>
                                </div>
                            </div> --}}

    {{-- <div class="separator separator-content my-14">
                                <span class="w-125px text-gray-500 fw-semibold fs-7">Or with email</span>
                            </div> --}}

    {{-- <div class="fv-row mb-8 fv-plugins-icon-container">
                                <x-input-label class="form-label" for="email" :value="__('Email')" />
                                <x-text-input id="email" class="form-control bg-transparent rounded-2"
                                    type="email" name="email" :value="old('email')" required autocomplete="username" />
                                <x-input-error :messages="$errors->get('email')" class="mt-2" />
                            </div>

                            <div class="fv-row mb-5 fv-plugins-icon-container">
                                <x-input-label class="form-label" for="password" :value="__('Password')" />
                                <div class="input-group">
                                    <span class="input-group-text " id="toggle_password">
                                        <i class="fas fa-lock text-success"></i>
                                        <i class="fas fa-unlock" style="display: none"></i>
                                    </span>
                                    <x-text-input id="password" aria-describedby="toggle_password"
                                        class="form-control bg-transparent password_input" type="password"
                                        name="password" required autocomplete="new-password" />
                                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                                </div>
                            </div> --}}
</x-frontend-app-layout>

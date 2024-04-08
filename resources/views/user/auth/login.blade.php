<x-admin-guest-layout :title="'Login Page'">
    <div class="d-flex flex-column flex-root" id="kt_app_root">
        <div class="d-flex flex-column flex-lg-row flex-column-fluid">
            <div class="d-flex flex-column flex-lg-row-fluid w-lg-50 p-10 order-2 order-lg-1">
                <div class="d-flex flex-center flex-column flex-lg-row-fluid">
                    <div class="w-lg-500px p-10">

                        {{-- <form class="form w-100 fv-plugins-bootstrap5 fv-plugins-framework" novalidate="novalidate"
                            id="kt_sign_in_form" data-kt-redirect-url="/metronic8/demo1/index.html" action="#"> --}}
                        <form class="login" method="POST" action="{{ route('login') }}" onsubmit="return validation();"
                            enctype="multipart/form-data">
                            @csrf
                            <div class="text-center mb-11">
                                <h1 class="text-gray-900 fw-bolder mb-3">
                                    Sign In
                                </h1>

                                <div class="text-gray-500 fw-semibold fs-6">
                                    Your Social Campaigns
                                </div>
                            </div>

                            <div class="row g-3 mb-9">
                                <div class="col-md-6">
                                    <a href="{{ route('auth.google') }}"
                                        class="btn btn-flex border btn-outline btn-text-gray-700 btn-active-color-primary bg-state-light flex-center text-nowrap w-100">
                                        <img alt="Logo"
                                            src="https://preview.keenthemes.com/metronic8/demo1/assets/media/svg/brand-logos/google-icon.svg"
                                            class="h-15px me-3">
                                        Sign in with Google
                                    </a>
                                </div>

                                <div class="col-md-6">
                                    <a href="{{ route('auth.facebook') }}"
                                        class="btn btn-flex border btn-outline btn-text-gray-700 btn-active-color-primary bg-state-light flex-center text-nowrap w-100">
                                        <img alt="Logo"
                                            src="https://i.ibb.co/4twXxBk/png-clipart-facebook-logo-computer-icons-facebook-logo-facebook-thumbnail-removebg-preview.png"
                                            class="theme-light-show h-25px me-3">
                                        Sign in with Facebook
                                    </a>
                                </div>
                            </div>

                            <div class="separator separator-content my-14">
                                <span class="w-125px text-gray-500 fw-semibold fs-7">Or with email</span>
                            </div>

                            <div class="fv-row mb-8 fv-plugins-icon-container">
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
                            </div>

                            <div class="d-flex flex-stack flex-wrap gap-3 fs-base fw-semibold mb-8">
                                <div>
                                    <input class="form-check-input p-0" type="checkbox" value=""
                                        style="width: 20px;height: 20px;" id="remember_me" name="remember" />
                                    <label class="form-check-label" for="remember_me">
                                        {{ __('Remember me') }}
                                    </label>
                                </div>

                                @if (Route::has('password.request'))
                                    <a href="{{ route('password.request') }}" class="link-primary">
                                        {{ __('Forgot your password ?') }}
                                    </a>
                                @endif
                            </div>

                            <div class="d-grid mb-10">
                                <button type="submit" class="btn btn-primary">
                                    <span class="indicator-label">
                                        Sign In</span>
                                    <span class="indicator-progress">
                                        Please wait... <span
                                            class="spinner-border spinner-border-sm align-middle ms-2"></span>
                                    </span>
                            </div>
                            <div class="text-gray-500 text-center fw-semibold fs-6">
                                Not a Member yet?
                                <a href="{{ route('register') }}" type="submit" class="link-primary fw-semibold">
                                    {{ __('Sign Up') }}
                                </a>
                            </div>
                        </form>
                    </div>
                </div>

                {{-- <div class="w-lg-500px d-flex justify-content-center px-10 mx-auto">
                    <div class="d-flex fw-semibold text-primary fs-base gap-5">
                        <a href="/metronic8/demo1/pages/team.html" target="_blank">Terms</a>

                        <a href="/metronic8/demo1/pages/pricing/column.html" target="_blank">Plans</a>

                        <a href="/metronic8/demo1/pages/contact.html" target="_blank">Contact Us</a>
                    </div>
                </div> --}}
            </div>

            <div class="d-flex flex-lg-row-fluid w-lg-50 bgi-size-cover bgi-position-center order-1 order-lg-2"
                style="background-image: url(https://preview.keenthemes.com/metronic8/demo1/assets/media/misc/auth-bg.png)">
                <div class="d-flex flex-column flex-center py-7 py-lg-15 px-5 px-md-15 w-100">
                    <a href="/metronic8/demo1/index.html" class="mb-0 mb-lg-12">
                        <img alt="Logo" src="https://i.ibb.co/BNBTVN4/logo.png" class="h-60px h-lg-75px">
                    </a>

                    <img class="d-none d-lg-block mx-auto w-275px w-md-50 w-xl-500px mb-10 mb-lg-20"
                        src="https://preview.keenthemes.com/metronic8/demo1/assets/media/misc/auth-screens.png"
                        alt="">

                    <h1 class="d-none d-lg-block text-white fs-2qx fw-bolder text-center mb-7">
                        Fast, Efficient and Productive
                    </h1>

                    <div class="d-none d-lg-block text-white fs-base text-center">
                        In this kind of post, <a href="#" class="opacity-75-hover text-warning fw-bold me-1">the
                            blogger</a>

                        introduces a person they’ve interviewed <br> and provides some background information about

                        <a href="#" class="opacity-75-hover text-warning fw-bold me-1">the interviewee</a>
                        and their <br> work following this is a transcript of the interview.
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Add jQuery library -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#toggle_password').click(function() {
                var input = $("#password");
                var icon1 = $(this).find('.fa-lock');
                var icon2 = $(this).find('.fa-unlock');

                if (input.attr('type') === 'password') {
                    input.attr('type', 'text');
                    icon1.hide().removeClass('text-danger').addClass('text-success');
                    icon2.show().removeClass('text-success').addClass('text-danger');
                } else {
                    input.attr('type', 'password');
                    icon1.show().removeClass('text-success').addClass('text-danger');
                    icon2.hide().removeClass('text-danger').addClass('text-success');
                }

                // Reset input type after 3 seconds (3000 milliseconds)
                setTimeout(function() {
                    input.attr('type', 'password');
                    icon1.show().removeClass('text-success').addClass('text-danger');
                    icon2.hide().removeClass('text-danger').addClass('text-success');
                }, 3000);
            });
        });
    </script>
</x-admin-guest-layout>

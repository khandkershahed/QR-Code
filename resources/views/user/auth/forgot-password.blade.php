<x-admin-guest-layout :title="'Forget Password Page'">
    <style>
        body {
            background-image: url('https://preview.keenthemes.com/metronic8/demo1/assets/media/auth/bg4.jpg');
        }

        [data-bs-theme="dark"] body {
            background-image: url('https://preview.keenthemes.com/metronic8/demo1/assets/media/auth/bg4-dark.jpg');
        }
    </style>
    <div class="d-flex flex-column flex-column-fluid flex-lg-row">
        <!--begin::Aside-->
        <div class="d-flex flex-center w-lg-50 pt-15 pt-lg-0 px-10">
            <!--begin::Aside-->
            <div class="d-flex flex-center flex-lg-start flex-column">
                <!--begin::Logo-->
                <a href="{{ route('homePage') }}" class="mb-7">
                    <img alt="Logo" src="{{ !empty($site->system_logo_white) && file_exists(public_path('storage/webSetting/systemLogoWhite/' . $site->system_logo_white)) ? asset('storage/webSetting/systemLogoWhite/' . $site->system_logo_white) : asset('frontend/assets/images/logos/logo.png') }}">
                </a>
                <!--end::Logo-->

                <!--begin::Title-->
                <h2 class="text-white fw-normal m-0">
                    Branding tools designed for your business
                </h2>
                <!--end::Title-->
            </div>
            <!--begin::Aside-->
        </div>
        <!--begin::Aside-->

        <!--begin::Body-->
        <div
            class="d-flex flex-column-fluid flex-lg-row-auto justify-content-center justify-content-lg-end p-12 p-lg-20">
            <!--begin::Card-->
            <div class="bg-body d-flex flex-column align-items-stretch flex-center rounded-4 w-md-600px p-20">
                <!--begin::Wrapper-->
                <div class="d-flex flex-center flex-column flex-column-fluid px-lg-10 pb-15 pb-lg-20">


                    <!--begin::Form-->
                    <x-auth-session-status class="mb-4" :status="session('status')" />

                    <form class="form w-100 fv-plugins-bootstrap5 fv-plugins-framework" method="POST"
                        action="{{ route('password.email') }}">
                        @csrf

                        <!--begin::Heading-->
                        <div class="text-center mb-10">
                            <!--begin::Title-->
                            <h1 class="text-gray-900 fw-bolder mb-3">
                                Forgot Password ?
                            </h1>
                            <!--end::Title-->

                            <!--begin::Link-->
                            <div class="text-gray-500 fw-semibold fs-6">
                                Enter your email to reset your password.
                            </div>
                            <!--end::Link-->
                        </div>
                        <!--begin::Heading-->

                        <!--begin::Input group--->
                        <div class="fv-row mb-8 fv-plugins-icon-container">

                            {{-- <x-input-label for="email" :value="__('Email')" /> --}}
                            <x-text-input id="email" class="form-control bg-transparent" type="email"
                                name="email" placeholder="Email" :value="old('email')" required autofocus />
                            <x-input-error :messages="$errors->get('email')"
                                class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback mt-2" />
                        </div>

                        <!--begin::Actions-->
                        <div class="d-flex flex-wrap justify-content-center pb-lg-0">

                            <x-primary-button class="me-4">
                                {{ __('Email Password Reset Link') }}
                            </x-primary-button>

                            <a href="{{ route('login') }}" class="btn btn-light">Cancel</a>
                        </div>
                        <!--end::Actions-->
                    </form>
                    <!--end::Form-->
                </div>
                <!--end::Wrapper-->


            </div>
            <!--end::Card-->
        </div>
        <!--end::Body-->
    </div>
</x-admin-guest-layout>
{{-- <x-guest-layout>
    <div class="mb-4 text-sm text-gray-600">
        {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
    </div>

    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('password.email') }}">
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')"
                required autofocus />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <x-primary-button>
                {{ __('Email Password Reset Link') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout> --}}

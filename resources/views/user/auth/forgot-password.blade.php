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
        <div class="d-flex flex-center w-lg-50 pt-15 pt-lg-0 px-10">
            <div class="d-flex flex-center flex-lg-start flex-column">
                <a href="{{ route('homePage') }}" class="mb-7">
                    <img alt="Logo"
                        src="{{ !empty($site->system_logo_white) && file_exists(public_path('storage/webSetting/systemLogoWhite/' . $site->system_logo_white)) ? asset('storage/webSetting/systemLogoWhite/' . $site->system_logo_white) : asset('frontend/assets/images/logos/logo.png') }}">
                </a>
                <h2 class="text-white fw-normal m-0">
                    Branding tools designed for your business
                </h2>
            </div>
        </div>
        <div
            class="d-flex flex-column-fluid flex-lg-row-auto justify-content-center justify-content-lg-end p-12 p-lg-20">
            <div class="bg-body d-flex flex-column align-items-stretch flex-center rounded-4 w-md-600px p-20">
                <div class="d-flex flex-center flex-column flex-column-fluid px-lg-10 pb-15 pb-lg-20">
                    <x-auth-session-status class="mb-4" :status="session('status')" />
                    <form class="form w-100 fv-plugins-bootstrap5 fv-plugins-framework" method="POST"
                        action="{{ route('password.email') }}">
                        @csrf
                        <div class="text-center mb-10">
                            <h1 class="text-gray-900 fw-bolder mb-3">
                                Forgot Password ?
                            </h1>

                            <div class="text-gray-500 fw-semibold fs-6">
                                Enter your email to reset your password.
                            </div>
                        </div>
                        <div class="fv-row mb-8 fv-plugins-icon-container">
                            <x-text-input id="email" class="form-control bg-transparent" type="email"
                                name="email" placeholder="Email" :value="old('email')" required autofocus />
                            <x-input-error :messages="$errors->get('email')"
                                class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback mt-2" />
                        </div>
                        <div class="d-flex flex-wrap justify-content-center pb-lg-0">
                            <x-primary-button class="me-4">
                                {{ __('Email Password Reset Link') }}
                            </x-primary-button>
                            <a href="{{ route('login') }}" class="btn btn-light">Cancel</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-admin-guest-layout>

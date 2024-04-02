<style>
    .sign_up_box {
        height: 100vh;
        position: relative;
        top: 3rem;
        bottom: 3rem;

    }

    .sign_up_row {
        box-shadow: 0 15px 16.83px 0.17px rgba(0, 0, 0, .05);
        border-radius: 20px;
        padding: 20px;
    }

    @media only screen and (max-width: 578px) {
        .nfc-shapes-one {
            margin-top: -80px;
        }

        .nfc-bio-one {
            padding-top: 15px;
        }

        .sign_up_box {
            height: 100vh;
            position: relative;
            top: 10rem;
            bottom: 3rem;

        }

        .sing_up_box_card {
            padding: 10px;
        }

        .sign_up_row {
            box-shadow: 0 15px 16.83px 0.17px rgba(0, 0, 0, .05);
            border-radius: 20px;
            padding: 32px;
        }
    }
</style>
<x-frontend-app-layout :title="'Register New Account'">
    <x-auth-session-status class="mb-4 login_box" :status="session('status')" />
    <div class="contianer d-flex justify-content-center align-items-center sign_up_box">
        <div class="row align-items-center ">
            <div class="col-lg-12">
                <div class="row g-0 align-items-center sign_up_row">
                    <div class="col-lg-6 ">
                        <div class="card border-0 shadow-none "
                            style="background: hsla(0, 0%, 100%, 0.55);backdrop-filter: blur(30px);">
                            <div class="card-body p-5 sing_up_box_card">
                                <h2 class="fw-bold mb-25">Sign <span>Up</span> Now</h2>
                                <form method="POST" action="{{ route('register') }}">
                                    @csrf
                                    <!-- 2 column grid layout with text inputs for the first and last names -->
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-12">
                                            <div class="form-outline">
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <x-input-label class="form-label" for="name"
                                                            :value="__('Full Name')" />
                                                        <x-text-input id="name"
                                                            class="form-control text-start p-1 form-control-solid mb-2 rounded-0"
                                                            type="text" name="name" :value="old('name')" required
                                                            autofocus autocomplete="name" />
                                                        <x-input-error :messages="$errors->get('name')" class="mt-2" />
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-md-12 col-12">
                                            <div class="form-outline row">
                                                <div class="col-lg-12">
                                                    <x-input-label class="form-label text-start" for="email"
                                                        :value="__('Email')" />
                                                    <x-text-input id="email"
                                                        class="form-control text-start p-1 form-control-solid mb-2 rounded-0"
                                                        type="email" name="email" :value="old('email')" required
                                                        autocomplete="username" />
                                                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 ">
                                            <div class="form-outline row">
                                                <div class="col-lg-12">
                                                    <x-input-label class="form-label" for="password"
                                                        :value="__('Password')" />
                                                    <x-text-input id="password"
                                                        class="form-control text-start p-1 form-control-solid mb-2 rounded-0"
                                                        type="password" name="password" required
                                                        autocomplete="new-password" />
                                                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                                                </div>

                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-md-12">
                                            <div class="form-outline row">
                                                <div class="col-lg-12">
                                                    <x-input-label class="form-label" for="password_confirmation"
                                                        :value="__('Confirm Password')" />
                                                    <x-text-input id="password_confirmation"
                                                        class="form-control text-start p-1 form-control-solid mb-2 rounded-0"
                                                        type="password" name="password_confirmation" required
                                                        autocomplete="new-password" />
                                                    <xinput-error :messages="$errors - > get('password_confirmation')"
                                                        class="mt-2" />

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Checkbox -->
                                    <div class="pt-3">
                                        <div class="form-check">
                                            <input class="form-check-input p-0" type="checkbox" value=""
                                                id="" style="width: 20px; height: 20px;" />
                                            <label class="form-check-label" for="">I agree all statements in
                                                Terms of service</label>
                                        </div>
                                    </div>
                                    <div class="form-check d-flex justify-content-start align-items-center mb-2 ps-0">
                                        <h6 class="d-flex justify-content-center align-items-center">
                                            {{ __('Already registered?') }}
                                            <a href="{{ route('login') }}"
                                                class="btn btn-sm btn-link text-gray fw-bold fs-6">Log
                                                In</a>
                                        </h6>
                                        {{-- <a class="btn btn-sm btn-link text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                                        href="{{ route('login') }}">
                                        {{ __('Already registered?') }}
                                    </a> --}}
                                    </div>
                                    <!-- Submit button -->
                                    <x-primary-button class="btn btn-primary btn-block mb-4">
                                        {{ __('Register') }}
                                    </x-primary-button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 ">
                        <img src="https://colorlib.com/etc/regform/colorlib-regform-7/images/signup-image.jpg"
                            class="w-100 rounded-4 shadow-4" alt="" />
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- <x-guest-layout>
    </x-guest-layout> --}}
</x-frontend-app-layout>

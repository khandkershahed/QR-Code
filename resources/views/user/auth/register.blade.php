<x-guest-layout>
    {{-- <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- Name -->
        <div>
            <x-input-label for="name" :value="__('Name')" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required
                autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')"
                required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required
                autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

            <x-text-input id="password_confirmation" class="block mt-1 w-full" type="password"
                name="password_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>

            <x-primary-button class="ml-4">
                {{ __('Register') }}
            </x-primary-button>
        </div>
    </form> --}}
    <div class="contianer d-flex justify-content-center align-items-center " style="height: 100vh">
        <div class="row align-items-center ">
            <div class="col-lg-12">
                <div class="row g-0 align-items-center">
                    <div class="col-lg-6 ">
                        <div class="card border-0 shadow-sm " style="background: hsla(0, 0%, 100%, 0.55);backdrop-filter: blur(30px);">
                            <div class="card-body p-5 shadow-5 text-center">
                                <h2 class="fw-bold mb-5">Sign <span>Up</span> Now</h2>
                                <p class="fw-bold mb-5">For New User!</p>
                                <form method="POST" action="{{ route('register') }}">
                                    @csrf
                                    <!-- 2 column grid layout with text inputs for the first and last names -->
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-12">
                                            <div class="form-outline">
                                                <div class="row">
                                                    <div class="col-lg-4">
                                                        <x-input-label class="form-label" for="name"
                                                            :value="__('Full Name')" />
                                                    </div>
                                                    <div class="col-lg-8">

                                                        <x-text-input id="name"
                                                            class="form-control text-start form-control-solid mb-2 rounded-0" type="text"
                                                            name="name" :value="old('name')" required autofocus
                                                            autocomplete="name" />
                                                        <x-input-error :messages="$errors->get('name')" class="mt-2" />
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-md-12 col-12">
                                            <div class="form-outline row">
                                                <div class="col-lg-4">
                                                    <x-input-label class="form-label text-start" for="email"
                                                        :value="__('Email')" />

                                                </div>
                                                <div class="col-lg-8">

                                                    <x-text-input id="email" class="form-control text-start form-control-solid mb-2 rounded-0"
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
                                                <div class="col-lg-4">

                                                    <x-input-label class="form-label" for="password"
                                                        :value="__('Password')" />
                                                </div>
                                                <div class="col-lg-8">

                                                    <x-text-input id="password" class="form-control text-start form-control-solid mb-2 rounded-0"
                                                        type="password" name="password" required
                                                        autocomplete="new-password" />
                                                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                                                </div>

                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-md-12">
                                            <div class="form-outline row">
                                                <div class="col-lg-4">

                                                    <x-input-label class="form-label" for="password_confirmation"
                                                        :value="__('Confirm Password')" />
                                                </div>
                                                <div class="col-lg-8">

                                                    <x-text-input id="password_confirmation"
                                                        class="form-control text-start form-control-solid mb-2 rounded-0" type="password"
                                                        name="password_confirmation" required
                                                        autocomplete="new-password" />
                                                    <xinput-error :messages="$errors - > get('password_confirmation')"
                                                        class="mt-2" />

                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Checkbox -->
                                    <div class="form-check d-flex justify-content-center align-items-center mb-2 mt-5">
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
                        <img src="https://i.ibb.co/kGPy82Q/6676419.webp" class="w-100 rounded-4 shadow-4"
                            alt="" />
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-guest-layout>

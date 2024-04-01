<x-admin-guest-layout>
    <div class="d-flex flex-column flex-column-fluid bgi-position-y-bottom position-x-center bgi-no-repeat bgi-size-contain bgi-attachment-fixed"
        style="background-image: url({{ asset('admin/assets/media/illustrations/sketchy-1/14.png') }}">
        <div class="d-flex flex-center flex-column flex-column-fluid p-10 pb-lg-20">
            <a href="../../demo1/dist/index.html" class="mb-12">
                <img alt="Logo" src="{{ asset('https://i.ibb.co/BNBTVN4/logo.png') }}" class="h-40px" />
            </a>
            <div class="w-lg-500px bg-body rounded shadow-sm p-10 p-lg-15 mx-auto">

                <x-auth-session-status class="mb-4" :status="session('status')" />

                <form class="form w-100" action="{{ route('admin.login') }}" method="POST">
                    @csrf

                    <div class="text-center mb-10">
                        <h1 class="text-dark mb-3">GO QR Admin Panel</h1>
                    </div>
                    <div class="fv-row mb-10">
                        <x-metronic.label
                            class="form-label fs-6 fw-bolder text-dark">{{ __('Email') }}</x-metronic.label>
                        <x-metronic.input type="email" name="email"
                            class="form-control form-control-lg form-control-solid"
                            placeholder="Enter your email address" value="{{ old('email') }}"
                            autocomplete="off"></x-metronic.input>
                    </div>
                    <div class="fv-row mb-10">
                        <div class="d-flex flex-stack mb-2">
                            <x-metronic.label
                                class="form-label fw-bolder text-dark fs-6 mb-0">{{ __('Password') }}</x-metronic.label>
                            @if (Route::has('admin.password.request'))
                                <a href="{{ route('admin.password.request') }}" class="link-primary fs-6 fw-bolder">
                                    {{ __('Forgot password ?') }}</a>
                            @endif
                        </div>
                        <x-metronic.input type="password" name="password"
                            class="form-control form-control-lg form-control-solid" placeholder="Enter your password"
                            autocomplete="off"></x-metronic.input>
                    </div>
                    <div class="fv-row mb-10">
                        <div class="d-flex flex-stack mb-2">
                            <div class="mb-3">
                                <div class="form-check">
                                    <input id="remember_me" type="checkbox" class="form-check-input" name="remember">
                                    <x-metronic.label for="remember_me"
                                        class="form-check-label">{{ __('Remember me') }}</x-metronic.label>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="text-center">
                        <x-metronic.button type="submit" class="primary btn-lg w-100 mb-5">
                            <span class="indicator-label"> {{ __('Continue') }}</span>
                        </x-metronic.button>
                        <div class="text-center text-muted text-uppercase fw-bolder mb-5">or</div>
                        <a href="#" class="btn btn-flex flex-center btn-light btn-lg w-100 mb-5">
                            <img alt="Logo" src="{{ asset('admin/assets/media/svg/brand-logos/google-icon.svg') }}"
                                class="h-20px me-3" />Continue with Google</a>
                        <a href="#" class="btn btn-flex flex-center btn-light btn-lg w-100 mb-5">
                            <img alt="Logo" src="{{ asset('admin/assets/media/svg/brand-logos/facebook-4.svg') }}"
                                class="h-20px me-3" />Continue with Facebook</a>
                        <a href="#" class="btn btn-flex flex-center btn-light btn-lg w-100">
                            <img alt="Logo" src="{{ asset('admin/assets/media/svg/brand-logos/apple-black.svg') }}"
                                class="h-20px me-3" />Continue with Apple</a>
                    </div>
                </form>
            </div>
        </div>
        <div class="d-flex flex-center flex-column-auto p-10">
            <div class="d-flex align-items-center fw-bold fs-6">
                <a href="https://keenthemes.com" class="text-muted text-hover-primary px-2">About</a>
                <a href="mailto:support@keenthemes.com" class="text-muted text-hover-primary px-2">Contact</a>
                <a href="https://1.envato.market/EA4JP" class="text-muted text-hover-primary px-2">Contact Us</a>
            </div>
        </div>
    </div>
</x-admin-guest-layout>

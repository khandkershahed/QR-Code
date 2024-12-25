<x-admin-guest-layout>
    <div class="d-flex flex-column flex-column-fluid bgi-position-y-bottom position-x-center bgi-no-repeat bgi-size-contain bgi-attachment-fixed"
        style="background-image: url({{ asset('admin/assets/media/illustrations/sketchy-1/14.png') }}">
        <div class="d-flex flex-center flex-column flex-column-fluid p-10 pb-lg-20">
            <a href="javascript:void(0)" class="mb-12">
                <img alt="Logo" src="{{ !empty($site->system_logo_white) && file_exists(public_path('storage/webSetting/systemLogoWhite/' . $site->system_logo_white)) ? asset('storage/webSetting/systemLogoWhite/' . $site->system_logo_white) : asset('frontend/assets/images/logos/logo.png') }}" class="h-100px" />
            </a>
            <div class="w-lg-500px bg-body rounded shadow-sm p-10 p-lg-15 mx-auto">

                <x-auth-session-status class="mb-4" :status="session('status')" />

                <form class="form w-100" action="{{ route('admin.login') }}" method="POST">
                    @csrf

                    <div class="text-center mb-10">
                        <h1 class="text-dark mb-3">GOFlixza</h1>
                        <p>Welcome To Admin</p>
                    </div>
                    <div class="fv-row mb-10">
                        <x-metronic.label
                            class="form-label fs-6 fw-bolder text-dark">{{ __('Email') }}</x-metronic.label>
                        <x-metronic.input type="email" name="email" id="email"
                            class="form-control form-control-lg form-control-solid"
                            placeholder="Enter your email address" value="{{ old('email') }}"
                            autocomplete="off"></x-metronic.input>
                    </div>
                    <div class="fv-row mb-10">
                        <div class="d-flex flex-stack mb-2">
                            <x-metronic.label
                                class="form-label fw-bolder text-dark fs-6 mb-0">{{ __('Password') }}</x-metronic.label>
                        </div>
                        <div class="position-relative mb-3">
                            <x-metronic.input type="password" name="password" id="password"
                                class="form-control form-control-lg form-control-solid"
                                placeholder="Enter your password" autocomplete="off"></x-metronic.input>
                            <span
                                class="btn btn-sm btn-icon position-absolute translate-middle top-50 end-0 me-n2 toggle-password"
                                data-kt-password-meter-control="visibility">
                                <i class="bi bi-eye-slash fs-2"></i>
                                <i class="bi bi-eye fs-2 d-none"></i>
                            </span>
                        </div>
                    </div>


                    <div class="text-center">
                        <button type="submit" class="btn btn-lg btn-primary w-100 mb-5 rounded-3">
                            <span class="indicator-label">{{ __('Sign In') }}</span>
                        </button>

                    </div>
                </form>
            </div>
        </div>

    </div>

</x-admin-guest-layout>

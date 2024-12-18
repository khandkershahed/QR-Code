<div class="card card-flash">
    <div class="card-header border-0 cursor-pointer">
        <div class="card-title m-0">
            <h3 class="fw-bolder m-0">{{ __('Profile Information') }}</h3>
        </div>
    </div>
    <form id="send-verification" method="post" action="{{ route('admin.verification.send') }}">
        @csrf
    </form>
    <form class="form" method="post" action="{{ route('admin.profile.update') }}">
        @csrf
        @method('patch')
        <div class="card-body border-top">
            <div class="row">
                <div class="col-lg-12">
                    <div class="mb-10 fv-row">
                        <x-metronic.label for="name" class="form-label">{{ __('Name') }}</x-metronic.label>
                        <x-metronic.input id="name" type="text" name="name" :value="old('name', $user->name)"
                            placeholder="Enter Your Name" class="form-control mb-2" />
                        <x-input-error class="mt-2" :messages="$errors->get('name')" />
                    </div>
                </div>
                <div class=" col-lg-12">
                    <div class="mb-10 fv-row">
                        <x-metronic.label for="email" class="form-label">{{ __('Email') }}</x-metronic.label>
                        <x-metronic.input id="email" type="email" name="email" :value="old('email', $user->email)"
                            placeholder="Enter Your Email Address"
                            class="form-control form-control-lg form-control-solid" autocomplete="off" />
                        <x-input-error class="mt-2" :messages="$errors->get('email')" />
                        @if ($user instanceof \Illuminate\Contracts\Auth\MustVerifyEmail && !$user->hasVerifiedEmail())
                            <div>
                                <p class="small mt-2 text-secondary">
                                    {{ __('Your email address is unverified.') }}
                                    <button form="send-verification"
                                        class="text-decoration-underline small text-secondary hover:text-dark rounded-0 focus:outline-none">
                                        {{ __('Click here to re-send the verification email.') }}
                                    </button>
                                </p>
                                @if (session('status') === 'verification-link-sent')
                                    <p class="mt-2 fw-semibold small text-success">
                                        {{ __('A new verification link has been sent to your email address.') }}
                                    </p>
                                @endif
                            </div>
                        @endif
                    </div>
                </div>
                <div class="col-lg-12">
                    <div>
                        <button type="submit" class="btn btn-info w-100">
                            {{ __('Update Profile') }}
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>

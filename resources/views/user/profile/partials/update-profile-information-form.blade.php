<div class="row">
    <div class="col-lg-12">
        <div class="card card-flash shadow-sm">
            <div class="card-header border-0 cursor-pointer">
                <div class="card-title m-0">
                    <h3 class="fw-bolder m-0"> {{ __('Profile Information') }} </h3>
                </div>
            </div>
            <form id="send-verification" method="post" action="{{ route('verification.send') }}">
                @csrf
            </form>
            <form class="form" method="post" action="{{ route('profile.update') }}">
                @csrf
                @method('patch')
                <div class="card-body border-top p-9">
                    <div class="row fv-row">
                        <div class="mb-10 col-lg-6">
                            <x-metronic.label for="name" class="form-label">{{ __('Name') }}</x-metronic.label>
                            <x-metronic.input id="name" type="text" name="name" :value="old('name', $user->name)"
                                placeholder="Enter Your name"></x-metronic.input>
                        </div>
                        <div class="mb-10 col-lg-6">
                            <x-metronic.label class="form-label">{{ __('Email') }}</x-metronic.label>
                            <x-metronic.input type="email" name="email"
                                class="form-control form-control-lg form-control-solid"
                                placeholder="Enter your email address" value="{{ old('email', $user->email) }}"
                                autocomplete="off">
                            </x-metronic.input>
                            @if ($user instanceof \Illuminate\Contracts\Auth\MustVerifyEmail && !$user->hasVerifiedEmail())
                                <div>
                                    <p class="small mt-2 text-secondary">
                                        {{ __('Your email address is unverified.') }}

                                        <button form="send-verification"
                                            class="text-decoration-underline small text-secondary hover:text-dark rounded-0 focus:outline-none"
                                            style="border: none; box-shadow: none;" onclick="this.blur();">
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
                </div>
                <div class="card-footer d-flex justify-content-end py-4 px-9">
                    <x-metronic.button type="submit" class="primary">
                        {{ __('Submit') }}
                    </x-metronic.button>
                    @if (session('status') === 'profile-updated')
                        <p x-data="{ show: true }" x-show="show" x-transition x-init="setTimeout(() => show = false, 2000)"
                            class="text-sm text-gray-600">
                            {{ __('Saved.') }}
                        </p>
                    @endif
                </div>
            </form>
        </div>
    </div>
</div

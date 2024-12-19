<div class="card card-flash ">
    <div class="card-header border-0 cursor-pointer">
        <div class="card-title m-0">
            <h3 class="fw-bolder m-0">{{ __('Update Password') }}</h3>
        </div>
    </div>
    <form class="form" method="post" action="{{ route('admin.password.update') }}">
        @csrf
        @method('put')
        <div class="card-body border-top">
            <div class="row">
                <div class="col-lg-6">
                    <div class="mb-10">
                        <x-metronic.label class="required form-label"
                            for="current_password">{{ __('Current Password') }}</x-metronic.label>
                        <x-metronic.input type="password" id="current_password" name="current_password"
                            class="form-control mb-2" placeholder="Current password" required
                            autocomplete="current-password" />
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="mb-10">
                        <x-metronic.label class="required form-label"
                            for="password">{{ __('New Password') }}</x-metronic.label>
                        <x-metronic.input type="password" id="password" name="password" class="form-control mb-2"
                            placeholder="Enter your new password" required autocomplete="new-password" />
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="mb-10">
                        <x-metronic.label class="required form-label"
                            for="password_confirmation">{{ __('Confirm Password') }}</x-metronic.label>
                        <x-metronic.input type="password" id="password_confirmation" name="password_confirmation"
                            class="form-control mb-2" placeholder="Enter your new password again" required
                            autocomplete="new-password" />
                    </div>
                </div>
                <div class="col-lg-12">
                    <x-metronic.button type="submit" class="primary w-100">
                        {{ __('Update Password') }}
                    </x-metronic.button>
                </div>
            </div>
        </div>
    </form>
</div>

<div class="card card-flash bg-light-danger">
    <div class="card-body">
        <div class="row text-center">
            <div class="col-12">
                <h3 class="fw-bolder m-0 text-danger">{{ __('Delete Account') }}</h3>
            </div>
            <div class="col-12">
                <p class="pt-3 mb-0 text-sm text-black fs-7" style="text-align: justify;">
                    {{ __('Once your account is deleted, all of its resources and data will be permanently deleted. Before deleting your account, please download any data or information that you wish to retain.') }}
                </p>
            </div>
        </div>
        <div class="row mt-15">
            <div class="col-12">
                <div class="d-flex flex-column justify-content-center text-center">
                    <div class="symbol symbol-50px me-5">
                        <img alt="Logo" src="{{ asset('admin/assets/media/svg/avatars/blank-dark.svg') }}" />
                    </div>
                    <div class="d-flex flex-column">
                        <div class="fw-bolder fs-5 text-black">
                            {{ Auth::guard('admin')->user()->name }}
                        </div>
                        <a href="mailto:{{ Auth::guard('admin')->user()->email }}"
                            class="fw-bold text-black text-hover-primary fs-7">
                            {{ Auth::guard('admin')->user()->email }}
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-12">
                <a class="delete-account btn btn-danger font-weight-bold mr-2 w-100 mt-10"
                    href="{{ route('admin.profile.destroy') }}"
                    data-check-password-url="{{ route('admin.checkPassword') }}">
                    {{ __('Delete Account') }}
                </a>
            </div>
        </div>
    </div>
</div>

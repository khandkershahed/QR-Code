<x-admin-app-layout :title="'Add User'">

    <div class="card card-flash">

        <div class="card-body scroll-y mx-5 my-7">
            <form class="form" method="POST" action="{{ route('admin.user-management.store') }}">
                @csrf
                <div class="d-flex flex-column scroll-y me-n7 pe-7" data-kt-scroll="true"
                    data-kt-scroll-activate="{default: false, lg: true}" data-kt-scroll-max-height="auto"
                    data-kt-scroll-offset="300px">
                    <div class="row">
                        <div class="col-lg-6 mb-7">
                            <x-metronic.label for="name"
                                class="required fw-bold fs-6 mb-2">{{ __('Full Name') }}</x-metronic.label>
                            <x-metronic.input id="name" type="text" class="form-control-solid mb-3 mb-lg-0"
                                name="name" :value="old('name')" placeholder="Enter Full name"></x-metronic.input>
                        </div>
                        <div class="col-lg-6 mb-7">
                            <x-metronic.label for="email"
                                class="required fw-bold fs-6 mb-2">{{ __('Email') }}</x-metronic.label>
                            <x-metronic.input id="email" type="email" class="form-control-solid mb-3 mb-lg-0"
                                name="email" :value="old('email')" placeholder="example@domain.com"></x-metronic.input>
                        </div>
                        <div class="col-lg-6 mb-7">
                            <x-metronic.label for="password"
                                class="required fw-bold fs-6 mb-2">{{ __('Password') }}</x-metronic.label>
                            <x-metronic.input id="password" type="password" class="form-control-solid mb-3 mb-lg-0"
                                name="password" :value="old('password')" placeholder="Enter Password"></x-metronic.input>
                        </div>
                        <div class="col-lg-6 mb-7">
                            <x-metronic.label for="password_confirmation"
                                class="required fw-bold fs-6 mb-2">{{ __('Confirm Password') }}</x-metronic.label>
                            <x-metronic.input id="password_confirmation" type="password"
                                class="form-control-solid mb-3 mb-lg-0" name="password_confirmation"
                                placeholder="Confirm the password"></x-metronic.input>
                        </div>
                        <div class="w-25 mt-3">
                            <div class="text-end">
                                <x-metronic.button type="submit" class="primary">
                                    {{ __('Submit') }}
                                </x-metronic.button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>

</x-admin-app-layout>

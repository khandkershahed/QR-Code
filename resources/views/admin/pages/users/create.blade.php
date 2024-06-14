<x-admin-app-layout :title="'Add Admin'">

    <div class="card card-flash">

        <div class="card-body scroll-y mx-5 my-7">
            <form class="form" method="POST" action="{{ route('admin.user.store') }}">
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
                        <div class="d-flex align-items-end ">
                            <div class="ms-3 p-3 w-25" style="border: 1px dashed green;">
                                <label class="required fw-bold fs-6 mb-5">Role</label>
                                @foreach ($roles as $role)
                                    <div class="d-flex fv-row">
                                        <div class="form-check form-check-custom form-check-solid mb-2">

                                            <x-metronic.checkbox id="role-name-{{ $role->id }}" type="radio"
                                                name="roles[]" :value="$role->name"></x-metronic.checkbox>


                                            {{-- <input class="form-check-input me-3" name="roles[]" type="radio" value="0"
                                            id="kt_modal_update_role_option_0" checked='checked' /> --}}
                                            <x-metronic.label for="role-name-{{ $role->id }}"
                                                class="form-check-radio ps-2 text-capitalize ">{{ $role->name }}</x-metronic.label>
                                            {{-- <label class="form-check-label" for="kt_modal_update_role_option_0">
                                            <div class="fw-bolder text-gray-800">
                                                {{ $role->name }}</div>
                                            <div class="text-gray-600">Best for
                                                business owners and company
                                                administrators</div>
                                        </label> --}}
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                            <div class="w-50 ms-5 bg-light-warning p-5 rounded-2">
                                <h4 class="text-danger">Warning</h4>
                                <ul>
                                    <li>Authentication and Authorization: Implement a robust authentication system to
                                        verify the identity</li>
                                    <li>User Registration: Design a user-friendly registration process for admins.</li>
                                    <li>User Notifications: Notify admins about important events related to user
                                        accounts</li>
                                    <li>User Notifications: Notify admins about important events related to user
                                        accounts</li>
                                </ul>
                            </div>
                            <div class="w-25">
                                <div class="text-end">
                                    <x-metronic.button type="submit" class="primary">
                                        {{ __('Submit') }}
                                    </x-metronic.button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
    {{-- <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <form method="POST" action="{{ route('admin.user.store') }}">
                @csrf

                <div>
                    <x-input-label for="name" :value="__('Name')" />
                    <x-text-input id="name" class="block mt-1 w-full" type="text" name="name"
                        :value="old('name')" required autofocus autocomplete="name" />
                    <x-input-error :messages="$errors->get('name')" class="mt-2" />
                </div>

                <div class="mt-4">
                    <x-input-label for="email" :value="__('Email')" />
                    <x-text-input id="email" class="block mt-1 w-full" type="email" name="email"
                        :value="old('email')" required autocomplete="username" />
                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                </div>

                <div class="mt-4">
                    <x-input-label for="password" :value="__('Password')" />

                    <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required
                        autocomplete="new-password" />

                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                </div>

                <div class="mt-4">
                    <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

                    <x-text-input id="password_confirmation" class="block mt-1 w-full" type="password"
                        name="password_confirmation" required autocomplete="new-password" />

                    <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                </div>

                <div class="mb-4">
                    <label for="role" class="block text-gray-700 text-sm font-bold mb-2">Role</label>
                    <select name="roles[]" id="role" multiple
                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline js-example-basic-multiple">
                        @foreach ($roles as $role)
                            <option value="{{ $role->name }}">{{ $role->name }}</option>
                        @endforeach
                    </select>
                    @error('role')
                        <p class="text-red-500 text-xs italic mt-4">{{ $message }}</p>
                    @enderror
                </div>

                <div class="flex items-center justify-end mt-4">
                    <x-primary-button class="ml-4">
                        {{ __('Register') }}
                    </x-primary-button>
                </div>
            </form>
        </div>
    </div> --}}
</x-admin-app-layout>

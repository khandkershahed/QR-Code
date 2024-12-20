<x-admin-app-layout :title="'User Edit - Admin Panel'">
    <div class="card card-flash">
        <div class="card-body scroll-y mx-5 mx-xl-15 my-7">
            <form class="form" method="POST" action="{{ route('admin.user.update', $user->id) }}">
                @csrf
                @method('PATCH')
                <div class="d-flex flex-column scroll-y me-n7 pe-7" data-kt-scroll="true"
                    data-kt-scroll-activate="{default: false, lg: true}" data-kt-scroll-max-height="auto"
                    data-kt-scroll-offset="300px">
                    <div class="row">
                        <div class="col-lg-6 mb-7">
                            <x-metronic.label for="name"
                                class="required fw-bold fs-6 mb-2">{{ __('Full Name') }}</x-metronic.label>
                            <x-metronic.input id="name" type="text" class="form-control-solid mb-3 mb-lg-0"
                                name="name" :value="old('name', $user->name)" placeholder="Enter Full name"></x-metronic.input>
                        </div>
                        <div class="col-lg-6 mb-7">
                            <x-metronic.label for="email"
                                class="required fw-bold fs-6 mb-2">{{ __('Email') }}</x-metronic.label>
                            <x-metronic.input id="email" type="email" class="form-control-solid mb-3 mb-lg-0"
                                name="email" :value="old('email', $user->email)" placeholder="example@domain.com"></x-metronic.input>
                        </div>
                        <div class="mb-7">
                            <label class="required fw-bold fs-6 mb-5">Role</label>
                            @foreach ($roles as $role)
                                <div class="d-flex fv-row">
                                    <div class="form-check form-check-custom form-check-solid">
                                        <!-- Input -->
                                        <x-metronic.checkbox id="role-name-{{ $role->id }}" type="checkbox"
                                            name="roles[]" :value="$role->name" :checked="$user->roles->contains($role->id)" />
                                        <!-- Label -->
                                        <x-metronic.label for="role-name-{{ $role->id }}"
                                            class="form-check-label">{{ $role->name }}</x-metronic.label>
                                    </div>
                                </div>
                                <div class='separator separator-dashed my-5'></div>
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="text-center pt-15">
                    <x-metronic.button type="submit" class="primary">
                        {{ __('Save Changes') }}
                    </x-metronic.button>
                </div>
            </form>
        </div>
    </div>
</x-admin-app-layout>

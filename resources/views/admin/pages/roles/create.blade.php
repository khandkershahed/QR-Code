<x-admin-app-layout :title="'Role Add'">
    <div class="card card-flush">
        <form class="form" action="{{ route('admin.role.store') }}" method="POST">
            @csrf
            <div class="card-body d-flex flex-column scroll-y me-n7 pe-7" data-kt-scroll="true"
                data-kt-scroll-activate="{default: false, lg: true}" data-kt-scroll-max-height="auto"
                data-kt-scroll-offset="300px">
                <div class="fv-row mb-10">
                    <x-metronic.label for="role-name"
                        class="col-form-label required fw-bold fs-6">{{ __('Role Name') }}</x-metronic.label>
                    <x-metronic.input id="role-name" type="text" name="name" :value="old('name')"
                        placeholder="Enter the Role name"></x-metronic.input>
                </div>
                <label class="fs-5 fw-bolder form-label mb-2 ps-3 mb-3">Role Permissions</label>
                <div class="fv-row bg-info p-5 pt-2 rounded-1">
                    <div class="table-responsive">
                        <table class="table fs-6 gy-5">
                            <thead class="border-bottom">
                                <tr class="">
                                    <td class="ps-3 text-white">Sl
                                    </td>
                                    <td class="ps-3 text-white">Administrator Access
                                        <i class="fas fa-exclamation-circle ps-1 fs-7" data-bs-toggle="tooltip"
                                            title="Allows a full access to the system"></i>
                                    </td>
                                    <td class="d-flex justify-content-end ">
                                        <label class="form-check form-check-sm form-check-custom form-check-solid me-9">
                                            <input class="form-check-input metronic_select_all" type="checkbox"
                                                value="" id="kt_roles_select_all" />
                                            <span class="form-check-label text-white" for="kt_roles_select_all">Select
                                                all</span>
                                        </label>
                                    </td>
                                </tr>
                            </thead>
                            <tbody class="text-gray-600 fw-bold">
                                @foreach ($permissionsByGroups as $group)
                                    <tr>
                                        <td class="text-white ps-3">{{ $loop->iteration }}</td>
                                        <td class="text-white ps-3">{{ $group->group_name }}</td>
                                        <td class="d-flex justify-content-end text-end">
                                            @foreach ($permissions->where('group_name', $group->group_name) as $permission)
                                                <label
                                                    class="form-check text-end form-check-sm form-check-custom form-check-solid me-9">
                                                    <input class="form-check-input" type="checkbox"
                                                        value="{{ $permission->name }}" name="permissions[]" />
                                                    <span
                                                        class="form-check-label text-white">{{ $permission->name }}</span>
                                                </label>
                                            @endforeach
                                        </td>
                                    </tr>
                                @endforeach

                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="text-end pt-5">
                    <x-metronic.button type="submit" class="primary btn-pimary">
                        {{ __('Submit') }}
                    </x-metronic.button>
                </div>
            </div>
        </form>
    </div>
</x-admin-app-layout>

<x-admin-app-layout :title="'Roles List - Admin Panel'">
    <div class="row">
        <div class="col-lg-8 offset-lg-2 mx-auto">
            <div class="row my-15">
                @foreach ($roles as $role)
                    <div class="col-md-6">
                        <div class="card card-flush h-md-100">
                            <div class="card-header">
                                <div class="card-title">
                                    <h2>{{ $role->name }}</h2>
                                </div>
                            </div>
                            <div class="card-body pt-1">
                                <div class="fw-bolder text-gray-600 mb-5">Total users with this role:
                                    {{ count($role->users) }}
                                </div>
                                <div class="d-flex flex-column text-gray-600">
                                    @foreach ($role->permissions as $permission)
                                        <div class="d-flex align-items-center py-2">
                                            <span class="bullet bg-primary me-3"></span>{{ $permission->name }}
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                            <div class="card-footer flex-wrap pt-0">
                                <a href="{{ route('admin.role.edit', $role->id) }}"
                                    class="btn btn-light btn-active-light-primary my-1">Edit Role</a>
                            </div>
                        </div>
                    </div>
                @endforeach
                <div class="col-md-6">
                    <div class="card h-md-100">
                        <div class="card-body d-flex flex-center">
                            <a href="{{ route('admin.role.create') }}"
                                class="btn btn-clear d-flex flex-column flex-center">
                                <img src="{{ asset('admin/assets/media/illustrations/sketchy-1/4.png') }}"
                                    alt="" class="mw-100 mh-150px mb-7" />
                                <div class="fw-bolder fs-3 text-gray-600 text-hover-primary">Add New Role</div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-admin-app-layout>

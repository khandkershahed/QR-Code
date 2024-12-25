<x-admin-app-layout :title="'User Management - Admin Panel'">
    <div class="card my-10 rounded-0">
        <div class="card-header p-5 align-items-center rounded-0 bg-info m-0">
            <div>
                <h1 class="mb-0 mt-0 card-title fs-2 text-white">All Registered Users!</h1>
                <p class="text-white mt-2 mb-0">View and manage all registered user information in this page.</p>
            </div>
            <div>
                <a href="{{ route('admin.user-management.create') }}"
                    class="btn btn-white btn-active-light-warning text-hover-inverse-white" data-bs-toggle="tooltip"
                    data-bs-dismiss="click" title="Want To Add New User">
                    <i class="fa-solid fa-user-plus"></i> Add User
                </a>
            </div>
        </div>
        <div class="card-body p-0 px-3 rounded-0">
            <table class="table my-datatable table-striped table-row-bordered mt-0">
                <thead>
                    <tr class="text-start bg-info text-white fw-bolder fs-7 text-uppercase gs-0">
                        <th class="text-center">Sl</th>
                        <th class="">Image</th>
                        <th class="">Name</th>
                        <th class="">Email</th>
                        <th class="">Joined Date</th>
                        <th class="text-end pe-15 "> Actions</th>
                    </tr>
                </thead>
                <tbody class="text-gray-600 fw-bold" style="vertical-align: middle;">
                    @foreach ($users as $user)
                        <tr>
                            <td class="text-center">
                                {{ $loop->iteration }}
                            </td>
                            <td>
                                <div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
                                    <div class="symbol-label">
                                        <img src="{{ asset('https://ui-avatars.com/api/?name=' . urlencode($user->name)) }}"
                                            alt="{{ $user->name }}" class="w-100" />
                                    </div>
                                </div>
                            </td>
                            <td class="">
                                {{ $user->name }}
                            </td>
                            <td>
                                {{ $user->email }}
                            </td>
                            <td>
                                {{ $user->created_at->format('d M, Y') }}
                            </td>
                            <td class="">
                                <div class="d-flex justify-content-end me-4">
                                    <a href="{{ route('admin.user-management.edit', $user->id) }}"
                                        class="btn btn-sm fw-bold btn-info me-2 pe-2 ps-3">
                                        <i class="fa-solid fa-pen"></i>
                                    </a>
                                    <a href="#" class="btn btn-sm fw-bold btn-primary me-2 pe-2 ps-3">
                                        <i class="fa-solid fa-expand"></i>
                                    </a>
                                    <a href="{{ route('admin.user-management.destroy', $user->id) }}"
                                        class="btn btn-sm fw-bold btn-danger delete pe-2 ps-3">
                                        <i class="fa-solid fa-trash"></i>
                                    </a>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</x-admin-app-layout>

<x-admin-app-layout :title="'Notifications Management - Admin Panel'">
    <div class="card my-10 rounded-0">
        <div class="card-header p-5 align-items-center rounded-0 bg-info m-0">
            <div>
                <h1 class="mb-0 mt-0 card-title fs-2 text-white">All Notifications!</h1>
                <p class="text-white mt-2 mb-0">View and manage all notifications information in this page.</p>
            </div>
            <div>
                <button type="button" class="btn btn-white btn-active-light-warning text-hover-inverse-white"
                    data-bs-toggle="modal" data-bs-target="#addNotification" data-bs-toggle="tooltip"
                    data-bs-dismiss="click" title="Want To Add New Notifications">
                    <i class="fa-solid fa-bell"></i> Add Notification
                </button>
            </div>
        </div>
        <div class="card-body p-0 rounded-0">
            <table class="table my-datatable table-striped table-row-bordered mt-0">
                <thead>
                    <tr class="bg-info text-white fw-bolder fs-7 text-uppercase gs-0">
                        <th class="text-center" width="5%">Sl</th>
                        <th class="text-start" width="20%">Title</th>
                        <th class="text-start" width="25%">Message</th>
                        <th class="text-start" width="15%">Users</th>
                        <th class="text-center" width="20%">Created At</th>
                        <th class="text-center" width="10%">Status</th>
                        <th class="text-center" width="10%">Action</th>
                    </tr>
                </thead>
                <tbody class="fw-bold text-gray-600" style="vertical-align: middle">
                    @if ($notifications)
                        @foreach ($notifications as $key => $notification)
                            <tr>
                                <td class="text-center">{{ $key + 1 }}</td>
                                <td class="text-start">{{ $notification->title }}</td>
                                <td>
                                    <p>{!! Str::limit($notification->message, 80, '...') !!}</p>
                                </td>
                                <td>
                                    @foreach ($notification->users as $user)
                                        {{ $user->name }}
                                    @endforeach
                                </td>
                                <td class="text-center">{{ $notification->created_at }}</td>
                                <td class="text-center">
                                    <span class="text-capitalize badge bg-info">{{ $notification->status }}</span>
                                </td>
                                <td class="">
                                    <div class="d-flex justify-content-end me-4">
                                        <button type="button" class="btn btn-sm fw-bold btn-info me-2 pe-2 ps-3"
                                            data-bs-toggle="modal"
                                            data-bs-target="#editNotification{{ $notification->id }}">
                                            <i class="fa-solid fa-pen"></i>
                                        </button>
                                        <button type="button" class="btn btn-sm fw-bold btn-primary me-2 pe-2 ps-3"
                                            data-bs-toggle="modal"
                                            data-bs-target="#viewNotification_{{ $notification->id }}">
                                            <i class="fa-solid fa-expand"></i>
                                        </button>
                                        <a href="{{ route('admin.user-notification.destroy', $notification->id) }}"
                                            class="btn btn-sm fw-bold btn-danger delete pe-2 ps-3">
                                            <i class="fa-solid fa-trash"></i>
                                        </a>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    @else
                        <p>No notifications found.</p>
                    @endif
                </tbody>
            </table>
        </div>
    </div>
    {{-- Add Modal --}}
    <div class="modal fade" id="addNotification" data-backdrop="static">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content rounded-0">
                <div class="modal-header py-3 bg-info rounded-0 pe-2">
                    <h3 class="modal-title text-white">Create & Send Notification</h3>
                    <button type="button" class="btn btn-sm btn-transparent btn-active-info pe-2 ps-3"
                        data-bs-dismiss="modal" aria-label="Close">
                        <i class="fa-solid fa-xmark fs-1"></i>
                    </button>
                </div>
                <form action="{{ route('admin.user-notification.store') }}" class="needs-validation" method="post"
                    novalidate>
                    @csrf
                    <div class="modal-body">
                        <div class="container px-0">
                            <div class="row">
                                <div class="col-lg-12 col-sm-12">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="mb-5">
                                                <label for="validationCustom04" class="form-label required mb-2">Select
                                                    Receivers</label>
                                                <select class="form-select form-select-solid" name="users[]"
                                                    data-dropdown-parent="#faqAddModal" multiple data-control="select2"
                                                    data-placeholder="Select an option" data-allow-clear="true"
                                                    required>
                                                    <option></option>
                                                    @foreach ($users as $user)
                                                        <option value="{{ $user->id }}">{{ $user->name }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                                <div class="invalid-feedback"> Please Select Receivers Name. </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="mb-5">
                                                <label for="validationCustom04"
                                                    class="form-label required mb-2">Status</label>
                                                <select class="form-select form-select-solid" name="status"
                                                    data-dropdown-parent="#faqAddModal" data-control="select2"
                                                    data-placeholder="Select an option" data-allow-clear="true"
                                                    data-hide-search="true" required>
                                                    <option></option>
                                                    <option value="active">Active</option>
                                                    <option value="inactive">InActive</option>
                                                </select>
                                                <div class="invalid-feedback"> Please Select Status. </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="mb-5">
                                                <label for="validationCustom01" class="form-label mb-2">Title</label>
                                                <input type="text" class="form-control form-control-solid"
                                                    name="title" id="validationCustom01" placeholder="Enter title">
                                                <div class="invalid-feedback"> Please Enter A title </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="mb-5">
                                                <label for="validationCustom010"
                                                    class="form-label required mb-2">Message</label>
                                                <textarea rows="4" name="message" class="form-control form-control-solid tinymce" placeholder="Enter Message"
                                                    required></textarea>
                                                <div class="invalid-feedback"> Please Enter Message</div>
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="d-flex justify-content-end">
                                                <button type="submit" class="btn btn-sm btn-info rounded-0">
                                                    <i class="fa-solid fa-bell"></i> Save & Send Notification
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    {{-- Edit Modal --}}
    @foreach ($notifications as $notification)
        <div class="modal fade" id="editNotification{{ $notification->id }}" data-backdrop="static">
            <div class="modal-dialog modal-dialog-centered modal-lg">
                <div class="modal-content rounded-0">
                    <div class="modal-header py-3 bg-info rounded-0 pe-2">
                        <h3 class="modal-title text-white">Edit This Notification</h3>
                        <button type="button" class="btn btn-sm btn-transparent btn-active-info pe-2 ps-3"
                            data-bs-dismiss="modal" aria-label="Close">
                            <i class="fa-solid fa-xmark fs-1"></i>
                        </button>
                    </div>
                    <form action="{{ route('admin.user-notification.update', $notification->id) }}"
                        class="needs-validation" method="post" novalidate>
                        @csrf
                        @method('PUT')
                        <div class="modal-body">
                            <div class="container px-0">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="mb-5">
                                            <label for="validationCustom01" class="form-label mb-2">Title</label>
                                            <input type="text" class="form-control form-control-solid"
                                                value="{{ $notification->title }}" name="title"
                                                id="validationCustom01" placeholder="Enter title">
                                            <div class="invalid-feedback"> Please Enter A title </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-5">
                                            <label for="validationCustom04" class="form-label required mb-2">Select
                                                Receivers</label>
                                            <select class="form-select form-select-solid" name="users[]"
                                                data-dropdown-parent="#faqAddModal" multiple data-control="select2"
                                                data-placeholder="Select an option" data-allow-clear="true" required>
                                                <option></option>
                                                @foreach ($users as $user)
                                                    <option value="{{ $user->id }}"
                                                        {{ in_array($user->id, $notification->users->pluck('id')->toArray()) ? 'selected' : '' }}>
                                                        {{ $user->name }}
                                                    </option>
                                                @endforeach
                                            </select>
                                            <div class="invalid-feedback"> Please Select Receivers Name. </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-5">
                                            <label for="validationCustom04"
                                                class="form-label required mb-2">Status</label>
                                            <select class="form-select form-select-solid" name="status"
                                                data-dropdown-parent="#editNotification{{ $notification->id }}"
                                                data-control="select2" data-placeholder="Select an option"
                                                data-allow-clear="true" data-hide-search="true" required>
                                                <option></option>
                                                <option @selected($notification->status == 'active') value="active">Active
                                                </option>
                                                <option @selected($notification->status == 'inactive') value="inactive">InActive
                                                </option>
                                            </select>
                                            <div class="invalid-feedback"> Please Select Yes Or No. </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="mb-5">
                                            <label for="validationCustom010"
                                                class="form-label required mb-2">Message</label>
                                            <textarea rows="2" name="message" class="form-control form-control-solid tinymce" placeholder="Enter Message"
                                                required>{{ $notification->message }}</textarea>
                                            <div class="invalid-feedback"> Please Enter Message</div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="d-flex justify-content-end">
                                            <button type="submit" class="btn btn-sm btn-primary rounded-0">
                                                <i class="fa-solid fa-bell"></i> Update Notification
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    @endforeach
    {{-- View Modal --}}
    @foreach ($notifications as $notification)
        <div class="modal fade" id="viewNotification_{{ $notification->id }}" data-backdrop="static">
            <div class="modal-dialog modal-dialog-centered modal-lg">
                <div class="modal-content rounded-0">
                    <div class="modal-header py-3 bg-info rounded-0 pe-2">
                        <h3 class="modal-title text-white">View This Notification</h3>
                        <button type="button" class="btn btn-sm btn-transparent btn-active-info pe-2 ps-3"
                            data-bs-dismiss="modal" aria-label="Close">
                            <i class="fa-solid fa-xmark fs-1"></i>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="container px-0">
                            <div class="row">
                                <div class="col-lg-12">
                                    <h3 class="pb-3">
                                        @foreach ($notification->users as $user)
                                            {{ $user->name }}
                                        @endforeach
                                    </h3>
                                    <div class="p-4 border">
                                        <h5>{{ $notification->title ?? 'No Title' }}</h5>
                                        <p>{!! nl2br($notification->message) !!}</p>
                                    </div>
                                    <p class="pt-3">{{ $notification->created_at }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endforeach


</x-admin-app-layout>

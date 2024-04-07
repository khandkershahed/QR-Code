<x-admin-app-layout :title="'Notifications List'">
    <div class="card card-flush">
        <div class="card-header mt-6">
            <div class="card-title">
                <div class="d-flex align-items-center position-relative my-1 me-5">
                    <span class="svg-icon svg-icon-1 position-absolute ms-6">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none">
                            <rect opacity="0.5" x="17.0365" y="15.1223" width="8.15546" height="2" rx="1"
                                transform="rotate(45 17.0365 15.1223)" fill="currentColor" />
                            <path
                                d="M11 19C6.55556 19 3 15.4444 3 11C3 6.55556 6.55556 3 11 3C15.4444 3 19 6.55556 19 11C19 15.4444 15.4444 19 11 19ZM11 5C7.53333 5 5 7.53333 5 11C5 14.4667 7.53333 17 11 17C14.4667 17 17 14.4667 17 11C17 7.53333 14.4667 5 11 5Z"
                                fill="currentColor" />
                        </svg>
                    </span>
                    <input type="text" data-kt-filter="search" class="form-control form-control-solid w-250px ps-15"
                        placeholder="Search Notification" />
                </div>
            </div>
            <div class="card-toolbar">
                <a href="javascript:void(0)" class="btn btn-primary rounded-1" data-kt-menu-placement="bottom-end"
                    data-bs-toggle="modal" data-bs-target="#faqAddModal">
                    <span class="svg-icon svg-icon-3">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none">
                            <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="5"
                                fill="currentColor" />
                            <rect x="10.8891" y="17.8033" width="12" height="2" rx="1"
                                transform="rotate(-90 10.8891 17.8033)" fill="currentColor" />
                            <rect x="6.01041" y="10.9247" width="12" height="2" rx="1"
                                fill="currentColor" />
                        </svg>
                        Add
                    </span>
                </a>
            </div>
        </div>
        <div class="card-body pt-0">
            <table class="table table-striped align-middle table-row-dashed fs-6 gy-5 mb-0 datatable"
                id="kt_datatable_example">
                <thead class="table_header_bg">
                    <tr class="text-center text-gray-900 fw-bolder fs-7 text-uppercase">
                        <th class="text-center" width="3%">Sl</th>
                        <th class="text-center" width="35%">Message</th>
                        <th class="text-center" width="35%">Users</th>
                        <th class="text-center" width="17%">Created At</th>
                        <th class="text-center" width="10%">Action</th>
                    </tr>
                </thead>
                <tbody class="fw-bold text-gray-600 text-center">
                    @if ($notifications)
                        @foreach ($notifications as $key => $notification)
                            <tr>
                                <td class="text-center">{{ $key + 1 }}</td>
                                <td>{!! Str::limit($notification->message, 80, '...') !!}</td>
                                <td>
                                    @foreach ($notification->users as $user)
                                        <span class="badge badge-dark">
                                            {{ $user->name }}</span>
                                    @endforeach
                                </td>
                                <td class="text-center">{{ $notification->created_at }}</td>
                                <td class="d-flex justify-content-between align-items-center">
                                    <a href="#"
                                        class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1"
                                        data-bs-toggle="modal" data-bs-target="#faqViewModal_{{ $notification->id }}">
                                        <i class="fas fa-expand"></i>
                                    </a>
                                    <a href="#"
                                        class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1"
                                        data-bs-toggle="modal" data-bs-target="#faqEditModal_{{ $notification->id }}">
                                        <i class="fas fa-pen"></i>
                                    </a>
                                    <a href="{{ route('admin.user-notification.destroy', $notification->id) }}"
                                        class="btn btn-icon btn-bg-light btn-active-color-danger btn-sm me-1 delete">
                                        <i class="fas fa-trash-alt text-danger"></i>
                                    </a>
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
    <div class="modal fade" id="faqAddModal" data-backdrop="static">
        <div class="modal-dialog modal-dialog-centered modal-xl">
            <div class="modal-content rounded-0 border-0 shadow-sm">
                <div class="modal-header p-2 rounded-0">
                    <h5 class="modal-title ps-5">Send Notification</h5>
                    <div class="btn btn-icon btn-sm btn-active-light-primary ms-2" data-bs-dismiss="modal"
                        aria-label="Close">
                        <i class="fa-solid fa-circle-xmark"></i>
                    </div>
                </div>
                <form action="{{ route('admin.user-notification.store') }}" class="needs-validation" method="post"
                    novalidate>
                    @csrf
                    <div class="modal-body">
                        <div class="container px-0">
                            <div class="row">
                                <div class="col-lg-12 col-sm-12">
                                    <div class="row">
                                        <div class="col-md-5 mb-2">
                                            <label for="validationCustom04" class="form-label required mb-0">Select
                                                Receivers</label>
                                            <select class="form-select-sm form-select form-select-solid"
                                                name="users[]" data-dropdown-parent="#faqAddModal" multiple
                                                data-control="select2" data-placeholder="Select an option"
                                                data-allow-clear="true" required>
                                                <option></option>
                                                @foreach ($users as $user)
                                                    <option value="{{ $user->id }}">{{ $user->name }}</option>
                                                @endforeach
                                            </select>
                                            <div class="invalid-feedback"> Please Select Receivers Name. </div>
                                        </div>
                                        <div class="col-md-4 mb-2">
                                            <label for="validationCustom04"
                                                class="form-label required mb-0">Status</label>
                                            <select class="form-select-sm form-select form-select-solid"
                                                name="status" data-dropdown-parent="#faqAddModal"
                                                data-control="select2" data-placeholder="Select an option"
                                                data-allow-clear="true" data-hide-search="true" required>
                                                <option></option>
                                                <option value="active">Active</option>
                                                <option value="inactive">InActive</option>
                                            </select>
                                            <div class="invalid-feedback"> Please Select Status. </div>
                                        </div>
                                        {{-- <div class="col-md-3 mb-2">
                                            <label for="validationCustom01" class="form-label required mb-0">Order
                                            </label>
                                            <input type="number" id="validationCustom01"
                                                class="form-control form-control-solid form-control-sm" name="order"
                                                minlength="0" maxlength="100" pattern="^-?[1-9]\d*$"
                                                placeholder="Enter order" required value="{{ $order_number }}">
                                            <div class="invalid-feedback"> Please Enter Order Number</div>
                                        </div> --}}
                                        <div class="col-md-12 mb-2">
                                            <label for="validationCustom01" class="form-label mb-0">Title</label>
                                            <input type="text"
                                                class="form-control form-control-solid form-control-sm" name="title"
                                                id="validationCustom01" placeholder="Enter title">
                                            <div class="invalid-feedback"> Please Enter A title </div>
                                        </div>
                                        <div class="col-md-12 mb-2">
                                            <label for="validationCustom010"
                                                class="form-label required mb-0">Message</label>
                                            <textarea rows="4" name="message" class="form-control form-control-sm form-control-solid tinymce"
                                                placeholder="Enter Message" required></textarea>
                                            <div class="invalid-feedback"> Please Enter Message</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer p-2">
                        <button type="submit" class="btn btn-sm btn-light-primary rounded-0">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    {{-- Edit Modal --}}
    @foreach ($notifications as $notification)
        <div class="modal fade" id="faqEditModal_{{ $notification->id }}" data-backdrop="static">
            <div class="modal-dialog modal-dialog-centered modal-xl">
                <div class="modal-content rounded-0 border-0 shadow-sm">
                    <div class="modal-header p-2 rounded-0">
                        <h5 class="modal-title ps-5">Edit Notification</h5>
                        <div class="btn btn-icon btn-sm btn-active-light-primary ms-2" data-bs-dismiss="modal"
                            aria-label="Close">
                            <i class="fa-solid fa-circle-xmark"></i>
                        </div>
                    </div>
                    <form action="{{ route('admin.user-notification.update', $notification->id) }}"
                        class="needs-validation" method="post" novalidate>
                        @csrf
                        @method('PUT')
                        <div class="modal-body">
                            <div class="container px-0">
                                <div class="row">
                                    <div class="col-lg-12 col-sm-12">
                                        <div class="row">
                                            <div class="col-md-5 mb-2">
                                                <label for="validationCustom04"
                                                    class="form-label required mb-0">Select Receivers</label>
                                                <select class="form-select-sm form-select form-select-solid"
                                                    name="users[]" data-dropdown-parent="#faqAddModal" multiple
                                                    data-control="select2" data-placeholder="Select an option"
                                                    data-allow-clear="true" required>
                                                    <option></option>
                                                    @foreach ($users as $user)
                                                        <option value="{{ $user->id }}" {{ in_array($user->id, $notification->users->pluck('id')->toArray()) ? 'selected' : '' }}>{{ $user->name }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                                <div class="invalid-feedback"> Please Select Receivers Name. </div>
                                            </div>
                                            <div class="col-md-4 mb-2">
                                                <label for="validationCustom04"
                                                    class="form-label required mb-0">Status</label>
                                                <select class="form-select-sm form-select form-select-solid"
                                                    name="status"
                                                    data-dropdown-parent="#faqEditModal_{{ $notification->id }}"
                                                    data-control="select2" data-placeholder="Select an option"
                                                    data-allow-clear="true" data-hide-search="true" required>
                                                    <option></option>
                                                    <option @selected($notification->status == 'active') value="active">Active</option>
                                                    <option @selected($notification->status == 'inactive') value="inactive">InActive
                                                    </option>
                                                </select>
                                                <div class="invalid-feedback"> Please Select Yes Or No. </div>
                                            </div>
                                            {{-- <div class="col-md-3 mb-2">
                                                <label for="validationCustom01" class="form-label required mb-0">Order
                                                </label>
                                                <input type="number" id="validationCustom01"
                                                    class="form-control form-control-solid form-control-sm"
                                                    name="order" value="{{ $notification->order }}" minlength="0"
                                                    maxlength="100" pattern="^-?[1-9]\d*$" placeholder="Enter order"
                                                    required>
                                                <div class="invalid-feedback"> Please Enter Order Number</div>
                                            </div> --}}
                                            <div class="col-md-12 mb-2">
                                                <label for="validationCustom01" class="form-label mb-0">Title</label>
                                                <input type="text"
                                                    class="form-control form-control-solid form-control-sm" value="{{ $notification->title }}"
                                                    name="title" id="validationCustom01" placeholder="Enter title">
                                                <div class="invalid-feedback"> Please Enter A title </div>
                                            </div>
                                            <div class="col-md-12 mb-2">
                                                <label for="validationCustom010"
                                                    class="form-label required mb-0">Message</label>
                                                <textarea rows="4" name="message" class="form-control form-control-sm form-control-solid tinymce"
                                                    placeholder="Enter Message" required>{{ $notification->message }}</textarea>
                                                <div class="invalid-feedback"> Please Enter Message</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer p-2">
                            <button type="submit" class="btn btn-sm btn-light-primary rounded-0">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    @endforeach
    {{-- View Modal --}}
    @foreach ($notifications as $notification)
        <div class="modal fade" id="faqViewModal_{{ $notification->id }}" data-backdrop="static">
            <div class="modal-dialog modal-dialog-centered modal-xl">
                <div class="modal-content rounded-0 border-0 shadow-sm">
                    <div class="modal-header p-2 rounded-0">
                        <h5 class="modal-title ps-5">View Faq</h5>
                        <div class="btn btn-icon btn-sm btn-active-light-primary ms-2" data-bs-dismiss="modal"
                            aria-label="Close">
                            <i class="fa-solid fa-circle-xmark"></i>
                        </div>
                    </div>
                    <div class="modal-body">
                        <div class="container px-0">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="card border rounded-0">
                                        <p class="badge badge-info custom-badge p-4 fs-4 justify-content-center">
                                            Info</span>
                                        <div class="card-body p-1 px-2">
                                            <div class="row">
                                                <div class="col-6 mb-4">
                                                    <div class="row">
                                                        <div class="col-lg-12 col-sm-5 mb-3">
                                                            <p class="fw-bold">User :</p>
                                                        </div>
                                                        <div class="col-lg-12 col-sm-6">
                                                            <p>
                                                                <span
                                                                    class="badge {{ $notification->status == 'active' ? 'badge-success' : 'badge-danger' }}">
                                                                    {{ $notification->status == 'active' ? 'Active' : 'Inactive' }}</span>
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-6 mb-4">
                                                    <div class="row">
                                                        <div class="col-lg-12 col-sm-5 mb-3">
                                                            <p class="fw-bold">Status :</p>
                                                        </div>
                                                        <div class="col-lg-12 col-sm-6">
                                                            <p>
                                                                <span
                                                                    class="badge {{ $notification->status == 'active' ? 'badge-success' : 'badge-danger' }}">
                                                                    {{ $notification->status == 'active' ? 'Active' : 'Inactive' }}</span>
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-12 mb-4">
                                                    <div class="row">
                                                        <div class="col-lg-12 col-sm-5 mb-3">
                                                            <p class="fw-bold">Title:
                                                            </p>
                                                        </div>
                                                        <div class="col-lg-12 col-sm-6">
                                                            <span
                                                                class="fs-5 m-1">{{ $notification->title ?? 'No Title' }}</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-12 mb-4">
                                                    <div class="row">
                                                        <div class="col-lg-12 mb-3 col-sm-5">
                                                            <p class="fw-bold">Message :</p>
                                                        </div>
                                                        <div class="col-lg-12 mb-3 col-sm-6">
                                                            <p>{!! nl2br($notification->message) !!}</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endforeach


</x-admin-app-layout>

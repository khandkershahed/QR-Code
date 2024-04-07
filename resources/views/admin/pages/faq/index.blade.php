<x-admin-app-layout :title="'FAQ List'">
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
                    <input type="text" data-kt-filter="search"
                        class="form-control form-control-solid w-250px ps-15" placeholder="Search faq" />
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
                        <th class="" width="3%">Sl</th>
                        <th class="" width="17%">Category Name</th>
                        <th class="" width="60%">Question</th>
                        <th class="" width="10%">Order</th>
                        <th class="text-center" width="10%">Action</th>
                </thead>
                <tbody class="fw-bold text-gray-600 text-center">
                    @if ($faqs)
                        @foreach ($faqs as $faq)
                            <tr class="odd">
                                <td>
                                    {{ $loop->iteration }}
                                </td>
                                <td>
                                    {{ $faq->category_name }}
                                </td>
                                <td>
                                    {{ $faq->question }}
                                </td>
                                <td>
                                    {{ $faq->order }}
                                    {{-- <span
                                        class="badge {{ $faq->status == 'active' ? 'badge-success' : 'badge-danger' }}">
                                        {{ $faq->status == 'active' ? 'Active' : 'Inactive' }}</span> --}}
                                </td>
                                <td class="d-flex justify-content-between align-items-center">
                                    <a href="#"
                                        class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1"
                                        data-bs-toggle="modal" data-bs-target="#faqViewModal_{{ $faq->id }}">
                                        <i class="fas fa-expand"></i>
                                    </a>
                                    <a href="#"
                                        class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1"
                                        data-bs-toggle="modal" data-bs-target="#faqEditModal_{{ $faq->id }}">
                                        <i class="fas fa-pen"></i>
                                    </a>
                                    <a href="{{ route('admin.faq.destroy', $faq->id) }}"
                                        class="btn btn-icon btn-bg-light btn-active-color-danger btn-sm me-1 delete"
                                        data-kt-docs-table-filter="delete_row">
                                        <i class="fas fa-trash-alt text-danger"></i>
                                    </a>
                                </td>
                            </tr>
                        @endforeach
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
                    <h5 class="modal-title ps-5">Add Faq</h5>
                    <div class="btn btn-icon btn-sm btn-active-light-primary ms-2" data-bs-dismiss="modal"
                        aria-label="Close">
                        <i class="fa-solid fa-circle-xmark"></i>
                    </div>
                </div>
                <form action="{{ route('admin.faq.store') }}" class="needs-validation" method="post" novalidate>
                    @csrf
                    <div class="modal-body">
                        <div class="container px-0">
                            <div class="row">
                                <div class="col-lg-12 col-sm-12">
                                    <div class="row">
                                        <div class="col-md-5 mb-2">
                                            <label for="validationCustom04"
                                                class="form-label required mb-0">Category</label>
                                            <select class="form-select-sm form-select form-select-solid"
                                                name="category" data-dropdown-parent="#faqAddModal"
                                                data-control="select2" data-placeholder="Select an option"
                                                data-allow-clear="true" required>
                                                <option></option>
                                                <option value="qr_code">QR Code</option>
                                                <option value="nfc_card">NFC Card</option>
                                                <option value="subscription">Subscription Plan</option>
                                                <option value="reseller_account">Reseller Account</option>
                                                <option value="refund_policy">Refund Policy</option>
                                                <option value="others">Others</option>
                                            </select>
                                            <div class="invalid-feedback"> Please Select Category Name. </div>
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
                                        <div class="col-md-3 mb-2">
                                            <label for="validationCustom01" class="form-label required mb-0">Order
                                            </label>
                                            <input type="number" id="validationCustom01"
                                                class="form-control form-control-solid form-control-sm" name="order"
                                                minlength="0" maxlength="100" pattern="^-?[1-9]\d*$"
                                                placeholder="Enter order" required value="{{ $order_number }}">
                                            <div class="invalid-feedback"> Please Enter Order Number</div>
                                        </div>
                                        <div class="col-md-12 mb-2">
                                            <label for="validationCustom01" class="form-label required mb-0">Question
                                            </label>
                                            <input type="text"
                                                class="form-control form-control-solid form-control-sm"
                                                name="question" id="validationCustom01" placeholder="Enter Question"
                                                required>
                                            <div class="invalid-feedback"> Please Enter A Question </div>
                                        </div>
                                        <div class="col-md-12 mb-2">
                                            <label for="validationCustom010"
                                                class="form-label required mb-0">Answer</label>
                                            <textarea rows="4" name="answer" class="form-control form-control-sm form-control-solid"
                                                placeholder="Enter Answer" required></textarea>
                                            <div class="invalid-feedback"> Please Enter Answer</div>
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
    @foreach ($faqs as $faq)
        <div class="modal fade" id="faqEditModal_{{ $faq->id }}" data-backdrop="static">
            <div class="modal-dialog modal-dialog-centered modal-xl">
                <div class="modal-content rounded-0 border-0 shadow-sm">
                    <div class="modal-header p-2 rounded-0">
                        <h5 class="modal-title ps-5">Edit Faq</h5>
                        <div class="btn btn-icon btn-sm btn-active-light-primary ms-2" data-bs-dismiss="modal"
                            aria-label="Close">
                            <i class="fa-solid fa-circle-xmark"></i>
                        </div>
                    </div>
                    <form action="{{ route('admin.faq.update', $faq->id) }}" class="needs-validation" method="post"
                        novalidate>
                        @csrf
                        @method('PUT')
                        <div class="modal-body">
                            <div class="container px-0">
                                <div class="row">
                                    <div class="col-lg-12 col-sm-12">
                                        <div class="row">
                                            <div class="col-md-5 mb-2">
                                                <label for="validationCustom04"
                                                    class="form-label required mb-0">Category</label>
                                                <select class="form-select-sm form-select form-select-solid"
                                                    name="category"
                                                    data-dropdown-parent="#faqEditModal_{{ $faq->id }}"
                                                    data-control="select2" data-placeholder="Select an option"
                                                    data-allow-clear="true" required>
                                                    <option></option>
                                                    <option value="qr_code" @selected($faq->category == 'qr_code')>QR Code
                                                    </option>
                                                    <option value="nfc_card" @selected($faq->category == 'nfc_card')>NFC Card
                                                    </option>
                                                    <option value="subscription" @selected($faq->category == 'subscription')>
                                                        Subscription Plan</option>
                                                    <option value="reseller_account" @selected($faq->category == 'reseller_account')>
                                                        Reseller Account</option>
                                                    <option value="refund_policy" @selected($faq->category == 'refund_policy')>Refund
                                                        Policy</option>
                                                    <option value="others" @selected($faq->category == 'others')>Others</option>
                                                </select>
                                                <div class="invalid-feedback"> Please Select Category Name. </div>
                                            </div>
                                            <div class="col-md-4 mb-2">
                                                <label for="validationCustom04"
                                                    class="form-label required mb-0">Status</label>
                                                <select class="form-select-sm form-select form-select-solid"
                                                    name="status"
                                                    data-dropdown-parent="#faqEditModal_{{ $faq->id }}"
                                                    data-control="select2" data-placeholder="Select an option"
                                                    data-allow-clear="true" data-hide-search="true" required>
                                                    <option></option>
                                                    <option @selected($faq->status == 'active') value="active">Active</option>
                                                    <option @selected($faq->status == 'inactive') value="inactive">InActive
                                                    </option>
                                                </select>
                                                <div class="invalid-feedback"> Please Select Yes Or No. </div>
                                            </div>
                                            <div class="col-md-3 mb-2">
                                                <label for="validationCustom01" class="form-label required mb-0">Order
                                                </label>
                                                <input type="number" id="validationCustom01"
                                                    class="form-control form-control-solid form-control-sm"
                                                    name="order" value="{{ $faq->order }}" minlength="0"
                                                    maxlength="100" pattern="^-?[1-9]\d*$" placeholder="Enter order"
                                                    required>
                                                <div class="invalid-feedback"> Please Enter Order Number</div>
                                            </div>
                                            <div class="col-md-12 mb-2">
                                                <label for="validationCustom01"
                                                    class="form-label required mb-0">Question
                                                </label>
                                                <input type="text"
                                                    class="form-control form-control-solid form-control-sm"
                                                    name="question" value="{{ $faq->question }}"
                                                    id="validationCustom01" placeholder="Enter Question" required>
                                                <div class="invalid-feedback"> Please Enter A Question </div>
                                            </div>
                                            <div class="col-md-12 mb-2">
                                                <label for="validationCustom010"
                                                    class="form-label required mb-0">Answer</label>
                                                <textarea rows="4" name="answer"
                                                    class="form-control form-control-sm form-control-solid kt_docs_tinymce_plugins" placeholder="Enter Answer"
                                                    required>{{ $faq->answer }}</textarea>
                                                <div class="invalid-feedback"> Please Enter Answer</div>
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
    @foreach ($faqs as $faq)
        <div class="modal fade" id="faqViewModal_{{ $faq->id }}" data-backdrop="static">
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
                                        <p class="badge badge-info custom-badge p-4 fs-4 justify-content-center">Info</span>
                                        <div class="card-body p-1 px-2">
                                            <div class="row">
                                                <div class="col-6 mb-4">
                                                    <div class="row">
                                                        <div class="col-lg-12 col-sm-5 mb-3">
                                                            <p class="fw-bold">Category Name :
                                                            </p>
                                                        </div>
                                                        <div class="col-lg-12 col-sm-6">
                                                            <span
                                                                class="badge badge-primary fs-7 m-1">{{ $faq->category_name ?? 'No Category'  }}</span>
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
                                                                    class="badge {{ $faq->status == 'active' ? 'badge-success' : 'badge-danger' }}">
                                                                    {{ $faq->status == 'active' ? 'Active' : 'Inactive' }}</span>
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-12 mb-4">
                                                    <div class="row">
                                                        <div class="col-lg-12 mb-3 col-sm-5">
                                                            <p class="fw-bold">Question :</p>
                                                        </div>
                                                        <div class="col-lg-12 mb-3 col-sm-6">
                                                            <p>{{ $faq->question }}</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-12">
                                                    <div class="row">
                                                        <div class="col-lg-12 col-sm-5">
                                                            <p class="fw-bold">Answer :</p>
                                                        </div>
                                                        <div class="col-lg-12 col-sm-6">
                                                            <p>
                                                                {{ $faq->answer }}
                                                            </p>
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

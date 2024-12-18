<x-admin-app-layout :title="'FAQ Management - Admin Panel'">
    <div class="card my-10 rounded-0">
        <div class="card-header p-5 align-items-center rounded-0 bg-info m-0">
            <div>
                <h1 class="mb-0 mt-0 card-title fs-2 text-white">All Faqs!</h1>
                <p class="text-white mt-2 mb-0">View and manage all faqs information in this page.</p>
            </div>
            <div>
                <button type="button"
                    class="btn btn-white btn-active-light-warning text-hover-inverse-white"data-kt-menu-placement="bottom-end"
                    data-bs-toggle="modal" data-bs-target="#faqAddModal" data-bs-toggle="tooltip" data-bs-dismiss="click"
                    title="Want To Add New Faqs">
                    <i class="fa-solid fa-user-plus"></i> Add Faq
                </button>
            </div>
        </div>
        <div class="card-body p-0 rounded-0">
            <table class="table my-datatable table-striped table-row-bordered mt-0">
                <thead>
                    <tr class="text-start bg-info text-white fw-bolder fs-7 text-uppercase gs-0">
                        <th width="5%" class="text-center">Sl</th>
                        <th width="20%" class="text-start">Category Name</th>
                        <th width="50%" class="text-statrt">Question</th>
                        <th width="10%" class="text-center">Order</th>
                        <th width="20%" class="text-end pe-15">Action</th>
                    </tr>
                </thead>
                <tbody class="fw-bold text-gray-600">
                    @if ($faqs)
                        @foreach ($faqs as $faq)
                            <tr>
                                <td class="text-center">{{ $loop->iteration }}</td>
                                <td class="text-start">{{ $faq->category_name }}</td>
                                <td class="text-start">{{ $faq->question }}</td>
                                <td class="text-center">{{ $faq->order }}</td>
                                <td class="text-end pe-5">
                                    <a href="javascript:void(0)" class="btn btn-sm fw-bold btn-info pe-2 ps-3"
                                        data-bs-toggle="modal" data-bs-target="#faqViewModal_{{ $faq->id }}">
                                        <i class="fas fa-expand"></i>
                                    </a>
                                    <a href="javascript:void(0)" class="btn btn-sm fw-bold btn-info pe-2 ps-3"
                                        data-bs-toggle="modal" data-bs-target="#faqEditModal_{{ $faq->id }}">
                                        <i class="fas fa-pen"></i>
                                    </a>
                                    <a href="{{ route('admin.faq.destroy', $faq->id) }}"
                                        class="btn btn-sm fw-bold btn-danger delete pe-2 ps-3 delete"
                                        data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                        <i class="fas fa-trash"></i>
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
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content rounded-0">
                <div class="modal-header py-3 bg-info rounded-0 pe-2">
                    <h3 class="modal-title text-white">Create a New Faqs</h3>
                    <button type="button" class="btn btn-sm btn-transparent btn-active-info pe-2 ps-3"
                        data-bs-dismiss="modal" aria-label="Close">
                        <i class="fa-solid fa-xmark fs-1"></i>
                    </button>
                </div>
                <form action="{{ route('admin.faq.store') }}" class="needs-validation" method="post" novalidate>
                    @csrf
                    <div class="modal-body">
                        <div class="container px-0">
                            <div class="row">
                                <div class="col-lg-12 col-sm-12">
                                    <div class="row">
                                        <div class="col-md-5 mb-5">
                                            <label for="validationCustom04"
                                                class="form-label required mb-3">Category</label>
                                            <select class="form-select-sm form-select form-select-solid" name="category"
                                                data-dropdown-parent="#faqAddModal" data-control="select2"
                                                data-placeholder="Select an option" data-allow-clear="true" required>
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
                                        <div class="col-md-4 mb-5">
                                            <label for="validationCustom04"
                                                class="form-label required mb-3">Status</label>
                                            <select class="form-select-sm form-select form-select-solid" name="status"
                                                data-dropdown-parent="#faqAddModal" data-control="select2"
                                                data-placeholder="Select an option" data-allow-clear="true"
                                                data-hide-search="true" required>
                                                <option></option>
                                                <option value="active">Active</option>
                                                <option value="inactive">InActive</option>
                                            </select>
                                            <div class="invalid-feedback"> Please Select Status. </div>
                                        </div>
                                        <div class="col-md-3 mb-5">
                                            <label for="validationCustom01" class="form-label required mb-3">Order
                                            </label>
                                            <input type="number" id="validationCustom01"
                                                class="form-control form-control-solid form-control-sm" name="order"
                                                minlength="0" maxlength="100" pattern="^-?[1-9]\d*$"
                                                placeholder="Enter order" required value="{{ $order_number }}">
                                            <div class="invalid-feedback"> Please Enter Order Number</div>
                                        </div>
                                        <div class="col-md-12 mb-5">
                                            <label for="validationCustom01" class="form-label required mb-3">Question
                                            </label>
                                            <input type="text"
                                                class="form-control form-control-solid form-control-sm"
                                                name="question" id="validationCustom01" placeholder="Enter Question"
                                                required>
                                            <div class="invalid-feedback"> Please Enter A Question </div>
                                        </div>
                                        <div class="col-md-12 mb-5">
                                            <label for="validationCustom010"
                                                class="form-label required mb-3">Answer</label>
                                            <textarea rows="4" name="answer" class="form-control form-control-sm form-control-solid"
                                                placeholder="Enter Answer" required></textarea>
                                            <div class="invalid-feedback"> Please Enter Answer</div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="d-flex justify-content-end">
                                                <button type="submit" class="btn btn-sm btn-info rounded-0">
                                                    <i class="fa-solid fa-cloud-arrow-up"></i> Save New Faq
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
    @foreach ($faqs as $faq)
        <div class="modal fade" id="faqEditModal_{{ $faq->id }}" data-backdrop="static">
            <div class="modal-dialog modal-dialog-centered modal-xl">
                <div class="modal-content rounded-0 border-0 shadow-sm">
                    <div class="modal-header p-2 rounded-0">
                        <h5 class="modal-title ps-5">Edit Faq</h5>
                        <div class="btn btn-icon btn-sm btn-active-light-primary ms-2" data-bs-dismiss="modal"
                            aria-label="Close">
                            <i class="fas fa-circle-xmark"></i>
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
                                                    <option value="refund_policy" @selected($faq->category == 'refund_policy')>
                                                        Refund
                                                        Policy</option>
                                                    <option value="others" @selected($faq->category == 'others')>Others
                                                    </option>
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
                                                    <option @selected($faq->status == 'active') value="active">Active
                                                    </option>
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
                            <i class="fas fa-circle-xmark"></i>
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
                                                            <p class="fw-bold">Category Name :
                                                            </p>
                                                        </div>
                                                        <div class="col-lg-12 col-sm-6">
                                                            <span
                                                                class="badge badge-primary fs-7 m-1">{{ $faq->category_name ?? 'No Category' }}</span>
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

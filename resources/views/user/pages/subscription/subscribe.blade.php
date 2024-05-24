<x-app-layout :title="'Subscribe To Plan'">


    <div id="kt_app_content" class="app-content  flex-column-fluid ">



        <div id="kt_app_content_container" class="app-container  container-xxl ">

            <div class="d-flex flex-column gap-7 gap-lg-10">
                <div class="d-flex flex-wrap flex-stack gap-5 gap-lg-10">

                    <ul
                        class="nav nav-custom nav-tabs nav-line-tabs nav-line-tabs-2x border-0 fs-4 fw-semibold mb-lg-n2 me-auto">

                        <li class="nav-item">
                            <a class="nav-link text-active-primary pb-4 active" data-bs-toggle="tab"
                                href="#kt_ecommerce_sales_order_summary">Order Summary</a>
                        </li>



                        <li class="nav-item">
                            <a class="nav-link text-active-primary pb-4" data-bs-toggle="tab"
                                href="#kt_ecommerce_sales_order_history">Order History</a>
                        </li>

                    </ul>

                </div>

                <div class="d-flex flex-column flex-xl-row gap-7 gap-lg-10">

                    <div class="card card-flush py-4 flex-row-fluid">

                        <div class="card-header">
                            <div class="card-title">
                                <h2>Order Details (#14534)</h2>
                            </div>
                        </div>



                        <div class="card-body pt-0">
                            <div class="table-responsive">

                                <table class="table align-middle table-row-bordered mb-0 fs-6 gy-5 min-w-300px">
                                    <tbody class="fw-semibold text-gray-600">
                                        <tr>
                                            <td class="text-muted">
                                                <div class="d-flex align-items-center">
                                                    <i class="ki-duotone ki-calendar fs-2 me-2"><span
                                                            class="path1"></span><span class="path2"></span></i> Date
                                                    Added
                                                </div>
                                            </td>
                                            <td class="fw-bold text-end">24/05/2024</td>
                                        </tr>
                                        <tr>
                                            <td class="text-muted">
                                                <div class="d-flex align-items-center">
                                                    <i class="ki-duotone ki-wallet fs-2 me-2"><span
                                                            class="path1"></span><span class="path2"></span><span
                                                            class="path3"></span><span class="path4"></span></i>
                                                    Payment Method
                                                </div>
                                            </td>
                                            <td class="fw-bold text-end">
                                                Online
                                                <img src="	https://preview.keenthemes.com/metronic8/demo1/assets/media/svg/card-logos/visa.svg"
                                                    class="w-50px ms-2">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-muted">
                                                <div class="d-flex align-items-center">
                                                    <i class="ki-duotone ki-truck fs-2 me-2"><span
                                                            class="path1"></span><span class="path2"></span><span
                                                            class="path3"></span><span class="path4"></span><span
                                                            class="path5"></span></i> Order Items
                                                </div>
                                            </td>
                                            <td class="fw-bold text-end text-danger">{{ $plan->title }}</td>
                                        </tr>
                                    </tbody>
                                </table>

                            </div>
                        </div>

                    </div>



                    <div class="card card-flush py-4  flex-row-fluid">

                        <div class="card-header">
                            <div class="card-title">
                                <h2>Customer Details</h2>
                            </div>
                        </div>



                        <div class="card-body pt-0">
                            <div class="table-responsive">

                                <table class="table align-middle table-row-bordered mb-0 fs-6 gy-5 min-w-300px">
                                    <tbody class="fw-semibold text-gray-600">
                                        <tr>
                                            <td class="text-muted">
                                                <div class="d-flex align-items-center">
                                                    <i class="ki-duotone ki-profile-circle fs-2 me-2"><span
                                                            class="path1"></span><span class="path2"></span><span
                                                            class="path3"></span></i> Customer
                                                </div>
                                            </td>

                                            <td class="fw-bold text-end">
                                                <div class="d-flex align-items-center justify-content-end">

                                                    <div class="symbol symbol-circle symbol-25px overflow-hidden me-3">
                                                        <a
                                                            href="/metronic8/demo1/apps/ecommerce/customers/details.html">
                                                            <div class="symbol-label">
                                                                <img src="{{ !empty(Auth::user()->profile_image) && file_exists(public_path('storage/user/profile_image/' . Auth::user()->profile_image)) ? asset('storage/user/profile_image/' . Auth::user()->profile_image) : asset('https://ui-avatars.com/api/?name=' . urlencode(Auth::user()->name)) }}"
                                                                    alt="{{ Auth::user()->name }}" class="w-100">
                                                            </div>
                                                        </a>
                                                    </div>



                                                    <a href="/metronic8/demo1/apps/ecommerce/customers/details.html"
                                                        class="text-gray-600 text-hover-primary">{{ Auth::user()->name }}
                                                    </a>

                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-muted">
                                                <div class="d-flex align-items-center">
                                                    <i class="ki-duotone ki-sms fs-2 me-2"><span
                                                            class="path1"></span><span class="path2"></span></i> Email
                                                </div>
                                            </td>
                                            <td class="fw-bold text-end">
                                                <a href="/metronic8/demo1/apps/user-management/users/view.html"
                                                    class="text-gray-600 text-hover-primary">
                                                    {{ Auth::user()->email }} </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-muted">
                                                <div class="d-flex align-items-center">
                                                    <i class="ki-duotone ki-phone fs-2 me-2"><span
                                                            class="path1"></span><span class="path2"></span></i> Phone
                                                </div>
                                            </td>
                                            <td class="fw-bold text-end">{{ Auth::user()->phone }}</td>
                                        </tr>
                                    </tbody>
                                </table>

                            </div>
                        </div>

                    </div>


                    <div class="card card-flush py-4  flex-row-fluid">

                        <div class="card-header">
                            <div class="card-title">
                                <h2>Documents</h2>
                            </div>
                        </div>



                        <div class="card-body pt-0">
                            <div class="table-responsive">

                                <table class="table align-middle table-row-bordered mb-0 fs-6 gy-5 min-w-300px">
                                    <tbody class="fw-semibold text-gray-600">
                                        <tr>
                                            <td class="text-muted">
                                                <div class="d-flex align-items-center">
                                                    <i class="ki-duotone ki-devices fs-2 me-2"><span
                                                            class="path1"></span><span class="path2"></span><span
                                                            class="path3"></span><span class="path4"></span><span
                                                            class="path5"></span></i> Invoice


                                                    <span class="ms-1" data-bs-toggle="tooltip"
                                                        title="View the invoice generated by this order.">
                                                        <i class="ki-duotone ki-information-5 text-gray-500 fs-6"><span
                                                                class="path1"></span><span
                                                                class="path2"></span><span
                                                                class="path3"></span></i></span>
                                                </div>
                                            </td>
                                            <td class="fw-bold text-end"><a
                                                    href="/metronic8/demo1/apps/invoices/view/invoice-3.html"
                                                    class="text-gray-600 text-hover-primary">#INV-000414</a></td>
                                        </tr>
                                        <tr>
                                            <td class="text-muted">
                                                <div class="d-flex align-items-center">
                                                    <i class="ki-duotone ki-truck fs-2 me-2"><span
                                                            class="path1"></span><span class="path2"></span><span
                                                            class="path3"></span><span class="path4"></span><span
                                                            class="path5"></span></i> Shipping


                                                    <span class="ms-1" data-bs-toggle="tooltip"
                                                        title="View the shipping manifest generated by this order.">
                                                        <i class="ki-duotone ki-information-5 text-gray-500 fs-6"><span
                                                                class="path1"></span><span
                                                                class="path2"></span><span
                                                                class="path3"></span></i></span>
                                                </div>
                                            </td>
                                            <td class="fw-bold text-end"><a href="#"
                                                    class="text-gray-600 text-hover-primary">#SHP-0025410</a></td>
                                        </tr>
                                        <tr>
                                            <td class="text-muted">
                                                <div class="d-flex align-items-center">
                                                    <i class="ki-duotone ki-discount fs-2 me-2"><span
                                                            class="path1"></span><span class="path2"></span></i>
                                                    Total Payable


                                                    <span class="ms-1" data-bs-toggle="tooltip"
                                                        title="Reward value earned by customer when purchasing this order">
                                                        <i class="ki-duotone ki-information-5 text-gray-500 fs-6"><span
                                                                class="path1"></span><span
                                                                class="path2"></span><span
                                                                class="path3"></span></i></span>
                                                </div>
                                            </td>
                                            <td class="fw-bold text-end">${{ number_format($plan->price, 2) }}</td>
                                        </tr>
                                    </tbody>
                                </table>

                            </div>
                        </div>

                    </div>

                </div>



                <div class="tab-content">

                    <div class="tab-pane fade show active" id="kt_ecommerce_sales_order_summary" role="tab-panel">

                        <div class="d-flex flex-column gap-7 gap-lg-10">
                            <div class="d-flex flex-column flex-xl-row gap-7 gap-lg-10">

                                <div class="card card-flush py-4 flex-row-fluid position-relative">

                                    <div
                                        class="position-absolute top-0 end-0 bottom-0 opacity-10 d-flex align-items-center me-5">
                                        <i class="ki-solid ki-two-credit-cart" style="font-size: 14em">
                                        </i>
                                    </div>



                                    <div class="card-header">
                                        <div class="card-title">
                                            <h2>Billing Address</h2>
                                        </div>
                                    </div>



                                    <div class="card-body pt-0">
                                        Unit 1/23 Hastings Road,<br>
                                        Melbourne 3000,<br>
                                        Victoria,<br>
                                        Australia.
                                    </div>

                                </div>


                                <div class="card card-flush py-4 flex-row-fluid position-relative">

                                    <div
                                        class="position-absolute top-0 end-0 bottom-0 opacity-10 d-flex align-items-center me-5">
                                        <i class="ki-solid ki-delivery" style="font-size: 13em">
                                        </i>
                                    </div>



                                    <div class="card-header">
                                        <div class="card-title">
                                            <h2>Pay Now</h2>
                                        </div>
                                    </div>



                                    <div class="card-body pt-0">
                                        <form id="payment-form"
                                            class="form fv-plugins-bootstrap5 fv-plugins-framework"
                                            action="{{ route('user.subscription.create') }}" method="POST"
                                            id="payment-form">
                                            @csrf
                                            <div class="d-flex flex-column mb-7 fv-row fv-plugins-icon-container">
                                                <label
                                                    class="d-flex align-items-center fs-6 fw-semibold form-label mb-2">
                                                    <span class="required">Name On Card</span>


                                                    <span class="ms-1" data-bs-toggle="tooltip"
                                                        aria-label="Specify a card holder's name"
                                                        data-bs-original-title="Specify a card holder's name"
                                                        data-kt-initialized="1">
                                                        <i class="ki-duotone ki-information-5 text-gray-500 fs-6"><span
                                                                class="path1"></span><span
                                                                class="path2"></span><span
                                                                class="path3"></span></i></span> </label>

                                                <input type="text" class="form-control form-control-solid"
                                                    placeholder="" name="card_name" value="Max Doe">
                                                <div
                                                    class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback">
                                                </div>
                                            </div>

                                            <div class="d-flex flex-column mb-7 fv-row fv-plugins-icon-container">
                                                <label class="required fs-6 fw-semibold form-label mb-2">Card
                                                    Number</label>

                                                <div class="position-relative">
                                                    <div id="card-element"></div>

                                                    {{-- <div
                                                    class="position-absolute translate-middle-y top-50 end-0 me-5">
                                                    <img src="https://preview.keenthemes.com/metronic8/demo1/assets/media/svg/card-logos/american-express.svg"
                                                        alt="" class="h-25px">
                                                </div> --}}
                                                </div>
                                                <div
                                                    class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback">
                                                </div>
                                            </div>

                                            <div class="row mb-10">
                                                <div class="col-md-8 fv-row">
                                                    <label class="required fs-6 fw-semibold form-label mb-2">Expiration
                                                        Date</label>

                                                    <div class="row fv-row fv-plugins-icon-container">
                                                        <div class="col-6">
                                                            <select name="card_expiry_month"
                                                                class="form-select form-select-solid select2-hidden-accessible"
                                                                data-control="select2" data-hide-search="true"
                                                                data-placeholder="Month"
                                                                data-select2-id="select2-data-21-0539" tabindex="-1"
                                                                aria-hidden="true" data-kt-initialized="1">
                                                                <option data-select2-id="select2-data-23-ctfx">
                                                                </option>
                                                                <option value="1">1</option>
                                                                <option value="2">2</option>
                                                                <option value="3">3</option>
                                                                <option value="4">4</option>
                                                                <option value="5">5</option>
                                                                <option value="6">6</option>
                                                                <option value="7">7</option>
                                                                <option value="8">8</option>
                                                                <option value="9">9</option>
                                                                <option value="10">10</option>
                                                                <option value="11">11</option>
                                                                <option value="12">12</option>
                                                            </select><span
                                                                class="select2 select2-container select2-container--bootstrap5"
                                                                dir="ltr" data-select2-id="select2-data-22-8awd"
                                                                style="width: 100%;"><span class="selection"><span
                                                                        class="select2-selection select2-selection--single form-select form-select-solid"
                                                                        role="combobox" aria-haspopup="true"
                                                                        aria-expanded="false" tabindex="0"
                                                                        aria-disabled="false"
                                                                        aria-labelledby="select2-card_expiry_month-w4-container"
                                                                        aria-controls="select2-card_expiry_month-w4-container"><span
                                                                            class="select2-selection__rendered"
                                                                            id="select2-card_expiry_month-w4-container"
                                                                            role="textbox" aria-readonly="true"
                                                                            title="Month"><span
                                                                                class="select2-selection__placeholder">Month</span></span><span
                                                                            class="select2-selection__arrow"
                                                                            role="presentation"><b
                                                                                role="presentation"></b></span></span></span><span
                                                                    class="dropdown-wrapper"
                                                                    aria-hidden="true"></span></span>
                                                            <div
                                                                class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback">
                                                            </div>
                                                        </div>

                                                        <div class="col-6">
                                                            <select name="card_expiry_year"
                                                                class="form-select form-select-solid select2-hidden-accessible"
                                                                data-control="select2" data-hide-search="true"
                                                                data-placeholder="Year"
                                                                data-select2-id="select2-data-24-trp5" tabindex="-1"
                                                                aria-hidden="true" data-kt-initialized="1">
                                                                <option data-select2-id="select2-data-26-2m5x">
                                                                </option>
                                                                <option value="2024">2024</option>
                                                                <option value="2025">2025</option>
                                                                <option value="2026">2026</option>
                                                                <option value="2027">2027</option>
                                                                <option value="2028">2028</option>
                                                                <option value="2029">2029</option>
                                                                <option value="2030">2030</option>
                                                                <option value="2031">2031</option>
                                                                <option value="2032">2032</option>
                                                                <option value="2033">2033</option>
                                                                <option value="2034">2034</option>
                                                            </select><span
                                                                class="select2 select2-container select2-container--bootstrap5"
                                                                dir="ltr" data-select2-id="select2-data-25-7i1j"
                                                                style="width: 100%;"><span class="selection"><span
                                                                        class="select2-selection select2-selection--single form-select form-select-solid"
                                                                        role="combobox" aria-haspopup="true"
                                                                        aria-expanded="false" tabindex="0"
                                                                        aria-disabled="false"
                                                                        aria-labelledby="select2-card_expiry_year-r6-container"
                                                                        aria-controls="select2-card_expiry_year-r6-container"><span
                                                                            class="select2-selection__rendered"
                                                                            id="select2-card_expiry_year-r6-container"
                                                                            role="textbox" aria-readonly="true"
                                                                            title="Year"><span
                                                                                class="select2-selection__placeholder">Year</span></span><span
                                                                            class="select2-selection__arrow"
                                                                            role="presentation"><b
                                                                                role="presentation"></b></span></span></span><span
                                                                    class="dropdown-wrapper"
                                                                    aria-hidden="true"></span></span>
                                                            <div
                                                                class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 fv-row fv-plugins-icon-container">
                                                    <label
                                                        class="d-flex align-items-center fs-6 fw-semibold form-label mb-2">
                                                        <span class="required">CVV</span>
                                                        <span class="ms-1" data-bs-toggle="tooltip"
                                                            aria-label="Enter a card CVV code"
                                                            data-bs-original-title="Enter a card CVV code"
                                                            data-kt-initialized="1">
                                                            <i class="ki-duotone ki-information-5 text-gray-500 fs-6"><span
                                                                    class="path1"></span><span
                                                                    class="path2"></span><span
                                                                    class="path3"></span></i></span> </label>

                                                    <div class="position-relative">
                                                        <input type="text" class="form-control form-control-solid"
                                                            minlength="3" maxlength="4" placeholder="CVV"
                                                            name="card_cvv">
                                                        <div
                                                            class="position-absolute translate-middle-y top-50 end-0 me-3">
                                                            <i class="ki-duotone ki-credit-cart fs-2hx"><span
                                                                    class="path1"></span><span
                                                                    class="path2"></span></i>
                                                        </div>
                                                    </div>
                                                    <div
                                                        class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="text-end pt-15">
                                                <button type="submit" id="kt_modal_new_card_submit"
                                                    class="btn btn-primary">
                                                    <span class="indicator-label">
                                                        Pay Now
                                                    </span>
                                                    <span class="indicator-progress">
                                                        Please wait... <span
                                                            class="spinner-border spinner-border-sm align-middle ms-2"></span>
                                                    </span>
                                                </button>
                                            </div>
                                        </form>
                                    </div>

                                </div>

                            </div>




                        </div>

                    </div>



                    <div class="tab-pane fade" id="kt_ecommerce_sales_order_history" role="tab-panel">

                        <div class="d-flex flex-column gap-7 gap-lg-10">

                            <div class="card card-flush py-4 flex-row-fluid">

                                <div class="card-header">
                                    <div class="card-title">
                                        <h2>Order History</h2>
                                    </div>
                                </div>



                                <div class="card-body pt-0">
                                    <div class="table-responsive">

                                        <table class="table align-middle table-row-dashed fs-6 gy-5 mb-0">
                                            <thead>
                                                <tr class="text-start text-gray-500 fw-bold fs-7 text-uppercase gs-0">
                                                    <th class="min-w-100px">Order Date</th>
                                                    <th class="min-w-175px">Comment</th>
                                                    <th class="min-w-70px">Order Status</th>
                                                    <th class="min-w-100px">Customer Notifed</th>
                                                </tr>
                                            </thead>
                                            <tbody class="fw-semibold text-gray-600">
                                                <tr>
                                                    <td>{{ date('d-m-y') }}</td>
                                                    <td>
                                                        Order completed </td>
                                                    <td>

                                                        <div class="badge badge-light-success">Completed</div>

                                                    </td>
                                                    <td>
                                                        No </td>
                                                </tr>
                                                <tr>
                                                    <td>23/05/2024</td>
                                                    <td>
                                                        Order received by customer </td>
                                                    <td>

                                                        <div class="badge badge-light-success">Delivered</div>

                                                    </td>
                                                    <td>
                                                        Yes </td>
                                                </tr>
                                                <tr>
                                                    <td>22/05/2024</td>
                                                    <td>
                                                        Order shipped from warehouse </td>
                                                    <td>

                                                        <div class="badge badge-light-primary">Delivering</div>

                                                    </td>
                                                    <td>
                                                        Yes </td>
                                                </tr>
                                                <tr>
                                                    <td>21/05/2024</td>
                                                    <td>
                                                        Payment received </td>
                                                    <td>

                                                        <div class="badge badge-light-primary">Processing</div>

                                                    </td>
                                                    <td>
                                                        No </td>
                                                </tr>
                                                <tr>
                                                    <td>20/05/2024</td>
                                                    <td>
                                                        Pending payment </td>
                                                    <td>

                                                        <div class="badge badge-light-warning">Pending</div>

                                                    </td>
                                                    <td>
                                                        No </td>
                                                </tr>
                                                <tr>
                                                    <td>19/05/2024</td>
                                                    <td>
                                                        Payment method updated </td>
                                                    <td>

                                                        <div class="badge badge-light-warning">Pending</div>

                                                    </td>
                                                    <td>
                                                        No </td>
                                                </tr>
                                                <tr>
                                                    <td>18/05/2024</td>
                                                    <td>
                                                        Payment method expired </td>
                                                    <td>

                                                        <div class="badge badge-light-danger">Failed</div>

                                                    </td>
                                                    <td>
                                                        Yes </td>
                                                </tr>
                                                <tr>
                                                    <td>17/05/2024</td>
                                                    <td>
                                                        Pending payment </td>
                                                    <td>

                                                        <div class="badge badge-light-warning">Pending</div>

                                                    </td>
                                                    <td>
                                                        No </td>
                                                </tr>
                                                <tr>
                                                    <td>16/05/2024</td>
                                                    <td>
                                                        Order received </td>
                                                    <td>

                                                        <div class="badge badge-light-warning">Pending</div>

                                                    </td>
                                                    <td>
                                                        Yes </td>
                                                </tr>
                                            </tbody>
                                        </table>

                                    </div>
                                </div>

                            </div>


                            <div class="card card-flush py-4 flex-row-fluid">

                                <div class="card-header">
                                    <div class="card-title">
                                        <h2>Order Data</h2>
                                    </div>
                                </div>



                                <div class="card-body pt-0">
                                    <div class="table-responsive">

                                        <table class="table align-middle table-row-bordered mb-0 fs-6 gy-5">
                                            <tbody class="fw-semibold text-gray-600">
                                                <tr>
                                                    <td class="text-muted">IP Address</td>
                                                    <td class="fw-bold text-end">172.68.221.26</td>
                                                </tr>
                                                <tr>
                                                    <td class="text-muted">Forwarded IP</td>
                                                    <td class="fw-bold text-end">89.201.163.49</td>
                                                </tr>
                                                <tr>
                                                    <td class="text-muted">User Agent</td>
                                                    <td class="fw-bold text-end">Mozilla/5.0 (Windows NT 10.0; Win64;
                                                        x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/96.0.4664.110
                                                        Safari/537.36</td>
                                                </tr>
                                                <tr>
                                                    <td class="text-muted">Accept Language</td>
                                                    <td class="fw-bold text-end">en-GB,en-US;q=0.9,en;q=0.8</td>
                                                </tr>
                                            </tbody>
                                        </table>

                                    </div>
                                </div>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>




    {{-- <div class="row">
        <div class="col-lg-12">
            <div class="card mb-5 mb-xl-10">
                <div class="card-header card-header-stretch pb-0">
                    <div class="card-title">
                        <h3 class="m-0">Subscribe to Plan:- {{ $plan->title }}</h3>
                    </div>
                </div>
                <div class="card-body">
                    <div class="row gx-9 gy-6">
                        <div class="col-xl-12" data-kt-billing-element="card">
                            <div class="card card-dashed h-xl-100 flex-row flex-stack flex-wrap p-6">
                                <div class="d-flex flex-column py-2">
                                    <div class="d-flex align-items-center fs-4 fw-bold mb-5">
                                        z
                                        <span class="badge badge-light-success fs-7 ms-2">Primary</span>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <img src="https://preview.keenthemes.com/metronic8/demo1/assets/media/svg/card-logos/american-express.svg"
                                            alt="" class="me-4">
                                        <div>
                                            <div class="fs-4 fw-bold">Visa **** 1679</div>
                                            <div class="fs-6 fw-semibold text-gray-500">Card expires at 09/24</div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="fs-6 fw-semibold text-gray-500">Invoice Number: <span>#556</span></div>
                                    <div class="fs-6 fw-semibold text-gray-500">Order Date:
                                        <span></span>
                                    </div>
                                    <div class="fs-6 fw-semibold text-gray-500">Order Item:
                                        <span>{{ $plan->title }}</span>
                                    </div>
                                    <div class="fs-6 fw-semibold text-gray-500">Total Payable: <span
                                            calss="fw-bold"></span></div>
                                </div>
                                <div class="d-flex align-items-center py-2">
                                    <button class="btn btn-sm btn-light btn-active-light-primary"
                                        data-bs-toggle="modal" data-bs-target="#kt_modal_new_card">Edit Card</button>
                                </div>
                                <div class="modal fade" id="kt_modal_new_card" tabindex="-1" aria-modal="true"
                                    role="dialog">
                                    <div class="modal-dialog modal-dialog-centered mw-650px">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h2>Pay Now</h2>
                                                <div class="btn btn-sm btn-icon btn-active-color-primary"
                                                    data-bs-dismiss="modal">
                                                    x
                                                </div>
                                            </div>

                                            <div class="modal-body scroll-y">

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
    </div> --}}

    @push('scripts')
        <script src="https://js.stripe.com/v3/"></script>


        <script>
            const stripe = Stripe('{{ env('STRIPE_KEY') }}')

            const elements = stripe.elements()
            const cardElement = elements.create('card')

            cardElement.mount('#card-element')

            const form = document.getElementById('payment-form')
            const cardBtn = document.getElementById('card-button')
            const cardHolderName = document.getElementById('card-holder-name')

            form.addEventListener('submit', async (e) => {
                e.preventDefault()

                cardBtn.disabled = true
                const {
                    setupIntent,
                    error
                } = await stripe.confirmCardSetup(
                    cardBtn.dataset.secret, {
                        payment_method: {
                            card: cardElement,
                            billing_details: {
                                name: cardHolderName.value
                            }
                        }
                    }
                )

                if (error) {
                    cardBtn.disable = false
                } else {
                    let token = document.createElement('input')
                    token.setAttribute('type', 'hidden')
                    token.setAttribute('name', 'token')
                    token.setAttribute('value', setupIntent.payment_method)
                    form.appendChild(token)
                    form.submit();
                }
            })
        </script>
    @endpush
</x-app-layout>

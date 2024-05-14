<x-app-layout :title="'Subscribe To Plan'">
    <div class="row">
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
                                        {{ Auth::user()->name }}
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
                                        <span>{{ date('d-m-y') }}</span>
                                    </div>
                                    <div class="fs-6 fw-semibold text-gray-500">Order Item:
                                        <span>{{ $plan->title }}</span>
                                    </div>
                                    <div class="fs-6 fw-semibold text-gray-500">Total Payable: <span
                                            calss="fw-bold">${{ number_format($plan->price, 2) }}</span></div>
                                </div>
                                <div class="d-flex align-items-center py-2">
                                    <button class="btn btn-sm btn-light btn-active-light-primary" data-bs-toggle="modal"
                                        data-bs-target="#kt_modal_new_card">Edit Card</button>
                                </div>
                                {{-- Payment modal --}}
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
                                                <form id="payment-form"
                                                    class="form fv-plugins-bootstrap5 fv-plugins-framework"
                                                    action="{{ route('user.subscription.create') }}" method="POST"
                                                    id="payment-form">
                                                    @csrf
                                                    <div
                                                        class="d-flex flex-column mb-7 fv-row fv-plugins-icon-container">
                                                        <label
                                                            class="d-flex align-items-center fs-6 fw-semibold form-label mb-2">
                                                            <span class="required">Name On Card</span>


                                                            <span class="ms-1" data-bs-toggle="tooltip"
                                                                aria-label="Specify a card holder's name"
                                                                data-bs-original-title="Specify a card holder's name"
                                                                data-kt-initialized="1">
                                                                <i
                                                                    class="ki-duotone ki-information-5 text-gray-500 fs-6"><span
                                                                        class="path1"></span><span
                                                                        class="path2"></span><span
                                                                        class="path3"></span></i></span> </label>

                                                        <input type="text" class="form-control form-control-solid"
                                                            placeholder="" name="card_name" value="Max Doe">
                                                        <div
                                                            class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback">
                                                        </div>
                                                    </div>

                                                    <div
                                                        class="d-flex flex-column mb-7 fv-row fv-plugins-icon-container">
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
                                                            <label
                                                                class="required fs-6 fw-semibold form-label mb-2">Expiration
                                                                Date</label>

                                                            <div class="row fv-row fv-plugins-icon-container">
                                                                <div class="col-6">
                                                                    <select name="card_expiry_month"
                                                                        class="form-select form-select-solid select2-hidden-accessible"
                                                                        data-control="select2" data-hide-search="true"
                                                                        data-placeholder="Month"
                                                                        data-select2-id="select2-data-21-0539"
                                                                        tabindex="-1" aria-hidden="true"
                                                                        data-kt-initialized="1">
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
                                                                        dir="ltr"
                                                                        data-select2-id="select2-data-22-8awd"
                                                                        style="width: 100%;"><span
                                                                            class="selection"><span
                                                                                class="select2-selection select2-selection--single form-select form-select-solid"
                                                                                role="combobox" aria-haspopup="true"
                                                                                aria-expanded="false" tabindex="0"
                                                                                aria-disabled="false"
                                                                                aria-labelledby="select2-card_expiry_month-w4-container"
                                                                                aria-controls="select2-card_expiry_month-w4-container"><span
                                                                                    class="select2-selection__rendered"
                                                                                    id="select2-card_expiry_month-w4-container"
                                                                                    role="textbox"
                                                                                    aria-readonly="true"
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
                                                                        data-select2-id="select2-data-24-trp5"
                                                                        tabindex="-1" aria-hidden="true"
                                                                        data-kt-initialized="1">
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
                                                                        dir="ltr"
                                                                        data-select2-id="select2-data-25-7i1j"
                                                                        style="width: 100%;"><span
                                                                            class="selection"><span
                                                                                class="select2-selection select2-selection--single form-select form-select-solid"
                                                                                role="combobox" aria-haspopup="true"
                                                                                aria-expanded="false" tabindex="0"
                                                                                aria-disabled="false"
                                                                                aria-labelledby="select2-card_expiry_year-r6-container"
                                                                                aria-controls="select2-card_expiry_year-r6-container"><span
                                                                                    class="select2-selection__rendered"
                                                                                    id="select2-card_expiry_year-r6-container"
                                                                                    role="textbox"
                                                                                    aria-readonly="true"
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
                                                                    <i
                                                                        class="ki-duotone ki-information-5 text-gray-500 fs-6"><span
                                                                            class="path1"></span><span
                                                                            class="path2"></span><span
                                                                            class="path3"></span></i></span> </label>

                                                            <div class="position-relative">
                                                                <input type="text"
                                                                    class="form-control form-control-solid"
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
                                {{-- Payment modal End --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header card-header-stretch border-bottom border-gray-200">
                    <div class="card-title">
                        <h3 class="fw-bold m-0">Billing History</h3>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-row-bordered align-middle gy-4 gs-9">
                            <thead
                                class="border-bottom border-gray-200 fs-6 text-gray-600 fw-bold bg-light bg-opacity-75">
                                <tr>
                                    <td class="min-w-150px">Date</td>
                                    <td class="min-w-250px">Description</td>
                                    <td class="min-w-150px">Amount</td>
                                    <td class="min-w-150px">Invoice</td>
                                </tr>
                            </thead>
                            <tbody class="fw-semibold text-gray-600">
                                <tr>
                                    <td>Dec 01, 2021</td>
                                    <td><a href="#">Billing for Ocrober 2024</a></td>
                                    <td>$250.79</td>
                                    <td><a href="#"
                                            class="btn btn-sm btn-light btn-active-light-primary">PDF</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Oct 08, 2021</td>
                                    <td><a href="#">Statements for September 2024</a></td>
                                    <td>$98.03</td>
                                    <td><a href="#"
                                            class="btn btn-sm btn-light btn-active-light-primary">PDF</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Aug 24, 2021</td>
                                    <td>Paypal</td>
                                    <td>$35.07</td>
                                    <td><a href="#"
                                            class="btn btn-sm btn-light btn-active-light-primary">PDF</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Aug 01, 2021</td>
                                    <td><a href="#">Invoice for July 2024</a></td>
                                    <td>$142.80</td>
                                    <td><a href="#"
                                            class="btn btn-sm btn-light btn-active-light-primary">PDF</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Jul 01, 2021</td>
                                    <td><a href="#">Statements for June 2024</a></td>
                                    <td>$123.79</td>
                                    <td><a href="#"
                                            class="btn btn-sm btn-light btn-active-light-primary">PDF</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Jun 17, 2021</td>
                                    <td>Paypal</td>
                                    <td>$23.09</td>
                                    <td><a href="#"
                                            class="btn btn-sm btn-light btn-active-light-primary">PDF</a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

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
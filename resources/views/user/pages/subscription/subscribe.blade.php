<x-app-layout :title="'Subscribe To Plan'">


    <div id="kt_app_content" class="app-content  flex-column-fluid ">



        <div id="kt_app_content_container" class="app-container  container-xxl ">

            <div class="d-flex flex-column gap-7 gap-lg-10">
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
                                                            class="path1"></span><span class="path2"></span></i> Order Date
                                                </div>
                                            </td>
                                            <td class="fw-bold text-end">{{ date('d-m-y') }}</td>
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
                                                                class="path1"></span><span class="path2"></span><span
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
                                        <form id="payment-form" action="{{ route('user.subscription.create') }}" method="POST">
                                            @csrf
                                            <input type="hidden" name="plan" id="plan" value="{{ $plan->id }}">

                                            <div class="row mb-4">
                                                <div class="col-xl-4 col-lg-4">
                                                    <div class="form-group">
                                                        <label for="">Name On Card</label>
                                                        <input type="text" name="name" id="card-holder-name" class="form-control rounded-1" value="" placeholder="Name on the card">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-xl-12 col-lg-12 mb-5">
                                                    <div class="form-group">
                                                        <label for="">Card details</label>
                                                        <div id="card-element"></div>
                                                    </div>
                                                </div>
                                                <div class="col-xl-12 col-lg-12 text-end">
                                                    <button type="submit" class="btn btn-primary" id="card-button" data-secret="{{ $intent->client_secret }}">Purchase</button>
                                                </div>
                                            </div>

                                        </form>
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

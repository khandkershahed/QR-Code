<x-app-layout :title="'Subscribe To Plan - User Panel'">
    <div id="kt_app_content_container" class="app-container">
        <div class="row mt-4">
            <div class="col-lg-4">
                <div class="card card-flush py-4 flex-row-fluid">
                    <div class="card-header">
                        <div class="card-title">
                            <h2>Order Details </h2>
                        </div>
                    </div>
                    <div class="card-body pt-0">
                        <div class="table-responsive">
                            <table class="table align-middle table-row-bordered mb-0 fs-6 gy-5 min-w-300px">
                                <tbody class="fw-semibold text-gray-600">
                                    <tr>
                                        <td class="text-muted">
                                            <div class="d-flex align-items-center">
                                                <i class="fa-solid fa-calendar fs-2 me-2"><span
                                                        class="path1"></span><span class="path2"></span></i> Order
                                                Date
                                            </div>
                                        </td>
                                        <td class="fw-bold text-end">{{ date('d-m-y') }}</td>
                                    </tr>
                                    <tr>
                                        <td class="text-muted">
                                            <div class="d-flex align-items-center">
                                                <i class="fa-solid fa-truck fs-2 me-2"><span
                                                        class="path1"></span><span class="path2"></span><span
                                                        class="path3"></span><span class="path4"></span><span
                                                        class="path5"></span></i> Order
                                                Items
                                            </div>
                                        </td>
                                        <td class="fw-bold text-end text-danger">{{ $plan->title }}</td>
                                    </tr>
                                    <tr>
                                        <td class="text-muted">
                                            <div class="d-flex align-items-center">
                                                <i class="fa-solid fa-discount fs-2 me-2"><span
                                                        class="path1"></span><span class="path2"></span></i>
                                                Total Payable


                                                <span class="ms-1" data-bs-toggle="tooltip"
                                                    title="Reward value earned by customer when purchasing this order">
                                                    <i class="fa-solid fa-information-5 text-gray-500 fs-6"><span
                                                            class="path1"></span><span class="path2"></span><span
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
            <div class="col-lg-4">
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
                                                <i class="fa-solid fa-profile-circle fs-2 me-2"><span
                                                        class="path1"></span><span class="path2"></span><span
                                                        class="path3"></span></i> Customer
                                            </div>
                                        </td>
                                        <td class="fw-bold text-end">
                                            <div class="d-flex align-items-center justify-content-end">
                                                <div class="symbol symbol-circle symbol-25px overflow-hidden me-3">
                                                    <p class="mb-0">
                                                    <div class="symbol-label">
                                                        <img src="{{ !empty(Auth::user()->profile_image) && file_exists(public_path('storage/user/profile_image/' . Auth::user()->profile_image)) ? asset('storage/user/profile_image/' . Auth::user()->profile_image) : asset('https://ui-avatars.com/api/?name=' . urlencode(Auth::user()->name)) }}"
                                                            alt="{{ Auth::user()->name }}" class="w-100">
                                                    </div>
                                                    </p>
                                                </div>
                                                <p class="text-gray-600 text-hover-primary">{{ Auth::user()->name }}
                                                </p>

                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-muted">
                                            <div class="d-flex align-items-center">
                                                <i class="fa-solid fa-sms fs-2 me-2"><span
                                                        class="path1"></span><span class="path2"></span></i> Email
                                            </div>
                                        </td>
                                        <td class="fw-bold text-end">
                                            <p class="text-gray-600 text-hover-primary">
                                                {{ Auth::user()->email }} </p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-muted">
                                            <div class="d-flex align-items-center">
                                                <i class="fa-solid fa-phone fs-2 me-2"><span
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
            </div>
            <div class="col-lg-4">
                <div class="card card-flush py-4 flex-row-fluid position-relative">
                    <div class="position-absolute top-0 end-0 bottom-0 opacity-10 d-flex align-items-center me-5">
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
                                <div class="col-xl-8 col-lg-8">
                                    <div class="form-group">
                                        <label for="">Name On Card</label>
                                        <input type="text" name="name" id="card-holder-name"
                                            class="form-control rounded-1" value=""
                                            placeholder="Name on the card">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-xl-12 col-lg-12 mb-5">
                                    <div class="form-group">
                                        <label for="">Card details</label>
                                        <div id="card-element" class="border p-4 rounded-1"></div>
                                    </div>
                                </div>
                                <div class="col-xl-12 col-lg-12 text-end">
                                    <button type="submit" class="btn btn-primary" id="card-button"
                                        data-secret="{{ $intent->client_secret }}">Pay</button>
                                </div>
                            </div>

                        </form>
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

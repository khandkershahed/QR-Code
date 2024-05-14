<x-app-layout :title="'Subscribe To Plan'">
    <div class="row">
        <div class="col-lg-12">
            <div class="card card-p-0 card-flush p-3 mt-10">
                <div class="card-header align-items-center py-5 gap-2 gap-md-5">
                    <div class="card-title">
                        <h2 class="mb-0">Subscribe to Plan:- {{ $plan->title }}</h2>
                    </div>
                    {{-- <div class="card-toolbar flex-row-fluid justify-content-end gap-5">
                        <a href="{{ route('user.qr-code.create') }}" class="btn btn-sm btn-primary rounded-2 me-3">
                            Create QR Codes
                        </a>
                    </div> --}}
                </div>
                <div class="card-body">
                    <!-- Top Row -->
                    <div class="row p-2">
                        <div class="col-lg-12 d-flex justify-content-between align-items-center ">
                            <div>
                                <span>Order Date: </span>
                                <span class="thm-clr">{{ date('d-m-y') }}</span>
                            </div>
                            <div>
                                <div class="payment-status-top">
                                    Payment Status :
                                    {{-- <span class="badge bg-success">Paid</span> --}}
                                    <span class="badge bg-danger p-1">Unpaid</span>
                                </div>
                            </div>
                            <div>
                                Order Item : &nbsp;<span class="badge bg-info p-1">
                                    {{ $plan->title }}</span>
                            </div>
                        </div>
                    </div>
                    <hr />
                    <!-- Top Second Row -->
                    <div class="row mx-1 p-2">
                        <div class="col-lg-4">
                            <ul>
                                <li>Invoice Number : <span class="thm-clr">#556</span></li>
                                <li>
                                    Client Name : <span class="thm-clr">{{ Auth::user()->name }}</span>
                                </li>
                            </ul>
                        </div>
                        <div class="col-lg-4"></div>
                        <div class="col-lg-4" style="display: flex; justify-content: end; text-align: end">
                            <ul class="">
                                <li class="text-end">
                                    Total Payable : <span class="thm-clr">
                                        ${{ number_format($plan->price, 2) }}
                                    </span>
                                </li>
                                <li class="text-end">
                                    {{-- Order Quantity : <span class="thm-clr">5</span> --}}
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="separation-line"></div>
                    <div class="row mt-2 p-2">
                        <form id="payment-form" action="{{ route('user.subscription.create') }}" method="POST"
                            id="payment-form">
                            @csrf
                            <input type="hidden" name="plan" id="plan" value="{{ $plan->id }}">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="">Name</label>
                                        <input type="text" name="name" id="card-holder-name" class="form-control"
                                            value="" id="card-holder-name" placeholder="Name on the card">
                                    </div>
                                </div>
                                <div class="col-lg-8">
                                    <div class="form-group">
                                        <label for="">Card details</label>
                                        <div id="card-element"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xl-12 col-lg-12 text-end">
                                    <hr>
                                    <button type="submit" class="btn btn-primary" id="card-button"
                                        data-secret="{{ $intent->client_secret }}">Pay</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <!-- Content Area End -->
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

<x-frontend-app-layout :title="'Subscribe to Plan || GoFlixza - Your Hub for QR, Bar Codes & NFC V.Cards'">
    <section class="page-banner-area overlay py-120 rpy-120 rel z-1 bgs-cover text-center"
        style="background-image: url({{ asset('frontend/newimage/banner.jpg') }});">
        <div class="container">
            <div class="banner-inner pt-70 rpt-60 text-black">
                <h1 class="page-title aos-init aos-animate" data-aos="fade-up" data-aos-duration="1500"
                    data-aos-offset="50">
                    Subscribe to {{ $plan->title }}
                </h1>
            </div>
        </div>
    </section>
    <section class="container page-wrapper mt-65 mb-30">
        <main>
            <div class="section-title text-center text-black mb-55 aos-init aos-animate" data-aos="fade-up"
                data-aos-duration="1500" data-aos-offset="50">
                <h2>
                    Payment Information
                </h2>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 offset-2">
                        <div class="card">
                            <div class="card-body">
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
                                    <form id="payment-form" action="{{ route('user.subscription.create') }}"
                                        method="POST" id="payment-form">
                                        @csrf
                                        <input type="hidden" name="plan" id="plan" value="{{ $plan->id }}">
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label for="">Name</label>
                                                    <input type="text" name="name" id="card-holder-name"
                                                        class="form-control" value="" id="card-holder-name"
                                                        placeholder="Name on the card">
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
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </section>
    @push('scripts')
        <script src="https://js.stripe.com/v3/"></script>
        {{-- <script>
    document.addEventListener("input", (event) => {
        const bounds = document.querySelectorAll("[data-bound]");

        for (const bound of bounds) {
            if (bound === event.target) {
                const targetId = bound.getAttribute("data-bound");
                const defValue = bound.getAttribute("data-def");

                const targetEl = document.getElementById(targetId);

                targetEl.innerText = bound.value || defValue;
            }
        }
    });
</script>

<script>
    document.addEventListener("input", (event) => {
        const elements = document.querySelectorAll("[data-moc]");

        for (const element of elements) {
            if (element === event.target) {
                const targetId = element.getAttribute("data-moc");
                const defValue = element.getAttribute("data-doc");
                const targetEl = document.getElementById(targetId);
                targetEl.innerText = element.value || defValue;
            }
        }
    });
</script> --}}
        {{-- <script>
            const stripe = Stripe('{{ env('STRIPE_KEY') }}');

                initialize();

                // Create a Checkout Session
                async function initialize() {
                const fetchClientSecret = async () => {
                    const response = await fetch("/create-checkout-session", {
                    method: "POST",
                    });
                    const { clientSecret } = await response.json();
                    return clientSecret;
                };

                const checkout = await stripe.initEmbeddedCheckout({
                    fetchClientSecret,
                });

                // Mount Checkout
                checkout.mount('#checkout');
            }
        </script> --}}

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
</x-frontend-app-layout>

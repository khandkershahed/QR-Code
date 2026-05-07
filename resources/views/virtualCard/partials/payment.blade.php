@php
    $count = $count ?? 0;
    $currentRouteName = Route::currentRouteName();
    $isUserRoute = strpos($currentRouteName, 'user.') === 0;
@endphp

<div class="container">
    @if ($isUserRoute)
        @if ($count === 0)
            <div class="row p-5 bg-light">
                <div class="col-lg-6">
                    <div class="fv-row my-3">
                        <x-metronic.label for="customer_name" class="form-label">
                            {{ __('Card Holder Name') }}
                        </x-metronic.label>

                        <input id="customer_name"
                            type="text"
                            class="form-control form-control-outline mb-3 mb-lg-0"
                            name="customer_name"
                            value="{{ old('customer_name') }}" />
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="fv-row my-3">
                        <x-metronic.label for="customer_email" class="form-label">
                            {{ __('Card Email') }}
                        </x-metronic.label>

                        <input id="customer_email"
                            type="email"
                            class="form-control form-control-outline mb-3 mb-lg-0"
                            name="customer_email"
                            value="{{ old('customer_email') }}" />
                    </div>
                </div>

                <div class="col-lg-12">
                    <div class="fv-row my-3">
                        <x-metronic.label for="card-element" class="form-label">
                            {{ __('Card Details') }}
                        </x-metronic.label>

                        <div id="card-element" class="border p-4 rounded-2 bg-white"></div>
                        <div id="card-errors" class="text-danger mt-2" role="alert"></div>
                    </div>
                </div>
            </div>
        @else
            <section class="mt-10">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="alert alert-light mt-40 p-50 d-flex justify-content-center align-items-center">
                            <div class="text-center">
                                <div class="mb-20">
                                    <img class="img-fluid"
                                        width="100px"
                                        src="{{ asset('images/no-nfc-card.jpg') }}"
                                        alt="">
                                </div>

                                <h1 class="fs-1" style="font-size: 45px !important;">
                                    {{ __('NFC Card Ready') }}
                                </h1>

                                <p class="py-10">
                                    {{ __('Your NFC card is ready to be generated.') }}
                                </p>

                                <button type="submit"
                                    class="btn text-white"
                                    style="background-color: #7239e9;">
                                    <span class="btn-label">
                                        {{ __('Submit to generate Card') }}
                                    </span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        @endif
    @else
        <section class="mt-10">
            <div class="row">
                <div class="col-lg-12">
                    <div class="alert alert-light mt-40 p-50 d-flex justify-content-center align-items-center">
                        <div class="text-center">
                            <div class="mb-20">
                                <img class="img-fluid"
                                    width="100px"
                                    src="{{ asset('images/no-nfc-card.jpg') }}"
                                    alt="">
                            </div>

                            <h1 class="fs-1" style="font-size: 45px !important;">
                                {{ __('NFC Card Charge') }}
                            </h1>

                            <p class="py-10">
                                {{ __('Your NFC Card is almost ready.') }} <br>
                                {{ __('Submit to complete the process!') }}
                            </p>

                            <button type="submit"
                                class="btn text-white"
                                style="background-color: #7239e9;">
                                <span class="btn-label">
                                    {{ __('Submit to generate Card') }}
                                </span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    @endif
</div>

@if ($isUserRoute && $count === 0)
    @push('scripts')
        <script src="https://js.stripe.com/v3/"></script>

        <script>
            document.addEventListener('DOMContentLoaded', function() {
                const stripeKey = '{{ env('STRIPE_KEY') }}';
                const cardElementBox = document.getElementById('card-element');
                const form = document.getElementById('kt_stepper_example_clickable_form');

                if (!stripeKey || !cardElementBox || !form) {
                    return;
                }

                const stripe = Stripe(stripeKey);
                const elements = stripe.elements();
                const card = elements.create('card');

                card.mount('#card-element');

                card.addEventListener('change', function(event) {
                    const displayError = document.getElementById('card-errors');

                    if (!displayError) {
                        return;
                    }

                    if (event.error) {
                        displayError.textContent = event.error.message;
                    } else {
                        displayError.textContent = '';
                    }
                });

                form.addEventListener('submit', function(event) {
                    event.preventDefault();

                    stripe.createToken(card).then(function(result) {
                        if (result.error) {
                            const errorElement = document.getElementById('card-errors');

                            if (errorElement) {
                                errorElement.textContent = result.error.message;
                            }

                            return;
                        }

                        const oldStripeToken = form.querySelector('input[name="stripeToken"]');

                        if (oldStripeToken) {
                            oldStripeToken.remove();
                        }

                        const hiddenInput = document.createElement('input');
                        hiddenInput.setAttribute('type', 'hidden');
                        hiddenInput.setAttribute('name', 'stripeToken');
                        hiddenInput.setAttribute('value', result.token.id);

                        form.appendChild(hiddenInput);
                        form.submit();
                    });
                });
            });
        </script>
    @endpush
@endif

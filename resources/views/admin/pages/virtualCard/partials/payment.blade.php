<div class="container">
    <div class="row p-5 bg-light">
        {{-- <div class="col-lg-6">
            <div class="fv-row my-3">
                <x-metronic.label for="customer_name" class="form-label ">
                    {{ __('Card Holder Name') }}</x-metronic.label>
                <input id="customer_name" type="text" class="form-control form-control-outline mb-3 mb-lg-0"
                    name="customer_name" />
            </div>
        </div>
        <div class="col-lg-6">
            <div class="fv-row my-3">
                <x-metronic.label for="customer_email" class="form-label ">
                    {{ __('Card Email') }}</x-metronic.label>
                <input id="customer_email" type="email" class="form-control form-control-outline mb-3 mb-lg-0"
                    name="customer_email" />
            </div>
        </div>
        <div class="col-lg-6">
            <div class="fv-row my-3">
                <x-metronic.label for="card_email" class="form-label ">
                    {{ __('Card Details') }}</x-metronic.label>
                <div id="card-element" class="border p-4 rounded-2 bg-white"></div>
                <div id="card-errors" role="alert"></div>
            </div>
        </div> --}}
    </div>
</div>

@push('scripts')
<script src="https://js.stripe.com/v3/"></script>
    <script>
        var stripe = Stripe('{{ env('STRIPE_KEY') }}');
        var elements = stripe.elements();
        var card = elements.create('card');
        card.mount('#card-element');

        card.addEventListener('change', function(event) {
            var displayError = document.getElementById('card-errors');
            if (event.error) {
                displayError.textContent = event.error.message;
            } else {
                displayError.textContent = '';
            }
        });

        var form = document.getElementById('kt_stepper_example_clickable_form');
        form.addEventListener('submit', function(event) {
            event.preventDefault();

            stripe.createToken(card).then(function(result) {
                if (result.error) {
                    var errorElement = document.getElementById('card-errors');
                    errorElement.textContent = result.error.message;
                } else {
                    var hiddenInput = document.createElement('input');
                    hiddenInput.setAttribute('type', 'hidden');
                    hiddenInput.setAttribute('name', 'stripeToken');
                    hiddenInput.setAttribute('value', result.token.id);
                    form.appendChild(hiddenInput);
                    form.submit();
                }
            });
        });
    </script>
@endpush

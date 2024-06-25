<x-admin-guest-layout :title="'Registration'">
    <style>
        .form-container-registration {
            display: none;
        }

        /* Custom styling for the card element */
        .card-element {
            background-color: #f8f9fa;
            border: 1px solid #ced4da;
            border-radius: 0.25rem;
            padding: 10px;
            margin-bottom: 20px;
        }

        /* Error message styling */
        .card-errors {
            color: #dc3545;
            font-size: 0.875rem;
            margin-top: 4px;
        }
    </style>
    <div class="d-flex flex-column flex-root" id="kt_app_root">
        <div class="d-flex flex-column flex-lg-row flex-column-fluid">
            <div class="d-flex flex-column flex-lg-row-fluid w-lg-50 p-10 order-2 order-lg-1">
                <div class="d-flex flex-center flex-column flex-lg-row-fluid">
                    <div class="stepper stepper-pills" id="kt_stepper_example_registration">
                        <div class="text-center py-15">
                            <a href="/" class="mb-0 mb-lg-12">
                                <img alt="Logo" src="https://i.ibb.co/BNBTVN4/logo.png" class="h-60px h-lg-75px">
                            </a>
                            @if ($plan->billing_cycle == 'trial_period')
                                <h1>Continue with <strong class="text-warning">Trial Plan</strong> </h1>
                            @else
                                <h1>Buy <strong class="text-warning">{{ $plan->title }}</strong> At <a
                                        href="{{ route('pricing') }}"><strong class="text-primary">$ {{ $plan->price }}
                                            /{{ $plan->billing_cycle }}
                                        </strong></a>
                                </h1>
                            @endif

                            @if ($plan->billing_cycle == 'trial_period')
                                <p class="mb-0 text-muted"><a href="{{ route('pricing') }}">Check Othe Plans</a></p>
                            @else
                                <p class="mb-0 text-muted">Invest in the {{ $plan->title }} today and take your
                                    capabilities to the next level!</p>
                            @endif
                            <p class="mb-0 text-muted">Advanced Tools, Priority Support,Exclusive Content,Early Access
                            </p>
                        </div>
                        <div class="stepper-nav flex-center flex-wrap mb-10">
                            <div class="stepper-item mx-8 my-4 current" data-kt-stepper-element="nav">
                                <div class="stepper-wrapper d-flex align-items-center p-5 rounded-22">
                                    <div class="stepper-icon w-40px h-40px me-3">
                                        <i class="stepper-check fas fa-check"></i>
                                        <span class="stepper-number">1</span>
                                    </div>
                                    <div class="stepper-label">
                                        <h3 class="stepper-title">
                                            Account
                                        </h3>
                                        <div class="stepper-desc">
                                            Description
                                        </div>
                                    </div>
                                </div>
                                <div class="stepper-line h-40px"></div>
                            </div>
                            <div class="stepper-item mx-8 my-4" data-kt-stepper-element="nav">
                                <div class="stepper-wrapper d-flex align-items-center  p-5 rounded-22">
                                    <div class="stepper-icon w-40px h-40px me-3">
                                        <i class="stepper-check fas fa-check"></i>
                                        <span class="stepper-number">2</span>
                                    </div>
                                    <div class="stepper-label">
                                        <h3 class="stepper-title">
                                            Payment
                                        </h3>
                                        <div class="stepper-desc">
                                            Description
                                        </div>
                                    </div>
                                </div>
                                <div class="stepper-line h-40px"></div>
                            </div>
                        </div>
                        <form class="form w-lg-500px fv-plugins-bootstrap5 fv-plugins-framework" novalidate="novalidate"
                            method="POST" action="{{ route('register') }}">
                            @csrf
                            <input type="hidden" name="payment_link" value="{{ $plan->payment_link }}">
                            <input type="hidden" name="plan" value="{{ $plan->id }}">
                            <div class="mb-5">
                                {{-- <div class="flex-column current" data-kt-stepper-element="content"> --}}
                                <div class="row">
                                    <div class="col-lg-6 mb-8 fv-plugins-icon-container">
                                        <x-input-label class="form-label" for="name" :value="__('Full Name')" />
                                        <x-text-input id="name" class="form-control bg-transparent" type="text"
                                            name="name" :value="old('name')" required autofocus autocomplete="name" />
                                        <x-input-error :messages="$errors->get('name')" class="mt-2" />
                                    </div>
                                    <div class="col-lg-6 mb-8 fv-plugins-icon-container">
                                        <x-input-label class="form-label text-start" for="email" :value="__('Email')" />
                                        <x-text-input id="email" class="form-control bg-transparent" type="email"
                                            name="email" :value="old('email')" required autocomplete="username" />
                                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
                                    </div>
                                    <div class="col-lg-6 mb-8 fv-plugins-icon-container" data-kt-password-meter="true">
                                        <div class="mb-1">
                                            <div class="position-relative mb-3">
                                                <x-input-label class="form-label" for="password" :value="__('Password')" />
                                                <div class="input-group">
                                                    <span class="input-group-text" id="toggle_password">
                                                        <i class="fas fa-lock text-success"></i>
                                                        <i class="fas fa-unlock" style="display: none"></i>
                                                    </span>
                                                    <x-text-input id="password" aria-describedby="toggle_password"
                                                        class="form-control bg-transparent password_input"
                                                        type="password" name="password" required
                                                        autocomplete="new-password" />
                                                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                                                </div>
                                            </div>

                                            <div class="d-flex align-items-center mb-3"
                                                data-kt-password-meter-control="highlight">
                                                <div
                                                    class="flex-grow-1 bg-secondary bg-active-success rounded h-5px me-2">
                                                </div>
                                                <div
                                                    class="flex-grow-1 bg-secondary bg-active-success rounded h-5px me-2">
                                                </div>
                                                <div
                                                    class="flex-grow-1 bg-secondary bg-active-success rounded h-5px me-2">
                                                </div>
                                                <div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px">
                                                </div>
                                            </div>
                                        </div>
                                        <div
                                            class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 mb-8 fv-plugins-icon-container">
                                        <x-input-label class="form-label" for="password_confirmation"
                                            :value="__('Confirm Password')" />
                                        <br>

                                        <div class="input-group ">
                                            <span class="input-group-text" id="toggle_confirm_password">
                                                <i class="fas fa-lock text-success"></i>
                                                <i class="fas fa-unlock" style="display: none"></i>
                                            </span>
                                            <x-text-input id="password_confirmation"
                                                aria-describedby="toggle_confirm_password"
                                                class="form-control bg-transparent password_confirmation flex-column"
                                                type="password" name="password_confirmation" required
                                                autocomplete="new-password" />
                                        </div>
                                        <div id="password-confirmation-message" class="password-confirmation-message">
                                        </div>
                                        <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />

                                    </div>
                                    <div
                                        class="col-lg-12 mb-8 fv-plugins-icon-container d-flex justify-content-between align-items-center">
                                        <div class="pt-2">
                                            <label class="form-check form-check-inline">
                                                <input class="form-check-input" type="checkbox" name="terms"
                                                    value="1" required checked>
                                                <span class="form-check-label fw-semibold text-gray-700 fs-base ms-1">
                                                    I Accept the <a href="#" class="ms-1 link-primary">Terms
                                                        & Conditions</a>
                                                </span>
                                            </label>
                                            <div
                                                class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback">
                                            </div>
                                        </div>
                                        <div class="text-gray-500 text-center fw-semibold fs-6">
                                            Already have an Account?
                                            <a href="{{ route('login') }}" type="submit"
                                                class="link-primary fw-semibold">
                                                Sign in
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                {{-- </div> --}}
                            </div>
                            <div class="">
                                <div>
                                    <button type="submit" class="btn btn-primary w-100">
                                        Continue <i class="fas fa-arrow-right-long ps-3"></i>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="d-flex flex-lg-row-fluid w-lg-50 bgi-size-cover bgi-position-center order-1 order-lg-2"
                style="background-image: url(https://preview.keenthemes.com/metronic8/demo1/assets/media/misc/auth-bg.png)">
                <div class="d-flex flex-column flex-center py-7 py-lg-15 px-5 px-md-15 w-100">
                    {{-- <a href="/" class="mb-0 mb-lg-12">
                        <img alt="Logo" src="https://i.ibb.co/BNBTVN4/logo.png" class="h-60px h-lg-75px">
                    </a> --}}
                    <img class="d-none d-lg-block mx-auto w-275px w-md-50 w-xl-500px mb-10 mb-lg-20"
                        src="https://preview.keenthemes.com/metronic8/demo1/assets/media/misc/auth-screens.png"
                        alt="">
                    <h1 class="d-none d-lg-block text-white fs-2qx fw-bolder text-center mb-7">
                        Fast, Efficient and Productive
                    </h1>
                    <div class="d-none d-lg-block text-white fs-base text-center">
                        In this kind of post,
                        <a href="#" class="opacity-75-hover text-warning fw-bold me-1">the blogger</a>
                        introduces a person they’ve interviewed <br> and provides some background information about
                        <a href="#" class="opacity-75-hover text-warning fw-bold me-1">the interviewee</a>
                        and their <br> work following this is a transcript of the interview.
                    </div>
                </div>
            </div>
        </div>
    </div>
    @push('scripts')
        <!-- Add jQuery library -->
        <script src="https://js.stripe.com/v3/"></script>
        <script>
            document.querySelectorAll('.password_confirmation').forEach(function(element) {
                element.addEventListener('keyup', function() {
                    var password = document.querySelector('.password_input').value;
                    var passwordConfirmation = this.value;
                    var messageElement = document.querySelector('.password-confirmation-message');

                    if (password === passwordConfirmation) {
                        messageElement.textContent = 'Password confirmed';
                        messageElement.classList.remove('text-danger');
                        messageElement.classList.add('text-success');
                    } else {
                        messageElement.textContent = 'Passwords do not match';
                        messageElement.classList.remove('text-success');
                        messageElement.classList.add('text-danger');
                    }
                });
            });
        </script>

        <script>
            $(document).ready(function() {
                $('#toggle_confirm_password').click(function() {
                    var input = $("#password_confirmation");
                    var icon1 = $(this).find('.fa-lock');
                    var icon2 = $(this).find('.fa-unlock');

                    if (input.attr('type') === 'password') {
                        input.attr('type', 'text');
                        icon1.hide().removeClass('text-danger').addClass('text-success');
                        icon2.show().removeClass('text-success').addClass('text-danger');
                    } else {
                        input.attr('type', 'password');
                        icon1.show().removeClass('text-success').addClass('text-danger');
                        icon2.hide().removeClass('text-danger').addClass('text-success');
                    }

                    // Reset input type after 3 seconds (3000 milliseconds)
                    setTimeout(function() {
                        input.attr('type', 'password');
                        icon1.show().removeClass('text-success').addClass('text-danger');
                        icon2.hide().removeClass('text-danger').addClass('text-success');
                    }, 3000);
                });

                $('#toggle_password').click(function() {
                    var input = $("#password");
                    var icon1 = $(this).find('.fa-lock');
                    var icon2 = $(this).find('.fa-unlock');

                    if (input.attr('type') === 'password') {
                        input.attr('type', 'text');
                        icon1.hide().removeClass('text-danger').addClass('text-success');
                        icon2.show().removeClass('text-success').addClass('text-danger');
                    } else {
                        input.attr('type', 'password');
                        icon1.show().removeClass('text-success').addClass('text-danger');
                        icon2.hide().removeClass('text-danger').addClass('text-success');
                    }

                    // Reset input type after 3 seconds (3000 milliseconds)
                    setTimeout(function() {
                        input.attr('type', 'password');
                        icon1.show().removeClass('text-success').addClass('text-danger');
                        icon2.hide().removeClass('text-danger').addClass('text-success');
                    }, 3000);
                });
            });
        </script>
        {{-- For Radio Toggler --}}
        <script>
            $(document).ready(function() {
                // Ensure no form is shown by default
                $('.form-container-registration').hide();

                // Event listener for radio buttons
                $('input[name="plan"]').on('change', function() {
                    if (this.id === 'trail-plan' && this.checked) {
                        $('.form-container-registration').hide();
                        $('.trail-form').show();
                    } else if (this.id === 'direct-plan' && this.checked) {
                        $('.form-container-registration').hide();
                        $('.directpurchase-form').show();
                    }
                    // Add active class to the selected label
                    $('.plan-label').removeClass('active');
                    $(this).closest('.plan-label').addClass('active');
                });
            });
        </script>
        {{-- For Subscribe Card --}}
        {{-- <script>
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
        </script> --}}
        <script>
            // Create a Stripe instance
            const stripe = Stripe('{{ env('STRIPE_KEY') }}');

            // Create an instance of Elements
            const elements = stripe.elements();

            // Create a card Element
            const card = elements.create('card');

            // Mount the card Element onto the page
            card.mount('#card-element');

            // Handle real-time validation errors from the card Element
            card.addEventListener('change', function(event) {
                var displayError = document.getElementById('card-errors');
                if (event.error) {
                    displayError.textContent = event.error.message;
                } else {
                    displayError.textContent = '';
                }
            });

            // Handle form submission
            const form = document.getElementById('payment-form');
            form.addEventListener('submit', function(event) {
                event.preventDefault();

                stripe.createToken(card).then(function(result) {
                    if (result.error) {
                        // Inform the user if there was an error
                        const errorElement = document.getElementById('card-errors');
                        errorElement.textContent = result.error.message;
                    } else {
                        // Token represents a valid card token
                        const token = result.token.id;

                        // Add the token to the form
                        const hiddenInput = document.createElement('input');
                        hiddenInput.setAttribute('type', 'hidden');
                        hiddenInput.setAttribute('name', 'payment_method');
                        hiddenInput.setAttribute('value', token);
                        form.appendChild(hiddenInput);

                        // Submit the form
                        form.submit();
                    }
                });
            });
        </script>
        {{-- Stepper For Registration --}}
        <script>
            // Stepper lement
            var element = document.querySelector("#kt_stepper_example_registration");

            // Initialize Stepper
            var stepper = new KTStepper(element);

            // Handle next step
            stepper.on("kt.stepper.next", function(stepper) {
                stepper.goNext(); // go next step
            });

            // Handle previous step
            stepper.on("kt.stepper.previous", function(stepper) {
                stepper.goPrevious(); // go previous step
            });
        </script>
    @endpush

</x-admin-guest-layout>

<style>
    .form-container-registration {
        display: none;
    }
</style>

<x-admin-guest-layout>
    <div class="d-flex flex-column flex-root" id="kt_app_root">
        <div class="d-flex flex-column flex-lg-row flex-column-fluid">
            <div class="d-flex flex-column flex-lg-row-fluid w-lg-50 p-10 order-2 order-lg-1">
                <div class="d-flex flex-center flex-column flex-lg-row-fluid">
                    <div class="w-lg-700px p-10">
                        <div class="row">
                            <div class="text-center mb-11">
                                <h1 class="text-gray-900 fw-bolder mb-3">
                                    Sign Up
                                </h1>

                                <div class="text-gray-500 fw-semibold fs-6">
                                    Your Social Campaigns
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <!-- Trail label Label -->
                                <label
                                    class="btn btn-outline btn-outline-dashed btn-active-light-primary d-flex flex-stack text-start p-6 mb-5 plan-label"
                                    for="trail-plan">
                                    <div class="d-flex align-items-center me-2">
                                        <div
                                            class="form-check form-check-custom form-check-solid form-check-primary me-6">
                                            <input class="form-check-input" type="radio" name="plan"
                                                id="trail-plan" value="trail" />
                                        </div>
                                        <div class="flex-grow-1">
                                            <h2 class="d-flex align-items-center fs-3 fw-bold flex-wrap">
                                                For Trail Basis !
                                                <div>
                                                    <span class="badge badge-light-success ps-0 mt-3 fs-7">Most
                                                        popular</span>
                                                    <span class="badge badge-light-warning ps-1 mt-3 fs-7">Only For 14
                                                        Day's</span>
                                                </div>
                                            </h2>
                                        </div>
                                    </div>
                                </label>
                                <!-- Trail label Label End -->
                            </div>
                            <div class="col-lg-6">
                                <!-- direct-plan label Label -->
                                <label
                                    class="btn btn-outline btn-outline-dashed btn-active-light-primary d-flex flex-stack text-start p-6 plan-label"
                                    for="direct-plan">
                                    <div class="d-flex align-items-center me-2">
                                        <div
                                            class="form-check form-check-custom form-check-solid form-check-primary me-6">
                                            <input class="form-check-input" type="radio" name="plan"
                                                id="direct-plan" value="direct" />
                                        </div>
                                        <div class="flex-grow-1">
                                            <h2 class="d-flex align-items-center fs-3 fw-bold flex-wrap">
                                                Lite Plan
                                            </h2>
                                            <div class="fw-semibold opacity-50">
                                                Yearly Benefit On This Account.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="ms-5">
                                        <span class="mb-2">$</span>
                                        <span class="fs-2x fw-bold">180</span>
                                        <span class="fs-7 opacity-50">/ <span data-kt-element="period">Per
                                                Year</span></span>
                                    </div>
                                </label>
                                <!-- direct-plan label Label End -->
                            </div>
                            {{-- All Form Content --}}
                            <div class="col-lg-12">
                                <div class="form-container-registration trail-form" style="display: none;">
                                    <h1 class="text-gray-900 fw-bolder mb-3 text-center p-3">
                                        Trail Plan
                                    </h1>
                                    <form class="form w-100 fv-plugins-bootstrap5 fv-plugins-framework"
                                        novalidate="novalidate" method="POST" action="{{ route('register') }}">
                                        @csrf
                                        <div class="row g-3 mb-9">
                                            <div class="col-md-6">
                                                <a href="{{ route('auth.google') }}"
                                                    class="btn btn-flex border btn-outline btn-text-gray-700 btn-active-color-primary bg-state-light flex-center text-nowrap w-100">
                                                    <img alt="Logo"
                                                        src="https://preview.keenthemes.com/metronic8/demo1/assets/media/svg/brand-logos/google-icon.svg"
                                                        class="h-15px me-3">
                                                    Sign in with Google
                                                </a>
                                            </div>

                                            <div class="col-md-6">
                                                <a href="{{ route('auth.facebook') }}"
                                                    class="btn btn-flex border btn-outline btn-text-gray-700 btn-active-color-primary bg-state-light flex-center text-nowrap w-100">
                                                    <img alt="Logo"
                                                        src="https://i.ibb.co/4twXxBk/png-clipart-facebook-logo-computer-icons-facebook-logo-facebook-thumbnail-removebg-preview.png"
                                                        class="theme-light-show h-25px me-3">
                                                    Sign in with Facebook
                                                </a>
                                            </div>
                                        </div>
                                        <div class="separator separator-content my-14"><span
                                                class="w-125px text-gray-500 fw-semibold fs-7">Or with email</span>
                                        </div>

                                        <div class="row">
                                            <div class="col-lg-6 mb-8 fv-plugins-icon-container">
                                                <x-input-label class="form-label" for="name" :value="__('Full Name')" />
                                                <x-text-input id="name" class="form-control bg-transparent"
                                                    type="text" name="name" :value="old('name')" required autofocus
                                                    autocomplete="name" />
                                                <x-input-error :messages="$errors->get('name')" class="mt-2" />
                                            </div>
                                            <div class="col-lg-6 mb-8 fv-plugins-icon-container">
                                                <x-input-label class="form-label text-start" for="email"
                                                    :value="__('Email')" />
                                                <x-text-input id="email" class="form-control bg-transparent"
                                                    type="email" name="email" :value="old('email')" required
                                                    autocomplete="username" />
                                                <x-input-error :messages="$errors->get('email')" class="mt-2" />
                                            </div>
                                            <div class="col-lg-6 mb-8 fv-plugins-icon-container"
                                                data-kt-password-meter="true">
                                                <div class="mb-1">
                                                    <div class="position-relative mb-3">
                                                        <x-input-label class="form-label" for="password"
                                                            :value="__('Password')" />
                                                        <div class="input-group">
                                                            <span class="input-group-text" id="toggle_password">
                                                                <i class="fas fa-lock text-success"></i>
                                                                <i class="fas fa-unlock" style="display: none"></i>
                                                            </span>
                                                            <x-text-input id="password"
                                                                aria-describedby="toggle_password"
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
                                                        <div
                                                            class="flex-grow-1 bg-secondary bg-active-success rounded h-5px">
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="text-muted">
                                                    Use 8 or more characters with a mix of letters, numbers &amp;
                                                    symbols.
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
                                                <div id="password-confirmation-message"
                                                    class="password-confirmation-message"></div>
                                                <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />

                                            </div>
                                            <div class="col-lg-6 mb-8 fv-plugins-icon-container">
                                                <label class="form-check form-check-inline">
                                                    <input class="form-check-input" type="checkbox" name="toc"
                                                        value="1" required checked>
                                                    <span
                                                        class="form-check-label fw-semibold text-gray-700 fs-base ms-1">
                                                        I Accept the <a href="#" class="ms-1 link-primary">Terms
                                                            &
                                                            Conditions</a>
                                                    </span>
                                                </label>
                                                <div
                                                    class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="d-grid mb-10">
                                            <button type="submit" id="kt_sign_up_submit" class="btn btn-primary">

                                                <span class="indicator-label">
                                                    Sign up</span>

                                                <span class="indicator-progress">
                                                    Please wait... <span
                                                        class="spinner-border spinner-border-sm align-middle ms-2"></span>
                                                </span>
                                        </div>
                                        <div class="text-gray-500 text-center fw-semibold fs-6">
                                            Already have an Account?
                                            <a href="{{ route('login') }}" type="submit"
                                                class="link-primary fw-semibold">
                                                Sign in
                                            </a>
                                        </div>
                                    </form>
                                </div>
                                <!-- Direct label Label start -->
                                <div class="form-container-registration directpurchase-form" style="display: none;">
                                    <h1 class="text-gray-900 fw-bolder mb-3 text-center p-3">
                                        With Subscription !
                                    </h1>
                                    <form class="form w-100 fv-plugins-bootstrap5 fv-plugins-framework"
                                        novalidate="novalidate" method="POST" action="{{ route('register') }}">
                                        @csrf
                                        <div class="row g-3 mb-9">
                                            <div class="col-md-6">
                                                <a href="{{ route('auth.google') }}"
                                                    class="btn btn-flex border btn-outline btn-text-gray-700 btn-active-color-primary bg-state-light flex-center text-nowrap w-100">
                                                    <img alt="Logo"
                                                        src="https://preview.keenthemes.com/metronic8/demo1/assets/media/svg/brand-logos/google-icon.svg"
                                                        class="h-15px me-3">
                                                    Sign in with Google
                                                </a>
                                            </div>

                                            <div class="col-md-6">
                                                <a href="{{ route('auth.facebook') }}"
                                                    class="btn btn-flex border btn-outline btn-text-gray-700 btn-active-color-primary bg-state-light flex-center text-nowrap w-100">
                                                    <img alt="Logo"
                                                        src="https://i.ibb.co/4twXxBk/png-clipart-facebook-logo-computer-icons-facebook-logo-facebook-thumbnail-removebg-preview.png"
                                                        class="theme-light-show h-25px me-3">
                                                    Sign in with Facebook
                                                </a>
                                            </div>
                                        </div>
                                        <div class="separator separator-content my-14"><span
                                                class="w-125px text-gray-500 fw-semibold fs-7">Or with email</span>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <x-input-label class="form-label" for="name" :value="__('Full Name')" />
                                                <x-text-input id="name" class="form-control bg-transparent"
                                                    type="text" name="name" :value="old('name')" required
                                                    autofocus autocomplete="name" />
                                                <x-input-error :messages="$errors->get('name')" class="mt-2" />
                                            </div>
                                            <div class="col-lg-6">
                                                <x-input-label class="form-label text-start" for="email"
                                                    :value="__('Email')" />
                                                <x-text-input id="email" class="form-control bg-transparent"
                                                    type="email" name="email" :value="old('email')" required
                                                    autocomplete="username" />
                                                <x-input-error :messages="$errors->get('email')" class="mt-2" />
                                            </div>
                                            <div class="col-lg-6" data-kt-password-meter="true">
                                                <div class="mb-1">
                                                    <div class="position-relative mb-3">
                                                        <x-input-label class="form-label" for="password"
                                                            :value="__('Password')" />
                                                        <div class="input-group">
                                                            <span class="input-group-text" id="toggle_password">
                                                                <i class="fas fa-lock text-success"></i>
                                                                <i class="fas fa-unlock" style="display: none"></i>
                                                            </span>
                                                            <x-text-input id="password"
                                                                aria-describedby="toggle_password"
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
                                                        <div
                                                            class="flex-grow-1 bg-secondary bg-active-success rounded h-5px">
                                                        </div>
                                                    </div>
                                                </div>

                                                {{-- <div class="text-muted">
                                                    Use 8 or more characters with a mix of letters, numbers &amp;
                                                    symbols.
                                                </div> --}}
                                                <div
                                                    class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback">
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
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
                                                <div id="password-confirmation-message"
                                                    class="password-confirmation-message"></div>
                                                <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />

                                            </div>
                                        </div>
                                        <div class="row">
                                            <label for="">Card details</label>
                                            <div id="card-element"></div>
                                        </div>
                                        <div class="fv-row mb-8 fv-plugins-icon-container">
                                            <label class="form-check form-check-inline">
                                                <input class="form-check-input" type="checkbox" name="toc"
                                                    value="1" required checked>
                                                <span class="form-check-label fw-semibold text-gray-700 fs-base ms-1">
                                                    I Accept the <a href="#" class="ms-1 link-primary">Terms &
                                                        Conditions</a>
                                                </span>
                                            </label>
                                            <div
                                                class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback">
                                            </div>
                                        </div>
                                        <div class="d-grid mb-10">
                                            <button type="submit" id="kt_sign_up_submit" class="btn btn-primary">

                                                <span class="indicator-label">
                                                    Sign up</span>

                                                <span class="indicator-progress">
                                                    Please wait... <span
                                                        class="spinner-border spinner-border-sm align-middle ms-2"></span>
                                                </span>
                                        </div>
                                        <div class="text-gray-500 text-center fw-semibold fs-6">
                                            Already have an Account?
                                            <a href="{{ route('login') }}" type="submit"
                                                class="link-primary fw-semibold">
                                                Sign in
                                            </a>
                                        </div>
                                    </form>
                                </div>
                                <!-- Direct label Label end -->
                            </div>
                            {{-- All Form Content End--}}
                        </div>
                    </div>
                </div>
            </div>
            <div class="d-flex flex-lg-row-fluid w-lg-50 bgi-size-cover bgi-position-center order-1 order-lg-2"
                style="background-image: url(https://preview.keenthemes.com/metronic8/demo1/assets/media/misc/auth-bg.png)">
                <div class="d-flex flex-column flex-center py-7 py-lg-15 px-5 px-md-15 w-100">
                    <a href="/metronic8/demo1/index.html" class="mb-0 mb-lg-12">
                        <img alt="Logo" src="https://i.ibb.co/BNBTVN4/logo.png" class="h-60px h-lg-75px">
                    </a>
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
    <!-- Add jQuery library -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

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
</x-admin-guest-layout>

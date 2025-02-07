<form action="{{ route('card.checkout') }}" method="GET" id="multiStepForm">
    {{-- @csrf --}}
    <!-- Step 1 -->
    @if ($cardProduct->card_type == 'team')
        <div class="mt-30 border" style="border-radius: 8px">
            <div class="d-flex align-items-end">
                <div class="bg-light d-flex align-items-center px-4 py-4">
                    <div class="pe-2">
                        <img class="" width="50px" src="{{ asset('images/user.webp') }}" alt="">
                    </div>
                    <div class="">
                        <input type="number" name="card_user"
                            class="form-control p-2 py-0 bg-transparent rounded-0 text-center user-slider-range"
                            placeholder="1" value="5" id="userSliderRange">
                    </div>
                </div>
                <div class="pb-2 w-100 pe-2">
                    <p class="mb-0 ps-2 text-info">USERS</p>
                    <div class="ps-2 slidecontainer">
                        <input type="range" class="p-0 w-100" id="rangeSlider" min="5" max="100"
                            value="5">
                    </div>
                </div>
            </div>
        </div>
    @else
        <input type="hidden" name="card_user" value="1">
    @endif
    <div class="form-step" id="step1">
        <div class="radio-card-container">
            <label class="mt-10 radio-card ">
                <input type="radio" name="plan" value="{{ $cardProduct->price }}" required
                    onchange="goToNextStep(1)">
                <div class="card-content">
                    <div>
                        <h3 class="plan-title">Annual Plan</h3>
                        @if ($cardProduct->card_type == 'team')
                            <p class="mb-0"><span class="badge bg-success">Team Plans</span></p>
                        @else
                            <p class="mb-0"><span class="badge bg-success">Individual Plans</span></p>
                        @endif
                        <p class="mb-0"><small>Equal to $
                                {{ number_format($cardProduct->price / 12, 2) }}/mo</small>
                        </p>
                    </div>
                    <div class="text-end">
                        <h3 class="amount-title">$ {{ $cardProduct->price }}</h3>
                        <p class="mb-0"><strong>$ <span class="annualCharge">{{ $cardProduct->price }}</span></strong>
                            <small class="text-muted">/Yearly</small>
                        </p>
                        <div class="link ">
                            <a href="javascript:void(0)" target="_blank">Continue <i
                                    class="fas fa-arrow-right-long"></i></a>
                        </div>
                    </div>
                </div>
            </label>

        </div>
    </div>

    <!-- Step 2 -->
    <div class="form-step" id="step2" style="display:none;">
        <div>
            <h2>Choose Card Type!</h2>
            <p>A card that suits you best</p>
        </div>
        <div class="panel-group" id="accordion">
            <!-- Second Card -->
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="mb-0 panel-title">
                        <label class="mb-0 w-100">
                            <input type="radio" id="r12" name="card_preference"
                                data-card_price="{{ $cardProduct->plastic_card_price }}" value="plastic"
                                data-card_title="Plastic" />
                            <div class="custom-card d-flex justify-content-between">
                                <div>
                                    <h4 class="p-2 px-3 mb-0">Plastic Card</h4>
                                </div>
                                <div>
                                    <h4 class="p-2 px-3 mb-0">+
                                        {{ $cardProduct->plastic_card_price }} $</h4>
                                </div>
                            </div>
                        </label>
                    </h4>
                </div>
            </div>

            <!-- Third Card -->
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="mb-0 panel-title">
                        <label class="mb-0 w-100">
                            <input type="radio" id="r13" name="card_preference" value="metal"
                                data-card_title="Metal" data-card_price="{{ $cardProduct->metal_card_price }}" />
                            <div class="custom-card d-flex justify-content-between">
                                <div>
                                    <h4 class="p-2 px-3 mb-0">Metal Card</h4>
                                </div>
                                <div>
                                    <h4 class="p-2 px-3 mb-0">+
                                        {{ $cardProduct->metal_card_price }} $</h4>
                                </div>
                            </div>
                        </label>
                    </h4>
                </div>
                {{-- <div id="collapseThree" class="panel-collapse collapse">
                    <div class="panel-body">
                        <div class="pb-3">
                            <p>Extend your branding</p>
                            <div class="image-slider">
                                <div>
                                    <img class="img-fluid rounded-2"
                                        src="https://ovou.com/_next/image?url=https%3A%2F%2Fovou.com%2Fcdn-cgi%2Fimage%2Ffit%3Dscale-down%2Cwidth%3D1152%2Cheight%3D732%2Cquality%3D100%2Fhttps%3A%2F%2Fovou-production.nyc3.cdn.digitaloceanspaces.com%2Fproducts%2Fcards%2Fbanner%2Fmetal%2F1.png&w=640&q=100"
                                        alt="">
                                </div>
                                <div>
                                    <img class="img-fluid rounded-2"
                                        src="https://ovou.com/_next/image?url=https%3A%2F%2Fovou.com%2Fcdn-cgi%2Fimage%2Ffit%3Dscale-down%2Cwidth%3D1152%2Cheight%3D732%2Cquality%3D100%2Fhttps%3A%2F%2Fovou-production.nyc3.cdn.digitaloceanspaces.com%2Fproducts%2Fcards%2Fbanner%2Fmetal%2F2.png&w=640&q=100"
                                        alt="">
                                </div>
                                <div>
                                    <img class="img-fluid rounded-2"
                                        src="https://ovou.com/_next/image?url=https%3A%2F%2Fovou.com%2Fcdn-cgi%2Fimage%2Ffit%3Dscale-down%2Cwidth%3D1152%2Cheight%3D732%2Cquality%3D100%2Fhttps%3A%2F%2Fovou-production.nyc3.cdn.digitaloceanspaces.com%2Fproducts%2Fcards%2Fbanner%2Fmetal%2F3.png&w=640&q=100"
                                        alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div> --}}
            </div>
        </div>
        {{-- <button type="button" onclick="previousStep(2)"
            class="btn btn-secondary">Previous</button> --}}
        <button type="button" id="nextBtn2" class="py-3 btn btn-primary w-100" onclick="goToNextStep(2)"
            disabled>Continue <i class="fa-solid fa-right-arrow"></i></button>
    </div>

    <!-- Step 3 -->
    <div class="form-step" id="step3" style="display:none;">
        <div>
            <h2>Card Customization</h2>
            <p>Design Your Card</p>
        </div>
        <div class="card-design-box d-flex justify-content-center align-items-center position-relative">
            <div class="main-img position-relative">
                <!-- Main Card Image -->
                <img class="img-fluid" id="mainCardImage" src="{{ asset('images/metal-card.png') }}" alt="">
                <div class="card-logo position-absolute">
                    <!-- Image preview will be displayed here -->
                    <img id="logoPreview" width="70px" height="70px" style="object-fit: contain;"
                        src="{{ asset('images/logo.png') }}" alt="Card Logo Preview">
                </div>
            </div>
        </div>

        <div class="mt-5">
            <label>Choose Card Design</label>
            <div class="card-selection">
                <!-- Example of image choices -->
                <label for="design1">
                    <input type="radio" name="card_design_one" id="design1" class="card-design-option"
                        value="design1" style="display:none;">
                    <img src="{{ asset('images/metal-card.png') }}" alt="Card Design 1" class="img-choice"
                        data-image="{{ asset('images/metal-card.png') }}">
                </label>
                <label for="design2">
                    <input type="radio" name="card_design_two" id="design2" class="card-design-option"
                        value="design2" style="display:none;">
                    <img src="{{ asset('images/black-metal-card.png') }}" alt="Card Design 2" class="img-choice"
                        data-image="{{ asset('images/black-metal-card.png') }}">
                </label>
                <label for="design3">
                    <input type="radio" name="card_design_three" id="design3" class="card-design-option"
                        value="design3" style="display:none;">
                    <img src="{{ asset('images/white-metal-card.png') }}" alt="Card Design 3" class="img-choice"
                        data-image="{{ asset('images/white-metal-card.png') }}">
                </label>
            </div>
        </div>

        <div class="mt-5">
            <label for="card_logo">Upload Logo</label>
            <input class="form-control" type="file" name="card_logo" id="card_logo" required
                onchange="previewLogo()">
        </div>
        <div class="mt-5">
            <label for="design_note">Design Details</label>
            <textarea class="form-control" name="design_note" id="design_note" rows="3"
                placeholder="Examples: 'Logo in the middle', 'Name and title bottom left, logo top right'"></textarea>
        </div>

        <div class="mt-30 d-flex justify-content-between">
            <button type="button" onclick="previousStep(3)" class="p-2 px-3 btn btn-secondary">Previous</button>
            <button type="button" id="nextBtn3" class="p-2 px-3 btn btn-primary" onclick="goToNextStep(3)"
                disabled>Continue <i class="fa-solid fa-right-arrow"></i></button>

        </div>
    </div>
    <div class="form-step" id="step4" style="display:none;">
        <div>
            <h2>Order Summary</h2>
            <p>Design Your Card</p>
        </div>
        <div>
            <div class="accordion" id="accordionExample">
                <div class="accordion-item">
                    <h2 class="accordion-header rounded-0" id="headingOne">
                        <button class="accordion-button rounded-0" type="button" data-bs-toggle="collapse"
                            data-bs-target="#orderSummary" aria-expanded="true" aria-controls="orderSummary">
                            Summary
                            <span class="ms-4 fw-boldest text-end summary"></span>
                        </button>
                    </h2>
                    <div id="orderSummary" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                        data-bs-parent="#accordionExample">
                        <div class="py-2 mt-0 border accordion-body">
                            <div class="d-flex justify-content-between align-items-center">
                                <div>
                                    <img class="img-fluid" width="50"
                                        src="https://ovou.com/_next/image?url=https%3A%2F%2Fovou-production.nyc3.cdn.digitaloceanspaces.com%2Fproducts%2Fsummery%2Fplan.png&w=320&q=75"
                                        alt="">
                                </div>
                                <input type="hidden" name="subtotal" id="hidden-subtotal">
                                <input type="hidden" name="plan_id" value="{{ $cardProduct->id }}" id="plan_id">
                                <div class="ps-3">
                                    <h6 class="mb-0">{{ $cardProduct->title }}</h6>
                                    <p class="mb-0">Annual Plan</p>
                                </div>
                                <div>
                                    <h3>$ {{ $cardProduct->price }}</h3>
                                </div>
                            </div>
                            <div class="d-flex justify-content-between align-items-center">
                                <div>
                                    <img class="img-fluid" width="50"
                                        src="https://ovou.com/_next/image?url=https%3A%2F%2Fovou-production.nyc3.cdn.digitaloceanspaces.com%2Fproducts%2Fsummery%2Fmetal.png&w=320&q=75"
                                        alt="">
                                </div>
                                <div class="ps-3">
                                    <h6 class="mb-0"><span id="card_title"></span>
                                        Card</h6>
                                </div>
                                <div>
                                    <h3>$ <span id="card_price"></span> </h3>
                                </div>
                            </div>
                            <div class="d-flex justify-content-between align-items-center">

                                <div class="ps-3">
                                    <h6 class="mb-0" id="shipping_title"></h6>
                                </div>
                                <div>
                                    <h3 id="shipping_charge"></h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div>
            <h3>Account Information</h3>
            <p>Your email will be used for account creation and management.</p>
            <div class="my-5">
                <label for="name">Your Name</label>
                <input class="form-control" type="text" name="name" id="name" required>
            </div>
            <div class="my-5">
                <label for="email">Your Email</label>
                <input class="form-control" type="email" name="email" id="email" required>
            </div>
        </div>
        <div>
            <h3>Shipping Information</h3>
            <p>The ammount is for shipping and handling.</p>
            <div class="mt-3">
                <label>Choose your shipping method</label>
                @foreach ($shippingMethods as $shippingMethod)
                    <div class="mb-3 shipping-card" id="card-regularMail">
                        <input type="radio" id="regularMail{{ $shippingMethod->id }}" name="shipping_charge"
                            data-shipping_title="{{ $shippingMethod->title }}" value="{{ $shippingMethod->price }}">
                        <label for="regularMail{{ $shippingMethod->id }}" class="p-3 w-100"
                            style="cursor: pointer;">{{ $shippingMethod->title }} ($
                            {{ $shippingMethod->price }})</label>
                    </div>
                @endforeach

            </div>
        </div>
        <div class="mt-30 d-flex">
            <button type="submit" id="nextBtn3" class="p-2 px-3 btn btn-primary w-100 me-2">Submit</button>
            <button type="button" onclick="previousStep(3)" class="p-2 px-3 btn btn-secondary">Previous</button>
        </div>
    </div>
</form>

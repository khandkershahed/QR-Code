<form action="{{ route('card.checkout') }}" method="GET" id="multiStepForm">
    {{-- @csrf --}}
    <!-- Step 1 -->
    @if ($cardProduct->card_type == 'team')
        <div class="border mt-30" style="border-radius: 8px">
            <div class="d-flex align-items-end">
                <div class="px-4 py-4 bg-light d-flex align-items-center">
                    <div class="pe-2">
                        <img class="" width="50px" src="{{ asset('images/user.webp') }}" alt="">
                    </div>
                    <div class="">
                        <input type="number" name="card_user"
                            class="p-2 py-0 text-center bg-transparent form-control rounded-0 user-slider-range"
                            placeholder="1" value="2" id="userSliderRange">
                    </div>
                </div>
                <div class="pb-2 w-100 pe-2">
                    <p class="mb-0 ps-2 text-muted"><small>Updated USERS</small></p>
                    <div class="ps-2 slidecontainer">
                        <input type="range" class="p-0 w-100" id="rangeSlider" min="2" max="100"
                            value="2">
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
                        @if ($cardProduct->card_type == 'team')
                            <h3 class="amount-title">$ {{ $cardProduct->price * 2 }}</h3>
                        @else
                            <h3 class="amount-title">$ {{ $cardProduct->price }}</h3>
                        @endif
                        <p class="mb-0"><strong>$ <span class="annualCharge">{{ $cardProduct->price }}</span></strong>
                            <small class="text-muted">/Yearly</small>
                        </p>
                        <div class="link main-color">
                            <p style="color: #ff3e3b;" class="fw-bold mb-0">Continue <i class="fas fa-arrow-right"></i>
                            </p>
                        </div>
                    </div>
                </div>
            </label>
        </div>
    </div>

    <!-- Step 2 -->
    <div class="form-step" id="step2" style="display:none;">
        <div class="pt-30">
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
                            <div class="custom-card d-flex justify-content-between align-items-center">
                                <div>
                                    <h4 class="px-3 mb-0">Plastic Card</h4>
                                    <small class="mb-0 ps-3" style="font-size: 12px">Extend your branding</small>
                                </div>
                                <div>
                                    <h4 class="px-3 mb-0"> <i class="fas fa-circle-check text-danger"></i>
                                        {{ $cardProduct->plastic_card_price }} $</h4>
                                </div>
                            </div>
                        </label>
                    </h4>
                </div>
                <div id="collapseTwo" class="panel-collapse collapse">
                    <div class="panel-body">
                        <div class="pb-3">
                            <div class="image-slider">
                                <div class="mt-3">
                                    <img class="img-fluid rounded-2" src="{{ asset('images/Black/BlackMockup.webp') }}"
                                        alt="">
                                </div>
                                <div class="mt-3">
                                    <img class="img-fluid rounded-2"
                                        src="{{ asset('images/Black/BlackMockup-3.webp') }}" alt="">
                                </div>
                                <div class="mt-3">
                                    <img class="img-fluid rounded-2" src="{{ asset('images/Gold/GoldMockup-4.webp') }}"
                                        alt="">
                                </div>
                                <div class="mt-3">
                                    <img class="img-fluid rounded-2"
                                        src="{{ asset('images/Black/BlackMockup-5.webp') }}" alt="">
                                </div>
                                <div class="mt-3">
                                    <img class="img-fluid rounded-2"
                                        src="{{ asset('images/Gold/GoldMockup-6.webp') }}" alt="">
                                </div>
                                <div class="mt-3">
                                    <img class="img-fluid rounded-2"
                                        src="{{ asset('images/Black/BlackMockup-7.webp') }}" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Third Card -->
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="mb-0 panel-title">
                        <label class="mb-0 w-100">
                            <input type="radio" id="r13" name="card_preference" value="metal"
                                data-card_title="Metal" data-card_price="{{ $cardProduct->metal_card_price }}" />
                            <div class="custom-card d-flex justify-content-between align-items-center">
                                <div>
                                    <h4 class="px-3 mb-0">Metal Card</h4>
                                    <small class="mb-0 ps-3" style="font-size: 12px">Extend your branding</small>
                                </div>
                                <div>
                                    <h4 class="px-3 mb-0"><i class="fas fa-circle-check text-danger"></i>
                                        {{ $cardProduct->metal_card_price }} $</h4>
                                </div>
                            </div>
                        </label>
                    </h4>
                </div>
                <div id="collapseThree" class="panel-collapse collapse">
                    <div class="panel-body">
                        <div class="pb-3">
                            <div class="image-slider">
                                <div class="mt-3">
                                    <img class="img-fluid rounded-2" src="{{ asset('images/Gold/GoldMockup.webp') }}"
                                        alt="">
                                </div>
                                <div class="mt-3">
                                    <img class="img-fluid rounded-2"
                                        src="{{ asset('images/Gold/GoldMockup-3.webp') }}" alt="">
                                </div>
                                <div class="mt-3">
                                    <img class="img-fluid rounded-2"
                                        src="{{ asset('images/Black/BlackMockup-4.webp') }}" alt="">
                                </div>
                                <div class="mt-3">
                                    <img class="img-fluid rounded-2"
                                        src="{{ asset('images/Gold/GoldMockup-5.webp') }}" alt="">
                                </div>
                                <div class="mt-3">
                                    <img class="img-fluid rounded-2"
                                        src="{{ asset('images/Black/BlackMockup-6.webp') }}" alt="">
                                </div>
                                <div class="mt-3">
                                    <img class="img-fluid rounded-2"
                                        src="{{ asset('images/Gold/GoldMockup-7.webp') }}" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- <button type="button" onclick="previousStep(2)"
            class="btn btn-secondary">Previous</button> --}}



        <div class="mt-30 d-flex justify-content-between">
            <button type="button" onclick="previousStep(2)" class="p-2 px-3 btn btn-secondary"><i
                    class="fas fa-angle-left"></i> Back</button>
            <button type="button" id="nextBtn2" class="theme-btn style-two" style="border-radius: 10px;"
                onclick="goToNextStep(2)" disabled>Continue <i class="fas fa-arrow-right"></i></button>

        </div>
    </div>

    <!-- Step 3 -->
    <div class="form-step" id="step3" style="display:none;">
        <div class="pt-30">
            <h2>Card Customization</h2>
            <p>Design Your Card</p>
        </div>
        <div class="card-design-box d-flex justify-content-center align-items-center position-relative">
            <div class="main-img position-relative">
                <!-- Main Card Image -->
                <img class="img-fluid" id="mainCardImage"
                    src="{{ asset('images/Choosen-card/BlackCardBack-mockup.webp') }}" alt="">
                <div class="card-logo position-absolute">
                    <!-- Image preview will be displayed here -->
                    <img id="logoPreview" width="50px" height="50px" style="object-fit: contain;"
                        src="{{ asset('images/logo.png') }}" alt="Card Logo Preview">
                </div>
                <div class="card-info position-absolute">
                    <p class="mb-0 fw-bold">MD BADRODDUJA SAGAR</p>
                    <p class="mb-0"><small>President & CEO</small></p>
                </div>
            </div>
        </div>

        <div class="mt-5">
            <label>Choose Card Design</label>
            <div class="card-selection">
                <!-- Example of image choices -->
                <label for="design1">
                    <input type="radio" name="card_design" id="design1" class="card-design-option"
                        value="design1" style="display:none;" checked>
                    <img src="{{ asset('images/Choosen-card/BlackCardBack-mockup.webp') }}" alt="Card Design 1"
                        class="img-choice" data-image="{{ asset('images/Choosen-card/BlackCardBack-mockup.webp') }}">
                </label>
                <label for="design2">
                    <input type="radio" name="card_design" id="design2" class="card-design-option"
                        value="design2" style="display:none;">
                    <img src="{{ asset('images/Choosen-card/GoldCardBack-mockup.webp') }}" alt="Card Design 2"
                        class="img-choice" data-image="{{ asset('images/Choosen-card/GoldCardBack-mockup.webp') }}">
                </label>
            </div>
        </div>

        <div class="row">
            <div class="col-6">
                <div class="mt-5">
                    <label for="card_logo">Upload Logo </label>
                    <input class="form-control border" type="file" name="card_logo" id="card_logo"
                        onchange="previewLogo()">
                </div>
            </div>
            <div class="col-6">
                <div class="mt-5">
                    <label for="card_holder_name">Holder Name </label>
                    <input class="form-control border" type="text" name="card_holder_name" id="card_holder_name"
                        oninput="previewName()" placeholder="Enter Card Holder Name">
                </div>
            </div>
            <div class="col-6">
                <div class="mt-5">
                    <label for="card_holder_designation">Holder Designation </label>
                    <input class="form-control border" type="text" name="card_holder_designation"
                        id="card_holder_designation" oninput="previewDesignation()"
                        placeholder="Enter Card Holder Designation">
                </div>
            </div>
            <div class="col-6">
                <div class="mt-5">
                    <label for="card_holder_designation">Choose Card Color</label>
                    <select class="form-select" name="card_holder_designation" aria-label="Default select example"
                        id="card_holder_designation" onchange="previewName()"
                        style="border-radius: 14px; font-weight: 400; padding: 14px 40px 14px 20px !important; border-radius: 12px;">
                        <option selected>Card Color</option>
                        <option value="black">Black</option>
                        <option value="gold">Gold</option>
                    </select>
                </div>
            </div>
            <div class="col-12">
                <div class="mt-5">
                    <label for="design_note">Design Details</label>
                    <textarea class="form-control border" name="design_note" id="design_note" rows="3"
                        placeholder="Examples: 'Logo in the middle', 'Name and title bottom left, logo top right'"></textarea>
                </div>
            </div>
        </div>
        <div class="mt-30 d-flex justify-content-between">
            <button type="button" onclick="previousStep(3)" class="p-2 px-3 btn btn-secondary"><i
                    class="fas fa-angle-left"></i> Back</button>
            <button type="button" id="nextBtn3" class="theme-btn style-two" style="border-radius: 10px;"
                onclick="goToNextStep(3)" disabled>Continue <i class="fas fa-arrow-right"></i></button>

        </div>
    </div>
    <div class="form-step" id="step4" style="display:none;">
        <div>
            <div class="pt-30">
                <h3 class="mb-0">Shipping Information</h3>
                <p class="mb-0">The ammount is for shipping and handling.</p>
            </div>
            {{-- <div>
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
            </div> --}}
            <div>
                <label>Choose your shipping method <span class="text-danger">*</span></label>
                @foreach ($shippingMethods as $index => $shippingMethod)
                    <div class="mb-3 shipping-card" id="card-regularMail">
                        <input type="radio" id="regularMail{{ $shippingMethod->id }}" name="shipping_charge"
                            data-shipping_title="{{ $shippingMethod->title }}" value="{{ $shippingMethod->price }}"
                            required>
                        <label for="regularMail{{ $shippingMethod->id }}" class="p-3 w-100"
                            style="cursor: pointer;">{{ $shippingMethod->title }}
                            (${{ $shippingMethod->price }})
                        </label>
                    </div>
                @endforeach
            </div>

        </div>
        <div class="pt-30">
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
                        <div class="py-4 mt-0 border accordion-body">
                            <div class="mb-5 d-flex justify-content-between align-items-center">
                                <div class="d-flex justify-content-between align-items-center">
                                    <img class="img-fluid" width="50"
                                        src="{{ asset('images/Black/BlackCard.webp') }}" alt="">
                                    <h6 class="mb-0 ps-4">{{ $cardProduct->title }} Plans</h6>
                                </div>
                                <input type="hidden" name="subtotal" id="hidden-subtotal">
                                <input type="hidden" name="plan_id" value="{{ $cardProduct->id }}" id="plan_id">
                                <div>
                                    <h6 class="mb-0">$ {{ $cardProduct->price }} * <span class="userSummary me-5"></span> <span class="planSummary"></span></h6>
                                </div>
                            </div>
                            <div class="mb-5 d-flex justify-content-between align-items-center">
                                <div class="d-flex align-items-center">
                                    <img class="img-fluid" width="50"
                                        src="{{ asset('images/Gold/GoldCard.webp') }}" alt="">
                                    <h6 class="mb-0 ps-4"><span id="card_title"></span>
                                        Card</h6>
                                </div>
                                <div>
                                    <h6 class="mb-0"> <span class="cardSummary"></span>  * <span class="userSummary me-5"></span> <span id="card_price"></span> </h6>
                                </div>
                            </div>
                            <div class="d-flex justify-content-between align-items-center">

                                <div>
                                    <h6 class="mb-0" id="shipping_title"></h6>
                                </div>
                                <div>
                                    <h6 class="mb-0" id="shipping_charge"></h6>
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
                <label for="name">Your Name <span class="text-danger">*</span></label>
                <input class="form-control" type="text" name="name" id="name" required>
            </div>
            <div class="my-5">
                <label for="email">Your Email <span class="text-danger">*</span></label>
                <input class="form-control" type="email" name="email" id="email" required>
            </div>
        </div>
        <div class="mt-30 d-flex justify-content-between align-items-center">
            <button type="button" onclick="previousStep(4)" class="p-2 px-3 btn btn-secondary"><i
                    class="fas fa-angle-left"></i> Back</button>
            <button type="submit" id="nextBtn3" class="theme-btn style-two" style="border-radius: 10px;">Submit <i
                    class="fas fa-arrow-right"></i></button>
        </div>
    </div>
</form>

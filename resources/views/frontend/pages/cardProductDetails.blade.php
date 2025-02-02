<x-frontend-app-layout :title="'Card Product Details || GoFlixza - Your Hub for QR, Bar Codes & NFC V.Cards'">
    <style>
        /* Custom styling for error messages */
        label.error {
            color: red;
            font-size: 12px;
        }

        /* Custom styling for input fields when they have errors */
        input.error {
            border: 2px solid red;
            background-color: #f8d7da;
        }

        button:disabled {
            background-color: #ddd;
            cursor: not-allowed;
        }

        .title-badges {
            display: inline-flex;
            appearance: none;
            -webkit-box-align: center;
            align-items: center;
            -webkit-box-pack: center;
            justify-content: center;
            user-select: none;
            position: relative;
            white-space: nowrap;
            vertical-align: middle;
            outline: transparent solid 2px;
            outline-offset: 2px;
            line-height: 1.2;
            transition-property: var(--chakra-transition-property-common);
            transition-duration: var(--chakra-transition-duration-normal);
            text-transform: capitalize;
            height: var(--chakra-sizes-9);
            min-width: var(--chakra-sizes-12);
            padding-inline-start: var(--chakra-space-12);
            padding-inline-end: var(--chakra-space-12);
            background: rgb(1, 1, 1);
            width: 50%;
            border-top-left-radius: 6.25rem;
            border-bottom-left-radius: 6.25rem;
            font-size: var(--chakra-fontSizes-xs);
            font-weight: 600;
            padding: 0px 0.125rem;
            color: rgb(255, 255, 255);
        }

        .title-badges-off {
            text-align: center;
            width: 50%;
            background-color: #eee;
            border-top-right-radius: 6.25rem;
            border-bottom-right-radius: 6.25rem;
        }

        .plan-box-container {
            max-width: 600px;
            margin: auto;
            padding: 20px;
        }

        .plan .title {
            color: transparent;
            font-size: 40px;
            font-weight: 700;
            line-height: 150%;
            background-image: linear-gradient(94deg, rgb(179, 44, 14) 20%, rgb(255, 100, 58) 100%);
            background-clip: text;
        }

        .plan .link a {
            font-size: 14px;
            font-weight: 600;
            line-height: 150%;
            color: rgb(255, 100, 58);
        }

        .plan-text {
            color: rgb(255, 100, 58);
        }

        /* .radio-card-container {
            display: flex;
            gap: 15px;
        } */

        .radio-card {
            align-self: stretch;
            border-radius: 10px;
            gap: 24px;
            padding: 16px;
            border: 1px solid rgb(227, 227, 227);
            cursor: pointer;
            display: flex;
            flex-direction: column;
            position: relative;
        }

        .radio-card:hover {
            background-color: rgb(227, 227, 227);
        }

        .panel-default {
            align-self: stretch;
            border-radius: 10px;
            padding: 0px;
            border: 1px solid rgb(227, 227, 227);
            cursor: pointer;
            display: flex;
            flex-direction: column;
            position: relative;
            margin-bottom: 10px;
        }

        .panel-body {
            padding-left: 15px;
            padding-right: 15px;
        }

        .panel-title {
            margin-bottom: 0'

        }

        .amount-title {
            color: rgb(1, 1, 1);
            font-size: 32px;
            font-weight: 800;
            line-height: 110%;
            align-self: stretch;
            letter-spacing: -0.32px;
            text-decoration: none;
        }

        .plan-title {
            color: rgb(1, 1, 1);
            font-size: 24px;
            font-weight: 800;
            line-height: 125%;
            align-self: stretch;
            letter-spacing: -0.24px;
        }

        .radio-card input {
            display: none;
        }

        .card-content {
            display: flex;
            justify-content: space-between;
        }

        .radio-card .card-content {
            padding-left: 10px;
        }

        .radio-card .badge {
            background-color: #28a745;
            color: white;
            padding: 5px 10px;
            border-radius: 5px;
            font-size: 14px;
        }

        /* Highlight the border when selected */
        .radio-card input:checked+.card-content {
            border: 2px solid #007BFF;
            padding: 15px;
            border-radius: 10px;
        }

        /* Progress bar styles */
        #progressBarContainer {
            margin-bottom: 20px;
        }

        #progressBar {
            height: 8px;
            background-color: #ddd;
            border-radius: 5px;
        }

        #progress {
            width: 0%;
            height: 100%;
            background-color: #28a745;
            border-radius: 5px;
        }

        .plan-continue {}

        .gift-card {
            background-color: rgb(0, 26, 64);
            /* background-image: url((unknown)); */
            padding: 16px;
            gap: 12px;
            border-radius: 10px;
            margin: 32px 0px 8px;
        }

        .gift-title {
            color: transparent;
            font-size: 21px;
            font-weight: 800;
            line-height: 26.25px;
            margin-bottom: 8px;
            background-image: linear-gradient(93deg, rgb(156, 156, 156) 2.81%, rgb(244, 244, 244) 29.58%);
            background-clip: text;
        }

        .gift-para {
            font-size: 12px;
            line-height: 18px;
            color: rgb(255, 255, 255);
            margin-bottom: 12px;
        }

        .gift-link {
            color: rgb(255, 255, 255);
            font-size: 14px;
            font-weight: 600;
            line-height: 21px;
            text-align: right;
        }

        .accordion-item .accordion-button {
            font-size: 20px;
            line-height: 1.3;
            -webkit-box-shadow: none;
            box-shadow: none;
            background: white;
            position: initial;
            padding: 20px 30px;
            border-radius: 14px;
            letter-spacing: -0.4px;
            border: 1.25px solid white;
        }

        .accordion-item .accordion-collapse .accordion-body {
            margin-top: 24px;
            padding: 0 30px 25px;
        }

        .checkbox-check {
            padding: 5px;
            width: 25px;
            height: 25px;
            line-height: 0;
        }

        .custom-card {
            border: 2px solid transparent;
            border-radius: 10px;
            text-align: start;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        /* Hide the default radio button */
        input[type="radio"] {
            display: none;
        }

        /* Add border when checked */
        input[type="radio"]:checked+.custom-card {
            border: 2px solid #007bff;
            background-color: #f8f9fa;
            padding: 15px;
            border-radius: 0;
        }

        .slick-dots {
            bottom: -5px;
            position: relative;
            margin-bottom: 10px;
        }

        .slick-dots li {
            width: 60px;
            /* Thumbnail size */
            height: 60px;
        }

        .slick-dots li button {
            width: 100%;
            height: 100%;
            padding: 0;
            border: none;
        }

        .slick-dot-thumbnail {
            width: 100%;
            height: 100%;
            object-fit: cover;
            border-radius: 5px;
            /* Rounded thumbnails */
        }

        .slick-dots li:after {
            content: "";
            position: absolute;
            left: -5px;
            top: -5px;
            width: 15px;
            height: 15px;
            border-radius: 50%;
            border: 10px solid #dc3545;
            -webkit-transition: 0.5s;
            -o-transition: 0.5s;
            transition: 0.5s;
            -webkit-transform: scale(0);
            -ms-transform: scale(0);
            transform: scale(0);
        }

        .slick-dots li.slick-active::after {
            transform: scale(1);
            border-color: #dc3545;
        }

        .main-img {
            position: relative;
            display: inline-block;
        }

        .card-logo {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
        }

        .card-design-box {
            background-color: #eee;
            padding-top: 30px;
            padding-bottom: 30px;
            border-radius: 10px;
        }

        .img-choice {
            width: 70px;
            height: 50px;
            object-fit: contain;
            border: 1px solid black;
            border-radius: 6px;
            padding: 5px;
        }
    </style>

    <section class="text-center page-banner-area overlay py-120 rpy-120 rel z-1 bgs-cover"
        style="background-image: url({{ asset('images/shop-page-banner-.jpg') }});">
        <div class="container">
            <div class="text-black banner-inner pt-70 rpt-60">
                <h1 class="page-title aos-init aos-animate" data-aos="fade-up" data-aos-duration="1500"
                    data-aos-offset="50">
                    {{ $cardProduct->title }}
                </h1>
                {{-- <p>{{ $cardProduct->short_description }}</p> --}}
            </div>
        </div>
    </section>

    <section class="plan-box-container">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="border-0 card plan">
                        {{-- <div class="d-flex">
                            <p class="py-3 title-badges">For Individual</p>
                            <p class="py-3 title-badges-off">For Team</p>
                        </div> --}}
                        <div class="p-0 bg-transparent border-0 card-header">
                            <p class="mb-0 title">Individual</p>
                            <p class="mb-0">Complimentary Smart Card included.</p>
                            <div class="link">
                                <a href="#">See all features</a>
                            </div>
                        </div>
                        <div class="p-0 mt-30 card-body">
                            <div class="form-container">
                                <div id="progressBarContainer" style="display: none">
                                    <div style="display: flex; justify-content: space-between;">
                                        <span>Choose a Plan</span>
                                        <span>Card Customize</span>
                                        <span>Step 3</span>
                                    </div>
                                    <div id="progressBar">
                                        <div id="progress"></div>
                                    </div>
                                </div>

                                <form id="multiStepForm">
                                    <!-- Step 1 -->
                                    <div class="form-step" id="step1">
                                        <div class="radio-card-container">
                                            <label class="mt-10 radio-card ">
                                                <input type="radio" name="plan" value="annual" required
                                                    onchange="goToNextStep(1)">
                                                <div class="card-content">
                                                    <div>
                                                        <h3 class="plan-title">Annual Plan</h3>
                                                        <p class="mb-0"><span class="badge">Save 31%</span></p>
                                                        <p class="mb-0"><small>Equal to $8.25/mo</small></p>
                                                    </div>
                                                    <div>
                                                        <h3 class="amount-title">$99</h3>
                                                        <p class="mb-0"><strong>$99</strong> Billed Annually</p>
                                                    </div>
                                                </div>
                                            </label>
                                            <label class="mt-20 radio-card">
                                                <input type="radio" name="plan" value="trial"
                                                    onchange="goToNextStep(1)">
                                                <div class="card-content">
                                                    <div>
                                                        <h3 class="plan-title">Pay Monthly - $12/mo</h3>
                                                    </div>
                                                    <div>
                                                        <h3 class="amount-title">$12</h3>
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
                                            <!-- First Card -->
                                            {{-- <div class="panel panel-default">
                                                <div class="panel-heading">
                                                    <h4 class="mb-0 panel-title">
                                                        <label class="w-100">
                                                            <input type="radio" id="r11" name="occupation"
                                                                value="Standard Card" />
                                                            <div class="custom-card">
                                                                <h4 class="p-3 mb-0">Standard Card</h4>
                                                            </div>
                                                        </label>
                                                    </h4>
                                                </div>
                                                <div id="collapseOne" class="panel-collapse collapse">
                                                    <div class="panel-body">
                                                        <p>Minimalistic design</p>
                                                        <div class="image-slider">
                                                            <div>
                                                                <img class="img-fluid rounded-2"
                                                                    src="https://ovou.com/_next/image?url=https%3A%2F%2Fovou.com%2Fcdn-cgi%2Fimage%2Ffit%3Dscale-down%2Cwidth%3D1152%2Cheight%3D732%2Cquality%3D100%2Fhttps%3A%2F%2Fovou-production.nyc3.cdn.digitaloceanspaces.com%2Fproducts%2Fcards%2Fbanner%2Fstandard%2F1.png&w=640&q=100"
                                                                    alt="">
                                                            </div>
                                                            <div>
                                                                <img class="img-fluid rounded-2"
                                                                    src="https://ovou.com/_next/image?url=https%3A%2F%2Fovou.com%2Fcdn-cgi%2Fimage%2Ffit%3Dscale-down%2Cwidth%3D1152%2Cheight%3D732%2Cquality%3D100%2Fhttps%3A%2F%2Fovou-production.nyc3.cdn.digitaloceanspaces.com%2Fproducts%2Fcards%2Fbanner%2Fstandard%2F2.png&w=640&q=100"
                                                                    alt="">
                                                            </div>
                                                            <div>
                                                                <img class="img-fluid rounded-2"
                                                                    src="https://ovou.com/_next/image?url=https%3A%2F%2Fovou.com%2Fcdn-cgi%2Fimage%2Ffit%3Dscale-down%2Cwidth%3D1152%2Cheight%3D732%2Cquality%3D100%2Fhttps%3A%2F%2Fovou-production.nyc3.cdn.digitaloceanspaces.com%2Fproducts%2Fcards%2Fbanner%2Fstandard%2F3.png&w=640&q=100"
                                                                    alt="">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div> --}}

                                            <!-- Second Card -->
                                            <div class="panel panel-default">
                                                <div class="panel-heading">
                                                    <h4 class="mb-0 panel-title">
                                                        <label class="w-100">
                                                            <input type="radio" id="r12" name="occupation"
                                                                value="Custom Card" />
                                                            <div class="custom-card">
                                                                <h4 class="p-3 mb-0">Custom Card</h4>
                                                            </div>
                                                        </label>
                                                    </h4>
                                                </div>
                                                <div id="collapseTwo" class="panel-collapse collapse">
                                                    <div class="panel-body">
                                                        <p>Extend your branding</p>
                                                        <div class="image-slider">
                                                            <div>
                                                                <img class="img-fluid rounded-2"
                                                                    src="https://ovou.com/_next/image?url=https%3A%2F%2Fovou.com%2Fcdn-cgi%2Fimage%2Ffit%3Dscale-down%2Cwidth%3D1152%2Cheight%3D732%2Cquality%3D100%2Fhttps%3A%2F%2Fovou-production.nyc3.cdn.digitaloceanspaces.com%2Fproducts%2Fcards%2Fbanner%2Fcustom%2F1.png&w=640&q=100"
                                                                    alt="">
                                                            </div>
                                                            <div>
                                                                <img class="img-fluid rounded-2"
                                                                    src="https://ovou.com/_next/image?url=https%3A%2F%2Fovou.com%2Fcdn-cgi%2Fimage%2Ffit%3Dscale-down%2Cwidth%3D1152%2Cheight%3D732%2Cquality%3D100%2Fhttps%3A%2F%2Fovou-production.nyc3.cdn.digitaloceanspaces.com%2Fproducts%2Fcards%2Fbanner%2Fcustom%2F2.png&w=640&q=100"
                                                                    alt="">
                                                            </div>
                                                            <div>
                                                                <img class="img-fluid rounded-2"
                                                                    src="https://ovou.com/_next/image?url=https%3A%2F%2Fovou.com%2Fcdn-cgi%2Fimage%2Ffit%3Dscale-down%2Cwidth%3D1152%2Cheight%3D732%2Cquality%3D100%2Fhttps%3A%2F%2Fovou-production.nyc3.cdn.digitaloceanspaces.com%2Fproducts%2Fcards%2Fbanner%2Fcustom%2F3.png&w=640&q=100"
                                                                    alt="">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- Third Card -->
                                            <div class="panel panel-default">
                                                <div class="panel-heading">
                                                    <h4 class="mb-0 panel-title">
                                                        <label class="w-100">
                                                            <input type="radio" id="r13" name="occupation"
                                                                value="Metal Card" />
                                                            <div class="custom-card">
                                                                <h4 class="p-3 mb-0">Metal Card</h4>
                                                            </div>
                                                        </label>
                                                    </h4>
                                                </div>
                                                <div id="collapseThree" class="panel-collapse collapse">
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
                                                </div>
                                            </div>
                                        </div>
                                        <button type="button" id="nextBtn2" class="py-3 btn btn-primary w-100"
                                            onclick="goToNextStep(2)" disabled>Continue <i
                                                class="fa-solid fa-right-arrow"></i></button>
                                        {{-- <button type="button" onclick="previousStep(2)"
                                            class="btn btn-secondary">Previous</button> --}}
                                    </div>

                                    <!-- Step 3 -->
                                    <div class="form-step" id="step3" style="display:none;">
                                        <div>
                                            <h2>Card Customization</h2>
                                            <p>Design Your Card</p>
                                        </div>
                                        <div
                                            class="card-design-box d-flex justify-content-center align-items-center position-relative">
                                            <div class="main-img position-relative">
                                                <!-- Main Card Image -->
                                                <img class="img-fluid" id="mainCardImage"
                                                    src="{{ asset('images/metal-card.png') }}" alt="">
                                                <div class="card-logo position-absolute">
                                                    <!-- Image preview will be displayed here -->
                                                    <img id="logoPreview" width="100" height="100"
                                                        style="object-fit: contain;"
                                                        src="{{ asset('images/logo.png') }}" alt="Card Logo Preview">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="mt-5">
                                            <label>Choose Card Design</label>
                                            <div class="card-selection">
                                                <!-- Example of image choices -->
                                                <label for="design1">
                                                    <input type="radio" name="card_design_one" id="design1"
                                                        class="card-design-option" value="design1"
                                                        style="display:none;">
                                                    <img src="{{ asset('images/metal-card.png') }}"
                                                        alt="Card Design 1" class="img-choice"
                                                        data-image="{{ asset('images/metal-card.png') }}">
                                                </label>
                                                <label for="design2">
                                                    <input type="radio" name="card_design_two" id="design2"
                                                        class="card-design-option" value="design2"
                                                        style="display:none;">
                                                    <img src="{{ asset('images/black-metal-card.png') }}"
                                                        alt="Card Design 2" class="img-choice"
                                                        data-image="{{ asset('images/black-metal-card.png') }}">
                                                </label>
                                                <label for="design3">
                                                    <input type="radio" name="card_design_three" id="design3"
                                                        class="card-design-option" value="design3"
                                                        style="display:none;">
                                                    <img src="{{ asset('images/white-metal-card.png') }}"
                                                        alt="Card Design 3" class="img-choice"
                                                        data-image="{{ asset('images/white-metal-card.png') }}">
                                                </label>
                                            </div>
                                        </div>

                                        <div class="mt-5">
                                            <label for="card_logo">Upload Logo</label>
                                            <input type="file" name="card_logo" id="card_logo" required
                                                onchange="previewLogo()">
                                        </div>

                                        <div class="mt-30 d-flex">
                                            <button type="submit" id="nextBtn3" class="py-3 btn btn-primary w-100 me-2"
                                                disabled>Submit</button>
                                            <button type="button" onclick="previousStep(3)"
                                                class="py-3 btn btn-secondary">Previous</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <a href="">
                        <div class="card gift-card">
                            <p class="mb-0 gift-title">OVOU Gift</p>
                            <p class="mb-0 gift-para">Available as eGift or beautifully packaged Smart Cards, ideal
                                for client appreciation or event giveaways.</p>
                            <div>
                                <p class="mb-0 gift-link">Buy as a Gift -></p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-12">
                    <h2 class="mt-30">FAQ Accordion</h2>
                    <div class="accordion" id="accordionExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header rounded-0" id="headingOne">
                                <button class="accordion-button rounded-0 collapsed" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true"
                                    aria-controls="collapseOne">
                                    Accordion Item #1
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <strong>This is the first item's accordion body.</strong> It is shown by default,
                                    until the collapse plugin adds the appropriate classes that we use to style each
                                    element. These classes control the overall appearance, as well as the showing and
                                    hiding via CSS transitions. You can modify any of this with custom CSS or overriding
                                    our default variables. It's also worth noting that just about any HTML can go within
                                    the <code>.accordion-body</code>, though the transition does limit overflow.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header rounded-0" id="headingTwo">
                                <button class="accordion-button collapsed rounded-0" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false"
                                    aria-controls="collapseTwo">
                                    Accordion Item #2
                                </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <strong>This is the second item's accordion body.</strong> It is hidden by default,
                                    until the collapse plugin adds the appropriate classes that we use to style each
                                    element. These classes control the overall appearance, as well as the showing and
                                    hiding via CSS transitions. You can modify any of this with custom CSS or overriding
                                    our default variables. It's also worth noting that just about any HTML can go within
                                    the <code>.accordion-body</code>, though the transition does limit overflow.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header rounded-0" id="headingThree">
                                <button class="accordion-button collapsed rounded-0" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false"
                                    aria-controls="collapseThree">
                                    Accordion Item #3
                                </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse"
                                aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <strong>This is the third item's accordion body.</strong> It is hidden by default,
                                    until the collapse plugin adds the appropriate classes that we use to style each
                                    element. These classes control the overall appearance, as well as the showing and
                                    hiding via CSS transitions. You can modify any of this with custom CSS or overriding
                                    our default variables. It's also worth noting that just about any HTML can go within
                                    the <code>.accordion-body</code>, though the transition does limit overflow.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @push('scripts')
        <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.5/dist/jquery.validate.min.js"></script>
        {{-- For Image Slider End --}}
        <script>
            $(document).ready(function() {
                $('.image-slider').slick({
                    dots: true, // Enable dots
                    infinite: true,
                    speed: 500,
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    autoplay: true,
                    autoplaySpeed: 3000,
                    arrows: false,
                    customPaging: function(slider, i) {
                        var thumb = $(slider.$slides[i]).find("img").attr("src"); // Get image source
                        return '<img src="' + thumb + '" class="slick-dot-thumbnail"/>'; // Return thumbnail
                    }
                });
            });
        </script>
        {{-- For Image Slider End --}}
        {{-- For Multi Steper Form With Validation --}}
        <script>
            $(document).ready(function() {
                // Enable Next Button if plan or occupation is selected
                $('input[name="plan"], input[name="occupation"]').on('change', function() {
                    $('#nextBtn2').prop('disabled', false);
                });

                // Enable Next Button for Step 3 if card logo is uploaded
                $('#card_logo').on('change', function() {
                    validateStep3(); // Validate step 3 when file input changes
                    previewLogo(); // Show the preview of the logo
                });
            });

            // Navigate to the next step
            function goToNextStep(step) {
                if (step === 1 && $('input[name="plan"]:checked').length) {
                    $('#step1').hide();
                    $('#step2').show();
                } else if (step === 2 && $('input[name="occupation"]:checked').length) {
                    $('#step2').hide();
                    $('#step3').show();
                } else if (step === 3 && $('#card_logo').val()) {
                    $('#step3').hide();
                    // Assuming next step is another form step
                    // Add your logic here for what happens after step 3
                } else {
                    alert("Please make a selection.");
                }
            }

            // Navigate to the previous step
            function previousStep(step) {
                $('#step' + step).hide();
                $('#step' + (step - 1)).show();
            }

            // Validate Step 3 (enable Next button if logo is selected)
            function validateStep3() {
                $('#nextBtn3').prop('disabled', !$('#card_logo').val());
            }

            // Event listener to update the main card image when a new design is chosen
            $(document).ready(function() {
                $('.img-choice').on('click', function() {
                    // Get the image source from the clicked image
                    var newCardImage = $(this).data('image');
                    // Change the main card image to the selected one
                    $('#mainCardImage').attr('src', newCardImage);
                });

                // Handle the card logo preview
                $('#card_logo').on('change', function() {
                    previewLogo(); // Show the logo preview when a file is selected
                });
            });

            // Function to preview the uploaded logo
            function previewLogo() {
                const fileInput = document.getElementById('card_logo');
                const logoPreview = document.getElementById('logoPreview');

                // Check if a file is selected
                if (fileInput.files && fileInput.files[0]) {
                    const reader = new FileReader();

                    reader.onload = function(e) {
                        // Set the logo preview source to the selected image
                        logoPreview.src = e.target.result;
                    }

                    // Read the selected image file as a data URL
                    reader.readAsDataURL(fileInput.files[0]);
                }
            }
        </script>

        {{-- For Multi Steper Form With Validation End --}}
        {{-- For Accordion under image field --}}
        <script>
            $(document).ready(function() {
                $('input[type="radio"]').on('change', function() {
                    $('.panel-collapse').collapse('hide'); // Hide all collapses
                    if ($(this).attr('id') === 'r11') {
                        $('#collapseOne').collapse('show');
                    } else if ($(this).attr('id') === 'r12') {
                        $('#collapseTwo').collapse('show');
                    } else if ($(this).attr('id') === 'r13') {
                        $('#collapseThree').collapse('show');
                    }
                });
            });
        </script>
        {{-- For Accordion under image field end --}}
        {{-- Radio With Accordion Start --}}
        <script>
            // Select all elements with class "accordion"
            const accordions = document.querySelectorAll('.accordion');

            accordions.forEach(accordion => {
                accordion.addEventListener('click', function() {
                    // Toggle the "active" class on the clicked accordion button
                    this.classList.toggle('active');

                    // Select the next element sibling which is the corresponding panel
                    const panel = this.nextElementSibling;

                    // Toggle the display style of the panel
                    if (panel.style.display === 'block') {
                        panel.style.display = 'none';
                    } else {
                        panel.style.display = 'block';
                    }
                });
            });
        </script>
        {{-- Radio With Accordion End --}}
    @endpush
</x-frontend-app-layout>

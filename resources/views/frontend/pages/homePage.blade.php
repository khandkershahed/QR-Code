<x-frontend-app-layout :title="'GoFlixza || Your Hub for QR, Bar Codes, NFC V.Cards'">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"
        integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        .product-slider-card .slick-slide {
            margin-top: 25px;
            margin: 20px 10px;
            padding: 20px;
        }

        .slick-center {
            padding: 20px;
            padding-bottom: 40px !important;
        }

        .product-slider-card {
            margin: 0 -10px;
            position: relative;
        }

        .slick-prev,
        .slick-next {
            position: absolute;
            top: 50%;
            z-index: 1000;
            background: #6610f2;
            color: #fff;
            border-radius: 50%;
            width: 40px;
            height: 40px;
            display: flex;
            justify-content: center;
            align-items: center;
            transform: translateY(-50%);
        }

        .slick-prev {
            left: 50px;
        }

        .slick-next {
            right: 50px;
        }

        .slick-prev:hover,
        .slick-next:hover {
            background: #555;
        }

        .slick-center {
            transform: scale(1.2);
            transition: transform 0.3s ease;
            margin: 0 -10px;
        }

        .package-details {
            line-height: 1.3;
            font-family: poppins, sans-serif;
        }

        .slick-center .package-details {
            line-height: 1.3;
            font-family: poppins, sans-serif;
            font-size: 14px;
        }

        .product-slider-card .card img {
            height: 250px;
            object-fit: cover;
            width: 100%;
        }

        /* For Radio Button */
        /* Hide the default radio button */
        input[type="radio"] {
            display: none;
        }

        /* Style for image radio buttons */
        .radio-label {
            cursor: pointer;
            display: inline-block;
            margin-right: 10px;
            border: 2px solid transparent;
        }

        .radio-label img {
            width: 30px;
            height: 30px;
            border-radius: 100%;
            object-fit: cover;
        }

        input[type="radio"]:checked+label img {
            border: 3px solid #dc3545;
        }

        .image-container {
            display: none;
            margin-top: 10px;
        }

        .image-container img {
            width: 100%;
            max-width: 300px;
            border-radius: 8px;
        }

        /* For Radio Button */
    </style>
    <section id="about" class="hero-area-nine pt-165 rpt-150 pb-110 rpb-80 rel z-1">
        <div class="container">
            <div class="row gap-70 align-items-center">
                <div class="col-lg-6">
                    <div class="hero-content style-nine mb-50 rmb-55" data-aos="fade-up" data-aos-duration="1500"
                        data-aos-offset="50">
                        <h1 data-aos="fade-up" data-aos-delay="50" data-aos-duration="1500" data-aos-offset="50">
                            Instantly Create QR Codes, VCards, NFC & Barcodes!
                        </h1>
                        <p>
                            From Real World Encounters to Digital Connections: Embracing
                            URL with QR Codes and Digital Business Cards
                        </p>
                        {{-- <form class="mt-40 newsletter-form" action="{{route('newsletter.store')}}" method="POST">
                            @csrf
                            <label for="email-address"><i class="fas fa-envelope"></i></label>
                            <input id="email-address" type="email" name="email" placeholder="Email Address" required/>
                            <button type="submit">
                                <b>Subscribe Now <i class="fas fa-arrow-right"></i></b>
                            </button>
                        </form> --}}
                        <div>
                            <a href="{{ route('register') }}" class="theme-btn rounded-0 style-two">Start Trial</a>
                            <a href="{{ route('pricing') }}" class="theme-btn rounded-0 style-one">View Pricing</a>
                        </div>
                        <ul class="icon-list pt-15">
                            <li>
                                <i class="fa-solid fa-circle-check"></i> Free 14-day trial
                            </li>
                            <li>
                                <i class="fas fa-circle-check"></i> No credit card
                                required
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100" data-aos-duration="1500"
                    data-aos-offset="50">
                    <div class="d-flex">
                        <a href="{{ route('pricing') }}">
                            <div class="hero-seven-image">
                                <img src="{{ asset('frontend') }}/assets/images/shapes/nfc.png" alt="Hero" />
                            </div>
                        </a>
                        <a href="{{ route('pricing') }}">
                            <div class="hero-seven-image">
                                <img src="{{ asset('frontend') }}/assets/images/shapes/qr.png" alt="Hero" />
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="hero-nine-shapes">
            <div class="shape one">
                <img src="{{ asset('frontend') }}/assets/images/shapes/hero-nine.png" alt="Shape" />
            </div>
            <div class="shape two">
                <img src="{{ asset('frontend') }}/assets/images/shapes/hero-nine.png" alt="Shape" />
            </div>
        </div>
    </section>
    <!-- Hero area End -->
    <section style="position: relative; z-index: 555;">
        <div class="container pb-50">
            <div class="row justify-content-center">
                <div class="col-xl-6 col-lg-9 col-md-11">
                    <div class="text-center section-title mb-45 aos-init aos-animate" data-aos="fade-up"
                        data-aos-duration="1500" data-aos-offset="50">
                        <h2>Explore Our Pricing Package <br> and choose your plan</h2>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <!-- Individual Plan -->
                <div class="col-xl-4 col-md-6 col-sm-10 aos-init aos-animate" data-aos="fade-up"
                    data-aos-duration="1500" data-aos-offset="50">
                    <div class="pricing-item style-five">
                        <div class="title-price">
                            <h2 class="mb-0">Individual Plan</h2>
                            <p>Ideal for solopreneurs.</p>
                        </div>
                        <div class="image-selection">
                            <div>
                                <!-- Image Containers for Individual Plan -->
                                <div id="individualImage1" class="image-container">
                                    <img src="https://cdn.prod.website-files.com/6548c25e22a83d74eaba935f/66548de51d1febf4f19ea9e3_Standard_Silver.webp"
                                        alt="Silver Image" />
                                </div>
                                <div id="individualImage2" class="image-container">
                                    <img src="https://cdn.prod.website-files.com/6548c25e22a83d74eaba935f/66548de5b8c7f03d3c0cc684_Standard_Gold.webp"
                                        alt="Gold Image" />
                                </div>
                                <div id="individualImage3" class="image-container">
                                    <img src="https://cdn.prod.website-files.com/6548c25e22a83d74eaba935f/66548de516665f6402cd5c86_Standard_CeramicWhite.webp"
                                        alt="Ceramic White Image" />
                                </div>
                            </div>

                            <!-- Radio Buttons for Individual Plan (with unique 'name' attribute) -->
                            <div class="pt-3 mx-auto d-flex justify-content-center">
                                <input type="radio" name="individualPlanImageOption" id="individualOption1"
                                    onclick="showImage('individualImage1', 'individual')" checked />
                                <label for="individualOption1" class="radio-label">
                                    <img src="https://cdn.prod.website-files.com/6548c25e22a83d74eaba935f/66548de51d1febf4f19ea9e3_Standard_Silver.webp"
                                        alt="Option 1" />
                                </label>

                                <input type="radio" name="individualPlanImageOption" id="individualOption2"
                                    onclick="showImage('individualImage2', 'individual')" />
                                <label for="individualOption2" class="radio-label">
                                    <img src="https://cdn.prod.website-files.com/6548c25e22a83d74eaba935f/66548de5b8c7f03d3c0cc684_Standard_Gold.webp"
                                        alt="Option 2" />
                                </label>

                                <input type="radio" name="individualPlanImageOption" id="individualOption3"
                                    onclick="showImage('individualImage3', 'individual')" />
                                <label for="individualOption3" class="radio-label">
                                    <img src="https://cdn.prod.website-files.com/6548c25e22a83d74eaba935f/66548de516665f6402cd5c86_Standard_CeramicWhite.webp"
                                        alt="Option 3" />
                                </label>
                            </div>
                        </div>

                        <!-- Monthly/Yearly Pricing Toggle -->
                        <div>
                            <div class="py-3 pb-1 text-center">
                                <h2 class="mb-0" id="price-monthly-1">
                                    <span class="text-success price-monthly">$99</span>/monthly
                                </h2>
                                <h2 class="mb-0" id="price-yearly-1" style="display:none;">
                                    <span class="text-success price-yearly">$199</span>/year
                                </h2>
                            </div>
                            <div class="d-flex align-items-center justify-content-center">
                                <span class="pe-2">Monthly</span>
                                <div class="pt-3 pricing-switch">
                                    <label class="switch">
                                        <input type="checkbox" id="togglePricing-1">
                                        <span class="slider"></span>
                                    </label>
                                </div>
                                <span class="ps-2">Yearly</span>
                            </div>
                        </div>

                        <!-- Features List -->
                        <ul class="mt-2">
                            <li><i class="fa-solid fa-user pe-2 text-muted"></i> 1 User</li>
                            <li><i class="fa-solid fa-id-card pe-2 text-muted"></i> Standard Card Included</li>
                            <li><i class="fa-solid fa-check pe-2 text-muted"></i> Customizable Profile</li>
                            <li><i class="fa-solid fa-check pe-2 text-muted"></i> Contact Management</li>
                            <li><i class="fa-solid fa-check pe-2 text-muted"></i> Apple / Google Wallet Pass</li>
                            <li><i class="fa-solid fa-check pe-2 text-muted"></i> Advanced Analytics</li>
                        </ul>
                        <a href="#" class="mt-4 theme-btn style-two w-100">Choose Package <i
                                class="fas fa-arrow-right"></i></a>
                        <div class="text-center footer-text">See all features <i class="fas fa-arrow-right"></i></div>
                    </div>
                </div>

                <!-- Team Plan -->
                <div class="col-xl-4 col-md-6 col-sm-10 aos-init aos-animate" data-aos="fade-up"
                    data-aos-duration="1500" data-aos-offset="50">
                    <div class="pricing-item team-plan">
                        <div class="text-center title-price">
                            <h2 class="mb-0">Team Plan</h2>
                            <p>Perfect for teams of 3-10.</p>
                        </div>
                        <div class="image-selection">
                            <div>
                                <!-- Image Containers for Team Plan -->
                                <div id="teamImage1" class="image-container">
                                    <img src="https://cdn.prod.website-files.com/6548c25e22a83d74eaba935f/657abc87badba336d2ba99d6_card%20image%203a-p-500.webp"
                                        alt="Silver Image With logo" />
                                </div>
                                <div id="teamImage2" class="image-container">
                                    <img src="https://cdn.prod.website-files.com/6548c25e22a83d74eaba935f/657abc87a5ef8a71e4a4b71f_card%20image%201a-p-500.webp"
                                        alt="Gold Image With logo" />
                                </div>
                                <div id="teamImage3" class="image-container">
                                    <img src="https://cdn.prod.website-files.com/6548c25e22a83d74eaba935f/657abc87e4e392a8e489a3b4_card%20image%204a-p-500.webp"
                                        alt="Ceramic White Image With logo" />
                                </div>
                            </div>

                            <!-- Radio Buttons for Team Plan (with unique 'name' attribute) -->
                            <div class="pt-3 mx-auto d-flex justify-content-center">
                                <input type="radio" name="teamPlanImageOption" id="teamOption1"
                                    onclick="showImage('teamImage1', 'team')" checked />
                                <label for="teamOption1" class="radio-label">
                                    <img src="https://cdn.prod.website-files.com/6548c25e22a83d74eaba935f/657abc87badba336d2ba99d6_card%20image%203a-p-500.webp"
                                        alt="Option 1" />
                                </label>

                                <input type="radio" name="teamPlanImageOption" id="teamOption2"
                                    onclick="showImage('teamImage2', 'team')" />
                                <label for="teamOption2" class="radio-label">
                                    <img src="https://cdn.prod.website-files.com/6548c25e22a83d74eaba935f/657abc87a5ef8a71e4a4b71f_card%20image%201a-p-500.webp"
                                        alt="Option 2" />
                                </label>

                                <input type="radio" name="teamPlanImageOption" id="teamOption3"
                                    onclick="showImage('teamImage3', 'team')" />
                                <label for="teamOption3" class="radio-label">
                                    <img src="https://cdn.prod.website-files.com/6548c25e22a83d74eaba935f/657abc87e4e392a8e489a3b4_card%20image%204a-p-500.webp"
                                        alt="Option 3" />
                                </label>
                            </div>
                        </div>

                        <!-- Monthly/Yearly Pricing Toggle -->
                        <div>
                            <div class="py-3 pb-1 text-center">
                                <h2 class="mb-0" id="price-monthly-2">
                                    <span class="text-success price-monthly">$199</span>/monthly
                                </h2>
                                <h2 class="mb-0" id="price-yearly-2" style="display:none;">
                                    <span class="text-success price-yearly">$399</span>/year
                                </h2>
                            </div>
                            <div class="d-flex align-items-center justify-content-center">
                                <span class="pe-2">Monthly</span>
                                <div class="pt-3 pricing-switch">
                                    <label class="switch">
                                        <input type="checkbox" id="togglePricing-2">
                                        <span class="slider"></span>
                                    </label>
                                </div>
                                <span class="ps-2">Yearly</span>
                            </div>
                        </div>

                        <!-- Features List -->
                        <ul class="mt-2">
                            <li><i class="fa-solid fa-users pe-2 text-muted"></i> 5 Users</li>
                            <li><i class="fa-solid fa-id-card pe-2 text-muted"></i> Premium Card Included</li>
                            <li><i class="fa-solid fa-check pe-2 text-muted"></i> Customizable Profiles</li>
                            <li><i class="fa-solid fa-check pe-2 text-muted"></i> Contact Management</li>
                            <li><i class="fa-solid fa-check pe-2 text-muted"></i> Apple / Google Wallet Pass</li>
                            <li><i class="fa-solid fa-check pe-2 text-muted"></i> Advanced Analytics</li>
                        </ul>
                        <a href="#" class="mt-4 theme-btn style-two w-100">Choose Package <i
                                class="fas fa-arrow-right"></i></a>
                        <div class="text-center footer-text">See all features <i class="fas fa-arrow-right"></i></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section style="position: relative; z-index: 555;">
        <div class="container pb-50">
            <div class="row align-items-center justify-content-center">
                <div class="col-lg-12">
                    <div class="pb-50">
                        <h3 class="text-center">Elite Plastic Card Selection</h3>
                    </div>
                </div>
                @foreach ($cardProducts as $cardProduct)
                    @if (str_contains(strtolower($cardProduct->name), 'plastic'))
                        <div class="col-lg-3">
                            <div class="">
                                <div class="">
                                    <a href="{{ route('card.details', $cardProduct->slug) }}">
                                        <div class="p-0 border-0 shadow-sm card bg-light">
                                            <div class="p-0 border-0 card-header">
                                                <div class="d-flex justify-content-center">
                                                    <img src="{{ asset('storage/' . $cardProduct->thumbnail_image) }}"
                                                        alt="{{ $cardProduct->name }}"
                                                        onerror="this.onerror=null;this.src='{{ asset('frontend/newimage/blognoimage.webp') }}';">
                                                </div>
                                                <div class="p-3">
                                                    <div>
                                                        <h6 class="mb-0">{{ $cardProduct->name }}</h6>
                                                    </div>
                                                    <div class="d-flex justify-content-between align-items-center">
                                                        <h6 class="pt-3 mb-0 text-danger">
                                                            @if ($cardProduct->currency == 'eur')
                                                                €
                                                            @elseif ($cardProduct->currency == 'gbp')
                                                                £
                                                            @elseif ($cardProduct->currency == 'usd')
                                                                $
                                                            @else
                                                                $
                                                            @endif
                                                            {{ $cardProduct->package_price }}
                                                            {{ $cardProduct->type }}
                                                        </h6>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card-body">
                                                <div class="">
                                                    <div style="height: 60px;"
                                                        class="pt-2 d-flex justify-content-start align-items-center">
                                                        <p class="mb-0 package-details text-start">
                                                            {!! implode(' ', array_slice(explode(' ', strip_tags($cardProduct->short_description)), 0, 15)) !!}...
                                                        </p>
                                                    </div>
                                                    <div class="mt-4">
                                                        <a href="{{ route('card.details', $cardProduct->slug) }}"
                                                            class="theme-btn style-two rounded-0 btn-sm"
                                                            style="width: 100%;">Details</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    @endif
                @endforeach
            </div>
    </section>
    {{-- Service Box --}}
    <section class="numbered-box-area rel rpt-100 z-2">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-7 col-lg-9 col-md-11">
                    <div class="text-center section-title mb-60 aos-init aos-animate" data-aos="fade-up"
                        data-aos-delay="100" data-aos-duration="1500" data-aos-offset="50">
                        <h2>Comprehensive Code & Card Solutions</h2>
                        <p>Easily generate QR codes, barcodes, and NFC cards with our all-in-one solution. Simplify data
                            management and boost efficiency with our versatile tools.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-4 col-md-6 aos-init" data-aos="fade-up" data-aos-duration="1500"
                    data-aos-offset="50">
                    <div class="numbered-box style-three">
                        <div class="content">
                            <h4><a href="">Instant QR Code Generator</a></h4>
                            <p>Quickly create and customize QR codes for all your needs—business cards, websites, and
                                more. Fast, easy, and user-friendly!</p>
                            <a href="{{ route('qrCode') }}" class="theme-btn style-two mt-25">Order Now <i
                                    class="fas fa-arrow-right"></i></a>
                            <img src="{{ asset('frontend/newimage/service1.png') }}" alt="Number Box">
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6 aos-init" data-aos="fade-up" data-aos-delay="100"
                    data-aos-duration="1500" data-aos-offset="50">
                    <div class="numbered-box style-three bg-two">
                        <div class="content">
                            <h4><a href="">NFC & Virtual Card Creator</a></h4>
                            <p>Easily create and share NFC tags and virtual business cards. Perfect for seamless,
                                contactless connections in the digital world.</p>
                            <a href="{{ route('digitalCard') }}" class="theme-btn style-two mt-25">Order Now <i
                                    class="fas fa-arrow-right"></i></a>
                            <img src="{{ asset('frontend/newimage/service2.png') }}" alt="Number Box">
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6 aos-init" data-aos="fade-up" data-aos-delay="200"
                    data-aos-duration="1500" data-aos-offset="50">
                    <div class="numbered-box style-three bg-three">
                        <div class="content">
                            <h4><a href="">Barcode Generator</a></h4>
                            <p>Effortlessly create and customize barcodes for products, inventory, and more. Fast,
                                reliable, and ready for all your needs.</p>
                            <a href="{{ route('barCode') }}" class="theme-btn style-two mt-25">Order Now <i
                                    class="fas fa-arrow-right"></i></a>
                            <img src="{{ asset('frontend/newimage/service3.png') }}" alt="Number Box">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="bg-lines">
            <span></span><span></span>
            <span></span><span></span>
        </div>
    </section>
    {{-- Service Box End --}}
    <section class="pricing-three-area bgp-bottom pt-130 rpt-100 pb-100 rpb-70 rel z-1">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-6 col-lg-9 col-md-11">
                    <div class="text-center section-title mb-45 aos-init aos-animate" data-aos="fade-up"
                        data-aos-duration="1500" data-aos-offset="50">
                        <h2>QR Code, Virtual Card & Barcode <br>
                            Pricing & Plans</h2>
                        <p>Choose a pricing plan that best suits your requirements.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="tap-five-content rmb-55 aos-init aos-animate" data-aos="fade-left"
                        data-aos-duration="1500" data-aos-offset="50">
                        <ul class="mx-auto mb-40 nav advanced-tab style-fours d-flex justify-content-center"
                            role="tablist">
                            <li>
                                <button class="pt-3 text-black nav-link active text-decoration-none"
                                    data-bs-toggle="tab" data-bs-target="#tabFour1">
                                    <span style="position: relative;top: -3px;">
                                        <svg xmlns="http://www.w3.org/2000/svg" version="1.1"
                                            xmlns:xlink="http://www.w3.org/1999/xlink" width="30" height="30"
                                            x="0" y="0" viewBox="0 0 512 512"
                                            style="enable-background:new 0 0 512 512" xml:space="preserve"
                                            class="">
                                            <g>
                                                <path
                                                    d="M30 30h90V0H0v120h30zM392 0v30h90v90h30V0zM482 482h-90v30h120V392h-30zM30 392H0v120h120v-30H30zm0 0"
                                                    fill="#000000" opacity="1" data-original="#000000"
                                                    class=""></path>
                                                <path
                                                    d="M61 60v150h150v-90h30V90h-30V60zm120 120H91V90h90zM451 450V300h-60v-30h-30v30h-90v30h30v30h-30v30h30v60zM331 330h90v90h-90zM151 270h60v-30H61v30h60v30H91v30h30v60H91v30h30v30h150v-30h-30v-30h-30v30h-60v-30h30v-30h-30zm0 0"
                                                    fill="#000000" opacity="1" data-original="#000000"
                                                    class=""></path>
                                                <path d="M121 120h30v30h-30zM361 120h30v30h-30zm0 0" fill="#000000"
                                                    opacity="1" data-original="#000000" class=""></path>
                                                <path
                                                    d="M391 210h60V60H301v150h60v30h30zm-60-30V90h90v90zM451 270v-30h-60v30zM361 360h30v30h-30zM241 330h30v30h-30zM181 360h30v-60h-30zM211 270h30v30h-30zM91 330H61v60h30v-60zM61 420h30v30H61zM241 60h30v30h-30zM241 180h30v-60h-30zM271 240v-30h-30v60h120v-30zm0 0"
                                                    fill="#000000" opacity="1" data-original="#000000"
                                                    class=""></path>
                                            </g>
                                        </svg>
                                    </span>
                                    QR Code
                                </button>
                            </li>
                            <li>
                                <button class="pt-3 text-black nav-link text-decoration-none" data-bs-toggle="tab"
                                    data-bs-target="#tabFour2">
                                    <span style="position: relative;top: -3px;">
                                        <!-- Digital V.Card SVG Icon -->
                                        <svg xmlns="http://www.w3.org/2000/svg" version="1.1"
                                            xmlns:xlink="http://www.w3.org/1999/xlink" width="30px" height="30px"
                                            x="0" y="0" viewBox="0 0 512 512"
                                            style="enable-background:new 0 0 512 512" xml:space="preserve"
                                            class="">
                                            <g>
                                                <rect width="208" height="352" x="72" y="40" fill="#25b1fa"
                                                    rx="20" transform="rotate(-180 176 216)" opacity="1"
                                                    data-original="#25b1fa" class=""></rect>
                                                <path fill="#ffd4cf"
                                                    d="M112 0v72l25.043 60.1a50 50 0 0 1-16.154 59.23L120 192l-48-56v136h-8.577a30 30 0 0 1-29.1-22.724L8 144l32-88V0Z"
                                                    opacity="1" data-original="#ffd4cf"></path>
                                                <rect width="208" height="352" x="232" y="120" fill="#4dccff"
                                                    rx="20" opacity="1" data-original="#4dccff"
                                                    class=""></rect>
                                                <circle cx="336" cy="255.998" r="56.001" fill="#fdbf67"
                                                    opacity="1" data-original="#fdbf67"></circle>
                                                <path fill="#ffd4cf"
                                                    d="M400 512v-72l-25.043-60.1a50 50 0 0 1 16.154-59.23L392 320l48 56V240h8.577a30 30 0 0 1 29.1 22.724L504 368l-32 88v56Z"
                                                    opacity="1" data-original="#ffd4cf"></path>
                                                <path
                                                    d="M272 60v36h16V60a28.032 28.032 0 0 0-28-28H136v16h124a12.013 12.013 0 0 1 12 12ZM80 372v-76H64v76a28.032 28.032 0 0 0 28 28h116v-16H92a12.013 12.013 0 0 1-12-12ZM152 72h48v16h-48zM175.208 232a8.038 8.038 0 0 1-6.935-4l-13.85 8.01a24.005 24.005 0 0 0 41.569 0l-13.85-8.012a8.036 8.036 0 0 1-6.934 4.002Z"
                                                    fill="#000000" opacity="1" data-original="#000000"
                                                    class=""></path>
                                                <path
                                                    d="m145.391 250.665-11.923 10.67a56 56 0 0 0 83.478 0l-11.923-10.67a40 40 0 0 1-59.632 0ZM16.354 144.434l31.165-85.7A8.012 8.012 0 0 0 48 56V0H32v54.591L.481 141.266a8.007 8.007 0 0 0-.242 4.674l10 40 15.522-3.88Z"
                                                    fill="#000000" opacity="1" data-original="#000000"
                                                    class=""></path>
                                                <path
                                                    d="M80 272V157.626l33.926 39.581A8 8 0 0 0 124.8 198.4l.888-.667a57.954 57.954 0 0 0 18.74-68.708L120 70.4V0h-16v72a8.005 8.005 0 0 0 .615 3.077l25.043 60.1a41.965 41.965 0 0 1-8.774 45.559l-42.81-49.945A8 8 0 0 0 64 136v128h-.577a21.969 21.969 0 0 1-21.343-16.665L29.761 198.06l-15.522 3.88 12.319 49.276A37.945 37.945 0 0 0 63.423 280H72a8 8 0 0 0 8-8ZM432 140v76h16v-76a28.032 28.032 0 0 0-28-28h-44v16h44a12.013 12.013 0 0 1 12 12ZM240 452V140a12.013 12.013 0 0 1 12-12h108v-16H252a28.032 28.032 0 0 0-28 28v136.953a72.008 72.008 0 0 1-100.335-2.681l-11.454 11.172A88.112 88.112 0 0 0 224 297.289v18.578a104.066 104.066 0 0 1-121.413-17.421L91.413 309.9A120.087 120.087 0 0 0 224 333.656V452a28.032 28.032 0 0 0 28 28h124v-16H252a12.013 12.013 0 0 1-12-12Z"
                                                    fill="#000000" opacity="1" data-original="#000000"
                                                    class=""></path>
                                                <path
                                                    d="m317.657 242.343-11.314 11.314 24 24A8 8 0 0 0 336 280h.235a7.99 7.99 0 0 0 5.744-2.682l64-72-11.958-10.63-58.364 65.659Z"
                                                    fill="#000000" opacity="1" data-original="#000000"
                                                    class=""></path>
                                                <path
                                                    d="M272 256a64 64 0 0 0 128 0 64.831 64.831 0 0 0-.647-9.132l-15.839 2.264A48.807 48.807 0 0 1 384 256a48 48 0 1 1-48-48 47.562 47.562 0 0 1 20.567 4.615l6.866-14.452A64.025 64.025 0 0 0 272 256ZM312 424h48v16h-48zM464.481 453.266A8.016 8.016 0 0 0 464 456v56h16v-54.591l14.064-38.675-15.037-5.468Z"
                                                    fill="#000000" opacity="1" data-original="#000000"
                                                    class=""></path>
                                                <path
                                                    d="m511.761 366.06-26.319-105.277A37.945 37.945 0 0 0 448.577 232H440a8 8 0 0 0-8 8v114.374l-33.926-39.58A8 8 0 0 0 387.2 313.6l-.886.665a57.952 57.952 0 0 0-18.74 68.708L392 441.6V512h16v-72a8 8 0 0 0-.615-3.077l-25.043-60.1a41.965 41.965 0 0 1 8.775-45.558l42.809 49.944A8 8 0 0 0 448 376V248h.577a21.969 21.969 0 0 1 21.343 16.664l25.726 102.9-10.8 29.7 15.037 5.468 11.637-32a8.007 8.007 0 0 0 .241-4.672Z"
                                                    fill="#000000" opacity="1" data-original="#000000"
                                                    class=""></path>
                                            </g>
                                        </svg>
                                    </span>
                                    Digital V.Card
                                </button>
                            </li>
                            <li>
                                <button class="pt-3 text-black nav-link text-decoration-none" data-bs-toggle="tab"
                                    data-bs-target="#tabFour3">
                                    <span>
                                        <svg xmlns="http://www.w3.org/2000/svg" version="1.1"
                                            xmlns:xlink="http://www.w3.org/1999/xlink" width="30px" height="30px"
                                            x="0" y="0" viewBox="0 0 426.667 426"
                                            style="enable-background:new 0 0 512 512" xml:space="preserve">
                                            <g>
                                                <path
                                                    d="M74.668.332h-64C4.778.332 0 5.109 0 11v64c0 5.89 4.777 10.668 10.668 10.668S21.332 80.891 21.332 75V21.668h53.336c5.89 0 10.664-4.777 10.664-10.668S80.559.332 74.668.332zM74.668 320.332H21.332V267c0-5.89-4.773-10.668-10.664-10.668S0 261.109 0 267v64c0 5.89 4.777 10.668 10.668 10.668h64c5.89 0 10.664-4.777 10.664-10.668s-4.773-10.668-10.664-10.668zM416 .332h-64c-5.89 0-10.668 4.777-10.668 10.668S346.109 21.668 352 21.668h53.332V75c0 5.89 4.777 10.668 10.668 10.668S426.668 80.891 426.668 75V11c0-5.89-4.777-10.668-10.668-10.668zM416 256.332c-5.89 0-10.668 4.777-10.668 10.668v53.332H352c-5.89 0-10.668 4.777-10.668 10.668s4.777 10.668 10.668 10.668h64c5.89 0 10.668-4.777 10.668-10.668v-64c0-5.89-4.777-10.668-10.668-10.668zM74.668 64.332C68.778 64.332 64 69.109 64 75v192c0 5.89 4.777 10.668 10.668 10.668S85.332 272.891 85.332 267V75c0-5.89-4.773-10.668-10.664-10.668zM117.332 64.332h21.336c5.89 0 10.664 4.777 10.664 10.668v192c0 5.89-4.773 10.668-10.664 10.668h-21.336c-5.89 0-10.664-4.777-10.664-10.668V75c0-5.89 4.773-10.668 10.664-10.668zM181.332 64.332c-5.89 0-10.664 4.777-10.664 10.668v192c0 5.89 4.773 10.668 10.664 10.668S192 272.891 192 267V75c0-5.89-4.777-10.668-10.668-10.668zM224 64.332h21.332C251.222 64.332 256 69.109 256 75v192c0 5.89-4.777 10.668-10.668 10.668H224c-5.89 0-10.668-4.777-10.668-10.668V75c0-5.89 4.777-10.668 10.668-10.668zM288 64.332c-5.89 0-10.668 4.777-10.668 10.668v192c0 5.89 4.777 10.668 10.668 10.668s10.668-4.777 10.668-10.668V75c0-5.89-4.777-10.668-10.668-10.668zM330.668 64.332H352c5.89 0 10.668 4.777 10.668 10.668v192c0 5.89-4.777 10.668-10.668 10.668h-21.332c-5.89 0-10.668-4.777-10.668-10.668V75c0-5.89 4.777-10.668 10.668-10.668zm0 0"
                                                    fill="#000000" opacity="1" data-original="#000000"></path>
                                            </g>
                                        </svg>
                                    </span>
                                    Barcode
                                </button>
                            </li>
                        </ul>

                        <div class="tab-content">
                            <!-- QR Code Tab -->
                            <div class="tab-pane fade active show" id="tabFour1">
                                <div class="row justify-content-center">
                                    @if ($qr_plans->isEmpty())
                                        <div class="text-center col-12">
                                            <p>No barcode plans available at the moment. Please check back later.</p>
                                        </div>
                                    @else
                                        @foreach ($qr_plans as $qr_plan)
                                            @php
                                                $imageCounts = [
                                                    'GO Basic' => 1,
                                                    'GO Spark' => 2,
                                                    'GO Pro' => 3,
                                                    'GO Business' => 4,
                                                ];

                                                $imageCount = $imageCounts[$qr_plan->title] ?? 0;
                                            @endphp

                                            <div class="col-xl-3 col-md-6 col-sm-10 aos-init" data-aos="fade-up"
                                                data-aos-duration="1500" data-aos-offset="50">
                                                <div class="pricing-item style-four">
                                                    <div class="icon">
                                                        @for ($i = 1; $i <= $imageCount; $i++)
                                                            <img width="30px"
                                                                src="{{ asset('frontend/newimage/pro.png') }}"
                                                                alt="">
                                                        @endfor
                                                    </div>

                                                    <h4 class="title">{{ $qr_plan->title }}</h4>
                                                    <div class="price d-flex justify-content-center">
                                                        <span
                                                            class="prev">$</span>{{ number_format($qr_plan->price / 12, 2) }}
                                                        {{-- <span class="next">/
                                                            @if ($qr_plan->billing_cycle == 'year')
                                                                year
                                                            @elseif ($qr_plan->billing_cycle == 'month')
                                                                month
                                                            @else
                                                                Trial Period
                                                            @endif
                                                        </span> --}}
                                                        <span class="next ps-3">
                                                            <div class="d-flex flex-column">
                                                                <span><span class="fw-bold">USD</span>/month</span>
                                                                <small class="pt-2 text-info">Billed Yearly</small>
                                                            </div>
                                                        </span>
                                                    </div>
                                                    <hr>
                                                    @php
                                                        $descriptions = is_array($qr_plan->descriptions)
                                                            ? $qr_plan->descriptions
                                                            : json_decode($qr_plan->descriptions);
                                                    @endphp
                                                    @if (!empty($descriptions))
                                                        <ul class="icon-list">
                                                            @foreach ($descriptions as $description)
                                                                <li><i class="fas fa-checkmark"></i>
                                                                    {{ $description }}
                                                                </li>
                                                            @endforeach
                                                        </ul>
                                                    @endif
                                                    <a href="{{ route('user_subscribe.register', $qr_plan->slug) }}"
                                                        class="theme-btn">Order Now</a>
                                                </div>
                                            </div>
                                        @endforeach
                                    @endif
                                </div>
                            </div>

                            <!-- Digital V.Card Tab -->
                            <div class="tab-pane fade" id="tabFour2">
                                <div class="row justify-content-center">
                                    @if ($nfc_plans->isEmpty())
                                        <div class="text-center col-12">
                                            <p>No barcode plans available at the moment. Please check back later.</p>
                                        </div>
                                    @else
                                        @foreach ($nfc_plans as $nfc_plan)
                                            @php
                                                $imageCounts = [
                                                    'Basic Card' => 1,
                                                    'Premium Card' => 2,
                                                    'Enterprise Card' => 3,
                                                ];

                                                $imageCount = $imageCounts[$nfc_plan->title] ?? 0;
                                            @endphp

                                            <div class="col-xl-3 col-md-6 col-sm-10 aos-init" data-aos="fade-up"
                                                data-aos-duration="1500" data-aos-offset="50">
                                                <div class="pricing-item style-four">
                                                    <div class="icon">
                                                        @for ($i = 0; $i <= $imageCount; $i++)
                                                            <img width="30px"
                                                                src="{{ asset('frontend/newimage/pro.png') }}"
                                                                alt="">
                                                        @endfor
                                                    </div>

                                                    <h4 class="title">{{ $nfc_plan->title }}</h4>
                                                    <div class="price d-flex justify-content-center">
                                                        <span
                                                            class="prev">$</span>{{ number_format($nfc_plan->price / 12, 2) }}
                                                        {{-- <span class="next">/
                                                            @if ($nfc_plan->billing_cycle == 'year')
                                                                year
                                                            @elseif ($nfc_plan->billing_cycle == 'month')
                                                                month
                                                            @else
                                                                Trial Period
                                                            @endif
                                                        </span> --}}
                                                        <span class="next ps-3">
                                                            <div class="d-flex flex-column">
                                                                <span><span class="fw-bold">USD</span>/month</span>
                                                                <small class="pt-2 text-info">Billed Yearly</small>
                                                            </div>
                                                        </span>
                                                    </div>
                                                    <hr>
                                                    @php
                                                        $descriptions = is_array($nfc_plan->descriptions)
                                                            ? $nfc_plan->descriptions
                                                            : json_decode($nfc_plan->descriptions);
                                                    @endphp
                                                    @if (!empty($descriptions))
                                                        <ul class="icon-list">
                                                            @foreach ($descriptions as $description)
                                                                <li><i class="fas fa-checkmark"></i>
                                                                    {{ $description }}
                                                                </li>
                                                            @endforeach
                                                        </ul>
                                                    @endif
                                                    <a href="{{ route('user_subscribe.register', $nfc_plan->slug) }}"
                                                        class="theme-btn">Order Now</a>
                                                </div>
                                            </div>
                                        @endforeach
                                    @endif
                                </div>
                            </div>

                            <!-- Barcode Tab -->
                            <div class="tab-pane fade" id="tabFour3">
                                <div class="row justify-content-center">
                                    @if ($barcode_plans->isEmpty())
                                        <div class="text-center col-12">
                                            <p>No barcode plans available at the moment. Please check back later.</p>
                                        </div>
                                    @else
                                        @foreach ($barcode_plans as $barcode_plan)
                                            @php
                                                $imageCounts = [
                                                    'Standard' => 1,
                                                    'Enhanced' => 2,
                                                    'Professional' => 3,
                                                ];

                                                $imageCount = $imageCounts[$barcode_plan->title] ?? 0;
                                            @endphp

                                            <div class="col-xl-3 col-md-6 col-sm-10 aos-init" data-aos="fade-up"
                                                data-aos-duration="1500" data-aos-offset="50">
                                                <div class="pricing-item style-four">
                                                    <div class="icon">
                                                        @for ($i = 0; $i <= $imageCount; $i++)
                                                            <img width="30px"
                                                                src="{{ asset('frontend/newimage/pro.png') }}"
                                                                alt="">
                                                        @endfor
                                                    </div>

                                                    <h4 class="title">{{ $barcode_plan->title }}</h4>
                                                    <div class="price">
                                                        <span
                                                            class="prev">$</span>{{ number_format($barcode_plan->price / 12, 2) }}
                                                        per month
                                                        {{-- <span class="next">/
                                                            @if ($barcode_plan->billing_cycle == 'year')
                                                                year
                                                            @elseif ($barcode_plan->billing_cycle == 'month')
                                                                month
                                                            @else
                                                                Trial Period
                                                            @endif
                                                        </span> --}}
                                                        <span class="next ps-3">
                                                            <div class="d-flex flex-column">
                                                                <span><span class="fw-bold">USD</span>/month</span>
                                                                <small class="pt-2 text-info">Billed Yearly</small>
                                                            </div>
                                                        </span>
                                                    </div>
                                                    <hr>
                                                    @php
                                                        $descriptions = is_array($barcode_plan->descriptions)
                                                            ? $barcode_plan->descriptions
                                                            : json_decode($barcode_plan->descriptions);
                                                    @endphp
                                                    @if (!empty($descriptions))
                                                        <ul class="icon-list">
                                                            @foreach ($descriptions as $description)
                                                                <li><i class="fas fa-checkmark"></i>
                                                                    {{ $description }}
                                                                </li>
                                                            @endforeach
                                                        </ul>
                                                    @endif
                                                    <a href="{{ route('user_subscribe.register', $barcode_plan->slug) }}"
                                                        class="theme-btn">Order Now</a>
                                                </div>
                                            </div>
                                        @endforeach
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Client Logo Area Start -->
    <section class="client-logo-area pb-90 rpb-60 rel z-2">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-8 col-lg-9 col-md-11">
                    <div class="text-center section-title mb-60" data-aos="fade-up" data-aos-duration="1500"
                        data-aos-offset="50">
                        <span class="mb-10 subtitle-three">Meet Our Global Clients</span>
                        <h2>We’ve 1253+ Global Clients & lot’s of Project Complete</h2>
                    </div>
                </div>
            </div>
            <div
                class="row align-items-center justify-content-center row-cols-xl-5 row-cols-lg-4 row-cols-md-3 row-cols-2">
                <div class="col">
                    <div class="client-logo-item style-four py-45 rpy-25" data-aos="fade-up" data-aos-duration="1500"
                        data-aos-offset="50">
                        <a href="https://shahnawazgroup.us/">
                            <img src="{{ asset('frontend/newimage/clientLogos/nawazgroup.us.webp') }}"
                                alt="Client Logo" /></a>
                    </div>
                </div>
                <div class="col">
                    <div class="client-logo-item style-four py-65 rpy-25" data-aos="fade-up" data-aos-delay="50"
                        data-aos-duration="1500" data-aos-offset="50">
                        <a href="https://ajkal.us/"><img
                                src="{{ asset('frontend/newimage/clientLogos/ajkalus.webp') }}"
                                alt="Client Logo" /></a>
                    </div>
                </div>
                <div class="col">
                    <div class="client-logo-item style-four py-45 rpy-25" data-aos="fade-up" data-aos-delay="100"
                        data-aos-duration="1500" data-aos-offset="50">
                        <a href="https://www.era-consulting.eu/en/"><img
                                src="{{ asset('frontend/newimage/clientLogos/eracounsulting.webp') }}"
                                alt="Client Logo" /></a>
                    </div>
                </div>
                <div class="col">
                    <div class="client-logo-item style-four py-65 rpy-25" data-aos="fade-up" data-aos-delay="150"
                        data-aos-duration="1500" data-aos-offset="50">
                        <a href="https://www.jbaconsulting.com/"><img
                                src="{{ asset('frontend/newimage/clientLogos/jba.webp') }}" alt="Client Logo" /></a>
                    </div>
                </div>
                <div class="col">
                    <div class="client-logo-item style-four py-45 rpy-25" data-aos="fade-up" data-aos-delay="200"
                        data-aos-duration="1500" data-aos-offset="50">
                        <a href="https://careeracademy.com/"><img
                                src="{{ asset('frontend/newimage/clientLogos/careeracademyny.webp') }}"
                                alt="Client Logo" /></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Client Logo Area End -->

    <!-- About Area Start -->
    <section class="pb-1 client-logo-area pt-60 rpt-50 rpb-50 bgc-navyblue">
        <div class="container">
            <div class="text-center text-white row justify-content-center section-title mb-60 aos-init aos-animate"
                data-aos="fade-up" data-aos-duration="1500" data-aos-offset="50">
                <div class="col-lg-10">
                    <h4>Unlock the Best Value for Your Investment</h4>
                    <p>Explore our flexible pricing plans tailored to fit your needs. Whether you're looking for basic
                        features or advanced options, our pricing is designed to provide maximum value and flexibility.
                        Click below to find the perfect plan for you and start optimizing your operations today!</p>
                    <a href="{{ route('contact') }}" class="theme-btn style-two mt-25">Order Now <i
                            class="fas fa-arrow-right"></i></a>
                </div>

            </div>
        </div>
    </section>
    <!-- About Area End -->
    {{-- All Cards --}}
    <section class="artificial-intelligence-area rel pt-50 rpt-20 pb-50 rpb-100 z-2">
        <div class="px-0 container-fluid">
            <div class="row pb-30 rpb-65 gap-100 align-items-center">
                <div class="col-lg-12 order-lg-2">
                    <div class="ai-image aos-init aos-animate pb-50" data-aos="fade-left" data-aos-duration="1500"
                        data-aos-offset="50">
                        <div class="text-center">
                            <h3>All Social Platform In A Card.</h3>
                            <p class="mt-3">Connect with all your favorite platforms in one place. Share, engage, and
                                stay updated effortlessly.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 order-lg-2">
                    <div class="ai-image aos-init aos-animate" data-aos="fade-left" data-aos-duration="1500"
                        data-aos-offset="50">
                        <div class="px-0 product-slider-card row">
                            @foreach ($cardProducts as $cardProduct)
                                <div class="">
                                    <a href="{{ route('card.details', $cardProduct->slug) }}">
                                        <div class="p-0 border-0 shadow-sm card bg-light">
                                            <div class="p-0 border-0 card-header">
                                                <div class="d-flex justify-content-center">
                                                    <img src="{{ asset('storage/' . $cardProduct->thumbnail_image) }}"
                                                        alt="{{ $cardProduct->name }}"
                                                        onerror="this.onerror=null;this.src='{{ asset('frontend/newimage/blognoimage.webp') }}';">
                                                    {{-- <img class="img-fluid" src="{{ asset('') }}"
                                                    alt="Product 1"> --}}
                                                </div>
                                                <div class="p-3">
                                                    <div>
                                                        <h6 class="mb-0">{{ $cardProduct->name }}</h6>
                                                        {{-- <h6 class="mb-0 text-mute">
                                                        <small>Metal,Plastic,Silver Card</small>
                                                    </h6> --}}
                                                    </div>
                                                    <div class="d-flex justify-content-between align-items-center">
                                                        <h6 class="pt-3 mb-0 text-danger">
                                                            @if ($cardProduct->currency == 'eur')
                                                                €
                                                            @elseif ($cardProduct->currency == 'gbp')
                                                                £
                                                            @elseif ($cardProduct->currency == 'usd')
                                                                $
                                                            @else
                                                                $
                                                            @endif
                                                            {{ $cardProduct->package_price }}
                                                            {{ $cardProduct->type }}
                                                        </h6>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card-body">
                                                <div class="">
                                                    <div style="height: 60px;"
                                                        class="pt-2 d-flex justify-content-start align-items-center">
                                                        <p class="mb-0 package-details text-start">
                                                            {!! implode(' ', array_slice(explode(' ', strip_tags($cardProduct->short_description)), 0, 15)) !!}...
                                                        </p>
                                                    </div>
                                                    <div class="mt-4">
                                                        <a href="{{ route('card.details', $cardProduct->slug) }}"
                                                            class="theme-btn style-two rounded-0 btn-sm"
                                                            style="width: 100%;">Details</a>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </a>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- All Cards End --}}
    {{--  --}}
    <section class="artificial-intelligence-area rel pt-50 rpt-20 pb-130 rpb-100 z-2">
        <div class="container container-1070">
            <div class="row pb-30 rpb-65 gap-100 align-items-center">
                <div class="col-lg-6 order-lg-2">
                    <div class="ai-image aos-init aos-animate" data-aos="fade-left" data-aos-duration="1500"
                        data-aos-offset="50">
                        <img src="{{ asset('frontend/newimage/dynamic-qrcode.webp') }}" alt="Artificial">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="mb-40 ai-content rmb-0 aos-init aos-animate" data-aos="fade-right"
                        data-aos-duration="1500" data-aos-offset="50">
                        <span class="subtitle">Effortless Updates and Real-Time Adaptability</span>
                        <h3>Dynamic QR Code Generator</h3>
                        <p>Easily create and manage dynamic QR codes with our versatile generator. Update your code's
                            content anytime without needing to reprint it. Perfect for businesses, marketing campaigns,
                            and events, our tool ensures seamless connectivity and real-time adaptability. Generate QR
                            codes that grow with your needs, providing an efficient and effective way to connect with
                            your audience.</p>
                        <a href="{{ route('qrCode') }}" class="theme-btn style-two mt-25">Read More <i
                                class="fas fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="row gap-100 align-items-center">
                <div class="col-lg-6">
                    <div class="ai-image rmb-55 aos-init" data-aos="fade-left" data-aos-duration="1500"
                        data-aos-offset="50">
                        <img src="{{ asset('frontend/newimage/bulk-barcode.webp') }}" alt="Artificial">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="ai-content aos-init" data-aos="fade-right" data-aos-duration="1500"
                        data-aos-offset="50">
                        <span class="subtitle">Streamline Your Inventory Management with Ease</span>
                        <h3>Bulk Barcode Generator</h3>
                        <p>Simplify inventory management with our Bulk Barcode Generator. Create and print thousands of
                            barcodes quickly and accurately, tailored to various formats and data inputs. Ideal for
                            warehouses and retail, our tool enhances tracking and boosts efficiency, saving you time and
                            reducing errors.</p>
                        <a href="{{ route('barCode') }}" class="theme-btn style-three mt-25">Read More <i
                                class="fas fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="bg-lines">
            <span></span><span></span>
            <span></span><span></span>
        </div>
    </section>
    <!-- CTA Area End -->
    <section id="faqs" class="faqs-area-seven rpb-85 rel z-1">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-7 col-lg-9 aos-init aos-animate" data-aos="fade-up" data-aos-duration="1500"
                    data-aos-offset="50">
                    <div class="text-center section-title mb-60">
                        <h2>Have Any Question On Mind! Asked Questions</h2>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="accordion aos-init aos-animate" id="accordionOne" data-aos="fade-up"
                        data-aow-delay="100" data-aos-duration="1500" data-aos-offset="50">
                        <div class="accordion-item">
                            <h5 class="accordion-header">
                                <button class="accordion-button collapsed" data-bs-toggle="collapse"
                                    data-bs-target="#collapseOne1">
                                    What types of QR codes can I create with Go QR?
                                </button>
                            </h5>
                            <div id="collapseOne1" class="accordion-collapse collapse"
                                data-bs-parent="#accordionOne">
                                <div class="accordion-body">
                                    <p>
                                        Go QR offers a wide range of QR code types, including
                                        URLs, text, contact information, Wi-Fi credentials, and
                                        more. Simply select your desired type and input your
                                        data to generate a customized QR code.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h5 class="accordion-header">
                                <button class="accordion-button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseOne2">
                                    Can I customize the appearance of my QR codes?
                                </button>
                            </h5>
                            <div id="collapseOne2" class="accordion-collapse collapse show"
                                data-bs-parent="#accordionOne">
                                <div class="accordion-body">
                                    <p>
                                        Yes, absolutely! Go QR allows you to customize the
                                        appearance of your QR codes by choosing colors, adding
                                        logos, and selecting from various design options to
                                        match your brand or personal style.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h5 class="accordion-header">
                                <button class="accordion-button collapsed" data-bs-toggle="collapse"
                                    data-bs-target="#collapseOne3">
                                    How many QR codes can I generate with each pricing plan?
                                </button>
                            </h5>
                            <div id="collapseOne3" class="accordion-collapse collapse"
                                data-bs-parent="#accordionOne">
                                <div class="accordion-body">
                                    <p>
                                        The number of QR codes you can generate depends on the
                                        pricing plan you choose. Our plans offer different
                                        limits ranging from a few codes for personal use to
                                        unlimited codes for businesses and organizations.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h5 class="accordion-header">
                                <button class="accordion-button collapsed" data-bs-toggle="collapse"
                                    data-bs-target="#collapseOne4">
                                    Is there a limit to the amount of data I can encode in a
                                    QR code?
                                </button>
                            </h5>
                            <div id="collapseOne4" class="accordion-collapse collapse"
                                data-bs-parent="#accordionOne">
                                <div class="accordion-body">
                                    <p>
                                        While QR codes have a finite capacity for data, Go QR
                                        supports encoding a significant amount of information,
                                        including website links, contact details, text, and
                                        more. If you have specific requirements, feel free to
                                        reach out to our support team for assistance.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h5 class="accordion-header">
                                <button class="accordion-button collapsed" data-bs-toggle="collapse"
                                    data-bs-target="#collapseOne5">
                                    Can I track the performance of my QR codes?
                                </button>
                            </h5>
                            <div id="collapseOne5" class="accordion-collapse collapse"
                                data-bs-parent="#accordionOne">
                                <div class="accordion-body">
                                    <p>
                                        Yes, Go QR provides analytics tracking to monitor the
                                        performance of your QR codes. You can track metrics such
                                        as scans, locations, and devices used to access your QR
                                        codes, allowing you to gain valuable insights into user
                                        engagement.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h5 class="accordion-header">
                                <button class="accordion-button collapsed" data-bs-toggle="collapse"
                                    data-bs-target="#collapseOne6">
                                    How do I download my QR codes after creating them?
                                </button>
                            </h5>
                            <div id="collapseOne6" class="accordion-collapse collapse"
                                data-bs-parent="#accordionOne">
                                <div class="accordion-body">
                                    <p>
                                        After customizing your QR code to your liking, simply
                                        click the download button to save it to your device.
                                        Your QR code will be downloaded in high resolution,
                                        ready to be shared, printed, or integrated into your
                                        digital materials.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="faqs-area-seven-shapes">
            <div class="shape one">
                <img src="{{ asset('frontend') }}/assets/images/shapes/faq-one1.png" alt="Shape" />
            </div>
            <div class="shape two">
                <img src="{{ asset('frontend') }}/assets/images/shapes/faq-one2.png" alt="Shape" />
            </div>
            <div class="shape three">
                <img src="{{ asset('frontend') }}/assets/images/shapes/faq-one3.png" alt="Shape" />
            </div>
            <div class="shape four">
                <img src="{{ asset('frontend') }}/assets/images/shapes/faq-one4.png" alt="Shape" />
            </div>
            <div class="shape five">
                <img src="{{ asset('frontend') }}/assets/images/shapes/faq-one5.png" alt="Shape" />
            </div>
            <div class="shape six">
                <img src="{{ asset('frontend') }}/assets/images/shapes/faq-one6.png" alt="Shape" />
            </div>
        </div>
        <div class="bg-lines">
            <span></span><span></span> <span></span><span></span>
        </div>
    </section>
    <section id="blog" class="blog-area-two pt-120 pb-50 rpt-100">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-7 col-lg-9">
                    <div class="text-center section-title mb-55 aos-init aos-animate" data-aos="fade-up"
                        data-aos-duration="1500" data-aos-offset="50">
                        <h2>Get Every Single <br> Updates and Learn Our News &amp; <span>Blog</span></h2>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                @foreach ($blog_posts as $blog_post)
                    <div class="col-xl-4 col-md-6 col-sm-10">
                        <div class="shadow-sm blog-item aos-init aos-animate" data-aos="fade-up"
                            data-aos-duration="1000" data-aos-offset="50">
                            <div class="image">
                                <img src="{{ asset('storage/' . $blog_post->image) }}" alt="Blog"
                                    onerror="this.onerror=null;this.src='{{ asset('frontend/newimage/blognoimage.webp') }}';">
                                <div class="date"><span>{{ $blog_post->created_at->format('M d Y') }}</span></div>
                            </div>
                            <div class="p-3 content">
                                <a href="{{ route('blog.details', $blog_post->slug) }}"
                                    class="category">{{ $blog_post->badge }}</a>
                                <h5><a
                                        href="{{ route('blog.details', $blog_post->slug) }}">{{ $blog_post->title }}</a>
                                </h5>
                                <hr>
                                <p>{{ $blog_post->header }}
                                </p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    @push('scripts')
        <script>
            $(document).ready(function() {
                // Set default selected radio and image for Individual Plan
                $('#individualOption1').prop('checked', true);
                showImage('individualImage1', 'individual');

                // Set default selected radio and image for Team Plan
                $('#teamOption1').prop('checked', true);
                showImage('teamImage1', 'team');

                // Individual Plan Pricing Toggle
                $('#togglePricing-1').change(function() {
                    if ($(this).prop('checked')) {
                        $('#price-monthly-1').hide();
                        $('#price-yearly-1').show();
                    } else {
                        $('#price-monthly-1').show();
                        $('#price-yearly-1').hide();
                    }
                });

                // Team Plan Pricing Toggle
                $('#togglePricing-2').change(function() {
                    if ($(this).prop('checked')) {
                        $('#price-monthly-2').hide();
                        $('#price-yearly-2').show();
                    } else {
                        $('#price-monthly-2').show();
                        $('#price-yearly-2').hide();
                    }
                });
            });

            // Function to show selected image for both Individual and Team Plan
            function showImage(imageId, plan) {
                // Hide all images for the respective plan
                $("#" + plan + "Image1, #" + plan + "Image2, #" + plan + "Image3").hide();

                // Show the selected image for the respective plan
                $("#" + imageId).show();
            }
        </script>

        {{-- For Team --}}
        {{-- For Team --}}
        <script>
            $(document).ready(function() {
                const $slider = $('.product-slider-card');
                const slideCount = $slider.children().length;

                // Define dynamic settings
                const centerMode = slideCount >= 5;
                const centerPadding = slideCount >= 5 ? '50px' : '0px';
                const slidesToShow = slideCount >= 5 ? 5 : slideCount;

                // Wrap in container if fewer than 5 slides
                if (slideCount < 5) {
                    $slider.wrap('<div class="container-fluid"></div>');
                }
                if (slideCount < 4) {
                    $slider.wrap('<div class="container"></div>');
                }

                // Initialize Slick slider
                $slider.slick({
                    centerMode: centerMode, // Enable or disable center mode
                    centerPadding: centerPadding, // Dynamic padding
                    slidesToShow: slidesToShow, // Dynamic slides to show
                    autoplay: true,
                    autoplaySpeed: 2000,
                    arrows: true, // Enables navigation arrows
                    prevArrow: '<button type="button" class="slick-prev">←</button>',
                    nextArrow: '<button type="button" class="slick-next">→</button>',
                    responsive: [{
                            breakpoint: 768,
                            settings: {
                                slidesToShow: slidesToShow < 5 ? slidesToShow :
                                1, // Adapt for responsive views
                                centerMode: false, // Disable center mode on small screens
                                centerPadding: '30px'
                            }
                        },
                        {
                            breakpoint: 480,
                            settings: {
                                slidesToShow: slidesToShow < 5 ? slidesToShow :
                                1, // Adapt for responsive views
                                centerMode: false, // Disable center mode on small screens
                                centerPadding: '20px'
                            }
                        }
                    ]
                });
            });
        </script>
    @endpush
</x-frontend-app-layout>

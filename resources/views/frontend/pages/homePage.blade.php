<x-frontend-app-layout :title="'GoFlixza || Your Hub for QR, Bar Codes, NFC V.Cards'">
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
                        {{-- <form class="newsletter-form mt-40" action="{{route('newsletter.store')}}" method="POST">
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
                                <i class="fas fa-circle-check"></i> Free 14-day trial
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
    {{-- Service Box --}}
    <section class="numbered-box-area rel rpt-100 rel z-2">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-7 col-lg-9 col-md-11">
                    <div class="section-title text-center mb-60 aos-init aos-animate" data-aos="fade-up"
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
                <div class="col-xl-4 col-md-6 aos-init" data-aos="fade-up" data-aos-delay="100" data-aos-duration="1500"
                    data-aos-offset="50">
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
                <div class="col-xl-4 col-md-6 aos-init" data-aos="fade-up" data-aos-delay="200" data-aos-duration="1500"
                    data-aos-offset="50">
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
                    <div class="section-title text-center mb-45 aos-init aos-animate" data-aos="fade-up"
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
                        <ul class="nav advanced-tab style-fours mb-40 d-flex justify-content-center mx-auto"
                            role="tablist">
                            <li class="">
                                <button class="nav-link active text-decoration-none pt-3 text-black"
                                    data-bs-toggle="tab" data-bs-target="#tabFour1">
                                    <span style="position: relative;top: -3px;">
                                        <svg xmlns="http://www.w3.org/2000/svg" version="1.1"
                                            xmlns:xlink="http://www.w3.org/1999/xlink" width="20" height="20"
                                            x="0" y="0" viewBox="0 0 512 512"
                                            style="enable-background:new 0 0 512 512" xml:space="preserve"
                                            class="">
                                            <g>
                                                <path
                                                    d="M30 30h90V0H0v120h30zM392 0v30h90v90h30V0zM482 482h-90v30h120V392h-30zM30 392H0v120h120v-30H30zm0 0"
                                                    fill="#fb2905" opacity="1" data-original="#000000"
                                                    class="">
                                                </path>
                                                <path
                                                    d="M61 60v150h150v-90h30V90h-30V60zm120 120H91V90h90zM451 450V300h-60v-30h-30v30h-90v30h30v30h-30v30h30v60zM331 330h90v90h-90zM151 270h60v-30H61v30h60v30H91v30h30v60H91v30h30v30h150v-30h-30v-30h-30v30h-60v-30h30v-30h-30zm0 0"
                                                    fill="#fb2905" opacity="1" data-original="#000000"
                                                    class="">
                                                </path>
                                                <path d="M121 120h30v30h-30zM361 120h30v30h-30zm0 0" fill="#000000"
                                                    opacity="1" data-original="#000000" class=""></path>
                                                <path
                                                    d="M391 210h60V60H301v150h60v30h30zm-60-30V90h90v90zM451 270v-30h-60v30zM361 360h30v30h-30zM241 330h30v30h-30zM181 360h30v-60h-30zM211 270h30v30h-30zM91 330H61v60h30v-60zM61 420h30v30H61zM241 60h30v30h-30zM241 180h30v-60h-30zM271 240v-30h-30v60h120v-30zm0 0"
                                                    fill="#fb2905" opacity="1" data-original="#000000"
                                                    class="">
                                                </path>
                                            </g>
                                        </svg>
                                    </span>
                                    QR Code
                                </button>
                            </li>
                            <li class="">
                                <button class="nav-link text-decoration-none pt-3 text-black" data-bs-toggle="tab"
                                    data-bs-target="#tabFour2">
                                    <span style="position: relative;top: -3px;">
                                        <svg xmlns="http://www.w3.org/2000/svg" version="1.1"
                                            xmlns:xlink="http://www.w3.org/1999/xlink" width="20" height="20"
                                            x="0" y="0" viewBox="0 0 512 512"
                                            style="enable-background:new 0 0 512 512" xml:space="preserve"
                                            class="">
                                            <g>
                                                <linearGradient id="a" x1="410.584" x2="17.316"
                                                    y1="451.093" y2="57.826" gradientUnits="userSpaceOnUse">
                                                    <stop offset="0" stop-color="#eae936"></stop>
                                                    <stop offset="1" stop-color="#43b871"></stop>
                                                </linearGradient>
                                                <path fill="url(#a)" fill-rule="evenodd"
                                                    d="M317.901 233.67h96.116c4.41 0 8.004-3.58 8.004-7.999s-3.594-7.999-8.004-7.999h-96.116c-4.415 0-8.004 3.579-8.004 7.999 0 4.419 3.589 7.999 8.004 7.999zm-36.472 89.551h-138.04c-9.291 0-16.852 7.551-16.852 16.838v25.28c0 9.291 7.561 16.852 16.852 16.852h138.04c9.291 0 16.852-7.56 16.852-16.852v-25.28c-.001-9.287-7.561-16.838-16.852-16.838zm151.92-235.119H371.79V35.943c0-19.266-16.663-34.944-37.132-34.944h-244.5c-20.47 0-37.128 15.678-37.128 34.944v440.118C53.03 495.318 69.688 511 90.158 511h244.5c20.469 0 37.132-15.682 37.132-34.939V301.61h61.559c14.116 0 25.62-11.489 25.62-25.62V113.722c0-14.126-11.503-25.62-25.62-25.62zM191.161 30.236h42.5c4.419 0 7.999 3.58 7.999 7.999s-3.58 7.999-7.999 7.999h-42.5c-4.414 0-8.003-3.58-8.003-7.999-.001-4.419 3.588-7.999 8.003-7.999zm37.84 433.365h-33.18a6.209 6.209 0 0 1-6.212-6.202 6.207 6.207 0 0 1 6.212-6.207h33.18a6.206 6.206 0 0 1 6.207 6.207 6.208 6.208 0 0 1-6.207 6.202zm126.787-59.809H69.029V75.476h286.759v12.626H152.165c-14.125 0-25.629 11.494-25.629 25.62v162.269c0 14.13 11.504 25.62 25.629 25.62h203.623zm87.178-127.801c0 5.306-4.32 9.622-9.617 9.622H152.165c-5.306 0-9.626-4.316-9.626-9.622V165.73h300.427zm0-153.44H142.539v-8.829c0-5.306 4.32-9.622 9.626-9.622h281.184c5.297 0 9.617 4.315 9.617 9.622zm-197.099 69.855h-74.359c-8.678 0-15.748 7.065-15.748 15.748v35.029c0 8.688 7.07 15.748 15.748 15.748h74.359c8.683 0 15.753-7.06 15.753-15.748v-35.029c0-8.683-7.07-15.748-15.753-15.748zm-58.899 50.527h-15.21v-9.263h15.21zm0-25.261h-15.21v-9.263h15.21zm58.653 25.261h-15.21v-9.263h15.21zm0-25.261h-15.21v-9.263h15.21zm168.396 25.261h-96.116c-4.415 0-8.004 3.584-8.004 7.999 0 4.419 3.589 7.999 8.004 7.999h96.116c4.41 0 8.004-3.58 8.004-7.999 0-4.414-3.594-7.999-8.004-7.999z"
                                                    clip-rule="evenodd" opacity="1" data-original="url(#a)"
                                                    class=""></path>
                                            </g>
                                        </svg>
                                    </span>
                                    Digital V.Card
                                </button>
                            </li>
                            <li class="">
                                <button class="nav-link text-decoration-none pt-3 text-black" data-bs-toggle="tab"
                                    data-bs-target="#tabFour3">

                                    <span style="">
                                        <svg xmlns="http://www.w3.org/2000/svg" version="1.1"
                                            xmlns:xlink="http://www.w3.org/1999/xlink" width="20" height="20"
                                            x="0" y="0" viewBox="0 0 426.667 426"
                                            style="enable-background:new 0 0 512 512" xml:space="preserve"
                                            class="">
                                            <g>
                                                <path
                                                    d="M74.668.332h-64C4.778.332 0 5.109 0 11v64c0 5.89 4.777 10.668 10.668 10.668S21.332 80.891 21.332 75V21.668h53.336c5.89 0 10.664-4.777 10.664-10.668S80.559.332 74.668.332zM74.668 320.332H21.332V267c0-5.89-4.773-10.668-10.664-10.668S0 261.109 0 267v64c0 5.89 4.777 10.668 10.668 10.668h64c5.89 0 10.664-4.777 10.664-10.668s-4.773-10.668-10.664-10.668zM416 .332h-64c-5.89 0-10.668 4.777-10.668 10.668S346.109 21.668 352 21.668h53.332V75c0 5.89 4.777 10.668 10.668 10.668S426.668 80.891 426.668 75V11c0-5.89-4.777-10.668-10.668-10.668zM416 256.332c-5.89 0-10.668 4.777-10.668 10.668v53.332H352c-5.89 0-10.668 4.777-10.668 10.668s4.777 10.668 10.668 10.668h64c5.89 0 10.668-4.777 10.668-10.668v-64c0-5.89-4.777-10.668-10.668-10.668zM74.668 64.332C68.778 64.332 64 69.109 64 75v192c0 5.89 4.777 10.668 10.668 10.668S85.332 272.891 85.332 267V75c0-5.89-4.773-10.668-10.664-10.668zM117.332 64.332h21.336c5.89 0 10.664 4.777 10.664 10.668v192c0 5.89-4.773 10.668-10.664 10.668h-21.336c-5.89 0-10.664-4.777-10.664-10.668V75c0-5.89 4.773-10.668 10.664-10.668zM181.332 64.332c-5.89 0-10.664 4.777-10.664 10.668v192c0 5.89 4.773 10.668 10.664 10.668S192 272.891 192 267V75c0-5.89-4.777-10.668-10.668-10.668zM224 64.332h21.332C251.222 64.332 256 69.109 256 75v192c0 5.89-4.777 10.668-10.668 10.668H224c-5.89 0-10.668-4.777-10.668-10.668V75c0-5.89 4.777-10.668 10.668-10.668zM288 64.332c-5.89 0-10.668 4.777-10.668 10.668v192c0 5.89 4.777 10.668 10.668 10.668s10.668-4.777 10.668-10.668V75c0-5.89-4.777-10.668-10.668-10.668zM330.668 64.332H352c5.89 0 10.668 4.777 10.668 10.668v192c0 5.89-4.777 10.668-10.668 10.668h-21.332c-5.89 0-10.668-4.777-10.668-10.668V75c0-5.89 4.777-10.668 10.668-10.668zm0 0"
                                                    fill="#000000" opacity="1" data-original="#000000"
                                                    class="">
                                                </path>
                                            </g>
                                        </svg>
                                    </span>
                                    Barcode
                                </button>
                            </li>
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane fade active show" id="tabFour1">
                                <div class="row justify-content-center">
                                    @foreach ($qr_plans as $qr_plan)
                                        <div class="col-xl-3 col-md-6 col-sm-10 aos-init" data-aos="fade-up"
                                            data-aos-duration="1500" data-aos-offset="50">
                                            <div class="pricing-item style-four">
                                                <div class="icon">
                                                    <i class="flaticon-educational-school-hand-drawn-tools"></i>
                                                </div>
                                                <h4 class="title">{{ $qr_plan->title }}</h4>
                                                <div class="price"><span
                                                        class="prev">$</span>{{ $qr_plan->price }}<span
                                                        class="next">/
                                                        @if ($qr_plan->billing_cycle == 'year')
                                                            year
                                                        @elseif ($qr_plan->billing_cycle == 'month')
                                                            month
                                                        @else
                                                            Trial Period
                                                        @endif
                                                    </span></div>
                                                <div class="text">No credit card required</div>
                                                <hr>
                                                @php
                                                    $descriptions = is_array($qr_plan->descriptions)
                                                        ? $qr_plan->descriptions
                                                        : json_decode($qr_plan->descriptions);
                                                @endphp
                                                @if (!empty($descriptions))
                                                    <ul class="icon-list">
                                                        @foreach ($descriptions as $description)
                                                            <li><i class="fas fa-checkmark"></i> {{ $description }}
                                                            </li>
                                                        @endforeach
                                                    </ul>
                                                @endif
                                                <a href="{{ route('user_subscribe.register', $qr_plan->slug) }}"
                                                    class="theme-btn">Order Now</a>
                                            </div> <!-- Missing closing div -->
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                            <div class="tab-pane fade" id="tabFour2">
                                <div class="row justify-content-center">
                                    @foreach ($nfc_plans as $nfc_plan)
                                        <div class="col-xl-4 col-md-6 col-sm-10 aos-init" data-aos="fade-up"
                                            data-aos-duration="1500" data-aos-offset="50">
                                            <div class="pricing-item style-four">
                                                <div class="icon">
                                                    <i class="flaticon-educational-school-hand-drawn-tools"></i>
                                                </div>
                                                <h4 class="title">{{ $nfc_plan->title }}</h4>
                                                <div class="price"><span
                                                        class="prev">$</span>{{ $nfc_plan->price }}<span
                                                        class="next">/
                                                        @if ($nfc_plan->billing_cycle == 'year')
                                                            year
                                                        @elseif ($nfc_plan->billing_cycle == 'month')
                                                            month
                                                        @else
                                                            Trial Period
                                                        @endif
                                                    </span></div>
                                                <div class="text">No credit card required</div>
                                                <hr>
                                                @php
                                                    $descriptions = is_array($nfc_plan->descriptions)
                                                        ? $nfc_plan->descriptions
                                                        : json_decode($nfc_plan->descriptions);
                                                @endphp
                                                @if (!empty($descriptions))
                                                    <ul class="icon-list">
                                                        @foreach ($descriptions as $description)
                                                            <li><i class="fas fa-checkmark"></i> {{ $description }}
                                                            </li>
                                                        @endforeach
                                                    </ul>
                                                @endif
                                                <a href="{{ route('user_subscribe.register', $nfc_plan->slug) }}"
                                                    class="theme-btn">Order Now</a>
                                            </div> <!-- Missing closing div -->
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                            <div class="tab-pane fade" id="tabFour3">
                                <div class="row justify-content-center">
                                    @foreach ($barcode_plans as $barcode_plan)
                                        <div class="col-xl-4 col-md-6 col-sm-10 aos-init" data-aos="fade-up"
                                            data-aos-duration="1500" data-aos-offset="50">
                                            <div class="pricing-item style-four">
                                                <div class="icon">
                                                    <i class="flaticon-educational-school-hand-drawn-tools"></i>
                                                </div>
                                                <h4 class="title">{{ $barcode_plan->title }}</h4>
                                                <div class="price"><span
                                                        class="prev">$</span>{{ $barcode_plan->price }}<span
                                                        class="next">/
                                                        @if ($barcode_plan->billing_cycle == 'year')
                                                            year
                                                        @elseif ($barcode_plan->billing_cycle == 'month')
                                                            month
                                                        @else
                                                            Trial Period
                                                        @endif
                                                    </span></div>
                                                <div class="text">No credit card required</div>
                                                <hr>
                                                @php
                                                    $descriptions = is_array($barcode_plan->descriptions)
                                                        ? $barcode_plan->descriptions
                                                        : json_decode($barcode_plan->descriptions);
                                                @endphp
                                                @if (!empty($descriptions))
                                                    <ul class="icon-list">
                                                        @foreach ($descriptions as $description)
                                                            <li><i class="fas fa-checkmark"></i> {{ $description }}
                                                            </li>
                                                        @endforeach
                                                    </ul>
                                                @endif
                                                <a href="{{ route('user_subscribe.register', $barcode_plan->slug) }}"
                                                    class="theme-btn">Order Now</a>
                                            </div> <!-- Missing closing div -->
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Client Logo Area Start -->
    <section class="client-logo-area pt-100 pb-90 rpb-60 rel z-2">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-8 col-lg-9 col-md-11">
                    <div class="section-title text-center mb-60" data-aos="fade-up" data-aos-duration="1500"
                        data-aos-offset="50">
                        <span class="subtitle-three mb-10">Meet Our Global Clients</span>
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
    <section class="client-logo-area pt-60 rpt-50 pb-1 rpb-50 bgc-navyblue">
        <div class="container">
            <div class="row justify-content-center section-title text-center text-white mb-60 aos-init aos-animate"
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
                    <div class="ai-content mb-40 rmb-0 aos-init aos-animate" data-aos="fade-right"
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
    <section id="faqs" class="faqs-area-seven pt-50 rpt-95 pb-115 rpb-85 rel z-1">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-7 col-lg-9 aos-init aos-animate" data-aos="fade-up" data-aos-duration="1500"
                    data-aos-offset="50">
                    <div class="section-title text-center mb-60">
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
    <section id="blog" class="blog-area-two pt-120 rpt-100">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-7 col-lg-9">
                    <div class="section-title text-center mb-55 aos-init aos-animate" data-aos="fade-up"
                        data-aos-duration="1500" data-aos-offset="50">
                        <h2>Get Every Single Updates and Learn Our News &amp; <span>Blog</span></h2>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-xl-4 col-md-6 col-sm-10">
                    <div class="blog-item aos-init aos-animate" data-aos="fade-up" data-aos-duration="1000"
                        data-aos-offset="50">
                        <div class="image">
                            <img src="https://webtendtheme.net/html/2024/akpager/assets/images/blog/blog1.png"
                                alt="Blog">
                            <div class="date"><b>25</b><span>Sep</span></div>
                        </div>
                        <div class="content">
                            <a href="#" class="category">Lead Capture</a>
                            <h5><a href="blog-details.html">Meet Success the Cale Smashing Book By Addy Osmania</a>
                            </h5>
                            <ul class="blog-meta">
                                <li><i class="far fa-user-circle"></i> <a href="#">Roger J. Spaulding</a></li>
                                <li><i class="far fa-comment-lines"></i> <a href="#">Comments(5)</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6 col-sm-10">
                    <div class="blog-item aos-init aos-animate" data-aos="fade-up" data-aos-delay="200"
                        data-aos-duration="1000" data-aos-offset="50">
                        <div class="image">
                            <img src="https://webtendtheme.net/html/2024/akpager/assets/images/blog/blog2.png"
                                alt="Blog">
                            <div class="date"><b>28</b><span>Sep</span></div>
                        </div>
                        <div class="content">
                            <a href="#" class="category">Lead Capture</a>
                            <h5><a href="blog-details.html">Practical Design Tips Guidelines For Beginner Designers</a>
                            </h5>
                            <ul class="blog-meta">
                                <li><i class="far fa-user-circle"></i> <a href="#">Roger J. Spaulding</a></li>
                                <li><i class="far fa-comment-lines"></i> <a href="#">Comments(5)</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6 col-sm-10">
                    <div class="blog-item aos-init aos-animate" data-aos="fade-up" data-aos-delay="400"
                        data-aos-duration="1000" data-aos-offset="50">
                        <div class="image">
                            <img src="https://webtendtheme.net/html/2024/akpager/assets/images/blog/blog3.png"
                                alt="Blog">
                            <div class="date"><b>30</b><span>Sep</span></div>
                        </div>
                        <div class="content">
                            <a href="#" class="category">Lead Capture</a>
                            <h5><a href="blog-details.html">Meet Success the Cale Smashing Book By Addy Osmania</a>
                            </h5>
                            <ul class="blog-meta">
                                <li><i class="far fa-user-circle"></i> <a href="#">Roger J. Spaulding</a></li>
                                <li><i class="far fa-comment-lines"></i> <a href="#">Comments(5)</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-frontend-app-layout>

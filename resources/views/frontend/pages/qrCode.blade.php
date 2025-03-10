<x-frontend-app-layout :title="'QR-Code || GoFlixza - Your Hub for QR, Bar Codes & NFC V.Cards'">
    <section class="page-banner-area overlay py-120 rpy-120 rel z-1 bgs-cover text-center"
        style="background-image: url({{ asset('frontend/newimage/banner.jpg') }});">
        <div class="container">
            <div class="banner-inner pt-70 rpt-60 text-black">
                <h1 class="page-title  aos-init aos-animate" data-aos="fade-up" data-aos-duration="1500"
                    data-aos-offset="50">QR Code</h1>
            </div>
        </div>
    </section>
    <section class="app-stor-area pt-100 pb-100 rpb-150 rel z-1">
        <div class="container mb-30">
            <div class="row justify-content-between align-items-center">
                <div class="col-xl-5 col-lg-6">
                    <div class="about-eight-content rel z-2 my-55 rmb-25 aos-init aos-animate" data-aos="fade-left"
                        data-aos-duration="1500" data-aos-offset="50">
                        <div class="section-title mb-30">
                            <h2>Dynamic QR Code Generator</h2>
                        </div>
                        <p>Unlock the full potential of QR codes with our dynamic generator. Create versatile QR codes
                            for social media sharing, file transfers, images, videos, discounts, restaurant menus,
                            business hours, locations, and more. Customize your QR codes to fit your brand, and download
                            them in high-resolution formats like PDF, EPS, JPEG, and PNG for professional-quality print
                            and digital use. Effortlessly manage and update your QR codes to stay current and engaging.
                        </p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="about-eight-image-part aos-init aos-animate" data-aos="fade-right"
                        data-aos-duration="1500" data-aos-offset="50">
                        <img src="{{ asset('frontend/newimage/qrCodeGenerator.png') }}" alt="About">
                    </div>
                </div>
            </div>
        </div>
        <div class="bg-lines">
            <span></span><span></span>
            <span></span><span></span>
        </div>
    </section>
    <section>
        <div class="container">
            <div class="row pt-50">
                <div class="col-xl-7 col-lg-9 col-md-11 mx-auto ">
                    <div class="section-title text-center mb-60 aos-init aos-animate mb-0" data-aos="fade-up"
                        data-aos-delay="100" data-aos-duration="1500" data-aos-offset="50">
                        <h2 class="text-center">QR Code Pricing Plans</h2>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                @if ($qr_plans->isEmpty())
                    <div class="col-12 text-center">
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

                        <div class="col-xl-3 col-md-6 col-sm-10 aos-init" data-aos="fade-up" data-aos-duration="1500"
                            data-aos-offset="50">
                            <div class="pricing-item style-four">
                                <div class="icon">
                                    @for ($i = 1; $i <= $imageCount; $i++)
                                        <img width="30px" src="{{ asset('frontend/newimage/pro.png') }}"
                                            alt="">
                                    @endfor
                                </div>

                                <h4 class="title">{{ $qr_plan->title }}</h4>
                                <div class="price d-flex justify-content-center">
                                    <span class="prev">$</span>{{ number_format($qr_plan->price / 12, 2) }}
                                    <span class="next ps-3">
                                        <div class="d-flex flex-column text-start">
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
                                            <li><i class="fas fa-checkmark"></i> {{ $description }}
                                            </li>
                                        @endforeach
                                    </ul>
                                @endif
                                <a href="{{ route('user_subscribe.register', $qr_plan->slug) }}" class="theme-btn">Order
                                    Now</a>
                            </div>
                        </div>
                    @endforeach
                @endif
            </div>
        </div>
    </section>
    <section class="feature-image-box-area pt-130 rpt-75 pb-130 rpb-50 rel z-1">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-7 col-lg-9 col-md-11">
                    <div class="section-title text-center mb-55 aos-init aos-animate" data-aos="fade-up"
                        data-aos-duration="1500" data-aos-offset="50">
                        <h2>Standout Features of Our Digital Visiting Cards</h2>
                        <span class="subtitle-one style-two mb-20"><i class="fas fa-rocket-launch"></i> Unlock powerful
                            features with our digital visiting cards—custom templates, real-time updates, and seamless
                            device integration for an unforgettable networking experience.</span>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-xl-4 col-md-6">
                    <div class="feature-image-box aos-init aos-animate" data-aos="fade-up" data-aos-duration="1500"
                        data-aos-offset="50">
                        <div class="image">
                            <img src="{{ asset('frontend/newimage/qrcreate.webp') }}" alt="Feature">
                        </div>
                        <div class="content">
                            <h5><a href="service-details.html">Elegant Designed Templates</a></h5>
                            <p>Choose from a variety of beautifully designed templates to create a digital visiting card
                                that matches your style. Customize every detail, from colors to fonts, ensuring your
                                card perfectly represents your personal or business brand.</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6">
                    <div class="feature-image-box aos-init aos-animate" data-aos="fade-up" data-aos-delay="100"
                        data-aos-duration="1500" data-aos-offset="50">
                        <div class="image">
                            <img src="{{ asset('frontend/newimage/realTimeUpdate.webp') }}" alt="Feature">
                        </div>
                        <div class="content">
                            <h5><a href="service-details.html">Real-Time Updates</a></h5>
                            <p>Keep your digital visiting card dynamic and interactive with real-time updates. Add photo
                                galleries, videos, and contact forms, allowing you to showcase your work and make it
                                easy for others to connect with you instantly.</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6">
                    <div class="feature-image-box aos-init aos-animate" data-aos="fade-up" data-aos-delay="200"
                        data-aos-duration="1500" data-aos-offset="50">
                        <div class="image">
                            <img src="{{ asset('frontend/newimage/NFCCard.webp') }}" alt="Feature">
                        </div>
                        <div class="content">
                            <h5><a href="service-details.html">NFC Cards for Contactless Sharing</a></h5>
                            <p>Upgrade your business card to an NFC-enabled smart card for seamless, contactless
                                sharing. Impress your connections with a modern, tech-savvy way to exchange information
                                instantly with just a tap.</p>
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
    <section class="countries-area rel z-1 pb-70 rpb-40 pt-130">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-5 col-lg-7 col-md-9 col-sm-11">
                    <div class="section-title text-center mb-30 aos-init aos-animate" data-aos="fade-up"
                        data-aos-duration="1500" data-aos-offset="50">
                        <h2>Trusted by Millions in 45+ countries.</h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="marquee-slider-right style-three iconic-slider-right slick-initialized slick-slider">
            <div class="slick-list draggable" style="padding: 0px 50px;">
                <div class="slick-track"
                    style="opacity: 1; width: 45000px; transform: translate3d(-798px, 0px, 0px); transition: transform 8000ms linear 0s;">
                    <div class="marquee-iconic-box slick-slide" data-slick-index="-2" id=""
                        aria-hidden="true" tabindex="-1">
                        <div class="image">
                            <img src="{{ asset('images/Flags/kazakhstan.png') }}"
                                alt="Flag">
                        </div>
                        <div class="content">
                            <h6 class="title">Kazakhstan</h6>
                        </div>
                    </div>
                    <div class="marquee-iconic-box slick-slide" data-slick-index="-1" id=""
                        aria-hidden="true" tabindex="-1">
                        <div class="image">
                            <img src="{{ asset('images/Flags/algeria.png') }}"
                                alt="Flag">
                        </div>
                        <div class="content">
                            <h6 class="title">Algeria</h6>
                        </div>
                    </div>
                    <div class="marquee-iconic-box slick-slide" data-slick-index="0" aria-hidden="true"
                        tabindex="-1">
                        <div class="image">
                            <img src="{{ asset('images/Flags/united-states.png') }}"
                                alt="Flag">
                        </div>
                        <div class="content">
                            <h6 class="title">United States</h6>
                        </div>
                    </div>
                    <div class="marquee-iconic-box slick-slide" data-slick-index="1" aria-hidden="true"
                        tabindex="-1">
                        <div class="image">
                            <img src="{{ asset('images/Flags/south-africa.png') }}"
                                alt="Flag">
                        </div>
                        <div class="content">
                            <h6 class="title">South Africa</h6>
                        </div>
                    </div>
                    <div class="marquee-iconic-box slick-slide" data-slick-index="2" aria-hidden="true"
                        tabindex="-1">
                        <div class="image">
                            <img src="{{ asset('images/Flags/russia.png') }}"
                                alt="Flag">
                        </div>
                        <div class="content">
                            <h6 class="title">Russia</h6>
                        </div>
                    </div>
                    <div class="marquee-iconic-box slick-slide" data-slick-index="3" aria-hidden="true"
                        tabindex="-1">
                        <div class="image">
                            <img src="{{ asset('images/Flags/brazil.png') }}"
                                alt="Flag">
                        </div>
                        <div class="content">
                            <h6 class="title">Brazil</h6>
                        </div>
                    </div>
                    <div class="marquee-iconic-box slick-slide" data-slick-index="4" aria-hidden="true"
                        tabindex="-1">
                        <div class="image">
                            <img src="{{ asset('images/Flags/australia.png') }}"
                                alt="Flag">
                        </div>
                        <div class="content">
                            <h6 class="title">Australia</h6>
                        </div>
                    </div>
                    <div class="marquee-iconic-box slick-slide" data-slick-index="5" aria-hidden="true"
                        tabindex="0">
                        <div class="image">
                            <img src="{{ asset('images/Flags/china.png') }}"
                                alt="Flag">
                        </div>
                        <div class="content">
                            <h6 class="title">China</h6>
                        </div>
                    </div>
                    <div class="marquee-iconic-box slick-slide slick-current slick-active slick-center"
                        data-slick-index="6" aria-hidden="false" tabindex="-1">
                        <div class="image">
                            <img src="{{ asset('images/Flags/argentina.png') }}"
                                alt="Flag">
                        </div>
                        <div class="content">
                            <h6 class="title">Argentina</h6>
                        </div>
                    </div>
                    <div class="marquee-iconic-box slick-slide" data-slick-index="7" aria-hidden="true"
                        tabindex="-1">
                        <div class="image">
                            <img src="{{ asset('images/Flags/kazakhstan.png') }}"
                                alt="Flag">
                        </div>
                        <div class="content">
                            <h6 class="title">Kazakhstan</h6>
                        </div>
                    </div>
                    <div class="marquee-iconic-box slick-slide" data-slick-index="8" aria-hidden="true"
                        tabindex="-1">
                        <div class="image">
                            <img src="{{ asset('images/Flags/algeria.png') }}"
                                alt="Flag">
                        </div>
                        <div class="content">
                            <h6 class="title">Algeria</h6>
                        </div>
                    </div>
                    <div class="marquee-iconic-box slick-slide" data-slick-index="9" id=""
                        aria-hidden="true" tabindex="-1">
                        <div class="image">
                            <img src="{{ asset('images/Flags/united-states.png') }}"
                                alt="Flag">
                        </div>
                        <div class="content">
                            <h6 class="title">United States</h6>
                        </div>
                    </div>
                    <div class="marquee-iconic-box slick-slide" data-slick-index="10" id=""
                        aria-hidden="true" tabindex="-1">
                        <div class="image">
                            <img src="{{ asset('images/Flags/south-africa.png') }}"
                                alt="Flag">
                        </div>
                        <div class="content">
                            <h6 class="title">South Africa</h6>
                        </div>
                    </div>
                    <div class="marquee-iconic-box slick-slide" data-slick-index="11" id=""
                        aria-hidden="true" tabindex="-1">
                        <div class="image">
                            <img src="{{ asset('images/Flags/russia.png') }}"
                                alt="Flag">
                        </div>
                        <div class="content">
                            <h6 class="title">Russia</h6>
                        </div>
                    </div>
                    <div class="marquee-iconic-box slick-slide" data-slick-index="12" id=""
                        aria-hidden="true" tabindex="-1">
                        <div class="image">
                            <img src="{{ asset('images/Flags/brazil.png') }}"
                                alt="Flag">
                        </div>
                        <div class="content">
                            <h6 class="title">Brazil</h6>
                        </div>
                    </div>
                    <div class="marquee-iconic-box slick-slide" data-slick-index="13" id=""
                        aria-hidden="true" tabindex="-1">
                        <div class="image">
                            <img src="{{ asset('images/Flags/australia.png') }}"
                                alt="Flag">
                        </div>
                        <div class="content">
                            <h6 class="title">Australia</h6>
                        </div>
                    </div>
                    <div class="marquee-iconic-box slick-slide" data-slick-index="14" id=""
                        aria-hidden="true" tabindex="-1">
                        <div class="image">
                            <img src="{{ asset('images/Flags/china.png') }}"
                                alt="Flag">
                        </div>
                        <div class="content">
                            <h6 class="title">China</h6>
                        </div>
                    </div>
                    <div class="marquee-iconic-box slick-slide" data-slick-index="15" id=""
                        aria-hidden="true" tabindex="-1">
                        <div class="image">
                            <img src="{{ asset('images/Flags/argentina.png') }}"
                                alt="Flag">
                        </div>
                        <div class="content">
                            <h6 class="title">Argentina</h6>
                        </div>
                    </div>
                    <div class="marquee-iconic-box slick-slide" data-slick-index="16" id=""
                        aria-hidden="true" tabindex="-1">
                        <div class="image">
                            <img src="{{ asset('images/Flags/kazakhstan.png') }}"
                                alt="Flag">
                        </div>
                        <div class="content">
                            <h6 class="title">Kazakhstan</h6>
                        </div>
                    </div>
                    <div class="marquee-iconic-box slick-slide" data-slick-index="17" id=""
                        aria-hidden="true" tabindex="-1">
                        <div class="image">
                            <img src="{{ asset('images/Flags/algeria.png') }}"
                                alt="Flag">
                        </div>
                        <div class="content">
                            <h6 class="title">Algeria</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="marquee-slider-left style-three iconic-slider-left slick-initialized slick-slider" dir="rtl">
            <div class="slick-list draggable" style="padding: 0px 50px;">
                <div class="slick-track"
                    style="opacity: 1; width: 45000px; transform: translate3d(818px, 0px, 0px); transition: transform 8000ms linear 0s;">
                    <div class="marquee-iconic-box slick-slide" data-slick-index="-2" id=""
                        aria-hidden="true" tabindex="-1">
                        <div class="image">
                            <img src="{{ asset('images/Flags/ethiopia.png') }}"
                                alt="Flag">
                        </div>
                        <div class="content">
                            <h6 class="title">Ethiopia</h6>
                        </div>
                    </div>
                    <div class="marquee-iconic-box slick-slide" data-slick-index="-1" id=""
                        aria-hidden="true" tabindex="-1">
                        <div class="image">
                            <img src="{{ asset('images/Flags/nigeria.png') }}"
                                alt="Flag">
                        </div>
                        <div class="content">
                            <h6 class="title">Nigeria</h6>
                        </div>
                    </div>
                    <div class="marquee-iconic-box slick-slide" data-slick-index="0" aria-hidden="true"
                        tabindex="-1">
                        <div class="image">
                            <img src="{{ asset('images/Flags/denmark.png') }}"
                                alt="Flag">
                        </div>
                        <div class="content">
                            <h6 class="title">Denmark</h6>
                        </div>
                    </div>
                    <div class="marquee-iconic-box slick-slide" data-slick-index="1" aria-hidden="true"
                        tabindex="-1">
                        <div class="image">
                            <img src="{{ asset('images/Flags/saudi-arabia.png') }}"
                                alt="Flag">
                        </div>
                        <div class="content">
                            <h6 class="title">Saudi Arabia</h6>
                        </div>
                    </div>
                    <div class="marquee-iconic-box slick-slide" data-slick-index="2" aria-hidden="true"
                        tabindex="-1">
                        <div class="image">
                            <img src="{{ asset('images/Flags/mexico.png') }}"
                                alt="Flag">
                        </div>
                        <div class="content">
                            <h6 class="title">Mexico</h6>
                        </div>
                    </div>
                    <div class="marquee-iconic-box slick-slide" data-slick-index="3" aria-hidden="true"
                        tabindex="-1">
                        <div class="image">
                            <img src="{{ asset('images/Flags/indonesia.png') }}"
                                alt="Flag">
                        </div>
                        <div class="content">
                            <h6 class="title">Indonesia</h6>
                        </div>
                    </div>
                    <div class="marquee-iconic-box slick-slide" data-slick-index="4" aria-hidden="true"
                        tabindex="-1">
                        <div class="image">
                            <img src="{{ asset('images/Flags/sudan.png') }}"
                                alt="Flag">
                        </div>
                        <div class="content">
                            <h6 class="title">Sudan</h6>
                        </div>
                    </div>
                    <div class="marquee-iconic-box slick-slide" data-slick-index="5" aria-hidden="true"
                        tabindex="0">
                        <div class="image">
                            <img src="{{ asset('images/Flags/algeria.png') }}"
                                alt="Flag">
                        </div>
                        <div class="content">
                            <h6 class="title">Algeria</h6>
                        </div>
                    </div>
                    <div class="marquee-iconic-box slick-slide slick-current slick-active slick-center"
                        data-slick-index="6" aria-hidden="false" tabindex="-1">
                        <div class="image">
                            <img src="{{ asset('images/Flags/china.png') }}"
                                alt="Flag">
                        </div>
                        <div class="content">
                            <h6 class="title">China</h6>
                        </div>
                    </div>
                    <div class="marquee-iconic-box slick-slide" data-slick-index="7" aria-hidden="true"
                        tabindex="-1">
                        <div class="image">
                            <img src="{{ asset('images/Flags/ethiopia.png') }}"
                                alt="Flag">
                        </div>
                        <div class="content">
                            <h6 class="title">Ethiopia</h6>
                        </div>
                    </div>
                    <div class="marquee-iconic-box slick-slide" data-slick-index="8" aria-hidden="true"
                        tabindex="-1">
                        <div class="image">
                            <img src="{{ asset('images/Flags/nigeria.png') }}"
                                alt="Flag">
                        </div>
                        <div class="content">
                            <h6 class="title">Nigeria</h6>
                        </div>
                    </div>
                    <div class="marquee-iconic-box slick-slide" data-slick-index="9" id=""
                        aria-hidden="true" tabindex="-1">
                        <div class="image">
                            <img src="{{ asset('images/Flags/denmark.png') }}"
                                alt="Flag">
                        </div>
                        <div class="content">
                            <h6 class="title">Denmark</h6>
                        </div>
                    </div>
                    <div class="marquee-iconic-box slick-slide" data-slick-index="10" id=""
                        aria-hidden="true" tabindex="-1">
                        <div class="image">
                            <img src="{{ asset('images/Flags/saudi-arabia.png') }}"
                                alt="Flag">
                        </div>
                        <div class="content">
                            <h6 class="title">Saudi Arabia</h6>
                        </div>
                    </div>
                    <div class="marquee-iconic-box slick-slide" data-slick-index="11" id=""
                        aria-hidden="true" tabindex="-1">
                        <div class="image">
                            <img src="{{ asset('images/Flags/mexico.png') }}"
                                alt="Flag">
                        </div>
                        <div class="content">
                            <h6 class="title">Mexico</h6>
                        </div>
                    </div>
                    <div class="marquee-iconic-box slick-slide" data-slick-index="12" id=""
                        aria-hidden="true" tabindex="-1">
                        <div class="image">
                            <img src="{{ asset('images/Flags/indonesia.png') }}"
                                alt="Flag">
                        </div>
                        <div class="content">
                            <h6 class="title">Indonesia</h6>
                        </div>
                    </div>
                    <div class="marquee-iconic-box slick-slide" data-slick-index="13" id=""
                        aria-hidden="true" tabindex="-1">
                        <div class="image">
                            <img src="{{ asset('images/Flags/sudan.png') }}"
                                alt="Flag">
                        </div>
                        <div class="content">
                            <h6 class="title">Sudan</h6>
                        </div>
                    </div>
                    <div class="marquee-iconic-box slick-slide" data-slick-index="14" id=""
                        aria-hidden="true" tabindex="-1">
                        <div class="image">
                            <img src="{{ asset('images/Flags/mexico.png') }}"
                                alt="Flag">
                        </div>
                        <div class="content">
                            <h6 class="title">Mexico</h6>
                        </div>
                    </div>
                    <div class="marquee-iconic-box slick-slide" data-slick-index="15" id=""
                        aria-hidden="true" tabindex="-1">
                        <div class="image">
                            <img src="{{ asset('images/Flags/china.png') }}"
                                alt="Flag">
                        </div>
                        <div class="content">
                            <h6 class="title">China</h6>
                        </div>
                    </div>
                    <div class="marquee-iconic-box slick-slide" data-slick-index="16" id=""
                        aria-hidden="true" tabindex="-1">
                        <div class="image">
                            <img src="{{ asset('images/Flags/ethiopia.png') }}"
                                alt="Flag">
                        </div>
                        <div class="content">
                            <h6 class="title">Ethiopia</h6>
                        </div>
                    </div>
                    <div class="marquee-iconic-box slick-slide" data-slick-index="17" id=""
                        aria-hidden="true" tabindex="-1">
                        <div class="image">
                            <img src="{{ asset('images/Flags/nigeria.png') }}"
                                alt="Flag">
                        </div>
                        <div class="content">
                            <h6 class="title">Nigeria</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @push('scripts')
    @endpush
</x-frontend-app-layout>

<x-frontend-app-layout :title="'Digital Business Cards || GoFlixza - Your Hub for QR, Bar Codes & NFC V.Cards'">
    <!-- Page Banner Start -->
    <section class="page-banner-area overlay py-120 rpy-120 rel z-1 bgs-cover text-center"
        style="background-image: url({{ asset('frontend/newimage/banner.jpg') }}); height: 300px;"">
        <div class="container">
            <div class="banner-inner pt-70 rpt-60 text-black">
                <h1 class="page-title" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="50">
                    Digital Business Cards
                </h1>
            </div>
        </div>
    </section>
    <!-- Page Banner End -->
    <section class="app-stor-area mt-30 rpb-150 rel z-1">
        <div class="container mb-30">
            <div class="row justify-content-between align-items-center">
                <div class="col-xl-5 col-lg-6">
                    <div class="about-eight-content rel z-2 my-55 rmb-25 aos-init aos-animate" data-aos="fade-left"
                        data-aos-duration="1500" data-aos-offset="50">
                        <div class="section-title mb-30">
                            <h2>Digital Business Cards</h2>
                        </div>
                        <p>Modernize your networking with Digital Business Cards that go beyond the limitations of
                            traditional paper cards. Instantly share your contact information, social media profiles,
                            and even your portfolio with just a tap. Our customizable digital cards are always
                            up-to-date, ensuring you leave a lasting impression wherever you go. Perfect for
                            professionals, entrepreneurs, and businesses, these eco-friendly cards are not only
                            convenient but also showcase your tech-savvy approach. Embrace the future of networking with
                            a seamless, stylish, and sustainable solution.</p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="aos-init aos-animate" data-aos="fade-right" data-aos-duration="1500"
                        data-aos-offset="50">
                        <img class="rounded-3" src="{{ asset('frontend/newimage/digitalbusinesscard.webp') }}"
                            alt="About">
                    </div>
                </div>
            </div>
        </div>
        <div class="bg-lines">
            <span></span><span></span>
            <span></span><span></span>
        </div>
    </section>
    <section class="hero-area-five py-10 rpy-100 rel z-1">
        <div class="container">
            <div class="hero-content style-five text-center aos-init aos-animate pt-lg-5 pt-0" data-aos="fade-up"
                data-aos-duration="1500" data-aos-offset="50">
                <h1 data-aos="fade-up" data-aos-delay="50" data-aos-duration="1500"ca data-aos-offset="50"
                    class="aos-init aos-animate">Digital Card Pricing Plans</h1>
                <div class="row justify-content-center pt-5 rpt-0 pb-25 aos-init aos-animate" data-aos="fade-up"
                    data-aos-delay="100" data-aos-duration="1500" data-aos-offset="50">
                    <div class="col-xl-9 col-lg-9">
                        <p>Choose the plan that best suits your needs and budget. Our flexible pricing options are
                            designed to offer you the right balance of features and affordability, whether you're a solo
                            entrepreneur or a growing business. Get the tools you need to generate QR codes, barcodes,
                            and NFC cards with ease, all at a price that works for you. Explore our plans and find the
                            perfect fit to elevate your business operations today.</p>
                    </div>
                </div>

            </div>
        </div>
        <div class="hero-bg-wave-shapes">
            <span class="circle"></span>
        </div>
        <div class="bg-lines">
            <span></span><span></span>
            <span></span><span></span>
        </div>
    </section>
    <div class="hero-image-area rel z-1 aos-init aos-animate" data-aos="zoom-in-up" data-aos-duration="1500"
        data-aos-offset="50">
        <div class="container container-1370">
            <div class="row justify-content-center">
                @if ($nfc_plans->isEmpty())
                    <div class="col-12 text-center">
                        <p>No Business Card plans available at the moment. Please check back later.</p>
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

                        <div class="col-xl-3 col-md-6 col-sm-10 aos-init" data-aos="fade-up" data-aos-duration="1500"
                            data-aos-offset="50">
                            <div class="pricing-item style-four">
                                <div class="icon">
                                    @for ($i = 0; $i <= $imageCount; $i++)
                                        <img width="30px" src="{{ asset('frontend/newimage/pro.png') }}"
                                            alt="">
                                    @endfor
                                </div>

                                <h4 class="title">{{ $nfc_plan->title }}</h4>
                                <div class="price d-flex justify-content-center">
                                    <span class="prev">$</span>{{ number_format($nfc_plan->price / 12, 2) }}
                                    <span class="next ps-3">
                                        <div class="d-flex flex-column text-start">
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
                                            <li><i class="fas fa-checkmark"></i> {{ $description }}
                                            </li>
                                        @endforeach
                                    </ul>
                                @endif
                                <a href="{{ route('user_subscribe.register', $nfc_plan->slug) }}"
                                    class="theme-btn">Order
                                    Now</a>
                            </div>
                        </div>
                    @endforeach
                @endif
            </div>
        </div>
    </div>
    <section class="feature-image-box-area pt-95 rpt-75 pb-70 rpb-50 rel z-1">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-7 col-lg-9 col-md-11">
                    <div class="section-title text-center mb-55 aos-init aos-animate" data-aos="fade-up"
                        data-aos-duration="1500" data-aos-offset="50">
                        <h2>Standout Features of Our Digital Visiting Cards</h2>
                        <span class="subtitle-two style-two mb-20 bg-transparent text-muted">
                            <i class="fas fa-rocket-launch"></i> Unlock powerful
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
                            <img class="img-fluid" src="{{ asset('frontend/newimage/templates.webp') }}" alt="Feature">
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
                            <img class="img-fluid" src="{{ asset('frontend/newimage/realTimeUpdate.webp') }}"
                                alt="Feature">
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
                            <img class="img-fluid" src="{{ asset('frontend/newimage/NFCCard.webp') }}"
                                alt="Feature">
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
    @push('scripts')
    @endpush
</x-frontend-app-layout>

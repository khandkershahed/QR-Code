<x-frontend-app-layout :title="'Services'">
    <!-- Page Banner Start -->
    <section class="page-banner-area overlay py-120 rpy-120 rel z-1 bgs-cover text-center"
        style="background-image: url({{ asset('frontend/newimage/banner.jpg') }}); height: 300px;"">
        <div class="container">
            <div class="banner-inner pt-70 rpt-60 text-black">
                <h1 class="page-title" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="50">
                    Services
                </h1>
            </div>
        </div>
    </section>
    <!-- Page Banner End -->

    <!-- About Area Start -->
    <section class="about-service-page py-130 rpy-100 rel z-1">
        <div class="container">
            <div class="row gap-110 align-items-center">
                <div class="col-lg-6">
                    <div class="about-content-five rmb-55" data-aos="fade-left" data-aos-duration="1500"
                        data-aos-offset="50">
                        <div class="section-title mb-30">
                            <h2>QR Code Genius: Simplifying Your Digital Connections</h2>
                        </div>
                        <p>
                            QR Code Genius is your go-to platform for creating, managing, and analyzing QR codes
                            effortlessly. Whether you're a marketer, entrepreneur, or educator, QR Code Genius provides
                            the tools you need to enhance your digital presence and engage your audience seamlessly.
                        </p>
                        <ul class="icon-list style-two mt-40 mb-45">
                            <li>
                                <i class="fas fa-circle-check"></i> Intuitive QR Code Generation
                            </li>
                            <li>
                                <i class="fas fa-circle-check"></i> Centralized Management Hub
                            </li>
                            <li>
                                <i class="fas fa-circle-check"></i> Insightful Analytics
                            </li>
                        </ul>
                        <a href="{{ asset('about') }}" class="theme-btn">Learn More <i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="about-images-service-page">
                        <div class="for-responsive">
                            <img class="img-fluid rounded-3" src="{{ asset('images/Flags/identidad-digital-que-es.jpg') }}"
                                alt="About" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- About Area End -->

    <!-- Feature box Area Start -->
    <section class="feature-box-area pb-90 rpb-70 rel z-1">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-7 col-lg-9">
                    <div class="section-title text-center mb-55" data-aos="fade-up" data-aos-duration="1500"
                        data-aos-offset="50">
                        <h2 class="fw-bold">Empowering Your Business with QR Code Solutions</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-4 col-md-6" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="50">
                    <div class="iconic-box style-seven">
                        <div class="icon">
                            <i class="fas fa-atom"></i>
                        </div>
                        <div class="content">
                            <h5>
                                <a href="service-details.html">Seamless QR Code Generation</a>
                            </h5>
                            <p>
                                Generate QR codes quickly and easily with our intuitive interface.
                            </p>
                        </div>
                        <div class="bg">
                            <img src="{{ asset('images/price-circle.png') }}"
                                alt="Shape" />
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6" data-aos="fade-up" data-aos-delay="100" data-aos-duration="1500"
                    data-aos-offset="50">
                    <div class="iconic-box style-seven">
                        <div class="icon">
                            <i class="fas fa-rocket"></i>
                        </div>
                        <div class="content">
                            <h5>
                                <a href="service-details.html">Customizable Design Options</a>
                            </h5>
                            <p>
                                Personalize QR codes with your brand's colors, logos, and design elements.
                            </p>
                        </div>
                        <div class="bg">
                            <img src="{{ asset('images/price-circle.png') }}"
                                alt="Shape" />
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6" data-aos="fade-up" data-aos-delay="200" data-aos-duration="1500"
                    data-aos-offset="50">
                    <div class="iconic-box style-seven">
                        <div class="icon">
                            <i class="fas fa-bullseye"></i>
                        </div>
                        <div class="content">
                            <h5>
                                <a href="service-details.html">Dynamic QR Code Management</a>
                            </h5>
                            <p>
                                Keep QR codes current with the latest information, ensuring always relevant.
                            </p>
                        </div>
                        <div class="bg">
                            <img src="{{ asset('images/price-circle.png') }}"
                                alt="Shape" />
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="50">
                    <div class="iconic-box style-seven">
                        <div class="icon">
                            <i class="fas fa-anchor"></i>
                        </div>
                        <div class="content">
                            <h5>
                                <a href="service-details.html">Advanced Analytics and Insights</a>
                            </h5>
                            <p>
                                Gain valuable insights into QR code performance, scan rates, and user.
                            </p>
                        </div>
                        <div class="bg">
                            <img src="{{ asset('images/price-circle.png') }}"
                                alt="Shape" />
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6" data-aos="fade-up" data-aos-delay="100" data-aos-duration="1500"
                    data-aos-offset="50">
                    <div class="iconic-box style-seven">
                        <div class="icon">
                            <i class="fas fa-layer-group"></i>
                        </div>
                        <div class="content">
                            <h5>
                                <a href="service-details.html">Secure and Reliable Platform</a>
                            </h5>
                            <p>
                                Rest assured that your QR codes and data are safe and secure with our reliable platform.
                            </p>
                        </div>
                        <div class="bg">
                            <img src="{{ asset('images/price-circle.png') }}"
                                alt="Shape" />
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6" data-aos="fade-up" data-aos-delay="200" data-aos-duration="1500"
                    data-aos-offset="50">
                    <div class="iconic-box style-seven">
                        <div class="icon">
                            <i class="fas fa-shield-halved"></i>
                        </div>
                        <div class="content">
                            <h5><a href="service-details.html">Cross-Platform Compatibility</a></h5>
                            <p>
                                Ensure seamless integration across various devices and platforms, reaching you.
                            </p>
                        </div>
                        <div class="bg">
                            <img src="{{ asset('images/price-circle.png') }}"
                                alt="Shape" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Feature box Area End -->

    <!-- CTA Area Start -->
    <section class="cta-area bgs-cover py-130 rpy-100"
        style="background-image: url({{ asset('images/ctga.jpg') }})">
        <div class="container">
            <div class="row align-items-center justify-content-between">
                <div class="col-xl-6 col-lg-8">
                    <div class="cta-content text-white rmb-35" data-aos="fade-left" data-aos-duration="1500"
                        data-aos-offset="50">
                        <div class="section-title mb-40">
                            <span class="subtitle d-block mb-10">GoQR - Simplifying QR Code Management</span>
                            <h2>Platform for effortlessly generating, customizing, and tracking QR codes</h2>
                        </div>
                        <a href="{{ route('contact') }}" class="theme-btn">Contact Us <i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="cta-btn text-lg-center text-start ps-lg-0 ps-2" data-aos="fade-right"
                        data-aos-duration="1500" data-aos-offset="50">
                        <a href="https://www.youtube.com/watch?v=PSpMW3c7x2g" class="mfp-iframe video-play"><i
                                class="fas fa-play"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- CTA Area End -->

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
    @push('scripts')
    @endpush
</x-frontend-app-layout>

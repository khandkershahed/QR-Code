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
                        <p>Easily generate QR codes, barcodes, and NFC cards with our all-in-one solution. Simplify data management and boost efficiency with our versatile tools.</p>
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
                                <a href="#" class="theme-btn style-two mt-25">Order Now <i
                                    class="far fa-arrow-right"></i></a>
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
                                <a href="#" class="theme-btn style-two mt-25">Order Now <i
                                    class="far fa-arrow-right"></i></a>
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
                                <a href="#" class="theme-btn style-two mt-25">Order Now <i
                                    class="far fa-arrow-right"></i></a>
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
    <section class="pricing-area-seven-two bgc-lighter color-five pt-125 rpt-95 pb-100 rpb-70 rel z-1">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-7 col-lg-9 col-md-11">
                    <div class="section-title text-center mb-65 aos-init" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="50">
                        <h2>Easy to Start, Easy to Scale Website Builder Plans</h2>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-xl-4 col-md-6 col-sm-10 aos-init" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="50">
                    <div class="pricing-item style-four">
                        <div class="icon">
                            <i class="flaticon-educational-school-hand-drawn-tools"></i>
                        </div>
                        <h4 class="title">Regular Plan</h4>
                        <div class="price"><span class="prev">$</span>15.00<span class="next">/month</span></div>
                        <div class="text">No credit card required</div>
                        <hr>
                        <ul class="icon-list">
                            <li><i class="fal fa-check"></i> 2 Limited sites available</li>
                            <li><i class="fal fa-check"></i> 1 GB storage per site</li>
                            <li><i class="fal fa-check"></i> Up to 5 pages per site</li>
                            <li><i class="fal fa-check"></i> Free SSL for custom domain</li>
                            <li><i class="fal fa-check"></i> Connect custom domain</li>
                        </ul>
                        <a href="#" class="theme-btn">Choose Package <i class="far fa-arrow-right"></i></a>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6 col-sm-10 aos-init" data-aos="fade-up" data-aos-delay="100" data-aos-duration="1500" data-aos-offset="50">
                    <div class="pricing-item style-four">
                        <div class="icon">
                            <i class="flaticon-paper-airplane-toy"></i>
                        </div>
                        <h4 class="title">Standard Plan</h4>
                        <div class="price"><span class="prev">$</span>49.00<span class="next">/month</span></div>
                        <div class="text">No credit card required</div>
                        <hr>
                        <ul class="icon-list">
                            <li><i class="fal fa-check"></i> 2 Limited sites available</li>
                            <li><i class="fal fa-check"></i> 1 GB storage per site</li>
                            <li><i class="fal fa-check"></i> Up to 5 pages per site</li>
                            <li><i class="fal fa-check"></i> Free SSL for custom domain</li>
                            <li><i class="fal fa-check"></i> Connect custom domain</li>
                        </ul>
                        <a href="#" class="theme-btn">Choose Package <i class="far fa-arrow-right"></i></a>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6 col-sm-10 aos-init" data-aos="fade-up" data-aos-delay="200" data-aos-duration="1500" data-aos-offset="50">
                    <div class="pricing-item style-four">
                        <div class="icon">
                            <i class="flaticon-diamond"></i>
                        </div>
                        <h4 class="title">Premium Plan</h4>
                        <div class="price"><span class="prev">$</span>93.00<span class="next">/month</span></div>
                        <div class="text">No credit card required</div>
                        <hr>
                        <ul class="icon-list">
                            <li><i class="fal fa-check"></i> 2 Limited sites available</li>
                            <li><i class="fal fa-check"></i> 1 GB storage per site</li>
                            <li><i class="fal fa-check"></i> Up to 5 pages per site</li>
                            <li><i class="fal fa-check"></i> Free SSL for custom domain</li>
                            <li><i class="fal fa-check"></i> Connect custom domain</li>
                        </ul>
                        <a href="#" class="theme-btn">Choose Package <i class="far fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="bg-lines">
           <span></span><span></span>
           <span></span><span></span>
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
                        <a href="#"><img src="{{ asset('frontend/newimage/clientLogos/nawazgroup.us.webp') }}"
                                alt="Client Logo" /></a>
                    </div>
                </div>
                <div class="col">
                    <div class="client-logo-item style-four py-65 rpy-25" data-aos="fade-up" data-aos-delay="50"
                        data-aos-duration="1500" data-aos-offset="50">
                        <a href="#"><img src="{{ asset('frontend/newimage/clientLogos/ajkalus.webp') }}"
                                alt="Client Logo" /></a>
                    </div>
                </div>
                <div class="col">
                    <div class="client-logo-item style-four py-45 rpy-25" data-aos="fade-up" data-aos-delay="100"
                        data-aos-duration="1500" data-aos-offset="50">
                        <a href="#"><img src="{{ asset('frontend/newimage/clientLogos/eracounsulting.webp') }}"
                                alt="Client Logo" /></a>
                    </div>
                </div>
                <div class="col">
                    <div class="client-logo-item style-four py-65 rpy-25" data-aos="fade-up" data-aos-delay="150"
                        data-aos-duration="1500" data-aos-offset="50">
                        <a href="#"><img src="{{ asset('frontend/newimage/clientLogos/jba.webp') }}"
                                alt="Client Logo" /></a>
                    </div>
                </div>
                <div class="col">
                    <div class="client-logo-item style-four py-45 rpy-25" data-aos="fade-up" data-aos-delay="200"
                        data-aos-duration="1500" data-aos-offset="50">
                        <a href="#"><img
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
            <div class="row justify-content-center section-title text-center text-white mb-60 aos-init aos-animate" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="50">
                <div class="col-lg-10">
                    <h4>Unlock the Best Value for Your Investment</h4>
                    <p>Explore our flexible pricing plans tailored to fit your needs. Whether you're looking for basic features or advanced options, our pricing is designed to provide maximum value and flexibility. Click below to find the perfect plan for you and start optimizing your operations today!</p>
                    <a href="#" class="theme-btn style-two mt-25">Order Now <i
                        class="far fa-arrow-right"></i></a>
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
                        <p>Easily create and manage dynamic QR codes with our versatile generator. Update your code's content anytime without needing to reprint it. Perfect for businesses, marketing campaigns, and events, our tool ensures seamless connectivity and real-time adaptability. Generate QR codes that grow with your needs, providing an efficient and effective way to connect with your audience.</p>
                        <a href="about.html" class="theme-btn style-two mt-25">Read More <i
                                class="far fa-arrow-right"></i></a>
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
                        <p>Simplify inventory management with our Bulk Barcode Generator. Create and print thousands of barcodes quickly and accurately, tailored to various formats and data inputs. Ideal for warehouses and retail, our tool enhances tracking and boosts efficiency, saving you time and reducing errors.</p>
                        <a href="about.html" class="theme-btn style-three mt-25">Read More <i
                                class="far fa-arrow-right"></i></a>
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
</x-frontend-app-layout>

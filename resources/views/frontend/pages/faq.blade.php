<x-frontend-app-layout :title="'FAQ'">
    <section class="page-banner-area overlay py-120 rpy-120 rel z-1 bgs-cover text-center"
        style="
      background-image: url(https://webtendtheme.net/html/2024/akpager/assets/images/backgrounds/banner.jpg);
    ">
        <div class="container">
            <div class="banner-inner pt-70 rpt-60 text-black">
                <h1 class="page-title aos-init aos-animate" data-aos="fade-up" data-aos-duration="1500"
                    data-aos-offset="50">
                    Our FAQ
                </h1>
            </div>
        </div>
    </section>
    <section id="faqs" class="faqs-area-seven pt-125 rpt-95 pb-115 rpb-85 rel z-1">
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
                        @if (count($faqs) > 0)
                            @foreach ($faqs as $faq)
                                <div class="accordion-item">
                                    <h5 class="accordion-header">
                                        <button class="accordion-button collapsed" data-bs-toggle="collapse"
                                            data-bs-target="#collapse{{ $faq->id }}">
                                            {{ $faq->question }}
                                        </button>
                                    </h5>
                                    <div id="collapse{{ $faq->id }}" class="accordion-collapse collapse" data-bs-parent="#accordionOne">
                                        <div class="accordion-body">
                                            <p>{{ $faq->answer }}</p>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        @endif
                        {{-- <div class="accordion-item">
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
                            <div id="collapseOne3" class="accordion-collapse collapse" data-bs-parent="#accordionOne">
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
                            <div id="collapseOne4" class="accordion-collapse collapse" data-bs-parent="#accordionOne">
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
                            <div id="collapseOne5" class="accordion-collapse collapse" data-bs-parent="#accordionOne">
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
                            <div id="collapseOne6" class="accordion-collapse collapse" data-bs-parent="#accordionOne">
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
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>
        <div class="faqs-area-seven-shapes">
            <div class="shape one">
                <img src="http://127.0.0.1:8000/frontend/assets/images/shapes/faq-one1.png" alt="Shape">
            </div>
            <div class="shape two">
                <img src="http://127.0.0.1:8000/frontend/assets/images/shapes/faq-one2.png" alt="Shape">
            </div>
            <div class="shape three">
                <img src="http://127.0.0.1:8000/frontend/assets/images/shapes/faq-one3.png" alt="Shape">
            </div>
            <div class="shape four">
                <img src="http://127.0.0.1:8000/frontend/assets/images/shapes/faq-one4.png" alt="Shape">
            </div>
            <div class="shape five">
                <img src="http://127.0.0.1:8000/frontend/assets/images/shapes/faq-one5.png" alt="Shape">
            </div>
            <div class="shape six">
                <img src="http://127.0.0.1:8000/frontend/assets/images/shapes/faq-one6.png" alt="Shape">
            </div>
        </div>
        <div class="bg-lines">
            <span></span><span></span> <span></span><span></span>
        </div>
    </section>
    @push('scripts')
    @endpush
</x-frontend-app-layout>

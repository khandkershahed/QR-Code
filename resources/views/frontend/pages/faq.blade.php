<x-frontend-app-layout :title="'FAQ || GoFlixza - Your Hub for QR, Bar Codes & NFC V.Cards'">
    <section class="page-banner-area overlay py-120 rpy-120 rel z-1 bgs-cover text-center"
        style="
      background-image: url(https://webtendtheme.net/html/2024/akpager/assets/images/backgrounds/banner.jpg);">
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
                                    <div id="collapse{{ $faq->id }}" class="accordion-collapse collapse"
                                        data-bs-parent="#accordionOne">
                                        <div class="accordion-body">
                                            <p>{{ $faq->answer }}</p>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        @endif

                    </div>
                </div>
            </div>
        </div>
        <div class="faqs-area-seven-shapes">
            <div class="shape one">
                <img src="{{ asset('frontend/assets/images/shapes/faq-one1.png') }}" alt="Shape">
            </div>
            <div class="shape two">
                <img src="{{ asset('frontend/assets/images/shapes/faq-one2.png') }}" alt="Shape">
            </div>
            <div class="shape three">
                <img src="{{ asset('frontend/assets/images/shapes/faq-one3.png') }}" alt="Shape">
            </div>
            <div class="shape four">
                <img src="{{ asset('frontend/assets/images/shapes/faq-one4.png') }}" alt="Shape">
            </div>
            <div class="shape five">
                <img src="{{ asset('frontend/assets/images/shapes/faq-one5.png') }}" alt="Shape">
            </div>
            <div class="shape six">
                <img src="{{ asset('frontend/assets/images/shapes/faq-one6.png') }}" alt="Shape">
            </div>
        </div>
        <div class="bg-lines">
            <span></span><span></span> <span></span><span></span>
        </div>
    </section>
    @push('scripts')
    @endpush
</x-frontend-app-layout>

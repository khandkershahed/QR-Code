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
    <section class="app-stor-area pt-30 pb-30 rpb-150 rel z-1">
        <div class="container mb-30">
            <div class="row justify-content-between align-items-center">
                <div class="col-xl-5 col-lg-6">
                    <div class="about-eight-content rel z-2 my-55 rmb-25 aos-init aos-animate" data-aos="fade-left"
                        data-aos-duration="1500" data-aos-offset="50">
                        <div class="section-title mb-30">
                            <h2>Digital Business Cards</h2>
                        </div>
                        <p>Efficiently generate and store barcodes for your inventory with our intuitive barcode
                            creation and management tool. Easily input product details, customize barcode settings, and
                            save barcodes for seamless tracking and organization. Streamline your inventory process and
                            enhance accuracy with our user-friendly interface.</p>
                        <div class="play-app-stor pt-10">
                            <a href="#"><img
                                    src="https://webtendtheme.net/html/2024/akpager/assets/images/icons/play-stor.png"
                                    alt="Play Stor"></a>
                            <a href="#"><img
                                    src="https://webtendtheme.net/html/2024/akpager/assets/images/icons/app-stor.png"
                                    alt="App Stor"></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="aos-init aos-animate" data-aos="fade-right" data-aos-duration="1500"
                        data-aos-offset="50">
                        <img class="rounded-3"
                            src="https://techcrunch.com/wp-content/uploads/2018/07/Scandit-Barcode-Scanning-with-Samsung-Tablet.png"
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
            <div class="hero-content style-five text-center aos-init aos-animate pt-130" data-aos="fade-up"
                data-aos-duration="1500" data-aos-offset="50">
                <h1 data-aos="fade-up" data-aos-delay="50" data-aos-duration="1500"ca data-aos-offset="50"
                    class="aos-init aos-animate">Digital Card Pricing Plans</h1>
                <div class="row justify-content-center pt-5 rpt-0 pb-25 aos-init aos-animate" data-aos="fade-up"
                    data-aos-delay="100" data-aos-duration="1500" data-aos-offset="50">
                    <div class="col-xl-7 col-lg-9">
                        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque
                            laudantium, totam rem aperiam eaque quae abillo inventore veritatis</p>
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

                    <div class="col-xl-3 col-md-6 col-sm-10 aos-init" data-aos="fade-up" data-aos-duration="1500"
                        data-aos-offset="50">
                        <div class="pricing-item style-four">
                            <div class="icon">
                                @for ($i = 0; $i <= $imageCount; $i++)
                                    <img width="30px" src="{{ asset('frontend/newimage/pro.png') }}" alt="">
                                @endfor
                            </div>

                            <h4 class="title">{{ $nfc_plan->title }}</h4>
                            <div class="price">
                                <span class="prev">$</span>{{ $nfc_plan->price }}
                                <span class="next">/
                                    @if ($nfc_plan->billing_cycle == 'year')
                                        year
                                    @elseif ($nfc_plan->billing_cycle == 'month')
                                        month
                                    @else
                                        Trial Period
                                    @endif
                                </span>
                            </div>
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
                            <a href="{{ route('user_subscribe.register', $nfc_plan->slug) }}" class="theme-btn">Order
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
                        <span class="subtitle-one style-two mb-20"><i class="fas fa-rocket-launch"></i> Best
                            Communication System</span>
                        <h2>Support your customers on their preferred channels</h2>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-xl-4 col-md-6">
                    <div class="feature-image-box aos-init aos-animate" data-aos="fade-up" data-aos-duration="1500"
                        data-aos-offset="50">
                        <div class="image">
                            <img src="https://webtendtheme.net/html/2024/akpager/assets/images/services/feature1.png"
                                alt="Feature">
                        </div>
                        <div class="content">
                            <h5><a href="service-details.html">Share Inbox</a></h5>
                            <p>Sed uterspiciatis unde omnis natus error voluptatem accusantium doloremque ways
                                laudantium totam aperiam eaque</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6">
                    <div class="feature-image-box aos-init aos-animate" data-aos="fade-up" data-aos-delay="100"
                        data-aos-duration="1500" data-aos-offset="50">
                        <div class="image">
                            <img src="https://webtendtheme.net/html/2024/akpager/assets/images/services/feature2.png"
                                alt="Feature">
                        </div>
                        <div class="content">
                            <h5><a href="service-details.html">Custom Analytics</a></h5>
                            <p>Quis autem vel eumiure reprehenderit qui in ea voluptate velit esse quam molestiae
                                consequatur vel illum qui dolorem</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6">
                    <div class="feature-image-box aos-init aos-animate" data-aos="fade-up" data-aos-delay="200"
                        data-aos-duration="1500" data-aos-offset="50">
                        <div class="image">
                            <img src="https://webtendtheme.net/html/2024/akpager/assets/images/services/feature3.png"
                                alt="Feature">
                        </div>
                        <div class="content">
                            <h5><a href="service-details.html">Contacts CRM</a></h5>
                            <p>To take a trivial example, which of us ever undertakes laborious physical exercise,
                                except to obtain some advantage</p>
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

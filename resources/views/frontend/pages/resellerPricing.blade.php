<x-frontend-app-layout :title="'Pricing'">
    <section class="page-banner-area overlay py-120 rpy-120 rel z-1 bgs-cover text-center"
        style="
      background-image: url(https://img.freepik.com/free-photo/high-angle-cash-calculator_23-2149103926.jpg?t=st=1711992497~exp=1711996097~hmac=cba674665bb01df3d0bf2d4b9dcb482d199fafdfc976f1390185593de8dbb984&w=1380);
      height: 400px;">
        <div class="container">
            <div class="banner-inner pt-70 rpt-60 text-black">
                <h1 class="page-title aos-init aos-animate" data-aos="fade-up" data-aos-duration="1500"
                    data-aos-offset="50">
                    Our Pricing
                </h1>
            </div>
        </div>
    </section>
    <section class="pricing-three-area bgp-bottom pt-130 rpt-100 pb-100 rpb-70 rel z-1">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-6 col-lg-9 col-md-11">
                    <div class="section-title text-center mb-45 aos-init aos-animate" data-aos="fade-up"
                        data-aos-duration="1500" data-aos-offset="50">
                        <h2>QR Code & NFC Generator
                            Pricing & Plans</h2>
                        <p>Choose a QR Code pricing plan that best suits your business.</p>
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
                                    <i class="fa fa-user" aria-hidden="true"></i> For Individuals</button>
                            </li>
                            <li class="">
                                <button class="nav-link text-decoration-none pt-3 text-black" data-bs-toggle="tab"
                                    data-bs-target="#tabFour2">
                                    <i class="fa fa-user" aria-hidden="true"></i> For Businesses</button>
                            </li>
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane fade active show" id="tabFour1">
                                <div class="row justify-content-center">
                                    @foreach ($individual_plans as $individual_plan)
                                        <div class="col-xl-3 col-md-6 col-sm-10 aos-init aos-animate" data-aos="fade-up"
                                            data-aos-duration="1500" data-aos-offset="50">
                                            <div class="pricing-item style-five">
                                                <div class="title-price">
                                                    <h5 class="title">{{ $individual_plan->name }}</h5>
                                                    <div class="price"><span
                                                            class="prev">$</span>{{ $individual_plan->price }}<span
                                                            class="next">/m</span></div>
                                                </div>
                                                <hr>
                                                <div class="text">For small businesses looking to reach more consumers
                                                </div>
                                                @php
                                                    $descriptions = is_array($individual_plan->descriptions)
                                                        ? $individual_plan->descriptions
                                                        : json_decode($individual_plan->descriptions);
                                                @endphp
                                                @if (!empty($descriptions))
                                                    <ul class="icon-list">
                                                        @foreach ($descriptions as $description)
                                                            <li><i class="ion-checkmark"></i> {{ $description }}</li>
                                                        @endforeach
                                                    </ul>
                                                @endif
                                                <a href="{{ route('user.subscribe.post', $individual_plan->slug) }}"
                                                    class="theme-btn style-two">Package <i
                                                        class="fas fa-arrow-right"></i></a>
                                            </div>
                                        </div>
                                    @endforeach



                                </div>
                            </div>
                            <div class="tab-pane fade" id="tabFour2">
                                <div class="row justify-content-center">
                                    <div class="col-xl-3 col-md-6 col-sm-10 aos-init aos-animate" data-aos="fade-up"
                                        data-aos-duration="1500" data-aos-offset="50">
                                        <div class="pricing-item style-five">
                                            <div class="title-price">
                                                <h5 class="title">Regular</h5>
                                                <div class="price"><span class="prev">$</span>15.<span
                                                        class="next">/m</span></div>
                                            </div>
                                            <hr>
                                            <div class="text">For small businesses looking to reach more consumers
                                            </div>
                                            <ul class="icon-list">
                                                <li><i class="fas fa-check"></i> 2 Limited sites available</li>
                                                <li><i class="fas fa-check"></i> 1 GB storage per site</li>
                                                <li><i class="fas fa-check"></i> Up to 5 pages per site</li>
                                                <li class="hide"><i class="fas fa-check"></i> Free SSL for custom
                                                    domain</li>
                                                <li class="hide"><i class="fas fa-check"></i> Connect custom domain
                                                </li>
                                            </ul>
                                            <a href="#" class="theme-btn style-two">Package <i
                                                    class="fas fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-md-6 col-sm-10 aos-init aos-animate" data-aos="fade-up"
                                        data-aos-delay="100" data-aos-duration="1500" data-aos-offset="50">
                                        <div class="pricing-item style-five">
                                            <div class="title-price">
                                                <h5 class="title color-two">Standard</h5>
                                                <div class="price"><span class="prev">$</span>35.<span
                                                        class="next">/m</span></div>
                                            </div>
                                            <hr>
                                            <div class="text">For mid-scale businesses with advanced QR Code needs
                                            </div>
                                            <ul class="icon-list">
                                                <li><i class="fas fa-check"></i> 2 Limited sites available</li>
                                                <li><i class="fas fa-check"></i> 1 GB storage per site</li>
                                                <li><i class="fas fa-check"></i> Up to 5 pages per site</li>
                                                <li><i class="fas fa-check"></i> Free SSL for custom domain</li>
                                                <li class="hide"><i class="fas fa-check"></i> Connect custom domain
                                                </li>
                                            </ul>
                                            <a href="#" class="theme-btn style-two">Package <i
                                                    class="fas fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-md-6 col-sm-10 aos-init aos-animate" data-aos="fade-up"
                                        data-aos-delay="200" data-aos-duration="1500" data-aos-offset="50">
                                        <div class="pricing-item style-five">
                                            <div class="title-price">
                                                <h5 class="title color-four">Diamond</h5>
                                                <div class="price"><span class="prev">$</span>98.<span
                                                        class="next">/m</span></div>
                                            </div>
                                            <hr>
                                            <div class="text">For teams to collaborate and manage QR Codes</div>
                                            <ul class="icon-list">
                                                <li><i class="fas fa-check"></i> 2 Limited sites available</li>
                                                <li><i class="fas fa-check"></i> 1 GB storage per site</li>
                                                <li><i class="fas fa-check"></i> Up to 5 pages per site</li>
                                                <li><i class="fas fa-check"></i> Free SSL for custom domain</li>
                                                <li><i class="fas fa-check"></i> Connect custom domain</li>
                                            </ul>
                                            <a href="#" class="theme-btn style-two">Package <i
                                                    class="fas fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-md-6 col-sm-10 aos-init aos-animate" data-aos="fade-up"
                                        data-aos-delay="200" data-aos-duration="1500" data-aos-offset="50">
                                        <div class="pricing-item style-five">
                                            <div class="title-price">
                                                <h5 class="title color-five">Shedule Demo</h5>
                                            </div>
                                            <hr>
                                            <div class="text">For businesses with security, control, and flexibility
                                                needs</div>
                                            <ul class="icon-list">
                                                <li><i class="fas fa-check"></i> 2 Limited sites available</li>
                                                <li><i class="fas fa-check"></i> 1 GB storage per site</li>
                                                <li><i class="fas fa-check"></i> Up to 5 pages per site</li>
                                                <li><i class="fas fa-check"></i> Free SSL for custom domain</li>
                                                <li><i class="fas fa-check"></i> Connect custom domain</li>
                                            </ul>
                                            <a href="#" class="theme-btn style-two">Package <i
                                                    class="fas fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="pricing-three-shapes">
            <div class="shape one">
                <img src="https://webtendtheme.net/html/2024/akpager/assets/images/shapes/price1.png" alt="Shape">
            </div>
            <div class="shape two">
                <img src="https://webtendtheme.net/html/2024/akpager/assets/images/shapes/price2.png" alt="Shape">
            </div>
        </div>
    </section>
    @push('scripts')
    @endpush
</x-frontend-app-layout>

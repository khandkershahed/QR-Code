<x-frontend-app-layout :title="'Pricing'">
    <section class="page-banner-area overlay py-250 rpy-120 rel z-1 bgs-cover text-center"
        style="
      background-image: url(https://webtendtheme.net/html/2024/akpager/assets/images/backgrounds/banner.jpg);
    ">
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
                        <h2>Explore Our Pricing Package and choose your plan</h2>
                    </div>
                </div>
                <div class="col-lg-7 text-center aos-init aos-animate" data-aos="fade-up" data-aos-delay="50"
                    data-aos-duration="1500" data-aos-offset="50">
                    <span class="save-percent" style="background-image: url({{ asset('frontend/assets/images/shapes/title-shape.png') }});">Save
                        40%</span>
                    <ul class="nav pricing-tab mb-55" role="tablist">
                        <li>
                            <button class="nav-link" data-bs-toggle="tab" data-bs-target="#monthly">Monthly</button>
                        </li>
                        <li>
                            <button class="nav-link active" data-bs-toggle="tab"
                                data-bs-target="#yearly">Yearly</button>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="tab-content">
                <div class="tab-pane fade" id="monthly">
                    <div class="row justify-content-center">
                        <div class="col-xl-4 col-md-6 col-sm-10 aos-init aos-animate" data-aos="fade-up"
                            data-aos-duration="1500" data-aos-offset="50">
                            <div class="pricing-item style-three">
                                <div class="circle"><img src="{{ asset('frontend/assets/images/shapes/price-circle.png') }}" alt="Shape">
                                </div>
                                <div class="price"><span class="prev">$</span>19<span class="next">/month</span>
                                </div>
                                <div class="text">Smart Pricing for good services</div>
                                <a href="#" class="theme-btn">Choose Package <i
                                        class="fas fa-arrow-right"></i></a>
                                <h4 class="title">Regular Plan</h4>
                                <ul class="list">
                                    <li>Email marketing</li>
                                    <li>Unlimited chat history</li>
                                    <li>Unlimited landing pages</li>
                                    <li class="hide">Automation templates</li>
                                    <li class="hide">Great Customer Support</li>
                                    <li class="hide">Unlimited lead funnels</li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-xl-4 col-md-6 col-sm-10 aos-init aos-animate" data-aos="fade-up"
                            data-aos-delay="100" data-aos-duration="1500" data-aos-offset="50">
                            <div class="pricing-item style-three">
                                <div class="circle"><img src="{{ asset('frontend/assets/images/shapes/price-circle.png') }}" alt="Shape">
                                </div>
                                <div class="price"><span class="prev">$</span>39<span class="next">/month</span>
                                </div>
                                <div class="text">Smart Pricing for good services</div>
                                <a href="#" class="theme-btn">Choose Package <i
                                        class="fas fa-arrow-right"></i></a>
                                <h4 class="title">Standard Plan</h4>
                                <ul class="list">
                                    <li>Email marketing</li>
                                    <li>Unlimited chat history</li>
                                    <li>Unlimited landing pages</li>
                                    <li>Automation templates</li>
                                    <li>Great Customer Support</li>
                                    <li>Unlimited lead funnels</li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-xl-4 col-md-6 col-sm-10 aos-init aos-animate" data-aos="fade-up"
                            data-aos-delay="200" data-aos-duration="1500" data-aos-offset="50">
                            <div class="pricing-item style-three">
                                <div class="circle"><img src="{{ asset('frontend/assets/images/shapes/price-circle.png') }}" alt="Shape">
                                </div>
                                <div class="price"><span class="prev">$</span>93<span class="next">/month</span>
                                </div>
                                <div class="text">Smart Pricing for good services</div>
                                <a href="#" class="theme-btn">Choose Package <i
                                        class="fas fa-arrow-right"></i></a>
                                <h4 class="title">Premium Plan</h4>
                                <ul class="list">
                                    <li>Email marketing</li>
                                    <li>Unlimited chat history</li>
                                    <li>Unlimited landing pages</li>
                                    <li>Automation templates</li>
                                    <li>Great Customer Support</li>
                                    <li>Unlimited lead funnels</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade yearly show active" id="yearly">
                    <div class="row justify-content-center">
                        <div class="col-xl-4 col-md-6 col-sm-10 aos-init aos-animate" data-aos="fade-up"
                            data-aos-duration="1500" data-aos-offset="50">
                            <div class="pricing-item style-three">
                                <div class="circle"><img src="{{ asset('frontend/assets/images/shapes/price-circle.png') }}" alt="Shape">
                                </div>
                                <div class="price"><span class="prev">$</span>19<span class="next">/month</span>
                                </div>
                                <div class="text">Smart Pricing for good services</div>
                                <a href="#" class="theme-btn">Choose Package <i
                                        class="fas fa-arrow-right"></i></a>
                                <h4 class="title">Regular Plan</h4>
                                <ul class="list">
                                    <li>Email marketing</li>
                                    <li>Unlimited chat history</li>
                                    <li>Unlimited landing pages</li>
                                    <li class="hide">Automation templates</li>
                                    <li class="hide">Great Customer Support</li>
                                    <li class="hide">Unlimited lead funnels</li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-xl-4 col-md-6 col-sm-10 aos-init aos-animate" data-aos="fade-up"
                            data-aos-delay="100" data-aos-duration="1500" data-aos-offset="50">
                            <div class="pricing-item style-three">
                                <div class="circle"><img src="{{ asset('frontend/assets/images/shapes/price-circle.png') }}" alt="Shape">
                                </div>
                                <div class="price"><span class="prev">$</span>39<span class="next">/month</span>
                                </div>
                                <div class="text">Smart Pricing for good services</div>
                                <a href="#" class="theme-btn">Choose Package <i
                                        class="fas fa-arrow-right"></i></a>
                                <h4 class="title">Standard Plan</h4>
                                <ul class="list">
                                    <li>Email marketing</li>
                                    <li>Unlimited chat history</li>
                                    <li>Unlimited landing pages</li>
                                    <li>Automation templates</li>
                                    <li>Great Customer Support</li>
                                    <li>Unlimited lead funnels</li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-xl-4 col-md-6 col-sm-10 aos-init aos-animate" data-aos="fade-up"
                            data-aos-delay="200" data-aos-duration="1500" data-aos-offset="50">
                            <div class="pricing-item style-three">
                                <div class="circle"><img src="{{ asset('frontend/assets/images/shapes/price-circle.png') }}" alt="Shape">
                                </div>
                                <div class="price"><span class="prev">$</span>93<span class="next">/month</span>
                                </div>
                                <div class="text">Smart Pricing for good services</div>
                                <a href="#" class="theme-btn">Choose Package <i
                                        class="fas fa-arrow-right"></i></a>
                                <h4 class="title">Premium Plan</h4>
                                <ul class="list">
                                    <li>Email marketing</li>
                                    <li>Unlimited chat history</li>
                                    <li>Unlimited landing pages</li>
                                    <li>Automation templates</li>
                                    <li>Great Customer Support</li>
                                    <li>Unlimited lead funnels</li>
                                </ul>
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

<x-frontend-app-layout :title="'User Pricing || GoFlixza - Your Hub for QR, Bar Codes & NFC V.Cards'">
    <section class="page-banner-area overlay py-120 rpy-120 rel z-1 bgs-cover text-center"
        style="
      background-image: url(https://img.freepik.com/free-photo/high-angle-cash-calculator_23-2149103926.jpg?t=st=1711992497~exp=1711996097~hmac=cba674665bb01df3d0bf2d4b9dcb482d199fafdfc976f1390185593de8dbb984&w=1380);
    ">
        <div class="container">
            <div class="banner-inner pt-70 rpt-60 text-black">
                <h1 class="page-title aos-init aos-animate" data-aos="fade-up" data-aos-duration="1500"
                    data-aos-offset="50">
                    User Pricing
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
                    {{-- <span class="save-percent"
                        style="background-image: url({{ asset('frontend/assets/images/shapes/title-shape.png') }});">Save 40%</span> --}}
                    <span class="save-percent">Save 40%</span>
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
                        @foreach ($monthly_plans as $monthly_plan)
                            <div class="col-xl-4 col-md-6 col-sm-10 aos-init aos-animate" data-aos="fade-up"
                                data-aos-duration="1500" data-aos-offset="50">
                                <div class="pricing-item style-three">
                                    <div class="circle"><img
                                            src="{{ asset('frontend/assets/images/shapes/price-circle.png') }}"
                                            alt="Shape">
                                    </div>
                                    <div class="price"><span
                                            class="prev fs-2 me-2">{{ $monthly_plan->currency }}</span>{{ $monthly_plan->price }}<span
                                            class="next">/month</span>
                                    </div>
                                    <div class="text">10 Qr Code For One Month</div>
                                    <a href="{{ route('user.subscribe.post', $monthly_plan->slug) }}"
                                        class="theme-btn">Choose Package <i class="fas fa-arrow-right"></i></a>
                                    <h4 class="title">{{ $monthly_plan->title }}</h4>
                                    <ul class="list">
                                        @if (!empty($monthly_plan->descriptions))
                                            @foreach (json_decode($monthly_plan->descriptions ?? '[]') as $description)
                                                <li>{{ $description }}</li>
                                            @endforeach
                                        @endif
                                    </ul>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
                <div class="tab-pane fade yearly show active" id="yearly">
                    <div class="row justify-content-center">
                        @foreach ($yearly_plans as $yearly_plan)
                            <div class="col-xl-4 col-md-6 col-sm-10 aos-init aos-animate" data-aos="fade-up"
                                data-aos-duration="1500" data-aos-offset="50">
                                <div class="pricing-item style-three">
                                    <div class="circle"><img
                                            src="{{ asset('frontend/assets/images/shapes/price-circle.png') }}"
                                            alt="Shape">
                                    </div>
                                    <div class="price"><span
                                            class="prev fs-2 me-2">{{ $yearly_plan->currency }}</span>{{ $yearly_plan->price }}<span
                                            class="next">/month</span>
                                    </div>
                                    <div class="text">5 Business Card</div>
                                    <a href="{{ route('user.subscribe.post', $yearly_plan->slug) }}"
                                        class="theme-btn">Choose Package <i class="fas fa-arrow-right"></i></a>
                                    <h4 class="title">{{ $yearly_plan->title }}</h4>
                                    <ul class="list">
                                        @if (!empty($yearly_plan->descriptions))
                                            @foreach (json_decode($yearly_plan->descriptions ?? '[]') as $description)
                                                <li>{{ $description }}</li>
                                            @endforeach
                                        @endif
                                    </ul>
                                </div>
                            </div>
                        @endforeach
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

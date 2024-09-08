<x-frontend-app-layout :title="'Bar Code || GoFlixza - Your Hub for QR, Bar Codes & NFC V.Cards'">
    <section class="page-banner-area overlay py-50 pt-100 rpy-120 rel z-1 bgs-cover text-center"
        style="background-image: url({{ asset('frontend/newimage/banner.jpg') }});">
        <div class="container">
            <div class="banner-inner pt-70 rpt-60 text-black">
                <h1 class="page-title  aos-init aos-animate" data-aos="fade-up" data-aos-duration="1500"
                    data-aos-offset="50">Bar Code</h1>
            </div>
        </div>
    </section>

    <section class="app-stor-area pt-100 pb-0 pb-lg-5 rpb-150 rel z-1">
        <div class="container mb-30">
            <div class="row justify-content-between align-items-center">
                <div class="col-xl-5 col-lg-6">
                    <div class="about-eight-content rel z-2 my-55 rmb-25 aos-init aos-animate" data-aos="fade-left"
                        data-aos-duration="1500" data-aos-offset="50">
                        <div class="section-title mb-30">
                            <h2>Generate Your Custom Barcodes Easily</h2>
                        </div>
                        <p>Create high-quality barcodes for your products, inventory, or any other needs with our
                            easy-to-use barcode generator. Customize your barcodes with different formats and styles to
                            fit your requirements. Whether you need a single barcode or bulk generation, our tool
                            provides a fast and efficient solution to streamline your processes. Generate barcodes
                            instantly and download them in various formats for seamless integration into your business
                            operations.</p>

                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="aos-init aos-animate" data-aos="fade-right" data-aos-duration="1500"
                        data-aos-offset="50">
                        <img class="rounded-3"
                            src="{{ asset('frontend/newimage/barcode-main.webp') }}"
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
    <section class="mt-5">
        <div class="container">
            <div class="row pt-0 pt-lg-5">
                <div class="col-xl-7 col-lg-9 col-md-11 mx-auto ">
                    <div class="section-title text-center mb-60 aos-init aos-animate" data-aos="fade-up"
                        data-aos-delay="100" data-aos-duration="1500" data-aos-offset="50">
                        <h2 class="text-center">Bar Code Pricing Plans</h2>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                @if ($barcode_plans->isEmpty())
                    <div class="col-12 text-center">
                        <p>No barcode plans available at the moment. Please check back later.</p>
                    </div>
                @else
                    @foreach ($barcode_plans as $barcode_plan)
                        @php
                            $imageCounts = [
                                'Standard' => 1,
                                'Enhanced' => 2,
                                'Professional' => 3,
                            ];

                            $imageCount = $imageCounts[$barcode_plan->title] ?? 0;
                        @endphp

                        <div class="col-xl-3 col-md-6 col-sm-10 aos-init" data-aos="fade-up" data-aos-duration="1500"
                            data-aos-offset="50">
                            <div class="pricing-item style-four">
                                <div class="icon">
                                    @for ($i = 0; $i < $imageCount; $i++)
                                        <!-- Changed <= to < to correctly match image count -->
                                        <img width="30px" src="{{ asset('frontend/newimage/pro.png') }}"
                                            alt="">
                                    @endfor
                                </div>

                                <h4 class="title">{{ $barcode_plan->title }}</h4>
                                <div class="price d-flex justify-content-center">
                                    <span class="prev">$</span>{{ number_format($barcode_plan->price / 12, 2) }}
                                    <span class="next ps-3">
                                        <div class="d-flex flex-column">
                                            <span><span class="fw-bold">USD</span>/month</span>
                                            <small class="pt-2 text-info">Billed Yearly</small>
                                        </div>
                                    </span>
                                </div>
                                <hr>
                                @php
                                    $descriptions = is_array($barcode_plan->descriptions)
                                        ? $barcode_plan->descriptions
                                        : json_decode($barcode_plan->descriptions);
                                @endphp
                                @if (!empty($descriptions))
                                    <ul class="icon-list">
                                        @foreach ($descriptions as $description)
                                            <li><i class="fas fa-checkmark"></i> {{ $description }}</li>
                                        @endforeach
                                    </ul>
                                @endif
                                <a href="{{ route('user_subscribe.register', $barcode_plan->slug) }}"
                                    class="theme-btn">Order Now</a>
                            </div>
                        </div>
                    @endforeach
                @endif

            </div>
        </div>
    </section>
    <section class="how-to-manage-area bgc-lighter pt-125 rpt-105 pb-125 rpb-80">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-7 col-lg-9">
                    <div class="section-title text-center mb-55 aos-init aos-animate" data-aos="fade-up"
                        data-aos-duration="1500" data-aos-offset="50">
                        <span class="subtitle-one mb-20"><i class="fas fa-tools"></i> How To Manage</span>
                        <h2>Ultimate Barcode Creator Design, Generate, and Manage Effortlessly!</h2>
                    </div>
                </div>
            </div>
            <div class="row gap-60 align-items-center">
                <div class="col-lg-6">
                    <div class="how-to-manage-image rmb-55 aos-init aos-animate" data-aos="fade-left"
                        data-aos-duration="1500" data-aos-offset="50">
                        <img src="{{ asset('frontend/newimage/how-to-manage.webp') }}"
                            alt="How To Manage">
                    </div>
                </div>
                <div class="col-lg-6 aos-init aos-animate" data-aos="fade-right" data-aos-duration="1500"
                    data-aos-offset="50">
                    <div class="feature-icon-box style-three">
                        <div class="icon-title">
                            <div class="icon"><i class="fas fa-check"></i></div>
                            <h5>Easy Barcode Generation</h5>
                        </div>
                        <p>Effortlessly create barcodes by entering product details and customizing settings. Our
                            intuitive interface ensures a smooth and hassle-free barcode generation process, suitable
                            for all your inventory needs.</p>
                    </div>
                    <div class="feature-icon-box style-three">
                        <div class="icon-title">
                            <div class="icon"><i class="fas fa-check"></i></div>
                            <h5>Efficient Barcode Management</h5>
                        </div>
                        <p>Save and organize your generated barcodes with our robust management system. Easily search,
                            retrieve, and update barcodes to maintain an accurate and up-to-date inventory database.</p>
                    </div>
                    <div class="feature-icon-box style-three">
                        <div class="icon-title">
                            <div class="icon"><i class="fas fa-check"></i></div>
                            <h5>Seamless Integration</h5>
                        </div>
                        <p>Integrate seamlessly with your existing systems and workflows. Our barcode solution supports
                            various formats and is compatible with popular inventory management software, enhancing
                            overall efficiency and productivity.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="about-area-seven pt-130 rpt-100 rel z-1 mb-5">
        <div class="container">
            <div class="row gap-90 align-items-center">
                <div class="col-lg-6">
                    <div class="about-content aos-init aos-animate" data-aos="fade-right" data-aos-duration="1500"
                        data-aos-offset="50">
                        <div class="section-title mb-30">
                            <h2>All-in-One Barcode Generator: Create, Organize, and Integrate Effortlessly</h2>
                        </div>
                        <p>Revolutionize your inventory management with our Smart Barcode Solutions. Effortlessly
                            generate barcodes tailored to your products, manage them efficiently with our robust
                            organizational tools, and seamlessly integrate with your existing systems. Enhance accuracy,
                            streamline operations, and keep your inventory up-to-date with our user-friendly interface
                            and powerful features.</p>
                        <div class="feature-icon-box mt-35">
                            <div class="icon">
                                <i class="fas fa-check"></i>
                            </div>
                            <div class="content">
                                <h5>Tailored Barcode Generation</h5>
                                <p>Customize and generate barcodes specifically suited to your product requirements. Our
                                    user-friendly interface allows you to easily input details and create barcodes that
                                    meet your precise specifications, ensuring accuracy and consistency across your
                                    inventory.</p>
                            </div>
                        </div>
                        <div class="feature-icon-box">
                            <div class="icon">
                                <i class="fas fa-check"></i>
                            </div>
                            <div class="content">
                                <h5>Robust Inventory Integration</h5>
                                <p>Seamlessly integrate our barcode solutions with your existing inventory systems. Our
                                    platform supports various formats and is designed to work effortlessly with popular
                                    inventory management software, enhancing operational efficiency and streamlining
                                    your inventory tracking process.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="about-seven-right-images mb-25 rmb-0 rmt-15 aos-init aos-animate" data-aos="fade-left"
                        data-aos-duration="1500" data-aos-offset="50">
                        <img src="{{ asset('frontend/newimage/about-seven-two1.webp') }}"
                            alt="About">
                        <div class="about-over">
                            <img src="{{ asset('frontend/newimage/barcode-generator.webp') }}"
                                alt="About">
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
    <section class="numbered-box-area rel pt-130 rpt-100 rel z-2">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-7 col-lg-9 col-md-11">
                    <div class="section-title text-center mb-60 aos-init aos-animate" data-aos="fade-up"
                        data-aos-delay="100" data-aos-duration="1500" data-aos-offset="50">
                        <h2>Transform Your Inventory with Smart Barcode Solutions</h2>
                        <p>Elevate your inventory management with our Smart Barcode Solutions. Easily generate
                            customized barcodes, streamline your tracking process, and integrate seamlessly with your
                            existing systems. Our solution provides a comprehensive approach to enhancing accuracy and
                            efficiency, ensuring your inventory remains organized and up-to-date.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-4 col-md-6 aos-init aos-animate" data-aos="fade-up" data-aos-duration="1500"
                    data-aos-offset="50">
                    <div class="numbered-box style-three">
                        <div class="content">
                            <h4><a href="{{ route('user.barcode.index') }}">Barcode Create</a></h4>
                            <p>offer a range of solutions to fit your needs, from basic to advanced features. Whether
                                you're just starting out or managing a large-scale operation, our plans are designed to
                                provide reliable and effective barcode management.</p>
                            <img src="{{ asset('frontend/newimage/barcode-create.webp') }}"
                                alt="Number Box">
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6 aos-init aos-animate" data-aos="fade-up" data-aos-delay="100"
                    data-aos-duration="1500" data-aos-offset="50">
                    <div class="numbered-box style-three bg-two">
                        <div class="content">
                            <h4><a href="{{ route('user.barcode.index') }}">Bulk Upload</a></h4>
                            <p>Easily manage and streamline your data with our bulk upload feature. This allows you to
                                upload large quantities of information in one go, saving time and reducing manual entry
                                errors. Perfect for handling extensive data sets, whether it's product inventories.</p>
                            <img src="{{ asset('frontend/newimage/bulk-barcode.webp') }}"
                                alt="Number Box">
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6 aos-init aos-animate" data-aos="fade-up" data-aos-delay="200"
                    data-aos-duration="1500" data-aos-offset="50">
                    <div class="numbered-box style-three bg-three">
                        <div class="content">
                            <h4><a href="{{ route('user.barcode.index') }}">Fast Generate</a></h4>
                            <p>Accelerate your workflow with our Fast Generate/Create feature. Instantly produce or set
                                up items, content, or data with minimal effort and time. Designed for efficiency, this
                                tool allows you to quickly generate multiple entries, streamline repetitive tasks.</p>
                            <img src="{{ asset('frontend/newimage/barcodespeed.webp') }}"
                                alt="Number Box">
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

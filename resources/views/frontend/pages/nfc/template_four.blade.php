<!DOCTYPE html>
<html lang="en">

<head>
    <title>{{ optional($nfc_card->nfcData)->first_name }} {{ optional($nfc_card->nfcData)->last_name }}</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <link rel="shortcut icon"
        href="{{ !empty($site->system_logo_white) && file_exists(public_path('storage/webSetting/systemLogoWhite/' . $site->system_logo_white)) ? asset('storage/webSetting/systemLogoWhite/' . $site->system_logo_white) : asset('frontend/assets/images/logos/logo.png') }}"
        type="image/x-icon" />

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
    <!-- Slick CSS -->
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css" />
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.5.0/css/swiper.min.css">
    <!-- Style Here -->
    <style>
        @import url("https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Raleway:ital,wght@0,100..900;1,100..900&display=swap");

        :root {
            --body-font-family: "Raleway", sans-serif;
            --tem-one-name-font-family: "Raleway", sans-serif;
            --tem-one-designation-font-family: "Raleway", sans-serif;
            --white: #fff;
            --tem-one-name-color: #fff;
            --tem-one-name-font-size: 40px;
            --tem-one-designation-color: #fff;
            --tem-one-bio-title-color: #624aac;
            --tem-profile-image-bg: #624aac;
            --tem-one-social-icons-color: #fff;
            --tem-one-social-icons-bg: #fff;
            --tem-one-social-icons-font-size: 18px;
            --tem-one-bio-title-font-size: 30px;
            --tem-one-service-title-color: #fff;
            --tem-one-service-title-font-size: 20px;
            --tem-one-service-box-bg: #624aac;
            --tem-one-address-color: #fff;
            --button_bg_color: {{ $nfc_card->button_bg_color }};
            --button_title_color: {{ $nfc_card->button_title_color }};
        }

        body {
            display: flex;
            justify-content: center;
            align-items: center;
            margin: 0;
            padding: 0;
            font-family: var(--body-font-family);
            letter-spacing: 2px;
        }

        .nfc-mobile-frame {
            max-width: 576px;
            min-height: 100vh;
            overflow: hidden;
            position: relative;
        }

        .nfc-mobile-frame .card {
            width: 100%;
            height: 100%;
        }

        .nfc-one-cover-img {
            background: center / cover no-repeat;
            width: 100%;
            height: 400px;
            object-fit: cover;
            box-sizing: border-box;
        }

        @media (max-width: 768px) {
            .nfc-one-cover-img {
                height: 300px;
            }
        }

        @media (max-width: 576px) {
            .nfc-one-cover-img {
                height: 250px;
            }
        }

        a {
            text-decoration: none;
        }

        @media (max-width: 767px) {
            .nfc-mobile-frame {
                max-width: 390px;
            }

            .nfc-mobile-frame .card {
                border-radius: 0 !important;
            }

            .mobile-d-none {
                display: none;
            }
        }

        .product-sliders {
            position: relative;
            width: 90vw;
            height: 300px;
        }

        .slick-slide {
            margin-right: 20px;
        }

        .slick-slide:last-child {
            margin-right: 0;
            border-radius: 10px;
        }

        .tem-four-social-box {
            background-color: #eee;
            width: 80%;
            margin: auto;
            border-radius: 30px;
            text-align: center;
            padding: 5px;
            display: flex;
            justify-content: space-evenly;
            align-items: center;
        }

        .social-icons {
            color: #252525;
        }

        .four-contact-info {
            background-color: red;
            width: 50px;
            height: 50px;
            display: flex;
            justify-content: center;
            align-items: center;
            color: white;
            border-radius: 50%;
            font-size: 28px;
        }

        .contact-box-body-four {
            display: flex;
            justify-content: center;
            align-items: center;
            box-shadow: rgba(0, 0, 0, 0.15) 0px 5px 15px;
            border-radius: 10px;
        }

        .gallery-img-four {
            width: 100%;
            height: 400px;
            object-fit: cover;
            box-shadow: rgba(0, 0, 0, 0.1) 0px 0px 5px, rgba(0, 0, 0, 0.1) 0px 0px 1px;
        }

        .cubeSwiper {
            background: center / cover;
            width: 400px;
            height: 100%;
            margin: auto;
        }

        .cubeSwiper .swiper-slide img {
            display: block;
            width: 100%;
            object-fit: cover;
        }

        .cubeSwiper .swiper-pagination-bullet-active {
            background: hotpink;
        }

        @media (max-width: 768px) {

            html,
            body {
                width: 100%;
                overflow-x: hidden;
            }
        }

        .product-sliders>.swiper-slide__content {
            position: absolute;
            top: 0;
        }

        .swiper-slide {
            height: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: all 200ms linear;
            transform: scale(0.8);
        }

        .swiper-slide.swiper-slide-active {
            transform: scale(1);
            background: transparent;
        }

        .swiper-button-next::after,
        .swiper-button-prev::after {
            display: none !important;
        }

        .custom-next i,
        .custom-prev i {
            font-size: 24px;
            color: #000;
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
        }

        .custom-next i {
            right: 10px;
        }

        .custom-prev i {
            left: 10px;
        }

        .footer-nav-tem1 {
            box-shadow: rgba(149, 157, 165, 0.2) 0px 8px 24px;
            background-color: var(--info-500);
            width: 575px;
            height: 62px;
            margin: auto;
        }

        .footer-nav-tem1 ul {
            position: relative;
            z-index: 10;
            width: 100%;
            list-style: none;
            box-shadow: rgb(255 255 255 / 20%) 0px 2px 8px;
            background: white;
        }

        .footer-nav-tem1 ul li {
            flex: 1;
        }

        .footer-nav-tem1 ul li a {
            display: block;
            font-size: var(--template-one-others-font-size);
            text-align: center;
            font-weight: 600;
            text-transform: capitalize;
            line-height: 1;
            color: var(--template-one-color-white);
            text-decoration: none;
        }

        .footer-nav-tem1 ul li.active a {
            background-color: black;
            padding: 24px;
            color: white;
        }

        .profile-image-wrapper {
            width: 160px;
            height: 160px;
            border-radius: 3%;
            background: linear-gradient(to right bottom, #47eefa, #2de4fd, #10daff, #00d0ff, #12c5ff, #19bfff, #26b8ff, #34b1fe, #32adfe, #33a8fe, #35a4fe, #399ffd);
            display: inline-block;
            padding: 5px;
        }

        .profile-image-box {
            margin-top: -80px;
            position: relative
        }

        .profile-main-img {
            width: 150px;
            height: 150px;
            background: rgba(255, 255, 255, 0.493);
            border-radius: 3%;
        }
    </style>
    <!-- Style Here End -->
</head>

<body>
    <main>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 d-flex justify-content-center align-items-center px-0">
                    <div class="nfc-mobile-frame shadow-sm">
                        <div class="card p-0 border-0 shadow-none tem-one-scroll rounded-0" style="overflow-x: hidden">
                            <div class="card-header p-0 border-0">
                                <div class="nfc-one-cover-img-box">
                                    <div class="nfc-one-cover-img"
                                        style="background-image: url({{ !empty($nfc_card->banner_image) && file_exists(public_path('storage/nfc/' . optional($nfc_card)->banner_image)) ? asset('storage/nfc/' . optional($nfc_card)->banner_image) : asset('frontend/images/no_image.png') }})">
                                    </div>
                                </div>
                            </div>
                            <div class="card-body p-0 tem-one-about-content">
                                <div class="w-100">
                                    <div class="text-center profile-image-box">
                                        <div class="profile-image-wrapper">
                                            <img class="profile-main-img"
                                                src="{{ !empty($nfc_card->profile_image) && file_exists(public_path('storage/nfc/' . optional($nfc_card)->profile_image)) ? asset('storage/nfc/' . optional($nfc_card)->profile_image) : asset('frontend/images/no_image.png') }}"
                                                class="img-fluid banner-image" alt="banner" />
                                        </div>
                                    </div>
                                    <div class="px-3">
                                        <!-- personal Detailis -->
                                        <div
                                            style="background-image: url({{ asset('images/appointment-bg.png') }});background-position: center; background-repeat: no-repeat;">
                                            <div class="text-center pt-4">
                                                <h2>
                                                    <span
                                                        class="first_name">{{ optional($nfc_card->nfcData)->first_name }}</span>
                                                    <span
                                                        class="last_name">{{ optional($nfc_card->nfcData)->last_name }}</span>
                                                </h2>
                                                <h6 class="fw-bolder" style="color: #858585">
                                                    {{ optional($nfc_card)->designation }}</h6>
                                                @if (!empty($nfc_card->nfcData))
                                                    @php
                                                        $nfcData = $nfc_card->nfcData;
                                                    @endphp
                                                    @if (!empty($nfcData->company_name))
                                                        <h6 class="fw-bolder" style="color: #858585">
                                                            {{ $nfcData->company_name }}</h6>
                                                    @else
                                                        <p>No company title found.</p>
                                                    @endif
                                                @else
                                                    <p>No NFC data available.</p>
                                                @endif
                                                <h5 class="fw-bolder pt-3 bio_title">
                                                    {{ optional($nfc_card->nfcData)->bio_title }}</h5>
                                            </div>
                                        </div>
                                        <!-- Social -->
                                        @if ($nfc_card->social_links_show == '1')
                                            <div class="tem-four-social-box">
                                                @if (optional($nfc_card->nfcData)->facebook_url)
                                                    <a href="{{ optional($nfc_card->nfcData)->facebook_url }}"
                                                        class="icon fa-2x">
                                                        <i class="fa-brands fa-facebook-f social-icons"></i>
                                                    </a>
                                                @endif
                                                @if (optional($nfc_card->nfcData)->instagram_url)
                                                    <a href="{{ optional($nfc_card->nfcData)->instagram_url }}"
                                                        class="icon fa-2x">
                                                        <i class="fa-brands fa-instagram social-icons"></i>
                                                    </a>
                                                @endif
                                                @if (optional($nfc_card->nfcData)->youtube_url)
                                                    <a href="{{ optional($nfc_card->nfcData)->youtube_url }}"
                                                        class="icon fa-2x">
                                                        <i class="fa-brands fa-youtube social-icons"></i>
                                                    </a>
                                                @endif
                                                @if (optional($nfc_card->nfcData)->linkedin_url)
                                                    <a href="{{ optional($nfc_card->nfcData)->linkedin_url }}"
                                                        class="icon fa-2x">
                                                        <i class="fa-brands fa-linkedin-in social-icons"></i>
                                                    </a>
                                                @endif
                                                @if (optional($nfc_card->nfcData)->whatsapp_url)
                                                    <a href="{{ optional($nfc_card->nfcData)->whatsapp_url }}"
                                                        class="icon fa-2x">
                                                        <i class="fa-brands fa-whatsapp social-icons"></i>
                                                    </a>
                                                @endif
                                                @if (optional($nfc_card->nfcData)->twitter_url)
                                                    <a href="{{ optional($nfc_card->nfcData)->twitter_url }}"
                                                        class="icon fa-2x">
                                                        <i class="fa-brands fa-twitter social-icons"></i>
                                                    </a>
                                                @endif
                                            </div>
                                        @endif
                                        <div class="pt-4">
                                            @if (!empty($nfc_card->bio_description))
                                                <p class="text-center">
                                                    {{ $nfc_card->bio_description }}
                                                </p>
                                            @endif
                                        </div>
                                        <!-- Contact Info -->
                                        <div
                                            style="background-image: url({{ asset('images/appointment-bg.png') }});background-position: center; background-repeat: no-repeat;">
                                            @if (!empty($nfc_card->nfcData))
                                                <div class="row pt-5">
                                                    {{-- Email Section --}}
                                                    @if (!empty(optional($nfc_card->nfcData)->email_personal) || !empty(optional($nfc_card->nfcData)->email_work))
                                                        <div class="col-sm-6">
                                                            <div class="card date-card-tem3 border-0">
                                                                <div class="card-header border-0 bg-transparent"
                                                                    style="margin-bottom: -25px">
                                                                    <div class="four-contact-info"
                                                                        style="background-image: linear-gradient(to right bottom, #fd6da2, #fd679e, #fd619a, #fc5a96, #fc5392, #fc4f8f, #fc4b8d, #fc468a, #fc4489, #fc4288, #fc4086, #fc3e85);">
                                                                        <i class="fa-solid fa-envelope ps-1"></i>
                                                                    </div>
                                                                </div>
                                                                <div
                                                                    class="card-body d-flex align-content-center p-2 contact-box-body-four">
                                                                    <div class="ps-3 pt-3">
                                                                        <div style="margin-bottom: -5px !important">
                                                                            @if (!empty(optional($nfc_card->nfcData)->email_personal))
                                                                                <p class="fw-bold text-mute">E-mail Address (Personal)</p>
                                                                                <p class="text-mute mb-0">
                                                                                    {{ optional($nfc_card->nfcData)->email_personal }}
                                                                                </p>
                                                                            @endif
                                                                        </div>
                                                                        <div>
                                                                            @if (!empty(optional($nfc_card->nfcData)->email_work))
                                                                            <p class="fw-bold text-mute">E-mail Address (Work)</p>
                                                                            <p class="text-mute mb-0">
                                                                                    {{ optional($nfc_card->nfcData)->email_work }}
                                                                                </p>
                                                                            @endif
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    @endif
                                                    {{-- Phone Section --}}
                                                    @if (!empty(optional($nfc_card->nfcData)->phone_personal) || !empty(optional($nfc_card->nfcData)->phone_work))
                                                        <div class="col-sm-6">
                                                            <div class="card date-card-tem3 mt-lg-0 border-0">
                                                                <div class="card-header border-0 bg-transparent"
                                                                    style="margin-bottom: -25px">
                                                                    <div class="four-contact-info"
                                                                        style="background-image: linear-gradient(to right bottom, #feb129, #feab25, #ffa522, #ff9f1f, #ff991c, #ff9218, #ff8c14, #ff8511, #ff7d0b, #ff7407, #ff6b04, #ff6103);">
                                                                        <i class="fa-solid fa-phone ps-1"></i>
                                                                    </div>
                                                                </div>
                                                                <div
                                                                    class="card-body d-flex align-content-center p-2 contact-box-body-four">
                                                                    <div class="ps-3 pt-3">
                                                                        <p class="fw-bold text-mute">Mobile Number</p>
                                                                        <div style="margin-bottom: -5px !important">
                                                                            @if (!empty(optional($nfc_card->nfcData)->phone_personal))
                                                                                <p class="text-mute mb-0">
                                                                                    {{ optional($nfc_card->nfcData)->phone_personal }}
                                                                                    <small>(Personal)</small>
                                                                                </p>
                                                                            @endif
                                                                        </div>
                                                                        <div>
                                                                            @if (!empty(optional($nfc_card->nfcData)->phone_work))
                                                                                <p class="text-mute mb-0">
                                                                                    {{ optional($nfc_card->nfcData)->phone_work }} <small>(Work)</small>
                                                                                </p>
                                                                            @endif
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    @endif
                                                    {{-- Location Section --}}
                                                    @if (
                                                        !empty(optional($nfc_card->nfcData)->location) ||
                                                            !empty(optional($nfc_card->nfcData)->address_line_one) ||
                                                            !empty(optional($nfc_card->nfcData)->address_line_two))
                                                        <div class="col-sm-6 mt-4">
                                                            <div class="card date-card-tem3 mt-lg-0 border-0">
                                                                <div class="card-header border-0 bg-transparent"
                                                                    style="margin-bottom: -25px">
                                                                    <div class="four-contact-info"
                                                                        style="background-image: linear-gradient(to right bottom, #ef74fd, #e96ffd, #e369fd, #dd64fe, #d65ffe, #d25cfe, #ce59fe, #ca56fe, #c854fe, #c652fe, #c451fe, #c24ffe);">
                                                                        <i class="fa-solid fa-location-dot ps-1"></i>
                                                                    </div>
                                                                </div>
                                                                <div
                                                                    class="card-body d-flex align-content-center p-2 contact-box-body-four">
                                                                    <div class="ps-3 py-3">
                                                                        <small
                                                                            class="fw-bold text-mute">Location</small>
                                                                        <br>
                                                                        <div style="margin-bottom: -5px !important">
                                                                            @if (!empty(optional($nfc_card->nfcData)->location))
                                                                                @php
                                                                                    $location =
                                                                                        optional($nfc_card->nfcData)->location;
                                                                                    $halfLength = strlen($location) / 2;
                                                                                    $firstHalf = substr(
                                                                                        $location,
                                                                                        0,
                                                                                        $halfLength,
                                                                                    );
                                                                                    $secondHalf = substr(
                                                                                        $location,
                                                                                        $halfLength,
                                                                                    );
                                                                                @endphp
                                                                                <small class="text-mute mb-0"
                                                                                    style="word-spacing: -3px; margin-bottom: -5px">{{ $firstHalf }}</small>
                                                                                <small class="text-mute mb-0">
                                                                                    {{ $secondHalf }}</small>
                                                                            @endif
                                                                        </div>
                                                                        <div style="margin-bottom: -5px !important">
                                                                            @if (!empty(optional($nfc_card->nfcData)->address_line_one))
                                                                                <small class="text-mute mb-0">
                                                                                    {{ optional($nfc_card->nfcData)->address_line_one }}
                                                                                </small>
                                                                            @endif
                                                                        </div>
                                                                        <div>
                                                                            @if (!empty(optional($nfc_card->nfcData)->address_line_two))
                                                                                <small class="text-mute mb-0">
                                                                                    {{ optional($nfc_card->nfcData)->address_line_two }}
                                                                                </small>
                                                                            @endif
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    @endif
                                                    {{-- Date of Birth Section --}}
                                                    @if (!empty(optional($nfc_card->nfcData)->date_of_birth))
                                                        <div class="col-sm-6 mt-4">
                                                            <div class="card date-card-tem3 mt-lg-0 border-0">
                                                                <div class="card-header border-0 bg-transparent"
                                                                    style="margin-bottom: -25px">
                                                                    <div class="four-contact-info"
                                                                        style="background-image: linear-gradient(to right bottom, #46e8f9, #35e0fc, #28d8fd, #24d0fe, #2ac7fe, #2bc1fe, #30bcfe, #38b6fd, #36b3fd, #36affd, #36acfd, #38a8fd);">
                                                                        <i class="fa-solid fa-cake-candles ps-1"></i>
                                                                    </div>
                                                                </div>
                                                                <div
                                                                    class="card-body d-flex align-content-center p-2 contact-box-body-four">
                                                                    <div class="ps-3 py-3">
                                                                        <small class="fw-bold text-mute">Date Of
                                                                            Birth</small>
                                                                        <br>
                                                                        <small class="text-muted mb-0">
                                                                            {{ \Carbon\Carbon::parse(optional($nfc_card->nfcData)->date_of_birth)->format('m-j-Y') }}
                                                                            (DB)
                                                                        </small>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    @endif
                                                </div>
                                            @endif
                                        </div>
                                        <!-- Services-->
                                        <div class="container mt-5">
                                            <div class="row">
                                                <div class="col-12">
                                                    <h4 class="fw-bold text-center"><span
                                                            style="border-bottom: 4px solid #FF9419; border-radius: 10px; padding: 5px;">Services</span>
                                                    </h4>
                                                </div>
                                                <div class="col-lg-12">
                                                    <div class="pt-4">
                                                        @foreach ($nfc_card->nfcService as $service)
                                                            <div class="d-flex align-items-center mb-4">
                                                                <div>
                                                                    <img class="rounded-2 img-fluid"
                                                                        style="width: 300px;"
                                                                        src="{{ !empty($service->service_icon) && file_exists(public_path('storage/nfc/service/' . optional($service)->service_icon)) ? asset('storage/nfc/service/' . optional($service)->service_icon) : asset('frontend/images/no_image.png') }}"
                                                                        alt="" />
                                                                </div>
                                                                <div class="ps-3">
                                                                    <h6 class="special-font fw-bold">
                                                                        {{ $service->service_name }}
                                                                    </h6>
                                                                    <p class="text-justify mb-0"
                                                                        style="font-size: 14px !important">
                                                                        {{ $service->service_description }}
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        @endforeach
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Gallery -->
                                        @if ($nfc_card->galleries_show == '1' && $nfc_card->nfcGallery && $nfc_card->nfcGallery->isNotEmpty())
                                            @if ($nfc_card->galleries_show)
                                                <div class="container mt-5">
                                                    <div class="row">
                                                        <div class="col-12">
                                                            <h4 class="fw-bold text-center"><span
                                                                    style="border-bottom: 4px solid #FF9419; border-radius: 10px; padding: 5px;">Gallery</span>
                                                            </h4>
                                                        </div>
                                                        <div class="col-lg-12">
                                                            <div class="pt-4">
                                                                <!-- Swiper Cube Slider Container -->
                                                                <figure class="cube-parent-container">
                                                                    <div class="swiper cubeSwiper">
                                                                        <div class="swiper-wrapper">
                                                                            @foreach ($nfc_card->nfcGallery as $gallery)
                                                                                <div class="swiper-slide">
                                                                                    @if ($gallery->gallery_type == 'image')
                                                                                        <img class="img-fluid gallery-img-four"
                                                                                            src="{{ !empty($gallery->gallery_attachment) && file_exists(public_path('storage/nfc/gallery/' . optional($gallery)->gallery_attachment)) ? asset('storage/nfc/gallery/' . optional($gallery)->gallery_attachment) : asset('frontend/images/no_image.png') }}"
                                                                                            alt="" />
                                                                                    @else
                                                                                        <div class="video-wrapper">
                                                                                            <iframe width="600"
                                                                                                height="338"
                                                                                                src="https://www.youtube.com/embed/{{ optional($gallery)->gallery_link }}"
                                                                                                frameborder="0"
                                                                                                allowfullscreen></iframe>
                                                                                        </div>
                                                                                    @endif
                                                                                </div>
                                                                            @endforeach
                                                                        </div>
                                                                        <!-- Swiper Pagination -->
                                                                        <div class="swiper-pagination"></div>
                                                                    </div>
                                                                </figure>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endif
                                        @endif
                                        <!-- Gallery -->
                                        @if ($nfc_card->products_show == '1' && $nfc_card->nfcProduct && $nfc_card->nfcProduct->isNotEmpty())
                                            <div class="mt-4">
                                                <div class="row">
                                                    <div class="col-12">
                                                        <h4 class="fw-bold text-center">
                                                            <span
                                                                style="border-bottom: 4px solid #FF9419; border-radius: 10px; padding: 5px;">
                                                                Products
                                                            </span>
                                                        </h4>
                                                    </div>
                                                </div>
                                                <div class="product-sliders swiper-container">
                                                    <div class="swiper-wrapper">
                                                        @foreach ($nfc_card->nfcProduct as $product)
                                                            <div class="swiper-slide">
                                                                <div class="card rounded-5">
                                                                    <img class="img-fluid"
                                                                        style="border-top-right-radius: 30px; border-top-left-radius: 30px"
                                                                        src="{{ !empty($product->product_icon) &&
                                                                        file_exists(public_path('storage/nfc/product/' . optional($product)->product_icon))
                                                                            ? asset('storage/nfc/product/' . optional($product)->product_icon)
                                                                            : asset('frontend/images/no_image.png') }}"
                                                                        alt="{{ $product->product_name }}">
                                                                    <div class="card-body">
                                                                        <h5 class="card-title">
                                                                            {{ $product->product_name }}</h5>
                                                                        <p class="card-text">
                                                                            @if ($product->product_currency == 'taka')
                                                                                Tk
                                                                            @elseif($product->product_currency == 'euro')
                                                                                €
                                                                            @elseif($product->product_currency == 'dollar')
                                                                                $
                                                                            @elseif($product->product_currency == 'pound')
                                                                                £
                                                                            @endif
                                                                            {{ $product->product_price }}
                                                                        </p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        @endforeach
                                                    </div>
                                                    <!-- Custom Font Awesome navigation buttons -->
                                                    <div class="swiper-button-next custom-next">
                                                        <i class="fas fa-long-arrow-alt-right"></i>
                                                    </div>
                                                    <div class="swiper-button-prev custom-prev">
                                                        <i class="fas fa-long-arrow-alt-left"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        @endif
                                        @if ($nfc_card->testimonials_show == '1' && $nfc_card->nfcTestimonial && $nfc_card->nfcTestimonial->isNotEmpty())
                                            <div class="mt-4">
                                                <div class="row">
                                                    <div class="col-12">
                                                        <h4 class="fw-bold text-center">
                                                            <span
                                                                style="border-bottom: 4px solid #FF9419; border-radius: 10px; padding: 5px;">
                                                                Testimonial
                                                            </span>
                                                        </h4>
                                                    </div>
                                                </div>
                                                <div class="testimonial-sliders swiper-container">
                                                    <!-- Additional required wrapper -->
                                                    <div class="swiper-wrapper">
                                                        <!-- Dynamic Slides -->
                                                        @foreach ($nfc_card->nfcTestimonial as $testimonial)
                                                            <div class="swiper-slide">
                                                                <div class="card rounded-5">
                                                                    <img class="img-fluid"
                                                                        style="border-top-right-radius: 30px; border-top-left-radius: 30px"
                                                                        src="{{ !empty($testimonial->testimonial_image) && file_exists(public_path('storage/nfc/testimonial/' . optional($testimonial)->testimonial_image)) ? asset('storage/nfc/testimonial/' . optional($testimonial)->testimonial_image) : asset('frontend/images/no_image.png') }}"
                                                                        alt="{{ $product->product_name }}">
                                                                    <div class="card-body">
                                                                        <h5 class="">
                                                                            {{ $testimonial->testimonial_name }}
                                                                        </h5>
                                                                        <p class="">
                                                                            {{ $testimonial->testimonial_description }}
                                                                        </p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        @endforeach
                                                    </div>
                                                    <!-- Custom Font Awesome navigation buttons -->
                                                    <div class="swiper-button-next custom-next">
                                                        <i class="fas fa-long-arrow-alt-right"></i>
                                                    </div>
                                                    <div class="swiper-button-prev custom-prev">
                                                        <i class="fas fa-long-arrow-alt-left"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        @endif
                                        <!-- Form -->
                                        <div class="mt-5">
                                            <h3 class="fw-bold text-center pt-2"
                                                style="color: #1c344f;">
                                                Inquiry
                                            </h3>
                                            <div class="pt-4 px-5">
                                                <form action="{{ route('individual-message.store') }}"
                                                    method="post">
                                                    @csrf
                                                    <input type="hidden" name="user_id"
                                                        value="{{ optional($nfc_card)->user_id }}">
                                                    <input type="hidden" name="nfc_id"
                                                        value="{{ optional($nfc_card)->id }}">
                                                    <input type="hidden" name="nfc_code"
                                                        value="{{ optional($nfc_card)->code }}">
                                                    <div class="row">
                                                        <div class="col mb-2">
                                                            <div class="fv-row my-3">
                                                                <x-metronic.label
                                                                    class="fw-semibold fs-6 mb-2 required">Name
                                                                    <span class="text-danger fs-1"
                                                                        style="position: relative;top: 0.6rem;">*</span>
                                                                </x-metronic.label>
                                                                <x-metronic.input type="text" name="name"
                                                                    value="{{ old('name') }}"
                                                                    class="form-control form-control-solid mb-3 mb-lg-0"
                                                                    placeholder="Robert Duff" required />
                                                            </div>
                                                        </div>
                                                        <div class="col mb-2">
                                                            <div class="fv-row my-3">
                                                                <x-metronic.label
                                                                    class="fw-semibold fs-6 mb-2 required">Email
                                                                    <span class="text-danger fs-1"
                                                                        style="position: relative;top: 0.6rem;">*</span>
                                                                </x-metronic.label>
                                                                <x-metronic.input type="email" name="email"
                                                                    value="{{ old('email') }}"
                                                                    class="form-control form-control-solid mb-3 mb-lg-0"
                                                                    placeholder="example@mail.com" required />
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col mb-2">
                                                            <div class="fv-row my-3">
                                                                <x-metronic.label
                                                                    class="fw-semibold fs-6 mb-2">Phone</x-metronic.label>
                                                                <x-metronic.input type="text" name="phone"
                                                                    value="{{ old('phone') }}"
                                                                    class="form-control form-control-solid mb-3 mb-lg-0"
                                                                    placeholder="01*******" />
                                                            </div>
                                                        </div>
                                                        <div class="col mb-2">
                                                            <div class="fv-row my-3">
                                                                <x-metronic.label
                                                                    class="fw-semibold fs-6 mb-2">Headline</x-metronic.label>
                                                                <x-metronic.input type="text" name="headline"
                                                                    value="{{ old('headline') }}"
                                                                    class="form-control form-control-solid mb-3 mb-lg-0"
                                                                    placeholder="Headline" />
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col mb-2">
                                                            <div class="fv-row my-3">
                                                                <x-metronic.label
                                                                    class="fw-semibold fs-6 mb-2 required">Message
                                                                    <span class="text-danger fs-1"
                                                                        style="position: relative;top: 0.6rem;">*</span>
                                                                </x-metronic.label>
                                                                <textarea class="form-control form-control-solid" rows="5" name="message" value="{{ old('message') }}"
                                                                    placeholder="Enter Message" required></textarea>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row mb-5 pb-5" style="margin-bottom: 2.5rem;">
                                                        <div class="col mb-2 text-center">
                                                            <button type="submit"
                                                                class="btn btn-sm mt-2 px-4 rounded-pill"
                                                                style="background-color: #1c344f;color: #fff;">
                                                                Submit
                                                            </button>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- Footer --}}
        <div class="container">
            <div class="row fixed-bottom footer-nav-area-tem1">
                <div class="col-lg-12">
                    <div class="footer-nav-tem1 position-relative">
                        <ul class="h-100 d-flex align-items-center justify-content-between ps-0">
                            <li class="active">
                                <a href="" download="">
                                    <i class="fa-solid fa-qrcode"></i>
                                    <span>QR</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="copy-link">
                                    <i class="fa-solid fa-copy"></i>
                                    <span>Copy Link</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="nfc_contact_btn_pc">
                                    <i class="fa-solid fa-file-arrow-down"></i>
                                    <span>Add Contact</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
    <script src="{{ asset('frontend/assets/js/fontawesome.js') }}"></script>
    <!-- Slick JS -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.5.0/js/swiper.min.js"></script>
    <script>
        $(document).ready(function() {
            $(".slick-slider").slick({
                slidesToShow: 2,
                slidesToScroll: 2,
                autoplay: true,
                responsive: [{
                        settings: {
                            slidesToShow: 1,
                            slidesToScroll: 1,
                        },
                    },
                    {
                        settings: {
                            slidesToShow: 3,
                            slidesToScroll: 3,
                        },
                    },
                ],
            });
        });
    </script>
    <script>
        'use strict';
        function downloadToFile(content, filename, contentType) {
            const a = document.createElement('a');
            const file = new Blob([content], {
                type: contentType
            });

            a.href = URL.createObjectURL(file);
            a.download = filename;
            a.click();

            URL.revokeObjectURL(a.href);
        }

        function getBase64Image(imgUrl, callback) {
            const img = new Image();
            img.crossOrigin = 'Anonymous';
            img.onload = () => {
                const canvas = document.createElement('canvas');
                canvas.width = img.width;
                canvas.height = img.height;
                const ctx = canvas.getContext('2d');
                ctx.drawImage(img, 0, 0);
                const dataURL = canvas.toDataURL('image/jpeg');
                callback(dataURL.replace(/^data:image\/(png|jpeg);base64,/, ''));
            };
            img.src = imgUrl;
        }

        const makeVCardVersion = () => `VERSION:3.0`;
        const makeVCardInfo = (lastName, firstName) => `N:${lastName};${firstName};;;`;
        const makeVCardName = (firstName, lastName) => `FN:${firstName} ${lastName}`;
        const makeVCardOrg = (org) => `ORG:${org}`;
        const makeVCardTitle = (title) => `TITLE:${title}`;
        const makeVCardPhoto = (imgBase64) => `PHOTO;ENCODING=b;TYPE=JPEG:${imgBase64}`;
        const makeVCardTel = (phone) => `TEL;TYPE=CELL:${phone}`;
        const makeVCardAdr = (location, locationUrl) =>
            `ADR;TYPE=HOME:;;${location || ''};${locationUrl || ''};;;;`;
        // const makeVCardAdr = (addressLine1, addressLine2) =>
        //     `ADR;TYPE=HOME:;;${addressLine1 || ''};${addressLine2 || ''};;;;`;
        const makeVCardEmail = (email) => `EMAIL:${email}`;
        const makeVCardUrl = (url) => `URL:${url}`;
        const makeVCardSocialProfile = (type, url) => `X-SOCIALPROFILE;TYPE=${type}:${url}`;
        const makeVCardTimeStamp = () => `REV:${new Date().toISOString()}`;

        function makeVCard(profileImageBase64) {
            const firstName = '{{ optional($nfc_card->nfcData)->first_name }}';
            const lastName = '{{ optional($nfc_card->nfcData)->last_name }}';
            const designation = '{{ optional($nfc_card->nfcData)->designation }}';
            const phone = '{{ $nfc_card->nfcData->phone_personal }}';
            const email = '{{ $nfc_card->nfcData->email_personal }}';
            const addressLine1 = '{{ $nfc_card->nfcData->address_line_one }}';
            const addressLine2 = '{{ $nfc_card->nfcData->address_line_two }}';
            const linkedin = '{{ $nfc_card->nfcData->linkedin_url }}';

            let vcard = `BEGIN:VCARD\n${makeVCardVersion()}\n`;
            vcard += `${makeVCardInfo(lastName, firstName)}\n`;
            vcard += `${makeVCardName(firstName, lastName)}\n`;
            vcard += `${makeVCardTitle(designation)}\n`;

            if (profileImageBase64) {
                vcard += `${makeVCardPhoto(profileImageBase64)}\n`;
            }

            vcard += `${makeVCardTel(phone)}\n`;

            if (addressLine1 || addressLine2) {
                vcard += `${makeVCardAdr(addressLine1, addressLine2)}\n`;
            }

            if (email) {
                vcard += `${makeVCardEmail(email)}\n`;
            }

            if (linkedin) {
                vcard += `${makeVCardUrl(linkedin)}\n`;
                vcard += `${makeVCardSocialProfile('linkedin', linkedin)}\n`;
            }

            vcard += `${makeVCardTimeStamp()}\nEND:VCARD`;

            return vcard;
        }

        function handleContactButtonClick(event, isMobile) {


            const profileImage = '{{ asset('storage/nfc/' . optional($nfc_card->nfcData)->profile_image) }}';

            getBase64Image(profileImage, (base64Image) => {
                const vcard = makeVCard(base64Image);

                if (isMobile) {
                    const encodedVcfContent = encodeURIComponent(vcard);
                    const uri = 'data:text/vcard;charset=utf-8,' + encodedVcfContent;
                    window.location.href = uri;
                } else {
                    downloadToFile(vcard, 'contact.vcf', 'text/vcard');
                }
            });
        }

        document.querySelector('.nfc_contact_btn_pc').addEventListener('click', (event) => {
            handleContactButtonClick(event, false);
        });

        document.querySelector('.nfc_contact_btn_mobile').addEventListener('click', (event) => {
            handleContactButtonClick(event, true);
        });
    </script>
    <script>
        var swiper = new Swiper(".cubeSwiper", {
            effect: "cube",
            grabCursor: true,
            pauseOnMouseEnter: true,
            speed: 2000,
            autoplay: {
                delay: 2500,
                disableOnInteraction: false,
            },
            cubeEffect: {
                shadow: false,
                slideShadows: true,
                shadowOffset: 20,
                shadowScale: 0.94,
            },
            pagination: {
                el: ".swiper-pagination",
            },
        });
    </script>
    <script>
        $(document).ready(function() {
            var mySwiper = new Swiper(".product-sliders", {
                spaceBetween: 1,
                slidesPerView: 2,
                centeredSlides: true,
                roundLengths: true,
                autoplay: {
                    delay: 2500,
                    disableOnInteraction: false,
                },
                loop: true,
                loopAdditionalSlides: 30,
                navigation: {
                    nextEl: ".swiper-button-next",
                    prevEl: ".swiper-button-prev"
                }
            });
        });
    </script>
    <script>
        $(document).ready(function() {
            var mySwiper = new Swiper(".testimonial-sliders", {
                spaceBetween: 1,
                slidesPerView: 2,
                centeredSlides: true,
                roundLengths: true,
                autoplay: {
                    delay: 2500,
                    disableOnInteraction: false,
                },
                loop: true,
                loopAdditionalSlides: 30,
                navigation: {
                    nextEl: ".swiper-button-next",
                    prevEl: ".swiper-button-prev"
                }
            });
        });
    </script>
</body>

</html>

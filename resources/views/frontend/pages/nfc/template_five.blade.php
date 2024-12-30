<!DOCTYPE html>
<html lang="en">

<head>
    <title>{{ optional($nfc_card->nfcData)->first_name }} {{ optional($nfc_card->nfcData)->last_name }}</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon"
        href="{{ !empty($site->system_logo_white) && file_exists(public_path('storage/webSetting/systemLogoWhite/' . $site->system_logo_white)) ? asset('storage/webSetting/systemLogoWhite/' . $site->system_logo_white) : asset('frontend/assets/images/logos/logo.png') }}"
        type="image/x-icon">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- Slick CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.5.0/css/swiper.min.css">
    <!-- Custom Styles -->
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap');

        :root {
            --white: #fff;
            --button_bg_color: {{ $nfc_card->button_bg_color }};
            --button_title_color: {{ $nfc_card->button_title_color }};
            --tem-one-name-font-size: 40px;
            --tem-one-name-color: #fff;
            --tem-one-designation-color: #fff;
            --tem-one-service-box-bg: #624aac;
            --tem-one-service-title-color: #fff;
            --tem-one-bio-title-color: #624aac;
            --tem-one-social-icons-color: #fff;
            --tem-one-social-icons-font-size: 18px;
            --tem-profile-image-bg: #624aac;
            --body-font-family: "Poppins", sans-serif;
        }

        body {
            display: flex;
            justify-content: center;
            align-items: center;
            margin: 0;
            padding: 0;
            font-family: var(--body-font-family);
        }

        .nfc-mobile-frame {
            max-width: 576px;
            min-height: 100vh;
            overflow: hidden;
        }

        .nfc-mobile-frame .card {
            background-color: var(--white);
            width: 100%;
            height: 100%;
            overflow-y: auto;
        }

        .nfc-one-cover-img {
            background-size: cover;
            height: 400px;
            background-position: center;
        }

        .slick-slide {
            margin-right: 20px;
        }

        .slick-slide:last-child {
            margin-right: 0;
            border-radius: 10px;
        }

        @media only screen and (max-width: 768px) {
            .nfc-mobile-frame {
                max-width: 390px;
                width: 100%;
            }

            .nfc-mobile-frame .card {
                border-radius: 0;
            }
        }

        .video-wrapper {
            position: relative;
            padding-bottom: 56.25%;
            height: 0;
        }

        .video-wrapper iframe {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
        }

        .gradient-border {
            width: 150px;
            height: 150px;
            border-radius: 50%;
            background: linear-gradient(90deg, #b24592, #f15f79);
            padding: 4px;
            /* Adjust for the border thickness */
            position: relative;
            z-index: 15;
        }

        .gradient-border img {
            width: 100%;
            height: 100%;
            border-radius: 50%;
            background: #ffffff70;
            object-fit: cover;
        }

        .social-icon-five {
            background: linear-gradient(90deg, #b24592, #f15f79);
            box-shadow: 3px 2px 15px hsla(0, 0%, 62%, .8);
            cursor: pointer;
            height: 64px;
            min-width: 64px;
            transition: all .3s ease;
            width: 64px;
            text-decoration: none
        }

        .social-icons {
            color: white;
            margin-left: 3px;
        }

        .name-title {
            background: linear-gradient(90deg, #b24592, #f15f79);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        .event-card {
            border-radius: 10px;
            box-shadow: -6px -2px 16px hsla(0, 0%, 100%, .8), 6px 5px 20px hsla(0, 0%, 62%, .4);
        }

        .event-name {
            color: #181818;
            font-size: 14px;
        }

        .event-name-contact {
            color: #181818;
            font-size: 12px;
            word-break: break-all;
        }

        .heading-left,
        .vcard-nine .heading-right {
            background: linear-gradient(90deg, #b24592, #f15f79);
            color: #fff;
            font-size: 24px;
            font-weight: 600;
            padding: 16px 30px;
            width: -moz-fit-content;
            width: fit-content;
        }

        .heading-left {
            border-radius: 0 0 50px 0;
            margin-left: -16px;
        }

        .heading-right,
        .vcard-nine .heading-right {
            background: linear-gradient(90deg, #b24592, #f15f79);
            color: #fff;
            font-size: 24px;
            font-weight: 600;
            padding: 16px 30px;
            width: -moz-fit-content;
            width: fit-content;
        }

        .heading-right {
            border-radius: 0 0 0 50px;
            margin-left: auto;
            margin-right: -16px;
        }

        .qr-code-scanner {
            border: 1px solid #505050;
            border-radius: 20px;
        }

        .qr-profile img {
            height: 180px;
            min-width: 180px;
            -o-object-fit: cover;
            object-fit: cover;
            width: 180px;
        }

        .product-profile img {
            -o-object-fit: cover;
            height: 200px;
            min-width: 200px;
            object-fit: cover;
            width: 200px;
        }

        .product-block {
            box-shadow: rgba(99, 99, 99, 0.2) 0px 2px 8px 0px;
        }

        .business-card .calendar-icon {
            height: 60px;
            background: linear-gradient(90deg, #b24592, #f15f79);
            border-radius: 50px !important;
        }

        .business-card {
            display: flex;
            justify-content: space-between;
            align-items: center;
            border-radius: 40px;
        }

        .gallery-img-four {
            width: 100%;
            height: 300px;
            object-fit: cover;
            box-shadow: rgba(0, 0, 0, 0.1) 0px 0px 5px, rgba(0, 0, 0, 0.1) 0px 0px 1px;
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

        .testimonial-sliders {
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center;
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
            background: linear-gradient(90deg, #b24592, #f15f79);
            padding: 24px;
            color: white;
        }

        @media (max-width: 768px) {

            html,
            body {
                width: 100%;
                overflow-x: hidden;
            }
        }

        .service-img {
            width: 100%;
            height: 250px;
            object-fit: cover;
        }
    </style>
</head>

<body>
    <main>
        <section>
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 d-flex justify-content-center align-items-center px-0">
                        <div class="nfc-mobile-frame shadow-sm">
                            <div class="card p-0 border-0 shadow-none tem-one-scroll" style="overflow-x: hidden">
                                <div class="card-header p-0 border-0">
                                    <div class="nfc-one-cover-img-box">
                                        <div class="nfc-one-cover-img"
                                            style="background-image: url({{ !empty($nfc_card->banner_image) && file_exists(public_path('storage/nfc/' . optional($nfc_card)->banner_image)) ? asset('storage/nfc/' . optional($nfc_card)->banner_image) : asset('frontend/images/no_image.png') }});">
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body p-0 px-4 tem-one-about-content">
                                    <div class="w-100">
                                        <div class="row align-items-center gx-0"
                                            style="background-color: {{ $nfc_card->background_color }};">
                                            <div class="col-lg-12">
                                                {{-- style="background-image: url({{ asset('images/appointment-bg.png') }})" --}}
                                                <div class="text-center d-flex justify-content-center align-items-center mobile-images-profile"
                                                    style="margin-top: -70px; position: relative">
                                                    <div class="gradient-border">
                                                        <img src="{{ !empty($nfc_card->profile_image) && file_exists(public_path('storage/nfc/' . optional($nfc_card)->profile_image)) ? asset('storage/nfc/' . optional($nfc_card)->profile_image) : asset('frontend/images/no_image.png') }}"
                                                            class="img-fluid banner-image" alt="banner" />
                                                    </div>
                                                </div>
                                                <div>
                                                    <h2 class="text-center pt-4 fw-bold">
                                                        <span
                                                            class="first_name">{{ optional($nfc_card->nfcData)->first_name }}</span>
                                                        <span
                                                            class="last_name name-title">{{ optional($nfc_card->nfcData)->last_name }}</span>
                                                    </h2>
                                                    <div class="pt-3">
                                                        <p class="text-mute text-center mb-0">
                                                            {{ optional($nfc_card)->designation }}</p>
                                                        @if (!empty($nfc_card->nfcData))
                                                            @php
                                                                $nfcData = $nfc_card->nfcData;
                                                            @endphp
                                                            @if (!empty($nfcData->company_name))
                                                                <p class="fw-bolder text-center">
                                                                    {{ $nfcData->company_name }}</p>
                                                            @else
                                                                <p>No company title found.</p>
                                                            @endif
                                                        @else
                                                            <p>No NFC data available.</p>
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>
                                            {{-- Social --}}
                                            <div class="col-lg-12">
                                                @if (
                                                    !empty($nfc_card->nfcData->facebook_url) ||
                                                        !empty($nfc_card->nfcData->instagram_url) ||
                                                        !empty($nfc_card->nfcData->youtube_url) ||
                                                        !empty($nfc_card->nfcData->google_plus_url))
                                                    <div
                                                        class="rounded-5 py-4 d-flex justify-content-center align-items-center">
                                                        @if (optional($nfc_card->nfcData)->facebook_url)
                                                            <a href="{{ optional($nfc_card->nfcData)->facebook_url }}"
                                                                class="social-icon-five fa-2x rounded-circle d-flex justify-content-center align-items-center m-sm-3 m-1">
                                                                <i class="fa-brands fa-facebook-f social-icons"></i>
                                                            </a>
                                                        @endif
                                                        @if (optional($nfc_card->nfcData)->instagram_url)
                                                            <a href="{{ optional($nfc_card->nfcData)->instagram_url }}"
                                                                class="social-icon-five fa-2x rounded-circle d-flex justify-content-center align-items-center m-sm-3 m-1">
                                                                <i class="fa-brands fa-instagram social-icons"></i>
                                                            </a>
                                                        @endif
                                                        @if (optional($nfc_card->nfcData)->youtube_url)
                                                            <a href="{{ optional($nfc_card->nfcData)->youtube_url }}"
                                                                class="social-icon-five fa-2x rounded-circle d-flex justify-content-center align-items-center m-sm-3 m-1">
                                                                <i class="fa-brands fa-youtube social-icons"></i>
                                                            </a>
                                                        @endif
                                                        @if (optional($nfc_card->nfcData)->linkedin_url)
                                                            <a href="{{ optional($nfc_card->nfcData)->linkedin_url }}"
                                                                class="social-icon-five fa-2x rounded-circle d-flex justify-content-center align-items-center m-sm-3 m-1">
                                                                <i class="fa-brands fa-linkedin-in social-icons"></i>
                                                            </a>
                                                        @endif
                                                        @if (optional($nfc_card->nfcData)->whatsapp_url)
                                                            <a href="{{ optional($nfc_card->nfcData)->whatsapp_url }}"
                                                                class="social-icon-five fa-2x rounded-circle d-flex justify-content-center align-items-center m-sm-3 m-1">
                                                                <i class="fa-brands fa-whatsapp social-icons"></i>
                                                            </a>
                                                        @endif
                                                        @if (optional($nfc_card->nfcData)->twitter_url)
                                                            <a href="{{ optional($nfc_card->nfcData)->twitter_url }}"
                                                                class="social-icon-five fa-2x rounded-circle d-flex justify-content-center align-items-center m-sm-3 m-1">
                                                                <i class="fa-brands fa-twitter social-icons"></i>
                                                            </a>
                                                        @endif
                                                    </div>
                                                @endif
                                                @if (!empty($nfc_card->nfcData->bio_description))
                                                    <p class="text-white p-4">
                                                        {{ optional($nfc_card->nfcData)->bio_description }}
                                                    </p>
                                                @endif
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="pt-2">
                                                    @if (!empty($nfc_card->bio_description))
                                                        <p class="event-name" style="text-align: justify">
                                                            {{ $nfc_card->bio_description }}
                                                        </p>
                                                    @endif
                                                </div>
                                            </div>
                                            {{-- Contact Info --}}
                                            <div class="col-lg-12">
                                                @if (!empty($nfc_card->nfcData))
                                                    <div class="row mt-5 mb-4 justify-content-center">
                                                        @if (!empty($nfc_card->nfcData->email_personal) || !empty($nfc_card->nfcData->email_work))
                                                            <div class="col-6 mb-4">
                                                                <div class="card event-card px-3 py-4 h-100 border-0">
                                                                    <span class="event-icon">
                                                                        <img src="{{ asset('images/vcard5-email.png') }}"
                                                                            alt="email">
                                                                    </span>
                                                                    <div class="event-detail mt-4">
                                                                        <h6 class="text-sm-start text-center">
                                                                            Email
                                                                        </h6>
                                                                        <div style="margin-bottom: -5px !important;">
                                                                            @if (!empty($nfc_card->nfcData->email_personal))
                                                                                <a href="mailto:{{ $nfc_card->nfcData->email_personal }}"
                                                                                    class="event-name-contact text-sm-start text-center mb-0 text-decoration-none">
                                                                                    {{ $nfc_card->nfcData->email_personal }}
                                                                                    <small>(Personal)</small>
                                                                                </a>
                                                                            @endif
                                                                        </div>
                                                                        @if (!empty($nfc_card->nfcData->email_work))
                                                                            <a href="mailto:{{ $nfc_card->nfcData->email_work }}"
                                                                                class="event-name-contact text-sm-start text-center mb-0 text-decoration-none">
                                                                                {{ $nfc_card->nfcData->email_work }}
                                                                                <small>(Work)</small>
                                                                            </a>
                                                                        @endif
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        @endif
                                                        @if (!empty($nfc_card->nfcData->phone_personal) || !empty($nfc_card->nfcData->phone_work))
                                                            <div class="col-6 mb-4">
                                                                <div class="card event-card px-3 py-4 h-100 border-0">
                                                                    <span class="event-icon">
                                                                        <img src="{{ asset('images/vcard5-phone.png') }}"
                                                                            alt="email">
                                                                    </span>
                                                                    <div class="event-detail mt-4">
                                                                        <h6 class="text-sm-start text-center">
                                                                            Mobile Number
                                                                        </h6>
                                                                        <div style="margin-bottom: -5px !important;">
                                                                            @if (!empty($nfc_card->nfcData->phone_personal))
                                                                                <a href="mailto:{{ $nfc_card->nfcData->phone_personal }}"
                                                                                    class="event-name-contact text-sm-start text-center mb-0 text-decoration-none">
                                                                                    {{ $nfc_card->nfcData->phone_personal }}
                                                                                    <small>(Personal)</small>
                                                                                </a>
                                                                            @endif
                                                                        </div>
                                                                        @if (!empty($nfc_card->nfcData->phone_work))
                                                                            <a href="mailto:{{ $nfc_card->nfcData->phone_work }}"
                                                                                class="event-name-contact text-sm-start text-center mb-0 text-decoration-none">
                                                                                {{ $nfc_card->nfcData->phone_work }}
                                                                                <small>(Work)</small>
                                                                            </a>
                                                                        @endif
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        @endif
                                                        @if (
                                                            !empty($nfc_card->nfcData->location) ||
                                                                !empty($nfc_card->nfcData->address_line_one) ||
                                                                !empty($nfc_card->nfcData->address_line_two))
                                                            <div class="col-6 mb-4">
                                                                <div class="card event-card px-3 py-4 h-100 border-0">
                                                                    <span class="event-icon">
                                                                        <i class="fa-solid fa-location-dot fs-2"
                                                                            style="color: #c84e89;"></i>
                                                                    </span>
                                                                    <div class="event-detail mt-4">
                                                                        <h6 class="text-sm-start text-center">
                                                                            Location
                                                                        </h6>
                                                                        <div style="margin-bottom: -5px !important;">
                                                                            @if (!empty($nfc_card->nfcData->location))
                                                                                <a href="javascript:void(0)"
                                                                                    class="event-name-contact text-sm-start text-center mb-0 text-decoration-none">
                                                                                    {{ $nfc_card->nfcData->location }}
                                                                                </a>
                                                                            @endif
                                                                        </div>
                                                                        @if (!empty($nfc_card->nfcData->address_line_one))
                                                                            <a href="javascript:void(0)"
                                                                                class="event-name-contact text-sm-start text-center mb-0 text-decoration-none">
                                                                                {{ $nfc_card->nfcData->address_line_one }}
                                                                            </a>
                                                                        @endif
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        @endif
                                                        @if (!empty($nfc_card->nfcData->phone_personal) || !empty($nfc_card->nfcData->phone_work))
                                                            <div class="col-6 mb-4">
                                                                <div class="card event-card px-3 py-4 h-100 border-0">
                                                                    <span class="event-icon">
                                                                        <img src="{{ asset('images/vcard5-birthday.png') }}"
                                                                            alt="email">
                                                                    </span>
                                                                    <div class="event-detail mt-4">
                                                                        <h6 class="text-sm-start text-center">
                                                                            Date Of Birth
                                                                        </h6>
                                                                        <div style="margin-bottom: -5px !important;">
                                                                            @if (!empty($nfc_card->nfcData->phone_personal))
                                                                                <a href="tel:{{ $nfc_card->nfcData->phone_personal }}"
                                                                                    class="event-name-contact text-sm-start text-center mb-0 text-decoration-none">
                                                                                    {{ $nfc_card->nfcData->phone_personal }}
                                                                                    <small>(Personal)</small>
                                                                                </a>
                                                                            @endif
                                                                        </div>
                                                                        @if (!empty($nfc_card->nfcData->phone_work))
                                                                            <a href="tel:{{ $nfc_card->nfcData->phone_work }}"
                                                                                class="event-name-contact text-sm-start text-center mb-0 text-decoration-none">
                                                                                {{ $nfc_card->nfcData->phone_work }}
                                                                                <small>(Work)</small>
                                                                            </a>
                                                                        @endif
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        @endif
                                                        @if (
                                                            !empty($nfc_card->nfcData->location) ||
                                                                !empty($nfc_card->nfcData->address_line_one) ||
                                                                !empty($nfc_card->nfcData->address_line_two))
                                                            <div class="col-12 mb-4">
                                                                <div class="card event-card px-3 py-4 h-100 border-0">
                                                                    <div
                                                                        class="d-flex justify-content-start align-items-center">
                                                                        <div>
                                                                            <span class="event-icon">
                                                                                <i class="fa-solid fa-fax fs-2"
                                                                                    style="color: #c84e89;"></i>
                                                                            </span>
                                                                        </div>
                                                                        <div class="event-detail ps-4">
                                                                            <h6 class="text-sm-start text-center">
                                                                                FAX Number
                                                                            </h6>
                                                                            <a href="tel:"
                                                                                class="event-name-contact text-sm-start text-center mb-0 text-decoration-none">
                                                                                (1-888-473-2963)
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        @endif
                                                    </div>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body py-0">
                                    <div class="row">
                                        {{-- Services Hours --}}
                                        <div class="col-lg-12">
                                            <h4 class="heading-right position-relative text-center mt-4">Services</h4>
                                            <div class="row g-2 py-5">
                                                @foreach ($nfc_card->nfcService as $service)
                                                    <div class="col-6 mb-2">
                                                        <div class="card border-0 shadow-sm">
                                                            <img class="service-img"
                                                                src="{{ !empty($service->service_icon) && file_exists(public_path('storage/nfc/service/' . optional($service)->service_icon)) ? asset('storage/nfc/service/' . optional($service)->service_icon) : asset('frontend/images/no_image.png') }}"
                                                                alt="Card image cap">
                                                            <div class="card-body">
                                                                <h6 class="name-title">{{ $service->service_name }}
                                                                </h6>
                                                                <p class="card-text" style="font-size: 14px">
                                                                    {{ $service->service_description }}</p>
                                                                <a href="/"
                                                                    class="btn btn-sm btn-primary border-0 rounded-pill"
                                                                    style="background: linear-gradient(90deg, #b24592, #f15f79);">See
                                                                    Now</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                @endforeach
                                            </div>
                                        </div>
                                        {{-- QR Code --}}
                                        <div class="col-lg-12">
                                            <h4 class="heading-left position-relative text-center">QR Code</h4>
                                            <div class="d-flex justify-content-center align-items-center py-5">
                                                <div class="qr-profile border rounded-4">
                                                    <img src="{{ !empty($nfc_card->profile_image) && file_exists(public_path('storage/nfc/' . optional($nfc_card)->profile_image)) ? asset('storage/nfc/' . optional($nfc_card)->profile_image) : asset('frontend/images/no_image.png') }}"
                                                        class="img-fluid rounded-4" alt="banner" />
                                                </div>
                                                <div class="qr-code-scanner mx-md-4 mx-2 p-4 bg-white"
                                                    id="qr-code-nine">
                                                    <svg xmlns="http://www.w3.org/2000/svg" version="1.1"
                                                        width="130" height="130" viewBox="0 0 130 130">
                                                        <rect x="0" y="0" width="130" height="130"
                                                            fill="#ffffff">
                                                        </rect>
                                                        <g transform="scale(4.483)">
                                                            <g transform="translate(0,0)">
                                                                <path fill-rule="evenodd"
                                                                    d="M9 0L9 1L10 1L10 2L8 2L8 3L9 3L9 4L10 4L10 5L9 5L9 6L8 6L8 8L4 8L4 9L3 9L3 8L0 8L0 10L1 10L1 12L2 12L2 13L1 13L1 14L2 14L2 16L4 16L4 17L5 17L5 16L4 16L4 15L5 15L5 14L6 14L6 15L8 15L8 16L9 16L9 17L10 17L10 20L5 20L5 19L4 19L4 18L3 18L3 17L2 17L2 19L1 19L1 18L0 18L0 19L1 19L1 20L0 20L0 21L1 21L1 20L2 20L2 21L3 21L3 19L4 19L4 20L5 20L5 21L8 21L8 25L10 25L10 26L8 26L8 29L10 29L10 26L11 26L11 25L12 25L12 26L13 26L13 25L14 25L14 24L16 24L16 26L17 26L17 29L18 29L18 28L19 28L19 29L24 29L24 28L22 28L22 27L20 27L20 25L24 25L24 26L23 26L23 27L26 27L26 26L28 26L28 27L27 27L27 29L29 29L29 28L28 28L28 27L29 27L29 25L28 25L28 24L29 24L29 21L26 21L26 22L25 22L25 20L26 20L26 19L25 19L25 18L27 18L27 20L28 20L28 19L29 19L29 16L28 16L28 15L29 15L29 12L28 12L28 11L29 11L29 9L28 9L28 10L26 10L26 9L27 9L27 8L26 8L26 9L25 9L25 10L23 10L23 8L20 8L20 10L21 10L21 11L22 11L22 12L20 12L20 20L19 20L19 19L18 19L18 18L17 18L17 17L18 17L18 16L19 16L19 14L18 14L18 10L17 10L17 9L19 9L19 8L18 8L18 7L19 7L19 6L20 6L20 7L21 7L21 5L20 5L20 3L21 3L21 1L20 1L20 0L19 0L19 2L18 2L18 5L16 5L16 4L17 4L17 2L16 2L16 0L15 0L15 2L14 2L14 5L13 5L13 6L12 6L12 8L11 8L11 6L10 6L10 5L11 5L11 4L12 4L12 3L13 3L13 1L14 1L14 0L12 0L12 1L10 1L10 0ZM11 2L11 3L12 3L12 2ZM19 2L19 3L20 3L20 2ZM15 3L15 4L16 4L16 3ZM14 5L14 6L13 6L13 7L14 7L14 6L15 6L15 7L16 7L16 6L15 6L15 5ZM9 6L9 7L10 7L10 6ZM17 6L17 7L18 7L18 6ZM9 8L9 9L6 9L6 10L5 10L5 9L4 9L4 10L3 10L3 13L2 13L2 14L3 14L3 13L5 13L5 12L4 12L4 11L6 11L6 12L8 12L8 13L6 13L6 14L9 14L9 15L10 15L10 16L12 16L12 15L11 15L11 13L12 13L12 12L13 12L13 11L16 11L16 9L17 9L17 8L14 8L14 9L13 9L13 8L12 8L12 10L10 10L10 8ZM1 9L1 10L2 10L2 9ZM6 10L6 11L7 11L7 10ZM9 10L9 11L8 11L8 12L9 12L9 11L10 11L10 10ZM25 10L25 12L23 12L23 14L21 14L21 16L23 16L23 18L25 18L25 15L24 15L24 14L25 14L25 12L26 12L26 17L27 17L27 18L28 18L28 17L27 17L27 14L28 14L28 13L27 13L27 11L26 11L26 10ZM11 11L11 12L12 12L12 11ZM14 12L14 14L13 14L13 15L14 15L14 14L15 14L15 15L17 15L17 14L16 14L16 12ZM9 13L9 14L10 14L10 13ZM0 15L0 16L1 16L1 15ZM6 16L6 17L7 17L7 16ZM14 16L14 17L12 17L12 18L11 18L11 19L13 19L13 18L14 18L14 21L15 21L15 23L16 23L16 24L17 24L17 23L19 23L19 25L17 25L17 26L18 26L18 27L19 27L19 25L20 25L20 23L19 23L19 20L18 20L18 21L17 21L17 19L16 19L16 16ZM21 17L21 18L22 18L22 17ZM6 18L6 19L8 19L8 18ZM22 19L22 20L23 20L23 19ZM11 20L11 22L10 22L10 21L9 21L9 22L10 22L10 23L11 23L11 24L10 24L10 25L11 25L11 24L13 24L13 23L12 23L12 21L13 21L13 20ZM15 20L15 21L16 21L16 22L17 22L17 21L16 21L16 20ZM21 21L21 24L24 24L24 21ZM22 22L22 23L23 23L23 22ZM26 22L26 24L25 24L25 26L26 26L26 25L27 25L27 22ZM14 26L14 27L13 27L13 28L12 28L12 27L11 27L11 28L12 28L12 29L14 29L14 27L15 27L15 26ZM0 0L0 7L7 7L7 0ZM1 1L1 6L6 6L6 1ZM2 2L2 5L5 5L5 2ZM22 0L22 7L29 7L29 0ZM23 1L23 6L28 6L28 1ZM24 2L24 5L27 5L27 2ZM0 22L0 29L7 29L7 22ZM1 23L1 28L6 28L6 23ZM2 24L2 27L5 27L5 24Z"
                                                                    fill="#000000">
                                                                </path>
                                                            </g>
                                                        </g>
                                                    </svg>

                                                </div>
                                            </div>
                                        </div>
                                        {{-- Products --}}
                                        <div class="col-lg-12">
                                            @if ($nfc_card->products_show == '1' && $nfc_card->nfcProduct && $nfc_card->nfcProduct->isNotEmpty())
                                                <h4 class="heading-right heading-line position-relative text-center">
                                                    Products
                                                </h4>
                                                <div class="row py-5 pb-3">
                                                    @foreach ($nfc_card->nfcProduct as $product)
                                                        <div class="col-lg-6 mb-4">
                                                            <a href="https://mydigitalnfccard.com/a" target="_blank"
                                                                class="text-decoration-none fs-6" loading="lazy"
                                                                tabindex="0">
                                                                <div
                                                                    class="card product-card p-3 border-0 w-100 product-block h-100">
                                                                    <div class="product-profile">
                                                                        <img src="{{ !empty($product->product_icon) &&
                                                                        file_exists(public_path('storage/nfc/product/' . optional($product)->product_icon))
                                                                            ? asset('storage/nfc/product/' . optional($product)->product_icon)
                                                                            : asset('frontend/images/no_image.png') }}"
                                                                            alt="{{ $product->product_name }}">
                                                                    </div>
                                                                    <div class="product-details mt-3">
                                                                        <h6 class="fw-bold">
                                                                            {{ $product->product_name }}</h6>
                                                                        <small class="mb-2">
                                                                            Dolore quidem necess
                                                                        </small> <br>
                                                                        <p class="text-black pt-3 mb-0">
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
                                                            </a>
                                                        </div>
                                                    @endforeach
                                                </div>
                                            @endif
                                        </div>
                                        {{-- Business Hours --}}
                                        <div class="col-lg-12">
                                            @if (
                                                $nfc_card->business_hours_show == '1' &&
                                                    (optional($nfc_card->nfcData)->monday == '1' ||
                                                        optional($nfc_card->nfcData)->tuesday == '1' ||
                                                        optional($nfc_card->nfcData)->wednesday == '1' ||
                                                        optional($nfc_card->nfcData)->thursday == '1' ||
                                                        optional($nfc_card->nfcData)->friday == '1' ||
                                                        optional($nfc_card->nfcData)->saturday == '1' ||
                                                        optional($nfc_card->nfcData)->sunday == '1'))
                                                <h4 class="heading-left position-relative text-center mt-4">Business
                                                    Hours</h4>
                                                <div class="row g-2 py-5">
                                                    @if (optional($nfc_card->nfcData)->monday == '1')
                                                        <div class="col-12 mb-2">
                                                            <div class="card business-card flex-row py-2">
                                                                <div class="calendar-icon p-2 ms-2">
                                                                    <i
                                                                        class="fa-solid fa-calendar-days fs-1 text-white"></i>
                                                                </div>
                                                                <div class="me-3 text-end">
                                                                    <div class="text-muted business-hour-day-text">
                                                                        Monday
                                                                    </div>
                                                                    <div
                                                                        class="fw-semibold mt-2 fs-6 business-hour-time-text">
                                                                        {{ optional($nfc_card->nfcData)->start_time_monday }}
                                                                        -
                                                                        {{ optional($nfc_card->nfcData)->end_time_monday }}
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    @endif
                                                    @if (optional($nfc_card->nfcData)->tuesday == '1')
                                                        <div class="col-12 mb-2">
                                                            <div class="card business-card flex-row py-2">
                                                                <div class="calendar-icon p-2 ms-2">
                                                                    <i
                                                                        class="fa-solid fa-calendar-days fs-1 text-white"></i>
                                                                </div>
                                                                <div class="me-3 text-end">
                                                                    <div class="text-muted business-hour-day-text">
                                                                        Tuesday
                                                                    </div>
                                                                    <div
                                                                        class="fw-semibold mt-2 fs-6 business-hour-time-text">
                                                                        {{ optional($nfc_card->nfcData)->start_time_tuesday }}
                                                                        -
                                                                        {{ optional($nfc_card->nfcData)->end_time_tuesday }}
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    @endif
                                                    @if (optional($nfc_card->nfcData)->wednesday == '1')
                                                        <div class="col-12 mb-2">
                                                            <div class="card business-card flex-row py-2">
                                                                <div class="calendar-icon p-2 ms-2">
                                                                    <i
                                                                        class="fa-solid fa-calendar-days fs-1 text-white"></i>
                                                                </div>
                                                                <div class="me-3 text-end">
                                                                    <div class="text-muted business-hour-day-text">
                                                                        Wednesday
                                                                    </div>
                                                                    <div
                                                                        class="fw-semibold mt-2 fs-6 business-hour-time-text">
                                                                        {{ optional($nfc_card->nfcData)->start_time_wednesday }}
                                                                        -
                                                                        {{ optional($nfc_card->nfcData)->end_time_wednesday }}
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    @endif
                                                    @if (optional($nfc_card->nfcData)->thursday == '1')
                                                        <div class="col-12 mb-2">
                                                            <div class="card business-card flex-row py-2">
                                                                <div class="calendar-icon p-2 ms-2">
                                                                    <i
                                                                        class="fa-solid fa-calendar-days fs-1 text-white"></i>
                                                                </div>
                                                                <div class="me-3 text-end">
                                                                    <div class="text-muted business-hour-day-text">
                                                                        Thursday
                                                                    </div>
                                                                    <div
                                                                        class="fw-semibold mt-2 fs-6 business-hour-time-text">
                                                                        {{ optional($nfc_card->nfcData)->start_time_thursday }}
                                                                        -
                                                                        {{ optional($nfc_card->nfcData)->end_time_thursday }}
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    @endif
                                                    @if (optional($nfc_card->nfcData)->friday == '1')
                                                        <div class="col-12 mb-2">
                                                            <div class="card business-card flex-row py-2">
                                                                <div class="calendar-icon p-2 ms-2">
                                                                    <i
                                                                        class="fa-solid fa-calendar-days fs-1 text-white"></i>
                                                                </div>
                                                                <div class="me-3 text-end">
                                                                    <div class="text-muted business-hour-day-text">
                                                                        Friday
                                                                    </div>
                                                                    <div
                                                                        class="fw-semibold mt-2 fs-6 business-hour-time-text">
                                                                        {{ optional($nfc_card->nfcData)->start_time_friday }}
                                                                        -
                                                                        {{ optional($nfc_card->nfcData)->end_time_friday }}
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    @endif
                                                    @if (optional($nfc_card->nfcData)->saturday == '1')
                                                        <div class="col-12 mb-2">
                                                            <div class="card business-card flex-row py-2">
                                                                <div class="calendar-icon p-2 ms-2">
                                                                    <i
                                                                        class="fa-solid fa-calendar-days fs-1 text-white"></i>
                                                                </div>
                                                                <div class="me-3 text-end">
                                                                    <div class="text-muted business-hour-day-text">
                                                                        Saturday
                                                                    </div>
                                                                    <div
                                                                        class="fw-semibold mt-2 fs-6 business-hour-time-text">
                                                                        {{ optional($nfc_card->nfcData)->start_time_saturday }}
                                                                        -
                                                                        {{ optional($nfc_card->nfcData)->end_time_saturday }}
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    @endif
                                                    @if (optional($nfc_card->nfcData)->sunday == '1')
                                                        <div class="col-12 mb-2">
                                                            <div class="card business-card flex-row py-2">
                                                                <div class="calendar-icon p-2 ms-2">
                                                                    <i
                                                                        class="fa-solid fa-calendar-days fs-1 text-white"></i>
                                                                </div>
                                                                <div class="me-3 text-end">
                                                                    <div class="text-muted business-hour-day-text">
                                                                        sunday
                                                                    </div>
                                                                    <div
                                                                        class="fw-semibold mt-2 fs-6 business-hour-time-text">
                                                                        {{ optional($nfc_card->nfcData)->start_time_sunday }}
                                                                        -
                                                                        {{ optional($nfc_card->nfcData)->end_time_sunday }}
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    @endif
                                                </div>
                                            @endif
                                        </div>
                                        <!-- Gallery -->
                                        <div class="col-12">
                                            @if ($nfc_card->galleries_show == '1' && $nfc_card->nfcGallery && $nfc_card->nfcGallery->isNotEmpty())
                                                <h4 class="heading-right heading-line position-relative text-center">
                                                    Gallery
                                                </h4>
                                                @if ($nfc_card->galleries_show)
                                                    <div class="row">
                                                        <div class="col-lg-12">
                                                            <div class="row p-4">
                                                                @foreach ($nfc_card->nfcGallery as $gallery)
                                                                    <div class="col-6 mb-4">
                                                                        @if ($gallery->gallery_type == 'image')
                                                                            <img class="img-fluid gallery-img-four"
                                                                                src="{{ !empty($gallery->gallery_attachment) && file_exists(public_path('storage/nfc/gallery/' . optional($gallery)->gallery_attachment)) ? asset('storage/nfc/gallery/' . optional($gallery)->gallery_attachment) : asset('frontend/images/no_image.png') }}"
                                                                                alt="" />
                                                                        @else
                                                                            <div class="video-wrapper">
                                                                                <iframe width="600" height="338"
                                                                                    src="https://www.youtube.com/embed/{{ optional($gallery)->gallery_link }}"
                                                                                    frameborder="0"
                                                                                    allowfullscreen></iframe>
                                                                            </div>
                                                                        @endif
                                                                    </div>
                                                                @endforeach
                                                            </div>
                                                        </div>
                                                    </div>
                                                @endif
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                @if ($nfc_card->testimonials_show == '1' && $nfc_card->nfcTestimonial && $nfc_card->nfcTestimonial->isNotEmpty())
                                    <div class="card-body py-0 px-0">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <h4 class="heading-right heading-line position-relative text-center">
                                                    Testimonials
                                                </h4>
                                                <div class="testimonial-sliders swiper-container py-5"
                                                    style="background-image: url({{ asset('images/testimonial-bg.png') }})">
                                                    <!-- Additional required wrapper -->
                                                    <div class="swiper-wrapper">
                                                        @foreach ($nfc_card->nfctestimonial as $testimonial)
                                                            <div class="swiper-slide">
                                                                <div class="card rounded-5">
                                                                    <div class="card-body text-center">
                                                                        <p style="font-size: 14px">
                                                                            "{{ Str::limit($testimonial->testimonial_description) }}"
                                                                        </p>
                                                                        <div class="d-flex align-items-center">
                                                                            <div>
                                                                                <img class="rounded-circle"
                                                                                    width="50px" height="50px"
                                                                                    style="object-fit: cover;"
                                                                                    src="{{ !empty($testimonial->testimonial_image) && file_exists(public_path('storage/nfc/testimonial/' . optional($testimonial)->testimonial_image)) ? asset('storage/nfc/testimonial/' . optional($testimonial)->testimonial_image) : asset('frontend/images/no_image.png') }}"
                                                                                    alt="{{ $testimonial->testimonial_name }}">
                                                                            </div>
                                                                            <div class="text-start ps-4">
                                                                                <h6 class="mb-0">
                                                                                    {{ $testimonial->testimonial_name }}
                                                                                </h6>
                                                                            </div>
                                                                        </div>
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
                                        </div>
                                    </div>
                                @endif
                                <div class="row">
                                    <div class="col-12">
                                        <div class="mt-5">
                                            <h4 class="heading-left heading-line position-relative text-center">
                                                Inquiry
                                            </h4>
                                            <div class="px-3 py-5">
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
                                                            <div class="fv-row">
                                                                <x-metronic.label
                                                                    class="fw-semibold fs-6 required">Name
                                                                    <span class="text-danger fs-1"
                                                                        style="position: relative;top: 0.6rem;">*</span>
                                                                </x-metronic.label>
                                                                <x-metronic.input type="text" name="name"
                                                                    value="{{ old('name') }}"
                                                                    class="form-control form-control-solid"
                                                                    placeholder="Robert Duff" required />
                                                            </div>
                                                        </div>
                                                        <div class="col mb-2">
                                                            <div class="fv-row">
                                                                <x-metronic.label
                                                                    class="fw-semibold fs-6 required">Email
                                                                    <span class="text-danger fs-1"
                                                                        style="position: relative;top: 0.6rem;">*</span>
                                                                </x-metronic.label>
                                                                <x-metronic.input type="email" name="email"
                                                                    value="{{ old('email') }}"
                                                                    class="form-control form-control-solid"
                                                                    placeholder="example@mail.com" required />
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col mb-2">
                                                            <div class="fv-row">
                                                                <x-metronic.label
                                                                    class="fw-semibold fs-6 mb-2">Phone</x-metronic.label>
                                                                <x-metronic.input type="text" name="phone"
                                                                    value="{{ old('phone') }}"
                                                                    class="form-control form-control-solid"
                                                                    placeholder="01*******" />
                                                            </div>
                                                        </div>
                                                        <div class="col mb-2">
                                                            <div class="fv-row">
                                                                <x-metronic.label
                                                                    class="fw-semibold fs-6 mb-2">Headline</x-metronic.label>
                                                                <x-metronic.input type="text" name="headline"
                                                                    value="{{ old('headline') }}"
                                                                    class="form-control form-control-solid"
                                                                    placeholder="Headline" />
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col mb-2">
                                                            <div class="fv-row">
                                                                <x-metronic.label
                                                                    class="fw-semibold fs-6 required">Message
                                                                    <span class="text-danger fs-1"
                                                                        style="position: relative;top: 0.6rem;">*</span>
                                                                </x-metronic.label>
                                                                <textarea class="form-control form-control-solid" rows="5" name="message" value="{{ old('message') }}"
                                                                    placeholder="Enter Message" required></textarea>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row mb-5 pb-5" style="margin-bottom: 2.5rem;">
                                                        <div class="col mb-2 text-end">
                                                            <button type="submit"
                                                                class="btn btn-sm mt-2 p-3 rounded-pill"
                                                                style="background: linear-gradient(90deg, #b24592, #f15f79);;color: #fff;">
                                                                <i class="fa-regular fa-paper-plane"></i> Send
                                                                Message
                                                            </button>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                {{-- Footer --}}
                                <div class="container">
                                    <div class="row fixed-bottom footer-nav-area-tem1">
                                        <div class="col-lg-12">
                                            <div class="footer-nav-tem1 position-relative">
                                                <ul
                                                    class="h-100 d-flex align-items-center justify-content-between ps-0">
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
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
    {{-- <script src="https://kit.fontawesome.com/4cba8ce13c.js"></script> --}}
    <script src="{{ asset('frontend/assets/js/fontawesome.js') }}"></script>
    <!-- Slick JS -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.5.0/js/swiper.min.js"></script>
    <script>
        // Initialize Slick Slider
        $(document).ready(function() {
            $(".slick-slider").slick({
                slidesToShow: 2,
                slidesToScroll: 2,
                draggable: true, // This line defines draggable
                autoplay: true,
                autoplaySpeed: 2000, // Adjust autoplay speed in milliseconds
                responsive: [{
                        breakpoint: 768, // define breakpoint at 768px screen width
                        settings: {
                            slidesToShow: 1,
                            slidesToScroll: 1,
                        },
                    },
                    {
                        breakpoint: 1024, // define breakpoint at 1024px screen width
                        settings: {
                            slidesToShow: 3,
                            slidesToScroll: 3,
                        },
                    },
                    // Add more breakpoints and settings as needed
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
        const makeVCardAdr = (addressLine1, addressLine2) => `ADR;TYPE=HOME:;;${addressLine1};${addressLine2};;;;`;
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
            event.preventDefault(); // Prevent default link behavior

            const profileImage = '{{ asset('storage/nfc/' . optional($nfc_card->nfcData)->profile_image) }}';

            getBase64Image(profileImage, (base64Image) => {
                const vcard = makeVCard(base64Image);

                if (isMobile) {
                    // Open vCard details in contact app for mobile
                    const encodedVcfContent = encodeURIComponent(vcard);
                    const uri = 'data:text/vcard;charset=utf-8,' + encodedVcfContent;
                    window.location.href = uri;
                } else {
                    // Download vCard for PC
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

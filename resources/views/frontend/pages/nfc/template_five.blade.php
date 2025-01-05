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
            object-fit: fill;
            width: 100%;
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

        .gallery-img-five {
            width: 100%;
            height: 200px;
            object-fit: fill;
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

        .share-btn {
            border: 2px solid;
            border-image-slice: 1;
            border-image-source: linear-gradient(90deg, #b24592, #f15f79);
            color: #f15f79;
        }

        .share-btn:hover {
            border: 2px solid;
            border-image-slice: 1;
            border-image-source: linear-gradient(90deg, #b24592, #f15f79);
            background-image: linear-gradient(90deg, #b24592, #f15f79);
        }

        .btn-check:checked+.btn,
        .btn.active,
        .btn.show,
        .btn:first-child:active,
        :not(.btn-check)+.btn:active {
            border: 2px solid;
            border-image-slice: 1;
            border-image-source: linear-gradient(90deg, #b24592, #f15f79);
            background-image: linear-gradient(90deg, #b24592, #f15f79);
            border: none;
        }

        .btn:hover,
        .btn:focus-visible {
            border: 2px solid;
            border-image-slice: 1;
            border-image-source: linear-gradient(90deg, #b24592, #f15f79);
            background-image: linear-gradient(90deg, #b24592, #f15f79) !important;
            background-color: transparent;
            border: none;
            box-shadow: none;
        }

        .company-details::-webkit-scrollbar {
            width: 0.2em;
        }

        .company-details::-webkit-scrollbar-track {
            box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.3);
        }

        .company-details::-webkit-scrollbar-thumb {
            background-color: darkgrey;
            outline: 0px solid slategrey;
        }

        .company-details {
            overflow-y: auto;
            height: 130px;
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
                                                                            Email <small>(Personal)</small>
                                                                        </h6>
                                                                        <div style="margin-bottom: -5px !important;">
                                                                            @if (!empty($nfc_card->nfcData->email_personal))
                                                                                <a href="mailto:{{ $nfc_card->nfcData->email_personal }}"
                                                                                    class="event-name-contact text-sm-start text-center mb-0 text-decoration-none">
                                                                                    {{ $nfc_card->nfcData->email_personal }}
                                                                                </a>
                                                                            @endif
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        @endif
                                                        @if (!empty($nfc_card->nfcData->email_personal) || !empty($nfc_card->nfcData->email_work))
                                                            <div class="col-6 mb-4">
                                                                <div class="card event-card px-3 py-4 h-100 border-0">
                                                                    <span class="event-icon">
                                                                        <img src="{{ asset('images/vcard5-email.png') }}"
                                                                            alt="email">
                                                                    </span>
                                                                    <div class="event-detail mt-4">
                                                                        <h6 class="text-sm-start text-center">
                                                                            Email <small>(Work)</small>
                                                                        </h6>
                                                                        @if (!empty($nfc_card->nfcData->email_work))
                                                                            <a href="mailto:{{ $nfc_card->nfcData->email_work }}"
                                                                                class="event-name-contact text-sm-start text-center mb-0 text-decoration-none">
                                                                                {{ $nfc_card->nfcData->email_work }}
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
                                                                            Mobile Number <small>(Personal)</small>
                                                                        </h6>
                                                                        <div style="margin-bottom: -5px !important;">
                                                                            @if (!empty($nfc_card->nfcData->phone_personal))
                                                                                <a href="mailto:{{ $nfc_card->nfcData->phone_personal }}"
                                                                                    class="event-name-contact text-sm-start text-center mb-0 text-decoration-none">
                                                                                    {{ $nfc_card->nfcData->phone_personal }}
                                                                                </a>
                                                                            @endif
                                                                        </div>
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
                                                                            Mobile Number <small>(Work)</small>
                                                                        </h6>
                                                                        @if (!empty($nfc_card->nfcData->phone_work))
                                                                            <a href="mailto:{{ $nfc_card->nfcData->phone_work }}"
                                                                                class="event-name-contact text-sm-start text-center mb-0 text-decoration-none">
                                                                                {{ $nfc_card->nfcData->phone_work }}
                                                                            </a>
                                                                        @endif
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        @endif
                                                        @if (!empty(optional($nfc_card->nfcData)->location))
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
                                                                            {{ $nfc_card->nfcData->phone_work }}
                                                                            asdasdds
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        @endif
                                                        @if (!empty($nfc_card->nfcData->fax))
                                                            <div class="col-6 mb-4">
                                                                <div class="card event-card px-3 py-4 h-100 border-0">
                                                                    <span class="event-icon">
                                                                        <img src="{{ asset('images/vcard5-birthday.png') }}"
                                                                            alt="email">
                                                                    </span>
                                                                    <div class="event-detail mt-4">
                                                                        <h6 class="text-sm-start text-center">
                                                                            Fax
                                                                        </h6>
                                                                        <div style="margin-bottom: -5px !important;">
                                                                            @if (!empty(optional($nfc_card->nfcData)->fax))
                                                                                <a href="tel:{{ $nfc_card->nfcData->fax }}"
                                                                                    class="event-name-contact text-sm-start text-center mb-0 text-decoration-none">
                                                                                    {{ optional($nfc_card->nfcData)->fax }}
                                                                                    <small>(Fax)</small>
                                                                                </a>
                                                                            @endif
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        @endif
                                                        @if (!empty($nfc_card->nfcData->date_of_birth))
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
                                                                            @if (!empty($nfc_card->nfcData->date_of_birth))
                                                                                <p
                                                                                    class="event-name-contact text-sm-start text-center mb-0 text-decoration-none">
                                                                                    {{ optional($nfc_card->nfcData)->date_of_birth ? \Carbon\Carbon::parse(optional($nfc_card->nfcData)->date_of_birth)->format('l, F, Y') : '' }}
                                                                                    (DB)
                                                                                </p>
                                                                            @endif
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        @endif
                                                        @if (!empty($nfc_card->nfcData->location))
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
                                                                                Address
                                                                            </h6>
                                                                            <a href="tel:"
                                                                                class="event-name-contact text-sm-start text-center mb-0 text-decoration-none">
                                                                                {{ optional($nfc_card->nfcData)->location }}
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
                                        @if ($nfc_card->services_show == '1' && $nfc_card->nfcService->count() > 0)
                                            <div class="col-lg-12">
                                                <h4 class="heading-right position-relative text-center mt-4">Services</h4>
                                                <div class="row g-2 py-2" id="service-container">
                                                    @foreach ($nfc_card->nfcService as $index => $service)
                                                        <div class="col-6 mb-0 service-item"
                                                            data-index="{{ $index }}"
                                                            style="{{ $index > 1 ? 'display: none;' : '' }}">
                                                            <div class="card border-0 shadow-sm">
                                                                <img class="service-img"
                                                                    src="{{ !empty($service->service_icon) && file_exists(public_path('storage/nfc/service/' . optional($service)->service_icon)) ? asset('storage/nfc/service/' . optional($service)->service_icon) : asset('frontend/images/no_image.png') }}"
                                                                    alt="Card image cap">
                                                                <div class="card-body">
                                                                    <h6 class="name-title">{{ $service->service_name }}
                                                                    </h6>
                                                                    <p class="card-text" style="font-size: 14px">
                                                                        {{ $service->service_description }}</p>
                                                                    @if (!empty(optional($service)->service_url))
                                                                        <a href="{{ !empty(optional($service)->service_url) ? optional($service)->service_url : 'javascript:void(0)' }}"
                                                                            class="btn btn-sm btn-primary border-0 rounded-pill"
                                                                            style="background: linear-gradient(90deg, #b24592, #f15f79);">See
                                                                            Now
                                                                        </a>
                                                                    @endif
                                                                </div>
                                                            </div>
                                                        </div>
                                                    @endforeach
                                                </div>
                                                <div class="text-center load-more-btn-box mt-4">
                                                    <button id="load-more-btn" class="btn btn-light fa-beat">
                                                        <i class="fa-solid fa-arrow-down text-black"></i>
                                                    </button>
                                                    <button id="collapse-btn" class="btn btn-dark d-none fa-beat"><i
                                                            class="fa-solid fa-arrow-up text-white"></i></button>
                                                </div>
                                            </div>
                                        @endif
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
                                                    @if (!empty($nfc_card->nfc_qr) && file_exists(public_path('storage/nfc/qrs/' . $nfc_card->nfc_qr)))
                                                        <img class="img-fluid"
                                                            src="{{ asset('storage/nfc/qrs/' . $nfc_card->nfc_qr) }}"
                                                            alt="" />
                                                    @else
                                                        <img class="img-fluid"
                                                            src="{{ asset('images/Symbology-QR-code.svg') }}"
                                                            alt="Default QR Code" />
                                                    @endif

                                                    @if (
                                                        $nfc_card->enable_download_qr_code == '1' &&
                                                            !empty($nfc_card->nfc_qr) &&
                                                            file_exists(public_path('storage/nfc/qrs/' . $nfc_card->nfc_qr)))
                                                        <div>
                                                            <a href="{{ asset('storage/nfc/qrs/' . $nfc_card->nfc_qr) }}"
                                                                download=""
                                                                class="btn btn-dark rounded-0 w-100 border-2 border-dark">
                                                                Download QR
                                                            </a>
                                                        </div>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                        {{-- Products --}}
                                        <!-- Company Info -->
                                        @if ($nfc_card->companies_show == '1')
                                            <section>
                                                <div class="container py-5 px-4">
                                                    <div class="row">
                                                        <div class="col-lg-12">
                                                            <div class="text-center">
                                                                <h4
                                                                    class="heading-right position-relative text-center">
                                                                    My Company</h4>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="company-slide  px-0">
                                                            @foreach ($nfc_card->nfcCompany as $company)
                                                                <div class="">
                                                                    <div class="row pt-3 align-items-center">
                                                                        <div class="col-md-12 pb-3">
                                                                            <div class="text-center ">
                                                                                <h5>{{ $company->company_name }}</h5>
                                                                                <div class="company-details">
                                                                                    <p class="p-3 mb-0"
                                                                                        style="text-align: justify">
                                                                                        {{ $company->company_description }}
                                                                                    </p>
                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                        <div class="col-md-12">
                                                                            <div
                                                                                class=" row py-4 pt-0 px-3 align-items-center">
                                                                                <div class="col-lg-8 col-8">
                                                                                    <p class="mb-0">
                                                                                        <span><i
                                                                                                class="fa-solid fa-diamond pe-3"></i>{{ $company->company_website }}</span>
                                                                                    </p>
                                                                                    <p class="mb-0">
                                                                                        <span><i
                                                                                                class="fa-solid fa-diamond pe-3"></i>
                                                                                            {{ $company->company_phone }}</span>
                                                                                    </p>
                                                                                    <p class="mb-0">
                                                                                        <span><i
                                                                                                class="fa-solid fa-diamond pe-3"></i>{{ $company->company_email }}</span>
                                                                                    </p>
                                                                                    <p class="mb-0">
                                                                                        <span><i
                                                                                                class="fa-solid fa-diamond pe-3"></i>{{ $company->company_address_line_one }}
                                                                                            {{ $company->company_address_line_two }}
                                                                                        </span>
                                                                                    </p>
                                                                                </div>
                                                                                <div class="col-lg-4 col-4">
                                                                                    <div
                                                                                        class="d-flex justify-content-center">
                                                                                        <img class="img-fluid rounded-2"
                                                                                            width="100px"
                                                                                            src="{{ !empty($company->company_logo) && file_exists(public_path('storage/nfc/company/' . optional($company)->company_logo)) ? asset('storage/nfc/company/' . optional($company)->company_logo) : asset('frontend/images/no_image.png') }}"
                                                                                            alt="" />
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-12 pe-0">
                                                                            <div
                                                                                style="display: flex;justify-content: center;align-items: center;">
                                                                                @if (!empty($company->company_facebook))
                                                                                    <a href="{{ $company->company_facebook }}"
                                                                                        class="btn btn-dark rounded-0 mb-2">
                                                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                                                            version="1.1"
                                                                                            xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                                            width="30"
                                                                                            height="30" x="0" y="0"
                                                                                            viewBox="0 0 512 512"
                                                                                            style="enable-background:new 0 0 512 512"
                                                                                            xml:space="preserve"
                                                                                            class="">
                                                                                            <g>
                                                                                                <linearGradient
                                                                                                    id="b"
                                                                                                    x1="169.994"
                                                                                                    x2="299.493"
                                                                                                    y1="71.986"
                                                                                                    y2="349.055"
                                                                                                    gradientUnits="userSpaceOnUse">
                                                                                                    <stop
                                                                                                        offset="0"
                                                                                                        stop-color="#3457a0">
                                                                                                    </stop>
                                                                                                    <stop
                                                                                                        offset="1"
                                                                                                        stop-color="#3b5998">
                                                                                                    </stop>
                                                                                                </linearGradient>
                                                                                                <linearGradient
                                                                                                    id="a">
                                                                                                    <stop
                                                                                                        offset="0"
                                                                                                        stop-color="#3457a0"
                                                                                                        stop-opacity="0">
                                                                                                    </stop>
                                                                                                    <stop
                                                                                                        offset="1"
                                                                                                        stop-color="#1f3f77">
                                                                                                    </stop>
                                                                                                </linearGradient>
                                                                                                <linearGradient
                                                                                                    xlink:href="#a"
                                                                                                    id="c"
                                                                                                    x1="353.124"
                                                                                                    x2="-94.448"
                                                                                                    y1="322.733"
                                                                                                    y2="15.208"
                                                                                                    gradientUnits="userSpaceOnUse">
                                                                                                </linearGradient>
                                                                                                <linearGradient
                                                                                                    xlink:href="#a"
                                                                                                    id="d"
                                                                                                    x1="256"
                                                                                                    x2="256"
                                                                                                    y1="427.873"
                                                                                                    y2="497.157"
                                                                                                    gradientUnits="userSpaceOnUse">
                                                                                                </linearGradient>
                                                                                                <linearGradient
                                                                                                    id="e"
                                                                                                    x1="587.778"
                                                                                                    x2="232.407"
                                                                                                    y1="422.829"
                                                                                                    y2="243.638"
                                                                                                    gradientUnits="userSpaceOnUse">
                                                                                                    <stop
                                                                                                        offset="0"
                                                                                                        stop-color="#3457a0"
                                                                                                        stop-opacity="0">
                                                                                                    </stop>
                                                                                                    <stop
                                                                                                        offset=".325"
                                                                                                        stop-color="#2a4c8d"
                                                                                                        stop-opacity=".325">
                                                                                                    </stop>
                                                                                                    <stop
                                                                                                        offset=".705"
                                                                                                        stop-color="#22427d"
                                                                                                        stop-opacity=".706">
                                                                                                    </stop>
                                                                                                    <stop
                                                                                                        offset="1"
                                                                                                        stop-color="#1f3f77">
                                                                                                    </stop>
                                                                                                </linearGradient>
                                                                                                <path fill="url(#b)"
                                                                                                    d="M420.422 503.234c-109.504 11.688-219.34 11.688-328.844 0-43.664-4.66-78.152-39.148-82.812-82.816-11.688-109.504-11.688-219.336 0-328.84 4.66-43.664 39.148-78.152 82.812-82.812 109.504-11.688 219.336-11.688 328.84 0 43.668 4.66 78.156 39.148 82.816 82.812 11.688 109.504 11.688 219.336 0 328.84-4.66 43.668-39.144 78.156-82.812 82.816zm0 0"
                                                                                                    opacity="1"
                                                                                                    data-original="url(#b)">
                                                                                                </path>
                                                                                                <path fill="url(#a)"
                                                                                                    d="M475.387 110.098c-4.133-38.746-34.735-69.352-73.485-73.489-97.172-10.367-194.632-10.367-291.804 0-38.746 4.137-69.352 34.743-73.489 73.489-10.367 97.172-10.367 194.632 0 291.8 4.137 38.75 34.743 69.356 73.489 73.489 97.172 10.37 194.632 10.37 291.8 0 38.75-4.133 69.356-34.739 73.489-73.489 10.37-97.168 10.37-194.628 0-291.8zm0 0"
                                                                                                    opacity="1"
                                                                                                    data-original="url(#a)">
                                                                                                </path>
                                                                                                <path fill="url(#a)"
                                                                                                    d="M7.672 409.805c.351 3.539.715 7.078 1.094 10.617 4.66 43.664 39.148 78.152 82.816 82.812 109.504 11.688 219.336 11.688 328.84 0 43.668-4.66 78.152-39.148 82.812-82.812.38-3.54.743-7.078 1.098-10.617zm0 0"
                                                                                                    opacity="1"
                                                                                                    data-original="url(#a)">
                                                                                                </path>
                                                                                                <path fill="url(#e)"
                                                                                                    d="M344.215 85.27c-44.61 0-80.77 36.164-80.77 80.773v60.332h-43.468v74.7l43.468 38.933v171.969c52.352-.254 104.7-3.165 156.977-8.743 43.668-4.66 78.152-39.148 82.812-82.816 8.696-81.477 10.918-163.133 6.672-244.703L419.461 85.27zm0 0"
                                                                                                    opacity="1"
                                                                                                    data-original="url(#e)">
                                                                                                </path>
                                                                                                <path fill="#ffffff"
                                                                                                    d="M263.445 511.977c29.832-.145 59.66-1.157 89.477-3.032v-207.87h59.367l7.172-74.7h-66.54v-47.434c0-10.476 8.493-18.968 18.97-18.968h47.57V85.27h-75.246c-44.61 0-80.77 36.164-80.77 80.773v60.332h-43.468v74.7h43.468zm0 0"
                                                                                                    opacity="1"
                                                                                                    data-original="#ffffff">
                                                                                                </path>
                                                                                            </g>
                                                                                        </svg>
                                                                                    </a>
                                                                                @endif
                                                                                @if (!empty($company->company_youtube))
                                                                                    <a href="{{ $company->company_youtube }}"
                                                                                        class="btn btn-dark rounded-0 mb-2">
                                                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                                                            version="1.1"
                                                                                            xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                                            width="30"
                                                                                            height="30" x="0" y="0"
                                                                                            viewBox="0 0 510 510"
                                                                                            style="enable-background:new 0 0 512 512"
                                                                                            xml:space="preserve"
                                                                                            class="">
                                                                                            <g>
                                                                                                <linearGradient
                                                                                                    id="b"
                                                                                                    x1="125.695"
                                                                                                    x2="392.303"
                                                                                                    y1="125.695"
                                                                                                    y2="392.303"
                                                                                                    gradientUnits="userSpaceOnUse">
                                                                                                    <stop
                                                                                                        offset="0"
                                                                                                        stop-color="#ff637b">
                                                                                                    </stop>
                                                                                                    <stop
                                                                                                        offset="1"
                                                                                                        stop-color="#f90217">
                                                                                                    </stop>
                                                                                                </linearGradient>
                                                                                                <linearGradient
                                                                                                    id="a">
                                                                                                    <stop
                                                                                                        offset="0"
                                                                                                        stop-color="#f90217"
                                                                                                        stop-opacity="0">
                                                                                                    </stop>
                                                                                                    <stop
                                                                                                        offset=".267"
                                                                                                        stop-color="#e7010f"
                                                                                                        stop-opacity=".267">
                                                                                                    </stop>
                                                                                                    <stop
                                                                                                        offset=".723"
                                                                                                        stop-color="#ce0004"
                                                                                                        stop-opacity=".723">
                                                                                                    </stop>
                                                                                                    <stop
                                                                                                        offset="1"
                                                                                                        stop-color="#c50000">
                                                                                                    </stop>
                                                                                                </linearGradient>
                                                                                                <linearGradient
                                                                                                    xlink:href="#a"
                                                                                                    id="c"
                                                                                                    x1="255"
                                                                                                    x2="255"
                                                                                                    y1="362"
                                                                                                    y2="465.078"
                                                                                                    gradientUnits="userSpaceOnUse">
                                                                                                </linearGradient>
                                                                                                <linearGradient
                                                                                                    xlink:href="#a"
                                                                                                    id="d"
                                                                                                    x1="389.216"
                                                                                                    x2="291.556"
                                                                                                    y1="425.826"
                                                                                                    y2="289.302"
                                                                                                    gradientUnits="userSpaceOnUse">
                                                                                                </linearGradient>
                                                                                                <linearGradient
                                                                                                    id="e"
                                                                                                    x1="225.813"
                                                                                                    x2="284.822"
                                                                                                    y1="244.322"
                                                                                                    y2="303.331"
                                                                                                    gradientUnits="userSpaceOnUse">
                                                                                                    <stop
                                                                                                        offset="0"
                                                                                                        stop-color="#ebeff0">
                                                                                                    </stop>
                                                                                                    <stop
                                                                                                        offset="1"
                                                                                                        stop-color="#e3e5e4">
                                                                                                    </stop>
                                                                                                </linearGradient>
                                                                                                <path fill="url(#b)"
                                                                                                    d="M486.851 106.657c-6.973-22.264-25.135-39.239-47.871-44.472-122.185-28.124-245.779-28.124-367.962 0-22.736 5.233-40.897 22.208-47.87 44.472-30.868 98.556-30.863 198.142.001 296.687 6.973 22.264 25.135 39.239 47.87 44.472 122.183 28.124 245.776 28.124 367.961 0 22.735-5.233 40.897-22.208 47.87-44.472 30.865-98.546 30.868-198.13.001-296.687z"
                                                                                                    opacity="1"
                                                                                                    data-original="url(#b)"
                                                                                                    class="">
                                                                                                </path>
                                                                                                <path fill="url(#c)"
                                                                                                    d="M2.508 303.736c3.402 33.267 10.271 66.496 20.641 99.607 6.973 22.263 25.135 39.239 47.87 44.472 122.183 28.124 245.776 28.124 367.961 0 22.735-5.233 40.897-22.208 47.87-44.472 10.37-33.111 17.239-66.34 20.641-99.607z"
                                                                                                    opacity="1"
                                                                                                    data-original="url(#c)">
                                                                                                </path>
                                                                                                <path fill="url(#d)"
                                                                                                    d="M438.981 447.815c22.735-5.233 40.897-22.208 47.87-44.472a523.818 523.818 0 0 0 9.861-35.91L369.254 239.975a26.641 26.641 0 0 0-7.927-7.614l-135.986-83.288c-17.797-11.162-38.921-.371-38.921 20.637v170.579c0 9.496 2.731 17.303 9.554 21.988l105.3 105.3c46.001-2.643 91.953-9.23 137.707-19.762z"
                                                                                                    opacity="1"
                                                                                                    data-original="url(#d)">
                                                                                                </path>
                                                                                                <path fill="url(#e)"
                                                                                                    d="m361.327 232.361-135.986-85.289c-17.797-11.162-40.922 1.631-40.922 22.639V340.29c0 21.008 23.125 33.801 40.922 22.639l135.986-85.289c16.699-10.475 16.699-34.805 0-45.279z"
                                                                                                    opacity="1"
                                                                                                    data-original="url(#e)">
                                                                                                </path>
                                                                                            </g>
                                                                                        </svg>
                                                                                    </a>
                                                                                @endif
                                                                                @if (!empty($company->company_linkedin))
                                                                                    <a href="{{ $company->company_linkedin }}"
                                                                                        class="btn btn-dark rounded-0 mb-2">
                                                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                                                            version="1.1"
                                                                                            xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                                            width="30"
                                                                                            height="30" x="0" y="0"
                                                                                            viewBox="0 0 64 64"
                                                                                            style="enable-background:new 0 0 512 512"
                                                                                            xml:space="preserve"
                                                                                            class="">
                                                                                            <g>
                                                                                                <g fill-rule="evenodd">
                                                                                                    <path
                                                                                                        fill="#2864b4"
                                                                                                        d="M48 64H16A16 16 0 0 1 0 48V16A16 16 0 0 1 16 0h32a16 16 0 0 1 16 16v32a16 16 0 0 1-16 16"
                                                                                                        opacity="1"
                                                                                                        data-original="#2864b4">
                                                                                                    </path>
                                                                                                    <path
                                                                                                        fill="#417dcd"
                                                                                                        d="M30 18h18A9 9 0 0 0 48.92.046C48.614.029 48.311 0 48 0H16A16 16 0 0 0 0 16v32a30 30 0 0 1 30-30"
                                                                                                        opacity="1"
                                                                                                        data-original="#417dcd"
                                                                                                        class="">
                                                                                                    </path>
                                                                                                    <path
                                                                                                        fill="#0f4b9b"
                                                                                                        d="M48 32a16 16 0 1 0 16 16V16a16 16 0 0 1-16 16"
                                                                                                        opacity="1"
                                                                                                        data-original="#0f4b9b">
                                                                                                    </path>
                                                                                                </g>
                                                                                                <rect width="8"
                                                                                                    height="27"
                                                                                                    x="12" y="25"
                                                                                                    fill="#ffffff"
                                                                                                    rx="2"
                                                                                                    opacity="1"
                                                                                                    data-original="#ffffff">
                                                                                                </rect>
                                                                                                <circle cx="16"
                                                                                                    cy="16"
                                                                                                    r="5"
                                                                                                    fill="#ffffff"
                                                                                                    opacity="1"
                                                                                                    data-original="#ffffff">
                                                                                                </circle>
                                                                                                <path fill="#ffffff"
                                                                                                    fill-rule="evenodd"
                                                                                                    d="M34 28.64A9.216 9.216 0 0 1 42 24c5.087 0 10 3 10 11v15a2 2 0 0 1-2 2h-4a2 2 0 0 1-2-2V36a5 5 0 0 0-10 0v14a2 2 0 0 1-2 2h-4a2 2 0 0 1-2-2V27a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2z"
                                                                                                    opacity="1"
                                                                                                    data-original="#ffffff">
                                                                                                </path>
                                                                                            </g>
                                                                                        </svg>
                                                                                    </a>
                                                                                @endif
                                                                                @if (!empty($company->company_instagram))
                                                                                    <a href="{{ $company->company_instagram }}"
                                                                                        class="btn btn-dark rounded-0 mb-2">
                                                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                                                            version="1.1"
                                                                                            xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                                            width="30"
                                                                                            height="30" x="0" y="0"
                                                                                            viewBox="0 0 512 512"
                                                                                            style="enable-background:new 0 0 512 512"
                                                                                            xml:space="preserve"
                                                                                            class="">
                                                                                            <g>
                                                                                                <defs>
                                                                                                    <linearGradient
                                                                                                        id="a"
                                                                                                        x1="328.27"
                                                                                                        x2="183.73"
                                                                                                        y1="508.05"
                                                                                                        y2="3.95"
                                                                                                        gradientUnits="userSpaceOnUse">
                                                                                                        <stop
                                                                                                            offset="0"
                                                                                                            stop-color="#ffdb73">
                                                                                                        </stop>
                                                                                                        <stop
                                                                                                            offset=".08"
                                                                                                            stop-color="#fdad4e">
                                                                                                        </stop>
                                                                                                        <stop
                                                                                                            offset=".15"
                                                                                                            stop-color="#fb832e">
                                                                                                        </stop>
                                                                                                        <stop
                                                                                                            offset=".19"
                                                                                                            stop-color="#fa7321">
                                                                                                        </stop>
                                                                                                        <stop
                                                                                                            offset=".23"
                                                                                                            stop-color="#f6692f">
                                                                                                        </stop>
                                                                                                        <stop
                                                                                                            offset=".37"
                                                                                                            stop-color="#e84a5a">
                                                                                                        </stop>
                                                                                                        <stop
                                                                                                            offset=".48"
                                                                                                            stop-color="#e03675">
                                                                                                        </stop>
                                                                                                        <stop
                                                                                                            offset=".55"
                                                                                                            stop-color="#dd2f7f">
                                                                                                        </stop>
                                                                                                        <stop
                                                                                                            offset=".68"
                                                                                                            stop-color="#b43d97">
                                                                                                        </stop>
                                                                                                        <stop
                                                                                                            offset=".97"
                                                                                                            stop-color="#4d60d4">
                                                                                                        </stop>
                                                                                                        <stop
                                                                                                            offset="1"
                                                                                                            stop-color="#4264db">
                                                                                                        </stop>
                                                                                                    </linearGradient>
                                                                                                </defs>
                                                                                                <rect width="465.06"
                                                                                                    height="465.06"
                                                                                                    x="23.47" y="23.47"
                                                                                                    class="cls-1"
                                                                                                    rx="107.23"
                                                                                                    ry="107.23"
                                                                                                    style="fill:url(#a)"
                                                                                                    fill="">
                                                                                                </rect>
                                                                                                <path
                                                                                                    d="M331 115.22a66.92 66.92 0 0 1 66.65 66.65v148.26A66.92 66.92 0 0 1 331 396.78H181a66.92 66.92 0 0 1-66.65-66.65V181.87A66.92 66.92 0 0 1 181 115.22h150m0-31H181c-53.71 0-97.66 44-97.66 97.66v148.25c0 53.71 44 97.66 97.66 97.66h150c53.71 0 97.66-44 97.66-97.66V181.87c0-53.71-43.95-97.66-97.66-97.66Z"
                                                                                                    class=""
                                                                                                    fill="#ffffff"
                                                                                                    opacity="1"
                                                                                                    data-original="#000000">
                                                                                                </path>
                                                                                                <path
                                                                                                    d="M256 198.13A57.87 57.87 0 1 1 198.13 256 57.94 57.94 0 0 1 256 198.13m0-31A88.87 88.87 0 1 0 344.87 256 88.87 88.87 0 0 0 256 167.13Z"
                                                                                                    class=""
                                                                                                    fill="#ffffff"
                                                                                                    opacity="1"
                                                                                                    data-original="#000000">
                                                                                                </path>
                                                                                                <circle cx="346.81"
                                                                                                    cy="163.23"
                                                                                                    r="21.07"
                                                                                                    class=""
                                                                                                    fill="#ffffff"
                                                                                                    opacity="1"
                                                                                                    data-original="#000000">
                                                                                                </circle>
                                                                                            </g>
                                                                                        </svg>
                                                                                    </a>
                                                                                @endif

                                                                                @if (!empty($company->company_twitter))
                                                                                    <a href="{{ $company->company_twitter }}"
                                                                                        class="btn btn-dark rounded-0 mb-2">
                                                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                                                            version="1.1"
                                                                                            xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                                            width="30"
                                                                                            height="30" x="0" y="0"
                                                                                            viewBox="0 0 64 64"
                                                                                            style="enable-background:new 0 0 512 512"
                                                                                            xml:space="preserve"
                                                                                            class="">
                                                                                            <g>
                                                                                                <g fill-rule="evenodd">
                                                                                                    <path
                                                                                                        fill="#0f9dff"
                                                                                                        d="M48 64H16A16 16 0 0 1 0 48V16A16 16 0 0 1 16 0h32a16 16 0 0 1 16 16v32a16 16 0 0 1-16 16"
                                                                                                        opacity="1"
                                                                                                        data-original="#0f9dff"
                                                                                                        class="">
                                                                                                    </path>
                                                                                                    <path
                                                                                                        fill="#00b7ff"
                                                                                                        d="M30 18h18A9 9 0 0 0 48.92.046C48.614.029 48.311 0 48 0H16A16 16 0 0 0 0 16v32a30 30 0 0 1 30-30"
                                                                                                        opacity="1"
                                                                                                        data-original="#00b7ff">
                                                                                                    </path>
                                                                                                    <path
                                                                                                        fill="#1d83ff"
                                                                                                        d="M48 32a16 16 0 1 0 16 16V16a16 16 0 0 1-16 16"
                                                                                                        opacity="1"
                                                                                                        data-original="#1d83ff">
                                                                                                    </path>
                                                                                                </g>
                                                                                                <path fill="#ffffff"
                                                                                                    d="M24.576 48.256c15.338 0 23.845-13.024 23.328-24.4a16.524 16.524 0 0 0 3.057-2.864.498.498 0 0 0-.543-.786 16.886 16.886 0 0 1-2.058.521.25.25 0 0 1-.194-.444 8.23 8.23 0 0 0 2.169-2.607.491.491 0 0 0-.657-.661 16.816 16.816 0 0 1-3.998 1.321 8.207 8.207 0 0 0-14.192 5.616 8.736 8.736 0 0 0 .147 1.559.25.25 0 0 1-.261.296 23.274 23.274 0 0 1-15.556-7.375.994.994 0 0 0-1.685.364 7.97 7.97 0 0 0 2.493 8.896.244.244 0 0 1-.186.433 7.916 7.916 0 0 1-1.381-.316.988.988 0 0 0-.967.196.949.949 0 0 0-.315.935c1.738 6.692 6.445 5.839 6.445 6.346 0 .343-.931.343-2.179.346a.986.986 0 0 0-.87 1.44 8.279 8.279 0 0 0 6.317 4.074.247.247 0 0 1 .126.447 16.372 16.372 0 0 1-7.707 2.997.969.969 0 0 0-.309 1.854 22.946 22.946 0 0 0 8.976 1.812z"
                                                                                                    opacity="1"
                                                                                                    data-original="#ffffff">
                                                                                                </path>
                                                                                            </g>
                                                                                        </svg>
                                                                                    </a>
                                                                                @endif
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            @endforeach
                                                        </div>
                                                    </div>
                                                </div>
                                            </section>
                                        @endif
                                        {{-- Products --}}
                                        <div class="col-lg-12">
                                            @if ($nfc_card->products_show == '1' && $nfc_card->nfcProduct && $nfc_card->nfcProduct->isNotEmpty())
                                                <h4 class="heading-left heading-line position-relative text-center">
                                                    Products
                                                </h4>
                                                <div class="row py-5 pb-3"id="product-container">
                                                    @foreach ($nfc_card->nfcProduct as $index => $product)
                                                        <div class="col-lg-6 mb-4 product-item"
                                                            data-index="{{ $index }}"
                                                            style="{{ $index > 1 ? 'display: none;' : '' }}">
                                                            <a href="{{ !empty(optional($product)->product_url) ? optional($product)->product_url : 'javascript:void(0)' }}" target="_blank"
                                                                class="text-decoration-none fs-6" loading="lazy"
                                                                tabindex="0">
                                                                <div
                                                                    class="card product-card p-0 border-0 w-100 product-block h-100">
                                                                    <div class="product-profile">
                                                                        <img src="{{ !empty($product->product_icon) && file_exists(public_path('storage/nfc/product/' . optional($product)->product_icon)) ? asset('storage/nfc/product/' . optional($product)->product_icon) : asset('frontend/images/no_image.png') }}"
                                                                            alt="{{ $product->product_name }}">
                                                                    </div>
                                                                    <div class="product-details mt-3 p-3">
                                                                        <h6 class="fw-bold">
                                                                            {{ $product->product_name }}</h6>
                                                                         <br>
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
                                                <div class="text-center load-more-btn-box mt-4">
                                                    <button id="product-load-more-btn" class="btn btn-light fa-beat">
                                                        <i class="fa-solid fa-arrow-down text-black"></i>
                                                    </button>
                                                    <button id="product-collapse-btn"
                                                        class="btn btn-dark d-none fa-beat"><i
                                                            class="fa-solid fa-arrow-up text-white"></i></button>
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
                                                <h4 class="heading-right position-relative text-center mt-4">Business
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
                                                <h4 class="heading-left heading-line position-relative text-center">
                                                    Gallery
                                                </h4>
                                                @if ($nfc_card->galleries_show)
                                                    <div class="row">
                                                        <div class="col-lg-12">
                                                            <div class="row p-4" id="gallery-container">
                                                                @foreach ($nfc_card->nfcGallery as $gallery)
                                                                    <div class="col-6 mb-4 gallery-item"
                                                                        data-index="{{ $index }}"
                                                                        style="{{ $index > 1 ? 'display: none;' : '' }}">
                                                                        @if ($gallery->gallery_type == 'image')
                                                                            <img class="img-fluid gallery-img-five"
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
                                                            <div class="text-center load-more-btn-box mt-4">
                                                                <button id="gallery-load-more-btn"
                                                                    class="btn btn-light fa-beat">
                                                                    <i class="fa-solid fa-arrow-down text-black"></i>
                                                                </button>
                                                                <button id="gallery-collapse-btn"
                                                                    class="btn btn-dark d-none fa-beat"><i
                                                                        class="fa-solid fa-arrow-up text-white"></i></button>
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
                                                    <div class="row">
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
                                @php
                                    $currentUrl = request()->url();
                                    $whatsappLink =
                                        'https://wa.me/?text=' . urlencode('Check out My NFC Profile: ' . $currentUrl);
                                @endphp
                                <div class="row py-5 pb-0">
                                    <div class="col-lg-12">
                                        <div class="text-center">
                                            <h4 class="fw-bold text-center">
                                                <span
                                                    style="border-bottom: 4px solid #FF9419; border-radius: 10px; padding: 5px;">
                                                    Share VCard
                                                </span>
                                            </h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="row align-items-center mb-5">
                                    <div class="col-sm-6 offse-sm-3 mx-auto">
                                        <div>
                                            <img class="img-fluid" src="{{ asset('images/share-now.png') }}"
                                                alt="" />
                                        </div>
                                        <div class="d-flex align-items-center justify-content-center mb-4">
                                            <a href="{{ $whatsappLink }}" target="_blank" rel="noopener noreferrer"
                                                class="btn btn-outline-primary share-btn rounded-0 mb-2 p-3"
                                                style="width: 240px;">
                                                <i class="fa-solid fa-share-nodes"
                                                    style="color: var(--template-two-color-primary)"></i>
                                                Share This Vcard
                                            </a>
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
                                                        <a href="{{ asset('storage/nfc/qrs/' . $nfc_card->nfc_qr) }}" download="">
                                                            <i class="fa-solid fa-qrcode"></i>
                                                            <span>QR</span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:void(0)" class="copy-link" data-link="{{ $currentUrl }}">
                                                            <i class="fa-solid fa-copy"></i>
                                                            <span>Copy Link</span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:void(0)" class="nfc_contact_btn_pc">
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
    <script type="text/javascript">
        $(document).ready(function() {
            $(".company-slide").slick({
                infinite: true, // Infinite looping
                speed: 500, // Animation speed in milliseconds
                slidesToShow: 1, // Number of slides to show at once
                slidesToScroll: 1, // Number of slides to scroll at once
                autoplay: true, // Enable autoplay
                autoplaySpeed: 2000, // Autoplay speed in milliseconds
                gap: 10,
                arrows: false,
                prevArrow: '<button type="button" class="slick-prev"><i class="fas fa-chevron-left"></i></button>',
                nextArrow: '<button type="button" class="slick-next"><i class="fas fa-chevron-right"></i></button>',
            });
        });
    </script>
        <script>
            document.addEventListener("DOMContentLoaded", (event) => {
                document.querySelectorAll(".copy-link").forEach((element) => {
                    element.addEventListener("click", (event) => {
                        event.preventDefault();
                        const link = event.currentTarget.getAttribute("data-link");
                        navigator.clipboard
                            .writeText(link)
                            .then(() => {
                                alert("Link copied to clipboard!");
                            })
                            .catch((err) => {
                                console.error("Failed to copy: ", err);
                            });
                    });
                });
            });
        </script>
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const itemsPerPage = 2; // Number of items to show per load
            const loadMoreBtn = document.getElementById('product-load-more-btn');
            const collapseBtn = document.getElementById('product-collapse-btn');
            const serviceContainer = document.getElementById('product-container');
            const serviceItems = Array.from(serviceContainer.getElementsByClassName('product-item'));

            let visibleCount = 2; // Initial visible items

            // Utility function for fade effect
            const fadeIn = (element, display = 'block') => {
                element.style.opacity = 0;
                element.style.display = display;
                let opacity = 0;
                const timer = setInterval(() => {
                    if (opacity >= 1) {
                        clearInterval(timer);
                    }
                    opacity += 0.1;
                    element.style.opacity = opacity;
                }, 30);
            };

            const fadeOut = (element) => {
                let opacity = 1;
                const timer = setInterval(() => {
                    if (opacity <= 0) {
                        clearInterval(timer);
                        element.style.display = 'none';
                    }
                    opacity -= 0.1;
                    element.style.opacity = opacity;
                }, 30);
            };

            // Check if we need to hide the Load More button initially
            if (serviceItems.length <= visibleCount) {
                loadMoreBtn.classList.add('d-none');
            }

            // Display the initial 2 items
            serviceItems.forEach((item, index) => {
                item.style.display = index < visibleCount ? 'block' : 'none';
            });

            loadMoreBtn.addEventListener('click', () => {
                // Show the next set of items with fade-in effect
                for (let i = visibleCount; i < visibleCount + itemsPerPage; i++) {
                    if (serviceItems[i]) {
                        fadeIn(serviceItems[i]);
                    }
                }

                // Update the visible count
                visibleCount += itemsPerPage;

                // If all items are visible, hide the Load More button and show the Collapse button
                if (visibleCount >= serviceItems.length) {
                    loadMoreBtn.classList.add('d-none');
                    collapseBtn.classList.remove('d-none');
                }
            });

            collapseBtn.addEventListener('click', () => {
                // Collapse all items except the first 2 with fade-out effect
                serviceItems.forEach((item, index) => {
                    if (index >= 2) {
                        fadeOut(item);
                    }
                });

                // Reset the visible count and button visibility
                visibleCount = 2;
                loadMoreBtn.classList.remove('d-none');
                collapseBtn.classList.add('d-none');

                // Hide the Load More button if only 2 or fewer items are available
                if (serviceItems.length <= visibleCount) {
                    loadMoreBtn.classList.add('d-none');
                }
            });
        });
    </script>
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const itemsPerPage = 2; // Number of items to show per load
            const loadMoreBtn = document.getElementById('gallery-load-more-btn');
            const collapseBtn = document.getElementById('gallery-collapse-btn');
            const serviceContainer = document.getElementById('gallery-container');
            const serviceItems = Array.from(serviceContainer.getElementsByClassName('gallery-item'));

            let visibleCount = 2; // Initial visible items

            // Utility function for fade effect
            const fadeIn = (element, display = 'block') => {
                element.style.opacity = 0;
                element.style.display = display;
                let opacity = 0;
                const timer = setInterval(() => {
                    if (opacity >= 1) {
                        clearInterval(timer);
                    }
                    opacity += 0.1;
                    element.style.opacity = opacity;
                }, 30);
            };

            const fadeOut = (element) => {
                let opacity = 1;
                const timer = setInterval(() => {
                    if (opacity <= 0) {
                        clearInterval(timer);
                        element.style.display = 'none';
                    }
                    opacity -= 0.1;
                    element.style.opacity = opacity;
                }, 30);
            };

            // Check if we need to hide the Load More button initially
            if (serviceItems.length <= visibleCount) {
                loadMoreBtn.classList.add('d-none');
            }

            // Display the initial 2 items
            serviceItems.forEach((item, index) => {
                item.style.display = index < visibleCount ? 'block' : 'none';
            });

            loadMoreBtn.addEventListener('click', () => {
                // Show the next set of items with fade-in effect
                for (let i = visibleCount; i < visibleCount + itemsPerPage; i++) {
                    if (serviceItems[i]) {
                        fadeIn(serviceItems[i]);
                    }
                }

                // Update the visible count
                visibleCount += itemsPerPage;

                // If all items are visible, hide the Load More button and show the Collapse button
                if (visibleCount >= serviceItems.length) {
                    loadMoreBtn.classList.add('d-none');
                    collapseBtn.classList.remove('d-none');
                }
            });

            collapseBtn.addEventListener('click', () => {
                // Collapse all items except the first 2 with fade-out effect
                serviceItems.forEach((item, index) => {
                    if (index >= 2) {
                        fadeOut(item);
                    }
                });

                // Reset the visible count and button visibility
                visibleCount = 2;
                loadMoreBtn.classList.remove('d-none');
                collapseBtn.classList.add('d-none');

                // Hide the Load More button if only 2 or fewer items are available
                if (serviceItems.length <= visibleCount) {
                    loadMoreBtn.classList.add('d-none');
                }
            });
        });
    </script>
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const itemsPerPage = 2; // Number of items to show per load
            const loadMoreBtn = document.getElementById('load-more-btn');
            const collapseBtn = document.getElementById('collapse-btn');
            const serviceContainer = document.getElementById('service-container');
            const serviceItems = Array.from(serviceContainer.getElementsByClassName('service-item'));

            let visibleCount = 2; // Initial visible items

            // Utility function for fade effect
            const fadeIn = (element, display = 'block') => {
                element.style.opacity = 0;
                element.style.display = display;
                let opacity = 0;
                const timer = setInterval(() => {
                    if (opacity >= 1) {
                        clearInterval(timer);
                    }
                    opacity += 0.1;
                    element.style.opacity = opacity;
                }, 30);
            };

            const fadeOut = (element) => {
                let opacity = 1;
                const timer = setInterval(() => {
                    if (opacity <= 0) {
                        clearInterval(timer);
                        element.style.display = 'none';
                    }
                    opacity -= 0.1;
                    element.style.opacity = opacity;
                }, 30);
            };

            // Check if we need to hide the Load More button initially
            if (serviceItems.length <= visibleCount) {
                loadMoreBtn.classList.add('d-none');
            }

            // Display the initial 2 items
            serviceItems.forEach((item, index) => {
                item.style.display = index < visibleCount ? 'block' : 'none';
            });

            loadMoreBtn.addEventListener('click', () => {
                // Show the next set of items with fade-in effect
                for (let i = visibleCount; i < visibleCount + itemsPerPage; i++) {
                    if (serviceItems[i]) {
                        fadeIn(serviceItems[i]);
                    }
                }

                // Update the visible count
                visibleCount += itemsPerPage;

                // If all items are visible, hide the Load More button and show the Collapse button
                if (visibleCount >= serviceItems.length) {
                    loadMoreBtn.classList.add('d-none');
                    collapseBtn.classList.remove('d-none');
                }
            });

            collapseBtn.addEventListener('click', () => {
                // Collapse all items except the first 2 with fade-out effect
                serviceItems.forEach((item, index) => {
                    if (index >= 2) {
                        fadeOut(item);
                    }
                });

                // Reset the visible count and button visibility
                visibleCount = 2;
                loadMoreBtn.classList.remove('d-none');
                collapseBtn.classList.add('d-none');

                // Hide the Load More button if only 2 or fewer items are available
                if (serviceItems.length <= visibleCount) {
                    loadMoreBtn.classList.add('d-none');
                }
            });
        });
    </script>

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
            img.onerror = () => {
                console.error('Failed to load image:', imgUrl);
                callback(null);
            };
            img.src = imgUrl;
        }

        const makeVCardVersion = () => `VERSION:3.0`;
        const makeVCardInfo = (lastName, firstName) => `N:${lastName || ''};${firstName || ''};;;`;
        const makeVCardName = (firstName, lastName) => `FN:${firstName || ''} ${lastName || ''}`;
        const makeVCardOrg = (org) => `ORG:${org || ''}`;
        const makeVCardTitle = (title) => `TITLE:${title || ''}`;
        const makeVCardPhoto = (imgBase64) => `PHOTO;ENCODING=b;TYPE=JPEG:${imgBase64}`;
        const makeVCardTel = (phone, type = 'CELL') => `TEL;TYPE=${type}:${phone || ''}`;
        const makeVCardAdr = (location, locationUrl) =>
            `ADR;TYPE=HOME:;;${location || ''};${locationUrl || ''};;;;`;
        // const makeVCardAdr = (addressLine1, addressLine2) =>
        //     `ADR;TYPE=HOME:;;${addressLine1 || ''};${addressLine2 || ''};;;;`;
        const makeVCardEmail = (email, type = 'INTERNET') => `EMAIL;TYPE=${type}:${email || ''}`;
        const makeVCardUrl = (url) => `URL:${url || ''}`;
        const makeVCardSocialProfile = (type, url) => `X-SOCIALPROFILE;TYPE=${type}:${url || ''}`;
        const makeVCardTimeStamp = () => `REV:${new Date().toISOString()}`;
        const makeVCardBday = (dob) => `BDAY:${dob || ''}`;
        const makeVCardLocation = (location, locationUrl) => `X-LOCATION:${location || ''};${locationUrl || ''}`;
        const makeVCardCompany = (company) => `ORG:${company || ''}`;

        function makeVCard(profileImageBase64) {
            const firstName = "{{ optional($nfc_card->nfcData)->first_name }}";
            const lastName = "{{ optional($nfc_card->nfcData)->last_name }}";
            const designation = "{{ optional($nfc_card)->job_title }}";
            const phonePersonal = "{{ optional($nfc_card->nfcData)->phone_personal }}";
            const phoneWork = "{{ optional($nfc_card->nfcData)->phone_work }}";
            const emailPersonal = "{{ optional($nfc_card->nfcData)->email_personal }}";
            const emailWork = "{{ optional($nfc_card->nfcData)->email_work }}";
            const addressLine1 = "{{ optional($nfc_card->nfcData)->address_line_one }}";
            const addressLine2 = "{{ optional($nfc_card->nfcData)->address_line_two }}";
            const website = "{{ optional($nfc_card->nfcData)->website_url }}";
            const linkedin = "{{ optional($nfc_card->nfcData)->linkedin_url }}";
            const facebook = "{{ optional($nfc_card->nfcData)->facebook_url }}";
            const instagram = "{{ optional($nfc_card->nfcData)->instagram_url }}";
            const whatsapp = "{{ optional($nfc_card->nfcData)->whatsapp_url }}";
            const twitter = "{{ optional($nfc_card->nfcData)->twitter_url }}";
            const youtube = "{{ optional($nfc_card->nfcData)->youtube_url }}";
            const pinterest = "{{ optional($nfc_card->nfcData)->pinterest_url }}";
            const reddit = "{{ optional($nfc_card->nfcData)->reddit_url }}";
            const tumblr = "{{ optional($nfc_card->nfcData)->tumblr_url }}";
            const tiktok = "{{ optional($nfc_card->nfcData)->tiktok_url }}";
            const location = `{{ optional($nfc_card->nfcData)->location }}`;
            const locationUrl = "{{ optional($nfc_card->nfcData)->location_url }}";
            const dob = "{{ optional($nfc_card->nfcData)->date_of_birth }}";
            const companyName = "{{ optional($nfc_card->nfcData)->company_name }}";

            let vcard = `BEGIN:VCARD\n${makeVCardVersion()}\n`;
            vcard += `${makeVCardInfo(lastName, firstName)}\n`;
            vcard += `${makeVCardName(firstName, lastName)}\n`;
            vcard += `${makeVCardTitle(designation)}\n`;
            vcard += `${makeVCardCompany(companyName)}\n`;

            if (profileImageBase64) {
                vcard += `${makeVCardPhoto(profileImageBase64)}\n`;
            }

            vcard += `${makeVCardTel(phonePersonal)}\n`;
            vcard += `${makeVCardTel(phoneWork, 'WORK')}\n`;

            if (addressLine1 || addressLine2) {
                vcard += `${makeVCardAdr(addressLine1, addressLine2)}\n`;
            }

            if (addressLine1 || addressLine2) {
                vcard += `${makeVCardAdr(addressLine1, addressLine2)}\n`;
            }


            if (emailPersonal) {
                vcard += `${makeVCardEmail(emailPersonal)}\n`;
            }
            if (emailWork) {
                vcard += `${makeVCardEmail(emailWork, 'WORK')}\n`;
            }

            if (website) {
                vcard += `${makeVCardUrl(website)}\n`;
                vcard += `${makeVCardSocialProfile('website', website)}\n`;
            }
            if (linkedin) {
                vcard += `${makeVCardUrl(linkedin)}\n`;
                vcard += `${makeVCardSocialProfile('linkedin', linkedin)}\n`;
            }
            if (facebook) {
                vcard += `${makeVCardUrl(facebook)}\n`;
                vcard += `${makeVCardSocialProfile('facebook', facebook)}\n`;
            }
            if (instagram) {
                vcard += `${makeVCardUrl(instagram)}\n`;
                vcard += `${makeVCardSocialProfile('instagram', instagram)}\n`;
            }
            if (whatsapp) {
                vcard += `${makeVCardUrl(whatsapp)}\n`;
                vcard += `${makeVCardSocialProfile('whatsapp', whatsapp)}\n`;
            }
            if (twitter) {
                vcard += `${makeVCardUrl(twitter)}\n`;
                vcard += `${makeVCardSocialProfile('twitter', twitter)}\n`;
            }
            if (youtube) {
                vcard += `${makeVCardUrl(youtube)}\n`;
                vcard += `${makeVCardSocialProfile('youtube', youtube)}\n`;
            }
            if (pinterest) {
                vcard += `${makeVCardUrl(pinterest)}\n`;
                vcard += `${makeVCardSocialProfile('pinterest', pinterest)}\n`;
            }
            if (reddit) {
                vcard += `${makeVCardUrl(reddit)}\n`;
                vcard += `${makeVCardSocialProfile('reddit', reddit)}\n`;
            }
            if (tumblr) {
                vcard += `${makeVCardUrl(tumblr)}\n`;
                vcard += `${makeVCardSocialProfile('tumblr', tumblr)}\n`;
            }
            if (tiktok) {
                vcard += `${makeVCardUrl(tiktok)}\n`;
                vcard += `${makeVCardSocialProfile('tiktok', tiktok)}\n`;
            }

            if (dob) {
                vcard += `${makeVCardBday(dob)}\n`;
            }
            if (location || locationUrl) {
                vcard += `${makeVCardLocation(location, locationUrl)}\n`;
            }


            vcard += `${makeVCardTimeStamp()}\nEND:VCARD`;

            return vcard;
        }

        function handleContactButtonClick(event, isMobile) {
            event.preventDefault(); // Prevent default link behavior

            const profileImage = '{{ asset('storage/nfc/' . optional($nfc_card)->profile_image) }}';

            getBase64Image(profileImage, (base64Image) => {
                const vcard = makeVCard(base64Image);

                if (isMobile) {
                    // Open vCard details in contact app for mobile
                    const encodedVcfContent = encodeURIComponent(vcard);
                    const uri = 'data:text/vcard;charset=utf-8,' + encodedVcfContent;
                    window.location.href = uri;
                } else {
                    // Download vCard for PC
                    const firstName = '{{ optional($nfc_card->nfcData)->first_name }}';
                    const lastName = '{{ optional($nfc_card->nfcData)->last_name }}';
                    const fileName = `${firstName}_${lastName}_contact.vcf`;
                    downloadToFile(vcard, fileName, 'text/vcard');
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

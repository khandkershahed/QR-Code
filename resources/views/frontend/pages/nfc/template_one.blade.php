{{-- <!DOCTYPE html>
<html lang="en"> --}}

<head>
    <title>
        {{ !empty(optional($nfc_card->nfcSeo)->site_title) ? optional($nfc_card->nfcSeo)->site_title : $nfc_card->vcard_name }}
    </title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="description" content="{{ optional($nfc_card->nfcSeo)->meta_description }}" />
    <meta name="keywords" content="{{ optional($nfc_card->nfcSeo)->meta_keyword }}" />
    <meta property="og:title" content="{{ optional($nfc_card->nfcSeo)->home_title }}" />
    <meta property="og:description" content="{{ optional($nfc_card)->bio_description }}" />
    <meta property="og:url" content="{{ optional($nfc_card->nfcSeo)->site_title }}" />
    <meta property="og:site_name"
        content="{{ !empty(optional($nfc_card->nfcSeo)->site_title) ? optional($nfc_card->nfcSeo)->site_title : $nfc_card->vcard_name }}" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <link rel="shortcut icon"
        href="{{ !empty($nfc_card->profile_image) && file_exists(public_path('storage/nfc/' . optional($nfc_card)->profile_image)) ? asset('storage/nfc/' . optional($nfc_card)->profile_image) : 'https://i.ibb.co/BNBTVN4/logo.png' }}"
        type="image/x-icon" />
    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <link rel="stylesheet" type="text/css"
        href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css" />

    <style>
        @import url("https://fonts.googleapis.com/css2?family=Almendra+SC&family=Anton&family=Anton+SC&family=Bebas+Neue&family=Jost:ital,wght@0,100..900;1,100..900&family=Margarine&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:ital,wght@0,100..900;1,100..900&family=Roboto+Slab:wght@100..900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap");

        :root {
            --template-one-color-white: #fff;
            --template-one-color-black: #000;
            --template-one-color-primary: #000000;
            --template-one-title-font-size: 48px;
            --template-one-others-font-size: 16px;
            --template-one-font-fmly-Almendra: "Almendra SC", serif;
            --template-one-font-fmly-Almendra: "Almendra SC", serif;
            --template-one-font-fmly-Bebas: "Bebas Neue", sans-serif;
            --template-one-font-fmly-Ubuntu: "Ubuntu", sans-serif;
            --template-one-font-fmly-Anton: "Anton SC", sans-serif;
            --template-one-font-fmly-Margarine: "Margarine", sans-serif;
            --template-one-font-fmly-Roboto: "Roboto Slab", serif;
            --template-one-font-fmly-Jost: "Jost", sans-serif;
            --template-one-font-fmly-Roboto: "Roboto", sans-serif;
            --template-one-font-fmly-Poppins: "Poppins", sans-serif;
            --template-one-font-fmly-Raleway: "Raleway", sans-serif;
        }

        #preloader {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: #1f0061;
            /* Change this to match your page background */
            display: flex;
            justify-content: center;
            align-items: center;
            z-index: 9999;
        }

        .mobile-frame {
            width: 535px;
            margin: auto;
            max-width: 100%;
            box-shadow: rgba(99, 99, 99, 0.2) 0px 2px 8px 0px;
            background-color: var(--template-one-color-primary);
            font-family: var(--template-one-font-fmly-Roboto);
        }

        .page-content-wrapper {
            width: 100%;
            margin: auto;
            margin-bottom: 62px;
            background-color: var(--template-one-color-primary);
        }

        .img-container-tem1 {
            position: relative;
            display: inline-block;
            /* Or any other display property that suits your layout */
        }

        .img-container-tem1::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(to top,
                    rgb(0, 0, 0),
                    rgba(255, 255, 255, 0));
            pointer-events: none;
            /* Allows clicks to pass through the overlay */
            z-index: 1;
            /* Make sure it's on top of the image */
        }

        .img-container-tem1 img {
            display: block;
            width: 100%;
            height: 430px;
            object-fit: cover;
        }

        .language-tem1 {
            position: absolute;
            top: 20px;
            right: 20px;
        }

        .profile-img-tem1 {
            box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;
        }

        .profile-img-tem1 img {
            width: 150px;
            height: 150px;
            border: 8px solid white;
            object-fit: cover;
        }

        .name-title-tem1 {
            font-family: var(--template-one-font-fmly-Bebas);
            color: var(--template-one-color-white);
        }

        .social-link-tem1 {
            background: #464646;
            padding: 15px 17px;
            color: var(--template-one-color-white);
            box-shadow: rgba(255, 255, 255, 0.24) 0px 3px 8px;
            margin-left: 13px;
            border-radius: 50%;
        }

        .text-justify {
            text-align: justify;
        }

        .special-font {
            font-family: var(--template-one-font-fmly-Bebas);
            letter-spacing: 2px;
        }

        .divider-tem1 {
            width: 45%;
            height: 2px;
            background-color: var(--template-one-color-white);
        }

        .divider-tem1-icons {
            width: 10%;
        }

        /* Additional styles for the arrow buttons */
        .slick-prev,
        .slick-next {
            font-size: 0;
            line-height: 0;
            position: absolute;
            top: 50%;
            margin: 50px;
            display: block;
            width: 45px;
            height: 45px;
            padding: 0;
            -webkit-transform: translate(0, -50%);
            -ms-transform: translate(0, -50%);
            transform: translate(0, -50%);
            cursor: pointer;
            border: none;
            outline: none;
            background: #00000038;
            z-index: 5;
        }

        /* Arrow hover and focus styles */
        .slick-prev:hover,
        .slick-prev:focus,
        .slick-next:hover,
        .slick-next:focus {
            background: var(--template-one-color-primary);
        }

        .slick-prev:before,
        .slick-next:before {
            font-family: 'Roboto' !important;
        }

        /* Arrow color */
        .slick-prev::before,
        .slick-next::before {
            color: var(--template-one-color-white);
        }

        /* Specific styling for slick dots */
        .slick-dots li button::before {
            font-family: 'slick';
            font-size: 6px;
            line-height: 20px;
            position: absolute;
            top: -45px;
            left: 0;
            width: 20px;
            height: 20px;
            content: '•';
            text-align: center;
            opacity: 0.25;
            color: var(--template-one-color-primary);
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
            background: var(--template-one-color-white);
        }

        /* Specific styling for product images */
        .product-img-tem1 {
            width: 100%;
            height: 100%;
            object-fit: cover;
            background-size: contain;
        }



        .product-img-box {
            widows: 100%;
            height: 250px;
            object-fit: cover;
        }

        .slick-slide {
            height: auto;
        }

        .footer-nav-area-tem1 {
            position: fixed;
            bottom: 0;
            left: 0;
            width: 100%;
            z-index: 1000;
        }

        .footer-nav-tem1 {
            /* background-color: var(--white); */
            box-shadow: rgba(149, 157, 165, 0.2) 0px 8px 24px;
            background-color: var(--info-500);
            width: 535px;
            height: 62px;
            margin: auto;
        }

        .footer-nav-tem1 ul {
            position: relative;
            z-index: 10;
            width: 100%;
            list-style-type: none;
            box-shadow: rgb(255 255 255 / 20%) 0px 2px 8px 0px;
            background: var(--template-one-color-primary);
        }

        .footer-nav-tem1 ul li {
            position: relative;
            z-index: 1;
            -webkit-box-flex: 1;
            -ms-flex: 1 1 0px;
            flex: 1 1 0;
        }

        .footer-nav-tem1 ul li a {
            position: relative;
            display: block;
            font-size: var(--template-one-others-font-size);
            text-align: center;
            font-weight: 600;
            text-transform: capitalize;
            line-height: 1;
            color: var(--template-one-color-white);
            text-decoration: none;
            z-index: 1;
        }

        .footer-nav-tem1 ul li.active a {
            background-color: var(--template-one-color-white);
            padding: 24px;
            color: var(--template-one-color-primary);
        }

        .modal.fade .load-modal {
            transition: transform 0.3s ease-out;
            transform: translate(-8px, 0) !important;
        }

        .close-btns {
            background-color: var(--template-one-color-white);
        }

        .card-img-top {
            width: 150px;
            display: flex;
            justify-content: center;
            align-items: center;
            margin: auto;
        }

        @media only screen and (max-width: 600px) {
            .footer-nav-tem1 {
                width: 100%;
            }

            .footer-nav-tem2 {
                width: 100%
            }

            .product-box {
                margin: 10px;
            }

            .vcard-share {
                width: 60%;
                margin: auto;
            }
        }
    </style>
</head>

<body>
    <div id="preloader">
        <img src="{{ asset('frontend') }}/assets/images/client-logos/preloader.svg" alt="Loading...">
    </div>
    <main>
        <div class="mobile-frame">
            <div class="page-content-wrapper">
                <!-- Banner -->
                <section>
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-12 px-0 img-container-tem1">
                                <img src="{{ !empty($nfc_card->banner_image) && file_exists(public_path('storage/nfc/' . optional($nfc_card)->banner_image)) ? asset('storage/nfc/' . optional($nfc_card)->banner_image) : asset('frontend/images/no_image.png') }}"
                                    alt="" />
                                {{-- <div class="dropdown language-tem1">
                                    <button class="btn btn-dark dropdown-toggle rounded-0" type="button"
                                        data-bs-toggle="dropdown" aria-expanded="false">
                                        Dropdown button
                                    </button>
                                    <ul class="dropdown-menu rounded-0 w-100">
                                        <li><a class="dropdown-item" href="#">Arabic</a></li>
                                        <li>
                                            <a class="dropdown-item" href="#">Chinese</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="#">English</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="#">English</a>
                                        </li>
                                    </ul>
                                </div> --}}
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Profile Info -->
                @if ($nfc_card->general_info_show == '1')
                    <section>
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="profile-img-tem1 d-flex justify-content-center">
                                        <img class="img-fluid rounded-circle"
                                            src="{{ !empty($nfc_card->profile_image) && file_exists(public_path('storage/nfc/' . optional($nfc_card)->profile_image)) ? asset('storage/nfc/' . optional($nfc_card)->profile_image) : asset('frontend/images/no_image.png') }}"
                                            alt="" />
                                    </div>
                                    <div class="text-center py-4">
                                        <h1 class="name-title-tem1 mb-0">
                                            {{ optional($nfc_card->nfcData)->first_name }}&nbsp;{{ optional($nfc_card->nfcData)->last_name }}
                                        </h1>
                                        <p class="text-white">{{ optional($nfc_card)->designation }} </p>
                                    </div>
                                    @if ($nfc_card->social_links_show == '1')
                                        <div class="d-flex justify-content-center align-items-center">
                                            @if (!empty(optional($nfc_card->nfcData)->facebook_url))
                                                <a href="{{ optional($nfc_card->nfcData)->facebook_url }}"
                                                    class="social-link-tem1">
                                                    <i class="fa-brands fa-facebook-f"></i>
                                                </a>
                                            @endif
                                            @if (!empty(optional($nfc_card->nfcData)->instagram_url))
                                                <a href="{{ optional($nfc_card->nfcData)->instagram_url }}"
                                                    class="social-link-tem1">
                                                    <i class="fa-brands fa-instagram"></i>
                                                </a>
                                            @endif
                                            @if (!empty(optional($nfc_card->nfcData)->linkedin_url))
                                                <a href="{{ optional($nfc_card->nfcData)->linkedin_url }}"
                                                    class="social-link-tem1">
                                                    <i class="fa-brands fa-linkedin-in"></i>
                                                </a>
                                            @endif
                                            @if (!empty(optional($nfc_card->nfcData)->whatsapp_url))
                                                <a href="{{ optional($nfc_card->nfcData)->whatsapp_url }}"
                                                    class="social-link-tem1">
                                                    <i class="fa-brands fa-whatsapp"></i>
                                                </a>
                                            @endif
                                        </div>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- Bio Area -->
                    @if (!empty($nfc_card->bio_description))
                        <section>
                            <div class="container py-5">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <p class="text-center text-white">
                                            {{ $nfc_card->bio_description }}
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </section>
                    @endif
                    <!-- Date Area -->
                    @if (
                        !empty($nfc_card->nfcData->email_personal) ||
                            !empty($nfc_card->nfcData->email_work) ||
                            !empty($nfc_card->nfcData->phone_personal) ||
                            !empty($nfc_card->nfcData->phone_work) ||
                            !empty($nfc_card->nfcData->location) ||
                            !empty($nfc_card->nfcData->date_of_birth) ||
                            !empty($nfc_card->nfcData->address_line_two))
                        <section>
                            <div class="container py-5 pt-0">
                                <div class="row">
                                    @if (!empty($nfc_card->nfcData->email_personal) || !empty($nfc_card->nfcData->email_work))
                                        <div class="col-12">
                                            <div>
                                                <div class="d-flex align-items-center">
                                                    <div class="bg-white p-3">
                                                        <i class="fa fa-envelope social_icons text-black fs-3"></i>
                                                    </div>
                                                    <div class="text-white ps-3">
                                                        <small class="mb-0">E-Mail Address</small>
                                                        <p class="mb-0 special-font fs-6">
                                                            {{ $nfc_card->nfcData->email_personal }}</p>
                                                        <p class="mb-0 special-font fs-6">
                                                            {{ $nfc_card->nfcData->email_work }}</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endif
                                    @if (!empty($nfc_card->nfcData->phone_personal) || !empty($nfc_card->nfcData->phone_work))
                                        <div class="col-12 mt-4">
                                            <div>
                                                <div class="d-flex align-items-center">
                                                    <div class="bg-white p-3">
                                                        <i class="fa fa-phone social_icons text-black fs-3"></i>
                                                    </div>
                                                    <div class="text-white ps-3">
                                                        <small class="mb-0">Mobile Number</small>
                                                        <p class="mb-0 fs-6 special-font">
                                                            {{ $nfc_card->nfcData->phone_personal }}</p>
                                                        <p class="mb-0 fs-6 special-font">
                                                            {{ $nfc_card->nfcData->phone_work }}</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endif
                                    @if (!empty($nfc_card->nfcData->date_of_birth))
                                        <div class="col-12 mt-4">
                                            <div>
                                                <div class="d-flex align-items-center">
                                                    <div class="bg-white p-3">
                                                        <i class="fa fa-cake-candles social_icons text-black fs-3"></i>
                                                    </div>
                                                    <div class="text-white ps-3">
                                                        <small class="mb-0">Date Of Birth</small>
                                                        <p class="mb-0 fs-6 special-font">
                                                            {{ $nfc_card->nfcData->date_of_birth }}</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endif
                                    @if (!empty($nfc_card->nfcData->location))
                                        <div class="col-12 mt-4">
                                            <div>
                                                <div class="d-flex align-items-center">
                                                    <div class="bg-white p-3">
                                                        <i
                                                            class="fa-solid fa-flag-usa social_icons text-black fs-3"></i>
                                                    </div>
                                                    <div class="text-white ps-3">
                                                        <small class="mb-0">Country</small>
                                                        <p class="mb-0 fs-6 special-font">
                                                            {{ $nfc_card->nfcData->location }}</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endif
                                </div>
                            </div>
                        </section>
                    @endif
                @endif
                <!-- Company Info -->
                @if ($nfc_card->companies_show == '1')
                    <section>
                        <div class="container py-5">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="text-center">
                                        <h1 class="special-font text-white">My Company</h1>
                                        <div class="d-flex align-items-center px-5 w-50 mx-auto">
                                            <span class="divider-tem1"></span>
                                            <span class="divider-tem1-icons text-center"><i
                                                    class="fa-solid fa-diamond text-white"></i></span>
                                            <span class="divider-tem1"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="company-slide text-white px-0">
                                    @foreach ($nfc_card->nfcCompany as $company)
                                        <div class="">
                                            <div class="row pt-3 align-items-center">
                                                <div class="col-md-12 pb-3">
                                                    <div class="text-center text-white">
                                                        <h5>{{ $company->company_name }}</h5>
                                                        <p class="p-3 mb-0" style="text-align: justify">
                                                            {{ $company->company_description }}
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="text-white row py-4 pt-0 px-3 align-items-center">
                                                        <div class="col-lg-8 col-8">
                                                            <p class="mb-0">
                                                                <span><i
                                                                        class="fa-solid fa-diamond pe-3"></i>{{ $company->company_website }}</span>
                                                            </p>
                                                            <p class="mb-0">
                                                                <span><i class="fa-solid fa-diamond pe-3"></i>
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
                                                            <div class="d-flex justify-content-center">
                                                                <img class="img-fluid" width="150px"
                                                                    src="{{ !empty($company->company_logo) && file_exists(public_path('storage/nfc/company/' . optional($company)->company_logo)) ? asset('storage/nfc/company/' . optional($company)->company_logo) : asset('frontend/images/no_image.png') }}"
                                                                    alt="" />
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                {{-- <div class="col-md-4 bg-white d-flex justify-content-center mt-0"
                                                    style="height: 218px; margin: auto">
                                                    <div class="d-flex justify-content-center align-items-center">
                                                        <img class="img-fluid" width="150px"
                                                            src="{{ !empty($company->company_logo) && file_exists(public_path('storage/nfc/company/' . optional($company)->company_logo)) ? asset('storage/nfc/company/' . optional($company)->company_logo) : asset('frontend/images/no_image.png') }}"
                                                            alt="" />
                                                    </div>
                                                </div> --}}
                                                <div class="col-md-12 pe-0">
                                                    <div
                                                        style="display: flex;justify-content: center;align-items: center;">
                                                        @if (!empty($company->company_facebook))
                                                            <a href="{{ $company->company_facebook }}"
                                                                class="btn btn-dark rounded-0 mb-2">
                                                                <svg xmlns="http://www.w3.org/2000/svg" version="1.1"
                                                                    xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                    width="30" height="30" x="0" y="0"
                                                                    viewBox="0 0 512 512"
                                                                    style="enable-background:new 0 0 512 512"
                                                                    xml:space="preserve" class="">
                                                                    <g>
                                                                        <linearGradient id="b" x1="169.994"
                                                                            x2="299.493" y1="71.986"
                                                                            y2="349.055"
                                                                            gradientUnits="userSpaceOnUse">
                                                                            <stop offset="0" stop-color="#3457a0">
                                                                            </stop>
                                                                            <stop offset="1" stop-color="#3b5998">
                                                                            </stop>
                                                                        </linearGradient>
                                                                        <linearGradient id="a">
                                                                            <stop offset="0" stop-color="#3457a0"
                                                                                stop-opacity="0"></stop>
                                                                            <stop offset="1" stop-color="#1f3f77">
                                                                            </stop>
                                                                        </linearGradient>
                                                                        <linearGradient xlink:href="#a" id="c"
                                                                            x1="353.124" x2="-94.448"
                                                                            y1="322.733" y2="15.208"
                                                                            gradientUnits="userSpaceOnUse">
                                                                        </linearGradient>
                                                                        <linearGradient xlink:href="#a" id="d"
                                                                            x1="256" x2="256"
                                                                            y1="427.873" y2="497.157"
                                                                            gradientUnits="userSpaceOnUse">
                                                                        </linearGradient>
                                                                        <linearGradient id="e" x1="587.778"
                                                                            x2="232.407" y1="422.829"
                                                                            y2="243.638"
                                                                            gradientUnits="userSpaceOnUse">
                                                                            <stop offset="0" stop-color="#3457a0"
                                                                                stop-opacity="0"></stop>
                                                                            <stop offset=".325" stop-color="#2a4c8d"
                                                                                stop-opacity=".325"></stop>
                                                                            <stop offset=".705" stop-color="#22427d"
                                                                                stop-opacity=".706"></stop>
                                                                            <stop offset="1" stop-color="#1f3f77">
                                                                            </stop>
                                                                        </linearGradient>
                                                                        <path fill="url(#b)"
                                                                            d="M420.422 503.234c-109.504 11.688-219.34 11.688-328.844 0-43.664-4.66-78.152-39.148-82.812-82.816-11.688-109.504-11.688-219.336 0-328.84 4.66-43.664 39.148-78.152 82.812-82.812 109.504-11.688 219.336-11.688 328.84 0 43.668 4.66 78.156 39.148 82.816 82.812 11.688 109.504 11.688 219.336 0 328.84-4.66 43.668-39.144 78.156-82.812 82.816zm0 0"
                                                                            opacity="1" data-original="url(#b)">
                                                                        </path>
                                                                        <path fill="url(#a)"
                                                                            d="M475.387 110.098c-4.133-38.746-34.735-69.352-73.485-73.489-97.172-10.367-194.632-10.367-291.804 0-38.746 4.137-69.352 34.743-73.489 73.489-10.367 97.172-10.367 194.632 0 291.8 4.137 38.75 34.743 69.356 73.489 73.489 97.172 10.37 194.632 10.37 291.8 0 38.75-4.133 69.356-34.739 73.489-73.489 10.37-97.168 10.37-194.628 0-291.8zm0 0"
                                                                            opacity="1" data-original="url(#a)">
                                                                        </path>
                                                                        <path fill="url(#a)"
                                                                            d="M7.672 409.805c.351 3.539.715 7.078 1.094 10.617 4.66 43.664 39.148 78.152 82.816 82.812 109.504 11.688 219.336 11.688 328.84 0 43.668-4.66 78.152-39.148 82.812-82.812.38-3.54.743-7.078 1.098-10.617zm0 0"
                                                                            opacity="1" data-original="url(#a)">
                                                                        </path>
                                                                        <path fill="url(#e)"
                                                                            d="M344.215 85.27c-44.61 0-80.77 36.164-80.77 80.773v60.332h-43.468v74.7l43.468 38.933v171.969c52.352-.254 104.7-3.165 156.977-8.743 43.668-4.66 78.152-39.148 82.812-82.816 8.696-81.477 10.918-163.133 6.672-244.703L419.461 85.27zm0 0"
                                                                            opacity="1" data-original="url(#e)">
                                                                        </path>
                                                                        <path fill="#ffffff"
                                                                            d="M263.445 511.977c29.832-.145 59.66-1.157 89.477-3.032v-207.87h59.367l7.172-74.7h-66.54v-47.434c0-10.476 8.493-18.968 18.97-18.968h47.57V85.27h-75.246c-44.61 0-80.77 36.164-80.77 80.773v60.332h-43.468v74.7h43.468zm0 0"
                                                                            opacity="1" data-original="#ffffff">
                                                                        </path>
                                                                    </g>
                                                                </svg>
                                                            </a>
                                                        @endif
                                                        @if (!empty($company->company_youtube))
                                                            <a href="{{ $company->company_youtube }}"
                                                                class="btn btn-dark rounded-0 mb-2">
                                                                <svg xmlns="http://www.w3.org/2000/svg" version="1.1"
                                                                    xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                    width="30" height="30" x="0" y="0"
                                                                    viewBox="0 0 510 510"
                                                                    style="enable-background:new 0 0 512 512"
                                                                    xml:space="preserve" class="">
                                                                    <g>
                                                                        <linearGradient id="b" x1="125.695"
                                                                            x2="392.303" y1="125.695"
                                                                            y2="392.303"
                                                                            gradientUnits="userSpaceOnUse">
                                                                            <stop offset="0" stop-color="#ff637b">
                                                                            </stop>
                                                                            <stop offset="1" stop-color="#f90217">
                                                                            </stop>
                                                                        </linearGradient>
                                                                        <linearGradient id="a">
                                                                            <stop offset="0" stop-color="#f90217"
                                                                                stop-opacity="0"></stop>
                                                                            <stop offset=".267" stop-color="#e7010f"
                                                                                stop-opacity=".267"></stop>
                                                                            <stop offset=".723" stop-color="#ce0004"
                                                                                stop-opacity=".723"></stop>
                                                                            <stop offset="1" stop-color="#c50000">
                                                                            </stop>
                                                                        </linearGradient>
                                                                        <linearGradient xlink:href="#a" id="c"
                                                                            x1="255" x2="255"
                                                                            y1="362" y2="465.078"
                                                                            gradientUnits="userSpaceOnUse">
                                                                        </linearGradient>
                                                                        <linearGradient xlink:href="#a" id="d"
                                                                            x1="389.216" x2="291.556"
                                                                            y1="425.826" y2="289.302"
                                                                            gradientUnits="userSpaceOnUse">
                                                                        </linearGradient>
                                                                        <linearGradient id="e" x1="225.813"
                                                                            x2="284.822" y1="244.322"
                                                                            y2="303.331"
                                                                            gradientUnits="userSpaceOnUse">
                                                                            <stop offset="0" stop-color="#ebeff0">
                                                                            </stop>
                                                                            <stop offset="1" stop-color="#e3e5e4">
                                                                            </stop>
                                                                        </linearGradient>
                                                                        <path fill="url(#b)"
                                                                            d="M486.851 106.657c-6.973-22.264-25.135-39.239-47.871-44.472-122.185-28.124-245.779-28.124-367.962 0-22.736 5.233-40.897 22.208-47.87 44.472-30.868 98.556-30.863 198.142.001 296.687 6.973 22.264 25.135 39.239 47.87 44.472 122.183 28.124 245.776 28.124 367.961 0 22.735-5.233 40.897-22.208 47.87-44.472 30.865-98.546 30.868-198.13.001-296.687z"
                                                                            opacity="1" data-original="url(#b)"
                                                                            class=""></path>
                                                                        <path fill="url(#c)"
                                                                            d="M2.508 303.736c3.402 33.267 10.271 66.496 20.641 99.607 6.973 22.263 25.135 39.239 47.87 44.472 122.183 28.124 245.776 28.124 367.961 0 22.735-5.233 40.897-22.208 47.87-44.472 10.37-33.111 17.239-66.34 20.641-99.607z"
                                                                            opacity="1" data-original="url(#c)">
                                                                        </path>
                                                                        <path fill="url(#d)"
                                                                            d="M438.981 447.815c22.735-5.233 40.897-22.208 47.87-44.472a523.818 523.818 0 0 0 9.861-35.91L369.254 239.975a26.641 26.641 0 0 0-7.927-7.614l-135.986-83.288c-17.797-11.162-38.921-.371-38.921 20.637v170.579c0 9.496 2.731 17.303 9.554 21.988l105.3 105.3c46.001-2.643 91.953-9.23 137.707-19.762z"
                                                                            opacity="1" data-original="url(#d)">
                                                                        </path>
                                                                        <path fill="url(#e)"
                                                                            d="m361.327 232.361-135.986-85.289c-17.797-11.162-40.922 1.631-40.922 22.639V340.29c0 21.008 23.125 33.801 40.922 22.639l135.986-85.289c16.699-10.475 16.699-34.805 0-45.279z"
                                                                            opacity="1" data-original="url(#e)">
                                                                        </path>
                                                                    </g>
                                                                </svg>
                                                            </a>
                                                        @endif
                                                        @if (!empty($company->company_linkedin))
                                                            <a href="{{ $company->company_linkedin }}"
                                                                class="btn btn-dark rounded-0 mb-2">
                                                                <svg xmlns="http://www.w3.org/2000/svg" version="1.1"
                                                                    xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                    width="30" height="30" x="0" y="0"
                                                                    viewBox="0 0 64 64"
                                                                    style="enable-background:new 0 0 512 512"
                                                                    xml:space="preserve" class="">
                                                                    <g>
                                                                        <g fill-rule="evenodd">
                                                                            <path fill="#2864b4"
                                                                                d="M48 64H16A16 16 0 0 1 0 48V16A16 16 0 0 1 16 0h32a16 16 0 0 1 16 16v32a16 16 0 0 1-16 16"
                                                                                opacity="1"
                                                                                data-original="#2864b4"></path>
                                                                            <path fill="#417dcd"
                                                                                d="M30 18h18A9 9 0 0 0 48.92.046C48.614.029 48.311 0 48 0H16A16 16 0 0 0 0 16v32a30 30 0 0 1 30-30"
                                                                                opacity="1" data-original="#417dcd"
                                                                                class=""></path>
                                                                            <path fill="#0f4b9b"
                                                                                d="M48 32a16 16 0 1 0 16 16V16a16 16 0 0 1-16 16"
                                                                                opacity="1"
                                                                                data-original="#0f4b9b"></path>
                                                                        </g>
                                                                        <rect width="8" height="27" x="12"
                                                                            y="25" fill="#ffffff" rx="2"
                                                                            opacity="1" data-original="#ffffff">
                                                                        </rect>
                                                                        <circle cx="16" cy="16" r="5"
                                                                            fill="#ffffff" opacity="1"
                                                                            data-original="#ffffff"></circle>
                                                                        <path fill="#ffffff" fill-rule="evenodd"
                                                                            d="M34 28.64A9.216 9.216 0 0 1 42 24c5.087 0 10 3 10 11v15a2 2 0 0 1-2 2h-4a2 2 0 0 1-2-2V36a5 5 0 0 0-10 0v14a2 2 0 0 1-2 2h-4a2 2 0 0 1-2-2V27a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2z"
                                                                            opacity="1" data-original="#ffffff">
                                                                        </path>
                                                                    </g>
                                                                </svg>
                                                            </a>
                                                        @endif
                                                        @if (!empty($company->company_instagram))
                                                            <a href="{{ $company->company_instagram }}"
                                                                class="btn btn-dark rounded-0 mb-2">
                                                                <svg xmlns="http://www.w3.org/2000/svg" version="1.1"
                                                                    xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                    width="30" height="30" x="0" y="0"
                                                                    viewBox="0 0 512 512"
                                                                    style="enable-background:new 0 0 512 512"
                                                                    xml:space="preserve" class="">
                                                                    <g>
                                                                        <defs>
                                                                            <linearGradient id="a"
                                                                                x1="328.27" x2="183.73"
                                                                                y1="508.05" y2="3.95"
                                                                                gradientUnits="userSpaceOnUse">
                                                                                <stop offset="0"
                                                                                    stop-color="#ffdb73"></stop>
                                                                                <stop offset=".08"
                                                                                    stop-color="#fdad4e"></stop>
                                                                                <stop offset=".15"
                                                                                    stop-color="#fb832e"></stop>
                                                                                <stop offset=".19"
                                                                                    stop-color="#fa7321"></stop>
                                                                                <stop offset=".23"
                                                                                    stop-color="#f6692f"></stop>
                                                                                <stop offset=".37"
                                                                                    stop-color="#e84a5a"></stop>
                                                                                <stop offset=".48"
                                                                                    stop-color="#e03675"></stop>
                                                                                <stop offset=".55"
                                                                                    stop-color="#dd2f7f"></stop>
                                                                                <stop offset=".68"
                                                                                    stop-color="#b43d97"></stop>
                                                                                <stop offset=".97"
                                                                                    stop-color="#4d60d4"></stop>
                                                                                <stop offset="1"
                                                                                    stop-color="#4264db"></stop>
                                                                            </linearGradient>
                                                                        </defs>
                                                                        <rect width="465.06" height="465.06" x="23.47"
                                                                            y="23.47" class="cls-1" rx="107.23"
                                                                            ry="107.23" style="fill:url(#a)"
                                                                            fill=""></rect>
                                                                        <path
                                                                            d="M331 115.22a66.92 66.92 0 0 1 66.65 66.65v148.26A66.92 66.92 0 0 1 331 396.78H181a66.92 66.92 0 0 1-66.65-66.65V181.87A66.92 66.92 0 0 1 181 115.22h150m0-31H181c-53.71 0-97.66 44-97.66 97.66v148.25c0 53.71 44 97.66 97.66 97.66h150c53.71 0 97.66-44 97.66-97.66V181.87c0-53.71-43.95-97.66-97.66-97.66Z"
                                                                            class="" fill="#ffffff"
                                                                            opacity="1" data-original="#000000">
                                                                        </path>
                                                                        <path
                                                                            d="M256 198.13A57.87 57.87 0 1 1 198.13 256 57.94 57.94 0 0 1 256 198.13m0-31A88.87 88.87 0 1 0 344.87 256 88.87 88.87 0 0 0 256 167.13Z"
                                                                            class="" fill="#ffffff"
                                                                            opacity="1" data-original="#000000">
                                                                        </path>
                                                                        <circle cx="346.81" cy="163.23"
                                                                            r="21.07" class="" fill="#ffffff"
                                                                            opacity="1" data-original="#000000">
                                                                        </circle>
                                                                    </g>
                                                                </svg>
                                                            </a>
                                                        @endif
                                                        @if (!empty($company->company_twitter))
                                                            <a href="{{ $company->company_twitter }}"
                                                                class="btn btn-dark rounded-0 mb-2">
                                                                <svg xmlns="http://www.w3.org/2000/svg" version="1.1"
                                                                    xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                    width="30" height="30" x="0" y="0"
                                                                    viewBox="0 0 64 64"
                                                                    style="enable-background:new 0 0 512 512"
                                                                    xml:space="preserve" class="">
                                                                    <g>
                                                                        <g fill-rule="evenodd">
                                                                            <path fill="#0f9dff"
                                                                                d="M48 64H16A16 16 0 0 1 0 48V16A16 16 0 0 1 16 0h32a16 16 0 0 1 16 16v32a16 16 0 0 1-16 16"
                                                                                opacity="1" data-original="#0f9dff"
                                                                                class=""></path>
                                                                            <path fill="#00b7ff"
                                                                                d="M30 18h18A9 9 0 0 0 48.92.046C48.614.029 48.311 0 48 0H16A16 16 0 0 0 0 16v32a30 30 0 0 1 30-30"
                                                                                opacity="1"
                                                                                data-original="#00b7ff"></path>
                                                                            <path fill="#1d83ff"
                                                                                d="M48 32a16 16 0 1 0 16 16V16a16 16 0 0 1-16 16"
                                                                                opacity="1"
                                                                                data-original="#1d83ff"></path>
                                                                        </g>
                                                                        <path fill="#ffffff"
                                                                            d="M24.576 48.256c15.338 0 23.845-13.024 23.328-24.4a16.524 16.524 0 0 0 3.057-2.864.498.498 0 0 0-.543-.786 16.886 16.886 0 0 1-2.058.521.25.25 0 0 1-.194-.444 8.23 8.23 0 0 0 2.169-2.607.491.491 0 0 0-.657-.661 16.816 16.816 0 0 1-3.998 1.321 8.207 8.207 0 0 0-14.192 5.616 8.736 8.736 0 0 0 .147 1.559.25.25 0 0 1-.261.296 23.274 23.274 0 0 1-15.556-7.375.994.994 0 0 0-1.685.364 7.97 7.97 0 0 0 2.493 8.896.244.244 0 0 1-.186.433 7.916 7.916 0 0 1-1.381-.316.988.988 0 0 0-.967.196.949.949 0 0 0-.315.935c1.738 6.692 6.445 5.839 6.445 6.346 0 .343-.931.343-2.179.346a.986.986 0 0 0-.87 1.44 8.279 8.279 0 0 0 6.317 4.074.247.247 0 0 1 .126.447 16.372 16.372 0 0 1-7.707 2.997.969.969 0 0 0-.309 1.854 22.946 22.946 0 0 0 8.976 1.812z"
                                                                            opacity="1" data-original="#ffffff">
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
                <!-- Servies Box -->
                @if ($nfc_card->services_show == '1')
                    <section>
                        <div class="container pb-5">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="text-center">
                                        <h1 class="special-font text-white">My Services</h1>
                                        <div class="d-flex align-items-center px-5 w-50 mx-auto">
                                            <span class="divider-tem1"></span>
                                            <span class="divider-tem1-icons text-center"><i
                                                    class="fa-solid fa-diamond text-white"></i></span>
                                            <span class="divider-tem1"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="service-slide pt-3">
                                @foreach ($nfc_card->nfcService as $service)
                                    <div class="card me-2 rounded-0 border-0 service-details-box">
                                        <div class="card-body border-0 bg-dark">
                                            <div>
                                                <img class="card-img-top img-fluid"
                                                    src="{{ !empty($service->service_icon) && file_exists(public_path('storage/nfc/service/' . optional($service)->service_icon)) ? asset('storage/nfc/service/' . optional($service)->service_icon) : asset('frontend/images/no_image.png') }}"
                                                    alt="" />
                                            </div>
                                            <div class="mt-3 text-center" style="">
                                                <h4 class="mb-0 special-font text-white">
                                                    {{ $service->service_name }}
                                                </h4>
                                                <p class="text-white">
                                                    {!! $service->service_description !!}
                                                </p>
                                                <div class="w-50 mx-auto">
                                                    <a href="{{ !empty(optional($service)->service_url ) ? optional($service)->service_url : 'javascript:void(0)'}}"
                                                        class="btn btn-light rounded-0 w-100 border-2 border-dark py-2">
                                                        View Service <i class="fa-solid fa-arrow-right-long"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </section>
                @endif

                <!-- Product -->
                @if ($nfc_card->products_show == '1')
                    <section>
                        <div class="container pb-5">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="text-center">
                                        <h1 class="special-font text-white">My Product</h1>
                                        <div class="d-flex align-items-center px-5 w-50 mx-auto">
                                            <span class="divider-tem1"></span>
                                            <span class="divider-tem1-icons text-center"><i
                                                    class="fa-solid fa-diamond text-white"></i></span>
                                            <span class="divider-tem1"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row pt-3 product-slide">
                                @foreach ($nfc_card->nfcProduct as $product)
                                    <div class="col-md-4 me-2">
                                        <div class="card border-0 product-box">
                                            <div class="card-body p-0">
                                                <div class="product-img-box">
                                                    <img class="img-fluid rounded-2 product-img-tem1"
                                                        src="{{ !empty($product->product_icon) && file_exists(public_path('storage/nfc/product/' . optional($product)->product_icon)) ? asset('storage/nfc/product/' . optional($product)->product_icon) : asset('frontend/images/no_image.png') }}"
                                                        alt="" />
                                                </div>
                                                <div
                                                    class="d-flex justify-content-between px-4 py-3 align-items-center bg-dark">
                                                    <h4 class="special-font mb-0 text-white">
                                                        {{ $product->product_name }}</h4>
                                                    <h4 class="special-font mb-0 text-white">
                                                        @if ($product->product_currency == 'taka')
                                                            Tk
                                                        @elseif ($product->product_currency == 'euro')
                                                            €
                                                        @elseif ($product->product_currency == 'dollar')
                                                            $
                                                        @elseif ($product->product_currency == 'pound')
                                                            £
                                                        @endif{{ $product->product_price }}
                                                    </h4>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </section>
                @endif
                <!-- Galery -->
                @if ($nfc_card->galleries_show == '1' && $nfc_card->nfcGallery && $nfc_card->nfcGallery->isNotEmpty())
                    @if ($nfc_card->galleries_show)
                        <section>
                            <div class="container pb-5">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="text-center">
                                            <h1 class="special-font text-white">My Gallery</h1>
                                            <div class="d-flex align-items-center px-5 w-50 mx-auto">
                                                <span class="divider-tem1"></span>
                                                <span class="divider-tem1-icons text-center"><i
                                                        class="fa-solid fa-diamond text-white"></i></span>
                                                <span class="divider-tem1"></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row pt-3">
                                    <div class="col-lg-12">
                                        <div class="galery-slide">
                                            @foreach ($nfc_card->nfcGallery as $gallery)
                                                <div>
                                                    @if ($gallery->gallery_type == 'image')
                                                        <img class="w-100 img-fluid"
                                                            src="{{ !empty($gallery->gallery_attachment) && file_exists(public_path('storage/nfc/gallery/' . optional($gallery)->gallery_attachment)) ? asset('storage/nfc/gallery/' . optional($gallery)->gallery_attachment) : asset('frontend/images/no_image.png') }}"
                                                            alt="" />
                                                    @else
                                                        {{-- <div class="video-wrapper">
                                                        <iframe width="600" height="338"
                                                            src="{{ optional($gallery)->gallery_link }}"
                                                            frameborder="0" allowfullscreen></iframe>
                                                    </div> --}}
                                                    @endif
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                    @endif
                @endif
                <!-- Testimonial -->
                @if ($nfc_card->testimonials_show == '1' && $nfc_card->nfcTestimonial && $nfc_card->nfcTestimonial->isNotEmpty())
                    <section>
                        <div class="container pb-5">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="text-center">
                                        <h1 class="special-font text-white">My Testimonial</h1>
                                        <div class="d-flex align-items-center px-5 w-50 mx-auto">
                                            <span class="divider-tem1"></span>
                                            <span class="divider-tem1-icons text-center"><i
                                                    class="fa-solid fa-diamond text-white"></i></span>
                                            <span class="divider-tem1"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-10 col-offset-md-1 mx-auto">
                                    <div class="testimonial-slide">
                                        @foreach ($nfc_card->nfcTestimonial as $testimonial)
                                            <div class="card p-0 bg-dark border-0 p-0 mt-5">
                                                <div class="card-body rounded-0 border-0">
                                                    <div class="d-flex justify-content-center"
                                                        style="margin-top: -40px">
                                                        <img class="img-fluid" width="80px" height="80px"
                                                            src="{{ !empty($testimonial->testimonial_image) && file_exists(public_path('storage/nfc/testimonial/' . optional($testimonial)->testimonial_image)) ? asset('storage/nfc/testimonial/' . optional($testimonial)->testimonial_image) : asset('frontend/images/no_image.png') }}"
                                                            alt="" />
                                                    </div>
                                                    <h4 class="special-font text-white text-center pt-3">
                                                        {{ $testimonial->testimonial_name }}
                                                    </h4>
                                                    <p class="mb-0 text-white text-center">
                                                        {{ $testimonial->testimonial_description }}
                                                    </p>

                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                @endif

                <!-- Testimonial -->
                @if ($nfc_card->show_qr_code == '1')
                    <section>
                        <div class="container pb-5">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="text-center">
                                        <h1 class="special-font text-white">QR Code</h1>
                                        <div class="d-flex align-items-center px-5 w-50 mx-auto">
                                            <span class="divider-tem1"></span>
                                            <span class="divider-tem1-icons text-center"><i
                                                    class="fa-solid fa-diamond text-white"></i></span>
                                            <span class="divider-tem1"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row pt-3">
                                <div class="col-md-12">
                                    <div class="w-50 mx-auto">
                                        @if (!empty($nfc_card->nfc_qr) && file_exists(public_path('storage/nfc/qrs/' . $nfc_card->nfc_qr)))
                                            <img class="img-fluid"
                                                src="{{ asset('storage/nfc/qrs/' . $nfc_card->nfc_qr) }}"
                                                alt="" />
                                        @endif
                                        @if ($nfc_card->enable_download_qr_code == '1')
                                            <div>
                                                <a href="{{ asset('storage/nfc/qrs/' . $nfc_card->nfc_qr) }}"
                                                    download=""
                                                    class="btn btn-dark rounded-0 w-100 border-2 border-dark">Download
                                                    QR</a>
                                            </div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                @endif
                <!-- Business Hours -->
                @if (
                    $nfc_card->business_hours_show == '1' &&
                        (optional($nfc_card->nfcData)->monday == '1' ||
                            optional($nfc_card->nfcData)->tuesday == '1' ||
                            optional($nfc_card->nfcData)->wednesday == '1' ||
                            optional($nfc_card->nfcData)->thursday == '1' ||
                            optional($nfc_card->nfcData)->friday == '1' ||
                            optional($nfc_card->nfcData)->saturday == '1' ||
                            optional($nfc_card->nfcData)->sunday == '1'))
                    <section>
                        <div class="container pb-5">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="text-center">
                                        <h1 class="special-font text-white">Business Hours</h1>
                                        <div class="d-flex align-items-center px-5 w-50 mx-auto">
                                            <span class="divider-tem1"></span>
                                            <span class="divider-tem1-icons text-center"><i
                                                    class="fa-solid fa-diamond text-white"></i></span>
                                            <span class="divider-tem1"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row pt-5">
                                @if (optional($nfc_card->nfcData)->monday == '1')
                                    <div class="col-md-6 mb-2">
                                        <div>
                                            <div class="text-center text-white">
                                                <i class="fa fa-calendar houricon"></i>
                                            </div>
                                            <div class="text-center">
                                                <p class="mb-0 text-white special-font">Monday</p>
                                                <p class="mb-0 text-white">
                                                    {{ optional($nfc_card->nfcData)->start_time_monday }} -
                                                    {{ optional($nfc_card->nfcData)->end_time_monday }}</p>
                                            </div>
                                        </div>
                                    </div>
                                @endif
                                @if (optional($nfc_card->nfcData)->tuesday == '1')
                                    <div class="col-md-6 mb-2">
                                        <div>
                                            <div class="text-center text-white">
                                                <i class="fa fa-calendar houricon"></i>
                                            </div>
                                            <div class="text-center">
                                                <p class="mb-0 text-white special-font">Tuesday</p>
                                                <p class="mb-0 text-white">
                                                    {{ optional($nfc_card->nfcData)->start_time_tuesday }} -
                                                    {{ optional($nfc_card->nfcData)->end_time_tuesday }}</p>
                                            </div>
                                        </div>
                                    </div>
                                @endif
                                @if (optional($nfc_card->nfcData)->wednesday == '1')
                                    <div class="col-md-6 mb-2">
                                        <div>
                                            <div class="text-center text-white">
                                                <i class="fa fa-calendar houricon"></i>
                                            </div>
                                            <div class="text-center">
                                                <p class="mb-0 text-white special-font">Wednesday</p>
                                                <p class="mb-0 text-white">
                                                    {{ optional($nfc_card->nfcData)->start_time_wednesday }} -
                                                    {{ optional($nfc_card->nfcData)->end_time_wednesday }}</p>
                                            </div>
                                        </div>
                                    </div>
                                @endif
                                @if (optional($nfc_card->nfcData)->thursday == '1')
                                    <div class="col-md-6 mb-2">
                                        <div>
                                            <div class="text-center text-white">
                                                <i class="fa fa-calendar houricon"></i>
                                            </div>
                                            <div class="text-center">
                                                <p class="mb-0 text-white special-font">Thursday</p>
                                                <p class="mb-0 text-white">
                                                    {{ optional($nfc_card->nfcData)->start_time_thursday }} -
                                                    {{ optional($nfc_card->nfcData)->end_time_thursday }}</p>
                                            </div>
                                        </div>
                                    </div>
                                @endif
                                @if (optional($nfc_card->nfcData)->friday == '1')
                                    <div class="col-md-6 mb-2">
                                        <div>
                                            <div class="text-center text-white">
                                                <i class="fa fa-calendar houricon"></i>
                                            </div>
                                            <div class="text-center">
                                                <p class="mb-0 text-white special-font">Friday</p>
                                                <p class="mb-0 text-white">
                                                    {{ optional($nfc_card->nfcData)->start_time_friday }} -
                                                    {{ optional($nfc_card->nfcData)->end_time_friday }}</p>
                                            </div>
                                        </div>
                                    </div>
                                @endif
                                @if (optional($nfc_card->nfcData)->saturday == '1')
                                    <div class="col-md-6 mb-2">
                                        <div>
                                            <div class="text-center text-white">
                                                <i class="fa fa-calendar houricon"></i>
                                            </div>
                                            <div class="text-center">
                                                <p class="mb-0 text-white special-font">Saturday</p>
                                                <p class="mb-0 text-white">
                                                    {{ optional($nfc_card->nfcData)->start_time_saturday }} -
                                                    {{ optional($nfc_card->nfcData)->end_time_saturday }}</p>
                                            </div>
                                        </div>
                                    </div>
                                @endif
                                @if (optional($nfc_card->nfcData)->sunday == '1')
                                    <div class="col-md-6 mb-2">
                                        <div>
                                            <div class="text-center text-white">
                                                <i class="fa fa-calendar houricon"></i>
                                            </div>
                                            <div class="text-center">
                                                <p class="mb-0 text-white special-font">Sunday</p>
                                                <p class="mb-0 text-white">
                                                    {{ optional($nfc_card->nfcData)->start_time_sunday }} -
                                                    {{ optional($nfc_card->nfcData)->end_time_sunday }}</p>
                                            </div>
                                        </div>
                                    </div>
                                @endif
                            </div>
                        </div>
                    </section>
                @endif

                <!-- Contact Area -->
                <section>
                    <div class="container pb-5">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="text-center">
                                    <h1 class="special-font text-white">Contact</h1>
                                    <div class="d-flex align-items-center px-5 w-50 mx-auto">
                                        <span class="divider-tem1"></span>
                                        <span class="divider-tem1-icons text-center"><i
                                                class="fa-solid fa-diamond text-white"></i></span>
                                        <span class="divider-tem1"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row pt-4">
                            <div class="co-md-12">
                                <form action="{{ route('individual-message.store') }}" method="post">
                                    @csrf
                                    <input type="hidden" name="user_id" value="{{ optional($nfc_card)->user_id }}">
                                    <input type="hidden" name="nfc_id" value="{{ optional($nfc_card)->id }}">
                                    <input type="hidden" name="nfc_code" value="{{ optional($nfc_card)->code }}">
                                    <div class="row">
                                        <div class="col-lg-12 mb-3">
                                            <input type="text" name="name"
                                                class="form-control form-control-sm rounded-0 w-75 mx-auto rounded-1 p-2"
                                                placeholder="Enter Your Names" />
                                        </div>
                                        <div class="col-lg-12 mb-3">
                                            <input type="email" name="email"
                                                class="form-control form-control-sm rounded-0 w-75 mx-auto rounded-1 p-2"
                                                placeholder="Enter Your Email" />
                                        </div>
                                        <div class="col-lg-12 mb-3">
                                            <input type="text" name="phone"
                                                class="form-control form-control-sm rounded-0 w-75 mx-auto rounded-1 p-2"
                                                placeholder="Enter Your Phone" />
                                        </div>
                                        <div class="col-lg-12 mb-3">
                                            <textarea name="message" class="form-control form-control-sm rounded-0 w-75 mx-auto rounded-1 p-2" id=""
                                                rows="5"></textarea>
                                        </div>
                                        <div class="col-lg-12 w-75 mx-auto px-2">
                                            <button type="submit" class="btn btn-dark w-100">
                                                Send Message <i class="fa-solid fa-paper-plane"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        @php
                            $currentUrl = request()->url();
                            $whatsappLink =
                                'https://wa.me/?text=' . urlencode('Check out My NFC Profile: ' . $currentUrl);
                        @endphp

                        <!-- Create a button or link to share via WhatsApp -->

                        <div class="row py-5">
                            <div class="col-lg-12">
                                <div class="text-center">
                                    <h1 class="special-font text-white">Share</h1>
                                    <div class="d-flex align-items-center px-5 w-50 mx-auto">
                                        <span class="divider-tem1"></span>
                                        <span class="divider-tem1-icons text-center"><i
                                                class="fa-solid fa-diamond text-white"></i></span>
                                        <span class="divider-tem1"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-7 col-offset-lg-6 mx-auto vcard-share">
                                <a href="{{ $whatsappLink }}" target="_blank" rel="noopener noreferrer"
                                    class="btn btn-dark w-100 p-3 ">
                                    <i class="fa-solid fa-paper-plane"></i> Share This Vcard
                                </a>

                            </div>
                        </div>
                    </div>
                </section>
            </div>
            <div class="footer-nav-area-tem1" id="footerNav">
                <div class="container px-0">
                    <!-- Footer Content -->
                    <div class="footer-nav-tem1 position-relative">
                        <ul class="h-100 d-flex align-items-center justify-content-between ps-0">
                            <li class="active">
                                <a href="{{ asset('storage/nfc/qrs/' . $nfc_card->nfc_qr) }}" download="">
                                    <i class="fa-solid fa-qrcode"></i>
                                    <span>QR</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="copy-link" data-link="{{ $currentUrl }}">
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
        <!-- On Page Load Show Modal -->
        <!-- Modal -->
        @if ($nfc_card->banner == '1')
            <div class="modal fade" id="myModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog load-modal modal-dialog-centered">
                    <div class="modal-content rounded-0">
                        <div class="modal-header bg-dark rounded-0 text-white">
                            <h5 class="modal-title" id="exampleModalLabel">
                                {{ optional($nfc_card->nfcBanner)->banner_title }}</h5>
                            <button type="button" class="btn-close text-white close-btns" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            {{ optional($nfc_card->nfcBanner)->banner_description }}
                        </div>
                        <div class="modal-footer">
                            <a href="{{ !empty(optional($nfc_card->nfcBanner)->banner_url ) ? optional($nfc_card->nfcBanner)->banner_url : 'javascript:void(0)'}}"
                                class="btn btn-sm btn-dark text-black"
                                style="background-color: var(--template-three-color-primary);">View</a>
                        </div>
                    </div>
                </div>
            </div>
        @endif

        <!-- On Page Load Show Modal End -->
    </main>

    <script src="https://kit.fontawesome.com/69b7156a94.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"></script>

    <script type="text/javascript" src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script>
        window.addEventListener('load', function() {
            document.getElementById('preloader').style.display = 'none';
        });
    </script>
    <script>
        // Function to replace YouTube watch URL with embed URL
        function replaceYouTubeSrc() {
            document.querySelectorAll('.video-wrapper iframe').forEach(function(iframe) {
                let src = iframe.src;
                if (src.startsWith('https://www.youtube.com/watch?v=')) {
                    iframe.src = src.replace('https://www.youtube.com/watch?v=', 'https://www.youtube.com/embed/');
                }
            });
        }

        // Call the function after the DOM has fully loaded
        document.addEventListener('DOMContentLoaded', replaceYouTubeSrc);
    </script>
    <!-- On Page Load Show Modal -->
    <script>
        var myModal = new bootstrap.Modal(document.getElementById("myModal"), {
            keyboard: false, // Optional: Disable closing modal with keyboard Esc key
        });
        $(document).ready(function() {
            myModal.show(); // Show the modal on document ready
        });
    </script>
    <!-- Copy On Click -->
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
    <!-- All Slider -->
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
            $(".service-slide").slick({
                infinite: true, // Infinite looping
                speed: 500, // Animation speed in milliseconds
                slidesToShow: 1, // Number of slides to show at once
                slidesToScroll: 1, // Number of slides to scroll at once
                autoplay: true, // Enable autoplay
                autoplaySpeed: 2000, // Autoplay speed in milliseconds
                arrows: true, // Show next/prev arrows
                gap: 10,
                prevArrow: '<button type="button" class="slick-prev"><i class="fa fa-chevron-left"></i></button>',
                nextArrow: '<button type="button" class="slick-next"><i class="fa fa-chevron-right"></i></button>',
            });
            $(".product-slide").slick({
                infinite: true,
                speed: 500,
                slidesToShow: 2,
                slidesToScroll: 1,
                autoplay: true,
                autoplaySpeed: 2000,
                arrows: false,
                responsive: [{
                    breakpoint: 768, // This is the screen width at which the settings will change
                    settings: {
                        slidesToShow: 1, // Show only one slide on screens smaller than 768px
                        slidesToScroll: 1
                    }
                }]
            });
            $(".galery-slide").slick({
                infinite: true,
                speed: 500,
                slidesToShow: 1,
                slidesToScroll: 1,
                autoplay: true,
                autoplaySpeed: 2000,
                arrows: false,
                dots: true,
            });
            $(".testimonial-slide").slick({
                infinite: true,
                speed: 500,
                slidesToShow: 1,
                slidesToScroll: 1,
                autoplay: true,
                autoplaySpeed: 2000,
                arrows: false,
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
        const makeVCardAdr = (addressLine1, addressLine2) =>
            `ADR;TYPE=HOME:;;${addressLine1 || ''};${addressLine2 || ''};;;;`;
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

</body>

{{-- </html> --}}

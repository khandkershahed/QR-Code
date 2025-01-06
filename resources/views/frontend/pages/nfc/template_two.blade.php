<!DOCTYPE html>
<html lang="en">

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
        href="{{ !empty($nfc_card->profile_image) && file_exists(public_path('storage/nfc/' . optional($nfc_card)->profile_image)) ? asset('storage/nfc/' . optional($nfc_card)->profile_image) : asset('frontend/assets/images/logos/logo.png') }}"
        type="image/x-icon" />

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <link rel="stylesheet" type="text/css"
        href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css" />

    <style>
        @import url("https://fonts.googleapis.com/css2?family=Almendra+SC&family=Anton&family=Anton+SC&family=Bebas+Neue&family=Jost:ital,wght@0,100..900;1,100..900&family=Margarine&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:ital,wght@0,100..900;1,100..900&family=Roboto+Slab:wght@100..900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap");

        body {
            background: linear-gradient(to top,
                    rgba(0, 0, 0, 1),
                    /* Solid black at the bottom */
                    rgba(0, 0, 0, 0.8) 40%,
                    /* Slightly lighter black */
                    rgba(0, 0, 0, 0.6) 70%,
                    /* Even lighter black */
                    transparent 100%
                    /* Fully transparent at the top */
                );
        }

        :root {
            --template-two-color-white: #fff;
            --template-two-color-black: #000;
            --template-two-color-primary: #88a7ec;
            --template-two-title-font-size: 48px;
            --template-two-others-font-size: 20px;
            --template-two-font-fmly-Almendra: "Almendra SC", serif;
            --template-two-font-fmly-Almendra: "Almendra SC", serif;
            --template-two-font-fmly-Bebas: "Bebas Neue", sans-serif;
            --template-two-font-fmly-Ubuntu: "Ubuntu", sans-serif;
            --template-two-font-fmly-Anton: "Anton SC", sans-serif;
            --template-two-font-fmly-Margarine: "Margarine", sans-serif;
            --template-two-font-fmly-Roboto: "Roboto Slab", serif;
            --template-two-font-fmly-Jost: "Jost", sans-serif;
            --template-two-font-fmly-Roboto: "Roboto", sans-serif;
            --template-two-font-fmly-Poppins: "Poppins", sans-serif;
            --template-two-font-fmly-Raleway: "Raleway", sans-serif;
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

        a {
            text-decoration: none;
        }

        .mobile-frame {
            width: 535px;
            margin: auto;
            max-width: 100%;
            box-shadow: rgba(99, 99, 99, 0.2) 0px 2px 8px 0px;
            font-family: var(--template-two-font-fmly-Roboto);
        }

        .video-wrapper {
            position: relative;
            padding-bottom: 56.25%;
            padding-top: 25px;
            height: 0;
        }

        .video-wrapper iframe {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
        }

        .page-content-wrapper {
            width: 100%;
            margin: auto;
            background-color: #000000;
            background-image: linear-gradient(147deg, #000000 0%, #2c3e50 74%);
        }

        .section-top-tem2 {
            margin-top: -70px;
            position: relative;
        }

        .profile-img-tem2 img {
            width: 190px;
            height: 190px;
            object-fit: cover;
            border: 2px dashed var(--template-two-color-primary);
            /* Existing dashed border */
            border-radius: 8px;
            /* Optional: Adjust border radius if you want rounded corners */
            border-image: linear-gradient(45deg, #ff7e5f, #feb47b) 1;
            /* Gradient border */
            padding: 4px;
            /* Padding to create space for the gradient border */
            background-clip: content-box;
            /* Ensures the gradient doesn't overlap the image */
        }

        .name-title-tem2 {
            font-family: var(--template-two-font-fmly-Bebas);
            color: var(--template-two-color-white);
        }

        .product-content-tem2 {
            height: 170px;
        }

        .product-content-tem2 h6 {
            height: 50px;
        }

        .company_logo {
            width: 70px;
            height: 70px;
            background: var(--template-two-color-white);
            padding: 4px;
            border-radius: 100%;
            object-fit: cover;
        }

        .company-btn-tem2 {
            background-color: var(--template-two-color-white);
            border-radius: 3px !important;
        }

        .company-btn-tem2:hover {
            background-color: transparent;
            transition: all 0.5s ease-in-out;
        }

        .contact-icons-tem2 {
            padding: 11px 11px 10px;
            width: 50px;
            height: 50px;
            color: var(--template-two-color-primary);
            box-shadow: rgba(255, 255, 255, 0.24) 0px 3px 8px;
            border-radius: 50%;
            font: var(--template-two-others-font-size);
        }

        .social_icons {

            background: linear-gradient(45deg, #ff7e5f, #feb47b);
            color: white;
        }

        .social-link-tem2 {
            background: linear-gradient(45deg, #ff7e5f, #feb47b);
            color: white;
            /* Gradient background */
            padding: 5px 0px 0px 12px;
            width: 40px;
            height: 40px;
            color: var(--template-two-color-primary);
            box-shadow: rgba(255, 255, 255, 0.24) 0px 3px 8px;
            margin-right: 10px;
            font: var(--template-two-others-font-size);
            font-size: 20px;
        }

        .social-link-tem2 i {
            color: white;
        }

        .text-justify {
            text-align: justify;
        }

        .special-font {
            font-family: var(--template-two-font-fmly-Bebas);
        }

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
            color: transparent;
            border: none;
            outline: none;
            background: var(--template-two-color-black);
            z-index: 5;
        }

        .slick-prev:hover,
        .slick-prev:focus,
        .slick-next:hover,
        .slick-next:focus {
            background: var(--template-two-color-primary);
        }

        .slick-prev:before,
        .slick-next:before {
            color: var(--template-two-color-white);
        }

        .product-img-box {
            width: 100%;
            height: 210px;
            display: flex;
            align-items: center;
        }

        .product-img-box img {
            width: 100%;
            height: 220px;
            object-fit: contain;
        }

        .slick-dots li button:before {
            font-family: "slick";
            font-size: 9px;
            line-height: 23px;
            position: absolute;
            top: 0px;
            left: 0px;
            width: 20px;
            height: 20px;
            content: "•";
            text-align: center;
            opacity: 0.25;
            color: var(--template-two-color-black);
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
            background: var(--template-two-color-white);
            border-radius: 100%;
        }

        .footer-nav-area {
            position: fixed;
            bottom: 0;
            left: 0;
            width: 100%;
            z-index: 1000;
        }

        .footer-nav-tem2 {
            /* background-color: var(--white); */
            box-shadow: rgba(149, 157, 165, 0.2) 0px 8px 24px;
            background-color: var(--info-500);
            width: 535px;
            height: 62px;
            margin: auto;
        }

        .footer-nav-tem2 ul {
            position: relative;
            z-index: 10;
            width: 100%;
            list-style-type: none;
            box-shadow: rgb(255 255 255 / 20%) 0px 2px 8px 0px;
            background: linear-gradient(45deg, #ff7e5f, #feb47b);
        }

        .footer-nav-tem2 ul li {
            position: relative;
            z-index: 1;
            -webkit-box-flex: 1;
            -ms-flex: 1 1 0px;
            flex: 1 1 0;
        }

        .footer-nav-tem2 ul li a {
            position: relative;
            display: block;
            font-size: 16px;
            text-align: center;
            font-weight: 600;
            text-transform: capitalize;
            line-height: 1;
            color: var(--template-two-color-white);
            text-decoration: none;
            z-index: 1;
        }

        .footer-nav-tem2 ul li.active a {
            background-color: var(--template-two-color-white);
            padding: 24px;
            color: var(--template-two-color-black);
        }

        .modal.fade .load-modal {
            transition: transform 0.3s ease-out;
            transform: translate(-8px, 0) !important;
        }

        .close-btns {
            background-color: var(--template-two-color-white);
        }

        .image-container-tem2 {
            height: 385px;
            width: 100%;
            object-fit: cover;
        }

        .shape-container-tem2 {
            margin-top: -250px;
            width: 100%;
            height: 229px;
        }

        .language-2 {
            position: absolute;
            top: 0rem;
        }

        .card-img-top {
            width: 200px;
            height: 200px;
            object-fit: cover;
            margin: auto;
        }

        .overlay-container {
            position: relative;
            display: inline-block;
            /* Adjust as per your layout needs */
            width: 100%;
            /* Ensure it spans the same width as the image */
        }

        .overlay-container::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: linear-gradient(to top, rgba(0, 0, 0, 1),
                    /* Solid black at the bottom */
                    rgb(0 0 0 / 52%) 40%,
                    /* Slightly lighter black */
                    rgb(0 0 0 / 0%) 70%,
                    /* Even lighter black */
                    transparent 100%
                    /* Fully transparent at the top */
                );
            pointer-events: none;
            /* Ensures the overlay doesn't block interactions */
            z-index: 1;
            /* Stacks the overlay above the image */
        }

        .image-container-tem2 {
            display: block;
            /* Ensures proper image rendering */
            width: 100%;
            /* Maintains responsiveness */
        }

        .service-two-images {
            height: 180px;
            object-fit: cover;
            width: 100%;
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

        .two-profile {
            position: relative;
            z-index: 10;
        }

        .btn-link {
            color: #ffffff;
            font-size: 12px;
            padding: 2px 5px !important;
            text-decoration: none;
            background-color: #000000a8;
        }

        .load-more-btn-box {
            background: linear-gradient(to top, rgb(37 51 66 / 0%),
                    /* Solid black at the bottom */
                    rgb(36 52 67) 40%,
                    /* Slightly lighter black */
                    rgb(36 50 65 / 64%) 70%,
                    /* Even lighter black */
                    transparent 100%
                    /* Fully transparent at the top */
                );
            height: 170px;
            display: flex;
            justify-content: center;
            align-items: center;
            margin-top: -65px !important;
            z-index: 555;
            position: relative;
        }

        .btn-dark {
            background: linear-gradient(45deg, #ff7e5f, #feb47b);
            border: 2px solid #ff7e5f;
        }

        .btn-dark:hover {
            background: transparent;
            border: 2px solid #ff7e5f;
        }

        .testmonial-cards {
            height: 300px;
            display: flex;
            align-content: center;
        }

        a {
            text-decoration: none;
            color: white;
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

        .gallery-images img {
            width: 100%;
            height: 300px;
            object-fit: cover;
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
                    <div class="container px-0">
                        <div class="row">
                            <div class="col-12">
                                <div class="overlay-container">
                                    <img class="img-fluid image-container-tem2 w-100"
                                        src="{{ !empty($nfc_card->banner_image) && file_exists(public_path('storage/nfc/' . optional($nfc_card)->banner_image)) ? asset('storage/nfc/' . optional($nfc_card)->banner_image) : asset('frontend/images/no_image.png') }}"
                                        alt="" />
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <div class="section-top-tem2 px-4">
                    <!-- Profile Info -->
                    <section>
                        <div class="container px-3">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="d-flex align-items-center two-profile">
                                        <div class="profile-img-tem2">
                                            <img class="img-fluid"
                                                src="{{ !empty($nfc_card->profile_image) && file_exists(public_path('storage/nfc/' . optional($nfc_card)->profile_image)) ? asset('storage/nfc/' . optional($nfc_card)->profile_image) : asset('frontend/images/no_image.png') }}"
                                                alt="" />
                                        </div>
                                        <div class="user-name-rotate-tem2 ps-4">
                                            <h2 class="name-title-tem2 mb-0">
                                                {{ optional($nfc_card->nfcData)->first_name }}
                                                {{ optional($nfc_card->nfcData)->last_name }}
                                            </h2>
                                            <div class="pt-2">
                                                <p class="text-white mb-1">{{ optional($nfc_card)->designation }} </p>
                                                <p class="text-white">{{ optional($nfc_card->nfcData)->company_name }}
                                                </p>
                                                <div>
                                                    @if ($nfc_card->social_links_show == '1')
                                                        <div
                                                            class="d-flex justify-content-start align-items-center social-rotate-tem2">
                                                            @if (!empty(optional($nfc_card->nfcData)->facebook_url))
                                                                <a href="{{ optional($nfc_card->nfcData)->facebook_url }}"
                                                                    class="social-link-tem2"><i
                                                                        class="fa-brands fa-facebook-f"></i></a>
                                                            @endif
                                                            @if (!empty(optional($nfc_card->nfcData)->instagram_url))
                                                                <a href="{{ optional($nfc_card->nfcData)->instagram_url }}"
                                                                    class="social-link-tem2"><i
                                                                        class="fa-brands fa-instagram"></i></a>
                                                            @endif
                                                            @if (!empty(optional($nfc_card->nfcData)->linkedin_url))
                                                                <a href="{{ optional($nfc_card->nfcData)->linkedin_url }}"
                                                                    class="social-link-tem2"><i
                                                                        class="fa-brands fa-linkedin-in"></i></a>
                                                            @endif
                                                            @if (!empty(optional($nfc_card->nfcData)->whatsapp_url))
                                                                <a href="{{ optional($nfc_card->nfcData)->whatsapp_url }}"
                                                                    class="social-link-tem2"><i
                                                                        class="fa-brands fa-whatsapp"></i></a>
                                                            @endif
                                                            @if (!empty(optional($nfc_card->nfcData)->twitter_url))
                                                                <a href="{{ optional($nfc_card->nfcData)->twitter_url }}"
                                                                    class="social-link-tem2"><i
                                                                        class="fa-brands fa-twitter"></i></a>
                                                            @endif
                                                        </div>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- Bio Area -->
                    <section>
                        <div class="container py-4 pt-3">
                            <div class="row align-items-center">
                                <div class="col-sm-12">
                                    @if (!empty($nfc_card->bio_description))
                                        <p class="text-white mb-0 text-justify pt-4">
                                            {{ $nfc_card->bio_description }}
                                        </p>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- Date Area -->
                    @if (
                        !empty(optional($nfc_card->nfcData)->email_personal) ||
                            !empty(optional($nfc_card->nfcData)->email_work) ||
                            !empty(optional($nfc_card->nfcData)->phone_personal) ||
                            !empty(optional($nfc_card->nfcData)->phone_work) ||
                            !empty(optional($nfc_card->nfcData)->location) ||
                            !empty(optional($nfc_card->nfcData)->date_of_birth) ||
                            !empty(optional($nfc_card->nfcData)->address_line_two))
                        <section>
                            <div class="container py-5">
                                <div class="row">
                                    @if (!empty(optional($nfc_card->nfcData)->email_personal) || !empty(optional($nfc_card->nfcData)->email_work))
                                        <div class="col-12">
                                            <div class="text-white d-flex align-items-center mb-4">
                                                <div class="">
                                                    <i class="fa fa-at social_icons fs-3 contact-icons-tem2"></i>
                                                </div>
                                                <div class="ps-3">
                                                    <p class="mb-2 fw-bold">Email <small>(Personal)</small></p>
                                                    @if (!empty(optional($nfc_card->nfcData)->email_personal))
                                                        <p class="mb-0">
                                                            <a
                                                                href="mailto:{{ optional($nfc_card->nfcData)->email_personal }}">{{ optional($nfc_card->nfcData)->email_personal }}</a>
                                                        </p>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                    @endif
                                    @if (!empty(optional($nfc_card->nfcData)->email_personal) || !empty(optional($nfc_card->nfcData)->email_work))
                                        <div class="col-12">
                                            <div class="text-white d-flex align-items-center mb-4">
                                                <div class="">
                                                    <i class="fa fa-envelope social_icons fs-3 contact-icons-tem2"></i>
                                                </div>
                                                <div class="ps-3">
                                                    <p class="mb-2 fw-bold">Mail <small>(Work)</small></p>
                                                    @if (!empty(optional($nfc_card->nfcData)->email_work))
                                                        <p class="mb-0">
                                                            <a
                                                                href="mailto:{{ optional($nfc_card->nfcData)->email_work }}">{{ optional($nfc_card->nfcData)->email_work }}</a>
                                                        </p>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                    @endif
                                    @if (!empty(optional($nfc_card->nfcData)->phone_personal) || !empty(optional($nfc_card->nfcData)->phone_work))
                                        <div class="col-12">
                                            <div class="text-white d-flex align-items-center mb-4">
                                                <div class="">
                                                    <i class="fa fa-phone social_icons fs-3 contact-icons-tem2"></i>
                                                </div>
                                                <div class="ps-3">
                                                    <p class="mb-2 fw-bold">Phone <small>(Personal)</small></p>
                                                    @if (!empty(optional($nfc_card->nfcData)->phone_personal))
                                                        <p class="mb-0">
                                                            <a
                                                                href="tel:{{ optional($nfc_card->nfcData)->phone_personal }}">{{ optional($nfc_card->nfcData)->phone_personal }}</a>
                                                        </p>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                    @endif
                                    @if (!empty(optional($nfc_card->nfcData)->phone_personal) || !empty(optional($nfc_card->nfcData)->phone_work))
                                        <div class="col-12">
                                            <div class="text-white d-flex align-items-center mb-4">
                                                <div class="">
                                                    <i
                                                        class="fa-solid fa-mobile-screen-button social_icons fs-3 contact-icons-tem2"></i>
                                                </div>
                                                <div class="ps-3">
                                                    <p class="mb-2 fw-bold">Phone <small>(Work)</small></p>
                                                    @if (!empty(optional($nfc_card->nfcData)->phone_work))
                                                        <p class="mb-0">
                                                            <a
                                                                href="tel:{{ optional($nfc_card->nfcData)->phone_work }}">{{ optional($nfc_card->nfcData)->phone_work }}</a>
                                                        </p>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                    @endif
                                    @if (!empty(optional($nfc_card->nfcData)->date_of_birth))
                                        <div class="col-12">
                                            <div class="text-white d-flex align-items-center mb-4">
                                                <div class="">
                                                    <i
                                                        class="fa-solid fa-cake-candles social_icons fs-3 contact-icons-tem2"></i>
                                                </div>
                                                <div class="ps-3">
                                                    <p class="fw-bold mb-2">Date Of Birth</small>
                                                    <p class="mb-0">
                                                        {{ optional($nfc_card->nfcData)->date_of_birth ? \Carbon\Carbon::parse(optional($nfc_card->nfcData)->date_of_birth)->format('l, F, Y') : '' }}
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    @endif
                                    @if (!empty(optional($nfc_card->nfcData)->fax))
                                        <div class="col-12">
                                            <div class="text-white d-flex align-items-center mb-4">
                                                <div class="">
                                                    <i
                                                        class="fa-solid fa-fax social_icons fs-3 contact-icons-tem2"></i>
                                                </div>
                                                <div class="ps-3">
                                                    <p class="mb-2 fw-bold">Fax Number</small>
                                                    <p class="mb-0">{{ optional($nfc_card->nfcData)->fax }}</p>
                                                </div>
                                            </div>
                                        </div>
                                    @endif

                                    @if (!empty(optional($nfc_card->nfcData)->location))
                                        <div class="col-12">
                                            <div class="text-white d-flex align-items-center mb-4">
                                                <div class="">
                                                    <i
                                                        class="fa fa-location-dot social_icons fs-3 contact-icons-tem2 text-center"></i>
                                                </div>
                                                <div class="ps-3">
                                                    <p class="mb-2 fw-bold">Location</small>
                                                    <p class="mb-0">{{ optional($nfc_card->nfcData)->location }}
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    @endif
                                </div>
                            </div>
                        </section>
                    @endif
                    <!-- Company Info -->
                    @if ($nfc_card->companies_show == '1' && $nfc_card->nfcCompany->count() > 0)
                        <section>
                            <div class="container py-5 pt-0">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="text-center">
                                            <h1 class="special-font text-white">My Company</h1>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="company-slide text-white px-0">
                                        @foreach ($nfc_card->nfcCompany as $company)
                                            <div class="">
                                                <div class="row pt-3 align-items-center">
                                                    <div class="col-12">
                                                        <div class="text-center text-white">
                                                            <div
                                                                class="d-flex justify-content-center align-items-center">
                                                                <img class="img-fluid company_logo"
                                                                    src="{{ !empty($company->company_logo) && file_exists(public_path('storage/nfc/company/' . optional($company)->company_logo)) ? asset('storage/nfc/company/' . optional($company)->company_logo) : asset('frontend/images/no_image.png') }}"
                                                                    alt="" />
                                                            </div>
                                                            <h5 class="pt-4">{{ $company->company_name }}</h5>
                                                            <div class="company-details">
                                                                <p class="p-3 mb-0" style="text-align: justify">
                                                                    {{ $company->company_description }}
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="ps-4 mt-4">
                                                            <p class="mb-0">
                                                                <span>
                                                                    <i class="fa-solid fa-globe pe-3"></i>
                                                                    {{ $company->company_website }}
                                                                </span>
                                                            </p>
                                                            <p class="mb-0">
                                                                <span>
                                                                    <i class="fa-solid fa-phone pe-3"></i>
                                                                    {{ $company->company_phone }}
                                                                </span>
                                                            </p>
                                                            <p class="mb-0">
                                                                <span>
                                                                    <i class="fa-regular fa-envelope pe-3"></i>
                                                                    {{ $company->company_email }}
                                                                </span>
                                                            </p>
                                                            <p class="mb-0">
                                                                <span>
                                                                    <i class="fa-solid fa-location pe-3"></i>
                                                                    {{ $company->company_address_line_one }}
                                                                    {{ $company->company_address_line_two }}
                                                                </span>
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        @if ($nfc_card->social_links_show == '1')
                                                            <div class="px-3 d-flex row mt-4">
                                                                @if (!empty($company->company_website))
                                                                    <a href="{{ $company->company_website }}"
                                                                        class="btn btn-sm company-btn-tem2 col rounded-0 mb-2 w-100 me-2">Website</a>
                                                                @endif
                                                                @if (!empty($company->company_facebook))
                                                                    <a href="{{ $company->company_facebook }}"
                                                                        class="btn company-btn-tem2 col rounded-0 mb-2 w-100 me-2">Facebook</a>
                                                                @endif
                                                                @if (!empty($company->company_twitter))
                                                                    <a href="{{ $company->company_twitter }}"
                                                                        class="btn company-btn-tem2 col rounded-0 mb-2 w-100 me-2">Twitter</a>
                                                                @endif
                                                                @if (!empty($company->company_linkedin))
                                                                    <a href="{{ $company->company_linkedin }}"
                                                                        class="btn company-btn-tem2 col rounded-0 mb-2 w-100 me-2">Linkedin</a>
                                                                @endif
                                                                @if (!empty($company->company_youtube))
                                                                    <a href="{{ $company->company_youtube }}"
                                                                        class="btn company-btn-tem2 col rounded-0 mb-2 w-100 me-2">Youtube</a>
                                                                @endif
                                                                @if (!empty($company->company_instagram))
                                                                    <a href="{{ $company->company_instagram }}"
                                                                        class="btn company-btn-tem2 col rounded-0 mb-2 w-100">Instagram</a>
                                                                @endif
                                                            </div>
                                                        @endif
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
                    @if ($nfc_card->services_show == '1' && $nfc_card->nfcService->count() > 0)
                        <section>
                            <div class="container px-0">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="text-center">
                                            <h1 class="special-font text-white">My Services</h1>
                                            <p class="px-4 pb-3 text-center text-white">Contact me to get more service
                                                details
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="container px-0">
                                        <div class="row" id="service-container">
                                            @foreach ($nfc_card->nfcService as $index => $service)
                                                <div class="col-lg-6 col-md-6 col-sm-12 mb-4 service-item"
                                                    data-index="{{ $index }}"
                                                    style="{{ $index > 1 ? 'display: none;' : '' }}">
                                                    <a
                                                        href="{{ !empty(optional($service)->service_url) ? optional($service)->service_url : 'javascript:void(0)' }}">
                                                        <div class="card rounded-0 border-0 h-100">
                                                            <div class="card-header p-0 border-0">
                                                                <img class="img-fluid service-two-images"
                                                                    src="{{ !empty($service->service_icon) && file_exists(public_path('storage/nfc/service/' . optional($service)->service_icon)) ? asset('storage/nfc/service/' . optional($service)->service_icon) : asset('frontend/images/no_image.png') }}"
                                                                    alt="" />
                                                            </div>
                                                            <div class="card-body border-0 p-0 d-flex flex-column">
                                                                <div class="mt-3 text-center flex-grow-1">
                                                                    <h6>{{ $service->service_name }}</h6>
                                                                    <p class="service-description">
                                                                        <span
                                                                            class="short-text">{{ Str::limit($service->service_description, 20) }}</span>
                                                                        <span
                                                                            class="full-text d-none">{{ $service->service_description }}</span>
                                                                        <br>
                                                                        <button
                                                                            class="my-3 rounded-0 btn btn-link p-0 read-more text-mute"
                                                                            onclick="toggleText(this)">Read
                                                                            More</button>
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </a>
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
                                </div>
                            </div>
                        </section>
                    @endif
                    <!-- Product -->
                    @if ($nfc_card->products_show == '1' && $nfc_card->nfcProduct->count() > 0)
                        <section>
                            <div class="container pb-5">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="text-center">
                                            <h1 class="special-font text-white">My Product</h1>
                                            <p class="px-4 pb-3 text-center text-white">For order please fill up the
                                                form below
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="row pt-3 product-slide">
                                    @foreach ($nfc_card->nfcProduct as $product)
                                        <div class="col-12 me-2">
                                            <div class="card border-0 ms-2">
                                                <div class="card-body p-0">
                                                    <div class="product-img-box">
                                                        <img class=""
                                                            src="{{ !empty($product->product_icon) && file_exists(public_path('storage/nfc/product/' . optional($product)->product_icon)) ? asset('storage/nfc/product/' . optional($product)->product_icon) : asset('frontend/images/no_image.png') }}"
                                                            alt="" />
                                                    </div>
                                                    <div class="product-content-tem2 px-3">
                                                        <h6 class="mb-0 pt-3">
                                                            {{ \Illuminate\Support\Str::limit($product->product_name, 10, '') }}
                                                        </h6>
                                                        <div class="pt-4">
                                                            <p class="mb-0 text-primary">
                                                                @if ($product->product_currency == 'taka')
                                                                    Tk
                                                                @elseif ($product->product_currency == 'euro')
                                                                    €
                                                                @elseif ($product->product_currency == 'dollar')
                                                                    $
                                                                @elseif ($product->product_currency == 'pound')
                                                                    £
                                                                @endif
                                                                {{ $product->product_price }}
                                                            </p>
                                                        </div>
                                                        @if (!empty($product->product_url))
                                                            <div class="pt-4">
                                                                <a class="btn btn-sm btn-outline-dark w-100"
                                                                    href="{{ $product->product_url }}">View</a>
                                                            </div>
                                                        @endif
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
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row pt-3">
                                        <div class="col-lg-12">
                                            <div class="galery-slide">
                                                @foreach ($nfc_card->nfcGallery as $gallery)
                                                    <div class="gallery-images">
                                                        @if ($gallery->gallery_type == 'image')
                                                            <img class="w-100 img-fluid rounded-3"
                                                                src="{{ !empty($gallery->gallery_attachment) && file_exists(public_path('storage/nfc/gallery/' . optional($gallery)->gallery_attachment)) ? asset('storage/nfc/gallery/' . optional($gallery)->gallery_attachment) : asset('frontend/images/no_image.png') }}"
                                                                alt="" />
                                                        @else
                                                            <div class="video-wrapper">
                                                                <iframe width="600" height="338"
                                                                    src="{{ optional($gallery)->gallery_link }}"
                                                                    frameborder="0" allowfullscreen></iframe>
                                                            </div>
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
                        @if ($nfc_card->nfcTestimonial)
                            <section>
                                <div class="container pb-5">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="text-center">
                                                <h1 class="special-font text-white">My Testimonial</h1>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12 mx-auto">
                                            <div class="testimonial-slide">
                                                @foreach ($nfc_card->nfcTestimonial as $testimonial)
                                                    <div class="card p-0 bg-white border-0 mt-4 testmonial-cards">
                                                        <div class="card-body rounded-0 border-0 d-flex">
                                                            <div class="row align-items-center">
                                                                <div class="col-sm-4">
                                                                    <div class="d-flex justify-content-center">
                                                                        <img class="img-fluid rounded-3"
                                                                            width="100px" height="100px"
                                                                            style="object-fit: fill"
                                                                            src="{{ !empty($testimonial->testimonial_image) && file_exists(public_path('storage/nfc/testimonial/' . optional($testimonial)->testimonial_image)) ? asset('storage/nfc/testimonial/' . optional($testimonial)->testimonial_image) : asset('frontend/images/no_image.png') }}"
                                                                            alt="" />
                                                                    </div>
                                                                    <h6 class="text-center pt-3">
                                                                        {{ $testimonial->testimonial_name }}
                                                                    </h6>
                                                                    <div class="d-flex justify-content-center">
                                                                        <a href=""
                                                                            style="text-decoration: none">
                                                                            <i
                                                                                class="fa-solid fa-star text-warning"></i>
                                                                        </a>
                                                                        <a href=""
                                                                            style="text-decoration: none">
                                                                            <i
                                                                                class="fa-solid fa-star text-warning"></i>
                                                                        </a>
                                                                        <a href=""
                                                                            style="text-decoration: none">
                                                                            <i
                                                                                class="fa-solid fa-star text-warning"></i>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-8">
                                                                    <div>
                                                                        <p class="mb-0">
                                                                            {{ $testimonial->testimonial_description }}
                                                                        </p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
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
                    <section>
                        <div class="container pb-5">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="text-center">
                                        <h1 class="special-font text-white">QR Code</h1>
                                    </div>
                                </div>
                            </div>
                            <div class="row pt-3">
                                <div class="col-12">
                                    <div class="w-50 mx-auto">
                                        @if (!empty($nfc_card->nfc_qr) && file_exists(public_path('storage/nfc/qrs/' . $nfc_card->nfc_qr)))
                                            <img class="img-fluid"
                                                style="border-top-left-radius: 8px;border-top-right-radius: 8px;"
                                                src="{{ asset('storage/nfc/qrs/' . $nfc_card->nfc_qr) }}"
                                                alt="" />
                                        @endif
                                        @if ($nfc_card->enable_download_qr_code == '1')
                                            <div class="d-flex justify-content-center mt-4">
                                                <a href="{{ asset('storage/nfc/qrs/' . $nfc_card->nfc_qr) }}"
                                                    download=""
                                                    class="btn btn-dark rounded-0 border-2 border-dark">Download
                                                    QR <i class="fa-solid fa-file-arrow-down ps-2"></i>
                                                </a>
                                            </div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
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
                                        </div>
                                    </div>
                                </div>
                                <div class="row pt-5">
                                    @if (optional($nfc_card->nfcData)->monday == '1')
                                        <div class="col-12 mb-4">
                                            <div
                                                class="rounded-pill d-flex justify-content-between align-items-center border py-2">
                                                <div class=" text-white ps-4">
                                                    <i class="fa fa-calendar houricon fs-2"></i>
                                                </div>
                                                <div>
                                                    <h6 class="mb-0 text-white pt-2">Monday</p>
                                                </div>
                                                <div class="text-end pe-4">
                                                    <p class="mb-0 text-white">
                                                        {{ optional($nfc_card->nfcData)->start_time_monday }} -
                                                        {{ optional($nfc_card->nfcData)->end_time_monday }}
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    @endif
                                    @if (optional($nfc_card->nfcData)->tuesday == '1')
                                        <div class="col-12 mb-4">
                                            <div
                                                class="rounded-pill d-flex justify-content-between align-items-center border py-2">
                                                <div class=" text-white ps-4">
                                                    <i class="fa fa-calendar houricon fs-2"></i>
                                                </div>
                                                <div>
                                                    <h6 class="mb-0 text-white pt-2">Tuesday</p>
                                                </div>
                                                <div class="text-end pe-4">
                                                    <p class="mb-0 text-white">
                                                        {{ optional($nfc_card->nfcData)->start_time_tuesday }} -
                                                        {{ optional($nfc_card->nfcData)->end_time_tuesday }}
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    @endif
                                    @if (optional($nfc_card->nfcData)->wednesday == '1')
                                        <div class="col-12 mb-4">
                                            <div
                                                class="rounded-pill d-flex justify-content-between align-items-center border py-2">
                                                <div class=" text-white ps-4">
                                                    <i class="fa fa-calendar houricon fs-2"></i>
                                                </div>
                                                <div>
                                                    <h6 class="mb-0 text-white pt-2">Wednesday</p>
                                                </div>
                                                <div class="text-end pe-4">
                                                    <p class="mb-0 text-white">
                                                        {{ optional($nfc_card->nfcData)->start_time_wednesday }} -
                                                        {{ optional($nfc_card->nfcData)->end_time_wednesday }}
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    @endif
                                    @if (optional($nfc_card->nfcData)->thursday == '1')
                                        <div class="col-12 mb-4">
                                            <div
                                                class="rounded-pill d-flex justify-content-between align-items-center border py-2">
                                                <div class=" text-white ps-4">
                                                    <i class="fa fa-calendar houricon fs-2"></i>
                                                </div>
                                                <div>
                                                    <h6 class="mb-0 text-white pt-2">Thursday</p>
                                                </div>
                                                <div class="text-end pe-4">
                                                    <p class="mb-0 text-white">
                                                        {{ optional($nfc_card->nfcData)->start_time_thursday }} -
                                                        {{ optional($nfc_card->nfcData)->end_time_thursday }}
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    @endif
                                    @if (optional($nfc_card->nfcData)->friday == '1')
                                        <div class="col-12 mb-4">
                                            <div
                                                class="rounded-pill d-flex justify-content-between align-items-center border py-2">
                                                <div class=" text-white ps-4">
                                                    <i class="fa fa-calendar houricon fs-2"></i>
                                                </div>
                                                <div>
                                                    <h6 class="mb-0 text-white pt-2">Friday</p>
                                                </div>
                                                <div class="text-end pe-4">
                                                    <p class="mb-0 text-white">
                                                        {{ optional($nfc_card->nfcData)->start_time_friday }} -
                                                        {{ optional($nfc_card->nfcData)->end_time_friday }}
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    @endif
                                    @if (optional($nfc_card->nfcData)->saturday == '1')
                                        <div class="col-12 mb-4">
                                            <div
                                                class="rounded-pill d-flex justify-content-between align-items-center border py-2">
                                                <div class=" text-white ps-4">
                                                    <i class="fa fa-calendar houricon fs-2"></i>
                                                </div>
                                                <div>
                                                    <h6 class="mb-0 text-white pt-2">Saturday</p>
                                                </div>
                                                <div class="text-end pe-4">
                                                    <p class="mb-0 text-white">
                                                        {{ optional($nfc_card->nfcData)->start_time_saturday }} -
                                                        {{ optional($nfc_card->nfcData)->end_time_saturday }}
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    @endif
                                    @if (optional($nfc_card->nfcData)->sunday == '1')
                                        <div class="col-12 mb-4">
                                            <div
                                                class="rounded-pill d-flex justify-content-between align-items-center border py-2">
                                                <div class=" text-white ps-4">
                                                    <i class="fa fa-calendar houricon fs-2"></i>
                                                </div>
                                                <div>
                                                    <h6 class="mb-0 text-white pt-2">Sunday</p>
                                                </div>
                                                <div class="text-end pe-4">
                                                    <p class="mb-0 text-white">
                                                        {{ optional($nfc_card->nfcData)->start_time_sunday }} -
                                                        {{ optional($nfc_card->nfcData)->end_time_sunday }}
                                                    </p>
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
                                    </div>
                                </div>
                            </div>
                            <div class="row pt-4">
                                <div class="co-md-12">
                                    <form action="{{ route('individual-message.store') }}" method="post">
                                        @csrf
                                        <input type="hidden" name="user_id"
                                            value="{{ optional($nfc_card)->user_id }}">
                                        <input type="hidden" name="nfc_id" value="{{ optional($nfc_card)->id }}">
                                        <input type="hidden" name="nfc_code"
                                            value="{{ optional($nfc_card)->code }}">
                                        <div class="row">
                                            <div class="col-sm-6 mb-3">
                                                <input type="text" name="name"
                                                    class="form-control form-control-sm rounded-0 p-2"
                                                    placeholder="Enter Your Names" />
                                            </div>
                                            <div class="col-sm-6 mb-3">
                                                <input type="email" name="email"
                                                    class="form-control form-control-sm rounded-0 p-2"
                                                    placeholder="Enter Your Email" />
                                            </div>
                                            <div class="col-sm-12 mb-3">
                                                <input type="text" name="phone"
                                                    class="form-control form-control-sm rounded-0 p-2"
                                                    placeholder="Enter Your Phone" />
                                            </div>
                                            <div class="col-sm-12 mb-3">
                                                <textarea name="message" class="form-control form-control-sm rounded-0 p-2" id="" rows="5"></textarea>
                                            </div>
                                            <div class="col-lg-12 w-75 mx-auto px-2">
                                                <div class="d-flex justify-content-center">
                                                    <button type="submit"
                                                        class="btn btn-dark rounded-0 border-2 border-dark mt-3">
                                                        Send Message
                                                        <i class="fa-solid fa-paper-plane"
                                                            style="color: var(--template-two-color-primary)"></i>
                                                    </button>
                                                </div>
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
                            <div class="row py-5 pb-0">
                                <div class="col-lg-12">
                                    <div class="text-center">
                                        <h1 class="special-font text-white">Share VCard</h1>
                                    </div>
                                </div>
                            </div>
                            <div class="row align-items-center mb-3">
                                <div class="col-sm-6 offse-sm-3 mx-auto">
                                    <div>
                                        <img class="img-fluid"
                                            src="{{ asset('images/d-image/Animated-Hand-No-Background.png') }}"
                                            alt="" />
                                    </div>
                                    <div class="d-flex align-items-center justify-content-center">
                                        <a href="{{ $whatsappLink }}" target="_blank" rel="noopener noreferrer"
                                            class="btn company-btn-tem2 rounded-0 mb-2 p-3" style="width: 240px;">
                                            <i class="fa-solid fa-share-nodes"
                                                style="color: var(--template-two-color-primary)"></i>
                                            Share This Vcard
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
            <div class="footer-nav-area-tem2 footer-nav-area" id="footerNav">
                <div class="container px-0">
                    <!-- Footer Content -->
                    <div class="footer-nav-tem2 position-relative">
                        <ul class="h-100 d-flex align-items-center justify-content-between ps-0">
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
        <!-- On Page Load Show Modal -->
        <!-- Modal -->
        <!-- Modal -->
        @if ($nfc_card->banner == '1')
            <div class="modal fade" id="myModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog load-modal modal-dialog-centered">
                    <div class="modal-content rounded-0">
                        <div class="modal-header rounded-0 text-white"
                            style="background-image: linear-gradient(to right top, #d16ba5, #c777b9, #ba83ca, #aa8fd8, #9a9ae1, #8aa7ec, #79b3f4, #69bff8, #52cffe, #41dfff, #46eefa, #5ffbf1);">
                            <h5 class="modal-title" id="exampleModalLabel">
                                {{ optional($nfc_card->nfcBanner)->banner_title }}</h5>
                            <button type="button" class="btn-close text-white close-btns" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            {{ optional($nfc_card->nfcBanner)->banner_description }}
                        </div>
                        @if (!empty(optional($nfc_card->nfcBanner)->banner_url))
                            @if (!empty(optional($nfc_card->nfcBanner)->banner_url) && !empty(optional($nfc_card->nfcBanner)->banner_button))
                                <div class="modal-footer">
                                    <a href="{{ !empty(optional($nfc_card->nfcBanner)->banner_url) ? optional($nfc_card->nfcBanner)->banner_url : 'javascript:void(0)' }}"
                                        class="btn btn-sm btn-dark text-black"
                                        style="background-color: var(--template-three-color-primary);">{{ optional($nfc_card->nfcBanner)->banner_button }}
                                    </a>
                                </div>
                            @endif
                        @endif
                    </div>
                </div>
            </div>
        @endif

        <!-- On Page Load Show Modal End -->
    </main>

    <script src="{{ asset('frontend/assets/js/fontawesome.js') }}"></script>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"></script>

    <script type="text/javascript" src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const itemsPerPage = 2; // Number of items to show per load
            const loadMoreBtn = document.getElementById('load-more-btn');
            const collapseBtn = document.getElementById('collapse-btn');
            const serviceContainer = document.getElementById('service-container');
            const serviceItems = Array.from(serviceContainer.getElementsByClassName('service-item'));

            let visibleCount = 4; // Initial visible items

            // Check if we need to hide the Load More button initially
            if (serviceItems.length <= visibleCount) {
                loadMoreBtn.classList.add('d-none');
            }

            // Display the initial 4 items
            serviceItems.forEach((item, index) => {
                item.style.display = index < visibleCount ? 'block' : 'none';
            });

            loadMoreBtn.addEventListener('click', () => {
                // Show the next set of items
                for (let i = visibleCount; i < visibleCount + itemsPerPage; i++) {
                    if (serviceItems[i]) {
                        serviceItems[i].style.display = 'block';
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
                // Collapse all items except the first 4
                serviceItems.forEach((item, index) => {
                    item.style.display = index < 4 ? 'block' : 'none';
                });

                // Reset the visible count and button visibility
                visibleCount = 4;
                loadMoreBtn.classList.remove('d-none');
                collapseBtn.classList.add('d-none');

                // Hide the Load More button if only 4 or fewer items are available
                if (serviceItems.length <= visibleCount) {
                    loadMoreBtn.classList.add('d-none');
                }
            });
        });
    </script>
    <script>
        function toggleText(button) {
            const parent = button.closest('.service-description');
            const shortText = parent.querySelector('.short-text');
            const fullText = parent.querySelector('.full-text');

            if (fullText.classList.contains('d-none')) {
                shortText.classList.add('d-none');
                fullText.classList.remove('d-none');
                button.textContent = 'Read Less';
            } else {
                fullText.classList.add('d-none');
                shortText.classList.remove('d-none');
                button.textContent = 'Read More';
            }
        }
    </script>
    <script>
        window.addEventListener('load', function() {
            document.getElementById('preloader').style.display = 'none';
        });
    </script>
    <!-- On Page Load Show Modal -->
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
                dots: false,
                arrows: false,
                prevArrow: '<button type="button" class="slick-prev"><i class="fas fa-chevron-left"></i></button>',
                nextArrow: '<button type="button" class="slick-next"><i class="fas fa-chevron-right"></i></button>',
            });
            $("#serviceCarousel").slick({
                infinite: true, // Infinite looping
                speed: 500, // Animation speed in milliseconds
                slidesToShow: 1, // Number of slides to show at once
                slidesToScroll: 1, // Number of slides to scroll at once
                autoplay: true, // Enable autoplay
                autoplaySpeed: 2000, // Autoplay speed in milliseconds
                arrows: false, // Show next/prev arrows
                dots: false,
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
                dots: false,
            });
            $(".galery-slide").slick({
                infinite: true,
                speed: 500,
                slidesToShow: 1,
                slidesToScroll: 1,
                autoplay: true,
                autoplaySpeed: 2000,
                arrows: false,
                dots: false,
            });
            $(".testimonial-slide").slick({
                infinite: true,
                speed: 500,
                slidesToShow: 1,
                slidesToScroll: 1,
                autoplay: true,
                autoplaySpeed: 2000,
                arrows: false,
                dots: false,
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
    {{-- <script>
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
        const makeVCardTel = (phone) => `TEL;TYPE=CELL:${phone || ''}`;
        const makeVCardAdr = (addressLine1, addressLine2) =>
            `ADR;TYPE=HOME:;;${addressLine1 || ''};${addressLine2 || ''};;;;`;
        const makeVCardEmail = (email) => `EMAIL:${email || ''}`;
        const makeVCardUrl = (url) => `URL:${url || ''}`;
        const makeVCardSocialProfile = (type, url) => `X-SOCIALPROFILE;TYPE=${type}:${url || ''}`;
        const makeVCardTimeStamp = () => `REV:${new Date().toISOString()}`;

        function makeVCard(profileImageBase64) {
            const firstName = '{{ optional($nfc_card->nfcData)->first_name }}';
            const lastName = '{{ optional($nfc_card->nfcData)->last_name }}';
            const designation = '{{ optional($nfc_card)->designation }}';
            const phone = '{{ optional($nfc_card->nfcData)->phone_personal }}';
            const email = '{{ optional($nfc_card->nfcData)->email_personal }}';
            const addressLine1 = '{{ optional($nfc_card->nfcData)->address_line_one }}';
            const addressLine2 = '{{ optional($nfc_card->nfcData)->address_line_two }}';
            const linkedin = '{{ optional($nfc_card->nfcData)->linkedin_url }}';

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
    </script> --}}
</body>

</html>

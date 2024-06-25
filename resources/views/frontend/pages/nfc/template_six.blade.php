<!DOCTYPE html>
<html lang="en">

<head>
    <title>{{ optional($nfc_card->nfcData)->first_name }} {{ optional($nfc_card->nfcData)->last_name }}</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <link rel="shortcut icon" href="https://i.ibb.co/BNBTVN4/logo.png" type="image/x-icon" />

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
    <!-- Slick CSS -->
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css" />
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css" />
    <!-- Style Here -->
    <style>
        @import url("https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Raleway:ital,wght@0,100..900;1,100..900&display=swap");

        /* CSS for centering the mobile frame */
        :root {
            --white: #fff;
            --tem-one-name-color: #fff;

            @if ($nfc_card->font_family == 'bebas_neue')
                --body-font-family: "Bebas Neue", sans-serif !important;
                --tem-one-name-font-family: "Bebas Neue", sans-serif !important;
                --tem-one-designation-font-family: "Bebas Neue", sans-serif !important;
            @elseif($nfc_card->font_family == 'raleway')
                --tem-one-name-font-family: "Raleway", sans-serif !important;
                --tem-one-designation-font-family: "Raleway", sans-serif !important;
                --body-font-family: "Raleway", sans-serif !important;
            @endif
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
            height: auto;
            margin: 0;
            padding: 0;
            font-family: var(--body-font-family);
        }

        .nfc-mobile-frame {

            max-width: 576px;
            min-height: 100vh;
            /* border: 2px solid #1026bf; */
            border-radius: 20px;
            overflow: hidden;
            position: relative;
        }

        /* CSS for the card inside the mobile frame */
        .nfc-mobile-frame .card {
            background-color: var(--white);
            width: 100%;
            height: 100%;
            border-radius: 20px;
            overflow-y: auto;
        }

        .nfc-mobile-frame .card title {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100%;
        }

        .nfc-one-cover-img-box {
            position: relative;
            max-width: 100%;
        }

        .nfc-one-cover-img {
            background-size: cover;
            height: 300px;
            background-position: center;
        }

        .slick-slide {
            margin-right: 20px;
            /* Adjust the value to set the desired gap */
        }

        /* Ensure last slide doesn't have margin */
        .slick-slide:last-child {
            margin-right: 0;
            border-radius: 10px;
        }

        /* Media query for smaller screens */
        @media only screen and (max-width: 768px) {

            html,
            body {
                width: 100%;
                overflow-x: hidden;
            }

            .mobile-profiles {
                padding-top: 65px;
            }

            .mobile-images-profile {
                margin-top: 0 !important;
                text-align: center;
            }

            .mobile-images-profile img {
                left: auto !important;
            }

            .nfc-mobile-frame {
                max-width: 390px;
                width: 100%;
            }

            .nfc-mobile-frame .card {
                border-radius: 0px !important;
            }

            .contact-info {
                margin-left: 0px !important;
            }

            .mobile-d-none {
                display: none;
            }
        }
    </style>
    <!-- Style Here End -->
</head>

<body>
    <main>
        <section>
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 d-flex justify-content-center align-items-center px-0">
                        <div class="nfc-mobile-frame shadow-sm">
                            <div class="card p-0 border-0 shadow-none tem-one-scroll" style="overflow-x: hidden">
                                <div class="card-header p-0 border-0 border-0">
                                    <div class="nfc-one-cover-img-box">
                                        <div class="nfc-one-cover-img"
                                            style="background-image: url({{ !empty($nfc_card->nfcData->banner_image) && file_exists(public_path('storage/nfc/' . optional($nfc_card->nfcData)->banner_image)) ? asset('storage/nfc/' . optional($nfc_card->nfcData)->banner_image) : asset('https://i.ibb.co/64KBNBC/temp-one.webp') }});">
                                        </div>
                                    </div>
                                </div>

                                <div class="card-body p-0 tem-one-about-content"
                                    style="background-image: url(https://my.cybercard.ma/assets/img/vcard14/bg-img.png);background-repeat: no-repeat;background-size: cover;">
                                    <div class="w-100">
                                        <div class="row align-items-center gx-0">
                                            <div class="col-lg-4">
                                                <div class="text-center text-lg-center mobile-images-profile"
                                                    style="margin-top: -70px; position: relative">
                                                    <img class=""
                                                        style="width: 150px;border-radius: 100%;border: 6px solid white;background: rgba(255, 255, 255, 0.485); position: relative;z-index: 15;"
                                                        src="{{ !empty($nfc_card->nfcData->profile_image) && file_exists(public_path('storage/nfc/' . optional($nfc_card->nfcData)->profile_image)) ? asset('storage/nfc/' . optional($nfc_card->nfcData)->profile_image) : asset('https://i.ibb.co/64KBNBC/temp-one.webp') }}"
                                                        class="img-fluid banner-image" alt="banner" />
                                                </div>
                                            </div>
                                            <div class="col-lg-8">
                                                <div class="text-center text-lg-start shadow-sm mobile-profiles">
                                                    <div class="p-3">
                                                        <h2 class="text-white"
                                                            style="font-size: 40px;font-family: var(--tem-one-name-font-family);">
                                                            <span
                                                                class="first_name">{{ optional($nfc_card->nfcData)->first_name }}</span>
                                                            &nbsp;
                                                            <span
                                                                class="last_name">{{ optional($nfc_card->nfcData)->last_name }}</span>
                                                        </h2>
                                                        <h6 class="fw-bolder"
                                                            style="-webkit-text-fill-color: transparent;background: -webkit-linear-gradient(#f6a932,#ff5a0e);-webkit-background-clip: text;">
                                                            {{ optional($nfc_card->nfcData)->designation }}
                                                        </h6>
                                                    </div>
                                                </div>
                                            </div>
                                            @if (!empty($nfc_card->nfcData->bio_description))
                                                <p class="text-white text-center px-5 pt-5">
                                                    {{ optional($nfc_card->nfcData)->bio_description }}
                                                </p>
                                            @endif
                                            @if (
                                                !empty($nfc_card->nfcData->facebook_url) ||
                                                    !empty($nfc_card->nfcData->instagram_url) ||
                                                    !empty($nfc_card->nfcData->youtube_url) ||
                                                    !empty($nfc_card->nfcData->google_plus_url))
                                                <div class="col-lg-12">
                                                    <div
                                                        class="rounded-5 mt-5 pb-4 d-flex justify-content-center align-items-center">
                                                        @if (!empty($nfc_card->nfcData->facebook_url))
                                                            <a href="{{ optional($nfc_card->nfcData)->facebook_url }}"
                                                                class="fa fa-facebook facebook_url icon fa-2x"
                                                                style="text-decoration: none;width: 20%;color: #ffa500;">
                                                            </a>
                                                        @endif
                                                        @if (!empty($nfc_card->nfcData->instagram_url))
                                                            <a href="{{ optional($nfc_card->nfcData)->instagram_url }}"
                                                                class="fa fa-instagram instagram_url icon fa-2x"
                                                                style="text-decoration: none;width: 20%;color: #ffa500;">
                                                            </a>
                                                        @endif
                                                        @if (!empty($nfc_card->nfcData->youtube_url))
                                                            <a href="{{ optional($nfc_card->nfcData)->youtube_url }}"
                                                                class="fa fa-youtube youtube_url icon fa-2x"
                                                                style="text-decoration: none;width: 20%;color: #ffa500;">
                                                            </a>
                                                        @endif
                                                        @if (!empty($nfc_card->nfcData->google_plus_url))
                                                            <a href="{{ optional($nfc_card->nfcData)->google_plus_url }}"
                                                                class="fa fa-google google_plus_url icon fa-2x"
                                                                style="text-decoration: none;width: 20%;color: #ffa500;">
                                                            </a>
                                                        @endif
                                                    </div>
                                                </div>
                                            @endif
                                        </div>
                                        <div class="px-3">
                                            <!-- personal Detailis -->
                                            <!-- Contact Info -->
                                            @if (
                                                !empty($nfc_card->nfcData->email_personal) ||
                                                    !empty($nfc_card->nfcData->email_work) ||
                                                    !empty($nfc_card->nfcData->phone_personal) ||
                                                    !empty($nfc_card->nfcData->phone_work) ||
                                                    !empty($nfc_card->nfcData->address_line_one) ||
                                                    !empty($nfc_card->nfcData->address_line_two))
                                                <div class="my-3 pt-4">
                                                    <div>
                                                        <p
                                                            class="text-white w-25 text-center rounded-2 py-2 mb-0 fw-bold">
                                                            Contact
                                                        </p>
                                                        <div
                                                            style="background-color: #f44336;height: 23px;width: 25px;border-top-right-radius: 5px;margin-top: -32px;border-bottom-right-radius: 5px;">
                                                        </div>
                                                    </div>
                                                    <div class="row gx-3 align-items-lg-end">
                                                        <div class="col-lg-6">
                                                            @if (!empty($nfc_card->nfcData->email_personal) || !empty($nfc_card->nfcData->email_work))
                                                                <div class="row align-items-center shadow-sm p-3">
                                                                    <div class="col-lg-2 text-center text-lg-start">
                                                                        <img class=""
                                                                            src="https://i.ibb.co/XXW2Gb5/phone.jpg" />
                                                                    </div>
                                                                    <div class="col-lg-10 text-center text-lg-start">
                                                                        <div class="ps-3 pt-3 pt-lg-0">
                                                                            <h6 class="text-white mb-0">E-mail</h6>
                                                                            @if (!empty($nfc_card->nfcData->email_personal))
                                                                                <small class="text-white">
                                                                                    <span
                                                                                        class="email_personal">{{ optional($nfc_card->nfcData)->email_personal }}</span>
                                                                                    (personal)
                                                                                </small>
                                                                            @endif
                                                                            @if (!empty($nfc_card->nfcData->email_work))
                                                                                <br>
                                                                                <small class="text-white">
                                                                                    <span
                                                                                        class="email_work">{{ optional($nfc_card->nfcData)->email_work }}</span>
                                                                                    (work)
                                                                                </small>
                                                                            @endif
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            @endif
                                                        </div>
                                                        <div class="col-lg-6">
                                                            @if (!empty($nfc_card->nfcData->phone_personal) || !empty($nfc_card->nfcData->phone_work))
                                                                <div class="row align-items-center shadow-sm mt-3 p-3">
                                                                    <div class="col-lg-2 text-center text-lg-start">
                                                                        <img class=""
                                                                            src="https://i.ibb.co/CwpNGRM/envelop.jpg" />
                                                                    </div>
                                                                    <div class="col-lg-10 text-center text-lg-start">
                                                                        <div class="ps-3 pt-3 pt-lg-0">
                                                                            <h6 class="text-white mb-0">Phone</h6>
                                                                            @if (!empty($nfc_card->nfcData->phone_personal))
                                                                                <small class="text-white">
                                                                                    <span
                                                                                        class="phone_personal">{{ optional($nfc_card->nfcData)->phone_personal }}</span>
                                                                                    (personal)
                                                                                </small>
                                                                            @endif
                                                                            @if (!empty($nfc_card->nfcData->phone_work))
                                                                                <br>
                                                                                <small class="text-white">
                                                                                    <span
                                                                                        class="phone_work">{{ optional($nfc_card->nfcData)->phone_work }}</span>
                                                                                    (work)
                                                                                </small>
                                                                            @endif
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            @endif
                                                        </div>
                                                        <div class="col-lg-6">
                                                            @if (!empty($nfc_card->nfcData->address_line_one) || !empty($nfc_card->nfcData->address_line_two))
                                                                <div class="row align-items-center shadow-sm mt-3 p-3">
                                                                    <div class="col-lg-2 text-center text-lg-start">
                                                                        <img class="" style="width: 40px"
                                                                            src="{{ asset('frontend/images/location.png') }}" />
                                                                    </div>
                                                                    <div class="col-lg-10 text-center text-lg-start">
                                                                        <div class="ps-3 pt-3 pt-lg-0">
                                                                            <h6 class="text-white mb-0">Address</h6>
                                                                            @if (!empty($nfc_card->nfcData->address_line_one))
                                                                                <small
                                                                                    class="text-white address_line_one">
                                                                                    {{ $nfc_card->nfcData->address_line_one }}
                                                                                </small>
                                                                            @endif
                                                                            @if (!empty($nfc_card->nfcData->address_line_two))
                                                                                <small
                                                                                    class="text-white address_line_one">

                                                                                    {{ $nfc_card->nfcData->address_line_two }}

                                                                                </small>
                                                                            @endif
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            @endif
                                                        </div>
                                                    </div>
                                                </div>
                                            @endif
                                            <!-- QR -->
                                            @if (!empty($nfc_card->nfc_qr) && file_exists(public_path('storage/nfc/qrs/' . $nfc_card->nfc_qr)))
                                                <div class="my-3 pt-4">
                                                    <div>
                                                        <p
                                                            class="text-white w-25 text-center rounded-2 py-2 mb-0 fw-bold">
                                                            QR Code
                                                        </p>
                                                        <div
                                                            style="background-color: #f44336;height: 23px;width: 25px;border-top-right-radius: 5px;margin-top: -32px;border-bottom-right-radius: 5px;">
                                                        </div>
                                                    </div>

                                                    <div
                                                        class="d-flex justify-content-center align-items-center w-100">
                                                        <div class="p-2 pt-5 text-start">
                                                            <img class="" width="200px"
                                                                src="{{ asset('storage/nfc/qrs/' . $nfc_card->nfc_qr) }}"
                                                                alt="" />
                                                        </div>
                                                    </div>
                                                </div>
                                            @endif
                                            <!-- Bio -->
                                            @if (!empty(optional($nfc_card->nfcData)->bio_title) || !empty(optional($nfc_card->nfcData)->bio_description))
                                                <div class="my-3 pt-4">
                                                    @if (!empty(optional($nfc_card->nfcData)->bio_title))
                                                        <div>
                                                            <p
                                                                class="text-white w-25 text-center rounded-2 py-2 mb-0 fw-bold">
                                                                {{ optional($nfc_card->nfcData)->bio_title }}
                                                            </p>
                                                            <div
                                                                style="background-color: #f44336;height: 23px;width: 25px;border-top-right-radius: 5px;margin-top: -32px;border-bottom-right-radius: 5px;">
                                                            </div>
                                                        </div>
                                                    @endif
                                                    @if (!empty(optional($nfc_card->nfcData)->bio_description))
                                                        <p class="text-start text-white pt-5 px-3 px-lg-0">
                                                            {{ optional($nfc_card->nfcData)->bio_description }}
                                                        </p>
                                                    @endif
                                                </div>
                                            @endif
                                            <!-- Company -->
                                            @if (
                                                !empty($nfc_card->nfcData->company_title) ||
                                                    !empty($nfc_card->nfcData->company_name) ||
                                                    !empty($nfc_card->nfcData->company_phone) ||
                                                    !empty($nfc_card->nfcData->company_email) ||
                                                    !empty($nfc_card->nfcData->company_address_line_one) ||
                                                    !empty($nfc_card->nfcData->company_address_line_two) ||
                                                    !empty($nfc_card->nfcData->company_about_title) ||
                                                    !empty($nfc_card->nfcData->company_about_description))
                                                <div class="my-3 pt-4 text-start">
                                                    <div>
                                                        @if (!empty($nfc_card->nfcData->company_title))
                                                            <p
                                                                class="text-white w-25 text-center rounded-2 py-2 mb-0 fw-bold">
                                                                {{ optional($nfc_card->nfcData)->company_title }}
                                                            </p>
                                                            <div
                                                                style="background-color: #f44336;height: 23px;width: 25px;border-top-right-radius: 5px;margin-top: -32px;border-bottom-right-radius: 5px;">
                                                            </div>
                                                        @endif

                                                    </div>
                                                    <div class="d-flex pt-4">
                                                        @if (
                                                            !empty($nfc_card->nfcData->company_name) ||
                                                                !empty($nfc_card->nfcData->company_email) ||
                                                                !empty($nfc_card->nfcData->company_address_line_one))
                                                            <div class="px-3 px-lg-0 text-white w-50">
                                                                @if (!empty($nfc_card->nfcData->company_name))
                                                                    <h6 class="fw-bold" style="color: #f44336">
                                                                        {{ optional($nfc_card->nfcData)->company_name }}
                                                                    </h6>
                                                                @endif
                                                                @if (!empty($nfc_card->nfcData->company_email))
                                                                    <small>{{ optional($nfc_card->nfcData)->company_email }}</small>
                                                                    <br />
                                                                @endif
                                                                @if (!empty($nfc_card->nfcData->company_address_line_one))
                                                                    <small
                                                                        class="company_address_line_one">{{ optional($nfc_card->nfcData)->company_address_line_one }}</small>
                                                                @endif
                                                                @if (!empty($nfc_card->nfcData->company_address_line_two))
                                                                    <br />
                                                                    <small
                                                                        class="company_address_line_two">{{ optional($nfc_card->nfcData)->company_address_line_two }}</small>
                                                                @endif
                                                            </div>
                                                        @endif
                                                        @if (!empty($nfc_card->nfcData->company_about_title) || !empty($nfc_card->nfcData->company_about_description))
                                                            <p class="text-white w-50">
                                                                @if (!empty($nfc_card->nfcData->company_about_title))
                                                                    <small class="fw-bold" style="color: #f44336">
                                                                        {{ optional($nfc_card->nfcData)->company_about_title }}</small>
                                                                @endif
                                                                @if (!empty($nfc_card->nfcData->company_about_description))
                                                                    <br />
                                                                    <span class="company_about_description">
                                                                        {{ optional($nfc_card->nfcData)->company_about_description }}
                                                                    </span>
                                                                @endif
                                                            </p>
                                                        @endif
                                                    </div>
                                                </div>
                                            @endif
                                            <!-- Service -->
                                            <div class="pt-4">
                                                @if (!empty($nfc_card->nfcData->service_section_title))
                                                    <p class="text-white w-25 text-center rounded-2 py-2 mb-0 fw-bold">
                                                        {{ $nfc_card->nfcData->service_section_title }}
                                                    </p>
                                                @endif
                                                <div
                                                    style="background-color: #f44336;height: 23px;width: 25px;border-top-right-radius: 5px;margin-top: -32px;border-bottom-right-radius: 5px;">
                                                </div>
                                            </div>
                                            @if (!empty($nfc_card->nfcData->service_one_title ) || !empty($nfc_card->nfcData->service_two_title) || !empty($nfc_card->nfcData->service_three_title))
                                                <div class="py-3">
                                                    <ul style="list-style-type: none">
                                                        <li class="text-white pb-2">
                                                            {{ $nfc_card->nfcData->service_one_title }}</li>
                                                        <li class="text-white pb-2">
                                                            {{ $nfc_card->nfcData->service_two_title }}</li>
                                                        <li class="text-white pb-2">
                                                            {{ $nfc_card->nfcData->service_three_title }}</li>
                                                    </ul>
                                                </div>
                                            @endif
                                            @if ((!empty($nfc_card->nfcData->service_one_image) &&
                                                    file_exists(public_path('storage/nfc/' . optional($nfc_card->nfcData)->service_one_image))) ||
                                                    (!empty($nfc_card->nfcData->service_two_image) &&
                                                        file_exists(public_path('storage/nfc/' . optional($nfc_card->nfcData)->service_two_image))) ||
                                                    (!empty($nfc_card->nfcData->service_three_image) &&
                                                        file_exists(public_path('storage/nfc/' . optional($nfc_card->nfcData)->service_three_image))))
                                                <div class="pt-4">
                                                    <p class="text-white w-25 text-center rounded-2 py-2 mb-0 fw-bold">
                                                        Gallery
                                                    </p>
                                                    <div
                                                        style="background-color: #f44336;height: 23px;width: 25px;border-top-right-radius: 5px;margin-top: -32px;border-bottom-right-radius: 5px;">
                                                    </div>
                                                </div>

                                                <div class="mb-5 mt-4">
                                                    <div class="slick-slider p-4">
                                                        @if (
                                                            !empty($nfc_card->nfcData->service_one_image) &&
                                                                file_exists(public_path('storage/nfc/' . optional($nfc_card->nfcData)->service_one_image)))
                                                            <div>
                                                                <img class="img-fluid"
                                                                    style="background-size: cover;width: 100%;height: 300px;object-fit: cover;border-radius: 10px;"
                                                                    src="{{ !empty($nfc_card->nfcData->service_one_image) && file_exists(public_path('storage/nfc/' . optional($nfc_card->nfcData)->service_one_image)) ? asset('storage/nfc/' . optional($nfc_card->nfcData)->service_one_image) : asset('admin/assets/media/svg/files/blank-image.svg') }}"
                                                                    alt="Slide 1" />
                                                                <div class="text-white"
                                                                    style="background-color: #f44336">
                                                                </div>
                                                            </div>
                                                        @endif
                                                        @if (
                                                            !empty($nfc_card->nfcData->service_two_image) &&
                                                                file_exists(public_path('storage/nfc/' . optional($nfc_card->nfcData)->service_two_image)))
                                                            <div>
                                                                <img class="img-fluid"
                                                                    style="background-size: cover;width: 100%;height: 300px;object-fit: cover;border-radius: 10px;"
                                                                    src="{{ !empty($nfc_card->nfcData->service_two_image) && file_exists(public_path('storage/nfc/' . optional($nfc_card->nfcData)->service_two_image)) ? asset('storage/nfc/' . optional($nfc_card->nfcData)->service_two_image) : asset('admin/assets/media/svg/files/blank-image.svg') }}"
                                                                    alt="Slide 1" />
                                                                <div class="text-white"
                                                                    style="background-color: #f44336">
                                                                </div>
                                                            </div>
                                                        @endif
                                                        @if (
                                                            !empty($nfc_card->nfcData->service_three_image) &&
                                                                file_exists(public_path('storage/nfc/' . optional($nfc_card->nfcData)->service_three_image)))
                                                            <div>
                                                                <img class="img-fluid"
                                                                    style="background-size: cover;width: 100%;height: 300px;object-fit: cover;border-radius: 10px;"
                                                                    src="{{ !empty($nfc_card->nfcData->service_three_image) && file_exists(public_path('storage/nfc/' . optional($nfc_card->nfcData)->service_three_image)) ? asset('storage/nfc/' . optional($nfc_card->nfcData)->service_three_image) : asset('admin/assets/media/svg/files/blank-image.svg') }}"
                                                                    alt="Slide 1" />
                                                                <div class="text-white"
                                                                    style="background-color: #f44336">
                                                                </div>
                                                            </div>
                                                        @endif



                                                        <!-- Add more divs with images for additional slides -->
                                                    </div>
                                                </div>
                                            @endif
                                            <!-- Form -->
                                            <div>
                                                <div>
                                                    <p class="text-white w-25 text-center rounded-2 py-2 mb-0 fw-bold">
                                                        Inquery
                                                    </p>
                                                    <div
                                                        style="background-color: #f44336;height: 23px;width: 25px;border-top-right-radius: 5px;margin-top: -32px;border-bottom-right-radius: 5px;">
                                                    </div>
                                                </div>
                                                <div class="pt-4">
                                                    <form action="{{ route('individual-message.store') }}"
                                                        method="post" class="p-3">
                                                        @csrf
                                                        <div class="row">
                                                            <div class="col mb-2">
                                                                <div>
                                                                    <small for="client_name">Name
                                                                        <span class="text-danger">*</span></small>
                                                                    <input type="text" name="name" required
                                                                        class="form-control form-control-sm"
                                                                        placeholder="Jhone Doe" id="" />
                                                                </div>
                                                            </div>
                                                            <div class="col mb-2">
                                                                <div>
                                                                    <small for="client_email">Email
                                                                        <span class="text-danger">*</span></small>
                                                                    <input type="text" name="email" required
                                                                        class="form-control form-control-sm"
                                                                        id=""
                                                                        placeholder="Jhone@gmail.com" />
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col mb-2">
                                                                <div>
                                                                    <small for="client_name">Phone</small>
                                                                    <input type="text" name="phone"
                                                                        class="form-control form-control-sm"
                                                                        placeholder="015******" id="" />
                                                                </div>
                                                            </div>
                                                            <div class="col mb-2">
                                                                <div>
                                                                    <small for="headline">Headline</small>
                                                                    <input type="text" name="headline"
                                                                        class="form-control form-control-sm"
                                                                        id="" placeholder="Headline" />
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col mb-2">
                                                                <div>
                                                                    <small for="client_message">Message</small>
                                                                    <br />
                                                                    <textarea name="message" id="" class="form-control" rows="3" placeholder="hello jhon"></textarea>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row" style="margin-bottom: 2.5rem">
                                                            <div class="col mb-2 text-center">
                                                                <button type="submit"
                                                                    class="btn btn-sm mt-2 px-4 rounded-pill"
                                                                    style="background-color: #f44336;color: #fff;">
                                                                    Send Messages
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                            <div class="row fixed-bottom w-25 mx-auto mobile-d-none">
                                                <div class="col mb-2 text-center">
                                                    <button type="submit" class="btn btn-sm mt-2 p-2 w-100"
                                                        style="background-color: #f44336; color: #fff">
                                                        <i class="fas fa-contact pe-1 fa-address-book"></i>
                                                        Connect The Profile
                                                    </button>
                                                </div>
                                            </div>
                                            <div
                                                class="row fixed-bottom w-sm-100 w-lg-25 d-sm-block d-lg-none mx-auto">
                                                <div class="col mb-2 text-center">
                                                    <button type="submit" class="btn btn-sm mt- p-2 w-100"
                                                        style="background-color: #f44336; color: #fff">
                                                        <i class="fas fa-contact pe-1 fa-address-book"></i>
                                                        Connect The Profile
                                                    </button>
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
        </section>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
    <script src="https://kit.fontawesome.com/4cba8ce13c.js"></script>
    <!-- Slick JS -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
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
</body>

</html>

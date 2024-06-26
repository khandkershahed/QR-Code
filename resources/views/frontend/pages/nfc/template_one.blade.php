<!DOCTYPE html>
<html lang="en">

<head>
    <title>{{ optional($nfc_card->nfcData)->first_name }} {{ optional($nfc_card->nfcData)->last_name }}</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <link rel="shortcut icon" href="https://i.ibb.co/BNBTVN4/logo.png" type="image/x-icon" />
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Raleway:ital,wght@0,100..900;1,100..900&display=swap" />
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
        /* For Template One */

        :root {
            @if ($nfc_card->font_family == 'bebas_neue')
                --body-font-family: "Bebas Neue", sans-serif !important;
                --tem-one-name-font-family: "Bebas Neue", sans-serif !important;
                --tem-one-designation-font-family: "Bebas Neue", sans-serif !important;
            @elseif($nfc_card->font_family == 'raleway')
                --tem-one-name-font-family: "Raleway", sans-serif !important;
                --body-font-family: "Raleway", sans-serif !important;
                --tem-one-designation-font-family: "Raleway", sans-serif;
                @else
                --tem-one-name-font-family: "Raleway", sans-serif !important;
                --body-font-family: "Raleway", sans-serif !important;
                --tem-one-designation-font-family: "Raleway", sans-serif;
            @endif
            --white: #fff;
            --tem-one-name-color: #fff;
            --tem-one-name-font-size: 40px;
            --tem-one-designation-color: #fff;
            --tem-one-bio-title-color: {{ $nfc_card->background_color }};
            --tem-profile-image-bg: {{ $nfc_card->background_color }};
            --tem-one-social-icons-color: #fff;
            --tem-one-social-icons-bg: #fff;
            --tem-one-social-icons-font-size: 18px;
            --tem-one-bio-title-font-size: {{ $nfc_card->font_size }};
            --tem-one-service-title-color: {{ $nfc_card->title_color }};
            --tem-one-service-box-bg: {{ $nfc_card->background_color }};
            --button_bg_color: {{ $nfc_card->button_bg_color }};
            --button_title_color: {{ $nfc_card->button_title_color }};
            --tem-one-address-color: #fff;
        }

        /* For Template Two */

        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: auto;
            margin: 0;
            padding: 0;
            font-family: var(--body-font-family);
            letter-spacing: 2px;

        }


        /* CSS for centering the mobile frame */
        .nfc-mobile-frame {
            max-width: 576px;
            min-height: 100vh;
            border-radius: 20px;
            overflow: hidden;
            position: relative;
        }

        .nfc-mobile-frame-one {
            width: 400px;
            padding: 15px 0px;
            /* border: 2px solid #000; */
            border-radius: 20px;
            overflow: hidden;
            position: relative;
        }

        /* CSS for the card inside the mobile frame */
        .nfc-mobile-frame-one .card {
            background-color: var(--white);
            width: 100%;
            height: 100%;
            border-radius: 20px;
            overflow-y: auto;
        }

        .nfc-mobile-frame-one .card title {
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
        }

        .nfc-one-cover-img:after {
            display: block;
            position: absolute;
            background-image: linear-gradient(to bottom,
                    rgba(255, 255, 255, 0) 0,
                    #000 92%);
            content: "";
            top: 0;
            right: 0;
            bottom: 0;
            left: 0;
            opacity: 0.8;
        }

        .tem-one-name {
            color: var(--tem-one-name-color);
            font-family: var(--tem-one-name-font-family);
            font-weight: 400;
            font-style: normal;
            font-size: var(--tem-one-name-font-size);
        }

        .tem-one-designation {
            color: var(--tem-one-designation-color);
            font-family: var(--tem-one-designation-font-family);
            font-weight: 400;
            font-style: normal;
        }

        .tem-one-bio-title {
            color: var(--tem-one-bio-title-color);
            font-family: "Bebas Neue", sans-serif;
            font-size: var(--tem-one-bio-title-font-size);
        }

        .tem-one-service-title {
            color: var(--tem-one-service-title-color);
            font-family: "Bebas Neue", sans-serif;
            font-size: var(--tem-one-bio-title-font-size);
        }

        .tem-one-service-box {
            background-color: var(--tem-one-service-box-bg);
            color: var(--white);
        }

        .tem-one-profile-img {
            width: 75%;
            height: 100%;
            overflow: hidden;
            margin-left: -25px;
        }

        .tem-one-profile-img img {
            width: 100%;
            /* Make the image take up the full width of its container */
            height: 100%;
            /* Make the image take up the full height of its container */
            object-fit: cover;
            /* Ensure the image covers the entire container without distortion */
        }

        .tem-one-profile-image {
            background-color: var(--tem-profile-image-bg);
            width: 20%;
            border-bottom-right-radius: 20px;
        }

        .tem-one-profile {
            background-color: var(--tem-profile-image-bg);
            width: 80%;
            border-bottom-left-radius: 20px;
        }

        .tem-one-social-icons {
            display: flex;
            justify-content: start;
        }

        .tem-one-social-icons a {
            /* background-color:var(--tem-one-social-icons-bg); */
            text-decoration: none;
            padding: 0px;
            display: inline-block;
            font-size: var(--tem-one-social-icons-font-size);
            /* Adjust the size of the icons as needed */
            margin: 0 10px;
            /* Adjust the spacing between icons as needed */
            color: var(--tem-one-social-icons-color);
            /* Adjust the color of the icons as needed */
        }

        /* Hover effect */
        .tem-one-social-icons a:hover {
            color: #007bff;
            /* Change color on hover */
        }

        .tem-one-address {
            color: var(--tem-one-address-color);
        }

        /* Customize slick slider container */
        .slick-slider {
            width: 100%;
            margin: 0 auto;
        }

        .slick-next {
            right: -5px;
        }

        .slick-prev {
            left: -5px;
            position: absolute;
            z-index: 1;
        }

        .tem-one-about-first {
            width: 35%;
        }

        .tem-one-about-secontd {
            width: 65%;
        }

        .tem-one-tem-one-social-icons a {
            display: flex;
            background-color: var(--tem-one-social-icons-bg);
            margin-left: 10px;
            padding: 10px;
            text-decoration: none;
            color: var(--tem-one-social-icons-color);
        }

        .tem-one-scroll::-webkit-scrollbar {
            width: 0em;
        }

        .tem-one-scroll::-webkit-scrollbar-track {
            box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.3);
        }

        .tem-one-scroll::-webkit-scrollbar-thumb {
            background-color: darkgrey;
            outline: 1px solid slategrey;
        }


        /* Media query for smaller screens */
        @media only screen and (max-width: 600px) {
            .nfc-mobile-frame-one {
                height: 100vh;
                /* Let height adjust based on content */
            }
        }

        .nfc-mobile-frame {
            max-width: 576px;
            min-height: 100vh;
            /* border: 2px solid #1026bf; */
            border-radius: 20px;
            overflow: hidden;
            position: relative;
        }
    </style>

    <!-- Style Here End -->
</head>

<body>
    <main>
        <section>
            <div class="mt-1 container">
                <div class="row">
                    <div class="col-lg-12 d-flex justify-content-center align-items-center px-0">
                        <div class="nfc-mobile-frame shadow-sm">
                            <div class="card p-0 border-0 shadow-none tem-one-scroll">
                                <div class="card-header p-0 border-0">
                                    <div class="nfc-one-cover-img-box">
                                        <div class="nfc-one-cover-img"
                                            style="background-image: url({{ !empty($nfc_card->nfcData->banner_image) && file_exists(public_path('storage/nfc/' . optional($nfc_card->nfcData)->banner_image)) ? asset('storage/nfc/' . optional($nfc_card->nfcData)->banner_image) : asset('https://i.ibb.co/64KBNBC/temp-one.webp') }})">
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body p-0 tem-one-about-content">
                                    <div class="d-flex">
                                        <div class="tem-one-profile">
                                            <div class="p-3">
                                                <div>
                                                    <h1 class="tem-one-name"><span
                                                            class="first_name">{{ optional($nfc_card->nfcData)->first_name }}</span>&nbsp;<span
                                                            class="last_name">{{ optional($nfc_card->nfcData)->last_name }}</span>
                                                    </h1>
                                                    <h4 class="tem-one-designation designation">
                                                        {{ optional($nfc_card->nfcData)->designation }}
                                                    </h4>
                                                </div>
                                                <!-- contact -->
                                                <div>
                                                    <small
                                                        class="tem-one-address address_line_one">{{ optional($nfc_card->nfcData)->address_line_one }}</small>
                                                    <br />
                                                    <small
                                                        class="tem-one-address address_line_two">{{ optional($nfc_card->nfcData)->address_line_two }}</small>
                                                    <br />
                                                    <small
                                                        class="tem-one-address phone_personal">{{ optional($nfc_card->nfcData)->phone_personal }}(Work)</small>
                                                    <br>
                                                    <small
                                                        class="tem-one-address phone_work">{{ optional($nfc_card->nfcData)->phone_work }}(Personal)</small>
                                                    <div class="tem-one-social-icons mt-3">
                                                        <a href="{{ optional($nfc_card->nfcData)->facebook_url }}"
                                                            target="_blank" class="fa fa-facebook"></a>
                                                        <a href="{{ optional($nfc_card->nfcData)->instagram_url }}"
                                                            target="_blank" class="fa fa-instagram"></a>
                                                        <a href="{{ optional($nfc_card->nfcData)->youtube_url }}"
                                                            target="_blank" class="fa fa-youtube"></a>
                                                        <a href="{{ optional($nfc_card->nfcData)->google_plus_url }}"
                                                            target="_blank" class="fa fa-google"></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="d-flex justify-content-center tem-one-profile-image">
                                            <div class="tem-one-profile-img text-center">
                                                <img src="{{ !empty($nfc_card->nfcData->profile_image) && file_exists(public_path('storage/nfc/' . optional($nfc_card->nfcData)->profile_image)) ? asset('storage/nfc/' . optional($nfc_card->nfcData)->profile_image) : asset('https://i.ibb.co/64KBNBC/temp-one.webp') }}"
                                                    alt="" />
                                            </div>
                                        </div>
                                    </div>
                                    <!-- BIo -->
                                    <div class="tem-one-bio-box px-3 pt-4">
                                        <h6 class="tem-one-bio-title">{{ optional($nfc_card->nfcData)->bio_title }}
                                        </h6>
                                        <p>
                                            {{ optional($nfc_card->nfcData)->bio_description }}
                                        </p>
                                    </div>
                                    <!-- Service -->
                                    @if (
                                        !empty($nfc_card->nfcData->service_one_image) ||
                                            !empty($nfc_card->nfcData->service_two_image) ||
                                            !empty($nfc_card->nfcData->service_three_image))
                                        <div class="tem-one-service-box px-3 py-4">
                                            <h6 class="tem-one-service-title">
                                                {{ optional($nfc_card->nfcData)->service_section_title }}</h6>
                                            <p>
                                                {{ optional($nfc_card->nfcData)->service_section_description }}
                                            </p>
                                            <div class="slick-slider">
                                                @if (!empty($nfc_card->nfcData->service_one_image))
                                                    <div>
                                                        <img class="img-fluid"
                                                            style="background-size: cover;width: 100%;height: 300px;object-fit: cover;"
                                                            src="{{ !empty($nfc_card->nfcData->service_one_image) && file_exists(public_path('storage/nfc/' . optional($nfc_card->nfcData)->service_one_image)) ? asset('storage/nfc/' . optional($nfc_card->nfcData)->service_one_image) : asset('https://i.ibb.co/64KBNBC/temp-one.webp') }}"
                                                            alt="Slide 1" />
                                                    </div>
                                                @endif
                                                @if (!empty($nfc_card->nfcData->service_two_image))
                                                    <div>
                                                        <img class="img-fluid"
                                                            style="background-size: cover;width: 100%;height: 300px;object-fit: cover;"
                                                            src="{{ !empty($nfc_card->nfcData->service_two_image) && file_exists(public_path('storage/nfc/' . optional($nfc_card->nfcData)->service_two_image)) ? asset('storage/nfc/' . optional($nfc_card->nfcData)->service_two_image) : asset('https://i.ibb.co/64KBNBC/temp-one.webp') }}"
                                                            alt="Slide 1" />
                                                    </div>
                                                @endif
                                                @if (!empty($nfc_card->nfcData->service_three_image))
                                                    <div>
                                                        <img class="img-fluid"
                                                            style="background-size: cover;width: 100%;height: 300px;object-fit: cover;"
                                                            src="{{ !empty($nfc_card->nfcData->service_three_image) && file_exists(public_path('storage/nfc/' . optional($nfc_card->nfcData)->service_three_image)) ? asset('storage/nfc/' . optional($nfc_card->nfcData)->service_three_image) : asset('https://i.ibb.co/64KBNBC/temp-one.webp') }}"
                                                            alt="Slide 1" />
                                                    </div>
                                                @endif
                                                <!-- Add more divs with images for additional slides -->
                                            </div>
                                        </div>
                                    @endif
                                    <!-- Service -->
                                    <div class="tem-one-bio-box px-3 pt-4">
                                        <h6 class="tem-one-bio-title">{{ optional($nfc_card->nfcData)->company_title }}
                                        </h6>
                                        <div class="d-flex">
                                            <div class="tem-one-about-first">
                                                <p class="fw-bold mb-0 company_name">
                                                    {{ optional($nfc_card->nfcData)->company_name }}</p>
                                                <p class="mb-0">
                                                    <span
                                                        class="company_address_line_one">{{ optional($nfc_card->nfcData)->company_address_line_one }}</span>
                                                    <br />
                                                    <span
                                                        class="company_address_line_two">{{ optional($nfc_card->nfcData)->company_address_line_two }}</span>
                                                </p>
                                                <p class="company_phone">
                                                    {{ optional($nfc_card->nfcData)->company_phone }}</p>
                                                <p class="company_email">
                                                    {{ optional($nfc_card->nfcData)->company_email }}</p>
                                            </div>
                                            <div class="tem-one-about-secontd">
                                                <p class="fw-bold mb-0 company_about_title">
                                                    {{ optional($nfc_card->nfcData)->company_about_title }}</p>
                                                <p class="company_about_description">
                                                    {{ optional($nfc_card->nfcData)->company_about_description }}
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Service -->
                                    <div class="tem-one-service-box px-3 py-4">
                                        <h6 class="tem-one-service-title">Contact</h6>
                                        <p class="mb-0">
                                            {{ optional($nfc_card->nfcData)->email_work }}
                                            <small class="fw-bold">(Work)</small>
                                        </p>
                                        <p class="mb-0">
                                            {{ optional($nfc_card->nfcData)->phone_personal }}
                                            <small class="fw-bold">(Personal)</small>
                                        </p>
                                        <div class="pt-2">
                                            <form action="{{ route('individual-message.store') }}" method="post">
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
                                                                    <span class="text-danger fs-1" style="position: relative;top: 0.6rem;">*</span>
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
                                                                    <span class="text-danger fs-1" style="position: relative;top: 0.6rem;">*</span>
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
                                                                    <span class="text-danger fs-1" style="position: relative;top: 0.6rem;">*</span>
                                                                </x-metronic.label>
                                                                <textarea class="form-control form-control-solid" rows="5" name="message" value="{{ old('message') }}"
                                                                    placeholder="Enter Message" required></textarea>
                                                            </div>
                                                        </div>
                                                    </div>
                                                <div class="row">
                                                    <div class="col mb-2 text-end">
                                                        <button type="submit" class="btn btn-danger btn-sm mt-2">
                                                            Submit
                                                        </button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                        @if (!empty($nfc_card->nfc_qr) && file_exists(public_path('storage/nfc/qrs/' . $nfc_card->nfc_qr)))
                                            <div>
                                                <h6 class="tem-two-bio-title text-white pt-5">
                                                    Scan Me
                                                </h6>
                                                <div class="d-flex justify-content-center">
                                                    <img class="" width="200px"
                                                        src="{{ asset('storage/nfc/qrs/' . $nfc_card->nfc_qr) }}"
                                                        alt="" />
                                                </div>
                                            </div>
                                        @endif
                                        <div class="row fixed-bottom w-25 mx-auto mobile-d-none">
                                            <div class="col mb-2 text-center">
                                                <a href="tel:+{{ optional($nfc_card->nfcData)->phone_personal }}"
                                                    class="btn btn-sm mt-2 p-2 w-100 nfc_contact_btn nfc_contact_btn_pc"
                                                    style="background-color: #f44336; color: #fff">
                                                    <i class="fas fa-contact pe-1 fa-address-book"></i>
                                                    Save Contact
                                                </a>
                                            </div>
                                        </div>
                                        <div class="row fixed-bottom w-sm-100 w-lg-25 d-sm-block d-lg-none mx-auto">
                                            <div class="col mb-2 text-center">
                                                <a href="tel:+{{ optional($nfc_card->nfcData)->phone_personal }}"
                                                    class="btn btn-sm mt-2 p-2 w-100 nfc_contact_btn nfc_contact_btn_mobile"
                                                    style="background-color: #f44336; color: #fff">
                                                    <i class="fas fa-contact pe-1 fa-address-book"></i>
                                                    Save Contact
                                                </a>
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
    <!-- Bootstrap JavaScript Libraries -->
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
                slidesToShow: 1,
                slidesToScroll: 1,
                autoplay: true,
                draggable: false,
                autoplaySpeed: 2000, // Adjust autoplay speed in milliseconds
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
</body>

</html>

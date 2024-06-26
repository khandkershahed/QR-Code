<!DOCTYPE html>
<html lang="en">

<head>
    <title>{{ optional($nfc_card->nfcData)->first_name }} {{ optional($nfc_card->nfcData)->last_name }}</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Raleway:ital,wght@0,100..900;1,100..900&display=swap" />
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
        :root {
            @if ($nfc_card->font_family == 'bebas_neue')
                --body-font-family: "Bebas Neue", sans-serif !important;
                --tem-one-name-font-family: "Bebas Neue", sans-serif !important;
                --tem-one-designation-font-family: "Bebas Neue", sans-serif !important;
                --letter-spacing
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
            --tem-two-name-color: #fff;
            --tem-two-name-font-size: 40px;
            --tem-two-designation-color: #fff;
            --tem-two-bio-title-color: {{ $nfc_card->background_color }};
            --tem-two-profile-image-bg: {{ $nfc_card->background_color }};
            --tem-two-social-icons-color: #fff;
            --tem-two-social-icons-bg: #fff;
            --tem-two-social-icons-font-size: 18px;
            --tem-two-bio-title-font-size: {{ $nfc_card->font_size }};
            --tem-two-service-title-color: {{ $nfc_card->title_color }};
            --tem-two-service-title-font-size: 20px;
            --tem-two-service-box-bg: {{ $nfc_card->background_color }};
            --button_bg_color: {{ $nfc_card->button_bg_color }};
            --button_title_color: {{ $nfc_card->button_title_color }};
            --tem-two-address-color: #fff;
        }

        /* CSS for centering the mobile frame */

        .nfc-mobile-frame-two {
            width: 400px;


            /* border: 2px solid #1026bf; */
            border-radius: 20px;
            overflow: hidden;
            position: relative;
        }

        /* CSS for the card inside the mobile frame */
        .nfc-mobile-frame-two .card {
            background-color: var(--white);
            width: 100%;
            height: 100%;
            border-radius: 20px;
            overflow-y: auto;
        }

        .nfc-mobile-frame-two .card title {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100%;
        }

        .nfc-two-cover-img-box {
            position: relative;
            max-width: 100%;
        }

        .nfc-two-cover-img {
            background-size: cover;
            height: 300px;
            background-position: center;
        }

        .tem-two-name {
            color: var(--tem-two-name-color);
            font-family: var(--tem-two-name-font-family);
            font-weight: 400;
            font-style: normal;
            font-size: var(--tem-two-name-font-size);
        }

        .tem-two-designation {
            color: var(--tem-two-designation-color);
            font-family: var(--tem-two-designation-font-family);
            font-weight: 400;
            font-style: normal;
        }

        .tem-two-bio-title {
            text-align: center;
            color: var(--tem-two-bio-title-color);
            font-family: "Bebas Neue", sans-serif;
            font-size: var(--tem-two-bio-title-font-size);
        }

        .tem-two-bio-box p {
            text-align: center;
        }

        .tem-two-service-title {
            color: var(--tem-two-service-title-color);
            font-family: "Bebas Neue", sans-serif;
            font-size: var(--tem-two-bio-title-font-size);
        }

        .tem-two-service-box {
            text-align: center;
            background-color: var(--tem-two-service-box-bg);
            color: var(--white);
        }

        .tem-two-service-box p {
            text-align: center;
        }

        .tem-two-profile-img {
            width: 100%;
            overflow: hidden;
        }

        .tem-two-profile-img img {
            width: 45%;
            height: 45%;
            object-fit: cover;
        }

        .tem-two-profile-image {
            background-color: var(--tem-profile-image-bg);
            width: 20%;
            border-bottom-right-radius: 20px;
        }

        .tem-two-profile {
            background-color: var(--tem-two-profile-image-bg);
            width: 85%;
            border-bottom-left-radius: 20px;
            border-bottom-right-radius: 20px;
            border-top-left-radius: 20px;
            border-top-right-radius: 20px;
            margin-top: -100px;
            position: relative;
            z-index: 2;
        }

        .tem-two-social-icons {
            display: flex;
            justify-content: start;
        }

        .tem-two-social-icons a {
            /* background-color:var(--tem-two-social-icons-bg); */
            text-decoration: none;
            padding: 0px;
            display: inline-block;
            font-size: var(--tem-two-social-icons-font-size);
            /* Adjust the size of the icons as needed */
            margin: 0 10px;
            /* Adjust the spacing between icons as needed */
            color: var(--tem-two-social-icons-color);
            /* Adjust the color of the icons as needed */
        }



        /* Hover effect */
        .tem-two-social-icons a:hover {
            color: #007bff;
            /* Change color on hover */
        }

        .tem-two-address {
            color: var(--tem-two-address-color);
        }

        /* Customize slick slider container */
        .slick-slider {
            width: 100%;
            /* Adjust slider width as needed */
            margin: 0 auto;
            /* Center the slider */
        }

        .slick-next {
            right: -5px;
        }

        .slick-prev {
            left: -5px;
            position: absolute;
            z-index: 1;
        }

        .tem-two-about-first {
            width: 35%;
        }

        .tem-two-about-secontd {
            width: 65%;
        }

        .tem-two-tem-two-social-icons a {
            display: flex;
            background-color: var(--tem-two-social-icons-bg);
            margin-left: 10px;
            padding: 10px;
            text-decoration: none;
            color: var(--tem-two-social-icons-color);
        }

        .tem-two-scroll::-webkit-scrollbar {
            width: 0em;
        }

        .tem-two-scroll::-webkit-scrollbar-track {
            box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.3);
        }

        .tem-two-scroll::-webkit-scrollbar-thumb {
            background-color: darkgrey;
            outline: 1px solid slategrey;
        }

        .tem-two-service-title {
            font-family: var(--tem-two-name-font-family);
            background-color: var(--tem-two-service-box-bg);
            border: 0;
        }

        .tem-one-services-title {
            font-family: var(--tem-two-name-font-family);
            background-color: var(--tem-two-service-box-bg);
            color: var(--tem-two-service-title-color);
            border: 0;
            font-size: var(--tem-two-service-title-font-size);
        }

        /* Media query for smaller screens */
        @media only screen and (max-width: 600px) {
            .nfc-mobile-frame-two {
                height: 100vh;
                /* Let height adjust based on content */
            }
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
                        <div class="nfc-mobile-frame-two shadow-sm">
                            <div class="card p-0 border-0 shadow-none tem-two-scroll">
                                <div class="card-header p-0 border-0 border-0">
                                    <div class="nfc-two-cover-img-box">
                                        <div class="nfc-two-cover-img"
                                            style="background-image: url({{ !empty($nfc_card->nfcData->banner_image) && file_exists(public_path('storage/nfc/' . $nfc_card->nfcData->banner_image)) ? asset('storage/nfc/' . $nfc_card->nfcData->banner_image) : asset('https://i.ibb.co/64KBNBC/temp-one.webp') }});">
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body p-0 tem-one-about-content">
                                    <div class="d-flex justify-content-center">
                                        <div class="tem-two-profile d-flex justify-content-around">
                                            <div class="p-3 text-center">
                                                <div>
                                                    <img width="80px" height="80px"
                                                        style="object-fit: cover; border-radius: 50px"
                                                        src="{{ !empty($nfc_card->nfcData->profile_image) && file_exists(public_path('storage/nfc/' . optional($nfc_card->nfcData)->profile_image)) ? asset('storage/nfc/' . optional($nfc_card->nfcData)->profile_image) : asset('https://i.ibb.co/64KBNBC/temp-one.webp') }}"
                                                        alt="" />
                                                </div>
                                                <div>
                                                    <h1 class="tem-two-name"><span
                                                            class="first_name">{{ optional($nfc_card->nfcData)->first_name }}</span>&nbsp;<span
                                                            class="last_name">{{ optional($nfc_card->nfcData)->last_name }}</span>
                                                    </h1>
                                                    <h6 class="tem-two-designation fw-bold">
                                                        {{ optional($nfc_card->nfcData)->designation }}
                                                    </h6>
                                                </div>
                                                <!-- contact -->
                                                <div class="text-center">
                                                    <small
                                                        class="tem-two-address">{{ optional($nfc_card->nfcData)->address_line_one }}</small>
                                                    <br>
                                                    <small
                                                        class="tem-two-address">{{ optional($nfc_card->nfcData)->address_line_two }}</small>
                                                    <br />
                                                    <small
                                                        class="tem-two-address">{{ optional($nfc_card->nfcData)->phone_personal }}(Work)</small>
                                                    <br>
                                                    <small
                                                        class="tem-two-address">{{ optional($nfc_card->nfcData)->phone_work }}(Personal)</small>
                                                    <div
                                                        class="tem-two-social-icons mt-3 d-flex justify-content-center">
                                                        <a href="{{ optional($nfc_card->nfcData)->facebook_url }}"
                                                            class="fa fa-facebook"></a>
                                                        <a href="{{ optional($nfc_card->nfcData)->instagram_url }}"
                                                            class="fa fa-instagram"></a>
                                                        <a href="{{ optional($nfc_card->nfcData)->youtube_url }}"
                                                            class="fa fa-youtube"></a>
                                                        <a href="{{ optional($nfc_card->nfcData)->google_plus_url }}"
                                                            class="fa fa-google"></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- BIo -->
                                    <div class="tem-two-bio-box px-3 pt-4">
                                        <h6 class="tem-two-bio-title">{{ optional($nfc_card->nfcData)->bio_title }}
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
                                        <div class="tem-two-service-box px-3 py-4">
                                            <h6 class="tem-two-service-title">
                                                {{ optional($nfc_card->nfcData)->service_section_title }}</h6>
                                            <p>
                                                {{ optional($nfc_card->nfcData)->service_section_description }}
                                            </p>
                                            <div class="row g-x-1">
                                                @if (!empty($nfc_card->nfcData->service_one_image))
                                                    <div class="card col-6 p-0 border-0 rounded-0">
                                                        <div class="card-header p-0 border-0">
                                                            <h6 class="text-center mb-0 p-2 tem-one-services-title">
                                                                {{ optional($nfc_card->nfcData)->service_one_title }}
                                                            </h6>
                                                        </div>
                                                        <div class="card-body p-0">
                                                            <div>
                                                                <a href="">
                                                                    <img style="  width: 100%;  height: 100%;  background-size: cover;  object-fit: cover;"
                                                                        src="{{ !empty($nfc_card->nfcData->service_one_image) && file_exists(public_path('storage/nfc/' . optional($nfc_card->nfcData)->service_one_image)) ? asset('storage/nfc/' . optional($nfc_card->nfcData)->service_one_image) : asset('https://i.ibb.co/64KBNBC/temp-one.webp') }}"
                                                                        alt="Slide 1" />
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                @endif
                                                @if (!empty($nfc_card->nfcData->service_two_image))
                                                    <div class="card col-6 p-0 border-0 rounded-0">
                                                        <div class="card-header p-0 border-0">
                                                            <h6 class="text-center mb-0 p-2 tem-one-services-title">
                                                                {{ optional($nfc_card->nfcData)->service_two_title }}
                                                            </h6>
                                                        </div>
                                                        <div class="card-body p-0">
                                                            <div>
                                                                <a href="">
                                                                    <img style="  width: 100%;  height: 100%;  background-size: cover;  object-fit: cover;"
                                                                        src="{{ !empty($nfc_card->nfcData->service_two_image) && file_exists(public_path('storage/nfc/' . optional($nfc_card->nfcData)->service_two_image)) ? asset('storage/nfc/' . optional($nfc_card->nfcData)->service_two_image) : asset('https://i.ibb.co/64KBNBC/temp-one.webp') }}"
                                                                        alt="Slide 1" />
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                @endif
                                                @if (!empty($nfc_card->nfcData->service_three_image))
                                                    <div class="card col-6 p-0 border-0 rounded-0">
                                                        <div class="card-header p-0 border-0">
                                                            <h6 class="text-center mb-0 p-2 tem-one-services-title">
                                                                {{ optional($nfc_card->nfcData)->service_three_title }}
                                                            </h6>
                                                        </div>
                                                        <div class="card-body p-0">
                                                            <div>
                                                                <a href="">
                                                                    <img style="  width: 100%;  height: 100%;  background-size: cover;  object-fit: cover;"
                                                                        src="{{ !empty($nfc_card->nfcData->service_three_image) && file_exists(public_path('storage/nfc/' . optional($nfc_card->nfcData)->service_three_image)) ? asset('storage/nfc/' . optional($nfc_card->nfcData)->service_three_image) : asset('https://i.ibb.co/64KBNBC/temp-one.webp') }}"
                                                                        alt="Slide 1" />
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                @endif
                                                <!-- Add more divs with images for additional slides -->
                                            </div>
                                        </div>
                                    @endif
                                    <!-- Company -->
                                    @if (!empty($nfc_card->nfcData->company_title) || !empty($nfc_card->nfcData->company_about_title) )
                                    <div class="tem-two-bio-box px-3 pt-4">
                                        <h6 class="tem-two-bio-title">{{ optional($nfc_card->nfcData)->company_title }}
                                        </h6>
                                        <div class="d-flex">
                                            <div class="tem-two-about-first">
                                                <p class="fw-bold mb-0">
                                                    {{ optional($nfc_card->nfcData)->company_name }}</p>
                                                <p class="mb-0">
                                                    <span>{{ optional($nfc_card->nfcData)->company_address_line_one }}</span>
                                                    <br />
                                                    <span>{{ optional($nfc_card->nfcData)->company_address_line_two }}</span>
                                                </p>
                                                <p class="mb-0">{{ optional($nfc_card->nfcData)->company_email }}</p>
                                            </div>
                                            <div class="tem-two-about-secontd">
                                                <p class="fw-bold mb-0">
                                                    {{ optional($nfc_card->nfcData)->company_about_title }}</p>
                                                <p>
                                                    {{ optional($nfc_card->nfcData)->company_about_description }}
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    @endif
                                    <!-- Company -->
                                    <div class="tem-two-service-box px-3 py-4">
                                        <h6 class="tem-two-service-title">Contact</h6>
                                        @if (!empty(optional($nfc_card->nfcData)->phone_work))
                                            <p class="mb-0">
                                                {{ optional($nfc_card->nfcData)->phone_work }}
                                                <small class="fw-bold">(Work)</small>
                                            </p>
                                        @endif
                                        @if (!empty(optional($nfc_card->nfcData)->phone_personal))
                                            <p class="mb-0">
                                                {{ optional($nfc_card->nfcData)->phone_personal }}
                                                <small class="fw-bold">(Personal)</small>
                                            </p>
                                        @endif
                                        <div class="pt-4">
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
                                                    <div class="col mb-2 text-center">
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

<!DOCTYPE html>
<html lang="en">

<head>
    <title>{{ optional($nfc_card->nfcData)->first_name }} {{ optional($nfc_card->nfcData)->last_name }}</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <link rel="shortcut icon"
        href="https://images.rawpixel.com/image_800/cHJpdmF0ZS9s…03ZDBiLTQ2ODgtYjkzOS01MjM3ZDExNGYxNDVfMS5qcGc.jpg"
        type="image/x-icon" />

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
            --body-font-family: "Raleway", sans-serif;
            --tem-one-name-font-size: 40px;
            --tem-one-name-font-family: "Bebas Neue", sans-serif;
            --tem-one-designation-font-family: "Raleway", sans-serif;
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
            display: flex;
            justify-content: center;
        }

        .slick-initialized .slick-slide {
            display: flex;
        }

        .slick-next:before,
        .slick-prev:before {
            font-family: "Font Awesome 6 Pro";
            font-size: 20px;
            line-height: 1;
            opacity: 0.75;
            color: #fff;
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
        }

        .slick-slide img {
            background-size: cover;
            width: 300px !important;
            height: 300px;
            object-fit: cover;
            border-radius: 10px;
        }

        /* Ensure last slide doesn't have margin */
        .slick-slide:last-child {
            margin-right: 0;
            border-radius: 10px;
        }

        .slick-next:before,
        .slick-prev:before {
            position: relative;
            color: red;
            left: 20px;
            font-size: 25px;
        }

        .slick-next::after,
        .slick-prev::after {
            position: relative;
            color: red;
            left: 20px;
        }

        .slick-next {
            font-size: 0;
            line-height: 0;
            position: absolute;
            top: 50%;
            left: 90%;
            display: block;
            width: 20px;
            height: 20px;
            padding: 0;
            -webkit-transform: translate(0, -50%);
            -ms-transform: translate(0, -50%);
            transform: translate(0, -50%);
            cursor: pointer;
            color: #f60b0b;
            border: none;
            outline: 0;
            background: 0 0;
        }

        /* Media query for smaller screens */
        @media only screen and (max-width: 768px) {

            html,
            body {
                width: 100%;
                overflow-x: hidden;
            }

            .mobile-profiles {
                padding-top: 5px;
            }

            .mobile-images-profile {
                margin-top: -90 !important;
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
                        <div class="nfc-mobile-frame">
                            <div class="card p-0 border-0 shadow-none tem-one-scroll" style="overflow-x: hidden">
                                <div class="card-header p-0 border-0 border-0">
                                    <div class="nfc-one-cover-img-box">
                                        <div class="nfc-one-cover-img"
                                            style="
                          background-image: url('https://my.cybercard.ma/uploads/vcards/covers/75/logo-be-creative-inspiration-design-concept.jpg');
                        ">
                                        </div>
                                    </div>
                                </div>

                                <div class="card-body p-0 tem-one-about-content">
                                    <div class="w-100">
                                        <div class="row align-items-center gx-0">
                                            <div class="col-lg-21">
                                                <div class="text-center text-lg-center mobile-images-profile"
                                                    style="margin-top: -70px; position: relative">
                                                    <img class=""
                                                        style="
                                width: 150px;
                                border: 6px solid;
                                border-image: linear-gradient(
                                    270deg,
                                    #369efe,
                                    #47eef9
                                  )
                                  1;
                                position: relative;
                                z-index: 15;
                              "
                                                        src="https://my.cybercard.ma/uploads/vcards/profiles/221/smiling-doctor-sitting-isolated-grey_651396-917.jpg"
                                                        class="img-fluid banner-image" alt="banner" />
                                                </div>
                                            </div>
                                            <div class="col-lg-12"
                                                style="
                            background-image: url(https://my.cybercard.ma/assets/img/vcard17/profile-bg.png);
                          ">
                                                <div class="text-center text-lg-start mobile-profiles">
                                                    <div class="p-3 text-center">
                                                        <h2 class="text-muted"
                                                            style="
                                  font-size: 50px;
                                  font-family: var(--tem-one-name-font-family);
                                ">
                                                            Mostafa RACHIDI
                                                        </h2>
                                                        <h6 class="fw-bolder"
                                                            style="
                                  -webkit-text-fill-color: transparent;
                                  background: -webkit-linear-gradient(
                                    #f6a932,
                                    #ff5a0e
                                  );
                                  -webkit-background-clip: text;
                                ">
                                                            Designer, All In One TECH
                                                        </h6>
                                                    </div>
                                                </div>
                                                <div class="rounded-5 mt-2 d-flex justify-content-center align-items-center"
                                                    style="background-color: #f6f6f7; border-radius: 0">
                                                    <a href="" class="text-center"
                                                        style="
                                text-decoration: none;
                                width: 20%;
                                color: #1c344f;
                              ">
                                                        <i class="fas fa-map-marked-alt icon fa-2x p-3" title="Map"
                                                            aria-hidden="true"></i><span class="sr-only">Map</span>
                                                    </a>
                                                    <a href="" class="text-center"
                                                        style="
                                text-decoration: none;
                                width: 20%;
                                color: #1c344f;
                              ">
                                                        <i class="fab fa-facebook facebook-icon icon fa-2x"
                                                            title="Facebook" aria-hidden="true"></i><span
                                                            class="sr-only">Facebook</span>
                                                    </a>
                                                    <a href="" class="text-center"
                                                        style="
                                text-decoration: none;
                                width: 20%;
                                color: #1c344f;
                              ">
                                                        <i class="fab fa-youtube youtube-icon icon fa-2x"
                                                            title="Instagram" aria-hidden="true"></i><span
                                                            class="sr-only">Instagram</span>
                                                    </a>
                                                    <a href="" class="text-center"
                                                        style="
                                text-decoration: none;
                                width: 20%;
                                color: #1c344f;
                              ">
                                                        <i class="fab fa-linkedin linkedin-icon icon fa-2x"
                                                            title="Instagram" aria-hidden="true"></i><span
                                                            class="sr-only">Instagram</span>
                                                    </a>
                                                    <a href="" class="text-center"
                                                        style="
                                text-decoration: none;
                                width: 20%;
                                color: #1c344f;
                              ">
                                                        <i class="fab fa-whatsapp whatsapp-icon icon fa-2x"
                                                            title="Instagram" aria-hidden="true"></i><span
                                                            class="sr-only">Instagram</span>
                                                    </a>
                                                </div>
                                            </div>
                                            <p class="text-muted text-center px-5 pt-5">
                                                Lorem ipsum dolor sit amet consectetur adipisicing
                                                elit. Voluptatem non, culpa maiores nobis eius magnam
                                                asperiores qui? Eligendi, eveniet nostrum.
                                            </p>
                                        </div>
                                        <div class="px-3">
                                            <!-- personal Detailis -->
                                            <!-- Contact Info -->
                                            <div class="my-3 pt-4">
                                                <div>
                                                    <h5 class="text-muted w-25 text-center rounded-2 py-2 mb-0 fw-bold">
                                                        Contact
                                                    </h5>
                                                    <div
                                                        style="
                                background-color: #f44336;
                                height: 23px;
                                width: 25px;
                                border-radius: 100%;
                                margin-top: -32px;
                              ">
                                                    </div>
                                                </div>
                                                <div class="row gx-3 align-items-lg-end mt-2">
                                                    <div class="col-lg-6">
                                                        <div>
                                                            <img class="img-fluid"
                                                                style="
                                    position: relative;
                                    bottom: -20px;
                                    z-index: 5;
                                    left: 18px;
                                  "
                                                                src="https://my.cybercard.ma/assets/img/vcard17/email.png
                              "
                                                                alt="" />
                                                        </div>
                                                        <div class="card border-0 rounded-2 p-5 pb-3 ps-4"
                                                            style="
                                  box-shadow: 0 2px 30px rgba(0, 0, 0, 0.2);
                                ">
                                                            <div class="card-body border-0 p-0">
                                                                <div class="">
                                                                    <p class="mb-0 fw-bolder">E-mail</p>
                                                                    <p class="mb-0">demo@cybercard.ma</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div>
                                                            <img class="img-fluid"
                                                                style="
                                    position: relative;
                                    bottom: -20px;
                                    z-index: 5;
                                    left: 18px;
                                  "
                                                                src="https://my.cybercard.ma/assets/img/vcard17/phone.png
                              "
                                                                alt="" />
                                                        </div>
                                                        <div class="card border-0 rounded-2 p-5 pb-3 ps-4"
                                                            style="
                                  box-shadow: 0 2px 30px rgba(0, 0, 0, 0.2);
                                ">
                                                            <div class="card-body border-0 p-0">
                                                                <div class="">
                                                                    <p class="mb-0 fw-bolder">Phone</p>
                                                                    <p class="mb-0">demo@cybercard.ma</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div>
                                                            <img class="img-fluid"
                                                                style="
                                    position: relative;
                                    bottom: -20px;
                                    z-index: 5;
                                    left: 18px;
                                  "
                                                                src="https://my.cybercard.ma/assets/img/vcard17/dob-icon.png
                              "
                                                                alt="" />
                                                        </div>
                                                        <div class="card border-0 rounded-2 p-5 pb-3 ps-4"
                                                            style="
                                  box-shadow: 0 2px 30px rgba(0, 0, 0, 0.2);
                                ">
                                                            <div class="card-body border-0 p-0">
                                                                <div class="">
                                                                    <p class="mb-0 fw-bolder">DOB</p>
                                                                    <p class="mb-0">demo@cybercard.ma</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div>
                                                            <img class="img-fluid"
                                                                style="
                                    position: relative;
                                    bottom: -20px;
                                    z-index: 5;
                                    left: 18px;
                                  "
                                                                src="https://my.cybercard.ma/assets/img/vcard17/location.png
                              "
                                                                alt="" />
                                                        </div>
                                                        <div class="card border-0 rounded-2 p-5 pb-3 ps-4"
                                                            style="
                                  box-shadow: 0 2px 30px rgba(0, 0, 0, 0.2);
                                ">
                                                            <div class="card-body border-0 p-0">
                                                                <div class="">
                                                                    <p class="mb-0 fw-bolder">Location</p>
                                                                    <p class="mb-0">demo@cybercard.ma</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- QR -->
                                            <div class="my-3 pt-4">
                                                <div>
                                                    <h5 class="text-muted text-center rounded-2 py-2 mb-0 fw-bold">
                                                        QR
                                                    </h5>
                                                    <div
                                                        style="
                                background-color: #f44336;
                                height: 23px;
                                width: 25px;
                                border-radius: 100%;
                                margin-top: -32px;
                              ">
                                                    </div>
                                                </div>

                                                <div class="d-flex justify-content-center align-items-center w-100">
                                                    <div class="p-2 pt-5 text-start">
                                                        <svg xmlns="http://www.w3.org/2000/svg" version="1.1"
                                                            width="130" height="130" viewBox="0 0 130 130">
                                                            <rect x="0" y="0" width="130" height="130"
                                                                fill="#ffffff"></rect>
                                                            <g transform="scale(4.483)">
                                                                <g transform="translate(0,0)">
                                                                    <path fill-rule="evenodd"
                                                                        d="M10 0L10 2L11 2L11 0ZM12 0L12 1L13 1L13 2L12 2L12 4L13 4L13 3L14 3L14 4L15 4L15 5L17 5L17 6L16 6L16 8L17 8L17 9L18 9L18 10L17 10L17 11L16 11L16 9L12 9L12 7L13 7L13 5L11 5L11 6L10 6L10 4L11 4L11 3L8 3L8 4L9 4L9 5L8 5L8 7L9 7L9 8L6 8L6 9L5 9L5 8L0 8L0 10L1 10L1 9L5 9L5 10L6 10L6 11L5 11L5 12L3 12L3 11L4 11L4 10L3 10L3 11L2 11L2 13L4 13L4 14L2 14L2 16L0 16L0 21L1 21L1 18L2 18L2 20L3 20L3 21L4 21L4 20L5 20L5 21L8 21L8 23L11 23L11 24L10 24L10 25L9 25L9 24L8 24L8 29L11 29L11 26L10 26L10 25L12 25L12 26L13 26L13 27L12 27L12 29L13 29L13 28L14 28L14 29L16 29L16 28L14 28L14 27L18 27L18 28L17 28L17 29L18 29L18 28L19 28L19 29L20 29L20 28L21 28L21 29L24 29L24 28L26 28L26 29L27 29L27 28L28 28L28 26L29 26L29 25L28 25L28 24L29 24L29 23L27 23L27 22L29 22L29 20L28 20L28 19L27 19L27 16L28 16L28 15L27 15L27 14L25 14L25 13L27 13L27 12L28 12L28 11L27 11L27 12L26 12L26 11L24 11L24 10L25 10L25 9L26 9L26 8L25 8L25 9L24 9L24 8L23 8L23 9L22 9L22 8L21 8L21 6L20 6L20 7L19 7L19 6L18 6L18 5L21 5L21 4L20 4L20 3L21 3L21 0L18 0L18 2L19 2L19 1L20 1L20 3L17 3L17 4L16 4L16 2L17 2L17 1L16 1L16 0ZM8 1L8 2L9 2L9 1ZM14 2L14 3L15 3L15 2ZM9 6L9 7L10 7L10 6ZM11 6L11 7L12 7L12 6ZM14 6L14 8L15 8L15 6ZM17 6L17 8L18 8L18 9L19 9L19 7L18 7L18 6ZM10 8L10 9L8 9L8 10L7 10L7 9L6 9L6 10L7 10L7 11L6 11L6 12L5 12L5 14L7 14L7 15L5 15L5 16L4 16L4 17L3 17L3 16L2 16L2 17L3 17L3 20L4 20L4 18L5 18L5 20L7 20L7 19L8 19L8 18L9 18L9 19L10 19L10 20L9 20L9 21L10 21L10 20L11 20L11 22L13 22L13 23L12 23L12 25L15 25L15 26L16 26L16 25L17 25L17 26L19 26L19 28L20 28L20 27L22 27L22 28L23 28L23 27L22 27L22 26L23 26L23 25L21 25L21 26L19 26L19 25L20 25L20 24L19 24L19 22L20 22L20 20L25 20L25 21L26 21L26 20L27 20L27 19L26 19L26 17L25 17L25 16L27 16L27 15L25 15L25 14L22 14L22 15L24 15L24 16L21 16L21 14L19 14L19 13L25 13L25 12L24 12L24 11L21 11L21 10L22 10L22 9L21 9L21 8L20 8L20 10L19 10L19 11L17 11L17 12L18 12L18 14L17 14L17 13L14 13L14 12L15 12L15 11L14 11L14 12L13 12L13 13L12 13L12 11L13 11L13 10L12 10L12 9L11 9L11 8ZM27 8L27 9L28 9L28 10L29 10L29 9L28 9L28 8ZM10 9L10 11L11 11L11 9ZM0 11L0 13L1 13L1 11ZM7 11L7 12L6 12L6 13L9 13L9 14L8 14L8 17L7 17L7 16L6 16L6 17L5 17L5 18L6 18L6 19L7 19L7 18L8 18L8 17L9 17L9 16L10 16L10 18L11 18L11 17L12 17L12 18L13 18L13 19L12 19L12 21L13 21L13 20L14 20L14 21L16 21L16 22L15 22L15 23L14 23L14 24L15 24L15 25L16 25L16 23L17 23L17 21L18 21L18 22L19 22L19 21L18 21L18 20L19 20L19 18L20 18L20 19L21 19L21 18L23 18L23 19L25 19L25 17L24 17L24 18L23 18L23 17L21 17L21 16L20 16L20 15L19 15L19 14L18 14L18 15L19 15L19 16L20 16L20 17L18 17L18 16L17 16L17 15L16 15L16 14L15 14L15 15L14 15L14 16L15 16L15 17L12 17L12 15L13 15L13 14L10 14L10 13L11 13L11 12L9 12L9 11ZM20 11L20 12L21 12L21 11ZM28 13L28 14L29 14L29 13ZM9 14L9 15L10 15L10 16L11 16L11 15L10 15L10 14ZM16 16L16 17L15 17L15 18L16 18L16 19L14 19L14 20L18 20L18 19L17 19L17 18L18 18L18 17L17 17L17 16ZM6 17L6 18L7 18L7 17ZM16 17L16 18L17 18L17 17ZM28 17L28 18L29 18L29 17ZM21 21L21 24L24 24L24 21ZM22 22L22 23L23 23L23 22ZM25 23L25 25L24 25L24 26L25 26L25 25L26 25L26 24L27 24L27 23ZM17 24L17 25L18 25L18 24ZM9 26L9 27L10 27L10 26ZM26 27L26 28L27 28L27 27ZM0 0L0 7L7 7L7 0ZM1 1L1 6L6 6L6 1ZM2 2L2 5L5 5L5 2ZM22 0L22 7L29 7L29 0ZM23 1L23 6L28 6L28 1ZM24 2L24 5L27 5L27 2ZM0 22L0 29L7 29L7 22ZM1 23L1 28L6 28L6 23ZM2 24L2 27L5 27L5 24Z"
                                                                        fill="#000000"></path>
                                                                </g>
                                                            </g>
                                                        </svg>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Company -->
                                            <div class="my-3 pt-4 text-start">
                                                <div>
                                                    <h5
                                                        class="text-muted w-25 text-center rounded-2 py-2 ps-3 mb-0 fw-bold">
                                                        Company
                                                    </h5>
                                                    <div
                                                        style="
                                background-color: #f44336;
                                height: 23px;
                                width: 25px;
                                border-radius: 100%;
                                margin-top: -32px;
                              ">
                                                    </div>
                                                </div>
                                                <div class="d-flex pt-4 my-3">
                                                    <div class="px-3 px-lg-0 text-muted w-50">
                                                        <h6 class="fw-bold" style="color: #f44336">
                                                            NGen It LTD.
                                                        </h6>
                                                        <small>Frontend Developoer</small> <br />
                                                        <small>Mohammadpur, Dhaka</small>
                                                    </div>
                                                    <p class="text-muted w-50">
                                                        <small class="fw-bold" style="color: #f44336">About
                                                            company</small>
                                                        <br />
                                                        Lorem ipsum dolor sit amet consectetur adipisicing
                                                        elit. Repellat consequatur aut error.
                                                    </p>
                                                </div>
                                            </div>
                                            <!-- Service -->
                                            <div>
                                                <h5
                                                    class="text-muted w-25 text-center rounded-2 py-2 ps-3 mb-0 fw-bold">
                                                    Services
                                                </h5>
                                                <div
                                                    style="
                              background-color: #f44336;
                              height: 23px;
                              width: 25px;
                              border-radius: 100%;
                              margin-top: -32px;
                            ">
                                                </div>
                                            </div>
                                            <div class="py-5">
                                                <div class="row align-items-center mb-4 shadow-sm">
                                                    <div class="col-lg-2 px-0">
                                                        <div>
                                                            <img class="img-fluid" style="background-color: #f3fbff"
                                                                src="https://my.cybercard.ma/uploads/vcards/services/118/Design.png"
                                                                alt="" />
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-10">
                                                        <div>
                                                            <h6 class="fw-bolder">Design</h6>
                                                            <p>
                                                                Lorem ipsum dolor sit amet, consectetur
                                                                adipiscing elit, sed .
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row align-items-center mb-4 shadow-sm">
                                                    <div class="col-lg-2 px-0">
                                                        <div>
                                                            <img class="img-fluid" style="background-color: #f3fbff"
                                                                src="	https://my.cybercard.ma/uploads/vcards/services/100/Rebranding.png"
                                                                alt="" />
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-10">
                                                        <div>
                                                            <h6 class="fw-bolder">Design</h6>
                                                            <p>
                                                                Lorem ipsum dolor sit amet, consectetur
                                                                adipiscing elit, sed .
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row align-items-center mb-4 shadow-sm">
                                                    <div class="col-lg-2 px-0">
                                                        <div>
                                                            <img class="img-fluid" style="background-color: #f3fbff"
                                                                src="https://my.cybercard.ma/uploads/vcards/services/121/VFX.png"
                                                                alt="" />
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-10">
                                                        <div>
                                                            <h6 class="fw-bolder">Design</h6>
                                                            <p>
                                                                Lorem ipsum dolor sit amet, consectetur
                                                                adipiscing elit, sed .
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Gallery -->
                                            <div>
                                                <h5
                                                    class="text-muted w-25 text-center rounded-2 py-2 ps-3 mb-0 fw-bold">
                                                    Gallery
                                                </h5>
                                                <div
                                                    style="
                              background-color: #f44336;
                              height: 23px;
                              width: 25px;
                              border-radius: 100%;
                              margin-top: -32px;
                            ">
                                                </div>
                                            </div>
                                            <div class="mb-5 mt-4">
                                                <div class="slick-slider p-4">
                                                    <div>
                                                        <img class="img-fluid"
                                                            style="
                                  background-size: cover;
                                  width: 100%;
                                  height: 300px;
                                  object-fit: cover;
                                  border-radius: 10px;
                                "
                                                            src="https://my.cybercard.ma/uploads/vcards/gallery/81/eyes-sparkled-with-vibrant-colors-autumn-leaves-generative-ai.jpg"
                                                            alt="Slide 1" />
                                                        <div class="text-white" style="background-color: #f44336">
                                                        </div>
                                                    </div>
                                                    <div>
                                                        <img class="img-fluid"
                                                            style="
                                  background-size: cover;
                                  width: 100%;
                                  height: 300px;
                                  object-fit: cover;
                                  border-radius: 10px;
                                "
                                                            src="https://my.cybercard.ma/uploads/vcards/gallery/82/8090.jpg"
                                                            alt="Slide 2" />
                                                        <div class="text-white" style="background-color: #f44336">
                                                        </div>
                                                    </div>
                                                    <div>
                                                        <img class="img-fluid"
                                                            style="
                                  background-size: cover;
                                  width: 100%;
                                  height: 300px;
                                  object-fit: cover;
                                  border-radius: 10px;
                                "
                                                            src="https://my.cybercard.ma/uploads/vcards/gallery/84/1101169_OOAD5R0.jpg"
                                                            alt="Slide 3" />
                                                        <div class="text-white"
                                                            style="
                                  background-color: #f44336;
                                  border-bottom-left-radius: 10px;
                                ">
                                                        </div>
                                                    </div>
                                                    <div>
                                                        <img class="img-fluid"
                                                            style="
                                  background-size: cover;
                                  width: 100%;
                                  height: 300px;
                                  object-fit: cover;
                                  border-radius: 10px;
                                "
                                                            src="https://my.cybercard.ma/uploads/vcards/products/124/Tattoo.jpeg"
                                                            alt="Slide 3" />
                                                        <div class="text-white"
                                                            style="
                                  background-color: #f44336;
                                  border-bottom-left-radius: 10px;
                                ">
                                                        </div>
                                                    </div>
                                                    <!-- Add more divs with images for additional slides -->
                                                </div>
                                            </div>
                                            <!-- Form -->
                                            <div
                                                style="
                            background-image: url(https://my.cybercard.ma/assets/img/vcard17/appointment-bg.png);
                          ">
                                                <div>
                                                    <h5
                                                        class="text-muted w-25 text-center rounded-2 py-2 ps-3 mb-0 fw-bold">
                                                        Inquery
                                                    </h5>
                                                    <div
                                                        style="
                                background-color: #f44336;
                                height: 23px;
                                width: 25px;
                                border-radius: 100%;
                                margin-top: -32px;
                              ">
                                                    </div>
                                                </div>
                                                <div class="pt-4">
                                                    <form action="" method="post" class="p-3">
                                                        <div class="row">
                                                            <div class="col mb-2">
                                                                <div>
                                                                    <small for="client_name">Name
                                                                        <span class="text-danger">*</span></small>
                                                                    <input type="text" name="client_name" required
                                                                        class="form-control form-control-sm"
                                                                        placeholder="Jhone Doe" id="" />
                                                                </div>
                                                            </div>
                                                            <div class="col mb-2">
                                                                <div>
                                                                    <small for="client_email">Email
                                                                        <span class="text-danger">*</span></small>
                                                                    <input type="text" name="client_email" required
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
                                                                    <input type="text" name="client_phone"
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
                                                                    <textarea name="client_message" id="" class="form-control" rows="3" placeholder="hello jhon"></textarea>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row" style="margin-bottom: 2.5rem">
                                                            <div class="col mb-2 text-center">
                                                                <button type="submit"
                                                                    class="btn btn-sm mt-2 px-4 rounded-pill"
                                                                    style="
                                      background-color: #f44336;
                                      color: #fff;
                                    ">
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
                slidesToShow: 1,
                slidesToScroll: 1,
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

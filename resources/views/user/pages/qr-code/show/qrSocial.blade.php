<!DOCTYPE html>
<html lang="en">

<head>
    <title>{{ $qr->code }}</title>
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
            --frame-bg: #f60b0b;
            --border-color: #ffe0b0;
            --headling-title-color: #f60b0b;
            --body-font-family: "Raleway", sans-serif;
            --tem-one-name-font-size: 40px;
            --tem-one-name-font-family: "Bebas Neue", sans-serif;
            --tem-one-designation-font-family: "Raleway", sans-serif;
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
            width: 576px;
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
            color: var(--frame-bg);
            border: none;
            outline: 0;
            background: 0 0;
        }

        .headling-title {
            text-align: center;
            font-family: var(--tem-one-name-font-family);
            font-size: 40px;
            color: #ff7355;
        }

        .divider {
            background-color: var(--frame-bg);
            padding: 5px;
            width: 20%;
            margin: auto;
        }

        .link-icon {
            color: var(--frame-bg);
            box-shadow: rgba(0, 0, 0, 0.1) 0px 10px 15px -3px,
                rgba(0, 0, 0, 0.05) 0px 4px 6px -2px;
            font-size: 30px;
            padding: 10px;
            border-radius: 100%;
            text-align: center;
            background-size: 55%;
            background-position: 70% 0;
            background-repeat: no-repeat;
            margin: 7px;
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
                        <div class="nfc-mobile-frame"
                            style="
                  background-image: url(https://blackrocket.com/launchpad/wp-content/uploads/2020/03/shapes-bg-color.png);
                  background-size: cover;
                  background-position: center;
                  background-repeat: no-repeat;
                  object-fit: fill;
                ">
                            <div class="card p-0 bg-none border-0 rounded-0 shadow-none bg-transparent"
                                style="overflow-x: hidden">
                                <div class="card-header bg-none border-0 rounded-0 shadow-none bg-transparent p-0">
                                    <div class="text-center text-lg-center mobile-images-profile pt-5">
                                        <img class="p-3 img-fluid "
                                            style="
                          width: 140px;
                          border-radius: 100%;
                          border: 6px solid var(--border-color);
                          position: relative;
                          z-index: 15;
                        "
                                            src="{{ asset('storage/qr_codes/socials/' . $qr->qrData->qr_data_social_logo) }}"
                                            alt="banner" />
                                    </div>
                                </div>
                                <div class="card-body p-0">
                                    <div>
                                        @if (!empty($qr->qrData->qr_data_social_header))
                                            <h1 class="fs-3 text-muted text-center">
                                                {{ $qr->qrData->qr_data_social_header }}</h1>
                                        @endif
                                        @if (!empty($qr->qrData->qr_data_social_title))
                                        <h1 class="headling-title qr_data_social_title">
                                                {{ $qr->qrData->qr_data_social_title }}</h1>
                                        @endif
                                        @if (!empty($qr->qrData->qr_data_social_message))
                                        <p class="tex-muted text-center w-50 mx-auto qr_data_social_message">
                                                {{ $qr->qrData->qr_data_social_message }}</p>
                                        @endif
                                    </div>
                                    <div>
                                        <img class="img-fluid "
                                            src="{{ asset('storage/qr_codes/socials/' . $qr->qrData->qr_data_social_background_image) }}"
                                            alt="" />
                                    </div>
                                    <div>
                                        <p class="text-center headling-title mb-0">Check Here</p>
                                        <div class="divider"></div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-6 offset-lg-3 mx-auto">
                                            <ul class="d-flex justify-content-center align-items-center ps-0 pt-5"
                                                style="list-style-type: none">
                                                @if (!empty($qr->qrData->qr_data_social_facebook))
                                                    <li>
                                                        <a href="{{ $qr->qrData->qr_data_social_facebook }}">
                                                            <i class="fab fa-facebook link-icon"
                                                                title="FACEBOOK"
                                                                style="background-image: linear-gradient(to bottom,transparent 20%,white 20%,transparent 93%);">
                                                            </i>
                                                        </a>
                                                    </li>
                                                @endif
                                                @if (!empty($qr->qrData->qr_data_social_instagram))
                                                    <li>
                                                        <a href="{{ $qr->qrData->qr_data_social_instagram }}">
                                                            <i class="fab fa-instagram link-icon"
                                                                title="INSTAGRAM">
                                                            </i>
                                                        </a>
                                                    </li>
                                                @endif
                                                @if (!empty($qr->qrData->qr_data_social_linkedin))
                                                    <li>
                                                        <a href="{{ $qr->qrData->qr_data_social_linkedin }}">
                                                            <i class="fab fa-linkedin link-icon"
                                                                title="LINKEDIN">
                                                            </i>
                                                        </a>
                                                    </li>
                                                @endif
                                                @if (!empty($qr->qrData->qr_data_social_twitter))
                                                    <li>
                                                        <a href="{{ $qr->qrData->qr_data_social_twitter }}">
                                                            <i class="fab fa-twitter link-icon"
                                                                title="TWITTER">
                                                            </i>
                                                        </a>
                                                    </li>
                                                @endif
                                            </ul>
                                            <ul class="d-flex justify-content-center align-items-center ps-0"
                                                style="list-style-type: none">
                                                @if (!empty($qr->qrData->qr_data_social_youtube))
                                                    <li>
                                                        <a href="{{ $qr->qrData->qr_data_social_youtube }}"><i class="fab fa-youtube link-icon"
                                                                title="YOUTUBE"></i></a>
                                                    </li>
                                                @endif
                                                @if (!empty($qr->qrData->qr_data_social_pinterest))
                                                    <li>
                                                        <a href="{{ $qr->qrData->qr_data_social_pinterest }}"><i class="fab fa-pinterest link-icon"
                                                                title="PINTEREST"></i></a>
                                                    </li>
                                                @endif
                                                @if (!empty($qr->qrData->qr_data_social_website))
                                                    <li>
                                                        <a href="{{ $qr->qrData->qr_data_social_website }}"><i class="fab fa-globe link-icon"
                                                                title="WEBSITE"></i></a>
                                                    </li>
                                                @endif
                                            </ul>
                                            <ul class="d-flex justify-content-center align-items-center ps-0"
                                                style="list-style-type: none">
                                                @if (!empty($qr->qrData->qr_data_social_whatsapp))
                                                    <li>
                                                        <a href="{{ $qr->qrData->qr_data_social_whatsapp }}"><i class="fab fa-whatsapp link-icon"
                                                                title="WHATSAPP"></i></a>
                                                    </li>
                                                @endif
                                                @if (!empty($qr->qrData->qr_data_social_snapchat))
                                                    <li>
                                                        <a href="{{ $qr->qrData->qr_data_social_snapchat }}"><i class="fab fa-snapchat link-icon"
                                                                title="SNAPCHAT"></i></a>
                                                    </li>
                                                @endif
                                            </ul>
                                            <ul class="d-flex justify-content-center align-items-center ps-0"
                                                style="list-style-type: none">
                                                @if (!empty($qr->qrData->qr_data_social_tiktok))
                                                    <li>
                                                        <a href="{{ $qr->qrData->qr_data_social_tiktok }}"><i class="fab fa-tiktok link-icon"
                                                                title="TIKTOK"></i></a>
                                                    </li>
                                                @endif
                                            </ul>
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

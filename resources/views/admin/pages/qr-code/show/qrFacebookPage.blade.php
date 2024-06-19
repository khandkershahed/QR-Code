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
            --frame-bg: #faa21c;
            --border-color: #ffe0b0;
            --headling-title-color: #faa21c;
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

        .headling-title {
            text-align: center;
            color: var(--white);
            font-family: var(--tem-one-name-font-family);
            font-size: 4.375rem;
            color: var(--white);
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

        .like__btn {
            padding: 10px 15px;
            background: #faa21c;
            font-size: 18px;
            font-family: "Open Sans", sans-serif;
            border-radius: 5px;
            color: #e8efff;
            outline: none;
            border: none;
            cursor: pointer;
            position: relative;
            overflow: hidden;
            animation: sonarWave 2s linear infinite;
        }

        @keyframes sonarWave {
            0% {
                box-shadow: 0 0 0 0 rgba(233, 30, 4, 0.7),
                    inset 0 0 0 0 rgba(240, 51, 3, 0.863);
            }

            40% {
                box-shadow: 0 0 0 10px rgba(250, 162, 28, 0),
                    inset 0 0 0 10px rgba(250, 162, 28, 0);
            }

            100% {
                box-shadow: 0 0 0 20px rgba(250, 162, 28, 0),
                    inset 0 0 0 20px rgba(250, 162, 28, 0);
            }
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
                        <div class="nfc-mobile-frame shadow-sm"
                            style="background-image: linear-gradient(to bottom,#faa21c,#ffa387,#ffbed5,#ffe2ff,#ffffff);">
                            <div class="card p-0 bg-none border-0 rounded-0 shadow-none bg-transparent"
                                style="overflow-x: hidden">
                                <div class="card-header bg-none border-0 rounded-0 shadow-none bg-transparent p-0">
                                    <div class="text-center text-lg-center mobile-images-profile pt-5">
                                        <img class="p-3 img-fluid"
                                            style="width: 140px;border-radius: 100%;position: relative;z-index: 15;"
                                            src="{{asset('storage/qr_codes/facebook_pages/' . $qr->qrData->qr_data_facebook_page_logo) }}" alt="banner" />
                                    </div>
                                </div>
                                <div class="card-body p-0">
                                    <div>
                                        @if (!empty($qr->qrData->qr_data_facebook_page_header))
                                            <h1 class="fs-3 text-muted text-center">{{$qr->qrData->qr_data_facebook_page_header}}</h1>
                                        @endif
                                        @if (!empty($qr->qrData->qr_data_facebook_page_title))
                                            <h1 class="headling-title">{{$qr->qrData->qr_data_facebook_page_title}}</h1>
                                        @endif
                                        @if (!empty($qr->qrData->qr_data_facebook_page_facebook))
                                            <p class="tex-muted text-center w-50 mx-auto">
                                                <a href="{{$qr->qrData->qr_data_facebook_page_facebook}}" class="text-primary fw-bolder fs-4">Go to our Facebook page -→</a>
                                            </p>
                                        @endif
                                        @if (!empty($qr->qrData->qr_data_facebook_page_facebook))
                                            <div class="d-flex justify-content-center align-items-center pb-5">
                                                <a href="{{ $qr->qrData->qr_data_facebook_page_facebook }}" class="like__btn text-decoration-none" target="_blank">
                                                    <span id="icon"><i class="far fa-thumbs-up"></i> Like
                                                </a>
                                            </div>
                                        @endif
                                    </div>
                                    <div class="d-flex justify-content-center">
                                        <img class="img-fluid" src="{{asset('storage/qr_codes/facebook_pages/' . $qr->qrData->qr_data_facebook_page_background_image) }}"
                                            alt="" />
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
    <script>
        const likeBtn = document.querySelector(".like__btn");
        let likeIcon = document.querySelector("#icon"),
            count = document.querySelector("#count");

        let clicked = false;

        likeBtn.addEventListener("click", () => {
            if (!clicked) {
                clicked = true;
                likeIcon.innerHTML = `<i class="fas fa-thumbs-up"></i>`;
                count.textContent++;
            } else {
                clicked = false;
                likeIcon.innerHTML = `<i class="far fa-thumbs-up"></i>`;
                count.textContent--;
            }
        });
    </script>
</body>

</html>

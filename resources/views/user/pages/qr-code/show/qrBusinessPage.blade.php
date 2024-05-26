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

        .divider {
            background-color: var(--frame-bg);
            padding: 2px;
            width: 75%;
            margin: auto;
        }

        .divider-2 {
            background-color: var(--frame-bg);
            padding: 2px;
            width: 75%;
            margin: auto;
        }

        .title {
            color: var(--frame-bg);
        }

        .sub_title {
            color: var(--frame-bg);
            font-size: 60px;
        }

        .sub_title-2 {
            color: var(--frame-bg);
            font-size: 40px;
            font-family: var(--tem-one-name-font-family);
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

        .showcase {
            max-width: 576px;
            width: 576px;
            /* border: 2px solid #1026bf; */
            border-radius: 20px;
            position: relative;
        }

        .showcase_image {
            width: 100%;
            height: 100%;
            position: absolute;
            top: 0;
            left: 0;
            z-index: 99;
        }

        .showcase .overlay {
            max-width: 576px;
            width: 576px;
            height: 100%;
            background-color: rgb(255 255 255 / 83%);
            position: absolute;
            top: 0;
            left: 0;
            z-index: 999;
        }

        .showcase p {
            margin-top: 8px;
            font-size: 1.2em;
        }

        .time-start {
            background: white;
            padding: 16px;
        }

        /* Media query for smaller screens */
        @media only screen and (max-width: 768px) {

            html,
            body {
                width: 100%;
                overflow-x: hidden;
                overflow-y: scroll;
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

            .showcase_image {
                width: 100%;
                height: 100%;
            }

            .showcase .overlay {
                background-color: rgb(255 255 255 / 83%);
                position: absolute;
                top: 0;
                left: 0;
                z-index: 999;
            }

            .mobile-design {
                width: 70%;
                margin: auto !important;
            }
        }
    </style>
    <!-- Style Here End -->
</head>

<body>
    <main>
        <section class="showcase">
            <img class="showcase_image"
                src="https://images.unsplash.com/photo-1505410603994-c3ac6269711f?ixlib=rb-1.2.1&auto=format&fit=crop&w=750&q=80"
                alt="Picture" />
            <div class="overlay">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div
                                class="card p-0 p-lg-5 bg-none border-0 rounded-0 shadow-none bg-transparent image-overlay">
                                <div class="card-body">
                                    <div class="d-flex justify-content-center">
                                        <img class="img-fluid" width="200px"
                                            src="https://i.ibb.co/9rR2kd4/97-971813-molduras-arabescos-image-transparent-download-arabesque-png.png"
                                            alt="">
                                    </div>
                                    <div class="text-center p-3">
                                        <img class="p-5 img-fluid qr_data_business_page_logo"
                                            style="width: 100px;border-radius: 100%;position: relative;z-index: 15;"
                                            src="{{asset('storage/qr_codes/business_pages/' . $qr->qrData->qr_data_business_page_logo) }}" alt="banner" />
                                    </div>
                                    @if (!empty($qr->qrData->qr_data_business_page_business_name))
                                        <div class="text-center p-3">
                                            <h2 class="mb-0 title fw-bold sub_title-2 qr_data_business_page_business_name">
                                                {{ $qr->qrData->qr_data_business_page_business_name }}
                                            </h2>
                                        </div>
                                        <div class="divider"></div>
                                    @endif
                                    <!-- Content -->
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="text-center px-0 px-lg-5 m-2 mobile-design">
                                                @if (!empty($qr->qrData->qr_data_business_page_start_time_monday) || !empty($qr->qrData->qr_data_business_page_end_time_monday))
                                                    <div
                                                        class="d-flex justify-content-between align-items-center shadow-sm mt-0">
                                                        <p class="mb-0 fw-bold mt-0 ps-2">Monday</p>
                                                        <p class="mb-0 mt-0 time-start">{{ $qr->qrData->qr_data_business_page_start_time_monday }}</p>
                                                        <span class="title fw-bold">To</span>
                                                        <p class="m-0 time-start">{{ $qr->qrData->qr_data_business_page_end_time_monday }}</p>
                                                    </div>
                                                @endif
                                                @if (!empty($qr->qrData->qr_data_business_page_start_time_tuesday) || !empty($qr->qrData->qr_data_business_page_end_time_tuesday))
                                                    <div
                                                        class="d-flex justify-content-between align-items-center shadow-sm mt-0">
                                                        <p class="mb-0 fw-bold mt-0 ps-2">Tuesday</p>
                                                        <p class="mb-0 mt-0 time-start">{{ $qr->qrData->qr_data_business_page_start_time_tuesday }}</p>
                                                        <span class="title fw-bold">To</span>
                                                        <p class="m-0 time-start">{{ $qr->qrData->qr_data_business_page_end_time_tuesday }}</p>
                                                    </div>
                                                @endif
                                                @if (!empty($qr->qrData->qr_data_business_page_start_time_wednesday) || !empty($qr->qrData->qr_data_business_page_end_time_wednesday))
                                                    <div
                                                        class="d-flex justify-content-between align-items-center shadow-sm mt-0">
                                                        <p class="mb-0 fw-bold mt-0 ps-2">Wednesday</p>
                                                        <p class="mb-0 mt-0 time-start">{{ $qr->qrData->qr_data_business_page_start_time_wednesday }}</p>
                                                        <span class="title fw-bold">To</span>
                                                        <p class="m-0 time-start">{{ $qr->qrData->qr_data_business_page_end_time_wednesday }}</p>
                                                    </div>
                                                @endif
                                                @if (!empty($qr->qrData->qr_data_business_page_start_time_thursday) || !empty($qr->qrData->qr_data_business_page_end_time_thursday))
                                                    <div
                                                        class="d-flex justify-content-between align-items-center shadow-sm mt-0">
                                                        <p class="mb-0 fw-bold mt-0 ps-2">Thursday</p>
                                                        <p class="mb-0 mt-0 time-start">{{ $qr->qrData->qr_data_business_page_start_time_thursday }}</p>
                                                        <span class="title fw-bold">To</span>
                                                        <p class="m-0 time-start">{{ $qr->qrData->qr_data_business_page_end_time_thursday }}</p>
                                                    </div>
                                                @endif
                                                @if (!empty($qr->qrData->qr_data_business_page_start_time_friday) || !empty($qr->qrData->qr_data_business_page_end_time_friday))
                                                    <div
                                                        class="d-flex justify-content-between align-items-center shadow-sm mt-0">
                                                        <p class="mb-0 fw-bold mt-0 ps-2">Friday</p>
                                                        <p class="mb-0 mt-0 time-start">{{ $qr->qrData->qr_data_business_page_start_time_friday }}</p>
                                                        <span class="title fw-bold">To</span>
                                                        <p class="m-0 time-start">{{ $qr->qrData->qr_data_business_page_end_time_friday }}</p>
                                                    </div>
                                                @endif
                                                @if (!empty($qr->qrData->qr_data_business_page_start_time_saturday) || !empty($qr->qrData->qr_data_business_page_end_time_saturday))
                                                    <div
                                                        class="d-flex justify-content-between align-items-center shadow-sm mt-0">
                                                        <p class="mb-0 fw-bold mt-0 ps-2">Saturday</p>
                                                        <p class="mb-0 mt-0 time-start">{{ $qr->qrData->qr_data_business_page_start_time_saturday }}</p>
                                                        <span class="title fw-bold">To</span>
                                                        <p class="m-0 time-start">{{ $qr->qrData->qr_data_business_page_end_time_saturday }}</p>
                                                    </div>
                                                @endif
                                                @if (!empty($qr->qrData->qr_data_business_page_start_time_sunday) || !empty($qr->qrData->qr_data_business_page_end_time_sunday))
                                                    <div
                                                        class="d-flex justify-content-between align-items-center shadow-sm mt-0">
                                                        <p class="mb-0 fw-bold mt-0 ps-2">Sunday</p>
                                                        <p class="mb-0 mt-0 time-start">{{ $qr->qrData->qr_data_business_page_start_time_sunday }}</p>
                                                        <span class="title fw-bold">To</span>
                                                        <p class="m-0 time-start">{{ $qr->qrData->qr_data_business_page_end_time_sunday }}</p>
                                                    </div>
                                                @endif

                                            </div>
                                        </div>
                                    </div>
                                    <!-- Content End -->
                                    <div class="divider-2 mb-3"></div>
                                    <div class="text-center p-3">
                                        <p class="mb-0 fw-bold title">
                                            <a href="{{ $qr->qrData->qr_data_business_page_website }}" class="text-decoration-none title">{{ $qr->qrData->qr_data_business_page_website }}</a>
                                        </p>
                                        <p class="mb-0 fw-bold">Call</p>
                                        <h2 class="mb-0 sub_title" style="font-family: var(--tem-one-name-font-family)">
                                            {{ $qr->qrData->qr_data_business_page_business_phone }}
                                        </h2>
                                    </div>
                                    <div class="d-flex justify-content-center">
                                        <img class="img-fluid" width="200px" style="transform: rotate(180deg)"
                                            src="https://i.ibb.co/9rR2kd4/97-971813-molduras-arabescos-image-transparent-download-arabesque-png.png"
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

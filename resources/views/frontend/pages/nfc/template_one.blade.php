<!DOCTYPE html>
<html lang="en">

<head>
    <title>{{ $nfc_card->nfcData->first_name }} {{ $nfc_card->nfcData->last_name }}</title>
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
    @if ($nfc_card->font_family === "bebas_neue")
        <style>
            @import url("https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Raleway:ital,wght@0,100..900;1,100..900&display=swap");
        </style>
    @elseif ($nfc_card->font_family === "raleway")
        <style>
            @import url("https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Raleway:ital,wght@0,100..900;1,100..900&display=swap");
        </style>
    @endif
    @include('frontend.pages.nfc.style')

    <!-- Style Here End -->
</head>

<body>
    <main>
        <section>
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 d-flex justify-content-center align-items-center px-0">
                        <div class="nfc-mobile-frame-one">
                            <div class="card p-0 border-0 shadow-none tem-one-scroll">
                                <div class="card-header p-0 border-0">
                                    <div class="nfc-one-cover-img-box">
                                        <div class="nfc-one-cover-img"
                                            style="background-image: url({{ !empty($nfc_card->nfcData->banner_image) && file_exists(public_path('storage/nfc/' . $nfc_card->code . '/' . $nfc_card->nfcData->banner_image)) ? asset('storage/nfc/' . $nfc_card->code . '/' . $nfc_card->nfcData->banner_image) : asset('https://i.ibb.co/64KBNBC/temp-one.webp') }})">
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body p-0 tem-one-about-content">
                                    <div class="d-flex">
                                        <div class="tem-one-profile">
                                            <div class="p-3">
                                                <div>
                                                    <h1 class="tem-one-name"><span
                                                            class="first_name">{{ $nfc_card->nfcData->first_name }}</span>&nbsp;<span
                                                            class="last_name">{{ $nfc_card->nfcData->last_name }}</span>
                                                    </h1>
                                                    <h4 class="tem-one-designation designation">
                                                        {{ $nfc_card->nfcData->designation }}
                                                    </h4>
                                                </div>
                                                <!-- contact -->
                                                <div>
                                                    <small class="tem-one-address">Ulica Zvonka Brkića 58 ,</small>
                                                    <small class="tem-one-address">Rab</small>
                                                    <small class="tem-one-address">Croatia</small>
                                                    <br />
                                                    <small class="tem-one-address">+385 91 561 0409</small>
                                                    <div class="tem-one-social-icons mt-3">
                                                        <a href="#" class="fa fa-facebook"></a>
                                                        <a href="#" class="fa fa-instagram"></a>
                                                        <a href="#" class="fa fa-youtube"></a>
                                                        <a href="#" class="fa fa-google"></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="d-flex justify-content-center tem-one-profile-image">
                                            <div class="tem-one-profile-img text-center">
                                                <img src="https://i.ibb.co/64KBNBC/temp-one.webp" alt="" />
                                            </div>
                                        </div>
                                    </div>
                                    <!-- BIo -->
                                    <div class="tem-one-bio-box px-3 pt-4">
                                        <h6 class="tem-one-bio-title">BIO</h6>
                                        <p>
                                            Book enthusiast, nature lover, avid learner, coffee
                                            addict, aspiring writer, music aficionado, travel
                                            enthusiast, optimistic dreamer.
                                        </p>
                                    </div>
                                    <!-- Service -->
                                    <div class="tem-one-service-box px-3 py-4">
                                        <h6 class="tem-one-service-title">Service</h6>
                                        <p>
                                            Professional, reliable service provider committed to
                                            exceeding expectations with quality, efficiency, and
                                            personalized care for every client's needs.
                                        </p>
                                        <div class="slick-slider">
                                            <div>
                                                <img class="img-fluid"
                                                    style="
                              background-size: cover;
                              width: 100%;
                              height: 300px;
                              object-fit: cover;
                            "
                                                    src="https://www.awardstrophyworld.com/cdn/shop/files/TrophySlider-MOBILE.jpg?v=1691869489&width=1278"
                                                    alt="Slide 1" />
                                            </div>
                                            <div>
                                                <img class="img-fluid"
                                                    style="
                              background-size: cover;
                              width: 100%;
                              height: 300px;
                              object-fit: cover;
                            "
                                                    src="https://img.asmedia.epimg.net/resizer/v2/KQHEREZJPZFUNRC3WQYWA3QBXI.jpg?auth=a869899f0991310a88875490e300e1de99703103383da19f43218303861bcb70&width=1200&height=1200&smart=true"
                                                    alt="Slide 2" />
                                            </div>
                                            <div>
                                                <img class="img-fluid"
                                                    style="
                              background-size: cover;
                              width: 100%;
                              height: 300px;
                              object-fit: cover;
                            "
                                                    src="https://metro.co.uk/wp-content/uploads/2022/12/GettyImages-1450072343.jpg?quality=90&strip=all&w=1024&h=630&crop=1"
                                                    alt="Slide 3" />
                                            </div>
                                            <!-- Add more divs with images for additional slides -->
                                        </div>
                                    </div>
                                    <!-- Service -->
                                    <div class="tem-one-bio-box px-3 pt-4">
                                        <h6 class="tem-one-bio-title">Company</h6>
                                        <div class="d-flex">
                                            <div class="tem-one-about-first">
                                                <p class="fw-bold mb-0">Ngen It LTD</p>
                                                <p class="mb-0">
                                                    <span>257/A, San-fca</span>
                                                    <br />
                                                    <span>Calefornia,USA</span>
                                                </p>
                                                <p>+03 58685125</p>
                                            </div>
                                            <div class="tem-one-about-secontd">
                                                <p class="fw-bold mb-0">About</p>
                                                <p>
                                                    Passionate team dedicated to excellence, creativity,
                                                    and customer satisfaction.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Service -->
                                    <div class="tem-one-service-box px-3 py-4">
                                        <h6 class="tem-one-service-title">Contact</h6>
                                        <p class="mb-0">
                                            @: szamansaju@gmail.com
                                            <small class="fw-bold">(Work)</small>
                                        </p>
                                        <p class="mb-0">
                                            p: +385 91 561 0409
                                            <small class="fw-bold">(Personal)</small>
                                        </p>
                                        <div class="pt-2">
                                            <form action="" method="post">
                                                <div class="row">
                                                    <div class="col mb-2">
                                                        <div>
                                                            <label for="client_name">Name
                                                                <span class="text-danger">*</span></label>
                                                            <input type="text" name="client_name" required
                                                                class="form-control form-control-sm" id="" />
                                                        </div>
                                                    </div>
                                                    <div class="col mb-2">
                                                        <div>
                                                            <label for="client_email">Email
                                                                <span class="text-danger">*</span></label>
                                                            <input type="text" name="client_email" required
                                                                class="form-control form-control-sm" id="" />
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col mb-2">
                                                        <div>
                                                            <label for="client_name">Phone</label>
                                                            <input type="text" name="client_phone"
                                                                class="form-control form-control-sm" id="" />
                                                        </div>
                                                    </div>
                                                    <div class="col mb-2">
                                                        <div>
                                                            <label for="headline">Headline</label>
                                                            <input type="text" name="headline"
                                                                class="form-control form-control-sm" id="" />
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col mb-2">
                                                        <div>
                                                            <label for="client_message">Message</label>
                                                            <br />
                                                            <textarea name="client_message" id="" class="form-control" rows="3"></textarea>
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
                                        <div>
                                            <div class="d-flex justify-content-center pt-5">
                                                <img class="" width="150px"
                                                    src="https://cdn.britannica.com/17/155017-050-9AC96FC8/Example-QR-code.jpg"
                                                    alt="" />
                                            </div>
                                        </div>
                                        <div class="sticky-bottom mt-5">
                                            <button class="btn-primary btn w-100 nfc_contact_btn">
                                                Connect Now
                                            </button>
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
</body>

</html>

{{-- <style>
    @import url("https://fonts.googleapis.com/css2?family=Chakra+Petch:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap");

    .card-container-two {
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .card_two {
        width: 100%;
        max-width: 300px;
        height: 520px;
        aspect-ratio: 300 / 285;
        margin: 10px;
    }

    @media only screen and (max-width: 576px) {
        .card_two {
            height: 100% !important;
            width: 100% !important;
        }
    }

    .card-two-front {
        background-image: url({{ asset('frontend/images/card_images/card_two_front.png') }});
        background-repeat: no-repeat;
        background-size: cover;
        object-fit: cover;
        background-position: center;
    }

    .card-two-back {
        background-image: url({{ asset('frontend/images/card_images/card_two_back.png') }});
        background-repeat: no-repeat;
        background-size: cover;
        object-fit: cover;
        background-position: center;

    }

    .template-two-logo-ebox {
        margin-top: 50px;
    }

    .template-two-logo-back {
        margin-top: 105px;
    }


    .template-two-title {
        font-family: "Chakra Petch", sans-serif;
        font-weight: 800;
        color: white;
    }

    .icons-box-two {
        color: #000;
    }

    .card-two-back p {
        font-size: 17px;
    }

    .card_designation-two,
    .card_phone-two,
    .card_email-two,
    .card_address-two {
        color: #fff;
        font-weight: bold;
    }

    .main-content-tem2 {
        margin-top: 26%;
    }

    .half {
        width: 65%;
        margin: auto;
        display: flex;
        align-items: center;
    }

    @media only screen and (min-width: 1368px) {
        .punch-card-container {
            width: 100%;
            height: auto;
            margin: auto;
        }

        .punch-card-container-back {
            width: 100%;
            height: auto;
            margin: auto;
        }
    }

    .tow-company-name {
        margin-top: 45px;
        margin-bottom: 20px !important;
        margin-left: 85px;
        font-size: 20px;
    }

    .card_email-box {
        width: 70%;
    }

    .card_address-box {
        width: 70%;
    }

    .two-company-logo {
        width: 100px;
        height: 100px;
        margin: auto;
        position: relative;
        top: 55px;
        z-index: 5;
    }

    .two-company-logo img {
        width: 100px;
        height: 100px;
        object-fit: contain;
    }

    @media only screen and (max-width: 1366px) {
        .card_email-box {
            width: 70%;
        }

        .card_address-box {
            width: 70%;
        }

        .punch-card-container {
            width: 100%;
            height: auto;
            margin: auto;
        }

        .punch-card-container-back {
            width: 100%;
            height: auto;
            margin: auto;
        }

        .card_two {
            width: auto;
            max-width: 230px;
            border: 1px solid #eee !important;
        }

        .half {
            width: 100%;
            margin: auto;
            display: flex;
            align-items: center;
        }

        .template-two-title {
            position: relative;
            top: 35px;
        }

        .content-box-two {
            position: relative;
            left: 15px;
            z-index: 5;
        }

        .punch-card-container,
        .punch-card-container-back {
            max-width: 100%;
        }

        .nfc-preview-box {
            width: 335px;
            margin: auto;
            height: auto;
        }

        .tow-company-name {
            margin-top: 45px;
            margin-bottom: 20px !important;
            margin-left: 30px;
            font-size: 20px;
        }

        .card-two-mail {
            position: relative;
            top: 58px;
            z-index: 5;
        }

        .tempmail {
            text-align: center;
            width: 100%;
            margin: auto;
            margin-top: 0px !important;
        }

        .email-box-area {
            padding-top: 0px;
        }
    }

    .tempmail {
        text-align: center;
        width: 100%;
        margin: auto;
        margin-top: 90px;
    }
</style>

<div class="container">
    <div class="row mt-5">
        <div class="card-container-two" style="background: transparent;">
            <div class="card_two border-0 card-two-front rounded-0">
                <div class="">
                    <div class="d-flex justify-content-center">
                        <div class="two-company-logo">
                            <img class="card_logo" width="100px" src="{{ asset('frontend/assets/images/logos/logo.png') }}"
                                alt="Card Logo" />
                        </div>
                    </div>

                    <div class=" template-two-title main-content-tem2 w-100">
                        <h3 class="text-white text-center card_name">Rasheduzzaman</h3>
                        <p class="text-center card_designation pb-5">Frontend Designer</p>
                            GoFlixza</p>
                        <div class="content-box-two">
                            <div class="half pt-5">
                                <div class="icons-box-two text-center">
                                    <i class="fas fa-phone"></i>
                                </div>
                                <div class="ps-5 ps-lg-4">
                                    <p class="mb-0 text-start ps-2 card_phone">01620222616</p>
                                </div>
                            </div>
                            <div class="half pt-5">
                                <div class="icons-box-two text-center">
                                    <i class="fa-solid fa-house-flag"></i>
                                </div>
                                <div class="ps-5 ps-lg-4 card_address-box">
                                    <p class="mb-0 text-start ps-2 card_address">
                                        Khilkhet, Dhaka, Bangladesh
                                    </p>
                                </div>
                            </div>
                            <div class="half pt-5">
                                <div class="icons-box-two text-center">
                                    <i class="fas fa-envelope"></i>
                                </div>
                                <div class="ps-5 ps-lg-4 card_email-box">
                                    <p class="mb-0 text-start ps-2 card_email">info@gmail.com</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card_two border-0 card-two-back rounded-0">
                <div>
                    <div class="d-flex justify-content-center template-two-logo-back">
                        <img class="img-fluid bg-white" width="170px"
                            src="https://www.goflixza.com/storage/nfc/qrs/NFC7201_nfc_qr.png" alt="">
                    </div>
                    <div class="template-two-title pt-5 tempmail ">
                        <div class="half mt-4">
                            <div class="w-100 mx-auto email-box-area">
                                <p class="mb-0 card_email card-two-mail">info@gmail.com</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> --}}
<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <div>
                <img class="img-fluid" src="{{ asset('frontend/images/virtual_card/card-2.jpg') }}" alt="">
            </div>
        </div>
    </div>
</div>

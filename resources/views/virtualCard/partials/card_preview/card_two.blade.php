<style>
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
        /* Maintain the aspect ratio */
        margin: 10px;
    }
    @media only screen and (max-width: 576px) {
    .card_two {
        height: 100% !important;
        width: 100% !important;
        /* max-width: 230px; */
    }
}
    .card-two-front {
        background-image: url(https://i.ibb.co/wRN75GW/bg-2.png);
        background-repeat: no-repeat;
        background-size: cover;
        object-fit: cover;
        background-position: center;
        box-shadow: rgba(0, 0, 0, 0.25) 0px 54px 55px,
            rgba(0, 0, 0, 0.12) 0px -12px 30px, rgba(0, 0, 0, 0.12) 0px 4px 6px,
            rgba(0, 0, 0, 0.17) 0px 12px 13px, rgba(0, 0, 0, 0.09) 0px -3px 5px;
    }

    .card-two-back {
        background-image: url(https://i.ibb.co/BLV6kHn/bg2.png);
        background-repeat: no-repeat;
        background-size: cover;
        object-fit: cover;
        background-position: center;
        box-shadow: rgba(0, 0, 0, 0.25) 0px 54px 55px,
            rgba(0, 0, 0, 0.12) 0px -12px 30px, rgba(0, 0, 0, 0.12) 0px 4px 6px,
            rgba(0, 0, 0, 0.17) 0px 12px 13px, rgba(0, 0, 0, 0.09) 0px -3px 5px;
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
        font-size: 15px;
    }

    .card_designation-two,
    .card_phone-two,
    .card_email-two,
    .card_address-two {
        color: #fff;
        font-weight: bold;
    }

    .main-content-tem2 {
        margin-top: 45px;
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

    .template-two-title-back {
        margin-top: 60px;
    }

    .card_email-box {
        width: 70%;
    }

    .card_address-box {
        width: 70%;
    }

    @media only screen and (max-width: 1366px) {
        .card_email-box {
            width: 70%;
        }

        .card_address-box {
            width: 70%;
        }

        .template-two-title-back {
            margin-top: 140px;
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
        }

        .half {
            width: 100%;
            margin: auto;
            display: flex;
            align-items: center;
        }

        .template-two-title {
            margin-left: 20px;
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
    }
</style>

<div class="container">
    <div class="row mt-5">
        <div class="card-container-two">
            <div class="card_two border-0 card-two-front rounded-0">
                <div>
                    <!-- Company Logo -->
                    <div class="d-flex justify-content-center template-two-logo-ebox">
                        <img class="img-fluid card_logo" width="100px" src="https://i.ibb.co/CWsWHTM/lgoo.png"
                            alt="" />
                    </div>

                    <!-- Front Info -->
                    <div class=" template-two-title main-content-tem2">
                        <h3 class="text-white text-center card_name">Rasheduzzaman</h3>
                        <p class="text-center card_designation">Frontend Designer</p>
                        {{-- <p class="pb-4 text-white text-start tow-company-name">
                            GoFlixza</p> --}}
                        <div class="half mt-5 pt-5">
                            <div class="icons-box-two text-center">
                                <i class="fas fa-phone"></i>
                            </div>
                            <div class="ps-5 ps-lg-4">
                                <p class="mb-0 text-start ps-2 card_phone">01620222616</p>
                            </div>
                        </div>
                        <div class="half mt-2">
                            <div class="icons-box-two text-center">
                                <i class="fa-solid fa-house-flag"></i>
                            </div>
                            <div class="ps-5 ps-lg-4 card_address-box">
                                <p class="mb-0 text-start ps-2 card_address">
                                    Khilkhet, Dhaka, Bangladesh
                                </p>
                            </div>
                        </div>
                        <div class="half mt-2">
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
            <div class="card_two border-0 card-two-back rounded-0">
                <div>
                    <!-- Company Logo -->
                    <div class="d-flex justify-content-center template-two-logo-back">
                        <img class="img-fluid bg-white nfc_qr" width="170px"
                            src="https://upload.wikimedia.org/wikipedia/commons/thumb/d/d0/QR_code_for_mobile_English_Wikipedia.svg/800px-QR_code_for_mobile_English_Wikipedia.svg.png"
                            alt="" />
                    </div>

                    <!-- Front Info -->
                    <div class="template-two-title-back pt-5">
                        <div class="mt-4">
                            <div class="ps-3 text-center">
                                <p class="mb-0 card_email-bottom text-white">info@gmail.com</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

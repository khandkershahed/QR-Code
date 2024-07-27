<style>
    @import url("https://fonts.googleapis.com/css2?family=Chakra+Petch:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap");

    .card-container-two {
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
    }

    .card_two {
        width: 100%;
        max-width: 300px;
        height: 520px;
        aspect-ratio: 300 / 285;
        /* Maintain the aspect ratio */
        margin: 10px;
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
        background-color: #fff;
        color: #000;
        width: 100px;
        height: 40px;
        padding: 10px;
    }

    .card-two-back p {
        font-size: 17px;
    }

<<<<<<< HEAD
    .card_designation-two,
    .card_phone-two,
    .card_email-two,
    .card_address-two {
        color: #fff;
        font-weight: bold;
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

    @media only screen and (max-width: 1350px) {
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

    @media (max-width: 1350px) {

        .punch-card-container,
        .punch-card-container-back {
            max-width: 100%;
        }

        .nfc-preview-box {
            width: 335px;
            margin: auto;
            height: auto;
=======
    @media (max-width: 576px) {
        .card-container-two {
            flex-direction: column;
>>>>>>> c0073b6b4be035eec061d5a5617b3202ee9705df
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
                        <img class="img-fluid" width="100px" src="https://i.ibb.co/CWsWHTM/lgoo.png" alt="" />
                    </div>
    
                    <!-- Front Info -->
                    <div class="text-center template-two-title main-content-tem2">
                        <h4>Rasheduzzaman</h4>
                        <small>Frontend Designer</small>
                        <h3 class="pt-5 mb-0 pb-4">GoFlixza</h3>
                        <div class="d-flex justify-content-center align-items-center">
                            <div class="icons-box-two text-center" style="width: 17%">
                                <i class="fas fa-phone"></i>
                            </div>
                            <div class="ps-3 w-75">
                                <p class="mb-0 text-start ps-2">01620222616</p>
                            </div>
                        </div>
                        <div class="d-flex justify-content-center align-items-center mt-2">
                            <div class="icons-box-two text-center" style="width: 17%">
                                <i class="fa-solid fa-house-flag"></i>
                            </div>
                            <div class="ps-3 w-75">
                                <p class="mb-0 text-start ps-2">
                                    Khilkhet, Dhaka, Bangladesh
                                </p>
                            </div>
                        </div>
                        <div class="d-flex justify-content-center align-items-center mt-2">
                            <div class="icons-box-two text-center" style="width: 17%">
                                <i class="fas fa-envelope"></i>
                            </div>
                            <div class="ps-3 w-75">
                                <p class="mb-0 text-start ps-2">info@gmail.com</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card_two border-0 card-two-back rounded-0">
                <div>
                    <!-- Company Logo -->
                    <div class="d-flex justify-content-center template-two-logo-back">
                        <img class="img-fluid bg-white" width="170px"
                            src="https://upload.wikimedia.org/wikipedia/commons/thumb/d/d0/QR_code_for_mobile_English_Wikipedia.svg/800px-QR_code_for_mobile_English_Wikipedia.svg.png"
                            alt="" />
                    </div>
    
                    <!-- Front Info -->
                    <div class="template-two-title pt-5" style="width: 60%; margin: auto; margin-top: 50px">
                        <div class="d-flex justify-content-center align-items-center mt-4">
                            <div class="">
                                <i class="fa-solid fa-envelope"></i>
                            </div>
                            <div class="ps-3">
                                <p class="mb-0">info@gmail.com</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

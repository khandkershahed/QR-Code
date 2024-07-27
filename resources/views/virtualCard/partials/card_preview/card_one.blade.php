<style>
    @import url("https://fonts.googleapis.com/css2?family=Chakra+Petch:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap");

    .card-container {
        display: flex;
        justify-content: center;
        align-items: center;
        /* height: 100vh; */
    }

    .nfc_card_one {
        width: 100%;
        /* max-width: 300px; */
        height: 520px;
        aspect-ratio: 300 / 285;
        /* Maintain the aspect ratio */
        margin: 10px;
    }

    .card-front {
        background-image: url(https://i.ibb.co/kQDKvJG/bg.png);
        background-repeat: no-repeat;
        background-size: cover;
        object-fit: cover;
        background-position: center;
        box-shadow: rgba(0, 0, 0, 0.25) 0px 54px 55px, rgba(0, 0, 0, 0.12) 0px -12px 30px, rgba(0, 0, 0, 0.12) 0px 4px 6px, rgba(0, 0, 0, 0.17) 0px 12px 13px, rgba(0, 0, 0, 0.09) 0px -3px 5px;
    }

    .card-back {
        background-image: url(https://i.ibb.co/9ZQZ3FB/gradient.png);
        background-repeat: no-repeat;
        background-size: cover;
        object-fit: cover;
        background-position: center;
        box-shadow: rgba(0, 0, 0, 0.25) 0px 54px 55px, rgba(0, 0, 0, 0.12) 0px -12px 30px, rgba(0, 0, 0, 0.12) 0px 4px 6px, rgba(0, 0, 0, 0.17) 0px 12px 13px, rgba(0, 0, 0, 0.09) 0px -3px 5px;
    }

    .template-logo-ebox {
        margin-top: 230px;
    }

    .template-logo-back {
        margin-top: 75px;
    }

    .template-title {
        font-family: "Chakra Petch", sans-serif;
        font-weight: 800;
        color: white;
    }

    .icons-box {
        background-color: #fff;
        color: #000;
        width: 100px;
        height: 40px;
        padding: 10px;
    }

    .card-back p {
        font-size: 15px;
    }

    @media (max-width: 576px) {
        .card-container {
            flex-direction: column;
        }
    }
</style>

<div class="container">
    <div class="row mt-5">
        <div class="card-container">
            <div class="nfc_card_one border-0 card-front rounded-0">
                <div>
                    <!-- Company Logo -->
                    <div class="d-flex justify-content-center template-logo-ebox">
                        <img class="img-fluid card_logo" width="100px" src="https://i.ibb.co/CWsWHTM/lgoo.png" alt="" />
                    </div>

                    <!-- Front Info -->
                    <div class="text-center template-title">
                        <h2 class="card_name text-white">GoFlixza</h2>
                        <p class="card_designation text-white">Frontend Designer</p>
                        {{-- <h3 class="pt-4 mb-0">Rasheduzzaman</h3> --}}
                    </div>
                </div>
            </div>
            <div class="nfc_card_one border-0 card-back rounded-0">
                <div>
                    <!-- Company Logo -->
                    <div class="d-flex justify-content-center template-logo-back">
                        <img class="img-fluid bg-white nfc_qr" width="150px"
                            src="https://upload.wikimedia.org/wikipedia/commons/thumb/d/d0/QR_code_for_mobile_English_Wikipedia.svg/800px-QR_code_for_mobile_English_Wikipedia.svg.png"
                            alt="" />
                    </div>

                    <!-- Front Info -->
                    <div class="template-title pt-5" style="width: 60%; margin: auto">
                        <div class="d-flex justify-content-center align-items-center">
                            <div class="icons-box w-25 text-center">
                                <i class="fas fa-phone"></i>
                            </div>
                            <div class="ps-3 w-75">
                                <p class="mb-0 card_phone">01620222616</p>
                            </div>
                        </div>
                        <div class="d-flex justify-content-center align-items-center mt-4">
                            <div class="icons-box w-25 text-center">
                                <i class="fa-solid fa-house-flag"></i>
                            </div>
                            <div class="ps-3 w-75">
                                <p class="mb-0 card_address">Khilkhet, Dhaka, Bangladesh</p>
                            </div>
                        </div>
                        <div class="d-flex justify-content-center align-items-center mt-4">
                            <div class="icons-box w-25 text-center">
                                <i class="fas fa-envelope"></i>
                            </div>
                            <div class="ps-3 w-75">
                                <p class="mb-0 card_email">info@gmail.com</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

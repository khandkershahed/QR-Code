<style>
    .card-mail-one {
        position: relative;
        top: 35px;
        text-align: center;
        color: #0e3648;
    }

    .title-devider-tem-one {
        height: 2px;
        width: 120px;
        background-color: #0e3648;
        margin: auto;
        position: relative;
        left: 30px;
    }

    .punch-card-container-back-one {
        height: 23vh;
        object-fit: fill;
        background-repeat: no-repeat;
        background-size: cover;
        background-position: center;
        border-radius: 5px;
    }

    .punch-card-logo,
    .punch-card-qr,
    .punch-card-logo-back {
        max-width: 100%;
    }

    .content-area {
        color: #0e3648;
    }

    .card_name_one {
        color: #0e3648;
        font-weight: bold;
    }

    .card_designation_one,
    .card_phone_one,
    .card_email_one,
    .card_address_one {
        color: #0e3648;
        font-weight: bold;
    }

    .tem-one-main-color {
        color: #0e3648;
    }

    .fa-phone,
    .fa-envelope,
    .fa-map-marker-alt {
        margin-left: 5px;
    }

    @media (max-width: 767px) {
        .title-devider-tem-one {
            left: 30px;
        }

        .card-mail-one {
            top: 20px;
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
        }
    }
</style>

<div class="row mt-5 nfc-preview-box">
    <div class="col-12">
        <!-- Visiting Card Box Container -->
        <div class="punch-card-container mb-2" style="background-image: url('https://i.ibb.co/cgBNBXk/5073118.gif');">
            <div class="row p-5 align-items-center">
                <div class="col-lg-4 text-center text-lg-start">
                    <div class="ps-lg-4">
                        <img class="punch-card-logo card_logo" src="https://i.ibb.co/BNBTVN4/logo.png" alt="Logo" />
                    </div>
                    <div class="mt-4 mt-lg-0">
                        <img class="punch-card-qr" src="https://i.ibb.co/M7KMQC0/qr.png" alt="QR Code"
                            style="width: 200px;background-size: contain;height: 80px;text-align: start;margin-bottom: 0px !important;display: flex;justify-content: start;position: relative;left: 0px;object-fit: contain;" />
                    </div>
                </div>
                <div class="col-lg-8 mt-4 mt-lg-0">
                    <div class="text-center text-lg-end content-area">
                        <h4 class="fw-bold mb-0 card_name" style="color: #0e3648;">Robert Bruno</h4>
                        <p class="fw-bold mb-0 card_designation">Frontend Developer</p>
                        <div class="me-auto mt-2 title-devider-tem-one"></div>
                        <div>
                            <p class="fw-bold pt-3 mb-0">
                                <span class="card_phone">015 7661 4451</span> <i
                                    class="fas fa-phone tem-one-main-color "></i>
                            </p>
                            <p class="fw-bold mb-0">
                                <span class="card_email">goflixza@mail.com</span> <i
                                    class="fas fa-envelope tem-one-main-color "></i>
                            </p>
                        </div>
                        <div>
                            <p class="fw-bold mb-0">
                                <span class="card_address">New York, United States</span> <i
                                    class="fas fa-map-marker-alt tem-one-main-color"></i>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="punch-card-container-back" style="background-image: url('https://i.ibb.co/sVxG7gh/2.gif');">
            <div class="row p-5 align-items-center" style="height: 27.5vh;">
                <div class="col-12 d-flex justify-content-center align-items-center">
                    <img class="punch-card-logo-back card_logo" src="https://i.ibb.co/BNBTVN4/logo.png"
                        alt="Logo Back" />
                </div>
            </div>
        </div>
        <!-- Visiting Card Box Container End-->
    </div>
</div>

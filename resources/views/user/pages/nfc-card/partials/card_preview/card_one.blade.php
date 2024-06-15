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

    .punch-card-container,
    .punch-card-container-back-one {
        background-size: cover;
        background-position: center;
    }

    .punch-card-container-back-one {
        height: 23vh;
        object-fit: fill;
        background-size: cover;
        background-repeat: no-repeat;
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
</style>

<div class="row mt-5">
    <div class="col-12">
        <!-- Visiting Card Box Container -->
        <div class="punch-card-container" style="background-image: url('https://i.ibb.co/cgBNBXk/5073118.gif');">
            <div class="row p-5 align-items-center">
                <div class="col-lg-6 text-center text-lg-start">
                    <div class="ps-lg-4">
                        <img class="punch-card-logo card_logo" src="https://i.ibb.co/BNBTVN4/logo.png" alt="Logo" />
                    </div>
                    <div class="mt-4 mt-lg-0">
                        <img class="punch-card-qr" src="https://i.ibb.co/M7KMQC0/qr.png" alt="QR Code" />
                    </div>
                </div>
                <div class="col-lg-6 mt-4 mt-lg-0">
                    <div class="text-center text-lg-end content-area">
                        <h4 class="fw-bold mb-0 card_name_one">Sazeduzzaman Saju</h4>
                        <p class="fw-bold mb-0 card_designation_one">Frontend Developer</p>
                        <div class="me-auto mt-2 title-devider-tem-one"></div>
                        <div>
                            <p class="fw-bold pt-3 mb-0">
                                <span class="card_phone_one">015 7661 4451</span> <i
                                    class="fa-solid fa-phone tem-one-main-color "></i>
                            </p>
                            <p class="fw-bold mb-0">
                                <span class="card_email_one">goflixza@mail.com</span> <i
                                    class="fa-solid fa-envelope tem-one-main-color "></i>
                            </p>
                        </div>
                        <div>
                            <p class="fw-bold mb-0">
                                <span class="card_address_one">New York, United States</span> <i
                                    class="fa-solid fa-map-marker-alt tem-one-main-color"></i>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="punch-card-container-back-one" style="background-image: url('https://i.ibb.co/sVxG7gh/2.gif');">
            <div class="row p-5 align-items-center">
                <div class="col-12 d-flex justify-content-center align-items-center">
                    <img class="punch-card-logo-back card_logo pt-8" src="https://i.ibb.co/BNBTVN4/logo.png"
                        alt="Logo Back" />
                </div>
                <div class="col-12 d-flex justify-content-center align-items-center">
                    <p class="fw-bold mb-0 card-mail-one"><i class="fa-solid fa-envelope tem-one-main-color"></i>
                        support@gmail.com</p>
                </div>
            </div>
        </div>
        <!-- Visiting Card Box Container End-->
    </div>
</div>

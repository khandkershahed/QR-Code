<style>
    .punch-card-container {
        background-image: url(https://i.ibb.co/DCC9nQ0/card-10.png);
        width: 600px;
        height: auto;
    }

    .punch-card-container-back {
        background-image: url(https://i.ibb.co/DCC9nQ0/card-10.png);
        width: 600px;
        height: auto;
    }

    .punch-card-logo {
        /* Add your styles here */
    }

    .card_logo_two {
        width: 160px;
    }

    .card_logo_two_back {
        width: 300px;
    }

    .card_name {
        color: #fff;
    }

    .card_designation {
        color: #fff;
    }

    .title-devider {
        height: 2px;
        width: 120px;
        background-color: #fff;
        margin-top: 0;
        position: relative;
        left: 0;
    }

    .contact-info i {
        margin-right: 5px;
    }

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
        }
    }
</style>

<div class="row mt-5 nfc-preview-box">
    <div class="col-12">
        <!-- Visiting Card Box Container -->
        <div class="punch-card-container mb-2">
            <div class="row p-5 align-items-center py-10 px-10">
                <div class="col-lg-8 text-lg-start text-start">
                    <div>
                        <img class="punch-card-logo mb-4 card_logo"
                            src="https://i.ibb.co/vhZg1xp/png-clipart-light-white-line-light-angle-white-removebg-preview.png"
                            alt="Logo">
                    </div>
                    <div class="text-start content-area font">
                        <h4 class="fw-bold mb-0 card_name text-white">Nicholas Shelton</h4>
                        <p class="fw-bold mb-0 card_designation">Frontend Developer</p>
                        <div class="title-devider mt-2"></div>
                        <div class="contact-info">
                            <p class="fw-bold text-white pt-3 mb-0">
                                <i class="fas fa-phone"></i> <span class="card_phone">015 7661 4451</span>
                            </p>
                            <p class="fw-bold text-white mb-0">
                                <i class="fas fa-envelope"></i> <span class="card_email">goflixza@mail.com</span>
                            </p>
                        </div>
                        <div>
                            <p class="fw-bold mb-0 text-white">
                                <i class="fas fa-map-marker-alt"></i> <span class="card_address">New York,
                                    United States</span>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4"></div>
            </div>
        </div>
        <div class="punch-card-container-back">
            <div class="row p-5 align-items-center py-10 px-10" style="height: 25vh;">
                <div class="col-12 d-flex justify-content-center align-items-center">
                    <img class="punch-card-logo-back card_logo"
                        src="https://i.ibb.co/vhZg1xp/png-clipart-light-white-line-light-angle-white-removebg-preview.png"
                        alt="Logo Back">
                </div>
            </div>
        </div>
        <!-- Visiting Card Box Container End -->
    </div>
</div>

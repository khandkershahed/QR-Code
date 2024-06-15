<style>
    .text-start {
        text-align: start;
    }

    .text-lg-start {
        text-align: start !important;
        /* Specific override for large screens */
    }

    .card_logo {
        max-width: 100%;
        height: auto;
    }
    .punch-card-logo-back-three{
        width: 200px;
    }

    .card_name {
        color: #fff;
        font-size: 1.5rem;
    }

    .card_designation {
        color: #fff;
        font-size: 1.2rem;
    }

    .card_phone,
    .card_email,
    .card_address {
        color: #fff;
    }

    .title-divider {
        height: 2px;
        width: 120px;
        background-color: #fff;
        margin: 0;
    }

    .nfc-text-title {
        font-size: 4rem;
        color: #fff;
    }

    /* Responsive adjustments */
    @media (max-width: 992px) {
        .text-lg-start {
            text-align: center !important;
        }
    }
</style>
<div class="row">
    <div class="col-12">
        <div class="punch-card-container" style="background-image: url('https://i.ibb.co/M9VMCKf/card-5.png');">
            <div class="row p-5 align-items-center">
                <!-- Left column for card details -->
                <div class="col-lg-6 text-lg-start text-start">
                    <div>
                        <img class="punch-card-logo mb-4 card_logo"
                            src="https://i.ibb.co/vhZg1xp/png-clipart-light-white-line-light-angle-white-removebg-preview.png"
                            alt="Logo" />
                    </div>
                    <div class="text-start content-area font">
                        <h4 class="fw-bold mb-0 card_name" style="color: #fff">
                            Nicholas Shelton 3
                        </h4>
                        <p class="fw-bold mb-0 text-white card_designation">Frontend Developer</p>
                        <hr class="title-divider mt-2" />
                        <div>
                            <p class="fw-bold text-white pt-3 mb-0">
                                <i class="fa-solid fa-phone"></i> <span class="card_phone">015 7661 4451</span>
                            </p>
                            <p class="fw-bold text-white mb-0">
                                <i class="fa-solid fa-envelope"></i> <span class="card_email">goflixza@mail.com</span>
                            </p>
                        </div>
                        <div>
                            <p class="fw-bold mb-0 text-white">
                                <i class="fa-solid fa-map-marker-alt"></i> <span class="card_address">New York, United
                                    State</span>
                            </p>
                        </div>
                    </div>
                </div>
                <!-- Right column for additional content -->
                <div class="col-lg-6 d-flex justify-content-center align-items-center">
                    <div>
                        <img width="70px" src="https://i.ibb.co/F73Txnj/images-removebg-preview.png" alt="" />
                        <h1 class="fw-bold text-white nfc-text-title" style="font-size: 4rem;">NFC</h1>
                    </div>
                </div>
            </div>
        </div>
        <div class="punch-card-container-back" style="background-image: url('https://i.ibb.co/M9VMCKf/card-5.png');">
            <div class="row p-5 align-items-center">
                <div class="col-12 d-flex justify-content-center align-items-center" style="height: 20vh">
                    <img class="punch-card-logo-back-three card_logo"
                        src="https://i.ibb.co/vhZg1xp/png-clipart-light-white-line-light-angle-white-removebg-preview.png"
                        alt="Logo Back" />
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    .card-front-six {
        background-image: url(https://i.ibb.co/51yxtsc/card-8.png);
        width: 460px;
        height: 255px;
        position: relative;
        border-radius: 20px;
        margin: auto;
    }

    .card-six-info {
        display: flex;
        align-items: center !important;
        justify-content: center;
        top: 30px;
        margin: 15px;
        position: relative;
    }

    .card-back-six {
        background-image: url(https://i.ibb.co/51yxtsc/card-8.png);
        width: 460px;
        height: 255px;
        position: relative;
        border-radius: 20px;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .punch-card-logo-back {
        width: 250px;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .card_logo-6-bottom {
        width: 150px;
        height: 100%;
        object-fit: cover;
    }

    @media (max-width: 1366px) {

        .punch-card-container,
        .punch-card-container-back {
            max-width: 100%;
        }

        .nfc-preview-box {
            width: 440px;
            margin: auto;
            height: auto;
        }
    }
</style>

<div class="row mt-5 nfc-preview-box">
    <div class="col-12">
        <!-- Visiting Card Box Container -->
        <div class="punch-card-container mb-2 card-front-six">
            <div class="row p-5 align-items-center card-six-info">
                <div class="col-lg-5 d-flex justify-content-start font">
                    <div class="">
                        <div class="d-flex justify-content-center">
                            <img class="img-fluid bg-white nfc_qr" style="width: 100px;"
                                src="https://upload.wikimedia.org/wikipedia/commons/thumb/d/d0/QR_code_for_mobile_English_Wikipedia.svg/800px-QR_code_for_mobile_English_Wikipedia.svg.png"
                                alt="">
                        </div>
                    </div>
                </div>
                <div class="col-lg-7 text-lg-start text-end">
                    <div class="text-start content-area font">
                        <h1 class="fw-bold mb-0 card_name fs-4" style="color: #fff">
                            Nicholas Shelton
                        </h1>
                        <p class="fw-bold mb-0 p-3 card_designation ps-0 text-white">Frontend Developer</p>
                        <div class="me-auto mt-2 mb-3 title-devider"
                            style="height: 2px;width: 120px;background-color: #fff;margin: start;position: relative;left: 0px;">
                        </div>
                        <div>
                            <p class="fw-bold text-white pt-3 mb-0">
                                <i class="fas fa-phone pe-2 text-white"></i> <span class="card_phone">015 7661
                                    4451</span>
                            </p>
                            <p class="fw-bold text-white mb-0">
                                <i class="fas fa-envelope pe-2 pt-3 text-white"></i> <span
                                    class="card_email">goflixza@mail.com</span>
                            </p>
                        </div>
                        <div>
                            <p class="fw-bold mb-0 text-white">
                                <i class="fas fa-map-marker-alt pe-2 pt-3 text-white"></i> <span
                                    class="card_address">New
                                    York, United
                                    State</span>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="punch-card-container-back card-back-six">
            <div class="row p-5 align-items-center">
                <div class="col-12 d-flex justify-content-center align-items-center">
                    <img class="punch-card-logo-back card_logo card_logo-6-bottom"
                        src="https://i.ibb.co/vhZg1xp/png-clipart-light-white-line-light-angle-white-removebg-preview.png"
                        alt="Logo Back" />
                </div>
            </div>
        </div>
        <!-- Visiting Card Box Container End-->
    </div>
</div>

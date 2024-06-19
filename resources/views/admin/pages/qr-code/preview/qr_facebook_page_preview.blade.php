<style>
    @import url("https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Raleway:ital,wght@0,100..900;1,100..900&display=swap");

    .nfc-mobile-frame {
        width: 100%;
         
        border-radius: 20px;
        overflow: hidden;
        position: relative;
    }

    /* CSS for the card inside the mobile frame */
    .nfc-mobile-frame .card {
        background-color: var(--white);
        width: 100%;
        height: 100%;
        border-radius: 20px;
        overflow-y: auto;
    }

    .nfc-mobile-frame .card title {
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100%;
    }

    .nfc-one-cover-img-box {
        position: relative;
        max-width: 100%;
    }

    .nfc-one-cover-img {
        background-size: cover;
        height: 300px;
        background-position: center;
    }

    .headling-title {
        text-align: center;
        color: var(--white);
        font-family: var(--tem-one-name-font-family);
        font-size: 4.375rem;
        color: var(--white);
    }

    .divider {
        background-color: var(--frame-bg);
        padding: 5px;
        width: 20%;
        margin: auto;
    }

    .link-icon {
        color: var(--frame-bg);
        box-shadow: rgba(0, 0, 0, 0.1) 0px 10px 15px -3px,
            rgba(0, 0, 0, 0.05) 0px 4px 6px -2px;
        font-size: 30px;
        padding: 10px;
        border-radius: 100%;
        text-align: center;
        background-size: 55%;
        background-position: 70% 0;
        background-repeat: no-repeat;
        margin: 7px;
    }

    .like__btn {
        padding: 10px 15px;
        background: #faa21c;
        font-size: 18px;
        font-family: "Open Sans", sans-serif;
        border-radius: 5px;
        color: #e8efff;
        outline: none;
        border: none;
        cursor: pointer;
        position: relative;
        overflow: hidden;
        animation: sonarWave 2s linear infinite;
    }

    @keyframes sonarWave {
        0% {
            box-shadow: 0 0 0 0 rgba(233, 30, 4, 0.7),
                inset 0 0 0 0 rgba(240, 51, 3, 0.863);
        }

        40% {
            box-shadow: 0 0 0 10px rgba(250, 162, 28, 0),
                inset 0 0 0 10px rgba(250, 162, 28, 0);
        }

        100% {
            box-shadow: 0 0 0 20px rgba(250, 162, 28, 0),
                inset 0 0 0 20px rgba(250, 162, 28, 0);
        }
    }

    /* Media query for smaller screens */
    @media only screen and (max-width: 768px) {

        .mobile-profiles {
            padding-top: 5px;
        }

        .mobile-images-profile {
            margin-top: -90 !important;
            text-align: center;
        }

        .mobile-images-profile img {
            left: auto !important;
        }

        .nfc-mobile-frame {
            max-width: 390px;
            width: 100%;
        }

        .nfc-mobile-frame .card {
            border-radius: 0px !important;
        }

        .contact-info {
            margin-left: 0px !important;
        }

        .mobile-d-none {
            display: none;
        }
    }
</style>

<div class="qr_card_preview">
    <div class="row">
        <div class="col-lg-12 d-flex justify-content-center align-items-center px-0">
            <div class="nfc-mobile-frame shadow-sm"
                style="background-image: linear-gradient(to bottom,#faa21c,#ffa387,#ffbed5,#ffe2ff,#ffffff);">
                <div class="card p-0 bg-none border-0 rounded-0 shadow-none bg-transparent" style="overflow-x: hidden">
                    <div class="card-header bg-none border-0 rounded-0 shadow-none bg-transparent p-0 d-flex justify-content-center align-items-center">
                        <div class="text-center text-lg-center mobile-images-profile pt-5 ">
                            <img class="p-5 img-fluid qr_data_facebook_page_logo "
                                style="width: 100px; height: 100px; border-radius: 100%;position: relative;z-index: 15;"
                                src="https://i.ibb.co/BNBTVN4/logo.png" alt="banner" />
                        </div>
                    </div>
                    <div class="card-body p-0">
                        <div>
                            <h1 class="fs-3 text-muted text-center qr_data_facebook_page_header">Like Us On!</h1>
                            <h1 class="headling-title qr_data_facebook_page_title">Facebook</h1>
                            <p class="text-muted text-center w-75 mx-auto">
                                <a href="" class="text-primary fw-bolder fs-4 qr_data_facebook_page_facebook">Go to our Facebook page -→</a>
                            </p>
                            <div class="d-flex justify-content-center align-items-center pb-5">
                                <a href="" class="like__btn text-decoration-none qr_data_facebook_page_facebook" target="_blank">
                                    <span id="icon"><i class="far fa-thumbs-up"></i></span>
                                    {{-- <span id="count">0</span> --}}
                                    Like
                                </a>
                            </div>
                        </div>
                        <div class="d-flex justify-content-center">
                            <img class="img-fluid qr_data_facebook_page_background_image" src="https://i.ibb.co/S0jBHrz/faceboook-page.png" alt="" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

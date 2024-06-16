<style>
    @import url("https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Raleway:ital,wght@0,100..900;1,100..900&display=swap");

    /* CSS for centering the mobile frame */

    .nfc-mobile-frame {
        /* max-width: 100; */
        width: 100%;
        height: 768px !important;
        /* border: 2px solid #1026bf; */
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

    .slick-slide {
        margin-right: 20px;
        /* Adjust the value to set the desired gap */
        display: flex;
        justify-content: center;
    }

    .slick-initialized .slick-slide {
        display: flex;
    }

    .slick-next:before,
    .slick-prev:before {
        font-family: "Font Awesome 6 Pro";
        font-size: 20px;
        line-height: 1;
        opacity: 0.75;
        color: #fff;
        -webkit-font-smoothing: antialiased;
        -moz-osx-font-smoothing: grayscale;
    }

    .slick-slide img {
        background-size: cover;
        width: 300px !important;
        height: 300px;
        object-fit: cover;
        border-radius: 10px;
    }

    /* Ensure last slide doesn't have margin */
    .slick-slide:last-child {
        margin-right: 0;
        border-radius: 10px;
    }

    .slick-next:before,
    .slick-prev:before {
        position: relative;
        color: red;
        left: 20px;
        font-size: 25px;
    }

    .slick-next::after,
    .slick-prev::after {
        position: relative;
        color: red;
        left: 20px;
    }

    .slick-next {
        font-size: 0;
        line-height: 0;
        position: absolute;
        top: 50%;
        left: 90%;
        display: block;
        width: 20px;
        height: 20px;
        padding: 0;
        -webkit-transform: translate(0, -50%);
        -ms-transform: translate(0, -50%);
        transform: translate(0, -50%);
        cursor: pointer;
        color: var(--frame-bg);
        border: none;
        outline: 0;
        background: 0 0;
    }

    .headling-title-social {
        text-align: center;
        font-family: var(--tem-one-name-font-family);
        font-size: 40px;
        color: #ff7355;
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
            <div class="nfc-mobile-frame">
                <div class="card p-0 bg-none border-0 rounded-0 shadow-none bg-transparent" style="overflow-x: hidden">
                    <div
                        class="card-header bg-none border-0 rounded-0 shadow-none bg-transparent p-0 d-flex justify-content-center align-items-center">
                        <div class="text-center text-lg-center mobile-images-profile pt-5">
                            <img class="p-5 img-fluid qr_data_social_logo"
                                style="width: 100px;border-radius: 100%;border: 6px solid var(--border-color);position: relative;z-index: 15;"
                                src="https://my.cybercard.ma/uploads/vcards/profiles/221/smiling-doctor-sitting-isolated-grey_651396-917.jpg"
                                alt="banner" />
                        </div>
                    </div>
                    <div class="card-body p-0">
                        <div>
                            <h1 class="fs-3 text-muted text-center qr_data_social_header">Folow Us On !</h1>
                            <h1 class="headling-title-social qr_data_social_title">My Social Platform</h1>
                            <p class="tex-muted text-center w-50 mx-auto qr_data_social_message">
                                Lorem ipsum dolor sit amet consectetur, adipisicing
                                elit. Iure, commodi!
                            </p>
                        </div>
                        <div>
                            <img class="img-fluid qr_data_social_background_image"
                                src="https://d3nvy39jvu7woe.cloudfront.net/static/images/social_media/social_media_back.png"
                                alt="" />
                        </div>
                        <div>
                            <p class="text-center headling-title-social mb-0">Check Here</p>
                            <div class="divider"></div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6 offset-lg-3 mx-auto">
                                <ul class="d-flex justify-content-center align-items-center ps-0 pt-5"
                                    style="list-style-type: none">
                                    <li class="qr_data_social_facebook_icon qr_data_social_icon" style="display: none;">
                                        <a href="" class="qr_data_social_facebook">
                                            <i class="fab fa-facebook link-icon" title="FACEBOOK"
                                                style="background-image: linear-gradient(to bottom,transparent 20%,white 20%,transparent 93%);">
                                            </i>
                                        </a>
                                    </li>
                                    <li class="qr_data_social_instagram_icon qr_data_social_icon"
                                        style="display: none;">
                                        <a href="" class="qr_data_social_instagram"><i
                                                class="fab fa-instagram link-icon" title="INSTAGRAM"></i></a>
                                    </li>
                                    <li class="qr_data_social_linkedin_icon qr_data_social_icon" style="display: none;">
                                        <a href="" class="qr_data_social_linkedin"><i
                                                class="fab fa-linkedin link-icon" title="LINKEDIN"></i></a>
                                    </li>
                                    <li class="qr_data_social_twitter_icon qr_data_social_icon" style="display: none;">
                                        <a href="" class="qr_data_social_twitter"><i
                                                class="fab fa-twitter link-icon" title="TWITTER"></i></a>
                                    </li>
                                </ul>
                                <ul class="d-flex justify-content-center align-items-center ps-0"
                                    style="list-style-type: none">
                                    <li class="qr_data_social_youtube_icon qr_data_social_icon" style="display: none;">
                                        <a href="" class="qr_data_social_youtube"><i
                                                class="fab fa-youtube link-icon" title="YOUTUBE"></i></a>
                                    </li>
                                    <li class="qr_data_social_pinterest_icon qr_data_social_icon"
                                        style="display: none;">
                                        <a href="" class="qr_data_social_pinterest"><i
                                                class="fab fa-pinterest link-icon" title="PINTEREST"></i></a>
                                    </li>
                                    <li class="qr_data_social_website_icon qr_data_social_icon" style="display: none;">
                                        <a href="" class="qr_data_social_website"><i
                                                class="fab fa-globe link-icon" title="Website"></i></a>
                                    </li>
                                </ul>
                                <ul class="d-flex justify-content-center align-items-center ps-0"
                                    style="list-style-type: none">
                                    <li class="qr_data_social_whatsapp_icon qr_data_social_icon" style="display: none;">
                                        <a href="" class="qr_data_social_whatsapp"><i
                                                class="fab fa-whatsapp link-icon" title="WHATSAPP"></i></a>
                                    </li>
                                    <li class="qr_data_social_snapchat_icon qr_data_social_icon" style="display: none;">
                                        <a href="" class="qr_data_social_snapchat"><i
                                                class="fab fa-snapchat link-icon" title="SNAPCHAT"></i></a>
                                    </li>
                                </ul>
                                <ul class="d-flex justify-content-center align-items-center ps-0"
                                    style="list-style-type: none">
                                    <li class="qr_data_social_tiktok_icon qr_data_social_icon" style="display: none;">
                                        <a href="" class="qr_data_social_tiktok"><i
                                                class="fab fa-tiktok link-icon" title="TIKTOK"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

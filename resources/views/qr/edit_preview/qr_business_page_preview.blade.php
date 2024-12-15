<style>
    /* CSS for centering the mobile frame */
    .divider {
        background-color: var(--frame-bg);
        padding: 2px;
        width: 75%;
        margin: auto;
    }

    .divider-2 {
        background-color: var(--frame-bg);
        padding: 2px;
        width: 75%;
        margin: auto;
    }

    .title {
        color: var(--frame-bg);
    }

    .sub_title {
        color: var(--frame-bg);
        font-size: 2.5rem;
    }

    .sub_title-2 {
        color: var(--frame-bg);
        font-size: 30px;
        font-family: var(--tem-one-name-font-family);
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

    .showcase {
        max-width: 576px;
        width: 576px;
        /* border: 2px solid #1026bf; */
        border-radius: 20px;
        position: relative;
    }

    .showcase_image {
        width: 100%;
        height: 100%;
        position: absolute;
        top: 0;
        left: 0;
        z-index: 99;
    }

    .showcase .overlay {
        max-width: 576px;
        width: 576px;
        height: 100%;
        background-color: rgb(255 255 255 / 83%);
        position: absolute;
        top: 0;
        left: 0;
        z-index: 999;
    }

    .showcase p {
        margin-top: 8px;
        font-size: 1.2em;
    }

    .time-start {
        background: white;
        padding: 16px;
    }

    /* Media query for smaller screens */
    @media only screen and (max-width: 768px) {

        html,
        body {
            width: 100%;
            overflow-x: hidden;
            overflow-y: scroll;
        }

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

        .showcase_image {
            width: 100%;
            height: 100%;
        }

        .showcase .overlay {
            background-color: rgb(255 255 255 / 83%);
            position: absolute;
            top: 0;
            left: 0;
            z-index: 999;
        }

        .mobile-design {
            width: 70%;
            margin: auto !important;
        }
    }
</style>

<div class="qr_card_preview">
    <div class="row">
        <div class="col-lg-12">
            <div class="card p-0 p-lg-2 bg-none border-0 rounded-0 shadow-none bg-transparent image-overlay">
                <div class="card-body px-0">
                    <div class="d-flex justify-content-center">
                        <img class="img-fluid" width="200px"
                            src="https://i.ibb.co/9rR2kd4/97-971813-molduras-arabescos-image-transparent-download-arabesque-png.png"
                            alt="">
                    </div>
                    <div class="text-center p-3">
                        <img class="p-5 img-fluid qr_data_business_page_logo"
                            style="width: 100px;border-radius: 100%;position: relative;z-index: 15;"
                            src="{{ asset('images/logo.png') }}" alt="banner" />
                    </div>
                    <div class="text-center p-3">
                        <h2 class="mb-0 title fw-bold sub_title-2 qr_data_business_page_business_name">
                            GOFLIXZAS <br> STORE HOUR
                        </h2>
                    </div>
                    <div class="divider"></div>
                    <!-- Content -->
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="text-center px-0 px-lg-1 m-2 mobile-design">
                                <div class="qr_data_business_page_start_time_monday_time" style="display: none;">
                                    <div
                                        class="d-flex justify-content-between align-items-center shadow-sm mt-0">
                                        <p class="mb-0 fw-bold mt-0 ps-2">Monday</p>
                                        <p class="mb-0 mt-0 time-start qr_data_business_page_start_time_monday">9:00</p>
                                        <span class="title fw-bold">To</span>
                                        <p class="m-0 time-start qr_data_business_page_end_time_monday">11:00</p>
                                    </div>
                                </div>
                                <div class="qr_data_business_page_start_time_tuesday_time" style="display: none;">
                                    <div
                                        class="d-flex justify-content-between align-items-center shadow-sm mt-0">
                                        <p class="mb-0 fw-bold mt-0 ps-2">Tuesday</p>
                                        <p class="mb-0 mt-0 time-start qr_data_business_page_start_time_tuesday">9:00
                                        </p>
                                        <span class="title fw-bold">To</span>
                                        <p class="m-0 time-start qr_data_business_page_end_time_tuesday">11:00</p>
                                    </div>
                                </div>
                                <div class="qr_data_business_page_start_time_wednesday_time" style="display: none;">
                                    <div
                                        class="d-flex justify-content-between align-items-center shadow-sm mt-0">
                                        <p class="mb-0 fw-bold mt-0 ps-2">Wednesday</p>
                                        <p class="mb-0 mt-0 time-start qr_data_business_page_start_time_wednesday">9:00
                                        </p>
                                        <span class="title fw-bold">To</span>
                                        <p class="m-0 time-start qr_data_business_page_end_time_wednesday">11:00</p>
                                    </div>
                                </div>
                                <div class="qr_data_business_page_start_time_thursday_time" style="display: none;">
                                    <div
                                        class="d-flex justify-content-between align-items-center shadow-sm mt-0">
                                        <p class="mb-0 fw-bold mt-0 ps-2">Thursday</p>
                                        <p class="mb-0 mt-0 time-start qr_data_business_page_start_time_thursday">9:00
                                        </p>
                                        <span class="title fw-bold">To</span>
                                        <p class="m-0 time-start qr_data_business_page_end_time_thursday">11:00</p>
                                    </div>
                                </div>
                                <div class="qr_data_business_page_start_time_friday_time" style="display: none;">
                                    <div
                                        class="d-flex justify-content-between align-items-center shadow-sm mt-0">
                                        <p class="mb-0 fw-bold mt-0 ps-2">Friday</p>
                                        <p class="mb-0 mt-0 time-start qr_data_business_page_start_time_friday">9:00</p>
                                        <span class="title fw-bold">To</span>
                                        <p class="m-0 time-start qr_data_business_page_end_time_friday">11:00</p>
                                    </div>
                                </div>
                                <div class="qr_data_business_page_start_time_saturday_time" style="display: none;">
                                    <div
                                        class="d-flex justify-content-between align-items-center shadow-sm mt-0">
                                        <p class="mb-0 fw-bold mt-0 ps-2">Saturday</p>
                                        <p class="mb-0 mt-0 time-start qr_data_business_page_start_time_saturday">9:00
                                        </p>
                                        <span class="title fw-bold">To</span>
                                        <p class="m-0 time-start qr_data_business_page_end_time_saturday">11:00</p>
                                    </div>
                                </div>
                                <div class="qr_data_business_page_start_time_sunday_time" style="display: none;">
                                    <div
                                        class="d-flex justify-content-between align-items-center shadow-sm mt-0">
                                        <p class="mb-0 fw-bold mt-0 ps-2">Sunday</p>
                                        <p class="mb-0 mt-0 time-start qr_data_business_page_start_time_sunday">9:00</p>
                                        <span class="title fw-bold">To</span>
                                        <p class="m-0 time-start qr_data_business_page_end_time_sunday">11:00</p>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <!-- Content End -->
                    <div class="divider-2 mb-3"></div>
                    <div class="text-center p-3">
                        <h4 class="mb-2 fw-bold title">
                            <a href="http://"
                                class="text-decoration-none title qr_data_business_page_website">www.goflixza.com</a>
                        </h4>
                        <h2 class="mb-2 fw-bolder">Call</h2>
                        <h2 class="mb-0 sub_title qr_data_business_page_business_phone"
                            style="font-family: var(--tem-one-name-font-family)">
                            2560-2586-548
                        </h2>
                    </div>
                    <div class="d-flex justify-content-center">
                        <img class="img-fluid" width="200px" style="transform: rotate(180deg)"
                            src="https://i.ibb.co/9rR2kd4/97-971813-molduras-arabescos-image-transparent-download-arabesque-png.png"
                            alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

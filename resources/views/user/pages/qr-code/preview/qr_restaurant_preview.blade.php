<style>
    @import url("https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Raleway:ital,wght@0,100..900;1,100..900&display=swap");

    /* CSS for centering the mobile frame */

    .nfc-mobile-frame {

        width: 100%;
        max-width: 576px;
        border-radius: 20px;
        overflow: hidden;
        position: relative;
    }

    /* CSS for the card inside the mobile frame */
    .nfc-mobile-frame .card {
        background-color: var(--white);
        width: 100%;
        max-width: 576px;
        border-radius: 20px;
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
    }

    /* Ensure last slide doesn't have margin */
    .slick-slide:last-child {
        margin-right: 0;
        border-radius: 10px;
    }

    /* Media query for smaller screens */
    @media only screen and (max-width: 768px) {

        html,
        body {
            width: 100%;
            overflow-x: hidden;
        }

        .mobile-profiles {
            padding-top: 65px;
        }

        .mobile-images-profile {
            margin-top: 0 !important;
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
            <div class="nfc-mobile-frame rounded-0">
                <div class="card p-0 rounded-0" style="overflow-x: hidden">
                    <div class="card-body p-0 rounded-0 row">
                        <div class="col-lg-6 pe-0 d-flex justify-content-center align-items-center"
                            style="
                        background-image: url('{{ asset('images/d-image/e7632495dd8e76e42fad24de2fc92f26.jpg') }}');
                        background-repeat: no-repeat;
                        background-size: cover;
                        background-position: center;
                        object-fit: fill;
                      ">
                            <div class="text-center" style="position: relative; z-index: 1">
                                <div>
                                    <div class="py-3" style="background-color: rgba(0, 0, 0, 0.561)">
                                        <div>
                                            <img class="img-fluid qr_data_restaurant_logo"
                                                src="{{ asset('images/d-image/Restaurant-logo-with-chef-drawing-template-on-transparent-background-PNG-removebg-preview.png') }}"
                                                alt="" />
                                        </div>
                                        <h3 class="text-white mb-0 qr_data_restaurant_name"
                                            style="font-family: var(--tem-one-name-font-family)">
                                            Goflixza
                                        </h3>
                                        <h1 class="text-white mb-0"
                                            style="
                                font-size: 4rem;
                                font-family: var(--tem-one-name-font-family);
                              ">
                                            Menu
                                        </h1>
                                        <p class="p-3 text-white mb-0 qr_data_restaurant_description">
                                            Lorem ipsum dolor sit amet consectetur adipisicing
                                            elit. Omnis, ipsam.
                                        </p>
                                        <a href="tel:+"
                                            class="text-decoration-none text-black bg-white p-2 rounded-2 for-device-text qr_data_restaurant_phone">Call
                                            Now:
                                            01576614451</a>
                                        <div class="mt-4">
                                            <a href="" class="btn btn-danger for-device-text qr_data_restaurant_location">View Location</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 px-0 d-flex flex-column justify-content-center align-items-center ps-2">
                            <h4>All Menus</h4>
                            <div class="w-100 d-flex flex-column justify-content-center align-items-center">
                                <!-- First Menu -->
                                @foreach ($categories as $category)
                                    <div class="row align-items-center w-100 pt-4"
                                        style="border-top: 1px dashed #e92c28;background: white;">
                                        <div class="col-lg-3 px-0">
                                            <div style="background-color: white">
                                                <img width="60px" class="img-fluid"
                                                    src="{{ asset('storage/qr_codes/restaurants/' . $category->category_icon) }}"
                                                    alt="" />
                                            </div>
                                        </div>
                                        <div class="col-lg-9 pe-0">
                                            <div>
                                                <p class="mb-0 text-black fw-bold">{{ $category->category_name }}</p>
                                                <small class="mb-0 text-black">{{ $category->category_start_time }} - {{ $category->category_end_time }}</small>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                                <!-- Menu End -->

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

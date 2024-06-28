<style>
    .slick-next:before,
    .slick-prev:before {
        color: #1c344f;
    }

    .slick-next:before,
    .slick-prev:before {
        left: 22px;
    }

    .nfc-mobile-frame_four {
        max-width: 420px;

        /* min-height: 100vh; */
        /* border: 2px solid #1026bf; */
        border-radius: 20px;
        overflow: hidden;
        position: relative;
    }

    /* CSS for the card inside the mobile frame */
    .nfc-mobile-frame_four .card {
        background-color: var(--white);
        width: 100%;
        height: 100%;
        border-radius: 20px;
        overflow-y: auto;
    }

    .nfc-mobile-frame_four .card title {
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100%;
    }

    .nfc-four-cover-img-box {
        position: relative;
        max-width: 100%;
    }

    .nfc-four-cover-img {
        background-size: cover;
        height: 300px;
        background-position: center;
    }

    .slick-initialized .slick-slide {
        display: flex;
        justify-content: center;
        align-items: center;
        margin: auto;
    }

    /* Media query for smaller screens */
    @media only screen and (max-width: 767px) {
        .nfc-mobile-frame_four {
            max-width: 390px;
            width: 100%;
        }

        .nfc-mobile-frame_four .card {
            border-radius: 0px !important;
        }

        .contact-info_four {
            margin-left: 0px !important;
        }

        .mobile-d-none {
            display: none;
        }
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
</style>
<div class="container">
    <div class="row">
        <div class="col-lg-12 d-flex justify-content-center align-items-center px-0">
            <div class="nfc-mobile-frame_four shadow-sm">
                <div class="card p-0 border-0 shadow-none tem-one-scroll" style="overflow-x: hidden">
                    <div class="card-header p-0 border-0 border-0">
                        <div class="nfc-four-cover-img-box">
                            <div class="nfc-four-cover-img"> <img class="banner_image"
                                    src="https://my.cybercard.ma/uploads/vcards/covers/167/banner-(1).png"
                                    width="421px" height="250px">
                            </div>
                        </div>
                    </div>

                    <div class="card-body p-0 tem-one-about-content">
                        <div class="w-100">
                            <div class="text-end" style="margin-top: -80px; position: relative">
                                <img style="width: 150px; height: 150px;border-width: 6px;border-style: solid;"
                                    src="https://my.cybercard.ma/uploads/vcards/profiles/221/smiling-doctor-sitting-isolated-grey_651396-917.jpg"
                                    class="img-fluid banner-image profile_image" alt="profile" />
                            </div>
                            <div class="px-3">
                                <!-- personal Detailis -->
                                <div>
                                    <div class="" style="margin-top: -45px">
                                        <h2><span class="first_name">Robert</span>&nbsp;<span
                                                class="last_name">Bruno</span></h2>
                                        <h6 class="fw-bolder designation">Real Estate Broker</h6>
                                        <h5 class="fw-bolder pt-3 bio_title">BIO</h5>
                                        <p class="bio_description">
                                            Lorem ipsum dolor sit amet, consectetur adipiscing
                                            elit, sed do eiusmod tempor incididunt ut labore
                                            et dolore magna aliqua.
                                        </p>
                                    </div>
                                </div>
                                <!-- Social -->
                                <div class="rounded-5 mt-5 d-flex justify-content-center align-items-center py-2"
                                    style="background-color: #f6f6f7; border-radius: 0;">

                                    <a href="" class="fa fa-facebook facebook_url icon fa-2x"
                                        style="text-decoration: none;width: 20%;color: #1c344f;">
                                        {{-- <i class="fab fa-facebook facebook-icon icon fa-2x" title="Facebook"></i> --}}
                                    </a>
                                    <a href="" class="fa fa-instagram instagram_url icon fa-2x"
                                        style="text-decoration: none;width: 20%;color: #1c344f;">
                                        {{-- <i class="fab fa-facebook facebook-icon icon fa-2x" title="Facebook"></i> --}}
                                    </a>
                                    <a href="" class="fa fa-youtube youtube_url icon fa-2x"
                                        style="text-decoration: none;width: 20%;color: #1c344f;">
                                        {{-- <i class="fab fa-facebook facebook-icon icon fa-2x" title="Facebook"></i> --}}
                                    </a>
                                    <a href="" class="fa fa-google gmail_url icon fa-2x"
                                        style="text-decoration: none;width: 20%;color: #1c344f;">
                                        {{-- <i class="fab fa-facebook facebook-icon icon fa-2x" title="Facebook"></i> --}}
                                    </a>

                                </div>
                                <!-- Contact Info -->
                                <div class="my-3 pt-4">
                                    <div class="row gx-3">
                                        <div class="col-lg-12 d-flex justify-content-center align-items-center pe-0 mb-3">
                                            <div class="card border-0 contact-info_four"
                                                style="background-color: #1c344f;border-radius: 15px;margin-left: -10px;padding: 20px;position: relative;">
                                                <div class="card-body p-0">
                                                    <div class="row align-items-center">
                                                        <div class="col-lg-2 text-center text-lg-start">
                                                            <img class=""
                                                                src="https://my.cybercard.ma/assets/img/vcard13/email.png" />
                                                        </div>
                                                        <div class="col-lg-10 text-center text-lg-start">
                                                            <div class="ps-3 pt-3 pt-lg-0">
                                                                <h6 class="text-white mb-0">E-mail</h6>
                                                                <small class="text-white">
                                                                    <span class="email_personal">demo@example.ma</span>
                                                                    (personal)
                                                                </small> <br>
                                                                <small class="text-white">
                                                                    <span class="email_work">demo@example.ma</span>
                                                                    (work)
                                                                </small>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 d-flex justify-content-center align-items-center pe-0">
                                            <div class="card border-0 contact-info_four"
                                                style="background-color: #1c344f;border-radius: 15px;margin-left: -10px;padding: 20px;position: relative;">
                                                <div class="card-body p-0"
                                                    style="background-image: url(https://my.cybercard.ma/images/contact-card-bg.png?4da69f117ea28772ef2ce81e91826424);background-repeat: no-repeat;background-size: contain;">
                                                    <div class="row">
                                                        <div class="col-lg-2 text-center text-lg-start">
                                                            <img class=""
                                                                src="https://my.cybercard.ma/assets/img/vcard13/phone.png" />
                                                        </div>
                                                        <div class="col-lg-10 text-center text-lg-start">
                                                            <div class="ps-3 pt-3 pt-lg-0">
                                                                <h6 class="text-white mb-0">Phone</h6>
                                                                <small class="text-white">
                                                                    <span class="phone_personal">(+880)175*****8</span>
                                                                    (personal)
                                                                </small><br>
                                                                <small class="text-white">
                                                                    <span class="phone_work">(+880)175*****8</span>
                                                                    (work)
                                                                </small>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-12 d-flex justify-content-center align-items-center pe-0 mt-3">
                                            <div class="card border-0 contact-info_four"
                                                style="background-color: #1c344f;border-radius: 15px;margin-left: -10px;padding: 20px;position: relative;">
                                                <div class="card-body p-0"
                                                    style="background-image: url(https://my.cybercard.ma/images/contact-card-bg.png?4da69f117ea28772ef2ce81e91826424);background-repeat: no-repeat;background-size: contain;">
                                                    <div class="row">
                                                        <div class="col-lg-2 text-center text-lg-start">
                                                            <img class=""
                                                                src="https://my.cybercard.ma/assets/img/vcard13/location.png" />
                                                        </div>
                                                        <div class="col-lg-10 text-center text-lg-start">
                                                            <div class="ps-3 pt-3 pt-lg-0">
                                                                <h6 class="text-white mb-0">Address</h6>
                                                                <small class="text-white address_line_one">
                                                                    Mohammadpur,
                                                                </small> <br>
                                                                <small class="text-white address_line_two">
                                                                    Dhaka, Bangladesh
                                                                </small>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- QR -->
                                <div class="my-3">
                                    <h3 class="fw-bold text-center pt-5" style="color: #1c344f; margin-bottom: 2rem">
                                        QR Code
                                    </h3>
                                    <div class="text-center">
                                        <img class="profile_image"
                                            style="margin-bottom: -3rem;position: relative;z-index: 5;border-radius: 100%;width: 100px;"
                                            src="https://my.cybercard.ma/uploads/vcards/profiles/221/smiling-doctor-sitting-isolated-grey_651396-917.jpg"
                                            alt="banner" />
                                    </div>
                                    <div>
                                        <div class="mx-5">
                                            <div class="card border-0"
                                                style="box-shadow: 0 5px 20px rgba(0, 0, 0, 0.1);">
                                                <div class="card-body">
                                                    <div class="p-2 pt-5 text-center">
                                                        <svg xmlns="http://www.w3.org/2000/svg" version="1.1"
                                                            width="130" height="130" viewBox="0 0 130 130">
                                                            <rect x="0" y="0" width="130" height="130"
                                                                fill="#ffffff">
                                                            </rect>
                                                            <g transform="scale(4.483)">
                                                                <g transform="translate(0,0)">
                                                                    <path fill-rule="evenodd"
                                                                        d="M10 0L10 2L11 2L11 0ZM12 0L12 1L13 1L13 2L12 2L12 4L13 4L13 3L14 3L14 4L15 4L15 5L17 5L17 6L16 6L16 8L17 8L17 9L18 9L18 10L17 10L17 11L16 11L16 9L12 9L12 7L13 7L13 5L11 5L11 6L10 6L10 4L11 4L11 3L8 3L8 4L9 4L9 5L8 5L8 7L9 7L9 8L6 8L6 9L5 9L5 8L0 8L0 10L1 10L1 9L5 9L5 10L6 10L6 11L5 11L5 12L3 12L3 11L4 11L4 10L3 10L3 11L2 11L2 13L4 13L4 14L2 14L2 16L0 16L0 21L1 21L1 18L2 18L2 20L3 20L3 21L4 21L4 20L5 20L5 21L8 21L8 23L11 23L11 24L10 24L10 25L9 25L9 24L8 24L8 29L11 29L11 26L10 26L10 25L12 25L12 26L13 26L13 27L12 27L12 29L13 29L13 28L14 28L14 29L16 29L16 28L14 28L14 27L18 27L18 28L17 28L17 29L18 29L18 28L19 28L19 29L20 29L20 28L21 28L21 29L24 29L24 28L26 28L26 29L27 29L27 28L28 28L28 26L29 26L29 25L28 25L28 24L29 24L29 23L27 23L27 22L29 22L29 20L28 20L28 19L27 19L27 16L28 16L28 15L27 15L27 14L25 14L25 13L27 13L27 12L28 12L28 11L27 11L27 12L26 12L26 11L24 11L24 10L25 10L25 9L26 9L26 8L25 8L25 9L24 9L24 8L23 8L23 9L22 9L22 8L21 8L21 6L20 6L20 7L19 7L19 6L18 6L18 5L21 5L21 4L20 4L20 3L21 3L21 0L18 0L18 2L19 2L19 1L20 1L20 3L17 3L17 4L16 4L16 2L17 2L17 1L16 1L16 0ZM8 1L8 2L9 2L9 1ZM14 2L14 3L15 3L15 2ZM9 6L9 7L10 7L10 6ZM11 6L11 7L12 7L12 6ZM14 6L14 8L15 8L15 6ZM17 6L17 8L18 8L18 9L19 9L19 7L18 7L18 6ZM10 8L10 9L8 9L8 10L7 10L7 9L6 9L6 10L7 10L7 11L6 11L6 12L5 12L5 14L7 14L7 15L5 15L5 16L4 16L4 17L3 17L3 16L2 16L2 17L3 17L3 20L4 20L4 18L5 18L5 20L7 20L7 19L8 19L8 18L9 18L9 19L10 19L10 20L9 20L9 21L10 21L10 20L11 20L11 22L13 22L13 23L12 23L12 25L15 25L15 26L16 26L16 25L17 25L17 26L19 26L19 28L20 28L20 27L22 27L22 28L23 28L23 27L22 27L22 26L23 26L23 25L21 25L21 26L19 26L19 25L20 25L20 24L19 24L19 22L20 22L20 20L25 20L25 21L26 21L26 20L27 20L27 19L26 19L26 17L25 17L25 16L27 16L27 15L25 15L25 14L22 14L22 15L24 15L24 16L21 16L21 14L19 14L19 13L25 13L25 12L24 12L24 11L21 11L21 10L22 10L22 9L21 9L21 8L20 8L20 10L19 10L19 11L17 11L17 12L18 12L18 14L17 14L17 13L14 13L14 12L15 12L15 11L14 11L14 12L13 12L13 13L12 13L12 11L13 11L13 10L12 10L12 9L11 9L11 8ZM27 8L27 9L28 9L28 10L29 10L29 9L28 9L28 8ZM10 9L10 11L11 11L11 9ZM0 11L0 13L1 13L1 11ZM7 11L7 12L6 12L6 13L9 13L9 14L8 14L8 17L7 17L7 16L6 16L6 17L5 17L5 18L6 18L6 19L7 19L7 18L8 18L8 17L9 17L9 16L10 16L10 18L11 18L11 17L12 17L12 18L13 18L13 19L12 19L12 21L13 21L13 20L14 20L14 21L16 21L16 22L15 22L15 23L14 23L14 24L15 24L15 25L16 25L16 23L17 23L17 21L18 21L18 22L19 22L19 21L18 21L18 20L19 20L19 18L20 18L20 19L21 19L21 18L23 18L23 19L25 19L25 17L24 17L24 18L23 18L23 17L21 17L21 16L20 16L20 15L19 15L19 14L18 14L18 15L19 15L19 16L20 16L20 17L18 17L18 16L17 16L17 15L16 15L16 14L15 14L15 15L14 15L14 16L15 16L15 17L12 17L12 15L13 15L13 14L10 14L10 13L11 13L11 12L9 12L9 11ZM20 11L20 12L21 12L21 11ZM28 13L28 14L29 14L29 13ZM9 14L9 15L10 15L10 16L11 16L11 15L10 15L10 14ZM16 16L16 17L15 17L15 18L16 18L16 19L14 19L14 20L18 20L18 19L17 19L17 18L18 18L18 17L17 17L17 16ZM6 17L6 18L7 18L7 17ZM16 17L16 18L17 18L17 17ZM28 17L28 18L29 18L29 17ZM21 21L21 24L24 24L24 21ZM22 22L22 23L23 23L23 22ZM25 23L25 25L24 25L24 26L25 26L25 25L26 25L26 24L27 24L27 23ZM17 24L17 25L18 25L18 24ZM9 26L9 27L10 27L10 26ZM26 27L26 28L27 28L27 27ZM0 0L0 7L7 7L7 0ZM1 1L1 6L6 6L6 1ZM2 2L2 5L5 5L5 2ZM22 0L22 7L29 7L29 0ZM23 1L23 6L28 6L28 1ZM24 2L24 5L27 5L27 2ZM0 22L0 29L7 29L7 22ZM1 23L1 28L6 28L6 23ZM2 24L2 27L5 27L5 24Z"
                                                                        fill="#000000"></path>
                                                                </g>
                                                            </g>
                                                        </svg>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Bio -->
                                <!-- <div class="my-3">
                                            <h3
                                              class="fw-bold text-center py-5"
                                              style="color: #1c344f"
                                            >
                                              Bio
                                            </h3>
                                            <p class="text-center">
                                              Lorem ipsum dolor sit amet consectetur adipisicing
                                              elit. Praesentium porro voluptate ex quibusdam a ad,
                                              sit alias omnis aliquam nemo sed non libero dolores
                                              in! Vel illum ex ea pariatur et maxime ducimus eaque
                                              dicta magni adipisci, rem ipsum temporibus!
                                            </p>


                                          </div> -->
                                <!-- Company -->
                                <div class="my-3 text-center">
                                    <h3 class="fw-bold text-center py-5 pb-3 company_title" style="color: #1c344f">
                                        Company
                                    </h3>
                                    <h5 class="fw-bold company_name">Company LTD.</h5>
                                    <h6 class="fw-bold company_phone">0176****90</h6>
                                    <h6 class="fw-bold company_email">example@example.com</h6>
                                    <small class="company_address_line_one">Mohammadpur</small> <br />
                                    <small class="company_address_line_two">Dhaka, Bangladesh</small>
                                    <p class="pt-2">
                                        <span class="fw-bold company_about_title">About company</span> <br />
                                        <span class="company_about_description">
                                            Lorem ipsum dolor sit amet consectetur adipisicing
                                            elit. Repellat consequatur aut error. Accusantium
                                            illo, optio vel numquam quam maxime? Dolorem.
                                        </span>
                                    </p>
                                </div>
                                <!-- Service -->
                                <div class="my-5"
                                    style="
                            background-image: url('https://my.cybercard.ma/images/slider-bg.png?e98f043e310dd6f02946933959a990ff');
                          ">
                                    <h3 class="fw-bold text-center pt-4 service_section_title"
                                        style="color: #1c344f; margin-bottom: 2rem">
                                        Service
                                    </h3>
                                    <div class="slick-slider p-4">
                                        <div class="">
                                            <img class="img-fluid service_one_image"
                                                style="background-size: cover;width: 100% !important;height: 300px;object-fit: cover;border-top-right-radius: 40px;border-top-left-radius: 0px; border-bottom-left-radius: 40px; border-bottom-right-radius: 0;"
                                                src="https://www.awardstrophyworld.com/cdn/shop/files/TrophySlider-MOBILE.jpg?v=1691869489&width=1278"
                                                alt="Slide 1" />
                                        </div>
                                        <div class="">
                                            <img class="img-fluid service_two_image"
                                                style="background-size: cover;width: 100% !important;height: 300px;object-fit: cover;border-top-right-radius: 40px;border-top-left-radius: 0px; border-bottom-left-radius: 40px; border-bottom-right-radius: 0;"
                                                src="https://img.asmedia.epimg.net/resizer/v2/KQHEREZJPZFUNRC3WQYWA3QBXI.jpg?auth=a869899f0991310a88875490e300e1de99703103383da19f43218303861bcb70&width=1200&height=1200&smart=true"
                                                alt="Slide 2" />
                                        </div>
                                        <div class="">
                                            <img class="img-fluid service_three_image"
                                                style="background-size: cover;width: 100% !important;height: 300px;object-fit: cover;border-top-right-radius: 40px;border-top-left-radius: 0px; border-bottom-left-radius: 40px; border-bottom-right-radius: 0;"
                                                src="https://metro.co.uk/wp-content/uploads/2022/12/GettyImages-1450072343.jpg?quality=90&strip=all&w=1024&h=630&crop=1"
                                                alt="Slide 3" />
                                        </div>

                                        <!-- Add more divs with images for additional slides -->
                                    </div>
                                </div>
                                <!-- Form -->
                                <div>
                                    <h3 class="fw-bold text-center pt-2" style="color: #1c344f; margin-bottom: 2rem">
                                        Query
                                    </h3>
                                    <div class="pt-4 px-5">
                                        <form action="" method="post">
                                            <div class="row">
                                                <div class="col mb-2">
                                                    <div>
                                                        <small for="client_name">Name
                                                            <span class="text-danger">*</span></small>
                                                        <input type="text" name="client_name" required
                                                            class="form-control form-control-sm" id="" />
                                                    </div>
                                                </div>
                                                <div class="col mb-2">
                                                    <div>
                                                        <small for="client_email">Email
                                                            <span class="text-danger">*</span></small>
                                                        <input type="text" name="client_email" required
                                                            class="form-control form-control-sm" id="" />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col mb-2">
                                                    <div>
                                                        <small for="client_name">Phone</small>
                                                        <input type="text" name="client_phone"
                                                            class="form-control form-control-sm" id="" />
                                                    </div>
                                                </div>
                                                <div class="col mb-2">
                                                    <div>
                                                        <small for="headline">Headline</small>
                                                        <input type="text" name="headline"
                                                            class="form-control form-control-sm" id="" />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col mb-2">
                                                    <div>
                                                        <small for="client_message">Message</small>
                                                        <br />
                                                        <textarea name="client_message" id="" class="form-control" rows="3"></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row" style="margin-bottom: 2.5rem">
                                                <div class="col mb-2 text-center">
                                                    <button type="submit" class="btn btn-sm mt-2 px-4 rounded-pill"
                                                        style="
                                      background-color: #1c344f;
                                      color: #fff;
                                    ">
                                                        Submit
                                                    </button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <div class="row mx-auto mobile-d-none">
                                    <div class="col mb-2 text-center">
                                        <button type="submit" class="btn btn-sm mt-2 p-2 w-100 nfc_contact_btn"
                                            style="background-color: #1c344f; color: #fff">
                                            <i class="fas fa-contact pe-1 fa-address-book"></i>
                                            Connect The Profile
                                        </button>
                                    </div>
                                </div>
                                <div class="row w-sm-100 w-lg-25 d-sm-block d-lg-none mx-auto">
                                    <div class="col mb-2 text-center">
                                        <button type="submit" class="btn btn-sm mt- p-2 w-100 nfc_contact_btn"
                                            style="background-color: #1c344f; color: #fff">
                                            <i class="fas fa-contact pe-1 fa-address-book"></i>
                                            Connect The Profile
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


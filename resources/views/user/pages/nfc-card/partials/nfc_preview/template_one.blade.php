<style>
    .slick-next:before,
    .slick-prev:before {
        color: #1c344f;
    }

    .slick-next:before,
    .slick-prev:before {
        left: 22px;
    }

    .nfc-mobile-frame_one {
        max-width: 420px;
        height: 768px !important;
        /* min-height: 100vh; */
        /* border: 2px solid #1026bf; */
        border-radius: 20px;
        overflow: hidden;
        position: relative;
    }

    /* CSS for the card inside the mobile frame */
    .nfc-mobile-frame_one .card {
        background-color: var(--white);
        width: 100%;
        height: 100%;
        border-radius: 20px;
        overflow-y: auto;
    }

    .nfc-mobile-frame_one .card title {
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

    .slick-initialized .slick-slide {
        display: flex;
        justify-content: center;
        align-items: center;
        margin: auto;
    }

    /* Media query for smaller screens */
    @media only screen and (max-width: 767px) {
        .nfc-mobile-frame_one {
            max-width: 390px;
            width: 100%;
        }

        .nfc-mobile-frame_one .card {
            border-radius: 0px !important;
        }

        .contact-info_one {
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
            <div class="nfc-mobile-frame_five shadow-sm">
                <div class="card p-0 border-0 shadow-none tem-one-scroll">
                    <div class="p-0 border-0">
                        <div class="nfc-one-cover-img-box">
                            <div class="nfc-one-cover-img">
                                <img class="nfc-one-cover-img banner_image"
                                    src="https://images.rawpixel.com/image_800/cHJpdmF0ZS9sci9pbWFnZXMvd2Vic2l0ZS8yMDIzLTA4L3Jhd3BpeGVsX29mZmljZV8xOV9waG90b19vZl9hX2FzaWFuX2J1c2luZXNzbWFuX2lzb2xhdGVkX29uX2Ffd18yNjRjN2Y5ZS03ZDBiLTQ2ODgtYjkzOS01MjM3ZDExNGYxNDVfMS5qcGc.jpg"
                                    alt="">
                            </div>
                            {{-- <div class="nfc-one-cover-img banner_image"
                                style="background-image: url();">
                            </div> --}}
                        </div>
                    </div>
                    <div class="card-body p-0 tem-one-about-content">
                        <div class="d-flex">
                            <div class="tem-one-profile">
                                <div class="p-3">
                                    <div>
                                        <h1 class="tem-one-name"><span class="first_name  fs-1">Robert</span>&nbsp;<span
                                                class="last_name fs-1">Bruno</span> </h1>
                                        <h4 class="tem-one-designation designation">
                                            Frontend Developer
                                        </h4>
                                    </div>
                                    <!-- contact -->
                                    <div>
                                        <small class="tem-one-address address_line_one">Ulica Zvonka Brkića
                                            58</small>
                                        <br />
                                        <small class="tem-one-address address_line_two">Rab, Croatia</small>
                                        <br />
                                        <small class="tem-one-address phone_personal">+385 91 561 0409(Work)</small>
                                        <br>
                                        <small class="tem-one-address phone_work">+385 91 561 0409(Personal)</small>
                                        <div class="tem-one-social-icons mt-3">
                                            <a href="#" class="fa fa-facebook facebook_url"></a>
                                            <a href="#" class="fa fa-instagram instagram_url"></a>
                                            <a href="#" class="fa fa-youtube youtube_url"></a>
                                            <a href="#" class="fa fa-google google_plus_url"></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex justify-content-center tem-one-profile-image">
                                <div class="tem-one-profile-img text-center">
                                    <img class="profile_image"
                                        src="https://images.rawpixel.com/image_800/cHJpdmF0ZS9sci9pbWFnZXMvd2Vic2l0ZS8yMDIzLTA4L3Jhd3BpeGVsX29mZmljZV8xOV9waG90b19vZl9hX2FzaWFuX2J1c2luZXNzbWFuX2lzb2xhdGVkX29uX2Ffd18yNjRjN2Y5ZS03ZDBiLTQ2ODgtYjkzOS01MjM3ZDExNGYxNDVfMS5qcGc.jpg"
                                        alt="" />
                                </div>
                            </div>
                        </div>
                        <!-- BIo -->
                        <div class="tem-one-bio-box px-3 pt-4">
                            <h6 class="tem-one-bio-title bio_title">BIO</h6>
                            <p class="bio_description">
                                Book enthusiast, nature lover, avid learner, coffee
                                addict, aspiring writer, music aficionado, travel
                                enthusiast, optimistic dreamer.
                            </p>
                        </div>
                        <!-- Service -->
                        <div class="tem-one-service-box px-3 py-4">
                            <h6 class="tem-one-service-title service_section_title">Service</h6>
                            <p class="service_section_description">
                                Professional, reliable service provider committed to
                                exceeding expectations with quality, efficiency, and
                                personalized care for every client's needs.
                            </p>
                            <div class="slick-slider">
                                <div>
                                    <img class="img-fluid service_one_image"
                                        src="https://www.awardstrophyworld.com/cdn/shop/files/TrophySlider-MOBILE.jpg?v=1691869489&width=1278"
                                        alt="Slide 1" />
                                </div>
                                <div>
                                    <img class="img-fluid service_two_image"
                                        style="background-size: cover;width: 100%;height: 300px;object-fit: cover;"
                                        src="https://img.asmedia.epimg.net/resizer/v2/KQHEREZJPZFUNRC3WQYWA3QBXI.jpg?auth=a869899f0991310a88875490e300e1de99703103383da19f43218303861bcb70&width=1200&height=1200&smart=true"
                                        alt="Slide 2" />
                                </div>
                                <div>
                                    <img class="img-fluid service_three_image"
                                        style="background-size: cover;width: 100%;height: 300px;object-fit: cover;"
                                        src="https://metro.co.uk/wp-content/uploads/2022/12/GettyImages-1450072343.jpg?quality=90&strip=all&w=1024&h=630&crop=1"
                                        alt="Slide 3" />
                                </div>
                                <!-- Add more divs with images for additional slides -->
                            </div>
                        </div>
                        <!-- Service -->
                        <div class="tem-one-bio-box px-3 pt-4">
                            <h6 class="tem-one-bio-title company_title">Company</h6>
                            <div class="d-flex">
                                <div class="tem-one-about-first">
                                    <p class="fw-bold mb-0 company_name">Company LTD</p>
                                    <p class="mb-0">
                                        <span class="company_address_line_one">257/A, San-fca</span>
                                        <br />
                                        <span class="company_address_line_two">Calefornia,USA</span>
                                    </p>
                                    <p class="company_phone mb-0">+03 58685125</p>
                                    <p class="company_email">ngenitltd@gmail.com</p>
                                </div>
                                <div class="tem-one-about-secontd">
                                    <p class="fw-bold mb-0 company_about_title">About</p>
                                    <p class="company_about_description">
                                        Passionate team dedicated to excellence, creativity,
                                        and customer satisfaction.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <!-- Service -->
                        <div class="tem-one-service-box px-3 py-4">
                            <h6 class="tem-one-service-title">Contact</h6>
                            <p class="mb-0 email_work">
                                szamanBruno@gmail.com
                                <small class="fw-bold">(Work)</small>
                            </p>
                            <p class="mb-0 phone_personal">
                                 +385 91 561 0409
                                <small class="fw-bold">(Personal)</small>
                            </p>
                            <div class="pt-2">
                                <form action="" method="post">
                                    <div class="row">
                                        <div class="col mb-2">
                                            <div>
                                                <label for="client_name">Name
                                                    <span class="text-danger">*</span></label>
                                                <input type="text" name="client_name" required
                                                    class="form-control form-control-sm" id="" />
                                            </div>
                                        </div>
                                        <div class="col mb-2">
                                            <div>
                                                <label for="client_email">Email
                                                    <span class="text-danger">*</span></label>
                                                <input type="text" name="client_email" required
                                                    class="form-control form-control-sm" id="" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col mb-2">
                                            <div>
                                                <label for="client_name">Phone</label>
                                                <input type="text" name="client_phone"
                                                    class="form-control form-control-sm" id="" />
                                            </div>
                                        </div>
                                        <div class="col mb-2">
                                            <div>
                                                <label for="headline">Headline</label>
                                                <input type="text" name="headline"
                                                    class="form-control form-control-sm" id="" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col mb-2">
                                            <div>
                                                <label for="client_message">Message</label>
                                                <br />
                                                <textarea name="client_message" id="" class="form-control" rows="3"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col mb-2 text-end">
                                            <button type="submit" class="btn btn-danger btn-sm mt-2">
                                                Submit
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div>
                                <div class="d-flex justify-content-center pt-5">
                                    <img class="" width="150px"
                                        src="https://cdn.britannica.com/17/155017-050-9AC96FC8/Example-QR-code.jpg"
                                        alt="" />
                                </div>
                            </div>
                            <div class="sticky-bottom mt-5">
                                <a href="#" class="btn-primary btn w-100 nfc_contact_btn">Connect Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

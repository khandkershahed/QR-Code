<x-admin-guest-layout :title="'{{ $nfc_card->nfcData->first_name }} {{ $nfc_card->nfcData->last_name }}'">
    @include('frontend.pages.nfc.style')
    <section>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 d-flex justify-content-center align-items-center px-0">
                    <div class="nfc-mobile-frame-one">
                        <div class="card p-0 border-0 shadow-none tem-one-scroll">
                            <div class="card-header p-0 border-0">
                                <div class="nfc-one-cover-img-box">
                                    <div class="nfc-one-cover-img"
                                        style="
                            background-image: url(https://images.rawpixel.com/image_800/cHJpdmF0ZS9sci9pbWFnZXMvd2Vic2l0ZS8yMDIzLTA4L3Jhd3BpeGVsX29mZmljZV8xOV9waG90b19vZl9hX2FzaWFuX2J1c2luZXNzbWFuX2lzb2xhdGVkX29uX2Ffd18yNjRjN2Y5ZS03ZDBiLTQ2ODgtYjkzOS01MjM3ZDExNGYxNDVfMS5qcGc.jpg);
                          ">
                                    </div>
                                </div>
                            </div>
                            <div class="card-body p-0 tem-one-about-content">
                                <div class="d-flex">
                                    <div class="tem-one-profile">
                                        <div class="p-3">
                                            <div>
                                                <h1 class="tem-one-name">Sazeduzzaman Saju</h1>
                                                <h4 class="tem-one-designation">
                                                    Frontend Developer
                                                </h4>
                                            </div>
                                            <!-- contact -->
                                            <div>
                                                <small class="tem-one-address">Ulica Zvonka Brkića 58 ,</small>
                                                <small class="tem-one-address">Rab</small>
                                                <small class="tem-one-address">Croatia</small>
                                                <br />
                                                <small class="tem-one-address">+385 91 561 0409</small>
                                                <div class="tem-one-social-icons mt-3">
                                                    <a href="#" class="fa fa-facebook"></a>
                                                    <a href="#" class="fa fa-instagram"></a>
                                                    <a href="#" class="fa fa-youtube"></a>
                                                    <a href="#" class="fa fa-google"></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="d-flex justify-content-center tem-one-profile-image">
                                        <div class="tem-one-profile-img text-center">
                                            <img src="https://images.rawpixel.com/image_800/cHJpdmF0ZS9sci9pbWFnZXMvd2Vic2l0ZS8yMDIzLTA4L3Jhd3BpeGVsX29mZmljZV8xOV9waG90b19vZl9hX2FzaWFuX2J1c2luZXNzbWFuX2lzb2xhdGVkX29uX2Ffd18yNjRjN2Y5ZS03ZDBiLTQ2ODgtYjkzOS01MjM3ZDExNGYxNDVfMS5qcGc.jpg"
                                                alt="" />
                                        </div>
                                    </div>
                                </div>
                                <!-- BIo -->
                                <div class="tem-one-bio-box px-3 pt-4">
                                    <h6 class="tem-one-bio-title">BIO</h6>
                                    <p>
                                        Book enthusiast, nature lover, avid learner, coffee
                                        addict, aspiring writer, music aficionado, travel
                                        enthusiast, optimistic dreamer.
                                    </p>
                                </div>
                                <!-- Service -->
                                <div class="tem-one-service-box px-3 py-4">
                                    <h6 class="tem-one-service-title">Service</h6>
                                    <p>
                                        Professional, reliable service provider committed to
                                        exceeding expectations with quality, efficiency, and
                                        personalized care for every client's needs.
                                    </p>
                                    <div class="slick-slider">
                                        <div>
                                            <img class="img-fluid"
                                                style="
                                background-size: cover;
                                width: 100%;
                                height: 300px;
                                object-fit: cover;
                              "
                                                src="https://www.awardstrophyworld.com/cdn/shop/files/TrophySlider-MOBILE.jpg?v=1691869489&width=1278"
                                                alt="Slide 1" />
                                        </div>
                                        <div>
                                            <img class="img-fluid"
                                                style="
                                background-size: cover;
                                width: 100%;
                                height: 300px;
                                object-fit: cover;
                              "
                                                src="https://img.asmedia.epimg.net/resizer/v2/KQHEREZJPZFUNRC3WQYWA3QBXI.jpg?auth=a869899f0991310a88875490e300e1de99703103383da19f43218303861bcb70&width=1200&height=1200&smart=true"
                                                alt="Slide 2" />
                                        </div>
                                        <div>
                                            <img class="img-fluid"
                                                style="
                                background-size: cover;
                                width: 100%;
                                height: 300px;
                                object-fit: cover;
                              "
                                                src="https://metro.co.uk/wp-content/uploads/2022/12/GettyImages-1450072343.jpg?quality=90&strip=all&w=1024&h=630&crop=1"
                                                alt="Slide 3" />
                                        </div>
                                        <!-- Add more divs with images for additional slides -->
                                    </div>
                                </div>
                                <!-- Service -->
                                <div class="tem-one-bio-box px-3 pt-4">
                                    <h6 class="tem-one-bio-title">Company</h6>
                                    <div class="d-flex">
                                        <div class="tem-one-about-first">
                                            <p class="fw-bold mb-0">Ngen It LTD</p>
                                            <p class="mb-0">
                                                <span>257/A, San-fca</span>
                                                <br />
                                                <span>Calefornia,USA</span>
                                            </p>
                                            <p>+03 58685125</p>
                                        </div>
                                        <div class="tem-one-about-secontd">
                                            <p class="fw-bold mb-0">About</p>
                                            <p>
                                                Passionate team dedicated to excellence, creativity,
                                                and customer satisfaction.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <!-- Service -->
                                <div class="tem-one-service-box px-3 py-4">
                                    <h6 class="tem-one-service-title">Contact</h6>
                                    <p class="mb-0">
                                        @: szamansaju@gmail.com
                                        <small class="fw-bold">(Work)</small>
                                    </p>
                                    <p class="mb-0">
                                        p: +385 91 561 0409
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
                                        <button class="btn-primary btn w-100 nfc_contact_btn">
                                            Connect Now
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-admin-guest-layout>

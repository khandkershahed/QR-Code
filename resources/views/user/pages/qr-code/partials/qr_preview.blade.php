<div id="generatedQRCodeContainer">
    <div class="preview">
        {{-- <img id="generatedQRCode" class="img-fluid generatedQRCode" src="https://i.ibb.co/XzHNWc0/no-qr.png" alt="QR Code"> --}}
    </div>
    <div class="card qr-card website" style="display: none;">
        <img src="{{ asset('frontend/assets/images/qrpreview/website.png') }}" alt="website"
            class="img-fluid generatedQRCode">
    </div>
    <div class="card qr-card pdf" style="display: none;">
        <img src="{{ asset('frontend/assets/images/qrpreview/pdf.png') }}" alt="pdf"
            class="img-fluid generatedQRCode">
    </div>
    <div class="card qr-card image" style="display: none;">
        <img src="{{ asset('frontend/assets/images/qrpreview/Image.png') }}" alt="image"
            class="img-fluid generatedQRCode">
    </div>
    <div class="card qr-card sms" style="display: none;">
        <img src="{{ asset('frontend/assets/images/qrpreview/SMS.png') }}" alt="sms"
            class="img-fluid generatedQRCode">
    </div>
    <div class="card qr-card email" style="display: none;">
        <img src="{{ asset('frontend/assets/images/qrpreview/Email.png') }}" alt="email"
            class="img-fluid generatedQRCode">
    </div>
    <div class="card qr-card mobile_app" style="display: none;">
        {{-- <img src="{{ asset('frontend/assets/images/qrpreview/mobile') }}" alt="mobile_app" class="img-fluid generatedQRCode"> --}}
        <img id="generatedQRCode" class="img-fluid generatedQRCode" src="https://i.ibb.co/XzHNWc0/no-qr.png"
            alt="QR Code">
    </div>
    <div class="card qr-card call" style="display: none;">
        <img src="{{ asset('frontend/assets/images/qrpreview/call.png') }}" alt="call"
            class="img-fluid generatedQRCode">
    </div>
    <div class="card qr-card location" style="display: none;">
        <img src="{{ asset('frontend/assets/images/qrpreview/Location.png') }}" alt="location"
            class="img-fluid generatedQRCode">
    </div>
    <div class="card qr-card coupon_code" style="display: none;">
        <img src="{{ asset('frontend/assets/images/qrpreview/coupon.png') }}" alt="coupon_code"
            class="img-fluid generatedQRCode">
    </div>
    <div class="card qr-card social" style="display: none;">
        <img src="{{ asset('frontend/assets/images/qrpreview/Social.png') }}" alt="social"
            class="img-fluid generatedQRCode">
    </div>
    <div class="card qr-card audio" style="display: none;">
        <img src="{{ asset('frontend/assets/images/qrpreview/audio.png') }}" alt="audio"
            class="img-fluid generatedQRCode">
    </div>
    <div class="card qr-card business_page" style="display: none;">
        <img src="{{ asset('frontend/assets/images/qrpreview/BusinessPage.png') }}" alt="business_page"
            class="img-fluid generatedQRCode">
    </div>
</div>

<div id="qrCouponPreview" style="display: none;">
    <div class="preview">
        @include('user.pages.qr-code.preview.qr_coupon_preview')

        <section>
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 d-flex justify-content-center align-items-center px-0">
                        <div class="nfc-mobile-frame qr_card_preview" style="background-color: #ecd42b">
                            <!-- Company Logo -->
                            <div class="p-3">
                                <img width="50px" class="img-fluid qr_data_coupon_logo"
                                    src="https://cdn-icons-png.flaticon.com/512/5038/5038590.png" alt="" />
                            </div>
                            <div class="px-4">
                                <h5 class="qr_data_coupon_company">Ngen It</h5>
                                <h2 class="mb-4 fw-bold qr_data_coupon_header">Big Sale Discount!</h2>
                                <div
                                    style="background-image: url('https://i.ibb.co/7JZgTLv/Untitled-1.png');height: 500px;width: 100%;background-repeat: no-repeat;background-size: contain;">
                                    <div class="">
                                        <div>
                                            <h1 class="text-center p-2 ps-5 text-warning qr_data_coupon_message">
                                                30% off
                                            </h1>
                                            <div class="d-flex">
                                                <div>
                                                    <p class="text-start text-muted mb-0 date qr_data_coupon_expire_date"
                                                        style="padding-left: 80px;font-size: 14px;padding-top: 5px;">
                                                        May 18, 2024
                                                    </p>
                                                    {{-- <p class="text-start text-muted mb-0 day"
                                                        style="padding-left: 90px;font-size: 14px;padding-top: 0px;">
                                                        Saturday
                                                    </p>
                                                    <p class="text-start text-muted mb-0 date"
                                                        style="padding-left: 90px;font-size: 14px;padding-top: 2px;">
                                                        08:00pm
                                                    </p> --}}
                                                </div>
                                                <div>
                                                    <h5 class="text-start text-white mb-0 code-coupon qr_data_coupon_code"
                                                        style="padding-left: 25px;padding-top: 31px;">
                                                        ABCD25686
                                                    </h5>
                                                </div>
                                            </div>
                                            <div>
                                                <h5 class="text-white discount qr_data_coupon_message"
                                                    style="transform: rotate(90deg);position: relative;right: 118px;top: -65px;text-align: center;">
                                                    30% OFF <br />
                                                    {{-- <span class="fs-5"> DISCOUNT</span> --}}
                                                </h5>
                                            </div>
                                        </div>
                                        <div class="">
                                            <img width="50px" class="img-fluid part-logo qr_data_coupon_logo"
                                                style="position: relative;left: 159px;top: 33px;z-index: 5;"
                                                src="https://cdn-icons-png.flaticon.com/512/5038/5038590.png"
                                                alt="" />
                                        </div>
                                        <div
                                            class="d-flex justify-content-between text-center align-items-center company-info">
                                            <h4 class="ps-3 text-white">Arshuk</h4>
                                            <h4 class="pe-3 text-white">adas</h4>
                                        </div>
                                        <h5 class="text-white text-center qr_data_coupon_description_header" style="padding-top: 20px">
                                            Holiday Sesoanal Sale
                                        </h5>
                                    </div>
                                    <div class="pt-10">
                                        <a href="" class="btn btn-sm btn-success w-100 rounded-pill mt-3 fw-bolder py-2 fs-5 qr_data_coupon_website">
                                            View Website
                                        </a>
                                        {{-- <a class="btn btn-sm btn-success w-100 rounded-pill mt-3 fw-bolder py-2 fs-5">
                                            View Map
                                        </a> --}}
                                    </div>
                                    <div>
                                        <p class="pt-5 ps-2 title_color">
                                            <span class="text-danger fw-bold pe-1">Note:</span> <span class="qr_data_coupon_policy">Lorem
                                                ipsum, dolor sit amet consectetur adipisicing elit.
                                                Nobis cum quis dolorem tempore quas officiis</span>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>

<div id="generatedQRCodeContainer">
    <div class="preview">
        {{-- <img id="generatedQRCode" class="img-fluid generatedQRCode" width="350px" src="https://i.ibb.co/XzHNWc0/no-qr.png" alt="QR Code"> --}}
    </div>
    <div class="card qr-card website" style="display: none;">
        <img width="350px" src="{{ asset('frontend/assets/images/qrpreview/website.png') }}" alt="website"
            class="img-fluid generatedQRCode">
    </div>
    <div class="card qr-card pdf" style="display: none;">
        <img width="350px" src="{{ asset('frontend/assets/images/qrpreview/pdf.png') }}" alt="pdf"
            class="img-fluid generatedQRCode">
    </div>
    <div class="card qr-card image" style="display: none;">
        <img width="350px" src="{{ asset('frontend/assets/images/qrpreview/Image.png') }}" alt="image"
            class="img-fluid generatedQRCode">
    </div>
    <div class="card qr-card sms" style="display: none;">
        <img width="350px" src="{{ asset('frontend/assets/images/qrpreview/SMS.png') }}" alt="sms"
            class="img-fluid generatedQRCode">
    </div>
    <div class="card qr-card email" style="display: none;">
        <img width="350px" src="{{ asset('frontend/assets/images/qrpreview/Email.png') }}" alt="email"
            class="img-fluid generatedQRCode">
    </div>
    <div class="card qr-card mobile_app" style="display: none;">
        <img width="350px" src="{{ asset('frontend/assets/images/qrpreview/mobile.png') }}" alt="mobile_app" class="img-fluid generatedQRCode">
    </div>
    <div class="card qr-card call" style="display: none;">
        <img width="350px" src="{{ asset('frontend/assets/images/qrpreview/call.png') }}" alt="call"
            class="img-fluid generatedQRCode">
    </div>
    <div class="card qr-card location" style="display: none;">
        <img width="350px" src="{{ asset('frontend/assets/images/qrpreview/Location.png') }}" alt="location"
            class="img-fluid generatedQRCode">
    </div>
    <div class="card qr-card coupon_code" style="display: none;">
        {{-- <img width="350px" src="{{ asset('frontend/assets/images/qrpreview/coupon.png') }}" alt="coupon_code"
            class="img-fluid generatedQRCode"> --}}
        <div class="preview">
            @include('user.pages.qr-code.preview.qr_coupon_preview')
        </div>
    </div>
    <div class="card qr-card social" style="display: none;">
        {{-- <img width="350px" src="{{ asset('frontend/assets/images/qrpreview/Social.png') }}" alt="social"
            class="img-fluid generatedQRCode"> --}}
        <div class="preview">
            @include('user.pages.qr-code.preview.qr_social_preview')
        </div>
    </div>
    <div class="card qr-card audio" style="display: none;">
        <img width="350px" src="{{ asset('frontend/assets/images/qrpreview/audio.png') }}" alt="audio"
            class="img-fluid generatedQRCode">
    </div>
    <div class="card qr-card business_page" style="display: none;">
        {{-- <img width="350px" src="{{ asset('frontend/assets/images/qrpreview/BusinessPage.png') }}" alt="business_page"
            class="img-fluid generatedQRCode"> --}}
            <div class="preview">
                @include('user.pages.qr-code.preview.qr_business_page_preview')
            </div>
    </div>
    <div class="card qr-card facebook_page" style="display: none;">
        <div class="preview">
            @include('user.pages.qr-code.preview.qr_facebook_page_preview')
        </div>
    </div>
    <div class="card qr-card restaurant" style="display: none;">
        <div class="preview">
            @include('user.pages.qr-code.preview.qr_restaurant_preview')
        </div>
    </div>
</div>

<div id="qrCouponPreview" style="display: none;">
    <div class="preview">
        @include('user.pages.qr-code.preview.qr_coupon_preview')
    </div>
</div>

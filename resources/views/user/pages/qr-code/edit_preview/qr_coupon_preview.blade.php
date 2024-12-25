<style>
    @import url("https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Raleway:ital,wght@0,100..900;1,100..900&display=swap");

    :root {
        --white: #fff;
        --tem-one-name-color: #fff;
        --body-font-family: "Raleway", sans-serif;
        --tem-one-name-font-size: 40px;
        --tem-one-name-font-family: "Bebas Neue", sans-serif;
        --tem-one-designation-font-family: "Raleway", sans-serif;
        --tem-one-designation-color: #fff;
        --tem-one-bio-title-color: #ffa500;
        --tem-profile-image-bg: #ffa500;
        --tem-one-social-icons-color: #fff;
        --tem-one-social-icons-bg: #fff;
        --tem-one-social-icons-font-size: 18px;
        --tem-one-bio-title-font-size: 30px;
        --tem-one-service-title-color: #fff;
        --tem-one-service-title-font-size: 20px;
        --tem-one-service-box-bg: #ffa500;
        --tem-one-address-color: #fff;
    }

    /* Custom CSS for card styling */
</style>

{{--
<div class="card rounded-0 border-0">
    <div class="card-body rounded-0"> --}}
<div class="qr_card_preview">
    <div class="row">
        <div class="col-lg-12 ">
            <!-- First Part -->
            <div class="d-flex justify-content-center qr_data_coupon_logo"
                style="
                  background-image: url('{{ asset('images/d-image/coupon-first-part.png') }}');
                  height: 320px;
                  background-repeat: no-repeat;
                  background-position: center;
                  ">
                <div class="text-center d-flex flex-column justify-content-center align-items-center">
                    <h1 class="qr_data_coupon_header" style="color: #ffff;font-family: var(--tem-one-name-font-family);">
                        30% Discount
                    </h1>
                    <h1 class="fw-bolder text-white"
                        style="font-family: var(--tem-one-name-font-family);font-size: 55px;">
                        <span class="qr_data_coupon_message">Big Sale</span>
                         <span class="qr_data_coupon_description_body" style="color: #fd0834">Discount</span>
                    </h1>
                    <h3 class="qr_data_coupon_company"
                        style="color: #15487f;font-family: var(--tem-one-name-font-family);">
                        GALAXXY MEDIA LLC.
                    </h3>
                </div>
            </div>
            <!-- Second Part -->
            <div class="d-flex justify-content-center"
                style="background-image: url('{{ asset('images/d-image/coupon-first-part.png') }}');height: 320px;margin-top: -25px;background-repeat: no-repeat;background-position: center;">
                <div class="text-center d-flex justify-content-center flex-column align-items-center">
                    <div class="input-group mb-3">
                        <input type="text" class="form-control border-0 text-white rounded-0 qr_data_coupon_code"
                            value="CP248567" aria-label="CP248567" aria-describedby="button-addon2"
                            style="background-color: #15487f" />
                        <button class="btn rounded-0 fs-5"
                            style="background-color: #fff;font-family: var(--tem-one-name-font-family);" type="button"
                            id="button-addon2">
                            Copy
                        </button>
                    </div>
                    <div class="p-3 mx-auto rounded-circle" style="background-color: #eeee; width: 20%">
                        <img width="50px" class="img-fluid qr_data_coupon_logo"
                            src="{{ !empty($site->system_logo_white) && file_exists(public_path('storage/webSetting/systemLogoWhite/' . $site->system_logo_white)) ? asset('storage/webSetting/systemLogoWhite/' . $site->system_logo_white) : asset('frontend/assets/images/logos/logo.png') }}" alt="" />
                    </div>
                    <h1 class="fw-bold mb-0 py-3 qr_data_coupon_description_header"
                        style="color: #fff;font-family: var(--tem-one-name-font-family);">
                        HOLIDAY SEASONAL SALE !
                    </h1>
                    <h4 class="" style="color: #fff;font-family: var(--tem-one-name-font-family);">
                        VALIDITY TILL-
                        <span class="qr_data_coupon_expire_date" style="color: #fd0834">MAY 15, 2024</span>
                    </h4>
                </div>
            </div>
        </div>
    </div>
    <div class="pt-4 px-0 px-lg-5">
        <p class="mb-0" style="text-align: justify">
            <span class="text-danger fw-bolder">NB: Terms & Condition</span>
            <span class="qr_data_coupon_policy">Lorem ipsum dolor sit amet consectetur adipisicing elit. In
                eum ea laudantium incidunt corrupti et alias laborum
                impedit, veritatis maiores incidunt corrupti.</span>
        </p>
    </div>
    <div class="mx-auto px-0 px-lg-5">
        <a href="#" class="btn w-100 mt-4 fs-4 qr_data_coupon_website"
            style="background-color: #ffa500;color: #fff;font-family: var(--tem-one-name-font-family);">VISIT
            WEBSITE</a>
    </div>
</div>
{{-- </div>
</div> --}}

@push('scripts')
    <script>
        $(document).ready(function() {
            // Attach click event handler to the button
            $("#button-addon2").click(function() {
                // Get the value of the input field
                var inputValue = $(".qr_data_coupon_code").val();

                // Copy the value to clipboard
                navigator.clipboard.writeText(inputValue).then(
                    function() {
                        // Show success message
                        alert("Coupon copied: " + inputValue);
                    },
                    function(err) {
                        // Handle errors
                        console.error("Error copying text: ", err);
                    }
                );
            });
        });
    </script>
@endpush

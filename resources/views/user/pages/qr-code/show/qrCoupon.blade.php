{{-- <x-admin-guest-layout :title="$qr->code"> --}}
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>{{ $qr->code }}</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" />
    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Raleway:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet" />
    <!-- Custom CSS -->
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
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            padding: 0;
            font-family: var(--body-font-family);
        }

        .card {
            /* background-color: yellow; */
            border: 1px solid #ccc;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transition: box-shadow 0.3s ease;
            height: 100vh !important;
        }

        .nfc-frame {
            width: 576px;
        }

        /* Set placeholder color to white */
        .form-control {
            color: white !important;
            border: 0;
            font-family: var(--body-font-family) !important;
        }

        /* Full width and height on mobile */
        @media (max-width: 576px) {
            .card {
                width: 100%;
                box-shadow: none;
            }
        }
    </style>
</head>

<body>
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-lg-12 ">
                <!-- First Part -->
                <div class="d-flex justify-content-center qr_data_coupon_logo"
                    style="
                      background-image: url(https://i.ibb.co/wJKbkb9/coupon-first.png);
                      height: 320px;
                      background-repeat: no-repeat;
                      background-position: center;
                      ">
                    <div class="text-center d-flex flex-column justify-content-center align-items-center">
                        <h1 class="qr_data_coupon_header"
                            style="color: #ffff;font-family: var(--tem-one-name-font-family);">
                            {{ $qr->qrData->qr_data_coupon_header }}
                        </h1>
                        <h1 class="fw-bolder text-white"
                            style="font-family: var(--tem-one-name-font-family);font-size: 55px;">
                            <span class="qr_data_coupon_message">{{ $qr->qrData->qr_data_coupon_message }}</span>
                            <span class="qr_data_coupon_description_body" style="color: #fd0834">
                                {{ $qr->qrData->qr_data_coupon_description_body }}</span>
                        </h1>
                        <h3 class="qr_data_coupon_company"
                            style="color: #15487f;font-family: var(--tem-one-name-font-family);">
                            {{ $qr->qrData->qr_data_coupon_company }}
                        </h3>
                    </div>
                </div>
                <!-- Second Part -->
                <div class="d-flex justify-content-center"
                    style="background-image: url(https://i.ibb.co/p4zLfcR/coupon-last.png);height: 320px;margin-top: -25px;background-repeat: no-repeat;background-position: center;">
                    <div class="text-center d-flex justify-content-center flex-column align-items-center">
                        <div class="input-group mb-3">
                            <input type="text" class="form-control border-0 text-white rounded-0 qr_data_coupon_code"
                                value="{{ $qr->qrData->qr_data_coupon_code }}"
                                aria-label="{{ $qr->qrData->qr_data_coupon_code }}" aria-describedby="button-addon2"
                                style="background-color: #15487f" />
                            <button class="btn rounded-0 fs-5"
                                style="background-color: #fff;font-family: var(--tem-one-name-font-family);"
                                type="button" id="button-addon2">
                                Copy
                            </button>
                        </div>
                        <div class="p-3 mx-auto rounded-circle" style="background-color: #eeee; width: 20%">
                            <img width="50px" class="img-fluid qr_data_coupon_logo"
                                src="{{ asset('storage/qr_codes/coupons/' . $qr->qrData->qr_data_coupon_logo) }}"
                                alt="" />
                        </div>
                        <h1 class="fw-bold mb-0 py-3 qr_data_coupon_description_header"
                            style="color: #fff;font-family: var(--tem-one-name-font-family);">
                            {{ $qr->qrData->qr_data_coupon_description_header }}
                        </h1>
                        <h4 class="" style="color: #fff;font-family: var(--tem-one-name-font-family);">
                            VALIDITY TILL-
                            <span class="qr_data_coupon_expire_date"
                                style="color: #fd0834">{{ $qr->qrData->qr_data_coupon_expire_date }}</span>
                        </h4>
                    </div>
                </div>
            </div>
        </div>
        <div class="pt-4 px-0 px-lg-5">
            <p class="mb-0" style="text-align: justify">
                <span class="text-danger fw-bolder">NB: Terms & Condition</span>
                <span class="qr_data_coupon_policy">{{ $qr->qrData->qr_data_coupon_policy }}</span>
            </p>
        </div>
        <div class="mx-auto px-0 px-lg-5">
            <a href="{{ $qr->qrData->qr_data_coupon_website }}" class="btn w-100 mt-4 fs-4 qr_data_coupon_website"
                style="background-color: #ffa500;color: #fff;font-family: var(--tem-one-name-font-family);">VISIT
                WEBSITE</a>
        </div>
    </div>

    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/4cba8ce13c.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            // Attach click event handler to the button
            $("#button-addon2").click(function() {
                // Get the value of the input field
                var inputValue = $(".form-control").val();

                // Copy the value to clipboard
                navigator.clipboard.writeText(inputValue).then(
                    function() {
                        // Show success message
                        alert("Link copied: " + inputValue);
                    },
                    function(err) {
                        // Handle errors
                        console.error("Error copying text: ", err);
                    }
                );
            });
        });
    </script>
</body>

</html>

<x-admin-guest-layout :title="$qr->code">
    <link rel="shortcut icon"
        href="https://images.rawpixel.com/image_800/cHJpdmF0ZS9s…03ZDBiLTQ2ODgtYjkzOS01MjM3ZDExNGYxNDVfMS5qcGc.jpg"
        type="image/x-icon" />

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
    <!-- Slick CSS -->
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css" />
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css" />
    <!-- Style Here -->

    <style>
        @import url("https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Raleway:ital,wght@0,100..900;1,100..900&display=swap");

        :root {
            --white: #fff;
            --body-font-family: "Raleway", sans-serif;
            --background-color: {{ $qr->qrData->qr_data_coupon_background_color }};
            --title-color: {{ $qr->qrData->qr_data_coupon_title_color }};
            --button-bg-color: {{ $qr->qrData->qr_data_coupon_button_bg_color }};
            --button-title-color: {{ $qr->qrData->qr_data_coupon_button_title_color }};
        }

        /* CSS for centering the mobile frame */
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            padding: 0;
            font-family: var(--body-font-family);
        }

        .nfc-mobile-frame {

            width: 430px;
            height: 100vh;
            border: 2px solid var(--background-color);
            border-radius: 20px;
            overflow: hidden;
            position: relative;
            /* background-color: #FFA500; */
        }

        /* Media query for smaller screens */
        @media only screen and (max-width: 450px) {
            .nfc-mobile-frame {
                width: 100%;
                border-radius: 0px;
                height: 100vh;
                /* Let height adjust based on content */
            }

            .discount {
                transform: rotate(90deg);
                position: relative;
                right: 121px !important;
                top: -80px !important;
                text-align: center;
            }

            .date {
                padding-left: 62px !important;
                font-size: 14px;
                padding-top: 5px;
            }

            .day {
                padding-left: 63px !important;
            }

            .code-coupon {
                padding-left: 40px !important;
                padding-top: 20px !important;
            }

            .part-logo {
                position: relative;
                left: 129px !important;
                top: 7px !important;
                z-index: 5;
            }

            .company-info {
                margin-top: -30px;
            }
        }
    </style>
    <section>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 d-flex justify-content-center align-items-center px-0">
                    <div class="nfc-mobile-frame" style="background-color: var(--background-color);">
                        <!-- Company Logo -->
                        <div class="p-3">
                            <img width="50px" class="img-fluid"
                                src="{{asset('storage/qr_codes/coupons/' . $qr->qrData->qr_data_coupon_logo) }}" alt="" />
                        </div>
                        <div class="px-4">
                            <h5 class="" style="color:var(--title-color);">{{ $qr->qrData->qr_data_coupon_company }}</h5>
                            <h2 class="mb-4 fw-bold" style="color:var(--title-color);">{{ $qr->qrData->qr_data_coupon_header }}</h2>
                            <div
                                style="background-image: url('https://i.ibb.co/7JZgTLv/Untitled-1.png');height: 500px;width: 100%;background-repeat: no-repeat;background-size: contain;">
                                <div class="row pb-10">
                                    <div>
                                        <h1 class="text-center p-2 ps-5 text-warning">
                                            {{ $qr->qrData->qr_data_coupon_message }}
                                        </h1>
                                        <div class="d-flex">
                                            <div>
                                                <p class="text-start text-muted mb-0 date"
                                                    style="padding-left: 98px;font-size: 14px;padding-top: 5px;">
                                                    {{ $qr->qrData->qr_data_coupon_expire_date }}
                                                </p>

                                            </div>
                                            <div onclick="copycode()">
                                                <h5 class="text-start text-white mb-0 code-coupon" id="couponCode"
                                                    style="padding-left: 50px; padding-top: 22px">
                                                    {{ $qr->qrData->qr_data_coupon_code }}
                                                </h5>
                                            </div>
                                        </div>
                                        <div>
                                            <h5 class="text-white discount"
                                                style="transform: rotate(90deg);position: relative;right: 145px;top: -80px;text-align: center;">
                                                {{ $qr->qrData->qr_data_coupon_message }} <br />
                                                {{-- <span class="fs-5"> DISCOUNT</span> --}}
                                            </h5>
                                        </div>
                                    </div>
                                    <div class="">
                                        <img width="50px" class="img-fluid part-logo"
                                            style="position: relative;left: 159px;top: 33px;z-index: 5;"
                                            src="{{asset('storage/qr_codes/coupons/' . $qr->qrData->qr_data_coupon_logo) }}"
                                            alt="" />
                                    </div>
                                    <div
                                        class="d-flex justify-content-between text-center align-items-center company-info">
                                        <h4 class="ps-3 text-white">Arshuk</h4>
                                        <h4 class="pe-3 text-white">adas</h4>
                                    </div>
                                    <h5 class="text-white text-center" style="padding-top: 20px">
                                        {{$qr->qrData->qr_data_coupon_description_header}}
                                    </h5>
                                </div>
                                <div class="row pt-10 mt-5">
                                    <a href="{{ $qr->qrData->qr_data_coupon_website }}" target="_blank"
                                        class="btn btn-sm btn-success w-100 rounded-pill mt-3 fw-bolder py-2 fs-5" style="background-color: var(--button-bg-color); color:var(--button-title-color);">
                                        View Website
                                    </a>
                                    {{-- <a class="btn btn-sm btn-success w-100 rounded-pill mt-3 fw-bolder py-2 fs-5">
                                        View Map
                                    </a> --}}
                                </div>
                                <div>
                                    <p class="pt-5 ps-2" style="color:var(--title-color);">
                                        <span
                                            class="text-danger fw-bold pe-1">Note:</span>{{ $qr->qrData->qr_data_coupon_policy }}
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @push('script')
        <script>
            let text = document.getElementById('couponCode').innerHTML;
            const copyContent = async () => {
                try {
                    await navigator.clipboard.writeText(text);
                    alert('Content copied to clipboard');
                } catch (err) {
                    console.error('Failed to copy: ', err);
                }
            }
        </script>
    @endpush
</x-admin-guest-layout>

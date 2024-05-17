<x-app-layout :title="'QR Code Generate'">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-9">
                <div class="card mt-10">
                    <div class="card-body">
                        <div class="stepper stepper-pills p-0" id="generateQRCode">
                            <div class="stepper-nav flex-center flex-wrap mb-10 fv-row">
                                <div class="stepper-item mx-2 my-4 current" data-kt-stepper-element="nav"
                                    data-kt-stepper-action="step">
                                    <div class="stepper-line w-40px"></div>

                                    <div class="stepper-icon w-40px h-40px">
                                        <i class="stepper-check fas fa-check"></i>
                                        <span class="stepper-number">1</span>
                                    </div>

                                    <div class="stepper-label">
                                        <h3 class="stepper-title">
                                            Select Type
                                        </h3>
                                    </div>
                                </div>

                                <div class="stepper-item mx-2 my-4" data-kt-stepper-element="nav"
                                    data-kt-stepper-action="step">
                                    <div class="stepper-line w-40px"></div>

                                    <div class="stepper-icon w-40px h-40px">
                                        <i class="stepper-check fas fa-check"></i>
                                        <span class="stepper-number">2</span>
                                    </div>

                                    <div class="stepper-label">
                                        <h3 class="stepper-title">
                                            Input Data
                                        </h3>
                                    </div>
                                </div>

                                <div class="stepper-item mx-2 my-4" data-kt-stepper-element="nav"
                                    data-kt-stepper-action="step">
                                    <div class="stepper-line w-40px"></div>

                                    <div class="stepper-icon w-40px h-40px">
                                        <i class="stepper-check fas fa-check"></i>
                                        <span class="stepper-number">3</span>
                                    </div>

                                    <div class="stepper-label">
                                        <h3 class="stepper-title">
                                            Customize
                                        </h3>
                                    </div>
                                </div>

                                <div class="stepper-item mx-2 my-4" data-kt-stepper-element="nav"
                                    data-kt-stepper-action="step">
                                    <div class="stepper-line w-40px"></div>

                                    <div class="stepper-icon w-40px h-40px">
                                        <i class="stepper-check fas fa-check"></i>
                                        <span class="stepper-number">4</span>
                                    </div>

                                    <div class="stepper-label">
                                        <h3 class="stepper-title">
                                            Done
                                        </h3>
                                    </div>
                                </div>
                            </div>

                            <form class="form w-100 mx-auto fv-row" novalidate="novalidate" id="generateQRCodeForm"
                                action="{{ route('user.qr-code.store') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="mb-5">
                                    <div class="flex-column current" data-kt-stepper-element="content">
                                        <div class="card">
                                            <div class="row">
                                                <h2 class="text-center mb-0">Create a Dynamic QR Code</h2>
                                                <p class="text-center mb-0">Modify content as needed, even after going
                                                    live.</p>
                                            </div>
                                            <div class="card-body">
                                                @include('user.pages.qr-code.partials.qr_type')
                                            </div>
                                        </div>
                                    </div>

                                    <div class="flex-column" data-kt-stepper-element="content">
                                        <div class="card">
                                            <div class="card-body">
                                                @include('user.pages.qr-code.partials.form')
                                            </div>
                                        </div>
                                    </div>

                                    <div class="flex-column" data-kt-stepper-element="content">
                                        <div class="card">
                                            <div class="row text-center justify-content-center">
                                                <h2 class="text-center mb-0">Choose QR Code Design!</h2>
                                            </div>
                                            <div class="card-body">
                                                @include('user.pages.qr-code.partials.customize')
                                            </div>
                                        </div>
                                    </div>

                                    <div class="flex-column" data-kt-stepper-element="content">
                                        <div class="card">
                                            <div class="pt-5 ps-5">
                                                <h2 class="text-center">Congratulations!</h2>
                                                <p class="text-center">Some Information Need To
                                                    Ready The QR</p>
                                                {{-- <p>Still want to make changes?
                                                    <a href="#">Modify your QR code</a>
                                                </p> --}}
                                            </div>
                                            <div class="card-body px-0">
                                                <div class="row">
                                                    <div class="col-lg-6">
                                                        <div class="pt-5 pb-5">
                                                            <x-metronic.label for="qr_name"
                                                                class="form-label">{{ __('Enter a name for your QR code') }}</x-metronic.label>
                                                            <x-metronic.input id="qr_name" type="text"
                                                                name="qr_name" :value="old('qr_name')"
                                                                placeholder="Enter a name for your QR code" required />
                                                        </div>
                                                    </div>
                                                    <input type="hidden" name="qr_scan_status" value="dynamic">
                                                    {{-- <div class="col-lg-6">
                                                        <div class="pt-5 pb-5">
                                                            <x-metronic.label for="status"
                                                                class="form-label">{{ __('Enter a name for your QR code') }}
                                                                <span class="text-danger">*</span></x-metronic.label>
                                                            <select class="form-select" data-control="select2"
                                                                name="qr_scan_status"
                                                                data-placeholder="Select an option" required>
                                                                <option>Select Status</option>
                                                                <option value="static">Static</option>
                                                                <option value="dynamic">Dynamic</option>
                                                            </select>
                                                        </div>
                                                    </div> --}}
                                                </div>
                                                {{-- <div class="w-25 mx-auto">
                                                    <img width="300px"
                                                        src="https://assets-v2.lottiefiles.com/a/1abcc0d6-1163-11ee-9072-a343231e70f1/HGdrITc8PY.gif"
                                                        alt="">
                                                </div> --}}
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="d-flex flex-stack">
                                    <div class="me-2">
                                        <button type="button" class="btn btn-light btn-active-light-primary"
                                            data-kt-stepper-action="previous">
                                            Back
                                        </button>
                                    </div>

                                    <div>

                                        <button type="submit" id="generateButton" data-kt-stepper-action="submit"
                                            class="btn btn-primary">{{ __('Generate') }}</button>

                                        <button type="button" class="btn btn-primary" data-kt-stepper-action="next">
                                            Continue
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="card mt-10 bg-transparent shadow-sm ">
                    {{-- position-fixed --}}
                    <div class="card-body bg-transparent ">
                        <div class="d-flex flex-column justify-content-center align-items-center">
                            {{-- id="generatedQRCodeContainer" --}}
                            <h3>Preview</h3>
                            @include('user.pages.qr-code.partials.qr_preview')
                            {{-- {!! QrCode::size(220)->eye('left-leaf', 0.1)->eyeColor(0, 255, 255, 255, 0, 0, 0)->eyeColor(1, 222, 18, 222, 222, 18, 222)->eyeColor(2, 222, 18, 222, 222, 18, 222)->style('dot', 0.8)->errorCorrection('H')->generate('Make me into a QrCode!') !!} --}}
                        </div>
                        <a id="downloadLink" href="javascripti:void()" download
                            class="btn btn-light btn-primary w-100" style="display: none;">Download</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @push('scripts')
        <script>
            $(document).ready(function() {
                $('input[name="qr_type"]').change(function() {
                    $(".qr-card").hide();
                    const qrTemplateValue = $('input[name="qr_type"]:checked').val();
                    if (qrTemplateValue != null) {
                        $("." + qrTemplateValue).show();
                    } else {
                        $(".qr-card").hide();
                    }
                    if (qrTemplateValue == 'coupon_code') {
                        $("#generatedQRCodeContainer").hide();
                        $("#qrCouponPreview").show();
                    } else {
                        $("#generatedQRCodeContainer").show();
                        $("#qrCouponPreview").hide();
                    }
                });

                const initiallySelectedValue = $('input[name="qr_type"]:checked').val();
                $("." + initiallySelectedValue).show();
            });
        </script>


        <script>
            $('input[name="qr_data_facebook_page_logo"],input[name="qr_data_facebook_page_header"],input[name="qr_data_facebook_page_title"],input[name="qr_data_facebook_page_background_image"],input[name="qr_data_facebook_page_facebook"],input[name="qr_data_coupon_code"], input[name="qr_data_coupon_expire_date"], input[name="qr_data_coupon_header"], input[name="qr_data_coupon_message"], input[name="qr_data_coupon_description_header"], input[name="qr_data_coupon_description_body"], input[name="qr_data_coupon_website"], input[name="qr_data_coupon_company"], input[name="qr_data_coupon_policy"], input[name="qr_data_coupon_logo"]')
                .on('keyup change', function() {

                    var inputValue = $(this).val();
                    var inputName = $(this).attr('name');

                    // Update corresponding NFC card element
                    var qrCodeElement = $('.qr_card_preview .' + inputName);
                    if (qrCodeElement.length > 0) {
                        if ($(this).is('input[type="file"]')) {
                            if ($(this).prop('files') && $(this).prop('files')[0]) {
                                var file = $(this).prop('files')[0];
                                var reader = new FileReader();
                                reader.onload = function(e) {
                                    qrCodeElement.attr('src', e.target.result);
                                };
                                reader.readAsDataURL(file);
                            }
                        } else if ($(this).is('input[type="url"]')) {
                            qrCodeElement.attr('href', inputValue);
                        } else if ($(this).is('input[name="qr_data_coupon_code"]')) {
                            qrCodeElement.val(inputValue);
                        } else if ($(this).is('input[type="date"]')) {
                            var dateParts = inputValue.split('-');
                            if (dateParts.length === 3) {
                                var dateParts = inputValue.split('-');
                                if (dateParts.length === 3) {
                                    var year = dateParts[0];
                                    var month = dateParts[1];
                                    var day = dateParts[2];
                                    var months = ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August',
                                        'September', 'October', 'November', 'December'
                                    ];
                                    var monthName = months[parseInt(month) - 1];
                                    var formattedDate = monthName + ' ' + parseInt(day) + ', ' + year;
                                    qrCodeElement.text(formattedDate);
                                }
                            }
                        } else {
                            qrCodeElement.text(inputValue);
                        }
                    }

                    // For debugging
                    console.log("Input Name:", inputName, "Input Value:", inputValue);
                });

            $('input[name="qr_data_social_logo"],input[name="qr_data_social_header"],input[name="qr_data_social_title"],input[name="qr_data_social_message"],input[name="qr_data_social_background_image"],input[name="qr_data_social_facebook"],input[name="qr_data_social_instagram"],input[name="qr_data_social_linkedin"],input[name="qr_data_social_twitter"],input[name="qr_data_social_youtube"],input[name="qr_data_social_pinterest"],input[name="qr_data_social_website"],input[name="qr_data_social_whatsapp"],input[name="qr_data_social_snapchat"],input[name="qr_data_social_tiktok"]')
                .on('keyup change', function() {
                    var inputValue = $(this).val();
                    var inputName = $(this).attr('name');
                    var qrCodeElement = $('.qr_card_preview .' + inputName);

                    if (qrCodeElement.length > 0) {
                        if ($(this).is('input[type="file"]')) {
                            if (this.files && this.files[0]) {
                                var reader = new FileReader();
                                reader.onload = function(e) {
                                    qrCodeElement.attr('src', e.target.result);
                                };
                                reader.readAsDataURL(this.files[0]);
                            }
                        } else if ($(this).is('input[type="url"]')) {
                            qrCodeElement.attr('href', inputValue);
                        } else if ($(this).is('input[type="date"]')) {
                            var dateParts = inputValue.split('-');
                            if (dateParts.length === 3) {
                                var year = dateParts[0];
                                var month = dateParts[1];
                                var day = dateParts[2];
                                var months = ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August',
                                    'September', 'October', 'November', 'December'
                                ];
                                var formattedDate = `${months[parseInt(month) - 1]} ${parseInt(day)}, ${year}`;
                                qrCodeElement.text(formattedDate);
                            }
                        } else {
                            qrCodeElement.text(inputValue);
                        }
                    }

                    // Show/hide corresponding social icon based on input value
                    if (inputValue) {
                        $("." + inputName + "_icon").show();
                    } else {
                        $("." + inputName + "_icon").hide();
                    }
                });
            $('input[name="qr_data_business_page_logo"],input[name="qr_data_business_page_business_name"],input[name="qr_data_business_page_header"],input[name="qr_data_business_page_start_time_monday"],input[name="qr_data_business_page_end_time_monday"],input[name="qr_data_business_page_start_time_tuesday"],input[name="qr_data_business_page_end_time_tuesday"],input[name="qr_data_business_page_start_time_wednesday"],input[name="qr_data_business_page_end_time_wednesday"],input[name="qr_data_business_page_start_time_thursday"],input[name="qr_data_business_page_end_time_thursday"],input[name="qr_data_business_page_start_time_friday"],input[name="qr_data_business_page_end_time_friday"],input[name="qr_data_business_page_start_time_saturday"],input[name="qr_data_business_page_end_time_saturday"],input[name="qr_data_business_page_start_time_sunday"],input[name="qr_data_business_page_end_time_sunday"],input[name="qr_data_business_page_website"],input[name="qr_data_business_page_business_email"],input[name="qr_data_business_page_business_phone"],input[name="qr_data_business_page_business_location"]')
                .on('keyup change', function() {
                    var inputValue = $(this: checked);
                    var inputName = $(this).attr('name');
                    var qrCodeElement = $('.qr_card_preview .' + inputName);

                    if (qrCodeElement.length > 0) {
                        if ($(this).is('input[type="file"]')) {
                            if (this.files && this.files[0]) {
                                var reader = new FileReader();
                                reader.onload = function(e) {
                                    qrCodeElement.attr('src', e.target.result);
                                };
                                reader.readAsDataURL(this.files[0]);
                            }
                        } else if ($(this).is('input[type="url"]')) {
                            qrCodeElement.attr('href', inputValue);
                        } else if ($(this).is('input[type="time"]')) {
                            if (inputValue) {
                                $("." + inputName).show();
                            } else {
                                $("." + inputName).hide();
                            }
                        } else if ($(this).is('input[type="date"]')) {
                            var dateParts = inputValue.split('-');
                            if (dateParts.length === 3) {
                                var year = dateParts[0];
                                var month = dateParts[1];
                                var day = dateParts[2];
                                var months = ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August',
                                    'September', 'October', 'November', 'December'
                                ];
                                var formattedDate = `${months[parseInt(month) - 1]} ${parseInt(day)}, ${year}`;
                                qrCodeElement.text(formattedDate);
                            }
                        } else {
                            qrCodeElement.text(inputValue);
                        }
                    }

                    // Show/hide corresponding social icon based on input value
                    if (inputValue) {
                        $("." + inputName + "_icon").show();
                    } else {
                        $("." + inputName + "_icon").hide();
                    }
                });



            function changecouponBackgroundColor() {
                var selectedBgColor = $('input[name="qr_data_coupon_background_color"]').val();
                $('.nfc-mobile-frame').css('background-color', selectedBgColor);
                $('.qr_data_coupon_message').css('color', selectedBgColor);
            }

            function changecouponTitleColor() {
                var selectedTitleColor = $('input[name="qr_data_coupon_title_color"]').val();
                $('.qr_data_coupon_company, .qr_data_coupon_header, .title_color').css(
                    'color', selectedTitleColor);
            }

            function changecouponwebsiteBgColor() {
                var selectedBgColor = $('input[name="qr_data_coupon_button_bg_color"]').val();
                $('.qr_data_coupon_website').css('background-color', selectedBgColor);
            }

            function changecouponwebsiteTitleColor() {
                var selectedTitleColor = $('input[name="qr_data_coupon_button_title_color"]').val();
                $('.qr_data_coupon_website').css('color', selectedTitleColor);
            }
        </script>





        <script>
            $(document).ready(function() {
                $('#colorPicker').on('input', function() {
                    var selectedColor = $(this).val();
                    $('#colorCodeInput').val(selectedColor);
                });
            });
        </script>
        <script>
            var myDropzone = new Dropzone("#qr_dropzone", {
                url: "https://keenthemes.com/scripts/void.php", // Set the url for your upload script location
                paramName: "file", // The name that will be used to transfer the file
                maxFiles: 1,
                maxFilesize: 2, // MB
                addRemoveLinks: true,
                accept: function(file, done) {
                    if (file.name == "wow.jpg") {
                        done("Naha, you don't.");
                    } else {
                        done();
                    }
                }
            });
        </script>
        <script>
            // Get references to radio buttons and divs
            const normalColorRadio = document.getElementById('solid_color');
            const gradientColorRadio = document.getElementById('gradient_color');
            const normalColorDiv = document.getElementById('normal_color_show');
            const gradientColorDiv = document.getElementById('gradient_color_show');

            // Add event listeners to radio buttons
            normalColorRadio.addEventListener('change', function() {
                // Show normal color div and hide gradient color div
                normalColorDiv.style.display = 'block';
                gradientColorDiv.style.display = 'none';
            });

            gradientColorRadio.addEventListener('change', function() {
                // Show gradient color div and hide normal color div
                normalColorDiv.style.display = 'none';
                gradientColorDiv.style.display = 'block';
            });
        </script>
        <script>
            const colorRadio = document.getElementById('background_color');
            const transparentRadio = document.getElementById('background_transparent');
            const colorContent = document.getElementById('color-content');
            const transparentContent = document.getElementById('transparent-content');

            colorRadio.addEventListener('change', function() {
                colorContent.style.display = 'block';
                transparentContent.style.display = 'none';
            });

            transparentRadio.addEventListener('change', function() {
                colorContent.style.display = 'none';
                transparentContent.style.display = 'block';
            });
        </script>

        {{-- For Valitdation --}}

        {{-- For Valitdation End --}}
        {{-- <script>
            $(document).ready(function() {
                $('#generateQRCodeForm').on('submit', function(e) {
                    e.preventDefault(); // Prevent default form submission behavior
                    // $('#generateButton').hide();
                    var formData = new FormData(this);

                    $.ajax({
                        url: '{{ route('user.qr-code.store') }}',
                        type: 'POST',
                        data: formData,
                        processData: false,
                        contentType: false,
                        success: function(response) {
                            if (response.qrCodePath) {
                                $('#generatedQRCode').attr('src', '');
                                $('#generatedQRCode').attr('src', response.qrCodePath);
                                $('#downloadLink').attr('href', response.qrCodePath).show();
                                $('#generatedQRCodeContainer').clear();
                                $('#generatedQRCodeContainer').show();
                                $('#generateButton').show();
                            } else {
                                console.error('QR code path not found in the response.');
                            }
                        },
                        error: function(xhr, status, error) {
                            console.error(xhr.responseText);
                        }
                    });
                });
            });
        </script> --}}
        <script>
            // $(document).ready(function() { 2
            // $('#generateQRCodeForm input:not([name="qr_type"]), #generateQRCodeForm input:not([name="qr_data_coupon_code"]),#generateQRCodeForm input:not([name="qr_data_coupon_expire_date"]),#generateQRCodeForm input:not([name="qr_data_coupon_header"]),#generateQRCodeForm input:not([name="qr_data_coupon_message"]),#generateQRCodeForm input:not([name="qr_data_coupon_description_header"]),#generateQRCodeForm input:not([name="qr_data_coupon_description_body"]),#generateQRCodeForm input:not([name="qr_data_coupon_website"]),#generateQRCodeForm input:not([name="qr_data_coupon_company"]),#generateQRCodeForm input:not([name="qr_data_coupon_policy"]),#generateQRCodeForm input:not([name="qr_data_coupon_logo"]) ,#generateQRCodeForm textarea, #generateQRCodeForm select')
            $('#generateQRCodeForm input, #generateQRCodeForm textarea, #generateQRCodeForm select').not(
                '[name="qr_type"], [name="qr_data_coupon_code"], [name="qr_data_coupon_expire_date"], [name="qr_data_coupon_header"], [name="qr_data_coupon_message"], [name="qr_data_coupon_description_header"], [name="qr_data_coupon_description_body"], [name="qr_data_coupon_website"], [name="qr_data_coupon_company"], [name="qr_data_coupon_policy"], [name="qr_data_coupon_logo"]'
            ).on('keyup change', function(e) {
                e.preventDefault(); // Prevent default form submission behavior
                // Get the form data
                var formData = new FormData($(this).closest('form')[0]);

                $.ajax({
                    url: '{{ route('user.qr.preview') }}', // Replace this with the URL of your Laravel route or endpoint
                    type: 'POST',
                    data: formData,
                    processData: false,
                    contentType: false,
                    success: function(response) {
                        // Display the QR code image
                        $("#generatedQRCodeContainer").show();
                        $("#qrCouponPreview").hide();
                        $('.generatedQRCode').attr('src', response.qr_code);
                    },
                    error: function(xhr, status, error) {
                        console.error(error);
                    }
                });
            });
        </script>

        <script>
            function initMap() {
                var map = new google.maps.Map(document.getElementById('map'), {
                    center: {
                        lat: 23.7808405,
                        lng: 90.41968899999999
                    }, // Default center (Dhaka)
                    zoom: 12
                });

                var marker = new google.maps.Marker({
                    map: map
                });

                map.addListener('click', function(event) {
                    marker.setPosition(event.latLng);
                    document.getElementById('qr_data_location_latitude').value = event.latLng.lat();
                    document.getElementById('qr_data_location_longitude').value = event.latLng.lng();
                });
            }
        </script>



        <script>
            // Stepper lement
            var element = document.querySelector("#generateQRCode");
            var stepper = new KTStepper(element);
            stepper.on("kt.stepper.next", function(stepper) {
                stepper.goNext(); // go next step
            });
            stepper.on("kt.stepper.previous", function(stepper) {
                stepper.goPrevious(); // go previous step
            });
        </script>
    @endpush
</x-app-layout>

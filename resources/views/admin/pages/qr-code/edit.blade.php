<x-admin-app-layout :title="'QR : ' . $qr->code . ' Edit'">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-9">
                <div class="card mt-10">
                    <div class="card-body p-0">
                        <div class="stepper stepper-pills p-0" id="generateQRCode">
                            <div class="stepper-nav flex-center flex-wrap mb-10 fv-row bg-info">
                                <div class="stepper-item mx-2 my-4 current" data-kt-stepper-element="nav"
                                    data-kt-stepper-action="step">
                                    {{-- <div class="stepper-line w-40px"></div> --}}

                                    <div class="stepper-icon w-40px h-40px">
                                        <i class="stepper-check fas fa-check"></i>
                                        <span class="stepper-number">1</span>
                                    </div>

                                    <div class="stepper-label">
                                        <h3 class="stepper-title ps-2 pe-2">
                                            Input Data
                                        </h3>
                                    </div>
                                </div>

                                {{-- <div class="stepper-item mx-2 my-4" data-kt-stepper-element="nav"
                                    data-kt-stepper-action="step">
                                    <div class="stepper-line w-40px"></div>

                                    <div class="stepper-icon w-40px h-40px">
                                        <i class="stepper-check fas fa-check"></i>
                                        <span class="stepper-number">2</span>
                                    </div>

                                    <div class="stepper-label">
                                        <h3 class="stepper-title px-3">
                                            Customize
                                        </h3>
                                    </div>
                                </div> --}}

                                <div class="stepper-item mx-2 my-4" data-kt-stepper-element="nav"
                                    data-kt-stepper-action="step">
                                    <div class="stepper-line w-40px"></div>

                                    <div class="stepper-icon w-40px h-40px">
                                        <i class="stepper-check fas fa-check"></i>
                                        <span class="stepper-number">3</span>
                                    </div>

                                    <div class="stepper-label">
                                        <h3 class="stepper-title px-3">
                                            Done
                                        </h3>
                                    </div>
                                </div>
                            </div>

                            <form class="form w-100 mx-auto fv-row" novalidate="novalidate" id="generateQRCodeForm"
                                action="{{ route('admin.qr-code.update',$qr->code) }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="mb-5">
                                    <div class="flex-column current" data-kt-stepper-element="content">
                                        <div class="card">
                                            <div class="card-body">
                                                @include('admin.pages.qr-code.edit_partials.form')
                                            </div>
                                        </div>
                                    </div>

                                    {{-- <div class="flex-column" data-kt-stepper-element="content">
                                        <div class="card">
                                            <div class="row text-center justify-content-center">
                                                <h2 class="text-center mb-0">Choose QR Code Design!</h2>
                                            </div>
                                            <div class="card-body">
                                                @include('admin.pages.qr-code.edit_partials.customize')
                                            </div>
                                        </div>
                                    </div> --}}

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

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="d-flex flex-stack p-5">
                                    <div class="me-2">
                                        <button type="button" class="btn btn-light btn-active-light-danger"
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
                    <div class="stepper-nav flex-center flex-wrap p-9 fv-row bg-info">
                        <h3 class="text-center text-white">Preview</h3>
                    </div>
                    <div class="card-body bg-transparent ">
                        <div class="d-flex flex-column justify-content-center align-items-center">
                            {{-- id="generatedQRCodeContainer" --}}
                            <div id="generatedQRCodeContainer">
                                <div class="preview">
                                    <img id="generatedQRCode" class="img-fluid generatedQRCode" src="{{ $qr->qr_png_url }}" alt="QR Code">
                                </div>
                            </div>
                            {{-- <img src="" alt="website" class="img-fluid" width="300px"> --}}
                            {{-- @include('admin.pages.qr-code.edit_partials.qr_preview') --}}
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
        {{-- <script>
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

                const initiallySelectedValue = "{{$qr->qr_type}}";
                $("." + initiallySelectedValue).show();
            });
        </script> --}}


        <script>
            $('input[name="qr_data_coupon_code"], input[name="qr_data_coupon_expire_date"], input[name="qr_data_coupon_header"], input[name="qr_data_coupon_message"], input[name="qr_data_coupon_description_header"], input[name="qr_data_coupon_description_body"], input[name="qr_data_coupon_website"], input[name="qr_data_coupon_company"], input[name="qr_data_coupon_policy"], input[name="qr_data_coupon_logo"]')
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
                $('.colorPicker').on('input', function() {
                    var selectedColor = $(this).val();
                    $(this).closest('.colorCodeContainer').find('.colorCodeInput').val(selectedColor);
                });
            });

            $(document).ready(function() {
                $('.colorPicker').on('input', function() {
                    var selectedColor = $(this).val();
                    $(this).closest('.colorCodeInput').val(selectedColor);
                });
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
                        url: '{{ route('admin.qr-code.store') }}',
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
                    url: '{{ route('admin.qr.preview') }}', // Replace this with the URL of your Laravel route or endpoint
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
        {{-- PDF Preview --}}
        <script>
            $('input[name="qr_data_pdf"]')
                    .on('keyup change', function() {
                const file = event.target.files[0];
                const pdfPreviewContainer = document.getElementById('pdfPreviewContainer');
                const noPdfMessage = document.getElementById('noPdfMessage');
                const pdfPreview = document.getElementById('pdfPreview');

                if (file && file.type === "application/pdf") {
                    const fileReader = new FileReader();
                    fileReader.onload = function() {
                        pdfPreview.src = fileReader.result;
                    };
                    fileReader.readAsDataURL(file);
                } else {
                    alert("Please upload a valid PDF file.");
                }
            });
            </script>
    @endpush
</x-admin-app-layout>

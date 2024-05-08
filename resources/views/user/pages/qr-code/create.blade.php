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
                                                    <div class="col-lg-6">
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
                                                    </div>
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
                <div class="card mt-10 position-fixed">
                    <div class="card-body">
                        <div class="d-flex flex-column justify-content-center align-items-center">
                            {{-- id="generatedQRCodeContainer" --}}
                            <h3>Preview</h3>
                            <div id="generatedQRCodeContainer">
                                <img id="generatedQRCode" class="img-fluid" src="https://i.ibb.co/XzHNWc0/no-qr.png"
                                    alt="QR Code">
                            </div>

                            {{-- {!! QrCode::size(220)->eye('left-leaf', 0.1)->eyeColor(0, 255, 255, 255, 0, 0, 0)->eyeColor(1, 222, 18, 222, 222, 18, 222)->eyeColor(2, 222, 18, 222, 222, 18, 222)->style('dot', 0.8)->errorCorrection('H')->generate('Make me into a QrCode!') !!} --}}
                        </div>
                    </div>
                    <div class="card-footer d-flex justify-content-around align-items-center">
                        <a href="#" class="btn btn-light btn-active-light-primary w-100 me-2">Preview</a>
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
            $(document).ready(function() {
                $('#generateQRCodeForm').on('keyup change', 'input, textarea, select', function(e) {
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
                            $('#generatedQRCode').attr('src', '');
                            $('#generatedQRCode').attr('src', response.qr_code);
                        },
                        error: function(xhr, status, error) {
                            console.error(error);
                        }
                    });
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

            // Initialize Stepper
            var stepper = new KTStepper(element);

            // Handle next step
            stepper.on("kt.stepper.next", function(stepper) {
                stepper.goNext(); // go next step
            });

            // Handle previous step
            stepper.on("kt.stepper.previous", function(stepper) {
                stepper.goPrevious(); // go previous step
            });
        </script>
    @endpush
</x-app-layout>

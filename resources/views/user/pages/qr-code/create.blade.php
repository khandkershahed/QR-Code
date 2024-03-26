<x-app-layout :title="'QR Code Generate'">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-9">
                <div class="card">
                    <div class="card-body">
                        <!--begin::Stepper-->
                        <div class="stepper stepper-pills" id="kt_stepper_example_clickable">
                            <!--begin::Nav-->
                            <div class="stepper-nav flex-center flex-wrap mb-10">
                                <!--begin::Step 1-->
                                <div class="stepper-item mx-2 my-4 current" data-kt-stepper-element="nav"
                                    data-kt-stepper-action="step">
                                    <!--begin::Line-->
                                    <div class="stepper-line w-40px"></div>
                                    <!--end::Line-->

                                    <!--begin::Icon-->
                                    <div class="stepper-icon w-40px h-40px">
                                        <i class="stepper-check fas fa-check"></i>
                                        <span class="stepper-number">1</span>
                                    </div>
                                    <!--end::Icon-->

                                    <!--begin::Label-->
                                    <div class="stepper-label">
                                        <h3 class="stepper-title">
                                            Select Type
                                        </h3>
                                    </div>
                                    <!--end::Label-->
                                </div>
                                <!--end::Step 1-->

                                <!--begin::Step 2-->
                                <div class="stepper-item mx-2 my-4" data-kt-stepper-element="nav"
                                    data-kt-stepper-action="step">
                                    <!--begin::Line-->
                                    <div class="stepper-line w-40px"></div>
                                    <!--end::Line-->

                                    <!--begin::Icon-->
                                    <div class="stepper-icon w-40px h-40px">
                                        <i class="stepper-check fas fa-check"></i>
                                        <span class="stepper-number">2</span>
                                    </div>
                                    <!--begin::Icon-->

                                    <!--begin::Label-->
                                    <div class="stepper-label">
                                        <h3 class="stepper-title">
                                            Input Data
                                        </h3>
                                    </div>
                                    <!--end::Label-->
                                </div>
                                <!--end::Step 2-->

                                <!--begin::Step 3-->
                                <div class="stepper-item mx-2 my-4" data-kt-stepper-element="nav"
                                    data-kt-stepper-action="step">
                                    <!--begin::Line-->
                                    <div class="stepper-line w-40px"></div>
                                    <!--end::Line-->

                                    <!--begin::Icon-->
                                    <div class="stepper-icon w-40px h-40px">
                                        <i class="stepper-check fas fa-check"></i>
                                        <span class="stepper-number">3</span>
                                    </div>
                                    <!--begin::Icon-->

                                    <!--begin::Label-->
                                    <div class="stepper-label">
                                        <h3 class="stepper-title">
                                            Customize
                                        </h3>
                                    </div>
                                    <!--end::Label-->
                                </div>
                                <!--end::Step 3-->

                                <!--begin::Step 4-->
                                <div class="stepper-item mx-2 my-4" data-kt-stepper-element="nav"
                                    data-kt-stepper-action="step">
                                    <!--begin::Line-->
                                    <div class="stepper-line w-40px"></div>
                                    <!--end::Line-->

                                    <!--begin::Icon-->
                                    <div class="stepper-icon w-40px h-40px">
                                        <i class="stepper-check fas fa-check"></i>
                                        <span class="stepper-number">4</span>
                                    </div>
                                    <!--begin::Icon-->

                                    <!--begin::Label-->
                                    <div class="stepper-label">
                                        <h3 class="stepper-title">
                                            Done
                                        </h3>
                                    </div>
                                    <!--end::Label-->
                                </div>
                                <!--end::Step 4-->
                            </div>
                            <!--end::Nav-->

                            <!--begin::Form-->
                            <form class="form w-100 mx-auto" novalidate="novalidate" id="kt_stepper_example_basic_form">
                                <!--begin::Group-->
                                <div class="mb-5">
                                    <!--begin::Step 1-->
                                    <div class="flex-column current" data-kt-stepper-element="content">
                                        <div class="card">
                                            <div class="row">
                                                <h2 class="text-center mb-0">Create a Dynamic QR Code</h2>
                                                <p class="text-center mb-0">Modify content as needed, even after going
                                                    live.</p>
                                            </div>
                                            <div class="card-body">
                                                <x-qr-code.type :types="[
                                                    [
                                                        'id' => 1,
                                                        'value' => 'website',
                                                        'title' => 'Website',
                                                        'text' =>
                                                            'Link to an existing web URL and bring traffic online',
                                                        'image' =>
                                                            'https://dashboard.uniqode.com/assets/img/dynamic-qr/website.svg',
                                                    ],
                                                    [
                                                        'id' => 2,
                                                        'value' => 'pdf',
                                                        'title' => 'Pdf',
                                                        'text' => 'Link a PDF document and distribute it efficiently',
                                                        'image' =>
                                                            'https://dashboard.uniqode.com/assets/img/dynamic-qr/pdf.svg',
                                                    ],
                                                    [
                                                        'id' => 3,
                                                        'value' => 'image',
                                                        'title' => 'Image',
                                                        'text' => 'Show A Photo',
                                                        'image' =>
                                                            'https://dashboard.uniqode.com/assets/img/dynamic-qr/image.svg',
                                                    ],
                                                    [
                                                        'id' => 4,
                                                        'value' => 'sms',
                                                        'title' => 'Sms',
                                                        'text' => 'Redirect to your mobile number to receive SMS',
                                                        'image' =>
                                                            'https://dashboard.uniqode.com/assets/img/dynamic-qr/sms.svg',
                                                    ],
                                                    [
                                                        'id' => 5,
                                                        'value' => 'email',
                                                        'title' => 'Email',
                                                        'text' => 'Link to receive email messages',
                                                        'image' =>
                                                            'https://dashboard.uniqode.com/assets/img/dynamic-qr/email.svg',
                                                    ],
                                                    [
                                                        'id' => 6,
                                                        'value' => 'mobile_app',
                                                        'title' => 'Mobile_App',
                                                        'text' => 'Link to receive email messages',
                                                        'image' =>
                                                            'https://dashboard.uniqode.com/assets/img/dynamic-qr/app-download.svg',
                                                    ],
                                                    [
                                                        'id' => 7,
                                                        'value' => 'call',
                                                        'title' => 'Call',
                                                        'text' => 'Link to receive email messages',
                                                        'image' =>
                                                            'https://dashboard.uniqode.com/assets/img/dynamic-qr/call.svg',
                                                    ],
                                                    [
                                                        'id' => 8,
                                                        'value' => 'location',
                                                        'title' => 'Location',
                                                        'text' => 'Point to any location on Google Maps',
                                                        'image' =>
                                                            'https://dashboard.uniqode.com/assets/img/dynamic-qr/location.svg',
                                                    ],
                                                    [
                                                        'id' => 9,
                                                        'value' => 'coupon_code',
                                                        'title' => 'Coupon Code',
                                                        'text' => 'Route to a page displaying coupon code details',
                                                        'image' =>
                                                            'https://dashboard.uniqode.com/assets/img/dynamic-qr/coupon.svg',
                                                    ],
                                                    [
                                                        'id' => 10,
                                                        'value' => 'social',
                                                        'title' => 'Social',
                                                        'text' =>
                                                            'Link to an existing web URL and bring traffic online',
                                                        'image' =>
                                                            'https://dashboard.uniqode.com/assets/img/dynamic-qr/social-media.svg',
                                                    ],
                                                    [
                                                        'id' => 11,
                                                        'value' => 'audio',
                                                        'title' => 'Audio',
                                                        'text' => 'Link to your phone number for quick calls',
                                                        'image' =>
                                                            'https://dashboard.uniqode.com/assets/img/dynamic-qr/business-page.svg',
                                                    ],
                                                    [
                                                        'id' => 12,
                                                        'value' => 'business_page',
                                                        'title' => 'Business Page',
                                                        'text' => 'Link to your phone number for quick calls',
                                                        'image' =>
                                                            'https://dashboard.uniqode.com/assets/img/dynamic-qr/mp3.svg',
                                                    ],
                                                ]" />
                                            </div>
                                        </div>
                                    </div>
                                    <!--end::Step 1-->

                                    <!--begin::Step 2-->
                                    <div class="flex-column" data-kt-stepper-element="content">
                                        <div class="card">
                                            <div class="card-body">
                                                @include('user.pages.qr-code.partials.form')
                                            </div>
                                        </div>
                                    </div>
                                    <!--end::Step 2-->

                                    <!--begin::Step 3-->
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
                                    <!--end::Step 3-->

                                    <!--begin::Step 4-->
                                    <div class="flex-column" data-kt-stepper-element="content">
                                        <div class="card">
                                            <div class="card-header">
                                                <div class="pt-5 ps-5">
                                                    <h2>Congratulations! Your QR Code is ready</h2>
                                                    {{-- <p>Still want to make changes?
                                                        <a href="#">Modify your QR code</a>
                                                    </p> --}}
                                                </div>
                                            </div>
                                            <div class="card-body">
                                                <div class="pt-5 pb-5 ps-5">
                                                    <label for="">Enter a name for your QR code</label>
                                                    <input type="text" name="" id=""
                                                        class="form-control form-control-solid w-100">
                                                </div>
                                                <div class="w-25 mx-auto">
                                                    <img width="300px"
                                                        src="https://assets-v2.lottiefiles.com/a/1abcc0d6-1163-11ee-9072-a343231e70f1/HGdrITc8PY.gif"
                                                        alt="">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--end::Step 4-->
                                </div>

                                <!--end::Group-->

                                <!--begin::Actions-->
                                <div class="d-flex flex-stack">
                                    <!--begin::Wrapper-->
                                    <div class="me-2">
                                        <button type="button" class="btn btn-light btn-active-light-primary"
                                            data-kt-stepper-action="previous">
                                            Back
                                        </button>
                                    </div>
                                    <!--end::Wrapper-->

                                    <!--begin::Wrapper-->
                                    <div>
                                        {{-- <button type="button" class="btn btn-primary" data-kt-stepper-action="submit">
                                            <span class="indicator-label">
                                                Submit
                                            </span>
                                            <span class="indicator-progress">
                                                Please wait... <span
                                                    class="spinner-border spinner-border-sm align-middle ms-2"></span>
                                            </span>
                                        </button> --}}
                                        <button type="submit" id="generateButton" data-kt-stepper-action="submit"
                                            class="btn btn-primary">{{ __('Generate') }}</button>

                                        <button type="button" class="btn btn-primary" data-kt-stepper-action="next">
                                            Continue
                                        </button>
                                    </div>
                                    <!--end::Wrapper-->
                                </div>
                                <!--end::Actions-->
                            </form>
                            <!--end::Form-->
                        </div>
                    </form>
                    <!--end::Form-->
                </div>
                <!--end::Card body-->
            </div>
            <!--end::Card-->
        </div>
        <!--end::Content-->
        <!--begin::Sidebar-->
        <div class="flex-lg-auto min-w-lg-300px">
            <!--begin::Card-->
            <div class="card">
                <!--begin::Card body-->
                <div class="card-body p-10">
                    <span class="text-center fs-2x fw-bolder text-gray-800">Preview</span>
                    <div class="card card-flush">
                        <div class="card-body">
                            <div id="generatedQRCodeContainer" class="mb-5">
                                <img id="generatedQRCode" src="https://i.ibb.co/XzHNWc0/no-qr.png" alt="QR Code">
                                {{-- <br> --}}
                                {{-- <a id="downloadLink" href="" download style="display: none;" class="">Download QR Code</a> --}}
                            </div>
                            <div class="mb-0">
                                <!--begin::Row-->
                                <div class="row mb-5">
                                    <!--begin::Col-->
                                    <div class="col">
                                        <a href="#"
                                            class="btn btn-light btn-active-light-primary w-100">Preview</a>
                                    </div>
                                    <!--end::Col-->
                                    <!--begin::Col-->
                                    <div class="col">
                                        <a id="downloadLink" href="" download style="display: none;"
                                            class="btn btn-light btn-active-light-primary w-100">Download</a>
                                    </div>
                                    <!--end::Col-->
                                </div>
                            </div>
                        </div>
                    </form>
                </div> --}}
            </div>
            <div class="col-lg-3">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex flex-column justify-content-center align-items-center">
                            <h3>Preview</h3>
                            <img class="img-fluid" src="https://i.ibb.co/XzHNWc0/no-qr.png" alt="QR Code">
                        </div>
                    </div>
                    <div class="card-footer d-flex justify-content-around align-items-center">
                        <a href="#" class="btn btn-light btn-active-light-primary w-100 me-2">Preview</a>
                        <a href="#" class="btn btn-light btn-primary w-100">Download</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @push('scripts')
        <script>
            $(document).ready(function() {
                $('#generateQRCodeForm').on('submit', function(e) {
                    e.preventDefault(); // Prevent default form submission behavior
                    $('#generateButton').hide();
                    var formData = new FormData(this);

                    $.ajax({
                        url: '{{ route('user.qr-code.store') }}',
                        type: 'POST',
                        data: formData,
                        processData: false,
                        contentType: false,
                        success: function(response) {
                            if (response.qrCodePath) {
                                // Set the QR code image source
                                $('#generatedQRCode').attr('src', response.qrCodePath);
                                // Show the download link
                                $('#downloadLink').attr('href', response.qrCodePath).show();
                                // Show the QR code container
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

        </script>
        <script>
            var myDropzone = new Dropzone("#kt_dropzonejs_example_1", {
    url: "https://keenthemes.com/scripts/void.php", // Set the url for your upload script location
    paramName: "file", // The name that will be used to transfer the file
    maxFiles: 10,
    maxFilesize: 10, // MB
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
            $(document).ready(function() {
                $('#colorPicker').on('input', function() {
                    var selectedColor = $(this).val();
                    $('#colorCodeInput').val(selectedColor);
                });
            });
        </script>
        <script>
            // Get references to radio buttons and divs
            const normalColorRadio = document.getElementById('normal_color');
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
            // Get references to radio buttons and content sections
            const colorRadio = document.getElementById('flexRadioDefault1');
            const imageRadio = document.getElementById('flexRadioDefault2');
            const transparentRadio = document.getElementById('flexRadioDefault3');
            const colorContent = document.getElementById('color-content');
            const imageContent = document.getElementById('image-content');
            const transparentContent = document.getElementById('transparent-content');

            // Add event listeners to radio buttons
            colorRadio.addEventListener('change', function() {
                // Show color content and hide others
                colorContent.style.display = 'block';
                imageContent.style.display = 'none';
                transparentContent.style.display = 'none';
            });

            imageRadio.addEventListener('change', function() {
                // Show image content and hide others
                colorContent.style.display = 'none';
                imageContent.style.display = 'block';
                transparentContent.style.display = 'none';
            });

            transparentRadio.addEventListener('change', function() {
                // Show transparent content and hide others
                colorContent.style.display = 'none';
                imageContent.style.display = 'none';
                transparentContent.style.display = 'block';
            });

            // Stepper lement
            var element = document.querySelector("#kt_stepper_example_clickable");

            // Initialize Stepper
            var stepper = new KTStepper(element);

            // Handle navigation click
            stepper.on("kt.stepper.click", function(stepper) {
                stepper.goTo(stepper.getClickedStepIndex()); // go to clicked step
            });

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







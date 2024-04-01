<x-app-layout :title="'NFC Card Create'">
    <div class="row">
        <div class="col-lg-9">
            <div class="card">
                <div class="card-body p-0">
                    <div class="stepper stepper-pills p-0" id="kt_stepper_example_clickable">
                        <div class="stepper-nav flex-center flex-wrap border-bottom">
                            <div class="stepper-item mx-2 my-4 bg-light-primary pe-3 rounded-2 current"
                                data-kt-stepper-element="nav" data-kt-stepper-action="step">
                                <div class="stepper-icon w-40px h-40px">
                                    <i class="stepper-check fas fa-check"></i>
                                    <span class="stepper-number">1</span>
                                </div>

                                <div class="stepper-label bg-light-primary p-2">
                                    <h3 class="stepper-title">
                                        Select Template
                                    </h3>
                                </div>
                            </div>

                            <div class="stepper-item mx-2 my-4 bg-light-primary pe-3 rounded-2"
                                data-kt-stepper-element="nav" data-kt-stepper-action="step">
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

                            <div class="stepper-item mx-2 my-4 bg-light-primary pe-3 rounded-2"
                                data-kt-stepper-element="nav" data-kt-stepper-action="step">
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

                            <div class="stepper-item mx-2 my-4 bg-light-primary pe-3 rounded-2"
                                data-kt-stepper-element="nav" data-kt-stepper-action="step">
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

                        <form class="form w-100 mx-auto" novalidate="novalidate" id="generateQRCodeForm"
                            action="{{ route('user.nfc-card.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-5">
                                <div class="flex-column current" data-kt-stepper-element="content">
                                    <div class="card">
                                        <div class="my-15">
                                            <h2 class="text-center mb-0">Select a Dynamic NFC Card Template</h2>
                                            <p class="text-center mb-0">Modify content as needed, even after going
                                                live.</p>
                                        </div>
                                        <div class="card-body">
                                            @include('user.pages.nfc-card.partials.nfc_template')
                                        </div>
                                    </div>
                                </div>

                                <div class="flex-column" data-kt-stepper-element="content">
                                    <div class="card">
                                        <div class="card-body">
                                            @include('user.pages.nfc-card.partials.form')
                                        </div>
                                    </div>
                                </div>

                                <div class="flex-column" data-kt-stepper-element="content">
                                    <div class="card">
                                        <div class="text-center justify-content-center my-15">
                                            <h2 class="text-center mb-0">Choose NFC Card Design!</h2>
                                        </div>
                                        <div class="card-body">
                                            @include('user.pages.nfc-card.partials.customize')
                                        </div>
                                    </div>
                                </div>

                                <div class="flex-column" data-kt-stepper-element="content">
                                    <div class="card">
                                        <div class="card-header text-center ">
                                            <div class="pt-15 pb-15 ps-5 w-100">
                                                <h2 class="text-success">Congratulations!</h2>
                                                <p>Your NFC Profle is ready Wait For Host!</p>
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <div class="w-25 mx-auto">
                                                <img width="300px"
                                                    src="https://assets-v2.lottiefiles.com/a/1abcc0d6-1163-11ee-9072-a343231e70f1/HGdrITc8PY.gif"
                                                    alt="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="d-flex flex-stack p-3">
                                <div class="me-2">
                                    <button type="button" class="btn btn-light btn-active-light-primary"
                                        data-kt-stepper-action="previous">
                                        Back
                                    </button>
                                </div>
                                <div>
                                    <button type="submit" id="generateButton" data-kt-stepper-action="submit"
                                        class="btn btn-primary">{{ __('Submit Now') }}</button>

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
            <div class="card">
                <div class="card-body">
                    <div class="d-flex flex-column justify-content-center align-items-center">
                        <h3>Preview</h3>
                        <img class="" style="height: 530px;" src="https://i.ibb.co/268574S/3.png" alt="QR Code">
                    </div>
                </div>
                <div class="card-footer d-flex justify-content-around align-items-center">
                    <a href="#" class="btn btn-light btn-active-light-primary w-100 me-2">Preview</a>
                    <a href="#" class="btn btn-light btn-primary w-100">Download</a>
                </div>
            </div>
        </div>
    </div>
    @push('scripts')
        <script>
            // Get references to radio buttons and content sections
            const colorRadio = document.getElementById('background_color');
            // const imageRadio = document.getElementById('background_image');
            const transparentRadio = document.getElementById('background_transparent');
            const colorContent = document.getElementById('color-content');
            // const imageContent = document.getElementById('image-content');
            const transparentContent = document.getElementById('transparent-content');

            // Add event listeners to radio buttons
            colorRadio.addEventListener('change', function() {
                // Show color content and hide others
                colorContent.style.display = 'block';
                // imageContent.style.display = 'none';
                transparentContent.style.display = 'none';
            });

            // imageRadio.addEventListener('change', function() {
            //     // Show image content and hide others
            //     colorContent.style.display = 'none';
            //     imageContent.style.display = 'block';
            //     transparentContent.style.display = 'none';
            // });

            transparentRadio.addEventListener('change', function() {
                // Show transparent content and hide others
                colorContent.style.display = 'none';
                // imageContent.style.display = 'none';
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
        <script>
            function updateInputValue(value) {
                document.getElementById('logo_Size').value = value;
            }
        </script>
        <script>
            $('#kt_docs_repeater_basic-phone').repeater({
                initEmpty: false,

                defaultValues: {
                    'text-input': 'foo'
                },

                show: function() {
                    $(this).slideDown();
                },

                hide: function(deleteElement) {
                    $(this).slideUp(deleteElement);
                }
            });
        </script>
        <script>
            $('#kt_docs_repeater_basic-email').repeater({
                initEmpty: false,

                defaultValues: {
                    'text-input': 'foo'
                },

                show: function() {
                    $(this).slideDown();
                },

                hide: function(deleteElement) {
                    $(this).slideUp(deleteElement);
                }
            });
        </script>
        <script>
            $('#kt_docs_repeater_basic-website').repeater({
                initEmpty: false,

                defaultValues: {
                    'text-input': 'foo'
                },

                show: function() {
                    $(this).slideDown();
                },

                hide: function(deleteElement) {
                    $(this).slideUp(deleteElement);
                }
            });
        </script>
        <script>
            $('#kt_docs_repeater_basic-custom').repeater({
                initEmpty: false,

                defaultValues: {
                    'text-input': 'foo'
                },

                show: function() {
                    $(this).slideDown();
                },

                hide: function(deleteElement) {
                    $(this).slideUp(deleteElement);
                }
            });
        </script>
        <script>
            $('#kt_docs_repeater_basic-social').repeater({
                initEmpty: false,

                defaultValues: {
                    'text-input': 'foo'
                },

                show: function() {
                    $(this).slideDown();
                },

                hide: function(deleteElement) {
                    $(this).slideUp(deleteElement);
                }
            });
        </script>
        <script>
            function previewImage(input) {
                var preview = document.getElementById('company_logo_preview');
                var file = input.files[0];
                var reader = new FileReader();
                reader.onloadend = function() {
                    preview.src = reader.result;
                }
                if (file) {
                    reader.readAsDataURL(file);
                } else {
                    preview.src = "";
                }
            }
        </script>
    @endpush
</x-app-layout>

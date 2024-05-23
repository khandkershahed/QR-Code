<x-admin-app-layout :title="'NFC Card Create'">
    <h1 class="text-center mb-10 mt-5">Make Your NFC Profile !</h1>
    <div class="row">
        <div class="col-lg-9">
            <div class="card" style="height: 700px; overflow: auto;">
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
                                        <i class="fa-solid fa-synagogue pe-3"></i> Select Template
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
                                        <i class="fa-solid fa-file-import pe-3"></i> Input Data
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
                                        <i class="fa-solid fa-sliders pe-3"></i> Customize
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
                                        <i class="fa-solid fa-thumbs-up pe-3"></i> Done
                                    </h3>
                                </div>
                            </div>
                        </div>

                        <form class="form w-100 mx-auto" novalidate="novalidate" id="generateNfcCardForm"
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
                                        <div class="card-body p-1">
                                            @include('user.pages.nfc-card.partials.nfc_template')
                                        </div>
                                    </div>
                                </div>

                                <div class="flex-column" data-kt-stepper-element="content">
                                    <div class="card">
                                        <div class="card-body p-1">
                                            @include('user.pages.nfc-card.partials.form')
                                        </div>
                                    </div>
                                </div>

                                <div class="flex-column" data-kt-stepper-element="content">
                                    <div class="card">
                                        <div class="text-center justify-content-center my-15">
                                            <h2 class="text-center mb-0">Choose NFC Card Design!</h2>
                                        </div>
                                        <div class="card-body p-1">
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
                                            <div class="mx-auto d-flex justify-content-center">
                                                <img width="img-fluid"
                                                    src="https://i.ibb.co/5nFS23D/documents-filling-office-worker-corporate-employee-item-credit-card-folder-contract-employment-56688.jpg"
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
            <div class="card" style="height: 700px; overflow: auto;">
                <div class="card-body">
                    <div class="d-flex flex-column justify-content-center align-items-center">
                        <h3>Preview</h3>
                        @include('user.pages.nfc-card.partials.nfc_preview')
                    </div>
                </div>
                <div class="card-footer d-flex justify-content-around align-items-center">
                    <a href="#" class="btn btn-light btn-light-primary w-100"><i
                            class="fa-solid fa-file-export pe-3"></i>Download</a>
                </div>
            </div>
        </div>
    </div>
    @push('scripts')
        <script>
            $(document).ready(function() {
                // NFC Template
                $('input[name="nfc_template"]').change(function() {
                    $(".nfc-card").hide();
                    const nfcTemplateValue = $('input[name="nfc_template"]:checked').val();
                    if (nfcTemplateValue != null) {
                        $("." + nfcTemplateValue).show();
                    } else {
                        $(".nfc-card").hide();
                    }
                });
                const initiallySelectedValue = $('input[name="nfc_template"]:checked').val();
                $("#" + initiallySelectedValue).show();

                // NFC card Input
                $(document).ready(function() {
                    $('#generateNfcCardForm input:not([type="radio"]), #generateNfcCardForm textarea').on(
                        'keyup change',
                        function() {
                            var profile_image = $("input[name='profile_image']").val();
                            var first_name = $("input[name='first_name']").val();
                            var last_name = $("input[name='last_name']").val();
                            var prefix = $("input[name='prefix']").val();
                            var suffix = $("input[name='suffix']").val();
                            var designation = $("input[name='designation']").val();
                            var department = $("input[name='department']").val();
                            var pronouns = $("input[name='pronouns']").val();
                            var company = $("input[name='company']").val();
                            var location_latitude = $("input[name='location_latitude']").val();
                            var location_longitude = $("input[name='location_longitude']").val();
                            var company_logo = $("input[name='company_logo']").val();
                            var logo_Size = $("input[name='logo_Size']").val();
                            var summary = $("textarea[name='summary']").val();
                            var address = $("textarea[name='address']").val();

                            $('.profile_image').attr('src', profile_image);
                            $('.first_name').text(first_name);
                            $('.last_name').text(last_name);
                            $('.prefix').text(prefix);
                            $('.suffix').text(suffix);
                            $('.designation').text(designation);
                            $('.department').text(department);
                            $('.pronouns').text(pronouns);
                            $('.company').text(company);
                            $('.location_latitude').text(location_latitude);
                            $('.location_longitude').text(location_longitude);
                            $('.company_logo').attr('src', company_logo);
                            $('.logo_Size').text(logo_Size);
                            $('.summary').text(summary);
                            $('.address').text(address);

                            // For debugging
                            console.log("First Name:", first_name);
                        });
                });


            });
        </script>

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
            function previewprofileImage(input) {
                var preview = $('.profile_image'); // Select the preview element using its class
                var file = input.files[0];
                var reader = new FileReader();
                reader.onloadend = function() {
                    preview.attr('src', reader.result); // Set the src attribute using .attr() method
                }
                if (file) {
                    reader.readAsDataURL(file);
                } else {
                    preview.attr('src', ""); // Clear the src attribute if no file is selected
                }
            }

            function previewImage(input) {
                var preview = $('.company_logo'); // Select the preview element using its class
                var file = input.files[0];
                var reader = new FileReader();
                reader.onloadend = function() {
                    preview.attr('src', reader.result); // Set the src attribute using .attr() method
                }
                if (file) {
                    reader.readAsDataURL(file);
                } else {
                    preview.attr('src', ""); // Clear the src attribute if no file is selected
                }
            }
        </script>
    @endpush
</x-admin-app-layout>

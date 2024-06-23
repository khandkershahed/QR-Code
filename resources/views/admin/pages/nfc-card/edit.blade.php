<x-admin-app-layout :title="'NFC Card Edit'">
    <h1 class="text-center mb-10 mt-5">Edit Your NFC Profile!</h1>
    @if (session('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
    @endif
    <div class="row g-2" id="columns-container">
        <div class="col-lg-8">
            <div class="card" id="first-card">
                <div class="card-body custom-card-body overflow-auto p-0">
                    <div class="stepper stepper-pills flex-grow-1 d-flex flex-column" id="kt_stepper_example_clickable">
                        <div class="stepper-nav flex-center flex-wrap steaper-header">
                            <div class="stepper-item mx-3 my-4 p-0 current" data-kt-stepper-element="nav"
                                data-kt-stepper-action="step">
                                <div class="stepper-wrapper d-flex align-items-center">
                                    <div class="stepper-icon w-40px h-40px me-2">
                                        <i class="stepper-check fas fa-check"></i>
                                        <span class="stepper-number">1</span>
                                    </div>
                                    <div class="stepper-label">
                                        <h3 class="stepper-title mb-0 pe-3">Input Data</h3>
                                    </div>
                                </div>
                                <div class="stepper-line h-40px"></div>
                            </div>

                            <div class="stepper-item mx-3 my-4 p-0" data-kt-stepper-element="nav"
                                data-kt-stepper-action="step">
                                <div class="stepper-wrapper d-flex align-items-center">
                                    <div class="stepper-icon w-40px h-40px me-2">
                                        <i class="stepper-check fas fa-check"></i>
                                        <span class="stepper-number">2</span>
                                    </div>
                                    <div class="stepper-label">
                                        <h3 class="stepper-title mb-0 pe-3">Customize</h3>
                                    </div>
                                </div>
                                <div class="stepper-line h-40px"></div>
                            </div>


                            {{-- <div class="stepper-item mx-3 my-4 p-0" data-kt-stepper-element="nav"
                                data-kt-stepper-action="step">
                                <div class="stepper-wrapper d-flex align-items-center">
                                    <div class="stepper-icon w-40px h-40px me-2">
                                        <i class="stepper-check fas fa-check"></i>
                                        <span class="stepper-number">3</span>
                                    </div>
                                    <div class="stepper-label">
                                        <h3 class="stepper-title mb-0 pe-3">Card Customize</h3>
                                    </div>
                                </div>
                            </div> --}}

                            {{-- <div class="stepper-item mx-3 my-4 p-0" data-kt-stepper-element="nav"
                                data-kt-stepper-action="step">
                                <div class="stepper-wrapper d-flex align-items-center">
                                    <div class="stepper-icon w-40px h-40px me-2">
                                        <i class="stepper-check fas fa-check"></i>
                                        <span class="stepper-number">3</span>
                                    </div>
                                    <div class="stepper-label">
                                        <h3 class="stepper-title mb-0 pe-3">Shipping Details</h3>
                                    </div>
                                </div>
                            </div> --}}
                        </div>
                        <!-- Stepper content and form -->
                        <form class="form flex-grow-1 d-flex flex-column" novalidate="novalidate"
                            id="kt_stepper_example_clickable_form" action="{{ route('admin.nfc-card.update',$nfc_card->id) }}"
                            method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="row">
                                <div class="flex-column current" data-kt-stepper-element="content">
                                    <div class="card flex-grow-1 rounded-0">
                                        <div
                                            class="centered-card-body card-body d-flex flex-column justify-content-between mb-10">
                                            @include('admin.pages.nfc-card.edit_partials.form')
                                        </div>
                                    </div>
                                </div>

                                <div class="flex-column" data-kt-stepper-element="content">
                                    <div class="card flex-grow-1 rounded-0">
                                        <div class="text-center justify-content-center pt-10">
                                            <h2 class="text-center mb-0">Choose NFC Card Design!</h2>
                                        </div>
                                        <div
                                            class="centered-card-body card-body d-flex flex-column justify-content-between mb-10">
                                            @include('admin.pages.nfc-card.edit_partials.customize')
                                        </div>
                                    </div>
                                </div>


                                {{-- <div class="flex-column" data-kt-stepper-element="content">
                                    <div class="card flex-grow-1 rounded-0">
                                        <div class="text-center justify-content-center pt-10">
                                            <h2 class="text-center mb-0">Customize Your Virtual Card As Need!</h2>
                                        </div>
                                        <div
                                            class="centered-card-body card-body d-flex flex-column justify-content-between mb-10">
                                            @include('admin.pages.nfc-card.edit_partials.virtualCardCustomization')
                                        </div>
                                    </div>
                                </div> --}}

                                {{-- <div class="flex-column" data-kt-stepper-element="content">
                                    <div class="card flex-grow-1 rounded-0">
                                        <div class="card-header text-center border-0">
                                            <div class="pt-15 pb-15 ps-5 w-100">
                                                <h2 class="text-success">Congratulations!</h2>
                                                <p>Your NFC Profile is ready. Add Billing Address For NFC Card Delivery!
                                                </p>
                                            </div>
                                        </div>
                                        <div
                                            class="centered-card-body card-body d-flex flex-column justify-content-between mb-10 pt-0">
                                            @include('admin.pages.nfc-card.edit_partials.virtualCardBilling')
                                        </div>
                                    </div>
                                </div> --}}
                            </div>
                            {{-- Stepper Action Button --}}
                            <div class="fixed-bottom">
                                <div class="d-flex justify-content-between py-3 px-3 align-items-center bg-white">
                                    <div class="me-2">
                                        <button type="button" class="btn btn-light btn-active-light-primary"
                                            data-kt-stepper-action="previous">
                                            Back
                                        </button>
                                    </div>
                                    <div>
                                        <button type="submit" class="btn btn-primary" id="submitButton"
                                            data-kt-stepper-action="submit">
                                            <span class="indicator-label">Update</span>
                                            <span class="indicator-progress">Please wait... <span
                                                    class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                                        </button>
                                        <button type="button" class="btn btn-primary" data-kt-stepper-action="next">
                                            Continue
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </form>
                        <!-- End of Stepper content and form -->
                    </div>
                </div>
            </div>
        </div>
        {{-- <div class="col-lg-4">
            <div class="card" id="second-card">
                <div class="card-header px-0 sticky-top-preview border-0">
                    <div class="d-flex flex-column justify-content-center align-items-center"
                        style="width: 100%; background: #0098da3d; border-top-left-radius: 5px; border-top-right-radius: 5px; padding: 15px;">
                        <h3 class="">Preview</h3>
                        <p class="mb-0 ">Your Choosen Template</p>
                    </div>
                </div>
                <div class="card-body custom-card-body overflow-auto px-0 ">
                    @include('admin.pages.nfc-card.partials.nfc_preview')
                </div>
                <div
                    class="card-body custom-card-body overflow-auto px-0 py-10 d-flex justify-content-center align-items-center">
                    @include('admin.pages.nfc-card.partials.virtual_card_preview')
                </div>
            </div>
        </div> --}}
    </div>

    @push('scripts')
        <script>
            $(document).ready(function() {
                // Function to match card heights
                function matchCardHeights() {
                    var firstCardHeight = $('#first-card').outerHeight();
                    $('#second-card').outerHeight(firstCardHeight);
                }

                // Call matchCardHeights initially and on window resize
                matchCardHeights();
                $(window).resize(matchCardHeights);
            });
        </script>
        <script>
            $(document).ready(function() {
                // NFC Template
                var nfcTemplateValue = $('input[name="nfc_template"]:checked').val();
                if (nfcTemplateValue != null) {
                    localStorage.setItem('nfc_template', nfcTemplateValue);
                    $("." + nfcTemplateValue).show();
                } else {
                    $(".nfc-card").hide();
                }


                $('input[name="nfc_template"]').change(function() {
                    $(".nfc-card").hide();
                    var nfcTemplateValue = $('input[name="nfc_template"]:checked').val();
                    if (nfcTemplateValue != null) {
                        localStorage.setItem('nfc_template', nfcTemplateValue);
                        $("." + nfcTemplateValue).show();
                    } else {
                        $(".nfc-card").hide();
                    }
                });

                var initiallySelectedValue = $('input[name="nfc_template"]:checked').val();
                $("." + initiallySelectedValue).show();


                $('#kt_stepper_example_clickable_form input:not([type="radio"]), #kt_stepper_example_clickable_form textarea, #kt_stepper_example_clickable_form input:not([type="color"])')
                    .on('keyup change', function() {
                        // Extract input value and name
                        var inputValue = $(this).val();
                        var inputName = $(this).attr('name');
                        // alert(inputValue);
                        // alert(inputName);
                        // Update corresponding NFC card element
                        var nfcCardElement = $('.nfc-card .' + inputName);
                        var virtualCardElement = $('.virtual_card .' + inputName);
                        if (nfcCardElement.length > 0 | virtualCardElement.length > 0) {
                            if ($(this).is('input[type="file"]')) {
                                if ($(this).prop('files') && $(this).prop('files')[0]) {
                                    var file = $(this).prop('files')[0];
                                    var reader = new FileReader();
                                    reader.onload = function(e) {
                                        nfcCardElement.attr('src', e.target.result);
                                        virtualCardElement.attr('src', e.target.result);
                                    }
                                    reader.readAsDataURL(file);
                                }
                            } else if ($(this).is('input[type="url"]')) {
                                nfcCardElement.attr('href', inputValue);
                                virtualCardElement.attr('href', inputValue);
                            } else {
                                nfcCardElement.text(inputValue);
                                virtualCardElement.text(inputValue);
                            }
                        }

                        // For debugging
                        console.log("Input Name:", inputName, "Input Value:", inputValue);
                    });


            });
        </script>

        <script>
            // Change BG
            function changeBackgroundColor() {
                var selectedBgColor = $('input[name="background_color"]').val();
                $('.tem-two-bio-title, .tem-two-profile, .tem-two-service-box, .tem-two-service-title, .tem-one-bio-title, .tem-one-profile, .tem-one-service-box, .tem-one-service-title, .tem-one-services-title, .tem-two-services-title')
                    .css('background-color', selectedBgColor);
                $('.tem-two-bio-title, .tem-one-bio-title').css('color', selectedBgColor);
            }

            function changeTitleColor() {
                var selectedTitleColor = $('input[name="title_color"]').val();
                $('.tem-two-service-title, .tem-one-service-title, .tem-one-services-title, .tem-two-services-title').css(
                    'color', selectedTitleColor);
            }

            function contactBgColor() {
                var selectedBgColor = $('input[name="button_bg_color"]').val();
                $('.nfc_contact_btn').css('background-color', selectedBgColor);
            }

            function contactTitleColor() {
                var selectedTitleColor = $('input[name="button_title_color"]').val();
                $('.nfc_contact_btn').css('color', selectedTitleColor);
            }

            function changeFontSize() {
                var selectedFontSize = $('input[name="font_size"]').val();
                // alert(selectedFontSize);
                $('.tem-two-bio-title, .tem-two-service-title, .tem-one-bio-title, .tem-one-service-title').css('font-size',
                    selectedFontSize + 'px');
            }


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

            function previewBannerImage(input) {
                var preview = $('.banner_image'); // Select the preview element using its class
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

            function previewServiceOneImage(input) {
                var preview = $('.service_one_image'); // Select the preview element using its class
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

            function previewServiceTwoImage(input) {
                var preview = $('.service_two_image'); // Select the preview element using its class
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

            function previewServiceThreeImage(input) {
                var preview = $('.service_three_image'); // Select the preview element using its class
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
        <script>
            // Initialize Slick Slider
        </script>
        <script>
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
            $(document).ready(function() {
                function updateCardPreview() {
                    const virtualCardValue = $('input[name="virtual_card_template"]:checked').val();
                    if (virtualCardValue != null) {
                        $(".virtual_card").hide();
                        $(".nfc-card").hide();
                        $("." + virtualCardValue).show();
                    } else {
                        $(".nfc-card").hide();
                    }
                }



                // On change event for radio buttons
                $('input[name="virtual_card_template"]').change(function() {
                    updateCardPreview();
                });


            });

            function changeCardFontColor() {
                var selectedCardFontColor = $('input[name="card_font_color"]').val();
                $('.card_name, .card_designation, .card_phone, .card_email, .card_address').css('color', selectedCardFontColor);
            }

            function changeBgFront(input) {
                if (input.files && input.files[0]) {
                    var file = input.files[0];
                    var reader = new FileReader();
                    reader.onload = function(e) {
                        $('.punch-card-container').css('background-image', 'url(' + e.target.result + ')');
                    }
                    reader.readAsDataURL(file);
                }
            }

            function changeBgBack(input) {
                if (input.files && input.files[0]) {
                    var file = input.files[0];
                    var reader = new FileReader();
                    reader.onload = function(e) {
                        $('.punch-card-container-back').css('background-image', 'url(' + e.target.result + ')');
                    }
                    reader.readAsDataURL(file);
                }
            }
        </script>

        <script>
            $(document).ready(function() {
                $('#submitButton').on('submit', function() {
                    var $btn = $(this);
                    // Disable the button
                    $btn.prop('disabled', true);
                    // Show the progress indicator
                    $btn.find('.indicator-label').hide();
                    $btn.find('.indicator-progress').show();
                });
            });
        </script>
    @endpush
</x-admin-app-layout>

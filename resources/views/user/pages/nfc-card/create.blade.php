<x-app-layout :title="'NFC Card Create'">
    <h1 class="text-center mb-10 mt-5">Make Your NFC Profile!</h1>
    @if (session('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
    @endif
    <div class="row">
        <div class="col-lg-8 mx-0 px-0 d-flex flex-column">
            <div class="stepper stepper-pills" id="kt_stepper_example_clickable">
                <div class="stepper-nav flex-center flex-wrap"
                    style="background: #0098da;border-bottom: 1px solid #eee;border-top-left-radius: 5px;
    border-top-right-radius: 5px;">
                    <div class="stepper-item mx-3 my-4 current" data-kt-stepper-element="nav"
                        data-kt-stepper-action="step">
                        <div class="stepper-wrapper d-flex align-items-center">
                            <div class="stepper-icon w-40px h-40px me-2">
                                <i class="stepper-check fas fa-check"></i>
                                <span class="stepper-number">1</span>
                            </div>
                            <div class="stepper-label">
                                <h3 class="stepper-title mb-0">Select Template</h3>
                            </div>
                        </div>
                        <div class="stepper-line h-40px"></div>
                    </div>

                    <div class="stepper-item mx-3 my-4" data-kt-stepper-element="nav" data-kt-stepper-action="step">
                        <div class="stepper-wrapper d-flex align-items-center">
                            <div class="stepper-icon w-40px h-40px me-2">
                                <i class="stepper-check fas fa-check"></i>
                                <span class="stepper-number">2</span>
                            </div>
                            <div class="stepper-label">
                                <h3 class="stepper-title mb-0">Input Data</h3>
                            </div>
                        </div>
                        <div class="stepper-line h-40px"></div>
                    </div>

                    <div class="stepper-item mx-3 my-4" data-kt-stepper-element="nav" data-kt-stepper-action="step">
                        <div class="stepper-wrapper d-flex align-items-center">
                            <div class="stepper-icon w-40px h-40px me-2">
                                <i class="stepper-check fas fa-check"></i>
                                <span class="stepper-number">3</span>
                            </div>
                            <div class="stepper-label">
                                <h3 class="stepper-title mb-0">Customize</h3>
                            </div>
                        </div>
                        <div class="stepper-line h-40px"></div>
                    </div>

                    <div class="stepper-item mx-3 my-4" data-kt-stepper-element="nav" data-kt-stepper-action="step">
                        <div class="stepper-wrapper d-flex align-items-center">
                            <div class="stepper-icon w-40px h-40px me-2">
                                <i class="stepper-check fas fa-check"></i>
                                <span class="stepper-number">4</span>
                            </div>
                            <div class="stepper-label">
                                <h3 class="stepper-title mb-0">Virtual Card</h3>
                            </div>
                        </div>
                    </div>

                    <div class="stepper-item mx-3 my-4" data-kt-stepper-element="nav" data-kt-stepper-action="step">
                        <div class="stepper-wrapper d-flex align-items-center">
                            <div class="stepper-icon w-40px h-40px me-2">
                                <i class="stepper-check fas fa-check"></i>
                                <span class="stepper-number">5</span>
                            </div>
                            <div class="stepper-label">
                                <h3 class="stepper-title mb-0">Card Customize</h3>
                            </div>
                        </div>
                    </div>

                    <div class="stepper-item mx-3 my-4" data-kt-stepper-element="nav" data-kt-stepper-action="step">
                        <div class="stepper-wrapper d-flex align-items-center">
                            <div class="stepper-icon w-40px h-40px me-2">
                                <i class="stepper-check fas fa-check"></i>
                                <span class="stepper-number">6</span>
                            </div>
                            <div class="stepper-label">
                                <h3 class="stepper-title mb-0">Done</h3>
                            </div>
                        </div>
                    </div>
                </div>

                <form class="form mx-auto" novalidate="novalidate" id="kt_stepper_example_clickable_form"
                    action="{{ route('user.nfc-card.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="flex-column current" data-kt-stepper-element="content">
                            <div class="col-lg-12">
                                <div class="card flex-grow-1 rounded-0">
                                    <div class="my-15">
                                        <h2 class="text-center mb-0">Select a Dynamic NFC Card Template</h2>
                                        <p class="text-center mb-0">Modify content as needed, even after going live.</p>
                                    </div>
                                    <div
                                        class="centered-card-body card-body d-flex flex-column justify-content-between">
                                        @include('user.pages.nfc-card.partials.nfc_template')
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="flex-column" data-kt-stepper-element="content">
                            <div class="card flex-grow-1 rounded-0">
                                <div class="centered-card-body card-body d-flex flex-column justify-content-between">
                                    @include('user.pages.nfc-card.partials.form')
                                </div>
                            </div>
                        </div>

                        <div class="flex-column" data-kt-stepper-element="content">
                            <div class="card flex-grow-1 rounded-0">
                                <div class="text-center justify-content-center pt-10">
                                    <h2 class="text-center mb-0">Choose NFC Card Design!</h2>
                                </div>
                                <div class="centered-card-body card-body d-flex flex-column justify-content-between">
                                    @include('user.pages.nfc-card.partials.customize')
                                </div>
                            </div>
                        </div>

                        <div class="flex-column " data-kt-stepper-element="content">
                            <div class="card flex-grow-1 rounded-0">
                                <div class="text-center justify-content-center pt-10">
                                    <h2 class="text-center mb-0">Choose Virtual Card Template! <span
                                            class="text-danger">(Required)</span> </h2>
                                </div>
                                <div class="centered-card-body card-body d-flex flex-column justify-content-between">
                                    @include('user.pages.nfc-card.partials.virtualCard')
                                </div>
                            </div>
                        </div>

                        <div class="flex-column" data-kt-stepper-element="content">
                            <div class="card flex-grow-1 rounded-0">
                                <div class="text-center justify-content-center pt-10">
                                    <h2 class="text-center mb-0">Customize Your Virtual Card As Need!</h2>
                                </div>
                                <div class="centered-card-body card-body d-flex flex-column justify-content-between">
                                    @include('user.pages.nfc-card.partials.virtualCardCustomization')
                                </div>
                            </div>
                        </div>

                        <div class="flex-column" data-kt-stepper-element="content">
                            <div class="card flex-grow-1 rounded-0">
                                <div class="card-header text-center">
                                    <div class="pt-15 pb-15 ps-5 w-100">
                                        <h2 class="text-success">Congratulations!</h2>
                                        <p>Your NFC Profile is ready. Wait For Host!</p>
                                    </div>
                                </div>
                                <div class="centered-card-body card-body d-flex flex-column justify-content-between">
                                    <div class="mx-auto d-flex justify-content-center">
                                        <img class="img-fluid"
                                            src="https://i.ibb.co/5nFS23D/documents-filling-office-worker-corporate-employee-item-credit-card-folder-contract-employment-56688.jpg"
                                            alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="d-flex flex-stack py-3 px-3" style="background: white; border-top: 1px solid #eee;">
                        <div class="me-2">
                            <button type="button" class="btn btn-light btn-active-light-primary"
                                data-kt-stepper-action="previous">
                                Back
                            </button>
                        </div>
                        <div>
                            <button type="submit" class="btn btn-primary" data-kt-stepper-action="submit">
                                <span class="indicator-label">Submit</span>
                                <span class="indicator-progress">Please wait... <span
                                        class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                            </button>
                            <button type="button" class="btn btn-primary" data-kt-stepper-action="next">
                                Continue
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="col-lg-4 d-flex flex-column">
            <div class="card flex-grow-1 rounded-0">
                <div class="card-header px-0">
                    <div class="d-flex flex-column justify-content-center align-items-center"
                        style="width: 100%;background: #0098da; border-top-left-radius: 5px;border-top-right-radius: 5px; padding: 15px;">
                        <h3 class="text-white">Preview</h3>
                        <p class="mb-0 text-white">Your Choosen Template</p>
                    </div>
                </div>
                <div class="card-body d-flex flex-column p-0">
                    @include('user.pages.nfc-card.partials.nfc_preview')
                    @include('user.pages.nfc-card.partials.virtual_card_preview')
                </div>
            </div>
        </div>
    </div>
    @push('scripts')
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
            $(document).ready(function() {
                $(".slick-slider").slick({
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    autoplay: true,
                    draggable: false,
                    autoplaySpeed: 2000, // Adjust autoplay speed in milliseconds
                });
            });
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
    @endpush
</x-app-layout>

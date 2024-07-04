@if (session('error'))
    <div class="alert alert-danger">
        {{ session('error') }}
    </div>
@endif
<div class="row g-2" id="columns-container">
    <div class="row py-10">
        <div class="col-lg-2 ">
            <div class="custom-fixed-top">
                <div class="d-flex flex-column flex-md-row rounded border bg-white">
                    @include('nfc.form_partials.tab_trigger')
                </div>
            </div>
        </div>
        <div class="col-lg-10">
            <div class="tab-content bg-white p-5" id="myTabContent">
                <div class="tab-pane fade active show" id="kt_vtab_pane_1" role="tabpanel">
                    <div>
                        <h1 class="text-start">Basic Details</h1>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            @include('nfc.form_partials.general_info')
                        </div>
                    </div>
                </div>

                <div class="tab-pane fade" id="kt_vtab_pane_2" role="tabpanel">
                    <div>
                        <h1 class="text-center">vCard Templates</h1>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            @include('nfc.form_partials.vcard_template')
                        </div>
                    </div>
                </div>

                <div class="tab-pane fade" id="kt_vtab_pane_3" role="tabpanel">
                    <div>
                        <h1 class="text-center">Business Hours</h1>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            @include('nfc.form_partials.business_hours')
                        </div>
                    </div>
                </div>

                <div class="tab-pane fade" id="kt_vtab_pane_5" role="tabpanel">
                    <div>
                        <h1 class="text-center">Services</h1>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            @include('nfc.form_partials.services')
                        </div>
                    </div>
                </div>

                <div class="tab-pane fade" id="kt_vtab_pane_6" role="tabpanel">
                    <div>
                        <h1 class="text-center">Products</h1>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            @include('nfc.form_partials.products')
                        </div>
                    </div>
                </div>

                <div class="tab-pane fade" id="kt_vtab_pane_7" role="tabpanel">
                    <div>
                        <h1 class="text-center">Galleries</h1>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            @include('nfc.form_partials.galleries')
                        </div>
                    </div>
                </div>


                <div class="tab-pane fade" id="kt_vtab_pane_9" role="tabpanel">
                    <div>
                        <h1 class="text-center">Testimonials</h1>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            @include('nfc.form_partials.testimonials')
                        </div>
                    </div>
                </div>

                <div class="tab-pane fade" id="kt_vtab_pane_11" role="tabpanel">
                    <div>
                        <h1 class="text-center">Social
                            links - Website</h1>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            @include('nfc.form_partials.social_links')
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="kt_vtab_pane_16" role="tabpanel">
                    <div>
                        <h1 class="text-center">Settings</h1>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            {{-- @include('nfc.form_partials.setting') --}}
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

@push('scripts')
    <script>
        $(document).ready(function() {
            // Function to match card heights
            function matchCardHeights() {
                var firstCardHeight = $('#first-card').outerHeight();
                $('#second-card').outerHeight(firstCardHeight);
            }


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

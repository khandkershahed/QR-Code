<x-admin-app-layout :title="'QR Code Generate'">
    <div class="row align-items-center">
        <div class="col-lg-8 col-md-7">
            <div class="card mt-10 p-0">
                <div class="card-body p-0">
                    <div class="stepper stepper-pills" id="kt_stepper_example_clickable">
                        <div class="stepper-nav flex-center flex-wrap steaper-header">
                            <div class="stepper-item mx-3 my-4 p-0 current" data-kt-stepper-element="nav"
                                data-kt-stepper-action="step">
                                <div class="stepper-wrapper d-flex align-items-center">
                                    <div class="stepper-icon w-40px h-40px me-2">
                                        <i class="stepper-check fas fa-check"></i>
                                        <span class="stepper-number">1</span>
                                    </div>

                                    <div class="stepper-label">
                                        <h3 class="stepper-title mb-0 pe-3">
                                            Select Type
                                        </h3>
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
                                        <h3 class="stepper-title mb-0 pe-3">
                                            Input Data
                                        </h3>
                                    </div>
                                </div>

                                <div class="stepper-line h-40px"></div>
                            </div>

                            <div class="stepper-item mx-3 my-4 p-0" data-kt-stepper-element="nav"
                                data-kt-stepper-action="step">
                                <div class="stepper-wrapper d-flex align-items-center">
                                    <div class="stepper-icon w-40px h-40px me-2">
                                        <i class="stepper-check fas fa-check"></i>
                                        <span class="stepper-number">3</span>
                                    </div>

                                    <div class="stepper-label">
                                        <h3 class="stepper-title mb-0 pe-3">
                                            Customize
                                        </h3>
                                    </div>
                                </div>

                                <div class="stepper-line h-40px"></div>
                            </div>

                            <div class="stepper-item mx-3 my-4 p-0" data-kt-stepper-element="nav"
                                data-kt-stepper-action="step">
                                <div class="stepper-wrapper d-flex align-items-center">
                                    <div class="stepper-icon w-40px h-40px me-2">
                                        <i class="stepper-check fas fa-check"></i>
                                        <span class="stepper-number">4</span>
                                    </div>

                                    <div class="stepper-label">
                                        <h3 class="stepper-title mb-0 pe-3">
                                            Done
                                        </h3>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <form class="form mx-auto" novalidate="novalidate" action="{{ route('admin.qr-code.store') }}"
                            id="kt_stepper_example_basic_form" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-5">
                                <div class="flex-column current" data-kt-stepper-element="content">
                                    <div class="card">
                                        <div class="row my-5 mt-10">
                                            <h2 class="text-center mb-0">Create a Dynamic QR Code</h2>
                                            <p class="text-center mb-0">Modify content as needed, even after going
                                                live.</p>
                                        </div>
                                        <div class="card-body">
                                            @include('admin.pages.qr-code.partials.qr_type')
                                        </div>
                                    </div>
                                </div>

                                <div class="flex-column" data-kt-stepper-element="content">
                                    <div class="card">
                                        <div class="card-body">
                                            @include('admin.pages.qr-code.partials.form')
                                        </div>
                                    </div>
                                </div>

                                <div class="flex-column" data-kt-stepper-element="content">
                                    <div class="card">
                                        <div class="row text-center justify-content-center mt-10">
                                            <h2 class="text-center mb-0">Choose QR Code Design!</h2>
                                        </div>
                                        <div class="card-body">
                                            @include('admin.pages.qr-code.partials.customize')
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
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="pt-5 pb-5">
                                                        <x-metronic.label for="qr_name"
                                                            class="form-label">{{ __('Enter a name for your QR code') }}</x-metronic.label>
                                                        <x-metronic.input id="qr_name" type="text" name="qr_name"
                                                            :value="old('qr_name')"
                                                            placeholder="Enter a name for your QR code" required />
                                                    </div>
                                                </div>
                                                {{-- <input type="hidden" name="qr_scan_status" value="dynamic"> --}}
                                                <div class="col-lg-12">
                                                    <div class="pt-5 pb-5">
                                                        <x-metronic.label for="status"
                                                            class="form-label">{{ __('Enter a name for your QR code') }}
                                                            <span class="text-danger">*</span></x-metronic.label>
                                                        <select class="form-select" data-control="select2"
                                                            name="qr_scan_status" data-placeholder="Select an option"
                                                            required>
                                                            <option>Select Status</option>
                                                            <option value="static">Static</option>
                                                            <option value="dynamic" selected>Dynamic</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

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
                                        <span class="indicator-label">
                                            Submit
                                        </span>
                                        <span class="indicator-progress">
                                            Please wait... <span
                                                class="spinner-border spinner-border-sm align-middle ms-2"></span>
                                        </span>
                                    </button>

                                    <button type="button" class="btn btn-primary">
                                        Continue
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-5">
            <div class="card mt-10 bg-transparent">
                {{-- position-fixed --}}
                <div class="card-body bg-transparent">
                    <div class="d-flex flex-column justify-content-center align-items-center">
                        {{-- id="generatedQRCodeContainer" --}}
                        <h3>Preview</h3>
                        @include('admin.pages.qr-code.partials.qr_preview')
                        {{-- {!! QrCode::size(220)->eye('left-leaf', 0.1)->eyeColor(0, 255, 255, 255, 0, 0, 0)->eyeColor(1, 222, 18, 222, 222, 18, 222)->eyeColor(2, 222, 18, 222, 222, 18, 222)->style('dot', 0.8)->errorCorrection('H')->generate('Make me into a QrCode!') !!} --}}
                    </div>
                    <a id="downloadLink" href="javascripti:void()" download class="btn btn-light btn-primary w-100"
                        style="display: none;">Download</a>
                </div>
            </div>
        </div>
        <div class="categoryModal">
            @include('admin.pages.qr-code.partials.qrCodeModals')
        </div>
    </div>
    {{-- modals --}}





    @push('scripts')
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
                // Handle delete category
                $(document).on('click', '.delete-category', function(event) {
                    event.preventDefault();

                    if (!confirm('Are you sure you want to delete this category?')) {
                        return;
                    }


                    var categoryId = $(this).data('category-id');
                    var categoryContainer = $('.categoryContainer');
                    var categoryModalContainer = $('.categoryModalContainer');
                    var categoryPreviewContainer = $('.restaurant .preview');

                    $.ajax({
                        type: 'POST',
                        url: '{{ route('admin.restaurant-category.destroy') }}', // Adjust the route as necessary
                        data: {
                            _token: '{{ csrf_token() }}',
                            category_id: categoryId
                        },
                        success: function(response) {
                            alert(response.success);
                            categoryContainer.html(response.categoryContainer);
                            categoryModalContainer.html(response.modalContainer);
                            categoryPreviewContainer.html(response.previewContainer);
                        },
                        error: function(response) {
                            alert('Error deleting category');
                        }
                    });
                });
            });
        </script>
        <script>
            $(document).ready(function() {

                // url: '{{ route('admin.restaurant-category.store') }}',
                function submitCategoryForm(event) {
                    // Prevent the default form submission
                    event.preventDefault();

                    // Get the form element using the event target's form property
                    let form = event.target.closest('form');
                    // let form = $('#categoryCreateForm')[0];
                    var categoryContainer = $('.categoryContainer');
                    var categoryModalContainer = $('.categoryModalContainer');
                    var categoryPreviewContainer = $('.restaurant .preview');
                    // Debugging
                    console.log(form);

                    // Check if form is an HTMLFormElement
                    if (!(form instanceof HTMLFormElement)) {
                        console.error('The form is not an HTMLFormElement.');
                        return;
                    }

                    // Create a FormData object
                    let formData = new FormData(form);

                    // Send the form data using AJAX
                    $.ajax({
                        type: 'POST',
                        url: '{{ route('admin.restaurant-category.store') }}',
                        data: formData,
                        contentType: false,
                        processData: false,
                        success: function(response) {
                            alert(response.success);
                            // Optionally, you can close the modal and refresh part of the page here
                            $('#createCategory').modal('hide');
                            categoryContainer.html(response.categoryContainer);
                            categoryModalContainer.html(response.modalContainer);
                            categoryPreviewContainer.html(response.previewContainer);
                            // Reload part of the page or add the new category to the UI
                        },
                        error: function(response) {
                            // Handle error here
                            let errors = response.responseJSON.errors;
                            let errorMessage = '';
                            for (const [key, value] of Object.entries(errors)) {
                                errorMessage += value + '\n';
                            }
                            alert(errorMessage);
                        }
                    });
                }
                $('#createCategory input[name="submit"]').on('click', submitCategoryForm);
            });
        </script>

        <script>
            // url: '{{ route('admin.restaurant-category.store') }}',
            function submitCategoryEditForm(event) {
                // Prevent the default form submission
                event.preventDefault();
                // Get the form element using the event target's form property
                let form = event.target.closest('form');
                var categoryContainer = $('.categoryContainer');
                var categoryModalContainer = $('.categoryModalContainer');
                var categoryPreviewContainer = $('.restaurant .preview');
                // Debugging
                console.log(form);

                // Check if form is an HTMLFormElement
                if (!(form instanceof HTMLFormElement)) {
                    console.error('The form is not an HTMLFormElement.');
                    return;
                }
                var id = $('input[name="category_id"]').val();
                // Create a FormData object
                let formData = new FormData(form);

                // Send the form data using AJAX
                $.ajax({
                    type: 'POST',
                    url: '{{ route('admin.editCategory') }}',
                    data: formData,
                    contentType: false,
                    processData: false,
                    success: function(response) {
                        alert(response.success);
                        // Optionally, you can close the modal and refresh part of the page here
                        $('.editCategory').modal('hide');
                        categoryContainer.html(response.categoryContainer);
                        categoryModalContainer.html(response.modalContainer);
                        categoryPreviewContainer.html(response.previewContainer);
                        // Reload part of the page or add the new category to the UI
                    },
                    error: function(response) {
                        // Handle error here
                        let errors = response.responseJSON.errors;
                        let errorMessage = '';
                        for (const [key, value] of Object.entries(errors)) {
                            errorMessage += value + '\n';
                        }
                        alert(errorMessage);
                    }
                });
            }
        </script>

        <script>
            $(document).ready(function() {
                // Define a function to handle both click and hover events
                const initiallySelectedValue = $('input[name="qr_type"]:checked').val();
                if (initiallySelectedValue) {
                    $("." + initiallySelectedValue).show();
                }

                function handleQrTypeChange(qrTemplateValue) {
                    $(".qr-card").hide();
                    if (qrTemplateValue) {
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
                }

                // Bind mouseenter and mouseleave events to elements with class qr_type_hover
                $('.qr_type_hover').on({
                    mouseenter: function() {
                        const qrTemplateValue = $(this).find('input[name="qr_type"]').val();
                        if (qrTemplateValue) {
                            handleQrTypeChange(qrTemplateValue);
                        } else {
                            console.error("Invalid qrTemplateValue: ", qrTemplateValue);
                        }
                        // Here you can add additional logic if needed
                    },
                    mouseleave: function() {
                        const initiallySelectedValue = $('input[name="qr_type"]:checked').val();
                        if (initiallySelectedValue) {
                            $(".qr-card").hide();
                            $("." + initiallySelectedValue).show();
                        }
                    }
                });
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
                            qrCodeElement.text(inputValue);
                            if (!inputValue.startsWith('http://') && !inputValue.startsWith('https://')) {
                                inputValue = 'http://' + inputValue;
                            }
                            qrCodeElement.attr('href', inputValue);

                        } else if ($(this).is('input[type="time"]')) {
                            if (inputValue) {
                                $("." + inputName + "_time").show();
                                qrCodeElement.text(inputValue);
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

                    // Show/hide corresponding icon based on input value
                    if (inputValue) {
                        $("." + inputName + "_icon").show();
                    } else {
                        $("." + inputName + "_icon").hide();
                    }
                });
            $('input[name="qr_data_restaurant_logo"],input[name="qr_data_restaurant_bg"],input[name="qr_data_restaurant_name"],input[name="qr_data_restaurant_description"],input[name="qr_data_restaurant_phone"],input[name="qr_data_restaurant_location"]')
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
                            qrCodeElement.text(inputValue);
                            if (!inputValue.startsWith('http://') && !inputValue.startsWith('https://')) {
                                inputValue = 'http://' + inputValue;
                            }
                            qrCodeElement.attr('href', inputValue);

                        } else if ($(this).is('input[type="time"]')) {
                            if (inputValue) {
                                $("." + inputName + "_time").show();
                                qrCodeElement.text(inputValue);
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

                    // Show/hide corresponding icon based on input value
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

        <script>
            // $(document).ready(function() { 2
            // $('kt_stepper_example_basic_form input:not([name="qr_type"]), kt_stepper_example_basic_form input:not([name="qr_data_coupon_code"]),kt_stepper_example_basic_form input:not([name="qr_data_coupon_expire_date"]),kt_stepper_example_basic_form input:not([name="qr_data_coupon_header"]),kt_stepper_example_basic_form input:not([name="qr_data_coupon_message"]),kt_stepper_example_basic_form input:not([name="qr_data_coupon_description_header"]),kt_stepper_example_basic_form input:not([name="qr_data_coupon_description_body"]),kt_stepper_example_basic_form input:not([name="qr_data_coupon_website"]),kt_stepper_example_basic_form input:not([name="qr_data_coupon_company"]),kt_stepper_example_basic_form input:not([name="qr_data_coupon_policy"]),kt_stepper_example_basic_form input:not([name="qr_data_coupon_logo"]) ,kt_stepper_example_basic_form textarea, kt_stepper_example_basic_form select')
            $('#kt_stepper_example_basic_form input, #kt_stepper_example_basic_form textarea, #kt_stepper_example_basic_form select')
                .not(
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
        {{-- Logo Size Encrease & Decrease  --}}
        <script>
            function updateRangeValue(value) {
                document.getElementById('rangeValue').textContent = Math.round(value * 100) + '%';
            }

            // Initialize the range value on page load
            document.addEventListener('DOMContentLoaded', (event) => {
                updateRangeValue(document.getElementById('customRange1').value);
            });
        </script>
        {{-- Pdf Preview  --}}
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
                            pdfPreviewContainer.style.display = 'block';
                            noPdfMessage.style.display = 'none';
                        };
                        fileReader.readAsDataURL(file);
                    } else {
                        pdfPreviewContainer.style.display = 'none';
                        noPdfMessage.style.display = 'block';
                        alert("Please upload a valid PDF file.");
                    }
                });
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

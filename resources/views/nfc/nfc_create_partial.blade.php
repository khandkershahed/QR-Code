<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.5.9/slick-theme.min.css">
<style>
    .wrapperss {
        padding: 70px 0;
    }

    /* Default slide */
    .center-sliders .slick-slide {
        color: #FFF;
        height: 510px;
        margin: 0 15px 0 0;
        display: flex;
        align-items: center;
        justify-content: center;
        transform: scale(0.8);
        transition: all 0.4s ease-in-out;
    }

    .center-sliders .slick-slide,
    .center-sliders .slick-slide[aria-hidden="true"]:not(.slick-cloned)~.slick-cloned[aria-hidden="true"] {
        transform: scale(0.8, 0.8);
        transition: all 0.4s ease-in-out;
    }

    /* Active center slide (You can change anything here for cenetr slide)*/
    .center-sliders .slick-center,
    .center-sliders .slick-slide[aria-hidden="true"]:not([tabindex="-1"])+.slick-cloned[aria-hidden="true"] {
        transform: scale(1.1);
    }

    .center-sliders .slick-current.slick-active {
        transform: scale(1.1);
    }

    .slick-next,
    .slick-prev {
        font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
        z-index: 5;
    }

    .slick-next {
        right: 15px;
    }

    .slick-prev {
        left: 15px;
    }

    .slick-next:before,
    .slick-prev:before {
        color: #000;
        font-size: 26px;
    }
</style>
<div class="row">
    <div class="col-lg-12">
        <div class="card my-10 rounded-0">
            <div class="card-header p-5 align-items-center rounded-0 bg-info m-0">
                <div>
                    <h1 class="mb-0 mt-0 card-title fs-2 text-white">Create New VCard</h1>
                    <p class="text-white mt-2 mb-0">Choose your VCard template or design in this page.</p>
                </div>
            </div>
            <div class="card-body p-0">
                <div class="row">
                    <div class="col-lg-12">
                        @if (strpos(Route::current()->getName(), 'user.') === 0)
                            <form class="virtual_card_create_form form" action="{{ route('user.virtual-card.store') }}"
                                autocomplete="off" enctype="multipart/form-data" method="post"
                                id="virtual_card_create_form">
                            @else
                                <form class="virtual_card_create_form form"
                                    action="{{ route('admin.virtual-card.store') }}" autocomplete="off"
                                    enctype="multipart/form-data" method="post" id="virtual_card_create_form">
                        @endif
                        @csrf
                        <div class="row my-5">
                            <x-metronic.label class="fw-semibold fs-2 mb-2 required text-center">Choose
                                Template</x-metronic.label>
                            <x-vcard.template :templates="[
                                [
                                    'value' => 'template-one',
                                    'image' => 'frontend/images/nfc_template/template_one.jpg',
                                ],
                                [
                                    'value' => 'template-two',
                                    'image' => 'frontend/images/nfc_template/template_two.jpg',
                                ],
                                [
                                    'value' => 'template-three',
                                    'image' => 'frontend/images/nfc_template/template_three.jpg',
                                ],
                                [
                                    'value' => 'template-four',
                                    'image' => 'frontend/images/nfc_template/template_four.jpg',
                                ],
                                [
                                    'value' => 'template-five',
                                    'image' => 'frontend/images/nfc_template/template_five.png',
                                ],
                                [
                                    'value' => 'template-six',
                                    'image' => 'frontend/images/nfc_template/template_six.png',
                                ],
                                [
                                    'value' => 'template-seven',
                                    'image' => 'frontend/images/nfc_template/template_seven.png',
                                ],
                                [
                                    'value' => 'template-eight',
                                    'image' => 'frontend/images/nfc_template/template_eight.png',
                                ],
                                [
                                    'value' => 'template-nine',
                                    'image' => 'frontend/images/nfc_template/template_nine.png',
                                ],
                            ]" />
                        </div>
                        <div class="card bg-white w-100">
                            <div
                                class="card-header p-5 d-flex justify-content-center align-items-center rounded-0 bg-info m-0">
                                <div class="text-center">
                                    <h1 class="mb-0 mt-0 fs-2 text-white">Add V-Card Content!</h1>
                                    <p class="text-white mt-2 mb-0">Add Information to create awesome V-Card.</p>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="fv-row mb-4 col-lg-4">
                                        <x-metronic.label class="required fw-semibold fs-6 mb-2">URL
                                            Alias
                                            <span class="m2-1" data-bs-toggle="tooltip"
                                                aria-label="Your billing numbers will be calculated based on your API method"
                                                data-bs-original-title="Your billing numbers will be calculated based on your API method"
                                                data-kt-initialized="1">
                                                <i class="fa-solid fa-circle-info fs-7"></i></i>
                                            </span>
                                        </x-metronic.label>
                                        <div class="input-group">
                                            <x-metronic.input type="text"
                                                class="form-control form-control-solid form-control-sm" name="url_alias"
                                                id="basic-url" required aria-describedby="basic-addon3"
                                                placeholder="my-vcard-page-url" :value="old('url_alias')" />
                                        </div>
                                        <span id="url_alias_feedback" class="text-danger" style="display: none;"></span>
                                    </div>
                                    <div class="fv-row mb-4 col-lg-4">
                                        <x-metronic.label class="required fw-semibold fs-6 mb-2">VCard
                                            Name</x-metronic.label>
                                        <div class="input-group">
                                            <x-metronic.input type="text"
                                                class="form-control form-control-solid form-control-sm"
                                                name="vcard_name" placeholder="Enter VCard Name" required
                                                :value="old('vcard_name')" />
                                        </div>
                                    </div>
                                    <div class="fv-row mb-5 col-lg-4">
                                        <x-metronic.label class="fw-semibold fs-12 mb-2">Occupation</x-metronic.label>
                                        <x-metronic.input type="text"
                                            class="form-control form-control-solid form-control-sm" name="designation"
                                            placeholder="Enter Occupation Name" :value="old('designation')" />
                                    </div>
                                    <div class="col-lg-6 mb-5">
                                        <x-metronic.label for="profile_image"
                                            class="fw-semibold fs-6 mb-2">{{ __('Profile Image') }}</x-metronic.label>
                                        <x-metronic.file-input id="profile_image" name="profile_image"
                                            class="form-control form-control-solid form-control-sm"
                                            :value="old('profile_image')"></x-metronic.file-input>
                                    </div>
                                    <div class="col-lg-6 mb-5">
                                        <x-metronic.label for="banner_image"
                                            class="fw-semibold fs-6 mb-2">{{ __('Cover Image ') }}</x-metronic.label>
                                        <x-metronic.file-input id="banner_image" name="banner_image"
                                            class="form-control form-control-solid form-control-sm"
                                            :value="old('banner_image')"></x-metronic.file-input>
                                    </div>
                                    <div class="col-lg-12 mb-7">
                                        <x-metronic.label for="logo"
                                            class="fw-semibold fs-6 mb-2">{{ __('Description') }}</x-metronic.label>
                                        <textarea name="bio_description" class="form-control form-control-solid form-control-sm" rows="7"
                                            placeholder="Enter Your Description">{{ old('bio_description') }}</textarea>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="d-flex justify-content-end">
                                            <button type="submit" class="virtual_card_create_form_submit btn btn-info"
                                                disabled>
                                                <span class="indicator-label">
                                                    Save & Continue <i class="fa-solid fa-arrow-right-long ps-3"></i>
                                                </span>
                                                <span class="indicator-progress">
                                                    Please wait...
                                                    <span
                                                        class="spinner-border spinner-border-sm align-middle ms-2"></span>
                                                </span>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@push('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const forms = document.querySelectorAll('.virtual_card_create_form');

            forms.forEach((form) => {
                // Init form validation rules
                var validator = FormValidation.formValidation(
                    form, {
                        fields: {
                            'vcard_name': {
                                validators: {
                                    notEmpty: {
                                        message: 'Vcard Name Must Need'
                                    }
                                }
                            },
                        },
                        plugins: {
                            trigger: new FormValidation.plugins.Trigger(),
                            bootstrap: new FormValidation.plugins.Bootstrap5({
                                rowSelector: '.fv-row',
                                eleInvalidClass: '',
                                eleValidClass: ''
                            })
                        }
                    }
                );

                // Submit button handler
                const submitButton = form.querySelector('.virtual_card_create_form_submit');
                submitButton.addEventListener('click', function(e) {
                    // Prevent default button action
                    e.preventDefault();

                    // Validate form before submit
                    if (validator) {
                        validator.validate().then(function(status) {
                            console.log('validated!');

                            if (status == 'Valid') {
                                // Show loading indication
                                submitButton.setAttribute('data-kt-indicator', 'on');

                                // Disable button to avoid multiple clicks
                                submitButton.disabled = true;

                                // Simulate form submission
                                setTimeout(function() {
                                    // Remove loading indication
                                    submitButton.removeAttribute(
                                        'data-kt-indicator');

                                    // Enable button
                                    submitButton.disabled = false;

                                    // Show popup confirmation
                                    Swal.fire({
                                        text: "Form has been successfully submitted!",
                                        icon: "success",
                                        buttonsStyling: false,
                                        confirmButtonText: "Ok, got it!",
                                        customClass: {
                                            confirmButton: "btn btn-primary"
                                        }

                                    }).then(function() {
                                        console.log("Swal closed!");
                                        form.submit();
                                    });
                                }, 2000);
                            } else {
                                Swal.fire({
                                    text: "Please fix the errors in the form before submitting.",
                                    icon: "error",
                                    buttonsStyling: false,
                                    confirmButtonText: "Ok, got it!",
                                    customClass: {
                                        confirmButton: "btn btn-primary"
                                    }
                                });
                            }
                        }).catch(function(error) {
                            console.error('Validation error:', error);
                            Swal.fire({
                                text: "An unexpected error occurred. Please try again.",
                                icon: "error",
                                buttonsStyling: false,
                                confirmButtonText: "Ok, got it!",
                                customClass: {
                                    confirmButton: "btn btn-primary"
                                }
                            });
                        });
                    }
                });
            });
        });

        $(document).ready(function() {
            let urlInput = $('input[name="url_alias"]');
            let feedbackElement = $('#url_alias_feedback');
            let submitButton = $('.virtual_card_create_form_submit');

            function validateUrlAlias(inputValue) {
                return /^[a-zA-Z0-9-]+$/.test(inputValue) && !/--/.test(inputValue) && !inputValue.endsWith('-');
            }

            function showError(message) {
                feedbackElement.text(message).show();
                urlInput.addClass('is-invalid');
                submitButton.prop('disabled', true);
            }

            function hideError() {
                feedbackElement.text('').hide();
                urlInput.removeClass('is-invalid');
                submitButton.prop('disabled', false);
            }

            urlInput.on('keyup input', function() {
                let urlAlias = $(this).val().trim();
                let currentRecordId = $(this).data('id'); // Optional for update, can be empty for create

                if (urlAlias.length > 0) {
                    if (!validateUrlAlias(urlAlias)) {
                        showError('Only plain letters, numbers, and non-consecutive hyphens are allowed.');
                        return;
                    }

                    let requestData = {
                        url_alias: urlAlias
                    };
                    if (currentRecordId) {
                        requestData.id = currentRecordId; // Include id only if it's an update
                    }

                    $.ajax({
                        url: '/check-url-alias',
                        type: 'GET',
                        data: requestData,
                        success: function(response) {
                            if (response.is_unique) {
                                hideError();
                            } else {
                                showError(
                                    'This URL alias is already taken. Please choose another one.'
                                );
                            }
                        },
                        error: function(xhr, status, error) {
                            console.error(error);
                            showError('An error occurred while checking the URL alias.');
                        }
                    });
                } else {
                    hideError();
                }
            });

            $('#basic-url').on('keypress', function(event) {
                let charCode = event.which || event.keyCode;
                let charStr = String.fromCharCode(charCode);
                let inputValue = $(this).val();

                if (!/^[a-zA-Z0-9]$/.test(charStr) && (charStr !== '-' || inputValue.endsWith('-') ||
                        inputValue.includes('--'))) {
                    event.preventDefault();
                    showError('Only plain letters, numbers, and non-consecutive hyphens are allowed.');
                } else {
                    hideError();
                }
            });

            $('#generalInfoForm').on('submit', function(event) {
                let inputValue = $('#basic-url').val().trim();
                if (!validateUrlAlias(inputValue)) {
                    event.preventDefault();
                    showError(
                        'Please enter a valid alias. Only letters, numbers, and non-consecutive hyphens are allowed.'
                    );
                }
            });
        });
    </script>
    <script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script>
        $(document).ready(function() {
            $('.center-sliders').slick({
                slidesToShow: 5,
                slidesToScroll: 1,
                centerMode: true,
                arrows: true,
                dots: false,
                speed: 300,
                centerPadding: '20px',
                infinite: true,
                autoplaySpeed: 5000,
                autoplay: true,
                responsive: [{
                        breakpoint: 1200, // Screens smaller than 1200px
                        settings: {
                            slidesToShow: 4,
                            slidesToScroll: 1,
                            centerMode: true
                        }
                    },
                    {
                        breakpoint: 992, // Screens smaller than 992px
                        settings: {
                            slidesToShow: 3,
                            slidesToScroll: 1,
                            centerMode: false
                        }
                    },
                    {
                        breakpoint: 768, // Screens smaller than 768px
                        settings: {
                            slidesToShow: 2,
                            slidesToScroll: 1,
                            centerMode: false
                        }
                    },
                    {
                        breakpoint: 576, // Screens smaller than 576px
                        settings: {
                            slidesToShow: 1,
                            slidesToScroll: 1,
                            centerMode: false
                        }
                    }
                ]
            });
        });
    </script>
@endpush

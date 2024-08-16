<div class="row py-15">
    <div class="col-lg-12">
        <div class="card rounded-0">
            <div class="card-header d-flex align-items-center" style="background: #7239e9;">
                <h2 class="text-center mb-0 text-white">Create New VCard</h2>
            </div>
            <div class="card-body ">
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
                        <div class="row mb-3">
                            <x-metronic.label class="fw-semibold fs-12 mb-2 required">Choose Template</x-metronic.label>
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
                            ]" />

                        </div>
                        <div class="row">
                            <div class="col-lg-12 mb-5">
                                <div class="row">
                                    <div class="fv-row mb-4 col-lg-5">
                                        <x-metronic.label class="required fw-semibold fs-6 mb-2">URL
                                            Alias
                                            <span class="m2-1" data-bs-toggle="tooltip"
                                                aria-label="Your billing numbers will be calculated based on your API method"
                                                data-bs-original-title="Your billing numbers will be calculated based on your API method"
                                                data-kt-initialized="1">
                                                <i class="fa-solid fa-circle-info fs-7"></i><span
                                                    class="path1"></span><span class="path2"></span><span
                                                    class="path3"></span></i> </span>
                                        </x-metronic.label>
                                        <div class="input-group">
                                            <x-metronic.input type="text"
                                                class="form-control form-control-solid form-control-sm" name="url_alias"
                                                id="basic-url" required aria-describedby="basic-addon3"
                                                placeholder="my-vcard-page-url" :value="old('url_alias')" />
                                        </div>
                                        <span id="url_alias_feedback" class="text-danger" style="display: none;"></span>
                                    </div>
                                    <div class="fv-row mb-4 col-lg-7">
                                        <x-metronic.label class="required fw-semibold fs-6 mb-2">VCard
                                            Name</x-metronic.label>
                                        <div class="input-group">
                                            <x-metronic.input type="text"
                                                class="form-control form-control-solid form-control-sm"
                                                name="vcard_name" placeholder="Enter VCard Name" required
                                                :value="old('vcard_name')" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-5">
                                <div class="row">
                                    <div class="fv-row mb-5 col-lg-12">
                                        <x-metronic.label class="fw-semibold fs-12 mb-2">Occupation</x-metronic.label>
                                        <x-metronic.input type="text"
                                            class="form-control form-control-solid form-control-sm" name="designation"
                                            placeholder="Enter Occupation Name" :value="old('designation')" />
                                    </div>
                                    <div class="col-lg-12 mb-5">
                                        <x-metronic.label for="profile_image"
                                            class="fw-semibold fs-6 mb-2">{{ __('Profile Image') }}</x-metronic.label>
                                        <x-metronic.file-input id="profile_image" name="profile_image"
                                            class="form-control form-control-solid form-control-sm"
                                            :value="old('profile_image')"></x-metronic.file-input>
                                    </div>
                                    <div class="col-lg-12 mb-5">
                                        <x-metronic.label for="banner_image"
                                            class="fw-semibold fs-6 mb-2">{{ __('Cover Image ') }}</x-metronic.label>
                                        <x-metronic.file-input id="banner_image" name="banner_image"
                                            class="form-control form-control-solid form-control-sm"
                                            :value="old('banner_image')"></x-metronic.file-input>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-7">
                                <div class="col-lg-12 mb-7">
                                    <x-metronic.label for="logo"
                                        class="fw-semibold fs-6 mb-2">{{ __('Description') }}</x-metronic.label>
                                    <textarea name="bio_description" class="form-control form-control-solid form-control-sm" rows="7">{{ old('bio_description') }}</textarea>
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="virtual_card_create_form_submit btn btn-primary" disabled>
                            <span class="indicator-label">
                                <i class="fa-solid fa-door-open"></i> Save
                            </span>
                            <span class="indicator-progress">
                                Please wait... <span class="spinner-border spinner-border-sm align-middle ms-2"></span>
                            </span>
                        </button>
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

            // URL Alias uniqueness check
            // $('input[name="url_alias"]').on('keyup', function() {
            //     let urlAlias = $(this).val();
            //     let feedbackElement = $('#url_alias_feedback');

            //     if (urlAlias.length > 0) {
            //         $.ajax({
            //             url: '/check-url-alias', // The route to check the uniqueness
            //             type: 'GET',
            //             data: {
            //                 url_alias: urlAlias
            //             },
            //             success: function(response) {
            //                 if (response.is_unique) {
            //                     feedbackElement.hide();
            //                     $('.virtual_card_create_form_submit').prop('disabled', false);
            //                 } else {
            //                     feedbackElement.text(
            //                         'This URL alias is already taken. Please choose another one.'
            //                     );
            //                     feedbackElement.show();
            //                     feedbackElement.addClass('is-invalid');
            //                     $('.virtual_card_create_form_submit').prop('disabled', true);
            //                 }
            //             },
            //             error: function(xhr, status, error) {
            //                 console.error(error);
            //                 feedbackElement.text(
            //                     'An error occurred while checking the URL alias.');
            //                 feedbackElement.show();
            //             }
            //         });
            //     } else {
            //         feedbackElement.hide();
            //     }
            // });
        });

        // $(document).ready(function() {
        //     function validateUrlAlias() {
        //         var inputValue = $('#basic-url').val().trim();
        //         var isValid = /^[a-zA-Z0-9-]+$/.test(inputValue) && !/--/.test(inputValue);

        //         if (!isValid) {
        //             $('#url_alias_feedback').text(
        //                 'Only plain letters, numbers, and non-consecutive hyphens are allowed.').show();
        //             $('#basic-url').addClass('is-invalid');
        //             $('.virtual_card_create_form_submit').prop('disabled', true);
        //         } else {
        //             $('#url_alias_feedback').text('').hide();
        //             $('#basic-url').removeClass('is-invalid');
        //             if (inputValue !== '') {
        //                 $('.virtual_card_create_form_submit').prop('disabled', false);
        //             } else {
        //                 $('.virtual_card_create_form_submit').prop('disabled', true);
        //             }
        //         }
        //     }

        //     $('#basic-url').on('keypress', function(event) {
        //         var charCode = event.which || event.keyCode;
        //         var charStr = String.fromCharCode(charCode);
        //         var inputValue = $(this).val();

        //         // Allow only letters, numbers, and hyphens, but no consecutive hyphens
        //         if (!/^[a-zA-Z0-9]$/.test(charStr) && (charStr !== '-' || inputValue.endsWith('-'))) {
        //             event.preventDefault();
        //             $('#url_alias_feedback').text(
        //                 'Only plain letters, numbers, and non-consecutive hyphens are allowed.').show();
        //             $(this).addClass('is-invalid');
        //             $('.virtual_card_create_form_submit').prop('disabled', true);
        //         } else {
        //             $('#url_alias_feedback').text('').hide();
        //             $(this).removeClass('is-invalid');
        //             validateUrlAlias();
        //         }
        //     });

        //     $('#basic-url').on('input', validateUrlAlias);

        //     // Optional: Validate on form submit to prevent invalid submissions
        //     $('.product_form').on('submit', function(event) {
        //         var inputValue = $('#basic-url').val().trim();
        //         var isValid = /^[a-zA-Z0-9-]+$/.test(inputValue) && !/--/.test(inputValue);

        //         if (!isValid) {
        //             event.preventDefault(); // Prevent form submission
        //             $('#url_alias_feedback').text(
        //                 'Please enter a valid alias. Only letters, numbers, and non-consecutive hyphens are allowed.'
        //             ).show();
        //             $('#basic-url').addClass('is-invalid');
        //         }
        //     });
        // });

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
@endpush

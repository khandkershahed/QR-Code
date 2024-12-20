<form class="general_info_form form" id="generalInfoForm" method="POST" action="{{ route('nfc.general_info.add') }}"
    autocomplete="off" enctype="multipart/form-data">
    @csrf
    <input type="hidden" name="card_id" value="{{ $nfc_card->id }}">
    <div class="row">
        <div class="col-lg-12 mb-5">
            <div class="row">
                <div class="fv-row mb-4 col-lg-5">
                    <x-metronic.label class="required fw-semibold fs-6 mb-2">Page Name/URL
                        Alias <span class="m2-1" data-bs-toggle="tooltip"
                            aria-label="Enter a unique alias for your URL. This alias will be used as the custom URL for your vCard page. Make sure it is simple and easy to remember."
                            data-bs-original-title="Enter a unique alias for your URL. This alias will be used as the custom URL for your vCard page. Make sure it is simple and easy to remember."
                            data-kt-initialized="1">
                            <i class="fa-solid fa-circle-info fs-7"></i><span class="path1"></span><span
                                class="path2"></span><span class="path3"></span></i> </span></x-metronic.label>
                    <div class="input-group">
                        <x-metronic.input type="text" class="form-control form-control-solid form-control-sm"
                            name="url_alias" id="basic-url" required aria-describedby="basic-addon3"
                            placeholder="my-vcard-page-url" :value="optional($nfc_card)->url_alias" />
                    </div>
                    <span id="url_alias_feedback" class="text-danger" style="display: none;"></span>
                </div>
                <div class="fv-row mb-4 col-lg-7">
                    <x-metronic.label class="required fw-semibold fs-6 mb-2">VCard
                        Name</x-metronic.label>
                    <div class="input-group">
                        <x-metronic.input type="text" class="form-control form-control-solid form-control-sm"
                            name="vcard_name" placeholder="Enter VCard Name" required :value="optional($nfc_card)->vcard_name" />
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-5">
            <div class="row">
                <div class="fv-row mb-5 col-lg-12">
                    <x-metronic.label class="fw-semibold fs-12 mb-2">Occupation</x-metronic.label>
                    <x-metronic.input type="text" class="form-control form-control-solid form-control-sm"
                        name="designation" placeholder="Enter Occupation Name" :value="optional($nfc_card)->designation" />
                </div>
                <div class="col-lg-12 mb-5">
                    <x-metronic.label for="profile_image"
                        class="fw-semibold fs-6 mb-2">{{ __('Profile Image') }}</x-metronic.label>
                    <x-metronic.file-input id="profile_image" name="profile_image"
                        class="form-control form-control-solid form-control-sm" :source="optional($nfc_card)->profile_image
                            ? asset('storage/nfc/' . optional($nfc_card)->profile_image)
                            : ''" :value="optional($nfc_card)->profile_image">
                    </x-metronic.file-input>

                </div>
                <div class="col-lg-12 mb-5">
                    <x-metronic.label for="banner_image"
                        class="fw-semibold fs-6 mb-2">{{ __('Cover Image ') }}</x-metronic.label>
                    <x-metronic.file-input id="banner_image" name="banner_image"
                        class="form-control form-control-solid form-control-sm" :source="optional($nfc_card)->banner_image
                            ? asset('storage/nfc/' . optional($nfc_card)->banner_image)
                            : ''"
                        :value="optional($nfc_card)->banner_image"></x-metronic.file-input>
                </div>
            </div>
        </div>
        <div class="col-lg-7">
            <div class="col-lg-12 mb-7">
                <x-metronic.label for="logo"
                    class="fw-semibold fs-6 mb-2">{{ __('Description') }}</x-metronic.label>
                <textarea name="bio_description" class="form-control form-control-solid form-control-sm" rows="12">{{ optional($nfc_card)->bio_description }}</textarea>
            </div>
        </div>
    </div>
    <div class="separator separator-dashed separator-content border-info my-15 fw-bold">
        <i class="fa-solid fa-diamond fs-1 text-info"></i><span class="fs-2 px-3">Details</span><i
            class="fa-solid fa-diamond fs-1 text-info"></i>
    </div>
    <div class="row">
        <div class="fv-row col-lg-4 col-6 mb-4">
            <x-metronic.label class="required fw-semibold fs-6 mb-2">First
                Name</x-metronic.label>
            <x-metronic.input type="text" class="form-control form-control-solid form-control-sm" name="first_name"
                :value="optional($nfc_card->nfcData)->first_name" placeholder="Jone Robert" />
        </div>
        <div class="fv-row col-lg-4 col-6 mb-4">
            <x-metronic.label class="required fw-semibold fs-6 mb-2">Last
                Name</x-metronic.label>
            <x-metronic.input type="text" class="form-control form-control-solid form-control-sm" name="last_name"
                :value="optional($nfc_card->nfcData)->last_name" placeholder="Washington" />
        </div>
        <div class="fv-row col-lg-4 col-6 mb-4">
            <x-metronic.label class="required fw-semibold fs-6 mb-2">Email</x-metronic.label>
            <x-metronic.input type="email" class="form-control form-control-solid form-control-sm"
                name="email_personal" :value="optional($nfc_card->nfcData)->email_personal" placeholder="Washington@maill.com" />
        </div>
        <div class="fv-row col-lg-4 col-6 mb-4">
            <x-metronic.label class="fw-semibold fs-6 mb-2">Alternative
                Email</x-metronic.label>
            <x-metronic.input type="email" class="form-control form-control-solid form-control-sm" name="email_work"
                :value="optional($nfc_card->nfcData)->email_work" placeholder="Washington@maill.com" />
        </div>
        <div class="fv-row col-lg-4 col-6 mb-4">
            <x-metronic.label class="required fw-semibold fs-6 mb-2">Phone</x-metronic.label>
            <x-metronic.input type="text" class="form-control form-control-solid form-control-sm"
                name="phone_personal" :value="optional($nfc_card->nfcData)->phone_personal" placeholder="(+1 05)" />
        </div>
        <div class="fv-row col-lg-4 col-6 mb-4">
            <x-metronic.label class="fw-semibold fs-6 mb-2">Alternative
                Phone</x-metronic.label>
            <x-metronic.input type="text" class="form-control form-control-solid form-control-sm"
                name="phone_work" :value="optional($nfc_card->nfcData)->phone_work" placeholder="(+1 05)" />
        </div>
        <div class="fv-row col-lg-3 col-6 mb-4">
            <x-metronic.label class="fw-semibold fs-6 mb-2">Location URL</x-metronic.label>
            <x-metronic.input type="text" class="form-control form-control-solid form-control-sm"
                name="location_url" :value="optional($nfc_card->nfcData)->location_url" placeholder="Enter Location URl " />
        </div>
        <div class="fv-row col-lg-3 col-6 mb-4">
            <x-metronic.label class="fw-semibold fs-6 mb-2">Date Of
                Birth</x-metronic.label>
            <x-metronic.input type="date" class="form-control form-control-solid form-control-sm"
                name="date_of_birth" :value="optional($nfc_card->nfcData)->date_of_birth" placeholder="Enter Date Of Birth " />
        </div>
        <div class="fv-row col-lg-3 col-6 mb-4">
            <x-metronic.label class="fw-semibold fs-6 mb-2">Company</x-metronic.label>
            <x-metronic.input type="text" class="form-control form-control-solid form-control-sm"
                name="company_name" :value="optional($nfc_card->nfcData)->company_name" placeholder="Enter Company Name " />
        </div>
        <div class="fv-row col-lg-3 col-6 mb-4">
            <x-metronic.label class="fw-semibold fs-6 mb-2">Job
                Title</x-metronic.label>
            <x-metronic.input type="text" class="form-control form-control-solid form-control-sm" name="job_title"
                :value="optional($nfc_card->nfcData)->job_title" placeholder="Enter Job Title " />
        </div>
        <div class="fv-row col-lg-12 col-12 mb-4">
            <x-metronic.label for="location" class="fw-semibold fs-6 mb-2">{{ __('Location') }}</x-metronic.label>
            <textarea name="location" class="form-control form-control-solid form-control-sm" rows="6">{{ optional($nfc_card)->location }}</textarea>
        </div>
    </div>

    <div class="d-flex justify-content-end">
        <button type="submit" class="kt_docs_formvalidation_text_submit btn btn-info mt-5" id="submitBtn">
            <span class="indicator-label">
                Save & Continue <i class="fa-solid fa-arrow-right-long"></i>
            </span>
            <span class="indicator-progress" style="display: none;">
                Please wait... <span class="spinner-border spinner-border-sm align-middle ms-2"></span>
            </span>
        </button>
    </div>
</form>

@push('scripts')
    <script>
        $(document).ready(function() {
            let urlInput = $('input[name="url_alias"]');
            let feedbackElement = $('#url_alias_feedback');
            let submitButton = $('.kt_docs_formvalidation_text_submit');
            // Assume the input has a data-id attribute for the current record's ID

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
                let card_id = $('input[name="card_id"]').val().trim();

                if (urlAlias.length > 0) {
                    if (!validateUrlAlias(urlAlias)) {
                        showError('Only plain letters, numbers, and non-consecutive hyphens are allowed.');
                        return;
                    }

                    $.ajax({
                        url: '/check-url-alias',
                        type: 'GET',
                        data: {
                            url_alias: urlAlias,
                            card_id: card_id // Pass the current record ID to the server
                        },
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

    <script>
        function attachGeneralInfoFormSubmitHandler() {
            // Detach any existing event handler to prevent multiple bindings
            $('#generalInfoForm').off('submit').on('submit', function(event) {
                event.preventDefault(); // Prevent default form submission

                var form = $(this);
                var url = form.attr('action');
                var formData = new FormData(form[0]);
                var submitButton = form.find('.kt_docs_formvalidation_text_submit');
                var isValid = true;

                // Remove any existing error messages and red borders
                form.find('.text-danger').hide().text('');
                form.find('.form-control').removeClass('is-invalid');

                // Validate required fields
                form.find(
                        '[name="url_alias"], [name="vcard_name"], [name="first_name"], [name="last_name"], [name="email_personal"]'
                    )
                    .each(function() {
                        var fieldValue = $(this).val().trim();
                        if (!fieldValue) {
                            // Show error message for the current field
                            $(this).addClass('is-invalid');
                            $(this).after('<p class="error-message text-danger">This field is required.</p>');
                            isValid = false;
                        }
                    });

                if (isValid) {
                    // Disable the submit button to prevent multiple submissions
                    submitButton.prop('disabled', true).addClass('disabled');

                    $.ajax({
                        type: 'POST',
                        url: url,
                        data: formData,
                        processData: false,
                        contentType: false,
                        beforeSend: function() {
                            submitButton.find('.indicator-label').hide();
                            submitButton.find('.indicator-progress').show();
                        },
                        success: function(response) {
                            if (response.general_info_view) {
                                // Update form with new values
                                $('.general_info_container').html(response.general_info_view);
                                toastr.success('Data saved successfully!', 'Success');
                                // Reattach the event handler to the new form
                                attachGeneralInfoFormSubmitHandler();
                            } else {
                                toastr.error('Unexpected response format.', 'Error');
                            }
                        },
                        error: function(xhr) {
                            let errors = xhr.responseJSON.errors;
                            for (let key in errors) {
                                $(`#${key}_feedback`).text(errors[key][0]).show();
                            }
                            toastr.error('An error occurred while saving data.', 'Error');
                        },
                        complete: function() {
                            submitButton.prop('disabled', false).removeClass('disabled');
                            submitButton.find('.indicator-label').show();
                            submitButton.find('.indicator-progress').hide();
                        }
                    });
                } else {
                    Swal.fire({
                        text: 'Some input fields are not filled up!',
                        icon: 'error',
                        buttonsStyling: false,
                        confirmButtonText: 'Ok, got it!',
                        customClass: {
                            confirmButton: 'btn btn-primary'
                        }
                    });
                }
            });

            // Optional: Hide error message and remove red border on input change
            $('.general_info_form input, .general_info_form select').off('input change').on('input change', function() {
                $(this).removeClass('is-invalid');
                $(this).next('.text-danger').hide().text('');
            });
        }

        $(document).ready(function() {
            attachGeneralInfoFormSubmitHandler();
        });
    </script>
@endpush

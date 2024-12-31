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
                            placeholder="my-vcard-page-url" :value="optional($nfc_card)->url_alias" disabled/>
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
        <i class="fa-solid fa-diamond fs-1 text-info"></i><span class="fs-2 px-3">Information</span><i
            class="fa-solid fa-diamond fs-1 text-info"></i>
    </div>
    <div class="row">
        <div class="fv-row col-lg-3 col-6 mb-4">
            <x-metronic.label class="required fw-semibold fs-6 mb-2">First
                Name</x-metronic.label>
            <x-metronic.input type="text" class="form-control form-control-solid form-control-sm" name="first_name"
                :value="optional($nfc_card->nfcData)->first_name" placeholder="Jone Robert" required />
        </div>
        <div class="fv-row col-lg-3 col-6 mb-4">
            <x-metronic.label class="required fw-semibold fs-6 mb-2">Last
                Name</x-metronic.label>
            <x-metronic.input type="text" class="form-control form-control-solid form-control-sm" name="last_name"
                :value="optional($nfc_card->nfcData)->last_name" placeholder="Washington" required />
        </div>
        <div class="fv-row col-lg-3 col-6 mb-4">
            <x-metronic.label class="required fw-semibold fs-6 mb-2">Email</x-metronic.label>
            <x-metronic.input type="email" class="form-control form-control-solid form-control-sm"
                name="email_personal" :value="optional($nfc_card->nfcData)->email_personal" placeholder="Washington@maill.com" required />
        </div>
        <div class="fv-row col-lg-3 col-6 mb-4">
            <x-metronic.label class="fw-semibold fs-6 mb-2">Alternative
                Email</x-metronic.label>
            <x-metronic.input type="email" class="form-control form-control-solid form-control-sm" name="email_work"
                :value="optional($nfc_card->nfcData)->email_work" placeholder="Washington@maill.com" />
        </div>
        <div class="fv-row col-lg-3 col-6 mb-4">
            <x-metronic.label class="required fw-semibold fs-6 mb-2">Phone (Personal)</x-metronic.label>
            <x-metronic.input type="text" class="form-control form-control-solid form-control-sm"
                name="phone_personal" :value="optional($nfc_card->nfcData)->phone_personal" placeholder="(+1 05)" required />
        </div>
        <div class="fv-row col-lg-3 col-6 mb-4">
            <x-metronic.label class="fw-semibold fs-6 mb-2">FAX Number</x-metronic.label>
            <x-metronic.input type="text" class="form-control form-control-solid form-control-sm"
                name="fax" :value="optional($nfc_card->nfcData)->fax" placeholder="Your Fax Number" />
        </div>

        <div class="fv-row col-lg-3 col-6 mb-4">
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
        <div class="fv-row col-lg-4 col-6 mb-4">
            <x-metronic.label class="fw-semibold fs-6 mb-2">Date Of
                Birth</x-metronic.label>
            <x-metronic.input type="date" class="form-control form-control-solid form-control-sm"
                name="date_of_birth" :value="optional($nfc_card->nfcData)->date_of_birth" placeholder="Enter Date Of Birth " />
        </div>
        <div class="fv-row col-lg-4 col-6 mb-4">
            <x-metronic.label class="fw-semibold fs-6 mb-2">Company</x-metronic.label>
            <x-metronic.input type="text" class="form-control form-control-solid form-control-sm"
                name="company_name" :value="optional($nfc_card->nfcData)->company_name" placeholder="Enter Company Name " />
        </div>
        <div class="fv-row col-lg-4 col-6 mb-4">
            <x-metronic.label class="fw-semibold fs-6 mb-2">Job
                Title</x-metronic.label>
            <x-metronic.input type="text" class="form-control form-control-solid form-control-sm" name="job_title"
                :value="optional($nfc_card->nfcData)->job_title" placeholder="Enter Job Title " />
        </div>
        <div class="fv-row col-lg-12 col-12 mb-4">
            <x-metronic.label for="location"
                class="fw-semibold fs-6 mb-2">{{ __('Location / Address') }}</x-metronic.label>
            <textarea name="location" class="form-control form-control-solid form-control-sm" rows="2">{{ optional($nfc_card->nfcData)->location }}</textarea>
        </div>
        {{-- <form class="social_links_form form" method="POST" action="{{ route('nfc.social_links.add') }}" autocomplete="off"
    enctype="multipart/form-data">
    @csrf
    <input type="hidden" name="card_id" value="{{ $nfc_card->id }}"> --}}
        <div class="separator separator-dashed separator-content border-info my-15 fw-bold">
            <i class="fa-solid fa-diamond fs-1 text-info"></i><span class="fs-2 px-3">Social</span><i
                class="fa-solid fa-diamond fs-1 text-info"></i>
        </div>
        <div class="fv-row col-lg-4 mb-7">
            <x-metronic.label class="fw-semibold fs-6 mb-2"><i class="fs-3 fa-solid fa-globe pe-2"></i>WebSite
                URL</x-metronic.label>
            <x-metronic.input type="text" name="website_url"
                value="{{ optional($nfc_card->nfcData)->website_url }}"
                class="form-control form-control-solid mb-3 mb-lg-0" placeholder="WebSite URL" />
        </div>
        <div class="fv-row col-lg-4 mb-7">
            <x-metronic.label class="fw-semibold fs-6 mb-2"><i class="fs-3 fa-brands fa-facebook pe-2"></i>Facebook
                URL</x-metronic.label>
            <x-metronic.input type="text" name="facebook_url"
                value="{{ optional($nfc_card->nfcData)->facebook_url }}"
                class="form-control form-control-solid mb-3 mb-lg-0" placeholder="Facebook URL" />
        </div>
        <div class="fv-row col-lg-4 mb-7">

            <x-metronic.label class="fw-semibold fs-6 mb-2"><i class="fs-3 fa-brands fa-twitter pe-2"></i>Twitter
                URL</x-metronic.label>
            <x-metronic.input type="text" name="twitter_url"
                value="{{ optional($nfc_card->nfcData)->twitter_url }}"
                class="form-control form-control-solid mb-3 mb-lg-0" placeholder="Twitter URL" />
        </div>
        <div class="fv-row col-lg-4 mb-7">

            <x-metronic.label class="fw-semibold fs-6 mb-2"><i class="fs-3 fa-brands fa-instagram pe-2"></i>Instagram
                URL</x-metronic.label>
            <x-metronic.input type="text" name="instagram_url"
                value="{{ optional($nfc_card->nfcData)->instagram_url }}"
                class="form-control form-control-solid mb-3 mb-lg-0" placeholder="Instagram URL" />
        </div>
        <div class="fv-row col-lg-4 mb-7">

            <x-metronic.label class="fw-semibold fs-6 mb-2"><i class="fs-3 fa-brands fa-youtube pe-2"></i>Youtube
                URL</x-metronic.label>
            <x-metronic.input type="text" name="youtube_url"
                value="{{ optional($nfc_card->nfcData)->youtube_url }}"
                class="form-control form-control-solid mb-3 mb-lg-0" placeholder="Youtube URL" />
        </div>
        <div class="fv-row col-lg-4 mb-7">
            <x-metronic.label class="fw-semibold fs-6 mb-2"><i
                    class="fs-3 fa-brands fa-linkedin pe-2 "></i>{{ __('Linkedin URL') }}</x-metronic.label>
            <x-metronic.input type="text" name="linkedin_url"
                value="{{ optional($nfc_card->nfcData)->linkedin_url }}"
                class="form-control form-control-solid mb-3 mb-lg-0" placeholder="Linkedin URL" />
        </div>
        <div class="fv-row col-lg-4 mb-7">
            <x-metronic.label class="fw-semibold fs-6 mb-2"><i
                    class="fs-3 fa-brands fa-whatsapp pe-2"></i>{{ __('Whats App URL') }}</x-metronic.label>
            <x-metronic.input type="text" name="whatsapp_url"
                value="{{ optional($nfc_card->nfcData)->whatsapp_url }}"
                class="form-control form-control-solid mb-3 mb-lg-0" placeholder="What's App URL" />
        </div>
        <div class="fv-row col-lg-4 mb-7">
            <x-metronic.label class="fw-semibold fs-6 mb-2"><i
                    class="fs-3 fa-brands fa-pinterest pe-2"></i>{{ __('Pinterest URL') }}</x-metronic.label>
            <x-metronic.input type="text" name="pinterest_url"
                value="{{ optional($nfc_card->nfcData)->pinterest_url }}"
                class="form-control form-control-solid mb-3 mb-lg-0" placeholder="Pinterest URL" />
        </div>
        <div class="fv-row col-lg-4 mb-7">
            <x-metronic.label class="fw-semibold fs-6 mb-2"><i
                    class="fs-3 fa-brands fa-tiktok pe-2"></i>{{ __('Tiktok URL') }}</x-metronic.label>
            <x-metronic.input type="text" name="tiktok_url"
                value="{{ optional($nfc_card->nfcData)->tiktok_url }}"
                class="form-control form-control-solid mb-3 mb-lg-0" placeholder="Tiktok URL" />
        </div>
    </div>
    {{-- <div class="fv-row col-lg-4 mb-7">
        <label class="fw-semibold fs-6 mb-2"><i class="fs-3 fa-solid fa-envelope pe-2"></i>Gmail URL</label>
        <input type="url" name="gmail_url" class="form-control form-control-solid mb-3 mb-lg-0"
            placeholder="Gmail URL" value="" />
    </div> --}}

    {{-- <div class="d-flex justify-content-end mt-10">
        <button type="submit" onclick="submitSocialLinksForm()"
            class="kt_docs_formvalidation_text_submit btn btn-primary">
            <span class="indicator-label">
                Save Socials
            </span>
            <span class="indicator-progress">
                Please wait... <span class="spinner-border spinner-border-sm align-middle ms-2"></span>
            </span>
        </button>
    </div> --}}

    <div class="d-flex justify-content-end">
        <button type="submit" class="kt_docs_formvalidation_text_submit btn btn-info mt-5 me-2" id="submitBtn">
            <span class="indicator-label">
                Save Data
            </span>
            <span class="indicator-progress" style="display: none;">
                Please wait... <span class="spinner-border spinner-border-sm align-middle ms-2"></span>
            </span>
        </button>
        <button class="btn btn-info mt-5 d-flex align-items-center" id="nextgeneralInfoButton">
            <span>Next</span>
            <span>
                <i class="fa-solid fa-arrow-right-long ps-2"></i>
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
    {{-- <script>
        $(document).ready(function() {
            function submitSocialLinksForm(event) {
                event.preventDefault(); // Prevent default form submission

                var form = $('.social_links_form');
                var url = form.attr('action');
                var formData = new FormData(form[0]);
                var social_links_container = $('.social_links_container');
                var submitButton = form.find('.kt_docs_formvalidation_text_submit');
                var isValid = true;

                // Remove any existing error messages and red borders
                form.find('.error-message').remove();
                form.find('.form-control').removeClass('is-invalid');

                // Validate each required field (adjust field names as needed)
                form.find('[name^="website_url"],[name^="facebook_url"],[name^="linkedin_url"]').each(function() {
                    var fieldValue = $(this).val().trim();
                    if (!fieldValue) {
                        // Show error message for the current field
                        $(this).addClass('is-invalid');
                        $(this).after('<p class="error-message text-danger">This field is required.</p>');
                        isValid = false;
                    }
                });

                if (isValid) {
                    // Optionally disable the submit button to prevent multiple submissions
                    submitButton.prop('disabled', true).addClass('disabled');

                    $.ajax({
                        type: 'POST',
                        url: url,
                        data: formData,
                        cache: false,
                        contentType: false,
                        processData: false,
                        beforeSend: function() {
                            // Show loading spinner or indicator
                            submitButton.find('.indicator-label').hide();
                            submitButton.find('.indicator-progress').show();
                        },
                        success: function(response) {
                            console.log('Form submitted successfully:', response);
                            if (response.social_links_view) {
                                console.log('Updating container with new HTML');
                                social_links_container.empty();
                                social_links_container.html(response.social_links_view);
                                toastr.success('Data saved successfully!', 'Success');
                            } else {
                                console.error('Unexpected response format:', response);
                                toastr.error('Unexpected response format.', 'Error');
                            }
                        },
                        error: function(xhr, status, error) {
                            // Handle error response
                            console.error('Error:', error);
                            toastr.error('An error occurred while saving data.', 'Error');
                        },
                        complete: function() {
                            // Re-enable the submit button and hide the loading indicator
                            submitButton.prop('disabled', false).removeClass('disabled');
                            submitButton.find('.indicator-label').show();
                            submitButton.find('.indicator-progress').hide();
                        }
                    });
                } else {
                    // Show SweetAlert error message for validation errors
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
            }

            // Attach the submit handler to the social links form
            $('.social_links_form').on('submit', function(event) {
                submitSocialLinksForm(event);
            });

            // Re-enable the submit button when any input field is changed
            $('.social_links_form input').on('input', function() {
                var submitButton = $('.social_links_form').find('.kt_docs_formvalidation_text_submit');
                submitButton.prop('disabled', false).removeClass('disabled');
                $(this).removeClass('is-invalid');
                $(this).next('.error-message').remove();
            });
        });
    </script> --}}
@endpush

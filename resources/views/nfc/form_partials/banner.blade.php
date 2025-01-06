<form class="banner_form form" method="POST" action="{{ route('nfc.banner.add') }}" autocomplete="off"
    enctype="multipart/form-data">
    @csrf
    <input type="hidden" name="card_id" value="{{ $nfc_card->id }}">
    <div class="row">
        <div class="col-lg-7 col-sm-12">
            <div class="row">
                <div class="col-lg-6 col-sm-6 fv-row mt-3">
                    <x-metronic.label class="fw-semibold fs-6 mb-2 required">Title</x-metronic.label>
                    <x-metronic.input type="text" name="banner_title" :value="optional($nfc_card->nfcBanner)->banner_title"
                        class="form-control form-control-solid mb-3 mb-lg-0" placeholder="Banner Title" />
                </div>
                <div class="col-lg-6 col-sm-6 fv-row mt-3">
                    <x-metronic.label class="fw-semibold fs-6 mb-2">Button Title</x-metronic.label>
                    <x-metronic.input type="text" name="banner_button" :value="optional($nfc_card->nfcBanner)->banner_button"
                        class="form-control form-control-solid mb-3 mb-lg-0" placeholder="Button Title" />
                </div>
                <div class="col-lg-12 col-sm-12 fv-row mt-3">
                    <x-metronic.label class="fw-semibold fs-6 mb-2">URL</x-metronic.label>
                    <x-metronic.input type="url" name="banner_url" :value="optional($nfc_card->nfcBanner)->banner_url"
                        class="form-control form-control-solid mb-3 mb-lg-0" placeholder="Button URL" />
                </div>
                <div class="col-lg-12 col-sm-12 fv-row mt-3">
                    <x-metronic.label class="fw-semibold fs-6 mb-2 required">Description</x-metronic.label>
                    <textarea name="banner_description" id="" cols="30" rows="4" class="form-control form-control-solid"
                        placeholder="Enter Banner Description">{{ optional($nfc_card->nfcBanner)->banner_description }}</textarea>
                </div>
            </div>
        </div>
        <div class="col-lg-5 col-sm-12">
            <h3 class="text-center">Sample/Demo</h3>
            <div class="d-flex justify-content-center">
                <img class="img-fluid rounded-2" src="{{ asset('images/welcome-notice.png') }}" alt="">
            </div>
        </div>
    </div>

    <div class="d-flex justify-content-end mt-10">
        <button type="submit" class="kt_docs_formvalidation_text_submit btn btn-primary me-2">
            <span class="indicator-label">
                Save
            </span>
            <span class="indicator-progress">
                Please wait... <span class="spinner-border spinner-border-sm align-middle ms-2"></span>
            </span>
        </button>
        <a href="javascript:void(0)" onclick="goToTab(event, '#testimonials')" class="btn btn-primary d-flex align-items-center">
            <span>Next</span>
            <span><i class="fa-solid fa-arrow-right-long ps-2"></i></span>
        </a>
    </div>
</form>

@push('scripts')
    {{-- <script>
        $(document).ready(function() {
            function submitBannerForm(event) {
                event.preventDefault(); // Prevent default form submission

                var form = $('.banner_form');
                var url = form.attr('action');
                var formData = new FormData(form[0]);
                var banner_container = $('.banner_container');
                var submitButton = form.find('.kt_docs_formvalidation_text_submit');
                var isValid = true;

                // Remove any existing error messages and red borders
                form.find('.error-message').remove();
                form.find('.form-control').removeClass('is-invalid');

                // Validate each required field (adjust field names as needed)
                form.find('[name="banner_title"], [name="banner_description"]')
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
                            if (response.banner_view) {
                                console.log('Updating container with new HTML');
                                banner_container.empty();
                                banner_container.html(response.banner_view);
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
            // Attach the submit handler to the banner form
            $('.banner_form').on('submit', function(event) {
                submitBannerForm(event);
            });

            // Re-enable the submit button when any input field is changed
            $('.banner_form input, .banner_form select').on('input change', function() {
                var submitButton = $('.banner_form').find('.kt_docs_formvalidation_text_submit');
                submitButton.prop('disabled', false).removeClass('disabled');
                $(this).removeClass('is-invalid');
                $(this).next('.error-message').remove();
            });
        });
    </script> --}}

    <script>
        function submitBannerForm() {
            // Detach any existing event handler to prevent multiple bindings
            $('.banner_form').off('submit').on('submit', function(event) {
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
                form.find('[name="banner_title"], [name="banner_description"]').each(function() {
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
                            if (response.banner_view) {
                                // Update form with new values
                                $('.banner_container').html(response.banner_view);
                                toastr.success('Data saved successfully!', 'Success');
                                // Reattach the event handler to the new form
                                submitBannerForm();
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
            $('.banner_form input, .banner_form select').off('input change').on('input change', function() {
                $(this).removeClass('is-invalid');
                $(this).next('.text-danger').hide().text('');
            });
        }

        $(document).ready(function() {
            submitBannerForm();
        });
    </script>
@endpush

    <form class="template_form form" method="POST" action="{{ route('nfc.template.add') }}" autocomplete="off"
        enctype="multipart/form-data">
        @csrf
        <input type="hidden" name="card_id" value="{{ $nfc_card->id }}">
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
            // [
            //     'value' => 'template-three',
            //     'image' => 'frontend/assets/images/nfc-templates/template_three.jpg',
            // ],
            // [
            //     'value' => 'template-four',
            //     'image' => 'frontend/assets/images/nfc-templates/template_four.jpg',
            // ],
            // [
            //     'value' => 'template-five',
            //     'image' => 'frontend/assets/images/nfc-templates/template_five.jpg',
            // ],
            // [
            //     'value' => 'template-six',
            //     'image' => 'frontend/assets/images/nfc-templates/template_six.jpg',
            // ],
        ]" :selectedTemplate="$nfc_card->nfc_template" />

        <div class="d-flex justify-content-end">
            <button type="submit" onclick="submitTemplateForm()"
                class="kt_docs_formvalidation_text_submit btn btn-primary mt-6">
                <span class="indicator-label">
                    Save Template
                </span>
                <span class="indicator-progress">
                    Please wait... <span class="spinner-border spinner-border-sm align-middle ms-2"></span>
                </span>
            </button>
        </div>
    </form>

    @push('scripts')
        <script>
            $(document).ready(function() {
                function submitTemplateForm(event) {
                    event.preventDefault(); // Prevent default form submission

                    var form = $('.template_form');
                    var url = form.attr('action');
                    var formData = new FormData(form[0]);
                    var template_container = $('.template_container');
                    var submitButton = form.find('.kt_docs_formvalidation_text_submit');
                    var isValid = true;

                    // Remove any existing error messages and red borders
                    form.find('.error-message').remove();
                    form.find('.form-control').removeClass('is-invalid');

                    // Validate each required field (adjust field names as needed)
                    form.find('[name="nfc_template"]') // Replace with your actual field names
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
                            dataType: 'json', // Ensure JSON parsing
                            cache: false,
                            contentType: false,
                            processData: false,
                            beforeSend: function() {
                                submitButton.find('.indicator-label').hide();
                                submitButton.find('.indicator-progress').show();
                            },
                            success: function(response) {
                                console.log('Form submitted successfully:', response);
                                if (response.template_view) {
                                    // Update only the template section in template_container
                                    $('.template_container').html(response.template_view);
                                    toastr.success('Data saved successfully!', 'Success');
                                } else {
                                    console.error('Unexpected response format:', response);
                                    toastr.error('Unexpected response format.', 'Error');
                                }
                            },
                            error: function(xhr, status, error) {
                                console.error('Error:', xhr.responseText);
                                toastr.error('An error occurred while saving data.', 'Error');
                            },
                            complete: function() {
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

                // // Attach the submit handler to the form
                // $('.general_info_form').on('submit', submitGeneralInfoForm);

                // // Optional: Hide error message and remove red border on input change
                // $('.general_info_form input, .general_info_form select').on('input change', function() {
                //     $(this).removeClass('is-invalid');
                //     $(this).next('.error-message').remove();
                // });
            });
        </script>
    @endpush

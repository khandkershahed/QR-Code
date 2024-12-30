<form class="template_form form" method="POST" action="{{ route('nfc.template.add') }}" autocomplete="off"
    enctype="multipart/form-data">
    @csrf
    <input type="hidden" name="card_id" value="{{ $nfc_card->id }}">
    <x-vcard.template :templates="[
        [
            'value' => 'template-one',
            'image' => 'frontend/images/nfc_template/template_one.png',
        ],
        [
            'value' => 'template-two',
            'image' => 'frontend/images/nfc_template/template_two.png',
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
    ]" :selectedTemplate="$nfc_card->nfc_template" />

    <div class="d-flex justify-content-end">
        <button type="submit" class="kt_docs_formvalidation_text_submit btn btn-primary mt-6 me-2">
            <span class="indicator-label">
                Save Template
            </span>
            <span class="indicator-progress" style="display: none;">
                Please wait... <span class="spinner-border spinner-border-sm align-middle ms-2"></span>
            </span>
        </button>
        <!-- Next Button -->
        <div class="d-flex justify-content-end">
            <button id="next-tab-button" class="btn btn-primary mt-6 d-flex align-items-center">
                <span>Next</span>
                <span><i class="fa-solid fa-arrow-right-long ps-2"></i></span>
            </button>
        </div>
    </div>
</form>

@push('scripts')
    <script>
        function attachFormSubmitHandler() {
            // Detach any existing event handler to prevent multiple bindings
            $('.template_form').off('submit').on('submit', function(event) {
                event.preventDefault(); // Prevent default form submission

                var form = $(this);
                var url = form.attr('action');
                var formData = new FormData(form[0]);
                var submitButton = form.find('.kt_docs_formvalidation_text_submit');
                var isValid = true;

                // Remove any existing error messages and red borders
                form.find('.error-message').remove();
                form.find('.form-control').removeClass('is-invalid');
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
                                // Update only the template section
                                $('#template-container').html(response.template_view);
                                toastr.success('Data saved successfully!', 'Success');
                                // Reattach the event handler to the new form
                                attachFormSubmitHandler();
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
            });

            // Optional: Hide error message and remove red border on input change
            $('.template_form input, .template_form select').off('input change').on('input change', function() {
                $(this).removeClass('is-invalid');
                $(this).next('.error-message').remove();
            });
        }

        $(document).ready(function() {
            attachFormSubmitHandler();
        });
    </script>
@endpush

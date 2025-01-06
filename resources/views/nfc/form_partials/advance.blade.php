<form class="advance_form form" method="POST" action="{{ route('nfc.advanced.add') }}" autocomplete="off"
    enctype="multipart/form-data">
    @csrf
    <input type="hidden" name="card_id" value="{{ $nfc_card->id }}">
    <h4 class="my-10">Manage Section</h4>
    <div class="row">
        <div class="col-lg-4 py-5">
            <div class="form-check form-switch">
                <input class="form-check-input" type="checkbox" role="switch" name="show_qr_code" value="1"
                    id="show_qr_code" @if ($nfc_card->show_qr_code == '1') checked @endif>
                <label class="form-check-label" for="show_qr_code">Enable Show QR Code</label>
            </div>
        </div>
        <div class="col-lg-4 py-5">
            <div class="form-check form-switch">
                <input class="form-check-input" type="checkbox" role="switch" name="branding" value="1"
                    id="branding" @if ($nfc_card->branding == '1') checked @endif title="Remove Branding Area">
                <label class="form-check-label" for="branding">Remove Branding Area</label>
            </div>
        </div>
        <div class="col-lg-4 py-5">
            <div class="form-check form-switch">
                <input class="form-check-input" type="checkbox" role="switch" name="whatsapp_share" value="1"
                    id="whatsapp_share" @if ($nfc_card->whatsapp_share == '1') checked @endif title="WhatsApp Share">
                <label class="form-check-label" for="whatsapp_share">Enable WhatsApp Share</label>
            </div>
        </div>
        <div class="col-lg-4 py-5">
            <div class="form-check form-switch">
                <input class="form-check-input" type="checkbox" role="switch" name="enable_contact_button"
                    value="1" id="enable_contact_button" @if ($nfc_card->enable_contact_button == '1') checked @endif>
                <label class="form-check-label" for="enable_contact_button">Enable Contact BTN</label>
            </div>
        </div>
        <div class="col-lg-4 py-5">
            <div class="form-check form-switch">
                <input class="form-check-input" type="checkbox" role="switch" name="enable_download_qr_code"
                    value="1" id="enable_download_qr_code" @if ($nfc_card->enable_download_qr_code == '1') checked @endif>
                <label class="form-check-label" for="enable_download_qr_code">Enable Download QR</label>
            </div>
        </div>
        <div class="col-lg-4 py-5">
            <div class="form-check form-switch">
                <input class="form-check-input" type="checkbox" role="switch" name="enable_enquiry_form" value="1"
                    id="enable_enquiry_form" @if ($nfc_card->enable_enquiry_form == '1') checked @endif>
                <label class="form-check-label" for="enable_enquiry_form">Enable Enquiry Form</label>
            </div>
        </div>
    </div>

    <div class="d-flex justify-content-end mt-10">
        <button type="submit" onclick="submitAdvanceForm()" class="kt_docs_formvalidation_text_submit btn btn-primary me-2">
            <span class="indicator-label">
                Save
            </span>
            <span class="indicator-progress">
                Please wait... <span class="spinner-border spinner-border-sm align-middle ms-2"></span>
            </span>
        </button>
        <a href="javascript:void(0)" onclick="goToTab(event, '#setting')" class="btn btn-primary d-flex align-items-center">
            <span>Next</span>
            <span><i class="fa-solid fa-arrow-right-long ps-2"></i></span>
        </a>
    </div>
</form>

@push('scripts')
    <script>
        function submitAdvanceForm() {
            // Detach any existing event handler to prevent multiple bindings
            $('.advance_form').off('submit').on('submit', function(event) {
                event.preventDefault(); // Prevent default form submission

                var form = $(this);
                var url = form.attr('action');
                var formData = new FormData(form[0]);
                var submitButton = form.find('.kt_docs_formvalidation_text_submit');
                var isValid = true;

                // Remove any existing error messages and red borders
                form.find('.text-danger').hide().text('');
                form.find('.form-control').removeClass('is-invalid');

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
                        if (response.advance_view) {
                            // Update form with new values
                            $('.advance_container').html(response.advance_view);
                            toastr.success('Data saved successfully!', 'Success');
                            // Reattach the event handler to the new form
                            submitAdvanceForm();
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

            });

            // Optional: Hide error message and remove red border on input change
            $('.advance_form input, .advance_form select').off('input change').on('input change', function() {
                $(this).removeClass('is-invalid');
                $(this).next('.text-danger').hide().text('');
            });
        }

        $(document).ready(function() {
            submitAdvanceForm();
        });
    </script>
@endpush

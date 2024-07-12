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
        <button type="submit" onclick="submitAdvanceForm()" class="kt_docs_formvalidation_text_submit btn btn-primary">
            <span class="indicator-label">
                Save
            </span>
            <span class="indicator-progress">
                Please wait... <span class="spinner-border spinner-border-sm align-middle ms-2"></span>
            </span>
        </button>
    </div>
</form>

@push('scripts')
    <script>
        function submitAdvanceForm() {
            var form = $('.advance_form');
            var url = form.attr('action');
            var formData = new FormData(form[0]);
            var advance_container = $('.advance_container');

            var submitButton = form.find('.kt_docs_formvalidation_text_submit');
            submitButton.prop('disabled', true).addClass('disabled');

            $.ajax({
                type: 'POST', // Ensure this is POST
                url: url,
                data: formData,
                cache: false,
                contentType: false,
                processData: false,
                beforeSend: function() {
                    submitButton.find('.indicator-label').hide();
                    submitButton.find('.indicator-progress').show();
                },
                success: function(response) {
                    console.log('Form submitted successfully:', response);
                    if (response.advance_view) {
                        advance_container.empty().html(response.advance_view);
                        toastr.success('Data saved successfully!', 'Success');
                    } else {
                        console.error('Unexpected response format:', response);
                        toastr.error('Unexpected response format.', 'Error');
                    }
                },
                error: function(xhr, status, error) {
                    console.error('Error:', error);
                    toastr.error('An error occurred while saving data.', 'Error');
                },
                complete: function() {
                    submitButton.prop('disabled', false).removeClass('disabled');
                    submitButton.find('.indicator-label').show();
                    submitButton.find('.indicator-progress').hide();
                }
            });
        }
    </script>
@endpush

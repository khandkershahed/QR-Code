<form class="advance_form form" method="POST" action="" autocomplete="off"
    enctype="multipart/form-data">
    @csrf
    <input type="hidden" name="card_id" value="{{ $nfc_card->id }}">
    <h4 class="my-10">Manage Section</h4>
    <div class="row">
        <div class="col-lg-4 py-5">
            <div class="form-check form-switch">
                <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckChecked" checked="">
                <label class="form-check-label" for="flexSwitchCheckChecked">Enable Show QR Code</label>
            </div>
        </div>
        <div class="col-lg-4 py-5">
            <div class="form-check form-switch">
                <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckChecked" checked="" title="Enable Branding Area">
                <label class="form-check-label" for="flexSwitchCheckChecked">Enable Branding Area</label>
            </div>
        </div>
        <div class="col-lg-4 py-5">
            <div class="form-check form-switch">
                <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckChecked" checked="" title="What's App Share">
                <label class="form-check-label" for="flexSwitchCheckChecked">Enable WP share</label>
            </div>
        </div>
        <div class="col-lg-4 py-5">
            <div class="form-check form-switch">
                <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckChecked" checked="">
                <label class="form-check-label" for="flexSwitchCheckChecked">Enable Contact BTN</label>
            </div>
        </div>
        <div class="col-lg-4 py-5">
            <div class="form-check form-switch">
                <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckChecked" checked="">
                <label class="form-check-label" for="flexSwitchCheckChecked">Enable Download Qr</label>
            </div>
        </div>
        <div class="col-lg-4 py-5">
            <div class="form-check form-switch">
                <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckChecked" checked="">
                <label class="form-check-label" for="flexSwitchCheckChecked">Enable inquery Form</label>
            </div>
        </div>
    </div>

    <div class="d-flex justify-content-end mt-10">
        <button type="submit" onclick="submitSeoForm()" class="kt_docs_formvalidation_text_submit btn btn-primary">
            <span class="indicator-label">
                Save Advance Setting
            </span>
            <span class="indicator-progress">
                Please wait... <span class="spinner-border spinner-border-sm align-middle ms-2"></span>
            </span>
        </button>
    </div>
</form>

@push('scripts')
    <script>
        function submitSeoForm() {
            var form = $('.advance_form');
            var url = form.attr('action');
            var formData = new FormData(form[0]);
            var seo_container = $('.seo_container');

            // Optionally disable the submit button to prevent multiple submissions
            var submitButton = form.find('.kt_docs_formvalidation_text_submit');
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
                    if (response.seo_view) {
                        console.log('Updating container with new HTML');

                        seo_container.empty();
                        seo_container.html(response.seo_view);
                        toastr.success('Data saved successfully!', 'Success');
                    } else {
                        console.error('Unexpected response format:', response);
                        toastr.error('Unexpected response format.', 'Error');
                    }

                    // Optionally reset the form or perform other actions
                    // form.trigger('reset');
                },
                error: function(xhr, status, error) {
                    // Handle error response
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

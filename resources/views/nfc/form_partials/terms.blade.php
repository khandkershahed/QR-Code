<form class="terms_form form" method="POST" action="{{ route('nfc.terms.add') }}" autocomplete="off"
    enctype="multipart/form-data">
    @csrf
    <input type="hidden" name="card_id" value="{{ $nfc_card->id }}">
    <div class="row mt-10">
        <div class="fv-row col-lg-12 mb-7">
            <x-metronic.label class="required fw-semibold fs-6 mb-2">Terms & Condition</x-metronic.label>
            <div class="py-5" data-bs-theme="light">
                <textarea name="terms_condition" class="form-control" rows="10">{{ optional($nfc_card->nfcData)->terms_condition }}</textarea>
                {{-- <textarea name="terms_condition" class="terms_editor">
                    {{ optional($nfc_card->nfcData)->terms_condition }}
                </textarea> --}}
            </div>
        </div>
    </div>
    <div class="d-flex justify-content-end mt-10">
        <button type="submit" onclick="submitTermsForm()" class="kt_docs_formvalidation_text_submit btn btn-primary">
            <span class="indicator-label">
                Save Terms
            </span>
            <span class="indicator-progress">
                Please wait... <span class="spinner-border spinner-border-sm align-middle ms-2"></span>
            </span>
        </button>
    </div>
</form>

@push('scripts')
    <!-- Include CKEditor Script from an alternative CDN -->
    <script>
        $(document).ready(function() {
            function submitTermsForm(event) {
                event.preventDefault(); // Prevent default form submission

                var form = $('.terms_form');
                var url = form.attr('action');
                var formData = new FormData(form[0]);
                var terms_container = $('.terms_container');
                var submitButton = form.find('.kt_docs_formvalidation_text_submit');
                var isValid = true;

                // Remove any existing error messages and red borders
                form.find('.error-message').remove();
                form.find('.form-control').removeClass('is-invalid');

                // Validate each required field (adjust field names as needed)
                form.find('[name="terms_condition"]').each(function() {
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
                    submitButton.find('.indicator-label').hide();
                    submitButton.find('.indicator-progress').show();
                },
                success: function(response) {
                    console.log('Form submitted successfully:', response);
                    if (response.terms_view) {
                        terms_container.empty();
                        terms_container.html(response.terms_view);
                        toastr.success('Data saved successfully!', 'Success');

                    } else {
                        toastr.error('Unexpected response format.', 'Error');
                    }
                },
                error: function(xhr, status, error) {
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
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            new CKEditorInitializer('.terms_editor');
        });
    </script>
@endpush

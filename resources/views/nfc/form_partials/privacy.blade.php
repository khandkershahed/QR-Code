<form class="privacy_form form" method="POST" action="{{ route('nfc.privacy.add') }}" autocomplete="off"
    enctype="multipart/form-data">
    @csrf
    <input type="hidden" name="card_id" value="{{ $nfc_card->id }}">
    <div class="row mt-10">
        <div class="fv-row col-lg-12 mb-7">
            <x-metronic.label class="required fw-semibold fs-6 mb-2">Privacy Policy</x-metronic.label>
            <textarea name="privacy_policy" class="form-control" rows="10">{{ optional($nfc_card->nfcData)->privacy_policy }}</textarea>
            {{-- <textarea name="privacy_policy" class="privacy_editor">{!! optional($nfc_card->nfcData)->privacy_policy !!}</textarea> --}}
        </div>
    </div>

    <div class="d-flex justify-content-end mt-10">
        <button type="submit" onclick="submitPrivacyForm()" class="kt_docs_formvalidation_text_submit btn btn-primary me-2">
            <span class="indicator-label">
                Save Policy
            </span>
            <span class="indicator-progress">
                Please wait... <span class="spinner-border spinner-border-sm align-middle ms-2"></span>
            </span>
        </button>
        <a href="javascript:void(0)" onclick="goToTab(event, '#terms')" class="btn btn-primary d-flex align-items-center">
            <span>Next</span>
            <span><i class="fa-solid fa-arrow-right-long ps-2"></i></span>
        </a>
    </div>
</form>

@push('scripts')
    <script>
        function submitPrivacyForm() {
            var form = $('.privacy_form');
            var url = form.attr('action');
            var formData = new FormData(form[0]);
            var privacy_container = $('.privacy_container');

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
                    submitButton.find('.indicator-label').hide();
                    submitButton.find('.indicator-progress').show();
                },
                success: function(response) {
                    console.log('Form submitted successfully:', response);
                    if (response.privacy_view) {
                        console.log('Updating container with new HTML');

                        privacy_container.empty();
                        privacy_container.html(response.privacy_view);
                        initializeCKEditor();
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

        function initializeCKEditor() {
            if (typeof CKEDITOR !== 'undefined') {
                new CKEditorInitializer('.privacy_editor');
            } else {
                document.addEventListener('DOMContentLoaded', () => {
                    new CKEditorInitializer('.privacy_editor');
                });
            }
        }

        document.addEventListener('DOMContentLoaded', () => {
            new CKEditorInitializer('.privacy_editor');
        });


    </script>
@endpush

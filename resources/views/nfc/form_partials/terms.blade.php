<form class="terms_form form" method="POST" action="{{ route('nfc.terms.add') }}" autocomplete="off"
    enctype="multipart/form-data">
    @csrf
    <input type="hidden" name="card_id" value="{{ $nfc_card->id }}">
    <div class="row mt-10">
        <div class="fv-row col-lg-12 mb-7">
            <x-metronic.label class="required fw-semibold fs-6 mb-2">Terms & Condition</x-metronic.label>
            <div class="py-5" data-bs-theme="light">
                <textarea name="terms_condition" class="form-control" rows="10">{{ optional($nfc_card->nfcData)->terms_condition }}</textarea>
            </div>
        </div>
    </div>
    <div class="d-flex justify-content-end mt-10">
        <button type="submit" onclick="submitTermsForm()" class="kt_docs_formvalidation_text_submit btn btn-primary me-2">
            <span class="indicator-label">Save Terms</span>
            <span class="indicator-progress">Please wait... <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
        </button>
        <a href="javascript:void(0)" onclick="bindNextButton()" class="btn btn-primary d-flex align-items-center">
            <span>Next</span>
            <span><i class="fa-solid fa-arrow-right-long ps-2"></i></span>
        </a>
    </div>
</form>




@push('scripts')
    {{-- <script>
        function submitTermsForm() {
            var form = $('.terms_form');
            var url = form.attr('action');
            var formData = new FormData(form[0]);
            var terms_container = $('.terms_container');

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
                    if (response.terms_view) {
                        console.log('Updating container with new HTML');

                        terms_container.empty();
                        terms_container.html(response.terms_view);
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
                new CKEditorInitializer('.terms_editor');
            } else {
                document.addEventListener('DOMContentLoaded', () => {
                    new CKEditorInitializer('.terms_editor');
                });
            }
        }

        document.addEventListener('DOMContentLoaded', () => {
            new CKEditorInitializer('.terms_editor');
        });
    </script> --}}

    <script>
        function submitTermsForm() {
            var form = $('.terms_form');
            var url = form.attr('action');
            var formData = new FormData(form[0]);
            var terms_container = $('.terms_container');

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
                    if (response.terms_view) {
                        console.log('Updating container with new HTML');

                        // Replace the content of the terms_container with the new HTML
                        terms_container.empty();
                        terms_container.html(response.terms_view);

                        // Re-bind the "Next" button event after HTML replacement
                        bindNextButton();

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

        // Function to bind the Next button after HTML replacement
        function bindNextButton() {
                var nextTab = new bootstrap.Tab(document.querySelector(
                'a[href="#fonts"]')); // Replace #fonts with the correct ID of the next tab
                nextTab.show();
                document.querySelector('#fonts').scrollIntoView({
                    behavior: 'smooth'
                });
        }

        // Reinitialize the "Next" button functionality on page load, in case it is already present
        document.addEventListener('DOMContentLoaded', function() {
            bindNextButton();
        });
    </script>
@endpush

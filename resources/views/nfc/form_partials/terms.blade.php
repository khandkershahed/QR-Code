<form class="terms_form form" method="POST" action="{{ route('nfc.terms.add') }}" autocomplete="off"
    enctype="multipart/form-data">
    @csrf
    <input type="hidden" name="card_id" value="{{ $nfc_card->id }}">
    <div class="row mt-10">
        <div class="fv-row col-lg-12 mb-7">
            <x-metronic.label class="required fw-semibold fs-6 mb-2">Terms & Condition</x-metronic.label>
                <textarea name="terms_condition" class="form-control w-100 form-control-solid" id="" rows="17">{{ optional($nfc_card->nfcData)->terms_condition }}</textarea>
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
<script src="https://cdn.tiny.cloud/1/tv8ze2aprjlx1qoo8xnmh6r0e0w8hhgeukhe4esuhmhglca0/tinymce/7/tinymce.min.js" referrerpolicy="origin"></script>
    <script>
        var options = {
            selector: "#kt_docs_tinymce_basic",
            height: "480"
        };

        if (KTThemeMode.getMode() === "dark") {
            options["skin"] = "oxide-dark";
            options["content_css"] = "dark";
        }

        tinymce.init(options);
    </script>
    <script>
        function submitTermsForm() {
            var form = $('.terms_form');
            var url = form.attr('action');
            var formData = new FormData(form[0]);
            var terms_container = $('.terms_container');

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
                    if (response.terms_view) {
                        console.log('Updating container with new HTML');

                        terms_container.empty();
                        terms_container.html(response.terms_view);
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

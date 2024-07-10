<form class="seo_form form" method="POST" action="{{ route('nfc.seo.add') }}" autocomplete="off"
    enctype="multipart/form-data">
    @csrf
    <input type="hidden" name="card_id" value="{{ $nfc_card->id }}">
    <div class="row">
        <div class="fv-row col-lg-6 col-6 mb-4">
            <x-metronic.label class="fw-semibold fs-6 mb-2">Font Family</x-metronic.label>
            <select class="form-select" data-control="select2" data-placeholder="Select Fonts" name="font_family"
                :value="optional($nfc_card - > nfcData) - > font_family">
                <option></option>
                <option value="1">Almendra SC</option>
                <option value="2">Anton</option>
                <option value="2">Bebas Neue</option>
                <option value="2">Ubuntu</option>
                <option value="2">Anton SC</option>
                <option value="2">Margarine</option>
                <option value="2">Roboto Slab</option>
                <option value="2">Jost</option>
                <option value="2">Roboto</option>
                <option value="2">Poppins</option>
                <option value="2">Raleway</option>
            </select>
        </div>
        <div class="fv-row col-lg-6 col-6 mb-4">
            <x-metronic.label class="fw-semibold fs-6 mb-2">Font Size (px)</x-metronic.label>
            <x-metronic.input type="number" name="font_size" value="{{ optional($nfc_card)->font_size }}" min="14" max="40"
                class="form-control form-control-solid mb-3 mb-lg-0" placeholder="Font Size(Eg:15px)" />
        </div>
    </div>

    <div class="d-flex justify-content-end mt-10">
        <button type="submit" onclick="submitSeoForm()" class="kt_docs_formvalidation_text_submit btn btn-primary">
            <span class="indicator-label">
                Save Fonts
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
            var form = $('.seo_form');
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

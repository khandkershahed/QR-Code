<form class="fonts_form form" method="POST" action="{{ route('nfc.fonts.add') }}" autocomplete="off"
    enctype="multipart/form-data">
    @csrf
    <input type="hidden" name="card_id" value="{{ $nfc_card->id }}">
    <div class="row">
        <div class="fv-row col-lg-6 col-6 mb-4">
            <x-metronic.label class="fw-semibold fs-6 mb-2">Font Family</x-metronic.label>
            <select class="form-select" data-control="select2" data-placeholder="Select Fonts" name="font_family">
                <option>Default</option>
                <option value="almendra_sc" @selected($nfc_card->font_family == 'almendra_sc')>Almendra SC</option>
                <option value="anton" @selected($nfc_card->font_family == 'anton')>Anton</option>
                <option value="bebas_neue" @selected($nfc_card->font_family == 'bebas_neue')>Bebas Neue</option>
                <option value="ubuntu" @selected($nfc_card->font_family == 'ubuntu')>Ubuntu</option>
                <option value="anton_sc" @selected($nfc_card->font_family == 'anton_sc')>Anton SC</option>
                <option value="margarine" @selected($nfc_card->font_family == 'margarine')>Margarine</option>
                <option value="roboto_slab" @selected($nfc_card->font_family == 'roboto_slab')>Roboto Slab</option>
                <option value="jost" @selected($nfc_card->font_family == 'jost')>Jost</option>
                <option value="roboto" @selected($nfc_card->font_family == 'roboto')>Roboto</option>
                <option value="poppins" @selected($nfc_card->font_family == 'poppins')>Poppins</option>
                <option value="raleway" @selected($nfc_card->font_family == 'raleway')>Raleway</option>
            </select>
        </div>
        <div class="fv-row col-lg-6 col-6 mb-4">
            <x-metronic.label class="fw-semibold fs-6 mb-2">Font Size (px)</x-metronic.label>
            <x-metronic.input type="number" name="font_size" value="{{ optional($nfc_card)->font_size }}"
                min="14" max="40" class="form-control form-control-solid mb-3 mb-lg-0"
                placeholder="Font Size(Eg:15px)" />
        </div>
    </div>

    <div class="d-flex justify-content-end mt-10">
        <button type="submit" onclick="submitFontsForm()" class="kt_docs_formvalidation_text_submit btn btn-primary">
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
        function submitFontsForm() {
            var form = $('.fonts_form');
            var url = form.attr('action');
            var formData = new FormData(form[0]);
            var fonts_container = $('.fonts_container');

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
                    if (response.fonts_view) {
                        console.log('Updating container with new HTML');

                        fonts_container.empty();
                        fonts_container.html(response.fonts_view);
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

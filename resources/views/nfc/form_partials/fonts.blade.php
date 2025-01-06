<form class="fonts_form form" method="POST" action="{{ route('nfc.fonts.add') }}" autocomplete="off"
    enctype="multipart/form-data">
    @csrf
    <input type="hidden" name="card_id" value="{{ $nfc_card->id }}">
    <div class="row">
        <div class="fv-row col-lg-6 col-6 mb-4">
            <x-metronic.label class="fw-semibold fs-6 mb-2 required">Font Family</x-metronic.label>
            <select class="form-select" data-control="select2" data-placeholder="Select Fonts" name="font_family">
                <option></option>
                <option value="almendra_sc" @selected($nfc_card->font_family == 'almendra_sc')>Almendra SC</option>
                <option value="anton" @selected($nfc_card->font_family == 'anton')>Anton</option>
                <option value="bebas_neue" @selected($nfc_card->font_family == 'bebas_neue')>Bebas Neue</option>
                <option value="ubuntu" @selected($nfc_card->font_family == 'ubuntu')>Ubuntu</option>
                <option value="anton_sc" @selected($nfc_card->font_family == 'anton_sc')>Anton SC</option>
                <option value="margarine" @selected($nfc_card->font_family == 'margarine')>Margarine</option>
                <option value="roboto_slab" @selected($nfc_card->font_family == 'roboto_slab')>Roboto Slab</option>
                <option selected value="jost" @selected($nfc_card->font_family == 'jost')>Jost</option>
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
        <button type="submit" onclick="submitFontsForm()" class="kt_docs_formvalidation_text_submit btn btn-primary me-2">
            <span class="indicator-label">
                Save Fonts
            </span>
            <span class="indicator-progress">
                Please wait... <span class="spinner-border spinner-border-sm align-middle ms-2"></span>
            </span>
        </button>
        <a href="javascript:void(0)" onclick="goToTab(event, '#advance')" class="btn btn-primary d-flex align-items-center">
            <span>Next</span>
            <span><i class="fa-solid fa-arrow-right-long ps-2"></i></span>
        </a>
    </div>
</form>

@push('scripts')
    <script>
        function submitFontsForm() {
            // Detach any existing event handler to prevent multiple bindings
            $('.fonts_form').off('submit').on('submit', function(event) {
                event.preventDefault(); // Prevent default form submission

                var form = $(this);
                var url = form.attr('action');
                var formData = new FormData(form[0]);
                var submitButton = form.find('.kt_docs_formvalidation_text_submit');
                var isValid = true;

                // Remove any existing error messages and red borders
                form.find('.text-danger').hide().text('');
                form.find('.form-control').removeClass('is-invalid');
                form.find('[name="font_family"]').each(function() {
                    var fieldValue = $(this).val().trim();
                    if (!fieldValue) {
                        // Show error message for the current field
                        $(this).addClass('is-invalid');
                        $(this).after('<p class="error-message text-danger">This field is required.</p>');
                        isValid = false;
                    }
                });
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
                        if (response.fonts_view) {
                            // Update form with new values
                            $('.fonts_container').html(response.fonts_view);
                            toastr.success('Data saved successfully!', 'Success');
                            // Reattach the event handler to the new form
                            submitFontsForm();
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
            $('.fonts_form input, .fonts_form select').off('input change').on('input change', function() {
                $(this).removeClass('is-invalid');
                $(this).next('.text-danger').hide().text('');
            });
        }

        $(document).ready(function() {
            submitFontsForm();
        });
    </script>
@endpush

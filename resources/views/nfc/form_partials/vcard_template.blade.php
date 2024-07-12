    <form class="template_form form" method="POST" action="{{ route('nfc.template.add') }}" autocomplete="off"
        enctype="multipart/form-data">
        @csrf
        <input type="hidden" name="card_id" value="{{ $nfc_card->id }}">
        <x-vcard.template :templates="[
            [
                'value' => 'template-one',
                'image' => 'frontend/images/nfc_template/template_one.jpg',
            ],
            [
                'value' => 'template-two',
                'image' => 'frontend/images/nfc_template/template_two.jpg',
            ],
            [
                'value' => 'template-three',
                'image' => 'frontend/images/nfc_template/template_three.jpg',
            ],
            // [
            //     'value' => 'template-three',
            //     'image' => 'frontend/assets/images/nfc-templates/template_three.jpg',
            // ],
            // [
            //     'value' => 'template-four',
            //     'image' => 'frontend/assets/images/nfc-templates/template_four.jpg',
            // ],
            // [
            //     'value' => 'template-five',
            //     'image' => 'frontend/assets/images/nfc-templates/template_five.jpg',
            // ],
            // [
            //     'value' => 'template-six',
            //     'image' => 'frontend/assets/images/nfc-templates/template_six.jpg',
            // ],
        ]"  :selectedTemplate="$nfc_card->nfc_template" />

        <div class="d-flex justify-content-end">
            <button type="submit" onclick="submitTemplateForm()"
                class="kt_docs_formvalidation_text_submit btn btn-primary mt-6">
                <span class="indicator-label">
                    Save Template
                </span>
                <span class="indicator-progress">
                    Please wait... <span class="spinner-border spinner-border-sm align-middle ms-2"></span>
                </span>
            </button>
        </div>
    </form>

    @push('scripts')
        <script>
            function submitTemplateForm(event) {
                // event.preventDefault(); // Prevent default form submission

                var form = $('.template_form');
                var url = form.attr('action');
                var formData = new FormData(form[0]);
                var template_container = $('.template_container');

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
                        if (response.template_view) {
                            console.log('SEO view HTML:', response.template_view);
                            template_container.empty();
                            template_container.html(response.template_view);
                            toastr.success('Data saved successfully!', 'Success');
                        } else {
                            console.error('Unexpected response format:', response);
                            toastr.error('Unexpected response format.', 'Error');
                        }
                    },
                    error: function(xhr, status, error) {
                        console.error('Error:', xhr.responseText);
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

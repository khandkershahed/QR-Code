<form class="advance_form form" method="POST" action="" autocomplete="off" enctype="multipart/form-data">
    @csrf
    <input type="hidden" name="card_id" value="{{ $nfc_card->id }}">
    <div class="row">
        <div class="col-lg-6 col-sm-12">
            <div class="row">
                <div class="col-lg-6 col-sm-6 fv-row mt-3">
                    <x-metronic.label class="fw-semibold fs-6 mb-2">Title</x-metronic.label>
                    <x-metronic.input type="text" name="banner_title" value=""
                        class="form-control form-control-solid mb-3 mb-lg-0" placeholder="Banner Title" />
                </div>
                <div class="col-lg-6 col-sm-6 fv-row mt-3">
                    <x-metronic.label class="fw-semibold fs-6 mb-2">Button Title</x-metronic.label>
                    <x-metronic.input type="text" name="button_title" value=""
                        class="form-control form-control-solid mb-3 mb-lg-0" placeholder="Button Title" />
                </div>
                <div class="col-lg-12 col-sm-12 fv-row mt-3">
                    <x-metronic.label class="fw-semibold fs-6 mb-2">URL</x-metronic.label>
                    <x-metronic.input type="text" name="button_url" value=""
                        class="form-control form-control-solid mb-3 mb-lg-0" placeholder="Button URL" />
                </div>
                <div class="col-lg-12 col-sm-12 fv-row mt-3">
                    <x-metronic.label class="fw-semibold fs-6 mb-2">Description</x-metronic.label>
                    <textarea name="" id="" cols="30" rows="4" class="form-control form-control-solid" placeholder="Enter Banner Description"></textarea>
                </div>
            </div>
        </div>
        <div class="col-lg-6 col-sm-12">
            <h3 class="text-center">Sample</h3>
            <div class="d-flex justify-content-center">
                <img class="img-fluid rounded-2" src="https://i.ibb.co/cC5wYSN/banner-modal.png" alt="">
            </div>
        </div>
    </div>

    <div class="d-flex justify-content-end mt-10">
        <button type="submit" onclick="submitSeoForm()" class="kt_docs_formvalidation_text_submit btn btn-primary">
            <span class="indicator-label">
                Save Banner
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

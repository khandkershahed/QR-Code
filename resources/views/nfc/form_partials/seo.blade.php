<form class="seo_form form" method="POST" action="{{ route('nfc.seo.add') }}" autocomplete="off">
    @csrf
    <input type="hidden" name="card_id" value="{{ $nfc_card->id }}">
    <div class="row mt-10">
        <div class="fv-row col-lg-6 mb-7">
            <x-metronic.label class="fw-semibold fs-6 mb-2">Site Title</x-metronic.label>
            <x-metronic.input type="text" name="site_title" value="{{ optional($nfc_card->nfcSeo)->site_title }}"
                class="form-control form-control-solid mb-3 mb-lg-0" placeholder="Site Title" />
        </div>
        <div class="fv-row col-lg-6 mb-7">
            <x-metronic.label class="fw-semibold fs-6 mb-2">Home Title</x-metronic.label>
            <x-metronic.input type="text" name="home_title" value="{{ optional($nfc_card->nfcSeo)->home_title }}"
                class="form-control form-control-solid mb-3 mb-lg-0" placeholder="Home Title" />
        </div>
        <div class="fv-row col-lg-6 mb-7">

            <x-metronic.label class="fw-semibold fs-6 mb-2">Meta Keyword</x-metronic.label>
            <x-metronic.input type="text" name="meta_keyword" value="{{ optional($nfc_card->nfcSeo)->meta_keyword }}"
                class="form-control form-control-solid mb-3 mb-lg-0"
                placeholder="keyword one, keyword two, keyword three, ...." />
        </div>
        <div class="fv-row col-lg-6 mb-7">

            <x-metronic.label class="fw-semibold fs-6 mb-2">Meta Description</x-metronic.label>
            <x-metronic.input type="text" name="meta_description"
                value="{{ optional($nfc_card->nfcSeo)->meta_description }}"
                class="form-control form-control-solid mb-3 mb-lg-0" placeholder="Meta Description" />
        </div>
        <div class="fv-row col-lg-12 mb-7">
            <x-metronic.label class="fw-semibold fs-6 mb-2">Google Analytics</x-metronic.label>
            <textarea class="form-control form-control-solid mb-3 mb-lg-0" name="google_analytics" id="" rows="7">{!! optional($nfc_card->nfcSeo)->google_analytics !!}</textarea>
        </div>
    </div>

    <div class="d-flex justify-content-end mt-10">
        <button type="submit" onclick="submitSeoForm()" class="kt_docs_formvalidation_text_submit btn btn-primary me-2">
            <span class="indicator-label">
                Save
            </span>
            <span class="indicator-progress">
                Please wait... <span class="spinner-border spinner-border-sm align-middle ms-2"></span>
            </span>
        </button>
        <button id="nextseoButton" class="btn btn-primary d-flex align-items-center">
            <span>Next</span>
            <span><i class="fa-solid fa-arrow-right-long ps-2"></i></span>
        </button>
    </div>
</form>

@push('scripts')
    <script>
        function submitSeoForm(event) {
            // event.preventDefault(); // Prevent default form submission

            var form = $('.seo_form');
            var url = form.attr('action');
            var formData = new FormData(form[0]);
            var seo_container = $('.seo_container');

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
                    if (response.seo_view) {
                        console.log('SEO view HTML:', response.seo_view);
                        seo_container.empty();
                        seo_container.html(response.seo_view);
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

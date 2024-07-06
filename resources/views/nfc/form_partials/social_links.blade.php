<form class="social_links_form form" method="POST" action="{{ route('nfc.social_links.add') }}" autocomplete="off" enctype="multipart/form-data">
    @csrf
    <input type="hidden" name="card_id" value="{{ $nfc_card->id }}">
    <div class="row mt-10">
        <div class="fv-row col-lg-4 mb-7">
            <x-metronic.label class="fw-semibold fs-6 mb-2"><i class="fs-3 fa-solid fa-globe pe-2"></i>WebSite
                URL</x-metronic.label>
            <x-metronic.input type="url" name="website_url" value="{{ optional($nfc_card->nfcData)->website_url }}"
                class="form-control form-control-solid mb-3 mb-lg-0" placeholder="WebSite URL" />
        </div>
        <div class="fv-row col-lg-4 mb-7">
            <x-metronic.label class="fw-semibold fs-6 mb-2"><i class="fs-3 fa-brands fa-facebook pe-2"></i>Facebook
                URL</x-metronic.label>
            <x-metronic.input type="url" name="facebook_url"
                value="{{ optional($nfc_card->nfcData)->facebook_url }}"
                class="form-control form-control-solid mb-3 mb-lg-0" placeholder="Facebook URL" />
        </div>
        <div class="fv-row col-lg-4 mb-7">

            <x-metronic.label class="fw-semibold fs-6 mb-2"><i class="fs-3 fa-brands fa-twitter pe-2"></i>Twitter
                URL</x-metronic.label>
            <x-metronic.input type="url" name="twitter_url" value="{{ optional($nfc_card->nfcData)->twitter_url }}"
                class="form-control form-control-solid mb-3 mb-lg-0" placeholder="Twitter URL" />
        </div>
        <div class="fv-row col-lg-4 mb-7">

            <x-metronic.label class="fw-semibold fs-6 mb-2"><i class="fs-3 fa-brands fa-instagram pe-2"></i>Instagram
                URL</x-metronic.label>
            <x-metronic.input type="url" name="instagram_url"
                value="{{ optional($nfc_card->nfcData)->instagram_url }}"
                class="form-control form-control-solid mb-3 mb-lg-0" placeholder="Instagram URL" />
        </div>
        <div class="fv-row col-lg-4 mb-7">

            <x-metronic.label class="fw-semibold fs-6 mb-2"><i class="fs-3 fa-brands fa-youtube pe-2"></i>Youtube
                URL</x-metronic.label>
            <x-metronic.input type="url" name="youtube_url" value="{{ optional($nfc_card->nfcData)->youtube_url }}"
                class="form-control form-control-solid mb-3 mb-lg-0" placeholder="Youtube URL" />
        </div>
        <div class="fv-row col-lg-4 mb-7">
            <x-metronic.label class="fw-semibold fs-6 mb-2"><i
                    class="fs-3 fa-brands fa-linkedin pe-2"></i>{{ __('Linkedin URL') }}</x-metronic.label>
            <x-metronic.input type="url" name="linkedin_url"
                value="{{ optional($nfc_card->nfcData)->linkedin_url }}"
                class="form-control form-control-solid mb-3 mb-lg-0" placeholder="Linkedin URL" />
        </div>
        <div class="fv-row col-lg-4 mb-7">
            <x-metronic.label class="fw-semibold fs-6 mb-2"><i
                    class="fs-3 fa-brands fa-whatsapp pe-2"></i>{{ __('Whats App URL') }}</x-metronic.label>
            <x-metronic.input type="url" name="whatsapp_url"
                value="{{ optional($nfc_card->nfcData)->whatsapp_url }}"
                class="form-control form-control-solid mb-3 mb-lg-0" placeholder="What's App URL" />
        </div>
        <div class="fv-row col-lg-4 mb-7">
            <x-metronic.label class="fw-semibold fs-6 mb-2"><i
                    class="fs-3 fa-brands fa-pinterest pe-2"></i>{{ __('Pinterest URL') }}</x-metronic.label>
            <x-metronic.input type="url" name="pinterest_url"
                value="{{ optional($nfc_card->nfcData)->pinterest_url }}"
                class="form-control form-control-solid mb-3 mb-lg-0" placeholder="Pinterest URL" />
        </div>
        <div class="fv-row col-lg-4 mb-7">
            <x-metronic.label class="fw-semibold fs-6 mb-2"><i
                    class="fs-3 fa-brands fa-tiktok pe-2"></i>{{ __('Tiktok URL') }}</x-metronic.label>
            <x-metronic.input type="url" name="youtube_url" value="{{ optional($nfc_card->nfcData)->youtube_url }}"
                class="form-control form-control-solid mb-3 mb-lg-0" placeholder="Youtube URL" />
        </div>
    </div>
    {{-- <div class="fv-row col-lg-4 mb-7">
        <label class="fw-semibold fs-6 mb-2"><i class="fs-3 fa-solid fa-envelope pe-2"></i>Gmail URL</label>
        <input type="url" name="gmail_url" class="form-control form-control-solid mb-3 mb-lg-0"
            placeholder="Gmail URL" value="" />
    </div> --}}

    <div class="d-flex justify-content-end mt-10">
        <button type="submit" onclick="submitSocialLinksForm()"
            class="kt_docs_formvalidation_text_submit btn btn-primary">
            <span class="indicator-label">
                Save Socials
            </span>
            <span class="indicator-progress">
                Please wait... <span class="spinner-border spinner-border-sm align-middle ms-2"></span>
            </span>
        </button>
    </div>
</form>

@push('scripts')
    <script>
        function submitSocialLinksForm() {
            var form = $('.social_links_form');
            var url = form.attr('action');
            var formData = new FormData(form[0]);
            var social_links_container = $('.social_links_container');

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
                    if (response.social_links_view) {
                        console.log('Updating container with new HTML');

                        social_links_container.empty();
                        social_links_container.html(response.social_links_view);
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

<form class="setting_form form" method="POST" action="{{ route('nfc.setting.add') }}" autocomplete="off"
    enctype="multipart/form-data">
    @csrf
    <input type="hidden" name="card_id" value="{{ $nfc_card->id }}">
    <div class="mb-5" data-kt-buttons="true" data-kt-buttons-target=".form-check-image, .form-check-input">
        <h4 class="mt-10">Manage Section</h4>
        <div class="row">
            <div class="col-lg-2 mb-10">
                <label class="form-check-image border p-3 active">
                    <div class="form-check-wrapper">
                        <img class="img-fluid rounded-3" style="height: 150px; object-fit: cover;"
                            src="{{ asset('admin') }}/assets/media/ManageSection/general-info.png" />
                    </div>

                    <div class="form-check form-check-custom form-check-solid my-5">
                        <input class="form-check-input" type="checkbox" value="1" name="general_info_show" @if($nfc_card->general_info_show == "1") checked @endif />
                        <div class="form-check-label">
                            Show <strong class="fw-bold">"General Information"</strong>.
                        </div>
                    </div>
                </label>
            </div>
            <div class="col-lg-2 mb-3">
                <label class="form-check-image border p-3">
                    <div class="form-check-wrapper">
                        <img class="img-fluid rounded-3" style="width: 100%; height: 150px; object-fit: cover;"
                            src="{{ asset('admin') }}/assets/media/ManageSection/business-hour.png" />
                    </div>

                    <div class="form-check form-check-custom form-check-solid my-5 me-10">
                        <input class="form-check-input" type="checkbox" value="1" name="business_hours_show" @if($nfc_card->business_hours_show == "1") checked @endif id="text_wow" />
                        <div class="form-check-label">
                            Show <strong class="fw-bold">"Business Hour"</strong>.
                        </div>
                    </div>
                </label>
            </div>
            <div class="col-lg-2 mb-3">
                <label class="form-check-image border p-3">
                    <div class="form-check-wrapper">
                        <img class="img-fluid rounded-3" style="height: 150px; object-fit: cover;"
                            src="{{ asset('admin') }}/assets/media/ManageSection/companies.png" />
                    </div>

                    <div class="form-check form-check-custom form-check-solid my-5 me-10">
                        <input class="form-check-input" type="checkbox" value="1" name="companies_show" @if($nfc_card->companies_show == "1") checked @endif />
                        <div class="form-check-label">
                            Show <strong class="fw-bold">"Companies"</strong>.
                        </div>
                    </div>
                </label>
            </div>
            <div class="col-lg-2 mb-3">
                <label class="form-check-image border p-3">
                    <div class="form-check-wrapper">
                        <img class="img-fluid rounded-3" style="height: 150px; object-fit: cover;"
                            src="{{ asset('admin') }}/assets/media/ManageSection/services.png" />
                    </div>

                    <div class="form-check form-check-custom form-check-solid my-5 me-10">
                        <input class="form-check-input" type="checkbox" value="1" name="services_show" @if($nfc_card->services_show == "1") checked @endif />
                        <div class="form-check-label">
                            Show <strong class="fw-bold">"Services"</strong>.
                        </div>
                    </div>
                </label>
            </div>
            <div class="col-lg-2 mb-3">
                <label class="form-check-image border p-3">
                    <div class="form-check-wrapper">
                        <img class="img-fluid rounded-3" style="height: 150px; object-fit: cover;"
                            src="{{ asset('admin') }}/assets/media/ManageSection/product.png" />
                    </div>

                    <div class="form-check form-check-custom form-check-solid my-5 me-10">
                        <input class="form-check-input" type="checkbox" value="1" name="products_show" @if($nfc_card->products_show == "1") checked @endif />
                        <div class="form-check-label">
                            Show <strong class="fw-bold">"Product"</strong>.
                        </div>
                    </div>
                </label>
            </div>
            <div class="col-lg-2 mb-3">
                <label class="form-check-image border p-3">
                    <div class="form-check-wrapper">
                        <img class="img-fluid rounded-3" style="height: 150px; object-fit: cover;"
                            src="{{ asset('admin') }}/assets/media/ManageSection/gallery.png" />
                    </div>

                    <div class="form-check form-check-custom form-check-solid my-5 me-10">
                        <input class="form-check-input" type="checkbox" value="1" name="galleries_show" @if($nfc_card->galleries_show == "1") checked @endif />
                        <div class="form-check-label">
                            Show <strong class="fw-bold">"Gallery"</strong>.
                        </div>
                    </div>
                </label>
            </div>
            <div class="col-lg-2 mb-3">
                <label class="form-check-image border p-3">
                    <div class="form-check-wrapper">
                        <img class="img-fluid rounded-3" style="height: 150px; object-fit: cover;"
                            src="{{ asset('admin') }}/assets/media/ManageSection/testimonial.png" />
                    </div>

                    <div class="form-check form-check-custom form-check-solid my-5 me-10">
                        <input class="form-check-input" type="checkbox" value="1" name="testimonials_show" @if($nfc_card->testimonials_show == "1") checked @endif />
                        <div class="form-check-label">
                            Show <strong class="fw-bold">"Testimonial"</strong>.
                        </div>
                    </div>
                </label>
            </div>
            <div class="col-lg-2 mb-3">
                <label class="form-check-image border p-3">
                    <div class="form-check-wrapper">
                        <img class="img-fluid rounded-3" style="height: 150px; object-fit: cover;"
                            src="{{ asset('admin') }}/assets/media/ManageSection/social.png" />
                    </div>

                    <div class="form-check form-check-custom form-check-solid my-5 me-10">
                        <input class="form-check-input" type="checkbox" value="1" name="social_links_show" @if($nfc_card->social_links_show == "1") checked @endif />
                        <div class="form-check-label">
                            Show <strong class="fw-bold">"Social Link"</strong>.
                        </div>
                    </div>
                </label>
            </div>
            <div class="col-lg-2 mb-3">
                <label class="form-check-image border p-3">
                    <div class="form-check-wrapper">
                        <img class="img-fluid rounded-3" style="height: 150px; object-fit: cover;"
                            src="{{ asset('admin') }}/assets/media/ManageSection/social.png" />
                    </div>

                    <div class="form-check form-check-custom form-check-solid my-5 me-10">
                        <input class="form-check-input" type="checkbox" value="1" name="banner" @if($nfc_card->banner == "1") checked @endif />
                        <div class="form-check-label">
                            Show <strong class="fw-bold">"Pop Up Welcome Notice"</strong>.
                        </div>
                    </div>
                </label>
            </div>
            <div class="col-lg-2 mb-3">
                <label class="form-check-image border p-3">
                    <div class="form-check-wrapper">
                        <img class="img-fluid rounded-3" style="height: 150px; object-fit: cover;"
                            src="{{ asset('admin') }}/assets/media/ManageSection/privacy.png" />
                    </div>

                    <div class="form-check form-check-custom form-check-solid my-5 me-10">
                        <input class="form-check-input" type="checkbox" value="1" name="privacy_policy_show" @if($nfc_card->privacy_policy_show == "1") checked @endif />
                        <div class="form-check-label">
                            Show <strong class="fw-bold">"Privacy Policy"</strong>.
                        </div>
                    </div>
                </label>
            </div>
            <div class="col-lg-2 mb-3">
                <label class="form-check-image border p-3">
                    <div class="form-check-wrapper">
                        <img class="img-fluid rounded-3" style="height: 150px; object-fit: cover;"
                            src="{{ asset('admin') }}/assets/media/ManageSection/terms.png" />
                    </div>

                    <div class="form-check form-check-custom form-check-solid my-5 me-10">
                        <input class="form-check-input" type="checkbox" value="1" name="terms_condition_show" @if($nfc_card->terms_condition_show == "1") checked @endif />
                        <div class="form-check-label">
                            Show <strong class="fw-bold">"Terms & Condition"</strong>.
                        </div>
                    </div>
                </label>
            </div>
        </div>
    </div>

    <div class="d-flex justify-content-end mt-10">
        <button type="submit" onclick="submitSettingForm()"  class="kt_docs_formvalidation_text_submit btn btn-primary">
            <span class="indicator-label">
                Save
            </span>
            <span class="indicator-progress">
                Please wait... <span class="spinner-border spinner-border-sm align-middle ms-2"></span>
            </span>
        </button>
    </div>
</form>


@push('scripts')
    <script>
        function submitSettingForm() {
            var form = $('.setting_form');
            var url = form.attr('action');
            var formData = new FormData(form[0]);
            var setting_container = $('.setting_container');

            var submitButton = form.find('.kt_docs_formvalidation_text_submit');
            submitButton.prop('disabled', true).addClass('disabled');

            $.ajax({
                type: 'POST', // Ensure this is POST
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
                    if (response.setting_view) {
                        setting_container.empty().html(response.setting_view);
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
    </script>
@endpush

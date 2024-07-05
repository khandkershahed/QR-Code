<form class="general_info_form form" method="POST" action="{{ route('nfc.general_info.add') }}" autocomplete="off">
    @csrf
    <input type="hidden" name="card_id" value="{{ $nfc_card->id }}">
    <div class="row">
        <div class="col-lg-12 mb-5">
            <div class="row">
                <div class="fv-row mb-4 col-lg-5">
                    <x-metronic.label class="required fw-semibold fs-6 mb-2">URL
                        Alias</x-metronic.label>
                    <div class="input-group">
                        <x-metronic.input type="text" class="form-control form-control-solid form-control-sm"
                            name="url_alias" id="basic-url" required aria-describedby="basic-addon3"
                            placeholder="my-vcard-page-url" :value="optional($nfc_card)->url_alias" />
                    </div>
                    <span id="url_alias_feedback" class="text-danger" style="display: none;"></span>
                </div>
                <div class="fv-row mb-4 col-lg-7">
                    <x-metronic.label class="required fw-semibold fs-6 mb-2">VCard
                        Name</x-metronic.label>
                    <div class="input-group">
                        <x-metronic.input type="text" class="form-control form-control-solid form-control-sm"
                            name="vcard_name" placeholder="Enter VCard Name" required :value="optional($nfc_card)->vcard_name" />
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-5">
            <div class="row">
                <div class="fv-row mb-5 col-lg-12">
                    <x-metronic.label class="fw-semibold fs-12 mb-2">Occupation</x-metronic.label>
                    <x-metronic.input type="text" class="form-control form-control-solid form-control-sm"
                        name="designation" placeholder="Enter Occupation Name" :value="optional($nfc_card)->designation" />
                </div>
                <div class="col-lg-12 mb-5">
                    <x-metronic.label for="profile_image"
                        class="fw-semibold fs-6 mb-2">{{ __('Profile Image') }}</x-metronic.label>
                    <x-metronic.file-input id="profile_image" name="profile_image"
                        class="form-control form-control-solid form-control-sm"
                        :value="optional($nfc_card)->profile_image"></x-metronic.file-input>
                </div>
                <div class="col-lg-12 mb-5">
                    <x-metronic.label for="banner_image"
                        class="fw-semibold fs-6 mb-2">{{ __('Cover Image ') }}</x-metronic.label>
                    <x-metronic.file-input id="banner_image" name="banner_image"
                        class="form-control form-control-solid form-control-sm"
                        :value="optional($nfc_card)->banner_image"></x-metronic.file-input>
                </div>
            </div>
        </div>
        <div class="col-lg-7">
            <div class="col-lg-12 mb-7">
                <x-metronic.label for="logo"
                    class="fw-semibold fs-6 mb-2">{{ __('Description') }}</x-metronic.label>
                <textarea name="bio_description" class="form-control form-control-solid form-control-sm" rows="7">{{ old('bio_description') }}</textarea>
            </div>
        </div>
    </div>
    <div class="separator separator-dashed separator-content border-info my-15">
        <i class="fa-solid fa-diamond fs-1 text-info"></i>
    </div>
    <div class="row">
        <div>
            <h1 class="text-start">VCard Details</h1>
        </div>
        <div class="fv-row col-lg-4 col-6 mb-4">
            <x-metronic.label class="required fw-semibold fs-6 mb-2">First
                Name</x-metronic.label>
            <x-metronic.input type="text" class="form-control form-control-solid form-control-sm" name="first_name"
                :value="optional($nfc_card->nfcData)->first_name" placeholder="Jone Robert" />
        </div>
        <div class="fv-row col-lg-4 col-6 mb-4">
            <x-metronic.label class="required fw-semibold fs-6 mb-2">Last
                Name</x-metronic.label>
            <x-metronic.input type="text" class="form-control form-control-solid form-control-sm" name="last_name"
                :value="optional($nfc_card->nfcData)->last_name" placeholder="Washington" />
        </div>
        <div class="fv-row col-lg-4 col-6 mb-4">
            <x-metronic.label class="required fw-semibold fs-6 mb-2">Email</x-metronic.label>
            <x-metronic.input type="email" class="form-control form-control-solid form-control-sm"
                name="email_personal" :value="optional($nfc_card->nfcData)->email_personal" placeholder="Washington@maill.com" />
        </div>
        <div class="fv-row col-lg-4 col-6 mb-4">
            <x-metronic.label class="fw-semibold fs-6 mb-2">Alternative
                Email</x-metronic.label>
            <x-metronic.input type="email" class="form-control form-control-solid form-control-sm" name="email_work"
                :value="optional($nfc_card->nfcData)->email_work" placeholder="Washington@maill.com" />
        </div>
        <div class="fv-row col-lg-4 col-6 mb-4">
            <x-metronic.label class="required fw-semibold fs-6 mb-2">Phone</x-metronic.label>
            <x-metronic.input type="text" class="form-control form-control-solid form-control-sm"
                name="phone_personal" :value="optional($nfc_card->nfcData)->phone_personal" placeholder="(+1 05)" />
        </div>
        <div class="fv-row col-lg-4 col-6 mb-4">
            <x-metronic.label class="fw-semibold fs-6 mb-2">Alternative
                Phone</x-metronic.label>
            <x-metronic.input type="text" class="form-control form-control-solid form-control-sm" name="phone_work"
                :value="optional($nfc_card->nfcData)->phone_work" placeholder="(+1 05)" />
        </div>
        <div class="fv-row col-lg-4 col-6 mb-4">
            <x-metronic.label class="fw-semibold fs-6 mb-2">Location</x-metronic.label>
            {{-- <x-metronic.input type="text" class="form-control form-control-solid form-control-sm" name="location" :value="old('location')"
                placeholder="Enter Location" /> --}}
            <textarea name="location" class="form-control form-control-solid form-control-sm" rows="3">{{ optional($nfc_card->nfcData)->location }}</textarea>
        </div>
        <div class="fv-row col-lg-4 col-6 mb-4">
            <x-metronic.label class="fw-semibold fs-6 mb-2">Location URL</x-metronic.label>
            <x-metronic.input type="text" class="form-control form-control-solid form-control-sm"
                name="location_url" :value="optional($nfc_card->nfcData)->location_url" placeholder="Enter Location URl " />
        </div>
        <div class="fv-row col-lg-4 col-6 mb-4">
            <x-metronic.label class="fw-semibold fs-6 mb-2">Date Of
                Birth</x-metronic.label>
            <x-metronic.input type="date" class="form-control form-control-solid form-control-sm"
                name="date_of_birth" :value="optional($nfc_card->nfcData)->date_of_birth" placeholder="Enter Date Of Birth " />
        </div>
        <div class="fv-row col-lg-4 col-6 mb-4">
            <x-metronic.label class="fw-semibold fs-6 mb-2">Company</x-metronic.label>
            <x-metronic.input type="text" class="form-control form-control-solid form-control-sm"
                name="company_name" :value="optional($nfc_card->nfcData)->company_name" placeholder="Enter Company Name " />
        </div>
        <div class="fv-row col-lg-4 col-6 mb-4">
            <x-metronic.label class="fw-semibold fs-6 mb-2">Job
                Title</x-metronic.label>
            <x-metronic.input type="text" class="form-control form-control-solid form-control-sm" name="job_title"
                :value="optional($nfc_card->nfcData)->job_title" placeholder="Enter Job Title " />
        </div>
        <div class="fv-row col-lg-4 col-6 mb-4">
            <x-metronic.label class="fw-semibold fs-6 mb-2">Default
                Language</x-metronic.label>
            <select class="form-select" data-control="select2" data-placeholder="English" name="default_language"
                :value="optional($nfc_card - > nfcData) - > default_language">
                <option></option>
                <option value="1">China</option>
                <option value="2">Arabic</option>
            </select>
        </div>
    </div>

    <div class="d-flex justify-content-end">
        <button type="submit" onclick="submitGeneralInfoForm()"
            class="kt_docs_formvalidation_text_submit btn btn-primary mt-5">
            <span class="indicator-label">
                Save Data
            </span>
            <span class="indicator-progress">
                Please wait... <span class="spinner-border spinner-border-sm align-middle ms-2"></span>
            </span>
        </button>
    </div>
</form>

@push('scripts')
    <script>
        function submitGeneralInfoForm() {
            var form = $('.general_info_form');
            var url = form.attr('action');
            var formData = new FormData(form[0]);
            var general_info_container = $('.general_info_container');

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
                    // Log the entire response to inspect it
                    console.log('Form submitted successfully:', response);

                    if (response.general_info_view) {
                        console.log('Updating container with new HTML');

                        general_info_container.empty();
                        general_info_container.html(response.general_info_view);
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

                    // Show error message using a toaster or alert
                    toastr.error('An error occurred while saving data.', 'Error');
                },
                complete: function() {
                    // Re-enable the submit button and hide the loading indicator
                    submitButton.prop('disabled', false).removeClass('disabled');
                    submitButton.find('.indicator-label').show();
                    submitButton.find('.indicator-progress').hide();
                }
            });
        }
    </script>
@endpush

<form class="business_hours_form form" method="POST" action="{{ route('nfc.business_hours.add') }}" autocomplete="off" enctype="multipart/form-data">
    @csrf
    <input type="hidden" name="card_id" value="{{ $nfc_card->id }}">
    <div class="row py-10">
        <div class="col-lg-6 mb-4 bg-light mx-auto">
            <div class="row border-info border-dashed border-1 gx-2 py-2 align-items-center px-3 rounded-2">
                <div class="col-lg-12">
                    <div class="row align-items-center pb-3">
                        <div class="col-lg-4">
                            <div class="form-check ps-0 border bg-dark p-3 rounded-2 text-center text-white" style="text-align: start !important;">
                                <label class="form-check-label" for="monday">
                                    <input class="form-check-input ms-3" type="checkbox" name="monday" @checked(optional($nfc_card->nfcData)->monday == '1') value="1"
                                        id="monday_checkbox" />
                                    <span class="ps-3">Monday</span>
                                </label>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <x-metronic.input id="start_time_monday" type="time"
                                name="start_time_monday" :value="optional($nfc_card->nfcData)->start_time_monday"
                                placeholder="Enter time" />
                        </div>
                        <div class="col-lg-4">
                            <x-metronic.input id="end_time_monday" type="time"
                                name="end_time_monday" :value="optional($nfc_card->nfcData)->end_time_monday"
                                placeholder="Enter time" />
                        </div>
                    </div>
                    <div class="row align-items-center pb-3">
                        <div class="col-lg-4">
                            <div class="form-check ps-0 border bg-dark p-3 rounded-2 text-center text-white" style="text-align: start !important;">
                                <label class="form-check-label" for="tuesday">
                                    <input class="form-check-input ms-3" type="checkbox" name="tuesday" @checked(optional($nfc_card->nfcData)->tuesday == '1') value="1"
                                        id="tuesday_checkbox" />
                                        <span class="ps-3">
                                    Tuesday
                                   </span>
                                </label>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <x-metronic.input id="start_time_tuesday" type="time"
                                name="start_time_tuesday" :value="optional($nfc_card->nfcData)->start_time_tuesday"
                                placeholder="Enter time" />
                        </div>
                        <div class="col-lg-4">
                            <x-metronic.input id="end_time_tuesday" type="time"
                                name="end_time_tuesday" :value="optional($nfc_card->nfcData)->end_time_tuesday"
                                placeholder="Enter time" />
                        </div>
                    </div>
                    <div class="row align-items-center pb-3">
                        <div class="col-lg-4">
                            <div class="form-check ps-0 border bg-dark p-3 rounded-2 text-center text-white" style="text-align: start !important;">
                                <label class="form-check-label" for="wednesday">
                                    <input class="form-check-input ms-3" type="checkbox" name="wednesday" @checked(optional($nfc_card->nfcData)->wednesday == '1') value="1"
                                        id="wednesday_checkbox" />
                                    <span class="ps-3">
                                        Wednesday
                                    </span>
                                </label>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <x-metronic.input id="start_time_wednesday" type="time"
                                name="start_time_wednesday" :value="optional($nfc_card->nfcData)->start_time_wednesday"
                                placeholder="Enter time" />
                        </div>
                        <div class="col-lg-4">
                            <x-metronic.input id="end_time_wednesday" type="time"
                                name="end_time_wednesday" :value="optional($nfc_card->nfcData)->end_time_wednesday"
                                placeholder="Enter time" />
                        </div>
                    </div>
                    <div class="row align-items-center pb-3">
                        <div class="col-lg-4">
                            <div class="form-check ps-0 border bg-dark p-3 rounded-2 text-center text-white" style="text-align: start !important;">
                                <label class="form-check-label" for="thursday">
                                    <input class="form-check-input ms-3" type="checkbox" name="thursday" @checked(optional($nfc_card->nfcData)->thursday == '1') value="1"
                                        id="thursday_checkbox" />
                                    <span class="ps-3">Thursday</span>
                                </label>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <x-metronic.input id="start_time_thursday" type="time"
                                name="start_time_thursday" :value="optional($nfc_card->nfcData)->start_time_thursday"
                                placeholder="Enter time" />
                        </div>
                        <div class="col-lg-4">
                            <x-metronic.input id="end_time_thursday" type="time"
                                name="end_time_thursday" :value="optional($nfc_card->nfcData)->end_time_thursday"
                                placeholder="Enter time" />
                        </div>
                    </div>
                    <div class="row align-items-center pb-3">
                        <div class="col-lg-4">
                            <div class="form-check ps-0 border bg-dark p-3 rounded-2 text-center text-white" style="text-align: start !important;">
                                <label class="form-check-label" for="friday">
                                    <input class="form-check-input ms-3" type="checkbox" name="friday" @checked(optional($nfc_card->nfcData)->friday == '1') value="1"
                                        id="friday_checkbox" />
                                        <span class="ps-3">Friday</span>
                                </label>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <x-metronic.input id="start_time_friday" type="time"
                                name="start_time_friday" :value="optional($nfc_card->nfcData)->start_time_friday"
                                placeholder="Enter time" />
                        </div>
                        <div class="col-lg-4">
                            <x-metronic.input id="end_time_friday" type="time"
                                name="end_time_friday" :value="optional($nfc_card->nfcData)->end_time_friday"
                                placeholder="Enter time" />
                        </div>
                    </div>
                    <div class="row align-items-center pb-3">
                        <div class="col-lg-4">
                            <div class="form-check ps-0 border bg-dark p-3 rounded-2 text-center text-white" style="text-align: start !important;">
                                <label class="form-check-label" for="saturday">
                                    <input class="form-check-input ms-3" type="checkbox" name="saturday" @checked(optional($nfc_card->nfcData)->saturday == '1') value="1"
                                        id="saturday_checkbox" />
                                        <span class="ps-3">Saturday</span>
                                </label>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <x-metronic.input id="start_time_saturday" type="time"
                                name="start_time_saturday" :value="optional($nfc_card->nfcData)->start_time_saturday"
                                placeholder="Enter time" />
                        </div>
                        <div class="col-lg-4">
                            <x-metronic.input id="end_time_saturday" type="time"
                                name="end_time_saturday" :value="optional($nfc_card->nfcData)->end_time_saturday"
                                placeholder="Enter time" />
                        </div>
                    </div>
                    <div class="row align-items-center pb-3">
                        <div class="col-lg-4">
                            <div class="form-check ps-0 border bg-dark p-3 rounded-2 text-center text-white" style="text-align: start !important;">
                                <label class="form-check-label" for="sunday">
                                    <input class="form-check-input ms-3" type="checkbox" name="sunday" @checked(optional($nfc_card->nfcData)->sunday == '1') value="1"
                                        id="sunday_checkbox" />
                                        <span class="ps-3">Sunday</span>
                                </label>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <x-metronic.input id="start_time_sunday" type="time"
                                name="start_time_sunday" :value="optional($nfc_card->nfcData)->start_time_sunday"
                                placeholder="Enter time" />
                        </div>
                        <div class="col-lg-4">
                            <x-metronic.input id="end_time_sunday" type="time"
                                name="end_time_sunday" :value="optional($nfc_card->nfcData)->end_time_sunday"
                                placeholder="Enter time" />
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <div class="d-flex justify-content-end">
        <button type="submit" onclick="submitBusinessHoursForm()"
            class="kt_docs_formvalidation_text_submit btn btn-primary mt-5">
            <span class="indicator-label">
                Save Business Hours
            </span>
            <span class="indicator-progress">
                Please wait... <span class="spinner-border spinner-border-sm align-middle ms-2"></span>
            </span>
        </button>
    </div>
</form>

@push('scripts')
    <script>
        function submitBusinessHoursForm() {
            var form = $('.business_hours_form');
            var url = form.attr('action');
            var formData = new FormData(form[0]);
            var business_hours_container = $('.business_hours_container');

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
                    if (response.business_hours_view) {
                        console.log('Updating container with new HTML');

                        business_hours_container.empty();
                        business_hours_container.html(response.business_hours_view);
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

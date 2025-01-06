<form class="business_hours_form form" method="POST" action="{{ route('nfc.business_hours.add') }}" autocomplete="off"
    enctype="multipart/form-data">
    @csrf
    <input type="hidden" name="card_id" value="{{ $nfc_card->id }}">
    <div class="row">
        <div class="col-lg-12">
            <h2>Add Business Hour!</h2>
        </div>

        <div class="col-lg-12 bg-light mx-auto">
            <div class="row border-info gx-2 py-2 align-items-center px-3 rounded-2">
                <div class="col-lg-12 pt-3">
                    <div class="row align-items-center pb-3">
                        <div class="col-lg-4">
                            <div class="form-check ps-0 border bg-light-primary p-3 rounded-2 text-center text-info"
                                style="text-align: start !important;">
                                <label class="form-check-label" for="monday">
                                    <input class="form-check-input ms-3" type="checkbox" name="monday"
                                        @checked(optional($nfc_card->nfcData)->monday == '1') value="1" id="monday_checkbox" checked/>
                                    <span class="ps-3">Monday</span>
                                </label>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <input id="start_time_monday" type="time" class="form-control"
                                name="start_time_monday"
                                value="{{ optional($nfc_card->nfcData)->start_time_monday ?? '09:00' }}" placeholder="Enter time" />
                        </div>
                        <div class="col-lg-4">
                            <input id="end_time_monday" type="time" class="form-control"
                                name="end_time_monday"
                                value="{{ optional($nfc_card->nfcData)->end_time_monday ?? '17:00' }}" placeholder="Enter time" />
                        </div>
                    </div>

                    <!-- Repeat for other days as needed -->
                    <div class="row align-items-center pb-3">
                        <div class="col-lg-4">
                            <div class="form-check ps-0 border bg-light-primary p-3 rounded-2 text-center text-info"
                                style="text-align: start !important;">
                                <label class="form-check-label" for="tuesday">
                                    <input class="form-check-input ms-3" type="checkbox" name="tuesday"
                                        @checked(optional($nfc_card->nfcData)->tuesday == '1') value="1" id="tuesday_checkbox" checked/>
                                    <span class="ps-3">Tuesday</span>
                                </label>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <input id="start_time_tuesday" type="time" class="form-control"
                                name="start_time_tuesday"
                                value="{{ optional($nfc_card->nfcData)->start_time_tuesday ?? '09:00' }}" placeholder="Enter time" />
                        </div>
                        <div class="col-lg-4">
                            <input id="end_time_tuesday" type="time" class="form-control"
                                name="end_time_tuesday"
                                value="{{ optional($nfc_card->nfcData)->end_time_tuesday ?? '17:00' }}" placeholder="Enter time" />
                        </div>
                    </div>

                    <!-- Repeat for other days as needed -->
                    <div class="row align-items-center pb-3">
                        <div class="col-lg-4">
                            <div class="form-check ps-0 border bg-light-primary p-3 rounded-2 text-center text-info"
                                style="text-align: start !important;">
                                <label class="form-check-label" for="wednesday">
                                    <input class="form-check-input ms-3" type="checkbox" name="wednesday"
                                        @checked(optional($nfc_card->nfcData)->wednesday == '1') value="1" id="wednesday_checkbox" checked/>
                                    <span class="ps-3">Wednesday</span>
                                </label>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <input id="start_time_wednesday" type="time" class="form-control"
                                name="start_time_wednesday"
                                value="{{ optional($nfc_card->nfcData)->start_time_wednesday ?? '09:00' }}" placeholder="Enter time" />
                        </div>
                        <div class="col-lg-4">
                            <input id="end_time_wednesday" type="time" class="form-control"
                                name="end_time_wednesday"
                                value="{{ optional($nfc_card->nfcData)->end_time_wednesday ?? '17:00' }}" placeholder="Enter time" />
                        </div>
                    </div>

                    <!-- Repeat for other days as needed -->
                    <div class="row align-items-center pb-3">
                        <div class="col-lg-4">
                            <div class="form-check ps-0 border bg-light-primary p-3 rounded-2 text-center text-info"
                                style="text-align: start !important;">
                                <label class="form-check-label" for="thursday">
                                    <input class="form-check-input ms-3" type="checkbox" name="thursday"
                                        @checked(optional($nfc_card->nfcData)->thursday == '1') value="1" id="thursday_checkbox" checked/>
                                    <span class="ps-3">Thursday</span>
                                </label>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <input id="start_time_thursday" type="time" class="form-control"
                                name="start_time_thursday"
                                value="{{ optional($nfc_card->nfcData)->start_time_thursday ?? '09:00' }}" placeholder="Enter time" />
                        </div>
                        <div class="col-lg-4">
                            <input id="end_time_thursday" type="time" class="form-control"
                                name="end_time_thursday"
                                value="{{ optional($nfc_card->nfcData)->end_time_thursday ?? '17:00' }}" placeholder="Enter time" />
                        </div>
                    </div>

                    <!-- Repeat for other days as needed -->
                    <div class="row align-items-center pb-3">
                        <div class="col-lg-4">
                            <div class="form-check ps-0 border bg-light-primary p-3 rounded-2 text-center text-info"
                                style="text-align: start !important;">
                                <label class="form-check-label" for="friday">
                                    <input class="form-check-input ms-3" type="checkbox" name="friday"
                                        @checked(optional($nfc_card->nfcData)->friday == '1') value="1" id="friday_checkbox" checked/>
                                    <span class="ps-3">Friday</span>
                                </label>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <input id="start_time_friday" type="time" class="form-control"
                                name="start_time_friday"
                                value="{{ optional($nfc_card->nfcData)->start_time_friday ?? '09:00' }}" placeholder="Enter time" />
                        </div>
                        <div class="col-lg-4">
                            <input id="end_time_friday" type="time" class="form-control"
                                name="end_time_friday"
                                value="{{ optional($nfc_card->nfcData)->end_time_friday ?? '17:00' }}" placeholder="Enter time" />
                        </div>
                    </div>

                    <!-- Repeat for other days as needed -->
                    <div class="row align-items-center pb-3">
                        <div class="col-lg-4">
                            <div class="form-check ps-0 border bg-light-primary p-3 rounded-2 text-center text-info"
                                style="text-align: start !important;">
                                <label class="form-check-label" for="saturday">
                                    <input class="form-check-input ms-3" type="checkbox" name="saturday"
                                        @checked(optional($nfc_card->nfcData)->saturday == '1') value="1" id="saturday_checkbox" checked/>
                                    <span class="ps-3">Saturday</span>
                                </label>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <input id="start_time_saturday" type="time" class="form-control"
                                name="start_time_saturday"
                                value="{{ optional($nfc_card->nfcData)->start_time_saturday ?? '09:00' }}" placeholder="Enter time" />
                        </div>
                        <div class="col-lg-4">
                            <input id="end_time_saturday" type="time" class="form-control"
                                name="end_time_saturday"
                                value="{{ optional($nfc_card->nfcData)->end_time_saturday ?? '17:00' }}" placeholder="Enter time" />
                        </div>
                    </div>

                    <!-- Repeat for other days as needed -->
                    <div class="row align-items-center pb-3">
                        <div class="col-lg-4">
                            <div class="form-check ps-0 border bg-light-primary p-3 rounded-2 text-center text-info"
                                style="text-align: start !important;">
                                <label class="form-check-label" for="sunday">
                                    <input class="form-check-input ms-3" type="checkbox" name="sunday"
                                        @checked(optional($nfc_card->nfcData)->sunday == '1') value="1" id="sunday_checkbox" />
                                    <span class="ps-3">Sunday</span>
                                </label>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <input id="start_time_sunday" type="time" class="form-control"
                                name="start_time_sunday"
                                value="{{ optional($nfc_card->nfcData)->start_time_sunday ?? '09:00' }}" placeholder="Enter time" />
                        </div>
                        <div class="col-lg-4">
                            <input id="end_time_sunday" type="time" class="form-control"
                                name="end_time_sunday"
                                value="{{ optional($nfc_card->nfcData)->end_time_sunday ?? '17:00' }}" placeholder="Enter time" />
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <div class="d-flex justify-content-end">
        <button type="submit" class="kt_docs_formvalidation_text_submit btn btn-primary mt-5 me-2">
            <span class="indicator-label">Save Business Hours</span>
            <span class="indicator-progress" style="display: none;">Please wait... <span
                    class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
        </button>
        <a href="javascript:void(0)" onclick="goToTab(event, '#companies')" class="btn btn-primary mt-5 d-flex align-items-center">
            <span>Next</span>
            <span><i class="fa-solid fa-arrow-right-long ps-2"></i></span>
        </a>
    </div>
</form>

@push('scripts')
    <script>
        $(document).ready(function() {


            // Function to handle form submission
            function submitBusinessHoursForm(event) {
                event.preventDefault(); // Prevent default form submission

                var form = $('.business_hours_form');
                var url = form.attr('action');
                var formData = new FormData(form[0]);
                var business_hours_container = $('.business_hours_container');
                var submitButton = form.find('.kt_docs_formvalidation_text_submit');

                // Remove any existing error messages and red borders
                form.find('.error-message').remove();
                form.find('.form-control').removeClass('is-invalid');

                // Validate if any input field is filled
                var anyInputFilled = form.find('input[type="checkbox"]:checked').length > 0 ||
                    form.find('input[type="text"]').filter(function() {
                        return $(this).val().trim() !== '';
                    }).length > 0;

                if (anyInputFilled) {
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
                            if (response.business_hours_view) {
                                business_hours_container.empty();
                                business_hours_container.html(response.business_hours_view);
                                toastr.success('Data saved successfully!', 'Success');
                                attachEventHandlers();
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
                            submitButton.find('.indicator-label').show();
                            submitButton.find('.indicator-progress').hide();
                            submitButton.prop('disabled', false).removeClass('disabled');
                        }
                    });
                } else {
                    Swal.fire({
                        text: 'At least one field should be filled to submit the data!',
                        icon: 'error',
                        buttonsStyling: false,
                        confirmButtonText: 'Ok, got it!',
                        customClass: {
                            confirmButton: 'btn btn-primary'
                        }
                    });
                }
            }

            function attachEventHandlers() {
                $('.business_hours_form').off('submit').on('submit', submitBusinessHoursForm);

                $('.business_hours_form input, .business_hours_form select').off('input change').on('input change',
                    function() {
                        $(this).removeClass('is-invalid');
                        $(this).next('.error-message').remove();
                    });
            }

            attachEventHandlers();
        });
    </script>
@endpush

@if (session('error'))
    <div class="alert alert-danger">
        {{ session('error') }}
    </div>
@endif
<div class="row g-2" id="columns-container">
    <div class="row py-10">
        <div class="col-lg-2 ">
            <div class="custom-fixed-top">
                <div class="d-flex flex-column flex-md-row rounded border bg-white">
                    @include('nfc.form_partials.tab_trigger')
                </div>
            </div>
        </div>
        <div class="col-lg-10">
            <div class="tab-content bg-white p-5" id="myTabContent">
                <div class="tab-pane fade active show" id="kt_vtab_pane_1" role="tabpanel">
                    <div>
                        <h1 class="text-start">Basic Details</h1>
                    </div>
                    <div class="row">
                        <div class="col-lg-12 general_info_container">
                            @include('nfc.form_partials.general_info')
                        </div>
                    </div>
                </div>

                <div class="tab-pane fade" id="kt_vtab_pane_2" role="tabpanel">
                    <div>
                        <h1 class="text-center">vCard Templates</h1>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            @include('nfc.form_partials.vcard_template')
                        </div>
                    </div>
                </div>

                <div class="tab-pane fade" id="kt_vtab_pane_3" role="tabpanel">
                    <div>
                        <h1 class="text-center">Business Hours</h1>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            @include('nfc.form_partials.business_hours')
                        </div>
                    </div>
                </div>

                <div class="tab-pane fade" id="kt_vtab_pane_5" role="tabpanel">
                    <div>
                        <h1 class="text-center">Services</h1>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            @include('nfc.form_partials.services')
                        </div>
                    </div>
                </div>

                <div class="tab-pane fade" id="kt_vtab_pane_6" role="tabpanel">
                    <div>
                        <h1 class="text-center">Products</h1>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            @include('nfc.form_partials.products')
                        </div>
                    </div>
                </div>

                <div class="tab-pane fade" id="kt_vtab_pane_7" role="tabpanel">
                    <div>
                        <h1 class="text-center">Galleries</h1>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            @include('nfc.form_partials.galleries')
                        </div>
                    </div>
                </div>


                <div class="tab-pane fade" id="kt_vtab_pane_9" role="tabpanel">
                    <div>
                        <h1 class="text-center">Testimonials</h1>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            @include('nfc.form_partials.testimonials')
                        </div>
                    </div>
                </div>

                <div class="tab-pane fade" id="kt_vtab_pane_11" role="tabpanel">
                    <div>
                        <h1 class="text-center">Social
                            links - Website</h1>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            @include('nfc.form_partials.social_links')
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="kt_vtab_pane_16" role="tabpanel">
                    <div>
                        <h1 class="text-center">Settings</h1>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            {{-- @include('nfc.form_partials.setting') --}}
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

@push('scripts')
        {{-- <script>
    $(document).ready(function() {
        $('.general_info_form').submit(function(e) {
            e.preventDefault();

            var form = $(this);
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
                    // Handle success response
                    console.log('Form submitted successfully:', response);

                    general_info_container.html(response.general_info_container);
                    toastr.success('Data saved successfully!', 'Success');

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
        });
    });
</script> --}}
        <script>
            $(document).ready(function() {
                $(document).ready(function() {
                    $('.general_info_form').submit(function(e) {
                        e.preventDefault();

                        var form = $(this);
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
                                // Handle success response
                                console.log('Form submitted successfully:', response);

                                if (response.general_info_container) {
                                    general_info_container.html(response
                                        .general_info_container);
                                    toastr.success('Data saved successfully!', 'Success');
                                } else {
                                    toastr.error('Unexpected response format.', 'Error');
                                }

                                // Optionally reset the form or perform other actions
                                // form.trigger('reset');
                            },
                            error: function(xhr, status, error) {
                                // Handle error response
                                console.error('Error:', error);

                                // Show error message using a toaster or alert
                                toastr.error('An error occurred while saving data.',
                                    'Error');
                            },
                            complete: function() {
                                // Re-enable the submit button and hide the loading indicator
                                submitButton.prop('disabled', false).removeClass(
                                    'disabled');
                                submitButton.find('.indicator-label').show();
                                submitButton.find('.indicator-progress').hide();
                            }
                        });
                    });
                });

            });
        </script>
@endpush

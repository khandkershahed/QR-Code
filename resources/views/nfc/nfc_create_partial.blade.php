<div class="row py-15">
    <h3>New VCard</h3>
    <div class="col-lg-12">
        <div class="card rounded-0">
            <div class="card-body ">
                <div class="row">
                    <div class="col-lg-12">
                        @if (strpos(Route::current()->getName(), 'user.') === 0)
                            <form class="virtual_card_create_form form" action="{{ route('user.virtual-card.store') }}"
                                autocomplete="off" enctype="multipart/form-data" method="post"
                                id="virtual_card_create_form">
                            @else
                                <form class="virtual_card_create_form form"
                                    action="{{ route('admin.virtual-card.store') }}" autocomplete="off"
                                    enctype="multipart/form-data" method="post" id="virtual_card_create_form">
                        @endif
                        @csrf
                        <div class="row">
                            <div class="col-lg-12 mb-5">
                                <div class="row">
                                    <div class="fv-row mb-4 col-lg-5">
                                        <x-metronic.label class="required fw-semibold fs-6 mb-2">URL
                                            Alias 
                                            <span class="m2-1" data-bs-toggle="tooltip"
                            aria-label="Your billing numbers will be calculated based on your API method"
                            data-bs-original-title="Your billing numbers will be calculated based on your API method"
                            data-kt-initialized="1">
                            <i class="fa-solid fa-circle-info fs-7"></i><span class="path1"></span><span
                                    class="path2"></span><span class="path3"></span></i> </span>
                                        </x-metronic.label>
                                        <div class="input-group">
                                            <x-metronic.input type="text"
                                                class="form-control form-control-solid form-control-sm" name="url_alias"
                                                id="basic-url" required aria-describedby="basic-addon3"
                                                placeholder="my-vcard-page-url" :value="old('url_alias')" />
                                        </div>
                                        <span id="url_alias_feedback" class="text-danger" style="display: none;"></span>
                                    </div>
                                    <div class="fv-row mb-4 col-lg-7">
                                        <x-metronic.label class="required fw-semibold fs-6 mb-2">VCard
                                            Name</x-metronic.label>
                                        <div class="input-group">
                                            <x-metronic.input type="text"
                                                class="form-control form-control-solid form-control-sm"
                                                name="vcard_name" placeholder="Enter VCard Name" required
                                                :value="old('vcard_name')" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-5">
                                <div class="row">
                                    <div class="fv-row mb-5 col-lg-12">
                                        <x-metronic.label class="fw-semibold fs-12 mb-2">Occupation</x-metronic.label>
                                        <x-metronic.input type="text"
                                            class="form-control form-control-solid form-control-sm" name="designation"
                                            placeholder="Enter Occupation Name" :value="old('designation')" />
                                    </div>
                                    <div class="col-lg-12 mb-5">
                                        <x-metronic.label for="profile_image"
                                            class="fw-semibold fs-6 mb-2">{{ __('Profile Image') }}</x-metronic.label>
                                        <x-metronic.file-input id="profile_image" name="profile_image"
                                            class="form-control form-control-solid form-control-sm"
                                            :value="old('profile_image')"></x-metronic.file-input>
                                    </div>
                                    <div class="col-lg-12 mb-5">
                                        <x-metronic.label for="banner_image"
                                            class="fw-semibold fs-6 mb-2">{{ __('Cover Image ') }}</x-metronic.label>
                                        <x-metronic.file-input id="banner_image" name="banner_image"
                                            class="form-control form-control-solid form-control-sm"
                                            :value="old('banner_image')"></x-metronic.file-input>
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
                        <button type="submit" class="virtual_card_create_form_submit btn btn-primary">
                            <span class="indicator-label">
                                <i class="fa-solid fa-door-open"></i> Save
                            </span>
                            <span class="indicator-progress">
                                Please wait... <span class="spinner-border spinner-border-sm align-middle ms-2"></span>
                            </span>
                        </button>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@push('scripts')
    
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const forms = document.querySelectorAll('.virtual_card_create_form');

            forms.forEach((form) => {
                // Init form validation rules
                var validator = FormValidation.formValidation(
                    form, {
                        fields: {
                            'url_alias': {
                                validators: {
                                    notEmpty: {
                                        message: 'NFC Live Url Need'
                                    }
                                }
                            },
                            'vcard_name': {
                                validators: {
                                    notEmpty: {
                                        message: 'Vcard Name Must Need'
                                    }
                                }
                            },
                        },
                        plugins: {
                            trigger: new FormValidation.plugins.Trigger(),
                            bootstrap: new FormValidation.plugins.Bootstrap5({
                                rowSelector: '.fv-row',
                                eleInvalidClass: '',
                                eleValidClass: ''
                            })
                        }
                    }
                );

                // Submit button handler
                const submitButton = form.querySelector('.virtual_card_create_form_submit');
                submitButton.addEventListener('click', function(e) {
                    // Prevent default button action
                    e.preventDefault();

                    // Validate form before submit
                    if (validator) {
                        validator.validate().then(function(status) {
                            console.log('validated!');

                            if (status == 'Valid') {
                                // Show loading indication
                                submitButton.setAttribute('data-kt-indicator', 'on');

                                // Disable button to avoid multiple clicks
                                submitButton.disabled = true;

                                // Simulate form submission
                                setTimeout(function() {
                                    // Remove loading indication
                                    submitButton.removeAttribute(
                                        'data-kt-indicator');

                                    // Enable button
                                    submitButton.disabled = false;

                                    // Show popup confirmation
                                    Swal.fire({
                                        text: "Form has been successfully submitted!",
                                        icon: "success",
                                        buttonsStyling: false,
                                        confirmButtonText: "Ok, got it!",
                                        customClass: {
                                            confirmButton: "btn btn-primary"
                                        }

                                    }).then(function() {
                                        console.log("Swal closed!");
                                        form.submit();
                                        // Additional actions after Swal closes, if needed
                                    });

                                    //form.submit(); // Submit form
                                }, 2000);
                            } else {
                                Swal.fire({
                                    text: "Please fix the errors in the form before submitting.",
                                    icon: "error",
                                    buttonsStyling: false,
                                    confirmButtonText: "Ok, got it!",
                                    customClass: {
                                        confirmButton: "btn btn-primary"
                                    }
                                });
                            }
                        }).catch(function(error) {
                            console.error('Validation error:', error);
                            Swal.fire({
                                text: "An unexpected error occurred. Please try again.",
                                icon: "error",
                                buttonsStyling: false,
                                confirmButtonText: "Ok, got it!",
                                customClass: {
                                    confirmButton: "btn btn-primary"
                                }
                            });
                        });
                    }
                });
            });
        });

        // URL Alias uniqueness check
        $('input[name="url_alias"]').on('keyup', function() {
            let urlAlias = $(this).val();
            let feedbackElement = $('#url_alias_feedback');

            if (urlAlias.length > 0) {
                $.ajax({
                    url: '/check-url-alias', // The route to check the uniqueness
                    type: 'GET',
                    data: {
                        url_alias: urlAlias
                    },
                    success: function(response) {
                        if (response.is_unique) {
                            feedbackElement.hide();
                        } else {
                            feedbackElement.text(
                                'This URL alias is already taken. Please choose another one.'
                            );
                            feedbackElement.show();
                        }
                    },
                    error: function(xhr, status, error) {
                        console.error(error);
                        feedbackElement.text(
                            'An error occurred while checking the URL alias.');
                        feedbackElement.show();
                    }
                });
            } else {
                feedbackElement.hide();
            }
        });
    </script>
@endpush

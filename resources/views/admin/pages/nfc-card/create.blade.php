<x-admin-app-layout :title="'VCard Card Create'">
    <style>
        .nav-link {
            color: black;
            border: 1px solid #eee !important;
        }
    </style>
    @if (session('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
    @endif

    <div class="row py-10">
        <h3>New VCard</h3>
        <div class="col-lg-12">
            <div class="card rounded-0">
                <div class="card-body ">
                    <div class="row">
                        <div class="col-lg-12">
                            <form class="kt_docs_formvalidation_text form" action="#" autocomplete="off">
                                <div class="row">
                                    <div class="fv-row col-12">
                                        <label class="required fw-semibold fs-6 mb-2">URL Alias</label>
                                        <div class="input-group mb-5">
                                            <button class="input-group-text" id="basic-addon3"><i
                                                    class="fa-solid fa-arrows-rotate"></i></button>
                                            <input type="text" class="form-control" name="url_alias" id="basic-url"
                                                name="url_alias" aria-describedby="basic-addon3"
                                                placeholder="my-vcard-page-url" />
                                        </div>
                                    </div>
                                    <div class="fv-row col-4">
                                        <label class="required fw-semibold fs-6 mb-2">VCard Name</label>
                                        <div class="input-group mb-5">
                                            <input type="text" class="form-control" name="vcard_name"
                                                name="url_alias" placeholder="Enter VCard Name" />
                                        </div>
                                    </div>
                                    <div class="fv-row col-4">
                                        <label class="required fw-semibold fs-6 mb-2">Occupation</label>
                                        <input type="text" class="form-control" name="occupation"
                                            placeholder="Enter Occupation Name" />
                                    </div>

                                </div>
                                <button type="submit" class="kt_docs_formvalidation_text_submit btn btn-primary">
                                    <span class="indicator-label">
                                        Validation Form
                                    </span>
                                    <span class="indicator-progress">
                                        Please wait... <span
                                            class="spinner-border spinner-border-sm align-middle ms-2"></span>
                                    </span>
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row py-10 d-none">
        <div class="col-lg-2">
            <div class="">
                <div class="d-flex flex-column flex-md-row rounded border bg-white">
                    <ul class="nav nav-tabs nav-pills flex-row border-0 flex-md-column mb-3 mb-md-0 fs-6 w-100"
                        role="tablist">
                        <li class="nav-item w-100 me-0 mb-md-2" role="presentation">
                            <a class="nav-link active w-100 btn btn-flex btn-active-info fs-6 fw-normal"
                                data-bs-toggle="tab" href="#kt_vtab_pane_1" aria-selected="false" role="tab"
                                tabindex="-1">
                                <i class="fa-solid fa-circle-question"></i>
                                Basic Details
                            </a>
                        </li>
                        <li class="nav-item w-100 me-0 mb-md-2" role="presentation">
                            <a class="nav-link w-100 btn btn-flex btn-active-info fs-6 fw-normal" data-bs-toggle="tab"
                                href="#kt_vtab_pane_2" aria-selected="true" role="tab"><i
                                    class="fa-solid fa-id-badge"></i> vCard Templates</a>
                        </li>
                        <li class="nav-item w-100 me-0 mb-md-2" role="presentation">
                            <a class="nav-link w-100 btn btn-flex btn-active-info fs-6 fw-normal" data-bs-toggle="tab"
                                href="#kt_vtab_pane_3" aria-selected="false" role="tab" tabindex="-1"><i
                                    class="fa-solid fa-business-time"></i> Business
                                Hours</a>
                        </li>
                        <li class="nav-item w-100 me-0 mb-md-2" role="presentation">
                            <a class="nav-link w-100 btn btn-flex btn-active-info fs-6 fw-normal" data-bs-toggle="tab"
                                href="#kt_vtab_pane_4" aria-selected="false" role="tab" tabindex="-1"><i
                                    class="fa-solid fa-qrcode"></i> Customize QR
                                Code</a>
                        </li>
                        <li class="nav-item w-100 me-0 mb-md-2" role="presentation">
                            <a class="nav-link w-100 btn btn-flex btn-active-info fs-6 fw-normal" data-bs-toggle="tab"
                                href="#kt_vtab_pane_5" aria-selected="false" role="tab" tabindex="-1"><i
                                    class="fa-solid fa-hammer"></i> Services</a>
                        </li>
                        <li class="nav-item w-100 me-0 mb-md-2" role="presentation">
                            <a class="nav-link w-100 btn btn-flex btn-active-info fs-6 fw-normal" data-bs-toggle="tab"
                                href="#kt_vtab_pane_6" aria-selected="false" role="tab" tabindex="-1"><i
                                    class="fa-brands fa-product-hunt"></i> Products</a>
                        </li>
                        <li class="nav-item w-100 me-0 mb-md-2" role="presentation">
                            <a class="nav-link w-100 btn btn-flex btn-active-info fs-6 fw-normal" data-bs-toggle="tab"
                                href="#kt_vtab_pane_7" aria-selected="false" role="tab" tabindex="-1"><i
                                    class="fa-solid fa-photo-film"></i>
                                Galleries</a>
                        </li>
                        <li class="nav-item w-100 me-0 mb-md-2" role="presentation">
                            <a class="nav-link w-100 btn btn-flex btn-active-info fs-6 fw-normal" data-bs-toggle="tab"
                                href="#kt_vtab_pane_8" aria-selected="false" role="tab" tabindex="-1"><i
                                    class="fa-brands fa-blogger"></i> Blogs</a>
                        </li>
                        <li class="nav-item w-100 me-0 mb-md-2" role="presentation">
                            <a class="nav-link w-100 btn btn-flex btn-active-info fs-6 fw-normal" data-bs-toggle="tab"
                                href="#kt_vtab_pane_9" aria-selected="false" role="tab" tabindex="-1"><i
                                    class="fa-solid fa-comments"></i>
                                Testimonials</a>
                        </li>
                        <li class="nav-item w-100 me-0 mb-md-2" role="presentation">
                            <a class="nav-link w-100 btn btn-flex btn-active-info fs-6 fw-normal" data-bs-toggle="tab"
                                href="#kt_vtab_pane_10" aria-selected="false" role="tab" tabindex="-1"><i
                                    class="fa-solid fa-calendar-day"></i>
                                Appointments</a>
                        </li>
                        <li class="nav-item w-100 me-0 mb-md-2" role="presentation">
                            <a class="nav-link w-100 btn btn-flex btn-active-info fs-6 fw-normal" data-bs-toggle="tab"
                                href="#kt_vtab_pane_11" aria-selected="false" role="tab" tabindex="-1"><i
                                    class="fa-solid fa-share-from-square"></i> Social
                                links - Website</a>
                        </li>
                        <li class="nav-item w-100 me-0 mb-md-2" role="presentation">
                            <a class="nav-link w-100 btn btn-flex btn-active-info fs-6 fw-normal" data-bs-toggle="tab"
                                href="#kt_vtab_pane_12" aria-selected="false" role="tab" tabindex="-1"><i
                                    class="fa-solid fa-panorama"></i>
                                Banner</a>
                        </li>
                        <li class="nav-item w-100 me-0 mb-md-2" role="presentation">
                            <a class="nav-link w-100 btn btn-flex btn-active-info fs-6 fw-normal" data-bs-toggle="tab"
                                href="#kt_vtab_pane_13" aria-selected="false" role="tab" tabindex="-1"><i
                                    class="fa-solid fa-circle-exclamation"></i>
                                Advanced</a>
                        </li>
                        <li class="nav-item w-100 me-0 mb-md-2" role="presentation">
                            <a class="nav-link w-100 btn btn-flex btn-active-info fs-6 fw-normal" data-bs-toggle="tab"
                                href="#kt_vtab_pane_14" aria-selected="false" role="tab" tabindex="-1"><i
                                    class="fa-solid fa-font"></i>
                                Fonts</a>
                        </li>
                        <li class="nav-item w-100 me-0 mb-md-2" role="presentation">
                            <a class="nav-link w-100 btn btn-flex btn-active-info fs-6 fw-normal" data-bs-toggle="tab"
                                href="#kt_vtab_pane_15" aria-selected="false" role="tab" tabindex="-1"><i
                                    class="fa-solid fa-user-lock"></i> Privacy
                                Policy</a>
                        </li>
                        <li class="nav-item w-100 me-0" role="presentation">
                            <a class="nav-link w-100 btn btn-flex btn-active-info fs-6 fw-normal" data-bs-toggle="tab"
                                href="#kt_vtab_pane_16" aria-selected="false" role="tab" tabindex="-1"><i
                                    class="fa-solid fa-sliders"></i> Manage
                                Section</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-lg-10">
            <div class="tab-content bg-white p-5" id="myTabContent">
                <div class="tab-pane fade active show" id="kt_vtab_pane_1" role="tabpanel">
                    <div>
                        <h1 class="text-center">Basic Details</h1>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <form class="kt_docs_formvalidation_text form" action="#" autocomplete="off">
                                <div class="fv-row">
                                    <label class="required fw-semibold fs-6 mb-2">Text Input</label>

                                    <input type="text" name="text_input"
                                        class="form-control form-control-solid mb-3 mb-lg-0" placeholder=""
                                        value="" />
                                </div>

                                <button type="submit" class="kt_docs_formvalidation_text_submit btn btn-primary">
                                    <span class="indicator-label">
                                        Validation Form
                                    </span>
                                    <span class="indicator-progress">
                                        Please wait... <span
                                            class="spinner-border spinner-border-sm align-middle ms-2"></span>
                                    </span>
                                </button>
                            </form>
                        </div>
                    </div>
                </div>

                <div class="tab-pane fade" id="kt_vtab_pane_2" role="tabpanel">
                    <div>
                        <h1 class="text-center">vCard Templates</h1>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <form class="kt_docs_formvalidation_text form" action="#" autocomplete="off">
                                <div class="fv-row">
                                    <label class="required fw-semibold fs-6 mb-2">Text Input</label>

                                    <input type="text" name="test2"
                                        class="form-control form-control-solid mb-3 mb-lg-0" placeholder=""
                                        value="" />
                                </div>

                                <button type="submit" class="kt_docs_formvalidation_text_submit btn btn-primary">
                                    <span class="indicator-label">
                                        Validation Form
                                    </span>
                                    <span class="indicator-progress">
                                        Please wait... <span
                                            class="spinner-border spinner-border-sm align-middle ms-2"></span>
                                    </span>
                                </button>
                            </form>
                        </div>
                    </div>
                </div>

                <div class="tab-pane fade" id="kt_vtab_pane_3" role="tabpanel">
                    <div>
                        <h1 class="text-center">Business
                            Hours</h1>
                    </div>
                </div>

                <div class="tab-pane fade" id="kt_vtab_pane_4" role="tabpanel">
                    <div>
                        <h1 class="text-center">Customize QR
                            Code</h1>
                    </div>
                </div>

                <div class="tab-pane fade" id="kt_vtab_pane_5" role="tabpanel">
                    <div>
                        <h1 class="text-center">Services</h1>
                    </div>
                </div>

                <div class="tab-pane fade" id="kt_vtab_pane_6" role="tabpanel">
                    <div>
                        <h1 class="text-center">Products</h1>
                    </div>
                </div>

                <div class="tab-pane fade" id="kt_vtab_pane_7" role="tabpanel">
                    <div>
                        <h1 class="text-center">Galleries</h1>
                    </div>
                </div>

                <div class="tab-pane fade" id="kt_vtab_pane_8" role="tabpanel">
                    <div>
                        <h1 class="text-center">Blogs</h1>
                    </div>
                </div>

                <div class="tab-pane fade" id="kt_vtab_pane_9" role="tabpanel">
                    <div>
                        <h1 class="text-center">Testimonials</h1>
                    </div>
                </div>

                <div class="tab-pane fade" id="kt_vtab_pane_10" role="tabpanel">
                    <div>
                        <h1 class="text-center">Appointments</h1>
                    </div>
                </div>

                <div class="tab-pane fade" id="kt_vtab_pane_11" role="tabpanel">
                    <div>
                        <h1 class="text-center">Social
                            links - Website</h1>
                    </div>
                </div>

                <div class="tab-pane fade" id="kt_vtab_pane_12" role="tabpanel">
                    <div>
                        <h1 class="text-center">Banner</h1>
                    </div>
                </div>

                <div class="tab-pane fade" id="kt_vtab_pane_13" role="tabpanel">
                    <div>
                        <h1 class="text-center">Advanced</h1>
                    </div>
                </div>

                <div class="tab-pane fade" id="kt_vtab_pane_14" role="tabpanel">
                    <div>
                        <h1 class="text-center">Fonts</h1>
                    </div>
                </div>

                <div class="tab-pane fade" id="kt_vtab_pane_15" role="tabpanel">
                    <div>
                        <h1 class="text-center">Privacy
                            Policy</h1>
                    </div>
                </div>

                <div class="tab-pane fade" id="kt_vtab_pane_16" role="tabpanel">
                    <div>
                        <h1 class="text-center">Manage
                            Section</h1>
                    </div>
                </div>
            </div>

        </div>
    </div>

    @push('scripts')
        <script>
            // Define form elements
            const forms = document.querySelectorAll('.kt_docs_formvalidation_text');

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
                            'test2': {
                                validators: {
                                    notEmpty: {
                                        message: 'test2'
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
                const submitButton = form.querySelector('.kt_docs_formvalidation_text_submit');
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
                                    submitButton.removeAttribute('data-kt-indicator');

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
        </script>
    @endpush
</x-admin-app-layout>

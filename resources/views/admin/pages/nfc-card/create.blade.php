<x-admin-app-layout :title="'VCard Card Create - Admin Panel'">

    @if (session('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
    @endif

    @include('nfc.nfc_create_partial')

    @push('scripts')
        <script src="https://cdn.tiny.cloud/1/tv8ze2aprjlx1qoo8xnmh6r0e0w8hhgeukhe4esuhmhglca0/tinymce/7/tinymce.min.js"
            referrerpolicy="origin"></script>
        <script>
            // Define form elements
            const forms = document.querySelectorAll('.kt_docs_formvalidation_text');

            forms.forEach((form) => {
                // Init form validation rules
                var validator = FormValidation.formValidation(
                    form, {
                        fields: {
                            'test2': {
                                validators: {
                                    notEmpty: {
                                        message: 'test2'
                                    }
                                }
                            },
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
                            'first_name': {
                                validators: {
                                    notEmpty: {
                                        message: 'First Name Is Required'
                                    }
                                }
                            },
                            'last_name': {
                                validators: {
                                    notEmpty: {
                                        message: 'Last Name Is Required'
                                    }
                                }
                            },
                            'email': {
                                validators: {
                                    notEmpty: {
                                        message: 'Email Is Required'
                                    }
                                }
                            },
                            'phone': {
                                validators: {
                                    notEmpty: {
                                        message: 'Phone Is Required'
                                    }
                                }
                            },
                            'service_url': {
                                validators: {
                                    notEmpty: {
                                        message: 'Service Url Is Required'
                                    }
                                }
                            },
                            'service_name': {
                                validators: {
                                    notEmpty: {
                                        message: 'Service Name Is Required'
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
        <script>
            // document.addEventListener("DOMContentLoaded", function() {
            //     tinymce.init({
            //         selector: 'textarea',
            //         plugins: 'anchor autolink charmap codesample emoticons image link lists media searchreplace table visualblocks wordcount checklist mediaembed casechange export formatpainter pageembed linkchecker a11ychecker tinymcespellchecker permanentpen powerpaste advtable advcode editimage advtemplate ai mentions tinycomments tableofcontents footnotes mergetags autocorrect typography inlinecss markdown',
            //         toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link image media table mergetags | addcomment showcomments | spellcheckdialog a11ycheck typography | align lineheight | checklist numlist bullist indent outdent | emoticons charmap | removeformat',
            //         tinycomments_mode: 'embedded',
            //         tinycomments_author: 'Author name',
            //         mergetags_list: [{
            //                 value: 'First.Name',
            //                 title: 'First Name'
            //             },
            //             {
            //                 value: 'Email',
            //                 title: 'Email'
            //             },
            //         ],
            //         ai_request: (request, respondWith) => respondWith.string(() => Promise.reject(
            //             "See docs to implement AI Assistant")),
            //     });

            //     var options = {
            //         selector: "#kt_docs_tinymce_basic",
            //         height: 300,
            //         resize: true, // Ensure resizing is enabled
            //         min_height: 300, // Set minimum height
            //         max_height: 800 // Set maximum height
            //     };

            //     if (typeof KTThemeMode !== "undefined" && KTThemeMode.getMode() === "dark") {
            //         options["skin"] = "oxide-dark";
            //         options["content_css"] = "dark";
            //     }

            //     tinymce.init(options);
            // });
        </script>
    @endpush
</x-admin-app-layout>

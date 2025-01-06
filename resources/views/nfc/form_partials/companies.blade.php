<div class="d-flex flex-stack mb-5">
    <!-- if you want to close by clicking outside the modal, delete the last endpoint:data-bs-backdrop and data-bs-keyboard -->
    <div class="modal fade" id="companyCreateModal" tabindex="-1" data-bs-backdrop="static" data-bs-keyboard="false"
        role="dialog" aria-labelledby="modalTitleIdcompany" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalTitleIdcompany">
                        Add Company Form
                    </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form class="company_form form" method="POST" action="{{ route('nfc.company.add') }}"
                        autocomplete="off" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="card_id" value="{{ $nfc_card->id }}">
                        <div class="row">
                            <div class="col-lg-6 mb-4">
                                <div class="fv-row mb-4">
                                    <x-metronic.label
                                        class="required fw-semibold fs-6 mb-2">{{ __('Company Name') }}</x-metronic.label>
                                    <x-metronic.input type="text"
                                        class="form-control form-control-solid form-control-sm" name="company_name"
                                        :value="old('company_name')" placeholder="Company Name" required />
                                </div>
                            </div>
                            <div class="col-lg-6 mb-4">
                                <div class="fv-row mb-4">
                                    <x-metronic.label
                                        class="required fw-semibold fs-6 mb-2">{{ __('Company Email') }}</x-metronic.label>
                                    <x-metronic.input type="text"
                                        class="form-control form-control-solid form-control-sm" name="company_email"
                                        :value="old('company_email')" placeholder="Company Email" required />
                                </div>
                            </div>
                            <div class="col-lg-6 mb-4">
                                <div class="fv-row mb-4">
                                    <x-metronic.label
                                        class="required fw-semibold fs-6 mb-2">{{ __('Company Phone') }}</x-metronic.label>
                                    <x-metronic.input type="text"
                                        class="form-control form-control-solid form-control-sm" name="company_phone"
                                        :value="old('company_phone')" placeholder="Company Phone" required />
                                </div>
                            </div>
                            <div class="col-lg-6 mb-4">
                                <div class="fv-row mb-4">
                                    <x-metronic.label for="company_logo"
                                        class="col-form-label fw-bold fs-6 pt-0 pb-2">{{ __('Company Logo') }}</x-metronic.label>
                                    <x-metronic.file-input id="company_logo" name="company_logo"
                                        :value="old('company_logo')"></x-metronic.file-input>
                                </div>
                            </div>
                            <div class="col-lg-6 mb-4">
                                <div class="fv-row mb-4">
                                    <x-metronic.label
                                        class="fw-semibold fs-6 mb-2">{{ __('Road/Block/House') }}</x-metronic.label>
                                    <x-metronic.input type="text"
                                        class="form-control form-control-solid form-control-sm"
                                        name="company_address_line_one" id="company_address_line_one"
                                        placeholder="Company Road/Block/House" :value="old('company_address_line_one')" />
                                </div>
                            </div>
                            <div class="col-lg-6 mb-4">
                                <div class="fv-row mb-4">
                                    <x-metronic.label
                                        class="fw-semibold fs-6 mb-2">{{ __('City/Zip/Country') }}</x-metronic.label>
                                    <x-metronic.input type="text"
                                        class="form-control form-control-solid form-control-sm"
                                        name="company_address_line_two" id="company_address_line_two"
                                        placeholder="Company City/Zip/Country" :value="old('company_address_line_two')" />
                                </div>
                            </div>
                            <div class="col-lg-6 mb-4">
                                <div class="fv-row mb-4">
                                    <x-metronic.label
                                        class="fw-semibold fs-6 mb-2">{{ __('Company Website') }}</x-metronic.label>
                                    <x-metronic.input type="url"
                                        class="form-control form-control-solid form-control-sm" name="company_website"
                                        id="company_website" placeholder="Company Website" :value="old('company_website')" />
                                </div>
                            </div>
                            <div class="col-lg-6 mb-4">
                                <div class="fv-row mb-4">
                                    <x-metronic.label
                                        class="fw-semibold fs-6 mb-2">{{ __('Company Facebook URL') }}</x-metronic.label>
                                    <x-metronic.input type="url"
                                        class="form-control form-control-solid form-control-sm" name="company_facebook"
                                        id="company_facebook" placeholder="Company Facebook" :value="old('company_facebook')" />
                                </div>
                            </div>
                            <div class="col-lg-6 mb-4">
                                <div class="fv-row mb-4">
                                    <x-metronic.label
                                        class="fw-semibold fs-6 mb-2">{{ __('Company Twitter URL') }}</x-metronic.label>
                                    <x-metronic.input type="url"
                                        class="form-control form-control-solid form-control-sm" name="company_twitter"
                                        id="company_twitter" placeholder="Company Twitter" :value="old('company_twitter')" />
                                </div>
                            </div>
                            <div class="col-lg-6 mb-4">
                                <div class="fv-row mb-4">
                                    <x-metronic.label
                                        class="fw-semibold fs-6 mb-2">{{ __('Company Linkedin URL') }}</x-metronic.label>
                                    <x-metronic.input type="url"
                                        class="form-control form-control-solid form-control-sm"
                                        name="company_linkedin" id="company_linkedin" placeholder="Company Linkedin"
                                        :value="old('company_linkedin')" />
                                </div>
                            </div>
                            <div class="col-lg-6 mb-4">
                                <div class="fv-row mb-4">
                                    <x-metronic.label
                                        class="fw-semibold fs-6 mb-2">{{ __('Company Youtube URL') }}</x-metronic.label>
                                    <x-metronic.input type="url"
                                        class="form-control form-control-solid form-control-sm" name="company_youtube"
                                        id="company_youtube" placeholder="Company Youtube" :value="old('company_youtube')" />
                                </div>
                            </div>
                            <div class="col-lg-6 mb-4">
                                <div class="fv-row mb-4">
                                    <x-metronic.label
                                        class="fw-semibold fs-6 mb-2">{{ __('Company Instagram URL') }}</x-metronic.label>
                                    <x-metronic.input type="url"
                                        class="form-control form-control-solid form-control-sm"
                                        name="company_instagram" id="company_instagram"
                                        placeholder="Company Instagram" :value="old('company_instagram')" />
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="fv-row mb-4">
                                    <label class="fw-semibold fs-6 mb-2">{{ __('Company Description') }}</label>
                                    <textarea name="company_description" class="form-control form-control-solid mb-3 mb-lg-0" id="company_description"
                                        rows="3" placeholder="Enter Description About Company">{{ old('company_description') }}</textarea>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex justify-content-end mt-10">
                            <button type="submit" onclick="submitCompanyForm()"
                                class="kt_docs_formvalidation_text_submit btn btn-primary">
                                <span class="indicator-label">
                                    Save
                                </span>
                                <span class="indicator-progress">
                                    Please wait... <span
                                        class="spinner-border spinner-border-sm align-middle ms-2"></span>
                                </span>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    {{-- Modal End --}}
</div>



<div class="row">
    <div class="col-lg-12">
        <div class="card rounded-0">
            <div class="card-header p-5 align-items-center rounded-0 bg-info m-0">
                <div>
                    <h1 class="mb-0 mt-0 card-title fs-2 text-white">Companies!</h1>
                    <p class="text-white mt-2 mb-0">View and manage all of your companies information in this page.</p>
                </div>
                <div>
                    <button type="button" class="btn btn-white btn-active-light-warning text-hover-inverse-white"
                        data-bs-toggle="modal" data-bs-target="#companyCreateModal" data-bs-toggle="tooltip"
                        data-bs-dismiss="click" title="Want To Add New company">
                        <i class="fa-solid fa-user-plus"></i> Add Company
                    </button>
                </div>
            </div>
            <div class="card-body p-0 rounded-0">
                <table class="table my-datatable table-striped table-row-bordered mt-0">
                    <thead>
                        <tr class="text-start bg-info text-white fw-bolder fs-7 text-uppercase gs-0">
                            <th width="5%">Sl</th>
                            <th width="28%">Company Name</th>
                            <th width="18%">Company Phone</th>
                            <th width="22%">Company Address</th>
                            <th width="15%">Website</th>
                            <th width="12%">Action</th>
                        </tr>
                    </thead>
                    <tbody class="text-gray-600 fw-semibold">
                        @if ($nfc_card->nfcCompany->count() > 0)
                            @foreach ($nfc_card->nfcCompany as $company)
                                <tr>
                                    <td>
                                        {{ $loop->iteration }}
                                    </td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div class="image image-circle image-mini me-3">
                                                <img class="img-fluid w-45px"
                                                    src="{{ asset('storage/nfc/company/' . $company->company_logo) }}"
                                                    alt="">
                                            </div>
                                            <div class="d-flex flex-column">
                                                <p class="mb-0">{{ $company->company_name }}</p>
                                                <span class="fs-6">{{ $company->company_email }}</span>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        {{ $company->company_phone }}
                                    </td>
                                    <td>
                                        <div class="d-flex flex-column">
                                            <p class="mb-0">{{ $company->company_address_line_one }}</p>
                                            <span class="fs-6">{{ $company->company_address_line_two }}</span>
                                        </div>
                                    </td>
                                    <td>
                                        <a href="http://{{ $company->company_website }}" target="_blank"
                                            class="text-primary">Company
                                            Url <i class="fa-solid fa-link text-primary"></i></a>
                                    </td>
                                    <td>
                                        <a href="javascript:void(0)" class="text-primary me-3" data-bs-toggle="modal"
                                            data-bs-target="#companyEditModal{{ $company->id }}">
                                            <i class="fa-solid fa-pen text-primary"></i>
                                        </a>
                                        <a href="javascript:void(0)" class="text-danger"
                                            onclick="deleteCompany(event, '{{ route('nfc.company.destroy', $company->id) }}')">
                                            <i class="fa-solid fa-trash text-danger"></i>
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                        @else
                            <tr>
                                <td class="text-center" colspan="6">No company available</td>
                            </tr>
                        @endif
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="col-lg-12">
        <div class="text-end d-flex justify-content-end">
            <a href="javascript:void(0)" onclick="goToTab(event, '#services')" class="btn btn-primary mt-6 d-flex align-items-center">
                <span>Next</span>
                <span><i class="fa-solid fa-arrow-right-long ps-2"></i></span>
            </a>
        </div>
    </div>
</div>
{{-- Add company modal --}}


@foreach ($nfc_card->nfcCompany as $company)
    <div class="modal fade" id="companyEditModal{{ $company->id }}" tabindex="-1" data-bs-backdrop="static"
        data-bs-keyboard="false" role="dialog" aria-labelledby="modalTitleIdcompany" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalTitleIdcompany">
                        Edit Company Form
                    </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form class="company_form_{{ $company->id }}" method="POST"
                        action="{{ route('nfc.company.update', $company->id) }}" autocomplete="off"
                        enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <input type="hidden" name="card_id" value="{{ $nfc_card->id }}">
                        <div class="row">
                            <div class="col-lg-6 mb-4">
                                <div class="fv-row mb-4">
                                    <x-metronic.label
                                        class="required fw-semibold fs-6 mb-2">{{ __('Company Name') }}</x-metronic.label>
                                    <x-metronic.input type="text"
                                        class="form-control form-control-solid form-control-sm" name="company_name"
                                        :value="old('company_name', $company->company_name)" placeholder="Company Name" required />
                                </div>
                            </div>
                            <div class="col-lg-6 mb-4">
                                <div class="fv-row mb-4">
                                    <x-metronic.label
                                        class="required fw-semibold fs-6 mb-2">{{ __('Company Email') }}</x-metronic.label>
                                    <x-metronic.input type="text"
                                        class="form-control form-control-solid form-control-sm" name="company_email"
                                        :value="old('company_email', $company->company_email)" placeholder="Company Email" required />
                                </div>
                            </div>
                            <div class="col-lg-6 mb-4">
                                <div class="fv-row mb-4">
                                    <x-metronic.label
                                        class="required fw-semibold fs-6 mb-2">{{ __('Company Phone') }}</x-metronic.label>
                                    <x-metronic.input type="text"
                                        class="form-control form-control-solid form-control-sm" name="company_phone"
                                        :value="old('company_phone', $company->company_phone)" placeholder="Company Phone" required />
                                </div>
                            </div>
                            <div class="col-lg-6 mb-4">
                                <div class="fv-row mb-4">
                                    <x-metronic.label for="company_logo"
                                        class="col-form-label fw-bold fs-6 pt-0 pb-2">{{ __('Company Logo') }}</x-metronic.label>
                                    <x-metronic.file-input id="company_logo" name="company_logo" :source="asset('storage/nfc/company/' . $company->company_logo)"
                                        :value="old('company_logo', $company->company_logo)"></x-metronic.file-input>
                                </div>
                            </div>
                            <div class="col-lg-6 mb-4">
                                <div class="fv-row mb-4">
                                    <x-metronic.label
                                        class="fw-semibold fs-6 mb-2">{{ __('Road/Block/House') }}</x-metronic.label>
                                    <x-metronic.input type="text"
                                        class="form-control form-control-solid form-control-sm"
                                        name="company_address_line_one" id="company_address_line_one"
                                        placeholder="Company Road/Block/House" :value="old('company_address_line_one', $company->company_address_line_one)" />
                                </div>
                            </div>
                            <div class="col-lg-6 mb-4">
                                <div class="fv-row mb-4">
                                    <x-metronic.label
                                        class="fw-semibold fs-6 mb-2">{{ __('City/Zip/Country') }}</x-metronic.label>
                                    <x-metronic.input type="text"
                                        class="form-control form-control-solid form-control-sm"
                                        name="company_address_line_two" id="company_address_line_two"
                                        placeholder="Company City/Zip/Country" :value="old('company_address_line_two', $company->company_address_line_two)" />
                                </div>
                            </div>
                            <div class="col-lg-6 mb-4">
                                <div class="fv-row mb-4">
                                    <x-metronic.label
                                        class="fw-semibold fs-6 mb-2">{{ __('Company Website') }}</x-metronic.label>
                                    <x-metronic.input type="url"
                                        class="form-control form-control-solid form-control-sm" name="company_website"
                                        id="company_website" placeholder="Company Website" :value="old('company_website', $company->company_website)" />
                                </div>
                            </div>
                            <div class="col-lg-6 mb-4">
                                <div class="fv-row mb-4">
                                    <x-metronic.label
                                        class="fw-semibold fs-6 mb-2">{{ __('Company Facebook URL') }}</x-metronic.label>
                                    <x-metronic.input type="url"
                                        class="form-control form-control-solid form-control-sm"
                                        name="company_facebook" id="company_facebook" placeholder="Company Facebook"
                                        :value="old('company_facebook', $company->company_facebook)" />
                                </div>
                            </div>
                            <div class="col-lg-6 mb-4">
                                <div class="fv-row mb-4">
                                    <x-metronic.label
                                        class="fw-semibold fs-6 mb-2">{{ __('Company Twitter URL') }}</x-metronic.label>
                                    <x-metronic.input type="url"
                                        class="form-control form-control-solid form-control-sm" name="company_twitter"
                                        id="company_twitter" placeholder="Company Twitter" :value="old('company_twitter', $company->company_twitter)" />
                                </div>
                            </div>
                            <div class="col-lg-6 mb-4">
                                <div class="fv-row mb-4">
                                    <x-metronic.label
                                        class="fw-semibold fs-6 mb-2">{{ __('Company Linkedin URL') }}</x-metronic.label>
                                    <x-metronic.input type="url"
                                        class="form-control form-control-solid form-control-sm"
                                        name="company_linkedin" id="company_linkedin" placeholder="Company Linkedin"
                                        :value="old('company_linkedin', $company->company_linkedin)" />
                                </div>
                            </div>
                            <div class="col-lg-6 mb-4">
                                <div class="fv-row mb-4">
                                    <x-metronic.label
                                        class="fw-semibold fs-6 mb-2">{{ __('Company Youtube URL') }}</x-metronic.label>
                                    <x-metronic.input type="url"
                                        class="form-control form-control-solid form-control-sm" name="company_youtube"
                                        id="company_youtube" placeholder="Company Youtube" :value="old('company_youtube', $company->company_youtube)" />
                                </div>
                            </div>
                            <div class="col-lg-6 mb-4">
                                <div class="fv-row mb-4">
                                    <x-metronic.label
                                        class="fw-semibold fs-6 mb-2">{{ __('Company Instagram URL') }}</x-metronic.label>
                                    <x-metronic.input type="url"
                                        class="form-control form-control-solid form-control-sm"
                                        name="company_instagram" id="company_instagram"
                                        placeholder="Company Instagram" :value="old('company_instagram', $company->company_instagram)" />
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="fv-row mb-4">
                                    <label class="fw-semibold fs-6 mb-2">{{ __('Company Description') }}</label>
                                    <textarea name="company_description" class="form-control form-control-solid mb-3 mb-lg-0" id="company_description"
                                        rows="3" placeholder="Enter Description About Company">{{ old('company_description', $company->company_description) }}</textarea>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex justify-content-end mt-10">
                            <button type="submit" onclick="updateCompanyForm($company->id)"
                                class="kt_docs_formvalidation_text_submit btn btn-primary me-2">
                                <span class="indicator-label">
                                    Save
                                </span>
                                <span class="indicator-progress">
                                    Please wait... <span
                                        class="spinner-border spinner-border-sm align-middle ms-2"></span>
                                </span>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endforeach


{{-- Modal End --}}

@push('scripts')
    <script>
        function deleteCompany(event, deleteUrl) {
            event.preventDefault(); // Prevent the default link action
            var company_container = $('.company_container');
            Swal.fire({
                title: "Are you sure?",
                text: "You won't be able to revert this!",
                icon: "warning",
                showCancelButton: true,
                confirmButtonText: "Yes, delete it!",
                cancelButtonText: "No, cancel!",
                buttonsStyling: false,
                customClass: {
                    confirmButton: "btn btn-danger",
                    cancelButton: "btn btn-success",
                },
            }).then(function(result) {
                if (result.isConfirmed) {
                    $.ajax({
                        url: deleteUrl,
                        type: "DELETE",
                        headers: {
                            "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
                        },
                        success: function(response) {
                            $('.company_container').html('');
                            $('.company_container').html(response
                                .company_delete_view); // Replace HTML directly
                            Swal.fire("Deleted!", "Your company has been deleted.", "success").then(
                                function() {
                                    console.log('Updating container with new HTML');
                                });
                            console.log('Updating container with new HTML');
                            toastr.success('Service deleted successfully!', 'Success');
                        },
                        error: function(xhr, status, error) {
                            Swal.fire("Error Occurred!",
                                "An error occurred while deleting the company.", "error");
                        },
                    });
                } else if (result.dismiss === Swal.DismissReason.cancel) {
                    Swal.fire("Cancelled", "Your company is safe :)", "error");
                }
            });
        }
    </script>
    <script>
        function submitCompanyForm() {
            // Detach any existing event handler to prevent multiple bindings
            $('.company_form').off('submit').on('submit', function(event) {
                event.preventDefault(); // Prevent default form submission

                var form = $(this);
                var url = form.attr('action');
                var formData = new FormData(form[0]);
                var submitButton = form.find('.kt_docs_formvalidation_text_submit');
                var modalElement = document.getElementById('companyCreateModal');
                var modalInstance = bootstrap.Modal.getInstance(modalElement);
                var isValid = true;

                // Remove any existing error messages and red borders
                form.find('.text-danger').hide().text('');
                form.find('.form-control').removeClass('is-invalid');

                // Validate required fields
                form.find('[name="company_name"], [name="company_email"], [name="company_phone"]').each(function() {
                    var fieldValue = $(this).val().trim();
                    if (!fieldValue) {
                        // Show error message for the current field
                        $(this).addClass('is-invalid');
                        $(this).after('<p class="error-message text-danger">This field is required.</p>');
                        isValid = false;
                    }
                });

                if (isValid) {
                    // Disable the submit button to prevent multiple submissions
                    submitButton.prop('disabled', true).addClass('disabled');

                    $.ajax({
                        type: 'POST',
                        url: url,
                        data: formData,
                        processData: false,
                        contentType: false,
                        beforeSend: function() {
                            submitButton.find('.indicator-label').hide();
                            submitButton.find('.indicator-progress').show();
                        },
                        success: function(response) {
                            if (response.company_view) {
                                // Update form with new values
                                $('.company_container').html(response.company_view);

                                toastr.success('Data saved successfully!', 'Success');
                                // Reattach the event handler to the new form
                                submitCompanyForm();
                                modalInstance.hide();
                            } else {
                                toastr.error('Unexpected response format.', 'Error');
                            }
                        },
                        error: function(xhr) {
                            let errors = xhr.responseJSON.errors;
                            for (let key in errors) {
                                $(`#${key}_feedback`).text(errors[key][0]).show();
                            }
                            toastr.error('An error occurred while saving data.', 'Error');
                        },
                        complete: function() {
                            submitButton.prop('disabled', false).removeClass('disabled');
                            submitButton.find('.indicator-label').show();
                            submitButton.find('.indicator-progress').hide();
                        }
                    });
                } else {
                    Swal.fire({
                        text: 'Some input fields are not filled up!',
                        icon: 'error',
                        buttonsStyling: false,
                        confirmButtonText: 'Ok, got it!',
                        customClass: {
                            confirmButton: 'btn btn-primary'
                        }
                    });
                }
            });

            // Optional: Hide error message and remove red border on input change
            $('.company_form input, .company_form select').off('input change').on('input change', function() {
                $(this).removeClass('is-invalid');
                $(this).next('.text-danger').hide().text('');
            });
        }

        $(document).ready(function() {
            submitCompanyForm(); // Bind form submission event handler on document ready
        });
    </script>
    <script>
        function updateCompanyForm(id) {
            // Use jQuery's `on` to bind the form submit handler
            $(document).on('submit', '.company_form_' + id, function(event) {
                event.preventDefault(); // Prevent default form submission

                var form = $(this);
                var url = form.attr('action');
                var formData = new FormData(form[0]);
                var submitButton = form.find('.kt_docs_formvalidation_text_submit');
                var modalElement = document.getElementById('companyEditModal' + id);
                var modalInstance = bootstrap.Modal.getInstance(modalElement);
                var isValid = true;

                // Remove existing error messages and red borders
                form.find('.text-danger').hide().text('');
                form.find('.form-control').removeClass('is-invalid');

                // Validate required fields
                form.find('[name="company_name"], [name="company_email"], [name="company_phone"]').each(function() {
                    var fieldValue = $(this).val().trim();
                    if (!fieldValue) {
                        $(this).addClass('is-invalid');
                        $(this).after('<p class="error-message text-danger">This field is required.</p>');
                        isValid = false;
                    }
                });

                if (isValid) {
                    // Disable the submit button to prevent multiple submissions
                    submitButton.prop('disabled', true).addClass('disabled');

                    $.ajax({
                        type: 'POST',
                        url: url,
                        data: formData,
                        processData: false,
                        contentType: false,
                        beforeSend: function() {
                            submitButton.find('.indicator-label').hide();
                            submitButton.find('.indicator-progress').show();
                        },
                        success: function(response) {
                            if (response.company_view) {
                                // Update form with new values
                                $('.company_container').html(response.company_view);

                                toastr.success('Data saved successfully!', 'Success');
                                @foreach ($nfc_card->nfcCompany as $company)
                                    updateCompanyForm(
                                        {{ $company->id }}
                                    ); // Bind form submission event handler for each form
                                @endforeach
                                modalInstance.hide();
                            } else {
                                toastr.error('Unexpected response format.', 'Error');
                            }
                        },
                        error: function(xhr) {
                            let errors = xhr.responseJSON.errors;
                            for (let key in errors) {
                                $(`#${key}_feedback`).text(errors[key][0]).show();
                            }
                            toastr.error('An error occurred while saving data.', 'Error');
                        },
                        complete: function() {
                            submitButton.prop('disabled', false).removeClass('disabled');
                            submitButton.find('.indicator-label').show();
                            submitButton.find('.indicator-progress').hide();
                        }
                    });
                } else {
                    Swal.fire({
                        text: 'Some input fields are not filled up!',
                        icon: 'error',
                        buttonsStyling: false,
                        confirmButtonText: 'Ok, got it!',
                        customClass: {
                            confirmButton: 'btn btn-primary'
                        }
                    });
                }
            });
        }

        $(document).ready(function() {
            @foreach ($nfc_card->nfcCompany as $company)
                updateCompanyForm({{ $company->id }}); // Bind form submission event handler for each form
            @endforeach
        });
    </script>
@endpush

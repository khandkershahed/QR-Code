<div class="d-flex flex-stack mb-5">
    <div class="d-flex align-items-center position-relative my-1">
        {{-- <i class="ki-duotone ki-magnifier fs-1 position-absolute ms-6"><span class="path1"></span><span
                class="path2"></span></i>
        <input type="text" data-kt-docs-table-filter="search" class="form-control form-control-solid w-250px ps-15"
            placeholder="Search Customers" /> --}}
    </div>

    <div class="d-flex justify-content-end" data-kt-docs-table-toolbar="base">
        <button type="button" class="btn btn-primary btn-lg" data-bs-toggle="modal"
            data-bs-target="#companyCreateModal">
            Add Company
        </button>
    </div>
    {{-- Add company modal --}}
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
                            <div class="col-lg-6">
                                <div class="fv-row mb-2">
                                    <x-metronic.label
                                        class="required fw-semibold fs-6 mb-2">{{ __('Company Name') }}</x-metronic.label>
                                    <x-metronic.input type="text" class="form-control form-control-solid form-control-sm"
                                        name="company_name" :value="old('company_name')" placeholder="Company Name" required />
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="fv-row mb-2">
                                    <x-metronic.label
                                        class="required fw-semibold fs-6 mb-2">{{ __('Company Email') }}</x-metronic.label>
                                    <x-metronic.input type="text" class="form-control form-control-solid form-control-sm"
                                        name="company_email" :value="old('company_email')" placeholder="Company Email" required />
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="fv-row mb-2">
                                    <x-metronic.label
                                        class="required fw-semibold fs-6 mb-2">{{ __('Company Phone') }}</x-metronic.label>
                                    <x-metronic.input type="text" class="form-control form-control-solid form-control-sm"
                                        name="company_phone" :value="old('company_phone')" placeholder="Company Phone" required />
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="fv-row mb-2">
                                    <x-metronic.label for="company_logo"
                                        class="col-form-label fw-bold fs-6 ">{{ __('Company Logo') }}</x-metronic.label>
                                    <x-metronic.file-input id="company_logo" name="company_logo"
                                        :value="old('company_logo')"></x-metronic.file-input>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="fv-row mb-2">
                                    <x-metronic.label class="fw-semibold fs-6 mb-2">{{ __('Road/Block/House') }}</x-metronic.label>
                                    <x-metronic.input type="text" class="form-control form-control-solid form-control-sm"
                                        name="company_address_line_one" id="company_address_line_one" placeholder="Company Road/Block/House" :value="old('company_address_line_one')" />
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="fv-row mb-2">
                                    <x-metronic.label class="fw-semibold fs-6 mb-2">{{ __('City/Zip/Country') }}</x-metronic.label>
                                    <x-metronic.input type="text" class="form-control form-control-solid form-control-sm"
                                        name="company_address_line_two" id="company_address_line_two" placeholder="Company City/Zip/Country" :value="old('company_address_line_two')" />
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="fv-row mb-2">
                                    <x-metronic.label class="fw-semibold fs-6 mb-2">{{ __('Company Website') }}</x-metronic.label>
                                    <x-metronic.input type="url" class="form-control form-control-solid form-control-sm"
                                        name="company_website" id="company_website" placeholder="Company Website" :value="old('company_website')" />
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="fv-row mb-2">
                                    <x-metronic.label class="fw-semibold fs-6 mb-2">{{ __('Company Facebook URL') }}</x-metronic.label>
                                    <x-metronic.input type="url" class="form-control form-control-solid form-control-sm"
                                        name="company_facebook" id="company_facebook" placeholder="Company Facebook" :value="old('company_facebook')" />
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="fv-row mb-2">
                                    <x-metronic.label class="fw-semibold fs-6 mb-2">{{ __('Company Twitter URL') }}</x-metronic.label>
                                    <x-metronic.input type="url" class="form-control form-control-solid form-control-sm"
                                        name="company_twitter" id="company_twitter" placeholder="Company Twitter" :value="old('company_twitter')" />
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="fv-row mb-2">
                                    <x-metronic.label class="fw-semibold fs-6 mb-2">{{ __('Company Linkedin URL') }}</x-metronic.label>
                                    <x-metronic.input type="url" class="form-control form-control-solid form-control-sm"
                                        name="company_linkedin" id="company_linkedin" placeholder="Company Linkedin" :value="old('company_linkedin')" />
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="fv-row mb-2">
                                    <x-metronic.label class="fw-semibold fs-6 mb-2">{{ __('Company Youtube URL') }}</x-metronic.label>
                                    <x-metronic.input type="url" class="form-control form-control-solid form-control-sm"
                                        name="company_youtube" id="company_youtube" placeholder="Company Youtube" :value="old('company_youtube')" />
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="fv-row mb-2">
                                    <x-metronic.label class="fw-semibold fs-6 mb-2">{{ __('Company Instagram URL') }}</x-metronic.label>
                                    <x-metronic.input type="url" class="form-control form-control-solid form-control-sm"
                                        name="company_instagram" id="company_instagram" placeholder="Company Instagram" :value="old('company_instagram')" />
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="fv-row mb-2">
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
                                    Create Company
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

<div class="table-responsive">
    <table class="table align-middle table-row-dashed table-border fs-6 gy-5">
        <thead>
            <tr class="text-start text-gray-500 fw-bold fs-7 text-uppercase gs-0">
                <th>Sl</th>
                <th>Company IMAGE</th>
                <th>Company NAME</th>
                <th>Company Price</th>
                <th>Company URL</th>
                <th>ACTION</th>
            </tr>
        </thead>
        <tbody class="datatable text-gray-600 fw-semibold">
            @if ($nfc_card->nfccompany->count() > 0)
                @foreach ($nfc_card->nfccompany as $company)
                    <tr>
                        <td>
                            {{ $loop->iteration }}
                        </td>
                        <td>
                            <div>
                                <img class="img-fluid" width="50px" height="50px"
                                    src="{{ asset('storage/nfc/company/' . $company->company_icon) }}" alt="">
                            </div>
                        </td>
                        <td>
                            <p class="mb-0">{{ $company->company_name }}</p>
                        </td>
                        <td>
                            <p class="mb-0">{{ $company->company_price }}</p>
                        </td>
                        <td>
                            <a href="{{ $company->company_url }}" target="_blank" class="text-primary">Company Url <i
                                    class="fa-solid fa-link text-primary"></i></a>
                        </td>
                        <td>
                            <a href="{{ route('nfc.company.destroy', $company->id) }}" class="text-danger"
                                onclick="deleteCompany(event, '{{ route('nfc.company.destroy', $company->id) }}')">Delete
                                <i class="fa-solid fa-trash text-danger"></i></a>
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


@push('scripts')
    <script>
        function submitCompanyForm() {
            var form = $('.company_form');
            var url = form.attr('action');
            var formData = new FormData(form[0]);
            var company_container = $('.company_container');

            var modalElement = document.getElementById('companyCreateModal');
            var modalInstance = bootstrap.Modal.getInstance(modalElement);

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
                    if (response.company_view) {
                        console.log('Updating container with new HTML');
                        modalInstance.hide(); // Use Bootstrap's modal hide method
                        company_container.html(response.company_view); // Replace HTML directly
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
@endpush

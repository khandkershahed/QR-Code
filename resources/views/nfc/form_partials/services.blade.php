<div class="d-flex flex-stack mb-5">
    <div class="d-flex align-items-center position-relative my-1">
        {{-- <i class="ki-duotone ki-magnifier fs-1 position-absolute ms-6"><span
                class="path1"></span><span class="path2"></span></i>
        <input type="text" data-kt-docs-table-filter="search"
            class="form-control form-control-solid w-250px ps-15"
            placeholder="Search Customers" /> --}}
    </div>

    <div class="d-flex justify-content-end" data-kt-docs-table-toolbar="base">
        <button type="button" class="btn btn-primary btn-lg" data-bs-toggle="modal" data-bs-target="#serviceCreateModal">
            Add Service
        </button>
    </div>
    {{-- Add Service modal --}}
    <!-- if you want to close by clicking outside the modal, delete the last endpoint:data-bs-backdrop and data-bs-keyboard -->
    <div class="modal fade" id="serviceCreateModal" tabindex="-1" data-bs-backdrop="static" data-bs-keyboard="false"
        role="dialog" aria-labelledby="modalTitleId" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-md" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalTitleId">
                        Add Service Form
                    </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form class="service_form form" method="POST" action="{{ route('nfc.service.add') }}"
                        autocomplete="off" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="card_id" value="{{ $nfc_card->id }}">
                        <div class="fv-row mb-5">
                            <x-metronic.label class="required fw-semibold fs-6 mb-2">Service
                                Name</x-metronic.label>
                            <x-metronic.input type="text" class="form-control form-control-solid form-control-sm"
                                name="service_name" id="service_name" required placeholder="Service Name"
                                :value="old('service_name')" />
                        </div>
                        <div class="fv-row mb-5">
                            <x-metronic.label class="fw-semibold fs-6 mb-2">Service
                                URL</x-metronic.label>
                            <x-metronic.input type="url" class="form-control form-control-solid form-control-sm"
                                name="service_url" id="service_url" placeholder="Service URL" :value="old('service_url')" />
                        </div>
                        <div class="fv-row mb-5">
                            <label class="fw-semibold fs-6 mb-2">Description</label>
                            <textarea name="service_description" class="form-control form-control-solid mb-3 mb-lg-0" id="service_description"
                                rows="3">{{ old('service_description') }}</textarea>
                        </div>
                        <div class="fv-row mb-5">
                            <x-metronic.label for="service_icon" class="fw-semibold fs-6 mb-2">{{ __('Service Icon/Image') }}
                            </x-metronic.label>
                            <x-metronic.file-input id="service_icon" name="service_icon"
                                :value="old('service_icon')"></x-metronic.file-input>
                        </div>

                        <div class="d-flex justify-content-end mt-10">
                            <button type="submit" onclick="submitServiceForm()"
                                class="kt_docs_formvalidation_text_submit btn btn-primary">
                                <span class="indicator-label">
                                    Create Service
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
                <th>Icon/Image</th>
                <th>Name</th>
                <th>Service Url</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody class="text-gray-600 fw-semibold">
            @if ($nfc_card->nfcService)
                @foreach ($nfc_card->nfcService as $service)
                    <tr>
                        <td>
                            {{ $loop->iteration }}
                        </td>
                        <td>
                            <div>
                                <img class="img-fluid" width="50px" height="50px"
                                    src="{{ asset('storage/nfc/service/' . $service->service_icon) }}" alt="">
                            </div>
                        </td>
                        <td>
                            <p class="mb-0">{{ $service->service_name }}</p>
                        </td>
                        <td>
                            <a href="{{ $service->service_url }}" target="_blank" class="text-primary">Service Url <i
                                    class="fa-solid fa-link text-primary"></i></a>
                        </td>
                        <td>
                            <a href="{{ route('nfc.service.destroy', $service->id) }}" class="text-danger"
                                onclick="deleteService(event, '{{ route('nfc.service.destroy', $service->id) }}')">Delete <i
                                    class="fa-solid fa-trash text-danger"></i></a>
                        </td>
                    </tr>
                @endforeach
            @else
                <tr>
                    <td class="text-center" colspan="6">No Service available</td>
                </tr>
            @endif
        </tbody>
    </table>
</div>


@push('scripts')
    <script>
        function submitServiceForm() {
            var form = $('.service_form');
            var url = form.attr('action');
            var formData = new FormData(form[0]);
            var service_container = $('.service_container');

            var modalElement = document.getElementById('serviceCreateModal');
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
                    if (response.service_view) {
                        console.log('Updating container with new HTML');
                        modalInstance.hide(); // Use Bootstrap's modal hide method
                        service_container.html(response.service_view); // Replace HTML directly
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

        function deleteService(event, deleteUrl) {
            event.preventDefault(); // Prevent the default link action
            var service_container = $('.service_container');
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
                            $('.service_container').html('');
                            $('.service_container').html(response.service_delete_view); // Replace HTML directly
                            Swal.fire("Deleted!", "Your service has been deleted.", "success").then(
                                function() {
                                    console.log('Updating container with new HTML');
                                });
                            console.log('Updating container with new HTML');
                            toastr.success('Service deleted successfully!', 'Success');
                        },
                        error: function(xhr, status, error) {
                            Swal.fire("Error Occurred!",
                                "An error occurred while deleting the service.", "error");
                        },
                    });
                } else if (result.dismiss === Swal.DismissReason.cancel) {
                    Swal.fire("Cancelled", "Your service is safe :)", "error");
                }
            });
        }
    </script>
@endpush

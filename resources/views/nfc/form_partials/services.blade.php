<div class="row">
    <div class="col-lg-12">
        <div class="d-flex justify-content-end" data-kt-docs-table-toolbar="base">
            <button type="button" class="btn btn-primary btn-lg" data-bs-toggle="modal"
                data-bs-target="#serviceCreateModal">
                Add Service
            </button>
        </div>
    </div>
</div>
<div class="row">
    <h3>All Services List</h3>
    <div class="col-lg-12">
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
                                            src="{{ asset('storage/nfc/service/' . $service->service_icon) }}"
                                            alt="">
                                    </div>
                                </td>
                                <td>
                                    <p class="mb-0">{{ $service->service_name }}</p>
                                </td>
                                <td>
                                    <a href="{{ $service->service_url }}" target="_blank" class="text-primary">Service
                                        Url <i class="fa-solid fa-link text-primary"></i></a>
                                </td>
                                <td>
                                    <a href="javascript:void(0)" class="text-primary me-3" data-bs-toggle="modal"
                                        data-bs-target="#serviceEditModal{{ $service->id }}">
                                        <i class="fa-solid fa-pen text-primary"></i>
                                    </a>
                                    <a href="javascript:void(0)" class="text-danger"
                                        onclick="deleteService(event, '{{ route('nfc.service.destroy', $service->id) }}')">
                                        <i class="fa-solid fa-trash text-danger"></i></a>
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
    </div>
</div>
{{-- Add Service modal --}}
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
                        <x-metronic.label for="service_icon"
                            class="fw-semibold fs-6 mb-2">{{ __('Service Icon/Image') }}
                        </x-metronic.label>
                        <x-metronic.file-input id="service_icon" name="service_icon"
                            :value="old('service_icon')"></x-metronic.file-input>
                    </div>

                    <div class="d-flex justify-content-end mt-10">
                        <button type="submit" onclick="submitServiceForm()"
                            class="kt_docs_formvalidation_text_submit btn btn-primary">
                            <span class="indicator-label">
                                Create
                            </span>
                            <span class="indicator-progress">
                                Please wait... <span class="spinner-border spinner-border-sm align-middle ms-2"></span>
                            </span>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
{{-- Modal End --}}

@foreach ($nfc_card->nfcService as $service)
    <div class="modal fade" id="serviceEditModal{{ $service->id }}" tabindex="-1" data-bs-backdrop="static"
        data-bs-keyboard="false" role="dialog" aria-labelledby="modalTitleIdservice" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalTitleIdservice">
                        Edit service Form
                    </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form class="service_form_{{ $service->id }}" method="POST"
                        action="{{ route('nfc.service.update', $service->id) }}" autocomplete="off"
                        enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <input type="hidden" name="card_id" value="{{ $nfc_card->id }}">
                        <div class="fv-row mb-5">
                            <x-metronic.label class="required fw-semibold fs-6 mb-2">Service
                                Name</x-metronic.label>
                            <x-metronic.input type="text" class="form-control form-control-solid form-control-sm"
                                name="service_name" id="service_name" required placeholder="Service Name"
                                :value="old('service_name', $service->service_name)" />
                        </div>
                        <div class="fv-row mb-5">
                            <x-metronic.label class="fw-semibold fs-6 mb-2">Service
                                URL</x-metronic.label>
                            <x-metronic.input type="url" class="form-control form-control-solid form-control-sm"
                                name="service_url" id="service_url" placeholder="Service URL" :value="old('service_url', $service->service_url)" />
                        </div>
                        <div class="fv-row mb-5">
                            <label class="fw-semibold fs-6 mb-2">Description</label>
                            <textarea name="service_description" class="form-control form-control-solid mb-3 mb-lg-0" id="service_description"
                                rows="3">{{ old('service_description', $service->service_description) }}</textarea>
                        </div>
                        <div class="fv-row mb-5">
                            <x-metronic.label for="service_icon"
                                class="fw-semibold fs-6 mb-2">{{ __('Service Icon/Image') }}
                            </x-metronic.label>
                            <x-metronic.file-input id="service_icon" name="service_icon" :source="asset('storage/nfc/service/' . $service->service_icon)"
                                :value="old('service_icon', $service->service_icon)"></x-metronic.file-input>
                        </div>
                        <div class="d-flex justify-content-end mt-10">
                            <button type="submit" onclick="updateServiceForm($service->id)"
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
@endforeach


@push('scripts')
    <script>
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
                            $('.service_container').html(response
                                .service_delete_view); // Replace HTML directly
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
    <script>
        function submitServiceForm() {
            // Detach any existing event handler to prevent multiple bindings
            $('.service_form').off('submit').on('submit', function(event) {
                event.preventDefault(); // Prevent default form submission

                var form = $(this);
                var url = form.attr('action');
                var formData = new FormData(form[0]);
                var submitButton = form.find('.kt_docs_formvalidation_text_submit');
                var modalElement = document.getElementById('serviceCreateModal');
                var modalInstance = bootstrap.Modal.getInstance(modalElement);
                var isValid = true;

                // Remove any existing error messages and red borders
                form.find('.text-danger').hide().text('');
                form.find('.form-control').removeClass('is-invalid');

                // Validate required fields
                form.find('[name="service_name"]').each(function() {
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
                            if (response.service_view) {
                                // Update form with new values
                                $('.service_container').html(response.service_view);

                                toastr.success('Data saved successfully!', 'Success');
                                // Reattach the event handler to the new form
                                submitServiceForm();
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
            $('.service_form input, .service_form select').off('input change').on('input change', function() {
                $(this).removeClass('is-invalid');
                $(this).next('.text-danger').hide().text('');
            });
        }
        $(document).ready(function() {
            submitServiceForm(); // Bind form submission event handler on document ready
        });
    </script>
    <script>
        function updateServiceForm(id) {
            // Use jQuery's `on` to bind the form submit handler
            $('.service_form_' + id).off('submit').on('submit', function(event) {
                // $(document).on('submit', '.service_form_' + id, function(event) {
                event.preventDefault(); // Prevent default form submission

                var form = $(this);
                var url = form.attr('action');
                var formData = new FormData(form[0]);
                var submitButton = form.find('.kt_docs_formvalidation_text_submit');
                var modalElement = document.getElementById('serviceEditModal' + id);
                var modalInstance = bootstrap.Modal.getInstance(modalElement);
                var isValid = true;

                // Remove existing error messages and red borders
                form.find('.text-danger').hide().text('');
                form.find('.form-control').removeClass('is-invalid');

                // Validate required fields
                

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
                            if (response.service_view) {
                                // Update form with new values
                                $('.service_container').html(response.service_view);

                                toastr.success('Data saved successfully!', 'Success');
                                @foreach ($nfc_card->nfcService as $service)
                                    updateServiceForm(
                                    {{ $service->id }}); // Bind form submission event handler for each form
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
            @foreach ($nfc_card->nfcService as $service)
                updateServiceForm({{ $service->id }}); // Bind form submission event handler for each form
            @endforeach
        });
    </script>
@endpush

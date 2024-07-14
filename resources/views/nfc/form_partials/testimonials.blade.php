<div class="d-flex flex-stack mb-5">
    <div class="d-flex align-items-center position-relative my-1">
        {{-- <i class="ki-duotone ki-magnifier fs-1 position-absolute ms-6"><span class="path1"></span><span
                class="path2"></span></i> 
        <input type="text" data-kt-docs-table-filter="search" class="form-control form-control-solid w-250px ps-15"
            placeholder="Search Customers" /> --}}
    </div>

    <div class="d-flex justify-content-end" data-kt-docs-table-toolbar="base">
        <button type="button" class="btn btn-primary btn-lg" data-bs-toggle="modal"
            data-bs-target="#testimonialCreateModal">
            Add testimonials
        </button>
    </div>
    {{-- Add testimonials modal --}}
    <!-- if you want to close by clicking outside the modal, delete the last endpoint:data-bs-backdrop and data-bs-keyboard -->
    <div class="modal fade" id="testimonialCreateModal" tabindex="-1" data-bs-backdrop="static" data-bs-keyboard="false"
        role="dialog" aria-labelledby="modalTitleIdtestimonials" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalTitleIdtestimonials">
                        Add Testimonials Form
                    </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form class="testimonial_form form" method="POST" action="{{ route('nfc.testimonial.add') }}"
                        autocomplete="off" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="card_id" value="{{ $nfc_card->id }}">
                        <div class="fv-row mb-5">
                            <x-metronic.label class="required fw-semibold fs-6 mb-2">Name</x-metronic.label>
                            <x-metronic.input type="text" class="form-control form-control-solid form-control-sm"
                                name="testimonial_name" id="testimonial_name" required placeholder="Name"
                                :value="old('testimonial_name')" />
                        </div>
                        <div class="fv-row mb-5">
                            <label class="fw-semibold fs-6 mb-2">Description</label>
                            <textarea name="testimonial_description" class="form-control form-control-solid mb-3 mb-lg-0 required"
                                id="testimonial_description" rows="3">{{ old('testimonial_description') }}</textarea>
                        </div>
                        <div class="fv-row mb-5">
                            <x-metronic.label for="testimonial_image" class="fw-semibold fs-6 mb-2">{{ __('Image') }}
                            </x-metronic.label>
                            <x-metronic.file-input id="testimonial_image" name="testimonial_image"
                                :value="old('testimonial_image')"></x-metronic.file-input>
                        </div>

                        <div class="d-flex justify-content-end mt-10">
                            <button type="submit" onclick="submitTestimonialForm()"
                                class="kt_docs_formvalidation_text_submit btn btn-primary">
                                <span class="indicator-label">
                                    Create
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
    <table id="kt_datatable_example_1" class="table align-middle table-row-dashed table-border fs-6 gy-5">
        <thead>
            <tr class="text-start text-gray-500 fw-bold fs-7 text-uppercase gs-0">
                {{-- <th class="w-10px pe-2">
                    <div class="form-check form-check-sm form-check-custom form-check-solid me-3">
                        <input class="form-check-input" type="checkbox" data-kt-check="true"
                            data-kt-check-target="#kt_datatable_example_1 .form-check-input" value="1" />
                    </div>
                </th> --}}
                <th width="5%">Sl</th>
                <th width="30%">Name</th>
                <th width="50%">Description</th>
                <th width="10%">Action</th>
            </tr>
        </thead>
        <tbody class="text-gray-600 fw-semibold">
            {{-- <td>
                <div class="form-check form-check-sm form-check-custom form-check-solid me-3">
                    <input class="form-check-input" type="checkbox" data-kt-check="true"
                        data-kt-check-target="#kt_datatable_example_1 .form-check-input" value="1" />
                </div>
            </td> --}}
            @if ($nfc_card->nfcTestimonial->count() > 0)
                @foreach ($nfc_card->nfcTestimonial as $testimonial)
                    <tr>
                        <td>
                            {{ $loop->iteration }}
                        </td>
                        <td>
                            <div class="d-flex align-items-center">
                                <div class="image image-circle image-mini me-3">
                                    <img class="img-fluid w-45px"
                                        src="{{ asset('storage/nfc/testimonial/' . $testimonial->testimonial_image) }}"
                                        alt="">
                                </div>
                                <div class="d-flex flex-column">
                                    <p class="mb-0">{{ $testimonial->testimonial_name }}</p>
                                </div>
                            </div>
                        </td>
                        <td>
                            <p class="mb-0">{!! $testimonial->testimonial_description !!}</p>
                        </td>
                        <td>
                            <a href="{{ route('nfc.testimonial.destroy', $testimonial->id) }}" class="text-danger"
                                onclick="deleteTestimonial(event, '{{ route('nfc.testimonial.destroy', $testimonial->id) }}')">Delete
                                <i class="fa-solid fa-trash text-danger"></i></a>
                        </td>
                    </tr>
                @endforeach
            @else
                <tr>
                    <td class="text-center" colspan="6">No Testimonial available</td>
                </tr>
            @endif
        </tbody>
    </table>
</div>

@push('scripts')
    <script>
        $(document).ready(function() {
            function submitTestimonialForm(event) {
                event.preventDefault(); // Prevent default form submission

                var form = $('.testimonial_form');
                var url = form.attr('action');
                var formData = new FormData(form[0]);
                var testimonial_container = $('.testimonial_container');
                var submitButton = form.find('.kt_docs_formvalidation_text_submit');
                var isValid = true;

                // Remove any existing error messages and red borders
                form.find('.error-message').remove();
                form.find('.form-control').removeClass('is-invalid');

                // Validate each required field (adjust field names as needed)
                form.find('[name="testimonial_name"], [name="testimonial_description"]')
                    .each(function() {
                        var fieldValue = $(this).val().trim();
                        if (!fieldValue) {
                            // Show error message for the current field
                            $(this).addClass('is-invalid');
                            $(this).after('<p class="error-message text-danger">This field is required.</p>');
                            isValid = false;
                        }
                    });

                if (isValid) {
                    // Optionally disable the submit button to prevent multiple submissions
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
                            if (response.testimonial_view) {
                                console.log('Updating container with new HTML');
                                testimonial_container.empty();
                                testimonial_container.html(response.testimonial_view);
                                toastr.success('Data saved successfully!', 'Success');
                            } else {
                                console.error('Unexpected response format:', response);
                                toastr.error('Unexpected response format.', 'Error');
                            }
                        },
                        error: function(xhr, status, error) {
                            // Handle error response
                            console.error('Error:', error);
                            toastr.error('An error occurred while saving data.', 'Error');
                        },
                        complete: function() {
                            // Re-enable the submit button and hide the loading indicator
                            submitButton.prop('disabled', false).removeClass('disabled');
                            submitButton.find('.indicator-label').show();
                            submitButton.find('.indicator-progress').hide();
                        }
                    });
                } else {
                    // Show SweetAlert error message for validation errors
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
            }

            // Attach the submit handler to the testimonial form
            $('.testimonial_form').on('submit', function(event) {
                submitTestimonialForm(event);
            });

            // Re-enable the submit button when any input field is changed
            $('.testimonial_form input, .testimonial_form select').on('input change', function() {
                var submitButton = $('.testimonial_form').find('.kt_docs_formvalidation_text_submit');
                submitButton.prop('disabled', false).removeClass('disabled');
                $(this).removeClass('is-invalid');
                $(this).next('.error-message').remove();
            });
        });
    </script>

    <script>
        function deleteTestimonial(event, deleteUrl) {
            event.preventDefault(); // Prevent the default link action
            var testimonial_container = $('.testimonial_container');
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
                            $('.testimonial_container').html('');
                            $('.testimonial_container').html(response
                                .testimonial_delete_view); // Replace HTML directly
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

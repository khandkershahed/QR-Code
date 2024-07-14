<div class="row">
    <div class="col-lg-12">
        <div class="d-flex justify-content-end" data-kt-docs-table-toolbar="base">
            <button type="button" class="btn btn-primary btn-lg" data-bs-toggle="modal"
                data-bs-target="#galleryCreateModal">
                Add Gallery
            </button>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-lg-12">
        <h3>All Gallery List</h3>
        <div class="table-responsive">
            <table class="table align-middle table-row-dashed table-border fs-6 gy-5">
                <thead>
                    <tr class="text-start text-gray-500 fw-bold fs-7 text-uppercase gs-0">
                        <th width="5%">SL</th>
                        <th width="12%">Type</th>
                        <th width="30%">Title</th>
                        <th width="40%">Link</th>
                        <th width="13%">Action</th>
                    </tr>
                </thead>
                <tbody class="text-gray-600 fw-semibold">
                    @if ($nfc_card->nfcGallery)
                        @foreach ($nfc_card->nfcGallery as $gallery)
                            <tr>
                                <td>
                                    {{ $loop->iteration }}
                                </td>
                                <td>
                                    <span class="badge badge-info">{{ $gallery->gallery_type }}</span>
                                </td>
                                <td>
                                    <p class="mb-0">{{ $gallery->gallery_title }}</p>
                                </td>
                                <td>
                                    @if ($gallery->gallery_type == 'image')
                                        <a href="{{ asset('storage/nfc/gallery/' . $gallery->gallery_attachment) }}"
                                            target="_blank"
                                            class="text-primary">{{ asset('storage/nfc/gallery/' . $gallery->gallery_attachment) }}</a>
                                    @else
                                        <a href="{{ $gallery->gallery_link }}" target="_blank"
                                            class="text-primary">{{ $gallery->gallery_link }}</a>
                                    @endif
                                </td>
                                <td>
                                    <a href="{{ route('nfc.gallery.destroy', $gallery->id) }}" class="text-danger"
                                        onclick="deleteGallery(event, '{{ route('nfc.gallery.destroy', $gallery->id) }}')">Delete
                                        <i class="fa-solid fa-trash text-danger"></i></a>
                                </td>
                            </tr>
                        @endforeach
                    @else
                        <tr>
                            <td class="text-center" colspan="6">No Gallery available</td>
                        </tr>
                    @endif
                </tbody>
            </table>
        </div>
    </div>
</div>

{{-- Add gallery modal --}}
<div class="modal fade" id="galleryCreateModal" tabindex="-1" data-bs-backdrop="static" data-bs-keyboard="false"
    role="dialog" aria-labelledby="modalTitleIdgallery" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalTitleIdgallery">Add Gallery Form</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form class="gallery_form form" method="POST" action="{{ route('nfc.gallery.add') }}"
                    autocomplete="off" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="card_id" value="{{ $nfc_card->id }}">
                    <div class="row">
                        <div class="fv-row col-lg-6 col-12 mb-5">
                            <x-metronic.label class="required fw-semibold fs-6 mb-3">Gallery Name</x-metronic.label>
                            <x-metronic.input type="text" class="form-control form-control-solid form-control-sm"
                                name="gallery_title" id="gallery_title" required placeholder="Gallery Name"
                                :value="old('gallery_title')" />
                        </div>
                        <div class="fv-row col-lg-6 col-12 mb-5">
                            <x-metronic.label class="fw-semibold fs-6 mb-3">Choose Gallery Type</x-metronic.label>
                            <select class="form-select" id="galleryTypeSelect" data-control="select2"
                                data-placeholder="Choose Gallery Type" name="gallery_type"
                                onchange="toggleGalleryType()">
                                <option value="" selected disabled>Choose Gallery Type</option>
                                <option value="image" @selected(old('gallery_type') == 'image')>Image</option>
                                <option value="video" @selected(old('gallery_type') == 'video')>Video</option>
                            </select>
                        </div>
                        <div id="chooseImage" style="display: none;">
                            <div class="fv-row mb-5">
                                <x-metronic.label for="gallery_attachment"
                                    class="col-form-label fw-bold fs-6 mb-3">{{ __('Gallery Image') }}</x-metronic.label>
                                <x-metronic.file-input id="gallery_attachment" name="gallery_attachment"
                                    :value="old('gallery_attachment')"></x-metronic.file-input>
                            </div>
                        </div>
                        <div id="chooseVideo" style="display: none;">
                            <div class="fv-row mb-5">
                                <x-metronic.label for="gallery_link"
                                    class="col-form-label fw-bold fs-6 mb-3">{{ __('Gallery Video URL') }}</x-metronic.label>
                                <x-metronic.input type="url" class="form-control form-control-solid form-control-sm"
                                    name="gallery_link" id="gallery_link" required placeholder="Gallery Video URL"
                                    :value="old('gallery_link')" />
                            </div>
                        </div>
                    </div>
                    <div class="d-flex justify-content-end mt-10">
                        <button type="submit" onclick="submitGalleryForm()"
                            class="kt_docs_formvalidation_text_submit btn btn-primary">
                            <span class="indicator-label">Upload Gallery</span>
                            <span class="indicator-progress">Please wait... <span
                                    class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

{{-- <div class="modal fade" id="galleryUpdateModal" tabindex="-1" data-bs-backdrop="static" data-bs-keyboard="false" role="dialog" aria-labelledby="modalTitleIdgallery" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalTitleIdgallery">Add Gallery Form</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form class="kt_docs_formvalidation_text form row" action="#" autocomplete="off">
                    <div class="fv-row col-lg-6 col-12 mb-5">
                        <x-metronic.label class="required fw-semibold fs-6 mb-3">Gallery Name</x-metronic.label>
                        <x-metronic.input type="text" class="form-control form-control-solid form-control-sm" name="gallery_title" id="gallery_title" required placeholder="Gallery Name" :value="optional($nfc_card->nfcGallery)->gallery_title" />
                    </div>
                    <div class="fv-row col-lg-6 col-12 mb-5">
                        <x-metronic.label class="fw-semibold fs-6 mb-3">Choose Gallery Type</x-metronic.label>
                        <select class="form-select" id="galleryTypeSelect" data-control="select2" data-placeholder="Choose Gallery Type" name="gallery_type" onchange="toggleGalleryType()">
                            <option value="" selected disabled>Choose Gallery Type</option>
                            <option value="image" @selected(optional($nfc_card->nfcGallery)->gallery_type == "image")>Image</option>
                            <option value="video" @selected(optional($nfc_card->nfcGallery)->gallery_type == "video")>Video</option>
                        </select>
                    </div>
                    <div id="chooseImage" style="display: none;">
                        <div class="fv-row mb-5">
                            <x-metronic.label for="gallery_attachment" class="col-form-label fw-bold fs-6 mb-3">{{ __('Gallery Image') }}</x-metronic.label>
                            <x-metronic.file-input id="gallery_attachment" name="gallery_attachment" :value="optional($nfc_card->nfcGallery)->gallery_attachment"></x-metronic.file-input>
                        </div>
                    </div>
                    <div id="chooseVideo" style="display: none;">
                        <div class="fv-row mb-5">
                            <x-metronic.label for="gallery_link" class="col-form-label fw-bold fs-6 mb-3">{{ __('Gallery Video URL') }}</x-metronic.label>
                            <x-metronic.input type="url" class="form-control form-control-solid form-control-sm" name="gallery_link" id="gallery_link" required placeholder="Gallery Video URL" :value="optional($nfc_card->nfcGallery)->gallery_link" />
                        </div>
                    </div>
                    <div class="d-flex justify-content-end mt-10">
                        <button type="submit" class="kt_docs_formvalidation_text_submit btn btn-primary">
                            <span class="indicator-label">Upload Gallery</span>
                            <span class="indicator-progress">Please wait... <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div> --}}
{{-- Modal End --}}

@push('scripts')
    <script>
        function toggleGalleryType() {
            var galleryType = document.getElementById('galleryTypeSelect').value;
            var chooseImage = document.getElementById('chooseImage');
            var chooseVideo = document.getElementById('chooseVideo');

            if (galleryType === 'image') {
                chooseImage.style.display = 'block';
                chooseVideo.style.display = 'none';
            } else if (galleryType === 'video') {
                chooseImage.style.display = 'none';
                chooseVideo.style.display = 'block';
            } else {
                chooseImage.style.display = 'none';
                chooseVideo.style.display = 'none';
            }
        }
    </script>
    <script>
        $(document).ready(function() {
            // Function to toggle between image and video sections based on selection
            function toggleGalleryType() {
                var galleryType = $('#galleryTypeSelect').val();
                var chooseImage = $('#chooseImage');
                var chooseVideo = $('#chooseVideo');

                if (galleryType === 'image') {
                    chooseImage.show();
                    chooseVideo.hide();
                } else if (galleryType === 'video') {
                    chooseImage.hide();
                    chooseVideo.show();
                } else {
                    chooseImage.hide();
                    chooseVideo.hide();
                }
            }

            // Initial call to set the correct section visibility on page load
            toggleGalleryType();

            // Handle changes in gallery type select
            $('#galleryTypeSelect').on('change', function() {
                toggleGalleryType();
            });

            // Function to submit the gallery form
            function submitGalleryForm(event) {
                event.preventDefault(); // Prevent default form submission

                var form = $('.gallery_form');
                var url = form.attr('action');
                var formData = new FormData(form[0]);
                var gallery_container = $('.gallery_container');
                var modalElement = document.getElementById('galleryCreateModal');
                var modalInstance = bootstrap.Modal.getInstance(modalElement);
                var submitButton = form.find('.kt_docs_formvalidation_text_submit');
                var isValid = true;

                // Remove any existing error messages and red borders
                form.find('.error-message').remove();
                form.find('.form-control').removeClass('is-invalid');

                // Validate each required field (adjust field names as needed)
                form.find('[name="gallery_title"], [name="gallery_type"]')
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
                    // Disable the submit button to prevent multiple submissions
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
                            if (response.gallery_view) {
                                console.log('Updating container with new HTML');
                                modalInstance.hide(); // Use Bootstrap's modal hide method
                                gallery_container.html(response.gallery_view); // Replace HTML directly
                                toastr.success('Data saved successfully!', 'Success');
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

            // Attach the submit handler to the gallery form
            $('.gallery_form').on('submit', function(event) {
                submitGalleryForm(event);
            });

            // Re-enable the submit button when any input field is changed
            $('.gallery_form input, .gallery_form select').on('input change', function() {
                var submitButton = $('.gallery_form').find('.kt_docs_formvalidation_text_submit');
                submitButton.prop('disabled', false).removeClass('disabled');
                $(this).removeClass('is-invalid');
                $(this).next('.error-message').remove();
            });
        });
    </script>
    <script>
        function deleteTestimonial(event, deleteUrl) {
            event.preventDefault(); // Prevent the default link action
            var gallery_form = $('.gallery_form');
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
                            $('.gallery_form').html('');
                            $('.gallery_form').html(response
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

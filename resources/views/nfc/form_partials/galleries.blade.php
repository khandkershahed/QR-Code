<div class="row">
    <div class="col-lg-12">
        <div class="card my-10 rounded-0">
            <div class="card-header p-5 align-items-center rounded-0 bg-info m-0">
                <div>
                    <h1 class="mb-0 mt-0 card-title fs-2 text-white">All Gallery!</h1>
                    <p class="text-white mt-2 mb-0">View and manage all gallery information in this page.</p>
                </div>
                <div>
                    <button type="button" class="btn btn-white btn-active-light-warning text-hover-inverse-white"
                        data-bs-toggle="modal" data-bs-target="#galleryCreateModal" data-bs-toggle="tooltip"
                        data-bs-dismiss="click" title="Want To Add New Gallery">
                        <i class="fa-solid fa-user-plus"></i> Add Gallery
                    </button>
                </div>
            </div>
            <div class="card-body p-0 rounded-0">
                <table class="table my-datatable table-striped table-row-bordered mt-0">
                    <thead>
                        <tr class="text-start bg-info text-white fw-bolder fs-7 text-uppercase gs-0">
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
                                            <img class="w-75px"
                                                src="{{ asset('storage/nfc/gallery/' . $gallery->gallery_attachment) }}"
                                                alt="">
                                            {{-- <a href="{{ asset('storage/nfc/gallery/' . $gallery->gallery_attachment) }}"
                                        target="_blank"
                                        class="text-primary">{{ asset('storage/nfc/gallery/' . $gallery->gallery_attachment) }}</a> --}}
                                        @else
                                            <a href="{{ $gallery->gallery_link }}" target="_blank"
                                                class="text-primary">{{ $gallery->gallery_link }}</a>
                                        @endif
                                    </td>
                                    <td>
                                        {{-- <a href="javascript:void(0)" class="text-primary me-3" data-bs-toggle="modal"
                                    data-bs-target="#galleryEditModal{{ $gallery->id }}">
                                    <i class="fa-solid fa-pen text-primary"></i>
                                </a> --}}
                                        <a href="javascript:void(0)" class="text-danger"
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
    <div class="col-lg-12">
        <div class="text-end d-flex justify-content-end">
            <a href="javascript:void(0)" onclick="goToTab(event, '#banner')" class="btn btn-primary mt-6 d-flex align-items-center">
                <span>Next</span>
                <span><i class="fa-solid fa-arrow-right-long ps-2"></i></span>
            </a>
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
                    <input type="hidden" name="gallery_type" value="image">
                    <div class="row">
                        <div class="fv-row  mb-5">
                            <x-metronic.label class="required fw-semibold fs-6 mb-3">Gallery Name</x-metronic.label>
                            <x-metronic.input type="text" class="form-control form-control-solid form-control-sm"
                                name="gallery_title" id="gallery_title" required placeholder="Gallery Name"
                                :value="old('gallery_title')" />
                        </div>
                        <div class="fv-row mb-5">
                            <x-metronic.label for="gallery_attachment"
                                class="col-form-label fw-bold fs-6 mb-3">{{ __('Gallery Image') }}</x-metronic.label>
                            <x-metronic.file-input id="gallery_attachment" name="gallery_attachment"
                                :value="old('gallery_attachment')"></x-metronic.file-input>
                        </div>
                        {{-- <div class="fv-row col-lg-6 col-12 mb-5">
                            <x-metronic.label class="fw-semibold fs-6 mb-3">Choose Gallery Type</x-metronic.label>
                            <select class="form-control select" id="galleryTypeSelect"
                                data-placeholder="Choose Gallery Type" name="gallery_type"
                                onchange="toggleGalleryType()">
                                <option value="">Choose Gallery Type</option>
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
                                    class="col-form-label fw-bold fs-6">{{ __('Youtube Video') }}</x-metronic.label>
                                <x-metronic.input type="text" class="form-control form-control-solid form-control-sm"
                                    name="gallery_link" id="gallery_link" required placeholder="Add youtube video url"
                                    :value="old('gallery_link')" />
                            </div>
                        </div> --}}
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


@foreach ($nfc_card->nfcGallery as $gallery)
    <div class="modal fade" id="galleryEditModal{{ $gallery->id }}" tabindex="-1" data-bs-backdrop="static"
        data-bs-keyboard="false" role="dialog" aria-labelledby="modalTitleIdgallery" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalTitleIdgallery">
                        Edit Gallery
                    </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form class="gallery_form_{{ $gallery->id }}" method="POST"
                        action="{{ route('nfc.gallery.update', $gallery->id) }}" autocomplete="off"
                        enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <input type="hidden" name="card_id" value="{{ $nfc_card->id }}">
                        <div class="fv-row  mb-5">
                            <x-metronic.label class="required fw-semibold fs-6 mb-3">Gallery Name</x-metronic.label>
                            <x-metronic.input type="text" class="form-control form-control-solid form-control-sm"
                                name="gallery_title" id="gallery_title" required placeholder="Gallery Name"
                                :value="old('gallery_title', $gallery->gallery_title)" />
                        </div>
                        <div class="fv-row mb-5">
                            <x-metronic.label for="gallery_attachment"
                                class="col-form-label fw-bold fs-6 mb-3">{{ __('Gallery Image') }}</x-metronic.label>
                            <x-metronic.file-input id="gallery_attachment" name="gallery_attachment" :source="asset('storage/nfc/gallery/' . $gallery->gallery_attachment)"
                                :value="old('gallery_attachment')"></x-metronic.file-input>
                        </div>
                        <div class="d-flex justify-content-end mt-10">
                            <button type="submit" onclick="updateGalleryForm($gallery->id)"
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
        $(document).ready(function() {
            // Initial call to set the correct section visibility on page load
            toggleGalleryType();
            // Handle changes in gallery type select
            $('#galleryTypeSelect').on('change', function() {
                toggleGalleryType();
            });
        });
    </script>

    <script>
        function deleteGallery(event, deleteUrl) {
            event.preventDefault(); // Prevent the default link action
            var gallery_container = $('.gallery_container');
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
                            $('.gallery_container').html('');
                            $('.gallery_container').html(response
                                .gallery_delete_view); // Replace HTML directly
                            Swal.fire("Deleted!", "Your gallery has been deleted.", "success").then(
                                function() {
                                    console.log('Updating container with new HTML');
                                });
                            console.log('Updating container with new HTML');
                            toastr.success('gallery deleted successfully!', 'Success');
                        },
                        error: function(xhr, status, error) {
                            Swal.fire("Error Occurred!",
                                "An error occurred while deleting the gallery.", "error");
                        },
                    });
                } else if (result.dismiss === Swal.DismissReason.cancel) {
                    Swal.fire("Cancelled", "Your gallery is safe :)", "error");
                }
            });
        }
    </script>
    <script>
        function submitGalleryForm() {
            // Detach any existing event handler to prevent multiple bindings
            $('.gallery_form').off('submit').on('submit', function(event) {
                event.preventDefault(); // Prevent default form submission

                var form = $(this);
                var url = form.attr('action');
                var formData = new FormData(form[0]);
                var submitButton = form.find('.kt_docs_formvalidation_text_submit');
                var modalElement = document.getElementById('galleryCreateModal');
                var modalInstance = bootstrap.Modal.getInstance(modalElement);
                var isValid = true;

                // Remove any existing error messages and red borders
                form.find('.text-danger').hide().text('');
                form.find('.form-control').removeClass('is-invalid');

                // Validate required fields
                form.find('[name="gallery_title"], [name="gallery_type"]').each(function() {
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
                            if (response.gallery_view) {
                                // Update form with new values
                                $('.gallery_container').html(response.gallery_view);

                                toastr.success('Data saved successfully!', 'Success');
                                // Reattach the event handler to the new form
                                submitGalleryForm();
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
            $('.gallery_form input, .gallery_form select').off('input change').on('input change', function() {
                $(this).removeClass('is-invalid');
                $(this).next('.text-danger').hide().text('');
            });
        }

        $(document).ready(function() {
            submitGalleryForm(); // Bind form submission event handler on document ready
        });
    </script>

    <script>
        function updateGalleryForm(id) {
            // Use jQuery's `on` to bind the form submit handler
            $('.gallery_form_' + id).off('submit').on('submit', function(event) {
                // $(document).on('submit', '.gallery_form_' + id, function(event) {
                event.preventDefault(); // Prevent default form submission

                var form = $(this);
                var url = form.attr('action');
                var formData = new FormData(form[0]);
                var submitButton = form.find('.kt_docs_formvalidation_text_submit');
                var modalElement = document.getElementById('galleryEditModal' + id);
                var modalInstance = bootstrap.Modal.getInstance(modalElement);
                var isValid = true;

                // Remove existing error messages and red borders
                form.find('.text-danger').hide().text('');
                form.find('.form-control').removeClass('is-invalid');

                // Validate required fields
                form.find('[name="gallery_title"], [name="gallery_attachment"]').each(function() {
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
                            if (response.gallery_view) {
                                // Update form with new values
                                $('.gallery_container').html(response.gallery_view);

                                toastr.success('Data saved successfully!', 'Success');
                                @foreach ($nfc_card->nfcGallery as $gallery)
                                    updateGalleryForm(
                                    {{ $gallery->id }}); // Bind form submission event handler for each form
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
            @foreach ($nfc_card->nfcGallery as $gallery)
                updateGalleryForm({{ $gallery->id }}); // Bind form submission event handler for each form
            @endforeach
        });
    </script>
@endpush

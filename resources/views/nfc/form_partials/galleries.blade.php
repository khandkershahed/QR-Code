<div class="row">
    <div class="col-lg-12">
        <div class="d-flex justify-content-end" data-kt-docs-table-toolbar="base">
            <button type="button" class="btn btn-primary btn-lg" data-bs-toggle="modal" data-bs-target="#modalIdgallery">
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
                        <th>SL</th>
                        <th>NAME</th>
                        <th>IMAGE</th>
                        <th>VIDEO</th>
                        <th>ACTION</th>
                    </tr>
                </thead>
                <tbody class="text-gray-600 fw-semibold">
                    <tr>
                        <td>1</td>
                        <td>Jone Robert Bruno</td>
                        <td>
                            <div>
                                <img class="img-fluid" style="width: 50px; height: 50px; object-fit: fill;"
                                    src="https://cdn.pixabay.com/photo/2015/06/10/16/36/mark-804938_640.jpg"
                                    alt="">
                            </div>
                        </td>
                        <td>
                            <a href="https://goflixza.com/">https://goflixza.com/</a>
                        </td>
                        <td>
                            <a href="" class="text-danger">Delete <i class="fa-solid fa-trash text-danger"
                                    aria-hidden="true"></i></a>
                        </td>
                    </tr>
                    {{-- <tr>
                        <td class="text-center" colspan="6">No Product available</td>
                    </tr> --}}
                </tbody>
            </table>
        </div>
    </div>
</div>

{{-- Add gallery modal --}}
<div class="modal fade" id="modalIdgallery" tabindex="-1" data-bs-backdrop="static" data-bs-keyboard="false"
    role="dialog" aria-labelledby="modalTitleIdgallery" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalTitleIdgallery">Add Gallery Form</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form class="kt_docs_formvalidation_text form row" action="#" autocomplete="off">
                    {{-- select what you upload --}}
                    <div class="fv-row col-lg-12 col-45 mb-4">
                        <x-metronic.label class="fw-semibold fs-6 mb-2">Choose Gallery Type</x-metronic.label>
                        <select class="form-select" id="galleryTypeSelect" data-control="select2"
                            data-placeholder="Choose Gallery Type" name="default_language">
                            <option value="" selected disabled>Choose Gallery Type</option>
                            <option value="image">Image</option>
                            <option value="video">Video</option>
                        </select>
                    </div>
                    {{-- If Choosen Image Upload --}}
                    <div id="chooseImage" style="display: none;">
                        <div class="fv-row">
                            <x-metronic.label class="required fw-semibold fs-6 mb-2">Gallery Name</x-metronic.label>
                            <x-metronic.input type="text" class="form-control form-control-solid form-control-sm"
                                name="service_name_image" id="service_name_image" required placeholder="Gallery Name"
                                :value="old('service_name_image')" />
                        </div>
                        <div class="fv-row">
                            <x-metronic.label for="logo"
                                class="col-form-label fw-bold fs-6">{{ __('Gallery Image') }}</x-metronic.label>
                            <x-metronic.file-input id="logo" name="logo" :value="old('logo')"></x-metronic.file-input>
                        </div>
                    </div>
                    {{-- If Choosen Video Upload --}}
                    <div id="chooseVideo" style="display: none;">
                        <div class="fv-row">
                            <x-metronic.label class="required fw-semibold fs-6 mb-2">Gallery Name</x-metronic.label>
                            <x-metronic.input type="text" class="form-control form-control-solid form-control-sm"
                                name="service_name_video" id="service_name_video" required placeholder="Gallery Name"
                                :value="old('service_name_video')" />
                        </div>
                        <div class="fv-row">
                            <label class="required fw-semibold fs-6 mb-2">Gallery Video</label>
                            <input type="url" name="gallery_video_url"
                                class="form-control form-control-solid mb-3 mb-lg-0" placeholder="" value="" />
                        </div>
                    </div>
                    {{-- Submit Action --}}
                    <div class="d-flex justify-content-end mt-10">
                        <button type="submit" class="kt_docs_formvalidation_text_submit btn btn-primary">
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
{{-- Modal End --}}

@push('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const galleryTypeSelect = document.getElementById('galleryTypeSelect');
            const chooseImage = document.getElementById('chooseImage');
            const chooseVideo = document.getElementById('chooseVideo');

            galleryTypeSelect.addEventListener('change', function() {
                if (this.value === 'image') {
                    chooseImage.style.display = 'block';
                    chooseVideo.style.display = 'none';
                } else if (this.value === 'video') {
                    chooseImage.style.display = 'none';
                    chooseVideo.style.display = 'block';
                } else {
                    chooseImage.style.display = 'none';
                    chooseVideo.style.display = 'none';
                }
            });

            // Initialize with only the select box visible
            chooseImage.style.display = 'none';
            chooseVideo.style.display = 'none';
        });
    </script>
@endpush

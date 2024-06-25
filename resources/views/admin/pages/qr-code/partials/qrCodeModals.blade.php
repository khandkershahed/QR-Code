<div class="modal fade" id="createCategory" tabindex="-1" data-bs-backdrop="static" data-bs-keyboard="false"
    role="dialog" aria-labelledby="modalTitleId" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-md" role="document">
        <form id="categoryCreateForm" enctype="multipart/form-data">
            @csrf
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalTitleId">
                        Create New Category
                    </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-lg-10">
                            <div class="fv-row mb-10 fv-plugins-icon-container">
                                <label class="d-flex align-items-center fs-5 fw-semibold mb-2">
                                    <span class="required">Upload Icons</span></label>
                                <input type="file" class="form-control form-control-lg form-control-solid"
                                    name="category_icon" placeholder="">
                            </div>
                        </div>
                        <div class="col-lg-2">
                            <div class="fv-row mb-10 fv-plugins-icon-container">
                                <label class="d-flex align-items-center fs-5 fw-semibold mb-2"></label>
                                <img class="img-fluid"
                                    src="https://preview.keenthemes.com/metronic8/demo1/assets/media/illustrations/sketchy-1/9.png"
                                    alt="">
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="fv-row mb-10 fv-plugins-icon-container">
                                <label class="d-flex align-items-center fs-5 fw-semibold mb-2">
                                    <span class="required">Category Name</span></label>
                                <input type="text" class="form-control form-control-lg form-control-solid"
                                    name="category_name" placeholder="Lunch, Dinner, Snacks etc">
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div data-kt-buttons="true"
                                style="display: flex;
                                        justify-content: space-between;
                                        gap: 20px;">
                                <label
                                    class="btn btn-outline btn-outline-dashed btn-active-light-primary d-flex flex-stack text-start p-6 mb-5">
                                    <div class="d-flex align-items-center me-2">
                                        <div
                                            class="form-check form-check-custom form-check-solid form-check-primary me-6">
                                            <input class="form-check-input" type="radio" name="category_availability"
                                                value="all_day" />
                                        </div>
                                        <div class="flex-grow-1">
                                            <h2 class="d-flex align-items-center fs-6 fw-bold flex-wrap">
                                                Available All Day
                                            </h2>
                                        </div>
                                    </div>
                                </label>

                                <label
                                    class="btn btn-outline btn-outline-dashed btn-active-light-primary d-flex flex-stack text-start p-6 mb-5 active">
                                    <div class="d-flex align-items-center me-2">
                                        <div
                                            class="form-check form-check-custom form-check-solid form-check-primary me-6">
                                            <input class="form-check-input" type="radio"
                                                name="category_availability" checked="checked" value="all_week" />
                                        </div>
                                        <div class="flex-grow-1">
                                            <h2 class="d-flex align-items-center fs-6 fw-bold flex-wrap">
                                                Available All Week
                                            </h2>
                                        </div>
                                    </div>
                                </label>
                            </div>
                        </div>
                        <div class="col-lg-12 mt-10 text-primary ">
                            {{-- <i class="fas fa-plus-square fs-3 accordion-icon-off"></i> --}}
                            <div class="accordion" id="kt_accordion_1">
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="kt_accordion_1_header_3">
                                        <button class="accordion-button fs-4 fw-semibold collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#kt_accordion_1_body_3"
                                            aria-expanded="false" aria-controls="kt_accordion_1_body_3">
                                            Schedule a Time Range
                                        </button>
                                    </h2>
                                    <div id="kt_accordion_1_body_3" class="accordion-collapse collapse"
                                        aria-labelledby="kt_accordion_1_header_3" data-bs-parent="#kt_accordion_1">
                                        <div class="accordion-body row">
                                            <p class="text-muted">Set a start and end date for this category
                                            </p>
                                            <div class="col-lg-6">
                                                <label for="start" class="text-muted">Start</label>
                                                <input type="time" name="category_start_time" id=""
                                                    class="form-control form-control-lg form-control-solid"
                                                    placeholder="Start">
                                            </div>
                                            <div class="col-lg-6">
                                                <label for="end" class="text-muted">End</label>
                                                <input type="time" name="category_end_time" id=""
                                                    class="form-control form-control-lg form-control-solid"
                                                    placeholder="end">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    {{-- ​<input type="button" class="btn btn-primary" name="submit" value="Save"
                        onclick="submitCategoryForm(event)" /> --}}
                        <input type="button" class="btn btn-primary" name="submit" value="Save" />
                    {{-- <button type="button" class="btn btn-primary" onclick="submitCategoryForm(event)">Save</button> --}}
                </div>
            </div>
        </form>
    </div>
</div>

{{-- Edit Modal --}}
@foreach ($categories as $category)
    <div class="modal fade editCategory" id="editCategory{{ $category->id }}" tabindex="-1" data-bs-backdrop="static"
        data-bs-keyboard="false" role="dialog" aria-labelledby="modalTitleId" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-md" role="document">
            <form id="categoryEditForm{{ $category->id }}" enctype="multipart/form-data">
                @csrf
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="modalTitleId">
                            Edit Category
                        </h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                            aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-lg-10">
                                <div class="fv-row mb-10 fv-plugins-icon-container">
                                    <label class="d-flex align-items-center fs-5 fw-semibold mb-2">
                                        <span class="required">Upload Icons</span></label>
                                    <input type="file" class="form-control form-control-lg form-control-solid"
                                        name="category_icon" placeholder="">
                                </div>
                            </div>
                            <div class="col-lg-2">
                                <div class="fv-row mb-10 fv-plugins-icon-container">
                                    <label class="d-flex align-items-center fs-5 fw-semibold mb-2"></label>
                                    <img class="img-fluid"
                                        src="{{ asset('storage/qr_codes/restaurants/' . $category->category_icon) }}"
                                        alt="">
                                </div>
                            </div>
                            <input type="hidden" class="form-control form-control-lg form-control-solid"
                                   name="category_id" value="{{ $category->id }}">
                            <div class="col-lg-12">
                                <div class="fv-row mb-10 fv-plugins-icon-container">
                                    <label class="d-flex align-items-center fs-5 fw-semibold mb-2">
                                        <span class="required">Category Name</span></label>
                                    <input type="text" class="form-control form-control-lg form-control-solid"
                                        name="category_name" placeholder="Lunch, Dinner, Snacks etc"
                                        value="{{ $category->category_name }}">
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div data-kt-buttons="true" style="display: flex; justify-content: space-between; gap: 20px;">
                                    <label class="btn btn-outline btn-outline-dashed btn-active-light-primary d-flex flex-stack text-start p-6 mb-5">
                                        <div class="d-flex align-items-center me-2">
                                            <div class="form-check form-check-custom form-check-solid form-check-primary me-6">
                                                <input class="form-check-input" type="radio" name="category_availability" value="all_day" @checked($category->category_availability == 'all_day') />
                                            </div>
                                            <div class="flex-grow-1">
                                                <h2 class="d-flex align-items-center fs-6 fw-bold flex-wrap">
                                                    Available All Day
                                                </h2>
                                            </div>
                                        </div>
                                    </label>

                                    <label class="btn btn-outline btn-outline-dashed btn-active-light-primary d-flex flex-stack text-start p-6 mb-5 active">
                                        <div class="d-flex align-items-center me-2">
                                            <div class="form-check form-check-custom form-check-solid form-check-primary me-6">
                                                <input class="form-check-input" type="radio" name="category_availability" value="all_week" @checked($category->category_availability == 'all_week') />
                                            </div>
                                            <div class="flex-grow-1">
                                                <h2 class="d-flex align-items-center fs-6 fw-bold flex-wrap">
                                                    Available All Week
                                                </h2>
                                            </div>
                                        </div>
                                    </label>
                                </div>
                            </div>
                            <div class="col-lg-12 mt-10 text-primary">
                                <div class="accordion" id="kt_accordion_1">
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="kt_accordion_1_header_3">
                                            <button class="accordion-button fs-4 fw-semibold collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#kt_accordion_1_body_3"
                                                aria-expanded="false" aria-controls="kt_accordion_1_body_3">
                                                Schedule a Time Range
                                            </button>
                                        </h2>
                                        <div id="kt_accordion_1_body_3" class="accordion-collapse collapse"
                                            aria-labelledby="kt_accordion_1_header_3" data-bs-parent="#kt_accordion_1">
                                            <div class="accordion-body row">
                                                <p class="text-muted">Set a start and end date for this category
                                                </p>
                                                <div class="col-lg-6">
                                                    <label for="start" class="text-muted">Start</label>
                                                    <input type="time" name="category_start_time" value="{{ $category->category_start_time }}"
                                                        class="form-control form-control-lg form-control-solid" placeholder="Start">
                                                </div>
                                                <div class="col-lg-6">
                                                    <label for="end" class="text-muted">End</label>
                                                    <input type="time" name="category_end_time" value="{{ $category->category_end_time }}"
                                                        class="form-control form-control-lg form-control-solid" placeholder="End">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <input type="button" class="btn btn-primary" value="Update" onclick="submitCategoryEditForm(event)" />
                    </div>
                </div>
            </form>
        </div>
    </div>
@endforeach

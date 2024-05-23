<div class="row">
    <div class="col-lg-12">
        <ul class="nav nav-pills nav-pills-custom mb-3 row mt-10">
            @if ($categories->count() > 0)
                @foreach ($categories as $category)
                    <li class="nav-item mb-3 col-lg-2">
                        <a class="nav-link btn btn-outline btn-flex btn-color-muted btn-active-color-primary flex-column overflow-hidden"
                            id="kt_stats_widget_16_tab_link_2" data-bs-toggle="pill" href="#brandingChild">
                            <div class="text-end">
                                <i class="fa-solid fa-pen-to-square text-primary" data-bs-toggle="modal"
                                    data-bs-target="#editCategory{{ $category->id }}"></i>
                                {{-- <i class="fa-solid fa-trash text-danger" data-bs-toggle="modal"
                                    data-bs-target="#modalId"></i> --}}
                            </div>

                            <div class="d-flex justify-content-center">
                                <img class="img-fluid" width="50px"
                                    src="{{ asset('storage/qr_codes/restaurants/' . $category->category_icon) }}"
                                    alt="">
                            </div>
                            <div class="p-2 text-center">
                                <p class="mb-0 fw-bolder text-black">{{ $category->category_name }}</p>
                                <small style="font-size: 10px">{{ $category->category_start_time }} -
                                    {{ $category->category_end_time }}</small> <br>
                                <small>
                                    @if ($category->category_availability == 'all_week')
                                        All Week
                                    @else
                                        All Day
                                    @endif
                                </small>
                            </div>
                            <span class="bullet-custom position-absolute bottom-0 w-100 h-4px bg-primary"></span>
                        </a>
                    </li>
                @endforeach
            @else
                <li class="nav-item mb-3 col-lg-2">
                    <h4 class="text-center">No Category Available</h4>
                </li>
            @endif
        </ul>
        <div class="tab-content">
            <div class="tab-pane fade" id="brandingChild">
                <div class="col-lg-10">
                    <div class="fv-row mb-10 fv-plugins-icon-container">
                        <label class="d-flex align-items-center fs-5 fw-semibold mb-2">
                            <span class="required">Upload Menu PDF</span></label>
                        <input type="file" class="form-control form-control-lg form-control-solid" name="name"
                            placeholder="">
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="branding2Child">
                <div class="col-lg-10">
                    <div class="fv-row mb-10 fv-plugins-icon-container">
                        <label class="d-flex align-items-center fs-5 fw-semibold mb-2">
                            <span class="required">Upload Menu PDF</span></label>
                        <input type="file" class="form-control form-control-lg form-control-solid" name="name"
                            placeholder="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

{{-- Add modal --}}
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
                            {{-- <i class="fa-solid fa-plus-square fs-3 accordion-icon-off"></i> --}}
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


{{-- @push('scripts')
    <script>
        // url: '{{ route('user.restaurant-category.store') }}',
        function submitCategoryForm(event) {
            // Prevent the default form submission
            event.preventDefault();

            // Get the form element using the event target's form property
            let form = event.target.closest('form');

            // Debugging
            console.log(form);

            // Check if form is an HTMLFormElement
            if (!(form instanceof HTMLFormElement)) {
                console.error('The form is not an HTMLFormElement.');
                return;
            }

            // Create a FormData object
            let formData = new FormData(form);

            // Send the form data using AJAX
            $.ajax({
                type: 'POST',
                url: '{{ route('user.restaurant-category.store') }}',
                data: formData,
                contentType: false,
                processData: false,
                success: function(response) {
                    alert(response.success);
                    // Optionally, you can close the modal and refresh part of the page here
                    $('#createCategory').modal('hide');
                    // Reload part of the page or add the new category to the UI
                },
                error: function(response) {
                    // Handle error here
                    let errors = response.responseJSON.errors;
                    let errorMessage = '';
                    for (const [key, value] of Object.entries(errors)) {
                        errorMessage += value + '\n';
                    }
                    alert(errorMessage);
                }
            });
        }
    </script>
@endpush --}}

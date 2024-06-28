<div class="row">
    <div class="col-lg-12">
        <ul class="nav nav-pills nav-pills-custom mb-3 row mt-10">
            @if ($categories->count() > 0)
                @foreach ($categories as $category)
                    <li class="nav-item mb-3 col-lg-2">
                        <div class="text-center">
                            <i class="fas fa-pen-to-square text-primary" data-bs-toggle="modal"
                                data-bs-target="#editCategory{{ $category->id }}"></i>
                            <a href="javascript:void(0);" class="delete-category ps-3" data-category-id="{{ $category->id }}">
                                <i class="fas fa-trash text-danger"></i>
                            </a>
                        </div>
                        <a class="nav-link btn btn-outline btn-flex btn-color-muted btn-active-color-primary flex-column overflow-hidden"
                            id="kt_stats_widget_16_tab_link_2" data-bs-toggle="pill" href="#brandingChild">
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
                <li class="nav-item mb-3 col-lg-12 w-100">
                    <h4 class="text-center">No Category Available</h4>
                </li>
            @endif
        </ul>
        {{-- <div class="tab-content">
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
        </div> --}}
    </div>
</div>

{{-- Add modal --}}



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

<div class="row">
    <div class="col-lg-12">
        <div class="d-flex justify-content-end" data-kt-docs-table-toolbar="base">
            <button type="button" class="btn btn-primary btn-lg" data-bs-toggle="modal"
                data-bs-target="#productCreateModal">
                Add Product
            </button>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-lg-12">
        <h3>All Product List</h3>
        <div class="table-responsive">
            <table class="table align-middle table-row-dashed table-border fs-6 gy-5">
                <thead>
                    <tr class="text-start text-gray-500 fw-bold fs-7 text-uppercase gs-0">
                        <th>Sl</th>
                        <th>PRODUCT IMAGE</th>
                        <th>PRODUCT NAME</th>
                        <th>PRODUCT Price</th>
                        <th>PRODUCT URL</th>
                        <th>ACTION</th>
                    </tr>
                </thead>
                <tbody class="text-gray-600 fw-semibold">
                    @if ($nfc_card->nfcProduct->count() > 0)
                        @foreach ($nfc_card->nfcProduct as $product)
                            <tr>
                                <td>
                                    {{ $loop->iteration }}
                                </td>
                                <td>
                                    <div>
                                        <img class="img-fluid" width="50px" height="50px"
                                            src="{{ asset('storage/nfc/product/' . $product->product_icon) }}"
                                            alt="">
                                    </div>
                                </td>
                                <td>
                                    <p class="mb-0">{{ $product->product_name }}</p>
                                </td>
                                <td>
                                    <p class="mb-0">{{ $product->product_price }}</p>
                                </td>
                                <td>
                                    <a href="{{ $product->product_url }}" target="_blank" class="text-primary">Product
                                        Url <i class="fa-solid fa-link text-primary"></i></a>
                                </td>
                                <td>
                                    <a href="javascript:void(0)" class="text-primary me-3" data-bs-toggle="modal"
                                        data-bs-target="#productEditModal{{ $product->id }}">
                                        <i class="fa-solid fa-pen text-primary"></i>
                                    </a>
                                    <a href="javascript:void(0)" class="text-danger"
                                        onclick="deleteProduct(event, '{{ route('nfc.product.destroy', $product->id) }}')">Delete
                                        <i class="fa-solid fa-trash text-danger"></i></a>
                                </td>
                            </tr>
                        @endforeach
                    @else
                        <tr>
                            <td class="text-center" colspan="6">No Product available</td>
                        </tr>
                    @endif
                </tbody>
            </table>
        </div>
    </div>
    <div class="col-lg-12">
        <div class="text-end d-flex justify-content-end">
            <button class="kt_docs_formvalidation_text_submit btn btn-primary mt-6 d-flex align-items-center">
                <span>Next</span>
                <span><i class="fa-solid fa-arrow-right-long ps-2"></i></span>
            </button>
        </div>
    </div>
</div>

{{-- Add Product modal --}}
<div class="modal fade" id="productCreateModal" tabindex="-1" data-bs-backdrop="static" data-bs-keyboard="false"
    role="dialog" aria-labelledby="modalTitleIdproduct" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalTitleIdproduct">
                    Add Product Form
                </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form class="product_form form" method="POST" action="{{ route('nfc.product.add') }}"
                    autocomplete="off" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="card_id" value="{{ $nfc_card->id }}">
                    <div class="row">
                        <div class="fv-row mb-7">
                            <x-metronic.label
                                class="required fw-semibold fs-6 mb-2">{{ __('Product Name') }}</x-metronic.label>
                            <x-metronic.input type="text" class="form-control form-control-solid form-control-sm"
                                name="product_name" :value="old('product_name')" placeholder="Product Name" required />
                        </div>
                        <div class="fv-row mb-7 col-lg-6">
                            <label class="required fw-semibold fs-6 mb-2">Currency</label>
                            <select class="form-control select" name="product_currency"
                                data-placeholder="Select a Currency">
                                <option></option>
                                <option value="taka">Taka(Tk)</option>
                                <option value="euro">Euro(€)</option>
                                <option value="dollar">Dollar($)</option>
                                <option value="pound">Pound(£)</option>
                            </select>
                        </div>
                        <div class="fv-row mb-7 col-lg-6">
                            <x-metronic.label
                                class="required fw-semibold fs-6 mb-2">{{ __('Product Price') }}</x-metronic.label>
                            <x-metronic.input type="number" step="0.01"
                                class="form-control form-control-solid form-control-sm" name="product_price"
                                :value="old('product_price')" placeholder="product price" required />
                        </div>
                        <div class="fv-row mb-7">
                            <x-metronic.label for="product_icon"
                                class="col-form-label fw-bold fs-6 ">{{ __('Product Icon/Image') }}</x-metronic.label>
                            <x-metronic.file-input id="product_icon" name="product_icon"
                                :value="old('product_icon')"></x-metronic.file-input>
                        </div>

                        <div class="fv-row mb-7">
                            <x-metronic.label class="fw-semibold fs-6 mb-2">{{ __('Product URL') }}</x-metronic.label>
                            <x-metronic.input type="url" class="form-control form-control-solid form-control-sm"
                                name="product_url" id="product_url" placeholder="Product URL" :value="old('product_url')" />
                        </div>
                        <div class="fv-row mb-7">
                            <label class="fw-semibold fs-6 mb-2">{{ __('Description') }}</label>
                            <textarea name="product_description" class="form-control form-control-solid mb-3 mb-lg-0" id="product_description"
                                rows="3">{{ old('product_description') }}</textarea>
                        </div>
                    </div>
                    <div class="d-flex justify-content-end mt-10">
                        <button type="submit" onclick="submitProductForm()"
                            class="kt_docs_formvalidation_text_submit btn btn-primary">
                            <span class="indicator-label">
                                Create Product
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

@foreach ($nfc_card->nfcProduct as $product)
    <div class="modal fade" id="productEditModal{{ $product->id }}" tabindex="-1" data-bs-backdrop="static"
        data-bs-keyboard="false" role="dialog" aria-labelledby="modalTitleIdproduct" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalTitleIdproduct">
                        Edit product Form
                    </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form class="product_form_{{ $product->id }}" method="POST"
                        action="{{ route('nfc.product.update', $product->id) }}" autocomplete="off"
                        enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <input type="hidden" name="card_id" value="{{ $nfc_card->id }}">
                        <div class="row">
                            <div class="fv-row mb-7">
                                <x-metronic.label
                                    class="required fw-semibold fs-6 mb-2">{{ __('Product Name') }}</x-metronic.label>
                                <x-metronic.input type="text"
                                    class="form-control form-control-solid form-control-sm" name="product_name"
                                    :value="old('product_name',$product->product_name)" placeholder="Product Name" required />
                            </div>
                            <div class="fv-row mb-7 col-lg-6">
                                <label class="required fw-semibold fs-6 mb-2">Currency</label>
                                <select class="form-control select" name="product_currency"
                                    data-placeholder="Select a Currency">
                                    <option></option>
                                    <option value="taka" @selected($product->product_currency == "taka")>Taka(Tk)</option>
                                    <option value="euro" @selected($product->product_currency == "euro")>Euro(€)</option>
                                    <option value="dollar" @selected($product->product_currency == "dollar")>Dollar($)</option>
                                    <option value="pound" @selected($product->product_currency == "pound")>Pound(£)</option>
                                </select>
                            </div>
                            <div class="fv-row mb-7 col-lg-6">
                                <x-metronic.label
                                    class="required fw-semibold fs-6 mb-2">{{ __('Product Price') }}</x-metronic.label>
                                <x-metronic.input type="number" step="0.01"
                                    class="form-control form-control-solid form-control-sm" name="product_price"
                                    :value="old('product_price',$product->product_price)" placeholder="product price" required />
                            </div>
                            <div class="fv-row mb-7">
                                <x-metronic.label for="product_icon"
                                    class="fw-semibold fs-6 mb-2">{{ __('Product Icon/Image') }}
                                </x-metronic.label>
                                <x-metronic.file-input id="product_icon" name="product_icon" :source="asset('storage/nfc/product/' . $product->product_icon)"
                                    :value="old('product_icon', $product->product_icon)"></x-metronic.file-input>
                            </div>

                            <div class="fv-row mb-7">
                                <x-metronic.label
                                    class="fw-semibold fs-6 mb-2">{{ __('Product URL') }}</x-metronic.label>
                                <x-metronic.input type="url"
                                    class="form-control form-control-solid form-control-sm" name="product_url"
                                    id="product_url" placeholder="Product URL" :value="old('product_url',$product->product_url)" />
                            </div>
                            <div class="fv-row mb-7">
                                <label class="fw-semibold fs-6 mb-2">{{ __('Description') }}</label>
                                <textarea name="product_description" class="form-control form-control-solid mb-3 mb-lg-0" id="product_description"
                                    rows="3">{{ old('product_description',$product->product_url) }}</textarea>
                            </div>
                        </div>
                        <div class="d-flex justify-content-end mt-10">
                            <button type="submit" onclick="updateProductForm($product->id)"
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
        function deleteProduct(event, deleteUrl) {
            event.preventDefault(); // Prevent the default link action
            var product_container = $('.product_container');
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
                            $('.product_container').html('');
                            $('.product_container').html(response
                                .product_delete_view); // Replace HTML directly
                            Swal.fire("Deleted!", "Your product has been deleted.", "success").then(
                                function() {
                                    console.log('Updating container with new HTML');
                                });
                            console.log('Updating container with new HTML');
                            toastr.success('product deleted successfully!', 'Success');
                        },
                        error: function(xhr, status, error) {
                            Swal.fire("Error Occurred!",
                                "An error occurred while deleting the product.", "error");
                        },
                    });
                } else if (result.dismiss === Swal.DismissReason.cancel) {
                    Swal.fire("Cancelled", "Your product is safe :)", "error");
                }
            });
        }
    </script>
    <script>
        function submitProductForm() {
            // Detach any existing event handler to prevent multiple bindings
            $('.product_form').off('submit').on('submit', function(event) {
                event.preventDefault(); // Prevent default form submission

                var form = $(this);
                var url = form.attr('action');
                var formData = new FormData(form[0]);
                var submitButton = form.find('.kt_docs_formvalidation_text_submit');
                var modalElement = document.getElementById('productCreateModal');
                var modalInstance = bootstrap.Modal.getInstance(modalElement);
                var isValid = true;

                // Remove any existing error messages and red borders
                form.find('.text-danger').hide().text('');
                form.find('.form-control').removeClass('is-invalid');

                // Validate required fields
                form.find('[name="product_name"], [name="product_currency"], [name="product_price"]').each(
                    function() {
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
                            if (response.product_view) {
                                // Update form with new values
                                $('.product_container').html(response.product_view);

                                toastr.success('Data saved successfully!', 'Success');
                                // Reattach the event handler to the new form
                                submitProductForm();
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
            $('.product_form input, .product_form select').off('input change').on('input change', function() {
                $(this).removeClass('is-invalid');
                $(this).next('.text-danger').hide().text('');
            });
        }

        $(document).ready(function() {
            submitProductForm(); // Bind form submission event handler on document ready
        });
    </script>
    <script>
        function updateProductForm(id) {
            // Use jQuery's `on` to bind the form submit handler
            $('.product_form_' + id).off('submit').on('submit', function(event) {
                // $(document).on('submit', '.product_form_' + id, function(event) {
                event.preventDefault(); // Prevent default form submission

                var form = $(this);
                var url = form.attr('action');
                var formData = new FormData(form[0]);
                var submitButton = form.find('.kt_docs_formvalidation_text_submit');
                var modalElement = document.getElementById('productEditModal' + id);
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
                            if (response.product_view) {
                                // Update form with new values
                                $('.product_container').html(response.product_view);

                                toastr.success('Data saved successfully!', 'Success');
                                @foreach ($nfc_card->nfcProduct as $product)
                                    updateProductForm(
                                        {{ $product->id }}
                                    ); // Bind form submission event handler for each form
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
            @foreach ($nfc_card->nfcProduct as $product)
                updateProductForm({{ $product->id }}); // Bind form submission event handler for each form
            @endforeach
        });
    </script>
@endpush

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
                                            src="{{ asset('storage/nfc/product/' . $product->product_icon) }}" alt="">
                                    </div>
                                </td>
                                <td>
                                    <p class="mb-0">{{ $product->product_name }}</p>
                                </td>
                                <td>
                                    <p class="mb-0">{{ $product->product_price }}</p>
                                </td>
                                <td>
                                    <a href="{{ $product->product_url }}" target="_blank" class="text-primary">Product Url <i
                                            class="fa-solid fa-link text-primary"></i></a>
                                </td>
                                <td>
                                    <a href="{{ route('nfc.product.destroy', $product->id) }}" class="text-danger"
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
                <div class="fv-row mb-7">
                    <x-metronic.label
                        class="required fw-semibold fs-6 mb-2">{{ __('Product Name') }}</x-metronic.label>
                    <x-metronic.input type="text" class="form-control form-control-solid form-control-sm"
                        name="product_name" :value="old('product_name')" placeholder="Product Name" required />
                </div>
                {{-- <div class="fv-row mb-7 col-6">
                    <label class="required fw-semibold fs-6 mb-2">Currency</label>
                    <select class="form-select" data-control="select2" name="product_currency" data-placeholder="Select an Currency">
                        <option></option>
                        <option value="1">Option 1</option>
                        <option value="2">Option 2</option>
                    </select>
                </div> --}}
                <div class="fv-row mb-7">
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
                <div class="d-flex justify-content-end mt-10">
                    <button type="submit" onclick="submitProductForm()"
                        class="kt_docs_formvalidation_text_submit btn btn-primary">
                        <span class="indicator-label">
                            Create Product
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

@push('scripts')
    <script>
        function submitProductForm() {
            var form = $('.product_form');
            var url = form.attr('action');
            var formData = new FormData(form[0]);
            var product_container = $('.product_container');

            var modalElement = document.getElementById('productCreateModal');
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
                    if (response.product_view) {
                        console.log('Updating container with new HTML');
                        modalInstance.hide(); // Use Bootstrap's modal hide method
                        product_container.html(response.product_view); // Replace HTML directly
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
                            toastr.success('Service deleted successfully!', 'Success');
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
@endpush

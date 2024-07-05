<div class="d-flex flex-stack mb-5">
    <div class="d-flex align-items-center position-relative my-1">
        <i class="ki-duotone ki-magnifier fs-1 position-absolute ms-6"><span class="path1"></span><span
                class="path2"></span></i>
        <input type="text" data-kt-docs-table-filter="search" class="form-control form-control-solid w-250px ps-15"
            placeholder="Search Customers" />
    </div>

    <div class="d-flex justify-content-end" data-kt-docs-table-toolbar="base">
        <button type="button" class="btn btn-primary btn-lg" data-bs-toggle="modal" data-bs-target="#modalIdproduct">
            Add Product
        </button>
    </div>
    {{-- Add Product modal --}}
    <!-- if you want to close by clicking outside the modal, delete the last endpoint:data-bs-backdrop and data-bs-keyboard -->
    <div class="modal fade" id="modalIdproduct" tabindex="-1" data-bs-backdrop="static" data-bs-keyboard="false"
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
                    <form class="kt_docs_formvalidation_text form row" action="#" autocomplete="off">
                        <div class="fv-row">
                                <x-metronic.label class="required fw-semibold fs-6 mb-2">Product
                                    Name</x-metronic.label>
                                <x-metronic.input type="text" class="form-control form-control-solid form-control-sm" name="product_name" :value="old('product_name')"
                                    placeholder="Product Name" required/>
                        </div>
                        {{-- <div class="fv-row col-6">
                            <label class="required fw-semibold fs-6 mb-2">Currency</label>
                            <select class="form-select" data-control="select2" name="product_currency" data-placeholder="Select an Currency">
                                <option></option>
                                <option value="1">Option 1</option>
                                <option value="2">Option 2</option>
                            </select>
                        </div> --}}
                        <div class="fv-row col-6">
                                <x-metronic.label class="required fw-semibold fs-6 mb-2">Product Price</x-metronic.label>
                                <x-metronic.input type="number" step="0.01" class="form-control form-control-solid form-control-sm" name="product_price" :value="old('product_price')"
                                    placeholder="product price" required/>
                        </div>
                        <div class="fv-row">
                            <x-metronic.label for="product_icon"
                                class="col-form-label fw-bold fs-6 ">{{ __('Product Icon/Image') }}</x-metronic.label>
                            <x-metronic.file-input id="product_icon" name="product_icon" :value="old('product_icon')"></x-metronic.file-input>
                        </div>
                        <div class="fv-row">
                            <label class="required fw-semibold fs-6 mb-2">Product Url</label>

                            <input type="text" name="product_name"
                                class="form-control form-control-solid mb-3 mb-lg-0" placeholder="" value="" />
                        </div>
                        <div class="fv-row">
                            <label class="fw-semibold fs-6 mb-2">Description</label>
                            <textarea name="description" class="form-control form-control-solid mb-3 mb-lg-0" id="" cols="30"
                                rows="3"></textarea>
                        </div>

                        <div class="d-flex justify-content-end mt-10">
                            <button type="submit" class="kt_docs_formvalidation_text_submit btn btn-primary">
                                <span class="indicator-label">
                                    Create Service
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
                <th class="w-10px pe-2">
                    <div class="form-check form-check-sm form-check-custom form-check-solid me-3">
                        <input class="form-check-input" type="checkbox" data-kt-check="true"
                            data-kt-check-target="#kt_datatable_example_1 .form-check-input" value="1" />
                    </div>
                </th>
                <th>Sl</th>
                <th>PRODUCT IMAGE</th>
                <th>PRODUCT NAME</th>
                <th>PRODUCT Price</th>
                <th>PRODUCT URL</th>
                <th>ACTION</th>
            </tr>
        </thead>
        <tbody class="text-gray-600 fw-semibold">
            <tr>
                <td>
                    <div class="form-check form-check-sm form-check-custom form-check-solid me-3">
                        <input class="form-check-input" type="checkbox" data-kt-check="true"
                            data-kt-check-target="#kt_datatable_example_1 .form-check-input" value="1" />
                    </div>
                </td>
                <td>
                    1
                </td>
                <td>
                    <div>
                        <img class="img-fluid" width="50px" height="50px"
                            src="https://cdn.pixabay.com/photo/2015/06/10/16/36/mark-804938_640.jpg" alt="">
                    </div>
                </td>
                <td>
                    <p class="mb-0">Jone Robert Bruno</p>
                </td>
                <td>
                    <p class="mb-0">$25</p>
                </td>
                <td>
                    <a href="" class="text-primary">Service Url <i
                            class="fa-solid fa-link text-primary"></i></a>
                </td>
                <td>
                    <a href="" class="text-danger">Delete <i class="fa-solid fa-trash text-danger"></i></a>
                </td>
            </tr>
        </tbody>
    </table>
</div>
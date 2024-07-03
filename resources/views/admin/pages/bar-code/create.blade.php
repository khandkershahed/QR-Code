<x-admin-app-layout :title="'Bar Code Generate'">
    <style>
        .equal-height1 {
            display: flex;
            flex-wrap: wrap;
            gap: 0.5rem;
            /* Adjust this value for desired gap */
        }

        .equal-height1>.col-lg-6 {
            display: flex;
            flex-direction: column;
            flex: 1;
        }

        .equal-height1 .bg-white {
            flex-grow: 1;
        }


        .equal-height {
            display: flex;
            flex-wrap: wrap;
            gap: 0.5rem;
            /* Adjust this value for desired gap */
        }

        .equal-height>.col-lg-6 {
            display: flex;
            flex-direction: column;
            flex: 1;
        }

        .equal-height .bg-white {
            flex-grow: 1;
        }
    </style>
    <div id="buttonDiv" class="d-flex flex-column justify-content-center align-items-center fade fade-in"
        style="padding-top: 10rem">
        <h1>Welcome To Barcode World !</h1>
        <!-- Modal Body -->
        <p>Generate Your Barcode Card And Use Them Securely!</p>
        <div>
            <img src="{{ asset('admin') }}/assets/media/custom/insturction.png" alt="">
        </div>
        <button id="hideOneClick" class="btn btn-info fa-bounce w-25">Continue To Generate Barcode <i
                class="fa-solid fa-arrow-right-long ps-4"></i>
        </button>
    </div>
    <div id="contentDiv" class="d-none fade">
        <div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="py-10">
                        <h1 class="text-center mb-0"> <i class="fas fa-barcode fs-1 text-black"></i> Barcode Generator
                        </h1>
                    </div>
                </div>
                <div class="w-lg-50 w-100 mx-auto row">
                    <div class="col-lg-6">
                        <input type="radio" class="btn-check" name="barcode_option" value="create-barcode" checked
                            id="kt_radio_buttons_option_1" />
                        <label
                            class="btn btn-outline btn-outline-dashed btn-active-light-info p-7 d-flex align-items-center mb-5"
                            for="kt_radio_buttons_option_1">
                            <i class="fas fa-barcode fs-4x me-4"></i>
                            <span class="d-block fw-semibold text-start">
                                <span class="text-gray-900 fw-bold d-block fs-3">Create Barcode</span>
                                <span class="text-muted fw-semibold fs-6">
                                    Create Your Custom Barcode With All Information & Generate Barcode.
                                </span>
                            </span>
                        </label>
                    </div>
                    <div class="col-lg-6">
                        <input type="radio" class="btn-check" name="barcode_option" value="create-bulk-barcode"
                            id="kt_radio_buttons_option_2" />
                        <label
                            class="btn btn-outline btn-outline-dashed btn-active-light-info p-7 d-flex align-items-center"
                            for="kt_radio_buttons_option_2">
                            <i class="fas fa-file-csv fs-4x me-4"></i>
                            <span class="d-block fw-semibold text-start">
                                <span class="text-gray-900 fw-bold d-block fs-3">Create Bulk Barcode</span>
                                <span class="text-muted fw-semibold fs-6">
                                    Upload Your CSV File And Create Bulk Barcode Automatically.
                                </span>
                            </span>
                        </label>
                    </div>
                </div>
            </div>
            {{-- Toggler form --}}
            {{-- Single Barcode Info Upload --}}
            <div class="create-barcode-show" id="create-barcode-form" style="display: none;">
                <div class="w-lg-75 w-100 mx-auto row">
                    <div class="col-lg-12">
                        <div class="row equal-height1" id="equal-height-row1">
                            <h2 class="text-center mt-10">Create New Barcode</h2>
                            <div class="col-6 bg-white" id="first-column1">
                                <div class="">
                                    <div class="card">
                                        <div class="card-body">
                                            <form id="kt_docs_formvalidation_text" class="form" action="#"
                                                autocomplete="off" method="post">
                                                @csrf
                                                {{-- Forms Input --}}
                                                <div class="border-dashed border-1 p-3 rounded-2 mb-2">
                                                    <div class="row">
                                                        <div class="fv-row col-lg-6">
                                                            <label class="required fw-semibold fs-6 mb-2">
                                                                <svg class="svg-inline--fa fa-signature fa-fw fa-sm text-muted mr-1"
                                                                    aria-hidden="true" focusable="false"
                                                                    data-prefix="fas" data-icon="signature"
                                                                    role="img" xmlns="http://www.w3.org/2000/svg"
                                                                    viewBox="0 0 640 512" data-fa-i2svg="">
                                                                    <path fill="currentColor"
                                                                        d="M192 128c0-17.7 14.3-32 32-32s32 14.3 32 32v7.8c0 27.7-2.4 55.3-7.1 82.5l-84.4 25.3c-40.6 12.2-68.4 49.6-68.4 92v71.9c0 40 32.5 72.5 72.5 72.5c26 0 50-13.9 62.9-36.5l13.9-24.3c26.8-47 46.5-97.7 58.4-150.5l94.4-28.3-12.5 37.5c-3.3 9.8-1.6 20.5 4.4 28.8s15.7 13.3 26 13.3H544c17.7 0 32-14.3 32-32s-14.3-32-32-32H460.4l18-53.9c3.8-11.3 .9-23.8-7.4-32.4s-20.7-11.8-32.2-8.4L316.4 198.1c2.4-20.7 3.6-41.4 3.6-62.3V128c0-53-43-96-96-96s-96 43-96 96v32c0 17.7 14.3 32 32 32s32-14.3 32-32V128zm-9.2 177l49-14.7c-10.4 33.8-24.5 66.4-42.1 97.2l-13.9 24.3c-1.5 2.6-4.3 4.3-7.4 4.3c-4.7 0-8.5-3.8-8.5-8.5V335.6c0-14.1 9.3-26.6 22.8-30.7zM24 368c-13.3 0-24 10.7-24 24s10.7 24 24 24H64.3c-.2-2.8-.3-5.6-.3-8.5V368H24zm592 48c13.3 0 24-10.7 24-24s-10.7-24-24-24H305.9c-6.7 16.3-14.2 32.3-22.3 48H616z">
                                                                    </path>
                                                                </svg>
                                                                Product Name
                                                            </label>

                                                            <input type="text" name="product_name"
                                                                class="form-control form-control-solid mb-3 mb-lg-0"
                                                                placeholder="3L Fresh Water" value="" />
                                                        </div>
                                                        <div class="fv-row col-lg-3">
                                                            <label class="fw-semibold fs-6 mb-2">Product ID <small
                                                                    class="text-info">(Dynamic)</small></label>
                                                            <div class="input-group mb-3">
                                                                <input type="text"
                                                                    class="form-control form-control-solid mb-3 mb-lg-0"
                                                                    name="product_id" placeholder="56849845769"
                                                                    value="" aria-describedby="button-addon2"
                                                                    id="product-id-input">
                                                                <button class="btn btn-info rounded-0 px-3"
                                                                    type="button" id="button-addon2"><i
                                                                        class="fas fa-infinity"></i></button>
                                                            </div>
                                                        </div>
                                                        <div class="fv-row col-lg-3">
                                                            <label class="required fw-semibold fs-6 mb-2">
                                                                <svg class="svg-inline--fa fa-database fa-fw fa-sm text-muted mr-1"
                                                                    aria-hidden="true" focusable="false"
                                                                    data-prefix="fas" data-icon="database"
                                                                    role="img" xmlns="http://www.w3.org/2000/svg"
                                                                    viewBox="0 0 448 512" data-fa-i2svg="">
                                                                    <path fill="currentColor"
                                                                        d="M448 80v48c0 44.2-100.3 80-224 80S0 172.2 0 128V80C0 35.8 100.3 0 224 0S448 35.8 448 80zM393.2 214.7c20.8-7.4 39.9-16.9 54.8-28.6V288c0 44.2-100.3 80-224 80S0 332.2 0 288V186.1c14.9 11.8 34 21.2 54.8 28.6C99.7 230.7 159.5 240 224 240s124.3-9.3 169.2-25.3zM0 346.1c14.9 11.8 34 21.2 54.8 28.6C99.7 390.7 159.5 400 224 400s124.3-9.3 169.2-25.3c20.8-7.4 39.9-16.9 54.8-28.6V432c0 44.2-100.3 80-224 80S0 476.2 0 432V346.1z">
                                                                    </path>
                                                                </svg><span class="ps-2">Price</span></label>

                                                            <input type="text" name="product_price"
                                                                class="form-control form-control-solid mb-3 mb-lg-0"
                                                                placeholder="$" value="" />
                                                        </div>
                                                    </div>
                                                </div>
                                                {{-- Customization BOx --}}
                                                <div class="border-dashed border-1 p-3 rounded-2">
                                                    <div class="row">
                                                        <div class="fv-row col-lg-4">
                                                            <label
                                                                class="required fw-semibold fs-6 mb-2 d-flex align-items-center">
                                                                <div><svg
                                                                        class="svg-inline--fa fa-barcode fa-fw fa-sm text-muted mr-1"
                                                                        aria-hidden="true" focusable="false"
                                                                        data-prefix="fas" data-icon="barcode"
                                                                        role="img"
                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                        viewBox="0 0 512 512" data-fa-i2svg="">
                                                                        <path fill="currentColor"
                                                                            d="M24 32C10.7 32 0 42.7 0 56V456c0 13.3 10.7 24 24 24H40c13.3 0 24-10.7 24-24V56c0-13.3-10.7-24-24-24H24zm88 0c-8.8 0-16 7.2-16 16V464c0 8.8 7.2 16 16 16s16-7.2 16-16V48c0-8.8-7.2-16-16-16zm72 0c-13.3 0-24 10.7-24 24V456c0 13.3 10.7 24 24 24h16c13.3 0 24-10.7 24-24V56c0-13.3-10.7-24-24-24H184zm96 0c-13.3 0-24 10.7-24 24V456c0 13.3 10.7 24 24 24h16c13.3 0 24-10.7 24-24V56c0-13.3-10.7-24-24-24H280zM448 56V456c0 13.3 10.7 24 24 24h16c13.3 0 24-10.7 24-24V56c0-13.3-10.7-24-24-24H472c-13.3 0-24 10.7-24 24zm-64-8V464c0 8.8 7.2 16 16 16s16-7.2 16-16V48c0-8.8-7.2-16-16-16s-16 7.2-16 16z">
                                                                        </path>
                                                                    </svg></div>
                                                                <div class="pt-1 ps-2">Barcode Pattern</div>
                                                            </label>

                                                            <select class="form-select" data-control="select2"
                                                                data-placeholder="Select an option">
                                                                <option></option>
                                                                <option value="code-128">Code 128</option>
                                                                <option value="code-11">Code 11</option>
                                                                <option value="code-39">Code 39</option>
                                                                <option value="code-93">Code 93</option>
                                                                <option value="ean-93">EAN-13</option>
                                                            </select>
                                                        </div>
                                                        <div class="fv-row col-lg-4">
                                                            <label class="fw-semibold fs-6 mb-2">
                                                                <svg class="svg-inline--fa fa-paintbrush fa-fw fa-sm text-muted mr-1"
                                                                    aria-hidden="true" focusable="false"
                                                                    data-prefix="fas" data-icon="paintbrush"
                                                                    role="img" xmlns="http://www.w3.org/2000/svg"
                                                                    viewBox="0 0 576 512" data-fa-i2svg="">
                                                                    <path fill="currentColor"
                                                                        d="M339.3 367.1c27.3-3.9 51.9-19.4 67.2-42.9L568.2 74.1c12.6-19.5 9.4-45.3-7.6-61.2S517.7-4.4 499.1 9.6L262.4 187.2c-24 18-38.2 46.1-38.4 76.1L339.3 367.1zm-19.6 25.4l-116-104.4C143.9 290.3 96 339.6 96 400c0 3.9 .2 7.8 .6 11.6C98.4 429.1 86.4 448 68.8 448H64c-17.7 0-32 14.3-32 32s14.3 32 32 32H208c61.9 0 112-50.1 112-112c0-2.5-.1-5-.2-7.5z">
                                                                    </path>
                                                                </svg>
                                                                <span class="ps-2">Bars Color</span></label>

                                                            <input type="color" name="bars_color"
                                                                style="border-radius: 5px !important"
                                                                class="form-control form-control-solid mb-3 mb-lg-0 p-2 mt-1"
                                                                placeholder="56849845" value="" />
                                                        </div>
                                                        <div class="fv-row col-lg-4">
                                                            <label class="fw-semibold fs-6 mb-2">Per Page
                                                                <span data-bs-toggle="popover" data-bs-dismiss="true"
                                                                    title="Total Row = 9 ,Total Column = 4"
                                                                    data-bs-content="Per Page = 36 Barcode In A4 Page After Print">
                                                                    <a href="javascriptvoid:(0)"
                                                                        class="ps-2 border px-2 bg-light-danger"><i
                                                                            class="fas fa-info text-danger"></i></a>
                                                                </span>
                                                            </label>

                                                            <input type="text" name="quantity"
                                                                class="form-control form-control-solid mb-3 mb-lg-0"
                                                                placeholder="36 Barcode" value="" />
                                                        </div>
                                                    </div>
                                                </div>
                                                {{-- Size Box --}}
                                                <div class="border-dashed border-1 p-3 rounded-2 mt-2">
                                                    <div class="row">
                                                        <div class="fv-row col-lg-8">
                                                            <label
                                                                class="fw-semibold fs-6 mb-2 d-flex align-items-center">
                                                                <div>
                                                                    <svg class="svg-inline--fa fa-left-right fa-fw fa-sm text-muted mr-1"
                                                                        aria-hidden="true" focusable="false"
                                                                        data-prefix="fas" data-icon="left-right"
                                                                        role="img"
                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                        viewBox="0 0 512 512" data-fa-i2svg="">
                                                                        <path fill="currentColor"
                                                                            d="M504.3 273.6c4.9-4.5 7.7-10.9 7.7-17.6s-2.8-13-7.7-17.6l-112-104c-7-6.5-17.2-8.2-25.9-4.4s-14.4 12.5-14.4 22l0 56-192 0 0-56c0-9.5-5.7-18.2-14.4-22s-18.9-2.1-25.9 4.4l-112 104C2.8 243 0 249.3 0 256s2.8 13 7.7 17.6l112 104c7 6.5 17.2 8.2 25.9 4.4s14.4-12.5 14.4-22l0-56 192 0 0 56c0 9.5 5.7 18.2 14.4 22s18.9 2.1 25.9-4.4l112-104z">
                                                                        </path>
                                                                    </svg>
                                                                </div>
                                                                <div class="pt-1 ps-2"> Width scale</div>
                                                            </label>
                                                            <div class="mt-5">
                                                                <input type="range" class="form-range"
                                                                    id="customRange1" />
                                                            </div>
                                                        </div>
                                                        <div class="fv-row col-lg-4">
                                                            <label
                                                                class="fw-semibold fs-6 mb-2 d-flex align-items-center">
                                                                <div>
                                                                    <svg class="svg-inline--fa fa-up-down fa-fw fa-sm text-muted mr-1"
                                                                        aria-hidden="true" focusable="false"
                                                                        data-prefix="fas" data-icon="up-down"
                                                                        role="img"
                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                        viewBox="0 0 512 512" data-fa-i2svg="">
                                                                        <path fill="currentColor"
                                                                            d="M145.6 7.7C141 2.8 134.7 0 128 0s-13 2.8-17.6 7.7l-104 112c-6.5 7-8.2 17.2-4.4 25.9S14.5 160 24 160H80V352H24c-9.5 0-18.2 5.7-22 14.4s-2.1 18.9 4.4 25.9l104 112c4.5 4.9 10.9 7.7 17.6 7.7s13-2.8 17.6-7.7l104-112c6.5-7 8.2-17.2 4.4-25.9s-12.5-14.4-22-14.4H176V160h56c9.5 0 18.2-5.7 22-14.4s2.1-18.9-4.4-25.9l-104-112z">
                                                                        </path>
                                                                    </svg>
                                                                </div>
                                                                <div class="pt-1 ps-2"> Height scale</div>
                                                            </label>
                                                            <div class="input-group mb-3">
                                                                <input type="text"
                                                                    class="form-control form-control-solid mb-3 mb-lg-0"
                                                                    placeholder="Bars Height"
                                                                    aria-describedby="basic-addon2">
                                                                <span class="input-group-text"
                                                                    id="basic-addon2">PX</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                {{-- Form Action --}}
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <div class="d-flex justify-content-end">
                                                            <button id="kt_docs_formvalidation_text_submit"
                                                                type="submit" class="btn btn-primary mt-7">
                                                                <span class="indicator-label">
                                                                    Generate Barcode
                                                                </span>
                                                                <span class="indicator-progress">
                                                                    Please wait... <span
                                                                        class="spinner-border spinner-border-sm align-middle ms-2"></span>
                                                                </span>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col bg-white " id="second-column1">
                                <div>
                                    <div class="card">
                                        <div class="card-body p-2 py-8">
                                            <div class="d-flex justify-content-center aign-items-center">
                                                <img class="img-fluid" style="width: 100rem; max-height: 15rem;"
                                                    src="https://cdn-dfhjh.nitrocdn.com/BzQnABYFnLkAUVnIDRwDtFjmHEaLtdtL/assets/images/optimized/rev-ecb332d/www.gtin.info/wp-content/uploads/2015/02/barcode-13.png"
                                                    alt="">
                                            </div>
                                            <div class="d-flex justify-content-between mt-5">
                                                <a href="http://127.0.0.1:8000/admin/logout"
                                                    class="btn text-white w-100 me-2"
                                                    style="background-color: #7239e9; ">
                                                    <span class="btn-label"> Print
                                                    </span>
                                                </a>
                                                <a href="http://127.0.0.1:8000/admin/logout"
                                                    class="btn text-white w-100 ms-2"
                                                    style="background-color: #7239e9; ">
                                                    <span class="btn-label"> Download
                                                    </span>
                                                </a>
                                            </div>
                                            <div
                                                class="d-flex align-items-center rounded py-5 px-5 bg-light-danger mt-5 border-dashed border-info border-1">
                                                <i class="fas fa-info fs-2x text-danger me-5"></i>
                                                <div class="text-gray-700 fw-bold">
                                                    <small> Make sure to test out your configured barcode before using
                                                        it in
                                                        production.</small>
                                                </div>
                                            </div>
                                            <div class="fv-row mt-10">
                                                <label class=" fw-semibold fs-6 mb-2">
                                                    <span class="ps-2"> Embedded data</span>
                                                </label>

                                                <input type="text" name="product_price"
                                                    class="form-control form-control-solid mb-3 mb-lg-0"
                                                    placeholder="1" value="" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{-- Bulk Barcode Info Upload --}}
            <div class="create-bulk-barcode-show" id="create-bulk-barcode-form" style="display: none;">
                <div class="w-lg-75 w-100 mx-auto row">
                    <div class="col-lg-12">
                        <div class="row equal-height" id="equal-height-row">
                            <h2 class="text-center mt-10">Create Bulk Barcode</h2>
                            <div class="col-7 bg-white" id="first-column">
                                <div class="">
                                    <div class="card">
                                        <div class="card-body">
                                            <form id="kt_docs_formvalidation_email" class="form" action="#"
                                                autocomplete="off" method="post">
                                                @csrf
                                                {{-- Forms Input --}}
                                                <div class="border-dashed border-1 p-3 rounded-2 mb-2">
                                                    <div class="row">
                                                        <div class="fv-row col-lg-8">
                                                            <label class="required fw-semibold fs-6 mb-2">
                                                                <svg class="svg-inline--fa fa-signature fa-fw fa-sm text-muted mr-1"
                                                                    aria-hidden="true" focusable="false"
                                                                    data-prefix="fas" data-icon="signature"
                                                                    role="img" xmlns="http://www.w3.org/2000/svg"
                                                                    viewBox="0 0 640 512" data-fa-i2svg="">
                                                                    <path fill="currentColor"
                                                                        d="M192 128c0-17.7 14.3-32 32-32s32 14.3 32 32v7.8c0 27.7-2.4 55.3-7.1 82.5l-84.4 25.3c-40.6 12.2-68.4 49.6-68.4 92v71.9c0 40 32.5 72.5 72.5 72.5c26 0 50-13.9 62.9-36.5l13.9-24.3c26.8-47 46.5-97.7 58.4-150.5l94.4-28.3-12.5 37.5c-3.3 9.8-1.6 20.5 4.4 28.8s15.7 13.3 26 13.3H544c17.7 0 32-14.3 32-32s-14.3-32-32-32H460.4l18-53.9c3.8-11.3 .9-23.8-7.4-32.4s-20.7-11.8-32.2-8.4L316.4 198.1c2.4-20.7 3.6-41.4 3.6-62.3V128c0-53-43-96-96-96s-96 43-96 96v32c0 17.7 14.3 32 32 32s32-14.3 32-32V128zm-9.2 177l49-14.7c-10.4 33.8-24.5 66.4-42.1 97.2l-13.9 24.3c-1.5 2.6-4.3 4.3-7.4 4.3c-4.7 0-8.5-3.8-8.5-8.5V335.6c0-14.1 9.3-26.6 22.8-30.7zM24 368c-13.3 0-24 10.7-24 24s10.7 24 24 24H64.3c-.2-2.8-.3-5.6-.3-8.5V368H24zm592 48c13.3 0 24-10.7 24-24s-10.7-24-24-24H305.9c-6.7 16.3-14.2 32.3-22.3 48H616z">
                                                                    </path>
                                                                </svg>
                                                                Upload CSV/XLSX File
                                                            </label>

                                                            <input type="file" name="bulk_file" id="fileInput"
                                                                accept=".csv, .xlsx"
                                                                class="form-control form-control-solid mb-3 mb-lg-0"
                                                                placeholder="3L Fresh Water" value="" />
                                                            <small>Only CSV and XLSX files allowed. Maximum size: 10
                                                                MB.</small>
                                                        </div>

                                                        <div class="fv-row col-lg-4">
                                                            <label class="required fw-semibold fs-6 mb-2">
                                                                <svg class="svg-inline--fa fa-signature fa-fw fa-sm text-muted mr-1"
                                                                    aria-hidden="true" focusable="false"
                                                                    data-prefix="fas" data-icon="signature"
                                                                    role="img" xmlns="http://www.w3.org/2000/svg"
                                                                    viewBox="0 0 640 512" data-fa-i2svg="">
                                                                    <path fill="currentColor"
                                                                        d="M192 128c0-17.7 14.3-32 32-32s32 14.3 32 32v7.8c0 27.7-2.4 55.3-7.1 82.5l-84.4 25.3c-40.6 12.2-68.4 49.6-68.4 92v71.9c0 40 32.5 72.5 72.5 72.5c26 0 50-13.9 62.9-36.5l13.9-24.3c26.8-47 46.5-97.7 58.4-150.5l94.4-28.3-12.5 37.5c-3.3 9.8-1.6 20.5 4.4 28.8s15.7 13.3 26 13.3H544c17.7 0 32-14.3 32-32s-14.3-32-32-32H460.4l18-53.9c3.8-11.3 .9-23.8-7.4-32.4s-20.7-11.8-32.2-8.4L316.4 198.1c2.4-20.7 3.6-41.4 3.6-62.3V128c0-53-43-96-96-96s-96 43-96 96v32c0 17.7 14.3 32 32 32s32-14.3 32-32V128zm-9.2 177l49-14.7c-10.4 33.8-24.5 66.4-42.1 97.2l-13.9 24.3c-1.5 2.6-4.3 4.3-7.4 4.3c-4.7 0-8.5-3.8-8.5-8.5V335.6c0-14.1 9.3-26.6 22.8-30.7zM24 368c-13.3 0-24 10.7-24 24s10.7 24 24 24H64.3c-.2-2.8-.3-5.6-.3-8.5V368H24zm592 48c13.3 0 24-10.7 24-24s-10.7-24-24-24H305.9c-6.7 16.3-14.2 32.3-22.3 48H616z">
                                                                    </path>
                                                                </svg>
                                                                Download XLSX For Demo
                                                            </label>
                                                            <br>
                                                            <button id="downloadXlsxBtn"
                                                                class="btn btn-primary w-100 rounded-0">Download
                                                                Now</button>
                                                        </div>

                                                        <div class="fv-row col-lg-12">
                                                            <label
                                                                class="required fw-semibold fs-6 mb-2 d-flex align-items-center">
                                                                <div><svg
                                                                        class="svg-inline--fa fa-barcode fa-fw fa-sm text-muted mr-1"
                                                                        aria-hidden="true" focusable="false"
                                                                        data-prefix="fas" data-icon="barcode"
                                                                        role="img"
                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                        viewBox="0 0 512 512" data-fa-i2svg="">
                                                                        <path fill="currentColor"
                                                                            d="M24 32C10.7 32 0 42.7 0 56V456c0 13.3 10.7 24 24 24H40c13.3 0 24-10.7 24-24V56c0-13.3-10.7-24-24-24H24zm88 0c-8.8 0-16 7.2-16 16V464c0 8.8 7.2 16 16 16s16-7.2 16-16V48c0-8.8-7.2-16-16-16zm72 0c-13.3 0-24 10.7-24 24V456c0 13.3 10.7 24 24 24h16c13.3 0 24-10.7 24-24V56c0-13.3-10.7-24-24-24H184zm96 0c-13.3 0-24 10.7-24 24V456c0 13.3 10.7 24 24 24h16c13.3 0 24-10.7 24-24V56c0-13.3-10.7-24-24-24H280zM448 56V456c0 13.3 10.7 24 24 24h16c13.3 0 24-10.7 24-24V56c0-13.3-10.7-24-24-24H472c-13.3 0-24 10.7-24 24zm-64-8V464c0 8.8 7.2 16 16 16s16-7.2 16-16V48c0-8.8-7.2-16-16-16s-16 7.2-16 16z">
                                                                        </path>
                                                                    </svg></div>
                                                                <div class="pt-1 ps-2">Barcode Pattern</div>
                                                            </label>

                                                            {{-- <select class="form-select" data-control="select2"
                                                            data-placeholder="Select an option" id="barcodeSelect">
                                                            <option></option>
                                                            <option value="code-128">Code 128</option>
                                                            <option value="code-11">Code 11</option>
                                                            <option value="code-39">Code 39</option>
                                                            <option value="code-93">Code 93</option>
                                                            <option value="ean-13">EAN-13</option>
                                                        </select> --}}
                                                            <select class="form-select" data-control="select2"
                                                                data-placeholder="Select an option"
                                                                id="barcodeSelect">
                                                                <option></option>
                                                                <option value="code-128">Code 128</option>
                                                                <option value="code-11">Code 11</option>
                                                            </select>
                                                        </div>

                                                        <div class="col-lg-12">
                                                            <div class="card xlsx-preview">
                                                                <div class="card-body ps-0">
                                                                    <h5>File Preview</h5>
                                                                    {{-- By Default Text --}}
                                                                    <p id="noFileText">No Chosen File Found, Please
                                                                        Select
                                                                        CSV
                                                                        or XLSX File To See The Preview</p>
                                                                    {{-- If File Selected Then Show This --}}
                                                                    <div id="filePreviewDiv" class="border p-3"
                                                                        style="display: none;">
                                                                        <table class="table table-bordered"
                                                                            id="filePreviewTable">
                                                                            <thead>
                                                                                <tr id="filePreviewHeader"></tr>
                                                                            </thead>
                                                                            <tbody id="filePreviewBody"></tbody>
                                                                        </table>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                {{-- Form Action --}}
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <div class="d-flex justify-content-end">
                                                            <button id="submitBtn" type="submit" disabled
                                                                class="btn btn-primary mt-7">
                                                                <span class="indicator-label">
                                                                    Generate Barcode
                                                                </span>
                                                                <span class="indicator-progress">
                                                                    Please wait... <span
                                                                        class="spinner-border spinner-border-sm align-middle ms-2"></span>
                                                                </span>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col bg-white " id="second-column">
                                <div>
                                    <div class="card">
                                        <div class="card-body p-2 py-8">
                                            <div class="d-flex justify-content-center align-items-center">
                                                <!-- code-128 -->
                                                <img id="code-128-img" class="img-fluid barcode-img"
                                                    style="max-width: 100%; max-height: 15rem;"
                                                    src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSVoVNLEE2WzK5i1EXCJXjxmi1-gk1b9MeHpxipJaJp1bajAfwpUMG-CDnutx203HYjxXw&usqp=CAU"
                                                    alt="Code 128">
                                            </div>
                                            <div class="d-flex justify-content-between mt-5">
                                                <a href="http://127.0.0.1:8000/admin/logout"
                                                    class="btn text-white w-100 me-2"
                                                    style="background-color: #7239e9; ">
                                                    <span class="btn-label"> Print
                                                    </span>
                                                </a>
                                                <a href="http://127.0.0.1:8000/admin/logout"
                                                    class="btn text-white w-100 ms-2"
                                                    style="background-color: #7239e9; ">
                                                    <span class="btn-label"> Download
                                                    </span>
                                                </a>
                                            </div>
                                            <div
                                                class="d-flex align-items-center rounded py-5 px-5 bg-light-danger mt-5 border-dashed border-info border-1">
                                                <i class="fas fa-info fs-2x text-danger me-5"></i>
                                                <div class="text-gray-700 fw-bold">
                                                    <small> Make sure to test out your configured barcode before using
                                                        it in
                                                        production.</small>
                                                </div>
                                            </div>
                                            <div class="fv-row mt-10">
                                                <label class=" fw-semibold fs-6 mb-2">
                                                    <span class="ps-2"> Embedded data</span>
                                                </label>

                                                <input type="text" name="product_price"
                                                    class="form-control form-control-solid mb-3 mb-lg-0"
                                                    placeholder="1" value="" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{--  --}}
            {{-- Toggler form End --}}
        </div>
    </div>

    @push('scripts')
        <script src="https://cdnjs.cloudflare.com/ajax/libs/xlsx/0.17.4/xlsx.full.min.js"></script>
        {{-- Bar Code Patter Select --}}
        <script>
            document.getElementById('fileInput').addEventListener('change', function(event) {
                const file = event.target.files[0];
                if (file) {
                    const fileType = file.type;
                    const reader = new FileReader();
                    reader.onload = function(e) {
                        const contents = e.target.result;

                        if (fileType === 'text/csv') {
                            displayCsvPreview(contents);
                        } else if (fileType ===
                            'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet') {
                            const workbook = XLSX.read(contents, {
                                type: 'binary'
                            });
                            const sheetName = workbook.SheetNames[0];
                            const worksheet = workbook.Sheets[sheetName];
                            const csvContent = XLSX.utils.sheet_to_csv(worksheet);
                            displayCsvPreview(csvContent);
                        } else {
                            alert('Please select a valid CSV or XLSX file.');
                        }
                    };

                    if (fileType === 'text/csv') {
                        reader.readAsText(file);
                    } else if (fileType === 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet') {
                        reader.readAsBinaryString(file);
                    } else {
                        alert('Please select a valid CSV or XLSX file.');
                    }
                }
            });

            function displayCsvPreview(contents) {
                const rows = contents.split('\n').map(row => row.split(','));
                const header = rows[0];
                const body = rows.slice(1);

                const headerHtml = header.map(col => `<th>${col}</th>`).join('');
                const bodyHtml = body.map(row => `<tr>${row.map(col => `<td>${col}</td>`).join('')}</tr>`).join('');

                document.getElementById('filePreviewHeader').innerHTML = headerHtml;
                document.getElementById('filePreviewBody').innerHTML = bodyHtml;

                document.getElementById('noFileText').style.display = 'none';
                document.getElementById('filePreviewDiv').style.display = 'block';
            }

            document.addEventListener('DOMContentLoaded', function() {
                const fileInput = document.getElementById('fileInput');
                const submitButton = document.getElementById('submitBtn');

                fileInput.addEventListener('change', function() {
                    if (fileInput.files.length > 0) {
                        submitButton.disabled = false; // Enable the submit button
                    } else {
                        submitButton.disabled = true; // Disable the submit button
                    }
                });

                // Initially disable the submit button
                submitButton.disabled = true;
            });
        </script>
        {{-- With Out XLXS File Select Button Disable --}}
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                const fileInput = document.getElementById('csvFileInput');
                const submitBtn = document.getElementById('submitBtn');

                fileInput.addEventListener('change', function() {
                    const file = fileInput.files[0];

                    if (file && file.name.endsWith('.xlsx')) {
                        submitBtn.disabled = false;
                    } else {
                        submitBtn.disabled = true;
                    }
                });
            });
        </script>
        {{-- Download XLSX Demo File --}}
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                const downloadXlsxBtn = document.getElementById('downloadXlsxBtn');

                downloadXlsxBtn.addEventListener('click', function() {
                    // Assuming the XLSX file URL is stored in a variable or hardcoded
                    const xlsxUrl = 'path_to_your_xlsx_file.xlsx';

                    // Create a temporary anchor element to initiate the download
                    const downloadAnchor = document.createElement('a');
                    downloadAnchor.href = xlsxUrl;
                    downloadAnchor.download = 'demo.xlsx'; // Specify the filename you want users to download
                    downloadAnchor.click();
                });
            });
        </script>
        {{-- Show No XLSX File Selected --}}
        {{-- Fixed Column Height --}}
        <script>
            function setEqualHeight() {
                const firstColumn = document.getElementById('first-column1');
                const secondColumn = document.getElementById('second-column1');
                const maxHeight = Math.max(firstColumn.clientHeight, secondColumn.);
                firstColumn.style.height = maxHeight + 'px';
                secondColumn.style.height = maxHeight + 'px';
            }

            window.addEventListener('load', setEqualHeight);
            window.addEventListener('resize', setEqualHeight);
        </script>
        {{-- First Form Validation --}}
        <script>
            // Define form element
            const form = document.getElementById('kt_docs_formvalidation_text');

            // Init form validation rules. For more info check the FormValidation plugin's official documentation:https://formvalidation.io/
            var validator = FormValidation.formValidation(
                form, {
                    fields: {
                        'product_name': {
                            validators: {
                                notEmpty: {
                                    message: 'Product Name Is Mendatory'
                                }
                            }
                        },
                        'product_price': {
                            validators: {
                                notEmpty: {
                                    message: 'Product Price Is Mendatory'
                                }
                            }
                        },
                        'product_price': {
                            validators: {
                                notEmpty: {
                                    message: 'Product Price Is Mendatory'
                                }
                            }
                        },
                    },

                    plugins: {
                        trigger: new FormValidation.plugins.Trigger(),
                        bootstrap: new FormValidation.plugins.Bootstrap5({
                            rowSelector: '.fv-row',
                            eleInvalidClass: '',
                            eleValidClass: ''
                        })
                    }
                }
            );

            // Submit button handler
            const submitButton = document.getElementById('kt_docs_formvalidation_text_submit');
            submitButton.addEventListener('click', function(e) {
                // Prevent default button action
                e.preventDefault();

                // Validate form before submit
                if (validator) {
                    validator.validate().then(function(status) {
                        console.log('validated!');

                        if (status == 'Valid') {
                            // Show loading indication
                            submitButton.setAttribute('data-kt-indicator', 'on');

                            // Disable button to avoid multiple click
                            submitButton.disabled = true;

                            // Simulate form submission. For more info check the plugin's official documentation: https://sweetalert2.github.io/
                            setTimeout(function() {
                                // Remove loading indication
                                submitButton.removeAttribute('data-kt-indicator');

                                // Enable button
                                submitButton.disabled = false;

                                // Show popup confirmation
                                Swal.fire({
                                    text: "Form has been successfully submitted!",
                                    icon: "success",
                                    buttonsStyling: false,
                                    confirmButtonText: "Ok, got it!",
                                    customClass: {
                                        confirmButton: "btn btn-primary"
                                    }
                                });

                                //form.submit(); // Submit form
                            }, 2000);
                        }
                    });
                }
            });
        </script>
        {{-- Radio Button Select Toggler Form --}}
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                const createBarcodeForm = document.getElementById('create-barcode-form');
                const createBulkBarcodeForm = document.getElementById('create-bulk-barcode-form');
                const barcodeReaderForm = document.getElementById('barcode-reader-form');

                // Function to handle form visibility based on radio button selection
                function handleFormVisibility() {
                    const option1 = document.getElementById('kt_radio_buttons_option_1');
                    const option2 = document.getElementById('kt_radio_buttons_option_2');
                    const option3 = document.getElementById('kt_radio_buttons_option_3');

                    if (option1.checked) {
                        createBarcodeForm.style.display = 'block';
                        createBulkBarcodeForm.style.display = 'none';
                        barcodeReaderForm.style.display = 'none';
                    } else if (option2.checked) {
                        createBarcodeForm.style.display = 'none';
                        createBulkBarcodeForm.style.display = 'block';
                        barcodeReaderForm.style.display = 'none';
                    } else if (option3.checked) {
                        createBarcodeForm.style.display = 'none';
                        createBulkBarcodeForm.style.display = 'none';
                        barcodeReaderForm.style.display = 'block';
                    }
                }

                // Event listeners for radio button changes
                document.getElementById('kt_radio_buttons_option_1').addEventListener('change', handleFormVisibility);
                document.getElementById('kt_radio_buttons_option_2').addEventListener('change', handleFormVisibility);
                document.getElementById('kt_radio_buttons_option_3').addEventListener('change', handleFormVisibility);

                // Initialize the form display based on the default selected radio button
                handleFormVisibility();
            });
        </script>
        {{-- Page Load --}}
        <script>
            document.addEventListener("DOMContentLoaded", function() {
                const button = document.getElementById("hideOneClick");
                const buttonDiv = document.getElementById("buttonDiv");
                const contentDiv = document.getElementById("contentDiv");

                button.addEventListener("click", function() {
                    buttonDiv.classList.remove('fade-in');
                    buttonDiv.classList.add('fade-out');

                    setTimeout(() => {
                        buttonDiv.classList.add('d-none');
                        contentDiv.classList.remove('d-none');
                        contentDiv.classList.remove('fade-out');
                        contentDiv.classList.add('fade-in');
                    }, 500); // Match this time with the transition duration in CSS
                });
            });
        </script>
        {{-- Random Id Generate --}}
        <script>
            function generateRandomSerial() {
                // Generate a random 9-digit number
                const randomSerial = Math.floor(Math.random() * 900000000) + 100000000;
                // Set the generated number as the value of the input field
                document.getElementById('product-id-input').value = randomSerial;
            }

            document.getElementById('button-addon2').addEventListener('click', function() {
                generateRandomSerial();
            });

            // Generate a random serial number on page load
            window.addEventListener('load', function() {
                generateRandomSerial();
            });
        </script>
    @endpush

</x-admin-app-layout>

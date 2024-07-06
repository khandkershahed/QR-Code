<div class="col-lg-7 bg-white">
    <div class="card">
        <div class="card-body">
            <form id="kt_docs_formvalidation_email" class="form" action="#" autocomplete="off" method="post">
                @csrf
                {{-- Forms Input --}}
                <div class="border-dashed border-1 p-3 rounded-2 mb-2">
                    <div class="row">
                        <div class="fv-row col-lg-8">
                            <label class="required fw-semibold fs-6 mb-2">
                                <svg class="svg-inline--fa fa-signature fa-fw fa-sm text-muted mr-1" aria-hidden="true"
                                    focusable="false" data-prefix="fas" data-icon="signature" role="img"
                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512" data-fa-i2svg="">
                                    <path fill="currentColor"
                                        d="M192 128c0-17.7 14.3-32 32-32s32 14.3 32 32v7.8c0 27.7-2.4 55.3-7.1 82.5l-84.4 25.3c-40.6 12.2-68.4 49.6-68.4 92v71.9c0 40 32.5 72.5 72.5 72.5c26 0 50-13.9 62.9-36.5l13.9-24.3c26.8-47 46.5-97.7 58.4-150.5l94.4-28.3-12.5 37.5c-3.3 9.8-1.6 20.5 4.4 28.8s15.7 13.3 26 13.3H544c17.7 0 32-14.3 32-32s-14.3-32-32-32H460.4l18-53.9c3.8-11.3 .9-23.8-7.4-32.4s-20.7-11.8-32.2-8.4L316.4 198.1c2.4-20.7 3.6-41.4 3.6-62.3V128c0-53-43-96-96-96s-96 43-96 96v32c0 17.7 14.3 32 32 32s32-14.3 32-32V128zm-9.2 177l49-14.7c-10.4 33.8-24.5 66.4-42.1 97.2l-13.9 24.3c-1.5 2.6-4.3 4.3-7.4 4.3c-4.7 0-8.5-3.8-8.5-8.5V335.6c0-14.1 9.3-26.6 22.8-30.7zM24 368c-13.3 0-24 10.7-24 24s10.7 24 24 24H64.3c-.2-2.8-.3-5.6-.3-8.5V368H24zm592 48c13.3 0 24-10.7 24-24s-10.7-24-24-24H305.9c-6.7 16.3-14.2 32.3-22.3 48H616z">
                                    </path>
                                </svg>
                                Upload CSV/XLSX File
                            </label>

                            <input type="file" name="bulk_file" id="fileInput" accept=".csv, .xlsx"
                                class="form-control form-control-solid mb-3 mb-lg-0" placeholder="3L Fresh Water"
                                value="" />
                            <small>Only CSV and XLSX files allowed. Maximum size: 10
                                MB.</small>
                        </div>

                        <div class="fv-row col-lg-4">
                            <label class="required fw-semibold fs-6 mb-2">
                                <svg class="svg-inline--fa fa-signature fa-fw fa-sm text-muted mr-1" aria-hidden="true"
                                    focusable="false" data-prefix="fas" data-icon="signature" role="img"
                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512" data-fa-i2svg="">
                                    <path fill="currentColor"
                                        d="M192 128c0-17.7 14.3-32 32-32s32 14.3 32 32v7.8c0 27.7-2.4 55.3-7.1 82.5l-84.4 25.3c-40.6 12.2-68.4 49.6-68.4 92v71.9c0 40 32.5 72.5 72.5 72.5c26 0 50-13.9 62.9-36.5l13.9-24.3c26.8-47 46.5-97.7 58.4-150.5l94.4-28.3-12.5 37.5c-3.3 9.8-1.6 20.5 4.4 28.8s15.7 13.3 26 13.3H544c17.7 0 32-14.3 32-32s-14.3-32-32-32H460.4l18-53.9c3.8-11.3 .9-23.8-7.4-32.4s-20.7-11.8-32.2-8.4L316.4 198.1c2.4-20.7 3.6-41.4 3.6-62.3V128c0-53-43-96-96-96s-96 43-96 96v32c0 17.7 14.3 32 32 32s32-14.3 32-32V128zm-9.2 177l49-14.7c-10.4 33.8-24.5 66.4-42.1 97.2l-13.9 24.3c-1.5 2.6-4.3 4.3-7.4 4.3c-4.7 0-8.5-3.8-8.5-8.5V335.6c0-14.1 9.3-26.6 22.8-30.7zM24 368c-13.3 0-24 10.7-24 24s10.7 24 24 24H64.3c-.2-2.8-.3-5.6-.3-8.5V368H24zm592 48c13.3 0 24-10.7 24-24s-10.7-24-24-24H305.9c-6.7 16.3-14.2 32.3-22.3 48H616z">
                                    </path>
                                </svg>
                                Download XLSX For Demo
                            </label>
                            <br>
                            <button id="downloadXlsxBtn" class="btn btn-primary w-100 rounded-0">Download
                                Now</button>
                        </div>

                        <div class="fv-row col-lg-12">
                            <label class="required fw-semibold fs-6 mb-2 d-flex align-items-center">
                                <div><svg class="svg-inline--fa fa-barcode fa-fw fa-sm text-muted mr-1"
                                        aria-hidden="true" focusable="false" data-prefix="fas" data-icon="barcode"
                                        role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"
                                        data-fa-i2svg="">
                                        <path fill="currentColor"
                                            d="M24 32C10.7 32 0 42.7 0 56V456c0 13.3 10.7 24 24 24H40c13.3 0 24-10.7 24-24V56c0-13.3-10.7-24-24-24H24zm88 0c-8.8 0-16 7.2-16 16V464c0 8.8 7.2 16 16 16s16-7.2 16-16V48c0-8.8-7.2-16-16-16zm72 0c-13.3 0-24 10.7-24 24V456c0 13.3 10.7 24 24 24h16c13.3 0 24-10.7 24-24V56c0-13.3-10.7-24-24-24H184zm96 0c-13.3 0-24 10.7-24 24V456c0 13.3 10.7 24 24 24h16c13.3 0 24-10.7 24-24V56c0-13.3-10.7-24-24-24H280zM448 56V456c0 13.3 10.7 24 24 24h16c13.3 0 24-10.7 24-24V56c0-13.3-10.7-24-24-24H472c-13.3 0-24 10.7-24 24zm-64-8V464c0 8.8 7.2 16 16 16s16-7.2 16-16V48c0-8.8-7.2-16-16-16s-16 7.2-16 16z">
                                        </path>
                                    </svg></div>
                                <div class="pt-1 ps-2">Barcode Pattern</div>
                            </label>


                            <select class="form-select" data-control="select2" data-placeholder="Select an option"
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
                                    <div id="filePreviewDiv" class="border p-3" style="display: none;">
                                        <table class="table table-bordered" id="filePreviewTable">
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
                            <button id="submitBtn" type="submit" disabled class="btn btn-primary mt-15">
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
<div class="col-lg-5 bg-white ">
    <div class="card">
        <div class="card-body p-2 py-8">
            <div class="d-flex justify-content-center align-items-center">
                <!-- code-128 -->
                <img id="code-128-img" class="img-fluid barcode-img" style="max-width: 100%; max-height: 15rem;"
                    src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSVoVNLEE2WzK5i1EXCJXjxmi1-gk1b9MeHpxipJaJp1bajAfwpUMG-CDnutx203HYjxXw&usqp=CAU"
                    alt="Code 128">
            </div>
            <div class="d-flex justify-content-between mt-5">
                <a href="http://127.0.0.1:8000/admin/logout" class="btn text-white w-100 me-2"
                    style="background-color: #7239e9; ">
                    <span class="btn-label"> Print
                    </span>
                </a>
                <a href="http://127.0.0.1:8000/admin/logout" class="btn text-white w-100 ms-2"
                    style="background-color: #7239e9; ">
                    <span class="btn-label"> Download
                    </span>
                </a>
            </div>
            <div
                class="d-flex align-items-center rounded py-5 px-5 bg-light-danger mt-8 border-dashed border-info border-1">
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

                <input type="text" name="product_price" class="form-control form-control-solid mb-3 mb-lg-0"
                    placeholder="1" value="" />
            </div>
        </div>
    </div>
</div>

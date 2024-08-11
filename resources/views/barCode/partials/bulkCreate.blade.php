<div class="col-lg-7 bg-white">
    <div class="card">
        <div class="card-body">
            @if (strpos(Route::current()->getName(), 'user.') === 0)
                <form id="kt_docs_formvalidation_text" class="form bar_code_create_form"
                    action="{{ route('user.bulk-barcode.store') }}" autocomplete="off" method="post"
                    enctype="multipart/form-data">
                @else
                    <form id="kt_docs_formvalidation_text" class="form bar_code_create_form"
                        action="{{ route('admin.bulk-barcode.store') }}" autocomplete="off" method="post"
                        enctype="multipart/form-data">
            @endif
            @csrf
            {{-- Forms Input --}}
            <div class="border-dashed border-1 p-3 rounded-2 mb-2">
                <div class="row">
                    <div class="fv-row col-lg-8 mb-7">
                        <label class="required fw-semibold fs-6 mb-2">
                            Upload CSV/XLSX File
                        </label>

                        <input type="file" name="bulk_file" id="fileInput" accept=".csv, .xlsx"
                            class="form-control form-control-solid mb-3 mb-lg-0" placeholder="3L Fresh Water"
                            value="" />
                        <small>Only CSV and XLSX files allowed. Maximum size: 10
                            MB.</small>
                    </div>

                    <div class="fv-row col-lg-4 mb-7">
                        <label class="required fw-semibold fs-6 mb-2">
                            Download XLSX For Demo
                        </label>
                        <br>
                        <a href="{{ asset('frontend/images/bulk_bacode_demo.xlsx') }}" download
                            class="btn btn-primary w-100 rounded-0">Download
                            Now</a>
                    </div>

                    <div class="fv-row col-lg-5 mb-7">
                        <label class="required fw-semibold fs-6 mb-2 d-flex align-items-center">
                            <div class="pt-1 ps-2">Barcode Pattern</div>
                        </label>

                        <select name="barcode_pattern" class="form-select mb-3" data-control="select2"
                            data-placeholder="Select an option">
                            <option></option>
                            <option value="C39" @selected(old('barcode_pattern' == 'C39'))>C39</option>
                            {{-- <option value="C39+" @selected(old('barcode_pattern' == 'C39+'))>C39+</option>
                                <option value="C39E" @selected(old('barcode_pattern' == 'C39E'))>C39E</option>
                                <option value="C39E+" @selected(old('barcode_pattern' == 'C39E+'))>C39E+</option>
                                <option value="C93" @selected(old('barcode_pattern' == 'C93'))>C93</option>
                                <option value="S25" @selected(old('barcode_pattern' == 'S25'))>S25</option>
                                <option value="S25+" @selected(old('barcode_pattern' == 'S25+'))>S25+</option>
                                <option value="I25" @selected(old('barcode_pattern' == 'I25'))>I25</option>
                                <option value="I25+" @selected(old('barcode_pattern' == 'I25+'))>I25+</option> --}}
                            <option value="C128" @selected(old('barcode_pattern' == 'C128'))>C128</option>
                            <option value="C128A" @selected(old('barcode_pattern' == 'C128A'))>C128A</option>
                            <option value="C128B" @selected(old('barcode_pattern' == 'C128B'))>C128B</option>
                            <option value="C128C" @selected(old('barcode_pattern' == 'C128C'))>C128C</option>
                            {{-- <option value="GS1-128" @selected(old('barcode_pattern' == 'GS1-128'))>GS1-128</option> --}}
                            {{-- <option value="EAN2" @selected(old('barcode_pattern' == 'EAN2'))>EAN2</option>
                                <option value="EAN5" @selected(old('barcode_pattern' == 'EAN5'))>EAN5</option>
                                <option value="EAN8" @selected(old('barcode_pattern' == 'EAN8'))>EAN8</option>
                                <option value="EAN13" @selected(old('barcode_pattern' == 'EAN13'))>EAN13</option> --}}
                            {{-- <option value="UPCA" @selected(old('barcode_pattern' == 'UPCA'))>UPCA</option> --}}
                            {{-- <option value="UPCE" @selected(old('barcode_pattern' == 'UPCE'))>UPCE</option> --}}
                            {{-- <option value="MSI" @selected(old('barcode_pattern' == 'MSI'))>MSI</option> --}}
                            {{-- <option value="MSI+" @selected(old('barcode_pattern' == 'MSI+'))>MSI+</option> --}}
                            {{-- <option value="POSTNET" @selected(old('barcode_pattern' == 'POSTNET'))>POSTNET</option> --}}
                            {{-- <option value="PLANET" @selected(old('barcode_pattern' == 'PLANET'))>PLANET</option> --}}
                            {{-- <option value="RMS4CC" @selected(old('barcode_pattern' == 'RMS4CC'))>RMS4CC</option> --}}
                            {{-- <option value="KIX" @selected(old('barcode_pattern' == 'KIX'))>KIX</option> --}}
                            {{-- <option value="IMB" @selected(old('barcode_pattern' == 'IMB'))>IMB</option> --}}
                            {{-- <option value="CODABAR" @selected(old('barcode_pattern' == 'CODABAR'))>CODABAR</option> --}}
                            {{-- <option value="CODE11" @selected(old('barcode_pattern' == 'CODE11'))>CODE11</option> --}}
                            <option value="PHARMA" @selected(old('barcode_pattern' == 'PHARMA'))>PHARMA</option>
                            <option value="PHARMA2T" @selected(old('barcode_pattern' == 'PHARMA2T'))>PHARMA2T</option>
                        </select>
                    </div>
                    <div class="fv-row col-lg-3">
                        <label class="fw-semibold fs-6 mb-2">
                            <svg class="svg-inline--fa fa-paintbrush fa-fw fa-sm text-muted mr-1" aria-hidden="true"
                                focusable="false" data-prefix="fas" data-icon="paintbrush" role="img"
                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" data-fa-i2svg="">
                                <path fill="currentColor"
                                    d="M339.3 367.1c27.3-3.9 51.9-19.4 67.2-42.9L568.2 74.1c12.6-19.5 9.4-45.3-7.6-61.2S517.7-4.4 499.1 9.6L262.4 187.2c-24 18-38.2 46.1-38.4 76.1L339.3 367.1zm-19.6 25.4l-116-104.4C143.9 290.3 96 339.6 96 400c0 3.9 .2 7.8 .6 11.6C98.4 429.1 86.4 448 68.8 448H64c-17.7 0-32 14.3-32 32s14.3 32 32 32H208c61.9 0 112-50.1 112-112c0-2.5-.1-5-.2-7.5z">
                                </path>
                            </svg>
                            <span class="ps-2">Bars Color</span></label>

                        <input type="color" name="barcode_color" style="border-radius: 5px !important"
                            class="form-control form-control-solid mb-3 mb-lg-0 p-2 mt-1" placeholder="56849845"
                            value="{{ old('barcode_color') }}" />
                    </div>
                    <div class="fv-row col-lg-4">
                        <label class="fw-semibold fs-6 mb-2 d-flex align-items-center">
                            <div>
                                <svg class="svg-inline--fa fa-left-right fa-fw fa-sm text-muted mr-1" aria-hidden="true"
                                    focusable="false" data-prefix="fas" data-icon="left-right" role="img"
                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="">
                                    <path fill="currentColor"
                                        d="M504.3 273.6c4.9-4.5 7.7-10.9 7.7-17.6s-2.8-13-7.7-17.6l-112-104c-7-6.5-17.2-8.2-25.9-4.4s-14.4 12.5-14.4 22l0 56-192 0 0-56c0-9.5-5.7-18.2-14.4-22s-18.9-2.1-25.9 4.4l-112 104C2.8 243 0 249.3 0 256s2.8 13 7.7 17.6l112 104c7 6.5 17.2 8.2 25.9 4.4s14.4-12.5 14.4-22l0-56 192 0 0 56c0 9.5 5.7 18.2 14.4 22s18.9 2.1 25.9-4.4l112-104z">
                                    </path>
                                </svg>
                            </div>
                            <div class="pt-1 ps-2"> Width Scale</div>
                        </label>
                        <div class="mt-5">
                            <input type="range" class="form-range w-100" id="customRange1" name="barcode_width"
                                min="0.5" max="3" step="0.2" value="2">
                        </div>
                    </div>
                    {{-- <div class="col-lg-12">
                            <div class="card xlsx-preview">
                                <div class="card-body ps-0">
                                    <h5>File Preview</h5>
                                    <p id="noFileText">No Chosen File Found, Please
                                        Select
                                        CSV
                                        or XLSX File To See The Preview</p>
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
                        </div> --}}
                </div>
            </div>
            {{-- Form Action --}}
            <div class="row">
                <div class="col-lg-12">
                    <div class="d-flex justify-content-end">
                        <button type="submit" class="btn btn-primary mt-15">Generate Barcode</button>
                        {{-- <button id="submitBtn" type="submit" disabled class="btn btn-primary mt-15">
                                <span class="indicator-label">
                                    Generate Barcode
                                </span>
                                <span class="indicator-progress">
                                    Please wait... <span
                                        class="spinner-border spinner-border-sm align-middle ms-2"></span>
                                </span>
                            </button> --}}
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
            <div class="col-lg-12">
                <div class="card xlsx-preview">
                    <div class="card-body ps-0">
                        <h5>File Preview</h5>
                        <p id="noFileText">No Chosen File Found, Please
                            Select
                            CSV
                            or XLSX File To See The Preview</p>
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
            {{-- <div class="d-flex justify-content-center align-items-center">
                <!-- code-128 -->
                <img id="code-128-img" class="img-fluid barcode-img" style="max-width: 100%; max-height: 15rem;"
                    src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSVoVNLEE2WzK5i1EXCJXjxmi1-gk1b9MeHpxipJaJp1bajAfwpUMG-CDnutx203HYjxXw&usqp=CAU"
                    alt="Code 128">
            </div> --}}
            {{-- <div class="d-flex justify-content-between mt-5">
                <a href="javascript:void(0)" class="btn text-white w-100 me-2"
                    style="background-color: #7239e9; ">
                    <span class="btn-label"> Print
                    </span>
                </a>
                <a href="javascript:void(0)" class="btn text-white w-100 ms-2"
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
            </div> --}}
        </div>
    </div>
</div>

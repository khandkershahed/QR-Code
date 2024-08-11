<div class="col-lg-7 bg-white" id="first-column1">
    <div class="card">
        <div class="card-body">
            @if (strpos(Route::current()->getName(), 'user.') === 0)
                <form id="kt_docs_formvalidation_text" class="form bar_code_create_form"
                    action="{{ route('user.single-barcode.store') }}" autocomplete="off" method="post" enctype="multipart/form-data">
                @else
                    <form id="kt_docs_formvalidation_text" class="form bar_code_create_form"
                        action="{{ route('admin.single-barcode.store') }}" autocomplete="off" method="post" enctype="multipart/form-data">
            @endif

            @csrf
            {{-- Forms Input --}}
            <div class="border-dashed border-1 p-3 rounded-2 mb-2">
                <div class="row">
                    <div class="fv-row col-lg-6">
                        <label class="required fw-semibold fs-6 mb-2">
                            <svg class="svg-inline--fa fa-signature fa-fw fa-sm text-muted mr-1" aria-hidden="true"
                                focusable="false" data-prefix="fas" data-icon="signature" role="img"
                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512" data-fa-i2svg="">
                                <path fill="currentColor"
                                    d="M192 128c0-17.7 14.3-32 32-32s32 14.3 32 32v7.8c0 27.7-2.4 55.3-7.1 82.5l-84.4 25.3c-40.6 12.2-68.4 49.6-68.4 92v71.9c0 40 32.5 72.5 72.5 72.5c26 0 50-13.9 62.9-36.5l13.9-24.3c26.8-47 46.5-97.7 58.4-150.5l94.4-28.3-12.5 37.5c-3.3 9.8-1.6 20.5 4.4 28.8s15.7 13.3 26 13.3H544c17.7 0 32-14.3 32-32s-14.3-32-32-32H460.4l18-53.9c3.8-11.3 .9-23.8-7.4-32.4s-20.7-11.8-32.2-8.4L316.4 198.1c2.4-20.7 3.6-41.4 3.6-62.3V128c0-53-43-96-96-96s-96 43-96 96v32c0 17.7 14.3 32 32 32s32-14.3 32-32V128zm-9.2 177l49-14.7c-10.4 33.8-24.5 66.4-42.1 97.2l-13.9 24.3c-1.5 2.6-4.3 4.3-7.4 4.3c-4.7 0-8.5-3.8-8.5-8.5V335.6c0-14.1 9.3-26.6 22.8-30.7zM24 368c-13.3 0-24 10.7-24 24s10.7 24 24 24H64.3c-.2-2.8-.3-5.6-.3-8.5V368H24zm592 48c13.3 0 24-10.7 24-24s-10.7-24-24-24H305.9c-6.7 16.3-14.2 32.3-22.3 48H616z">
                                </path>
                            </svg>
                            Product Name
                        </label>
                        <x-metronic.input type="text" name="product_name" id="product_name_input"
                            value="{{ old('product_name') }}" class="form-control form-control-solid mb-3 mb-lg-0"
                            placeholder="3L Fresh Water" />

                    </div>
                    <div class="fv-row col-lg-3">
                        <x-metronic.label class="fw-semibold fs-6 mb-2">Product ID <small
                                class="text-info">(Dynamic)</small></x-metronic.label>
                        <div class="input-group mb-3">
                            <x-metronic.input type="text" name="product_id" value="{{ old('product_id') }}"
                                class="form-control form-control-solid mb-3 mb-lg-0" placeholder="56849845769"
                                aria-describedby="button-addon2" id="product-id-input" />
                            <button class="btn btn-info rounded-0 px-3" type="button" id="button-addon2"><i
                                    class="fas fa-infinity"></i></button>
                        </div>
                    </div>
                    <div class="fv-row col-lg-3">
                        <x-metronic.label class="fw-semibold fs-6 mb-2"><svg
                                class="svg-inline--fa fa-database fa-fw fa-sm text-muted mr-1" aria-hidden="true"
                                focusable="false" data-prefix="fas" data-icon="database" role="img"
                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg="">
                                <path fill="currentColor"
                                    d="M448 80v48c0 44.2-100.3 80-224 80S0 172.2 0 128V80C0 35.8 100.3 0 224 0S448 35.8 448 80zM393.2 214.7c20.8-7.4 39.9-16.9 54.8-28.6V288c0 44.2-100.3 80-224 80S0 332.2 0 288V186.1c14.9 11.8 34 21.2 54.8 28.6C99.7 230.7 159.5 240 224 240s124.3-9.3 169.2-25.3zM0 346.1c14.9 11.8 34 21.2 54.8 28.6C99.7 390.7 159.5 400 224 400s124.3-9.3 169.2-25.3c20.8-7.4 39.9-16.9 54.8-28.6V432c0 44.2-100.3 80-224 80S0 476.2 0 432V346.1z">
                                </path>
                            </svg><span class="ps-2">Price</span>
                        </x-metronic.label>

                        <x-metronic.input type="number" name="product_price" value="{{ old('product_price') }}"
                            class="form-control form-control-solid mb-3 mb-lg-0" placeholder="$" step="0.01" />

                    </div>
                </div>
            </div>
            {{-- Customization BOx --}}
            <div class="border-dashed border-1 p-3 rounded-2">
                <div class="row">
                    <div class="fv-row col-lg-4">
                        <label class="fw-semibold fs-6 mb-2 d-flex align-items-center">
                            <div><svg class="svg-inline--fa fa-barcode fa-fw fa-sm text-muted mr-1" aria-hidden="true"
                                    focusable="false" data-prefix="fas" data-icon="barcode" role="img"
                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="">
                                    <path fill="currentColor"
                                        d="M24 32C10.7 32 0 42.7 0 56V456c0 13.3 10.7 24 24 24H40c13.3 0 24-10.7 24-24V56c0-13.3-10.7-24-24-24H24zm88 0c-8.8 0-16 7.2-16 16V464c0 8.8 7.2 16 16 16s16-7.2 16-16V48c0-8.8-7.2-16-16-16zm72 0c-13.3 0-24 10.7-24 24V456c0 13.3 10.7 24 24 24h16c13.3 0 24-10.7 24-24V56c0-13.3-10.7-24-24-24H184zm96 0c-13.3 0-24 10.7-24 24V456c0 13.3 10.7 24 24 24h16c13.3 0 24-10.7 24-24V56c0-13.3-10.7-24-24-24H280zM448 56V456c0 13.3 10.7 24 24 24h16c13.3 0 24-10.7 24-24V56c0-13.3-10.7-24-24-24H472c-13.3 0-24 10.7-24 24zm-64-8V464c0 8.8 7.2 16 16 16s16-7.2 16-16V48c0-8.8-7.2-16-16-16s-16 7.2-16 16z">
                                    </path>
                                </svg></div>
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
                            <option value="GS1-128" @selected(old('barcode_pattern' == 'GS1-128'))>GS1-128</option>
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
                    <div class="fv-row col-lg-4">
                        <label class=" required fw-semibold fs-6 mb-2">Quantity
                        </label>
                        <x-metronic.input type="number" name="bar_code_quantity" value="{{ old('bar_code_quantity') }}"
                            min="1" max="600" class="form-control form-control-solid mb-3 mb-lg-0" placeholder="1" />
                        <p class="error-message text-danger" style="display: none;">Quantity is required.</p>
                    </div>
                    <div class="fv-row col-lg-4">
                        <label class="fw-semibold fs-6 mb-2">Per Page
                            <span data-bs-toggle="popover" data-bs-dismiss="true"
                                title="Total Row = 9 ,Total Column = 4"
                                data-bs-content="Per Page = 36 Barcode In A4 Page After Print">
                                <a href="javascriptvoid:(0)" class="ps-2 border px-2 bg-light-danger"><i
                                        class="fas fa-info text-danger"></i></a>
                            </span>
                        </label>
                        <input type="text" name="per_page" class="form-control form-control-solid mb-3 mb-lg-0"
                            placeholder="36" min="1" max="24" value="{{ old('per_page') }}" />
                    </div>
                </div>
            </div>
            {{-- Size Box --}}
            <div class="border-dashed border-1 p-3 rounded-2 mt-2">
                <div class="row">
                    <div class="fv-row col-lg-2">
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
                    <div class="fv-row col-lg-8">
                        <label class="fw-semibold fs-6 mb-2 d-flex align-items-center">
                            <div>
                                <svg class="svg-inline--fa fa-left-right fa-fw fa-sm text-muted mr-1"
                                    aria-hidden="true" focusable="false" data-prefix="fas" data-icon="left-right"
                                    role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"
                                    data-fa-i2svg="">
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
                    <div class="fv-row col-lg-2">
                        <label class="fw-semibold fs-6 mb-2 d-flex align-items-center">
                            <div>
                                <svg class="svg-inline--fa fa-up-down fa-fw fa-sm text-muted mr-1" aria-hidden="true"
                                    focusable="false" data-prefix="fas" data-icon="up-down" role="img"
                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="">
                                    <path fill="currentColor"
                                        d="M145.6 7.7C141 2.8 134.7 0 128 0s-13 2.8-17.6 7.7l-104 112c-6.5 7-8.2 17.2-4.4 25.9S14.5 160 24 160H80V352H24c-9.5 0-18.2 5.7-22 14.4s-2.1 18.9 4.4 25.9l104 112c4.5 4.9 10.9 7.7 17.6 7.7s13-2.8 17.6-7.7l104-112c6.5-7 8.2-17.2 4.4-25.9s-12.5-14.4-22-14.4H176V160h56c9.5 0 18.2-5.7 22-14.4s2.1-18.9-4.4-25.9l-104-112z">
                                    </path>
                                </svg>
                            </div>
                            <div class="pt-1 ps-2"> Height Scale</div>
                        </label>
                        <div class="input-group mb-3">
                            <x-metronic.input type="text" name="barcode_height"
                                value="{{ old('barcode_height') }}" max="75"
                                class="form-control form-control-solid mb-3 mb-lg-0" placeholder="50" />
                            <button disabled class="btn btn-info rounded-0 px-3">PX</button>
                        </div>
                    </div>
                </div>
            </div>
            {{-- Form Action --}}
            <div class="row">
                <div class="col-lg-12">
                    <div class="d-flex justify-content-end">
                        <button type="submit" class="btn btn-primary mt-7">
                            <span class="indicator-label">
                                Generate Barcode
                            </span>
                        </button>
                    </div>
                </div>
            </div>
            </form>
        </div>
    </div>
</div>
<div class="col-lg-4 bg-white " id="second-column1">
    <div class="card">
        <div class="card-body p-2 py-8">
            <div id="generatedBarCodeContainer" class="d-flex justify-content-center aign-items-center">
                <img class="img-fluid generatedBarCode" style="width: 100rem; max-height: 15rem;"
                    src="https://cdn-dfhjh.nitrocdn.com/BzQnABYFnLkAUVnIDRwDtFjmHEaLtdtL/assets/images/optimized/rev-ecb332d/www.gtin.info/wp-content/uploads/2015/02/barcode-13.png"
                    alt="">
            </div>
            <div class="d-flex justify-content-between mt-5 printBar">
                <a href="" class="btn text-white w-100 me-2" style="background-color: #7239e9; ">
                    <span class="btn-label"> Print
                    </span>
                </a>
                <a href="" class="btn text-white w-100 ms-2 downloadBar" style="background-color: #7239e9;"
                    download>
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
            {{-- <div class="fv-row mt-10">
                <label class=" fw-semibold fs-6 mb-2">
                    <span class="ps-2"> Embedded data</span>
                </label>

                <input type="text" name="product_price" class="form-control form-control-solid mb-3 mb-lg-0"
                    placeholder="1" value="" />
            </div> --}}
        </div>
    </div>
</div>
@push('scripts')
    <script>
        $(document).ready(function() {
            // Function to handle preview update on input change
            $('.bar_code_create_form input, .bar_code_create_form textarea, .bar_code_create_form select')
                .on('keyup change', function(e) {
                    e.preventDefault();
                    updatePreview();
                });

            // Function to update preview and perform form validation
            function updatePreview() {
                var formData = new FormData($('.bar_code_create_form')[0]);

                $.ajax({
                    url: '{{ route('barcode.preview') }}', // Replace with your Laravel route
                    type: 'POST',
                    data: formData,
                    processData: false,
                    contentType: false,
                    success: function(response) {
                        // Update preview elements with barcode image URL
                        if (response && response.bar_code) {
                            $('.generatedBarCode').attr('src', response.bar_code);
                            $('.printBar').attr('href', response.bar_code);
                            $('.downloadBar').attr('href', response.bar_code);
                        } else {
                            console.error('Invalid response from server:', response);
                            // Handle invalid response if needed
                        }
                    },
                    error: function(xhr, status, error) {
                        console.error('Failed to update preview:', error);
                        // Handle error if needed
                    }
                });
            }

            // Function to handle form submission
            // $('.bar_code_create_form').submit(function(e) {
            //     e.preventDefault(); // Prevent default form submission

            //     var form = $(this);
            //     var formData = new FormData(form[0]);
            //     var isValid = true;

            //     // Remove any existing error messages and red borders
            //     form.find('.error-message').remove();
            //     form.find('.form-control').removeClass('is-invalid');

            //     // Validate each required field
            //     form.find('[name="product_name"], [name="bar_code_quantity"]').each(function() {
            //         var fieldValue = $(this).val().trim();
            //         if (!fieldValue) {
            //             // Show error message for the current field
            //             $(this).addClass('is-invalid');
            //             $(this).after(
            //                 '<p class="error-message text-danger">This field is required.</p>');
            //             isValid = false;
            //         }
            //     });

            //     if (isValid) {
            //         // Perform AJAX form submission
            //         $.ajax({
            //             url: form.attr('action'), // Form action URL
            //             type: 'POST',
            //             data: formData,
            //             processData: false,
            //             contentType: false,
            //             success: function(response) {
            //                 // Optionally handle success response
            //                 // For example, show success message with SweetAlert
            //                 Swal.fire({
            //                     text: 'Form submitted successfully!',
            //                     icon: 'success',
            //                     buttonsStyling: false,
            //                     confirmButtonText: 'Ok, got it!',
            //                     customClass: {
            //                         confirmButton: 'btn btn-primary'
            //                     }
            //                 });
            //             },
            //             error: function(xhr, status, error) {
            //                 console.error('Failed to submit form.', error);

            //                 // Show SweetAlert error message for AJAX error
            //                 Swal.fire({
            //                     text: 'Failed to submit form. Please try again later.',
            //                     icon: 'error',
            //                     buttonsStyling: false,
            //                     confirmButtonText: 'Ok, got it!',
            //                     customClass: {
            //                         confirmButton: 'btn btn-primary'
            //                     }
            //                 });
            //             }
            //         });
            //     } else {
            //         // Show SweetAlert error message for validation errors
            //         Swal.fire({
            //             text: 'Some input fields are not filled up!',
            //             icon: 'error',
            //             buttonsStyling: false,
            //             confirmButtonText: 'Ok, got it!',
            //             customClass: {
            //                 confirmButton: 'btn btn-primary'
            //             }
            //         });
            //     }
            // });

            // Optional: Hide error message and remove red border on input change
            $('.bar_code_create_form input, .bar_code_create_form select').on('input change', function() {
                $(this).removeClass('is-invalid');
                $(this).next('.error-message').remove();
                updatePreview(); // Update preview on input change
            });
        });
    </script>
@endpush

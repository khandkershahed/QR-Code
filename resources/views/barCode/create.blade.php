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
<div id="contentDiv" class="d-none fade pb-15">
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
            <div class="w-100 mx-auto row">
                <div class="col-lg-12">
                    <div class="row equal-height1" id="equal-height-row1">
                        <h2 class="text-center mt-10">Create New Barcode</h2>
                        @include('barCode.partials.singleCreate')
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
                        @include('barCode.partials.bulkCreate')
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

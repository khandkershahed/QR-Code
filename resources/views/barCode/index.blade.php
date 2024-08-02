<div class="col-lg-12 mt-10 mb-10">
    <div class="card card-p-0 card-flush p-3 pt-0">
        <div class="p-5 pb-2">
            <h4 class="mb-0">View and manage your BarCodes</h4>
        </div>
        <div class="card-body table-responsive">
            <table
                class="table table-responisve align-middle border rounded table-row-dashed table-striped table-hover  fs-6 g-5"
                id="bar_code_admin">
                <thead>
                    <tr class="text-gray-500 fw-bold fs-7 text-uppercase">
                        <th width="5%">SL</th>
                        {{-- <th width="30%">Image</th> --}}
                        <th width="25%">Product </th>
                        <th width="12%">Pattern</th>
                        <th width="13%" class="text-center">BarCode</th>
                        <th width="15%" class="text-center">Action</th>
                    </tr>
                </thead>
                <tbody class="fw-semibold text-gray-600">
                    @foreach ($bar_codes as $bar_code)
                        <tr>
                            <td>
                                {{ $loop->iteration }}
                            </td>
                            {{-- <td>
                                <img src="{{ asset($bar_code->bar_code_png) }}" width="120px"
                                    alt="{{ $bar_code->product_name }}">
                            </td> --}}
                            <td>
                                <div class="d-flex flex-column">
                                    @if (strpos(Route::current()->getName(), 'user.') === 0)
                                        <a href="javascript:void(0)" class="mb-1 text-decoration-none fs-6">
                                            Name : {{ $bar_code->product_name }}
                                        </a>
                                    @else
                                        <a href="javascript:void(0)" class="mb-1 text-decoration-none fs-6">
                                            Name : {{ $bar_code->product_name }}
                                        </a>
                                    @endif

                                    <span class="fs-6">Code : {{ $bar_code->product_id }}</span>
                                </div>
                            </td>
                            <td>
                                {{ $bar_code->barcode_pattern }}
                            </td>

                            <td class="text-center">
                                <a href="javascript:void(0)" data-bs-toggle="modal"
                                    data-bs-target="#bar_code_modal{{ $bar_code->id }}" class="btn btn-sm btn-info"><i
                                        class="fas fa-eye pe-2"></i>
                                    Bar Code
                                </a>
                                <div class="modal fade" id="bar_code_modal{{ $bar_code->id }}" tabindex="-1"
                                    data-bs-backdrop="static" data-bs-keyboard="false" role="dialog"
                                    aria-labelledby="modalTitleId" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-xl"
                                        role="document">

                                        <div class="modal-content">
                                            <div class="modal-header py-3" style="background-color: #5028a3;">
                                                <h5 class="modal-title text-white" id="modalTitleId">
                                                    BarCode Preview ({{ $bar_code->product_id }})
                                                </h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="row">
                                                    @foreach ($bar_code->barCodeImages as $barCodeImage)
                                                        <div class="col-lg-4 p-5">
                                                            <div id="printableArea" style="display: none;"></div>
                                                            <div class="border-1 border-dashed py-4">
                                                                <div>
                                                                    <img id="barcode-{{ $barCodeImage->id }}"
                                                                        class="img-fluid w-225px"
                                                                        src="{{ asset('storage/' . $barCodeImage->image) }}"
                                                                        alt="">
                                                                </div>
                                                                <div>
                                                                    <a href="{{ asset('storage/' . $barCodeImage->image) }}"
                                                                        class="menu-link px-3 fs-2 fw-bolder me-3"
                                                                        download data-kt-docs-table-filter="edit_row">
                                                                        Download
                                                                    </a>
                                                                    <button
                                                                        class="btn btn-light btn-active-light-primary btn-sm"
                                                                        onclick="printImage('barcode-{{ $barCodeImage->id }}')">
                                                                        Print
                                                                    </button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    @endforeach
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </td>

                            <td class="pe-0 text-center">
                                @if (strpos(Route::current()->getName(), 'user.') === 0)
                                    <a href="{{ route('user.barcode.destroy', $bar_code->id) }}"
                                        class="btn btn-icon btn-danger btn-bg-light btn-active-color-light btn-sm me-2 delete">
                                        <i class="fas fa-trash"></i>
                                    </a>
                                @else
                                    <a href="{{ route('admin.barcode.destroy', $bar_code->id) }}"
                                        class="btn btn-icon btn-danger btn-bg-light btn-active-color-light btn-sm me-2 delete">
                                        <i class="fas fa-trash"></i>
                                    </a>
                                @endif
                                {{-- <a href="{{ route('admin.barcode.edit', $bar_code->code) }}"
                                    class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-2">
                                    <i class="fas fa-pen"></i>
                                </a> --}}
                                <a href="#" class="btn btn-light btn-active-light-primary btn-sm"
                                    data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end"
                                    data-kt-menu-flip="top-end">
                                    Download
                                    <span class="svg-icon fs-5 m-0">
                                        <svg xmlns="http://www.w3.org/2000/svg"
                                            xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px"
                                            viewBox="0 0 24 24" version="1.1">
                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                <polygon points="0 0 24 0 24 24 0 24"></polygon>
                                                <path
                                                    d="M6.70710678,15.7071068 C6.31658249,16.0976311 5.68341751,16.0976311 5.29289322,15.7071068 C4.90236893,15.3165825 4.90236893,14.6834175 5.29289322,14.2928932 L11.2928932,8.29289322 C11.6714722,7.91431428 12.2810586,7.90106866 12.6757246,8.26284586 L18.6757246,13.7628459 C19.0828436,14.1360383 19.1103465,14.7686056 18.7371541,15.1757246 C18.3639617,15.5828436 17.7313944,15.6103465 17.3242754,15.2371541 L12.0300757,10.3841378 L6.70710678,15.7071068 Z"
                                                    fill="currentColor" fill-rule="nonzero"
                                                    transform="translate(12.000003, 11.999999) rotate(-180.000000) translate(-12.000003, -11.999999)">
                                                </path>
                                            </g>
                                        </svg>
                                    </span>
                                </a>
                                <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-bold fs-7 w-125px py-4"
                                    data-kt-menu="true" style="">

                                    @if (!empty($bar_code->bar_code_pdf))
                                        <div class="menu-item px-3">
                                            <a href="{{ asset('storage/' . $bar_code->bar_code_pdf) }}"
                                                class="menu-link px-3" download data-kt-docs-table-filter="edit_row">
                                                PDF
                                            </a>
                                        </div>
                                    @endif
                                    <!--end::Menu item-->
                                </div>

                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>



@push('scripts')
    <script>
        function printImage(imageId) {
            var img = document.getElementById(imageId);

            // Check if the image element is found
            if (!img) {
                console.error("Image not found for ID:", imageId);
                return;
            }

            // Get the printable area
            var printableArea = document.getElementById('printableArea');

            // Clear the printable area
            printableArea.innerHTML = '';

            // Clone the image and add it to the printable area
            var imgClone = img.cloneNode();
            printableArea.appendChild(imgClone);

            // Print the image
            var printWindow = window.open('', '_blank');
            printWindow.document.open();
            printWindow.document.write(`
                    <html>
                    <head>
                        <title>Print Barcode</title>
                        <style>
                            /* Styles for the print page */
                            body, html {
                                margin: 0;
                                padding: 0;
                                width: 100%;
                                height: 100%;
                            }
                            img {
                                width: 100%;
                                height: auto;
                            }
                        </style>
                    </head>
                    <body>
                        ${printableArea.innerHTML}
                        <script>
                            window.onload = function() {
                                window.print();
                                window.close();
                            };
    </script>
    </body>

    </html>
    `);
    printWindow.document.close();
    }
    </script>

    <script>
        "use strict";

        // Class definition
        var KTDatatablesExample = (function() {
            // Shared variables
            var table;
            var datatable;

            // Private functions
            var initDatatable = function() {
                // Ensure the table exists
                if (!table) {
                    console.error("Table not found for initialization.");
                    return;
                }

                // Destroy existing DataTable instance if it exists
                if ($.fn.DataTable.isDataTable(table)) {
                    $(table).DataTable().destroy();
                }

                // Format the date for ordering
                const tableRows = table.querySelectorAll('tbody tr');

                tableRows.forEach(row => {
                    const dateCell = row.querySelector(
                        'td:nth-child(4)'); // Select date from the 4th column
                    if (dateCell) {
                        const realDate = moment(dateCell.innerHTML, "DD MMM YYYY, LT").format();
                        dateCell.setAttribute('data-order', realDate);
                    }
                });

                // Initialize DataTable
                datatable = $(table).DataTable({
                    "info": false,
                    "order": [], // Customize ordering as needed
                    "pageLength": 10, // Set the number of entries per page
                });
            }

            // Handle search input for the DataTable
            var handleSearchDatatable = function() {
                const filterSearch = document.querySelector('[data-kt-filter="search"]');
                if (filterSearch) {
                    filterSearch.addEventListener('keyup', function(e) {
                        datatable.search(e.target.value).draw();
                    });
                }
            }

            // Export buttons functionality (if needed)
            var exportButtons = function() {
                // Add export functionality here if required
            }

            // Public methods
            return {
                init: function() {
                    table = document.querySelector('#bar_code_admin');

                    if (!table) {
                        console.error("DataTable element not found.");
                        return;
                    }

                    initDatatable();
                    handleSearchDatatable();
                    exportButtons(); // Initialize export buttons if used
                }
            };
        })();

        // On document ready
        document.addEventListener('DOMContentLoaded', function() {
            KTDatatablesExample.init();
        });
    </script>
@endpush

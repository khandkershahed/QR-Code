<x-app-layout :title="'QR Code List'">

    {{-- {!! QrCode::size(500)->eye('left-leaf',0.1)->eyeColor(0, 255, 255, 255, 0, 0, 0)->eyeColor(1, 222, 18, 222,222, 18, 222 )->eyeColor(2, 222, 18, 222,222, 18, 222 )->style('dot', 0.8)->errorCorrection('H')->generate('Make me into a QrCode!'); !!} --}}
    <div class="row">
        <div class="col-lg-12">
            <div class="card card-p-0 card-flush p-3 mt-10">
                <div class="card-header align-items-center py-5 gap-2 gap-md-5">
                    <div class="card-title">
                        <h2 class="mb-0">Manage your QR Codes</h2>
                    </div>
                    <div class="card-toolbar flex-row-fluid justify-content-end gap-5">
                        <a href="{{ route('reseller.qr-code.create') }}" class="btn btn-sm btn-primary rounded-2 me-3">
                            Create QR Codes
                        </a>
                    </div>
                </div>
                <div class="card-body">
                    <div>
                        <ul class="nav nav-tabs nav-line-tabs mb-5 fs-6">
                            <li class="nav-item">
                                <a class="nav-link bg-transparent  text-muted active p-0" data-bs-toggle="tab"
                                    href="#kt_tab_pane_1">All List</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link bg-transparent  text-muted p-0" data-bs-toggle="tab"
                                    href="#kt_tab_pane_2">Dynamic List</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link bg-transparent  text-muted p-0" data-bs-toggle="tab"
                                    href="#kt_tab_pane_3">Static List</a>
                            </li>
                        </ul>

                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="kt_tab_pane_1" role="tabpanel">
                                <div>
                                    <h1 class="text-center">All Qr List</h1>
                                    <table
                                        class="table align-middle border rounded table-row-dashed table-striped table-hover  fs-6 g-5"
                                        id="qr_code">
                                        <thead>
                                            <tr class="text-gray-500 fw-bold fs-7 text-uppercase text-center">
                                                <th width="5">SL</th>
                                                <th width="10">Image</th>
                                                <th width="35">Content</th>
                                                <th width="15">Type</th>
                                                <th width="10">Scaned</th>
                                                <th width="10">Status</th>
                                                <th width="15">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody class="fw-semibold text-gray-600">
                                            @foreach ($qrs as $qr)
                                                <tr class="odd text-center">
                                                    <td>
                                                        {{ $loop->iteration }}
                                                    </td>
                                                    <td>
                                                        <img class="img-fluid w-50px" src="{{ $qr->qr_png_url }}"
                                                            alt="">
                                                    </td>
                                                    <td data-order="2022-03-10T14:40:00+05:00">
                                                        {{-- title --}}
                                                        <span><span class="fw-bold text-black">Title :
                                                            </span>{{ $qr->qr_name }}</span><br>
                                                        <span><span class="fw-bold text-black">Link :
                                                            </span><a href="{{ $qr->qr_png_url }}" target="_blank">{{ $qr->qr_png_url }}</a></span><br>
                                                        <span><span class="fw-bold text-black">Org :
                                                            </span>{{ Auth::user()->name }}</span><br>
                                                        <span><span class="fw-bold text-black">Created at
                                                                :</span>:{{ $qr->created_at }}</span><br>
                                                    </td>
                                                    <td class="text-start">
                                                        <button class="btn btn-light-primary">QR Code</button>
                                                    </td>
                                                    <td class="text-start">
                                                        <a href="{{route('reseller.qr.summary',$qr->code)}}" class="btn btn-light-primary">{{ \App\Models\Admin\QrScan::where('code_id', $qr->id)->count() }}</a>
                                                    </td>
                                                    <td>
                                                        <div class="badge badge-light-success">Active</div>
                                                    </td>
                                                    <td class="pe-0 text-end">
                                                        <a href="{{ route('reseller.qr-code.destroy', $qr->id) }}"
                                                            class="btn btn-icon btn-bg-light btn-active-color-danger btn-sm me-1 delete">
                                                            <i class="fas fa-trash-alt text-danger"></i>
                                                        </a>
                                                        <a href="#"
                                                            class="btn btn-light btn-active-light-primary btn-sm"
                                                            data-kt-menu-trigger="click"
                                                            data-kt-menu-placement="bottom-end"
                                                            data-kt-menu-flip="top-end">
                                                            Download
                                                            <span class="svg-icon fs-5 m-0">
                                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                                    xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                    width="24px" height="24px" viewBox="0 0 24 24"
                                                                    version="1.1">
                                                                    <g stroke="none" stroke-width="1" fill="none"
                                                                        fill-rule="evenodd">
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
                                                            data-kt-menu="true ">
                                                            @if (!empty($qr->qr_png))
                                                                <div class="menu-item px-3">
                                                                    <a href="{{ $qr->qr_png_url }}" class="menu-link px-3" download
                                                                        data-kt-docs-table-filter="edit_row">
                                                                        PNG
                                                                    </a>
                                                                </div>
                                                            @endif

                                                            @if (!empty($qr->qr_svg))
                                                                <div class="menu-item px-3">
                                                                    <a href="{{ $qr->qr_svg_url }}" class="menu-link px-3" download
                                                                        data-kt-docs-table-filter="edit_row">
                                                                        SVG
                                                                    </a>
                                                                </div>
                                                            @endif
                                                            @if (!empty($qr->qr_eps))
                                                                <div class="menu-item px-3">
                                                                    <a href="{{ $qr->qr_eps_url }}" class="menu-link px-3" download
                                                                        data-kt-docs-table-filter="edit_row">
                                                                        EPS
                                                                    </a>
                                                                </div>
                                                            @endif
                                                            @if (!empty($qr->qr_jpg))
                                                                <div class="menu-item px-3">
                                                                    <a href="{{ $qr->qr_jpg_url }}" class="menu-link px-3" download
                                                                        data-kt-docs-table-filter="edit_row">
                                                                        JPG
                                                                    </a>
                                                                </div>
                                                            @endif
                                                            @if (!empty($qr->qr_pdf))
                                                                <div class="menu-item px-3">
                                                                    <a href="{{ $qr->qr_pdf_url }}" class="menu-link px-3" download
                                                                        data-kt-docs-table-filter="edit_row">
                                                                        PDF
                                                                    </a>
                                                                </div>
                                                            @endif
                                                        </div>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="kt_tab_pane_2" role="tabpanel">
                                <div>
                                    <h1 class="text-center">All Dynamic List</h1>
                                    <table
                                        class="table align-middle border rounded table-row-dashed table-striped table-hover  fs-6 g-5"
                                        id="qr_code">
                                        <thead>
                                            <tr class="text-gray-500 fw-bold fs-7 text-uppercase">
                                                <th class="">SL</th>
                                                <th class="">Image</th>
                                                <th class="">Content</th>
                                                <th class="">Type</th>
                                                <th class="">Scaned</th>
                                                <th class="">Status</th>
                                                <th class="text-end">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody class="fw-semibold text-gray-600">
                                            @foreach ($qrs as $qr)
                                                @if ($qr->qr_scan_status == 'dynamic')
                                                    <tr class="odd">
                                                        <td>
                                                            {{ $loop->iteration }}
                                                        </td>
                                                        <td>
                                                            <img class="img-fluid w-50px" src="{{ $qr->qr_url }}"
                                                                alt="">
                                                        </td>
                                                        <td data-order="2022-03-10T14:40:00+05:00">
                                                            {{-- title --}}
                                                            <span><span class="fw-bold text-black">Title :
                                                                </span>{{ $qr->qr_name }}</span><br>
                                                            <span><span class="fw-bold text-black">Link :
                                                                </span><a href="{{ $qr->qr_url }}" target="_blank">{{ $qr->qr_url }}</a></span><br>
                                                            <span><span class="fw-bold text-black">Org :
                                                                </span>{{ Auth::user()->name }}</span><br>
                                                            <span><span class="fw-bold text-black">Created at
                                                                    :</span>:{{ $qr->created_at }}</span><br>
                                                        </td>
                                                        <td class="text-start">
                                                            <button class="btn btn-light-primary">QR Code</button>
                                                        </td>
                                                        <td class="text-start">
                                                            <button class="btn btn-light-primary">94</button>
                                                        </td>
                                                        <td>
                                                            <div class="badge badge-light-success">Active</div>
                                                        </td>
                                                        <td class="pe-0 text-end">
                                                            <a href="{{ route('reseller.qr-code.destroy', $qr->id) }}"
                                                                class="btn btn-icon btn-bg-light btn-active-color-danger btn-sm me-1 delete">
                                                                <i class="fas fa-trash-alt text-danger"></i>
                                                            </a>
                                                            <a href="#"
                                                                class="btn btn-light btn-active-light-primary btn-sm"
                                                                data-kt-menu-trigger="click"
                                                                data-kt-menu-placement="bottom-end"
                                                                data-kt-menu-flip="top-end">
                                                                Download
                                                                <span class="svg-icon fs-5 m-0">
                                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                                        xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                        width="24px" height="24px" viewBox="0 0 24 24"
                                                                        version="1.1">
                                                                        <g stroke="none" stroke-width="1" fill="none"
                                                                            fill-rule="evenodd">
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
                                                                data-kt-menu="true ">
                                                                @if (!empty($qr->qr_png))
                                                                    <div class="menu-item px-3">
                                                                        <a href="{{ $qr->qr_png_url }}" class="menu-link px-3" download
                                                                            data-kt-docs-table-filter="edit_row">
                                                                            PNG
                                                                        </a>
                                                                    </div>
                                                                @endif

                                                                @if (!empty($qr->qr_svg))
                                                                    <div class="menu-item px-3">
                                                                        <a href="{{ $qr->qr_svg_url }}" class="menu-link px-3" download
                                                                            data-kt-docs-table-filter="edit_row">
                                                                            SVG
                                                                        </a>
                                                                    </div>
                                                                @endif
                                                                @if (!empty($qr->qr_eps))
                                                                    <div class="menu-item px-3">
                                                                        <a href="{{ $qr->qr_eps_url }}" class="menu-link px-3" download
                                                                            data-kt-docs-table-filter="edit_row">
                                                                            EPS
                                                                        </a>
                                                                    </div>
                                                                @endif
                                                                @if (!empty($qr->qr_jpg))
                                                                    <div class="menu-item px-3">
                                                                        <a href="{{ $qr->qr_jpg_url }}" class="menu-link px-3" download
                                                                            data-kt-docs-table-filter="edit_row">
                                                                            JPG
                                                                        </a>
                                                                    </div>
                                                                @endif
                                                                @if (!empty($qr->qr_pdf))
                                                                    <div class="menu-item px-3">
                                                                        <a href="{{ $qr->qr_pdf_url }}" class="menu-link px-3" download
                                                                            data-kt-docs-table-filter="edit_row">
                                                                            PDF
                                                                        </a>
                                                                    </div>
                                                                @endif
                                                            </div>
                                                        </td>
                                                    </tr>
                                                @endif
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="kt_tab_pane_3" role="tabpanel">
                                <div>
                                    <h1 class="text-center">All Static List</h1>
                                    <table
                                        class="table align-middle border rounded table-row-dashed table-striped table-hover  fs-6 g-5"
                                        id="qr_code">
                                        <thead>
                                            <tr class="text-gray-500 fw-bold fs-7 text-uppercase">
                                                <th class="">SL</th>
                                                <th class="">Image</th>
                                                <th class="">Content</th>
                                                <th class="">Type</th>
                                                <th class="">Scaned</th>
                                                <th class="">Status</th>
                                                <th class="text-end">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody class="fw-semibold text-gray-600">
                                            @foreach ($qrs as $qr)
                                                @if ($qr->qr_scan_status == 'static')
                                                    <tr class="odd">
                                                        <td>
                                                            {{ $loop->iteration }}
                                                        </td>
                                                        <td>
                                                            <img class="img-fluid w-50px" src="{{ $qr->qr_url }}"
                                                                alt="">
                                                        </td>
                                                        <td data-order="2022-03-10T14:40:00+05:00">
                                                            {{-- title --}}
                                                            <span><span class="fw-bold text-black">Title :
                                                                </span>{{ $qr->qr_name }}</span><br>
                                                            <span><span class="fw-bold text-black">Link :
                                                                </span>{{ $qr->qr_url }}</span><br>
                                                            <span><span class="fw-bold text-black">Org :
                                                                </span>{{ Auth::user()->name }}</span><br>
                                                            <span><span class="fw-bold text-black">Created at
                                                                    :</span>:{{ $qr->created_at }}</span><br>
                                                        </td>
                                                        <td class="text-start">
                                                            <button class="btn btn-light-primary">{{ ucfirst($qr->qr_scan_status) }}</button>
                                                        </td>
                                                        <td class="text-start">
                                                            <button class="btn btn-light-primary">94</button>
                                                        </td>
                                                        <td>
                                                            <div class="badge badge-light-success">Active</div>
                                                        </td>
                                                        <td class="pe-0 text-end">
                                                            <a href="{{ route('reseller.qr-code.destroy', $qr->id) }}"
                                                                class="btn btn-icon btn-bg-light btn-active-color-danger btn-sm me-1 delete">
                                                                <i class="fas fa-trash-alt text-danger"></i>
                                                            </a>
                                                            <a href="#"
                                                                class="btn btn-light btn-active-light-primary btn-sm"
                                                                data-kt-menu-trigger="click"
                                                                data-kt-menu-placement="bottom-end"
                                                                data-kt-menu-flip="top-end">
                                                                Download
                                                                <span class="svg-icon fs-5 m-0">
                                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                                        xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                        width="24px" height="24px" viewBox="0 0 24 24"
                                                                        version="1.1">
                                                                        <g stroke="none" stroke-width="1" fill="none"
                                                                            fill-rule="evenodd">
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
                                                                data-kt-menu="true ">
                                                                @if (!empty($qr->qr_png))
                                                                    <div class="menu-item px-3">
                                                                        <a href="{{ $qr->qr_png_url }}" class="menu-link px-3" download
                                                                            data-kt-docs-table-filter="edit_row">
                                                                            PNG
                                                                        </a>
                                                                    </div>
                                                                @endif

                                                                @if (!empty($qr->qr_svg))
                                                                    <div class="menu-item px-3">
                                                                        <a href="{{ $qr->qr_svg_url }}" class="menu-link px-3" download
                                                                            data-kt-docs-table-filter="edit_row">
                                                                            SVG
                                                                        </a>
                                                                    </div>
                                                                @endif
                                                                @if (!empty($qr->qr_eps))
                                                                    <div class="menu-item px-3">
                                                                        <a href="{{ $qr->qr_eps_url }}" class="menu-link px-3" download
                                                                            data-kt-docs-table-filter="edit_row">
                                                                            EPS
                                                                        </a>
                                                                    </div>
                                                                @endif
                                                                @if (!empty($qr->qr_jpg))
                                                                    <div class="menu-item px-3">
                                                                        <a href="{{ $qr->qr_jpg_url }}" class="menu-link px-3" download
                                                                            data-kt-docs-table-filter="edit_row">
                                                                            JPG
                                                                        </a>
                                                                    </div>
                                                                @endif
                                                                @if (!empty($qr->qr_pdf))
                                                                    <div class="menu-item px-3">
                                                                        <a href="{{ $qr->qr_pdf_url }}" class="menu-link px-3" download
                                                                            data-kt-docs-table-filter="edit_row">
                                                                            PDF
                                                                        </a>
                                                                    </div>
                                                                @endif
                                                            </div>
                                                        </td>
                                                    </tr>
                                                @endif
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @push('scripts')
        <script>
            "use strict";

            // Class definition
            var KTDatatablesExample = function() {
                // Shared variables
                var table;
                var datatable;

                // Private functions
                var initDatatable = function() {
                    // Set date data order
                    const tableRows = table.querySelectorAll('tbody tr');

                    tableRows.forEach(row => {
                        const dateRow = row.querySelectorAll('td');
                        const realDate = moment(dateRow[3].innerHTML, "DD MMM YYYY, LT")
                            .format(); // select date from 4th column in table
                        dateRow[3].setAttribute('data-order', realDate);
                    });

                    // Init datatable --- more info on datatables: https://datatables.net/manual/
                    datatable = $(table).DataTable({
                        "info": false,
                        'order': [],
                        'pageLength': 10,
                    });
                }

                // Hook export buttons
                var exportButtons = () => {
                    const documentTitle = 'Customer Orders Report';
                    var buttons = new $.fn.dataTable.Buttons(table, {
                        buttons: [{
                                extend: 'copyHtml5',
                                title: documentTitle
                            },
                            {
                                extend: 'excelHtml5',
                                title: documentTitle
                            },
                            {
                                extend: 'csvHtml5',
                                title: documentTitle
                            },
                            {
                                extend: 'pdfHtml5',
                                title: documentTitle
                            }
                        ]
                    }).container().appendTo($('#qr_code_buttons'));

                    // Hook dropdown menu click event to datatable export buttons
                    const exportButtons = document.querySelectorAll(
                        '#qr_code_export_menu [data-kt-export]');
                    exportButtons.forEach(exportButton => {
                        exportButton.addEventListener('click', e => {
                            e.preventDefault();

                            // Get clicked export value
                            const exportValue = e.target.getAttribute('data-kt-export');
                            const target = document.querySelector('.dt-buttons .buttons-' +
                                exportValue);

                            // Trigger click event on hidden datatable export buttons
                            target.click();
                        });
                    });
                }

                // Search Datatable --- official docs reference: https://datatables.net/reference/api/search()
                var handleSearchDatatable = () => {
                    const filterSearch = document.querySelector('[data-kt-filter="search"]');
                    filterSearch.addEventListener('keyup', function(e) {
                        datatable.search(e.target.value).draw();
                    });
                }

                // Public methods
                return {
                    init: function() {
                        table = document.querySelector('#qr_code');

                        if (!table) {
                            return;
                        }

                        initDatatable();
                        exportButtons();
                        handleSearchDatatable();
                    }
                };
            }();

            // On document ready
            KTUtil.onDOMContentLoaded(function() {
                KTDatatablesExample.init();
            });
        </script>
    @endpush
</x-app-layout>

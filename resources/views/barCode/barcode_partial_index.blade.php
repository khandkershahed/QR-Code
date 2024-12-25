<div class="card-body rounded-0">
    <div class="table-responsive">
        <table class="table my-datatable table-striped table-row-bordered mt-0" id="barCode_table">
            <thead>
                <tr class="text-center bg-info text-white fw-bolder fs-7 text-uppercase gs-0">
                    <th width="5%">SL</th>
                    <th width="15%">Image</th>
                    <th width="20%">Product </th>
                    <th width="20%">Author</th>
                    <th width="10%">Pattern</th>
                    <th width="15%">BarCode</th>
                    <th width="25%">Action</th>
                </tr>
            </thead>
            <tbody class="text-center fw-semibold text-gray-600">
                @foreach ($bar_codes as $bar_code)
                    <tr>
                        <td class="text-center">{{ $loop->iteration }}</td>
                        <td>
                            <img class="" width="50px" src="{{ $bar_code->qr_png_url }}" alt="">
                        </td>
                        <td>
                            <div class="d-flex flex-column">
                                <a href="javascript:void(0)" class="mb-1 text-decoration-none fs-6">
                                    Name : {{ $bar_code->product_name }}
                                </a>
                                <span class="fs-6">Code : {{ $bar_code->product_id }}</span>
                                <p class="mb-0">Created: {{ $bar_code->created_at->format('d F Y') }}</p>
                            </div>
                        </td>
                        <td>
                            {{ optional($bar_code->user)->name }}
                        </td>
                        <td>{{ $bar_code->barcode_pattern }}</td>
                        <td class="text-center">
                            <a href="javascript:void(0)" data-bs-toggle="modal"
                                data-bs-target="#bar_code_modal{{ $bar_code->id }}" class="btn btn-sm btn-info">
                                <i class="fas fa-eye pe-2"></i> Bar Code
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
                                            @if ($bar_code->barcode_type == 'single_upload')
                                                <div class="row">
                                                    @foreach ($bar_code->barCodeImages as $barCodeImage)
                                                        <div class="col-lg-4 p-5">
                                                            <div id="printableArea" style="display: none;">
                                                            </div>
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
                                                                        onclick="printImage('{{ asset('storage/' . $barCodeImage->image) }}')">
                                                                        Print
                                                                    </button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    @endforeach
                                                </div>
                                            @else
                                                <div class="row">
                                                    <div class="col-lg-6 offset-lg-3">
                                                        <div id="printableArea" style="display: none;"></div>
                                                        <div class="border-1 border-dashed py-4">
                                                            <div>
                                                                <img id="barcode-{{ $bar_code->id }}"
                                                                    class="img-fluid pb-4"
                                                                    src="{{ asset($bar_code->bar_code_png) }}"
                                                                    alt="">
                                                            </div>
                                                            <div class="pt-4">
                                                                <a href="{{ asset($bar_code->bar_code_png) }}"
                                                                    class="menu-link px-3 fs-2 fw-bolder me-3" download
                                                                    data-kt-docs-table-filter="edit_row">
                                                                    Download
                                                                </a>
                                                                <button
                                                                    class="btn btn-light btn-active-light-primary btn-sm"
                                                                    onclick="printImage('{{ asset('storage/' . $bar_code->bar_code_png) }}')">
                                                                    Print
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </td>
                        <td class="pe-5 text-center">
                            <div class="dropdown">
                                <button class="btn btn-light-danger dropdown-toggle" type="button"
                                    id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                    Actions
                                </button>
                                <ul class="dropdown-menu mt-0 pt-0 rounded-0" aria-labelledby="dropdownMenuButton1">
                                    @if (!empty($bar_code->bar_code_pdf))
                                        <li class="text-muted">
                                            <a href="{{ asset($bar_code->bar_code_pdf) }}" download
                                                data-kt-docs-table-filter="edit_row"
                                                class="menu-link px-3 dropdown-item">
                                                <i class="fa-solid fa-file-pdf pe-2"></i> PDF
                                            </a>
                                        </li>
                                    @endif
                                    <li class="text-muted">
                                        <a href="javascript:void(0)" data-kt-menu-trigger="click"
                                            data-kt-menu-placement="bottom-end" data-kt-menu-flip="top-end"
                                            class="menu-link px-3 dropdown-item">
                                            <i class="fa-solid fa-cloud-arrow-down pe-2"></i> Download
                                        </a>
                                    </li>
                                    <li class="text-muted">
                                        <a href="{{ route('user.barcode.destroy', $bar_code->id) }}"
                                            class="menu-link px-3 delete dropdown-item">
                                            <i class="fa-solid fa-trash pe-2"></i> Delete
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

@push('scripts')
    <script>
        function printImage(imageUrl) {
            // Create a new print window
            var printWindow = window.open('', '_blank');

            // Define HTML content for the print window
            var htmlContent = `
                <div class="print-container text-center" style="text-align:center;">
                    <img width="400px" src="${imageUrl}" />
                </div>
        `;

            // Write HTML content to the new window
            printWindow.document.open();
            printWindow.document.write(htmlContent);
            printWindow.document.close();

            // Ensure content is loaded before printing
            printWindow.onload = function() {
                // Add a slight delay before printing to ensure all resources are fully loaded
                setTimeout(function() {
                    printWindow.focus();
                    printWindow.print();
                    printWindow.close();
                }, 600); // Adjust delay as needed
            };
        }
    </script>



    <script>
        $('#barCode_table').DataTable({
            "language": {
                "lengthMenu": "Show _MENU_",
            },
            "dom": "<'row'" +
                "<'col-sm-6 d-flex align-items-center justify-conten-start'l>" +
                "<'col-sm-6 d-flex align-items-center justify-content-end'f>" +
                ">" +
                "<'table-responsive'tr>" +
                "<'row'" +
                "<'col-sm-12 col-md-5 d-flex align-items-center justify-content-center justify-content-md-start'i>" +
                "<'col-sm-12 col-md-7 d-flex align-items-center justify-content-center justify-content-md-end'p>" +
                ">"
        });
    </script>
@endpush

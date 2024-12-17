<x-app-layout :title="'My All Invoices'">
    <div class="row mt-5">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body d-flex justify-content-between align-items-center">
                    <h2 class="mb-0">Manage All Invoices</h2>
                    <h3 class="bg-info p-3 text-white mb-0">Total: <span
                            class="text-warning">{{ $invoices->count() }}</span> Invoices</h3>
                </div>
            </div>
        </div>
        <div class="col-lg-12">
            <div class="card card-p-0 card-flush p-3 mt-5">
                <div class="card-body">
                    <div>
                        <table
                            class="table align-middle border rounded table-row-dashed table-striped table-hover fs-6 g-5"
                            id="kt_datatable_example">
                            <thead>
                                <tr>
                                    <th>Invoice No</th>
                                    <th>Service Name</th>
                                    <th>Start Date</th>
                                    <th>End Date</th>
                                    <th>Total</th>
                                    <th class="text-center">Download</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($invoices as $invoice)
                                    <tr>
                                        <td>{{ $invoice->number }}</td>
                                        <td>{{ $invoice->lines->data[0]->description }}</td>
                                        <td>{{ \Carbon\Carbon::createFromTimestamp($invoice->created)->toFormattedDateString() }}
                                        </td>
                                        <td>{{ \Carbon\Carbon::createFromTimestamp($invoice->lines->data[0]->period->end)->toFormattedDateString() }}
                                        </td>
                                        <td>${{ number_format($invoice->total / 100, 2) }}</td>
                                        <td class="text-center">
                                            <a class="btn btn-info btn-sm" data-bs-toggle="modal"
                                                data-bs-target="#invoiceViewModal_{{ $invoice->id }}">View Details</a>
                                            {{-- <a href="{{ $invoice->invoice_pdf }}" target="_blank"
                                                class="btn btn-primary btn-sm">Download</a> --}}
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @foreach ($invoices as $invoice)
        <div class="modal fade" id="invoiceViewModal_{{ $invoice->id }}" data-backdrop="static" tabindex="-1"
            aria-labelledby="invoiceModalLabel{{ $invoice->id }}" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg">
                <div class="modal-content rounded-0 border-0 shadow-sm">
                    <!-- Modal Header -->
                    {{-- <div class="modal-header d-flex justify-content-between align-items-center">
                        <div>
                            <img src="{{ asset('images/logo.png') }}" alt="Company Logo" style="height: 50px;">
                        </div>
                        <h5 class="modal-title" id="invoiceModalLabel{{ $invoice->id }}">Invoice Details</h5>
                        <div class="btn btn-icon btn-sm btn-active-light-primary ms-2" data-bs-dismiss="modal"
                            aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </div>
                    </div> --}}

                    <!-- Modal Body -->
                    <div class="modal-body">
                        <div id="kt_app_content" class="app-content flex-column-fluid">
                            <div class="card">
                                <div class="card-body" id="invoiceCard">
                                    <div class="mw-lg-950px mx-auto w-100">
                                        <div class="d-flex justify-content-between flex-column flex-sm-row mb-19">
                                            <div class="text-sm-start">
                                                <a href="#" class="d-block ms-sm-auto">
                                                    <img alt="Logo" src="{{ asset('images/logo.png') }}"
                                                        class="img-fluid" width="100px" />
                                                </a>
                                            </div>
                                            <div>
                                                <h4 class="fw-bolder text-sm-end text-gray-800 fs-2qx pe-5 pb-7">INVOICE
                                                </h4>
                                                <div class="text-sm-end fw-semibold fs-4 text-muted mt-7">
                                                    <div>169-22 Hillside Avenue, FL 2 Jamaica,</div>
                                                    <div>NY 11432 United States of America</div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="pb-12">
                                            <div class="d-flex flex-column gap-7 gap-md-10">
                                                <div class="fw-bold fs-2">
                                                    Dear {{ $invoice->customer_name }} <span
                                                        class="fs-6">({{ $invoice->customer_email }})</span>,
                                                    <br>
                                                    <span class="text-muted fs-5">Here are your order details. We thank
                                                        you for your purchase.</span>
                                                </div>
                                                <div class="separator"></div>
                                                <div class="d-flex flex-column flex-sm-row gap-7 gap-md-10 fw-bold">
                                                    <div class="flex-root d-flex flex-column">
                                                        <span class="text-muted">Invoice ID</span>
                                                        <span class="fs-5">{{ $invoice->number }}</span>
                                                    </div>
                                                    <div class="flex-root d-flex flex-column">
                                                        <span class="text-muted">Start Date</span>
                                                        <span
                                                            class="fs-5">{{ \Carbon\Carbon::createFromTimestamp($invoice->created)->toFormattedDateString() }}</span>
                                                    </div>
                                                    <div class="flex-root d-flex flex-column">
                                                        <span class="text-muted">End Date</span>
                                                        <span
                                                            class="fs-5">{{ \Carbon\Carbon::createFromTimestamp($invoice->lines->data[0]->period->end)->toFormattedDateString() }}</span>
                                                    </div>
                                                </div>

                                                <div class="d-flex justify-content-between flex-column">
                                                    <div class="table-responsive border-bottom mb-9">
                                                        <table
                                                            class="table align-middle table-row-dashed fs-6 gy-5 mb-0">
                                                            <thead>
                                                                <tr class="border-bottom fs-6 fw-bold text-muted">
                                                                    <th class="pb-2">SL</th>
                                                                    <th class="pb-2">Products</th>
                                                                    <th class="text-end pb-2">Status</th>
                                                                    <th class="text-end pb-2">Total</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody class="fw-semibold text-gray-600">
                                                                @foreach ($invoice->lines->data as $line)
                                                                    <tr>
                                                                        <td class="text-start">{{ $loop->iteration }}
                                                                        </td>
                                                                        <td>
                                                                            <div class="d-flex align-items-center">
                                                                                <div>
                                                                                    <div class="fw-bold">
                                                                                        {{ $line->description }}</div>
                                                                                    <div class="fs-7 text-muted">
                                                                                        {{ \Carbon\Carbon::createFromTimestamp($invoice->created)->toFormattedDateString() }}
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </td>
                                                                        <td class="text-end">
                                                                            {{ ucfirst($invoice->status) }}</td>
                                                                        <td class="text-end">
                                                                            ${{ number_format($invoice->total / 100, 2) }}
                                                                        </td>
                                                                    </tr>
                                                                @endforeach
                                                                <tr>
                                                                    <td colspan="3" class="text-end">VAT (0%)</td>
                                                                    <td class="text-end">$0.00</td>
                                                                </tr>
                                                                <tr>
                                                                    <td colspan="3"
                                                                        class="fs-3 text-gray-900 fw-bold text-end">
                                                                        Grand Total</td>
                                                                    <td class="text-gray-900 fs-3 fw-bolder text-end">
                                                                        ${{ number_format($invoice->total / 100, 2) }}
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Policy Section -->
                                        <div class="pb-10">
                                            <h5 class="fw-bold text-gray-800 mb-3">Policy</h5>
                                            <ul class="fs-6 text-gray-600">
                                                <li>All formats are valid for the duration mentioned on the invoice.
                                                </li>
                                                <li>Lost or damaged NFC cards will incur a replacement fee.</li>
                                                <li>Do not share your QR code, barcode, or NFC card with unauthorized
                                                    individuals.</li>
                                                <li>For support, contact us at <a
                                                        href="mailto:goflixza@gmail.com">goflixza@gmail.com</a>.</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <!-- Buttons -->
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="my-1 me-5">
                                        <button type="button" class="btn btn-info my-1 me-12" onclick="printInvoice()">
                                            <i class="fa-solid fa-print pe-3"></i> Print Invoice
                                        </button>
                                    </div>
                                    <div class="my-1 me-5">
                                        <button type="button" class="btn btn-success my-1" onclick="downloadPDF()">
                                            <i class="fa-solid fa-file-arrow-down pe-3"></i> Download Invoice as PDF
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
    @push('scripts')
        <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.9.2/html2pdf.bundle.min.js"></script>
        <script>
            function printInvoice() {
                var printContents = document.getElementById("invoiceCard").innerHTML; // Target card content
                var originalContents = document.body.innerHTML;

                document.body.innerHTML = printContents;
                window.print();
                document.body.innerHTML = originalContents; // Restore original content
                window.location.reload(); // Reload to ensure JS functionality is not broken
            }

            function downloadPDF() {
                const element = document.getElementById('invoiceCard'); // Target the invoice card
                const opt = {
                    margin: 0.5,
                    filename: 'invoice.pdf',
                    image: {
                        type: 'jpeg',
                        quality: 0.98
                    },
                    html2canvas: {
                        scale: 2
                    },
                    jsPDF: {
                        unit: 'in',
                        format: 'letter',
                        orientation: 'portrait'
                    }
                };

                html2pdf().set(opt).from(element).save();
            }
        </script>
    @endpush
</x-app-layout>

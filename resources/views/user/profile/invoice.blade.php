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
                                            <a href="{{ $invoice->invoice_pdf }}" target="_blank"
                                                class="btn btn-primary btn-sm">Download</a>
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
                    <div class="modal-header d-flex justify-content-between align-items-center">
                        <div>
                            <!-- Company Logo (replace with your logo URL) -->
                            <img src="{{ asset('images/logo.png') }}" alt="Company Logo" style="height: 50px;">
                        </div>
                        <h5 class="modal-title" id="invoiceModalLabel{{ $invoice->id }}">Invoice Details</h5>
                        <div class="btn btn-icon btn-sm btn-active-light-primary ms-2" data-bs-dismiss="modal"
                            aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </div>
                    </div>

                    <!-- Modal Body -->
                    <div class="modal-body">
                        <div class="row">
                            <!-- Invoice Information -->
                            <div class="col-md-6">
                                <h6><strong>Invoice No:</strong> {{ $invoice->number }}</h6>
                                <p><strong>Date:</strong>
                                    {{ \Carbon\Carbon::createFromTimestamp($invoice->created)->toFormattedDateString() }}
                                </p>
                                <p><strong>Status:</strong> {{ ucfirst($invoice->status) }}</p>
                            </div>
                            <div class="col-md-6 text-md-end">
                                <h6><strong>Customer:</strong></h6>
                                <p>{{ $invoice->customer_name }} ({{ $invoice->customer_email }})</p>
                                <p><strong>Total:</strong> ${{ number_format($invoice->total / 100, 2) }}</p>
                            </div>
                        </div>

                        <!-- Items List -->
                        <h5 class="mt-4">Items</h5>
                        <ul>
                            @foreach ($invoice->lines->data as $line)
                                <li>{{ $line->description }}: ${{ number_format($line->amount / 100, 2) }}</li>
                            @endforeach
                        </ul>

                        <!-- Invoice PDF Link -->
                        <h5 class="mt-4">Invoice PDF</h5>
                        <a href="{{ $invoice->invoice_pdf }}" target="_blank" class="btn btn-primary btn-sm">
                            <i class="bi bi-file-earmark-pdf"></i> Download PDF
                        </a>
                    </div>

                    <!-- Modal Footer -->
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
    @endforeach

    @push('scripts')
    @endpush
</x-app-layout>

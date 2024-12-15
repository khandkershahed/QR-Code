<x-app-layout :title="'My All Invoices'">
    <div class="row mt-5">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body d-flex justify-content-between align-items-center">
                    <h2 class="mb-0">Manage All Invoices</h2>
                    <h3 class=" bg-info p-3 text-white mb-0">Total : {{ $invoices->count() }} </h3>
                </div>
            </div>
        </div>
        <div class="col-lg-12">
            <div class="card card-p-0 card-flush p-3 mt-5">
                <div class="card-body">
                    <div>
                        <table
                            class="table align-middle border rounded table-row-dashed table-striped table-hover  fs-6 g-5"
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
                                @forelse ($invoices as $invoice)
                                    <tr>
                                        <td>{{ $invoice->number }}</td>
                                        <td>{{ $invoice->stripe_product ?? 'No name found' }}</td>
                                        <td>{{ $invoice->date()->toFormattedDateString() }}</td>
                                        <td>{{ $invoice->date()->toFormattedDateString() }}</td>
                                        <td>{{ $invoice->total() }}</td>
                                        <td class="text-center">
                                            <a class="btn btn-info btn-sm" data-bs-toggle="modal"
                                                data-bs-target="#invoiceViewModal_{{ $invoice->id }}">View Details</a>
                                            <a href="{{ $invoice->invoice_pdf }}" target="_blank"
                                                class="btn btn-primary btn-sm">Download</a>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="3">No invoices found.</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @foreach ($invoices as $invoice)
        <div class="modal fade" id="invoiceViewModal_{{ $invoice->id }}" data-backdrop="static">
            <div class="modal-dialog modal-dialog-centered modal-lg">
                <div class="modal-content rounded-0 border-0 shadow-sm">
                    <div class="modal-header">
                        <h5 class="modal-title" id="invoiceModalLabel{{ $invoice->id }}">Invoice Details</h5>
                        <div class="btn btn-icon btn-sm btn-active-light-primary ms-2" data-bs-dismiss="modal"
                            aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </div>
                    </div>
                    <div class="modal-body">
                        <p><strong>Invoice:</strong> {{ $invoice->number }}</p>
                        <p><strong>Date:</strong> {{ $invoice->date()->toFormattedDateString() }}</p>
                        <p><strong>Total:</strong> {{ $invoice->total() }}</p>
                        <p><strong>Total:</strong> {{ $invoice->stripe_title }}</p>
                        <p><strong>Status:</strong> {{ $invoice->status }}</p>
                        <p><strong>Customer:</strong> {{ $invoice->customer_name }} ({{ $invoice->customer_email }})
                        </p>
                        <h5>Items</h5>
                        <ul>
                            @foreach ($invoice->lines->data as $line)
                                <li>{{ $line->description }}: $ {{ $line->amount / 100 }}</li>
                            @endforeach
                        </ul>
                        <h5>Invoice PDF</h5>
                        <a href="{{ $invoice->invoice_pdf }}" target="_blank">Download PDF</a>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- Invoice Details Modal -->
    @endforeach
    @push('scripts')
    @endpush
</x-app-layout>

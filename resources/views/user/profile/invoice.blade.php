<x-app-layout :title="'My All Invoices'">
    <div class="row">
        <div class="col-lg-12">

            {{-- <div id="kt_app_content" class="app-content  flex-column-fluid ">
                <div id="kt_app_content_container" class="app-container  container-lg  ">
                    <div class="card">
                        <div class="card-body p-5">
                            <div class="mx-auto px-2">
                                <div class="d-flex justify-content-between flex-column flex-sm-row mb-19">
                                    <div class="text-sm-start">
                                        <h4 class="fw-bolder text-gray-800 fs-2qx pe-5 pb-7">INVOICE</h4>
                                        <div class="text-sm-start fw-semibold fs-4 text-muted mt-2">
                                            <div>GoQR <br> 711-2880 Nulla St, Mankato</div>
                                            <div>{{ date('d-m-y') }}</div>
                                            <div>255545488</div>
                                        </div>
                                    </div>
                                    <div class="text-sm-end">
                                        <a href="#">
                                            <img alt="Logo" class="img-fluid" width="150px"
                                                src="https://preview.keenthemes.com/metronic8/demo1/assets/media/svg/brand-logos/duolingo.svg">
                                        </a>
                                        <div class="text-sm-end fw-semibold fs-4 text-muted mt-7">
                                            <div>{{ Auth::user()->name }} <br> 711-2880 Nulla St, Mankato</div>
                                            <div>{{ date('d-m-y') }}</div>
                                            <div>255545488</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="border-bottom pb-12">
                                    <div class="d-flex flex-row-fluid bgi-no-repeat bgi-position-x-center bgi-size-cover card-rounded  h-150px h-lg-250px mb-lg-20"
                                        style="background-image: url(https://preview.keenthemes.com/metronic8/demo1/assets/media/misc/pattern-4.jpg)">
                                    </div>
                                    <div class="d-flex justify-content-between flex-column flex-md-row">
                                        <div class="flex-grow-1 pt-8 mb-13">
                                            <div class="table-responsive border-bottom mb-14">
                                                <table class="table">
                                                    <thead>
                                                        <tr
                                                            class="border-bottom fs-6 fw-bold text-muted text-uppercase">
                                                            <th class="min-w-175px pb-9">Description</th>
                                                            <th class="min-w-70px pb-9 text-end">Hours</th>
                                                            <th class="min-w-80px pb-9 text-end">Rate</th>
                                                            <th class="min-w-100px pe-lg-6 pb-9 text-end">Amount</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr class="fw-bold text-gray-700 fs-5 text-end">
                                                            <td class="d-flex align-items-center pt-11">
                                                                <i class="fa fa-genderless text-danger fs-1 me-2"></i>

                                                                Creative Design
                                                            </td>

                                                            <td class="pt-11">80</td>
                                                            <td class="pt-11">$40.00</td>
                                                            <td class="pt-11 fs-5 pe-lg-6 text-gray-900 fw-bolder">
                                                                $3200.00</td>
                                                        </tr>
                                                        <tr class="fw-bold text-gray-700 fs-5 text-end">
                                                            <td class="d-flex align-items-center">
                                                                <i class="fa fa-genderless text-success fs-1 me-2"></i>

                                                                Logo Design
                                                            </td>

                                                            <td>120</td>
                                                            <td>$40.00</td>
                                                            <td class="fs-5 text-gray-900 fw-bolder pe-lg-6">$4800.00
                                                            </td>
                                                        </tr>
                                                        <tr class="fw-bold text-gray-700 fs-5 text-end">
                                                            <td class="d-flex align-items-center pb-10">
                                                                <i class="fa fa-genderless text-primary fs-1 me-2"></i>

                                                                Web Development
                                                            </td>

                                                            <td>210</td>
                                                            <td>$60.00</td>
                                                            <td class="fs-5 text-gray-900 fw-bolder pe-lg-6">$12600.00
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                            <div class="d-flex flex-column mw-md-300px w-100">
                                                <div class="fw-bold fs-5 mb-3 text-gray-90000">BANK TRANSFER</div>

                                                <div class="d-flex flex-stack text-gray-800 mb-3 fs-6">
                                                    <div class="fw-semibold pe-5">Account Name:</div>

                                                    <div class="text-end fw-norma">Barclays UK</div>
                                                </div>

                                                <div class="d-flex flex-stack text-gray-800 mb-3 fs-6">
                                                    <div class="fw-semibold pe-5">Account Number:</div>

                                                    <div class="text-end fw-norma">1234567890934</div>
                                                </div>

                                                <div class="d-flex flex-stack text-gray-800 fs-6">
                                                    <div class="fw-semibold  pe-5">Code:</div>

                                                    <div class="text-end fw-norma">BARC0032UK</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="border-end d-none d-md-block mh-450px mx-9"></div>
                                        <div class="text-end pt-10">
                                            <div class="fs-3 fw-bold text-muted mb-3">TOTAL AMOUNT</div>

                                            <div class="fs-xl-2x fs-2 fw-bolder">$20,600.00</div>

                                            <div class="text-muted fw-semibold">Taxes included</div>

                                            <div class="border-bottom w-100 my-7 my-lg-16"></div>

                                            <div class="text-gray-600 fs-6 fw-semibold mb-3">INVOICE TO.</div>

                                            <div class="fs-6 text-gray-800 fw-semibold mb-8">Iris Watson.<br>Fredrick
                                                Nebraska 20620 </div>

                                            <div class="text-gray-600 fs-6 fw-semibold mb-3">INVOICE NO.</div>

                                            <div class="fs-6 text-gray-800 fw-semibold mb-8">56758</div>

                                            <div class="text-gray-600 fs-6 fw-semibold mb-3">DATE</div>

                                            <div class="fs-6 text-gray-800 fw-semibold">12 May, 2020</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="mt-lg-20 pt-13">
                                    <div class="my-1 text-end ">
                                        <button type="button" class="btn btn-success my-1 me-12"
                                            onclick="window.print();">Print Invoice</button>
                                        <button type="button" class="btn btn-info my-1">Upgrade Plan</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> --}}
        </div>
        <div class="col-lg-12">
            <div class="card card-p-0 card-flush p-3 mt-10">
                <div class="card-header align-items-center py-5 gap-2 gap-md-5">
                    <div class="card-title">
                        <h2 class="mb-0">Manage All Invoices | Total : {{ $invoices->count() }} </h2>
                    </div>

                </div>
                <div class="card-body">
                    <div>
                        <table
                            class="table align-middle border rounded table-row-dashed table-striped table-hover  fs-6 g-5"
                            id="kt_datatable_example">
                            <thead>
                                <tr>
                                    <th>Date</th>
                                    <th>Total</th>
                                    <th>Download</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($invoices as $invoice)
                                    <tr>
                                        <td>{{ $invoice->date()->toFormattedDateString() }}</td>
                                        <td>{{ $invoice->total() }}</td>
                                        <td>
                                            <a class="btn btn-info" data-bs-toggle="modal" data-bs-target="#invoiceViewModal_{{ $invoice->id }}">View Details</a>
                                            <a href="{{ $invoice->invoice_pdf }}" target="_blank"
                                                class="btn btn-primary">Download</a>
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
                        <p><strong>ID:</strong> {{ $invoice->id }}</p>
                        <p><strong>Date:</strong> {{ $invoice->date()->toFormattedDateString() }}</p>
                        <p><strong>Total:</strong> {{ $invoice->total() }}</p>
                        <p><strong>Status:</strong> {{ $invoice->status }}</p>
                        <p><strong>Customer:</strong> {{ $invoice->customer_name }} ({{ $invoice->customer_email }})
                        </p>
                        <h5>Items</h5>
                        <ul>
                            @foreach ($invoice->lines->data as $line)
                                <li>{{ $line->description }}: {{ $line->amount }}</li>
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

<x-admin-app-layout :title="'User Subscriptions - Admin Panel'">
    <div class="card rounded-0">
        <div class="card-header p-5 align-items-center rounded-0 bg-info m-0">
            <div>
                <h1 class="mb-0 mt-0 card-title fs-2 text-white">All Subscriptions</h1>
                <p class="text-white mt-2 mb-0">View and manage all subscription information on this page.</p>
            </div>
        </div>
        <div class="card-body p-0">
            <div class="table-responsive">
                <table id="kt_datatable_dom_positioning" class="table my-datatable table-striped table-row-bordered mt-0">
                    <thead>
                        <tr class="text-startz bg-info text-white fw-bolder fs-7 text-uppercase gs-0">
                            <th width="5%" class="text-center">Sl</th>
                            <th width="20%">Plan Name</th>
                            <th width="15%">User Name</th>
                            <th width="15%">Price</th>
                            <th width="15%">Start Date</th>
                            <th width="15%">End Date</th>
                            <th width="10%" class="text-center">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($subscriptionsWithInvoices as $index => $item)
                            <tr>
                                <td class="text-center">{{ $index + 1 }}</td>
                                <td>{{ $item['subscription']->plan->title }}</td>
                                <td>{{ $item['subscription']->user->name ?? 'N/A' }}</td>
                                <td>{{ $item['subscription']->plan->price }}</td>
                                <td>{{ $item['subscription']->created_at }}</td>
                                <td>{{ $item['subscription']->subscription_ends_at ?? 'N/A' }}</td>
                                <td class="text-center">
                                    <button class="btn btn-sm fw-bold btn-info" data-bs-toggle="collapse"
                                        data-bs-target="#invoices-{{ $item['subscription']->id }}"
                                        aria-expanded="false">
                                        <i class="fas fa-eye pe-2"></i>Invoices
                                    </button>
                                </td>
                            </tr>
                            <tr class="collapse" id="invoices-{{ $item['subscription']->id }}">
                                <td colspan="7">
                                    {{-- <table class="table table-striped align-middle mb-0 bg-primary">
                                        <thead>
                                            <tr class="text-white fw-bolder fs-7 text-uppercase">
                                                <th width="5%" class="text-center">Sl</th>
                                                <th width="25%" class="text-center">Invoice ID</th>
                                                <th width="25%" class="text-center">Amount</th>
                                                <th width="25%" class="text-center">Date</th>
                                                <th width="20%" class="text-end">Download</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @forelse ($item['invoices'] as $invoice)
                                                <tr>
                                                    <td class="text-center">{{ $loop->iteration }}</td>
                                                    <td class="text-center">{{ $invoice->id }}</td>
                                                    <td class="text-center">{{ $invoice->amount }}</td>
                                                    <td class="text-center">
                                                        {{ $invoice->date()->toFormattedDateString() }}
                                                    </td>
                                                    <td class="text-end">
                                                        <a href="{{ $invoice->invoice_pdf }}" target="_blank"
                                                            class="btn btn-sm btn-primary">Download</a>
                                                    </td>
                                                </tr>
                                            @empty
                                                <tr>
                                                    <td colspan="5" class="text-center">No invoices found for this
                                                        subscription.</td>
                                                </tr>
                                            @endforelse
                                        </tbody>
                                    </table> --}}
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="7" class="text-center">No active subscriptions found.</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    @push('scripts')
        <script>
            if (!$.fn.DataTable.isDataTable("#kt_datatable_dom_positioning")) {
                $("#kt_datatable_dom_positioning").DataTable({
                    "language": {
                        "lengthMenu": "Show _MENU_",
                    },
                    "dom": "<'row mb-2'" +
                        "<'col-sm-6 d-flex align-items-center justify-conten-start dt-toolbar'l>" +
                        "<'col-sm-6 d-flex align-items-center justify-content-end dt-toolbar'f>" +
                        ">" +
                        "<'table-responsive'tr>" +
                        "<'row'" +
                        "<'col-sm-12 col-md-5 d-flex align-items-center justify-content-center justify-content-md-start'i>" +
                        "<'col-sm-12 col-md-7 d-flex align-items-center justify-content-center justify-content-md-end'p>" +
                        ">"
                });
            }
        </script>
    @endpush
</x-admin-app-layout>

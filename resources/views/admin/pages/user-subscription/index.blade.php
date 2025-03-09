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
                            <th width="10%">Plan Name</th>
                            <th width="15%">Service Name</th>
                            <th width="20%">User Name</th>
                            <th width="10%">Price</th>
                            <th width="15%">Start Date</th>
                            <th width="15%">End Date</th>
                            <th width="10%" class="text-center">Expire & Invoices</th>
                        </tr>

                    </thead>
                    <tbody>
                        @forelse ($subscriptionsWithInvoices as $index => $item)
                            <tr>
                                <td class="text-center">{{ $index + 1 }}</td>
                                <td>{{ $item['subscription']->plan->title }}</td>
                                <td>{{ $item['subscription']->plan->name ?? "N/A"}}</td>
                                <td>{{ $item['subscription']->user->name ?? 'N/A' }}</td>
                                <td>{{ $item['subscription']->plan->price }}</td>
                                <td>{{ \Carbon\Carbon::parse($item['subscription']->created_at)->format('d-F-Y h:i:s A') }}</td>
                                <td>{{ \Carbon\Carbon::parse($item['subscription']->subscription_ends_at)->format('d-F-Y h:i:s A') }}</td>
                                <td class="text-center">
                                    @if ($item['invoices']->isNotEmpty())
                                        <select class="form-select form-select-sm" onchange="window.open(this.value, '_blank')">
                                            <option>Click To Download</option>
                                            @foreach ($item['invoices'] as $invoice)
                                                <option value="{{ $invoice->invoice_pdf }}">
                                                    {{ $invoice->date()->toFormattedDateString() }}->{{ $invoice->id }}</option>
                                            @endforeach
                                        </select>
                                    @else
                                        <span class="text-muted">No invoices</span>
                                    @endif
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

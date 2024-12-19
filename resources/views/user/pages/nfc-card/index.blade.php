<x-app-layout :title="'V-Card List'">

    <div class="row">
        <div class="col-lg-12">
            <div class="d-flex align-items-center rounded py-5 px-5 bg-light-primary mt-5 mt-lg-0" style="border: 1px dashed blue;">
                <i class="fa-solid fa-information-5 fs-3x text-warning me-5">
                    <span class="path1"></span><span class="path2"></span><span class="path3"></span>
                </i>
                <!--begin::Description-->
                <div class="d-flex justify-content-between align-items-center w-100">
                    <div class="text-gray-700 fw-bold d-flex ">
                        @if (!empty($subscription->plan))
                            <strong class=""> Total Created V-Card: {{ $nfc_cards->count() }}|| V-Card Limitation:
                                {{ $subscription->plan->nfc }}|| V-Card Remaining:
                                {{ $subscription->plan->nfc - $nfc_cards->count() }}||Total Created V-Card:
                                {{ $nfc_cards->count() }}
                            </strong>
                        @else
                            <strong class="">Total Created V-Card: {{ $nfc_cards->count() }} ||
                                QR Limitation: 10 (Trial Period)|| V-Card Remaining:
                                {{ 10 - $nfc_cards->count() }}</strong>
                        @endif
                    </div>
                    <div>
                        @if (!empty($subscription->plan))
                            @if ($subscription->plan->nfc - $nfc_cards->count() > 0)
                                <a href="{{ route('user.virtual-card.create') }}"
                                    class="btn btn-sm btn-primary rounded-2 me-3">
                                    Create V-Card
                                </a>
                            @endif
                        @else
                            @if (10 - $nfc_cards->count() > 0)
                                <a href="{{ route('user.virtual-card.create') }}"
                                    class="btn btn-sm btn-primary rounded-2 me-3">
                                    Create V-Card
                                </a>
                            @endif
                        @endif
                    </div>
                </div>
            </div>
        </div>


        @include('nfc.nfc_index_partial')
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
                    // Check if the DataTable is already initialized
                    if ($.fn.DataTable.isDataTable(table)) {
                        // Destroy the existing instance
                        $(table).DataTable().destroy();
                    }

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
                        table = document.querySelector('#nfc_card_admin');

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

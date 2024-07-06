<div class="col-lg-12 mt-10">
    <div class="card card-p-0 card-flush p-3 pt-0">
        <div class="card-body table-responsive">
            <table class="table align-middle border rounded table-row-dashed table-striped table-hover  fs-6 g-5"
                id="nfc_card_admin">
                <thead>
                    <tr class="text-gray-500 fw-bold fs-7 text-uppercase">
                        <th width="5%">SL</th>
                        <th width="20%">Image</th>
                        {{-- <th width="10%">Virtual Card</th> --}}
                        <th width="25%">Name </th>
                        <th width="15%">Link</th>
                        <th width="15%">QR</th>
                        <th width="15%" class="text-center">Action</th>
                    </tr>
                </thead>
                <tbody class="fw-semibold text-gray-600">
                    @foreach ($nfc_cards as $nfc_card)
                        <tr>
                            <td>
                                {{ $loop->iteration }}
                            </td>
                            <td>
                                <div class="d-flex align-items-center">
                                    <div class="image image-circle image-mini me-3">
                                        @if ($nfc_card->nfc_template == 'template-one')
                                            <img class="img-fluid w-45px"
                                                src="{{ asset('frontend/assets/images/nfc-templates/template_one.jpg') }}"
                                                alt="">
                                        @elseif ($nfc_card->nfc_template == 'template-two')
                                            <img class="img-fluid w-45px"
                                                src="{{ asset('frontend/assets/images/nfc-templates/template_two.jpg') }}"
                                                alt="">
                                        @elseif ($nfc_card->nfc_template == 'template-three')
                                            <img class="img-fluid w-45px"
                                                src="{{ asset('frontend/assets/images/nfc-templates/template_three.jpg') }}"
                                                alt="">
                                        @elseif ($nfc_card->nfc_template == 'template-four')
                                            <img class="img-fluid w-45px"
                                                src="{{ asset('frontend/assets/images/nfc-templates/template_four.jpg') }}"
                                                alt="">
                                        @elseif ($nfc_card->nfc_template == 'template-five')
                                            <img class="img-fluid w-45px"
                                                src="{{ asset('frontend/assets/images/nfc-templates/template_five.jpg') }}"
                                                alt="">
                                        @elseif ($nfc_card->nfc_template == 'template-six')
                                            <img class="img-fluid w-45px"
                                                src="{{ asset('frontend/assets/images/nfc-templates/template_six.jpg') }}"
                                                alt="">
                                        @endif
                                    </div>
                                    <div class="d-flex flex-column">
                                        @if (strpos(Route::current()->getName(), 'user.') === 0)
                                            <a href="{{ route('user.virtual-card.edit', $nfc_card->code) }}"
                                                class="mb-1 text-decoration-none fs-6">
                                                {{ $nfc_card->vcard_name }}
                                            </a>
                                        @else
                                            <a href="{{ route('admin.virtual-card.edit', $nfc_card->code) }}"
                                                class="mb-1 text-decoration-none fs-6">
                                                {{ $nfc_card->vcard_name }}
                                            </a>
                                        @endif

                                        <span class="fs-6">{{ $nfc_card->designation }}</span>
                                    </div>
                                </div>

                            </td>

                            <td>
                                <div class="text-success">{{ optional($nfc_card->nfcData)->first_name }}
                                    {{ optional($nfc_card->nfcData)->last_name }}
                                </div>
                            </td>
                            <td>
                                <a href="{{ $nfc_card->nfc_url }}" target="_blank" class="text-primary">
                                    <button class="btn btn-sm btn-info">NFC <i class="fas fa-link ps-2"></i></button>
                                </a>
                            </td>
                            <td>
                                <a href="javascript:void(0)" data-bs-toggle="modal"
                                    data-bs-target="#virtual_card_modal_{{ $nfc_card->id }}" class="text-primary">
                                    <button class="btn btn-sm btn-info"><i class="fas fa-eye pe-2"></i>
                                        QR</button>
                                </a>
                            </td>

                            <td class="pe-0 text-center">
                                <a href="#" class="btn btn-light-primary btn-active-light-primary btn-sm"
                                    data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end"
                                    data-kt-menu-flip="top-end">
                                    Actions
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

                                    <div class="menu-item px-3">

                                        <a href="{{ route('user.nfc-card.show', $nfc_card->code) }}"
                                            class="menu-link px-3">
                                            All messages
                                        </a>
                                    </div>
                                    <div class="menu-item px-3">
                                        <a href="{{ route('user.nfc-card.edit', $nfc_card->code) }}"
                                            class="menu-link px-3">
                                            Edit
                                        </a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>



@foreach ($nfc_cards as $nfc_card)
    <div class="modal fade" tabindex="-1" id="message_modal_{{ $nfc_card->id }}">
        <div class="modal-dialog modal-xl">
            <div class="modal-content position-absolute">
                <div class="modal-header">
                    <h5 class="modal-title">All Messages of your NFC</h5>


                    <div class="btn btn-icon btn-sm btn-active-light-primary ms-2" data-bs-dismiss="modal"
                        aria-label="Close">
                        <i class="ki-duotone ki-cross fs-2x"><span class="path1"></span><span
                                class="path2"></span></i>
                    </div>

                </div>

                <div class="modal-body">
                    <div class="card">
                        <table
                            class="table align-middle border rounded table-row-dashed table-striped table-hover  fs-6 g-5"
                            id="qr_code">
                            <thead>
                                <tr class="text-gray-500 fw-bold fs-7 text-uppercase">
                                    <th width="10%">NAME </th>
                                    <th width="15%">Email</th>
                                    <th width="8%">IP Address</th>
                                    <th width="57%">Message</th>
                                    <th width="10%">Action</th>
                                </tr>
                            </thead>
                            <tbody class="fw-semibold text-gray-600">
                                @foreach ($nfc_card->nfcMessages as $nfc_message)
                                    <tr>
                                        <td>
                                            {{ optional($nfc_message)->name }}
                                        </td>
                                        <td>
                                            <a href="mailto:{{ optional($nfc_message)->email }}"
                                                target="_blank">{{ optional($nfc_message)->email }}</a>

                                        </td>
                                        <td>
                                            {{ optional($nfc_message)->ip_address }}
                                        </td>
                                        <td>
                                            {{ optional($nfc_message)->message }}
                                        </td>
                                        <td class="pe-0">
                                            <a href="#" class="btn btn-light btn-active-light-primary btn-sm"
                                                data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end"
                                                data-kt-menu-flip="top-end">
                                                Actions
                                                <span class="svg-icon fs-5 m-0">
                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                        xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                                                        height="24px" viewBox="0 0 24 24" version="1.1">
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
                                                data-kt-menu="true" style="">





                                                <div class="menu-item px-3">
                                                    <a href="{{ route('individual-message.destroy', $nfc_message->id) }}"
                                                        class="menu-link px-3 delete">
                                                        Delete
                                                    </a>
                                                </div>

                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                    {{-- <button type="button" class="btn btn-primary">Save changes</button> --}}
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" tabindex="-1" id="virtual_card_modal_{{ $nfc_card->id }}">
        <div class="modal-dialog modal-dialog-centered modal-lg" style="max-width: 645px !important;">
            <div class="modal-content position-absolute">
                <div class="modal-body pb-0">
                    <style>
                        .punch-card-container {
                            width: 600px;
                            height: 300px;
                            border-radius: 8px;
                            background-repeat: no-repeat;
                            background-size: cover;
                            background-position: center;
                            box-shadow: rgba(0, 0, 0, 0.16) 0px 1px 4px;
                            text-align: center;
                            margin-bottom: 20px;
                        }

                        .punch-card-container-back {
                            width: 600px;
                            height: 300px;
                            border-radius: 8px;
                            background-repeat: no-repeat;
                            background-size: cover;
                            background-position: center;
                            box-shadow: rgba(0, 0, 0, 0.16) 0px 1px 4px;
                            text-align: center;
                            margin-bottom: 20px;
                        }

                        .text-start {
                            text-align: start;
                        }

                        .text-lg-start {
                            text-align: start !important;
                            /* Specific override for large screens */
                        }

                        .card_logo {
                            max-width: 100%;
                            height: 100px;
                            width: 100px;
                        }

                        .punch-card-logo-back-three {
                            width: 200px;
                        }

                        .card_name {
                            color: #fff;
                            font-size: 2rem;
                        }

                        .card_designation {
                            color: #fff;
                            font-size: 1.2rem;
                        }

                        .card_phone,
                        .card_email,
                        .card_address {
                            color: #fff;
                        }

                        .title-divider {
                            height: 2px;
                            width: 120px;
                            background-color: #fff;
                            margin: 0;
                        }

                        .nfc-text-title {
                            font-size: 4rem;
                            color: #fff;
                        }

                        .punch-card-container-back-one {
                            height: 33vh;
                            object-fit: fill;
                            background-repeat: no-repeat;
                            background-size: cover;
                            background-position: center;
                            border-radius: 5px;
                        }

                        /* Responsive adjustments */
                        @media (max-width: 992px) {
                            .text-lg-start {
                                text-align: center !important;
                            }
                        }

                        @media only screen and (min-width: 1368px) {
                            .punch-card-container {
                                width: 100%;
                                height: auto;
                                margin: auto;
                            }
                        }
                    </style>
                    <div class="card">
                        <div class="row">
                            <div class="col-lg-12 text-center">
                                <img class="img-fluid" src="{{ asset('storage/nfc/qrs/' . $nfc_card->nfc_qr) }}"
                                    alt="" />
                            </div>
                            <div class="col-lg-12">
                                <h5 class="text-center fw-bold"><a
                                        href="{{ asset('storage/nfc/qrs/' . $nfc_card->nfc_qr) }}"
                                        class="menu-link px-3" download>
                                        Download
                                    </a>
                                </h5>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="modal-footer border-0 pt-0">
                    <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" tabindex="-1" id="shipping_address_modal_{{ $nfc_card->id }}">
        <div class="modal-dialog modal-xl">
            <div class="modal-content position-absolute">
                <div class="modal-header">
                    <h5 class="modal-title">Card Shipping Address</h5>


                    <div class="btn btn-icon btn-sm btn-active-light-primary ms-2" data-bs-dismiss="modal"
                        aria-label="Close">
                        <i class="ki-duotone ki-cross fs-2x"><span class="path1">X</span><span
                                class="path2"></span></i>
                    </div>

                </div>

                <div class="modal-body">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-lg-7 mb-5">
                                    <x-metronic.label for="name" class="form-label">
                                        {{ __('Contact Person Name') }}
                                    </x-metronic.label>
                                    <h6 class="p-0 m-0">{{ optional($nfc_card->shippingDetails)->shipping_name }}
                                    </h6>
                                </div>
                                <div class="col-lg-5 mb-5">
                                    <x-metronic.label for="phone" class="form-label">
                                        {{ __('Phone') }}
                                    </x-metronic.label>
                                    <h6 class="p-0 m-0">
                                        {{ optional($nfc_card->shippingDetails)->shipping_phone }} </h6>
                                </div>
                                <div class="col-lg-8 mb-5">
                                    <x-metronic.label for="address" class="form-label">
                                        {{ __('Address') }}
                                    </x-metronic.label>
                                    <h6 class="p-0 m-0">
                                        {{ optional($nfc_card->shippingDetails)->shipping_address }} </h6>
                                </div>
                                <div class="col-lg-4 mb-5">
                                    <x-metronic.label for="city" class="form-label">
                                        {{ __('City') }}
                                    </x-metronic.label>
                                    <h6 class="p-0 m-0">{{ optional($nfc_card->shippingDetails)->shipping_city }}
                                    </h6>
                                </div>
                                <div class="col-lg-4 mb-5">
                                    <x-metronic.label for="state" class="form-label">
                                        {{ __('State') }}
                                    </x-metronic.label>
                                    <h6 class="p-0 m-0">
                                        {{ optional($nfc_card->shippingDetails)->shipping_state }} </h6>
                                </div>
                                <div class="col-lg-4 mb-5">
                                    <x-metronic.label for="zip_code" class="form-label">
                                        {{ __('Zip code') }}
                                    </x-metronic.label>
                                    <h6 class="p-0 m-0">
                                        {{ optional($nfc_card->shippingDetails)->shipping_zip_code }} </h6>
                                </div>
                                <div class="col-lg-4 mb-5">
                                    <x-metronic.label for="country" class="form-label">
                                        {{ __('Country') }}
                                    </x-metronic.label>
                                    <h6 class="p-0 m-0">
                                        {{ optional($nfc_card->shippingDetails)->shipping_country }} </h6>
                                </div>
                                <div class="col-lg-12 mb-5">
                                    <x-metronic.label for="instruction" class="form-label">
                                        {{ __('Instruction') }}
                                    </x-metronic.label>
                                    <h6 class="p-0 m-0">
                                        {{ optional($nfc_card->shippingDetails)->shipping_instruction }} </h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                    {{-- <button type="button" class="btn btn-primary">Save changes</button> --}}
                </div>
            </div>
        </div>
    </div>
@endforeach

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

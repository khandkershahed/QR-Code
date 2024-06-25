<x-app-layout :title="'NFC Card List'">
    <style>
        /* Add your custom CSS styles here */
        #epaper-container {
            position: relative;
        }

        #epaper-image {
            max-width: 100%;
            height: auto;
        }

        .area-tooltip {
            position: absolute;
            background-color: rgba(255, 255, 255, 0.8);
            padding: 5px;
            border: 1px solid #ccc;
            border-radius: 5px;
            display: none;
        }
    </style>
    <div class="row">
        <div class="col-lg-12">
            <div class="d-flex align-items-center rounded py-5 px-5 bg-light-primary" style="border: 1px dashed blue;">
                <i class="ki-duotone ki-information-5 fs-3x text-warning me-5">
                    <span class="path1"></span><span class="path2"></span><span class="path3"></span>
                </i>
                <!--begin::Description-->
                <div class="d-flex justify-content-between align-items-center w-100">
                    <div class="text-gray-700 fw-bold d-flex ">
                        @if (!empty($subscription->plan))
                            <strong class=""> Total Created NFC: {{ $nfc_cards->count() }}|| NFC Limitation:
                                {{ $subscription->plan->nfc }}|| NFC Remaining:
                                {{ $subscription->plan->nfc - $nfc_cards->count() }}||Total Created NFC:
                                {{ $nfc_cards->count() }}
                            </strong>
                        @else
                            <strong class="">Total Created NFC: {{ $nfc_cards->count() }} ||
                                QR Limitation: 10 (Trial Period)|| NFC Remaining:
                                {{ 10 - $nfc_cards->count() }}</strong>
                        @endif
                    </div>
                    <div>
                        @if (!empty($subscription->plan))
                            @if ($subscription->plan->nfc - $nfc_cards->count() > 0)
                                <a href="{{ route('user.nfc-card.create') }}"
                                    class="btn btn-sm btn-primary rounded-2 me-3">
                                    Create QR Codes
                                </a>
                            @endif
                        @else
                            @if (10 - $nfc_cards->count() > 0)
                                <a href="{{ route('user.nfc-card.create') }}"
                                    class="btn btn-sm btn-primary rounded-2 me-3">
                                    Create QR Codes
                                </a>
                            @endif
                        @endif
                    </div>
                </div>
            </div>
        </div>


        <div class="col-lg-12 mt-10">
            <div class="card card-p-0 card-flush p-3 pt-0">
                <div class="p-5 pb-2">
                    <h4 class="mb-0">View and manage your NFC Cards</h4>
                </div>
                <div class="card-body table-responsive">
                    <table
                        class="table align-middle border rounded table-row-dashed table-striped table-hover  fs-6 g-5"
                        id="nfc_card_admin">
                        <thead>
                            <tr class="text-gray-500 fw-bold fs-7 text-uppercase">
                                <th width="5%">SL</th>
                                <th width="10%">Image</th>
                                <th width="10%">Virtual Card</th>
                                <th width="25%">Name </th>
                                <th width="10%">Link</th>
                                <th width="10%">VCARD</th>
                                <th width="15%">Address</th>
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
                                        @if ($nfc_card->nfc_template == 'template-one')
                                            <img class="img-fluid w-50px"
                                                src="{{ asset('frontend/assets/images/nfc-templates/template_one.jpg') }}"
                                                alt="">
                                        @elseif ($nfc_card->nfc_template == 'template-two')
                                            <img class="img-fluid w-50px"
                                                src="{{ asset('frontend/assets/images/nfc-templates/template_two.jpg') }}"
                                                alt="">
                                        @elseif ($nfc_card->nfc_template == 'template-three')
                                            <img class="img-fluid w-50px"
                                                src="{{ asset('frontend/assets/images/nfc-templates/template_three.jpg') }}"
                                                alt="">
                                        @elseif ($nfc_card->nfc_template == 'template-four')
                                            <img class="img-fluid w-50px"
                                                src="{{ asset('frontend/assets/images/nfc-templates/template_four.jpg') }}"
                                                alt="">
                                        @elseif ($nfc_card->nfc_template == 'template-five')
                                            <img class="img-fluid w-50px"
                                                src="{{ asset('frontend/assets/images/nfc-templates/template_five.jpg') }}"
                                                alt="">
                                        @elseif ($nfc_card->nfc_template == 'template-six')
                                            <img class="img-fluid w-50px"
                                                src="{{ asset('frontend/assets/images/nfc-templates/template_six.jpg') }}"
                                                alt="">
                                        @endif
                                    </td>
                                    <td>
                                        @if (optional($nfc_card->virtualCard)->virtual_card_template == 'virtual-card-one')
                                            <img class="img-fluid w-50px"
                                                src="{{ asset('frontend/images/virtual_card/virtual_card_1.png') }}"
                                                alt="">
                                        @elseif (optional($nfc_card->virtualCard)->virtual_card_template == 'virtual-card-two')
                                            <img class="img-fluid w-50px"
                                                src="{{ asset('frontend/images/virtual_card/virtual_card_2.png') }}"
                                                alt="">
                                        @elseif (optional($nfc_card->virtualCard)->virtual_card_template == 'virtual-card-three')
                                            <img class="img-fluid w-50px"
                                                src="{{ asset('frontend/images/virtual_card/virtual_card_3.png') }}"
                                                alt="">
                                        @elseif (optional($nfc_card->virtualCard)->virtual_card_template == 'virtual-card-four')
                                            <img class="img-fluid w-50px"
                                                src="{{ asset('frontend/images/virtual_card/virtual_card_4.png') }}"
                                                alt="">
                                        @elseif (optional($nfc_card->virtualCard)->virtual_card_template == 'virtual-card-five')
                                            <img class="img-fluid w-50px"
                                                src="{{ asset('frontend/images/virtual_card/virtual_card_5.png') }}"
                                                alt="">
                                        @elseif (optional($nfc_card->virtualCard)->virtual_card_template == 'virtual-card-six')
                                            <img class="img-fluid w-50px"
                                                src="{{ asset('frontend/images/virtual_card/virtual_card_6.png') }}"
                                                alt="">
                                        @elseif (optional($nfc_card->virtualCard)->virtual_card_template == 'virtual-card-seven')
                                            <img class="img-fluid w-50px"
                                                src="{{ asset('frontend/images/virtual_card/virtual_card_7.png') }}"
                                                alt="">
                                        @elseif (optional($nfc_card->virtualCard)->virtual_card_template == 'virtual-card-eight')
                                            <img class="img-fluid w-50px"
                                                src="{{ asset('frontend/images/virtual_card/virtual_card_8.png') }}"
                                                alt="">
                                        @endif
                                    </td>
                                    <td>
                                        <div class="text-success">{{ optional($nfc_card->nfcData)->first_name }}
                                            {{ optional($nfc_card->nfcData)->last_name }}
                                        </div>
                                    </td>
                                    {{-- <td>
                                        <button class="btn btn-light-primary">94</button>
                                    </td> --}}
                                    <td>
                                        <a href="{{ $nfc_card->nfc_url }}" target="_blank" class="text-primary">
                                            <button class="btn btn-sm btn-info">NFC <i
                                                    class="fas fa-link ps-2"></i></button>
                                        </a>
                                    </td>
                                    <td>
                                        <a href="javascript:void(0)" data-bs-toggle="modal"
                                            data-bs-target="#virtual_card_modal_{{ $nfc_card->id }}"
                                            class="text-primary">
                                            <button class="btn btn-sm btn-info"><i class="fas fa-eye pe-2"></i>
                                                CARD</button>
                                        </a>
                                    </td>
                                    <td>
                                        <a href="javascript:void(0)" data-bs-toggle="modal"
                                            data-bs-target="#shipping_address_modal_{{ $nfc_card->id }}"
                                            class="text-primary">
                                            <button class="btn btn-sm btn-info"><i class="fas fa-eye pe-2"></i>
                                                Shipping</button>
                                        </a>
                                    </td>
                                    <td class="pe-0 text-center">
                                        <a href="#" class="btn btn-light-primary btn-active-light-primary btn-sm"
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
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                {{-- <a href="#" class="menu-link px-3" data-bs-toggle="modal"
                                                    data-bs-target="#message_modal_{{ $nfc_card->id }}">
                                                    All messages
                                                </a> --}}
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
                                            <!--end::Menu item-->

                                            <!--begin::Menu item-->
                                            {{-- <div class="menu-item px-3">
                                                <a href="{{ route('user.nfc-card.destroy', $nfc_card->id) }}"
                                                    class="menu-link px-3 delete">
                                                    Delete
                                                </a>
                                            </div> --}}
                                            <!--end::Menu item-->
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    {{-- Virtual Card Preview Modal Start  --}}

    {{-- Virtual Card Preview Modal End --}}
    @foreach ($nfc_cards as $nfc_card)
        <div class="modal fade" tabindex="-1" id="message_modal_{{ $nfc_card->id }}">
            <div class="modal-dialog modal-xl">
                <div class="modal-content position-absolute">
                    <div class="modal-header">
                        <h5 class="modal-title">All Messages of your NFC</h5>

                        <!--begin::Close-->
                        <div class="btn btn-icon btn-sm btn-active-light-primary ms-2" data-bs-dismiss="modal"
                            aria-label="Close">
                            <i class="ki-duotone ki-cross fs-2x"><span class="path1"></span><span
                                    class="path2"></span></i>
                        </div>
                        <!--end::Close-->
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
                                                <a href="#"
                                                    class="btn btn-light btn-active-light-primary btn-sm"
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
                                                    <!--begin::Menu item-->

                                                    <!--end::Menu item-->

                                                    <!--begin::Menu item-->
                                                    <div class="menu-item px-3">
                                                        <a href="{{ route('individual-message.destroy', $nfc_message->id) }}"
                                                            class="menu-link px-3 delete">
                                                            Delete
                                                        </a>
                                                    </div>
                                                    <!--end::Menu item-->
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
                            <div>
                                @if (optional($nfc_card->virtualCard)->virtual_card_template == 'virtual-card-one')
                                    <div class="row mt-5">
                                        <div class="col-12">
                                            <!-- Visiting Card Box Container -->
                                            <div class="punch-card-container mb-2"
                                                style="background-image: url({{ !empty(optional($nfc_card->virtualCard)->card_bg_front) ? asset('storage/nfc/' . optional($nfc_card->virtualCard)->card_bg_front) : asset('https://i.ibb.co/cgBNBXk/5073118.gif') }});">
                                                <div class="row p-5 align-items-center" style="height: 33vh;">
                                                    <div class="col-lg-6 text-center text-lg-start">
                                                        <div class="ps-lg-4">
                                                            <img class="punch-card-logo card_logo"
                                                                src="{{ asset('storage/nfc/' . optional($nfc_card->virtualCard)->card_logo) }}"
                                                                alt="Logo" style="width: 200px;background-size: contain;height: 100px;text-align: start;margin-bottom: 0px !important;display: flex;justify-content: start;position: relative;left: 0px;object-fit: contain;"/>
                                                        </div>
                                                        <div class="mt-4 mt-lg-0">
                                                            <img class="punch-card-qr"
                                                                src="https://i.ibb.co/M7KMQC0/qr.png"
                                                                alt="QR Code" style="width: 125px;height: 125px;object-fit: fill;" />
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6 mt-4 mt-lg-0">
                                                        <div class="text-center text-lg-end content-area">
                                                            <h4 class="fw-bold mb-0 card_name">
                                                                {{ optional($nfc_card->virtualCard)->card_name }}</h4>
                                                            <p class="fw-bold mb-0 card_designation">
                                                                {{ optional($nfc_card->virtualCard)->card_designation }}
                                                            </p>
                                                            <div class="me-auto mt-2 title-devider-tem-one"></div>
                                                            <div>
                                                                <p class="fw-bold pt-3 mb-0">
                                                                    <span
                                                                        class="card_phone">{{ optional($nfc_card->virtualCard)->card_phone }}</span>
                                                                    <i class="fas fa-phone tem-one-main-color "></i>
                                                                </p>
                                                                <p class="fw-bold mb-0">
                                                                    <span
                                                                        class="card_email">{{ optional($nfc_card->virtualCard)->card_email }}</span>
                                                                    <i class="fas fa-envelope tem-one-main-color "></i>
                                                                </p>
                                                            </div>
                                                            <div>
                                                                <p class="fw-bold mb-0">
                                                                    <span
                                                                        class="card_address">{{ optional($nfc_card->virtualCard)->card_address }}</span>
                                                                    <i
                                                                        class="fas fa-map-marker-alt tem-one-main-color"></i>
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="punch-card-container-back"
                                                style="background-image: url({{ asset('storage/nfc/' . optional($nfc_card->virtualCard)->card_bg_back) }}); background-repeat: no-repeat; background-size: cover;">
                                                <div class="row p-5 align-items-center" style="height: 40vh;">
                                                    <div
                                                        class="col-12 d-flex justify-content-center align-items-center">
                                                        <img class="img-fluid card_font_color pt-8" width="200px;"
                                                            src="{{ asset('storage/nfc/' . optional($nfc_card->virtualCard)->card_logo) }}"
                                                            alt="Logo Back" />
                                                    </div>
                                                    <div
                                                        class="col-12 d-flex justify-content-center align-items-center">
                                                        <p class="fw-bold mb-0 card-mail-one text-white"
                                                            style="padding-top: 2.5rem;"><i
                                                                class="fas fa-envelope text-white"></i>
                                                            goFlixza@gmail.com</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Visiting Card Box Container End-->
                                        </div>
                                    </div>
                                @elseif (optional($nfc_card->virtualCard)->virtual_card_template == 'virtual-card-two')
                                    <div class="row mt-5">
                                        <div class="col-12">
                                            <!-- Visiting Card Box Container -->
                                            <div class="punch-card-container mb-2"
                                                style="background-image: url({{ !empty(optional($nfc_card->virtualCard)->card_bg_front) ? asset('storage/nfc/' . optional($nfc_card->virtualCard)->card_bg_front) : asset('https://i.ibb.co/DCC9nQ0/card-10.png') }});">
                                                <div class="row p-5 align-items-center py-10 px-10">
                                                    <div class="col-lg-8 text-lg-start text-start">
                                                        <div>
                                                            <img class="punch-card-logo mb-4 card_logo"
                                                                src="{{ asset('storage/nfc/' . optional($nfc_card->virtualCard)->card_logo) }}"
                                                                alt="Logo" style="width: 200px;background-size: contain;height: 100px;text-align: start;display: flex;justify-content: start;position: relative;left: 0px;object-fit: contain; margin-bottom: 0px !important;">
                                                        </div>
                                                        <div class="text-start content-area font">
                                                            <h4 class="fw-bold mb-0 card_name text-white">
                                                                {{ optional($nfc_card->virtualCard)->card_name }}</h4>
                                                            <p class="fw-bold mb-0 card_designation">
                                                                {{ optional($nfc_card->virtualCard)->card_designation }}
                                                            </p>
                                                            <div class="title-devider mt-2"></div>
                                                            <div class="contact-info">
                                                                <p class="fw-bold text-white pt-3 mb-0">
                                                                    <i class="fas fa-phone"></i> <span
                                                                        class="card_phone">{{ optional($nfc_card->virtualCard)->card_phone }}</span>
                                                                </p>
                                                                <p class="fw-bold text-white mb-0">
                                                                    <i class="fas fa-envelope"></i> <span
                                                                        class="card_email">{{ optional($nfc_card->virtualCard)->card_email }}</span>
                                                                </p>
                                                            </div>
                                                            <div>
                                                                <p class="fw-bold mb-0 text-white">
                                                                    <i class="fas fa-map-marker-alt"></i> <span
                                                                        class="card_address">{{ optional($nfc_card->virtualCard)->card_address }}</span>
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4"></div>
                                                </div>
                                            </div>
                                            <div class="punch-card-container-back"
                                                style="background-image: url({{ asset('storage/nfc/' . optional($nfc_card->virtualCard)->card_bg_back) }});">
                                                <div class="row p-5 align-items-center py-10 px-10">
                                                    <div class="col-12 d-flex justify-content-center align-items-center"
                                                        style="height: 22vh;">
                                                        <img class="img-fluid card_font_color pt-8" width="200px;"
                                                            src="{{ asset('storage/nfc/' . optional($nfc_card->virtualCard)->card_logo) }}"
                                                            alt="Logo Back" />
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Visiting Card Box Container End -->
                                        </div>
                                    </div>
                                @elseif (optional($nfc_card->virtualCard)->virtual_card_template == 'virtual-card-three')
                                    <div class="row">
                                        <div
                                            class="col-lg-12 d-flex justify-content-center align-items-center flex-column">
                                            <div class="punch-card-container px-5 mb-2"
                                                style="background-image: url({{ !empty(optional($nfc_card->virtualCard)->card_bg_front) ? asset('storage/nfc/' . optional($nfc_card->virtualCard)->card_bg_front) : asset('https://i.ibb.co/M9VMCKf/card-5.png') }});">
                                                <div class="row p-5 px-10 pb-10 align-items-center">
                                                    <!-- Left column for card details -->
                                                    <div class="col-lg-8 text-lg-start text-start">
                                                        <div>
                                                            <img class="punch-card-logo mb-4 card_logo"
                                                                src="{{ asset('storage/nfc/' . optional($nfc_card->virtualCard)->card_logo) }}"
                                                                alt="Logo" style="width: 200px;background-size: contain;height: 100px;text-align: start;display: flex;justify-content: start;position: relative;left: 0px;object-fit: contain; margin-bottom: 0px !important;">/>
                                                        </div>
                                                        <div class="text-start content-area font">
                                                            <h4 class="fw-bold mb-0 card_name card_font_color"
                                                                style="color: #fff">
                                                                {{ optional($nfc_card->virtualCard)->card_name }}
                                                            </h4>
                                                            <p class="fw-bold mb-0 card_designation card_font_color">
                                                                {{ optional($nfc_card->virtualCard)->card_designation }}
                                                            </p>
                                                            <hr class="title-divider mt-2" />
                                                            <div>
                                                                <p class="fw-bold text-white pt-3 mb-0">
                                                                    <i class="fas fa-phone"></i> <span
                                                                        class="card_phone card_font_color">{{ optional($nfc_card->virtualCard)->card_phone }}</span>
                                                                </p>
                                                                <p class="fw-bold text-white mb-0">
                                                                    <i class="fas fa-envelope"></i> <span
                                                                        class="card_email card_font_color">{{ optional($nfc_card->virtualCard)->card_email }}</span>
                                                                </p>
                                                            </div>
                                                            <div>
                                                                <p class="fw-bold mb-0 text-white">
                                                                    <i class="fas fa-map-marker-alt"></i> <span
                                                                        class="card_address card_font_color">{{ optional($nfc_card->virtualCard)->card_address }}</span>
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- Right column for additional content -->
                                                    <div
                                                        class="col-lg-4 d-flex justify-content-center align-items-center">
                                                        <div>
                                                            <img width="70px"
                                                                src="https://i.ibb.co/F73Txnj/images-removebg-preview.png"
                                                                alt="" />
                                                            <h1 class="fw-bold text-white nfc-text-title"
                                                                style="font-size: 4rem;">NFC</h1>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="punch-card-container-back"
                                                style="background-image: url({{ asset('storage/nfc/' . optional($nfc_card->virtualCard)->card_bg_back) }});">
                                                <div class="row p-5 align-items-center">
                                                    <div class="col-12 d-flex justify-content-center align-items-center"
                                                        style="height: 30vh;">
                                                        <img class="img-fluid card_font_color" width="300px;"
                                                            src="{{ asset('storage/nfc/' . optional($nfc_card->virtualCard)->card_logo) }}"
                                                            alt="Logo Back" />
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @elseif (optional($nfc_card->virtualCard)->virtual_card_template == 'virtual-card-four')
                                    <div class="row">
                                        <div class="col-12">
                                            <!-- Visiting Card Box Container -->
                                            <div class="punch-card-container mb-2"
                                                style="background-image: url({{ !empty(optional($nfc_card->virtualCard)->card_bg_front) ? asset('storage/nfc/' . optional($nfc_card->virtualCard)->card_bg_front) : asset('https://i.ibb.co/nfK0QZg/card-6.png') }});">
                                                <div class="row p-5 align-items-center" style="height: 33vh">
                                                    <div class="col-lg-6 d-flex justify-content-start font">
                                                        <div class="">
                                                            <div class="d-flex justify-content-center">
                                                                <img width="70px"
                                                                    src="https://i.ibb.co/F73Txnj/images-removebg-preview.png"
                                                                    alt="" />
                                                            </div>
                                                            <h1 class="fw-bold text-white" style="font-size: 4rem;">
                                                                NFC</h1>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6 text-lg-start text-end">
                                                        <div>
                                                            <img class="punch-card-logo card_logo"
                                                                src="{{ asset('storage/nfc/' . optional($nfc_card->virtualCard)->card_logo) }}"
                                                                alt="Logo" />
                                                        </div>
                                                        <div class="text-start content-area font">
                                                            <h4 class="fw-bold mb-0 card_name" style="color: #fff">
                                                                {{ optional($nfc_card->virtualCard)->card_name }}
                                                            </h4>
                                                            <p class="fw-bold mb-0 card_designation">
                                                                {{ optional($nfc_card->virtualCard)->card_designation }}
                                                            </p>
                                                            <div class="me-auto mt-2 title-devider"
                                                                style="height: 2px;width: 120px;background-color: #fff;margin: start;position: relative;left: 0px;">
                                                            </div>
                                                            <div>
                                                                <p class="fw-bold text-white pt-3 mb-0">
                                                                    <i class="fas fa-phone"></i> <span
                                                                        class="card_phone">{{ optional($nfc_card->virtualCard)->card_phone }}</span>
                                                                </p>
                                                                <p class="fw-bold text-white mb-0">
                                                                    <i class="fas fa-envelope"></i> <span
                                                                        class="card_email">{{ optional($nfc_card->virtualCard)->card_email }}</span>
                                                                </p>
                                                            </div>
                                                            <div>
                                                                <p class="fw-bold mb-0 text-white">
                                                                    <i class="fas fa-map-marker-alt"></i> <span
                                                                        class="card_address">{{ optional($nfc_card->virtualCard)->card_address }}</span>
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="punch-card-container-back"
                                                style="background-image: url({{ asset('storage/nfc/' . optional($nfc_card->virtualCard)->card_bg_back) }});">
                                                <div class="row p-5 align-items-center">
                                                    <div class="col-12 d-flex justify-content-center align-items-center"
                                                        style="height: 28vh">
                                                        <img class="punch-card-logo-back card_logo"
                                                            src="{{ asset('storage/nfc/' . optional($nfc_card->virtualCard)->card_logo) }}"
                                                            alt="Logo Back" />
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Visiting Card Box Container End-->
                                        </div>
                                    </div>
                                @elseif (optional($nfc_card->virtualCard)->virtual_card_template == 'virtual-card-five')
                                    <div class="row">
                                        <div class="col-12">
                                            <!-- Visiting Card Box Container -->
                                            <div class="punch-card-container mb-2" style="background: black !important;background-image: url({{ !empty(optional($nfc_card->virtualCard)->card_bg_front) ? asset('storage/nfc/' . optional($nfc_card->virtualCard)->card_bg_front) : asset('') }});">
                                                <div class="row p-5 align-items-center">
                                                    <div class="col-lg-6 d-flex justify-content-start font align-items-center"
                                                        style="height: 28vh">
                                                        <div class="text-center">
                                                            <div class="d-flex justify-content-center">
                                                                <img width="70px"
                                                                    src="{{ asset('storage/nfc/' . optional($nfc_card->virtualCard)->card_logo) }}"
                                                                    alt="" />
                                                            </div>
                                                            <h1 class="fw-bold"
                                                                style="font-size: 4rem; color: #D19A26">
                                                                NFC
                                                            </h1>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6 text-lg-start align-items-center text-end">
                                                        <img class="punch-card-logo-back card_logo"
                                                            src="https://i.ibb.co/Zz6zhxj/logo-search-grid-1x-removebg-preview-1.png"
                                                            alt="Logo Back" />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="punch-card-container-back"
                                                style="background: black !important;background-image: url({{ asset('storage/nfc/' . optional($nfc_card->virtualCard)->card_bg_back) }});">
                                                <div class="row p-5 align-items-center">
                                                    <div class="col-12 d-flex justify-content-end align-items-center"
                                                        style="height: 28vh">
                                                        <div class="text-end content-area font">
                                                            <h4 class="fw-bold mb-0 sp-font card_name"
                                                                style="color: #D19A26">
                                                                {{ optional($nfc_card->virtualCard)->card_name }}
                                                            </h4>
                                                            <p class="mb-0 card_designation" style="color: #D19A26">
                                                                {{ optional($nfc_card->virtualCard)->card_designation }}
                                                            </p>
                                                            <div>
                                                                <p class="fw-bold pt-3 mb-0" style="color: #D19A26">
                                                                    <span
                                                                        class="card_phone">{{ optional($nfc_card->virtualCard)->card_phone }}</span>
                                                                    <i class="fas fa-phone"></i>
                                                                </p>
                                                                <p class="fw-bold mb-4" style="color: #D19A26">
                                                                    <span
                                                                        class="card_email">{{ optional($nfc_card->virtualCard)->card_email }}</span>
                                                                    <i class="fas fa-envelope"></i>
                                                                </p>
                                                            </div>
                                                            <div>
                                                                <p class="fw-bold mb-0" style="color: #D19A26">
                                                                    <span
                                                                        class="card_address">{{ optional($nfc_card->virtualCard)->card_address }}</span>
                                                                    <i class="fas fa-map-marker-alt"></i>
                                                                </p>
                                                                {{-- <p class="fw-bold mb-0" style="color: #D19A26">
                                                                -Downtown Dubia-Dubai- United Arab Emirates
                                                            </p> --}}
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Visiting Card Box Container End-->
                                        </div>
                                    </div>
                                @elseif (optional($nfc_card->virtualCard)->virtual_card_template == 'virtual-card-six')
                                    <div class="row">
                                        <div class="col-12">
                                            <!-- Visiting Card Box Container -->
                                            <div class="punch-card-container mb-2"
                                                style="background-image: url({{ !empty(optional($nfc_card->virtualCard)->card_bg_front) ? asset('storage/nfc/' . optional($nfc_card->virtualCard)->card_bg_front) : asset('https://i.ibb.co/51yxtsc/card-8.png') }});">
                                                <div class="row p-5 align-items-center" style="height: 33vh">
                                                    <div class="col-lg-6 d-flex justify-content-start font">
                                                        <div class="">
                                                            <div class="d-flex justify-content-center">
                                                                <img width="70px"
                                                                    src="https://i.ibb.co/F73Txnj/images-removebg-preview.png"
                                                                    alt="" />
                                                            </div>
                                                            <h1 class="fw-bold text-white" style="font-size: 4rem;">
                                                                NFC</h1>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6 text-lg-start text-end">
                                                        <div class="text-start content-area font">
                                                            <h4 class="fw-bold mb-0 card_name" style="color: #fff">
                                                                {{ optional($nfc_card->virtualCard)->card_name }}
                                                            </h4>
                                                            <p class="fw-bold mb-0 card_designation">
                                                                {{ optional($nfc_card->virtualCard)->card_designation }}
                                                            </p>
                                                            <div class="me-auto mt-2 title-devider"
                                                                style="height: 2px;width: 120px;background-color: #fff;margin: start;position: relative;left: 0px;">
                                                            </div>
                                                            <div>
                                                                <p class="fw-bold text-white pt-3 mb-0">
                                                                    <i class="fas fa-phone pe-2"></i> <span
                                                                        class="card_phone">{{ optional($nfc_card->virtualCard)->card_phone }}</span>
                                                                </p>
                                                                <p class="fw-bold text-white mb-0">
                                                                    <i class="fas fa-envelope pe-2"></i> <span
                                                                        class="card_email">{{ optional($nfc_card->virtualCard)->card_email }}</span>
                                                                </p>
                                                            </div>
                                                            <div>
                                                                <p class="fw-bold mb-0 text-white">
                                                                    <i class="fas fa-map-marker-alt pe-2"></i>
                                                                    <span
                                                                        class="card_address">{{ optional($nfc_card->virtualCard)->card_address }}</span>
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="punch-card-container-back"
                                                style="background-image: url({{ asset('storage/nfc/' . optional($nfc_card->virtualCard)->card_bg_back) }});">
                                                <div class="row p-5 align-items-center">
                                                    <div class="col-12 d-flex justify-content-center align-items-center"
                                                        style="height: 28vh">
                                                        <img class="img-fluid card_font_color pt-8" width="300px;"
                                                            src="{{ asset('storage/nfc/' . optional($nfc_card->virtualCard)->card_logo) }}"
                                                            alt="Logo Back" />
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Visiting Card Box Container End-->
                                        </div>
                                    </div>
                                @elseif (optional($nfc_card->virtualCard)->virtual_card_template == 'virtual-card-seven')
                                    <div class="row">
                                        <div class="col-12">
                                            <!-- Visiting Card Box Container -->
                                            <div class="punch-card-container mb-2"
                                                style="background-image: url({{ !empty(optional($nfc_card->virtualCard)->card_bg_front) ? asset('storage/nfc/' . optional($nfc_card->virtualCard)->card_bg_front) : asset('https://i.ibb.co/6PwnxMQ/card-1.png') }});">
                                                <div class="row p-5 align-items-center">
                                                    <div class="col-lg-6 d-flex justify-content-center align-items-center font"
                                                        style="height: 28vh">
                                                        <div class="">
                                                            <div class="d-flex justify-content-center">
                                                                <img width="70px"
                                                                    src="https://i.ibb.co/F73Txnj/images-removebg-preview.png"
                                                                    alt="" />
                                                            </div>
                                                            <h1 class="fw-bold text-white" style="font-size: 4rem">
                                                                NFC
                                                            </h1>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6 text-lg-center text-end">
                                                        <div>
                                                            <img class="punch-card-logo-back card_logo"
                                                                src="{{ asset('storage/nfc/' . optional($nfc_card->virtualCard)->card_logo) }}"
                                                                alt="Logo Back" style="width: 200px;background-size: contain;height: 100px;text-align: start;display: flex;justify-content: start;position: relative;left: 0px;object-fit: contain; margin-bottom: 0px !important;" />
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="punch-card-container-back"
                                                style="background-image: url({{ asset('storage/nfc/' . optional($nfc_card->virtualCard)->card_bg_back) }});">
                                                <div class="row p-5 px-10 pb-10 align-items-center">
                                                    <div class="col-12 d-flex justify-content-start align-items-center"
                                                        style="height: 35vh">
                                                        <div class="text-start content-area font">
                                                            <h4 class="fw-bold mb-0 card_name" style="color: #fff">
                                                                {{ optional($nfc_card->virtualCard)->card_name }}
                                                            </h4>
                                                            <p class="fw-bold mb-0 card_designation">
                                                                {{ optional($nfc_card->virtualCard)->card_designation }}
                                                            </p>
                                                            <div>
                                                                <p class="fw-bold text-white pt-3 mb-0">
                                                                    <i class="fas fa-phone pe-2"></i> <span
                                                                        class="card_phone">{{ optional($nfc_card->virtualCard)->card_phone }}</span>
                                                                </p>
                                                                <p class="fw-bold text-white mb-0">
                                                                    <i class="fas fa-envelope pe-2 mb-3"></i>
                                                                    <span
                                                                        class="card_email">{{ optional($nfc_card->virtualCard)->card_email }}</span>
                                                                </p>
                                                            </div>
                                                            <div>
                                                                <p class="fw-bold mb-0 text-white">
                                                                    <i class="fas fa-map-marker-alt pe-2"></i>
                                                                    <span
                                                                        class="card_address">{{ optional($nfc_card->virtualCard)->card_address }}</span>
                                                                </p>
                                                                {{-- <p class="fw-bold mb-0 text-white">
                                                                -Downtown Dubia-Dubai- United Arab Emirates
                                                            </p> --}}
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Visiting Card Box Container End-->
                                        </div>
                                    </div>
                                @elseif (optional($nfc_card->virtualCard)->virtual_card_template == 'virtual-card-eight')
                                    <div class="row">
                                        <div class="col-12">
                                            <!-- Visiting Card Box Container -->
                                            <div class="punch-card-container mb-2"
                                                style="background: -webkit-linear-gradient(to right, #4a00e0, #8e2de2); background: linear-gradient(to right, #4a00e0, #8e2de2);background-image: url({{ !empty(optional($nfc_card->virtualCard)->card_bg_front) ? asset('storage/nfc/' . optional($nfc_card->virtualCard)->card_bg_front) : asset('') }})">
                                                <div class="row p-5 align-items-center">
                                                    <div class="col-lg-6 d-flex justify-content-start font align-items-center"
                                                        style="height: 28vh">
                                                        <div class="">
                                                            <div class="d-flex justify-content-center">
                                                                <img width="70px"
                                                                    src="https://i.ibb.co/F73Txnj/images-removebg-preview.png"
                                                                    alt="" />
                                                            </div>
                                                            <h1 class="fw-bold text-white" style="font-size: 4rem">
                                                                NFC
                                                            </h1>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6 text-lg-center text-end">
                                                        <div>
                                                            <img class="punch-card-logo-back card_logo"
                                                                src="{{ asset('storage/nfc/' . optional($nfc_card->virtualCard)->card_logo) }}"
                                                                alt="Logo Back" style="width: 200px;background-size: contain;height: 100px;text-align: start;display: flex;justify-content: start;position: relative;left: 0px;object-fit: contain; margin-bottom: 0px !important;" />
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="punch-card-container-back"
                                                style="background: -webkit-linear-gradient(to right, #4a00e0, #8e2de2);
                                                background: linear-gradient(to right, #4a00e0, #8e2de2);background-image: url({{ asset('storage/nfc/' . optional($nfc_card->virtualCard)->card_bg_back) }});">
                                                <div class="row p-5 align-items-center">
                                                    <div class="col-8 d-flex justify-content-start align-items-center"
                                                        style="height: 28vh">
                                                        <div class="text-start content-area font">
                                                            <h4 class="fw-bold mb-0 card_name" style="color: #fff">
                                                                {{ optional($nfc_card->virtualCard)->card_name }}
                                                            </h4>
                                                            <p class="fw-bold mb-0 card_designation">
                                                                {{ optional($nfc_card->virtualCard)->card_designation }}
                                                            </p>
                                                            <div>
                                                                <p class="fw-bold text-white pt-3 mb-0">
                                                                    <i class="fas fa-phone pe-2"></i> <span
                                                                        class="card_phone">{{ optional($nfc_card->virtualCard)->card_phone }}</span>
                                                                </p>
                                                                <p class="fw-bold text-white mb-0">
                                                                    <i class="fas fa-envelope pe-2 mb-3"></i>
                                                                    <span
                                                                        class="card_email">{{ optional($nfc_card->virtualCard)->card_email }}</span>
                                                                </p>
                                                            </div>
                                                            <div>
                                                                <p class="fw-bold mb-0 text-white">
                                                                    <i class="fas fa-map-marker-alt pe-2"></i>
                                                                    <span
                                                                        class="card_address">{{ optional($nfc_card->virtualCard)->card_address }}</span>
                                                                </p>
                                                                {{-- <p class="fw-bold mb-0 text-white">
                                                            -Downtown Dubia-Dubai- United Arab Emirates
                                                        </p> --}}
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <div>
                                                            <img class="imf-fluid" width="150px"
                                                                src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRUekbZzzImwhQynw7gd6r8qv6CzwOspNnzPg&amp;s"
                                                                alt="" />
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Visiting Card Box Container End-->
                                        </div>
                                    </div>
                                @endif
                            </div>
                        </div>
                    </div>

                    <div class="modal-footer border-0 pt-0">
                        <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                        {{-- <button type="button" class="btn btn-primary">Save changes</button> --}}
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" tabindex="-1" id="shipping_address_modal_{{ $nfc_card->id }}">
            <div class="modal-dialog modal-xl">
                <div class="modal-content position-absolute">
                    <div class="modal-header">
                        <h5 class="modal-title">Card Shipping Address</h5>

                        <!--begin::Close-->
                        <div class="btn btn-icon btn-sm btn-active-light-primary ms-2" data-bs-dismiss="modal"
                            aria-label="Close">
                            <i class="ki-duotone ki-cross fs-2x"><span class="path1">X</span><span
                                    class="path2"></span></i>
                        </div>
                        <!--end::Close-->
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

</x-app-layout>

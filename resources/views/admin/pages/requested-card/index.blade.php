<x-admin-app-layout :title="'NFC Card Request'">
    <div class="post d-flex flex-column-fluid my-15" id="kt_post">
        <div class="container-fluid">
            <div class="card card-flush">
                <div class="card-header align-items-center py-5 gap-2 gap-md-5">
                    <div class="card-title">
                        <div class="d-flex align-items-center position-relative my-1">
                            <span class="svg-icon svg-icon-1 position-absolute ms-4">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none">
                                    <rect opacity="0.5" x="17.0365" y="15.1223" width="8.15546" height="2"
                                        rx="1" transform="rotate(45 17.0365 15.1223)" fill="currentColor" />
                                    <path
                                        d="M11 19C6.55556 19 3 15.4444 3 11C3 6.55556 6.55556 3 11 3C15.4444 3 19 6.55556 19 11C19 15.4444 15.4444 19 11 19ZM11 5C7.53333 5 5 7.53333 5 11C5 14.4667 7.53333 17 11 17C14.4667 17 17 14.4667 17 11C17 7.53333 14.4667 5 11 5Z"
                                        fill="currentColor" />
                                </svg>
                            </span>
                            <input type="text" data-kt-ecommerce-message-filter="search"
                                class="form-control form-control-solid w-250px ps-14" placeholder="Search message" />
                        </div>
                    </div>
                </div>
                <div class="card-body pt-0">
                    <div class="table-responsive">
                        <table class="table table-hover align-middle table-row-dashed fs-6 gy-5" id="kt_message_table">
                            <thead>
                                <tr class="text-start text-gray-400 fw-bolder fs-7 text-uppercase gs-0">
                                    <th width="5%" class="text-center">Sl</th>
                                    <th width="10%" class="text-center">Landing Page</th>
                                    <th width="10%" class="text-center">Choosen Card</th>
                                    <th width="10%" class="text-center">Name</th>
                                    <th width="10%" class="text-center">NFC Link</th>
                                    <th width="10%" class="text-center">V Card</th>
                                    <th width="10%" class="text-center">Delivery Address</th>
                                    {{-- <th width="10%" class="text-center">Status</th> --}}
                                    <th width="10%" class="text-center min-w-70px">Action</th>
                                </tr>
                            </thead>

                            <tbody class="fw-bold text-gray-600">
                                @foreach ($nfc_cards as $nfc_card)
                                    <tr>
                                        <td class="text-center">
                                            <span class="fw-bolder"> {{ $loop->iteration }}</span>
                                        </td>
                                        <td class="text-center">
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
                                        <td class="text-center">
                                            <div>
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
                                            </div>
                                        </td>
                                        <td class="text-center">
                                            <span class="fw-bolder"> {{ optional($nfc_card->nfcData)->first_name }}
                                                {{ optional($nfc_card->nfcData)->last_name }}
                                            </span>
                                        </td>
                                        <td class="text-center">
                                            <a href="{{ $nfc_card->nfc_url }}" id="copyButton"
                                                class="btn btn-sm btn-primary">Copy URL</a>
                                        </td>
                                        <td class="text-center">
                                            <a href="javascript:void(0)" data-bs-toggle="modal"
                                                data-bs-target="#virtual_card_modal_{{ $nfc_card->id }}"
                                                class="text-primary">
                                                <button class="btn btn-sm btn-info"><i class="fas fa-eye pe-2"></i>
                                                    CARD</button>
                                            </a>
                                        </td>
                                        <td class="text-center">
                                            <button class="btn btn-sm btn-primary" data-bs-toggle="modal"
                                                data-bs-target="#deliveryModal-{{ $nfc_card->id }}">Delivery
                                                Location</button>
                                        </td>
                                        {{-- <td class="text-center">
                                            <div
                                                class="form-check form-switch form-check-custom form-check-solid justify-content-center">
                                                <input class="form-check-input" type="checkbox" value=""
                                                    id="flexSwitchChecked" checked="checked" />
                                                <label class="form-check-label" for="flexSwitchChecked"
                                                    id="switchLabel">Approved</label>
                                            </div>
                                        </td> --}}
                                        <td class="text-center">
                                            <button
                                                class="border-0 bg-transparent download-button badge bg-primary me-3"
                                                id="convertButton"
                                                data-modal-id="virtual_card_modal_{{ $nfc_card->id }}">
                                                <span title="Download Image">PNG</span>
                                            </button>
                                            <button
                                                class="border-0 bg-transparent download-eps-button badge bg-primary"
                                                data-modal-id="virtual_card_modal_{{ $nfc_card->id }}">
                                                <span title="Download EPS">EPS</span>
                                            </button>
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


    @foreach ($nfc_cards as $nfc_card)
        <div class="modal fade" id="deliveryModal-{{ $nfc_card->id }}" tabindex="-1" data-bs-backdrop="static"
            data-bs-keyboard="false" role="dialog" aria-labelledby="modalTitleId" aria-hidden="true">
            <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-md" role="document">
                <div class="modal-content">
                    <div class="modal-header border-0">
                        <h5 class="modal-title" id="modalTitleId">
                            Your Delivery Location
                        </h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                            aria-label="Close"></button>
                    </div>
                    <div class="modal-body p-0" style="overflow: hidden">
                        <div class="row">
                            <div class="col-lg-10 offset-lg-1">
                                <div class="table-responsive">
                                    <table class="table table-striped table-row-bordered gy-5 gs-7">
                                        <thead class="border">
                                            <tr>
                                                <th width="40%" class="p-3">Contact Person Name</th>
                                                <th class="p-3">
                                                    {{ optional($nfc_card->shippingDetails)->shipping_name }}</th>
                                            </tr>
                                            <tr>
                                                <th width="40%" class="p-3">Phone</th>
                                                <th class="p-3">
                                                    {{ optional($nfc_card->shippingDetails)->shipping_phone }}</th>
                                            </tr>
                                            <tr>
                                                <th width="40%" class="p-3">Address</th>
                                                <th class="p-3">
                                                    {{ optional($nfc_card->shippingDetails)->shipping_address }}</th>
                                            </tr>
                                            <tr>
                                                <th width="40%" class="p-3">City</th>
                                                <th class="p-3">
                                                    {{ optional($nfc_card->shippingDetails)->shipping_city }}</th>
                                            </tr>
                                            <tr>
                                                <th width="40%" class="p-3">State</th>
                                                <th class="p-3">
                                                    {{ optional($nfc_card->shippingDetails)->shipping_state }}</th>
                                            </tr>
                                            <tr>
                                                <th width="40%" class="p-3">Zip</th>
                                                <th class="p-3">
                                                    {{ optional($nfc_card->shippingDetails)->shipping_zip_code }}</th>
                                            </tr>
                                            <tr>
                                                <th width="40%" class="p-3">Country</th>
                                                <th class="p-3">
                                                    {{ optional($nfc_card->shippingDetails)->shipping_country }}</th>
                                            </tr>
                                            <tr>
                                                <th width="40%" class="p-3 text-center">
                                                    <div>Instruction</div>
                                                </th>
                                                <th class="p-3">
                                                    <p>{{ optional($nfc_card->shippingDetails)->shipping_instruction }}
                                                    </p>
                                                </th>
                                            </tr>
                                        </thead>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer border-0">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                                Close
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="modal fade" tabindex="-1" id="virtual_card_modal_{{ $nfc_card->id }}">
            <div class="modal-dialog modal-dialog-centered modal-lg" style="max-width: 680px !important;">
                <div class="modal-content position-absolute">
                    <div class="modal-header border-0">

                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                            aria-label="Close"></button>
                    </div>
                    <div class="modal-body p-4 downloadable-div" id="downloadable_div_{{ $nfc_card->id }}">
                        <style>
                            .downloadable-div {
                                /* Add any desired styling for your downloadable divs here */
                                border: 1px solid #ddd;
                                padding: 10px;
                                margin: 10px;
                            }

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
                            <div id="card-container" class="p-5">
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
                                                                alt="Logo"
                                                                style="width: 200px;background-size: contain;height: 100px;text-align: start;margin-bottom: 0px !important;display: flex;justify-content: start;position: relative;left: 0px;object-fit: contain;" />
                                                        </div>
                                                        <div class="mt-4 mt-lg-0">
                                                            <img class="punch-card-qr"
                                                                src="https://i.ibb.co/M7KMQC0/qr.png" alt="QR Code"
                                                                style="width: 125px;height: 125px;object-fit: fill;" />
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
                                                style="background-image: url({{ !empty(optional($nfc_card->virtualCard)->card_bg_back) ? asset('storage/nfc/' . optional($nfc_card->virtualCard)->card_bg_back) : asset('https://i.ibb.co/sVxG7gh/2.gif') }}); background-repeat: no-repeat; background-size: cover;">
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
                                                                alt="Logo"
                                                                style="width: 200px;background-size: contain;height: 100px;text-align: start;display: flex;justify-content: start;position: relative;left: 0px;object-fit: contain; margin-bottom: 0px !important;">
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
                                                style="background-image: url({{ !empty(optional($nfc_card->virtualCard)->card_bg_back) ? asset('storage/nfc/' . optional($nfc_card->virtualCard)->card_bg_back) : asset('https://i.ibb.co/DCC9nQ0/card-10.png') }});">
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
                                                                alt="Logo"
                                                                style="width: 200px;background-size: contain;height: 100px;text-align: start;display: flex;justify-content: start;position: relative;left: 0px;object-fit: contain; margin-bottom: 0px !important;">/>
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
                                                style="background-image: url({{ !empty(optional($nfc_card->virtualCard)->card_bg_back) ? asset('storage/nfc/' . optional($nfc_card->virtualCard)->card_bg_back) : asset('https://i.ibb.co/M9VMCKf/card-5.png') }});">
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
                                                style="background-image: url({{ !empty(optional($nfc_card->virtualCard)->card_bg_back) ? asset('storage/nfc/' . optional($nfc_card->virtualCard)->card_bg_back) : asset('https://i.ibb.co/nfK0QZg/card-6.png') }});">
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
                                            <div class="punch-card-container mb-2"
                                                style="background: black !important;background-image: url({{ !empty(optional($nfc_card->virtualCard)->card_bg_front) ? asset('storage/nfc/' . optional($nfc_card->virtualCard)->card_bg_front) : asset('') }});">
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
                                                style="background: black !important;background-image: url({{ !empty(optional($nfc_card->virtualCard)->card_bg_back) ? asset('storage/nfc/' . optional($nfc_card->virtualCard)->card_bg_back) : asset('') }});">
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
                                                style="background-image: url({{ !empty(optional($nfc_card->virtualCard)->card_bg_back) ? asset('storage/nfc/' . optional($nfc_card->virtualCard)->card_bg_back) : asset('https://i.ibb.co/51yxtsc/card-8.png') }});">
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
                                                                alt="Logo Back"
                                                                style="width: 200px;background-size: contain;height: 100px;text-align: start;display: flex;justify-content: start;position: relative;left: 0px;object-fit: contain; margin-bottom: 0px !important;" />
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="punch-card-container-back"
                                                style="background-image: url({{ !empty(optional($nfc_card->virtualCard)->card_bg_back) ? asset('storage/nfc/' . optional($nfc_card->virtualCard)->card_bg_back) : asset('https://i.ibb.co/6PwnxMQ/card-1.png') }});">
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
                                                                alt="Logo Back"
                                                                style="width: 200px;background-size: contain;height: 100px;text-align: start;display: flex;justify-content: start;position: relative;left: 0px;object-fit: contain; margin-bottom: 0px !important;" />
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="punch-card-container-back"
                                                style="background: -webkit-linear-gradient(to right, #4a00e0, #8e2de2);
                                                background: linear-gradient(to right, #4a00e0, #8e2de2);background-image: url({{ !empty(optional($nfc_card->virtualCard)->card_bg_back) ? asset('storage/nfc/' . optional($nfc_card->virtualCard)->card_bg_back) : asset('') }});">
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
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <div>
                                                            <img class="imf-fluid" width="150px"
                                                                src="{{ asset('storage/nfc/qrs/' . $nfc_card->nfc_qr) }}"
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
                    </div>
                </div>
            </div>
        </div>
    @endforeach



    {{-- Delivery Location Modal End --}}
    @push('scripts')
        <script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/1.4.1/html2canvas.min.js"
            integrity="sha512-BNaRQnYJYiPSqHHDb58B0yaPfCu+Wgds8Gp/gU33kqBtgNS4tSPHuGibyoeqMV/TJlSKda6FXzoEyYGjTe+vXA=="
            crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script>
            function showAndCaptureModal(modalId, callback) {
                const modal = new bootstrap.Modal(document.getElementById(modalId));
                modal.show();

                setTimeout(() => {
                    callback();
                    modal.hide();
                }, 1000); // Wait for the modal to render
            }

            function captureAndDownloadPNG(modalId) {
                showAndCaptureModal(modalId, () => {
                    html2canvas(document.querySelector('#' + modalId + ' #card-container')).then(canvas => {
                        // Add padding to the canvas
                        const padding = 20; // Adjust the padding size as needed
                        const paddedCanvas = document.createElement('canvas');
                        paddedCanvas.width = canvas.width + 2 * padding;
                        paddedCanvas.height = canvas.height + 2 * padding;
                        const context = paddedCanvas.getContext('2d');

                        // Set the background color to transparent
                        context.fillStyle = 'transparent';
                        context.fillRect(0, 0, paddedCanvas.width, paddedCanvas.height);

                        // Draw the original canvas onto the new canvas with padding
                        context.drawImage(canvas, padding, padding);

                        // Download the padded canvas as PNG
                        const pngUrl = paddedCanvas.toDataURL('image/png');
                        const link = document.createElement('a');
                        link.href = pngUrl;
                        link.download = 'card.png';
                        link.click();
                    });
                });
            }


            function captureAndDownloadEPS(modalId) {
                showAndCaptureModal(modalId, () => {
                    html2canvas(document.querySelector('#' + modalId + ' #card-container')).then(canvas => {
                        const imgData = canvas.toDataURL('image/png');

                        // Convert the PNG to EPS format (simple base64 embedded EPS)
                        const epsContent = `%!PS-Adobe-3.0 EPSF-3.0
                                            %%BoundingBox: 0 0 ${canvas.width} ${canvas.height}
                                            %%HiResBoundingBox: 0 0 ${canvas.width} ${canvas.height}
                                            %%EndComments
                                            gsave
                                            0 0 translate
                                            ${canvas.width} ${canvas.height} scale
                                            /${imgData.split(',')[1]} def
                                            /${imgData.split(',')[1]} currentfile /ASCII85Decode filter def
                                            /${imgData.split(',')[1]} currentfile /DCTDecode filter def
                                            image
                                            grestore
                                            showpage
                                            %%EOF
                                            `;

                        const link = document.createElement('a');
                        const blob = new Blob([epsContent], {
                            type: 'application/postscript'
                        });
                        const url = URL.createObjectURL(blob);
                        link.href = url;
                        link.download = 'card.eps';
                        link.click();
                    });
                });
            }


            function createEPSContent(imageData, width, height) {
                const base64Data = imageData.replace(/^data:image\/(png|jpg);base64,/, '');
                const psHeader = `%!PS-Adobe-3.0 EPSF-3.0\n%%BoundingBox: 0 0 ${width} ${height}\n`;
                const psImage = `
                        /DeviceRGB setcolorspace
                        ${width} ${height} scale
                        /picstr ${width} string def
                        ${width} ${height} 8 [${width} 0 0 -${height} 0 ${height}]
                        { currentfile picstr readhexstring pop }
                        false 3 colorimage
                    `;
                const psFooter = 'showpage\n';
                const hexData = base64ToHex(base64Data);
                return `${psHeader}${psImage}${hexData}\n${psFooter}`;
            }

            function base64ToHex(base64) {
                const binary = atob(base64);
                let hex = '';
                for (let i = 0; i < binary.length; i++) {
                    const byte = binary.charCodeAt(i);
                    hex += ('0' + byte.toString(16)).slice(-2);
                    if (i % 32 === 31) hex += '\n'; // Add a newline every 32 bytes for readability
                }
                return hex;
            }

            document.addEventListener('DOMContentLoaded', function() {
                document.querySelectorAll('.download-button').forEach(button => {
                    button.addEventListener('click', function() {
                        const modalId = button.getAttribute('data-modal-id');
                        captureAndDownloadPNG(modalId);
                    });
                });

                document.querySelectorAll('.download-eps-button').forEach(button => {
                    button.addEventListener('click', function() {
                        const modalId = button.getAttribute('data-modal-id');
                        captureAndDownloadEPS(modalId);
                    });
                });
            });
        </script>




        {{-- <script>
            function downloadDiv(div) {
                // Disable the download button to prevent multiple clicks
                alert('Download Button Clicked')
                const downloadButton = document.querySelector('.download-button');
                downloadButton.disabled = true;

                html2canvas(div)
                    .then(canvas => {
                        const imgData = canvas.toDataURL('image/png');

                        // Create a temporary anchor element
                        const link = document.createElement('a');
                        link.href = imgData;
                        link.download = 'nfc-card.png';
                        link.style.display = 'none';
                        document.body.appendChild(link);
                        alert('Working On Generateing Image')
                        // Trigger the download
                        link.click();


                        // Clean up
                        document.body.removeChild(link);

                        // Re-enable the download button after a short delay
                        setTimeout(() => {
                            downloadButton.disabled = false;
                        }, 1000); // Adjust delay as needed
                    })
                    .catch(error => {
                        console.error('Error during html2canvas operation:', error);

                        // Re-enable the download button on error
                        downloadButton.disabled = false;
                    });
            }

            document.addEventListener('DOMContentLoaded', function() {
                document.body.addEventListener('click', function(event) {
                    if (event.target.classList.contains('download-button')) {
                        const button = event.target;
                        const modalId = button.getAttribute('data-modal-id');
                        const modal = document.getElementById(modalId);
                        const closestDiv = modal.querySelector('.downloadable-div');

                        if (modal && closestDiv) {
                            downloadDiv(closestDiv);
                        } else {
                            console.error("Modal or downloadable div not found!");
                        }
                    }
                });
            });
        </script> --}}



        {{-- <script>
            const myModal = new bootstrap.Modal(
                document.getElementById("modalId"),
                options,
            );
        </script> --}}
        <script>
            document.getElementById('flexSwitchChecked').addEventListener('change', function() {
                const label = document.getElementById('switchLabel');
                if (this.checked) {
                    label.textContent = 'Approved';
                } else {
                    label.textContent = 'Rejected';
                }
            });
        </script>
        <script>
            document.getElementById('copyButton').addEventListener('click', function(event) {
                event.preventDefault(); // Prevent the default action of the link
                const url = this.href;
                navigator.clipboard.writeText(url).then(function() {
                    alert('Copied URL: ' + url);
                }, function(err) {
                    console.error('Failed to copy the URL: ', err);
                });
            });
        </script>
    @endpush
</x-admin-app-layout>

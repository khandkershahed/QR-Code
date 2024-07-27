<div class="col-lg-12 mt-10 pb-10">
    <div class="card card-p-0 card-flush p-3 pt-0">
        <div class="p-5 pb-2">
            <h4 class="mb-0">View and manage your NFC Cards</h4>
        </div>
        <div class="card-body table-responsive">
            <table class="table align-middle border rounded table-row-dashed table-striped table-hover  fs-6 g-5"
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
                            {{-- @dd($nfc_card) --}}
                            <td>
                                {{ $loop->iteration }}
                            </td>
                            <td>
                                @if (optional($nfc_card->nfc)->nfc_template == 'template-one')
                                    <img class="img-fluid w-50px"
                                        src="{{ asset('frontend/assets/images/nfc-templates/template_one.jpg') }}"
                                        alt="">
                                @elseif (optional($nfc_card->nfc)->nfc_template == 'template-two')
                                    <img class="img-fluid w-50px"
                                        src="{{ asset('frontend/assets/images/nfc-templates/template_two.jpg') }}"
                                        alt="">
                                @elseif (optional($nfc_card->nfc)->nfc_template == 'template-three')
                                    <img class="img-fluid w-50px"
                                        src="{{ asset('frontend/assets/images/nfc-templates/template_three.jpg') }}"
                                        alt="">
                                @elseif (optional($nfc_card->nfc)->nfc_template == 'template-four')
                                    <img class="img-fluid w-50px"
                                        src="{{ asset('frontend/assets/images/nfc-templates/template_four.jpg') }}"
                                        alt="">
                                @elseif (optional($nfc_card->nfc)->nfc_template == 'template-five')
                                    <img class="img-fluid w-50px"
                                        src="{{ asset('frontend/assets/images/nfc-templates/template_five.jpg') }}"
                                        alt="">
                                @elseif (optional($nfc_card->nfc)->nfc_template == 'template-six')
                                    <img class="img-fluid w-50px"
                                        src="{{ asset('frontend/assets/images/nfc-templates/template_six.jpg') }}"
                                        alt="">
                                @endif
                            </td>
                            <td>
                                @if (optional($nfc_card)->virtual_card_template == 'virtual-card-one')
                                    <img class="img-fluid w-65px"
                                        src="{{ asset('frontend/images/virtual_card/card_1.png') }}" alt="">
                                @elseif (optional($nfc_card)->virtual_card_template == 'virtual-card-two')
                                    <img class="img-fluid w-65px"
                                        src="{{ asset('frontend/images/virtual_card/card_2.png') }}" alt="">
                                @elseif (optional($nfc_card)->virtual_card_template == 'virtual-card-three')
                                    <img class="img-fluid w-65px"
                                        src="{{ asset('frontend/images/virtual_card/card_3.png') }}" alt="">
                                @elseif (optional($nfc_card)->virtual_card_template == 'virtual-card-four')
                                    <img class="img-fluid w-65px"
                                        src="{{ asset('frontend/images/virtual_card/card_4.png') }}" alt="">
                                @elseif (optional($nfc_card)->virtual_card_template == 'virtual-card-five')
                                    <img class="img-fluid w-65px"
                                        src="{{ asset('frontend/images/virtual_card/card_5.png') }}" alt="">
                                @elseif (optional($nfc_card)->virtual_card_template == 'virtual-card-six')
                                    <img class="img-fluid w-65px"
                                        src="{{ asset('frontend/images/virtual_card/card_6.png') }}" alt="">
                                @elseif (optional($nfc_card)->virtual_card_template == 'virtual-card-seven')
                                    <img class="img-fluid w-65px"
                                        src="{{ asset('frontend/images/virtual_card/card_7.png') }}" alt="">
                                @elseif (optional($nfc_card)->virtual_card_template == 'virtual-card-eight')
                                    <img class="img-fluid w-65px"
                                        src="{{ asset('frontend/images/virtual_card/card_8.png') }}" alt="">
                                @endif
                            </td>
                            <td>
                                <div class="text-success">{{ optional($nfc_card)->card_name }}</div>
                            </td>
                            <td>
                                <a href="{{ optional($nfc_card->nfc)->nfc_url }}" target="_blank" class="text-primary">
                                    <button class="btn btn-sm btn-info">NFC <i class="fas fa-link ps-2"></i></button>
                                </a>
                            </td>
                            <td>
                                <a href="javascript:void(0)" data-bs-toggle="modal"
                                    data-bs-target="#virtual_card_modal_{{ $nfc_card->id }}" class="text-primary">
                                    <button class="btn btn-sm btn-info"><i class="fas fa-eye pe-2"></i>
                                        CARD</button>
                                </a>
                            </td>
                            <td>
                                <a href="javascript:void(0)" data-bs-toggle="modal"
                                    data-bs-target="#shipping_address_modal_{{ $nfc_card->id }}" class="text-primary">
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

                                    @if (strpos(Route::current()->getName(), 'user.') === 0)
                                        <div class="menu-item px-3">
                                            <a href="{{ route('user.nfc-card.edit', $nfc_card->id) }}"
                                                class="menu-link px-3">
                                                Edit
                                            </a>
                                        </div>
                                        <div class="menu-item px-3">
                                            <a href="{{ route('user.nfc-card.destroy', $nfc_card->id) }}"
                                                class="menu-link px-3 delete">
                                                Delete
                                            </a>
                                        </div>
                                    @else
                                        <div class="menu-item px-3">
                                            <a href="{{ route('admin.nfc-card.edit', $nfc_card->id) }}"
                                                class="menu-link px-3">
                                                Edit
                                            </a>
                                        </div>
                                        <div class="menu-item px-3">
                                            <a href="{{ route('admin.nfc-card.destroy', $nfc_card->id) }}"
                                                class="menu-link px-3 delete">
                                                Delete
                                            </a>
                                        </div>
                                    @endif

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
    <div class="modal fade" tabindex="-1" id="virtual_card_modal_{{ $nfc_card->id }}">
        <div class="modal-dialog modal-dialog-centered modal-xl" style="max-width: 845px !important;">
            <div class="modal-content position-absolute">
                <div class="modal-body pb-0">
                    <div class="card">
                        <div>
                            @if (optional($nfc_card)->virtual_card_template == 'virtual-card-one')
                                <div class="row mt-5">
                                    <div class="col-12">
                                        <!-- Visiting Card Box Container -->
                                        @include('virtualCard.partials.card_modals.card_one')
                                        <!-- Visiting Card Box Container End-->
                                    </div>
                                </div>
                            @elseif (optional($nfc_card)->virtual_card_template == 'virtual-card-two')
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
                                                <div class="col-lg-4 d-flex justify-content-center align-items-center">
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
                                                        <h1 class="fw-bold" style="font-size: 4rem; color: #D19A26">
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
                <div class="modal-header bg-light-info">
                    <h5 class="modal-title">Card Shipping Address</h5>


                    <div class="btn btn-icon btn-sm btn-active-light-primary ms-2" data-bs-dismiss="modal"
                        aria-label="Close">
                        <i class="fa-solid fa-xmark fs-2x"></i>
                    </div>

                </div>

                <div class="modal-body p-0">
                    <div class="card">
                        <div id="kt_account_settings_profile_details" class="collapse show">
                            <form id="kt_account_profile_details_form"
                                class="form fv-plugins-bootstrap5 fv-plugins-framework" novalidate="novalidate">
                                <div class="card-body border-top p-9">
                                    <div class="row mb-6">
                                        <label class="col-lg-4 col-form-label fw-semibold fs-6">Avatar</label>
                                        <div class="col-lg-8">

                                            <div class="image-input image-input-outline" data-kt-image-input="true"
                                                style="background-image: url('/metronic8/demo1/assets/media/svg/avatars/blank.svg')">

                                                <div class="image-input-wrapper w-125px h-125px"
                                                    style="background-image: url(/metronic8/demo1/assets/media/avatars/300-1.jpg)">
                                                </div>
                                                <label
                                                    class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                                                    data-kt-image-input-action="change" data-bs-toggle="tooltip"
                                                    aria-label="Change avatar" data-bs-original-title="Change avatar"
                                                    data-kt-initialized="1">
                                                    <i class="fa-solid fa-pencil fs-7"></i>

                                                    <input type="file" name="avatar" accept=".png, .jpg, .jpeg">
                                                    <input type="hidden" name="avatar_remove">

                                                </label>
                                                <span
                                                    class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                                                    data-kt-image-input-action="cancel" data-bs-toggle="tooltip"
                                                    aria-label="Cancel avatar" data-bs-original-title="Cancel avatar"
                                                    data-kt-initialized="1">
                                                    <i class="fa-regular fa-trash-can fs-7"><span
                                                            class="path1"></span><span class="path2"></span></i>
                                                </span>
                                                <span
                                                    class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                                                    data-kt-image-input-action="remove" data-bs-toggle="tooltip"
                                                    aria-label="Remove avatar" data-bs-original-title="Remove avatar"
                                                    data-kt-initialized="1">
                                                    <i class="fa-regular fa-trash-can fs-7"><span
                                                            class="path1"></span><span class="path2"></span></i>
                                                </span>
                                            </div>
                                            <div class="form-text">Allowed file types: png, jpg, jpeg.</div>
                                        </div>
                                    </div>
                                    <div class="row mb-6">
                                        <label class="col-lg-4 col-form-label required fw-semibold fs-6">Contact
                                            Person</label>
                                        <div class="col-lg-8">
                                            <div class="row">
                                                <div class="col-lg-6 fv-row fv-plugins-icon-container">
                                                    <input type="text" name="fname"
                                                        class="form-control form-control-lg form-control-solid mb-3 mb-lg-0"
                                                        placeholder="First name"
                                                        value="{{ optional($nfc_card->shippingDetails)->shipping_name }} ">
                                                    <div
                                                        class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback">
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 fv-row fv-plugins-icon-container">
                                                    <input type="text" name="lname"
                                                        class="form-control form-control-lg form-control-solid"
                                                        placeholder="Last name" value="">
                                                    <div
                                                        class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row mb-6">
                                        <label class="col-lg-4 col-form-label fw-semibold fs-6">
                                            <span class="required">Contact Phone</span>
                                            <span class="ms-1" data-bs-toggle="tooltip"
                                                aria-label="Phone number must be active"
                                                data-bs-original-title="Phone number must be active"
                                                data-kt-initialized="1">
                                                <i class="ki-duotone ki-information-5 text-gray-500 fs-6"><span
                                                        class="path1"></span><span class="path2"></span><span
                                                        class="path3"></span></i></span>
                                        </label>

                                        <div class="col-lg-8 fv-row fv-plugins-icon-container">
                                            <input type="tel" name="phone"
                                                class="form-control form-control-lg form-control-solid"
                                                placeholder="Phone number"
                                                value="{{ optional($nfc_card->shippingDetails)->shipping_phone }}">
                                            <div
                                                class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mb-6">
                                        <label class="col-lg-4 col-form-label fw-semibold fs-6">Address</label>
                                        <div class="col-lg-2 fv-row">
                                            <input type="text" name="house"
                                                class="form-control form-control-lg form-control-solid"
                                                placeholder="33-Block, State House"
                                                value="{{ optional($nfc_card->shippingDetails)->shipping_address }}">
                                        </div>

                                        <div class="col-lg-2 fv-row">
                                            <input type="text" name="city"
                                                class="form-control form-control-lg form-control-solid"
                                                placeholder="Menchesta City"
                                                value="{{ optional($nfc_card->shippingDetails)->shipping_city }}">
                                        </div>

                                        <div class="col-lg-2 fv-row">
                                            <input type="text" name="zip-code"
                                                class="form-control form-control-lg form-control-solid"
                                                placeholder="42386"
                                                value="{{ optional($nfc_card->shippingDetails)->shipping_zip_code }}">
                                        </div>

                                        <div class="col-lg-2 fv-row">
                                            <input type="text" name="country"
                                                class="form-control form-control-lg form-control-solid"
                                                placeholder="United State"
                                                value="{{ optional($nfc_card->shippingDetails)->shipping_country }}">
                                        </div>
                                    </div>
                                    <div class="row mb-0">
                                        <label class="col-lg-4 col-form-label fw-semibold fs-6">Instruction</label>
                                        <div class="col-lg-8 d-flex align-items-center">
                                            <div class="form-floating">
                                                <textarea class="form-control form-control-solid w-100" placeholder="Leave a comment here" id="floatingTextarea2"
                                                    style="height: 100px;width: 715px !important;"></textarea>
                                                <label
                                                    for="floatingTextarea2">{{ optional($nfc_card->shippingDetails)->shipping_instruction }}</label>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <div class="card-footer d-flex justify-content-end py-6 px-9">
                                    <button type="submit" class="btn btn-primary"
                                        id="kt_account_profile_details_submit">Save Changes</button>
                                </div>
                                <input type="hidden">
                            </form>

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endforeach

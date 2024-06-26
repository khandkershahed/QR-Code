<x-app-layout :title="'Virtual Card List'">
    <div class="row">
        <div class="col-lg-12">
            <div class="d-flex align-items-center rounded py-5 px-5 bg-light-primary" style="border: 1px dashed blue;">
                <i class="ki-duotone ki-information-5 fs-3x text-warning me-5">
                    <span class="path1"></span><span class="path2"></span><span class="path3"></span>
                </i>
                <!--begin::Description-->
                <div class="d-flex justify-content-between align-items-center w-100">
                    <div class="text-gray-700 fw-bold d-flex ">
                        <strong class=""> Total Reuested Virtual Card: {{ $virtual_cards->count() }}
                        </strong>
                    </div>
                    <div>
                        <a href="{{ route('user.virtual-card.create') }}" class="btn btn-sm btn-primary rounded-2 me-3">
                            Create Virtual Card
                        </a>
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
                            {{-- @foreach ($virtual_cards as $virtual_card)
                                <tr>
                                    <td>
                                        {{ $loop->iteration }}
                                    </td>
                                    <td>
                                        @if ($virtual_card->nfc_template == 'template-one')
                                            <img class="img-fluid w-50px"
                                                src="{{ asset('frontend/assets/images/nfc-templates/template_one.jpg') }}"
                                                alt="">
                                        @elseif ($virtual_card->nfc_template == 'template-two')
                                            <img class="img-fluid w-50px"
                                                src="{{ asset('frontend/assets/images/nfc-templates/template_two.jpg') }}"
                                                alt="">
                                        @elseif ($virtual_card->nfc_template == 'template-three')
                                            <img class="img-fluid w-50px"
                                                src="{{ asset('frontend/assets/images/nfc-templates/template_three.jpg') }}"
                                                alt="">
                                        @elseif ($virtual_card->nfc_template == 'template-four')
                                            <img class="img-fluid w-50px"
                                                src="{{ asset('frontend/assets/images/nfc-templates/template_four.jpg') }}"
                                                alt="">
                                        @elseif ($virtual_card->nfc_template == 'template-five')
                                            <img class="img-fluid w-50px"
                                                src="{{ asset('frontend/assets/images/nfc-templates/template_five.jpg') }}"
                                                alt="">
                                        @elseif ($virtual_card->nfc_template == 'template-six')
                                            <img class="img-fluid w-50px"
                                                src="{{ asset('frontend/assets/images/nfc-templates/template_six.jpg') }}"
                                                alt="">
                                        @endif
                                    </td>
                                    <td>
                                        @if (optional($virtual_card->virtualCard)->virtual_card_template == 'virtual-card-one')
                                            <img class="img-fluid w-50px"
                                                src="{{ asset('frontend/images/virtual_card/virtual_card_1.png') }}"
                                                alt="">
                                        @elseif (optional($virtual_card->virtualCard)->virtual_card_template == 'virtual-card-two')
                                            <img class="img-fluid w-50px"
                                                src="{{ asset('frontend/images/virtual_card/virtual_card_2.png') }}"
                                                alt="">
                                        @elseif (optional($virtual_card->virtualCard)->virtual_card_template == 'virtual-card-three')
                                            <img class="img-fluid w-50px"
                                                src="{{ asset('frontend/images/virtual_card/virtual_card_3.png') }}"
                                                alt="">
                                        @elseif (optional($virtual_card->virtualCard)->virtual_card_template == 'virtual-card-four')
                                            <img class="img-fluid w-50px"
                                                src="{{ asset('frontend/images/virtual_card/virtual_card_4.png') }}"
                                                alt="">
                                        @elseif (optional($virtual_card->virtualCard)->virtual_card_template == 'virtual-card-five')
                                            <img class="img-fluid w-50px"
                                                src="{{ asset('frontend/images/virtual_card/virtual_card_5.png') }}"
                                                alt="">
                                        @elseif (optional($virtual_card->virtualCard)->virtual_card_template == 'virtual-card-six')
                                            <img class="img-fluid w-50px"
                                                src="{{ asset('frontend/images/virtual_card/virtual_card_6.png') }}"
                                                alt="">
                                        @elseif (optional($virtual_card->virtualCard)->virtual_card_template == 'virtual-card-seven')
                                            <img class="img-fluid w-50px"
                                                src="{{ asset('frontend/images/virtual_card/virtual_card_7.png') }}"
                                                alt="">
                                        @elseif (optional($virtual_card->virtualCard)->virtual_card_template == 'virtual-card-eight')
                                            <img class="img-fluid w-50px"
                                                src="{{ asset('frontend/images/virtual_card/virtual_card_8.png') }}"
                                                alt="">
                                        @endif
                                    </td>
                                    <td>
                                        <div class="text-success">{{ optional($virtual_card->nfcData)->first_name }}
                                            {{ optional($virtual_card->nfcData)->last_name }}
                                        </div>
                                    </td>

                                    <td>
                                        <a href="{{ $virtual_card->nfc_url }}" target="_blank" class="text-primary">
                                            <button class="btn btn-sm btn-info">NFC <i
                                                    class="fas fa-link ps-2"></i></button>
                                        </a>
                                    </td>
                                    <td>
                                        <a href="javascript:void(0)" data-bs-toggle="modal"
                                            data-bs-target="#virtual_card_modal_{{ $virtual_card->id }}"
                                            class="text-primary">
                                            <button class="btn btn-sm btn-info"><i class="fas fa-eye pe-2"></i>
                                                CARD</button>
                                        </a>
                                    </td>
                                    <td>
                                        <a href="javascript:void(0)" data-bs-toggle="modal"
                                            data-bs-target="#shipping_address_modal_{{ $virtual_card->id }}"
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
                                                <a href="#" class="menu-link px-3" data-bs-toggle="modal"
                                                    data-bs-target="#message_modal_{{ $virtual_card->id }}">
                                                    All messages
                                                </a>
                                                <a href="{{ route('user.nfc-card.show', $virtual_card->code) }}"
                                                    class="menu-link px-3">
                                                    All messages
                                                </a>
                                            </div>
                                            <div class="menu-item px-3">
                                                <a href="{{ route('user.nfc-card.edit', $virtual_card->code) }}"
                                                    class="menu-link px-3">
                                                    Edit
                                                </a>
                                            </div>
                                            <!--end::Menu item-->

                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="{{ route('user.nfc-card.destroy', $virtual_card->id) }}"
                                                    class="menu-link px-3 delete">
                                                    Delete
                                                </a>
                                            </div>
                                            <!--end::Menu item-->
                                        </div>
                                    </td>
                                </tr>
                            @endforeach --}}
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

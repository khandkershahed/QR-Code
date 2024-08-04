<div class="col-lg-12 mt-10">
    <div class="card card-p-0 card-flush pt-0 mb-5">
        <div class="card-header bg-info align-items-center">
            <h1 class="mb-0 text-center w-100 text-white">All List Of VCard</h1>
        </div>
        <div class="card-body table-responsive">
            <table class="table my-datatable table-striped table-row-bordered gy-5 gs-7 border rounded">
                <thead>
                    <tr class="fw-bold fs-6 text-gray-800 px-7">
                        <th width="5%">SL</th>
                        <th width="20%">VCard Name</th>
                        <th width="15%">Preview Card</th>
                        <th width="15%">QR</th>
                        <th width="15%">Viewer</th>
                        <th width="15%">Performance</th>
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
                                            <img class="img-fluid w-45px h-60px"
                                                src="{{ asset('frontend/assets/images/nfc-templates/template_one.png') }}"
                                                alt="">
                                        @elseif ($nfc_card->nfc_template == 'template-two')
                                            <img class="img-fluid w-45px h-60px"
                                                src="{{ asset('frontend/assets/images/nfc-templates/template_two.png') }}"
                                                alt="">
                                        @elseif ($nfc_card->nfc_template == 'template-three')
                                            <img class="img-fluid w-45px h-60px"
                                                src="{{ asset('frontend/assets/images/nfc-templates/template_three.png') }}"
                                                alt="">
                                        @elseif ($nfc_card->nfc_template == 'template-four')
                                            <img class="img-fluid w-45px h-60px"
                                                src="{{ asset('frontend/assets/images/nfc-templates/template_four.jpg') }}"
                                                alt="">
                                        @elseif ($nfc_card->nfc_template == 'template-five')
                                            <img class="img-fluid w-45px h-60px"
                                                src="{{ asset('frontend/assets/images/nfc-templates/template_five.jpg') }}"
                                                alt="">
                                        @elseif ($nfc_card->nfc_template == 'template-six')
                                            <img class="img-fluid w-45px h-60px"
                                                src="{{ asset('frontend/assets/images/nfc-templates/template_six.jpg') }}"
                                                alt="">
                                        @else
                                            <img class="img-fluid w-45px h-60px"
                                                src="{{ asset('frontend/assets/images/nfc-templates/template_one.png') }}"
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
                                <a href="{{ $nfc_card->nfc_url }}" target="_blank" class="text-primary">
                                    <button class="btn btn-sm btn-info">VCard <i class="fas fa-link ps-2"></i></button>
                                </a>
                            </td>
                            <td>
                                <a href="javascript:void(0)" data-bs-toggle="modal"
                                    data-bs-target="#virtual_card_modal_{{ $nfc_card->id }}" class="text-primary">
                                    <button class="btn btn-sm btn-info"><i class="fas fa-eye pe-2"></i>
                                        QR</button>
                                </a>
                            </td>
                            <td>
                                @if (strpos(Route::current()->getName(), 'user.') === 0)
                                    <a href="{{ route('user.virtual-card.show', $nfc_card->code) }}"
                                        class="btn btn-light-primary">{{ $nfc_card->nfcScan->count() }}</a>
                                @else
                                    <a href="{{ route('admin.virtual-card.show', $nfc_card->code) }}"
                                        class="btn btn-light-primary">{{ $nfc_card->nfcScan->count() }}</a>
                                @endif

                            </td>
                            <td>
                                @if (strpos(Route::current()->getName(), 'user.') === 0)
                                    <a href="{{ route('user.virtual-card.show', $nfc_card->code) }}" class="">
                                        <svg xmlns="http://www.w3.org/2000/svg" version="1.1"
                                            xmlns:xlink="http://www.w3.org/1999/xlink" width="30" height="30"
                                            x="0" y="0" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512"
                                            xml:space="preserve" class="">
                                            <g>
                                                <linearGradient id="a" x1="540.666" x2="83.165"
                                                    y1="98.786" y2="556.286" gradientUnits="userSpaceOnUse">
                                                    <stop offset="0" stop-color="#e93528"></stop>
                                                    <stop offset="1" stop-color="#f8bc16"></stop>
                                                </linearGradient>
                                                <path fill="url(#a)"
                                                    d="M466.493 143.212h-84.197c-8.837 0-16 7.164-16 16v33.286h-68.197c-8.837 0-16 7.164-16 16v33.287h-68.197c-8.837 0-16 7.164-16 16v45.607h-68.197c-8.837 0-16 7.164-16 16v30.847H45.507c-8.837 0-16 7.164-16 16V496c0 8.836 7.163 16 16 16h420.986c8.837 0 16-7.164 16-16V159.212c0-8.837-7.163-16-16-16zM61.507 382.238h52.197V480H61.507zm84.197-46.847h52.197V480h-52.197zm84.197-61.607h52.197V480h-52.197zm84.198-49.286h52.197V480h-52.197zM450.493 480h-52.197V175.212h52.197zM54.656 251.375c-2.685-8.419 1.965-17.42 10.384-20.104 98.057-31.267 246.258-120.707 331.414-198.465l-32.666.675a18.93 18.93 0 0 1-.337.003c-8.683 0-15.81-6.947-15.99-15.669-.182-8.835 6.832-16.145 15.667-16.327L434.923.005a15.912 15.912 0 0 1 12.003 5.054 16 16 0 0 1 4.269 12.305l-6.115 71.549c-.752 8.804-8.488 15.334-17.304 14.579-8.805-.752-15.332-8.5-14.579-17.304l2.353-27.525c-38.472 34.691-90.204 72.933-146.151 107.807-70.375 43.867-139.498 77.708-194.637 95.289a15.97 15.97 0 0 1-4.864.761c-6.78-.002-13.072-4.343-15.242-11.145z"
                                                    opacity="1" data-original="url(#a)" class=""></path>
                                            </g>
                                        </svg>
                                    </a>
                                @else
                                    <a href="{{ route('admin.virtual-card.show', $nfc_card->code) }}" target="_blank"
                                        class="text-primary">
                                        <button class="btn btn-sm btn-info">Summary <svg
                                                xmlns="http://www.w3.org/2000/svg" version="1.1"
                                                xmlns:xlink="http://www.w3.org/1999/xlink" width="20" height="20"
                                                x="0" y="0" viewBox="0 0 512 512"
                                                style="enable-background:new 0 0 512 512" xml:space="preserve"
                                                class="">
                                                <g>
                                                    <linearGradient id="a" x1="540.666" x2="83.165"
                                                        y1="98.786" y2="556.286" gradientUnits="userSpaceOnUse">
                                                        <stop offset="0" stop-color="#e93528"></stop>
                                                        <stop offset="1" stop-color="#f8bc16"></stop>
                                                    </linearGradient>
                                                    <path fill="url(#a)"
                                                        d="M466.493 143.212h-84.197c-8.837 0-16 7.164-16 16v33.286h-68.197c-8.837 0-16 7.164-16 16v33.287h-68.197c-8.837 0-16 7.164-16 16v45.607h-68.197c-8.837 0-16 7.164-16 16v30.847H45.507c-8.837 0-16 7.164-16 16V496c0 8.836 7.163 16 16 16h420.986c8.837 0 16-7.164 16-16V159.212c0-8.837-7.163-16-16-16zM61.507 382.238h52.197V480H61.507zm84.197-46.847h52.197V480h-52.197zm84.197-61.607h52.197V480h-52.197zm84.198-49.286h52.197V480h-52.197zM450.493 480h-52.197V175.212h52.197zM54.656 251.375c-2.685-8.419 1.965-17.42 10.384-20.104 98.057-31.267 246.258-120.707 331.414-198.465l-32.666.675a18.93 18.93 0 0 1-.337.003c-8.683 0-15.81-6.947-15.99-15.669-.182-8.835 6.832-16.145 15.667-16.327L434.923.005a15.912 15.912 0 0 1 12.003 5.054 16 16 0 0 1 4.269 12.305l-6.115 71.549c-.752 8.804-8.488 15.334-17.304 14.579-8.805-.752-15.332-8.5-14.579-17.304l2.353-27.525c-38.472 34.691-90.204 72.933-146.151 107.807-70.375 43.867-139.498 77.708-194.637 95.289a15.97 15.97 0 0 1-4.864.761c-6.78-.002-13.072-4.343-15.242-11.145z"
                                                        opacity="1" data-original="url(#a)" class=""></path>
                                                </g>
                                            </svg>
                                        </button>
                                    </a>
                                @endif
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

                                            <a href="{{ route('user.virtual-card.show', $nfc_card->code) }}"
                                                class="menu-link px-3">
                                                All messages
                                            </a>
                                        </div>
                                        <div class="menu-item px-3">
                                            <a href="{{ route('user.virtual-card.edit', $nfc_card->code) }}"
                                                class="menu-link px-3">
                                                Edit
                                            </a>
                                        </div>
                                    @else
                                        <div class="menu-item px-3">

                                            <a href="javascript:void(0)" data-bs-toggle="modal"
                                                data-bs-target="#message_modal_{{ $nfc_card->id }}"
                                                class="menu-link px-3">
                                                All messages
                                            </a>
                                        </div>
                                        <div class="menu-item px-3">
                                            <a href="{{ route('admin.virtual-card.edit', $nfc_card->code) }}"
                                                class="menu-link px-3">
                                                Edit
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
                <div class="modal-header">
                    <h5 class="modal-title">Generated QR</h5>
                    <div class="btn btn-icon btn-sm btn-active-light-primary ms-2" data-bs-dismiss="modal"
                        aria-label="Close">
                        <i class="ki-duotone ki-cross fs-2x"><span class="path1"></span><span
                                class="path2"></span></i>
                    </div>
                </div>
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

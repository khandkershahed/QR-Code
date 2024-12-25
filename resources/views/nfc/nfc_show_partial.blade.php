<div class="container-fluid">
    <div class="row gx-0">
        <div class="col-lg-12">
            <div class="card p-0">
                <div class="card-body">
                    <div class="row align-items-center ">
                        <div class="col-lg-2">
                            <div class="text-center">
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
                                        src="{{ asset('frontend/assets/images/nfc-templates/template_five.png') }}"
                                        alt="">
                                @elseif ($nfc_card->nfc_template == 'template-six')
                                    <img class="img-fluid w-50px"
                                        src="{{ asset('frontend/assets/images/nfc-templates/template_six.jpg') }}"
                                        alt="">
                                @endif
                            @elseif ($nfc_card->nfc_template == 'template-seven')
                                <img class="img-fluid w-50px"
                                    src="{{ asset('frontend/assets/images/nfc-templates/template_seven.jpg') }}"
                                    alt="">
                                @endif
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div>
                                <div>
                                    <div class="table-responsive ">
                                        <table class="table table-striped ">
                                            <thead class="">
                                                <tr>
                                                    <th colspan="2" class="text-start ps-5 fs-1">
                                                        {{ $nfc_card->code }}
                                                    </th>
                                                </tr>
                                            </thead>
                                            <tbody class="table-group-divider">
                                                <tr class="p-3">
                                                    <td scope="row" class="ps-5">Name :</td>
                                                    <td class="" style="width: 90%">
                                                        {{ optional($nfc_card->nfcData)->first_name }}&nbsp;{{ optional($nfc_card->nfcData)->last_name }}
                                                    </td>
                                                </tr>
                                                <tr class="p-3">
                                                    <td scope="row" class="ps-5">Link :</td>
                                                    <td class="" style="width: 90%">
                                                        <a href="{{ $nfc_card->nfc_url }}" target="_blank"
                                                            class="text-primary">{{ $nfc_card->nfc_url }}</a>
                                                    </td>
                                                </tr>
                                                <tr class="">
                                                    <td scope="row" class="ps-5">Created:</td>
                                                    <td style="width: 80%">
                                                        {{ $nfc_card->created_at->format('F jS, Y') }}</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2">
                            <div class="text-center">
                                <div class="symbol symbol-65px symbol-circle mb-5">
                                    <span
                                        class="symbol-label fs-2x fw-semibold text-success bg-light-success">{{ optional($nfc_card->nfcScan)->count() }}</span>
                                </div>
                                <h2>
                                    <a href="#">NFC Checked</a>
                                </h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row g-5 g-xl-8 mt-5">
        <div class="{{ $nfc_card->nfcScan->count() < '99' ? 'col-xl-2' : 'col-xl-3' }}">
            <div class="card card-flush bgi-no-repeat bgi-size-cover bgi-position-x-end h-xl-100"
                style="background-color: #F1416C;background-image:url({{ asset('admin/assets/media/svg/shapes/wave-bg-red.svg') }})">
                <div class="card-body d-flex align-items-center justify-content-center">
                    <div class="d-flex align-items-center">
                        <span class="fs-3hx text-white fw-bold me-6">{{ $nfc_card->nfcScan->count() }}</span>
                        <div class="fw-bold fs-6 text-white">
                            <span class="d-block">NFC Checked</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="{{ count($users) < '99' ? 'col-xl-2' : 'col-xl-3' }}">
            <div class="card card-flush bgi-no-repeat bgi-size-cover bgi-position-x-end h-xl-100"
                style="background-color: #7239EA;background-image:url({{ asset('admin/assets/media/svg/shapes/wave-bg-purple.svg') }})">
                <div class="card-body d-flex align-items-center justify-content-center">
                    <div class="d-flex align-items-center">
                        <span class="fs-3hx text-white fw-bold me-6">{{ count($users) }}</span>
                        <div class="fw-bold fs-6 text-white">
                            <span class="d-block">Users</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12 mt-5">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header" style=" min-height: 0px;">
                            <h4 class="mb-0 p-5">Scans By City</h4>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-striped gy-5 gs-5">
                                    <thead class="bg-light-600">
                                        <tr class="fw-semibold fs-6 text-gray-800 border-bottom-2 border-gray-200">
                                            <th class="">CITY</th>
                                            <th class="">STATE/PROVINCE</th>
                                            <th class="">COUNTRY </th>
                                            <th class="">SCANS</th>
                                            <th class="">% OF SCANS</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($cities as $city => $details)
                                            <tr>
                                                <td>{{ $city }}</td>
                                                <td>{{ $details['state_province'] }}</td>
                                                <td>{{ $details['country'] }}</td>
                                                <td>{{ $details['scans'] }}</td>
                                                <td>
                                                    {{ number_format(($details['scans'] / $totalScans) * 100, 2) }}%
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
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12 mt-5">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header" style=" min-height: 0px;">
                            <h4 class="mb-0 p-5">All Contact Messages</h4>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-striped gy-5 gs-5">
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
                                                <td class="text-start">
                                                    <a href="mailto:{{ optional($nfc_message)->email }}"
                                                        target="_blank">{{ optional($nfc_message)->email }}</a>

                                                </td>
                                                <td>
                                                    {{ optional($nfc_message)->ip_address }}
                                                </td>
                                                <td class="text-start">
                                                    {{ optional($nfc_message)->message }}
                                                </td>
                                                <td class="pe-0">
                                                    <a href="#"
                                                        class="btn btn-light btn-active-light-primary btn-sm"
                                                        data-kt-menu-trigger="click"
                                                        data-kt-menu-placement="bottom-end"
                                                        data-kt-menu-flip="top-end">
                                                        Actions
                                                        <span class="svg-icon fs-5 m-0">
                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                width="24px" height="24px" viewBox="0 0 24 24"
                                                                version="1.1">
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
                                                        data-kt-menu="true ">
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
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<x-admin-app-layout :title="'QR Summary ' . $qr->code">

    <div class="container-fluid">
        <div class="row gx-0">
            <div class="col-lg-12">
                <div class="card p-0">
                    <div class="card-body p-0">
                        <div class="row align-items-center ">
                            <div class="col-lg-2">
                                <div class="text-center">
                                    <img class="img-fluid w-300px" src="{{ $qr->qr_png_url }}" alt="">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="table-responsive ">
                                    <table class="table table-striped ">
                                        <thead class="">
                                            <tr>
                                                <th colspan="2" class="text-start ps-5 fs-1">
                                                    {{ $qr->code }}
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody class="table-group-divider">
                                            <tr class="p-3">
                                                <td scope="row" class="ps-5">Link :</td>
                                                <td class="" style="width: 90%">
                                                    <a href="{{ $qr->qr_png_url }}"
                                                        target="_blank">{{ $qr->qr_png_url }}</a>
                                                </td>
                                            </tr>
                                            <tr class="">
                                                <td scope="row" class="ps-5">Created:</td>
                                                <td style="width: 80%">{{ $qr->created_at->format('F jS, Y') }}
                                                </td>
                                            </tr>
                                            {{-- <tr class=" ps-5">
                                                <td scope="row" class="ps-5"> Lables :</td>
                                                <td style="width: 90%">Item</td>
                                            </tr> --}}
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="col-lg-2">
                                <div class="text-center">
                                    <div class="symbol symbol-65px symbol-circle mb-5">
                                        <span
                                            class="symbol-label fs-2x fw-semibold text-success bg-light-success">{{ $qr->qrScan->count() }}</span>
                                    </div>
                                    <h2>
                                        <a href="javascript:void(0)">Scnas QR</a>
                                    </h2>
                                </div>
                            </div>
                            <div class="col-lg-2">
                                <div class="flex-column w-100 p-5">
                                    <div class="card-toolbar">
                                        <button class="btn btn-primary w-100 mb-2" data-kt-menu-trigger="click"
                                            data-kt-menu-placement="bottom-end" data-kt-menu-overflow="true">
                                            <i class="bi bi-file-download fs-4 me-2"></i> Download
                                        </button>
                                        <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px"
                                            data-kt-menu="true ">
                                            <div class="menu-item px-3">
                                                <div class="menu-content fs-6 text-gray-900 fw-bold px-3 py-4">
                                                    Download QR
                                                </div>
                                            </div>

                                            <div class="separator mb-3 opacity-75"></div>

                                            @if (!empty($qr->qr_png))
                                                <div class="menu-item px-3">
                                                    <a href="{{ $qr->qr_png_url }}" class="menu-link px-3" download
                                                        data-kt-docs-table-filter="edit_row">
                                                        PNG
                                                    </a>
                                                </div>
                                            @endif
                                            @if (!empty($qr->qr_svg))
                                                <div class="menu-item px-3">
                                                    <a href="{{ $qr->qr_svg_url }}" class="menu-link px-3" download
                                                        data-kt-docs-table-filter="edit_row">
                                                        SVG
                                                    </a>
                                                </div>
                                            @endif
                                            @if (!empty($qr->qr_eps))
                                                <div class="menu-item px-3">
                                                    <a href="{{ $qr->qr_eps_url }}" class="menu-link px-3" download
                                                        data-kt-docs-table-filter="edit_row">
                                                        EPS
                                                    </a>
                                                </div>
                                            @endif
                                            @if (!empty($qr->qr_jpg))
                                                <div class="menu-item px-3">
                                                    <a href="{{ $qr->qr_jpg_url }}" class="menu-link px-3" download
                                                        data-kt-docs-table-filter="edit_row">
                                                        JPG
                                                    </a>
                                                </div>
                                            @endif
                                            @if (!empty($qr->qr_pdf))
                                                <div class="menu-item px-3">
                                                    <a href="{{ $qr->qr_pdf_url }}" class="menu-link px-3" download
                                                        data-kt-docs-table-filter="edit_row">
                                                        PDF
                                                    </a>
                                                </div>
                                            @endif
                                            <div class="separator mt-3 opacity-75"></div>
                                        </div>
                                    </div>
                                    <a href="#" class="btn btn-danger w-100 mb-2"><i
                                            class="bi bi-trash fs-4 me-2"></i> Delete</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row g-5 g-xl-8 mt-5">
            <div class="col-xl-3">
                <a href="#" class="card bg-body hoverable card-xl-stretch mb-xl-8">
                    <div class="card-body">
                        <i class="fa-solid fa-cheque text-gray-100 fs-2x ms-n1"><span class="path1"></span><span
                                class="path2"></span><span class="path3"></span><span class="path4"></span><span
                                class="path5"></span><span class="path6"></span><span class="path7"></span></i>
                        <div class="text-gray-900 fw-bold fs-2 mb-2 mt-5">{{ $qr->qrScan->count() }}</div>
                        <div class="text-gray-900 fw-bold fs-2 mb-2 mt-5">Scans</div>
                    </div>
                </a>
            </div>
            <div class="col-xl-3">
                <a href="#" class="card bg-dark hoverable card-xl-stretch mb-xl-8">
                    <div class="card-body">
                        <i class="fa-solid fa-cheque text-gray-100 fs-2x ms-n1"><span class="path1"></span><span
                                class="path2"></span><span class="path3"></span><span class="path4"></span><span
                                class="path5"></span><span class="path6"></span><span class="path7"></span></i>
                        <div class="text-white fw-bold fs-2 mb-2 mt-5">{{ count($users) }}</div>
                        <div class="text-white fw-bold fs-2 mb-2 mt-5">Users</div>
                    </div>
                </a>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 mt-5">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header px-0" style=" min-height: 0px;">
                                <h4 class="mb-0 p-5">Scans By City</h4>
                            </div>
                            <div class="card-body p-0">
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
        {{-- <div class="row mt-5">
            <div class="col-xl-12">
                <div class="card card-xl-stretch mb-xl-8">
                    <div class="card-header border-0 pt-5">
                        <h3 class="card-title align-items-start flex-column">
                            <span class="card-label fw-bold fs-3 mb-1">Location of the Scans</span>

                            <span class="text-muted fw-semibold fs-7">History of Device</span>
                        </h3>
                    </div>

                    <div class="card-body p-0">
                        <div id="map" style="height: 400px;
                            width: 100%;"></div>
                    </div>
                </div>
            </div>
        </div> --}}
    </div>
    @push('scripts')
        <script>
            function initMap() {
                var map = new google.maps.Map(document.getElementById('map'), {
                    zoom: 4,
                    center: {
                        lat: 0,
                        lng: 0
                    }
                });

                @foreach ($locations as $location)
                    var marker = new google.maps.Marker({
                        position: {
                            lat: parseFloat("{{ $location->latitude }}"),
                            lng: parseFloat("{{ $location->longitude }}")
                        },
                        map: map,
                        title: "{{ $location->cityName }}, {{ $location->regionName }}, {{ $location->countryName }}"
                    });
                @endforeach
            }
        </script>
    @endpush
</x-admin-app-layout>

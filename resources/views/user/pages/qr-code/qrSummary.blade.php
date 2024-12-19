<x-app-layout :title="'QR Summary ' . $qr->code">

    <div class="container-fluid">
        {{-- <div id="kt_app_toolbar_container" class="app-container  container-fluid d-flex flex-stack mb-10">
            <div class="page-title d-flex flex-column justify-content-center flex-wrap me-3 ">
                <h1 class="page-heading d-flex text-gray-900 fw-bold fs-1 flex-column justify-content-center my-0">
                    QR Code Analytic
                </h1>
            </div>
            <div class="d-flex align-items-center gap-2 gap-lg-3">
                <a href="#" class="btn  fw-bold btn-primary" data-bs-toggle="modal"
                    data-bs-target="#kt_modal_create_app">
                    <i class="bi bi-plus fs-1 me-2"></i> Create QR</a>

            </div>

        </div> --}}
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
                                <div>
                                    <div>
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
                                    {{-- <a href="#" class="btn btn-primary w-100 mb-2"><i
                                            class="bi bi-pen fs-4 me-2"></i> Edit</a> --}}
                                    <div class="card-toolbar">
                                        <button class="btn btn-primary mb-2" data-kt-menu-trigger="click"
                                            data-kt-menu-placement="bottom-end" data-kt-menu-overflow="true">
                                            <i class="fas fa-download fs-4 me-2"></i> Download
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
                                            <!--end::Menu item-->

                                            <!--begin::Menu item-->
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
                                            <!--end::Menu item-->
                                            <div class="separator mt-3 opacity-75"></div>
                                        </div>
                                    </div>
                                    {{-- <a href="#" class="btn btn-danger w-100 mb-2"><i
                                            class="bi bi-trash fs-4 me-2"></i> Delete</a> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row g-5 g-xl-8 mt-5">
            <div class="{{ $qr->qrScan->count() < '99' ? 'col-xl-2' : 'col-xl-3'}}">
                <div class="card card-flush bgi-no-repeat bgi-size-cover bgi-position-x-end h-xl-100"
                    style="background-color: #F1416C;background-image:url({{ asset('admin/assets/media/svg/shapes/wave-bg-red.svg') }})">
                    <div class="card-body d-flex align-items-center justify-content-center">
                        <div class="d-flex align-items-center">
                            <span class="fs-3hx text-white fw-bold me-6">{{ $qr->qrScan->count() }}</span>
                            <div class="fw-bold fs-6 text-white">
                                <span class="d-block">Scans</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="{{ count($users) < '99' ? 'col-xl-2' : 'col-xl-3'}}">
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
        <div class="row mt-5">
            <div class="col-xl-12">
                <div class="card card-xl-stretch mb-xl-8">
                    <div class="card-header border-0 pt-5">
                        <h3 class="card-title align-items-start flex-column">
                            <span class="card-label fw-bold fs-3 mb-1">Location of the Scans</span>

                            <span class="text-muted fw-semibold fs-7">History of Device</span>
                        </h3>

                        {{-- <div class="card-toolbar" data-kt-buttons="true" data-kt-initialized="1">
                            <a class="btn btn-sm btn-color-muted btn-active btn-active-primary active px-4 me-1"
                                id="kt_charts_widget_3_year_btn">Year</a>

                            <a class="btn btn-sm btn-color-muted btn-active btn-active-primary px-4 me-1"
                                id="kt_charts_widget_3_month_btn">Month</a>

                            <a class="btn btn-sm btn-color-muted btn-active btn-active-primary px-4"
                                id="kt_charts_widget_3_week_btn">Week</a>
                        </div> --}}
                    </div>

                    <div class="card-body p-0">
                        {{-- <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d29211.866683082448!2d90.33816573476561!3d23.765797000000006!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c0a0fd8bbf63%3A0x578e43f255f711a4!2sMohammadpur%20Agrecultural%20Market%20Complex%2C%20Ring%20Rd%2C%20Dhaka!5e0!3m2!1sen!2sbd!4v1714968885877!5m2!1sen!2sbd"
                            width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe> --}}
                        <div id="map" style="height: 400px;
                            width: 100%;"></div>
                    </div>
                </div>
            </div>
        </div>
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



</x-app-layout>

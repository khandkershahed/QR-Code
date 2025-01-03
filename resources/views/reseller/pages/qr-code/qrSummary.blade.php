<x-app-layout :title="'QR Summary {{ $qr->code }}'">

    <div class="container-fluid">
        <div id="kt_app_toolbar_container" class="app-container  container-fluid d-flex flex-stack mb-10">
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

        </div>
        <div class="row gx-0">
            <div class="col-lg-12">
                <div class="card p-0">
                    <div class="card-body p-0">
                        <div class="row align-items-center ">
                            <div class="col-lg-2">
                                <div class="text-center">
                                    <img width="200px" class="img-fluid"
                                        src="https://qrcg-free-editor.qr-code-generator.com/main/assets/images/websiteQRCode_noFrame.png"
                                        alt="">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div>
                                    <div>
                                        <div class="table-responsive ">
                                            <table class="table table-striped ">
                                                <thead class="">
                                                    <tr>
                                                        <th colspan="2" class="text-start ps-5 fs-1">Phone Call
                                                            05/05/2024
                                                        </th>
                                                    </tr>
                                                </thead>
                                                <tbody class="table-group-divider">
                                                    <tr class="p-3">
                                                        <td scope="row" class="ps-5">Link :</td>
                                                        <td class="" style="width: 90%">
                                                            <a href="#">https://www.google.com/</a>
                                                        </td>
                                                    </tr>
                                                    <tr class="">
                                                        <td scope="row" class="ps-5">Created:</td>
                                                        <td style="width: 80%">May 06, 2024</td>
                                                    </tr>
                                                    <tr class=" ps-5">
                                                        <td scope="row" class="ps-5"> Lables :</td>
                                                        <td style="width: 90%">Item</td>
                                                    </tr>
                                                </tbody>
                                                <tfoot>

                                                </tfoot>
                                            </table>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-2">
                                <div class="text-center">
                                    <div class="symbol symbol-65px symbol-circle mb-5">
                                        <span
                                            class="symbol-label fs-2x fw-semibold text-success bg-light-success">10</span>
                                    </div>
                                    <h2>
                                        <a href="#">Scnas QR</a>
                                    </h2>
                                </div>
                            </div>
                            <div class="col-lg-2">
                                <div class="flex-column w-100 p-5">
                                    <a href="#" class="btn btn-primary w-100 mb-2"><i
                                            class="bi bi-pen fs-4 me-2"></i> Edit</a>
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

                                            <div class="menu-item px-3">
                                                <a href="#" class="menu-link px-3">
                                                    PNG
                                                </a>
                                            </div>

                                            <div class="menu-item px-3">
                                                <a href="#" class="menu-link px-3">
                                                    JPG
                                                </a>
                                            </div>
                                            <div class="menu-item px-3">
                                                <a href="#" class="menu-link px-3">
                                                    SVG
                                                </a>
                                            </div>
                                            <div class="menu-item px-3">
                                                <a href="#" class="menu-link px-3">
                                                    EPS
                                                </a>
                                            </div>
                                            <div class="menu-item px-3">
                                                <a href="#" class="menu-link px-3">
                                                    PDF
                                                </a>
                                            </div>
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
                        <div class="text-gray-900 fw-bold fs-2 mb-2 mt-5">10</div>
                        <div class="text-gray-900 fw-bold fs-2 mb-2 mt-5">Scans</div>
                        <div class="fw-semibold text-gray-400"><span class="text-success pe-1">↑</span>100 % than
                            previous period</div>
                    </div>
                </a>
            </div>
            <div class="col-xl-3">
                <a href="#" class="card bg-dark hoverable card-xl-stretch mb-xl-8">
                    <div class="card-body">
                        <i class="fa-solid fa-cheque text-gray-100 fs-2x ms-n1"><span class="path1"></span><span
                                class="path2"></span><span class="path3"></span><span class="path4"></span><span
                                class="path5"></span><span class="path6"></span><span class="path7"></span></i>
                        <div class="text-white fw-bold fs-2 mb-2 mt-5">3</div>
                        <div class="text-white fw-bold fs-2 mb-2 mt-5">Users</div>
                        <div class="fw-semibold text-white"><span class="text-success pe-1">↑</span> 100 % than
                            previous period</div>
                    </div>
                </a>
            </div>
            <div class="col-xl-3">
                <a href="#" class="card bg-warning hoverable card-xl-stretch mb-xl-8">
                    <div class="card-body">
                        <i class="fa-solid fa-briefcase text-white fs-2x ms-n1"><span class="path1"></span><span
                                class="path2"></span></i>

                        <div class="text-white fw-bold fs-2 mb-2 mt-5">06</div>
                        <div class="text-gray-100 fw-bold fs-2 mb-2 mt-5">Unique users</div>
                        <div class="fw-semibold text-white"><span class="text-success pe-1">↑</span> Apr 30, 2024
                            to May 06, 2024</div>
                    </div>
                </a>
            </div>
            <div class="col-xl-3">
                <a href="#" class="card bg-info hoverable card-xl-stretch mb-5 mb-xl-8">
                    <div class="card-body">
                        <i class="fa-solid fa-chart-pie-simple text-white fs-2x ms-n1"><span
                                class="path1"></span><span class="path2"></span></i>
                        <div class="text-white fw-bold fs-2 mb-2 mt-5">03</div>
                        <div class="text-gray-100 fw-bold fs-2 mb-2 mt-5">New Country</div>
                        <div class="fw-semibold text-white"><span class="text-success pe-1">↑</span> History Of Qr
                            Code Scan in Counry </div>
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
                                                <th class="">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Dhaka</td>
                                                <td>Mirpur</td>
                                                <td>Bangladesh</td>
                                                <td>12</td>
                                                <td>100.00%</td>
                                                <td>Actions</td>
                                            </tr>
                                            <tr>
                                                <td>Garrett Winters</td>
                                                <td>Accountant</td>
                                                <td>Tokyo</td>
                                                <td>63</td>
                                                <td>2011/07/25</td>
                                                <td>$170,750</td>
                                            </tr>
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
            <div class="col-xl-6">
                <div class="card card-xl-stretch mb-xl-8">
                    <div class="card-header border-0 pt-5">
                        <h3 class="card-title align-items-start flex-column">
                            <span class="card-label fw-bold fs-3 mb-1">Scans By Device Used</span>

                            <span class="text-muted fw-semibold fs-7">History of Device</span>
                        </h3>

                        <div class="card-toolbar" data-kt-buttons="true" data-kt-initialized="1">
                            <a class="btn btn-sm btn-color-muted btn-active btn-active-primary active px-4 me-1"
                                id="kt_charts_widget_3_year_btn">Year</a>

                            <a class="btn btn-sm btn-color-muted btn-active btn-active-primary px-4 me-1"
                                id="kt_charts_widget_3_month_btn">Month</a>

                            <a class="btn btn-sm btn-color-muted btn-active btn-active-primary px-4"
                                id="kt_charts_widget_3_week_btn">Week</a>
                        </div>
                    </div>

                    <div class="card-body">
                        Device Chat info
                    </div>
                </div>
            </div>
            <div class="col-xl-6">
                <div class="card card-xl-stretch mb-xl-8">
                    <div class="card-header border-0 pt-5">
                        <h3 class="card-title align-items-start flex-column">
                            <span class="card-label fw-bold fs-3 mb-1">Scans</span>

                            <span class="text-muted fw-semibold fs-7">History of Scans</span>
                        </h3>

                        <div class="card-toolbar" data-kt-buttons="true" data-kt-initialized="1">
                            <a class="btn btn-sm btn-color-muted btn-active btn-active-primary active px-4 me-1"
                                id="kt_charts_widget_3_year_btn">Year</a>

                            <a class="btn btn-sm btn-color-muted btn-active btn-active-primary px-4 me-1"
                                id="kt_charts_widget_3_month_btn">Month</a>

                            <a class="btn btn-sm btn-color-muted btn-active btn-active-primary px-4"
                                id="kt_charts_widget_3_week_btn">Week</a>
                        </div>
                    </div>

                    <div class="card-body">
                        Total Scan info
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-5">
            <div class="col-xl-12">
                <div class="card card-xl-stretch mb-xl-8">
                    <div class="card-header border-0 pt-5">
                        <h3 class="card-title align-items-start flex-column">
                            <span class="card-label fw-bold fs-3 mb-1">Scans By Device Used</span>

                            <span class="text-muted fw-semibold fs-7">History of Device</span>
                        </h3>

                        <div class="card-toolbar" data-kt-buttons="true" data-kt-initialized="1">
                            <a class="btn btn-sm btn-color-muted btn-active btn-active-primary active px-4 me-1"
                                id="kt_charts_widget_3_year_btn">Year</a>

                            <a class="btn btn-sm btn-color-muted btn-active btn-active-primary px-4 me-1"
                                id="kt_charts_widget_3_month_btn">Month</a>

                            <a class="btn btn-sm btn-color-muted btn-active btn-active-primary px-4"
                                id="kt_charts_widget_3_week_btn">Week</a>
                        </div>
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
            // Initialize and display the map
            function initMap() {
                // Create a map centered at a default location
                const map = new google.maps.Map(document.getElementById("map"), {
                    zoom: 15, // Set the initial zoom level
                    center: {
                        lat: 23.765797,
                        lng: 90.338166
                    }, // Set the default center location
                });

                // Try HTML5 geolocation to get the user's location
                if (navigator.geolocation) {
                    navigator.geolocation.getCurrentPosition(
                        (position) => {
                            const userLocation = {
                                lat: position.coords.latitude,
                                lng: position.coords.longitude,
                            };
                            // Place a marker at the user's location
                            new google.maps.Marker({
                                position: userLocation,
                                map: map,
                                title: "Your Location",
                            });
                            // Center the map on the user's location
                            map.setCenter(userLocation);
                        },
                        () => {
                            // Handle errors when geolocation is not available or denied by the user
                            alert("Error: The Geolocation service failed.");
                        }
                    );
                } else {
                    // Browser doesn't support Geolocation
                    alert("Error: Your browser doesn't support geolocation.");
                }
            }
        </script>

        <!-- Load the Google Maps JavaScript API -->
    @endpush


















    {{-- =========================Old Content====================== --}}
    {{-- {!! QrCode::size(500)->eye('left-leaf',0.1)->eyeColor(0, 255, 255, 255, 0, 0, 0)->eyeColor(1, 222, 18, 222,222, 18, 222 )->eyeColor(2, 222, 18, 222,222, 18, 222 )->style('dot', 0.8)->errorCorrection('H')->generate('Make me into a QrCode!'); !!} --}}
    {{-- <div class="row">
        <div class="col-lg-12">
            <div class="card card-p-0 card-flush p-3 mt-10">
                <div class="card-header align-items-center py-5 gap-2 gap-md-5">
                    <div class="card-title">
                        <h2 class="mb-0">Manage your QR Codes</h2>
                    </div>
                    <div class="card-toolbar flex-row-fluid justify-content-end gap-5">
                        <a href="{{ route('user.qr-code.create') }}" class="btn btn-sm btn-primary rounded-2 me-3">
                            Create QR Codes
                        </a>
                    </div>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div id="map"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @push('scripts')

    <script>
        // function initMap() {
        //     var map = new google.maps.Map(document.getElementById('map'), {
        //         zoom: 4,
        //         center: { lat: 0, lng: 0 }
        //     });

        //     var ipAddresses = @json($ipAddresses);

        //     ipAddresses.forEach(function(ip) {
        //         fetch('https://ipapi.co/' + ip + '/json/')
        //         .then(response => response.json())
        //         .then(data => {
        //             var marker = new google.maps.Marker({
        //                 position: { lat: parseFloat(data.latitude), lng: parseFloat(data.longitude) },
        //                 map: map,
        //                 title: 'IP Address: ' + ip
        //             });
        //         });
        //     });
        // }
    </script>
    @endpush --}}

</x-app-layout>

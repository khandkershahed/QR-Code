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
                                    <a href="#" class="btn btn-secondary w-100 mb-2"><i
                                            class="bi bi-file-download fs-4 me-2"></i> Download</a>
                                    <a href="#" class="btn btn-danger w-100 mb-2"><i
                                            class="bi bi-trash fs-4 me-2"></i> Delete</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
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
                                        <thead>
                                            <tr class="fw-semibold fs-6 text-gray-800 border-bottom-2 border-gray-200">
                                                <th class="">Name</th>
                                                <th class="">Position</th>
                                                <th class="">Office</th>
                                                <th class="">Age</th>
                                                <th class="">Start date</th>
                                                <th class="">Salary</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Tiger Nixon</td>
                                                <td>System Architect</td>
                                                <td>Edinburgh</td>
                                                <td>61</td>
                                                <td>2011/04/25</td>
                                                <td>$320,800</td>
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
    </div>




















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
    <script async defer
        src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&callback=initMap">
    </script>
    @endpush --}}

</x-app-layout>

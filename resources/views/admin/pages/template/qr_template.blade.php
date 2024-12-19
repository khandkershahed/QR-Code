<x-admin-app-layout :title="'QR Templates Management - Admin Panel'">
    <div class="card my-10 rounded-0">
        <div class="card-header p-5 align-items-center rounded-0 bg-info m-0">
            <div>
                <h1 class="mb-0 mt-0 card-title fs-2 text-white">All QR Templates!</h1>
                <p class="text-white mt-2 mb-0">View all qr templates in this page.</p>
            </div>
        </div>
        <div class="card-body p-0 rounded-0">
            <div class="row">
                <div class="col-lg-2">
                    <div class="card card-flush bg-transparent mb-5">
                        <div class="card-body">
                            <img class="img-fluid rounded-3" src="{{ asset('frontend/assets/images/qrpreview/website.png') }}"
                                alt="First Template">
                        </div>
                    </div>
                </div>
                <div class="col-lg-2">
                    <div class="card card-flush bg-transparent mb-5 ">
                        <div class="card-body">
                            <img class="img-fluid rounded-3" src="{{ asset('frontend/assets/images/qrpreview/pdf.png') }}"
                                alt="First Template">
                        </div>
                    </div>
                </div>
                <div class="col-lg-2">
                    <div class="card card-flush bg-transparent mb-5 ">
                        <div class="card-body">
                            <img class="img-fluid rounded-3" src="{{ asset('frontend/assets/images/qrpreview/Image.png') }}"
                                alt="First Template">
                        </div>
                    </div>
                </div>
                <div class="col-lg-2">
                    <div class="card card-flush bg-transparent mb-5 ">
                        <div class="card-body">
                            <img class="img-fluid rounded-3" src="{{ asset('frontend/assets/images/qrpreview/SMS.png') }}"
                                alt="First Template">
                        </div>
                    </div>
                </div>
                <div class="col-lg-2">
                    <div class="card card-flush bg-transparent mb-5 ">
                        <div class="card-body">
                            <img class="img-fluid rounded-3" src="{{ asset('frontend/assets/images/qrpreview/Email.png') }}"
                                alt="First Template">
                        </div>
                    </div>
                </div>
                <div class="col-lg-2">
                    <div class="card card-flush bg-transparent mb-5 ">
                        <div class="card-body">
                            <img class="img-fluid rounded-3" src="{{ asset('frontend/assets/images/qrpreview/mobile.png') }}"
                                alt="mobile">
                        </div>
                    </div>
                </div>
                <div class="col-lg-2">
                    <div class="card card-flush bg-transparent mb-5 ">
                        <div class="card-body">
                            <img class="img-fluid rounded-3" src="{{ asset('frontend/assets/images/qrpreview/call.png') }}"
                                alt="First Template">
                        </div>
                    </div>
                </div>
                <div class="col-lg-2">
                    <div class="card card-flush bg-transparent mb-5 ">
                        <div class="card-body">
                            <img class="img-fluid rounded-3" src="{{ asset('frontend/assets/images/qrpreview/Location.png') }}"
                                alt="First Template">
                        </div>
                    </div>
                </div>
                <div class="col-lg-2">
                    <div class="card card-flush bg-transparent mb-5 ">
                        <div class="card-body">
                            <img class="img-fluid rounded-3" src="{{ asset('frontend/assets/images/qrpreview/audio.png') }}"
                                alt="First Template">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-admin-app-layout>

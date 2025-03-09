<x-app-layout :title="'QR Templates - User Panel'">
    <div class="card my-10 rounded-0">
        <div class="card-header p-5 align-items-center rounded-0 bg-info m-0">
            <div>
                <h1 class="mb-0 mt-0 card-title fs-2 text-white">All QR Templates!</h1>
                <p class="text-white mt-2 mb-0">View all qr templates in this page.</p>
            </div>
        </div>
        <div class="card-body px-0 pb-0 rounded-0">
            <div class="row">
                <div class="col-lg-2">
                    <div class="card card-flush bg-transparent  mb-10">
                        <div class="card-body pt-2 pb-0">
                            <img class="img-fluid" src="{{ asset('frontend/assets/images/qrpreview/website.png') }}"
                                alt="First Template">
                                <p class="text-center py-2 rounded-4 mt-2 text-white" style="background-color: #7239e9;">Demo For Website QR</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2">
                    <div class="card card-flush bg-transparent  mb-10">
                        <div class="card-body pt-2 pb-0">
                            <img class="img-fluid" src="{{ asset('frontend/assets/images/qrpreview/pdf.png') }}"
                                alt="First Template">
                                <p class="text-center py-2 rounded-4 mt-2 text-white" style="background-color: #7239e9;">Demo For PDF QR</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2">
                    <div class="card card-flush bg-transparent  mb-10">
                        <div class="card-body pt-2 pb-0">
                            <img class="img-fluid" src="{{ asset('frontend/assets/images/qrpreview/Image.png') }}"
                                alt="First Template">
                                <p class="text-center py-2 rounded-4 mt-2 text-white" style="background-color: #7239e9;">Demo For Image QR</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2">
                    <div class="card card-flush bg-transparent  mb-10">
                        <div class="card-body pt-2 pb-0">
                            <img class="img-fluid" src="{{ asset('frontend/assets/images/qrpreview/SMS.png') }}"
                                alt="First Template">
                                <p class="text-center py-2 rounded-4 mt-2 text-white" style="background-color: #7239e9;">Demo For SMS QR</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2">
                    <div class="card card-flush bg-transparent  mb-10">
                        <div class="card-body pt-2 pb-0">
                            <img class="img-fluid" src="{{ asset('frontend/assets/images/qrpreview/Email.png') }}"
                                alt="First Template">
                                <p class="text-center py-2 rounded-4 mt-2 text-white" style="background-color: #7239e9;">Demo For Email QR</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2">
                    <div class="card card-flush bg-transparent  mb-10">
                        <div class="card-body pt-2 pb-0">
                            <img class="img-fluid" src="{{ asset('frontend/assets/images/qrpreview/mobile.png') }}"
                                alt="mobile">
                                <p class="text-center py-2 rounded-4 mt-2 text-white" style="background-color: #7239e9;">Demo For Mobile QR</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2">
                    <div class="card card-flush bg-transparent  mb-10">
                        <div class="card-body pt-2 pb-0">
                            <img class="img-fluid" src="{{ asset('frontend/assets/images/qrpreview/call.png') }}"
                                alt="First Template">
                                <p class="text-center py-2 rounded-4 mt-2 text-white" style="background-color: #7239e9;">Demo For Call QR</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2">
                    <div class="card card-flush bg-transparent  mb-10">
                        <div class="card-body pt-2 pb-0">
                            <img class="img-fluid" src="{{ asset('frontend/assets/images/qrpreview/Location.png') }}"
                                alt="First Template">
                                <p class="text-center py-2 rounded-4 mt-2 text-white" style="background-color: #7239e9;">Demo For Location QR</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2">
                    <div class="card card-flush bg-transparent  mb-10">
                        <div class="card-body pt-2 pb-0">
                            <img class="img-fluid" src="{{ asset('frontend/assets/images/qrpreview/audio.png') }}"
                                alt="First Template">
                                <p class="text-center py-2 rounded-4 mt-2 text-white" style="background-color: #7239e9;">Demo For Audio QR</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</x-app-layout>

<x-admin-app-layout :title="'QR Templates'">
    <div class="row">
        <h3 class="text-center py-10">All QR Templates</h3>
        <div class="col-lg-3">
            <div class="card card-flush bg-transparent  mb-10">
                <div class="card-body pt-2 pb-0">
                    <img class="img-fluid" src="{{ asset('frontend/assets/images/qrpreview/website.png') }}"
                        alt="First Template">
                </div>
            </div>
        </div>
        <div class="col-lg-3">
            <div class="card card-flush bg-transparent  mb-10">
                <div class="card-body pt-2 pb-0">
                    <img class="img-fluid" src="{{ asset('frontend/assets/images/qrpreview/pdf.png') }}"
                        alt="First Template">
                </div>
            </div>
        </div>
        <div class="col-lg-3">
            <div class="card card-flush bg-transparent  mb-10">
                <div class="card-body pt-2 pb-0">
                    <img class="img-fluid" src="{{ asset('frontend/assets/images/qrpreview/Image.png') }}"
                        alt="First Template">
                </div>
            </div>
        </div>
        <div class="col-lg-3">
            <div class="card card-flush bg-transparent  mb-10">
                <div class="card-body pt-2 pb-0">
                    <img class="img-fluid" src="{{ asset('frontend/assets/images/qrpreview/SMS.png') }}"
                        alt="First Template">
                </div>
            </div>
        </div>
        <div class="col-lg-3">
            <div class="card card-flush bg-transparent  mb-10">
                <div class="card-body pt-2 pb-0">
                    <img class="img-fluid" src="{{ asset('frontend/assets/images/qrpreview/Email.png') }}"
                        alt="First Template">
                </div>
            </div>
        </div>
        <div class="col-lg-3">
            <div class="card card-flush bg-transparent  mb-10">
                <div class="card-body pt-2 pb-0">
                    <img class="img-fluid" src="{{ asset('frontend/assets/images/qrpreview/mobile.png') }}"
                        alt="mobile">
                </div>
            </div>
        </div>
        <div class="col-lg-3">
            <div class="card card-flush bg-transparent  mb-10">
                <div class="card-body pt-2 pb-0">
                    <img class="img-fluid" src="{{ asset('frontend/assets/images/qrpreview/call.png') }}"
                        alt="First Template">
                </div>
            </div>
        </div>
        <div class="col-lg-3">
            <div class="card card-flush bg-transparent  mb-10">
                <div class="card-body pt-2 pb-0">
                    <img class="img-fluid" src="{{ asset('frontend/assets/images/qrpreview/Location.png') }}"
                        alt="First Template">
                </div>
            </div>
        </div>
        <div class="col-lg-3">
            <div class="card card-flush bg-transparent  mb-10">
                <div class="card-body pt-2 pb-0">
                    <img class="img-fluid" src="{{ asset('frontend/assets/images/qrpreview/audio.png') }}"
                        alt="First Template">
                </div>
            </div>
        </div>
    </div>
    @push('scripts')
    @endpush
</x-admin-app-layout>

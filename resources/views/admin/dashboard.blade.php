<x-admin-app-layout :title="'Dashboard - Admin Panel'">
    <div class="row gap-5 mt-15">
        <h1 class="text-center mb-0 text-success">{{ Auth::guard('admin')->user()->name }}</h1>
        <h1 class="text-center">Welcome To Your Dashboard</h1>
    </div>
    <div id="kt_app_content_container" class="mt-10">
        <div class="row g-5 gx-xl-10 mb-5 mb-xl-10">
            <!-- QR Codes Card -->
            <div class="col-xl-3">
                <a href="{{ route('admin.qr-code.index') }}">
                    <div class="card card-flush bgi-no-repeat bgi-size-contain bgi-position-x-end h-xl-100"
                        style="background-color: #F1416C;background-image:url('https://preview.keenthemes.com/metronic8/demo1/assets/media/svg/shapes/wave-bg-red.svg')">
                        <div class="card-header pt-5 mb-3">
                            <div class="d-flex flex-center rounded-circle h-80px w-80px"
                                style="border: 1px dashed rgba(255, 255, 255, 0.4);background-color: #F1416C">
                                <i class="fa fa-bell text-white fs-2qx lh-0"></i>
                            </div>
                        </div>
                        <div class="card-body">
                            <h1 class="text-white mb-0" style="font-size: 3rem">QR Codes</h1>
                        </div>
                        <div class="card-body d-flex align-items-end mb-3">
                            <div class="d-flex align-items-center">
                                <span class="fs-4hx text-white fw-bold me-6">{{ $qrs->count() }}</span>
                                <div class="fw-bold fs-6 text-white">
                                    <span class="d-block">QR Code</span>
                                    <span class="">Generated</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <!-- NFC Cards Card -->
            <div class="col-xl-3">
                <a href="{{ route('admin.nfc-card.index') }}">
                    <div class="card card-flush bgi-no-repeat bgi-size-contain bgi-position-x-end h-xl-100"
                        style="background-color: #7239EA;background-image:url('https://preview.keenthemes.com/metronic8/demo1/assets/media/svg/shapes/wave-bg-purple.svg')">
                        <div class="card-header pt-5 mb-3">
                            <div class="d-flex flex-center rounded-circle h-80px w-80px"
                                style="border: 1px dashed rgba(255, 255, 255, 0.4);background-color: #7239EA">
                                <i class="fa fa-bell text-white fs-2qx lh-0"></i>
                            </div>
                        </div>
                        <div class="card-body">
                            <h1 class="text-white mb-0" style="font-size: 3rem">NFC Cards</h1>
                        </div>
                        <div class="card-body d-flex align-items-end mb-3">
                            <div class="d-flex align-items-center">
                                <span class="fs-4hx text-white fw-bold me-6">{{ $nfc_cards->count() }}</span>
                                <div class="fw-bold fs-6 text-white">
                                    <span class="d-block">NFC Card</span>
                                    <span class="">Created</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <!-- Performance Card -->
            <div class="col-xl-6">
                <div class="card card-flush h-lg-100">
                    <div class="card-header pt-5">
                        <h3 class="card-title align-items-start flex-column">
                            <span class="card-label fw-bold text-gray-900">Performance</span>
                            <span class="text-gray-500 mt-1 fw-semibold fs-6">Total QR, NFC, User Query Are
                                Showing!</span>
                        </h3>
                    </div>
                    <div class="card-body d-flex align-items-end pt-6">
                        <div class="row align-items-center mx-0 w-100">
                            <div class="col-7 px-0">
                                <div class="d-flex flex-column">
                                    <!-- QR Code Count -->
                                    <div class="d-flex fs-6 fw-semibold align-items-center">
                                        <div class="bullet bg-success me-3"></div>
                                        <div class="fs-5 fw-bold text-gray-600 me-5">Total QR Code Generate:</div>
                                        <div class="ms-auto fw-bolder text-gray-700 text-end">{{ $qrs->count() }}</div>
                                    </div>
                                    <!-- NFC Card Count -->
                                    <div class="d-flex fs-6 fw-semibold align-items-center my-4">
                                        <div class="bullet bg-primary me-3"></div>
                                        <div class="fs-5 fw-bold text-gray-600 me-5">Total NFC Generate:</div>
                                        <div class="ms-auto fw-bolder text-gray-700 text-end">{{ $nfc_cards->count() }}
                                        </div>
                                    </div>
                                    <!-- New Users Count -->
                                    <div class="d-flex fs-6 fw-semibold align-items-center">
                                        <div class="bullet bg-light me-3"></div>
                                        <div class="fs-5 fw-bold text-gray-600 me-5">New User Created:</div>
                                        <div class="ms-auto fw-bolder text-gray-700 text-end">{{ $users->count() }}
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Image -->
                            <div class="col-sm-5">
                                <img src="https://preview.keenthemes.com/metronic8/demo1/assets/media/illustrations/sketchy-1/9.png"
                                    class="h-200px h-lg-250px my-n6" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Create Your Plan Card -->
        <div class="row g-5 g-xl-10 mb-5 mb-xl-10">
            <div class="col-xl-12">
                <div class="card h-lg-100" style="background: linear-gradient(112.14deg, #00D2FF 0%, #3A7BD5 100%);">
                    <div class="card-body">
                        <div class="row align-items-center">
                            <div class="col-sm-7 pe-0 mb-5 mb-sm-0">
                                <div class="d-flex justify-content-between h-100 flex-column pt-xl-5 pb-xl-2 ps-xl-7">
                                    <div class="mb-7">
                                        <h3 class="fs-2x fw-semibold text-white">Create Your Plan</h3>
                                        <span class="fw-semibold text-white opacity-75">Check Or Create Your User
                                            Subscription plan For QR & NFC</span>
                                    </div>
                                    <div class="d-flex align-items-center flex-wrap d-grid gap-2">
                                        <!-- NFC Plan Link -->
                                        <div class="d-flex align-items-center me-5 me-xl-13">
                                            <div class="symbol symbol-30px symbol-circle me-3">
                                                <span class="symbol-label"
                                                    style="background: rgba(255, 255, 255, 0.15);">
                                                    <i class="fa fa-calendar fs-4 text-white"></i>
                                                </span>
                                            </div>
                                            <div class="m-0">
                                                <a href="{{ route('admin.plans.index') }}"
                                                    class="text-white text-opacity-75 fs-8">NFC Plans</a>
                                                <span
                                                    class="fw-bold text-white fs-7 d-block">{{ $nfc_plans->count() }}</span>
                                            </div>
                                        </div>
                                        <!-- QR Plan Link -->
                                        <div class="d-flex align-items-center">
                                            <div class="symbol symbol-30px symbol-circle me-3">
                                                <span class="symbol-label"
                                                    style="background: rgba(255, 255, 255, 0.15);">
                                                    <i class="fa fa-layer-group fs-4 text-white"></i>
                                                </span>
                                            </div>
                                            <div class="m-0">
                                                <a href="{{ route('admin.plans.index') }}"
                                                    class="text-white text-opacity-75 fs-8">QR Plan</a>
                                                <span
                                                    class="fw-bold text-white fs-7 d-block">{{ $qr_plans->count() }}</span>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Create Plan Button -->
                                    <div class="m-0">
                                        <a href="{{ route('admin.plans.create') }}"
                                            class="btn btn-color-danger bg-white bg-opacity-15 bg-hover-opacity-25 fw-semibold">
                                            Create Plan !
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <!-- Image -->
                            <div class="col-sm-5">
                                <img src="https://preview.keenthemes.com/metronic8/demo1/assets/media/svg/illustrations/easy/5.svg"
                                    class="h-200px h-lg-250px my-n6" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-admin-app-layout>

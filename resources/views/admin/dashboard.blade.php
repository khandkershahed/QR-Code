<x-admin-app-layout :title="'Dashboard - Admin Panel'">
    <div class="row gap-5 mt-15">
        <h1 class="text-center mb-0 text-success">{{ Auth::guard('admin')->user()->name }}</h1>
        <h1 class="text-center">Welcome To Your Dashboard</h1>
    </div>
    <div id="kt_app_content_container" class="mt-10">
        <div class="row g-5 gx-xl-10 mb-5 mb-xl-10">
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
            <div class="col-xl-3">
                <a href="{{ route('admin.virtual-card.index') }}">
                    <div class="card card-flush bgi-no-repeat bgi-size-contain bgi-position-x-end h-xl-100"
                        style="background-color: #007795;background-image:url('https://preview.keenthemes.com/metronic8/demo1/assets/media/svg/shapes/wave-bg-dark.svg')">
                        <div class="card-header pt-5 mb-3">
                            <div class="d-flex flex-center rounded-circle h-80px w-80px"
                                style="border: 1px dashed rgba(255, 255, 255, 0.4);background-color: #007795">
                                <i class="fa fa-bell text-white fs-2qx lh-0"></i>
                            </div>
                        </div>
                        <div class="card-body">
                            <h1 class="text-white mb-0" style="font-size: 3rem">Virtual Cards</h1>
                        </div>
                        <div class="card-body d-flex align-items-end mb-3">
                            <div class="d-flex align-items-center">
                                <span class="fs-4hx text-white fw-bold me-6">{{ $virtual_cards->count() }}</span>
                                <div class="fw-bold fs-6 text-white">
                                    <span class="d-block">Virtual Cards</span>
                                    <span class="">Ordered</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-xl-3">
                <a href="{{ route('admin.barcode.index') }}">
                    <div class="card card-flush bgi-no-repeat bgi-size-contain bgi-position-x-end h-xl-100"
                        style="background-color: #007153;background-image:url('https://preview.keenthemes.com/metronic8/demo1/assets/media/svg/shapes/wave-bg-dark.svg')">
                        <div class="card-header pt-5 mb-3">
                            <div class="d-flex flex-center rounded-circle h-80px w-80px"
                                style="border: 1px dashed rgba(255, 255, 255, 0.4);background-color: #007153">
                                <i class="fa fa-bell text-white fs-2qx lh-0"></i>
                            </div>
                        </div>
                        <div class="card-body">
                            <h1 class="text-white mb-0" style="font-size: 3rem">BarCodes</h1>
                        </div>
                        <div class="card-body d-flex align-items-end mb-3">
                            <div class="d-flex align-items-center">
                                <span class="fs-4hx text-white fw-bold me-6">{{ $barcodes->count() }}</span>
                                <div class="fw-bold fs-6 text-white">
                                    <span class="d-block">BarCodes</span>
                                    <span class="">Created</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </div>
        <div class="row g-5 g-xl-10">
            <div class="col-sm-6 col-xl-2 mb-xl-10">
                <div class="card h-lg-100">
                    <div class="card-body d-flex justify-content-between align-items-start flex-column">
                        <div class="m-0">
                            <img src="{{ asset('admin/assets/media/svg/avatars/026-boy-10.svg') }}" class="w-35px"
                                alt="">
                        </div>
                        <div class="d-flex flex-column my-7">
                            <span class="fw-semibold fs-3x text-gray-800 lh-1 ls-n2">{{ $users->count() }}</span>
                            <div class="m-0">
                                <span class="fw-semibold fs-6 text-gray-500">Users Registered</span>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-xl-2 mb-xl-10">
                <div class="card h-lg-100">
                    <div class="card-body d-flex justify-content-between align-items-start flex-column">
                        <div class="m-0">
                            <img src="{{ asset('admin/assets/media/svg/payment-methods/visa.svg') }}" class="w-35px"
                                alt="">
                        </div>
                        <div class="d-flex flex-column my-7">
                            <span
                                class="fw-semibold fs-3x text-gray-800 lh-1 ls-n2">{{ $subscriptions->count() }}</span>
                            <div class="m-0">
                                <span class="fw-semibold fs-6 text-gray-500">Total Subscriptions</span>

                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 mb-5 mb-xl-10">
                <div class="card card-flush border-0 h-lg-100" data-bs-theme="light" style="background-color: #7239EA">
                    <div class="card-header pt-2">
                        <h3 class="card-title">
                            <span class="text-white fs-3 fw-bold me-2">Subscription Plans</span>
                            <span class="badge badge-success">Active</span>
                        </h3>
                    </div>
                    <div class="card-body d-flex justify-content-between flex-column pt-1 px-0 pb-0">
                        <div class="d-flex flex-wrap px-9 mb-5">
                            <a href="{{ route('admin.plans.index') }}">
                                <div class="rounded min-w-125px py-3 px-4 my-1 me-6"
                                    style="border: 1px dashed rgba(255, 255, 255, 0.2)">
                                    <div class="d-flex align-items-center">
                                        <div class="text-white fs-2 fw-bold counted" data-kt-countup="true"
                                            data-kt-countup-value="{{ $qr_plans->count() }}"
                                            data-kt-countup-prefix="$" data-kt-initialized="1">
                                            {{ $qr_plans->count() }}</div>
                                    </div>
                                    <div class="fw-semibold fs-6 text-white opacity-50">Total QR Plans</div>
                                </div>
                            </a>
                            <a href="{{ route('admin.plans.index') }}">
                                <div class="rounded min-w-125px py-3 px-4 my-1"
                                    style="border: 1px dashed rgba(255, 255, 255, 0.2)">

                                    <div class="d-flex align-items-center">
                                        <div class="text-white fs-2 fw-bold counted" data-kt-countup="true"
                                            data-kt-countup-value="{{ $nfc_plans->count() }}"
                                            data-kt-initialized="1">
                                            {{ $nfc_plans->count() }}</div>
                                    </div>
                                    <div class="fw-semibold fs-6 text-white opacity-50">Total Virtual Card Plans</div>
                                </div>
                            </a>
                            <a href="{{ route('admin.plans.index') }}">
                                <div class="rounded min-w-125px py-3 px-4 my-1"
                                    style="border: 1px dashed rgba(255, 255, 255, 0.2)">

                                    <div class="d-flex align-items-center">
                                        <div class="text-white fs-2 fw-bold counted" data-kt-countup="true"
                                            data-kt-countup-value="{{ $barcode_plans->count() }}"
                                            data-kt-initialized="1">{{ $barcode_plans->count() }}</div>
                                    </div>
                                    <div class="fw-semibold fs-6 text-white opacity-50">Total Barcode Plans</div>
                                </div>
                            </a>
                        </div>


                    </div>
                </div>



            </div>
        </div>
    </div>
</x-admin-app-layout>

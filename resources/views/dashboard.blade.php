<x-app-layout :title="'My Dashboard'">
    <div class="container-fluid">
        <div class="row">
            <h1 class="text-center py-10">Hello <span class="text-success">{{ Auth::user()->name }}.</span> Welcome To Your Dashboard!</h1>
            {{-- <div class="col-lg-12">
                <div class="row my-10">
                    <div class="col-lg-4">
                        <div class="card card-xl-stretch">
                            <div class="card-header border-0 bg-danger py-5">
                                <h3 class="card-title fw-bolder text-white">Overview</h3>
                            </div>
                            <div class="card-body p-0">
                                <div class="card-rounded-bottom bg-danger" data-kt-color="danger" style="height: 50px">
                                </div>
                                <div class="card-p mt-n20 position-relative">
                                    <div class="row g-0">
                                        <div class="col bg-light-warning px-6 py-8 rounded-2 me-7 mb-7">
                                            <div class="d-flex align-items-center justify-content-between">
                                                <div>
                                                    <span class="svg-icon svg-icon-3x svg-icon-warning d-block my-2">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                            height="24" viewBox="0 0 24 24" fill="none">
                                                            <rect x="8" y="9" width="3" height="10"
                                                                rx="1.5" fill="currentColor" />
                                                            <rect opacity="0.5" x="13" y="5" width="3"
                                                                height="14" rx="1.5" fill="currentColor" />
                                                            <rect x="18" y="11" width="3" height="8"
                                                                rx="1.5" fill="currentColor" />
                                                            <rect x="3" y="13" width="3" height="6"
                                                                rx="1.5" fill="currentColor" />
                                                        </svg>
                                                    </span>
                                                    <a href="#" class="text-warning fw-bold fs-6">
                                                        SCANS</a>
                                                </div>
                                                <div>
                                                    <p
                                                        class="p-2 mb-0 bg-warning text-white rounded-circle w-30px ps-3 fw-bold">
                                                        10
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col bg-light-primary px-6 py-8 rounded-2 mb-7">
                                            <div class="d-flex justify-content-between  align-items-center ">
                                                <div>
                                                    <span class="svg-icon svg-icon-3x svg-icon-primary d-block my-2">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                            height="24" viewBox="0 0 24 24" fill="none">
                                                            <path opacity="0.3"
                                                                d="M20 15H4C2.9 15 2 14.1 2 13V7C2 6.4 2.4 6 3 6H21C21.6 6 22 6.4 22 7V13C22 14.1 21.1 15 20 15ZM13 12H11C10.5 12 10 12.4 10 13V16C10 16.5 10.4 17 11 17H13C13.6 17 14 16.6 14 16V13C14 12.4 13.6 12 13 12Z"
                                                                fill="currentColor" />
                                                            <path
                                                                d="M14 6V5H10V6H8V5C8 3.9 8.9 3 10 3H14C15.1 3 16 3.9 16 5V6H14ZM20 15H14V16C14 16.6 13.5 17 13 17H11C10.5 17 10 16.6 10 16V15H4C3.6 15 3.3 14.9 3 14.7V18C3 19.1 3.9 20 5 20H19C20.1 20 21 19.1 21 18V14.7C20.7 14.9 20.4 15 20 15Z"
                                                                fill="currentColor" />
                                                        </svg>
                                                    </span>
                                                    <a href="#" class="text-primary fw-bold fs-6">QR </a>
                                                </div>


                                                <div>
                                                    <p
                                                        class="p-2 mb-0 bg-primary text-white rounded-circle w-30px ps-3 fw-bold">
                                                        10
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="card card-xl-stretch">
                            <div class="card-header border-0 bg-info py-5">
                                <h3 class="card-title fw-bolder text-white">Best performing QR codes</h3>
                            </div>
                            <div class="card-body p-0">
                                <div class="card-rounded-bottom bg-info" data-kt-color="info" style="height: 50px">
                                </div>
                                <div class="card-p mt-n20 position-relative">
                                    <div class="row g-0">
                                        <div class="col bg-light-success px-6 py-8 rounded-2 me-7 mb-7">
                                            <div class="d-flex align-items-center justify-content-between">
                                                <div>
                                                    <span class="svg-icon svg-icon-3x svg-icon-success d-block my-2">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                            height="24" viewBox="0 0 24 24" fill="none">
                                                            <rect x="8" y="9" width="3" height="10"
                                                                rx="1.5" fill="currentColor" />
                                                            <rect opacity="0.5" x="13" y="5" width="3"
                                                                height="14" rx="1.5" fill="currentColor" />
                                                            <rect x="18" y="11" width="3" height="8"
                                                                rx="1.5" fill="currentColor" />
                                                            <rect x="3" y="13" width="3" height="6"
                                                                rx="1.5" fill="currentColor" />
                                                        </svg>
                                                    </span>
                                                    <a href="#" class="text-success fw-bold fs-6">
                                                        SCANS</a>
                                                </div>
                                                <div>
                                                    <p
                                                        class="p-2 mb-0 bg-success text-white rounded-circle w-30px ps-3 fw-bold">
                                                        10
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col bg-light-primary px-6 py-8 rounded-2 mb-7">
                                            <div class="d-flex justify-content-between  align-items-center ">
                                                <div>
                                                    <span class="svg-icon svg-icon-3x svg-icon-primary d-block my-2">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                            height="24" viewBox="0 0 24 24" fill="none">
                                                            <path opacity="0.3"
                                                                d="M20 15H4C2.9 15 2 14.1 2 13V7C2 6.4 2.4 6 3 6H21C21.6 6 22 6.4 22 7V13C22 14.1 21.1 15 20 15ZM13 12H11C10.5 12 10 12.4 10 13V16C10 16.5 10.4 17 11 17H13C13.6 17 14 16.6 14 16V13C14 12.4 13.6 12 13 12Z"
                                                                fill="currentColor" />
                                                            <path
                                                                d="M14 6V5H10V6H8V5C8 3.9 8.9 3 10 3H14C15.1 3 16 3.9 16 5V6H14ZM20 15H14V16C14 16.6 13.5 17 13 17H11C10.5 17 10 16.6 10 16V15H4C3.6 15 3.3 14.9 3 14.7V18C3 19.1 3.9 20 5 20H19C20.1 20 21 19.1 21 18V14.7C20.7 14.9 20.4 15 20 15Z"
                                                                fill="currentColor" />
                                                        </svg>
                                                    </span>
                                                    <a href="#" class="text-primary fw-bold fs-6">Business
                                                        Cards</a>
                                                </div>


                                                <div>
                                                    <p
                                                        class="p-2 mb-0 bg-primary text-white rounded-circle w-30px ps-3 fw-bold">
                                                        10
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="card card-xl-stretch">
                            <div class="card-header border-0 bg-warning py-5">
                                <h3 class="card-title fw-bolder text-white">Best performing NFC Card</h3>
                            </div>
                            <div class="card-body p-0">
                                <div class="card-rounded-bottom bg-warning" data-kt-color="info"
                                    style="height: 50px">
                                </div>
                                <div class="card-p mt-n20 position-relative">
                                    <div class="row g-0">
                                        <div class="col bg-light-success px-6 py-8 rounded-2 me-7 mb-7">
                                            <div class="d-flex align-items-center justify-content-between">
                                                <div>
                                                    <span class="svg-icon svg-icon-3x svg-icon-success d-block my-2">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                            height="24" viewBox="0 0 24 24" fill="none">
                                                            <rect x="8" y="9" width="3" height="10"
                                                                rx="1.5" fill="currentColor" />
                                                            <rect opacity="0.5" x="13" y="5" width="3"
                                                                height="14" rx="1.5" fill="currentColor" />
                                                            <rect x="18" y="11" width="3" height="8"
                                                                rx="1.5" fill="currentColor" />
                                                            <rect x="3" y="13" width="3" height="6"
                                                                rx="1.5" fill="currentColor" />
                                                        </svg>
                                                    </span>
                                                    <a href="#" class="text-success fw-bold fs-6">
                                                        SCANS</a>
                                                </div>
                                                <div>
                                                    <p
                                                        class="p-2 mb-0 bg-success text-white rounded-circle w-30px ps-3 fw-bold">
                                                        10
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col bg-light-primary px-6 py-8 rounded-2 mb-7">
                                            <div class="d-flex justify-content-between  align-items-center ">
                                                <div>
                                                    <span class="svg-icon svg-icon-3x svg-icon-primary d-block my-2">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                            height="24" viewBox="0 0 24 24" fill="none">
                                                            <path opacity="0.3"
                                                                d="M20 15H4C2.9 15 2 14.1 2 13V7C2 6.4 2.4 6 3 6H21C21.6 6 22 6.4 22 7V13C22 14.1 21.1 15 20 15ZM13 12H11C10.5 12 10 12.4 10 13V16C10 16.5 10.4 17 11 17H13C13.6 17 14 16.6 14 16V13C14 12.4 13.6 12 13 12Z"
                                                                fill="currentColor" />
                                                            <path
                                                                d="M14 6V5H10V6H8V5C8 3.9 8.9 3 10 3H14C15.1 3 16 3.9 16 5V6H14ZM20 15H14V16C14 16.6 13.5 17 13 17H11C10.5 17 10 16.6 10 16V15H4C3.6 15 3.3 14.9 3 14.7V18C3 19.1 3.9 20 5 20H19C20.1 20 21 19.1 21 18V14.7C20.7 14.9 20.4 15 20 15Z"
                                                                fill="currentColor" />
                                                        </svg>
                                                    </span>
                                                    <a href="#" class="text-primary fw-bold fs-6">Business
                                                        Cards</a>
                                                </div>


                                                <div>
                                                    <p
                                                        class="p-2 mb-0 bg-primary text-white rounded-circle w-30px ps-3 fw-bold">
                                                        10
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> --}}
        </div>
        <div class="row g-5 gx-xl-10 mb-5 mb-xl-10">
            <div class="col-md-6 col-lg-6 col-xl-6 col-xxl-3 mb-md-5 mb-xl-10">
                <div class="card card-flush bgi-no-repeat bgi-size-contain bgi-position-x-end h-md-50 mb-5 mb-xl-10"
                    style="background-color: #15a5aa;background-image:url('https://preview.keenthemes.com/metronic8/demo1/assets/media/patterns/vector-1.png')">
                    <div class="card-header pt-5">
                        <div class="card-title d-flex flex-column">
                            <span class="fs-2hx fw-bold text-white me-2 lh-1 ls-n2">{{ $qrs->count() }}</span>

                            <span class="text-white opacity-75 pt-1 fw-semibold fs-6">Total QR Created</span>
                        </div>
                    </div>

                    <div class="card-body d-flex align-items-end pt-0">
                        <div class="d-flex align-items-center flex-column mt-3 w-100">
                            <div
                                class="d-flex justify-content-between fw-bold fs-6 text-white opacity-75 w-100 mt-auto mb-2">
                                <span>{{ $qr_pending }} Pending QR</span>
                                <span>{{ $qr_completion_percentage }}%</span>
                            </div>

                            <div class="h-8px mx-3 w-100 bg-white bg-opacity-50 rounded">
                                <div class="bg-white rounded h-8px" role="progressbar" style="width: {{ $qr_completion_percentage }}%;"
                                    aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card card-flush h-md-50 mb-5 mb-xl-10">
                    <div class="card-header pt-5">
                        <div class="card-title d-flex flex-column">
                            <span class="fs-2hx fw-bold text-gray-900 me-2 lh-1 ls-n2">357</span>

                            <span class="text-gray-500 pt-1 fw-semibold fs-6">People View</span>
                        </div>
                    </div>

                    <div class="card-body d-flex flex-column justify-content-end pe-0">
                        <span class="fs-6 fw-bolder text-gray-800 d-block mb-2">QR & NFC Viewer</span>

                        <div class="symbol-group symbol-hover flex-nowrap">
                            <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip"
                                data-bs-original-title="Alan Warden" data-kt-initialized="1">
                                <span class="symbol-label bg-warning text-inverse-warning fw-bold">A</span>
                            </div>
                            <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip"
                                aria-label="Michael Eberon" data-bs-original-title="Michael Eberon"
                                data-kt-initialized="1">
                                <img alt="Pic"
                                    src="https://preview.keenthemes.com/metronic8/demo1/assets/media/avatars/300-12.jpg">
                            </div>
                            <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip"
                                data-bs-original-title="Susan Redwood" data-kt-initialized="1">
                                <span class="symbol-label bg-primary text-inverse-primary fw-bold">S</span>
                            </div>
                            <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip"
                                aria-label="Melody Macy" data-bs-original-title="Melody Macy"
                                data-kt-initialized="1">
                                <img alt="Pic"
                                    src="https://preview.keenthemes.com/metronic8/demo1/assets/media/avatars/300-12.jpg">
                            </div>
                            <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip"
                                data-bs-original-title="Perry Matthew" data-kt-initialized="1">
                                <span class="symbol-label bg-danger text-inverse-danger fw-bold">P</span>
                            </div>
                            <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip"
                                aria-label="Barry Walter" data-bs-original-title="Barry Walter"
                                data-kt-initialized="1">
                                <img alt="Pic"
                                    src="https://preview.keenthemes.com/metronic8/demo1/assets/media/avatars/300-12.jpg  ">
                            </div>
                            <a href="#" class="symbol symbol-35px symbol-circle" data-bs-toggle="modal"
                                data-bs-target="#kt_modal_view_users">
                                <span class="symbol-label bg-dark text-gray-300 fs-8 fw-bold">+42</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-6 col-xl-6 col-xxl-3 mb-md-5 mb-xl-10">

                <div class="card card-flush bgi-no-repeat bgi-size-contain bgi-position-x-end h-md-50 mb-5 mb-xl-10"
                    style="background-color: #3228b4;background-image:url('https://preview.keenthemes.com/metronic8/demo1/assets/media/patterns/vector-1.png')">
                    <div class="card-header pt-5">
                        <div class="card-title d-flex flex-column">
                            <span class="fs-2hx fw-bold text-white me-2 lh-1 ls-n2">{{ $nfc_cards->count() }}</span>
                            <span class="text-white opacity-75 pt-1 fw-semibold fs-6">Total NFC Created</span>
                        </div>
                    </div>

                    <div class="card-body d-flex align-items-end pt-0">
                        <div class="d-flex align-items-center flex-column mt-3 w-100">
                            <div
                                class="d-flex justify-content-between fw-bold fs-6 text-white opacity-75 w-100 mt-auto mb-2">
                                <span>{{ $nfc_pending }} Pending NFC</span>
                                <span>{{ $nfc_completion_percentage }}%</span>
                            </div>

                            <div class="h-8px mx-3 w-100 bg-white bg-opacity-50 rounded">
                                <div class="bg-white rounded h-8px" role="progressbar" style="width: {{ $nfc_completion_percentage }}%;"
                                    aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card card-flush h-lg-50">
                    <div class="card-header pt-5">
                        <h3 class="card-title text-gray-800 fw-bold">External Links</h3>
                    </div>

                    <div class="card-body pt-5">
                        <div class="d-flex flex-stack">
                            <a href="{{ route('user.qr-code.create') }}" class="text-primary fw-semibold fs-6 me-2">Create QR</a>

                            <button type="button"
                                class="btn btn-icon btn-sm h-auto btn-color-gray-500 btn-active-color-primary justify-content-end">
                                <i class="ki-duotone ki-exit-right-corner fs-2"><span class="path1"></span><span
                                        class="path2"></span></i> </button>
                        </div>

                        <div class="separator separator-dashed my-3"></div>

                        <div class="d-flex flex-stack">
                            <a href="{{ route('user.nfc-card.create') }}" class="text-primary fw-semibold fs-6 me-2">Create NFC</a>

                            <button type="button"
                                class="btn btn-icon btn-sm h-auto btn-color-gray-500 btn-active-color-primary justify-content-end">
                                <i class="ki-duotone ki-exit-right-corner fs-2"><span class="path1"></span><span
                                        class="path2"></span></i> </button>
                        </div>

                        <div class="separator separator-dashed my-3"></div>

                        <div class="d-flex flex-stack">
                            <a href="#" class="text-primary fw-semibold fs-6 me-2">Current Status</a>

                            <button type="button"
                                class="btn btn-icon btn-sm h-auto btn-color-gray-500 btn-active-color-primary justify-content-end">
                                <i class="ki-duotone ki-exit-right-corner fs-2"><span class="path1"></span><span
                                        class="path2"></span></i> </button>
                        </div>
                        <div class="separator separator-dashed my-3"></div>

                        <div class="d-flex flex-stack">
                            <a href="{{ route('user.plan') }}" class="text-primary fw-semibold fs-6 me-2">Upgrade Plan</a>

                            <button type="button"
                                class="btn btn-icon btn-sm h-auto btn-color-gray-500 btn-active-color-primary justify-content-end">
                                <i class="ki-duotone ki-exit-right-corner fs-2"><span class="path1"></span><span
                                        class="path2"></span></i> </button>
                        </div>
                        <div class="separator separator-dashed my-3"></div>

                        <div class="d-flex flex-stack">
                            <a href="#" class="text-primary fw-semibold fs-6 me-2">Resale QR & NFC</a>

                            <button type="button"
                                class="btn btn-icon btn-sm h-auto btn-color-gray-500 btn-active-color-primary justify-content-end">
                                <i class="ki-duotone ki-exit-right-corner fs-2"><span class="path1"></span><span
                                        class="path2"></span></i> </button>
                        </div>



                    </div>
                </div>



            </div>

            <div class="col-xxl-6">

                <div class="card card-flush h-md-100">
                    <div class="card-body d-flex flex-column justify-content-between mt-9 bgi-no-repeat bgi-size-cover bgi-position-x-center pb-0"
                        style="background-position: 100% 50%; background-image:url('https://preview.keenthemes.com/metronic8/demo1/assets/media/stock/900x600/42.png')">
                        <div class="mb-10">
                            <div class="fs-2hx fw-bold text-gray-800 text-center mb-13">
                                <span class="me-2">
                                    Try our all new Feature with
                                    <br>
                                    <span class="position-relative d-inline-block text-danger">
                                        <a href="/metronic8/demo1/pages/user-profile/overview.html"
                                            class="text-danger opacity-75-hover">Pro Plan</a>

                                        <span
                                            class="position-absolute opacity-15 bottom-0 start-0 border-4 border-danger border-bottom w-100"></span>
                                    </span>
                                </span>
                                for Free
                            </div>

                            <div class="text-center">
                                <a href="{{ route('user.plan') }}" class="btn btn-sm btn-dark fw-bold">
                                    Upgrade Now
                                </a>
                            </div>
                        </div>

                        <img class="mx-auto h-150px h-lg-200px  theme-light-show"
                            src="	https://preview.keenthemes.com/metronic8/demo1/assets/media/illustrations/misc/upgrade.svg"
                            alt="">
                        <img class="mx-auto h-150px h-lg-200px  theme-dark-show"
                            src="/metronic8/demo1/assets/media/illustrations/misc/upgrade-dark.svg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

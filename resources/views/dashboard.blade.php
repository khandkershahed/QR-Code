<x-app-layout>
    <div class="row gy-5 g-xl-8">
        <h1 class="text-center">Hello <span class="text-success">{{ Auth::user()->name }}</span> Welcome To Your Dashboard.!</h1>
        <div class="row">
            <div class="col-lg-8 offset-lg-2 mx-auto">
                <div class="row my-10">
                    {{-- OverView --}}
                    <div class="col-xl-6">
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
                                                    <a href="#" class="text-warning fw-bold fs-6"> SCANS</a>
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
                    {{-- Best performing QR codes --}}
                    <div class="col-xl-6">
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
                                                    <a href="#" class="text-success fw-bold fs-6"> SCANS</a>
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
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-6">
            <div class="card border-0 h-md-100" data-bs-theme="light"
                style="background: linear-gradient(112.14deg, #00D2FF 0%, #3A7BD5 100%)">
                <div class="card-body">
                    <div class="row align-items-center h-100">
                        <div class="col-7 ps-xl-13">
                            <div class="text-white mb-6 pt-6">
                                <span class="fs-4 fw-semibold me-2 d-block lh-1 pb-2 opacity-75">Get best offer</span>

                                <span class="fs-2qx fw-bold">Upgrade Your Plan</span>
                            </div>

                            <span class="fw-semibold text-white fs-6 mb-8 d-block opacity-75">
                                Flat cartoony and illustrations with vivid unblended purple hair lady
                            </span>

                            <div class="d-flex align-items-center flex-wrap d-grid gap-2 mb-10 mb-xl-20">
                                <div class="d-flex align-items-center me-5 me-xl-13">
                                    <div class="symbol symbol-30px symbol-circle me-3">
                                        <div class="symbol symbol-30px symbol-circle me-3">
                                            <span class="symbol-label" style="background: #35C7FF">
                                                <i class="ki-duotone ki-abstract-41 fs-5 text-white">
                                                    <span class="path1"></span>
                                                    <span class="path2"></span>
                                                </i>
                                            </span>
                                        </div>
                                    </div>

                                    <div class="text-white">
                                        <span class="fw-semibold d-block fs-8 opacity-75">Projects</span>
                                        <span class="fw-bold fs-7">Up to 500</span>
                                    </div>
                                </div>

                                <div class="d-flex align-items-center">
                                    <div class="symbol symbol-30px symbol-circle me-3">
                                        <span class="symbol-label" style="background: #35C7FF">
                                            <i class="ki-duotone ki-abstract-26 fs-5 text-white"><span
                                                    class="path1"></span><span class="path2"></span></i> </span>
                                    </div>

                                    <div class="text-white">
                                        <span class="fw-semibold opacity-75 d-block fs-8">Tasks</span>
                                        <span class="fw-bold fs-7">Unlimited</span>
                                    </div>
                                </div>
                            </div>

                            <div class="d-flex flex-column flex-sm-row d-grid gap-2">
                                <a href="#" class="btn btn-success flex-shrink-0 me-lg-2"
                                    data-bs-toggle="modal" data-bs-target="#kt_modal_upgrade_plan">Upgrade Plan</a>
                                <a href="#" class="btn btn-primary flex-shrink-0"
                                    style="background: rgba(255, 255, 255, 0.2)" data-bs-toggle="modal"
                                    data-bs-target="#kt_modal_create_app">Read Guides</a>
                            </div>
                        </div>

                        <div class="col-5 pt-10">
                            <div class="bgi-no-repeat bgi-size-contain bgi-position-x-end h-225px"
                                style="background-image:url('/metronic8/demo1/assets/media/svg/illustrations/easy/5.svg">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="card card-flush h-md-100">
                <div class="card-body d-flex flex-column justify-content-between mt-9 bgi-no-repeat bgi-size-cover bgi-position-x-center pb-0"
                    style="background-position: 100% 50%; background-image:url('/metronic8/demo1/assets/media/stock/900x600/42.png')">
                    <div class="mb-10">
                        <div class="fs-2hx fw-bold text-gray-800 text-center mb-13">
                            <span class="me-2">
                                Try our all new feature with
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
                            <a href="#" class="btn btn-sm btn-dark fw-bold" data-bs-toggle="modal"
                                data-bs-target="#kt_modal_upgrade_plan">
                                Upgrade Now
                            </a>
                        </div>
                    </div>

                    <img class="mx-auto h-150px h-lg-200px  theme-light-show"
                        src="https://preview.keenthemes.com/metronic8/demo1/assets/media/illustrations/misc/upgrade.svg"
                        alt="">
                    {{-- <img class="mx-auto h-150px h-lg-200px  theme-dark-show" src="https://preview.keenthemes.com/metronic8/demo1/assets/media/illustrations/misc/upgrade.svg" alt="">    --}}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

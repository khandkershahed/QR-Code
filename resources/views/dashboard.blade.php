<x-app-layout>
    <div class="container">
        <div class="row">
            <h1 class="text-center pt-5">Hello <span class="text-success">{{ Auth::user()->name }}</span> Welcome To Your
                Dashboard.!</h1>
            <div class="col-lg-12">
                <div class="row my-10">
                    {{-- OverView --}}
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
                    {{-- Least performing QR codes --}}
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
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6">
                <div class="card border-0 h-md-100" data-bs-theme="light"
                    style="background: linear-gradient(112.14deg, #00D2FF 0%, #3A7BD5 100%)">
                    <div class="card-header border-0 py-5">
                        <div>
                            <div class="d-flex justify-content-between align-items-center ">
                                <div>
                                    <h4 class="text-white">Notification</h4>
                                    <p class="p-0 m-0 text-white text-warning">{{ now()->format('d F Y') }}</p>
                                </div>
                                {{-- Admin Notifcation box End --}}
                                <div>
                                    <button type="button"
                                        class="btn btn-icon btn-icon-white btn-active-light btn-active-color-primary w-30px h-30px w-md-40px h-md-40px"
                                        data-bs-toggle="modal" data-bs-target="#modalId">
                                        <span class="svg-icon svg-icon-1">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none">
                                                <path
                                                    d="M11.2929 2.70711C11.6834 2.31658 12.3166 2.31658 12.7071 2.70711L15.2929 5.29289C15.6834 5.68342 15.6834 6.31658 15.2929 6.70711L12.7071 9.29289C12.3166 9.68342 11.6834 9.68342 11.2929 9.29289L8.70711 6.70711C8.31658 6.31658 8.31658 5.68342 8.70711 5.29289L11.2929 2.70711Z"
                                                    fill="currentColor"></path>
                                                <path
                                                    d="M11.2929 14.7071C11.6834 14.3166 12.3166 14.3166 12.7071 14.7071L15.2929 17.2929C15.6834 17.6834 15.6834 18.3166 15.2929 18.7071L12.7071 21.2929C12.3166 21.6834 11.6834 21.6834 11.2929 21.2929L8.70711 18.7071C8.31658 18.3166 8.31658 17.6834 8.70711 17.2929L11.2929 14.7071Z"
                                                    fill="currentColor"></path>
                                                <path opacity="0.3"
                                                    d="M5.29289 8.70711C5.68342 8.31658 6.31658 8.31658 6.70711 8.70711L9.29289 11.2929C9.68342 11.6834 9.68342 12.3166 9.29289 12.7071L6.70711 15.2929C6.31658 15.6834 5.68342 15.6834 5.29289 15.2929L2.70711 12.7071C2.31658 12.3166 2.31658 11.6834 2.70711 11.2929L5.29289 8.70711Z"
                                                    fill="currentColor"></path>
                                                <path opacity="0.3"
                                                    d="M17.2929 8.70711C17.6834 8.31658 18.3166 8.31658 18.7071 8.70711L21.2929 11.2929C21.6834 11.6834 21.6834 12.3166 21.2929 12.7071L18.7071 15.2929C18.3166 15.6834 17.6834 15.6834 17.2929 15.2929L14.7071 12.7071C14.3166 12.3166 14.3166 11.6834 14.7071 11.2929L17.2929 8.70711Z"
                                                    fill="currentColor"></path>
                                            </svg>
                                        </span>
                                    </button>

                                    <div class="modal fade" id="modalId" tabindex="-1" data-bs-backdrop="static"
                                        data-bs-keyboard="false" role="dialog" aria-labelledby="modalTitleId"
                                        aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-lg"
                                            role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="modalTitleId">
                                                        Your Subscription Summury
                                                    </h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="mt-n1">
                                                        <div class="d-flex flex-stack pb-10">
                                                            <a href="http://127.0.0.1:8000/dashboard">
                                                                <img alt="Logo"
                                                                    src="https://i.ibb.co/BNBTVN4/logo.png
                                                            "
                                                                    class="h-60px logo">
                                                            </a>


                                                            <div
                                                                class="fw-bold fs-6 flex-column  text-gray-800 d-flex align-items-end flex-wrap">
                                                                <span class="pe-2 fs-1 ">QR Code Code</span>
                                                                <span class="pe-2">02 May 2021</span>
                                                            </div>
                                                        </div>

                                                        <div class="m-0">
                                                            <div class="fw-bold fs-3 text-gray-800 mb-8">Invoice #34782
                                                            </div>

                                                            <div class="row g-5 mb-11">
                                                                <div class="col-sm-6">
                                                                    <div class="fw-semibold fs-7 text-gray-600 mb-1">
                                                                        Issue
                                                                        Date:
                                                                    </div>

                                                                    <div class="fw-bold fs-6 text-gray-800">5 Apr 2021
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="row g-5 mb-12">
                                                                <div class="col-sm-6">
                                                                    <div class="fw-semibold fs-7 text-gray-600 mb-1">
                                                                        Issue
                                                                        For:
                                                                    </div>

                                                                    <div class="fw-bold fs-6 text-gray-800">Your Name
                                                                    </div>

                                                                    <div class="fw-semibold fs-7 text-gray-600">
                                                                        8692 Wild Rose Drive <br>
                                                                        Ph: 01576614451
                                                                    </div>
                                                                </div>

                                                                <div class="col-sm-6">
                                                                    <div class="fw-semibold fs-7 text-gray-600 mb-1">
                                                                        Issued
                                                                        By:
                                                                    </div>

                                                                    <div class="fw-bold fs-6 text-gray-800">QR Code
                                                                        Code
                                                                    </div>

                                                                    <div class="fw-semibold fs-7 text-gray-600">
                                                                        9858 South 53rd Ave.<br>
                                                                        Matthews, NC 28104
                                                                    </div>
                                                                </div>
                                                            </div>


                                                            <div class="flex-grow-1">
                                                                <div class="table-responsive border-bottom mb-9">
                                                                    <table class="table mb-3">
                                                                        <thead>
                                                                            <tr
                                                                                class="border-bottom fs-6 fw-bold text-muted">
                                                                                <th class="min-w-175px pb-2">Plan</th>
                                                                                <th class="min-w-175px pb-2">
                                                                                    Description
                                                                                </th>
                                                                                <th class="min-w-70px text-end pb-2">
                                                                                    Plan
                                                                                </th>
                                                                                <th class="min-w-80px text-end pb-2">
                                                                                    Rate
                                                                                </th>
                                                                                <th class="min-w-100px text-end pb-2">
                                                                                    Amount</th>
                                                                                <th class="min-w-100px text-end pb-2">
                                                                                    Action</th>
                                                                            </tr>
                                                                        </thead>

                                                                        <tbody>
                                                                            <tr
                                                                                class="fw-bold text-gray-700 fs-5 text-end">
                                                                                <td
                                                                                    class="d-flex align-items-center pt-6">
                                                                                    <i
                                                                                        class="fa fa-genderless text-danger fs-2 me-2"></i>

                                                                                    Monthly Plan
                                                                                </td>

                                                                                <td class="pt-6">10 Qr Code With 5
                                                                                    NFC
                                                                                </td>
                                                                                <td class="pt-6">80</td>
                                                                                <td class="pt-6">$40.00</td>
                                                                                <td
                                                                                    class="pt-6 text-gray-900 fw-bolder">
                                                                                    $3200.00
                                                                                </td>
                                                                                <td class="pe-0">
                                                                                    <a href="#"
                                                                                        class="btn btn-light btn-active-light-primary btn-sm"
                                                                                        data-kt-menu-trigger="click"
                                                                                        data-kt-menu-placement="bottom-end"
                                                                                        data-kt-menu-flip="top-end">
                                                                                        Actions
                                                                                        <span
                                                                                            class="svg-icon fs-5 m-0">
                                                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                                                xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                                                width="24px"
                                                                                                height="24px"
                                                                                                viewBox="0 0 24 24"
                                                                                                version="1.1">
                                                                                                <g stroke="none"
                                                                                                    stroke-width="1"
                                                                                                    fill="none"
                                                                                                    fill-rule="evenodd">
                                                                                                    <polygon
                                                                                                        points="0 0 24 0 24 24 0 24">
                                                                                                    </polygon>
                                                                                                    <path
                                                                                                        d="M6.70710678,15.7071068 C6.31658249,16.0976311 5.68341751,16.0976311 5.29289322,15.7071068 C4.90236893,15.3165825 4.90236893,14.6834175 5.29289322,14.2928932 L11.2928932,8.29289322 C11.6714722,7.91431428 12.2810586,7.90106866 12.6757246,8.26284586 L18.6757246,13.7628459 C19.0828436,14.1360383 19.1103465,14.7686056 18.7371541,15.1757246 C18.3639617,15.5828436 17.7313944,15.6103465 17.3242754,15.2371541 L12.0300757,10.3841378 L6.70710678,15.7071068 Z"
                                                                                                        fill="currentColor"
                                                                                                        fill-rule="nonzero"
                                                                                                        transform="translate(12.000003, 11.999999) rotate(-180.000000) translate(-12.000003, -11.999999)">
                                                                                                    </path>
                                                                                                </g>
                                                                                            </svg>
                                                                                        </span>
                                                                                    </a>
                                                                                    <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-bold fs-7 w-125px py-4"
                                                                                        data-kt-menu="true"
                                                                                        style="">
                                                                                        <div class="menu-item px-3">
                                                                                            <a href="#"
                                                                                                class="menu-link px-3"
                                                                                                data-kt-docs-table-filter="edit_row">
                                                                                                Edit
                                                                                            </a>
                                                                                        </div>

                                                                                        <div class="menu-item px-3">
                                                                                            <a href="#"
                                                                                                class="menu-link px-3"
                                                                                                data-kt-docs-table-filter="delete_row">
                                                                                                Delete
                                                                                            </a>
                                                                                        </div>
                                                                                    </div>
                                                                                </td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </div>

                                                                <div class="d-flex justify-content-end">
                                                                    <div class="mw-300px">
                                                                        <div class="d-flex flex-stack mb-3">
                                                                            <div
                                                                                class="fw-semibold pe-10 text-gray-600 fs-7">
                                                                                Subtotal:</div>

                                                                            <div
                                                                                class="text-end fw-bold fs-6 text-gray-800">
                                                                                $
                                                                                20,600.00</div>
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
                            {{-- Admin Notifcation box --}}
                            <div class="pt-15 text-white">
                                <h6 class="text-white mb-4">Dear, <span class="text-warning fw-bold">{{ Auth::user()->name }}</span>
                                </h6>
                                <p>Admin notification for you</p>
                                @foreach ($notifications as $notification)
                                    <div class="card">
                                        <div class="card-body w-lg-550px w-325px scroll-x scroll-y text-black">
                                            {!! $notification->notificationMessage->message !!}
                                        </div>
                                    </div>
                                @endforeach
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
                                <a href="{{ route('pricing') }}" class="btn btn-sm btn-dark fw-bold">
                                    Upgrade Now
                                </a>
                                <a href="#" class="btn btn-sm btn-dark fw-bold"
                                data-bs-toggle="modal" data-bs-target="#modalId">
                                   Check Invoice
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
            <div class="col-lg-12">
                <div class="d-flex justify-content-center mt-5">
                    <img class="img-fluid" src="https://i.ibb.co/YB1zCNT/Screenshot-1.png"
                    alt="">
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

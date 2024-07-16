<x-admin-app-layout :title="'NFC Card Edit'">
    <style>
        .summury_box {
            opacity: 0;
            transition: opacity 0.5s ease;
        }

        .summury_box.show {
            opacity: 1;
        }
    </style>
    <div class="summury_box mt-3 d-none">
        <div class="row gy-5 gx-xl-10 pt-10 m-auto d-flex justify-content-center">
            <div class="col-sm-6 col-xl-2 mb-xl-10">

                <div class="card h-lg-100">
                    <div class="card-body d-flex justify-content-between align-items-start flex-column">
                        <div class="m-0">
                            <svg xmlns="http://www.w3.org/2000/svg" version="1.1"
                                xmlns:xlink="http://www.w3.org/1999/xlink" width="50" height="50" x="0" y="0"
                                viewBox="0 0 168 168" style="enable-background:new 0 0 512 512" xml:space="preserve"
                                class="">
                                <g>
                                    <path fill="#2d4356" d="M105 68a2 2 0 0 0-2-2H77a2 2 0 0 0 0 4h26a2 2 0 0 0 2-2z"
                                        opacity="1" data-original="#2d4356" class=""></path>
                                    <path fill="#0bceb2"
                                        d="M77 78h10a2 2 0 0 0 0-4H77a2 2 0 0 0 0 4zM71 67a4.004 4.004 0 0 0-4-4H57a4.004 4.004 0 0 0-4 4v10a4.004 4.004 0 0 0 4 4h10a4.004 4.004 0 0 0 4-4zM57 77V67h8.102l-3.393 3.236-.329-.313a2 2 0 0 0-2.76 2.894l1.709 1.63a2 2 0 0 0 2.76 0l3.912-3.73.001 6.283zM77 100h10a2 2 0 0 0 0-4H77a2 2 0 0 0 0 4z"
                                        opacity="1" data-original="#0bceb2" class=""></path>
                                    <path fill="#2d4356"
                                        d="M71 89a4.004 4.004 0 0 0-4-4H57a4.004 4.004 0 0 0-4 4v10a4.004 4.004 0 0 0 4 4h10a4.004 4.004 0 0 0 4-4zM57 99V89h8.102l-3.393 3.236-.329-.313a2 2 0 0 0-2.76 2.894l1.709 1.63a2 2 0 0 0 2.76 0l3.912-3.73.001 6.283zM105 112a2 2 0 0 0-2-2H77a2 2 0 0 0 0 4h26a2 2 0 0 0 2-2z"
                                        opacity="1" data-original="#2d4356" class=""></path>
                                    <path fill="#0bceb2"
                                        d="M77 118a2 2 0 0 0 0 4h10a2 2 0 0 0 0-4zM67 107H57a4.004 4.004 0 0 0-4 4v10a4.004 4.004 0 0 0 4 4h10a4.004 4.004 0 0 0 4-4v-10a4.004 4.004 0 0 0-4-4zm-10 14v-10h8.102l-3.393 3.236-.329-.313a2 2 0 0 0-2.76 2.894l1.709 1.63a2 2 0 0 0 2.76 0l3.912-3.73.001 6.283z"
                                        opacity="1" data-original="#0bceb2" class=""></path>
                                    <path fill="#2d4356"
                                        d="M77 88a2 2 0 0 0 0 4h14.095c-.06-.66-.095-1.325-.095-2s.035-1.34.095-2zM113 72a18 18 0 1 0 18 18 18.02 18.02 0 0 0-18-18zm0 32a14 14 0 1 1 14-14 14.016 14.016 0 0 1-14 14z"
                                        opacity="1" data-original="#2d4356" class=""></path>
                                    <path fill="#0bceb2"
                                        d="m118.611 83.56-8.976 8.66-2.246-2.166a2 2 0 0 0-2.778 2.879l3.635 3.506a2 2 0 0 0 2.777 0l10.366-10a2 2 0 0 0-2.778-2.878z"
                                        opacity="1" data-original="#0bceb2" class=""></path>
                                    <g fill="#2d4356">
                                        <path
                                            d="M68.305 9a3 3 0 1 0-3-3 3.003 3.003 0 0 0 3 3zm0-4.5a1.5 1.5 0 1 1-1.5 1.5 1.501 1.501 0 0 1 1.5-1.5zM162.305 55.947a2 2 0 1 0 2 2 2.002 2.002 0 0 0-2-2zm0 3a1 1 0 1 1 1-1 1.001 1.001 0 0 1-1 1zM99 18.798a2 2 0 1 0 2 2 2.002 2.002 0 0 0-2-2zm0 3a1 1 0 1 1 1-1 1.001 1.001 0 0 1-1 1zM158.305 10a2 2 0 1 0 2 2 2.002 2.002 0 0 0-2-2zm0 3a1 1 0 1 1 1-1 1.001 1.001 0 0 1-1 1zM9.695 14a2 2 0 1 0-2 2 2.002 2.002 0 0 0 2-2zm-3 0a1 1 0 1 1 1 1 1.001 1.001 0 0 1-1-1z"
                                            fill="#2d4356" opacity="1" data-original="#2d4356" class=""></path>
                                    </g>
                                    <path fill="#0bceb2"
                                        d="m11.888 48.749 1.487-1.955-.939-.532-.955 2.19h-.031l-.97-2.175-.955.548 1.471 1.909v.031l-2.301-.297v1.064l2.316-.297v.031l-1.486 1.908.891.564 1.018-2.206h.031l.939 2.19.986-.563-1.502-1.878v-.031l2.362.282v-1.064l-2.362.313zM44.363 25.624l-.856 1.099.514.324.586-1.27h.017l.541 1.261.568-.324-.865-1.082v-.018l1.36.163v-.613l-1.36.18v-.018l.856-1.126-.541-.306-.549 1.261h-.018l-.559-1.253-.55.316.847 1.099v.018l-1.325-.171v.613l1.334-.171zM137.301 37.012v-1.044l-2.317.307v-.031l1.459-1.918-.921-.521-.936 2.148h-.032l-.95-2.134-.938.538 1.444 1.872v.031l-2.257-.292v1.044l2.272-.292v.031l-1.459 1.872.875.553.998-2.164h.03l.921 2.148.968-.552-1.474-1.842v-.031zM121.448 11.788l1.258-1.655-.795-.45-.807 1.853h-.027l-.82-1.84-.809.464 1.245 1.615v.026l-1.947-.251v.9l1.96-.251v.026l-1.258 1.615.755.477.861-1.867h.026l.794 1.853.834-.476-1.27-1.589v-.026l1.998.238v-.9l-1.998.264z"
                                        opacity="1" data-original="#0bceb2" class=""></path>
                                    <circle cx="2" cy="149" r="2" fill="#2d4356" opacity="1"
                                        data-original="#2d4356" class=""></circle>
                                    <path fill="#2d4356"
                                        d="M11 147H8a2 2 0 0 0 0 4h3a2 2 0 0 0 0-4zM160 147h-3a2 2 0 0 0 0 4h3a2 2 0 0 0 0-4z"
                                        opacity="1" data-original="#2d4356" class=""></path>
                                    <circle cx="166" cy="149" r="2" fill="#2d4356" opacity="1"
                                        data-original="#2d4356" class=""></circle>
                                    <path fill="#0bceb2"
                                        d="M118.154 155h-8.308a2.006 2.006 0 0 0 0 4h8.308a2.006 2.006 0 0 0 0-4zM58.154 155h-8.308a2.006 2.006 0 0 0 0 4h8.308a2.006 2.006 0 0 0 0-4zM104 155H64a2 2 0 0 0 0 4h15.94v2H72a2 2 0 0 0 0 4h25a2 2 0 0 0 0-4h-8.94v-2H104a2 2 0 0 0 0-4z"
                                        opacity="1" data-original="#0bceb2" class=""></path>
                                    <path fill="#2d4356"
                                        d="M150.721 147H120.65a5.96 5.96 0 0 0 .35-2v-34.512a21.802 21.802 0 0 1-4 1.14V145a2.002 2.002 0 0 1-2 2H43a2.002 2.002 0 0 1-2-2V43a2.002 2.002 0 0 1 2-2h14v4H47a2 2 0 0 0-2 2v94a2 2 0 0 0 2 2h51a2.034 2.034 0 0 0 1.415-.587l12.998-12.998a2.007 2.007 0 0 0 .249-.303c.018-.027.029-.057.045-.084a1.988 1.988 0 0 0 .139-.26c.016-.038.023-.079.037-.118a1.975 1.975 0 0 0 .077-.255A1.996 1.996 0 0 0 113 128v-16a22.014 22.014 0 0 1-4-.371V126h-8a5.006 5.006 0 0 0-5 5v8H49V49h60v19.371a22.014 22.014 0 0 1 4-.371V47a2 2 0 0 0-2-2h-10v-4h14a2.002 2.002 0 0 1 2 2v25.371a21.802 21.802 0 0 1 4 1.141V43a6.007 6.007 0 0 0-6-6h-14v-3a4.004 4.004 0 0 0-4-4h-9.224a9.001 9.001 0 0 0-17.552 0H61a4.004 4.004 0 0 0-4 4v3H43a6.007 6.007 0 0 0-6 6v102a5.96 5.96 0 0 0 .35 2H17.279a2.017 2.017 0 1 0 0 4H150.72a2.017 2.017 0 1 0 0-4zM100 131a1.001 1.001 0 0 1 1-1h5.172L100 136.172zM61 34h11a2 2 0 0 0 2-2 5 5 0 0 1 10 0 2 2 0 0 0 2 2h11v11H61z"
                                        opacity="1" data-original="#2d4356" class=""></path>
                                </g>
                            </svg>

                        </div>

                        <div class="d-flex flex-column my-7">
                            <span class="fw-semibold fs-3x text-info lh-1 ls-n2">327</span>

                            <div class="m-0">
                                <span class="fw-semibold fs-6 text-gray-500">Total NFC</span>

                            </div>
                        </div>

                        <span class="badge badge-info fs-base">
                            <i class="ki-duotone ki-arrow-up fs-5 text-success ms-n1"><span class="path1"></span><span
                                    class="path2"></span></i>

                            Current
                        </span>
                    </div>
                </div>


            </div>
            <div class="col-sm-6 col-xl-2 mb-xl-10">

                <div class="card h-lg-100">
                    <div class="card-body d-flex justify-content-between align-items-start flex-column">
                        <div class="m-0">
                            <svg xmlns="http://www.w3.org/2000/svg" version="1.1"
                                xmlns:xlink="http://www.w3.org/1999/xlink" width="50" height="50" x="0" y="0"
                                viewBox="0 0 64 64" style="enable-background:new 0 0 512 512" xml:space="preserve"
                                class="">
                                <g>
                                    <path fill="#c4a2fc"
                                        d="M20 15h40a1 1 0 0 0 0-2H20a1 1 0 0 0 0 2zM60 61h-4c-.42-9.67-6.16-19.52-14-23.69l-.12-.06.12-.07A26.63 26.63 0 0 0 55.8 17H24.18a25.74 25.74 0 0 0 13.35 20.18l.12.06-.12.07C29.83 41.41 24.39 51.05 24 61h-4a1 1 0 0 0 0 2h40a1 1 0 0 0 0-2zM39 41.24a1 1 0 0 1 2 0v7a1 1 0 1 1-2 0zm1 10a1 1 0 1 1-1 1 1 1 0 0 1 1-1zM28.1 61c2.64-1.69 7.11-4 11.9-4s9.26 2.31 11.9 4z"
                                        opacity="1" data-original="#c4a2fc" class=""></path>
                                    <g fill="#151a6a">
                                        <path
                                            d="M37.66 46.88A22.79 22.79 0 0 1 28 49 23.11 23.11 0 0 1 11.41 9.91v3.33a1 1 0 0 0 2 0V7.59a1 1 0 0 0-1-1H6.76a1 1 0 0 0 0 2h3.15A25.11 25.11 0 0 0 28 51a24.78 24.78 0 0 0 10.5-2.31 1 1 0 1 0-.84-1.81zM28 1a24.79 24.79 0 0 0-10.92 2.5A1 1 0 0 0 18 5.3 22.73 22.73 0 0 1 28 3a23 23 0 0 1 14.68 40.7A1 1 0 0 0 44 45.24 25 25 0 0 0 28 1z"
                                            fill="#151a6a" opacity="1" data-original="#151a6a" class="">
                                        </path>
                                        <path
                                            d="M27 26a1 1 0 0 0 1 1h8a1 1 0 0 0 0-2h-7V14a1 1 0 0 0-2 0zM28 10a1 1 0 0 0 1-1V6a1 1 0 0 0-2 0v3a1 1 0 0 0 1 1zM27 46a1 1 0 0 0 2 0v-3a1 1 0 0 0-2 0zM48 27a1 1 0 0 0 0-2h-3a1 1 0 0 0 0 2zM8 25a1 1 0 0 0 0 2h3a1 1 0 0 0 0-2z"
                                            fill="#151a6a" opacity="1" data-original="#151a6a" class="">
                                        </path>
                                    </g>
                                </g>
                            </svg>

                        </div>

                        <div class="d-flex flex-column my-7">
                            <span class="fw-semibold fs-3x text-info lh-1 ls-n2">27</span>

                            <div class="m-0">
                                <span class="fw-semibold fs-6 text-gray-500">NFC Left</span>

                            </div>
                        </div>

                        <span class="badge badge-info fs-base">
                            <i class="ki-duotone ki-arrow-up fs-5 text-success ms-n1"><span
                                    class="path1"></span><span class="path2"></span></i>

                            Current
                        </span>
                    </div>
                </div>


            </div>
            <div class="col-sm-6 col-xl-2 mb-xl-10">

                <div class="card h-lg-100">
                    <div class="card-body d-flex justify-content-between align-items-start flex-column">
                        <div class="m-0">
                            <svg xmlns="http://www.w3.org/2000/svg" version="1.1"
                                xmlns:xlink="http://www.w3.org/1999/xlink" width="50" height="50" x="0" y="0"
                                viewBox="0 0 53 53" style="enable-background:new 0 0 512 512" xml:space="preserve"
                                class="">
                                <g>
                                    <path
                                        d="M49.501 11.17 38.851 26.9v18.12c0 3.03-2.45 5.48-5.47 5.48h-8.03v-48h8.03c3.02 0 5.47 2.45 5.47 5.48v5.71l4.52-6.67a2.289 2.289 0 0 1 3.19-.61l2.32 1.57a2.3 2.3 0 0 1 .62 3.19z"
                                        fill="#000000" opacity="1" data-original="#000000"></path>
                                    <path
                                        d="M33.38 51h-8.029a.5.5 0 0 1-.5-.5v-48a.5.5 0 0 1 .5-.5h8.03c3.292 0 5.97 2.683 5.97 5.98v4.08l3.606-5.32a2.777 2.777 0 0 1 1.795-1.181 2.767 2.767 0 0 1 2.092.438l2.317 1.568a2.802 2.802 0 0 1 .754 3.885L39.351 27.053V45.02c0 3.297-2.678 5.98-5.97 5.98zm-7.529-1h7.53c2.74 0 4.97-2.234 4.97-4.98V26.9a.5.5 0 0 1 .086-.28l10.65-15.73c.554-.82.336-1.94-.486-2.496l-2.32-1.57a1.766 1.766 0 0 0-1.342-.283c-.474.09-.883.36-1.154.759l-4.52 6.67a.5.5 0 0 1-.914-.28V7.98A4.98 4.98 0 0 0 33.381 3h-7.53v47zm23.65-38.83h.01z"
                                        fill="#000000" opacity="1" data-original="#000000"></path>
                                    <path fill="#ffffff"
                                        d="M35.847 7.98v37.04c0 3.03-2.45 5.48-5.47 5.48h-21.8c-3.02 0-5.47-2.45-5.47-5.48V7.98c0-3.03 2.45-5.48 5.47-5.48h21.8c3.02 0 5.47 2.45 5.47 5.48z"
                                        opacity="1" data-original="#ffffff"></path>
                                    <path
                                        d="M30.377 51h-21.8c-3.292 0-5.97-2.683-5.97-5.98V7.98C2.607 4.682 5.285 2 8.577 2h21.8c3.292 0 5.97 2.683 5.97 5.98v37.04c0 3.297-2.678 5.98-5.97 5.98zM8.577 3a4.98 4.98 0 0 0-4.97 4.98v37.04c0 2.746 2.23 4.98 4.97 4.98h21.8c2.74 0 4.97-2.234 4.97-4.98V7.98A4.98 4.98 0 0 0 30.377 3z"
                                        fill="#000000" opacity="1" data-original="#000000"></path>
                                    <path fill="#dddddd"
                                        d="M31.85 38.16v1.075c0 .78-.63 1.41-1.41 1.41H8.51c-.77 0-1.4-.63-1.4-1.41V38.16c0-.78.63-1.41 1.4-1.41h21.93c.78 0 1.41.63 1.41 1.41z"
                                        opacity="1" data-original="#dddddd"></path>
                                    <path
                                        d="M30.44 41.145H8.51c-1.048 0-1.9-.857-1.9-1.91v-1.076c0-1.053.852-1.909 1.9-1.909h21.93c1.053 0 1.91.856 1.91 1.91v1.074c0 1.054-.857 1.91-1.91 1.91zM8.51 37.25c-.497 0-.9.408-.9.91v1.074c0 .502.403.91.9.91h21.93c.501 0 .91-.408.91-.91V38.16a.91.91 0 0 0-.91-.909z"
                                        fill="#000000" opacity="1" data-original="#000000"></path>
                                    <path fill="#5ae4a7"
                                        d="M17.381 30.012v2.15c0 .78-.63 1.41-1.41 1.41H8.51c-.77 0-1.4-.63-1.4-1.41v-2.15c0-.78.63-1.41 1.4-1.41h7.461c.78 0 1.41.63 1.41 1.41z"
                                        opacity="1" data-original="#5ae4a7"></path>
                                    <path
                                        d="M15.971 34.072H8.51c-1.048 0-1.9-.856-1.9-1.91v-2.15c0-1.053.852-1.91 1.9-1.91h7.462c1.053 0 1.91.857 1.91 1.91v2.15c0 1.054-.857 1.91-1.91 1.91zm-7.462-4.97c-.496 0-.9.409-.9.91v2.15c0 .502.404.91.9.91h7.462c.502 0 .91-.408.91-.91v-2.15a.91.91 0 0 0-.91-.91z"
                                        fill="#000000" opacity="1" data-original="#000000"></path>
                                    <path fill="#5ae4a7"
                                        d="M31.85 30.012v2.15c0 .78-.63 1.41-1.41 1.41h-7.462c-.77 0-1.4-.63-1.4-1.41v-2.15c0-.78.63-1.41 1.4-1.41h7.462c.78 0 1.41.63 1.41 1.41z"
                                        opacity="1" data-original="#5ae4a7"></path>
                                    <path
                                        d="M30.44 34.072h-7.462c-1.048 0-1.9-.856-1.9-1.91v-2.15c0-1.053.852-1.91 1.9-1.91h7.462c1.053 0 1.91.857 1.91 1.91v2.15c0 1.054-.857 1.91-1.91 1.91zm-7.462-4.97c-.496 0-.9.409-.9.91v2.15c0 .502.404.91.9.91h7.462c.501 0 .91-.408.91-.91v-2.15a.91.91 0 0 0-.91-.91z"
                                        fill="#000000" opacity="1" data-original="#000000"></path>
                                    <path fill="#283e42"
                                        d="M35.837 7.71h-9.22c-.67 0-1.29.39-1.58.99l-.45.94c-.29.6-.91.99-1.58.99h-7.06c-.67 0-1.29-.39-1.58-.99l-.45-.94c-.29-.6-.91-.99-1.58-.99h-9.22c.14-2.9 2.53-5.21 5.46-5.21h21.8c2.93 0 5.32 2.31 5.46 5.21z"
                                        opacity="1" data-original="#283e42"></path>
                                    <path
                                        d="M23.007 11.13h-7.06c-.86 0-1.656-.5-2.03-1.273l-.45-.941a1.26 1.26 0 0 0-1.13-.706h-9.22a.497.497 0 0 1-.5-.524A5.964 5.964 0 0 1 8.578 2h21.8a5.963 5.963 0 0 1 5.96 5.686.5.5 0 0 1-.5.524h-9.22a1.26 1.26 0 0 0-1.13.708l-.45.937a2.267 2.267 0 0 1-2.03 1.275zM3.67 7.21h8.667c.86 0 1.657.5 2.03 1.272l.45.942c.208.429.652.706 1.13.706h7.06a1.26 1.26 0 0 0 1.13-.708l.45-.938a2.267 2.267 0 0 1 2.03-1.274h8.668A4.962 4.962 0 0 0 30.377 3h-21.8A4.963 4.963 0 0 0 3.67 7.21z"
                                        fill="#000000" opacity="1" data-original="#000000"></path>
                                    <path fill="#283e42"
                                        d="M3.107 44.043v.977c0 3.03 2.45 5.48 5.47 5.48h21.8c3.02 0 5.47-2.45 5.47-5.48v-.977z"
                                        opacity="1" data-original="#283e42"></path>
                                    <path
                                        d="M30.377 51h-21.8c-3.292 0-5.97-2.683-5.97-5.98v-.977a.5.5 0 0 1 .5-.5h32.74a.5.5 0 0 1 .5.5v.977c0 3.297-2.678 5.98-5.97 5.98zm-26.77-6.457v.477c0 2.746 2.23 4.98 4.97 4.98h21.8c2.74 0 4.97-2.234 4.97-4.98v-.477H3.607zM24.47 5.835h-6.034a.5.5 0 1 1 0-1h6.034a.5.5 0 1 1 0 1zM16.436 5.835h-1.952a.5.5 0 1 1 0-1h1.952a.5.5 0 1 1 0 1z"
                                        fill="#000000" opacity="1" data-original="#000000"></path>
                                    <path d="M23.06 47.771h-7.166a.5.5 0 1 1 0-1h7.167a.5.5 0 1 1 0 1z" fill="#000000"
                                        opacity="1" data-original="#000000"></path>
                                    <path fill="#dddddd"
                                        d="M26.432 19.545c0 1.5-.476 2.881-1.28 4.015a6.947 6.947 0 0 1-11.35 0 6.908 6.908 0 0 1-1.28-4.015c0-3.84 3.116-6.955 6.955-6.955s6.955 3.116 6.955 6.955z"
                                        opacity="1" data-original="#dddddd"></path>
                                    <path
                                        d="M19.477 27a7.464 7.464 0 0 1-6.083-3.151 7.396 7.396 0 0 1-1.371-4.304c0-4.11 3.344-7.454 7.454-7.454s7.455 3.344 7.455 7.454c0 1.552-.475 3.04-1.372 4.305A7.464 7.464 0 0 1 19.477 27zm0-13.91a6.462 6.462 0 0 0-6.454 6.455c0 1.344.41 2.632 1.187 3.725 1.21 1.71 3.179 2.73 5.267 2.73s4.057-1.02 5.267-2.73a6.395 6.395 0 0 0 1.188-3.725 6.462 6.462 0 0 0-6.455-6.454z"
                                        fill="#000000" opacity="1" data-original="#000000"></path>
                                    <path fill="#ffddab"
                                        d="M25.152 23.56a6.947 6.947 0 0 1-11.35 0 6.542 6.542 0 0 1 3.072-2.72 3.102 3.102 0 0 0 2.603 1.411 3.083 3.083 0 0 0 2.604-1.411 6.542 6.542 0 0 1 3.071 2.72z"
                                        opacity="1" data-original="#ffddab"></path>
                                    <path
                                        d="M19.477 27a7.464 7.464 0 0 1-6.083-3.151.5.5 0 0 1-.024-.541 7.088 7.088 0 0 1 3.306-2.927.497.497 0 0 1 .615.184 2.615 2.615 0 0 0 2.186 1.186c.886 0 1.703-.442 2.184-1.184a.499.499 0 0 1 .617-.186 7.088 7.088 0 0 1 3.306 2.927.5.5 0 0 1-.024.54A7.464 7.464 0 0 1 19.477 27zm-5.07-3.467c1.22 1.551 3.091 2.467 5.07 2.467s3.85-.916 5.07-2.467a6.094 6.094 0 0 0-2.309-2.067 3.59 3.59 0 0 1-2.76 1.285 3.603 3.603 0 0 1-2.76-1.286 6.109 6.109 0 0 0-2.312 2.068z"
                                        fill="#000000" opacity="1" data-original="#000000"></path>
                                    <path fill="#ffddab"
                                        d="M22.576 17.797v1.355a3.11 3.11 0 0 1-.495 1.689c-.558.851-1.51 1.409-2.602 1.409s-2.045-.558-2.602-1.41a3.11 3.11 0 0 1-.496-1.688v-1.355A3.097 3.097 0 0 1 19.48 14.7a3.09 3.09 0 0 1 3.097 3.097z"
                                        opacity="1" data-original="#ffddab"></path>
                                    <path
                                        d="M19.479 22.75a3.6 3.6 0 0 1-3.02-1.636 3.61 3.61 0 0 1-.578-1.962v-1.355a3.602 3.602 0 0 1 3.598-3.598c.962 0 1.866.374 2.545 1.053a3.605 3.605 0 0 1 1.052 2.545v1.355c0 .699-.199 1.376-.575 1.96a3.602 3.602 0 0 1-3.022 1.638zm0-7.55a2.6 2.6 0 0 0-2.598 2.597v1.355c0 .506.144.996.416 1.417a2.604 2.604 0 0 0 4.365-.002c.27-.419.414-.909.414-1.415v-1.355c0-.689-.27-1.342-.761-1.84a2.578 2.578 0 0 0-1.836-.758z"
                                        fill="#000000" opacity="1" data-original="#000000"></path>
                                    <path fill="#283e42"
                                        d="M22.562 17.656a3.117 3.117 0 0 0-.892-2.05 3.09 3.09 0 0 0-5.275 2.05h6.167z"
                                        opacity="1" data-original="#283e42"></path>
                                    <path
                                        d="M22.562 18.156h-6.166a.5.5 0 0 1-.5-.522 3.587 3.587 0 0 1 3.583-3.435c.962 0 1.866.374 2.545 1.053a3.622 3.622 0 0 1 1.038 2.38.499.499 0 0 1-.5.524zm-5.59-1h5.014a2.6 2.6 0 0 0-.671-1.199 2.578 2.578 0 0 0-1.836-.758 2.584 2.584 0 0 0-2.507 1.957z"
                                        fill="#000000" opacity="1" data-original="#000000"></path>
                                    <path fill="#5ae4a7"
                                        d="m46.497 11.166-12.44 18.37-6.127-4.15 12.44-18.37a2.299 2.299 0 0 1 3.192-.608l2.322 1.573a2.297 2.297 0 0 1 .613 3.185z"
                                        opacity="1" data-original="#5ae4a7"></path>
                                    <path
                                        d="M34.057 30.035a.494.494 0 0 1-.28-.086l-6.128-4.15a.502.502 0 0 1-.133-.694l12.44-18.369a2.801 2.801 0 0 1 3.886-.742l2.323 1.572a2.774 2.774 0 0 1 1.175 1.786 2.774 2.774 0 0 1-.429 2.094l-12.44 18.37a.5.5 0 0 1-.414.22zm-5.433-4.783 5.3 3.589 12.16-17.955c.267-.396.365-.873.274-1.345s-.358-.879-.754-1.146l-2.322-1.573a1.8 1.8 0 0 0-2.498.475z"
                                        fill="#000000" opacity="1" data-original="#000000"></path>
                                    <path fill="#283e42"
                                        d="m45.21 13.068 1.287-1.902a2.297 2.297 0 0 0-.613-3.185l-2.322-1.573a2.299 2.299 0 0 0-3.192.609l-1.288 1.901z"
                                        opacity="1" data-original="#283e42"></path>
                                    <path
                                        d="M45.21 13.567a.494.494 0 0 1-.28-.086l-6.128-4.149a.502.502 0 0 1-.134-.694l1.288-1.902a2.801 2.801 0 0 1 3.886-.742l2.323 1.572a2.774 2.774 0 0 1 1.175 1.786 2.774 2.774 0 0 1-.429 2.094l-1.287 1.902a.5.5 0 0 1-.415.22zm-5.434-4.783 5.3 3.589 1.007-1.487c.268-.396.366-.873.275-1.345s-.358-.879-.754-1.146l-2.322-1.573a1.8 1.8 0 0 0-2.498.475z"
                                        fill="#000000" opacity="1" data-original="#000000"></path>
                                    <path fill="#ffddab"
                                        d="m34.057 29.535-3.419 1.493-1.56.685a.947.947 0 0 1-1.316-.89l.05-1.709.118-3.729z"
                                        opacity="1" data-original="#ffddab"></path>
                                    <path
                                        d="M28.706 32.288a1.442 1.442 0 0 1-1.444-1.477l.168-5.44a.499.499 0 0 1 .78-.4l6.127 4.15a.5.5 0 0 1-.08.872l-4.979 2.178c-.185.078-.38.117-.572.117zm-.305-5.98-.14 4.529a.44.44 0 0 0 .197.374.443.443 0 0 0 .424.042l4.143-1.813z"
                                        fill="#000000" opacity="1" data-original="#000000"></path>
                                    <path fill="#283e42"
                                        d="m30.638 31.028-1.56.685a.947.947 0 0 1-1.316-.89l.05-1.709c.5.173 1.018.435 1.528.78.51.346.952.733 1.298 1.134z"
                                        opacity="1" data-original="#283e42"></path>
                                    <path
                                        d="M28.706 32.288a1.442 1.442 0 0 1-1.444-1.477l.05-1.711a.5.5 0 0 1 .663-.458c.549.188 1.103.47 1.646.838a7.146 7.146 0 0 1 1.396 1.221.5.5 0 0 1-.178.784l-1.56.686c-.186.078-.38.117-.573.117zm-.415-2.432-.03.98a.44.44 0 0 0 .197.375.443.443 0 0 0 .424.042l.89-.392a6.8 6.8 0 0 0-.712-.552 6.715 6.715 0 0 0-.77-.453z"
                                        fill="#000000" opacity="1" data-original="#000000"></path>
                                    <path fill="#ffffff" d="M42.146 10.993 30.993 27.46" opacity="1"
                                        data-original="#ffffff"></path>
                                    <path
                                        d="M30.993 27.96a.5.5 0 0 1-.414-.78l11.153-16.467a.5.5 0 1 1 .828.56L31.407 27.74a.5.5 0 0 1-.414.22z"
                                        fill="#000000" opacity="1" data-original="#000000"></path>
                                </g>
                            </svg>

                        </div>

                        <div class="d-flex flex-column my-7">
                            <span class="fw-semibold fs-3x text-info lh-1 ls-n2">05</span>

                            <div class="m-0">
                                <span class="fw-semibold fs-6 text-gray-500">
                                    Total Generated NFC </span>

                            </div>
                        </div>

                        <span class="badge badge-info fs-base">
                            <i class="ki-duotone ki-arrow-down fs-5 text-danger ms-n1"><span
                                    class="path1"></span><span class="path2"></span></i>

                            Current
                        </span>
                    </div>
                </div>


            </div>
            <div class="col-sm-6 col-xl-2 mb-xl-10">

                <div class="card h-lg-100">
                    <div class="card-body d-flex justify-content-between align-items-start flex-column">
                        <div class="m-0">
                            <svg xmlns="http://www.w3.org/2000/svg" version="1.1"
                                xmlns:xlink="http://www.w3.org/1999/xlink" width="50" height="50" x="0" y="0"
                                viewBox="0 0 512 512" style="enable-background:new 0 0 512 512" xml:space="preserve"
                                class="">
                                <g>
                                    <rect width="352" height="448" x="80" y="24" fill="#7950ea" rx="16"
                                        opacity="1" data-original="#7950ea"></rect>
                                    <path fill="#8b74f7" d="M112 56h288v384H112z" opacity="1"
                                        data-original="#8b74f7">
                                    </path>
                                    <g fill="#f9cb58">
                                        <path
                                            d="M248 80h120v16H248zM248 216h80v16h-80zM248 320h72v16h-72zM248 112h96v16h-96zM248 184h120v16H248z"
                                            fill="#f9cb58" opacity="1" data-original="#f9cb58"></path>
                                    </g>
                                    <rect width="64" height="64" x="152" y="88" fill="#eab849" rx="12"
                                        opacity="1" data-original="#eab849"></rect>
                                    <path fill="#f4f4f4" d="m170.317 122.36 39.994-39.994 11.312 11.312-39.994 39.994z"
                                        opacity="1" data-original="#f4f4f4"></path>
                                    <rect width="64" height="64" x="152" y="192" fill="#eab849"
                                        rx="12" opacity="1" data-original="#eab849"></rect>
                                    <path fill="#f4f4f4"
                                        d="m170.303 226.352 39.994-39.994 11.312 11.312-39.994 39.994z" opacity="1"
                                        data-original="#f4f4f4"></path>
                                    <rect width="64" height="64" x="152" y="296" fill="#eab849"
                                        rx="12" opacity="1" data-original="#eab849"></rect>
                                    <path fill="#eab849"
                                        d="M460 196a16.97 16.97 0 0 0-24 0L248 384v24h24l188-188a16.97 16.97 0 0 0 0-24z"
                                        opacity="1" data-original="#eab849"></path>
                                    <path fill="#d3a039"
                                        d="m416 216 24 24 20-20a16.97 16.97 0 0 0 0-24 16.97 16.97 0 0 0-24 0z"
                                        opacity="1" data-original="#d3a039"></path>
                                    <path fill="#f9cea0"
                                        d="m288 344-2.832-1.416a16 16 0 0 1-7.7-20.253l22.509-56.273A16 16 0 0 1 314.833 256h42.818a48 48 0 0 1 40.495 22.23L440 344l56 56v96l-99.314-99.314A16 16 0 0 0 385.373 392H368a48 48 0 0 1-28.8-9.6l-34.867-26.15a17.707 17.707 0 0 1-1.896-26.687 17.707 17.707 0 0 1 21.306-2.853l34.781 19.875a14.289 14.289 0 0 0 17.193-2.302 14.289 14.289 0 0 0 1.785-18.03L368 312l-24-24z"
                                        opacity="1" data-original="#f9cea0"></path>
                                    <path fill="#eab849"
                                        d="m335.935 296.007 47.993-47.993 23.996 23.997-47.992 47.992z" opacity="1"
                                        data-original="#eab849"></path>
                                    <path fill="#f9cea0"
                                        d="m174.762 267.072-.406-.305a19.771 19.771 0 0 0-26.498 2.524l-53.936 59.382A8 8 0 0 1 80 323.293V200l-19.2 14.4A32 32 0 0 0 48 240v256h72v-81.373A54.627 54.627 0 0 1 136 376a54.628 54.628 0 0 0 16-38.627v-3.58a15.988 15.988 0 0 1 3.707-10.24c5.101-6.12 14.563-17.47 22.553-27.045a20.41 20.41 0 0 0-3.498-29.436z"
                                        opacity="1" data-original="#f9cea0"></path>
                                </g>
                            </svg>

                        </div>

                        <div class="d-flex flex-column my-7">
                            <span class="fw-semibold fs-3x text-info lh-1 ls-n2">Link</span>

                            <div class="m-0">
                                <span class="fw-semibold fs-6 text-gray-500">
                                    Check The Live Link
                                </span>

                            </div>
                        </div>

                        <button class="btn btn-info rounded-0">
                            View NFC
                        </button>
                    </div>
                </div>


            </div>
            <div class="col-sm-6 col-xl-2 mb-5 mb-xl-10">

                <div class="card h-lg-100">
                    <div class="card-body d-flex justify-content-between align-items-start flex-column">
                        <div class="m-0">
                            <svg xmlns="http://www.w3.org/2000/svg" version="1.1"
                                xmlns:xlink="http://www.w3.org/1999/xlink" width="50" height="50" x="0" y="0"
                                viewBox="0 0 464 464" style="enable-background:new 0 0 512 512" xml:space="preserve"
                                class="">
                                <g>
                                    <path fill="#f6bb92" d="M64 192h32v112H64zm0 0" opacity="1"
                                        data-original="#f6bb92"></path>
                                    <path fill="#4799cf" d="M64 304H0V192h64zm0 0" opacity="1"
                                        data-original="#4799cf"></path>
                                    <path fill="#ebebeb"
                                        d="M96 192h208v256c0 8.836-7.164 16-16 16H112c-8.836 0-16-7.164-16-16zm0 0"
                                        opacity="1" data-original="#ebebeb"></path>
                                    <path fill="#fdc9a6"
                                        d="M64 192h64l33.273 27.727c8.243 6.89 9.649 19.027 3.2 27.617a20.19 20.19 0 0 1-13.63 7.93 20.189 20.189 0 0 1-15.171-4.282L112 232a53.898 53.898 0 0 1-44.848 24H64zM208 192H64l48.8-30.488A31.997 31.997 0 0 1 144.056 160zm0 0"
                                        opacity="1" data-original="#fdc9a6"></path>
                                    <path fill="#d9d9d9" d="M168 304h64v48h-64zM200 256l-56 48h112zm0 0"
                                        opacity="1" data-original="#d9d9d9"></path>
                                    <path fill="#ebebeb" d="M192 328h16v24h-16zm0 0" opacity="1"
                                        data-original="#ebebeb"></path>
                                    <path fill="#dbdbdb"
                                        d="M224 376h56v16h-56zM248 408h32v16h-32zM120 376h48v16h-48zM120 408h48v16h-48zm0 0"
                                        opacity="1" data-original="#dbdbdb"></path>
                                    <path fill="#8dc79d" d="M360 72h-48L296 0l40 8 40-8zm0 0" opacity="1"
                                        data-original="#8dc79d"></path>
                                    <path fill="#f6bb92" d="M424 192H280V72h64l24 8h56zm0 0" opacity="1"
                                        data-original="#f6bb92"></path>
                                    <path fill="#4799cf" d="M400 80h64v112h-64zm0 0" opacity="1"
                                        data-original="#4799cf"></path>
                                    <path fill="#dbdbdb"
                                        d="M224.047 218.398c1.879 45.473 35.137 83.516 79.953 91.45V192h-77.113a96.01 96.01 0 0 0-2.84 26.398zm0 0"
                                        opacity="1" data-original="#dbdbdb"></path>
                                    <path fill="#8dc79d"
                                        d="M387.504 96 360 56.71l-47.664 1.458v16l-26.617 35.367c-6.926 9.906-14.84 19.031-22.696 28.219a95.441 95.441 0 0 0-22.976 65.375c1.66 52.418 45.078 93.809 97.516 92.953 52.44-.855 94.488-43.637 94.437-96.082a95.398 95.398 0 0 0-23.594-62.91A84.83 84.83 0 0 1 387.504 96zm0 0"
                                        opacity="1" data-original="#8dc79d"></path>
                                    <path fill="#6b9777"
                                        d="m349.816 188.168-22.57-7.512A10.6 10.6 0 0 1 330.594 160h10.812c5.848.008 10.586 4.746 10.594 10.594h16c-.04-13.645-10.422-25.031-24-26.328V136h-16v8.266c-12.488 1.18-22.438 10.957-23.844 23.422s6.117 24.21 18.028 28.144l22.57 7.512A10.6 10.6 0 0 1 341.406 224h-10.812c-5.848-.008-10.586-4.746-10.594-10.594h-16c.04 13.645 10.422 25.031 24 26.328V248h16v-8.266c12.488-1.18 22.438-10.957 23.844-23.422s-6.117-24.21-18.028-28.144zm0 0"
                                        opacity="1" data-original="#6b9777"></path>
                                    <g fill="#fdc9a6">
                                        <path
                                            d="m400 80-10.016-16.695A48.006 48.006 0 0 0 348.801 40H296c-8.836 0-16 7.164-16 16s7.164 16 16 16h40l5.36 8.93A63.997 63.997 0 0 0 396.237 112H400zM256 72h24c8.836 0 16 7.164 16 16s-7.164 16-16 16h-24c-8.836 0-16-7.164-16-16s7.164-16 16-16zm0 0"
                                            fill="#fdc9a6" opacity="1" data-original="#fdc9a6"></path>
                                        <path
                                            d="M256 104h24c8.836 0 16 7.164 16 16s-7.164 16-16 16h-24c-8.836 0-16-7.164-16-16s7.164-16 16-16zM256 136h24c8.836 0 16 7.164 16 16s-7.164 16-16 16h-24c-8.836 0-16-7.164-16-16s7.164-16 16-16zM256 168h24c8.836 0 16 7.164 16 16s-7.164 16-16 16h-24c-8.836 0-16-7.164-16-16s7.164-16 16-16zm0 0"
                                            fill="#fdc9a6" opacity="1" data-original="#fdc9a6"></path>
                                    </g>
                                    <path fill="#fbedbf"
                                        d="M328 320h16v16h-16zM328 352h16v16h-16zM328 384h16v32h-16zm0 0"
                                        opacity="1" data-original="#fbedbf"></path>
                                </g>
                            </svg>

                        </div>

                        <div class="d-flex flex-column my-7">
                            <span class="fw-semibold fs-3x text-info lh-1 ls-n2">QR</span>

                            <div class="m-0">
                                <span class="fw-semibold fs-6 text-gray-500">
                                    Download</span>

                            </div>
                        </div>

                        <button class="btn btn-info rounded-0">
                            Download
                        </button>
                    </div>
                </div>


            </div>
        </div>
    </div>
    <div class="mt-8">
        <div class="p-4 mb-2 mx-2 ms-0" style="background: #7239e9;position: relative; left: -2px;">
            <div class="d-flex justify-content-between align-items-center">
                <div>
                    <a href="#" class="btn btn-icon btn-info pulse pulse-light show_summery">
                        <i class="fas fa-eye-slash fs-1"></i>
                        <span class="pulse-ring"></span>
                    </a>
                </div>
                <h2 class="text-center mb-0 text-white">Update Your NFC Profile!</h2>
            </div>
        </div>
    </div>
    @if (session('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
    @endif
    @include('nfc.nfc_edit_partial')

    @push('scripts')
        <script>
            $(document).ready(function() {
                $('.show_summery').click(function() {
                    $('.summury_box').toggleClass('d-none').toggleClass('show');
                    var icon = $(this).find('i');
                    if ($('.summury_box').hasClass('d-none')) {
                        icon.removeClass('fa-eye').addClass('fa-eye-slash');
                    } else {
                        icon.removeClass('fa-eye-slash  ').addClass('fa-eye');
                    }
                });
            });
        </script>
    @endpush

</x-admin-app-layout>

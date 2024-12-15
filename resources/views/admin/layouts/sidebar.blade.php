<div id="kt_aside" class="aside aside-light aside-hoverable" data-kt-drawer="true" data-kt-drawer-name="aside"
    data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true"
    data-kt-drawer-width="{default:'200px', '300px': '250px'}" data-kt-drawer-direction="start"
    data-kt-drawer-toggle="#kt_aside_mobile_toggle">
    <div class="aside-logo flex-column-auto" id="kt_aside_logo">
        <a href="{{ route('admin.dashboard') }}">
            <img alt="Logo" src="{{ !empty($site->system_logo_white) && file_exists(public_path('storage/webSetting/systemLogoWhite/' . $site->system_logo_white)) ? asset('storage/webSetting/systemLogoWhite/' . $site->system_logo_white) : asset('frontend/assets/images/logos/logo.png') }}" class="h-60px logo">
        </a>
        <div id="kt_aside_toggle" class="btn btn-icon w-auto px-0 btn-active-color-info aside-toggle active"
            data-kt-toggle="true" data-kt-toggle-state="active" data-kt-toggle-target="body"
            data-kt-toggle-name="aside-minimize">
            <span class="svg-icon svg-icon-1 rotate-180">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                    fill="none">
                    <path opacity="0.5"
                        d="M14.2657 11.4343L18.45 7.25C18.8642 6.83579 18.8642 6.16421 18.45 5.75C18.0358 5.33579 17.3642 5.33579 16.95 5.75L11.4071 11.2929C11.0166 11.6834 11.0166 12.3166 11.4071 12.7071L16.95 18.25C17.3642 18.6642 18.0358 18.6642 18.45 18.25C18.8642 17.8358 18.8642 17.1642 18.45 16.75L14.2657 12.5657C13.9533 12.2533 13.9533 11.7467 14.2657 11.4343Z"
                        fill="currentColor"></path>
                    <path
                        d="M8.2657 11.4343L12.45 7.25C12.8642 6.83579 12.8642 6.16421 12.45 5.75C12.0358 5.33579 11.3642 5.33579 10.95 5.75L5.40712 11.2929C5.01659 11.6834 5.01659 12.3166 5.40712 12.7071L10.95 18.25C11.3642 18.6642 12.0358 18.6642 12.45 18.25C12.8642 17.8358 12.8642 17.1642 12.45 16.75L8.2657 12.5657C7.95328 12.2533 7.95328 11.7467 8.2657 11.4343Z"
                        fill="currentColor"></path>
                </svg>
            </span>
        </div>
    </div>
    <div class="aside-menu flex-column-fluid">
        <div class="hover-scroll-overlay-y my-5 my-lg-5" id="kt_aside_menu_wrapper" data-kt-scroll="true"
            data-kt-scroll-activate="{default: false, lg: true}" data-kt-scroll-height="auto"
            data-kt-scroll-dependencies="#kt_aside_logo, #kt_aside_footer" data-kt-scroll-wrappers="#kt_aside_menu"
            data-kt-scroll-offset="0" style="height: 318px;">
            <div class="menu menu-column menu-title-gray-800 menu-state-title-primary menu-state-icon-primary menu-state-bullet-primary menu-arrow-gray-500"
                id="#kt_aside_menu" data-kt-menu="true" data-kt-menu-expand="false">
                <div class="menu-item">
                    <a class="menu-link {{ Route::is('admin.dashboard') ? 'active' : '' }}"
                        href="{{ route('admin.dashboard') }}">
                        <span class="menu-icon">
                            <span class="svg-icon svg-icon-2">
                                <svg xmlns="http://www.w3.org/2000/svg" version="1.1"
                                    xmlns:xlink="http://www.w3.org/1999/xlink" width="512" height="512" x="0" y="0"
                                    viewBox="0 0 60 60" style="enable-background:new 0 0 512 512" xml:space="preserve"
                                    class="">
                                    <g>
                                        <path fill="#b5b8bc" d="M41 55v1H19v-1s5-1 5-5v-1h12v1c0 4 5 5 5 5z"
                                            opacity="1" data-original="#b5b8bc"></path>
                                        <path fill="#d5d8db"
                                            d="M59 45v3a2.006 2.006 0 0 1-2 2H3a2.006 2.006 0 0 1-2-2v-3l1-1h56z"
                                            opacity="1" data-original="#d5d8db"></path>
                                        <path fill="#363699"
                                            d="M59 3v42H1V3a2.006 2.006 0 0 1 2-2h54a2.006 2.006 0 0 1 2 2z"
                                            opacity="1" data-original="#363699" class=""></path>
                                        <path fill="#d5d8db"
                                            d="M19 55h22a3 3 0 0 1 3 3 1 1 0 0 1-1 1H17a1 1 0 0 1-1-1 3 3 0 0 1 3-3z"
                                            opacity="1" data-original="#d5d8db"></path>
                                        <path fill="#50ad80" d="M37 40v-7a1 1 0 0 0-1-1h-2a1 1 0 0 0-1 1v7z"
                                            opacity="1" data-original="#50ad80"></path>
                                        <path fill="#eac03b" d="M45 40V28a1 1 0 0 0-1-1h-2a1 1 0 0 0-1 1v12z"
                                            opacity="1" data-original="#eac03b"></path>
                                        <path fill="#d84459"
                                            d="M53 40v-7a1 1 0 0 0-1-1h-2a1 1 0 0 0-1 1v7zM16 15v8a8 8 0 0 1-5.66-13.66z"
                                            opacity="1" data-original="#d84459" class=""></path>
                                        <path fill="#262472" d="M24 15h-8l-5.66-5.66A8 8 0 0 1 24 15z" opacity="1"
                                            data-original="#262472"></path>
                                        <path fill="#eac03b" d="M24 15a8 8 0 0 1-8 8v-8z" opacity="1"
                                            data-original="#eac03b"></path>
                                        <g fill="#262472">
                                            <path
                                                d="M54 41H32a1 1 0 0 1 0-2h22a1 1 0 0 1 0 2zM54 22H38a1 1 0 0 1 0-2h16a1 1 0 0 1 0 2zM34 22h-2a1 1 0 0 1 0-2h2a1 1 0 0 1 0 2zM54 16H38a1 1 0 0 1 0-2h16a1 1 0 0 1 0 2zM34 16h-2a1 1 0 0 1 0-2h2a1 1 0 0 1 0 2zM54 10H38a1 1 0 0 1 0-2h16a1 1 0 0 1 0 2zM34 10h-2a1 1 0 0 1 0-2h2a1 1 0 0 1 0 2zM28 41H12a1 1 0 0 1 0-2h16a1 1 0 0 1 0 2zM8 41H6a1 1 0 0 1 0-2h2a1 1 0 0 1 0 2zM28 35H12a1 1 0 0 1 0-2h16a1 1 0 0 1 0 2zM8 35H6a1 1 0 0 1 0-2h2a1 1 0 0 1 0 2zM28 29H12a1 1 0 0 1 0-2h16a1 1 0 0 1 0 2zM8 29H6a1 1 0 0 1 0-2h2a1 1 0 0 1 0 2z"
                                                fill="#262472" opacity="1" data-original="#262472"></path>
                                        </g>
                                    </g>
                                </svg>
                            </span>
                        </span>
                        <span class="menu-title">Dashboard</span>
                    </a>
                </div>
                <div class="menu-item">
                    <a class="menu-link {{ Route::is('admin.qr-code.index', 'admin.qr-code.create', 'admin.qr-code.edit') ? 'active' : '' }}"
                        href="{{ route('admin.qr-code.index') }}">
                        <span class="menu-icon">
                            <span class="svg-icon svg-icon-2">
                                <svg xmlns="http://www.w3.org/2000/svg" version="1.1"
                                    xmlns:xlink="http://www.w3.org/1999/xlink" width="512" height="512" x="0"
                                    y="0" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512"
                                    xml:space="preserve" class="">
                                    <g>
                                        <path
                                            d="M30 30h90V0H0v120h30zM392 0v30h90v90h30V0zM482 482h-90v30h120V392h-30zM30 392H0v120h120v-30H30zm0 0"
                                            fill="#fb2905" opacity="1" data-original="#000000" class="">
                                        </path>
                                        <path
                                            d="M61 60v150h150v-90h30V90h-30V60zm120 120H91V90h90zM451 450V300h-60v-30h-30v30h-90v30h30v30h-30v30h30v60zM331 330h90v90h-90zM151 270h60v-30H61v30h60v30H91v30h30v60H91v30h30v30h150v-30h-30v-30h-30v30h-60v-30h30v-30h-30zm0 0"
                                            fill="#fb2905" opacity="1" data-original="#000000" class="">
                                        </path>
                                        <path d="M121 120h30v30h-30zM361 120h30v30h-30zm0 0" fill="#000000"
                                            opacity="1" data-original="#000000" class=""></path>
                                        <path
                                            d="M391 210h60V60H301v150h60v30h30zm-60-30V90h90v90zM451 270v-30h-60v30zM361 360h30v30h-30zM241 330h30v30h-30zM181 360h30v-60h-30zM211 270h30v30h-30zM91 330H61v60h30v-60zM61 420h30v30H61zM241 60h30v30h-30zM241 180h30v-60h-30zM271 240v-30h-30v60h120v-30zm0 0"
                                            fill="#fb2905" opacity="1" data-original="#000000" class="">
                                        </path>
                                    </g>
                                </svg>
                            </span>
                        </span>
                        <span class="menu-title">QR Code</span>
                    </a>
                </div>
                <div class="menu-item">
                    <a class="menu-link {{ Route::is('admin.barcode.index', 'admin.barcode.create', 'admin.barcode.edit') ? 'active' : '' }}"
                        href="{{ route('admin.barcode.index') }}">
                        <span class="menu-icon">
                            <span class="svg-icon svg-icon-2">
                                <svg xmlns="http://www.w3.org/2000/svg" version="1.1"
                                    xmlns:xlink="http://www.w3.org/1999/xlink" width="512" height="512" x="0"
                                    y="0" viewBox="0 0 426.667 426" style="enable-background:new 0 0 512 512"
                                    xml:space="preserve" class="">
                                    <g>
                                        <path
                                            d="M74.668.332h-64C4.778.332 0 5.109 0 11v64c0 5.89 4.777 10.668 10.668 10.668S21.332 80.891 21.332 75V21.668h53.336c5.89 0 10.664-4.777 10.664-10.668S80.559.332 74.668.332zM74.668 320.332H21.332V267c0-5.89-4.773-10.668-10.664-10.668S0 261.109 0 267v64c0 5.89 4.777 10.668 10.668 10.668h64c5.89 0 10.664-4.777 10.664-10.668s-4.773-10.668-10.664-10.668zM416 .332h-64c-5.89 0-10.668 4.777-10.668 10.668S346.109 21.668 352 21.668h53.332V75c0 5.89 4.777 10.668 10.668 10.668S426.668 80.891 426.668 75V11c0-5.89-4.777-10.668-10.668-10.668zM416 256.332c-5.89 0-10.668 4.777-10.668 10.668v53.332H352c-5.89 0-10.668 4.777-10.668 10.668s4.777 10.668 10.668 10.668h64c5.89 0 10.668-4.777 10.668-10.668v-64c0-5.89-4.777-10.668-10.668-10.668zM74.668 64.332C68.778 64.332 64 69.109 64 75v192c0 5.89 4.777 10.668 10.668 10.668S85.332 272.891 85.332 267V75c0-5.89-4.773-10.668-10.664-10.668zM117.332 64.332h21.336c5.89 0 10.664 4.777 10.664 10.668v192c0 5.89-4.773 10.668-10.664 10.668h-21.336c-5.89 0-10.664-4.777-10.664-10.668V75c0-5.89 4.773-10.668 10.664-10.668zM181.332 64.332c-5.89 0-10.664 4.777-10.664 10.668v192c0 5.89 4.773 10.668 10.664 10.668S192 272.891 192 267V75c0-5.89-4.777-10.668-10.668-10.668zM224 64.332h21.332C251.222 64.332 256 69.109 256 75v192c0 5.89-4.777 10.668-10.668 10.668H224c-5.89 0-10.668-4.777-10.668-10.668V75c0-5.89 4.777-10.668 10.668-10.668zM288 64.332c-5.89 0-10.668 4.777-10.668 10.668v192c0 5.89 4.777 10.668 10.668 10.668s10.668-4.777 10.668-10.668V75c0-5.89-4.777-10.668-10.668-10.668zM330.668 64.332H352c5.89 0 10.668 4.777 10.668 10.668v192c0 5.89-4.777 10.668-10.668 10.668h-21.332c-5.89 0-10.668-4.777-10.668-10.668V75c0-5.89 4.777-10.668 10.668-10.668zm0 0"
                                            fill="#000000" opacity="1" data-original="#000000" class="">
                                        </path>
                                    </g>
                                </svg>
                            </span>
                        </span>
                        <span class="menu-title">Bar Code</span>
                    </a>
                </div>
                <div class="menu-item">
                    <a class="menu-link {{ Route::is('admin.virtual-card.index', 'admin.virtual-card.create', 'admin.virtual-card.edit') ? 'active' : '' }}"
                        href="{{ route('admin.virtual-card.index') }}">
                        <span class="menu-icon">
                            <span class="svg-icon svg-icon-2">
                                <svg xmlns="http://www.w3.org/2000/svg" version="1.1"
                                    xmlns:xlink="http://www.w3.org/1999/xlink" width="512" height="512" x="0"
                                    y="0" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512"
                                    xml:space="preserve" class="">
                                    <g>
                                        <linearGradient id="a" x1="410.584" x2="17.316" y1="451.093"
                                            y2="57.826" gradientUnits="userSpaceOnUse">
                                            <stop offset="0" stop-color="#eae936"></stop>
                                            <stop offset="1" stop-color="#43b871"></stop>
                                        </linearGradient>
                                        <path fill="url(#a)" fill-rule="evenodd"
                                            d="M317.901 233.67h96.116c4.41 0 8.004-3.58 8.004-7.999s-3.594-7.999-8.004-7.999h-96.116c-4.415 0-8.004 3.579-8.004 7.999 0 4.419 3.589 7.999 8.004 7.999zm-36.472 89.551h-138.04c-9.291 0-16.852 7.551-16.852 16.838v25.28c0 9.291 7.561 16.852 16.852 16.852h138.04c9.291 0 16.852-7.56 16.852-16.852v-25.28c-.001-9.287-7.561-16.838-16.852-16.838zm151.92-235.119H371.79V35.943c0-19.266-16.663-34.944-37.132-34.944h-244.5c-20.47 0-37.128 15.678-37.128 34.944v440.118C53.03 495.318 69.688 511 90.158 511h244.5c20.469 0 37.132-15.682 37.132-34.939V301.61h61.559c14.116 0 25.62-11.489 25.62-25.62V113.722c0-14.126-11.503-25.62-25.62-25.62zM191.161 30.236h42.5c4.419 0 7.999 3.58 7.999 7.999s-3.58 7.999-7.999 7.999h-42.5c-4.414 0-8.003-3.58-8.003-7.999-.001-4.419 3.588-7.999 8.003-7.999zm37.84 433.365h-33.18a6.209 6.209 0 0 1-6.212-6.202 6.207 6.207 0 0 1 6.212-6.207h33.18a6.206 6.206 0 0 1 6.207 6.207 6.208 6.208 0 0 1-6.207 6.202zm126.787-59.809H69.029V75.476h286.759v12.626H152.165c-14.125 0-25.629 11.494-25.629 25.62v162.269c0 14.13 11.504 25.62 25.629 25.62h203.623zm87.178-127.801c0 5.306-4.32 9.622-9.617 9.622H152.165c-5.306 0-9.626-4.316-9.626-9.622V165.73h300.427zm0-153.44H142.539v-8.829c0-5.306 4.32-9.622 9.626-9.622h281.184c5.297 0 9.617 4.315 9.617 9.622zm-197.099 69.855h-74.359c-8.678 0-15.748 7.065-15.748 15.748v35.029c0 8.688 7.07 15.748 15.748 15.748h74.359c8.683 0 15.753-7.06 15.753-15.748v-35.029c0-8.683-7.07-15.748-15.753-15.748zm-58.899 50.527h-15.21v-9.263h15.21zm0-25.261h-15.21v-9.263h15.21zm58.653 25.261h-15.21v-9.263h15.21zm0-25.261h-15.21v-9.263h15.21zm168.396 25.261h-96.116c-4.415 0-8.004 3.584-8.004 7.999 0 4.419 3.589 7.999 8.004 7.999h96.116c4.41 0 8.004-3.58 8.004-7.999 0-4.414-3.594-7.999-8.004-7.999z"
                                            clip-rule="evenodd" opacity="1" data-original="url(#a)"
                                            class=""></path>
                                    </g>
                                </svg>
                            </span>
                        </span>
                        <span class="menu-title">Virtual Card</span>
                    </a>
                </div>
                <div class="menu-item">
                    <a class="menu-link {{ Route::is('admin.nfc-card.index', 'admin.nfc-card.create', 'admin.nfc-card.edit') ? 'active' : '' }}"
                        href="{{ route('admin.nfc-card.index') }}">
                        <span class="menu-icon">
                            <span class="svg-icon svg-icon-2">
                                <svg xmlns="http://www.w3.org/2000/svg" version="1.1"
                                    xmlns:xlink="http://www.w3.org/1999/xlink" width="512" height="512" x="0"
                                    y="0" viewBox="0 0 505.557 505.557" style="enable-background:new 0 0 512 512"
                                    xml:space="preserve" class="">
                                    <g>
                                        <path
                                            d="M453.769 68.778H51.788C23.232 68.778 0 92.011 0 120.566v188.125h97.061c8.284 0 15 6.716 15 15v113.087h341.708c28.556 0 51.788-23.232 51.788-51.788V120.566c0-28.555-23.233-51.788-51.788-51.788zm-118.913 142.26c-5.834-5.882-5.796-15.379.086-21.213s15.378-5.797 21.213.086c34.056 34.333 33.68 90.121-.839 124.361a14.955 14.955 0 0 1-10.563 4.351 14.945 14.945 0 0 1-10.649-4.437c-5.834-5.882-5.796-15.379.086-21.213 22.774-22.59 23.073-59.346.666-81.935zm34.442 118.587c43.251-42.901 43.792-112.733 1.206-155.666-5.834-5.882-5.796-15.379.086-21.213s15.378-5.795 21.213.086c54.235 54.678 53.617 143.541-1.378 198.092a14.955 14.955 0 0 1-10.563 4.351 14.945 14.945 0 0 1-10.649-4.437c-5.835-5.882-5.797-15.379.085-21.213zm-76.515-94.01c-5.834-5.882-5.796-15.379.086-21.213 5.881-5.834 15.379-5.794 21.213.086 20.719 20.889 20.502 54.816-.483 75.633a14.955 14.955 0 0 1-10.563 4.351 14.945 14.945 0 0 1-10.649-4.437c-5.834-5.882-5.796-15.379.086-21.213 9.24-9.167 9.38-24.063.31-33.207zM63.072 162.986c0-8.284 6.716-15 15-15h138.903c8.284 0 15 6.716 15 15s-6.716 15-15 15H78.072c-8.284 0-15-6.715-15-15zm20.706 73.412c-8.284 0-15-6.716-15-15s6.716-15 15-15h63.745c8.284 0 15 6.716 15 15s-6.716 15-15 15H83.778z"
                                            fill="#076f81" opacity="1" data-original="#076f81" class="">
                                        </path>
                                        <path
                                            d="M82.061 338.691H0v46.299c0 28.556 23.232 51.788 51.788 51.788H82.06v-98.087z"
                                            fill="#076f81" opacity="1" data-original="#076f81" class="">
                                        </path>
                                    </g>
                                </svg>
                            </span>
                        </span>
                        <span class="menu-title">My NFC Cards</span>
                    </a>
                </div>


                <div data-kt-menu-trigger="click"
                    class="menu-item {{ Route::is('admin.qr.template', 'admin.nfc.template') ? 'here show' : '' }} menu-accordion">
                    <span class="menu-link">
                        <span class="menu-icon">
                            <!--begin::Svg Icon | path: icons/duotune/general/gen022.svg-->
                            <span class="svg-icon svg-icon-2">
                                <svg xmlns="http://www.w3.org/2000/svg" version="1.1"
                                    xmlns:xlink="http://www.w3.org/1999/xlink" width="512" height="512" x="0"
                                    y="0" viewBox="0 0 52 52" style="enable-background:new 0 0 512 512"
                                    xml:space="preserve" class="">
                                    <g>
                                        <path fill="#deddff"
                                            d="M1.983 13.769v32.773a3.465 3.465 0 0 0 3.463 3.463h36.255a3.46 3.46 0 0 0 3.463-3.463V13.769z"
                                            opacity="1" data-original="#deddff"></path>
                                        <path fill="#c6c6f7"
                                            d="M7.47 50.005H5.446a3.465 3.465 0 0 1-3.463-3.463V13.769h2.024v32.773a3.465 3.465 0 0 0 3.463 3.463z"
                                            opacity="1" data-original="#c6c6f7"></path>
                                        <path fill="#5b5e8b"
                                            d="M45.164 10.188v3.653H1.983v-3.653a3.465 3.465 0 0 1 3.463-3.463h36.255a3.46 3.46 0 0 1 3.463 3.463z"
                                            opacity="1" data-original="#5b5e8b" class=""></path>
                                        <path fill="#312e4b"
                                            d="M7.47 6.725a3.465 3.465 0 0 0-3.463 3.463v3.653H1.983v-3.653a3.465 3.465 0 0 1 3.463-3.463z"
                                            opacity="1" data-original="#312e4b" class=""></path>
                                        <circle cx="6.855" cy="10.264" r="1.257" fill="#deddff"
                                            opacity="1" data-original="#deddff"></circle>
                                        <circle cx="10.754" cy="10.264" r="1.257" fill="#deddff"
                                            opacity="1" data-original="#deddff"></circle>
                                        <circle cx="14.653" cy="10.264" r="1.257" fill="#deddff"
                                            opacity="1" data-original="#deddff"></circle>
                                        <path fill="#deddff"
                                            d="M41.55 10.269a.86.86 0 0 1-.855.854H24.133a.854.854 0 0 1-.855-.854c0-.477.378-.864.855-.864h16.562c.467 0 .854.387.854.864z"
                                            opacity="1" data-original="#deddff"></path>
                                        <path fill="#c6c6f7"
                                            d="M37.936 32.504H20.507a.638.638 0 0 1 0-1.276h17.429a.638.638 0 0 1 0 1.276zM34.81 36.133H20.507a.638.638 0 0 1 0-1.276H34.81a.638.638 0 0 1 0 1.276zM33.247 39.761h-12.74a.638.638 0 0 1 0-1.276h12.74a.638.638 0 0 1 0 1.276zM31.685 43.39H20.507a.638.638 0 0 1 0-1.277h11.178a.638.638 0 0 1 0 1.277zM35.428 47.018H5.888a.638.638 0 0 1 0-1.276h29.54a.638.638 0 0 1 0 1.276z"
                                            opacity="1" data-original="#c6c6f7"></path>
                                        <path fill="#65b9ff"
                                            d="M5.25 27.292v-8.994c0-.875.71-1.584 1.584-1.584h33.479c.875 0 1.584.71 1.584 1.584v8.994c0 .875-.71 1.584-1.584 1.584H6.834c-.875 0-1.584-.71-1.584-1.584z"
                                            opacity="1" data-original="#65b9ff"></path>
                                        <path fill="#3e7fff"
                                            d="M9.356 28.875h-2.52c-.88 0-1.59-.71-1.59-1.58v-9c0-.87.71-1.58 1.59-1.58h2.52c-.87 0-1.58.71-1.58 1.58v9c0 .87.71 1.58 1.58 1.58z"
                                            opacity="1" data-original="#3e7fff"></path>
                                        <path fill="#46cc6b" d="m35.266 41.421 5.275 3.2 7.342-11.986-5.275-3.2z"
                                            opacity="1" data-original="#46cc6b"></path>
                                        <path fill="#179c5f" d="m45.246 31.035 2.637 1.6-7.342 11.986-2.637-1.6z"
                                            opacity="1" data-original="#179c5f"></path>
                                        <path fill="#c6c6f7" d="m47.893 32.62-5.275-3.203.96-1.582 5.276 3.202z"
                                            opacity="1" data-original="#c6c6f7"></path>
                                        <path fill="#312e4b"
                                            d="m43.569 27.852 5.274 3.2.617-1.046a3.085 3.085 0 1 0-5.275-3.2z"
                                            opacity="1" data-original="#312e4b" class=""></path>
                                        <path fill="#ffaf93"
                                            d="m35.264 41.418.01 3.324.006 2.176c.004.19.21.316.375.228l1.933-1 2.953-1.527z"
                                            opacity="1" data-original="#ffaf93"></path>
                                        <path fill="#312e4b"
                                            d="m35.274 44.742.006 2.176c.004.19.21.316.375.228l1.939-.997z"
                                            opacity="1" data-original="#312e4b" class=""></path>
                                        <path fill="#deddff"
                                            d="M15.27 22.549c.156-.118.295-.26.412-.425.207-.288.313-.652.313-1.08 0-1.1-.763-2.006-2.436-2.006h-2.355a.652.652 0 0 0-.65.66v6.057a.64.64 0 0 0 .189.46v.001a.64.64 0 0 0 .46.189h2.416c2.01 0 2.765-.93 2.765-2.157 0-.797-.429-1.359-1.115-1.7zm-.164 1.66c0 .811-.765.947-1.577.947h-1.666v-1.885h1.677c1.566 0 1.566.705 1.566.937zm-3.243-2.157v-1.766h1.627c.613 0 1.236.217 1.236.829 0 .78-.622.937-1.406.937zM21.842 25.096H18.78v-5.449c0-.863-1.309-.868-1.309 0v5.929c0 .455.366.829.83.829h3.542a.65.65 0 0 0 .66-.65c0-.36-.29-.659-.66-.659zM26.503 18.938c-2.112 0-3.656 1.44-3.703 3.787.046 2.284 1.539 3.78 3.703 3.78 2.256 0 3.663-1.612 3.704-3.787-.042-2.192-1.472-3.78-3.704-3.78zm2.395 3.784c0 1.478-.91 2.534-2.395 2.534-1.514 0-2.394-1.087-2.394-2.534 0-1.437.868-2.535 2.394-2.535 1.468 0 2.395 1.036 2.395 2.535zM36.793 22.182h-1.966c-.798 0-.816 1.219 0 1.219h1.446v1.485c-.478.239-.997.36-1.546.36-1.576 0-2.515-1.056-2.515-2.515 0-1.609 1.036-2.514 2.465-2.514.637 0 1.202.143 1.867.537a.647.647 0 0 0 .748-.11c.303-.32.163-.817-.123-.957-.88-.552-1.655-.749-2.591-.749-2.035 0-3.674 1.499-3.674 3.793 0 2.236 1.529 3.773 3.703 3.773.806 0 1.605-.195 2.372-.578a.872.872 0 0 0 .493-.8v-2.265a.676.676 0 0 0-.68-.679z"
                                            opacity="1" data-original="#deddff"></path>
                                        <path fill="#e83d62"
                                            d="M50.008 9.519a7.831 7.831 0 0 1-2.88 6.462 7.886 7.886 0 0 1-4.335 1.762.49.49 0 0 0-.306.149c-1.266 1.258-2.755 1.514-3.516 1.555-.19.009-.298-.215-.182-.364.422-.537.579-1.026.604-1.44a.51.51 0 0 0-.323-.487 7.883 7.883 0 0 1-4.832-7.273c0-4.427 3.657-8.01 8.125-7.885 2.168.058 4.154 1.042 5.552 2.565 1.224 1.332 2.01 3.061 2.093 4.956z"
                                            opacity="1" data-original="#e83d62"></path>
                                        <path fill="#ce2955"
                                            d="M40.988 17.644c-.025.413-.182.902-.612 1.44a.255.255 0 0 0-.05.107c-.53.174-1.009.24-1.348.256-.19.009-.306-.215-.182-.364.422-.537.579-1.026.604-1.44a.518.518 0 0 0-.331-.487 7.876 7.876 0 0 1-4.824-7.273c0-4.427 3.657-8.01 8.117-7.885.19.008.389.017.579.041a7.886 7.886 0 0 0-7.107 7.844 7.876 7.876 0 0 0 4.823 7.273c.199.082.34.273.331.488z"
                                            opacity="1" data-original="#ce2955"></path>
                                        <path fill="#fcb73e"
                                            d="M16.727 43.39H6.881a1.254 1.254 0 0 1-1.254-1.254v-9.654c0-.692.561-1.254 1.254-1.254h9.846c.693 0 1.255.562 1.255 1.254v9.654c0 .692-.562 1.254-1.255 1.254z"
                                            opacity="1" data-original="#fcb73e"></path>
                                        <path fill="#fd982e"
                                            d="M9.877 43.385h-3c-.69 0-1.25-.56-1.25-1.25v-9.65c0-.7.56-1.26 1.25-1.26h3c-.69 0-1.25.56-1.25 1.26v9.65c0 .69.56 1.25 1.25 1.25z"
                                            opacity="1" data-original="#fd982e"></path>
                                        <path fill="#deddff"
                                            d="M47.942 9.223c-.01-.21-.178-.357-.366-.388l-.409-.063a.44.44 0 0 1-.356-.314 4.084 4.084 0 0 0-.346-.755.468.468 0 0 1 .01-.482l.241-.356a.458.458 0 0 0-.031-.555 14.738 14.738 0 0 0-.398-.42 7.031 7.031 0 0 0-.44-.376.456.456 0 0 0-.555 0l-.357.24a.43.43 0 0 1-.471.032 7.91 7.91 0 0 0-.776-.304.455.455 0 0 1-.335-.335l-.073-.398a.434.434 0 0 0-.398-.356 4.645 4.645 0 0 0-1.205.041c-.189.021-.336.19-.356.388l-.053.335a.456.456 0 0 1-.314.367 4.32 4.32 0 0 0-.744.325.45.45 0 0 1-.472-.01l-.282-.19a.456.456 0 0 0-.556.032 5.126 5.126 0 0 0-.419.409c-.136.136-.251.283-.367.43a.441.441 0 0 0-.01.555l.199.272a.47.47 0 0 1 .031.472c-.115.23-.21.492-.282.754a.425.425 0 0 1-.357.325l-.335.073c-.199.032-.356.189-.367.377-.052.41-.031.818.01 1.216a.457.457 0 0 0 .378.367l.409.073c.167.02.303.136.356.304.084.262.21.513.335.754.084.157.094.335-.01.482l-.23.356a.489.489 0 0 0 .03.566c.126.136.263.283.41.42.135.125.282.261.429.376a.456.456 0 0 0 .555 0l.346-.251a.47.47 0 0 1 .482-.042c.251.136.503.241.775.304a.526.526 0 0 1 .325.356l.084.398c.042.189.199.336.398.357.388.03.807.02 1.194-.042.2-.032.346-.2.378-.388l.041-.346a.436.436 0 0 1 .325-.367c.252-.083.493-.199.734-.314a.45.45 0 0 1 .471.01l.273.179a.442.442 0 0 0 .555-.032 4.98 4.98 0 0 0 .419-.398c.136-.136.262-.283.377-.44a.456.456 0 0 0 .01-.555l-.198-.262a.469.469 0 0 1-.042-.482c.125-.23.22-.482.293-.734a.45.45 0 0 1 .346-.345l.346-.063a.444.444 0 0 0 .366-.388 5.683 5.683 0 0 0-.02-1.194zm-5.469 3.049a2.388 2.388 0 1 1 0-4.778c1.31 0 2.378 1.069 2.378 2.389s-1.068 2.389-2.378 2.389z"
                                            opacity="1" data-original="#deddff"></path>
                                    </g>
                                </svg>
                            </span>
                            <!--end::Svg Icon-->
                        </span>
                        <span class="menu-title">Blog Management</span>
                        <span class="menu-arrow"></span>
                    </span>
                    <div
                        class="menu-sub menu-sub-accordion {{ Route::is('admin.blog-post.index', 'admin.blog-post.create', 'admin.blog-post.edit', 'admin.blog-category.index', 'admin.blog-tags.index') ? 'menu-active-bg' : '' }}">
                        <div class="menu-item">
                            <a class="menu-link {{ Route::is('admin.blog-category.index') ? 'active' : '' }}"
                                href="{{ route('admin.blog-category.index') }}">
                                <span class="menu-bullet">
                                    <span class="bullet bullet-dot"></span>
                                </span>
                                <span class="menu-title">Blog Category</span>
                            </a>
                        </div>
                        {{-- <div class="menu-item">
                            <a class="menu-link {{ Route::is('admin.blog-tags.index') ? 'active' : '' }}"
                                href="{{ route('admin.blog-tags.index') }}">
                                <span class="menu-bullet">
                                    <span class="bullet bullet-dot"></span>
                                </span>
                                <span class="menu-title">Blog Tags</span>
                            </a>
                        </div> --}}
                        <div class="menu-item">
                            <a class="menu-link {{ Route::is('admin.blog-post.index', 'admin.blog-post.create', 'admin.blog-post.edit') ? 'active' : '' }}"
                                href="{{ route('admin.blog-post.index') }}">
                                <span class="menu-bullet">
                                    <span class="bullet bullet-dot"></span>
                                </span>
                                <span class="menu-title">Blog Post</span>
                            </a>
                        </div>
                    </div>
                </div>
                <div data-kt-menu-trigger="click"
                    class="menu-item {{ Route::is('admin.qr.template', 'admin.nfc.template') ? 'here show' : '' }} menu-accordion">
                    <span class="menu-link">
                        <span class="menu-icon">
                            <!--begin::Svg Icon | path: icons/duotune/general/gen022.svg-->
                            <span class="svg-icon svg-icon-2">
                                <svg xmlns="http://www.w3.org/2000/svg" version="1.1"
                                    xmlns:xlink="http://www.w3.org/1999/xlink" width="512" height="512" x="0"
                                    y="0" viewBox="0 0 500 500" style="enable-background:new 0 0 512 512"
                                    xml:space="preserve" class="">
                                    <g>
                                        <path fill="#aab1ba"
                                            d="M406.058 444.299H93.942c-10.388 0-18.809-8.421-18.809-18.809v50.701c0 10.388 8.421 18.809 18.809 18.809h312.117c10.388 0 18.809-8.421 18.809-18.809V425.49c-.001 10.388-8.422 18.809-18.81 18.809z"
                                            opacity="1" data-original="#aab1ba"></path>
                                        <path fill="#ecf4f7"
                                            d="M75.133 425.49c0 10.388 8.421 18.809 18.809 18.809h312.117c10.388 0 18.809-8.421 18.809-18.809V112.149H75.133z"
                                            opacity="1" data-original="#ecf4f7" class=""></path>
                                        <path fill="#fddf7f"
                                            d="M370.573 342.7h-98.517a5.937 5.937 0 0 1-5.937-5.937V274.88a5.937 5.937 0 0 1 5.937-5.937h98.517a5.937 5.937 0 0 1 5.937 5.937v61.883a5.937 5.937 0 0 1-5.937 5.937zM225.013 342.7h-98.517a5.937 5.937 0 0 1-5.937-5.937V159.326a5.937 5.937 0 0 1 5.937-5.937h98.517a5.937 5.937 0 0 1 5.937 5.937v177.437a5.937 5.937 0 0 1-5.937 5.937zM370.573 191.278h-98.517a5.937 5.937 0 0 1-5.937-5.937v-26.016a5.937 5.937 0 0 1 5.937-5.937h98.517a5.937 5.937 0 0 1 5.937 5.937v26.016a5.937 5.937 0 0 1-5.937 5.937z"
                                            opacity="1" data-original="#fddf7f" class=""></path>
                                        <path fill="#83e1e5"
                                            d="M424.867 112.149V67.614c0-10.388-8.421-18.809-18.809-18.809H93.942c-10.388 0-18.809 8.421-18.809 18.809v44.534h349.734z"
                                            opacity="1" data-original="#83e1e5" class=""></path>
                                        <path fill="#1c1d21"
                                            d="M214.102 14.449a5 5 0 0 1 5-5h4.449V5a5 5 0 0 1 10 0v4.449H238a5 5 0 0 1 0 10h-4.449v4.449a5 5 0 0 1-10 0v-4.449h-4.449a5 5 0 0 1-5-5zM51.424 96.083h-4.449v-4.449a5 5 0 0 0-10 0v4.449h-4.449a5 5 0 0 0 0 10h4.449v4.449a5 5 0 0 0 10 0v-4.449h4.449a5 5 0 0 0 0-10zm416.05 42.804h-4.449v-4.449a5 5 0 0 0-10 0v4.449h-4.449a5 5 0 0 0 0 10h4.449v4.449a5 5 0 0 0 10 0v-4.449h4.449a5 5 0 0 0 0-10zm-37.607-71.273v408.577c0 13.128-10.681 23.809-23.809 23.809H93.942c-13.128 0-23.809-10.681-23.809-23.809V67.614c0-13.128 10.681-23.809 23.809-23.809h312.116c13.129 0 23.809 10.681 23.809 23.809zM80.133 425.49c0 7.614 6.195 13.809 13.809 13.809h312.116c7.614 0 13.809-6.195 13.809-13.809V117.148H80.133zm0-357.876v39.534h339.734V67.614c0-7.614-6.195-13.809-13.809-13.809H93.942c-7.614 0-13.809 6.195-13.809 13.809zm339.734 408.577v-1.398H148.068a5 5 0 0 1 0-10h271.799v-19.917c-.051.037-.107.068-.158.104a23.79 23.79 0 0 1-1.334.879l-.047.027a30.666 30.666 0 0 1-1.679.92c-.474.236-.955.46-1.446.665-.072.03-.146.057-.218.086-.449.182-.904.35-1.366.505-.098.033-.195.068-.293.099-.509.164-1.025.31-1.548.439-.106.026-.213.049-.319.074-.482.112-.969.211-1.461.293-.073.012-.145.028-.219.039-.54.085-1.086.148-1.637.196-.126.011-.253.02-.379.029-.564.04-1.13.068-1.704.068H93.942c-.574 0-1.141-.028-1.704-.068a23.261 23.261 0 0 1-2.016-.225l-.219-.039a23.591 23.591 0 0 1-1.461-.293c-.106-.025-.213-.048-.319-.074a23.632 23.632 0 0 1-1.548-.439c-.099-.032-.195-.067-.293-.099a23.704 23.704 0 0 1-1.366-.505c-.072-.029-.146-.056-.218-.086a23.949 23.949 0 0 1-1.446-.665c-.105-.052-.209-.107-.313-.161-.464-.24-.921-.49-1.366-.759l-.047-.027a24.161 24.161 0 0 1-1.334-.879c-.052-.036-.107-.068-.158-.104v19.917h23.325a5 5 0 0 1 0 10H80.133v1.398c0 7.614 6.195 13.809 13.809 13.809h312.116c7.614 0 13.809-6.195 13.809-13.809zM115.559 336.763V159.326c0-6.031 4.906-10.937 10.937-10.937h98.517c6.031 0 10.937 4.906 10.937 10.937v52.84h111.741a5 5 0 0 1 0 10H235.95v15.888h111.741a5 5 0 0 1 0 10H235.95v88.708c0 6.031-4.906 10.937-10.937 10.937h-98.517c-6.031.001-10.937-4.906-10.937-10.936zm10 0c0 .517.42.937.937.937h98.517c.517 0 .937-.42.937-.937v-88.708h-17.306a5 5 0 0 1 0-10h17.306v-15.888h-17.306a5 5 0 0 1 0-10h17.306v-52.84a.938.938 0 0 0-.937-.937h-98.517a.938.938 0 0 0-.937.937zm135.56-151.422v-26.015c0-6.031 4.906-10.937 10.937-10.937h98.517c6.031 0 10.937 4.906 10.937 10.937v26.015c0 6.031-4.906 10.937-10.937 10.937h-98.517c-6.031 0-10.937-4.906-10.937-10.937zm10 0c0 .517.42.937.937.937h98.517c.517 0 .937-.42.937-.937v-26.015a.938.938 0 0 0-.937-.937h-98.517a.938.938 0 0 0-.937.937zM381.51 274.88v61.883c0 6.031-4.906 10.937-10.937 10.937h-98.517c-6.031 0-10.937-4.906-10.937-10.937V274.88c0-6.031 4.906-10.937 10.937-10.937h98.517c6.031 0 10.937 4.906 10.937 10.937zm-10 0a.938.938 0 0 0-.937-.937h-98.517a.938.938 0 0 0-.937.937v61.883c0 .517.42.937.937.937h98.517c.517 0 .937-.42.937-.937zm5-62.713h-8.304a5 5 0 0 0 0 10h8.304a5 5 0 0 0 0-10zm0 25.888h-8.304a5 5 0 0 0 0 10h8.304a5 5 0 0 0 0-10zm-255.951 137.65H376.51a5 5 0 0 0 0-10H120.559a5 5 0 0 0 0 10zm0 28.004H376.51a5 5 0 0 0 0-10H120.559a5 5 0 0 0 0 10zM96.665 80.477c0-8.909 7.248-16.157 16.157-16.157s16.157 7.248 16.157 16.157-7.248 16.156-16.157 16.156-16.157-7.247-16.157-16.156zm10 0c0 3.395 2.762 6.156 6.157 6.156s6.157-2.762 6.157-6.156c0-3.395-2.762-6.157-6.157-6.157s-6.157 2.762-6.157 6.157zm34.113 0c0-8.909 7.248-16.157 16.156-16.157s16.157 7.248 16.157 16.157-7.248 16.156-16.157 16.156-16.156-7.247-16.156-16.156zm10 0a6.163 6.163 0 0 0 6.156 6.156 6.164 6.164 0 0 0 6.157-6.156 6.164 6.164 0 0 0-6.157-6.157 6.164 6.164 0 0 0-6.156 6.157zm34.113 0c0-8.909 7.248-16.157 16.157-16.157s16.156 7.248 16.156 16.157-7.248 16.156-16.156 16.156-16.157-7.247-16.157-16.156zm10 0c0 3.395 2.762 6.156 6.157 6.156s6.156-2.762 6.156-6.156a6.164 6.164 0 0 0-6.156-6.157 6.164 6.164 0 0 0-6.157 6.157zm65.122 5h129.034a5 5 0 0 0 0-10H260.013a5 5 0 0 0 0 10zm-20.759 0h5.129a5 5 0 0 0 0-10h-5.129a5 5 0 0 0 0 10zM127.497 464.792h-5.547a5 5 0 0 0 0 10h5.547a5 5 0 0 0 0-10z"
                                            opacity="1" data-original="#1c1d21" class=""></path>
                                    </g>
                                </svg>
                            </span>
                            <!--end::Svg Icon-->
                        </span>
                        <span class="menu-title">Template</span>
                        <span class="menu-arrow"></span>
                    </span>
                    <div
                        class="menu-sub menu-sub-accordion {{ Route::is('admin.qr.template', 'admin.nfc.template') ? 'menu-active-bg' : '' }}">
                        <div class="menu-item">
                            <a class="menu-link {{ Route::is('admin.qr.template') ? 'active' : '' }}"
                                href="{{ route('admin.qr.template') }}">
                                <span class="menu-bullet">
                                    <span class="bullet bullet-dot"></span>
                                </span>
                                <span class="menu-title">QR Templates</span>
                            </a>
                        </div>
                        <div class="menu-item">
                            <a class="menu-link {{ Route::is('admin.nfc.template') ? 'active' : '' }}"
                                href="{{ route('admin.nfc.template') }}">
                                <span class="menu-bullet">
                                    <span class="bullet bullet-dot"></span>
                                </span>
                                <span class="menu-title">NFC Card Templates</span>
                            </a>
                        </div>
                    </div>
                </div>
                <div data-kt-menu-trigger="click"
                    class="menu-item {{ Route::is('admin.user.subscriptions', 'admin.plans.index', 'admin.plans.create') ? 'here show' : '' }} menu-accordion">
                    <span class="menu-link">
                        <span class="menu-icon">
                            <span class="svg-icon svg-icon-2">
                                <svg xmlns="http://www.w3.org/2000/svg" version="1.1"
                                    xmlns:xlink="http://www.w3.org/1999/xlink" width="512" height="512" x="0"
                                    y="0" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512"
                                    xml:space="preserve" class="">
                                    <g>
                                        <path
                                            d="M27.703 437.829h86.874V74.171H27.703C16.545 74.171 7.5 83.216 7.5 94.374v323.252c0 11.158 9.045 20.203 20.203 20.203z"
                                            style="" fill="#c8effe" data-original="#c8effe" class="">
                                        </path>
                                        <path d="M84.272 74.171h30.305V437.83H84.272z" style="" fill="#99e6fc"
                                            data-original="#99e6fc"></path>
                                        <path
                                            d="M114.577 387.321v-30.305H62.049a8.081 8.081 0 0 0-8.081 8.081v14.142a8.081 8.081 0 0 0 8.081 8.081h52.528z"
                                            style="" fill="#8bc727" data-original="#8bc727"></path>
                                        <path
                                            d="M114.577 205.492v-30.305H55.988a8.081 8.081 0 0 0-8.081 8.081v14.142a8.081 8.081 0 0 0 8.081 8.081h58.589z"
                                            style="" fill="#3c87d0" data-original="#3c87d0"></path>
                                        <path
                                            d="M377.22 478.236H134.781c-11.158 0-20.203-9.045-20.203-20.203V53.967c0-11.158 9.045-20.203 20.203-20.203H377.22c11.158 0 20.203 9.045 20.203 20.203v404.065c0 11.158-9.046 20.204-20.203 20.204z"
                                            style="" fill="#dff6fd" data-original="#dff6fd" class="">
                                        </path>
                                        <path
                                            d="M484.297 437.829h-86.874V74.171h86.874c11.158 0 20.203 9.045 20.203 20.203v323.252c0 11.158-9.045 20.203-20.203 20.203z"
                                            style="" fill="#c8effe" data-original="#c8effe" class="">
                                        </path>
                                        <path d="M397.423 74.171h30.305V437.83h-30.305z" style="" fill="#99e6fc"
                                            data-original="#99e6fc"></path>
                                        <path
                                            d="M195.39 429.748v-14.142a8.081 8.081 0 0 1 8.081-8.081h105.057a8.081 8.081 0 0 1 8.081 8.081v14.142a8.081 8.081 0 0 1-8.081 8.081H203.472a8.081 8.081 0 0 1-8.082-8.081z"
                                            style="" fill="#a2e62e" data-original="#a2e62e"></path>
                                        <path
                                            d="M397.423 387.321v-30.305h52.528a8.081 8.081 0 0 1 8.081 8.081v14.142a8.081 8.081 0 0 1-8.081 8.081h-52.528z"
                                            style="" fill="#8bc727" data-original="#8bc727"></path>
                                        <path
                                            d="M308.528 407.524h-30.305a8.081 8.081 0 0 1 8.081 8.081v14.142a8.081 8.081 0 0 1-8.081 8.081h30.305a8.081 8.081 0 0 0 8.081-8.081v-14.142a8.08 8.08 0 0 0-8.081-8.081z"
                                            style="" fill="#97d729" data-original="#97d729"></path>
                                        <path
                                            d="M377.22 33.764h-32.325c11.158 0 20.203 9.045 20.203 20.203v404.065c0 11.158-9.045 20.203-20.203 20.203h32.325c11.158 0 20.203-9.045 20.203-20.203V53.967c0-11.157-9.046-20.203-20.203-20.203z"
                                            style="" fill="#c8effe" data-original="#c8effe" class="">
                                        </path>
                                        <path
                                            d="M273.509 98.415 256 74.171l-17.509 24.244-32.999-14.143 10.102 60.61h80.812l10.102-60.61z"
                                            style="" fill="#ffd15b" data-original="#ffd15b"></path>
                                        <path
                                            d="M144.882 197.411v-14.142a8.081 8.081 0 0 1 8.081-8.081h206.073a8.081 8.081 0 0 1 8.081 8.081v14.142a8.081 8.081 0 0 1-8.081 8.081H152.963a8.081 8.081 0 0 1-8.081-8.081z"
                                            style="" fill="#5f99d7" data-original="#5f99d7"></path>
                                        <path
                                            d="M397.423 205.492v-30.305h58.589a8.081 8.081 0 0 1 8.081 8.081v14.142a8.081 8.081 0 0 1-8.081 8.081h-58.589zM359.037 175.187h-30.305a8.081 8.081 0 0 1 8.081 8.081v14.142a8.081 8.081 0 0 1-8.081 8.081h30.305a8.081 8.081 0 0 0 8.081-8.081v-14.142a8.081 8.081 0 0 0-8.081-8.081z"
                                            style="" fill="#3c87d0" data-original="#3c87d0"></path>
                                        <path
                                            d="M114.577 357.016H62.049a8.081 8.081 0 0 0-8.081 8.081v14.142a8.081 8.081 0 0 0 8.081 8.081h52.528M114.577 175.187H55.988a8.081 8.081 0 0 0-8.081 8.081v14.142a8.081 8.081 0 0 0 8.081 8.081h58.589M114.577 235.797H37.805M114.577 276.203H37.805M114.577 316.61H37.805"
                                            style="stroke-width:15;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;"
                                            fill="none" stroke="#000000" stroke-width="15" stroke-linecap="round"
                                            stroke-linejoin="round" stroke-miterlimit="10" data-original="#000000"
                                            class=""></path>
                                        <path
                                            d="M7.5 183.56v234.07c0 11.15 9.05 20.2 20.2 20.2h86.88M7.5 148.56V94.37c0-11.15 9.05-20.2 20.2-20.2h86.88M397.423 357.016h52.528a8.081 8.081 0 0 1 8.081 8.081v14.142a8.081 8.081 0 0 1-8.081 8.081h-52.528M273.509 98.415 256 74.171l-17.509 24.244-32.999-14.143 10.102 60.61h80.812l10.102-60.61zM205.492 144.882h101.016M256 119.176h0M397.423 175.187h58.589a8.081 8.081 0 0 1 8.081 8.081v14.142a8.081 8.081 0 0 1-8.081 8.081h-58.589M144.882 197.411v-14.142a8.081 8.081 0 0 1 8.081-8.081h206.073a8.081 8.081 0 0 1 8.081 8.081v14.142a8.081 8.081 0 0 1-8.081 8.081H152.963a8.081 8.081 0 0 1-8.081-8.081zM346.915 245.898h-121.22M195.39 245.898h-30.305M346.915 286.305h-121.22M195.39 286.305h-30.305M346.915 326.711h-121.22M195.39 326.711h-30.305M346.915 367.118h-121.22M474.195 235.797h-76.772M474.195 276.203h-76.772M474.195 316.61h-76.772M195.39 367.118h-30.305M195.39 429.748v-14.142a8.081 8.081 0 0 1 8.081-8.081h105.057a8.081 8.081 0 0 1 8.081 8.081v14.142a8.081 8.081 0 0 1-8.081 8.081H203.472a8.081 8.081 0 0 1-8.082-8.081z"
                                            style="stroke-width:15;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;"
                                            fill="none" stroke="#000000" stroke-width="15" stroke-linecap="round"
                                            stroke-linejoin="round" stroke-miterlimit="10" data-original="#000000"
                                            class=""></path>
                                        <path
                                            d="M200.93 33.76h176.29c11.16 0 20.2 9.05 20.2 20.21v404.06c0 11.16-9.04 20.21-20.2 20.21H134.78c-11.16 0-20.2-9.05-20.2-20.21V53.97c0-11.16 9.04-20.21 20.2-20.21h31.15M504.5 369.71v47.92c0 11.15-9.05 20.2-20.2 20.2h-86.88M397.42 74.17h86.88c11.15 0 20.2 9.05 20.2 20.2v240.34"
                                            style="stroke-width:15;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;"
                                            fill="none" stroke="#000000" stroke-width="15" stroke-linecap="round"
                                            stroke-linejoin="round" stroke-miterlimit="10" data-original="#000000"
                                            class=""></path>
                                    </g>
                                </svg>
                            </span>
                        </span>
                        <span class="menu-title">Subscription</span>
                        <span class="menu-arrow"></span>
                    </span>
                    <div
                        class="menu-sub menu-sub-accordion {{ Route::is('admin.user.subscriptions', 'admin.plans.index', 'admin.plans.create') ? 'menu-active-bg' : '' }}">
                        <div class="menu-item">
                            <a class="menu-link {{ Route::is('admin.user.subscriptions') ? 'active' : '' }}"
                                href="{{ route('admin.user.subscriptions') }}">
                                <span class="menu-bullet">
                                    <span class="bullet bullet-dot"></span>
                                </span>
                                <span class="menu-title">All User Subscriptions</span>
                            </a>
                        </div>
                        <div class="menu-item">
                            <a class="menu-link {{ Route::is('admin.plans.index') ? 'active' : '' }}"
                                href="{{ route('admin.plans.index') }}">
                                <span class="menu-bullet">
                                    <span class="bullet bullet-dot"></span>
                                </span>
                                <span class="menu-title">Subscription Plans List</span>
                            </a>
                        </div>

                    </div>
                </div>
                <div data-kt-menu-trigger="click"
                    class="menu-item menu-accordion  {{ Route::is('admin.contact.index', 'admin.newsletter.index') ? 'here show' : '' }}">
                    <span class="menu-link">
                        <span class="menu-icon">
                            <!--begin::Svg Icon | path: icons/duotune/ecommerce/ecm002.svg-->
                            <span class="svg-icon svg-icon-2">
                                <svg xmlns="http://www.w3.org/2000/svg" version="1.1"
                                    xmlns:xlink="http://www.w3.org/1999/xlink" width="512" height="512" x="0"
                                    y="0" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512"
                                    xml:space="preserve" class="">
                                    <g>
                                        <g fill-rule="evenodd" clip-rule="evenodd">
                                            <path fill="#8a4634"
                                                d="M289.311 177.665v64.641c0 77.319-59.104 125.464-131.351 125.464-72.248 0-131.352-48.175-131.352-125.464v-64.641c0-184.743 262.703-184.743 262.703 0z"
                                                opacity="1" data-original="#8a4634" class=""></path>
                                            <path fill="#70392a"
                                                d="M165.916 367.566c-2.623.117-5.275.204-7.956.204-72.248 0-131.352-48.175-131.352-125.464v-64.641c0-96.117 71.111-142.193 139.308-138.288C103.024 42.962 42.55 89.038 42.55 177.665v64.641c0 74.434 54.82 121.851 123.366 125.26z"
                                                opacity="1" data-original="#70392a" class=""></path>
                                            <path fill="#ed524e"
                                                d="M314.346 472.892c-5.275-73.53-54.674-131.643-114.331-131.643h-85.683C54.674 341.25 5.246 399.362 0 472.892z"
                                                opacity="1" data-original="#ed524e" class=""></path>
                                            <path fill="#c0433f"
                                                d="M137.967 341.25h-23.635C54.674 341.25 5.246 399.362 0 472.892h23.636c5.275-73.53 54.674-131.642 114.331-131.642z"
                                                opacity="1" data-original="#c0433f"></path>
                                            <path fill="#fc918d"
                                                d="M118.936 341.25h-4.605c-19.119 0-37.159 5.945-53.042 16.466l57.646 36.576 38.237-26.521zM253.056 357.716c-15.883-10.521-33.953-16.466-53.042-16.466h-4.605l-38.237 26.521 38.237 26.521z"
                                                opacity="1" data-original="#fc918d" class=""></path>
                                            <path fill="#ffd3bc"
                                                d="M195.41 288.179v53.071l-38.237 26.521-38.237-26.521v-53.071z"
                                                opacity="1" data-original="#ffd3bc" class=""></path>
                                            <path fill="#f7c3a8"
                                                d="M195.41 288.179v32.437c-26.958 13.202-49.486 12.882-76.474-.787v-31.65z"
                                                opacity="1" data-original="#f7c3a8" class=""></path>
                                            <path fill="#0cb4fb"
                                                d="M245.158 176.033h31.184c13.202 0 23.985 10.783 23.985 23.985v13.494c0 13.173-10.783 23.956-23.985 23.956h-31.184z"
                                                opacity="1" data-original="#0cb4fb"></path>
                                            <path fill="#0a92cb"
                                                d="M245.158 176.033h21.1v39.169c0 7.636-.758 15.097-2.273 22.266h-18.827z"
                                                opacity="1" data-original="#0a92cb"></path>
                                            <path fill="#0cb4fb"
                                                d="M68.43 176.033H39.578c-13.202 0-23.985 10.783-23.985 23.985v13.494c0 13.173 10.783 23.956 23.985 23.956H68.43zM338.302 191.246h24.685v47.971l40.51-47.971h96.32c6.703 0 12.182-5.479 12.182-12.182V60.39c0-6.703-5.479-12.182-12.182-12.182H338.332c-6.732 0-12.211 5.479-12.211 12.182v118.674c-.001 6.703 5.478 12.182 12.181 12.182z"
                                                opacity="1" data-original="#0cb4fb"></path>
                                        </g>
                                        <path fill="#e9e9ff"
                                            d="M356.546 144.528h125.027v14.398H356.546zm0-17.602h125.027v-14.398H356.546zm0-46.398v14.398h125.027V80.528z"
                                            opacity="1" data-original="#e9e9ff"></path>
                                        <path fill="#ffd3bc" fill-rule="evenodd"
                                            d="M157.96 109.031c13.348 32.612 45.289 56.802 78.339 56.802 5.654 0 11.016-.729 16.058-2.069v51.439c0 28.415-11.949 52.867-33.807 69.217-50.157 37.479-72.976 36.022-121.18 0-21.887-16.35-33.807-40.801-33.807-69.217v-51.439c5.013 1.341 10.404 2.069 16.058 2.069 33.02 0 64.991-24.19 78.339-56.802z"
                                            clip-rule="evenodd" opacity="1" data-original="#ffd3bc"
                                            class=""></path>
                                        <path fill="#70392a"
                                            d="m179.021 232.842 11.106 9.162-4.58 5.552c-7.83 9.492-17.369 14.509-27.586 14.509-10.218 0-19.757-5.017-27.586-14.509l-4.58-5.553 11.107-9.161 4.58 5.553c3.489 4.23 9.18 9.272 16.479 9.272 7.298 0 12.99-5.042 16.479-9.272zm-62.037-56.926c-11.892 0-21.567 9.662-21.567 21.538h14.398c0-3.937 3.216-7.14 7.169-7.14 3.937 0 7.14 3.203 7.14 7.14h14.398c-.001-11.876-9.663-21.538-21.538-21.538zm81.952 0c-11.892 0-21.567 9.662-21.567 21.538h14.398c0-3.937 3.216-7.14 7.169-7.14 3.954 0 7.17 3.203 7.17 7.14h14.398c0-11.876-9.676-21.538-21.568-21.538z"
                                            opacity="1" data-original="#70392a" class=""></path>
                                        <path fill="#cfcfff"
                                            d="M161.02 279.26H59.949c-5.275 0-10.026-2.127-13.494-5.596-3.439-3.439-5.595-8.219-5.595-13.464v-22.732h14.397V260.2a4.65 4.65 0 0 0 1.37 3.293c.874.845 2.04 1.37 3.322 1.37H161.02z"
                                            opacity="1" data-original="#cfcfff"></path>
                                        <path fill="#0cb4fb" d="M131.497 264.863h29.523v14.397h-29.523z"
                                            opacity="1" data-original="#0cb4fb"></path>
                                        <path fill="#445ea0" fill-rule="evenodd"
                                            d="M221.989 422.036H435.73V279.552c0-7.315-5.975-13.29-13.26-13.29H235.25c-7.315 0-13.261 5.974-13.261 13.29z"
                                            clip-rule="evenodd" opacity="1" data-original="#445ea0"></path>
                                        <path fill="#0cb4fb"
                                            d="M371.002 337.199v-14.398h-12.135a30.71 30.71 0 0 0-3.703-8.925l8.57-8.57-10.181-10.181-8.57 8.57a30.71 30.71 0 0 0-8.925-3.703v-12.135H321.66v12.135a30.695 30.695 0 0 0-8.932 3.707l-8.599-8.58-10.169 10.191 8.591 8.571a30.694 30.694 0 0 0-3.699 8.919h-12.135v14.398h12.135a30.694 30.694 0 0 0 3.699 8.919l-8.591 8.571 10.169 10.191 8.599-8.58a30.695 30.695 0 0 0 8.932 3.707v12.135h14.398v-12.135a30.71 30.71 0 0 0 8.925-3.703l8.57 8.57 10.181-10.181-8.57-8.57a30.71 30.71 0 0 0 3.703-8.925h12.135zM312.394 330c0-9.079 7.387-16.466 16.466-16.466s16.466 7.387 16.466 16.466-7.387 16.466-16.466 16.466c-9.08 0-16.466-7.387-16.466-16.466z"
                                            opacity="1" data-original="#0cb4fb"></path>
                                        <path fill="#0a92cb" fill-rule="evenodd"
                                            d="M27.687 200.018c0-13.202 10.783-23.985 23.956-23.985H39.578c-4.78 0-9.21 1.399-12.969 3.818-6.616 4.284-11.016 11.745-11.016 20.168v13.494c0 8.423 4.401 15.854 11.016 20.138a23.838 23.838 0 0 0 12.969 3.818h12.065c-13.173 0-23.956-10.783-23.956-23.956zM338.71 171.37V52.696c0-1.603.321-3.118.874-4.488h-1.253c-6.732 0-12.211 5.479-12.211 12.182v118.674c0 6.703 5.479 12.182 12.182 12.182h24.685v47.971l12.619-14.922v-40.743h-24.685c-6.702 0-12.211-5.479-12.211-12.182z"
                                            clip-rule="evenodd" opacity="1" data-original="#0a92cb"></path>
                                        <path fill="#2e4c89" fill-rule="evenodd"
                                            d="M221.989 422.036H435.73v-10.812H234.812V268.74c0-.845.088-1.661.262-2.477-7.228.117-13.086 6.033-13.086 13.29v142.483z"
                                            clip-rule="evenodd" opacity="1" data-original="#2e4c89"></path>
                                        <path fill="#2e4c89" fill-rule="evenodd"
                                            d="m346.375 394.262 20.517 58.317h-76.065l20.517-58.317z"
                                            clip-rule="evenodd" opacity="1" data-original="#2e4c89"></path>
                                        <path fill="#253d6f" fill-rule="evenodd"
                                            d="M302.368 452.579h-11.541l20.517-58.317h11.57z" clip-rule="evenodd"
                                            opacity="1" data-original="#253d6f"></path>
                                        <path fill="#293d7c" fill-rule="evenodd"
                                            d="M184.947 472.892H435.73v-26.9H198.412c-7.402 0-13.464 6.033-13.464 13.435v13.465z"
                                            clip-rule="evenodd" opacity="1" data-original="#293d7c"></path>
                                        <path fill="#1a2b63" fill-rule="evenodd"
                                            d="M184.947 472.892h16.699v-13.464c0-7.402 6.062-13.435 13.465-13.435h-16.7c-7.402 0-13.464 6.033-13.464 13.435z"
                                            clip-rule="evenodd" opacity="1" data-original="#1a2b63"></path>
                                    </g>
                                </svg>
                            </span>
                            <!--end::Svg Icon-->
                        </span>
                        <span class="menu-title">Customer Support</span>
                        <span class="menu-arrow"></span>
                    </span>
                    <div
                        class="menu-sub menu-sub-accordion {{ Route::is('admin.contact.index', 'admin.faq.index', 'admin.newsletter.index') ? 'menu-active-bg' : '' }}">
                        <div class="menu-item">
                            <a class="menu-link {{ Route::is('admin.contact.index') ? 'active' : '' }}"
                                href="{{ route('admin.contact.index') }}">
                                <span class="menu-bullet">
                                    <span class="bullet bullet-dot"></span>
                                </span>
                                <span class="menu-title">Contact Messages</span>
                            </a>
                        </div>
                        <div class="menu-item">
                            <a class="menu-link {{ Route::is('admin.faq.index') ? 'active' : '' }}"
                                href="{{ route('admin.faq.index') }}">
                                <span class="menu-bullet">
                                    <span class="bullet bullet-dot"></span>
                                </span>
                                <span class="menu-title">FAQ Lists</span>
                            </a>
                        </div>
                        <div class="menu-item">
                            <a class="menu-link {{ Route::is('admin.newsletter.index') ? 'active' : '' }}"
                                href="{{ route('admin.newsletter.index') }}">
                                <span class="menu-bullet">
                                    <span class="bullet bullet-dot"></span>
                                </span>
                                <span class="menu-title">Subscribed Emails List</span>
                            </a>
                        </div>
                    </div>
                </div>
                <div data-kt-menu-trigger="click" class="menu-item menu-accordion mb-1">
                    <span class="menu-link">
                        <span class="menu-icon">
                            <!--begin::Svg Icon | path: icons/duotune/general/gen051.svg-->
                            <span class="svg-icon svg-icon-2">
                                <svg xmlns="http://www.w3.org/2000/svg" version="1.1"
                                    xmlns:xlink="http://www.w3.org/1999/xlink" width="512" height="512" x="0"
                                    y="0" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512"
                                    xml:space="preserve" class="">
                                    <g>
                                        <path
                                            d="M426.892 312.972h-.187c7.281-8.086 12.459-18.559 15.413-29.834l28.192-5.99a8 8 0 0 0 6.338-7.825v-71.35a8 8 0 0 0-6.334-7.825l-40.079-8.535-14.241-34.378 22.314-34.37a8 8 0 0 0-1.053-10.013L386.8 52.393a8 8 0 0 0-10.013-1.053l-34.37 22.314-34.382-14.241-8.535-40.08A8 8 0 0 0 291.674 13h-71.349a8 8 0 0 0-7.825 6.338l-8.509 40.075-34.4 14.242-34.375-22.315a8 8 0 0 0-10.016 1.053l-50.455 50.459a8 8 0 0 0-1.051 10.016l22.34 34.371-14.241 34.4-40.1 8.509a8 8 0 0 0-6.34 7.826v71.35a8 8 0 0 0 6.338 7.825l28.193 5.99c2.954 11.275 8.132 21.748 15.413 29.834h-.188c-31.327 0-56.814 23.923-56.814 53.327v61.883a8 8 0 0 0 8 8h88.892V491a8 8 0 0 0 8 8h245.63a8 8 0 0 0 8-8v-54.818h88.892a8 8 0 0 0 8-8V366.3c-.002-29.4-25.49-53.328-56.817-53.328zm-35.378 0c-27.338 0-37.525-32.2-37.525-52.493a37.526 37.526 0 1 1 75.052 0c0 20.295-10.189 52.493-37.527 52.493zm-128.669 26.063a2.074 2.074 0 0 1 1.8.807 18.046 18.046 0 0 1 .239 7.436 8.356 8.356 0 0 1-3.277 3.669 8 8 0 0 0-3.929 8.059l14.752 103.788-16.416 16.772-16.439-16.774 14.752-103.786a8 8 0 0 0-3.928-8.058 8.509 8.509 0 0 1-3.263-3.639 18.079 18.079 0 0 1 .238-7.447 2.061 2.061 0 0 1 1.811-.827zm-58.2-102.968c-7.077-23.257.171-39.927 7.5-49.817 10.48-14.145 28.11-23.649 43.867-23.649 13.9 0 29.761 7.63 40.4 19.439a8.01 8.01 0 0 0 2.832 2.014c7.171 3.027 9.966 5.585 11.5 10.529 2.455 7.905 1.308 21.634-3.5 41.971a8 8 0 0 0 12.175 8.529 1.49 1.49 0 0 1 .23 0c1.084 2.046 1.226 9.6-2.348 18.109-2.867 6.827-6.727 10.686-9.115 11.029a8 8 0 0 0-6.894 5.429c-8.828 26.354-26.6 43.383-45.282 43.383-18.7 0-36.483-17.029-45.31-43.383a8 8 0 0 0-6.766-5.417c-2.4-.247-6.345-4.136-9.258-11.091-3.558-8.5-3.4-16.033-2.316-18.059a1.5 1.5 0 0 1 .242 0 8 8 0 0 0 12.042-9.017zm110.364 52.773c12.61-5.062 19.865-22.64 21.1-35.137 1.21-12.195-2.919-21.038-11.064-23.737 7.678-39.174-.439-52.031-17.95-59.943-13.7-14.485-33.113-23.422-51.086-23.422-20.9 0-43.164 11.824-56.723 30.124-11.366 15.34-15.651 33.944-12.462 53.29-8.053 2.752-12.135 11.565-10.935 23.692 1.236 12.486 8.484 30.047 21.093 35.123 5.3 14.083 12.781 25.7 21.7 34.205h-14.3c-2.2 0-4.374.107-6.53.272a108.212 108.212 0 0 1-30.352-29.769 89.609 89.609 0 0 0 6.538-33.059 53.539 53.539 0 0 0-23.477-44.285 106.877 106.877 0 0 1 210.877.009 53.547 53.547 0 0 0-23.451 44.276 89.689 89.689 0 0 0 6.521 33.04 108.148 108.148 0 0 1-30.347 29.79 85.093 85.093 0 0 0-6.557-.274h-14.29c8.919-8.504 16.4-20.116 21.695-34.195zm-156.068 20.106q1.747 2.244 3.594 4.41a60.159 60.159 0 0 0-6.672-.384h-.175a56.817 56.817 0 0 0 3.253-4.026zm194.124-.006a58.708 58.708 0 0 0 3.256 4.032h-.184a60.051 60.051 0 0 0-6.666.384q1.851-2.166 3.594-4.416zM66.959 260.479c0 1.9.07 3.813.192 5.722l-15.8-3.357v-58.391l37.883-8.037a8 8 0 0 0 5.731-4.766l17.462-42.181a8 8 0 0 0-.683-7.42l-21.1-32.466 41.3-41.3L164.4 89.366a8 8 0 0 0 7.416.681L214 72.585a8 8 0 0 0 4.766-5.73L226.8 29h58.4l8.063 37.86a8 8 0 0 0 4.763 5.724l42.152 17.463a8 8 0 0 0 7.418-.681l32.468-21.079 41.3 41.3-21.079 32.467a8 8 0 0 0-.681 7.418l17.462 42.153a8 8 0 0 0 5.725 4.763l37.86 8.062v58.4l-15.8 3.357c.122-1.909.192-3.819.192-5.722a53.5 53.5 0 0 0-68.643-51.372 122.878 122.878 0 0 0-240.8 0 53.5 53.5 0 0 0-68.645 51.367zm16 0a37.541 37.541 0 1 1 75.081 0c0 20.3-10.2 52.493-37.555 52.493-27.338 0-37.526-32.198-37.526-52.493zm-38.666 159.7V366.3c0-20.582 18.309-37.327 40.814-37.327h70.756a43.919 43.919 0 0 1 13.013 1.964c-25.884 12.209-43.691 37.3-43.691 66.234v23.012zm96.892-23.012c0-32.056 28.356-58.135 63.208-58.135h26.841c-.8 5.318-.292 11.3 1.308 14.84a25.16 25.16 0 0 0 5.29 7.467l-14.656 103.1a8 8 0 0 0 2.206 6.725L236.974 483h-39.321v-71.968a8 8 0 0 0-16 0V483h-40.468zM370.815 483h-40.44v-71.968a8 8 0 1 0-16 0V483h-39.336l11.581-11.832a8 8 0 0 0 2.2-6.722l-14.651-103.092a24.623 24.623 0 0 0 5.3-7.5c1.6-3.475 2.126-9.465 1.313-14.823h26.827c34.853 0 63.209 26.079 63.209 58.135zm96.892-62.818h-80.892V397.17c0-28.93-17.808-54.025-43.692-66.234a43.921 43.921 0 0 1 13.014-1.964h70.755c22.5 0 40.815 16.745 40.815 37.327z"
                                            fill="#000000" opacity="1" data-original="#000000" class="">
                                        </path>
                                        <path fill="#eae8e8"
                                            d="M307.606 339.035h-26.827c.813 5.358.289 11.348-1.313 14.823a24.623 24.623 0 0 1-5.3 7.5L288.82 464.45a8 8 0 0 1-2.2 6.722L275.039 483h39.336v-71.968a8 8 0 1 1 16 0V483h40.44v-85.83c0-32.056-28.356-58.135-63.209-58.135z"
                                            opacity="1" data-original="#eae8e8"></path>
                                        <path fill="#ffddab"
                                            d="M201.73 244.844a8 8 0 0 1-9.124.24 1.5 1.5 0 0 0-.242 0c-1.087 2.026-1.242 9.561 2.316 18.059 2.913 6.955 6.862 10.844 9.258 11.091a8 8 0 0 1 6.766 5.417c8.827 26.354 26.612 43.383 45.31 43.383 18.68 0 36.454-17.029 45.282-43.383a8 8 0 0 1 6.894-5.429c2.388-.343 6.248-4.2 9.115-11.029 3.574-8.507 3.432-16.063 2.348-18.109a1.49 1.49 0 0 0-.23 0 8 8 0 0 1-12.175-8.529c4.811-20.337 5.958-34.066 3.5-41.971-1.534-4.944-4.329-7.5-11.5-10.529a8.01 8.01 0 0 1-2.832-2.014c-10.644-11.809-26.5-19.439-40.4-19.439-15.757 0-33.387 9.5-43.867 23.649-7.328 9.89-14.576 26.56-7.5 49.817a8 8 0 0 1-2.919 8.776z"
                                            opacity="1" data-original="#ffddab"></path>
                                        <path fill="#484868"
                                            d="M135.6 209.112a122.878 122.878 0 0 1 240.8 0 53.5 53.5 0 0 1 68.641 51.366c0 1.9-.07 3.813-.192 5.722l15.8-3.357v-58.4l-37.86-8.062a8 8 0 0 1-5.725-4.763L399.6 149.47a8 8 0 0 1 .681-7.418l21.079-32.467-41.3-41.3-32.46 21.081a8 8 0 0 1-7.418.681l-42.157-17.463a8 8 0 0 1-4.763-5.724L285.2 29h-58.4l-8.037 37.855a8 8 0 0 1-4.763 5.73l-42.18 17.462a8 8 0 0 1-7.416-.681l-32.468-21.079-41.295 41.3 21.1 32.466a8 8 0 0 1 .683 7.42L94.965 191.65a8 8 0 0 1-5.731 4.766l-37.883 8.037v58.391l15.8 3.357a89.779 89.779 0 0 1-.192-5.722 53.5 53.5 0 0 1 68.641-51.367z"
                                            opacity="1" data-original="#484868" class=""></path>
                                        <path fill="#ffddab"
                                            d="M391.514 222.925a37.582 37.582 0 0 0-37.525 37.554c0 20.3 10.187 52.493 37.525 52.493s37.527-32.2 37.527-52.493a37.582 37.582 0 0 0-37.527-37.554z"
                                            opacity="1" data-original="#ffddab"></path>
                                        <path fill="#ad1e1e"
                                            d="M261.6 350.947a8.356 8.356 0 0 0 3.277-3.669 18.046 18.046 0 0 0-.239-7.436 2.074 2.074 0 0 0-1.8-.807h-13.656a2.061 2.061 0 0 0-1.811.827 18.079 18.079 0 0 0-.238 7.447 8.509 8.509 0 0 0 3.263 3.639 8 8 0 0 1 3.928 8.058l-14.752 103.786 16.439 16.774 16.416-16.772-14.752-103.788a8 8 0 0 1 3.925-8.059z"
                                            opacity="1" data-original="#ad1e1e"></path>
                                        <path fill="#484868"
                                            d="M155.863 312.972a60.159 60.159 0 0 1 6.672.384q-1.85-2.161-3.594-4.41a58.256 58.256 0 0 1-3.253 4.026zM356.321 312.972a58.467 58.467 0 0 1-3.256-4.032q-1.748 2.247-3.594 4.416a60.051 60.051 0 0 1 6.666-.384z"
                                            opacity="1" data-original="#484868" class=""></path>
                                        <path fill="#ffddab"
                                            d="M120.485 312.972c27.359 0 37.555-32.2 37.555-52.493a37.541 37.541 0 1 0-75.081 0c0 20.295 10.188 52.493 37.526 52.493z"
                                            opacity="1" data-original="#ffddab"></path>
                                        <path fill="#7da8ff"
                                            d="M426.892 328.972h-70.755a43.953 43.953 0 0 0-13.014 1.964c25.884 12.209 43.692 37.3 43.692 66.234v23.012h80.892V366.3c0-20.583-18.307-37.328-40.815-37.328z"
                                            opacity="1" data-original="#7da8ff" class=""></path>
                                        <path fill="#eae8e8"
                                            d="M237.832 361.342a25.16 25.16 0 0 1-5.29-7.467c-1.6-3.537-2.11-9.522-1.308-14.84h-26.841c-34.852 0-63.208 26.079-63.208 58.135V483h40.468v-71.968a8 8 0 0 1 16 0V483h39.321l-11.592-11.829a8 8 0 0 1-2.206-6.725z"
                                            opacity="1" data-original="#eae8e8"></path>
                                        <path fill="#7da8ff"
                                            d="M168.876 330.936a43.952 43.952 0 0 0-13.013-1.964H85.107c-22.505 0-40.814 16.745-40.814 37.327v53.883h80.892V397.17c0-28.93 17.807-54.025 43.691-66.234z"
                                            opacity="1" data-original="#7da8ff" class=""></path>
                                        <path fill="#7c6359"
                                            d="M292.032 202.977c3.4 14.808 9.082 23.472 15.953 30.371 4.182-18.577 5.089-31.284 2.766-38.765-1.534-4.944-4.329-7.5-11.5-10.529a8.01 8.01 0 0 1-2.832-2.014c-10.644-11.809-26.5-19.439-40.4-19.439-15.757 0-33.387 9.5-43.867 23.649-6.851 9.245-13.628 24.418-8.7 45.357 24.538-22.472 69.411-8.414 88.58-28.63z"
                                            opacity="1" data-original="#7c6359"></path>
                                    </g>
                                </svg>
                            </span>
                            <!--end::Svg Icon-->
                        </span>
                        <span class="menu-title">User Management</span>
                        <span class="menu-arrow"></span>
                    </span>
                    <div
                        class="menu-sub menu-sub-accordion {{ Route::is('admin.user-management.index', 'admin.user-notification.index') ? 'here show' : '' }}">
                        <div data-kt-menu-trigger="click" class="menu-item menu-accordion mb-1">
                            <span class="menu-link">
                                <span class="menu-bullet">
                                    <span class="bullet bullet-dot"></span>
                                </span>
                                <span class="menu-title">Users</span>
                                <span class="menu-arrow"></span>
                            </span>
                            <div
                                class="menu-sub menu-sub-accordion {{ Route::is('admin.user-management.index', 'admin.user-notification.index') ? 'here show' : '' }}">
                                <div class="menu-item">
                                    <a class="menu-link {{ Route::is('admin.user-management.index') ? 'active' : '' }}"
                                        href="{{ route('admin.user-management.index') }}">
                                        <span class="menu-bullet">
                                            <span class="bullet bullet-dot"></span>
                                        </span>
                                        <span class="menu-title">Users List</span>
                                    </a>
                                </div>
                                <div class="menu-item">
                                    <a class="menu-link {{ Route::is('admin.user-notification.index') ? 'active' : '' }}"
                                        href="{{ route('admin.user-notification.index') }}">
                                        <span class="menu-bullet">
                                            <span class="bullet bullet-dot"></span>
                                        </span>
                                        <span class="menu-title">Send Notification</span>
                                    </a>
                                </div>
                                {{-- <div class="menu-item">
                                    <a class="menu-link" href="{{ route('admin.user.create') }}">
                                        <span class="menu-bullet">
                                            <span class="bullet bullet-dot"></span>
                                        </span>
                                        <span class="menu-title">Add User</span>
                                    </a>
                                </div> --}}
                            </div>
                        </div>
                        {{-- <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                            <span class="menu-link">
                                <span class="menu-bullet">
                                    <span class="bullet bullet-dot"></span>
                                </span>
                                <span class="menu-title">Roles</span>
                                <span class="menu-arrow"></span>
                            </span>
                            <div class="menu-sub menu-sub-accordion">
                                <div class="menu-item">
                                    <a class="menu-link" href="{{ route('admin.role.index') }}">
                                        <span class="menu-bullet">
                                            <span class="bullet bullet-dot"></span>
                                        </span>
                                        <span class="menu-title">Roles List</span>
                                    </a>
                                </div>
                                <div class="menu-item">
                                    <a class="menu-link" href="{{ route('admin.role.create') }}">
                                        <span class="menu-bullet">
                                            <span class="bullet bullet-dot"></span>
                                        </span>
                                        <span class="menu-title">Add Role</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="menu-item">
                            <a class="menu-link" href="{{ route('admin.permission.index') }}">
                                <span class="menu-bullet">
                                    <span class="bullet bullet-dot"></span>
                                </span>
                                <span class="menu-title">Permissions</span>
                            </a>
                        </div> --}}
                    </div>
                </div>
                {{-- <div data-kt-menu-trigger="click" class="menu-item menu-accordion mb-1">
                    <span class="menu-link">
                        <span class="menu-icon">
                            <!--begin::Svg Icon | path: icons/duotune/general/gen051.svg-->
                            <span class="svg-icon svg-icon-2">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none">
                                    <path opacity="0.3"
                                        d="M20.5543 4.37824L12.1798 2.02473C12.0626 1.99176 11.9376 1.99176 11.8203 2.02473L3.44572 4.37824C3.18118 4.45258 3 4.6807 3 4.93945V13.569C3 14.6914 3.48509 15.8404 4.4417 16.984C5.17231 17.8575 6.18314 18.7345 7.446 19.5909C9.56752 21.0295 11.6566 21.912 11.7445 21.9488C11.8258 21.9829 11.9129 22 12.0001 22C12.0872 22 12.1744 21.983 12.2557 21.9488C12.3435 21.912 14.4326 21.0295 16.5541 19.5909C17.8169 18.7345 18.8277 17.8575 19.5584 16.984C20.515 15.8404 21 14.6914 21 13.569V4.93945C21 4.6807 20.8189 4.45258 20.5543 4.37824Z"
                                        fill="currentColor" />
                                    <path
                                        d="M14.854 11.321C14.7568 11.2282 14.6388 11.1818 14.4998 11.1818H14.3333V10.2272C14.3333 9.61741 14.1041 9.09378 13.6458 8.65628C13.1875 8.21876 12.639 8 12 8C11.361 8 10.8124 8.21876 10.3541 8.65626C9.89574 9.09378 9.66663 9.61739 9.66663 10.2272V11.1818H9.49999C9.36115 11.1818 9.24306 11.2282 9.14583 11.321C9.0486 11.4138 9 11.5265 9 11.6591V14.5227C9 14.6553 9.04862 14.768 9.14583 14.8609C9.24306 14.9536 9.36115 15 9.49999 15H14.5C14.6389 15 14.7569 14.9536 14.8542 14.8609C14.9513 14.768 15 14.6553 15 14.5227V11.6591C15.0001 11.5265 14.9513 11.4138 14.854 11.321ZM13.3333 11.1818H10.6666V10.2272C10.6666 9.87594 10.7969 9.57597 11.0573 9.32743C11.3177 9.07886 11.6319 8.9546 12 8.9546C12.3681 8.9546 12.6823 9.07884 12.9427 9.32743C13.2031 9.57595 13.3333 9.87594 13.3333 10.2272V11.1818Z"
                                        fill="currentColor" />
                                </svg>
                            </span>
                            <!--end::Svg Icon-->
                        </span>
                        <span class="menu-title">Seller Management</span>
                        <span class="menu-arrow"></span>
                    </span>
                    <div class="menu-sub menu-sub-accordion">
                        <div data-kt-menu-trigger="click" class="menu-item menu-accordion mb-1">
                            <span class="menu-link">
                                <span class="menu-bullet">
                                    <span class="bullet bullet-dot"></span>
                                </span>
                                <span class="menu-title">Seller</span>
                                <span class="menu-arrow"></span>
                            </span>
                            <div class="menu-sub menu-sub-accordion">
                                <div class="menu-item">
                                    <a class="menu-link" href="{{ route('admin.user.index') }}">
                                        <span class="menu-bullet">
                                            <span class="bullet bullet-dot"></span>
                                        </span>
                                        <span class="menu-title">Seller List</span>
                                    </a>
                                </div>
                                <div class="menu-item">
                                    <a class="menu-link" href="{{ route('admin.user.index') }}">
                                        <span class="menu-bullet">
                                            <span class="bullet bullet-dot"></span>
                                        </span>
                                        <span class="menu-title">Seller Statistic</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> --}}
                <div data-kt-menu-trigger="click"
                    class="menu-item menu-accordion  {{ Route::is('admin.setting.index', 'admin.css.index', 'admin.email-settings.index') ? 'here show' : '' }}">
                    <span class="menu-link">
                        <span class="menu-icon">
                            <!--begin::Svg Icon | path: icons/duotune/ecommerce/ecm002.svg-->
                            <span class="svg-icon svg-icon-2">
                                <svg xmlns="http://www.w3.org/2000/svg" version="1.1"
                                    xmlns:xlink="http://www.w3.org/1999/xlink" width="512" height="512" x="0"
                                    y="0" viewBox="0 0 512.001 512.001" style="enable-background:new 0 0 512 512"
                                    xml:space="preserve" class="">
                                    <g>
                                        <path
                                            d="m500.603 211.604-25.595-6.298c-5.401-24.297-14.998-47.395-28.198-68.392l12.9-21.596c3.596-5.999 2.699-13.498-2.102-18.298l-20.996-20.997-21.596-21.596c-4.8-4.8-12.299-5.699-18.301-2.1l-21.596 12.898c-20.996-13.198-44.094-22.797-68.392-28.196l-6.298-25.597C298.928 4.832 292.93.033 286.032.033h-59.993c-6.898 0-12.896 4.798-14.397 11.399l-6.298 25.597c-24.299 5.399-47.396 14.998-68.392 28.196l-21.598-12.898c-5.999-3.6-13.498-2.701-18.298 2.1L54.459 97.021c-4.8 4.798-5.699 12.297-2.1 18.298l12.898 21.596c-13.198 20.997-22.797 44.095-28.196 68.392l-25.597 6.298c-6.6 1.501-11.399 7.499-11.399 14.399v59.992c0 6.898 4.798 12.898 11.399 14.397l25.597 6.3c6.898 30.296 20.397 59.092 38.995 83.99l45.294 45.294c24.898 18.598 53.692 32.096 83.99 38.995l6.298 25.597c1.501 6.598 7.499 11.399 14.397 11.399h59.993c6.898 0 12.896-4.8 14.397-11.399l6.298-25.597c24.299-5.399 47.396-14.998 68.392-28.197l21.596 12.898c6.001 3.6 13.5 2.701 18.301-2.1l42.593-42.594c4.8-4.798 5.697-12.297 2.102-18.298l-12.9-21.598c13.2-20.997 22.797-44.093 28.198-68.39l25.595-6.3c6.602-1.5 11.399-7.499 11.399-14.397v-59.992c.002-6.901-4.794-12.899-11.396-14.4zm-244.57 179.379c-35.094 0-67.192-13.198-90.89-35.696-1.5-.901-2.699-2.1-4.198-3.6-24.597-24.297-39.896-58.193-39.896-95.688 0-74.691 60.292-134.983 134.983-134.983 37.495 0 71.391 15.298 95.686 39.894 1.501 1.501 2.703 2.701 3.604 4.199 22.497 23.698 35.694 55.793 35.694 90.89 0 74.691-60.292 134.984-134.983 134.984z"
                                            style="" fill="#b7e0f6" data-original="#b7e0f6" class="">
                                        </path>
                                        <path
                                            d="M512.001 226.003v59.992c0 6.898-4.796 12.898-11.399 14.397l-25.595 6.3c-5.401 24.297-14.998 47.393-28.198 68.39l12.9 21.598c3.596 5.999 2.699 13.498-2.102 18.298l-42.593 42.594c-4.8 4.8-12.299 5.699-18.301 2.1l-21.596-12.898c-20.996 13.198-44.094 22.797-68.392 28.197l-6.298 25.597c-1.501 6.598-7.499 11.399-14.397 11.399h-59.993c-6.898 0-12.896-4.8-14.397-11.399l-6.298-25.597c-30.298-6.898-59.094-20.397-83.99-38.995l-22.497-22.497 62.092-61.792c1.5 1.5 2.699 2.699 4.198 3.6 23.698 22.497 55.796 35.696 90.89 35.696 74.691 0 134.983-60.292 134.983-134.983 0-35.097-13.196-67.192-35.694-90.89-.901-1.5-2.102-2.699-3.604-4.199l84.891-84.888 20.996 20.997c4.8 4.798 5.697 12.297 2.102 18.298l-12.9 21.596c13.2 20.997 22.797 44.095 28.198 68.392l25.595 6.298c6.603 1.501 11.399 7.499 11.399 14.399z"
                                            style="" fill="#a4d9f5" data-original="#a4d9f5" class="">
                                        </path>
                                        <path
                                            d="M357.609 228.932a14.994 14.994 0 0 0-10.555-10.806 14.994 14.994 0 0 0-14.596 3.867l-34.008 34.008c-5.653 5.653-13.182 8.759-21.208 8.759s-15.555-3.105-21.208-8.759c-11.688-11.688-11.688-30.728 0-42.417l34.241-34.241c3.768-3.768 5.222-9.266 3.813-14.403s-5.466-9.131-10.63-10.443c-12.859-3.267-29.649-4.782-46.933-1.741-42.314 7.763-75.972 41.421-83.75 83.808-3.354 18.748-1.86 37.422 4.276 54.617-8.535 8.535-140.349 140.347-143.892 143.892-17.591 17.591-17.591 46.21.278 64.079 17.702 16.78 44.813 17.486 63.522-.278l143.892-143.892c23.043 8.224 48.742 8.057 73.89-.817 33.967-11.987 57.472-43.336 64.535-78.656l.015-.073c3.033-16.962 1.546-33.641-1.682-46.504z"
                                            style="" fill="#17ace8" data-original="#17ace8" class="">
                                        </path>
                                        <path
                                            d="m76.961 498.873 143.892-143.892c23.043 8.224 48.742 8.057 73.891-.817 33.968-11.987 57.472-43.336 64.535-78.656l.015-.073c3.06-17.117 1.518-33.946-1.772-46.856a14.822 14.822 0 0 0-10.445-10.634 14.819 14.819 0 0 0-14.399 3.827L298.452 256c-5.653 5.653-13.182 8.759-21.208 8.759-7.889 0-15.254-3.065-20.875-8.535L13.438 499.152c17.702 16.779 44.813 17.486 63.523-.279z"
                                            style="" fill="#1689fc" data-original="#1689fc" class="">
                                        </path>
                                    </g>
                                </svg>
                            </span>
                            <!--end::Svg Icon-->
                        </span>
                        <span class="menu-title">Settings</span>
                        <span class="menu-arrow"></span>
                    </span>
                    <div
                        class="menu-sub menu-sub-accordion {{ Route::is('admin.setting.index', 'admin.css.index', 'admin.email-settings.index') ? 'menu-active-bg' : '' }}">
                        <div class="menu-item">
                            <a class="menu-link {{ Route::is('admin.setting.index') ? 'active' : '' }}"
                                href="{{ route('admin.setting.index') }}">
                                <span class="menu-bullet">
                                    <span class="bullet bullet-dot"></span>
                                </span>
                                <span class="menu-title">Website Setting</span>
                            </a>
                        </div>
                        {{-- <div class="menu-item">
                            <a class="menu-link {{ Route::is('admin.css.index') ? 'active' : '' }}"
                                href="{{ route('admin.css.index') }}">
                                <span class="menu-bullet">
                                    <span class="bullet bullet-dot"></span>
                                </span>
                                <span class="menu-title">CSS Setting</span>
                            </a>
                        </div> --}}
                        {{-- <div class="menu-item">
                            <a class="menu-link {{ Route::is('admin.email-settings.index') ? 'active' : '' }}"
                                href="{{ route('admin.email-settings.index') }}">
                                <span class="menu-bullet">
                                    <span class="bullet bullet-dot"></span>
                                </span>
                                <span class="menu-title">Email Setting</span>
                            </a>
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="aside-footer flex-column-auto pt-5 pb-7 px-5" id="kt_aside_footer">
        <form method="POST" action="{{ route('admin.logout') }}">
            <a href="{{ route('admin.logout') }}" class="btn text-white w-100" style="background-color: #7239e9; "
                onclick="event.preventDefault();
        this.closest('form').submit();">
                <span class="btn-label">
                    @csrf
                    <i class="fa-solid fa-right-from-bracket"></i> {{ __('Log Out') }}
                </span>
            </a>
        </form>
    </div>
</div>

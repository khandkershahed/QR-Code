<div id="kt_aside" class="aside aside-light aside-hoverable" data-kt-drawer="true" data-kt-drawer-name="aside"
    data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true"
    data-kt-drawer-width="{default:'200px', '300px': '250px'}" data-kt-drawer-direction="start"
    data-kt-drawer-toggle="#kt_aside_mobile_toggle">
    <div class="aside-logo flex-column-auto" id="kt_aside_logo">
        <a href="{{ route('dashboard') }}">
            <img alt="Logo" src="{{ !empty($site->system_logo_white) && file_exists(public_path('storage/webSetting/systemLogoWhite/' . $site->system_logo_white)) ? asset('storage/webSetting/systemLogoWhite/' . $site->system_logo_white) : asset('frontend/assets/images/logos/logo.png') }}" class="h-60px logo">
        </a>
        <div id="kt_aside_toggle" class="btn btn-icon w-auto px-0 btn-active-color-primary aside-toggle"
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
                    <a class="menu-link {{ Route::is('dashboard') ? 'active' : '' }}" href="{{ route('dashboard') }}">
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
                    <a class="menu-link {{ Route::is('user.qr-code.index', 'user.qr-code.create', 'user.qr-code.edit') ? 'active' : '' }}"
                        href="{{ route('user.qr-code.index') }}">
                        <span class="menu-icon">
                            <span class="svg-icon svg-icon-2">
                                <svg xmlns="http://www.w3.org/2000/svg" version="1.1"
                                    xmlns:xlink="http://www.w3.org/1999/xlink" width="512" height="512" x="0" y="0"
                                    viewBox="0 0 512 512" style="enable-background:new 0 0 512 512" xml:space="preserve"
                                    class="">
                                    <g>
                                        <path
                                            d="M30 30h90V0H0v120h30zM392 0v30h90v90h30V0zM482 482h-90v30h120V392h-30zM30 392H0v120h120v-30H30zm0 0"
                                            fill="#fb2905" opacity="1" data-original="#000000" class=""></path>
                                        <path
                                            d="M61 60v150h150v-90h30V90h-30V60zm120 120H91V90h90zM451 450V300h-60v-30h-30v30h-90v30h30v30h-30v30h30v60zM331 330h90v90h-90zM151 270h60v-30H61v30h60v30H91v30h30v60H91v30h30v30h150v-30h-30v-30h-30v30h-60v-30h30v-30h-30zm0 0"
                                            fill="#fb2905" opacity="1" data-original="#000000" class=""></path>
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
                    <a class="menu-link {{ Route::is('user.barcode.index', 'user.barcode.create', 'user.barcode.edit') ? 'active' : '' }}"
                        href="{{ route('user.barcode.index') }}">
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
                    <a class="menu-link {{ Route::is('user.virtual-card.index', 'user.virtual-card.create', 'user.virtual-card.edit') ? 'active' : '' }}"
                        href="{{ route('user.virtual-card.index') }}">
                        <span class="menu-icon">
                            <span class="svg-icon svg-icon-2">
                               <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" width="512" height="512" x="0" y="0" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512" xml:space="preserve" class=""><g><linearGradient id="a" x1="410.584" x2="17.316" y1="451.093" y2="57.826" gradientUnits="userSpaceOnUse"><stop offset="0" stop-color="#eae936"></stop><stop offset="1" stop-color="#43b871"></stop></linearGradient><path fill="url(#a)" fill-rule="evenodd" d="M317.901 233.67h96.116c4.41 0 8.004-3.58 8.004-7.999s-3.594-7.999-8.004-7.999h-96.116c-4.415 0-8.004 3.579-8.004 7.999 0 4.419 3.589 7.999 8.004 7.999zm-36.472 89.551h-138.04c-9.291 0-16.852 7.551-16.852 16.838v25.28c0 9.291 7.561 16.852 16.852 16.852h138.04c9.291 0 16.852-7.56 16.852-16.852v-25.28c-.001-9.287-7.561-16.838-16.852-16.838zm151.92-235.119H371.79V35.943c0-19.266-16.663-34.944-37.132-34.944h-244.5c-20.47 0-37.128 15.678-37.128 34.944v440.118C53.03 495.318 69.688 511 90.158 511h244.5c20.469 0 37.132-15.682 37.132-34.939V301.61h61.559c14.116 0 25.62-11.489 25.62-25.62V113.722c0-14.126-11.503-25.62-25.62-25.62zM191.161 30.236h42.5c4.419 0 7.999 3.58 7.999 7.999s-3.58 7.999-7.999 7.999h-42.5c-4.414 0-8.003-3.58-8.003-7.999-.001-4.419 3.588-7.999 8.003-7.999zm37.84 433.365h-33.18a6.209 6.209 0 0 1-6.212-6.202 6.207 6.207 0 0 1 6.212-6.207h33.18a6.206 6.206 0 0 1 6.207 6.207 6.208 6.208 0 0 1-6.207 6.202zm126.787-59.809H69.029V75.476h286.759v12.626H152.165c-14.125 0-25.629 11.494-25.629 25.62v162.269c0 14.13 11.504 25.62 25.629 25.62h203.623zm87.178-127.801c0 5.306-4.32 9.622-9.617 9.622H152.165c-5.306 0-9.626-4.316-9.626-9.622V165.73h300.427zm0-153.44H142.539v-8.829c0-5.306 4.32-9.622 9.626-9.622h281.184c5.297 0 9.617 4.315 9.617 9.622zm-197.099 69.855h-74.359c-8.678 0-15.748 7.065-15.748 15.748v35.029c0 8.688 7.07 15.748 15.748 15.748h74.359c8.683 0 15.753-7.06 15.753-15.748v-35.029c0-8.683-7.07-15.748-15.753-15.748zm-58.899 50.527h-15.21v-9.263h15.21zm0-25.261h-15.21v-9.263h15.21zm58.653 25.261h-15.21v-9.263h15.21zm0-25.261h-15.21v-9.263h15.21zm168.396 25.261h-96.116c-4.415 0-8.004 3.584-8.004 7.999 0 4.419 3.589 7.999 8.004 7.999h96.116c4.41 0 8.004-3.58 8.004-7.999 0-4.414-3.594-7.999-8.004-7.999z" clip-rule="evenodd" opacity="1" data-original="url(#a)" class=""></path></g></svg>
                            </span>
                        </span>
                        <span class="menu-title">Virtual Card</span>
                    </a>
                </div>
                <div class="menu-item">
                    <a class="menu-link {{ Route::is('user.nfc-card.index', 'user.nfc-card.create', 'user.nfc-card.edit') ? 'active' : '' }}"
                        href="{{ route('user.nfc-card.index') }}">
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

                <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                    <span class="menu-link">
                        <span class="menu-icon">
                            <!--begin::Svg Icon | path: icons/duotune/general/gen022.svg-->
                            <span class="svg-icon svg-icon-2">
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
                            <!--end::Svg Icon-->
                        </span>
                        <span class="menu-title">Template</span>
                        <span class="menu-arrow"></span>
                    </span>
                    <div class="menu-sub menu-sub-accordion menu-active-bg">
                        <div class="menu-item">
                            <a class="menu-link" href="{{ route('user.qr.template') }}">
                                <span class="menu-bullet">
                                    <span class="bullet bullet-dot"></span>
                                </span>
                                <span class="menu-title">QR Code Templates</span>
                            </a>
                        </div>
                        <div class="menu-item">
                            <a class="menu-link" href="{{ route('user.nfc.template') }}">
                                <span class="menu-bullet">
                                    <span class="bullet bullet-dot"></span>
                                </span>
                                <span class="menu-title">NFC Card Templates</span>
                            </a>
                        </div>
                    </div>
                </div>
                <div data-kt-menu-trigger="click"
                    class="menu-item {{ Route::is('profile.edit', 'user.plan', 'user.invoice', 'user.upgrade.plan', 'user.subscribe.post') ? 'here show' : '' }} menu-accordion">
                    <span class="menu-link">
                        <span class="menu-icon">
                            <span class="svg-icon svg-icon-2">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                                    class="svg-icon svg-icon-2">
                                    <rect x="3" y="3" width="18" height="18" rx="2"
                                        stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                    <rect x="7" y="7" width="4" height="4" rx="1"
                                        fill="currentColor" />
                                    <rect x="13" y="7" width="4" height="4" rx="1"
                                        fill="currentColor" />
                                    <rect x="7" y="13" width="4" height="4" rx="1"
                                        fill="currentColor" />
                                    <rect x="13" y="13" width="4" height="4" rx="1"
                                        fill="currentColor" />
                                </svg>
                            </span>
                        </span>
                        <span class="menu-title">Profile & Pricing</span>
                        <span class="menu-arrow"></span>
                    </span>
                    <div
                        class="menu-sub menu-sub-accordion {{ Route::is('profile.edit', 'user.plan', 'user.invoice', 'user.upgrade.plan', 'user.subscribe.post') ? 'menu-active-bg' : '' }}">
                        <div class="menu-item">
                            <a class="menu-link {{ Route::is('user.invoice') ? 'active' : '' }}"
                                href="{{ route('user.invoice') }}">
                                <span class="menu-bullet">
                                    <span class="bullet bullet-dot"></span>
                                </span>
                                <span class="menu-title">My All Invoices</span>
                            </a>
                        </div>
                        <div class="menu-item">
                            <a class="menu-link {{ Route::is('user.upgrade.plan', 'user.subscribe.post') ? 'active' : '' }}"
                                href="{{ route('user.upgrade.plan') }}">
                                <span class="menu-bullet">
                                    <span class="bullet bullet-dot"></span>
                                </span>
                                <span class="menu-title">Upgrade Plan</span>
                            </a>
                        </div>
                        <div class="menu-item">
                            <a class="menu-link {{ Route::is('profile.edit') ? 'active' : '' }}"
                                href="{{ route('profile.edit') }}">
                                <span class="menu-bullet">
                                    <span class="bullet bullet-dot"></span>
                                </span>
                                <span class="menu-title">My Profile</span>
                            </a>
                        </div>
                        {{-- <div class="menu-item">
                            <a class="menu-link "
                                href="{{ route('normaluser.pricing') }}">
                                <span class="menu-bullet">
                                    <span class="bullet bullet-dot"></span>
                                </span>
                                <span class="menu-title">Pricing</span>
                            </a>
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div>
        <div class="row">
            <div class="col-lg-12">
                <div class="flip-countdown"></div>
            </div>
        </div>
    </div>
    <div class="aside-footer flex-column-auto pt-5 pb-7 px-5" id="kt_aside_footer">
        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <a href="{{ route('logout') }}" class="btn w-100 text-white" style="background-color: #7239e9;"
                onclick="event.preventDefault();this.closest('form').submit();">
                <span class="btn-label">
                    {{ __('Log Out') }}
                </span>
            </a>
        </form>
    </div>
</div>

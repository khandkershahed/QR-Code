<div id="kt_aside" class="aside aside-light aside-hoverable" data-kt-drawer="true" data-kt-drawer-name="aside"
    data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true"
    data-kt-drawer-width="{default:'200px', '300px': '250px'}" data-kt-drawer-direction="start"
    data-kt-drawer-toggle="#kt_aside_mobile_toggle">
    <div class="aside-logo flex-column-auto" id="kt_aside_logo">
        <a href="{{ route('dashboard') }}">
            <img alt="Logo" src="https://i.ibb.co/BNBTVN4/logo.png" class="h-60px logo">
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
                <div data-kt-menu-trigger="click"
                    class="menu-item {{ Route::is('user.qr-code.index', 'user.qr-code.create') ? 'here show' : '' }} menu-accordion">
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
                        <span class="menu-title">QR Code</span>
                        <span class="menu-arrow"></span>
                    </span>
                    <div
                        class="menu-sub menu-sub-accordion {{ Route::is('user.qr-code.index', 'user.qr-code.create') ? 'menu-active-bg' : '' }}">
                        <div class="menu-item">
                            <a class="menu-link {{ Route::is('user.qr-code.create') ? 'active' : '' }}"
                                href="{{ route('user.qr-code.create') }}">
                                <span class="menu-bullet">
                                    <span class="bullet bullet-dot"></span>
                                </span>
                                <span class="menu-title">QR Code Create</span>
                            </a>
                        </div>
                        <div class="menu-item">
                            <a class="menu-link {{ Route::is('user.qr-code.index') ? 'active' : '' }}"
                                href="{{ route('user.qr-code.index') }}">
                                <span class="menu-bullet">
                                    <span class="bullet bullet-dot"></span>
                                </span>
                                <span class="menu-title">QR Code List</span>
                            </a>
                        </div>
                    </div>
                </div>
                <div data-kt-menu-trigger="click"
                    class="menu-item menu-accordion {{ Route::is('user.nfc-card.index', 'user.nfc-card.create', 'user.virtual-card.create', 'user.virtual-card.index') ? 'here show' : '' }}">
                    <span class="menu-link">
                        <span class="menu-icon">
                            <span class="svg-icon svg-icon-2">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none">
                                    <rect x="2" y="2" width="20" height="20" rx="2"
                                        fill="currentColor"></rect>
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M11.5 8.5a.5.5 0 01.5-.5h.5a.5.5 0 01.5.5v7a.5.5 0 01-.5.5h-.5a.5.5 0 01-.5-.5v-7zM10 8a1 1 0 011-1h1a1 1 0 011 1v8a1 1 0 01-1 1h-1a1 1 0 01-1-1v-8zm1 2a.5.5 0 00-.5.5v4a.5.5 0 00.5.5h.5a.5.5 0 00.5-.5v-4a.5.5 0 00-.5-.5h-.5z"
                                        fill="#fff" />
                                </svg>
                            </span>
                        </span>
                        <span class="menu-title">NFC Card</span>
                        <span class="menu-arrow"></span>
                    </span>
                    <div
                        class="menu-sub menu-sub-accordion {{ Route::is('user.nfc-card.index', 'user.nfc-card.create', 'user.virtual-card.create', 'user.virtual-card.index') ? 'menu-active-bg' : '' }}">
                        <div class="menu-item">
                            <a class="menu-link {{ Route::is('user.nfc-card.create') ? 'active' : '' }}"
                                href="{{ route('user.nfc-card.create') }}">
                                <span class="menu-bullet">
                                    <span class="bullet bullet-dot"></span>
                                </span>
                                <span class="menu-title">V Card Create</span>
                            </a>
                        </div>
                        <div class="menu-item">
                            <a class="menu-link {{ Route::is('user.nfc-card.index') ? 'active' : '' }}"
                                href="{{ route('user.nfc-card.index') }}">
                                <span class="menu-bullet">
                                    <span class="bullet bullet-dot"></span>
                                </span>
                                <span class="menu-title">V Card List</span>
                            </a>
                        </div>
                        <div class="menu-item">
                            <a class="menu-link {{ Route::is('user.virtual-card.create') ? 'active' : '' }}"
                                href="{{ route('user.virtual-card.create') }}">
                                <span class="menu-bullet">
                                    <span class="bullet bullet-dot"></span>
                                </span>
                                <span class="menu-title">NFC Card Create</span>
                            </a>
                        </div>
                        <div class="menu-item">
                            <a class="menu-link {{ Route::is('user.virtual-card.index') ? 'active' : '' }}"
                                href="{{ route('user.virtual-card.index') }}">
                                <span class="menu-bullet">
                                    <span class="bullet bullet-dot"></span>
                                </span>
                                <span class="menu-title">NFC Card List</span>
                            </a>
                        </div>

                    </div>
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

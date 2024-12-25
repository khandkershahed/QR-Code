<header class="main-header menu-absolute no-border">
    <div class="header-upper">
        <div class="container container-1660 clearfix">
            <div class="header-inner py-20 rel d-flex align-items-center">
                <div class="logo-outer">
                    <div class="logo">
                        <a href="{{ route('homePage') }}">
                            <img width="100px"
                                src="{{ !empty($site->system_logo_white) && file_exists(public_path('storage/webSetting/systemLogoWhite/' . $site->system_logo_white)) ? asset('storage/webSetting/systemLogoWhite/' . $site->system_logo_white) : asset('frontend/assets/images/logos/logo.png') }}"
                                alt="Logo" title="Logo" />
                        </a>
                    </div>
                </div>
                <div class="nav-outer ms-lg-5 ps-lg-5 clearfix">
                    <nav class="main-menu navbar-expand-lg">
                        <div class="navbar-header py-10">
                            <div class="mobile-logo">
                                <a href="{{ route('homePage') }}">
                                    <img width="60px"
                                        src="{{ !empty($site->system_logo_white) && file_exists(public_path('storage/webSetting/systemLogoWhite/' . $site->system_logo_white)) ? asset('storage/webSetting/systemLogoWhite/' . $site->system_logo_white) : asset('frontend/assets/images/logos/logo.png') }}"
                                        alt="Logo" title="Logo" />
                                </a>
                            </div>
                            <button type="button" class="navbar-toggle" data-bs-toggle="offcanvas"
                                data-bs-target="#staticBackdrop" aria-controls="staticBackdrop">
                                <span class="icon-bar bg-dark"></span>
                                <span class="icon-bar bg-dark"></span>
                                <span class="icon-bar bg-dark"></span>
                            </button>
                        </div>
                        <div class="navbar-collapse collapse clearfix">
                            <ul class="navigation onepage clearfix">
                                <li class="{{ Route::current()->getName() == 'homePage' ? 'active-link' : '' }}"><a
                                        href="{{ route('homePage') }}">HOME</a></li>
                                <li class="{{ Route::current()->getName() == 'qrCode' ? 'active-link' : '' }}">
                                    <a href="{{ route('qrCode') }}">QR CODES</a>
                                </li>
                                <li
                                    class="dropdown position-static {{ Route::current()->getName() == 'digitalCard' ? 'active-link' : '' }}">
                                    <a href="{{ route('digitalCard') }}">DIGITAL
                                        BUSINESS CARDS</a>
                                </li>
                                <li class="{{ Route::current()->getName() == 'barCode' ? 'active-link' : '' }}"><a
                                        href="{{ route('barCode') }}">BAR CODE</a></li>
                                <li class="{{ Route::current()->getName() == 'pricing' ? 'active-link' : '' }}"><a
                                        href="{{ route('pricing') }}">PRICING</a></li>
                                <li class="{{ Route::current()->getName() == 'services' ? 'active-link' : '' }}"><a
                                        href="{{ route('services') }}">SERVICES</a></li>
                                <li class="{{ Route::current()->getName() == 'allBlog' ? 'active-link' : '' }}"><a
                                        href="{{ route('allBlog') }}">BLOG</a></li>
                            </ul>
                        </div>
                    </nav>
                </div>
                <div class="menu-btns ms-lg-auto">
                    @auth

                        <a href="{{ route('dashboard') }}" class="light-btn"><i class="fas fa-user me-1"></i> My
                            Dashboard</a>
                    @else
                        <a href="{{ route('login') }}" class="light-btn"><i class="fas fa-user me-1"></i> LOGIN</a>
                    @endauth
                    <a href="{{ route('pricing') }}" class="theme-btn style-two rounded-0">Get Started
                        <i class="fas fa-arrow-right"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="offcanvas offcanvas-start w-50" tabindex="-1" id="staticBackdrop" aria-labelledby="offcanvasLabel"
        style="background: #dceaf0;">
        <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="offcanvasLabel"></h5>
            <button type="button" class="btn-close mt-5 me-3 menu-close" data-bs-dismiss="offcanvas"
                aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
            <div class="container">
                <div class="row my-5 align-items-center">
                    <div class="col-lg-12">
                        <div class="logo d-flex justify-content-center align-items-center" style="margin-bottom: 70px;">
                            <a href="{{ route('homePage') }}">
                                <img width="200px"
                                    src="{{ !empty($site->system_logo_white) && file_exists(public_path('storage/webSetting/systemLogoWhite/' . $site->system_logo_white)) ? asset('storage/webSetting/systemLogoWhite/' . $site->system_logo_white) : asset('frontend/assets/images/logos/logo.png') }}"
                                    alt="Logo" title="Logo" />
                            </a>
                        </div>
                    </div>
                    <div class="col-sm-10 offset-sm-1">
                        <div class="offcanvas-menus-box">
                            <ul class="offcanvas-menus-main my-5 py-5">
                                <li class="mb-4">
                                    <a href="{{ route('homePage') }}">
                                        <svg xmlns="http://www.w3.org/2000/svg" version="1.1"
                                            xmlns:xlink="http://www.w3.org/1999/xlink" width="30" height="30"
                                            x="0" y="0" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512"
                                            xml:space="preserve" class="">
                                            <g>
                                                <path
                                                    d="M506.555 208.064 263.859 30.367a13.3 13.3 0 0 0-15.716 0L5.445 208.064c-5.928 4.341-7.216 12.665-2.875 18.593s12.666 7.214 18.593 2.875L256 57.588l234.837 171.943a13.236 13.236 0 0 0 7.848 2.57c4.096 0 8.138-1.885 10.744-5.445 4.342-5.927 3.054-14.251-2.874-18.592z"
                                                    fill="#000000" opacity="1" data-original="#000000"
                                                    class=""></path>
                                                <path
                                                    d="M442.246 232.543c-7.346 0-13.303 5.956-13.303 13.303v211.749H322.521V342.009c0-36.68-29.842-66.52-66.52-66.52s-66.52 29.842-66.52 66.52v115.587H83.058V245.847c0-7.347-5.957-13.303-13.303-13.303s-13.303 5.956-13.303 13.303V470.9c0 7.347 5.957 13.303 13.303 13.303h133.029c6.996 0 12.721-5.405 13.251-12.267.032-.311.052-.651.052-1.036V342.01c0-22.009 17.905-39.914 39.914-39.914s39.914 17.906 39.914 39.914V470.9c0 .383.02.717.052 1.024.524 6.867 6.251 12.279 13.251 12.279h133.029c7.347 0 13.303-5.956 13.303-13.303V245.847c-.001-7.348-5.957-13.304-13.304-13.304z"
                                                    fill="#000000" opacity="1" data-original="#000000"
                                                    class=""></path>
                                            </g>
                                        </svg>
                                        <span class="ps-3"> HOME</span>
                                    </a>
                                </li>
                                <li class="mb-4">
                                    <a href="{{ route('qrCode') }}">
                                        <svg xmlns="http://www.w3.org/2000/svg" version="1.1"
                                            xmlns:xlink="http://www.w3.org/1999/xlink" width="30" height="30"
                                            x="0" y="0" viewBox="0 0 512 512"
                                            style="enable-background:new 0 0 512 512" xml:space="preserve"
                                            class="">
                                            <g>
                                                <path
                                                    d="M30 30h90V0H0v120h30zM392 0v30h90v90h30V0zM482 482h-90v30h120V392h-30zM30 392H0v120h120v-30H30zm0 0"
                                                    fill="#000000" opacity="1" data-original="#000000"
                                                    class=""></path>
                                                <path
                                                    d="M61 60v150h150v-90h30V90h-30V60zm120 120H91V90h90zM451 450V300h-60v-30h-30v30h-90v30h30v30h-30v30h30v60zM331 330h90v90h-90zM151 270h60v-30H61v30h60v30H91v30h30v60H91v30h30v30h150v-30h-30v-30h-30v30h-60v-30h30v-30h-30zm0 0"
                                                    fill="#000000" opacity="1" data-original="#000000"
                                                    class=""></path>
                                                <path d="M121 120h30v30h-30zM361 120h30v30h-30zm0 0" fill="#000000"
                                                    opacity="1" data-original="#000000" class=""></path>
                                                <path
                                                    d="M391 210h60V60H301v150h60v30h30zm-60-30V90h90v90zM451 270v-30h-60v30zM361 360h30v30h-30zM241 330h30v30h-30zM181 360h30v-60h-30zM211 270h30v30h-30zM91 330H61v60h30v-60zM61 420h30v30H61zM241 60h30v30h-30zM241 180h30v-60h-30zM271 240v-30h-30v60h120v-30zm0 0"
                                                    fill="#000000" opacity="1" data-original="#000000"
                                                    class=""></path>
                                            </g>
                                        </svg>
                                        <span class="ps-3">QR CODES</span>
                                    </a>
                                </li>
                                <li class="mb-4">
                                    <a href="{{ route('digitalCard') }}">
                                        <svg xmlns="http://www.w3.org/2000/svg" version="1.1"
                                            xmlns:xlink="http://www.w3.org/1999/xlink" width="30" height="30"
                                            x="0" y="0" viewBox="0 0 508 508"
                                            style="enable-background:new 0 0 512 512" xml:space="preserve"
                                            class="">
                                            <g>
                                                <path
                                                    d="M264 459c0 5.52-4.49 10-10 10s-10-4.48-10-10c0-5.51 4.49-10 10-10s10 4.49 10 10zM79.626 213c-5.523 0-10 4.477-10 10s4.477 10 10 10H100v100c0 5.523 4.477 10 10 10s10-4.477 10-10V233h20.374c5.523 0 10-4.477 10-10s-4.477-10-10-10zM426 135c23.159 0 42 18.841 42 42s-18.841 42-42 42-42-18.841-42-42 18.841-42 42-42zm-22 42c0 12.131 9.869 22 22 22s22-9.869 22-22-9.869-22-22-22-22 9.869-22 22zm-6 292h-99c-5.731 0-10.359-4.847-9.978-10.669.348-5.315 5.003-9.331 10.329-9.331H388v-20h-74c-16.569 0-30-13.431-30-30v-26c0-16.569 13.431-30 30-30h74v-42H250c-5.523 0-10-4.477-10-10V105c0-5.523 4.477-10 10-10h138V69c0-5.523-4.477-10-10-10H130c-5.523 0-10 4.477-10 10v99h90c5.523 0 10 4.477 10 10v200c0 5.523-4.477 10-10 10h-90v61h88.649c5.326 0 9.981 4.016 10.329 9.331.381 5.822-4.247 10.669-9.978 10.669h-99c-5.523 0-10-4.477-10-10v-71H10c-5.523 0-10-4.477-10-10V178c0-5.523 4.477-10 10-10h90V69c0-16.569 13.431-30 30-30h248c16.569 0 30 13.431 30 30v26h90c5.523 0 10 4.477 10 10v186c0 5.523-4.477 10-10 10h-90v42h26c16.569 0 30 13.431 30 30v26c0 16.569-13.431 30-30 30h-26v30c0 5.523-4.477 10-10 10zM200 188H20v180h180zm234 175H314c-5.514 0-10 4.486-10 10v26c0 5.514 4.486 10 10 10h120c5.514 0 10-4.486 10-10v-26c0-5.514-4.486-10-10-10zm-174-82h154.895l-92.318-86.297c-11.488-10.738-29.486-10.74-40.973 0L260 214.899zm228-166H260v72.521l7.946-7.428c19.147-17.898 49.144-17.897 68.289 0L444.183 281H488z"
                                                    fill="#000000" opacity="1" data-original="#000000"></path>
                                            </g>
                                        </svg>
                                        <span class="ps-3">DIGITAL BUSINESS CARDS</span>
                                    </a>
                                </li>
                                <li class="mb-4">
                                    <a href="{{ route('barCode') }}">
                                        <svg xmlns="http://www.w3.org/2000/svg" version="1.1"
                                            xmlns:xlink="http://www.w3.org/1999/xlink" width="30" height="30"
                                            x="0" y="0" viewBox="0 0 682.667 682.667"
                                            style="enable-background:new 0 0 512 512" xml:space="preserve">
                                            <g>
                                                <defs>
                                                    <clipPath id="a" clipPathUnits="userSpaceOnUse">
                                                        <path d="M0 512h512V0H0Z" fill="#000000" opacity="1"
                                                            data-original="#000000"></path>
                                                    </clipPath>
                                                </defs>
                                                <g clip-path="url(#a)"
                                                    transform="matrix(1.33333 0 0 -1.33333 0 682.667)">
                                                    <path d="M0 0v60c0 11.046 8.954 20 20 20h60"
                                                        style="stroke-width:30;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1"
                                                        transform="translate(15 356)" fill="none" stroke="#000000"
                                                        stroke-width="30" stroke-linecap="round"
                                                        stroke-linejoin="round" stroke-miterlimit="10"
                                                        stroke-dasharray="none" stroke-opacity=""
                                                        data-original="#000000"></path>
                                                    <path d="M0 0h-60c-11.046 0-20 8.954-20 20v60"
                                                        style="stroke-width:30;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1"
                                                        transform="translate(95 76)" fill="none" stroke="#000000"
                                                        stroke-width="30" stroke-linecap="round"
                                                        stroke-linejoin="round" stroke-miterlimit="10"
                                                        stroke-dasharray="none" stroke-opacity=""
                                                        data-original="#000000"></path>
                                                    <path d="M0 0v-60c0-11.046-8.954-20-20-20h-60"
                                                        style="stroke-width:30;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1"
                                                        transform="translate(497 156)" fill="none"
                                                        stroke="#000000" stroke-width="30" stroke-linecap="round"
                                                        stroke-linejoin="round" stroke-miterlimit="10"
                                                        stroke-dasharray="none" stroke-opacity=""
                                                        data-original="#000000"></path>
                                                    <path d="M0 0h60c11.046 0 20-8.954 20-20v-60"
                                                        style="stroke-width:30;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1"
                                                        transform="translate(417 436)" fill="none"
                                                        stroke="#000000" stroke-width="30" stroke-linecap="round"
                                                        stroke-linejoin="round" stroke-miterlimit="10"
                                                        stroke-dasharray="none" stroke-opacity=""
                                                        data-original="#000000"></path>
                                                    <path d="M0 0v-238"
                                                        style="stroke-width:30;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1"
                                                        transform="translate(75 375)" fill="none" stroke="#000000"
                                                        stroke-width="30" stroke-linecap="round"
                                                        stroke-linejoin="round" stroke-miterlimit="10"
                                                        stroke-dasharray="none" stroke-opacity=""
                                                        data-original="#000000"></path>
                                                    <path d="M0 0v-158"
                                                        style="stroke-width:30;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1"
                                                        transform="translate(135 375)" fill="none"
                                                        stroke="#000000" stroke-width="30" stroke-linecap="round"
                                                        stroke-linejoin="round" stroke-miterlimit="10"
                                                        stroke-dasharray="none" stroke-opacity=""
                                                        data-original="#000000"></path>
                                                    <path d="M0 0v-238"
                                                        style="stroke-width:30;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1"
                                                        transform="translate(195 375)" fill="none"
                                                        stroke="#000000" stroke-width="30" stroke-linecap="round"
                                                        stroke-linejoin="round" stroke-miterlimit="10"
                                                        stroke-dasharray="none" stroke-opacity=""
                                                        data-original="#000000"></path>
                                                    <path d="M0 0v-158"
                                                        style="stroke-width:30;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1"
                                                        transform="translate(255 375)" fill="none"
                                                        stroke="#000000" stroke-width="30" stroke-linecap="round"
                                                        stroke-linejoin="round" stroke-miterlimit="10"
                                                        stroke-dasharray="none" stroke-opacity=""
                                                        data-original="#000000"></path>
                                                    <path d="M0 0v-158"
                                                        style="stroke-width:30;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1"
                                                        transform="translate(315 375)" fill="none"
                                                        stroke="#000000" stroke-width="30" stroke-linecap="round"
                                                        stroke-linejoin="round" stroke-miterlimit="10"
                                                        stroke-dasharray="none" stroke-opacity=""
                                                        data-original="#000000"></path>
                                                    <path d="M0 0v-158"
                                                        style="stroke-width:30;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1"
                                                        transform="translate(375 375)" fill="none"
                                                        stroke="#000000" stroke-width="30" stroke-linecap="round"
                                                        stroke-linejoin="round" stroke-miterlimit="10"
                                                        stroke-dasharray="none" stroke-opacity=""
                                                        data-original="#000000"></path>
                                                    <path d="M0 0v-238"
                                                        style="stroke-width:30;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1"
                                                        transform="translate(435 375)" fill="none"
                                                        stroke="#000000" stroke-width="30" stroke-linecap="round"
                                                        stroke-linejoin="round" stroke-miterlimit="10"
                                                        stroke-dasharray="none" stroke-opacity=""
                                                        data-original="#000000"></path>
                                                    <path d="M0 0v17"
                                                        style="stroke-width:30;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1"
                                                        transform="translate(135 137)" fill="none"
                                                        stroke="#000000" stroke-width="30" stroke-linecap="round"
                                                        stroke-linejoin="round" stroke-miterlimit="10"
                                                        stroke-dasharray="none" stroke-opacity=""
                                                        data-original="#000000"></path>
                                                    <path d="M0 0v17"
                                                        style="stroke-width:30;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1"
                                                        transform="translate(255 137)" fill="none"
                                                        stroke="#000000" stroke-width="30" stroke-linecap="round"
                                                        stroke-linejoin="round" stroke-miterlimit="10"
                                                        stroke-dasharray="none" stroke-opacity=""
                                                        data-original="#000000"></path>
                                                    <path d="M0 0v17"
                                                        style="stroke-width:30;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1"
                                                        transform="translate(315 137)" fill="none"
                                                        stroke="#000000" stroke-width="30" stroke-linecap="round"
                                                        stroke-linejoin="round" stroke-miterlimit="10"
                                                        stroke-dasharray="none" stroke-opacity=""
                                                        data-original="#000000"></path>
                                                    <path d="M0 0v17"
                                                        style="stroke-width:30;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1"
                                                        transform="translate(375 137)" fill="none"
                                                        stroke="#000000" stroke-width="30" stroke-linecap="round"
                                                        stroke-linejoin="round" stroke-miterlimit="10"
                                                        stroke-dasharray="none" stroke-opacity=""
                                                        data-original="#000000"></path>
                                                </g>
                                            </g>
                                        </svg>
                                        <span class="ps-3">BAR CODE</span>
                                    </a>
                                </li>
                                <li class="mb-4">
                                    <a href="{{ route('pricing') }}">
                                        <svg xmlns="http://www.w3.org/2000/svg" version="1.1"
                                            xmlns:xlink="http://www.w3.org/1999/xlink" width="30" height="30"
                                            x="0" y="0" viewBox="0 0 511.997 511.997"
                                            style="enable-background:new 0 0 512 512" xml:space="preserve"
                                            class="">
                                            <g>
                                                <path
                                                    d="m489.252 393.782-80.487-171.855a7.501 7.501 0 0 0-13.585 6.363l80.486 171.851c3.6 7.699.268 16.896-7.428 20.502l-154.316 72.268c-7.695 3.605-16.89.276-20.497-7.42l-28.851-61.621 75.093-181.18a30.5 30.5 0 0 0-.497-24.423l-41.075-88.727 53.243 16.844a15.425 15.425 0 0 1 9.309 8.162l19.722 42.094a7.501 7.501 0 0 0 9.974 3.61 7.5 7.5 0 0 0 3.609-9.975l-19.719-42.087a30.451 30.451 0 0 0-18.375-16.107l-64.21-20.314c13.238-19.338 27.183-45.197 31.981-56.774 12.582-30.356 2.427-47.238-11.271-52.916-13.699-5.676-32.818-.927-45.4 29.429-5.411 13.056-10.376 41.49-13.907 65.883a42.418 42.418 0 0 0-12.54 2.714l-97.147 37.118a30.548 30.548 0 0 0-17.243 16.767L22.216 404.693c-3.111 7.506-3.113 15.773-.005 23.28 3.107 7.507 8.952 13.354 16.457 16.464l30.39 12.595a7.5 7.5 0 1 0 5.744-13.858l-30.39-12.596c-3.803-1.576-6.766-4.539-8.341-8.344s-1.574-7.994.003-11.798l103.908-250.708a15.482 15.482 0 0 1 8.739-8.498l97.147-37.118a27.65 27.65 0 0 1 5.071-1.401 1335.401 1335.401 0 0 0-2.223 17.824 25.323 25.323 0 0 0-9.305 2.359c-6.13 2.87-10.775 7.956-13.079 14.32-2.305 6.365-1.993 13.245.877 19.375 4.303 9.19 13.453 14.592 22.988 14.592 3.593 0 7.243-.768 10.707-2.39 6.13-2.87 10.775-7.957 13.08-14.32 2.304-6.365 1.993-13.245-.877-19.375-2.138-4.564-5.506-8.302-9.714-10.867.558-4.776 1.409-11.819 2.489-20.018 6.492 2.53 12.042 7.461 15.162 14.202l44.512 96.153a15.453 15.453 0 0 1 .251 12.378L221.969 487.483a15.313 15.313 0 0 1-8.344 8.341 15.311 15.311 0 0 1-11.798-.002l-92.799-38.461a7.501 7.501 0 0 0-5.744 13.858l92.799 38.461a30.253 30.253 0 0 0 11.606 2.317c11.939 0 23.29-7.073 28.137-18.771l20.969-50.591 23.044 49.218c5.167 11.028 16.15 17.512 27.591 17.512 4.314 0 8.696-.922 12.854-2.871L474.6 434.227c15.183-7.114 21.756-25.255 14.652-40.445zM259.879 159.363a10.272 10.272 0 0 1-5.337 5.843c-5.162 2.418-11.33.184-13.748-4.978a10.273 10.273 0 0 1-.358-7.905 10.274 10.274 0 0 1 5.336-5.843 10.3 10.3 0 0 1 4.378-.981c1.187 0 2.377.207 3.526.623a10.274 10.274 0 0 1 5.843 5.336 10.26 10.26 0 0 1 .36 7.905zm18.899-55.347a43.318 43.318 0 0 0-10.811-4.921c3.382-23.407 8.021-50.186 12.853-61.847 3.403-8.213 12.73-26.727 25.797-21.314 13.066 5.416 6.561 25.102 3.156 33.314-4.612 11.128-18.211 36.276-30.995 54.768z"
                                                    fill="#000000" opacity="1" data-original="#000000"></path>
                                                <path
                                                    d="M154.412 252.893c16.25-8.649 34.896-10.454 52.504-5.077 29.226 8.922 48.843 35.426 48.815 65.952a7.501 7.501 0 0 0 7.494 7.508h.007a7.502 7.502 0 0 0 7.501-7.494c.016-17.613-5.713-35.192-16.131-49.5-10.777-14.799-25.752-25.455-43.307-30.815-44.259-13.51-91.256 11.504-104.765 55.761-6.545 21.44-4.349 44.144 6.184 63.932 10.532 19.788 28.138 34.29 49.577 40.835a83.942 83.942 0 0 0 24.516 3.66 83.812 83.812 0 0 0 34.269-7.324c18.317-8.206 33.092-22.676 41.604-40.745a7.5 7.5 0 0 0-3.588-9.982 7.5 7.5 0 0 0-9.982 3.588c-14.468 30.713-49.906 46.387-82.437 36.454-17.607-5.374-32.066-17.284-40.716-33.534-8.649-16.25-10.453-34.897-5.077-52.504 5.372-17.606 17.283-32.066 33.532-40.715z"
                                                    fill="#000000" opacity="1" data-original="#000000"></path>
                                                <path
                                                    d="M215.643 293.316a14.207 14.207 0 0 0-8.454-6.963l-3.407-1.04 2.315-7.584a7.501 7.501 0 0 0-14.347-4.381l-2.367 7.756c-9.993-1.725-19.973 4.211-23.008 14.157a20.301 20.301 0 0 0 1.506 15.569 20.302 20.302 0 0 0 12.073 9.944l9.442 2.882a5.397 5.397 0 0 1 3.211 2.645 5.4 5.4 0 0 1 .4 4.141 5.398 5.398 0 0 1-2.645 3.21 5.389 5.389 0 0 1-4.14.4l-4.72-1.441-9.95-3.037a7.502 7.502 0 0 0-14.52-3.709c-2.303 7.546 1.961 15.559 9.508 17.864l3.408 1.04-2.315 7.584a7.501 7.501 0 0 0 14.347 4.38l2.365-7.748c1.16.202 2.326.315 3.49.315 3.303 0 6.578-.81 9.576-2.406a20.302 20.302 0 0 0 9.944-12.073c3.29-10.778-2.801-22.223-13.579-25.513l-9.442-2.882a5.398 5.398 0 0 1-3.21-2.645 5.396 5.396 0 0 1-.4-4.141 5.439 5.439 0 0 1 6.786-3.611l4.717 1.44.003.001h.002l9.947 3.037a7.501 7.501 0 0 0 14.52 3.708 14.215 14.215 0 0 0-1.056-10.899zM439.577 393.388l-48.004-102.009A7.501 7.501 0 0 0 378 297.766l48.004 102.009a7.503 7.503 0 0 0 6.792 4.309 7.501 7.501 0 0 0 6.781-10.696zM406.041 411.323l-48.004-102.009a7.5 7.5 0 0 0-13.573 6.387l48.004 102.009a7.501 7.501 0 0 0 6.792 4.309 7.501 7.501 0 0 0 6.781-10.696z"
                                                    fill="#000000" opacity="1" data-original="#000000"></path>
                                            </g>
                                        </svg>
                                        <span class="ps-3">PRICING</span>
                                    </a>
                                </li>
                                <li class="mb-4">
                                    <a href="{{ route('services') }}">
                                        <svg xmlns="http://www.w3.org/2000/svg" version="1.1"
                                            xmlns:xlink="http://www.w3.org/1999/xlink" width="30" height="30"
                                            x="0" y="0" viewBox="0 0 64 64" style="enable-background:new 0 0 512 512"
                                            xml:space="preserve">
                                            <g>
                                                <path
                                                    d="m61.89 30.55-4-8A.977.977 0 0 0 57 22h-.76l-1-1H57a1 1 0 0 0 1-1v-4a1 1 0 0 0-1-1h-1.76l1.25-1.24a1.008 1.008 0 0 0 0-1.42l-2.83-2.83a1.008 1.008 0 0 0-1.42 0L51 10.76V9a1 1 0 0 0-1-1h-4a1 1 0 0 0-1 1v1.76l-1.24-1.25a1.008 1.008 0 0 0-1.42 0l-2.83 2.83a1.008 1.008 0 0 0 0 1.42L40.76 15H39a1 1 0 0 0-1 1v4a1 1 0 0 0 1 1h1.76l-1 1H34v-2.07a2.959 2.959 0 0 1 .98-2.21 9 9 0 0 0-2.6-15.07 1 1 0 0 0-1.38.93v6.88l-2 1.34-2-1.34V3.58a1 1 0 0 0-1.38-.93 9 9 0 0 0-2.6 15.07 2.959 2.959 0 0 1 .98 2.21V22h-1a.977.977 0 0 0-.89.55l-4 8A1 1 0 0 0 19 32h3v12.22l-2 .5V43a1 1 0 0 0-1-1h-8a1 1 0 0 0-1 1v1H3a1 1 0 0 0-1 1v14a1 1 0 0 0 1 1h7v1a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1v-1.38l1.29.64a7.063 7.063 0 0 0 3.13.74h14.97a6.93 6.93 0 0 0 3.5-.94l16.8-9.7A3.993 3.993 0 0 0 58 42.92V32h3a1 1 0 0 0 .89-1.45ZM10 58H4V46h6Zm8 2h-6V44h6Zm22-41v-2h2.35a1.008 1.008 0 0 0 .96-.71 2.374 2.374 0 0 1 .17-.41 1 1 0 0 0-.18-1.17l-1.67-1.66 1.42-1.42 1.66 1.67a1 1 0 0 0 1.17.18 2.374 2.374 0 0 1 .41-.17 1.008 1.008 0 0 0 .71-.96V10h2v2.35a1.008 1.008 0 0 0 .71.96 2.374 2.374 0 0 1 .41.17 1 1 0 0 0 1.17-.18l1.66-1.67 1.42 1.42-1.67 1.66a1 1 0 0 0-.18 1.17 2.374 2.374 0 0 1 .17.41 1.008 1.008 0 0 0 .96.71H56v2h-2.35a1.008 1.008 0 0 0-.96.71 2.374 2.374 0 0 1-.17.41 1 1 0 0 0 .18 1.17l.72.71H42.58l.72-.71a1 1 0 0 0 .18-1.17 2.374 2.374 0 0 1-.17-.41 1.008 1.008 0 0 0-.96-.71Zm1 8.24 2.11 4.21A.977.977 0 0 0 44 32h12v11.28c-.1.05-.21.1-.31.15l-9.75 5.63a3.982 3.982 0 0 0-2.26-1.63L41 46.72ZM22 11a6.981 6.981 0 0 1 3-5.75V11a1 1 0 0 0 .45.83l3 2a.963.963 0 0 0 1.1 0l3-2A1 1 0 0 0 33 11V5.25a7 7 0 0 1 .66 10.97A4.919 4.919 0 0 0 32 19.93V22h-2v-3a1 1 0 0 0-2 0v3h-2v-2.07a4.945 4.945 0 0 0-1.65-3.71A6.957 6.957 0 0 1 22 11Zm-1.38 19 3-6h14.76l-3 6ZM39 27.24v18.94l-10.24-2.74a6.958 6.958 0 0 0-3.51-.03l-1.25.31V32h12a.977.977 0 0 0 .89-.55ZM59.41 45.9a2 2 0 0 1-.72 2.73l-16.8 9.7a4.982 4.982 0 0 1-2.5.67H24.42a4.956 4.956 0 0 1-2.24-.53L20 57.38v-10.6l5.73-1.43a4.964 4.964 0 0 1 2.51.02l14.92 4a1.991 1.991 0 0 1 .48 3.66 1.95 1.95 0 0 1-1.51.2l-11.93-3.2a1 1 0 0 0-.52 1.94l11.93 3.19a4.072 4.072 0 0 0 1.04.14 3.916 3.916 0 0 0 1.99-.54 3.975 3.975 0 0 0 1.87-2.43 4.118 4.118 0 0 0 .11-1.35l10.07-5.81a2.025 2.025 0 0 1 2.72.73ZM44.62 30l-3-6h14.76l3 6Z"
                                                    fill="#000000" opacity="1" data-original="#000000"></path>
                                                <path
                                                    d="M52 18a4 4 0 1 0-4 4 4 4 0 0 0 4-4Zm-4 2a2 2 0 1 1 2-2 2 2 0 0 1-2 2Z"
                                                    fill="#000000" opacity="1" data-original="#000000"></path>
                                            </g>
                                        </svg>
                                        <span class="ps-3">SERVICES</span>
                                    </a>
                                </li>
                                <li class="mb-4">
                                    <a href="{{ route('allBlog') }}">
                                        <svg xmlns="http://www.w3.org/2000/svg" version="1.1"
                                            xmlns:xlink="http://www.w3.org/1999/xlink" width="30" height="30"
                                            x="0" y="0" viewBox="0 0 682.667 682.667"
                                            style="enable-background:new 0 0 512 512" xml:space="preserve">
                                            <g>
                                                <defs>
                                                    <clipPath id="a" clipPathUnits="userSpaceOnUse">
                                                        <path d="M0 512h512V0H0Z" fill="#000000" opacity="1"
                                                            data-original="#000000"></path>
                                                    </clipPath>
                                                </defs>
                                                <g clip-path="url(#a)"
                                                    transform="matrix(1.33333 0 0 -1.33333 0 682.667)">
                                                    <path d="M0 0v133.264c0 18.218 14.768 32.986 32.986 32.986H89"
                                                        style="stroke-width:15;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1"
                                                        transform="translate(27 151)" fill="none" stroke="#000000"
                                                        stroke-width="15" stroke-linecap="round"
                                                        stroke-linejoin="round" stroke-miterlimit="10"
                                                        stroke-dasharray="none" stroke-opacity=""
                                                        data-original="#000000"></path>
                                                    <path d="M0 0h58.014C76.231 0 91-14.768 91-32.986V-258.5h-458v52.25"
                                                        style="stroke-width:15;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1"
                                                        transform="translate(394 317.25)" fill="none"
                                                        stroke="#000000" stroke-width="15" stroke-linecap="round"
                                                        stroke-linejoin="round" stroke-miterlimit="10"
                                                        stroke-dasharray="none" stroke-opacity=""
                                                        data-original="#000000"></path>
                                                    <path d="M0 0h63v-225.668h-398V0h61"
                                                        style="stroke-width:15;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1"
                                                        transform="translate(392 284.418)" fill="none"
                                                        stroke="#000000" stroke-width="15" stroke-linecap="round"
                                                        stroke-linejoin="round" stroke-miterlimit="10"
                                                        stroke-dasharray="none" stroke-opacity=""
                                                        data-original="#000000"></path>
                                                    <path
                                                        d="M0 0h-372.861C-389.23 0-402.5 13.27-402.5 29.639V48h497V29.639C94.5 13.27 81.23 0 64.861 0H42"
                                                        style="stroke-width:15;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1"
                                                        transform="translate(410 10.75)" fill="none"
                                                        stroke="#000000" stroke-width="15" stroke-linecap="round"
                                                        stroke-linejoin="round" stroke-miterlimit="10"
                                                        stroke-dasharray="none" stroke-opacity=""
                                                        data-original="#000000"></path>
                                                    <path
                                                        d="M0 0v-7.605C0-16.936 7.564-24.5 16.895-24.5h31.21C57.436-24.5 65-16.936 65-7.605V0Z"
                                                        style="stroke-width:15;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1"
                                                        transform="translate(223.5 58.75)" fill="none"
                                                        stroke="#000000" stroke-width="15" stroke-linecap="round"
                                                        stroke-linejoin="round" stroke-miterlimit="10"
                                                        stroke-dasharray="none" stroke-opacity=""
                                                        data-original="#000000"></path>
                                                    <path d="M0 0c25.434 0 46.053 20.618 46.053 46.053V159"
                                                        style="stroke-width:15;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1"
                                                        transform="translate(344.947 197.25)" fill="none"
                                                        stroke="#000000" stroke-width="15" stroke-linecap="round"
                                                        stroke-linejoin="round" stroke-miterlimit="10"
                                                        stroke-dasharray="none" stroke-opacity=""
                                                        data-original="#000000"></path>
                                                    <path
                                                        d="M0 0c-3.236.72-6.599 1.1-10.052 1.1h-180.895c-25.434 0-46.052-20.618-46.052-46.052v-106.895c0-25.434 20.618-46.053 46.052-46.053v-64l64 64h77.948"
                                                        style="stroke-width:15;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1"
                                                        transform="translate(355 395.15)" fill="none"
                                                        stroke="#000000" stroke-width="15" stroke-linecap="round"
                                                        stroke-linejoin="round" stroke-miterlimit="10"
                                                        stroke-dasharray="none" stroke-opacity=""
                                                        data-original="#000000"></path>
                                                    <path
                                                        d="m0 0-41.966-14.979 1.042 44.546 127.14 175.974c8.165 11.301 23.945 13.843 35.246 5.679v0c11.3-8.165 13.843-23.945 5.678-35.246z"
                                                        style="stroke-width:15;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1"
                                                        transform="translate(339.171 285.247)" fill="none"
                                                        stroke="#000000" stroke-width="15" stroke-linecap="round"
                                                        stroke-linejoin="round" stroke-miterlimit="10"
                                                        stroke-dasharray="none" stroke-opacity=""
                                                        data-original="#000000"></path>
                                                    <path
                                                        d="m0 0 40.679-29.39c12.053-8.708 14.764-25.538 6.056-37.591L14.657-111.38"
                                                        style="stroke-width:15;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1"
                                                        transform="translate(407.047 463.836)" fill="none"
                                                        stroke="#000000" stroke-width="15" stroke-linecap="round"
                                                        stroke-linejoin="round" stroke-miterlimit="10"
                                                        stroke-dasharray="none" stroke-opacity=""
                                                        data-original="#000000"></path>
                                                    <path d="m0 0 40.924-29.567"
                                                        style="stroke-width:15;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1"
                                                        transform="translate(298.247 314.814)" fill="none"
                                                        stroke="#000000" stroke-width="15" stroke-linecap="round"
                                                        stroke-linejoin="round" stroke-miterlimit="10"
                                                        stroke-dasharray="none" stroke-opacity=""
                                                        data-original="#000000"></path>
                                                    <path d="M0 0h83"
                                                        style="stroke-width:15;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1"
                                                        transform="translate(176 270.267)" fill="none"
                                                        stroke="#000000" stroke-width="15" stroke-linecap="round"
                                                        stroke-linejoin="round" stroke-miterlimit="10"
                                                        stroke-dasharray="none" stroke-opacity=""
                                                        data-original="#000000"></path>
                                                    <path d="M0 0h83"
                                                        style="stroke-width:15;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1"
                                                        transform="translate(176 323.241)" fill="none"
                                                        stroke="#000000" stroke-width="15" stroke-linecap="round"
                                                        stroke-linejoin="round" stroke-miterlimit="10"
                                                        stroke-dasharray="none" stroke-opacity=""
                                                        data-original="#000000"></path>
                                                </g>
                                            </g>
                                        </svg>
                                        <span class="ps-3">BLOG</span>
                                    </a>
                                </li>
                            </ul>
                            <div class="text-dark order-2 order-md-1 mt-5 py-5">
                                <a href="{{ route('reseller.login') }}" target="_blank"
                                    class="text-muted fw-bold me-1 text-hover-primary">Login</a>
                                <a href="{{ route('reseller.register') }}" target="_blank"
                                    class="text-muted fw-bold me-1 text-hover-primary">Register</a>
                            </div>
                            <div>
                                <span>{{ !empty($site->address_line_one) ? $site->address_line_one : '' }}
                                    {{ !empty($site->address_line_two) ? ', ' . $site->address_line_two : '' }}
                                    <p>{{ !empty($site->contact_email) ? $site->contact_email : '' }}</p>
                                    <p>{{ !empty($site->phone_one) ? $site->phone_one : '' }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>

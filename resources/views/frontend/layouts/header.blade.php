<header class="main-header menu-absolute no-border">
    <!-- Start Header-Upper-->
    <div class="header-upper">
        <div class="container container-1660 clearfix">
            <div class="header-inner py-20 rel d-flex align-items-center">
                <div class="logo-outer">
                    <div class="logo">
                        <a href="{{ route('homePage') }}">
                            <img width="100px" src="{{ (!empty($site->system_logo_white) && file_exists(public_path('storage/webSetting/systemLogoWhite/' . $site->system_logo_white))) ? asset('storage/webSetting/systemLogoWhite/' . $site->system_logo_white) : asset('https://i.ibb.co/BNBTVN4/logo.png') }}" alt="Logo" title="Logo" />
                        </a>
                    </div>
                </div>


                <div class="nav-outer ms-lg-5 ps-lg-5 clearfix">
                    <!-- Main Menu -->
                    <nav class="main-menu navbar-expand-lg">
                        <div class="navbar-header py-10">
                            <div class="mobile-logo">
                                <a href="{{ route('homePage') }}">
                                    <img width="60px" src="{{ (!empty($site->system_logo_white) && file_exists(public_path('storage/webSetting/systemLogoWhite/' . $site->system_logo_white))) ? asset('storage/webSetting/systemLogoWhite/' . $site->system_logo_white) : asset('https://i.ibb.co/BNBTVN4/logo.png') }}"
                                    alt="Logo"
                                        title="Logo" />
                                </a>
                            </div>
                            <!-- Toggle Button -->
                            <button type="button" class="navbar-toggle" data-bs-toggle="collapse"
                                data-bs-target=".navbar-collapse">
                                <span class="icon-bar bg-dark"></span>
                                <span class="icon-bar bg-dark"></span>
                                <span class="icon-bar bg-dark"></span>
                            </button>
                        </div>
                        <div class="navbar-collapse collapse clearfix">
                            <ul class="navigation onepage clearfix">
                                <li><a href="{{ route('homePage') }}">HOME</a></li>
                                <li class="dropdown position-static">
                                    <a href="{{ route('qrCode') }}"
                                        onclick="window.location.href = '{{ route('qrCode') }}'; return false;">QR
                                        CODES</a>
                                    <ul class="w-100" style="display: none;">
                                        <div class="row">
                                            <div class="col-lg-4">
                                                <div class="card border-0 shadow-none ps-3"
                                                    style="background-color:#ddefff; height: 28rem">
                                                    <div class="card-body">
                                                        <h6>PRODUCT</h6>
                                                        <h3>QR Code Generator</h3>
                                                        <p>Elevate your networking game with the precision of QR codes.
                                                        </p>
                                                        <div>
                                                            <img class="img-fluid"
                                                                src="https://www.uniqode.com/_next/static/media/find-campaign.a5267f65.png"
                                                                alt="QR Code Generator">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="card border-0 shadow-none">
                                                    <div class="card-body">
                                                        <h6>Information</h6>
                                                        <div class="pt-50">
                                                            <a href="{{ route('qrGuide') }}" class="d-flex align-items-center mb-2">
                                                                <div class="pe-2">
                                                                    <i class="fas fa-arrow-right menu_icons"
                                                                        aria-hidden="true"></i>
                                                                </div>
                                                                <div>
                                                                    <p class="m-0 p-0">QR Code Guide</p>
                                                                </div>
                                                            </a>
                                                            <a href="" class="d-flex align-items-center mb-2">
                                                                <div class="pe-2">
                                                                    <i class="fas fa-arrow-right menu_icons"
                                                                        aria-hidden="true"></i>
                                                                </div>
                                                                <div>
                                                                    <p class="m-0 p-0">Digital QR Code
                                                                    </p>
                                                                </div>
                                                            </a>
                                                            <a href="" class="d-flex align-items-center mb-2">
                                                                <div class="pe-2">
                                                                    <i class="fas fa-arrow-right menu_icons"
                                                                        aria-hidden="true"></i>
                                                                </div>
                                                                <div>
                                                                    <p class="m-0 p-0">Statistic QR</p>
                                                                </div>
                                                            </a>
                                                            <a href="" class="d-flex align-items-center mb-2">
                                                                <div class="pe-2">
                                                                    <i class="fas fa-arrow-right menu_icons"
                                                                        aria-hidden="true"></i>
                                                                </div>
                                                                <div>
                                                                    <p class="m-0 p-0">Dynamic QR</p>
                                                                </div>
                                                            </a>
                                                        </div>
                                                        <div>
                                                            <p class="pt-3">Scan, connect, explore. QR code business
                                                                cards unlock a world of information with a simple scan,
                                                                making networking efficient.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="card border-0 shadow-none ps-3"
                                                    style="background-color:#ddefff; height: 28rem">
                                                    <div class="card-body">
                                                        <h6>Template</h6>
                                                        <h3>Some QR Code Template</h3>
                                                        <p>Empower your networking endeavors with our advanced QR Code
                                                            Generator, simplifying connections and expanding
                                                            opportunities effortlessly.</p>
                                                        <div class="d-flex">
                                                            <img class="img-fluid me-2" width="150px"
                                                                src="https://cdn1.vectorstock.com/i/1000x1000/10/60/qr-code-sample-vector-12061060.jpg"
                                                                alt="Some QR Code Template">
                                                            <img class="img-fluid me-2" width="150px"
                                                                src="https://cdn1.vectorstock.com/i/1000x1000/10/60/qr-code-sample-vector-12061060.jpg"
                                                                alt="Some QR Code Template">
                                                            <img class="img-fluid" width="150px"
                                                                src="https://cdn1.vectorstock.com/i/1000x1000/10/60/qr-code-sample-vector-12061060.jpg"
                                                                alt="Some QR Code Template">
                                                        </div>
                                                        <div class="mt-4">
                                                            <a href="{{ route('pricing') }}"
                                                                class="btn btn-primary text-white">Start Your Free
                                                                Trial</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </ul>
                                </li>
                                <li class="dropdown position-static">
                                    <a href="{{ route('digitalCard') }}"
                                        onclick="window.location.href = '{{ route('digitalCard') }}'; return false;">DIGITAL
                                        BUSINESS CARDS</a>
                                    <ul class="w-100" style="display: none;">
                                        <div class="row">
                                            <div class="col-lg-4">
                                                <div class="card border-0 shadow-none ps-3"
                                                    style="background-color:#ddefff; height: 28rem">
                                                    <div class="card-body">
                                                        <h6>PRODUCT</h6>
                                                        <h3>NFC Card Generator</h3>
                                                        <p>Measure your networking with digital business cards</p>
                                                        <div>
                                                            <img class="img-fluid"
                                                                src="https://www.uniqode.com/videos/Header/header-qr.png"
                                                                alt="Some NFC Template">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="card border-0 shadow-none ps-3" style="height: 28rem">
                                                    <div class="card-body">
                                                        <h6>Template</h6>
                                                        <h3>Some NFC Template</h3>
                                                        <p>Measure your networking with digital business cards</p>
                                                        <div class="d-flex">
                                                            <img class="img-fluid me-2"
                                                                src="https://d33v4339jhl8k0.cloudfront.net/docs/assets/62a7296313dd0f2bb7daeac5/images/63773acdbedde91b3d8c95ff/file-WiV9vxVvCU.png"
                                                                alt="Some NFC Template">
                                                        </div>
                                                        <div class="mt-4">
                                                            <a href="" 
                                                                class="btn btn-primary text-white">Start Your Free
                                                                Trial</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="card border-0 shadow-none">
                                                    <div class="card-body">
                                                        <h6>Information</h6>
                                                        <div class="pt-50">
                                                            <a href="{{ route('cardGuide') }}"
                                                                class="d-flex align-items-center mb-2">
                                                                <div class="pe-2">
                                                                    <i class="fas fa-arrow-right menu_icons"
                                                                        aria-hidden="true"></i>
                                                                </div>
                                                                <div>
                                                                    <p class="m-0 p-0">Card Buying Guide</p>
                                                                </div>
                                                            </a>
                                                            <a href="{{ route('digitalCard') }}"
                                                                class="d-flex align-items-center mb-2">
                                                                <div class="pe-2">
                                                                    <i class="fas fa-arrow-right menu_icons"
                                                                        aria-hidden="true"></i>
                                                                </div>
                                                                <div>
                                                                    <p class="m-0 p-0">Digital Business Cards
                                                                    </p>
                                                                </div>
                                                            </a>
                                                            <a href="{{ route('staticNfc') }}"
                                                                class="d-flex align-items-center mb-2">
                                                                <div class="pe-2">
                                                                    <i class="fas fa-arrow-right menu_icons"
                                                                        aria-hidden="true"></i>
                                                                </div>
                                                                <div>
                                                                    <p class="m-0 p-0">Statistic NFC</p>
                                                                </div>
                                                            </a>
                                                            <a href="{{ route('dynamicNfc') }}"
                                                                class="d-flex align-items-center mb-2">
                                                                <div class="pe-2">
                                                                    <i class="fas fa-arrow-right menu_icons"
                                                                        aria-hidden="true"></i>
                                                                </div>
                                                                <div>
                                                                    <p class="m-0 p-0">Dynamic NFC</p>
                                                                </div>
                                                            </a>
                                                        </div>
                                                        <div>
                                                            <p class="pt-3">Tap, connect, impress. NFC business cards
                                                                bridge the physical and digital worlds seamlessly,
                                                                leaving a lasting impression effortlessly.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </ul>
                                </li>
                                <li><a href="{{ route('pricing') }}">PRICING</a></li>
                                <li><a href="{{ route('services') }}">Services</a></li>
                            </ul>
                        </div>
                    </nav>
                    <!-- Main Menu End-->
                </div>

                <!-- Nav Search -->
                <div class="nav-search ms-xl-2 ms-4 me-lg-auto py-10">
                    <button class="fa-solid fa-magnifying-glass"></button>
                    <form action="#" class="hide">
                        <input type="text" placeholder="Search" class="searchbox" required />
                        <button type="submit" class="searchbutton fa-solid fa-magnifying-glass"></button>
                    </form>
                </div>

                <!-- Menu Button -->
                <div class="menu-btns ms-lg-auto">
                    @auth
                        <a href="{{ route('dashboard') }}" class="light-btn"><i class="fas fa-user me-1"></i> My
                            Dashboard</a>
                    @else
                        <a href="{{ route('register') }}" class="light-btn">Sign Up</a>
                    @endauth
                    <a href="{{ route('contact') }}" class="theme-btn style-two">Get Started
                        <i class="fa-solid fa-arrow-right"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!--End Header Upper-->
</header>

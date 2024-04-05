<header class="main-header menu-absolute no-border">
    <!-- Start Header-Upper-->
    <div class="header-upper">
        <div class="container container-1660 clearfix">
            <div class="header-inner py-20 rel d-flex align-items-center">
                <div class="logo-outer">
                    <div class="logo">
                        <a href="{{ route('homePage') }}">
                            <img width="100px" src="https://i.ibb.co/BNBTVN4/logo.png" alt="Logo" title="Logo" />
                        </a>
                    </div>
                </div>

                <div class="nav-outer ms-lg-5 ps-lg-5 clearfix">
                    <!-- Main Menu -->
                    <nav class="main-menu navbar-expand-lg">
                        <div class="navbar-header py-10">
                            <div class="mobile-logo">
                                <a href="{{ route('homePage') }}">
                                    <img width="60px" src="https://i.ibb.co/BNBTVN4/logo.png" alt="Logo"
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
                                <li><a href="{{ route('qrCode') }}">QR CODES</a></li>
                                <li>
                                    <a href="{{ route('digitalCard') }}">DIGITAL BUSINESS CARDS</a>
                                </li>
                                <li class="dropdown position-static">
                                    <a href="#">pages</a>
                                    <ul class="w-100" style="display: none;">
                                        <li><a href="about.html">About Us</a></li>
                                        <li><a href="faqs.html">faqs</a></li>
                                        <li><a href="team.html">Team Members</a></li>
                                        <li><a href="pricing.html">Pricing Plan</a></li>
                                        <li><a href="contact.html">Contact us</a></li>
                                        <li><a href="coming-soon.html">Coming Soon</a></li>
                                        <li><a href="404.html">404 error</a></li>
                                    </ul>
                                    <div class="dropdown-btn">
                                        <span class="far fa-angle-down"></span>
                                    </div>
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
                        <input type="text" placeholder="Search" class="searchbox" required="" />
                        <button type="submit" class="searchbutton fa-solid fa-magnifying-glass"></button>
                    </form>
                </div>

                <!-- Menu Button -->
                <div class="menu-btns ms-lg-auto">
                    @auth
                        <a href="{{ route('dashboard') }}" class="light-btn"><i class="fas fa-user me-3"></i> My
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

<x-frontend-app-layout :title="'GoFlixza || QR Codes for Every Need - Create Yours Today'">
    <section id="about" class="hero-area-nine pt-165 rpt-150 pb-130 rpb-100 rel z-1">
        <div class="container"> 
            <div class="row gap-70 align-items-center">
                <div class="col-lg-6">
                    <div class="hero-content style-nine mb-50 rmb-55" data-aos="fade-up" data-aos-duration="1500"
                        data-aos-offset="50">
                        <h1 data-aos="fade-up" data-aos-delay="50" data-aos-duration="1500" data-aos-offset="50">
                            Beyond the Business Card: Secure Tools for Sharing Links & Contacts in the Digital Age
                        </h1>
                        <p>
                            From Real World Encounters to Digital Connections: Embracing
                            URL with QR Codes and Digital Business Cards
                        </p>
                        {{-- <form class="newsletter-form mt-40" action="{{route('newsletter.store')}}" method="POST">
                            @csrf
                            <label for="email-address"><i class="fas fa-envelope"></i></label>
                            <input id="email-address" type="email" name="email" placeholder="Email Address" required/>
                            <button type="submit">
                                <b>Subscribe Now <i class="fas fa-arrow-right"></i></b>
                            </button>
                        </form> --}}
                        <div>
                            <a href="{{ route('register') }}" class="theme-btn rounded-0 style-two">Start Trial</a>
                            <a href="{{ route('pricing') }}" class="theme-btn rounded-0 style-one">View Pricing</a>
                        </div>
                        <ul class="icon-list pt-15">
                            <li>
                                <i class="fa-regular fa-circle-check"></i> Free 14-day trial
                            </li>
                            <li>
                                <i class="fa-regular fa-circle-check"></i> No credit card
                                required
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100" data-aos-duration="1500"
                    data-aos-offset="50">
                    <a href="{{ route('pricing') }}">
                    <div class="hero-seven-image">
                            <img src="{{ asset('frontend') }}/assets/images/shapes/hero-seven.png" alt="Hero" />
                        </div>
                    </a>
                </div>
            </div>
        </div>

        <div class="hero-nine-shapes">
            <div class="shape one">
                <img src="{{ asset('frontend') }}/assets/images/shapes/hero-nine.png" alt="Shape" />
            </div>
            <div class="shape two">
                <img src="{{ asset('frontend') }}/assets/images/shapes/hero-nine.png" alt="Shape" />
            </div>
        </div>
    </section>
    <!-- Hero area End -->

    <!-- Client Logo Area Start -->
    <section class="client-logo-area pt-100 pb-90 rpb-60 rel z-2">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-8 col-lg-9 col-md-11">
                    <div class="section-title text-center mb-60" data-aos="fade-up" data-aos-duration="1500"
                        data-aos-offset="50">
                        <span class="subtitle-three mb-10">Meet Our Global Clients</span>
                        <h2>We’ve 1253+ Global Clients & lot’s of Project Complete</h2>
                    </div>
                </div>
            </div>
            <div
                class="row align-items-center justify-content-center row-cols-xl-5 row-cols-lg-4 row-cols-md-3 row-cols-2">
                <div class="col">
                    <div class="client-logo-item style-four py-45 rpy-25" data-aos="fade-up" data-aos-duration="1500"
                        data-aos-offset="50">
                        <a href="#"><img src="{{ asset('frontend') }}/assets/images/client-logos/client-logo1.png"
                                alt="Client Logo" /></a>
                    </div>
                </div>
                <div class="col">
                    <div class="client-logo-item style-four py-65 rpy-25" data-aos="fade-up" data-aos-delay="50"
                        data-aos-duration="1500" data-aos-offset="50">
                        <a href="#"><img src="{{ asset('frontend') }}/assets/images/client-logos/client-logo2.png"
                                alt="Client Logo" /></a>
                    </div>
                </div>
                <div class="col">
                    <div class="client-logo-item style-four py-45 rpy-25" data-aos="fade-up" data-aos-delay="100"
                        data-aos-duration="1500" data-aos-offset="50">
                        <a href="#"><img src="{{ asset('frontend') }}/assets/images/client-logos/client-logo3.png"
                                alt="Client Logo" /></a>
                    </div>
                </div>
                <div class="col">
                    <div class="client-logo-item style-four py-65 rpy-25" data-aos="fade-up" data-aos-delay="150"
                        data-aos-duration="1500" data-aos-offset="50">
                        <a href="#"><img src="{{ asset('frontend') }}/assets/images/client-logos/client-logo4.png"
                                alt="Client Logo" /></a>
                    </div>
                </div>
                <div class="col">
                    <div class="client-logo-item style-four py-45 rpy-25" data-aos="fade-up" data-aos-delay="200"
                        data-aos-duration="1500" data-aos-offset="50">
                        <a href="#"><img src="{{ asset('frontend') }}/assets/images/client-logos/client-logo5.png"
                                alt="Client Logo" /></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Client Logo Area End -->

    <!-- Tab Area Start -->
    <section class="advanced-tab-area pb-130 rpb-100">
        <div class="container">
            <ul class="nav advanced-tab mb-55" role="tablist" data-aos="fade-up" data-aos-duration="1500"
                data-aos-offset="50">
                <li>
                    <button class="nav-link" data-bs-toggle="tab" data-bs-target="#website-qr">
                        <i class="fas fa-arrow-right"></i> Website
                    </button>
                </li>
                <li>
                    <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#form-scan">
                        <i class="fas fa-arrow-right"></i> Form Scan
                    </button>
                </li>
                <li>
                    <button class="nav-link" data-bs-toggle="tab" data-bs-target="#social_contact">
                        <i class="fas fa-arrow-right"></i> Social Contact
                    </button>
                </li>
                <li>
                    <button class="nav-link" data-bs-toggle="tab" data-bs-target="#mobleapp">
                        <i class="fas fa-arrow-right"></i> Mobile App
                    </button>
                </li>
            </ul>
            <div class="tab-content">
                <div class="tab-pane fade" id="website-qr">
                    <div class="row align-items-center justify-content-between">
                        <div class="col-lg-6">
                            <div class="content rmb-55">
                                <div class="section-title mb-30">
                                    <h2>
                                        Connect Anywhere: Transforming Physical Encounters into
                                        Digital Links
                                    </h2>
                                </div>
                                <p>
                                    Experience the seamless transition from face-to-face
                                    interactions to digital connections with our innovative QR
                                    code integration. Convert your website link into a dynamic
                                    QR code, ready to be shared effortlessly on digital
                                    business cards and beyond. Connect with ease, whether in
                                    the real world or the digital realm, and expand your
                                    network without boundaries. Create your personalized QR
                                    code now and unlock endless possibilities for connectivity
                                </p>
                                <ul class="icon-list mt-20 mb-40">
                                    <li>
                                        <i class="fa-regular fa-square-check"></i> Get AI Power
                                        Chat Files
                                    </li>
                                    <li>
                                        <i class="fa-regular fa-square-check"></i> Connect
                                        Securely
                                    </li>
                                    <li>
                                        <i class="fa-regular fa-square-check"></i> Message
                                        Experience
                                    </li>
                                </ul>
                                <a href="{{ route('services') }}" class="theme-btn style-two">Learn More <i
                                        class="fas fa-arrow-right"></i></a>
                            </div>
                        </div>
                        <div class="col-xl-5 col-lg-6">
                            <div class="image">
                                <img src="https://i.ibb.co/tsyLp2w/a-human-hand-is-holding-a-smartphone-scan-the-qr-code-phone-screen-and-fingers-link-to-the-website-v.jpg"
                                    alt="Tab" />
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade show active" id="form-scan">
                    <div class="row align-items-center justify-content-between">
                        <div class="col-xl-5 col-lg-6">
                            <div class="image" data-aos="fade-left" data-aos-duration="1500" data-aos-offset="50">
                                <img src="https://i.ibb.co/fSxh5S1/qr-code-scanning-concept-with-characters-23-2148627986.jpg"
                                    alt="Tab" />
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="content rmt-55" data-aos="fade-right" data-aos-duration="1500"
                                data-aos-offset="50">
                                <div class="section-title mb-30">
                                    <h2>
                                        Scan & Connect: Streamlining Networking with QR Code
                                        Forms
                                    </h2>
                                </div>
                                <p>
                                    Simplify networking with our QR code forms,
                                    revolutionizing the way you gather information and connect
                                    with others. Seamlessly capture contact details, feedback,
                                    or survey responses by scanning a QR code, eliminating the
                                    hassle of manual data entry. Whether at events,
                                    conferences, or in-store interactions, streamline your
                                    processes and enhance engagement with our intuitive QR
                                    code forms. Start optimizing your data collection
                                    experience today!
                                </p>
                                <ul class="icon-list mt-20 mb-40">
                                    <li>
                                        <i class="fa-regular fa-square-check"></i> Get AI Power
                                        Chat Files
                                    </li>
                                    <li>
                                        <i class="fa-regular fa-square-check"></i> Connect
                                        Securely
                                    </li>
                                    <li>
                                        <i class="fa-regular fa-square-check"></i> Message
                                        Experience
                                    </li>
                                </ul>
                                <a href="{{ route('services') }}" class="theme-btn style-two">Learn More <i
                                        class="fas fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="social_contact">
                    <div class="row align-items-center justify-content-between">
                        <div class="col-lg-6">
                            <div class="content rmb-55">
                                <div class="section-title mb-30">
                                    <h2>
                                        Socialize on the Go: QR Codes for Instant Social
                                        Connections
                                    </h2>
                                </div>
                                <p>
                                    Stay connected effortlessly with our QR codes for social
                                    contact. Easily share your social media profiles, whether
                                    it's LinkedIn, Instagram, or Twitter, by simply scanning a
                                    QR code. Instantly connect with new friends, colleagues,
                                    or potential collaborators, no matter where you are.
                                    Enhance your networking game and make lasting connections
                                    with ease. Start sharing your social presence in a snap
                                    with our QR code solutions!
                                </p>
                                <ul class="icon-list mt-20 mb-40">
                                    <li>
                                        <i class="fa-regular fa-square-check"></i> Get AI Power
                                        Chat Files
                                    </li>
                                    <li>
                                        <i class="fa-regular fa-square-check"></i> Connect
                                        Securely
                                    </li>
                                    <li>
                                        <i class="fa-regular fa-square-check"></i> Message
                                        Experience
                                    </li>
                                </ul>
                                <a href="{{ route('services') }}" class="theme-btn style-two">Learn More <i
                                        class="fas fa-arrow-right"></i></a>
                            </div>
                        </div>
                        <div class="col-xl-5 col-lg-6">
                            <div class="image">
                                <img src="https://i.ibb.co/QNWcSXM/qr-code-scanning-concept-with-characters-23-2148629215.jpg"
                                    alt="Tab" />
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="mobleapp">
                    <div class="row align-items-center justify-content-between">
                        <div class="col-xl-5 col-lg-6">
                            <div class="image">
                                <img src="https://i.ibb.co/9YsVDsj/89191cover2.jpg" alt="Tab" />
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="content rmt-55">
                                <div class="section-title mb-30">
                                    <h2>
                                        App Access Made Easy: QR Codes for Instant Mobile App
                                        Downloads
                                    </h2>
                                </div>
                                <p>
                                    Experience the convenience of instant app access with our
                                    QR code technology. Simply scan a QR code to download and
                                    install mobile apps effortlessly. Say goodbye to searching
                                    through app stores and hello to instant gratification.
                                    Whether it's for events, promotions, or exclusive offers,
                                    our QR codes streamline the mobile app download process.
                                    Embrace the future of app access and make downloading a
                                    breeze with our QR code solutions!
                                </p>
                                <ul class="icon-list mt-20 mb-40">
                                    <li>
                                        <i class="fa-regular fa-square-check"></i> Get AI Power
                                        Chat Files
                                    </li>
                                    <li>
                                        <i class="fa-regular fa-square-check"></i> Connect
                                        Securely
                                    </li>
                                    <li>
                                        <i class="fa-regular fa-square-check"></i> Message
                                        Experience
                                    </li>
                                </ul>
                                <a href="{{ route('services') }}" class="theme-btn style-two">Learn More <i
                                        class="fas fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Tab Area End -->

    <!-- Services Area Start -->
    <section id="services" class="service-area-nine bgc-black pt-130 rpt-100 pb-100 rpb-70">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-9 col-lg-11">
                    <div class="section-title text-center text-white mb-55" data-aos="fade-up"
                        data-aos-duration="1500" data-aos-offset="50">
                        <h2>
                            QR Connect: Your Bridge to Seamless Digital Interaction and
                            Networking Experiences
                        </h2>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-xl-3 col-lg-4 col-sm-6">
                    <div class="iconic-box style-three" data-aos="fade-up" data-aos-duration="1500"
                        data-aos-offset="50">
                        <div class="icon">
                            <img src="{{ asset('frontend') }}/assets/images/icons/iconic-box1.png" alt="Icon" />
                        </div>
                        <div class="content">
                            <h5><a href="service-details.html">AppLink</a></h5>
                            <p>
                                Drive app downloads effortlessly by generating QR codes that
                                instantly direct users to your mobile app on app stores.
                            </p>
                        </div>
                        <div class="bg">
                            <img src="{{ asset('frontend') }}/assets/images/shapes/iconic-box-three-bg.png"
                                alt="Shape" />
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-sm-6">
                    <div class="iconic-box style-three" data-aos="fade-up" data-aos-delay="50"
                        data-aos-duration="1500" data-aos-offset="50">
                        <div class="icon">
                            <img src="{{ asset('frontend') }}/assets/images/icons/iconic-box2.png" alt="Icon" />
                        </div>
                        <div class="content">
                            <h5>
                                <a href="service-details.html">LocationLink</a>
                            </h5>
                            <p>
                                Enable quick access to specific locations by creating QR
                                codes that lead users directly to maps or navigation apps.
                            </p>
                        </div>
                        <div class="bg">
                            <img src="{{ asset('frontend') }}/assets/images/shapes/iconic-box-three-bg.png"
                                alt="Shape" />
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-sm-6">
                    <div class="iconic-box style-three" data-aos="fade-up" data-aos-delay="100"
                        data-aos-duration="1500" data-aos-offset="50">
                        <div class="icon">
                            <img src="{{ asset('frontend') }}/assets/images/icons/iconic-box3.png" alt="Icon" />
                        </div>
                        <div class="content">
                            <h5><a href="service-details.html">CallCode</a></h5>
                            <p>
                                Enhance accessibility and convenience by generating QR codes
                                that initiate phone calls when scanned, enabling users to.
                            </p>
                        </div>
                        <div class="bg">
                            <img src="{{ asset('frontend') }}/assets/images/shapes/iconic-box-three-bg.png"
                                alt="Shape" />
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-sm-6">
                    <div class="iconic-box style-three" data-aos="fade-up" data-aos-delay="150"
                        data-aos-duration="1500" data-aos-offset="50">
                        <div class="icon">
                            <img src="{{ asset('frontend') }}/assets/images/icons/iconic-box4.png" alt="Icon" />
                        </div>
                        <div class="content">
                            <h5><a href="service-details.html">PageLink</a></h5>
                            <p>
                                Drive traffic to your business page or website by creating
                                QR codes that lead users directly to your online presence.
                            </p>
                        </div>
                        <div class="bg">
                            <img src="{{ asset('frontend') }}/assets/images/shapes/iconic-box-three-bg.png"
                                alt="Shape" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Services Area End -->

    <!-- About Area Start -->
    <section id="about" class="about-area-nine bgc-black pb-110 rpb-80 rel z-1">
        <div class="container">
            <div class="row gap-90 align-items-center">
                <div class="col-lg-6">
                    <div class="about-content-nine text-white rmb-35" data-aos="fade-right" data-aos-duration="1500"
                        data-aos-offset="50">
                        <div class="section-title mb-30">
                            <h2>Explore More: Dive Deeper into Our Services</h2>
                        </div>
                        <p>
                            our services, empowering you to make informed decisions and
                            maximize the benefits of our QR code solutions. Whether you're
                            seeking to understand the nuances of app downloads, location
                            sharing, call initiation, or business page promotion
                        </p>
                        <div class="feature-icon-box mt-35">
                            <div class="icon">
                                <i class="fas fa-check"></i>
                            </div>
                            <div class="content">
                                <h5>Boost Interaction</h5>
                                <p>
                                    Utilize QR codes to facilitate instant engagement with
                                    your audience, whether it's through app downloads.
                                </p>
                            </div>
                        </div>
                        <div class="feature-icon-box">
                            <div class="icon">
                                <i class="fas fa-check"></i>
                            </div>
                            <div class="content">
                                <h5>Streamline Communication</h5>
                                <p>
                                    Whether it's directing users to your mobile app, guiding
                                    them to a specific location, initiating phone calls.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="about-nine-right-images mb-20 text-lg-end" data-aos="fade-left"
                        data-aos-duration="1500" data-aos-offset="50">
                        <img src="https://i.ibb.co/G25Bwnn/biometrics-identification-4152283-3457274.webp"
                            alt="About" />
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- About Area End -->

    <!-- Tooltip Area Start -->
    <section class="tooltip-area bgs-cover rel pt-130 rpt-100"
        style="background-image: url({{ asset('frontend') }}/assets/images/backgrounds/tolltip.png)">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-9 col-lg-11 mb-135 rmb-80 text-center" data-aos="fade-up" data-aos-duration="1500"
                    data-aos-offset="50">
                    <div class="section-title mb-35">
                        <h2>
                            Connect Your Social Network and grow your social networking
                            easily
                        </h2>
                        <p>
                            Empower your social growth effortlessly with SocialConnect.
                            Seamlessly integrate your social networks and unlock new
                            opportunities for networking and connection. Simplify the
                            process and amplify your online presence with ease.
                        </p>
                    </div>
                    <a href="{{ route('register') }}" class="theme-btn">Get Started Now <i
                            class="fas fa-arrow-right"></i></a>
                </div>
            </div>
            <div class="tooltips-wrap">
                <div class="tooltip-item active">
                    <div class="tooltip-btn">
                        <img src="{{ asset('frontend') }}/assets/images/tooltips/tooltip-icon1.png" alt="Icon" />
                    </div>
                    <div class="tooltip-content">
                        <div class="image">
                            <img src="{{ asset('frontend') }}/assets/images/tooltips/tooltip1.png" alt="Tooltip" />
                        </div>
                    </div>
                </div>
                <div class="tooltip-item">
                    <div class="tooltip-btn">
                        <img src="{{ asset('frontend') }}/assets/images/tooltips/tooltip-icon2.png" alt="Icon" />
                    </div>
                    <div class="tooltip-content">
                        <div class="image">
                            <img src="https://i.ibb.co/BZdDtxt/tooltip1.png" alt="Tooltip" />
                        </div>
                    </div>
                </div>
                <div class="tooltip-item">
                    <div class="tooltip-btn">
                        <img src="{{ asset('frontend') }}/assets/images/tooltips/tooltip-icon3.png" alt="Icon" />
                    </div>
                    <div class="tooltip-content">
                        <div class="image">
                            <img src="{{ asset('frontend') }}/assets/images/tooltips/tooltip3.png" alt="Tooltip" />
                        </div>
                    </div>
                </div>
                <div class="tooltip-item">
                    <div class="tooltip-btn">
                        <img src="{{ asset('frontend') }}/assets/images/tooltips/tooltip-icon4.png" alt="Icon" />
                    </div>
                    <div class="tooltip-content">
                        <div class="image">
                            <img src="{{ asset('frontend') }}/assets/images/tooltips/tooltip4.png" alt="Tooltip" />
                        </div>
                    </div>
                </div>
                <div class="tooltip-item">
                    <div class="tooltip-btn">
                        <img src="{{ asset('frontend') }}/assets/images/tooltips/tooltip-icon5.png" alt="Icon" />
                    </div>
                    <div class="tooltip-content">
                        <div class="image">
                            <img src="{{ asset('frontend') }}/assets/images/tooltips/tooltip5.png" alt="Tooltip" />
                        </div>
                    </div>
                </div>
                <div class="tooltip-item">
                    <div class="tooltip-btn">
                        <img src="{{ asset('frontend') }}/assets/images/tooltips/tooltip-icon6.png" alt="Icon" />
                    </div>
                    <div class="tooltip-content">
                        <div class="image">
                            <img src="{{ asset('frontend') }}/assets/images/tooltips/tooltip6.png" alt="Tooltip" />
                        </div>
                    </div>
                </div>
                <div class="tooltip-item">
                    <div class="tooltip-btn">
                        <img src="{{ asset('frontend') }}/assets/images/tooltips/tooltip-icon7.png" alt="Icon" />
                    </div>
                    <div class="tooltip-content">
                        <div class="image">
                            <img src="{{ asset('frontend') }}/assets/images/tooltips/tooltip7.png" alt="Tooltip" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Tooltip Area End -->
    <section class="numbered-box-area rpb-70 rel z-1 pt-190">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-7 col-lg-9 col-md-11">
                    <div class="section-title text-center mb-55 aos-init aos-animate" data-aos="fade-up"
                        data-aos-duration="1500" data-aos-offset="50">
                        <h2>Craft Your Custom QR Codes in 4 Easy Steps with Go QR</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-3 col-md-6 aos-init aos-animate" data-aos="fade-up" data-aos-duration="1000"
                    data-aos-offset="50">
                    <div class="numbered-box">
                        <div class="number">1</div>
                        <div class="content">
                            <h5>Choose QR Type</h5>
                            <p style="text-align: justify">
                                Pick from a variety of QR code types tailored to your needs,
                                including URL, text, contact information, and more.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6 aos-init aos-animate" data-aos="fade-up" data-aos-duration="1000"
                    data-aos-delay="200" data-aos-offset="50">
                    <div class="numbered-box">
                        <div class="number">2</div>
                        <div class="content">
                            <h5>Upload Your Data</h5>
                            <p style="text-align: justify">
                                Easily upload your desired content, whether it's a website
                                link, text, contact details, or any other information you.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-3 aos-init aos-animate" data-aos="fade-up" data-aos-duration="1000"
                    data-aos-delay="400" data-aos-offset="50">
                    <div class="numbered-box">
                        <div class="number">3</div>
                        <div class="content">
                            <h5>Customize Design</h5>
                            <p style="text-align: justify">
                                Tailor your QR code to match your brand or style
                                preferences. Modify colors, add logos, and choose from.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6 aos-init aos-animate" data-aos="fade-up" data-aos-duration="1000"
                    data-aos-delay="400" data-aos-offset="50">
                    <div class="numbered-box">
                        <div class="number">3</div>
                        <div class="content">
                            <h5>Download It</h5>
                            <p style="text-align: justify">
                                It's ready to be shared, printed, or integrated into your
                                digital materials, empowering seamless connectivity qr.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="bg-lines">
            <span></span><span></span> <span></span><span></span>
        </div>
    </section>

    <section class="about-area-seven pt-130 rpt-100 pb-20 rpb-50 rel z-1">
        <div class="container">
            <div class="row gap-90 align-items-center">
                <div class="col-lg-6">
                    <div class="about-seven-left-images mb-50 aos-init aos-animate" data-aos="fade-left"
                        data-aos-duration="1500" data-aos-offset="50">
                        <img src="https://i.ibb.co/4jZD3km/Adobe-Stock-z-ZCRt-GUk-VT.jpg" alt="About" />
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="about-content-seven aos-init aos-animate" data-aos="fade-right"
                        data-aos-duration="1500" data-aos-offset="50">
                        <div class="section-title mb-30">
                            <h2>Unlocking Connectivity: Discover Go QR</h2>
                        </div>
                        <p style="text-align: justify">
                            Welcome to Go QR, your ultimate destination for effortless QR
                            code creation. At Go QR, we're committed to simplifying the
                            process of generating custom QR codes for individuals and
                            businesses alike. Our intuitive platform empowers you to
                            quickly and easily create QR codes tailored to your specific
                            needs. Whether you're sharing website links, contact details,
                            or promotional offers, Go QR provides the tools you need to
                            enhance connectivity and streamline communication. Join us as
                            we embark on a journey to revolutionize the way you connect
                            with the world.
                        </p>
                        <a href="{{ route('register') }}" class="theme-btn mt-25 mb-75">Get Started <i
                                class="fas fa-arrow-right"></i></a>
                        <div class="row">
                            <div class="col-6">
                                <div class="counter-item counter-text-wrap counted">
                                    <span class="count-text k-plus" data-speed="3000" data-stop="25">25</span>
                                    <div class="text">100% Satisficed Clients</div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="counter-item counter-text-wrap counted">
                                    <span class="count-text k-plus" data-speed="3000" data-stop="38">38</span>
                                    <div class="text">Task Complete For Global Clients</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="bg-lines">
            <span></span><span></span> <span></span><span></span>
        </div>
    </section>
    <!-- CTA Area End -->
    <section id="faqs" class="faqs-area-seven pt-50 rpt-95 pb-115 rpb-85 rel z-1">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-7 col-lg-9 aos-init aos-animate" data-aos="fade-up" data-aos-duration="1500"
                    data-aos-offset="50">
                    <div class="section-title text-center mb-60">
                        <h2>Have Any Question On Mind! Asked Questions</h2>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="accordion aos-init aos-animate" id="accordionOne" data-aos="fade-up"
                        data-aow-delay="100" data-aos-duration="1500" data-aos-offset="50">
                        <div class="accordion-item">
                            <h5 class="accordion-header">
                                <button class="accordion-button collapsed" data-bs-toggle="collapse"
                                    data-bs-target="#collapseOne1">
                                    What types of QR codes can I create with Go QR?
                                </button>
                            </h5>
                            <div id="collapseOne1" class="accordion-collapse collapse"
                                data-bs-parent="#accordionOne">
                                <div class="accordion-body">
                                    <p>
                                        Go QR offers a wide range of QR code types, including
                                        URLs, text, contact information, Wi-Fi credentials, and
                                        more. Simply select your desired type and input your
                                        data to generate a customized QR code.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h5 class="accordion-header">
                                <button class="accordion-button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseOne2">
                                    Can I customize the appearance of my QR codes?
                                </button>
                            </h5>
                            <div id="collapseOne2" class="accordion-collapse collapse show"
                                data-bs-parent="#accordionOne">
                                <div class="accordion-body">
                                    <p>
                                        Yes, absolutely! Go QR allows you to customize the
                                        appearance of your QR codes by choosing colors, adding
                                        logos, and selecting from various design options to
                                        match your brand or personal style.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h5 class="accordion-header">
                                <button class="accordion-button collapsed" data-bs-toggle="collapse"
                                    data-bs-target="#collapseOne3">
                                    How many QR codes can I generate with each pricing plan?
                                </button>
                            </h5>
                            <div id="collapseOne3" class="accordion-collapse collapse"
                                data-bs-parent="#accordionOne">
                                <div class="accordion-body">
                                    <p>
                                        The number of QR codes you can generate depends on the
                                        pricing plan you choose. Our plans offer different
                                        limits ranging from a few codes for personal use to
                                        unlimited codes for businesses and organizations.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h5 class="accordion-header">
                                <button class="accordion-button collapsed" data-bs-toggle="collapse"
                                    data-bs-target="#collapseOne4">
                                    Is there a limit to the amount of data I can encode in a
                                    QR code?
                                </button>
                            </h5>
                            <div id="collapseOne4" class="accordion-collapse collapse"
                                data-bs-parent="#accordionOne">
                                <div class="accordion-body">
                                    <p>
                                        While QR codes have a finite capacity for data, Go QR
                                        supports encoding a significant amount of information,
                                        including website links, contact details, text, and
                                        more. If you have specific requirements, feel free to
                                        reach out to our support team for assistance.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h5 class="accordion-header">
                                <button class="accordion-button collapsed" data-bs-toggle="collapse"
                                    data-bs-target="#collapseOne5">
                                    Can I track the performance of my QR codes?
                                </button>
                            </h5>
                            <div id="collapseOne5" class="accordion-collapse collapse"
                                data-bs-parent="#accordionOne">
                                <div class="accordion-body">
                                    <p>
                                        Yes, Go QR provides analytics tracking to monitor the
                                        performance of your QR codes. You can track metrics such
                                        as scans, locations, and devices used to access your QR
                                        codes, allowing you to gain valuable insights into user
                                        engagement.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h5 class="accordion-header">
                                <button class="accordion-button collapsed" data-bs-toggle="collapse"
                                    data-bs-target="#collapseOne6">
                                    How do I download my QR codes after creating them?
                                </button>
                            </h5>
                            <div id="collapseOne6" class="accordion-collapse collapse"
                                data-bs-parent="#accordionOne">
                                <div class="accordion-body">
                                    <p>
                                        After customizing your QR code to your liking, simply
                                        click the download button to save it to your device.
                                        Your QR code will be downloaded in high resolution,
                                        ready to be shared, printed, or integrated into your
                                        digital materials.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="faqs-area-seven-shapes">
            <div class="shape one">
                <img src="{{ asset('frontend') }}/assets/images/shapes/faq-one1.png" alt="Shape" />
            </div>
            <div class="shape two">
                <img src="{{ asset('frontend') }}/assets/images/shapes/faq-one2.png" alt="Shape" />
            </div>
            <div class="shape three">
                <img src="{{ asset('frontend') }}/assets/images/shapes/faq-one3.png" alt="Shape" />
            </div>
            <div class="shape four">
                <img src="{{ asset('frontend') }}/assets/images/shapes/faq-one4.png" alt="Shape" />
            </div>
            <div class="shape five">
                <img src="{{ asset('frontend') }}/assets/images/shapes/faq-one5.png" alt="Shape" />
            </div>
            <div class="shape six">
                <img src="{{ asset('frontend') }}/assets/images/shapes/faq-one6.png" alt="Shape" />
            </div>
        </div>
        <div class="bg-lines">
            <span></span><span></span> <span></span><span></span>
        </div>
    </section>
</x-frontend-app-layout>

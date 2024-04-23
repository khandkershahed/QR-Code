<footer class="rel z-1 mt-100">
    <div class="container">
        <div class="footer-newsletter text-white"
            style="padding: 40px 60px;
        border-radius: 15px;
        margin-bottom: -195px;
        background: #0096d8;
        position: relative; z-index: 5'">
            <div class="row align-items-center justify-content-between">
                <div class="col-lg-5">
                    <div class="logo-part aos-init aos-animate" data-aos="fade-left" data-aos-duration="1500"
                        data-aos-offset="50">
                        <div class="logo mb-10">
                            <a href="{{ route('homePage') }}">
                                <img width="100px" src="{{ (!empty($site->system_logo_white) && file_exists(public_path('storage/webSetting/systemLogoWhite/' . $site->system_logo_white))) ? asset('storage/webSetting/systemLogoWhite/' . $site->system_logo_white) : asset('https://i.ibb.co/BNBTVN4/logo.png') }}"
                                    alt="Logo"></a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-7">
                    <div class="form-part aos-init aos-animate" data-aos="fade-right" data-aos-duration="1500"
                        data-aos-offset="50">
                        <h5>Subscribe Our Newsletter</h5>
                            <form class="newsletter-form mt-15" action="{{route('newsletter.store')}}" method="POST">
                                @csrf
                            <input type="email" placeholder="Email Address" name="email" required>
                            <button type="submit">Sign Up <i class="fas fa-arrow-right"></i></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid" style="background: black; padding-top: 10rem">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-xl-3 col-lg-4 col-sm-6">
                    <div class="footer-widget widget-about aos-init" data-aos="fade-up" data-aos-duration="1500"
                        data-aos-offset="50">
                        <h6 class="footer-title text-white">About Company</h6>
                        <p class="text-muted">Connect with us and stay updated on the latest news, offers, and updates.
                        </p>
                        <div class="social-style-one">
                            @if (!empty($site->twitter_url))
                                <a href="{{ $site->twitter_url }}"><i class="fab fa-twitter"></i></a>
                            @endif
                            @if (!empty($site->facebook_url))
                                <a href="{{ $site->facebook_url }}"><i class="fab fa-facebook-f"></i></a>
                            @endif
                            @if (!empty($site->instagram_url))
                                <a href="{{ $site->instagram_url }}"><i class="fab fa-instagram"></i></a>
                            @endif
                            @if (!empty($site->pinterest_url))
                                <a href="{{ $site->pinterest_url }}"><i class="fab fa-pinterest-p"></i></a>
                            @endif
                            @if (!empty($site->youtube_url))
                                <a href="{{ $site->youtube_url }}"><i class="fab fa-youtube"></i></a>
                            @endif
                            {{-- <a href="{{ $site->facebook_url }}"><i class="fab fa-facebook-f"></i></a>
                            <a href="{{ $site->instagram_url }}"><i class="fab fa-instagram"></i></a>
                            <a href="{{ $site->pinterest_url }}"><i class="fab fa-pinterest-p"></i></a>
                            <a href="{{ $site->youtube_url }}"><i class="fab fa-youtube"></i></a> --}}
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-sm-6 order-xl-2">
                    <div class="footer-widget widget-contact aos-init" data-aos="fade-up" data-aos-delay="400"
                        data-aos-duration="1500" data-aos-offset="50">
                        <h6 class="footer-title text-white">Contact</h6>
                        <ul>
                            <li>
                                <i class="fa fa-map-marker-alt"></i> {{ $site->address_line_one }}, {{ $site->address_line_two }}
                            </li>
                            <li><i class="fa fa-envelope"></i> <a href="mailto:{{ $site->contact_email }}">{{ $site->contact_email }}</a>
                            </li>
                            <li><i class="fa fa-phone"></i> <a href="callto:{{ $site->phone_one }}">{{ $site->phone_one }}</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="row">
                        <div class="col-sm-4 col-6">
                            <div class="footer-widget widget-links aos-init" data-aos="fade-up" data-aos-delay="100"
                                data-aos-duration="1500" data-aos-offset="50">
                                <h6 class="footer-title text-white">Resources</h6>
                                <ul>
                                    <li><a href="{{ route('services') }}">Services</a></li>
                                    <li><a href="{{ route('about') }}">About Us</a></li>
                                    <li><a href="{{ route('contact') }}">Contact Us</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-sm-4 col-6">
                            <div class="footer-widget widget-links aos-init" data-aos="fade-up" data-aos-delay="200"
                                data-aos-duration="1500" data-aos-offset="50">
                                <h6 class="footer-title text-white">Quick Link</h6>
                                <ul>
                                    <li><a href="{{ route('pricing') }}">Pricing</a></li>
                                    <li><a href="{{ route('qrCode') }}">QR Code</a></li>
                                    <li><a href="{{ route('nfcCard') }}">Business Card</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-sm-4 col-6">
                            <div class="footer-widget widget-links aos-init" data-aos="fade-up" data-aos-delay="300"
                                data-aos-duration="1500" data-aos-offset="50">
                                <h6 class="footer-title text-white">Condition</h6>
                                <ul>
                                    <li><a href="{{ route('terms') }}">Terms</a></li>
                                    <li><a href="{{ route('policy') }}">Policy</a></li>
                                    <li><a href="{{ route('faq') }}">Faq</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-bottom mt-30 py-15">
                <div class="row align-items-center">
                    <div class="col-xl-12 col-lg-6">
                        <div class="copyright-text pt-10 text-lg-start text-center aos-init" data-aos="fade-left"
                            data-aos-duration="1000" data-aos-offset="50">
                            <p>Copyright @2024, <a href="{{ route('homePage') }}">Go QR </a> All Rights Reserved</p>
                        </div>
                    </div>
                </div>
                <!-- Scroll Top Button -->
                <button class="scroll-top scroll-to-target me-3" data-target="html"
                    style="display: inline-block;"><span class="fas fa-angle-double-up"></span></button>
            </div>
        </div>
    </div>
</footer>

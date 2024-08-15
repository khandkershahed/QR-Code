<x-frontend-app-layout :title="'Contact Us || GoFlixza - Your Hub for QR, Bar Codes & NFC V.Cards'">
    <section class="page-banner-area overlay py-120 rpy-120 rel z-1 bgs-cover text-center"
        style="
      background-image: url({{ asset('frontend/newimage/banner.jpg') }});
    ">
        <div class="container">
            <div class="banner-inner pt-70 rpt-60 text-black">
                <h1 class="page-title aos-init aos-animate" data-aos="fade-up" data-aos-duration="1500"
                    data-aos-offset="50">
                    Contact Us
                </h1>
            </div>
        </div>
    </section>
    <div class="contact-page-map">
        <div class="our-location">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d96777.16150026117!2d-74.00840582560909!3d40.71171357405996!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sbd!4v1706508986625!5m2!1sen!2sbd"
                style="border: 0; width: 100%" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </div>
    <section class="contact-page py-130 rpy-100">
        <div class="container">
            <div class="row gap-100 align-items-center">
                <div class="col-lg-5">
                    <div class="contact-info-part">
                        <div class="section-title mb-50 aos-init aos-animate" data-aos="fade-up"
                            data-aos-duration="1500" data-aos-offset="50">
                            <h2>Feel Free to Contact Us, Get In Touch</h2>
                            <p>
                                We're here to assist you in any way we can. Whether you have
                                questions, feedback, or just want to say hello
                            </p>
                        </div>
                        <div class="contact-info-item style-two aos-init" data-aos="fade-up" data-aos-delay="50"
                            data-aos-duration="1500" data-aos-offset="50">
                            <div class="icon">
                                <i class="fas fa-map-marker-alt"></i>
                            </div>
                            <div class="content">
                                <span class="title">Location</span>
                                <span class="text">{{ !empty($site->address_line_one) ? $site->address_line_one : '' }} {{ !empty($site->address_line_two) ? ', ' . $site->address_line_two : '' }}</span>
                            </div>
                        </div>
                        <div class="contact-info-item style-two aos-init" data-aos="fade-up" data-aos-delay="100"
                            data-aos-duration="1500" data-aos-offset="50">
                            <div class="icon">
                                <i class="fas fa-envelope-open-text"></i>
                            </div>
                            <div class="content">
                                <span class="title">Email Address</span>
                                <span class="text">
                                    <a href="mailto:{{ !empty($site->contact_email) ? $site->contact_email : '' }}">{{ !empty($site->contact_email) ? $site->contact_email : '' }}</a>
                                </span>
                            </div>
                        </div>
                        <div class="contact-info-item style-two aos-init" data-aos="fade-up" data-aos-delay="150"
                            data-aos-duration="1500" data-aos-offset="50">
                            <div class="icon">
                                <i class="fas fa-phone-volume"></i>
                            </div>
                            <div class="content">
                                <span class="title">Make A Call</span>
                                <span class="text">
                                    <a href="callto:{{ !empty($site->phone_one) ? $site->phone_one : '' }}">{{ !empty($site->phone_one) ? $site->phone_one : '' }}</a>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="contact-form br-10 bgc-lighter rmt-60 aos-init aos-animate" name="contact-form"
                        data-aos="fade-left" data-aos-duration="1500" data-aos-offset="50">
                        <form id="contactForm" class="contactForm" action="{{ route('contact.add') }}" method="POST"
                            novalidate>
                            @csrf
                            <img class="shape-one"
                                src="	https://webtendtheme.net/html/2024/akpager/assets/images/shapes/star-black-shape.png"
                                alt="Star Shape" />
                            <img class="shape-two"
                                src="	https://webtendtheme.net/html/2024/akpager/assets/images/shapes/star-black-shape.png"
                                alt="Star Shape" />
                            <h5>Send Us Message</h5>
                            <p>
                                Questions or you would just like to say hello, contact us.
                            </p>
                            <div class="row mt-30">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="name">Full Name <span class="text-danger">*</span></label>
                                        <input type="text" id="name" name="name"
                                            class="form-control @error('name') is-invalid @enderror" value=""
                                            placeholder="Somaia D. Silva" required
                                            data-error="Please enter your Name" />
                                        @error('name')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="email">Email <span class="text-danger">*</span></label>
                                        <input type="email" id="email" name="email"
                                            class="form-control @error('email') is-invalid @enderror" value=""
                                            placeholder="support@gmail.com" required
                                            data-error="Please enter your Email" />
                                        @error('email')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="subject">Subject <span class="text-danger">*</span></label>
                                        <input type="text" id="subject" name="subject"
                                            class="form-control @error('subject') is-invalid @enderror" value=""
                                            placeholder="I like to discussed" required
                                            data-error="Please enter your Subject" />
                                        @error('subject')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="message">Message <span class="text-danger">*</span></label>
                                        <textarea name="message" id="message" class="form-control @error('message') is-invalid @enderror" rows="4"
                                            placeholder="Write Message" required data-error="Please enter your Message"></textarea>
                                        @error('message')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group mb-0">
                                        <button type="submit" class="theme-btn disabled"
                                            style="pointer-events: all; cursor: pointer">
                                            Send Us Message <i class="fas fa-arrow-right"></i>
                                        </button>
                                        <div id="msgSubmit" class="hidden"></div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-frontend-app-layout>

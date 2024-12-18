<x-frontend-app-layout :title="'Blog Details || GoFlixza - Your Hub for QR, Bar Codes & NFC V.Cards'">
    <section class="page-banner-area overlay py-120 rpy-120 rel z-1 bgs-cover text-center"
        style="background-image: url({{ asset('frontend/newimage/banner.jpg') }}); height: 300px;">
        <div class="container">
            <div class="banner-inner pt-30 rpt-60 text-black">
                <h1 class="page-title" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="50">
                    Blog Details
                </h1>
            </div>
        </div>
    </section>
    <section class="blog-details-area py-130 rpy-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="blog-details-wrap">
                        <div class="blog-details-content">
                            <div class="image mb-30 aos-init aos-animate" data-aos="fade-up" data-aos-duration="1500"
                                data-aos-offset="50">
                                <img src="{{ optional($blog)->banner_image ? asset('storage/' . optional($blog)->banner_image) : asset('frontend/newimage/blognoimage.webp') }}"
                                    alt="{{ optional($blog)->title ?? 'Blog' }}"
                                    onerror="this.onerror=null;this.src='{{ asset('frontend/newimage/blognoimage.webp') }}';">
                            </div>

                            <h3>{{ optional($blog)->title }}</h3>
                            <p>{!! optional($blog)->header !!} <br>
                                {!! optional($blog)->short_description !!} <br>
                            </p>

                            <blockquote class="blockquote-two bgc-lighter my-40 aos-init" data-aos="fade-up"
                                data-aos-duration="1500" data-aos-offset="50">
                                <div class="text">{!! optional($blog)->footer ?? 'Default footer content' !!}</div>
                                <span class="blockquote-footer">{{ optional($blog)->author }}</span>
                            </blockquote>

                            <p>{!! optional($blog)->long_description !!}</p>
                            <hr>
                        </div>

                        @if (!empty(optional($blog)->author))
                            <div class="admin-comment bgc-lighter mt-60 aos-init" data-aos="fade-up"
                                data-aos-duration="1500" data-aos-offset="50">
                                <div class="comment-body">
                                    <div class="author-thumb">
                                        <img src="{{ optional($blog)->logo ? asset('storage/' . optional($blog)->logo) : asset('frontend/newimage/blognoimage.webp') }}"
                                            alt="Author" style="width: 100px;height: 100px;object-fit: cover;"
                                            onerror="this.onerror=null;this.src='{{ asset('frontend/newimage/blognoimage.webp') }}';">
                                    </div>
                                    <div class="content">
                                        <h5>{{ optional($blog)->author }}</h5>
                                    </div>
                                </div>
                            </div>
                        @endif


                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="main-sidebar rmt-75">
                        <div class="widget widget-category aos-init" data-aos="fade-up" data-aos-delay="50"
                            data-aos-duration="1500" data-aos-offset="50">
                            <h5 class="widget-title">Category</h5>
                            <ul>
                                @foreach ($blog_categorys as $category)
                                    <li><a href="{{ route('blog.details', $category->slug) }}">{{ $category->name }}
                                            <i class="fas fa-arrow-right"></i></a></li>
                                @endforeach
                            </ul>
                        </div>
                        <div class="widget widget-recent-news aos-init" data-aos="fade-up" data-aos-delay="50"
                            data-aos-duration="1500" data-aos-offset="50">
                            <h4 class="widget-title">Recent News</h4>
                            <ul>
                                @foreach ($recent_posts as $recent_post)
                                    <li>
                                        <div class="image">
                                            <img src="{{ asset('storage/' . $recent_post->image) }}"
                                                alt="{{ $recent_post->title }}"
                                                onerror="this.onerror=null;this.src='{{ asset('frontend/newimage/blognoimage.webp') }}';">
                                        </div>
                                        <div class="content">
                                            <span class="date">{{ $recent_post->created_at->format('M d Y') }}</span>
                                            <h6><a
                                                    href="{{ route('blog.details', $recent_post->slug) }}">{{ $recent_post->title }}</a>
                                            </h6>
                                        </div>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                        <div class="widget widget-cta aos-init" data-aos="fade-up" data-aos-delay="50"
                            data-aos-duration="1500" data-aos-offset="50">
                            <h3>Boost your Digital Product marketing?</h3>
                            <a href="{{ route('contact') }}" class="theme-btn">Contact Us <i
                                    class="fas fa-arrow-right"></i></a>
                            <div class="man"><img
                                    src="https://webtendtheme.net/html/2024/akpager/assets/images/widget/cta-man.png"
                                    alt="CTA"></div>
                            <div class="bg bgs-cover" style="background-image: url(assets/images/widget/cta-bg.png);">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-frontend-app-layout>

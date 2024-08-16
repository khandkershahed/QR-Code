<x-frontend-app-layout :title="'All Blogs || GoFlixza - Your Hub for QR, Bar Codes & NFC V.Cards'">
    <section class="page-banner-area overlay py-120 rpy-120 rel z-1 bgs-cover text-center"
        style="background-image: url({{ asset('frontend/newimage/banner.jpg') }}); height: 300px;"">
        <div class="container">
            <div class="banner-inner pt-70 rpt-60 text-black">
                <h1 class="page-title" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="50">
                    Blog
                </h1>
            </div>
        </div>
    </section>
    <section class="blog-standard-area py-130 rpy-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="blog-standard-wrap">
                        @foreach ($blog_posts as $blog_post)
                            <div class="blog-standard-item aos-init aos-animate" data-aos="fade-up"
                                data-aos-duration="1500" data-aos-offset="50">
                                <div class="image">
                                    <img src="{{ asset('storage/' . $blog_post->image) }}" alt="Blog"
                                        onerror="this.onerror=null;this.src='{{ asset('frontend/newimage/blognoimage.webp') }}';">
                                </div>
                                <div class="content">
                                    <ul class="blog-meta">
                                        <li><a class="category"
                                                href="{{ route('blog.details', $blog_post->slug) }}">{{ $blog_post->badge }}</a>
                                        </li>
                                        <li><img src="{{ asset('storage/' . $blog_post->logo) }}" alt="Author"
                                                onerror="this.onerror=null;this.src='{{ asset('frontend/newimage/blognoimage.webp') }}';">
                                            <a href="#">{{ $blog_post->author }}</a>
                                        </li>
                                        <li><i class="fas fa-calendar-alt"></i> <a
                                                href="#">{{ $blog_post->created_at->format('M d Y') }}</a>
                                        </li>
                                    </ul>
                                    <h3><a href="blog.details.html">{{ $blog_post->title }}</a>
                                    </h3>
                                    <p>{{ $blog_post->header }}
                                    </p>
                                    <a href="{{ route('blog.details', $blog_post->slug) }}"
                                        class="theme-btn style-two">Read More <i class="fas fa-arrow-right"></i></a>
                                </div>
                            </div>
                        @endforeach
                        <ul class="pagination mt-25 flex-wrap">
                            <li class="page-item disabled">
                                <span class="page-link"><i class="fas fa-angle-left"></i></span>
                            </li>
                            <li class="page-item active">
                                <span class="page-link">
                                    1
                                    <span class="sr-only">(current)</span>
                                </span>
                            </li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item"><a class="page-link" href="#">4</a></li>
                            <li class="page-item">
                                <a class="page-link" href="#"><i class="fas fa-angle-right"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="main-sidebar rmt-75">
                        <div class="widget widget-search aos-init aos-animate" data-aos="fade-up" data-aos-delay="50"
                            data-aos-duration="1500" data-aos-offset="50">
                            <h5 class="widget-title">Search</h5>
                            <form action="#" class="default-search-form">
                                <input type="text" placeholder="Keywords" required="">
                                <button type="submit" class="searchbutton fas fa-search"></button>
                            </form>
                        </div>
                        <div class="widget widget-category aos-init" data-aos="fade-up" data-aos-delay="50"
                            data-aos-duration="1500" data-aos-offset="50">
                            <h5 class="widget-title">Category</h5>
                            <ul>
                                @foreach ($blog_categorys as $category)
                                    <li><a href="{{ route('blog.details', $blog_post->slug) }}">{{ $category->name }}
                                            <i class="fas fa-arrow-right"></i></a>
                                    </li>
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
                            <h3>Create Your First QR, NFC, Barcode With magic.</h3>
                            <a href="{{ route('contact') }}" class="theme-btn">Contact Us <i
                                    class="fas fa-angle-double-right"></i></a>
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

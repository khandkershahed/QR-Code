<x-frontend-app-layout :title="'Card Product Details || GoFlixza - Your Hub for QR, Bar Codes & NFC V.Cards'">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css">
    <style>
        .magnifier-container {
            position: relative;
            overflow: hidden;
            width: 100%;
            /* Adjust width as needed */
            height: 100%;
            /* Adjust height as needed */
            cursor: crosshair;
        }

        .magnifier-container img {
            display: block;
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.3s ease;
            /* Smooth zoom */
        }

        .magnifier-container:hover img {
            transform: scale(1.5);
            /* Adjust zoom level */
            transition: transform 0.3s ease;
        }

        .nav-tabs .nav-item.show .cst-links,
        .nav-tabs .cst-links.active {
            background-color: #2c16aa;
            width: 150px;
            color: white;
            border-radius: 0;
        }

        .nav-tabs .nav-link {
            width: 150px;
            background-color: #eee;
            color: black;
            border-radius: 0;
        }

        .badges-im {
            padding-top: 3rem;
            padding-bottom: 1rem;
        }

        .swiper {
            width: 100%;
            height: 100%;
        }

        .swiper-slide {
            text-align: center;
            font-size: 18px;
            background: #fff;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .swiper-slide img {
            display: block;
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .swiper-slide {
            background-size: cover;
            background-position: center;
        }

        .mySwiper2 {
            height: 80%;
            width: 100%;
        }

        .mySwiper {
            height: 20%;
            box-sizing: border-box;
            padding: 10px 0;
        }

        .mySwiper .swiper-slide,
        .mySwiperDesktop .swiper-slide {
            width: 25%;
            height: 100%;
            opacity: 0.4;
        }

        .mySwiper .swiper-slide-thumb-active,
        .mySwiperDesktop .swiper-slide-thumb-active {
            opacity: 1;
        }

        .mySwiperDesktop {
            margin-bottom: 10px;
        }

        .swiper-slide img {
            display: block;
            width: 100%;
            height: 100%;
            object-fit: cover;
            box-shadow: rgba(0, 0, 0, 0.16) 0px 1px 4px;
            padding: 24px;
            border: 1px solid black;
        }

        .swiper-button-next,
        .swiper-button-prev {
            color: #fff !important;
        }



        @media (min-width: 768px) {
            .mySwiper {
                display: none;
            }

            .kovi-product-slider-wrapper {
                display: flex;
                flex-direction: row;
            }

            .mySwiper2 {
                height: 100%;
            }

            .swiper {
                width: 100%;
                height: 850px;
            }

            .mySwiperDesktop .swiper-slide {
                width: 100%;
            }

            .mySwiperDesktop {
                width: calc(22% - 20px);
            }

            .mySwiper2 {
                width: 78%;
            }
        }

        @media (max-width: 767px) {
            .kovi-product-slider-wrapper {
                display: flex;
                flex-direction: column;
            }

            .mySwiperDesktop {
                display: none;
            }

            .kovi-product-slider-wrapper {
                width: 100%;
                height: 70%;
            }

            .mySwiperDesktop {
                height: 250px;
            }
        }

        .details-box {
            height: 400px;
        }

        /* For Slider End */
    </style>
    <section class="page-banner-area overlay py-120 rpy-120 rel z-1 bgs-cover text-center"
        style="
      background-image: url({{ asset('images/shop-page-banner-.jpg') }});
    ">
        <div class="container">
            <div class="banner-inner pt-70 rpt-60 text-black">
                <h1 class="page-title aos-init aos-animate" data-aos="fade-up" data-aos-duration="1500"
                    data-aos-offset="50">
                    {{ $cardProduct->name }}
                </h1>
                <p>{{ $cardProduct->short_description }}</p>
            </div>
        </div>
    </section>
    <section>
        <form action="{{ route('card.checkout', $cardProduct->slug) }}" method="GET" id="product-form">
            @csrf <!-- Add CSRF token for security -->
            <div class="container mt-80">
                <div class="row">
                    <div class="col-lg-7">
                        <div class="kovi-product-slider-wrapper">
                            <div thumbsSlider="" class="swiper mySwiperDesktop">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide magnifier-container">
                                        <img src="{{ asset('storage/' . $cardProduct->image) }}" />
                                    </div>
                                    <div class="swiper-slide magnifier-container">
                                        <img src="{{ asset('storage/' . $cardProduct->image) }}" />
                                    </div>
                                    <div class="swiper-slide magnifier-container">
                                        <img src="{{ asset('storage/' . $cardProduct->image) }}" />
                                    </div>
                                    <div class="swiper-slide magnifier-container">
                                        <img src="{{ asset('storage/' . $cardProduct->image) }}" />
                                    </div>
                                    <div class="swiper-slide magnifier-container">
                                        <img src="{{ asset('storage/' . $cardProduct->image) }}" />
                                    </div>
                                    <div class="swiper-slide magnifier-container">
                                        <img src="{{ asset('storage/' . $cardProduct->image) }}" />
                                    </div>
                                    <div class="swiper-slide magnifier-container">
                                        <img src="{{ asset('storage/' . $cardProduct->image) }}" />
                                    </div>
                                    <div class="swiper-slide magnifier-container">
                                        <img src="{{ asset('storage/' . $cardProduct->image) }}" />
                                    </div>
                                </div>
                            </div>
                            <!-- Swiper -->
                            <div style="--swiper-navigation-color: #fff; --swiper-pagination-color: #fff"
                                class="swiper mySwiper2">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide magnifier-container">
                                        <img src="{{ asset('storage/' . $cardProduct->image) }}" />
                                    </div>
                                    <div class="swiper-slide magnifier-container">
                                        <img src="{{ asset('storage/' . $cardProduct->image) }}" />
                                    </div>
                                    <div class="swiper-slide magnifier-container">
                                        <img src="{{ asset('storage/' . $cardProduct->image) }}" />
                                    </div>
                                    <div class="swiper-slide magnifier-container">
                                        <img src="{{ asset('storage/' . $cardProduct->image) }}" />
                                    </div>
                                    <div class="swiper-slide magnifier-container">
                                        <img src="{{ asset('storage/' . $cardProduct->image) }}" />
                                    </div>
                                    <div class="swiper-slide magnifier-container">
                                        <img src="{{ asset('storage/' . $cardProduct->image) }}" />
                                    </div>
                                    <div class="swiper-slide magnifier-container">
                                        <img src="{{ asset('storage/' . $cardProduct->image) }}" />
                                    </div>
                                    <div class="swiper-slide magnifier-container">
                                        <img src="{{ asset('storage/' . $cardProduct->image) }}" />
                                    </div>
                                </div>
                                <div class="swiper-button-next"></div>
                                <div class="swiper-button-prev"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5 ">
                        <div class="row align-items-center ">
                            <div class="col-lg-8">
                                <h3 class="mb-0">{{ $cardProduct->name }}</h3>
                            </div>
                            <div class="col-lg-4">
                                <h3 class="mb-0 text-end text-danger">
                                    @if ($cardProduct->currency === 'eur')
                                        €
                                    @elseif($cardProduct->currency === 'gbp')
                                        £
                                    @elseif($cardProduct->currency === 'usd')
                                        $
                                    @else
                                        $
                                    @endif
                                    {{ $cardProduct->package_price }}.00
                                </h3>
                            </div>
                        </div>
                        <div class="row align-items-center">
                            <div class="col-lg-12">
                                <div class="py-10">
                                    <hr>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <ul class="pb-0">
                                            @foreach (json_decode($cardProduct->plan_descriptions ?? '[]') as $description)
                                                <li>
                                                    <i class="fa-regular fa-circle-check pe-2 text-success"></i>
                                                    {{ $description }}
                                                </li>
                                            @endforeach
                                        </ul>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="py-10">
                                            <hr>
                                        </div>
                                    </div>
                                    <div class="col-lg-8">
                                        <label for="">Card Color? <span class="text-danger">*</span></label>
                                        <select class="form-select" name="color" aria-label="Default select example">
                                            <option value="" selected>What Color Of NFC Card You Want?</option>
                                            <option value="black"> Black</option>
                                            <option value="blue"> Blue</option>
                                            <option value="yellow"> Yellow</option>
                                            <option value="green"> Green</option>
                                            <option value="red"> Red</option>
                                            <option value="white"> White</option>
                                        </select>
                                    </div>
                                    <div class="col-lg-4">
                                        <label for="">Additional NFC Card?</label>
                                        {{-- Quantity Box --}}
                                        <div class="input-group quantity-box">
                                            <button class="btn btn-outline-secondary minus-btn" type="button"
                                                style="height: 50px;">
                                                <i class="fa-solid fa-minus"></i>
                                            </button>
                                            <input type="number" class="form-control text-center quantity-input"
                                                value="0" min="0"
                                                style="height: 50px; background-color: #f1f5ff">
                                            <button class="btn btn-outline-secondary plus-btn" type="button"
                                                style="height: 50px;">
                                                <i class="fa-solid fa-plus"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <div class="pt-4">
                                    <div class="table-responsive">
                                        <table class="table">
                                            <thead style="background-color: #6710f262; color: white;">
                                                <tr>
                                                    <th>SL</th>
                                                    <th>Package Details</th>
                                                    <th>QTY</th>
                                                    <th class="text-end">Price</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>1</td>
                                                    <td>1 VCard & 1 NFC Card</td>
                                                    <td>1</td>
                                                    <td class="main-price text-end"
                                                        data-unit-price="{{ $cardProduct->package_price }}">
                                                        @if ($cardProduct->currency === 'eur')
                                                            €
                                                        @elseif($cardProduct->currency === 'gbp')
                                                            £
                                                        @elseif($cardProduct->currency === 'usd')
                                                            $
                                                        @else
                                                            $
                                                        @endif
                                                        {{ $cardProduct->package_price }}.00
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>2</td>
                                                    <td>Additional NFC Card Only</td>
                                                    <td class="quantity"></td>
                                                    <td class="aditional-price text-end"
                                                        data-unit-price="{{ $cardProduct->price }}">
                                                        @if ($cardProduct->currency === 'eur')
                                                            €
                                                        @elseif($cardProduct->currency === 'gbp')
                                                            £
                                                        @elseif($cardProduct->currency === 'usd')
                                                            $
                                                        @else
                                                            $
                                                        @endif
                                                        0.00
                                                    </td>
                                                </tr>
                                            </tbody>
                                            <tfoot style="background-color: #eee">
                                                <tr>
                                                    <td colspan="3">Sub Total</td>
                                                    <td class="subtotal text-end">
                                                        @if ($cardProduct->currency === 'eur')
                                                            €
                                                        @elseif($cardProduct->currency === 'gbp')
                                                            £
                                                        @elseif($cardProduct->currency === 'usd')
                                                            $
                                                        @else
                                                            $
                                                        @endif
                                                        {{ $cardProduct->package_price }}.00
                                                    </td>
                                                </tr>
                                            </tfoot>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12 px-0">
                                <div class="shadow-sm">
                                    <input type="hidden" name="subtotal" id="hidden-subtotal">
                                    <input type="hidden" name="quantity" id="hidden-quantity">
                                    <button type="submit" class="theme-btn style-two rounded-0 w-100"
                                        id="purchase-btn">Purchase</button>
                                    <div class="pt-3">
                                        <p class="text-center w-75 mx-auto" style="line-height: 1.3;">
                                            {{ $cardProduct->note }}</p>
                                    </div>
                                    <div>
                                        <img src="{{ asset('images/social-icons.webp') }}" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </section>
    <section class="mt-120">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2 class="text-center pb-50" style="font-size: 50px;">Card History</h2>
                </div>
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-body">
                            <iframe width="100%" height="400"
                                src="https://www.youtube.com/embed/tnzjLZO2vgM?si=YRo1UGCYCme6Vvs8"
                                title="YouTube video player" frameborder="0"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="details-box">
                        <div>
                            <h4>Card Details</h4>
                            <p>{{ $cardProduct->description }}</p>
                        </div>
                        <div>
                            <h4>How To Shipping</h4>
                            <p>{{ $cardProduct->shipping_description }}</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="alert alert-warning mt-40 p-50" role="alert">
                        <h2 class="mb-40">Important Notice:</h2>
                        <div class="d-flex">
                            <ul class="mb-0 ps-0">
                                <li class="mb-2"><i class="fa-solid fa-arrow-right"></i> Setup Your Card Color in
                                    Dashboard.</li>
                                <li class="mb-2"><i class="fa-solid fa-arrow-right"></i> Create Your Virtual Card or
                                    Landing Profile/Page in Dashboard.</li>
                                <li class="mb-2"><i class="fa-solid fa-arrow-right"></i> Ensure your account details
                                    are up to date to avoid interruptions.</li>
                            </ul>
                            <ul class="mb-0 ps-5">
                                <li class="mb-2"><i class="fa-solid fa-arrow-right"></i> Review transaction limits
                                    in the settings section.</li>
                                <li class="mb-2"><i class="fa-solid fa-arrow-right"></i> Enable two-factor
                                    authentication for enhanced security.</li>
                                <li class="mb-2"><i class="fa-solid fa-arrow-right"></i> Check your email regularly
                                    for important updates and offers.</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- <section class="py-120 pt-50">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs d-flex  justify-content-center align-items-center" id="myTab"
                        role="tablist">
                        <li class="nav-item me-2" role="presentation">
                            <button class="nav-link cst-links active" id="description-tab" data-bs-toggle="tab"
                                data-bs-target="#description" type="button" role="tab"
                                aria-controls="description" aria-selected="true">
                                Description
                            </button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link cst-links" id="shipping-tab" data-bs-toggle="tab"
                                data-bs-target="#shipping" type="button" role="tab" aria-controls="shipping"
                                aria-selected="false">
                                Shipping
                            </button>
                        </li>
                    </ul>

                    <!-- Tab panes -->
                    <div class="tab-content">
                        <div class="tab-pane active" id="description" role="tabpanel"
                            aria-labelledby="description-tab">
                            <div class="py-2">
                                <p>{{ $cardProduct->description }}</p>
                            </div>
                        </div>
                        <div class="tab-pane" id="shipping" role="tabpanel" aria-labelledby="shipping-tab">
                            <div class="py-2">
                                <p>{{ $cardProduct->shipping_description }}</p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section> --}}
    @push('scripts')
        <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
        <script>
            document.querySelectorAll('.magnifier-container').forEach(container => {
                const img = container.querySelector('img');

                container.addEventListener('mousemove', (e) => {
                    const rect = container.getBoundingClientRect();
                    const x = e.clientX - rect.left;
                    const y = e.clientY - rect.top;

                    const xPercent = (x / rect.width) * 100;
                    const yPercent = (y / rect.height) * 100;

                    img.style.transformOrigin = `${xPercent}% ${yPercent}%`;
                    img.style.transform = "scale(2)"; // Zoom level
                });

                container.addEventListener('mouseleave', () => {
                    img.style.transform = "scale(1)";
                    img.style.transformOrigin = "center center";
                });
            });
        </script>
        <script>
            document.addEventListener("DOMContentLoaded", function() {
                const quantityInput = document.querySelector(".quantity-input");
                const quantityContainer = document.querySelector(".quantity");
                const priceCell = document.querySelector(".aditional-price");
                const subtotalCell = document.querySelector(".subtotal");
                const unitPrice = parseFloat(priceCell.getAttribute("data-unit-price"));
                const mainPrice = parseFloat(document.querySelector(".main-price").getAttribute("data-unit-price"));

                const updateSubtotal = () => {
                    const quantity = parseInt(quantityInput.value) || 0;
                    const additionalPrice = quantity * unitPrice;
                    const subtotal = mainPrice + additionalPrice;

                    priceCell.textContent = `${additionalPrice.toFixed(2)}`;
                    subtotalCell.textContent = `${subtotal.toFixed(2)}`;
                    quantityContainer.textContent = `${quantity}`;

                    // Update hidden fields
                    document.getElementById("hidden-subtotal").value = subtotal.toFixed(2);
                    document.getElementById("hidden-quantity").value = quantity;
                };

                // Handling the plus button
                document.querySelector(".plus-btn").addEventListener("click", () => {
                    quantityInput.value = parseInt(quantityInput.value || 0) + 1;
                    updateSubtotal();
                });

                // Handling the minus button
                document.querySelector(".minus-btn").addEventListener("click", () => {
                    quantityInput.value = Math.max(0, parseInt(quantityInput.value || 1) - 1);
                    updateSubtotal();
                });

                // Handling direct input changes
                quantityInput.addEventListener("input", updateSubtotal);

                // Initialize the subtotal on page load
                updateSubtotal();
            });
        </script>
        <script>
            $(function() {
                var galleryTop, galleryThumbs;

                function initSwiper() {
                    // Destroy existing Swiper instances if they exist
                    if (galleryTop) {
                        galleryTop.destroy(true, true);
                    }
                    if (galleryThumbs) {
                        galleryThumbs.destroy(true, true);
                    }

                    if ($(window).width() > 768) {
                        // Initialize Swiper for mobile
                        galleryTop = new Swiper(".mySwiperDesktop", {
                            spaceBetween: 10,
                            slidesPerView: 4,
                            direction: 'vertical', // Default slides per view for mobile
                            freeMode: false,
                            watchSlidesProgress: true,
                            breakpoints: {
                                768: {
                                    slidesPerView: 4,
                                },
                                530: {
                                    slidesPerView: 3,
                                },
                                300: {
                                    slidesPerView: 2,
                                },
                            }
                        });
                        galleryThumbs = new Swiper(".mySwiper2", {
                            spaceBetween: 10,
                            navigation: {
                                nextEl: ".swiper-button-next",
                                prevEl: ".swiper-button-prev",
                            },
                            a11y: {
                                prevSlideMessage: "Previous slide",
                                nextSlideMessage: "Next slide",
                            },
                            thumbs: {
                                swiper: galleryTop,
                            },
                        });
                    } else {
                        // Initialize Swiper for desktop
                        galleryTop = new Swiper(".mySwiper", {
                            spaceBetween: 10,
                            slidesPerView: 4,
                            freeMode: false,
                            watchSlidesProgress: true,
                        });
                        galleryThumbs = new Swiper(".mySwiper2", {
                            spaceBetween: 10,
                            navigation: {
                                nextEl: ".swiper-button-next",
                                prevEl: ".swiper-button-prev",
                            },
                            a11y: {
                                prevSlideMessage: "Previous slide",
                                nextSlideMessage: "Next slide",
                            },
                            thumbs: {
                                swiper: galleryTop,
                            },
                        });
                    }

                    // Sync the slide change between galleryTop and galleryThumbs
                    galleryTop.on("slideChangeTransitionStart", function() {
                        galleryThumbs.slideTo(galleryTop.activeIndex);
                    });
                    galleryThumbs.on("transitionStart", function() {
                        galleryTop.slideTo(galleryThumbs.activeIndex);
                    });
                }

                initSwiper();

                // Reinitialize Swiper on window resize
                $(window).resize(function() {
                    initSwiper();
                });
            });
        </script>
    @endpush
</x-frontend-app-layout>

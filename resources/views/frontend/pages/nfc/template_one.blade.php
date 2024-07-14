{{-- <!DOCTYPE html>
<html lang="en"> --}}

<head>
    <title>
        {{ !empty(optional($nfc_card->nfcSeo)->site_title) ? optional($nfc_card->nfcSeo)->site_title : $nfc_card->vcard_name }}
    </title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="description" content="{{ optional($nfc_card->nfcSeo)->meta_description }}" />
    <meta name="keywords" content="{{ optional($nfc_card->nfcSeo)->meta_keyword }}" />
    <meta property="og:title" content="{{ optional($nfc_card->nfcSeo)->home_title }}" />
    <meta property="og:url" content="{{ optional($nfc_card->nfcSeo)->site_title }}" />
    <meta property="og:site_name"
        content="{{ !empty(optional($nfc_card->nfcSeo)->site_title) ? optional($nfc_card->nfcSeo)->site_title : $nfc_card->vcard_name }}" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <link rel="shortcut icon" href="https://i.ibb.co/BNBTVN4/logo.png" type="image/x-icon" />
    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <link rel="stylesheet" type="text/css"
        href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css" />

    <style>
        @import url("https://fonts.googleapis.com/css2?family=Almendra+SC&family=Anton&family=Anton+SC&family=Bebas+Neue&family=Jost:ital,wght@0,100..900;1,100..900&family=Margarine&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:ital,wght@0,100..900;1,100..900&family=Roboto+Slab:wght@100..900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap");

        :root {
            --template-one-color-white: #fff;
            --template-one-color-black: #000;
            --template-one-color-primary: #000000;
            --template-one-title-font-size: 48px;
            --template-one-others-font-size: 16px;
            --template-one-font-fmly-Almendra: "Almendra SC", serif;
            --template-one-font-fmly-Almendra: "Almendra SC", serif;
            --template-one-font-fmly-Bebas: "Bebas Neue", sans-serif;
            --template-one-font-fmly-Ubuntu: "Ubuntu", sans-serif;
            --template-one-font-fmly-Anton: "Anton SC", sans-serif;
            --template-one-font-fmly-Margarine: "Margarine", sans-serif;
            --template-one-font-fmly-Roboto: "Roboto Slab", serif;
            --template-one-font-fmly-Jost: "Jost", sans-serif;
            --template-one-font-fmly-Roboto: "Roboto", sans-serif;
            --template-one-font-fmly-Poppins: "Poppins", sans-serif;
            --template-one-font-fmly-Raleway: "Raleway", sans-serif;
        }

        .mobile-frame {
            width: 535px;
            margin: auto;
            max-width: 100%;
            box-shadow: rgba(99, 99, 99, 0.2) 0px 2px 8px 0px;
            background-color: var(--template-one-color-primary);
            font-family: var(--template-one-font-fmly-Roboto);
        }

        .page-content-wrapper {
            width: 100%;
            margin: auto;
            margin-bottom: 62px;
            background-color: var(--template-one-color-primary);
        }

        .img-container-tem1 {
            position: relative;
            display: inline-block;
            /* Or any other display property that suits your layout */
        }

        .img-container-tem1::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(to top,
                    rgb(0, 0, 0),
                    rgba(255, 255, 255, 0));
            pointer-events: none;
            /* Allows clicks to pass through the overlay */
            z-index: 1;
            /* Make sure it's on top of the image */
        }

        .img-container-tem1 img {
            display: block;
            width: 100%;
            height: auto;
        }

        .language-tem1 {
            position: absolute;
            top: 20px;
            right: 20px;
        }

        .profile-img-tem1 {
            box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;
        }

        .profile-img-tem1 img {
            width: 150px;
            height: 150px;
            border: 8px solid white;
            object-fit: cover;
        }

        .name-title-tem1 {
            font-family: var(--template-one-font-fmly-Bebas);
            color: var(--template-one-color-white);
        }

        .social-link-tem1 {
            background: black;
            padding: 10px 15px;
            color: var(--template-one-color-white);
            box-shadow: rgba(255, 255, 255, 0.24) 0px 3px 8px;
            margin-left: 13px;
            border-radius: 50%;
        }

        .text-justify {
            text-align: justify;
        }

        .special-font {
            font-family: var(--template-one-font-fmly-Bebas);
        }

        .divider-tem1 {
            width: 45%;
            height: 2px;
            background-color: var(--template-one-color-white);
        }

        .divider-tem1-icons {
            width: 10%;
        }

        .slick-prev,
        .slick-next {
            font-size: 0;
            line-height: 0;
            position: absolute;
            top: 50%;
            margin: 50px;
            display: block;
            width: 45px;
            height: 45px;
            padding: 0;
            -webkit-transform: translate(0, -50%);
            -ms-transform: translate(0, -50%);
            transform: translate(0, -50%);
            cursor: pointer;
            color: transparent;
            border: none;
            outline: none;
            background: var(--template-one-color-primary);
            z-index: 5;
        }

        .slick-dots li button:before {
            font-family: "slick";
            font-size: 20px;
            line-height: 20px;
            position: absolute;
            top: -45px;
            left: 0;
            width: auto;
            height: auto;
            content: "•";
            text-align: center;
            opacity: 0.25;
            color: var(--template-one-color-primary);
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
            background: transparent;
        }

        .slick-prev:hover,
        .slick-prev:focus,
        .slick-next:hover,
        .slick-next:focus {
            background: var(--template-one-color-primary);
        }

        .slick-prev:before,
        .slick-next:before {
            color: var(--template-one-color-white);
        }

        .product-img-tem1 {
            width: 100%;
            height: 150px;
            object-fit: cover;
        }

        .slick-dots li button:before {
            font-family: "slick";
            font-size: 6px;
            line-height: 20px;
            position: absolute;
            top: -45px;
            left: 0;
            width: 20px;
            height: 20px;
            content: "•";
            text-align: center;
            opacity: 0.25;
            color: var(--template-one-color-primary);
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
            background: var(--template-one-color-white);
        }

        .footer-nav-area-tem1 {
            position: fixed;
            bottom: 0;
            left: 0;
            width: 100%;
            z-index: 1000;
        }

        .footer-nav-tem1 {
            /* background-color: var(--white); */
            box-shadow: rgba(149, 157, 165, 0.2) 0px 8px 24px;
            background-color: var(--info-500);
            width: 535px;
            height: 62px;
            margin: auto;
        }

        .footer-nav-tem1 ul {
            position: relative;
            z-index: 10;
            width: 100%;
            list-style-type: none;
            box-shadow: rgb(255 255 255 / 20%) 0px 2px 8px 0px;
            background: var(--template-one-color-primary);
        }

        .footer-nav-tem1 ul li {
            position: relative;
            z-index: 1;
            -webkit-box-flex: 1;
            -ms-flex: 1 1 0px;
            flex: 1 1 0;
        }

        .slick-slide {
            height: auto;
        }

        .footer-nav-tem1 ul li a {
            position: relative;
            display: block;
            font-size: var(--template-one-others-font-size);
            text-align: center;
            font-weight: 600;
            text-transform: capitalize;
            line-height: 1;
            color: var(--template-one-color-white);
            text-decoration: none;
            z-index: 1;
        }

        .footer-nav-tem1 ul li.active a {
            background-color: var(--template-one-color-white);
            padding: 24px;
            color: var(--template-one-color-primary);
        }

        .modal.fade .load-modal {
            transition: transform 0.3s ease-out;
            transform: translate(-8px, 0) !important;
        }

        .close-btns {
            background-color: var(--template-one-color-white);
        }
    </style>
</head>

<body>
    <main>
        <div class="mobile-frame">
            <div class="page-content-wrapper">
                <!-- Banner -->
                <section>
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-12 px-0 img-container-tem1">
                                <img src="{{ !empty($nfc_card->banner_image) && file_exists(public_path('storage/nfc/' . optional($nfc_card)->banner_image)) ? asset('storage/nfc/' . optional($nfc_card)->banner_image) : asset('frontend/images/no_image.png') }}"
                                    alt="" />
                                {{-- <div class="dropdown language-tem1">
                                    <button class="btn btn-dark dropdown-toggle rounded-0" type="button"
                                        data-bs-toggle="dropdown" aria-expanded="false">
                                        Dropdown button
                                    </button>
                                    <ul class="dropdown-menu rounded-0 w-100">
                                        <li><a class="dropdown-item" href="#">Arabic</a></li>
                                        <li>
                                            <a class="dropdown-item" href="#">Chinese</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="#">English</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="#">English</a>
                                        </li>
                                    </ul>
                                </div> --}}
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Profile Info -->
                @if ($nfc_card->general_info_show == '1')
                    <section>
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="profile-img-tem1 d-flex justify-content-center">
                                        <img class="img-fluid rounded-circle"
                                            src="{{ !empty($nfc_card->profile_image) && file_exists(public_path('storage/nfc/' . optional($nfc_card)->profile_image)) ? asset('storage/nfc/' . optional($nfc_card)->profile_image) : asset('frontend/images/no_image.png') }}"
                                            alt="" />
                                    </div>
                                    <div class="text-center py-4">
                                        <h1 class="name-title-tem1 mb-0">{{ optional($nfc_card->nfcData)->first_name }}&nbsp;{{ optional($nfc_card->nfcData)->last_name }}</h1>
                                        <p class="text-white">{{ optional($nfc_card)->designation }} </p>
                                    </div>
                                    @if ($nfc_card->social_links_show == '1')
                                        <div class="d-flex justify-content-center align-items-center">
                                            {{-- <a href="{{ optional($nfc_card->nfcData)->website_url }}"
                                                class="social-link-tem1">
                                                <i class="fa-solid fa-globe"></i>
                                            </a> --}}
                                            <a href="{{ optional($nfc_card->nfcData)->facebook_url }}"
                                                class="social-link-tem1">
                                                <i class="fa-brands fa-facebook-f"></i>
                                            </a>
                                            <a href="{{ optional($nfc_card->nfcData)->instagram_url }}"
                                                class="social-link-tem1">
                                                <i class="fa-brands fa-instagram"></i>
                                            </a>
                                            <a href="{{ optional($nfc_card->nfcData)->linkedin_url }}"
                                                class="social-link-tem1">
                                                <i class="fa-brands fa-linkedin-in"></i>
                                            </a>
                                            <a href="{{ optional($nfc_card->nfcData)->whatsapp_url }}"
                                                class="social-link-tem1">
                                                <i class="fa-brands fa-whatsapp"></i>
                                            </a>
                                            {{-- <a href="{{ optional($nfc_card->nfcData)->twitter_url }}"
                                                class="social-link-tem1">
                                                <i class="fa-brands fa-twitter"></i>
                                            </a>
                                            <a href="{{ optional($nfc_card->nfcData)->youtube_url }}"
                                                class="social-link-tem1">
                                                <i class="fa-brands fa-youtube"></i>
                                            </a>
                                            <a href="{{ optional($nfc_card->nfcData)->pinterest_url }}"
                                                class="social-link-tem1">
                                                <i class="fa-brands fa-pinterest"></i>
                                            </a>
                                            <a href="{{ optional($nfc_card->nfcData)->reddit_url }}"
                                                class="social-link-tem1">
                                                <i class="fa-brands fa-reddit"></i>
                                            </a>
                                            <a href="{{ optional($nfc_card->nfcData)->tumblr_url }}"
                                                class="social-link-tem1">
                                                <i class="fa-brands fa-tumblr"></i>
                                            </a>
                                            <a href="{{ optional($nfc_card->nfcData)->tiktok_url }}"
                                                class="social-link-tem1">
                                                <i class="fa-brands fa-tiktok"></i>
                                            </a> --}}
                                        </div>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- Bio Area -->
                    @if (!empty($nfc_card->bio_description))
                        <section>
                            <div class="container py-5">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <p class="text-center text-white">
                                            {{ $nfc_card->bio_description }}
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </section>
                    @endif
                    <!-- Date Area -->
                    @if (
                        !empty($nfc_card->nfcData->email_personal) ||
                            !empty($nfc_card->nfcData->email_work) ||
                            !empty($nfc_card->nfcData->phone_personal) ||
                            !empty($nfc_card->nfcData->phone_work) ||
                            !empty($nfc_card->nfcData->location) ||
                            !empty($nfc_card->nfcData->date_of_birth) ||
                            !empty($nfc_card->nfcData->address_line_two))
                        <section>
                            <div class="container py-5 pt-0">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div>
                                            <div class="d-flex align-items-center">
                                                <div class="bg-white p-3">
                                                    <i class="fa fa-envelope social_icons text-black fs-3"></i>
                                                </div>
                                                <div class="text-white ps-3">
                                                    <small class="mb-0">E-Mail Address</small>
                                                    <p class="mb-0 special-font fs-6">
                                                        {{ $nfc_card->nfcData->email_personal }}</p>
                                                    <p class="mb-0 special-font fs-6">
                                                        {{ $nfc_card->nfcData->email_work }}</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div>
                                            <div class="d-flex align-items-center">
                                                <div class="bg-white p-3">
                                                    <i class="fa fa-phone social_icons text-black fs-3"></i>
                                                </div>
                                                <div class="text-white ps-3">
                                                    <small class="mb-0">Mobile Number</small>
                                                    <p class="mb-0 fs-6 special-font">
                                                        {{ $nfc_card->nfcData->phone_personal }}</p>
                                                    <p class="mb-0 fs-6 special-font">
                                                        {{ $nfc_card->nfcData->phone_work }}</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 mt-4">
                                        <div>
                                            <div class="d-flex align-items-center">
                                                <div class="bg-white p-3">
                                                    <i class="fa fa-cake-candles social_icons text-black fs-3"></i>
                                                </div>
                                                <div class="text-white ps-3">
                                                    <small class="mb-0">Date Of Birth</small>
                                                    <p class="mb-0 fs-6 special-font">
                                                        {{ $nfc_card->nfcData->date_of_birth }}</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 mt-4">
                                        <div>
                                            <div class="d-flex align-items-center">
                                                <div class="bg-white p-3">
                                                    <i class="fa-solid fa-flag-usa social_icons text-black fs-3"></i>
                                                </div>
                                                <div class="text-white ps-3">
                                                    <small class="mb-0">Country</small>
                                                    <p class="mb-0 fs-6 special-font">
                                                        {{ $nfc_card->nfcData->location }}</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                    @endif
                @endif
                <!-- Company Info -->
                @if ($nfc_card->companies_show == '1')
                    <section>
                        <div class="container py-5">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="text-center">
                                        <h1 class="special-font text-white">My Company</h1>
                                        <div class="d-flex align-items-center px-5 w-50 mx-auto">
                                            <span class="divider-tem1"></span>
                                            <span class="divider-tem1-icons text-center"><i
                                                    class="fa-solid fa-diamond text-white"></i></span>
                                            <span class="divider-tem1"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="company-slide text-white px-0">
                                    @foreach ($nfc_card->nfcCompany as $company)
                                        <div class="">
                                            <div class="row pt-3 align-items-center">
                                                <div class="col-md-12 pb-3">
                                                    <div class="text-center text-white">
                                                        <h5>{{ $company->company_name }}</h5>
                                                        <p class="p-3 mb-0" style="text-align: justify">
                                                            {{ $company->company_description }}
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div
                                                        class="text-white d-flex justify-content-between py-4 pt-0 px-3">
                                                        <div>
                                                            <p class="mb-0">
                                                                <span><i
                                                                        class="fa-solid fa-diamond pe-3"></i>{{ $company->company_website }}</span>
                                                            </p>
                                                            <p class="mb-0">
                                                                <span><i class="fa-solid fa-diamond pe-3"></i>+1
                                                                    {{ $company->company_phone }}</span>
                                                            </p>
                                                            <p class="mb-0">
                                                                <span><i
                                                                        class="fa-solid fa-diamond pe-3"></i>{{ $company->company_email }}</span>
                                                            </p>
                                                            <p class="mb-0">
                                                                <span><i
                                                                        class="fa-solid fa-diamond pe-3"></i>{{ $company->company_address_line_one }}
                                                                    {{ $company->company_address_line_two }}
                                                                </span>
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 pe-0">
                                                    <div>
                                                        <a href="{{ $company->company_facebook }}"
                                                            class="btn btn-dark w-100 rounded-0 mb-2">Facebook</a>
                                                        <a href="{{ $company->company_youtube }}"
                                                            class="btn btn-dark w-100 rounded-0 mb-2">YouTube</a>
                                                        <a href="{{ $company->company_linkedin }}"
                                                            class="btn btn-dark w-100 rounded-0 mb-2">Linkedin</a>
                                                        <a href="{{ $company->company_instagram }}"
                                                            class="btn btn-dark w-100 rounded-0 mb-2">Instagram</a>
                                                        <a href="{{ $company->company_twitter }}"
                                                            class="btn btn-dark w-100 rounded-0 mb-2">Twitter</a>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 bg-white d-flex justify-content-center mt-0"
                                                    style="height: 218px; margin: auto">
                                                    <div class="d-flex justify-content-center align-items-center">
                                                        <img class="img-fluid" width="150px"
                                                            src="{{ !empty($company->company_logo) && file_exists(public_path('storage/nfc/company/' . optional($company)->company_logo)) ? asset('storage/nfc/company/' . optional($company)->company_logo) : asset('frontend/images/no_image.png') }}"
                                                            alt="" />
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </section>
                @endif
                <!-- Servies Box -->
                @if ($nfc_card->services_show == '1')
                    <section>
                        <div class="container pb-5">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="text-center">
                                        <h1 class="special-font text-white">My Services</h1>
                                        <div class="d-flex align-items-center px-5 w-50 mx-auto">
                                            <span class="divider-tem1"></span>
                                            <span class="divider-tem1-icons text-center"><i
                                                    class="fa-solid fa-diamond text-white"></i></span>
                                            <span class="divider-tem1"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="service-slide pt-3">
                                @foreach ($nfc_card->nfcService as $service)
                                    <div class="card me-2 rounded-0 border-0 service-details-box">
                                        <div class="card-body border-0 bg-dark">
                                            <div>
                                                <img class="card-img-top"
                                                    src="{{ !empty($service->service_icon) && file_exists(public_path('storage/nfc/service/' . optional($service)->service_icon)) ? asset('storage/nfc/service/' . optional($service)->service_icon) : asset('frontend/images/no_image.png') }}"
                                                    alt="" />
                                            </div>
                                            <div class="mt-3 text-center" style="">
                                                <h4 class="mb-0 special-font text-white">
                                                    {{ $service->service_name }}
                                                </h4>
                                                <p class="text-white">
                                                    {!! $service->service_description !!}
                                                </p>
                                                <div class="w-50 mx-auto">
                                                    <a href="{{ $service->service_url }}"
                                                        class="btn btn-light rounded-0 w-100 border-2 border-dark py-2">
                                                        View Service <i class="fa-solid fa-arrow-right-long"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </section>
                @endif

                <!-- Product -->
                @if ($nfc_card->products_show == '1')
                    <section>
                        <div class="container pb-5">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="text-center">
                                        <h1 class="special-font text-white">My Product</h1>
                                        <div class="d-flex align-items-center px-5 w-50 mx-auto">
                                            <span class="divider-tem1"></span>
                                            <span class="divider-tem1-icons text-center"><i
                                                    class="fa-solid fa-diamond text-white"></i></span>
                                            <span class="divider-tem1"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row pt-3 product-slide">
                                @foreach ($nfc_card->nfcProduct as $product)
                                    <div class="col-md-4 me-2">
                                        <div class="card border-0">
                                            <div class="card-body p-0">
                                                <div>
                                                    <img class="img-fluid rounded-2 product-img-tem1"
                                                        src="{{ !empty($product->product_icon) && file_exists(public_path('storage/nfc/product/' . optional($product)->product_icon)) ? asset('storage/nfc/product/' . optional($product)->product_icon) : asset('frontend/images/no_image.png') }}"
                                                        alt="" />
                                                </div>
                                                <div
                                                    class="d-flex justify-content-between px-4 py-3 align-items-center bg-dark">
                                                    <h6 class="special-font mb-0 text-white">
                                                        {{ $product->product_name }}</h6>
                                                    <h6 class="special-font mb-0 text-white">
                                                        @if ($product->product_currency == 'taka')
                                                            Tk
                                                        @elseif ($product->product_currency == 'euro')
                                                            €
                                                        @elseif ($product->product_currency == 'dollar')
                                                            $
                                                        @elseif ($product->product_currency == 'pound')
                                                            £
                                                        @endif
                                                        &nbsp;{{ $product->product_price }}
                                                    </h6>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </section>
                @endif
                <!-- Galery -->
                @if ($nfc_card->galleries_show == '1')
                    <section>
                        <div class="container pb-5">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="text-center">
                                        <h1 class="special-font text-white">My Gallery</h1>
                                        <div class="d-flex align-items-center px-5 w-50 mx-auto">
                                            <span class="divider-tem1"></span>
                                            <span class="divider-tem1-icons text-center"><i
                                                    class="fa-solid fa-diamond text-white"></i></span>
                                            <span class="divider-tem1"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row pt-3">
                                <div class="col-lg-12">
                                    <div class="galery-slide">
                                        @foreach ($nfc_card->nfcGallery as $gallery)
                                            <div>
                                                @if ($gallery->gallery_type == 'image')
                                                    <img class="w-100 img-fluid"
                                                        src="{{ !empty($gallery->gallery_attachment) && file_exists(public_path('storage/nfc/gallery/' . optional($gallery)->gallery_attachment)) ? asset('storage/nfc/gallery/' . optional($gallery)->gallery_attachment) : asset('frontend/images/no_image.png') }}"
                                                        alt="" />
                                                @else
                                                    <iframe src="{{ optional($gallery)->gallery_attachment }}"
                                                        frameborder="0"></iframe>
                                                @endif
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                @endif
                <!-- Testimonial -->
                @if ($nfc_card->testimonials_show == '1')
                    <section>
                        <div class="container pb-5">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="text-center">
                                        <h1 class="special-font text-white">My Testimonial</h1>
                                        <div class="d-flex align-items-center px-5 w-50 mx-auto">
                                            <span class="divider-tem1"></span>
                                            <span class="divider-tem1-icons text-center"><i
                                                    class="fa-solid fa-diamond text-white"></i></span>
                                            <span class="divider-tem1"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-10 col-offset-md-1 mx-auto">
                                    <div class="testimonial-slide">
                                        @foreach ($nfc_card->nfcTestimonial as $testimonial)
                                            <div class="card p-0 bg-dark border-0 p-0 mt-5">
                                                <div class="card-body rounded-0 border-0">
                                                    <div class="d-flex justify-content-center"
                                                        style="margin-top: -40px">
                                                        <img class="img-fluid" width="80px" height="80px"
                                                            src="{{ !empty($testimonial->testimonial_image) && file_exists(public_path('storage/nfc/testimonial/' . optional($testimonial)->testimonial_image)) ? asset('storage/nfc/testimonial/' . optional($testimonial)->testimonial_image) : asset('frontend/images/no_image.png') }}"
                                                            alt="" />
                                                    </div>
                                                    <h4 class="special-font text-white text-center pt-3">
                                                        {{ $testimonial->testimonial_name }}
                                                    </h4>
                                                    {{-- <p class="text-white text-center pt-3">
                                                        Real Estate Broker
                                                    </p> --}}
                                                    <p class="mb-0 text-white text-center">
                                                        {{ $testimonial->testimonial_description }}
                                                    </p>
                                                    <div class="d-flex justify-content-center pt-3">
                                                        <a href="" style="text-decoration: none">
                                                            <i class="fa-solid fa-star text-warning"></i>
                                                        </a>
                                                        <a href="" style="text-decoration: none">
                                                            <i class="fa-solid fa-star text-warning"></i>
                                                        </a>
                                                        <a href="" style="text-decoration: none">
                                                            <i class="fa-solid fa-star text-warning"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                @endif
                <!-- Testimonial -->
                @if ($nfc_card->show_qr_code == '1')
                    <section>
                        <div class="container pb-5">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="text-center">
                                        <h1 class="special-font text-white">QR Code</h1>
                                        <div class="d-flex align-items-center px-5 w-50 mx-auto">
                                            <span class="divider-tem1"></span>
                                            <span class="divider-tem1-icons text-center"><i
                                                    class="fa-solid fa-diamond text-white"></i></span>
                                            <span class="divider-tem1"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row pt-3">
                                <div class="col-md-12">
                                    <div class="w-50 mx-auto">
                                        @if (!empty($nfc_card->nfc_qr) && file_exists(public_path('storage/nfc/qrs/' . $nfc_card->nfc_qr)))
                                            <img class="img-fluid"
                                                src="{{ asset('storage/nfc/qrs/' . $nfc_card->nfc_qr) }}"
                                                alt="" />
                                        @endif
                                        @if ($nfc_card->enable_download_qr_code == '1')
                                            <div>
                                                <a href="{{ asset('storage/nfc/qrs/' . $nfc_card->nfc_qr) }}"
                                                    download=""
                                                    class="btn btn-dark rounded-0 w-100 border-2 border-dark">Download
                                                    QR</a>
                                            </div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                @endif
                <!-- Business Hours -->
                @if ($nfc_card->business_hours_show == '1')
                    <section>
                        <div class="container pb-5">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="text-center">
                                        <h1 class="special-font text-white">Business Hours</h1>
                                        <div class="d-flex align-items-center px-5 w-50 mx-auto">
                                            <span class="divider-tem1"></span>
                                            <span class="divider-tem1-icons text-center"><i
                                                    class="fa-solid fa-diamond text-white"></i></span>
                                            <span class="divider-tem1"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row pt-5">
                                @if (optional($nfc_card->nfcData)->monday == '1')
                                    <div class="col-md-6 mb-2">
                                        <div>
                                            <div class="text-center text-white">
                                                <i class="fa fa-calendar houricon"></i>
                                            </div>
                                            <div class="text-center">
                                                <p class="mb-0 text-white special-font">Monday</p>
                                                <p class="mb-0 text-white">
                                                    {{ optional($nfc_card->nfcData)->start_time_monday }} -
                                                    {{ optional($nfc_card->nfcData)->end_time_monday }}</p>
                                            </div>
                                        </div>
                                    </div>
                                @endif
                                @if (optional($nfc_card->nfcData)->tuesday == '1')
                                    <div class="col-md-6 mb-2">
                                        <div>
                                            <div class="text-center text-white">
                                                <i class="fa fa-calendar houricon"></i>
                                            </div>
                                            <div class="text-center">
                                                <p class="mb-0 text-white special-font">Tuesday</p>
                                                <p class="mb-0 text-white">
                                                    {{ optional($nfc_card->nfcData)->start_time_tuesday }} -
                                                    {{ optional($nfc_card->nfcData)->end_time_monday }}</p>
                                            </div>
                                        </div>
                                    </div>
                                @endif
                                @if (optional($nfc_card->nfcData)->wednesday == '1')
                                    <div class="col-md-6 mb-2">
                                        <div>
                                            <div class="text-center text-white">
                                                <i class="fa fa-calendar houricon"></i>
                                            </div>
                                            <div class="text-center">
                                                <p class="mb-0 text-white special-font">Wednesday</p>
                                                <p class="mb-0 text-white">
                                                    {{ optional($nfc_card->nfcData)->start_time_wednesday }} -
                                                    {{ optional($nfc_card->nfcData)->end_time_monday }}</p>
                                            </div>
                                        </div>
                                    </div>
                                @endif
                                @if (optional($nfc_card->nfcData)->thursday == '1')
                                    <div class="col-md-6 mb-2">
                                        <div>
                                            <div class="text-center text-white">
                                                <i class="fa fa-calendar houricon"></i>
                                            </div>
                                            <div class="text-center">
                                                <p class="mb-0 text-white special-font">Thursday</p>
                                                <p class="mb-0 text-white">
                                                    {{ optional($nfc_card->nfcData)->start_time_thursday }} -
                                                    {{ optional($nfc_card->nfcData)->end_time_monday }}</p>
                                            </div>
                                        </div>
                                    </div>
                                @endif
                                @if (optional($nfc_card->nfcData)->friday == '1')
                                    <div class="col-md-6 mb-2">
                                        <div>
                                            <div class="text-center text-white">
                                                <i class="fa fa-calendar houricon"></i>
                                            </div>
                                            <div class="text-center">
                                                <p class="mb-0 text-white special-font">Friday</p>
                                                <p class="mb-0 text-white">
                                                    {{ optional($nfc_card->nfcData)->start_time_friday }} -
                                                    {{ optional($nfc_card->nfcData)->end_time_monday }}</p>
                                            </div>
                                        </div>
                                    </div>
                                @endif
                                @if (optional($nfc_card->nfcData)->saturday == '1')
                                    <div class="col-md-6 mb-2">
                                        <div>
                                            <div class="text-center text-white">
                                                <i class="fa fa-calendar houricon"></i>
                                            </div>
                                            <div class="text-center">
                                                <p class="mb-0 text-white special-font">Saturday</p>
                                                <p class="mb-0 text-white">
                                                    {{ optional($nfc_card->nfcData)->start_time_saturday }} -
                                                    {{ optional($nfc_card->nfcData)->end_time_monday }}</p>
                                            </div>
                                        </div>
                                    </div>
                                @endif
                                @if (optional($nfc_card->nfcData)->sunday == '1')
                                    <div class="col-md-6 mb-2">
                                        <div>
                                            <div class="text-center text-white">
                                                <i class="fa fa-calendar houricon"></i>
                                            </div>
                                            <div class="text-center">
                                                <p class="mb-0 text-white special-font">Sunday</p>
                                                <p class="mb-0 text-white">
                                                    {{ optional($nfc_card->nfcData)->start_time_sunday }} -
                                                    {{ optional($nfc_card->nfcData)->end_time_monday }}</p>
                                            </div>
                                        </div>
                                    </div>
                                @endif
                            </div>
                        </div>
                    </section>
                @endif
                <!-- Contact Area -->
                <section>
                    <div class="container pb-5">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="text-center">
                                    <h1 class="special-font text-white">Contact</h1>
                                    <div class="d-flex align-items-center px-5 w-50 mx-auto">
                                        <span class="divider-tem1"></span>
                                        <span class="divider-tem1-icons text-center"><i
                                                class="fa-solid fa-diamond text-white"></i></span>
                                        <span class="divider-tem1"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row pt-4">
                            <div class="co-md-12">
                                <form action="{{ route('individual-message.store') }}" method="post">
                                    @csrf
                                    <input type="hidden" name="user_id" value="{{ optional($nfc_card)->user_id }}">
                                    <input type="hidden" name="nfc_id" value="{{ optional($nfc_card)->id }}">
                                    <input type="hidden" name="nfc_code" value="{{ optional($nfc_card)->code }}">
                                    <div class="row">
                                        <div class="col-lg-12 mb-3">
                                            <input type="text" name="name"
                                                class="form-control form-control-sm rounded-0 w-75 mx-auto rounded-1 p-2"
                                                placeholder="Enter Your Names" />
                                        </div>
                                        <div class="col-lg-12 mb-3">
                                            <input type="email" name="email"
                                                class="form-control form-control-sm rounded-0 w-75 mx-auto rounded-1 p-2"
                                                placeholder="Enter Your Email" />
                                        </div>
                                        <div class="col-lg-12 mb-3">
                                            <input type="text" name="phone"
                                                class="form-control form-control-sm rounded-0 w-75 mx-auto rounded-1 p-2"
                                                placeholder="Enter Your Phone" />
                                        </div>
                                        <div class="col-lg-12 mb-3">
                                            <textarea name="message" class="form-control form-control-sm rounded-0 w-75 mx-auto rounded-1 p-2" id=""
                                                rows="5"></textarea>
                                        </div>
                                        <div class="col-lg-12 w-75 mx-auto px-2">
                                            <button type="submit" class="btn btn-dark w-100">
                                                Send Message <i class="fa-solid fa-paper-plane"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        @php
                            $currentUrl = request()->url();
                            $whatsappLink =
                                'https://wa.me/?text=' . urlencode('Check out My NFC Profile: ' . $currentUrl);
                        @endphp

                        <!-- Create a button or link to share via WhatsApp -->

                        <div class="row py-5">
                            <div class="col-lg-12">
                                <div class="text-center">
                                    <h1 class="special-font text-white">Share</h1>
                                    <div class="d-flex align-items-center px-5 w-50 mx-auto">
                                        <span class="divider-tem1"></span>
                                        <span class="divider-tem1-icons text-center"><i
                                                class="fa-solid fa-diamond text-white"></i></span>
                                        <span class="divider-tem1"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-7 col-offset-lg-6 mx-auto">
                                <a href="{{ $whatsappLink }}" target="_blank" rel="noopener noreferrer"
                                    class="btn btn-dark w-100 p-3">
                                    <i class="fa-solid fa-paper-plane"></i> Share This Vcard
                                </a>

                            </div>
                        </div>
                    </div>
                </section>
            </div>
            <div class="footer-nav-area-tem1" id="footerNav">
                <div class="container px-0">
                    <!-- Footer Content -->
                    <div class="footer-nav-tem1 position-relative">
                        <ul class="h-100 d-flex align-items-center justify-content-between ps-0">
                            <li class="active">
                                <a href="{{ asset('storage/nfc/qrs/' . $nfc_card->nfc_qr) }}" download="">
                                    <i class="fa-solid fa-qrcode"></i>
                                    <span>QR</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="copy-link" data-link="$currentUrl">
                                    <i class="fa-solid fa-copy"></i>
                                    <span>Copy Link</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="nfc_contact_btn_pc">
                                    <i class="fa-solid fa-file-arrow-down"></i>
                                    <span>Save VFC</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- On Page Load Show Modal -->
        <!-- Modal -->
        @if ($nfc_card->banner == '1')
            <div class="modal fade" id="myModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog load-modal modal-dialog-centered">
                    <div class="modal-content rounded-0">
                        <div class="modal-header bg-dark rounded-0 text-white">
                            <h5 class="modal-title" id="exampleModalLabel">
                                {{ optional($nfc_card->nfcBanner)->banner_title }}</h5>
                            <button type="button" class="btn-close text-white close-btns" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            {{ optional($nfc_card->nfcBanner)->banner_description }}
                        </div>
                    </div>
                </div>
            </div>
        @endif

        <!-- On Page Load Show Modal End -->
    </main>

    <script src="https://kit.fontawesome.com/69b7156a94.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"></script>

    <script type="text/javascript" src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

    <!-- On Page Load Show Modal -->
    <script>
        var myModal = new bootstrap.Modal(document.getElementById("myModal"), {
            keyboard: false, // Optional: Disable closing modal with keyboard Esc key
        });
        $(document).ready(function() {
            myModal.show(); // Show the modal on document ready
        });
    </script>
    <!-- Copy On Click -->
    <script>
        document.addEventListener("DOMContentLoaded", (event) => {
            document.querySelectorAll(".copy-link").forEach((element) => {
                element.addEventListener("click", (event) => {
                    event.preventDefault();
                    const link = event.currentTarget.getAttribute("data-link");
                    navigator.clipboard
                        .writeText(link)
                        .then(() => {
                            alert("Link copied to clipboard!");
                        })
                        .catch((err) => {
                            console.error("Failed to copy: ", err);
                        });
                });
            });
        });
    </script>
    <!-- All Slider -->
    <script type="text/javascript">
        $(document).ready(function() {
            $(".company-slide").slick({
                infinite: true, // Infinite looping
                speed: 500, // Animation speed in milliseconds
                slidesToShow: 1, // Number of slides to show at once
                slidesToScroll: 1, // Number of slides to scroll at once
                autoplay: true, // Enable autoplay
                autoplaySpeed: 2000, // Autoplay speed in milliseconds
                gap: 10,
                prevArrow: '<button type="button" class="slick-prev"><i class="fas fa-chevron-left"></i></button>',
                nextArrow: '<button type="button" class="slick-next"><i class="fas fa-chevron-right"></i></button>',
            });
            $(".service-slide").slick({
                infinite: true, // Infinite looping
                speed: 500, // Animation speed in milliseconds
                slidesToShow: 1, // Number of slides to show at once
                slidesToScroll: 1, // Number of slides to scroll at once
                autoplay: true, // Enable autoplay
                autoplaySpeed: 2000, // Autoplay speed in milliseconds
                arrows: true, // Show next/prev arrows
                gap: 10,
                prevArrow: '<button type="button" class="slick-prev"><i class="fa fa-chevron-left"></i></button>',
                nextArrow: '<button type="button" class="slick-next"><i class="fa fa-chevron-right"></i></button>',
            });
            $(".product-slide").slick({
                infinite: true,
                speed: 500,
                slidesToShow: 3,
                slidesToScroll: 1,
                autoplay: true,
                autoplaySpeed: 2000,
                arrows: false,
            });
            $(".galery-slide").slick({
                infinite: true,
                speed: 500,
                slidesToShow: 1,
                slidesToScroll: 1,
                autoplay: true,
                autoplaySpeed: 2000,
                arrows: false,
                dots: true,
            });
            $(".testimonial-slide").slick({
                infinite: true,
                speed: 500,
                slidesToShow: 1,
                slidesToScroll: 1,
                autoplay: true,
                autoplaySpeed: 2000,
                arrows: false,
            });
        });
    </script>
    <script>
        'use strict';

        function downloadToFile(content, filename, contentType) {
            const a = document.createElement('a');
            const file = new Blob([content], {
                type: contentType
            });

            a.href = URL.createObjectURL(file);
            a.download = filename;
            a.click();

            URL.revokeObjectURL(a.href);
        }

        function getBase64Image(imgUrl, callback) {
            const img = new Image();
            img.crossOrigin = 'Anonymous';
            img.onload = () => {
                const canvas = document.createElement('canvas');
                canvas.width = img.width;
                canvas.height = img.height;
                const ctx = canvas.getContext('2d');
                ctx.drawImage(img, 0, 0);
                const dataURL = canvas.toDataURL('image/jpeg');
                callback(dataURL.replace(/^data:image\/(png|jpeg);base64,/, ''));
            };
            img.onerror = () => {
                console.error('Failed to load image:', imgUrl);
                callback(null);
            };
            img.src = imgUrl;
        }

        const makeVCardVersion = () => `VERSION:3.0`;
        const makeVCardInfo = (lastName, firstName) => `N:${lastName || ''};${firstName || ''};;;`;
        const makeVCardName = (firstName, lastName) => `FN:${firstName || ''} ${lastName || ''}`;
        const makeVCardOrg = (org) => `ORG:${org || ''}`;
        const makeVCardTitle = (title) => `TITLE:${title || ''}`;
        const makeVCardPhoto = (imgBase64) => `PHOTO;ENCODING=b;TYPE=JPEG:${imgBase64}`;
        const makeVCardTel = (phone) => `TEL;TYPE=CELL:${phone || ''}`;
        const makeVCardAdr = (addressLine1, addressLine2) =>
            `ADR;TYPE=HOME:;;${addressLine1 || ''};${addressLine2 || ''};;;;`;
        const makeVCardEmail = (email) => `EMAIL:${email || ''}`;
        const makeVCardUrl = (url) => `URL:${url || ''}`;
        const makeVCardSocialProfile = (type, url) => `X-SOCIALPROFILE;TYPE=${type}:${url || ''}`;
        const makeVCardTimeStamp = () => `REV:${new Date().toISOString()}`;

        function makeVCard(profileImageBase64) {
            const firstName = '{{ optional($nfc_card->nfcData)->first_name }}';
            const lastName = '{{ optional($nfc_card->nfcData)->last_name }}';
            const designation = '{{ optional($nfc_card)->designation }}';
            const phone = '{{ optional($nfc_card->nfcData)->phone_personal }}';
            const email = '{{ optional($nfc_card->nfcData)->email_personal }}';
            const addressLine1 = '{{ optional($nfc_card->nfcData)->address_line_one }}';
            const addressLine2 = '{{ optional($nfc_card->nfcData)->address_line_two }}';
            const linkedin = '{{ optional($nfc_card->nfcData)->linkedin_url }}';

            let vcard = `BEGIN:VCARD\n${makeVCardVersion()}\n`;
            vcard += `${makeVCardInfo(lastName, firstName)}\n`;
            vcard += `${makeVCardName(firstName, lastName)}\n`;
            vcard += `${makeVCardTitle(designation)}\n`;

            if (profileImageBase64) {
                vcard += `${makeVCardPhoto(profileImageBase64)}\n`;
            }

            vcard += `${makeVCardTel(phone)}\n`;

            if (addressLine1 || addressLine2) {
                vcard += `${makeVCardAdr(addressLine1, addressLine2)}\n`;
            }

            if (email) {
                vcard += `${makeVCardEmail(email)}\n`;
            }

            if (linkedin) {
                vcard += `${makeVCardUrl(linkedin)}\n`;
                vcard += `${makeVCardSocialProfile('linkedin', linkedin)}\n`;
            }

            vcard += `${makeVCardTimeStamp()}\nEND:VCARD`;

            return vcard;
        }

        function handleContactButtonClick(event, isMobile) {
            event.preventDefault(); // Prevent default link behavior

            const profileImage = '{{ asset('storage/nfc/' . optional($nfc_card)->profile_image) }}';

            getBase64Image(profileImage, (base64Image) => {
                const vcard = makeVCard(base64Image);

                if (isMobile) {
                    // Open vCard details in contact app for mobile
                    const encodedVcfContent = encodeURIComponent(vcard);
                    const uri = 'data:text/vcard;charset=utf-8,' + encodedVcfContent;
                    window.location.href = uri;
                } else {
                    // Download vCard for PC
                    const fileName = `${firstName}_${lastName}_contact.vcf`;
                    downloadToFile(vcard, fileName, 'text/vcard');
                }
            });
        }

        document.querySelector('.nfc_contact_btn_pc').addEventListener('click', (event) => {
            handleContactButtonClick(event, false);
        });

        document.querySelector('.nfc_contact_btn_mobile').addEventListener('click', (event) => {
            handleContactButtonClick(event, true);
        });
    </script>

</body>

{{-- </html> --}}

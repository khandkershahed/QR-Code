<!DOCTYPE html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
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
                                <img src="https://t3.ftcdn.net/jpg/05/14/95/12/360_F_514951224_2dxMLbIw5qNRdPGD003chpbVcxWtcp7K.jpg"
                                    alt="" />
                                <div class="dropdown language-tem1">
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
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Profile Info -->
                <section>
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="profile-img-tem1 d-flex justify-content-center">
                                    <img class="img-fluid rounded-circle"
                                        src="https://images.ctfassets.net/h6goo9gw1hh6/2sNZtFAWOdP1lmQ33VwRN3/24e953b920a9cd0ff2e1d587742a2472/1-intro-photo-final.jpg?w=1200&h=992&fl=progressive&q=70&fm=jpg"
                                        alt="" />
                                </div>
                                <div class="text-center py-4">
                                    <h1 class="name-title-tem1 mb-0">Flixza Global</h1>
                                    <p class="text-white">Real State Broker</p>
                                </div>
                                <div class="d-flex justify-content-center align-items-center">
                                    <a href="" class="social-link-tem1"><i
                                            class="fa-brands fa-facebook-f"></i></a>
                                    <a href="" class="social-link-tem1"><i
                                            class="fa-brands fa-instagram"></i></a>
                                    <a href="" class="social-link-tem1"><i
                                            class="fa-brands fa-linkedin-in"></i></a>
                                    <a href="" class="social-link-tem1"><i class="fa-brands fa-whatsapp"></i></a>
                                    <a href="" class="social-link-tem1"><i class="fa-brands fa-twitter"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Bio Area -->
                <section>
                    <div class="container py-5">
                        <div class="row">
                            <div class="col-lg-12">
                                <p class="text-center text-white">
                                    Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                                    Molestias accusamus officiis alias eaque voluptatibus
                                    necessitatibus, facere ex dicta! Aliquid, perspiciatis quos.
                                    Quos eveniet maiores illo debitis pariatur similique dicta
                                    cupiditate?
                                </p>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Date Area -->
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
                                            <p class="mb-0 special-font fs-5">goflixza@gmail.com</p>
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
                                            <p class="mb-0 fs-5 special-font">+19 85678454</p>
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
                                            <p class="mb-0 fs-5 special-font">19 July 2024</p>
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
                                            <p class="mb-0 fs-5 special-font">Washington - USA</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Company Info -->
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
                                <div class="">
                                    <div class="row pt-3 align-items-center">
                                        <div class="col-md-12 pb-3">
                                            <div class="text-center text-white">
                                                <h5>Neez International Ltd.</h5>
                                                <p class="p-3 mb-0" style="text-align: justify">
                                                    Lorem ipsum dolor sit amet consectetur adipisicing
                                                    elit. Velit numquam, rerum ea quibusdam nobis
                                                    reprehenderit dolorum autem fuga labore. Lorem ipsum
                                                    dolor sit amet consectetur adipisicing elit. Velit
                                                    numquam, rerum ea quibusdam nobis reprehenderit
                                                    dolorum autem fuga labore.
                                                </p>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="text-white d-flex justify-content-between py-4 pt-0 px-3">
                                                <div>
                                                    <p class="mb-0">
                                                        <span><i
                                                                class="fa-solid fa-diamond pe-3"></i>www.neezonline.com</span>
                                                    </p>
                                                    <p class="mb-0">
                                                        <span><i class="fa-solid fa-diamond pe-3"></i>+1
                                                            98656584584</span>
                                                    </p>
                                                </div>
                                                <div>
                                                    <p class="mb-0">
                                                        <span><i
                                                                class="fa-solid fa-diamond pe-3"></i>info@flixzaglobal.com</span>
                                                    </p>
                                                    <p class="mb-0">
                                                        <span><i class="fa-solid fa-diamond pe-3"></i>1184
                                                            Davis Pl NW, Atlanta, Georgia</span>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 pe-0">
                                            <div>
                                                <a href=""
                                                    class="btn btn-dark w-100 rounded-0 mb-2">Facebook</a>
                                                <a href=""
                                                    class="btn btn-dark w-100 rounded-0 mb-2">YouTube</a>
                                                <a href=""
                                                    class="btn btn-dark w-100 rounded-0 mb-2">Linkedin</a>
                                                <a href=""
                                                    class="btn btn-dark w-100 rounded-0 mb-2">Instagram</a>
                                                <a href="" class="btn btn-dark w-100 rounded-0 mb-2">What's
                                                    App</a>
                                            </div>
                                        </div>
                                        <div class="col-md-6 bg-white d-flex justify-content-center mt-0"
                                            style="height: 218px; margin: auto">
                                            <div class="d-flex justify-content-center align-items-center">
                                                <img class="img-fluid" width="150px"
                                                    src="https://i.ibb.co/RvYHMvy/logo.png" alt="" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="">
                                    <div class="row pt-3 align-items-center">
                                        <div class="col-md-12 pb-3">
                                            <div class="text-center text-white">
                                                <h5>Neez International Ltd.</h5>
                                                <p class="p-3 mb-0" style="text-align: justify">
                                                    Lorem ipsum dolor sit amet consectetur adipisicing
                                                    elit. Velit numquam, rerum ea quibusdam nobis
                                                    reprehenderit dolorum autem fuga labore. Lorem ipsum
                                                    dolor sit amet consectetur adipisicing elit. Velit
                                                    numquam, rerum ea quibusdam nobis reprehenderit
                                                    dolorum autem fuga labore.
                                                </p>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="text-white d-flex justify-content-between py-4 pt-0 px-3">
                                                <div>
                                                    <p class="mb-0">
                                                        <span><i
                                                                class="fa-solid fa-diamond pe-3"></i>www.neezonline.com</span>
                                                    </p>
                                                    <p class="mb-0">
                                                        <span><i class="fa-solid fa-diamond pe-3"></i>+1
                                                            98656584584</span>
                                                    </p>
                                                </div>
                                                <div>
                                                    <p class="mb-0">
                                                        <span><i
                                                                class="fa-solid fa-diamond pe-3"></i>info@flixzaglobal.com</span>
                                                    </p>
                                                    <p class="mb-0">
                                                        <span><i class="fa-solid fa-diamond pe-3"></i>1184
                                                            Davis Pl NW, Atlanta, Georgia</span>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 pe-0">
                                            <div>
                                                <a href=""
                                                    class="btn btn-dark w-100 rounded-0 mb-2">Facebook</a>
                                                <a href=""
                                                    class="btn btn-dark w-100 rounded-0 mb-2">YouTube</a>
                                                <a href=""
                                                    class="btn btn-dark w-100 rounded-0 mb-2">Linkedin</a>
                                                <a href=""
                                                    class="btn btn-dark w-100 rounded-0 mb-2">Instagram</a>
                                                <a href="" class="btn btn-dark w-100 rounded-0 mb-2">What's
                                                    App</a>
                                            </div>
                                        </div>
                                        <div class="col-md-6 bg-white d-flex justify-content-center mt-0"
                                            style="height: 218px; margin: auto">
                                            <div class="d-flex justify-content-center align-items-center">
                                                <img class="img-fluid" width="150px"
                                                    src="https://i.ibb.co/RvYHMvy/logo.png" alt="" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Servies Box -->
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
                            <div class="d-flex">
                                <div class="card w-50 me-2 rounded-0 border-0">
                                    <div class="card-body border-0 bg-dark">
                                        <div>
                                            <img class="card-img-top" src="img/demo-img/service1.jpg"
                                                alt="" />
                                        </div>
                                        <div class="mt-3 text-center">
                                            <h4 class="mb-0 special-font text-white">
                                                UI/UX Design
                                            </h4>
                                            <p class="text-white">
                                                Lorem ipsum dolor sit amet consectetur adipisicing
                                                elit. Perferendis alias nemo nihil sed odio optio
                                                dolorum ut voluptates rerum quas?
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="card w-50 ms-2 rounded-0 border-0">
                                    <div class="card-body border-0 bg-dark">
                                        <div>
                                            <img class="card-img-top" src="img/demo-img/service2.jpg"
                                                alt="" />
                                        </div>
                                        <div class="mt-3 text-center">
                                            <h4 class="mb-0 special-font text-white">
                                                UI/UX Design
                                            </h4>
                                            <p class="text-white">
                                                Lorem ipsum dolor sit amet consectetur adipisicing
                                                elit. Perferendis alias nemo nihil sed odio optio
                                                dolorum ut voluptates rerum quas?
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex">
                                <div class="card w-50 me-2 rounded-0 border-0">
                                    <div class="card-body border-0 bg-dark">
                                        <div>
                                            <img class="card-img-top" src="img/demo-img/service1.jpg"
                                                alt="" />
                                        </div>
                                        <div class="mt-3 text-center">
                                            <h4 class="mb-0 special-font text-white">
                                                UI/UX Design
                                            </h4>
                                            <p class="text-white">
                                                Lorem ipsum dolor sit amet consectetur adipisicing
                                                elit. Perferendis alias nemo nihil sed odio optio
                                                dolorum ut voluptates rerum quas?
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="card w-50 ms-2 rounded-0 border-0">
                                    <div class="card-body border-0 bg-dark">
                                        <div>
                                            <img class="card-img-top" src="img/demo-img/service2.jpg"
                                                alt="" />
                                        </div>
                                        <div class="mt-3 text-center">
                                            <h4 class="mb-0 special-font text-white">
                                                UI/UX Design
                                            </h4>
                                            <p class="text-white">
                                                Lorem ipsum dolor sit amet consectetur adipisicing
                                                elit. Perferendis alias nemo nihil sed odio optio
                                                dolorum ut voluptates rerum quas?
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Product -->
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
                            <div class="col-md-4 me-2">
                                <div class="card border-0">
                                    <div class="card-body p-0">
                                        <div>
                                            <img class="img-fluid rounded-2 product-img-tem1"
                                                src="https://i5.walmartimages.com/seo/Women-s-Double-Layer-Micro-Inlaid-Zircon-Artificial-Diamond-Ring-Set_982efef2-d3aa-464a-99af-2fcf9bf356be.175f5939a7793421774a6cb59ae07d51.jpeg"
                                                alt="" />
                                        </div>
                                        <div
                                            class="d-flex justify-content-between px-4 py-3 align-items-center bg-dark">
                                            <h6 class="special-font mb-0 text-white">Ring Set</h6>
                                            <h6 class="special-font mb-0 text-white">$50</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 me-2">
                                <div class="card border-0">
                                    <div class="card-body p-0">
                                        <div>
                                            <img class="img-fluid rounded-2 product-img-tem1"
                                                src="https://images.othoba.com/images/thumbs/0551780_dairy_440.jpeg"
                                                alt="" />
                                        </div>
                                        <div
                                            class="d-flex justify-content-between px-4 py-3 align-items-center bg-dark">
                                            <h6 class="special-font mb-0 text-white">
                                                Milk Powder
                                            </h6>
                                            <h6 class="special-font mb-0 text-white">$50</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 me-2">
                                <div class="card border-0">
                                    <div class="card-body p-0">
                                        <div>
                                            <img class="img-fluid rounded-2 product-img-tem1"
                                                src="https://images-eu.ssl-images-amazon.com/images/G/31/img21/Grocery/GroceryNewLook/grocery_sbc_coffee_440x460.jpg"
                                                alt="" />
                                        </div>
                                        <div
                                            class="d-flex justify-content-between px-4 py-3 align-items-center bg-dark">
                                            <h6 class="special-font mb-0 text-white">Coffe Jar</h6>
                                            <h6 class="special-font mb-0 text-white">$50</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 me-2">
                                <div class="card border-0">
                                    <div class="card-body p-0">
                                        <div>
                                            <img class="img-fluid rounded-2 product-img-tem1"
                                                src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRrNnzUuAiT-4HHyEOQXIhAp2OeajcZ-54bDcSIBO2kz_WI9kUWWiJQ_V6zl9STtnu-Qg0&usqp=CAU"
                                                alt="" />
                                        </div>
                                        <div
                                            class="d-flex justify-content-between px-4 py-3 align-items-center bg-dark">
                                            <h6 class="special-font mb-0 text-white">Oil Bottle</h6>
                                            <h6 class="special-font mb-0 text-white">$50</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Galery -->
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
                                    <div>
                                        <img class="w-100 img-fluid"
                                            src="https://www.shutterbug.com/images/0616gallery07.jpg"
                                            alt="" />
                                    </div>
                                    <div>
                                        <img class="w-100 img-fluid"
                                            src="https://www.shutterbug.com/images/0616gallery07.jpg"
                                            alt="" />
                                    </div>
                                    <div>
                                        <img class="w-100 img-fluid"
                                            src="https://www.shutterbug.com/images/0616gallery07.jpg"
                                            alt="" />
                                    </div>
                                    <div>
                                        <img class="w-100 img-fluid"
                                            src="https://www.shutterbug.com/images/0616gallery07.jpg"
                                            alt="" />
                                    </div>
                                    <div>
                                        <img class="w-100 img-fluid"
                                            src="https://www.shutterbug.com/images/0616gallery07.jpg"
                                            alt="" />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Testimonial -->
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
                                    <div class="card p-0 bg-dark border-0 p-0 mt-5">
                                        <div class="card-body rounded-0 border-0">
                                            <div class="d-flex justify-content-center" style="margin-top: -40px">
                                                <img class="img-fluid" width="80px" height="80px"
                                                    src="https://images.ctfassets.net/h6goo9gw1hh6/2sNZtFAWOdP1lmQ33VwRN3/24e953b920a9cd0ff2e1d587742a2472/1-intro-photo-final.jpg?w=1200&h=992&fl=progressive&q=70&fm=jpg"
                                                    alt="" />
                                            </div>
                                            <h4 class="special-font text-white text-center pt-3">
                                                Flixza Global
                                            </h4>
                                            <p class="text-white text-center pt-3">
                                                Real Estate Broker
                                            </p>
                                            <p class="mb-0 text-white text-center">
                                                Lorem ipsum dolor, sit amet consectetur adipisicing
                                                elit. Voluptatibus expedita ratione perferendis
                                                laboriosam fuga rerum adipisci, harum molestias culpa
                                                dicta.
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
                                    <div class="card p-0 bg-dark border-0 p-0 mt-5">
                                        <div class="card-body rounded-0 border-0">
                                            <div class="d-flex justify-content-center" style="margin-top: -40px">
                                                <img class="img-fluid" width="80px" height="80px"
                                                    src="https://images.ctfassets.net/h6goo9gw1hh6/2sNZtFAWOdP1lmQ33VwRN3/24e953b920a9cd0ff2e1d587742a2472/1-intro-photo-final.jpg?w=1200&h=992&fl=progressive&q=70&fm=jpg"
                                                    alt="" />
                                            </div>
                                            <h4 class="special-font text-white text-center pt-3">
                                                Flixza Global
                                            </h4>
                                            <p class="text-white text-center pt-3">
                                                Real Estate Broker
                                            </p>
                                            <p class="mb-0 text-white text-center">
                                                Lorem ipsum dolor, sit amet consectetur adipisicing
                                                elit. Voluptatibus expedita ratione perferendis
                                                laboriosam fuga rerum adipisci, harum molestias culpa
                                                dicta.
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
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Testimonial -->
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
                                    <img class="img-fluid"
                                        src="https://www.gipper.com/hs-fs/hubfs/Imported_Blog_Media/6375e3_33ef90f5a9b74483b67eb2cb2f5e56b1~mv2.png"
                                        alt="" />
                                    <div>
                                        <a href=""
                                            class="btn btn-dark rounded-0 w-100 border-2 border-dark">Download QR</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Business Hours -->
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
                            <div class="col-md-6 mb-2">
                                <div>
                                    <div class="text-center text-white">
                                        <i class="fa fa-calendar houricon"></i>
                                    </div>
                                    <div class="text-center">
                                        <p class="mb-0 text-white special-font">Monday</p>
                                        <p class="mb-0 text-white">10.00 AM - 10.00 PM</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 mb-2">
                                <div>
                                    <div class="text-center text-white">
                                        <i class="fa fa-calendar houricon"></i>
                                    </div>
                                    <div class="text-center">
                                        <p class="mb-0 text-white special-font">Tuesday</p>
                                        <p class="mb-0 text-white">10.00 AM - 10.00 PM</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 mb-2">
                                <div>
                                    <div class="text-center text-white">
                                        <i class="fa fa-calendar houricon"></i>
                                    </div>
                                    <div class="text-center">
                                        <p class="mb-0 text-white special-font">Wednesday</p>
                                        <p class="mb-0 text-white">10.00 AM - 10.00 PM</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 mb-2">
                                <div>
                                    <div class="text-center text-white">
                                        <i class="fa fa-calendar houricon"></i>
                                    </div>
                                    <div class="text-center">
                                        <p class="mb-0 text-white special-font">Thursday</p>
                                        <p class="mb-0 text-white">10.00 AM - 10.00 PM</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 mb-2">
                                <div>
                                    <div class="text-center text-white">
                                        <i class="fa fa-calendar houricon"></i>
                                    </div>
                                    <div class="text-center">
                                        <p class="mb-0 text-white special-font">Friday</p>
                                        <p class="mb-0 text-white">10.00 AM - 10.00 PM</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 mb-2">
                                <div>
                                    <div class="text-center text-white">
                                        <i class="fa fa-calendar houricon"></i>
                                    </div>
                                    <div class="text-center">
                                        <p class="mb-0 text-white special-font">Satarday</p>
                                        <p class="mb-0 text-white">10.00 AM - 10.00 PM</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
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
                                <form action="" method="post">
                                    <div class="row">
                                        <div class="col-lg-12 mb-3">
                                            <input type="text" name=""
                                                class="form-control form-control-sm rounded-0 w-75 mx-auto rounded-1 p-2"
                                                placeholder="Enter Your Names" />
                                        </div>
                                        <div class="col-lg-12 mb-3">
                                            <input type="email" name=""
                                                class="form-control form-control-sm rounded-0 w-75 mx-auto rounded-1 p-2"
                                                placeholder="Enter Your Email" />
                                        </div>
                                        <div class="col-lg-12 mb-3">
                                            <input type="text" name=""
                                                class="form-control form-control-sm rounded-0 w-75 mx-auto rounded-1 p-2"
                                                placeholder="Enter Your Phone" />
                                        </div>
                                        <div class="col-lg-12 mb-3">
                                            <textarea name="" class="form-control form-control-sm rounded-0 w-75 mx-auto rounded-1 p-2" id=""
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
                            <div class="col-lg-4 col-offset-lg-4 mx-auto">
                                <button type="submit" class="btn btn-dark w-100 p-3">
                                    <i class="fa-solid fa-paper-plane"></i> Share This Vcard
                                </button>
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
                                <a href="#">
                                    <i class="fa-solid fa-qrcode"></i>
                                    <span>QR</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="copy-link" data-link="https://another-example.com">
                                    <i class="fa-solid fa-copy"></i>
                                    <span>Copy Link</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
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
        <!-- Modal -->
        <div class="modal fade" id="myModal" tabindex="-1" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog load-modal modal-dialog-centered">
                <div class="modal-content rounded-0">
                    <div class="modal-header bg-dark rounded-0 text-white">
                        <h5 class="modal-title" id="exampleModalLabel">Welcome</h5>
                        <button type="button" class="btn-close text-white close-btns" data-bs-dismiss="modal"
                            aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        This is a modal that appears on page load.
                    </div>
                </div>
            </div>
        </div>

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
</body>

</html>

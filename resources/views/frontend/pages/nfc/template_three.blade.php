<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />

    <!-- Bootstrap CSS v5.2.1 -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
      crossorigin="anonymous"
    />
    <link
      rel="stylesheet"
      type="text/css"
      href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"
    />
    <link
      rel="stylesheet"
      type="text/css"
      href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css"
    />

    <style>
      @import url("https://fonts.googleapis.com/css2?family=Almendra+SC&family=Anton&family=Anton+SC&family=Bebas+Neue&family=Jost:ital,wght@0,100..900;1,100..900&family=Margarine&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:ital,wght@0,100..900;1,100..900&family=Roboto+Slab:wght@100..900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap");

      :root {
        --template-three-color-white: #fff;
        --template-three-color-black: #000;
        --template-three-color-primary: #ff0000;
        --template-three-color-secoandary: #a5a3a3;
        --template-three-title-font-size: 48px;
        --template-three-others-font-size: 16px;
        --template-three-font-fmly-Almendra: "Almendra SC", serif;
        --template-three-font-fmly-Almendra: "Almendra SC", serif;
        --template-three-font-fmly-Bebas: "Bebas Neue", sans-serif;
        --template-three-font-fmly-Ubuntu: "Ubuntu", sans-serif;
        --template-three-font-fmly-Anton: "Anton SC", sans-serif;
        --template-three-font-fmly-Margarine: "Margarine", sans-serif;
        --template-three-font-fmly-Roboto: "Roboto Slab", serif;
        --template-three-font-fmly-Jost: "Jost", sans-serif;
        --template-three-font-fmly-Roboto: "Roboto", sans-serif;
        --template-three-font-fmly-Poppins: "Poppins", sans-serif;
        --template-three-font-fmly-Raleway: "Raleway",  sans-serif;
      }
      .mobile-frame {
        width: 535px;
        margin: auto;
        max-width: 100%;
        box-shadow: rgba(99, 99, 99, 0.2) 0px 2px 8px 0px;
        font-family: var(--template-three-font-fmly-Raleway);
        color: var(--template-three-color-secoandary) !important;
      }
      .page-content-wrapper {
        width: 100%;
        margin: auto;
      }
      .text-justify {
        text-align: justify;
      }
      .special-font {
        color: var(--template-three-color-primary);
        font-family: var(--template-three-font-fmly-Jost);
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
        background: var(--template-three-color-primary);
        z-index: 5;
        border-radius: 100%;
      }
      .slick-prev:hover,
      .slick-prev:focus,
      .slick-next:hover,
      .slick-next:focus {
        background: var(--template-three-color-primary);
      }
      .slick-prev:before,
      .slick-next:before {
        color: var(--template-three-color-white);
      }
      /* <!-- Banner --> */

      /* <!-- Profile Info --> */
      .profile-image-tem3 {
        position: relative;
        top: -80px;
      }
      .profile-image-tem3 img {
        border: 5px solid var(--template-three-color-white);
      }
      /* <!-- Social Area --> */
      .social-icon-tem3 a {
        background-color: var(--template-three-color-primary);
        color: var(--template-three-color-white);
        padding: 10px;
        margin: 5px;
        text-decoration: none;
        border-radius: 5px;
        font-size: var(--template-three-others-font-size);
        justify-content: center;
      }
      /* <!-- Date Area --> */
      .date-card-tem3 {
        background-color: var(--template-three-color-primary);
      }
      /* <!-- Company Info --> */

      /* <!-- Servies Box --> */
      .service-img-tem3 img {
        height: 170px;
        object-fit: cover;
        margin-top: -30px;
        width: 100%;
      }
      .service-header-tem3 {
        border: 5px solid var(--template-three-color-primary);
      }
      /* <!-- Product --> */
      .product-img-tem3 {
        position: relative;
        display: inline-block;
        overflow: hidden;
      }

      .product-img-tem3 img {
        width: 100%;
        display: block;
        transition: transform 0.5s ease-in-out;
      }

      .product-img-tem3::before {
        content: "";
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(0, 0, 0, 0);
        transition: background-color 0.5s ease-in-out;
      }

      .product-img-tem3:hover::before {
        background-color: rgba(0, 0, 0, 0.5);
      }

      .product-img-tem3:hover img {
        transform: scale(1.1); /* Optional: Zoom effect on hover */
      }
      .table > :not(caption) > * > * {
        background-color: #eeeeee8c;
        padding: 14px;
        color: white;
      }
      /* <!-- Galery --> */
      .gallery-items-tem3 img {
        height: 350px;
        width: 100%;
        border-radius: 10px;
        object-fit: cover;
      }
      .video-container {
        display: flex !important;
        justify-content: center;
        align-items: center;
        width: 100% !important;
        margin: 0 auto;
      }

      .video-container iframe {
        width: 70%; /* Adjust the width as needed */
        height: 300px;
        max-width: 560px; /* Maintain the aspect ratio */
      }
      /* <!-- Testimonial --> */

      /* <!-- Testimonial --> */

      /* <!-- Business Hours --> */
      .parallax-background {
        background-image: url("https://images.squarespace-cdn.com/content/v1/5fafd033cc2b52123f4e2391/1607273392573-RLL8GVFVA3GBZLTMTJCB/Model+1+-+Manhattan+Place+Ajax+-+Overlay.png");
        background-attachment: fixed;
        background-size: cover;
        background-position: center;
        padding-top: 50px; /* Adjust padding as needed */
        padding-bottom: 50px; /* Adjust padding as needed */
      }
      /* <!-- Contact Area --> */

      #footerNav {
        position: fixed;
        bottom: 0;
        left: 0;
        width: 100%;
        z-index: 1000;
      }

      .footer-nav-tem3 {
        /* background-color: var(--white); */
        box-shadow: rgba(149, 157, 165, 0.2) 0px 8px 24px;
        background-color: var(--info-500);
        width: 535px;
        height: 62px;
        margin: auto;
      }

      .footer-nav-tem3 ul {
        position: relative;
        z-index: 10;
        width: 100%;
        list-style-type: none;
        box-shadow: rgb(255 255 255 / 20%) 0px 2px 8px 0px;
        background: var(--template-three-color-white);
      }

      .footer-nav-tem3 ul li {
        position: relative;
        z-index: 1;
        -webkit-box-flex: 1;
        -ms-flex: 1 1 0px;
        flex: 1 1 0;
      }

      .footer-nav-tem3 ul li a {
        position: relative;
        display: block;
        font-size: 16px;
        text-align: center;
        font-weight: 600;
        text-transform: capitalize;
        line-height: 1;
        color: var(--template-three-color-black);
        text-decoration: none;
        z-index: 1;
      }

      .footer-nav-tem3 ul li.active a {
        background-color: var(--template-three-color-white);
        padding: 23px;
        color: var(--template-three-color-black);
      }
      .modal.fade .load-modal {
        transition: transform 0.3s ease-out;
        transform: translate(-8px, 0) !important;
      }
      .close-btns {
        background-color: var(--template-three-color-white);
      }
      .image-container-tem3 {
        height: 555px;
        object-fit: cover;
      }
      .shape-container-tem3 {
        margin-top: -250px;
        width: 100%;
        height: 229px;
      }
      .language-2 {
        position: absolute;
        top: 0rem;
      }
      .tem3-footer-shape {
        height: 150px;
        background: red;
        clip-path: polygon(50% -15%, -3% 100%, 103% 100%);
        position: relative;
        top: -6px;
      }
      /* Media query for tablets and smaller devices */
      @media (max-width: 1024px) {
        .mobile-frame {
          width: 90%;
          padding: 15px; /* Optional padding for better spacing */
          font-size: 16px; /* Adjust font size if needed */
        }
      }

      /* Media query for large mobile devices */
      @media (max-width: 768px) {
        .mobile-frame {
          width: 95%;
          padding: 10px; /* Optional padding for better spacing */
          font-size: 15px; /* Adjust font size if needed */
        }
      }

      /* Media query for small mobile devices */
      @media (max-width: 480px) {
        .mobile-frame {
          width: 100%;
          padding: 0px; /* Optional padding for better spacing */
          font-size: 14px; /* Adjust font size if needed */
          box-shadow: rgba(99, 99, 99, 0.2) 0px 1px 4px 0px; /* Adjust shadow for smaller devices */
        }
        .footer-nav-tem3 {
          box-shadow: rgba(149, 157, 165, 0.2) 0px 8px 24px;
          background-color: var(--info-500);
          width: 100%;
          height: 62px;
          margin: auto;
          padding: 0;
        }
        #footerNav {
          position: fixed;
          bottom: 0;
          left: 0;
          width: 100%;
          z-index: 1000;
        }
      }
    </style>
  </head>

  <body>
    <main>
      <div
        class="mobile-frame"
        style="background-image: url(./Back-assets/bg.png)"
      >
        <div class="page-content-wrapper">
          <!-- Banner -->
          <section>
            <div class="container px-0">
              <div class="row">
                <div class="col-sm-12">
                  <div
                    class="image-container-tem3"
                    style="position: relative; width: 100%"
                  >
                    <img
                      class="img-fluid w-100"
                      style="
                        opacity: 0.8;
                        height: 550px;
                        clip-path: polygon(
                          60% 0%,
                          70% 0%,
                          100% 0,
                          100% 70%,
                          50% 100%,
                          50% 100%,
                          0% 70%,
                          0 0
                        );
                      "
                      src="https://images.pexels.com/photos/290275/pexels-photo-290275.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500"
                      alt=""
                    />
                    <div
                      class="overlay"
                      style="
                        position: absolute;
                        top: 0;
                        left: 0;
                        width: 100%;
                        height: 100%;
                        background: #ff0000d9; /* Semi-transparent overlay */
                        color: white; /* Text color */
                        display: flex;
                        align-items: center;
                        justify-content: center;
                        clip-path: polygon(
                          60% 0%,
                          70% 0%,
                          100% 0,
                          100% 70%,
                          50% 100%,
                          50% 100%,
                          0% 70%,
                          0 0
                        );
                      "
                    >
                      <div>
                        <img src="./Back-assets/logo.png" alt="" />
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>
          <!-- Profile Info -->
          <section>
            <div class="container py-5 pt-0">
              <!-- Banner -->
              <div class="row">
                <div class="col-sm-12">
                  <div
                    class="d-flex justify-content-center align-items-center profile-image-tem3"
                  >
                    <img
                      width="150px"
                      class="rounded-circle"
                      src="./Back-assets/profile.png"
                      alt=""
                    />
                  </div>
                </div>
              </div>
              <!-- User Info -->
              <div class="row">
                <div class="col-sm-12">
                  <div>
                    <h1 class="special-font text-center">Nelson Juliet</h1>
                    <h6 class="special-font text-center">Real Estate Broker</h6>
                    <p class="text-justify">
                      Lorem ipsum dolor sit amet consectetur adipisicing elit.
                      Facilis mollitia natus dolor consequuntur ipsam
                      accusantium nostrum voluptates. Sint aut repudiandae
                      facilis aspernatur. Voluptatem recusandae, officiis
                      dolores corporis magnam odio illum!
                    </p>
                  </div>
                </div>
              </div>
              <!-- Social -->
              <div class="row pt-3">
                <div class="col-sm-12">
                  <div class="d-flex justify-content-center align-items-center">
                    <div class="social-icon-tem3">
                      <a href="#" class="">
                        <i class="fa-brands fa-facebook"></i>
                      </a>
                      <a href="#" class="">
                        <i class="fa-brands fa-instagram"></i>
                      </a>
                      <a href="#" class="">
                        <i class="fa-brands fa-linkedin-in"></i>
                      </a>
                      <a href="#" class="">
                        <i class="fa-brands fa-twitter"></i>
                      </a>
                      <a href="#" class="">
                        <i class="fa-brands fa-youtube"></i>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
              <!-- Date Area -->
              <div class="row pt-5">
                <div class="col-sm-6">
                  <div class="card date-card-tem3">
                    <div class="card-body d-flex align-content-center p-2">
                      <div>
                        <svg
                          xmlns="http://www.w3.org/2000/svg"
                          version="1.1"
                          xmlns:xlink="http://www.w3.org/1999/xlink"
                          width="50"
                          height="50"
                          x="0"
                          y="0"
                          viewBox="0 0 48 48"
                          style="enable-background: new 0 0 512 512"
                          xml:space="preserve"
                          class=""
                        >
                          <g>
                            <linearGradient
                              id="b"
                              x1="24"
                              x2="24"
                              y1="4.274"
                              y2="30.545"
                              gradientUnits="userSpaceOnUse"
                            >
                              <stop offset="0" stop-color="#fd9b02"></stop>
                              <stop offset="1" stop-color="#ff7302"></stop>
                            </linearGradient>
                            <linearGradient
                              id="c"
                              x1="24"
                              x2="24"
                              y1="6.108"
                              y2="30.882"
                              gradientUnits="userSpaceOnUse"
                            >
                              <stop offset="0" stop-color="#edf1f2"></stop>
                              <stop offset=".336" stop-color="#e9edee"></stop>
                              <stop offset=".636" stop-color="#dee2e3"></stop>
                              <stop offset=".921" stop-color="#ccd1d2"></stop>
                              <stop offset="1" stop-color="#c6cbcc"></stop>
                            </linearGradient>
                            <linearGradient
                              id="d"
                              x1="16.755"
                              x2="29.756"
                              y1="9.755"
                              y2="22.756"
                              gradientUnits="userSpaceOnUse"
                            >
                              <stop offset="0" stop-color="#4793eb"></stop>
                              <stop offset="1" stop-color="#2367ec"></stop>
                            </linearGradient>
                            <linearGradient
                              id="a"
                              x1="-6.372"
                              x2="34.443"
                              y1="-3.856"
                              y2="42.463"
                              gradientUnits="userSpaceOnUse"
                            >
                              <stop offset="0" stop-color="#fed200"></stop>
                              <stop offset="1" stop-color="#f59815"></stop>
                            </linearGradient>
                            <linearGradient
                              xlink:href="#a"
                              id="e"
                              x1="15.463"
                              x2="35.412"
                              y1="28.773"
                              y2="62.365"
                            ></linearGradient>
                            <path
                              fill="url(#b)"
                              d="M40 46H8c-2.757 0-5-2.243-5-5V19.8c0-1.527.684-2.95 1.876-3.904l16-12.8a4.97 4.97 0 0 1 6.247 0l16 12.8a4.975 4.975 0 0 1 1.876 3.904V41c0 2.757-2.243 5-5 5z"
                              opacity="1"
                              data-original="url(#b)"
                            ></path>
                            <path
                              fill="url(#c)"
                              d="M39 38H9a1 1 0 0 1-1-1V9c0-1.654 1.346-3 3-3h26c1.654 0 3 1.346 3 3v28a1 1 0 0 1-1 1z"
                              opacity="1"
                              data-original="url(#c)"
                              class=""
                            ></path>
                            <path
                              fill="url(#d)"
                              d="M28.12 23.859a1 1 0 0 0-1.032-1.714 5.981 5.981 0 0 1-3.089.855c-3.309 0-6-2.691-6-6s2.691-6 6-6 6 2.691 6 6.028c-.005 1.069-.969 1.973-2.106 1.973a.94.94 0 0 1-.687-.295.936.936 0 0 1-.258-.701l.152-2.9c.028-.545-.171-1.085-.547-1.481s-.904-.623-1.45-.623h-.446c-2.453 0-4.554 1.993-4.682 4.451-.049.941.276 1.83.916 2.504a3.344 3.344 0 0 0 2.452 1.045c.91 0 1.752-.36 2.399-.937l.014.019a2.963 2.963 0 0 0 2.137.919h.001c2.254 0 4.096-1.778 4.106-4 0-4.411-3.589-8-8-8s-8 3.589-8 8 3.589 8 8 8c1.455 0 2.88-.395 4.12-1.141zm-3.145-6.411v.004c-.045.839-.792 1.547-1.632 1.547-.388 0-.744-.15-1.001-.421a1.373 1.373 0 0 1-.369-1.031C22.045 16.166 23.275 15 24.658 15h.446l-.128 2.448z"
                              opacity="1"
                              data-original="url(#d)"
                            ></path>
                            <path
                              fill="url(#a)"
                              d="M27.125 31.912a5.031 5.031 0 0 1-6.25 0L3.376 17.911A5 5 0 0 0 3 19.8V41c0 2.757 2.243 5 5 5h32c2.757 0 5-2.243 5-5V19.8a5 5 0 0 0-.376-1.889z"
                              opacity="1"
                              data-original="url(#a)"
                            ></path>
                            <path
                              fill="url(#e)"
                              d="M27.125 29.22a5.031 5.031 0 0 0-6.25 0L3.493 43.127C4.295 44.819 6.007 46 8 46h32c1.993 0 3.705-1.181 4.507-2.873z"
                              opacity="1"
                              data-original="url(#e)"
                            ></path>
                          </g>
                        </svg>
                      </div>
                      <div class="ps-3 pt-1">
                        <h6 class="special-font text-white mb-0">Email</h6>
                        <p class="text-white mb-0">info@mail.com</p>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="card date-card-tem3">
                    <div class="card-body d-flex align-content-center p-2">
                      <div>
                        <svg
                          xmlns="http://www.w3.org/2000/svg"
                          version="1.1"
                          xmlns:xlink="http://www.w3.org/1999/xlink"
                          width="50"
                          height="50"
                          x="0"
                          y="0"
                          viewBox="0 0 512 512"
                          style="enable-background: new 0 0 512 512"
                          xml:space="preserve"
                          class=""
                        >
                          <g>
                            <path
                              fill="#fed843"
                              d="M406 31H286c-57.891 0-106 47.109-106 105 0 52.808 40.185 96.636 91 103.931V286a14.983 14.983 0 0 0 9.258 13.857c5.533 2.309 12.023 1.071 16.348-3.252L346 247.211l6.211-6.211H406c57.891 0 106-47.109 106-105S463.891 31 406 31z"
                              opacity="1"
                              data-original="#fed843"
                              class=""
                            ></path>
                            <path
                              fill="#fabe2c"
                              d="M406 241c57.891 0 106-47.109 106-105S463.891 31 406 31h-60v216.211l6.211-6.211z"
                              opacity="1"
                              data-original="#fabe2c"
                              class=""
                            ></path>
                            <path
                              fill="#ff641a"
                              d="M382 376v60c0 26.1-21.31 45-44.79 45-86.41 0-170.71-40.85-233.41-103.3S0 231.2 0 144.79C0 119.97 20.19 100 45 100h60c6.46 0 12.19 4.13 14.22 10.25l30 89.79c1.47 4.4.82 9.22-1.74 13.07l-25.44 38.17c9.64 20.22 26.7 42.32 46.4 61.78 19.71 19.45 42.06 36.26 62.28 45.9l38.17-25.44c3.87-2.55 8.67-3.22 13.07-1.74l90 30c6.12 2.03 10.04 7.76 10.04 14.22z"
                              opacity="1"
                              data-original="#ff641a"
                            ></path>
                            <path
                              fill="#f03800"
                              d="M382 376v60c0 26.1-21.31 45-44.79 45-86.41 0-170.71-40.85-233.41-103.3l64.64-64.64c19.71 19.45 42.06 36.26 62.28 45.9l38.17-25.44c3.87-2.55 8.67-3.22 13.07-1.74l90 30c6.12 2.03 10.04 7.76 10.04 14.22z"
                              opacity="1"
                              data-original="#f03800"
                            ></path>
                            <circle
                              cx="285.999"
                              cy="135.999"
                              r="15"
                              fill="#613d5c"
                              opacity="1"
                              data-original="#613d5c"
                            ></circle>
                            <circle
                              cx="346"
                              cy="135.998"
                              r="15"
                              fill="#613d5c"
                              opacity="1"
                              data-original="#613d5c"
                            ></circle>
                            <g fill="#4b2746">
                              <path
                                d="M361 135.998c0-8.284-6.716-15-15-15v30c8.284 0 15-6.716 15-15z"
                                fill="#4b2746"
                                opacity="1"
                                data-original="#4b2746"
                                class=""
                              ></path>
                              <circle
                                cx="405.999"
                                cy="135.999"
                                r="15"
                                fill="#4b2746"
                                opacity="1"
                                data-original="#4b2746"
                                class=""
                              ></circle>
                            </g>
                          </g>
                        </svg>
                      </div>
                      <div class="ps-3 pt-1">
                        <h6 class="special-font text-white mb-0">Phone</h6>
                        <p class="text-white mb-0">(+911) 00254856)</p>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-sm-6 mt-4">
                  <div class="card date-card-tem3">
                    <div class="card-body d-flex align-content-center p-2">
                      <div>
                        <svg
                          xmlns="http://www.w3.org/2000/svg"
                          version="1.1"
                          xmlns:xlink="http://www.w3.org/1999/xlink"
                          width="50"
                          height="50"
                          x="0"
                          y="0"
                          viewBox="0 0 14249 15442"
                          style="enable-background: new 0 0 512 512"
                          xml:space="preserve"
                          fill-rule="evenodd"
                          class=""
                        >
                          <g>
                            <path
                              fill="#00dcab"
                              d="m7804 187 5505 3179c432 249 680 678 680 1177v6356c0 499-248 928-680 1177l-5505 3179c-432 249-927 249-1359 0L940 12076c-433-249-680-678-680-1177V4543c0-499 247-928 680-1177L6445 187c432-249 927-249 1359 0z"
                              opacity="1"
                              data-original="#00dcab"
                              class=""
                            ></path>
                            <path
                              fill="#1c3b5c"
                              d="M1101 4074h12046c243 0 442 199 442 442v7805c0 243-199 441-442 441H1101c-243 0-441-198-441-441V4516c0-243 198-442 441-442z"
                              opacity="1"
                              data-original="#1c3b5c"
                            ></path>
                            <path
                              fill="#e1e3e8"
                              d="M347 14315h13555c191 0 347-156 347-347v-564c0-191-156-347-347-347H347c-191 0-347 156-347 347v564c0 191 156 347 347 347z"
                              opacity="1"
                              data-original="#e1e3e8"
                            ></path>
                            <path
                              fill="#53b4ed"
                              d="M1287 4682h11675v7472H1287z"
                              opacity="1"
                              data-original="#53b4ed"
                            ></path>
                            <g fill="#205081">
                              <path
                                d="M2672 12484h1015v573H2672zM10561 12484h1016v573h-1016z"
                                fill="#205081"
                                opacity="1"
                                data-original="#205081"
                              ></path>
                            </g>
                            <g fill="#c5c7cb">
                              <path
                                d="M5441 13057h3367v399H5441zM14076 13986H172c-62 0-121-17-172-46v28c0 191 156 347 347 347h13555c191 0 347-156 347-347v-28c-51 29-110 46-173 46z"
                                fill="#c5c7cb"
                                opacity="1"
                                data-original="#c5c7cb"
                              ></path>
                            </g>
                            <g fill="#fff">
                              <path
                                d="M8901 5467h1722v173H8901zM10900 5467h919v173h-919zM10098 6141h1145v173h-1145zM8901 6141h919v173h-919zM8901 6834h1722v173H8901zM10900 6834h919v173h-919z"
                                fill="#ffffff"
                                opacity="1"
                                data-original="#ffffff"
                              ></path>
                            </g>
                            <path
                              fill="#ffc42e"
                              d="M8901 7766h919v173h-919z"
                              opacity="1"
                              data-original="#ffc42e"
                            ></path>
                            <path
                              fill="#ffffff"
                              d="M1937 4011h6142v8143H1937z"
                              opacity="1"
                              data-original="#ffffff"
                            ></path>
                            <path
                              fill="#205081"
                              d="M2402 3082h5213c256 0 465 209 465 465v464H1937v-464c0-256 209-465 465-465z"
                              opacity="1"
                              data-original="#205081"
                            ></path>
                            <rect
                              width="3025"
                              height="272"
                              x="2499"
                              y="3410"
                              fill="#55ace0"
                              rx="214"
                              ry="136"
                              opacity="1"
                              data-original="#55ace0"
                            ></rect>
                            <circle
                              cx="6257"
                              cy="3547"
                              r="170"
                              fill="#ff576b"
                              opacity="1"
                              data-original="#ff576b"
                            ></circle>
                            <circle
                              cx="6860"
                              cy="3547"
                              r="170"
                              fill="#ffc42e"
                              opacity="1"
                              data-original="#ffc42e"
                            ></circle>
                            <circle
                              cx="7464"
                              cy="3547"
                              r="170"
                              fill="#53b4ed"
                              opacity="1"
                              data-original="#53b4ed"
                            ></circle>
                            <path
                              fill="#00dcab"
                              d="M2344 7244h1394v840H2344z"
                              opacity="1"
                              data-original="#00dcab"
                              class=""
                            ></path>
                            <g fill="#afb0b5">
                              <path
                                d="M2344 8279h943v123h-943zM2344 8535h1117v62H2344zm0 369h840v61h-840zm0-185h1117v62H2344z"
                                fill="#afb0b5"
                                opacity="1"
                                data-original="#afb0b5"
                              ></path>
                            </g>
                            <path
                              fill="#ff576b"
                              d="M4312 7244h1394v840H4312z"
                              opacity="1"
                              data-original="#ff576b"
                            ></path>
                            <g fill="#afb0b5">
                              <path
                                d="M4312 8279h943v123h-943zM4312 8535h1117v62H4312zm0 369h840v61h-840zm0-185h1117v62H4312z"
                                fill="#afb0b5"
                                opacity="1"
                                data-original="#afb0b5"
                              ></path>
                            </g>
                            <path
                              fill="#ffc42e"
                              d="M6279 7244h1394v840H6279z"
                              opacity="1"
                              data-original="#ffc42e"
                            ></path>
                            <g fill="#afb0b5">
                              <path
                                d="M6279 8279h943v123h-943zM6279 8535h1117v62H6279zm0 369h841v61h-841zm0-185h1117v62H6279z"
                                fill="#afb0b5"
                                opacity="1"
                                data-original="#afb0b5"
                              ></path>
                            </g>
                            <path
                              fill="#ffffff"
                              d="M1937 4011h6142v922H1937z"
                              opacity="1"
                              data-original="#ffffff"
                            ></path>
                            <path
                              fill="#ffc42e"
                              d="M1937 4933h6142v2059H1937z"
                              opacity="1"
                              data-original="#ffc42e"
                            ></path>
                            <g fill="#ff576b">
                              <circle
                                cx="5008"
                                cy="4402"
                                r="221"
                                fill="#ff576b"
                                opacity="1"
                                data-original="#ff576b"
                              ></circle>
                              <path
                                d="M4840 4709h363.104v54.275H4840z"
                                fill="#ff576b"
                                opacity="1"
                                data-original="#ff576b"
                              ></path>
                            </g>
                            <g fill="#fff">
                              <path
                                fill-rule="nonzero"
                                d="M2580 5642c89 0 169 36 227 94s93 138 93 226c0 89-35 169-93 226v1c-58 57-138 93-227 93-88 0-168-36-226-93v-1c-58-57-94-137-94-226 0-88 36-168 94-226s138-94 226-94zm191 130c-49-49-116-79-191-79-74 0-141 30-190 79-49 48-79 116-79 190 0 75 30 142 79 191s116 79 190 79c75 0 142-30 191-79s79-116 79-191c0-74-30-142-79-190z"
                                fill="#ffffff"
                                opacity="1"
                                data-original="#ffffff"
                              ></path>
                              <path
                                d="m2473 5962 141-141v282z"
                                fill="#ffffff"
                                opacity="1"
                                data-original="#ffffff"
                              ></path>
                              <path
                                fill-rule="nonzero"
                                d="M7322 5642c-89 0-169 36-227 94s-93 138-93 226c0 89 35 169 93 226v1c58 57 138 93 227 93 88 0 168-36 226-93v-1c58-57 94-137 94-226 0-88-36-168-94-226s-138-94-226-94zm-191 130c49-49 116-79 191-79 74 0 141 30 190 79 49 48 79 116 79 190 0 75-30 142-79 191s-116 79-190 79c-75 0-142-30-191-79s-79-116-79-191c0-74 30-142 79-190z"
                                fill="#ffffff"
                                opacity="1"
                                data-original="#ffffff"
                              ></path>
                              <path
                                d="m7429 5962-141-141v282zM3395 6423h1872v73H3395zm0-271h3227v73H3395zm0-270h3227v73H3395zm670-442h1887v187H4065z"
                                fill="#ffffff"
                                opacity="1"
                                data-original="#ffffff"
                              ></path>
                            </g>
                            <path
                              fill="#ff576b"
                              d="M2344 9274h1394v840H2344z"
                              opacity="1"
                              data-original="#ff576b"
                            ></path>
                            <g fill="#afb0b5">
                              <path
                                d="M2344 10309h943v123h-943zM2344 10565h1117v62H2344zm0 369h840v62h-840zm0-184h1117v61H2344z"
                                fill="#afb0b5"
                                opacity="1"
                                data-original="#afb0b5"
                              ></path>
                            </g>
                            <path
                              fill="#ffc42e"
                              d="M4312 9274h1394v840H4312z"
                              opacity="1"
                              data-original="#ffc42e"
                            ></path>
                            <g fill="#afb0b5">
                              <path
                                d="M4312 10309h943v123h-943zM4312 10565h1117v62H4312zm0 369h840v62h-840zm0-184h1117v61H4312z"
                                fill="#afb0b5"
                                opacity="1"
                                data-original="#afb0b5"
                              ></path>
                            </g>
                            <path
                              fill="#00dcab"
                              d="M6279 9274h1394v840H6279z"
                              opacity="1"
                              data-original="#00dcab"
                              class=""
                            ></path>
                            <g fill="#afb0b5">
                              <path
                                d="M6279 10309h943v123h-943zM6279 10565h1117v62H6279zm0 369h841v62h-841zm0-184h1117v61H6279z"
                                fill="#afb0b5"
                                opacity="1"
                                data-original="#afb0b5"
                              ></path>
                            </g>
                            <path
                              fill="#ffffff"
                              d="M10098 8440h1145v173h-1145zM8901 8440h919v173h-919zM8901 9133h1722v173H8901zM10900 9133h919v173h-919z"
                              opacity="1"
                              data-original="#ffffff"
                            ></path>
                            <path
                              fill="#ffc42e"
                              d="M8901 10113h919v173h-919z"
                              opacity="1"
                              data-original="#ffc42e"
                            ></path>
                            <path
                              fill="#ffffff"
                              d="M10098 10787h1145v173h-1145zM8901 10787h919v173h-919zM8901 11480h1722v173H8901zM10900 11480h919v173h-919z"
                              opacity="1"
                              data-original="#ffffff"
                            ></path>
                            <path
                              fill="#ffc42e"
                              d="M8901 4947h1722v173H8901z"
                              opacity="1"
                              data-original="#ffc42e"
                            ></path>
                          </g>
                        </svg>
                      </div>
                      <div class="ps-3 pt-1">
                        <h6 class="special-font text-white mb-0">Portfolio</h6>
                        <p class="text-white mb-0">portfolio.site.com</p>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-sm-6 mt-4">
                  <div class="card date-card-tem3">
                    <div class="card-body d-flex align-content-center p-2">
                      <div>
                        <svg
                          xmlns="http://www.w3.org/2000/svg"
                          version="1.1"
                          xmlns:xlink="http://www.w3.org/1999/xlink"
                          width="50"
                          height="50"
                          x="0"
                          y="0"
                          viewBox="0 0 48 48"
                          style="enable-background: new 0 0 512 512"
                          xml:space="preserve"
                          class=""
                        >
                          <g>
                            <g data-name="Calendar Birthday">
                              <g fill="#4294ff">
                                <path
                                  d="M41 6v1a1 1 0 0 1-2 0V6zM28 6v1a1 1 0 0 1-2 0V6zM15 6v1a1 1 0 0 1-2 0V6z"
                                  fill="#4294ff"
                                  opacity="1"
                                  data-original="#4294ff"
                                  class=""
                                ></path>
                              </g>
                              <path
                                fill="#e6ecff"
                                d="M43 6H5a5 5 0 0 0-5 5v32a5 5 0 0 0 5 5h33l10-10V11a5 5 0 0 0-5-5z"
                                opacity="1"
                                data-original="#e6ecff"
                              ></path>
                              <path
                                fill="#4294ff"
                                d="M43 6H5a5.006 5.006 0 0 0-5 5v5h48v-5a5.006 5.006 0 0 0-5-5z"
                                opacity="1"
                                data-original="#4294ff"
                                class=""
                              ></path>
                              <path
                                fill="#d0dbf7"
                                d="M41 38a3 3 0 0 0-3 3v7l10-10z"
                                opacity="1"
                                data-original="#d0dbf7"
                              ></path>
                              <path
                                fill="#376cfb"
                                d="M41 4v2h-2V4a2 2 0 0 0-4 0v5a2.006 2.006 0 0 0 2 2h1a1 1 0 0 1 0 2h-1a3.999 3.999 0 0 1-4-4V4a4 4 0 0 1 8 0zM28 4v2h-2V4a2 2 0 0 0-4 0v5a2.006 2.006 0 0 0 2 2h1a1 1 0 0 1 0 2h-1a3.999 3.999 0 0 1-4-4V4a4 4 0 0 1 8 0zM15 4v2h-2V4a2 2 0 0 0-4 0v5a2.006 2.006 0 0 0 2 2h1a1 1 0 0 1 0 2h-1a3.999 3.999 0 0 1-4-4V4a4 4 0 0 1 8 0z"
                                opacity="1"
                                data-original="#376cfb"
                              ></path>
                              <path
                                fill="#4294ff"
                                d="M24 30a1 1 0 0 1-1-1v-3a1 1 0 0 1 2 0v3a1 1 0 0 1-1 1z"
                                opacity="1"
                                data-original="#4294ff"
                                class=""
                              ></path>
                              <path
                                fill="#376cfb"
                                d="M24.688 20.274a.999.999 0 0 0-1.376 0C22.77 20.788 21 22.576 21 24a3 3 0 0 0 6 0c0-1.424-1.77-3.212-2.312-3.726z"
                                opacity="1"
                                data-original="#376cfb"
                              ></path>
                              <path
                                fill="#4294ff"
                                d="M30 28H18a2.002 2.002 0 0 0-2 2v6a1 1 0 0 0 1 1h14a1 1 0 0 0 1-1v-6a2.002 2.002 0 0 0-2-2z"
                                opacity="1"
                                data-original="#4294ff"
                                class=""
                              ></path>
                              <path
                                fill="#376cfb"
                                d="M30 28H18a2.002 2.002 0 0 0-2 2v2h16v-2a2.002 2.002 0 0 0-2-2z"
                                opacity="1"
                                data-original="#376cfb"
                              ></path>
                              <path
                                fill="#4294ff"
                                d="M33 35H15a2.002 2.002 0 0 0-2 2v6a1 1 0 0 0 1 1h20a1 1 0 0 0 1-1v-6a2.002 2.002 0 0 0-2-2z"
                                opacity="1"
                                data-original="#4294ff"
                                class=""
                              ></path>
                              <path
                                fill="#376cfb"
                                d="M33 35H15a2.002 2.002 0 0 0-2 2v2h22v-2a2.002 2.002 0 0 0-2-2z"
                                opacity="1"
                                data-original="#376cfb"
                              ></path>
                            </g>
                          </g>
                        </svg>
                      </div>
                      <div class="ps-3 pt-1">
                        <h6 class="special-font text-white mb-0">
                          Date Of Birth
                        </h6>
                        <p class="text-white mb-0">25 July 2024</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- Company Area -->
              <div class="row pt-5">
                <div class="col-sm-12 pb-5">
                  <div class="text-center">
                    <h3 class="special-font">My Company</h3>
                    <p
                      style="
                        height: 2px;
                        background-color: var(--template-three-color-primary);
                        width: 50px;
                        margin: auto;
                      "
                    ></p>
                  </div>
                </div>
                <div class="col-sm-12">
                  <div class="company-slide">
                    <div class="items">
                      <div class="row">
                        <div class="col-sm-4">
                          <div class="special-font">
                            <h5>GoFlixa Global</h5>
                            <p class="text-white">
                              <i class="fa-solid fa-location-dot pe-2"></i>
                              Usa,Adress, 5685
                            </p>
                            <p class="text-white">
                              <i class="fa-solid fa-globe pe-2"></i>
                              goflixaglobal.us
                            </p>
                            <p class="text-white">
                              <i class="fa-solid fa-phone pe-2"></i> (+911)
                              5457657
                            </p>
                          </div>
                        </div>
                        <div class="col-sm-8">
                          <!-- 32 Word -->
                          <p>
                            Lorem, ipsum dolor sit amet consectetur adipisicing
                            elit. Deserunt itaque provident quos eveniet
                            possimus sint laborum mollitia voluptatum. Sint
                            maiores, amet nisi rerum, qui quisquam ullam
                            adipisci, facere ducimus maxime aliquam esse.
                          </p>
                        </div>
                      </div>
                    </div>
                    <div class="items">
                      <div class="row">
                        <div class="col-sm-4">
                          <div class="special-font">
                            <h5>GoFlixa Global</h5>
                            <p class="text-white">
                              <i class="fa-solid fa-location-dot pe-2"></i>
                              Usa,Adress, 5685
                            </p>
                            <p class="text-white">
                              <i class="fa-solid fa-globe pe-2"></i>
                              goflixaglobal.us
                            </p>
                            <p class="text-white">
                              <i class="fa-solid fa-phone pe-2"></i> (+911)
                              5457657
                            </p>
                          </div>
                        </div>
                        <div class="col-sm-8">
                          <!-- 32 Word -->
                          <p>
                            Lorem, ipsum dolor sit amet consectetur adipisicing
                            elit. Deserunt itaque provident quos eveniet
                            possimus sint laborum mollitia voluptatum. Sint
                            maiores, amet nisi rerum, qui quisquam ullam
                            adipisci, facere ducimus maxime aliquam esse.
                          </p>
                        </div>
                      </div>
                    </div>
                    <div class="items">
                      <div class="row">
                        <div class="col-sm-4">
                          <div class="special-font">
                            <h5>GoFlixa Global</h5>
                            <p class="text-white">
                              <i class="fa-solid fa-location-dot pe-2"></i>
                              Usa,Adress, 5685
                            </p>
                            <p class="text-white">
                              <i class="fa-solid fa-globe pe-2"></i>
                              goflixaglobal.us
                            </p>
                            <p class="text-white">
                              <i class="fa-solid fa-phone pe-2"></i> (+911)
                              5457657
                            </p>
                          </div>
                        </div>
                        <div class="col-sm-8">
                          <!-- 32 Word -->
                          <p>
                            Lorem, ipsum dolor sit amet consectetur adipisicing
                            elit. Deserunt itaque provident quos eveniet
                            possimus sint laborum mollitia voluptatum. Sint
                            maiores, amet nisi rerum, qui quisquam ullam
                            adipisci, facere ducimus maxime aliquam esse.
                          </p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- Servies Box -->
              <div class="row pt-5">
                <div class="col-sm-12">
                  <div class="text-center">
                    <h3 class="special-font">My Services</h3>
                    <p
                      style="
                        height: 2px;
                        background-color: var(--template-three-color-primary);
                        width: 50px;
                        margin: auto;
                      "
                    ></p>
                  </div>
                </div>
                <div class="col-sm-12">
                  <div class="row pt-5">
                    <div class="col-sm-6">
                      <div class="card border-0 mb-5">
                        <div
                          class="card-header p-0 rounded-2 service-header-tem3"
                        >
                          <div class="service-img-tem3">
                            <img
                              class="img-fluid rounded-2"
                              src="https://liffwalsh.com/wp-content/uploads/2020/08/shutterstock_236029696-scaled.jpg"
                              alt=""
                            />
                          </div>
                        </div>
                        <div class="card-body py-2">
                          <div class="card-body">
                            <h6 class="special-font fw-bold">
                              Closing the transaction
                            </h6>
                            <p
                              class="text-justify"
                              style="font-size: 14px !important"
                            >
                              Lorem ipsum, dolor sit amet consectetur
                              adipisicing elit. Quis, ab. Error, ab.
                            </p>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="card border-0 mb-5">
                        <div
                          class="card-header p-0 rounded-2 service-header-tem3"
                        >
                          <div class="service-img-tem3">
                            <img
                              class="img-fluid rounded-2"
                              src="https://www.incharge.org/wp-content/uploads/2020/07/Realtor-Open-House.jpg"
                              alt=""
                            />
                          </div>
                        </div>
                        <div class="card-body py-2">
                          <div class="card-body">
                            <h6 class="special-font fw-bold">
                              Host open houses
                            </h6>
                            <p
                              class="text-justify"
                              style="font-size: 14px !important"
                            >
                              Lorem ipsum, dolor sit amet consectetur
                              adipisicing elit. Quis, ab. Error, ab.
                            </p>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="card border-0 mb-5">
                        <div
                          class="card-header p-0 rounded-2 service-header-tem3"
                        >
                          <div class="service-img-tem3">
                            <img
                              class="img-fluid rounded-2"
                              src="https://liffwalsh.com/wp-content/uploads/2020/08/shutterstock_236029696-scaled.jpg"
                              alt=""
                            />
                          </div>
                        </div>
                        <div class="card-body py-2">
                          <div class="card-body">
                            <h6 class="special-font fw-bold">
                              Closing the transaction
                            </h6>
                            <p
                              class="text-justify"
                              style="font-size: 14px !important"
                            >
                              Lorem ipsum, dolor sit amet consectetur
                              adipisicing elit. Quis, ab. Error, ab.
                            </p>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="card border-0 mb-5">
                        <div
                          class="card-header p-0 rounded-2 service-header-tem3"
                        >
                          <div class="service-img-tem3">
                            <img
                              class="img-fluid rounded-2"
                              src="https://www.incharge.org/wp-content/uploads/2020/07/Realtor-Open-House.jpg"
                              alt=""
                            />
                          </div>
                        </div>
                        <div class="card-body py-2">
                          <div class="card-body">
                            <h6 class="special-font fw-bold">
                              Host open houses
                            </h6>
                            <p
                              class="text-justify"
                              style="font-size: 14px !important"
                            >
                              Lorem ipsum, dolor sit amet consectetur
                              adipisicing elit. Quis, ab. Error, ab.
                            </p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- Business Hour -->
                  <div class="parallax-background px-0">
                    <div class="container">
                      <div class="row">
                        <div class="col-sm-12">
                          <div class="text-center">
                            <h3 class="special-font">My Appointment</h3>
                            <p
                              style="
                                height: 2px;
                                background-color: var(
                                  --template-three-color-primary
                                );
                                width: 50px;
                                margin: auto;
                              "
                            ></p>
                          </div>
                        </div>
                        <div class="col-sm-12">
                          <div class="table-responsive">
                            <table class="table bg-transparent">
                              <thead class="text-center">
                                <tr>
                                  <th scope="col">
                                    Day
                                    <svg
                                      xmlns="http://www.w3.org/2000/svg"
                                      version="1.1"
                                      xmlns:xlink="http://www.w3.org/1999/xlink"
                                      width="30"
                                      height="30"
                                      x="0"
                                      y="0"
                                      viewBox="0 0 497 497"
                                      style="enable-background: new 0 0 512 512"
                                      xml:space="preserve"
                                      class=""
                                    >
                                      <g>
                                        <path
                                          fill="#b5dbff"
                                          d="M16.567 397.6v66.267C16.567 482.166 31.401 497 49.7 497h397.6c18.299 0 33.133-14.834 33.133-33.133V397.6z"
                                          opacity="1"
                                          data-original="#b5dbff"
                                        ></path>
                                        <path
                                          fill="#97d0ff"
                                          d="M457.433 397.6v66.268c0 18.298-14.834 33.132-33.132 33.132h23c18.299 0 33.133-14.834 33.133-33.132V397.6z"
                                          opacity="1"
                                          data-original="#97d0ff"
                                        ></path>
                                        <path
                                          fill="#edf5ff"
                                          d="M16.567 132.533v298.2c0 18.298 14.834 33.132 33.132 33.132H447.3c18.299 0 33.133-14.834 33.133-33.132v-298.2z"
                                          opacity="1"
                                          data-original="#edf5ff"
                                        ></path>
                                        <path
                                          fill="#d5e8fe"
                                          d="M457.433 132.533v298.2c0 18.298-14.834 33.132-33.133 33.132h23c18.299 0 33.133-14.834 33.133-33.132v-298.2z"
                                          opacity="1"
                                          data-original="#d5e8fe"
                                        ></path>
                                        <path
                                          fill="#ff435b"
                                          d="M480.433 149.1V66.266c0-18.299-14.834-33.132-33.133-33.132H49.7c-18.299 0-33.132 14.834-33.132 33.132V149.1z"
                                          opacity="1"
                                          data-original="#ff435b"
                                        ></path>
                                        <path
                                          fill="#e3374e"
                                          d="M115.967 73.767H99.4a7.5 7.5 0 0 1 0-15h16.567a7.5 7.5 0 0 1 0 15zM165.666 73.767H149.1a7.5 7.5 0 0 1 0-15h16.566a7.5 7.5 0 0 1 0 15zM347.9 73.767h-16.566a7.5 7.5 0 0 1 0-15H347.9a7.5 7.5 0 0 1 0 15zM397.6 73.767h-16.567a7.5 7.5 0 0 1 0-15H397.6a7.5 7.5 0 0 1 0 15z"
                                          opacity="1"
                                          data-original="#e3374e"
                                        ></path>
                                        <path
                                          fill="#596c76"
                                          d="M115.967 66.267c0 9.149 7.417 16.567 16.567 16.567s16.567-7.417 16.567-16.567v-49.7C149.1 7.417 141.683 0 132.533 0s-16.567 7.417-16.567 16.567v49.7zM347.9 66.267c0 9.149 7.417 16.567 16.567 16.567s16.567-7.417 16.567-16.567v-49.7c0-9.15-7.417-16.567-16.567-16.567S347.9 7.417 347.9 16.567z"
                                          opacity="1"
                                          data-original="#596c76"
                                        ></path>
                                        <g fill="#e3374e">
                                          <path
                                            d="M447.3 33.133h-23c18.299 0 33.133 14.834 33.133 33.132V149.1h23V66.266c0-18.299-14.834-33.133-33.133-33.133z"
                                            fill="#e3374e"
                                            opacity="1"
                                            data-original="#e3374e"
                                          ></path>
                                          <path
                                            d="M16.567 108.467h463.866v15H16.567z"
                                            fill="#e3374e"
                                            opacity="1"
                                            data-original="#e3374e"
                                          ></path>
                                        </g>
                                        <g fill="#596c76">
                                          <path
                                            d="M211.986 306.483c12.256-11.355 19.947-27.572 19.947-45.558 0-34.256-27.869-62.125-62.125-62.125s-62.125 27.869-62.125 62.125c0 9.15 7.417 16.567 16.567 16.567 9.149 0 16.567-7.417 16.567-16.567 0-15.986 13.005-28.992 28.992-28.992 15.986 0 28.992 13.005 28.992 28.992s-13.005 28.992-28.992 28.992c-9.149 0-16.567 7.417-16.567 16.567s7.417 16.567 16.567 16.567c15.986 0 28.992 13.005 28.992 28.992 0 15.986-13.005 28.992-28.992 28.992-15.986 0-28.992-13.005-28.992-28.992 0-9.15-7.417-16.567-16.567-16.567-9.149 0-16.567 7.417-16.567 16.567 0 34.256 27.869 62.125 62.125 62.125s62.125-27.869 62.125-62.125c0-17.987-7.69-34.204-19.947-45.56zM327.192 414.167c-34.256 0-62.125-27.869-62.125-62.125v-91.117c0-34.256 27.869-62.125 62.125-62.125s62.125 27.869 62.125 62.125v91.117c0 34.255-27.87 62.125-62.125 62.125zm0-182.234c-15.986 0-28.992 13.005-28.992 28.992v91.117c0 15.986 13.005 28.992 28.992 28.992 15.986 0 28.992-13.005 28.992-28.992v-91.117c-.001-15.986-13.006-28.992-28.992-28.992z"
                                            fill="#596c76"
                                            opacity="1"
                                            data-original="#596c76"
                                          ></path>
                                        </g>
                                      </g>
                                    </svg>
                                  </th>
                                  <th scope="col">
                                    Time
                                    <svg
                                      xmlns="http://www.w3.org/2000/svg"
                                      version="1.1"
                                      xmlns:xlink="http://www.w3.org/1999/xlink"
                                      width="30"
                                      height="30"
                                      x="0"
                                      y="0"
                                      viewBox="0 0 497 497"
                                      style="enable-background: new 0 0 512 512"
                                      xml:space="preserve"
                                      class=""
                                    >
                                      <g>
                                        <path
                                          fill="#b98080"
                                          d="M400.59 61.826h-13.837l-138.254 20-138.254-20H94.41c-17.073 0-30.913-13.84-30.913-30.913C63.496 13.84 77.337 0 94.41 0h306.18c17.073 0 30.913 13.84 30.913 30.913.001 17.073-13.84 30.913-30.913 30.913z"
                                          opacity="1"
                                          data-original="#b98080"
                                        ></path>
                                        <path
                                          fill="#ae6c6c"
                                          d="M402.59 0h-30c17.073 0 30.913 13.84 30.913 30.913s-13.84 30.913-30.913 30.913h30c17.073 0 30.913-13.84 30.913-30.913C433.504 13.84 419.663 0 402.59 0z"
                                          opacity="1"
                                          data-original="#ae6c6c"
                                        ></path>
                                        <path
                                          fill="#efedef"
                                          d="M384.754 100.633V61.826H110.246v38.807c0 60.2 38.478 111.406 92.181 130.382a18.544 18.544 0 0 1 0 34.968c-53.702 18.976-92.181 70.182-92.181 130.382v38.807h274.507v-38.807c0-60.2-38.478-111.406-92.181-130.382a18.544 18.544 0 0 1-12.368-17.484h2c0-7.861 2.956-14.865 10.368-17.484 53.703-18.975 92.182-70.182 92.182-130.382z"
                                          opacity="1"
                                          data-original="#efedef"
                                        ></path>
                                        <path
                                          fill="#d7d0d6"
                                          d="M110.246 61.826v19.599h227.3c10.608 0 19.208 8.6 19.208 19.208 0 60.013-38.24 111.088-91.681 130.204-6.612 2.365-11.67 8.01-12.673 14.96a18.55 18.55 0 0 0 12.173 20.186c53.702 18.976 92.181 70.183 92.181 130.382v38.807h30v-38.807c0-60.013-38.24-111.088-91.681-130.204-6.612-2.365-11.67-8.01-12.673-14.96a18.55 18.55 0 0 1 12.173-20.186c53.702-18.976 92.181-70.183 92.181-130.382V61.826z"
                                          opacity="1"
                                          data-original="#d7d0d6"
                                        ></path>
                                        <path
                                          fill="#b98080"
                                          d="M400.59 497H94.41c-17.073 0-30.913-13.84-30.913-30.913s13.84-30.913 30.913-30.913h15.837l138.254-20 138.254 20h13.837c17.073 0 30.913 13.84 30.913 30.913C431.504 483.16 417.663 497 400.59 497z"
                                          opacity="1"
                                          data-original="#b98080"
                                        ></path>
                                        <path
                                          fill="#ae6c6c"
                                          d="M402.59 435.174h-30c17.073 0 30.913 13.84 30.913 30.913S389.663 497 372.59 497h30c17.073 0 30.913-13.84 30.913-30.913.001-17.073-13.84-30.913-30.913-30.913z"
                                          opacity="1"
                                          data-original="#ae6c6c"
                                        ></path>
                                        <path
                                          fill="#fed402"
                                          d="M315.075 326.717h-14.561c-14.643 0-29.136-10.593-31.531-25.038l-5.941-35.833c-3.024-18.238 11.044-34.83 29.531-34.83 35.875-12.676 64.934-39.748 80.289-74.263H122.138c15.354 34.516 44.414 61.587 80.289 74.263 18.487 0 32.555 16.592 29.531 34.83l-5.941 35.833c-2.395 14.445-14.889 25.038-29.531 25.038h-16.561c-38.174 0-69.47 30.715-69.676 68.888l-.002.762v38.807h274.507v-38.807l-.002-.762c-.207-38.173-31.503-68.888-69.677-68.888z"
                                          opacity="1"
                                          data-original="#fed402"
                                        ></path>
                                        <path
                                          fill="#fac600"
                                          d="M386.752 395.605c-.207-38.173-31.502-68.888-69.676-68.888h-16.562c-14.643 0-27.136-10.593-29.531-25.038l-5.941-35.833c-3.024-18.238 11.044-34.83 29.531-34.83 35.875-12.676 64.934-39.748 80.289-74.263h-30c-15.354 34.516-44.414 61.587-80.289 74.263-18.487 0-32.555 16.592-29.531 34.83l5.941 35.833c2.395 14.445 14.889 25.038 29.531 25.038h16.562c38.174 0 69.47 30.715 69.676 68.888l.002.762v38.807h30v-38.807l-.002-.762z"
                                          opacity="1"
                                          data-original="#fac600"
                                        ></path>
                                      </g>
                                    </svg>
                                  </th>
                                </tr>
                              </thead>
                              <tbody class="text-center">
                                <tr>
                                  <td scope="row">Monday</td>
                                  <td>10.00 AM - 10.00 PM</td>
                                </tr>
                                <tr>
                                  <td scope="row">Tuesday</td>
                                  <td>10.00 AM - 10.00 PM</td>
                                </tr>
                                <tr>
                                  <td scope="row">Wednesday</td>
                                  <td>10.00 AM - 10.00 PM</td>
                                </tr>
                                <tr>
                                  <td scope="row">Tuesday</td>
                                  <td>10.00 AM - 10.00 PM</td>
                                </tr>
                                <tr>
                                  <td scope="row">Thursday</td>
                                  <td>10.00 AM - 10.00 PM</td>
                                </tr>
                                <tr>
                                  <td scope="row">Friday</td>
                                  <td>10.00 AM - 10.00 PM</td>
                                </tr>
                                <tr>
                                  <td scope="row">Satarday</td>
                                  <td>10.00 AM - 10.00 PM</td>
                                </tr>
                              </tbody>
                            </table>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- Video Gallery -->
                  <div class="row pt-5">
                    <div class="col-sm-12">
                      <div class="text-center">
                        <h3 class="special-font">Video Gallery</h3>
                        <p
                          style="
                            height: 2px;
                            background-color: var(
                              --template-three-color-primary
                            );
                            width: 50px;
                            margin: auto;
                          "
                        ></p>
                      </div>
                    </div>
                    <div
                      lass="row justify-content-center align-items-center g-2"
                    >
                      <div class="video-gallery-slide">
                        <div class="items">
                          <div class="video-container">
                            <iframe
                              src="https://www.youtube.com/embed/v5snnfUFZw0?si=QUIxHfOIfxSFMQM8&autoplay=1&mute=1"
                              title="YouTube video player"
                              frameborder="0"
                              allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                              referrerpolicy="strict-origin-when-cross-origin"
                              allowfullscreen
                            ></iframe>
                          </div>
                        </div>
                        <div class="items">
                          <div class="video-container">
                            <iframe
                              src="https://www.youtube.com/embed/v5snnfUFZw0?si=QUIxHfOIfxSFMQM8&autoplay=1&mute=1"
                              title="YouTube video player"
                              frameborder="0"
                              allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                              referrerpolicy="strict-origin-when-cross-origin"
                              allowfullscreen
                            ></iframe>
                          </div>
                        </div>
                        <div class="items">
                          <div class="video-container">
                            <iframe
                              src="https://www.youtube.com/embed/v5snnfUFZw0?si=QUIxHfOIfxSFMQM8&autoplay=1&mute=1"
                              title="YouTube video player"
                              frameborder="0"
                              allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                              referrerpolicy="strict-origin-when-cross-origin"
                              allowfullscreen
                            ></iframe>
                          </div>
                        </div>
                        <div class="items">
                          <div class="video-container">
                            <iframe
                              src="https://www.youtube.com/embed/v5snnfUFZw0?si=QUIxHfOIfxSFMQM8&autoplay=1&mute=1"
                              title="YouTube video player"
                              frameborder="0"
                              allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                              referrerpolicy="strict-origin-when-cross-origin"
                              allowfullscreen
                            ></iframe>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- Product Box -->
                  <div class="row pt-5">
                    <div class="col-sm-12">
                      <div class="text-center">
                        <h3 class="special-font">My Product</h3>
                        <p
                          style="
                            height: 2px;
                            background-color: var(
                              --template-three-color-primary
                            );
                            width: 50px;
                            margin: auto;
                          "
                        ></p>
                      </div>
                    </div>
                  </div>
                  <div class="row pt-4">
                    <div class="col-sm-6 mb-4">
                      <div
                        class="card border-0"
                        style="
                          background-color: var(--template-three-color-primary);
                        "
                      >
                        <div
                          class="card-header p-0 rounded-2 service-header-tem3"
                        >
                          <div class="product-img-tem3">
                            <img
                              class="img-fluid rounded-2"
                              src="https://www.allthingsrealestatestore.com/cdn/shop/files/outdoor-acrylic-business-card-holder-669048_1000x.jpg?v=1714934954%201000w"
                              alt=""
                            />
                          </div>
                        </div>
                        <div class="card-body py-2">
                          <div class="card-body">
                            <h6 class="special-font fw-bold text-white">
                              OUTDOOR ACRYLIC BUSINESS CARD HOLDER
                            </h6>
                            <p
                              class="text-justify text-white"
                              style="font-size: 14px !important"
                            >
                              $ 2,000.00
                            </p>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-6 mb-4">
                      <div
                        class="card border-0"
                        style="
                          background-color: var(--template-three-color-primary);
                        "
                      >
                        <div
                          class="card-header p-0 rounded-2 service-header-tem3"
                        >
                          <div class="product-img-tem3">
                            <img
                              class="img-fluid rounded-2"
                              src="https://www.allthingsrealestatestore.com/cdn/shop/files/outdoor-acrylic-business-card-holder-669048_1000x.jpg?v=1714934954%201000w"
                              alt=""
                            />
                          </div>
                        </div>
                        <div class="card-body py-2">
                          <div class="card-body">
                            <h6 class="special-font fw-bold text-white">
                              OUTDOOR ACRYLIC BUSINESS CARD HOLDER
                            </h6>
                            <p
                              class="text-justify text-white"
                              style="font-size: 14px !important"
                            >
                              $ 2,000.00
                            </p>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-6 mb-4">
                      <div
                        class="card border-0"
                        style="
                          background-color: var(--template-three-color-primary);
                        "
                      >
                        <div
                          class="card-header p-0 rounded-2 service-header-tem3"
                        >
                          <div class="product-img-tem3">
                            <img
                              class="img-fluid rounded-2"
                              src="https://www.allthingsrealestatestore.com/cdn/shop/files/outdoor-acrylic-business-card-holder-669048_1000x.jpg?v=1714934954%201000w"
                              alt=""
                            />
                          </div>
                        </div>
                        <div class="card-body py-2">
                          <div class="card-body">
                            <h6 class="special-font fw-bold text-white">
                              OUTDOOR ACRYLIC BUSINESS CARD HOLDER
                            </h6>
                            <p
                              class="text-justify text-white"
                              style="font-size: 14px !important"
                            >
                              $ 2,000.00
                            </p>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-6 mb-4">
                      <div
                        class="card border-0"
                        style="
                          background-color: var(--template-three-color-primary);
                        "
                      >
                        <div
                          class="card-header p-0 rounded-2 service-header-tem3"
                        >
                          <div class="product-img-tem3">
                            <img
                              class="img-fluid rounded-2"
                              src="https://www.allthingsrealestatestore.com/cdn/shop/files/outdoor-acrylic-business-card-holder-669048_1000x.jpg?v=1714934954%201000w"
                              alt=""
                            />
                          </div>
                        </div>
                        <div class="card-body py-2">
                          <div class="card-body">
                            <h6 class="special-font fw-bold text-white">
                              OUTDOOR ACRYLIC BUSINESS CARD HOLDER
                            </h6>
                            <p
                              class="text-justify text-white"
                              style="font-size: 14px !important"
                            >
                              $ 2,000.00
                            </p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!--  -->
                </div>
              </div>
              <!-- Gallery Box -->
              <div class="row pt-5">
                <div class="col-sm-12">
                  <div class="text-center">
                    <h3 class="special-font">My Gallery</h3>
                    <p
                      style="
                        height: 2px;
                        background-color: var(--template-three-color-primary);
                        width: 50px;
                        margin: auto;
                      "
                    ></p>
                  </div>
                </div>
                <div lass="row justify-content-center align-items-center g-2">
                  <div class="gallery-slide">
                    <div class="gallery-items-tem3">
                      <div>
                        <img
                          class="img-fluid"
                          src="https://luxurylifestyleawards.com/wp-content/uploads/2020/02/MAIN-IMAGE.jpg"
                          alt=""
                        />
                      </div>
                    </div>
                    <div class="gallery-items-tem3">
                      <div>
                        <img
                          class="img-fluid"
                          src="https://maansai.co.ke/images/About.jpg"
                          alt=""
                        />
                      </div>
                    </div>
                    <div class="gallery-items-tem3">
                      <div>
                        <img
                          class="img-fluid"
                          src="https://media.licdn.com/dms/image/C5612AQEN0e0IvwLVJw/article-cover_image-shrink_720_1280/0/1524771172008?e=2147483647&v=beta&t=D4vtYqcxs10MrUt68OwvRZlHw85LnJzWFnzTZej6lXk"
                          alt=""
                        />
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- Testimonial -->
              <div class="row pt-5">
                <div class="col-sm-12">
                  <div class="text-center">
                    <h3 class="special-font">My Appoints</h3>
                    <p
                      style="
                        height: 2px;
                        background-color: var(--template-three-color-primary);
                        width: 50px;
                        margin: auto;
                      "
                    ></p>
                  </div>
                </div>
                <div class="col-sm-12 mt-4">
                  <div class="testimonial-slide">
                    <div class="testimonial-items">
                      <div class="row p-3 align-items-center">
                        <div class="col-sm-3">
                          <div>
                            <img
                              class="img-fluid rounded-2"
                              src="./Back-assets/profile.png"
                              alt=""
                            />
                          </div>
                        </div>
                        <div class="col-sm-9">
                          <div class="d-flex justify-content-between">
                            <h6 class="special-font">Rodela Bruce</h6>
                            <div class="pe-3">
                              <i
                                class="fa-solid fa-star"
                                style="color: yellow"
                              ></i>
                              <i
                                class="fa-solid fa-star"
                                style="color: yellow"
                              ></i>
                              <i
                                class="fa-solid fa-star-half"
                                style="color: yellow"
                              ></i>
                            </div>
                          </div>
                          <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing
                            elit. Voluptates error quasi quae aliquid deleniti
                            at accusantium reiciendis doloribus quos illum.
                          </p>
                        </div>
                      </div>
                    </div>
                    <div class="testimonial-items">
                      <div class="row p-3 align-items-center">
                        <div class="col-sm-3">
                          <div>
                            <img
                              class="img-fluid rounded-2"
                              src="./Back-assets/profile.png"
                              alt=""
                            />
                          </div>
                        </div>
                        <div class="col-sm-9">
                          <div class="d-flex justify-content-between">
                            <h6 class="special-font">Rodela Bruce</h6>
                            <div class="pe-3">
                              <i
                                class="fa-solid fa-star"
                                style="color: yellow"
                              ></i>
                              <i
                                class="fa-solid fa-star"
                                style="color: yellow"
                              ></i>
                              <i
                                class="fa-solid fa-star-half"
                                style="color: yellow"
                              ></i>
                            </div>
                          </div>
                          <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing
                            elit. Voluptates error quasi quae aliquid deleniti
                            at accusantium reiciendis doloribus quos illum.
                          </p>
                        </div>
                      </div>
                    </div>
                    <div class="testimonial-items">
                      <div class="row p-3 align-items-center">
                        <div class="col-sm-3">
                          <div>
                            <img
                              class="img-fluid rounded-2"
                              src="./Back-assets/profile.png"
                              alt=""
                            />
                          </div>
                        </div>
                        <div class="col-sm-9">
                          <div class="d-flex justify-content-between">
                            <h6 class="special-font">Rodela Bruce</h6>
                            <div class="pe-3">
                              <i
                                class="fa-solid fa-star"
                                style="color: yellow"
                              ></i>
                              <i
                                class="fa-solid fa-star"
                                style="color: yellow"
                              ></i>
                              <i
                                class="fa-solid fa-star-half"
                                style="color: yellow"
                              ></i>
                            </div>
                          </div>
                          <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing
                            elit. Voluptates error quasi quae aliquid deleniti
                            at accusantium reiciendis doloribus quos illum.
                          </p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- Inquery Form -->
              <div class="row pt-4">
                <div class="col-sm-12">
                  <div class="text-center">
                    <h3 class="special-font">Need Inquery?</h3>
                    <p
                      style="
                        height: 2px;
                        background-color: var(--template-three-color-primary);
                        width: 50px;
                        margin: auto;
                      "
                    ></p>
                  </div>
                </div>
                <div class="col-md-12">
                  <form action="" method="post">
                    <div class="row">
                      <div class="col-sm-12 mb-3">
                        <input
                          type="text"
                          name=""
                          class="border-0 form-control form-control-sm rounded-0 w-75 mx-auto rounded-1 p-2"
                          style="
                            background-color: var(
                              --template-three-color-primary
                            );
                          "
                          placeholder="Enter Your Names"
                        />
                      </div>
                      <div class="col-sm-12 mb-3">
                        <input
                          type="email"
                          name=""
                          class="border-0 form-control form-control-sm rounded-0 w-75 mx-auto rounded-1 p-2"
                          style="
                            background-color: var(
                              --template-three-color-primary
                            );
                          "
                          placeholder="Enter Your Email"
                        />
                      </div>
                      <div class="col-sm-12 mb-3">
                        <input
                          type="text"
                          name=""
                          class="border-0 form-control form-control-sm rounded-0 w-75 mx-auto rounded-1 p-2"
                          style="
                            background-color: var(
                              --template-three-color-primary
                            );
                          "
                          placeholder="Enter Your Phone"
                        />
                      </div>
                      <div class="col-sm-12 mb-3">
                        <textarea
                          name=""
                          class="border-0 form-control form-control-sm rounded-0 w-75 mx-auto rounded-1 p-2"
                          style="
                            background-color: var(
                              --template-three-color-primary
                            );
                          "
                          id=""
                          rows="5"
                        ></textarea>
                      </div>
                      <div class="col-sm-12 w-75 mx-auto px-2 pb-5">
                        <button
                          type="submit"
                          class="btn w-100 text-white"
                          style="
                            background-color: var(
                              --template-three-color-primary
                            );
                          "
                        >
                          Send Message
                          <i
                            class="fa-solid fa-paper-plane"
                            aria-hidden="true"
                          ></i>
                        </button>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
              <!-- Qr Code -->
              <div class="row pt-4">
                <div
                  class="col-sm-3 mx-auto bg-white p-0 pt-2 pb-3"
                  style="
                    margin-bottom: -15px;
                    border-top-left-radius: 8px;
                    border-top-right-radius: 8px;
                  "
                >
                  <div class="d-flex justify-content-center align-items-center">
                    <img
                      height="100px"
                      src="https://www.theglobeandmail.com/resizer/v2/YXTCOU6ZF5D4FLPFUW74HQ5OAU?auth=6d94825210b863ed6b50b732f1ee9309b870c00076c6f2359b4dee998458531f&width=600&quality=80"
                      alt=""
                    />
                  </div>
                </div>
                <!-- SHape -->
                <div class="tem3-footer-shape">
                  <p
                    class="text-center text-white special-font"
                    style="position: relative; top: 5px"
                  >
                    Scan Me
                  </p>
                </div>
              </div>
            </div>
          </section>
          <!-- Footer -->
          <div class="footer-nav-area-tem3" id="footerNav">
            <div class="container px-0">
              <!-- Footer Content -->
              <div class="footer-nav-tem3 position-relative">
                <ul
                  class="h-100 d-flex align-items-center justify-content-between ps-0"
                >
                  <li class="active">
                    <a href="#">
                      <i class="fa-solid fa-qrcode"></i>
                      <span>QR</span>
                    </a>
                  </li>
                  <li>
                    <a
                      href="#"
                      class="copy-link"
                      data-link="https://another-example.com"
                    >
                      <i class="fa-solid fa-copy"></i>
                      <span>Copy Link</span>
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <i class="fa-solid fa-file-arrow-down"></i>
                      <span>Save Contact</span>
                    </a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Modal -->
      <div
        class="modal fade"
        id="myModal"
        tabindex="-1"
        aria-labelledby="exampleModalLabel"
        aria-hidden="true"
      >
        <div class="modal-dialog load-modal modal-dialog-centered">
          <div class="modal-content rounded-0">
            <div class="modal-header rounded-0 text-white" style="background-color: var(--template-three-color-primary);">
              <h5 class="modal-title" id="exampleModalLabel">Welcome</h5>
              <button
                type="button"
                class="btn-close text-white close-btns"
                data-bs-dismiss="modal"
                aria-label="Close"
              ></button>
            </div>
            <div class="modal-body">
              This is a modal that appears on page load.
              <div class="pt-3">
                <a href="" class="btn border-0 rounded-2 btn-sm text-white" style="background-color: var(--template-three-color-primary);">View</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </main>

    <script
      src="https://kit.fontawesome.com/69b7156a94.js"
      crossorigin="anonymous"
    ></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"></script>

    <script
      type="text/javascript"
      src="https://code.jquery.com/jquery-3.6.0.min.js"
    ></script>
    <script
      type="text/javascript"
      src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"
    ></script>
    <script
      type="text/javascript"
      src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"
    ></script>

    <!-- On Page Load Show Modal -->
    <script>
      var myModal = new bootstrap.Modal(document.getElementById("myModal"), {
        keyboard: false, // Optional: Disable closing modal with keyboard Esc key
      });
      $(document).ready(function () {
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
      $(document).ready(function () {
        $(".company-slide").slick({
          infinite: true, // Infinite looping
          speed: 2000, // Animation speed in milliseconds
          slidesToShow: 1, // Number of slides to show at once
          slidesToScroll: 1, // Number of slides to scroll at once
          autoplay: true, // Enable autoplay
          autoplaySpeed: 2000, // Autoplay speed in milliseconds
          gap: 10,
          dots: true,
          arrows: false,
          prevArrow:
            '<button type="button" class="slick-prev"><i class="fas fa-chevron-left"></i></button>',
          nextArrow:
            '<button type="button" class="slick-next"><i class="fas fa-chevron-right"></i></button>',
        });
        $(".service-slide").slick({
          infinite: true, // Infinite looping
          speed: 500, // Animation speed in milliseconds
          slidesToShow: 1, // Number of slides to show at once
          slidesToScroll: 1, // Number of slides to scroll at once
          autoplay: true, // Enable autoplay
          autoplaySpeed: 2000, // Autoplay speed in milliseconds
          arrows: false, // Show next/prev arrows
          gap: 10,
          dots: false,
          prevArrow:
            '<button type="button" class="slick-prev"><i class="fa fa-chevron-left"></i></button>',
          nextArrow:
            '<button type="button" class="slick-next"><i class="fa fa-chevron-right"></i></button>',
        });
        $(".product-slide").slick({
          infinite: true,
          speed: 500,
          slidesToShow: 1,
          slidesToScroll: 1,
          autoplay: true,
          autoplaySpeed: 2000,
          arrows: false,
          dots: false,
        });
        $(".gallery-slide").slick({
          infinite: true,
          speed: 500,
          slidesToShow: 1,
          slidesToScroll: 1,
          autoplay: true,
          autoplaySpeed: 2000,
          arrows: true,
          dots: false,
        });
        $(".video-gallery-slide").slick({
          infinite: true,
          speed: 500,
          slidesToShow: 1,
          slidesToScroll: 1,
          autoplay: true,
          autoplaySpeed: 5000,
          arrows: true,
          dots: false,
        });
        $(".testimonial-slide").slick({
          infinite: true,
          speed: 500,
          slidesToShow: 1,
          slidesToScroll: 1,
          autoplay: true,
          autoplaySpeed: 2000,
          arrows: false,
          dots: false,
        });
      });
    </script>
  </body>
</html>

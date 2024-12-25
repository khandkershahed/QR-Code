<!DOCTYPE html>
<html lang="en">
  <head>
    <title>{{ $qr->code }}</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <link
      rel="shortcut icon"
      href="https://images.rawpixel.com/image_800/cHJpdmF0ZS9s…03ZDBiLTQ2ODgtYjkzOS01MjM3ZDExNGYxNDVfMS5qcGc.jpg"
      type="image/x-icon"
    />

    <!-- Bootstrap CSS v5.2.1 -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
      crossorigin="anonymous"
    />
    <!-- Slick CSS -->
    <link
      rel="stylesheet"
      type="text/css"
      href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css"
    />
    <link
      rel="stylesheet"
      type="text/css"
      href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css"
    />
    <!-- Style Here -->
    <style>
      @import url("https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Raleway:ital,wght@0,100..900;1,100..900&display=swap");

      /* CSS for centering the mobile frame */
      :root {
        --white: #fff;
        --tem-one-name-color: #fff;
        --body-font-family: "Raleway", sans-serif;
        --tem-one-name-font-size: 40px;
        --tem-one-name-font-family: "Bebas Neue", sans-serif;
        --tem-one-designation-font-family: "Raleway", sans-serif;
        --tem-one-designation-color: #fff;
        --tem-one-bio-title-color: #624aac;
        --tem-profile-image-bg: #624aac;
        --tem-one-social-icons-color: #fff;
        --tem-one-social-icons-bg: #fff;
        --tem-one-social-icons-font-size: 18px;
        --tem-one-bio-title-font-size: 30px;
        --tem-one-service-title-color: #fff;
        --tem-one-service-title-font-size: 20px;
        --tem-one-service-box-bg: #624aac;
        --tem-one-address-color: #fff;
      }
      body {
        display: flex;
        justify-content: center;
        align-items: center;
        height: auto;
        margin: 0;
        padding: 0;
        font-family: var(--body-font-family);
      }

      .nfc-mobile-frame {

        width: 100%;
        max-width: 576px;
        border-radius: 20px;
        overflow: hidden;
        position: relative;
      }

      /* CSS for the card inside the mobile frame */
      .nfc-mobile-frame .card {
        background-color: var(--white);
        width: 100%;
        max-width: 576px;
        border-radius: 20px;
      }

      .nfc-mobile-frame .card title {
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100%;
      }

      .nfc-one-cover-img-box {
        position: relative;
        max-width: 100%;
      }

      .nfc-one-cover-img {
        background-size: cover;
        height: 300px;
        background-position: center;
      }
      .slick-slide {
        margin-right: 20px; /* Adjust the value to set the desired gap */
      }

      /* Ensure last slide doesn't have margin */
      .slick-slide:last-child {
        margin-right: 0;
        border-radius: 10px;
      }
      /* Media query for smaller screens */
      @media only screen and (max-width: 768px) {
        html,
        body {
          width: 100%;
          overflow-x: hidden;
        }
        .mobile-profiles {
          padding-top: 65px;
        }
        .mobile-images-profile {
          margin-top: 0 !important;
          text-align: center;
        }
        .mobile-images-profile img {
          left: auto !important;
        }
        .nfc-mobile-frame {
          max-width: 390px;
          width: 100%;
        }
        .nfc-mobile-frame .card {
          border-radius: 0px !important;
        }
        .contact-info {
          margin-left: 0px !important;
        }
        .mobile-d-none {
          display: none;
        }
      }
    </style>
    <!-- Style Here End -->
  </head>

  <body>
    <main>
      <section>
        <div class="container">
          <div class="row">
            <div
              class="col-lg-12 d-flex justify-content-center align-items-center px-0"
            >
              <div class="nfc-mobile-frame rounded-0">
                <div class="card p-0 rounded-0">
                  <div class="card-body p-0 rounded-0 row">
                    <div
                      class="col-lg-6 pe-0 d-flex justify-content-center align-items-center"
                      style="
                        background-image: url('{{ asset('images/d-image/e7632495dd8e76e42fad24de2fc92f26.jpg') }}');
                        background-repeat: no-repeat;
                        background-size: cover;
                        background-position: center;
                        object-fit: fill;
                      "
                    >
                      <div
                        class="text-center"
                        style="position: relative; z-index: 1"
                      >
                      <div>
                        <div class="py-3" style="background-color: rgba(0, 0, 0, 0.561)">
                          <div>
                            <img
                              class="img-fluid"
                              src="{{ asset('images/d-image/Restaurant-logo-with-chef-drawing-template-on-transparent-background-PNG-removebg-preview.png') }}"
                              alt=""
                            />
                          </div>
                            <h3
                              class="text-white mb-0"
                              style="font-family: var(--tem-one-name-font-family)"
                            >
                              Resturent
                            </h3>
                            <h1
                              class="text-white mb-0"
                              style="
                                font-size: 5rem;
                                font-family: var(--tem-one-name-font-family);
                              "
                            >
                              Menu
                            </h1>
                            <p class="p-3 text-white mb-0">
                              Lorem ipsum dolor sit amet consectetur adipisicing
                              elit. Omnis, ipsam.
                            </p>
                            <a
                              href=""
                              class="text-decoration-none text-black bg-white p-2 rounded-2"
                              >Call Now: 01576614451</a
                            >
                            <div class="mt-4">
                              <a href="" class="btn btn-danger">View Location</a>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-6 px-0 d-flex flex-column justify-content-center align-items-center">
                      <h4>All Menus</h4>
                      <div
                        class="w-100 d-flex flex-column justify-content-center align-items-center"
                      >
                        <!-- First Menu -->
                        <div
                          class="row align-items-center w-100 pt-4 ps-2"
                          style="
                            border-top: 1px dashed #e92c28;
                            background: white;
                          "
                        >
                          <div class="col-lg-3 px-0">
                            <div style="background-color: white">
                              <img
                                width="60px"
                                class="img-fluid"
                                src="{{ asset('images/d-image/breakfast.png') }}"
                                alt=""
                              />
                            </div>
                          </div>
                          <div class="col-lg-9 pe-0">
                            <div>
                              <p class="mb-0 text-black fw-bold">Breakfast</p>
                              <small class="mb-0 text-black"
                                >07:00pm - 07:00pm</small
                              >
                            </div>
                          </div>
                        </div>
                        <!-- Menu End -->
                        <!-- First Menu -->
                        <div
                          class="row align-items-center w-100 ps-2"
                          style="
                            border-top: 1px dashed #e92c28;
                            background: white;
                          "
                        >
                          <div class="col-lg-3 px-0">
                            <div style="background-color: white">
                              <img
                                width="60px"
                                class="img-fluid"
                                src="{{ asset('images/d-image/breakfast.png') }}"
                                alt=""
                              />
                            </div>
                          </div>
                          <div class="col-lg-9 pe-0">
                            <div>
                              <p class="mb-0 text-black fw-bold">Breakfast</p>
                              <small class="mb-0 text-black"
                                >07:00pm - 07:00pm</small
                              >
                            </div>
                          </div>
                        </div>
                        <!-- Menu End -->
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    </main>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
      crossorigin="anonymous"
    ></script>
    <script src="https://kit.fontawesome.com/4cba8ce13c.js"></script>
    <!-- Slick JS -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
    <script>
      // Initialize Slick Slider
      $(document).ready(function () {
        $(".slick-slider").slick({
          slidesToShow: 2,
          slidesToScroll: 2,
          draggable: true,
          autoplay: true,
          autoplaySpeed: 2000,
          responsive: [
            {
              breakpoint: 768,
              settings: {
                slidesToShow: 1,
                slidesToScroll: 1,
              },
            },
            {
              breakpoint: 1024,
              settings: {
                slidesToShow: 3,
                slidesToScroll: 3,
              },
            },
          ],
        });
      });
    </script>
  </body>
</html>

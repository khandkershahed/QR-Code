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
        --template-two-color-white: #fff;
        --template-two-color-black: #000;
        --template-two-color-primary: #ed1c24e0;
        --template-two-title-font-size: 48px;
        --template-two-others-font-size: 20px;
        --template-two-font-fmly-Almendra: "Almendra SC", serif;
        --template-two-font-fmly-Almendra: "Almendra SC", serif;
        --template-two-font-fmly-Bebas: "Bebas Neue", sans-serif;
        --template-two-font-fmly-Ubuntu: "Ubuntu", sans-serif;
        --template-two-font-fmly-Anton: "Anton SC", sans-serif;
        --template-two-font-fmly-Margarine: "Margarine", sans-serif;
        --template-two-font-fmly-Roboto: "Roboto Slab", serif;
        --template-two-font-fmly-Jost: "Jost", sans-serif;
        --template-two-font-fmly-Roboto: "Roboto", sans-serif;
        --template-two-font-fmly-Poppins: "Poppins", sans-serif;
        --template-two-font-fmly-Raleway: "Raleway",  sans-serif;
      }
      .mobile-frame {
        width: 535px;
        margin: auto;
        max-width: 100%;
        box-shadow: rgba(99, 99, 99, 0.2) 0px 2px 8px 0px;
        font-family: var(--template-two-font-fmly-Roboto);
      }
      .page-content-wrapper {
        width: 100%;
        margin: auto;
        margin-bottom: 62px;
        background-color: var(--template-two-color-primary);
      }

      .section-top-tem2 {
        margin-top: -260px;
      }
      .social-rotate-tem2 {
        transform: rotate(23deg);
        margin-top: -32px;
        margin-left: 95px;
      }
      .profile-img-tem2 img {
        width: 150px;
        height: 150px;
        object-fit: cover;
        border: 2px dashed var(--template-two-color-primary);
        padding: 5px;
      }
      .name-title-tem2 {
        font-family: var(--template-two-font-fmly-Bebas);
        color: var(--template-two-color-white);
        font-size: var(--template-two-title-font-size);
      }
      .user-name-rotate-tem2 {
        margin-top: -160px;
      }
      .product-content-tem2 {
        height: 75px;
      }
      .company-btn-tem2 {
        background-color: var(--template-two-color-white);
        border-radius: 3px !important;
      }
      .company-btn-tem2:hover {
        background-color: transparent;
        transition: all 0.5s ease-in-out;
      }
      .contact-icons-tem2 {
        border: 2px dashed var(--template-two-color-primary);
        background: var(--template-two-color-primary);
        padding: 10px 10px;
        width: 50px;
        height: 50px;
        color: var(--template-two-color-primary);
        box-shadow: rgba(255, 255, 255, 0.24) 0px 3px 8px;
        border-radius: 50%;
        font: var(--template-two-others-font-size);
      }
      .social-link-tem2 {
        background: var(--template-two-color-white);
        padding: 8px 14px;
        width: 45px;
        height: 45px;
        color: var(--template-two-color-primary);
        box-shadow: rgba(255, 255, 255, 0.24) 0px 3px 8px;
        margin-left: 10px;
        border-radius: 50%;
        font: var(--template-two-others-font-size);
      }
      .text-justify {
        text-align: justify;
      }
      .special-font {
        color: var(--template-two-color-primary);
        font-family: var(--template-two-font-fmly-Bebas);
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
        background: var(--template-two-color-black);
        z-index: 5;
      }
      .slick-prev:hover,
      .slick-prev:focus,
      .slick-next:hover,
      .slick-next:focus {
        background: var(--template-two-color-primary);
      }
      .slick-prev:before,
      .slick-next:before {
        color: var(--template-two-color-white);
      }
      .product-img {
        width: 100%;
        height: 350px;
        object-fit: cover;
      }
      .slick-dots li button:before {
        font-family: "slick";
        font-size: 6px;
        line-height: 20px;
        position: absolute;
        top: 0px;
        left: 0;
        width: 20px;
        height: 20px;
        content: "•";
        text-align: center;
        opacity: 0.25;
        color: var(--template-two-color-black);
        -webkit-font-smoothing: antialiased;
        -moz-osx-font-smoothing: grayscale;
        background: var(--template-two-color-white);
        border-radius: 100%;
      }
      .footer-nav-area {
        position: fixed;
        bottom: 0;
        left: 0;
        width: 100%;
        z-index: 1000;
      }

      .footer-nav-tem2 {
        /* background-color: var(--white); */
        box-shadow: rgba(149, 157, 165, 0.2) 0px 8px 24px;
        background-color: var(--info-500);
        width: 535px;
        height: 62px;
        margin: auto;
      }

      .footer-nav-tem2 ul {
        position: relative;
        z-index: 10;
        width: 100%;
        list-style-type: none;
        box-shadow: rgb(255 255 255 / 20%) 0px 2px 8px 0px;
        background: var(--template-two-color-primary);
      }

      .footer-nav-tem2 ul li {
        position: relative;
        z-index: 1;
        -webkit-box-flex: 1;
        -ms-flex: 1 1 0px;
        flex: 1 1 0;
      }

      .footer-nav-tem2 ul li a {
        position: relative;
        display: block;
        font-size: 16px;
        text-align: center;
        font-weight: 600;
        text-transform: capitalize;
        line-height: 1;
        color: var(--template-two-color-white);
        text-decoration: none;
        z-index: 1;
      }

      .footer-nav-tem2 ul li.active a {
        background-color: var(--template-two-color-white);
        padding: 24px;
        color: var(--template-two-color-black);
      }
      .modal.fade .load-modal {
        transition: transform 0.3s ease-out;
        transform: translate(-8px, 0) !important;
      }
      .close-btns {
        background-color: var(--template-two-color-white);
      }
      .image-container-tem2 {
        height: 385px;
        object-fit: cover;
      }
      .shape-container-tem2 {
        margin-top: -250px;
        width: 100%;
        height: 229px;
      }
      .language-2 {
        position: absolute;
        top: 0rem;
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
                <div class="col-sm-12 px-0">
                  <img
                    class="img-fluid image-container-tem2"
                    src="https://cdn.pixabay.com/photo/2023/12/29/16/15/ai-generated-8476506_960_720.png"
                    alt=""
                  />
                  <div>
                    <img
                      class="shape-container-tem2"
                      src="https://i.ibb.co/bg43J6s/Asset-63-8.png"
                      alt=""
                    />
                  </div>
                  <div class="dropdown language-2">
                    <button
                      class="btn btn-dark dropdown-toggle rounded-0"
                      type="button"
                      data-bs-toggle="dropdown"
                      aria-expanded="false"
                    >
                      Language
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
                <div class="col-lg-12 section-top-tem2">
                  <div class="profile-img-tem2">
                    <img
                      class="img-fluid"
                      src="https://images.ctfassets.net/h6goo9gw1hh6/2sNZtFAWOdP1lmQ33VwRN3/24e953b920a9cd0ff2e1d587742a2472/1-intro-photo-final.jpg?w=1200&h=992&fl=progressive&q=70&fm=jpg"
                      alt=""
                    />
                  </div>
                  <div
                    class="d-flex justify-content-center align-items-center social-rotate-tem2"
                  >
                    <a href="" class="social-link-tem2"
                      ><i class="fa-brands fa-facebook-f"></i
                    ></a>
                    <a href="" class="social-link-tem2"
                      ><i class="fa-brands fa-instagram"></i
                    ></a>
                    <a href="" class="social-link-tem2"
                      ><i class="fa-brands fa-linkedin-in"></i
                    ></a>
                    <a href="" class="social-link-tem2"
                      ><i class="fa-brands fa-whatsapp"></i
                    ></a>
                    <a href="" class="social-link-tem2"
                      ><i class="fa-brands fa-twitter"></i
                    ></a>
                  </div>
                </div>
              </div>
            </div>
          </section>
          <!-- Bio Area -->
          <section>
            <div class="container py-4 pt-3">
              <div class="row align-items-center">
                <div class="col-sm-12">
                  <div class="user-name-rotate-tem2">
                    <h1 class="name-title-tem2 mb-0">Shahed</h1>
                    <p class="text-white mb-0">Real State Broker</p>
                    <p class="text-white">
                      <i class="fa-solid fa-location-dot pe-2"></i>From Canada
                    </p>
                  </div>
                  <p class="text-white mb-0 text-justify pt-4">
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
            <div class="container py-5">
              <div class="row">
                <div class="col-md-6">
                  <div class="text-white text-center ps-3">
                    <div class="">
                      <i
                        class="fa fa-envelope social_icons fs-3 bg-white contact-icons-tem2"
                      ></i>
                    </div>
                    <small class="mb-0">E-Mail Address</small>
                    <p class="mb-0 special-font fs-5">goflixza@gmail.com</p>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="text-white text-center ps-3">
                    <div class="">
                      <i
                        class="fa fa-envelope social_icons fs-3 bg-white contact-icons-tem2"
                      ></i>
                    </div>
                    <small class="mb-0">E-Mail Address</small>
                    <p class="mb-0 special-font fs-5">goflixza@gmail.com</p>
                  </div>
                </div>
                <div class="col-md-6 mt-4">
                  <div class="text-white text-center ps-3">
                    <div class="">
                      <i
                        class="fa fa-envelope social_icons fs-3 bg-white contact-icons-tem2"
                      ></i>
                    </div>
                    <small class="mb-0">E-Mail Address</small>
                    <p class="mb-0 special-font fs-5">goflixza@gmail.com</p>
                  </div>
                </div>
                <div class="col-md-6 mt-4">
                  <div class="text-white text-center ps-3">
                    <div class="">
                      <i
                        class="fa fa-envelope social_icons fs-3 bg-white contact-icons-tem2"
                      ></i>
                    </div>
                    <small class="mb-0">E-Mail Address</small>
                    <p class="mb-0 special-font fs-5">goflixza@gmail.com</p>
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
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="company-slide text-white px-0">
                  <div class="">
                    <div class="row pt-3 align-items-center">
                      <div class="col-md-12">
                        <div class="text-center text-white">
                          <div
                            class="d-flex justify-content-center align-items-center"
                          >
                            <img
                              class="img-fluid"
                              width="70px"
                              style="
                                background: var(--template-two-color-white);
                                padding: 12px;
                                border-radius: 100%;
                              "
                              src="https://i.ibb.co/RvYHMvy/logo.png"
                              alt=""
                            />
                          </div>
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
                      <div class="col-md-6">
                        <div class="ps-4 pb-3">
                          <p class="mb-0">
                            <span
                              ><i class="fa-solid fa-globe pe-3"></i
                              >www.neezonline.com</span
                            >
                          </p>
                          <p class="mb-0">
                            <span
                              ><i class="fa-solid fa-phone pe-3"></i>+1
                              98656584584</span
                            >
                          </p>
                          <p class="mb-0">
                            <span
                              ><i class="fa-regular fa-envelope pe-3"></i
                              >info@flixzaglobal.com</span
                            >
                          </p>
                          <p class="mb-0">
                            <span
                              ><i class="fa-solid fa-location pe-3"></i>Robert
                              Robertson, 1234 NW Bobcat Lane, St. Robert, MO
                              65584-5678</span
                            >
                          </p>
                        </div>
                      </div>
                      <div
                        class="col-md-6 align-items-center justify-content-center d-flex"
                      >
                        <div class="px-3">
                          <a
                            href=""
                            class="btn company-btn-tem2 rounded-0 mb-2 w-100"
                            >Facebook</a
                          >
                          <a
                            href=""
                            class="btn company-btn-tem2 rounded-0 mb-2 w-100"
                            >Instagram</a
                          >
                          <a
                            href=""
                            class="btn company-btn-tem2 rounded-0 mb-2 w-100"
                            >Linkedin</a
                          >
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
                  </div>
                </div>
              </div>
              <div class="service-slide pt-3">
                <div class="d-flex">
                  <div class="card w-50 me-2 rounded-0 border-0">
                    <div class="card-body border-0">
                      <div>
                        <img
                          class="card-img-top"
                          src="img/demo-img/service1.jpg"
                          alt=""
                        />
                      </div>
                      <div class="mt-3 text-center">
                        <h4
                          class="mb-0 special-font"
                          style="color: var(--template-two-color-primary)"
                        >
                          UI/UX Design
                        </h4>
                        <p class="">
                          Lorem ipsum dolor sit amet consectetur adipisicing
                          elit. Perferendis alias nemo nihil sed odio optio
                          dolorum ut voluptates rerum quas?
                        </p>
                      </div>
                    </div>
                  </div>
                  <div class="card w-50 me-2 rounded-0 border-0">
                    <div class="card-body border-0">
                      <div>
                        <img
                          class="card-img-top"
                          src="img/demo-img/service1.jpg"
                          alt=""
                        />
                      </div>
                      <div class="mt-3 text-center">
                        <h4
                          class="mb-0 special-font"
                          style="color: var(--template-two-color-primary)"
                        >
                          UI/UX Design
                        </h4>
                        <p class="">
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
                  </div>
                </div>
              </div>
              <div class="row pt-3 product-slide">
                <div class="col-md-4 me-2">
                  <div class="card border-0 ms-2">
                    <div class="card-body p-0">
                      <div>
                        <img
                          class="img-fluid rounded-2 product-img"
                          src="https://i5.walmartimages.com/seo/Women-s-Double-Layer-Micro-Inlaid-Zircon-Artificial-Diamond-Ring-Set_982efef2-d3aa-464a-99af-2fcf9bf356be.175f5939a7793421774a6cb59ae07d51.jpeg"
                          alt=""
                        />
                      </div>
                      <div
                        class="d-flex justify-content-between px-4 pt-3 align-items-center product-content-tem2"
                      >
                        <h3 class="special-font mb-0">
                          Ring Set Ring Set Ring Set Ring Set
                        </h3>
                        <div>
                          <del class="special-font mb-0 text-danger fs-4"
                            >$50</del
                          >
                          <h1 class="special-font mb-0">$50</h1>
                        </div>
                      </div>
                      <p class="px-4 pb-3">For Order Please Fill Up The Form</p>
                    </div>
                  </div>
                </div>
                <!-- <div class="col-md-4 me-2">
                  <div class="card border-0">
                    <div class="card-body p-0">
                      <div>
                        <img
                          class="img-fluid rounded-2 product-img"
                          src="https://images.othoba.com/images/thumbs/0551780_dairy_440.jpeg"
                          alt=""
                        />
                      </div>
                      <div
                        class="d-flex justify-content-between px-4 py-3 align-items-center product-content-tem2 bg-white"
                      >
                        <h6 class="special-font mb-0">
                          Milk Powder
                        </h6>
                        <h6 class="special-font mb-0">$50</h6>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-4 me-2">
                  <div class="card border-0">
                    <div class="card-body p-0">
                      <div>
                        <img
                          class="img-fluid rounded-2 product-img"
                          src="https://images-eu.ssl-images-amazon.com/images/G/31/img21/Grocery/GroceryNewLook/grocery_sbc_coffee_440x460.jpg"
                          alt=""
                        />
                      </div>
                      <div
                        class="d-flex justify-content-between px-4 py-3 align-items-center product-content-tem2 bg-white"
                      >
                        <h6 class="special-font mb-0">Coffe Jar</h6>
                        <h6 class="special-font mb-0">$50</h6>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-4 me-2">
                  <div class="card border-0">
                    <div class="card-body p-0">
                      <div>
                        <img
                          class="img-fluid rounded-2 product-img"
                          src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRrNnzUuAiT-4HHyEOQXIhAp2OeajcZ-54bDcSIBO2kz_WI9kUWWiJQ_V6zl9STtnu-Qg0&usqp=CAU"
                          alt=""
                        />
                      </div>
                      <div
                        class="d-flex justify-content-between px-4 py-3 align-items-center product-content-tem2 bg-white"
                      >
                        <h6 class="special-font mb-0">Oil Bottle</h6>
                        <h6 class="special-font mb-0">$50</h6>
                      </div>
                    </div>
                  </div>
                </div> -->
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
                  </div>
                </div>
              </div>
              <div class="row pt-3">
                <div class="col-lg-12">
                  <div class="galery-slide">
                    <div>
                      <img
                        class="w-100 img-fluid rounded-3"
                        src="https://www.shutterbug.com/images/0616gallery07.jpg"
                        alt=""
                      />
                    </div>
                    <div>
                      <img
                        class="w-100 img-fluid rounded-3"
                        src="https://www.shutterbug.com/images/0616gallery07.jpg"
                        alt=""
                      />
                    </div>
                    <div>
                      <img
                        class="w-100 img-fluid rounded-3"
                        src="https://www.shutterbug.com/images/0616gallery07.jpg"
                        alt=""
                      />
                    </div>
                    <div>
                      <img
                        class="w-100 img-fluid rounded-3"
                        src="https://www.shutterbug.com/images/0616gallery07.jpg"
                        alt=""
                      />
                    </div>
                    <div>
                      <img
                        class="w-100 img-fluid rounded-3"
                        src="https://www.shutterbug.com/images/0616gallery07.jpg"
                        alt=""
                      />
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
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-10 col-offset-md-1 mx-auto">
                  <div class="testimonial-slide">
                    <div class="card p-0 bg-white border-0 p-0 mt-5">
                      <div class="card-body rounded-0 border-0 d-flex">
                        <div class="row align-items-center">
                          <div class="col-sm-4">
                            <div class="d-flex justify-content-center">
                              <img
                                class="img-fluid rounded-3"
                                width="100px"
                                height="100px"
                                style="object-fit: fill"
                                src="https://images.ctfassets.net/h6goo9gw1hh6/2sNZtFAWOdP1lmQ33VwRN3/24e953b920a9cd0ff2e1d587742a2472/1-intro-photo-final.jpg?w=1200&h=992&fl=progressive&q=70&fm=jpg"
                                alt=""
                              />
                            </div>
                            <h4 class="special-font text-center pt-3">
                              Russel
                            </h4>
                            <div class="d-flex justify-content-center">
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
                          <div class="col-sm-8">
                            <div>
                              <p class="mb-0 text-justify">
                                Lorem ipsum dolor, sit amet consectetur
                                adipisicing elit. Voluptatibus expedita ratione
                                perferendis laboriosam fuga rerum adipisci,
                                harum molestias culpa dicta.
                              </p>
                            </div>
                          </div>
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
                  </div>
                </div>
              </div>
              <div class="row pt-3">
                <div class="col-md-12">
                  <div class="w-50 mx-auto">
                    <img
                      class="img-fluid"
                      style="
                        border-top-left-radius: 8px;
                        border-top-right-radius: 8px;
                      "
                      src="https://www.gipper.com/hs-fs/hubfs/Imported_Blog_Media/6375e3_33ef90f5a9b74483b67eb2cb2f5e56b1~mv2.png"
                      alt=""
                    />
                    <div>
                      <a
                        href=""
                        class="btn btn-dark rounded-0 w-100 border-2 border-dark"
                        >Download QR</a
                      >
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
                  </div>
                </div>
              </div>
              <div class="row pt-4">
                <div class="co-md-12">
                  <form action="" method="post">
                    <div class="row px-5">
                      <div class="col-sm-6 mb-3">
                        <input
                          type="text"
                          name=""
                          class="form-control form-control-sm rounded-0 rounded-1 p-2"
                          placeholder="Enter Your Names"
                        />
                      </div>
                      <div class="col-sm-6 mb-3">
                        <input
                          type="email"
                          name=""
                          class="form-control form-control-sm rounded-0 rounded-1 p-2"
                          placeholder="Enter Your Email"
                        />
                      </div>
                      <div class="col-sm-12 mb-3">
                        <input
                          type="text"
                          name=""
                          class="form-control form-control-sm rounded-0 rounded-1 p-2"
                          placeholder="Enter Your Subject"
                        />
                      </div>
                      <div class="col-sm-12 mb-3">
                        <input
                          type="text"
                          name=""
                          class="form-control form-control-sm rounded-0 rounded-1 p-2"
                          placeholder="Enter Your Phone"
                        />
                      </div>
                      <div class="col-sm-12 mb-3">
                        <textarea
                          name=""
                          class="form-control form-control-sm rounded-0 rounded-1 p-2"
                          id=""
                          rows="5"
                        ></textarea>
                      </div>
                      <div class="col-lg-12 w-75 mx-auto px-2">
                        <div class="d-flex justify-content-center">
                          <button
                            type="submit"
                            class="btn company-btn-tem2 rounded-0 mb-2"
                          >
                            Send Message
                            <i
                              class="fa-solid fa-paper-plane"
                              style="color: var(--template-two-color-primary)"
                            ></i>
                          </button>
                        </div>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
              <div class="row py-5 pb-0">
                <div class="col-lg-12">
                  <div class="text-center">
                    <h1 class="special-font text-white">Share VCard</h1>
                  </div>
                </div>
              </div>
              <div class="row align-items-center">
                <div class="col-sm-6 offse-sm-3 mx-auto">
                  <div>
                    <img
                      class="img-fluid"
                      src="https://i.ibb.co/44x9nc9/handrising.png"
                      alt=""
                    />
                  </div>
                  <div class="d-flex align-items-center justify-content-center">
                    <button
                      type="submit"
                      class="btn company-btn-tem2 rounded-0 mb-2 p-3"
                    >
                      <i
                        class="fa-solid fa-share-nodes"
                        style="color: var(--template-two-color-primary)"
                      ></i>
                      Share This Vcard
                    </button>
                  </div>
                </div>
              </div>
            </div>
          </section>
        </div>
        <div class="footer-nav-area-tem2" id="footerNav">
          <div class="container px-0">
            <!-- Footer Content -->
            <div class="footer-nav-tem2 position-relative">
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
      <!-- On Page Load Show Modal -->
      <!-- Modal -->
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
            <div class="modal-header bg-dark rounded-0 text-white">
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
            </div>
          </div>
        </div>
      </div>

      <!-- On Page Load Show Modal End -->
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
          speed: 500, // Animation speed in milliseconds
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
        $(".galery-slide").slick({
          infinite: true,
          speed: 500,
          slidesToShow: 1,
          slidesToScroll: 1,
          autoplay: true,
          autoplaySpeed: 2000,
          arrows: false,
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

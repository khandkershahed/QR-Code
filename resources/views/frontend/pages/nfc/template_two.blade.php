<x-admin-guest-layout  :title="'{{ $nfc_card->nfcData->first_name }} {{ $nfc_card->nfcData->last_name }}'">
    @include('frontend.pages.nfc.style')
    <section>
        <div class="container">
            <div class="row">
              <div
                class="col-lg-12 d-flex justify-content-center align-items-center px-0"
              >
                <div class="nfc-mobile-frame-two">
                  <div class="card p-0 border-0 shadow-none tem-two-scroll">
                    <div class="card-header p-0 border-0 border-0">
                      <div class="nfc-two-cover-img-box">
                        <div
                          class="nfc-two-cover-img"
                          style="
                            background-image: url(https://mir-s3-cdn-cf.behance.net/project_modules/max_1200/8a6fd685408335.5d7a95b718a67.jpg);
                          "
                        ></div>
                      </div>
                    </div>
                    <div class="card-body p-0 tem-one-about-content">
                      <div class="d-flex justify-content-center">
                        <div
                          class="tem-two-profile d-flex justify-content-around"
                        >
                          <div class="p-3 text-center">
                            <div>
                              <img
                                width="80px"
                                height="80px"
                                style="object-fit: cover; border-radius: 50px"
                                src="https://www.shutterstock.com/image-photo/head-shot-portrait-close-smiling-600nw-1714666150.jpg"
                                alt=""
                              />
                            </div>
                            <div>
                              <h1 class="tem-two-name">Sazeduzzaman Saju</h1>
                              <h6 class="tem-two-designation fw-bold">
                                Frontend Developer
                              </h6>
                            </div>
                            <!-- contact -->
                            <div class="text-center">
                              <small class="tem-two-address"
                                >Ulica Zvonka Brkića 58 ,</small
                              >
                              <small class="tem-two-address">Rab</small>
                              <small class="tem-two-address">Croatia</small>
                              <br />
                              <small class="tem-two-address"
                                >+385 91 561 0409</small
                              >
                              <div
                                class="tem-two-social-icons mt-3 d-flex justify-content-center"
                              >
                                <a href="#" class="fa fa-facebook"></a>
                                <a href="#" class="fa fa-instagram"></a>
                                <a href="#" class="fa fa-youtube"></a>
                                <a href="#" class="fa fa-google"></a>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <!-- BIo -->
                      <div class="tem-two-bio-box px-3 pt-4">
                        <h6 class="tem-two-bio-title">BIO</h6>
                        <p>
                          Book enthusiast, nature lover, avid learner, coffee
                          addict, aspiring writer, music aficionado, travel
                          enthusiast, optimistic dreamer.
                        </p>
                      </div>
                      <!-- Service -->
                      <div class="tem-two-service-box px-3 py-4">
                        <h6 class="tem-two-service-title">Service</h6>
                        <p>
                          Professional, reliable service provider committed to
                          exceeding expectations with quality, efficiency, and
                          personalized care for every client's needs.
                        </p>
                        <div class="row g-x-1">
                          <div class="card col-6 p-0 border-0 rounded-0">
                            <div class="card-header p-0 border-0">
                              <h6
                                class="text-center mb-0 p-2 tem-one-services-title"
                              >
                                WEB DEVELOPMENT
                              </h6>
                            </div>
                            <div class="card-body p-0">
                              <div>
                                <a href="">
                                  <img
                                    style="
                                      width: 100%;
                                      height: 100%;
                                      background-size: cover;
                                      object-fit: cover;
                                    "
                                    src="https://img.freepik.com/free-vector/website-development-banner_33099-1687.jpg"
                                    alt="Slide 1"
                                  />
                                </a>
                              </div>
                            </div>
                          </div>
                          <div class="card col-6 p-0 border-0 rounded-0">
                            <div class="card-header p-0 border-0">
                              <h6
                                class="text-center mb-0 p-2 tem-one-services-title"
                              >
                                GRAPHIC DESIGN
                              </h6>
                            </div>
                            <div class="card-body p-0">
                              <div>
                                <a href="">
                                  <img
                                    style="
                                      width: 100%;
                                      height: 100%;
                                      background-size: cover;
                                      object-fit: cover;
                                    "
                                    src="https://media.geeksforgeeks.org/wp-content/uploads/20240227164613/GRAPHIC-DESIGN-BANNER-copy.webp"
                                    alt="Slide 2"
                                  />
                                </a>
                              </div>
                            </div>
                          </div>
                          <!-- Add more divs with images for additional slides -->
                        </div>
                      </div>
                      <!-- Service -->
                      <div class="tem-two-bio-box px-3 pt-4">
                        <h6 class="tem-two-bio-title">Company</h6>
                        <div class="d-flex">
                          <div class="tem-two-about-first">
                            <p class="fw-bold mb-0">Ngen It LTD</p>
                            <p class="mb-0">
                              <span>257/A, San-fca</span>
                              <br />
                              <span>Calefornia,USA</span>
                            </p>
                            <p>+03 58685125</p>
                          </div>
                          <div class="tem-two-about-secontd">
                            <p class="fw-bold mb-0">About</p>
                            <p>
                              Passionate team dedicated to excellence, creativity,
                              and customer satisfaction.
                            </p>
                          </div>
                        </div>
                      </div>
                      <!-- Service -->
                      <div class="tem-two-service-box px-3 py-4">
                        <h6 class="tem-two-service-title">Contact</h6>
                        <p class="mb-0">
                          @: szamansaju@gmail.com
                          <small class="fw-bold">(Work)</small>
                        </p>
                        <p class="mb-0">
                          p: +385 91 561 0409
                          <small class="fw-bold">(Personal)</small>
                        </p>
                        <div class="pt-4">
                          <form action="" method="post">
                            <div class="row">
                              <div class="col mb-2">
                                <div>
                                  <small for="client_name"
                                    >Name
                                    <span class="text-danger">*</span></small
                                  >
                                  <input
                                    type="text"
                                    name="client_name"
                                    required
                                    class="form-control form-control-sm"
                                    id=""
                                  />
                                </div>
                              </div>
                              <div class="col mb-2">
                                <div>
                                  <small for="client_email"
                                    >Email
                                    <span class="text-danger">*</span></small
                                  >
                                  <input
                                    type="text"
                                    name="client_email"
                                    required
                                    class="form-control form-control-sm"
                                    id=""
                                  />
                                </div>
                              </div>
                            </div>
                            <div class="row">
                              <div class="col mb-2">
                                <div>
                                  <small for="client_name">Phone</small>
                                  <input
                                    type="text"
                                    name="client_phone"
                                    class="form-control form-control-sm"
                                    id=""
                                  />
                                </div>
                              </div>
                              <div class="col mb-2">
                                <div>
                                  <small for="headline">Headline</small>
                                  <input
                                    type="text"
                                    name="headline"
                                    class="form-control form-control-sm"
                                    id=""
                                  />
                                </div>
                              </div>
                            </div>
                            <div class="row">
                              <div class="col mb-2">
                                <div>
                                  <small for="client_message">Message</small>
                                  <br />
                                  <textarea
                                    name="client_message"
                                    id=""
                                    class="form-control"
                                    rows="3"
                                  ></textarea>
                                </div>
                              </div>
                            </div>
                            <div class="row">
                              <div class="col mb-2 text-center">
                                <button
                                  type="submit"
                                  class="btn btn-danger btn-sm mt-2"
                                >
                                  Submit
                                </button>
                              </div>
                            </div>
                          </form>
                        </div>
                        <div>
                          <h6 class="tem-two-bio-title text-white pt-5">
                            Scan Me
                          </h6>
                          <div class="d-flex justify-content-center">
                            <img
                              class=""
                              width="150px"
                              src="https://cdn.britannica.com/17/155017-050-9AC96FC8/Example-QR-code.jpg"
                              alt=""
                            />
                          </div>
                        </div>
                        <div class="sticky-bottom mt-5">
                          <button class="btn-info btn w-100 text-white nfc_contact_btn">
                            Connect Now
                          </button>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
    </section>
</x-admin-guest-layout>

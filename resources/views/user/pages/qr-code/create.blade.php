<x-app-layout :title="'QR Code Generate'">
    <div class="container-fluid">
        <div class="row align-items-center">
            <div class="col-lg-10">
                <div class="bg-white">
                    <ul class="nav nav-tabs qr-code-navs border-0" id="myTab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link border-0 rounded-0" id="selectType-tab" data-bs-toggle="tab"
                                data-bs-target="#selectType" type="button" role="tab" aria-controls="selectType"
                                aria-selected="true">
                                1. Select Typee
                            </button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link border-0 rounded-0" id="setup-tab" data-bs-toggle="tab"
                                data-bs-target="#setup" type="button" role="tab" aria-controls="setup"
                                aria-selected="false">
                                2. Setup
                            </button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link  active border-0 rounded-0" id="customize-tab" data-bs-toggle="tab"
                                data-bs-target="#customize" type="button" role="tab" aria-controls="customize"
                                aria-selected="false">
                                3. Customize
                            </button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link  border-0 rounded-0" id="done-tab" data-bs-toggle="tab"
                                data-bs-target="#done" type="button" role="tab" aria-controls="done"
                                aria-selected="false">
                                4. Done
                            </button>
                        </li>
                    </ul>
                    <div class="tab-content p-3">
                        <div class="tab-pane  pt-4" id="selectType" role="tabpanel"
                            aria-labelledby="selectType-tab">
                            <div class="pt-5">
                                <h2>Create a Dynamic QR Code</h2>
                                <p>Modify content as needed, even after going live.</p>
                            </div>
                            <div>
                                <fieldset class="checkbox-group">
                                    <div class="checkbox">
                                        <label class="checkbox-wrapper">
                                            <input type="checkbox" class="checkbox-input" />
                                            <span class="checkbox-tile">
                                                <span class="checkbox-label">
                                                    <div class="d-flex align-items-center">
                                                        <div
                                                            style="width: 30% ; padding: 30px 0px;
                                                    background: #f5f8fa;">
                                                            <img class="img-fluid"
                                                                src="https://dashboard.uniqode.com/assets/img/dynamic-qr/website.svg"
                                                                alt="">
                                                        </div>
                                                        <div class="text-start ps-4" style="width: 70%">
                                                            <h3 class="mb-0">Website</h3>
                                                            <p class="mb-0">Link to an existing web URL and bring
                                                                traffic
                                                                online</p>
                                                        </div>
                                                    </div>
                                                </span>
                                            </span>
                                        </label>
                                    </div>
                                    <div class="checkbox">
                                        <label class="checkbox-wrapper">
                                            <input type="checkbox" class="checkbox-input" />
                                            <span class="checkbox-tile">
                                                <span class="checkbox-label">
                                                    <div class="d-flex align-items-center">
                                                        <div
                                                            style="width: 30% ; padding: 30px 0px;
                                                    background: #f5f8fa;">
                                                            <img class="img-fluid"
                                                                src="https://dashboard.uniqode.com/assets/img/dynamic-qr/website.svg"
                                                                alt="">
                                                        </div>
                                                        <div class="text-start ps-4" style="width: 70%">
                                                            <h3 class="mb-0">Website</h3>
                                                            <p class="mb-0">Link to an existing web URL and bring
                                                                traffic
                                                                online</p>
                                                        </div>
                                                    </div>
                                                </span>
                                            </span>
                                        </label>
                                    </div>
                                    <div class="checkbox">
                                        <label class="checkbox-wrapper">
                                            <input type="checkbox" class="checkbox-input" />
                                            <span class="checkbox-tile">
                                                <span class="checkbox-label">
                                                    <div class="d-flex align-items-center">
                                                        <div
                                                            style="width: 30% ; padding: 30px 0px;
                                                    background: #f5f8fa;">
                                                            <img class="img-fluid"
                                                                src="https://dashboard.uniqode.com/assets/img/dynamic-qr/website.svg"
                                                                alt="">
                                                        </div>
                                                        <div class="text-start ps-4" style="width: 70%">
                                                            <h3 class="mb-0">Website</h3>
                                                            <p class="mb-0">Link to an existing web URL and bring
                                                                traffic
                                                                online</p>
                                                        </div>
                                                    </div>
                                                </span>
                                            </span>
                                        </label>
                                    </div>
                                    <div class="checkbox">
                                        <label class="checkbox-wrapper">
                                            <input type="checkbox" class="checkbox-input" />
                                            <span class="checkbox-tile">
                                                <span class="checkbox-label">
                                                    <div class="d-flex align-items-center">
                                                        <div
                                                            style="width: 30% ; padding: 30px 0px;
                                                    background: #f5f8fa;">
                                                            <img class="img-fluid"
                                                                src="https://dashboard.uniqode.com/assets/img/dynamic-qr/website.svg"
                                                                alt="">
                                                        </div>
                                                        <div class="text-start ps-4" style="width: 70%">
                                                            <h3 class="mb-0">Website</h3>
                                                            <p class="mb-0">Link to an existing web URL and bring
                                                                traffic
                                                                online</p>
                                                        </div>
                                                    </div>
                                                </span>
                                            </span>
                                        </label>
                                    </div>
                                    <div class="checkbox">
                                        <label class="checkbox-wrapper">
                                            <input type="checkbox" class="checkbox-input" />
                                            <span class="checkbox-tile">
                                                <span class="checkbox-label">
                                                    <div class="d-flex align-items-center">
                                                        <div
                                                            style="width: 30% ; padding: 30px 0px;
                                                    background: #f5f8fa;">
                                                            <img class="img-fluid"
                                                                src="https://dashboard.uniqode.com/assets/img/dynamic-qr/website.svg"
                                                                alt="">
                                                        </div>
                                                        <div class="text-start ps-4" style="width: 70%">
                                                            <h3 class="mb-0">Website</h3>
                                                            <p class="mb-0">Link to an existing web URL and bring
                                                                traffic
                                                                online</p>
                                                        </div>
                                                    </div>
                                                </span>
                                            </span>
                                        </label>
                                    </div>
                                </fieldset>
                            </div>
                        </div>
                        <div class="tab-pane pt-4" id="setup" role="tabpanel" aria-labelledby="setup-tab">
                            <div class="pt-5">
                                <h2>Website URL</h2>
                                <p>Paste a URL below to link with your QR code</p>
                            </div>
                            <div class="pb-4">
                                <label for="">Enter URL</label>
                                <input type="text" name="" class="form-control form-control-sm"
                                    placeholder="http://127.0.0.1:8000/user/qr-code/create" id="">
                            </div>
                            <div class="d-flex justify-content-start pb-5">
                                <a href="#" class="btn btn-light btn-primary">Next</a>
                            </div>
                        </div>
                        <div class="tab-pane pt-4 active" id="customize" role="tabpanel" aria-labelledby="customize-tab">
                            <div class="pt-5">
                                <h2>Design your QR Code</h2>
                                <p>Customize the design of your QR code with colors, logos and shapes.</p>
                            </div>
                            {{-- Main Form For Qr --}}
                            <div class="card card-flush h-xl-100">
                                <div class="card-header pt-5">
                                    <h3 class="card-title align-items-start flex-column">
                                        <span class="card-label fw-bold text-gray-800">Choose QR Code Structure!</span>
                                    </h3>
                                </div>

                                <div class="card-body pt-1">
                                    <ul class="nav nav-pills nav-pills-custom mb-3" role="tablist">
                                        <li class="nav-item mb-3 me-3 me-lg-6" role="presentation">
                                            <a class="nav-link btn btn-outline btn-flex btn-color-muted btn-active-color-primary flex-column overflow-hidden w-100px h-85px p-0
                                                    active"
                                                id="kt_stats_widget_16_tab_link_1" data-bs-toggle="pill"
                                                href="#kt_stats_widget_16_tab_1" aria-selected="true" role="tab">
                                                <div class="nav-icon mb-3 qr-design-chose">
                                                    <img src="https://dashboard.uniqode.com/assets/logo/qr-customize/Template.svg"
                                                        alt="">
                                                </div>
                                                <span class="nav-text text-gray-800 fw-bold fs-6 lh-1">Templates</span>
                                                <span
                                                    class="bullet-custom position-absolute bottom-0 w-100 h-4px bg-primary"></span>
                                            </a>
                                        </li>
                                        <li class="nav-item mb-3 me-3 me-lg-6" role="presentation">
                                            <a class="nav-link btn btn-outline btn-flex btn-color-muted btn-active-color-primary flex-column overflow-hidden w-100px h-85px p-0
                                                    "
                                                id="kt_stats_widget_16_tab_link_2" data-bs-toggle="pill"
                                                href="#kt_stats_widget_16_tab_2" aria-selected="false" tabindex="-1"
                                                role="tab">
                                                <div class="nav-icon mb-3 qr-design-chose">
                                                    <img src="https://dashboard.uniqode.com/assets/logo/qr-customize/Logo.svg"
                                                        alt="">
                                                </div>

                                                <span class="nav-text text-gray-800 fw-bold fs-6 lh-1"> Logo </span>
                                                <span
                                                    class="bullet-custom position-absolute bottom-0 w-100 h-4px bg-primary"></span>
                                            </a>
                                        </li>
                                        <li class="nav-item mb-3 me-3 me-lg-6" role="presentation">
                                            <a class="nav-link btn btn-outline btn-flex btn-color-muted btn-active-color-primary flex-column overflow-hidden w-100px h-85px p-0
                                                    "
                                                id="kt_stats_widget_16_tab_link_3" data-bs-toggle="pill"
                                                href="#kt_stats_widget_16_tab_3" aria-selected="false" tabindex="-1"
                                                role="tab">
                                                <div class="nav-icon mb-3 qr-design-chose">
                                                    <img src="https://dashboard.uniqode.com/assets/logo/qr-customize/Eye.svg"
                                                        alt="">
                                                </div>

                                                <span class="nav-text text-gray-800 fw-bold fs-6 lh-1"> Eyes </span>
                                                <span
                                                    class="bullet-custom position-absolute bottom-0 w-100 h-4px bg-primary"></span>
                                            </a>
                                        </li>
                                        <li class="nav-item mb-3 me-3 me-lg-6" role="presentation">
                                            <a class="nav-link btn btn-outline btn-flex btn-color-muted btn-active-color-primary flex-column overflow-hidden w-100px h-85px p-0
                                                    "
                                                id="kt_stats_widget_16_tab_link_4" data-bs-toggle="pill"
                                                href="#kt_stats_widget_16_tab_4" aria-selected="false" tabindex="-1"
                                                role="tab">
                                                <div class="nav-icon mb-3 qr-design-chose">
                                                    <img src="https://dashboard.uniqode.com/assets/logo/qr-customize/Pattern.svg"
                                                        alt="">
                                                </div>

                                                <span class="nav-text text-gray-800 fw-bold fs-6 lh-1">Pattern </span>
                                                <span
                                                    class="bullet-custom position-absolute bottom-0 w-100 h-4px bg-primary"></span>
                                            </a>
                                        </li>
                                        <li class="nav-item mb-3 me-3 me-lg-6" role="presentation">
                                            <a class="nav-link btn btn-outline btn-flex btn-color-muted btn-active-color-primary flex-column overflow-hidden w-100px h-85px p-0
                                                    "
                                                id="kt_stats_widget_16_tab_link_5" data-bs-toggle="pill"
                                                href="#kt_stats_widget_16_tab_5" aria-selected="false" tabindex="-1"
                                                role="tab">
                                                <div class="nav-icon mb-3 qr-design-chose">
                                                    <img src="https://dashboard.uniqode.com/assets/logo/qr-customize/Background.svg"
                                                        alt="">
                                                </div>

                                                <span class="nav-text text-gray-800 fw-bold fs-6 lh-1"> Background
                                                </span>
                                                <span
                                                    class="bullet-custom position-absolute bottom-0 w-100 h-4px bg-primary"></span>
                                            </a>
                                        </li>

                                    </ul>

                                    <div class="tab-content">
                                        <div class="tab-pane fade show active" id="kt_stats_widget_16_tab_1"
                                            role="tabpanel" aria-labelledby="kt_stats_widget_16_tab_link_1">
                                            <div>
                                                <h4>SELECT A TEMPLATE</h4>
                                            </div>
                                            <div>
                                                {{-- Templates --}}
                                               <div class="card">
                                                <div class="card-body" style="width: 90%;overflow: auto;">
                                                <div style="width:170px; display: flex; gap: 20px;">
                                                    <label for="radio-card-1" class="radio-card">
                                                        <input type="radio" name="radio-card" id="radio-card-1"
                                                            checked />
                                                        <div class="card-content-wrapper">
                                                            <span class="check-icon"></span>
                                                            <div class="card-content">
                                                                <img width="4px" style="padding-top: 5px;"
                                                                    src="https://d1bqobzsowu5wu.cloudfront.net/public/qr-code-templates/Default/aHR0cHM6Ly9xcmNvZGVzLnByby9zY2FuL3A/dGVtcGxhdGU9dHJ1ZQ%3D%3D-512.svg?16432.09999999404"
                                                                    alt="" />
                                                            </div>
                                                        </div>
                                                    </label>
                                                    <!-- /.radio-card -->

                                                    <label for="radio-card-2" class="radio-card">
                                                        <input type="radio" name="radio-card" id="radio-card-2" />
                                                        <div class="card-content-wrapper">
                                                            <span class="check-icon"></span>
                                                            <div class="card-content">
                                                                <img width="4px" style="padding-top: 5px;"
                                                                    src="https://beaconstac-content.s3.amazonaws.com/undefined/qr-codes/Classic%20Swirl/svg/aHR0cHM6Ly9xcmNvZGVzLnByby9zY2FuL3A/dGVtcGxhdGU9dHJ1ZQ%3D%3D-512.svg?16432.09999999404"
                                                                    alt="" />
                                                            </div>
                                                        </div>
                                                    </label>
                                                    <!-- /.radio-card -->
                                                    <label for="radio-card-3" class="radio-card">
                                                        <input type="radio" name="radio-card" id="radio-card-3" />
                                                        <div class="card-content-wrapper">
                                                            <span class="check-icon"></span>
                                                            <div class="card-content">
                                                                <img width="4px" style="padding-top: 5px;"
                                                                    src="https://d1bqobzsowu5wu.cloudfront.net/public/qr-code-templates/Gradient/aHR0cHM6Ly9xcmNvZGVzLnByby9zY2FuL3A/dGVtcGxhdGU9dHJ1ZQ%3D%3D-512.svg?16432.09999999404"
                                                                    alt="" />
                                                            </div>
                                                        </div>
                                                    </label>
                                                    <!-- /.radio-card -->
                                                    <label for="radio-card-4" class="radio-card">
                                                        <input type="radio" name="radio-card" id="radio-card-4" />
                                                        <div class="card-content-wrapper">
                                                            <span class="check-icon"></span>
                                                            <div class="card-content">
                                                                <img width="4px" style="padding-top: 5px;"
                                                                    src="https://beaconstac-content.s3.amazonaws.com/undefined/qr-codes/Blue%20Dream/svg/aHR0cHM6Ly9xcmNvZGVzLnByby9zY2FuL3A/dGVtcGxhdGU9dHJ1ZQ%3D%3D-512.svg?16432.09999999404"
                                                                    alt="" />
                                                            </div>
                                                        </div>
                                                    </label>
                                                    <!-- /.radio-card -->
                                                    <label for="radio-card-5" class="radio-card">
                                                        <input type="radio" name="radio-card" id="radio-card-5" />
                                                        <div class="card-content-wrapper">
                                                            <span class="check-icon"></span>
                                                            <div class="card-content">
                                                                <img width="4px" style="padding-top: 5px;"
                                                                    src="https://beaconstac-content.s3.amazonaws.com/undefined/qr-codes/Retro%20Funk/svg/aHR0cHM6Ly9xcmNvZGVzLnByby9zY2FuL3A/dGVtcGxhdGU9dHJ1ZQ%3D%3D-512.svg?16432.09999999404"
                                                                    alt="" />
                                                            </div>
                                                        </div>
                                                    </label>

                                                    <!-- /.radio-card -->
                                                    <label for="radio-card-7" class="radio-card">
                                                        <input type="radio" name="radio-card" id="radio-card-7" />
                                                        <div class="card-content-wrapper">
                                                            <span class="check-icon"></span>
                                                            <div class="card-content">
                                                                <img width="4px" style="padding-top: 5px;"
                                                                    src="https://beaconstac-content.s3.amazonaws.com/undefined/qr-codes/Nature%20Earth/svg/aHR0cHM6Ly9xcmNvZGVzLnByby9zY2FuL3A/dGVtcGxhdGU9dHJ1ZQ%3D%3D-512.svg?16432.09999999404"
                                                                    alt="" />
                                                            </div>
                                                        </div>
                                                    </label>
                                                    <!-- /.radio-card -->
                                                    <label for="radio-card-8" class="radio-card">
                                                        <input type="radio" name="radio-card" id="radio-card-8" />
                                                        <div class="card-content-wrapper">
                                                            <span class="check-icon"></span>
                                                            <div class="card-content">
                                                                <img width="4px" style="padding-top: 5px;"
                                                                    src="https://beaconstac-content.s3.amazonaws.com/undefined/qr-codes/Sunny%20Day/svg/aHR0cHM6Ly9xcmNvZGVzLnByby9zY2FuL3A/dGVtcGxhdGU9dHJ1ZQ%3D%3D-512.svg?16432.09999999404"
                                                                    alt="" />
                                                            </div>
                                                        </div>
                                                    </label>
                                                    <!-- /.radio-card -->
                                                    <label for="radio-card-10" class="radio-card">
                                                        <input type="radio" name="radio-card" id="radio-card-10" />
                                                        <div class="card-content-wrapper">
                                                            <span class="check-icon"></span>
                                                            <div class="card-content">
                                                                <img width="4px" style="padding-top: 5px;"
                                                                    src="https://beaconstac-content.s3.amazonaws.com/undefined/qr-codes/Dark%20Mode/svg/aHR0cHM6Ly9xcmNvZGVzLnByby9zY2FuL3A/dGVtcGxhdGU9dHJ1ZQ%3D%3D-512.svg?16432.09999999404"
                                                                    alt="" />
                                                            </div>
                                                        </div>
                                                    </label>
                                                    <!-- /.radio-card -->
                                                    <label for="radio-card-6" class="radio-card">
                                                        <input type="radio" name="radio-card" id="radio-card-6" />
                                                        <div class="card-content-wrapper">
                                                            <span class="check-icon"></span>
                                                            <div class="card-content">
                                                                <img width="4px" style="padding-top: 5px;"
                                                                    src="https://beaconstac-content.s3.amazonaws.com/undefined/qr-codes/Classic%20Frame/svg/aHR0cHM6Ly9xcmNvZGVzLnByby9zY2FuL3A/dGVtcGxhdGU9dHJ1ZQ%3D%3D-512.svg?16432.09999999404"
                                                                    alt="" />
                                                            </div>
                                                        </div>
                                                    </label>
                                                    <!-- /.radio-card -->
                                                    <label for="radio-card-9" class="radio-card">
                                                        <input type="radio" name="radio-card" id="radio-card-9" />
                                                        <div class="card-content-wrapper">
                                                            <span class="check-icon"></span>
                                                            <div class="card-content">
                                                                <img width="4px" style="padding-top: 5px;"
                                                                    src="https://beaconstac-content.s3.amazonaws.com/undefined/qr-codes/Ocean%20Breeze/svg/aHR0cHM6Ly9xcmNvZGVzLnByby9zY2FuL3A/dGVtcGxhdGU9dHJ1ZQ%3D%3D-512.svg?16432.09999999404"
                                                                    alt="" />
                                                            </div>
                                                        </div>
                                                    </label>
                                                    <!-- /.radio-card -->
                                                    <label for="radio-card-11" class="radio-card">
                                                        <input type="radio" name="radio-card" id="radio-card-11" />
                                                        <div class="card-content-wrapper">
                                                            <span class="check-icon"></span>
                                                            <div class="card-content">
                                                                <img width="140px" style="padding-top: 5px;"
                                                                    src="https://beaconstac-content.s3.amazonaws.com/undefined/qr-codes/Edgy%20Graffiti/svg/aHR0cHM6Ly9xcmNvZGVzLnByby9zY2FuL3A/dGVtcGxhdGU9dHJ1ZQ%3D%3D-512.svg?16432.09999999404"
                                                                    alt="" />
                                                            </div>
                                                        </div>
                                                    </label>
                                                    <!-- /.radio-card -->
                                                </div>
                                                </div>
                                               </div>
                                            </div>
                                        </div>

                                        <div class="tab-pane fade " id="kt_stats_widget_16_tab_2" role="tabpanel"
                                            aria-labelledby="kt_stats_widget_16_tab_link_2">
                                            <div>
                                                <div class="pt-5 text-start mt-4">
                                                    <h2>SELECT A LOGO</h2>
                                                    <p>This will appear at the center of your QR code.</p>
                                                </div>
                                                {{-- Logos Uploade --}}
                                                <div class="dropzone dz-clickable w-50"
                                                    id="kt_dropzonejs_example_1">
                                                    <div class="dz-message needsclick">
                                                        <i class="ki-duotone ki-file-up fs-3x text-primary"><span class="path1"></span><span class="path2"></span></i>
                                                        <!--begin::Info-->
                                                        <div class="ms-4">
                                                            <h3 class="fs-5 fw-bold text-gray-900 mb-1">Drop files here or click to upload.</h3>
                                                            <span class="fs-7 fw-semibold text-primary opacity-75">Upload up to 10 files</span>
                                                        </div>
                                                        <!--end::Info-->
                                                    </div>
                                                </div>
                                                <div class="mt-2"
                                                    style="display: flex;
                                                justify-content: start;
                                                width: 50%;">
                                                    <input type="number" name="" id=""
                                                        class="form-control form-control-solid"
                                                        placeholder="Enter Logo Size">
                                                </div>
                                                <p class="text-start pt-4 mb-0">Or Select From Our
                                                    Gallary</p>
                                                {{-- Logo From Our Gallary --}}
                                                <div class="pt-2 d-flex mx-auto justify-content-start">
                                                    <a href="#">
                                                        <img style="width: 45px;
                                                    border: 1px solid #DBDFE3;
                                                    border-radius: 4px;"
                                                        src="https://static.beaconstac.com/assets/img/qr-code-logos/app-store.svg">
                                                    </a>
                                                    <a href="#">
                                                        <img style="width: 45px;
                                                    border: 1px solid #DBDFE3;
                                                    border-radius: 4px;"
                                                        src="	https://static.beaconstac.com/assets/img/qr-code-logos/calender.svg">
                                                    </a>
                                                    <a href="#">
                                                        <img style="width: 45px;
                                                    border: 1px solid #DBDFE3;
                                                    border-radius: 4px;"
                                                        src="https://static.beaconstac.com/assets/img/qr-code-logos/email.svg">
                                                    </a>
                                                    <a href="#">
                                                        <img style="width: 45px;
                                                    border: 1px solid #DBDFE3;
                                                    border-radius: 4px;"
                                                        src="https://static.beaconstac.com/assets/img/qr-code-logos/facebook.svg">
                                                    </a>
                                                    <a href="#">
                                                        <img style="width: 45px;
                                                    border: 1px solid #DBDFE3;
                                                    border-radius: 4px;"
                                                        src="https://static.beaconstac.com/assets/img/qr-code-logos/gmail.svg">
                                                    </a>
                                                    <a href="#">
                                                        <img style="width: 45px;
                                                    border: 1px solid #DBDFE3;
                                                    border-radius: 4px;"
                                                        src="https://static.beaconstac.com/assets/img/qr-code-logos/google-bussiness.svg">
                                                    </a>
                                                    <a href="#">
                                                        <img style="width: 45px;
                                                    border: 1px solid #DBDFE3;
                                                    border-radius: 4px;"
                                                        src="https://static.beaconstac.com/assets/img/qr-code-logos/instagram.svg">
                                                    </a>
                                                    <a href="#">
                                                        <img style="width: 45px;
                                                    border: 1px solid #DBDFE3;
                                                    border-radius: 4px;"
                                                        src="https://static.beaconstac.com/assets/img/qr-code-logos/linkedin.svg">
                                                    </a>
                                                    <a href="#">
                                                        <img style="width: 45px;
                                                    border: 1px solid #DBDFE3;
                                                    border-radius: 4px;"
                                                        src="https://static.beaconstac.com/assets/img/qr-code-logos/mp3.svg">
                                                    </a>
                                                    <a href="#">
                                                        <img style="width: 45px;
                                                    border: 1px solid #DBDFE3;
                                                    border-radius: 4px;"
                                                        src="https://static.beaconstac.com/assets/img/qr-code-logos/pdf.svg">
                                                    </a>
                                                    <a href="#">
                                                        <img style="width: 45px;
                                                    border: 1px solid #DBDFE3;
                                                    border-radius: 4px;"
                                                        src="https://static.beaconstac.com/assets/img/qr-code-logos/phone-call.svg">
                                                    </a>
                                                    <a href="#">
                                                        <img style="width: 45px;
                                                    border: 1px solid #DBDFE3;
                                                    border-radius: 4px;"
                                                        src="https://static.beaconstac.com/assets/img/qr-code-logos/pintrest.svg">
                                                    </a>
                                                    <a href="#">
                                                        <img style="width: 45px;
                                                    border: 1px solid #DBDFE3;
                                                    border-radius: 4px;"
                                                        src="https://static.beaconstac.com/assets/img/qr-code-logos/play-store.svg">
                                                    </a>
                                                    <a href="#">
                                                        <img style="width: 45px;
                                                    border: 1px solid #DBDFE3;
                                                    border-radius: 4px;"
                                                        src="https://static.beaconstac.com/assets/img/qr-code-logos/ratings.png">
                                                    </a>
                                                    <a href="#">
                                                        <img style="width: 45px;
                                                    border: 1px solid #DBDFE3;
                                                    border-radius: 4px;"
                                                        src="https://static.beaconstac.com/assets/img/qr-code-logos/twitter.svg">
                                                    </a>
                                                    <a href="#">
                                                        <img style="width: 45px;
                                                    border: 1px solid #DBDFE3;
                                                    border-radius: 4px;"
                                                        src="https://static.beaconstac.com/assets/img/qr-code-logos/youtube.svg">
                                                    </a>
                                                    <a href="#">
                                                        <img style="width: 45px;
                                                    border: 1px solid #DBDFE3;
                                                    border-radius: 4px;"
                                                        src="https://static.beaconstac.com/assets/img/qr-code-logos/covid-logo-1.svg">
                                                    </a>
                                                    <a href="#">
                                                        <img style="width: 45px;
                                                    border: 1px solid #DBDFE3;
                                                    border-radius: 4px;"
                                                        src="https://static.beaconstac.com/assets/img/qr-code-logos/covid-logo-2.svg">
                                                    </a>
                                                    <a href="#">
                                                        <img style="width: 45px;
                                                    border: 1px solid #DBDFE3;
                                                    border-radius: 4px;"
                                                        src="https://static.beaconstac.com/assets/img/qr-code-logos/covid-logo-3.svg">
                                                    </a>
                                                    <a href="#">
                                                        <img style="width: 45px;
                                                    border: 1px solid #DBDFE3;
                                                    border-radius: 4px;"
                                                        src="https://static.beaconstac.com/assets/img/qr-code-logos/covid-logo-4.svg">
                                                    </a>
                                                    <a href="#">
                                                        <img style="width: 45px;
                                                    border: 1px solid #DBDFE3;
                                                    border-radius: 4px;"
                                                        src="https://static.beaconstac.com/assets/img/qr-code-logos/covid-logo-5.svg">
                                                    </a>
                                                    <a href="#">
                                                        <img style="width: 45px;
                                                    border: 1px solid #DBDFE3;
                                                    border-radius: 4px;"
                                                        src="https://static.beaconstac.com/assets/img/qr-code-logos/covid-logo-6.svg">
                                                    </a>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="tab-pane fade " id="kt_stats_widget_16_tab_3" role="tabpanel"
                                            aria-labelledby="kt_stats_widget_16_tab_link_3">
                                            <div class="pt-5 text-start mt-4">
                                                <h2>SELECT EYE-BALL</h2>
                                                <p>This will be the color and shape of your QR code's eye-balls</p>
                                            </div>
                                            <div class="d-flex">
                                                <input type="color" id="colorPicker" style="width: 56px;height: 45px;">
                                                <input type="text" id="colorCodeInput" class="form-control form-control-solid w-25" readonly>
                                            </div>
                                            <div class="d-flex">
                                                <label for="radio-card-2" class="radio-card me-4">
                                                    <input type="radio" name="radio-card" id="radio-card-2" />
                                                    <div class="card-content-wrapper">
                                                        <span class="check-icon"></span>
                                                        <div class="card-content 2">
                                                            <img width="140px" style="padding-top: 5px;"
                                                                src="https://static.beaconstac.com/assets/img/mobstac-awesome-qr/eye-balls/square.svg"
                                                                alt="" />
                                                        </div>
                                                    </div>
                                                </label>
                                                <label for="radio-card-2" class="radio-card me-4">
                                                    <input type="radio" name="radio-card" id="radio-card-2" />
                                                    <div class="card-content-wrapper">
                                                        <span class="check-icon"></span>
                                                        <div class="card-content 2">
                                                            <img width="140px" style="padding-top: 5px;"
                                                                src="https://static.beaconstac.com/assets/img/mobstac-awesome-qr/eye-balls/rounded.svg"
                                                                alt="" />
                                                        </div>
                                                    </div>
                                                </label>
                                                <label for="radio-card-2" class="radio-card me-4">
                                                    <input type="radio" name="radio-card" id="radio-card-2" />
                                                    <div class="card-content-wrapper">
                                                        <span class="check-icon"></span>
                                                        <div class="card-content 2">
                                                            <img width="140px" style="padding-top: 5px;"
                                                                src="https://static.beaconstac.com/assets/img/mobstac-awesome-qr/eye-balls/left-diamond.svg"
                                                                alt="" />
                                                        </div>
                                                    </div>
                                                </label>
                                                <label for="radio-card-2" class="radio-card me-4">
                                                    <input type="radio" name="radio-card" id="radio-card-2" />
                                                    <div class="card-content-wrapper">
                                                        <span class="check-icon"></span>
                                                        <div class="card-content 2">
                                                            <img width="140px" style="padding-top: 5px;"
                                                                src="https://static.beaconstac.com/assets/img/mobstac-awesome-qr/eye-balls/right-diamond.svg"
                                                                alt="" />
                                                        </div>
                                                    </div>
                                                </label>
                                                <label for="radio-card-2" class="radio-card me-4">
                                                    <input type="radio" name="radio-card" id="radio-card-2" />
                                                    <div class="card-content-wrapper">
                                                        <span class="check-icon"></span>
                                                        <div class="card-content 2">
                                                            <img width="140px" style="padding-top: 5px;"
                                                                src="https://static.beaconstac.com/assets/img/mobstac-awesome-qr/eye-balls/left-leaf.svg"
                                                                alt="" />
                                                        </div>
                                                    </div>
                                                </label>
                                                <label for="radio-card-2" class="radio-card me-4">
                                                    <input type="radio" name="radio-card" id="radio-card-2" />
                                                    <div class="card-content-wrapper">
                                                        <span class="check-icon"></span>
                                                        <div class="card-content 2">
                                                            <img width="140px" style="padding-top: 5px;"
                                                                src="https://static.beaconstac.com/assets/img/mobstac-awesome-qr/eye-balls/right-leaf.svg"
                                                                alt="" />
                                                        </div>
                                                    </div>
                                                </label>
                                            </div>
                                            <div class="pt-5 text-start mt-4">
                                                <h2>SELECT EYE-FRAME</h2>
                                                <p>This will be the color and shape of your QR code's eye-frames</p>
                                            </div>
                                            <div class="d-flex">
                                                <input type="text" id="colorCodeInput" class="form-control form-control-solid w-25" readonly>
                                                <input type="color" id="colorPicker" style="width: 56px;height: 45px;">
                                            </div>
                                            <div class="d-flex">
                                                <label for="radio-card-2" class="radio-card me-4">
                                                    <input type="radio" name="radio-card" id="radio-card-2" />
                                                    <div class="card-content-wrapper">
                                                        <span class="check-icon"></span>
                                                        <div class="card-content 2">
                                                            <img width="4px" style="padding-top: 5px;"
                                                                src="https://static.beaconstac.com/assets/img/mobstac-awesome-qr/eye-frames/square.svg"
                                                                alt="" />
                                                        </div>
                                                    </div>
                                                </label>
                                                <label for="radio-card-2" class="radio-card me-4">
                                                    <input type="radio" name="radio-card" id="radio-card-2" />
                                                    <div class="card-content-wrapper">
                                                        <span class="check-icon"></span>
                                                        <div class="card-content 2">
                                                            <img width="4px" style="padding-top: 5px;"
                                                                src="	https://static.beaconstac.com/assets/img/mobstac-awesome-qr/eye-frames/rounded.svg"
                                                                alt="" />
                                                        </div>
                                                    </div>
                                                </label>
                                                <label for="radio-card-2" class="radio-card me-4">
                                                    <input type="radio" name="radio-card" id="radio-card-2" />
                                                    <div class="card-content-wrapper">
                                                        <span class="check-icon"></span>
                                                        <div class="card-content 2">
                                                            <img width="4px" style="padding-top: 5px;"
                                                                src="https://static.beaconstac.com/assets/img/mobstac-awesome-qr/eye-frames/left-leaf.svg"
                                                                alt="" />
                                                        </div>
                                                    </div>
                                                </label>
                                                <label for="radio-card-2" class="radio-card me-4">
                                                    <input type="radio" name="radio-card" id="radio-card-2" />
                                                    <div class="card-content-wrapper">
                                                        <span class="check-icon"></span>
                                                        <div class="card-content 2">
                                                            <img width="4px" style="padding-top: 5px;"
                                                                src="https://static.beaconstac.com/assets/img/mobstac-awesome-qr/eye-balls/right-diamond.svg"
                                                                alt="" />
                                                        </div>
                                                    </div>
                                                </label>
                                                <label for="radio-card-2" class="radio-card me-4">
                                                    <input type="radio" name="radio-card" id="radio-card-2" />
                                                    <div class="card-content-wrapper">
                                                        <span class="check-icon"></span>
                                                        <div class="card-content 2">
                                                            <img width="4px" style="padding-top: 5px;"
                                                                src="https://static.beaconstac.com/assets/img/mobstac-awesome-qr/eye-balls/left-leaf.svg"
                                                                alt="" />
                                                        </div>
                                                    </div>
                                                </label>
                                                <label for="radio-card-2" class="radio-card me-4">
                                                    <input type="radio" name="radio-card" id="radio-card-2" />
                                                    <div class="card-content-wrapper">
                                                        <span class="check-icon"></span>
                                                        <div class="card-content 2">
                                                            <img width="4px" style="padding-top: 5px;"
                                                                src="https://static.beaconstac.com/assets/img/mobstac-awesome-qr/eye-balls/right-leaf.svg"
                                                                alt="" />
                                                        </div>
                                                    </div>
                                                </label>
                                                <label for="radio-card-2" class="radio-card me-4">
                                                    <input type="radio" name="radio-card" id="radio-card-2" />
                                                    <div class="card-content-wrapper">
                                                        <span class="check-icon"></span>
                                                        <div class="card-content 2">
                                                            <img width="4px" style="padding-top: 5px;"
                                                                src="	https://static.beaconstac.com/assets/img/mobstac-awesome-qr/eye-frames/right-leaf.svg"
                                                                alt="" />
                                                        </div>
                                                    </div>
                                                </label>
                                            </div>
                                        </div>

                                        <div class="tab-pane fade " id="kt_stats_widget_16_tab_4" role="tabpanel"
                                            aria-labelledby="kt_stats_widget_16_tab_link_4">
                                            asdasdasd
                                        </div>

                                        <div class="tab-pane fade " id="kt_stats_widget_16_tab_5" role="tabpanel"
                                            aria-labelledby="kt_stats_widget_16_tab_link_5">
                                            asdasdasd
                                        </div>
                                    </div>
                                </div>
                            </div>
                            {{-- Main Form For Qr End --}}
                            <div></div>
                        </div>
                        <div class="tab-pane pt-4" id="done" role="tabpanel" aria-labelledby="done-tab">
                            Done
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-2">
                <div class="card">
                    <div class="card-body">
                        <div>
                            <h3>Preview</h3>
                            <img class="img-fluid" src="https://i.ibb.co/XzHNWc0/no-qr.png" alt="QR Code">
                        </div>
                    </div>
                    <div class="card-footer d-flex justify-content-around align-items-center">
                        <a href="#" class="btn btn-light btn-active-light-primary w-100 me-2">Preview</a>
                        <a href="#" class="btn btn-light btn-primary w-100">Download</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

























    <div class="d-flex flex-column flex-lg-row" style="margin-top: 5rem">
        <div class="flex-lg-row-fluid mb-10 mb-lg-0 me-lg-7 me-xl-10">
            <div class="card">
                <div class="card-body p-12">
                    <!--begin::Form-->
                    <form id="generateQRCodeForm">
                        @csrf
                        <div class="row fav-row">
                            <div class="mb-10 col-lg-6">
                                <x-metronic.label for="data"
                                    class="form-label">{{ __('Data') }}</x-metronic.label>
                                <x-metronic.input id="data" type="text" name="name" :value="old('name')"
                                    placeholder="Enter Your Data" required />
                            </div>
                            <div class="mb-10 col-lg-2">
                                <x-metronic.label for="color"
                                    class="form-label">{{ __('Color') }}</x-metronic.label>
                                <x-metronic.input id="color" type="color" name="color" :value="old('color')"
                                    placeholder="Select Color" />
                            </div>
                            <div class="mb-10 col-lg-4">
                                <x-metronic.label for="eye" class="col-form-label required fw-bold fs-6">
                                    {{ __('Select a eye ') }}</x-metronic.label>
                                <x-metronic.select-option id="eye" name="eye" data-hide-search="true"
                                    data-placeholder="Select an option">
                                    <option></option>
                                    <option value="circle">circle</option>
                                    <option value="square">Square</option>
                                </x-metronic.select-option>
                            </div>
                            <div class="mb-10 col-lg-2">
                                <x-metronic.label for="bg_color"
                                    class="form-label">{{ __('Background Color') }}</x-metronic.label>
                                <x-metronic.input id="bg_color" type="color" name="bg_color" :value="old('bg_color')"
                                    placeholder="Select Background Color" />
                            </div>
                            <div class="mb-10 col-lg-4">
                                <x-metronic.label for="style" class="col-form-label required fw-bold fs-6">
                                    {{ __('Select a style ') }}</x-metronic.label>
                                <x-metronic.select-option id="style" name="style" data-hide-search="true"
                                    data-placeholder="Select an option">
                                    <option></option>
                                    <option value="square">Square</option>
                                    <option value="dot">Dot</option>
                                    <option value="round">Round</option>
                                </x-metronic.select-option>
                            </div>
                            <div class="mb-10 col-lg-6">
                                <x-metronic.label for="logo"
                                    class="form-label">{{ __('Logo') }}</x-metronic.label>
                                <x-metronic.input id="logo" type="file" name="logo" :value="old('logo')"
                                    placeholder="Upload Logo" />
                            </div>
                        </div>
                        <div class="card-footer d-flex justify-content-center align-items-center py-4 px-9">
                            {{-- <x-metronic.button type="button" id="generateButton" class="primary">
                                {{ __('Generate') }}
                            </x-metronic.button> --}}
                            <button type="submit" id="generateButton"
                                class="btn btn-primary">{{ __('Generate') }}</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="flex-lg-auto min-w-lg-300px">
            <div class="card">
                <div class="card-body p-10">
                    <span class="text-center fs-2x fw-bolder text-gray-800">Preview</span>
                    <div class="card card-flush">
                        <div class="card-body">
                            <div id="generatedQRCodeContainer" class="mb-5">
                                <img id="generatedQRCode" src="https://i.ibb.co/XzHNWc0/no-qr.png" alt="QR Code">
                                {{-- <br> --}}
                                {{-- <a id="downloadLink" href="" download style="display: none;" class="">Download QR Code</a> --}}
                            </div>
                            <div class="mb-0">
                                <div class="row mb-5">
                                    <div class="col">
                                        <a href="#"
                                            class="btn btn-light btn-active-light-primary w-100">Preview</a>
                                    </div>
                                    <div class="col">
                                        <a id="downloadLink" href="" download style="display: none;"
                                            class="btn btn-light btn-active-light-primary w-100">Download</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    @push('scripts')
        <script>
            $(document).ready(function() {
                $('#generateQRCodeForm').on('submit', function(e) {
                    e.preventDefault(); // Prevent default form submission behavior
                    $('#generateButton').hide();
                    var formData = new FormData(this);

                    $.ajax({
                        url: '{{ route('user.qr-code.store') }}',
                        type: 'POST',
                        data: formData,
                        processData: false,
                        contentType: false,
                        success: function(response) {
                            if (response.qrCodePath) {
                                // Set the QR code image source
                                $('#generatedQRCode').attr('src', response.qrCodePath);
                                // Show the download link
                                $('#downloadLink').attr('href', response.qrCodePath).show();
                                // Show the QR code container
                                $('#generatedQRCodeContainer').show();
                                $('#generateButton').show();
                            } else {
                                console.error('QR code path not found in the response.');
                            }
                        },
                        error: function(xhr, status, error) {
                            console.error(xhr.responseText);
                        }
                    });
                });
            });

        </script>
        <script>
            var myDropzone = new Dropzone("#kt_dropzonejs_example_1", {
    url: "https://keenthemes.com/scripts/void.php", // Set the url for your upload script location
    paramName: "file", // The name that will be used to transfer the file
    maxFiles: 10,
    maxFilesize: 10, // MB
    addRemoveLinks: true,
    accept: function(file, done) {
        if (file.name == "wow.jpg") {
            done("Naha, you don't.");
        } else {
            done();
        }
    }
});
        </script>
        <script>
            $(document).ready(function() {
                $('#colorPicker').on('input', function() {
                    var selectedColor = $(this).val();
                    $('#colorCodeInput').val(selectedColor);
                });
            });
        </script>
    @endpush
</x-app-layout>







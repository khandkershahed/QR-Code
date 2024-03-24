<x-app-layout :title="'QR Code Generate'">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-9">
                <div class="bg-white">
                    <ul class="nav nav-tabs qr-code-navs border-0" id="myTab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active border-0 rounded-0" id="selectType-tab" data-bs-toggle="tab"
                                data-bs-target="#selectType" type="button" role="tab" aria-controls="selectType"
                                aria-selected="true">
                                1. Select Type
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
                            <button class="nav-link border-0 rounded-0" id="customize-tab" data-bs-toggle="tab"
                                data-bs-target="#customize" type="button" role="tab" aria-controls="customize"
                                aria-selected="false">
                                3. Customize
                            </button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link  border-0 rounded-0" id="done-main-tab" data-bs-toggle="tab"
                                data-bs-target="#done-main" type="button" role="tab" aria-controls="done-main"
                                aria-selected="false">
                                4. Done
                            </button>
                        </li>
                    </ul>
                    <form action="" method="post">
                        <div class="tab-content p-3">
                            <div class="tab-pane pt-4 step-form-padding active" id="selectType" role="tabpanel"
                                aria-labelledby="selectType-tab">
                                <div class="pt-5 ps-5">
                                    <h2>Create a Dynamic QR Code</h2>
                                    <p>Modify content as needed, even after going live.</p>
                                </div>
                                <div>
                                    <fieldset class="checkbox-group">
                                        <div class="row">
                                            <div class="col-lg-4">
                                                <div class="checkbox">
                                                    <label for="radio-card-f001" class="radio-card">
                                                        <input type="radio" name="code_type" value="website"
                                                            id="radio-card-f001" />
                                                        <div class="card-content-wrapper">
                                                            <span class="check-icon"></span>
                                                            <div class="card-content">
                                                                <div class="d-flex align-items-center">
                                                                    <div style="" class="check_type">
                                                                        <img class="img-fluid"
                                                                            src="https://dashboard.uniqode.com/assets/img/dynamic-qr/website.svg"
                                                                            alt="">
                                                                    </div>
                                                                    <div class="text-start ps-4" style="width: 85%">
                                                                        <h3 class="mb-0">Website</h3>
                                                                        <p class="mb-0">Link to an existing web URL
                                                                            and bring
                                                                            traffic
                                                                            online</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="checkbox">
                                                    <label for="radio-card-f002" class="radio-card">
                                                        <input type="radio" name="code_type" value="pdf"
                                                            id="radio-card-f002" />
                                                        <div class="card-content-wrapper">
                                                            <span class="check-icon"></span>
                                                            <div class="card-content">
                                                                <div class="d-flex align-items-center">
                                                                    <div style="" class="check_type">
                                                                        <img class="img-fluid"
                                                                            src="https://dashboard.uniqode.com/assets/img/dynamic-qr/pdf.svg"
                                                                            alt="">
                                                                    </div>
                                                                    <div class="text-start ps-4" style="width: 85%">
                                                                        <h3 class="mb-0">PDF</h3>
                                                                        <p class="mb-0">Link a PDF document and
                                                                            distribute it efficiently</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="checkbox">
                                                    <label for="radio-card-f003" class="radio-card">
                                                        <input type="radio" name="code_type" value="image"
                                                            id="radio-card-f003" />
                                                        <div class="card-content-wrapper">
                                                            <span class="check-icon"></span>
                                                            <div class="card-content">
                                                                <div class="d-flex align-items-center">
                                                                    <div style="" class="check_type">
                                                                        <img class="img-fluid"
                                                                            src="https://dashboard.uniqode.com/assets/img/dynamic-qr/image.svg"
                                                                            alt="">
                                                                    </div>
                                                                    <div class="text-start ps-4" style="width: 85%">
                                                                        <h3 class="mb-0">Image</h3>
                                                                        <p class="mb-0">Show A Photo</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="checkbox">
                                                    <label for="radio-card-f004" class="radio-card">
                                                        <input type="radio" name="code_type" value=""
                                                            id="radio-card-f004" />
                                                        <div class="card-content-wrapper">
                                                            <span class="check-icon"></span>
                                                            <div class="card-content">
                                                                <div class="d-flex align-items-center">
                                                                    <div style="" class="check_type">
                                                                        <img class="img-fluid"
                                                                            src="https://dashboard.uniqode.com/assets/img/dynamic-qr/sms.svg"
                                                                            alt="">
                                                                    </div>
                                                                    <div class="text-start ps-4" style="width: 85%">
                                                                        <h3 class="mb-0">SMS</h3>
                                                                        <p class="mb-0">Redirect to your mobile
                                                                            number to receive SMS</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="checkbox">
                                                    <label for="radio-card-f005" class="radio-card">
                                                        <input type="radio" name="code_type" value=""
                                                            id="radio-card-f005" />
                                                        <div class="card-content-wrapper">
                                                            <span class="check-icon"></span>
                                                            <div class="card-content">
                                                                <div class="d-flex align-items-center">
                                                                    <div style="" class="check_type">
                                                                        <img class="img-fluid"
                                                                            src="https://dashboard.uniqode.com/assets/img/dynamic-qr/email.svg"
                                                                            alt="">
                                                                    </div>
                                                                    <div class="text-start ps-4" style="width: 85%">
                                                                        <h3 class="mb-0">Email</h3>
                                                                        <p class="mb-0">Link to receive email
                                                                            messages</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="checkbox">
                                                    <label for="radio-card-f006" class="radio-card">
                                                        <input type="radio" name="code_type" value=""
                                                            id="radio-card-f006" />
                                                        <div class="card-content-wrapper">
                                                            <span class="check-icon"></span>
                                                            <div class="card-content">
                                                                <div class="d-flex align-items-center">
                                                                    <div style="" class="check_type">
                                                                        <img class="img-fluid"
                                                                            src="https://dashboard.uniqode.com/assets/img/dynamic-qr/app-download.svg"
                                                                            alt="">
                                                                    </div>
                                                                    <div class="text-start ps-4" style="width: 85%">
                                                                        <h3 class="mb-0">Mobile App</h3>
                                                                        <p class="mb-0">Link to receive email
                                                                            messages</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="checkbox">
                                                    <label for="radio-card-f007" class="radio-card">
                                                        <input type="radio" name="code_type" value=""
                                                            id="radio-card-f007" />
                                                        <div class="card-content-wrapper">
                                                            <span class="check-icon"></span>
                                                            <div class="card-content">
                                                                <div class="d-flex align-items-center">
                                                                    <div style="" class="check_type">
                                                                        <img class="img-fluid"
                                                                            src="https://dashboard.uniqode.com/assets/img/dynamic-qr/call.svg"
                                                                            alt="">
                                                                    </div>
                                                                    <div class="text-start ps-4" style="width: 85%">
                                                                        <h3 class="mb-0">Call</h3>
                                                                        <p class="mb-0">Link to receive email
                                                                            messages</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="checkbox">
                                                    <label for="radio-card-f008" class="radio-card">
                                                        <input type="radio" name="code_type" value=""
                                                            id="radio-card-f008" />
                                                        <div class="card-content-wrapper">
                                                            <span class="check-icon"></span>
                                                            <div class="card-content">
                                                                <div class="d-flex align-items-center">
                                                                    <div style="" class="check_type">
                                                                        <img class="img-fluid"
                                                                            src="https://dashboard.uniqode.com/assets/img/dynamic-qr/location.svg"
                                                                            alt="">
                                                                    </div>
                                                                    <div class="text-start ps-4" style="width: 85%">
                                                                        <h3 class="mb-0">Location</h3>
                                                                        <p class="mb-0">Point to any location on
                                                                            Google Maps</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="checkbox">
                                                    <label for="radio-card-f009" class="radio-card">
                                                        <input type="radio" name="code_type" value=""
                                                            id="radio-card-f009" />
                                                        <div class="card-content-wrapper">
                                                            <span class="check-icon"></span>
                                                            <div class="card-content">
                                                                <div class="d-flex align-items-center">
                                                                    <div style="" class="check_type">
                                                                        <img class="img-fluid"
                                                                            src="https://dashboard.uniqode.com/assets/img/dynamic-qr/coupon.svg"
                                                                            alt="">
                                                                    </div>
                                                                    <div class="text-start ps-4" style="width: 85%">
                                                                        <h3 class="mb-0">Coupon Code</h3>
                                                                        <p class="mb-0">Route to a page displaying
                                                                            coupon code details</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="checkbox">
                                                    <label for="radio-card-f010" class="radio-card">
                                                        <input type="radio" name="code_type" value=""
                                                            id="radio-card-f010" />
                                                        <div class="card-content-wrapper">
                                                            <span class="check-icon"></span>
                                                            <div class="card-content">
                                                                <div class="d-flex align-items-center">
                                                                    <div style="" class="check_type">
                                                                        <img class="img-fluid"
                                                                            src="https://dashboard.uniqode.com/assets/img/dynamic-qr/social-media.svg"
                                                                            alt="">
                                                                    </div>
                                                                    <div class="text-start ps-4" style="width: 85%">
                                                                        <h3 class="mb-0">Social</h3>
                                                                        <p class="mb-0">Link to an existing web URL
                                                                            and bring traffic online</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="checkbox">
                                                    <label for="radio-card-f011" class="radio-card">
                                                        <input type="radio" name="code_type" value=""
                                                            id="radio-card-f011" />
                                                        <div class="card-content-wrapper">
                                                            <span class="check-icon"></span>
                                                            <div class="card-content">
                                                                <div class="d-flex align-items-center">
                                                                    <div style="" class="check_type">
                                                                        <img class="img-fluid"
                                                                            src="https://dashboard.uniqode.com/assets/img/dynamic-qr/business-page.svg"
                                                                            alt="">
                                                                    </div>
                                                                    <div class="text-start ps-4" style="width: 85%">
                                                                        <h3 class="mb-0">Audio / Video</h3>
                                                                        <p class="mb-0">Link to your phone number for
                                                                            quick calls</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="checkbox">
                                                    <label for="radio-card-f012" class="radio-card">
                                                        <input type="radio" name="code_type" value=""
                                                            id="radio-card-f012" />
                                                        <div class="card-content-wrapper">
                                                            <span class="check-icon"></span>
                                                            <div class="card-content">
                                                                <div class="d-flex align-items-center">
                                                                    <div style="" class="check_type">
                                                                        <img class="img-fluid"
                                                                            src="https://dashboard.uniqode.com/assets/img/dynamic-qr/mp3.svg"
                                                                            alt="">
                                                                    </div>
                                                                    <div class="text-start ps-4" style="width: 85%">
                                                                        <h3 class="mb-0">Business Page</h3>
                                                                        <p class="mb-0">Link to your phone number for
                                                                            quick calls</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </fieldset>
                                </div>
                            </div>
                            <div class="tab-pane pt-4 step-form-padding" id="setup" role="tabpanel"
                                aria-labelledby="setup-tab">
                                <div class="card">
                                    <div class="card-body">
                                        @include('user.pages.qr-code.partials.form')
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane pt-4 step-form-padding" id="customize" role="tabpanel"
                                aria-labelledby="customize-tab">
                                <div class="pt-5 ps-5">
                                    <h2>Design your QR Code</h2>
                                    <p>Customize the design of your QR code with colors, logos and shapes.</p>
                                </div>
                                {{-- Main Form For Qr --}}
                                <div class="card card-flush h-xl-100">
                                    <div class="card-header pt-5">
                                        <h3 class="card-title align-items-start flex-column">
                                            <span class="card-label fw-bold text-gray-800">Choose QR Code
                                                Structure!</span>
                                        </h3>
                                    </div>
                                    {{-- Customize Nested Tabs For Customize The Design --}}
                                    <div class="card-body pt-1">
                                        <ul class="nav nav-pills nav-pills-custom mb-3" role="tablist">
                                            <li class="nav-item mb-3 me-3 me-lg-6" role="presentation">
                                                <a class="nav-link btn btn-outline btn-flex btn-color-muted btn-active-color-primary flex-column overflow-hidden w-100px h-85px p-0
                                                    active"
                                                    id="kt_stats_widget_16_tab_link_1" data-bs-toggle="pill"
                                                    href="#kt_stats_widget_16_tab_1" aria-selected="true"
                                                    role="tab">
                                                    <div class="nav-icon mb-3 qr-design-chose">
                                                        <img src="https://dashboard.uniqode.com/assets/logo/qr-customize/Template.svg"
                                                            alt="">
                                                    </div>
                                                    <span
                                                        class="nav-text text-gray-800 fw-bold fs-6 lh-1">Templates</span>
                                                    <span
                                                        class="bullet-custom position-absolute bottom-0 w-100 h-4px bg-primary"></span>
                                                </a>
                                            </li>
                                            <li class="nav-item mb-3 me-3 me-lg-6" role="presentation">
                                                <a class="nav-link btn btn-outline btn-flex btn-color-muted btn-active-color-primary flex-column overflow-hidden w-100px h-85px p-0
                                                    "
                                                    id="kt_stats_widget_16_tab_link_2" data-bs-toggle="pill"
                                                    href="#kt_stats_widget_16_tab_2" aria-selected="false"
                                                    tabindex="-1" role="tab">
                                                    <div class="nav-icon mb-3 qr-design-chose">
                                                        <img src="https://dashboard.uniqode.com/assets/logo/qr-customize/Logo.svg"
                                                            alt="">
                                                    </div>

                                                    <span class="nav-text text-gray-800 fw-bold fs-6 lh-1"> Logo
                                                    </span>
                                                    <span
                                                        class="bullet-custom position-absolute bottom-0 w-100 h-4px bg-primary"></span>
                                                </a>
                                            </li>
                                            <li class="nav-item mb-3 me-3 me-lg-6" role="presentation">
                                                <a class="nav-link btn btn-outline btn-flex btn-color-muted btn-active-color-primary flex-column overflow-hidden w-100px h-85px p-0
                                                    "
                                                    id="kt_stats_widget_16_tab_link_3" data-bs-toggle="pill"
                                                    href="#kt_stats_widget_16_tab_3" aria-selected="false"
                                                    tabindex="-1" role="tab">
                                                    <div class="nav-icon mb-3 qr-design-chose">
                                                        <img src="https://dashboard.uniqode.com/assets/logo/qr-customize/Eye.svg"
                                                            alt="">
                                                    </div>

                                                    <span class="nav-text text-gray-800 fw-bold fs-6 lh-1"> Eyes
                                                    </span>
                                                    <span
                                                        class="bullet-custom position-absolute bottom-0 w-100 h-4px bg-primary"></span>
                                                </a>
                                            </li>
                                            <li class="nav-item mb-3 me-3 me-lg-6" role="presentation">
                                                <a class="nav-link btn btn-outline btn-flex btn-color-muted btn-active-color-primary flex-column overflow-hidden w-100px h-85px p-0
                                                    "
                                                    id="kt_stats_widget_16_tab_link_4" data-bs-toggle="pill"
                                                    href="#kt_stats_widget_16_tab_4" aria-selected="false"
                                                    tabindex="-1" role="tab">
                                                    <div class="nav-icon mb-3 qr-design-chose">
                                                        <img src="https://dashboard.uniqode.com/assets/logo/qr-customize/Pattern.svg"
                                                            alt="">
                                                    </div>

                                                    <span class="nav-text text-gray-800 fw-bold fs-6 lh-1">Pattern
                                                    </span>
                                                    <span
                                                        class="bullet-custom position-absolute bottom-0 w-100 h-4px bg-primary"></span>
                                                </a>
                                            </li>
                                            <li class="nav-item mb-3 me-3 me-lg-6" role="presentation">
                                                <a class="nav-link btn btn-outline btn-flex btn-color-muted btn-active-color-primary flex-column overflow-hidden w-100px h-85px p-0
                                                    "
                                                    id="kt_stats_widget_16_tab_link_5" data-bs-toggle="pill"
                                                    href="#kt_stats_widget_16_tab_5" aria-selected="false"
                                                    tabindex="-1" role="tab">
                                                    <div class="nav-icon mb-3 qr-design-chose">
                                                        <img src="https://dashboard.uniqode.com/assets/logo/qr-customize/Background.svg"
                                                            alt="">
                                                    </div>
                                                    <span class="nav-text text-gray-800 fw-bold fs-6 lh-1">
                                                        Background</span>
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
                                                    <div class="card ">
                                                        <div class="card-body rounded-4 py-1 pb-0 px-0 ps-1"
                                                            style="width: 100%;overflow: auto;">
                                                            <div style="width:170px; display: flex; gap: 20px;">
                                                                <label for="radio-card-31" class="radio-card">
                                                                    <input type="radio" name="radio-card"
                                                                        id="radio-card-31" />
                                                                    <div class="card-content-wrapper code-template">
                                                                        <span class="check-icon"></span>
                                                                        <div class="card-content">
                                                                            <img width="140px"
                                                                                style="padding-top: 5px;"
                                                                                src="https://d1bqobzsowu5wu.cloudfront.net/public/qr-code-templates/Default/aHR0cHM6Ly9xcmNvZGVzLnByby9zY2FuL3A/dGVtcGxhdGU9dHJ1ZQ%3D%3D-512.svg?16432.09999999404"
                                                                                alt="" />
                                                                        </div>
                                                                    </div>
                                                                </label>

                                                                <label for="radio-card-32" class="radio-card">
                                                                    <input type="radio" name="radio-card"
                                                                        id="radio-card-32" />
                                                                    <div class="card-content-wrapper code-template">
                                                                        <span class="check-icon"></span>
                                                                        <div class="card-content">
                                                                            <img width="140px"
                                                                                style="padding-top: 5px;"
                                                                                src="https://beaconstac-content.s3.amazonaws.com/undefined/qr-codes/Classic%20Swirl/svg/aHR0cHM6Ly9xcmNvZGVzLnByby9zY2FuL3A/dGVtcGxhdGU9dHJ1ZQ%3D%3D-512.svg?16432.09999999404"
                                                                                alt="" />
                                                                        </div>
                                                                    </div>
                                                                </label>
                                                                <label for="radio-card-33" class="radio-card">
                                                                    <input type="radio" name="radio-card"
                                                                        id="radio-card-33" />
                                                                    <div class="card-content-wrapper code-template">
                                                                        <span class="check-icon"></span>
                                                                        <div class="card-content">
                                                                            <img width="140px"
                                                                                style="padding-top: 5px;"
                                                                                src="https://d1bqobzsowu5wu.cloudfront.net/public/qr-code-templates/Gradient/aHR0cHM6Ly9xcmNvZGVzLnByby9zY2FuL3A/dGVtcGxhdGU9dHJ1ZQ%3D%3D-512.svg?16432.09999999404"
                                                                                alt="" />
                                                                        </div>
                                                                    </div>
                                                                </label>
                                                                <label for="radio-card-34" class="radio-card">
                                                                    <input type="radio" name="radio-card"
                                                                        id="radio-card-34" />
                                                                    <div class="card-content-wrapper code-template">
                                                                        <span class="check-icon"></span>
                                                                        <div class="card-content">
                                                                            <img width="140px"
                                                                                style="padding-top: 5px;"
                                                                                src="https://beaconstac-content.s3.amazonaws.com/undefined/qr-codes/Blue%20Dream/svg/aHR0cHM6Ly9xcmNvZGVzLnByby9zY2FuL3A/dGVtcGxhdGU9dHJ1ZQ%3D%3D-512.svg?16432.09999999404"
                                                                                alt="" />
                                                                        </div>
                                                                    </div>
                                                                </label>
                                                                <label for="radio-card-35" class="radio-card">
                                                                    <input type="radio" name="radio-card"
                                                                        id="radio-card-35" />
                                                                    <div class="card-content-wrapper code-template">
                                                                        <span class="check-icon"></span>
                                                                        <div class="card-content">
                                                                            <img width="140px"
                                                                                style="padding-top: 5px;"
                                                                                src="https://beaconstac-content.s3.amazonaws.com/undefined/qr-codes/Retro%20Funk/svg/aHR0cHM6Ly9xcmNvZGVzLnByby9zY2FuL3A/dGVtcGxhdGU9dHJ1ZQ%3D%3D-512.svg?16432.09999999404"
                                                                                alt="" />
                                                                        </div>
                                                                    </div>
                                                                </label>

                                                                <label for="radio-card-36" class="radio-card">
                                                                    <input type="radio" name="radio-card"
                                                                        id="radio-card-36" />
                                                                    <div class="card-content-wrapper code-template">
                                                                        <span class="check-icon"></span>
                                                                        <div class="card-content">
                                                                            <img width="140px"
                                                                                style="padding-top: 5px;"
                                                                                src="https://beaconstac-content.s3.amazonaws.com/undefined/qr-codes/Nature%20Earth/svg/aHR0cHM6Ly9xcmNvZGVzLnByby9zY2FuL3A/dGVtcGxhdGU9dHJ1ZQ%3D%3D-512.svg?16432.09999999404"
                                                                                alt="" />
                                                                        </div>
                                                                    </div>
                                                                </label>
                                                                <label for="radio-card-37" class="radio-card">
                                                                    <input type="radio" name="radio-card"
                                                                        id="radio-card-37" />
                                                                    <div class="card-content-wrapper code-template">
                                                                        <span class="check-icon"></span>
                                                                        <div class="card-content">
                                                                            <img width="140px"
                                                                                style="padding-top: 5px;"
                                                                                src="https://beaconstac-content.s3.amazonaws.com/undefined/qr-codes/Sunny%20Day/svg/aHR0cHM6Ly9xcmNvZGVzLnByby9zY2FuL3A/dGVtcGxhdGU9dHJ1ZQ%3D%3D-512.svg?16432.09999999404"
                                                                                alt="" />
                                                                        </div>
                                                                    </div>
                                                                </label>
                                                                <label for="radio-card-38" class="radio-card">
                                                                    <input type="radio" name="radio-card"
                                                                        id="radio-card-38" />
                                                                    <div class="card-content-wrapper code-template">
                                                                        <span class="check-icon"></span>
                                                                        <div class="card-content">
                                                                            <img width="140px"
                                                                                style="padding-top: 5px;"
                                                                                src="https://beaconstac-content.s3.amazonaws.com/undefined/qr-codes/Dark%20Mode/svg/aHR0cHM6Ly9xcmNvZGVzLnByby9zY2FuL3A/dGVtcGxhdGU9dHJ1ZQ%3D%3D-512.svg?16432.09999999404"
                                                                                alt="" />
                                                                        </div>
                                                                    </div>
                                                                </label>
                                                                <label for="radio-card-39" class="radio-card">
                                                                    <input type="radio" name="radio-card"
                                                                        id="radio-card-39" />
                                                                    <div class="card-content-wrapper code-template">
                                                                        <span class="check-icon"></span>
                                                                        <div class="card-content">
                                                                            <img width="140px"
                                                                                style="padding-top: 5px;"
                                                                                src="https://beaconstac-content.s3.amazonaws.com/undefined/qr-codes/Classic%20Frame/svg/aHR0cHM6Ly9xcmNvZGVzLnByby9zY2FuL3A/dGVtcGxhdGU9dHJ1ZQ%3D%3D-512.svg?16432.09999999404"
                                                                                alt="" />
                                                                        </div>
                                                                    </div>
                                                                </label>
                                                                <label for="radio-card-40" class="radio-card">
                                                                    <input type="radio" name="radio-card"
                                                                        id="radio-card-40" />
                                                                    <div class="card-content-wrapper code-template">
                                                                        <span class="check-icon"></span>
                                                                        <div class="card-content">
                                                                            <img width="140px"
                                                                                style="padding-top: 5px;"
                                                                                src="https://beaconstac-content.s3.amazonaws.com/undefined/qr-codes/Ocean%20Breeze/svg/aHR0cHM6Ly9xcmNvZGVzLnByby9zY2FuL3A/dGVtcGxhdGU9dHJ1ZQ%3D%3D-512.svg?16432.09999999404"
                                                                                alt="" />
                                                                        </div>
                                                                    </div>
                                                                </label>
                                                                <label for="radio-card-41" class="radio-card">
                                                                    <input type="radio" name="radio-card"
                                                                        id="radio-card-41" />
                                                                    <div class="card-content-wrapper code-template">
                                                                        <span class="check-icon"></span>
                                                                        <div class="card-content">
                                                                            <img width="140px"
                                                                                style="padding-top: 5px;"
                                                                                src="https://beaconstac-content.s3.amazonaws.com/undefined/qr-codes/Edgy%20Graffiti/svg/aHR0cHM6Ly9xcmNvZGVzLnByby9zY2FuL3A/dGVtcGxhdGU9dHJ1ZQ%3D%3D-512.svg?16432.09999999404"
                                                                                alt="" />
                                                                        </div>
                                                                    </div>
                                                                </label>
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
                                                    <div class="d-flex align-items-center">
                                                        <div class="dropzone dz-clickable w-100"
                                                        id="kt_dropzonejs_example_1">
                                                        <div class="dz-message needsclick">
                                                            <i class="ki-duotone ki-file-up fs-3x text-primary"><span
                                                                    class="path1"></span><span
                                                                    class="path2"></span></i>

                                                            <div class="ms-4">
                                                                <h3 class="fs-5 fw-bold text-gray-900 mb-1">Drop files
                                                                    here
                                                                    or click to upload.</h3>
                                                                <span
                                                                    class="fs-7 fw-semibold text-primary opacity-75">Upload
                                                                    up to 10 files</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="ps-2">
                                                        <label for="">Enter Logo Size</label>
                                                        <input type="number" name="" id=""
                                                            class="form-control form-control-solid mt-4"
                                                            placeholder="Enter Logo Size">
                                                    </div>
                                                    </div>
                                                    <p class="text-start pt-5 mb-0">Or Select From Our
                                                        Gallary</p>
                                                    {{-- Logo From Our Gallary --}}
                                                    <div class="pt-2 row">
                                                        <div class="col-sm-1 mb-1">
                                                            <a href="#">
                                                                <img style="width: 45px; border: 1px solid #DBDFE3; border-radius: 4px;"
                                                                    src="https://static.beaconstac.com/assets/img/qr-code-logos/app-store.svg">
                                                            </a>
                                                        </div>
                                                        <div class="col-sm-1 mb-1">
                                                            <a href="#">
                                                                <img style="width: 45px;border: 1px solid #DBDFE3;border-radius: 4px;"
                                                                    src="	https://static.beaconstac.com/assets/img/qr-code-logos/calender.svg">
                                                            </a>
                                                        </div>
                                                        <div class="col-sm-1 mb-1">
                                                            <a href="#">
                                                                <img style="width: 45px;border: 1px solid #DBDFE3;border-radius: 4px;"
                                                                    src="https://static.beaconstac.com/assets/img/qr-code-logos/email.svg">
                                                            </a>
                                                        </div>
                                                        <div class="col-sm-1 mb-1">
                                                            <a href="#">
                                                                <img style="width: 45px;border: 1px solid #DBDFE3;border-radius: 4px;"
                                                                    src="https://static.beaconstac.com/assets/img/qr-code-logos/facebook.svg">
                                                            </a>
                                                        </div>
                                                        <div class="col-sm-1 mb-1">
                                                            <a href="#">
                                                                <img style="width: 45px;border: 1px solid #DBDFE3;border-radius: 4px;"
                                                                    src="https://static.beaconstac.com/assets/img/qr-code-logos/gmail.svg">
                                                            </a>
                                                        </div>
                                                        <div class="col-sm-1 mb-1">
                                                            <a href="#">
                                                                <img style="width: 45px;border: 1px solid #DBDFE3;border-radius: 4px;"
                                                                    src="https://static.beaconstac.com/assets/img/qr-code-logos/google-bussiness.svg">
                                                            </a>
                                                        </div>
                                                        <div class="col-sm-1 mb-1">
                                                            <a href="#">
                                                                <img style="width: 45px;border: 1px solid #DBDFE3;border-radius: 4px;"
                                                                    src="https://static.beaconstac.com/assets/img/qr-code-logos/instagram.svg">
                                                            </a>
                                                        </div>
                                                        <div class="col-sm-1 mb-1">
                                                            <a href="#">
                                                                <img style="width: 45px;border: 1px solid #DBDFE3;border-radius: 4px;"
                                                                    src="https://static.beaconstac.com/assets/img/qr-code-logos/linkedin.svg">
                                                            </a>
                                                        </div>
                                                        <div class="col-sm-1 mb-1">
                                                            <a href="#">
                                                                <img style="width: 45px;border: 1px solid #DBDFE3;border-radius: 4px;"
                                                                    src="https://static.beaconstac.com/assets/img/qr-code-logos/mp3.svg">
                                                            </a>
                                                        </div>
                                                        <div class="col-sm-1 mb-1">
                                                            <a href="#">
                                                                <img style="width: 45px;border: 1px solid #DBDFE3;border-radius: 4px;"
                                                                    src="https://static.beaconstac.com/assets/img/qr-code-logos/pdf.svg">
                                                            </a>
                                                        </div>
                                                        <div class="col-sm-1 mb-1">
                                                            <a href="#">
                                                                <img style="width: 45px;border: 1px solid #DBDFE3;border-radius: 4px;"
                                                                    src="https://static.beaconstac.com/assets/img/qr-code-logos/phone-call.svg">
                                                            </a>
                                                        </div>
                                                        <div class="col-sm-1 mb-1">
                                                            <a href="#">
                                                                <img style="width: 45px;border: 1px solid #DBDFE3;border-radius: 4px;"
                                                                    src="https://static.beaconstac.com/assets/img/qr-code-logos/pintrest.svg">
                                                            </a>
                                                        </div>
                                                        <div class="col-sm-1 mb-1">
                                                            <a href="#">
                                                                <img style="width: 45px;border: 1px solid #DBDFE3;border-radius: 4px;"
                                                                    src="https://static.beaconstac.com/assets/img/qr-code-logos/play-store.svg">
                                                            </a>
                                                        </div>
                                                        <div class="col-sm-1 mb-1">
                                                            <a href="#">
                                                                <img style="width: 45px;border: 1px solid #DBDFE3;border-radius: 4px;"
                                                                    src="https://static.beaconstac.com/assets/img/qr-code-logos/ratings.png">
                                                            </a>
                                                        </div>
                                                        <div class="col-sm-1 mb-1">
                                                            <a href="#">
                                                                <img style="width: 45px;border: 1px solid #DBDFE3;border-radius: 4px;"
                                                                    src="https://static.beaconstac.com/assets/img/qr-code-logos/twitter.svg">
                                                            </a>
                                                        </div>
                                                        <div class="col-sm-1 mb-1">
                                                            <a href="#">
                                                                <img style="width: 45px;border: 1px solid #DBDFE3;border-radius: 4px;"
                                                                    src="https://static.beaconstac.com/assets/img/qr-code-logos/youtube.svg">
                                                            </a>
                                                        </div>
                                                        <div class="col-sm-1 mb-1">
                                                            <a href="#">
                                                                <img style="width: 45px;border: 1px solid #DBDFE3;border-radius: 4px;"
                                                                    src="https://static.beaconstac.com/assets/img/qr-code-logos/covid-logo-1.svg">
                                                            </a>
                                                        </div>
                                                        <div class="col-sm-1 mb-1">
                                                            <a href="#">
                                                                <img style="width: 45px;border: 1px solid #DBDFE3;border-radius: 4px;"
                                                                    src="https://static.beaconstac.com/assets/img/qr-code-logos/covid-logo-2.svg">
                                                            </a>
                                                        </div>
                                                        <div class="col-sm-1 mb-1">
                                                            <a href="#">
                                                                <img style="width: 45px;border: 1px solid #DBDFE3;border-radius: 4px;"
                                                                    src="https://static.beaconstac.com/assets/img/qr-code-logos/covid-logo-3.svg">
                                                            </a>
                                                        </div>
                                                        <div class="col-sm-1 mb-1">
                                                            <a href="#">
                                                                <img style="width: 45px;border: 1px solid #DBDFE3;border-radius: 4px;"
                                                                    src="https://static.beaconstac.com/assets/img/qr-code-logos/covid-logo-4.svg">
                                                            </a>
                                                        </div>
                                                        <div class="col-sm-1 mb-1">
                                                            <a href="#">
                                                                <img style="width: 45px;border: 1px solid #DBDFE3;border-radius: 4px;"
                                                                    src="https://static.beaconstac.com/assets/img/qr-code-logos/covid-logo-5.svg">
                                                            </a>
                                                        </div>
                                                        <div class="col-sm-1 mb-1">
                                                            <a href="#">
                                                                <img style="width: 45px;border: 1px solid #DBDFE3;border-radius: 4px;"
                                                                    src="https://static.beaconstac.com/assets/img/qr-code-logos/covid-logo-6.svg">
                                                            </a>
                                                        </div>
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
                                                    <input type="color" id="colorPicker"
                                                        style="width: 56px;height: 45px;">
                                                    <input type="text" id="colorCodeInput"
                                                        class="form-control form-control-solid w-25" readonly>
                                                </div>
                                                <div class="d-flex">
                                                    <label for="radio-card-311" class="radio-card me-4">
                                                        <input type="radio" name="radio-card"
                                                            id="radio-card-311" />
                                                        <div class="card-content-wrapper i-ball-frame">
                                                            <span class="check-icon"></span>
                                                            <div class="card-content 2">
                                                                <img width="60px" style="padding-top: 5px;"
                                                                    src="https://static.beaconstac.com/assets/img/mobstac-awesome-qr/eye-balls/square.svg"
                                                                    alt="" />
                                                            </div>
                                                        </div>
                                                    </label>
                                                    <label for="radio-card-322" class="radio-card me-4">
                                                        <input type="radio" name="radio-card"
                                                            id="radio-card-322" />
                                                        <div class="card-content-wrapper i-ball-frame">
                                                            <span class="check-icon"></span>
                                                            <div class="card-content 2">
                                                                <img width="60px" style="padding-top: 5px;"
                                                                    src="https://static.beaconstac.com/assets/img/mobstac-awesome-qr/eye-balls/rounded.svg"
                                                                    alt="" />
                                                            </div>
                                                        </div>
                                                    </label>
                                                    <label for="radio-card-333" class="radio-card me-4">
                                                        <input type="radio" name="radio-card"
                                                            id="radio-card-333" />
                                                        <div class="card-content-wrapper i-ball-frame">
                                                            <span class="check-icon"></span>
                                                            <div class="card-content 2">
                                                                <img width="60px" style="padding-top: 5px;"
                                                                    src="https://static.beaconstac.com/assets/img/mobstac-awesome-qr/eye-balls/left-diamond.svg"
                                                                    alt="" />
                                                            </div>
                                                        </div>
                                                    </label>
                                                    <label for="radio-card-344" class="radio-card me-4">
                                                        <input type="radio" name="radio-card"
                                                            id="radio-card-344" />
                                                        <div class="card-content-wrapper i-ball-frame">
                                                            <span class="check-icon"></span>
                                                            <div class="card-content 2">
                                                                <img width="60px" style="padding-top: 5px;"
                                                                    src="https://static.beaconstac.com/assets/img/mobstac-awesome-qr/eye-balls/right-diamond.svg"
                                                                    alt="" />
                                                            </div>
                                                        </div>
                                                    </label>
                                                    <label for="radio-card-356" class="radio-card me-4">
                                                        <input type="radio" name="radio-card"
                                                            id="radio-card-356" />
                                                        <div class="card-content-wrapper i-ball-frame">
                                                            <span class="check-icon"></span>
                                                            <div class="card-content 2">
                                                                <img width="60px" style="padding-top: 5px;"
                                                                    src="https://static.beaconstac.com/assets/img/mobstac-awesome-qr/eye-balls/left-leaf.svg"
                                                                    alt="" />
                                                            </div>
                                                        </div>
                                                    </label>
                                                    <label for="radio-card-367" class="radio-card me-4">
                                                        <input type="radio" name="radio-card"
                                                            id="radio-card-367" />
                                                        <div class="card-content-wrapper i-ball-frame">
                                                            <span class="check-icon"></span>
                                                            <div class="card-content 2">
                                                                <img width="60px" style="padding-top: 5px;"
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
                                                    <input type="text" id="colorCodeInput"
                                                        class="form-control form-control-solid w-25" readonly>
                                                    <input type="color" id="colorPicker"
                                                        style="width: 56px;height: 45px;">
                                                </div>
                                                <div class="d-flex">
                                                    <label for="radio-card-378" class="radio-card me-4">
                                                        <input type="radio" name="radio-card"
                                                            id="radio-card-378" />
                                                        <div class="card-content-wrapper i-ball-frame">
                                                            <span class="check-icon"></span>
                                                            <div class="card-content 2">
                                                                <img width="60px" style="padding-top: 5px;"
                                                                    src="https://static.beaconstac.com/assets/img/mobstac-awesome-qr/eye-frames/square.svg"
                                                                    alt="" />
                                                            </div>
                                                        </div>
                                                    </label>
                                                    <label for="radio-card-389" class="radio-card me-4">
                                                        <input type="radio" name="radio-card"
                                                            id="radio-card-389" />
                                                        <div class="card-content-wrapper i-ball-frame">
                                                            <span class="check-icon"></span>
                                                            <div class="card-content 2">
                                                                <img width="60px" style="padding-top: 5px;"
                                                                    src="https://static.beaconstac.com/assets/img/mobstac-awesome-qr/eye-frames/rounded.svg"
                                                                    alt="" />
                                                            </div>
                                                        </div>
                                                    </label>
                                                    <label for="radio-card-399" class="radio-card me-4">
                                                        <input type="radio" name="radio-card"
                                                            id="radio-card-399" />
                                                        <div class="card-content-wrapper i-ball-frame">
                                                            <span class="check-icon"></span>
                                                            <div class="card-content 2">
                                                                <img width="60px" style="padding-top: 5px;"
                                                                    src="https://static.beaconstac.com/assets/img/mobstac-awesome-qr/eye-frames/left-leaf.svg"
                                                                    alt="" />
                                                            </div>
                                                        </div>
                                                    </label>
                                                    <label for="radio-card-434" class="radio-card me-4">
                                                        <input type="radio" name="radio-card"
                                                            id="radio-card-434" />
                                                        <div class="card-content-wrapper i-ball-frame">
                                                            <span class="check-icon"></span>
                                                            <div class="card-content 2">
                                                                <img width="60px" style="padding-top: 5px;"
                                                                    src="https://static.beaconstac.com/assets/img/mobstac-awesome-qr/eye-frames/right-leaf.svg"
                                                                    alt="" />
                                                            </div>
                                                        </div>
                                                    </label>
                                                </div>
                                            </div>

                                            <div class="tab-pane fade " id="kt_stats_widget_16_tab_4" role="tabpanel"
                                                aria-labelledby="kt_stats_widget_16_tab_link_4">
                                                <div class="pt-5 text-start mt-4">
                                                    <h2>SELECT A PATTERN</h2>
                                                    <p>This will be the color and shape of your QR code's data-pattern
                                                    </p>
                                                </div>
                                                <div>
                                                    <label for="radio-card-444" class="radio-card me-4">
                                                        <input type="radio" name="radio-card"
                                                            id="radio-card-444" />
                                                        <div class="card-content-wrapper qr-pattern">
                                                            <span class="check-icon"></span>
                                                            <div class="card-content 2">
                                                                <img width="70px" style="padding-top: 5px;"
                                                                    src="https://static.beaconstac.com/assets/img/mobstac-awesome-qr/data-patterns/square.svg"
                                                                    alt="" />
                                                            </div>
                                                        </div>
                                                    </label>
                                                    <label for="radio-card-451" class="radio-card me-4">
                                                        <input type="radio" name="radio-card"
                                                            id="radio-card-451" />
                                                        <div class="card-content-wrapper qr-pattern">
                                                            <span class="check-icon"></span>
                                                            <div class="card-content 2">
                                                                <img width="70px" style="padding-top: 5px;"
                                                                    src="https://static.beaconstac.com/assets/img/mobstac-awesome-qr/data-patterns/circle.svg"
                                                                    alt="" />
                                                            </div>
                                                        </div>
                                                    </label>
                                                    <label for="radio-card-460" class="radio-card me-4">
                                                        <input type="radio" name="radio-card"
                                                            id="radio-card-460" />
                                                        <div class="card-content-wrapper qr-pattern">
                                                            <span class="check-icon"></span>
                                                            <div class="card-content 2">
                                                                <img width="70px" style="padding-top: 5px;"
                                                                    src="	https://static.beaconstac.com/assets/img/mobstac-awesome-qr/data-patterns/kite.svg"
                                                                    alt="" />
                                                            </div>
                                                        </div>
                                                    </label>
                                                    <label for="radio-card-471" class="radio-card me-4">
                                                        <input type="radio" name="radio-card"
                                                            id="radio-card-471" />
                                                        <div class="card-content-wrapper qr-pattern">
                                                            <span class="check-icon"></span>
                                                            <div class="card-content 2">
                                                                <img width="70px" style="padding-top: 5px;"
                                                                    src="https://static.beaconstac.com/assets/img/mobstac-awesome-qr/data-patterns/left-diamond.svg"
                                                                    alt="" />
                                                            </div>
                                                        </div>
                                                    </label>
                                                    <label for="radio-card-482" class="radio-card me-4">
                                                        <input type="radio" name="radio-card"
                                                            id="radio-card-482" />
                                                        <div class="card-content-wrapper qr-pattern">
                                                            <span class="check-icon"></span>
                                                            <div class="card-content 2">
                                                                <img width="70px" style="padding-top: 5px;"
                                                                    src="https://static.beaconstac.com/assets/img/mobstac-awesome-qr/data-patterns/left-diamond.svg"
                                                                    alt="" />
                                                            </div>
                                                        </div>
                                                    </label>
                                                    <label for="radio-card-492" class="radio-card me-4">
                                                        <input type="radio" name="radio-card"
                                                            id="radio-card-492" />
                                                        <div class="card-content-wrapper qr-pattern">
                                                            <span class="check-icon"></span>
                                                            <div class="card-content 2">
                                                                <img width="70px" style="padding-top: 5px;"
                                                                    src="https://static.beaconstac.com/assets/img/mobstac-awesome-qr/data-patterns/right-diamond.svg"
                                                                    alt="" />
                                                            </div>
                                                        </div>
                                                    </label>
                                                    <label for="radio-card-5044" class="radio-card me-4">
                                                        <input type="radio" name="radio-card"
                                                            id="radio-card-5044" />
                                                        <div class="card-content-wrapper qr-pattern">
                                                            <span class="check-icon"></span>
                                                            <div class="card-content 2">
                                                                <img width="70px" style="padding-top: 5px;"
                                                                    src="https://static.beaconstac.com/assets/img/mobstac-awesome-qr/data-patterns/thin-square.svg"
                                                                    alt="" />
                                                            </div>
                                                        </div>
                                                    </label>
                                                    <label for="radio-card-5122" class="radio-card me-4">
                                                        <input type="radio" name="radio-card"
                                                            id="radio-card-5122" />
                                                        <div class="card-content-wrapper qr-pattern">
                                                            <span class="check-icon"></span>
                                                            <div class="card-content 2">
                                                                <img width="70px" style="padding-top: 5px;"
                                                                    src="https://static.beaconstac.com/assets/img/mobstac-awesome-qr/data-patterns/smooth-round.svg"
                                                                    alt="" />
                                                            </div>
                                                        </div>
                                                    </label>
                                                    <label for="radio-card-5233" class="radio-card me-4">
                                                        <input type="radio" name="radio-card"
                                                            id="radio-card-5233" />
                                                        <div class="card-content-wrapper qr-pattern">
                                                            <span class="check-icon"></span>
                                                            <div class="card-content 2">
                                                                <img width="70px" style="padding-top: 5px;"
                                                                    src="https://static.beaconstac.com/assets/img/mobstac-awesome-qr/data-patterns/smooth-round.svg"
                                                                    alt="" />
                                                            </div>
                                                        </div>
                                                    </label>
                                                </div>
                                                <div>
                                                    <p class="pt-5">COLOR</p>
                                                    <div class="d-flex">
                                                        <div class="form-check pe-3">
                                                            <input class="form-check-input" id="normal_color"
                                                                type="radio" name="flexRadioDefault"
                                                                id="flexRadioDefault1">
                                                            <label class="form-check-label" for="flexRadioDefault1">
                                                                Solid Color
                                                            </label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" id="gradient_color"
                                                                type="radio" name="flexRadioDefault"
                                                                id="flexRadioDefault2">
                                                            <label class="form-check-label" for="flexRadioDefault2">
                                                                Gradient
                                                            </label>
                                                        </div>
                                                    </div>

                                                    {{-- Hidden Fields --}}
                                                    <div>
                                                        <div class="hidden-field" id="normal_color_show"
                                                            style="display: none;">
                                                            <div class="pt-5">
                                                                <label for="">Color</label> <br>
                                                                <div class="d-flex">
                                                                    <input type="text"
                                                                        id="colorCodeInput-normal_color"
                                                                        class="form-control form-control-solid w-25"
                                                                        readonly>
                                                                    <input type="color" id="colorPicker"
                                                                        style="width: 56px;height: 45px;">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="hidden-field" id="gradient_color_show"
                                                            style="display: none;">
                                                            <div class="pt-5">
                                                                <label for="">Select Gradient Type</label>
                                                                <select class="form-select form-select-sm mt-3 w-25"
                                                                    aria-label="Default select example">
                                                                    <option selected>None</option>
                                                                    <option value="2">Radial</option>
                                                                    <option value="3">Horizontal</option>
                                                                    <option value="4">Vertical</option>
                                                                </select>
                                                            </div>
                                                            <div class="d-flex">
                                                                <div class="pt-3 pe-4">
                                                                    <label for="">Color Start</label>
                                                                    <div class="d-flex">
                                                                        <input type="text"
                                                                            id="colorCodeInput-gradient"
                                                                            class="form-control form-control-solid w-25"
                                                                            style="width: 160px !important" readonly>
                                                                        <input type="color" id="colorPicker"
                                                                            style="width: 56px;height: 45px;">
                                                                    </div>
                                                                </div>
                                                                <div class="pt-3">
                                                                    <label for="">Color End</label>
                                                                    <div class="d-flex">
                                                                        <input type="text"
                                                                            id="colorCodeInput-gradient-2"
                                                                            class="form-control form-control-solid w-25"
                                                                            style="width: 160px !important" readonly>
                                                                        <input type="color" id="colorPicker"
                                                                            style="width: 56px;height: 45px;">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    {{-- Hidden Fields --}}
                                                </div>
                                            </div>
                                            <div class="tab-pane fade " id="kt_stats_widget_16_tab_5" role="tabpanel"
                                                aria-labelledby="kt_stats_widget_16_tab_link_5">
                                                <div class="pt-5 text-start mt-4">
                                                    <h2>SELECT BACKGROUND</h2>
                                                    <p>Select a background color or image for your QR code</p>
                                                </div>
                                                <div>
                                                    <div class="d-flex">
                                                        <div class="form-check pe-3">
                                                            <input class="form-check-input" type="radio"
                                                                name="flexRadioDefault" id="flexRadioDefault1">
                                                            <label class="form-check-label" for="flexRadioDefault1">
                                                                Color
                                                            </label>
                                                        </div>
                                                        <div class="form-check pe-3">
                                                            <input class="form-check-input" type="radio"
                                                                name="flexRadioDefault" id="flexRadioDefault2">
                                                            <label class="form-check-label" for="flexRadioDefault2">
                                                                Image
                                                            </label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio"
                                                                name="flexRadioDefault" id="flexRadioDefault3">
                                                            <label class="form-check-label" for="flexRadioDefault3">
                                                                Transparent
                                                            </label>
                                                        </div>
                                                    </div>
                                                    {{-- By Default Hidden --}}
                                                    <div id="content-sections">
                                                        <div id="color-content" style="display: none;">
                                                            <div class="card w-100 shadow-sm mt-4">
                                                                <div class="card-body">
                                                                    <div class="">
                                                                        <label for="">Color</label>
                                                                        <div class="d-flex">
                                                                            <input type="text"
                                                                                id="colorCodeInput-normal_color"
                                                                                class="form-control form-control-solid w-100"
                                                                                readonly>
                                                                            <input type="color" id="colorPicker"
                                                                                style="width: 56px;height: 45px;">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div id="image-content" style="display: none;">
                                                            <div class="card w-100 shadow-sm mt-4">
                                                                <div class="card-body">
                                                                    <div class="dropzone dz-clickable w-100 mt-4"
                                                                        id="kt_dropzonejs_example_1">
                                                                        <div class="dz-message needsclick">
                                                                            <i
                                                                                class="ki-duotone ki-file-up fs-3x text-primary"><span
                                                                                    class="path1"></span><span
                                                                                    class="path2"></span></i>

                                                                            <div class="ms-4">
                                                                                <h3
                                                                                    class="fs-5 fw-bold text-gray-900 mb-1">
                                                                                    Drop
                                                                                    files here
                                                                                    or click to upload.</h3>
                                                                                <span
                                                                                    class="fs-7 fw-semibold text-primary opacity-75">Upload
                                                                                    up to 10 files</span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div id="transparent-content" style="display: none;">
                                                            <div class="card w-100 shadow-sm mt-4">
                                                                <div class="card-body">
                                                                    <p class="mb-0">The Qr Code Background Will Be
                                                                        Transparent.</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    {{-- By Default Hidden --}}
                                                </div>
                                            </div>
                                            <div class="tab-pane pt-4" id="done" role="tabpanel"
                                                aria-labelledby="done-tab">
                                                asdadasd
                                            </div>
                                        </div>
                                    </div>
                                    {{-- Customize Nested Tabs For Customize The Design End --}}
                                </div>
                            </div>
                            <div class="tab-pane pt-4 step-form-padding" id="done-main" role="tabpanel"
                                aria-labelledby="done-main-tab">
                                <div class="pt-5 ps-5">
                                    <h2>Congratulations! Your QR Code is ready</h2>
                                    <p>Still want to make changes? <a href="#">Modify your QR code</a></p>
                                </div>
                                <div class="pt-5">
                                    <label for="">Enter a name for your QR code <span
                                            class="text-danger">*</span></label>
                                    <input type="text" name="" id=""
                                        class="form-control form-control-sm w-50">
                                </div>
                            </div>
                            {{-- Main Form For Qr End --}}
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex flex-column justify-content-center align-items-center">
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
        <script>
            // Get references to radio buttons and divs
            const normalColorRadio = document.getElementById('normal_color');
            const gradientColorRadio = document.getElementById('gradient_color');
            const normalColorDiv = document.getElementById('normal_color_show');
            const gradientColorDiv = document.getElementById('gradient_color_show');

            // Add event listeners to radio buttons
            normalColorRadio.addEventListener('change', function() {
                // Show normal color div and hide gradient color div
                normalColorDiv.style.display = 'block';
                gradientColorDiv.style.display = 'none';
            });

            gradientColorRadio.addEventListener('change', function() {
                // Show gradient color div and hide normal color div
                normalColorDiv.style.display = 'none';
                gradientColorDiv.style.display = 'block';
            });
        </script>
        <script>
            // Get references to radio buttons and content sections
            const colorRadio = document.getElementById('flexRadioDefault1');
            const imageRadio = document.getElementById('flexRadioDefault2');
            const transparentRadio = document.getElementById('flexRadioDefault3');
            const colorContent = document.getElementById('color-content');
            const imageContent = document.getElementById('image-content');
            const transparentContent = document.getElementById('transparent-content');

            // Add event listeners to radio buttons
            colorRadio.addEventListener('change', function() {
                // Show color content and hide others
                colorContent.style.display = 'block';
                imageContent.style.display = 'none';
                transparentContent.style.display = 'none';
            });

            imageRadio.addEventListener('change', function() {
                // Show image content and hide others
                colorContent.style.display = 'none';
                imageContent.style.display = 'block';
                transparentContent.style.display = 'none';
            });

            transparentRadio.addEventListener('change', function() {
                // Show transparent content and hide others
                colorContent.style.display = 'none';
                imageContent.style.display = 'none';
                transparentContent.style.display = 'block';
            });

            $(document).ready(function() {
                // Add event listener to radio inputs
                $('input[type="radio"]').change(function() {
                    // Hide all forms
                    $('.form-container').hide();

                    // Show the selected form based on the value of the checked radio input
                    const selectedValue = $('input[type="radio"]:checked').val();
                    $('#' + selectedValue + '-form').show();
                });

                // Initially hide all forms except the one corresponding to the initially selected radio input
                const selectedValue = $('input[type="radio"]:checked').val();
                $('#' + selectedValue + '-form').show();
            });
        </script>
    @endpush
</x-app-layout>

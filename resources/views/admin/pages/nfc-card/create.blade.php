<x-admin-app-layout :title="'NFC Card Create'">

    <div class="test" id="kt_modal_create_app">
        <div class="modal-dialog modal-dialog-centered mw-900px">
            <div class="modal-content">
                <div class="modal-header">
                    <h2>Create App</h2>

                    <div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
                        <i class="ki-duotone ki-cross fs-1"><span class="path1"></span><span class="path2"></span></i>
                    </div>
                </div>

                <div class="modal-body py-lg-10 px-lg-10">
                    <div class="stepper stepper-pills stepper-column d-flex flex-column flex-xl-row flex-row-fluid"
                        id="kt_modal_create_app_stepper" data-kt-stepper="true">
                        <div
                            class="d-flex justify-content-center justify-content-xl-start flex-row-auto w-100 w-xl-300px">
                            <div class="stepper-nav ps-lg-10">
                                <div class="stepper-item current" data-kt-stepper-element="nav"
                                    data-kt-stepper-action="step">
                                    <div class="stepper-wrapper">
                                        <div class="stepper-icon w-40px h-40px">
                                            <i class="ki-duotone ki-check stepper-check fs-2"></i> <span
                                                class="stepper-number">1</span>
                                        </div>

                                        <div class="stepper-label">
                                            <h3 class="stepper-title">
                                                Details
                                            </h3>

                                            <div class="stepper-desc">
                                                Name your App
                                            </div>
                                        </div>
                                    </div>

                                    <div class="stepper-line h-40px"></div>
                                </div>

                                <div class="stepper-item" data-kt-stepper-element="nav" data-kt-stepper-action="step">
                                    <div class="stepper-wrapper">
                                        <div class="stepper-icon w-40px h-40px">
                                            <i class="ki-duotone ki-check stepper-check fs-2"></i> <span
                                                class="stepper-number">2</span>
                                        </div>

                                        <div class="stepper-label">
                                            <h3 class="stepper-title">
                                                Frameworks
                                            </h3>

                                            <div class="stepper-desc">
                                                Define your app framework
                                            </div>
                                        </div>
                                    </div>

                                    <div class="stepper-line h-40px"></div>
                                </div>

                                <div class="stepper-item" data-kt-stepper-element="nav" data-kt-stepper-action="step">
                                    <div class="stepper-wrapper">
                                        <div class="stepper-icon w-40px h-40px">
                                            <i class="ki-duotone ki-check stepper-check fs-2"></i> <span
                                                class="stepper-number">3</span>
                                        </div>

                                        <div class="stepper-label">
                                            <h3 class="stepper-title">
                                                Database
                                            </h3>

                                            <div class="stepper-desc">
                                                Select the app database type
                                            </div>
                                        </div>
                                    </div>

                                    <div class="stepper-line h-40px"></div>
                                </div>

                                <div class="stepper-item" data-kt-stepper-element="nav" data-kt-stepper-action="step">
                                    <div class="stepper-wrapper">
                                        <div class="stepper-icon w-40px h-40px">
                                            <i class="ki-duotone ki-check stepper-check fs-2"></i> <span
                                                class="stepper-number">4</span>
                                        </div>

                                        <div class="stepper-label">
                                            <h3 class="stepper-title">
                                                Billing
                                            </h3>

                                            <div class="stepper-desc">
                                                Provide payment details
                                            </div>
                                        </div>
                                    </div>

                                    <div class="stepper-line h-40px"></div>
                                </div>

                                <div class="stepper-item mark-completed" data-kt-stepper-element="nav"
                                    data-kt-stepper-action="step">
                                    <div class="stepper-wrapper">
                                        <div class="stepper-icon w-40px h-40px">
                                            <i class="ki-duotone ki-check stepper-check fs-2"></i> <span
                                                class="stepper-number">5</span>
                                        </div>

                                        <div class="stepper-label">
                                            <h3 class="stepper-title">
                                                Completed
                                            </h3>

                                            <div class="stepper-desc">
                                                Review and Submit
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="flex-row-fluid py-lg-5 px-lg-15">
                            <form class="form fv-plugins-bootstrap5 fv-plugins-framework" novalidate="novalidate"
                                id="kt_modal_create_app_form">
                                <div class="current" data-kt-stepper-element="content">
                                    <div class="w-100">
                                        <div class="fv-row mb-10 fv-plugins-icon-container">
                                            <label class="d-flex align-items-center fs-5 fw-semibold mb-2">
                                                <span class="required">App Name</span>


                                                <span class="ms-1" data-bs-toggle="tooltip"
                                                    aria-label="Specify your unique app name"
                                                    data-bs-original-title="Specify your unique app name"
                                                    data-kt-initialized="1">
                                                    <i class="ki-duotone ki-information-5 text-gray-500 fs-6"><span
                                                            class="path1"></span><span class="path2"></span><span
                                                            class="path3"></span></i></span> </label>

                                            <input type="text"
                                                class="form-control form-control-lg form-control-solid" name="name"
                                                placeholder="" value="">
                                            <div
                                                class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback">
                                            </div>
                                        </div>

                                        <div class="fv-row">
                                            <label class="d-flex align-items-center fs-5 fw-semibold mb-4">
                                                <span class="required">Category</span>


                                                <span class="ms-1" data-bs-toggle="tooltip"
                                                    aria-label="Select your app category"
                                                    data-bs-original-title="Select your app category"
                                                    data-kt-initialized="1">
                                                    <i class="ki-duotone ki-information-5 text-gray-500 fs-6"><span
                                                            class="path1"></span><span class="path2"></span><span
                                                            class="path3"></span></i></span> </label>

                                            <div class="fv-row fv-plugins-icon-container">
                                                <label class="d-flex flex-stack mb-5 cursor-pointer">
                                                    <span class="d-flex align-items-center me-2">
                                                        <span class="symbol symbol-50px me-6">
                                                            <span class="symbol-label bg-light-primary">
                                                                <i class="ki-duotone ki-compass fs-1 text-primary"><span
                                                                        class="path1"></span><span
                                                                        class="path2"></span></i> </span>
                                                        </span>

                                                        <span class="d-flex flex-column">
                                                            <span class="fw-bold fs-6">Quick Online Courses</span>

                                                            <span class="fs-7 text-muted">Creating a clear text
                                                                structure is just one SEO</span>
                                                        </span>
                                                    </span>

                                                    <span class="form-check form-check-custom form-check-solid">
                                                        <input class="form-check-input" type="radio"
                                                            name="category" value="1">
                                                    </span>
                                                </label>

                                                <label class="d-flex flex-stack mb-5 cursor-pointer">
                                                    <span class="d-flex align-items-center me-2">
                                                        <span class="symbol symbol-50px me-6">
                                                            <span class="symbol-label bg-light-danger  ">
                                                                <i class="ki-duotone ki-element-11 fs-1 text-danger"><span
                                                                        class="path1"></span><span
                                                                        class="path2"></span><span
                                                                        class="path3"></span><span
                                                                        class="path4"></span></i> </span>
                                                        </span>

                                                        <span class="d-flex flex-column">
                                                            <span class="fw-bold fs-6">Face to Face Discussions</span>

                                                            <span class="fs-7 text-muted">Creating a clear text
                                                                structure is just one aspect</span>
                                                        </span>
                                                    </span>

                                                    <span class="form-check form-check-custom form-check-solid">
                                                        <input class="form-check-input" type="radio"
                                                            name="category" value="2">
                                                    </span>
                                                </label>

                                                <label class="d-flex flex-stack cursor-pointer">
                                                    <span class="d-flex align-items-center me-2">
                                                        <span class="symbol symbol-50px me-6">
                                                            <span class="symbol-label bg-light-success">
                                                                <i class="ki-duotone ki-timer fs-1 text-success"><span
                                                                        class="path1"></span><span
                                                                        class="path2"></span><span
                                                                        class="path3"></span></i> </span>
                                                        </span>

                                                        <span class="d-flex flex-column">
                                                            <span class="fw-bold fs-6">Full Intro Training</span>

                                                            <span class="fs-7 text-muted">Creating a clear text
                                                                structure copywriting</span>
                                                        </span>
                                                    </span>

                                                    <span class="form-check form-check-custom form-check-solid">
                                                        <input class="form-check-input" type="radio"
                                                            name="category" value="3">
                                                    </span>
                                                </label>
                                                <div
                                                    class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div data-kt-stepper-element="content">
                                    <div class="w-100">
                                        <div class="fv-row fv-plugins-icon-container">
                                            <label class="d-flex align-items-center fs-5 fw-semibold mb-4">
                                                <span class="required">Select Framework</span>


                                                <span class="ms-1" data-bs-toggle="tooltip"
                                                    aria-label="Specify your apps framework"
                                                    data-bs-original-title="Specify your apps framework"
                                                    data-kt-initialized="1">
                                                    <i class="ki-duotone ki-information-5 text-gray-500 fs-6"><span
                                                            class="path1"></span><span class="path2"></span><span
                                                            class="path3"></span></i></span> </label>

                                            <label class="d-flex flex-stack cursor-pointer mb-5">
                                                <span class="d-flex align-items-center me-2">
                                                    <span class="symbol symbol-50px me-6">
                                                        <span class="symbol-label bg-light-warning">
                                                            <i class="ki-duotone ki-html fs-2x text-warning"><span
                                                                    class="path1"></span><span
                                                                    class="path2"></span></i>
                                                        </span>
                                                    </span>

                                                    <span class="d-flex flex-column">
                                                        <span class="fw-bold fs-6">HTML5</span>

                                                        <span class="fs-7 text-muted">Base Web Projec</span>
                                                    </span>
                                                </span>

                                                <span class="form-check form-check-custom form-check-solid">
                                                    <input class="form-check-input" type="radio" checked=""
                                                        name="framework" value="1">
                                                </span>
                                            </label>

                                            <label class="d-flex flex-stack cursor-pointer mb-5">
                                                <span class="d-flex align-items-center me-2">
                                                    <span class="symbol symbol-50px me-6">
                                                        <span class="symbol-label bg-light-success">
                                                            <i class="ki-duotone ki-react fs-2x text-success"><span
                                                                    class="path1"></span><span
                                                                    class="path2"></span></i>
                                                        </span>
                                                    </span>

                                                    <span class="d-flex flex-column">
                                                        <span class="fw-bold fs-6">ReactJS</span>
                                                        <span class="fs-7 text-muted">Robust and flexible app
                                                            framework</span>
                                                    </span>
                                                </span>

                                                <span class="form-check form-check-custom form-check-solid">
                                                    <input class="form-check-input" type="radio" name="framework"
                                                        value="2">
                                                </span>
                                            </label>

                                            <label class="d-flex flex-stack cursor-pointer mb-5">
                                                <span class="d-flex align-items-center me-2">
                                                    <span class="symbol symbol-50px me-6">
                                                        <span class="symbol-label bg-light-danger">
                                                            <i class="ki-duotone ki-angular fs-2x text-danger"><span
                                                                    class="path1"></span><span
                                                                    class="path2"></span><span
                                                                    class="path3"></span></i> </span>
                                                    </span>

                                                    <span class="d-flex flex-column">
                                                        <span class="fw-bold fs-6">Angular</span>
                                                        <span class="fs-7 text-muted">Powerful data mangement</span>
                                                    </span>
                                                </span>

                                                <span class="form-check form-check-custom form-check-solid">
                                                    <input class="form-check-input" type="radio" name="framework"
                                                        value="3">
                                                </span>
                                            </label>

                                            <label class="d-flex flex-stack cursor-pointer">
                                                <span class="d-flex align-items-center me-2">
                                                    <span class="symbol symbol-50px me-6">
                                                        <span class="symbol-label bg-light-primary">
                                                            <i class="ki-duotone ki-vue fs-2x text-primary"><span
                                                                    class="path1"></span><span
                                                                    class="path2"></span></i> </span>
                                                    </span>

                                                    <span class="d-flex flex-column">
                                                        <span class="fw-bold fs-6">Vue</span>
                                                        <span class="fs-7 text-muted">Lightweight and responsive
                                                            framework</span>
                                                    </span>
                                                </span>

                                                <span class="form-check form-check-custom form-check-solid">
                                                    <input class="form-check-input" type="radio" name="framework"
                                                        value="4">
                                                </span>
                                            </label>
                                            <div
                                                class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div data-kt-stepper-element="content">
                                    <div class="w-100">
                                        <div class="fv-row mb-10 fv-plugins-icon-container">
                                            <label class="required fs-5 fw-semibold mb-2">
                                                Database Name
                                            </label>

                                            <input type="text"
                                                class="form-control form-control-lg form-control-solid" name="dbname"
                                                placeholder="" value="master_db">
                                            <div
                                                class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback">
                                            </div>
                                        </div>

                                        <div class="fv-row fv-plugins-icon-container">
                                            <label class="d-flex align-items-center fs-5 fw-semibold mb-4">
                                                <span class="required">Select Database Engine</span>


                                                <span class="ms-1" data-bs-toggle="tooltip"
                                                    aria-label="Select your app database engine"
                                                    data-bs-original-title="Select your app database engine"
                                                    data-kt-initialized="1">
                                                    <i class="ki-duotone ki-information-5 text-gray-500 fs-6"><span
                                                            class="path1"></span><span class="path2"></span><span
                                                            class="path3"></span></i></span> </label>

                                            <label class="d-flex flex-stack cursor-pointer mb-5">
                                                <span class="d-flex align-items-center me-2">
                                                    <span class="symbol symbol-50px me-6">
                                                        <span class="symbol-label bg-light-success">
                                                            <i class="ki-duotone ki-note text-success fs-2x"><span
                                                                    class="path1"></span><span
                                                                    class="path2"></span></i>
                                                        </span>
                                                    </span>

                                                    <span class="d-flex flex-column">
                                                        <span class="fw-bold fs-6">MySQL</span>

                                                        <span class="fs-7 text-muted">Basic MySQL database</span>
                                                    </span>
                                                </span>

                                                <span class="form-check form-check-custom form-check-solid">
                                                    <input class="form-check-input" type="radio" name="dbengine"
                                                        checked="" value="1">
                                                </span>
                                            </label>

                                            <label class="d-flex flex-stack cursor-pointer mb-5">
                                                <span class="d-flex align-items-center me-2">
                                                    <span class="symbol symbol-50px me-6">
                                                        <span class="symbol-label bg-light-danger">
                                                            <i class="ki-duotone ki-google text-danger fs-2x"><span
                                                                    class="path1"></span><span
                                                                    class="path2"></span></i>
                                                        </span>
                                                    </span>

                                                    <span class="d-flex flex-column">
                                                        <span class="fw-bold fs-6">Firebase</span>

                                                        <span class="fs-7 text-muted">Google based app data
                                                            management</span>
                                                    </span>
                                                </span>

                                                <span class="form-check form-check-custom form-check-solid">
                                                    <input class="form-check-input" type="radio" name="dbengine"
                                                        value="2">
                                                </span>
                                            </label>

                                            <label class="d-flex flex-stack cursor-pointer">
                                                <span class="d-flex align-items-center me-2">
                                                    <span class="symbol symbol-50px me-6">
                                                        <span class="symbol-label bg-light-warning">
                                                            <i class="ki-duotone ki-microsoft text-warning fs-2x"><span
                                                                    class="path1"></span><span
                                                                    class="path2"></span><span
                                                                    class="path3"></span><span
                                                                    class="path4"></span></i>
                                                        </span>
                                                    </span>

                                                    <span class="d-flex flex-column">
                                                        <span class="fw-bold fs-6">DynamoDB</span>

                                                        <span class="fs-7 text-muted">Microsoft Fast NoSQL
                                                            Database</span>
                                                    </span>
                                                </span>

                                                <span class="form-check form-check-custom form-check-solid">
                                                    <input class="form-check-input" type="radio" name="dbengine"
                                                        value="3">
                                                </span>
                                            </label>
                                            <div
                                                class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div data-kt-stepper-element="content">
                                    <div class="w-100">
                                        <div class="d-flex flex-column mb-7 fv-row fv-plugins-icon-container">
                                            <label class="d-flex align-items-center fs-6 fw-semibold form-label mb-2">
                                                <span class="required">Name On Card</span>


                                                <span class="ms-1" data-bs-toggle="tooltip"
                                                    aria-label="Specify a card holder's name"
                                                    data-bs-original-title="Specify a card holder's name"
                                                    data-kt-initialized="1">
                                                    <i class="ki-duotone ki-information-5 text-gray-500 fs-6"><span
                                                            class="path1"></span><span class="path2"></span><span
                                                            class="path3"></span></i></span> </label>

                                            <input type="text" class="form-control form-control-solid"
                                                placeholder="" name="card_name" value="Max Doe">
                                            <div
                                                class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback">
                                            </div>
                                        </div>

                                        <div class="d-flex flex-column mb-7 fv-row fv-plugins-icon-container">
                                            <label class="required fs-6 fw-semibold form-label mb-2">Card
                                                Number</label>

                                            <div class="position-relative">
                                                <input type="text" class="form-control form-control-solid"
                                                    placeholder="Enter card number" name="card_number"
                                                    value="4111 1111 1111 1111">

                                                <div class="position-absolute translate-middle-y top-50 end-0 me-5">
                                                    <img src="/metronic8/demo1/assets/media/svg/card-logos/visa.svg"
                                                        alt="" class="h-25px">
                                                    <img src="/metronic8/demo1/assets/media/svg/card-logos/mastercard.svg"
                                                        alt="" class="h-25px">
                                                    <img src="/metronic8/demo1/assets/media/svg/card-logos/american-express.svg"
                                                        alt="" class="h-25px">
                                                </div>
                                            </div>
                                            <div
                                                class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback">
                                            </div>
                                        </div>

                                        <div class="row mb-10">
                                            <div class="col-md-8 fv-row">
                                                <label class="required fs-6 fw-semibold form-label mb-2">Expiration
                                                    Date</label>

                                                <div class="row fv-row fv-plugins-icon-container">
                                                    <div class="col-6">
                                                        <select name="card_expiry_month"
                                                            class="form-select form-select-solid select2-hidden-accessible"
                                                            data-control="select2" data-hide-search="true"
                                                            data-placeholder="Month"
                                                            data-select2-id="select2-data-9-uavu" tabindex="-1"
                                                            aria-hidden="true" data-kt-initialized="1">
                                                            <option data-select2-id="select2-data-11-40yl"></option>
                                                            <option value="1">1</option>
                                                            <option value="2">2</option>
                                                            <option value="3">3</option>
                                                            <option value="4">4</option>
                                                            <option value="5">5</option>
                                                            <option value="6">6</option>
                                                            <option value="7">7</option>
                                                            <option value="8">8</option>
                                                            <option value="9">9</option>
                                                            <option value="10">10</option>
                                                            <option value="11">11</option>
                                                            <option value="12">12</option>
                                                        </select><span
                                                            class="select2 select2-container select2-container--bootstrap5"
                                                            dir="ltr" data-select2-id="select2-data-10-ko13"
                                                            style="width: 100%;"><span class="selection"><span
                                                                    class="select2-selection select2-selection--single form-select form-select-solid"
                                                                    role="combobox" aria-haspopup="true"
                                                                    aria-expanded="false" tabindex="0"
                                                                    aria-disabled="false"
                                                                    aria-labelledby="select2-card_expiry_month-sc-container"
                                                                    aria-controls="select2-card_expiry_month-sc-container"><span
                                                                        class="select2-selection__rendered"
                                                                        id="select2-card_expiry_month-sc-container"
                                                                        role="textbox" aria-readonly="true"
                                                                        title="Month"><span
                                                                            class="select2-selection__placeholder">Month</span></span><span
                                                                        class="select2-selection__arrow"
                                                                        role="presentation"><b
                                                                            role="presentation"></b></span></span></span><span
                                                                class="dropdown-wrapper"
                                                                aria-hidden="true"></span></span>
                                                        <div
                                                            class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback">
                                                        </div>
                                                    </div>

                                                    <div class="col-6">
                                                        <select name="card_expiry_year"
                                                            class="form-select form-select-solid select2-hidden-accessible"
                                                            data-control="select2" data-hide-search="true"
                                                            data-placeholder="Year"
                                                            data-select2-id="select2-data-12-ki1h" tabindex="-1"
                                                            aria-hidden="true" data-kt-initialized="1">
                                                            <option data-select2-id="select2-data-14-w0dv"></option>
                                                            <option value="2024">2024</option>
                                                            <option value="2025">2025</option>
                                                            <option value="2026">2026</option>
                                                            <option value="2027">2027</option>
                                                            <option value="2028">2028</option>
                                                            <option value="2029">2029</option>
                                                            <option value="2030">2030</option>
                                                            <option value="2031">2031</option>
                                                            <option value="2032">2032</option>
                                                            <option value="2033">2033</option>
                                                            <option value="2034">2034</option>
                                                        </select><span
                                                            class="select2 select2-container select2-container--bootstrap5"
                                                            dir="ltr" data-select2-id="select2-data-13-budu"
                                                            style="width: 100%;"><span class="selection"><span
                                                                    class="select2-selection select2-selection--single form-select form-select-solid"
                                                                    role="combobox" aria-haspopup="true"
                                                                    aria-expanded="false" tabindex="0"
                                                                    aria-disabled="false"
                                                                    aria-labelledby="select2-card_expiry_year-76-container"
                                                                    aria-controls="select2-card_expiry_year-76-container"><span
                                                                        class="select2-selection__rendered"
                                                                        id="select2-card_expiry_year-76-container"
                                                                        role="textbox" aria-readonly="true"
                                                                        title="Year"><span
                                                                            class="select2-selection__placeholder">Year</span></span><span
                                                                        class="select2-selection__arrow"
                                                                        role="presentation"><b
                                                                            role="presentation"></b></span></span></span><span
                                                                class="dropdown-wrapper"
                                                                aria-hidden="true"></span></span>
                                                        <div
                                                            class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-4 fv-row fv-plugins-icon-container">
                                                <label
                                                    class="d-flex align-items-center fs-6 fw-semibold form-label mb-2">
                                                    <span class="required">CVV</span>


                                                    <span class="ms-1" data-bs-toggle="tooltip"
                                                        aria-label="Enter a card CVV code"
                                                        data-bs-original-title="Enter a card CVV code"
                                                        data-kt-initialized="1">
                                                        <i class="ki-duotone ki-information-5 text-gray-500 fs-6"><span
                                                                class="path1"></span><span
                                                                class="path2"></span><span
                                                                class="path3"></span></i></span> </label>

                                                <div class="position-relative">
                                                    <input type="text" class="form-control form-control-solid"
                                                        minlength="3" maxlength="4" placeholder="CVV"
                                                        name="card_cvv">

                                                    <div
                                                        class="position-absolute translate-middle-y top-50 end-0 me-3">
                                                        <i class="ki-duotone ki-credit-cart fs-2hx"><span
                                                                class="path1"></span><span class="path2"></span></i>
                                                    </div>
                                                </div>
                                                <div
                                                    class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="d-flex flex-stack">
                                            <div class="me-5">
                                                <label class="fs-6 fw-semibold form-label">Save Card for further
                                                    billing?</label>
                                                <div class="fs-7 fw-semibold text-muted">If you need more info, please
                                                    check budget planning</div>
                                            </div>

                                            <label class="form-check form-switch form-check-custom form-check-solid">
                                                <input class="form-check-input" type="checkbox" value="1"
                                                    checked="checked">
                                                <span class="form-check-label fw-semibold text-muted">
                                                    Save Card
                                                </span>
                                            </label>
                                        </div>

                                    </div>
                                </div>
                                <div data-kt-stepper-element="content">
                                    <div class="w-100 text-center">
                                        <h1 class="fw-bold text-gray-900 mb-3">Release!</h1>

                                        <div class="text-muted fw-semibold fs-3">
                                            Submit your app to kickstart your project.
                                        </div>

                                        <div class="text-center px-4 py-15">
                                            <img src="/metronic8/demo1/assets/media/illustrations/sketchy-1/9.png"
                                                alt="" class="mw-100 mh-300px">
                                        </div>
                                    </div>
                                </div>


                                <div class="d-flex flex-stack pt-10">
                                    <div class="me-2">
                                        <button type="button" class="btn btn-lg btn-light-primary me-3"
                                            data-kt-stepper-action="previous">
                                            <i class="ki-duotone ki-arrow-left fs-3 me-1"><span
                                                    class="path1"></span><span class="path2"></span></i> Back
                                        </button>
                                    </div>

                                    <div>
                                        <button type="button" class="btn btn-lg btn-primary"
                                            data-kt-stepper-action="submit">
                                            <span class="indicator-label">
                                                Submit
                                                <i class="ki-duotone ki-arrow-right fs-3 ms-2 me-0"><span
                                                        class="path1"></span><span class="path2"></span></i> </span>
                                            <span class="indicator-progress">
                                                Please wait... <span
                                                    class="spinner-border spinner-border-sm align-middle ms-2"></span>
                                            </span>
                                        </button>

                                        <button type="button" class="btn btn-lg btn-primary"
                                            data-kt-stepper-action="next">
                                            Continue
                                            <i class="ki-duotone ki-arrow-right fs-3 ms-1 me-0"><span
                                                    class="path1"></span><span class="path2"></span></i> </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @push('scripts')
        <script>
            // Initialize Stepper
            var stepper = new KTStepper(element);

            // Function to validate the current step
            function validateStep(step) {
                // Example validation: check if required fields are filled
                var inputs = step.querySelectorAll('input, textarea, select');
                for (var input of inputs) {
                    if (!input.checkValidity()) {
                        input.reportValidity();
                        return false;
                    }
                }
                return true;
            }

            // Handle navigation click
            stepper.on("kt.stepper.click", function(stepper) {
                var step = stepper.getStep(stepper.getClickedStepIndex());
                if (validateStep(step)) {
                    stepper.goTo(stepper.getClickedStepIndex()); // go to clicked step
                }
            });

            // Handle next step
            stepper.on("kt.stepper.next", function(stepper) {
                var step = stepper.getCurrentStep();
                if (validateStep(step)) {
                    stepper.goNext(); // go next step
                }
            });

            // Handle previous step
            stepper.on("kt.stepper.previous", function(stepper) {
                stepper.goPrevious(); // go previous step
            });
        </script>
    @endpush
</x-admin-app-layout>

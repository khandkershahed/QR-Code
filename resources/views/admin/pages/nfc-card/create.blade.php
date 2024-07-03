<x-admin-app-layout :title="'VCard Card Create'">
    <style>
        .nav-link {
            color: black;
            border: 1px solid #eee !important;
        }

        .tox:not([dir=rtl]) {
            direction: ltr;
            text-align: left;
            height: 300px !important;
        }

        .custom-radio {
            width: 285px !important;
            height: 280px !important;
        }

        .screen {
            display: block;
            width: 270px;
            height: 280px;
            overflow: hidden;
            position: relative;
            border-radius: 1px;
            margin: 0 auto;
        }

        .screen img {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: auto;
            z-index: 0;
            margin: 0;
            padding: 0;
            transition: top 3s ease;
            /* Transition top property with ease */
        }

        .screen:hover img {
            top: -100%;
            /* Scroll up by the full height of the image */
            transition: top 3s ease;
            /* Transition top property with ease */
        }

        .template-btn {
            display: flex;
            justify-content: center;
            align-items: center;
            width: 200px;
            /* Fixed width to match .screen */
            height: 250px;
            /* Fixed height to match .screen */
            margin: 10px;
            padding: 0;
            border: none;
        }

        .template-btn-check {
            position: absolute;
            opacity: 0;
            pointer-events: none;
        }
    </style>
    @if (session('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
    @endif

    <div class="row py-15 d-none">
        <h3>New VCard</h3>
        <div class="col-lg-12">
            <div class="card rounded-0">
                <div class="card-body ">
                    <div class="row">
                        <div class="col-lg-12">
                            <form class="kt_docs_formvalidation_text form" action="#" autocomplete="off">
                                <div class="row">
                                    <div class="fv-row col-6">
                                        <x-metronic.label class="required fw-semibold fs-6 mb-2">URL
                                            Alias</x-metronic.label>
                                        <div class="input-group">
                                            <button class="input-group-text" id="basic-addon3"><i
                                                    class="fa-solid fa-arrows-rotate"></i></button>
                                            <x-metronic.input type="text"
                                                class="form-control form-control-solid form-control-sm" name="url_alias"
                                                id="basic-url" name="url_alias" aria-describedby="basic-addon3"
                                                placeholder="my-vcard-page-url" />
                                        </div>
                                    </div>
                                    <div class="fv-row col-6">
                                        <x-metronic.label class="required fw-semibold fs-6 mb-2">VCard
                                            Name</x-metronic.label>
                                        <div class="input-group">
                                            <x-metronic.input type="text"
                                                class="form-control form-control-solid form-control-sm"
                                                name="vcard_name" name="vcard_name" placeholder="Enter VCard Name" />
                                        </div>
                                    </div>
                                    <div class="fv-row col-4">
                                        <x-metronic.label class="fw-semibold fs-6 mb-2">Occupation</x-metronic.label>
                                        <x-metronic.input type="text"
                                            class="form-control form-control-solid form-control-sm" name="occupation"
                                            placeholder="Enter Occupation Name" />
                                    </div>
                                    <div class="col-lg-4 mb-7">
                                        <x-metronic.label for="logo"
                                            class="fw-semibold fs-6 mb-2">{{ __('Profile Image') }}
                                        </x-metronic.label>
                                        <x-metronic.file-input id="logo" name="profile_img"
                                            class="form-control form-control-solid form-control-sm"
                                            :value="old('logo')"></x-metronic.file-input>
                                    </div>
                                    <div class="col-lg-4 mb-7">
                                        <x-metronic.label for="logo"
                                            class="fw-semibold fs-6 mb-2">{{ __('Cover Image ') }}
                                        </x-metronic.label>
                                        <x-metronic.file-input id="logo" name="cover_img"
                                            class="form-control form-control-solid form-control-sm"
                                            :value="old('logo')"></x-metronic.file-input>
                                    </div>
                                    <div class="col-lg-12 mb-7">
                                        <x-metronic.label for="logo"
                                            class="fw-semibold fs-6 mb-2">{{ __('Description') }}
                                        </x-metronic.label>
                                        <textarea id="kt_docs_tinymce_basic" name="kt_docs_tinymce_basic" class="tox-target" style="height: 150px;"></textarea>
                                    </div>

                                </div>
                                <button type="submit" class="kt_docs_formvalidation_text_submit btn btn-primary">
                                    <span class="indicator-label">
                                        <i class="fa-solid fa-door-open"></i> Save
                                    </span>
                                    <span class="indicator-progress">
                                        Please wait... <span
                                            class="spinner-border spinner-border-sm align-middle ms-2"></span>
                                    </span>
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="">
        <div class="row py-10">
            <div class="col-lg-2 ">
                <div class="custom-fixed-top">
                    <div class="d-flex flex-column flex-md-row rounded border bg-white">
                        <ul class="nav nav-tabs nav-pills flex-row border-0 flex-md-column mb-3 mb-md-0 fs-6 w-100"
                            role="tablist">
                            <li class="nav-item w-100 me-0 mb-md-2" role="presentation">
                                <a class="nav-link active w-100 btn btn-flex btn-active-info fs-6 fw-normal"
                                    data-bs-toggle="tab" href="#kt_vtab_pane_1" aria-selected="false" role="tab"
                                    tabindex="-1">
                                    <i class="fa-solid fa-circle-question"></i>
                                    General Information
                                </a>
                            </li>
                            <li class="nav-item w-100 me-0 mb-md-2" role="presentation">
                                <a class="nav-link w-100 btn btn-flex btn-active-info fs-6 fw-normal"
                                    data-bs-toggle="tab" href="#kt_vtab_pane_2" aria-selected="true" role="tab"><i
                                        class="fa-solid fa-id-badge"></i> vCard Templates</a>
                            </li>
                            <li class="nav-item w-100 me-0 mb-md-2" role="presentation">
                                <a class="nav-link w-100 btn btn-flex btn-active-info fs-6 fw-normal"
                                    data-bs-toggle="tab" href="#kt_vtab_pane_3" aria-selected="false" role="tab"
                                    tabindex="-1"><i class="fa-solid fa-business-time"></i> Business
                                    Hours</a>
                            </li>
                            <li class="nav-item w-100 me-0 mb-md-2" role="presentation">
                                <a class="nav-link w-100 btn btn-flex btn-active-info fs-6 fw-normal"
                                    data-bs-toggle="tab" href="#kt_vtab_pane_4" aria-selected="false" role="tab"
                                    tabindex="-1"><i class="fa-solid fa-qrcode"></i> Customize QR
                                    Code</a>
                            </li>
                            <li class="nav-item w-100 me-0 mb-md-2" role="presentation">
                                <a class="nav-link w-100 btn btn-flex btn-active-info fs-6 fw-normal"
                                    data-bs-toggle="tab" href="#kt_vtab_pane_5" aria-selected="false" role="tab"
                                    tabindex="-1"><i class="fa-solid fa-hammer"></i> Services</a>
                            </li>
                            <li class="nav-item w-100 me-0 mb-md-2" role="presentation">
                                <a class="nav-link w-100 btn btn-flex btn-active-info fs-6 fw-normal"
                                    data-bs-toggle="tab" href="#kt_vtab_pane_6" aria-selected="false" role="tab"
                                    tabindex="-1"><i class="fa-brands fa-product-hunt"></i> Products</a>
                            </li>
                            <li class="nav-item w-100 me-0 mb-md-2" role="presentation">
                                <a class="nav-link w-100 btn btn-flex btn-active-info fs-6 fw-normal"
                                    data-bs-toggle="tab" href="#kt_vtab_pane_7" aria-selected="false" role="tab"
                                    tabindex="-1"><i class="fa-solid fa-photo-film"></i>
                                    Galleries</a>
                            </li>
                            <li class="nav-item w-100 me-0 mb-md-2" role="presentation">
                                <a class="nav-link w-100 btn btn-flex btn-active-info fs-6 fw-normal"
                                    data-bs-toggle="tab" href="#kt_vtab_pane_8" aria-selected="false" role="tab"
                                    tabindex="-1"><i class="fa-brands fa-blogger"></i> Blogs</a>
                            </li>
                            <li class="nav-item w-100 me-0 mb-md-2" role="presentation">
                                <a class="nav-link w-100 btn btn-flex btn-active-info fs-6 fw-normal"
                                    data-bs-toggle="tab" href="#kt_vtab_pane_9" aria-selected="false" role="tab"
                                    tabindex="-1"><i class="fa-solid fa-comments"></i>
                                    Testimonials</a>
                            </li>
                            <li class="nav-item w-100 me-0 mb-md-2" role="presentation">
                                <a class="nav-link w-100 btn btn-flex btn-active-info fs-6 fw-normal"
                                    data-bs-toggle="tab" href="#kt_vtab_pane_10" aria-selected="false"
                                    role="tab" tabindex="-1"><i class="fa-solid fa-calendar-day"></i>
                                    Appointments</a>
                            </li>
                            <li class="nav-item w-100 me-0 mb-md-2" role="presentation">
                                <a class="nav-link w-100 btn btn-flex btn-active-info fs-6 fw-normal"
                                    data-bs-toggle="tab" href="#kt_vtab_pane_11" aria-selected="false"
                                    role="tab" tabindex="-1"><i class="fa-solid fa-share-from-square"></i>
                                    Social
                                    links - Website</a>
                            </li>
                            <li class="nav-item w-100 me-0 mb-md-2" role="presentation">
                                <a class="nav-link w-100 btn btn-flex btn-active-info fs-6 fw-normal"
                                    data-bs-toggle="tab" href="#kt_vtab_pane_12" aria-selected="false"
                                    role="tab" tabindex="-1"><i class="fa-solid fa-panorama"></i>
                                    Banner</a>
                            </li>
                            <li class="nav-item w-100 me-0 mb-md-2" role="presentation">
                                <a class="nav-link w-100 btn btn-flex btn-active-info fs-6 fw-normal"
                                    data-bs-toggle="tab" href="#kt_vtab_pane_13" aria-selected="false"
                                    role="tab" tabindex="-1"><i class="fa-solid fa-circle-exclamation"></i>
                                    Advanced</a>
                            </li>
                            <li class="nav-item w-100 me-0 mb-md-2" role="presentation">
                                <a class="nav-link w-100 btn btn-flex btn-active-info fs-6 fw-normal"
                                    data-bs-toggle="tab" href="#kt_vtab_pane_14" aria-selected="false"
                                    role="tab" tabindex="-1"><i class="fa-solid fa-font"></i>
                                    Fonts</a>
                            </li>
                            <li class="nav-item w-100 me-0 mb-md-2" role="presentation">
                                <a class="nav-link w-100 btn btn-flex btn-active-info fs-6 fw-normal"
                                    data-bs-toggle="tab" href="#kt_vtab_pane_15" aria-selected="false"
                                    role="tab" tabindex="-1"><i class="fa-solid fa-user-lock"></i> Privacy
                                    Policy</a>
                            </li>
                            <li class="nav-item w-100 me-0" role="presentation">
                                <a class="nav-link w-100 btn btn-flex btn-active-info fs-6 fw-normal"
                                    data-bs-toggle="tab" href="#kt_vtab_pane_16" aria-selected="false"
                                    role="tab" tabindex="-1"><i class="fa-solid fa-sliders"></i> Manage
                                    Section</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-10">
                <div class="tab-content bg-white p-5" id="myTabContent">
                    <div class="tab-pane fade active show" id="kt_vtab_pane_1" role="tabpanel">
                        <div>
                            <h1 class="text-start">Basic Details</h1>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <form class="kt_docs_formvalidation_text form" action="#" autocomplete="off">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="row">
                                                <div class="fv-row col-6">
                                                    <x-metronic.label class="required fw-semibold fs-6 mb-2">URL
                                                        Alias</x-metronic.label>
                                                    <div class="input-group">
                                                        <button class="input-group-text" id="basic-addon3"><i
                                                                class="fa-solid fa-arrows-rotate"></i></button>
                                                        <x-metronic.input type="text"
                                                            class="form-control form-control-solid form-control-sm"
                                                            name="url_alias" id="basic-url" name="url_alias"
                                                            aria-describedby="basic-addon3"
                                                            placeholder="my-vcard-page-url" />
                                                    </div>
                                                </div>
                                                <div class="fv-row col-6">
                                                    <x-metronic.label class="required fw-semibold fs-6 mb-2">VCard
                                                        Name</x-metronic.label>
                                                    <div class="input-group">
                                                        <x-metronic.input type="text"
                                                            class="form-control form-control-solid form-control-sm"
                                                            name="vcard_name" name="vcard_name"
                                                            placeholder="Enter VCard Name" />
                                                    </div>
                                                </div>
                                                <div class="fv-row col-12">
                                                    <x-metronic.label
                                                        class="fw-semibold fs-12 mb-2">Occupation</x-metronic.label>
                                                    <x-metronic.input type="text"
                                                        class="form-control form-control-solid form-control-sm"
                                                        name="occupation" placeholder="Enter Occupation Name" />
                                                </div>
                                                <div class="col-lg-12 mb-7">
                                                    <x-metronic.label for="logo"
                                                        class="fw-semibold fs-6 mb-2">{{ __('Profile Image') }}
                                                    </x-metronic.label>
                                                    <x-metronic.file-input id="logo" name="profile_img"
                                                        class="form-control form-control-solid form-control-sm"
                                                        :value="old('logo')"></x-metronic.file-input>
                                                </div>
                                                <div class="col-lg-12 mb-7">
                                                    <x-metronic.label for="logo"
                                                        class="fw-semibold fs-6 mb-2">{{ __('Cover Image ') }}
                                                    </x-metronic.label>
                                                    <x-metronic.file-input id="logo" name="cover_img"
                                                        class="form-control form-control-solid form-control-sm"
                                                        :value="old('logo')"></x-metronic.file-input>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="col-lg-12 mb-7">
                                                <x-metronic.label for="logo"
                                                    class="fw-semibold fs-6 mb-2">{{ __('Description') }}
                                                </x-metronic.label>
                                                <textarea id="kt_docs_tinymce_basic" name="kt_docs_tinymce_basic" class="tox-target" style="height: 150px;"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="separator separator-dashed separator-content border-info my-15">
                                        <i class="fa-solid fa-diamond fs-1 text-info"></i>
                                    </div>
                                    <div class="row">
                                        <div>
                                            <h1 class="text-start">VCard Details</h1>
                                        </div>
                                        <div class="fv-row col-3">
                                            <x-metronic.label class="required fw-semibold fs-6 mb-2">First
                                                Name</x-metronic.label>
                                            <x-metronic.input type="text"
                                                class="form-control form-control-solid form-control-sm"
                                                name="first_name" placeholder="Jone Robert" />
                                        </div>
                                        <div class="fv-row col-3">
                                            <x-metronic.label class="required fw-semibold fs-6 mb-2">Last
                                                Name</x-metronic.label>
                                            <x-metronic.input type="text"
                                                class="form-control form-control-solid form-control-sm"
                                                name="last_name" placeholder="Washington" />
                                        </div>
                                        <div class="fv-row col-3">
                                            <x-metronic.label
                                                class="required fw-semibold fs-6 mb-2">Email</x-metronic.label>
                                            <x-metronic.input type="email"
                                                class="form-control form-control-solid form-control-sm" name="email"
                                                placeholder="Washington@maill.com" />
                                        </div>
                                        <div class="fv-row col-3">
                                            <x-metronic.label class="fw-semibold fs-6 mb-2">Alternative
                                                Email</x-metronic.label>
                                            <x-metronic.input type="email"
                                                class="form-control form-control-solid form-control-sm"
                                                name="alternative_email" placeholder="Washington@maill.com" />
                                        </div>
                                        <div class="fv-row col-3">
                                            <x-metronic.label
                                                class="required fw-semibold fs-6 mb-2">Phone</x-metronic.label>
                                            <x-metronic.input type="text"
                                                class="form-control form-control-solid form-control-sm" name="phone"
                                                placeholder="(+1 05)" />
                                        </div>
                                        <div class="fv-row col-3">
                                            <x-metronic.label class="fw-semibold fs-6 mb-2">Alternative
                                                Phone</x-metronic.label>
                                            <x-metronic.input type="text"
                                                class="form-control form-control-solid form-control-sm"
                                                name="alternative_phone" placeholder="(+1 05)" />
                                        </div>
                                        <div class="fv-row col-3">
                                            <x-metronic.label class="fw-semibold fs-6 mb-2">Location</x-metronic.label>
                                            <x-metronic.input type="text"
                                                class="form-control form-control-solid form-control-sm"
                                                name="location" placeholder="Enter Location" />
                                        </div>
                                        <div class="fv-row col-3">
                                            <x-metronic.label class="fw-semibold fs-6 mb-2">Location
                                                URL</x-metronic.label>
                                            <x-metronic.input type="text"
                                                class="form-control form-control-solid form-control-sm"
                                                name="location_url" placeholder="Enter Location URl " />
                                        </div>
                                        <div class="fv-row col-3">
                                            <x-metronic.label class="fw-semibold fs-6 mb-2">Date Of
                                                Birth</x-metronic.label>
                                            <x-metronic.input type="date"
                                                class="form-control form-control-solid form-control-sm"
                                                name="date_of_birth" placeholder="Enter Date Of Birth " />
                                        </div>
                                        <div class="fv-row col-3">
                                            <x-metronic.label class="fw-semibold fs-6 mb-2">Company</x-metronic.label>
                                            <x-metronic.input type="text"
                                                class="form-control form-control-solid form-control-sm"
                                                name="compoany" placeholder="Enter Company Name " />
                                        </div>
                                        <div class="fv-row col-3">
                                            <x-metronic.label class="fw-semibold fs-6 mb-2">Job
                                                Title</x-metronic.label>
                                            <x-metronic.input type="text"
                                                class="form-control form-control-solid form-control-sm"
                                                name="job_title" placeholder="Enter Job Title " />
                                        </div>
                                        <div class="fv-row col-3">
                                            <x-metronic.label class="fw-semibold fs-6 mb-2">Default
                                                Language</x-metronic.label>
                                            <select class="form-select" data-control="select2"
                                                data-placeholder="English" name="date_of_birth">
                                                <option></option>
                                                <option value="1">China</option>
                                                <option value="2">Arabic</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="d-flex justify-content-end">
                                        <button type="submit"
                                            class="kt_docs_formvalidation_text_submit btn btn-primary mt-5">
                                            <span class="indicator-label">
                                                Save Data
                                            </span>
                                            <span class="indicator-progress">
                                                Please wait... <span
                                                    class="spinner-border spinner-border-sm align-middle ms-2"></span>
                                            </span>
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                    <div class="tab-pane fade" id="kt_vtab_pane_2" role="tabpanel">
                        <div>
                            <h1 class="text-center">vCard Templates</h1>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <form class="kt_docs_formvalidation_text form" action="#" autocomplete="off">
                                    <div class="row mt-10">
                                        <div class="col-lg-3 position-relative">
                                            <div>
                                                <input type="radio" class="btn-check template-btn-check"
                                                    name="template" value="apps" checked="checked"
                                                    id="kt_radio_buttons_2_option_1" />
                                                <label
                                                    class="btn template-btn btn-outline btn-outline-dashed btn-active-light-primary custom-active p-2 d-flex align-items-center mb-5 custom-radio"
                                                    for="kt_radio_buttons_2_option_1" style="">
                                                    <div class="screen mt-4 rounded-2">
                                                        <img class="img-fluid"
                                                            src="https://s.tmimgcdn.com/scr/55800/web-development-psd-template_55864-original.jpg">
                                                    </div>
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 position-relative">
                                            <div>
                                                <input type="radio" class="btn-check template-btn-check"
                                                    name="template" value="sms"
                                                    id="kt_radio_buttons_2_option_2" />
                                                <label
                                                    class="btn template-btn btn-outline btn-outline-dashed btn-active-light-primary custom-active p-2 d-flex align-items-center custom-radio"
                                                    for="kt_radio_buttons_2_option_2">
                                                    <div class="screen mt-4 rounded-2">
                                                        <img class="img-fluid"
                                                            src="https://cdn.designsmaz.com//wp-content/uploads/2014/10/Themepie-Free-One-Page-PSD-Web-Template.jpg">
                                                    </div>
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 position-relative">
                                            <div>
                                                <input type="radio" class="btn-check template-btn-check"
                                                    name="template" value="apps"
                                                    id="kt_radio_buttons_2_option_3" />
                                                <label
                                                    class="btn template-btn btn-outline btn-outline-dashed btn-active-light-primary custom-active p-2 d-flex align-items-center mb-5 custom-radio"
                                                    for="kt_radio_buttons_2_option_3">
                                                    <div class="screen mt-4 rounded-2">
                                                        <img class="img-fluid"
                                                            src="https://s.tmimgcdn.com/scr/55800/web-development-psd-template_55864-original.jpg">
                                                    </div>
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 position-relative">
                                            <div>
                                                <input type="radio" class="btn-check template-btn-check"
                                                    name="template" value="apps"
                                                    id="kt_radio_buttons_2_option_4" />
                                                <label
                                                    class="btn template-btn btn-outline btn-outline-dashed btn-active-light-primary custom-active p-2 d-flex align-items-center mb-5 custom-radio"
                                                    for="kt_radio_buttons_2_option_4">
                                                    <div class="screen mt-4 rounded-2">
                                                        <img class="img-fluid"
                                                            src="https://s.tmimgcdn.com/scr/55800/web-development-psd-template_55864-original.jpg">
                                                    </div>
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 position-relative">
                                            <div>
                                                <input type="radio" class="btn-check template-btn-check"
                                                    name="template" value="apps"
                                                    id="kt_radio_buttons_2_option_5" />
                                                <label
                                                    class="btn template-btn btn-outline btn-outline-dashed btn-active-light-primary custom-active p-2 d-flex align-items-center mb-5 custom-radio"
                                                    for="kt_radio_buttons_2_option_5">
                                                    <div class="screen mt-4 rounded-2">
                                                        <img class="img-fluid"
                                                            src="https://s.tmimgcdn.com/scr/55800/web-development-psd-template_55864-original.jpg">
                                                    </div>
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 position-relative">
                                            <div>
                                                <input type="radio" class="btn-check template-btn-check"
                                                    name="template" value="apps"
                                                    id="kt_radio_buttons_2_option_6" />
                                                <label
                                                    class="btn template-btn btn-outline btn-outline-dashed btn-active-light-primary custom-active p-2 d-flex align-items-center mb-5 custom-radio"
                                                    for="kt_radio_buttons_2_option_6">
                                                    <div class="screen mt-4 rounded-2">
                                                        <img class="img-fluid"
                                                            src="https://s.tmimgcdn.com/scr/55800/web-development-psd-template_55864-original.jpg">
                                                    </div>
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 position-relative">
                                            <div>
                                                <input type="radio" class="btn-check template-btn-check"
                                                    name="template" value="apps"
                                                    id="kt_radio_buttons_2_option_7" />
                                                <label
                                                    class="btn template-btn btn-outline btn-outline-dashed btn-active-light-primary custom-active p-2 d-flex align-items-center mb-5 custom-radio"
                                                    for="kt_radio_buttons_2_option_7">
                                                    <div class="screen mt-4 rounded-2">
                                                        <img class="img-fluid"
                                                            src="https://s.tmimgcdn.com/scr/55800/web-development-psd-template_55864-original.jpg">
                                                    </div>
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 position-relative">
                                            <div>
                                                <input type="radio" class="btn-check template-btn-check"
                                                    name="template" value="apps"
                                                    id="kt_radio_buttons_2_option_8" />
                                                <label
                                                    class="btn template-btn btn-outline btn-outline-dashed btn-active-light-primary custom-active p-2 d-flex align-items-center mb-5 custom-radio"
                                                    for="kt_radio_buttons_2_option_8">
                                                    <div class="screen mt-4 rounded-2">
                                                        <img class="img-fluid"
                                                            src="https://s.tmimgcdn.com/scr/55800/web-development-psd-template_55864-original.jpg">
                                                    </div>
                                                </label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="d-flex justify-content-end">
                                        <button type="submit"
                                            class="kt_docs_formvalidation_text_submit btn btn-primary mt-6">
                                            <span class="indicator-label">
                                                Save Template
                                            </span>
                                            <span class="indicator-progress">
                                                Please wait... <span
                                                    class="spinner-border spinner-border-sm align-middle ms-2"></span>
                                            </span>
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                    <div class="tab-pane fade" id="kt_vtab_pane_3" role="tabpanel">
                        <div>
                            <h1 class="text-center">Business
                                Hours</h1>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <form class="kt_docs_formvalidation_text form" action="#" autocomplete="off">
                                    <div class="row py-10">
                                        <div class="col-lg-6 mb-2">
                                            <div class="row border-info border-dashed border-1 gx-2 py-2 align-items-center px-3 rounded-2">
                                                <div class="col-lg-4">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox"
                                                            value="" id="flexCheckDefault" />
                                                        <label class="form-check-label" for="flexCheckDefault">
                                                            MONDAY
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4">
                                                    <label class="form-check-label" for="flexCheckDefault">
                                                        Start
                                                    </label>
                                                    <select class="form-select" data-control="select2"
                                                        data-placeholder="Select an option">
                                                        <option></option>
                                                        <option value="1">Option 1</option>
                                                        <option value="2">Option 2</option>
                                                    </select>
                                                </div>
                                                <div class="col-lg-4">
                                                    <label class="form-check-label" for="flexCheckDefault">
                                                        End
                                                    </label>
                                                    <select class="form-select" data-control="select2"
                                                        data-placeholder="Select an option">
                                                        <option></option>
                                                        <option value="1">Option 1</option>
                                                        <option value="2">Option 2</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 mb-2">
                                            <div class="row border-info border-dashed border-1 gx-2 py-2 align-items-center px-3 rounded-2">
                                                <div class="col-lg-4">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox"
                                                            value="" id="flexCheckDefault" />
                                                        <label class="form-check-label" for="flexCheckDefault">
                                                            TUESDAY
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4">
                                                    <label class="form-check-label" for="flexCheckDefault">
                                                        Start
                                                    </label>
                                                    <select class="form-select" data-control="select2"
                                                        data-placeholder="Select an option">
                                                        <option></option>
                                                        <option value="1">Option 1</option>
                                                        <option value="2">Option 2</option>
                                                    </select>
                                                </div>
                                                <div class="col-lg-4">
                                                    <label class="form-check-label" for="flexCheckDefault">
                                                        End
                                                    </label>
                                                    <select class="form-select" data-control="select2"
                                                        data-placeholder="Select an option">
                                                        <option></option>
                                                        <option value="1">Option 1</option>
                                                        <option value="2">Option 2</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 mb-2">
                                            <div class="row border-info border-dashed border-1 gx-2 py-2 align-items-center px-3 rounded-2">
                                                <div class="col-lg-4">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox"
                                                            value="" id="flexCheckDefault" />
                                                        <label class="form-check-label" for="flexCheckDefault">
                                                            WEDNESDAY
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4">
                                                    <label class="form-check-label" for="flexCheckDefault">
                                                        Start
                                                    </label>
                                                    <select class="form-select" data-control="select2"
                                                        data-placeholder="Select an option">
                                                        <option></option>
                                                        <option value="1">Option 1</option>
                                                        <option value="2">Option 2</option>
                                                    </select>
                                                </div>
                                                <div class="col-lg-4">
                                                    <label class="form-check-label" for="flexCheckDefault">
                                                        End
                                                    </label>
                                                    <select class="form-select" data-control="select2"
                                                        data-placeholder="Select an option">
                                                        <option></option>
                                                        <option value="1">Option 1</option>
                                                        <option value="2">Option 2</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 mb-2">
                                            <div class="row border-info border-dashed border-1 gx-2 py-2 align-items-center px-3 rounded-2">
                                                <div class="col-lg-4">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox"
                                                            value="" id="flexCheckDefault" />
                                                        <label class="form-check-label" for="flexCheckDefault">
                                                            THURSDAY
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4">
                                                    <label class="form-check-label" for="flexCheckDefault">
                                                        Start
                                                    </label>
                                                    <select class="form-select" data-control="select2"
                                                        data-placeholder="Select an option">
                                                        <option></option>
                                                        <option value="1">Option 1</option>
                                                        <option value="2">Option 2</option>
                                                    </select>
                                                </div>
                                                <div class="col-lg-4">
                                                    <label class="form-check-label" for="flexCheckDefault">
                                                        End
                                                    </label>
                                                    <select class="form-select" data-control="select2"
                                                        data-placeholder="Select an option">
                                                        <option></option>
                                                        <option value="1">Option 1</option>
                                                        <option value="2">Option 2</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 mb-2">
                                            <div class="row border-info border-dashed border-1 gx-2 py-2 align-items-center px-3 rounded-2">
                                                <div class="col-lg-4">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox"
                                                            value="" id="flexCheckDefault" />
                                                        <label class="form-check-label" for="flexCheckDefault">
                                                            FRIDAY
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4">
                                                    <label class="form-check-label" for="flexCheckDefault">
                                                        Start
                                                    </label>
                                                    <select class="form-select" data-control="select2"
                                                        data-placeholder="Select an option">
                                                        <option></option>
                                                        <option value="1">Option 1</option>
                                                        <option value="2">Option 2</option>
                                                    </select>
                                                </div>
                                                <div class="col-lg-4">
                                                    <label class="form-check-label" for="flexCheckDefault">
                                                        End
                                                    </label>
                                                    <select class="form-select" data-control="select2"
                                                        data-placeholder="Select an option">
                                                        <option></option>
                                                        <option value="1">Option 1</option>
                                                        <option value="2">Option 2</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 mb-2">
                                            <div class="row border-info border-dashed border-1 gx-2 py-2 align-items-center px-3 rounded-2">
                                                <div class="col-lg-4">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox"
                                                            value="" id="flexCheckDefault" />
                                                        <label class="form-check-label" for="flexCheckDefault">
                                                            SATURDAY
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4">
                                                    <label class="form-check-label" for="flexCheckDefault">
                                                        Start
                                                    </label>
                                                    <select class="form-select" data-control="select2"
                                                        data-placeholder="Select an option">
                                                        <option></option>
                                                        <option value="1">Option 1</option>
                                                        <option value="2">Option 2</option>
                                                    </select>
                                                </div>
                                                <div class="col-lg-4">
                                                    <label class="form-check-label" for="flexCheckDefault">
                                                        End
                                                    </label>
                                                    <select class="form-select" data-control="select2"
                                                        data-placeholder="Select an option">
                                                        <option></option>
                                                        <option value="1">Option 1</option>
                                                        <option value="2">Option 2</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 mb-2">
                                            <div class="row border-info border-dashed border-1 gx-2 py-2 align-items-center px-3 rounded-2">
                                                <div class="col-lg-4">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox"
                                                            value="" id="flexCheckDefault" />
                                                        <label class="form-check-label" for="flexCheckDefault">
                                                            SUNDAY
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4">
                                                    <label class="form-check-label" for="flexCheckDefault">
                                                        Start
                                                    </label>
                                                    <select class="form-select" data-control="select2"
                                                        data-placeholder="Select an option">
                                                        <option></option>
                                                        <option value="1">Option 1</option>
                                                        <option value="2">Option 2</option>
                                                    </select>
                                                </div>
                                                <div class="col-lg-4">
                                                    <label class="form-check-label" for="flexCheckDefault">
                                                        End
                                                    </label>
                                                    <select class="form-select" data-control="select2"
                                                        data-placeholder="Select an option">
                                                        <option></option>
                                                        <option value="1">Option 1</option>
                                                        <option value="2">Option 2</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <button type="submit" class="kt_docs_formvalidation_text_submit btn btn-primary">
                                        <span class="indicator-label">
                                            Validation Form
                                        </span>
                                        <span class="indicator-progress">
                                            Please wait... <span
                                                class="spinner-border spinner-border-sm align-middle ms-2"></span>
                                        </span>
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>

                    <div class="tab-pane fade" id="kt_vtab_pane_4" role="tabpanel">
                        <div>
                            <h1 class="text-center">Customize QR
                                Code</h1>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <form class="kt_docs_formvalidation_text form" action="#" autocomplete="off">
                                    <div class="fv-row">
                                        <label class="required fw-semibold fs-6 mb-2">Text Input</label>

                                        <input type="text" name="test2"
                                            class="form-control form-control-solid mb-3 mb-lg-0" placeholder=""
                                            value="" />
                                    </div>

                                    <button type="submit" class="kt_docs_formvalidation_text_submit btn btn-primary">
                                        <span class="indicator-label">
                                            Validation Form
                                        </span>
                                        <span class="indicator-progress">
                                            Please wait... <span
                                                class="spinner-border spinner-border-sm align-middle ms-2"></span>
                                        </span>
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>

                    <div class="tab-pane fade" id="kt_vtab_pane_5" role="tabpanel">
                        <div>
                            <h1 class="text-center">Services</h1>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <form class="kt_docs_formvalidation_text form" action="#" autocomplete="off">
                                    <div class="fv-row">
                                        <label class="required fw-semibold fs-6 mb-2">Text Input</label>

                                        <input type="text" name="test2"
                                            class="form-control form-control-solid mb-3 mb-lg-0" placeholder=""
                                            value="" />
                                    </div>

                                    <button type="submit" class="kt_docs_formvalidation_text_submit btn btn-primary">
                                        <span class="indicator-label">
                                            Validation Form
                                        </span>
                                        <span class="indicator-progress">
                                            Please wait... <span
                                                class="spinner-border spinner-border-sm align-middle ms-2"></span>
                                        </span>
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>

                    <div class="tab-pane fade" id="kt_vtab_pane_6" role="tabpanel">
                        <div>
                            <h1 class="text-center">Products</h1>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <form class="kt_docs_formvalidation_text form" action="#" autocomplete="off">
                                    <div class="fv-row">
                                        <label class="required fw-semibold fs-6 mb-2">Text Input</label>

                                        <input type="text" name="test2"
                                            class="form-control form-control-solid mb-3 mb-lg-0" placeholder=""
                                            value="" />
                                    </div>

                                    <button type="submit" class="kt_docs_formvalidation_text_submit btn btn-primary">
                                        <span class="indicator-label">
                                            Validation Form
                                        </span>
                                        <span class="indicator-progress">
                                            Please wait... <span
                                                class="spinner-border spinner-border-sm align-middle ms-2"></span>
                                        </span>
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>

                    <div class="tab-pane fade" id="kt_vtab_pane_7" role="tabpanel">
                        <div>
                            <h1 class="text-center">Galleries</h1>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <form class="kt_docs_formvalidation_text form" action="#" autocomplete="off">
                                    <div class="fv-row">
                                        <label class="required fw-semibold fs-6 mb-2">Text Input</label>

                                        <input type="text" name="test2"
                                            class="form-control form-control-solid mb-3 mb-lg-0" placeholder=""
                                            value="" />
                                    </div>

                                    <button type="submit" class="kt_docs_formvalidation_text_submit btn btn-primary">
                                        <span class="indicator-label">
                                            Validation Form
                                        </span>
                                        <span class="indicator-progress">
                                            Please wait... <span
                                                class="spinner-border spinner-border-sm align-middle ms-2"></span>
                                        </span>
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>

                    <div class="tab-pane fade" id="kt_vtab_pane_8" role="tabpanel">
                        <div>
                            <h1 class="text-center">Blogs</h1>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <form class="kt_docs_formvalidation_text form" action="#" autocomplete="off">
                                    <div class="fv-row">
                                        <label class="required fw-semibold fs-6 mb-2">Text Input</label>

                                        <input type="text" name="test2"
                                            class="form-control form-control-solid mb-3 mb-lg-0" placeholder=""
                                            value="" />
                                    </div>

                                    <button type="submit" class="kt_docs_formvalidation_text_submit btn btn-primary">
                                        <span class="indicator-label">
                                            Validation Form
                                        </span>
                                        <span class="indicator-progress">
                                            Please wait... <span
                                                class="spinner-border spinner-border-sm align-middle ms-2"></span>
                                        </span>
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>

                    <div class="tab-pane fade" id="kt_vtab_pane_9" role="tabpanel">
                        <div>
                            <h1 class="text-center">Testimonials</h1>
                        </div>
                    </div>

                    <div class="tab-pane fade" id="kt_vtab_pane_10" role="tabpanel">
                        <div>
                            <h1 class="text-center">Appointments</h1>
                        </div>
                    </div>

                    <div class="tab-pane fade" id="kt_vtab_pane_11" role="tabpanel">
                        <div>
                            <h1 class="text-center">Social
                                links - Website</h1>
                        </div>
                    </div>

                    <div class="tab-pane fade" id="kt_vtab_pane_12" role="tabpanel">
                        <div>
                            <h1 class="text-center">Banner</h1>
                        </div>
                    </div>

                    <div class="tab-pane fade" id="kt_vtab_pane_13" role="tabpanel">
                        <div>
                            <h1 class="text-center">Advanced</h1>
                        </div>
                    </div>

                    <div class="tab-pane fade" id="kt_vtab_pane_14" role="tabpanel">
                        <div>
                            <h1 class="text-center">Fonts</h1>
                        </div>
                    </div>

                    <div class="tab-pane fade" id="kt_vtab_pane_15" role="tabpanel">
                        <div>
                            <h1 class="text-center">Privacy
                                Policy</h1>
                        </div>
                    </div>

                    <div class="tab-pane fade" id="kt_vtab_pane_16" role="tabpanel">
                        <div>
                            <h1 class="text-center">Manage
                                Section</h1>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    @push('scripts')
        <script src="https://cdn.tiny.cloud/1/tv8ze2aprjlx1qoo8xnmh6r0e0w8hhgeukhe4esuhmhglca0/tinymce/7/tinymce.min.js"
            referrerpolicy="origin"></script>
        <script>
            // Define form elements
            const forms = document.querySelectorAll('.kt_docs_formvalidation_text');

            forms.forEach((form) => {
                // Init form validation rules
                var validator = FormValidation.formValidation(
                    form, {
                        fields: {
                            'url_alias': {
                                validators: {
                                    notEmpty: {
                                        message: 'NFC Live Url Need'
                                    }
                                }
                            },
                            'vcard_name': {
                                validators: {
                                    notEmpty: {
                                        message: 'Vcard Name Must Need'
                                    }
                                }
                            },
                            'first_name': {
                                validators: {
                                    notEmpty: {
                                        message: 'First Name Is Required'
                                    }
                                }
                            },
                            'last_name': {
                                validators: {
                                    notEmpty: {
                                        message: 'Last Name Is Required'
                                    }
                                }
                            },
                            'email': {
                                validators: {
                                    notEmpty: {
                                        message: 'Email Is Required'
                                    }
                                }
                            },
                            'phone': {
                                validators: {
                                    notEmpty: {
                                        message: 'Phone Is Required'
                                    }
                                }
                            },
                        },
                        plugins: {
                            trigger: new FormValidation.plugins.Trigger(),
                            bootstrap: new FormValidation.plugins.Bootstrap5({
                                rowSelector: '.fv-row',
                                eleInvalidClass: '',
                                eleValidClass: ''
                            })
                        }
                    }
                );

                // Submit button handler
                const submitButton = form.querySelector('.kt_docs_formvalidation_text_submit');
                submitButton.addEventListener('click', function(e) {
                    // Prevent default button action
                    e.preventDefault();

                    // Validate form before submit
                    if (validator) {
                        validator.validate().then(function(status) {
                            console.log('validated!');

                            if (status == 'Valid') {
                                // Show loading indication
                                submitButton.setAttribute('data-kt-indicator', 'on');

                                // Disable button to avoid multiple clicks
                                submitButton.disabled = true;

                                // Simulate form submission
                                setTimeout(function() {
                                    // Remove loading indication
                                    submitButton.removeAttribute('data-kt-indicator');

                                    // Enable button
                                    submitButton.disabled = false;

                                    // Show popup confirmation
                                    Swal.fire({
                                        text: "Form has been successfully submitted!",
                                        icon: "success",
                                        buttonsStyling: false,
                                        confirmButtonText: "Ok, got it!",
                                        customClass: {
                                            confirmButton: "btn btn-primary"
                                        }
                                    }).then(function() {
                                        console.log("Swal closed!");
                                        // Additional actions after Swal closes, if needed
                                    });

                                    //form.submit(); // Submit form
                                }, 2000);
                            } else {
                                Swal.fire({
                                    text: "Please fix the errors in the form before submitting.",
                                    icon: "error",
                                    buttonsStyling: false,
                                    confirmButtonText: "Ok, got it!",
                                    customClass: {
                                        confirmButton: "btn btn-primary"
                                    }
                                });
                            }
                        }).catch(function(error) {
                            console.error('Validation error:', error);
                            Swal.fire({
                                text: "An unexpected error occurred. Please try again.",
                                icon: "error",
                                buttonsStyling: false,
                                confirmButtonText: "Ok, got it!",
                                customClass: {
                                    confirmButton: "btn btn-primary"
                                }
                            });
                        });
                    }
                });
            });
        </script>
        <script>
            document.addEventListener("DOMContentLoaded", function() {
                tinymce.init({
                    selector: 'textarea',
                    plugins: 'anchor autolink charmap codesample emoticons image link lists media searchreplace table visualblocks wordcount checklist mediaembed casechange export formatpainter pageembed linkchecker a11ychecker tinymcespellchecker permanentpen powerpaste advtable advcode editimage advtemplate ai mentions tinycomments tableofcontents footnotes mergetags autocorrect typography inlinecss markdown',
                    toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link image media table mergetags | addcomment showcomments | spellcheckdialog a11ycheck typography | align lineheight | checklist numlist bullist indent outdent | emoticons charmap | removeformat',
                    tinycomments_mode: 'embedded',
                    tinycomments_author: 'Author name',
                    mergetags_list: [{
                            value: 'First.Name',
                            title: 'First Name'
                        },
                        {
                            value: 'Email',
                            title: 'Email'
                        },
                    ],
                    ai_request: (request, respondWith) => respondWith.string(() => Promise.reject(
                        "See docs to implement AI Assistant")),
                });

                var options = {
                    selector: "#kt_docs_tinymce_basic",
                    height: 300,
                    resize: true, // Ensure resizing is enabled
                    min_height: 300, // Set minimum height
                    max_height: 800 // Set maximum height
                };

                if (typeof KTThemeMode !== "undefined" && KTThemeMode.getMode() === "dark") {
                    options["skin"] = "oxide-dark";
                    options["content_css"] = "dark";
                }

                tinymce.init(options);
            });
        </script>
    @endpush
</x-admin-app-layout>

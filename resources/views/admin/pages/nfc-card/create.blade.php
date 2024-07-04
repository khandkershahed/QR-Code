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

    <div class="" >
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
                                    data-bs-toggle="tab" href="#kt_vtab_pane_9" aria-selected="false" role="tab"
                                    tabindex="-1"><i class="fa-solid fa-comments"></i>
                                    Testimonials</a>
                            </li>
                            <li class="nav-item w-100 me-0 mb-md-2" role="presentation">
                                <a class="nav-link w-100 btn btn-flex btn-active-info fs-6 fw-normal"
                                    data-bs-toggle="tab" href="#kt_vtab_pane_11" aria-selected="false"
                                    role="tab" tabindex="-1"><i class="fa-solid fa-share-from-square"></i>
                                    Social
                                    links - Website</a>
                            </li>
                            <li class="nav-item w-100 me-0" role="presentation">
                                <a class="nav-link w-100 btn btn-flex btn-active-info fs-6 fw-normal"
                                    data-bs-toggle="tab" href="#kt_vtab_pane_16" aria-selected="false"
                                    role="tab" tabindex="-1"><i class="fa-solid fa-sliders"></i> Setting
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
                            <h1 class="text-center">Business Hours</h1>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <form class="kt_docs_formvalidation_text form" action="#" autocomplete="off">
                                    <div class="row py-10">
                                        <div class="col-lg-6 mb-4 bg-light">
                                            <div
                                                class="row border-info border-dashed border-1 gx-2 py-2 align-items-center px-3 rounded-2">
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
                                        <div class="col-lg-6 mb-4 bg-light">
                                            <div
                                                class="row border-info border-dashed border-1 gx-2 py-2 align-items-center px-3 rounded-2">
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
                                        <div class="col-lg-6 mb-4 bg-light">
                                            <div
                                                class="row border-info border-dashed border-1 gx-2 py-2 align-items-center px-3 rounded-2">
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
                                        <div class="col-lg-6 mb-4 bg-light">
                                            <div
                                                class="row border-info border-dashed border-1 gx-2 py-2 align-items-center px-3 rounded-2">
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
                                        <div class="col-lg-6 mb-4 bg-light">
                                            <div
                                                class="row border-info border-dashed border-1 gx-2 py-2 align-items-center px-3 rounded-2">
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
                                        <div class="col-lg-6 mb-4 bg-light">
                                            <div
                                                class="row border-info border-dashed border-1 gx-2 py-2 align-items-center px-3 rounded-2">
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
                                        <div class="col-lg-6 mb-4 bg-light">
                                            <div
                                                class="row border-info border-dashed border-1 gx-2 py-2 align-items-center px-3 rounded-2">
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

                                    <div class="d-flex justify-content-end">
                                        <button type="submit"
                                            class="kt_docs_formvalidation_text_submit btn btn-primary">
                                            <span class="indicator-label">
                                                Save Business Hour
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

                    <div class="tab-pane fade" id="kt_vtab_pane_5" role="tabpanel">
                        <div>
                            <h1 class="text-center">Services</h1>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="d-flex flex-stack mb-5">
                                    <div class="d-flex align-items-center position-relative my-1">
                                        <i class="ki-duotone ki-magnifier fs-1 position-absolute ms-6"><span
                                                class="path1"></span><span class="path2"></span></i>
                                        <input type="text" data-kt-docs-table-filter="search"
                                            class="form-control form-control-solid w-250px ps-15"
                                            placeholder="Search Customers" />
                                    </div>

                                    <div class="d-flex justify-content-end" data-kt-docs-table-toolbar="base">
                                        {{-- <button type="button" class="btn btn-primary" data-bs-toggle="tooltip"
                                            title="Coming Soon">
                                            <i class="ki-duotone ki-plus fs-2"></i>
                                            Add Service
                                        </button> --}}
                                        <button type="button" class="btn btn-primary btn-lg" data-bs-toggle="modal"
                                            data-bs-target="#modalId">
                                            Add Service
                                        </button>
                                    </div>
                                    {{-- Add Service modal --}}
                                    <!-- if you want to close by clicking outside the modal, delete the last endpoint:data-bs-backdrop and data-bs-keyboard -->
                                    <div class="modal fade" id="modalId" tabindex="-1" data-bs-backdrop="static"
                                        data-bs-keyboard="false" role="dialog" aria-labelledby="modalTitleId"
                                        aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-md"
                                            role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="modalTitleId">
                                                        Add Service Form
                                                    </h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <form class="kt_docs_formvalidation_text form" action="#"
                                                        autocomplete="off">
                                                        <div class="fv-row">
                                                            <label class="required fw-semibold fs-6 mb-2">Service
                                                                Name</label>

                                                            <input type="text" name="service_name"
                                                                class="form-control form-control-solid mb-3 mb-lg-0"
                                                                placeholder="" value="" />
                                                        </div>
                                                        <div class="fv-row">
                                                            <label class="required fw-semibold fs-6 mb-2">Service
                                                                URL</label>

                                                            <input type="url" name="service_url"
                                                                class="form-control form-control-solid mb-3 mb-lg-0"
                                                                placeholder="" value="" />
                                                        </div>
                                                        <div class="fv-row">
                                                            <label class="fw-semibold fs-6 mb-2">Description</label>
                                                            <textarea name="description" class="form-control form-control-solid mb-3 mb-lg-0" id="" cols="30"
                                                                rows="3"></textarea>
                                                        </div>
                                                        <div class="fv-row">
                                                            <x-metronic.label for="logo"
                                                                class="col-form-label fw-bold fs-6 ">{{ __('Service Icon/Image') }}
                                                            </x-metronic.label>

                                                            <x-metronic.file-input id="logo" name="logo"
                                                                :value="old('logo')"></x-metronic.file-input>
                                                        </div>

                                                        <div class="d-flex justify-content-end mt-10">
                                                            <button type="submit"
                                                                class="kt_docs_formvalidation_text_submit btn btn-primary">
                                                                <span class="indicator-label">
                                                                    Create Service
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
                                    </div>
                                    {{-- Modal End --}}

                                </div>

                                <div class="table-responsive">
                                    <table id="kt_datatable_example_1"
                                        class="table align-middle table-row-dashed table-border fs-6 gy-5">
                                        <thead>
                                            <tr class="text-start text-gray-500 fw-bold fs-7 text-uppercase gs-0">
                                                <th class="w-10px pe-2">
                                                    <div
                                                        class="form-check form-check-sm form-check-custom form-check-solid me-3">
                                                        <input class="form-check-input" type="checkbox"
                                                            data-kt-check="true"
                                                            data-kt-check-target="#kt_datatable_example_1 .form-check-input"
                                                            value="1" />
                                                    </div>
                                                </th>
                                                <th>Sl</th>
                                                <th>ICON/IMAGE</th>
                                                <th>NAME</th>
                                                <th>SERVICE URL</th>
                                                <th>ACTION</th>
                                            </tr>
                                        </thead>
                                        <tbody class="text-gray-600 fw-semibold">
                                            <tr>
                                                <td>
                                                    <div
                                                        class="form-check form-check-sm form-check-custom form-check-solid me-3">
                                                        <input class="form-check-input" type="checkbox"
                                                            data-kt-check="true"
                                                            data-kt-check-target="#kt_datatable_example_1 .form-check-input"
                                                            value="1" />
                                                    </div>
                                                </td>
                                                <td>
                                                    1
                                                </td>
                                                <td>
                                                    <div>
                                                        <img class="img-fluid" width="50px" height="50px"
                                                            src="https://cdn.pixabay.com/photo/2015/06/10/16/36/mark-804938_640.jpg"
                                                            alt="">
                                                    </div>
                                                </td>
                                                <td>
                                                    <p class="mb-0">Jone Robert Bruno</p>
                                                </td>
                                                <td>
                                                    <a href="" class="text-primary">Service Url <i
                                                            class="fa-solid fa-link text-primary"></i></a>
                                                </td>
                                                <td>
                                                    <a href="" class="text-danger">Delete <i
                                                            class="fa-solid fa-trash text-danger"></i></a>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="tab-pane fade" id="kt_vtab_pane_6" role="tabpanel">
                        <div>
                            <h1 class="text-center">Products</h1>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="d-flex flex-stack mb-5">
                                    <div class="d-flex align-items-center position-relative my-1">
                                        <i class="ki-duotone ki-magnifier fs-1 position-absolute ms-6"><span
                                                class="path1"></span><span class="path2"></span></i>
                                        <input type="text" data-kt-docs-table-filter="search"
                                            class="form-control form-control-solid w-250px ps-15"
                                            placeholder="Search Customers" />
                                    </div>

                                    <div class="d-flex justify-content-end" data-kt-docs-table-toolbar="base">
                                        <button type="button" class="btn btn-primary btn-lg" data-bs-toggle="modal"
                                            data-bs-target="#modalIdproduct">
                                            Add Product
                                        </button>
                                    </div>
                                    {{-- Add Product modal --}}
                                    <!-- if you want to close by clicking outside the modal, delete the last endpoint:data-bs-backdrop and data-bs-keyboard -->
                                    <div class="modal fade" id="modalIdproduct" tabindex="-1"
                                        data-bs-backdrop="static" data-bs-keyboard="false" role="dialog"
                                        aria-labelledby="modalTitleIdproduct" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-lg"
                                            role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="modalTitleIdproduct">
                                                        Add Product Form
                                                    </h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <form class="kt_docs_formvalidation_text form row" action="#"
                                                        autocomplete="off">
                                                        <div class="fv-row">
                                                            <label class="required fw-semibold fs-6 mb-2">Product
                                                                Name</label>

                                                            <input type="text" name="product_name"
                                                                class="form-control form-control-solid mb-3 mb-lg-0"
                                                                placeholder="" value="" />
                                                        </div>
                                                        <div class="fv-row col-6">
                                                            <label
                                                                class="required fw-semibold fs-6 mb-2">Currency</label>
                                                            <select class="form-select" data-control="select2"
                                                                data-placeholder="Select an Currency">
                                                                <option></option>
                                                                <option value="1">Option 1</option>
                                                                <option value="2">Option 2</option>
                                                            </select>
                                                        </div>
                                                        <div class="fv-row col-6">
                                                            <label class="fw-semibold fs-6 mb-2">Price</label>
                                                            <input type="text" name="product_name"
                                                                class="form-control form-control-solid mb-3 mb-lg-0"
                                                                placeholder="" value="" />
                                                        </div>
                                                        <div class="fv-row">
                                                            <x-metronic.label for="logo"
                                                                class="col-form-label fw-bold fs-6 ">{{ __('Service Icon/Image') }}
                                                            </x-metronic.label>

                                                            <x-metronic.file-input id="logo" name="logo"
                                                                :value="old('logo')"></x-metronic.file-input>
                                                        </div>
                                                        <div class="fv-row">
                                                            <label class="required fw-semibold fs-6 mb-2">Product
                                                                Url</label>

                                                            <input type="text" name="product_name"
                                                                class="form-control form-control-solid mb-3 mb-lg-0"
                                                                placeholder="" value="" />
                                                        </div>
                                                        <div class="fv-row">
                                                            <label class="fw-semibold fs-6 mb-2">Description</label>
                                                            <textarea name="description" class="form-control form-control-solid mb-3 mb-lg-0" id="" cols="30"
                                                                rows="3"></textarea>
                                                        </div>

                                                        <div class="d-flex justify-content-end mt-10">
                                                            <button type="submit"
                                                                class="kt_docs_formvalidation_text_submit btn btn-primary">
                                                                <span class="indicator-label">
                                                                    Create Service
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
                                    </div>
                                    {{-- Modal End --}}

                                </div>

                                <div class="table-responsive">
                                    <table id="kt_datatable_example_1"
                                        class="table align-middle table-row-dashed table-border fs-6 gy-5">
                                        <thead>
                                            <tr class="text-start text-gray-500 fw-bold fs-7 text-uppercase gs-0">
                                                <th class="w-10px pe-2">
                                                    <div
                                                        class="form-check form-check-sm form-check-custom form-check-solid me-3">
                                                        <input class="form-check-input" type="checkbox"
                                                            data-kt-check="true"
                                                            data-kt-check-target="#kt_datatable_example_1 .form-check-input"
                                                            value="1" />
                                                    </div>
                                                </th>
                                                <th>Sl</th>
                                                <th>PRODUCT IMAGE</th>
                                                <th>PRODUCT NAME</th>
                                                <th>PRODUCT Price</th>
                                                <th>PRODUCT URL</th>
                                                <th>ACTION</th>
                                            </tr>
                                        </thead>
                                        <tbody class="text-gray-600 fw-semibold">
                                            <tr>
                                                <td>
                                                    <div
                                                        class="form-check form-check-sm form-check-custom form-check-solid me-3">
                                                        <input class="form-check-input" type="checkbox"
                                                            data-kt-check="true"
                                                            data-kt-check-target="#kt_datatable_example_1 .form-check-input"
                                                            value="1" />
                                                    </div>
                                                </td>
                                                <td>
                                                    1
                                                </td>
                                                <td>
                                                    <div>
                                                        <img class="img-fluid" width="50px" height="50px"
                                                            src="https://cdn.pixabay.com/photo/2015/06/10/16/36/mark-804938_640.jpg"
                                                            alt="">
                                                    </div>
                                                </td>
                                                <td>
                                                    <p class="mb-0">Jone Robert Bruno</p>
                                                </td>
                                                <td>
                                                    <p class="mb-0">$25</p>
                                                </td>
                                                <td>
                                                    <a href="" class="text-primary">Service Url <i
                                                            class="fa-solid fa-link text-primary"></i></a>
                                                </td>
                                                <td>
                                                    <a href="" class="text-danger">Delete <i
                                                            class="fa-solid fa-trash text-danger"></i></a>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="tab-pane fade" id="kt_vtab_pane_7" role="tabpanel">
                        <div>
                            <h1 class="text-center">Galleries</h1>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="d-flex flex-stack mb-5">
                                    <div class="d-flex align-items-center position-relative my-1">
                                        <i class="ki-duotone ki-magnifier fs-1 position-absolute ms-6"><span
                                                class="path1"></span><span class="path2"></span></i>
                                        <input type="text" data-kt-docs-table-filter="search"
                                            class="form-control form-control-solid w-250px ps-15"
                                            placeholder="Search Customers" />
                                    </div>

                                    <div class="d-flex justify-content-end" data-kt-docs-table-toolbar="base">
                                        <button type="button" class="btn btn-primary btn-lg" data-bs-toggle="modal"
                                            data-bs-target="#modalIdgallery">
                                            Add Gallery
                                        </button>
                                    </div>
                                    {{-- Add gallery modal --}}
                                    <!-- if you want to close by clicking outside the modal, delete the last endpoint:data-bs-backdrop and data-bs-keyboard -->
                                    <div class="modal fade" id="modalIdgallery" tabindex="-1"
                                        data-bs-backdrop="static" data-bs-keyboard="false" role="dialog"
                                        aria-labelledby="modalTitleIdgallery" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-lg"
                                            role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="modalTitleIdgallery">
                                                        Add Gallery Form
                                                    </h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <form class="kt_docs_formvalidation_text form row" action="#"
                                                        autocomplete="off">
                                                        <div class="fv-row">
                                                            <label class="required fw-semibold fs-6 mb-2">Gallery
                                                                Name</label>

                                                            <input type="text" name="gallery_name"
                                                                class="form-control form-control-solid mb-3 mb-lg-0"
                                                                placeholder="" value="" />
                                                        </div>
                                                        <div class="fv-row">
                                                            <x-metronic.label for="logo"
                                                                class="col-form-label fw-bold fs-6 ">{{ __('Gallary Image') }}
                                                            </x-metronic.label>

                                                            <x-metronic.file-input id="logo" name="logo"
                                                                :value="old('logo')"></x-metronic.file-input>
                                                        </div>
                                                        <div class="fv-row">
                                                            <label class="required fw-semibold fs-6 mb-2">Gallery
                                                                Video</label>

                                                            <input type="url" name="gallery_video_url"
                                                                class="form-control form-control-solid mb-3 mb-lg-0"
                                                                placeholder="" value="" />
                                                        </div>

                                                        <div class="d-flex justify-content-end mt-10">
                                                            <button type="submit"
                                                                class="kt_docs_formvalidation_text_submit btn btn-primary">
                                                                <span class="indicator-label">
                                                                    Upload Gallery
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
                                    </div>
                                    {{-- Modal End --}}

                                </div>

                                <div class="table-responsive">
                                    <table id="kt_datatable_example_1"
                                        class="table align-middle table-row-dashed table-border fs-6 gy-5">
                                        <thead>
                                            <tr class="text-start text-gray-500 fw-bold fs-7 text-uppercase gs-0">
                                                <th class="w-10px pe-2">
                                                    <div
                                                        class="form-check form-check-sm form-check-custom form-check-solid me-3">
                                                        <input class="form-check-input" type="checkbox"
                                                            data-kt-check="true"
                                                            data-kt-check-target="#kt_datatable_example_1 .form-check-input"
                                                            value="1" />
                                                    </div>
                                                </th>
                                                <th>Sl</th>
                                                <th>GALLERIES Name</th>
                                                <th>GALLERIES IMAGE</th>
                                                <th>ACTION</th>
                                            </tr>
                                        </thead>
                                        <tbody class="text-gray-600 fw-semibold">
                                            <tr>
                                                <td>
                                                    <div
                                                        class="form-check form-check-sm form-check-custom form-check-solid me-3">
                                                        <input class="form-check-input" type="checkbox"
                                                            data-kt-check="true"
                                                            data-kt-check-target="#kt_datatable_example_1 .form-check-input"
                                                            value="1" />
                                                    </div>
                                                </td>
                                                <td>
                                                    1
                                                </td>
                                                <td>
                                                    <p class="mb-0">Jone Robert Bruno</p>
                                                </td>
                                                <td>
                                                    <div>
                                                        <img class="img-fluid" width="50px" height="50px"
                                                            src="https://cdn.pixabay.com/photo/2015/06/10/16/36/mark-804938_640.jpg"
                                                            alt="">
                                                    </div>
                                                </td>
                                                <td>
                                                    <a href="" class="text-danger">Delete <i
                                                            class="fa-solid fa-trash text-danger"></i></a>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="tab-pane fade" id="kt_vtab_pane_9" role="tabpanel">
                        <div>
                            <h1 class="text-center">Testimonials</h1>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="d-flex flex-stack mb-5">
                                    <div class="d-flex align-items-center position-relative my-1">
                                        <i class="ki-duotone ki-magnifier fs-1 position-absolute ms-6"><span
                                                class="path1"></span><span class="path2"></span></i>
                                        <input type="text" data-kt-docs-table-filter="search"
                                            class="form-control form-control-solid w-250px ps-15"
                                            placeholder="Search Customers" />
                                    </div>

                                    <div class="d-flex justify-content-end" data-kt-docs-table-toolbar="base">
                                        <button type="button" class="btn btn-primary btn-lg" data-bs-toggle="modal"
                                            data-bs-target="#modalIdtestimonials">
                                            Add testimonials
                                        </button>
                                    </div>
                                    {{-- Add testimonials modal --}}
                                    <!-- if you want to close by clicking outside the modal, delete the last endpoint:data-bs-backdrop and data-bs-keyboard -->
                                    <div class="modal fade" id="modalIdtestimonials" tabindex="-1"
                                        data-bs-backdrop="static" data-bs-keyboard="false" role="dialog"
                                        aria-labelledby="modalTitleIdtestimonials" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-lg"
                                            role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="modalTitleIdtestimonials">
                                                        Add Testimonials Form
                                                    </h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <form class="kt_docs_formvalidation_text form row" action="#"
                                                        autocomplete="off">
                                                        <div class="fv-row">
                                                            <label class="required fw-semibold fs-6 mb-2">Person
                                                                Name</label>

                                                            <input type="text" name="testimonials_name"
                                                                class="form-control form-control-solid mb-3 mb-lg-0"
                                                                placeholder="" value="" />
                                                        </div>
                                                        <div class="fv-row">
                                                            <label class="required fw-semibold fs-6 mb-2">Person
                                                                Designation</label>

                                                            <input type="text" name="testimonials_name"
                                                                class="form-control form-control-solid mb-3 mb-lg-0"
                                                                placeholder="" value="" />
                                                        </div>
                                                        <div class="fv-row">
                                                            <label
                                                                class="required fw-semibold fs-6 mb-2">Description</label>
                                                            <textarea name="" id="" class="form-control form-control-solid mb-3 mb-lg-0" cols="30"
                                                                rows="10"></textarea>
                                                        </div>

                                                        <div class="d-flex justify-content-end mt-10">
                                                            <button type="submit"
                                                                class="kt_docs_formvalidation_text_submit btn btn-primary">
                                                                <span class="indicator-label">
                                                                    Upload Testimonials
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
                                    </div>
                                    {{-- Modal End --}}

                                </div>

                                <div class="table-responsive">
                                    <table id="kt_datatable_example_1"
                                        class="table align-middle table-row-dashed table-border fs-6 gy-5">
                                        <thead>
                                            <tr class="text-start text-gray-500 fw-bold fs-7 text-uppercase gs-0">
                                                <th class="w-10px pe-2">
                                                    <div
                                                        class="form-check form-check-sm form-check-custom form-check-solid me-3">
                                                        <input class="form-check-input" type="checkbox"
                                                            data-kt-check="true"
                                                            data-kt-check-target="#kt_datatable_example_1 .form-check-input"
                                                            value="1" />
                                                    </div>
                                                </th>
                                                <th>Sl</th>
                                                <th>NAME</th>
                                                <th>Designation</th>
                                                <th width="30%">Description</th>
                                                <th>ACTION</th>
                                            </tr>
                                        </thead>
                                        <tbody class="text-gray-600 fw-semibold">
                                            <tr>
                                                <td>
                                                    <div
                                                        class="form-check form-check-sm form-check-custom form-check-solid me-3">
                                                        <input class="form-check-input" type="checkbox"
                                                            data-kt-check="true"
                                                            data-kt-check-target="#kt_datatable_example_1 .form-check-input"
                                                            value="1" />
                                                    </div>
                                                </td>
                                                <td>
                                                    1
                                                </td>
                                                <td>
                                                    <p class="mb-0">Jone Robert Bruno</p>
                                                </td>
                                                <td>
                                                    <p class="mb-0">Broker</p>
                                                </td>
                                                <td>
                                                    <p class="mb-0">Lorem ipsum dolor sit amet, consectetur
                                                        adipisicing elit. Eos necessitatibus nemo veniam commodi. Vitae,
                                                        quod dolores provident minus molestias suscipit.</p>
                                                </td>
                                                <td>
                                                    <a href="" class="text-danger">Delete <i
                                                            class="fa-solid fa-trash text-danger"></i></a>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="tab-pane fade" id="kt_vtab_pane_11" role="tabpanel">
                        <div>
                            <h1 class="text-center">Social
                                links - Website</h1>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <form class="kt_docs_formvalidation_text form row" action="#"
                                    autocomplete="off">
                                    <div class="fv-row col-4 mb-3">
                                        <label class="fw-semibold fs-6 mb-2"> <i
                                                class="fs-3 fa-solid fa-globe pe-2"> WebSite URL</i></label>
                                        <input type="url" name="website_url"
                                            class="form-control form-control-solid mb-3 mb-lg-0"
                                            placeholder="WebSite URL" value="" />
                                    </div>
                                    <div class="fv-row col-4 mb-3">
                                        <label class="required fw-semibold fs-6 mb-2"> <i
                                                class="fs-3 fa-brands fa-facebook pe-2"></i> Facebook
                                            URL</label>
                                        <input type="url" name="facebook_url"
                                            class="form-control form-control-solid mb-3 mb-lg-0" placeholder=""
                                            value="" />
                                    </div>
                                    <div class="fv-row col-4 mb-3">
                                        <label class="fw-semibold fs-6 mb-2"> <i
                                                class="fs-3 fa-brands fa-twitter pe-2"></i> Twitter URL</label>
                                        <input type="url" name="twitter_url"
                                            class="form-control form-control-solid mb-3 mb-lg-0"
                                            placeholder="Twitter URL" value="" />
                                    </div>
                                    <div class="fv-row col-4 mb-3">
                                        <label class="fw-semibold fs-6 mb-2"> <i
                                                class="fs-3 fa-brands fa-instagram pe-2"></i> Instagram
                                            URL</label>
                                        <input type="url" name="instagram_url"
                                            class="form-control form-control-solid mb-3 mb-lg-0"
                                            placeholder="Instagram URL" value="" />
                                    </div>
                                    <div class="fv-row col-4 mb-3">
                                        <label class="fw-semibold fs-6 mb-2"> <i
                                                class="fs-3 fa-brands fa-youtube pe-2"></i> Youtube URL</label>
                                        <input type="url" name="youtube_url"
                                            class="form-control form-control-solid mb-3 mb-lg-0"
                                            placeholder="Youtube URL" value="" />
                                    </div>
                                    <div class="fv-row col-4 mb-3">
                                        <label class="fw-semibold fs-6 mb-2"> <i
                                                class="fs-3 fa-brands fa-linkedin pe-2"></i> Linkedin URL</label>
                                        <input type="url" name="linkedin_url"
                                            class="form-control form-control-solid mb-3 mb-lg-0"
                                            placeholder="Linkedin URL" value="" />
                                    </div>
                                    <div class="fv-row col-4 mb-3">
                                        <label class="required fw-semibold fs-6 mb-2"> <i
                                                class="fs-3 fa-brands fa-whatsapp pe-2"></i> What's App
                                            URL</label>
                                        <input type="url" name="whats_app_url"
                                            class="form-control form-control-solid mb-3 mb-lg-0"
                                            placeholder="What's App URL" value="" />
                                    </div>
                                    <div class="fv-row col-4 mb-3">
                                        <label class="fw-semibold fs-6 mb-2"><i
                                                class="fs-3 fa-brands fa-pinterest pe-2"></i>Printerest URL
                                        </label>
                                        <input type="url" name="preenterest_url"
                                            class="form-control form-control-solid mb-3 mb-lg-0"
                                            placeholder="Printerest URL" value="" />
                                    </div>
                                    <div class="fv-row col-4 mb-3">
                                        <label class="fw-semibold fs-6 mb-2"><i
                                                class="fs-3 fa-brands fa-tiktok pe-2"></i>Tiktok URL </label>
                                        <input type="url" name="tiktok_url"
                                            class="form-control form-control-solid mb-3 mb-lg-0"
                                            placeholder="Printerest URL" value="" />
                                    </div>
                                    <div class="fv-row col-4 mb-3">
                                        <label class="fw-semibold fs-6 mb-2"><i
                                                class="fs-3 fa-solid fa-envelope pe-2"></i>Gmail URL</label>
                                        <input type="url" name="gmail_url"
                                            class="form-control form-control-solid mb-3 mb-lg-0"
                                            placeholder="Gmail URL" value="" />
                                    </div>

                                    <div class="d-flex justify-content-end mt-10">
                                        <button type="submit"
                                            class="kt_docs_formvalidation_text_submit btn btn-primary">
                                            <span class="indicator-label">
                                                Save Socials
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
                    <div class="tab-pane fade" id="kt_vtab_pane_16" role="tabpanel">
                        <div>
                            <h1 class="text-center">Settings</h1>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <form class="kt_docs_formvalidation_text form" action="#" autocomplete="off">
                                    <!--begin::Row-->
                                    <div class="mb-5" data-kt-buttons="true"
                                        data-kt-buttons-target=".form-check-image, .form-check-input">
                                        <div class="row">
                                            <div class="col-4 mb-3">
                                                <label class="form-check-image border p-3 active">
                                                    <div class="form-check-wrapper">
                                                        <img class="img-fluid" style="height: 200px; object-fit: cover;"
                                                            src="https://img.freepik.com/free-vector/business-opening-hours-with-photo_23-2148821770.jpg?size=338&ext=jpg&ga=GA1.1.1546980028.1719619200&semt=ais_user" />
                                                    </div>

                                                    <div class="form-check form-check-custom form-check-solid my-5">
                                                        <input class="form-check-input" type="checkbox" checked
                                                            value="1" name="option2" />
                                                        <div class="form-check-label">
                                                            Business Hour
                                                        </div>
                                                    </div>
                                                </label>
                                            </div>
                                            <div class="col-4 mb-3">
                                                <label class="form-check-image border p-3">
                                                    <div class="form-check-wrapper">
                                                        <img class="img-fluid" style="width: 100%; height: 200px; object-fit: cover;"
                                                            src="https://images.ctfassets.net/ukazlt65o6hl/57KsUVgR3aMOiJdWafCJNv/a91282a079be9253d1cab82c937bcb2a/AdobeStock_251500673_1.png?w=1910&h=1276&q=70&fm=png" />
                                                    </div>

                                                    <div class="form-check form-check-custom form-check-solid my-5 me-10">
                                                        <input class="form-check-input" type="checkbox" value="1"
                                                            name="option2" id="text_wow" />
                                                        <div class="form-check-label">
                                                            Service
                                                        </div>
                                                    </div>
                                                </label>
                                            </div>
                                            <div class="col-4 mb-3">
                                                <label class="form-check-image border p-3">
                                                    <div class="form-check-wrapper">
                                                        <img class="img-fluid" style="height: 200px; object-fit: cover;"
                                                            src="https://www.mountaingoatsoftware.com/uploads/blog/2016-09-06-what-is-a-product.png" />
                                                    </div>

                                                    <div class="form-check form-check-custom form-check-solid my-5 me-10">
                                                        <input class="form-check-input" type="checkbox" value="1"
                                                            name="option2" />
                                                        <div class="form-check-label">
                                                            Product
                                                        </div>
                                                    </div>
                                                </label>
                                            </div>
                                            <div class="col-4 mb-3">
                                                <label class="form-check-image border p-3">
                                                    <div class="form-check-wrapper">
                                                        <img class="img-fluid" style="height: 200px; object-fit: cover;"
                                                            src="https://artgallery.yale.edu/sites/default/files/styles/hero_small/public/2023-01/ag-doc-2281-0036-pub.jpg?h=147a4df9&itok=uclO7OrF" />
                                                    </div>

                                                    <div class="form-check form-check-custom form-check-solid my-5 me-10">
                                                        <input class="form-check-input" type="checkbox" value="1"
                                                            name="option2" />
                                                        <div class="form-check-label">
                                                            Galleries
                                                        </div>
                                                    </div>
                                                </label>
                                            </div>
                                            <div class="col-4 mb-3">
                                                <label class="form-check-image border p-3">
                                                    <div class="form-check-wrapper">
                                                        <img class="img-fluid" style=" height: 200px; object-fit: cover;"
                                                            src="https://www.aihr.com/wp-content/uploads/employee-testimonial-examples-cover.png" />
                                                    </div>

                                                    <div class="form-check form-check-custom form-check-solid my-5 me-10">
                                                        <input class="form-check-input" type="checkbox" value="1"
                                                            name="option2" />
                                                        <div class="form-check-label">
                                                            Testimonial
                                                        </div>
                                                    </div>
                                                </label>
                                            </div>
                                            <div class="col-4 mb-3">
                                                <label class="form-check-image border p-3">
                                                    <div class="form-check-wrapper">
                                                        <img class="img-fluid" style=" height: 200px; object-fit: cover;"
                                                            src="https://lh3.googleusercontent.com/DK-JL2knP2hNlllW-1SqqNX8WvgqP9dlVHBXCFKfyfbhVcogKOoty4JCxVbGPEpjxPGQXQyCFh0CRN_4YflnnrCh=w640-h400-e365-rj-sc0x00ffffff" />
                                                    </div>

                                                    <div class="form-check form-check-custom form-check-solid my-5 me-10">
                                                        <input class="form-check-input" type="checkbox" value="1"
                                                            name="option2" />
                                                        <div class="form-check-label">
                                                            Social Link
                                                        </div>
                                                    </div>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <!--end::Row-->
                                    <div class="d-flex justify-content-end mt-10">
                                        <button type="submit"
                                            class="kt_docs_formvalidation_text_submit btn btn-primary">
                                            <span class="indicator-label">
                                                Save Socials
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
                            'test2': {
                                validators: {
                                    notEmpty: {
                                        message: 'test2'
                                    }
                                }
                            },
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
                            'service_url': {
                                validators: {
                                    notEmpty: {
                                        message: 'Service Url Is Required'
                                    }
                                }
                            },
                            'service_name': {
                                validators: {
                                    notEmpty: {
                                        message: 'Service Name Is Required'
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

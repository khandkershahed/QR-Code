{{-- Website Form Start --}}
<div class="text-center justify-content-center mt-5">
    <h2 class="text-center mb-0">Your NFC Card Details</h2>
    <p class="text-center mb-0">Fill The Form With Your Info & Go To The Next.</p>
</div>
<!--begin::Accordion-->
<div class="row">
    <div class="col-lg-12">
        <div class="card-body row">
            <ul class="nav nav-pills nav-pills-custom  col-lg-12 ps-4" role="tablist">
                <li class="nav-item mx-0 p-0" role="presentation">
                    <a class="nav-link d-flex justify-content-center w-100 border-0 h-100 active" data-bs-toggle="pill"
                        href="#kt_list_widget_10_tab_1" aria-selected="true" role="tab">
                        <span class="nav-text text-gray-800 fw-bold fs-6 mb-3">

                            Profile Area
                        </span>
                        <span
                            class="bullet-custom position-absolute z-index-2 bottom-0 w-100 h-4px bg-primary rounded"></span>
                    </a>
                </li>
                <li class="nav-item mx-0 px-0" role="presentation">

                    <a class="nav-link d-flex justify-content-center w-100 border-0 h-100" data-bs-toggle="pill"
                        href="#kt_list_widget_10_tab_2" aria-selected="false" role="tab" tabindex="-1">

                        <span class="nav-text text-gray-800 fw-bold fs-6 mb-3">
                            Bio Area
                        </span>
                        <span
                            class="bullet-custom position-absolute z-index-2 bottom-0 w-100 h-4px bg-primary rounded"></span>

                    </a>
                </li>
                <li class="nav-item mx-0 px-0" role="presentation">
                    <a class="nav-link d-flex justify-content-center w-100 border-0 h-100" data-bs-toggle="pill"
                        href="#kt_list_widget_10_tab_3" aria-selected="false" role="tab" tabindex="-1">
                        <span class="nav-text text-gray-800 fw-bold fs-6 mb-3">
                            Service Area
                        </span>
                        <span
                            class="bullet-custom position-absolute z-index-2 bottom-0 w-100 h-4px bg-primary rounded"></span>
                    </a>
                </li>
                <li class="nav-item mx-0 px-0" role="presentation">
                    <a class="nav-link d-flex justify-content-center w-100 border-0 h-100" data-bs-toggle="pill"
                        href="#kt_list_widget_10_tab_4" aria-selected="false" role="tab" tabindex="-1">
                        <span class="nav-text text-gray-800 fw-bold fs-6 mb-3">
                            Company Area
                        </span>
                        <span
                            class="bullet-custom position-absolute z-index-2 bottom-0 w-100 h-4px bg-primary rounded"></span>
                    </a>
                </li>
                <li class="nav-item mx-0 px-0" role="presentation">
                    <a class="nav-link d-flex justify-content-center w-100 border-0 h-100" data-bs-toggle="pill"
                        href="#kt_list_widget_10_tab_5" aria-selected="false" role="tab" tabindex="-1">
                        <span class="nav-text text-gray-800 fw-bold fs-6 mb-3">

                            Contact Area
                        </span>
                        <span
                            class="bullet-custom position-absolute z-index-2 bottom-0 w-100 h-4px bg-primary rounded"></span>
                    </a>
                </li>
                <span class="position-absolute z-index-1 bottom-0 w-100 h-4px bg-light rounded"></span>
            </ul>
            <div class="tab-content">
                <div class="tab-pane qr-info-form fade active show" id="kt_list_widget_10_tab_1" role="tabpanel">
                    <div class="row p-2">
                        <div class="col-lg-5">
                            <div class="fv-row my-3">
                                <x-metronic.label for="profile_image" class="form-label required">
                                    {{ __('Banner Image') }}</x-metronic.label>
                                <input id="profile_image" type="file" class="form-control" name="banner_image"
                                    onchange="previewBannerImage(this)" accept="image/*" />
                            </div>
                        </div>
                        <div class="col-lg-1 d-lg-block d-sm-none">
                            <div class="fv-row my-3">
                                <div>
                                    <img width="30px" height="30px" class="rounded-circle border banner_image mt-10"
                                        src="https://i.ibb.co/BNBTVN4/logo.png" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-5">
                            <div class="fv-row my-3">
                                <x-metronic.label for="profile_image"
                                    class="form-label required">{{ __('Profile Image') }}</x-metronic.label>
                                <input id="profile_image" type="file" class="form-control" name="profile_image"
                                    :value="old('profile_image')" onchange="previewprofileImage(this)"
                                    accept="image/*" />
                            </div>
                        </div>
                        <div class="col-lg-1 d-lg-block d-sm-none">
                            <div class="fv-row my-3">
                                <div>
                                    <img width="30px" height="30px" class="rounded-circle border profile_image mt-10"
                                        src="https://i.ibb.co/BNBTVN4/logo.png" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="fv-row my-3">
                                <x-metronic.label class="fw-semibold fs-6 mb-2 required">First Name</x-metronic.label>
                                <x-metronic.input type="text"  name="name" value="{{ old('first_name') }}"
                                    class="form-control form-control-solid mb-3 mb-lg-0" placeholder="Robert" />
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="fv-row my-3">
                                <x-metronic.label class="fw-semibold fs-6 mb-2">Last Name</x-metronic.label>
                                <x-metronic.input type="text" name="last_name" value="{{ old('last_name') }}"
                                    class="form-control form-control-solid mb-3 mb-lg-0" placeholder="Bruno" />
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="fv-row my-3">
                                <x-metronic.label class="fw-semibold fs-6 mb-2 required">Designation</x-metronic.label>
                                <x-metronic.input type="text" name="designation" value="{{ old('designation') }}"
                                    class="form-control form-control-solid mb-3 mb-lg-0"
                                    placeholder="Business Owner" />
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="fv-row my-3">
                                <x-metronic.label class="fw-semibold fs-6 mb-2">Phone Work</x-metronic.label>
                                <x-metronic.input type="text" name="phone_work" value="{{ old('phone_work') }}"
                                    class="form-control form-control-solid mb-3 mb-lg-0" placeholder="01*******" />
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="fv-row my-3">
                                <x-metronic.label class="fw-semibold fs-6 mb-2">Phone
                                    Personal</x-metronic.label>
                                <x-metronic.input type="text" name="phone_personal"
                                    value="{{ old('phone_personal') }}"
                                    class="form-control form-control-solid mb-3 mb-lg-0" placeholder="01*******" />
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="fv-row my-3">
                                <x-metronic.label class="fw-semibold fs-6 mb-2">Email Work</x-metronic.label>
                                <x-metronic.input type="email" name="email_work" value="{{ old('email_work') }}"
                                    class="form-control form-control-solid mb-3 mb-lg-0"
                                    placeholder="work@mail.com" />
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="fv-row my-3">
                                <x-metronic.label class="fw-semibold fs-6 mb-2">Email
                                    Personal</x-metronic.label>
                                <x-metronic.input type="email" name="email_personal"
                                    value="{{ old('email_personal') }}"
                                    class="form-control form-control-solid mb-3 mb-lg-0"
                                    placeholder="personal@mail.com" />
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="fv-row my-3">
                                <x-metronic.label
                                    class="fw-semibold fs-6 mb-2 required">House/Road/City</x-metronic.label>
                                <x-metronic.input type="text" name="address_line_one"
                                    value="{{ old('address_line_one') }}"
                                    class="form-control form-control-solid mb-3 mb-lg-0"
                                    placeholder="New York City" />
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="fv-row my-3">
                                <x-metronic.label class="fw-semibold fs-6 mb-2">State/Country</x-metronic.label>
                                <x-metronic.input type="text" name="address_line_two"
                                    value="{{ old('address_line_two') }}"
                                    class="form-control form-control-solid mb-3 mb-lg-0" placeholder="USA" />
                            </div>
                        </div>
                    </div>
                </div>

                <div class="tab-pane qr-info-form fade" id="kt_list_widget_10_tab_2" role="tabpanel">
                    <div class="row p-2">
                        <div class="col-lg-12">
                            <div class="fv-row my-3">
                                <x-metronic.label class="fw-semibold fs-6 mb-2">Bio Title</x-metronic.label>
                                <x-metronic.input type="text" name="bio_title" value="{{ old('bio_title') }}"
                                    class="form-control form-control-solid mb-3 mb-lg-0" placeholder="BIO" />
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="fv-row my-3">
                                <x-metronic.label class="fw-semibold fs-6 mb-2">Bio Description</x-metronic.label>
                                <textarea class="form-control form-control-solid" rows="5" name="bio_description"
                                    value="{{ old('bio_description') }}" placeholder="Enter Description"></textarea>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane qr-info-form fade" id="kt_list_widget_10_tab_3" role="tabpanel">
                    <div class="row p-2">
                        <div class="col-lg-12">
                            <div class="fv-row my-3">
                                <x-metronic.label class="fw-semibold fs-6 mb-2">Service Section
                                    Title</x-metronic.label>
                                <x-metronic.input type="text" name="service_section_title"
                                    value="{{ old('service_section_title') }}"
                                    class="form-control form-control-outline mb-3 mb-lg-0" placeholder="Service" />
                            </div>
                        </div>

                        <div class="col-lg-12">
                            <div class="fv-row my-3">
                                <x-metronic.label class="fw-semibold fs-6 mb-2">Service Section
                                    Description</x-metronic.label>
                                <textarea class="form-control form-control-outline" rows="3" name="service_section_description"
                                    value="{{ old('service_section_description') }}" placeholder="Enter Comment"></textarea>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="d-flex flex-column flex-md-row rounded border">
                                <ul class="nav nav-tabs nav-pills flex-row border-0 flex-md-column me-5 mb-3 mb-md-0 fs-6 min-w-lg-200px bg-white"
                                    role="tablist">
                                    <li class="nav-item w-100 mx-0 mb-2" role="presentation">
                                        <a class="nav-link w-100 btn btn-flex btn-active-primary rounded-0 active"
                                            data-bs-toggle="tab" href="#kt_vtab_pane_4" aria-selected="true"
                                            role="tab">
                                            <i class="fas fa-arrow-right-long  text-active-primary pe-3"></i>
                                            <span class="d-flex flex-column align-items-start">
                                                <span class="fs-4 fw-bold">Service One</span>
                                                <span class="fs-7">Add Your Services</span>
                                            </span>
                                        </a>
                                    </li>
                                    <li class="nav-item w-100 mx-0 mb-2" role="presentation">
                                        <a class="nav-link w-100 btn btn-flex btn-active-primary rounded-0"
                                            data-bs-toggle="tab" href="#kt_vtab_pane_5" aria-selected="false"
                                            role="tab" tabindex="-1">
                                            <i class="fas fa-arrow-right-long  text-active-primary pe-3"></i>
                                            <span class="d-flex flex-column align-items-start">
                                                <span class="fs-4 fw-bold">Service Two</span>
                                                <span class="fs-7">Add Your Services</span>
                                            </span>
                                        </a>
                                    </li>
                                    <li class="nav-item w-100 mx-0 mb-2" role="presentation">
                                        <a class="nav-link w-100 btn btn-flex btn-active-primary rounded-0"
                                            data-bs-toggle="tab" href="#kt_vtab_pane_6" aria-selected="false"
                                            role="tab" tabindex="-1">
                                            <i class="fas fa-arrow-right-long  text-active-primary pe-3"></i>
                                            <span class="d-flex flex-column align-items-start">
                                                <span class="fs-4 fw-bold">Service Three</span>
                                                <span class="fs-7">Add Your Services</span>
                                            </span>
                                        </a>
                                    </li>
                                </ul>

                                <div class="tab-content" id="myTabContent">
                                    <div class="tab-pane bg-white fade active show" id="kt_vtab_pane_4"
                                        role="tabpanel">
                                        <div class="row p-3">
                                            <div class="col-lg-6">
                                                <div class="fv-row my-3">
                                                    <x-metronic.label class="fw-semibold fs-6 mb-2"> One
                                                        Title</x-metronic.label>
                                                    <x-metronic.input type="text" name="service_one_title"
                                                        value="{{ old('service_one_title') }}"
                                                        class="form-control form-control-solid mb-3 mb-lg-0"
                                                        placeholder="Web Developement" />
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="fv-row my-3">
                                                    <x-metronic.label class="fw-semibold fs-6 mb-2"> One
                                                        Image</x-metronic.label>
                                                    <x-metronic.input type="file" name="service_one_image"
                                                        value="{{ old('service_one_image') }}"
                                                        class="form-control form-control-solid mb-3 mb-lg-0"
                                                        placeholder="Web Developement" />
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="fv-row my-3">
                                                    <x-metronic.label class="fw-semibold fs-6 mb-2"> One
                                                        Description</x-metronic.label>
                                                    <textarea class="form-control form-control-solid" rows="3" name="service_one_description"
                                                        value="{{ old('service_one_description') }}" placeholder="Enter Comment"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="tab-pane bg-white fade" id="kt_vtab_pane_5" role="tabpanel">
                                        <div class="row p-3">
                                            <div class="col-lg-6">
                                                <div class="fv-row my-3">
                                                    <x-metronic.label class="fw-semibold fs-6 mb-2"> Two
                                                        Title</x-metronic.label>
                                                    <x-metronic.input type="text" name="service_two_title"
                                                        value="{{ old('service_two_title') }}"
                                                        class="form-control form-control-solid mb-3 mb-lg-0"
                                                        placeholder="Web Developement" />
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="fv-row my-3">
                                                    <x-metronic.label class="fw-semibold fs-6 mb-2"> Two
                                                        Image</x-metronic.label>
                                                    <x-metronic.input type="file" name="service_two_image"
                                                        value="{{ old('service_two_image') }}"
                                                        class="form-control form-control-solid mb-3 mb-lg-0"
                                                        placeholder="Web Developement" />
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="fv-row my-3">
                                                    <x-metronic.label class="fw-semibold fs-6 mb-2"> Two
                                                        Description</x-metronic.label>
                                                    <textarea class="form-control form-control-solid" rows="3" name="service_two_description"
                                                        value="{{ old('service_two_description') }}" placeholder="Enter Comment"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="tab-pane bg-white fade" id="kt_vtab_pane_6" role="tabpanel">
                                        <div class="row p-3"
                                            style="border: 1px dashed #eee; background-color: #f5f8fa47 !important;">
                                            <div class="col-lg-6">
                                                <div class="fv-row my-3">
                                                    <x-metronic.label class="fw-semibold fs-6 mb-2"> Three
                                                        Title</x-metronic.label>
                                                    <x-metronic.input type="text" name="service_three_title"
                                                        value="{{ old('service_three_title') }}"
                                                        class="form-control form-control-solid mb-3 mb-lg-0"
                                                        placeholder="Web Developement" />
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="fv-row my-3">
                                                    <x-metronic.label class="fw-semibold fs-6 mb-2"> Three
                                                        Image</x-metronic.label>
                                                    <x-metronic.input type="file" name="service_three_image"
                                                        value="{{ old('service_three_image') }}"
                                                        class="form-control form-control-solid mb-3 mb-lg-0"
                                                        placeholder="Web Developement" />
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="fv-row my-3">
                                                    <x-metronic.label class="fw-semibold fs-6 mb-2"> Three
                                                        Description</x-metronic.label>
                                                    <textarea class="form-control form-control-solid" rows="3" name="service_three_description"
                                                        value="{{ old('service_three_description') }}" placeholder="Enter Comment"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane qr-info-form fade" id="kt_list_widget_10_tab_4" role="tabpanel">
                    <div class="row p-2">
                        <div class="col-lg-4">
                            <div class="fv-row my-3">
                                <x-metronic.label class="fw-semibold fs-6 mb-2">Company Title</x-metronic.label>
                                <x-metronic.input type="text" name="company_title"
                                    value="{{ old('company_title') }}"
                                    class="form-control form-control-solid   mb-3 mb-lg-0" placeholder="Company" />
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="fv-row my-3">
                                <x-metronic.label class="fw-semibold fs-6 mb-2">Company Name</x-metronic.label>
                                <x-metronic.input type="text" name="company_name"
                                    value="{{ old('company_name') }}"
                                    class="form-control form-control-solid mb-3 mb-lg-0"
                                    placeholder="Your Company Name" />
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="fv-row my-3">
                                <x-metronic.label class="fw-semibold fs-6 mb-2">Company About
                                    Title</x-metronic.label>
                                <x-metronic.input type="text" name="company_about_title"
                                    value="{{ old('company_about_title') }}"
                                    class="form-control form-control-solid mb-3 mb-lg-0" placeholder="About" />
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="fv-row my-3">
                                <x-metronic.label class="fw-semibold fs-6 mb-2">
                                    House/Road/City</x-metronic.label>
                                <x-metronic.input type="text" name="company_address_line_one"
                                    value="{{ old('company_address_line_one') }}"
                                    class="form-control form-control-solid mb-3 mb-lg-0"
                                    placeholder="257/A, San-fca Calefornia," />
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="fv-row my-3">
                                <x-metronic.label class="fw-semibold fs-6 mb-2">
                                    State/Country</x-metronic.label>
                                <x-metronic.input type="text" name="company_address_line_two"
                                    value="{{ old('company_address_line_two') }}"
                                    class="form-control form-control-solid mb-3 mb-lg-0" placeholder="USA" />
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="fv-row my-3">
                                <x-metronic.label class="fw-semibold fs-6 mb-2"> Phone</x-metronic.label>
                                <x-metronic.input type="text" name="company_phone"
                                    value="{{ old('company_phone') }}"
                                    class="form-control form-control-solid mb-3 mb-lg-0"
                                    placeholder="Company Phone Number" />
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="fv-row my-3">
                                <x-metronic.label class="fw-semibold fs-6 mb-2">Company Email</x-metronic.label>
                                <x-metronic.input type="email" name="company_email"
                                    value="{{ old('company_email') }}"
                                    class="form-control form-control-solid mb-3 mb-lg-0"
                                    placeholder="info@companyemail.com" />
                            </div>
                        </div>
                        <div class="col-lg-12   ">
                            <div class="fv-row my-3">
                                <x-metronic.label class="fw-semibold fs-6 mb-2">Company About
                                    Description</x-metronic.label>
                                <textarea class="form-control form-control-outline" rows="3" name="company_about_description"
                                    value="{{ old('company_about_description') }}" placeholder="Enter Comment"></textarea>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane qr-info-form fade" id="kt_list_widget_10_tab_5" role="tabpanel">
                    <div class="row p-2">
                        <div class="col-lg-4">
                            <div class="fv-row my-3">
                                <x-metronic.label class="fw-semibold fs-6 mb-2">Facebook URL</x-metronic.label>
                                <x-metronic.input type="url" name="facebook_url"
                                    value="{{ old('facebook_url') }}"
                                    class="form-control form-control-solid mb-3 mb-lg-0" placeholder="Facebook URL" />
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="fv-row my-3">
                                <x-metronic.label class="fw-semibold fs-6 mb-2">Instagram URL</x-metronic.label>
                                <x-metronic.input type="url" name="instagram_url"
                                    value="{{ old('instagram_url') }}"
                                    class="form-control form-control-solid mb-3 mb-lg-0"
                                    placeholder="Instagram URL" />
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="fv-row my-3">
                                <x-metronic.label class="fw-semibold fs-6 mb-2">Twitter URL</x-metronic.label>
                                <x-metronic.input type="url" name="twitter_url" value="{{ old('twitter_url') }}"
                                    class="form-control form-control-solid mb-3 mb-lg-0" placeholder="Twitter URL" />
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="fv-row my-3">
                                <x-metronic.label class="fw-semibold fs-6 mb-2">Youtube URL</x-metronic.label>
                                <x-metronic.input type="url" name="youtube_url" value="{{ old('youtube_url') }}"
                                    class="form-control form-control-solid mb-3 mb-lg-0" placeholder="Youtube URL" />
                            </div>
                        </div>
                        {{-- <div class="col-lg-4">
                            <div class="fv-row my-3">
                                <x-metronic.label class="fw-semibold fs-6 mb-2">Google URL</x-metronic.label>
                                <x-metronic.input type="url" name="google_url" value="{{ old('google_url') }}"
                                    class="form-control form-control-solid mb-3 mb-lg-0"
                                    placeholder="Google URL" />
                            </div>
                        </div> --}}
                        <div class="col-lg-4">
                            <div class="fv-row my-3">
                                <x-metronic.label class="fw-semibold fs-6 mb-2">Pinterest URL</x-metronic.label>
                                <x-metronic.input type="url" name="pinterest_url"
                                    value="{{ old('pinterest_url') }}"
                                    class="form-control form-control-solid mb-3 mb-lg-0"
                                    placeholder="Pinterest URL" />
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="fv-row my-3">
                                <x-metronic.label class="fw-semibold fs-6 mb-2">Linkedin URL</x-metronic.label>
                                <x-metronic.input type="url" name="linkedin_url"
                                    value="{{ old('linkedin_url') }}"
                                    class="form-control form-control-solid mb-3 mb-lg-0" placeholder="Linkedin URL" />
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="fv-row my-3">
                                <x-metronic.label class="fw-semibold fs-6 mb-2">Google Plus URL</x-metronic.label>
                                <x-metronic.input type="url" name="google_plus_url"
                                    value="{{ old('google_plus_url') }}"
                                    class="form-control form-control-solid mb-3 mb-lg-0"
                                    placeholder="Google Plus URL" />
                            </div>
                        </div>
                        {{-- <div class="col-lg-6">
                            <div class="fv-row my-3">
                                <x-metronic.label class="fw-semibold fs-6 mb-2">Gmail URL</x-metronic.label>
                                <x-metronic.input type="url" name="gmail_url" value="{{ old('gmail_url') }}"
                                    class="form-control form-control-solid mb-3 mb-lg-0"
                                    placeholder="Gmail URL" />
                            </div>
                        </div> --}}
                        <div class="col-lg-6">
                            <div class="fv-row my-3">
                                <x-metronic.label class="fw-semibold fs-6 mb-2">Apple URL</x-metronic.label>
                                <x-metronic.input type="url" name="apple_url" value="{{ old('apple_url') }}"
                                    class="form-control form-control-solid mb-3 mb-lg-0" placeholder="Apple URL" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

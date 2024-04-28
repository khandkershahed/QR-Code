{{-- Website Form Start --}}
<div class="container">
    <div class="text-center justify-content-center my-10">
        <h2 class="text-center mb-0">Your NFC Card Details</h2>
        <p class="text-center mb-0">Fill The Form With Your Info & Go To The Next.</p>
    </div>
    <!--begin::Accordion-->
    <div class="accordion accordion-icon-toggle" id="kt_accordion_2">

        <div class="mb-5 border">
            <div class="accordion-header py-3 d-flex px-3 border bg-light" data-bs-toggle="collapse"
                data-bs-target="#kt_accordion_2_item_1">
                <span class="accordion-icon">
                    <i class="fa-solid fa-angles-right" aria-hidden="true"></i>
                </span>
                <h3 class="fs-4 fw-semibold mb-0 ms-4">Profile Area</h3>
            </div>
            <div id="kt_accordion_2_item_1" class="fs-6 collapse show ps-10" data-bs-parent="#kt_accordion_2">
                <div class="row p-2">
                    <div class="col-lg-2">
                        <div class="fv-row my-3">
                            <x-metronic.label for="profile_image"
                                class="form-label">{{ __('Banner Image') }}</x-metronic.label>
                            <input id="profile_image" type="file" class="form-control" name="banner_image"
                                :value="old('banner_image')" onchange="previewBannerImage(this)" accept="image/*" />
                        </div>
                    </div>
                    <div class="col-lg-1 d-lg-block d-sm-none">
                        <div class="fv-row my-3">
                            <x-metronic.label for="profile_image_preview"
                                class="form-label">{{ __('Preview') }}</x-metronic.label>
                            <div>
                                <img width="50px" height="50px" class="rounded-circle border banner_image"
                                    id="profile_image_preview" src="" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2">
                        <div class="fv-row my-3">
                            <x-metronic.label for="profile_image"
                                class="form-label">{{ __('Profile Image') }}</x-metronic.label>
                            <input id="profile_image" type="file" class="form-control" name="profile_image"
                                :value="old('profile_image')" onchange="previewprofileImage(this)" accept="image/*" />
                        </div>
                    </div>
                    <div class="col-lg-1 d-lg-block d-sm-none">
                        <div class="fv-row my-3">
                            <x-metronic.label for="profile_image_preview"
                                class="form-label">{{ __('Preview') }}</x-metronic.label>
                            <div>
                                <img width="50px" height="50px" class="rounded-circle border profile_image"
                                    id="profile_image_preview" src="" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="fv-row my-3">
                            <x-metronic.label class="fw-semibold fs-6 mb-2">First Name</x-metronic.label>
                            <x-metronic.input type="text" name="first_name"
                                class="form-control form-control-solid mb-3 mb-lg-0" placeholder="Sazeduzzaman"
                                value="" />
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="fv-row my-3">
                            <x-metronic.label class="fw-semibold fs-6 mb-2">Last Name</x-metronic.label>
                            <x-metronic.input type="text" name="last_name"
                                class="form-control form-control-solid mb-3 mb-lg-0" placeholder="Saju"
                                value="" />
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="fv-row my-3">
                            <x-metronic.label class="fw-semibold fs-6 mb-2">Designation</x-metronic.label>
                            <x-metronic.input type="text" name="designation"
                                class="form-control form-control-solid mb-3 mb-lg-0" placeholder="Frontend Developer"
                                value="" />
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="fv-row my-3">
                            <x-metronic.label class="fw-semibold fs-6 mb-2">Address Line One</x-metronic.label>
                            <x-metronic.input type="text" name="address_line_one"
                                class="form-control form-control-solid mb-3 mb-lg-0" placeholder="Dhaka, Mirpur"
                                value="" />
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="fv-row my-3">
                            <x-metronic.label class="fw-semibold fs-6 mb-2">Address Line Two</x-metronic.label>
                            <x-metronic.input type="text" name="address_line_two"
                                class="form-control form-control-solid mb-3 mb-lg-0" placeholder="Bangladesh"
                                value="" />
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="fv-row my-3">
                            <x-metronic.label class="fw-semibold fs-6 mb-2">Phone Work</x-metronic.label>
                            <x-metronic.input type="text" name="phone_work"
                                class="form-control form-control-solid mb-3 mb-lg-0" placeholder="01*******"
                                value="" />
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="fv-row my-3">
                            <x-metronic.label class="fw-semibold fs-6 mb-2">Phone Personal</x-metronic.label>
                            <x-metronic.input type="text" name="phone_personal"
                                class="form-control form-control-solid mb-3 mb-lg-0" placeholder="01*******"
                                value="" />
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="fv-row my-3">
                            <x-metronic.label class="fw-semibold fs-6 mb-2">Email Work</x-metronic.label>
                            <x-metronic.input type="email" name="email_work"
                                class="form-control form-control-solid mb-3 mb-lg-0" placeholder="work@mail.com"
                                value="" />
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="fv-row my-3">
                            <x-metronic.label class="fw-semibold fs-6 mb-2">Email Personal</x-metronic.label>
                            <x-metronic.input type="email" name="email_personal"
                                class="form-control form-control-solid mb-3 mb-lg-0" placeholder="personal@mail.com"
                                value="" />
                        </div>
                    </div>
                </div>
            </div>
        </div>



        <div class="mb-5 border">
            <div class="accordion-header py-3 d-flex px-3 border bg-light collapsed" data-bs-toggle="collapse"
                data-bs-target="#kt_accordion_2_item_2">
                <span class="accordion-icon">
                    <i class="fa-solid fa-angles-right" aria-hidden="true"></i>
                </span>
                <h3 class="fs-4 fw-semibold mb-0 ms-4">Bio Area</h3>
            </div>
            <div id="kt_accordion_2_item_2" class="collapse fs-6 ps-10" data-bs-parent="#kt_accordion_2">
                <div class="row p-2">
                    <div class="col-lg-3">
                        <div class="fv-row my-3">
                            <x-metronic.label class="fw-semibold fs-6 mb-2">Bio Title</x-metronic.label>
                            <x-metronic.input type="text" name="bio_title"
                                class="form-control form-control-solid mb-3 mb-lg-0" placeholder="BIO"
                                value="" />
                        </div>
                    </div>
                    <div class="col-lg-9">
                        <div class="fv-row my-3">
                            <x-metronic.label class="fw-semibold fs-6 mb-2">Bio Description</x-metronic.label>
                            <textarea class="form-control form-control-solid" rows="1" name="bio_description"
                                placeholder="Book enthusiast, nature lover, avid learner, coffee addict, aspiring writer, music aficionado, travel enthusiast, optimistic dreamer."></textarea>
                        </div>
                    </div>
                </div>
            </div>
        </div>



        <div class="mb-5 border">
            <div class="accordion-header py-3 d-flex px-3 border bg-light collapsed" data-bs-toggle="collapse"
                data-bs-target="#kt_accordion_2_item_3">
                <span class="accordion-icon">
                    <i class="fa-solid fa-angles-right" aria-hidden="true"></i>
                </span>
                <h3 class="fs-4 fw-semibold mb-0 ms-4">Service Area</h3>
            </div>
            <div id="kt_accordion_2_item_3" class="collapse fs-6 ps-10" data-bs-parent="#kt_accordion_2">
                <div class="row p-2">
                    <div class="col-lg-3">
                        <div class="fv-row my-3">
                            <x-metronic.label class="fw-semibold fs-6 mb-2">Service Section Title</x-metronic.label>
                            <x-metronic.input type="text" name="service_section_title"
                                class="form-control form-control-solid mb-3 mb-lg-0" placeholder="Service"
                                value="" />
                        </div>
                    </div>

                    <div class="col-lg-3">
                        <div class="fv-row my-3">
                            <x-metronic.label class="fw-semibold fs-6 mb-2">Service Section
                                Description</x-metronic.label>
                            <textarea class="form-control form-control-solid" rows="1" name="service_section_description"
                                placeholder="Professional, reliable service provider committed to exceeding expectations with quality, efficiency, and personalized care for every client's needs."></textarea>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="fv-row my-3">
                            <x-metronic.label class="fw-semibold fs-6 mb-2">Service One Title</x-metronic.label>
                            <x-metronic.input type="text" name="service_one_title"
                                class="form-control form-control-solid mb-3 mb-lg-0" placeholder="Web Developement"
                                value="" />
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="fv-row my-3">
                            <x-metronic.label class="fw-semibold fs-6 mb-2">Service One Image</x-metronic.label>
                            <x-metronic.input type="file" name="service_one_image"
                                class="form-control form-control-solid mb-3 mb-lg-0" placeholder="Web Developement"
                                value="" />
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="fv-row my-3">
                            <x-metronic.label class="fw-semibold fs-6 mb-2">Service One Description</x-metronic.label>
                            <textarea class="form-control form-control-solid" rows="1" name="service_one_description"
                                placeholder="Professional, reliable service provider committed to exceeding expectations with quality, efficiency, and personalized care for every client's needs."></textarea>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="fv-row my-3">
                            <x-metronic.label class="fw-semibold fs-6 mb-2">Service Two Title</x-metronic.label>
                            <x-metronic.input type="text" name="service_two_title"
                                class="form-control form-control-solid mb-3 mb-lg-0" placeholder="Web Developement"
                                value="" />
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="fv-row my-3">
                            <x-metronic.label class="fw-semibold fs-6 mb-2">Service Two Image</x-metronic.label>
                            <x-metronic.input type="file" name="service_two_image"
                                class="form-control form-control-solid mb-3 mb-lg-0" placeholder="Web Developement"
                                value="" />
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="fv-row my-3">
                            <x-metronic.label class="fw-semibold fs-6 mb-2">Service Two Description</x-metronic.label>
                            <textarea class="form-control form-control-solid" rows="1" name="service_two_description"
                                placeholder="Professional, reliable service provider committed to exceeding expectations with quality, efficiency, and personalized care for every client's needs."></textarea>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="fv-row my-3">
                            <x-metronic.label class="fw-semibold fs-6 mb-2">Service Three Title</x-metronic.label>
                            <x-metronic.input type="text" name="service_three_title"
                                class="form-control form-control-solid mb-3 mb-lg-0" placeholder="Web Developement"
                                value="" />
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="fv-row my-3">
                            <x-metronic.label class="fw-semibold fs-6 mb-2">Service Three Image</x-metronic.label>
                            <x-metronic.input type="file" name="service_three_image"
                                class="form-control form-control-solid mb-3 mb-lg-0" placeholder="Web Developement"
                                value="" />
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="fv-row my-3">
                            <x-metronic.label class="fw-semibold fs-6 mb-2">Service Three
                                Description</x-metronic.label>
                            <textarea class="form-control form-control-solid" rows="1" name="service_three_description"
                                placeholder="Professional, reliable service provider committed to exceeding expectations with quality, efficiency, and personalized care for every client's needs."></textarea>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="mb-5 border">
            <div class="accordion-header py-3 d-flex px-3 border bg-light collapsed" data-bs-toggle="collapse"
                data-bs-target="#kt_accordion_2_item_4">
                <span class="accordion-icon">
                    <i class="fa-solid fa-angles-right" aria-hidden="true"></i>
                </span>
                <h3 class="fs-4 fw-semibold mb-0 ms-4">Company Area</h3>
            </div>
            <div id="kt_accordion_2_item_4" class="collapse fs-6 ps-10" data-bs-parent="#kt_accordion_2">
                <div class="row p-2">
                    <div class="col-lg-3">
                        <div class="fv-row my-3">
                            <x-metronic.label class="fw-semibold fs-6 mb-2">Company Title</x-metronic.label>
                            <x-metronic.input type="text" name="company_title"
                                class="form-control form-control-solid mb-3 mb-lg-0" placeholder="Company"
                                value="" />
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="fv-row my-3">
                            <x-metronic.label class="fw-semibold fs-6 mb-2">Company Name</x-metronic.label>
                            <x-metronic.input type="text" name="company_name"
                                class="form-control form-control-solid mb-3 mb-lg-0" placeholder="Ngen It"
                                value="" />
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="fv-row my-3">
                            <x-metronic.label class="fw-semibold fs-6 mb-2">company_address_line_one</x-metronic.label>
                            <x-metronic.input type="text" name="company_address_line_one"
                                class="form-control form-control-solid mb-3 mb-lg-0"
                                placeholder="257/A, San-fca Calefornia," value="" />
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="fv-row my-3">
                            <x-metronic.label class="fw-semibold fs-6 mb-2">Company Address Line Two</x-metronic.label>
                            <x-metronic.input type="text" name="company_address_line_two"
                                class="form-control form-control-solid mb-3 mb-lg-0" placeholder="USA"
                                value="" />
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="fv-row my-3">
                            <x-metronic.label class="fw-semibold fs-6 mb-2">Company Phone</x-metronic.label>
                            <x-metronic.input type="text" name="company_phone"
                                class="form-control form-control-solid mb-3 mb-lg-0" placeholder="USA"
                                value="" />
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="fv-row my-3">
                            <x-metronic.label class="fw-semibold fs-6 mb-2">Company Email</x-metronic.label>
                            <x-metronic.input type="text" name="company_email"
                                class="form-control form-control-solid mb-3 mb-lg-0" placeholder="USA"
                                value="" />
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="fv-row my-3">
                            <x-metronic.label class="fw-semibold fs-6 mb-2">Company About Title</x-metronic.label>
                            <x-metronic.input type="text" name="company_about_title"
                                class="form-control form-control-solid mb-3 mb-lg-0" placeholder="About"
                                value="" />
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="fv-row my-3">
                            <x-metronic.label class="fw-semibold fs-6 mb-2">Company About
                                Description</x-metronic.label>
                            <textarea class="form-control form-control-solid" rows="1" name="company_about_description"
                                placeholder="Professional, reliable service provider committed to exceeding expectations with quality, efficiency, and personalized care for every client's needs."></textarea>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="mb-5 border">
            <div class="accordion-header py-3 d-flex px-3 border bg-light collapsed" data-bs-toggle="collapse"
                data-bs-target="#kt_accordion_2_item_5">
                <span class="accordion-icon">
                    <i class="fa-solid fa-angles-right" aria-hidden="true"></i>
                </span>
                <h3 class="fs-4 fw-semibold mb-0 ms-4">Contact Area</h3>
            </div>
            <div id="kt_accordion_2_item_5" class="collapse fs-6 ps-10" data-bs-parent="#kt_accordion_2">
                <div class="row p-2">
                    <div class="col-lg-3">
                        <div class="fv-row my-3">
                            <x-metronic.label class="fw-semibold fs-6 mb-2">Facebook URL</x-metronic.label>
                            <x-metronic.input type="url" name="facebook_url"
                                class="form-control form-control-solid mb-3 mb-lg-0" value=""
                                placeholder="Facebook URL" />
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="fv-row my-3">
                            <x-metronic.label class="fw-semibold fs-6 mb-2">Instagram URL</x-metronic.label>
                            <x-metronic.input type="url" name="instagram_url"
                                class="form-control form-control-solid mb-3 mb-lg-0" value=""
                                placeholder="Instagram URL" />
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="fv-row my-3">
                            <x-metronic.label class="fw-semibold fs-6 mb-2">Twitter URL</x-metronic.label>
                            <x-metronic.input type="url" name="twitter_url"
                                class="form-control form-control-solid mb-3 mb-lg-0" value=""
                                placeholder="Twitter URL" />
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="fv-row my-3">
                            <x-metronic.label class="fw-semibold fs-6 mb-2">Youtube URL</x-metronic.label>
                            <x-metronic.input type="url" name="youtube_url"
                                class="form-control form-control-solid mb-3 mb-lg-0" value=""
                                placeholder="Youtube URL" />
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="fv-row my-3">
                            <x-metronic.label class="fw-semibold fs-6 mb-2">Google URL</x-metronic.label>
                            <x-metronic.input type="url" name="google_url"
                                class="form-control form-control-solid mb-3 mb-lg-0" value=""
                                placeholder="Google URL" />
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="fv-row my-3">
                            <x-metronic.label class="fw-semibold fs-6 mb-2">Pinterest URL</x-metronic.label>
                            <x-metronic.input type="url" name="pinterest_url"
                                class="form-control form-control-solid mb-3 mb-lg-0" value=""
                                placeholder="Pinterest URL" />
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="fv-row my-3">
                            <x-metronic.label class="fw-semibold fs-6 mb-2">Linkedin URL</x-metronic.label>
                            <x-metronic.input type="url" name="linkedin_url"
                                class="form-control form-control-solid mb-3 mb-lg-0" value=""
                                placeholder="Linkedin URL" />
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="fv-row my-3">
                            <x-metronic.label class="fw-semibold fs-6 mb-2">Google Plus URL</x-metronic.label>
                            <x-metronic.input type="url" name="google_plus_url"
                                class="form-control form-control-solid mb-3 mb-lg-0" value=""
                                placeholder="Google Plus URL" />
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="fv-row my-3">
                            <x-metronic.label class="fw-semibold fs-6 mb-2">Gmail URL</x-metronic.label>
                            <x-metronic.input type="url" name="gmail_url"
                                class="form-control form-control-solid mb-3 mb-lg-0" value=""
                                placeholder="Gmail URL" />
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="fv-row my-3">
                            <x-metronic.label class="fw-semibold fs-6 mb-2">Apple UR</x-metronic.label>
                            <x-metronic.input type="url" name="apple_url"
                                class="form-control form-control-solid mb-3 mb-lg-0" value=""
                                placeholder="Apple URL" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

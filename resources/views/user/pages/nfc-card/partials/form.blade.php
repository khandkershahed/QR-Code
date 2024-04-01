{{-- Website Form Start --}}


<div class="container">
    <div class="text-center justify-content-center my-10">
        <h2 class="text-center mb-0">Your NFC Card About Details</h2>
        <p class="text-center mb-0">Fill The Form With Your Info & Go To The Next.</p>
    </div>
    <div class="row pt-4">
        <div class="mt-10">
            <h4 class="fw-bold">About</h4>
        </div>
        <div class="mb-4 col-sm-12 col-md-4">
            <x-metronic.label for="first_name" class="form-label">{{ __('First Name') }}</x-metronic.label>
            <x-metronic.input id="first_name" type="text" name="first_name" :value="old('first_name')" placeholder="John" />
        </div>
        <div class="mb-4 col-sm-12 col-md-4">
            <x-metronic.label for="last_name" class="form-label">{{ __('Last Name') }}</x-metronic.label>
            <x-metronic.input id="last_name" type="text" name="last_name" :value="old('last_name')" placeholder="Doe" />
        </div>
        <div class="mb-4 col-sm-12 col-md-4">
            <x-metronic.label for="prefix" class="form-label">{{ __('Prefix') }}</x-metronic.label>
            <x-metronic.input id="prefix" type="text" name="prefix" :value="old('prefix')" placeholder="DR." />
        </div>
        <div class="mb-4 col-sm-12 col-md-4">
            <x-metronic.label for="suffix" class="form-label">{{ __('Suffix') }}</x-metronic.label>
            <x-metronic.input id="suffix" type="text" name="suffix" :value="old('suffix')" placeholder="Doe" />
        </div>
        <div class="mb-4 col-sm-12 col-md-4">
            <x-metronic.label for="designation" class="form-label">{{ __('Designation') }}</x-metronic.label>
            <x-metronic.input id="designation" type="text" name="designation" :value="old('designation')"
                placeholder="CXO, Founding Designer" />
        </div>
        <div class="mb-4 col-sm-12 col-md-4">
            <x-metronic.label for="department" class="form-label">{{ __('Department') }}</x-metronic.label>
            <x-metronic.input id="department" type="text" name="department" :value="old('department')"
                placeholder="Marketing" />
        </div>
        <div class="mb-4 col-sm-12 col-md-4">
            <x-metronic.label for="pronouns" class="form-label">{{ __('Pronouns') }}</x-metronic.label>
            <x-metronic.input id="pronouns" type="text" name="pronouns" :value="old('pronouns')" placeholder="She/Her" />
        </div>
        <div class="mb-4 col-sm-12 col-md-4">
            <x-metronic.label for="company" class="form-label">{{ __('Company') }}</x-metronic.label>
            <x-metronic.input id="company" type="text" name="company" :value="old('company')"
                placeholder="Amazon Designing Crew" />
        </div>
        <div class="mb-4 col-sm-12 col-md-4">
            <x-metronic.label for="location_latitude"
                class="form-label">{{ __('Location Latitude') }}</x-metronic.label>
            <x-metronic.input id="location_latitude" type="text" name="location_latitude" :value="old('location_latitude')"
                placeholder="Doe" />
        </div>
        <div class="mb-4 col-sm-12 col-md-4">
            <x-metronic.label for="location_longitude"
                class="form-label">{{ __('Location Longitude') }}</x-metronic.label>
            <x-metronic.input id="location_longitude" type="text" name="location_longitude" :value="old('location_longitude')"
                placeholder="Doe" />
        </div>
        <div class="mb-4 col-sm-12 col-md-3">
            <x-metronic.label for="company_logo" class="form-label">{{ __('Company Logo') }}</x-metronic.label>
            <input id="company_logo" type="file" class="form-control" name="company_logo"
                :value="old('company_logo')" onchange="previewImage(this)" accept="image/*" />
        </div>
        <div class="mb-4 col-sm-12 col-md-1 d-lg-block d-sm-none">
            <x-metronic.label for="company_logo_preview" class="form-label">{{ __('Preview') }}</x-metronic.label>
            <div>
                <img width="50px" height="50px" class="rounded-circle border" id="company_logo_preview"
                    src="" alt="">
            </div>
        </div>

        <div class="mb-4 col-sm-12 col-md-2">
            <x-metronic.label for="asdasda" class="form-label">{{ __('Preview') }}</x-metronic.label> <br>
            <input type="range" class="mt-4" class="form-range" id="asdasda"
                oninput="updateInputValue(this.value)">
        </div>
        <div class="mb-4 col-sm-12 col-md-2">
            <x-metronic.label for="logo_Size" class="form-label">{{ __('Logo Size (in px)') }}</x-metronic.label>
            <x-metronic.input id="logo_Size" type="text" name="logo_Size" :value="old('logo_Size')" placeholder="Doe" />
        </div>
        <div class="mb-4 col-sm-12 col-md-6">
            <x-metronic.label for="summary" class="form-label">{{ __('Summary') }}</x-metronic.label>
            <textarea name="summary" class="form-control" id="summary" rows="3"
                placeholder="I Lead Design Accross Terms For Amazon & It's Subsidiaries" :value="old('summary')"></textarea>
        </div>
        <div class="mb-4 col-sm-12 col-md-6">
            <x-metronic.label for="address" class="form-label">{{ __('Address') }}</x-metronic.label>
            <textarea name="address" class="form-control" id="address" rows="3" :value="old('address')"></textarea>
        </div>
        <div class="mt-10">
            <h4 class="fw-bold">Contact Details</h4>
        </div>
        <div class="col-lg-12">
            {{-- Add Phone --}}
            <div id="kt_docs_repeater_basic-phone">
                <div class="form-group" data-repeater-list="kt_docs_repeater_basic-phone">
                    <div data-repeater-item>
                        <div class="form-row row align-items-center">
                            <div class="col-md-6 mb-3">
                                <label for="name" class="form-label">Phone</label>
                                <input type="text" class="form-control" id="name" name="select_phone"
                                    placeholder="Enter Phone Number">
                            </div>
                            <div class="col-md-5 mb-3">
                                <label for="number" class="form-label">Select Type</label>
                                <select class="form-select" data-control="select2" name="select_phone_type"
                                    data-placeholder="Select an option">
                                    <option>No Label</option>
                                    <option value="mobile" disabled>Mobile</option>
                                    <option value="work">Work</option>
                                    <option value="home">Home</option>
                                    <option value="main">Main</option>
                                    <option value="secondary">Secondary</option>
                                </select>
                            </div>
                            <div class="col-md-1 align-self-center">
                                <button type="button" data-repeater-delete class="btn btn-danger btn-sm mt-4">
                                    <i class="fa-solid fa-trash-can"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-group mb-3">
                    <button type="button" data-repeater-create class="btn border-0 rounded-0 p-0  text-primary">
                        <i class="fa-solid fa-plus"></i> Add Another Phone Number
                    </button>
                </div>
            </div>
            {{-- Add Email --}}
            <div id="kt_docs_repeater_basic-email">
                <div class="form-group" data-repeater-list="kt_docs_repeater_basic-email">
                    <div data-repeater-item>
                        <div class="form-row row align-items-center">
                            <div class="col-md-6 mb-3">
                                <label for="name" class="form-label">Email</label>
                                <input type="email" class="form-control" id="name"  name="select_email"
                                    placeholder="Enter Your Email">
                            </div>
                            <div class="col-md-5 mb-3">
                                <label for="number" class="form-label">Select Type</label>
                                <select class="form-select" data-control="select2" name="select_email_type"
                                    data-placeholder="Select an option">
                                    <option>No Label</option>
                                    <option value="work">Work</option>
                                    <option value="personal">Personal</option>
                                    <option value="other">Other</option>
                                </select>
                            </div>
                            <div class="col-md-1 align-self-center">
                                <button type="button" data-repeater-delete class="btn btn-danger btn-sm mt-4">
                                    <i class="fa-solid fa-trash-can"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-group mb-3">
                    <button type="button" data-repeater-create class="btn border-0 rounded-0 p-0  text-primary">
                        <i class="fa-solid fa-plus"></i> Add Another Email
                    </button>
                </div>
            </div>
            {{-- Add Website --}}
            <div id="kt_docs_repeater_basic-website">
                <div class="form-group" data-repeater-list="kt_docs_repeater_basic-website">
                    <div data-repeater-item>
                        <div class="form-row row align-items-center">
                            <div class="col-md-6 mb-3">
                                <label for="name" class="form-label">Website URL</label>
                                <input type="url" class="form-control" name="website_url" id="name"
                                    placeholder="Enter Website URL">
                            </div>
                            <div class="col-md-5 mb-3">
                                <label for="number" class="form-label">Select Type</label>
                                <select class="form-select" data-control="select2" name="select_type"
                                    data-placeholder="Select an option">
                                    <option>No Label</option>
                                    <option value="personal">Personal</option>
                                    <option value="work">Work</option>
                                    <option value="company">Company</option>
                                    <option value="social">Social</option>
                                    <option value="portfolio">Portfolio</option>
                                    <option value="others">Others</option>
                                </select>
                            </div>
                            <div class="col-md-1 align-self-center">
                                <button type="button" data-repeater-delete class="btn btn-danger btn-sm mt-4">
                                    <i class="fa-solid fa-trash-can"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-group mb-3">
                    <button type="button" data-repeater-create class="btn border-0 rounded-0 p-0  text-primary">
                        <i class="fa-solid fa-plus"></i> Add Website Url
                    </button>
                </div>
            </div>
            {{-- Add Custom Field --}}
            <div id="kt_docs_repeater_basic-custom">
                <div class="form-group" data-repeater-list="kt_docs_repeater_basic-custom">
                    <div data-repeater-item>
                        <div class="form-row row align-items-center">
                            <div class="col-md-6 mb-3">
                                <label for="name" class="form-label">Custom Field</label>
                                <input type="text" class="form-control" id="name" name="custom_filed_one"
                                    placeholder="Enter Custom Value">
                            </div>
                            <div class="col-md-5 mb-3">
                                <label for="number" class="form-label">Enter Label</label>
                                <input type="text" class="form-control" id="number" name="custom_label"
                                    placeholder="Enter Label">
                            </div>
                            <div class="col-md-1 align-self-center">
                                <button type="button" data-repeater-delete class="btn btn-danger btn-sm mt-4">
                                    <i class="fa-solid fa-trash-can"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-group mb-3">
                    <button type="button" data-repeater-create class="btn border-0 rounded-0 p-0  text-primary">
                        <i class="fa-solid fa-plus"></i> Add Custom Field
                    </button>
                </div>
            </div>

        </div>
        <div class="mt-10">
            <h4 class="fw-bold">Social Info</h4>
        </div>
        <div class="col-lg-12">
            {{-- Add Phone --}}
            <div id="kt_docs_repeater_basic-social">
                <div class="form-group" data-repeater-list="kt_docs_repeater_basic-social">
                    <div data-repeater-item>
                        <div class="form-row row align-items-center">
                            <div class="col-md-6 mb-3">
                                <label for="name" class="form-label">Social Name</label>
                                <input type="text" class="form-control" id="name"
                                    placeholder="Enter Phone Number">
                            </div>
                            <div class="col-md-5 mb-3">
                                <label for="name" class="form-label">Social Link</label>
                                <input type="url" class="form-control" id="name"
                                    placeholder="Enter Phone Number">
                            </div>
                            <div class="col-md-1 align-self-center">
                                <button type="button" data-repeater-delete class="btn btn-danger btn-sm mt-4">
                                    <i class="fa-solid fa-trash-can"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-group mb-3">
                    <button type="button" data-repeater-create class="btn border-0 rounded-0 p-0  text-primary">
                        <i class="fa-solid fa-plus"></i> Add Another Social
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>

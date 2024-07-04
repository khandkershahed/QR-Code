<form class="kt_docs_formvalidation_text form" action="#" autocomplete="off">
    <div class="row">
        <div class="col-lg-12 mb-5">
            <div class="row">
                <div class="fv-row mb-4 col-lg-5">
                    <x-metronic.label class="required fw-semibold fs-6 mb-2">URL
                        Alias</x-metronic.label>
                    <div class="input-group">
                        <button class="input-group-text" id="basic-addon3"><i
                                class="fa-solid fa-arrows-rotate"></i></button>
                        <x-metronic.input type="text" class="form-control form-control-solid form-control-sm"
                            name="url_alias" id="basic-url" name="url_alias" aria-describedby="basic-addon3"
                            placeholder="my-vcard-page-url" :value="old('url_alias')"/>
                    </div>
                </div>
                <div class="fv-row mb-4 col-lg-7">
                    <x-metronic.label class="required fw-semibold fs-6 mb-2">VCard
                        Name</x-metronic.label>
                    <div class="input-group">
                        <x-metronic.input type="text" class="form-control form-control-solid form-control-sm"
                            name="vcard_name" placeholder="Enter VCard Name" :value="old('vcard_name')"/>
                    </div>
                </div>
                <div class="fv-row mb-4 col-lg-5">
                    <x-metronic.label class="fw-semibold fs-12 mb-2">Occupation</x-metronic.label>
                    <x-metronic.input type="text" class="form-control form-control-solid form-control-sm"
                        name="designation" placeholder="Enter Occupation Name" :value="old('designation')"/>
                </div>
            </div>
        </div>
        <div class="col-lg-5">
            <div class="row">

                <div class="col-lg-12 mb-7">
                    <x-metronic.label for="profile_image" class="fw-semibold fs-6 mb-2">{{ __('Profile Image') }}
                    </x-metronic.label>
                    <x-metronic.file-input id="profile_image" name="profile_image"
                        class="form-control form-control-solid form-control-sm"
                        :value="old('profile_image')"></x-metronic.file-input>
                </div>
                <div class="col-lg-12 mb-7">
                    <x-metronic.label for="banner_image" class="fw-semibold fs-6 mb-2">{{ __('Cover Image ') }}
                    </x-metronic.label>
                    <x-metronic.file-input id="banner_image" name="banner_image"
                        class="form-control form-control-solid form-control-sm"
                        :value="old('banner_image')"></x-metronic.file-input>
                </div>
            </div>
        </div>
        <div class="col-lg-7">
            <div class="col-lg-12 mb-7">
                <x-metronic.label for="logo" class="fw-semibold fs-6 mb-2">{{ __('Description') }}
                </x-metronic.label>
                <textarea name="bio_description" class="form-control form-control-solid form-control-sm" rows="3">{{ old('bio_description') }}</textarea>
                {{-- <textarea id="kt_docs_tinymce_basic" name="kt_docs_tinymce_basic" class="tox-target" style="height: 150px;"></textarea> --}}
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
        <div class="fv-row col-lg-4 col-6 mb-4">
            <x-metronic.label class="required fw-semibold fs-6 mb-2">First
                Name</x-metronic.label>
            <x-metronic.input type="text" class="form-control form-control-solid form-control-sm" name="first_name" :value="old('first_name')"
                placeholder="Jone Robert" />
        </div>
        <div class="fv-row col-lg-4 col-6 mb-4">
            <x-metronic.label class="required fw-semibold fs-6 mb-2">Last
                Name</x-metronic.label>
            <x-metronic.input type="text" class="form-control form-control-solid form-control-sm" name="last_name" :value="old('last_name')"
                placeholder="Washington" />
        </div>
        <div class="fv-row col-lg-4 col-6 mb-4">
            <x-metronic.label class="required fw-semibold fs-6 mb-2">Email</x-metronic.label>
            <x-metronic.input type="email" class="form-control form-control-solid form-control-sm" name="email_personal" :value="old('email_personal')"
                placeholder="Washington@maill.com" />
        </div>
        <div class="fv-row col-lg-4 col-6 mb-4">
            <x-metronic.label class="fw-semibold fs-6 mb-2">Alternative
                Email</x-metronic.label>
            <x-metronic.input type="email" class="form-control form-control-solid form-control-sm"
                name="email_work" :value="old('email_work')" placeholder="Washington@maill.com" />
        </div>
        <div class="fv-row col-lg-4 col-6 mb-4">
            <x-metronic.label class="required fw-semibold fs-6 mb-2">Phone</x-metronic.label>
            <x-metronic.input type="text" class="form-control form-control-solid form-control-sm" name="phone_personal" :value="old('phone_personal')"
                placeholder="(+1 05)" />
        </div>
        <div class="fv-row col-lg-4 col-6 mb-4">
            <x-metronic.label class="fw-semibold fs-6 mb-2">Alternative
                Phone</x-metronic.label>
            <x-metronic.input type="text" class="form-control form-control-solid form-control-sm"
                name="phone_work" :value="old('phone_work')" placeholder="(+1 05)" />
        </div>
        <div class="fv-row col-lg-4 col-6 mb-4">
            <x-metronic.label class="fw-semibold fs-6 mb-2">Location</x-metronic.label>
            {{-- <x-metronic.input type="text" class="form-control form-control-solid form-control-sm" name="location" :value="old('location')"
                placeholder="Enter Location" /> --}}
                <textarea name="location" class="form-control form-control-solid form-control-sm" rows="3">{{ old('location') }}</textarea>
        </div>
        <div class="fv-row col-lg-4 col-6 mb-4">
            <x-metronic.label class="fw-semibold fs-6 mb-2">Location URL</x-metronic.label>
            <x-metronic.input type="text" class="form-control form-control-solid form-control-sm"
                name="location_url" :value="old('location_url')" placeholder="Enter Location URl " />
        </div>
        <div class="fv-row col-lg-4 col-6 mb-4">
            <x-metronic.label class="fw-semibold fs-6 mb-2">Date Of
                Birth</x-metronic.label>
            <x-metronic.input type="date" class="form-control form-control-solid form-control-sm"
                name="date_of_birth" :value="old('date_of_birth')" placeholder="Enter Date Of Birth " />
        </div>
        <div class="fv-row col-lg-4 col-6 mb-4">
            <x-metronic.label class="fw-semibold fs-6 mb-2">Company</x-metronic.label>
            <x-metronic.input type="text" class="form-control form-control-solid form-control-sm" name="company" :value="old('company')"
                placeholder="Enter Company Name " />
        </div>
        <div class="fv-row col-lg-4 col-6 mb-4">
            <x-metronic.label class="fw-semibold fs-6 mb-2">Job
                Title</x-metronic.label>
            <x-metronic.input type="text" class="form-control form-control-solid form-control-sm" name="job_title" :value="old('job_title')"
                placeholder="Enter Job Title " />
        </div>
        <div class="fv-row col-lg-4 col-6 mb-4">
            <x-metronic.label class="fw-semibold fs-6 mb-2">Default
                Language</x-metronic.label>
            <select class="form-select" data-control="select2" data-placeholder="English" name="default_language" :value="old('default_language')">
                <option></option>
                <option value="1">China</option>
                <option value="2">Arabic</option>
            </select>
        </div>
    </div>

    <div class="d-flex justify-content-end">
        <button type="submit" class="kt_docs_formvalidation_text_submit btn btn-primary mt-5">
            <span class="indicator-label">
                Save Data
            </span>
            <span class="indicator-progress">
                Please wait... <span class="spinner-border spinner-border-sm align-middle ms-2"></span>
            </span>
        </button>
    </div>
</form>

<div class="row py-15 d-none">
    <h3>New VCard</h3>
    <div class="col-lg-12">
        <div class="card rounded-0">
            <div class="card-body ">
                <div class="row">
                    <div class="col-lg-12">
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
                                                <x-metronic.input type="text"
                                                    class="form-control form-control-solid form-control-sm"
                                                    name="url_alias" id="basic-url" name="url_alias"
                                                    aria-describedby="basic-addon3" placeholder="my-vcard-page-url"
                                                    :value="old('url_alias')" />
                                            </div>
                                        </div>
                                        <div class="fv-row mb-4 col-lg-7">
                                            <x-metronic.label class="required fw-semibold fs-6 mb-2">VCard
                                                Name</x-metronic.label>
                                            <div class="input-group">
                                                <x-metronic.input type="text"
                                                    class="form-control form-control-solid form-control-sm"
                                                    name="vcard_name" placeholder="Enter VCard Name"
                                                    :value="old('vcard_name')" />
                                            </div>
                                        </div>
                                        <div class="fv-row mb-4 col-lg-5">
                                            <x-metronic.label
                                                class="fw-semibold fs-12 mb-2">Occupation</x-metronic.label>
                                            <x-metronic.input type="text"
                                                class="form-control form-control-solid form-control-sm"
                                                name="designation" placeholder="Enter Occupation Name"
                                                :value="old('designation')" />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-5">
                                    <div class="row">
                                        <div class="col-lg-12 mb-7">
                                            <x-metronic.label for="profile_image"
                                                class="fw-semibold fs-6 mb-2">{{ __('Profile Image') }}
                                            </x-metronic.label>
                                            <x-metronic.file-input id="profile_image" name="profile_image"
                                                class="form-control form-control-solid form-control-sm"
                                                :value="old('profile_image')"></x-metronic.file-input>
                                        </div>
                                        <div class="col-lg-12 mb-7">
                                            <x-metronic.label for="banner_image"
                                                class="fw-semibold fs-6 mb-2">{{ __('Cover Image ') }}
                                            </x-metronic.label>
                                            <x-metronic.file-input id="banner_image" name="banner_image"
                                                class="form-control form-control-solid form-control-sm"
                                                :value="old('banner_image')"></x-metronic.file-input>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-7">
                                    <div class="col-lg-12 mb-7">
                                        <x-metronic.label for="logo"
                                            class="fw-semibold fs-6 mb-2">{{ __('Description') }}
                                        </x-metronic.label>
                                        <textarea name="bio_description" class="form-control form-control-solid form-control-sm" rows="3">{{ old('bio_description') }}</textarea>
                                        {{-- <textarea id="kt_docs_tinymce_basic" name="kt_docs_tinymce_basic" class="tox-target" style="height: 150px;"></textarea> --}}
                                    </div>
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

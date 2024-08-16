<x-admin-app-layout :title="'Site Setting'">
    <div class="py-5">
        <div class="card">
            <div class="card-header bg-info">
                <div class="card-title text-white">
                    All Site Settings
                </div>
            </div>
            <div class="card-body p-0">
                <form class="form" action="{{ route('admin.site.setting') }}" method="POST"
                    enctype="multipart/form-data">
                    <div class="d-flex flex-column flex-md-row rounded border p-10 bg-white">
                        @csrf
                        @method('PUT')

                        <ul class="nav nav-tabs nav-pills bg-white flex-row border-0 flex-md-column me-5 mb-3 mb-md-0 fs-6 min-w-lg-250px shadow-sm"
                            role="tablist">
                            <li class="nav-item w-100 me-0 mb-md-2" role="presentation">
                                <a class="nav-link w-100 btn btn-flex btn-active-light-success active text-start p-5"
                                    data-bs-toggle="tab" href="#siteInfo" aria-selected="true" role="tab">
                                    <i class="fas fa-file-lines fs-2 text-success me-3"></i>
                                    <span class="fs-4 fw-bold">Site Information</span>
                                </a>
                            </li>
                            <li class="nav-item w-100 me-0 mb-md-2" role="presentation">
                                <a class="nav-link w-100 btn btn-flex btn-active-light-info text-start p-5"
                                    data-bs-toggle="tab" href="#siteLogo" aria-selected="false" role="tab">
                                    <i class="fas fa-building fs-2 text-info"></i>
                                    <span class="fs-4 fw-bold ps-3">Site Logo</span>
                                </a>
                            </li>
                            <li class="nav-item w-100 me-0 mb-md-2" role="presentation">
                                <a class="nav-link w-100 btn btn-flex btn-active-light-primary text-start p-5"
                                    data-bs-toggle="tab" href="#siteMeta" aria-selected="false" role="tab">
                                    <i class="fas fa-ranking-star fs-2 text-danger"></i>
                                    <span class="fs-4 fw-bold ps-3">Site Meta</span>
                                </a>
                            </li>
                        </ul>

                        <div class="tab-content" id="myTabContent">
                            <!-- Site Information Tab -->
                            <div class="tab-pane fade active show" id="siteInfo" role="tabpanel">
                                <div class="row">
                                    <div class="col-lg-4">
                                        <x-metronic.label for="website_name"
                                            class="col-form-label fw-bold fs-6">{{ __('Website Name') }}</x-metronic.label>
                                        <x-metronic.input id="website_name" type="text" name="website_name"
                                            :value="$site ? $site->website_name : ''" placeholder="Enter Website Name" />
                                    </div>

                                    <div class="col-lg-4">
                                        <x-metronic.label for="phone_one"
                                            class="col-form-label fw-bold fs-6">{{ __('Phone One') }}</x-metronic.label>
                                        <x-metronic.input id="phone_one" type="text" name="phone_one"
                                            :value="$site ? $site->phone_one : ''" placeholder="Enter Phone One" />
                                    </div>
                                    <div class="col-lg-4">
                                        <x-metronic.label for="phone_two"
                                            class="col-form-label fw-bold fs-6">{{ __('Phone Two') }}</x-metronic.label>
                                        <x-metronic.input id="phone_two" type="text" name="phone_two"
                                            :value="$site ? $site->phone_two : ''" placeholder="Enter Phone Two" />
                                    </div>
                                    <div class="col-lg-3">
                                        <x-metronic.label for="whatsapp_number"
                                            class="col-form-label fw-bold fs-6">{{ __('WhatsApp Number') }}</x-metronic.label>
                                        <x-metronic.input id="whatsapp_number" type="text" name="whatsapp_number"
                                            :value="$site ? $site->whatsapp_number : ''" placeholder="Enter WhatsApp Number" />
                                    </div>
                                    <div class="col-lg-3">
                                        <x-metronic.label for="contact_email"
                                            class="col-form-label fw-bold fs-6">{{ __('Contact Email') }}</x-metronic.label>
                                        <x-metronic.input id="contact_email" type="email" name="contact_email"
                                            :value="$site ? $site->contact_email : ''" placeholder="Enter Contact Email" />
                                    </div>
                                    <div class="col-lg-3">
                                        <x-metronic.label for="support_email"
                                            class="col-form-label fw-bold fs-6">{{ __('Support Email') }}</x-metronic.label>
                                        <x-metronic.input id="support_email" type="email" name="support_email"
                                            :value="$site ? $site->support_email : ''" placeholder="Enter Support Email" />
                                    </div>
                                    <div class="col-lg-3">
                                        <x-metronic.label for="info_email"
                                            class="col-form-label fw-bold fs-6">{{ __('Info Email') }}</x-metronic.label>
                                        <x-metronic.input id="info_email" type="email" name="info_email"
                                            :value="$site ? $site->info_email : ''" placeholder="Enter Info Email" />
                                    </div>
                                    <div class="col-lg-4">
                                        <x-metronic.label for="about"
                                            class="col-form-label fw-bold fs-6">{{ __('About') }}</x-metronic.label>
                                        <textarea name="about" id="about" cols="1" rows="3" class="form-control" placeholder="Enter About">{{ $site ? $site->about : '' }}</textarea>
                                    </div>
                                    <div class="col-lg-4">
                                        <x-metronic.label for="address_line_one"
                                            class="col-form-label fw-bold fs-6">{{ __('Address Line One') }}</x-metronic.label>
                                        <textarea name="address_line_one" id="address_line_one" cols="1" rows="3" class="form-control"
                                            placeholder="Enter Address Line One">{{ $site ? $site->address_line_one : '' }}</textarea>
                                    </div>
                                    <div class="col-lg-4">
                                        <x-metronic.label for="address_line_two"
                                            class="col-form-label fw-bold fs-6">{{ __('Address Line Two') }}</x-metronic.label>
                                        <textarea name="address_line_two" id="address_line_two" cols="1" rows="3" class="form-control"
                                            placeholder="Enter Address Line Two">{{ $site ? $site->address_line_two : '' }}</textarea>
                                    </div>
                                </div>
                            </div>

                            <!-- Site Logo Tab -->
                            <div class="tab-pane fade" id="siteLogo" role="tabpanel">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <x-metronic.label for="site_icon"
                                            class="col-form-label fw-bold fs-6">{{ __('Site Icon') }}</x-metronic.label>
                                        <x-metronic.file-input id="site_icon" name="site_icon" :value="$site ? $site->site_icon : ''" />
                                    </div>
                                    <div class="col-lg-6">
                                        <x-metronic.label for="system_logo_white"
                                            class="col-form-label fw-bold fs-6">{{ __('System Logo White') }}</x-metronic.label>
                                        <x-metronic.file-input id="system_logo_white" name="system_logo_white"
                                            :value="$site ? $site->system_logo_white : ''" />
                                    </div>
                                    <div class="col-lg-12">
                                        <x-metronic.label for="system_logo_black"
                                            class="col-form-label fw-bold fs-6">{{ __('System Logo Black') }}</x-metronic.label>
                                        <x-metronic.file-input id="system_logo_black" name="system_logo_black"
                                            :value="$site ? $site->system_logo_black : ''" />
                                    </div>
                                </div>
                            </div>

                            <!-- Site Meta Tab -->
                            <div class="tab-pane fade" id="siteMeta" role="tabpanel">
                                <div class="row">
                                    <div class="col-lg-4">
                                        <x-metronic.label for="default_language"
                                            class="col-form-label fw-bold fs-6">{{ __('Default Language') }}</x-metronic.label>
                                        <x-metronic.input id="default_language" type="text"
                                            name="default_language" :value="$site ? $site->default_language : ''"
                                            placeholder="Enter Default Language" />
                                    </div>
                                    <div class="col-lg-4">
                                        <x-metronic.label for="default_currency"
                                            class="col-form-label fw-bold fs-6">{{ __('Default Currency') }}</x-metronic.label>
                                        <x-metronic.input id="default_currency" type="text"
                                            name="default_currency" :value="$site ? $site->default_currency : ''"
                                            placeholder="Enter Default Currency" />
                                    </div>
                                    <div class="col-lg-4">
                                        <x-metronic.label for="meta_image"
                                            class="col-form-label fw-bold fs-6">{{ __('Meta Image') }}</x-metronic.label>
                                        <x-metronic.file-input id="meta_image" type="file" name="meta_image"
                                            :value="$site ? $site->meta_image : ''" placeholder="Enter Meta Image URL" />
                                    </div>
                                    <div class="col-lg-4">
                                        <x-metronic.label for="copyright_url"
                                            class="col-form-label fw-bold fs-6">{{ __('Copyright URL') }}</x-metronic.label>
                                        <textarea name="copyright_url" id="copyright_url" cols="1" rows="3" class="form-control"
                                            placeholder="Enter Meta Copyright URL">{{ $site ? $site->copyright_url : '' }}</textarea>
                                    </div>
                                    <div class="col-lg-4">
                                        <x-metronic.label for="meta_keyword"
                                            class="col-form-label fw-bold fs-6">{{ __('Meta Keyword') }}</x-metronic.label>
                                        <textarea name="meta_keyword" id="meta_keyword" cols="1" rows="3" class="form-control"
                                            placeholder="Enter Meta Keyword">{{ $site ? $site->meta_keyword : '' }}</textarea>
                                    </div>
                                    <div class="col-lg-4">
                                        <x-metronic.label for="copyright_title"
                                            class="col-form-label fw-bold fs-6">{{ __('Copyright Title') }}</x-metronic.label>
                                        <textarea name="copyright_title" id="copyright_title" cols="1" rows="3" class="form-control"
                                            placeholder="Enter Copyright Title">{{ $site ? $site->copyright_title : '' }}</textarea>
                                    </div>
                                    <div class="col-lg-4">
                                        <x-metronic.label for="meta_description"
                                            class="col-form-label fw-bold fs-6">{{ __('Meta Description') }}</x-metronic.label>
                                        <textarea name="meta_description" id="meta_description" cols="1" rows="3" class="form-control"
                                            placeholder="Enter Meta Description">{{ $site ? $site->meta_description : '' }}</textarea>
                                    </div>
                                    <div class="col-lg-4">
                                        <x-metronic.label for="google_analytics"
                                            class="col-form-label fw-bold fs-6">{{ __('Google Analytics') }}</x-metronic.label>
                                        <textarea name="google_analytics" id="google_analytics" cols="1" rows="3" class="form-control"
                                            placeholder="Enter Google Analytics Script">{{ $site ? $site->google_analytics : '' }}</textarea>
                                    </div>
                                    <div class="col-lg-4">
                                        <x-metronic.label for="google_adsense"
                                            class="col-form-label fw-bold fs-6">{{ __('Google Adsense') }}</x-metronic.label>
                                        <textarea name="google_adsense" id="google_adsense" cols="1" rows="3" class="form-control"
                                            placeholder="Enter Google Adsense Script">{{ $site ? $site->google_adsense : '' }}</textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>

        </div>
    </div>
    {{-- Script Not Working --}}
    @push('scripts')
        <script>
            function previewImage(event) {
                var input = event.target;
                var preview = document.getElementById('preview');
                if (input.files && input.files[0]) {
                    var reader = new FileReader();
                    reader.onload = function(e) {
                        preview.src = e.target.result;
                    }
                    reader.readAsDataURL(input.files[0]);
                } else {
                    preview.src =
                        "http://placehold.it/180";
                }
            }
        </script>
    @endpush
</x-admin-app-layout>

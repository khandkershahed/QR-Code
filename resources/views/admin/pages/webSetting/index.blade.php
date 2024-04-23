<x-admin-app-layout :title="'Site Setting'">

    <div class="card card-flash">

        <!--begin::Modal body-->
        <div class="card-body scroll-y mx-5 mx-xl-15 my-7">
            <!--begin::Form-->
            <form class="form" action="{{ route('admin.site.setting') }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="row">
                    <div class="col-lg-4">
                        <x-metronic.label for="website_name" class="col-form-label fw-bold fs-6">{{ __('Website Name') }}
                        </x-metronic.label>

                        <x-metronic.input id="website_name" type="text" name="website_name" :value="$site ? $site->website_name : ''"
                            placeholder="Enter Website Name"></x-metronic.input>
                    </div>
                    <div class="col-lg-4">
                        <x-metronic.label for="site_motto" class="col-form-label fw-bold fs-6">{{ __('Site Motto') }}
                        </x-metronic.label>

                        <x-metronic.input id="site_motto" type="text" name="site_motto" :value="$site ? $site->site_motto : ''"
                            placeholder="Enter Site Motto"></x-metronic.input>
                    </div>
                    <div class="col-lg-3">
                        <x-metronic.label for="site_icon" class="col-form-label fw-bold fs-6">{{ __('Site Icon') }}
                        </x-metronic.label>

                        <x-metronic.input id="site_icon" type="file" name="site_icon" :value="$site ? $site->site_icon : ''"
                            placeholder="Enter Site Icon"></x-metronic.input>
                    </div>
                    <div class="col-lg-1">
                        <img src="{{ (!empty($site->site_icon) && file_exists(public_path('storage/webSetting/siteIcon/' . $site->site_icon))) ? asset('storage/webSetting/siteIcon/' . $site->site_icon) : asset('http://placehold.it/180') }}"
                            class="rounded-circle mt-8" width="60px" height="60px" alt="">
                    </div>
                    <div class="col-lg-3">
                        <x-metronic.label for="system_logo_white"
                            class="col-form-label fw-bold fs-6">{{ __('System Logo White') }}
                        </x-metronic.label>

                        <x-metronic.input id="system_logo_white" type="file" name="system_logo_white"
                            :value="$site ? $site->system_logo_white : ''" placeholder="Enter System Logo White"></x-metronic.input>
                    </div>
                    <div class="col-lg-1">
                        <img src="{{ (!empty($site->system_logo_white) && file_exists(public_path('storage/webSetting/systemLogoWhite/' . $site->system_logo_white))) ? asset('storage/webSetting/systemLogoWhite/' . $site->system_logo_white) : asset('http://placehold.it/180') }}"
                            class="rounded-circle mt-8" width="60px" height="60px" alt="">
                    </div>


                    {{-- <div class="col-lg-3">
                        <x-metronic.label for="system_logo_black"
                            class="col-form-label fw-bold fs-6">{{ __('System Logo Black') }}</x-metronic.label>

                        <x-metronic.input id="system_logo_black" type="file" name="system_logo_black"
                            onchange="previewImage(event)" placeholder="Enter System Logo Black"></x-metronic.input>
                    </div>
                    <div class="col-lg-1">
                        <img id="preview"
                            src=""
                            class="rounded-circle mt-8" width="60px" height="60px" alt="Preview Image">
                    </div> --}}


                    <div class="col-lg-4">
                        <x-metronic.label for="system_timezone"
                            class="col-form-label fw-bold fs-6">{{ __('System Timezone') }}
                        </x-metronic.label>

                        <x-metronic.input id="system_timezone" type="text" name="system_timezone" :value="$site ? $site->system_timezone : ''"
                            placeholder="Enter System Timezone"></x-metronic.input>
                    </div>
                    <div class="col-lg-4">
                        <x-metronic.label for="base_color" class="col-form-label fw-bold fs-6">{{ __('Base Color') }}
                        </x-metronic.label>

                        <x-metronic.input id="base_color" type="text" name="base_color" :value="$site ? $site->base_color : ''"
                            placeholder="Enter Base Color"></x-metronic.input>
                    </div>
                    <div class="col-lg-4">
                        <x-metronic.label for="base_hover_color"
                            class="col-form-label fw-bold fs-6">{{ __('Base Hover Color') }}
                        </x-metronic.label>

                        <x-metronic.input id="base_hover_color" type="text" name="base_hover_color" :value="$site ? $site->base_hover_color : ''"
                            placeholder="Enter Base Hover Color"></x-metronic.input>
                    </div>
                    <div class="col-lg-4">
                        <x-metronic.label for="secondary_base_color"
                            class="col-form-label fw-bold fs-6">{{ __('Secondary Base Color') }}
                        </x-metronic.label>

                        <x-metronic.input id="secondary_base_color" type="text" name="secondary_base_color"
                            :value="$site ? $site->secondary_base_color : ''" placeholder="Enter Secondary Base Color"></x-metronic.input>
                    </div>
                    <div class="col-lg-4">
                        <x-metronic.label for="secondary_base_hover_color"
                            class="col-form-label fw-bold fs-6">{{ __('Secondary Base Hover Color') }}
                        </x-metronic.label>

                        <x-metronic.input id="secondary_base_hover_color" type="text"
                            name="secondary_base_hover_color" :value="$site ? $site->secondary_base_hover_color : ''"
                            placeholder="Enter Secondary Base Hover Color"></x-metronic.input>
                    </div>
                    <div class="col-lg-4">
                        <x-metronic.label for="phone_one" class="col-form-label fw-bold fs-6">{{ __('Phone One') }}
                        </x-metronic.label>

                        <x-metronic.input id="phone_one" type="text" name="phone_one" :value="$site ? $site->phone_one : ''"
                            placeholder="Enter Phone One"></x-metronic.input>
                    </div>
                    <div class="col-lg-4">
                        <x-metronic.label for="phone_two" class="col-form-label fw-bold fs-6">{{ __('Phone Two') }}
                        </x-metronic.label>

                        <x-metronic.input id="phone_two" type="text" name="phone_two" :value="$site ? $site->phone_two : ''"
                            placeholder="Enter Phone Two"></x-metronic.input>
                    </div>
                    <div class="col-lg-4">
                        <x-metronic.label for="whatsapp_number"
                            class="col-form-label fw-bold fs-6">{{ __('Whatsapp Number') }}
                        </x-metronic.label>

                        <x-metronic.input id="whatsapp_number" type="text" name="whatsapp_number"
                            :value="$site ? $site->whatsapp_number : ''" placeholder="Enter Whatsapp Number"></x-metronic.input>
                    </div>
                    <div class="col-lg-4">
                        <x-metronic.label for="default_language"
                            class="col-form-label fw-bold fs-6">{{ __('Default Language') }}
                        </x-metronic.label>

                        <x-metronic.input id="default_language" type="text" name="default_language"
                            :value="$site ? $site->default_language : ''" placeholder="Enter Default Language"></x-metronic.input>
                    </div>
                    <div class="col-lg-4">
                        <x-metronic.label for="default_currency"
                            class="col-form-label fw-bold fs-6">{{ __('Default Currency') }}
                        </x-metronic.label>

                        <x-metronic.input id="default_currency" type="text" name="default_currency"
                            :value="$site ? $site->default_currency : ''" placeholder="Enter Default Currency"></x-metronic.input>
                    </div>
                    <div class="col-lg-4">
                        <x-metronic.label for="contact_email"
                            class="col-form-label fw-bold fs-6">{{ __('Contact Email') }}
                        </x-metronic.label>

                        <x-metronic.input id="contact_email" type="text" name="contact_email" :value="$site ? $site->contact_email : ''"
                            placeholder="Enter Contact Email"></x-metronic.input>
                    </div>
                    <div class="col-lg-4">
                        <x-metronic.label for="support_email"
                            class="col-form-label fw-bold fs-6">{{ __('Support Email') }}
                        </x-metronic.label>

                        <x-metronic.input id="support_email" type="text" name="support_email" :value="$site ? $site->support_email : ''"
                            placeholder="Enter Support Email"></x-metronic.input>
                    </div>
                    <div class="col-lg-4">
                        <x-metronic.label for="info_email" class="col-form-label fw-bold fs-6">{{ __('Info Email') }}
                        </x-metronic.label>

                        <x-metronic.input id="info_email" type="text" name="info_email" :value="$site ? $site->info_email : ''"
                            placeholder="Enter Info Email"></x-metronic.input>
                    </div>
                    <div class="col-lg-4">
                        <x-metronic.label for="facebook_url"
                            class="col-form-label fw-bold fs-6">{{ __('Facebook Url') }}
                        </x-metronic.label>

                        <x-metronic.input id="facebook_url" type="text" name="facebook_url" :value="$site ? $site->facebook_url : ''"
                            placeholder="Enter Facebook Url"></x-metronic.input>
                    </div>
                    <div class="col-lg-4">
                        <x-metronic.label for="twitter_url"
                            class="col-form-label fw-bold fs-6">{{ __('Twitter Url') }}
                        </x-metronic.label>

                        <x-metronic.input id="twitter_url" type="text" name="twitter_url" :value="$site ? $site->twitter_url : ''"
                            placeholder="Enter Twitter Url"></x-metronic.input>
                    </div>
                    <div class="col-lg-4">
                        <x-metronic.label for="instagram_url"
                            class="col-form-label fw-bold fs-6">{{ __('Instagram Url') }}
                        </x-metronic.label>

                        <x-metronic.input id="instagram_url" type="text" name="instagram_url" :value="$site ? $site->instagram_url : ''"
                            placeholder="Enter Instagram Url"></x-metronic.input>
                    </div>
                    <div class="col-lg-4">
                        <x-metronic.label for="linkedin_url"
                            class="col-form-label fw-bold fs-6">{{ __('Linkedin Url') }}
                        </x-metronic.label>

                        <x-metronic.input id="linkedin_url" type="text" name="linkedin_url" :value="$site ? $site->linkedin_url : ''"
                            placeholder="Enter Linkedin Url"></x-metronic.input>
                    </div>
                    <div class="col-lg-4">
                        <x-metronic.label for="youtube_url"
                            class="col-form-label fw-bold fs-6">{{ __('Youtube Url') }}
                        </x-metronic.label>

                        <x-metronic.input id="youtube_url" type="text" name="youtube_url" :value="$site ? $site->youtube_url : ''"
                            placeholder="Enter Youtube Url"></x-metronic.input>
                    </div>
                    <div class="col-lg-4">
                        <x-metronic.label for="pinterest_url"
                            class="col-form-label fw-bold fs-6">{{ __('Pinterest Url') }}
                        </x-metronic.label>

                        <x-metronic.input id="pinterest_url" type="text" name="pinterest_url" :value="$site ? $site->pinterest_url : ''"
                            placeholder="Enter Youtube Url"></x-metronic.input>
                    </div>
                    <div class="col-lg-4">
                        <x-metronic.label for="service_days"
                            class="col-form-label fw-bold fs-6">{{ __('Service Days') }}
                        </x-metronic.label>

                        <x-metronic.input id="service_days" type="text" name="service_days" :value="$site ? $site->service_days : ''"
                            placeholder="Enter Service Days"></x-metronic.input>
                    </div>
                    <div class="col-lg-4">
                        <x-metronic.label for="service_time"
                            class="col-form-label fw-bold fs-6">{{ __('Service Time') }}
                        </x-metronic.label>

                        <x-metronic.input id="service_time" type="text" name="service_time" :value="$site ? $site->service_time : ''"
                            placeholder="Enter Service Time"></x-metronic.input>
                    </div>


                    <div class="col-lg-8">
                        <x-metronic.label for="service_time" class="col-form-label fw-bold fs-6">{{ __('About') }}
                        </x-metronic.label>

                        <textarea name="about" id="about" cols="1" rows="1" class="form-control"
                            placeholder="Enter about"></textarea>
                    </div>
                    <div class="col-lg-6">
                        <x-metronic.label for="address_line_one"
                            class="col-form-label fw-bold fs-6">{{ __('Address Line One') }}
                        </x-metronic.label>

                        <textarea name="address_line_one" id="address_line_one" cols="1" rows="1" class="form-control"
                            placeholder="Enter address_line_one">{!! $site->address_line_one !!}</textarea>
                    </div>
                    <div class="col-lg-6">
                        <x-metronic.label for="address_line_two"
                            class="col-form-label fw-bold fs-6">{{ __('Address Line Two') }}
                        </x-metronic.label>

                        <textarea name="address_line_two" id="address_line_two" cols="1" rows="1" class="form-control"
                            placeholder="Enter address_line_two">{!! $site->address_line_two !!}</textarea>
                    </div>
                    <div class="col-lg-12">
                        <div class="text-end pt-15">
                            <x-metronic.button type="submit" class="primary">
                                {{ __('Save Changes') }}
                            </x-metronic.button>
                        </div>
                    </div>
                </div>
            </form>
            <!--end::Form-->
        </div>
        <!--end::Modal body-->
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

{{-- Website Form Start --}}
@if ($qr->qr_type == "website")
    <div class="container" id="website-form">
        <div class="row text-center justify-content-center">
            <h2 class="text-center mb-0">Website Form</h2>
            <p class="text-center mb-0">Paste a URL below to link with your QR code.</p>
        </div>
        <div class="row pt-4">
            <div class="mb-4">
                <x-metronic.label for="qr_data_website_url"
                    class="form-label required">{{ __('Website Url') }}</x-metronic.label>
                <x-metronic.input id="qr_data_website_url" type="text" name="qr_data_website_url" :value="$qr->qrData->qr_data_website_url"
                    placeholder="Website Url" />
            </div>
        </div>
    </div>
@endif





{{-- PDF Form Start --}}
@if ($qr->qr_type == "pdf")
    <div class="container" id="pdf-form">
        <div class="row text-center justify-content-center">
            <h2 class="text-center mb-0">PDF Form</h2>
            <p class="text-center mb-0">Upload Your PDF File Here For QR Code.</p>
        </div>
        <div class="row pt-4">
            <div class="d-flex align-items-center">
                <x-metronic.label for="qr_data_pdf" class="form-label">{{ __('Upload Pdf') }}</x-metronic.label>
                <x-metronic.input id="qr_data_pdf" type="file" name="qr_data_pdf" :value="$qr->qrData->qr_data_pdf"
                    placeholder="Upload Pdf" />
            </div>
        </div>
    </div>
@endif
{{-- Image Form Start --}}
@if ($qr->qr_type == "image")
    <div class="container" id="image-form">
        <div class="row text-center justify-content-center">
            <h2 class="text-center mb-0">Image Form</h2>
            <p class="text-center mb-0">Upload Your Image or Link Here For QR Code.</p>
        </div>
        <div class="row pt-4">
            <div class="d-flex align-items-center">
                <x-metronic.label for="qr_data_image" class="form-label">{{ __('Upload Image') }}</x-metronic.label>
                <x-metronic.input id="qr_data_image" type="file" name="qr_data_image" :value="old('qr_data_image')"
                    placeholder="Upload Image" />
            </div>
            <div class="pt-4">
                <x-metronic.label for="qr_data_image_link"
                    class="form-label">{{ __('Or Upload Image Link') }}</x-metronic.label>
                <x-metronic.input id="qr_data_image_link" type="text" name="qr_data_image_link" :value="$qr->qrData->qr_data_image_link"
                    placeholder="Or Upload Image Link" />
            </div>
        </div>
    </div>
@endif
{{-- SMS Form Start --}}
@if ($qr->qr_type == "sms")
    <div class="container" id="sms-form">
        <div class="row text-center justify-content-center">
            <h2 class="text-center mb-0">SMS information</h2>
            <p class="text-center mb-0">Specify details of the text (SMS) to link your QR code to.</p>
        </div>
        <div class="row pt-4">
            <div class="pt-4">
                <x-metronic.label for="qr_data_sms_number"
                    class="required form-label">{{ __('Phone Number') }}</x-metronic.label>
                <x-metronic.input id="qr_data_sms_number" type="text" name="qr_data_sms_number" :value="$qr->qrData->qr_data_sms_number"
                    placeholder="Phone Number" required />
            </div>
            <div class="pt-4">
                <label for="qr_data_sms_message" class="required form-label">Message</label>
                <textarea class="form-control form-control-solid" name="qr_data_sms_message" id="qr_data_sms_message" rows="3"
                    required>{{ $qr->qrData->qr_data_sms_message }}</textarea>
            </div>
        </div>
    </div>
@endif
{{-- Email Form Start --}}
@if ($qr->qr_type == "email")
    <div class="container" id="email-form">
        <div class="row text-center justify-content-center">
            <h2 class="text-center mb-0">Email information</h2>
            <p class="text-center mb-0">Specify details of the email message to link your QR code to.</p>
        </div>
        <div class="row pt-4">
            <div class="pb-4">
                <x-metronic.label for="qr_data_email_id"
                    class="required form-label">{{ __('Receiver Email') }}</x-metronic.label>
                <x-metronic.input id="qr_data_email_id" type="text" name="qr_data_email_id" :value="$qr->qrData->qr_data_email_id"
                    placeholder="sample@mail.com" required />
            </div>
            <div class="pb-4">
                <x-metronic.label for="qr_data_email_subject"
                    class="form-label">{{ __('Email Subject') }}</x-metronic.label>
                <x-metronic.input id="qr_data_email_subject" type="text" name="qr_data_email_subject" :value="$qr->qrData->qr_data_email_subject"
                    placeholder="Email Subject" />
            </div>
            <div class="pb-4">
                <label for="qr_data_email_body" class="required form-label">Mail Body</label>
                <textarea class="form-control form-control-solid" name="qr_data_email_body" id="qr_data_email_body" rows="3"
                    required>{{ $qr->qrData->qr_data_email_body }}</textarea>
            </div>
        </div>
    </div>
@endif
{{-- Mobile App Form Start --}}
@if ($qr->qr_type == "mobile_app")
    <div class="container" id="mobile_app-form">
        <div class="row text-center justify-content-center">
            <h2 class="text-center mb-0">Mobile App</h2>
            <p class="text-center mb-0">Redirect to app download or in-app pages for Android and iOS users.</p>
        </div>
        <div class="row pt-4">
            <div class="pb-4">
                <x-metronic.label for="qr_app_android"
                    class="form-label">{{ __('Google Play store URL') }}</x-metronic.label>
                <x-metronic.input id="qr_app_android" type="text" name="qr_app_android" :value="$qr->qrData->qr_app_android"
                    placeholder="Google Play store URL" />
            </div>
            <div class="pb-4">
                <x-metronic.label for="qr_data_app_iphone"
                    class="form-label">{{ __('App store URL (iPhone)') }}</x-metronic.label>
                <x-metronic.input id="qr_data_app_iphone" type="text" name="qr_data_app_iphone" :value="$qr->qrData->qr_data_app_iphone"
                    placeholder="App store URL (iPhone)" />
            </div>
            <div class="pb-4">
                <x-metronic.label for="qr_data_app_ipad"
                    class="form-label">{{ __('App store URL (iPad and macOS)') }}</x-metronic.label>
                <x-metronic.input id="qr_data_app_ipad" type="text" name="qr_data_app_ipad" :value="$qr->qrData->qr_data_app_ipad"
                    placeholder="App store URL (iPad and macOS)" />
            </div>
        </div>
    </div>
@endif
{{-- call Form Start --}}
@if ($qr->qr_type == "call")
    <div class="container" id="call-form">
        <div class="row text-center justify-content-center">
            <h2 class="text-center mb-0">Call Information</h2>
            <p class="text-center mb-0">Specify details of the phone number to link your QR code to.</p>
        </div>
        <div class="row pt-4">
            <div class="pb-4">
                <x-metronic.label for="qr_data_call_number"
                    class="form-label">{{ __('Phone Number') }}</x-metronic.label>
                <x-metronic.input id="qr_data_call_number" type="text" name="qr_data_call_number" :value="$qr->qrData->qr_data_call_number"
                    placeholder="Phone Number" />
            </div>
        </div>
    </div>
@endif
{{-- location Form Start --}}
@if ($qr->qr_type == "location")
    <div class="container" id="location-form">
        <div class="row text-center justify-content-center">
            <h2 class="text-center mb-0">Choose location</h2>
            <p class="text-center mb-0">Choose a location to link to your QR code.</p>
        </div>
        <div class="row pt-4">
            <div class="pb-4">
                <x-metronic.label for="qr_data_location_latitude"
                    class="form-label">{{ __('Select Location Latitude') }}</x-metronic.label>
                <x-metronic.input id="qr_data_location_latitude" type="text" name="qr_data_location_latitude"
                    :value="$qr->qrData->qr_data_location_latitude" placeholder="Select Latitude" />
            </div>
            <div class="pb-4">
                <x-metronic.label for="qr_data_location_longitude"
                    class="form-label">{{ __('Select Location Longitude') }}</x-metronic.label>
                <x-metronic.input id="qr_data_location_longitude" type="text" name="qr_data_location_longitude"
                    :value="$qr->qrData->qr_data_location_longitude" placeholder="Select Longitude" />
            </div>
            <div class="mt-2">
                <div id="map" style="height: 400px;"></div>
            </div>
        </div>
    </div>
@endif

{{-- Coupon Form Start --}}
@if ($qr->qr_type == "coupon_code")
    <div class="container" id="coupon_code-form">
        <div class="row text-center justify-content-center">
            <h2 class="text-center mb-0">Coupon Code</h2>
            <p class="text-center mb-0">Create Coupon Code.</p>
        </div>
        <div class="pb-4 row">
            <div class="pb-4 col-lg-4">
                <x-metronic.label for="qr_data_coupon_header" class="form-label">{{ __('Header') }}</x-metronic.label>
                <x-metronic.input id="qr_data_coupon_header" type="text" name="qr_data_coupon_header"
                    :value="$qr->qrData->qr_data_coupon_header" placeholder="30% Discount" />
            </div>
            <div class="pb-4 col-lg-4">
                <x-metronic.label for="qr_data_coupon_message" class="form-label">{{ __('Message Line One') }}</x-metronic.label>
                <x-metronic.input id="qr_data_coupon_message" type="text" name="qr_data_coupon_message"
                    :value="$qr->qrData->qr_data_coupon_message" placeholder="Big Sale" />
            </div>
            <div class="pb-4 col-lg-4">
                <x-metronic.label for="qr_data_coupon_description_body"
                    class="form-label">{{ __('Message Line Two') }}</x-metronic.label>
                <x-metronic.input id="qr_data_coupon_description_body" type="text"
                    name="qr_data_coupon_description_body" :value="$qr->qrData->qr_data_coupon_description_body"
                    placeholder="Discount" />
            </div>
            <div class="pb-4 col-lg-4">
                <x-metronic.label for="qr_data_coupon_company" class="form-label">{{ __('Company Name') }}</x-metronic.label>
                <x-metronic.input id="qr_data_coupon_company" type="text" name="qr_data_coupon_company"
                    :value="$qr->qrData->qr_data_coupon_company" placeholder="GALAXXY MEDIA LLC." />
            </div>
            <div class="pb-4 col-lg-4">
                <x-metronic.label for="qr_data_coupon_code" class="form-label">{{ __('Coupon code') }}</x-metronic.label>
                <x-metronic.input id="qr_data_coupon_code" type="text" name="qr_data_coupon_code" :value="$qr->qrData->qr_data_coupon_code"
                    placeholder="Coupon code" />
            </div>
            <div class="pb-4 col-lg-4">
                <x-metronic.label for="qr_data_coupon_logo" class="form-label">{{ __('Coupon Logo') }}</x-metronic.label>
                <x-metronic.input id="qr_data_coupon_logo" type="file" name="qr_data_coupon_logo" :value="$qr->qrData->qr_data_coupon_logo"
                    placeholder="Coupon Logo" />
            </div>

            <div class="pb-4 col-lg-4">
                <x-metronic.label for="qr_data_coupon_expire_date"
                    class="form-label">{{ __('Expires on') }}</x-metronic.label>
                <x-metronic.input id="qr_data_coupon_expire_date" type="date" name="qr_data_coupon_expire_date"
                    :value="$qr->qrData->qr_data_coupon_expire_date" placeholder="Expires on" />
            </div>

            <div class="pb-4 col-lg-4">
                <x-metronic.label for="qr_data_coupon_description_header"
                    class="form-label">{{ __('Description header') }}</x-metronic.label>
                <x-metronic.input id="qr_data_coupon_description_header" type="text"
                    name="qr_data_coupon_description_header" :value="$qr->qrData->qr_data_coupon_description_header" placeholder="Holiday Season Sale" />
            </div>

            <div class="pb-4 col-lg-4">
                <x-metronic.label for="qr_data_coupon_website" class="form-label">{{ __('Website URL') }}</x-metronic.label>
                <x-metronic.input id="qr_data_coupon_website" type="url" name="qr_data_coupon_website"
                    :value="$qr->qrData->qr_data_coupon_website" placeholder="http://www.website.com" />
            </div>

            <div class="col-lg-4 pb-4">
                <div class="row">
                    <label for="secondary_color_text">Background color</label>
                    <div class="col-lg-10 pe-0">
                        <div>
                            <input type="text" name="background_color_picker" id="secondary_color_text"
                                value="{{ $qr->qrData->qr_data_coupon_background_color }}" class="form-control form-control-solid">
                        </div>
                    </div>
                    <div class="col-lg-2 ps-0">
                        <div>
                            <input type="color" name="qr_data_coupon_background_color" id="secondary_color_text_picker"
                                value="{{ $qr->qrData->qr_data_coupon_background_color }}" style="width: 50px;height: 43px;" oninput="changecouponBackgroundColor()"
                                class="form-control form-control-solid">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 pb-4">
                <div class="row">
                    <label for="secondary_color_text">Title color (With BG Include)</label>
                    <div class="col-lg-10 pe-0">
                        <div>
                            <input type="text" name="title_color_picker" id="secondary_color_text" value="{{ $qr->qrData->qr_data_coupon_title_color }}"
                                class="form-control form-control-solid">
                        </div>
                    </div>
                    <div class="col-lg-2 ps-0">
                        <div>
                            <input type="color" name="qr_data_coupon_title_color" id="secondary_color_text_picker"
                                value="{{ $qr->qrData->qr_data_coupon_title_color }}" style="width: 50px;height: 43px;" oninput="changecouponTitleColor()"
                                class="form-control form-control-solid">
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 pb-4">
                <div class="row">
                    <label for="buttonContact">Website Button Background Color</label>
                    <div class="col-lg-10 pe-0">
                        <div>
                            <input type="text" name="buttonContact" id="buttonContact" value="{{ $qr->qrData->qr_data_coupon_button_bg_color }}"
                                class="form-control form-control-solid">
                        </div>
                    </div>
                    <div class="col-lg-2 ps-0">
                        <div>
                            <input type="color" name="qr_data_coupon_button_bg_color" id="button_color_picker"
                                value="{{ $qr->qrData->qr_data_coupon_button_bg_color }}" style="width: 50px;height: 43px;" oninput="changecouponwebsiteBgColor()"
                                class="form-control form-control-solid">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 pb-4">
                <div class="row">
                    <label for="buttonContact">Website Button Title Color</label>
                    <div class="col-lg-10 pe-0">
                        <div>
                            <input type="text" name="buttonContact" id="buttonContact" value="{{ $qr->qrData->qr_data_coupon_button_title_color }}"
                                class="form-control form-control-solid">
                        </div>
                    </div>
                    <div class="col-lg-2 ps-0">
                        <div>
                            <input type="color" name="qr_data_coupon_button_title_color" id="button_color_picker"
                                value="{{ $qr->qrData->qr_data_coupon_button_title_color }}" style="width: 50px;height: 43px;"
                                oninput="changecouponwebsiteTitleColor()" class="form-control form-control-solid">
                        </div>
                    </div>
                </div>
            </div>

            <div class="pb-4 col-lg-8">
                <x-metronic.label for="qr_data_coupon_policy"
                    class="form-label">{{ __('Terms & conditions') }}</x-metronic.label>
                <x-metronic.input id="qr_data_coupon_policy" type="text" name="qr_data_coupon_policy"
                    :value="$qr->qrData->qr_data_coupon_policy" placeholder="Policy" />
            </div>

        </div>
    </div>
@endif

{{-- Social Form Start --}}
@if ($qr->qr_type == "social")
    <div class="container" id="social-form">
        <div class="row text-center justify-content-center">
            <h2 class="text-center mb-0">Social Media</h2>
            <p class="text-center mb-0">Link to your social media channels for more engagement.</p>
        </div>
        <div class="row pt-4">
            <div class="pb-4 col-lg-5">
                <label for="exampleFormControlInput1" class="required form-label">Logo</label>
                <input type="file" class="form-control form-control-solid" name="logo" />
            </div>
            <div class="col-lg-1 d-lg-block d-sm-none">
                <div class="fv-row my-3 pt-5">
                    <div>
                        <img width="50px" height="50px" class="rounded-circle border banner_image"
                            id="profile_image_preview" src="" alt="">
                    </div>
                </div>
            </div>
            <div class="pb-4 col-lg-5">
                <label for="exampleFormControlInput1" class="required form-label">Image</label>
                <input type="file" class="form-control form-control-solid" name="social_banner" />
            </div>
            <div class="col-lg-1 d-lg-block d-sm-none">
                <div class="fv-row my-3 pt-5">
                    <div>
                        <img width="50px" height="50px" class="rounded-circle border banner_image"
                            id="profile_image_preview" src="" alt="">
                    </div>
                </div>
            </div>
            <div class="pb-4 col-lg-6">
                <label for="exampleFormControlInput1" class="required form-label">Title</label>
                <input type="text" class="form-control form-control-solid" placeholder="Enter Title" />
            </div>
            <div class="col-lg-6 pb-4">
                <div class="row gx-0">
                    <div class="col-lg-8">
                        <label for="exampleFormControlInput1" class="required form-label">Title Color</label>
                        <input type="text" class="form-control form-control-solid" placeholder="Enter Title" />
                    </div>
                    <div class="col-lg-2">
                        <label for="exampleFormControlInput1" class="required form-label"></label>
                        <input type="color" class="form-control form-control-solid" placeholder="Enter Title"
                            style="width: 135px;
                        height: 40px;" />
                    </div>
                </div>
            </div>
            <div>
                <p class="fw-bold pt-5 mb-0">Body</p>
            </div>
            <div class="pb-4 col-lg-6">
                <label for="exampleFormControlInput1" class="required form-label">Message</label>
                <input type="text" class="form-control form-control-solid" placeholder="Enter Message" />
            </div>
            <div class="pb-4 col-lg-6">
                <label for="exampleFormControlInput1" class="required form-label">Subtext</label>
                <input type="text" class="form-control form-control-solid" placeholder="Enter Subtext" />
            </div>
            <div class="pb-4 col-lg-6">
                <label for="exampleFormControlInput1" class="required form-label">Subtext</label>
                <input type="text" class="form-control form-control-solid" placeholder="Enter Subtext" />
            </div>
            <div class="col-lg-6 pb-4">
                <div class="row gx-0">
                    <div class="col-lg-8">
                        <label for="exampleFormControlInput1" class="required form-label">Background Color</label>
                        <input type="text" class="form-control form-control-solid" placeholder="Enter Title" />
                    </div>
                    <div class="col-lg-2">
                        <label for="exampleFormControlInput1" class="required form-label"></label>
                        <input type="color" class="form-control form-control-solid"
                            placeholder="Select background color"
                            style="width: 135px;
                        height: 40px;" />
                    </div>
                </div>
            </div>
            <div>
                <p class="fw-bold pt-5 mb-0">LINKS</p>
                <p>At least one field is mandatory *</p>
            </div>
            <div class="pb-4 col-lg-6">
                <label for="exampleFormControlInput1" class="required form-label">Facebook Username</label>
                <input type="text" class="form-control form-control-solid" placeholder="https://www.example.com" />
            </div>
            <div class="pb-4 col-lg-6">
                <label for="exampleFormControlInput1" class="required form-label">Instagram Username</label>
                <input type="text" class="form-control form-control-solid" placeholder="https://www.example.com" />
            </div>
            <div class="pb-4 col-lg-6">
                <label for="exampleFormControlInput1" class="required form-label">Twitter Username</label>
                <input type="text" class="form-control form-control-solid" placeholder="https://www.example.com" />
            </div>
            <div class="pb-4 col-lg-6">
                <label for="exampleFormControlInput1" class="required form-label">Pinterest Username</label>
                <input type="text" class="form-control form-control-solid" placeholder="https://www.example.com" />
            </div>
            <div class="pb-4 col-lg-6">
                <label for="exampleFormControlInput1" class="required form-label">Linkedin Username</label>
                <input type="text" class="form-control form-control-solid" placeholder="https://www.example.com" />
            </div>
            <div class="pb-4 col-lg-6">
                <label for="exampleFormControlInput1" class="required form-label">Whatsapp Username</label>
                <input type="text" class="form-control form-control-solid" placeholder="https://www.example.com" />
            </div>
            <div class="pb-4 col-lg-6">
                <label for="exampleFormControlInput1" class="required form-label">Youtube Username</label>
                <input type="text" class="form-control form-control-solid" placeholder="https://www.example.com" />
            </div>
            <div class="pb-4 col-lg-6">
                <label for="exampleFormControlInput1" class="required form-label">Snapchat Username</label>
                <input type="text" class="form-control form-control-solid" placeholder="https://www.example.com" />
            </div>
            <div class="pb-4 col-lg-6">
                <label for="exampleFormControlInput1" class="required form-label">Tiktok Username</label>
                <input type="text" class="form-control form-control-solid" placeholder="https://www.example.com" />
            </div>
            <div class="pb-4 col-lg-6">
                <label for="exampleFormControlInput1" class="required form-label">Website Username</label>
                <input type="text" class="form-control form-control-solid" placeholder="https://www.example.com" />
            </div>
        </div>
    </div>
@endif

{{-- Audio Form Start --}}
@if ($qr->qr_type == "audio")
    <div class="container" id="audio-form">
        <div class="row text-center justify-content-center">
            <h2 class="text-center mb-0">MP3/Audio</h2>
            <p class="text-center mb-0">Upload MP3/Audio File</p>
        </div>
        <div class="pt-5 ps-5">
            <h2>Upload audio</h2>
            <p>Upload audio file that your QR code should link to.</p>
        </div>
        <div class="pb-4 row">
            <x-metronic.label for="qr_data_audio_file"
                class="form-label">{{ __('Audio File (mp3,web)') }}</x-metronic.label>
            <x-metronic.input id="qr_data_audio_file" type="file" name="qr_data_audio_file" :value="old('qr_data_audio_file')"
                placeholder="Audio File (mp3,web)" />
            <div class="pt-4 col-lg-6">
                <x-metronic.label for="qr_data_audio_link"
                    class="form-label">{{ __('Or Paste Link Below') }}</x-metronic.label>
                <x-metronic.input id="qr_data_audio_link" type="url" name="qr_data_audio_link" :value="old('qr_data_audio_link')"
                    placeholder="Audio File link" />
            </div>
        </div>
    </div>
@endif

{{-- Business Page Form Start --}}
@if ($qr->qr_type == "business_page")
    <div class="row container" id="business_page-form">
        <div class="row text-center justify-content-center">
            <h2 class="text-center mb-0">Business Page</h2>
            <p class="text-center mb-0">Share a Card For Your Business</p>
        </div>
        <div class="pb-4 row">
            <div class="pt-4 col-lg-6">
                <label for="exampleFormControlInput1" class="required form-label">Business Name</label>
                <input type="text" class="form-control form-control-solid" placeholder="Enter Name" />
            </div>
            <div class="pt-4 col-lg-6">
                <label for="exampleFormControlInput1" class="required form-label">Headline</label>
                <input type="text" class="form-control form-control-solid" placeholder="Enter Headline" />
            </div>
            <div class="pt-4 col-lg-12">
                <label for="exampleFormControlInput1" class="required form-label">Message</label>
                <input type="text" class="form-control form-control-solid" placeholder="Enter Message" />
            </div>
            <div class="pt-4 col-lg-6">
                <label for="exampleFormControlInput1" class="required form-label">Button Title</label>
                <input type="text" class="form-control form-control-solid" placeholder="Enter Button Title" />
            </div>
            <div class="pt-4 col-lg-6">
                <label for="exampleFormControlInput1" class="required form-label">Button URL</label>
                <input type="text" class="form-control form-control-solid" placeholder="Enter Button URL" />
            </div>
            <div class="pt-4 col-lg-6">
                <label for="exampleFormControlInput1" class="required form-label">Button URL</label>
                <input type="text" class="form-control form-control-solid" placeholder="Enter Button URL" />
            </div>
            <div class="pt-4 col-lg-4">
                <label for="exampleFormControlInput1" class="required form-label">Button Color</label>
                <input type="text" class="form-control form-control-solid" placeholder="Enter Title" />
            </div>
            <div class="pt-4 col-lg-2">
                <label for="exampleFormControlInput1" class="required form-label"></label>
                <input type="color" class="form-control form-control-solid" placeholder="Enter Title"
                    style="width: 135px;
                height: 40px;" />
            </div>
            <div>
                <h6 class="fw-bold pt-5 mb-0">Contact Info</h6>
            </div>
            <div class="pt-4 col-lg-6">
                <label for="exampleFormControlInput1" class="required form-label">Name</label>
                <input type="text" class="form-control form-control-solid" placeholder="Jhone Doe" />
            </div>
            <div class="pt-4 col-lg-6">
                <label for="exampleFormControlInput1" class="required form-label">Phone</label>
                <input type="text" class="form-control form-control-solid" placeholder="01*****" />
            </div>
            <div class="pt-4 col-lg-6">
                <label for="exampleFormControlInput1" class="required form-label">Email</label>
                <input type="text" class="form-control form-control-solid" placeholder="Your Email" />
            </div>
            <div class="pt-4 col-lg-6">
                <label for="exampleFormControlInput1" class="required form-label">Address</label>
                <input type="text" class="form-control form-control-solid" placeholder="Your Address" />
            </div>
            <div class="pt-4 col-lg-12">
                <label for="exampleFormControlInput1" class="required form-label">Location</label>
                <input type="text" class="form-control form-control-solid" placeholder="Your Location" />
            </div>
            <div>
                <h6 class="fw-bold pt-5 mb-0">Shedule Info</h6>
            </div>
            <div class="col-lg-12">
                <div class="row align-items-center">
                    <div class="col-lg-4">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked"
                                checked>
                            <label class="form-check-label" for="flexCheckChecked">
                                Monday
                            </label>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <x-metronic.input id="qr_data_start_time_monday" type="time" name="qr_data_start_time_monday"
                            :value="old('qr_data_start_time_monday')" placeholder="Audio File (mp3,web)" />
                    </div>
                    <div class="col-lg-4">
                        <x-metronic.input id="qr_data_end_time_monday" type="time" name="qr_data_end_time_monday"
                            :value="old('qr_data_end_time_monday')" placeholder="Audio File (mp3,web)" />
                    </div>
                </div>
                <div class="row align-items-center">
                    <div class="col-lg-4">
                        <div class="form-check">
                            <input class="form-check-input " type="checkbox" value="" id="flexCheckChecked"
                                checked>
                            <label class="form-check-label" for="flexCheckChecked">
                                Tuesday
                            </label>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <x-metronic.input id="qr_data_start_time_tuesday" type="time"
                            name="qr_data_start_time_tuesday" :value="old('qr_data_start_time_tuesday')" placeholder="Audio File (mp3,web)" />
                    </div>
                    <div class="col-lg-4">
                        <x-metronic.input id="qr_data_end_time_tuesday" type="time" name="qr_data_end_time_tuesday"
                            :value="old('qr_data_end_time_tuesday')" placeholder="Audio File (mp3,web)" />
                    </div>
                </div>
                <div class="row align-items-center">
                    <div class="col-lg-4">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked"
                                checked>
                            <label class="form-check-label" for="flexCheckChecked">
                                Wednesday
                            </label>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <x-metronic.input id="qr_data_start_time_wednesday" type="time"
                            name="qr_data_start_time_wednesday" :value="old('qr_data_start_time_wednesday')" placeholder="Audio File (mp3,web)" />
                    </div>
                    <div class="col-lg-4">
                        <x-metronic.input id="qr_data_end_time_wednesday" type="time"
                            name="qr_data_end_time_wednesday" :value="old('qr_data_end_time_wednesday')" placeholder="Audio File (mp3,web)" />
                    </div>
                </div>
                <div class="row align-items-center">
                    <div class="col-lg-4">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked"
                                checked>
                            <label class="form-check-label" for="flexCheckChecked">
                                Thursday
                            </label>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <x-metronic.input id="qr_data_start_time_thursday" type="time"
                            name="qr_data_start_time_thursday" :value="old('qr_data_start_time_thursday')" placeholder="Audio File (mp3,web)" />
                    </div>
                    <div class="col-lg-4">
                        <x-metronic.input id="qr_data_end_time_thursday" type="time" name="qr_data_end_time_thursday"
                            :value="old('qr_data_end_time_thursday')" placeholder="Audio File (mp3,web)" />
                    </div>
                </div>
                <div class="row align-items-center">
                    <div class="col-lg-4">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked"
                                checked>
                            <label class="form-check-label" for="flexCheckChecked">
                                Friday
                            </label>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <x-metronic.input id="qr_data_start_time_friday" type="time" name="qr_data_start_time_friday"
                            :value="old('qr_data_start_time_friday')" placeholder="Audio File (mp3,web)" />
                    </div>
                    <div class="col-lg-4">
                        <x-metronic.input id="qr_data_end_time_friday" type="time" name="qr_data_end_time_friday"
                            :value="old('qr_data_end_time_friday')" placeholder="Audio File (mp3,web)" />
                    </div>
                </div>
                <div class="row align-items-center">
                    <div class="col-lg-4">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked"
                                checked>
                            <label class="form-check-label" for="flexCheckChecked">
                                Saturday
                            </label>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <x-metronic.input id="qr_data_start_time_saturday" type="time"
                            name="qr_data_start_time_saturday" :value="old('qr_data_start_time_saturday')" placeholder="Audio File (mp3,web)" />
                    </div>
                    <div class="col-lg-4">
                        <x-metronic.input id="qr_data_end_time_saturday" type="time" name="qr_data_end_time_saturday"
                            :value="old('qr_data_end_time_saturday')" placeholder="Audio File (mp3,web)" />
                    </div>
                </div>
                <div class="row align-items-center">
                    <div class="col-lg-4">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked"
                                checked>
                            <label class="form-check-label" for="flexCheckChecked">
                                Sunday
                            </label>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <x-metronic.input id="qr_data_start_time_sunday" type="time" name="qr_data_start_time_sunday"
                            :value="old('qr_data_start_time_sunday')" placeholder="Audio File (mp3,web)" />
                    </div>
                    <div class="col-lg-4">
                        <x-metronic.input id="qr_data_end_time_sunday" type="time" name="qr_data_end_time_sunday"
                            :value="old('qr_data_end_time_sunday')" placeholder="Audio File (mp3,web)" />
                    </div>
                </div>
            </div>
            <div>
                <h6 class="fw-bold pt-5 mb-0">Brand Info</h6>
            </div>
            <div class="pt-4 col-lg-12">
                <label for="exampleFormControlInput1" class="required form-label">Brand Logo</label>
                <x-metronic.label for="qr_data_image" class="form-label">{{ __('Upload Image') }}</x-metronic.label>
                <x-metronic.input id="qr_data_image" type="file" name="qr_data_image" :value="old('qr_data_image')"
                    placeholder="Upload Image" />
            </div>
            <div class="pt-4 col-lg-12">
                <label for="exampleFormControlInput1" class="required form-label">Brand Image</label>
                <x-metronic.label for="qr_data_image" class="form-label">{{ __('Upload Image') }}</x-metronic.label>
                <x-metronic.input id="qr_data_image" type="file" name="qr_data_image" :value="old('qr_data_image')"
                    placeholder="Upload Image" />
            </div>
        </div>
    </div>
@endif

{{-- Restaurant Form --}}
@if ($qr->qr_type == "restaurant")
    <div class="container" id="restaurant-form">
        <div class="row text-center justify-content-center">
            <h2 class="text-center mb-0">Restaurant Form</h2>
            <p class="text-center mb-0">Upload MP3/Audio File</p>
        </div>
        <div class="pt-5 ps-5">
            <h2>Restaurant Form</h2>
            <p>Upload audio file that your QR code should link to.</p>
        </div>
        <div class="pb-4 row">

        </div>
    </div>
@endif
{{-- Facebook Page Form --}}
@if ($qr->qr_type == "facebook_page")
    <div class="container" id="facebook_page-form">
        <div class="row text-center justify-content-center">
            <h2 class="text-center mb-0">Facebook Form</h2>
            <p class="text-center mb-0">Upload audio file that your QR code should link to.</p>
        </div>
        <div class="pb-4 row">
            <div class="col-lg-12 pb-4">
                <label for="exampleFormControlInput1" class="required form-label">Facebook page username</label>
                <input type="url" class="form-control form-control-solid" name="page_url"
                    placeholder="https://www.facebook.com/" />
            </div>
            <div class="col-lg-12 pb-4">
                <label for="exampleFormControlInput1" class="required form-label">Header</label>
                <input type="url" class="form-control form-control-solid" name="page_header"
                    placeholder="Like Us On !" />
            </div>
            <div class="pb-4 col-lg-5">
                <label for="exampleFormControlInput1" class="required form-label">Logo <small>(1920x1080 pixels. 5MB max
                        file size.)</small></label>
                <input type="file" class="form-control form-control-solid" name="logo" />
            </div>
            <div class="col-lg-1 d-lg-block d-sm-none">
                <div class="fv-row my-3 pt-5">
                    <div>
                        <img width="50px" height="50px" class="rounded-circle border banner_image"
                            id="profile_image_preview" src="" alt="">
                    </div>
                </div>
            </div>
            <div class="pb-4 col-lg-5">
                <label for="exampleFormControlInput1" class="required form-label">Image <small>(192x192 pixels. 5MB max
                        file size.)</small></label>
                <input type="file" class="form-control form-control-solid" name="social_banner" />
            </div>
            <div class="col-lg-1 d-lg-block d-sm-none">
                <div class="fv-row my-3 pt-5">
                    <div>
                        <img width="50px" height="50px" class="rounded-circle border banner_image"
                            id="profile_image_preview" src="" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
@endif

{{-- Website Form Start --}}

<div class="form-container" id="website-form">
    <div class="row text-center justify-content-center">
        <h2 class="text-center mb-0">Website Form</h2>
        <p class="text-center mb-0">Paste a URL below to link with your QR code.</p>
    </div>
    <div class="row pt-4">
        <div class="mb-4">
            <x-metronic.label for="qr_data_website_url"
                class="form-label required">{{ __('Website Url') }}</x-metronic.label>
            <x-metronic.input id="qr_data_website_url" type="text" name="qr_data_website_url"
                placeholder="Website Url" />
        </div>
    </div>
</div>





{{-- PDF Form Start --}}
<div class="form-container" id="pdf-form">
    <div class="row text-center justify-content-center">
        <h2 class="text-center mb-0">PDF Form</h2>
        <p class="text-center mb-0">Upload Your PDF File Here For QR Code.</p>
    </div>
    <div class="row pt-4">
        <div class="d-flex align-items-center">
            <x-metronic.label for="qr_data_pdf" class="form-label">{{ __('Upload Pdf') }}</x-metronic.label>
            <x-metronic.input id="qr_data_pdf" type="file" name="qr_data_pdf" :value="old('qr_data_pdf')"
                placeholder="Upload Pdf" />
        </div>
    </div>
</div>
{{-- Image Form Start --}}
<div class="form-container" id="image-form">
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
            <x-metronic.input id="qr_data_image_link" type="text" name="qr_data_image_link" :value="old('qr_data_image_link')"
                placeholder="Or Upload Image Link" />
        </div>
    </div>
</div>
{{-- SMS Form Start --}}
<div class="form-container" id="sms-form">
    <div class="row text-center justify-content-center">
        <h2 class="text-center mb-0">SMS information</h2>
        <p class="text-center mb-0">Specify details of the text (SMS) to link your QR code to.</p>
    </div>
    <div class="row pt-4">
        <div class="pt-4">
            <x-metronic.label for="qr_data_sms_number"
                class="required form-label">{{ __('Phone Number') }}</x-metronic.label>
            <x-metronic.input id="qr_data_sms_number" type="text" name="qr_data_sms_number" :value="old('qr_data_sms_number')"
                placeholder="Phone Number" required />
        </div>
        <div class="pt-4">
            <label for="qr_data_sms_message" class="required form-label">Message</label>
            <textarea class="form-control form-control-solid" name="qr_data_sms_message" id="qr_data_sms_message" rows="3"
                required></textarea>
        </div>
    </div>
</div>
{{-- Email Form Start --}}
<div class="form-container" id="email-form">
    <div class="row text-center justify-content-center">
        <h2 class="text-center mb-0">Email information</h2>
        <p class="text-center mb-0">Specify details of the email message to link your QR code to.</p>
    </div>
    <div class="row pt-4">
        <div class="pb-4">
            <x-metronic.label for="qr_data_email_id"
                class="required form-label">{{ __('Receiver Email') }}</x-metronic.label>
            <x-metronic.input id="qr_data_email_id" type="text" name="qr_data_email_id" :value="old('qr_data_email_id')"
                placeholder="sample@mail.com" required />
        </div>
        <div class="pb-4">
            <x-metronic.label for="qr_data_email_subject"
                class="form-label">{{ __('Email Subject') }}</x-metronic.label>
            <x-metronic.input id="qr_data_email_subject" type="text" name="qr_data_email_subject" :value="old('qr_data_email_subject')"
                placeholder="Email Subject" />
        </div>
        <div class="pb-4">
            <label for="qr_data_email_body" class="required form-label">Mail Body</label>
            <textarea class="form-control form-control-solid" name="qr_data_email_body" id="qr_data_email_body" rows="3"
                required></textarea>
        </div>
    </div>
</div>
{{-- Mobile App Form Start --}}
<div class="form-container" id="mobile_app-form">
    <div class="row text-center justify-content-center">
        <h2 class="text-center mb-0">Mobile App</h2>
        <p class="text-center mb-0">Redirect to app download or in-app pages for Android and iOS users.</p>
    </div>
    <div class="row pt-4">
        <div class="pb-4">
            <x-metronic.label for="qr_app_android"
                class="form-label">{{ __('Google Play store URL') }}</x-metronic.label>
            <x-metronic.input id="qr_app_android" type="text" name="qr_app_android" :value="old('qr_app_android')"
                placeholder="Google Play store URL" />
        </div>
        <div class="pb-4">
            <x-metronic.label for="qr_data_app_iphone"
                class="form-label">{{ __('App store URL (iPhone)') }}</x-metronic.label>
            <x-metronic.input id="qr_data_app_iphone" type="text" name="qr_data_app_iphone" :value="old('qr_data_app_iphone')"
                placeholder="App store URL (iPhone)" />
        </div>
        <div class="pb-4">
            <x-metronic.label for="qr_data_app_ipad"
                class="form-label">{{ __('App store URL (iPad and macOS)') }}</x-metronic.label>
            <x-metronic.input id="qr_data_app_ipad" type="text" name="qr_data_app_ipad" :value="old('qr_data_app_ipad')"
                placeholder="App store URL (iPad and macOS)" />
        </div>
    </div>
</div>
{{-- call Form Start --}}
<div class="form-container" id="call-form">
    <div class="row text-center justify-content-center">
        <h2 class="text-center mb-0">Call Information</h2>
        <p class="text-center mb-0">Specify details of the phone number to link your QR code to.</p>
    </div>
    <div class="row pt-4">
        <div class="pb-4">
            <x-metronic.label for="qr_data_call_number"
                class="form-label">{{ __('Phone Number') }}</x-metronic.label>
            <x-metronic.input id="qr_data_call_number" type="text" name="qr_data_call_number" :value="old('qr_data_call_number')"
                placeholder="Phone Number" />
        </div>
    </div>
</div>
{{-- location Form Start --}}
<div class="form-container" id="location-form">
    <div class="row text-center justify-content-center">
        <h2 class="text-center mb-0">Choose location</h2>
        <p class="text-center mb-0">Choose a location to link to your QR code.</p>
    </div>
    <div class="row pt-4">
        <div class="pb-4">
            <x-metronic.label for="qr_data_location_latitude"
                class="form-label">{{ __('Select Location Latitude') }}</x-metronic.label>
            <x-metronic.input id="qr_data_location_latitude" type="text" name="qr_data_location_latitude" :value="old('qr_data_location_latitude')"
                placeholder="Select Latitude" />
        </div>
        <div class="pb-4">
            <x-metronic.label for="qr_data_location_longitude"
                class="form-label">{{ __('Select Location Longitude') }}</x-metronic.label>
            <x-metronic.input id="qr_data_location_longitude" type="text" name="qr_data_location_longitude" :value="old('qr_data_location_longitude')"
                placeholder="Select Longitude" />
        </div>
        <div class="mt-2">
            <div id="map" style="height: 400px;"></div>
        </div>
    </div>
</div>

{{-- Coupon Form Start --}}
<div class="form-container" id="coupon_code-form">
    <div class="row text-center justify-content-center">
        <h2 class="text-center mb-0">Coupon Code</h2>
        <p class="text-center mb-0">Create Coupon Code.</p>
    </div>
    <div class="pb-4 row">
        <div class="pb-4 col-lg-3">
            <x-metronic.label for="qr_data_coupon_code" class="form-label">{{ __('Coupon code') }}</x-metronic.label>
            <x-metronic.input id="qr_data_coupon_code" type="text" name="qr_data_coupon_code" :value="old('qr_data_coupon_code')"
                placeholder="Coupon code" />
        </div>
        <div class="pb-4 col-lg-3">
            <x-metronic.label for="qr_data_coupon_expire_date"
                class="form-label">{{ __('Expires on') }}</x-metronic.label>
            <x-metronic.input id="qr_data_coupon_expire_date" type="date" name="qr_data_coupon_expire_date"
                :value="old('qr_data_coupon_expire_date')" placeholder="Expires on" />
        </div>
        {{-- <div class="pb-4 col-lg-3">
            <label for="exampleFormControlInput1" class="required form-label">Timezone</label>
            <select name="" id="" class="form-select-solid form-select">
                <option value="" disabled>Africa</option>
                <option value="" disabled>London</option>
                <option value="" disabled>Bangladesh</option>
                <option value="" disabled>Pakistan</option>
                <option value="" disabled>USA</option>
            </select>
        </div> --}}
        <div class="pb-4 col-lg-3">
            <x-metronic.label for="qr_data_coupon_header" class="form-label">{{ __('Header') }}</x-metronic.label>
            <x-metronic.input id="qr_data_coupon_header" type="text" name="qr_data_coupon_header"
                :value="old('qr_data_coupon_header')" placeholder="Header" />
        </div>
        <div class="pb-4 col-lg-3">
            <x-metronic.label for="qr_data_coupon_message" class="form-label">{{ __('Message') }}</x-metronic.label>
            <x-metronic.input id="qr_data_coupon_message" type="text" name="qr_data_coupon_message"
                :value="old('qr_data_coupon_message')" placeholder="Message" />
        </div>
        <div class="pb-4 col-lg-3">
            <x-metronic.label for="qr_data_coupon_description_header"
                class="form-label">{{ __('Description header') }}</x-metronic.label>
            <x-metronic.input id="qr_data_coupon_description_header" type="text"
                name="qr_data_coupon_description_header" :value="old('qr_data_coupon_description_header')" placeholder="Holiday Season Sale" />
        </div>
        <div class="pb-4 col-lg-3">
            <x-metronic.label for="qr_data_coupon_description_body"
                class="form-label">{{ __('Description Body') }}</x-metronic.label>
            <x-metronic.input id="qr_data_coupon_description_body" type="text"
                name="qr_data_coupon_description_body" :value="old('qr_data_coupon_description_body')"
                placeholder="Get Huge Discount On This Holiday Seasion" />
        </div>
        <div class="pb-4 col-lg-3">
            <x-metronic.label for="qr_data_coupon_website" class="form-label">{{ __('Website') }}</x-metronic.label>
            <x-metronic.input id="qr_data_coupon_website" type="text" name="qr_data_coupon_website"
                :value="old('qr_data_coupon_website')" placeholder="http://www.website.com" />
        </div>
        <div class="pb-4 col-lg-3">
            <x-metronic.label for="qr_data_coupon_company" class="form-label">{{ __('Company') }}</x-metronic.label>
            <x-metronic.input id="qr_data_coupon_company" type="text" name="qr_data_coupon_company"
                :value="old('qr_data_coupon_company')" placeholder="Company Name" />
        </div>
        <div class="pb-4 col-lg-6">
            <x-metronic.label for="qr_data_coupon_policy"
                class="form-label">{{ __('Terms & conditions') }}</x-metronic.label>
            <x-metronic.input id="qr_data_coupon_policy" type="text" name="qr_data_coupon_policy"
                :value="old('qr_data_coupon_policy')" placeholder="Policy" />
        </div>
        <div class="pb-4 col-lg-6">
            <x-metronic.label for="qr_data_coupon_logo" class="form-label">{{ __('Coupon Logo') }}</x-metronic.label>
            <x-metronic.input id="qr_data_coupon_logo" type="file" name="qr_data_coupon_logo" :value="old('qr_data_coupon_logo')"
                placeholder="Coupon Logo" />
        </div>
    </div>
</div>

{{-- Social Form Start --}}
<div class="form-container" id="social-form">
    <div class="row text-center justify-content-center">
        <h2 class="text-center mb-0">Social Media</h2>
        <p class="text-center mb-0">Link to your social media channels for more engagement.</p>
    </div>
    <div class="row pt-4">
        <div class="pb-4 col-lg-12">
            <label for="exampleFormControlInput1" class="required form-label">Logo</label>
            <div class="dropzone dz-clickable w-100" id="kt_dropzonejs_example_1">
                <div class="dz-message needsclick">
                    <i class="fa-solid fa-file-up fs-3x text-primary">
                        <span class="path1"></span>
                        <span class="path2"></span>
                    </i>
                    <div class="ms-4">
                        <h3 class="fs-5 fw-bold text-gray-900 mb-1">Drop files here or click to upload.</h3>
                        <span class="fs-7 fw-semibold text-primary opacity-75">Upload up to 10 files</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="pb-4 col-lg-12">
            <label for="exampleFormControlInput1" class="required form-label">Image</label>
            <input type="file" class="form-control form-control-solid" placeholder="Enter Title" />
        </div>
        <div class="pb-4 col-lg-6">
            <label for="exampleFormControlInput1" class="required form-label">Title</label>
            <input type="text" class="form-control form-control-solid" placeholder="Enter Title" />
        </div>
        <div class="pb-4 col-lg-4">
            <label for="exampleFormControlInput1" class="required form-label">Title Color</label>
            <input type="text" class="form-control form-control-solid" placeholder="Enter Title" />
        </div>
        <div class="pb-4 col-lg-2">
            <label for="exampleFormControlInput1" class="required form-label"></label>
            <input type="color" class="form-control form-control-solid" placeholder="Enter Title"
                style="width: 135px;
            height: 40px;" />
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
        <div class="pb-4 col-lg-4">
            <label for="exampleFormControlInput1" class="required form-label">Background Color</label>
            <input type="text" class="form-control form-control-solid" placeholder="Enter Title" />
        </div>
        <div class="pb-4 col-lg-2">
            <label for="exampleFormControlInput1" class="required form-label"></label>
            <input type="color" class="form-control form-control-solid" placeholder="Enter Title"
                style="width: 135px;
            height: 40px;" />
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

{{-- Audio Form Start --}}
<div class="form-container" id="audio-form">
    <div class="row text-center justify-content-center">
        <h2 class="text-center mb-0">Social Media</h2>
        <p class="text-center mb-0">Link to your social media channels for more engagement.</p>
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

{{-- Business Page Form Start --}}
<div class="row form-container" id="business_page-form">
    <div class="pt-5 ps-5">
        <h2>Business Page</h2>
        <p>Share a card for your business</p>
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
        <div class="pt-4 col-lg-6">
            <label for="exampleFormControlInput1" class="required form-label">Open Day</label>
            <input type="text" class="form-control form-control-solid" placeholder="Monday" />
        </div>
        <div class="pt-4 col-lg-3">
            <label for="exampleFormControlInput1" class="required form-label">Start Time</label>
            <input type="text" class="form-control form-control-solid" placeholder="08:00" />
        </div>
        <div class="pt-4 col-lg-3">
            <label for="exampleFormControlInput1" class="required form-label">End Time</label>
            <input type="text" class="form-control form-control-solid" placeholder="20:00" />
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
            <input type="text" class="form-control form-control-solid" placeholder="example@gmail.com" />
        </div>
        <div class="pt-4 col-lg-6">
            <label for="exampleFormControlInput1" class="required form-label">Address</label>
            <input type="text" class="form-control form-control-solid" placeholder="example@gmail.com" />
        </div>
        <div class="pt-4 col-lg-12">
            <label for="exampleFormControlInput1" class="required form-label">Brand Logo</label>
            <div class="dropzone dz-clickable w-100" id="kt_dropzonejs_example_1">
                <div class="dz-message needsclick">
                    <i class="fa-solid fa-file-up fs-3x text-primary">
                        <span class="path1"></span>
                        <span class="path2"></span>
                    </i>
                    <div class="ms-4">
                        <h3 class="fs-5 fw-bold text-gray-900 mb-1">Drop files here or click to upload.</h3>
                        <span class="fs-7 fw-semibold text-primary opacity-75">Upload up to 10 files</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="pt-4 col-lg-12">
            <label for="exampleFormControlInput1" class="required form-label">Brand Image</label>
            <div class="dropzone dz-clickable w-100" id="kt_dropzonejs_example_1">
                <div class="dz-message needsclick">
                    <i class="fa-solid fa-file-up fs-3x text-primary">
                        <span class="path1"></span>
                        <span class="path2"></span>
                    </i>
                    <div class="ms-4">
                        <h3 class="fs-5 fw-bold text-gray-900 mb-1">Drop files here or click to upload.</h3>
                        <span class="fs-7 fw-semibold text-primary opacity-75">Upload up to 10 files</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

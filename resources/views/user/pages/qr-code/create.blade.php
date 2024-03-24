<x-app-layout :title="'QR Code Generate'">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-9">
                <div class="bg-white">
                    <ul class="nav nav-tabs qr-code-navs border-0" id="myTab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active border-0 rounded-0" id="selectType-tab" data-bs-toggle="tab"
                                data-bs-target="#selectType" type="button" role="tab" aria-controls="selectType"
                                aria-selected="true">
                                1. Select Type
                            </button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link border-0 rounded-0" id="setup-tab" data-bs-toggle="tab"
                                data-bs-target="#setup" type="button" role="tab" aria-controls="setup"
                                aria-selected="false">
                                2. Setup
                            </button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link border-0 rounded-0" id="customize-tab" data-bs-toggle="tab"
                                data-bs-target="#customize" type="button" role="tab" aria-controls="customize"
                                aria-selected="false">
                                3. Customize
                            </button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link  border-0 rounded-0" id="done-main-tab" data-bs-toggle="tab"
                                data-bs-target="#done-main" type="button" role="tab" aria-controls="done-main"
                                aria-selected="false">
                                4. Done
                            </button>
                        </li>
                    </ul>
                    <form action="" method="post">
                        <div class="tab-content p-3">
                            <div class="tab-pane pt-4 step-form-padding active" id="selectType" role="tabpanel"
                                aria-labelledby="selectType-tab">
                                <div class="pt-5 ps-5">
                                    <h2>Create a Dynamic QR Code</h2>
                                    <p>Modify content as needed, even after going live.</p>
                                </div>
                                <div>
                                    <fieldset class="checkbox-group">
                                        <x-qr-code.type :types="[
                                            [
                                                'id' => 1,
                                                'value' => 'website',
                                                'title' => 'Website',
                                                'text' => 'Link to an existing web URL and bring traffic online',
                                                'image' => 'https://dashboard.uniqode.com/assets/img/dynamic-qr/website.svg',
                                            ],
                                            [
                                                'id' => 2,
                                                'value' => 'pdf',
                                                'title' => 'Pdf',
                                                'text' => 'Link a PDF document and distribute it efficiently',
                                                'image' => 'https://dashboard.uniqode.com/assets/img/dynamic-qr/pdf.svg',
                                            ],
                                            [
                                                'id' => 3,
                                                'value' => 'image',
                                                'title' => 'Image',
                                                'text' => 'Show A Photo',
                                                'image' => 'https://dashboard.uniqode.com/assets/img/dynamic-qr/image.svg',
                                            ],
                                            [
                                                'id' => 4,
                                                'value' => 'sms',
                                                'title' => 'Sms',
                                                'text' => 'Redirect to your mobile number to receive SMS',
                                                'image' => 'https://dashboard.uniqode.com/assets/img/dynamic-qr/sms.svg',
                                            ],
                                            [
                                                'id' => 5,
                                                'value' => 'email',
                                                'title' => 'Email',
                                                'text' => 'Link to receive email messages',
                                                'image' => 'https://dashboard.uniqode.com/assets/img/dynamic-qr/email.svg',
                                            ],
                                            [
                                                'id' => 6,
                                                'value' => 'mobile_app',
                                                'title' => 'Mobile_App',
                                                'text' => 'Link to receive email messages',
                                                'image' => 'https://dashboard.uniqode.com/assets/img/dynamic-qr/app-download.svg',
                                            ],
                                            [
                                                'id' => 7,
                                                'value' => 'call',
                                                'title' => 'Call',
                                                'text' => 'Link to receive email messages',
                                                'image' => 'https://dashboard.uniqode.com/assets/img/dynamic-qr/call.svg',
                                            ],
                                            [
                                                'id' => 8,
                                                'value' => 'location',
                                                'title' => 'Location',
                                                'text' => 'Point to any location on Google Maps',
                                                'image' => 'https://dashboard.uniqode.com/assets/img/dynamic-qr/location.svg',
                                            ],
                                            [
                                                'id' => 9,
                                                'value' => 'coupon_code',
                                                'title' => 'Coupon_Code',
                                                'text' => 'Route to a page displaying coupon code details',
                                                'image' => 'https://dashboard.uniqode.com/assets/img/dynamic-qr/coupon.svg',
                                            ],
                                            [
                                                'id' => 10,
                                                'value' => 'social',
                                                'title' => 'Social',
                                                'text' => 'Link to an existing web URL and bring traffic online',
                                                'image' => 'https://dashboard.uniqode.com/assets/img/dynamic-qr/social-media.svg',
                                            ],
                                            [
                                                'id' => 11,
                                                'value' => 'audio',
                                                'title' => 'Audio',
                                                'text' => 'Link to your phone number for quick calls',
                                                'image' => 'https://dashboard.uniqode.com/assets/img/dynamic-qr/business-page.svg',
                                            ],
                                            [
                                                'id' => 12,
                                                'value' => 'business_page',
                                                'title' => 'Business_Page',
                                                'text' => 'Link to your phone number for quick calls',
                                                'image' => 'https://dashboard.uniqode.com/assets/img/dynamic-qr/mp3.svg',
                                            ],
                                        ]" />
                                        {{-- <div class="row">
                                            <div class="col-lg-4">
                                                <div class="checkbox">
                                                    <label for="radio-card-f001" class="radio-card">
                                                        <input type="radio" name="code_type" value="website"
                                                            id="radio-card-f001" />
                                                        <div class="card-content-wrapper">
                                                            <span class="check-icon"></span>
                                                            <div class="card-content">
                                                                <div class="d-flex align-items-center">
                                                                    <div style="" class="check_type">
                                                                        <img class="img-fluid"
                                                                            src="https://dashboard.uniqode.com/assets/img/dynamic-qr/website.svg"
                                                                            alt="">
                                                                    </div>
                                                                    <div class="text-start ps-4" style="width: 85%">
                                                                        <h3 class="mb-0">Website</h3>
                                                                        <p class="mb-0">Link to an existing web URL
                                                                            and bring
                                                                            traffic
                                                                            online</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="checkbox">
                                                    <label for="radio-card-f002" class="radio-card">
                                                        <input type="radio" name="code_type" value="pdf"
                                                            id="radio-card-f002" />
                                                        <div class="card-content-wrapper">
                                                            <span class="check-icon"></span>
                                                            <div class="card-content">
                                                                <div class="d-flex align-items-center">
                                                                    <div style="" class="check_type">
                                                                        <img class="img-fluid"
                                                                            src="https://dashboard.uniqode.com/assets/img/dynamic-qr/pdf.svg"
                                                                            alt="">
                                                                    </div>
                                                                    <div class="text-start ps-4" style="width: 85%">
                                                                        <h3 class="mb-0">PDF</h3>
                                                                        <p class="mb-0">Link a PDF document and
                                                                            distribute it efficiently</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="checkbox">
                                                    <label for="radio-card-f003" class="radio-card">
                                                        <input type="radio" name="code_type" value="image"
                                                            id="radio-card-f003" />
                                                        <div class="card-content-wrapper">
                                                            <span class="check-icon"></span>
                                                            <div class="card-content">
                                                                <div class="d-flex align-items-center">
                                                                    <div style="" class="check_type">
                                                                        <img class="img-fluid"
                                                                            src="https://dashboard.uniqode.com/assets/img/dynamic-qr/image.svg"
                                                                            alt="">
                                                                    </div>
                                                                    <div class="text-start ps-4" style="width: 85%">
                                                                        <h3 class="mb-0">Image</h3>
                                                                        <p class="mb-0">Show A Photo</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="checkbox">
                                                    <label for="radio-card-f004" class="radio-card">
                                                        <input type="radio" name="code_type" value="sms"
                                                            id="radio-card-f004" />
                                                        <div class="card-content-wrapper">
                                                            <span class="check-icon"></span>
                                                            <div class="card-content">
                                                                <div class="d-flex align-items-center">
                                                                    <div style="" class="check_type">
                                                                        <img class="img-fluid"
                                                                            src="https://dashboard.uniqode.com/assets/img/dynamic-qr/sms.svg"
                                                                            alt="">
                                                                    </div>
                                                                    <div class="text-start ps-4" style="width: 85%">
                                                                        <h3 class="mb-0">SMS</h3>
                                                                        <p class="mb-0">Redirect to your mobile
                                                                            number to receive SMS</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="checkbox">
                                                    <label for="radio-card-f005" class="radio-card">
                                                        <input type="radio" name="code_type" value="email"
                                                            id="radio-card-f005" />
                                                        <div class="card-content-wrapper">
                                                            <span class="check-icon"></span>
                                                            <div class="card-content">
                                                                <div class="d-flex align-items-center">
                                                                    <div style="" class="check_type">
                                                                        <img class="img-fluid"
                                                                            src="https://dashboard.uniqode.com/assets/img/dynamic-qr/email.svg"
                                                                            alt="">
                                                                    </div>
                                                                    <div class="text-start ps-4" style="width: 85%">
                                                                        <h3 class="mb-0">Email</h3>
                                                                        <p class="mb-0">Link to receive email
                                                                            messages</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="checkbox">
                                                    <label for="radio-card-f006" class="radio-card">
                                                        <input type="radio" name="code_type" value="mobile_app"
                                                            id="radio-card-f006" />
                                                        <div class="card-content-wrapper">
                                                            <span class="check-icon"></span>
                                                            <div class="card-content">
                                                                <div class="d-flex align-items-center">
                                                                    <div style="" class="check_type">
                                                                        <img class="img-fluid"
                                                                            src="https://dashboard.uniqode.com/assets/img/dynamic-qr/app-download.svg"
                                                                            alt="">
                                                                    </div>
                                                                    <div class="text-start ps-4" style="width: 85%">
                                                                        <h3 class="mb-0">Mobile App</h3>
                                                                        <p class="mb-0">Link to receive email
                                                                            messages</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="checkbox">
                                                    <label for="radio-card-f007" class="radio-card">
                                                        <input type="radio" name="code_type" value="call"
                                                            id="radio-card-f007" />
                                                        <div class="card-content-wrapper">
                                                            <span class="check-icon"></span>
                                                            <div class="card-content">
                                                                <div class="d-flex align-items-center">
                                                                    <div style="" class="check_type">
                                                                        <img class="img-fluid"
                                                                            src="https://dashboard.uniqode.com/assets/img/dynamic-qr/call.svg"
                                                                            alt="">
                                                                    </div>
                                                                    <div class="text-start ps-4" style="width: 85%">
                                                                        <h3 class="mb-0">Call</h3>
                                                                        <p class="mb-0">Link to receive email
                                                                            messages</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="checkbox">
                                                    <label for="radio-card-f008" class="radio-card">
                                                        <input type="radio" name="code_type" value="location"
                                                            id="radio-card-f008" />
                                                        <div class="card-content-wrapper">
                                                            <span class="check-icon"></span>
                                                            <div class="card-content">
                                                                <div class="d-flex align-items-center">
                                                                    <div style="" class="check_type">
                                                                        <img class="img-fluid"
                                                                            src="https://dashboard.uniqode.com/assets/img/dynamic-qr/location.svg"
                                                                            alt="">
                                                                    </div>
                                                                    <div class="text-start ps-4" style="width: 85%">
                                                                        <h3 class="mb-0">Location</h3>
                                                                        <p class="mb-0">Point to any location on
                                                                            Google Maps</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="checkbox">
                                                    <label for="radio-card-f009" class="radio-card">
                                                        <input type="radio" name="code_type" value="coupon_code"
                                                            id="radio-card-f009" />
                                                        <div class="card-content-wrapper">
                                                            <span class="check-icon"></span>
                                                            <div class="card-content">
                                                                <div class="d-flex align-items-center">
                                                                    <div style="" class="check_type">
                                                                        <img class="img-fluid"
                                                                            src="https://dashboard.uniqode.com/assets/img/dynamic-qr/coupon.svg"
                                                                            alt="">
                                                                    </div>
                                                                    <div class="text-start ps-4" style="width: 85%">
                                                                        <h3 class="mb-0">Coupon Code</h3>
                                                                        <p class="mb-0">Route to a page displaying
                                                                            coupon code details</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="checkbox">
                                                    <label for="radio-card-f010" class="radio-card">
                                                        <input type="radio" name="code_type" value="social"
                                                            id="radio-card-f010" />
                                                        <div class="card-content-wrapper">
                                                            <span class="check-icon"></span>
                                                            <div class="card-content">
                                                                <div class="d-flex align-items-center">
                                                                    <div style="" class="check_type">
                                                                        <img class="img-fluid"
                                                                            src="https://dashboard.uniqode.com/assets/img/dynamic-qr/social-media.svg"
                                                                            alt="">
                                                                    </div>
                                                                    <div class="text-start ps-4" style="width: 85%">
                                                                        <h3 class="mb-0">Social</h3>
                                                                        <p class="mb-0">Link to an existing web URL
                                                                            and bring traffic online</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="checkbox">
                                                    <label for="radio-card-f011" class="radio-card">
                                                        <input type="radio" name="code_type" value="audio"
                                                            id="radio-card-f011" />
                                                        <div class="card-content-wrapper">
                                                            <span class="check-icon"></span>
                                                            <div class="card-content">
                                                                <div class="d-flex align-items-center">
                                                                    <div style="" class="check_type">
                                                                        <img class="img-fluid"
                                                                            src="https://dashboard.uniqode.com/assets/img/dynamic-qr/business-page.svg"
                                                                            alt="">
                                                                    </div>
                                                                    <div class="text-start ps-4" style="width: 85%">
                                                                        <h3 class="mb-0">Audio / Video</h3>
                                                                        <p class="mb-0">Link to your phone number for
                                                                            quick calls</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="checkbox">
                                                    <label for="radio-card-f012" class="radio-card">
                                                        <input type="radio" name="code_type" value="business_page"
                                                            id="radio-card-f012" />
                                                        <div class="card-content-wrapper">
                                                            <span class="check-icon"></span>
                                                            <div class="card-content">
                                                                <div class="d-flex align-items-center">
                                                                    <div style="" class="check_type">
                                                                        <img class="img-fluid"
                                                                            src="https://dashboard.uniqode.com/assets/img/dynamic-qr/mp3.svg"
                                                                            alt="">
                                                                    </div>
                                                                    <div class="text-start ps-4" style="width: 85%">
                                                                        <h3 class="mb-0">Business Page</h3>
                                                                        <p class="mb-0">Link to your phone number for
                                                                            quick calls</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </label>
                                                </div>
                                            </div>
                                        </div> --}}
                                    </fieldset>
                                </div>
                            </div>
                            <div class="tab-pane pt-4 step-form-padding" id="setup" role="tabpanel"
                                aria-labelledby="setup-tab">
                                <div class="card">
                                    <div class="card-body">
                                        @include('user.pages.qr-code.partials.form')
                                        <div class="d-flex justify-content-end pt-5">
                                            <a href="#" class="btn btn-light btn-primary">Next</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane pt-4 step-form-padding" id="customize" role="tabpanel"
                                aria-labelledby="customize-tab">
                                <div class="pt-5 ps-5">
                                    <h2>Design your QR Code</h2>
                                    <p>Customize the design of your QR code with colors, logos and shapes.</p>
                                </div>
                                {{-- Main Form For Qr --}}
                                <div class="card card-flush h-xl-100">
                                    <div class="card-header pt-5">
                                        <h3 class="card-title align-items-start flex-column">
                                            <span class="card-label fw-bold text-gray-800">Choose QR Code
                                                Structure!</span>
                                        </h3>
                                    </div>
                                    {{-- Customize Nested Tabs For Customize The Design --}}
                                    @include('user.pages.qr-code.partials.customize')
                                    {{-- Customize Nested Tabs For Customize The Design End --}}
                                </div>
                            </div>
                            <div class="tab-pane pt-4 step-form-padding" id="done-main" role="tabpanel"
                                aria-labelledby="done-main-tab">
                                <div class="pt-5 ps-5">
                                    <h2>Congratulations! Your QR Code is ready</h2>
                                    <p>Still want to make changes? <a href="#">Modify your QR code</a></p>
                                </div>
                                <div class="pt-5">
                                    <label for="">Enter a name for your QR code <span
                                            class="text-danger">*</span></label>
                                    <input type="text" name="" id=""
                                        class="form-control form-control-sm w-50">
                                </div>
                            </div>
                            {{-- Main Form For Qr End --}}
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex flex-column justify-content-center align-items-center">
                            <h3>Preview</h3>
                            <img class="img-fluid" src="https://i.ibb.co/XzHNWc0/no-qr.png" alt="QR Code">
                        </div>
                    </div>
                    <div class="card-footer d-flex justify-content-around align-items-center">
                        <a href="#" class="btn btn-light btn-active-light-primary w-100 me-2">Preview</a>
                        <a href="#" class="btn btn-light btn-primary w-100">Download</a>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="d-flex flex-column flex-lg-row" style="margin-top: 5rem">
        <div class="flex-lg-row-fluid mb-10 mb-lg-0 me-lg-7 me-xl-10">
            <div class="card">
                <div class="card-body p-12">

                    <form id="generateQRCodeForm">
                        @csrf
                        <div class="row fav-row">
                            <div class="mb-10 col-lg-6">
                                <x-metronic.label for="data"
                                    class="form-label">{{ __('Data') }}</x-metronic.label>
                                <x-metronic.input id="data" type="text" name="name" :value="old('name')"
                                    placeholder="Enter Your Data" required />
                            </div>
                            <div class="mb-10 col-lg-2">
                                <x-metronic.label for="color"
                                    class="form-label">{{ __('Color') }}</x-metronic.label>
                                <x-metronic.input id="color" type="color" name="color" :value="old('color')"
                                    placeholder="Select Color" />
                            </div>
                            <div class="mb-10 col-lg-4">
                                <x-metronic.label for="eye" class="col-form-label required fw-bold fs-6">
                                    {{ __('Select a eye ') }}</x-metronic.label>
                                <x-metronic.select-option id="eye" name="eye" data-hide-search="true"
                                    data-placeholder="Select an option">
                                    <option></option>
                                    <option value="circle">circle</option>
                                    <option value="square">Square</option>
                                </x-metronic.select-option>
                            </div>
                            <div class="mb-10 col-lg-2">
                                <x-metronic.label for="bg_color"
                                    class="form-label">{{ __('Background Color') }}</x-metronic.label>
                                <x-metronic.input id="bg_color" type="color" name="bg_color" :value="old('bg_color')"
                                    placeholder="Select Background Color" />
                            </div>
                            <div class="mb-10 col-lg-4">
                                <x-metronic.label for="style" class="col-form-label required fw-bold fs-6">
                                    {{ __('Select a style ') }}</x-metronic.label>
                                <x-metronic.select-option id="style" name="style" data-hide-search="true"
                                    data-placeholder="Select an option">
                                    <option></option>
                                    <option value="square">Square</option>
                                    <option value="dot">Dot</option>
                                    <option value="round">Round</option>
                                </x-metronic.select-option>
                            </div>
                            <div class="mb-10 col-lg-6">
                                <x-metronic.label for="logo"
                                    class="form-label">{{ __('Logo') }}</x-metronic.label>
                                <x-metronic.input id="logo" type="file" name="logo" :value="old('logo')"
                                    placeholder="Upload Logo" />
                            </div>
                        </div>
                        <div class="card-footer d-flex justify-content-center align-items-center py-4 px-9">
                            {{-- <x-metronic.button type="button" id="generateButton" class="primary">
                                {{ __('Generate') }}
                            </x-metronic.button> --}}
                            <button type="submit" id="generateButton"
                                class="btn btn-primary">{{ __('Generate') }}</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="flex-lg-auto min-w-lg-300px">
            <div class="card">
                <div class="card-body p-10">
                    <span class="text-center fs-2x fw-bolder text-gray-800">Preview</span>
                    <div class="card card-flush">
                        <div class="card-body">
                            <div id="generatedQRCodeContainer" class="mb-5">
                                <img id="generatedQRCode" src="https://i.ibb.co/XzHNWc0/no-qr.png" alt="QR Code">
                                {{-- <br> --}}
                                {{-- <a id="downloadLink" href="" download style="display: none;" class="">Download QR Code</a> --}}
                            </div>
                            <div class="mb-0">
                                <div class="row mb-5">
                                    <div class="col">
                                        <a href="#"
                                            class="btn btn-light btn-active-light-primary w-100">Preview</a>
                                    </div>
                                    <div class="col">
                                        <a id="downloadLink" href="" download style="display: none;"
                                            class="btn btn-light btn-active-light-primary w-100">Download</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    @push('scripts')
        <script>
            $(document).ready(function() {
                $('#generateQRCodeForm').on('submit', function(e) {
                    e.preventDefault(); // Prevent default form submission behavior
                    $('#generateButton').hide();
                    var formData = new FormData(this);

                    $.ajax({
                        url: '{{ route('user.qr-code.store') }}',
                        type: 'POST',
                        data: formData,
                        processData: false,
                        contentType: false,
                        success: function(response) {
                            if (response.qrCodePath) {
                                // Set the QR code image source
                                $('#generatedQRCode').attr('src', response.qrCodePath);
                                // Show the download link
                                $('#downloadLink').attr('href', response.qrCodePath).show();
                                // Show the QR code container
                                $('#generatedQRCodeContainer').show();
                                $('#generateButton').show();
                            } else {
                                console.error('QR code path not found in the response.');
                            }
                        },
                        error: function(xhr, status, error) {
                            console.error(xhr.responseText);
                        }
                    });
                });
            });
        </script>
        <script>
            var myDropzone = new Dropzone("#qr_dropzone", {
                url: "https://keenthemes.com/scripts/void.php", // Set the url for your upload script location
                paramName: "file", // The name that will be used to transfer the file
                maxFiles: 1,
                maxFilesize: 2, // MB
                addRemoveLinks: true,
                accept: function(file, done) {
                    if (file.name == "wow.jpg") {
                        done("Naha, you don't.");
                    } else {
                        done();
                    }
                }
            });
        </script>
        <script>
            $(document).ready(function() {
                $('#colorPicker').on('input', function() {
                    var selectedColor = $(this).val();
                    $('#colorCodeInput').val(selectedColor);
                });
            });
        </script>
        <script>
            // Get references to radio buttons and divs
            const normalColorRadio = document.getElementById('normal_color');
            const gradientColorRadio = document.getElementById('gradient_color');
            const normalColorDiv = document.getElementById('normal_color_show');
            const gradientColorDiv = document.getElementById('gradient_color_show');

            // Add event listeners to radio buttons
            normalColorRadio.addEventListener('change', function() {
                // Show normal color div and hide gradient color div
                normalColorDiv.style.display = 'block';
                gradientColorDiv.style.display = 'none';
            });

            gradientColorRadio.addEventListener('change', function() {
                // Show gradient color div and hide normal color div
                normalColorDiv.style.display = 'none';
                gradientColorDiv.style.display = 'block';
            });
        </script>
        <script>
            // Get references to radio buttons and content sections
            const colorRadio = document.getElementById('flexRadioDefault1');
            const imageRadio = document.getElementById('flexRadioDefault2');
            const transparentRadio = document.getElementById('flexRadioDefault3');
            const colorContent = document.getElementById('color-content');
            const imageContent = document.getElementById('image-content');
            const transparentContent = document.getElementById('transparent-content');

            // Add event listeners to radio buttons
            colorRadio.addEventListener('change', function() {
                // Show color content and hide others
                colorContent.style.display = 'block';
                imageContent.style.display = 'none';
                transparentContent.style.display = 'none';
            });

            imageRadio.addEventListener('change', function() {
                // Show image content and hide others
                colorContent.style.display = 'none';
                imageContent.style.display = 'block';
                transparentContent.style.display = 'none';
            });

            transparentRadio.addEventListener('change', function() {
                // Show transparent content and hide others
                colorContent.style.display = 'none';
                imageContent.style.display = 'none';
                transparentContent.style.display = 'block';
            });
        </script>
    @endpush
</x-app-layout>

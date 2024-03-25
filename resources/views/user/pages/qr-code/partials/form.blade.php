{{-- Website Form Start --}}

<div class="form-container" id="website-form">
    <div class="row text-center justify-content-center">
        <h2 class="text-center mb-0">Website Form</h2>
        <p class="text-center mb-0">Paste a URL below to link with your QR code.</p>
    </div>
    <div class="row pt-4">
        <div class="mb-2">
            <label for="exampleFormControlInput1" class="required form-label">Website Url</label>
            <input type="text" class="form-control form-control-solid" placeholder="url" />
        </div>
        <div>
            <label for="exampleFormControlInput1" class="required form-label">Others</label>
            <input type="text" class="form-control form-control-solid" placeholder="others if need" />
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
            <div class="dropzone dz-clickable w-100" id="kt_dropzonejs_example_1">
                <div class="dz-message needsclick">
                    <i class="ki-duotone ki-file-up fs-3x text-primary">
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
{{-- Image Form Start --}}
<div class="form-container" id="image-form">
    <div class="row text-center justify-content-center">
        <h2 class="text-center mb-0">Image Form</h2>
        <p class="text-center mb-0">Upload Your Image or Link Here For QR Code.</p>
    </div>
    <div class="row pt-4">
        <div class="d-flex align-items-center">
            <div class="dropzone dz-clickable w-100" id="kt_dropzonejs_example_1">
                <div class="dz-message needsclick">
                    <i class="ki-duotone ki-file-up fs-3x text-primary">
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
        <div class="pt-4">
            <label for="exampleFormControlInput1" class="required form-label">Or Paste Link Below</label>
            <input type="text" class="form-control form-control-solid" placeholder="https://image-link.com" />
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
            <label for="exampleFormControlInput1" class="required form-label">Phone number</label>
            <input type="text" class="form-control form-control-solid" placeholder="https://image-link.com" />
        </div>
        <div class="pt-4">
            <label for="exampleFormControlInput1" class="required form-label">Message</label>
            <textarea class="form-control form-control-solid" name="" id="" rows="3"></textarea>
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
            <label for="exampleFormControlInput1" class="required form-label">Receivers Emails</label>
            <input type="text" class="form-control form-control-solid" placeholder="sample@mail.com" />
        </div>
        <div class="pb-4">
            <label for="exampleFormControlInput1" class="required form-label">Subject</label>
            <input type="text" class="form-control form-control-solid" placeholder="Your Email Subject" />
        </div>
        <div class="pb-4">
            <label for="exampleFormControlInput1" class="required form-label">Body</label>
            <textarea class="form-control form-control-solid" name="" id="" rows="3"></textarea>
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
            <label for="exampleFormControlInput1" class="required form-label">Google Play store URL</label>
            <input type="text" class="form-control form-control-solid" placeholder="Enter url" />
        </div>
        <div class="pb-4">
            <label for="exampleFormControlInput1" class="required form-label">App store URL (iPhone)</label>
            <input type="text" class="form-control form-control-solid" placeholder="Enter url" />
        </div>
        <div class="pb-4">
            <label for="exampleFormControlInput1" class="required form-label">App store URL (iPad and macOS)</label>
            <input type="text" class="form-control form-control-solid" placeholder="Enter url" />
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
            <label for="exampleFormControlInput1" class="required form-label">Phone number</label>
            <input type="text" class="form-control form-control-solid" placeholder="Enter Phone Number" />
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
            <label for="exampleFormControlInput1" class="required form-label">Search</label>
            <input type="text" class="form-control form-control-solid" placeholder="Search Google Maps" />
        </div>
        <div class="mt-2">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d116833.95338886736!2d90.41968899999999!3d23.7808405!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755b8b087026b81%3A0x8fa563bbdd5904c2!2sDhaka!5e0!3m2!1sen!2sbd!4v1711272535856!5m2!1sen!2sbd"
                width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
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
            <label for="exampleFormControlInput1" class="required form-label">Coupon code</label>
            <input type="text" class="form-control form-control-solid" placeholder="ABCD123" />
        </div>
        <div class="pb-4 col-lg-3">
            <label for="exampleFormControlInput1" class="required form-label">Expires on</label>
            <input type="date" class="form-control form-control-solid" placeholder="ABCD123" />
            <span>This coupon will stop working.</span>
        </div>
        <div class="pb-4 col-lg-3">
            <label for="exampleFormControlInput1" class="required form-label">Timezone </label>
            <select name="" id="" class="form-select-solid form-select">
                <option value="" disabled>Africa</option>
                <option value="" disabled>London</option>
                <option value="" disabled>Bangladesh</option>
                <option value="" disabled>Pakistan</option>
                <option value="" disabled>USA</option>
            </select>
        </div>
        <div class="pb-4 col-lg-3">
            <label for="exampleFormControlInput1" class="required form-label">Header</label>
            <input type="text" class="form-control form-control-solid" placeholder="30% Off" />
        </div>
        <div class="pb-4 col-lg-3">
            <label for="exampleFormControlInput1" class="required form-label">Message</label>
            <input type="text" class="form-control form-control-solid" placeholder="Big Sale" />
        </div>
        <div class="pb-4 col-lg-3">
            <label for="exampleFormControlInput1" class="required form-label">Description header</label>
            <input type="text" class="form-control form-control-solid" placeholder="Holiday Season Sale" />
        </div>
        <div class="pb-4 col-lg-3">
            <label for="exampleFormControlInput1" class="required form-label">Description body</label>
            <input type="text" class="form-control form-control-solid" placeholder="Get Huge Discount On This Holiday Seasion" />
        </div>
        <div class="pb-4 col-lg-3">
            <label for="exampleFormControlInput1" class="required form-label">Website</label>
            <input type="text" class="form-control form-control-solid" placeholder="http://www.website.com" />
        </div>
        <div class="pb-4 col-lg-3">
            <label for="exampleFormControlInput1" class="required form-label">Company</label>
            <input type="text" class="form-control form-control-solid" placeholder="Company Name" />
        </div>
        <div class="pb-4 col-lg-3">
            <label for="exampleFormControlInput1" class="required form-label">Terms & conditions</label>
            <input type="text" class="form-control form-control-solid" placeholder="policy" />
        </div>
        <div class="pb-4 col-lg-6">
            <label for="exampleFormControlInput1" class="required form-label">Terms & conditions</label>
            <input type="text" class="form-control form-control-solid" placeholder="policy" />
        </div>
        <div class="pb-4 col-lg-12">
            <label for="exampleFormControlInput1" class="required form-label">Logo</label>
            <div class="dropzone dz-clickable w-100" id="kt_dropzonejs_example_1">
                <div class="dz-message needsclick">
                    <i class="ki-duotone ki-file-up fs-3x text-primary">
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
                    <i class="ki-duotone ki-file-up fs-3x text-primary">
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
            <div class="dropzone dz-clickable w-100" id="kt_dropzonejs_example_1">
                <div class="dz-message needsclick">
                    <i class="ki-duotone ki-file-up fs-3x text-primary">
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
            <input type="color" class="form-control form-control-solid" placeholder="Enter Title"  style="width: 135px;
            height: 40px;"/>
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
            <input type="color" class="form-control form-control-solid" placeholder="Enter Title" style="width: 135px;
            height: 40px;"/>
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
        <div class="d-flex align-items-center col-lg-12">
            <div class="dropzone dz-clickable w-100" id="kt_dropzonejs_example_1">
                <div class="dz-message needsclick">
                    <i class="ki-duotone ki-file-up fs-3x text-primary">
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
        <div class="pt-4 col-lg-6">
            <label for="exampleFormControlInput1" class="required form-label">Or paste link below</label>
            <input type="text" class="form-control form-control-solid" placeholder="Image Link" />
        </div>
    </div>
</div>
{{-- Business Page Form Start --}}
<div class="row form-container" id="audio-form">
    <div class="pt-5 ps-5">
        <h2>Upload audio</h2>
        <p>Upload audio file that your QR code should link to.</p>
    </div>
    <div class="pb-4 row">
        <div class="d-flex align-items-center col-lg-12">
            <div class="dropzone dz-clickable w-100" id="kt_dropzonejs_example_1">
                <div class="dz-message needsclick">
                    <i class="ki-duotone ki-file-up fs-3x text-primary">
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
            <label for="exampleFormControlInput1" class="required form-label">Or paste link below</label>
            <input type="text" class="form-control form-control-solid" placeholder="Image Link" />
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
            <input type="color" class="form-control form-control-solid" placeholder="Enter Title"  style="width: 135px;
            height: 40px;"/>
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
                    <i class="ki-duotone ki-file-up fs-3x text-primary">
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
                    <i class="ki-duotone ki-file-up fs-3x text-primary">
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

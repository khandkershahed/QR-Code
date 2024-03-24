{{-- Website Form Start --}}
<div class="row form-container" id="website-form">
    <div class="ps-4">
        <h2>Website Form</h2>
        <p>Paste a URL below to link with your QR code</p>
    </div>
    <div class="pt-4">
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
<div class="row form-container" id="pdf-form">
    <div class="pt-5 ps-5">
        <h2>PDF Form</h2>
        <p>Upload Your PDF File Here For QR Code.</p>
    </div>
    <div class="pb-4">
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
<div class="row form-container" id="image-form">
    <div class="pt-5 ps-5">
        <h2>Image Form</h2>
        <p>Upload Your Image or Link Here For QR Code.</p>
    </div>
    <div class="pb-4">
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
<div class="row form-container" id="sms-form">
    <div class="pt-5 ps-5">
        <h2>SMS information</h2>
        <p>Specify details of the text (SMS) to link your QR code to.</p>
    </div>
    <div class="pb-4">
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
{{-- SMS Form Start --}}
<div class="row form-container" id="email-form">
    <div class="pt-5 ps-5">
        <h2>Email Information</h2>
        <p>Specify details of the email message to link your QR code to.</p>
    </div>
    <div class="pb-4">
        <div class="pt-4">
            <label for="exampleFormControlInput1" class="required form-label">Receivers Emails</label>
            <input type="text" class="form-control form-control-solid" placeholder="sample@mail.com" />
        </div>
        <div class="pt-4">
            <label for="exampleFormControlInput1" class="required form-label">Subject</label>
            <input type="text" class="form-control form-control-solid" placeholder="Your Email Subject" />
        </div>
        <div class="pt-4">
            <label for="exampleFormControlInput1" class="required form-label">Body</label>
            <textarea class="form-control form-control-solid" name="" id="" rows="3"></textarea>
        </div>
    </div>
</div>
{{-- SMS Form Start --}}
<div class="row form-container" id="mobile_app-form">
    <div class="pt-5 ps-5">
        <h2>Mobile App</h2>
        <p>Redirect to app download or in-app pages for Android and iOS users.</p>
    </div>
    <div class="pb-4">
        <div class="pt-4">
            <label for="exampleFormControlInput1" class="required form-label">Google Play store URL</label>
            <input type="text" class="form-control form-control-solid" placeholder="Enter url" />
        </div>
        <div class="pt-4">
            <label for="exampleFormControlInput1" class="required form-label">App store URL (iPhone)</label>
            <input type="text" class="form-control form-control-solid" placeholder="Enter url" />
        </div>
        <div class="pt-4">
            <label for="exampleFormControlInput1" class="required form-label">App store URL (iPad and macOS)</label>
            <input type="text" class="form-control form-control-solid" placeholder="Enter url" />
        </div>
    </div>
</div>
{{-- SMS Form Start --}}
<div class="row form-container" id="call-form">
    <div class="pt-5 ps-5">
        <h2>Call Information</h2>
        <p>Specify details of the phone number to link your QR code to.</p>
    </div>
    <div class="pb-4">
        <div class="pt-4">
            <label for="exampleFormControlInput1" class="required form-label">Phone number</label>
            <input type="text" class="form-control form-control-solid" placeholder="Enter Phone Number" />
        </div>
    </div>
</div>
{{-- SMS Form Start --}}
<div class="row form-container" id="location-form">
    <div class="pt-5 ps-5">
        <h2>Choose location</h2>
        <p>Choose a location to link to your QR code.</p>
    </div>
    <div class="pb-4">
        <div class="pt-4">
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

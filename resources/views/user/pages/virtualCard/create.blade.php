<x-app-layout :title="'Virtual Card Create'">
    <div class="row align-items-center">
        <div class="col-lg-8 col-md-7">
            <div class="card mt-10 p-0">
                <div class="card-body p-0">
                    <div class="stepper stepper-pills" id="kt_stepper_example_clickable">
                        <div class="stepper-nav flex-center flex-wrap steaper-header">
                            <div class="stepper-item mx-3 my-4 p-0 current" data-kt-stepper-element="nav"
                                data-kt-stepper-action="step">
                                <div class="stepper-wrapper d-flex align-items-center">
                                    <div class="stepper-icon w-40px h-40px me-2">
                                        <i class="stepper-check fas fa-check"></i>
                                        <span class="stepper-number">1</span>
                                    </div>

                                    <div class="stepper-label">
                                        <h3 class="stepper-title mb-0 pe-3">
                                            Select Type
                                        </h3>
                                    </div>
                                </div>
                                <div class="stepper-line h-40px"></div>
                            </div>

                            <div class="stepper-item mx-3 my-4 p-0" data-kt-stepper-element="nav"
                                data-kt-stepper-action="step">
                                <div class="stepper-wrapper d-flex align-items-center">
                                    <div class="stepper-icon w-40px h-40px me-2">
                                        <i class="stepper-check fas fa-check"></i>
                                        <span class="stepper-number">2</span>
                                    </div>

                                    <div class="stepper-label">
                                        <h3 class="stepper-title mb-0 pe-3">
                                            Input Data
                                        </h3>
                                    </div>
                                </div>

                                <div class="stepper-line h-40px"></div>
                            </div>

                            <div class="stepper-item mx-3 my-4 p-0" data-kt-stepper-element="nav"
                                data-kt-stepper-action="step">
                                <div class="stepper-wrapper d-flex align-items-center">
                                    <div class="stepper-icon w-40px h-40px me-2">
                                        <i class="stepper-check fas fa-check"></i>
                                        <span class="stepper-number">3</span>
                                    </div>

                                    <div class="stepper-label">
                                        <h3 class="stepper-title mb-0 pe-3">
                                            Customize
                                        </h3>
                                    </div>
                                </div>

                                <div class="stepper-line h-40px"></div>
                            </div>

                            <div class="stepper-item mx-3 my-4 p-0" data-kt-stepper-element="nav"
                                data-kt-stepper-action="step">
                                <div class="stepper-wrapper d-flex align-items-center">
                                    <div class="stepper-icon w-40px h-40px me-2">
                                        <i class="stepper-check fas fa-check"></i>
                                        <span class="stepper-number">4</span>
                                    </div>

                                    <div class="stepper-label">
                                        <h3 class="stepper-title mb-0 pe-3">
                                            Done
                                        </h3>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <form class="form mx-auto qrForm" novalidate="novalidate"
                            action="{{ route('user.qr-code.store') }}" id="kt_stepper_example_basic_form" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            <div class="mb-5">
                                <div class="flex-column current" data-kt-stepper-element="content">
                                    <div class="card">
                                        <div class="row my-5 mt-10">
                                            <h2 class="text-center mb-0">Create a Dynamic QR Code</h2>
                                            <p class="text-center mb-0">Modify content as needed, even after going
                                                live.</p>
                                        </div>
                                        <div class="card-body">
                                            {{-- @include('user.pages.qr-code.partials.qr_type') --}}
                                        </div>
                                    </div>
                                </div>

                                <div class="flex-column" data-kt-stepper-element="content">
                                    <div class="card">
                                        <div class="card-body">
                                            {{-- @include('user.pages.qr-code.partials.form') --}}
                                        </div>
                                    </div>
                                </div>

                                <div class="flex-column" data-kt-stepper-element="content">
                                    <div class="card">
                                        <div class="row text-center justify-content-center mt-10">
                                            <h2 class="text-center mb-0">Choose QR Code Design!</h2>
                                        </div>
                                        <div class="card-body">
                                            {{-- @include('user.pages.qr-code.partials.customize') --}}
                                        </div>
                                    </div>
                                </div>

                                <div class="flex-column" data-kt-stepper-element="content">
                                    <div class="card">
                                        <div class="pt-5 ps-5">
                                            <h2 class="text-center">Congratulations!</h2>
                                            <p class="text-center">Some Information Need To
                                                Ready The QR</p>
                                            {{-- <p>Still want to make changes?
                                                <a href="#">Modify your QR code</a>
                                            </p> --}}
                                        </div>
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="pt-5 pb-5">
                                                        <x-metronic.label for="qr_name"
                                                            class="form-label">{{ __('Enter a name for your QR code') }}</x-metronic.label>
                                                        <x-metronic.input id="qr_name" type="text" name="qr_name"
                                                            :value="old('qr_name')"
                                                            placeholder="Enter a name for your QR code" required />
                                                    </div>
                                                </div>
                                                {{-- <input type="hidden" name="qr_scan_status" value="dynamic"> --}}
                                                {{-- <div class="col-lg-6">
                                                    <div class="pt-5 pb-5">
                                                        <x-metronic.label for="status"
                                                            class="form-label">{{ __('Enter a name for your QR code') }}
                                                            <span class="text-danger">*</span></x-metronic.label>
                                                        <select class="form-select" data-control="select2"
                                                            name="qr_scan_status" data-placeholder="Select an option"
                                                            required>
                                                            <option>Select Status</option>
                                                            <option value="static">Static</option>
                                                            <option value="dynamic" selected>Dynamic</option>
                                                        </select>
                                                    </div>
                                                </div> --}}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="d-flex justify-content-between py-3 px-3 align-items-center bg-white">
                                <div class="me-2">
                                    <button type="button" class="btn btn-light btn-active-light-primary"
                                        data-kt-stepper-action="previous">
                                        Back
                                    </button>
                                </div>

                                <div>
                                    <button type="submit" class="btn btn-primary" id="submitButton"
                                        data-kt-stepper-action="submit">
                                        <span class="indicator-label">Submit</span>
                                        <span class="indicator-progress">Please wait... <span
                                                class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                                    </button>

                                    <button type="button" class="btn btn-primary" data-kt-stepper-action="next">
                                        Continue
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-5">
            <div class="card mt-10 bg-transparent">
                {{-- position-fixed --}}
                <div class="card-body bg-transparent">
                    <div class="d-flex flex-column justify-content-center align-items-center">
                        {{-- id="generatedQRCodeContainer" --}}
                        <h3>Preview</h3>
                    </div>
                    <a id="downloadLink" href="javascripti:void()" download class="btn btn-light btn-primary w-100"
                        style="display: none;">Download</a>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

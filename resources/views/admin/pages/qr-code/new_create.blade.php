<x-app-layout :title="'QR Code Generate'">
    <div class="d-flex flex-column flex-lg-row">
        <div class="flex-lg-row-fluid mb-10 mb-lg-0 me-lg-7 me-xl-10">
            <div class="card">
                <div class="card-body p-12">
                    <form id="generateQRCodeForm" enctype="multipart/form-data">
                        @csrf
                        <div class="row fav-row">
                            <div class="mb-10 col-lg-6">
                                <x-metronic.label for="data" class="form-label">{{ __('Data') }}</x-metronic.label>
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
                                <img id="generatedQRCode" src="{{ asset('images/bg.png') }}" alt="QR Code">
                            </div>
                            <div class="mb-0">
                                <div class="row mb-5">
                                    <div class="col">
                                        <a href="#"
                                            class="btn btn-light btn-active-light-primary w-100">Preview</a>
                                    </div>
                                    <div class="col">
                                        <a id="downloadLink" href="javascripti:void()" download style="display: none;"
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
                                $('#generatedQRCode').attr('src', response.qrCodePath);
                                $('#downloadLink').attr('href', response.qrCodePath).show();
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
    @endpush
</x-app-layout>

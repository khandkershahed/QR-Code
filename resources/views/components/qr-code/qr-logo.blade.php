@props([
    'qrLogos' => [],
    'selectedQrLogo' => null, // Default to null if not provided
])

@foreach ($qrLogos as $index => $qrLogo)
    <div class="col-sm-1 mb-1">
        <input type="radio" class="btn-check form-check-input" name="qr_saved_logo" value="{{ $qrLogo['value'] }}"
            @checked($qrLogo['value'] == $selectedQrLogo) id="qr_logo_{{ $index }}" />
        <label class="btn btn-outline btn-outline-dashed btn-active-light-primary p-7 d-flex align-items-center  galary_logo"
            for="qr_logo_{{ $index }}">
            <img class="" width="35px" src="{{ asset($qrLogo['image']) }}" alt="" />
        </label>
    </div>
@endforeach



 {{-- <div class="col-sm-1 mb-3">
        <label class="btn btn-outline btn-outline-dashed d-flex flex-stack text-start py-1 px-3 mb-5 h-60px">
            <div class="d-flex align-items-center">
                <div class="form-check form-check-custom form-check-solid form-check-primary me-3 d-none">
                    <input class="form-check-input" type="radio" name="qr_saved_logo" value="{{ $qrLogo['value'] }}" @checked($qrLogo['value'] == $selectedQrLogo) />
                </div>

                <div class="flex-grow-1">
                    <div class="fw-bold">
                        <img class="img-fluid" src="{{ asset($qrLogo['image']) }}" alt="" />
                    </div>
                </div>
            </div>
        </label>
    </div> --}}
    <!--begin::Option-->
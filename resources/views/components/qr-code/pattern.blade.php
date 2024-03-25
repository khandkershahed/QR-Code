@foreach ($patterns as $pattern)
<div class="col-lg-2 pt-5">
    <label class="btn btn-outline btn-outline-dashed d-flex flex-stack text-start p-6 mb-5">
        <div class="d-flex align-items-center me-2">
            <div class="form-check form-check-custom form-check-solid form-check-primary me-6">
                <input class="form-check-input" type="radio" name="qr_pattern" value="{{ $pattern['value'] }}"/>
            </div>
            <div class="flex-grow-1">
                <div class="fw-bold">
                    <img width="80px" src="{{ $pattern['image'] }}" alt="" />
                </div>
            </div>
        </div>
    </label>
</div>
@endforeach

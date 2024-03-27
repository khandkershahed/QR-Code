    @foreach ($eyeBalls as $eye_ball)
        <div class="col-lg-2 pt-5">
            <label class="btn btn-outline btn-outline-dashed d-flex flex-stack text-start py-6 px-3 mb-5">
                <div class="d-flex align-items-center">
                    <div class="form-check form-check-custom form-check-solid form-check-primary me-3">
                        <input class="form-check-input" type="radio" name="qr_eye_ball" value="{{ $eye_ball['value'] }}"/>
                    </div>

                    <div class="flex-grow-1">
                        <div class="fw-bold">
                            <img width="70px" src="{{ $eye_ball['image'] }}" alt="" />
                        </div>
                    </div>
                </div>
            </label>
            {{-- <label for="radio-card-{{ $eye_ball['id'] }}" class="radio-card me-4">
                <input type="radio" name="qr_eye_ball" value="{{ $eye_ball['value'] }}"
                    id="radio-card-{{ $eye_ball['id'] }}" />
                <div class="i-ball-frame">
                    <span class="check-icon"></span>
                    <div class="card-content 2">
                        <img width="100px" src="{{ $eye_ball['image'] }}" alt="" />
                    </div>
                </div>
            </label> --}}
        </div>
    @endforeach


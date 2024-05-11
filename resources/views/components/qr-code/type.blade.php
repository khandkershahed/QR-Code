<div class="row fv-row">
    @foreach ($types as $type)
        <div class="col-lg-4">
            <input type="radio" class="btn-check" name="qr_type" value="{{ $type['value'] }}" {{($loop->first ) ? 'checked' : ''}}
                id="type-{{ $type['id'] }}" />
            <label class="btn btn-outline btn-outline-dashed btn-outline-default  d-flex align-items-center mb-5 p-0"
                for="type-{{ $type['id'] }}">
                <!--begin::Svg Icon | path: icons/duotune/coding/cod001.svg-->
                <span class="svg-icon svg-icon-4x me-4 bg-light-primary py-10 px-5 text-white">
                    <img class="img-fluid" width="33px" src="{{ $type['image'] }}"
                        alt="">
                </span>
                <!--end::Svg Icon-->

                <span class="d-block fw-bold text-start">
                    <span class="text-dark fw-bolder d-block fs-3">{{ $type['title'] }}</span>
                    <span class="text-muted fw-bold fs-6">
                        {{ $type['text'] }}
                    </span>
                </span>
            </label>
            <!--end::Option-->
        </div>
    @endforeach
</div>
 
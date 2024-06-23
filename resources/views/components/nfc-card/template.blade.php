<div class="row">
    @foreach ($templates as $template)
        <div class="col-lg-2">
            <input type="radio" class="btn-check" name="nfc_template" value="{{ $template['value'] }}"
                {{ $loop->first ? 'checked' : '' }} id="{{ $template['value'] }}">
            <label
                class="btn btn-outline btn-outline-dashed btn-outline-default p-7 d-flex align-items-center mb-5 template-nfc"
                style="" for="{{ $template['value'] }}">
                <img class="nfc-type-mobile" height="300px" width="100%"
                    style="width: 100% !important; object-fit: scale-down !important;"
                    src="{{ asset($template['image']) }}" alt="{{ $template['value'] }}">
            </label>
            <!--end::Option-->
        </div>
    @endforeach
</div>

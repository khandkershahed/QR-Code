<div class="row">
    @foreach ($templates as $template)
        <div class="col-lg-3">
            <input type="radio" class="btn-check" name="nfc_template" value="{{ $template['value'] }}" id="{{ $template['value'] }}">
            <label class="btn btn-outline btn-outline-dashed btn-outline-default p-7 d-flex align-items-center mb-5"
                style="height:350px; object-fit:contain; padding:0px !important; display: flex;justify-content: center;"
                for="{{ $template['value'] }}">
                <img class="" height="300px" src="{{ asset($template['image']) }}" alt="{{ $template['value'] }}">
            </label>
            <!--end::Option-->
        </div>
    @endforeach
</div>

{{-- <div class="row">
    @foreach ($templates as $template)
        <div class="col-lg-2">
            <input type="radio" class="btn-check nfc_template_radio" name="nfc_template" value="{{ $template['value'] }}"
                {{ $loop->first ? 'checked' : '' }} id="{{ $template['value'] }}">
            <label
                class="btn btn-outline btn-outline-dashed btn-outline-default p-7 d-flex align-items-center mb-5 template-nfc"
                for="{{ $template['value'] }}">
                <img class="nfc-type-mobile" height="300px" width="100%"
                    style="width: 100% !important; object-fit: scale-down !important;"
                    src="{{ asset($template['image']) }}" alt="{{ $template['value'] }}">
            </label>
            <!--end::Option-->
        </div>
    @endforeach
</div> --}}
<style>
    .screen {
        display: block;
        width: 300px;
        height: 350px;
        overflow: hidden;
        position: relative;
        border: 2px solid #b3b3b3;
        border-radius: 1px;
        margin: 0 auto;
    }

    .screen img {
        bottom: -3210px;
        width: 100%;
        height: auto;
        position: absolute;
        left: 0%;
        z-index: 0;
        margin: 0;
        padding: 0;
        -webkit-transition: top 11s;
        -moz-transition: top 11s;
        -ms-transition: top 11s;
        -o-transition: top 11s;
        transition: bottom 11s;
    }

    .screen:hover img {
        bottom: 0;
        -webkit-transition: all 11s;
        -moz-transition: all 11s;
        -ms-transition: all 11s;
        -o-transition: all 11s;
        transition: all 11s;
    }
</style>
<div class="row mt-10">
    @foreach ($templates as $template)
        <div class="col-lg-3 position-relative">
            <div>
                <input type="radio" class="btn-check template-btn-check" name="nfc_template"
                    value="{{ $template['value'] }}" id="{{ $template['value'] }}" />
                <label
                    class="btn template-btn btn-outline btn-outline-dashed btn-active-light-primary custom-active p-2 d-flex align-items-center mb-5 custom-radio"
                    for="{{ $template['value'] }}" style="">
                    <div class="screen mt-4 rounded-2">
                        <img class="img-fluid" src="{{ asset($template['image']) }}" alt="{{ $template['value'] }}">
                    </div>
                </label>
            </div>
        </div>
    @endforeach
</div>

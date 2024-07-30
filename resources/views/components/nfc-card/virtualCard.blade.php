<style>
    .custom-nfc-template {
        padding: 0px !important;
        display: flex;
        justify-content: center;
        height: 215px;
        width: 100%;
    }

    @media (max-width: 1350px) {
        .custom-nfc-template {
            height: 152px;
        }
    }

    @media (max-width: 768px) {
        .custom-nfc-template {
            height: auto;
        }
    }
</style>
<div class="row">
    @foreach ($cardtemplates as $cardtemplate)
        <div class="col-lg-3 mb-3">
            <input type="radio" class="btn-check" name="virtual_card_template" value="{{ $cardtemplate['value'] }}"
                required {{ $loop->first ? 'checked' : '' }} id="{{ $cardtemplate['value'] }}">
            <label
                class="btn btn-outline btn-outline-dashed btn-outline-default custom-nfc-template p-7 d-flex align-items-center mb-5"
                style="" for="{{ $cardtemplate['value'] }}">
                <img class="virtual_card-type-mobile p-3" height="300px" width="100%"
                    style="width: 100% !important; object-fit: scale-down !important;"
                    src="{{ asset($cardtemplate['image']) }}" alt="{{ $cardtemplate['value'] }}">
            </label>
            <!--end::Option-->
        </div>
    @endforeach
</div>

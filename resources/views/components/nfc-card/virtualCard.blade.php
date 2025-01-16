<style>
    .custom-nfc-template {
        padding: 0px !important;
        display: flex;
        justify-content: center;
        height: 260px;
        width: 100%;
    }

    .virtual_card-type-mobile {
        width: 100%;
        height: 260px;
        object-fit: cover;
        border-radius: 18px;
    }

    @media (max-width: 1366px) {
        .custom-nfc-template {
            height: 100px;
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
        <div class="col-lg-4 mb-3 align-items-center mx-auto">
            <input type="radio" class="btn-check" name="virtual_card_template" value="{{ $cardtemplate['value'] }}"
                required {{ $loop->first ? 'checked' : '' }} id="{{ $cardtemplate['value'] }}">
            <label
                class="btn btn-outline btn-outline-dashed btn-outline-default custom-nfc-template p-7 d-flex align-items-center mb-5"
                for="{{ $cardtemplate['value'] }}">
                <img class="virtual_card-type-mobile p-3" src="{{ asset($cardtemplate['image']) }}"
                    alt="{{ $cardtemplate['value'] }}">
            </label>
        </div>
    @endforeach
</div>

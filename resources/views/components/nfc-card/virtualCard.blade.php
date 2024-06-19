<div class="row">
    @foreach ($cardtemplates as $cardtemplate)
        <div class="col-lg-3">
            <input type="radio" class="btn-check" name="virtual_card_template" value="{{ $cardtemplate['value'] }}"
                required id="{{ $cardtemplate['value'] }}">
            <label class="btn btn-outline btn-outline-dashed btn-outline-default p-7 d-flex align-items-center mb-5"
                style="padding:0px !important; display: flex;justify-content: center; height:245px;
                width:100%;"
                for="{{ $cardtemplate['value'] }}">
                <img class="virtual_card-type-mobile p-3" height="300px" width="100%"
                    style="width: 100% !important; object-fit: scale-down !important;"
                    src="{{ asset($cardtemplate['image']) }}" alt="{{ $cardtemplate['value'] }}">
            </label>
            <!--end::Option-->
        </div>
    @endforeach
</div>

<div class="row">
    @foreach ($virtualCardtemplates as $virtualCardtemplate)
        <div class="col-lg-3">
            <input type="radio" class="btn-check" name="virtual_card_template" value="{{ $virtualCardtemplate['value'] }}"
                required id="{{ $virtualCardtemplate['value'] }}">
            <label class="btn btn-outline btn-outline-dashed btn-outline-default p-7 d-flex align-items-center mb-5"
                style="padding:0px !important; display: flex;justify-content: center; height:245px;
                width:100%;"
                for="{{ $virtualCardtemplate['value'] }}">
                <img class="virtual_card-type-mobile p-3" height="300px" width="100%"
                    style="width: 100% !important; object-fit: scale-down !important;"
                    src="{{ asset($virtualCardtemplate['image']) }}" alt="{{ $virtualCardtemplate['value'] }}">
            </label>
            <!--end::Option-->
        </div>
    @endforeach
</div>

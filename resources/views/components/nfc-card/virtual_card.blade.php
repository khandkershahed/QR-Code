<div class="row">
    @foreach ($virtualCardtemplates as $virtualCardtemplate)
        <div class="col-lg-3">
            <input type="radio" class="btn-check" name="virtual_card_template" value="{{ $virtualCardtemplate['value'] }}" {{($loop->first ) ? 'checked' : ''}} id="{{ $virtualCardtemplate['value'] }}">
            <label class="btn btn-outline btn-outline-dashed btn-outline-default p-7 d-flex align-items-center mb-5"
                style="height:350px; object-fit:contain; padding:0px !important; display: flex;justify-content: center;"
                for="{{ $virtualCardtemplate['value'] }}">
                <img class="virtual_card-type-mobile" height="300px" style="width: 100% !important; object-fit: cover !important;"  src="{{ asset($virtualCardtemplate['image']) }}" alt="{{ $virtualCardtemplate['value'] }}">
            </label>
            <!--end::Option-->
        </div>
    @endforeach
</div>

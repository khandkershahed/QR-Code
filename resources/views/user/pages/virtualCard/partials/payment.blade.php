<div class="container">
    <div class="row p-5 bg-light">
        <div class="col-lg-6">
            <div class="fv-row my-3">
                <x-metronic.label for="card_name" class="form-label ">
                    {{ __('Card Name') }}</x-metronic.label>
                <input id="card_name" type="text" class="form-control form-control-outline mb-3 mb-lg-0" name="card_name" />
            </div>
        </div>
        <div class="col-lg-6">
            <div class="fv-row my-3">
                <x-metronic.label for="card_phone" class="form-label ">
                    {{ __('Card Phone') }}</x-metronic.label>
                <input id="card_phone" type="text" class="form-control form-control-outline mb-3 mb-lg-0" name="card_phone" />
            </div>
        </div>
        <div class="col-lg-6">
            <div class="fv-row my-3">
                <x-metronic.label for="card_email" class="form-label ">
                    {{ __('Card Email') }}</x-metronic.label>
                <input id="card_email" type="email" class="form-control form-control-outline mb-3 mb-lg-0" name="card_email" />
            </div>
        </div>

    </div>
</div>

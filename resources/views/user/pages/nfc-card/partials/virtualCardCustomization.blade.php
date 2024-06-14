<div class="container">
    <div class="row p-2">
        <div class="col-lg-3">
            <div class="fv-row my-3">
                <x-metronic.label for="card_logo" class="form-label ">
                    {{ __('Card Logo') }}</x-metronic.label>
                <input id="card_logo" type="file" class="form-control card_logo" name="card_logo"
                    onchange="previewBannerImage(this)" accept="image/*" />
            </div>
        </div>
        <div class="col-lg-3">
            <div class="fv-row my-3">
                <x-metronic.label for="card_bg" class="form-label ">
                    {{ __('Card Background') }}</x-metronic.label>
                <input id="card_bg" type="file" class="form-control card_bg" name="card_bg"
                    onchange="previewBannerImage(this)" accept="image/*" />
            </div>
        </div>
        <div class="col-lg-3">
            <div class="fv-row my-3">
                <x-metronic.label for="card_name" class="form-label ">
                    {{ __('Card Name') }}</x-metronic.label>
                <input id="card_name" type="text" class="form-control card_name" name="card_name" />
            </div>
        </div>
        <div class="col-lg-3">
            <div class="fv-row my-3">
                <x-metronic.label for="card_designation" class="form-label ">
                    {{ __('Card Designation') }}</x-metronic.label>
                <input id="card_designation" type="text" class="form-control card_designation" />
            </div>
        </div>
        <div class="col-lg-3">
            <div class="fv-row my-3">
                <x-metronic.label for="card_phone" class="form-label ">
                    {{ __('Card Phone') }}</x-metronic.label>
                <input id="card_phone" type="text" class="form-control card_phone" name="card_phone" />
            </div>
        </div>
        <div class="col-lg-3">
            <div class="fv-row my-3">
                <x-metronic.label for="card_email" class="form-label ">
                    {{ __('Card Email') }}</x-metronic.label>
                <input id="card_email" type="email" class="form-control card_email" name="card_email" />
            </div>
        </div>
        <div class="col-lg-3">
            <div class="fv-row my-3">
                <x-metronic.label for="card_address" class="form-label ">
                    {{ __('Card Address') }}</x-metronic.label>
                <input id="card_address" type="text" class="form-control card_address" name="card_address" />
            </div>
        </div>
        <div class="col-lg-3">
            <div class="fv-row my-3">
                <x-metronic.label for="card_font_color" class="form-label ">
                    {{ __('Card Font Color') }}</x-metronic.label>
                <input id="card_font_color" type="color" class="form-control card_font_color"
                    name="card_font_color" />
            </div>
        </div>
        <div class="col-lg-3">
            <div class="fv-row my-3">
                <x-metronic.label for="card_font_style" class="form-label ">
                    {{ __('Card Font Color') }}</x-metronic.label>
                <select class="form-select form-select-solid card_font_style" data-control="select2"
                    data-placeholder="Select an option">
                    <option>Select Font Style</option>
                    <option value="roboto">Roboto</option>
                    <option value="railway">Railway</option>
                    <option value="poppins">Poppins</option>
                    <option value="cascadia-font">Cascadia Font</option>
                </select>
            </div>
        </div>
    </div>
</div>

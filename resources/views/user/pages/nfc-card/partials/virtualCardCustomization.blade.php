<div class="container">
    <div class="row p-2">
        <div class="col-lg-4">
            <div class="fv-row my-3">
                <x-metronic.label for="card_logo" class="form-label ">
                    {{ __('Card Logo') }}</x-metronic.label>
                <input id="card_logo" type="file" class="form-control form-control-solid mb-3 mb-lg-0" name="card_logo"
                    onchange="previewBannerImage(this)" accept="image/*" />
            </div>
        </div>
        <div class="col-lg-4">
            <div class="fv-row my-3">
                <x-metronic.label for="card_bg_front" class="form-label ">
                    {{ __('Card Front Background Image') }}</x-metronic.label>
                <input id="card_bg_front" type="file" class="form-control form-control-solid mb-3 mb-lg-0" name="card_bg_front"
                    onchange="changeBgFront(this)" accept="image/*" />
            </div>
        </div>
        <div class="col-lg-4">
            <div class="fv-row my-3">
                <x-metronic.label for="card_bg_back" class="form-label ">
                    {{ __('Card Back Background Image') }}</x-metronic.label>
                <input id="card_bg_back" type="file" class="form-control form-control-solid mb-3 mb-lg-0" name="card_bg_back"
                    onchange="changeBgBack(this)" accept="image/*" />
            </div>
        </div>
        <div class="col-lg-4">
            <div class="fv-row my-3">
                <x-metronic.label for="card_name" class="form-label ">
                    {{ __('Card Name') }}</x-metronic.label>
                <input id="card_name" type="text" class="form-control form-control-solid mb-3 mb-lg-0" name="card_name" />
            </div>
        </div>
        <div class="col-lg-4">
            <div class="fv-row my-3">
                <x-metronic.label for="card_designation" class="form-label ">
                    {{ __('Card Designation') }}</x-metronic.label>
                <input id="card_designation" type="text" class="form-control form-control-solid mb-3 mb-lg-0" name="card_designation" placeholder="Designation"/>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="fv-row my-3">
                <x-metronic.label for="card_phone" class="form-label ">
                    {{ __('Card Phone') }}</x-metronic.label>
                <input id="card_phone" type="text" class="form-control form-control-solid mb-3 mb-lg-0" name="card_phone" />
            </div>
        </div>
        <div class="col-lg-4">
            <div class="fv-row my-3">
                <x-metronic.label for="card_email" class="form-label ">
                    {{ __('Card Email') }}</x-metronic.label>
                <input id="card_email" type="email" class="form-control form-control-solid mb-3 mb-lg-0" name="card_email" />
            </div>
        </div>
        <div class="col-lg-4">
            <div class="fv-row my-3">
                <x-metronic.label for="card_address" class="form-label ">
                    {{ __('Card Address') }}</x-metronic.label>
                <input id="card_address" type="text" class="form-control form-control-solid mb-3 mb-lg-0" name="card_address" />
            </div>
        </div>
        <div class="col-lg-4">
            <div class="row">
                <x-metronic.label for="card_font_color" class="form-label ">
                    {{ __('Card Font Color') }}</x-metronic.label>
                <div class="col-lg-10 pe-0">
                    <div>
                        <input type="text" name="card_font_color_picker" id="secondary_color_text"
                            value="#000" class="form-control form-control-solid">
                    </div>
                </div>
                <div class="col-lg-2 ps-0">
                    <div>
                        <input type="color" name="card_font_color" id="card_font_color"
                            value="" style="width: 50px;height: 43px;"
                            oninput="changeCardFontColor()" class="form-control form-control-solid">
                    </div>
                </div>
            </div>
            {{-- <div class="fv-row my-3">
                <x-metronic.label for="card_font_color" class="form-label ">
                    {{ __('Card Font Color') }}</x-metronic.label>
                <input id="card_font_color" type="color" class="form-control form-control-solid mb-3 mb-lg-0"
                    name="card_font_color" />
            </div> --}}
        </div>
        <div class="col-lg-4">
            <div class="fv-row my-3">
                <x-metronic.label for="card_font_style" class="form-label ">
                    {{ __('Card Font Color') }}</x-metronic.label>
                <select class="form-select form-select-solid" data-control="select2" name="card_font_style"
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

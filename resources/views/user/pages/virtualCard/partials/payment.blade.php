<div class="container">
    <div class="row p-5 bg-light">
        <div class="col-lg-8 offset-lg-2">
            <div class="fv-row my-3">
                <x-metronic.label for="card_font_style" class="form-label required">
                    {{ __('Select NFC') }}</x-metronic.label>
                <select class="form-select form-select-outline" data-control="select2" name="card_font_style"
                    data-placeholder="Select NFC from your generated list" required>
                    <option></option>
                    @foreach ($nfc_cards as $nfc_card)
                        <option value="{{ $nfc_card->id }}">{{ $nfc_card->nfcData->first_name}} {{ $nfc_card->nfcData->last_name }}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="fv-row my-3">
                <x-metronic.label for="card_logo" class="form-label ">
                    {{ __('Card Logo') }}</x-metronic.label>
                <input id="card_logo" type="file" class="form-control form-control-outline mb-3 mb-lg-0" name="card_logo"
                    onchange="previewBannerImage(this)" accept="image/*" />
            </div>
        </div>
        <div class="col-lg-4">
            <div class="fv-row my-3">
                <x-metronic.label for="card_bg_front" class="form-label ">
                    {{ __('Card Front BG Image') }}</x-metronic.label>
                <input id="card_bg_front" type="file" class="form-control form-control-outline mb-3 mb-lg-0" name="card_bg_front"
                    onchange="changeBgFront(this)" accept="image/*" />
            </div>
        </div>
        <div class="col-lg-4">
            <div class="fv-row my-3">
                <x-metronic.label for="card_bg_back" class="form-label ">
                    {{ __('Card Back BG Image') }}</x-metronic.label>
                <input id="card_bg_back" type="file" class="form-control form-control-outline mb-3 mb-lg-0" name="card_bg_back"
                    onchange="changeBgBack(this)" accept="image/*" />
            </div>
        </div>
        <div class="col-lg-4">
            <div class="fv-row my-3">
                <x-metronic.label for="card_name" class="form-label ">
                    {{ __('Card Name') }}</x-metronic.label>
                <input id="card_name" type="text" class="form-control form-control-outline mb-3 mb-lg-0" name="card_name" />
            </div>
        </div>
        <div class="col-lg-4">
            <div class="fv-row my-3">
                <x-metronic.label for="card_phone" class="form-label ">
                    {{ __('Card Phone') }}</x-metronic.label>
                <input id="card_phone" type="text" class="form-control form-control-outline mb-3 mb-lg-0" name="card_phone" />
            </div>
        </div>
        <div class="col-lg-3">
            <div class="fv-row my-3">
                <x-metronic.label for="card_email" class="form-label ">
                    {{ __('Card Email') }}</x-metronic.label>
                <input id="card_email" type="email" class="form-control form-control-outline mb-3 mb-lg-0" name="card_email" />
            </div>
        </div>

    </div>
</div>

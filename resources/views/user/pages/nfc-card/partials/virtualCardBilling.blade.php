<div class="row p-5 bg-light">
    <!-- Contact Person Name -->
    <div class="col-lg-12">
        <div class="fv-row my-3">
            <x-metronic.label for="card_name" class="form-label required">
                {{ __('Contact Person Name') }}
            </x-metronic.label>
            <input id="card_name" type="text" class="form-control form-control-outline mb-3 mb-lg-0"
                name="card_name" value="{{ old('card_name') }}"
                placeholder="Enter Your Generated Card Name" />
        </div>
    </div>
    <div class="col-lg-4">
        <div class="fv-row my-3">
            <x-metronic.label for="shipping_name" class="form-label required">
                {{ __('Contact Person Name') }}
            </x-metronic.label>
            <input id="shipping_name" type="text" class="form-control form-control-outline mb-3 mb-lg-0"
                name="shipping_name" value="{{ old('shipping_name') }}"
                placeholder="Enter contact person name" />
        </div>
    </div>

    <!-- Phone -->
    <div class="col-lg-4">
        <div class="fv-row my-3">
            <x-metronic.label for="shipping_phone" class="form-label required">
                {{ __('Phone') }}
            </x-metronic.label>
            <input id="shipping_phone" type="text" class="form-control form-control-outline mb-3 mb-lg-0" name="shipping_phone"
                value="{{ old('shipping_phone') }}" placeholder="Enter phone number" />
        </div>
    </div>

    <!-- Address -->
    <div class="col-lg-4">
        <div class="fv-row my-3">
            <x-metronic.label for="shipping_address" class="form-label required">
                {{ __('Address') }}
            </x-metronic.label>
            <input id="shipping_address" type="text" class="form-control form-control-outline mb-3 mb-lg-0" name="shipping_address"
                value="{{ old('shipping_address') }}" placeholder="Enter address" />
        </div>
    </div>

    <!-- City -->
    <div class="col-lg-3">
        <div class="fv-row my-3">
            <x-metronic.label for="shipping_city" class="form-label required">
                {{ __('City') }}
            </x-metronic.label>
            <input id="shipping_city" type="text" class="form-control form-control-outline mb-3 mb-lg-0" name="shipping_city"
                value="{{ old('shipping_city') }}" placeholder="Enter city" />
        </div>
    </div>

    <!-- State -->
    <div class="col-lg-3">
        <div class="fv-row my-3">
            <x-metronic.label for="state" class="form-label required">
                {{ __('State') }}
            </x-metronic.label>
            <input id="state" type="text" class="form-control form-control-outline mb-3 mb-lg-0" name="state"
                value="{{ old('state') }}" placeholder="Enter state" />
        </div>
    </div>

    <!-- Zip -->
    <div class="col-lg-3">
        <div class="fv-row my-3">
            <x-metronic.label for="zip" class="form-label required">
                {{ __('Zip') }}
            </x-metronic.label>
            <input id="zip" type="text" class="form-control form-control-outline mb-3 mb-lg-0" name="zip"
                value="{{ old('zip') }}" placeholder="Enter zip code" />
        </div>
    </div>

    <!-- Country -->
    <div class="col-lg-3">
        <div class="fv-row my-3">
            <x-metronic.label for="country" class="form-label required">
                {{ __('Country') }}
            </x-metronic.label>
            <input id="country" type="text" class="form-control form-control-outline mb-3 mb-lg-0" name="country"
                value="{{ old('country') }}" placeholder="Enter country" />
        </div>
    </div>

    <!-- Instruction -->
    <div class="col-lg-12">
        <div class="fv-row my-3">
            <x-metronic.label for="instruction" class="form-label">
                {{ __('Instruction') }}
            </x-metronic.label>
            <textarea id="instruction" class="form-control form-control-outline mb-3 mb-lg-0" name="instruction" rows="3"
                placeholder="Enter instructions">{{ old('instruction') }}</textarea>
        </div>
    </div>
</div>

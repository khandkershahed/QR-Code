<div class="row p-2">
    <!-- Contact Person Name -->
    <div class="col-lg-4">
        <div class="fv-row my-3">
            <x-metronic.label for="contact_person_name" class="form-label required">
                {{ __('Contact Person Name') }}
            </x-metronic.label>
            <input id="contact_person_name" type="text" class="form-control form-control-solid mb-3 mb-lg-0"
                name="contact_person_name" value="{{ old('contact_person_name') }}"
                placeholder="Enter contact person name" />
        </div>
    </div>

    <!-- Phone -->
    <div class="col-lg-4">
        <div class="fv-row my-3">
            <x-metronic.label for="phone" class="form-label required">
                {{ __('Phone') }}
            </x-metronic.label>
            <input id="phone" type="text" class="form-control form-control-solid mb-3 mb-lg-0" name="phone"
                value="{{ old('phone') }}" placeholder="Enter phone number" />
        </div>
    </div>

    <!-- Address -->
    <div class="col-lg-4">
        <div class="fv-row my-3">
            <x-metronic.label for="address" class="form-label required">
                {{ __('Address') }}
            </x-metronic.label>
            <input id="address" type="text" class="form-control form-control-solid mb-3 mb-lg-0" name="address"
                value="{{ old('address') }}" placeholder="Enter address" />
        </div>
    </div>

    <!-- City -->
    <div class="col-lg-3">
        <div class="fv-row my-3">
            <x-metronic.label for="city" class="form-label required">
                {{ __('City') }}
            </x-metronic.label>
            <input id="city" type="text" class="form-control form-control-solid mb-3 mb-lg-0" name="city"
                value="{{ old('city') }}" placeholder="Enter city" />
        </div>
    </div>

    <!-- State -->
    <div class="col-lg-3">
        <div class="fv-row my-3">
            <x-metronic.label for="state" class="form-label required">
                {{ __('State') }}
            </x-metronic.label>
            <input id="state" type="text" class="form-control form-control-solid mb-3 mb-lg-0" name="state"
                value="{{ old('state') }}" placeholder="Enter state" />
        </div>
    </div>

    <!-- Zip -->
    <div class="col-lg-3">
        <div class="fv-row my-3">
            <x-metronic.label for="zip" class="form-label required">
                {{ __('Zip') }}
            </x-metronic.label>
            <input id="zip" type="text" class="form-control form-control-solid mb-3 mb-lg-0" name="zip"
                value="{{ old('zip') }}" placeholder="Enter zip code" />
        </div>
    </div>

    <!-- Country -->
    <div class="col-lg-3">
        <div class="fv-row my-3">
            <x-metronic.label for="country" class="form-label required">
                {{ __('Country') }}
            </x-metronic.label>
            <input id="country" type="text" class="form-control form-control-solid mb-3 mb-lg-0" name="country"
                value="{{ old('country') }}" placeholder="Enter country" />
        </div>
    </div>

    <!-- Instruction -->
    <div class="col-lg-12">
        <div class="fv-row my-3">
            <x-metronic.label for="instruction" class="form-label">
                {{ __('Instruction') }}
            </x-metronic.label>
            <textarea id="instruction" class="form-control form-control-solid mb-3 mb-lg-0" name="instruction" rows="3"
                placeholder="Enter instructions">{{ old('instruction') }}</textarea>
        </div>
    </div>
</div>

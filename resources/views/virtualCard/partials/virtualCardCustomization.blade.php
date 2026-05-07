<div class="container p-0">
    @php
        $selectedNfcCard = $selectedNfcCard ?? null;
        $nfcCards = $nfc_cards ?? collect();
    @endphp

    <div class="row p-5 bg-light">
        <div class="col-lg-6">
            <div class="fv-row my-3">
                <x-metronic.label for="card_id" class="form-label required">
                    {{ __('Select NFC') }}
                </x-metronic.label>

                <select id="card_id"
                    class="form-select form-select-outline"
                    data-control="select2"
                    name="card_id"
                    data-placeholder="Select NFC from your generated list"
                    required>
                    <option></option>

                    @foreach ($nfcCards as $cardItem)
                        <option value="{{ $cardItem->id }}">
                            {{ optional($cardItem->nfcData)->first_name }}
                            {{ optional($cardItem->nfcData)->last_name }}
                        </option>
                    @endforeach
                </select>
            </div>
        </div>

        <div class="col-lg-6">
            <div class="fv-row my-3">
                <x-metronic.label for="card_color" class="form-label">
                    {{ __('Card Color') }}
                </x-metronic.label>

                <div class="d-flex">
                    <select id="card_color"
                        name="card_color"
                        class="form-select form-select-outline mb-3 mb-lg-0"
                        onchange="updateColor(this)">
                        <option disabled>{{ __('Choose') }}</option>

                        <option value="black"
                            data-image="{{ asset('images/Choosen-card/BlackCardBack-mockup.webp') }}"
                            @selected(old('card_color', optional($selectedNfcCard)->card_color ?? 'black') == 'black')>
                            {{ __('Black') }}
                        </option>

                        <option value="gold"
                            data-image="{{ asset('images/Choosen-card/GoldCardBack-mockup.webp') }}"
                            @selected(old('card_color', optional($selectedNfcCard)->card_color) == 'gold')>
                            {{ __('Gold') }}
                        </option>
                    </select>
                </div>
            </div>
        </div>

        <div class="col-lg-6">
            <div class="fv-row my-3">
                <x-metronic.label for="card_preference" class="form-label">
                    {{ __('Card Preference') }}
                </x-metronic.label>

                <div class="d-flex">
                    <select id="card_preference"
                        class="form-select form-select-outline mb-3 mb-lg-0"
                        name="card_preference">
                        <option disabled>{{ __('Choose') }}</option>

                        <option value="plastic" @selected(old('card_preference', optional($selectedNfcCard)->card_preference ?? 'plastic') == 'plastic')>
                            {{ __('Plastic') }}
                        </option>

                        <option value="metal" @selected(old('card_preference', optional($selectedNfcCard)->card_preference) == 'metal')>
                            {{ __('Metal') }}
                        </option>
                    </select>
                </div>
            </div>
        </div>

        <div class="col-lg-6">
            <div class="fv-row my-3">
                <x-metronic.label for="card_logo" class="form-label">
                    {{ __('Card Logo') }}
                </x-metronic.label>

                <x-metronic.file-input id="card_logo"
                    type="file"
                    class="form-control form-control-outline mb-3 mb-lg-0"
                    name="card_logo"
                    :source="!empty(optional($selectedNfcCard)->card_logo) ? asset('storage/' . optional($selectedNfcCard)->card_logo) : null"
                    onchange="previewLogo()"
                    accept="image/*">
                </x-metronic.file-input>
            </div>
        </div>

        <div class="col-lg-6">
            <div class="fv-row my-3">
                <x-metronic.label for="card_name" class="form-label">
                    {{ __('Card Name') }}
                </x-metronic.label>

                <x-metronic.input id="card_name"
                    type="text"
                    class="form-control form-control-outline mb-3 mb-lg-0"
                    name="card_name"
                    :value="old('card_name', optional($selectedNfcCard)->card_name)"
                    placeholder="Your Name">
                </x-metronic.input>
            </div>
        </div>

        <div class="col-lg-6">
            <div class="fv-row my-3">
                <x-metronic.label for="card_designation" class="form-label">
                    {{ __('Card Designation') }}
                </x-metronic.label>

                <x-metronic.input id="card_designation"
                    type="text"
                    class="form-control form-control-outline mb-3 mb-lg-0"
                    name="card_designation"
                    :value="old('card_designation', optional($selectedNfcCard)->card_designation)"
                    placeholder="Your Designation">
                </x-metronic.input>
            </div>
        </div>
    </div>
</div>

@push('scripts')
    <script>
        function previewLogo() {
            const fileInput = document.getElementById('card_logo');
            const logoPreview = document.getElementById('logoPreview');

            if (!fileInput || !logoPreview) {
                return;
            }

            if (fileInput.files && fileInput.files[0]) {
                const reader = new FileReader();

                reader.onload = function(e) {
                    logoPreview.src = e.target.result;
                };

                reader.readAsDataURL(fileInput.files[0]);
            }
        }

        function updateColor(selectElement) {
            if (!selectElement) {
                return;
            }

            const newCardImage = $(selectElement).find(':selected').data('image');

            if (newCardImage && $('#mainCardImage').length > 0) {
                $('#mainCardImage').attr('src', newCardImage);
            }
        }

        $(document).ready(function() {
            $('#card_name').on('input keyup change', function() {
                $('#card-info-name').text($(this).val());
            });

            $('#card_designation').on('input keyup change', function() {
                $('#card-info-designation').text($(this).val());
            });

            const colorSelect = document.getElementById('card_color');

            if (colorSelect) {
                updateColor(colorSelect);
            }
        });
    </script>
@endpush

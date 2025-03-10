<div class="container p-0">
    <div class="row p-5 bg-light">
        <div class="col-lg-4">
            <div class="fv-row my-3">
                <x-metronic.label for="card_font_style" class="form-label required">
                    {{ __('Select NFC') }}</x-metronic.label>
                <select class="form-select form-select-outline" data-control="select2" name="card_id"
                    data-placeholder="Select NFC from your generated list" required>
                    <option></option>
                    @foreach ($nfc_cards as $nfc_card)
                        <option value="{{ $nfc_card->id }}">{{ optional($nfc_card->nfcData)->first_name }}
                            {{ optional($nfc_card->nfcData)->last_name }}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="fv-row my-3">
                <x-metronic.label for="card_bg_back_color" class="form-label">
                    {{ __('Card Color') }}
                </x-metronic.label>
                <div class="d-flex">
                    <!-- Select Dropdown for Color Options -->
                    <select id="card_color" class="form-control form-control-outline mb-3 mb-lg-0 w-75"
                        onchange="updateColorInput(this)">
                        <option value="#000000">Black</option>
                        <option value="#FFFFFF">White</option>
                        <option value="#0000FF">Blue</option>
                        <option value="#FF0000">Red</option>
                        <option value="#008000">Green</option>
                    </select>

                    <!-- Input Field to Show Selected Color -->
                    <input id="selected_color_display" type="color" class="form-control w-25 p-0 form-control-outline"
                        name="selected_color" />
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="fv-row my-3">
                <x-metronic.label for="card_type" class="form-label">
                    {{ __('Card Type') }}
                </x-metronic.label>
                <div class="d-flex">
                    <!-- Select Dropdown for Color Options -->
                    <select class="form-control form-control-outline mb-3 mb-lg-0" name="card_type">
                        <option disabled>Choose</option>
                        <option value="Metal">Metal</option>
                        <option value="Plastic">Plastic</option>
                    </select>
                </div>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="fv-row my-3">
                <x-metronic.label for="card_logo" class="form-label ">{{ __('Card Logo') }}</x-metronic.label>
                <x-metronic.file-input id="card_logo" type="file"
                    class="form-control form-control-outline mb-3 mb-lg-0" name="card_logo"
                    onchange="previewBannerImage(this)" accept="image/*"></x-metronic.file-input>

                {{-- <input id="card_logo" type="file" class="form-control form-control-outline mb-3 mb-lg-0" name="card_logo"
                    onchange="previewBannerImage(this)" accept="image/*" /> --}}
            </div>
        </div>
        {{-- <div class="col-lg-4">
            <div class="fv-row my-3">
                <x-metronic.label for="card_bg_front" class="form-label ">
                    {{ __('Card Front BG Image') }}</x-metronic.label>
                <input id="card_bg_front" type="file" class="form-control form-control-outline mb-3 mb-lg-0" name="card_bg_front"
                    onchange="changeBgFront(this)" accept="image/*" />
            </div>
        </div> --}}
        {{-- <div class="col-lg-4">
            <div class="fv-row my-3">
                <x-metronic.label for="card_bg_back" class="form-label ">
                    {{ __('Card Back BG Image') }}</x-metronic.label>
                <input id="card_bg_back" type="file" class="form-control form-control-outline mb-3 mb-lg-0" name="card_bg_back"
                    onchange="changeBgBack(this)" accept="image/*" />
            </div>
        </div> --}}
        <div class="col-lg-6">
            <div class="fv-row my-3">
                <x-metronic.label for="card_name" class="form-label ">
                    {{ __('Card Name') }}</x-metronic.label>
                <x-metronic.input id="card_name" type="text" class="form-control form-control-outline mb-3 mb-lg-0"
                    name="card_name" placeholder="Your Name"></x-metronic.input>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="fv-row my-3">
                <x-metronic.label for="card_designation" class="form-label ">
                    {{ __('Card Designation') }}</x-metronic.label>
                <x-metronic.input id="card_designation" type="text"
                    class="form-control form-control-outline mb-3 mb-lg-0" name="card_designation"
                    placeholder="Your Designation"></x-metronic.input>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="fv-row my-3">
                <x-metronic.label for="card_phone" class="form-label ">
                    {{ __('Card Phone') }}</x-metronic.label>
                <x-metronic.input id="card_phone" type="text" class="form-control form-control-outline mb-3 mb-lg-0"
                    name="card_phone" placeholder="Your Phone"></x-metronic.input>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="fv-row my-3">
                <x-metronic.label for="card_email" class="form-label ">
                    {{ __('Card Email') }}</x-metronic.label>
                <x-metronic.input id="card_email" type="email" class="form-control form-control-outline mb-3 mb-lg-0"
                    name="card_email" placeholder="example@example.com"></x-metronic.input>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="fv-row my-3">
                <x-metronic.label for="card_address" class="form-label ">
                    {{ __('Card Address') }}</x-metronic.label>
                <x-metronic.input id="card_address" type="email"
                    class="form-control form-control-outline mb-3 mb-lg-0" name="card_address"
                    placeholder="Your Address"></x-metronic.input>

            </div>
        </div>
        {{-- <div class="col-lg-3">

            <div class="fv-row my-3">
                <x-metronic.label for="card_font_color" class="form-label ">
                    {{ __('Card Font Color') }}</x-metronic.label>
                <input id="card_font_color" type="color" class="form-control form-control-outline mb-3 mb-lg-0"
                    name="card_font_color" />
            </div>
        </div> --}}
        {{-- <div class="col-lg-3">
            <div class="fv-row my-3">
                <x-metronic.label for="card_font_style" class="form-label ">
                    {{ __('Card Font Style') }}</x-metronic.label>
                <select class="form-select form-select-outline" data-control="select2" name="card_font_style"
                    data-placeholder="Select an option">
                    <option>Select Font Style</option>
                    <option value="roboto">Roboto</option>
                    <option value="railway">Railway</option>
                    <option value="poppins">Poppins</option>
                    <option value="cascadia-font">Cascadia Font</option>
                </select>
            </div>
        </div> --}}
    </div>
</div>

@push('scripts')
    <script>
        $(document).ready(function() {
            let urlInput = $('select[name="card_id"]');
            urlInput.on('change', function() {
                let card_id = $(this).val().trim();

                if (card_id.length > 0) {
                    $.ajax({
                        url: '/get-nfc-data',
                        type: 'GET',
                        data: {
                            card_id: card_id // Pass the current record ID to the server
                        },
                        success: function(response) {
                            console.log(response); // Debug the response structure
                            if (response.nfc && response.nfcData) {
                                let nfc = response.nfc;
                                let nfcData = response.nfcData;
                                let baseUrl = window.location.origin;
                                let qrCodeUrl = baseUrl + '/storage/nfc/qrs/' + nfc.nfc_qr;

                                // Set the data to the corresponding inputs
                                $('#card_name').val(nfcData.first_name + ' ' + nfcData
                                    .last_name);
                                $('#card_designation').val(nfc.designation);
                                $('#card_email').val(nfcData.email_personal);
                                $('#card_phone').val(nfcData.phone_personal);
                                $('#card_address').val(nfcData.location);
                                $('.nfc_qr').attr('src', qrCodeUrl);
                                cardValueUpdate();
                            } else {
                                // Clear the inputs if no data is found
                                $('#card_name').val('');
                                $('#card_designation').val('');
                                $('#card_phone').val('');
                                $('#card_email').val('');
                                $('#card_address').val('');
                            }
                        },
                        error: function(xhr, status, error) {
                            console.error(error);
                            alert('An error occurred while fetching the NFC data.');
                        }
                    });
                } else {
                    // Clear the inputs if no card is selected
                    $('#card_name').val('');
                    $('#card_designation').val('');
                    $('#card_phone').val('');
                    $('#card_email').val('');
                    $('#card_address').val('');
                }
            });
        });

        function cardValueUpdate() {
            // Iterate over each input element and update the corresponding card elements
            $('#kt_stepper_example_clickable_form input:not([type="radio"]), #kt_stepper_example_clickable_form textarea, #kt_stepper_example_clickable_form input:not([type="color"])')
                .each(function() {
                    var inputValue = $(this).val();
                    var inputName = $(this).attr('name');
                    var nfcCardElement = $('.nfc-card .' + inputName);
                    var virtualCardElement = $('.virtual_card .' + inputName);

                    if (nfcCardElement.length > 0 || virtualCardElement.length > 0) {
                        if ($(this).is('input[type="file"]')) {
                            if ($(this).prop('files') && $(this).prop('files')[0]) {
                                var file = $(this).prop('files')[0];
                                var reader = new FileReader();
                                reader.onload = function(e) {
                                    nfcCardElement.attr('src', e.target.result);
                                    virtualCardElement.attr('src', e.target.result);
                                }
                                reader.readAsDataURL(file);
                            }
                        } else if ($(this).is('input[type="url"]')) {
                            nfcCardElement.attr('href', inputValue);
                            virtualCardElement.attr('href', inputValue);
                        } else {
                            nfcCardElement.text(inputValue);
                            virtualCardElement.text(inputValue);
                        }
                    }

                    // For debugging
                    console.log("Input Name:", inputName, "Input Value:", inputValue);
                });
        }
    </script>

    <script>
        function updateColorInput(selectElement) {
            const selectedColor = selectElement.value;
            const colorDisplayInput = document.getElementById('selected_color_display');

            // Update the color input field's value
            colorDisplayInput.value = selectedColor;
        }
    </script>
@endpush

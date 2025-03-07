<x-admin-app-layout :title="'Plan Edit - Admin Panel'">
    <div class="card card-flash my-15">
        <div class="card-body scroll-y mx-5 mx-xl-15 my-7">
            <div class="notice d-flex bg-light-warning rounded border-warning border border-dashed mb-9 p-6">
                <span class="svg-icon svg-icon-2tx svg-icon-warning me-4">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                        <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10"
                            fill="currentColor" />
                        <rect x="11" y="14" width="7" height="2" rx="1" transform="rotate(-90 11 14)"
                            fill="currentColor" />
                        <rect x="11" y="17" width="2" height="2" rx="1" transform="rotate(-90 11 17)"
                            fill="currentColor" />
                    </svg>
                </span>
                <div class="d-flex flex-stack flex-grow-1">
                    <div class="fw-bold">
                        <div class="fs-8 text-gray-700">
                            <strong class="me-1">Warning!</strong>By editing the plan, you
                            might
                            break the stripe plan functionality. Please ensure you're absolutely
                            certain
                            before proceeding.
                        </div>
                    </div>
                </div>
            </div>
            <form class="form" action="{{ route('admin.plans.update', $plan->id) }}" method="POST">
                @csrf
                @method('PATCH')
                <div class="row">
                    <div class="col-lg-6 mb-5">
                        <x-metronic.label for="title" class="col-form-label fw-bold fs-6">{{ __('Title') }}
                        </x-metronic.label>

                        <x-metronic.input id="title" type="text" name="title" :value="old('title', $plan->title)"
                            placeholder="Enter the Plan Title" readonly></x-metronic.input>
                    </div>
                    <div class="col-lg-3 mb-5">
                        <x-metronic.label for="billing_cycle" class="col-form-label required fw-bold fs-6">
                            {{ __('Billing Cycle') }}</x-metronic.label>
                        <x-metronic.input id="billing_cycle" type="text" name="billing_cycle" :value="old('billing_cycle', $plan->billing_cycle)"
                            placeholder="Enter the Plan billing_cycle" readonly></x-metronic.input>
                    </div>

                    <div class="col-lg-3 mb-5">
                        <x-metronic.label for="interval"
                            class="required col-form-label fw-bold fs-6">{{ __('Interval (In days)') }}
                        </x-metronic.label>
                        <x-metronic.input id="interval" type="number" name="interval" :value="old('interval', $plan->interval)"
                            placeholder="From Start Date to End Days" required></x-metronic.input>
                    </div>

                    <div class="col-lg-3 mb-5">
                        <x-metronic.label for="currency" class="col-form-label fw-bold fs-6">{{ __('Currency') }}
                        </x-metronic.label>
                        <x-metronic.input id="currency" type="text" name="currency" :value="old('currency', $plan->currency)" required
                            placeholder="Stripe payment link" readonly></x-metronic.input>
                    </div>
                    <div class="col-lg-3 mb-5">
                        <x-metronic.label for="type" class="col-form-label required fw-bold fs-6">
                            {{ __('Plan For') }}</x-metronic.label>

                        <x-metronic.select-option id="type" name="type" data-hide-search="true"
                            data-placeholder="Select an option" onchange="toggleInputs()" required>
                            <option value=""></option>
                            <option value="nfc" @selected($plan->type == 'nfc')>NFC</option>
                            <option value="qr" @selected($plan->type == 'qr')>QR</option>
                            <option value="barcode" @selected($plan->type == 'barcode')>BarCode</option>
                            <option value="card" @selected($plan->type == 'card')>Card</option>
                        </x-metronic.select-option>
                    </div>


                    <div class="col-lg-3 mb-5 card-input" style="display: none;">
                        <x-metronic.label for="card_type"
                            class="col-form-label required fw-bold fs-6">{{ __('Select a Card Type') }}</x-metronic.label>
                        <x-metronic.select-option id="card_type" name="card_type" data-hide-search="true"
                            data-placeholder="Select an option" required>
                            <option></option>
                            <option value="team" @selected($plan->card_type == 'team')>Team</option>
                            <option value="individual" @selected($plan->card_type == 'individual')>Individual</option>
                        </x-metronic.select-option>
                    </div>
                    <div class="col-lg-3 mb-5">
                        <x-metronic.label for="price" class="col-form-label fw-bold fs-6">{{ __('Plan Price') }}
                        </x-metronic.label>
                        <x-metronic.input id="price" type="number" name="price" :value="old('price',$plan->price)"
                            placeholder="Enter the Plan Price" readonly></x-metronic.input>
                    </div>

                    <div class="col-lg-3 mb-5 card-input" style="display: none;">
                        <x-metronic.label for="plastic_card_price"
                            class="col-form-label required fw-bold fs-6">{{ __('Plastic Card Price') }}</x-metronic.label>
                        <x-metronic.input id="plastic_card_price" type="number" name="plastic_card_price" :value="old('plastic_card_price',$plan->plastic_card_price)"
                            placeholder="Enter the Plastic Card Price"  />
                    </div>
                    <div class="col-lg-3 mb-5 card-input" style="display: none;">
                        <x-metronic.label for="metal_card_price"
                            class="col-form-label required fw-bold fs-6">{{ __('Metal Card Price') }}</x-metronic.label>
                        <x-metronic.input id="metal_card_price" type="number" name="metal_card_price" :value="old('metal_card_price',$plan->metal_card_price)"
                            placeholder="Enter the Metal Card Price"/>
                    </div>
                    <div class="col-lg-3 mb-5 card-input" style="display: none;">
                        <x-metronic.label for="card_type"
                            class="col-form-label required fw-bold fs-6">{{ __('Max User') }}</x-metronic.label>
                        <x-metronic.input id="max_users" type="number" name="max_users" :value="old('max_users', $plan->max_users)"
                            placeholder="Enter the max users" required />
                    </div>
                    <div class="col-lg-3 mb-5" id="qr-input" style="display: none;">
                        <x-metronic.label for="qr"
                            class="col-form-label fw-bold fs-6">{{ __('Number of QR Code') }}
                        </x-metronic.label>
                        <x-metronic.input id="qr" type="number" name="qr" :value="old('qr', $plan->qr)"
                            placeholder="Number of QR Code"></x-metronic.input>
                    </div>
                    <div class="col-lg-3 mb-5" id="nfc-input" style="display: none;">
                        <x-metronic.label for="nfc"
                            class="col-form-label fw-bold fs-6">{{ __('Number of NFC Card') }}
                        </x-metronic.label>
                        <x-metronic.input id="nfc" type="number" name="nfc" :value="old('nfc', $plan->nfc)"
                            placeholder="Number of NFC Card"></x-metronic.input>
                    </div>
                    <div class="col-lg-3 mb-5">
                        <x-metronic.label for="status" class="col-form-label required fw-bold fs-6">
                            {{ __('Select a Status ') }}</x-metronic.label>
                        <x-metronic.select-option id="status" name="status" data-hide-search="true"
                            data-placeholder="Select an option">
                            <option></option>
                            <option value="active" {{ $plan->status == 'active' ? 'selected' : '' }}>Active
                            </option>
                            <option value="inactive" {{ $plan->status == 'inactive' ? 'selected' : '' }}>Inactive
                            </option>
                        </x-metronic.select-option>
                    </div>
                    <div class="col-lg-12 mt-3 mb-5 border p-4">
                        <div class="table-responsive col-md-12">
                            <table class="table table-bordered col-md-12 product text-center">
                                <thead>
                                    <tr>
                                        <th style="padding:7px !important;"> Plan Details</th>
                                        <th style="padding:7px !important;"> <a href="javascript:void(0)"
                                                class="bg-success addRow p-1 px-2"><i
                                                    class="fas fa-plus icons_design text-white"></i></a>
                                        </th>
                                    </tr>
                                </thead>
                                <tbody class="repeater">
                                    @foreach (json_decode($plan->descriptions ?? '[]') as $description)
                                        <tr>
                                            <td> <input type="text" class="form-control form-control-sm"
                                                    name="descriptions[]" value="{{ $description }}" required></td>
                                            <td class="text-center" style="vertical-align: middle;"> <a
                                                    href="javascript:void(0)" class="bg-danger removeRow p-1 px-2"><i
                                                        class="fas fa-minus icons_design text-white"></i></a></td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="text-center pt-15">
                    <x-metronic.button type="submit" class="primary">
                        {{ __('Save Changes') }}
                    </x-metronic.button>
                </div>
            </form>
        </div>
    </div>

    @push('scripts')
        <script>
            function toggleInputs() {
                const type = document.getElementById('type').value;
                const qrInput = document.getElementById('qr-input');
                const nfcInput = document.getElementById('nfc-input');
                const cardInputs = document.querySelectorAll('.card-input'); // This returns a NodeList

                // Reset all inputs
                $('input[name="nfc"]').val('');
                $('input[name="qr"]').val('');

                // Show/Hide based on selected type
                if (type === 'qr') {
                    qrInput.style.display = 'block';
                    nfcInput.style.display = 'none';
                    cardInputs.forEach(input => input.style.display = 'none');
                } else if (type === 'nfc') {
                    qrInput.style.display = 'none';
                    nfcInput.style.display = 'block';
                    cardInputs.forEach(input => input.style.display = 'none');
                } else if (type === 'card') {
                    qrInput.style.display = 'none';
                    nfcInput.style.display = 'none';
                    cardInputs.forEach(input => input.style.display = 'block');
                } else {
                    qrInput.style.display = 'none';
                    nfcInput.style.display = 'none';
                    cardInputs.forEach(input => input.style.display = 'none');
                }
            }

            // Call toggleInputs on page load to check the initially selected value
            document.addEventListener('DOMContentLoaded', function() {
                toggleInputs();
            });
        </script>
        <script>
            $(document).ready(function() {
                // Add Row
                $(".addRow").on("click", function() {
                    var newRow =
                        '<tr><td><input type="text" class="form-control form-control-sm" name="descriptions[]" required></td>' +
                        '<td class="text-center" style="vertical-align: middle;"><a href="javascript:void(0)" class="bg-danger removeRow p-1 px-2">' +
                        '<i class="fas fa-minus icons_design text-white"></i></a></td></tr>';

                    $(".repeater").append(newRow);
                });

                // Remove Row
                $(".repeater").on("click", ".removeRow", function() {
                    $(this).closest("tr").remove();
                });
            });
        </script>
    @endpush
</x-admin-app-layout>

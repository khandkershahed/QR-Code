<x-admin-app-layout :title="'Plan Create'">

    <div class="card card-flash mt-15">
        <div class="card-body scroll-y mx-5">
            <form class="form" action="{{ route('admin.plans.store') }}" method="POST">
                @csrf
                <div class="row">
                    <div class="col-lg-6 mb-5">
                        <x-metronic.label for="title" class="col-form-label fw-bold fs-6">{{ __('Title') }}
                        </x-metronic.label>

                        <x-metronic.input id="title" type="text" name="title" :value="old('title')"
                            placeholder="Enter the Plan Title"></x-metronic.input>
                    </div>
                    {{-- <div class="col-lg-6 mb-5">
                        <x-metronic.label for="stripe_plan" class="col-form-label fw-bold fs-6">{{ __('Stripe ID') }}
                        </x-metronic.label>

                        <x-metronic.input id="stripe_plan" type="text" name="stripe_plan" :value="old('stripe_plan')"
                            placeholder="Enter the Plan Stripe ID"></x-metronic.input>
                    </div> --}}
                    <div class="col-lg-3 mb-5">
                        <x-metronic.label for="billing_cycle" class="col-form-label required fw-bold fs-6">
                            {{ __('Billing Cycle') }}</x-metronic.label>
                        <x-metronic.select-option id="billing_cycle" name="billing_cycle" data-hide-search="true"
                            data-placeholder="Select an option">
                            <option></option>
                            <option value="trial_period">Trial Period</option>
                            {{-- <option value="day">Daily</option>
                            <option value="week">Weekly</option> --}}
                            <option value="month">Monthly</option>
                            {{-- <option value="quarter">Every 3 months</option>
                            <option value="semiannual">Every 6 months</option> --}}
                            <option value="year">Yearly</option>
                        </x-metronic.select-option>
                    </div>

                    <div class="col-lg-3 mb-5">
                        <x-metronic.label for="interval"
                            class="required col-form-label fw-bold fs-6">{{ __('Interval (In days)') }}
                        </x-metronic.label>
                        <x-metronic.input id="interval" type="number" name="interval" :value="old('interval')"
                            placeholder="From Start Date to End Days" required></x-metronic.input>
                    </div>
                    <div class="col-lg-3 mb-5">
                        <x-metronic.label for="price" class="col-form-label fw-bold fs-6">{{ __('Price') }}
                        </x-metronic.label>
                        <x-metronic.input id="price" type="number" name="price" :value="old('price')"
                            placeholder="Enter the Plan Price"></x-metronic.input>
                    </div>
                    <div class="col-lg-3 mb-5">
                        <x-metronic.label for="currency" class="col-form-label fw-bold fs-6">{{ __('Currency') }}
                        </x-metronic.label>
                        <x-metronic.select-option id="currency" name="currency" data-hide-search="true"
                            data-placeholder="Select an option">
                            <option></option>
                            <option value="gbp">Pound</option>
                            <option value="usd">US Dollar</option>
                        </x-metronic.select-option>
                        {{-- <x-metronic.input id="currency" type="text" name="currency" :value="old('currency')"
                            placeholder="Enter the Plan Currency"></x-metronic.input> --}}
                    </div>
                    {{-- <div class="col-lg-3 mb-5">
                        <x-metronic.label for="payment_link"
                            class="col-form-label fw-bold fs-6">{{ __('Payment Page Link') }}
                        </x-metronic.label>
                        <x-metronic.input id="payment_link" type="url" name="payment_link" :value="old('payment_link')"
                             placeholder="Stripe payment link"></x-metronic.input>
                    </div> --}}


                    <div class="col-lg-3 mb-5">
                        <x-metronic.label for="type" class="col-form-label required fw-bold fs-6">
                            {{ __('Plan For') }}
                        </x-metronic.label>
                        <x-metronic.select-option id="type" name="type" data-hide-search="true"
                            data-placeholder="Select an option" onchange="toggleInputs()" required>
                            <option value=""></option>
                            <option value="nfc">NFC</option>
                            <option value="qr">QR</option>
                        </x-metronic.select-option>
                    </div>

                    <div class="col-lg-3 mb-5" id="qr-input" style="display: none;">
                        <x-metronic.label for="qr" class="col-form-label fw-bold fs-6">
                            {{ __('Number of QR Code') }}
                        </x-metronic.label>
                        <x-metronic.input id="qr" type="number" name="qr" :value="old('qr')"
                            placeholder="Number of QR Code"></x-metronic.input>
                    </div>

                    <div class="col-lg-3 mb-5" id="nfc-input" style="display: none;">
                        <x-metronic.label for="nfc" class="col-form-label fw-bold fs-6">
                            {{ __('Number of NFC Card') }}
                        </x-metronic.label>
                        <x-metronic.input id="nfc" type="number" name="nfc" :value="old('nfc')"
                            placeholder="Number of NFC Card"></x-metronic.input>
                    </div>

                    <div class="col-lg-3 mb-5">
                        <x-metronic.label for="status" class="col-form-label required fw-bold fs-6">
                            {{ __('Select a Status ') }}</x-metronic.label>
                        <x-metronic.select-option id="status" name="status" data-hide-search="true"
                            data-placeholder="Select an option">
                            <option></option>
                            <option value="active">Active</option>
                            <option value="inactive">Inactive</option>
                        </x-metronic.select-option>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-8 mt-3 mb-5 p-4 mx-auto">
                        <x-metronic.label for="status" class="col-form-label fw-bold fs-6">
                            {{ __('Add Provided Services') }}</x-metronic.label>
                        <div class="table-responsive">
                            <table class="table product text-center table-striped ">
                                <thead>
                                    <tr class="align-items-center bg-light-primary rounded-2">
                                        <th width="5%" class="text-center fw-bold py-0 pb-5"> Sl</th>
                                        <th width="90%" class="text-center fw-bold py-0 pb-5"> Plan Details</th>
                                        <th width="5%">
                                            <a href="javascript:void(0)"
                                                class="btn btn-success px-5 py-3 addRow btn-sm">
                                                <i class="fas fa-plus icons_design text-white pe-0"></i>
                                            </a>
                                        </th>
                                    </tr>
                                </thead>
                                <tbody class="repeater">
                                    <tr>
                                        <td class="text-center">1</td>
                                        <td> <input type="text" class="form-control form-control-sm w-100"
                                                name="descriptions[]" placeholder="5 Qr & 3 Nfc" required></td>
                                        <td class="text-center" style="vertical-align: middle;"> <a
                                                href="javascript:void(0)"
                                                class="btn btn-danger px-5 py-3 addRow btn-sm removeRow"><i
                                                    class="fas fa-minus icons_design text-white pe-0"></i></a></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="text-end pt-5">
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

                if (type === 'qr') {
                    qrInput.style.display = 'block';
                    nfcInput.style.display = 'none';
                    $('input[name="nfc"]').val();
                    $('input[name="qr"]').val();
                } else if (type === 'nfc') {
                    qrInput.style.display = 'none';
                    nfcInput.style.display = 'block';
                    $('input[name="nfc"]').val();
                    $('input[name="qr"]').val();
                } else {
                    qrInput.style.display = 'none';
                    nfcInput.style.display = 'none';
                    $('input[name="nfc"]').val();
                    $('input[name="qr"]').val();
                }
            }
        </script>
        <script>
            $(document).ready(function() {
                // Add Row
                var slNo = 1;

                function updateSerialNumbers() {
                    $(".repeater tr").each(function(index) {
                        $(this).find("td:first-child").text(index + 1);
                    });
                }

                $(".addRow").on("click", function() {
                    slNo++;
                    var newRow =
                        '<tr><td>' + slNo + '</td>' +
                        '<td><input type="text" class="form-control form-control-sm w-100" name="descriptions[]" placeholder="Enter Service" required></td>' +
                        '<td class="text-center" style="vertical-align: middle;"><a href="javascript:void(0)" class="btn btn-danger px-5 py-3 btn-sm removeRow">' +
                        '<i class="fas fa-minus icons_design text-white"></i></a></td></tr>';

                    $(".repeater").append(newRow);
                    updateSerialNumbers();
                });

                $(document).on("click", ".removeRow", function() {
                    $(this).closest("tr").remove();
                    updateSerialNumbers();
                });
            });
        </script>
    @endpush
</x-admin-app-layout>

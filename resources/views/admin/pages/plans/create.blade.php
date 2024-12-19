<x-admin-app-layout :title="'Plan Management - Admin Panel'">
    <div class="card my-10 rounded-0">
        <div class="card-header p-5 align-items-center rounded-0 bg-info m-0">
            <div>
                <h1 class="mb-0 mt-0 card-title fs-2 text-white">All Plans!</h1>
                <p class="text-white mt-2 mb-0">Create plans information in this page.</p>
            </div>
        </div>
        <div class="card-body">
            <form class="form" action="{{ route('admin.plans.store') }}" method="POST">
                @csrf
                <div class="row">
                    <div class="col-lg-7">
                        <div class="row">
                            <!-- Title Input -->
                            <div class="col-lg-12 mb-5">
                                <x-metronic.label for="title"
                                    class="col-form-label fw-bold fs-6">{{ __('Title') }}</x-metronic.label>
                                <x-metronic.input id="title" type="text" name="title" :value="old('title')"
                                    placeholder="Enter the Plan Title" required />
                            </div>

                            <!-- Billing Cycle -->
                            <div class="col-lg-6 mb-5">
                                <x-metronic.label for="billing_cycle"
                                    class="col-form-label required fw-bold fs-6">{{ __('Billing Cycle') }}</x-metronic.label>
                                <x-metronic.select-option id="billing_cycle" name="billing_cycle"
                                    data-hide-search="true" data-placeholder="Select an option" required>
                                    <option></option>
                                    <option value="trial_period">Trial Period</option>
                                    <option value="month">Monthly</option>
                                    <option value="year">Yearly</option>
                                </x-metronic.select-option>
                            </div>

                            <!-- Interval Input -->
                            <div class="col-lg-6 mb-5">
                                <x-metronic.label for="interval"
                                    class="required col-form-label fw-bold fs-6">{{ __('Interval (In days)') }}</x-metronic.label>
                                <x-metronic.input id="interval" type="number" name="interval" :value="old('interval')"
                                    placeholder="Enter Days" required />
                            </div>

                            <!-- Price Input -->
                            <div class="col-lg-6 mb-5">
                                <x-metronic.label for="price"
                                    class="col-form-label fw-bold fs-6">{{ __('Price') }}</x-metronic.label>
                                <x-metronic.input id="price" type="number" name="price" :value="old('price')"
                                    placeholder="Enter the Plan Price" required />
                            </div>

                            <!-- Currency Selector -->
                            <div class="col-lg-6 mb-5">
                                <x-metronic.label for="currency"
                                    class="col-form-label fw-bold fs-6">{{ __('Currency') }}</x-metronic.label>
                                <x-metronic.select-option id="currency" name="currency" data-hide-search="true"
                                    data-placeholder="Select an option" required>
                                    <option></option>
                                    <option value="gbp">Pound</option>
                                    <option value="usd">US Dollar</option>
                                </x-metronic.select-option>
                            </div>

                            <!-- Plan Type Selector -->
                            <div class="col-lg-6 mb-5">
                                <x-metronic.label for="type"
                                    class="col-form-label required fw-bold fs-6">{{ __('Plan For') }}</x-metronic.label>
                                <x-metronic.select-option id="type" name="type" data-hide-search="true"
                                    data-placeholder="Select an option" onchange="toggleInputs()" required>
                                    <option></option>
                                    <option value="nfc">NFC</option>
                                    <option value="qr">QR</option>
                                    <option value="barcode">BarCode</option>
                                </x-metronic.select-option>
                            </div>

                            <!-- QR Input -->
                            <div class="col-lg-6 mb-5" id="qr-input" style="display: none;">
                                <x-metronic.label for="qr"
                                    class="col-form-label fw-bold fs-6">{{ __('Number of QR Code') }}</x-metronic.label>
                                <x-metronic.input id="qr" type="number" name="qr" :value="old('qr')"
                                    placeholder="Enter QR Code Count" />
                            </div>

                            <!-- NFC Input -->
                            <div class="col-lg-6 mb-5" id="nfc-input" style="display: none;">
                                <x-metronic.label for="nfc"
                                    class="col-form-label fw-bold fs-6">{{ __('Number of NFC Card') }}</x-metronic.label>
                                <x-metronic.input id="nfc" type="number" name="nfc" :value="old('nfc')"
                                    placeholder="Enter NFC Card Count" />
                            </div>

                            <!-- Status Selector -->
                            <div class="col-lg-6 mb-5">
                                <x-metronic.label for="status"
                                    class="col-form-label required fw-bold fs-6">{{ __('Select a Status') }}</x-metronic.label>
                                <x-metronic.select-option id="status" name="status" data-hide-search="true"
                                    data-placeholder="Select an option" required>
                                    <option></option>
                                    <option value="active">Active</option>
                                    <option value="inactive">Inactive</option>
                                </x-metronic.select-option>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <!-- Provided Services -->
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card shadow-sm p-0 mt-13">
                                    <div class="p-3 py-5">
                                        <h3 class="mb-0 fw-normal">Add Provided Services</h3>
                                    </div>
                                    <div class="card-body p-0">
                                        <div class="table-responsive">
                                            <table class="table product text-center table-striped "
                                                style="margin-bottom: 0;">
                                                <thead style="vertical-align: middle">
                                                    <tr class="bg-info">
                                                        <th width="5%" class="fw-bold text-white text-center">Sl
                                                        </th>
                                                        <th width="90%"class="fw-bold text-white text-center">Plan
                                                            Details
                                                        </th>
                                                        <th width="5%">
                                                            <div class="text-end">
                                                                <button type="button"
                                                                    class="btn btn-sm fw-bold btn-white pe-2 ps-3 py-1 addRow">
                                                                    <i class="fas fa-plus text-info"></i>
                                                                </button>
                                                            </div>
                                                        </th>
                                                    </tr>
                                                </thead>
                                                <tbody class="repeater" style="vertical-align: middle;">
                                                    <tr>
                                                        <td class="text-center">01</td>
                                                        <td><input type="text"
                                                                class="form-control form-control form-control-sm"
                                                                name="descriptions[]" placeholder="Enter Details"
                                                                required />
                                                        </td>
                                                        <td class="text-center">
                                                            <button type="button"
                                                                class="btn btn-sm fw-bold btn-danger pe-2 ps-3 removeRow">
                                                                <i class="fas fa-trash text-white"></i>
                                                            </button>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Submit Button -->
                <div class="text-end pt-5">
                    <button type="submit" class="btn btn-info">{{ __('Save Plans') }}</button>
                </div>
            </form>
        </div>
    </div>

    @push('scripts')
        <script>
            function toggleInputs() {
                const type = document.getElementById('type').value;
                document.getElementById('qr-input').style.display = type === 'qr' ? 'block' : 'none';
                document.getElementById('nfc-input').style.display = type === 'nfc' ? 'block' : 'none';
            }

            $(document).ready(function() {
                function updateSerialNumbers() {
                    $(".repeater tr").each(function(index) {
                        $(this).find("td:first-child").text(index + 1);
                    });
                }

                $(".addRow").on("click", function() {
                    const newRow = `
                        <tr>
                            <td></td>
                            <td><input type="text" class="form-control form-control-sm" name="descriptions[]" placeholder="Enter Details" required /></td>
                            <td class="text-center">
                                <button type="button"
                                    class="btn btn-sm fw-bold btn-danger pe-2 ps-3 removeRow">
                                    <i class="fas fa-trash text-white"></i>
                                </button>
                            </td>
                        </tr>`;
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

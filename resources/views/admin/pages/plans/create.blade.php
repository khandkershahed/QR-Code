<x-admin-app-layout :title="'Plan Create'">

    <div class="card card-flash">
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
                    <div class="col-lg-6 mb-5">
                        <x-metronic.label for="stripe_plan" class="col-form-label fw-bold fs-6">{{ __('Stripe ID') }}
                        </x-metronic.label>

                        <x-metronic.input id="stripe_plan" type="text" name="stripe_plan" :value="old('stripe_plan')"
                            placeholder="Enter the Plan Stripe ID"></x-metronic.input>
                    </div>
                    <div class="col-lg-4 mb-5">
                        <x-metronic.label for="billing_cycle" class="col-form-label required fw-bold fs-6">
                            {{ __('Billing Cycle') }}</x-metronic.label>
                        <x-metronic.select-option id="billing_cycle" name="billing_cycle" data-hide-search="true"
                            data-placeholder="Select an option">
                            <option></option>
                            <option value="monthly">Monthly
                            </option>
                            <option value="half_yearly">
                                Half Yearly
                            </option>
                            <option></option>
                            <option value="yearly">Yearly
                            </option>
                        </x-metronic.select-option>
                    </div>
                    <div class="col-lg-4 mb-5">
                        <x-metronic.label for="price" class="col-form-label fw-bold fs-6">{{ __('Price') }}
                        </x-metronic.label>
                        <x-metronic.input id="price" type="number" name="price" :value="old('price')"
                            placeholder="Enter the Plan Price"></x-metronic.input>
                    </div>
                    <div class="col-lg-4 mb-5">
                        <x-metronic.label for="currency" class="col-form-label fw-bold fs-6">{{ __('Currency') }}
                        </x-metronic.label>
                        <x-metronic.input id="currency" type="text" name="currency" :value="old('currency')"
                            placeholder="Enter the Plan Currency"></x-metronic.input>
                    </div>
                    <div class="col-lg-4 mb-5">
                        <x-metronic.label for="qr"
                            class="col-form-label fw-bold fs-6">{{ __('Number of QR Code') }}
                        </x-metronic.label>
                        <x-metronic.input id="qr" type="number" name="qr" :value="old('qr')"
                            placeholder="Number of QR Code"></x-metronic.input>
                    </div>
                    <div class="col-lg-4 mb-5">
                        <x-metronic.label for="nfc"
                            class="col-form-label fw-bold fs-6">{{ __('Number of NFC Card') }}
                        </x-metronic.label>
                        <x-metronic.input id="nfc" type="number" name="nfc" :value="old('nfc')"
                            placeholder="Number of NFC Card"></x-metronic.input>
                    </div>
                    <div class="col-lg-4 mb-5">
                        <x-metronic.label for="status" class="col-form-label required fw-bold fs-6">
                            {{ __('Select a Status ') }}</x-metronic.label>
                        <x-metronic.select-option id="status" name="status" data-hide-search="true"
                            data-placeholder="Select an option">
                            <option></option>
                            <option value="active">Active
                            </option>
                            <option value="inactive">Inactive
                            </option>
                        </x-metronic.select-option>
                    </div>
                    <div class="col-lg-12 mt-3 mb-5 p-4">
                        <p class="fw-bold">Add Provided Services</p>
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
            $(document).ready(function() {
                // Add Row
                $(".addRow").on("click", function() {
                    var newRow =
                        '<tr><td>1</td> <td><input type="text" class="form-control form-control-sm w-100" name="descriptions[]" placeholder="Enter Service" required></td>' +
                        '<td class="text-center" style="vertical-align: middle;"><a href="javascript:void(0)" class="btn btn-danger px-5 py-3 addRow btn-sm removeRow">' +
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

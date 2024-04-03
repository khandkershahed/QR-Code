<x-admin-app-layout :title="'Plan Create'">

    <div class="card card-flash">
        <div class="card-body scroll-y mx-5 mx-xl-15 my-7">
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
                                    <tr>
                                        <td> <input type="text" class="form-control form-control-sm"
                                                name="descriptions[]" required></td>
                                        <td class="text-center" style="vertical-align: middle;"> <a
                                                href="javascript:void(0)" class="bg-danger removeRow p-1 px-2"><i
                                                    class="fas fa-minus icons_design text-white"></i></a></td>
                                    </tr>
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

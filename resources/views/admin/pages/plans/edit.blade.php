<x-admin-app-layout :title="'Plan Edit'">

    <div class="card card-flash my-15">
        <!--begin::Modal body-->
        <div class="card-body scroll-y mx-5 mx-xl-15 my-7">
            <div class="notice d-flex bg-light-warning rounded border-warning border border-dashed mb-9 p-6">
                <!--begin::Icon-->
                <!--begin::Svg Icon | path: icons/duotune/general/gen044.svg-->
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
                <!--end::Svg Icon-->
                <!--end::Icon-->
                <!--begin::Wrapper-->
                <div class="d-flex flex-stack flex-grow-1">
                    <!--begin::Content-->
                    <div class="fw-bold">
                        <div class="fs-8 text-gray-700">
                            <strong class="me-1">Warning!</strong>By editing the plan, you
                            might
                            break the stripe plan functionality. Please ensure you're absolutely
                            certain
                            before proceeding.
                        </div>
                    </div>
                    <!--end::Content-->
                </div>
                <!--end::Wrapper-->
            </div>
            <!--begin::Form-->
            <form class="form" action="{{ route('admin.plans.update', $plan->id) }}" method="POST">
                @csrf
                @method('PATCH')
                <!--begin::Input group-->
                <div class="row">
                    <div class="col-lg-6 mb-5">
                        <x-metronic.label for="title" class="col-form-label fw-bold fs-6">{{ __('Title') }}
                        </x-metronic.label>

                        <x-metronic.input id="title" type="text" name="title" :value="old('title', $plan->title)"
                            placeholder="Enter the Plan Title"></x-metronic.input>
                    </div>
                    <div class="col-lg-6 mb-5">
                        <x-metronic.label for="stripe_plan" class="col-form-label fw-bold fs-6">{{ __('Stripe ID') }}
                        </x-metronic.label>

                        <x-metronic.input id="stripe_plan" type="text" name="stripe_plan" :value="old('stripe_plan', $plan->stripe_plan)"
                            placeholder="Enter the Plan Stripe ID"></x-metronic.input>
                    </div>
                    <div class="col-lg-3 mb-5">
                        <x-metronic.label for="billing_cycle" class="col-form-label required fw-bold fs-6">
                            {{ __('Billing Cycle') }}</x-metronic.label>
                        <x-metronic.select-option id="billing_cycle" name="billing_cycle" data-hide-search="true"
                            data-placeholder="Select an option">
                            <option></option>
                            <option value="trial_period" @selected($plan->billing_cycle == 'trial_period')>
                                Trial Period
                            </option>
                            <option value="monthly" {{ $plan->billing_cycle == 'monthly' ? 'selected' : '' }}>Monthly
                            </option>
                            <option value="half_yearly" {{ $plan->billing_cycle == 'half_yearly' ? 'selected' : '' }}>
                                Half Yearly
                            </option>
                            <option value="yearly" {{ $plan->billing_cycle == 'yearly' ? 'selected' : '' }}>Yearly
                            </option>
                        </x-metronic.select-option>
                    </div>
                    <div class="col-lg-3 mb-5">
                        <x-metronic.label for="type" class="col-form-label required fw-bold fs-6">
                            {{ __('Plan For') }}</x-metronic.label>
                        <x-metronic.select-option id="type" name="type" data-hide-search="true"
                            data-placeholder="Select an option">
                            <option value=""></option>
                            <option value="individual" @selected($plan->type == 'individual')> Individual
                            </option>
                            <option value="business" @selected($plan->type == 'business')> Business
                            </option>
                        </x-metronic.select-option>
                    </div>
                    <div class="col-lg-3 mb-5">
                        <x-metronic.label for="interval" class="required col-form-label fw-bold fs-6">{{ __('Interval (In days)') }}
                        </x-metronic.label>
                        <x-metronic.input id="interval" type="number" name="interval" :value="old('interval', $plan->interval)"
                            placeholder="From Start Date to End Days" required></x-metronic.input>
                    </div>
                    <div class="col-lg-3 mb-5">
                        <x-metronic.label for="price" class="col-form-label fw-bold fs-6">{{ __('Price') }}
                        </x-metronic.label>
                        <x-metronic.input id="price" type="number" name="price" :value="old('price', $plan->price)"
                            placeholder="Enter the Plan Price"></x-metronic.input>
                    </div>
                    <div class="col-lg-3 mb-5">
                        <x-metronic.label for="currency" class="col-form-label fw-bold fs-6">{{ __('Currency') }}
                        </x-metronic.label>
                        <x-metronic.input id="currency" type="text" name="currency" :value="old('currency', $plan->currency)"
                            placeholder="Enter the Plan Currency"></x-metronic.input>
                    </div>
                    <div class="col-lg-3 mb-5">
                        <x-metronic.label for="payment_link"
                            class="required col-form-label fw-bold fs-6">{{ __('Payment Page Link') }}
                        </x-metronic.label>
                        <x-metronic.input id="payment_link" type="url" name="payment_link" :value="old('payment_link', $plan->payment_link)" required
                            placeholder="Stripe payment link"></x-metronic.input>
                    </div>
                    <div class="col-lg-3 mb-5">
                        <x-metronic.label for="qr"
                            class="col-form-label fw-bold fs-6">{{ __('Number of QR Code') }}
                        </x-metronic.label>
                        <x-metronic.input id="qr" type="number" name="qr" :value="old('qr', $plan->qr)"
                            placeholder="Number of QR Code"></x-metronic.input>
                    </div>
                    <div class="col-lg-3 mb-5">
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
                                            <td class="text-center" style="vertical-align: middle;"> <a href="javascript:void(0)"
                                                    class="bg-danger removeRow p-1 px-2"><i
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
                <!--end::Actions-->
            </form>
            <!--end::Form-->
        </div>
        <!--end::Modal body-->
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

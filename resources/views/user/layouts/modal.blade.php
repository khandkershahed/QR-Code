<!-- Modal trigger button -->
@php
use App\Models\Admin\Plan;
    $qr_plans = Plan::orderBy('price', 'asc')->where('type', 'qr')->get();
    $nfc_plans = Plan::orderBy('price', 'asc')->where('type', 'nfc')->get();
    $barcode_plans = Plan::orderBy('price', 'asc')->where('type', 'barcode')->get();
@endphp

{{-- Modal --}}
<div class="modal fade" id="toastr_nfc_modal" tabindex="-1" data-bs-backdrop="static" data-bs-keyboard="false" role="dialog"
    aria-labelledby="modalTitleId" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-md" role="document">
        <div class="modal-content">
            <div class="modal-header border-0">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div>
                    <h4 class="text-center pb-3">V.Card & NFC Card require a subscription plan. Subscribe now to get started!</h4>
                </div>
                <div>
                    <div data-kt-buttons="true">
                        @foreach ($nfc_plans as $nfc_plan)
                            <a href="{{ route('user.subscribe.post', $nfc_plan->slug) }}">
                                <label
                                    class=" btn btn-outline btn-outline-dashed btn-active-light-info d-flex flex-stack text-start p-6 mb-5">
                                    <div class="d-flex align-items-center me-2">
                                        <div class="form-check form-check-custom form-check-solid form-check-info me-6">

                                        </div>

                                        <div class="flex-grow-1">
                                            <h2 class="d-flex align-items-center fs-3 fw-bold flex-wrap">
                                                {{ $nfc_plan->title }}
                                            </h2>
                                            {{-- <div class="fw-semibold opacity-50">
                                                Start From
                                            </div> --}}
                                        </div>
                                    </div>

                                    <div class="ms-5">
                                        <span class="mb-2">$</span>
                                        <span class="fs-2x fw-bold text-danger">
                                            {{ $nfc_plan->price }}
                                        </span>
                                        <span class="fs-7 opacity-50">/
                                            <span data-kt-element="period">Year</span>
                                        </span>
                                    </div>
                                </label>
                            </a>
                        @endforeach

                    </div>


                </div>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="toastr_qr_modal" tabindex="-1" data-bs-backdrop="static" data-bs-keyboard="false" role="dialog"
    aria-labelledby="modalTitleId" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-md" role="document">
        <div class="modal-content">
            <div class="modal-header border-0">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div>
                    <h4 class="text-center pb-3">QR Code require a subscription plan. Subscribe now to get started!</h4>
                </div>
                <div>
                    <div data-kt-buttons="true">
                        @foreach ($qr_plans as $qr_plan)
                            <a href="{{ route('user.subscribe.post', $qr_plan->slug) }}">
                                <label
                                    class=" btn btn-outline btn-outline-dashed btn-active-light-info d-flex flex-stack text-start p-6 mb-5">
                                    <div class="d-flex align-items-center me-2">
                                        <div class="form-check form-check-custom form-check-solid form-check-info me-6">

                                        </div>

                                        <div class="flex-grow-1">
                                            <h2 class="d-flex align-items-center fs-3 fw-bold flex-wrap">
                                                {{ $qr_plan->title }}
                                            </h2>
                                            {{-- <div class="fw-semibold opacity-50">
                                                Start From
                                            </div> --}}
                                        </div>
                                    </div>

                                    <div class="ms-5">
                                        <span class="mb-2">$</span>
                                        <span class="fs-2x fw-bold text-danger">
                                            {{ $qr_plan->price }}
                                        </span>
                                        <span class="fs-7 opacity-50">/
                                            <span data-kt-element="period">Year</span>
                                        </span>
                                    </div>
                                </label>
                            </a>
                        @endforeach

                    </div>


                </div>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="toastr_barcode_modal" tabindex="-1" data-bs-backdrop="static" data-bs-keyboard="false" role="dialog"
    aria-labelledby="modalTitleId" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-md" role="document">
        <div class="modal-content">
            <div class="modal-header border-0">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div>
                    <h4 class="text-center pb-3">Bar Code require a subscription plan. Subscribe now to get started!</h4>
                </div>
                <div>
                    <div data-kt-buttons="true">
                        @foreach ($barcode_plans as $barcode_plan)
                            <a href="{{ route('user.subscribe.post', $barcode_plan->slug) }}">
                                <label
                                    class=" btn btn-outline btn-outline-dashed btn-active-light-info d-flex flex-stack text-start p-6 mb-5">
                                    <div class="d-flex align-items-center me-2">
                                        <div class="form-check form-check-custom form-check-solid form-check-info me-6">

                                        </div>

                                        <div class="flex-grow-1">
                                            <h2 class="d-flex align-items-center fs-3 fw-bold flex-wrap">
                                                {{ $barcode_plan->title }}
                                            </h2>
                                            {{-- <div class="fw-semibold opacity-50">
                                                Start From
                                            </div> --}}
                                        </div>
                                    </div>

                                    <div class="ms-5">
                                        <span class="mb-2">$</span>
                                        <span class="fs-2x fw-bold text-danger">
                                            {{ $barcode_plan->price }}
                                        </span>
                                        <span class="fs-7 opacity-50">/
                                            <span data-kt-element="period">Year</span>
                                        </span>
                                    </div>
                                </label>
                            </a>
                        @endforeach

                    </div>


                </div>
            </div>
        </div>
    </div>
</div>

{{-- Modal End --}}

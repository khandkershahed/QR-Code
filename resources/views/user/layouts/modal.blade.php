<!-- Modal trigger button -->
{{-- <button type="button" class="btn btn-info btn-lg rounded-0" data-bs-toggle="modal" data-bs-target="#modalId">
    Launch
</button> --}}

{{-- Modal --}}
<div class="modal fade" id="toastr_modal" tabindex="-1" data-bs-backdrop="static" data-bs-keyboard="false" role="dialog"
    aria-labelledby="modalTitleId" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-md" role="document">
        <div class="modal-content">
            <div class="modal-header border-0">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div>
                    <h4 class="text-center pb-3">Please Upgrade To Ultima Plan Or Adove to Avail Witelabeled
                        Merchandise
                        Feature</h4>
                </div>
                <div>
                    <form action="">
                        <div data-kt-buttons="true">
                            <label
                                class=" btn btn-outline btn-outline-dashed btn-active-light-info d-flex flex-stack text-start p-6 mb-5">
                                <div class="d-flex align-items-center me-2">
                                    <div class="form-check form-check-custom form-check-solid form-check-info me-6">
                                        <input class="form-check-input" type="radio" name="plan"
                                            value="advanced" />
                                        {{-- checked="checked" --}}
                                    </div>

                                    <div class="flex-grow-1">
                                        <h2 class="d-flex align-items-center fs-3 fw-bold flex-wrap">
                                            ULTIMA
                                        </h2>
                                        <div class="fw-semibold opacity-50">
                                            Start From
                                        </div>
                                    </div>
                                </div>

                                <div class="ms-5">
                                    <span class="mb-2">$</span>
                                    <span class="fs-2x fw-bold text-danger">
                                        34.99
                                    </span>
                                    <span class="fs-7 opacity-50">/
                                        <span data-kt-element="period">Mon</span>
                                    </span>
                                </div>
                            </label>


                            <label
                                class="btn btn-outline btn-outline-dashed btn-active-light-info d-flex flex-stack text-start p-6 mb-5">
                                <div class="d-flex align-items-center me-2">
                                    <div class="form-check form-check-custom form-check-solid form-check-info me-6">
                                        <input class="form-check-input" type="radio" name="plan" value="startup" />
                                    </div>

                                    <div class="flex-grow-1">
                                        <h2 class="d-flex align-items-center fs-3 fw-bold flex-wrap">
                                            ULTIMA 2X
                                        </h2>
                                        <div class="fw-semibold opacity-50">
                                            Start From
                                        </div>
                                    </div>
                                </div>

                                <div class="ms-5">
                                    <span class="mb-2">$</span>
                                    <span class="fs-2x fw-bold text-danger">
                                        $69.99
                                    </span>
                                    <span class="fs-7 opacity-50">/
                                        <span data-kt-element="period">Mon</span>
                                    </span>
                                </div>
                            </label>
                        </div>

                        <div>
                            <button type="submit" class="btn btn-primary w-100">Upgrade Now</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
{{-- Modal End --}}

@if (session('error'))
    <div class="alert alert-danger">
        {{ session('error') }}
    </div>
@endif
<div class="row g-2" id="columns-container">
    <div class="row py-10">
        <div class="col-lg-2 ">
            <div class="custom-fixed-top">
                <div class="d-flex flex-column flex-md-row rounded border bg-white">
                    @include('nfc.form_partials.tab_trigger')
                </div>
            </div>
        </div>
        <div class="col-lg-10">
            <div class="tab-content bg-white p-5" id="myTabContent">
                <div class="tab-pane fade active show" id="kt_vtab_pane_1" role="tabpanel">
                    <div>
                        <h1 class="text-start">Basic Details</h1>
                    </div>
                    <div class="row">
                        <div class="col-lg-12 general_info_container">
                            @include('nfc.form_partials.general_info')
                        </div>
                    </div>
                </div>

                <div class="tab-pane fade" id="kt_vtab_pane_2" role="tabpanel">
                    <div>
                        <h1 class="text-center">vCard Templates</h1>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            @include('nfc.form_partials.vcard_template')
                        </div>
                    </div>
                </div>

                <div class="tab-pane fade" id="kt_vtab_pane_3" role="tabpanel">
                    <div>
                        <h1 class="text-center">Business Hours</h1>
                    </div>
                    <div class="row">
                        <div class="col-lg-12 business_hours_container">
                            @include('nfc.form_partials.business_hours')
                        </div>
                    </div>
                </div>

                <div class="tab-pane fade" id="kt_vtab_pane_5" role="tabpanel">
                    <div>
                        <h1 class="text-center">Services</h1>
                    </div>
                    <div class="row">
                        <div class="col-lg-12 service_container">
                            @include('nfc.form_partials.services')
                        </div>
                    </div>
                </div>

                <div class="tab-pane fade" id="kt_vtab_pane_6" role="tabpanel">
                    <div>
                        <h1 class="text-center">Products</h1>
                    </div>
                    <div class="row">
                        <div class="col-lg-12 product_container">
                            @include('nfc.form_partials.products')
                        </div>
                    </div>
                </div>

                <div class="tab-pane fade" id="kt_vtab_pane_7" role="tabpanel">
                    <div>
                        <h1 class="text-center">Galleries</h1>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            @include('nfc.form_partials.galleries')
                        </div>
                    </div>
                </div>


                <div class="tab-pane fade" id="kt_vtab_pane_9" role="tabpanel">
                    <div>
                        <h1 class="text-center">Testimonials</h1>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            @include('nfc.form_partials.testimonials')
                        </div>
                    </div>
                </div>

                <div class="tab-pane fade" id="kt_vtab_pane_11" role="tabpanel">
                    <div>
                        <h1 class="text-center">Social
                            links - Website</h1>
                    </div>
                    <div class="row">
                        <div class="col-lg-12 social_links_container">
                            @include('nfc.form_partials.social_links')
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="kt_vtab_pane_16" role="tabpanel">
                    <div>
                        <h1 class="text-center">Settings</h1>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            {{-- @include('nfc.form_partials.setting') --}}
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

@push('scripts')

@endpush

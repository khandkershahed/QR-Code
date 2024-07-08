@if (session('error'))
    <div class="alert alert-danger">
        {{ session('error') }}
    </div>
@endif
<div class="row g-2" id="columns-container">
    <div class="row py-10 pt-0 gx-2">
        <div class="col-lg-2">
            <div class="custom-fixed-top">
                <div class="d-flex flex-column flex-md-row rounded border bg-white">
                    @include('nfc.form_partials.tab_trigger')
                </div>
            </div>
        </div>
        <div class="col-lg-10">
            <div class="tab-content bg-white p-5" id="myTabContent">
                <div class="tab-pane fade active show" id="kt_vtab_pane_1" role="tabpanel">
                    <div class="row">
                        <div class="col-lg-12 general_info_container">
                            @include('nfc.form_partials.general_info')
                        </div>
                    </div>
                </div>

                <div class="tab-pane fade" id="kt_vtab_pane_2" role="tabpanel">
                    <div class="row">
                        <div class="col-lg-12">
                            @include('nfc.form_partials.vcard_template')
                        </div>
                    </div>
                </div>

                <div class="tab-pane fade" id="kt_vtab_pane_3" role="tabpanel">
                    <div class="row">
                        <div class="col-lg-12 business_hours_container">
                            @include('nfc.form_partials.business_hours')
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="kt_vtab_pane_4" role="tabpanel">
                    <div class="row">
                        <div class="col-lg-12 company_container">
                            @include('nfc.form_partials.companies')
                        </div>
                    </div>
                </div>

                <div class="tab-pane fade" id="kt_vtab_pane_5" role="tabpanel">
                    <div class="row">
                        <div class="col-lg-12 service_container">
                            @include('nfc.form_partials.services')
                        </div>
                    </div>
                </div>

                <div class="tab-pane fade" id="kt_vtab_pane_6" role="tabpanel">
                    <div class="row">
                        <div class="col-lg-12 product_container">
                            @include('nfc.form_partials.products')
                        </div>
                    </div>
                </div>

                <div class="tab-pane fade" id="kt_vtab_pane_7" role="tabpanel">
                    <div class="row">
                        <div class="col-lg-12">
                            @include('nfc.form_partials.galleries')
                        </div>
                    </div>
                </div>

                <div class="tab-pane fade" id="kt_vtab_pane_8" role="tabpanel">
                    <div class="row">
                        <div class="col-lg-12 banner_container">
                            @include('nfc.form_partials.banner')
                        </div>
                    </div>
                </div>


                <div class="tab-pane fade" id="kt_vtab_pane_9" role="tabpanel">
                    <div class="row">
                        <div class="col-lg-12 testimonial_container">
                            @include('nfc.form_partials.testimonials')
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="kt_vtab_pane_10" role="tabpanel">
                    <div class="row">
                        <div class="col-lg-12 seo_container">
                            @include('nfc.form_partials.seo')
                        </div>
                    </div>
                </div>

                <div class="tab-pane fade" id="kt_vtab_pane_11" role="tabpanel">
                    <div class="row">
                        <div class="col-lg-12 social_links_container">
                            @include('nfc.form_partials.social_links')
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="kt_vtab_pane_12" role="tabpanel">
                    <div class="row">
                        <div class="col-lg-12 privacy_container">
                            @include('nfc.form_partials.privacy')
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="kt_vtab_pane_13" role="tabpanel">
                    <div class="row">
                        <div class="col-lg-12 terms_container">
                            @include('nfc.form_partials.terms')
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="kt_vtab_pane_14" role="tabpanel">
                    <div class="row">
                        <div class="col-lg-12 fonts_container">
                            @include('nfc.form_partials.fonts')
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="kt_vtab_pane_15" role="tabpanel">
                    <div class="row">
                        <div class="col-lg-12 terms_container">
                            @include('nfc.form_partials.terms')
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="kt_vtab_pane_16" role="tabpanel">
                    <div class="row">
                        <div class="col-lg-12">
                            @include('nfc.form_partials.setting')
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

@push('scripts')

@endpush

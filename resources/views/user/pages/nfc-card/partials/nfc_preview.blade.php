<div class="nfc-preview">
    @include('user.pages.nfc-card.partials.nfc_preview_style.template_one')
</div>
<style>
    .nfc-mobile-frame {
        max-width: 400px;
        height: 768px !important;
        /* border: 2px solid #1026bf; */
        border-radius: 20px;
        overflow: hidden;
        position: relative;
    }
</style>

<div class="card nfc-card nfc-one-card-frame nfc-one template-one" style="display: none;" id="template-one">
    @include('user.pages.nfc-card.partials.nfc_preview.template_one')
</div>

{{-- Card Two --}}
<div class="card nfc-card nfc-two-card-frame nfc-two template-two" style="display: none;" id="template-two">
    @include('user.pages.nfc-card.partials.nfc_preview.template_two')
</div>

{{-- Card Three --}}
<div class="card nfc-card nfc-three-card-frame nfc-three template-three" style="display: none;" id="template-three">
    @include('user.pages.nfc-card.partials.nfc_preview.template_three')
</div>

{{-- Card Three --}}
<div class="card nfc-card nfc-four-card-frame nfc-four template-four" style="display: none;" id="template-four">
    @include('user.pages.nfc-card.partials.nfc_preview.template_four')
</div>
<div class="card nfc-card nfc-five-card-frame nfc-five template-five" style="display: none;" id="template-five">
    @include('user.pages.nfc-card.partials.nfc_preview.template_five')
</div>
<div class="card nfc-card nfc-six-card-frame nfc-six template-six" style="display: none;" id="template-six">
    @include('user.pages.nfc-card.partials.nfc_preview.template_six')
</div>
<div class="card nfc-card nfc-seven-card-frame nfc-seven template-seven" style="display: none;" id="template-seven">
    @include('user.pages.nfc-card.partials.nfc_preview.template_seven')
</div>

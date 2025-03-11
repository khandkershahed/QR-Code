{{-- <div class="card virtual_card nfc-one-card-frame nfc-one virtual-card-one w-100"
    style="display: none; background-color: #ebebeb;">
    @include('virtualCard.partials.card_preview.card_one')
</div> --}}

{{-- Card Two --}}
{{-- <div class="card virtual_card nfc-two-card-frame nfc-two virtual-card-two w-100"
    style="display: none; background-color: #ebebeb;">
    @include('virtualCard.partials.card_preview.card_two')
</div> --}}

{{-- Card Three --}}
{{-- <div class="card virtual_card nfc-three-card-frame nfc-three virtual-card-three w-100"
    style="display: none; background-color: #ebebeb;">
    @include('virtualCard.partials.card_preview.card_three')
</div> --}}

{{-- Card Three --}}
{{-- <div class="card virtual_card nfc-four-card-frame nfc-four virtual-card-four w-100"
    style="display: none; background-color: #ebebeb;">
    @include('virtualCard.partials.card_preview.card_four')

</div> --}}

{{-- <div class="card virtual_card nfc-six-card-frame nfc-six virtual-card-six w-100"
    style="display: none; background-color: #ebebeb;">
    @include('virtualCard.partials.card_preview.card_six')

</div> --}}

{{-- <div class="card virtual_card nfc-seven-card-frame nfc-seven virtual-card-seven w-100"
    style="display: none; background-color: #ebebeb;">
    @include('virtualCard.partials.card_preview.card_seven')

</div> --}}
<div class="card virtual_card nfc-seven-card-frame nfc-seven virtual-card-seven w-100" style="background-color: #ebebeb;">
    <div
        class="pb-3 mb-0 card-design-box d-flex justify-content-center align-items-center position-relative flex-column">
        <div class="main-img position-relative">
            <!-- Main Card Image -->
            <img class="img-fluid" id="mainCardImage" src="{{ asset('images/Choosen-card/BlackCardBack-mockup.webp') }}"
                alt="">
            <div class="card-logo position-absolute">
                <!-- Image preview will be displayed here -->
                <img id="logoPreview" width="50px" height="50px" style="object-fit: contain;"
                    src="{{ asset('images/logo.png') }}" alt="Card Logo Preview">
            </div>
            <div class="card-info position-absolute">
                <p class="mb-0 fw-bold">MD BADRODDUJA SAGAR</p>
                <p class="mb-0"><small>President & CEO</small></p>
            </div>
        </div>
        
    </div>
</div>

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
<style>
    .nfc-preview-box {
        width: 500px;
        position: relative;
        display: flex;
        flex-direction: column;
        align-items: center;
    }

    .nfc-preview-box .card-info {
        position: absolute;
        bottom: 40px;
        left: 40px;
        color: white;
    }

    .nfc-preview-box .card-logo {
        position: absolute;
        top: 30px;
        left: 30px;
    }

    .nfc-preview-box .card-logo img {
        width: 100px;
    }

    .main-img img {
        width: 100%;
        display: block;
    }

    .nfc-preview-box .card-info h3 {
        color: transparent;
        font-size: 25px;
        font-weight: 800;
        line-height: 26.25px;
        margin-bottom: 8px;
        background-image: linear-gradient(93deg, rgb(156, 156, 156) 2.81%, rgb(244, 244, 244) 29.58%);
        background-clip: text;
    }

    .nfc-preview-box .card-info p {
        color: transparent;
        font-size: 18px;
        font-weight: 800;
        line-height: 26.25px;
        margin-bottom: 8px;
        background-image: linear-gradient(93deg, rgb(156, 156, 156) 2.81%, rgb(244, 244, 244) 29.58%);
        background-clip: text;
    }

    @media only screen and (max-width: 600px) {
        .nfc-preview-box {
            width: 100%;
        }

        .nfc-preview-box .card-logo img {
            width: 60px;
        }
        .nfc-preview-box .card-info h3{
            font-size: 18px;
        }
        .nfc-preview-box .card-info p{
            font-size: 16px;
        }
    }
</style>

<div class="card virtual_card nfc-seven-card-frame nfc-seven virtual-card-seven w-100" style="background-color: #ebebeb;">
    <div
        class="pb-3 mb-0 card-design-box d-flex justify-content-center align-items-center position-relative flex-column">
        <div class="main-img nfc-preview-box">
            <!-- Main Card Image -->
            <img class="img-fluid" id="mainCardImage" src="{{ asset('images/Choosen-card/BlackCardBack-mockup.webp') }}"
                alt="">

            <!-- Logo Positioned on the Image -->
            <div class="card-logo">
                <img id="logoPreview" style="object-fit: contain;" src="{{ !empty(optional($nfc_card)->card_logo) ? asset('storage/'.optional($nfc_card)->card_logo) : asset('images/logo.png') }}"
                    alt="Card Logo Preview">
            </div>

            <!-- Card Info Placed Below the Image -->
            <div class="card-info">
                <h3 class="mb-0 fw-bold card-info-name" id="card-info-name">{{ optional($nfc_card)->card_name }}</h3>
                <p class="mb-0"><small class="card-info-designation" id="card-info-designation">{{ optional($nfc_card)->card_designation }}</small></p>
            </div>
        </div>
    </div>
</div>

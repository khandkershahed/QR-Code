@php
    $selectedNfcCard = $selectedNfcCard ?? null;

    $defaultCardImage = asset('images/Choosen-card/BlackCardBack-mockup.webp');

    if (old('card_color', optional($selectedNfcCard)->card_color ?? 'black') == 'gold') {
        $defaultCardImage = asset('images/Choosen-card/GoldCardBack-mockup.webp');
    }

    $cardLogo = !empty(optional($selectedNfcCard)->card_logo)
        ? asset('storage/' . optional($selectedNfcCard)->card_logo)
        : asset('images/logo.png');

    $cardName = old('card_name', optional($selectedNfcCard)->card_name);
    $cardDesignation = old('card_designation', optional($selectedNfcCard)->card_designation);
@endphp

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
        -webkit-background-clip: text;
    }

    .nfc-preview-box .card-info p {
        color: transparent;
        font-size: 18px;
        font-weight: 800;
        line-height: 26.25px;
        margin-bottom: 8px;
        background-image: linear-gradient(93deg, rgb(156, 156, 156) 2.81%, rgb(244, 244, 244) 29.58%);
        background-clip: text;
        -webkit-background-clip: text;
    }

    @media only screen and (max-width: 600px) {
        .nfc-preview-box {
            width: 100%;
        }

        .nfc-preview-box .card-logo img {
            width: 60px;
        }

        .nfc-preview-box .card-info h3 {
            font-size: 18px;
        }

        .nfc-preview-box .card-info p {
            font-size: 16px;
        }
    }
</style>

<div class="card virtual_card nfc-seven-card-frame nfc-seven virtual-card-seven w-100" style="background-color: #ebebeb;">
    <div class="pb-3 mb-0 card-design-box d-flex justify-content-center align-items-center position-relative flex-column">
        <div class="main-img nfc-preview-box">
            <img class="img-fluid"
                id="mainCardImage"
                src="{{ $defaultCardImage }}"
                alt="NFC Card Preview">

            <div class="card-logo">
                <img id="logoPreview"
                    style="object-fit: contain;"
                    src="{{ $cardLogo }}"
                    alt="Card Logo Preview">
            </div>

            <div class="card-info">
                <h3 class="mb-0 fw-bold card-info-name" id="card-info-name">{{ $cardName }}</h3>
                <p class="mb-0">
                    <small class="card-info-designation" id="card-info-designation">{{ $cardDesignation }}</small>
                </p>
            </div>
        </div>
    </div>
</div>

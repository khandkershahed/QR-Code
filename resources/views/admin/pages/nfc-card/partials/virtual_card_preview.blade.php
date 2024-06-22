<style>
    .punch-card-container,
    .punch-card-container-back {
        width: 100%;
        max-width: 415px;
        height: 250px;
        border-radius: 8px;
        background-repeat: no-repeat;
        background-size: cover;
        background-position: center;
        box-shadow: rgba(0, 0, 0, 0.16) 0px 1px 4px;
        margin-bottom: 20px;
    }

    .punch-card-container {

        width: 415px;
    }
    .punch-card-container img,
    .punch-card-container-back img {
        margin: 0;
        display: block;
    }

    .punch-card-container p,
    .punch-card-container-back p {
        color: #0e3648;
    }

    .punch-card-logo {
        width: 80px;
    }

    .punch-card-logo-back {
        width: 110px;
    }

    .punch-card-qr {
        width: 110px;
        border: 2px solid #cb9d59;
        padding: 5px;
        border-radius: 5px;
    }

    @media (max-width: 768px) {

        .punch-card-container,
        .punch-card-container-back {
            height: auto;
            padding: 20px;
        }

        .punch-card-logo,
        .punch-card-qr {
            width: 60px;
        }

        .punch-card-logo-back {
            width: 100px;
        }

        .punch-card-container .text-end {
            text-align: center;
        }
    }

    @media (max-width: 576px) {
        .punch-card-container {
            width: auto;
        }

        .punch-card-container .row,
        .punch-card-container-back .row {
            flex-direction: column;
            align-items: center;
        }

        .punch-card-container .col-lg-6,
        .punch-card-container-back .col-lg-12 {
            width: 100%;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }

        .punch-card-container .ps-5,
        .punch-card-container .text-end,
        .punch-card-container-back .d-flex {
            padding-left: 0;
            text-align: center;
        }

        .punch-card-qr {
            width: 100px;
        }

        .content-area {
            text-align: center !important;
            margin-top: 25px;
        }

        .punch-card-container p,
        .punch-card-container-back p {
            color: #fff !important;
        }

        .punch-card-container h4,
        .punch-card-container-back h4 {
            color: #fff !important;
        }

        .title-devider {
            height: 2px !important;
            width: 120px !important;
            background-color: #ffffff !important;
            margin: auto !important;
            position: relative !important;
            left: 0px !important;
        }
    }
</style>

<div class="card virtual_card nfc-one-card-frame nfc-one virtual-card-one" style="display: none;">
    @include('user.pages.nfc-card.partials.card_preview.card_one')
</div>

{{-- Card Two --}}
<div class="card virtual_card nfc-two-card-frame nfc-two virtual-card-two" style="display: none;">
    @include('user.pages.nfc-card.partials.card_preview.card_two')
</div>

{{-- Card Three --}}
<div class="card virtual_card nfc-three-card-frame nfc-three virtual-card-three" style="display: none;">
    @include('user.pages.nfc-card.partials.card_preview.card_three')
</div>

{{-- Card Three --}}
<div class="card virtual_card nfc-four-card-frame nfc-four virtual-card-four" style="display: none;">
    @include('user.pages.nfc-card.partials.card_preview.card_four')

</div>
<div class="card virtual_card nfc-five-card-frame nfc-five virtual-card-five" style="display: none;">
    @include('user.pages.nfc-card.partials.card_preview.card_five')

</div>
<div class="card virtual_card nfc-six-card-frame nfc-six virtual-card-six" style="display: none;">
    @include('user.pages.nfc-card.partials.card_preview.card_six')

</div>
<div class="card virtual_card nfc-seven-card-frame nfc-seven virtual-card-seven" style="display: none;">
    @include('user.pages.nfc-card.partials.card_preview.card_seven')

</div>
<div class="card virtual_card nfc-eight-card-frame nfc-eight virtual-card-eight" style="display: none;">
    @include('user.pages.nfc-card.partials.card_preview.card_eight')

</div>

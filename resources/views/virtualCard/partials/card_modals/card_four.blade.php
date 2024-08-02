<style>
    @import url("https://fonts.googleapis.com/css2?family=Chakra+Petch:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap");

    .card-container-four {
        font-family: "Titillium Web", sans-serif;
        color: black;
        display: flex;
        justify-content: center;
        align-items: center;
        height: auto;
    }

    .card-four {
        width: 100%;
        max-width: 300px;
        height: 520px;
        aspect-ratio: 300 / 230;
        /* Maintain the aspect ratio */
        margin: 10px;
    }

    .card-four-front {
        background-image: url({{ asset('frontend/images/card_images/card_four_front.png') }});
        background-repeat: no-repeat;
        background-size: cover;
        object-fit: cover;
        background-position: center;
        box-shadow: rgba(0, 0, 0, 0.25) 0px 54px 55px,
            rgba(0, 0, 0, 0.12) 0px -12px 30px, rgba(0, 0, 0, 0.12) 0px 4px 6px,
            rgba(0, 0, 0, 0.17) 0px 12px 13px, rgba(0, 0, 0, 0.09) 0px -3px 5px;
    }

    .card-four-back {
        background-image: url({{ asset('frontend/images/card_images/card_four_back.png') }});
        background-repeat: no-repeat;
        background-size: cover;
        object-fit: cover;
        background-position: center;
        box-shadow: rgba(0, 0, 0, 0.25) 0px 54px 55px,
            rgba(0, 0, 0, 0.12) 0px -12px 30px, rgba(0, 0, 0, 0.12) 0px 4px 6px,
            rgba(0, 0, 0, 0.17) 0px 12px 13px, rgba(0, 0, 0, 0.09) 0px -3px 5px;
    }



    .main-content-template-four {
        margin-top: 230px;
    }

    .template-four-title {
        font-family: "Chakra Petch", sans-serif;
        font-weight: 800;
    }

    .tem-4-logo {
        position: relative;
        left: 25px;
        top: 150px;
    }

    .tem-4-qr {
        position: relative;
        top: 300px;
        left: 150px;
    }

    .three-content {
        position: relative;
        left: 50px;
        top: 35px;
    }

    .card-four-back p {
        font-size: 17px;
    }

    .card-four-user-info {
        margin-left: 58px;
    }

    @media (max-width: 576px) {
        .card-four-front {
            height: 1030px;
        }

        .main-content-template-four {
            margin-top: 230px;
        }

        .card {
            height: 1120px;
        }

        .card-container-four {
            flex-direction: column;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 150vh;
        }
    }

    @media (max-width: 1366px) {
        .tem-4-qr {
            position: relative;
            top: 300px;
            left: 100px;
        }

        .tem-4-logo {
            position: relative;
            left: 0px;
            top: 150px;
        }

        .card-four {
            width: auto;
            max-width: 235px;
            height: 520px;
            aspect-ratio: 300 / 230;
            margin: 10px;
        }

        .three-content {
            position: relative;
            left: 30px;
            top: 35px;
        }

        .card-four-user-info {
            margin-left: 25px;
        }
    }
</style>

<div class="container">
    <div class="row mt-5">
        <div class="card-container-four">
            <div class="card-four border-0 card-four-front rounded-0">
                <div>
                    <!-- Front Info -->
                    <div class="text-start template-four-title main-content-template-four">
                        <div class="card-four-user-info">
                            <h4 class="card_name">{{ $nfc_card->card_name }}</h4>
                            <small class="card_designation">{{ $nfc_card->card_designation }}</small>
                        </div>
                        <div class="three-content">
                            <div class="d-flex justify-content-center align-items-center">
                                <div class="ps-3 w-75 pt-4">
                                    <p class="mb-0 text-start ps-2 card_email">{{ $nfc_card->card_email }}</p>
                                </div>
                            </div>
                            <div class="d-flex justify-content-center align-items-center pt-1">
                                <div class="ps-3 w-75 pt-4">
                                    <p class="mb-0 text-start ps-2">{{ $nfc_card->card_designation }}</p>
                                </div>
                            </div>
                            <div class="d-flex justify-content-center align-items-center pt-2">
                                <div class="ps-3 w-75 pt-4">
                                    <p class="mb-0 text-start ps-2 text-black card_phone">{{ $nfc_card->card_phone }}
                                    </p>
                                </div>
                            </div>
                            <div class="d-flex justify-content-center align-items-center pt-2">
                                <div class="ps-3 w-75 pt-3">
                                    <p class="mb-0 text-start ps-2 card_address">
                                        {{ $nfc_card->card_address }}
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-four border-0 card-four-back rounded-0">
                <div>
                    <!-- Company Logo -->
                    <div class="tem-4-logo">
                        <div class="d-flex align-items-center">
                            @if (!empty($nfc_card->card_logo) && file_exists(public_path('storage/nfc/' . $nfc_card->card_logo)))
                                <img class="img-fluid card_logo" width="100px"
                                    src="{{ asset('storage/nfc/' . $nfc_card->card_logo) }}" alt="" />
                            @endif
                        </div>
                    </div>
                    <div class="tem-4-qr">
                        @if (!empty($nfc_card->nfc->nfc_qr) && file_exists(public_path('storage/nfc/qrs/' . $nfc_card->nfc->nfc_qr)))
                            <img class="img-fluid bg-white nfc_qr" width="100px"
                                src="{{ asset('storage/nfc/qrs/' . $nfc_card->nfc->nfc_qr) }}" alt="" />
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

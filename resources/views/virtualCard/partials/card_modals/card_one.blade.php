<style>
    @import url("https://fonts.googleapis.com/css2?family=Chakra+Petch:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap");

    .card-container-one {
        display: flex;
        justify-content: center;
        align-items: center;
        height: auto;
        width: 80%;
        margin: auto;
    }

    .nfc_card_one {
        width: 100%;
        /* max-width: 300px; */
        height: 520px;
        aspect-ratio: 300 / 285;
        /* Maintain the aspect ratio */
        margin: 10px;
    }

    .card-front-one {
        background-image: url({{ asset('frontend/images/card_images/card_one_front.png') }});
        background-repeat: no-repeat;
        background-size: cover;
        object-fit: cover;
        background-position: center;
        box-shadow: rgba(0, 0, 0, 0.25) 0px 54px 55px, rgba(0, 0, 0, 0.12) 0px -12px 30px, rgba(0, 0, 0, 0.12) 0px 4px 6px, rgba(0, 0, 0, 0.17) 0px 12px 13px, rgba(0, 0, 0, 0.09) 0px -3px 5px;
    }

    .card-back-one {
        background-image: url({{ asset('frontend/images/card_images/card_one_back.png') }});
        background-repeat: no-repeat;
        background-size: cover;
        object-fit: cover;
        background-position: center;
        box-shadow: rgba(0, 0, 0, 0.25) 0px 54px 55px, rgba(0, 0, 0, 0.12) 0px -12px 30px, rgba(0, 0, 0, 0.12) 0px 4px 6px, rgba(0, 0, 0, 0.17) 0px 12px 13px, rgba(0, 0, 0, 0.09) 0px -3px 5px;
    }

    .template-logo-ebox {
        margin-top: 230px;
    }

    .template-logo-back {
        margin-top: 75px;
    }

    .template-title {
        font-family: "Chakra Petch", sans-serif;
        font-weight: 800;
        color: white;
    }

    .icons-box {
        background-color: #fff;
        color: #000;
        width: 100px;
        height: 40px;
        padding: 10px;
    }

    .card-back-one p {
        font-size: 15px;
    }

    @media (max-width: 767px) {
        .title-devider-tem-one {
            left: 30px;
        }

        .card-mail-one {
            top: 20px;
        }
    }

    @media (max-width: 1366px) {

        .punch-card-container-one,
        .punch-card-container-one-back {
            max-width: 100%;
        }

        .nfc-preview-box {
            width: 335px;
            margin: auto;
            height: auto;
        }

        .nfc_card_one {
            width: 100%;
            height: 430px;
        }

        .template-logo-back {
            margin-top: 30px;
        }
    }
</style>

<div class="container">
    <div class="row mt-5">
        <div class="card-container-one">
            <div class="nfc_card_one border-0 card-front-one rounded-0">
                <div>
                    <!-- Company Logo -->
                    <div class="d-flex justify-content-center template-logo-ebox">
                        @if (!empty($nfc_card->card_logo) && file_exists(public_path('storage/nfc/' . $nfc_card->card_logo)))
                            <img class="img-fluid card_logo" width="100px"
                                src="{{ asset('storage/nfc/' . $nfc_card->card_logo) }}" alt="" />
                        @endif
                    </div>

                    <!-- Front Info -->
                    <div class="text-center template-title pt-5">
                        <h2 class="card_name text-white">{{ $nfc_card->card_name }}</h2>
                        <p class="card_designation text-white">{{ $nfc_card->card_designation }}</p>
                        {{-- <h3 class="pt-4 mb-0">Rasheduzzaman</h3> --}}
                    </div>
                </div>
            </div>
            <div class="nfc_card_one border-0 card-back-one rounded-0">
                <div>
                    <!-- Company Logo -->
                    <div class="d-flex justify-content-center template-logo-back">
                        @if (!empty($nfc_card->nfc->nfc_qr) && file_exists(public_path('storage/nfc/qrs/' . $nfc_card->nfc->nfc_qr)))
                            <img class="img-fluid bg-white" width="150px"
                                src="{{ asset('storage/nfc/qrs/' . $nfc_card->nfc->nfc_qr) }}" alt="" />
                        @endif
                    </div>

                    <!-- Front Info -->
                    <div class="template-title pt-5" style="width: 60%; margin: auto">
                        <div class="d-flex justify-content-center align-items-center">
                            <div class="icons-box w-25 text-center">
                                <i class="fas fa-phone"></i>
                            </div>
                            <div class="ps-3 w-75">
                                <p class="mb-0 card_phone">{{ $nfc_card->card_phone }}</p>
                            </div>
                        </div>
                        <div class="d-flex justify-content-center align-items-center mt-4">
                            <div class="icons-box w-25 text-center">
                                <i class="fa-solid fa-house-flag"></i>
                            </div>
                            <div class="ps-3 w-75">
                                <p class="mb-0 card_address">{{ $nfc_card->card_address }}</p>
                            </div>
                        </div>
                        <div class="d-flex justify-content-center align-items-center mt-4">
                            <div class="icons-box w-25 text-center">
                                <i class="fas fa-envelope"></i>
                            </div>
                            <div class="ps-3 w-75">
                                <p class="mb-0 card_email">{{ $nfc_card->card_email }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    .card-container {
        position: relative;
        width: 455px;
        height: 255px;
        border-radius: 20px;
        margin: auto;
        background-size: cover;
        background-position: center;
    }

    .card-front-seven {
        background-image: url({{ asset('frontend/images/card_images/card_seven_front.png') }});
    }

    .card-back-seven {
        background-image: url({{ asset('frontend/images/card_images/card_seven_back.png') }});
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .card-seven-info {
        display: flex;
        width: 100%;
        align-items: center;
        justify-content: center;
        height: 100%;
    }

    .nfc-preview-box-seven {
        width: 100%;
        margin: auto;
        height: auto;
    }

    .punch-card-logo-back-seven {
        display: flex;
        justify-content: center;
        align-items: center;
    }

    @media (max-width: 1350px) {
        .card-container {
            padding: 15px;
        }

        .card-seven-info {
            text-align: center;
        }
    }

    @media (max-width: 768px) {
        .card-seven-info {
            flex-direction: column;
            text-align: center;
        }

        .card-container {
            padding: 10px;
        }

    }
</style>

<div class="row mt-5 nfc-preview-box-seven">
    <div class="col-12">
        <!-- Visiting Card Box Container -->
        <div class="punch-card-container-seven mb-2 card-container card-front-seven">
            <div class="row p-5 align-items-center card-seven-info">
                <div class="col-lg-5 col-md-12 d-flex justify-content-center">
                    <div>
                        <div class="d-flex justify-content-center">
                            @if (!empty($nfc_card->nfc_qr) && file_exists(public_path('storage/nfc/qrs/' . $nfc_card->nfc_qr)))
                                <img class="img-fluid" style="width: 100px;"
                                    src="{{ asset('storage/nfc/qrs/' . $nfc_card->nfc_qr) }}" alt="QR Code" />
                            @endif
                        </div>
                    </div>
                </div>
                <div class="col-lg-7 col-md-12 text-center text-lg-start">
                    <div class="content-area">
                        <h1 class="fw-bold mb-0 card_name fs-4 text-white">{{ $nfc_card->card_name }}</h1>
                        <p class="fw-bold mb-0 p-3 card_designation ps-0 text-white">{{ $nfc_card->card_designation }}
                        </p>
                        <div class="me-auto mt-2 mb-3 title-divider"
                            style="height: 2px;width: 120px;background-color: #fff;"></div>
                        <div>
                            <p class="fw-bold text-white pt-3 mb-0">
                                <i class="fas fa-phone pe-2 text-white"></i> <span
                                    class="card_phone">{{ $nfc_card->card_phone }}</span>
                            </p>
                            <p class="fw-bold text-white mb-0">
                                <i class="fas fa-envelope pe-2 pt-3 text-white"></i> <span
                                    class="card_email">{{ $nfc_card->card_email }}</span>
                            </p>
                        </div>
                        <div>
                            <p class="fw-bold mb-0 text-white">
                                <i class="fas fa-map-marker-alt pe-2 pt-3 text-white"></i> <span
                                    class="card_address">{{ $nfc_card->card_address }}</span>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="punch-card-container-seven-back card-container card-back-seven">
            <div class="row p-5 align-items-center">
                <div class="col-12 d-flex justify-content-center align-items-center">
                    @if (!empty($nfc_card->card_logo) && file_exists(public_path('storage/nfc/' . $nfc_card->card_logo)))
                        <img class="punch-card-logo-back-seven card_logo"
                            src="{{ asset('storage/nfc/' . $nfc_card->card_logo) }}" alt="Card Logo" />
                    @elseif (!empty($nfc_card->nfc_qr) && file_exists(public_path('storage/nfc/qrs/' . $nfc_card->nfc_qr)))
                        <img class="img-fluid" style="width: 100px;"
                            src="{{ asset('storage/nfc/qrs/' . $nfc_card->nfc_qr) }}" alt="QR Code" />
                    @endif
                </div>
            </div>
        </div>
        <!-- Visiting Card Box Container End -->
    </div>
</div>

<style>
    .card-front-seven {
        background-image: url({{ asset('frontend/images/card_images/card_seven_front.png') }});
        width: 460px;
        height: 255px;
        position: relative;
        border-radius: 20px;
        margin: auto;
        display: flex;
        justify-content: center;
        align-items: center;
        background-position: center;
        background-size: cover;
    }

    .card-seven-info {
        display: flex;
        align-items: center !important;
        justify-content: center;
        top: 50px;
        margin: 15px;
        position: relative;
    }

    .card-back-seven {
        background-image: url({{ asset('frontend/images/card_images/card_seven_back.png') }});
        width: 460px;
        height: 255px;
        position: relative;
        border-radius: 20px;
        margin: auto;
        background-position: center;
        background-size: cover;
    }

    @media (max-width: 1350px) {

        .punch-card-container,
        .punch-card-container-back {
            max-width: 100%;
        }

        .nfc-preview-box {
            width: 440px;
            margin: auto;
            height: auto;
        }
    }
</style>

<div class="row mt-5 nfc-preview-box">
    <div class="col-12">
        <!-- Visiting Card Box Container -->
        <div class="punch-card-container mb-2 card-front-seven">
            <div class="d-flex justify-content-center align-items-center">
                <div class="row p-5 align-items-center">
                    <div class="col-lg-12">
                        <div>
                            @if (!empty($nfc_card->card_logo) && file_exists(public_path('storage/nfc/' . $nfc_card->card_logo)))
                            <img class="punch-card-logo-back card_logo" width="200px"
                                src="{{ asset('storage/nfc/' . $nfc_card->card_logo) }}" alt="" />
                        @endif
                            {{-- <div class="pt-3">
                                <img class="img-fluid mx-auto" width="60px"
                                    src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRUekbZzzImwhQynw7gd6r8qv6CzwOspNnzPg&amp;s"
                                    alt="">
                            </div> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="punch-card-container-back card-back-seven" style="">
            <div class="row p-5 align-items-center card-seven-info">
                <div class="col-8 d-flex justify-content-start align-items-center">
                    <div class="text-start content-area font">
                        <h4 class="fw-bold mb-0 card_name" style="color: #fff">
                            {{ $nfc_card->card_name }}
                        </h4>
                        <p class="fw-bold mb-0 pt-2 pb-4 card_designation text-white">{{ $nfc_card->card_designation }}</p>
                        <div>
                            <p class="fw-bold text-white pt-3 mb-0">
                                <i class="fas fa-phone pe-2"></i> <span class="card_phone">{{ $nfc_card->card_phone }}</span>
                            </p>
                            <p class="fw-bold text-white mb-0">
                                <i class="fas fa-envelope pe-2 mb-3"></i>
                                <span class="card_email">{{ $nfc_card->card_email }}</span>
                            </p>
                        </div>
                        <div>
                            <p class="fw-bold mb-0 text-white">
                                <i class="fas fa-map-marker-alt pe-2"></i>
                                <span class="card_address">{{ $nfc_card->card_address }}</span>
                            </p>
                            {{-- <p class="fw-bold mb-0 text-white">
                                -Downtown Dubia-Dubai- United Arab Emirates
                            </p> --}}
                        </div>
                    </div>
                </div>
                <div class="col-4 d-flex justify-content-start align-items-center font">
                    <div class="">
                        <div class="d-flex justify-content-center">
                            @if (!empty($nfc_card->nfc->nfc_qr) && file_exists(public_path('storage/nfc/qrs/' . $nfc_card->nfc->nfc_qr)))
                            <img class="img-fluid bg-white nfc_qr" style="width: 100px;"
                                src="{{ asset('storage/nfc/qrs/' . $nfc_card->nfc->nfc_qr) }}" alt="" />
                        @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Visiting Card Box Container End-->
    </div>
</div>

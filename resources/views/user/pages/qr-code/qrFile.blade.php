<x-admin-guest-layout :title="'{{ $qr->code }}'">
    <style>
        #Iframe-Master-CC-and-Rs {
            /* max-width: 512px; */
            max-height: 100%;
            overflow: hidden;
        }

        .responsive-wrapper {
            position: relative;
            height: 0;
        }

        .responsive-wrapper iframe {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;

            margin: 0;
            padding: 0;
            border: none;
        }

        .responsive-wrapper-wxh-572x612 {
            padding-bottom: 107%;
        }

        .set-border {
            border: 5px inset #4f4f4f;
        }

        .set-box-shadow {
            -webkit-box-shadow: 4px 4px 14px #4f4f4f;
            -moz-box-shadow: 4px 4px 14px #4f4f4f;
            box-shadow: 4px 4px 14px #4f4f4f;
        }



        .center-block-horiz {
            margin-left: auto !important;
            margin-right: auto !important;
        }
    </style>
    <div class="container">
        <div class="row mb-5 text-center">
            <a href="{{ url('/') }}" class="pt-lg-10 pt-5">
                <img alt="Logo" src="https://i.ibb.co/BNBTVN4/logo.png" class="h-40px" />
            </a>
        </div>
        <div class="row mb-10">
            <div class="card">
                <div class="card-body">
                    @if ($qr->qr_type == 'image')
                        @if (!empty($qr->qrData->qr_data_image))
                            <img class="img-fluid"
                                src="{{ asset('storage/qr_codes/images/' . $qr->qrData->qr_data_image) }}"
                                alt="">
                        @else
                            <img class="img-fluid" src="{{ $qr->qrData->qr_data_image_link }}" alt="">
                        @endif
                    @elseif ($qr->qr_type == 'pdf')
                        <div class="row mb-5">
                            <h5 class="text-center fw-bold">If any Problem to view pdf or need to download. <a
                                    href="{{ asset('storage/qr_codes/images/' . $qr->qrData->qr_data_pdf) }}"
                                    download>Click Here...</a></h5>
                        </div>
                        <div id="Iframe-Master-CC-and-Rs"
                            class="set-margin set-padding set-border set-box-shadow center-block-horiz">
                            <div class="responsive-wrapper
                           responsive-wrapper-wxh-572x612"
                                style="-webkit-overflow-scrolling: touch; overflow: auto;">

                                <iframe src="{{ asset('storage/qr_codes/images/' . $qr->qrData->qr_data_pdf) }}">
                                    <p style="font-size: 110%;"><em><strong>ERROR: </strong>
                                            An &#105;frame should be displayed here but your browser version does not
                                            support &#105;frames. </em>Please update your browser to its most recent
                                        version and try again.</p>
                                </iframe>

                            </div>
                        </div>
                        {{-- <iframe src="{{ $qr->qrData->qr_data_pdf }}" style="
                            width: -webkit-fill-available;">
                            <p style="font-size: 110%;"><em><strong>ERROR: </strong>
                                    An &#105;frame should be displayed here but your browser version does not
                                    support &#105;frames. </em>Please update your browser to its most recent
                                version and try again.</p>
                        </iframe> --}}
                    @elseif ($qr->qr_type == 'audio')
                        <div class="row mb-5">
                            <h5 class="text-center fw-bold">If any Problem to view pdf or need to download.
                                @if (!empty($qr->qrData->qr_data_image))
                                    <a href="{{ asset('storage/qr_codes/audios/' . $qr->qrData->qr_data_audio_file) }}"
                                        download>Click Here...</a>
                                @else
                                    <a href="{{ $qr->qrData->qr_data_audio_link }}" download>Click Here...</a>
                                @endif

                            </h5>
                        </div>
                        <div id="Iframe-Master-CC-and-Rs"
                            class="set-margin set-padding set-border set-box-shadow center-block-horiz">
                            <div class="responsive-wrapper
                           responsive-wrapper-wxh-572x612"
                                style="-webkit-overflow-scrolling: touch; overflow: auto;">
                                <audio controls autoplay>
                                    <source src="{{ asset('storage/qr_codes/audios/' . $qr->qrData->qr_data_audio_file) }}" type="audio/mpeg">
                                    Your browser does not support the audio element.
                                </audio>

                            </div>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>

</x-admin-guest-layout>

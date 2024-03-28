<x-admin-guest-layout :title="'{{ $qr->code }}'">
    <style>
        #Iframe-Master-CC-and-Rs {
            max-width: 512px;
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
        }        .responsive-wrapper-wxh-572x612 {
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

        .set-padding {
            padding: 40px;
        }

        .set-margin {
            margin: 30px;
        }

        .center-block-horiz {
            margin-left: auto !important;
            margin-right: auto !important;
        }
    </style>
    <div class="d-flex flex-column flex-root">
        <!--begin::Authentication - Error 500 -->
        <div class="d-flex flex-column flex-column-fluid">
            <!--begin::Content-->
            <div class="d-flex flex-column flex-column-fluid text-center">
                <!--begin::Logo-->
                <a href="{{ url('/') }}" class="pt-lg-10">
                    <img alt="Logo" src="https://i.ibb.co/BNBTVN4/logo.png" class="h-40px" />
                </a>
                <!--end::Logo-->

            </div>
            <!--end::Content-->

        </div>
        <!--end::Authentication - Error 500-->
    </div>
    <div class="container">
        <div class="pt-lg-10 mb-10">
            <div class="card">
                <div class="card-body">
                    @if ($qr->qr_type == 'image')
                        @if (!empty($qr->qrData->qr_data_image))
                            <img class="img-fluid" src="{{ $qr->qrData->qr_data_image }}" alt="">
                        @else
                            <img class="img-fluid" src="{{ $qr->qrData->qr_data_image_link }}" alt="">
                        @endif
                    @elseif ($qr->qr_type == 'pdf')
                        <div id="Iframe-Master-CC-and-Rs"
                            class="set-margin set-padding set-border set-box-shadow center-block-horiz">
                            <div class="responsive-wrapper
                           responsive-wrapper-wxh-572x612"
                                style="-webkit-overflow-scrolling: touch; overflow: auto;">

                                <iframe src="{{ $qr->qrData->qr_data_pdf }}">
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
                        <div class="row mt-5">
                            <h5 class="text-center fw-bold">If any Problem to view pdf or need to download. <a
                                    href="{{ $qr->qrData->qr_data_pdf }}" download>Click Here...</a></h5>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>

</x-admin-guest-layout>

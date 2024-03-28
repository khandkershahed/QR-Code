<x-admin-guest-layout :title="{{ $qr->code }}">
    <div class="d-flex flex-column flex-root">
        <!--begin::Authentication - Error 500 -->
        <div class="d-flex flex-column flex-column-fluid">
            <!--begin::Content-->
            <div class="d-flex flex-column flex-column-fluid text-center p-10 py-lg-15">
                <!--begin::Logo-->
                <a href="{{ url('/') }}" class="mb-10 pt-lg-10">
                    <img alt="Logo" src="https://i.ibb.co/BNBTVN4/logo.png" class="h-40px mb-5" />
                </a>
                <!--end::Logo-->
                <!--begin::Wrapper-->
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
                                <iframe src="{{ $qr->qrData->qr_data_pdf }}">
                                    <p style="font-size: 110%;"><em><strong>ERROR: </strong>
                                            An &#105;frame should be displayed here but your browser version does not
                                            support &#105;frames. </em>Please update your browser to its most recent
                                        version and try again.</p>
                                </iframe>
                                <div class="row mt-5">
                                    <h5 class="text-center fw-bold">If any Problem to view pdf or need to download. <a href="{{ $qr->qrData->qr_data_pdf }}" download>Click Here...</a></h5>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
                <!--end::Wrapper-->
                <!--begin::Illustration-->
                {{-- <div class="d-flex flex-row-auto bgi-no-repeat bgi-position-x-center bgi-size-contain bgi-position-y-bottom min-h-100px min-h-lg-350px" style="background-image: url({{ asset('admin/assets/media/illustrations/sketchy-1/17.png') }})"></div> --}}
                <!--end::Illustration-->
            </div>
            <!--end::Content-->

        </div>
        <!--end::Authentication - Error 500-->
    </div>

</x-admin-guest-layout>

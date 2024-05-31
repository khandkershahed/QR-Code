<x-admin-guest-layout>
    <div class="d-flex flex-column flex-root" id="kt_app_root">
        <div class="d-flex flex-column flex-lg-row flex-column-fluid">
            <div class="d-flex flex-column flex-lg-row-fluid w-lg-50 p-10 order-2 order-lg-1">
                <div class="stepper stepper-pills p-0" id="generateQRCode">
                    <div class="stepper-nav flex-center flex-wrap mb-10 fv-row">
                        <div class="stepper-item mx-2 my-4 current" data-kt-stepper-element="nav"
                            data-kt-stepper-action="step">
                            <div class="stepper-line w-40px"></div>

                            <div class="stepper-icon w-40px h-40px">
                                <i class="stepper-check fas fa-check"></i>
                                <span class="stepper-number">1</span>
                            </div>

                            <div class="stepper-label">
                                <h3 class="stepper-title">
                                    Select Type
                                </h3>
                            </div>
                        </div>

                        <div class="stepper-item mx-2 my-4" data-kt-stepper-element="nav" data-kt-stepper-action="step">
                            <div class="stepper-line w-40px"></div>

                            <div class="stepper-icon w-40px h-40px">
                                <i class="stepper-check fas fa-check"></i>
                                <span class="stepper-number">2</span>
                            </div>

                            <div class="stepper-label">
                                <h3 class="stepper-title">
                                    Input Data
                                </h3>
                            </div>
                        </div>

                        <div class="stepper-item mx-2 my-4" data-kt-stepper-element="nav" data-kt-stepper-action="step">
                            <div class="stepper-line w-40px"></div>

                            <div class="stepper-icon w-40px h-40px">
                                <i class="stepper-check fas fa-check"></i>
                                <span class="stepper-number">3</span>
                            </div>

                            <div class="stepper-label">
                                <h3 class="stepper-title">
                                    Customize
                                </h3>
                            </div>
                        </div>

                        <div class="stepper-item mx-2 my-4" data-kt-stepper-element="nav" data-kt-stepper-action="step">
                            <div class="stepper-line w-40px"></div>

                            <div class="stepper-icon w-40px h-40px">
                                <i class="stepper-check fas fa-check"></i>
                                <span class="stepper-number">4</span>
                            </div>

                            <div class="stepper-label">
                                <h3 class="stepper-title">
                                    Done
                                </h3>
                            </div>
                        </div>
                    </div>

                    <form class="form w-100 mx-auto fv-row" novalidate="novalidate" id="generateQRCodeForm"
                        action="{{ route('user.qr-code.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-5">
                            <div class="flex-column current" data-kt-stepper-element="content">
                                <div class="card">
                                    <div class="row">
                                        <h2 class="text-center mb-0">Create a Dynamic QR Code</h2>
                                        <p class="text-center mb-0">Modify content as needed, even after going
                                            live.</p>
                                    </div>
                                    <div class="card-body">
                                    </div>
                                </div>
                            </div>

                            <div class="flex-column" data-kt-stepper-element="content">
                                <div class="card">
                                    <div class="card-body">
                                    </div>
                                </div>
                            </div>

                            <div class="flex-column" data-kt-stepper-element="content">
                                <div class="card">
                                    <div class="row text-center justify-content-center">
                                        <h2 class="text-center mb-0">Choose QR Code Design!</h2>
                                    </div>
                                    <div class="card-body">
                                    </div>
                                </div>
                            </div>

                            <div class="flex-column" data-kt-stepper-element="content">
                                <div class="card">
                                    <div class="pt-5 ps-5">
                                        <h2 class="text-center">Congratulations!</h2>
                                        <p class="text-center">Some Information Need To
                                            Ready The QR</p>
                                        {{-- <p>Still want to make changes?
                                            <a href="#">Modify your QR code</a>
                                        </p> --}}
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="d-flex flex-stack">
                            <div class="me-2">
                                <button type="button" class="btn btn-light btn-active-light-primary"
                                    data-kt-stepper-action="previous">
                                    Back
                                </button>
                            </div>
                            <div>
                                <button type="submit" id="generateButton" data-kt-stepper-action="submit"
                                    class="btn btn-primary">asdasdasds</button>
                                <button type="button" class="btn btn-primary" data-kt-stepper-action="next">
                                    Continue
                                </button>
                            </div>
                        </div>
                    </form>
                </div>  
            </div>
            <div class="d-flex flex-lg-row-fluid w-lg-50 bgi-size-cover bgi-position-center order-1 order-lg-2"
                style="background-image: url(https://preview.keenthemes.com/metronic8/demo1/assets/media/misc/auth-bg.png)">
                <div class="d-flex flex-column flex-center py-7 py-lg-15 px-5 px-md-15 w-100">
                    <a href="/metronic8/demo1/index.html" class="mb-0 mb-lg-12">
                        <img alt="Logo" src="https://i.ibb.co/BNBTVN4/logo.png" class="h-60px h-lg-75px">
                    </a>
                    <img class="d-none d-lg-block mx-auto w-275px w-md-50 w-xl-500px mb-10 mb-lg-20"
                        src="https://preview.keenthemes.com/metronic8/demo1/assets/media/misc/auth-screens.png"
                        alt="">
                    <h1 class="d-none d-lg-block text-white fs-2qx fw-bolder text-center mb-7">
                        Fast, Efficient and Productive
                    </h1>
                    <div class="d-none d-lg-block text-white fs-base text-center">
                        In this kind of post,
                        <a href="#" class="opacity-75-hover text-warning fw-bold me-1">the blogger</a>
                        introduces a person they’ve interviewed <br> and provides some background information about
                        <a href="#" class="opacity-75-hover text-warning fw-bold me-1">the interviewee</a>
                        and their <br> work following this is a transcript of the interview.
                    </div>
                </div>
            </div>
        </div>
    </div>

    @push('scripts')
        <script>
            // Stepper lement
            var element = document.querySelector("#generateQRCode");
            var stepper = new KTStepper(element);
            stepper.on("kt.stepper.next", function(stepper) {
                stepper.goNext(); // go next step
            });
            stepper.on("kt.stepper.previous", function(stepper) {
                stepper.goPrevious(); // go previous step
            });
        </script>
    @endpush
</x-admin-guest-layout>

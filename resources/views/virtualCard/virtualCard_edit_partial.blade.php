<style>
    .custom-row {
        display: flex;
        gap: 0.5rem;
        padding-top: 2.5rem;
        padding-bottom: 2.5rem;
    }

    .custom-col {
        flex: 1;
        display: flex;
        flex-direction: column;
    }

    .content-column {
        flex: 1;
    }
</style>
<section class="mt-10 d-none">
    <div class="row">
        <div class="col-lg-12">
            <div class="alert alert-light mt-40 p-50 d-flex justify-content-center align-items-center"
                style="height: 80vh">
                <div class="text-center">
                    <div>
                        <img class="img-fluid" width="100px" src="{{ asset('images/no-nfc-card.jpg') }}" alt="">
                    </div>
                    <h1 class="fs-1" style="font-size: 50px !important;">No NFC Card Available!</h1>
                    <p class="py-10">Your have <span class="text-danger fw-bold">0</span> NFC card to use. You need to purchase an NFC card first. After that, <br> you can customize it or
                        link your
                        virtual card to the NFC card.</p>
                    <a href="{{ route('homePage') }}" class="btn text-white" style="background-color: #7239e9; ">
                        <span class="btn-label">
                            Purchase Now
                        </span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
<div class="row g-2 py-10">
    <div class="col-lg-12 custom-col">
        <div class="card content-column">
            <div class="card-body custom-card-body overflow-auto p-0">
                <div class="stepper stepper-pills flex-grow-1 d-flex flex-column" id="kt_stepper_example_clickable">
                    <div class="stepper-nav flex-center flex-wrap steaper-header">

                        <div class="stepper-item mx-3 my-4 p-0 rounded-1 current" data-kt-stepper-element="nav"
                            data-kt-stepper-action="step">
                            <div class="stepper-wrapper d-flex align-items-center">
                                <div class="stepper-icon w-40px h-40px me-2 rounded-1">
                                    <i class="stepper-check fas fa-check"></i>
                                    <span class="stepper-number">
                                        <i class="fa-solid fa-file-signature fs-1 text-info"></i>
                                    </span>
                                </div>
                                <div class="stepper-label">
                                    <h3 class="stepper-title mb-0 pe-3">Card Customize</h3>
                                </div>
                            </div>
                        </div>
                        <div class="stepper-item mx-3 my-4 p-0 rounded-1" data-kt-stepper-element="nav"
                            data-kt-stepper-action="step">
                            <div class="stepper-wrapper d-flex align-items-center">
                                <div class="stepper-icon w-40px h-40px me-2 rounded-1">
                                    <i class="stepper-check fas fa-check"></i>
                                    <span class="stepper-number">
                                        <i class="fa-solid fa-truck-fast fs-1 text-info"></i>
                                    </span>
                                </div>
                                <div class="stepper-label">
                                    <h3 class="stepper-title mb-0 pe-3">Shipping Address</h3>
                                </div>
                            </div>
                        </div>

                    </div>
                    <!-- Stepper content and form -->
                    @if (strpos(Route::current()->getName(), 'user.') === 0)
                        <form class="form flex-grow-1 d-flex flex-column" novalidate="novalidate"
                            id="kt_stepper_example_clickable_form" action="{{ route('user.nfc-card.update',optional($nfc_card)->id) }}"
                            method="POST" enctype="multipart/form-data">
                        @else
                            <form class="form flex-grow-1 d-flex flex-column" novalidate="novalidate"
                                id="kt_stepper_example_clickable_form" action="{{ route('admin.nfc-card.update',optional($nfc_card)->id) }}"
                                method="POST" enctype="multipart/form-data">
                    @endif

                    @csrf
                    @method('PUT')
                    <div class="row pt-10">

                        <div class="flex-column current" data-kt-stepper-element="content">
                            <div class="card flex-grow-1 rounded-0">
                                <div class="text-center justify-content-center pt-10">
                                    <h2 class="text-center mb-0">Customize Your Virtual Card As Need!</h2>
                                </div>
                                <div
                                    class="centered-card-body card-body d-flex flex-column justify-content-between mb-10">
                                    @include('virtualCard.partials.virtualCardCustomization')
                                </div>
                            </div>
                        </div>

                        <div class="flex-column" data-kt-stepper-element="content">
                            <div class="card flex-grow-1 rounded-0">
                                <div class="card-header text-center border-0">
                                    <div class="pt-15 pb-15 ps-5 w-100">
                                        <h2 class="">Shipping Address For NFC Card Delivery!</h2>
                                    </div>
                                </div>
                                <div
                                    class="centered-card-body card-body d-flex flex-column justify-content-between mb-10 pt-0">
                                    @include('virtualCard.partials.virtualCardBilling')
                                </div>
                            </div>
                        </div>

                    </div>
                    {{-- Stepper Action Button --}}
                    <div class="">
                        <div class="d-flex justify-content-between py-3 px-3 align-items-center bg-white">
                            <div class="me-2">
                                <button type="button" class="btn btn-light-danger btn-active-light-danger"
                                    data-kt-stepper-action="previous">
                                    Back
                                </button>
                            </div>
                            <div>
                                <button type="submit" class="btn btn-primary" id="submitButton"
                                    data-kt-stepper-action="submit">
                                    <span class="indicator-label">Submit</span>
                                    <span class="indicator-progress">Please wait... <span
                                            class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                                </button>
                                <button type="button" class="btn btn-primary" data-kt-stepper-action="next">
                                    Continue
                                </button>
                            </div>
                        </div>
                    </div>
                    </form>
                    <!-- End of Stepper content and form -->
                </div>
            </div>
        </div>
    </div>
    {{-- <div class="col-lg-6 custom-col">
        <div class="card content-column">
            <div class="card-header px-0 border-0">
                <div class="d-flex flex-column justify-content-center align-items-center"
                    style="width: 100%; background: #7239e9; border-top-left-radius: 5px; border-top-right-radius: 5px; padding: 15px;">
                    <h3 class="text-white">NFC Preview</h3>
                    <p class="mb-0 text-white">Your Choosen Template</p>
                </div>
            </div>

            <div
                class="card-body custom-card-body overflow-auto px-0 pt-3 d-flex justify-content-center align-items-center" style="background-color: #ebebeb;">
                @include('virtualCard.partials.virtual_card_preview')
            </div>
        </div>
    </div> --}}
</div>

@push('scripts')
    <script>
        $(document).ready(function() {
            // Function to match card heights
            function matchCardHeights() {
                var firstCardHeight = $('#first-card').outerHeight();
                $('#second-card').outerHeight(firstCardHeight);
            }

            // Call matchCardHeights initially and on window resize
            matchCardHeights();
            $(window).resize(matchCardHeights);
        });
    </script>
    <script>
        $(document).ready(function() {
            $('#kt_stepper_example_clickable_form input:not([type="radio"]), #kt_stepper_example_clickable_form textarea, #kt_stepper_example_clickable_form input:not([type="color"])')
                .on('keyup change', function() {
                    // Extract input value and name
                    var inputValue = $(this).val();
                    var inputName = $(this).attr('name');
                    var nfcCardElement = $('.nfc-card .' + inputName);
                    var virtualCardElement = $('.virtual_card .' + inputName);
                    if (nfcCardElement.length > 0 | virtualCardElement.length > 0) {
                        if ($(this).is('input[type="file"]')) {
                            if ($(this).prop('files') && $(this).prop('files')[0]) {
                                var file = $(this).prop('files')[0];
                                var reader = new FileReader();
                                reader.onload = function(e) {
                                    nfcCardElement.attr('src', e.target.result);
                                    virtualCardElement.attr('src', e.target.result);
                                }
                                reader.readAsDataURL(file);
                            }
                        } else if ($(this).is('input[type="url"]')) {
                            nfcCardElement.attr('href', inputValue);
                            virtualCardElement.attr('href', inputValue);
                        } else {
                            nfcCardElement.text(inputValue);
                            virtualCardElement.text(inputValue);
                        }
                    }

                    // For debugging
                    console.log("Input Name:", inputName, "Input Value:", inputValue);
                });
        });

        // function cardValueUpdate() {
        //     var card_name = $('#card_name').val('');
        //     var card_designation = $('#card_designation').val('');
        //     var card_phone = $('#card_phone').val('');
        //     var card_email = $('#card_email').val('');
        //     var card_address = $('#card_address').val('');
        //     var inputValue = $(this).val();
        //     var inputName = $(this).attr('name');
        //     var nfcCardElement = $('.nfc-card .' + inputName);
        //     var virtualCardElement = $('.virtual_card .' + inputName);
        //     if (nfcCardElement.length > 0 | virtualCardElement.length > 0) {
        //         if ($(this).is('input[type="file"]')) {
        //             if ($(this).prop('files') && $(this).prop('files')[0]) {
        //                 var file = $(this).prop('files')[0];
        //                 var reader = new FileReader();
        //                 reader.onload = function(e) {
        //                     nfcCardElement.attr('src', e.target.result);
        //                     virtualCardElement.attr('src', e.target.result);
        //                 }
        //                 reader.readAsDataURL(file);
        //             }
        //         } else if ($(this).is('input[type="url"]')) {
        //             nfcCardElement.attr('href', inputValue);
        //             virtualCardElement.attr('href', inputValue);
        //         } else {
        //             nfcCardElement.text(inputValue);
        //             virtualCardElement.text(inputValue);
        //         }
        //     }

        //     // For debugging
        //     console.log("Input Name:", inputName, "Input Value:", inputValue);
        // }
    </script>




    <script>
        // Stepper lement
        var element = document.querySelector("#kt_stepper_example_clickable");
        var stepper = new KTStepper(element);
        stepper.on("kt.stepper.click", function(stepper) {
            stepper.goTo(stepper.getClickedStepIndex()); // go to clicked step
        });
        stepper.on("kt.stepper.next", function(stepper) {
            stepper.goNext(); // go next step
        });
        stepper.on("kt.stepper.previous", function(stepper) {
            stepper.goPrevious(); // go previous step
        });
    </script>
    <script>
        $(document).ready(function() {
            var initiallySelectedValue = $('input[name="virtual_card_template"]:checked').val();
            $("." + initiallySelectedValue).show();

            function updateCardPreview() {
                const virtualCardValue = $('input[name="virtual_card_template"]:checked').val();
                if (virtualCardValue != null) {
                    $(".virtual_card").hide();
                    $(".nfc-card").hide();
                    $("." + virtualCardValue).show();
                } else {
                    $(".nfc-card").hide();
                }
            }



            // On change event for radio buttons
            $('input[name="virtual_card_template"]').change(function() {
                updateCardPreview();
            });


        });

        function changeCardFontColor() {
            var selectedCardFontColor = $('input[name="card_font_color"]').val();
            $('.card_name, .card_designation, .card_phone, .card_email, .card_address').css('color', selectedCardFontColor);
        }

        function changeBgFront(input) {
            if (input.files && input.files[0]) {
                var file = input.files[0];
                var reader = new FileReader();
                reader.onload = function(e) {
                    $('.punch-card-container').css('background-image', 'url(' + e.target.result + ')');
                }
                reader.readAsDataURL(file);
            }
        }

        function changeBgBack(input) {
            if (input.files && input.files[0]) {
                var file = input.files[0];
                var reader = new FileReader();
                reader.onload = function(e) {
                    $('.punch-card-container-back').css('background-image', 'url(' + e.target.result + ')');
                }
                reader.readAsDataURL(file);
            }
        }
    </script>

    <script>
        $(document).ready(function() {
            $('#submitButton').on('submit', function() {
                var $btn = $(this);
                // Disable the button
                $btn.prop('disabled', true);
                // Show the progress indicator
                $btn.find('.indicator-label').hide();
                $btn.find('.indicator-progress').show();
            });
        });
    </script>
@endpush

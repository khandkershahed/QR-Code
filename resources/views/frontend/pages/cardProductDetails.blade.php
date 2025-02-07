<x-frontend-app-layout :title="'Card Product Details || GoFlixza - Your Hub for QR, Bar Codes & NFC V.Cards'">
    <style>
        /* Custom styling for error messages */
        label.error {
            color: red;
            font-size: 12px;
        }

        /* Custom styling for input fields when they have errors */
        input.error {
            border: 2px solid red;
            background-color: #f8d7da;
        }

        button:disabled {
            background-color: #ddd;
            cursor: not-allowed;
        }

        .title-badges {
            display: inline-flex;
            appearance: none;
            -webkit-box-align: center;
            align-items: center;
            -webkit-box-pack: center;
            justify-content: center;
            user-select: none;
            position: relative;
            white-space: nowrap;
            vertical-align: middle;
            outline: transparent solid 2px;
            outline-offset: 2px;
            line-height: 1.2;
            transition-property: var(--chakra-transition-property-common);
            transition-duration: var(--chakra-transition-duration-normal);
            text-transform: capitalize;
            height: var(--chakra-sizes-9);
            min-width: var(--chakra-sizes-12);
            padding-inline-start: var(--chakra-space-12);
            padding-inline-end: var(--chakra-space-12);
            background: rgb(1, 1, 1);
            width: 50%;
            border-top-left-radius: 6.25rem;
            border-bottom-left-radius: 6.25rem;
            font-size: var(--chakra-fontSizes-xs);
            font-weight: 600;
            padding: 0px 0.125rem;
            color: rgb(255, 255, 255);
        }

        .title-badges-off {
            text-align: center;
            width: 50%;
            background-color: #eee;
            border-top-right-radius: 6.25rem;
            border-bottom-right-radius: 6.25rem;
        }

        .plan-box-container {
            max-width: 600px;
            margin: auto;
            padding: 20px;
        }

        .plan .title {
            color: transparent;
            font-size: 40px;
            font-weight: 700;
            line-height: 150%;
            background-image: linear-gradient(94deg, rgb(179, 44, 14) 20%, rgb(255, 100, 58) 100%);
            background-clip: text;
        }

        .plan .link a {
            font-size: 14px;
            font-weight: 600;
            line-height: 150%;
            color: rgb(255, 100, 58);
        }

        .plan-text {
            color: rgb(255, 100, 58);
        }

        /* .radio-card-container {
            display: flex;
            gap: 15px;
        } */

        .radio-card {
            align-self: stretch;
            border-radius: 10px;
            gap: 24px;
            padding: 16px;
            border: 1px solid rgb(227, 227, 227);
            cursor: pointer;
            display: flex;
            flex-direction: column;
            position: relative;
        }

        .radio-card:hover {
            background-color: rgb(227, 227, 227);
        }

        .panel-default {
            align-self: stretch;
            border-radius: 10px;
            padding: 0px;
            border: 1px solid rgb(227, 227, 227);
            cursor: pointer;
            display: flex;
            flex-direction: column;
            position: relative;
            margin-bottom: 10px;
        }

        .panel-body {
            padding-left: 15px;
            padding-right: 15px;
        }

        .panel-title {
            margin-bottom: 0'

        }

        .amount-title {
            color: rgb(1, 1, 1);
            font-size: 32px;
            font-weight: 800;
            line-height: 110%;
            align-self: stretch;
            letter-spacing: -0.32px;
            text-decoration: none;
        }

        .plan-title {
            color: rgb(1, 1, 1);
            font-size: 24px;
            font-weight: 800;
            line-height: 125%;
            align-self: stretch;
            letter-spacing: -0.24px;
        }

        .radio-card input {
            display: none;
        }

        .card-content {
            display: flex;
            justify-content: space-between;
        }

        .radio-card .card-content {
            padding-left: 10px;
        }

        .radio-card .badge {
            background-color: #28a745;
            color: white;
            padding: 5px 10px;
            border-radius: 5px;
            font-size: 14px;
        }

        /* Highlight the border when selected */
        .radio-card input:checked+.card-content {
            border: 2px solid #007BFF;
            padding: 15px;
            border-radius: 10px;
        }

        /* Progress bar styles */
        #progressBarContainer {
            margin-bottom: 20px;
        }

        #progressBar {
            height: 8px;
            background-color: #ddd;
            border-radius: 5px;
        }

        #progress {
            width: 0%;
            height: 100%;
            background-color: #28a745;
            border-radius: 5px;
        }

        .plan-continue {}

        .gift-card {
            background-color: rgb(0, 26, 64);
            /* background-image: url((unknown)); */
            padding: 16px;
            gap: 12px;
            border-radius: 10px;
            margin: 32px 0px 8px;
        }

        .gift-title {
            color: transparent;
            font-size: 21px;
            font-weight: 800;
            line-height: 26.25px;
            margin-bottom: 8px;
            background-image: linear-gradient(93deg, rgb(156, 156, 156) 2.81%, rgb(244, 244, 244) 29.58%);
            background-clip: text;
        }

        .gift-para {
            font-size: 12px;
            line-height: 18px;
            color: rgb(255, 255, 255);
            margin-bottom: 12px;
        }

        .gift-link {
            color: rgb(255, 255, 255);
            font-size: 14px;
            font-weight: 600;
            line-height: 21px;
            text-align: right;
        }

        .accordion-item .accordion-button {
            font-size: 20px;
            line-height: 1.3;
            -webkit-box-shadow: none;
            box-shadow: none;
            background: white;
            position: initial;
            padding: 20px 30px;
            border-radius: 14px;
            letter-spacing: -0.4px;
            border: 1.25px solid white;
        }

        .accordion-item .accordion-collapse .accordion-body {
            margin-top: 24px;
            padding: 0 30px 25px;
        }

        .checkbox-check {
            padding: 5px;
            width: 25px;
            height: 25px;
            line-height: 0;
        }

        .custom-card {
            border: 2px solid transparent;
            border-radius: 10px;
            text-align: start;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        /* Hide the default radio button */
        input[type="radio"] {
            display: none;
        }

        /* Add border when checked */
        input[type="radio"]:checked+.custom-card {
            border: 2px solid #007bff;
            background-color: #f8f9fa;
            padding: 15px;
            border-radius: 0;
        }

        .slick-dots {
            bottom: -5px;
            position: relative;
            margin-bottom: 10px;
        }

        .slick-dots li {
            width: 60px;
            /* Thumbnail size */
            height: 60px;
        }

        .slick-dots li button {
            width: 100%;
            height: 100%;
            padding: 0;
            border: none;
        }

        .slick-dot-thumbnail {
            width: 100%;
            height: 100%;
            object-fit: cover;
            border-radius: 5px;
            /* Rounded thumbnails */
        }

        .slick-dots li:after {
            content: "";
            position: absolute;
            left: -5px;
            top: -5px;
            width: 15px;
            height: 15px;
            border-radius: 50%;
            border: 10px solid #dc3545;
            -webkit-transition: 0.5s;
            -o-transition: 0.5s;
            transition: 0.5s;
            -webkit-transform: scale(0);
            -ms-transform: scale(0);
            transform: scale(0);
        }

        .slick-dots li.slick-active::after {
            transform: scale(1);
            border-color: #dc3545;
        }

        .main-img {
            position: relative;
            display: inline-block;
        }

        .card-logo {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
        }

        .card-design-box {
            background-color: #eee;
            padding-top: 30px;
            padding-bottom: 30px;
            border-radius: 10px;
        }

        .img-choice {
            width: 70px;
            height: 50px;
            object-fit: contain;
            border: 1px solid black;
            border-radius: 6px;
            padding: 5px;
        }

        .shipping-card {
            border-radius: 10px;
            padding: 0px;
            border: 1px solid rgb(227, 227, 227);
            cursor: pointer;
            display: flex;
            flex-direction: column;
            position: relative;
            margin-bottom: 10px;
        }

        .shipping-card input:checked+label {
            font-weight: bold;
        }

        /* Red border for checked radio button */
        .shipping-card input:checked {
            padding: 14px;
            border: 1px solid red;
            cursor: pointer;
            flex-direction: column;
            position: relative;
            margin-bottom: 10px;
            /* Red border for checked radio button */
        }

        #mainCardImage {
            width: 250px;
        }

        .shipping-card input:checked~label {
            padding: 14px;
            border: 1px solid red;
            cursor: pointer;
            display: flex;
            flex-direction: column;
            position: relative;
            margin: 0px;
            /* Red border around the label */
        }

        .slidecontainer {
            width: 100%;
        }

        .user-slider-range {
            width: 80px;
            border-bottom: 1px solid #252525;
            border-top: 0px;
            border-right: 0px;
            border-left: 0px;
        }
    </style>

    <section class="text-center page-banner-area overlay py-120 rpy-120 rel z-1 bgs-cover"
        style="background-image: url({{ asset('images/shop-page-banner-.jpg') }});">
        <div class="container">
            <div class="text-black banner-inner pt-70 rpt-60">
                <h1 class="page-title aos-init aos-animate" data-aos="fade-up" data-aos-duration="1500"
                    data-aos-offset="50">
                    {{ $cardProduct->title }}
                </h1>
                {{-- <p>{{ $cardProduct->short_description }}</p> --}}
            </div>
        </div>
    </section>
    @php
        $individual_card_descriptions = is_array($cardProduct->descriptions)
            ? $cardProduct->descriptions
            : json_decode($cardProduct->descriptions);
    @endphp
    <section class="plan-box-container">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="border-0 card plan">
                        <div class="p-0 bg-transparent border-0 card-header">
                            <p class="mb-0 title">For {{ ucfirst($cardProduct->card_type) }}</p>
                            @foreach ($individual_card_descriptions as $individual_card_description)
                                <p class="mb-0">{{ $individual_card_description }}</p>
                            @endforeach
                            <div class="link">
                                <a href="{{ route('card.features',$cardProduct->slug) }}" target="_blank">See all features</a>
                            </div>
                        </div>
                        <div class="p-0 mt-30 card-body">
                            <div class="form-container">
                                <div id="progressBarContainer" style="display: none">
                                    <div style="display: flex; justify-content: space-between;">
                                        <span>Choose a Plan</span>
                                        <span>Card Customize</span>
                                        <span>Step 3</span>
                                    </div>
                                    <div id="progressBar">
                                        <div id="progress"></div>
                                    </div>
                                </div>

                                @include('frontend.card.form')
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <a href="">
                        <div class="card gift-card">
                            <p class="mb-0 gift-title">Gift Card</p>
                            <p class="mb-0 gift-para">Available as e-Gift or beautifully packaged Smart Cards, ideal
                                for client appreciation or event giveaways.</p>
                            <div>
                                <p class="mb-0 gift-link">Buy as a Gift -></p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-12">
                    <h2 class="mt-30">FAQ Accordion</h2>
                    <div class="accordion" id="accordionExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header rounded-0" id="headingOne">
                                <button class="accordion-button rounded-0 collapsed" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true"
                                    aria-controls="collapseOne">
                                    How many cards are included in the Teams subscription?
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    Each subscription seat includes a complimentary NFC smart card, allowing seamless
                                    access and functionality. If your team requires additional smart cards, you can
                                    purchase them separately for $39 each. These cards are designed for durability and
                                    security, ensuring that every team member has access to the necessary features
                                    without interruption.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header rounded-0" id="headingTwo">
                                <button class="accordion-button collapsed rounded-0" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false"
                                    aria-controls="collapseTwo">
                                    What if we lose a card?
                                </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    Losing a card is not a problem! You can easily order a replacement NFC smart card
                                    for $39 each. To ensure your security, we recommend deactivating the lost card
                                    immediately and activating the new one upon receipt. This prevents unauthorized use
                                    and ensures your team continues to operate smoothly. Our support team is also
                                    available to assist with any issues related to lost or misplaced cards.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header rounded-0" id="headingThree">
                                <button class="accordion-button collapsed rounded-0" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false"
                                    aria-controls="collapseThree">
                                    How do we customize our smart cards?
                                </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    We offer full customization options to align your NFC smart cards with your brand
                                    identity. Once you provide your logo, brand colors, and any specific design
                                    preferences, our professional design team will create a high-quality proof for you
                                    to review. You can request modifications until you're satisfied with the final
                                    design. Once approved, your customized NFC smart cards will be produced and shipped
                                    to you, ensuring they match your company’s branding and enhance your professional
                                    presence.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header rounded-0" id="headingFour">
                                <button class="accordion-button collapsed rounded-0" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false"
                                    aria-controls="collapseFour">
                                    Can we use these smart cards for multiple purposes?
                                </button>
                            </h2>
                            <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    Absolutely! Our NFC smart cards are highly versatile and can be programmed for
                                    multiple functions. They can be used for secure office access, digital business
                                    cards, membership verification, time tracking, and more. Depending on your needs,
                                    you can integrate them with your existing systems or use them with compatible
                                    NFC-enabled devices. If you need help setting up multiple functions, our team is
                                    happy to assist.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header rounded-0" id="headingSevenn">
                                <button class="accordion-button collapsed rounded-0" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#collapseSevenn" aria-expanded="false"
                                    aria-controls="collapseSevenn">
                                    How long do NFC smart cards last?
                                </button>
                            </h2>
                            <div id="collapseSevenn" class="accordion-collapse collapse"
                                aria-labelledby="headingSevenn" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    Our NFC smart cards are designed for long-term use, with an average lifespan of 3 to
                                    5 years, depending on usage and handling. They are built using durable materials to
                                    withstand daily wear and tear, ensuring reliability over time. Proper care—such as
                                    keeping them away from extreme heat, water, and strong magnetic fields—will help
                                    extend their lifespan. If your card becomes damaged, you can easily order a
                                    replacement.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @push('scripts')
        <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.5/dist/jquery.validate.min.js"></script>
        {{-- Slider Range --}}
        <script>
            document.addEventListener("DOMContentLoaded", function() {
                const updateSubtotal = () => {
                    const plan_price = parseFloat($('input[name="plan"]:checked').val()) ||
                        {{ $cardProduct->price }};
                    const cardUser = parseFloat($('input[name="card_user"]').val()) || 1;
                    const planPrice = plan_price * cardUser;
                    const cardPrice = parseFloat($('input[name="card_preference"]:checked').data("card_price")) ||
                        0;
                    const shippingPrice = parseFloat($('input[name="shipping_charge"]:checked').val()) || 0;

                    const cardTitle = $('input[name="card_preference"]:checked').data("card_title") || '';
                    const shippingTitle = $('input[name="shipping_charge"]:checked').data("shipping_title") || '';

                    const subtotal = planPrice + cardPrice + shippingPrice;
                    $('input[name="subtotal"]').val(subtotal.toFixed(2));

                    $('#card_title').text(cardTitle);
                    $('.summary').text(subtotal.toFixed(2));
                    $('.annualCharge').text(subtotal.toFixed(2));
                    $('#card_price').text(cardPrice.toFixed(2));
                    $('#shipping_title').text(shippingTitle);
                    $('#shipping_charge').text('$ ' + shippingPrice.toFixed(2));
                };

                // Update the subtotal whenever an input is changed
                $('input[name="plan"], input[name="card_preference"], input[name="shipping_charge"]').on('change',
                    function() {
                        updateSubtotal();
                    });
                $('input[name="card_user"]').on('input',
                    function() {
                        updateSubtotal();
                    });

                // Range slider handling
                let $rangeSlider = $("#rangeSlider");
                let $inputField = $("#userSliderRange");

                // Update input field when slider changes
                $rangeSlider.on("input", function() {
                    $inputField.val(this.value);
                    updateSubtotal();
                });

                // Update slider when input field changes
                $inputField.on("input", function() {
                    let value = parseInt($(this).val());
                    if (!isNaN(value) && value >= $rangeSlider.attr("min") && value <= $rangeSlider.attr(
                            "max")) {
                        $rangeSlider.val(value);
                        updateSubtotal();
                    }
                });

                // Initial subtotal update
                updateSubtotal();
            });
        </script>



        {{-- Slider Range End --}}
        {{-- For Image Slider End --}}
        <script>
            $(document).ready(function() {
                $('.image-slider').slick({
                    dots: true, // Enable dots
                    infinite: true,
                    speed: 500,
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    autoplay: true,
                    autoplaySpeed: 3000,
                    arrows: false,
                    customPaging: function(slider, i) {
                        var thumb = $(slider.$slides[i]).find("img").attr("src"); // Get image source
                        return '<img src="' + thumb + '" class="slick-dot-thumbnail"/>'; // Return thumbnail
                    }
                });
            });
        </script>
        {{-- For Image Slider End --}}
        {{-- For Multi Steper Form With Validation --}}
        <script>
            $(document).ready(function() {
                // Enable Next Button if plan or occupation is selected
                $('input[name="plan"], input[name="card_preference"]').on('change', function() {
                    $('#nextBtn2').prop('disabled', false); // Enable Continue button for Step 2
                });

                // Enable Next Button for Step 3 if card logo is uploaded
                $('#card_logo').on('change', function() {
                    validateStep3(); // Validate Step 3 when file input changes
                    previewLogo(); // Show the preview of the logo
                });
            });

            // Navigate to the next step
            function goToNextStep(step) {
                if (step === 1 && $('input[name="plan"]:checked').length) {
                    $('#step1').hide();
                    $('#step2').show();
                } else if (step === 2 && $('input[name="card_preference"]:checked').length) {
                    $('#step2').hide();
                    $('#step3').show();
                } else if (step === 3 && $('#card_logo')[0].files.length > 0) {
                    $('#step3').hide();
                    $('#step4').show();
                } else {
                    alert("Please make a selection or upload a logo.");
                }
            }

            // Navigate to the previous step
            function previousStep(step) {
                $('#step' + step).hide();
                $('#step' + (step - 1)).show();
            }

            // Validate Step 3 (Enable Next button if logo is selected)
            function validateStep3() {
                // Enable or disable the "Continue" button based on whether a file is uploaded
                $('#nextBtn3').prop('disabled', $('#card_logo')[0].files.length === 0);
            }

            // Event listener to update the main card image when a new design is chosen
            $(document).ready(function() {
                $('.img-choice').on('click', function() {
                    // Get the image source from the clicked image
                    var newCardImage = $(this).data('image');
                    // Change the main card image to the selected one
                    $('#mainCardImage').attr('src', newCardImage);
                });

                // Handle the card logo preview
                $('#card_logo').on('change', function() {
                    previewLogo(); // Show the logo preview when a file is selected
                });
            });

            // Function to preview the uploaded logo
            function previewLogo() {
                const fileInput = document.getElementById('card_logo');
                const logoPreview = document.getElementById('logoPreview');

                // Check if a file is selected
                if (fileInput.files && fileInput.files[0]) {
                    const reader = new FileReader();

                    reader.onload = function(e) {
                        // Set the logo preview source to the selected image
                        logoPreview.src = e.target.result;
                    }

                    // Read the selected image file as a data URL
                    reader.readAsDataURL(fileInput.files[0]);
                }
            }
        </script>

        {{-- For Multi Steper Form With Validation End --}}
        {{-- For Accordion under image field --}}
        <script>
            $(document).ready(function() {
                $('input[type="radio"]').on('change', function() {
                    $('.panel-collapse').collapse('hide'); // Hide all collapses
                    if ($(this).attr('id') === 'r11') {
                        $('#collapseOne').collapse('show');
                    } else if ($(this).attr('id') === 'r12') {
                        $('#collapseTwo').collapse('show');
                    } else if ($(this).attr('id') === 'r13') {
                        $('#collapseThree').collapse('show');
                    }
                });
            });
        </script>
        {{-- For Accordion under image field end --}}
        {{-- Radio With Accordion Start --}}
        <script>
            // Select all elements with class "accordion"
            const accordions = document.querySelectorAll('.accordion');

            accordions.forEach(accordion => {
                accordion.addEventListener('click', function() {
                    // Toggle the "active" class on the clicked accordion button
                    this.classList.toggle('active');

                    // Select the next element sibling which is the corresponding panel
                    const panel = this.nextElementSibling;

                    // Toggle the display style of the panel
                    if (panel.style.display === 'block') {
                        panel.style.display = 'none';
                    } else {
                        panel.style.display = 'block';
                    }
                });
            });
        </script>
        {{-- Radio With Accordion End --}}
        <script>
            document.getElementById('multiStepForm').addEventListener('submit', function(event) {
                event.preventDefault(); // Prevent the default form submission

                var formData = new FormData(this); // Collect all form data

                // Create an AJAX request using Fetch API
                fetch("{{ route('card.checkout') }}", {
                        method: "GET", // Using GET method
                        headers: {
                            "Accept": "application/json"
                        },
                        body: formData
                    })
                    .then(response => response.json()) // Assuming the server returns JSON
                    .then(data => {
                        console.log(data); // Handle the response from the server (e.g., show a success message)
                        // You can also update the page dynamically or redirect the user
                        if (data.success) {
                            // Redirect or update the UI as needed
                        } else {
                            alert("There was an error!");
                        }
                    })
                    .catch(error => {
                        console.error('Error:', error);
                        alert("An error occurred!");
                    });
            });
        </script>
    @endpush
</x-frontend-app-layout>

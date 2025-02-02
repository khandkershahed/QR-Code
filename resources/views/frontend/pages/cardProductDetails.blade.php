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
    </style>

    <section class="text-center page-banner-area overlay py-120 rpy-120 rel z-1 bgs-cover"
        style="background-image: url({{ asset('images/shop-page-banner-.jpg') }});">
        <div class="container">
            <div class="text-black banner-inner pt-70 rpt-60">
                <h1 class="page-title aos-init aos-animate" data-aos="fade-up" data-aos-duration="1500"
                    data-aos-offset="50">
                    {{ $cardProduct->name }}
                </h1>
                <p>{{ $cardProduct->short_description }}</p>
            </div>
        </div>
    </section>

    <section class="plan-box-container">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="border-0 card plan">
                        <div class="d-flex">
                            <p class="py-3 title-badges">For Individual</p>
                            <p class="py-3 title-badges-off">For Individual</p>
                        </div>
                        <div class="p-0 bg-transparent border-0 card-header">
                            <p class="mb-0 title">Individual</p>
                            <p class="mb-0">Complimentary Smart Card included.</p>
                            <div class="link">
                                <a href="#">See all features</a>
                            </div>
                        </div>
                        <div class="p-0 mt-30 card-body">
                            <div class="form-container">
                                <div id="progressBarContainer" style="display: none">
                                    <div style="display: flex; justify-content: space-between;">
                                        <span>Choose a Plan</span>
                                        <span>Step 2</span>
                                        <span>Step 3</span>
                                    </div>
                                    <div id="progressBar">
                                        <div id="progress"></div>
                                    </div>
                                </div>

                                <form id="multiStepForm">
                                    <!-- Step 1 -->
                                    <div class="form-step" id="step1">
                                        <div class="radio-card-container">
                                            <!-- First Option -->
                                            <label class="mt-10 radio-card ">
                                                <input type="radio" name="plan" value="annual" required
                                                    onchange="goToNextStep(1)">
                                                <div class="card-content">
                                                    <div>
                                                        <h3 class="plan-title">Annual Plan</h3>
                                                        <p class="mb-0"><span class="badge">Save 31%</span></p>
                                                        <p class="mb-0"><small>Equal to $8.25/mo</small></p>
                                                    </div>
                                                    <div>
                                                        <h3 class="amount-title">$99</h3>
                                                        <p class="mb-0"><strong>$99</strong> Billed Annually</p>
                                                        <button
                                                            class="bg-transparent plan-continue plan-text fw-bold">Continue
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                height="24" viewBox="0 0 24 24" fill="none">
                                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                                    d="M4 12C4 11.4477 4.44772 11 5 11H19C19.5523 11 20 11.4477 20 12C20 12.5523 19.5523 13 19 13H5C4.44772 13 4 12.5523 4 12Z"
                                                                    fill="currentColor"></path>
                                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                                    d="M11.2929 4.29289C11.6834 3.90237 12.3166 3.90237 12.7071 4.29289L19.7071 11.2929C20.0976 11.6834 20.0976 12.3166 19.7071 12.7071L12.7071 19.7071C12.3166 20.0976 11.6834 20.0976 11.2929 19.7071C10.9024 19.3166 10.9024 18.6834 11.2929 18.2929L17.5858 12L11.2929 5.70711C10.9024 5.31658 10.9024 4.68342 11.2929 4.29289Z"
                                                                    fill="currentColor"></path>
                                                            </svg>
                                                        </button>
                                                    </div>
                                                </div>
                                            </label>
                                            <label class="mt-20 radio-card">
                                                <input type="radio" name="plan" value="trial"
                                                    onchange="goToNextStep(1)">
                                                <div class="card-content">
                                                    <div>
                                                        <h3 class="plan-title">Pay Monthly - $12/mo</h3>
                                                    </div>
                                                    <div>
                                                        <button
                                                            class="bg-transparent plan-continue plan-text fw-bold">Continue
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                height="24" viewBox="0 0 24 24" fill="none">
                                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                                    d="M4 12C4 11.4477 4.44772 11 5 11H19C19.5523 11 20 11.4477 20 12C20 12.5523 19.5523 13 19 13H5C4.44772 13 4 12.5523 4 12Z"
                                                                    fill="currentColor"></path>
                                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                                    d="M11.2929 4.29289C11.6834 3.90237 12.3166 3.90237 12.7071 4.29289L19.7071 11.2929C20.0976 11.6834 20.0976 12.3166 19.7071 12.7071L12.7071 19.7071C12.3166 20.0976 11.6834 20.0976 11.2929 19.7071C10.9024 19.3166 10.9024 18.6834 11.2929 18.2929L17.5858 12L11.2929 5.70711C10.9024 5.31658 10.9024 4.68342 11.2929 4.29289Z"
                                                                    fill="currentColor"></path>
                                                            </svg>
                                                        </button>
                                                    </div>
                                                </div>
                                            </label>
                                        </div>
                                        {{-- <button type="button" id="nextBtn1" class="btn btn-primary"
                                            onclick="goToNextStep(1)" disabled>Next</button> --}}
                                    </div>

                                    <!-- Step 2 -->
                                    <div class="form-step" id="step2" style="display:none;">
                                        <h2>Step 2: Personal Information</h2>

                                        <label for="lastName">Last Name:</label>
                                        <input type="text" id="lastName" name="lastName" required>

                                        <label for="email">Email:</label>
                                        <input type="email" id="email" name="email" required>

                                        <label for="phone">Phone:</label>
                                        <input type="tel" id="phone" name="phone" required>

                                        <button type="button" id="nextBtn2" class="btn btn-primary"
                                            onclick="goToNextStep(2)" disabled>Next</button>
                                        <button type="button" id="prevBtn2"
                                            onclick="previousStep(2)">Previous</button>
                                    </div>

                                    <!-- Step 3 -->
                                    <div class="form-step" id="step3" style="display:none;">
                                        <h2>Step 3: Review and Submit</h2>
                                        <p id="reviewData"></p>

                                        <button type="button" onclick="submitForm()">Submit</button>
                                        <button type="button" onclick="previousStep(3)">Previous</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <a href="">
                        <div class="card gift-card">
                            <p class="mb-0 gift-title">OVOU Gift</p>
                            <p class="mb-0 gift-para">Available as eGift or beautifully packaged Smart Cards, ideal
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
                                    Accordion Item #1
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <strong>This is the first item's accordion body.</strong> It is shown by default,
                                    until the collapse plugin adds the appropriate classes that we use to style each
                                    element. These classes control the overall appearance, as well as the showing and
                                    hiding via CSS transitions. You can modify any of this with custom CSS or overriding
                                    our default variables. It's also worth noting that just about any HTML can go within
                                    the <code>.accordion-body</code>, though the transition does limit overflow.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header rounded-0" id="headingTwo">
                                <button class="accordion-button collapsed rounded-0" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false"
                                    aria-controls="collapseTwo">
                                    Accordion Item #2
                                </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <strong>This is the second item's accordion body.</strong> It is hidden by default,
                                    until the collapse plugin adds the appropriate classes that we use to style each
                                    element. These classes control the overall appearance, as well as the showing and
                                    hiding via CSS transitions. You can modify any of this with custom CSS or overriding
                                    our default variables. It's also worth noting that just about any HTML can go within
                                    the <code>.accordion-body</code>, though the transition does limit overflow.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header rounded-0" id="headingThree">
                                <button class="accordion-button collapsed rounded-0" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false"
                                    aria-controls="collapseThree">
                                    Accordion Item #3
                                </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse"
                                aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <strong>This is the third item's accordion body.</strong> It is hidden by default,
                                    until the collapse plugin adds the appropriate classes that we use to style each
                                    element. These classes control the overall appearance, as well as the showing and
                                    hiding via CSS transitions. You can modify any of this with custom CSS or overriding
                                    our default variables. It's also worth noting that just about any HTML can go within
                                    the <code>.accordion-body</code>, though the transition does limit overflow.
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
        <script>
            document.addEventListener("DOMContentLoaded", function() {
                document.querySelectorAll('input[name="plan"]').forEach(input => {
                    input.addEventListener("change", () => {
                        document.getElementById("nextBtn1").disabled = false;
                        goToNextStep(1); // Auto move to next step
                    });
                });

                document.getElementById('lastName').addEventListener("input", () => {
                    document.getElementById("nextBtn2").disabled = document.getElementById('lastName').value
                        .trim() === "";
                });

                document.getElementById('email').addEventListener("input", checkStep2Validation);
                document.getElementById('phone').addEventListener("input", checkStep2Validation);
            });

            function goToNextStep(step) {
                if (step === 1) {
                    if (document.querySelector('input[name="plan"]:checked')) {
                        document.getElementById('step1').style.display = 'none';
                        document.getElementById('step2').style.display = 'block';
                        updateProgressBar(33); // Step 1 completed
                    } else {
                        alert("Please select a plan.");
                    }
                } else if (step === 2) {
                    let lastName = document.getElementById('lastName').value.trim();
                    let email = document.getElementById('email').value.trim();
                    let phone = document.getElementById('phone').value.trim();

                    if (lastName !== "" && email !== "" && phone !== "") {
                        document.getElementById('step2').style.display = 'none';
                        document.getElementById('step3').style.display = 'block';
                        updateProgressBar(66); // Step 2 completed
                        populateReview();
                    } else {
                        alert("All fields are required.");
                    }
                }
            }

            function previousStep(step) {
                document.getElementById('step' + step).style.display = 'none';
                document.getElementById('step' + (step - 1)).style.display = 'block';
            }

            function updateProgressBar(percentage) {
                document.getElementById('progress').style.width = percentage + '%';
            }

            function checkStep2Validation() {
                let email = document.getElementById('email').value.trim();
                let phone = document.getElementById('phone').value.trim();
                document.getElementById("nextBtn2").disabled = (email === "" || phone === "");
            }

            function populateReview() {
                const lastName = document.getElementById('lastName').value.trim();
                const email = document.getElementById('email').value.trim();
                const phone = document.getElementById('phone').value.trim();
                const selectedPlan = document.querySelector('input[name="plan"]:checked')?.value || "Not Selected";

                if (lastName && email && phone && selectedPlan) {
                    const reviewContent = `
                    <strong>Plan:</strong> ${selectedPlan} <br>
                    <strong>Last Name:</strong> ${lastName} <br>
                    <strong>Email:</strong> ${email} <br>
                    <strong>Phone:</strong> ${phone} <br>
                `;
                    document.getElementById('reviewData').innerHTML = reviewContent;
                } else {
                    alert("Missing review data.");
                }
            }

            function submitForm() {
                if (document.getElementById('multiStepForm').checkValidity()) {
                    alert('Form Submitted Successfully!');
                    document.getElementById('multiStepForm').reset();
                    document.getElementById('step3').style.display = 'none';
                    document.getElementById('step1').style.display = 'block';
                    updateProgressBar(0); // Reset progress bar to 0%
                } else {
                    alert('Please complete all required fields.');
                }
            }
        </script>
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
    @endpush
</x-frontend-app-layout>

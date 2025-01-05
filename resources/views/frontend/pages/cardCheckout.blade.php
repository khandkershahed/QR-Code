<x-admin-guest-layout :title="'Checkout || GoFlixza - Your Hub for QR, Bar Codes & NFC V.Cards'">
    <style>
        .payment-container {
            position: absolute;
            height: 100vh;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        .devider {
            height: 2px;
            position: relative;
            top: -10px;
            background-color: #eee
        }

        .devider-text {
            background-color: white;
            position: relative;
            z-index: 5;
            width: 50%;
            margin: auto;
        }

        .card-column {
            box-shadow: -15px 0 15px -15px #eee;
        }

        .colum-padding {
            padding-top: 3rem;
        }
    </style>
    <div class="container">
        <div class="row">
            <div class="col-lg-8 offset-lg-2 mx-auto">
                <div class="card">
                    <div class="card-body pt-0">
                        <div class="row payment-container">
                            <div class="col-lg-6 ">
                                <div class="d-flex align-items-center colum-padding">
                                    <a href="" class="pe-3"><i class="fas fa-arrow-left-long"></i></a>
                                    <div class="d-flex align-items-center">
                                        <div>
                                            <i class="fas fa-shop pe-3"></i>
                                        </div>
                                        <div>
                                            <h2 class="mb-0">FLIXZA GLOBAL LLC </h2>
                                        </div>
                                        <div>
                                            <span class="ms-5 badge bg-warning text-danger">Payment</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="" style="margin-top: 5rem">
                                    <h6 class="mb-3">Purchase <strong class="text-info">{{ $plan->name }}</strong></h6>
                                    <h6 class="mb-5"> <strong class="text-black">Card Color :{{ $color }}</strong></h6>
                                    <div class="d-flex align-items-center">
                                        <h1 style="font-size: 40px; border-right: 2px solid #eee;">
                                            <strong class="pe-3">
                                                @if ($plan->currency == 'eur')
                                                €
                                            @elseif ($plan->currency == 'gbp')
                                                £
                                            @elseif ($plan->currency == 'usd')
                                                $
                                            @else
                                                $
                                            @endif
                                            {{ $subtotal }}</strong>
                                        </h1>

                                    </div>
                                    <div>
                                        <p>For larger teams needing enhanced management and collaboration</p>
                                    </div>
                                    <div class="d-flex justify-content-start align-items-center"
                                        style="
                                        height: 30rem;
                                        max-height: 100%;
                                    ">
                                        <img class="img-fluid" width="200px"
                                            src="{{ asset('storage/'.$plan->image) }}" alt="">
                                    </div>
                                </div>
                                <div class="text-start">
                                    <p>Powered By <a href="{{ route('homePage') }}" class="text-muted">FLIXZA GLOBAL
                                            LLC</a></p>
                                    <p class="">
                                        <a class="text-muted" href="{{ route('terms') }}">Terms</a>
                                        <a class="text-muted" href="{{ route('terms') }}">Privacy</a>
                                    </p>
                                </div>
                            </div>
                            <div class="col-lg-6 card-column">
                                <div class="text-center  colum-padding">
                                    <h1>Pay With Card</h1>
                                    <p class="text-center devider-text">Countinue Payment Process</p>
                                    <div class="devider"></div>
                                </div>
                                <form action="{{ route('card.payment') }}" method="POST" id="payment-form">
                                    @csrf
                                    <input type="hidden" name="product_id" id="plan" value="{{ $plan->id }}">
                                    <input type="hidden" name="subtotal" id="subtotal" value="{{ $subtotal }}">
                                    <input type="hidden" name="quantity" id="quantity" value="{{ $quantity }}">
                                    <input type="hidden" name="color" id="color" value="{{ $color }}">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="mb-5 pb-3">
                                                <label for="exampleInputEmail1" class="form-label">Email</label>
                                                <input type="email" class="form-control" id="card-holder-email"
                                                    name=email aria-describedby="emailHelp"
                                                    placeholder="demo@example.com">
                                            </div>
                                        </div>

                                        <div class="col-lg-12">
                                            <div class="mb-5 pb-3">
                                                <label for="card-number-element">Card Inormation</label>
                                                <div id="card-element" class="border p-3 rounded"></div>
                                            </div>
                                        </div>

                                        <div class="col-lg-12">
                                            <div class="mb-5 pb-3">
                                                <input type="hidden" name="user_id" value="{{ $user_id }}">
                                                <label for="card-holder-name" class="form-label">Cardholder
                                                    Name</label>
                                                <input type="text" class="form-control" id="card-holder-name"
                                                    name=name aria-describedby="emailHelp"
                                                    placeholder="Name on the card">
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="mb-5 pb-3">
                                                <label for="exampleInputEmail1" class="form-label">Country Or
                                                    Rigion</label>
                                                <select id="billingCountry" name="billingCountry" class="form-select"
                                                    autocomplete="billing country" aria-label="Country or region"
                                                    class="Select-source">
                                                    <option value="" disabled="" hidden=""></option>
                                                    <option value="AF">Afghanistan</option>
                                                    <option value="AX">Åland Islands</option>
                                                    <option value="AL">Albania</option>
                                                    <option value="DZ">Algeria</option>
                                                    <option value="AD">Andorra</option>
                                                    <option value="AO">Angola</option>
                                                    <option value="AI">Anguilla</option>
                                                    <option value="AQ">Antarctica</option>
                                                    <option value="AG">Antigua &amp; Barbuda</option>
                                                    <option value="AR">Argentina</option>
                                                    <option value="AM">Armenia</option>
                                                    <option value="AW">Aruba</option>
                                                    <option value="AC">Ascension Island</option>
                                                    <option value="AU">Australia</option>
                                                    <option value="AT">Austria</option>
                                                    <option value="AZ">Azerbaijan</option>
                                                    <option value="BS">Bahamas</option>
                                                    <option value="BH">Bahrain</option>
                                                    <option value="BD">Bangladesh</option>
                                                    <option value="BB">Barbados</option>
                                                    <option value="BY">Belarus</option>
                                                    <option value="BE">Belgium</option>
                                                    <option value="BZ">Belize</option>
                                                    <option value="BJ">Benin</option>
                                                    <option value="BM">Bermuda</option>
                                                    <option value="BT">Bhutan</option>
                                                    <option value="BO">Bolivia</option>
                                                    <option value="BA">Bosnia &amp; Herzegovina</option>
                                                    <option value="BW">Botswana</option>
                                                    <option value="BV">Bouvet Island</option>
                                                    <option value="BR">Brazil</option>
                                                    <option value="IO">British Indian Ocean Territory</option>
                                                    <option value="VG">British Virgin Islands</option>
                                                    <option value="BN">Brunei</option>
                                                    <option value="BG">Bulgaria</option>
                                                    <option value="BF">Burkina Faso</option>
                                                    <option value="BI">Burundi</option>
                                                    <option value="KH">Cambodia</option>
                                                    <option value="CM">Cameroon</option>
                                                    <option value="CA">Canada</option>
                                                    <option value="CV">Cape Verde</option>
                                                    <option value="BQ">Caribbean Netherlands</option>
                                                    <option value="KY">Cayman Islands</option>
                                                    <option value="CF">Central African Republic</option>
                                                    <option value="TD">Chad</option>
                                                    <option value="CL">Chile</option>
                                                    <option value="CN">China</option>
                                                    <option value="CO">Colombia</option>
                                                    <option value="KM">Comoros</option>
                                                    <option value="CG">Congo - Brazzaville</option>
                                                    <option value="CD">Congo - Kinshasa</option>
                                                    <option value="CK">Cook Islands</option>
                                                    <option value="CR">Costa Rica</option>
                                                    <option value="CI">Côte d’Ivoire</option>
                                                    <option value="HR">Croatia</option>
                                                    <option value="CW">Curaçao</option>
                                                    <option value="CY">Cyprus</option>
                                                    <option value="CZ">Czechia</option>
                                                    <option value="DK">Denmark</option>
                                                    <option value="DJ">Djibouti</option>
                                                    <option value="DM">Dominica</option>
                                                    <option value="DO">Dominican Republic</option>
                                                    <option value="EC">Ecuador</option>
                                                    <option value="EG">Egypt</option>
                                                    <option value="SV">El Salvador</option>
                                                    <option value="GQ">Equatorial Guinea</option>
                                                    <option value="ER">Eritrea</option>
                                                    <option value="EE">Estonia</option>
                                                    <option value="SZ">Eswatini</option>
                                                    <option value="ET">Ethiopia</option>
                                                    <option value="FK">Falkland Islands</option>
                                                    <option value="FO">Faroe Islands</option>
                                                    <option value="FJ">Fiji</option>
                                                    <option value="FI">Finland</option>
                                                    <option value="FR">France</option>
                                                    <option value="GF">French Guiana</option>
                                                    <option value="PF">French Polynesia</option>
                                                    <option value="TF">French Southern Territories</option>
                                                    <option value="GA">Gabon</option>
                                                    <option value="GM">Gambia</option>
                                                    <option value="GE">Georgia</option>
                                                    <option value="DE">Germany</option>
                                                    <option value="GH">Ghana</option>
                                                    <option value="GI">Gibraltar</option>
                                                    <option value="GR">Greece</option>
                                                    <option value="GL">Greenland</option>
                                                    <option value="GD">Grenada</option>
                                                    <option value="GP">Guadeloupe</option>
                                                    <option value="GU">Guam</option>
                                                    <option value="GT">Guatemala</option>
                                                    <option value="GG">Guernsey</option>
                                                    <option value="GN">Guinea</option>
                                                    <option value="GW">Guinea-Bissau</option>
                                                    <option value="GY">Guyana</option>
                                                    <option value="HT">Haiti</option>
                                                    <option value="HN">Honduras</option>
                                                    <option value="HK">Hong Kong SAR China</option>
                                                    <option value="HU">Hungary</option>
                                                    <option value="IS">Iceland</option>
                                                    <option value="IN">India</option>
                                                    <option value="ID">Indonesia</option>
                                                    <option value="IQ">Iraq</option>
                                                    <option value="IE">Ireland</option>
                                                    <option value="IM">Isle of Man</option>
                                                    <option value="IL">Israel</option>
                                                    <option value="IT">Italy</option>
                                                    <option value="JM">Jamaica</option>
                                                    <option value="JP">Japan</option>
                                                    <option value="JE">Jersey</option>
                                                    <option value="JO">Jordan</option>
                                                    <option value="KZ">Kazakhstan</option>
                                                    <option value="KE">Kenya</option>
                                                    <option value="KI">Kiribati</option>
                                                    <option value="XK">Kosovo</option>
                                                    <option value="KW">Kuwait</option>
                                                    <option value="KG">Kyrgyzstan</option>
                                                    <option value="LA">Laos</option>
                                                    <option value="LV">Latvia</option>
                                                    <option value="LB">Lebanon</option>
                                                    <option value="LS">Lesotho</option>
                                                    <option value="LR">Liberia</option>
                                                    <option value="LY">Libya</option>
                                                    <option value="LI">Liechtenstein</option>
                                                    <option value="LT">Lithuania</option>
                                                    <option value="LU">Luxembourg</option>
                                                    <option value="MO">Macao SAR China</option>
                                                    <option value="MG">Madagascar</option>
                                                    <option value="MW">Malawi</option>
                                                    <option value="MY">Malaysia</option>
                                                    <option value="MV">Maldives</option>
                                                    <option value="ML">Mali</option>
                                                    <option value="MT">Malta</option>
                                                    <option value="MQ">Martinique</option>
                                                    <option value="MR">Mauritania</option>
                                                    <option value="MU">Mauritius</option>
                                                    <option value="YT">Mayotte</option>
                                                    <option value="MX">Mexico</option>
                                                    <option value="MD">Moldova</option>
                                                    <option value="MC">Monaco</option>
                                                    <option value="MN">Mongolia</option>
                                                    <option value="ME">Montenegro</option>
                                                    <option value="MS">Montserrat</option>
                                                    <option value="MA">Morocco</option>
                                                    <option value="MZ">Mozambique</option>
                                                    <option value="MM">Myanmar (Burma)</option>
                                                    <option value="NA">Namibia</option>
                                                    <option value="NR">Nauru</option>
                                                    <option value="NP">Nepal</option>
                                                    <option value="NL">Netherlands</option>
                                                    <option value="NC">New Caledonia</option>
                                                    <option value="NZ">New Zealand</option>
                                                    <option value="NI">Nicaragua</option>
                                                    <option value="NE">Niger</option>
                                                    <option value="NG">Nigeria</option>
                                                    <option value="NU">Niue</option>
                                                    <option value="MK">North Macedonia</option>
                                                    <option value="NO">Norway</option>
                                                    <option value="OM">Oman</option>
                                                    <option value="PK">Pakistan</option>
                                                    <option value="PS">Palestinian Territories</option>
                                                    <option value="PA">Panama</option>
                                                    <option value="PG">Papua New Guinea</option>
                                                    <option value="PY">Paraguay</option>
                                                    <option value="PE">Peru</option>
                                                    <option value="PH">Philippines</option>
                                                    <option value="PN">Pitcairn Islands</option>
                                                    <option value="PL">Poland</option>
                                                    <option value="PT">Portugal</option>
                                                    <option value="PR">Puerto Rico</option>
                                                    <option value="QA">Qatar</option>
                                                    <option value="RE">Réunion</option>
                                                    <option value="RO">Romania</option>
                                                    <option value="RU">Russia</option>
                                                    <option value="RW">Rwanda</option>
                                                    <option value="WS">Samoa</option>
                                                    <option value="SM">San Marino</option>
                                                    <option value="ST">São Tomé &amp; Príncipe</option>
                                                    <option value="SA">Saudi Arabia</option>
                                                    <option value="SN">Senegal</option>
                                                    <option value="RS">Serbia</option>
                                                    <option value="SC">Seychelles</option>
                                                    <option value="SL">Sierra Leone</option>
                                                    <option value="SG">Singapore</option>
                                                    <option value="SX">Sint Maarten</option>
                                                    <option value="SK">Slovakia</option>
                                                    <option value="SI">Slovenia</option>
                                                    <option value="SB">Solomon Islands</option>
                                                    <option value="SO">Somalia</option>
                                                    <option value="ZA">South Africa</option>
                                                    <option value="GS">South Georgia &amp; South Sandwich Islands
                                                    </option>
                                                    <option value="KR">South Korea</option>
                                                    <option value="SS">South Sudan</option>
                                                    <option value="ES">Spain</option>
                                                    <option value="LK">Sri Lanka</option>
                                                    <option value="BL">St. Barthélemy</option>
                                                    <option value="SH">St. Helena</option>
                                                    <option value="KN">St. Kitts &amp; Nevis</option>
                                                    <option value="LC">St. Lucia</option>
                                                    <option value="MF">St. Martin</option>
                                                    <option value="PM">St. Pierre &amp; Miquelon</option>
                                                    <option value="VC">St. Vincent &amp; Grenadines</option>
                                                    <option value="SD">Sudan</option>
                                                    <option value="SR">Suriname</option>
                                                    <option value="SJ">Svalbard &amp; Jan Mayen</option>
                                                    <option value="SE">Sweden</option>
                                                    <option value="CH">Switzerland</option>
                                                    <option value="TW">Taiwan</option>
                                                    <option value="TJ">Tajikistan</option>
                                                    <option value="TZ">Tanzania</option>
                                                    <option value="TH">Thailand</option>
                                                    <option value="TL">Timor-Leste</option>
                                                    <option value="TG">Togo</option>
                                                    <option value="TK">Tokelau</option>
                                                    <option value="TO">Tonga</option>
                                                    <option value="TT">Trinidad &amp; Tobago</option>
                                                    <option value="TA">Tristan da Cunha</option>
                                                    <option value="TN">Tunisia</option>
                                                    <option value="TR">Turkey</option>
                                                    <option value="TM">Turkmenistan</option>
                                                    <option value="TC">Turks &amp; Caicos Islands</option>
                                                    <option value="TV">Tuvalu</option>
                                                    <option value="UG">Uganda</option>
                                                    <option value="UA">Ukraine</option>
                                                    <option value="AE">United Arab Emirates</option>
                                                    <option value="GB">United Kingdom</option>
                                                    <option value="US" selected>United States</option>
                                                    <option value="UY">Uruguay</option>
                                                    <option value="UZ">Uzbekistan</option>
                                                    <option value="VU">Vanuatu</option>
                                                    <option value="VA">Vatican City</option>
                                                    <option value="VE">Venezuela</option>
                                                    <option value="VN">Vietnam</option>
                                                    <option value="WF">Wallis &amp; Futuna</option>
                                                    <option value="EH">Western Sahara</option>
                                                    <option value="YE">Yemen</option>
                                                    <option value="ZM">Zambia</option>
                                                    <option value="ZW">Zimbabwe</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="p-3 mb-5 pb-3 rounded" style="border: 1px solid #eee;">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox"
                                                        id="disabledFieldsetCheck" checked>
                                                    <label class="form-check-label fw-bold"
                                                        for="disabledFieldsetCheck">
                                                        Securely save my information for 1-click checkout
                                                    </label>
                                                </div>
                                                <div class="ps-4">
                                                    <p class="ps-5 mb-0">Pay faster on FLIXZA GLOBAL LLC and everywhere
                                                        Link is accepted.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="py-5">
                                                <button type="submit" class="btn btn-primary rounded-2 w-100"
                                                    id="card-button"
                                                    data-secret="{{ $intent->client_secret }}">Subscribe</button>
                                                {{-- <a href="{{ route('pricing') }}" class="btn btn-primary rounded-2 w-100">VSubscribe</a> --}}
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <p class="pt-3">By confirming your subscription, you allow FLIXZA GLOBAL
                                                LLC to charge
                                                you for future payments in accordance with their terms. You can always
                                                cancel your subscription.</p>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @push('scripts')
        <script src="https://js.stripe.com/v3/"></script>
        <script>
            const stripe = Stripe('{{ env('STRIPE_KEY') }}')

            const elements = stripe.elements()
            const cardElement = elements.create('card')

            cardElement.mount('#card-element')

            const form = document.getElementById('payment-form')
            const cardBtn = document.getElementById('card-button')
            const cardHolderName = document.getElementById('card-holder-name')
            const cardHolderEmail = document.getElementById('card-holder-email')
            const billingCountry = document.getElementById('billingCountry')

            form.addEventListener('submit', async (e) => {
                e.preventDefault()

                cardBtn.disabled = true
                const {
                    setupIntent,
                    error
                } = await stripe.confirmCardSetup(
                    cardBtn.dataset.secret, {
                        payment_method: {
                            card: cardElement,
                            billing_details: {
                                name: cardHolderName.value,
                                email: cardHolderEmail.value,
                                address: {
                                    country: billingCountry.value
                                }
                            }
                        }
                    }
                )

                if (error) {
                    cardBtn.disabled = false
                    console.error(error)
                    // Optionally, display error message to the user
                } else {
                    let token = document.createElement('input')
                    token.setAttribute('type', 'hidden')
                    token.setAttribute('name', 'token')
                    token.setAttribute('value', setupIntent.payment_method)
                    form.appendChild(token)
                    form.submit()
                }
            })
        </script>
    @endpush

</x-admin-guest-layout>

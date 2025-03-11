<form action="{{ route('card.checkout') }}" method="GET" id="multiStepForm">
    {{-- @csrf --}}
    <!-- Step 1 -->
    @if ($cardProduct->card_type == 'team')
        <div class="border mt-30" style="border-radius: 8px">
            <div class="d-flex align-items-end">
                <div class="px-4 py-4 bg-light d-flex align-items-center">
                    <div class="pe-2">
                        <img class="" width="50px" src="{{ asset('images/user.webp') }}" alt="">
                    </div>
                    <div class="">
                        <input type="number" name="card_user"
                            class="p-2 py-0 text-center bg-transparent form-control rounded-0 user-slider-range"
                            placeholder="1" value="2" id="userSliderRange">
                    </div>
                </div>
                <div class="pb-2 w-100 pe-2">
                    <p class="mb-0 ps-2 text-muted"><small>Updated USERS</small></p>
                    <div class="ps-2 slidecontainer">
                        <input type="range" class="p-0 w-100" id="rangeSlider" min="2" max="100"
                            value="2">
                    </div>
                </div>
            </div>
        </div>
    @else
        <input type="hidden" name="card_user" value="1">
    @endif
    <div class="form-step" id="step1">
        <div class="radio-card-container">
            <label class="mt-10 radio-card ">
                <input type="radio" name="plan" value="{{ $cardProduct->price }}" required
                    onchange="goToNextStep(1)">
                <div class="card-content">
                    <div>
                        <h3 class="plan-title">Annual Plan</h3>
                        @if ($cardProduct->card_type == 'team')
                            <p class="mb-0"><span class="badge bg-success">Team Plans</span></p>
                        @else
                            <p class="mb-0"><span class="badge bg-success">Individual Plans</span></p>
                        @endif
                        <p class="mb-0"><small>Equal to $
                                {{ number_format($cardProduct->price / 12, 2) }}/mo</small>
                        </p>
                    </div>
                    <div class="text-end">
                        @if ($cardProduct->card_type == 'team')
                            <h3 class="amount-title">$ {{ $cardProduct->price * 2 }}</h3>
                        @else
                            <h3 class="amount-title">$ {{ $cardProduct->price }}</h3>
                        @endif
                        <p class="mb-0"><strong>$ <span class="annualCharge">{{ $cardProduct->price }}</span></strong>
                            <small class="text-muted">/Yearly</small>
                        </p>
                        <div class="link main-color">
                            <p style="background-color: #ff3e3b;" class="mb-0 text-white fw-bold badge fa-fade">Continue
                                <i class="fas fa-arrow-right"></i>
                            </p>
                        </div>
                    </div>
                </div>
            </label>
        </div>
    </div>
    <!-- Step 2 -->
    <div class="form-step" id="step2" style="display:none;">
        <div class="text-center pt-30">
            <h4 class="mb-0">2.Choose Card Type!</h4>
            <p class="mb-0">A card that suits you best, order now.</p>
        </div>
        <div class="mt-30 panel-group" id="accordion">
            <!-- Second Card -->
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="mb-0 panel-title">
                        <label class="mb-0 w-100">
                            <input type="radio" id="r12" name="card_preference"
                                data-card_price="{{ $cardProduct->plastic_card_price }}" value="plastic"
                                data-card_title="Plastic" />
                            <div class="custom-card d-flex justify-content-between align-items-center">
                                <div class="d-flex">
                                    <span>
                                        <svg xmlns="http://www.w3.org/2000/svg" version="1.1"
                                            xmlns:xlink="http://www.w3.org/1999/xlink" width="60" height="60"
                                            x="0" y="0" viewBox="0 0 510 510" style="enable-background:new 0 0 512 512"
                                            xml:space="preserve" class="">
                                            <g>
                                                <linearGradient id="a">
                                                    <stop offset="0" stop-color="#5a5a5a"></stop>
                                                    <stop offset="1" stop-color="#444"></stop>
                                                </linearGradient>
                                                <linearGradient xlink:href="#a" id="f" x1="109.411"
                                                    x2="308.901" y1="169.875" y2="309.368"
                                                    gradientUnits="userSpaceOnUse"></linearGradient>
                                                <linearGradient xlink:href="#a" id="g" x1="250.791"
                                                    x2="250.791" y1="65" y2="32.42"
                                                    gradientUnits="userSpaceOnUse"></linearGradient>
                                                <linearGradient xlink:href="#a" id="h" x1="188.149"
                                                    x2="188.149" y1="65" y2="32.42"
                                                    gradientUnits="userSpaceOnUse"></linearGradient>
                                                <linearGradient id="b">
                                                    <stop offset="0" stop-color="#1a1a1a" stop-opacity="0">
                                                    </stop>
                                                    <stop offset="1" stop-color="#1a1a1a"></stop>
                                                </linearGradient>
                                                <linearGradient xlink:href="#b" id="i" x1="341.149"
                                                    x2="384.195" y1="255" y2="255"
                                                    gradientUnits="userSpaceOnUse"></linearGradient>
                                                <linearGradient xlink:href="#b" id="j" x1="318.717"
                                                    x2="343.717" y1="117.428" y2="43.928"
                                                    gradientUnits="userSpaceOnUse"></linearGradient>
                                                <linearGradient xlink:href="#b" id="k" x1="231.149"
                                                    x2="231.149" y1="456.667" y2="502.005"
                                                    gradientUnits="userSpaceOnUse"></linearGradient>
                                                <linearGradient id="l" x1="136.149" x2="313.706"
                                                    y1="160" y2="337.557" gradientUnits="userSpaceOnUse">
                                                    <stop offset="0" stop-color="#eaf6ff"></stop>
                                                    <stop offset="1" stop-color="#b3dafe"></stop>
                                                </linearGradient>
                                                <linearGradient id="c">
                                                    <stop offset="0" stop-color="#d8ecfe" stop-opacity="0">
                                                    </stop>
                                                    <stop offset="1" stop-color="#678d98"></stop>
                                                </linearGradient>
                                                <linearGradient xlink:href="#c" id="m" x1="324.03"
                                                    x2="335.53" y1="105.733" y2="46.233"
                                                    gradientUnits="userSpaceOnUse"></linearGradient>
                                                <linearGradient xlink:href="#c" id="n" x1="308.519"
                                                    x2="316.019" y1="195.414" y2="79.914"
                                                    gradientUnits="userSpaceOnUse"></linearGradient>
                                                <linearGradient xlink:href="#c" id="o" x1="328.987"
                                                    x2="281.487" y1="224.679" y2="104.679"
                                                    gradientUnits="userSpaceOnUse"></linearGradient>
                                                <linearGradient xlink:href="#c" id="p" x1="322.14"
                                                    x2="218.14" y1="301.009" y2="197.009"
                                                    gradientUnits="userSpaceOnUse"></linearGradient>
                                                <linearGradient id="d">
                                                    <stop offset="0" stop-color="#bbec6c"></stop>
                                                    <stop offset=".29" stop-color="#abdc59"></stop>
                                                    <stop offset=".873" stop-color="#82b22a"></stop>
                                                    <stop offset="1" stop-color="#78a91f"></stop>
                                                </linearGradient>
                                                <linearGradient xlink:href="#d" id="q" x1="212.727"
                                                    x2="244.626" y1="191.597" y2="223.496"
                                                    gradientUnits="userSpaceOnUse"></linearGradient>
                                                <linearGradient id="r" x1="231.148" x2="231.148"
                                                    y1="220.053" y2="258.065" gradientUnits="userSpaceOnUse">
                                                    <stop offset="0" stop-color="#026841" stop-opacity="0">
                                                    </stop>
                                                    <stop offset=".238" stop-color="#076743" stop-opacity=".238">
                                                    </stop>
                                                    <stop offset=".52" stop-color="#156349" stop-opacity=".52">
                                                    </stop>
                                                    <stop offset=".823" stop-color="#2d5d52" stop-opacity=".823">
                                                    </stop>
                                                    <stop offset="1" stop-color="#3e5959"></stop>
                                                </linearGradient>
                                                <linearGradient xlink:href="#d" id="s" x1="267.761"
                                                    x2="292.607" y1="-10.663" y2="37.686"
                                                    gradientTransform="rotate(45 231.19 131.491)"
                                                    gradientUnits="userSpaceOnUse"></linearGradient>
                                                <linearGradient xlink:href="#d" id="t" x1="265.991"
                                                    x2="300.91" y1="43.872" y2="85.506"
                                                    gradientTransform="rotate(45 231.19 131.491)"
                                                    gradientUnits="userSpaceOnUse"></linearGradient>
                                                <linearGradient xlink:href="#d" id="u" x1="274.426"
                                                    x2="308.673" y1="96.76" y2="135.036"
                                                    gradientTransform="rotate(45 231.19 131.491)"
                                                    gradientUnits="userSpaceOnUse"></linearGradient>
                                                <linearGradient id="e">
                                                    <stop offset="0" stop-color="#0593fc"></stop>
                                                    <stop offset="1" stop-color="#2740b0"></stop>
                                                </linearGradient>
                                                <linearGradient xlink:href="#e" id="v" x1="176.199"
                                                    x2="176.199" y1="289.759" y2="367.785"
                                                    gradientUnits="userSpaceOnUse"></linearGradient>
                                                <linearGradient xlink:href="#e" id="w" x1="235.648"
                                                    x2="235.648" y1="289.759" y2="367.785"
                                                    gradientUnits="userSpaceOnUse"></linearGradient>
                                                <linearGradient xlink:href="#e" id="x" x1="287.098"
                                                    x2="287.098" y1="289.759" y2="367.785"
                                                    gradientUnits="userSpaceOnUse"></linearGradient>
                                                <path fill="url(#a)"
                                                    d="M360.134 510h-257.97c-18.408 0-33.33-14.922-33.33-33.33V33.33C68.833 14.922 83.756 0 102.163 0h257.97c18.408 0 33.33 14.922 33.33 33.33v443.34c.001 18.408-14.921 33.33-33.329 33.33z"
                                                    opacity="1" data-original="url(#a)"></path>
                                                <path fill="url(#a)"
                                                    d="M276.982 27.947H224.6c-4.143 0-7.5 3.358-7.5 7.5s3.357 7.5 7.5 7.5h52.382c4.143 0 7.5-3.358 7.5-7.5s-3.357-7.5-7.5-7.5z"
                                                    opacity="1" data-original="url(#a)"></path>
                                                <path fill="url(#a)"
                                                    d="M190.982 27.947h-5.667c-4.143 0-7.5 3.358-7.5 7.5s3.357 7.5 7.5 7.5h5.667c4.143 0 7.5-3.358 7.5-7.5s-3.357-7.5-7.5-7.5z"
                                                    opacity="1" data-original="url(#a)"></path>
                                                <path fill="url(#b)"
                                                    d="M360.134 0h-75.335v510h75.335c18.408 0 33.33-14.922 33.33-33.33V33.33c0-18.408-14.922-33.33-33.33-33.33z"
                                                    opacity="1" data-original="url(#b)" class=""></path>
                                                <path fill="url(#b)"
                                                    d="m393.464 91.564-60.815-60.815h-76.378l137.193 137.193z"
                                                    opacity="1" data-original="url(#b)" class=""></path>
                                                <path fill="url(#b)"
                                                    d="M68.833 389.177v87.493c0 18.408 14.922 33.33 33.33 33.33h257.97c18.408 0 33.33-14.922 33.33-33.33v-87.493z"
                                                    opacity="1" data-original="url(#b)" class=""></path>
                                                <path fill="url(#l)"
                                                    d="M338.399 27.947h-21.922c-8.182 0-14.815 6.633-14.815 14.815 0 8.242-6.682 14.924-14.924 14.924H175.559c-8.242 0-14.924-6.682-14.924-14.924 0-8.182-6.633-14.815-14.815-14.815h-21.922c-15.902 0-28.793 12.891-28.793 28.793v396.52c0 15.902 12.891 28.793 28.793 28.793h214.5c15.902 0 28.793-12.891 28.793-28.793V56.74c.001-15.902-12.89-28.793-28.792-28.793z"
                                                    opacity="1" data-original="url(#l)" class=""></path>
                                                <path fill="url(#c)"
                                                    d="M367.192 141.67V65.292l-34.543-34.544h-24.818c-3.731 2.69-6.169 7.062-6.169 12.013 0 8.242-6.682 14.924-14.924 14.924h-3.53z"
                                                    opacity="1" data-original="url(#c)" class=""></path>
                                                <path fill="url(#c)"
                                                    d="m256.271 90.478 110.921 110.921v-79.084l-24.17-24.17z"
                                                    opacity="1" data-original="url(#c)" class=""></path>
                                                <path fill="url(#c)"
                                                    d="m250.791 144.987 116.401 116.401V203.34l-64.683-64.683z"
                                                    opacity="1" data-original="url(#c)" class=""></path>
                                                <path fill="url(#c)"
                                                    d="M367.192 280.824 263.768 177.399l-65.238 65.238 168.662 168.662z"
                                                    opacity="1" data-original="url(#c)" class=""></path>
                                                <circle cx="231.149" cy="210.018" r="46.13" fill="url(#q)"
                                                    opacity="1" data-original="url(#q)"></circle>
                                                <path fill="url(#r)"
                                                    d="M231.149 256.148c25.477 0 46.13-20.653 46.13-46.13h-92.26c0 25.477 20.653 46.13 46.13 46.13z"
                                                    opacity="1" data-original="url(#r)"></path>
                                                <path fill="url(#d)"
                                                    d="M384.532 56.635C351.752 23.855 310.218 5.005 267.386.11c-9.855-1.126-18.529 6.513-18.669 16.431v.008c-.123 8.678 6.408 15.916 15.03 16.914 35.479 4.107 69.871 19.741 97.044 46.913s42.806 61.564 46.913 97.044c.998 8.621 8.236 15.152 16.914 15.03h.008c9.918-.14 17.557-8.814 16.431-18.669-4.895-42.832-23.745-84.366-56.525-117.146z"
                                                    opacity="1" data-original="url(#d)"></path>
                                                <path fill="url(#d)"
                                                    d="M343.022 98.145c-21.307-21.307-47.861-34.235-75.539-38.79-10.165-1.673-19.462 6.011-19.608 16.312-.117 8.248 5.765 15.443 13.907 16.767 21.066 3.424 41.288 13.243 57.499 29.453s26.03 36.432 29.453 57.499c1.323 8.142 8.518 14.023 16.767 13.907 10.301-.146 17.985-9.443 16.312-19.608-4.556-27.679-17.484-54.233-38.791-75.54z"
                                                    opacity="1" data-original="url(#d)"></path>
                                                <path fill="url(#d)"
                                                    d="M302.509 138.658c-9.785-9.785-21.453-16.563-33.849-20.336-10.662-3.245-21.452 4.703-21.609 15.846-.105 7.417 4.651 14.086 11.749 16.241a47.824 47.824 0 0 1 19.969 11.99 47.813 47.813 0 0 1 11.99 19.969c2.155 7.098 8.824 11.854 16.241 11.749 11.144-.158 19.091-10.947 15.846-21.609-3.773-12.398-10.552-24.066-20.337-33.85z"
                                                    opacity="1" data-original="url(#d)"></path>
                                                <path fill="url(#e)"
                                                    d="m185.25 355.052-19.001-34.602v34.002c0 3.2-3.9 4.8-7.801 4.8s-7.801-1.6-7.801-4.8v-63.504c0-3.3 3.9-4.8 7.801-4.8 5.601 0 7.7.5 11.501 7.8l16.2 30.902v-34.002c0-3.3 3.9-4.7 7.801-4.7s7.801 1.4 7.801 4.7v63.604c0 3.2-3.9 4.8-7.801 4.8-3.601 0-6.801-.7-8.7-4.2z"
                                                    opacity="1" data-original="url(#e)"></path>
                                                <path fill="url(#e)"
                                                    d="M212.547 290.948c0-3.2 3.399-4.8 6.8-4.8h34.702c3.301 0 4.7 3.5 4.7 6.7 0 3.701-1.7 6.901-4.7 6.901h-25.901v16.901h15.101c3.001 0 4.7 2.9 4.7 6.1 0 2.7-1.399 5.9-4.7 5.9h-15.101v25.802c0 3.2-3.9 4.8-7.801 4.8-3.899 0-7.8-1.6-7.8-4.8z"
                                                    opacity="1" data-original="url(#e)"></path>
                                                <path fill="url(#e)"
                                                    d="M287.148 299.749c-5.7 0-9 3.2-9 10v26.501c0 6.8 3.3 10 9.101 10 8 0 8.5-6.1 8.801-10 .3-3.7 3.7-4.7 7.7-4.7 5.4 0 7.9 1.4 7.9 7.4 0 13.301-10.801 20.901-25.102 20.901-13.101 0-24.002-6.4-24.002-23.602v-26.501c0-17.201 10.901-23.602 24.002-23.602 14.301 0 25.102 7.201 25.102 19.901 0 6-2.5 7.4-7.801 7.4-4.2 0-7.601-1.1-7.8-4.7-.1-2.598-.4-8.998-8.901-8.998z"
                                                    opacity="1" data-original="url(#e)"></path>
                                                <g fill="#6cabca">
                                                    <path
                                                        d="M259.159 420.427h-5.777c-5.63 0-10.194 4.564-10.194 10.194s4.564 10.194 10.194 10.194h5.777c5.63 0 10.194-4.564 10.194-10.194.001-5.631-4.564-10.194-10.194-10.194zM223.111 420.427h-19.973c-5.63 0-10.194 4.564-10.194 10.194s4.564 10.194 10.194 10.194h19.973c5.63 0 10.194-4.564 10.194-10.194s-4.564-10.194-10.194-10.194zM267.72 400.28c0-5.63-4.564-10.194-10.194-10.194H166.36c-5.63 0-10.194 4.564-10.194 10.194s4.564 10.194 10.194 10.194h91.166c5.63 0 10.194-4.563 10.194-10.194zM295.937 390.086h-5.777c-5.63 0-10.194 4.564-10.194 10.194s4.564 10.194 10.194 10.194h5.777c5.63 0 10.194-4.564 10.194-10.194s-4.564-10.194-10.194-10.194z"
                                                        fill="#6cabca" opacity="1" data-original="#6cabca"></path>
                                                </g>
                                            </g>
                                        </svg>
                                    </span>
                                    <div>
                                        <h4 class="px-3 mb-0">Plastic Card</h4>
                                        <p class="mb-0 ps-3" style="font-size: 12px">Extend your branding with a
                                            durable <br> and customizable plastic card.</p>
                                    </div>
                                </div>
                                <div>
                                    <h4 class="px-3 mb-0"> <i class="fas fa-circle-check text-danger"></i>
                                        {{ $cardProduct->plastic_card_price }} $</h4>
                                </div>
                            </div>
                        </label>
                    </h4>
                </div>
                <div id="collapseTwo" class="panel-collapse collapse">
                    <div class="panel-body">
                        <div class="pb-3">
                            <div class="image-slider">
                                <div class="mt-3">
                                    <img class="img-fluid rounded-2"
                                        src="{{ asset('images/Black/BlackMockup.webp') }}" alt="">
                                </div>
                                <div class="mt-3">
                                    <img class="img-fluid rounded-2"
                                        src="{{ asset('images/Black/BlackMockup-3.webp') }}" alt="">
                                </div>
                                <div class="mt-3">
                                    <img class="img-fluid rounded-2"
                                        src="{{ asset('images/Gold/GoldMockup-4.webp') }}" alt="">
                                </div>
                                <div class="mt-3">
                                    <img class="img-fluid rounded-2"
                                        src="{{ asset('images/Black/BlackMockup-5.webp') }}" alt="">
                                </div>
                                <div class="mt-3">
                                    <img class="img-fluid rounded-2"
                                        src="{{ asset('images/Gold/GoldMockup-6.webp') }}" alt="">
                                </div>
                                <div class="mt-3">
                                    <img class="img-fluid rounded-2"
                                        src="{{ asset('images/Black/BlackMockup-7.webp') }}" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Third Card -->
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="mb-0 panel-title">
                        <label class="mb-0 w-100">
                            <input type="radio" id="r13" name="card_preference" value="metal"
                                data-card_title="Metal" data-card_price="{{ $cardProduct->metal_card_price }}" />
                            <div class="custom-card d-flex justify-content-between align-items-center">
                                <div class="d-flex">
                                    <span>
                                        <svg xmlns="http://www.w3.org/2000/svg" version="1.1"
                                            xmlns:xlink="http://www.w3.org/1999/xlink" width="60" height="60"
                                            x="0" y="0" viewBox="0 0 510 510"
                                            style="enable-background:new 0 0 512 512" xml:space="preserve"
                                            class="">
                                            <g>
                                                <linearGradient id="a">
                                                    <stop offset="0" stop-color="#5a5a5a"></stop>
                                                    <stop offset="1" stop-color="#444"></stop>
                                                </linearGradient>
                                                <linearGradient xlink:href="#a" id="f" x1="109.411"
                                                    x2="308.901" y1="169.875" y2="309.368"
                                                    gradientUnits="userSpaceOnUse"></linearGradient>
                                                <linearGradient xlink:href="#a" id="g" x1="250.791"
                                                    x2="250.791" y1="65" y2="32.42"
                                                    gradientUnits="userSpaceOnUse"></linearGradient>
                                                <linearGradient xlink:href="#a" id="h" x1="188.149"
                                                    x2="188.149" y1="65" y2="32.42"
                                                    gradientUnits="userSpaceOnUse"></linearGradient>
                                                <linearGradient id="b">
                                                    <stop offset="0" stop-color="#1a1a1a" stop-opacity="0">
                                                    </stop>
                                                    <stop offset="1" stop-color="#1a1a1a"></stop>
                                                </linearGradient>
                                                <linearGradient xlink:href="#b" id="i" x1="341.149"
                                                    x2="384.195" y1="255" y2="255"
                                                    gradientUnits="userSpaceOnUse"></linearGradient>
                                                <linearGradient xlink:href="#b" id="j" x1="318.717"
                                                    x2="343.717" y1="117.428" y2="43.928"
                                                    gradientUnits="userSpaceOnUse"></linearGradient>
                                                <linearGradient xlink:href="#b" id="k" x1="231.149"
                                                    x2="231.149" y1="456.667" y2="502.005"
                                                    gradientUnits="userSpaceOnUse"></linearGradient>
                                                <linearGradient id="l" x1="136.149" x2="313.706"
                                                    y1="160" y2="337.557" gradientUnits="userSpaceOnUse">
                                                    <stop offset="0" stop-color="#eaf6ff"></stop>
                                                    <stop offset="1" stop-color="#b3dafe"></stop>
                                                </linearGradient>
                                                <linearGradient id="c">
                                                    <stop offset="0" stop-color="#d8ecfe" stop-opacity="0">
                                                    </stop>
                                                    <stop offset="1" stop-color="#678d98"></stop>
                                                </linearGradient>
                                                <linearGradient xlink:href="#c" id="m" x1="324.03"
                                                    x2="335.53" y1="105.733" y2="46.233"
                                                    gradientUnits="userSpaceOnUse"></linearGradient>
                                                <linearGradient xlink:href="#c" id="n" x1="308.519"
                                                    x2="316.019" y1="195.414" y2="79.914"
                                                    gradientUnits="userSpaceOnUse"></linearGradient>
                                                <linearGradient xlink:href="#c" id="o" x1="328.987"
                                                    x2="281.487" y1="224.679" y2="104.679"
                                                    gradientUnits="userSpaceOnUse"></linearGradient>
                                                <linearGradient xlink:href="#c" id="p" x1="322.14"
                                                    x2="218.14" y1="301.009" y2="197.009"
                                                    gradientUnits="userSpaceOnUse"></linearGradient>
                                                <linearGradient id="d">
                                                    <stop offset="0" stop-color="#bbec6c"></stop>
                                                    <stop offset=".29" stop-color="#abdc59"></stop>
                                                    <stop offset=".873" stop-color="#82b22a"></stop>
                                                    <stop offset="1" stop-color="#78a91f"></stop>
                                                </linearGradient>
                                                <linearGradient xlink:href="#d" id="q" x1="212.727"
                                                    x2="244.626" y1="191.597" y2="223.496"
                                                    gradientUnits="userSpaceOnUse"></linearGradient>
                                                <linearGradient id="r" x1="231.148" x2="231.148"
                                                    y1="220.053" y2="258.065" gradientUnits="userSpaceOnUse">
                                                    <stop offset="0" stop-color="#026841" stop-opacity="0">
                                                    </stop>
                                                    <stop offset=".238" stop-color="#076743" stop-opacity=".238">
                                                    </stop>
                                                    <stop offset=".52" stop-color="#156349" stop-opacity=".52">
                                                    </stop>
                                                    <stop offset=".823" stop-color="#2d5d52" stop-opacity=".823">
                                                    </stop>
                                                    <stop offset="1" stop-color="#3e5959"></stop>
                                                </linearGradient>
                                                <linearGradient xlink:href="#d" id="s" x1="267.761"
                                                    x2="292.607" y1="-10.663" y2="37.686"
                                                    gradientTransform="rotate(45 231.19 131.491)"
                                                    gradientUnits="userSpaceOnUse"></linearGradient>
                                                <linearGradient xlink:href="#d" id="t" x1="265.991"
                                                    x2="300.91" y1="43.872" y2="85.506"
                                                    gradientTransform="rotate(45 231.19 131.491)"
                                                    gradientUnits="userSpaceOnUse"></linearGradient>
                                                <linearGradient xlink:href="#d" id="u" x1="274.426"
                                                    x2="308.673" y1="96.76" y2="135.036"
                                                    gradientTransform="rotate(45 231.19 131.491)"
                                                    gradientUnits="userSpaceOnUse"></linearGradient>
                                                <linearGradient id="e">
                                                    <stop offset="0" stop-color="#0593fc"></stop>
                                                    <stop offset="1" stop-color="#2740b0"></stop>
                                                </linearGradient>
                                                <linearGradient xlink:href="#e" id="v" x1="176.199"
                                                    x2="176.199" y1="289.759" y2="367.785"
                                                    gradientUnits="userSpaceOnUse"></linearGradient>
                                                <linearGradient xlink:href="#e" id="w" x1="235.648"
                                                    x2="235.648" y1="289.759" y2="367.785"
                                                    gradientUnits="userSpaceOnUse"></linearGradient>
                                                <linearGradient xlink:href="#e" id="x" x1="287.098"
                                                    x2="287.098" y1="289.759" y2="367.785"
                                                    gradientUnits="userSpaceOnUse"></linearGradient>
                                                <path fill="url(#a)"
                                                    d="M360.134 510h-257.97c-18.408 0-33.33-14.922-33.33-33.33V33.33C68.833 14.922 83.756 0 102.163 0h257.97c18.408 0 33.33 14.922 33.33 33.33v443.34c.001 18.408-14.921 33.33-33.329 33.33z"
                                                    opacity="1" data-original="url(#a)"></path>
                                                <path fill="url(#a)"
                                                    d="M276.982 27.947H224.6c-4.143 0-7.5 3.358-7.5 7.5s3.357 7.5 7.5 7.5h52.382c4.143 0 7.5-3.358 7.5-7.5s-3.357-7.5-7.5-7.5z"
                                                    opacity="1" data-original="url(#a)"></path>
                                                <path fill="url(#a)"
                                                    d="M190.982 27.947h-5.667c-4.143 0-7.5 3.358-7.5 7.5s3.357 7.5 7.5 7.5h5.667c4.143 0 7.5-3.358 7.5-7.5s-3.357-7.5-7.5-7.5z"
                                                    opacity="1" data-original="url(#a)"></path>
                                                <path fill="url(#b)"
                                                    d="M360.134 0h-75.335v510h75.335c18.408 0 33.33-14.922 33.33-33.33V33.33c0-18.408-14.922-33.33-33.33-33.33z"
                                                    opacity="1" data-original="url(#b)" class=""></path>
                                                <path fill="url(#b)"
                                                    d="m393.464 91.564-60.815-60.815h-76.378l137.193 137.193z"
                                                    opacity="1" data-original="url(#b)" class=""></path>
                                                <path fill="url(#b)"
                                                    d="M68.833 389.177v87.493c0 18.408 14.922 33.33 33.33 33.33h257.97c18.408 0 33.33-14.922 33.33-33.33v-87.493z"
                                                    opacity="1" data-original="url(#b)" class=""></path>
                                                <path fill="url(#l)"
                                                    d="M338.399 27.947h-21.922c-8.182 0-14.815 6.633-14.815 14.815 0 8.242-6.682 14.924-14.924 14.924H175.559c-8.242 0-14.924-6.682-14.924-14.924 0-8.182-6.633-14.815-14.815-14.815h-21.922c-15.902 0-28.793 12.891-28.793 28.793v396.52c0 15.902 12.891 28.793 28.793 28.793h214.5c15.902 0 28.793-12.891 28.793-28.793V56.74c.001-15.902-12.89-28.793-28.792-28.793z"
                                                    opacity="1" data-original="url(#l)" class=""></path>
                                                <path fill="url(#c)"
                                                    d="M367.192 141.67V65.292l-34.543-34.544h-24.818c-3.731 2.69-6.169 7.062-6.169 12.013 0 8.242-6.682 14.924-14.924 14.924h-3.53z"
                                                    opacity="1" data-original="url(#c)" class=""></path>
                                                <path fill="url(#c)"
                                                    d="m256.271 90.478 110.921 110.921v-79.084l-24.17-24.17z"
                                                    opacity="1" data-original="url(#c)" class=""></path>
                                                <path fill="url(#c)"
                                                    d="m250.791 144.987 116.401 116.401V203.34l-64.683-64.683z"
                                                    opacity="1" data-original="url(#c)" class=""></path>
                                                <path fill="url(#c)"
                                                    d="M367.192 280.824 263.768 177.399l-65.238 65.238 168.662 168.662z"
                                                    opacity="1" data-original="url(#c)" class=""></path>
                                                <circle cx="231.149" cy="210.018" r="46.13" fill="url(#q)"
                                                    opacity="1" data-original="url(#q)"></circle>
                                                <path fill="url(#r)"
                                                    d="M231.149 256.148c25.477 0 46.13-20.653 46.13-46.13h-92.26c0 25.477 20.653 46.13 46.13 46.13z"
                                                    opacity="1" data-original="url(#r)"></path>
                                                <path fill="url(#d)"
                                                    d="M384.532 56.635C351.752 23.855 310.218 5.005 267.386.11c-9.855-1.126-18.529 6.513-18.669 16.431v.008c-.123 8.678 6.408 15.916 15.03 16.914 35.479 4.107 69.871 19.741 97.044 46.913s42.806 61.564 46.913 97.044c.998 8.621 8.236 15.152 16.914 15.03h.008c9.918-.14 17.557-8.814 16.431-18.669-4.895-42.832-23.745-84.366-56.525-117.146z"
                                                    opacity="1" data-original="url(#d)"></path>
                                                <path fill="url(#d)"
                                                    d="M343.022 98.145c-21.307-21.307-47.861-34.235-75.539-38.79-10.165-1.673-19.462 6.011-19.608 16.312-.117 8.248 5.765 15.443 13.907 16.767 21.066 3.424 41.288 13.243 57.499 29.453s26.03 36.432 29.453 57.499c1.323 8.142 8.518 14.023 16.767 13.907 10.301-.146 17.985-9.443 16.312-19.608-4.556-27.679-17.484-54.233-38.791-75.54z"
                                                    opacity="1" data-original="url(#d)"></path>
                                                <path fill="url(#d)"
                                                    d="M302.509 138.658c-9.785-9.785-21.453-16.563-33.849-20.336-10.662-3.245-21.452 4.703-21.609 15.846-.105 7.417 4.651 14.086 11.749 16.241a47.824 47.824 0 0 1 19.969 11.99 47.813 47.813 0 0 1 11.99 19.969c2.155 7.098 8.824 11.854 16.241 11.749 11.144-.158 19.091-10.947 15.846-21.609-3.773-12.398-10.552-24.066-20.337-33.85z"
                                                    opacity="1" data-original="url(#d)"></path>
                                                <path fill="url(#e)"
                                                    d="m185.25 355.052-19.001-34.602v34.002c0 3.2-3.9 4.8-7.801 4.8s-7.801-1.6-7.801-4.8v-63.504c0-3.3 3.9-4.8 7.801-4.8 5.601 0 7.7.5 11.501 7.8l16.2 30.902v-34.002c0-3.3 3.9-4.7 7.801-4.7s7.801 1.4 7.801 4.7v63.604c0 3.2-3.9 4.8-7.801 4.8-3.601 0-6.801-.7-8.7-4.2z"
                                                    opacity="1" data-original="url(#e)"></path>
                                                <path fill="url(#e)"
                                                    d="M212.547 290.948c0-3.2 3.399-4.8 6.8-4.8h34.702c3.301 0 4.7 3.5 4.7 6.7 0 3.701-1.7 6.901-4.7 6.901h-25.901v16.901h15.101c3.001 0 4.7 2.9 4.7 6.1 0 2.7-1.399 5.9-4.7 5.9h-15.101v25.802c0 3.2-3.9 4.8-7.801 4.8-3.899 0-7.8-1.6-7.8-4.8z"
                                                    opacity="1" data-original="url(#e)"></path>
                                                <path fill="url(#e)"
                                                    d="M287.148 299.749c-5.7 0-9 3.2-9 10v26.501c0 6.8 3.3 10 9.101 10 8 0 8.5-6.1 8.801-10 .3-3.7 3.7-4.7 7.7-4.7 5.4 0 7.9 1.4 7.9 7.4 0 13.301-10.801 20.901-25.102 20.901-13.101 0-24.002-6.4-24.002-23.602v-26.501c0-17.201 10.901-23.602 24.002-23.602 14.301 0 25.102 7.201 25.102 19.901 0 6-2.5 7.4-7.801 7.4-4.2 0-7.601-1.1-7.8-4.7-.1-2.598-.4-8.998-8.901-8.998z"
                                                    opacity="1" data-original="url(#e)"></path>
                                                <g fill="#6cabca">
                                                    <path
                                                        d="M259.159 420.427h-5.777c-5.63 0-10.194 4.564-10.194 10.194s4.564 10.194 10.194 10.194h5.777c5.63 0 10.194-4.564 10.194-10.194.001-5.631-4.564-10.194-10.194-10.194zM223.111 420.427h-19.973c-5.63 0-10.194 4.564-10.194 10.194s4.564 10.194 10.194 10.194h19.973c5.63 0 10.194-4.564 10.194-10.194s-4.564-10.194-10.194-10.194zM267.72 400.28c0-5.63-4.564-10.194-10.194-10.194H166.36c-5.63 0-10.194 4.564-10.194 10.194s4.564 10.194 10.194 10.194h91.166c5.63 0 10.194-4.563 10.194-10.194zM295.937 390.086h-5.777c-5.63 0-10.194 4.564-10.194 10.194s4.564 10.194 10.194 10.194h5.777c5.63 0 10.194-4.564 10.194-10.194s-4.564-10.194-10.194-10.194z"
                                                        fill="#6cabca" opacity="1" data-original="#6cabca"></path>
                                                </g>
                                            </g>
                                        </svg>
                                    </span>
                                    <div>
                                        <h4 class="px-3 mb-0">Metal Card</h4>
                                        <p class="mb-0 ps-3" style="font-size: 12px">Enhance customer engagement with
                                            a sleek <br> professional design.</p>
                                    </div>
                                </div>
                                <div>
                                    <h4 class="px-3 mb-0"><i class="fas fa-circle-check text-danger"></i>
                                        {{ $cardProduct->metal_card_price }} $</h4>
                                </div>
                            </div>
                        </label>
                    </h4>
                </div>
                <div id="collapseThree" class="panel-collapse collapse">
                    <div class="panel-body">
                        <div class="pb-3">
                            <div class="image-slider">
                                <div class="mt-3">
                                    <img class="img-fluid rounded-2" src="{{ asset('images/Gold/GoldMockup.webp') }}"
                                        alt="">
                                </div>
                                <div class="mt-3">
                                    <img class="img-fluid rounded-2"
                                        src="{{ asset('images/Gold/GoldMockup-3.webp') }}" alt="">
                                </div>
                                <div class="mt-3">
                                    <img class="img-fluid rounded-2"
                                        src="{{ asset('images/Black/BlackMockup-4.webp') }}" alt="">
                                </div>
                                <div class="mt-3">
                                    <img class="img-fluid rounded-2"
                                        src="{{ asset('images/Gold/GoldMockup-5.webp') }}" alt="">
                                </div>
                                <div class="mt-3">
                                    <img class="img-fluid rounded-2"
                                        src="{{ asset('images/Black/BlackMockup-6.webp') }}" alt="">
                                </div>
                                <div class="mt-3">
                                    <img class="img-fluid rounded-2"
                                        src="{{ asset('images/Gold/GoldMockup-7.webp') }}" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="mt-30 d-flex justify-content-between">
            <button type="button" onclick="previousStep(2)" class="continue-back"><i
                    class="fas fa-arrow-left pe-2"></i> Back</button>
            <div>
                <p class="mb-0">Navigate to the Next or Previous Steps</p>
            </div>
            <button type="button" id="nextBtn2" class="continue-next" style="border-radius: 10px;"
                onclick="goToNextStep(2)" disabled>Continue <i class="fas fa-arrow-right"></i></button>
        </div>
    </div>
    <!-- Step 3 -->
    <div class="form-step" id="step3" style="display:none;">
        <div
            class="pb-3 mb-0 card-design-box d-flex justify-content-center align-items-center position-relative flex-column">
            <div class="main-img position-relative">
                <!-- Main Card Image -->
                <img class="img-fluid" id="mainCardImage"
                    src="{{ asset('images/Choosen-card/BlackCardBack-mockup.webp') }}" alt="">
                <div class="card-logo position-absolute">
                    <!-- Image preview will be displayed here -->
                    <img id="logoPreview" width="50px" height="50px" style="object-fit: contain;"
                        src="{{ asset('images/logo.png') }}" alt="Card Logo Preview">
                </div>
                <div class="card-info position-absolute">
                    <p class="mb-0 fw-bold">MD BADRODDUJA SAGAR</p>
                    <p class="mb-0"><small>President & CEO</small></p>
                </div>
            </div>
            <div class="text-center pt-30">
                <h4 class="mb-0">3.Personalize Your Card</h4>
                <p class="mb-0">Customize your card with unique styles and features.</p>
                <p>All fields marked with <span class="text-danger">*</span> are required.</p>
            </div>
        </div>
        <div class="mt-5 chosen-card-bg">
            <label>Choose Card Design <span class="text-danger">*</span></label>
            <div class="card-selection">
                <!-- Example of image choices -->
                <label for="design1">
                    <input type="radio" name="card_design" id="design1" class="card-design-option"
                        value="design1" style="display:none;" checked>
                    <img src="{{ asset('images/Choosen-card/BlackCardBack-mockup.webp') }}" alt="Card Design 1"
                        class="img-choice" data-image="{{ asset('images/Choosen-card/BlackCardBack-mockup.webp') }}">
                </label>
                <label for="design2">
                    <input type="radio" name="card_design" id="design2" class="card-design-option"
                        value="design2" style="display:none;">
                    <img src="{{ asset('images/Choosen-card/GoldCardBack-mockup.webp') }}" alt="Card Design 2"
                        class="img-choice" data-image="{{ asset('images/Choosen-card/GoldCardBack-mockup.webp') }}">
                </label>
            </div>
        </div>

        <div class="mt-3 row">
            <div class="col-6">
                <div class="mt-5">
                    <label for="card_logo">Upload Logo <span class="text-danger">*</span></label>
                    <input class="border form-control" type="file" name="card_logo" id="card_logo"
                        onchange="previewLogo()">
                </div>
            </div>
            <div class="col-6">
                <div class="mt-5">
                    <label for="card_holder_name">Card Holder Name <span class="text-danger">*</span></label>
                    <input class="border form-control" type="text" name="card_holder_name" id="card_holder_name"
                        oninput="previewName()" placeholder="Enter Card Holder Name">
                </div>
            </div>
            <div class="col-6">
                <div class="mt-5">
                    <label for="card_holder_designation">Card Holder Designation <span
                            class="text-danger">*</span></label>
                    <input class="border form-control" type="text" name="card_holder_designation"
                        id="card_holder_designation" oninput="previewDesignation()"
                        placeholder="Enter Card Holder Designation">
                </div>
            </div>
            <div class="col-6">
                <div class="mt-5">
                    <label for="card_color">Choose Card Color</label>
                    <select class="form-select" name="card_color" aria-label="Default select example"
                        id="card_color" onchange="previewName()"
                        style="border-radius: 14px; font-weight: 400; padding: 14px 40px 14px 20px !important; border-radius: 12px;">
                        <option>Card Color</option>
                        <option value="black">Black</option>
                        <option value="gold">Gold</option>
                    </select>
                </div>
            </div>
            <div class="col-12">
                <div class="mt-5">
                    <label for="design_note">Design Details</label>
                    <textarea class="border form-control" name="design_note" id="design_note" rows="3"
                        placeholder="Examples: 'Logo in the middle', 'Name and title bottom left, logo top right'"></textarea>
                </div>
            </div>
        </div>
        <div class="mt-30 d-flex justify-content-between">
            <button type="button" onclick="previousStep(3)" class="continue-back"><i class="fas fa-angle-left"></i>
                Back</button>
            <div>
                <p class="mb-0">Navigate to the Next or Previous Steps</p>
            </div>
            <button type="button" id="nextBtn3" class="continue-next" style="border-radius: 10px;"
                onclick="goToNextStep(3)" disabled>Continue <i class="fas fa-arrow-right"></i></button>

        </div>
    </div>
    <div class="form-step" id="step4" style="display:none;">
        <div>
            <!-- From Uiverse.io by Pradeepsaranbishnoi -->
            <h5 class="mt-30">Select Your Courier Preferences</h5>
            <label class="mt-20">Shipping Method <span class="text-danger">*</span></label>
            @php
                $totalShippingMethods = count($shippingMethods);
                $inputType = $totalShippingMethods > 1 ? 'radio' : 'checkbox'; // If one item, use checkbox, else radio
            @endphp
            @foreach ($shippingMethods as $index => $shippingMethod)
                <div class="radio-input">
                    <label class="label">
                        <input type="{{ $inputType }}" id="regularMail{{ $shippingMethod->id }}"
                            name="shipping_charge" data-shipping_title="{{ $shippingMethod->title }}"
                            value="{{ $shippingMethod->price }}" required />
                        <div>
                            <p class="mb-0 text fw-bold">{{ $shippingMethod->title }} (${{ $shippingMethod->price }})</p>
                            <p class="mb-0 text">Send the shipping card via this courier.</p>
                        </div>
                    </label>
                </div>
            @endforeach
        </div>
        <div>
            <div id="accordionContainer" style="display: none;">
                <div class="mt-30 accordion" id="accordionExample">
                    <div class="accordion-item">
                        <h4 class="accordion-header rounded-0" id="headingOne">
                            <button class="accordion-button rounded-0" type="button" data-bs-toggle="collapse"
                                data-bs-target="#orderSummary" aria-expanded="true" aria-controls="orderSummary">
                                Order Summary
                                {{-- <span class="ms-4 fw-boldest text-end summary"></span> --}}
                            </button>
                        </h4>
                        <div id="orderSummary" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                            data-bs-parent="#accordionExample">
                            <div class="py-4 mt-0 border accordion-body">
                                <div class="mb-5 d-flex justify-content-between align-items-center">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <img class="img-fluid" width="50"
                                            src="{{ asset('images/Black/BlackCard.webp') }}" alt="">
                                        <p class="mb-0 ps-4">{{ $cardProduct->title }} Plans</p>
                                    </div>
                                    <input type="hidden" name="subtotal" id="hidden-subtotal">
                                    <input type="hidden" name="plan_id" value="{{ $cardProduct->id }}"
                                        id="plan_id">
                                    <div>
                                        <p class="mb-0">$ {{ $cardProduct->price }} * <span
                                                class="userSummary me-5"></span> <span class="planSummary"></span>
                                        </p>
                                    </div>
                                </div>
                                <div class="mb-5 d-flex justify-content-between align-items-center">
                                    <div class="d-flex align-items-center">
                                        <img class="img-fluid" width="50"
                                            src="{{ asset('images/Gold/GoldCard.webp') }}" alt="">
                                        <p class="mb-0 ps-4"><span id="card_title"></span>
                                            Card</p>
                                    </div>
                                    <div>
                                        <p class="mb-0"> <span class="cardSummary"></span> * <span
                                                class="userSummary me-5"></span> <span id="card_price"></span> </p>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="d-flex align-items-center">
                                        <img class="img-fluid" width="50"
                                            src="{{ asset('images/Gold/GoldCard.webp') }}" alt="">
                                        <p class="mb-0 ps-4" id="shipping_title"></p>
                                    </div>
                                    <div>
                                        <p class="mb-0" id="shipping_charge"></p>
                                    </div>
                                </div>
                                <div>
                                    <hr>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <h6 class="mb-0">Total Amount</h6>
                                        <div>
                                            <span>$</span>
                                            <span class="fw-boldest text-end summary"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div>
            <h5 class="mt-20 mb-0">Account Information</h5>
            <p>Your email will be used for account creation and management.</p>
            <div class="my-5">
                <label for="name">Your Name <span class="text-danger">*</span></label>
                <input class="border form-control" type="text" name="name" id="name" required>
            </div>
            <div class="my-5">
                <label for="email">Your Email <span class="text-danger">*</span></label>
                <input class="border form-control" type="email" name="email" id="email" required>
            </div>
        </div>
        <div class="mt-30 d-flex justify-content-between align-items-center">
            <button type="button" onclick="previousStep(4)" class="continue-back"><i class="fas fa-angle-left"></i>
                Back</button>
            <div>
                <p class="mb-0">Navigate to the Next or Previous Steps</p>
            </div>
            <button type="submit" id="nextBtn3" class="theme-btn style-two" style="border-radius: 10px;">Submit <i
                    class="fas fa-arrow-right"></i></button>
        </div>
    </div>
</form>

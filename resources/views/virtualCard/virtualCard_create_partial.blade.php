<style>
    .custom-row {
        display: flex;
        gap: 0.5rem;
        /* Adjust the gap as needed */
        padding-top: 2.5rem;
        /* Adjust the padding as needed */
        padding-bottom: 2.5rem;
        /* Adjust the padding as needed */
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
<div class="row g-2 py-10">
    <div class="col-lg-6 custom-col">
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
                                        <svg xmlns="http://www.w3.org/2000/svg" version="1.1"
                                            xmlns:xlink="http://www.w3.org/1999/xlink" width="30" height="30"
                                            x="0" y="0" viewBox="0 0 4335 4335"
                                            style="enable-background:new 0 0 512 512" xml:space="preserve"
                                            fill-rule="evenodd" class="">
                                            <g>
                                                <path fill="#666666"
                                                    d="M313 810h3419c130 0 236 106 236 236v901c-170-124-379-197-606-197-569 0-1030 461-1030 1030 0 139 28 272 77 393H312c-130 0-236-106-236-236V1046c0-130 106-236 236-236z"
                                                    opacity="1" data-original="#666666" class=""></path>
                                                <path fill="#4d4d4d"
                                                    d="M2613 810h1119c130 0 236 106 236 236v901c-170-124-379-197-606-197-569 0-1030 461-1030 1030 0 139 28 272 77 393h-869L2612 809z"
                                                    opacity="1" data-original="#4d4d4d"></path>
                                                <g fill="#a37905">
                                                    <path
                                                        d="M3363 1851c514 0 930 416 930 930s-416 930-930 930-930-416-930-930 416-930 930-930zm0 144c434 0 786 352 786 786s-352 786-786 786-786-352-786-786 352-786 786-786z"
                                                        fill="#a37905" opacity="1" data-original="#a37905"></path>
                                                    <path
                                                        d="M3363 2040c409 0 741 332 741 741s-332 741-741 741-741-332-741-741 332-741 741-741zm-418 593 146 221v-223c0-14 3-25 9-33 6-7 15-11 25-11 11 0 19 4 26 11 6 7 9 18 9 33v295c0 33-14 49-41 49-7 0-13-1-18-3s-10-5-15-9-9-9-13-15-8-11-12-18l-142-218v220c0 14-3 25-10 33-7 7-15 11-26 11s-19-4-26-11c-6-8-10-18-10-32v-289c0-12 1-22 4-29 3-8 9-14 16-19 8-5 16-7 24-7 7 0 13 1 18 3s9 5 13 9 8 9 11 15c4 6 8 12 12 19zm523 19h-150v96h125c11 0 20 3 26 8s9 12 9 21-3 16-9 21-14 8-26 8h-125v123c0 16-4 27-11 35s-16 11-27 11-20-4-28-11c-7-8-11-19-11-35v-288c0-11 2-20 5-27s8-12 15-15 16-5 27-5h179c12 0 21 3 27 8s9 13 9 21c0 9-3 16-9 22-6 5-15 8-27 8zm412 198c0 12-3 25-9 39s-15 28-28 41-29 24-48 33c-20 8-42 13-69 13-20 0-38-2-54-6s-31-10-44-18-25-18-37-31c-10-12-18-25-25-39-7-15-12-30-16-47s-5-34-5-53c0-30 4-57 13-81s22-44 38-61c17-17 36-30 57-39 22-9 46-13 70-13 31 0 57 6 81 18s42 27 55 45 19 34 19 51c0 9-3 16-9 23s-14 10-22 10c-10 0-17-3-22-7-5-5-10-13-16-24-10-19-22-32-35-42-13-9-30-14-50-14-31 0-56 12-75 36s-28 57-28 101c0 29 4 53 12 73 8 19 20 34 35 43 15 10 33 14 53 14 22 0 40-5 55-16s27-27 34-48c3-10 7-18 12-24s13-9 23-9c9 0 17 3 23 10 6 6 10 14 10 23v-1z"
                                                        fill="#a37905" opacity="1" data-original="#a37905"></path>
                                                </g>
                                            </g>
                                        </svg>
                                    </span>
                                </div>
                                <div class="stepper-label">
                                    <h3 class="stepper-title mb-0 pe-3">Select Template</h3>
                                </div>
                            </div>
                        </div>

                        <div class="stepper-item mx-3 my-4 p-0 rounded-1" data-kt-stepper-element="nav"
                            data-kt-stepper-action="step">
                            <div class="stepper-wrapper d-flex align-items-center">
                                <div class="stepper-icon w-40px h-40px me-2 rounded-1">
                                    <i class="stepper-check fas fa-check"></i>
                                    <span class="stepper-number">
                                        <svg xmlns="http://www.w3.org/2000/svg" version="1.1"
                                            xmlns:xlink="http://www.w3.org/1999/xlink" width="30" height="30"
                                            x="0" y="0" viewBox="0 0 68 68" style="enable-background:new 0 0 512 512"
                                            xml:space="preserve" class="">
                                            <g>
                                                <path fill="#d1dafe"
                                                    d="M58.256 8.595v50.82c0 2.8-2.27 5.06-5.06 5.06H7.105c-2.8 0-5.07-2.26-5.07-5.06V8.595c0-2.8 2.27-5.07 5.07-5.07h46.09c2.79 0 5.06 2.27 5.06 5.07z"
                                                    opacity="1" data-original="#d1dafe"></path>
                                                <path fill="#8a9bea"
                                                    d="M19.596 49.785v9.38a2.47 2.47 0 0 1-2.48 2.46h-9.76a2.46 2.46 0 0 1-2.47-2.46v-9.38c0-1.36 1.1-2.47 2.47-2.47h9.76c1.37 0 2.48 1.11 2.48 2.47zM55.406 34.445v6.49c0 1.37-1.11 2.47-2.48 2.47H7.356c-1.37 0-2.47-1.1-2.47-2.47v-6.49c0-1.36 1.1-2.47 2.47-2.47h45.57c1.37 0 2.48 1.11 2.48 2.47z"
                                                    opacity="1" data-original="#8a9bea"></path>
                                                <path fill="#4269c4"
                                                    d="M55.406 34.445v6.49c0 1.36-1.11 2.46-2.48 2.46H7.356c-1.37 0-2.46-1.1-2.46-2.46v-1.53c6.29 1.98 16 2.53 26.7 1.15 9.59-1.23 18.03-3.77 23.7-6.82.07.23.11.46.11.71z"
                                                    opacity="1" data-original="#4269c4"></path>
                                                <path fill="#aec46e"
                                                    d="M55.406 19.105v6.49a2.48 2.48 0 0 1-2.48 2.48H7.356a2.47 2.47 0 0 1-2.47-2.48v-6.49c0-1.36 1.1-2.46 2.47-2.46h45.57c1.37 0 2.48 1.1 2.48 2.46z"
                                                    opacity="1" data-original="#aec46e"></path>
                                                <path fill="#fbad3e"
                                                    d="M37.496 49.785v9.38c0 1.36-1.1 2.46-2.47 2.46h-9.76a2.47 2.47 0 0 1-2.48-2.46v-9.38c0-1.36 1.11-2.47 2.48-2.47h9.76a2.47 2.47 0 0 1 2.47 2.47z"
                                                    opacity="1" data-original="#fbad3e"></path>
                                                <path fill="#8a9bea"
                                                    d="M55.406 49.785v9.38a2.47 2.47 0 0 1-2.48 2.46h-9.75c-1.36 0-2.47-1.1-2.47-2.46v-9.38c0-1.36 1.11-2.47 2.47-2.47h9.75c1.37 0 2.48 1.11 2.48 2.47z"
                                                    opacity="1" data-original="#8a9bea"></path>
                                                <path fill="#fa990e"
                                                    d="M37.496 54.525v4.63c0 1.37-1.11 2.47-2.47 2.47h-9.75c-1.37 0-2.48-1.1-2.48-2.47v-.57c1.42.54 2.96.83 4.56.83 4.1 0 7.75-1.91 10.14-4.89z"
                                                    opacity="1" data-original="#fa990e"></path>
                                                <path fill="#4269c4"
                                                    d="M19.596 54.525v4.63c0 1.37-1.11 2.47-2.48 2.47h-9.75c-1.37 0-2.47-1.1-2.47-2.47v-.57c1.41.54 2.95.83 4.56.83 4.1 0 7.75-1.91 10.14-4.89zM55.406 54.525v4.63c0 1.37-1.11 2.47-2.48 2.47h-9.75c-1.36 0-2.47-1.1-2.47-2.47v-.57c1.41.54 2.95.83 4.56.83 4.1 0 7.75-1.91 10.14-4.89zM58.256 8.595v5.28H2.036v-5.28c0-2.8 2.27-5.07 5.07-5.07h46.09c2.79 0 5.06 2.27 5.06 5.07z"
                                                    opacity="1" data-original="#4269c4"></path>
                                                <circle cx="8.942" cy="8.808" r="1.552" fill="#255299"
                                                    opacity="1" data-original="#255299"></circle>
                                                <circle cx="13.627" cy="8.808" r="1.552" fill="#255299"
                                                    opacity="1" data-original="#255299"></circle>
                                                <circle cx="18.313" cy="8.808" r="1.552" fill="#255299"
                                                    opacity="1" data-original="#255299"></circle>
                                                <circle cx="8.666" cy="9.211" r="1.552" fill="#ffffff"
                                                    opacity="1" data-original="#ffffff"></circle>
                                                <circle cx="13.352" cy="9.211" r="1.552" fill="#ffffff"
                                                    opacity="1" data-original="#ffffff"></circle>
                                                <circle cx="18.038" cy="9.211" r="1.552" fill="#ffffff"
                                                    opacity="1" data-original="#ffffff"></circle>
                                                <path fill="#255299"
                                                    d="M53.176 9.21c-2.007.406-4.015.618-6.023.763-2.008.143-4.015.22-6.023.217a82.229 82.229 0 0 1-6.023-.215c-2.008-.143-4.016-.356-6.024-.764 2.008-.408 4.016-.621 6.024-.765a82.229 82.229 0 0 1 6.023-.215 83.315 83.315 0 0 1 6.023.218c2.008.144 4.016.356 6.023.762z"
                                                    opacity="1" data-original="#255299"></path>
                                                <path fill="#617f4d"
                                                    d="M55.406 19.115v6.49c0 1.37-1.11 2.47-2.48 2.47H7.356c-1.37 0-2.46-1.1-2.46-2.47v-1.53c6.29 1.98 16 2.53 26.7 1.16 9.59-1.23 18.03-3.78 23.7-6.83.07.23.11.46.11.71z"
                                                    opacity="1" data-original="#617f4d"></path>
                                                <ellipse cx="58.552" cy="26.658" fill="#fbad3e" rx="18.542"
                                                    ry="3.938" transform="rotate(-69.7 58.576 26.646)"
                                                    opacity="1" data-original="#fbad3e"></ellipse>
                                                <path fill="#e0860e"
                                                    d="M51.585 36.843c-.716 4.02-.59 6.79.542 7.208 1.13.417 3.028-1.605 5.098-5.125-1.512-1.691-3.392-2.386-5.64-2.083z"
                                                    opacity="1" data-original="#e0860e"></path>
                                                <path fill="#51504f"
                                                    d="M46.9 43.602a7.092 7.092 0 0 1 1.016-1.853c1.48-1.958 3.813-2.877 5.877-2.114a4.356 4.356 0 0 1 1.69 1.136c2.019 2.184 1.183 5.746-1.47 7.1-.026.012-.052.023-.068.039-1.712.881-3.07 2.394-4.298 4.158-.454.653-1.444.533-1.707-.226-.763-2.264-1.83-6.101-1.04-8.24z"
                                                    opacity="1" data-original="#51504f"></path>
                                                <path fill="#b53016"
                                                    d="M46.9 43.602a7.092 7.092 0 0 1 1.016-1.853c.493.022.99.174 1.331.524.527.535.543 1.415 1.05 1.976.07.068.141.137.232.182.093.034.194.05.299.056.536.05 1.062.095 1.599.143.372.031.791.08 1.051.357.266.29.271.74.211 1.133-.06.394-.174.789-.082 1.175.053.232.179.439.338.615-1.712.881-3.07 2.394-4.298 4.158-.454.653-1.444.533-1.707-.226-.763-2.264-1.83-6.101-1.04-8.24z"
                                                    opacity="1" data-original="#b53016"></path>
                                            </g>
                                        </svg>
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
                                        <svg xmlns="http://www.w3.org/2000/svg" version="1.1"
                                            xmlns:xlink="http://www.w3.org/1999/xlink" width="30" height="30"
                                            x="0" y="0" viewBox="0 0 510 510"
                                            style="enable-background:new 0 0 512 512" xml:space="preserve"
                                            class="">
                                            <g>
                                                <linearGradient id="a">
                                                    <stop offset="0" stop-color="#fd4755"></stop>
                                                    <stop offset="1" stop-color="#ac2538"></stop>
                                                </linearGradient>
                                                <linearGradient xlink:href="#a" id="h" x1="247.086"
                                                    x2="459.554" y1="220.166" y2="432.634"
                                                    gradientUnits="userSpaceOnUse"></linearGradient>
                                                <linearGradient id="b">
                                                    <stop offset="0" stop-color="#972437" stop-opacity="0">
                                                    </stop>
                                                    <stop offset="1" stop-color="#972437"></stop>
                                                </linearGradient>
                                                <linearGradient xlink:href="#b" id="i" x1="508.347"
                                                    x2="456.03" y1="347.903" y2="295.585"
                                                    gradientUnits="userSpaceOnUse"></linearGradient>
                                                <linearGradient xlink:href="#b" id="j" x1="384.426"
                                                    x2="384.426" y1="357.708" y2="412.217"
                                                    gradientUnits="userSpaceOnUse"></linearGradient>
                                                <linearGradient xlink:href="#a" id="k" x1="460.598"
                                                    x2="266.098" y1="364.357" y2="184.857"
                                                    gradientUnits="userSpaceOnUse"></linearGradient>
                                                <linearGradient id="c">
                                                    <stop offset="0" stop-color="#eaf6ff"></stop>
                                                    <stop offset=".258" stop-color="#dce8fa"></stop>
                                                    <stop offset=".742" stop-color="#b8c4ed"></stop>
                                                    <stop offset="1" stop-color="#a2aee6"></stop>
                                                </linearGradient>
                                                <linearGradient xlink:href="#c" id="l" x1="297.593"
                                                    x2="433.725" y1="208.682" y2="344.814"
                                                    gradientUnits="userSpaceOnUse"></linearGradient>
                                                <linearGradient id="d">
                                                    <stop offset="0" stop-color="#537983"></stop>
                                                    <stop offset="1" stop-color="#3e5959"></stop>
                                                </linearGradient>
                                                <linearGradient xlink:href="#d" id="m" x1="444.321"
                                                    x2="473.114" y1="283.879" y2="312.673"
                                                    gradientUnits="userSpaceOnUse"></linearGradient>
                                                <linearGradient id="e">
                                                    <stop offset="0" stop-color="#fee45a"></stop>
                                                    <stop offset="1" stop-color="#fe860a"></stop>
                                                </linearGradient>
                                                <linearGradient xlink:href="#e" id="n" x1="324.981"
                                                    x2="324.981" y1="240.575" y2="222.575"
                                                    gradientTransform="matrix(1 0 0 -1 0 576.842)"
                                                    gradientUnits="userSpaceOnUse"></linearGradient>
                                                <linearGradient xlink:href="#e" id="o" x1="468.53"
                                                    x2="504.171" y1="356.437" y2="392.077"
                                                    gradientUnits="userSpaceOnUse"></linearGradient>
                                                <linearGradient xlink:href="#e" id="p" x1="107.377"
                                                    x2="252.62" y1="32.567" y2="177.81"
                                                    gradientUnits="userSpaceOnUse"></linearGradient>
                                                <linearGradient id="f">
                                                    <stop offset="0" stop-color="#fe860a" stop-opacity="0">
                                                    </stop>
                                                    <stop offset="1" stop-color="#fe7701"></stop>
                                                </linearGradient>
                                                <linearGradient xlink:href="#f" id="q" x1="246.416"
                                                    x2="59.143" y1="96.231" y2="-36.823"
                                                    gradientUnits="userSpaceOnUse"></linearGradient>
                                                <linearGradient xlink:href="#f" id="r" x1="264.787"
                                                    x2="150.201" y1="55.721" y2="176.569"
                                                    gradientUnits="userSpaceOnUse"></linearGradient>
                                                <linearGradient xlink:href="#f" id="s" x1="167.779"
                                                    x2="167.779" y1="144.19" y2="177.077"
                                                    gradientUnits="userSpaceOnUse"></linearGradient>
                                                <linearGradient xlink:href="#c" id="t" x1="124.183"
                                                    x2="175.926" y1="20.126" y2="71.869"
                                                    gradientUnits="userSpaceOnUse"></linearGradient>
                                                <linearGradient xlink:href="#e" id="u" x1="50.945"
                                                    x2="250.338" y1="192.527" y2="391.92"
                                                    gradientUnits="userSpaceOnUse"></linearGradient>
                                                <linearGradient xlink:href="#f" id="v" x1="241.821"
                                                    x2="-15.273" y1="279.926" y2="97.267"
                                                    gradientUnits="userSpaceOnUse"></linearGradient>
                                                <linearGradient xlink:href="#f" id="w" x1="267.041"
                                                    x2="109.735" y1="224.313" y2="390.215"
                                                    gradientUnits="userSpaceOnUse"></linearGradient>
                                                <linearGradient xlink:href="#f" id="x" x1="133.867"
                                                    x2="133.867" y1="345.766" y2="390.914"
                                                    gradientUnits="userSpaceOnUse"></linearGradient>
                                                <linearGradient xlink:href="#c" id="y" x1="74.016"
                                                    x2="145.05" y1="175.448" y2="246.482"
                                                    gradientUnits="userSpaceOnUse"></linearGradient>
                                                <linearGradient xlink:href="#c" id="z" x1="142.333"
                                                    x2="142.333" y1="394.822" y2="421.738"
                                                    gradientUnits="userSpaceOnUse"></linearGradient>
                                                <linearGradient id="g">
                                                    <stop offset="0" stop-color="#8795de" stop-opacity="0">
                                                    </stop>
                                                    <stop offset=".468" stop-color="#7d8ddc" stop-opacity=".468">
                                                    </stop>
                                                    <stop offset="1" stop-color="#6c7fd8"></stop>
                                                </linearGradient>
                                                <linearGradient xlink:href="#g" id="A" x1="207.531"
                                                    x2="148.947" y1="457.677" y2="399.092"
                                                    gradientUnits="userSpaceOnUse"></linearGradient>
                                                <linearGradient xlink:href="#c" id="B" x1="-4451.488"
                                                    x2="-4451.488" y1="394.822" y2="421.738"
                                                    gradientTransform="matrix(-1 0 0 1 -3986.988 0)"
                                                    gradientUnits="userSpaceOnUse"></linearGradient>
                                                <linearGradient xlink:href="#g" id="C" x1="498.698"
                                                    x2="440.113" y1="457.677" y2="399.092"
                                                    gradientUnits="userSpaceOnUse"></linearGradient>
                                                <linearGradient xlink:href="#d" id="D" x1="67.86"
                                                    x2="152.609" y1="389.206" y2="473.955"
                                                    gradientUnits="userSpaceOnUse"></linearGradient>
                                                <linearGradient xlink:href="#d" id="E" x1="130.968"
                                                    x2="69.705" y1="452.315" y2="391.052"
                                                    gradientUnits="userSpaceOnUse"></linearGradient>
                                                <linearGradient xlink:href="#c" id="F" x1="89.847"
                                                    x2="131.871" y1="411.193" y2="453.218"
                                                    gradientUnits="userSpaceOnUse"></linearGradient>
                                                <linearGradient xlink:href="#d" id="G" x1="359.645"
                                                    x2="444.394" y1="389.206" y2="473.955"
                                                    gradientUnits="userSpaceOnUse"></linearGradient>
                                                <linearGradient xlink:href="#d" id="H" x1="422.753"
                                                    x2="361.491" y1="452.315" y2="391.052"
                                                    gradientUnits="userSpaceOnUse"></linearGradient>
                                                <linearGradient xlink:href="#c" id="I" x1="381.632"
                                                    x2="423.656" y1="411.193" y2="453.218"
                                                    gradientUnits="userSpaceOnUse"></linearGradient>
                                                <path fill="url(#h)"
                                                    d="M334.524 172.143h-51.603c-7.682 0-13.909 6.227-13.909 13.909v238.994a5.161 5.161 0 0 0 5.161 5.161H485.93c7.682 0 13.909-6.227 13.909-13.909v-78.84a119.82 119.82 0 0 0-35.096-84.728l-45.492-45.492a119.824 119.824 0 0 0-84.727-35.095z"
                                                    opacity="1" data-original="url(#h)"></path>
                                                <path fill="url(#i)"
                                                    d="M499.84 337.459a119.78 119.78 0 0 0-6.641-39.312l-17.764-17.764c-4.018-4.503-9.863-7.341-16.372-7.341h-3.383a8.215 8.215 0 0 0-8.215 8.215v37.03a8.194 8.194 0 0 0 3.368 6.622l49.008 49.008v-36.458z"
                                                    opacity="1" data-original="url(#i)"></path>
                                                <path fill="url(#j)"
                                                    d="M269.012 425.047a5.161 5.161 0 0 0 5.161 5.161H485.93c7.682 0 13.909-6.227 13.909-13.909v-78.84c0-2.464-.085-4.918-.235-7.364H269.012z"
                                                    opacity="1" data-original="url(#j)"></path>
                                                <path fill="url(#k)"
                                                    d="M344.566 189h-39.911c-5.941 0-10.758 4.914-10.758 10.976v105.581c0 7.677 6.099 13.9 13.623 13.9h150.093c8.519 0 14.881-7.875 13.401-16.435-3.282-18.975-12.198-36.617-25.734-50.428l-35.184-35.899C392.716 198.962 369.144 189 344.566 189z"
                                                    opacity="1" data-original="url(#k)"></path>
                                                <path fill="url(#l)"
                                                    d="M347.844 206.578h-31.621a8.523 8.523 0 0 0-8.523 8.523v81.984c0 5.961 4.832 10.794 10.794 10.794H437.41c6.749 0 11.79-6.115 10.617-12.762a73.431 73.431 0 0 0-20.388-39.157l-27.876-27.876a73.425 73.425 0 0 0-51.919-21.506z"
                                                    opacity="1" data-original="url(#l)"></path>
                                                <path fill="url(#m)"
                                                    d="M454.678 325.5h3.383c12.117 0 21.939-9.822 21.939-21.939v-9.581c0-12.117-9.822-21.939-21.939-21.939h-3.383a8.215 8.215 0 0 0-8.215 8.215v37.03a8.215 8.215 0 0 0 8.215 8.214z"
                                                    opacity="1" data-original="url(#m)"></path>
                                                <path fill="url(#n)"
                                                    d="M336.028 336.944h-22.093a6.235 6.235 0 1 0 0 12.47h22.093a6.235 6.235 0 1 0 0-12.47z"
                                                    opacity="1" data-original="url(#n)"></path>
                                                <path fill="url(#o)"
                                                    d="M504.011 396.593h-37.333v-24.858c0-15.218 12.336-27.554 27.554-27.554 5.401 0 9.779 4.378 9.779 9.779z"
                                                    opacity="1" data-original="url(#o)"></path>
                                                <path fill="url(#p)"
                                                    d="M251.898 169.873H83.661a6.843 6.843 0 0 1-6.843-6.843V22.908a6.843 6.843 0 0 1 6.843-6.843h168.237a6.843 6.843 0 0 1 6.843 6.843V163.03a6.843 6.843 0 0 1-6.843 6.843z"
                                                    opacity="1" data-original="url(#p)"></path>
                                                <path fill="url(#q)"
                                                    d="M258.741 22.908v140.123a6.843 6.843 0 0 1-6.842 6.842h-22.33L119.356 59.66V16.066h132.543a6.843 6.843 0 0 1 6.842 6.842z"
                                                    opacity="1" data-original="url(#q)"></path>
                                                <path fill="url(#r)"
                                                    d="M251.898 16.065h-47.799a6.843 6.843 0 0 1 6.843 6.843V163.03a6.843 6.843 0 0 1-6.843 6.843h47.799a6.843 6.843 0 0 0 6.843-6.843V22.908a6.843 6.843 0 0 0-6.843-6.843z"
                                                    opacity="1" data-original="url(#r)"></path>
                                                <path fill="url(#s)"
                                                    d="M76.818 132.775v30.255a6.843 6.843 0 0 0 6.843 6.843h168.237a6.843 6.843 0 0 0 6.843-6.843v-30.255z"
                                                    opacity="1" data-original="url(#s)"></path>
                                                <path fill="url(#t)"
                                                    d="m126.379 60.832.134.082a9.496 9.496 0 0 0 9.988-.081 9.79 9.79 0 0 1 10.121 0 9.79 9.79 0 0 0 10.121 0c1.442-.835 3.038-.853 4.645-.552 1.833.344 3.536-1.03 3.536-2.896V17.457a2.407 2.407 0 0 0-2.407-2.407h-41.914a2.407 2.407 0 0 0-2.407 2.407v39.871a2.955 2.955 0 0 0 3.508 2.9c1.624-.304 3.235-.271 4.675.604z"
                                                    opacity="1" data-original="url(#t)"></path>
                                                <path fill="url(#u)"
                                                    d="M249.347 381.024H18.387a9.394 9.394 0 0 1-9.394-9.394V179.267a9.394 9.394 0 0 1 9.394-9.394h230.96a9.394 9.394 0 0 1 9.394 9.394V371.63a9.394 9.394 0 0 1-9.394 9.394z"
                                                    opacity="1" data-original="url(#u)"></path>
                                                <path fill="url(#v)"
                                                    d="M258.741 179.266v192.365c0 5.186-4.207 9.393-9.392 9.393h-30.655L67.39 229.72v-59.847h181.959c5.185 0 9.392 4.207 9.392 9.393z"
                                                    opacity="1" data-original="url(#v)"></path>
                                                <path fill="url(#w)"
                                                    d="M249.347 169.872h-65.62a9.394 9.394 0 0 1 9.394 9.394V371.63a9.394 9.394 0 0 1-9.394 9.394h65.62a9.394 9.394 0 0 0 9.394-9.394V179.267a9.394 9.394 0 0 0-9.394-9.395z"
                                                    opacity="1" data-original="url(#w)"></path>
                                                <path fill="url(#x)"
                                                    d="M8.993 330.095v41.535a9.394 9.394 0 0 0 9.394 9.394h230.96a9.394 9.394 0 0 0 9.394-9.394v-41.535z"
                                                    opacity="1" data-original="url(#x)"></path>
                                                <path fill="url(#y)"
                                                    d="m77.032 231.329.184.112a13.034 13.034 0 0 0 13.712-.112 13.44 13.44 0 0 1 13.895 0 13.44 13.44 0 0 0 13.895 0h.001c1.98-1.146 4.171-1.171 6.377-.757 2.517.472 4.854-1.415 4.854-3.975v-54.814a3.305 3.305 0 0 0-3.305-3.305H69.103a3.305 3.305 0 0 0-3.305 3.305v54.736c0 2.545 2.315 4.451 4.816 3.982 2.229-.418 4.44-.373 6.418.828z"
                                                    opacity="1" data-original="url(#y)"></path>
                                                <path fill="url(#z)"
                                                    d="M274.742 430.208H19.184C8.589 430.208 0 421.619 0 411.024v-10.816c0-10.595 8.589-19.184 19.184-19.184h255.558c5.481 0 9.925 4.444 9.925 9.925v29.333c0 5.482-4.444 9.926-9.925 9.926z"
                                                    opacity="1" data-original="url(#z)"></path>
                                                <path fill="url(#A)" d="M161.107 392.297v37.911h37.911z"
                                                    opacity="1" data-original="url(#A)"></path>
                                                <path fill="url(#B)"
                                                    d="M419 430.208h71.816c10.595 0 19.184-8.589 19.184-19.184v-10.816c0-10.595-8.589-19.184-19.184-19.184H419z"
                                                    opacity="1" data-original="url(#B)"></path>
                                                <path fill="url(#C)" d="M452.273 392.297v37.911h37.911z"
                                                    opacity="1" data-original="url(#C)"></path>
                                                <circle cx="109.107" cy="430.454" r="64.497" fill="url(#D)"
                                                    opacity="1" data-original="url(#D)"></circle>
                                                <circle cx="109.107" cy="430.454" r="47.26" fill="url(#E)"
                                                    opacity="1" data-original="url(#E)"></circle>
                                                <circle cx="109.107" cy="430.454" r="29.411" fill="url(#F)"
                                                    opacity="1" data-original="url(#F)"></circle>
                                                <circle cx="400.893" cy="430.454" r="64.497" fill="url(#G)"
                                                    opacity="1" data-original="url(#G)"></circle>
                                                <circle cx="400.893" cy="430.454" r="47.26" fill="url(#H)"
                                                    opacity="1" data-original="url(#H)"></circle>
                                                <circle cx="400.893" cy="430.454" r="29.411" fill="url(#I)"
                                                    opacity="1" data-original="url(#I)"></circle>
                                            </g>
                                        </svg>
                                    </span>
                                </div>
                                <div class="stepper-label">
                                    <h3 class="stepper-title mb-0 pe-3">Shipping Address</h3>
                                </div>
                            </div>
                        </div>

                        <div class="stepper-item mx-3 my-4 p-0 rounded-1" data-kt-stepper-element="nav"
                            data-kt-stepper-action="step">
                            <div class="stepper-wrapper d-flex align-items-center">
                                <div class="stepper-icon w-40px h-40px me-2 rounded-1">
                                    <i class="stepper-check fas fa-check"></i>
                                    <span class="stepper-number">
                                        <svg xmlns="http://www.w3.org/2000/svg" version="1.1"
                                            xmlns:xlink="http://www.w3.org/1999/xlink" width="30" height="30"
                                            x="0" y="0" viewBox="0 0 64 64" style="enable-background:new 0 0 512 512"
                                            xml:space="preserve" class="">
                                            <g>
                                                <path fill="#50d9d7"
                                                    d="M4 30h38c2.2 0 4 1.8 4 4v26c0 2.2-1.8 4-4 4H4c-2.2 0-4-1.8-4-4V34c0-2.2 1.8-4 4-4z"
                                                    opacity="1" data-original="#50d9d7"></path>
                                                <path fill="#00bebd"
                                                    d="M0 35h46v10H0zM46 34v1H16v-5h26c2.2 0 4 1.8 4 4z" opacity="1"
                                                    data-original="#00bebd"></path>
                                                <path fill="#00aaa8" d="M46 35v10H22c-3.3 0-6-2.7-6-6v-4z"
                                                    opacity="1" data-original="#00aaa8"></path>
                                                <path fill="#93e6e5"
                                                    d="M64 13v26c0 2.2-1.8 4-4 4H22c-2.2 0-4-1.8-4-4V13c0-2.2 1.8-4 4-4h38c2.2 0 4 1.8 4 4z"
                                                    opacity="1" data-original="#93e6e5"></path>
                                                <path fill="#ffac00"
                                                    d="M50 13h8c1.1 0 2 .9 2 2v4c0 1.1-.9 2-2 2h-8c-1.1 0-2-.9-2-2v-4c0-1.1.9-2 2-2z"
                                                    opacity="1" data-original="#ffac00" class=""></path>
                                                <path fill="#50d9d7"
                                                    d="M33 14c0 .6-.4 1-1 1H22c-.6 0-1-.4-1-1s.4-1 1-1h10c.6 0 1 .4 1 1z"
                                                    opacity="1" data-original="#50d9d7"></path>
                                                <path fill="#00bebd"
                                                    d="M22 13c-.6 0-1 .4-1 1s.4 1 1 1h3.6c.1-.7.2-1.3.3-2z"
                                                    opacity="1" data-original="#00bebd"></path>
                                                <path fill="#50d9d7"
                                                    d="M26 9c0 1.3 0 2.7-.1 4H22c-.6 0-1 .4-1 1s.4 1 1 1h3.6c-.9 4.9-3.7 9.2-7.6 12.1v-8.8c2.1-3.4 2-6.2 2-8.8 1.2-.7 2-.5 6-.5zM28 19h4c.6 0 1-.4 1-1s-.4-1-1-1h-4c-.6 0-1 .4-1 1s.4 1 1 1z"
                                                    opacity="1" data-original="#50d9d7"></path>
                                                <path fill="#ffac00"
                                                    d="M23 6v5.3c0 7-4.4 13.3-11 15.7-6.6-2.4-11-8.7-11-15.7V6l11-5z"
                                                    opacity="1" data-original="#ffac00" class=""></path>
                                                <path fill="#ea9706"
                                                    d="M11.7 27.9C4.7 25.4 0 18.7 0 11.3V6c0-.4.2-.7.6-.9l11-5c.3-.1.6-.1.8 0l11 5c.4.2.6.5.6.9v5.3c0 7.4-4.7 14.1-11.7 16.7-.2 0-.4 0-.6-.1zM2 6.6v4.7c0 6.5 4 12.3 10 14.6 6-2.4 10-8.2 10-14.6V6.6L12 2.1z"
                                                    opacity="1" data-original="#ea9706" class=""></path>
                                                <g fill="#50d9d7">
                                                    <path
                                                        d="M41 27h-2c-.6 0-1-.4-1-1s.4-1 1-1h2c.6 0 1 .4 1 1s-.4 1-1 1zM47 27h-2c-.6 0-1-.4-1-1s.4-1 1-1h2c.6 0 1 .4 1 1s-.4 1-1 1zM53 27h-2c-.6 0-1-.4-1-1s.4-1 1-1h2c.6 0 1 .4 1 1s-.4 1-1 1zM59 27h-2c-.6 0-1-.4-1-1s.4-1 1-1h2c.6 0 1 .4 1 1s-.4 1-1 1zM57 39c-1.9 0-1-4 2-4 .6 0 1 .4 1 1s-.4 1-1 1-1 .4-1 1-.4 1-1 1z"
                                                        fill="#50d9d7" opacity="1" data-original="#50d9d7"></path>
                                                    <path
                                                        d="M53 39c-.6 0-1-.4-1-1 0-3.9 3.1-7 7-7 .6 0 1 .4 1 1s-.4 1-1 1c-2.8 0-5 2.2-5 5 0 .6-.4 1-1 1z"
                                                        fill="#50d9d7" opacity="1" data-original="#50d9d7"></path>
                                                </g>
                                                <path fill="#f3f3f3"
                                                    d="M6.8 14.7c-.4-.4-.4-1 0-1.4s1-.4 1.4 0l2.3 2.3 5.3-5.3c.4-.4 1-.4 1.4 0s.4 1 0 1.4l-6 6c-.4.4-1 .4-1.4 0l-3-3zM5 48h22c1.1 0 2 .9 2 2v2c0 1.1-.9 2-2 2H5c-1.1 0-2-.9-2-2v-2c0-1.1.9-2 2-2z"
                                                    opacity="1" data-original="#f3f3f3"></path>
                                                <path fill="#d9d9d9"
                                                    d="M8 52H6c-.6 0-1-.4-1-1s.4-1 1-1h2c.6 0 1 .4 1 1s-.4 1-1 1zM14 52h-2c-.6 0-1-.4-1-1s.4-1 1-1h2c.6 0 1 .4 1 1s-.4 1-1 1zM20 52h-2c-.6 0-1-.4-1-1s.4-1 1-1h2c.6 0 1 .4 1 1s-.4 1-1 1zM26 52h-2c-.6 0-1-.4-1-1s.4-1 1-1h2c.6 0 1 .4 1 1s-.4 1-1 1z"
                                                    opacity="1" data-original="#d9d9d9"></path>
                                                <path fill="#50d9d7"
                                                    d="M35.1 38H24.9c-1 0-1.9-.8-1.9-1.9v-4.3c0-1 .8-1.9 1.9-1.9h10.3c1 0 1.9.8 1.9 1.9v4.3c-.1 1.1-.9 1.9-2 1.9z"
                                                    opacity="1" data-original="#50d9d7"></path>
                                            </g>
                                        </svg>
                                    </span>
                                </div>
                                <div class="stepper-label">
                                    <h3 class="stepper-title mb-0 pe-3">Payment & Generate</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Stepper content and form -->
                    @if (strpos(Route::current()->getName(), 'user.') === 0)
                        <form class="form flex-grow-1 d-flex flex-column" novalidate="novalidate"
                            id="kt_stepper_example_clickable_form" action="{{ route('user.nfc-card.store') }}"
                            method="POST" enctype="multipart/form-data">
                        @else
                            <form class="form flex-grow-1 d-flex flex-column" novalidate="novalidate"
                                id="kt_stepper_example_clickable_form" action="{{ route('admin.nfc-card.store') }}"
                                method="POST" enctype="multipart/form-data">
                    @endif

                    @csrf
                    <div class="row pt-10">
                        <div class="flex-column current" data-kt-stepper-element="content">
                            <div class="card flex-grow-1 rounded-0">
                                <div class="text-center justify-content-center pt-10">
                                    <h2 class="text-center mb-10">Choose NFC Card Template! <span
                                            class="text-danger">(Required)</span> </h2>
                                </div>
                                <div class="centered-card-body card-body d-flex flex-column justify-content-between">
                                    @include('virtualCard.partials.virtualCard')
                                </div>
                            </div>
                        </div>

                        <div class="flex-column" data-kt-stepper-element="content">
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
                                        <h2 class="text-success">Shipping Address For NFC Card Delivery!</h2>
                                    </div>
                                </div>
                                <div
                                    class="centered-card-body card-body d-flex flex-column justify-content-between mb-10 pt-0">
                                    @include('virtualCard.partials.virtualCardBilling')
                                </div>
                            </div>
                        </div>
                        <div class="flex-column" data-kt-stepper-element="content">
                            <div class="card flex-grow-1 rounded-0">
                                <div class="card-header text-center border-0">
                                    <div class="pt-15 pb-15 ps-5 w-100">
                                        <h2 class="fs-4">NFC Card Charge : <strong
                                                class="text-success fs-1">49.99$</strong></h2>
                                        <p>Your NFC Card is almost ready. Make Payment to complete the process!</p>
                                    </div>
                                </div>
                                <div
                                    class="centered-card-body card-body d-flex flex-column justify-content-between mb-10 pt-0">
                                    @include('virtualCard.partials.payment')
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- Stepper Action Button --}}
                    <div class="">
                        <div class="d-flex justify-content-between py-3 px-3 align-items-center bg-white">
                            <div class="me-2">
                                <button type="button" class="btn btn-light btn-active-light-danger"
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
    <div class="col-lg-6 custom-col">
        <div class="card content-column">
            <div class="card-header px-0 border-0">
                <div class="d-flex flex-column justify-content-center align-items-center"
                    style="width: 100%; background: #7239e9; border-top-left-radius: 5px; border-top-right-radius: 5px; padding: 15px;">
                    <h3 class="text-white">NFC Preview</h3>
                    <p class="mb-0 text-white">Your Choosen Template</p>
                </div>
            </div>

            <div
                class="card-body custom-card-body overflow-auto px-0 pt-3 d-flex justify-content-center align-items-center">
                @include('virtualCard.partials.virtual_card_preview')
            </div>
        </div>
    </div>
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

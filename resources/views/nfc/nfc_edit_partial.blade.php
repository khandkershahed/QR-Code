@if (strpos(Route::current()->getName(), 'user.') === 0)
    @php
        $nfc = route('user.nfc-card.create');
    @endphp
@else
    @php
        $nfc = route('admin.nfc-card.create');
    @endphp
@endif

<div class="summury_box my-5 mt-0">
    <div class="row gy-5 gx-xl-10 m-auto d-flex justify-content-center">
        <div class="col-md-3 mb-2 mb-xl-5 ps-0">
            <div class="card h-lg-100">
                <div class="card-body d-flex justify-content-between align-items-center p-0 bg-light-primary shadow-sm">
                    <div class="m-0 ps-5">
                        <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink"
                            width="100" height="80" x="0" y="0" viewBox="0 0 512.011 512.011"
                            style="enable-background:new 0 0 512 512" xml:space="preserve" class="">
                            <g>
                                <path fill="#8ac9fe"
                                    d="M313.69 329.853H16.65c-9.196 0-16.65-7.455-16.65-16.65v-208.13c0-9.196 7.455-16.65 16.65-16.65h297.04c9.196 0 16.65 7.455 16.65 16.65v208.13c.001 9.196-7.454 16.65-16.65 16.65z"
                                    opacity="1" data-original="#8ac9fe" class=""></path>
                                <path fill="#60b7ff"
                                    d="M313.69 88.422h-29.138c9.196 0 16.65 7.455 16.65 16.65v208.13c0 9.196-7.455 16.65-16.65 16.65h29.138c9.196 0 16.65-7.455 16.65-16.65l26.967-84.464-26.967-79.314v-44.352c.001-9.195-7.454-16.65-16.65-16.65z"
                                    opacity="1" data-original="#60b7ff"></path>
                                <path fill="#918291" d="M0 254.927h308.922v33.301H0z" opacity="1"
                                    data-original="#918291" class=""></path>
                                <g fill="#eaf6ff">
                                    <path
                                        d="M118.971 136.077a7.5 7.5 0 0 0-7.5 7.5v32.46l-25.74-36.664a7.5 7.5 0 0 0-13.638 4.309v56.09c0 4.143 3.358 7.5 7.5 7.5s7.5-3.357 7.5-7.5v-32.354l25.74 36.664a7.5 7.5 0 0 0 13.638-4.31v-56.195a7.5 7.5 0 0 0-7.5-7.5zM175.048 151.077c4.142 0 7.5-3.357 7.5-7.5s-3.358-7.5-7.5-7.5h-22.776a7.5 7.5 0 0 0-7.5 7.5v56.195c0 4.143 3.358 7.5 7.5 7.5s7.5-3.357 7.5-7.5v-21.13h13.467c4.142 0 7.5-3.357 7.5-7.5s-3.358-7.5-7.5-7.5h-13.467v-12.565zM255.571 186.097a7.5 7.5 0 0 0-10.567.92 15.188 15.188 0 0 1-1.524 1.575c-2.742 2.441-6.252 3.68-10.433 3.68-11.357 0-20.598-9.24-20.598-20.598s9.24-20.598 20.598-20.598c4.128 0 8.108 1.215 11.511 3.514a7.5 7.5 0 1 0 8.396-12.43 35.433 35.433 0 0 0-19.908-6.084c-19.628 0-35.598 15.969-35.598 35.598s15.969 35.598 35.598 35.598c7.858 0 14.915-2.586 20.408-7.478a30.208 30.208 0 0 0 3.037-3.131 7.5 7.5 0 0 0-.92-10.566z"
                                        fill="#eaf6ff" opacity="1" data-original="#eaf6ff"></path>
                                </g>
                                <path fill="#97d729"
                                    d="M206.393 39.066a7.477 7.477 0 0 1-5.303-2.196c-9.577-9.577-22.333-14.852-35.919-14.852s-26.342 5.274-35.919 14.852a7.501 7.501 0 0 1-10.606-10.607c12.41-12.409 28.933-19.244 46.525-19.244s34.116 6.835 46.525 19.244a7.5 7.5 0 0 1-5.303 12.803z"
                                    opacity="1" data-original="#97d729"></path>
                                <path fill="#97d729"
                                    d="M147.503 62.622a7.474 7.474 0 0 1-5.303-2.197 7.5 7.5 0 0 1 0-10.606c12.666-12.666 33.274-12.665 45.94 0a7.5 7.5 0 0 1-10.606 10.607c-6.817-6.817-17.91-6.818-24.727 0a7.485 7.485 0 0 1-5.304 2.196z"
                                    opacity="1" data-original="#97d729"></path>
                            </g>
                        </svg>
                        <div class="d-flex flex-column">
                            <span class="fw-bold fs-2x text-info lh-1 ls-n2" style="margin-top: -22px">Order NFC</span>
                        </div>
                    </div>
                    <a href="{{ $nfc }}"
                        class="btn btn-info rounded-0 h-100 d-flex justify-content-center align-items-center">
                        <i class="fa-solid fa-cloud-arrow-up"></i>
                        <span>
                            NFC
                        </span>
                    </a>
                </div>
            </div>
        </div>
        <div class="col-md-3 mb-2 mb-xl-5 ps-0">
            <div class="card h-lg-100">
                <div class="card-body d-flex justify-content-between align-items-center p-0 bg-light-info shadow-sm">
                    <div class="m-0 ps-5">
                        <svg xmlns="http://www.w3.org/2000/svg" version="1.1"
                            xmlns:xlink="http://www.w3.org/1999/xlink" width="70" height="60" x="0" y="0"
                            viewBox="0 0 512 512" style="enable-background:new 0 0 512 512" xml:space="preserve"
                            class="">
                            <g>
                                <linearGradient id="a">
                                    <stop offset="0" stop-color="#596c76"></stop>
                                    <stop offset=".284" stop-color="#4a5960"></stop>
                                    <stop offset=".875" stop-color="#232627"></stop>
                                    <stop offset="1" stop-color="#1a1a1a"></stop>
                                </linearGradient>
                                <linearGradient xlink:href="#a" id="i" x1="92.064" x2="92.064"
                                    y1="486.835" y2="518.85" gradientUnits="userSpaceOnUse"></linearGradient>
                                <linearGradient xlink:href="#a" id="j" x1="159.958" x2="329.597"
                                    y1="107.428" y2="470.486" gradientUnits="userSpaceOnUse"></linearGradient>
                                <linearGradient id="b">
                                    <stop offset="0" stop-color="#1a1a1a" stop-opacity="0"></stop>
                                    <stop offset=".426" stop-color="#121212" stop-opacity=".426"></stop>
                                    <stop offset="1"></stop>
                                </linearGradient>
                                <linearGradient xlink:href="#b" id="k" x1="470" x2="498"
                                    y1="310.835" y2="310.835" gradientUnits="userSpaceOnUse"></linearGradient>
                                <linearGradient id="c">
                                    <stop offset="0" stop-color="#016a74" stop-opacity="0"></stop>
                                    <stop offset="1" stop-color="#016a74"></stop>
                                </linearGradient>
                                <linearGradient xlink:href="#c" id="l" x1="466.874" x2="499.126"
                                    y1="294.709" y2="326.96" gradientUnits="userSpaceOnUse"></linearGradient>
                                <linearGradient xlink:href="#b" id="m" x1="255" x2="255"
                                    y1="466.835" y2="491.835" gradientUnits="userSpaceOnUse"></linearGradient>
                                <linearGradient id="d">
                                    <stop offset="0" stop-color="#fef48b"></stop>
                                    <stop offset="1" stop-color="#ffbf51"></stop>
                                </linearGradient>
                                <linearGradient xlink:href="#d" id="n" x1="176.507" x2="301.379"
                                    y1="124.431" y2="479.836" gradientUnits="userSpaceOnUse"></linearGradient>
                                <linearGradient id="e">
                                    <stop offset="0" stop-color="#fe9738" stop-opacity="0"></stop>
                                    <stop offset="1" stop-color="#fe9738"></stop>
                                </linearGradient>
                                <linearGradient xlink:href="#e" id="o" x1="404.236" x2="462.747"
                                    y1="310.835" y2="310.835" gradientUnits="userSpaceOnUse"></linearGradient>
                                <linearGradient xlink:href="#e" id="p" x1="430" x2="413.876"
                                    y1="274.167" y2="274.167" gradientUnits="userSpaceOnUse"></linearGradient>
                                <linearGradient id="q" x1="97" x2="413" y1="234.415"
                                    y2="234.415" gradientUnits="userSpaceOnUse">
                                    <stop offset="0" stop-color="#f9f5f3"></stop>
                                    <stop offset="1" stop-color="#efe2dd"></stop>
                                </linearGradient>
                                <linearGradient id="f">
                                    <stop offset="0" stop-color="#9e9797" stop-opacity="0"></stop>
                                    <stop offset=".356" stop-color="#9b9494" stop-opacity=".356"></stop>
                                    <stop offset=".628" stop-color="#928b8b" stop-opacity=".629"></stop>
                                    <stop offset=".872" stop-color="#827a7a" stop-opacity=".872"></stop>
                                    <stop offset="1" stop-color="#766e6e"></stop>
                                </linearGradient>
                                <linearGradient xlink:href="#f" id="r" x1="355.585" x2="421.735"
                                    y1="234.415" y2="234.415" gradientUnits="userSpaceOnUse"></linearGradient>
                                <linearGradient xlink:href="#f" id="s" x1="-75.264" x2="302.866"
                                    y1="88.74" y2="417.03" gradientUnits="userSpaceOnUse"></linearGradient>
                                <linearGradient xlink:href="#f" id="t" x1="-427.084" x2="537.011"
                                    y1="-208.264" y2="628.759" gradientUnits="userSpaceOnUse"></linearGradient>
                                <linearGradient xlink:href="#f" id="u" x1="-162.372" x2="360.549"
                                    y1="86.022" y2="540.019" gradientUnits="userSpaceOnUse"></linearGradient>
                                <linearGradient xlink:href="#f" id="v" x1="-20.337" x2="383.589"
                                    y1="154.543" y2="505.229" gradientUnits="userSpaceOnUse"></linearGradient>
                                <linearGradient xlink:href="#f" id="w" x1="-75.264" x2="302.866"
                                    y1="207.146" y2="535.436" gradientUnits="userSpaceOnUse"></linearGradient>
                                <linearGradient xlink:href="#f" id="x" x1="-421.008" x2="534.207"
                                    y1="-85.605" y2="743.707" gradientUnits="userSpaceOnUse"></linearGradient>
                                <linearGradient xlink:href="#f" id="y" x1="-51.916" x2="471.005"
                                    y1="124.482" y2="578.479" gradientUnits="userSpaceOnUse"></linearGradient>
                                <linearGradient xlink:href="#f" id="z" x1="-36.105" x2="367.821"
                                    y1="193.003" y2="543.689" gradientUnits="userSpaceOnUse"></linearGradient>
                                <linearGradient xlink:href="#f" id="A" x1="53.039" x2="431.171"
                                    y1="170.106" y2="498.398" gradientUnits="userSpaceOnUse"></linearGradient>
                                <linearGradient xlink:href="#f" id="B" x1="-51.916" x2="471.005"
                                    y1="6.076" y2="460.073" gradientUnits="userSpaceOnUse"></linearGradient>
                                <linearGradient xlink:href="#f" id="C" x1="-36.105" x2="367.821"
                                    y1="74.596" y2="425.283" gradientUnits="userSpaceOnUse"></linearGradient>
                                <linearGradient id="D" x1="201.743" x2="293.9" y1="142.439"
                                    y2="234.596" gradientUnits="userSpaceOnUse">
                                    <stop offset="0" stop-color="#a6e7f0"></stop>
                                    <stop offset=".171" stop-color="#90e2ed"></stop>
                                    <stop offset=".529" stop-color="#56d7e7"></stop>
                                    <stop offset="1" stop-color="#02c7dd"></stop>
                                </linearGradient>
                                <linearGradient id="E" x1="-4331.107" x2="-4331.107" y1="-3402.95"
                                    y2="-3376.838" gradientTransform="rotate(-90 -199 -3936.412)"
                                    gradientUnits="userSpaceOnUse">
                                    <stop offset="0" stop-color="#0199b1" stop-opacity="0"></stop>
                                    <stop offset="1" stop-color="#0199b1"></stop>
                                </linearGradient>
                                <linearGradient xlink:href="#d" id="F" x1="276.287" x2="304.236"
                                    y1="155.211" y2="183.159" gradientUnits="userSpaceOnUse"></linearGradient>
                                <linearGradient xlink:href="#e" id="G" x1="288.167" x2="288.167"
                                    y1="167.479" y2="203.645" gradientUnits="userSpaceOnUse"></linearGradient>
                                <linearGradient xlink:href="#e" id="H" x1="-2948.916" x2="-2948.916"
                                    y1="-1199.517" y2="-1161.449" gradientTransform="rotate(-45 320.567 -4424.188)"
                                    gradientUnits="userSpaceOnUse"></linearGradient>
                                <linearGradient id="g">
                                    <stop offset="0" stop-color="#c9f6b0"></stop>
                                    <stop offset="1" stop-color="#0bb494"></stop>
                                </linearGradient>
                                <linearGradient xlink:href="#g" id="I" x1="174.869" x2="245.464"
                                    y1="201.075" y2="271.67" gradientUnits="userSpaceOnUse"></linearGradient>
                                <linearGradient xlink:href="#g" id="J" x1="292.013" x2="328.966"
                                    y1="228.122" y2="265.076" gradientUnits="userSpaceOnUse"></linearGradient>
                                <linearGradient xlink:href="#c" id="K" x1="255" x2="255"
                                    y1="241.991" y2="277.436" gradientUnits="userSpaceOnUse"></linearGradient>
                                <linearGradient xlink:href="#f" id="L" x1="127.214" x2="212.71"
                                    y1="-50.042" y2="210.946" gradientUnits="userSpaceOnUse"></linearGradient>
                                <linearGradient xlink:href="#f" id="M" x1="167.619" x2="294.333"
                                    y1="-118.203" y2="268.609" gradientUnits="userSpaceOnUse"></linearGradient>
                                <linearGradient xlink:href="#f" id="N" x1="257.573" x2="343.069"
                                    y1="-49.425" y2="211.563" gradientUnits="userSpaceOnUse"></linearGradient>
                                <linearGradient xlink:href="#a" id="O" x1="252.981" x2="257.981"
                                    y1="5.7" y2="68.7" gradientUnits="userSpaceOnUse"></linearGradient>
                                <linearGradient id="h">
                                    <stop offset="0" stop-color="#d9b1ee"></stop>
                                    <stop offset=".123" stop-color="#dba3e3"></stop>
                                    <stop offset=".351" stop-color="#e381c8"></stop>
                                    <stop offset=".659" stop-color="#ef499b"></stop>
                                    <stop offset="1" stop-color="#fe0364"></stop>
                                </linearGradient>
                                <linearGradient xlink:href="#h" id="P" x1="385.197" x2="445.716"
                                    y1="403.725" y2="464.244" gradientUnits="userSpaceOnUse"></linearGradient>
                                <linearGradient xlink:href="#h" id="Q" x1="134.79" x2="147.79"
                                    y1="9.157" y2="35.157" gradientUnits="userSpaceOnUse"></linearGradient>
                                <linearGradient xlink:href="#d" id="R" x1="186.79" x2="199.79"
                                    y1="9.157" y2="35.157" gradientUnits="userSpaceOnUse"></linearGradient>
                                <linearGradient xlink:href="#g" id="S" x1="238.79" x2="251.79"
                                    y1="9.157" y2="35.157" gradientUnits="userSpaceOnUse"></linearGradient>
                                <path fill="url(#a)"
                                    d="M63.336 510h57.454c5.31 0 9.615-4.305 9.615-9.615a9.615 9.615 0 0 0-9.615-9.615H63.336c-5.31 0-9.615 4.305-9.615 9.615S58.026 510 63.336 510z"
                                    opacity="1" data-original="url(#a)"></path>
                                <path fill="url(#a)"
                                    d="M480 499.335H30c-16.569 0-30-13.431-30-30v-317c0-16.569 13.431-30 30-30h450c16.569 0 30 13.431 30 30v317c0 16.568-13.431 30-30 30z"
                                    opacity="1" data-original="url(#a)"></path>
                                <path fill="url(#b)"
                                    d="M480 122.335H297v377h183c16.569 0 30-13.431 30-30v-317c0-16.569-13.431-30-30-30z"
                                    opacity="1" data-original="url(#b)" class=""></path>
                                <path fill="url(#c)"
                                    d="M496.078 324.971v-28.273c0-6.922-5.855-12.534-13.078-12.534s-13.078 5.612-13.078 12.534v28.273c0 6.923 5.855 12.534 13.078 12.534s13.078-5.611 13.078-12.534z"
                                    opacity="1" data-original="url(#c)" class=""></path>
                                <path fill="url(#b)"
                                    d="M0 409.835v59.5c0 16.569 13.431 30 30 30h450c16.569 0 30-13.431 30-30v-59.5z"
                                    opacity="1" data-original="url(#b)" class=""></path>
                                <path fill="url(#d)"
                                    d="M441.022 152.835H42.978c-9.377 0-16.978 9.548-16.978 21.327v273.346c0 11.779 7.601 21.327 16.978 21.327h398.044c9.377 0 16.978-9.548 16.978-21.327V174.161c0-11.778-7.601-21.326-16.978-21.326z"
                                    opacity="1" data-original="url(#d)"></path>
                                <path fill="url(#e)"
                                    d="M281.616 468.835h159.406c9.377 0 16.978-9.548 16.978-21.327V174.161c0-11.779-7.601-21.327-16.978-21.327H281.616z"
                                    opacity="1" data-original="url(#e)"></path>
                                <path fill="url(#e)"
                                    d="M420.5 350.888a7.5 7.5 0 0 0 7.5-7.5V204.947a7.5 7.5 0 0 0-15 0v138.441a7.5 7.5 0 0 0 7.5 7.5z"
                                    opacity="1" data-original="url(#e)"></path>
                                <path fill="#ffffff"
                                    d="M420.5 312.78a7.5 7.5 0 0 0 7.5-7.5v-61.333a7.5 7.5 0 0 0-15 0v61.333a7.5 7.5 0 0 0 7.5 7.5z"
                                    opacity="1" data-original="#ffffff"></path>
                                <path fill="url(#q)"
                                    d="M413 13.83v455H97v-455C97 6.19 103.19 0 110.83 0h288.34C406.81 0 413 6.19 413 13.83z"
                                    opacity="1" data-original="url(#q)" class=""></path>
                                <path fill="url(#q)"
                                    d="M413 13.83v455H97v-455C97 6.19 103.19 0 110.83 0h288.34C406.81 0 413 6.19 413 13.83z"
                                    opacity="1" data-original="url(#q)" class=""></path>
                                <path fill="url(#f)" d="M413 13.83v455H252V0h147.17C406.81 0 413 6.19 413 13.83z"
                                    opacity="1" data-original="url(#f)" class=""></path>
                                <path fill="url(#f)"
                                    d="M165.418 316.895h20.224c5.753 0 10.418-4.664 10.418-10.418s-4.664-10.418-10.418-10.418h-20.224c-5.754 0-10.418 4.664-10.418 10.418 0 5.753 4.664 10.418 10.418 10.418z"
                                    opacity="1" data-original="url(#f)" class=""></path>
                                <path fill="url(#f)"
                                    d="M155 346.889c0 6.146 4.982 11.128 11.128 11.128h92.441c6.146 0 11.128-4.982 11.128-11.128s-4.982-11.128-11.128-11.128h-92.441c-6.146-.001-11.128 4.982-11.128 11.128z"
                                    opacity="1" data-original="url(#f)" class=""></path>
                                <path fill="url(#f)"
                                    d="M202.78 376.006h-36.651c-6.146 0-11.128 4.982-11.128 11.128s4.982 11.128 11.128 11.128h36.651c6.146 0 11.128-4.982 11.128-11.128s-4.982-11.128-11.128-11.128z"
                                    opacity="1" data-original="url(#f)" class=""></path>
                                <path fill="url(#f)"
                                    d="M269.496 387.134c0-6.147-4.982-11.128-11.128-11.128h-21.604c-6.146 0-11.128 4.982-11.128 11.128s4.982 11.128 11.128 11.128h21.604c6.146.001 11.128-4.982 11.128-11.128z"
                                    opacity="1" data-original="url(#f)" class=""></path>
                                <path fill="url(#f)"
                                    d="M165.418 435.301h20.224c5.753 0 10.418-4.664 10.418-10.418s-4.664-10.418-10.418-10.418h-20.224c-5.754 0-10.418 4.664-10.418 10.418s4.664 10.418 10.418 10.418z"
                                    opacity="1" data-original="url(#f)" class=""></path>
                                <path fill="url(#f)"
                                    d="M269.697 465.295c0-6.146-4.982-11.128-11.128-11.128h-92.441c-6.146 0-11.128 4.982-11.128 11.128 0 1.237.21 2.423.583 3.535h113.532c.372-1.112.582-2.298.582-3.535z"
                                    opacity="1" data-original="url(#f)" class=""></path>
                                <path fill="url(#f)"
                                    d="M324.363 425.594c0-6.146-4.982-11.128-11.128-11.128h-36.651c-6.146 0-11.128 4.982-11.128 11.128s4.982 11.128 11.128 11.128h36.651c6.146.001 11.128-4.982 11.128-11.128z"
                                    opacity="1" data-original="url(#f)" class=""></path>
                                <path fill="url(#f)"
                                    d="M220.996 436.723H242.6c6.146 0 11.128-4.982 11.128-11.128s-4.982-11.128-11.128-11.128h-21.604c-6.146 0-11.128 4.982-11.128 11.128s4.982 11.128 11.128 11.128z"
                                    opacity="1" data-original="url(#f)" class=""></path>
                                <path fill="url(#f)"
                                    d="M313.946 377.427h-20.224c-5.753 0-10.418 4.664-10.418 10.418s4.664 10.418 10.418 10.418h20.224c5.754 0 10.418-4.664 10.418-10.418-.001-5.754-4.665-10.418-10.418-10.418z"
                                    opacity="1" data-original="url(#f)" class=""></path>
                                <path fill="url(#f)"
                                    d="M276.584 318.316h36.651c6.146 0 11.128-4.982 11.128-11.128s-4.982-11.128-11.128-11.128h-36.651c-6.146 0-11.128 4.982-11.128 11.128-.001 6.146 4.982 11.128 11.128 11.128z"
                                    opacity="1" data-original="url(#f)" class=""></path>
                                <path fill="url(#f)"
                                    d="M220.996 318.316H242.6c6.146 0 11.128-4.982 11.128-11.128s-4.982-11.128-11.128-11.128h-21.604c-6.146 0-11.128 4.982-11.128 11.128s4.982 11.128 11.128 11.128z"
                                    opacity="1" data-original="url(#f)" class=""></path>
                                <path fill="url(#D)"
                                    d="M344.154 269.387H165.846c-9.778 0-17.704-7.926-17.704-17.704V139.709c0-9.778 7.926-17.704 17.704-17.704h178.307c9.778 0 17.704 7.926 17.704 17.704v111.975c.001 9.777-7.926 17.703-17.703 17.703z"
                                    opacity="1" data-original="url(#D)"></path>
                                <path fill="url(#E)"
                                    d="M288.166 269.387h55.987c9.778 0 17.704-7.926 17.704-17.704V139.709c0-9.778-7.926-17.704-17.704-17.704h-55.987z"
                                    opacity="1" data-original="url(#E)"></path>
                                <path fill="#ffffff"
                                    d="M172.23 185.033h39.386c6.605 0 11.959-5.354 11.959-11.958 0-6.605-5.354-11.959-11.959-11.959H172.23c-6.605 0-11.959 5.354-11.959 11.959 0 6.604 5.354 11.958 11.959 11.958z"
                                    opacity="1" data-original="#ffffff"></path>
                                <circle cx="288.166" cy="167.09" r="30.744" fill="url(#F)" opacity="1"
                                    data-original="url(#F)"></circle>
                                <path fill="url(#e)"
                                    d="M257.423 167.09c0 16.979 13.764 30.744 30.744 30.744 16.979 0 30.744-13.765 30.744-30.744 0-3.677-.648-7.203-1.832-10.471h-57.824a30.657 30.657 0 0 0-1.832 10.471z"
                                    opacity="1" data-original="url(#e)"></path>
                                <path fill="url(#e)"
                                    d="M266.427 188.829c12.006 12.006 31.472 12.006 43.478 0s12.006-31.472 0-43.478a30.679 30.679 0 0 0-8.7-6.109l-40.888 40.888a30.712 30.712 0 0 0 6.11 8.699z"
                                    opacity="1" data-original="url(#e)"></path>
                                <path fill="#ffffff"
                                    d="M305.319 154.898h26.975c6.605 0 11.959-5.354 11.959-11.958 0-6.605-5.354-11.959-11.959-11.959h-26.975c-6.605 0-11.959 5.354-11.959 11.959.001 6.604 5.354 11.958 11.959 11.958z"
                                    opacity="1" data-original="#ffffff"></path>
                                <path fill="url(#g)"
                                    d="M165.846 269.387h133.161l-53.802-81.518c-15.037-22.783-48.466-22.783-63.503 0l-33.56 50.848v12.966c0 9.778 7.927 17.704 17.704 17.704z"
                                    opacity="1" data-original="url(#g)"></path>
                                <path fill="url(#g)"
                                    d="M344.154 269.387c9.778 0 17.704-7.926 17.704-17.704v-19.89l-5.094-7.718c-15.037-22.783-48.466-22.783-63.503 0l-29.906 45.312z"
                                    opacity="1" data-original="url(#g)"></path>
                                <path fill="url(#c)"
                                    d="M148.142 195.696v55.987c0 9.778 7.926 17.704 17.704 17.704h178.307c9.778 0 17.704-7.926 17.704-17.704v-55.987z"
                                    opacity="1" data-original="url(#c)" class=""></path>
                                <path fill="url(#f)"
                                    d="M164.615 102.235h18.666c5.31 0 9.615-4.305 9.615-9.615a9.615 9.615 0 0 0-9.615-9.615h-18.666c-5.311 0-9.615 4.305-9.615 9.615s4.304 9.615 9.615 9.615z"
                                    opacity="1" data-original="url(#f)" class=""></path>
                                <path fill="url(#f)"
                                    d="M265.611 83.622h-57.454a9.615 9.615 0 0 0-9.615 9.615 9.615 9.615 0 0 0 9.615 9.615h57.454c5.31 0 9.615-4.305 9.615-9.615s-4.305-9.615-9.615-9.615z"
                                    opacity="1" data-original="url(#f)" class=""></path>
                                <path fill="url(#f)"
                                    d="M294.974 102.852h18.666a9.615 9.615 0 0 0 9.615-9.615 9.615 9.615 0 0 0-9.615-9.615h-18.666c-5.31 0-9.615 4.305-9.615 9.615s4.305 9.615 9.615 9.615z"
                                    opacity="1" data-original="url(#f)" class=""></path>
                                <path fill="url(#a)"
                                    d="M399.17 0H110.83C103.19 0 97 6.19 97 13.83V49h316V13.83C413 6.19 406.81 0 399.17 0z"
                                    opacity="1" data-original="url(#a)"></path>
                                <path fill="url(#h)"
                                    d="m425.803 491.805 38.703-38.703a7.5 7.5 0 0 0-10.607-10.607l-25.9 25.9v-76.839a7.5 7.5 0 0 0-15 0v76.839l-25.9-25.9a7.5 7.5 0 0 0-10.607 10.607l38.703 38.703a7.503 7.503 0 0 0 10.608 0z"
                                    opacity="1" data-original="url(#h)"></path>
                                <path fill="url(#h)"
                                    d="M151.794 14.885h-18.666c-5.311 0-9.615 4.305-9.615 9.615s4.305 9.615 9.615 9.615h18.666c5.31 0 9.615-4.305 9.615-9.615s-4.305-9.615-9.615-9.615z"
                                    opacity="1" data-original="url(#h)"></path>
                                <path fill="url(#d)"
                                    d="M203.794 14.885h-18.666c-5.311 0-9.615 4.305-9.615 9.615s4.305 9.615 9.615 9.615h18.666c5.31 0 9.615-4.305 9.615-9.615s-4.305-9.615-9.615-9.615z"
                                    opacity="1" data-original="url(#d)"></path>
                                <path fill="url(#g)"
                                    d="M255.794 14.885h-18.666c-5.311 0-9.615 4.305-9.615 9.615s4.305 9.615 9.615 9.615h18.666c5.31 0 9.615-4.305 9.615-9.615s-4.305-9.615-9.615-9.615z"
                                    opacity="1" data-original="url(#g)"></path>
                            </g>
                        </svg>
                        <div class="d-flex flex-column">
                            <span class="fw-bold fs-2x text-info lh-1 ls-n2" style="margin-top: 0px">VCard
                                Live</span>
                        </div>
                    </div>
                    <a class="btn btn-info rounded-0 h-100 d-flex justify-content-center align-items-center"
                        href="{{ $nfc_card->nfc_url }}" target="_blank" rel="noopener noreferrer">
                        <i class="fa-solid fa-expand"></i>
                        <span>
                            Preview
                        </span>
                    </a>
                </div>
            </div>
        </div>
        <div class="col-md-3 mb-2 mb-xl-5 ps-0">
            <div class="card h-lg-100">
                <div
                    class="card-body d-flex justify-content-between align-items-center p-0 bg-light-warning shadow-sm">
                    <div class="m-0 ps-5">
                        <svg xmlns="http://www.w3.org/2000/svg" version="1.1"
                            xmlns:xlink="http://www.w3.org/1999/xlink" width="60" height="60" x="0" y="0"
                            viewBox="0 0 512 512" style="enable-background:new 0 0 512 512" xml:space="preserve"
                            class="">
                            <g>
                                <path fill="#0ed2b3"
                                    d="M206.74 74.888c0-19.233 15.647-34.879 34.879-34.879h50.468v-29.75C292.087 4.593 287.495 0 281.829 0H77.341c-5.666 0-10.259 4.593-10.259 10.259v304.68H206.74z"
                                    opacity="1" data-original="#0ed2b3"></path>
                                <path fill="#0ab69f"
                                    d="M281.829 0h-42.213c5.666 0 10.259 4.593 10.259 10.258v29.75h42.213v-29.75C292.087 4.593 287.495 0 281.829 0z"
                                    opacity="1" data-original="#0ab69f"></path>
                                <path fill="#ffffff"
                                    d="M206.74 237.016h-60.324c-4.142 0-7.5 3.357-7.5 7.5s3.358 7.5 7.5 7.5h60.324zM206.74 74.888a34.667 34.667 0 0 1 3.588-15.388H108.801a5.129 5.129 0 0 0-5.129 5.129v141.569a5.129 5.129 0 0 0 5.129 5.129h97.939zM121.795 252.016h-18.124c-4.142 0-7.5-3.357-7.5-7.5s3.358-7.5 7.5-7.5h18.124c4.142 0 7.5 3.357 7.5 7.5s-3.358 7.5-7.5 7.5z"
                                    opacity="1" data-original="#ffffff" class=""></path>
                                <path fill="#766e6e"
                                    d="M151.798 111.627h-27a4 4 0 0 1-4-4v-27a4 4 0 0 1 4-4h27a4 4 0 0 1 4 4v27a4 4 0 0 1-4 4zM151.798 194.2h-27a4 4 0 0 1-4-4v-27a4 4 0 0 1 4-4h27a4 4 0 0 1 4 4v27a4 4 0 0 1-4 4z"
                                    opacity="1" data-original="#766e6e" class=""></path>
                                <path fill="#766e6e"
                                    d="M179.585 142.913h-28.498c-4.142 0-7.5-3.357-7.5-7.5s3.358-7.5 7.5-7.5h20.998V79.478c0-4.143 3.358-7.5 7.5-7.5s7.5 3.357 7.5 7.5v55.936a7.5 7.5 0 0 1-7.5 7.499zM130.974 142.913h-7.325c-4.142 0-7.5-3.357-7.5-7.5s3.358-7.5 7.5-7.5h7.325c4.142 0 7.5 3.357 7.5 7.5s-3.358 7.5-7.5 7.5zM206.74 154.628a7.54 7.54 0 0 0-1.026-.078h-26.129a7.5 7.5 0 0 0-7.5 7.5v29.3c0 4.143 3.358 7.5 7.5 7.5s7.5-3.357 7.5-7.5v-21.8h18.629c.349 0 .69-.032 1.026-.078z"
                                    opacity="1" data-original="#766e6e" class=""></path>
                                <path fill="#ffffff"
                                    d="M206.74 265.961H103.671c-4.142 0-7.5 3.357-7.5 7.5s3.358 7.5 7.5 7.5H206.74z"
                                    opacity="1" data-original="#ffffff" class=""></path>
                                <path fill="#ffd15b"
                                    d="M206.74 313.913H55.456c-8.499 0-15.388 6.889-15.388 15.388v21.543a5.129 5.129 0 0 0 5.129 5.129H206.74z"
                                    opacity="1" data-original="#ffd15b"></path>
                                <path fill="#dff6fd"
                                    d="M464.432 446.366V74.888c0-19.83-16.075-35.905-35.905-35.905H241.619c-19.83 0-35.905 16.075-35.905 35.905v371.478z"
                                    opacity="1" data-original="#dff6fd" class=""></path>
                                <path fill="#c8effe"
                                    d="M428.527 38.983H386.75c19.83 0 35.905 16.075 35.905 35.905v371.478h41.777V74.888c0-19.83-16.075-35.905-35.905-35.905z"
                                    opacity="1" data-original="#c8effe" class=""></path>
                                <path fill="#8379c1"
                                    d="M205.714 468.595c0 19.83 16.075 35.905 35.905 35.905h186.908c19.83 0 35.905-16.075 35.905-35.905V445.34H205.714z"
                                    opacity="1" data-original="#8379c1" class=""></path>
                                <path fill="#6e61b6"
                                    d="M422.655 445.34v23.255c0 19.83-16.075 35.905-35.905 35.905h41.777c19.83 0 35.905-16.075 35.905-35.905V445.34z"
                                    opacity="1" data-original="#6e61b6"></path>
                                <path fill="#0ed2b3"
                                    d="M396.453 401.133H273.692c-8.499 0-15.388-6.889-15.388-15.388v-25.601c0-8.499 6.889-15.388 15.388-15.388h122.761c8.499 0 15.388 6.889 15.388 15.388v25.601c0 8.499-6.889 15.388-15.388 15.388z"
                                    opacity="1" data-original="#0ed2b3"></path>
                                <path fill="#0ab69f"
                                    d="M396.453 344.757h-42.598c8.498 0 15.388 6.889 15.388 15.388v25.601c0 8.499-6.889 15.388-15.388 15.388h42.598c8.499 0 15.388-6.889 15.388-15.388v-25.601c0-8.499-6.889-15.388-15.388-15.388z"
                                    opacity="1" data-original="#0ab69f"></path>
                                <path fill="#ffffff"
                                    d="M379.185 380.445h-88.224c-4.142 0-7.5-3.357-7.5-7.5s3.358-7.5 7.5-7.5h88.224c4.142 0 7.5 3.357 7.5 7.5s-3.358 7.5-7.5 7.5z"
                                    opacity="1" data-original="#ffffff" class=""></path>
                                <path fill="#8379c1"
                                    d="M262.337 75.497h-21.173c-4.142 0-7.5-3.357-7.5-7.5s3.358-7.5 7.5-7.5h21.173c4.142 0 7.5 3.357 7.5 7.5s-3.358 7.5-7.5 7.5z"
                                    opacity="1" data-original="#8379c1" class=""></path>
                                <path fill="#54469c"
                                    d="M362.771 480.711h-55.396c-4.142 0-7.5-3.357-7.5-7.5s3.358-7.5 7.5-7.5h55.396c4.142 0 7.5 3.357 7.5 7.5s-3.358 7.5-7.5 7.5z"
                                    opacity="1" data-original="#54469c" class=""></path>
                                <path fill="#ffffff"
                                    d="M413.742 303.517H256.403a5.075 5.075 0 0 1-5.075-5.075v-157.34a5.075 5.075 0 0 1 5.075-5.075h157.339a5.075 5.075 0 0 1 5.075 5.075v157.339a5.074 5.074 0 0 1-5.075 5.076z"
                                    opacity="1" data-original="#ffffff" class=""></path>
                                <path fill="#f9f3f1"
                                    d="M413.742 136.027h-30.546a5.075 5.075 0 0 1 5.075 5.075v157.339a5.075 5.075 0 0 1-5.075 5.075h30.546a5.075 5.075 0 0 0 5.075-5.075V141.102a5.074 5.074 0 0 0-5.075-5.075z"
                                    opacity="1" data-original="#f9f3f1" class=""></path>
                                <path fill="#99e6fc"
                                    d="M413.743 311.017h-157.34c-6.934 0-12.575-5.642-12.575-12.575V141.103c0-6.934 5.641-12.575 12.575-12.575h157.339c6.934 0 12.575 5.642 12.575 12.575v157.339c.001 6.933-5.64 12.575-12.574 12.575zm-154.915-15h152.49v-152.49h-152.49z"
                                    opacity="1" data-original="#99e6fc" class=""></path>
                                <path fill="#766e6e"
                                    d="M306.633 195.332h-32a4 4 0 0 1-4-4v-32a4 4 0 0 1 4-4h32a4 4 0 0 1 4 4v32a4 4 0 0 1-4 4zM395.513 195.332h-32a4 4 0 0 1-4-4v-32a4 4 0 0 1 4-4h32a4 4 0 0 1 4 4v32a4 4 0 0 1-4 4zM306.633 284.212h-32a4 4 0 0 1-4-4v-32a4 4 0 0 1 4-4h32a4 4 0 0 1 4 4v32a4 4 0 0 1-4 4zM395.282 287.481h-31.538c-4.142 0-7.5-3.357-7.5-7.5s3.358-7.5 7.5-7.5h24.038v-24.038c0-4.143 3.358-7.5 7.5-7.5s7.5 3.357 7.5 7.5v31.538a7.5 7.5 0 0 1-7.5 7.5z"
                                    opacity="1" data-original="#766e6e" class=""></path>
                                <path fill="#766e6e"
                                    d="M335.073 227.271h-30.675c-4.142 0-7.5-3.357-7.5-7.5s3.358-7.5 7.5-7.5h23.175v-52.709c0-4.143 3.358-7.5 7.5-7.5s7.5 3.357 7.5 7.5v60.209a7.5 7.5 0 0 1-7.5 7.5zM282.748 227.271h-7.885c-4.142 0-7.5-3.357-7.5-7.5s3.358-7.5 7.5-7.5h7.885c4.142 0 7.5 3.357 7.5 7.5s-3.357 7.5-7.5 7.5zM373.256 227.271h-9.512c-4.142 0-7.5-3.357-7.5-7.5s3.358-7.5 7.5-7.5h9.512c4.142 0 7.5 3.357 7.5 7.5s-3.358 7.5-7.5 7.5zM395.282 227.271h-1.97c-4.142 0-7.5-3.357-7.5-7.5s3.358-7.5 7.5-7.5h1.97c4.142 0 7.5 3.357 7.5 7.5s-3.358 7.5-7.5 7.5zM335.073 287.481a7.5 7.5 0 0 1-7.5-7.5v-31.538a7.5 7.5 0 0 1 7.5-7.5h38.184c4.142 0 7.5 3.357 7.5 7.5s-3.358 7.5-7.5 7.5h-30.684v24.038a7.5 7.5 0 0 1-7.5 7.5z"
                                    opacity="1" data-original="#766e6e" class=""></path>
                                <path fill="#54469c"
                                    d="M428.527 512H241.619c-23.934 0-43.405-19.472-43.405-43.405V74.888c0-23.934 19.472-43.405 43.405-43.405h186.908c23.934 0 43.405 19.472 43.405 43.405v393.707c0 23.933-19.472 43.405-43.405 43.405zM241.619 46.482c-15.663 0-28.405 12.742-28.405 28.405v393.707c0 15.663 12.743 28.405 28.405 28.405h186.908c15.663 0 28.405-12.742 28.405-28.405V74.888c0-15.663-12.743-28.405-28.405-28.405H241.619z"
                                    opacity="1" data-original="#54469c" class=""></path>
                                <g fill="#8379c1">
                                    <circle cx="403.25" cy="67.998" r="7.5" fill="#8379c1" opacity="1"
                                        data-original="#8379c1" class=""></circle>
                                    <circle cx="428.98" cy="67.998" r="7.5" fill="#8379c1" opacity="1"
                                        data-original="#8379c1" class=""></circle>
                                </g>
                            </g>
                        </svg>
                        <div class="d-flex flex-column">
                            <span class="fw-bold fs-2x text-info lh-1 ls-n2">QR Code</span>
                        </div>
                    </div>
                    <a href="{{ asset('storage/nfc/qrs/' . $nfc_card->nfc_qr) }}" download=""
                        class="btn btn-info rounded-0 h-100 d-flex justify-content-center align-items-center">
                        <i class="fa-solid fa-qrcode"></i><span> Download</span>
                    </a>
                </div>
            </div>
        </div>
        <div class="col-md-3 mb-2 mb-xl-5 ps-0">
            <div class="card h-lg-100">
                <div class="card-body d-flex justify-content-between align-items-center p-0 bg-light-danger shadow-sm">
                    <div class="m-0 p-5">
                        <svg xmlns="http://www.w3.org/2000/svg" version="1.1"
                            xmlns:xlink="http://www.w3.org/1999/xlink" width="60" height="60" x="0" y="0"
                            viewBox="0 0 512 512" style="enable-background:new 0 0 512 512" xml:space="preserve"
                            class="">
                            <g>
                                <linearGradient id="a" x1="150.18" x2="275" y1="132.1"
                                    y2="132.1" gradientUnits="userSpaceOnUse">
                                    <stop offset="0" stop-color="#cacfdd"></stop>
                                    <stop offset="1" stop-color="#eef0f1"></stop>
                                </linearGradient>
                                <linearGradient xlink:href="#a" id="b" x1="278.04" x2="360.11"
                                    y1="168.33" y2="168.33"></linearGradient>
                                <path fill="#f5f5f5"
                                    d="M275 49.63V159a13.63 13.63 0 0 1-13.63 13.63H72.09A13.62 13.62 0 0 1 58.47 159V49.63A13.63 13.63 0 0 1 72.09 36h189.29A13.63 13.63 0 0 1 275 49.63z"
                                    opacity="1" data-original="#f5f5f5" class=""></path>
                                <path fill="#e1830e" d="M58.47 64.58H275v32.05H58.47z" opacity="1"
                                    data-original="#e1830e" class=""></path>
                                <path fill="url(#a)"
                                    d="M275 91.6V159a13.63 13.63 0 0 1-13.63 13.63H150.18v-36.1a45 45 0 0 1 44.94-44.93z"
                                    opacity="1" data-original="url(#a)"></path>
                                <path fill="#5e6175"
                                    d="M261.38 175.61H72.09A16.66 16.66 0 0 1 55.47 159V49.63A16.65 16.65 0 0 1 72.09 33h189.29A16.65 16.65 0 0 1 278 49.63V159a16.65 16.65 0 0 1-16.62 16.61zM72.09 39a10.64 10.64 0 0 0-10.62 10.63V159a10.64 10.64 0 0 0 10.62 10.64h189.29A10.64 10.64 0 0 0 272 159V49.63A10.64 10.64 0 0 0 261.38 39z"
                                    opacity="1" data-original="#5e6175"></path>
                                <path fill="#dee1ec"
                                    d="M360.11 136.53v294.1a28.92 28.92 0 0 1-28.91 28.93H195.12a28.94 28.94 0 0 1-28.94-28.93v-294.1a28.93 28.93 0 0 1 28.94-28.93H331.2a28.92 28.92 0 0 1 28.91 28.93z"
                                    opacity="1" data-original="#dee1ec"></path>
                                <path fill="#f5f5f5"
                                    d="M345 135.15V432a12.43 12.43 0 0 1-12.43 12.44H193.75A12.44 12.44 0 0 1 181.31 432V135.15a12.44 12.44 0 0 1 12.44-12.44h29.87a7.73 7.73 0 0 1 7.72 7.73 7.72 7.72 0 0 0 7.73 7.72h48.13a7.72 7.72 0 0 0 7.73-7.72 7.72 7.72 0 0 1 7.72-7.73h29.91A12.43 12.43 0 0 1 345 135.15z"
                                    opacity="1" data-original="#f5f5f5" class=""></path>
                                <path fill="url(#a)"
                                    d="M360.11 136.53v92.54A82.31 82.31 0 0 1 288 107.6h43.2a28.92 28.92 0 0 1 28.91 28.93z"
                                    opacity="1" data-original="url(#a)"></path>
                                <path fill="#5e6175"
                                    d="M331.19 462.56H195.12a32 32 0 0 1-31.94-31.93v-294.1a32 32 0 0 1 31.94-31.93h136.07a31.94 31.94 0 0 1 31.93 31.93v294.1a32 32 0 0 1-31.93 31.93zm-136.07-352a26 26 0 0 0-25.94 25.93v294.1a26 26 0 0 0 25.94 25.93h136.07a26 26 0 0 0 25.93-25.93V136.53a25.93 25.93 0 0 0-25.93-25.93z"
                                    opacity="1" data-original="#5e6175"></path>
                                <path fill="#dee1ec"
                                    d="M160.89 277.67h-7.4a20.78 20.78 0 0 1 0-41.56h7.4a20.78 20.78 0 0 1 0 41.56zM160.89 319.22h-13.62a20.78 20.78 0 0 1 0-41.55h13.62a20.78 20.78 0 0 1 0 41.55z"
                                    opacity="1" data-original="#dee1ec"></path>
                                <path fill="#dee1ec"
                                    d="M160.89 360.77h-13.62a20.78 20.78 0 0 1 0-41.55h13.62a20.78 20.78 0 0 1 0 41.55z"
                                    opacity="1" data-original="#dee1ec"></path>
                                <path fill="#dee1ec"
                                    d="M160.89 402.32h-7.4a20.78 20.78 0 1 1 0-41.55h7.4a20.78 20.78 0 0 1 0 41.55z"
                                    opacity="1" data-original="#dee1ec"></path>
                                <g fill="#5e6175">
                                    <path
                                        d="M160.89 280.67h-7.4a23.78 23.78 0 0 1 0-47.56h7.4a23.78 23.78 0 0 1 0 47.56zm-7.4-41.56a17.78 17.78 0 0 0 0 35.56h7.4a17.78 17.78 0 0 0 0-35.56z"
                                        fill="#5e6175" opacity="1" data-original="#5e6175"></path>
                                    <path
                                        d="M160.89 322.22h-13.62a23.78 23.78 0 0 1 0-47.55h13.62a23.78 23.78 0 0 1 0 47.55zm-13.62-41.55a17.78 17.78 0 0 0 0 35.55h13.62a17.78 17.78 0 0 0 0-35.55z"
                                        fill="#5e6175" opacity="1" data-original="#5e6175"></path>
                                    <path
                                        d="M160.89 363.77h-13.62a23.78 23.78 0 0 1 0-47.55h13.62a23.78 23.78 0 0 1 0 47.55zm-13.62-41.55a17.78 17.78 0 0 0 0 35.55h13.62a17.78 17.78 0 0 0 0-35.55z"
                                        fill="#5e6175" opacity="1" data-original="#5e6175"></path>
                                    <path
                                        d="M160.89 405.32h-7.4a23.78 23.78 0 1 1 0-47.55h7.4a23.78 23.78 0 0 1 0 47.55zm-7.4-41.55a17.78 17.78 0 1 0 0 35.55h7.4a17.78 17.78 0 0 0 0-35.55z"
                                        fill="#5e6175" opacity="1" data-original="#5e6175"></path>
                                </g>
                                <path fill="#dee1ec"
                                    d="m453.53 475.89-161.12.11L268 459.57h63.2a28.94 28.94 0 0 0 28.92-28.94V316.45A32.87 32.87 0 0 1 393 283.58h11.06v135A23 23 0 0 0 411 435z"
                                    opacity="1" data-original="#dee1ec"></path>
                                <path fill="#5e6175"
                                    d="m290.74 478.49-32.57-21.92h73a26 26 0 0 0 25.92-25.95V316.45A35.91 35.91 0 0 1 393 280.58h14.06v138a20.05 20.05 0 0 0 6 14.26l42.54 40.86-4.16 4.33-42.56-40.88a26.12 26.12 0 0 1-7.84-18.57v-132H393a29.9 29.9 0 0 0-29.87 29.87v114.17a32 32 0 0 1-31.92 31.95h-53.38l16.26 10.94z"
                                    opacity="1" data-original="#5e6175"></path>
                                <circle cx="263.15" cy="283.58" r="46.83" fill="#e1830e" opacity="1"
                                    data-original="#e1830e" class=""></circle>
                                <path fill="#f5f5f5"
                                    d="m255.93 308.01-22.17-22.17 6.93-6.93 15.24 15.25 29.69-29.68 6.92 6.92z"
                                    opacity="1" data-original="#f5f5f5" class=""></path>
                                <path fill="#5e6175"
                                    d="M82 394a12.89 12.89 0 0 1-12.85-12.22 12.85 12.85 0 0 1 12.2-13.5c11.48-.57 17.81 13.06 10.19 21.48A12.77 12.77 0 0 1 82 394zm0-19.73a6.84 6.84 0 0 0-6.85 7.2 6.87 6.87 0 1 0 6.85-7.2zM119.58 440.59a9.85 9.85 0 1 1 9.84-10.34 9.87 9.87 0 0 1-9.84 10.34zm-2.86-12.43a3.85 3.85 0 1 0 6.71 2.39 3.86 3.86 0 0 0-6.71-2.39z"
                                    opacity="1" data-original="#5e6175"></path>
                                <circle cx="360.36" cy="146.74" r="67.68" fill="#f5f5f5" opacity="1"
                                    data-original="#f5f5f5" class=""></circle>
                                <path fill="#5e6175"
                                    d="M360.36 217.42A70.68 70.68 0 1 1 431 146.74a70.76 70.76 0 0 1-70.64 70.68zm0-135.36A64.68 64.68 0 1 0 425 146.74a64.75 64.75 0 0 0-64.64-64.68z"
                                    opacity="1" data-original="#5e6175"></path>
                                <path fill="#e1830e"
                                    d="M400.27 178.83h-12.46a61.8 61.8 0 0 0-61.94-61.94v-12.45a74.24 74.24 0 0 1 74.4 74.39z"
                                    opacity="1" data-original="#e1830e" class=""></path>
                                <path fill="#e1830e"
                                    d="M376.65 178.83H364.2a38.23 38.23 0 0 0-38.33-38.33v-12.45a50.66 50.66 0 0 1 50.78 50.78z"
                                    opacity="1" data-original="#e1830e" class=""></path>
                                <path fill="#e1830e"
                                    d="M352.54 178.83h-12.45a14.18 14.18 0 0 0-14.22-14.22v-12.45a26.61 26.61 0 0 1 26.67 26.67z"
                                    opacity="1" data-original="#e1830e" class=""></path>
                                <path fill="#5e6175"
                                    d="m412.843 216.972 4.242-4.242 12.655 12.655-4.242 4.242zM397.27 224.2h6v17.9h-6zM424.89 198.15h17.9v6h-17.9z"
                                    opacity="1" data-original="#5e6175"></path>
                                <path fill="#a9afc4"
                                    d="M154.08 214.83h-6v-6h6zm-16.52-.53a31.36 31.36 0 0 1-6.36-1.94l2.37-5.52a23.87 23.87 0 0 0 5.1 1.56zM122 206.25a30.87 30.87 0 0 1-4.24-5.1l5-3.32a25.31 25.31 0 0 0 3.42 4.1zM113.44 191a31.62 31.62 0 0 1-.75-6.59h6a24.75 24.75 0 0 0 .6 5.3zM118.69 160.22h-6v-6h6zm0-16h-6v-6h6zm0-16h-6v-6h6zM297.12 214.83h-6v-6h6zm-16 0h-6v-6h6zm-16 0h-6v-6h6zm-16 0h-6v-6h6zm-16 0h-6v-6h6zm-16 0h-6v-6h6zm-16 0h-6v-6h6zm-16 0h-6v-6h6z"
                                    opacity="1" data-original="#a9afc4"></path>
                            </g>
                        </svg>
                        <div class="d-flex flex-column">
                            <span class="fw-bold fs-2x text-info lh-1 ls-n2">Free Card</span>
                        </div>
                    </div>
                    <button
                        class="btn btn-info rounded-0 h-100 d-flex justify-content-center align-items-center download-button"
                        id="convertButton" data-modal-id="virtual_card_modal_{{ $nfc_card->id }}">
                        <i class="fa-solid fa-cloud-arrow-down"></i>
                        <span title="Download Card">
                            Download
                        </span>
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="">
    <div class="card rounded-0">
        <div class="card-header p-5 align-items-center rounded-0 bg-info m-0">
            <div>
                <h1 class="mb-0 mt-0 card-title fs-2 text-white">Update Your NFC Profile!</h1>
                <p class="text-white mt-2 mb-0">View and manage all NFC Profile information in this page.</p>
            </div>
        </div>
    </div>
</div>

@if (session('error'))
    <div class="alert alert-danger">
        {{ session('error') }}
    </div>
@endif
<div class="g-2" id="columns-container">
    <div class="row py-10 pt-0 gx-2">
        <div class="col-lg-2 px-0 bg-white" style="border-right: 1px solid #eee">
            <div class="custom-fixed-top">
                <div class="d-flex flex-column flex-md-row rounded border-0 bg-white">
                    @include('nfc.form_partials.tab_trigger')
                </div>
            </div>
        </div>
        <div class="col-lg-10 bg-white">
            <div class="tab-content bg-white p-5" id="myTabContent">
                <div class="tab-pane fade active show" id="generalInfo" role="tabpanel">
                    <div class="row">
                        <div class="col-lg-12 general_info_container">
                            @include('nfc.form_partials.general_info')
                        </div>
                    </div>
                </div>

                <div class="tab-pane fade" id="vcardTemplate" role="tabpanel">
                    <div class="row">
                        <div class="col-lg-12 template_container">
                            @include('nfc.form_partials.vcard_template')
                        </div>
                    </div>
                </div>

                <div class="tab-pane fade" id="businessHours" role="tabpanel">
                    <div class="row">
                        <div class="col-lg-12 business_hours_container">
                            @include('nfc.form_partials.business_hours')
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="companies" role="tabpanel">
                    <div class="row">
                        <div class="col-lg-12 company_container">
                            @include('nfc.form_partials.companies')
                        </div>
                    </div>
                </div>

                <div class="tab-pane fade" id="services" role="tabpanel">
                    <div class="row">
                        <div class="col-lg-12 service_container">
                            @include('nfc.form_partials.services')
                        </div>
                    </div>
                </div>

                <div class="tab-pane fade" id="products" role="tabpanel">
                    <div class="row">
                        <div class="col-lg-12 product_container">
                            @include('nfc.form_partials.products')
                        </div>
                    </div>
                </div>

                <div class="tab-pane fade" id="galleries" role="tabpanel">
                    <div class="row">
                        <div class="col-lg-12 gallery_container">
                            @include('nfc.form_partials.galleries')
                        </div>
                    </div>
                </div>

                <div class="tab-pane fade" id="banner" role="tabpanel">
                    <div class="row">
                        <div class="col-lg-12 banner_container">
                            @include('nfc.form_partials.banner')
                        </div>
                    </div>
                </div>


                <div class="tab-pane fade" id="testimonials" role="tabpanel">
                    <div class="row">
                        <div class="col-lg-12 testimonial_container">
                            @include('nfc.form_partials.testimonials')
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="seo" role="tabpanel">
                    <div class="row">
                        <div class="col-lg-12 seo_container">
                            @include('nfc.form_partials.seo')
                        </div>
                    </div>
                </div>

                <div class="tab-pane fade" id="socialLinks" role="tabpanel">
                    <div class="row">
                        <div class="col-lg-12 social_links_container">
                            @include('nfc.form_partials.social_links')
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="privacy" role="tabpanel">
                    <div class="row">
                        <div class="col-lg-12 privacy_container">
                            @include('nfc.form_partials.privacy')
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="terms" role="tabpanel">
                    <div class="row">
                        <div class="col-lg-12 terms_container">
                            @include('nfc.form_partials.terms')
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="fonts" role="tabpanel">
                    <div class="row">
                        <div class="col-lg-12 fonts_container">
                            @include('nfc.form_partials.fonts')
                        </div>
                    </div>
                </div>
                {{-- <div class="tab-pane fade" id="kt_vtab_pane_15" role="tabpanel">
                    <div class="row">
                        <div class="col-lg-12 terms_container">
                            @include('nfc.form_partials.terms')
                        </div>
                    </div>
                </div> --}}
                <div class="tab-pane fade" id="advance" role="tabpanel">
                    <div class="row">
                        <div class="col-lg-12 advance_container">
                            @include('nfc.form_partials.advance')
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="setting" role="tabpanel">
                    <div class="row">
                        <div class="col-lg-12 setting_container">
                            @include('nfc.form_partials.setting')
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>


<div class="modal fade" tabindex="-1" id="virtual_card_modal_{{ $nfc_card->id }}">
    <div class="modal-dialog modal-dialog-centered modal-lg" style="max-width: 680px !important;">
        <div class="modal-content position-absolute">
            <div class="modal-header border-0">

                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body p-4 downloadable-div" id="downloadable_div_{{ $nfc_card->id }}">
                <style>
                    .downloadable-div {
                        /* Add any desired styling for your downloadable divs here */
                        border: 1px solid #ddd;
                        padding: 10px;
                        margin: 10px;
                    }

                    .punch-card-container {
                        width: 600px;
                        height: 300px;
                        border-radius: 8px;
                        background-repeat: no-repeat;
                        background-size: cover;
                        background-position: center;
                        text-align: center;
                        margin-bottom: 20px;
                    }

                    .punch-card-container-back {
                        width: 600px;
                        height: 300px;
                        border-radius: 8px;
                        background-repeat: no-repeat;
                        background-size: cover;
                        background-position: center;
                        text-align: center;
                        margin-bottom: 20px;
                    }

                    .text-start {
                        text-align: start;
                    }

                    .text-lg-start {
                        text-align: start !important;
                        /* Specific override for large screens */
                    }

                    .card_logo {
                        max-width: 100%;
                        height: 100px;
                        width: 100px;
                    }

                    .punch-card-logo-back-three {
                        width: 200px;
                    }

                    .card_name {
                        color: #fff;
                        font-size: 2rem;
                    }

                    .card_designation {
                        color: #fff;
                        font-size: 1.2rem;
                    }

                    .card_phone,
                    .card_email,
                    .card_address {
                        color: #fff;
                    }

                    .title-divider {
                        height: 2px;
                        width: 120px;
                        background-color: #fff;
                        margin: 0;
                    }

                    .nfc-text-title {
                        font-size: 4rem;
                        color: #fff;
                    }

                    .punch-card-container-back-one {
                        height: 33vh;
                        object-fit: fill;
                        background-repeat: no-repeat;
                        background-size: cover;
                        background-position: center;
                        border-radius: 5px;
                    }

                    /* Responsive adjustments */
                    @media (max-width: 992px) {
                        .text-lg-start {
                            text-align: center !important;
                        }
                    }

                    @media only screen and (min-width: 1368px) {
                        .punch-card-container {
                            width: 100%;
                            height: auto;
                            margin: auto;
                        }
                    }
                </style>
                <div class="card">
                    <div id="card-container" class="p-5">
                        <div class="row">
                            <div class="col-12">
                                <!-- Visiting Card Box Container -->
                                <div class="punch-card-container mb-2"
                                    style="background: -webkit-linear-gradient(to right, #4a00e0, #8e2de2); background: linear-gradient(to right, #4a00e0, #8e2de2);)">
                                    <div class="row p-5 align-items-center">
                                        <div class="col-lg-12 d-flex justify-content-center font align-items-center"
                                            style="height: 28vh">
                                            <div class="">
                                                <div class="d-flex justify-content-center">
                                                    <img width="70px"
                                                        src="{{ asset('frontend/images/nfc_icon.png') }}"
                                                        alt="" />
                                                </div>
                                                <h1 class="fw-bold text-white" style="font-size: 4rem">
                                                    NFC
                                                </h1>
                                            </div>
                                        </div>
                                        {{-- <div class="col-lg-6 text-lg-center text-end">
                                            <div>
                                                <img class="punch-card-logo-back card_logo"
                                                    src="{{ asset('storage/nfc/' . optional($nfc_card->nfcData)->card_logo) }}"
                                                    alt="Logo Back"
                                                    style="width: 200px;background-size: contain;height: 100px;text-align: start;display: flex;justify-content: start;position: relative;left: 0px;object-fit: contain; margin-bottom: 0px !important;" />
                                            </div>
                                        </div> --}}
                                    </div>
                                </div>
                                <div class="punch-card-container-back"
                                    style="background: -webkit-linear-gradient(to right, #4a00e0, #8e2de2);
                                        background: linear-gradient(to right, #4a00e0, #8e2de2);">
                                    <div class="row p-5 align-items-center">
                                        <div class="col-8 d-flex justify-content-start align-items-center"
                                            style="height: 28vh">
                                            <div class="text-start content-area font">
                                                <h4 class="fw-bold mb-0 card_name" style="color: #fff">
                                                    {{ optional($nfc_card)->vcard_name }}
                                                </h4>
                                                <p class="fw-bold mb-0 card_designation">
                                                    {{ optional($nfc_card)->designation }}
                                                </p>
                                                <div>
                                                    @if (!empty(optional($nfc_card->nfcData)->phone_personal))
                                                        <p class="fw-bold text-white pt-3 mb-0">
                                                            <i class="fas fa-phone pe-2"></i> <span
                                                                class="card_phone">{{ optional($nfc_card->nfcData)->phone_personal }}</span>
                                                        </p>
                                                    @endif
                                                    @if (!empty(optional($nfc_card->nfcData)->email_personal))
                                                        <p class="fw-bold text-white mb-0">
                                                            <i class="fas fa-envelope pe-2 mb-3"></i>
                                                            <span
                                                                class="card_email">{{ optional($nfc_card->nfcData)->email_personal }}</span>
                                                        </p>
                                                    @endif
                                                </div>
                                                @if (!empty(optional($nfc_card->nfcData)->address_line_one) || !empty(optional($nfc_card->nfcData)->address_line_two))
                                                    <div>
                                                        <p class="fw-bold mb-0 text-white">
                                                            <i class="fas fa-map-marker-alt pe-2"></i>
                                                            <span
                                                                class="card_address">{{ optional($nfc_card->nfcData)->address_line_one }}</span>
                                                            <span
                                                                class="card_address">{{ optional($nfc_card->nfcData)->address_line_two }}</span>
                                                        </p>
                                                    </div>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div>
                                                <img class="imf-fluid" width="150px"
                                                    src="{{ asset('storage/nfc/qrs/' . $nfc_card->nfc_qr) }}"
                                                    alt="" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Visiting Card Box Container End-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer border-0 pt-0">
                <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>


@push('scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/1.4.1/html2canvas.min.js"
        integrity="sha512-BNaRQnYJYiPSqHHDb58B0yaPfCu+Wgds8Gp/gU33kqBtgNS4tSPHuGibyoeqMV/TJlSKda6FXzoEyYGjTe+vXA=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
        function showAndCaptureModal(modalId, callback) {
            const modal = new bootstrap.Modal(document.getElementById(modalId));
            modal.show();

            setTimeout(() => {
                callback();
                modal.hide();
            }, 1000); // Wait for the modal to render
        }

        function captureAndDownloadPNG(modalId) {
            showAndCaptureModal(modalId, () => {
                html2canvas(document.querySelector('#' + modalId + ' #card-container')).then(canvas => {
                    // Add padding to the canvas
                    const padding = 20; // Adjust the padding size as needed
                    const paddedCanvas = document.createElement('canvas');
                    paddedCanvas.width = canvas.width + 2 * padding;
                    paddedCanvas.height = canvas.height + 2 * padding;
                    const context = paddedCanvas.getContext('2d');

                    // Set the background color to transparent
                    context.fillStyle = 'transparent';
                    context.fillRect(0, 0, paddedCanvas.width, paddedCanvas.height);

                    // Draw the original canvas onto the new canvas with padding
                    context.drawImage(canvas, padding, padding);

                    // Download the padded canvas as PNG
                    const pngUrl = paddedCanvas.toDataURL('image/png');
                    const link = document.createElement('a');
                    link.href = pngUrl;
                    link.download = 'card.png';
                    link.click();
                });
            });
        }


        function captureAndDownloadEPS(modalId) {
            showAndCaptureModal(modalId, () => {
                html2canvas(document.querySelector('#' + modalId + ' #card-container')).then(canvas => {
                    const imgData = canvas.toDataURL('image/png');

                    // Convert the PNG to EPS format (simple base64 embedded EPS)
                    const epsContent = `%!PS-Adobe-3.0 EPSF-3.0
                                    %%BoundingBox: 0 0 ${canvas.width} ${canvas.height}
                                    %%HiResBoundingBox: 0 0 ${canvas.width} ${canvas.height}
                                    %%EndComments
                                    gsave
                                    0 0 translate
                                    ${canvas.width} ${canvas.height} scale
                                    /${imgData.split(',')[1]} def
                                    /${imgData.split(',')[1]} currentfile /ASCII85Decode filter def
                                    /${imgData.split(',')[1]} currentfile /DCTDecode filter def
                                    image
                                    grestore
                                    showpage
                                    %%EOF
                                    `;

                    const link = document.createElement('a');
                    const blob = new Blob([epsContent], {
                        type: 'application/postscript'
                    });
                    const url = URL.createObjectURL(blob);
                    link.href = url;
                    link.download = 'card.eps';
                    link.click();
                });
            });
        }


        function createEPSContent(imageData, width, height) {
            const base64Data = imageData.replace(/^data:image\/(png|jpg);base64,/, '');
            const psHeader = `%!PS-Adobe-3.0 EPSF-3.0\n%%BoundingBox: 0 0 ${width} ${height}\n`;
            const psImage = `
                /DeviceRGB setcolorspace
                ${width} ${height} scale
                /picstr ${width} string def
                ${width} ${height} 8 [${width} 0 0 -${height} 0 ${height}]
                { currentfile picstr readhexstring pop }
                false 3 colorimage
            `;
            const psFooter = 'showpage\n';
            const hexData = base64ToHex(base64Data);
            return `${psHeader}${psImage}${hexData}\n${psFooter}`;
        }

        function base64ToHex(base64) {
            const binary = atob(base64);
            let hex = '';
            for (let i = 0; i < binary.length; i++) {
                const byte = binary.charCodeAt(i);
                hex += ('0' + byte.toString(16)).slice(-2);
                if (i % 32 === 31) hex += '\n'; // Add a newline every 32 bytes for readability
            }
            return hex;
        }

        document.addEventListener('DOMContentLoaded', function() {
            document.querySelectorAll('.download-button').forEach(button => {
                button.addEventListener('click', function() {
                    const modalId = button.getAttribute('data-modal-id');
                    captureAndDownloadPNG(modalId);
                });
            });

            document.querySelectorAll('.download-eps-button').forEach(button => {
                button.addEventListener('click', function() {
                    const modalId = button.getAttribute('data-modal-id');
                    captureAndDownloadEPS(modalId);
                });
            });
        });
    </script>
@endpush

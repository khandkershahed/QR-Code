<x-admin-app-layout>
    <div class="row gap-5 mt-15">
        <h1 class="text-center mb-0 text-success">{{ Auth::guard('admin')->user()->name }}</h1>
        <h1 class="text-center">Welcome To Your Dashboard</h1>
    </div>
    <div id="kt_app_content_container" class="mt-10" >
        <!--begin::Row-->
        <div class="row g-5 gx-xl-10 mb-5 mb-xl-10">
            <!--begin::Col-->
            <div class="col-xl-3">
                <!--begin::Card widget 3-->
                <div class="card card-flush bgi-no-repeat bgi-size-contain bgi-position-x-end h-xl-100"
                    style="background-color: #F1416C;background-image:url('/metronic8/demo1/assets/media/svg/shapes/wave-bg-red.svg')">
                    <!--begin::Header-->
                    <div class="card-header pt-5 mb-3">
                        <!--begin::Icon-->
                        <div class="d-flex flex-center rounded-circle h-80px w-80px"
                            style="border: 1px dashed rgba(255, 255, 255, 0.4);background-color: #F1416C">
                            <i class="ki-duotone ki-call text-white fs-2qx lh-0"><span class="path1"></span><span
                                    class="path2"></span><span class="path3"></span><span class="path4"></span><span
                                    class="path5"></span><span class="path6"></span><span class="path7"></span><span
                                    class="path8"></span></i>
                        </div>
                        <!--end::Icon-->
                    </div>
                    <!--end::Header-->

                    <!--begin::Card body-->
                    <div class="card-body d-flex align-items-end mb-3">
                        <!--begin::Info-->
                        <div class="d-flex align-items-center">
                            <span class="fs-4hx text-white fw-bold me-6">1.2k</span>

                            <div class="fw-bold fs-6 text-white">
                                <span class="d-block">Inbound</span>
                                <span class="">Calls</span>
                            </div>
                        </div>
                        <!--end::Info-->
                    </div>
                    <!--end::Card body-->

                    <!--begin::Card footer-->
                    <div class="card-footer"
                        style="border-top: 1px solid rgba(255, 255, 255, 0.3);background: rgba(0, 0, 0, 0.15);">
                        <!--begin::Progress-->
                        <div class="fw-bold text-white py-2">
                            <span class="fs-1 d-block">935</span>
                            <span class="opacity-50">Problems Solved</span>
                        </div>
                        <!--end::Progress-->
                    </div>
                    <!--end::Card footer-->
                </div>
                <!--end::Card widget 3-->
            </div>
            <!--end::Col-->

            <!--begin::Col-->
            <div class="col-xl-3">
                <!--begin::Card widget 3-->
                <div class="card card-flush bgi-no-repeat bgi-size-contain bgi-position-x-end h-xl-100"
                    style="background-color: #7239EA;background-image:url('/metronic8/demo1/assets/media/svg/shapes/wave-bg-purple.svg')">
                    <!--begin::Header-->
                    <div class="card-header pt-5 mb-3">
                        <!--begin::Icon-->
                        <div class="d-flex flex-center rounded-circle h-80px w-80px"
                            style="border: 1px dashed rgba(255, 255, 255, 0.4);background-color: #7239EA">
                            <i class="ki-duotone ki-call text-white fs-2qx lh-0"><span class="path1"></span><span
                                    class="path2"></span><span class="path3"></span><span class="path4"></span><span
                                    class="path5"></span><span class="path6"></span><span class="path7"></span><span
                                    class="path8"></span></i>
                        </div>
                        <!--end::Icon-->
                    </div>
                    <!--end::Header-->

                    <!--begin::Card body-->
                    <div class="card-body d-flex align-items-end mb-3">
                        <!--begin::Info-->
                        <div class="d-flex align-items-center">
                            <span class="fs-4hx text-white fw-bold me-6">427</span>

                            <div class="fw-bold fs-6 text-white">
                                <span class="d-block">Outbound</span>
                                <span class="">Calls</span>
                            </div>
                        </div>
                        <!--end::Info-->
                    </div>
                    <!--end::Card body-->

                    <!--begin::Card footer-->
                    <div class="card-footer"
                        style="border-top: 1px solid rgba(255, 255, 255, 0.3);background: rgba(0, 0, 0, 0.15);">
                        <!--begin::Progress-->
                        <div class="fw-bold text-white py-2">
                            <span class="fs-1 d-block">386</span>
                            <span class="opacity-50">Generated Leads</span>
                        </div>
                        <!--end::Progress-->
                    </div>
                    <!--end::Card footer-->
                </div>
                <!--end::Card widget 3-->
            </div>
            <!--end::Col-->

            <!--begin::Col-->
            <div class="col-xl-6">
                <!--begin::Chart widget 36-->
                <div class="card card-flush overflow-hidden h-lg-100">
                    <!--begin::Header-->
                    <div class="card-header pt-5">
                        <!--begin::Title-->
                        <h3 class="card-title align-items-start flex-column">
                            <span class="card-label fw-bold text-gray-900">Performance</span>
                            <span class="text-gray-500 mt-1 fw-semibold fs-6">1,046 Inbound Calls today</span>
                        </h3>
                        <!--end::Title-->

                        <!--begin::Toolbar-->
                        <div class="card-toolbar">
                            <!--begin::Daterangepicker(defined in src/js/layout/app.js)-->
                            <div data-kt-daterangepicker="true" data-kt-daterangepicker-opens="left"
                                data-kt-daterangepicker-range="today"
                                class="btn btn-sm btn-light d-flex align-items-center px-4" data-kt-initialized="1">
                                <!--begin::Display range-->
                                <div class="text-gray-600 fw-bold">17 May 2024</div>
                                <!--end::Display range-->

                                <i class="ki-duotone ki-calendar-8 text-gray-500 lh-0 fs-2 ms-2 me-0"><span
                                        class="path1"></span><span class="path2"></span><span
                                        class="path3"></span><span class="path4"></span><span
                                        class="path5"></span><span class="path6"></span></i>
                            </div>
                            <!--end::Daterangepicker-->
                        </div>
                        <!--end::Toolbar-->
                    </div>
                    <!--end::Header-->

                    <!--begin::Card body-->
                    <div class="card-body d-flex align-items-end p-0">
                        <!--begin::Chart-->
                        <div id="kt_charts_widget_36" class="min-h-auto w-100 ps-4 pe-6"
                            style="height: 300px; min-height: 315px;">
                            <div id="apexcharts6hmxtokg"
                                class="apexcharts-canvas apexcharts6hmxtokg apexcharts-theme-light"
                                style="width: 579.5px; height: 300px;"><svg id="SvgjsSvg2034" width="579.5"
                                    height="300" xmlns="http://www.w3.org/2000/svg" version="1.1"
                                    xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev"
                                    class="apexcharts-svg apexcharts-zoomable" xmlns:data="ApexChartsNS"
                                    transform="translate(0, 0)" style="background: transparent;">
                                    <foreignObject x="0" y="0" width="579.5" height="300">
                                        <div class="apexcharts-legend" xmlns="http://www.w3.org/1999/xhtml"
                                            style="max-height: 150px;"></div>
                                    </foreignObject>
                                    <rect id="SvgjsRect2074" width="0" height="0" x="0" y="0"
                                        rx="0" ry="0" opacity="1" stroke-width="0"
                                        stroke="none" stroke-dasharray="0" fill="#fefefe"></rect>
                                    <g id="SvgjsG2137" class="apexcharts-yaxis" rel="0"
                                        transform="translate(17.835205078125, 0)">
                                        <g id="SvgjsG2138" class="apexcharts-yaxis-texts-g"><text id="SvgjsText2140"
                                                font-family="inherit" x="20" y="31.6" text-anchor="end"
                                                dominant-baseline="auto" font-size="12px" font-weight="400"
                                                fill="#99a1b7" class="apexcharts-text apexcharts-yaxis-label "
                                                style="font-family: inherit;">
                                                <tspan id="SvgjsTspan2141">120</tspan>
                                                <title>120</title>
                                            </text><text id="SvgjsText2143" font-family="inherit" x="20" y="68.57"
                                                text-anchor="end" dominant-baseline="auto" font-size="12px"
                                                font-weight="400" fill="#99a1b7"
                                                class="apexcharts-text apexcharts-yaxis-label "
                                                style="font-family: inherit;">
                                                <tspan id="SvgjsTspan2144">105</tspan>
                                                <title>105</title>
                                            </text><text id="SvgjsText2146" font-family="inherit" x="20"
                                                y="105.53999999999999" text-anchor="end" dominant-baseline="auto"
                                                font-size="12px" font-weight="400" fill="#99a1b7"
                                                class="apexcharts-text apexcharts-yaxis-label "
                                                style="font-family: inherit;">
                                                <tspan id="SvgjsTspan2147">90</tspan>
                                                <title>90</title>
                                            </text><text id="SvgjsText2149" font-family="inherit" x="20" y="142.51"
                                                text-anchor="end" dominant-baseline="auto" font-size="12px"
                                                font-weight="400" fill="#99a1b7"
                                                class="apexcharts-text apexcharts-yaxis-label "
                                                style="font-family: inherit;">
                                                <tspan id="SvgjsTspan2150">75</tspan>
                                                <title>75</title>
                                            </text><text id="SvgjsText2152" font-family="inherit" x="20" y="179.48"
                                                text-anchor="end" dominant-baseline="auto" font-size="12px"
                                                font-weight="400" fill="#99a1b7"
                                                class="apexcharts-text apexcharts-yaxis-label "
                                                style="font-family: inherit;">
                                                <tspan id="SvgjsTspan2153">60</tspan>
                                                <title>60</title>
                                            </text><text id="SvgjsText2155" font-family="inherit" x="20" y="216.45"
                                                text-anchor="end" dominant-baseline="auto" font-size="12px"
                                                font-weight="400" fill="#99a1b7"
                                                class="apexcharts-text apexcharts-yaxis-label "
                                                style="font-family: inherit;">
                                                <tspan id="SvgjsTspan2156">45</tspan>
                                                <title>45</title>
                                            </text><text id="SvgjsText2158" font-family="inherit" x="20" y="253.42"
                                                text-anchor="end" dominant-baseline="auto" font-size="12px"
                                                font-weight="400" fill="#99a1b7"
                                                class="apexcharts-text apexcharts-yaxis-label "
                                                style="font-family: inherit;">
                                                <tspan id="SvgjsTspan2159">30</tspan>
                                                <title>30</title>
                                            </text></g>
                                    </g>
                                    <g id="SvgjsG2036" class="apexcharts-inner apexcharts-graphical"
                                        transform="translate(47.835205078125, 30)">
                                        <defs id="SvgjsDefs2035">
                                            <clipPath id="gridRectMask6hmxtokg">
                                                <rect id="SvgjsRect2040" width="528.664794921875" height="237.82"
                                                    x="-5" y="-8" rx="0" ry="0" opacity="1"
                                                    stroke-width="0" stroke="none" stroke-dasharray="0"
                                                    fill="#fff"></rect>
                                            </clipPath>
                                            <clipPath id="forecastMask6hmxtokg"></clipPath>
                                            <clipPath id="nonForecastMask6hmxtokg"></clipPath>
                                            <clipPath id="gridRectMarkerMask6hmxtokg">
                                                <rect id="SvgjsRect2041" width="525.664794921875" height="225.82"
                                                    x="-2" y="-2" rx="0" ry="0" opacity="1"
                                                    stroke-width="0" stroke="none" stroke-dasharray="0"
                                                    fill="#fff"></rect>
                                            </clipPath>
                                            <linearGradient id="SvgjsLinearGradient2046" x1="0"
                                                y1="0" x2="0" y2="1">
                                                <stop id="SvgjsStop2047" stop-opacity="0.4"
                                                    stop-color="rgba(27,132,255,0.4)" offset="0.15"></stop>
                                                <stop id="SvgjsStop2048" stop-opacity="0.2"
                                                    stop-color="rgba(255,255,255,0.2)" offset="1.2"></stop>
                                                <stop id="SvgjsStop2049" stop-opacity="0.2"
                                                    stop-color="rgba(255,255,255,0.2)" offset="1"></stop>
                                            </linearGradient>
                                            <linearGradient id="SvgjsLinearGradient2055" x1="0"
                                                y1="0" x2="0" y2="1">
                                                <stop id="SvgjsStop2056" stop-opacity="0.4"
                                                    stop-color="rgba(23,198,83,0.4)" offset="0.15"></stop>
                                                <stop id="SvgjsStop2057" stop-opacity="0.2"
                                                    stop-color="rgba(255,255,255,0.2)" offset="1.2"></stop>
                                                <stop id="SvgjsStop2058" stop-opacity="0.2"
                                                    stop-color="rgba(255,255,255,0.2)" offset="1"></stop>
                                            </linearGradient>
                                        </defs>
                                        <g id="SvgjsG2061" class="apexcharts-grid">
                                            <g id="SvgjsG2062" class="apexcharts-gridlines-horizontal">
                                                <line id="SvgjsLine2066" x1="0" y1="36.97"
                                                    x2="521.664794921875" y2="36.97" stroke="#dbdfe9"
                                                    stroke-dasharray="4" stroke-linecap="butt"
                                                    class="apexcharts-gridline"></line>
                                                <line id="SvgjsLine2067" x1="0" y1="73.94"
                                                    x2="521.664794921875" y2="73.94" stroke="#dbdfe9"
                                                    stroke-dasharray="4" stroke-linecap="butt"
                                                    class="apexcharts-gridline"></line>
                                                <line id="SvgjsLine2068" x1="0" y1="110.91"
                                                    x2="521.664794921875" y2="110.91" stroke="#dbdfe9"
                                                    stroke-dasharray="4" stroke-linecap="butt"
                                                    class="apexcharts-gridline"></line>
                                                <line id="SvgjsLine2069" x1="0" y1="147.88"
                                                    x2="521.664794921875" y2="147.88" stroke="#dbdfe9"
                                                    stroke-dasharray="4" stroke-linecap="butt"
                                                    class="apexcharts-gridline"></line>
                                                <line id="SvgjsLine2070" x1="0" y1="184.85"
                                                    x2="521.664794921875" y2="184.85" stroke="#dbdfe9"
                                                    stroke-dasharray="4" stroke-linecap="butt"
                                                    class="apexcharts-gridline"></line>
                                            </g>
                                            <g id="SvgjsG2063" class="apexcharts-gridlines-vertical"></g>
                                            <line id="SvgjsLine2073" x1="0" y1="221.82"
                                                x2="521.664794921875" y2="221.82" stroke="transparent"
                                                stroke-dasharray="0" stroke-linecap="butt"></line>
                                            <line id="SvgjsLine2072" x1="0" y1="1" x2="0"
                                                y2="221.82" stroke="transparent" stroke-dasharray="0"
                                                stroke-linecap="butt"></line>
                                        </g>
                                        <g id="SvgjsG2064" class="apexcharts-grid-borders">
                                            <line id="SvgjsLine2065" x1="0" y1="0"
                                                x2="521.664794921875" y2="0" stroke="#dbdfe9"
                                                stroke-dasharray="4" stroke-linecap="butt"
                                                class="apexcharts-gridline"></line>
                                            <line id="SvgjsLine2071" x1="0" y1="221.82"
                                                x2="521.664794921875" y2="221.82" stroke="#dbdfe9"
                                                stroke-dasharray="4" stroke-linecap="butt"
                                                class="apexcharts-gridline"></line>
                                        </g>
                                        <g id="SvgjsG2042" class="apexcharts-area-series apexcharts-plot-series">
                                            <g id="SvgjsG2043" class="apexcharts-series" zIndex="0"
                                                seriesName="InboundxCalls" data:longestSeries="true" rel="1"
                                                data:realIndex="0">
                                                <path id="SvgjsPath2050"
                                                    d="M 0 221.82 L 0 135.55666666666667C 10.143482123480903 135.55666666666667 18.83789537217882 98.58666666666667 28.981377495659725 98.58666666666667C 39.12485961914063 98.58666666666667 47.81927286783855 98.58666666666667 57.96275499131945 98.58666666666667C 68.10623711480035 98.58666666666667 76.80065036349826 147.88 86.94413248697917 147.88C 97.08761461046008 147.88 105.78202785915799 147.88 115.9255099826389 147.88C 126.0689921061198 147.88 134.7634053548177 184.85 144.90688747829861 184.85C 155.05036960177952 184.85 163.74478285047743 184.85 173.88826497395834 184.85C 184.03174709743925 184.85 192.72616034613716 98.58666666666667 202.86964246961807 98.58666666666667C 213.01312459309898 98.58666666666667 221.7075378417969 98.58666666666667 231.8510199652778 98.58666666666667C 241.99450208875868 98.58666666666667 250.6889153374566 123.23333333333335 260.8323974609375 123.23333333333335C 270.9758795844184 123.23333333333335 279.6702928331163 123.23333333333335 289.81377495659723 123.23333333333335C 299.95725708007814 123.23333333333335 308.65167032877605 73.94 318.79515245225696 73.94C 328.93863457573786 73.94 337.6330478244358 73.94 347.7765299479167 73.94C 357.9200120713976 73.94 366.6144253200955 98.58666666666667 376.7579074435764 98.58666666666667C 386.9013895670573 98.58666666666667 395.59580281575523 98.58666666666667 405.73928493923614 98.58666666666667C 415.88276706271705 98.58666666666667 424.57718031141496 98.58666666666667 434.72066243489587 98.58666666666667C 444.8641445583768 98.58666666666667 453.5585578070747 147.88 463.7020399305556 147.88C 473.8455220540365 147.88 482.5399353027344 147.88 492.6834174262153 147.88C 502.82689954969624 147.88 511.5213127983941 172.52666666666667 521.664794921875 172.52666666666667C 521.664794921875 172.52666666666667 521.664794921875 172.52666666666667 521.664794921875 221.82M 521.664794921875 172.52666666666667z"
                                                    fill="url(#SvgjsLinearGradient2046)" fill-opacity="1"
                                                    stroke-opacity="1" stroke-linecap="butt" stroke-width="0"
                                                    stroke-dasharray="0" class="apexcharts-area" index="0"
                                                    clip-path="url(#gridRectMask6hmxtokg)"
                                                    pathTo="M 0 221.82 L 0 135.55666666666667C 10.143482123480903 135.55666666666667 18.83789537217882 98.58666666666667 28.981377495659725 98.58666666666667C 39.12485961914063 98.58666666666667 47.81927286783855 98.58666666666667 57.96275499131945 98.58666666666667C 68.10623711480035 98.58666666666667 76.80065036349826 147.88 86.94413248697917 147.88C 97.08761461046008 147.88 105.78202785915799 147.88 115.9255099826389 147.88C 126.0689921061198 147.88 134.7634053548177 184.85 144.90688747829861 184.85C 155.05036960177952 184.85 163.74478285047743 184.85 173.88826497395834 184.85C 184.03174709743925 184.85 192.72616034613716 98.58666666666667 202.86964246961807 98.58666666666667C 213.01312459309898 98.58666666666667 221.7075378417969 98.58666666666667 231.8510199652778 98.58666666666667C 241.99450208875868 98.58666666666667 250.6889153374566 123.23333333333335 260.8323974609375 123.23333333333335C 270.9758795844184 123.23333333333335 279.6702928331163 123.23333333333335 289.81377495659723 123.23333333333335C 299.95725708007814 123.23333333333335 308.65167032877605 73.94 318.79515245225696 73.94C 328.93863457573786 73.94 337.6330478244358 73.94 347.7765299479167 73.94C 357.9200120713976 73.94 366.6144253200955 98.58666666666667 376.7579074435764 98.58666666666667C 386.9013895670573 98.58666666666667 395.59580281575523 98.58666666666667 405.73928493923614 98.58666666666667C 415.88276706271705 98.58666666666667 424.57718031141496 98.58666666666667 434.72066243489587 98.58666666666667C 444.8641445583768 98.58666666666667 453.5585578070747 147.88 463.7020399305556 147.88C 473.8455220540365 147.88 482.5399353027344 147.88 492.6834174262153 147.88C 502.82689954969624 147.88 511.5213127983941 172.52666666666667 521.664794921875 172.52666666666667C 521.664794921875 172.52666666666667 521.664794921875 172.52666666666667 521.664794921875 221.82M 521.664794921875 172.52666666666667z"
                                                    pathFrom="M -1 295.76 L -1 295.76 L 28.981377495659725 295.76 L 57.96275499131945 295.76 L 86.94413248697917 295.76 L 115.9255099826389 295.76 L 144.90688747829861 295.76 L 173.88826497395834 295.76 L 202.86964246961807 295.76 L 231.8510199652778 295.76 L 260.8323974609375 295.76 L 289.81377495659723 295.76 L 318.79515245225696 295.76 L 347.7765299479167 295.76 L 376.7579074435764 295.76 L 405.73928493923614 295.76 L 434.72066243489587 295.76 L 463.7020399305556 295.76 L 492.6834174262153 295.76 L 521.664794921875 295.76">
                                                </path>
                                                <path id="SvgjsPath2051"
                                                    d="M 0 135.55666666666667C 10.143482123480903 135.55666666666667 18.83789537217882 98.58666666666667 28.981377495659725 98.58666666666667C 39.12485961914063 98.58666666666667 47.81927286783855 98.58666666666667 57.96275499131945 98.58666666666667C 68.10623711480035 98.58666666666667 76.80065036349826 147.88 86.94413248697917 147.88C 97.08761461046008 147.88 105.78202785915799 147.88 115.9255099826389 147.88C 126.0689921061198 147.88 134.7634053548177 184.85 144.90688747829861 184.85C 155.05036960177952 184.85 163.74478285047743 184.85 173.88826497395834 184.85C 184.03174709743925 184.85 192.72616034613716 98.58666666666667 202.86964246961807 98.58666666666667C 213.01312459309898 98.58666666666667 221.7075378417969 98.58666666666667 231.8510199652778 98.58666666666667C 241.99450208875868 98.58666666666667 250.6889153374566 123.23333333333335 260.8323974609375 123.23333333333335C 270.9758795844184 123.23333333333335 279.6702928331163 123.23333333333335 289.81377495659723 123.23333333333335C 299.95725708007814 123.23333333333335 308.65167032877605 73.94 318.79515245225696 73.94C 328.93863457573786 73.94 337.6330478244358 73.94 347.7765299479167 73.94C 357.9200120713976 73.94 366.6144253200955 98.58666666666667 376.7579074435764 98.58666666666667C 386.9013895670573 98.58666666666667 395.59580281575523 98.58666666666667 405.73928493923614 98.58666666666667C 415.88276706271705 98.58666666666667 424.57718031141496 98.58666666666667 434.72066243489587 98.58666666666667C 444.8641445583768 98.58666666666667 453.5585578070747 147.88 463.7020399305556 147.88C 473.8455220540365 147.88 482.5399353027344 147.88 492.6834174262153 147.88C 502.82689954969624 147.88 511.5213127983941 172.52666666666667 521.664794921875 172.52666666666667"
                                                    fill="none" fill-opacity="1" stroke="#1b84ff"
                                                    stroke-opacity="1" stroke-linecap="butt" stroke-width="3"
                                                    stroke-dasharray="0" class="apexcharts-area" index="0"
                                                    clip-path="url(#gridRectMask6hmxtokg)"
                                                    pathTo="M 0 135.55666666666667C 10.143482123480903 135.55666666666667 18.83789537217882 98.58666666666667 28.981377495659725 98.58666666666667C 39.12485961914063 98.58666666666667 47.81927286783855 98.58666666666667 57.96275499131945 98.58666666666667C 68.10623711480035 98.58666666666667 76.80065036349826 147.88 86.94413248697917 147.88C 97.08761461046008 147.88 105.78202785915799 147.88 115.9255099826389 147.88C 126.0689921061198 147.88 134.7634053548177 184.85 144.90688747829861 184.85C 155.05036960177952 184.85 163.74478285047743 184.85 173.88826497395834 184.85C 184.03174709743925 184.85 192.72616034613716 98.58666666666667 202.86964246961807 98.58666666666667C 213.01312459309898 98.58666666666667 221.7075378417969 98.58666666666667 231.8510199652778 98.58666666666667C 241.99450208875868 98.58666666666667 250.6889153374566 123.23333333333335 260.8323974609375 123.23333333333335C 270.9758795844184 123.23333333333335 279.6702928331163 123.23333333333335 289.81377495659723 123.23333333333335C 299.95725708007814 123.23333333333335 308.65167032877605 73.94 318.79515245225696 73.94C 328.93863457573786 73.94 337.6330478244358 73.94 347.7765299479167 73.94C 357.9200120713976 73.94 366.6144253200955 98.58666666666667 376.7579074435764 98.58666666666667C 386.9013895670573 98.58666666666667 395.59580281575523 98.58666666666667 405.73928493923614 98.58666666666667C 415.88276706271705 98.58666666666667 424.57718031141496 98.58666666666667 434.72066243489587 98.58666666666667C 444.8641445583768 98.58666666666667 453.5585578070747 147.88 463.7020399305556 147.88C 473.8455220540365 147.88 482.5399353027344 147.88 492.6834174262153 147.88C 502.82689954969624 147.88 511.5213127983941 172.52666666666667 521.664794921875 172.52666666666667"
                                                    pathFrom="M -1 295.76 L -1 295.76 L 28.981377495659725 295.76 L 57.96275499131945 295.76 L 86.94413248697917 295.76 L 115.9255099826389 295.76 L 144.90688747829861 295.76 L 173.88826497395834 295.76 L 202.86964246961807 295.76 L 231.8510199652778 295.76 L 260.8323974609375 295.76 L 289.81377495659723 295.76 L 318.79515245225696 295.76 L 347.7765299479167 295.76 L 376.7579074435764 295.76 L 405.73928493923614 295.76 L 434.72066243489587 295.76 L 463.7020399305556 295.76 L 492.6834174262153 295.76 L 521.664794921875 295.76"
                                                    fill-rule="evenodd"></path>
                                                <g id="SvgjsG2044"
                                                    class="apexcharts-series-markers-wrap apexcharts-hidden-element-shown"
                                                    data:realIndex="0">
                                                    <g class="apexcharts-series-markers">
                                                        <circle id="SvgjsCircle2163" r="0" cx="0"
                                                            cy="0"
                                                            class="apexcharts-marker wl9pieyyjl no-pointer-events"
                                                            stroke="#1b84ff" fill="#1b84ff" fill-opacity="1"
                                                            stroke-width="3" stroke-opacity="0.9"
                                                            default-marker-size="0"></circle>
                                                    </g>
                                                </g>
                                            </g>
                                            <g id="SvgjsG2052" class="apexcharts-series" zIndex="1"
                                                seriesName="OutboundxCalls" data:longestSeries="true" rel="2"
                                                data:realIndex="1">
                                                <path id="SvgjsPath2059"
                                                    d="M 0 221.82 L 0 73.94C 10.143482123480903 73.94 18.83789537217882 24.646666666666704 28.981377495659725 24.646666666666704C 39.12485961914063 24.646666666666704 47.81927286783855 24.646666666666704 57.96275499131945 24.646666666666704C 68.10623711480035 24.646666666666704 76.80065036349826 61.616666666666674 86.94413248697917 61.616666666666674C 97.08761461046008 61.616666666666674 105.78202785915799 61.616666666666674 115.9255099826389 61.616666666666674C 126.0689921061198 61.616666666666674 134.7634053548177 86.26333333333335 144.90688747829861 86.26333333333335C 155.05036960177952 86.26333333333335 163.74478285047743 86.26333333333335 173.88826497395834 86.26333333333335C 184.03174709743925 86.26333333333335 192.72616034613716 61.616666666666674 202.86964246961807 61.616666666666674C 213.01312459309898 61.616666666666674 221.7075378417969 61.616666666666674 231.8510199652778 61.616666666666674C 241.99450208875868 61.616666666666674 250.6889153374566 12.323333333333323 260.8323974609375 12.323333333333323C 270.9758795844184 12.323333333333323 279.6702928331163 12.323333333333323 289.81377495659723 12.323333333333323C 299.95725708007814 12.323333333333323 308.65167032877605 49.29333333333335 318.79515245225696 49.29333333333335C 328.93863457573786 49.29333333333335 337.6330478244358 49.29333333333335 347.7765299479167 49.29333333333335C 357.9200120713976 49.29333333333335 366.6144253200955 12.323333333333323 376.7579074435764 12.323333333333323C 386.9013895670573 12.323333333333323 395.59580281575523 12.323333333333323 405.73928493923614 12.323333333333323C 415.88276706271705 12.323333333333323 424.57718031141496 61.616666666666674 434.72066243489587 61.616666666666674C 444.8641445583768 61.616666666666674 453.5585578070747 61.616666666666674 463.7020399305556 61.616666666666674C 473.8455220540365 61.616666666666674 482.5399353027344 86.26333333333335 492.6834174262153 86.26333333333335C 502.82689954969624 86.26333333333335 511.5213127983941 86.26333333333335 521.664794921875 86.26333333333335C 521.664794921875 86.26333333333335 521.664794921875 86.26333333333335 521.664794921875 221.82M 521.664794921875 86.26333333333335z"
                                                    fill="url(#SvgjsLinearGradient2055)" fill-opacity="1"
                                                    stroke-opacity="1" stroke-linecap="butt" stroke-width="0"
                                                    stroke-dasharray="0" class="apexcharts-area" index="1"
                                                    clip-path="url(#gridRectMask6hmxtokg)"
                                                    pathTo="M 0 221.82 L 0 73.94C 10.143482123480903 73.94 18.83789537217882 24.646666666666704 28.981377495659725 24.646666666666704C 39.12485961914063 24.646666666666704 47.81927286783855 24.646666666666704 57.96275499131945 24.646666666666704C 68.10623711480035 24.646666666666704 76.80065036349826 61.616666666666674 86.94413248697917 61.616666666666674C 97.08761461046008 61.616666666666674 105.78202785915799 61.616666666666674 115.9255099826389 61.616666666666674C 126.0689921061198 61.616666666666674 134.7634053548177 86.26333333333335 144.90688747829861 86.26333333333335C 155.05036960177952 86.26333333333335 163.74478285047743 86.26333333333335 173.88826497395834 86.26333333333335C 184.03174709743925 86.26333333333335 192.72616034613716 61.616666666666674 202.86964246961807 61.616666666666674C 213.01312459309898 61.616666666666674 221.7075378417969 61.616666666666674 231.8510199652778 61.616666666666674C 241.99450208875868 61.616666666666674 250.6889153374566 12.323333333333323 260.8323974609375 12.323333333333323C 270.9758795844184 12.323333333333323 279.6702928331163 12.323333333333323 289.81377495659723 12.323333333333323C 299.95725708007814 12.323333333333323 308.65167032877605 49.29333333333335 318.79515245225696 49.29333333333335C 328.93863457573786 49.29333333333335 337.6330478244358 49.29333333333335 347.7765299479167 49.29333333333335C 357.9200120713976 49.29333333333335 366.6144253200955 12.323333333333323 376.7579074435764 12.323333333333323C 386.9013895670573 12.323333333333323 395.59580281575523 12.323333333333323 405.73928493923614 12.323333333333323C 415.88276706271705 12.323333333333323 424.57718031141496 61.616666666666674 434.72066243489587 61.616666666666674C 444.8641445583768 61.616666666666674 453.5585578070747 61.616666666666674 463.7020399305556 61.616666666666674C 473.8455220540365 61.616666666666674 482.5399353027344 86.26333333333335 492.6834174262153 86.26333333333335C 502.82689954969624 86.26333333333335 511.5213127983941 86.26333333333335 521.664794921875 86.26333333333335C 521.664794921875 86.26333333333335 521.664794921875 86.26333333333335 521.664794921875 221.82M 521.664794921875 86.26333333333335z"
                                                    pathFrom="M -1 295.76 L -1 295.76 L 28.981377495659725 295.76 L 57.96275499131945 295.76 L 86.94413248697917 295.76 L 115.9255099826389 295.76 L 144.90688747829861 295.76 L 173.88826497395834 295.76 L 202.86964246961807 295.76 L 231.8510199652778 295.76 L 260.8323974609375 295.76 L 289.81377495659723 295.76 L 318.79515245225696 295.76 L 347.7765299479167 295.76 L 376.7579074435764 295.76 L 405.73928493923614 295.76 L 434.72066243489587 295.76 L 463.7020399305556 295.76 L 492.6834174262153 295.76 L 521.664794921875 295.76">
                                                </path>
                                                <path id="SvgjsPath2060"
                                                    d="M 0 73.94C 10.143482123480903 73.94 18.83789537217882 24.646666666666704 28.981377495659725 24.646666666666704C 39.12485961914063 24.646666666666704 47.81927286783855 24.646666666666704 57.96275499131945 24.646666666666704C 68.10623711480035 24.646666666666704 76.80065036349826 61.616666666666674 86.94413248697917 61.616666666666674C 97.08761461046008 61.616666666666674 105.78202785915799 61.616666666666674 115.9255099826389 61.616666666666674C 126.0689921061198 61.616666666666674 134.7634053548177 86.26333333333335 144.90688747829861 86.26333333333335C 155.05036960177952 86.26333333333335 163.74478285047743 86.26333333333335 173.88826497395834 86.26333333333335C 184.03174709743925 86.26333333333335 192.72616034613716 61.616666666666674 202.86964246961807 61.616666666666674C 213.01312459309898 61.616666666666674 221.7075378417969 61.616666666666674 231.8510199652778 61.616666666666674C 241.99450208875868 61.616666666666674 250.6889153374566 12.323333333333323 260.8323974609375 12.323333333333323C 270.9758795844184 12.323333333333323 279.6702928331163 12.323333333333323 289.81377495659723 12.323333333333323C 299.95725708007814 12.323333333333323 308.65167032877605 49.29333333333335 318.79515245225696 49.29333333333335C 328.93863457573786 49.29333333333335 337.6330478244358 49.29333333333335 347.7765299479167 49.29333333333335C 357.9200120713976 49.29333333333335 366.6144253200955 12.323333333333323 376.7579074435764 12.323333333333323C 386.9013895670573 12.323333333333323 395.59580281575523 12.323333333333323 405.73928493923614 12.323333333333323C 415.88276706271705 12.323333333333323 424.57718031141496 61.616666666666674 434.72066243489587 61.616666666666674C 444.8641445583768 61.616666666666674 453.5585578070747 61.616666666666674 463.7020399305556 61.616666666666674C 473.8455220540365 61.616666666666674 482.5399353027344 86.26333333333335 492.6834174262153 86.26333333333335C 502.82689954969624 86.26333333333335 511.5213127983941 86.26333333333335 521.664794921875 86.26333333333335"
                                                    fill="none" fill-opacity="1" stroke="#17c653"
                                                    stroke-opacity="1" stroke-linecap="butt" stroke-width="3"
                                                    stroke-dasharray="0" class="apexcharts-area" index="1"
                                                    clip-path="url(#gridRectMask6hmxtokg)"
                                                    pathTo="M 0 73.94C 10.143482123480903 73.94 18.83789537217882 24.646666666666704 28.981377495659725 24.646666666666704C 39.12485961914063 24.646666666666704 47.81927286783855 24.646666666666704 57.96275499131945 24.646666666666704C 68.10623711480035 24.646666666666704 76.80065036349826 61.616666666666674 86.94413248697917 61.616666666666674C 97.08761461046008 61.616666666666674 105.78202785915799 61.616666666666674 115.9255099826389 61.616666666666674C 126.0689921061198 61.616666666666674 134.7634053548177 86.26333333333335 144.90688747829861 86.26333333333335C 155.05036960177952 86.26333333333335 163.74478285047743 86.26333333333335 173.88826497395834 86.26333333333335C 184.03174709743925 86.26333333333335 192.72616034613716 61.616666666666674 202.86964246961807 61.616666666666674C 213.01312459309898 61.616666666666674 221.7075378417969 61.616666666666674 231.8510199652778 61.616666666666674C 241.99450208875868 61.616666666666674 250.6889153374566 12.323333333333323 260.8323974609375 12.323333333333323C 270.9758795844184 12.323333333333323 279.6702928331163 12.323333333333323 289.81377495659723 12.323333333333323C 299.95725708007814 12.323333333333323 308.65167032877605 49.29333333333335 318.79515245225696 49.29333333333335C 328.93863457573786 49.29333333333335 337.6330478244358 49.29333333333335 347.7765299479167 49.29333333333335C 357.9200120713976 49.29333333333335 366.6144253200955 12.323333333333323 376.7579074435764 12.323333333333323C 386.9013895670573 12.323333333333323 395.59580281575523 12.323333333333323 405.73928493923614 12.323333333333323C 415.88276706271705 12.323333333333323 424.57718031141496 61.616666666666674 434.72066243489587 61.616666666666674C 444.8641445583768 61.616666666666674 453.5585578070747 61.616666666666674 463.7020399305556 61.616666666666674C 473.8455220540365 61.616666666666674 482.5399353027344 86.26333333333335 492.6834174262153 86.26333333333335C 502.82689954969624 86.26333333333335 511.5213127983941 86.26333333333335 521.664794921875 86.26333333333335"
                                                    pathFrom="M -1 295.76 L -1 295.76 L 28.981377495659725 295.76 L 57.96275499131945 295.76 L 86.94413248697917 295.76 L 115.9255099826389 295.76 L 144.90688747829861 295.76 L 173.88826497395834 295.76 L 202.86964246961807 295.76 L 231.8510199652778 295.76 L 260.8323974609375 295.76 L 289.81377495659723 295.76 L 318.79515245225696 295.76 L 347.7765299479167 295.76 L 376.7579074435764 295.76 L 405.73928493923614 295.76 L 434.72066243489587 295.76 L 463.7020399305556 295.76 L 492.6834174262153 295.76 L 521.664794921875 295.76"
                                                    fill-rule="evenodd"></path>
                                                <g id="SvgjsG2053"
                                                    class="apexcharts-series-markers-wrap apexcharts-hidden-element-shown"
                                                    data:realIndex="1">
                                                    <g class="apexcharts-series-markers">
                                                        <circle id="SvgjsCircle2164" r="0" cx="0"
                                                            cy="0"
                                                            class="apexcharts-marker wg80o4hzr no-pointer-events"
                                                            stroke="#17c653" fill="#17c653" fill-opacity="1"
                                                            stroke-width="3" stroke-opacity="0.9"
                                                            default-marker-size="0"></circle>
                                                    </g>
                                                </g>
                                            </g>
                                            <g id="SvgjsG2045" class="apexcharts-datalabels" data:realIndex="0"></g>
                                            <g id="SvgjsG2054" class="apexcharts-datalabels" data:realIndex="1"></g>
                                        </g>
                                        <line id="SvgjsLine2075" x1="0" y1="0" x2="0"
                                            y2="221.82" stroke="#1B84FF #17C653" stroke-dasharray="3"
                                            stroke-linecap="butt" class="apexcharts-xcrosshairs" x="0" y="0"
                                            width="1" height="221.82" fill="#b1b9c4" filter="none"
                                            fill-opacity="0.9" stroke-width="1"></line>
                                        <line id="SvgjsLine2076" x1="0" y1="0" x2="521.664794921875"
                                            y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1"
                                            stroke-linecap="butt" class="apexcharts-ycrosshairs"></line>
                                        <line id="SvgjsLine2077" x1="0" y1="0" x2="521.664794921875"
                                            y2="0" stroke-dasharray="0" stroke-width="0"
                                            stroke-linecap="butt" class="apexcharts-ycrosshairs-hidden"></line>
                                        <g id="SvgjsG2078" class="apexcharts-xaxis" transform="translate(0, 0)">
                                            <g id="SvgjsG2079" class="apexcharts-xaxis-texts-g"
                                                transform="translate(0, -10)"><text id="SvgjsText2081"
                                                    font-family="inherit" x="0" y="244.82" text-anchor="end"
                                                    dominant-baseline="auto" font-size="12px" font-weight="400"
                                                    fill="#99a1b7" class="apexcharts-text apexcharts-xaxis-label "
                                                    style="font-family: inherit;" transform="rotate(0 1 -1)">
                                                    <tspan id="SvgjsTspan2082"></tspan>
                                                    <title></title>
                                                </text><text id="SvgjsText2084" font-family="inherit"
                                                    x="28.981377495659718" y="244.82" text-anchor="end"
                                                    dominant-baseline="auto" font-size="12px" font-weight="400"
                                                    fill="#99a1b7" class="apexcharts-text apexcharts-xaxis-label "
                                                    style="font-family: inherit;" transform="rotate(0 1 -1)">
                                                    <tspan id="SvgjsTspan2085"></tspan>
                                                    <title></title>
                                                </text><text id="SvgjsText2087" font-family="inherit"
                                                    x="57.96275499131943" y="244.82" text-anchor="end"
                                                    dominant-baseline="auto" font-size="12px" font-weight="400"
                                                    fill="#99a1b7" class="apexcharts-text apexcharts-xaxis-label "
                                                    style="font-family: inherit;" transform="rotate(0 1 -1)">
                                                    <tspan id="SvgjsTspan2088"></tspan>
                                                    <title></title>
                                                </text><text id="SvgjsText2090" font-family="inherit"
                                                    x="86.94413248697916" y="244.82" text-anchor="end"
                                                    dominant-baseline="auto" font-size="12px" font-weight="400"
                                                    fill="#99a1b7" class="apexcharts-text apexcharts-xaxis-label "
                                                    style="font-family: inherit;"
                                                    transform="rotate(0 87.94412994384766 239.32000732421875)">
                                                    <tspan id="SvgjsTspan2091">9 AM</tspan>
                                                    <title>9 AM</title>
                                                </text><text id="SvgjsText2093" font-family="inherit"
                                                    x="115.92550998263889" y="244.82" text-anchor="end"
                                                    dominant-baseline="auto" font-size="12px" font-weight="400"
                                                    fill="#99a1b7" class="apexcharts-text apexcharts-xaxis-label "
                                                    style="font-family: inherit;" transform="rotate(0 1 -1)">
                                                    <tspan id="SvgjsTspan2094"></tspan>
                                                    <title></title>
                                                </text><text id="SvgjsText2096" font-family="inherit"
                                                    x="144.90688747829861" y="244.82" text-anchor="end"
                                                    dominant-baseline="auto" font-size="12px" font-weight="400"
                                                    fill="#99a1b7" class="apexcharts-text apexcharts-xaxis-label "
                                                    style="font-family: inherit;" transform="rotate(0 1 -1)">
                                                    <tspan id="SvgjsTspan2097"></tspan>
                                                    <title></title>
                                                </text><text id="SvgjsText2099" font-family="inherit"
                                                    x="173.88826497395834" y="244.82" text-anchor="end"
                                                    dominant-baseline="auto" font-size="12px" font-weight="400"
                                                    fill="#99a1b7" class="apexcharts-text apexcharts-xaxis-label "
                                                    style="font-family: inherit;"
                                                    transform="rotate(0 174.8882598876953 239.32000732421875)">
                                                    <tspan id="SvgjsTspan2100">12 PM</tspan>
                                                    <title>12 PM</title>
                                                </text><text id="SvgjsText2102" font-family="inherit"
                                                    x="202.86964246961807" y="244.82" text-anchor="end"
                                                    dominant-baseline="auto" font-size="12px" font-weight="400"
                                                    fill="#99a1b7" class="apexcharts-text apexcharts-xaxis-label "
                                                    style="font-family: inherit;" transform="rotate(0 1 -1)">
                                                    <tspan id="SvgjsTspan2103"></tspan>
                                                    <title></title>
                                                </text><text id="SvgjsText2105" font-family="inherit"
                                                    x="231.8510199652778" y="244.82" text-anchor="end"
                                                    dominant-baseline="auto" font-size="12px" font-weight="400"
                                                    fill="#99a1b7" class="apexcharts-text apexcharts-xaxis-label "
                                                    style="font-family: inherit;" transform="rotate(0 1 -1)">
                                                    <tspan id="SvgjsTspan2106"></tspan>
                                                    <title></title>
                                                </text><text id="SvgjsText2108" font-family="inherit"
                                                    x="260.83239746093756" y="244.82" text-anchor="end"
                                                    dominant-baseline="auto" font-size="12px" font-weight="400"
                                                    fill="#99a1b7" class="apexcharts-text apexcharts-xaxis-label "
                                                    style="font-family: inherit;"
                                                    transform="rotate(0 261.8323974609375 239.32000732421875)">
                                                    <tspan id="SvgjsTspan2109">15 PM</tspan>
                                                    <title>15 PM</title>
                                                </text><text id="SvgjsText2111" font-family="inherit"
                                                    x="289.8137749565973" y="244.82" text-anchor="end"
                                                    dominant-baseline="auto" font-size="12px" font-weight="400"
                                                    fill="#99a1b7" class="apexcharts-text apexcharts-xaxis-label "
                                                    style="font-family: inherit;" transform="rotate(0 1 -1)">
                                                    <tspan id="SvgjsTspan2112"></tspan>
                                                    <title></title>
                                                </text><text id="SvgjsText2114" font-family="inherit"
                                                    x="318.795152452257" y="244.82" text-anchor="end"
                                                    dominant-baseline="auto" font-size="12px" font-weight="400"
                                                    fill="#99a1b7" class="apexcharts-text apexcharts-xaxis-label "
                                                    style="font-family: inherit;" transform="rotate(0 1 -1)">
                                                    <tspan id="SvgjsTspan2115"></tspan>
                                                    <title></title>
                                                </text><text id="SvgjsText2117" font-family="inherit"
                                                    x="347.77652994791674" y="244.82" text-anchor="end"
                                                    dominant-baseline="auto" font-size="12px" font-weight="400"
                                                    fill="#99a1b7" class="apexcharts-text apexcharts-xaxis-label "
                                                    style="font-family: inherit;"
                                                    transform="rotate(0 348.7765197753906 239.32000732421875)">
                                                    <tspan id="SvgjsTspan2118">18 PM</tspan>
                                                    <title>18 PM</title>
                                                </text><text id="SvgjsText2120" font-family="inherit"
                                                    x="376.75790744357647" y="244.82" text-anchor="end"
                                                    dominant-baseline="auto" font-size="12px" font-weight="400"
                                                    fill="#99a1b7" class="apexcharts-text apexcharts-xaxis-label "
                                                    style="font-family: inherit;" transform="rotate(0 1 -1)">
                                                    <tspan id="SvgjsTspan2121"></tspan>
                                                    <title></title>
                                                </text><text id="SvgjsText2123" font-family="inherit"
                                                    x="405.7392849392362" y="244.82" text-anchor="end"
                                                    dominant-baseline="auto" font-size="12px" font-weight="400"
                                                    fill="#99a1b7" class="apexcharts-text apexcharts-xaxis-label "
                                                    style="font-family: inherit;" transform="rotate(0 1 -1)">
                                                    <tspan id="SvgjsTspan2124"></tspan>
                                                    <title></title>
                                                </text><text id="SvgjsText2126" font-family="inherit"
                                                    x="434.7206624348959" y="244.82" text-anchor="end"
                                                    dominant-baseline="auto" font-size="12px" font-weight="400"
                                                    fill="#99a1b7" class="apexcharts-text apexcharts-xaxis-label "
                                                    style="font-family: inherit;"
                                                    transform="rotate(0 435.7206726074219 239.32000732421875)">
                                                    <tspan id="SvgjsTspan2127">19 PM</tspan>
                                                    <title>19 PM</title>
                                                </text><text id="SvgjsText2129" font-family="inherit"
                                                    x="463.70203993055566" y="244.82" text-anchor="end"
                                                    dominant-baseline="auto" font-size="12px" font-weight="400"
                                                    fill="#99a1b7" class="apexcharts-text apexcharts-xaxis-label "
                                                    style="font-family: inherit;" transform="rotate(0 1 -1)">
                                                    <tspan id="SvgjsTspan2130"></tspan>
                                                    <title></title>
                                                </text><text id="SvgjsText2132" font-family="inherit"
                                                    x="492.6834174262154" y="244.82" text-anchor="end"
                                                    dominant-baseline="auto" font-size="12px" font-weight="400"
                                                    fill="#99a1b7" class="apexcharts-text apexcharts-xaxis-label "
                                                    style="font-family: inherit;" transform="rotate(0 1 -1)">
                                                    <tspan id="SvgjsTspan2133"></tspan>
                                                    <title></title>
                                                </text><text id="SvgjsText2135" font-family="inherit"
                                                    x="521.6647949218751" y="244.82" text-anchor="end"
                                                    dominant-baseline="auto" font-size="12px" font-weight="400"
                                                    fill="#99a1b7" class="apexcharts-text apexcharts-xaxis-label "
                                                    style="font-family: inherit;" transform="rotate(0 1 -1)">
                                                    <tspan id="SvgjsTspan2136"></tspan>
                                                    <title></title>
                                                </text></g>
                                        </g>
                                        <g id="SvgjsG2160" class="apexcharts-yaxis-annotations"></g>
                                        <g id="SvgjsG2161" class="apexcharts-xaxis-annotations"></g>
                                        <g id="SvgjsG2162" class="apexcharts-point-annotations"></g>
                                        <rect id="SvgjsRect2165" width="0" height="0" x="0" y="0"
                                            rx="0" ry="0" opacity="1" stroke-width="0"
                                            stroke="none" stroke-dasharray="0" fill="#fefefe"
                                            class="apexcharts-zoom-rect"></rect>
                                        <rect id="SvgjsRect2166" width="0" height="0" x="0" y="0"
                                            rx="0" ry="0" opacity="1" stroke-width="0"
                                            stroke="none" stroke-dasharray="0" fill="#fefefe"
                                            class="apexcharts-selection-rect"></rect>
                                    </g>
                                </svg>
                                <div class="apexcharts-tooltip apexcharts-theme-light">
                                    <div class="apexcharts-tooltip-title"
                                        style="font-family: inherit; font-size: 12px;"></div>
                                    <div class="apexcharts-tooltip-series-group" style="order: 1;"><span
                                            class="apexcharts-tooltip-marker"
                                            style="background-color: rgb(27, 132, 255);"></span>
                                        <div class="apexcharts-tooltip-text"
                                            style="font-family: inherit; font-size: 12px;">
                                            <div class="apexcharts-tooltip-y-group"><span
                                                    class="apexcharts-tooltip-text-y-label"></span><span
                                                    class="apexcharts-tooltip-text-y-value"></span></div>
                                            <div class="apexcharts-tooltip-goals-group"><span
                                                    class="apexcharts-tooltip-text-goals-label"></span><span
                                                    class="apexcharts-tooltip-text-goals-value"></span></div>
                                            <div class="apexcharts-tooltip-z-group"><span
                                                    class="apexcharts-tooltip-text-z-label"></span><span
                                                    class="apexcharts-tooltip-text-z-value"></span></div>
                                        </div>
                                    </div>
                                    <div class="apexcharts-tooltip-series-group" style="order: 2;"><span
                                            class="apexcharts-tooltip-marker"
                                            style="background-color: rgb(23, 198, 83);"></span>
                                        <div class="apexcharts-tooltip-text"
                                            style="font-family: inherit; font-size: 12px;">
                                            <div class="apexcharts-tooltip-y-group"><span
                                                    class="apexcharts-tooltip-text-y-label"></span><span
                                                    class="apexcharts-tooltip-text-y-value"></span></div>
                                            <div class="apexcharts-tooltip-goals-group"><span
                                                    class="apexcharts-tooltip-text-goals-label"></span><span
                                                    class="apexcharts-tooltip-text-goals-value"></span></div>
                                            <div class="apexcharts-tooltip-z-group"><span
                                                    class="apexcharts-tooltip-text-z-label"></span><span
                                                    class="apexcharts-tooltip-text-z-value"></span></div>
                                        </div>
                                    </div>
                                </div>
                                <div
                                    class="apexcharts-xaxistooltip apexcharts-xaxistooltip-bottom apexcharts-theme-light">
                                    <div class="apexcharts-xaxistooltip-text"
                                        style="font-family: inherit; font-size: 12px;"></div>
                                </div>
                                <div
                                    class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-light">
                                    <div class="apexcharts-yaxistooltip-text"></div>
                                </div>
                            </div>
                        </div>
                        <!--end::Chart-->
                    </div>
                    <!--end::Card body-->
                </div>
                <!--end::Chart widget 36-->
            </div>
            <!--end::Col-->
        </div>
        <!--end::Row-->

        <!--begin::Row-->
        <div class="row g-5 g-xl-10 mb-5 mb-xl-10">
            <!--begin::Col-->
            <div class="col-xl-6">

                <!--begin::Card widget 19-->
                <div class="card card-flush h-lg-100">
                    <!--begin::Header-->
                    <div class="card-header pt-5">
                        <!--begin::Title-->
                        <h3 class="card-title align-items-start flex-column">
                            <span class="card-label fw-bold text-gray-900">Performance</span>
                            <span class="text-gray-500 mt-1 fw-semibold fs-6">1,046 Inbound Calls today</span>
                        </h3>
                        <!--end::Title-->

                        <!--begin::Toolbar-->
                        <div class="card-toolbar">
                            <!--begin::Label-->
                            <span class="badge badge-light-danger fs-base mt-n3">
                                <i class="ki-duotone ki-arrow-down fs-5 text-danger ms-n1"><span
                                        class="path1"></span><span class="path2"></span></i>
                                7.4%
                            </span>
                            <!--end::Label-->
                        </div>
                        <!--end::Toolbar-->
                    </div>
                    <!--end::Header-->

                    <!--begin::Card body-->
                    <div class="card-body d-flex align-items-end pt-6">
                        <!--begin::Row-->
                        <div class="row align-items-center mx-0 w-100">
                            <!--begin::Col-->
                            <div class="col-7 px-0">
                                <!--begin::Labels-->
                                <div class="d-flex flex-column content-justify-center">
                                    <!--begin::Label-->
                                    <div class="d-flex fs-6 fw-semibold align-items-center">
                                        <!--begin::Bullet-->
                                        <div class="bullet bg-success me-3"
                                            style="border-radius: 3px;width: 12px;height: 12px"></div>
                                        <!--end::Bullet-->

                                        <!--begin::Label-->
                                        <div class="fs-5 fw-bold text-gray-600 me-5">CRM Team Performance:</div>
                                        <!--end::Label-->

                                        <!--begin::Stats-->
                                        <div class="ms-auto fw-bolder text-gray-700 text-end">72.56%</div>
                                        <!--end::Stats-->
                                    </div>
                                    <!--end::Label-->

                                    <!--begin::Label-->
                                    <div class="d-flex fs-6 fw-semibold align-items-center my-4">
                                        <!--begin::Bullet-->
                                        <div class="bullet bg-primary me-3"
                                            style="border-radius: 3px;width: 12px;height: 12px"></div>
                                        <!--end::Bullet-->

                                        <!--begin::Label-->
                                        <div class="fs-5 fw-bold text-gray-600 me-5">Recurring Calls:</div>
                                        <!--end::Label-->

                                        <!--begin::Stats-->
                                        <div class="ms-auto fw-bolder text-gray-700 text-end">29.34%</div>
                                        <!--end::Stats-->
                                    </div>
                                    <!--end::Label-->

                                    <!--begin::Label-->
                                    <div class="d-flex fs-6 fw-semibold align-items-center">
                                        <!--begin::Bullet-->
                                        <div class="bullet me-3"
                                            style="border-radius: 3px;background-color: #E4E6EF;width: 12px;height: 12px">
                                        </div>
                                        <!--end::Bullet-->

                                        <!--begin::Label-->
                                        <div class="fs-5 fw-bold text-gray-600 me-5">Tickets Raised:</div>
                                        <!--end::Label-->

                                        <!--begin::Stats-->
                                        <div class="ms-auto fw-bolder text-gray-700 text-end">17.83%</div>
                                        <!--end::Stats-->
                                    </div>
                                    <!--end::Label-->
                                </div>
                                <!--end::Labels-->
                            </div>
                            <!--end::Col-->

                            <!--begin::Col-->
                            <div class="col-5 d-flex justify-content-end px-0">
                                <!--begin::Chart-->
                                <div id="kt_card_widget_19_chart" class="min-h-auto h-150px w-150px"
                                    data-kt-size="150" data-kt-line="25">
                                    <span></span><canvas height="150" width="150"></canvas>
                                </div>
                                <!--end::Chart-->
                            </div>
                            <!--end::Col-->
                        </div>
                        <!--end::Row-->
                    </div>
                    <!--end::Card body-->
                </div>
                <!--end::Card widget 19-->
            </div>
            <!--end::Col-->

            <!--begin::Col-->
            <div class="col-xl-6">
                <!--begin::Engage widget 9-->
                <div class="card h-lg-100" style="background: linear-gradient(112.14deg, #FF8A00 0%, #E96922 100%)">
                    <!--begin::Body-->
                    <div class="card-body">
                        <!--begin::Row-->
                        <div class="row align-items-center">
                            <!--begin::Col-->
                            <div class="col-sm-7 pe-0 mb-5 mb-sm-0">
                                <!--begin::Wrapper-->
                                <div class="d-flex justify-content-between h-100 flex-column pt-xl-5 pb-xl-2 ps-xl-7">
                                    <!--begin::Container-->
                                    <div class="mb-7">
                                        <!--begin::Title-->
                                        <div class="mb-6">
                                            <h3 class="fs-2x fw-semibold text-white">Upgrade Your Plan</h3>
                                            <span class="fw-semibold text-white opacity-75">Flat cartoony and
                                                illustrations with vivid color</span>
                                        </div>
                                        <!--end::Title-->

                                        <!--begin::Items-->
                                        <div class="d-flex align-items-center flex-wrap d-grid gap-2 ">
                                            <!--begin::Item-->
                                            <div class="d-flex align-items-center me-5 me-xl-13">
                                                <!--begin::Symbol-->
                                                <div class="symbol symbol-30px symbol-circle me-3">
                                                    <span class="symbol-label"
                                                        style="background: rgba(255, 255, 255, 0.15);">
                                                        <i class="ki-duotone ki-abstract-41 fs-4 text-white"><span
                                                                class="path1"></span><span class="path2"></span></i>
                                                    </span>
                                                </div>
                                                <!--end::Symbol-->

                                                <!--begin::Info-->
                                                <div class="m-0">
                                                    <a href="/metronic8/demo1/pages/user-profile/projects.html"
                                                        class="text-white text-opacity-75 fs-8">Projects</a>
                                                    <span class="fw-bold text-white fs-7 d-block">Up to 500</span>
                                                </div>
                                                <!--end::Info-->
                                            </div>
                                            <!--end::Item-->

                                            <!--begin::Item-->
                                            <div class="d-flex align-items-center">
                                                <!--begin::Symbol-->
                                                <div class="symbol symbol-30px symbol-circle me-3">
                                                    <span class="symbol-label"
                                                        style="background: rgba(255, 255, 255, 0.15);">
                                                        <i class="ki-duotone ki-abstract-26 fs-4 text-white"><span
                                                                class="path1"></span><span class="path2"></span></i>
                                                    </span>
                                                </div>
                                                <!--end::Symbol-->

                                                <!--begin::Info-->
                                                <div class="m-0">
                                                    <a href="/metronic8/demo1/apps/user-management/users/list.html"
                                                        class="text-white text-opacity-75 fs-8">Tasks</a>
                                                    <span class="fw-bold text-white fs-7 d-block">Unlimited</span>
                                                </div>
                                                <!--end::Info-->
                                            </div>
                                            <!--end::Item-->
                                        </div>
                                        <!--end::Items-->
                                    </div>
                                    <!--end::Container-->

                                    <!--begin::Action-->
                                    <div class="m-0">
                                        <a href="#"
                                            class="btn btn-color-white bg-white bg-opacity-15 bg-hover-opacity-25 fw-semibold"
                                            data-bs-toggle="modal" data-bs-target="#kt_modal_upgrade_plan">
                                            Upgrade Plan
                                        </a>
                                    </div>
                                    <!--begin::Action-->
                                </div>
                                <!--end::Wrapper-->
                            </div>
                            <!--begin::Col-->

                            <!--begin::Col-->
                            <div class="col-sm-5">
                                <!--begin::Illustration-->
                                <img src="/metronic8/demo1/assets/media/svg/illustrations/easy/7.svg"
                                    class="h-200px h-lg-250px my-n6" alt="">
                                <!--end::Illustration-->
                            </div>
                            <!--begin::Col-->
                        </div>
                        <!--begin::Row-->
                    </div>
                    <!--end::Body-->
                </div>
                <!--end::Engage widget 9-->

            </div>
            <!--end::Col-->
        </div>
        <!--end::Row-->
    </div>




    <div class="row g-5 gx-xl-10 mb-5 mb-xl-10">
        <div class="col-xl-8">

            <div class="card card-flush h-lg-100">
                <div class="card-header pt-5">
                    <h3 class="card-title align-items-start flex-column">
                        <span class="card-label fw-bold text-gray-900">New Subscribers</span>
                        <span class="text-gray-500 pt-2 fw-semibold fs-6">75% activity growth</span>
                    </h3>

                    <div class="card-toolbar">
                        <button class="btn btn-icon btn-color-gray-500 btn-active-color-primary justify-content-end"
                            data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end"
                            data-kt-menu-overflow="true">
                            <i class="ki-duotone ki-dots-square fs-1 text-gray-500 me-n1"><span
                                    class="path1"></span><span class="path2"></span><span
                                    class="path3"></span><span class="path4"></span></i>
                        </button>


                        <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px"
                            data-kt-menu="true">
                            <div class="menu-item px-3">
                                <div class="menu-content fs-6 text-gray-900 fw-bold px-3 py-4">Quick Actions</div>
                            </div>

                            <div class="separator mb-3 opacity-75"></div>

                            <div class="menu-item px-3">
                                <a href="#" class="menu-link px-3">
                                    New Ticket
                                </a>
                            </div>

                            <div class="menu-item px-3">
                                <a href="#" class="menu-link px-3">
                                    New Customer
                                </a>
                            </div>

                            <div class="menu-item px-3" data-kt-menu-trigger="hover"
                                data-kt-menu-placement="right-start">
                                <a href="#" class="menu-link px-3">
                                    <span class="menu-title">New Group</span>
                                    <span class="menu-arrow"></span>
                                </a>

                                <div class="menu-sub menu-sub-dropdown w-175px py-4">
                                    <div class="menu-item px-3">
                                        <a href="#" class="menu-link px-3">
                                            Admin Group
                                        </a>
                                    </div>

                                    <div class="menu-item px-3">
                                        <a href="#" class="menu-link px-3">
                                            Staff Group
                                        </a>
                                    </div>

                                    <div class="menu-item px-3">
                                        <a href="#" class="menu-link px-3">
                                            Member Group
                                        </a>
                                    </div>
                                </div>
                            </div>

                            <div class="menu-item px-3">
                                <a href="#" class="menu-link px-3">
                                    New Contact
                                </a>
                            </div>

                            <div class="separator mt-3 opacity-75"></div>

                            <div class="menu-item px-3">
                                <div class="menu-content px-3 py-3">
                                    <a class="btn btn-primary  btn-sm px-4" href="#">
                                        Generate Reports
                                    </a>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="card-body pt-0 px-0">
                    <div id="kt_charts_widget_1" class="min-h-auto ps-4 pe-6 mb-3"
                        style="height: 350px; min-height: 365px;">
                        <div id="apexcharts25vbjlvy"
                            class="apexcharts-canvas apexcharts25vbjlvy apexcharts-theme-light"
                            style="width: 794.5px;">
                            <div
                                class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-light">
                                <div class="apexcharts-yaxistooltip-text"></div>
                            </div>
                        </div>
                    </div>

                    <div class="d-flex align-items-center px-9">
                        <div class="d-flex align-items-center me-6">
                            <span class="rounded-1 bg-primary me-2 h-10px w-10px"></span>

                            <span class="fw-semibold fs-6 text-gray-600">Gained</span>
                        </div>

                        <div class="d-flex align-items-center">
                            <span class="rounded-1 bg-success me-2 h-10px w-10px"></span>

                            <span class="fw-semibold fs-6 text-gray-600">Lost</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-4">

            <div class="card h-md-100" dir="ltr">
                <div class="card-body d-flex flex-column flex-center">
                    <div class="mb-2">
                        <h1 class="fw-semibold text-gray-800 text-center lh-lg">
                            Hey There, <br> Need
                            <span class="fw-bolder"> To Upgrade The Plans ?</span>
                        </h1>

                        <div class="py-10 text-center">
                            <img src="	https://preview.keenthemes.com/metronic8/demo1/assets/media/svg/illustrations/easy/1.svg"
                                class="theme-light-show w-200px" alt="">
                            <img src="/metronic8/demo1/assets/media/svg/illustrations/easy/1-dark.svg"
                                class="theme-dark-show w-200px" alt="">
                        </div>
                    </div>

                    <div class="text-center mb-1">
                        <a class="btn btn-sm btn-primary me-2" data-bs-target="#kt_modal_create_app"
                            data-bs-toggle="modal">
                            Try now </a>

                        <a class="btn btn-sm btn-light" href="/metronic8/demo1/pages/user-profile/activity.html">
                            Learn more </a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</x-admin-app-layout>

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
            background-image: linear-gradient(94deg, rgb(179, 44, 14) 0%, rgb(255, 100, 58) 100%);
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
            padding: 10px;
        }

        /* Hide the default radio button */
        input[type="radio"] {
            display: none;
        }

        /* Add border when checked */
        input[type="radio"]:checked+.custom-card {
            border: 2px solid #6610f2;
            background-color: #f8f9fa;
            padding: 15px;
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

        .img-choice {
            border: 3px solid transparent;
            /* Default border */
            cursor: pointer;
            transition: border 0.3s ease;
        }

        .img-choice.active-design {
            border: 3px solid red;
            /* Red border when selected */
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
            top: 20%;
            left: 15%;
            transform: translate(-50%, -50%);
        }

        .card-info {
            top: 75%;
            left: 57%;
            line-height: 1.2;
            transform: translate(-50%, -50%);
            color: white;
            width: 100%;
        }

        .card-design-box {
            background-color: transparent;
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
            width: 60px;
            border-bottom: 1px solid #252525;
            border-top: 0px;
            border-right: 0px;
            border-left: 0px;
        }
    </style>
    <style>
        /* Container for radio buttons */
        .radio-input {
            display: flex;
            flex-direction: column;
            gap: 10px;
        }

        /* Default label style with a border */
        .radio-input label {
            display: flex;
            align-items: center;
            gap: 15px;
            padding: 0px 20px;
            width: 100%;
            cursor: pointer;
            height: 70px;
            position: relative;
            border: 1px solid #eee;
            /* Default border */
            border-radius: 10px;
            transition: all 0.3s ease-in-out;
        }

        /* Hover effect */
        .radio-input label:hover {
            background-color: #f5f5f5;
        }

        /* Change border when checked */
        .radio-input input[type="radio"]:checked+p,
        .radio-input input[type="checkbox"]:checked+p {
            font-weight: bold;
            color: #435dd8;
        }

        /* Change border when checked */
        .radio-input input[type="radio"]:checked~label,
        .radio-input input[type="checkbox"]:checked~label {
            border-color: #435dd8;
        }

        /* Hide default radio button */
        .radio-input input[type="radio"],
        .radio-input input[type="checkbox"] {
            appearance: none;
            width: 5px;
            height: 10px;
            border-radius: 50%;
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: #ABABAB;
            border: 4px solid #fa903c;
            transition: all 0.3sease-in-out;
            cursor: pointer;
            padding: 10px;
        }

        /* Change radio/checkbox appearance when checked */
        .radio-input input[type="radio"]:checked,
        .radio-input input[type="checkbox"]:checked {
            background-color: #435dd8;
            border-color: #435dd8;
            animation: pulse 0.7s forwards;
            /* Pulse animation */
        }

        /* Add a small dot inside the checked radio button */
        .radio-input input[type="radio"]:before,
        .radio-input input[type="checkbox"]:before {
            content: "";
            width: 6px;
            height: 6px;
            border-radius: 50%;
            background-color: transparent;
            transition: all 0.1s ease-in-out;
        }

        /* Show the dot inside the checked radio */
        .radio-input input[type="radio"]:checked::before,
        .radio-input input[type="checkbox"]:checked::before {
            background-color: #fff;
        }

        /* Checked label background */
        .radio-input input[type="radio"]:checked+.text,
        .radio-input input[type="checkbox"]:checked+.text {
            font-weight: bold;
        }

        /* ✅ Pulse Animation */
        @keyframes pulse {
            0% {
                box-shadow: 0 0 0 0 rgba(67, 93, 216, 0.4);
            }

            70% {
                box-shadow: 0 0 0 10px rgba(67, 93, 216, 0);
            }

            100% {
                box-shadow: 0 0 0 0 rgba(67, 93, 216, 0);
            }
        }

        .continue-back {
            background: transparent;
            border: 2px solid #ABABAB;
            padding: 2px 18px;
            color: #ABABAB;
            border-radius: 14px !important;
        }

        .continue-back:hover {
            background: #ABABAB;
            border: 2px solid #ABABAB;
            padding: 2px 18px;
            color: #000;
            border-radius: 14px !important;
        }

        .continue-next {
            background: transparent;
            border: 2px solid #fd793a;
            padding: 2px 18px;
            color: #fd793a;
            border-radius: 14px !important;
        }

        .continue-next:hover {
            background: #fd793a;
            border: 2px solid #fd793a;
            padding: 2px 18px;
            color: #fff;
            border-radius: 14px !important;
        }

        .chosen-card-bg {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            padding: 20px 0px;
            background: #6610f21f;
            border-radius: 10px;
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
    @if ($cardProduct->card_type == 'team')
        @php
            $cardProduct->price = $cardProduct->price / 2;
        @endphp
    @endif
    @php
        $individual_card_descriptions = is_array($cardProduct->descriptions)
            ? $cardProduct->descriptions
            : json_decode($cardProduct->descriptions);
    @endphp
    <section class="py-0 plan-box-container">
        <div class="container">
            <div class="row">
                <div class="pb-20 mb-30 bg-light"
                    style="border-bottom-left-radius: 20px;border-bottom-right-radius: 20px;">
                    <div class="col-lg-12">
                        <div class="bg-transparent border-0 card plan">
                            <div class="p-0 mt-20 text-center bg-transparent border-0 card-header">
                                <p class="mb-0 title">For {{ ucfirst($cardProduct->card_type) }}
                                    @if ($cardProduct->card_type == 'team')
                                        <svg xmlns="http://www.w3.org/2000/svg" version="1.1"
                                            xmlns:xlink="http://www.w3.org/1999/xlink" width="60" height="60"
                                            x="0" y="0" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512"
                                            xml:space="preserve" class="">
                                            <g>
                                                <path fill="#11bef7"
                                                    d="M411.466 51.409c-1.645 2.863-5.301 3.884-8.164 2.24-2.863-1.616-3.883-5.272-2.239-8.164l21.572-38.013c2.409-4.649 8.476-4.649 10.885 0l21.572 38.013c1.644 2.891.624 6.548-2.239 8.164a5.984 5.984 0 0 1-8.164-2.24l-10.602-18.708v244.29c0 3.316-2.693 6.009-6.009 6.009s-6.009-2.693-6.009-6.009V32.701l-10.602 18.708z"
                                                    opacity="1" data-original="#11bef7"></path>
                                                <path fill="#00ade6" d="M9.995 189.457h348.35v39.033H9.995z"
                                                    opacity="1" data-original="#00ade6"></path>
                                                <path fill="#11bef7" d="M33.409 189.457h324.935v39.033H33.409z"
                                                    opacity="1" data-original="#11bef7"></path>
                                                <g fill-rule="evenodd">
                                                    <path fill="#a0a9b0"
                                                        d="M139.113 329.12 9.995 228.49h348.35L229.199 329.12v95.754h-90.085V329.12z"
                                                        opacity="1" data-original="#a0a9b0"></path>
                                                    <path fill="#cd212d"
                                                        d="M233.479 112.128c1.984-54.198 122.882-54.198 124.866 0v29.197H233.479z"
                                                        opacity="1" data-original="#cd212d" class=""></path>
                                                    <path fill="#ee2b39"
                                                        d="M305.677 71.961c27.156 2.58 51.761 15.959 52.667 40.167v29.197H253.037v-29.197c.879-24.208 25.512-37.587 52.64-40.167z"
                                                        opacity="1" data-original="#ee2b39" class=""></path>
                                                    <path fill="#e2b698"
                                                        d="M295.897 9.995c18.227 0 33.024 14.797 33.024 33.024s-14.797 32.995-33.024 32.995-32.995-14.768-32.995-32.995 14.769-33.024 32.995-33.024z"
                                                        opacity="1" data-original="#e2b698" class=""></path>
                                                    <path fill="#efc9ae"
                                                        d="M302.814 10.732c14.91 3.175 26.107 16.413 26.107 32.287s-11.197 29.112-26.107 32.287c-14.938-3.175-26.107-16.441-26.107-32.287s11.168-29.112 26.107-32.287z"
                                                        opacity="1" data-original="#efc9ae" class=""></path>
                                                    <path fill="#f2992c"
                                                        d="M134.861 112.128c-1.984-54.198-122.882-54.198-124.866 0v29.197h124.866z"
                                                        opacity="1" data-original="#f2992c"></path>
                                                    <path fill="#faa845"
                                                        d="M134.861 112.128c-.879-24.208-25.512-37.587-52.639-40.167-27.156 2.58-51.761 15.959-52.64 40.167v29.197h105.279z"
                                                        opacity="1" data-original="#faa845" class=""></path>
                                                    <path fill="#e2b698"
                                                        d="M72.442 9.995c-18.227 0-33.023 14.797-33.023 33.024s14.797 32.995 33.023 32.995 32.995-14.768 32.995-32.995S90.669 9.995 72.442 9.995z"
                                                        opacity="1" data-original="#e2b698" class=""></path>
                                                    <path fill="#efc9ae"
                                                        d="M79.331 75.306c14.91-3.175 26.107-16.441 26.107-32.287S94.241 13.907 79.331 10.732c-14.91 3.175-26.107 16.413-26.107 32.287s11.197 29.112 26.107 32.287z"
                                                        opacity="1" data-original="#efc9ae" class=""></path>
                                                    <path fill="#00ade6"
                                                        d="M246.603 137.894c-1.984-54.17-122.882-54.17-124.866 0v29.197h124.866z"
                                                        opacity="1" data-original="#00ade6"></path>
                                                    <path fill="#11bef7"
                                                        d="M246.603 137.894c-.879-24.179-25.512-37.587-52.639-40.167-27.156 2.58-51.761 15.988-52.64 40.167v29.197h105.279z"
                                                        opacity="1" data-original="#11bef7"></path>
                                                    <path fill="#e2b698"
                                                        d="M184.156 35.79c-18.227 0-32.995 14.769-32.995 32.995s14.769 33.024 32.995 33.024S217.18 87.04 217.18 68.785 202.411 35.79 184.156 35.79z"
                                                        opacity="1" data-original="#e2b698" class=""></path>
                                                    <path fill="#efc9ae"
                                                        d="M191.072 101.072c14.91-3.175 26.107-16.413 26.107-32.287s-11.197-29.112-26.107-32.258c-14.91 3.146-26.107 16.413-26.107 32.258s11.197 29.112 26.107 32.287z"
                                                        opacity="1" data-original="#efc9ae" class=""></path>
                                                </g>
                                                <path fill="#11bef7"
                                                    d="M178.175 424.874c0-3.316 2.693-6.009 5.981-6.009a6.013 6.013 0 0 1 6.01 6.009v71.121h231.959l-.028-92.835c0-3.288 2.665-5.953 5.981-5.953 3.288 0 5.981 2.665 5.981 5.953l.057 98.844a6.013 6.013 0 0 1-6.009 6.01h-243.95c-3.288 0-5.981-2.693-5.981-6.01v-77.131z"
                                                    opacity="1" data-original="#11bef7"></path>
                                                <path fill="#f7b84e" fill-rule="evenodd"
                                                    d="M428.077 276.991c40.819 0 73.928 33.109 73.928 73.956s-33.109 73.927-73.928 73.927-73.928-33.109-73.928-73.927 33.081-73.956 73.928-73.956z"
                                                    opacity="1" data-original="#f7b84e"></path>
                                                <path fill="#ffcb5b" fill-rule="evenodd"
                                                    d="M436.326 277.473c36.935 4.082 65.679 35.433 65.679 73.474s-28.744 69.364-65.679 73.446c-36.936-4.082-65.679-35.405-65.679-73.446s28.744-69.392 65.679-73.474z"
                                                    opacity="1" data-original="#ffcb5b"></path>
                                                <path fill="#faa845"
                                                    d="M454.184 330.962c0 3.316-2.693 5.981-6.009 5.981s-6.009-2.665-6.009-5.981c0-10.233-15.619-15.364-24.407-7.767-2.324 2.013-3.798 4.762-3.798 7.767 0 19.162 43.2 2.891 43.2 37.361 0 13.039-10.488 23.046-23.074 25.427v6.917c0 3.317-2.693 6.01-6.009 6.01s-6.009-2.693-6.009-6.01v-6.917c-12.586-2.381-23.103-12.387-23.103-25.427 0-3.317 2.693-6.01 6.009-6.01s6.01 2.693 6.01 6.01c0 12.529 18.878 18.794 29.508 9.609 2.892-2.523 4.677-5.896 4.677-9.609 0-22.337-43.2-4.904-43.2-37.361 0-11.509 9.071-20.438 20.098-22.762v-7.002c0-3.316 2.693-6.01 6.009-6.01s6.009 2.693 6.009 6.01v7.002c11.027 2.324 20.098 11.253 20.098 22.762z"
                                                    opacity="1" data-original="#faa845" class=""></path>
                                                <path fill="#b0b7bd" fill-rule="evenodd"
                                                    d="M162.527 329.12 33.409 228.49h324.935L229.198 329.12v95.754h-66.671z"
                                                    opacity="1" data-original="#b0b7bd"></path>
                                            </g>
                                        </svg>
                                    @else
                                        <svg xmlns="http://www.w3.org/2000/svg" version="1.1"
                                            xmlns:xlink="http://www.w3.org/1999/xlink" width="60" height="60"
                                            x="0" y="0" viewBox="0 0 16.933 16.933"
                                            style="enable-background:new 0 0 512 512" xml:space="preserve"
                                            class="">
                                            <g>
                                                <path fill="#d0e5f8"
                                                    d="m6.59 9.787-2.257.91c-.746.3-1.283.675-1.446 1.476l-.508 2.228c-.182.797.645 1.477 1.446 1.477h11.372c.801 0 1.628-.68 1.446-1.477l-.508-2.228c-.163-.8-.7-1.175-1.446-1.476l-2.258-.91z"
                                                    opacity="1" data-original="#d0e5f8" class=""></path>
                                                <g fill="#b0d2f0">
                                                    <path
                                                        d="m4.598 10.858-.365-.01c-.746.3-1.18.791-1.344 1.592l-.12.524h1.2a.528.528 0 1 0 0-1.058h.529a.528.528 0 0 0 .1-1.048zM9.79 11.904l-.795 3.968h1.853l-.794-4.233zM11.641 9.522l1.059.53-1.583 2.116-1.063-1.323z"
                                                        fill="#b0d2f0" opacity="1" data-original="#b0d2f0"></path>
                                                    <path
                                                        d="m11.11 11.507-1.059.794-1.057-.794.795-.794h.53zM11.373 9.787l2.258.91c.745.3 1.282.675 1.446 1.476l.508 2.228c.182.797-.645 1.477-1.446 1.477h1.058c.801 0 1.628-.68 1.446-1.477l-.508-2.228c-.163-.8-.7-1.175-1.446-1.476l-2.258-.91z"
                                                        fill="#b0d2f0" opacity="1" data-original="#b0d2f0"></path>
                                                </g>
                                                <path fill="#d0e5f8"
                                                    d="M2.381 8.996V7.938H.794a.528.528 0 1 1 0-1.059h.529V5.821h-.53a.528.528 0 1 1 0-1.058h1.588v-.265a.528.528 0 1 1 1.059 0v4.498z"
                                                    opacity="1" data-original="#d0e5f8" class=""></path>
                                                <path fill="#549ad4"
                                                    d="M2.375 5.47a.265.265 0 0 0-.26.268v1.125c0 .353.53.353.53 0V5.738a.265.265 0 0 0-.27-.268z"
                                                    opacity="1" data-original="#549ad4"></path>
                                                <path fill="#b0d2f0"
                                                    d="M3.017 3.98C2.842 6.848 1.249 7.444.28 7.537c.057.23.263.4.511.4H2.38v5.821h1.058v-9.26a.528.528 0 0 0-.42-.518z"
                                                    opacity="1" data-original="#b0d2f0"></path>
                                                <path fill="#ffd1b5"
                                                    d="M2.38 8.731c-.585 0-1.057.472-1.057 1.058v2.117c0 .586.472 1.058 1.058 1.058h1.323a.528.528 0 1 0 0-1.058h.529a.528.528 0 1 0 0-1.058.528.528 0 1 0 0-1.059h-.53a.528.528 0 1 0 0-1.058z"
                                                    opacity="1" data-original="#ffd1b5" class=""></path>
                                                <path fill="#ffb98d"
                                                    d="M3.61 8.731c.291 2.008-1.17 3.14-2.162 3.667.177.336.525.566.933.566h1.323a.528.528 0 1 0 0-1.058h.529a.528.528 0 1 0 0-1.058.528.528 0 1 0 0-1.059h-.53a.528.528 0 1 0 0-1.058z"
                                                    opacity="1" data-original="#ffb98d"></path>
                                                <path fill="#427096"
                                                    d="M12.433 13.49h2.116c.147 0 .265.12.265.266v.528a.264.264 0 0 1-.265.265h-2.116a.264.264 0 0 1-.265-.265v-.528c0-.147.118-.265.265-.265z"
                                                    opacity="1" data-original="#427096" class=""></path>
                                                <path fill="#ffd1b5"
                                                    d="M7.937 8.464v1.323l1.323 1.058h.53l1.322-1.058V8.464z"
                                                    opacity="1" data-original="#ffd1b5" class=""></path>
                                                <path fill="#427096" d="m9.26 10.71-.794 5.162h2.117l-.794-5.163z"
                                                    opacity="1" data-original="#427096" class=""></path>
                                                <path fill="#365b7a"
                                                    d="M9.807 10.803c.072 2.191-.608 3.854-1.229 4.342l-.112.727h2.117z"
                                                    opacity="1" data-original="#365b7a" class=""></path>
                                                <path fill="#ffb98d"
                                                    d="M11.112 8.569c-.264.953-1.371 1.622-2.214 1.987l.362.29h.53l1.322-1.059z"
                                                    opacity="1" data-original="#ffb98d"></path>
                                                <path fill="#365b7a"
                                                    d="m10.581 11.374-1.059.794-1.058-.794.796-.793h.53z"
                                                    opacity="1" data-original="#365b7a" class=""></path>
                                                <path fill="#427096"
                                                    d="M9.125 0a6.96 6.96 0 0 0-1.99.313c-2.517.798-1.747 3.732-1.249 5.038l2.475-1.168a9.885 9.885 0 0 0 1.23-.226c.321-.086 1.096-.21 1.729-.07.316.07.592.2.787.413.195.211.326.512.326.99-.002.288.395.37.508.105 0 0 .447-1.019.535-2.105.045-.543.004-1.116-.265-1.596-.27-.48-.786-.833-1.583-.901-.617-.586-1.553-.8-2.503-.793z"
                                                    opacity="1" data-original="#427096" class=""></path>
                                                <path fill="#ffd1b5"
                                                    d="M6.275 4.764a1.058 1.058 0 1 0 .461 2.04c.165.512.518 1.348 1.2 1.924.51.433 1.057.53 1.587.53s1.09-.082 1.587-.53c.662-.596 1.02-1.423 1.192-1.93a1.058 1.058 0 1 0 .381-2.038c-.166-1.322-1.57-1.323-1.57-1.323-4.499 1.323-5.028 0-5.028 0z"
                                                    opacity="1" data-original="#ffd1b5" class=""></path>
                                                <path fill="#365b7a"
                                                    d="M9.125 0c-.058 0-.115.006-.173.008.824.045 1.607.273 2.147.785.796.068 1.313.421 1.583.901.27.48.31 1.053.265 1.596-.08.982-.437 1.868-.508 2.037.034.256.394.321.502.068 0 0 .447-1.019.535-2.105.045-.543.004-1.116-.265-1.596-.27-.48-.786-.833-1.583-.9-.617-.586-1.553-.8-2.503-.794z"
                                                    opacity="1" data-original="#365b7a" class=""></path>
                                                <path fill="#ffb98d"
                                                    d="M11.112 3.437c-4.044 1.19-4.874.248-5.002.044-.005.018-.007.037-.01.056l.071.505c.5.849 3.002.282 3.351.188.714-.19 3.175-.529 3.175 1.588 0 0 .183-.425.334-1.003a1.058 1.058 0 0 0-.348-.054c-.145-1.335-1.24-1.438-1.571-1.324z"
                                                    opacity="1" data-original="#ffb98d"></path>
                                                <path fill="#ffb98d"
                                                    d="M11.572 3.509c.477 3.217-1.9 4.918-3.63 5.224.51.428 1.054.524 1.58.524.53 0 1.092-.081 1.588-.529.662-.596 1.02-1.423 1.192-1.93a1.058 1.058 0 1 0 .381-2.038c-.103-.822-.686-1.133-1.111-1.251z"
                                                    opacity="1" data-original="#ffb98d"></path>
                                                <path fill="#365b7a"
                                                    d="M6.083 3.172c0 .702.86.836 1.725.793-.654-.038-1.196-.237-1.196-.793 0-1.183 2.288-1.323 2.288-1.323s-2.817 0-2.817 1.323z"
                                                    opacity="1" data-original="#365b7a" class=""></path>
                                                <path fill="#74a2c8"
                                                    d="M6.83 1.528c-.188.109-.4.095-.472-.03s.022-.316.21-.425.4-.095.472.03-.021.316-.21.425zM7.427 1.021c-.088.05-.186.045-.22-.014-.033-.058.01-.146.098-.197.087-.05.185-.044.219.015.034.058-.01.146-.097.196zM7.319 3.11c-.14.075-.294.06-.344-.034-.05-.094.024-.23.164-.304s.294-.06.344.034c.05.094-.024.23-.164.304zM7.767 2.756c-.065.035-.137.028-.16-.016s.011-.106.076-.14c.065-.035.137-.028.16.015s-.011.107-.076.141z"
                                                    opacity="1" data-original="#74a2c8"></path>
                                                <path fill="#427096"
                                                    d="m7.67 9.258-1.058.529 1.583 2.117 1.063-1.323zM11.375 9.258l1.058.529-1.583 2.117-1.063-1.323z"
                                                    opacity="1" data-original="#427096" class=""></path>
                                                <path fill="#365b7a"
                                                    d="M11.58 9.36c.061 1.221-.732 2.015-1.146 2.025l.416.518 1.583-2.116z"
                                                    opacity="1" data-original="#365b7a" class=""></path>
                                                <path fill="#3588cb"
                                                    d="M2.644 5.749a3.17 3.17 0 0 1-.53.87v.244c.009.344.522.344.53 0z"
                                                    opacity="1" data-original="#3588cb"></path>
                                                <path fill="#d0e5f8"
                                                    d="M4.76 15.081a1.852 1.852 0 1 1-3.704 0 1.852 1.852 0 0 1 3.704 0z"
                                                    opacity="1" data-original="#d0e5f8" class=""></path>
                                                <path fill="#b0d2f0"
                                                    d="M3.926 13.536a1.852 1.852 0 0 1-1.547 2.868c-.362 0-.717-.107-1.019-.307a1.852 1.852 0 1 0 2.566-2.561z"
                                                    opacity="1" data-original="#b0d2f0"></path>
                                                <path fill="#549ad4"
                                                    d="M3.702 15.081a.794.794 0 1 1-1.588 0 .794.794 0 0 1 1.588 0z"
                                                    opacity="1" data-original="#549ad4"></path>
                                                <path fill="#3588cb"
                                                    d="M2.114 15.081c0 .35.23.66.565.76a.794.794 0 0 1 .758-1.024c.078 0 .155.011.23.034a.794.794 0 0 0-1.553.23z"
                                                    opacity="1" data-original="#3588cb"></path>
                                            </g>
                                        </svg>
                                    @endif
                                </p>
                                @if ($cardProduct->card_type == 'team')
                                    <p class="mb-0">Select your preferred card, available in durable <br> plastic or
                                        premium
                                        metal.
                                    </p>
                                @else
                                    <p class="mb-0">Complimentary Smart Card included.</p>
                                @endif
                                <div class="link">
                                    <a href="{{ route('card.features', $cardProduct->slug) }}" target="_blank">See all
                                        features <i class="fas fa-arrow-right-long"></i></a>
                                </div>
                            </div>
                            <div class="p-0 card-body">
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
                    <div class="mt-50 col-lg-12">
                        <div class="mb-10 card nfc-card gift-card">
                            <p class="mb-0 gift-title">Purchase an NFC as Profile</p>
                            <p class="mb-0 gift-para">Get a smart, contactless NFC card or a secure virtual
                                card—ideal for seamless transactions, networking, and digital interactions.</p>
                            <div class="mt-2 d-flex justify-content-between align-items-end">
                                <div>
                                    <p class="pb-0 mb-0 gift-para">✔ Instant activation and easy setup</p>
                                    <p class="pb-0 mb-0 gift-para">✔ Secure and contactless transactions</p>
                                </div>

                                <div>
                                    <p class="mb-0 card-link gift-title">Get Yours Now -></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=" bg-light" style="border-top-left-radius: 20px;border-top-right-radius: 20px;">
                    <div class="col-lg-12">
                        <h2 class="pt-4">FAQ Accordion</h2>
                        <div class="accordion" id="accordionExample">
                            <div class="accordion-item">
                                <h2 class="accordion-header rounded-0" id="headingOne">
                                    <button class="accordion-button rounded-0 collapsed" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true"
                                        aria-controls="collapseOne">
                                        How many cards are included in the Teams subscription?
                                    </button>
                                </h2>
                                <div id="collapseOne" class="accordion-collapse collapse"
                                    aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        Each subscription seat includes a complimentary NFC smart card, allowing
                                        seamless
                                        access and functionality. If your team requires additional smart cards, you can
                                        purchase them separately for $39 each. These cards are designed for durability
                                        and
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
                                <div id="collapseTwo" class="accordion-collapse collapse"
                                    aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        Losing a card is not a problem! You can easily order a replacement NFC smart
                                        card
                                        for $39 each. To ensure your security, we recommend deactivating the lost card
                                        immediately and activating the new one upon receipt. This prevents unauthorized
                                        use
                                        and ensures your team continues to operate smoothly. Our support team is also
                                        available to assist with any issues related to lost or misplaced cards.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header rounded-0" id="headingThree">
                                    <button class="accordion-button collapsed rounded-0" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#collapseThree"
                                        aria-expanded="false" aria-controls="collapseThree">
                                        How do we customize our smart cards?
                                    </button>
                                </h2>
                                <div id="collapseThree" class="accordion-collapse collapse"
                                    aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        We offer full customization options to align your NFC smart cards with your
                                        brand
                                        identity. Once you provide your logo, brand colors, and any specific design
                                        preferences, our professional design team will create a high-quality proof for
                                        you
                                        to review. You can request modifications until you're satisfied with the final
                                        design. Once approved, your customized NFC smart cards will be produced and
                                        shipped
                                        to you, ensuring they match your company’s branding and enhance your
                                        professional
                                        presence.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header rounded-0" id="headingFour">
                                    <button class="accordion-button collapsed rounded-0" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#collapseFour"
                                        aria-expanded="false" aria-controls="collapseFour">
                                        Can we use these smart cards for multiple purposes?
                                    </button>
                                </h2>
                                <div id="collapseFour" class="accordion-collapse collapse"
                                    aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        Absolutely! Our NFC smart cards are highly versatile and can be programmed for
                                        multiple functions. They can be used for secure office access, digital business
                                        cards, membership verification, time tracking, and more. Depending on your
                                        needs,
                                        you can integrate them with your existing systems or use them with compatible
                                        NFC-enabled devices. If you need help setting up multiple functions, our team is
                                        happy to assist.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header rounded-0" id="headingSevenn">
                                    <button class="accordion-button collapsed rounded-0" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#collapseSevenn"
                                        aria-expanded="false" aria-controls="collapseSevenn">
                                        How long do NFC smart cards last?
                                    </button>
                                </h2>
                                <div id="collapseSevenn" class="accordion-collapse collapse"
                                    aria-labelledby="headingSevenn" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        Our NFC smart cards are designed for long-term use, with an average lifespan of
                                        3 to
                                        5 years, depending on usage and handling. They are built using durable materials
                                        to
                                        withstand daily wear and tear, ensuring reliability over time. Proper care—such
                                        as
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
                    const card_price = parseFloat($('input[name="card_preference"]:checked').data("card_price")) ||
                        0;
                    const cardPrice = card_price * cardUser;
                    const shippingPrice = parseFloat($('input[name="shipping_charge"]:checked').val()) || 0;

                    const cardTitle = $('input[name="card_preference"]:checked').data("card_title") || '';
                    const shippingTitle = $('input[name="shipping_charge"]:checked').data("shipping_title") || '';

                    const subtotal = planPrice + cardPrice + shippingPrice;
                    $('input[name="subtotal"]').val(subtotal.toFixed(2));

                    $('#card_title').text(cardTitle);
                    $('.summary').text(subtotal.toFixed(2));
                    $('.annualCharge').text(subtotal.toFixed(2));
                    $('#shipping_title').text(shippingTitle);


                    $('#card_price').text('$ ' + cardPrice.toFixed(2));
                    $('.planSummary').text('$ ' + planPrice.toFixed(2));
                    $('.cardSummary').text('$ ' + card_price.toFixed(2));
                    $('.userSummary').text(cardUser);

                    if ($('input[name="shipping_charge"]:checked')) {
                        $('#shipping_charge').text('$ ' + shippingPrice.toFixed(2));
                    } else {
                        $('#shipping_charge').text('');
                    }

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

            $(document).ready(function() {
                // Automatically go to Step 2 when a plan is selected
                $('input[name="plan"]').on('change', function() {
                    goToNextStep(1);
                });

                // // Automatically go to Step 3 when a card preference is selected
                // $('input[name="card_preference"]').on('change', function() {
                //     goToNextStep(2);
                // });

                // Enable Next Button for Step 3 when logo is uploaded
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

                // If returning to Step 1, uncheck all selected plans
                if (step - 1 === 1) {
                    $('input[name="plan"]').prop('checked', false);
                }
            }


            // Validate Step 3 (Enable Next button if logo, name, designation, and color are selected)
            $(document).ready(function() {
                function validateStep3() {
                    let isValid = true;

                    // Validate Card Logo Upload
                    if ($('#card_logo')[0].files.length === 0) {
                        isValid = false;
                    }

                    // Validate Card Holder Name
                    if ($('#card_name').val().trim() === '') {
                        isValid = false;
                    }

                    // Validate Card Holder Designation
                    if ($('#card_designation').val().trim() === '') {
                        isValid = false;
                    }

                    // Enable/Disable Continue Button
                    $('#nextBtn3').prop('disabled', !isValid).css({
                        'opacity': isValid ? '1' : '0.5',
                        'cursor': isValid ? 'pointer' : 'not-allowed'
                    });

                    return isValid;
                }

                // Attach Event Listeners
                $('#card_logo, #card_name, #card_designation').on('input change', validateStep3);

                // Initial validation check in case fields are prefilled
                validateStep3();
            });



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

                if (fileInput.files && fileInput.files[0]) {
                    const reader = new FileReader();
                    reader.onload = function(e) {
                        logoPreview.src = e.target.result;
                    };
                    reader.readAsDataURL(fileInput.files[0]);
                }
            }

            function previewName() {
                const nameInput = document.getElementById('card_holder_name').value;
                const namePreview = document.querySelector('.card-info p:nth-child(1)');
                namePreview.textContent = nameInput || "Your Name";
            }

            function previewDesignation() {
                const designationInput = document.getElementById('card_holder_designation').value;
                const designationPreview = document.querySelector('.card-info p:nth-child(2)');
                designationPreview.textContent = designationInput || "Your Designation";
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
        {{-- In Card Choose Active Radio Card Color --}}
        <script>
            document.addEventListener("DOMContentLoaded", function() {
                const designOptions = document.querySelectorAll(".card-design-option");

                designOptions.forEach(option => {
                    option.addEventListener("change", function() {
                        // Remove 'active-design' from all images
                        document.querySelectorAll(".img-choice").forEach(img => {
                            img.classList.remove("active-design");
                        });

                        // Add 'active-design' to the selected image
                        const selectedImage = this.nextElementSibling;
                        if (selectedImage) {
                            selectedImage.classList.add("active-design");
                        }
                    });
                });

                // Select the first radio button by default and trigger change event
                const firstOption = document.querySelector(".card-design-option:checked");
                if (firstOption) {
                    firstOption.dispatchEvent(new Event("change"));
                }
            });

            // Show the order summuery accordion when shpping is
        </script>
        <script>
            document.addEventListener("DOMContentLoaded", function() {
                const shippingInputs = document.querySelectorAll('input[name="shipping_charge"]');
                const accordionContainer = document.getElementById("accordionContainer");

                // Hide accordion initially
                accordionContainer.style.display = "none";

                shippingInputs.forEach(input => {
                    input.addEventListener("change", function() {
                        // Show accordion when a shipping method is selected
                        if (document.querySelector('input[name="shipping_charge"]:checked')) {
                            accordionContainer.style.display = "block";
                        } else {
                            accordionContainer.style.display = "none";
                        }
                    });
                });
            });
        </script>
    @endpush
</x-frontend-app-layout>

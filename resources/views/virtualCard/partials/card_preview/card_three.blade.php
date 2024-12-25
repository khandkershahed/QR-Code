@include('virtualCard.partials.worldMapIcon')
<style>
    @import url("https://fonts.googleapis.com/css2?family=Chakra+Petch:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Titillium+Web:ital,wght@0,200;0,300;0,400;0,600;0,700;0,900;1,200;1,300;1,400;1,600;1,700&display=swap");

    .card-container-three {
        font-family: "Titillium Web", sans-serif;
        color: #fff;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        height: auto;
    }

    *,
    :after,
    :before {
        box-sizing: border-box;
    }

    .pull-left {
        float: left;
    }

    .pull-right {
        float: right;
    }

    .card-three-clearfix:after,
    .card-three-clearfix:before {
        content: "";
        display: table;
    }

    .card-three-clearfix:after {
        clear: both;
        display: block;
    }

    /* .card {
      width: 100%;
      max-width: 300px;
      height: 520px;
      aspect-ratio: 300 / 285; Maintain the aspect ratio
      margin: 10px;
    } */

    .credit-card-wrap .mk-icon-world-map:before,
    .credit-card-wrap .credit-card-number:before {
        content: "";
        position: absolute;
    }

    .credit-card-wrap {
        width: 460px;
        height: 255px;
        position: relative;
        border-radius: 20px;
        background: #5d4157;
        background: -webkit-linear-gradient(to left, #5d4157, #a8caba);
        background: linear-gradient(to left, #5d4157, #a8caba);
        box-shadow: 2px 2px rgba(0, 0, 0, 0.4);
    }

    .credit-card-wrap .mk-icon-world-map {
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        width: 100%;
        height: 100%;
        overflow: hidden;
        position: absolute;
        border-radius: inherit;
    }

    .credit-card-wrap .mk-icon-world-map:before {
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        z-index: 0;
        background: rgba(0, 0, 0, 0.4);
        background: radial-gradient(circle at 0% 50%,
                rgba(96, 16, 48, 0) 9px,
                rgba(0, 0, 0, 0.2) 10px,
                rgba(96, 16, 48, 0) 11px) 0px 10px,
            radial-gradient(at 100% 100%,
                rgba(96, 16, 48, 0) 9px,
                rgba(255, 255, 255, 0.2) 10px,
                rgba(96, 16, 48, 0) 11px),
            rgba(0, 0, 0, 0.6);
        background-size: 20px 20px;
    }

    .credit-card-wrap .credit-card-inner {
        z-index: 100;
        padding: 30px;
        width: inherit;
        height: inherit;
        position: relative;
    }

    .credit-card-wrap .credit-logo .text {
        font-size: 32px;
        font-weight: 500;
        text-transform: uppercase;
        color: rgba(255, 255, 255, 0.8);
    }

    .credit-card-wrap .credit-logo .shape {
        width: 40px;
        height: 40px;
        display: inline-block;
        background-color: #dc143c;
        box-shadow: -2px 2px 0 rgba(255, 255, 255, 0.8);
        border-radius: 40px 0 40px 40px;
        transform: rotate(-45deg);
    }

    .credit-card-wrap .credit-logo .shape>.txt {
        color: #ccc;
        display: block;
        width: inherit;
        font-size: 14px;
        height: inherit;
        font-weight: 500;
        line-height: 40px;
        text-align: center;
        transform: rotate(45deg);
    }

    .credit-card-wrap .credit-font {
        color: #fff;
        font-size: 18px;
        font-family: "Titillium Web", sans-serif;
        text-shadow: -1px -1px 0px rgba(255, 255, 255, 0.3),
            1px 1px 0px rgba(0, 0, 0, 0.8);
    }

    .credit-card-wrap .credit-card-number {
        font-size: 26px;
        text-align: center;
        position: relative;
        letter-spacing: 2px;
        margin-bottom: 20px;
        white-space: nowrap;
    }

    .credit-card-wrap .credit-card-number:before {
        top: 100%;
        font-size: 12px;
        font-family: Roboto;
        content: attr(data-text);
    }

    .credit-card-wrap .credit-card-date {
        color: #fff;
        text-align: center;
    }

    .credit-card-wrap .credit-card-date .title {
        width: 50px;
        color: #deb887;
        font-size: 12px;
        line-height: 14px;
        text-align: right;
        display: inline-block;
        text-transform: uppercase;
    }

    .credit-card-wrap .credit-author {
        padding-top: 10px;
    }

    .credit-card-wrap .mk-icon-sim {
        width: 55px;
        height: 40px;
        margin: 20px 0;
        border-radius: 8px;
        background-color: #fdd76f;
    }

    .credit-card-wrap .mk-icon-visa {
        width: 90px;
        height: 45px;
        bottom: -10px;
        position: relative;
    }

    .credit-card-wrap .card-three-footer {
        left: 30px;
        right: 30px;
        bottom: 30px;
        position: absolute;
    }

    @media (max-width: 576px) {
        .card-container-three {
            flex-direction: column;
            width: 335px;
            margin: auto;
        }

        .credit-card-wrap {
            width: 350px;
            height: 280px;
        }
    }

    @media (max-width: 1366px) {
        .credit-card-wrap {
            width: 400px;
            height: 255px;
        }
    }
</style>
<div class="container">
    <div class="row mt-5">
        <div class="card-container-three">
            <div class="credit-card-wrap">
                <div class="mk-icon-world-map"></div>
                <div class="credit-card-inner">
                    <header class="header-three">
                        <div class="credit-logo">
                            <span class="text card_name">Rasheduzzaman</span>
                            <p class="pt-3 ps-2 mb-0 card_designation">SEO Specialist</p>
                            <p class="ps-2 card_phone">01620222616</p>
                        </div>
                    </header>
                    <footer class="card-three-footer">
                        <div class="card-three-clearfix">
                            <div class="pull-left">
                                {{-- <div class="credit-font credit-author">GoFlixza</div> --}}
                                <div class="credit-card-date text-start">
                                    <span class="credit-font ps-0 card_email">info@gmail.com</span>
                                    <br />
                                    <span class="credit-font ps-0 card_address">
                                        Khilkhet, Dhaka, Bangladesh
                                    </span>
                                </div>
                            </div>
                            <div class="pull-right">
                                <img class="card_logo"
                                    src="{{ !empty($site->system_logo_white) && file_exists(public_path('storage/webSetting/systemLogoWhite/' . $site->system_logo_white)) ? asset('storage/webSetting/systemLogoWhite/' . $site->system_logo_white) : asset('frontend/assets/images/logos/logo.png') }}"
                                    width="60px" />
                            </div>
                        </div>
                    </footer>
                </div>
            </div>
            <div class="credit-card-wrap mt-4">
                <div class="mk-icon-world-map"></div>
                <div class="credit-card-inner d-flex justify-content-center align-items-center"
                    style="background-color: #cccccc6e; border-radius: 20px">
                    <div>
                        <img class="nfc_qr"
                            src="https://upload.wikimedia.org/wikipedia/commons/thumb/d/d0/QR_code_for_mobile_English_Wikipedia.svg/800px-QR_code_for_mobile_English_Wikipedia.svg.png"
                            width="100px" />
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

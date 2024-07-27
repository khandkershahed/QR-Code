<style>
    @import url("https://fonts.googleapis.com/css2?family=Chakra+Petch:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap");

    .card-container-four {
        font-family: "Titillium Web", sans-serif;
        color: black;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
    }

    .card-four {
        width: 100%;
        max-width: 300px;
        height: 520px;
        aspect-ratio: 300 / 230;
        /* Maintain the aspect ratio */
        margin: 10px;
    }

    .card-four-front {
        background-image: url(https://i.ibb.co/R78XyqB/asdasd.png);
        background-repeat: no-repeat;
        background-size: cover;
        object-fit: cover;
        background-position: center;
        box-shadow: rgba(0, 0, 0, 0.25) 0px 54px 55px,
            rgba(0, 0, 0, 0.12) 0px -12px 30px, rgba(0, 0, 0, 0.12) 0px 4px 6px,
            rgba(0, 0, 0, 0.17) 0px 12px 13px, rgba(0, 0, 0, 0.09) 0px -3px 5px;
    }

    .card-four-back {
        background-image: url(https://i.ibb.co/Fn68zTt/bg-33.png);
        background-repeat: no-repeat;
        background-size: cover;
        object-fit: cover;
        background-position: center;
        box-shadow: rgba(0, 0, 0, 0.25) 0px 54px 55px,
            rgba(0, 0, 0, 0.12) 0px -12px 30px, rgba(0, 0, 0, 0.12) 0px 4px 6px,
            rgba(0, 0, 0, 0.17) 0px 12px 13px, rgba(0, 0, 0, 0.09) 0px -3px 5px;
    }



    .main-content-template-four {
        margin-top: 220px;
    }

    .template-four-title {
        font-family: "Chakra Petch", sans-serif;
        font-weight: 800;
    }

    .tem-4-logo {
        position: relative;
        top: 75%;
        left: 25px;
    }

    .tem-4-qr {
        position: relative;
        top: 300px;
        left: 150px;
    }



    .card-four-back p {
        font-size: 17px;
    }

    .card-four-user-info {
        margin-left: 58px;
    }

    @media (max-width: 576px) {
        .card-four-front {
            height: 1030px;
        }

        .main-content-template-four {
            margin-top: 230px;
        }

        .card {
            height: 1120px;
        }

        .card-container-four {
            flex-direction: column;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 150vh;
        }
    }
</style>

<div class="container">
    <div class="row mt-5">
        <div class="card-container-four">
            <div class="card-four border-0 card-four-front rounded-0">
                <div>
                    <!-- Front Info -->
                    <div class="text-start template-four-title main-content-template-four">
                        <div class="card-four-user-info">
                            <h4>Rasheduzzaman</h4>
                            <small>Frontend Designer</small>
                        </div>
                        <div class="pt-4 ps-5">
                            <div class="d-flex justify-content-center align-items-center pt-3">
                                <div class="ps-3 w-75">
                                    <p class="mb-0 text-start ps-2">info@gmail.com</p>
                                </div>
                            </div>
                            <div class="d-flex justify-content-center align-items-center pt-3">
                                <div class="ps-3 w-75">
                                    <p class="mb-0 text-start ps-2">info@gmail.com</p>
                                </div>
                            </div>
                            <div class="d-flex justify-content-center align-items-center pt-2">
                                <div class="ps-3 w-75">
                                    <p class="mb-0 text-start ps-2 text-black">01620222616</p>
                                </div>
                            </div>
                            <div class="d-flex justify-content-center align-items-center pt-2">
                                <div class="ps-3 w-75">
                                    <p class="mb-0 text-start ps-2">
                                        Khilkhet, Dhaka, Bangladesh
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-four border-0 card-four-back rounded-0">
                <div>
                    <!-- Company Logo -->
                    <div class="tem-4-logo">
                        <div class="d-flex align-items-center">
                            <img class="img-fluid" width="100px" src="https://i.ibb.co/CWsWHTM/lgoo.png" alt="" />
                            <div>
                                <h4>GoFlixza</h4>
                            </div>
                        </div>
                    </div>
                    <div class="tem-4-qr">
                        <img class="img-fluid bg-white" width="100px"
                            src="https://upload.wikimedia.org/wikipedia/commons/thumb/d/d0/QR_code_for_mobile_English_Wikipedia.svg/800px-QR_code_for_mobile_English_Wikipedia.svg.png"
                            alt="" />
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

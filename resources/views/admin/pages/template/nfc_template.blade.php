<x-admin-app-layout :title="'All NFC Templates - Admin Panel'">
    <style>
        .window {
            width: 400px;
            margin: auto;
            border: 7px solid #1d505d;
            border-radius: 5px;
            box-shadow: 0px 20px 46px 2px #bcc6ff;
            cursor: n-resize;
        }

        .window img {
            width: 100%;
            object-fit: cover;
            object-position: top;
            height: 500px;
            transition: 11s all ease;
        }

        .window img:hover {
            object-position: bottom;
        }

        .credit {
            font-weight: 300;
            text-align: center;
            margin-top: 6rem;
            color: #b6bee8;
            font-size: 14px;
        }

        .credit:hover span {
            color: #e91e63;
        }

        .credit:hover a {
            color: #e91e63;
            border-color: #e91e63;
        }

        .credit span {
            color: #b6bee8;
            transition: ease all 8s;
        }

        .credit a {
            color: #b6bee8;
            transition: ease-in all 700ms;
            -webkit-text-decoration: none;
            text-decoration: none;
            border-bottom: 2px solid #b6bee8;
        }

        .credit a:hover {
            color: #fff;
            box-shadow: inset 0 -5.5rem 0 #e91e63;
            border-bottom: 2px solid #e91e63;
        }

        .btn-check:active+.btn.custom-active,
        .btn-check:checked+.btn.custom-active,
        .btn.custom-active.active,
        .btn.custom-active.show,
        .btn.custom-active:active:not(.btn-active),
        .btn.custom-active:focus:not(.btn-active),
        .btn.custom-active:hover:not(.btn-active),
        .show>.btn.custom-active {
            opacity: 0.8;
        }
    </style>
    <div class="card my-10 rounded-0">
        <div class="card-header p-5 align-items-center rounded-0 bg-info m-0">
            <div>
                <h1 class="mb-0 mt-0 card-title fs-2 text-white">All V-Card Template!</h1>
                <p class="text-white mt-2 mb-0">View all Template in this page.</p>
            </div>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-lg-3 position-relative">
                    <div class="card card-flush bg-transparent ">
                        <div class="card-body p-0">
                            <div
                                class="btn template-btn btn-outline btn-outline-dashed btn-active-light-primary custom-active p-4 d-flex align-items-center mb-5 custom-radio">
                                <div class="window">
                                    <img class="img-fluid" src="{{ asset('admin/Nfc_templates/template_one.jpg') }}"
                                        alt="First Template">
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="card card-flush bg-transparent ">
                        <div class="card-body p-0">
                            <div
                                class="btn template-btn btn-outline btn-outline-dashed btn-active-light-primary custom-active p-4 d-flex align-items-center mb-5 custom-radio">
                                <div class="window">
                                    <img class="img-fluid" src="{{ asset('admin/Nfc_templates/template_two.png') }}"
                                        alt="Second Template">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="card card-flush bg-transparent ">
                        <div class="card-body p-0">
                            <div
                                class="btn template-btn btn-outline btn-outline-dashed btn-active-light-primary custom-active p-4 d-flex align-items-center mb-5 custom-radio">
                                <div class="window">
                                    <img class="img-fluid" src="{{ asset('admin/Nfc_templates/template_three.jpg') }}"
                                        alt="Third Template">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="card card-flush bg-transparent ">
                        <div class="card-body p-0">
                            <div
                                class="btn template-btn btn-outline btn-outline-dashed btn-active-light-primary custom-active p-4 d-flex align-items-center mb-5 custom-radio">
                                <div class="window">
                                    <img class="img-fluid" src="{{ asset('admin/Nfc_templates/template_four.jpg') }}"
                                        alt="Fourth Template">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="card card-flush bg-transparent ">
                        <div class="card-body p-0">
                            <div
                                class="btn template-btn btn-outline btn-outline-dashed btn-active-light-primary custom-active p-4 d-flex align-items-center mb-5 custom-radio">
                                <div class="window">
                                    <img class="img-fluid" src="{{ asset('admin/Nfc_templates/template_five.png') }}"
                                        alt="Fifth Template">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="card card-flush bg-transparent ">
                        <div class="card-body p-0">
                            <div
                                class="btn template-btn btn-outline btn-outline-dashed btn-active-light-primary custom-active p-4 d-flex align-items-center mb-5 custom-radio">
                                <div class="window">
                                    <img class="img-fluid" src="{{ asset('admin/Nfc_templates/template_six.png') }}"
                                        alt="Sixth Template">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-admin-app-layout>

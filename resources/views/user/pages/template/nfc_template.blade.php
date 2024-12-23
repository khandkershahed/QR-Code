<x-app-layout :title="'NFC Templates'">
    <div class="card my-5 rounded-0">
        <div class="card-header p-5 align-items-center rounded-0 bg-info m-0">
            <div>
                <h1 class="mb-0 mt-0 card-title fs-2 text-white">All V-Card Template!</h1>
                <p class="text-white mt-2 mb-0">View all Template in this page.</p>
            </div>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-lg-3">
                    <div class="border">
                        <img class="img-fluid" src="{{ asset('admin/Nfc_templates/template_one.jpg') }}"
                            alt="First Template">
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="border">
                        <img class="img-fluid" src="{{ asset('admin/Nfc_templates/template_two.jpg') }}"
                            alt="Second Template">
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="border">
                        <img class="img-fluid" src="{{ asset('admin/Nfc_templates/template_three.jpg') }}"
                            alt="Third Template">
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="border">
                        <img class="img-fluid" src="{{ asset('admin/Nfc_templates/template_four.jpg') }}"
                            alt="Fourth Template">
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="border">
                        <img class="img-fluid" src="{{ asset('admin/Nfc_templates/template_five.png') }}"
                            alt="Fifth Template">
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="border">
                        <img class="img-fluid" src="{{ asset('admin/Nfc_templates/template_six.png') }}"
                            alt="Sixth Template">
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

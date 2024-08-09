<x-app-layout :title="'Bar Code List'">
    <div class="row">
        <div class="col-lg-12">
            <div class="d-flex align-items-center rounded py-5 px-5 bg-light-primary" style="border: 1px dashed blue;">
                <i class="ki-duotone ki-information-5 fs-3x text-warning me-5">
                    <span class="path1"></span><span class="path2"></span><span class="path3"></span>
                </i>
                <!--begin::Description-->
                <div class="d-flex justify-content-between align-items-center w-100">
                    <div class="text-gray-700 fw-bold d-flex ">

                        <strong class="">Total Created NFC: {{ $bar_codes->count() }}</strong>
                    </div>
                    <div>
                        <a href="{{ route('user.barcode.create') }}" class="btn btn-sm btn-primary rounded-2 me-3">
                            Create Bar Code
                        </a>
                    </div>
                </div>
            </div>
        </div>


        @include('barCode.barcode_partial_index')
    </div>

</x-app-layout>

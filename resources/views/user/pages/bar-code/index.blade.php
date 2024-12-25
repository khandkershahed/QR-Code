<x-app-layout :title="'Bar Code List'">
    <div class="col-lg-12">
        <div class="card rounded-0 mt-4">
            <div class="card-header p-5 align-items-center rounded-0 bg-info m-0">
                <div>
                    <h1 class="mb-0 mt-0 card-title fs-2 text-white">All Bar Code!</h1>
                    <p class="text-white mt-2 mb-0">View and manage all Bar Code information in this page.</p>
                </div>
                <div>
                    <a href="{{ route('user.barcode.create') }}"
                        class="btn btn-white btn-active-light-warning text-hover-inverse-white">
                        <i class="fa-solid fa-user-plus"></i> Add Bar-Code
                    </a>
                </div>
            </div>
            @include('barCode.barcode_partial_index')
        </div>
    </div>

</x-app-layout>

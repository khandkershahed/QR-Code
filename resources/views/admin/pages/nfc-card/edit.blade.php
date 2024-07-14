<x-admin-app-layout :title="'NFC Card Edit'">
    <div class="mt-8">
        <div class="p-4 mb-2 mx-2 ms-0" style="background: #7239e9;position: relative;
    left: -2px;">
            <h2 class="text-center mb-0 text-white">Update Your NFC Profile!</h2>
        </div>
    </div>
    @if (session('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
    @endif
    @include('nfc.nfc_edit_partial')

</x-admin-app-layout>

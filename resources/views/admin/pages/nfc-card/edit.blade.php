<x-admin-app-layout :title="'NFC Card Edit'">
    <h1 class="text-center my-10">Update Your NFC Profile!</h1>
    @if (session('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
    @endif
    @include('nfc.nfc_edit_partial')

</x-admin-app-layout>
 
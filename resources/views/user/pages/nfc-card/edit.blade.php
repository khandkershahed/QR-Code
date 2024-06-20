<x-app-layout :title="'NFC Card Edit'">
    <h1 class="text-center mb-10 mt-5">Edit Your NFC Profile!</h1>
    @if (session('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
    @endif

</x-app-layout>

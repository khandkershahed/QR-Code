<x-admin-guest-layout :title="Generated Barcodes">
    <div class="container-xxl">
        <h2>Generated Barcodes</h2>
        @foreach ($barcodePages as $pageIndex => $barcodes)
            <div class="barcode-page">
                <h3>Page {{ $pageIndex + 1 }}</h3>
                <div class="barcodes">
                    @foreach ($barcodes as $barcode)
                        <div class="barcode">
                            {!! $barcode !!}
                        </div>
                    @endforeach
                </div>
            </div>
        @endforeach
    </div>
</x-admin-guest-layout>

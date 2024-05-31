<x-frontend-app-layout :title="'QR Test'">
    <section class="about-area py-90 rpy-60">
        <div class="container">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-4 offset-lg-4">
                            {!! QrCode::size(500)->eye('square')->eyeColor(1, 222, 18, 222,222, 18, 222 )->eyeColor(1, 222, 18, 222,222, 18, 222 )->eyeColor(2, 222, 18, 222,222, 18, 222 )->style('dot', 0.8)->errorCorrection('H')->generate('Make me into a QrCode!'); !!}
                        </div>
                    </div>
                    <h1>Generate QR Code</h1>
                    <form action="{{route('generate.qr')}}" method="POST" id="generate-qrcode-form">
                        @csrf
                        <label for="url">Enter URL:</label>
                        <input type="text" id="url" name="url" required>
                        <button type="submit">Generate QR Code</button>
                    </form>

                    <div id="generatedQRCodeContainer" style="display: none;">
                        <h2>QR Code</h2>
                        <img id="generatedQRCode" src="" alt="QR Code">
                    </div>
                </div>
            </div>
        </div>
    </section>


@push('scripts')
    <script>
        // document.getElementById('generate-qrcode-form').addEventListener('submit', function(event) {
        //     event.preventDefault();
        //         event.preventDefault(); // Prevent default form submission behavior
        //         // Get the form data
        //         var formData = new FormData($(this).closest('form')[0]);

        //         $.ajax({
        //             url: '/generate-qr', // Replace this with the URL of your Laravel route or endpoint
        //             type: 'POST',
        //             data: formData,
        //             processData: false,
        //             contentType: false,
        //             success: function(response) {
        //                 // Display the QR code image
        //                 $("#generatedQRCodeContainer").show();
        //                 $('#generatedQRCode').attr('src', 'data:image/png;base64,' + response.qrCode);
        //             },
        //             error: function(xhr, status, error) {
        //                 console.error(error);
        //             }
        //         });
        //     });

    </script>
@endpush
</x-frontend-app-layout>

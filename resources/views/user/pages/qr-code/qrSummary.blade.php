<x-app-layout :title="'QR Summary {{ $qr->code }}'">

    {{-- {!! QrCode::size(500)->eye('left-leaf',0.1)->eyeColor(0, 255, 255, 255, 0, 0, 0)->eyeColor(1, 222, 18, 222,222, 18, 222 )->eyeColor(2, 222, 18, 222,222, 18, 222 )->style('dot', 0.8)->errorCorrection('H')->generate('Make me into a QrCode!'); !!} --}}
    <div class="row">
        <div class="col-lg-12">
            <div class="card card-p-0 card-flush p-3 mt-10">
                <div class="card-header align-items-center py-5 gap-2 gap-md-5">
                    <div class="card-title">
                        <h2 class="mb-0">Manage your QR Codes</h2>
                    </div>
                    <div class="card-toolbar flex-row-fluid justify-content-end gap-5">
                        <a href="{{ route('user.qr-code.create') }}" class="btn btn-sm btn-primary rounded-2 me-3">
                            Create QR Codes
                        </a>
                    </div>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div id="map"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @push('scripts')
    
    <script>
        function initMap() {
            var map = new google.maps.Map(document.getElementById('map'), {
                zoom: 4,
                center: { lat: 0, lng: 0 }
            });

            var ipAddresses = @json($ipAddresses);

            ipAddresses.forEach(function(ip) {
                fetch('https://ipapi.co/' + ip + '/json/')
                .then(response => response.json())
                .then(data => {
                    var marker = new google.maps.Marker({
                        position: { lat: parseFloat(data.latitude), lng: parseFloat(data.longitude) },
                        map: map,
                        title: 'IP Address: ' + ip
                    });
                });
            });
        }
    </script>
    <script async defer
        src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&callback=initMap">
    </script>
    @endpush
</x-app-layout>

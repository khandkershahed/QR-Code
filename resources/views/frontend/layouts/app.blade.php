<!DOCTYPE html>
<html lang="zxx">

<head>
    <!-- Meta Tags for SEO & Security -->
    <meta charset="utf-8" />
    @props(['title'])
    <!-- Basic Meta Information -->
    <meta name="title" content="{{ $title ?? config('app.name', '| Go QR') }}">
    <meta name="description"
        content="Generate custom QR Codes for URLs, vCards, and create NFC Cards. Personalize with logos, colors, and frames. Create your free QR Codes today!">
    <meta name="keywords"
        content="qr code generator, create qr codes, qr code maker, qr generator, qr code creator, qr code, qr code with logo, free qr codes, qr code generator free, vcard, barcode, nfc card, nfc card generator, restaurant, restaurant qr, geolocation, business card, qr code with frames">
    <meta name="robots" content="index, follow">
    <meta name="author" content="https://www.goflixza.com/">
    <meta name="language" content="English">
    <meta name="revisit-after" content="2 days">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">

    <!-- Security & Privacy Meta Tags -->
    <meta http-equiv="Strict-Transport-Security" content="max-age=31536000; includeSubDomains; preload">
    <meta http-equiv="X-Frame-Options" content="DENY">
    <meta http-equiv="X-Content-Type-Options" content="nosniff">
    <meta name="Referrer-Policy" content="no-referrer-when-downgrade">
    <meta http-equiv="Permissions-Policy" content="geolocation=(self), microphone=()">

    <!-- Open Graph Meta Tags (for Social Media Sharing) -->
    <meta property="og:title" content="GoFlixza - Your Hub for QR, Bar Codes & NFC V.Cards">
    <meta property="og:description"
        content="Simplify your digital interactions with GoFlixza. Generate QR codes, barcodes, and NFC V.cards effortlessly.">
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://www.goflixza.com">
    <meta property="og:image" content="{{ asset('frontend/assets/images/logos/logo.png') }}">
    <meta property="og:image:alt" content="GoFlixza Logo">
    <meta property="og:site_name" content="GoFlixza">

    <!-- Twitter Card Meta Tags -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="GoFlixza || Create QR Codes, Bar Codes & NFC V.Cards">
    <meta name="twitter:description"
        content="Simplify your digital interactions with GoFlixza. Generate QR codes, barcodes, and NFC V.cards effortlessly.">
    <meta name="twitter:image" content="{{ asset('frontend/assets/images/logos/logo.png') }}">

    <!-- Favicon Icon -->
    <link rel="shortcut icon" href="{{ asset('frontend/assets/images/logos/logo.png') }}" type="image/x-icon" />

    <!-- Title Tag -->
    <title>{{ $title ?? config('app.name', '| GoFlixza') }}</title>

    <!-- External CSS Files -->
    <!-- Flaticon Icon Font -->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/flaticon.min.css') }}" />
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/bootstrap.min.css') }}" />
    <!-- Magnific Popup CSS -->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/magnific-popup.min.css') }}" />
    <!-- Nice Select CSS -->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/nice-select.min.css') }}" />
    <!-- Animate.css (for animations) -->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/aos.css') }}" />
    <!-- Slick Carousel CSS -->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/slick.min.css') }}" />
    <!-- Main Website Styles -->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/style.css') }}" />
</head>

<body class="home-nine">
    <div class="page-wrapper">
        <!-- Preloader -->
        <div class="preloader">
            <img width="150px"
                src="{{ !empty($site->system_logo_white) && file_exists(public_path('storage/webSetting/systemLogoWhite/' . $site->system_logo_white)) ? asset('storage/webSetting/systemLogoWhite/' . $site->system_logo_white) : asset('frontend/assets/images/logos/logo.png') }}"
                alt="Client Logo" />
        </div>

        <!-- Header Section -->
        @include('frontend.layouts.header')

        <!-- Main Content (Slot) -->
        {{ $slot }}

        <!-- Footer Section -->
        @include('frontend.layouts.footer')
    </div>
    <!-- End page-wrapper -->
    <!-- jQuery -->
    <script src="{{ asset('frontend/assets/js/jquery-3.6.0.min.js') }}"></script>
    <!-- Bootstrap JS -->
    <script src="{{ asset('frontend/assets/js/bootstrap.min.js') }}"></script>
    <!-- Appear.js (for on-screen element appearance) -->
    <script src="{{ asset('frontend/assets/js/appear.min.js') }}"></script>
    <!-- Slick Carousel JS -->
    <script src="{{ asset('frontend/assets/js/slick.min.js') }}"></script>
    <!-- Magnific Popup JS -->
    <script src="{{ asset('frontend/assets/js/jquery.magnific-popup.min.js') }}"></script>
    <!-- Nice Select JS -->
    <script src="{{ asset('frontend/assets/js/jquery.nice-select.min.js') }}"></script>
    <!-- Image Loader JS -->
    <script src="{{ asset('frontend/assets/js/imagesloaded.pkgd.min.js') }}"></script>
    <!-- Circle Progress JS -->
    <script src="{{ asset('frontend/assets/js/circle-progress.min.js') }}"></script>
    <!-- Skillbar JS -->
    <script src="{{ asset('frontend/assets/js/skill.bars.jquery.min.js') }}"></script>
    <!-- Isotope JS (for layout filtering) -->
    <script src="{{ asset('frontend/assets/js/isotope.pkgd.min.js') }}"></script>
    <!-- WOW.js (for animation effects) -->
    <script src="{{ asset('frontend/assets/js/aos.js') }}"></script>
    <!-- Custom JS -->
    <script src="{{ asset('frontend/assets/js/script.js') }}"></script>
    <!-- FontAwesome Icon Kit -->
    {{-- <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script> --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"
        integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- SweetAlert2 for Notifications -->
    <script src="{{ asset('frontend/assets/js/sweetalert2@11.js') }}"></script>

    <!-- Success Notification (if any session success) -->
    @if (session('success'))
        <script>
            Swal.fire({
                title: 'Success!',
                html: '{{ session('success') }}',
                icon: 'success',
                showCloseButton: true,
                buttonsStyling: false,
                customClass: {
                    confirmButton: 'btn btn-primary'
                }
            }).then(() => {
                {!! session()->forget('success') !!}
            });
        </script>
    @endif

    <!-- Error Notification (if any validation errors) -->
    @if ($errors->any())
        <script>
            @foreach ($errors->all() as $error)
                Swal.fire({
                    title: "<strong>Error!</strong>",
                    icon: "error",
                    html: '{{ $error }}',
                    showCloseButton: true,
                    focusConfirm: false,
                    customClass: {
                        confirmButton: 'btn btn-primary'
                    }
                }).then(() => {
                    {!! session()->flush() !!}
                });
            @endforeach
        </script>
    @endif

    <!-- Additional Scripts Stack -->
    @stack('scripts')
</body>

</html>

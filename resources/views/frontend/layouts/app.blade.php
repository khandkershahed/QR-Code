<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="utf-8" />
    @props(['title'])
    <meta name="title" content="{{ $title ?? config('app.name', '| Go QR') }}">
    <meta http-equiv="Strict-Transport-Security" content="max-age=31536000; includeSubDomains; preload">
    <meta http-equiv="X-Frame-Options" content="DENY">
    <meta http-equiv="X-Content-Type-Options" content="nosniff">
    <meta name="Referrer-Policy" content="no-referrer-when-downgrade">
    <meta http-equiv="Permissions-Policy" content="geolocation=(self), microphone=()">
    <meta name="description"
        content="Generate custom QR Codes for URLs, vCards, and create NFC Cards. Personalize with logos, colors, and frames. Create your free QR Codes today!">
    <meta name="keywords"
        content="qr code generator, create qr codes, qr code maker, qr generator, qr code creator, qr code, qr code with logo, free qr codes, qr code generator free, nfc card, nfc card generator, restaurant, restaurant qr, geolocation, nfc card, business card, qr code with frames">
    <meta name="robots" content="index, follow">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="language" content="English">
    <meta name="revisit-after" content="2 days">
    <meta name="author" content="https://www.goflixza.com/">
    <!-- Title -->
    <title>{{ $title ?? config('app.name', '| GoFlixza') }}</title>
    <meta property="og:title" content="GoFlixza - Your Hub for QR, Bar Codes & NFC V.Cards">
    <meta property="og:description"
        content="Simplify your digital interactions with GoFlixza. Generate QR codes, barcodes, and NFC V.cards effortlessly.">
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://www.goflixza.com">
    <meta property="og:image" content="frontend/assets/images/logos/logo.png">
    <meta property="og:image:alt" content="GoFlixza Logo">
    <meta property="og:site_name" content="GoFlixza">

    <!-- Twitter Card -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="GoFlixza || Create QR Codes, Bar Codes & NFC V.Cards">
    <meta name="twitter:description"
        content="Simplify your digital interactions with GoFlixza. Generate QR codes, barcodes, and NFC V.cards effortlessly.">
    <meta name="twitter:image" content="frontend/assets/images/logos/logo.png">
    <!-- Favicon Icon -->
    <link rel="shortcut icon" href="{{ !empty($site->system_logo_white) && file_exists(public_path('storage/webSetting/systemLogoWhite/' . $site->system_logo_white)) ? asset('storage/webSetting/systemLogoWhite/' . $site->system_logo_white) : asset('frontend/assets/images/logos/logo.png') }}" type="image/x-icon" />

    <!-- Google Fonts -->
    {{-- <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Work+Sans:wght@400;500;600&display=swap"
        rel="stylesheet" /> --}}
    {{-- <link rel="stylesheet" href="{{ asset('frontend/assets/fonts/Linearicons/Font/demo-files/demo.css') }}"> --}}
    <!-- Flaticon -->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/flaticon.min.css') }}" />
    <!-- Font Awesome -->
    {{-- <link rel="stylesheet" href="{{ asset('frontend/assets/css/fontawesome-5.14.0.min.css') }}" /> --}}
    <!-- Bootstrap -->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/bootstrap.min.css') }}" />
    <!-- Magnific Popup -->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/magnific-popup.min.css') }}" />
    <!-- Nice Select -->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/nice-select.min.css') }}" />
    <!-- Animate -->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/aos.css') }}" />
    <!-- Slick -->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/slick.min.css') }}" />
    <!-- Main Style -->
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

        <!-- header start-->
        @include('frontend.layouts.header')
        <!-- header end-->

        {{ $slot }}
        <!-- footer area start -->
        @include('frontend.layouts.footer')
        <!-- footer area end -->
    </div>
    <!--End pagewrapper-->

    <!-- Jquery -->
    <!-- Bootstrap -->
    <script src="{{ asset('frontend/assets/js/jquery-3.6.0.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/bootstrap.min.js') }}"></script>
    <!-- Appear Js -->
    <script src="{{ asset('frontend/assets/js/appear.min.js') }}"></script>
    <!-- Slick -->
    <script src="{{ asset('frontend/assets/js/slick.min.js') }}"></script>
    <!-- Magnific Popup -->
    <script src="{{ asset('frontend/assets/js/jquery.magnific-popup.min.js') }}"></script>
    <!-- Nice Select -->
    <script src="{{ asset('frontend/assets/js/jquery.nice-select.min.js') }}"></script>
    <!-- Image Loader -->
    <script src="{{ asset('frontend/assets/js/imagesloaded.pkgd.min.js') }}"></script>
    <!-- Circle Progress -->
    <script src="{{ asset('frontend/assets/js/circle-progress.min.js') }}"></script>
    <!-- Skillbar -->
    <script src="{{ asset('frontend/assets/js/skill.bars.jquery.min.js') }}"></script>
    <!-- Isotope -->
    <script src="{{ asset('frontend/assets/js/isotope.pkgd.min.js') }}"></script>
    <!--  WOW Animation -->
    <script src="{{ asset('frontend/assets/js/aos.js') }}"></script>
    <!-- Custom script -->
    <script src="{{ asset('frontend/assets/js/script.js') }}"></script>
    <script src="https://kit.fontawesome.com/69b7156a94.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
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
                // Flush session data
                {!! session()->forget('success') !!}
            });
        </script>
    @endif
    @if ($errors->any())
        <script>
            @foreach ($errors->all() as $error)
                Swal.fire({
                    title: "<strong>Error!</strong>",
                    icon: "error",
                    html: {{ $error }},
                    showCloseButton: true,
                    focusConfirm: false,
                    customClass: {
                        confirmButton: 'btn btn-primary'
                    }
                }).then(() => {
                    // Flush session data
                    {!! session()->flush() !!}
                });
            @endforeach
        </script>
    @endif
    @stack('scripts')
</body>

</html>

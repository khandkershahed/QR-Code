<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <!-- Meta Tags and Title -->
    <meta charset="utf-8" />
    <meta name="description"
        content="{{ $description ?? 'Go Flixza is the best platform for creating and managing your QR codes and contacts. Create personalized experiences easily.' }}" />
    <meta name="keywords"
        content="{{ $keywords ?? 'qr code generator, create qr codes, qr code maker, qr generator, qr code creator, qr code, qr code with logo, free qr codes, qr code generator free, vcard, barcode, nfc card, nfc card generator, restaurant, restaurant qr, geolocation, business card, qr code with frames' }}" />
    <meta name="author" content="{{ $author ?? 'Go Flixza Team' }}" />
    <meta name="robots" content="index, follow" />
    <meta name="language" content="English" />
    <meta name="revisit-after" content="1 days" />

    <!-- Open Graph Meta Tags for Social Media -->
    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="{{ $title ?? config('app.name', '| Go QR') }}" />
    <meta property="og:description"
        content="{{ $description ?? 'Go Flixza is the best platform for creating and managing your QR codes and contacts. Create personalized experiences easily.' }}" />
    <meta property="og:image" content="{{ asset('frontend/assets/images/og-image.jpg') }}" />
    <meta property="og:url" content="https://goflixza.com" />
    <meta property="og:site_name" content="Go Flixza | Create Your Contact" />

    <!-- Twitter Card Meta Tags -->
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:site" content="@yourtwitterhandle" />
    <meta name="twitter:title" content="{{ $title ?? config('app.name', '| Go QR') }}" />
    <meta name="twitter:description"
        content="{{ $description ?? 'Go Flixza is the best platform for creating and managing your QR codes and contacts. Create personalized experiences easily.' }}" />
    <meta name="twitter:image" content="{{ asset('frontend/assets/images/og-image.jpg') }}" />

    <!-- Canonical Link to avoid duplicate content issues -->
    <link rel="canonical" href="https://goflixza.com" />

    <!-- Favicon -->
    <link rel="shortcut icon"
        href="{{ !empty($site->system_logo_white) &&
        file_exists(public_path('storage/webSetting/systemLogoWhite/' . $site->system_logo_white))
            ? asset('storage/webSetting/systemLogoWhite/' . $site->system_logo_white)
            : asset('frontend/assets/images/logos/logo.png') }}" />

    <!-- Title -->
    @props(['title'])
    <title>{{ $title ?? config('app.name', '| Go QR') }}</title>

    <!-- Google Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />

    <!-- External CSS Files -->
    <link rel="stylesheet" href="{{ asset('admin/assets/plugins/global/plugins.bundle.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ asset('admin/assets/css/style.bundle.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ asset('admin/assets/css/slick.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('admin/assets/css/slick-theme.min.css') }}" />

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>

<body id="kt_body" class="bg-body">
    <!-- Main Content Wrapper -->
    <div class="d-flex flex-column flex-root">
        {{ $slot }}
    </div>

    <!-- Inline JavaScript Variables -->
    <script>
        var hostUrl = "assets/";
    </script>

    <!-- External JavaScript Files -->
    <script src="{{ asset('admin/assets/plugins/global/plugins.bundle.js') }}"></script>
    <script src="{{ asset('admin/assets/js/scripts.bundle.js') }}"></script>
    <script src="{{ asset('admin/assets/js/custom/authentication/sign-in/general.js') }}"></script>

    <!-- FontAwesome Kit -->
    <script src="{{ asset('admin/assets/js/custom/fontawesome.js') }}"></script>

    <!-- Slick Carousel JS -->
    <script src="{{ asset('admin/assets/js/custom/slick.min.js') }}"></script>

    <!-- Custom JavaScript -->
    <script>
        // Toggle Password Visibility
        document.querySelectorAll('.toggle-password').forEach(function(toggle) {
            toggle.addEventListener('click', function() {
                const passwordInput = this.closest('.position-relative').querySelector('input');
                const isVisible = passwordInput.getAttribute('type') === 'text';
                passwordInput.setAttribute('type', isVisible ? 'password' : 'text');
                this.querySelector('.bi-eye').classList.toggle('d-none');
                this.querySelector('.bi-eye-slash').classList.toggle('d-none');
            });
        });

        // Slick Slider Initialization
        $(document).ready(function() {
            $(".slick-slider").slick({
                slidesToShow: 1,
                slidesToScroll: 1,
                autoplay: true,
                draggable: false,
                autoplaySpeed: 2000, // Adjust autoplay speed in milliseconds
            });
        });
    </script>
</body>

</html>

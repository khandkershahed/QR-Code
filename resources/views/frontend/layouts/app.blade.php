<!DOCTYPE html>
<html lang="zxx">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="description" content="" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- Title -->
    @props(['title'])
    <title>{{ $title ?? config('app.name', '| Go QR') }}</title>
    <!-- Favicon Icon -->
    <link rel="shortcut icon" href="https://i.ibb.co/BNBTVN4/logo.png" type="image/x-icon" />
    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Work+Sans:wght@400;500;600&display=swap"
        rel="stylesheet" />

    <!-- Flaticon -->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/flaticon.min.css') }}" />
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/fontawesome-5.14.0.min.css') }}" />
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
            {{-- <div class="custom-loader"></div> --}}
            <img src="{{ asset('frontend') }}/assets/images/client-logos/preloader.svg"
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

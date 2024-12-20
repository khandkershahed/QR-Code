<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="article" />
    <meta property="og:title" content="" />
    <meta property="og:url" content="" />
    <meta property="og:site_name" content="" />
    <link rel="shortcut icon" href="{{ !empty($site->system_logo_white) && file_exists(public_path('storage/webSetting/systemLogoWhite/' . $site->system_logo_white)) ? asset('storage/webSetting/systemLogoWhite/' . $site->system_logo_white) : asset('frontend/assets/images/logos/logo.png') }}" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
    <link href="{{ asset('admin/assets/plugins/custom/fullcalendar/fullcalendar.bundle.css') }}" rel="stylesheet"
        type="text/css" />
    <link href="{{ asset('admin/assets/plugins/custom/datatables/datatables.bundle.css') }}" rel="stylesheet"
        type="text/css" />
    <link href="https://cdn.datatables.net/1.11.4/css/dataTables.bootstrap5.min.css" rel="stylesheet">
    <link href="{{ asset('admin/assets/plugins/global/plugins.bundle.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('admin/assets/css/style.bundle.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('admin/css/custom.css') }}" rel="stylesheet" type="text/css" />

    <link href="{{ asset('admin/assets/plugins/global/plugins.bundle.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('admin/css/custom.css') }}" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="{{ asset('admin/assets/plugins/global/plugins.bundle.css') }}">
    <link href="{{ asset('admin/assets/plugins/custom/datatables/datatables.bundle.css') }}" rel="stylesheet"
        type="text/css" />

    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css" />
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css" />


    @props(['title'])
    <title>{{ $title ?? config('app.name', 'GO-QR') }}</title>
</head>

<body id="kt_body"
    class="header-fixed header-tablet-and-mobile-fixed toolbar-enabled toolbar-fixed aside-enabled aside-fixed"
    style="--kt-toolbar-height:55px;--kt-toolbar-height-tablet-and-mobile:55px">
    <div class="d-flex flex-column flex-root">
        <div class="page d-flex flex-row flex-column-fluid">
            @include('reseller.layouts.sidebar')
            <div class="wrapper d-flex flex-column flex-row-fluid pt-15" id="kt_wrapper">
                @include('reseller.layouts.header')
                <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
                    {{-- @include('reseller.layouts.toolbar') --}}
                    <div class="post d-flex flex-column-fluid" id="kt_post">
                        <div id="kt_content_container" class="container-fluid">
                            {{ $slot }}
                        </div>
                    </div>
                </div>
                @include('reseller.layouts.footer')
            </div>
        </div>
    </div>
    <div id="kt_scrolltop" class="scrolltop" data-kt-scrolltop="true">
        <span class="svg-icon">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                <rect opacity="0.5" x="13" y="6" width="13" height="2" rx="1"
                    transform="rotate(90 13 6)" fill="currentColor" />
                <path
                    d="M12.5657 8.56569L16.75 12.75C17.1642 13.1642 17.8358 13.1642 18.25 12.75C18.6642 12.3358 18.6642 11.6642 18.25 11.25L12.7071 5.70711C12.3166 5.31658 11.6834 5.31658 11.2929 5.70711L5.75 11.25C5.33579 11.6642 5.33579 12.3358 5.75 12.75C6.16421 13.1642 6.83579 13.1642 7.25 12.75L11.4343 8.56569C11.7467 8.25327 12.2533 8.25327 12.5657 8.56569Z"
                    fill="currentColor" />
            </svg>
        </span>
    </div>
    @php
        $hostUrl = 'admin/assets/';
    @endphp
    <script src="{{ asset($hostUrl . 'plugins/global/plugins.bundle.js') }}"></script>
    <script src="{{ asset($hostUrl . 'js/scripts.bundle.js') }}"></script>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="{{ asset($hostUrl . 'plugins/custom/datatables/datatables.bundle.js') }}"></script>
    <script src="{{ asset($hostUrl . 'plugins/custom/fullcalendar/fullcalendar.bundle.js') }}"></script>
    <script src="https://cdn.datatables.net/1.11.4/js/dataTables.bootstrap5.min.js"></script>
    <script src="{{ asset($hostUrl . 'plugins/custom/formrepeater/formrepeater.bundle.js') }}"></script>
    {{-- <script src="{{ asset($hostUrl . 'js/custom/account/settings/signin-methods.js') }}"></script>
    <script src="{{ asset($hostUrl . 'js/custom/account/settings/profile-details.js') }}"></script>
    <script src="{{ asset($hostUrl . 'js/custom/account/settings/deactivate-account.js') }}"></script>
    <script src="{{ asset($hostUrl . 'js/custom/apps/ecommerce/catalog/save-product.js') }}"></script> --}}



    <script src="{{ asset($hostUrl . 'js/widgets.bundle.js') }}"></script>
    <script src="{{ asset($hostUrl . 'js/custom/widgets.js') }}"></script>

    <script src="{{ asset($hostUrl . 'js/custom/utilities/modals/create-account.js') }}"></script>
    {{-- <script src="{{ asset($hostUrl . 'js/custom/utilities/modals/qr-stepper.js') }}"></script> --}}



    <script src="{{ asset($hostUrl . 'js/custom/apps/chat/chat.js') }}"></script>
    <script src="{{ asset($hostUrl . 'js/custom/utilities/modals/upgrade-plan.js') }}"></script>
    <script src="{{ asset($hostUrl . 'js/custom/utilities/modals/create-app.js') }}"></script>
    <script src="{{ asset($hostUrl . 'js/custom/utilities/modals/offer-a-deal/type.js') }}"></script>
    <script src="{{ asset($hostUrl . 'js/custom/utilities/modals/offer-a-deal/details.js') }}"></script>
    <script src="{{ asset($hostUrl . 'js/custom/utilities/modals/offer-a-deal/finance.js') }}"></script>
    <script src="{{ asset($hostUrl . 'js/custom/utilities/modals/offer-a-deal/complete.js') }}"></script>
    <script src="{{ asset($hostUrl . 'js/custom/utilities/modals/offer-a-deal/main.js') }}"></script>
    <script src="{{ asset($hostUrl . 'js/custom/utilities/modals/two-factor-authentication.js') }}"></script>
    <script src="{{ asset($hostUrl . 'js/custom/utilities/modals/users-search.js') }}"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <script src="{{ asset('frontend/assets/js/fontawesome.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCbfUj9Hr1sqI5sb_nc2XSWFrRun3l_Vto&callback=initMap"></script>
    <script src="{{ asset('admin/js/custom.js') }}"></script>
    {{-- <script>
        showSuccessMessage('{{ session('success') }}');
        @foreach ($errors->all() as $error)
            showErrorMessage('{{ $error }}');
        @endforeach
    </script> --}}
    {{-- @if (session('success'))
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
    @endif --}}
    <script>
        $(document).ready(function() {
            // Add event listener to radio inputs
            $('.form-container').hide();
            $('input[type="radio"]').change(function() {
                // Hide all forms
                $('.form-container').hide();

                // Show the selected form based on the value of the checked radio input
                const selectedValue = $('input[type="radio"]:checked').val();
                $('#' + selectedValue + '-form').show();
            });

            // Initially hide all forms except the one corresponding to the initially selected radio input
            const selectedValue = $('input[type="radio"]:checked').val();
            $('#' + selectedValue + '-form').show();
        });
    </script>
    @stack('scripts')

</body>

</html>

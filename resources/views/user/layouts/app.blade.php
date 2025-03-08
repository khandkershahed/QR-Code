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
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="shortcut icon"
        href="{{ !empty($site->system_logo_white) && file_exists(public_path('storage/webSetting/systemLogoWhite/' . $site->system_logo_white)) ? asset('storage/webSetting/systemLogoWhite/' . $site->system_logo_white) : asset('frontend/assets/images/logos/logo.png') }}" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
    <link href="{{ asset('admin/assets/css/slick.min.css') }}" rel="stylesheet">
    <link href="{{ asset('admin/assets/css/slick-theme.min.css') }}" rel="stylesheet">
    <!-- Keenthemes & Vendor CSS -->
    <link href="{{ asset('admin/assets/plugins/global/plugins.bundle.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('admin/assets/plugins/custom/datatables/datatables.bundle.css') }}" rel="stylesheet"
        type="text/css" />
    <link href="{{ asset('admin/assets/plugins/custom/fullcalendar/fullcalendar.bundle.css') }}" rel="stylesheet"
        type="text/css" />
    <!-- Main Stylesheets -->
    <link href="{{ asset('admin/assets/css/style.bundle.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('admin/css/custom.css') }}" rel="stylesheet" type="text/css" />
    @props(['title'])
    <title>{{ $title ?? config('app.name', 'GoFlixza') }} || 'Your Hub for QR, Bar Codes, NFC V.Cards'</title>
</head>

<body id="kt_body"
    class="header-fixed header-tablet-and-mobile-fixed toolbar-enabled toolbar-fixed aside-enabled aside-fixed"
    style="--kt-toolbar-height:55px;--kt-toolbar-height-tablet-and-mobile:55px">
    <div id="preloader">
        <div class="dot-spinner">
            <div class="dot-spinner__dot"></div>
            <div class="dot-spinner__dot"></div>
            <div class="dot-spinner__dot"></div>
            <div class="dot-spinner__dot"></div>
            <div class="dot-spinner__dot"></div>
            <div class="dot-spinner__dot"></div>
            <div class="dot-spinner__dot"></div>
            <div class="dot-spinner__dot"></div>
        </div>
    </div>
    <div class="d-flex flex-column flex-root">
        <div class="page d-flex flex-row flex-column-fluid">
            @include('user.layouts.sidebar')
            <div class="wrapper d-flex flex-column flex-row-fluid pt-15" id="kt_wrapper">
                @include('user.layouts.header')
                <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
                    <div class="post d-flex flex-column-fluid" id="kt_post">
                        <div id="kt_content_container" class="container-fluid">
                            {{ $slot }}
                        </div>
                    </div>
                </div>
                @include('user.layouts.footer')
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
    @include('user.layouts.modal')
    <!-- jQuery (Necessary for DataTables and other plugins) -->
    <script src="{{ asset('frontend/assets/js/jquery-3.6.0.min.js') }}"></script>
    <!-- Vendor Scripts -->
    <script src="{{ asset('admin/assets/plugins/global/plugins.bundle.js') }}"></script>
    <script src="{{ asset('admin/assets/js/scripts.bundle.js') }}"></script>
    <script src="{{ asset('admin/assets/plugins/custom/datatables/datatables.bundle.js') }}"></script>
    <script src="{{ asset('admin/assets/plugins/custom/fullcalendar/fullcalendar.bundle.js') }}"></script>
    <script src="{{ asset('admin/assets/plugins/custom/formrepeater/formrepeater.bundle.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/slick.min.js') }}"></script>
    <!-- FontAwesome -->
    <script src="{{ asset('frontend/assets/js/fontawesome.js') }}"></script>
    <!-- Google Maps (Deferred for performance) -->
    <script defer
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCbfUj9Hr1sqI5sb_nc2XSWFrRun3l_Vto&loading=async&callback=initMap">
    </script>
    <script defer src="{{ asset('frontend/assets/js/alpine.js') }}"></script>
    <script
        src="https://preview.keenthemes.com/html/metronic/docs/assets/js/custom/documentation/general/draggable/cards.js">
    </script>
    <script src="https://preview.keenthemes.com/html/metronic/docs/assets/plugins/custom/draggable/draggable.bundle.js">
    </script>
    <script src="{{ asset('frontend/assets/js/prismjs.bundle.js') }}"></script>
    <!-- Custom Scripts -->
    <script src="{{ asset('admin/assets/js/widgets.bundle.js') }}"></script>
    <script src="{{ asset('admin/assets/js/custom/widgets.js') }}"></script>
    <script src="{{ asset('admin/assets/js/custom/utilities/modals/create-account.js') }}"></script>
    <script src="{{ asset('admin/js/custom.js') }}"></script>
    <!-- Scripts -->
    <script>
        class DataTableInitializer {
            constructor(tableClass, options = {}) {
                this.tableClass = tableClass;
                this.options = {
                    language: {
                        lengthMenu: "Show _MENU_",
                    },
                    dom: "<'row'" +
                        "<'col-sm-6 d-flex align-items-center justify-content-start'l>" +
                        "<'col-sm-6 d-flex align-items-center justify-content-end'f>" +
                        ">" +
                        "<'table-responsive'tr>" +
                        "<'row'" +
                        "<'col-sm-12 col-md-5 d-flex align-items-center justify-content-center justify-content-md-start'i>" +
                        "<'col-sm-12 col-md-7 d-flex align-items-center justify-content-center justify-content-md-end'p>" +
                        ">",
                    ...options, // Allow overriding defaults
                };
            }

            init() {
                $(`.${this.tableClass}`).DataTable(this.options);
            }
        }

        // Usage:
        const myDataTable = new DataTableInitializer('my-datatable');
        myDataTable.init();
    </script>
    <script>
        setTimeout(function() {
            const preloader = document.getElementById('preloader');
            if (preloader) {
                preloader.style.display = 'none'; // Hide the preloader
            }
        }, 2000); // Adjust the timeout duration as needed (e.g., 2000ms = 2 seconds)
    </script>
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
    <script>
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
    @if (session('nfcExceededModal'))
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                var myModal = new bootstrap.Modal(document.getElementById('toastr_nfc_modal'), {
                    backdrop: 'static',
                    keyboard: false
                });
                myModal.show();
            });
        </script>
    @endif
    @if (session('qrExceededModal'))
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                var myModal = new bootstrap.Modal(document.getElementById('toastr_qr_modal'), {
                    backdrop: 'static',
                    keyboard: false
                });
                myModal.show();
            });
        </script>
    @endif
    @if (session('barcodeExceededModal'))
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                var myModal = new bootstrap.Modal(document.getElementById('toastr_barcode_modal'), {
                    backdrop: 'static',
                    keyboard: false
                });
                myModal.show();
            });
        </script>
    @endif
</body>

</html>

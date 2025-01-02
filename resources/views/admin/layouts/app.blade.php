<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <!-- Meta Tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- SEO Meta Tags -->
    <meta name="description"
        content="Your hub for QR, Bar Codes, NFC V.Cards, and more. Manage and generate easily with GoFlixza Admin Dashboard.">
    <meta name="keywords" content="QR Codes, Bar Codes, NFC Cards, Virtual Cards, Admin Dashboard">
    <meta name="author" content="GoFlixza">

    <!-- Open Graph Meta Tags (For Social Sharing) -->
    <meta property="og:locale" content="en_US">
    <meta property="og:type" content="website">
    <meta property="og:title" content="{{ $title ?? config('app.name', 'GoFlixza') }}">
    <meta property="og:description" content="Your hub for QR, Bar Codes, NFC V.Cards, and more.">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:site_name" content="GoFlixza Admin Dashboard">
    <meta property="og:image" content="{{ asset('frontend/assets/images/logos/logo.png') }}">

    <!-- Twitter Card Meta Tags -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="{{ $title ?? config('app.name', 'GoFlixza') }}">
    <meta name="twitter:description" content="Your hub for QR, Bar Codes, NFC V.Cards, and more.">
    <meta name="twitter:image" content="{{ asset('frontend/assets/images/logos/logo.png') }}">
    <!-- Favicon -->
    <link rel="shortcut icon"
        href="{{ !empty($site->system_logo_white) && file_exists(public_path('storage/webSetting/systemLogoWhite/' . $site->system_logo_white)) ? asset('storage/webSetting/systemLogoWhite/' . $site->system_logo_white) : asset('frontend/assets/images/logos/logo.png') }}">
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
    <!-- Stylesheets -->
    <link href="{{ asset('admin/assets/css/style.bundle.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('admin/assets/plugins/global/plugins.bundle.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('admin/assets/plugins/custom/fullcalendar/fullcalendar.bundle.css') }}" rel="stylesheet"
        type="text/css">
    <link href="{{ asset('admin/assets/plugins/custom/datatables/datatables.bundle.css') }}" rel="stylesheet"
        type="text/css">
    <link href="{{ asset('frontend/assets/css/jquery_timepicker.min.css') }}" rel="stylesheet" type="text/css">
    <!-- Page Title -->
    <title>{{ $title ?? config('app.name', 'GoFlixza') }} | Your Hub for QR, Bar Codes, NFC V.Cards</title>
</head>

<body id="kt_body"
    class="header-fixed header-tablet-and-mobile-fixed toolbar-enabled toolbar-fixed aside-enabled aside-fixed"
    style="--kt-toolbar-height:55px;--kt-toolbar-height-tablet-and-mobile:55px">
    <div class="d-flex flex-column flex-root">
        <!-- Preloader -->
        <div class="preloader">
            <div class="ld-ripple">
                <div></div>
                <div></div>
            </div>
        </div>
        <!-- End Preloader -->
        <div class="page d-flex flex-column flex-column-fluid">
            @include('admin.layouts.sidebar')
            <div class="wrapper d-flex flex-column flex-row-fluid pt-20" id="kt_wrapper">
                @include('admin.layouts.header')
                <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
                    <div class="post d-flex flex-column-fluid" id="kt_post">
                        <div id="kt_content_container" class="container-fluid">
                            {{ $slot }}
                        </div>
                    </div>
                </div>
                @include('admin.layouts.footer')
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
    <!-- jQuery (Necessary for DataTables and other plugins) -->
    <script src="{{ asset('frontend/assets/js/jquery-3.6.0.min.js') }}"></script>
    <!-- Vendor Scripts -->
    <script src="{{ asset('admin/assets/plugins/global/plugins.bundle.js') }}"></script>
    <script src="{{ asset('admin/assets/js/scripts.bundle.js') }}"></script>
    <script src="{{ asset('admin/assets/plugins/custom/datatables/datatables.bundle.js') }}"></script>
    <script src="{{ asset('admin/assets/plugins/custom/fullcalendar/fullcalendar.bundle.js') }}"></script>
    <script src="{{ asset('admin/assets/plugins/custom/formrepeater/formrepeater.bundle.js') }}"></script>
    <script src="https://cdn.ckeditor.com/ckeditor5/36.0.1/classic/ckeditor.js" defer></script>
    <script src="{{ asset('frontend/assets/js/fontawesome.js') }}" defer></script>
    <!-- AlpineJS (Deferred for performance) -->
    <script defer src="{{ asset('frontend/assets/js/alpine.js') }}"></script>
    <!-- Custom Scripts (Make sure they depend on the earlier scripts) -->
    <script src="{{ asset('admin/js/custom.js') }}" defer></script>
    <!-- Additional Custom Scripts -->
    <script src="{{ asset('admin/assets/plugins/custom/tinymce/tinymce.bundle.js') }}" defer></script>
    <script src="{{ asset('admin/assets/js/custom/account/settings/profile-details.js') }}" defer></script>
    <script src="{{ asset('admin/assets/js/custom/account/settings/deactivate-account.js') }}" defer></script>
    <script src="{{ asset('admin/assets/js/custom/apps/ecommerce/catalog/save-product.js') }}" defer></script>
    <script src="{{ asset('admin/assets/js/widgets.bundle.js') }}" defer></script>
    <script src="{{ asset('admin/assets/js/custom/widgets.js') }}" defer></script>
    <script src="{{ asset('admin/assets/js/custom/apps/chat/chat.js') }}" defer></script>
    <script src="{{ asset('admin/assets/js/custom/utilities/modals/create-account.js') }}" defer></script>
    <script src="{{ asset('admin/assets/js/custom/utilities/modals/create-app.js') }}" defer></script>
    <script src="{{ asset('frontend/assets/js/jquery_timepicker.js') }}" defer></script>
    <script src="{{ asset('frontend/assets/js/form-validator.min.js') }}" defer></script>
    <!-- Inline JavaScript: Only the essential functions to make the page interactive -->
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
        $(document).ready(function() {
            // Color code preview
            $('.colorCode').on('input', function() {
                var colorCode = $(this).val();
                $(this).closest('.row').find('.colorCodePreview').text(colorCode);
            });

            // Live clock
            function updateClock() {
                var currentTime = moment().format('YYYY-MM-DD HH:mm:ss');
                $('#liveClock').text('Current Time: ' + currentTime);
            }
            setInterval(updateClock, 1000);
            updateClock();
        });
    </script>

    <script>
        $(document).ready(function() {
            // Radio button change event for forms
            $('.form-container').hide();
            $('input[type="radio"]').change(function() {
                $('.form-container').hide();
                const selectedValue = $('input[type="radio"]:checked').val();
                $('#' + selectedValue + '-form').show();
            });
            const selectedValue = $('input[type="radio"]:checked').val();
            $('#' + selectedValue + '-form').show();
        });
    </script>

    <script>
        // CKEditor Initialization
        document.querySelectorAll('.ckeditor').forEach(element => {
            if (!element.classList.contains('ck-editor__editable_inline')) {
                ClassicEditor.create(element)
                    .then(editor => {
                        console.log('CKEditor initialized:', editor);
                    })
                    .catch(error => {
                        console.error('CKEditor initialization error:', error);
                    });
            }
        });
    </script>

    <script>
        // Preloader hide logic
        setTimeout(() => {
            const preloader = document.querySelector('.preloader');
            if (preloader) {
                preloader.classList.add('fade-out');
                setTimeout(() => {
                    preloader.style.display = 'none';
                }, 500); // Match the fade-out duration
            }
        }, 2000);
    </script>

    <!-- Additional Custom Scripts as needed -->
    @stack('scripts')

</body>

</html>

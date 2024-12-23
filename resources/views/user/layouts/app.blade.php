<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="article" />
    <meta property="og:title" content="Your Hub for QR, Bar Codes, NFC V.Cards" />
    <meta property="og:url" content="{{ url()->current() }}" />
    <meta property="og:site_name" content="GoFlixza" />
    <link rel="shortcut icon"
        href="{{ !empty($site->system_logo_white) && file_exists(public_path('storage/webSetting/systemLogoWhite/' . $site->system_logo_white)) ? asset('storage/webSetting/systemLogoWhite/' . $site->system_logo_white) : asset('frontend/assets/images/logos/logo.png') }}" />
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="{{ $title ?? config('app.name', 'GoFlixza') }}">
    <meta name="twitter:description" content="Your hub for QR, Bar Codes, NFC V.Cards, and more.">
    <meta name="twitter:image" content="{{ asset('frontend/assets/images/logos/logo.png') }}">


    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet" />

    <!-- CSS Files -->
    <link href="{{ asset('admin/assets/plugins/custom/fullcalendar/fullcalendar.bundle.css') }}" rel="stylesheet"
        type="text/css" />
    <link href="{{ asset('admin/assets/plugins/custom/datatables/datatables.bundle.css') }}" rel="stylesheet"
        type="text/css" />
    <link href="https://cdn.datatables.net/1.11.4/css/dataTables.bootstrap5.min.css" rel="stylesheet">
    <link href="{{ asset('admin/assets/plugins/global/plugins.bundle.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('admin/assets/css/style.bundle.css') }}" rel="stylesheet" type="text/css" />


    <!-- Slick Carousel CSS -->
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css" />
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css" />

    <title>{{ $title ?? config('app.name', 'GoFlixza') }} || Your Hub for QR, Bar Codes, NFC V.Cards</title>
</head>

<body id="kt_body"
    class="header-fixed header-tablet-and-mobile-fixed toolbar-enabled toolbar-fixed aside-enabled aside-fixed"
    style="--kt-toolbar-height:55px;--kt-toolbar-height-tablet-and-mobile:55px">
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

    <!-- Scroll Top Button -->
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

    <!-- Modal Includes -->
    {{-- @include('user.layouts.modal') --}}

    <script defer src="{{ asset('admin/assets/plugins/global/plugins.bundle.js') }}"></script>
    <script defer src="{{ asset('admin/assets/js/scripts.bundle.js') }}"></script>

    <script defer src="{{ asset('admin/assets/plugins/custom/datatables/datatables.bundle.js') }}"></script>
    <script defer src="{{ asset('admin/assets/js/custom/documentation/general/datatables/buttons.js') }}"></script>
    <script defer src="{{ asset('admin/assets/plugins/custom/fullcalendar/fullcalendar.bundle.js') }}"></script>
    <script defer src="https://cdn.ckeditor.com/ckeditor5/36.0.1/classic/ckeditor.js"></script>
    <script defer src="{{ asset('frontend/assets/js/fontawesome.js') }}"></script>

    <script defer src="{{ asset('admin/assets/plugins/custom/formrepeater/formrepeater.bundle.js') }}"></script>
    <script defer src="{{ asset('admin/assets/plugins/custom/tinymce/tinymce.bundle.js') }}"></script>
    <script defer src="{{ asset('admin/assets/js/custom/account/settings/profile-details.js') }}"></script>
    <script defer src="{{ asset('admin/assets/js/custom/account/settings/deactivate-account.js') }}"></script>
    <script defer src="{{ asset('admin/assets/js/custom/apps/ecommerce/catalog/save-product.js') }}"></script>
    <script defer src="{{ asset('admin/assets/js/widgets.bundle.js') }}"></script>
    <script defer src="{{ asset('admin/assets/js/custom/widgets.js') }}"></script>
    <script defer src="{{ asset('admin/assets/js/custom/apps/chat/chat.js') }}"></script>
    <script defer src="{{ asset('admin/assets/js/custom/utilities/modals/create-account.js') }}"></script>
    <script defer src="{{ asset('admin/assets/js/custom/utilities/modals/create-app.js') }}"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/formvalidation@1.9.0/dist/js/FormValidation.min.js"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/formvalidation@1.9.0/dist/js/plugins/Bootstrap5.min.js"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/formvalidation@1.9.0/dist/js/plugins/Trigger.min.js"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/formvalidation@1.9.0/dist/js/plugins/SubmitButton.min.js"></script>
    <script defer src="https://cdnjs.cloudflare.com/ajax/libs/timepicker/1.3.5/jquery.timepicker.min.js"></script>

    <script defer src="{{ asset('admin/js/custom.js') }}"></script>

    <script>
        $(document).ready(function() {
            // DataTable Initialization
            class DataTableInitializer {
                constructor(selector) {
                    this.selector = selector;
                    this.init();
                }

                init() {
                    $(this.selector).DataTable({
                        "language": {
                            "lengthMenu": "Show _MENU_"
                        },
                        "dom": "<'row mb-2'<'col-sm-6 d-flex align-items-center justify-content-start dt-toolbar'l><'col-sm-6 d-flex align-items-center justify-content-end dt-toolbar'f>>" +
                            "<'table-responsive'tr>" +
                            "<'row'<'col-sm-12 col-md-5 d-flex align-items-center justify-content-center justify-content-md-start'i><'col-sm-12 col-md-7 d-flex align-items-center justify-content-center justify-content-md-end'p>>"
                    });
                }
            }
            new DataTableInitializer('.my-datatable');
        });
    </script>

    <script>
        // Handle Search Functionality for DataTables
        var KTDatatablesExample = function() {
            var table, datatable;
            var initDatatable = function() {
                const tableRows = table.querySelectorAll('tbody tr');
                tableRows.forEach(row => {
                    const dateRow = row.querySelectorAll('td');
                    const realDate = moment(dateRow[3].innerHTML, "DD MMM YYYY, LT").format();
                    dateRow[3].setAttribute('data-order', realDate);
                });

                datatable = $(table).DataTable({
                    "info": false,
                    'order': [],
                    'pageLength': 10
                });
            };

            var exportButtons = () => {
                const documentTitle = $('.document_title').html();
                new $.fn.dataTable.Buttons(table, {
                    buttons: [{
                            extend: 'copyHtml5',
                            title: documentTitle
                        },
                        {
                            extend: 'excelHtml5',
                            title: documentTitle
                        },
                        {
                            extend: 'csvHtml5',
                            title: documentTitle
                        },
                        {
                            extend: 'pdfHtml5',
                            title: documentTitle
                        }
                    ]
                }).container().appendTo($('#kt_datatable_example_buttons'));

                $('#kt_datatable_example_export_menu [data-kt-export]').on('click', function(e) {
                    e.preventDefault();
                    const exportValue = e.target.getAttribute('data-kt-export');
                    $(`.dt-buttons .buttons-${exportValue}`).click();
                });
            };

            var handleSearchDatatable = () => {
                $('[data-kt-filter="search"]').on('keyup', function(e) {
                    datatable.search(e.target.value).draw();
                });
            };

            return {
                init: function() {
                    table = document.querySelector('.datatable');
                    if (!table) return;

                    initDatatable();
                    exportButtons();
                    handleSearchDatatable();
                }
            };
        }();
        $(document).ready(function() {
            KTDatatablesExample.init();
        });
    </script>

    <script>
        $(document).ready(function() {
            // Radio Button Form Toggle
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
        document.querySelectorAll('.ckeditor').forEach(element => {
            if (!element.classList.contains('ck-editor__editable_inline')) {
                ClassicEditor.create(element).then(editor => {
                    console.log('CKEditor initialized:', editor);
                }).catch(error => {
                    console.error('CKEditor initialization error:', error);
                });
            }
        });
    </script>

    <script>
        // Preloader Timeout
        setTimeout(() => {
            const preloader = document.querySelector('.preloader');
            if (preloader) {
                preloader.classList.add('fade-out');
                setTimeout(() => {
                    preloader.style.display = 'none';
                }, 500);
            }
        }, 2000);
    </script>

    @stack('scripts')

</body>

</html>

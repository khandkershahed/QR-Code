<x-admin-app-layout :title="'Virtual Cards'">
    <div class="row">
        <div class="col-lg-12">
            <div class="card border-transparent mt-10" data-bs-theme="light" style="background-color: #1C325E;">
                <div class="card-body row ps-xl-15 align-items-center">
                    <div class="m-0 col-lg-9">
                        <div class="position-relative fs-2x z-index-2 fw-bold text-white mb-7">
                            <span class="me-2">
                                You have Created Total
                                <span class="position-relative d-inline-block text-danger">
                                    <a href="javascript:void(0)"
                                        class="text-danger opacity-75-hover">{{ $nfc_cards->count() }} VCard.</a>

                                    <span
                                        class="position-absolute opacity-50 bottom-0 start-0 border-4 border-danger border-bottom w-100"></span>
                                </span>
                            </span>
                        </div>

                        <div class="mb-3">
                            <a href="{{ route('admin.nfc-card.create') }}" class="btn btn-info fw-semibold me-2">
                                Order NFC <span class="svg-icon svg-icon-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" version="1.1"
                                        xmlns:xlink="http://www.w3.org/1999/xlink" width="512" height="512" x="0"
                                        y="0" viewBox="0 0 505.557 505.557" style="enable-background:new 0 0 512 512"
                                        xml:space="preserve" class="">
                                        <g>
                                            <path
                                                d="M453.769 68.778H51.788C23.232 68.778 0 92.011 0 120.566v188.125h97.061c8.284 0 15 6.716 15 15v113.087h341.708c28.556 0 51.788-23.232 51.788-51.788V120.566c0-28.555-23.233-51.788-51.788-51.788zm-118.913 142.26c-5.834-5.882-5.796-15.379.086-21.213s15.378-5.797 21.213.086c34.056 34.333 33.68 90.121-.839 124.361a14.955 14.955 0 0 1-10.563 4.351 14.945 14.945 0 0 1-10.649-4.437c-5.834-5.882-5.796-15.379.086-21.213 22.774-22.59 23.073-59.346.666-81.935zm34.442 118.587c43.251-42.901 43.792-112.733 1.206-155.666-5.834-5.882-5.796-15.379.086-21.213s15.378-5.795 21.213.086c54.235 54.678 53.617 143.541-1.378 198.092a14.955 14.955 0 0 1-10.563 4.351 14.945 14.945 0 0 1-10.649-4.437c-5.835-5.882-5.797-15.379.085-21.213zm-76.515-94.01c-5.834-5.882-5.796-15.379.086-21.213 5.881-5.834 15.379-5.794 21.213.086 20.719 20.889 20.502 54.816-.483 75.633a14.955 14.955 0 0 1-10.563 4.351 14.945 14.945 0 0 1-10.649-4.437c-5.834-5.882-5.796-15.379.086-21.213 9.24-9.167 9.38-24.063.31-33.207zM63.072 162.986c0-8.284 6.716-15 15-15h138.903c8.284 0 15 6.716 15 15s-6.716 15-15 15H78.072c-8.284 0-15-6.715-15-15zm20.706 73.412c-8.284 0-15-6.716-15-15s6.716-15 15-15h63.745c8.284 0 15 6.716 15 15s-6.716 15-15 15H83.778z"
                                                fill="#fff" opacity="1" data-original="#fff" class="">
                                            </path>
                                            <path
                                                d="M82.061 338.691H0v46.299c0 28.556 23.232 51.788 51.788 51.788H82.06v-98.087z"
                                                fill="#fff" opacity="1" data-original="#fff" class="">
                                            </path>
                                        </g>
                                    </svg>
                                </span>
                            </a>

                            <a href="{{ route('admin.barcode.create') }}"
                                class="btn btn-color-white bg-white bg-opacity-15 bg-hover-opacity-25 fw-semibold">
                                Create Barcode <span class="svg-icon svg-icon-2 pt-5">
                                    <svg xmlns="http://www.w3.org/2000/svg" version="1.1"
                                        xmlns:xlink="http://www.w3.org/1999/xlink" width="512" height="512" x="0"
                                        y="0" viewBox="0 0 426.667 426" style="enable-background:new 0 0 512 512"
                                        xml:space="preserve" class="">
                                        <g>
                                            <path
                                                d="M74.668.332h-64C4.778.332 0 5.109 0 11v64c0 5.89 4.777 10.668 10.668 10.668S21.332 80.891 21.332 75V21.668h53.336c5.89 0 10.664-4.777 10.664-10.668S80.559.332 74.668.332zM74.668 320.332H21.332V267c0-5.89-4.773-10.668-10.664-10.668S0 261.109 0 267v64c0 5.89 4.777 10.668 10.668 10.668h64c5.89 0 10.664-4.777 10.664-10.668s-4.773-10.668-10.664-10.668zM416 .332h-64c-5.89 0-10.668 4.777-10.668 10.668S346.109 21.668 352 21.668h53.332V75c0 5.89 4.777 10.668 10.668 10.668S426.668 80.891 426.668 75V11c0-5.89-4.777-10.668-10.668-10.668zM416 256.332c-5.89 0-10.668 4.777-10.668 10.668v53.332H352c-5.89 0-10.668 4.777-10.668 10.668s4.777 10.668 10.668 10.668h64c5.89 0 10.668-4.777 10.668-10.668v-64c0-5.89-4.777-10.668-10.668-10.668zM74.668 64.332C68.778 64.332 64 69.109 64 75v192c0 5.89 4.777 10.668 10.668 10.668S85.332 272.891 85.332 267V75c0-5.89-4.773-10.668-10.664-10.668zM117.332 64.332h21.336c5.89 0 10.664 4.777 10.664 10.668v192c0 5.89-4.773 10.668-10.664 10.668h-21.336c-5.89 0-10.664-4.777-10.664-10.668V75c0-5.89 4.773-10.668 10.664-10.668zM181.332 64.332c-5.89 0-10.664 4.777-10.664 10.668v192c0 5.89 4.773 10.668 10.664 10.668S192 272.891 192 267V75c0-5.89-4.777-10.668-10.668-10.668zM224 64.332h21.332C251.222 64.332 256 69.109 256 75v192c0 5.89-4.777 10.668-10.668 10.668H224c-5.89 0-10.668-4.777-10.668-10.668V75c0-5.89 4.777-10.668 10.668-10.668zM288 64.332c-5.89 0-10.668 4.777-10.668 10.668v192c0 5.89 4.777 10.668 10.668 10.668s10.668-4.777 10.668-10.668V75c0-5.89-4.777-10.668-10.668-10.668zM330.668 64.332H352c5.89 0 10.668 4.777 10.668 10.668v192c0 5.89-4.777 10.668-10.668 10.668h-21.332c-5.89 0-10.668-4.777-10.668-10.668V75c0-5.89 4.777-10.668 10.668-10.668zm0 0"
                                                fill="#fff" opacity="1" data-original="#fff" class="">
                                            </path>
                                        </g>
                                    </svg>
                                </span>
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-3">
                        <div class="">
                            <div class="d-flex align-items-center justify-content-end ">
                                <a href="{{ route('admin.virtual-card.create') }}"
                                    class="btn btn-info shadow-sm w-100 pulse fs-3 d-flex justify-content-center align-items-center pulse pulse-warning">
                                    <span class="pulse-ring"></span>
                                    <span class="pe-2 text-white">Create VCard</span>
                                    <span>
                                        <svg xmlns="http://www.w3.org/2000/svg" version="1.1"
                                            xmlns:xlink="http://www.w3.org/1999/xlink" width="50" height="50"
                                            x="0" y="0" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512"
                                            xml:space="preserve" class="">
                                            <g>
                                                <path fill="#707afa"
                                                    d="M481.918 479.89H30.086V182.856c0-9.035 7.324-16.355 16.355-16.355H465.56c9.035 0 16.359 7.32 16.359 16.355zm0 0"
                                                    opacity="1" data-original="#707afa"></path>
                                                <path fill="#a1f1fc"
                                                    d="M56.559 453.418v-252.75a7.695 7.695 0 0 1 7.695-7.695H447.75a7.694 7.694 0 0 1 7.691 7.695v252.75zm0 0"
                                                    opacity="1" data-original="#a1f1fc"></path>
                                                <path fill="#6770e6"
                                                    d="M494.637 512H17.363C7.773 512 0 504.227 0 494.637V483.09c0-1.77 1.434-3.2 3.195-3.2h505.606a3.2 3.2 0 0 1 3.199 3.2v11.547c0 9.59-7.773 17.363-17.363 17.363zm0 0"
                                                    opacity="1" data-original="#6770e6"></path>
                                                <path fill="#5861c7"
                                                    d="M510.895 480.691C508.437 487.29 502.094 492 494.637 492H17.363c-7.46 0-13.8-4.71-16.258-11.309A3.174 3.174 0 0 0 0 483.09v11.55C0 504.228 7.773 512 17.363 512h477.274c9.59 0 17.363-7.773 17.363-17.363V483.09c0-.961-.434-1.813-1.105-2.399zm0 0"
                                                    opacity="1" data-original="#5861c7"></path>
                                                <path fill="#4e56b0"
                                                    d="M325.32 495.945H186.68a8.68 8.68 0 0 1-8.68-8.68v-7.37h156v7.37a8.68 8.68 0 0 1-8.68 8.68zm0 0"
                                                    opacity="1" data-original="#4e56b0"></path>
                                                <path fill="#fff7f2"
                                                    d="M388.184 0H123.816c-10.453 0-18.925 8.473-18.925 18.926V454h302.218V18.926C407.11 8.473 398.637 0 388.184 0zm0 0"
                                                    opacity="1" data-original="#fff7f2" class=""></path>
                                                <path fill="#ff8354" d="M104.89 341.16H408V454H104.89zm0 0"
                                                    opacity="1" data-original="#ff8354"></path>
                                                <path fill="#ffdccf" d="M104.89 40h302.22v144H104.89zm0 0"
                                                    opacity="1" data-original="#ffdccf" class=""></path>
                                                <path fill="#69ebfc" d="M128.988 215.156h75.578v59.797h-75.578zm0 0"
                                                    opacity="1" data-original="#69ebfc"></path>
                                                <path fill="#d476e2" d="M218.66 215.156h75.574v59.797H218.66zm0 0"
                                                    opacity="1" data-original="#d476e2" class=""></path>
                                                <path fill="#6770e6" d="M308.328 215.156h75.574v59.797h-75.574zm0 0"
                                                    opacity="1" data-original="#6770e6"></path>
                                                <path fill="#ffac8c"
                                                    d="M196.234 297.613h-58.918a4.995 4.995 0 0 1 0-9.988h58.918a4.992 4.992 0 0 1 4.996 4.992 4.998 4.998 0 0 1-4.996 4.996zm0 0"
                                                    opacity="1" data-original="#ffac8c"></path>
                                                <path fill="#edd4c2"
                                                    d="M188.238 315.605h-42.922a4.995 4.995 0 0 1 0-9.988h42.922a4.995 4.995 0 0 1 0 9.988zM277.906 315.605h-42.922a4.995 4.995 0 0 1 0-9.988h42.922a4.995 4.995 0 0 1 0 9.988zM367.578 315.605h-42.922a4.995 4.995 0 0 1 0-9.988h42.922a4.991 4.991 0 0 1 4.992 4.992 5 5 0 0 1-4.992 4.996zm0 0"
                                                    opacity="1" data-original="#edd4c2"></path>
                                                <path fill="#ffac8c"
                                                    d="M285.902 297.613h-58.918a4.995 4.995 0 0 1 0-9.988h58.918a4.992 4.992 0 0 1 4.996 4.992 4.995 4.995 0 0 1-4.996 4.996zM375.574 297.613h-58.918a4.995 4.995 0 0 1 0-9.988h58.918a4.995 4.995 0 0 1 0 9.988zM314.668 377.406H198.223a4.991 4.991 0 0 1-4.993-4.992 4.992 4.992 0 0 1 4.993-4.996h116.449a4.995 4.995 0 0 1-.004 9.988zm0 0"
                                                    opacity="1" data-original="#ffac8c"></path>
                                                <path fill="#fff7f2"
                                                    d="M289.07 427.738H157.438c-5.149 0-9.32-4.172-9.32-9.316 0-5.149 4.175-9.32 9.32-9.32H289.07a9.32 9.32 0 1 1 0 18.636zm0 0"
                                                    opacity="1" data-original="#fff7f2" class=""></path>
                                                <path fill="#ffac8c"
                                                    d="M355.453 427.738h-39.035c-5.148 0-9.32-4.172-9.32-9.316 0-5.149 4.175-9.32 9.32-9.32h39.035a9.32 9.32 0 1 1 0 18.636zM285.902 395.04h-58.918a4.995 4.995 0 0 1 0-9.99h58.918a4.992 4.992 0 0 1 4.996 4.993 4.993 4.993 0 0 1-4.996 4.996zm0 0"
                                                    opacity="1" data-original="#ffac8c"></path>
                                                <path fill="#ff8354"
                                                    d="M104.89 18.926V40h302.22V18.926C407.11 8.473 398.636 0 388.183 0H123.816c-10.453 0-18.925 8.473-18.925 18.926zm0 0"
                                                    opacity="1" data-original="#ff8354"></path>
                                                <path fill="#ffac8c"
                                                    d="M388.184 0H123.816c-10.453 0-18.925 8.473-18.925 18.926v20c0-10.453 8.472-18.926 18.925-18.926h264.368c10.453 0 18.925 8.473 18.925 18.926v-20C407.11 8.473 398.637 0 388.184 0zm0 0"
                                                    opacity="1" data-original="#ffac8c"></path>
                                                <path fill="#ff8354"
                                                    d="M237.453 106.582c0 23.746-19.254 43-43 43-23.75 0-43-19.254-43-43 0-23.75 19.25-43 43-43 23.746 0 43 19.25 43 43zm0 0"
                                                    opacity="1" data-original="#ff8354"></path>
                                                <path fill="#69ebfc"
                                                    d="M257.453 138.582c0 11.598-9.402 21-21 21s-21-9.402-21-21c0-11.602 9.402-21 21-21s21 9.398 21 21zm0 0"
                                                    opacity="1" data-original="#69ebfc"></path>
                                                <path fill="#ffac8c"
                                                    d="M336.902 151.871h-53.035c-5.148 0-9.32-4.176-9.32-9.32 0-5.149 4.176-9.32 9.32-9.32h53.035a9.32 9.32 0 0 1 9.32 9.32c.005 5.148-4.171 9.32-9.32 9.32zm0 0"
                                                    opacity="1" data-original="#ffac8c"></path>
                                                <g fill="#fff7f2">
                                                    <path
                                                        d="M350.09 81.43h-70.895a4.65 4.65 0 0 1 0-9.297h70.895a4.646 4.646 0 0 1 4.644 4.648 4.644 4.644 0 0 1-4.644 4.649zM315.223 101.184h-36.028a4.65 4.65 0 0 1 0-9.297h36.028c2.57 0 4.648 2.082 4.648 4.648s-2.078 4.649-4.648 4.649zM355.898 101.184h-24.402a4.65 4.65 0 0 1 0-9.297h24.402c2.57 0 4.649 2.082 4.649 4.648s-2.082 4.649-4.649 4.649zM338.469 120.941h-59.27a4.647 4.647 0 0 1-4.648-4.648 4.647 4.647 0 0 1 4.648-4.648h59.27a4.65 4.65 0 0 1 0 9.296zm0 0"
                                                        fill="#fff7f2" opacity="1" data-original="#fff7f2"
                                                        class=""></path>
                                                </g>
                                                <path fill="#d476e2"
                                                    d="M196 414c0 54.125-43.875 98-98 98S0 468.125 0 414s43.875-98 98-98 98 43.875 98 98zm0 0"
                                                    opacity="1" data-original="#d476e2" class=""></path>
                                                <path fill="#b665c2"
                                                    d="M98.176 502c-52.512.094-95.45-41.137-98.047-93.023A99.756 99.756 0 0 0 0 414.176c.098 54.12 44.05 97.922 98.176 97.824 54.12-.098 97.922-44.05 97.824-98.176 0-1.61-.05-3.207-.129-4.8-2.61 51.71-45.316 92.882-97.695 92.976zm0 0"
                                                    opacity="1" data-original="#b665c2"></path>
                                                <path fill="#fff7f2"
                                                    d="m98 355-46 44v66h31v-29c0-8.285 6.715-15 15-15s15 6.715 15 15v29h31v-66zM196.234 24.992h-58.918c-2.757 0-4.992-2.234-4.992-4.992s2.235-4.992 4.992-4.992h58.918a4.992 4.992 0 1 1 0 9.984zm0 0"
                                                    opacity="1" data-original="#fff7f2" class=""></path>
                                            </g>
                                        </svg>
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @include('nfc.nfc_index_partial')
    </div>



    {{-- @push('scripts')
        <script>
            "use strict";

            // Class definition
            var KTDatatablesExample = function() {
                // Shared variables
                var table;
                var datatable;

                // Private functions
                var initDatatable = function() {
                    // Check if the DataTable is already initialized
                    if ($.fn.DataTable.isDataTable(table)) {
                        // Destroy the existing instance
                        $(table).DataTable().destroy();
                    }

                    // Set date data order
                    const tableRows = table.querySelectorAll('tbody tr');

                    tableRows.forEach(row => {
                        const dateRow = row.querySelectorAll('td');
                        const realDate = moment(dateRow[3].innerHTML, "DD MMM YYYY, LT")
                            .format(); // select date from 4th column in table
                        dateRow[3].setAttribute('data-order', realDate);
                    });

                    // Init datatable --- more info on datatables: https://datatables.net/manual/
                    datatable = $(table).DataTable({
                        "info": false,
                        'order': [],
                        'pageLength': 10,
                    });
                }

                // Search Datatable --- official docs reference: https://datatables.net/reference/api/search()
                var handleSearchDatatable = () => {
                    const filterSearch = document.querySelector('[data-kt-filter="search"]');
                    filterSearch.addEventListener('keyup', function(e) {
                        datatable.search(e.target.value).draw();
                    });
                }

                // Public methods
                return {
                    init: function() {
                        table = document.querySelector('#nfc_card_admin_admin');

                        if (!table) {
                            return;
                        }

                        initDatatable();
                        exportButtons();
                        handleSearchDatatable();
                    }
                };
            }();

            // On document ready
            KTUtil.onDOMContentLoaded(function() {
                KTDatatablesExample.init();
            });
        </script>
    @endpush --}}

</x-admin-app-layout>

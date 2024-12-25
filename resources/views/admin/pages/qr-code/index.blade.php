<x-admin-app-layout :title="'QR Code Management - Admin Panel'">
    <style>
        table.dataTable>thead .sorting:after,
        table.dataTable>thead .sorting_asc:after,
        table.dataTable>thead .sorting_asc_disabled:after,
        table.dataTable>thead .sorting_desc:after,
        table.dataTable>thead .sorting_desc_disabled:after {
            right: 0px;
            content: "↑";
            top: 0px !important;
        }
    </style>
    <div class="row">
        <div class="col-lg-12">
            <div class="card border-transparent mt-10" data-bs-theme="light" style="background-color: #1C325E;">
                <div class="card-body row ps-xl-15 align-items-center">
                    <div class="m-0 col-lg-9">
                        <div class="position-relative fs-2x z-index-2 fw-bold text-white mb-7">
                            <span class="me-2">
                                You have Created Total
                                <span class="position-relative d-inline-block text-danger">
                                    <a href="javascript:void(0)" class="text-danger opacity-75-hover">
                                        {{ $qrs->count() }} Barcode.</a>

                                    <span
                                        class="position-absolute opacity-50 bottom-0 start-0 border-4 border-danger border-bottom w-100"></span>
                                </span>
                            </span>
                        </div>

                        <div class="mb-3">
                            <a href="{{ route('admin.nfc-card.create') }}" class="btn btn-info fw-semibold me-2">
                                Create NFC <span class="svg-icon svg-icon-2">
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

                            <a href="{{ route('admin.virtual-card.create') }}"
                                class="btn btn-color-white bg-white bg-opacity-15 bg-hover-opacity-25 fw-semibold">
                                Create NFC <span class="svg-icon svg-icon-2 pt-5">
                                    <svg xmlns="http://www.w3.org/2000/svg" version="1.1"
                                        xmlns:xlink="http://www.w3.org/1999/xlink" width="20" height="20" x="0"
                                        y="0" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512"
                                        xml:space="preserve" class="">
                                        <g>
                                            <path
                                                d="M30 30h90V0H0v120h30zM392 0v30h90v90h30V0zM482 482h-90v30h120V392h-30zM30 392H0v120h120v-30H30zm0 0"
                                                fill="#fff" opacity="1" data-original="#000000" class="">
                                            </path>
                                            <path
                                                d="M61 60v150h150v-90h30V90h-30V60zm120 120H91V90h90zM451 450V300h-60v-30h-30v30h-90v30h30v30h-30v30h30v60zM331 330h90v90h-90zM151 270h60v-30H61v30h60v30H91v30h30v60H91v30h30v30h150v-30h-30v-30h-30v30h-60v-30h30v-30h-30zm0 0"
                                                fill="#fff" opacity="1" data-original="#000000" class="">
                                            </path>
                                            <path d="M121 120h30v30h-30zM361 120h30v30h-30zm0 0" fill="#000000"
                                                opacity="1" data-original="#000000" class=""></path>
                                            <path
                                                d="M391 210h60V60H301v150h60v30h30zm-60-30V90h90v90zM451 270v-30h-60v30zM361 360h30v30h-30zM241 330h30v30h-30zM181 360h30v-60h-30zM211 270h30v30h-30zM91 330H61v60h30v-60zM61 420h30v30H61zM241 60h30v30h-30zM241 180h30v-60h-30zM271 240v-30h-30v60h120v-30zm0 0"
                                                fill="#fff" opacity="1" data-original="#000000" class="">
                                            </path>
                                        </g>
                                    </svg>
                                </span>
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-3">
                        <div class="">
                            <div class="d-flex align-items-center justify-content-end">
                                <a href="{{ route('admin.qr-code.create') }}"
                                    class="btn btn-info shadow-sm w-100 pulse fs-3 d-flex justify-content-center align-items-center pulse pulse-warning">
                                    <span class="pulse-ring"></span>
                                    <span class="pe-2 text-white">Create QR Code</span>
                                    <span>
                                        <svg xmlns="http://www.w3.org/2000/svg" version="1.1"
                                            xmlns:xlink="http://www.w3.org/1999/xlink" width="20" height="20"
                                            x="0" y="0" viewBox="0 0 426.667 426"
                                            style="enable-background:new 0 0 512 512" xml:space="preserve"
                                            class="">
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
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-12">
            <div class="card my-10 rounded-0">
                <div class="card-header p-5 align-items-center rounded-0 bg-info m-0">
                    <div>
                        <h1 class="mb-0 mt-0 card-title fs-2 text-white">All QR Code!</h1>
                        <p class="text-white mt-2 mb-0">View and manage all QR code information in this page.</p>
                    </div>
                </div>
                <div class="card-body p-0 rounded-0">
                    <table class="table my-datatable table-striped table-row-bordered mt-0">
                        <thead>
                            <tr class="text-start bg-info text-white fw-bolder fs-7 text-uppercase gs-0">
                                <th width="5%">SL</th>
                                <th width="10%" class="text-center">Image</th>
                                <th width="25%">Content</th>
                                <th width="10%" class="text-center">Author</th>
                                <th width="10%" class="text-center">Type</th>
                                <th width="10%" class="text-center">Scaned & Summary</th>
                                <th width="10%" class="text-center">Status</th>
                                <th width="10%" class="text-end pe-15">Action</th>
                            </tr>
                        </thead>
                        <tbody class="text-gray-600 fw-bold" style="vertical-align: middle;">
                            @foreach ($qrs as $qr)
                                <tr>
                                    <td class="text-center">
                                        {{ $loop->iteration }}
                                    </td>
                                    <td class="text-center">
                                        <img class="img-fluid w-50px" src="{{ $qr->qr_png_url }}" alt="">
                                    </td>
                                    <td class="text-start">
                                        {{-- title --}}
                                        <span>
                                            <span class="fw-bold text-black">
                                                Title :
                                            </span>
                                            {{ $qr->qr_name }}
                                        </span>
                                        <br>
                                        <span>
                                            <span class="fw-bold text-black">
                                                Link :
                                            </span>
                                            <a class="text-primary" href="javascript:void(0)" data-bs-toggle="modal"
                                                data-bs-target="#image-{{ $qr->id }}">
                                                Go to Link
                                            </a>
                                        </span>
                                        <br>
                                        <span>
                                            <span class="fw-bold text-black">
                                                Org :
                                            </span>
                                            {{ $qr->qr_name }}
                                        </span>
                                        <br>
                                        <span>
                                            <p class="mb-0">Create: {{ $qr->created_at->format('d F Y') }}</p>
                                            <br>
                                            <div class="modal fade" id="image-{{ $qr->id }}" tabindex="-1"
                                                data-bs-backdrop="static" data-bs-keyboard="false" role="dialog"
                                                aria-labelledby="modalTitleId" aria-hidden="true">
                                                <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-md"
                                                    role="document">

                                                    <div class="modal-content">
                                                        <div class="modal-header bg-primary py-3">
                                                            <h5 class="modal-title text-white" id="modalTitleId">
                                                                Scan Generated QR
                                                            </h5>
                                                            <button type="button" class="btn-close"
                                                                data-bs-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <div class="row">
                                                                <div class="col-lg-8 offset-lg-2 mx-auto">
                                                                    <div>
                                                                        <img class="img-fluid"
                                                                            src="{{ $qr->qr_png_url }}"
                                                                            alt="">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </span>
                                    </td>
                                    <td class="text-center">
                                        {{ optional($qr->user)->name }}
                                    </td>
                                    <td class="text-center">
                                        <span class="badge badge-info">{{ ucfirst($qr->qr_type) }}</span>
                                    </td>
                                    <td class="text-center">
                                        <a href="{{ route('admin.qr.summary', $qr->code) }}"
                                            class="btn btn-light-primary border">
                                            <div class="d-flex align-items-center">
                                                <span class="pt-1 pe-1"> {{ $qr->qrScan->count() }}</span>
                                                <span><i class="fa-solid fa-arrow-up-right-from-square"></i></span>
                                            </div>
                                        </a>
                                    </td>
                                    <td class="text-center">
                                        <div class="badge badge-light-success">Active</div>
                                    </td>
                                    <td class="text-end pe-15">
                                        <div class="dropdown">
                                            <button class="btn btn-light-danger dropdown-toggle" type="button"
                                                id="dropdownMenuButton1" data-bs-toggle="dropdown"
                                                aria-expanded="false">
                                                Actions
                                            </button>
                                            <ul class="dropdown-menu mt-0 pt-0 rounded-0"
                                                aria-labelledby="dropdownMenuButton1">
                                                <li class="text-muted">
                                                    <a href="{{ route('admin.qr-code.edit', $qr->code) }}"
                                                        class="menu-link px-3 delete dropdown-item">
                                                        <i class="fa-solid fa-pen pe-2"></i> Edit
                                                    </a>
                                                </li>
                                                <li class="text-muted">
                                                    <a href="{{ route('admin.qr-code.destroy', $qr->id) }}"
                                                        class="menu-link px-3 delete dropdown-item">
                                                        <i class="fa-solid fa-trash pe-2"></i> Delete
                                                    </a>
                                                </li>
                                                @if (!empty($bar_code->bar_code_pdf))
                                                    <li class="text-muted">
                                                        <a href="{{ asset($bar_code->bar_code_pdf) }}" download
                                                            data-kt-docs-table-filter="edit_row"
                                                            class="menu-link px-3 dropdown-item">
                                                            <i class="fa-solid fa-file-pdf pe-2"></i> PDF
                                                        </a>
                                                    </li>
                                                @endif
                                                <li class="text-muted">
                                                    <a href="javascript:void(0)" data-kt-menu-trigger="click"
                                                        data-kt-menu-placement="bottom-end"
                                                        data-kt-menu-flip="top-end"
                                                        class="menu-link px-3 dropdown-item">
                                                        <i class="fa-solid fa-cloud-arrow-down pe-2"></i> Download
                                                    </a>
                                                </li>
                                                @if (!empty($qr->qr_png))
                                                    <li class="text-muted">
                                                        <a href="{{ $qr->qr_png_url }}" download
                                                            data-kt-docs-table-filter="edit_row"
                                                            class="menu-link px-3 dropdown-item">
                                                            <i class="fa-solid fa-cloud-arrow-down pe-2"></i> PNG
                                                        </a>
                                                    </li>
                                                @endif
                                                @if (!empty($qr->qr_svg))
                                                    <li class="text-muted">
                                                        <a href="{{ $qr->qr_svg_url }}" download
                                                            data-kt-docs-table-filter="edit_row"
                                                            class="menu-link px-3 dropdown-item">
                                                            <i class="fa-solid fa-cloud-arrow-down pe-2"></i> SVG
                                                        </a>
                                                    </li>
                                                @endif
                                                @if (!empty($qr->qr_eps))
                                                    <li class="text-muted">
                                                        <a href="{{ $qr->qr_eps_url }}" download
                                                            data-kt-docs-table-filter="edit_row"
                                                            class="menu-link px-3 dropdown-item">
                                                            <i class="fa-solid fa-cloud-arrow-down pe-2"></i> EPS
                                                        </a>
                                                    </li>
                                                @endif
                                                @if (!empty($qr->qr_jpg))
                                                    <li class="text-muted">
                                                        <a href="{{ $qr->qr_jpg_url }}" download
                                                            data-kt-docs-table-filter="edit_row"
                                                            class="menu-link px-3 dropdown-item">
                                                            <i class="fa-solid fa-cloud-arrow-down pe-2"></i> JPG
                                                        </a>
                                                    </li>
                                                @endif
                                                @if (!empty($qr->qr_pdf))
                                                    <li class="text-muted">
                                                        <a href="{{ $qr->qr_pdf_url }}" download
                                                            data-kt-docs-table-filter="edit_row"
                                                            class="menu-link px-3 dropdown-item">
                                                            <i class="fa-solid fa-cloud-arrow-down pe-2"></i> PDF
                                                        </a>
                                                    </li>
                                                @endif
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-admin-app-layout>

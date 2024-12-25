<x-app-layout :title="'QR Code List - User Panel'">
    <div class="row">
        <div class="col-lg-12">
            <div class="card my-10 rounded-0">
                <div class="card-header p-5 align-items-center rounded-0 bg-info m-0">
                    <div>
                        <h1 class="mb-0 mt-0 card-title fs-2 text-white">All QR List!</h1>
                        <div class="text-white fw-bold d-flex  pt-2">
                            @if (!empty($subscription->plan))
                                <strong class="mb-2"> Total Created QR: {{ $qrs->count() }} <span
                                        class="text-warning">/</span> QR Limitation:
                                    {{ $subscription->plan->qr }} <span class="text-warning">/</span> QR Remaining:
                                    {{ $subscription->plan->qr - $qrs->count() }} <span
                                        class="text-warning">/</span>Total Created QR: {{ $qrs->count() }}
                                </strong>
                            @else
                                <strong class="mb-2">Total Created QR: {{ $qrs->count() }} <span
                                        class="text-warning">/</span>
                                    QR Limitation: 10 (Trial Period) <span class="text-warning">/</span> QR Remaining:
                                    {{ 10 - $qrs->count() }}</strong>
                            @endif
                        </div>
                    </div>
                    <div>
                        @if (!empty($subscription->plan))
                            @if ($subscription->plan->qr - $qrs->count() > 0)
                                <a href="{{ route('user.qr-code.create') }}"
                                    class="btn btn-white btn-active-light-warning text-hover-inverse-white">
                                    <i class="fa-solid fa-user-plus me-2"></i> Create QR Codes
                                </a>
                            @endif
                        @else
                            @if (10 - $qrs->count() > 0)
                                <a href="{{ route('user.qr-code.create') }}"
                                    class="btn btn-white btn-active-light-warning text-hover-inverse-white">
                                    <i class="fa-solid fa-user-plus me-2"></i> Create QR Codes
                                </a>
                            @endif
                        @endif
                    </div>
                </div>
                <div class="card-body p-0 rounded-0">
                    <table class="table my-datatable table-striped table-row-bordered my-0">
                        <thead>
                            <tr class="text-start bg-info text-white fw-bolder fs-7 text-uppercase gs-0">
                                <th width="5%" class="text-center">SL</th>
                                <th width="10%">Image</th>
                                <th width="40%">Content</th>
                                <th width="15%">Type</th>
                                <th width="10%">Scaned</th>
                                <th width="10%">Status</th>
                                <th width="10%" class="text-end pe-15">Action</th>
                            </tr>
                        </thead>
                        <tbody class="fw-semibold text-gray-600" style="vertical-align: middle">
                            @foreach ($qrs as $qr)
                                <tr>
                                    <td class="text-center">
                                        {{ $loop->iteration }}
                                    </td>
                                    <td>
                                        <img class="img-fluid w-50px" src="{{ $qr->qr_png_url }}" alt="">
                                    </td>
                                    <td data-order="2022-03-10T14:40:00+05:00">
                                        {{-- title --}}
                                        <span><span class="fw-bold text-black">Title :
                                            </span>{{ $qr->qr_name }}</span><br>
                                        <span><span class="fw-bold text-black">Link :
                                            </span><a class="text-primary" href="javascript:void(0)"
                                                data-bs-toggle="modal" data-bs-target="#image-{{ $qr->id }}">Go
                                                to
                                                Link</a></span><br>
                                        <span><span class="fw-bold text-black">Org :
                                            </span>{{ Auth::user()->name }}</span><br>
                                        <span><span class="fw-bold text-black">Created at
                                                :</span>:{{ $qr->created_at }}</span><br>
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
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                            aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <div class="row">
                                                            <div class="col-lg-8 offset-lg-2 mx-auto">
                                                                <div>
                                                                    <img class="img-fluid" src="{{ $qr->qr_png_url }}"
                                                                        alt="">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-start">
                                        <button class="btn btn-light-primary">{{ ucfirst($qr->qr_type) }}</button>
                                    </td>
                                    <td class="text-start">
                                        <a href="{{ route('user.qr.summary', $qr->code) }}"
                                            class="btn btn-light-primary">{{ $qr->qrScan->count() }}</a>
                                    </td>
                                    <td>
                                        <div class="badge badge-light-success">Active</div>
                                    </td>
                                    <td class="text-end ">
                                        <div class="dropdown">
                                            <button class="btn btn-light-danger dropdown-toggle" type="button"
                                                id="dropdownMenuButton1" data-bs-toggle="dropdown"
                                                aria-expanded="false">
                                                Actions
                                            </button>
                                            <ul class="dropdown-menu mt-0 pt-0 rounded-0"
                                                aria-labelledby="dropdownMenuButton1">
                                                <li class="text-muted">
                                                    <a href="{{ route('user.qr-code.edit', $qr->code) }}"
                                                        class="menu-link px-3 dropdown-item">
                                                        <i class="fa-solid fa-pen pe-2"></i> Edit
                                                    </a>
                                                </li>
                                                <li class="text-muted">
                                                    <a href="{{ route('user.qr-code.edit', $qr->code) }}"
                                                        data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end"
                                                        data-kt-menu-flip="top-end"
                                                        class="menu-link px-3 dropdown-item">
                                                        <i class="fa-solid fa-cloud-arrow-down pe-2"></i> Download
                                                    </a>
                                                </li>
                                                @if (!empty($qr->qr_png))
                                                    <li class="text-muted">
                                                        <a href="{{ $qr->qr_png_url }}"
                                                            class="menu-link px-3 dropdown-item" download
                                                            data-kt-docs-table-filter="edit_row">
                                                            <i class="fa-solid fa-cloud-arrow-down pe-2"></i> PNG
                                                        </a>
                                                    </li>
                                                @endif
                                                @if (!empty($qr->qr_svg))
                                                    <li class="text-muted">
                                                        <a href="{{ $qr->qr_svg_url }}"
                                                            class="menu-link px-3 dropdown-item" download
                                                            data-kt-docs-table-filter="edit_row">
                                                            <i class="fa-solid fa-cloud-arrow-down pe-2"></i> SVG
                                                        </a>
                                                    </li>
                                                @endif
                                                @if (!empty($qr->qr_eps))
                                                    <li class="text-muted">
                                                        <a href="{{ $qr->qr_eps_url }}"
                                                            class="menu-link px-3 dropdown-item" download
                                                            data-kt-docs-table-filter="edit_row">
                                                            <i class="fa-solid fa-cloud-arrow-down pe-2"></i> EPS
                                                        </a>
                                                    </li>
                                                @endif
                                                @if (!empty($qr->qr_jpg))
                                                    <li class="text-muted">
                                                        <a href="{{ $qr->qr_jpg_url }}"
                                                            class="menu-link px-3 dropdown-item" download
                                                            data-kt-docs-table-filter="edit_row">
                                                            <i class="fa-solid fa-cloud-arrow-down pe-2"></i> JPG
                                                        </a>
                                                    </li>
                                                @endif
                                                @if (!empty($qr->qr_pdf))
                                                    <li class="text-muted">
                                                        <a href="{{ $qr->qr_pdf_url }}"
                                                            class="menu-link px-3 dropdown-item" download
                                                            data-kt-docs-table-filter="edit_row">
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
    @push('scripts')
        <script>
            class DataTableInitializer {
                constructor(selector) {
                    this.selector = selector;
                    this.init();
                }

                init() {
                    $(this.selector).DataTable({
                        "language": {
                            "lengthMenu": "Show _MENU_",
                        },
                        "dom": "<'row mb-2'" +
                            "<'col-sm-6 d-flex align-items-center justify-content-start dt-toolbar'l>" +
                            "<'col-sm-6 d-flex align-items-center justify-content-end dt-toolbar'f>" +
                            ">" +
                            "<'table-responsive'tr>" +
                            "<'row'" +
                            "<'col-sm-12 col-md-5 d-flex align-items-center justify-content-center justify-content-md-start'i>" +
                            "<'col-sm-12 col-md-7 d-flex align-items-center justify-content-center justify-content-md-end'p>" +
                            ">"
                    });
                }
            }

            // Initialize DataTables for elements with class 'my-datatable'
            $(document).ready(function() {
                new DataTableInitializer('.my-datatable');
            });
        </script>
    @endpush
</x-app-layout>

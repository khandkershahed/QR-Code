<div class="col-lg-12 mt-5 pb-10">
    <div class="card my-5 rounded-0">
        <div class="card-header p-5 align-items-center rounded-0 bg-info m-0">
            <div>
                <h1 class="mb-0 mt-0 card-title fs-2 text-white">All Your NFC!</h1>
                <p class="text-white mt-2 mb-0">View and manage all NFC information in this page.</p>
            </div>
        </div>

        <div class="card-body p-0 px-3 rounded-0">
            <div class="table-responsive">
                <table class="table my-datatable table-striped table-row-bordered mt-0">
                    <thead>
                        <tr class="bg-info text-white fw-bolder fs-7 text-uppercase gs-0">
                            <th width="5%" class="text-center">SL</th>
                            <th width="10%" class="text-center">Date</th>
                            <th width="10%" class="text-center">Logo</th>
                            <th width="10%" class="text-center">Card Type</th>
                            <th width="20%" class="text-center">Name</th>
                            <th width="15%" class="text-center">VCard Profile</th>
                            <th width="10%" class="text-center">Delivery</th>
                            <th width="15%" class="text-end pe-15">Action</th>
                        </tr>
                    </thead>
                    <tbody class="fw-semibold text-gray-600 text-center" style="vertical-align: middle">
                        @foreach ($nfc_cards as $nfc_card)
                            <tr>
                                <td class="text-center">
                                    {{ $loop->iteration }}
                                </td>
                                <td class="text-center">
                                    {{ optional($nfc_card)->created_at->format('d M, Y') }}
                                </td>
                                <td>
                                    <img src="{{ asset('storage/'.optional($nfc_card)->card_logo) }}" width="50px" alt="">
                                </td>
                                <td>
                                    {{ ucfirst(optional($nfc_card)->card_preference) }}
                                </td>
                                <td>
                                    {{ optional($nfc_card)->card_name }}
                                </td>
                                <td class="text-center">
                                    @if (!empty(optional($nfc_card)->nfc_url))
                                        <a href="{{ optional($nfc_card->nfc)->nfc_url }}" class="text-primary">
                                            <span class="badge badge-light-warning text-info p-2 px-3">
                                                <i class="fas fa-eye text-info pe-2"></i>
                                                Preview
                                            </span>
                                        </a>
                                    @else
                                        <a href="{{ route('user.virtual-card.create') }}" target="_blank"
                                            class="text-primary">
                                            <span class="badge badge-light-success text-info p-2 px-3">
                                                Create
                                                <i class="fas fa-link ps-2"></i>
                                            </span>
                                        </a>
                                    @endif
                                </td>

                                <td class="text-center">
                                    <a href="javascript:void(0)" data-bs-toggle="modal"
                                        data-bs-target="#shipping_address_modal_{{ $nfc_card->id }}"
                                        class="text-primary">
                                        <span class="badge bg-info p-2 px-3">
                                            Shipping</span>
                                    </a>
                                </td>
                                <td class="text-end pe-5">
                                    {{-- <a href="javascript:void(0)" class="btn btn-sm fw-bold btn-info pe-2 ps-3"
                                        data-bs-toggle="modal" data-bs-target="#faqViewModal_{{ $faq->id }}">
                                        <i class="fas fa-expand"></i>
                                    </a> --}}
                                    <a href="{{ route('user.nfc-card.edit', $nfc_card->id) }}"
                                        class="btn btn-sm fw-bold btn-info pe-2 ps-3 me-3">
                                        <i class="fas fa-pen"></i>
                                    </a>
                                    <a href="{{ route('user.nfc-card.destroy', $nfc_card->id) }}"
                                        class="btn btn-sm fw-bold btn-danger delete pe-2 ps-3 delete">
                                        <i class="fas fa-trash"></i>
                                    </a>
                                    {{-- <div class="dropdown">
                                        <button class="btn btn-light-danger dropdown-toggle" type="button"
                                            id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                            Actions
                                        </button>
                                        <ul class="dropdown-menu mt-0 pt-0 rounded-0"
                                            aria-labelledby="dropdownMenuButton1">
                                            @if (strpos(Route::current()->getName(), 'user.') === 0)
                                                <li class="text-muted">
                                                    <a href="javascript:void(0)"
                                                        class="download-button px-3 dropdown-item" id="convertButton"
                                                        data-modal-id="virtual_card_modal_{{ $nfc_card->id }}">
                                                        <span title="Download Image">PNG</span>
                                                    </a>
                                                </li>
                                                <li class="text-muted">
                                                    <a href="javascript:void(0)"
                                                        class="download-eps-button menu-link px-3 dropdown-item"
                                                        data-modal-id="virtual_card_modal_{{ $nfc_card->id }}">
                                                        <span title="Download EPS">EPS</span>
                                                    </a>
                                                </li>
                                                <li class="text-muted">
                                                    <a href="{{ route('user.nfc-card.edit', $nfc_card->id) }}"
                                                        class="menu-link px-3 dropdown-item">
                                                        Edit
                                                    </a>
                                                </li>
                                                <li class="text-muted">
                                                    <a href="{{ route('user.nfc-card.destroy', $nfc_card->id) }}"
                                                        class="menu-link px-3 delete dropdown-item">
                                                        Delete
                                                    </a>
                                                </li>
                                            @else
                                                <li class="text-muted">
                                                    <a href="javascript:void(0)"
                                                        class="download-button menu-link px-3 dropdown-item"
                                                        id="convertButton"
                                                        data-modal-id="virtual_card_modal_{{ $nfc_card->id }}">
                                                        <span title="Download Image">PNG</span>
                                                    </a>
                                                </li>
                                                <li class="text-muted">
                                                    <a href="javascript:void(0)"
                                                        class="download-eps-button menu-link px-3 dropdown-item"
                                                        data-modal-id="virtual_card_modal_{{ $nfc_card->id }}">
                                                        <span title="Download EPS">EPS</span>
                                                    </a>
                                                </li>
                                                <li class="text-muted">
                                                    <a href="{{ route('admin.nfc-card.destroy', $nfc_card->id) }}"
                                                        class="menu-link px-3 delete dropdown-item">
                                                        Delete
                                                    </a>
                                                </li>
                                            @endif
                                        </ul>
                                    </div> --}}
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

@foreach ($nfc_cards as $nfc_card)
    <div class="modal fade" tabindex="-1" id="virtual_card_modal_{{ $nfc_card->id }}">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content rounded-0">
                <div class="modal-header py-3 bg-info rounded-0 pe-2">
                    <h3 class="modal-title text-white">Showing NFC Card</h3>
                    <button type="button" class="btn btn-sm btn-transparent btn-active-info pe-2 ps-3"
                        data-bs-dismiss="modal" aria-label="Close">
                        <i class="fa-solid fa-xmark fs-1"></i>
                    </button>
                </div>
                <div class="card p-0">
                    <div class="card-body p-0">
                        <div id="card-container">
                            @if (optional($nfc_card)->virtual_card_template == 'virtual-card-one')
                                @include('virtualCard.partials.card_modals.card_one')
                            @elseif (optional($nfc_card)->virtual_card_template == 'virtual-card-two')
                                @include('virtualCard.partials.card_modals.card_two')
                            @elseif (optional($nfc_card)->virtual_card_template == 'virtual-card-three')
                                @include('virtualCard.partials.card_modals.card_three')
                            @elseif (optional($nfc_card)->virtual_card_template == 'virtual-card-four')
                                @include('virtualCard.partials.card_modals.card_four')
                            @elseif (optional($nfc_card)->virtual_card_template == 'virtual-card-six')
                                @include('virtualCard.partials.card_modals.card_six')
                            @elseif (optional($nfc_card)->virtual_card_template == 'virtual-card-seven')
                                @include('virtualCard.partials.card_modals.card_seven')
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" tabindex="-1" id="shipping_address_modal_{{ $nfc_card->id }}">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content rounded-0">
                <div class="modal-header py-3 bg-info rounded-0 pe-2">
                    <h3 class="modal-title text-white">Card Shipping Details</h3>
                    <button type="button" class="btn btn-sm btn-transparent btn-active-info pe-2 ps-3"
                        data-bs-dismiss="modal" aria-label="Close">
                        <i class="fa-solid fa-xmark fs-1"></i>
                    </button>
                </div>
                <div class="modal-body p-0">
                    <div class="card">
                        <div id="kt_account_settings_profile_details" class="collapse show">
                            <div class="card-body border-top p-9">

                                <div class="row mb-6">
                                    <label class="col-lg-3 col-form-label fw-semibold fs-6">Contact
                                        Person</label>
                                    <div class="col-lg-9">
                                        <div class="row">
                                            <div class="col-lg-12 fv-row fv-plugins-icon-container">
                                                <input
                                                    class="form-control form-control-lg form-control-solid mb-3 mb-lg-0"
                                                    disabled
                                                    value="{{ optional($nfc_card->shippingDetails)->shipping_name }} ">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row mb-6">
                                    <label class="col-lg-3 col-form-label fw-semibold fs-6">
                                        <span class="">Contact Phone</span>
                                    </label>

                                    <div class="col-lg-9 fv-row fv-plugins-icon-container">
                                        <input class="form-control form-control-lg form-control-solid" disabled
                                            value="{{ optional($nfc_card->shippingDetails)->shipping_phone }}">
                                        <div
                                            class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback">
                                        </div>
                                    </div>
                                </div>
                                <div class="row mb-6">
                                    <label class="col-lg-3 col-form-label fw-semibold fs-6">Address</label>
                                    <div class="col-lg-9">
                                        <div class="row gx-1">
                                            <div class="col-lg-12 fv-row mb-4">
                                                <input class="form-control form-control-lg form-control-solid" disabled
                                                    value="{{ optional($nfc_card->shippingDetails)->shipping_address }}">
                                            </div>

                                            <div class="col-lg-4 fv-row mb-4">
                                                <input class="form-control form-control-lg form-control-solid" disabled
                                                    value="{{ optional($nfc_card->shippingDetails)->shipping_city }}">
                                            </div>

                                            <div class="col-lg-4 fv-row mb-4">
                                                <input class="form-control form-control-lg form-control-solid" disabled
                                                    value="{{ optional($nfc_card->shippingDetails)->shipping_zip_code }}">
                                            </div>

                                            <div class="col-lg-4 fv-row mb-4">
                                                <input class="form-control form-control-lg form-control-solid" disabled
                                                    value="{{ optional($nfc_card->shippingDetails)->shipping_country }}">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endforeach

@push('scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/1.4.1/html2canvas.min.js"
        integrity="sha512-BNaRQnYJYiPSqHHDb58B0yaPfCu+Wgds8Gp/gU33kqBtgNS4tSPHuGibyoeqMV/TJlSKda6FXzoEyYGjTe+vXA=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
        function showAndCaptureModal(modalId, callback) {
            const modal = new bootstrap.Modal(document.getElementById(modalId));
            modal.show();

            setTimeout(() => {
                callback();
                modal.hide();
            }, 1000); // Wait for the modal to render
        }

        function captureAndDownloadPNG(modalId) {
            showAndCaptureModal(modalId, () => {
                html2canvas(document.querySelector('#' + modalId + ' #card-container')).then(canvas => {
                    // Add padding to the canvas
                    const padding = 10; // Adjust the padding size as needed
                    const paddedCanvas = document.createElement('canvas');
                    paddedCanvas.width = canvas.width + 2 * padding;
                    paddedCanvas.height = canvas.height + 2 * padding;
                    const context = paddedCanvas.getContext('2d');

                    // Set the background color to transparent
                    context.fillStyle = 'transparent';
                    context.fillRect(0, 0, paddedCanvas.width, paddedCanvas.height);

                    // Draw the original canvas onto the new canvas with padding
                    context.drawImage(canvas, padding, padding);

                    // Download the padded canvas as PNG
                    const pngUrl = paddedCanvas.toDataURL('image/png');
                    const link = document.createElement('a');
                    link.href = pngUrl;
                    link.download = 'card.png';
                    link.click();
                });
            });
        }


        function captureAndDownloadEPS(modalId) {
            showAndCaptureModal(modalId, () => {
                html2canvas(document.querySelector('#' + modalId + ' #card-container')).then(canvas => {
                    const imgData = canvas.toDataURL('image/png');

                    // Convert the PNG to EPS format (simple base64 embedded EPS)
                    const epsContent = `%!PS-Adobe-3.0 EPSF-3.0
                                            %%BoundingBox: 0 0 ${canvas.width} ${canvas.height}
                                            %%HiResBoundingBox: 0 0 ${canvas.width} ${canvas.height}
                                            %%EndComments
                                            gsave
                                            0 0 translate
                                            ${canvas.width} ${canvas.height} scale
                                            /${imgData.split(',')[1]} def
                                            /${imgData.split(',')[1]} currentfile /ASCII85Decode filter def
                                            /${imgData.split(',')[1]} currentfile /DCTDecode filter def
                                            image
                                            grestore
                                            showpage
                                            %%EOF
                                            `;

                    const link = document.createElement('a');
                    const blob = new Blob([epsContent], {
                        type: 'application/postscript'
                    });
                    const url = URL.createObjectURL(blob);
                    link.href = url;
                    link.download = 'card.eps';
                    link.click();
                });
            });
        }


        function createEPSContent(imageData, width, height) {
            const base64Data = imageData.replace(/^data:image\/(png|jpg);base64,/, '');
            const psHeader = `%!PS-Adobe-3.0 EPSF-3.0\n%%BoundingBox: 0 0 ${width} ${height}\n`;
            const psImage = `
                        /DeviceRGB setcolorspace
                        ${width} ${height} scale
                        /picstr ${width} string def
                        ${width} ${height} 8 [${width} 0 0 -${height} 0 ${height}]
                        { currentfile picstr readhexstring pop }
                        false 3 colorimage
                    `;
            const psFooter = 'showpage\n';
            const hexData = base64ToHex(base64Data);
            return `${psHeader}${psImage}${hexData}\n${psFooter}`;
        }

        function base64ToHex(base64) {
            const binary = atob(base64);
            let hex = '';
            for (let i = 0; i < binary.length; i++) {
                const byte = binary.charCodeAt(i);
                hex += ('0' + byte.toString(16)).slice(-2);
                if (i % 32 === 31) hex += '\n'; // Add a newline every 32 bytes for readability
            }
            return hex;
        }

        document.addEventListener('DOMContentLoaded', function() {
            document.querySelectorAll('.download-button').forEach(button => {
                button.addEventListener('click', function() {
                    const modalId = button.getAttribute('data-modal-id');
                    captureAndDownloadPNG(modalId);
                });
            });

            document.querySelectorAll('.download-eps-button').forEach(button => {
                button.addEventListener('click', function() {
                    const modalId = button.getAttribute('data-modal-id');
                    captureAndDownloadEPS(modalId);
                });
            });
        });
    </script>
@endpush

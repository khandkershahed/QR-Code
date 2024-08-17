<div class="col-lg-12 mt-10 pb-10">
    <div class="card card-p-0 card-flush pt-0 mb-5">
        <div class="card-header bg-info align-items-center">
            <h1 class="mb-0 text-center w-100 text-white">Manage Your NFC</h1>
        </div>
        <div class="card-body table-responsive">
            <table class="table my-datatable table-striped table-row-bordered gy-5 gs-7 border rounded">
                <thead>
                    <tr class="fw-bold fs-6 text-gray-800 px-7">
                        <th width="5%">SL</th>
                        <th width="10%"><i class="fa-solid fa-circle-check text-success"></i> VCard</th>
                        <th width="10%"><i class="fa-solid fa-circle-check text-success"></i> NFC</th>
                        <th width="20%">Name </th>
                        <th width="15%">Link</th>
                        <th width="15%">Show NFC</th>
                        <th width="15%">Delivery</th>
                        {{-- <th width="16%">Download</th> --}}
                        <th width="10%" class="text-center">Action</th>
                    </tr>
                </thead>
                <tbody class="fw-semibold text-gray-600">
                    @foreach ($nfc_cards as $nfc_card)
                        <tr>
                            {{-- @dd($nfc_card) --}}
                            <td>
                                {{ $loop->iteration }}
                            </td>
                            <td>
                                @if (optional($nfc_card->nfc)->nfc_template == 'template-one')
                                    <img class="img-fluid w-45px h-60px"
                                        src="{{ asset('frontend/assets/images/nfc-templates/template_one.png') }}"
                                        alt="">
                                @elseif (optional($nfc_card->nfc)->nfc_template == 'template-two')
                                    <img class="img-fluid w-45px h-60px"
                                        src="{{ asset('frontend/assets/images/nfc-templates/template_two.png') }}"
                                        alt="">
                                @elseif (optional($nfc_card->nfc)->nfc_template == 'template-three')
                                    <img class="img-fluid w-45px h-60px"
                                        src="{{ asset('frontend/assets/images/nfc-templates/template_three.png') }}"
                                        alt="">
                                @elseif (optional($nfc_card->nfc)->nfc_template == 'template-four')
                                    <img class="img-fluid w-50px"
                                        src="{{ asset('frontend/assets/images/nfc-templates/template_four.jpg') }}"
                                        alt="">
                                @elseif (optional($nfc_card->nfc)->nfc_template == 'template-five')
                                    <img class="img-fluid w-50px"
                                        src="{{ asset('frontend/assets/images/nfc-templates/template_five.jpg') }}"
                                        alt="">
                                @elseif (optional($nfc_card->nfc)->nfc_template == 'template-six')
                                    <img class="img-fluid w-50px"
                                        src="{{ asset('frontend/assets/images/nfc-templates/template_six.jpg') }}"
                                        alt="">
                                @endif
                            </td>
                            <td>
                                @if (optional($nfc_card)->virtual_card_template == 'virtual-card-one')
                                    <img class="img-fluid w-65px"
                                        src="{{ asset('frontend/images/virtual_card/card_1.png') }}" alt="">
                                @elseif (optional($nfc_card)->virtual_card_template == 'virtual-card-two')
                                    <img class="img-fluid w-65px"
                                        src="{{ asset('frontend/images/virtual_card/card_2.png') }}" alt="">
                                @elseif (optional($nfc_card)->virtual_card_template == 'virtual-card-three')
                                    <img class="img-fluid w-65px"
                                        src="{{ asset('frontend/images/virtual_card/card_3.png') }}" alt="">
                                @elseif (optional($nfc_card)->virtual_card_template == 'virtual-card-four')
                                    <img class="img-fluid w-65px"
                                        src="{{ asset('frontend/images/virtual_card/card_4.png') }}" alt="">
                                @elseif (optional($nfc_card)->virtual_card_template == 'virtual-card-five')
                                    <img class="img-fluid w-65px"
                                        src="{{ asset('frontend/images/virtual_card/card_5.png') }}" alt="">
                                @elseif (optional($nfc_card)->virtual_card_template == 'virtual-card-six')
                                    <img class="img-fluid w-65px"
                                        src="{{ asset('frontend/images/virtual_card/card_6.png') }}" alt="">
                                @elseif (optional($nfc_card)->virtual_card_template == 'virtual-card-seven')
                                    <img class="img-fluid w-65px"
                                        src="{{ asset('frontend/images/virtual_card/card_7.png') }}" alt="">
                                @elseif (optional($nfc_card)->virtual_card_template == 'virtual-card-eight')
                                    <img class="img-fluid w-65px"
                                        src="{{ asset('frontend/images/virtual_card/card_8.png') }}" alt="">
                                @endif
                            </td>
                            <td>
                                <div class="text-success">{{ optional($nfc_card)->card_name }}</div>
                            </td>
                            <td>
                                <a href="{{ optional($nfc_card->nfc)->nfc_url }}" target="_blank" class="text-primary">
                                    <button class="btn btn-sm btn-info">NFC <i class="fas fa-link ps-2"></i></button>
                                </a>
                            </td>
                            <td>
                                <a href="javascript:void(0)" data-bs-toggle="modal"
                                    data-bs-target="#virtual_card_modal_{{ $nfc_card->id }}" class="text-primary">
                                    <button class="btn btn-sm btn-info"><i class="fas fa-eye pe-2"></i>
                                        CARD</button>
                                </a>
                            </td>
                            <td>
                                <a href="javascript:void(0)" data-bs-toggle="modal"
                                    data-bs-target="#shipping_address_modal_{{ $nfc_card->id }}" class="text-primary">
                                    <button class="btn btn-sm btn-info"><i class="fas fa-eye pe-2"></i>
                                        Shipping</button>
                                </a>
                            </td>
                            {{-- <td class="text-center">
                                <button class="download-button border-0 btn btn-info btn-sm p-2 px-3 me-3"
                                    id="convertButton" data-modal-id="virtual_card_modal_{{ $nfc_card->id }}">
                                    <span title="Download Image">PNG</span>
                                </button>
                                <button class="download-eps-button border-0 btn btn-info btn-sm p-2 px-3"
                                    data-modal-id="virtual_card_modal_{{ $nfc_card->id }}">
                                    <span title="Download EPS">EPS</span>
                                </button>
                            </td> --}}
                            <td class="pe-0 text-center">
                                <a href="#" class="btn btn-light-primary btn-active-light-primary btn-sm"
                                    data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end"
                                    data-kt-menu-flip="top-end">
                                    Actions
                                    <span class="svg-icon fs-5 m-0">
                                        <svg xmlns="http://www.w3.org/2000/svg"
                                            xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px"
                                            viewBox="0 0 24 24" version="1.1">
                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                <polygon points="0 0 24 0 24 24 0 24"></polygon>
                                                <path
                                                    d="M6.70710678,15.7071068 C6.31658249,16.0976311 5.68341751,16.0976311 5.29289322,15.7071068 C4.90236893,15.3165825 4.90236893,14.6834175 5.29289322,14.2928932 L11.2928932,8.29289322 C11.6714722,7.91431428 12.2810586,7.90106866 12.6757246,8.26284586 L18.6757246,13.7628459 C19.0828436,14.1360383 19.1103465,14.7686056 18.7371541,15.1757246 C18.3639617,15.5828436 17.7313944,15.6103465 17.3242754,15.2371541 L12.0300757,10.3841378 L6.70710678,15.7071068 Z"
                                                    fill="currentColor" fill-rule="nonzero"
                                                    transform="translate(12.000003, 11.999999) rotate(-180.000000) translate(-12.000003, -11.999999)">
                                                </path>
                                            </g>
                                        </svg>
                                    </span>
                                </a>
                                <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-bold fs-7 w-125px py-4"
                                    data-kt-menu="true" style="">

                                    @if (strpos(Route::current()->getName(), 'user.') === 0)
                                        <div class="menu-item px-3">
                                            <a href="javascript:void(0)" class="download-button menu-link px-3"
                                                id="convertButton"
                                                data-modal-id="virtual_card_modal_{{ $nfc_card->id }}">
                                                <span title="Download Image">PNG</span>
                                            </a>
                                        </div>
                                        <div class="menu-item px-3">
                                            <a href="javascript:void(0)" class="download-eps-button menu-link px-3"
                                                data-modal-id="virtual_card_modal_{{ $nfc_card->id }}">
                                                <span title="Download EPS">EPS</span>
                                            </a>
                                        </div>
                                        <div class="menu-item px-3">
                                            <a href="{{ route('user.nfc-card.edit', $nfc_card->id) }}"
                                                class="menu-link px-3">
                                                Edit
                                            </a>
                                        </div>
                                        <div class="menu-item px-3">
                                            <a href="{{ route('user.nfc-card.destroy', $nfc_card->id) }}"
                                                class="menu-link px-3 delete">
                                                Delete
                                            </a>
                                        </div>
                                    @else
                                        <div class="menu-item px-3">
                                            <a href="javascript:void(0)" class="download-button menu-link px-3"
                                                id="convertButton"
                                                data-modal-id="virtual_card_modal_{{ $nfc_card->id }}">
                                                <span title="Download Image">PNG</span>
                                            </a>
                                        </div>
                                        <div class="menu-item px-3">
                                            <a href="javascript:void(0)" class="download-eps-button menu-link px-3"
                                                data-modal-id="virtual_card_modal_{{ $nfc_card->id }}">
                                                <span title="Download EPS">EPS</span>
                                            </a>
                                        </div>
                                        <div class="menu-item px-3">
                                            {{-- <a href="{{ route('admin.nfc-card.edit', $nfc_card->id) }}"
                                                class="menu-link px-3">
                                                Edit
                                            </a> --}}
                                        </div>
                                        <div class="menu-item px-3">
                                            <a href="{{ route('admin.nfc-card.destroy', $nfc_card->id) }}"
                                                class="menu-link px-3 delete">
                                                Delete
                                            </a>
                                        </div>
                                    @endif

                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

@foreach ($nfc_cards as $nfc_card)
    <div class="modal fade" tabindex="-1" id="virtual_card_modal_{{ $nfc_card->id }}">
        <div class="modal-dialog modal-dialog-centered modal-xl" style="max-width: 845px !important;">
            <div class="modal-content position-absolute">
                <div class="modal-body pb-0">
                    <div class="card">
                        <div id="card-container" class="p-5">
                            @if (optional($nfc_card)->virtual_card_template == 'virtual-card-one')
                                @include('virtualCard.partials.card_modals.card_one')
                            @elseif (optional($nfc_card)->virtual_card_template == 'virtual-card-two')
                                @include('virtualCard.partials.card_modals.card_two')
                            @elseif (optional($nfc_card)->virtual_card_template == 'virtual-card-three')
                                @include('virtualCard.partials.card_modals.card_three')
                            @elseif (optional($nfc_card)->virtual_card_template == 'virtual-card-four')
                                @include('virtualCard.partials.card_modals.card_four')
                                {{-- @elseif (optional($nfc_card)->virtual_card_template == 'virtual-card-five') --}}
                            @elseif (optional($nfc_card)->virtual_card_template == 'virtual-card-six')
                                @include('virtualCard.partials.card_modals.card_six')
                            @elseif (optional($nfc_card)->virtual_card_template == 'virtual-card-seven')
                                @include('virtualCard.partials.card_modals.card_seven')
                                {{-- @elseif (optional($nfc_card)->virtual_card_template == 'virtual-card-eight') --}}
                            @endif
                        </div>
                    </div>

                    <div class="modal-footer border-0 pt-0">
                        <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                        {{-- <button type="button" class="btn btn-primary">Save changes</button> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" tabindex="-1" id="shipping_address_modal_{{ $nfc_card->id }}">
        <div class="modal-dialog modal-xl">
            <div class="modal-content position-absolute">
                <div class="modal-header bg-light-info">
                    <h5 class="modal-title">Card Shipping Address</h5>


                    <div class="btn btn-icon btn-sm btn-active-light-primary ms-2" data-bs-dismiss="modal"
                        aria-label="Close">
                        <i class="fa-solid fa-xmark fs-2x"></i>
                    </div>

                </div>

                <div class="modal-body p-0">
                    <div class="card">
                        <div id="kt_account_settings_profile_details" class="collapse show">
                            <form id="kt_account_profile_details_form"
                                class="form fv-plugins-bootstrap5 fv-plugins-framework" novalidate="novalidate">
                                <div class="card-body border-top p-9">
                                    <div class="row mb-6">
                                        <label class="col-lg-4 col-form-label fw-semibold fs-6">Avatar</label>
                                        <div class="col-lg-8">

                                            <div class="image-input image-input-outline" data-kt-image-input="true"
                                                style="background-image: url('/metronic8/demo1/assets/media/svg/avatars/blank.svg')">

                                                <div class="image-input-wrapper w-125px h-125px"
                                                    style="background-image: url(/metronic8/demo1/assets/media/avatars/300-1.jpg)">
                                                </div>
                                                <label
                                                    class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                                                    data-kt-image-input-action="change" data-bs-toggle="tooltip"
                                                    aria-label="Change avatar" data-bs-original-title="Change avatar"
                                                    data-kt-initialized="1">
                                                    <i class="fa-solid fa-pencil fs-7"></i>

                                                    <input type="file" name="avatar" accept=".png, .jpg, .jpeg">
                                                    <input type="hidden" name="avatar_remove">

                                                </label>
                                                <span
                                                    class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                                                    data-kt-image-input-action="cancel" data-bs-toggle="tooltip"
                                                    aria-label="Cancel avatar" data-bs-original-title="Cancel avatar"
                                                    data-kt-initialized="1">
                                                    <i class="fa-regular fa-trash-can fs-7"><span
                                                            class="path1"></span><span class="path2"></span></i>
                                                </span>
                                                <span
                                                    class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                                                    data-kt-image-input-action="remove" data-bs-toggle="tooltip"
                                                    aria-label="Remove avatar" data-bs-original-title="Remove avatar"
                                                    data-kt-initialized="1">
                                                    <i class="fa-regular fa-trash-can fs-7"><span
                                                            class="path1"></span><span class="path2"></span></i>
                                                </span>
                                            </div>
                                            <div class="form-text">Allowed file types: png, jpg, jpeg.</div>
                                        </div>
                                    </div>
                                    <div class="row mb-6">
                                        <label class="col-lg-4 col-form-label required fw-semibold fs-6">Contact
                                            Person</label>
                                        <div class="col-lg-8">
                                            <div class="row">
                                                <div class="col-lg-6 fv-row fv-plugins-icon-container">
                                                    <input type="text" name="fname"
                                                        class="form-control form-control-lg form-control-solid mb-3 mb-lg-0"
                                                        placeholder="First name"
                                                        value="{{ optional($nfc_card->shippingDetails)->shipping_name }} ">
                                                    <div
                                                        class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback">
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 fv-row fv-plugins-icon-container">
                                                    <input type="text" name="lname"
                                                        class="form-control form-control-lg form-control-solid"
                                                        placeholder="Last name" value="">
                                                    <div
                                                        class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row mb-6">
                                        <label class="col-lg-4 col-form-label fw-semibold fs-6">
                                            <span class="required">Contact Phone</span>
                                            <span class="ms-1" data-bs-toggle="tooltip"
                                                aria-label="Phone number must be active"
                                                data-bs-original-title="Phone number must be active"
                                                data-kt-initialized="1">
                                                <i class="ki-duotone ki-information-5 text-gray-500 fs-6"><span
                                                        class="path1"></span><span class="path2"></span><span
                                                        class="path3"></span></i></span>
                                        </label>

                                        <div class="col-lg-8 fv-row fv-plugins-icon-container">
                                            <input type="tel" name="phone"
                                                class="form-control form-control-lg form-control-solid"
                                                placeholder="Phone number"
                                                value="{{ optional($nfc_card->shippingDetails)->shipping_phone }}">
                                            <div
                                                class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mb-6">
                                        <label class="col-lg-4 col-form-label fw-semibold fs-6">Address</label>
                                        <div class="col-lg-2 fv-row">
                                            <input type="text" name="house"
                                                class="form-control form-control-lg form-control-solid"
                                                placeholder="33-Block, State House"
                                                value="{{ optional($nfc_card->shippingDetails)->shipping_address }}">
                                        </div>

                                        <div class="col-lg-2 fv-row">
                                            <input type="text" name="city"
                                                class="form-control form-control-lg form-control-solid"
                                                placeholder="Menchesta City"
                                                value="{{ optional($nfc_card->shippingDetails)->shipping_city }}">
                                        </div>

                                        <div class="col-lg-2 fv-row">
                                            <input type="text" name="zip-code"
                                                class="form-control form-control-lg form-control-solid"
                                                placeholder="42386"
                                                value="{{ optional($nfc_card->shippingDetails)->shipping_zip_code }}">
                                        </div>

                                        <div class="col-lg-2 fv-row">
                                            <input type="text" name="country"
                                                class="form-control form-control-lg form-control-solid"
                                                placeholder="United State"
                                                value="{{ optional($nfc_card->shippingDetails)->shipping_country }}">
                                        </div>
                                    </div>
                                    <div class="row mb-0">
                                        <label class="col-lg-4 col-form-label fw-semibold fs-6">Instruction</label>
                                        <div class="col-lg-8 d-flex align-items-center">
                                            <div class="form-floating">
                                                <textarea class="form-control form-control-solid w-100" placeholder="Leave a comment here" id="floatingTextarea2"
                                                    style="height: 100px;width: 715px !important;"></textarea>
                                                <label
                                                    for="floatingTextarea2">{{ optional($nfc_card->shippingDetails)->shipping_instruction }}</label>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <div class="card-footer d-flex justify-content-end py-6 px-9">
                                    <button type="submit" class="btn btn-primary"
                                        id="kt_account_profile_details_submit">Save Changes</button>
                                </div>
                                <input type="hidden">
                            </form>

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

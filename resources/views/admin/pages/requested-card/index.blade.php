<x-admin-app-layout :title="'NFC Card Request'">
    <div class="post d-flex flex-column-fluid mt-15" id="kt_post">
        <div class="container-fluid">
            <div class="card card-flush">
                <div class="card-header align-items-center py-5 gap-2 gap-md-5">
                    <div class="card-title">
                        <div class="d-flex align-items-center position-relative my-1">
                            <span class="svg-icon svg-icon-1 position-absolute ms-4">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none">
                                    <rect opacity="0.5" x="17.0365" y="15.1223" width="8.15546" height="2"
                                        rx="1" transform="rotate(45 17.0365 15.1223)" fill="currentColor" />
                                    <path
                                        d="M11 19C6.55556 19 3 15.4444 3 11C3 6.55556 6.55556 3 11 3C15.4444 3 19 6.55556 19 11C19 15.4444 15.4444 19 11 19ZM11 5C7.53333 5 5 7.53333 5 11C5 14.4667 7.53333 17 11 17C14.4667 17 17 14.4667 17 11C17 7.53333 14.4667 5 11 5Z"
                                        fill="currentColor" />
                                </svg>
                            </span>
                            <input type="text" data-kt-ecommerce-message-filter="search"
                                class="form-control form-control-solid w-250px ps-14" placeholder="Search message" />
                        </div>
                    </div>
                </div>
                <div class="card-body pt-0">
                    <div class="table-responsive">
                        <table class="table table-hover align-middle table-row-dashed fs-6 gy-5" id="kt_message_table">
                            <thead>
                                <tr class="text-start text-gray-400 fw-bolder fs-7 text-uppercase gs-0">
                                    <th width="5%" class="text-center">Sl</th>
                                    <th width="10%" class="text-center">Landing Page</th>
                                    <th width="10%" class="text-center">Choosen Card</th>
                                    <th width="10%" class="text-center">Name</th>
                                    <th width="10%" class="text-center">NFC Link</th>
                                    <th width="10%" class="text-center">Delivery Address</th>
                                    <th width="10%" class="text-center">Status</th>
                                    <th width="10%" class="text-center min-w-70px">Action</th>
                                </tr>
                            </thead>

                            <tbody class="fw-bold text-gray-600">
                                @foreach ($nfc_cards as $nfc_card)
                                    <tr>
                                        <td class="text-center">
                                            <span class="fw-bolder"> {{ $loop->iteration }}</span>
                                        </td>
                                        <td class="text-center">
                                            @if ($nfc_card->nfc_template == 'template-one')
                                                <img class="img-fluid w-50px"
                                                    src="{{ asset('frontend/assets/images/nfc-templates/template_one.jpg') }}"
                                                    alt="">
                                            @elseif ($nfc_card->nfc_template == 'template-two')
                                                <img class="img-fluid w-50px"
                                                    src="{{ asset('frontend/assets/images/nfc-templates/template_two.jpg') }}"
                                                    alt="">
                                            @elseif ($nfc_card->nfc_template == 'template-three')
                                                <img class="img-fluid w-50px"
                                                    src="{{ asset('frontend/assets/images/nfc-templates/template_three.jpg') }}"
                                                    alt="">
                                            @elseif ($nfc_card->nfc_template == 'template-four')
                                                <img class="img-fluid w-50px"
                                                    src="{{ asset('frontend/assets/images/nfc-templates/template_four.jpg') }}"
                                                    alt="">
                                            @elseif ($nfc_card->nfc_template == 'template-five')
                                                <img class="img-fluid w-50px"
                                                    src="{{ asset('frontend/assets/images/nfc-templates/template_five.jpg') }}"
                                                    alt="">
                                            @elseif ($nfc_card->nfc_template == 'template-six')
                                                <img class="img-fluid w-50px"
                                                    src="{{ asset('frontend/assets/images/nfc-templates/template_six.jpg') }}"
                                                    alt="">
                                            @endif
                                        </td>
                                        <td class="text-center">
                                            <div>
                                                @if (optional($nfc_card->virtualCard)->virtual_card_template == 'virtual-card-one')
                                                    <img class="img-fluid w-50px"
                                                        src="{{ asset('frontend/images/virtual_card/virtual_card_1.png') }}"
                                                        alt="">
                                                @elseif (optional($nfc_card->virtualCard)->virtual_card_template == 'virtual-card-two')
                                                    <img class="img-fluid w-50px"
                                                        src="{{ asset('frontend/images/virtual_card/virtual_card_2.png') }}"
                                                        alt="">
                                                @elseif (optional($nfc_card->virtualCard)->virtual_card_template == 'virtual-card-three')
                                                    <img class="img-fluid w-50px"
                                                        src="{{ asset('frontend/images/virtual_card/virtual_card_3.png') }}"
                                                        alt="">
                                                @elseif (optional($nfc_card->virtualCard)->virtual_card_template == 'virtual-card-four')
                                                    <img class="img-fluid w-50px"
                                                        src="{{ asset('frontend/images/virtual_card/virtual_card_4.png') }}"
                                                        alt="">
                                                @elseif (optional($nfc_card->virtualCard)->virtual_card_template == 'virtual-card-five')
                                                    <img class="img-fluid w-50px"
                                                        src="{{ asset('frontend/images/virtual_card/virtual_card_5.png') }}"
                                                        alt="">
                                                @elseif (optional($nfc_card->virtualCard)->virtual_card_template == 'virtual-card-six')
                                                    <img class="img-fluid w-50px"
                                                        src="{{ asset('frontend/images/virtual_card/virtual_card_6.png') }}"
                                                        alt="">
                                                @elseif (optional($nfc_card->virtualCard)->virtual_card_template == 'virtual-card-seven')
                                                    <img class="img-fluid w-50px"
                                                        src="{{ asset('frontend/images/virtual_card/virtual_card_7.png') }}"
                                                        alt="">
                                                @elseif (optional($nfc_card->virtualCard)->virtual_card_template == 'virtual-card-eight')
                                                    <img class="img-fluid w-50px"
                                                        src="{{ asset('frontend/images/virtual_card/virtual_card_8.png') }}"
                                                        alt="">
                                                @endif
                                            </div>
                                        </td>
                                        <td class="text-center">
                                            <span class="fw-bolder"> {{ optional($nfc_card->nfcData)->first_name }}
                                                {{ optional($nfc_card->nfcData)->last_name }}
                                            </span>
                                        </td>
                                        <td class="text-center">
                                            <a href="{{ $nfc_card->nfc_url }}" id="copyButton"
                                                class="btn btn-sm btn-primary">Copy URL</a>
                                        </td>
                                        <td class="text-center">
                                            <button class="btn btn-sm btn-primary" data-bs-toggle="modal"
                                                data-bs-target="#deliveryModal-{{ $nfc_card->id }}">Delivery
                                                Location</button>
                                        </td>
                                        <td class="text-center">
                                            <div
                                                class="form-check form-switch form-check-custom form-check-solid justify-content-center">
                                                <input class="form-check-input" type="checkbox" value=""
                                                    id="flexSwitchChecked" checked="checked" />
                                                <label class="form-check-label" for="flexSwitchChecked"
                                                    id="switchLabel">Approved</label>
                                            </div>
                                        </td>
                                        <td class="text-center">
                                            <a href="" class="btn btn-sm bg-transparent action-table-btn">
                                                <i class="fas fa-download fs-2" title="Download PNG"></i>
                                            </a>
                                            <a href="" class="btn btn-sm bg-transparent action-table-btn">
                                                <i class="fas fa-bezier-curve fs-2" title="Download EPS"></i>
                                            </a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>


    @foreach ($nfc_cards as $nfc_card)
        <div class="modal fade" id="deliveryModal-{{ $nfc_card->id }}" tabindex="-1" data-bs-backdrop="static"
            data-bs-keyboard="false" role="dialog" aria-labelledby="modalTitleId" aria-hidden="true">
            <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-md" role="document">
                <div class="modal-content">
                    <div class="modal-header border-0">
                        <h5 class="modal-title" id="modalTitleId">
                            Your Delivery Location
                        </h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body p-0" style="overflow: hidden">
                        <div class="row">
                            <div class="col-lg-10 offset-lg-1">
                                <div class="table-responsive">
                                    <table class="table table-striped table-row-bordered gy-5 gs-7">
                                        <thead class="border">
                                            <tr>
                                                <th width="40%" class="p-3">Contact Person Name</th>
                                                <th class="p-3">{{ optional($nfc_card->shippingDetails)->shipping_name }}</th>
                                            </tr>
                                            <tr>
                                                <th width="40%" class="p-3">Phone</th>
                                                <th class="p-3">{{ optional($nfc_card->shippingDetails)->shipping_phone }}</th>
                                            </tr>
                                            <tr>
                                                <th width="40%" class="p-3">Address</th>
                                                <th class="p-3">{{ optional($nfc_card->shippingDetails)->shipping_address }}</th>
                                            </tr>
                                            <tr>
                                                <th width="40%" class="p-3">City</th>
                                                <th class="p-3">{{ optional($nfc_card->shippingDetails)->shipping_city }}</th>
                                            </tr>
                                            <tr>
                                                <th width="40%" class="p-3">State</th>
                                                <th class="p-3">{{ optional($nfc_card->shippingDetails)->shipping_state }}</th>
                                            </tr>
                                            <tr>
                                                <th width="40%" class="p-3">Zip</th>
                                                <th class="p-3">{{ optional($nfc_card->shippingDetails)->shipping_zip_code }}</th>
                                            </tr>
                                            <tr>
                                                <th width="40%" class="p-3">Country</th>
                                                <th class="p-3">{{ optional($nfc_card->shippingDetails)->shipping_country }}</th>
                                            </tr>
                                            <tr>
                                                <th width="40%" class="p-3 text-center">
                                                    <div>Instruction</div>
                                                </th>
                                                <th class="p-3">
                                                    <p>{{ optional($nfc_card->shippingDetails)->shipping_instruction }}</p>
                                                </th>
                                            </tr>
                                        </thead>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer border-0">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                                Close
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endforeach



        {{-- Delivery Location Modal End --}}
        @push('scripts')
        <script>
            const myModal = new bootstrap.Modal(
                document.getElementById("modalId"),
                options,
            );
        </script>
            <script>
                document.getElementById('flexSwitchChecked').addEventListener('change', function() {
                    const label = document.getElementById('switchLabel');
                    if (this.checked) {
                        label.textContent = 'Approved';
                    } else {
                        label.textContent = 'Rejected';
                    }
                });
            </script>
            <script>
                document.getElementById('copyButton').addEventListener('click', function(event) {
                    event.preventDefault(); // Prevent the default action of the link
                    const url = this.href;
                    navigator.clipboard.writeText(url).then(function() {
                        alert('Copied URL: ' + url);
                    }, function(err) {
                        console.error('Failed to copy the URL: ', err);
                    });
                });
            </script>
        @endpush
</x-admin-app-layout>

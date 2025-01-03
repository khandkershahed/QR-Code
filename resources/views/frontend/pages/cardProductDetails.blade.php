<x-frontend-app-layout :title="'Card Product Details || GoFlixza - Your Hub for QR, Bar Codes & NFC V.Cards'">
    <style>
        .nav-tabs .nav-item.show .cst-links,
        .nav-tabs .cst-links.active {
            background-color: #2c16aa;
            width: 150px;
            color: white;
            border-radius: 0;
        }

        .nav-tabs .nav-link {
            width: 150px;
            background-color: #eee;
            color: black;
            border-radius: 0;
        }

        .badges-im {
            padding-top: 3rem;
            padding-bottom: 1rem;
        }
    </style>
    <section class="page-banner-area overlay py-120 rpy-120 rel z-1 bgs-cover text-center"
        style="
      background-image: url({{ asset('images/shop-page-banner-.jpg') }});
    ">
        <div class="container">
            <div class="banner-inner pt-70 rpt-60 text-black">
                <h1 class="page-title aos-init aos-animate" data-aos="fade-up" data-aos-duration="1500"
                    data-aos-offset="50">
                    {{ $cardProduct->name }}
                </h1>
                <p>{{ $cardProduct->short_description }}</p>
            </div>
        </div>
    </section>
    <section>
        <form action="{{ route('card.checkout', $cardProduct->slug) }}" method="GET" id="product-form">
            @csrf <!-- Add CSRF token for security -->
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-7">
                        <div class="py-120">
                            <img class="img-fluid" src="{{ asset('storage/' . $cardProduct->image) }}" alt="">
                        </div>
                    </div>
                    <div class="col-lg-5 shadow-sm">
                        <div class="row align-items-center pt-30">
                            <div class="col-lg-8">
                                <h3 class="mb-0">{{ $cardProduct->name }}</h3>
                            </div>
                            <div class="col-lg-4">
                                <h3 class="mb-0 text-end">
                                    @if ($cardProduct->currency === 'eur')
                                        €
                                    @elseif($cardProduct->currency === 'gbp')
                                        £
                                    @elseif($cardProduct->currency === 'usd')
                                        $
                                    @else
                                        $
                                    @endif
                                    {{ $cardProduct->package_price }}.00
                                </h3>
                            </div>
                        </div>
                        <div class="row align-items-center">
                            <div class="col-lg-12">
                                <div class="py-10">
                                    <hr>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <ul class="pb-4">
                                            @foreach (json_decode($cardProduct->plan_descriptions ?? '[]') as $description)
                                                <li>
                                                    <i class="fa-regular fa-circle-check pe-2 text-success"></i>
                                                    {{ $description }}
                                                </li>
                                            @endforeach
                                        </ul>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="py-10">
                                            <hr>
                                        </div>
                                    </div>
                                    <div class="col-lg-8">
                                        <label for="">Card Type?</label>
                                        <select class="form-select" aria-label="Default select example">
                                            <option selected>What Type Of NFC Card You Want?</option>
                                            <option value="metal">Metal</option>
                                            <option value="plastic">Plastic</option>
                                            <option value="sliver">Silver</option>
                                            <option value="gold">Gold</option>
                                        </select>
                                    </div>
                                    <div class="col-lg-4">
                                        <label for="">Additional NFC Card?</label>
                                        {{-- Quantity Box --}}
                                        <div class="input-group quantity-box">
                                            <button class="btn btn-outline-secondary minus-btn" type="button"
                                                style="height: 50px;">
                                                <i class="fa-solid fa-minus"></i>
                                            </button>
                                            <input type="number" class="form-control text-center quantity-input"
                                                value="0" min="0"
                                                style="height: 50px; background-color: #f1f5ff">
                                            <button class="btn btn-outline-secondary plus-btn" type="button"
                                                style="height: 50px;">
                                                <i class="fa-solid fa-plus"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <div class="pt-4">
                                    <div class="table-responsive">
                                        <table class="table">
                                            <thead style="background-color: #eee">
                                                <tr>
                                                    <th>SL</th>
                                                    <th>Package Details</th>
                                                    <th>QTY</th>
                                                    <th class="text-end">Price</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>1</td>
                                                    <td>1 VCard & 1 NFC Card</td>
                                                    <td>1</td>
                                                    <td class="main-price text-end"
                                                        data-unit-price="{{ $cardProduct->package_price }}">
                                                        @if ($cardProduct->currency === 'eur')
                                                            €
                                                        @elseif($cardProduct->currency === 'gbp')
                                                            £
                                                        @elseif($cardProduct->currency === 'usd')
                                                            $
                                                        @else
                                                            $
                                                        @endif
                                                        {{ $cardProduct->package_price }}.00
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>2</td>
                                                    <td>Additional NFC Card Only</td>
                                                    <td class="quantity"> {{-- Quantity will be updated here --}} </td>
                                                    <td class="aditional-price text-end"
                                                        data-unit-price="{{ $cardProduct->price }}">
                                                        @if ($cardProduct->currency === 'eur')
                                                            €
                                                        @elseif($cardProduct->currency === 'gbp')
                                                            £
                                                        @elseif($cardProduct->currency === 'usd')
                                                            $
                                                        @else
                                                            $
                                                        @endif
                                                        0.00
                                                    </td>
                                                </tr>
                                            </tbody>
                                            <tfoot style="background-color: #eee">
                                                <tr>
                                                    <td colspan="3">Sub Total</td>
                                                    <td class="subtotal text-end">
                                                        @if ($cardProduct->currency === 'eur')
                                                            €
                                                        @elseif($cardProduct->currency === 'gbp')
                                                            £
                                                        @elseif($cardProduct->currency === 'usd')
                                                            $
                                                        @else
                                                            $
                                                        @endif
                                                        {{ $cardProduct->package_price }}.00
                                                    </td>
                                                </tr>
                                            </tfoot>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12 px-0">
                                <div>
                                    <input type="hidden" name="subtotal" id="hidden-subtotal">
                                    <input type="hidden" name="quantity" id="hidden-quantity">
                                    <button type="submit" class="theme-btn style-two rounded-0 w-100"
                                        id="purchase-btn">Purchase</button>
                                    <div class="pt-3">
                                        <p class="text-center w-75 mx-auto" style="line-height: 1.3;">
                                            {{ $cardProduct->note }}</p>
                                    </div>
                                    <div>
                                        <img src="{{ asset('images/social-icons.webp') }}" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </section>
    <section class="py-120 pt-50">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs d-flex  justify-content-center align-items-center" id="myTab"
                        role="tablist">
                        <li class="nav-item me-2" role="presentation">
                            <button class="nav-link cst-links active" id="description-tab" data-bs-toggle="tab"
                                data-bs-target="#description" type="button" role="tab"
                                aria-controls="description" aria-selected="true">
                                Description
                            </button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link cst-links" id="shipping-tab" data-bs-toggle="tab"
                                data-bs-target="#shipping" type="button" role="tab" aria-controls="shipping"
                                aria-selected="false">
                                Shipping
                            </button>
                        </li>
                    </ul>

                    <!-- Tab panes -->
                    <div class="tab-content">
                        <div class="tab-pane active" id="description" role="tabpanel"
                            aria-labelledby="description-tab">
                            <div class="py-2">
                                <p>{{ $cardProduct->description }}</p>
                            </div>
                        </div>
                        <div class="tab-pane" id="shipping" role="tabpanel" aria-labelledby="shipping-tab">
                            <div class="py-2">
                                <p>{{ $cardProduct->shipping_description }}</p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    @push('scripts')
        {{-- Update NFC Each Card Price --}}
        {{-- <script>
            document.addEventListener("DOMContentLoaded", function() {
                const quantityInput = document.querySelector(".quantity-input");
                const quantityContainer = document.querySelector(".quantity");
                const priceCell = document.querySelector(".aditional-price");
                const subtotalCell = document.querySelector(".subtotal");
                const unitPrice = parseFloat(priceCell.getAttribute("data-unit-price"));
                const mainPrice = parseFloat(document.querySelector(".main-price").getAttribute("data-unit-price"));

                const updateSubtotal = () => {
                    const quantity = parseInt(quantityInput.value) || 1;
                    const additionalPrice = quantity * unitPrice;
                    const subtotal = mainPrice + additionalPrice;

                    priceCell.textContent = `${additionalPrice.toFixed(2)}`;
                    subtotalCell.textContent = `${subtotal.toFixed(2)}`;
                    quantityContainer.textContent = `${quantity}`;
                };

                // Handling the plus button
                document.querySelector(".plus-btn").addEventListener("click", () => {
                    // Increase the value by 1
                    quantityInput.value = parseInt(quantityInput.value || 0) + 1;
                    // Ensure quantityInput value doesn't go below 1
                    if (quantityInput.value < 1) {
                        quantityInput.value = 1;
                    }
                    updateSubtotal();
                });

                // Handling the minus button
                document.querySelector(".minus-btn").addEventListener("click", () => {
                    // Decrease the value by 1, but not below 1
                    quantityInput.value = Math.max(1, parseInt(quantityInput.value || 1) - 1);
                    updateSubtotal();
                });

                // Handling direct input changes (if someone manually changes the value)
                quantityInput.addEventListener("input", () => {
                    const quantity = parseInt(quantityInput.value) || 1;
                    // Ensure the value stays positive and at least 1
                    if (quantity < 0) {
                        quantityInput.value = 0;
                    }
                    updateSubtotal();
                });
            });
        </script> --}}
        <script>
            document.addEventListener("DOMContentLoaded", function() {
                const quantityInput = document.querySelector(".quantity-input");
                const quantityContainer = document.querySelector(".quantity");
                const priceCell = document.querySelector(".aditional-price");
                const subtotalCell = document.querySelector(".subtotal");
                const unitPrice = parseFloat(priceCell.getAttribute("data-unit-price"));
                const mainPrice = parseFloat(document.querySelector(".main-price").getAttribute("data-unit-price"));

                const updateSubtotal = () => {
                    const quantity = parseInt(quantityInput.value) || 1;
                    const additionalPrice = quantity * unitPrice;
                    const subtotal = mainPrice + additionalPrice;

                    priceCell.textContent = `${additionalPrice.toFixed(2)}`;
                    subtotalCell.textContent = `${subtotal.toFixed(2)}`;
                    quantityContainer.textContent = `${quantity}`;

                    // Update hidden fields
                    document.getElementById("hidden-subtotal").value = subtotal.toFixed(2);
                    document.getElementById("hidden-quantity").value = quantity;
                };

                // Handling the plus button
                document.querySelector(".plus-btn").addEventListener("click", () => {
                    quantityInput.value = parseInt(quantityInput.value || 0) + 1;
                    updateSubtotal();
                });

                // Handling the minus button
                document.querySelector(".minus-btn").addEventListener("click", () => {
                    quantityInput.value = Math.max(1, parseInt(quantityInput.value || 1) - 1);
                    updateSubtotal();
                });

                // Handling direct input changes
                quantityInput.addEventListener("input", updateSubtotal);

                // Initialize the subtotal on page load
                updateSubtotal();
            });
        </script>
    @endpush
</x-frontend-app-layout>

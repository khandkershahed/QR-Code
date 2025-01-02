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
    <section class="">
        <form action="">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-7">
                        <div class="py-120">
                            <img class="img-fluid" src="{{ asset('storage/' . $cardProduct->image) }}" alt="">
                        </div>
                    </div>
                    <div class="col-lg-5 shadow-sm">
                        <div class="row align-items-center">
                            <div class="col-lg-8">
                                <div class="">
                                    <p class="badges-im"><span class="text-primary">{{ $cardProduct->slug }}</span></p>
                                </div>
                                <h3 class="mb-0">{{ $cardProduct->name }}</h3>
                                <ul class="pt-3">
                                    <li><i class="fa-regular fa-circle-check pe-2 text-success"></i>2 Virtual Card
                                        Include</li>
                                    <li><i class="fa-regular fa-circle-check pe-2 text-success"></i>1+ Near-field
                                        Communication Card Include</li>
                                    <li><i class="fa-regular fa-circle-check pe-2 text-success"></i>Fast Delivery
                                        Service</li>
                                    <li><i class="fa-regular fa-circle-check pe-2 text-success"></i>24/7 Customer
                                        Support</li>
                                    <li><i class="fa-regular fa-circle-check pe-2 text-success"></i>Customizable Card
                                        Designs</li>
                                </ul>
                            </div>
                            <div class="col-lg-4">
                                <h3 class="mb-0 text-end">
                                    @if ($cardProduct->currency === 'eur')
                                        €
                                    @elseif($cardProduct->currency === 'gbp')
                                        £
                                    @elseif($cardProduct->currency === 'usd')
                                        $
                                    @endif
                                    {{ $cardProduct->price }}.00
                                </h3>
                                <h5 class="text-danger text-end pt-2"><del>$5,00.00</del></h5>
                            </div>
                            <div class="col-lg-12">
                                <div class="py-10">
                                    <hr>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="row">
                                    <div class="col-lg-4">
                                        <label for="">Card Type?</label>
                                        <select class="form-select" aria-label="Default select example">
                                            <option selected>Your Want?</option>
                                            <option value="metal">Metal</option>
                                            <option value="plastic">Plastic</option>
                                            <option value="sliver">Silver</option>
                                            <option value="gold">Gold</option>
                                        </select>
                                    </div>
                                    <div class="col-lg-4">
                                        <label for="">How Much V-Card?</label>
                                        <select class="form-select" aria-label="Default select example">
                                            <option selected>You Want?</option>
                                            <option value="1">One</option>
                                            <option value="2">Two</option>
                                            <option value="3">Three</option>
                                            <option value="4">Four</option>
                                            <option value="5">Five</option>
                                        </select>
                                    </div>
                                    <div class="col-lg-4">
                                        <label for="">How much NFC?</label>
                                        {{-- Quantity Box --}}
                                        <div class="input-group quantity-box">
                                            <button class="btn btn-outline-secondary minus-btn" type="button"
                                                style="height: 50px;">
                                                <i class="fa-solid fa-minus"></i>
                                            </button>
                                            <input type="number"
                                                class="form-control text-center quantity-input bg-light" value="1"
                                                min="1" style="height: 50px;">
                                            <button class="btn btn-outline-secondary plus-btn" type="button"
                                                style="height: 50px;">
                                                <i class="fa-solid fa-plus"></i>
                                            </button>
                                        </div>
                                    </div>

                                </div>
                                <div class="pt-4">
                                    <p class="fw-bold">{{ $cardProduct->short_description }}</p>
                                </div>
                            </div>
                            <div class="col-lg-12 px-0">
                                <div>
                                    <a href="{{ route('card.payment') }}"
                                        class="theme-btn style-two rounded-0 w-100">Purchase</a>
                                    <div class="pt-3">
                                        <p class="text-center" style="line-height: 1.3;">Please note production time is
                                            30-45 days. <br>
                                            You will receive a mockup after you order.</p>
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
                                data-bs-target="#description" type="button" role="tab" aria-controls="description"
                                aria-selected="true">
                                Description
                            </button>
                        </li>
                        <li class="nav-item me-2" role="presentation">
                            <button class="nav-link cst-links" id="note-tab" data-bs-toggle="tab"
                                data-bs-target="#note" type="button" role="tab" aria-controls="note"
                                aria-selected="false">
                                Note
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
                        <div class="tab-pane" id="note" role="tabpanel" aria-labelledby="note-tab">
                            <div class="py-2">
                                <p>{{ $cardProduct->note }}</p>
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
        <script>
            document.addEventListener("DOMContentLoaded", function() {
                const minusButtons = document.querySelectorAll(".minus-btn");
                const plusButtons = document.querySelectorAll(".plus-btn");

                minusButtons.forEach(button => {
                    button.addEventListener("click", function() {
                        const input = this.nextElementSibling;
                        const currentValue = parseInt(input.value) || 1;
                        if (currentValue > 1) {
                            input.value = currentValue - 1;
                        }
                    });
                });

                plusButtons.forEach(button => {
                    button.addEventListener("click", function() {
                        const input = this.previousElementSibling;
                        const currentValue = parseInt(input.value) || 1;
                        input.value = currentValue + 1;
                    });
                });
            });
        </script>
    @endpush
</x-frontend-app-layout>

<x-app-layout :title="'Upgrade your Plan - User Panel'">
    <div id="kt_app_content_container" class="app-container  mt-5">
        <div class="row">
            <div class="col-lg-12">
                <div class="card p-0" id="kt_pricing">
                    <div class="card-body p-0">
                        @if ($subscription)
                            <div class="row p-5 pb-0">
                                <div class="col-lg-12">
                                    <div
                                        class="notice d-flex bg-light-warning rounded border-warning border border-dashed  align-items-center  p-6">
                                        <div>
                                            <i class="fa-solid fa-bank fs-2tx text-primary me-4">
                                            </i>
                                        </div>
                                        <div class="d-flex flex-stack flex-grow-1 flex-wrap flex-md-nowrap">
                                            <div class="mb-3 mb-md-0 fw-semibold">
                                                <h4 class="text-gray-900 fw-bold">Your Current Plan
                                                    <span style="color: orangered">
                                                        @if (!empty($subscription))
                                                            {{ $subscription->plan->title }}
                                                        @else
                                                            Trial Period
                                                        @endif
                                                    </span>
                                                </h4>

                                                <p class="text-gray-900 fw-bold mt-3"> Subscription ends at :
                                                    {{ $subscription->subscription_ends_at->format('d M, Y') }}</p>

                                                <div class="fs-6 text-gray-700 pe-7">Please check our plans and upgrade
                                                    if needed.</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @else
                            <div class="row">
                                <div class="col-lg-12">
                                    <div
                                        class="notice d-flex bg-light-warning rounded border-warning border border-dashed  p-6">

                                        <i class="fa-solid fa-bank fs-2tx text-primary me-4"></i>

                                        <div class="d-flex flex-stack flex-grow-1 flex-wrap flex-md-nowrap">
                                            <div class="mb-3 mb-md-0 fw-semibold">
                                                <h4 class="text-warning-900 fw-bold">You Have Not Subscribe To Any Plan
                                                </h4>
                                                <div class="fs-6 text-gray-700 pe-7">Please check our plans and
                                                    subscribe to enjoy our features.</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endif
                        <div class="card">
                            <div
                                class="card-header p-5 justify-content-center align-items-center rounded-0 bg-info mt-5 d-flex">
                                <div class="text-center w-100">
                                    <span class="mb-0 mt-0 fs-2 text-white">Upgrade Your Plan!</span>
                                    <p class="text-white mt-2 mb-0">View and manage Upgrade Your Plan
                                        information on this page.</p>
                                    <div class="text-white fw-semibold fs-5">
                                        If you need more info about our pricing, please check <a
                                            href="{{ route('pricing') }}" class="link-primary fw-bold">Pricing
                                            Guidelines</a>.
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="d-flex flex-column">
                                    <div class="nav-group nav-group-outline mx-auto my-8">
                                        <ul class="nav nav-tabs nav-line-tabs border-0">
                                            <li class="nav-item">
                                                <a class="nav-link btn text-black btn-active btn-active-secondary px-6 py-3 me-2 active"
                                                    data-bs-toggle="tab" href="#nfc_tab">NFC</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link btn text-black btn-active btn-active-secondary px-6 py-3"
                                                    data-bs-toggle="tab" href="#qr_tab">QR</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link btn text-black btn-active btn-active-secondary px-6 py-3"
                                                    data-bs-toggle="tab" href="#barcode_tab">Bar Code</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="tab-content" id="myTabContent">
                                        <div class="tab-pane fade show active" id="nfc_tab" role="tabpanel">
                                            <div class="row">
                                                @foreach ($nfc_plans as $nfc_plan)
                                                    <div class="col-xl-3">
                                                        <div class="d-flex h-100 align-items-center">
                                                            <div
                                                                class="w-100 d-flex flex-column flex-center rounded-3 bg-light bg-opacity-75 py-15 px-10">
                                                                <div class="mb-7 text-center">
                                                                    <h1 class="text-gray-900 mb-5 fw-bolder">
                                                                        {{ $nfc_plan->title }}</h1>
                                                                    <div class="text-center">
                                                                        <span
                                                                            class="mb-2 text-primary">{{ $nfc_plan->currency }}</span>
                                                                        <span class="fs-3x fw-bold text-primary"
                                                                            data-kt-plan-price-month="39"
                                                                            data-kt-plan-price-annual="399">
                                                                            {{ $nfc_plan->price }}</span>

                                                                        <span class="fs-7 fw-semibold opacity-50">/
                                                                            <span data-kt-element="period">Year</span>
                                                                        </span>
                                                                    </div>
                                                                </div>

                                                                <div class="w-100 mb-10">
                                                                    @foreach (json_decode($nfc_plan->descriptions ?? '[]') as $description)
                                                                        <div class="d-flex align-items-center mb-5">
                                                                            <span
                                                                                class="fw-semibold fs-6 text-gray-800 flex-grow-1 pe-3">
                                                                                {{ $description }}</span>
                                                                            <i
                                                                                class="fa-solid fa-check-circle fs-1 text-success"><span
                                                                                    class="path1"></span><span
                                                                                    class="path2"></span></i>
                                                                        </div>
                                                                    @endforeach
                                                                </div>

                                                                @if (!empty(optional($nfc_subscription)->plan) && optional($nfc_subscription->plan)->id == $nfc_plan->id)
                                                                    <a href="javascript:void(0)"
                                                                        class="btn btn-sm btn-secondary">Purchased</a>
                                                                @else
                                                                    <a href="{{ route('user.subscribe.post', $nfc_plan->slug) }}"
                                                                        class="btn btn-sm btn-primary">Select</a>
                                                                @endif
                                                            </div>
                                                        </div>
                                                    </div>
                                                @endforeach
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="qr_tab" role="tabpanel">
                                            <div class="row">
                                                @foreach ($qr_plans as $qr_plan)
                                                    <div class="col-xl-3">
                                                        <div class="d-flex h-100 align-items-center">
                                                            <div
                                                                class="w-100 d-flex flex-column flex-center rounded-3 bg-light bg-opacity-75 py-15 px-10">
                                                                <div class="mb-7 text-center">

                                                                    <h1 class="text-gray-900 mb-5 fw-bolder">
                                                                        {{ $qr_plan->title }}</h1>
                                                                    <div class="text-center">
                                                                        <span
                                                                            class="mb-2 text-primary">{{ $qr_plan->currency }}</span>

                                                                        <span class="fs-3x fw-bold text-primary"
                                                                            data-kt-plan-price-month="39"
                                                                            data-kt-plan-price-annual="399">
                                                                            {{ $qr_plan->price }}</span>

                                                                        <span class="fs-7 fw-semibold opacity-50">/
                                                                            <span data-kt-element="period">Mon</span>
                                                                        </span>
                                                                    </div>
                                                                </div>

                                                                <div class="w-100 mb-10">
                                                                    @foreach (json_decode($qr_plan->descriptions ?? '[]') as $description)
                                                                        <div class="d-flex align-items-center mb-5">
                                                                            <span
                                                                                class="fw-semibold fs-6 text-gray-800 flex-grow-1 pe-3">
                                                                                {{ $description }}</span>
                                                                            <i
                                                                                class="fa-solid fa-check-circle fs-1 text-success"><span
                                                                                    class="path1"></span><span
                                                                                    class="path2"></span></i>
                                                                        </div>
                                                                    @endforeach
                                                                </div>
                                                                @if (!empty(optional($qr_subscription)->plan) && optional($qr_subscription->plan)->id == $qr_plan->id)
                                                                    <a href="javascript:void(0)"
                                                                        class="btn btn-sm btn-secondary">Purchased</a>
                                                                @else
                                                                    <a href="{{ route('user.subscribe.post', $qr_plan->slug) }}"
                                                                        class="btn btn-sm btn-primary">Select</a>
                                                                @endif

                                                            </div>
                                                        </div>
                                                    </div>
                                                @endforeach
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="barcode_tab" role="tabpanel">
                                            <div class="row">
                                                @foreach ($barcode_plans as $barcode_plan)
                                                    <div class="col-xl-3">
                                                        <div class="d-flex h-100 align-items-center">
                                                            <div
                                                                class="w-100 d-flex flex-column flex-center rounded-3 bg-light bg-opacity-75 py-15 px-10">
                                                                <div class="mb-7 text-center">

                                                                    <h1 class="text-gray-900 mb-5 fw-bolder">
                                                                        {{ $barcode_plan->title }}</h1>
                                                                    <div class="text-center">
                                                                        <span
                                                                            class="mb-2 text-primary">{{ $barcode_plan->currency }}</span>

                                                                        <span class="fs-3x fw-bold text-primary"
                                                                            data-kt-plan-price-month="39"
                                                                            data-kt-plan-price-annual="399">
                                                                            {{ $barcode_plan->price }}</span>

                                                                        <span class="fs-7 fw-semibold opacity-50">/
                                                                            <span data-kt-element="period">Mon</span>
                                                                        </span>
                                                                    </div>
                                                                </div>

                                                                <div class="w-100 mb-10">
                                                                    @foreach (json_decode($barcode_plan->descriptions ?? '[]') as $description)
                                                                        <div class="d-flex align-items-center mb-5">
                                                                            <span
                                                                                class="fw-semibold fs-6 text-gray-800 flex-grow-1 pe-3">
                                                                                {{ $description }}</span>
                                                                            <i
                                                                                class="fa-solid fa-check-circle fs-1 text-success">
                                                                                <span class="path1"></span>
                                                                                <span class="path2"></span>
                                                                            </i>
                                                                        </div>
                                                                    @endforeach
                                                                </div>
                                                                @if (!empty(optional($barcode_subscription)->plan) && optional($barcode_subscription->plan)->id == $barcode_plan->id)
                                                                    <a href="javascript:void(0)"
                                                                        class="btn btn-sm btn-secondary">Purchased</a>
                                                                @else
                                                                    <a href="{{ route('user.subscribe.post', $barcode_plan->slug) }}"
                                                                        class="btn btn-sm btn-primary">Select</a>
                                                                @endif
                                                            </div>
                                                        </div>
                                                    </div>
                                                @endforeach
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
</x-app-layout>

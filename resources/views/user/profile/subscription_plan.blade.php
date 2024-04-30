<x-app-layout :title="'My Subscription Plan'">
    <div class="row">
        <div class="col-lg-12">
            <div class="card card-p-0 card-flush p-3 mt-10">
                <div class="card-body">
                    {{-- @if ($subscription == null)
                        <div class="row">
                            <div class="col-lg-6 offset-lg-3">
                                <h4 class="text-danger">You have not subscribed to any plan.</h4>
                            </div>
                        </div>
                        <div class="row">
                            <div>
                                <div class="card-body p-lg-17">
                                    <div class="d-flex flex-column">
                                        <div class="mb-13 text-center">
                                            <h1 class="fs-2hx fw-bold mb-5">Choose Your Plan</h1>

                                            <div class="text-gray-600 fw-semibold fs-5">
                                                If you need more info about our pricing, please check <a href="#"
                                                    class="link-primary fw-bold">Pricing Guidelines</a>.
                                            </div>
                                        </div>

                                        <div class="nav-group nav-group-outline mx-auto mb-15" data-kt-buttons="true"
                                            data-kt-initialized="1">
                                            <button
                                                class="btn btn-color-gray-600 btn-active btn-active-secondary px-6 py-3 me-2 active"
                                                data-kt-plan="month">
                                                Monthly
                                            </button>

                                            <button
                                                class="btn btn-color-gray-600 btn-active btn-active-secondary px-6 py-3"
                                                data-kt-plan="annual">
                                                Annual
                                            </button>
                                        </div>

                                        <div class="row g-10">
                                            @foreach ($monthly_plans as $monthly_plan)
                                                <div class="col-xl-4">
                                                    <div class="d-flex h-100 align-items-center">
                                                        <div
                                                            class="w-100 d-flex flex-column flex-center rounded-3 bg-light bg-opacity-75 py-15 px-10">
                                                            <div class="mb-7 text-center">
                                                                <h1 class="text-gray-900 mb-5 fw-bolder">{{ $monthly_plan->title }}</h1>


                                                                <div class="text-center">
                                                                    <span class="mb-2 text-primary">{{ $monthly_plan->currency }}</span>

                                                                    <span class="fs-3x fw-bold text-primary"
                                                                        data-kt-plan-price-month="39"
                                                                        data-kt-plan-price-annual="399">
                                                                        {{ $monthly_plan->price }}</span>

                                                                    <span class="fs-7 fw-semibold opacity-50">/
                                                                        <span data-kt-element="period">Mon</span>
                                                                    </span>
                                                                </div>
                                                            </div>

                                                            <div class="w-100 mb-10">
                                                                @foreach (json_decode($monthly_plan->descriptions ?? '[]') as $description)
                                                                    <div class="d-flex align-items-center mb-5">
                                                                        <span
                                                                            class="fw-semibold fs-6 text-gray-800 flex-grow-1 pe-3">
                                                                            {{ $description }}</span>
                                                                        <i class="ki-duotone ki-check-circle fs-1 text-success"><span
                                                                                class="path1"></span><span
                                                                                class="path2"></span></i>
                                                                    </div>
                                                                @endforeach
                                                            </div>

                                                            <a href="{{ route('user.subscribe.post', $monthly_plan->slug) }}" class="btn btn-sm btn-primary">Select</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @else

                    @endif --}}

                    <div class="row">
                        <div class="row">
                            <div class="col-lg-8 offset-lg-2">
                                <div class="row">
                                    <div class="col-lg-4">
                                        Plan name:
                                    </div>
                                    <div class="col-lg-4"></div>
                                    <div class="col-lg-4"></div>
                                    <div class="col-lg-4"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

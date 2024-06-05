<x-app-layout :title="'My Subscription Plan'">
    <div id="kt_app_content_container" class="app-container  container-xxl ">
        <div class="row">
            <div class="col-lg-12">
                <div class="card" id="kt_pricing">
                    <div class="card-body p-lg-17">
                        @if (count($subscriptions) > 0)
                            <div class="row">
                                <table class="table table-striped align-middle table-row-dashed fs-6 gy-5 mb-0">
                                    <thead>
                                        <tr class="text-start text-gray-400 fw-bolder fs-7 text-uppercase gs-0">
                                            <th width="5%" class="ps-4">Sl</th>
                                            <th width="20%">Plan Name</th>
                                            <th width="20%">Subscription Name </th>
                                            <th width="15%">Price</th>
                                            <th width="20%">Start Date</th>
                                            <th width="20%">End Date</th>
                                            {{-- <th class="text-end" width="10%">Action</th> --}}
                                        </tr>
                                    </thead>

                                    <tbody class="fw-bold text-gray-600">
                                        @foreach ($subscriptions as $subscription)
                                            <tr>
                                                <td class="ps-4">{{ $loop->iteration }}</td>
                                                <td>
                                                    {{ $subscription->plan->title }}
                                                </td>
                                                <td>{{ $subscription->name }}</td>
                                                <td>{{ $subscription->plan->price }}</td>
                                                <td>{{ $subscription->created_at }}</td>

                                                <td>
                                                    {{ $subscription->ends_at }}
                                                </td>
                                                {{-- <td class="text-end">
                                                    <a href="{{ route('admin.plans.edit', $plan->id) }}"
                                                        class="btn btn-icon btn-active-light-primary w-30px h-30px me-3">
                                                        <span class="svg-icon svg-icon-3">
                                                            <i class="fas fa-pen"></i>
                                                        </span>
                                                    </a>
                                                    <a href="{{ route('admin.plans.destroy', $plan->id) }}"
                                                        class="btn btn-icon btn-active-light-danger w-30px h-30px delete">
                                                        <span class="svg-icon svg-icon-3">
                                                            <i class="fas fa-trash-alt"></i>
                                                        </span>
                                                    </a>
                                                </td> --}}
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        @else
                            <div class="row">
                                <div class="col-lg-12">
                                    <div
                                        class="notice d-flex bg-light-warning rounded border-warning border border-dashed  p-6">
                                        <!--begin::Icon-->
                                        <i class="ki-duotone ki-bank fs-2tx text-primary me-4"><span
                                                class="path1"></span><span class="path2"></span></i> <!--end::Icon-->

                                        <!--begin::Wrapper-->
                                        <div class="d-flex flex-stack flex-grow-1 flex-wrap flex-md-nowrap">
                                            <!--begin::Content-->
                                            <div class="mb-3 mb-md-0 fw-semibold">
                                                <h4 class="text-warning-900 fw-bold">You Have Not Subscribe To Any Plan
                                                </h4>

                                                <div class="fs-6 text-gray-700 pe-7">Withdraw money securily to your
                                                    bank account. Commision is $25 per transaction under $50,000</div>
                                            </div>
                                            <!--end::Content-->

                                            <!--begin::Action-->
                                            <a href="#"
                                                class="btn btn-warning px-6 align-self-center text-nowrap">
                                                Upgrade Plan</a>
                                            <!--end::Action-->
                                        </div>
                                        <!--end::Wrapper-->
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div>
                                    <div class="card-body p-lg-17">
                                        <div class="d-flex flex-column">
                                            <div class="mb-13 text-center">
                                                <h1 class="fs-2hx fw-bold mb-5">Choose Your Plan</h1>

                                                <div class="text-gray-600 fw-semibold fs-5">
                                                    If you need more info about our pricing, please check <a
                                                        href="#" class="link-primary fw-bold">Pricing
                                                        Guidelines</a>.
                                                </div>
                                            </div>

                                            <div class="nav-group nav-group-outline mx-auto mb-15"
                                                data-kt-buttons="true" data-kt-initialized="1">
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
                                                                    <p>Startup</p>
                                                                    <h1 class="text-gray-900 mb-5 fw-bolder">
                                                                        {{ $monthly_plan->title }}</h1>
                                                                    <div class="text-center">
                                                                        <span
                                                                            class="mb-2 text-primary">{{ $monthly_plan->currency }}</span>

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
                                                                            <i
                                                                                class="ki-duotone ki-check-circle fs-1 text-success"><span
                                                                                    class="path1"></span><span
                                                                                    class="path2"></span></i>
                                                                        </div>
                                                                    @endforeach
                                                                </div>

                                                                <a href="{{ route('user.subscribe.post', $monthly_plan->slug) }}"
                                                                    class="btn btn-sm btn-primary">Select</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

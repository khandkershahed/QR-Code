<x-admin-app-layout :title="'User Subscriptions List'">
    <div class="card card-flush my-15">
        <div class="card-header mt-6">
            <div class="card-title">
                <div class="d-flex align-items-center position-relative my-1 me-5">
                    <span class="svg-icon svg-icon-1 position-absolute ms-6">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none">
                            <rect opacity="0.5" x="17.0365" y="15.1223" width="8.15546" height="2" rx="1"
                                transform="rotate(45 17.0365 15.1223)" fill="currentColor" />
                            <path
                                d="M11 19C6.55556 19 3 15.4444 3 11C3 6.55556 6.55556 3 11 3C15.4444 3 19 6.55556 19 11C19 15.4444 15.4444 19 11 19ZM11 5C7.53333 5 5 7.53333 5 11C5 14.4667 7.53333 17 11 17C14.4667 17 17 14.4667 17 11C17 7.53333 14.4667 5 11 5Z"
                                fill="currentColor" />
                        </svg>
                    </span>
                    <input type="text" data-kt-table-filter="search"
                        class="form-control form-control-solid w-250px ps-15" placeholder="Search" />
                </div>
            </div>
            <div class="card-toolbar">
                {{-- <a href="{{ route('admin.permission.create') }}" class="btn btn-light-primary rounded-2">
                    <span class="svg-icon svg-icon-3">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none">
                            <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="5"
                                fill="currentColor" />
                            <rect x="10.8891" y="17.8033" width="12" height="2" rx="1"
                                transform="rotate(-90 10.8891 17.8033)" fill="currentColor" />
                            <rect x="6.01041" y="10.9247" width="12" height="2" rx="1"
                                fill="currentColor" />
                        </svg>
                    </span>
                </a> --}}
            </div>
        </div>
        <div class="card-body pt-0">
            <table class="table table-striped align-middle table-row-dashed fs-6 gy-5 mb-0">
                <thead>
                    <tr class="text-start text-gray-400 fw-bolder fs-7 text-uppercase gs-0">
                        <th width="5%" class="ps-4">Sl</th>
                        <th width="20%">Plan Name</th>
                        <th width="25%">User Name</th>
                        <th width="15%">Price</th>
                        <th width="15%">Start Date</th>
                        <th width="15%">End Date</th>
                        {{-- <th class="text-end" width="10%">Action</th> --}}
                    </tr>
                </thead>

                <tbody class="fw-bold text-gray-600">
                    @if (count($subscriptions) > 0)
                        @foreach ($subscriptions as $subscription)
                            <tr>
                                <td class="ps-4">{{ $loop->iteration }}</td>
                                <td>{{ $subscription->plan->title }}</td>
                                <td>
                                    @if ($subscription->user)
                                        {{ $subscription->user->name }}
                                    @else
                                        N/A
                                    @endif
                                </td>
                                <td>{{ $subscription->plan->price }}</td>
                                <td>{{ $subscription->created_at }}</td>
                                <td>{{ $subscription->subscription_ends_at }}</td>
                            </tr>
                        @endforeach
                    @else
                        <tr>
                            <td class="text-center" colspan="6">No active subscriptions found.</td>
                        </tr>
                    @endif

                </tbody>
            </table>
        </div>
    </div>
</x-admin-app-layout>

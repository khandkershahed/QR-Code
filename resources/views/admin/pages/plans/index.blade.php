<x-admin-app-layout :title="'Plans Management - Admin Panel'">
    <div class="card my-10 rounded-0">
        <div class="card-header p-5 align-items-center rounded-0 bg-info m-0">
            <div>
                <h1 class="mb-0 mt-0 card-title fs-2 text-white">All Plans!</h1>
                <p class="text-white mt-2 mb-0">View and manage all plans information in this page.</p>
            </div>
            <div>
                <a href="{{ route('admin.plans.create') }}"
                    class="btn btn-white btn-active-light-warning text-hover-inverse-white" data-bs-toggle="tooltip"
                    data-bs-dismiss="click" title="Want To Add New Pricing Plan">
                    <i class="fa-solid fa-user-plus"></i> Add Plan
                </a>
            </div>
        </div>
        <div class="card-body p-0 rounded-0">
            <table class="table my-datatable table-striped table-row-bordered mt-0">
                <thead>
                    <tr class="text-start bg-info text-white fw-bolder fs-7 text-uppercase gs-0">
                        <th class="text-center">Sl</th>
                        <th>Title</th>
                        <th>Price</th>
                        <th>Type</th>
                        <th>Currency</th>
                        <th>Status</th>
                        <th class="text-end pe-15">Action</th>
                    </tr>
                </thead>
                <tbody class="fw-bold text-gray-600" style="vertical-align: middle;">
                    @foreach ($plans as $plan)
                        <tr>
                            <td class="text-center">{{ $loop->iteration }}</td>
                            <td>
                                {{ $plan->title }}
                            </td>
                            <td>{{ $plan->price }}</td>
                            <td>{{ $plan->type }}</td>
                            <td>{{ $plan->currency }}</td>

                            <td>
                                @if ($plan->status == 'active')
                                    <span class="badge badge-success">Active</span>
                                @else
                                    <span class="badge badge-danger">In Active</span>
                                @endif
                            </td>
                            <td class="">
                                <div class="d-flex justify-content-end me-4">
                                    <a href="{{ route('admin.plans.edit', $plan->id) }}"
                                        class="btn btn-sm fw-bold btn-info me-2 pe-2 ps-3">
                                        <i class="fa-solid fa-pen"></i>
                                    </a>
                                    <a href="#" class="btn btn-sm fw-bold btn-primary me-2 pe-2 ps-3">
                                        <i class="fa-solid fa-expand"></i>
                                    </a>
                                    <a href="{{ route('admin.plans.destroy', $plan->id) }}"
                                        class="btn btn-sm fw-bold btn-danger delete pe-2 ps-3">
                                        <i class="fa-solid fa-trash"></i>
                                    </a>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</x-admin-app-layout>

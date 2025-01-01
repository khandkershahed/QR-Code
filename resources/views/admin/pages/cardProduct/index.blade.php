<x-admin-app-layout :title="'Card Products Management - Admin Panel'">
    <div class="card my-10 rounded-0">
        <div class="card-header p-5 align-items-center rounded-0 bg-info m-0">
            <div>
                <h1 class="mb-0 mt-0 card-title fs-2 text-white">All Card Products!</h1>
                <p class="text-white mt-2 mb-0">View and manage all Card Products information in this page.</p>
            </div>
            <div>
                <a href="{{ route('admin.card-product.create') }}"
                    class="btn btn-white btn-active-light-warning text-hover-inverse-white" data-bs-toggle="tooltip"
                    data-bs-dismiss="click" title="Want To Add New Card Product">
                    <i class="fa-solid fa-user-plus"></i> Add Card Product
                </a>
            </div>
        </div>
        <div class="card-body p-0 rounded-0">
            <table class="table my-datatable table-striped table-row-bordered mt-0">
                <thead class="text-center">
                    <tr class="text-start bg-info text-white fw-bolder fs-7 text-uppercase gs-0">
                        <th width="5%" class="text-center">Sl</th>
                        <th width="13%" class="text-center">Image</th>
                        <th width="37%" class="text-center">Name</th>
                        <th width="15%" class="text-center">Price</th>
                        <th width="12%" class="text-center">Currency</th>
                        <th width="13%" class="text-center">Status</th>
                        <th width="14%" class="text-center">Action</th>
                    </tr>
                </thead>
                <tbody class="text-center fw-bold text-gray-600" style="vertical-align: middle;">
                    @foreach ($card_products as $plan)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td><img src="{{ asset('storage/'.$plan->image) }}" alt="" width="55px"></td>
                            <td>
                                {{ $plan->name }}
                            </td>
                            <td>{{ $plan->price }}</td>
                            {{-- <td>{{ $plan->type }}</td> --}}
                            <td>{{ $plan->currency }}</td>

                            <td>
                                @if ($plan->status == 'active')
                                    <span class="badge badge-success">Active</span>
                                @else
                                    <span class="badge badge-danger">In Active</span>
                                @endif
                            </td>
                            <td>
                                <div class="d-flex justify-content-center me-4">
                                    <a href="{{ route('admin.card-product.edit', $plan->id) }}"
                                        class="btn btn-sm fw-bold btn-info me-2 pe-2 ps-3">
                                        <i class="fa-solid fa-pen"></i>
                                    </a>
                                    <a href="{{ route('admin.card-product.destroy', $plan->id) }}"
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

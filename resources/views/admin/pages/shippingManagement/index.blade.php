<x-admin-app-layout :title="'Shipping Methods'">
    <div class="card card-flush mt-10">
        <div class="card-header bg-primary align-items-center">
            <h3 class="card-title text-white">Manage Your Shipping</h3>
            <div>
                <!-- Button trigger modal -->
                <a href="{{ route('admin.shipping-method.create') }}" class="btn btn-white btn btn-sm">
                    <i class="fa-solid fa-plus"></i> Create
                </a>
            </div>
        </div>
        <div class="card-body table-responsive">
            <table class="table my-datatable table-striped table-row-bordered gy-5 gs-7 border rounded">
                <thead>
                    <tr class="fw-bold fs-6 text-gray-800 px-7">
                        <th>ID</th>
                        <th>Title</th>
                        <th>Location</th>
                        <th>Duration</th>
                        <th>Price</th>
                        <th>Status</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($shipping_methods as $method)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $method->title }}</td>
                            <td>{{ $method->location }}</td>
                            <td>{{ $method->duration }}</td>
                            <td>৳{{ $method->price }}</td>
                            <td><span class="badge {{ $method->status == 'active' ? 'bg-success' : 'bg-danger' }}">
                                    {{ $method->status == 'active' ? 'Active' : 'InActive' }}</span></td>
                            <td class="text-start">
                                <a href="{{ route('admin.shipping-method.edit', $method->id) }}"
                                    class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1">
                                    <i class="fa-solid fa-pen"></i>
                                </a>
                                <a href="{{ route('admin.shipping-method.destroy', $method->id) }}"
                                    class="btn btn-icon btn-bg-light-danger btn-active-color-danger btn-sm me-1 delete"
                                    data-kt-docs-table-filter="delete_row">
                                    <i class="fa-solid fa-trash-can-arrow-up"></i>
                                </a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    {{-- Shippng Create Modal ENd --}}
    @push('scripts')

    @endpush
</x-admin-app-layout>

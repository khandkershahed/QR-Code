<x-admin-app-layout :title="'Blog List - Admin Panel'">
    <div class="card">
        <div class="card-header bg-info align-items-center d-flex justify-content-between">
            <div>
                <h1 class="mb-0 text-center w-100 text-white">Manage Your Blog</h1>
            </div>
            <div>
                <a href="{{ route('admin.blog.create') }}" class="btn btn-light-primary rounded-2">
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
                    Add Category
                </a>
            </div>
        </div>
        <div class="card-body py-0">
            <table class="table my-datatable table-striped table-row-bordered gy-5 gs-7">
                <thead class="">
                    <tr class="fw-semibold fs-6 text-gray-800">
                        <th>Name</th>
                        <th>Position</th>
                        <th>Office</th>
                        <th>Age</th>
                        <th>Start date</th>
                        <th>Salary</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Tiger Nixon</td>
                        <td>System Architect</td>
                        <td>Edinburgh</td>
                        <td>61</td>
                        <td>2011/04/25</td>
                        <td>$320,800</td>
                    </tr>
                    <tr>
                        <td>Garrett Winters</td>
                        <td>Accountant</td>
                        <td>Tokyo</td>
                        <td>63</td>
                        <td>2011/07/25</td>
                        <td>$170,750</td>
                    </tr>
                    <tr>
                        <td>Garrett Winters</td>
                        <td>Accountant</td>
                        <td>Tokyo</td>
                        <td>63</td>
                        <td>2011/07/25</td>
                        <td>$170,750</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <div class="card card-flash">
        <div class="card-header mt-6">
            <div class="card-title">
            </div>

            <div class="card-toolbar">
                <a href="{{ route('admin.blog.create') }}" class="btn btn-light-primary rounded-2">
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
                    Add Blog
                </a>
            </div>
        </div>
        <div class="card-body pt-0">
            <table class="blogsDT table align-middle table-row-dashed fs-6 gy-5 mb-0" id="kt_permissions_table">
                <thead>
                    <tr class="text-start text-gray-400 fw-bolder fs-7 text-uppercase gs-0">
                        <th>Sl</th>
                        <th>Name</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody class="fw-bold text-gray-600">

                </tbody>
            </table>
        </div>
    </div>

    @push('scripts')
        <script>
            $(document).ready(function() {
                var table = $('.blogsDT').DataTable({
                    processing: true,
                    serverSide: true,
                    ajax: "{{ route('admin.blog.index') }}",
                    columns: [{
                            data: null,
                            render: function(data, type, row, meta) {
                                return meta.row + 1; // Display serial number starting from 1
                            },
                            orderable: false,
                            searchable: false
                        },
                        {
                            data: 'name',
                            name: 'name'
                        },
                        {
                            data: 'status',
                            name: 'status',
                            render: function(data, type, row) {
                                return `
                                    <div class="form-check form-switch form-check-custom form-check-solid">
                                        <input class="form-check-input status-toggle" type="checkbox" id="status_toggle_${row.id}" ${data == 1 ? 'checked' : ''} data-id="${row.id}" />
                                    </div>
                                `;
                            }
                        },
                        {
                            data: 'action',
                            name: 'action',
                            orderable: false,
                            searchable: false
                        },
                    ],
                });

                $(document).on('change', '.status-toggle', function() {
                    const id = $(this).data('id');
                    const route = "{{ route('admin.blog.toggle-status', ':id') }}".replace(':id', id);
                    toggleStatus(route, id);
                });
            });
        </script>
    @endpush
</x-admin-app-layout>

<x-admin-app-layout :title="'Email Settings List'">
    <div class="card card-flash my-5">
        <div class="card-body pt-0">
            <table class="emailDT table table-striped  align-middle table-row-dashed fs-6 gy-5 mb-0" id="kt_permissions_table">
                <thead>
                    <tr class="text-start text-gray-400 fw-bolder fs-7 text-uppercase gs-0">
                        <th class="w-10px pe-2">
                            <div class="form-check form-check-sm form-check-custom form-check-solid me-3">
                                <input class="form-check-input" type="checkbox" data-kt-check="true"
                                    data-kt-check-target=".emailDT .emailDT-delete" value="1" />
                            </div>
                        </th>
                        <th>Mailer</th>
                        <th>Host</th>
                        <th>Port</th>
                        <th>Username</th>
                        <th>Encryption</th>
                        <th>From Address</th>
                        <th>From Name</th>
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
            $(function product() {
                var table = $('.emailDT').DataTable({
                    processing: false,
                    // searching: true,
                    // Paginate: true,
                    // paging: true,
                    // ordering: true,
                    // info: true,
                    serverSide: true,
                    ajax: "{{ route('admin.email-settings.index') }}",
                    columns: [{
                            data: 'checkbox',
                            name: 'checkbox',
                            orderable: false,
                            searchable: false
                        },

                        {
                            data: 'mail_mailer',
                            name: 'mail_mailer',
                        },
                        {
                            data: 'mail_host',
                            name: 'mail_host'
                        },
                        {
                            data: 'mail_port',
                            name: 'mail_port'
                        },
                        {
                            data: 'mail_username',
                            name: 'mail_username'
                        },
                        {
                            data: 'mail_encryption',
                            name: 'mail_encryption'
                        },
                        {
                            data: 'mail_from_address',
                            name: 'mail_from_address'
                        },
                        {
                            data: 'mail_from_name',
                            name: 'mail_from_name'
                        },
                        {
                            data: 'status',
                            name: 'status'
                        },
                        {
                            data: 'action',
                            name: 'action',
                            orderable: false,
                            searchable: false
                        },
                    ],

                });
            });
        </script>
    @endpush
</x-admin-app-layout>

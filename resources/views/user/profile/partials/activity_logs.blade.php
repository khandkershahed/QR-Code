<div class="card rounded-0 mt-1">
    <div class="card-header p-5 align-items-center rounded-0 bg-info m-0">
        <div>
            <h1 class="mb-0 mt-0 card-title fs-2 text-white">All Login Sessions!</h1>
            <p class="text-white mt-2 mb-0">View and manage all login sessions information in this page.</p>
        </div>
    </div>
    <div class="card-body p-0">
        <div class="table-responsive px-3">
            <table class="table my-datatable table-striped table-row-bordered mt-0">
                <thead>
                    <tr class="text-start bg-info text-white fw-bolder fs-7 text-uppercase gs-0">
                        <th width="5%" class="text-center">Sl</th>
                        <th width="5%" class="text-center">Device</th>
                        <th width="85%">IP Address</th>
                        <th width="5%" class="text-end pe-20">Time</th>
                    </tr>
                </thead>
                <tbody class="fs-6 fw-bold text-gray-600">
                    @foreach ($login_sessions as $login_session)
                        <tr>
                            <td class="text-center">{{ $loop->iteration }}</td>
                            <td class="text-center">{{ $login_session->user_device }}</td>
                            <td>{{ $login_session->ip_address }}</td>
                            <td class="text-end pe-10">{{ $login_session->login_time }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

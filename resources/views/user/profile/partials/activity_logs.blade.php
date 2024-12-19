<div class="card pt-4 mb-6 mb-xl-9">
    <div class="card-header border-0">
        <div class="card-title">
            <h2>Login Sessions</h2>
        </div>
    </div>
    <div class="card-body pt-0 pb-5">
        <div class="table-responsive">
            <table class="table align-middle table-row-dashed gy-5" id="kt_table_users_login_session">
                <thead class="border-bottom border-gray-200 fs-7 fw-bolder">
                    <tr class="text-start text-muted text-uppercase gs-0">
                        <th>Device</th>
                        <th>IP Address</th>
                        <th class="min-w-125px">Time</th>
                    </tr>
                </thead>
                <tbody class="fs-6 fw-bold text-gray-600">
                    @foreach ($login_sessions as $login_session)
                        <tr>
                            <td>{{ $login_session->user_device }}</td>
                            <td>{{ $login_session->ip_address }}</td>
                            <td>{{ $login_session->login_time }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

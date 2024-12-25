<div class="card pt-4 mb-6 mb-xl-9">
    <div class="card-header border-0">
        <div class="card-title">
            <h2>Login Sessions</h2>
        </div>
        <div class="card-toolbar"></div>
    </div>
    <div class="card-body pt-0 pb-5">
        <div class="table-responsive">
            <table class="table align-middle table-row-dashed gy-5" id="kt_table_users_login_session">
                <thead class="border-bottom border-gray-200 fs-7 fw-bolder">
                    <tr class="text-start text-muted text-uppercase gs-0">
                        <th class="min-w-100px">Location</th>
                        <th>Device</th>
                        <th>IP Address</th>
                        <th class="min-w-125px">Time</th>
                        <th class="min-w-70px">Actions</th>
                    </tr>
                </thead>
                <tbody class="fs-6 fw-bold text-gray-600">
                    <tr>
                        <td>Australia</td>
                        <td>Chrome - Windows</td>
                        <td>207.26.18.342</td>
                        <td>23 seconds ago</td>
                        <td>Current session</td>
                    </tr>
                    <tr>
                        <td>Australia</td>
                        <td>Safari - iOS</td>
                        <td>207.33.48.357</td>
                        <td>3 days ago</td>
                        <td><a href="#" data-kt-users-sign-out="single_user">Sign out</a></td>
                    </tr>
                    <tr>
                        <td>Australia</td>
                        <td>Chrome - Windows</td>
                        <td>207.24.50.215</td>
                        <td>Last week</td>
                        <td>Expired</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

<div class="card pt-4 mb-6 mb-xl-9">
    <div class="card-header border-0">
        <div class="card-title">
            <h2>Logs</h2>
        </div>
        <div class="card-toolbar">
            <button type="button" class="btn btn-sm btn-light-primary">
                <span class="svg-icon svg-icon-3">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                        fill="none">
                        <path opacity="0.3"
                            d="M19 15C20.7 15 22 13.7 22 12C22 10.3 20.7 9 19 9C18.9 9 18.9 9 18.8 9C18.9 8.7 19 8.3 19 8C19 6.3 17.7 5 16 5C15.4 5 14.8 5.2 14.3 5.5C13.4 4 11.8 3 10 3C7.2 3 5 5.2 5 8C5 8.3 5 8.7 5.1 9H5C3.3 9 2 10.3 2 12C2 13.7 3.3 15 5 15H19Z"
                            fill="currentColor" />
                        <path d="M13 17.4V12C13 11.4 12.6 11 12 11C11.4 11 11 11.4 11 12V17.4H13Z"
                            fill="currentColor" />
                        <path opacity="0.3" d="M8 17.4H16L12.7 20.7C12.3 21.1 11.7 21.1 11.3 20.7L8 17.4Z"
                            fill="currentColor" />
                    </svg>
                </span>
                Logs
            </button>
        </div>
    </div>
    <div class="card-body py-0">
        <div class="table-responsive">
            <table class="table align-middle table-row-dashed fw-bold text-gray-600 fs-6 gy-5" id="kt_table_users_logs">
                <tbody>
                    <tr>
                        <td class="min-w-70px">
                            <div class="badge badge-light-danger">500 ERR</div>
                        </td>
                        <td>POST /v1/invoice/in_5315_4014/invalid</td>
                        <td class="pe-0 text-end min-w-200px">10 Nov 2022, 10:30 am</td>
                    </tr>
                    <tr>
                        <td class="min-w-70px">
                            <div class="badge badge-light-success">200 OK</div>
                        </td>
                        <td>POST /v1/invoices/in_7445_4506/payment</td>
                        <td class="pe-0 text-end min-w-200px">25 Jul 2022, 11:30 am</td>
                    </tr>
                    <tr>
                        <td class="min-w-70px">
                            <div class="badge badge-light-success">200 OK</div>
                        </td>
                        <td>POST /v1/invoices/in_4996_5786/payment</td>
                        <td class="pe-0 text-end min-w-200px">25 Oct 2022, 6:05 pm</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

<div class="card pt-4 mb-6 mb-xl-9">
    <div class="card-header border-0">
        <div class="card-title">
            <h2>Events</h2>
        </div>
        <div class="card-toolbar">
            <button type="button" class="btn btn-sm btn-light-primary">
                <span class="svg-icon svg-icon-3">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                        fill="none">
                        <path opacity="0.3"
                            d="M19 15C20.7 15 22 13.7 22 12C22 10.3 20.7 9 19 9C18.9 9 18.9 9 18.8 9C18.9 8.7 19 8.3 19 8C19 6.3 17.7 5 16 5C15.4 5 14.8 5.2 14.3 5.5C13.4 4 11.8 3 10 3C7.2 3 5 5.2 5 8C5 8.3 5 8.7 5.1 9H5C3.3 9 2 10.3 2 12C2 13.7 3.3 15 5 15H19Z"
                            fill="currentColor" />
                        <path d="M13 17.4V12C13 11.4 12.6 11 12 11C11.4 11 11 11.4 11 12V17.4H13Z"
                            fill="currentColor" />
                        <path opacity="0.3" d="M8 17.4H16L12.7 20.7C12.3 21.1 11.7 21.1 11.3 20.7L8 17.4Z"
                            fill="currentColor" />
                    </svg>
                </span>
                Events
            </button>
        </div>
    </div>
</div>

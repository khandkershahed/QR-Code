<div class="card rounded-0">
    <div class="card-header p-5 align-items-center rounded-0 bg-info m-0">
        <div>
            <h1 class="mb-0 mt-0 card-title fs-2 text-white">All Login Sessions!</h1>
            <p class="text-white mt-2 mb-0">View and manage all login sessions information in this page.</p>
        </div>
    </div>
    <div class="card-body p-0">
        <div class="table-responsive">
            <table class="table table-striped table-row-bordered mt-0">
                <thead>
                    <tr class="text-start text-muted fw-bolder fs-7 text-uppercase gs-0">
                        <th width="10%" class="text-center">SL No.</th>
                        <th width="80%">Name</th>
                        <th class="text-end pe-15" width="10%">Action</th>
                    </tr>
                </thead>
                <tbody class="fs-6 fw-bold text-gray-600" style="vertical-align: middle">
                    <tr>
                        <td class="text-center">01</td>
                        <td>{{ $user->email }}</td>
                        <td class="text-end">
                            <div class="d-flex justify-content-end pe-15">
                                <a href="javascript:void(0)" data-bs-toggle="modal"
                                    data-bs-target="#update_email_{{ $user->id }}"
                                    class="btn btn-sm fw-bold btn-info me-2 pe-2 ps-3">
                                    <i class="fa-solid fa-pen"></i>
                                </a>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center">02</td>
                        <td>*************</td>
                        <td class="">
                            <div class="d-flex justify-content-end pe-15">
                                <a href="javascript:void(0)" data-bs-toggle="modal"
                                    data-bs-target="#update_password_{{ $user->id }}"
                                    class="btn btn-sm fw-bold btn-info me-2 pe-2 ps-3">
                                    <i class="fa-solid fa-pen"></i>
                                </a>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

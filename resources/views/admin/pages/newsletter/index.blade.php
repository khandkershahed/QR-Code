<x-admin-app-layout :title="'Newsletter Email Management - Admin Panel'">
    <div class="card my-10 rounded-0">
        <div class="card-header p-5 align-items-center rounded-0 bg-info m-0">
            <div>
                <h1 class="mb-0 mt-0 card-title fs-2 text-white">All Newsletter!</h1>
                <p class="text-white mt-2 mb-0">View and manage all newsletter information in this page.</p>
            </div>
        </div>
        <div class="card-body p-0 rounded-0">
            <table class="table my-datatable table-striped table-row-bordered mt-0">
                <thead>
                    <tr class="text-start bg-info text-white fw-bolder fs-7 text-uppercase gs-0">
                        <th width="5%" class="text-center">Sl No.</th>
                        <th width="40%" class="text-start">Email</th>
                        <th width="10%" class="text-start">Location</th>
                        <th width="10%" class="text-start">IP Address</th>
                        <th width="15%" class="text-start">Subscribe Date</th>
                        <th width="10%" class="text-center">Status</th>
                        <th width="10%" class="text-end pe-15">Actions</th>
                    </tr>
                </thead>
                <tbody class="fw-bold text-gray-600">
                    @foreach ($emails as $email)
                        <tr>
                            <td class="text-center">{{ $loop->iteration }}</td>
                            <td class="text-start">{{ $email->email }}</td>
                            <td class="text-start">{{ $email->location }}</td>
                            <td class="text-start">{{ $email->ip_address }}</td>
                            <td>{{ $email->created_at }}</td>
                            <td class="text-center">{{ $email->status }}</td>
                            <td>
                                <div class="d-flex justify-content-end me-10">
                                    <a href="{{ route('admin.newsletter.destroy', $email->id) }}"
                                        class="btn btn-sm fw-bold btn-danger delete pe-2 ps-3 me-2">
                                        <i class="fa-solid fa-trash"></i>
                                    </a>
                                    <a href="javascript:void(0)" class="btn btn-sm fw-bold btn-info pe-2 ps-3"
                                        data-bs-toggle="modal" data-bs-target="#replayEmail_{{ $email->id }}">
                                        <i class="fas fa-share"></i>
                                    </a>
                                </div>
                            </td>
                        </tr>
                        {{-- Replay Modal --}}
                        <div class="modal fade" id="replayEmail_{{ $email->id }}" tabindex="-1"
                            data-bs-backdrop="static">
                            <div class="modal-dialog modal-dialog-centered modal-lg">
                                <div class="modal-content rounded-0">
                                    <div class="modal-header py-3 bg-info rounded-0 pe-2">
                                        <div>
                                            <h3 class="modal-title mb-0 text-white">Send Reply On This Mail</h3>
                                            <p class="mb-0 text-white">{{ $email->email }}</p>
                                        </div>
                                        <button type="button"
                                            class="btn btn-sm btn-transparent btn-active-info pe-2 ps-3"
                                            data-bs-dismiss="modal" aria-label="Close">
                                            <i class="fa-solid fa-xmark fs-1"></i>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <form action="" method="post">
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="fv-row mb-10">
                                                        <label class="required fw-semibold fs-6 mb-2">Mail
                                                            Subject</label>
                                                        <input type="text" name="text_input"
                                                            class="form-control form-control-solid mb-3 mb-lg-0"
                                                            placeholder="Enter your subject" />
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="fv-row mb-10">
                                                        <label class="required fw-semibold fs-6 mb-2">Send By</label>
                                                        <input type="email" name="text_input"
                                                            class="form-control form-control-solid mb-3 mb-lg-0"
                                                            value="goflixza@gmail.com" />
                                                    </div>
                                                </div>
                                                <div class="col-lg-12">
                                                    <div class="fv-row mb-10">
                                                        <label class="required fw-semibold fs-6 mb-2">Mail Body</label>
                                                        <textarea name="textarea_input" class="form-control form-control-solid" placeholder="Enter Your Message"></textarea>
                                                    </div>
                                                </div>
                                                <div class="col-lg-12">
                                                    <div class="d-flex justify-content-end">
                                                        <button type="button" class="btn btn-info">
                                                            <i class="fa-solid fa-paper-plane"></i> Send Replay
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</x-admin-app-layout>

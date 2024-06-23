<x-admin-app-layout :title="'Contact Message List'">
    <div class="post d-flex flex-column-fluid mt-15" id="kt_post">
        <div class="container-fluid">
            <div class="card card-flush">
                <div class="card-header align-items-center py-5 gap-2 gap-md-5">
                    <div class="card-title">
                        <div class="d-flex align-items-center position-relative my-1">
                            <span class="svg-icon svg-icon-1 position-absolute ms-4">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none">
                                    <rect opacity="0.5" x="17.0365" y="15.1223" width="8.15546" height="2"
                                        rx="1" transform="rotate(45 17.0365 15.1223)" fill="currentColor" />
                                    <path
                                        d="M11 19C6.55556 19 3 15.4444 3 11C3 6.55556 6.55556 3 11 3C15.4444 3 19 6.55556 19 11C19 15.4444 15.4444 19 11 19ZM11 5C7.53333 5 5 7.53333 5 11C5 14.4667 7.53333 17 11 17C14.4667 17 17 14.4667 17 11C17 7.53333 14.4667 5 11 5Z"
                                        fill="currentColor" />
                                </svg>
                            </span>
                            <input type="text" data-kt-ecommerce-message-filter="search"
                                class="form-control form-control-solid w-250px ps-14" placeholder="Search message" />
                        </div>
                    </div>
                </div>


                <div class="card-body pt-0">
                    <div class="table-responsive">
                        <table class="table table-hover align-middle table-row-dashed fs-6 gy-5" id="kt_message_table">
                            <thead>
                                <tr class="text-start text-gray-400 fw-bolder fs-7 text-uppercase gs-0">
                                    {{-- <th class="w-10px pe-2">
                                        <div class="form-check form-check-sm form-check-custom form-check-solid me-3">
                                            <input class="form-check-input" type="checkbox" data-kt-check="true"
                                                data-kt-check-target="#kt_message_table .form-check-input"
                                                value="1" />
                                        </div>
                                    </th> --}}
                                    <th width="5%" class="text-center">Sl</th>
                                    <th width="20%" class="text-center">Name</th>
                                    <th width="20%" class="text-center">Email</th>
                                    <th width="45%" class="text-center">Message</th>
                                    <th width="10%" class="text-center min-w-70px">Action</th>
                                </tr>
                            </thead>

                            <tbody class="fw-bold text-gray-600">
                                @forelse ($contacts as $contact)
                                    <tr>
                                        {{-- <td>
                                            <div class="form-check form-check-sm form-check-custom form-check-solid">
                                                <input class="form-check-input" type="checkbox" value="1" />
                                            </div>
                                        </td> --}}
                                        <td class="text-center">
                                            <span class="fw-bolder"> {{ $loop->iteration }}</span>
                                        </td>
                                        <td class="text-center">
                                            <span class="fw-bolder"> {{ $contact->name }}</span>
                                        </td>
                                        <td class="text-center">
                                            <span class="fw-bolder"> {{ $contact->email }}</span>
                                        </td>
                                        <td class="text-center">
                                            <span class="fw-bolder"> {{ $contact->message }}</span>
                                        </td>
                                        <td class="text-center">
                                            <a href="{{ route('admin.contact.destroy', $contact->id) }}"
                                                class="btn btn-sm btn-light-primary btn-active-danger delete"
                                                data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                               <i class="fas fa-trash"></i> Delete
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-admin-app-layout>

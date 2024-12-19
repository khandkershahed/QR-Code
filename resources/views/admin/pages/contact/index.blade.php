<x-admin-app-layout :title="'Contact Management - Admin Panel'">
    <div class="card my-10 rounded-0">
        <div class="card-header p-5 align-items-center rounded-0 bg-info m-0">
            <div>
                <h1 class="mb-0 mt-0 card-title fs-2 text-white">All Contact Message!</h1>
                <p class="text-white mt-2 mb-0">View and manage all contact messageinformation in this page.</p>
            </div>
        </div>
        <div class="card-body p-0 rounded-0">
            <table class="table my-datatable table-striped table-row-bordered mt-0">
                <thead>
                    <tr class="text-start bg-info text-white fw-bolder fs-7 text-uppercase gs-0">
                        <th width="5%" class="text-center">Sl</th>
                        <th width="20%" class="text-center">Name</th>
                        <th width="20%" class="text-center">Email</th>
                        <th width="35%" class="text-center">Message</th>
                        <th width="10%" class="text-center">Action</th>
                    </tr>
                </thead>
                <tbody class="fw-bold text-gray-600">
                    @forelse ($contacts as $contact)
                        <tr>
                            <td class="text-center">
                                {{ $loop->iteration }}
                            </td>
                            <td class="text-center">
                                {{ $contact->name }}
                            </td>
                            <td class="text-center">
                                {{ $contact->email }}
                            </td>
                            <td class="text-center">
                                @php
                                    $shortMessage = Str::limit($contact->message, 50); // Limit message to 50 characters
                                @endphp
                                {{ $shortMessage }}
                            </td>

                            <!-- Modal -->
                            <div class="modal fade" id="messageModal{{ $contact->id }}" tabindex="-1"
                                aria-labelledby="messageModalLabel{{ $contact->id }}" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="messageModalLabel{{ $contact->id }}">
                                                Full Message</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            {{ $contact->message }}
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary"
                                                data-bs-dismiss="modal">Close</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <td class="text-center">
                                <a href="javascript:void(0)" class="btn btn-sm fw-bold btn-info pe-2 ps-3"
                                    data-bs-toggle="modal" data-bs-target="#messageModal{{ $contact->id }}">
                                    <i class="fas fa-expand"></i>
                                </a>
                                <a href="{{ route('admin.contact.destroy', $contact->id) }}"
                                    class="btn btn-sm fw-bold btn-danger delete pe-2 ps-3 delete"
                                    data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                    <i class="fas fa-trash"></i>
                                </a>
                                <a href="javascript:void(0)" class="btn btn-sm fw-bold btn-info pe-2 ps-3">
                                    <i class="fas fa-share"></i>
                                </a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</x-admin-app-layout>

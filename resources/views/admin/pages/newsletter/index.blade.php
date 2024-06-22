<x-admin-app-layout :title="'Subscribed Emails List'">
    <div class="card card-flush mt-15">
        <div class="card-header mt-6">
            <div class="card-title">
                <div class="d-flex align-items-center position-relative my-1 me-5">
                    <span class="svg-icon svg-icon-1 position-absolute ms-6">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none">
                            <rect opacity="0.5" x="17.0365" y="15.1223" width="8.15546" height="2" rx="1"
                                transform="rotate(45 17.0365 15.1223)" fill="currentColor" />
                            <path
                                d="M11 19C6.55556 19 3 15.4444 3 11C3 6.55556 6.55556 3 11 3C15.4444 3 19 6.55556 19 11C19 15.4444 15.4444 19 11 19ZM11 5C7.53333 5 5 7.53333 5 11C5 14.4667 7.53333 17 11 17C14.4667 17 17 14.4667 17 11C17 7.53333 14.4667 5 11 5Z"
                                fill="currentColor" />
                        </svg>
                    </span>
                    <input type="text" data-kt-filter="search"
                        class="form-control form-control-solid w-250px ps-15" placeholder="Search Email" />
                </div>
            </div>

        </div>
        <div class="card-body pt-0">
            <table class="table align-middle table-row-dashed fs-6 gy-5 mb-0 datatable" id="kt_example_table">
                <thead>
                    <tr class="text-start text-gray-400 fw-bolder fs-7 text-uppercase gs-0">
                        <th width="5%" class="text-center">Sl No.</th>
                        <th width="45%" class="text-center">Email</th>
                        <th width="20%" class="text-center">IP Address</th>
                        <th width="15%" class="text-center">Subscribe Date</th>
                        <th width="15" class="text-center">Actions</th>
                    </tr>
                </thead>
                <tbody class="fw-bold text-gray-600 text-center">
                    @foreach ($emails as $email)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $email->email }}</td>
                            <td>{{ $email->ip_address }}</td>
                            <td>{{ $email->created_at }}</td>
                            <td class="text-center">
                                {{-- <a href="#" class="btn btn-icon btn-active-light-primary w-30px h-30px me-3"
                                    data-bs-toggle="modal" data-bs-target="#replayEmail">
                                    <span class="svg-icon svg-icon-3">
                                        <i class="fas fa-reply"></i>
                                    </span>
                                </a> --}}
                                <a href="{{ route('admin.newsletter.destroy', $email->id) }}"
                                    class="btn btn-icon btn-active-light-danger w-30px h-30px delete">
                                    <span class="svg-icon svg-icon-3">
                                        <i class="fas fa-trash-alt"></i>
                                    </span>
                                </a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    {{-- Replay Modal --}}

    <div class="modal fade" tabindex="-1" id="replayEmail" data-bs-backdrop="static">
        <div class="modal-dialog">
            <div class="modal-content position-absolute">
                <div class="modal-header">
                    <h5 class="modal-header py-3">Reply Mail</h5>

                    <!--begin::Close-->
                    <div class="btn btn-icon btn-sm btn-active-light-primary ms-2" data-bs-dismiss="modal"
                        aria-label="Close">
                        <h1 class="m-0 p-0 fs-1 text-danger">X</h1>
                    </div>
                    <!--end::Close-->
                </div>

                <div class="modal-body">
                    <form action="" method="post">
                        <div class="row">

                        </div>
                    </form>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>
    @push('scripts')
        <script>
            // Make the DIV element draggable:
            var element = document.querySelector('#replayEmail');
            dragElement(element);

            function dragElement(elmnt) {
                var pos1 = 0,
                    pos2 = 0,
                    pos3 = 0,
                    pos4 = 0;
                if (elmnt.querySelector('.modal-content')) {
                    // if present, the header is where you move the DIV from:
                    elmnt.querySelector('.modal-content').onmousedown = dragMouseDown;
                } else {
                    // otherwise, move the DIV from anywhere inside the DIV:
                    elmnt.onmousedown = dragMouseDown;
                }

                function dragMouseDown(e) {
                    e = e || window.event;
                    // get the mouse cursor position at startup:
                    pos3 = e.clientX;
                    pos4 = e.clientY;
                    document.onmouseup = closeDragElement;
                    // call a function whenever the cursor moves:
                    document.onmousemove = elementDrag;
                }

                function elementDrag(e) {
                    e = e || window.event;
                    // calculate the new cursor position:
                    pos1 = pos3 - e.clientX;
                    pos2 = pos4 - e.clientY;
                    pos3 = e.clientX;
                    pos4 = e.clientY;
                    // set the element's new position:
                    elmnt.style.top = (elmnt.offsetTop - pos2) + "px";
                    elmnt.style.left = (elmnt.offsetLeft - pos1) + "px";
                }

                function closeDragElement() {
                    // stop moving when mouse button is released:
                    document.onmouseup = null;
                    document.onmousemove = null;
                }
            }
        </script>
    @endpush
</x-admin-app-layout>

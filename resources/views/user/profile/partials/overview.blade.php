<div class="card mb-5 mb-xxl-8">
    <div class="card-header border-0">
        <div class="card-title">
            <h2>Admin Messages</h2>
        </div>
    </div>
    <div class="card-body pb-0">
        {{-- <div class="d-flex align-items-center mb-3">
            <div class="d-flex align-items-center flex-grow-1">
                <div class="symbol symbol-45px me-5">
                    <img src="/metronic8/demo1/assets/media/avatars/300-21.jpg"
                        alt="">
                </div>


                <div class="d-flex flex-column">
                    <a href="#"
                        class="text-gray-900 text-hover-primary fs-6 fw-bold">Carles
                        Nilson</a>
                    <span class="text-gray-500 fw-bold">Yestarday at 5:06 PM</span>
                </div>

            </div>


            <div class="my-0">
                <button type="button"
                    class="btn btn-sm btn-icon btn-color-primary btn-active-light-primary"
                    data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                    <i class="ki-duotone ki-category fs-6"><span
                            class="path1"></span><span class="path2"></span><span
                            class="path3"></span><span class="path4"></span></i>
                </button>

                <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px"
                    data-kt-menu="true">
                    <div class="menu-item px-3">
                        <div class="menu-content fs-6 text-gray-900 fw-bold px-3 py-4">
                            Quick
                            Actions</div>
                    </div>


                    <div class="separator mb-3 opacity-75"></div>


                    <div class="menu-item px-3">
                        <a href="#" class="menu-link px-3">
                            New Ticket
                        </a>
                    </div>


                    <div class="menu-item px-3">
                        <a href="#" class="menu-link px-3">
                            New Customer
                        </a>
                    </div>


                    <div class="menu-item px-3" data-kt-menu-trigger="hover"
                        data-kt-menu-placement="right-start">
                        <a href="#" class="menu-link px-3">
                            <span class="menu-title">New Group</span>
                            <span class="menu-arrow"></span>
                        </a>


                        <div class="menu-sub menu-sub-dropdown w-175px py-4">
                            <div class="menu-item px-3">
                                <a href="#" class="menu-link px-3">
                                    Admin Group
                                </a>
                            </div>


                            <div class="menu-item px-3">
                                <a href="#" class="menu-link px-3">
                                    Staff Group
                                </a>
                            </div>


                            <div class="menu-item px-3">
                                <a href="#" class="menu-link px-3">
                                    Member Group
                                </a>
                            </div>

                        </div>

                    </div>


                    <div class="menu-item px-3">
                        <a href="#" class="menu-link px-3">
                            New Contact
                        </a>
                    </div>


                    <div class="separator mt-3 opacity-75"></div>


                    <div class="menu-item px-3">
                        <div class="menu-content px-3 py-3">
                            <a class="btn btn-primary  btn-sm px-4" href="#">
                                Generate Reports
                            </a>
                        </div>
                    </div>

                </div>

            </div>

        </div>


        <div class="mb-7">
            <div class="text-gray-800 mb-5">
                Outlines keep you honest. They stop you from indulging in
                poorly thought-out metaphors about driving and keep you
                focused on the overall structure of your post
            </div>


            <div class="d-flex align-items-center mb-5">
                <a href="#"
                    class="btn btn-sm btn-light btn-color-muted btn-active-light-success px-4 py-2 me-4">
                    <i class="ki-duotone ki-message-text-2 fs-2"><span
                            class="path1"></span><span class="path2"></span><span
                            class="path3"></span></i> 12
                </a>

                <a href="#"
                    class="btn btn-sm btn-light btn-color-muted btn-active-light-danger px-4 py-2">
                    <i class="ki-duotone ki-heart fs-2"><span class="path1"></span><span
                            class="path2"></span></i> 150
                </a>
            </div>

        </div> --}}


        <div class="mb-7">
            @if (count($notifications))
                @foreach ($notifications as $notification)
                    <div class="d-flex mb-5">
                        
                        <div class="d-flex flex-column flex-row-fluid">
                            <div class="d-flex align-items-center flex-wrap mb-1">
                                <a href="#" class="text-gray-800 text-hover-primary fw-bold me-2">
                                    {{ App\Models\Admin::where('id', $notification->notificationMessage->id)->value('name') }}
                                </a>

                                <span class="text-gray-500 fw-semibold fs-7">{{$notification->created_at->diffForHumans();}}</span>

                            </div>


                            <span class="text-gray-800 fs-7 fw-normal pt-1">

                                {!! $notification->notificationMessage->title !!}
                            </span>
                            <span class="text-gray-800 fs-7 fw-normal pt-1">
                                {!! $notification->notificationMessage->message !!}
                            </span>
                        </div>
                    </div>
                @endforeach
            @else
                <h5 class="text-gray-800 fs-4 fw-normal pt-1 text-center">
                    No Message available for you.
                </h5>
            @endif


        </div>




    </div>

</div>

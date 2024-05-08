<x-app-layout :title="'My Profile : ' . Auth::user()->name">
    <style>
        .nav-tabs .nav-item.show .nav-link,
        .nav-tabs .nav-link {
            background-color: transparent;
        }
    </style>
    <div class="d-flex flex-column flex-lg-row">
        <div class="flex-column flex-lg-row-auto w-lg-250px w-xl-350px mb-10">
            <div class="card mb-5 mb-xl-8">
                <div class="card-body">
                    <div class="d-flex flex-center flex-column py-5">
                        <div class="symbol symbol-100px symbol-circle mb-7">
                            <img src="{{ !empty($user->profile_image) && file_exists(public_path('storage/user/profile_image/' . $user->profile_image)) ? asset('storage/user/profile_image/' . $user->profile_image) : asset('https://ui-avatars.com/api/?name=' . urlencode(Auth::user()->name)) }}"
                                alt="{{ $user->name }}">
                        </div>
                        <a href="#"
                            class="fs-3 text-gray-800 text-hover-primary fw-bolder mb-3">{{ $user->name }}</a>
                        @if (!empty($user->designation))
                            <div class="mb-9">
                                <div class="badge badge-lg badge-light-primary d-inline">{{ $user->designation }}</div>
                            </div>
                        @endif
                        <div class="fw-bolder mb-3">Assigned Tickets
                            <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="popover"
                                data-bs-trigger="hover" data-bs-html="true"
                                data-bs-content="Number of support tickets assigned, closed and pending this week."></i>
                        </div>
                        <div class="d-flex flex-wrap flex-center">
                            <div class="border border-gray-300 border-dashed rounded py-3 px-3 mb-3">
                                <div class="fs-4 fw-bolder text-gray-700">
                                    <span class="w-75px">243</span>
                                    <span class="svg-icon svg-icon-3 svg-icon-success">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none">
                                            <rect opacity="0.5" x="13" y="6" width="13" height="2"
                                                rx="1" transform="rotate(90 13 6)" fill="currentColor" />
                                            <path
                                                d="M12.5657 8.56569L16.75 12.75C17.1642 13.1642 17.8358 13.1642 18.25 12.75C18.6642 12.3358 18.6642 11.6642 18.25 11.25L12.7071 5.70711C12.3166 5.31658 11.6834 5.31658 11.2929 5.70711L5.75 11.25C5.33579 11.6642 5.33579 12.3358 5.75 12.75C6.16421 13.1642 6.83579 13.1642 7.25 12.75L11.4343 8.56569C11.7467 8.25327 12.2533 8.25327 12.5657 8.56569Z"
                                                fill="currentColor" />
                                        </svg>
                                    </span>
                                </div>
                                <div class="fw-bold text-muted">Total</div>
                            </div>
                            <div class="border border-gray-300 border-dashed rounded py-3 px-3 mx-4 mb-3">
                                <div class="fs-4 fw-bolder text-gray-700">
                                    <span class="w-50px">56</span>
                                    <span class="svg-icon svg-icon-3 svg-icon-danger">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none">
                                            <rect opacity="0.5" x="11" y="18" width="13" height="2"
                                                rx="1" transform="rotate(-90 11 18)" fill="currentColor" />
                                            <path
                                                d="M11.4343 15.4343L7.25 11.25C6.83579 10.8358 6.16421 10.8358 5.75 11.25C5.33579 11.6642 5.33579 12.3358 5.75 12.75L11.2929 18.2929C11.6834 18.6834 12.3166 18.6834 12.7071 18.2929L18.25 12.75C18.6642 12.3358 18.6642 11.6642 18.25 11.25C17.8358 10.8358 17.1642 10.8358 16.75 11.25L12.5657 15.4343C12.2533 15.7467 11.7467 15.7467 11.4343 15.4343Z"
                                                fill="currentColor" />
                                        </svg>
                                    </span>
                                </div>
                                <div class="fw-bold text-muted">Solved</div>
                            </div>
                            <div class="border border-gray-300 border-dashed rounded py-3 px-3 mb-3">
                                <div class="fs-4 fw-bolder text-gray-700">
                                    <span class="w-50px">188</span>
                                    <span class="svg-icon svg-icon-3 svg-icon-success">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none">
                                            <rect opacity="0.5" x="13" y="6" width="13" height="2"
                                                rx="1" transform="rotate(90 13 6)" fill="currentColor" />
                                            <path
                                                d="M12.5657 8.56569L16.75 12.75C17.1642 13.1642 17.8358 13.1642 18.25 12.75C18.6642 12.3358 18.6642 11.6642 18.25 11.25L12.7071 5.70711C12.3166 5.31658 11.6834 5.31658 11.2929 5.70711L5.75 11.25C5.33579 11.6642 5.33579 12.3358 5.75 12.75C6.16421 13.1642 6.83579 13.1642 7.25 12.75L11.4343 8.56569C11.7467 8.25327 12.2533 8.25327 12.5657 8.56569Z"
                                                fill="currentColor" />
                                        </svg>
                                    </span>
                                </div>
                                <div class="fw-bold text-muted">Open</div>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex flex-stack fs-4 py-3">
                        <div class="fw-bolder rotate collapsible" data-bs-toggle="collapse"
                            data-bs-target="#user_collapse_details_{{ $user->id }}" role="button"
                            aria-expanded="false" aria-controls="user_collapse_details_{{ $user->id }}">
                            Details
                            <span class="ms-2 rotate-180">
                                <span class="svg-icon svg-icon-3">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none">
                                        <path
                                            d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z"
                                            fill="currentColor" />
                                    </svg>
                                </span>
                            </span>
                        </div>
                        <span data-bs-toggle="tooltip" data-bs-trigger="hover" title="Edit User Details">
                            <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#update_account_{{ $user->id }}"
                                class="btn btn-sm btn-light-primary">Edit</a>
                        </span>
                    </div>
                    <div class="separator"></div>
                    <div class="collapse show" id="user_collapse_details_{{ $user->id }}">
                        <div class="pb-5 fs-6">
                            @if (!empty($user->email))
                                <div class="fw-bolder mt-5">Email</div>
                                <div class="text-gray-600">
                                    <a href="#" class="text-gray-600 text-hover-primary">{{ $user->email }}</a>
                                </div>
                            @endif
                            @if (!empty($user->address))
                                <div class="fw-bolder mt-5">Address</div>
                                <div class="text-gray-600">{{ $user->address_line_one }}
                                    {{ !empty($user->address_line_two) ? ',' : '' }}
                                    {{ $user->address_line_two }}</div>
                            @endif
                            <div class="fw-bolder mt-5">Language</div>
                            <div class="text-gray-600">English</div>
                            <div class="fw-bolder mt-5">Last Login</div>
                            <div class="text-gray-600">25 Jul 2022, 2:40 pm</div>
                        </div>
                    </div>

                </div>
            </div>

        </div>
        <div class="flex-lg-row-fluid ms-lg-15">
            <ul class="nav nav-custom nav-tabs nav-line-tabs nav-line-tabs-2x border-0 fs-4 fw-bold mb-8">
                <li class="nav-item">
                    <a class="nav-link text-active-primary pb-4 active" data-bs-toggle="tab"
                        href="#kt_user_view_overview_tab">Overview</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-active-primary pb-4" data-kt-countup-tabs="true" data-bs-toggle="tab"
                        href="#kt_user_view_overview_security">Security</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-active-primary pb-4" data-bs-toggle="tab"
                        href="#kt_user_view_overview_events_and_logs_tab">Events &amp; Logs</a>
                </li>
                <li class="nav-item ms-auto">
                    <a href="#" class="btn btn-primary ps-7" data-kt-menu-trigger="click"
                        data-kt-menu-attach="parent" data-kt-menu-placement="bottom-end">Actions
                        <span class="svg-icon svg-icon-2 me-0">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                viewBox="0 0 24 24" fill="none">
                                <path
                                    d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z"
                                    fill="currentColor" />
                            </svg>
                        </span>
                        <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-bold py-4 w-250px fs-6"
                            data-kt-menu="true">

                            <div class="menu-item px-5">
                                <div class="menu-content text-muted pb-2 px-5 fs-7 text-uppercase">Account</div>
                            </div>
                            <div class="menu-item px-5">
                                <a href="javascript:void(0)" class="menu-link px-5">Reports</a>
                            </div>
                            <div class="menu-item px-5 my-1">
                                <a href="{{ route('admin.user.edit', $user->id) }}" class="menu-link px-5">Account
                                    Settings</a>
                            </div>
                            <div class="menu-item px-5">
                                <a href="{{ route('admin.user.destroy', $user->id) }}"
                                    class="menu-link text-danger px-5 delete">Delete This User</a>
                            </div>
                        </div>
                </li>
            </ul>
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="kt_user_view_overview_tab" role="tabpanel">
                    @include('user.profile.partials.overview')
                </div>
                <div class="tab-pane fade" id="kt_user_view_overview_security" role="tabpanel">
                    @include('user.profile.partials.security')
                </div>
                <div class="tab-pane fade" id="kt_user_view_overview_events_and_logs_tab" role="tabpanel">
                    @include('user.profile.partials.activity_logs')
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade metronic_modal" id="update_email_{{ $user->id }}" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered mw-650px">
            <div class="modal-content">
                <div class="modal-header">
                    <h2 class="fw-bolder">Update Email</h2>
                    <div class="btn btn-icon btn-sm btn-active-icon-primary" data-kt-modal-action="close">
                        <span class="svg-icon svg-icon-1">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                viewBox="0 0 24 24" fill="none">
                                <rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1"
                                    transform="rotate(-45 6 17.3137)" fill="currentColor" />
                                <rect x="7.41422" y="6" width="16" height="2" rx="1"
                                    transform="rotate(45 7.41422 6)" fill="currentColor" />
                            </svg>
                        </span>
                    </div>
                </div>
                <div class="modal-body scroll-y mx-5 mx-xl-15 my-7">
                    <form class="form" method="POST" action="{{ route('admin.user.update', $user->id) }}">
                        @csrf
                        @method('PATCH')
                        <div
                            class="notice d-flex bg-light-primary rounded border-primary border border-dashed mb-9 p-6">
                            <span class="svg-icon svg-icon-2tx svg-icon-primary me-4">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none">
                                    <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10"
                                        fill="currentColor" />
                                    <rect x="11" y="14" width="7" height="2" rx="1"
                                        transform="rotate(-90 11 14)" fill="currentColor" />
                                    <rect x="11" y="17" width="2" height="2" rx="1"
                                        transform="rotate(-90 11 17)" fill="currentColor" />
                                </svg>
                            </span>
                            <div class="d-flex flex-stack flex-grow-1">
                                <div class="fw-bold">
                                    <div class="fs-6 text-gray-700">Please note that a valid email address is required
                                        to complete the email verification.</div>
                                </div>
                            </div>
                        </div>
                        <div class="fv-row mb-7">
                            <label class="fs-6 fw-bold form-label mb-2">
                                <span class="required">Email Address</span>
                            </label>
                            <input class="form-control form-control-solid" type="email"
                                placeholder="example@domain.com" name="email"
                                value="{{ old('email', $user->email) }}" />
                            <div class="invalid-feedback">
                                Please input valid Email.
                            </div>
                        </div>
                        <div class="text-center pt-15">
                            <x-metronic.button type="submit" class="primary">
                                {{ __('Save Changes') }}
                            </x-metronic.button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade metronic_modal" id="update_password_{{ $user->id }}" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered mw-650px">
            <div class="modal-content">
                <div class="modal-header">
                    <h2 class="fw-bolder">Update User Password</h2>
                    <!--begin::Close-->
                    <div class="btn btn-icon btn-sm btn-active-light-primary ms-2" data-bs-dismiss="modal"
                        aria-label="Close">
                        <span class="svg-icon svg-icon-2x fs-1">X</span>
                    </div>
                    <!--end::Close-->
                </div>
                <div class="modal-body scroll-y mx-5 mx-xl-15 my-7">
                    <form class="form" method="POST" action="{{ route('admin.user.update', $user->id) }}"
                        novalidate>
                        @csrf
                        @method('PATCH')
                        <div class="fv-row mb-10">
                            <label class="required form-label fs-6 mb-2">Current Password</label>
                            <input class="form-control form-control-lg form-control-solid" type="password"
                                placeholder="" name="current_password" autocomplete="off" required />
                            <div class="invalid-feedback">
                                Please input your current password.
                            </div>
                        </div>
                        <div class="mb-10 fv-row" data-kt-password-meter="true">
                            <div class="mb-1">
                                <label class="required form-label fw-bold fs-6 mb-2">New Password</label>
                                <div class="position-relative mb-3">
                                    <input class="form-control form-control-lg form-control-solid" type="password"
                                        placeholder="" name="password" autocomplete="off" required />
                                    <span
                                        class="btn btn-sm btn-icon position-absolute translate-middle top-50 end-0 me-n2"
                                        data-kt-password-meter-control="visibility">
                                        <i class="bi bi-eye-slash fs-2"></i>
                                        <i class="bi bi-eye fs-2 d-none"></i>
                                    </span>
                                </div>
                                <div class="invalid-feedback">
                                    Please input your new password.
                                </div>
                                <div class="d-flex align-items-center mb-3"
                                    data-kt-password-meter-control="highlight">
                                    <div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px me-2"></div>
                                    <div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px me-2"></div>
                                    <div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px me-2"></div>
                                    <div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px"></div>
                                </div>
                            </div>
                            <div class="text-muted">Use 8 or more characters with a mix of letters, numbers &amp;
                                symbols.</div>
                        </div>
                        <div class="fv-row mb-10">
                            <label class="required form-label fw-bold fs-6 mb-2">Confirm New Password</label>
                            <input class="form-control form-control-lg form-control-solid" type="password"
                                placeholder="Retype your new password" name="password_confirmation"
                                autocomplete="off" required />
                            <div class="invalid-feedback">
                                Please Retype your new password.
                            </div>
                        </div>
                        <div class="text-center pt-15">
                            <x-metronic.button type="submit" class="primary">
                                {{ __('Save Changes') }}
                            </x-metronic.button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade metronic_modal" id="update_account_{{ $user->id }}" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered mw-650px">
            <div class="modal-content">
                <div class="modal-header">
                    <h2 class="fw-bolder">Update User Role</h2>
                    <div class="btn btn-icon btn-sm btn-active-icon-primary" data-kt-modal-action="close">
                        <span class="svg-icon svg-icon-1">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                viewBox="0 0 24 24" fill="none">
                                <rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1"
                                    transform="rotate(-45 6 17.3137)" fill="currentColor" />
                                <rect x="7.41422" y="6" width="16" height="2" rx="1"
                                    transform="rotate(45 7.41422 6)" fill="currentColor" />
                            </svg>
                        </span>
                    </div>
                </div>
                <div class="modal-body scroll-y mx-5 mx-xl-15 my-7">
                    <form class="form" method="POST" action="{{ route('admin.user.update', $user->id) }}">
                        @csrf
                        @method('PATCH')
                        div

                        <div class="text-center pt-15">
                            <x-metronic.button type="submit" class="primary">
                                {{ __('Save Changes') }}
                            </x-metronic.button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    {{-- <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div id="kt_app_content_container" class="app-container  container-xxl">

                    <div class="card mb-5 mb-xxl-8">
                        <div class="card-body pt-9 pb-0">
                            <div class="d-flex flex-wrap flex-sm-nowrap">
                                <div class="me-7 mb-4">
                                    <div class="symbol symbol-100px symbol-lg-160px symbol-fixed position-relative">
                                        <img src="{{ !empty($user->profile_image) && file_exists(public_path('storage/user/profile_image/' . $user->profile_image)) ? asset('storage/user/profile_image/' . $user->profile_image) : asset('https://ui-avatars.com/api/?name=' . urlencode(Auth::user()->name)) }}"
                                            alt="{{ $user->name }}">
                                        <div
                                            class="position-absolute translate-middle bottom-0 start-100 mb-6 bg-success rounded-circle border border-4 border-body h-20px w-20px">
                                        </div>
                                    </div>
                                </div>


                                <div class="flex-grow-1">
                                    <div class="d-flex justify-content-between align-items-start flex-wrap mb-2">
                                        <div class="d-flex flex-column">
                                            <div class="d-flex align-items-center mb-2">
                                                <a href="#"
                                                    class="text-gray-900 text-hover-primary fs-2 fw-bold me-1">{{ $user->name }}</a>
                                                <a href="#"><i
                                                        class="ki-duotone ki-verify fs-1 text-primary"><span
                                                            class="path1"></span><span class="path2"></span></i></a>
                                            </div>


                                            <div class="d-flex flex-wrap fw-semibold fs-6 mb-4 pe-2">
                                                <a href="#"
                                                    class="d-flex align-items-center text-gray-500 text-hover-primary me-5 mb-2">
                                                    <i class="ki-duotone ki-profile-circle fs-4 me-1"><span
                                                            class="path1"></span><span class="path2"></span><span
                                                            class="path3"></span></i> {{ $user->designation }}
                                                </a>
                                                <a href="#"
                                                    class="d-flex align-items-center text-gray-500 text-hover-primary me-5 mb-2">
                                                    <i class="ki-duotone ki-geolocation fs-4 me-1"><span
                                                            class="path1"></span><span class="path2"></span></i>
                                                    {{ $user->address_line_one }}
                                                    {{ !empty($user->address_line_two) ? ',' : '' }}
                                                    {{ $user->address_line_two }}
                                                </a>
                                                <a href="#"
                                                    class="d-flex align-items-center text-gray-500 text-hover-primary mb-2">
                                                    <i class="ki-duotone ki-sms fs-4 me-1"><span
                                                            class="path1"></span><span class="path2"></span></i>
                                                    {{ $user->email }}
                                                </a>
                                            </div>

                                        </div>


                                        <div class="d-flex my-4">
                                            <a href="#" class="btn btn-sm btn-light me-2"
                                                id="kt_user_follow_button">
                                                <i class="ki-duotone ki-check fs-3 d-none"></i>
                                                <span class="indicator-label">
                                                    Follow</span>


                                                <span class="indicator-progress">
                                                    Please wait... <span
                                                        class="spinner-border spinner-border-sm align-middle ms-2"></span>
                                                </span>


                                                <a href="#" class="btn btn-sm btn-primary me-3"
                                                    data-bs-toggle="modal"
                                                    data-bs-target="#kt_modal_offer_a_deal">Hire
                                                    Me</a>

                                                <div class="me-0">
                                                    <button
                                                        class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary"
                                                        data-kt-menu-trigger="click"
                                                        data-kt-menu-placement="bottom-end">
                                                        <i class="ki-solid ki-dots-horizontal fs-2x"></i> </button>

                                                    <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px py-3"
                                                        data-kt-menu="true">
                                                        <div class="menu-item px-3">
                                                            <div
                                                                class="menu-content text-muted pb-2 px-3 fs-7 text-uppercase">
                                                                Payments
                                                            </div>
                                                        </div>


                                                        <div class="menu-item px-3">
                                                            <a href="#" class="menu-link px-3">
                                                                Create Invoice
                                                            </a>
                                                        </div>


                                                        <div class="menu-item px-3">
                                                            <a href="#" class="menu-link flex-stack px-3">
                                                                Create Payment

                                                                <span class="ms-2" data-bs-toggle="tooltip"
                                                                    aria-label="Specify a target name for future usage and reference"
                                                                    data-bs-original-title="Specify a target name for future usage and reference"
                                                                    data-kt-initialized="1">
                                                                    <i class="ki-duotone ki-information fs-6"><span
                                                                            class="path1"></span><span
                                                                            class="path2"></span><span
                                                                            class="path3"></span></i> </span>
                                                            </a>
                                                        </div>


                                                        <div class="menu-item px-3">
                                                            <a href="#" class="menu-link px-3">
                                                                Generate Bill
                                                            </a>
                                                        </div>


                                                        <div class="menu-item px-3" data-kt-menu-trigger="hover"
                                                            data-kt-menu-placement="right-end">
                                                            <a href="#" class="menu-link px-3">
                                                                <span class="menu-title">Subscription</span>
                                                                <span class="menu-arrow"></span>
                                                            </a>

                                                            <div class="menu-sub menu-sub-dropdown w-175px py-4">
                                                                <div class="menu-item px-3">
                                                                    <a href="#" class="menu-link px-3">
                                                                        Plans
                                                                    </a>
                                                                </div>


                                                                <div class="menu-item px-3">
                                                                    <a href="#" class="menu-link px-3">
                                                                        Billing
                                                                    </a>
                                                                </div>


                                                                <div class="menu-item px-3">
                                                                    <a href="#" class="menu-link px-3">
                                                                        Statements
                                                                    </a>
                                                                </div>


                                                                <div class="separator my-2"></div>


                                                                <div class="menu-item px-3">
                                                                    <div class="menu-content px-3">
                                                                        <label
                                                                            class="form-check form-switch form-check-custom form-check-solid">
                                                                            <input
                                                                                class="form-check-input w-30px h-20px"
                                                                                type="checkbox" value="1"
                                                                                checked="checked"
                                                                                name="notifications">



                                                                            <span
                                                                                class="form-check-label text-muted fs-6">
                                                                                Recuring
                                                                            </span>

                                                                        </label>

                                                                    </div>
                                                                </div>

                                                            </div>

                                                        </div>


                                                        <div class="menu-item px-3 my-1">
                                                            <a href="#" class="menu-link px-3">
                                                                Settings
                                                            </a>
                                                        </div>

                                                    </div>

                                                </div>

                                        </div>

                                    </div>


                                    <div class="d-flex flex-wrap flex-stack">
                                        <div class="d-flex flex-column flex-grow-1 pe-8">
                                            <div class="d-flex flex-wrap">
                                                <div
                                                    class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 me-6 mb-3">
                                                    <div class="d-flex align-items-center">
                                                        <i class="ki-duotone ki-arrow-up fs-3 text-success me-2"><span
                                                                class="path1"></span><span class="path2"></span></i>
                                                        <div class="fs-2 fw-bold counted" data-kt-countup="true"
                                                            data-kt-countup-value="4500" data-kt-countup-prefix="$"
                                                            data-kt-initialized="1">$4,500</div>
                                                    </div>


                                                    <div class="fw-semibold fs-6 text-gray-500">Earnings</div>

                                                </div>


                                                <div
                                                    class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 me-6 mb-3">
                                                    <div class="d-flex align-items-center">
                                                        <i class="ki-duotone ki-arrow-down fs-3 text-danger me-2"><span
                                                                class="path1"></span><span class="path2"></span></i>
                                                        <div class="fs-2 fw-bold counted" data-kt-countup="true"
                                                            data-kt-countup-value="80" data-kt-initialized="1">80
                                                        </div>
                                                    </div>


                                                    <div class="fw-semibold fs-6 text-gray-500">Projects</div>

                                                </div>


                                                <div
                                                    class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 me-6 mb-3">
                                                    <div class="d-flex align-items-center">
                                                        <i class="ki-duotone ki-arrow-up fs-3 text-success me-2"><span
                                                                class="path1"></span><span class="path2"></span></i>
                                                        <div class="fs-2 fw-bold counted" data-kt-countup="true"
                                                            data-kt-countup-value="60" data-kt-countup-prefix="%"
                                                            data-kt-initialized="1">%60</div>
                                                    </div>


                                                    <div class="fw-semibold fs-6 text-gray-500">Success Rate</div>

                                                </div>

                                            </div>

                                        </div>


                                        <div class="d-flex align-items-center w-200px w-sm-300px flex-column mt-3">
                                            <div class="d-flex justify-content-between w-100 mt-auto mb-2">
                                                <span class="fw-semibold fs-6 text-gray-500">Profile Compleation</span>
                                                <span class="fw-bold fs-6">50%</span>
                                            </div>

                                            <div class="h-5px mx-3 w-100 bg-light mb-3">
                                                <div class="bg-success rounded h-5px" role="progressbar"
                                                    style="width: 50%;" aria-valuenow="50" aria-valuemin="0"
                                                    aria-valuemax="100"></div>
                                            </div>
                                        </div>

                                    </div>

                                </div>

                            </div>


                            <ul class="nav nav-stretch nav-line-tabs nav-line-tabs-2x border-transparent fs-5 fw-bold">
                                <li class="nav-item mt-2">
                                    <a class="nav-link text-active-primary ms-0 me-10 py-5 active"
                                        href="/metronic8/demo1/pages/user-profile/overview.html">
                                        Overview </a>
                                </li>

                                <li class="nav-item mt-2">
                                    <a class="nav-link text-active-primary ms-0 me-10 py-5 "
                                        href="/metronic8/demo1/pages/user-profile/projects.html">
                                        Projects </a>
                                </li>

                                <li class="nav-item mt-2">
                                    <a class="nav-link text-active-primary ms-0 me-10 py-5 "
                                        href="/metronic8/demo1/pages/user-profile/campaigns.html">
                                        Campaigns </a>
                                </li>

                                <li class="nav-item mt-2">
                                    <a class="nav-link text-active-primary ms-0 me-10 py-5 "
                                        href="/metronic8/demo1/pages/user-profile/documents.html">
                                        Documents </a>
                                </li>

                                <li class="nav-item mt-2">
                                    <a class="nav-link text-active-primary ms-0 me-10 py-5 "
                                        href="/metronic8/demo1/pages/user-profile/followers.html">
                                        Followers </a>
                                </li>

                                <li class="nav-item mt-2">
                                    <a class="nav-link text-active-primary ms-0 me-10 py-5 "
                                        href="/metronic8/demo1/pages/user-profile/activity.html">
                                        Activity </a>
                                </li>

                            </ul>
                        </div>
                    </div>

                    <div class="row g-5 g-xxl-8">
                        <div class="col-xl-6">


                            <div class="card mb-5 mb-xxl-8">
                                <div class="card-body pb-0">
                                    <div class="d-flex align-items-center mb-3">
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

                                    </div>


                                    <div class="mb-7">
                                        <div class="d-flex mb-5">
                                            <div class="symbol symbol-45px me-5">
                                                <img src="/metronic8/demo1/assets/media/avatars/300-14.jpg"
                                                    alt="">
                                            </div>


                                            <div class="d-flex flex-column flex-row-fluid">
                                                <div class="d-flex align-items-center flex-wrap mb-1">
                                                    <a href="#"
                                                        class="text-gray-800 text-hover-primary fw-bold me-2">Alice
                                                        Danchik</a>

                                                    <span class="text-gray-500 fw-semibold fs-7">1 day</span>

                                                    <a href="#"
                                                        class="ms-auto text-gray-500 text-hover-primary fw-semibold fs-7">Reply</a>
                                                </div>


                                                <span class="text-gray-800 fs-7 fw-normal pt-1">
                                                    Long before you sit dow to put digital pen to
                                                    paper you need to make sure you have to sit down and write.
                                                </span>

                                            </div>

                                        </div>


                                        <div class="d-flex">
                                            <div class="symbol symbol-45px me-5">
                                                <img src="/metronic8/demo1/assets/media/avatars/300-9.jpg"
                                                    alt="">
                                            </div>


                                            <div class="d-flex flex-column flex-row-fluid">
                                                <div class="d-flex align-items-center flex-wrap mb-1">
                                                    <a href="#"
                                                        class="text-gray-800 text-hover-primary fw-bold me-2">Harris
                                                        Bold</a>

                                                    <span class="text-gray-500 fw-semibold fs-7">2 days</span>

                                                    <a href="#"
                                                        class="ms-auto text-gray-500 text-hover-primary fw-semibold fs-7">Reply</a>
                                                </div>


                                                <span class="text-gray-800 fs-7 fw-normal pt-1">
                                                    Outlines keep you honest. They stop you from indulging in poorly
                                                </span>

                                            </div>

                                        </div>

                                    </div>


                                    <div class="separator mb-4"></div>


                                    <form class="position-relative mb-6">
                                        <textarea class="form-control border-0 p-0 pe-10 resize-none min-h-25px" data-kt-autosize="true" rows="1"
                                            placeholder="Reply.." data-kt-initialized="1"
                                            style="overflow: hidden; overflow-wrap: break-word; text-align: start; height: 25px;"></textarea>

                                        <div class="position-absolute top-0 end-0 me-n5">
                                            <span class="btn btn-icon btn-sm btn-active-color-primary pe-0 me-2">
                                                <i class="ki-duotone ki-paper-clip fs-2 mb-3"></i> </span>

                                            <span class="btn btn-icon btn-sm btn-active-color-primary ps-0">
                                                <i class="ki-duotone ki-geolocation fs-2 mb-3"><span
                                                        class="path1"></span><span class="path2"></span></i> </span>
                                        </div>
                                    </form>

                                </div>

                            </div>

                            <button class="btn btn-primary w-100 text-center" id="kt_widget_5_load_more_btn">
                                <span class="indicator-label">
                                    More Feeds
                                </span>
                                <span class="indicator-progress">
                                    Loading... <span class="spinner-border spinner-border-sm align-middle ms-2"></span>
                                </span>
                            </button>

                        </div>


                        <div class="col-xl-6">
                            <div class="card mb-5 mb-xxl-8">
                                <div class="card-header border-0 pt-5">
                                    <h3 class="card-title align-items-start flex-column">
                                        <span class="card-label fw-bold fs-3 mb-1">Recent Statistics</span>

                                        <span class="text-muted fw-semibold fs-7">More than 400 new members</span>
                                    </h3>


                                    <div class="card-toolbar">
                                        <button type="button"
                                            class="btn btn-sm btn-icon btn-color-primary btn-active-light-primary"
                                            data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                            <i class="ki-duotone ki-category fs-6"><span class="path1"></span><span
                                                    class="path2"></span><span class="path3"></span><span
                                                    class="path4"></span></i> </button>


                                        <div class="menu menu-sub menu-sub-dropdown w-250px w-md-300px"
                                            data-kt-menu="true" id="kt_menu_6637b2c39262e">
                                            <div class="px-7 py-5">
                                                <div class="fs-5 text-gray-900 fw-bold">Filter Options</div>
                                            </div>


                                            <div class="separator border-gray-200"></div>



                                            <div class="px-7 py-5">
                                                <div class="mb-10">
                                                    <label class="form-label fw-semibold">Status:</label>


                                                    <div>
                                                        <select
                                                            class="form-select form-select-solid select2-hidden-accessible"
                                                            multiple="" data-kt-select2="true"
                                                            data-close-on-select="false"
                                                            data-placeholder="Select option"
                                                            data-dropdown-parent="#kt_menu_6637b2c39262e"
                                                            data-allow-clear="true"
                                                            data-select2-id="select2-data-9-mwxw" tabindex="-1"
                                                            aria-hidden="true" data-kt-initialized="1">
                                                            <option></option>
                                                            <option value="1">Approved</option>
                                                            <option value="2">Pending</option>
                                                            <option value="2">In Process</option>
                                                            <option value="2">Rejected</option>
                                                        </select><span
                                                            class="select2 select2-container select2-container--bootstrap5"
                                                            dir="ltr" data-select2-id="select2-data-10-vvd3"
                                                            style="width: 100%;"><span class="selection"><span
                                                                    class="select2-selection select2-selection--multiple form-select form-select-solid"
                                                                    role="combobox" aria-haspopup="true"
                                                                    aria-expanded="false" tabindex="-1"
                                                                    aria-disabled="false">
                                                                    <ul class="select2-selection__rendered"
                                                                        id="select2-h38w-container"></ul><span
                                                                        class="select2-search select2-search--inline">
                                                                        <textarea class="select2-search__field" type="search" tabindex="0" autocorrect="off" autocapitalize="none"
                                                                            spellcheck="false" role="searchbox" aria-autocomplete="list" autocomplete="off" aria-label="Search"
                                                                            aria-describedby="select2-h38w-container" placeholder="Select option" style="width: 100%;"></textarea>
                                                                    </span>
                                                                </span></span><span class="dropdown-wrapper"
                                                                aria-hidden="true"></span></span>
                                                    </div>

                                                </div>


                                                <div class="mb-10">
                                                    <label class="form-label fw-semibold">Member Type:</label>


                                                    <div class="d-flex">
                                                        <label
                                                            class="form-check form-check-sm form-check-custom form-check-solid me-5">
                                                            <input class="form-check-input" type="checkbox"
                                                                value="1">
                                                            <span class="form-check-label">
                                                                Author
                                                            </span>
                                                        </label>


                                                        <label
                                                            class="form-check form-check-sm form-check-custom form-check-solid">
                                                            <input class="form-check-input" type="checkbox"
                                                                value="2" checked="checked">
                                                            <span class="form-check-label">
                                                                Customer
                                                            </span>
                                                        </label>

                                                    </div>

                                                </div>


                                                <div class="mb-10">
                                                    <label class="form-label fw-semibold">Notifications:</label>


                                                    <div
                                                        class="form-check form-switch form-switch-sm form-check-custom form-check-solid">
                                                        <input class="form-check-input" type="checkbox"
                                                            value="" name="notifications" checked="">
                                                        <label class="form-check-label">
                                                            Enabled
                                                        </label>
                                                    </div>

                                                </div>


                                                <div class="d-flex justify-content-end">
                                                    <button type="reset"
                                                        class="btn btn-sm btn-light btn-active-light-primary me-2"
                                                        data-kt-menu-dismiss="true">Reset</button>

                                                    <button type="submit" class="btn btn-sm btn-primary"
                                                        data-kt-menu-dismiss="true">Apply</button>
                                                </div>

                                            </div>

                                        </div>

                                    </div>

                                </div>


                                <div class="card-body">
                                    <div id="kt_charts_widget_1_chart" style="height: 350px; min-height: 365px;">
                                        <div id="apexcharts92ul4qb9"
                                            class="apexcharts-canvas apexcharts92ul4qb9 apexcharts-theme-light"
                                            style="width: 557px; height: 350px;"><svg id="SvgjsSvg1112"
                                                width="557" height="350" xmlns="http://www.w3.org/2000/svg"
                                                version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink"
                                                xmlns:svgjs="http://svgjs.dev" class="apexcharts-svg"
                                                xmlns:data="ApexChartsNS" transform="translate(0, 0)"
                                                style="background: transparent;">
                                                <foreignObject x="0" y="0" width="557" height="350">
                                                    <div class="apexcharts-legend"
                                                        xmlns="http://www.w3.org/1999/xhtml"
                                                        style="max-height: 175px;"></div>
                                                </foreignObject>
                                                <g id="SvgjsG1192" class="apexcharts-yaxis" rel="0"
                                                    transform="translate(17.835205078125, 0)">
                                                    <g id="SvgjsG1193" class="apexcharts-yaxis-texts-g"><text
                                                            id="SvgjsText1195" font-family="inherit" x="20" y="31.6"
                                                            text-anchor="end" dominant-baseline="auto"
                                                            font-size="12px" font-weight="400" fill="#99a1b7"
                                                            class="apexcharts-text apexcharts-yaxis-label "
                                                            style="font-family: inherit;">
                                                            <tspan id="SvgjsTspan1196">120</tspan>
                                                            <title>120</title>
                                                        </text><text id="SvgjsText1198" font-family="inherit" x="20"
                                                            y="78.38833333333332" text-anchor="end"
                                                            dominant-baseline="auto" font-size="12px"
                                                            font-weight="400" fill="#99a1b7"
                                                            class="apexcharts-text apexcharts-yaxis-label "
                                                            style="font-family: inherit;">
                                                            <tspan id="SvgjsTspan1199">100</tspan>
                                                            <title>100</title>
                                                        </text><text id="SvgjsText1201" font-family="inherit" x="20"
                                                            y="125.17666666666665" text-anchor="end"
                                                            dominant-baseline="auto" font-size="12px"
                                                            font-weight="400" fill="#99a1b7"
                                                            class="apexcharts-text apexcharts-yaxis-label "
                                                            style="font-family: inherit;">
                                                            <tspan id="SvgjsTspan1202">80</tspan>
                                                            <title>80</title>
                                                        </text><text id="SvgjsText1204" font-family="inherit" x="20"
                                                            y="171.96499999999997" text-anchor="end"
                                                            dominant-baseline="auto" font-size="12px"
                                                            font-weight="400" fill="#99a1b7"
                                                            class="apexcharts-text apexcharts-yaxis-label "
                                                            style="font-family: inherit;">
                                                            <tspan id="SvgjsTspan1205">60</tspan>
                                                            <title>60</title>
                                                        </text><text id="SvgjsText1207" font-family="inherit" x="20"
                                                            y="218.7533333333333" text-anchor="end"
                                                            dominant-baseline="auto" font-size="12px"
                                                            font-weight="400" fill="#99a1b7"
                                                            class="apexcharts-text apexcharts-yaxis-label "
                                                            style="font-family: inherit;">
                                                            <tspan id="SvgjsTspan1208">40</tspan>
                                                            <title>40</title>
                                                        </text><text id="SvgjsText1210" font-family="inherit" x="20"
                                                            y="265.5416666666667" text-anchor="end"
                                                            dominant-baseline="auto" font-size="12px"
                                                            font-weight="400" fill="#99a1b7"
                                                            class="apexcharts-text apexcharts-yaxis-label "
                                                            style="font-family: inherit;">
                                                            <tspan id="SvgjsTspan1211">20</tspan>
                                                            <title>20</title>
                                                        </text><text id="SvgjsText1213" font-family="inherit" x="20"
                                                            y="312.33000000000004" text-anchor="end"
                                                            dominant-baseline="auto" font-size="12px"
                                                            font-weight="400" fill="#99a1b7"
                                                            class="apexcharts-text apexcharts-yaxis-label "
                                                            style="font-family: inherit;">
                                                            <tspan id="SvgjsTspan1214">0</tspan>
                                                            <title>0</title>
                                                        </text></g>
                                                </g>
                                                <g id="SvgjsG1114" class="apexcharts-inner apexcharts-graphical"
                                                    transform="translate(47.835205078125, 30)">
                                                    <defs id="SvgjsDefs1113">
                                                        <linearGradient id="SvgjsLinearGradient1117" x1="0"
                                                            y1="0" x2="0" y2="1">
                                                            <stop id="SvgjsStop1118" stop-opacity="0.4"
                                                                stop-color="rgba(216,227,240,0.4)" offset="0">
                                                            </stop>
                                                            <stop id="SvgjsStop1119" stop-opacity="0.5"
                                                                stop-color="rgba(190,209,230,0.5)" offset="1">
                                                            </stop>
                                                            <stop id="SvgjsStop1120" stop-opacity="0.5"
                                                                stop-color="rgba(190,209,230,0.5)" offset="1">
                                                            </stop>
                                                        </linearGradient>
                                                        <clipPath id="gridRectMask92ul4qb9">
                                                            <rect id="SvgjsRect1122" width="505.164794921875"
                                                                height="292.73" x="-4" y="-6" rx="0"
                                                                ry="0" opacity="1" stroke-width="0"
                                                                stroke="none" stroke-dasharray="0" fill="#fff">
                                                            </rect>
                                                        </clipPath>
                                                        <clipPath id="forecastMask92ul4qb9"></clipPath>
                                                        <clipPath id="nonForecastMask92ul4qb9"></clipPath>
                                                        <clipPath id="gridRectMarkerMask92ul4qb9">
                                                            <rect id="SvgjsRect1123" width="503.164794921875"
                                                                height="284.73" x="-2" y="-2" rx="0"
                                                                ry="0" opacity="1" stroke-width="0"
                                                                stroke="none" stroke-dasharray="0" fill="#fff">
                                                            </rect>
                                                        </clipPath>
                                                    </defs>
                                                    <rect id="SvgjsRect1121" width="12.479119873046875"
                                                        height="280.73" x="0" y="0" rx="0" ry="0"
                                                        opacity="1" stroke-width="0" stroke-dasharray="3"
                                                        fill="url(#SvgjsLinearGradient1117)"
                                                        class="apexcharts-xcrosshairs" y2="280.73" filter="none"
                                                        fill-opacity="0.9"></rect>
                                                    <g id="SvgjsG1157" class="apexcharts-grid">
                                                        <g id="SvgjsG1158" class="apexcharts-gridlines-horizontal">
                                                            <line id="SvgjsLine1162" x1="0"
                                                                y1="46.788333333333334" x2="499.164794921875"
                                                                y2="46.788333333333334" stroke="#f1f1f4"
                                                                stroke-dasharray="4" stroke-linecap="butt"
                                                                class="apexcharts-gridline"></line>
                                                            <line id="SvgjsLine1163" x1="0"
                                                                y1="93.57666666666667" x2="499.164794921875"
                                                                y2="93.57666666666667" stroke="#f1f1f4"
                                                                stroke-dasharray="4" stroke-linecap="butt"
                                                                class="apexcharts-gridline"></line>
                                                            <line id="SvgjsLine1164" x1="0" y1="140.365"
                                                                x2="499.164794921875" y2="140.365" stroke="#f1f1f4"
                                                                stroke-dasharray="4" stroke-linecap="butt"
                                                                class="apexcharts-gridline"></line>
                                                            <line id="SvgjsLine1165" x1="0"
                                                                y1="187.15333333333334" x2="499.164794921875"
                                                                y2="187.15333333333334" stroke="#f1f1f4"
                                                                stroke-dasharray="4" stroke-linecap="butt"
                                                                class="apexcharts-gridline"></line>
                                                            <line id="SvgjsLine1166" x1="0"
                                                                y1="233.94166666666666" x2="499.164794921875"
                                                                y2="233.94166666666666" stroke="#f1f1f4"
                                                                stroke-dasharray="4" stroke-linecap="butt"
                                                                class="apexcharts-gridline"></line>
                                                        </g>
                                                        <g id="SvgjsG1159" class="apexcharts-gridlines-vertical"></g>
                                                        <line id="SvgjsLine1169" x1="0" y1="280.73"
                                                            x2="499.164794921875" y2="280.73" stroke="transparent"
                                                            stroke-dasharray="0" stroke-linecap="butt"></line>
                                                        <line id="SvgjsLine1168" x1="0" y1="1"
                                                            x2="0" y2="280.73" stroke="transparent"
                                                            stroke-dasharray="0" stroke-linecap="butt"></line>
                                                    </g>
                                                    <g id="SvgjsG1160" class="apexcharts-grid-borders">
                                                        <line id="SvgjsLine1161" x1="0" y1="0"
                                                            x2="499.164794921875" y2="0" stroke="#f1f1f4"
                                                            stroke-dasharray="4" stroke-linecap="butt"
                                                            class="apexcharts-gridline"></line>
                                                        <line id="SvgjsLine1167" x1="0" y1="280.73"
                                                            x2="499.164794921875" y2="280.73" stroke="#f1f1f4"
                                                            stroke-dasharray="4" stroke-linecap="butt"
                                                            class="apexcharts-gridline"></line>
                                                    </g>
                                                    <g id="SvgjsG1124"
                                                        class="apexcharts-bar-series apexcharts-plot-series">
                                                        <g id="SvgjsG1125" class="apexcharts-series" rel="1"
                                                            seriesName="NetxProfit" data:realIndex="0">
                                                            <path id="SvgjsPath1130"
                                                                d="M 29.11794637044271 274.731 L 29.11794637044271 183.79666666666668 C 29.11794637044271 180.79666666666668 32.11794637044271 177.79666666666668 35.11794637044271 177.79666666666668 L 35.11794637044271 177.79666666666668 C 37.357506306966144 177.79666666666668 39.597066243489586 180.79666666666668 39.597066243489586 183.79666666666668 L 39.597066243489586 274.731 C 39.597066243489586 277.731 36.597066243489586 280.731 33.597066243489586 280.731 L 33.597066243489586 280.731 C 31.357506306966147 280.731 29.11794637044271 277.731 29.11794637044271 274.731 Z "
                                                                fill="rgba(27,132,255,1)" fill-opacity="1"
                                                                stroke="transparent" stroke-opacity="1"
                                                                stroke-linecap="round" stroke-width="2"
                                                                stroke-dasharray="0" class="apexcharts-bar-area"
                                                                index="0" clip-path="url(#gridRectMask92ul4qb9)"
                                                                pathTo="M 29.11794637044271 274.731 L 29.11794637044271 183.79666666666668 C 29.11794637044271 180.79666666666668 32.11794637044271 177.79666666666668 35.11794637044271 177.79666666666668 L 35.11794637044271 177.79666666666668 C 37.357506306966144 177.79666666666668 39.597066243489586 180.79666666666668 39.597066243489586 183.79666666666668 L 39.597066243489586 274.731 C 39.597066243489586 277.731 36.597066243489586 280.731 33.597066243489586 280.731 L 33.597066243489586 280.731 C 31.357506306966147 280.731 29.11794637044271 277.731 29.11794637044271 274.731 Z "
                                                                pathFrom="M 29.11794637044271 280.731 L 29.11794637044271 280.731 L 39.597066243489586 280.731 L 39.597066243489586 280.731 L 39.597066243489586 280.731 L 39.597066243489586 280.731 L 39.597066243489586 280.731 L 29.11794637044271 280.731 Z"
                                                                cy="177.79566666666668" cx="111.31207885742188" j="0"
                                                                val="44" barHeight="102.93433333333334"
                                                                barWidth="12.479119873046875"></path>
                                                            <path id="SvgjsPath1132"
                                                                d="M 112.31207885742188 274.731 L 112.31207885742188 158.06308333333334 C 112.31207885742188 155.06308333333334 115.31207885742188 152.06308333333334 118.31207885742188 152.06308333333334 L 118.31207885742188 152.06308333333334 C 120.55163879394532 152.06308333333334 122.79119873046875 155.06308333333334 122.79119873046875 158.06308333333334 L 122.79119873046875 274.731 C 122.79119873046875 277.731 119.79119873046875 280.731 116.79119873046875 280.731 L 116.79119873046875 280.731 C 114.55163879394532 280.731 112.31207885742188 277.731 112.31207885742188 274.731 Z "
                                                                fill="rgba(27,132,255,1)" fill-opacity="1"
                                                                stroke="transparent" stroke-opacity="1"
                                                                stroke-linecap="round" stroke-width="2"
                                                                stroke-dasharray="0" class="apexcharts-bar-area"
                                                                index="0"
                                                                clip-path="url(#gridRectMask92ul4qb9)"
                                                                pathTo="M 112.31207885742188 274.731 L 112.31207885742188 158.06308333333334 C 112.31207885742188 155.06308333333334 115.31207885742188 152.06308333333334 118.31207885742188 152.06308333333334 L 118.31207885742188 152.06308333333334 C 120.55163879394532 152.06308333333334 122.79119873046875 155.06308333333334 122.79119873046875 158.06308333333334 L 122.79119873046875 274.731 C 122.79119873046875 277.731 119.79119873046875 280.731 116.79119873046875 280.731 L 116.79119873046875 280.731 C 114.55163879394532 280.731 112.31207885742188 277.731 112.31207885742188 274.731 Z "
                                                                pathFrom="M 112.31207885742188 280.731 L 112.31207885742188 280.731 L 122.79119873046875 280.731 L 122.79119873046875 280.731 L 122.79119873046875 280.731 L 122.79119873046875 280.731 L 122.79119873046875 280.731 L 112.31207885742188 280.731 Z"
                                                                cy="152.06208333333333" cx="194.50621134440104"
                                                                j="1" val="55" barHeight="128.66791666666668"
                                                                barWidth="12.479119873046875"></path>
                                                            <path id="SvgjsPath1134"
                                                                d="M 195.50621134440104 274.731 L 195.50621134440104 153.38425 C 195.50621134440104 150.38425 198.50621134440104 147.38425 201.50621134440104 147.38425 L 201.50621134440104 147.38425 C 203.7457712809245 147.38425 205.9853312174479 150.38425 205.9853312174479 153.38425 L 205.9853312174479 274.731 C 205.9853312174479 277.731 202.9853312174479 280.731 199.9853312174479 280.731 L 199.9853312174479 280.731 C 197.7457712809245 280.731 195.50621134440104 277.731 195.50621134440104 274.731 Z "
                                                                fill="rgba(27,132,255,1)" fill-opacity="1"
                                                                stroke="transparent" stroke-opacity="1"
                                                                stroke-linecap="round" stroke-width="2"
                                                                stroke-dasharray="0" class="apexcharts-bar-area"
                                                                index="0"
                                                                clip-path="url(#gridRectMask92ul4qb9)"
                                                                pathTo="M 195.50621134440104 274.731 L 195.50621134440104 153.38425 C 195.50621134440104 150.38425 198.50621134440104 147.38425 201.50621134440104 147.38425 L 201.50621134440104 147.38425 C 203.7457712809245 147.38425 205.9853312174479 150.38425 205.9853312174479 153.38425 L 205.9853312174479 274.731 C 205.9853312174479 277.731 202.9853312174479 280.731 199.9853312174479 280.731 L 199.9853312174479 280.731 C 197.7457712809245 280.731 195.50621134440104 277.731 195.50621134440104 274.731 Z "
                                                                pathFrom="M 195.50621134440104 280.731 L 195.50621134440104 280.731 L 205.9853312174479 280.731 L 205.9853312174479 280.731 L 205.9853312174479 280.731 L 205.9853312174479 280.731 L 205.9853312174479 280.731 L 195.50621134440104 280.731 Z"
                                                                cy="147.38325" cx="277.7003438313802" j="2"
                                                                val="57" barHeight="133.34675000000001"
                                                                barWidth="12.479119873046875"></path>
                                                            <path id="SvgjsPath1136"
                                                                d="M 278.7003438313802 274.731 L 278.7003438313802 155.72366666666667 C 278.7003438313802 152.72366666666667 281.7003438313802 149.72366666666667 284.7003438313802 149.72366666666667 L 284.7003438313802 149.72366666666667 C 286.9399037679037 149.72366666666667 289.1794637044271 152.72366666666667 289.1794637044271 155.72366666666667 L 289.1794637044271 274.731 C 289.1794637044271 277.731 286.1794637044271 280.731 283.1794637044271 280.731 L 283.1794637044271 280.731 C 280.9399037679037 280.731 278.7003438313802 277.731 278.7003438313802 274.731 Z "
                                                                fill="rgba(27,132,255,1)" fill-opacity="1"
                                                                stroke="transparent" stroke-opacity="1"
                                                                stroke-linecap="round" stroke-width="2"
                                                                stroke-dasharray="0" class="apexcharts-bar-area"
                                                                index="0"
                                                                clip-path="url(#gridRectMask92ul4qb9)"
                                                                pathTo="M 278.7003438313802 274.731 L 278.7003438313802 155.72366666666667 C 278.7003438313802 152.72366666666667 281.7003438313802 149.72366666666667 284.7003438313802 149.72366666666667 L 284.7003438313802 149.72366666666667 C 286.9399037679037 149.72366666666667 289.1794637044271 152.72366666666667 289.1794637044271 155.72366666666667 L 289.1794637044271 274.731 C 289.1794637044271 277.731 286.1794637044271 280.731 283.1794637044271 280.731 L 283.1794637044271 280.731 C 280.9399037679037 280.731 278.7003438313802 277.731 278.7003438313802 274.731 Z "
                                                                pathFrom="M 278.7003438313802 280.731 L 278.7003438313802 280.731 L 289.1794637044271 280.731 L 289.1794637044271 280.731 L 289.1794637044271 280.731 L 289.1794637044271 280.731 L 289.1794637044271 280.731 L 278.7003438313802 280.731 Z"
                                                                cy="149.72266666666667" cx="360.8944763183594" j="3"
                                                                val="56" barHeight="131.00733333333335"
                                                                barWidth="12.479119873046875"></path>
                                                            <path id="SvgjsPath1138"
                                                                d="M 361.8944763183594 274.731 L 361.8944763183594 144.02658333333335 C 361.8944763183594 141.02658333333335 364.8944763183594 138.02658333333335 367.8944763183594 138.02658333333335 L 367.8944763183594 138.02658333333335 C 370.13403625488286 138.02658333333335 372.3735961914063 141.02658333333335 372.3735961914063 144.02658333333335 L 372.3735961914063 274.731 C 372.3735961914063 277.731 369.3735961914063 280.731 366.3735961914063 280.731 L 366.3735961914063 280.731 C 364.13403625488286 280.731 361.8944763183594 277.731 361.8944763183594 274.731 Z "
                                                                fill="rgba(27,132,255,1)" fill-opacity="1"
                                                                stroke="transparent" stroke-opacity="1"
                                                                stroke-linecap="round" stroke-width="2"
                                                                stroke-dasharray="0" class="apexcharts-bar-area"
                                                                index="0"
                                                                clip-path="url(#gridRectMask92ul4qb9)"
                                                                pathTo="M 361.8944763183594 274.731 L 361.8944763183594 144.02658333333335 C 361.8944763183594 141.02658333333335 364.8944763183594 138.02658333333335 367.8944763183594 138.02658333333335 L 367.8944763183594 138.02658333333335 C 370.13403625488286 138.02658333333335 372.3735961914063 141.02658333333335 372.3735961914063 144.02658333333335 L 372.3735961914063 274.731 C 372.3735961914063 277.731 369.3735961914063 280.731 366.3735961914063 280.731 L 366.3735961914063 280.731 C 364.13403625488286 280.731 361.8944763183594 277.731 361.8944763183594 274.731 Z "
                                                                pathFrom="M 361.8944763183594 280.731 L 361.8944763183594 280.731 L 372.3735961914063 280.731 L 372.3735961914063 280.731 L 372.3735961914063 280.731 L 372.3735961914063 280.731 L 372.3735961914063 280.731 L 361.8944763183594 280.731 Z"
                                                                cy="138.02558333333334" cx="444.0886088053386" j="4"
                                                                val="61" barHeight="142.70441666666667"
                                                                barWidth="12.479119873046875"></path>
                                                            <path id="SvgjsPath1140"
                                                                d="M 445.0886088053386 274.731 L 445.0886088053386 151.04483333333334 C 445.0886088053386 148.04483333333334 448.0886088053386 145.04483333333334 451.0886088053386 145.04483333333334 L 451.0886088053386 145.04483333333334 C 453.32816874186204 145.04483333333334 455.5677286783855 148.04483333333334 455.5677286783855 151.04483333333334 L 455.5677286783855 274.731 C 455.5677286783855 277.731 452.5677286783855 280.731 449.5677286783855 280.731 L 449.5677286783855 280.731 C 447.32816874186204 280.731 445.0886088053386 277.731 445.0886088053386 274.731 Z "
                                                                fill="rgba(27,132,255,1)" fill-opacity="1"
                                                                stroke="transparent" stroke-opacity="1"
                                                                stroke-linecap="round" stroke-width="2"
                                                                stroke-dasharray="0" class="apexcharts-bar-area"
                                                                index="0"
                                                                clip-path="url(#gridRectMask92ul4qb9)"
                                                                pathTo="M 445.0886088053386 274.731 L 445.0886088053386 151.04483333333334 C 445.0886088053386 148.04483333333334 448.0886088053386 145.04483333333334 451.0886088053386 145.04483333333334 L 451.0886088053386 145.04483333333334 C 453.32816874186204 145.04483333333334 455.5677286783855 148.04483333333334 455.5677286783855 151.04483333333334 L 455.5677286783855 274.731 C 455.5677286783855 277.731 452.5677286783855 280.731 449.5677286783855 280.731 L 449.5677286783855 280.731 C 447.32816874186204 280.731 445.0886088053386 277.731 445.0886088053386 274.731 Z "
                                                                pathFrom="M 445.0886088053386 280.731 L 445.0886088053386 280.731 L 455.5677286783855 280.731 L 455.5677286783855 280.731 L 455.5677286783855 280.731 L 455.5677286783855 280.731 L 455.5677286783855 280.731 L 445.0886088053386 280.731 Z"
                                                                cy="145.04383333333334" cx="527.2827412923177" j="5"
                                                                val="58" barHeight="135.68616666666668"
                                                                barWidth="12.479119873046875"></path>
                                                            <g id="SvgjsG1127" class="apexcharts-bar-goals-markers">
                                                                <g id="SvgjsG1129"
                                                                    className="apexcharts-bar-goals-groups"
                                                                    class="apexcharts-hidden-element-shown"
                                                                    clip-path="url(#gridRectMarkerMask92ul4qb9)"></g>
                                                                <g id="SvgjsG1131"
                                                                    className="apexcharts-bar-goals-groups"
                                                                    class="apexcharts-hidden-element-shown"
                                                                    clip-path="url(#gridRectMarkerMask92ul4qb9)"></g>
                                                                <g id="SvgjsG1133"
                                                                    className="apexcharts-bar-goals-groups"
                                                                    class="apexcharts-hidden-element-shown"
                                                                    clip-path="url(#gridRectMarkerMask92ul4qb9)"></g>
                                                                <g id="SvgjsG1135"
                                                                    className="apexcharts-bar-goals-groups"
                                                                    class="apexcharts-hidden-element-shown"
                                                                    clip-path="url(#gridRectMarkerMask92ul4qb9)"></g>
                                                                <g id="SvgjsG1137"
                                                                    className="apexcharts-bar-goals-groups"
                                                                    class="apexcharts-hidden-element-shown"
                                                                    clip-path="url(#gridRectMarkerMask92ul4qb9)"></g>
                                                                <g id="SvgjsG1139"
                                                                    className="apexcharts-bar-goals-groups"
                                                                    class="apexcharts-hidden-element-shown"
                                                                    clip-path="url(#gridRectMarkerMask92ul4qb9)"></g>
                                                            </g>
                                                            <g id="SvgjsG1128"
                                                                class="apexcharts-bar-shadows apexcharts-hidden-element-shown">
                                                            </g>
                                                        </g>
                                                        <g id="SvgjsG1141" class="apexcharts-series"
                                                            rel="2" seriesName="Revenue"
                                                            data:realIndex="1">
                                                            <path id="SvgjsPath1146"
                                                                d="M 41.597066243489586 274.731 L 41.597066243489586 108.93533333333335 C 41.597066243489586 105.93533333333335 44.597066243489586 102.93533333333335 47.597066243489586 102.93533333333335 L 47.597066243489586 102.93533333333335 C 49.83662618001303 102.93533333333335 52.07618611653646 105.93533333333335 52.07618611653646 108.93533333333335 L 52.07618611653646 274.731 C 52.07618611653646 277.731 49.07618611653646 280.731 46.07618611653646 280.731 L 46.07618611653646 280.731 C 43.83662618001303 280.731 41.597066243489586 277.731 41.597066243489586 274.731 Z "
                                                                fill="rgba(219,223,233,1)" fill-opacity="1"
                                                                stroke="transparent" stroke-opacity="1"
                                                                stroke-linecap="round" stroke-width="2"
                                                                stroke-dasharray="0" class="apexcharts-bar-area"
                                                                index="1"
                                                                clip-path="url(#gridRectMask92ul4qb9)"
                                                                pathTo="M 41.597066243489586 274.731 L 41.597066243489586 108.93533333333335 C 41.597066243489586 105.93533333333335 44.597066243489586 102.93533333333335 47.597066243489586 102.93533333333335 L 47.597066243489586 102.93533333333335 C 49.83662618001303 102.93533333333335 52.07618611653646 105.93533333333335 52.07618611653646 108.93533333333335 L 52.07618611653646 274.731 C 52.07618611653646 277.731 49.07618611653646 280.731 46.07618611653646 280.731 L 46.07618611653646 280.731 C 43.83662618001303 280.731 41.597066243489586 277.731 41.597066243489586 274.731 Z "
                                                                pathFrom="M 41.597066243489586 280.731 L 41.597066243489586 280.731 L 52.07618611653646 280.731 L 52.07618611653646 280.731 L 52.07618611653646 280.731 L 52.07618611653646 280.731 L 52.07618611653646 280.731 L 41.597066243489586 280.731 Z"
                                                                cy="102.93433333333334" cx="123.79119873046875"
                                                                j="0" val="76" barHeight="177.79566666666668"
                                                                barWidth="12.479119873046875"></path>
                                                            <path id="SvgjsPath1148"
                                                                d="M 124.79119873046875 274.731 L 124.79119873046875 87.88058333333333 C 124.79119873046875 84.88058333333333 127.79119873046875 81.88058333333333 130.79119873046875 81.88058333333333 L 130.79119873046875 81.88058333333333 C 133.0307586669922 81.88058333333333 135.27031860351562 84.88058333333333 135.27031860351562 87.88058333333333 L 135.27031860351562 274.731 C 135.27031860351562 277.731 132.27031860351562 280.731 129.27031860351562 280.731 L 129.27031860351562 280.731 C 127.03075866699218 280.731 124.79119873046875 277.731 124.79119873046875 274.731 Z "
                                                                fill="rgba(219,223,233,1)" fill-opacity="1"
                                                                stroke="transparent" stroke-opacity="1"
                                                                stroke-linecap="round" stroke-width="2"
                                                                stroke-dasharray="0" class="apexcharts-bar-area"
                                                                index="1"
                                                                clip-path="url(#gridRectMask92ul4qb9)"
                                                                pathTo="M 124.79119873046875 274.731 L 124.79119873046875 87.88058333333333 C 124.79119873046875 84.88058333333333 127.79119873046875 81.88058333333333 130.79119873046875 81.88058333333333 L 130.79119873046875 81.88058333333333 C 133.0307586669922 81.88058333333333 135.27031860351562 84.88058333333333 135.27031860351562 87.88058333333333 L 135.27031860351562 274.731 C 135.27031860351562 277.731 132.27031860351562 280.731 129.27031860351562 280.731 L 129.27031860351562 280.731 C 127.03075866699218 280.731 124.79119873046875 277.731 124.79119873046875 274.731 Z "
                                                                pathFrom="M 124.79119873046875 280.731 L 124.79119873046875 280.731 L 135.27031860351562 280.731 L 135.27031860351562 280.731 L 135.27031860351562 280.731 L 135.27031860351562 280.731 L 135.27031860351562 280.731 L 124.79119873046875 280.731 Z"
                                                                cy="81.87958333333333" cx="206.9853312174479" j="1"
                                                                val="85" barHeight="198.8504166666667"
                                                                barWidth="12.479119873046875"></path>
                                                            <path id="SvgjsPath1150"
                                                                d="M 207.9853312174479 274.731 L 207.9853312174479 50.44991666666666 C 207.9853312174479 47.44991666666666 210.9853312174479 44.44991666666666 213.9853312174479 44.44991666666666 L 213.9853312174479 44.44991666666666 C 216.22489115397133 44.44991666666666 218.46445109049478 47.44991666666666 218.46445109049478 50.44991666666666 L 218.46445109049478 274.731 C 218.46445109049478 277.731 215.46445109049478 280.731 212.46445109049478 280.731 L 212.46445109049478 280.731 C 210.22489115397133 280.731 207.9853312174479 277.731 207.9853312174479 274.731 Z "
                                                                fill="rgba(219,223,233,1)" fill-opacity="1"
                                                                stroke="transparent" stroke-opacity="1"
                                                                stroke-linecap="round" stroke-width="2"
                                                                stroke-dasharray="0" class="apexcharts-bar-area"
                                                                index="1"
                                                                clip-path="url(#gridRectMask92ul4qb9)"
                                                                pathTo="M 207.9853312174479 274.731 L 207.9853312174479 50.44991666666666 C 207.9853312174479 47.44991666666666 210.9853312174479 44.44991666666666 213.9853312174479 44.44991666666666 L 213.9853312174479 44.44991666666666 C 216.22489115397133 44.44991666666666 218.46445109049478 47.44991666666666 218.46445109049478 50.44991666666666 L 218.46445109049478 274.731 C 218.46445109049478 277.731 215.46445109049478 280.731 212.46445109049478 280.731 L 212.46445109049478 280.731 C 210.22489115397133 280.731 207.9853312174479 277.731 207.9853312174479 274.731 Z "
                                                                pathFrom="M 207.9853312174479 280.731 L 207.9853312174479 280.731 L 218.46445109049478 280.731 L 218.46445109049478 280.731 L 218.46445109049478 280.731 L 218.46445109049478 280.731 L 218.46445109049478 280.731 L 207.9853312174479 280.731 Z"
                                                                cy="44.44891666666666" cx="290.1794637044271" j="2"
                                                                val="101" barHeight="236.28108333333336"
                                                                barWidth="12.479119873046875"></path>
                                                            <path id="SvgjsPath1152"
                                                                d="M 291.1794637044271 274.731 L 291.1794637044271 57.468166666666654 C 291.1794637044271 54.468166666666654 294.1794637044271 51.468166666666654 297.1794637044271 51.468166666666654 L 297.1794637044271 51.468166666666654 C 299.41902364095057 51.468166666666654 301.658583577474 54.468166666666654 301.658583577474 57.468166666666654 L 301.658583577474 274.731 C 301.658583577474 277.731 298.658583577474 280.731 295.658583577474 280.731 L 295.658583577474 280.731 C 293.41902364095057 280.731 291.1794637044271 277.731 291.1794637044271 274.731 Z "
                                                                fill="rgba(219,223,233,1)" fill-opacity="1"
                                                                stroke="transparent" stroke-opacity="1"
                                                                stroke-linecap="round" stroke-width="2"
                                                                stroke-dasharray="0" class="apexcharts-bar-area"
                                                                index="1"
                                                                clip-path="url(#gridRectMask92ul4qb9)"
                                                                pathTo="M 291.1794637044271 274.731 L 291.1794637044271 57.468166666666654 C 291.1794637044271 54.468166666666654 294.1794637044271 51.468166666666654 297.1794637044271 51.468166666666654 L 297.1794637044271 51.468166666666654 C 299.41902364095057 51.468166666666654 301.658583577474 54.468166666666654 301.658583577474 57.468166666666654 L 301.658583577474 274.731 C 301.658583577474 277.731 298.658583577474 280.731 295.658583577474 280.731 L 295.658583577474 280.731 C 293.41902364095057 280.731 291.1794637044271 277.731 291.1794637044271 274.731 Z "
                                                                pathFrom="M 291.1794637044271 280.731 L 291.1794637044271 280.731 L 301.658583577474 280.731 L 301.658583577474 280.731 L 301.658583577474 280.731 L 301.658583577474 280.731 L 301.658583577474 280.731 L 291.1794637044271 280.731 Z"
                                                                cy="51.46716666666666" cx="373.3735961914063" j="3"
                                                                val="98" barHeight="229.26283333333336"
                                                                barWidth="12.479119873046875"></path>
                                                            <path id="SvgjsPath1154"
                                                                d="M 374.3735961914063 274.731 L 374.3735961914063 83.20175 C 374.3735961914063 80.20175 377.3735961914063 77.20175 380.3735961914063 77.20175 L 380.3735961914063 77.20175 C 382.61315612792976 77.20175 384.8527160644532 80.20175 384.8527160644532 83.20175 L 384.8527160644532 274.731 C 384.8527160644532 277.731 381.8527160644532 280.731 378.8527160644532 280.731 L 378.8527160644532 280.731 C 376.61315612792976 280.731 374.3735961914063 277.731 374.3735961914063 274.731 Z "
                                                                fill="rgba(219,223,233,1)" fill-opacity="1"
                                                                stroke="transparent" stroke-opacity="1"
                                                                stroke-linecap="round" stroke-width="2"
                                                                stroke-dasharray="0" class="apexcharts-bar-area"
                                                                index="1"
                                                                clip-path="url(#gridRectMask92ul4qb9)"
                                                                pathTo="M 374.3735961914063 274.731 L 374.3735961914063 83.20175 C 374.3735961914063 80.20175 377.3735961914063 77.20175 380.3735961914063 77.20175 L 380.3735961914063 77.20175 C 382.61315612792976 77.20175 384.8527160644532 80.20175 384.8527160644532 83.20175 L 384.8527160644532 274.731 C 384.8527160644532 277.731 381.8527160644532 280.731 378.8527160644532 280.731 L 378.8527160644532 280.731 C 376.61315612792976 280.731 374.3735961914063 277.731 374.3735961914063 274.731 Z "
                                                                pathFrom="M 374.3735961914063 280.731 L 374.3735961914063 280.731 L 384.8527160644532 280.731 L 384.8527160644532 280.731 L 384.8527160644532 280.731 L 384.8527160644532 280.731 L 384.8527160644532 280.731 L 374.3735961914063 280.731 Z"
                                                                cy="77.20075" cx="456.5677286783855" j="4"
                                                                val="87" barHeight="203.52925000000002"
                                                                barWidth="12.479119873046875"></path>
                                                            <path id="SvgjsPath1156"
                                                                d="M 457.5677286783855 274.731 L 457.5677286783855 41.09225 C 457.5677286783855 38.09225 460.5677286783855 35.09225 463.5677286783855 35.09225 L 463.5677286783855 35.09225 C 465.80728861490894 35.09225 468.0468485514324 38.09225 468.0468485514324 41.09225 L 468.0468485514324 274.731 C 468.0468485514324 277.731 465.0468485514324 280.731 462.0468485514324 280.731 L 462.0468485514324 280.731 C 459.80728861490894 280.731 457.5677286783855 277.731 457.5677286783855 274.731 Z "
                                                                fill="rgba(219,223,233,1)" fill-opacity="1"
                                                                stroke="transparent" stroke-opacity="1"
                                                                stroke-linecap="round" stroke-width="2"
                                                                stroke-dasharray="0" class="apexcharts-bar-area"
                                                                index="1"
                                                                clip-path="url(#gridRectMask92ul4qb9)"
                                                                pathTo="M 457.5677286783855 274.731 L 457.5677286783855 41.09225 C 457.5677286783855 38.09225 460.5677286783855 35.09225 463.5677286783855 35.09225 L 463.5677286783855 35.09225 C 465.80728861490894 35.09225 468.0468485514324 38.09225 468.0468485514324 41.09225 L 468.0468485514324 274.731 C 468.0468485514324 277.731 465.0468485514324 280.731 462.0468485514324 280.731 L 462.0468485514324 280.731 C 459.80728861490894 280.731 457.5677286783855 277.731 457.5677286783855 274.731 Z "
                                                                pathFrom="M 457.5677286783855 280.731 L 457.5677286783855 280.731 L 468.0468485514324 280.731 L 468.0468485514324 280.731 L 468.0468485514324 280.731 L 468.0468485514324 280.731 L 468.0468485514324 280.731 L 457.5677286783855 280.731 Z"
                                                                cy="35.09125" cx="539.7618611653646" j="5"
                                                                val="105" barHeight="245.63875000000002"
                                                                barWidth="12.479119873046875"></path>
                                                            <g id="SvgjsG1143" class="apexcharts-bar-goals-markers">
                                                                <g id="SvgjsG1145"
                                                                    className="apexcharts-bar-goals-groups"
                                                                    class="apexcharts-hidden-element-shown"
                                                                    clip-path="url(#gridRectMarkerMask92ul4qb9)"></g>
                                                                <g id="SvgjsG1147"
                                                                    className="apexcharts-bar-goals-groups"
                                                                    class="apexcharts-hidden-element-shown"
                                                                    clip-path="url(#gridRectMarkerMask92ul4qb9)"></g>
                                                                <g id="SvgjsG1149"
                                                                    className="apexcharts-bar-goals-groups"
                                                                    class="apexcharts-hidden-element-shown"
                                                                    clip-path="url(#gridRectMarkerMask92ul4qb9)"></g>
                                                                <g id="SvgjsG1151"
                                                                    className="apexcharts-bar-goals-groups"
                                                                    class="apexcharts-hidden-element-shown"
                                                                    clip-path="url(#gridRectMarkerMask92ul4qb9)"></g>
                                                                <g id="SvgjsG1153"
                                                                    className="apexcharts-bar-goals-groups"
                                                                    class="apexcharts-hidden-element-shown"
                                                                    clip-path="url(#gridRectMarkerMask92ul4qb9)"></g>
                                                                <g id="SvgjsG1155"
                                                                    className="apexcharts-bar-goals-groups"
                                                                    class="apexcharts-hidden-element-shown"
                                                                    clip-path="url(#gridRectMarkerMask92ul4qb9)"></g>
                                                            </g>
                                                            <g id="SvgjsG1144"
                                                                class="apexcharts-bar-shadows apexcharts-hidden-element-shown">
                                                            </g>
                                                        </g>
                                                        <g id="SvgjsG1126"
                                                            class="apexcharts-datalabels apexcharts-hidden-element-shown"
                                                            data:realIndex="0"></g>
                                                        <g id="SvgjsG1142"
                                                            class="apexcharts-datalabels apexcharts-hidden-element-shown"
                                                            data:realIndex="1"></g>
                                                    </g>
                                                    <line id="SvgjsLine1170" x1="0" y1="0"
                                                        x2="499.164794921875" y2="0" stroke="#b6b6b6"
                                                        stroke-dasharray="0" stroke-width="1"
                                                        stroke-linecap="butt" class="apexcharts-ycrosshairs"></line>
                                                    <line id="SvgjsLine1171" x1="0" y1="0"
                                                        x2="499.164794921875" y2="0" stroke-dasharray="0"
                                                        stroke-width="0" stroke-linecap="butt"
                                                        class="apexcharts-ycrosshairs-hidden"></line>
                                                    <g id="SvgjsG1172" class="apexcharts-xaxis"
                                                        transform="translate(0, 0)">
                                                        <g id="SvgjsG1173" class="apexcharts-xaxis-texts-g"
                                                            transform="translate(0, -4)"><text id="SvgjsText1175"
                                                                font-family="inherit" x="41.597066243489586"
                                                                y="309.73" text-anchor="middle"
                                                                dominant-baseline="auto" font-size="12px"
                                                                font-weight="400" fill="#99a1b7"
                                                                class="apexcharts-text apexcharts-xaxis-label "
                                                                style="font-family: inherit;">
                                                                <tspan id="SvgjsTspan1176">Feb</tspan>
                                                                <title>Feb</title>
                                                            </text><text id="SvgjsText1178" font-family="inherit"
                                                                x="124.79119873046875" y="309.73" text-anchor="middle"
                                                                dominant-baseline="auto" font-size="12px"
                                                                font-weight="400" fill="#99a1b7"
                                                                class="apexcharts-text apexcharts-xaxis-label "
                                                                style="font-family: inherit;">
                                                                <tspan id="SvgjsTspan1179">Mar</tspan>
                                                                <title>Mar</title>
                                                            </text><text id="SvgjsText1181" font-family="inherit"
                                                                x="207.9853312174479" y="309.73" text-anchor="middle"
                                                                dominant-baseline="auto" font-size="12px"
                                                                font-weight="400" fill="#99a1b7"
                                                                class="apexcharts-text apexcharts-xaxis-label "
                                                                style="font-family: inherit;">
                                                                <tspan id="SvgjsTspan1182">Apr</tspan>
                                                                <title>Apr</title>
                                                            </text><text id="SvgjsText1184" font-family="inherit"
                                                                x="291.1794637044271" y="309.73" text-anchor="middle"
                                                                dominant-baseline="auto" font-size="12px"
                                                                font-weight="400" fill="#99a1b7"
                                                                class="apexcharts-text apexcharts-xaxis-label "
                                                                style="font-family: inherit;">
                                                                <tspan id="SvgjsTspan1185">May</tspan>
                                                                <title>May</title>
                                                            </text><text id="SvgjsText1187" font-family="inherit"
                                                                x="374.3735961914063" y="309.73" text-anchor="middle"
                                                                dominant-baseline="auto" font-size="12px"
                                                                font-weight="400" fill="#99a1b7"
                                                                class="apexcharts-text apexcharts-xaxis-label "
                                                                style="font-family: inherit;">
                                                                <tspan id="SvgjsTspan1188">Jun</tspan>
                                                                <title>Jun</title>
                                                            </text><text id="SvgjsText1190" font-family="inherit"
                                                                x="457.5677286783855" y="309.73" text-anchor="middle"
                                                                dominant-baseline="auto" font-size="12px"
                                                                font-weight="400" fill="#99a1b7"
                                                                class="apexcharts-text apexcharts-xaxis-label "
                                                                style="font-family: inherit;">
                                                                <tspan id="SvgjsTspan1191">Jul</tspan>
                                                                <title>Jul</title>
                                                            </text></g>
                                                    </g>
                                                    <g id="SvgjsG1215" class="apexcharts-yaxis-annotations"></g>
                                                    <g id="SvgjsG1216" class="apexcharts-xaxis-annotations"></g>
                                                    <g id="SvgjsG1217" class="apexcharts-point-annotations"></g>
                                                </g>
                                            </svg>
                                            <div class="apexcharts-tooltip apexcharts-theme-light">
                                                <div class="apexcharts-tooltip-title"
                                                    style="font-family: inherit; font-size: 12px;"></div>
                                                <div class="apexcharts-tooltip-series-group" style="order: 1;"><span
                                                        class="apexcharts-tooltip-marker"
                                                        style="background-color: rgb(27, 132, 255);"></span>
                                                    <div class="apexcharts-tooltip-text"
                                                        style="font-family: inherit; font-size: 12px;">
                                                        <div class="apexcharts-tooltip-y-group"><span
                                                                class="apexcharts-tooltip-text-y-label"></span><span
                                                                class="apexcharts-tooltip-text-y-value"></span></div>
                                                        <div class="apexcharts-tooltip-goals-group"><span
                                                                class="apexcharts-tooltip-text-goals-label"></span><span
                                                                class="apexcharts-tooltip-text-goals-value"></span>
                                                        </div>
                                                        <div class="apexcharts-tooltip-z-group"><span
                                                                class="apexcharts-tooltip-text-z-label"></span><span
                                                                class="apexcharts-tooltip-text-z-value"></span></div>
                                                    </div>
                                                </div>
                                                <div class="apexcharts-tooltip-series-group" style="order: 2;"><span
                                                        class="apexcharts-tooltip-marker"
                                                        style="background-color: rgb(219, 223, 233);"></span>
                                                    <div class="apexcharts-tooltip-text"
                                                        style="font-family: inherit; font-size: 12px;">
                                                        <div class="apexcharts-tooltip-y-group"><span
                                                                class="apexcharts-tooltip-text-y-label"></span><span
                                                                class="apexcharts-tooltip-text-y-value"></span></div>
                                                        <div class="apexcharts-tooltip-goals-group"><span
                                                                class="apexcharts-tooltip-text-goals-label"></span><span
                                                                class="apexcharts-tooltip-text-goals-value"></span>
                                                        </div>
                                                        <div class="apexcharts-tooltip-z-group"><span
                                                                class="apexcharts-tooltip-text-z-label"></span><span
                                                                class="apexcharts-tooltip-text-z-value"></span></div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>



                </div>
            </div>
        </div>
    </div> --}}
    @include('user.profile.partials.update-profile-information-form')
    @include('user.profile.partials.update-password-form')
    @include('user.profile.partials.delete-user-form')
</x-app-layout>

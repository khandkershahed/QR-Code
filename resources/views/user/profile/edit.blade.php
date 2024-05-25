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
                            <a href="javascript:void(0)" data-bs-toggle="modal"
                                data-bs-target="#update_account_{{ $user->id }}"
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
                            <div class="fw-bolder mt-5">Default Language</div>
                            <div class="text-gray-600">English</div>
                            <div class="fw-bolder mt-5">Last Login</div>
                            <div class="text-gray-600">{{ optional($last_login)->login_time }}</div>
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
                    <form class="form" method="POST" action="{{ route('profile.update', $user->id) }}">
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
                    <form class="form" method="POST" action="{{ route('profile.update', $user->id) }}"
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
        <div class="modal-dialog modal-dialog-centered modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <h2 class="fw-bolder">Update Your Profile</h2>
                    <!--begin::Close-->
                    <div class="btn btn-icon btn-sm btn-active-light-primary ms-2" data-bs-dismiss="modal"
                        aria-label="Close">
                        <span class="svg-icon svg-icon-2x fs-1">X</span>
                    </div>
                    <!--end::Close-->
                </div>
                <div class="modal-body scroll-y">
                    <form class="form" method="POST" action="{{ route('profile.update', $user->id) }}"
                        enctype="multipart/form-data">
                        @csrf
                        @method('PATCH')
                        <div class="row">
                            <div class="mb-5 col-lg-6">
                                <x-metronic.label for="name"
                                    class="form-label">{{ __('Name') }}</x-metronic.label>
                                <x-metronic.input id="name" type="text" name="name" :value="old('name', $user->name)"
                                    placeholder="Enter Your name"></x-metronic.input>
                            </div>
                            <div class="mb-5 col-lg-6">
                                <x-metronic.label class="form-label">{{ __('Email') }}</x-metronic.label>
                                <!--end::Label-->
                                <!--begin::Input-->
                                <x-metronic.input type="email" name="email"
                                    class="form-control form-control-lg form-control-solid"
                                    placeholder="Enter your email address" value="{{ old('email', $user->email) }}"
                                    autocomplete="off"></x-metronic.input>

                                @if ($user instanceof \Illuminate\Contracts\Auth\MustVerifyEmail && !$user->hasVerifiedEmail())
                                    <div>
                                        <p class="small mt-2 text-secondary">
                                            {{ __('Your email address is unverified.') }}

                                            <button form="send-verification"
                                                class="text-decoration-underline small text-secondary hover:text-dark rounded-0 focus:outline-none"
                                                style="border: none; box-shadow: none;" onclick="this.blur();">
                                                {{ __('Click here to re-send the verification email.') }}
                                            </button>
                                        </p>

                                        @if (session('status') === 'verification-link-sent')
                                            <p class="mt-2 fw-semibold small text-success">
                                                {{ __('A new verification link has been sent to your email address.') }}
                                            </p>
                                        @endif
                                    </div>
                                @endif

                            </div>
                            <div class="mb-5 col-lg-4">
                                <x-metronic.label for="designation"
                                    class="form-label">{{ __('Designation') }}</x-metronic.label>
                                <x-metronic.input id="designation" type="text" name="designation"
                                    :value="old('designation', $user->designation)" placeholder="Enter Your Designation"></x-metronic.input>
                            </div>
                            <div class="mb-5 col-lg-4">
                                <x-metronic.label for="profile_image"
                                    class="form-label">{{ __('Profile Image') }}</x-metronic.label>
                                {{-- <input type="file" id="profile_image" name="profile_image" placeholder="Enter Your Profile Image" class="form-control @error('profile_image') is-invalid @enderror"> --}}
                                <x-metronic.input id="profile_image" type="file" name="profile_image"
                                    :value="old('profile_image', $user->profile_image)"></x-metronic.input>
                            </div>
                            <div class="mb-5 col-lg-4">
                                <x-metronic.label for="company_logo"
                                    class="form-label">{{ __('Company Logo') }}</x-metronic.label>
                                {{-- <input type="file" id="company_logo" name="company_logo" placeholder="Enter Your Company Logo" class="form-control @error('company_logo') is-invalid @enderror"> --}}
                                <x-metronic.input id="company_logo" type="file" name="company_logo"
                                    :value="old('company_logo', $user->company_logo)"></x-metronic.input>
                            </div>
                            <div class="mb-5 col-lg-4">
                                <x-metronic.label for="company_name"
                                    class="form-label">{{ __('Company Name') }}</x-metronic.label>
                                <x-metronic.input id="company_name" type="text" name="company_name"
                                    :value="old('company_name', $user->company_name)" placeholder="Enter Your Company Name"></x-metronic.input>
                            </div>
                            <div class="mb-5 col-lg-4">
                                <x-metronic.label for="phone"
                                    class="form-label">{{ __('Phone') }}</x-metronic.label>
                                <x-metronic.input id="phone" type="text" name="phone" :value="old('phone', $user->phone)"
                                    placeholder="Enter Your Phone"></x-metronic.input>
                            </div>
                            <div class="mb-5 col-lg-4">
                                <x-metronic.label for="address_line_one"
                                    class="form-label">{{ __('Address Line One') }}</x-metronic.label>
                                <x-metronic.input id="address_line_one" type="text" name="address_line_one"
                                    :value="old('address_line_one', $user->address_line_one)" placeholder="Enter Your Address Line One"></x-metronic.input>
                            </div>
                            <div class="mb-5 col-lg-4">
                                <x-metronic.label for="address_line_two"
                                    class="form-label">{{ __('Address Line Two') }}</x-metronic.label>
                                <x-metronic.input id="address_line_two" type="text" name="address_line_two"
                                    :value="old('address_line_two', $user->address_line_two)" placeholder="Enter Your Address Line Two"></x-metronic.input>
                            </div>
                            <div class="mb-5 col-lg-4">
                                <x-metronic.label for="city"
                                    class="form-label">{{ __('City') }}</x-metronic.label>
                                <x-metronic.input id="city" type="text" name="city" :value="old('city', $user->city)"
                                    placeholder="Enter Your City"></x-metronic.input>
                            </div>
                            <div class="mb-5 col-lg-4">
                                <x-metronic.label for="country"
                                    class="form-label">{{ __('Country') }}</x-metronic.label>
                                <x-metronic.input id="country" type="text" name="country" :value="old('country', $user->country)"
                                    placeholder="Enter Your Country"></x-metronic.input>
                            </div>
                            <div class="mb-5 col-lg-4">
                                <x-metronic.label for="postal"
                                    class="form-label">{{ __('Postal') }}</x-metronic.label>
                                <x-metronic.input id="postal" type="number" name="postal" :value="old('postal', $user->postal)"
                                    placeholder="Enter Your Postal"></x-metronic.input>
                            </div>
                            <div class="mb-5 col-lg-4">
                                <x-metronic.label for="facebook_id"
                                    class="form-label">{{ __('Facebook Id') }}</x-metronic.label>
                                <x-metronic.input id="facebook_id" type="url" name="facebook_id"
                                    :value="old('facebook_id', $user->facebook_id)" placeholder="Enter Your Facebook Id"></x-metronic.input>
                            </div>
                            <div class="mb-5 col-lg-4">
                                <x-metronic.label for="google_id"
                                    class="form-label">{{ __('Google Id') }}</x-metronic.label>
                                <x-metronic.input id="google_id" type="url" name="google_id" :value="old('google_id', $user->google_id)"
                                    placeholder="Enter Your Google Id"></x-metronic.input>
                            </div>
                            <div class="mb-5 col-lg-4">
                                <x-metronic.label for="github_id"
                                    class="form-label">{{ __('Github Id') }}</x-metronic.label>
                                <x-metronic.input id="github_id" type="url" name="github_id" :value="old('github_id', $user->github_id)"
                                    placeholder="Enter Your Github Id"></x-metronic.input>
                            </div>
                            <div class="mb-5 col-lg-4">
                                <x-metronic.label for="apple_id"
                                    class="form-label">{{ __('Apple Id') }}</x-metronic.label>
                                <x-metronic.input id="apple_id" type="url" name="apple_id" :value="old('apple_id', $user->apple_id)"
                                    placeholder="Enter Your Apple Id"></x-metronic.input>
                            </div>
                            <div class="mb-5 col-lg-4">
                                <x-metronic.label for="instagram_id"
                                    class="form-label">{{ __('Instagram Id') }}</x-metronic.label>
                                <x-metronic.input id="instagram_id" type="url" name="instagram_id"
                                    :value="old('instagram_id', $user->instagram_id)" placeholder="Enter Your Instagram Id"></x-metronic.input>
                            </div>
                            <div class="mb-5 col-lg-4">
                                <x-metronic.label for="pinterest_id"
                                    class="form-label">{{ __('Printerest Id') }}</x-metronic.label>
                                <x-metronic.input id="pinterest_id" type="url" name="pinterest_id"
                                    :value="old('pinterest_id', $user->pinterest_id)" placeholder="Enter Your Printerest Id"></x-metronic.input>
                            </div>
                            <div class="mb-5 col-lg-4">
                                <x-metronic.label for="linked_in_id"
                                    class="form-label">{{ __('Likedin Id') }}</x-metronic.label>
                                <x-metronic.input id="linked_in_id" type="url" name="linked_in_id"
                                    :value="old('linked_in_id', $user->linked_in_id)" placeholder="Enter Your Likedin Id"></x-metronic.input>
                            </div>
                        </div>
                        <div class="text-end pt-10">
                            <x-metronic.button type="submit" class="primary">
                                {{ __('Save Changes') }}
                            </x-metronic.button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    {{-- @include('user.profile.partials.update-profile-information-form')
    @include('user.profile.partials.update-password-form')
    @include('user.profile.partials.delete-user-form') --}}
</x-app-layout>

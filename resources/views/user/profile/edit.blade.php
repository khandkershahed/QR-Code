{{-- <x-app-layout :title="'My Profile ' . Auth::user()->name"> --}}
<x-app-layout :title="'My Profile '">
    <style>
        .nav-tabs .nav-item.show .nav-link,
        .nav-tabs .nav-link {
            background-color: transparent;
        }
    </style>
    <div class="row mt-3">
        <div class="col-lg-3">
            <div class="card mb-5 mb-xl-8 rounded-0">
                <div class="card-body p-0">
                    <div class="d-flex flex-center flex-column py-5 bg-light-info border">
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
                        <div class="fw-bolder mb-3">Created NFC & QR
                            <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="popover"
                                data-bs-trigger="hover" data-bs-html="true"
                                data-bs-content="Number of created NFC and QR Codes."></i>
                        </div>
                        <div class="d-flex flex-wrap flex-center">
                            <div
                                class="border border-gray-300 border-dashed rounded d-flex align-items-center p-3 me-2">
                                <p class="mb-0 me-2">{{ $nfc_cards->count() }}</p>
                                <p class="fw-bold mb-0 text-warning">NFC</p>
                            </div>
                            <div class="border border-gray-300 border-dashed rounded d-flex align-items-center p-3">
                                <p class="mb-0 me-2">{{ $qrs->count() }}</p>
                                <p class="fw-bold mb-0 text-warning">QR</p>
                            </div>
                        </div>
                    </div>
                    <div class="">
                        <div class="separator"></div>
                        <div class="d-flex flex-stack fs-4 py-3 bg-info px-4">
                            <div class="fw-bolder rotate collapsible text-white" data-bs-toggle="collapse"
                                data-bs-target="#user_collapse_details_{{ $user->id }}" role="button"
                                aria-expanded="false" aria-controls="user_collapse_details_{{ $user->id }}">
                                Details
                            </div>
                            <span data-bs-toggle="tooltip" data-bs-trigger="hover" title="Edit User Details">
                                <a href="javascript:void(0)" data-bs-toggle="modal"
                                    data-bs-target="#update_account_{{ $user->id }}"
                                    class="btn btn-sm btn-light-primary"><i class="fa-solid fa-pen"></i> Edit</a>
                            </span>
                        </div>
                        <div class="separator"></div>
                        <div class="collapse show px-4" id="user_collapse_details_{{ $user->id }}">
                            <div class="pb-5 fs-6">
                                @if (!empty($user->email))
                                    <div class="fw-bolder mt-5">Email</div>
                                    <div class="text-gray-600">
                                        <a href="#"
                                            class="text-gray-600 text-hover-primary">{{ $user->email }}</a>
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
        </div>
        <div class="col-lg-9">
            <div>
                <ul class="nav nav-custom nav-tabs nav-line-tabs nav-line-tabs-2x border-0 fs-4 fw-bold mb-1 bg-white">
                    <li class="nav-item">
                        <a class="nav-link text-active-primary p-5 active" data-bs-toggle="tab"
                            href="#kt_user_view_overview_tab">Overview</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-active-primary p-5" data-kt-countup-tabs="true" data-bs-toggle="tab"
                            href="#kt_user_view_overview_security">Security</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-active-primary p-5" data-bs-toggle="tab"
                            href="#kt_user_view_overview_events_and_logs_tab">Events &amp; Logs</a>
                    </li>
                </ul>
                <div class="tab-content mt-0 rounded-0" id="myTabContent">
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
    </div>

    <div class="modal fade metronic_modal" id="update_email_{{ $user->id }}" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered modal-md">
            <div class="modal-content rounded-0">
                <div class="modal-header py-3 bg-info rounded-0 pe-2">
                    <h3 class="modal-title text-white">Update Email</h3>
                    <button type="button" class="btn btn-sm btn-transparent btn-active-info pe-2 ps-3"
                        data-bs-dismiss="modal" aria-label="Close">
                        <i class="fa-solid fa-xmark fs-1"></i>
                    </button>
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
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content rounded-0">
                <div class="modal-header py-3 bg-info rounded-0 pe-2">
                    <h3 class="modal-title text-white">Update Password</h3>
                    <button type="button" class="btn btn-sm btn-transparent btn-active-info pe-2 ps-3"
                        data-bs-dismiss="modal" aria-label="Close">
                        <i class="fa-solid fa-xmark fs-1"></i>
                    </button>
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
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content rounded-0">
                <div class="modal-header py-3 bg-info rounded-0 pe-2">
                    <h3 class="modal-title text-white">Update Your Profile</h3>
                    <button type="button" class="btn btn-sm btn-transparent btn-active-info pe-2 ps-3"
                        data-bs-dismiss="modal" aria-label="Close">
                        <i class="fa-solid fa-xmark fs-1"></i>
                    </button>
                </div>
                <div class="modal-body scroll-y">
                    <form class="form" method="POST" action="{{ route('profile.update', $user->id) }}"
                        enctype="multipart/form-data">
                        @csrf
                        @method('PATCH')
                        <div class="row">
                            <div class="mb-5 col-lg-4">
                                <x-metronic.label for="name"
                                    class="form-label">{{ __('First Name') }}</x-metronic.label>
                                <x-metronic.input id="name" type="text" name="name" :value="old('name', $user->name)"
                                    placeholder="Enter Your First Name"></x-metronic.input>
                            </div>
                            <div class="mb-5 col-lg-4">
                                <x-metronic.label for="last_name"
                                    class="form-label">{{ __('Last Name') }}</x-metronic.label>
                                <x-metronic.input id="last_name" type="text" name="last_name" :value="old('last_name', $user->last_name)"
                                    placeholder="Enter Your Last Name"></x-metronic.input>
                            </div>
                            <div class="mb-5 col-lg-4">
                                <x-metronic.label class="form-label">{{ __('Email') }}</x-metronic.label>
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
                                <x-metronic.label for="profile_image"
                                    class="form-label">{{ __('Profile Image') }}</x-metronic.label>
                                <x-metronic.input id="profile_image" type="file" name="profile_image"
                                    :value="old('profile_image', $user->profile_image)"></x-metronic.input>
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
                                    class="form-label">{{ __('Street Address') }}</x-metronic.label>
                                <x-metronic.input id="address_line_one" type="text" name="address_line_one"
                                    :value="old('address_line_one', $user->address_line_one)" placeholder="Enter Your Street Address"></x-metronic.input>
                            </div>
                            <div class="mb-5 col-lg-4">
                                <x-metronic.label for="address_line_two"
                                    class="form-label">{{ __('Street Address Two') }}</x-metronic.label>
                                <x-metronic.input id="address_line_two" type="text" name="address_line_two"
                                    :value="old('address_line_two', $user->address_line_two)" placeholder="Enter Your Street Address Two"></x-metronic.input>
                            </div>
                            <div class="mb-5 col-lg-4">
                                <x-metronic.label for="city"
                                    class="form-label">{{ __('City') }}</x-metronic.label>
                                <x-metronic.input id="city" type="text" name="city" :value="old('city', $user->city)"
                                    placeholder="Enter Your City"></x-metronic.input>
                            </div>
                            <div class="mb-5 col-lg-4">
                                <x-metronic.label for="state"
                                    class="form-label">{{ __('State') }}</x-metronic.label>
                                <x-metronic.input id="state" type="text" name="state" :value="old('state', $user->state)"
                                    placeholder="Enter Your State"></x-metronic.input>
                            </div>
                            <div class="mb-5 col-lg-4">
                                <x-metronic.label for="postal"
                                    class="form-label">{{ __('Postcode') }}</x-metronic.label>
                                <x-metronic.input id="postal" type="number" name="postal" :value="old('postal', $user->postal)"
                                    placeholder="Enter Your Postcode"></x-metronic.input>
                            </div>
                            <div class="mb-5 col-lg-4">
                                <x-metronic.label for="country"
                                    class="form-label">{{ __('Country') }}</x-metronic.label>
                                <x-metronic.input id="country" type="text" name="country" :value="old('country', $user->country)"
                                    placeholder="Enter Your Country"></x-metronic.input>
                            </div>
                        </div>
                        <div class="text-end pt-10">
                            <button type="submit" class="btn btn-primary">
                                <i class="fa-solid fa-cloud-arrow-up pe-2"></i> {{ __('Save Changes') }}
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

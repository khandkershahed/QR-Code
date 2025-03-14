<x-app-layout :title="'My Dashboard'">
    <div class="container-fluid">
        <div class="row">
            <h1 class="text-center py-10">Hello <span class="text-success">{{ Auth::user()->name }}.</span> Welcome To
                Your Dashboard!</h1>

        </div>
        <div class="row g-5 gx-xl-10 mb-5 mb-xl-10">
            <div class="col-lg-6 mb-md-5 mb-xl-10">
                <div class="row">
                    <!-- Left Column -->
                    <div class="col-lg-6">
                        <!-- NFC Stats Card -->
                        <div class="card card-flush bgi-no-repeat bgi-size-contain bgi-position-x-end h-md-60 mb-5 mb-xl-10"
                            style="background-color: #3228b4; background-image: url('https://preview.keenthemes.com/metronic8/demo1/assets/media/patterns/vector-1.png')">
                            <div class="card-header pt-5">
                                <div class="card-title d-flex flex-column">
                                    <span
                                        class="fs-2hx fw-bold text-white me-2 lh-1 ls-n2">{{ $nfc_cards->count() }}</span>
                                    <span class="text-white opacity-75 pt-1 fw-semibold fs-6">Total Virtual Card
                                        Created</span>
                                </div>
                            </div>
                            <div class="card-body d-flex align-items-end pt-0">
                                <div class="d-flex align-items-center flex-column mt-3 w-100">
                                    <div
                                        class="d-flex justify-content-between fw-bold fs-6 text-white opacity-75 w-100 mt-auto mb-2">
                                        <span>{{ $nfc_pending }} Pending Virtual Card</span>
                                        <span>{{ $nfc_completion_percentage }}%</span>
                                    </div>
                                    <div class="h-8px mx-3 w-100 bg-white bg-opacity-50 rounded">
                                        <div class="bg-white rounded h-8px" role="progressbar"
                                            style="width: {{ $nfc_completion_percentage }}%;"
                                            aria-valuenow="{{ $nfc_completion_percentage }}" aria-valuemin="0"
                                            aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="card card-flush bgi-no-repeat bgi-size-contain bgi-position-x-end h-md-60 mb-5 mb-xl-10"
                            style="background-color: #15a5aa; background-image: url('https://preview.keenthemes.com/metronic8/demo1/assets/media/patterns/vector-1.png')">
                            <div class="card-header pt-5">
                                <div class="card-title d-flex flex-column">
                                    <span class="fs-2hx fw-bold text-white me-2 lh-1 ls-n2">{{ $qrs->count() }}</span>
                                    <span class="text-white opacity-75 pt-1 fw-semibold fs-6">Total QR Created</span>
                                </div>
                            </div>
                            <div class="card-body d-flex align-items-end pt-0">
                                <div class="d-flex align-items-center flex-column mt-3 w-100">
                                    <div
                                        class="d-flex justify-content-between fw-bold fs-6 text-white opacity-75 w-100 mt-auto mb-2">
                                        <span>{{ $qr_pending }} Pending QR</span>
                                        <span>{{ $qr_completion_percentage }}%</span>
                                    </div>
                                    <div class="h-8px mx-3 w-100 bg-white bg-opacity-50 rounded">
                                        <div class="bg-white rounded h-8px" role="progressbar"
                                            style="width: {{ $qr_completion_percentage }}%;"
                                            aria-valuenow="{{ $qr_completion_percentage }}" aria-valuemin="0"
                                            aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="card card-flush h-md-30 mb-2 mb-xl-10">
                            <div class="card-header pt-5">
                                <div class="card-title d-flex flex-column">
                                    <span
                                        class="fs-2hx fw-bold text-gray-900 me-2 lh-1 ls-n2">{{ count($qr_users) }}</span>
                                    <span class="text-gray-500 pt-1 fw-semibold fs-6">People View</span>
                                </div>
                            </div>
                            <div class="card-body pe-0">
                                <span class="fs-6 fw-bolder text-gray-800 d-block mb-2">QR Code Viewers</span>
                                <div class="symbol-group symbol-hover flex-nowrap">
                                    @foreach (array_slice($qr_users->toArray(), 0, 5) as $qr_user)
                                        @if ($qr_user !== false)
                                            <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip"
                                                data-bs-original-title="{{ optional($qr_user)->countryName }}">
                                                {{-- <span class="symbol-label bg-warning text-inverse-warning fw-bold">{{ optional($qr_user)->countryCode }}</span> --}}
                                                <span class="symbol-label bg-warning text-inverse-warning fw-bold"><i
                                                        class="fas fa-user"></i></span>
                                            </div>
                                        @endif
                                    @endforeach
                                    @if (count($qr_users) > 5)
                                        <a href="javascript:void(0)" class="symbol symbol-35px symbol-circle">
                                            <span
                                                class="symbol-label bg-dark text-gray-300 fs-8 fw-bold">+{{ count($qr_users) - 5 }}</span>
                                        </a>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="card card-flush h-md-30 mb-5 mb-xl-10">
                            <div class="card-header pt-5">
                                <div class="card-title d-flex flex-column">
                                    <span
                                        class="fs-2hx fw-bold text-gray-900 me-2 lh-1 ls-n2">{{ count($nfc_users) }}</span>
                                    <span class="text-gray-500 pt-1 fw-semibold fs-6">People View</span>
                                </div>
                            </div>
                            <div class="card-body pe-0">
                                <span class="fs-6 fw-bolder text-gray-800 d-block mb-2">NFC Viewer</span>
                                <div class="symbol-group symbol-hover flex-nowrap">
                                    @foreach (array_slice($nfc_users->toArray(), 0, 5) as $nfc_user)
                                        @if ($nfc_user !== false)
                                            <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip"
                                                data-bs-original-title="{{ optional($nfc_user)->countryName }}">
                                                {{-- <span class="symbol-label bg-warning text-inverse-warning fw-bold">{{ optional($nfc_user)->countryCode }}</span> --}}
                                                <span class="symbol-label bg-warning text-inverse-warning fw-bold"><i
                                                        class="fas fa-user"></i></span>
                                            </div>
                                        @endif
                                    @endforeach
                                    @if (count($nfc_users) > 5)
                                        <a href="javascript:void(0)" class="symbol symbol-35px symbol-circle">
                                            <span
                                                class="symbol-label bg-dark text-gray-300 fs-8 fw-bold">+{{ count($nfc_users) - 5 }}</span>
                                        </a>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <!-- External Links Card -->
                        <div class="card card-flush">
                            <div class="card-header pt-5">
                                <h3 class="card-title text-gray-800 fw-bold">External Links</h3>
                            </div>
                            <div class="card-body pt-0">
                                @php
                                    $links = [
                                        ['route' => 'user.qr-code.create', 'label' => 'Create QR'],
                                        ['route' => 'user.nfc-card.create', 'label' => 'Create Virtual Card'],
                                        // ['route' => '#', 'label' => 'Current Status'],
                                        ['route' => 'user.upgrade.plan', 'label' => 'Upgrade Plan'],
                                        // ['route' => '#', 'label' => 'My Profile'],
                                        ['route' => 'user.plan', 'label' => 'See My Plans'],
                                    ];
                                @endphp
                                <div class="row">
                                    @foreach ($links as $link)
                                        <div class="col-6">
                                            <div class="d-flex flex-stack">
                                                <a href="{{ route($link['route']) }}"
                                                    class="text-primary fw-semibold fs-6 me-2">{{ $link['label'] }}</a>
                                                <button type="button"
                                                    class="btn btn-icon btn-sm h-auto btn-color-gray-500 btn-active-color-primary justify-content-end">
                                                    <i class="fa-solid fa-exit-right-corner fs-2"></i>
                                                </button>
                                            </div>
                                            <div class="separator separator-dashed my-3"></div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="col-xxl-6">
                <div class="card card-flush h-md-60 mb-5 mb-xl-10">
                    <div class="card-body d-flex flex-column justify-content-between mt-9 bgi-no-repeat bgi-size-cover pb-0"
                        style="background-position: 100% 50%; background-image:url('https://preview.keenthemes.com/metronic8/demo1/assets/media/stock/900x600/42.png')">
                        <div class="mb-10">
                            <div class="fs-2hx fw-bold text-gray-800 text-center mb-13">
                                <span class="me-2">
                                    Try our all new Feature with
                                    <br>
                                    <span class="position-relative d-inline-block text-danger">
                                        <a href="https://preview.keenthemes.com/metronic8/demo1/pages/user-profile/overview.html"
                                            class="text-danger opacity-75-hover">Pro Plan</a>
                                        <span
                                            class="position-absolute opacity-15 bottom-0 start-0 border-4 border-danger border-bottom w-100"></span>
                                    </span>
                                </span>
                                For Subscription!
                            </div>
                            <div class="text-center d-flex justify-content-center">
                                <a href="{{ route('user.upgrade.plan') }}" class="btn btn-sm btn-dark fw-bold me-3">
                                    Upgrade Now
                                </a>
                                <a href="{{ route('user.plan') }}" class="btn btn-sm btn-dark fw-bold">
                                    Check Current Plan
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                @if (!empty($subscription))
                    <div class="card card-flush h-md-60 mb-5 mb-xl-10">
                        <div class="card-body d-flex flex-column justify-content-between mt-9 bgi-no-repeat bgi-size-cover pb-0"
                            style="background-position: 100% 50%; background-image:url('https://preview.keenthemes.com/metronic8/demo1/assets/media/stock/900x600/42.png')">
                            <div class="mb-10">
                                <div class="overflow-auto pb-5">
                                    <div
                                        class="notice d-flex bg-light-primary rounded border-primary border border-dashed p-6">
                                        <i class="fa-solid fa-devices-2 fs-2tx text-primary me-4"></i>
                                        <div class="d-flex flex-stack flex-grow-1 flex-wrap flex-md-nowrap">
                                            <div class="fw-semibold">
                                                <h4 class="text-gray-900 fw-bold">
                                                    Your Current Plan
                                                    <span style="color: orangered">
                                                        @if (!empty($subscription))
                                                            {{ $subscription->plan->title }}

                                                        @endif
                                                    </span>
                                                </h4>
                                                <div class="fs-6 text-gray-700">You Can Check Your Plan Or Status By
                                                    Clicking
                                                    Here!</div>
                                            </div>
                                            <a href="{{ route('user.plan') }}" class="btn btn-primary px-6 text-nowrap">
                                                Check Current Status
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endif
            </div>
        </div>
        {{-- Modal Start For Check Plan  --}}
        {{-- @if (empty($subscription))
            <div class="modal fade bg-dark bg-opacity-75 show" id="kt_app_engage_prebuilts_modal" tabindex="-1"
                aria-modal="true" role="dialog" style="display: block">
                <div class="modal-dialog modal-dialog-centered modal-lg p-5 p-lg-10"
                    id="kt_engage_prebuilts_modal_dialog">
                    <div class="modal-content rounded-4">
                        <div class="modal-header flex-stack border-0 px-10 pt-5 pb-0" id="kt_engage_prebuilts_header">
                            <button type="button"
                                class="btn btn-sm btn-icon btn-active-color-primary me-n2 position-relative z-index-1 default-modal-close"
                                data-bs-dismiss="modal">
                                <i class="fas fa-xmark fs-1"></i>
                            </button>
                        </div>
                        <div class="modal-body scroll-y pt-10 pb-15 px-lg-17">
                            <div data-kt-element="options">
                                <div class="pb-5 text-center">
                                    <h3 class="fw-bold">Currently on a</h3>
                                    <h1 class="mb-0 fw-bold" style="color: orangered;">
                                        {{ $subscription->plan->title ?? '14-day free trial' }}
                                    </h1>
                                </div>
                                <p class="text-muted fs-5 fw-semibold mb-10 text-center">
                                    Of our Premium Plan. This trial gives you full access to all premium features,
                                    including unlimited queries, priority support, and personalized assistance. Enjoy
                                    enhanced response times, detailed answers, and exclusive updates during this trial
                                    period. After the 14 days, all your data will be automatically deleted without
                                    permission. You will receive one email notification before this action is taken.
                                </p>
                                <div class="py-5 mb-15 text-center">
                                    <h1 class="mb-0 fw-bold" style="color: orangered;">Thank you for trying our <br>
                                        Premium service!</h1>
                                </div>
                                @if (empty($subscription))
                                    <div class="trial_end">
                                        <div id="countdown">
                                            <div id='tiles'></div>
                                            <div class="labels">
                                                <li>Days</li>
                                                <li>Hours</li>
                                                <li>Mins</li>
                                                <li>Secs</li>
                                            </div>
                                        </div>
                                    </div>
                                @endif
                            </div>

                            <div class="d-none" data-kt-element="apps">
                                <h3 class="text-gray-900 fw-bold mb-7">Authenticator Apps</h3>
                                <div class="text-gray-500 fw-semibold fs-6 mb-10">
                                    Using an authenticator app like
                                    <a href="https://support.google.com/accounts/answer/1066447?hl=en"
                                        target="_blank">Google Authenticator</a>,
                                    <a href="https://www.microsoft.com/en-us/account/authenticator"
                                        target="_blank">Microsoft Authenticator</a>,
                                    <a href="https://authy.com/download/" target="_blank">Authy</a>, or
                                    <a href="https://support.1password.com/one-time-passwords/"
                                        target="_blank">1Password</a>, scan the QR code. It will generate a 6-digit
                                    code for you to enter below.
                                    <div class="pt-5 text-center">
                                        <img src="https://preview.keenthemes.com/metronic8/demo1/assets/media/misc/qr.png"
                                            alt="" class="mw-150px">
                                    </div>
                                </div>
                                <form class="form fv-plugins-bootstrap5" action="#">
                                    <div class="mb-10">
                                        <input type="text" class="form-control form-control-lg form-control-solid"
                                            placeholder="Enter authentication code" name="code">
                                    </div>
                                    <div class="d-flex flex-center">
                                        <button type="reset" class="btn btn-light me-3">Cancel</button>
                                        <button type="submit" class="btn btn-primary">
                                            <span class="indicator-label">Submit</span>
                                            <span class="indicator-progress">Please wait...
                                                <span
                                                    class="spinner-border spinner-border-sm align-middle ms-2"></span>
                                            </span>
                                        </button>
                                    </div>
                                </form>
                            </div>

                            <div class="d-none" data-kt-element="sms">
                                <h3 class="text-gray-900 fw-bold fs-3 mb-5">SMS: Verify Your Mobile Number</h3>
                                <div class="text-muted fw-semibold mb-10">
                                    Enter your mobile phone number with country code and we will send you a verification
                                    code upon request.
                                </div>
                                <form class="form fv-plugins-bootstrap5" action="#">
                                    <div class="mb-10">
                                        <input type="text" class="form-control form-control-lg form-control-solid"
                                            placeholder="Mobile number with country code..." name="mobile">
                                    </div>
                                    <div class="d-flex flex-center">
                                        <button type="reset" class="btn btn-light me-3">Cancel</button>
                                        <button type="submit" class="btn btn-primary">
                                            <span class="indicator-label">Submit</span>
                                            <span class="indicator-progress">Please wait...
                                                <span
                                                    class="spinner-border spinner-border-sm align-middle ms-2"></span>
                                            </span>
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endif --}}
        {{-- Modal Start For Check Plan  --}}
    </div>
    @push('scripts')
        <script>
            $(document).ready(function() {
                $('#kt_app_engage_prebuilts_modal').modal('show');

                $('#kt_app_engage_prebuilts_modal').on('click', '.btn-active-color-primary', function() {
                    $('#kt_app_engage_prebuilts_modal').modal('hide');
                });
            });

            document.addEventListener("DOMContentLoaded", function() {
                var countdown = document.getElementById("tiles");

                if (!countdown) {
                    console.error('Countdown element not found');
                    return;
                }

                var userCreated = new Date("{{ Auth::user()->created_at }}").getTime();
                var trialPeriod = 14 * 24 * 60 * 60 * 1000; // 14 days in milliseconds
                var targetDate = userCreated + trialPeriod;
                var currentDate = new Date().getTime();
                var timeLeft = targetDate - currentDate;

                if (timeLeft <= 0) {
                    $('.trial_end').html(
                        '<h1 class="text-center text-danger pt-4 fw-bold">Your 14-day Free trial has ended. Your NFC and QRs will be deleted.</h1>'
                    );
                }

                function getCountdown() {
                    var currentDate = new Date().getTime();
                    var secondsLeft = (targetDate - currentDate) / 1000;

                    if (secondsLeft <= 0) {
                        countdown.innerHTML = "<span>00</span><span>00</span><span>00</span><span>00</span>";
                        return;
                    }

                    var days = pad(parseInt(secondsLeft / 86400));
                    secondsLeft %= 86400;

                    var hours = pad(parseInt(secondsLeft / 3600));
                    secondsLeft %= 3600;

                    var minutes = pad(parseInt(secondsLeft / 60));
                    var seconds = pad(parseInt(secondsLeft % 60));

                    countdown.innerHTML =
                        `<span>${days}</span><span>${hours}</span><span>${minutes}</span><span>${seconds}</span>`;
                }

                function pad(n) {
                    return (n < 10 ? '0' : '') + n;
                }

                setInterval(getCountdown, 1000);
            });
        </script>
    @endpush
</x-app-layout>

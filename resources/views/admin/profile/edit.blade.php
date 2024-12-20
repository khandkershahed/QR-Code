<x-admin-app-layout :title="'Your Profile - Admin Panel'">
    <div class="container-fluid my-8 px-0">
        <div class="row mb-5">
            <div class="col-lg-12">
                <div class="card card-flush h-md-100">
                    <div class="card-body d-flex flex-column justify-content-between mt-9 bgi-no-repeat bgi-size-cover bgi-position-x-center pb-0"
                        style="background-position: 100% 50%; background-image:url('/metronic8/demo1/assets/media/stock/900x600/42.png')">
                        <div class="mb-10">
                            <div class="fs-2hx fw-bold text-gray-800 text-center mb-13">
                                <span class="me-2">
                                    Manage Your Account Details Here.
                                    <br>
                                    <span class="position-relative d-inline-block text-danger">
                                        <a href="{{ route('user.subscribe') }}"
                                            class="text-danger opacity-75-hover">Explore All Subscriptions</a>
                                        <span
                                            class="position-absolute opacity-15 bottom-0 start-0 border-4 border-danger border-bottom w-100"></span>
                                    </span>
                                </span>
                                For Complete Check!
                            </div>
                            <div class="text-center">
                                <a href="{{ route('dashboard') }}" class="btn btn-sm btn-dark fw-bold">
                                    Go to Dashboard
                                </a>
                            </div>
                        </div>
                        <img class="mx-auto h-150px h-lg-200px theme-light-show"
                            src="{{ asset('images/mange-profile.webp') }}" alt="">
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-3">
                @include('admin.profile.partials.update-profile-information-form')
            </div>
            <div class="col-lg-6">
                @include('admin.profile.partials.update-password-form')
            </div>
            <div class="col-lg-3">
                @include('admin.profile.partials.delete-user-form')
            </div>
        </div>
    </div>
</x-admin-app-layout>

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name', 'MD Boilerplate') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <link href="{{ asset('bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" />
    
    <!-- Styles -->
    <style>
        .preloader {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: #fff;
            display: flex;
            justify-content: center;
            align-items: center;
            z-index: 9999;
        }
    </style>
</head>

<body>
    <!-- Preloader -->
    <div class="preloader">
        <img src="https://i.pinimg.com/originals/34/ed/db/34eddb31008bd92d6367d1bccbe341e8.gif" alt="Client Logo" />
    </div>

    <div class="container py-5 my-4">
        <div class="d-flex justify-content-center align-items-center mt-5">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex justify-content-center align-items-center">
                        <div class="border border-white p-2 mb-4">
                            @if (Route::has('login'))
                                @auth
                                    <a href="{{ url('/dashboard') }}"
                                        class="fw-semibold text-gray-600 hover-text-gray-900 text-decoration-none">
                                        User Dashboard</a>
                                @else
                                    <a href="{{ route('login') }}"
                                        class="ms-4 fw-semibold text-gray-600 hover-text-gray-900 text-decoration-none">
                                        User Log in</a>

                                    @if (Route::has('register'))
                                        <a href="{{ route('register') }}"
                                            class="ms-4 fw-semibold text-gray-600 hover-text-gray-900 text-decoration-none">
                                            User Register</a>
                                    @endif
                                @endauth
                            @endif
                        </div>

                        <div class="border border-white p-2 mb-4">
                            @if (Route::has('admin.login'))
                                @auth('admin')
                                    <a href="{{ url('/admin/dashboard') }}"
                                        class="ms-4 fw-semibold text-gray-600 hover-text-gray-900 text-decoration-none">
                                        Admin Dashboard</a>
                                @else
                                    <a href="{{ route('admin.login') }}"
                                        class="ms-4 fw-semibold text-gray-600 hover-text-gray-900 text-decoration-none">
                                        Admin Log in</a>
                                @endauth
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="{{ asset('bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Handle preloader
            function handlePreloader() {
                const preloader = document.querySelector('.preloader');
                if (preloader) {
                    // Ensure the preloader is hidden only after all resources (images, fonts) are loaded
                    window.addEventListener('load', function() {
                        preloader.style.display = 'none';
                    });
                }
            }
            handlePreloader();
        });
    </script>
</body>

</html>

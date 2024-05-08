<?php

namespace App\Exceptions;

// use Arr;
use Throwable;
use Illuminate\Support\Arr;
use Illuminate\Auth\AuthenticationException;
use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;

class Handler extends ExceptionHandler
{
    /**
     * The list of the inputs that are never flashed to the session on validation exceptions.
     *
     * @var array<int, string>
     */
    protected $dontFlash = [
        'current_password',
        'password',
        'password_confirmation',
    ];

    /**
     * Register the exception handling callbacks for the application.
     */
    public function register(): void
    {
        $this->reportable(function (Throwable $e) {
            //
        });
    }
    // protected function unauthenticated($request, AuthenticationException $exception)
    // {
    //     $guard = Arr::first($exception->guards());
    //     return $this->shouldReturnJson($request, $exception)
    //         ? response()->json(['message' => $exception->getMessage()], 401)
    //         : redirect()->guest($guard === 'admin' ? route('admin.login') : route('login'));
    // }
    protected function unauthenticated($request, AuthenticationException $exception)
    {
        $guard = Arr::first($exception->guards());

        switch ($guard) {
            case 'admin':
                $redirectTo = route('admin.login');
                break;
            case 'reseller':
                $redirectTo = route('reseller.login');
                break;
            default:
                $redirectTo = route('login');
                break;
        }

        return $this->shouldReturnJson($request, $exception)
            ? response()->json(['message' => $exception->getMessage()], 401)
            : redirect()->guest($redirectTo);
    }

}

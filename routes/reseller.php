<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Reseller\Auth\PasswordController;
use App\Http\Controllers\Reseller\Auth\NewPasswordController;
use App\Http\Controllers\Reseller\Auth\VerifyEmailController;
use App\Http\Controllers\Subscription\SubscriptionController;
use App\Http\Controllers\Reseller\Auth\RegisteredUserController;
use App\Http\Controllers\Reseller\Auth\PasswordResetLinkController;
use App\Http\Controllers\Reseller\Auth\ConfirmablePasswordController;
use App\Http\Controllers\Reseller\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Reseller\Auth\EmailVerificationPromptController;
use App\Http\Controllers\Reseller\Auth\EmailVerificationNotificationController;




Route::middleware('guest:reseller')->prefix('reseller')->name('reseller.')->group(function () {

    Route::get('register', [RegisteredUserController::class, 'create'])
    ->name('register');

Route::post('register', [RegisteredUserController::class, 'store']);

    Route::get('login', [AuthenticatedSessionController::class, 'create'])
        ->name('login');

    Route::post('login', [AuthenticatedSessionController::class, 'store']);

    Route::get('forgot-password', [PasswordResetLinkController::class, 'create'])
        ->name('password.request');

    Route::post('forgot-password', [PasswordResetLinkController::class, 'store'])
        ->name('password.email');

    Route::get('reset-password/{token}', [NewPasswordController::class, 'create'])
        ->name('password.reset');

    Route::post('reset-password', [NewPasswordController::class, 'store'])
        ->name('password.store');
});

Route::middleware('auth:reseller')->prefix('reseller')->name('reseller.')->group(function () {

    Route::get('/dashboard', [AuthenticatedSessionController::class, 'dashboard'])->name('dashboard');

    Route::get('verify-email', EmailVerificationPromptController::class)
        ->name('verification.notice');

    Route::get('verify-email/{id}/{hash}', VerifyEmailController::class)
        ->middleware(['signed', 'throttle:6,1'])
        ->name('verification.verify');

    Route::post('email/verification-notification', [EmailVerificationNotificationController::class, 'store'])
        ->middleware('throttle:6,1')
        ->name('verification.send');

    Route::get('confirm-password', [ConfirmablePasswordController::class, 'show'])
        ->name('password.confirm');

    Route::post('confirm-password', [ConfirmablePasswordController::class, 'store']);

    Route::put('password', [PasswordController::class, 'update'])->name('password.update');

    Route::post('check-password', [PasswordController::class, 'checkPassword'])->name('checkPassword');

    Route::post('logout', [AuthenticatedSessionController::class, 'destroy'])
        ->name('logout');

});

<?php

use App\Models\Admin\NewsLetter;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\FaqController;
use App\Http\Controllers\Admin\LogController;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\SiteController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\QrCodeController;
use App\Http\Controllers\Admin\BarCodeController;
use App\Http\Controllers\Admin\BlogTagController;
use App\Http\Controllers\Admin\ContactController;
use App\Http\Controllers\Admin\NfcCardController;
use App\Http\Controllers\RequestedCardController;
use App\Http\Controllers\Admin\BlogPostController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\DynamicCssController;
use App\Http\Controllers\Admin\NewsLetterController;
use App\Http\Controllers\Admin\PermissionController;
use App\Http\Controllers\Admin\ActivityLogController;
use App\Http\Controllers\Admin\VirtualCardController;
use App\Http\Controllers\Subscription\PlanController;
use App\Http\Controllers\Admin\BlogCategoryController;
use App\Http\Controllers\Admin\EmailSettingController;
use App\Http\Controllers\RestaurantCategoryController;
use App\Http\Controllers\Admin\Auth\PasswordController;
use App\Http\Controllers\Admin\UserManagementController;
use App\Http\Controllers\Admin\Auth\NewPasswordController;
use App\Http\Controllers\Admin\Auth\VerifyEmailController;
use App\Http\Controllers\Admin\UserNotificationController;
use App\Http\Controllers\Subscription\SubscriptionController;
use App\Http\Controllers\Admin\Auth\PasswordResetLinkController;
use App\Http\Controllers\Admin\Auth\ConfirmablePasswordController;
use App\Http\Controllers\Admin\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Admin\Auth\EmailVerificationPromptController;
use App\Http\Controllers\Admin\Auth\EmailVerificationNotificationController;
use App\Http\Controllers\Admin\CardProductController;

Route::middleware('guest:admin')->prefix('admin')->name('admin.')->group(function () {

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

Route::middleware('auth:admin', 'role:admin')->prefix('admin')->name('admin.')->group(function () {
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

    Route::post('qrcode/preview', [QrCodeController::class, 'qrPreview'])->name('qr.preview');

    Route::resources(
        [
            'role'           => RoleController::class,
            'permission'     => PermissionController::class,
            'email-settings' => EmailSettingController::class,
            'plans'          => PlanController::class,
            'blog-post'      => BlogPostController::class,
            'faq'            => FaqController::class,
        ],
        ['except' => ['show']]
    );
    Route::resources(
        [
            'blog-category'       => BlogCategoryController::class, //done
            'blog-tags'           => BlogTagController::class, //done
        ],
        ['except' => ['show', 'create', 'edit']]
    );
    Route::resources(
        [
            'user'                => UserController::class,
            'user-management'     => UserManagementController::class,
            'user-notification'   => UserNotificationController::class,
            'categories'          => CategoryController::class,
            'qr-code'             => QrCodeController::class,
            'barcode'             => BarCodeController::class,
            'nfc-card'            => NfcCardController::class,
            'virtual-card'        => VirtualCardController::class,
            'card-product'       => CardProductController::class,
            'requested-card'      => RequestedCardController::class,
            'restaurant-category' => RestaurantCategoryController::class,

        ],
    );

    Route::get('template/qrcode', [QrCodeController::class, 'qrTemplate'])->name('qr.template');
    Route::get('template/nfc-card', [VirtualCardController::class, 'nfcTemplate'])->name('nfc.template');
    Route::post('single-barcode/store', [BarCodeController::class, 'store'])->name('single-barcode.store');
    Route::post('bulk-barcode/store', [BarCodeController::class, 'bulkStore'])->name('bulk-barcode.store');

    Route::controller(DynamicCssController::class)->group(function () {
        Route::get('/dynamic-css', 'index')->name('css.index');
        Route::put('/dynamic-css/{id}/update', 'update')->name('css.update');
    });
    Route::controller(SubscriptionController::class)->group(function () {
        Route::get('/user-subscription', 'index')->name('user.subscriptions');
        // Route::put('/dynamic-css/{id}/update', 'update')->name('css.update');
    });
    //Contact
    Route::controller(ContactController::class)->group(function () {
        Route::get('/contact', 'index')->name('contact.index');
        Route::get('/contact/create', 'create')->name('contact.create');
        Route::get('/contact/{id}/edit', 'edit')->name('contact.edit');
        Route::put('/contact/{id}/update', 'update')->name('contact.update');
        Route::delete('/contact/{id}/destroy', 'destroy')->name('contact.destroy');
    });
    //NewsLetter
    Route::controller(NewsLetterController::class)->group(function () {
        Route::get('/newsletter', 'index')->name('newsletter.index');
        Route::post('/newsletter/store', 'store')->name('newsletter.store');
        Route::get('/newsletter/{id}/edit', 'edit')->name('newsletter.edit');
        Route::put('/newsletter/{id}/update', 'update')->name('newsletter.update');
        Route::delete('/newsletter/{id}/destroy', 'destroy')->name('newsletter.destroy');
    });

    Route::post('restaurant-category/edit', [RestaurantCategoryController::class, 'categoryEdit'])->name('editCategory');
    Route::post('/restaurant-category/destroy', [RestaurantCategoryController::class, 'destroyCategory'])->name('restaurant-category.destroy');

    Route::get('qrcode/summary/{id}', [QrCodeController::class, 'qrSummary'])->name('qr.summary');
    Route::post('/update-nfc-session', [NfcCardController::class, 'updateNFCTemplateSession'])->name('updateNfcSession');

    Route::get('qrcode/preview', [QrCodeController::class, 'qrPreview'])->name('qr.preview');
    Route::get('website/setting', [SiteController::class, 'index'])->name('setting.index');
    Route::put('site/setting', [SiteController::class, 'site'])->name('site.setting');

    Route::get('role/{roleId}/give-permission', [RoleController::class, 'givePermission'])->name('role.give-permission');
    Route::patch('role/{roleId}/give-permission', [RoleController::class, 'storePermission'])->name('role.store-permission');

    Route::get('log', [LogController::class, 'index'])->name('log.index');
    Route::get('log/{id}', [LogController::class, 'show'])->name('log.show');
    Route::delete('log/{id}', [LogController::class, 'destroy'])->name('log.destroy');
    Route::get('log/download/{id}', [LogController::class, 'download'])->name('log.download');

    Route::get('activity_logs', [ActivityLogController::class, 'index'])->name('activity_logs.index');
    Route::get('activity_logs/{activity_log}', [ActivityLogController::class, 'show'])->name('activity_logs.show');
    Route::delete('activity_logs/{activity_log}', [ActivityLogController::class, 'destroy'])->name('activity_logs.destroy');
});

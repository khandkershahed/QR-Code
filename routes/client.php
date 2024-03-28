<?php

use App\Http\Controllers\Admin\NfcCardController;
use App\Http\Controllers\Admin\QrCodeController;
use Illuminate\Support\Facades\Route;




Route::middleware('auth')->prefix('user')->name('user.')->group(function () {
    Route::resources(
        [
            'qr-code'        => QrCodeController::class,
            'nfc-card'       => NfcCardController::class,
        ],
    );
});
Route::get('/{Qr}', [QrCodeController::class, 'showQr'])->name('showQr');


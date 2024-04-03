<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AdminProfileController;
use App\Http\Controllers\Admin\ContactController;
use App\Http\Controllers\Admin\NewsLetterController;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\VendorProfileController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [HomeController::class, 'homePage'])->name('homePage');
Route::get('/contact', [HomeController::class, 'contact'])->name('contact');
Route::get('/about', [HomeController::class, 'about'])->name('about');
Route::get('/services', [HomeController::class, 'services'])->name('services');
Route::get('/pricing', [HomeController::class, 'pricing'])->name('pricing');
Route::get('/digital-card', [HomeController::class, 'digitalCard'])->name('digitalCard');
Route::get('/qr-code', [HomeController::class, 'qrCode'])->name('qrCode');
Route::get('/NFC-CARD', [HomeController::class, 'nfcCard'])->name('nfcCard');
Route::get('/faq', [HomeController::class, 'faq'])->name('faq');
Route::get('/policy', [HomeController::class, 'policy'])->name('policy');
Route::get('/terms', [HomeController::class, 'terms'])->name('terms');

Route::get('/flush-session', function() {
    session()->flush();
    return response()->json(['message' => 'Session flushed successfully']);
});

Route::post('contact/store', [ContactController::class, 'store'])
        ->name('contact.add');
Route::post('newsletter/store', [NewsLetterController::class, 'store'])
        ->name('newsletter.store');


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/admin/dashboard', function () {
    return view('admin/dashboard');
})->middleware(['auth:admin', 'verified'])->name('admin.dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware('auth:admin')->prefix('admin')->name('admin.')->group(function () {
    Route::get('/profile', [AdminProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [AdminProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [AdminProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
require __DIR__ . '/admin.php';
require __DIR__ . '/client.php';

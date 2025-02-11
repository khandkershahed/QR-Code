<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Providers\RouteServiceProvider;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Test\QrTestController;
use App\Http\Controllers\Admin\QrCodeController;
use App\Http\Controllers\AdminProfileController;
use App\Http\Controllers\Admin\BarCodeController;
use App\Http\Controllers\Admin\ContactController;
use App\Http\Controllers\Admin\NfcCardController;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\VendorProfileController;
use App\Http\Controllers\ResellerProfileController;
use App\Http\Controllers\Admin\NewsLetterController;
use App\Http\Controllers\Admin\VirtualCardController;
use App\Http\Controllers\User\UserSocialLoginController;
use App\Http\Controllers\Subscription\SubscriptionController;
use App\Http\Controllers\Admin\NfcIndividualMessageController;
use App\Http\Controllers\Subscription\StripeWebhookController;
use App\Http\Controllers\Reseller\ResellerSocialLoginController;
use App\Http\Controllers\Admin\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Admin\VirtualCardFormController;

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
Route::get('/user-pricing', [HomeController::class, 'userPricing'])->name('normaluser.pricing');
Route::get('/reseller-pricing', [HomeController::class, 'resellerPricing'])->name('reseller.pricing');
Route::get('/pricing', [HomeController::class, 'pricing'])->name('pricing');
Route::get('/qr-code', [HomeController::class, 'qrCode'])->name('qrCode');
Route::get('/barcode', [HomeController::class, 'barCode'])->name('barCode');
Route::get('/nfc-card', [HomeController::class, 'nfcCard'])->name('nfcCard');
Route::get('/card-buying-guide', [HomeController::class, 'cardGuide'])->name('cardGuide');
Route::get('/digital-business-card', [HomeController::class, 'digitalCard'])->name('digitalCard');
Route::get('/static-nfc', [HomeController::class, 'staticNfc'])->name('staticNfc');
Route::get('/dynamic-nfc', [HomeController::class, 'dynamicNfc'])->name('dynamicNfc');
Route::get('/qr-buying-guide', [HomeController::class, 'qrGuide'])->name('qrGuide');
Route::get('/digital-qr-code', [HomeController::class, 'digitalQr'])->name('digitalQr');
Route::get('/static-qr', [HomeController::class, 'staticQr'])->name('staticQr');
Route::get('/dynamic-qr', [HomeController::class, 'dynamicQr'])->name('dynamicQr');
Route::get('/faq', [HomeController::class, 'faq'])->name('faq');
Route::get('/policy', [HomeController::class, 'policy'])->name('policy');
Route::get('/terms', [HomeController::class, 'terms'])->name('terms');
Route::get('/mail-test', [HomeController::class, 'mailTest'])->name('mailTest');
Route::post('/mail-test', [HomeController::class, 'mailTestStore'])->name('mailTest.store');
Route::get('/blog', [HomeController::class, 'allBlog'])->name('allBlog');
Route::get('/blog/details/{slug}', [HomeController::class, 'blogDetails'])->name('blog.details');
// Route::get('/nfc/{name}/{code}', [HomeController::class, 'nfcPage'])->name('nfc.page');
// Route::get('/nfc/{name}', [HomeController::class, 'nfcPage'])->name('nfc.page');
Route::get('/nfc/{name}', [HomeController::class, 'nfcPage'])->where('name', '.*')->name('nfc.page');

Route::get('/user-subscription/register/{id}', [HomeController::class, 'subscribeRegister'])->name('user_subscribe.register');


Route::get('/card/checkout', [StripeWebhookController::class, 'cardCheckout'])->name('card.checkout');

Route::get('/stripe/checkout/{id}', [StripeWebhookController::class, 'stripeCheckout'])->name('stripe.checkout');
Route::post('/stripe/payment', [StripeWebhookController::class, 'stripePayment'])->name('stripe.payment');

Route::get('/card/details/{slug}', [HomeController::class, 'cardDetails'])->name('card.details');
Route::get('/card/features/{slug}', [HomeController::class, 'cardFeatures'])->name('card.features');

Route::post('/card/payment', [StripeWebhookController::class, 'cardPayment'])->name('card.payment');

Route::post('/stripe/webhook', [StripeWebhookController::class, 'handleWebhook']);
Route::get('stripe/success', function () {
    return redirect(RouteServiceProvider::HOME)->with('success', 'You have successfully registered with the plan.');
})->name('stripe.success');

Route::get('stripe/cancel', function () {
    return redirect()->route('register')->withErrors('Payment was cancelled.');
})->name('stripe.cancel');


Route::post('barcode/preview', [BarCodeController::class, 'barcodePreview'])->name('barcode.preview');
Route::post('single-barcode/store', [BarCodeController::class, 'store'])->name('single-barcode.store');
Route::post('bulk-barcode/store', [BarCodeController::class, 'bulkStore'])->name('bulk-barcode.store');



Route::resources(
    [
        'individual-message'  => NfcIndividualMessageController::class,
        'qr-test'             => QrTestController::class,
    ],
);
Route::post('/generate/qr', [QrTestController::class, 'generateQRCode'])->name('generate.qr');
Route::controller(UserSocialLoginController::class)->group(function () {
    Route::get('auth/google', 'redirectToGoogle')->name('auth.google');
    Route::get('auth/google/callback', 'handleGoogleCallback')->name('callback.google');
    Route::get('/auth/facebook', 'redirectFacebook')->name('auth.facebook');
    Route::get('auth/facebook/callback', 'facebookCallback')->name('callback.facebook');
    Route::get('facebook/user/deletion', 'facebookUserDeletion')->name('delete.facebook_user');
    Route::get('auth/github', 'redirectToGithub')->name('auth.github');
    Route::get('auth/github/callback', 'handleGithubCallback')->name('callback.github');
});

Route::controller(ResellerSocialLoginController::class)->group(function () {
    Route::get('reseller/auth/google', 'redirectToGoogle')->name('reseller.auth.google');
    Route::get('reseller/auth/google/callback', 'handleGoogleCallback')->name('reseller.callback.google');
    Route::get('reseller/auth/facebook', 'redirectFacebook')->name('reseller.auth.facebook');
    Route::get('reseller/auth/facebook/callback', 'facebookCallback')->name('reseller.callback.facebook');
    Route::get('reseller/auth/github', 'redirectToGithub')->name('reseller.auth.github');
    Route::get('reseller/auth/github/callback', 'handleGithubCallback')->name('reseller.callback.github');
});




Route::get('/flush-session', function () {
    session()->flush();
    return response()->json(['message' => 'Session flushed successfully']);
});

Route::post('contact/store', [ContactController::class, 'store'])
    ->name('contact.add');
Route::post('newsletter/store', [NewsLetterController::class, 'store'])
    ->name('newsletter.store');


// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

// Route::get('/admin/dashboard', function () {
//     return view('admin/dashboard');
// })->middleware(['auth:admin', 'verified'])->name('admin.dashboard');


// Route::middleware('redirect.guard')->group(function () {
//     Route::resources(
//         [
//             'barcode'             => BarCodeController::class,
//             'virtual-card'        => VirtualCardController::class,
//         ],
//     );
// });


Route::get('/check-url-alias', [VirtualCardController::class, 'checkUrlAlias']);
Route::get('/get-nfc-data', [NfcCardController::class, 'getNfcData']);
Route::post('general-info/store', [VirtualCardFormController::class, 'generalInfoStore'])->name('nfc.general_info.add');
Route::post('business-hours/store', [VirtualCardFormController::class, 'businessHoursStore'])->name('nfc.business_hours.add');
Route::post('social-links/store', [VirtualCardFormController::class, 'socialLinksStore'])->name('nfc.social_links.add');
Route::post('service/store', [VirtualCardFormController::class, 'serviceStore'])->name('nfc.service.add');
Route::delete('/service/delete/{id}', [VirtualCardFormController::class, 'serviceDestroy'])->name('nfc.service.destroy');
Route::put('/nfc/service/{id}', [VirtualCardFormController::class, 'serviceUpdate'])->name('nfc.service.update');

Route::post('product/store', [VirtualCardFormController::class, 'productStore'])->name('nfc.product.add');
Route::delete('/product/delete/{id}', [VirtualCardFormController::class, 'productDestroy'])->name('nfc.product.destroy');
Route::put('/nfc/product/{id}', [VirtualCardFormController::class, 'productUpdate'])->name('nfc.product.update');

Route::post('company/store', [VirtualCardFormController::class, 'companyStore'])->name('nfc.company.add');
Route::delete('/company/delete/{id}', [VirtualCardFormController::class, 'companyDestroy'])->name('nfc.company.destroy');
Route::put('/nfc/company/{id}', [VirtualCardFormController::class, 'companyUpdate'])->name('nfc.company.update');


Route::post('privacy/store', [VirtualCardFormController::class, 'privacyStore'])->name('nfc.privacy.add');
Route::delete('/privacy/delete/{id}', [VirtualCardFormController::class, 'privacyDestroy'])->name('nfc.privacy.destroy');

Route::post('terms/store', [VirtualCardFormController::class, 'termsStore'])->name('nfc.terms.add');
Route::delete('/terms/delete/{id}', [VirtualCardFormController::class, 'termsDestroy'])->name('nfc.terms.destroy');

Route::post('seo/store', [VirtualCardFormController::class, 'seoStore'])->name('nfc.seo.add');
Route::delete('/seo/delete/{id}', [VirtualCardFormController::class, 'seoDestroy'])->name('nfc.seo.destroy');

Route::post('testimonial/store', [VirtualCardFormController::class, 'testimonialStore'])->name('nfc.testimonial.add');
Route::delete('/testimonial/delete/{id}', [VirtualCardFormController::class, 'testimonialDestroy'])->name('nfc.testimonial.destroy');
Route::put('/nfc/testimonial/{id}', [VirtualCardFormController::class, 'testimonialUpdate'])->name('nfc.testimonial.update');

Route::post('fonts/store', [VirtualCardFormController::class, 'fontsStore'])->name('nfc.fonts.add');
Route::post('template/store', [VirtualCardFormController::class, 'templateStore'])->name('nfc.template.add');

Route::post('advanced/store', [VirtualCardFormController::class, 'advancedStore'])->name('nfc.advanced.add');
Route::post('setting/store', [VirtualCardFormController::class, 'settingStore'])->name('nfc.setting.add');
Route::post('banner/store', [VirtualCardFormController::class, 'bannerStore'])->name('nfc.banner.add');

Route::post('gallery/store', [VirtualCardFormController::class, 'galleryStore'])->name('nfc.gallery.add');
Route::delete('/gallery/delete/{id}', [VirtualCardFormController::class, 'galleryDestroy'])->name('nfc.gallery.destroy');
Route::put('/nfc/gallery/{id}', [VirtualCardFormController::class, 'galleryUpdate'])->name('nfc.gallery.update');
// Route::post('general-info/store', [ContactController::class, 'generalInfoStore'])->name('nfc.general_info.add');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::get('/my-plan', [ProfileController::class, 'userPlan'])->name('user.plan');
    Route::get('/upgrade-plan', [ProfileController::class, 'upgradePlan'])->name('user.upgrade.plan');
    Route::get('/my-invoices', [ProfileController::class, 'userInvoice'])->name('user.invoice');
    Route::get('/invoices/details/{invoice}', [ProfileController::class, 'userInvoiceShow'])->name('user.invoices.show');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware('auth:admin')->prefix('admin')->name('admin.')->group(function () {
    Route::get('/dashboard', [AuthenticatedSessionController::class, 'dashboard'])->name('dashboard');
    Route::get('/profile', [AdminProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [AdminProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [AdminProfileController::class, 'destroy'])->name('profile.destroy');
});
Route::middleware('auth:reseller')->prefix('reseller')->name('reseller.')->group(function () {
    Route::get('/profile', [ResellerProfileController::class, 'edit'])->name('profile.edit');
    Route::get('/my-plan', [ResellerProfileController::class, 'resellerPlan'])->name('plan');
    Route::patch('/profile', [ResellerProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ResellerProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
require __DIR__ . '/admin.php';
require __DIR__ . '/client.php';
require __DIR__ . '/reseller.php';

// Route::post('/qr-builder', [QrCodeController::class, 'do_qr_builder'])->name('do_qr_builder');
// Route::get('/', [QrCodeController::class, 'index'])->name('qr_builder');
// Route::get('/phone', [QrCodeController::class, 'phone'])->name('qr_phone');
// Route::get('/email', [QrCodeController::class, 'email'])->name('qr_email');
// Route::get('/geo', [QrCodeController::class, 'geo'])->name('qr_geo');
// Route::get('/sms', [QrCodeController::class, 'sms'])->name('qr_sms');
// Route::get('/user-pricing', [HomeController::class, 'userPricing'])->name('pricing');

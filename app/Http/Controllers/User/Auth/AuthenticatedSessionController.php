<?php

namespace App\Http\Controllers\User\Auth;

use Illuminate\View\View;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;
use App\Models\Admin\UserNotification;
use App\Providers\RouteServiceProvider;
use App\Http\Requests\Auth\LoginRequest;
use App\Models\Admin\NfcCard;
use App\Models\Admin\NotificationMessage;
use App\Models\Admin\Qr;

class AuthenticatedSessionController extends Controller
{
    /**
     * Display the login view.
     */
    public function dashboard(): View
    {
        $userId = Auth::id();

        $notifications = UserNotification::where('user_id', $userId)->with('notificationMessage')->latest('created_at')->get();

        $qrs = Qr::with('qrData', 'qrScan')->where('user_id', $userId)->latest()->get();

        $nfc_cards = NfcCard::with('nfcData', 'nfcMessages')->where('user_id', $userId)->latest()->get();

        $qr_wallet = 10;
        $nfc_wallet = 10;

        $qr_pending = max(0, $qr_wallet - $qrs->count());
        $nfc_pending = max(0, $nfc_wallet - $nfc_cards->count());
        $qr_completion_percentage = ($qrs->count() / $qr_wallet) * 100;
        $nfc_completion_percentage = ($nfc_cards->count() / $nfc_wallet) * 100;

        return view('dashboard', compact('notifications', 'qrs', 'nfc_cards', 'nfc_pending', 'qr_pending', 'nfc_completion_percentage', 'qr_completion_percentage'));
    }

    public function create(): View
    {
        return view('user.auth.login');
    }

    /**
     * Handle an incoming authentication request.
     */
    public function store(LoginRequest $request): RedirectResponse
    {
        $request->authenticate();

        $request->session()->regenerate();
        // flash()->addSuccess('You have successfully logged in.');
        return redirect()->intended(RouteServiceProvider::HOME)->with('success', 'You have successfully logged in.');
    }

    /**
     * Destroy an authenticated session.
     */
    public function destroy(Request $request): RedirectResponse
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/login');
    }
}

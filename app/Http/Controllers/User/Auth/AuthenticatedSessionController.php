<?php

namespace App\Http\Controllers\User\Auth;

use App\Models\Admin\Qr;
use Illuminate\View\View;
use Illuminate\Http\Request;
use App\Models\Admin\NfcCard;
use Illuminate\Support\Facades\Log;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;
use App\Models\Admin\UserNotification;
use App\Providers\RouteServiceProvider;
use App\Http\Requests\Auth\LoginRequest;
use App\Models\Admin\NotificationMessage;
use Stevebauman\Location\Facades\Location;

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

        $nfc_cards = NfcCard::with('nfcData', 'nfcMessages', 'nfcScan')->where('user_id', $userId)->latest()->get();

        $qr_wallet = 10;
        $nfc_wallet = 10;

        $qr_pending = max(0, $qr_wallet - $qrs->count());
        $nfc_pending = max(0, $nfc_wallet - $nfc_cards->count());
        $qr_completion_percentage = ($qrs->count() / $qr_wallet) * 100;
        $nfc_completion_percentage = ($nfc_cards->count() / $nfc_wallet) * 100;


        $qr_unique_ips = collect();
        foreach ($qrs as $qr) {
            $qr_unique_ips = $qr_unique_ips->merge($qr->qrScan->unique('ip_address'));
        }
        $qr_users = [];
        foreach ($qr_unique_ips as $qr_unique_ip) {
            $qr_user = Location::get($qr_unique_ip->ip_address);
            // if ($qr_user !== false) {
                $qr_users[] = $qr_user;
            // } else {
            //     Log::error("Failed to retrieve location for IP address: {$qr_unique_ip->ip_address}");
            // }
        }
        // dd($qr_unique_ips);

        $nfc_unique_ips = collect();

        foreach ($nfc_cards as $nfc_card) {
            $nfc_unique_ips = $nfc_unique_ips->merge($nfc_card->nfcScan->unique('ip_address'));
        }

        $nfc_users = [];

        foreach ($nfc_unique_ips as $nfc_unique_ip) {
            $nfc_user = Location::get($nfc_unique_ip->ip_address);
            // if ($nfc_user !== false) {
                $nfc_users[] = $nfc_user;
            // } else {
            //     Log::error("Failed to retrieve location for IP address: {$nfc_unique_ip->ip_address}");
            // }
        }

        return view('dashboard', compact('notifications', 'qrs', 'nfc_cards', 'nfc_pending', 'qr_pending', 'nfc_completion_percentage', 'qr_completion_percentage', 'qr_users', 'nfc_users'));
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

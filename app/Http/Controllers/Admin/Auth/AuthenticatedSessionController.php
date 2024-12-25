<?php

namespace App\Http\Controllers\Admin\Auth;

use App\Models\User;
use App\Models\NfcScan;
use App\Models\Admin\Qr;
use Illuminate\View\View;
use App\Models\Admin\Plan;
use App\Models\Admin\QrScan;
use Illuminate\Http\Request;
use App\Models\Admin\NfcCard;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;
use App\Models\Admin\UserNotification;
use App\Providers\RouteServiceProvider;
use App\Http\Requests\Admin\LoginRequest;
use App\Models\BarCode;
use App\Models\VirtualCard;
use App\Models\Subscription;
use Stevebauman\Location\Facades\Location;

class AuthenticatedSessionController extends Controller
{
    /**
     * Display the login view.
     */
    // public function dashboard()
    // {
    //     $qrs = Qr::with('qrData', 'qrScan')->latest()->get();

    //     $nfc_cards = NfcCard::with('nfcData', 'nfcMessages', 'nfcScan')->latest()->get();
    //     $users     = User::latest('id')->get();
    //     $qr_plans  = Plan::orderBy('price', 'asc')->where('type', 'qr')->get();
    //     $nfc_plans = Plan::orderBy('price', 'asc')->where('type', 'nfc')->get();
    //     $barcode_plans = Plan::orderBy('price', 'asc')->where('type', 'barcode')->get();

    //     $qr_wallet = 10;
    //     $nfc_wallet = 10;

    //     $qr_pending = max(0, $qr_wallet - $qrs->count());
    //     $nfc_pending = max(0, $nfc_wallet - $nfc_cards->count());
    //     $qr_completion_percentage = ($qrs->count() / $qr_wallet) * 100;
    //     $nfc_completion_percentage = ($nfc_cards->count() / $nfc_wallet) * 100;


    //     $qr_unique_ips = collect();
    //     foreach ($qrs as $qr) {
    //         $qr_unique_ips = $qr_unique_ips->merge($qr->qrScan->unique('ip_address'));
    //     }
    //     $qr_users = [];
    //     foreach ($qr_unique_ips as $qr_unique_ip) {
    //         $qr_user = Location::get($qr_unique_ip->ip_address);
    //         // if ($qr_user !== false) {
    //         $qr_users[] = $qr_user;
    //         // } else {
    //         //     Log::error("Failed to retrieve location for IP address: {$qr_unique_ip->ip_address}");
    //         // }
    //     }
    //     // dd($qr_unique_ips);

    //     $nfc_unique_ips = collect();

    //     foreach ($nfc_cards as $nfc_card) {
    //         $nfc_unique_ips = $nfc_unique_ips->merge($nfc_card->nfcScan->unique('ip_address'));
    //     }

    //     $nfc_users = [];

    //     foreach ($nfc_unique_ips as $nfc_unique_ip) {
    //         $nfc_user = Location::get($nfc_unique_ip->ip_address);
    //         // if ($nfc_user !== false) {
    //         $nfc_users[] = $nfc_user;
    //         // } else {
    //         //     Log::error("Failed to retrieve location for IP address: {$nfc_unique_ip->ip_address}");
    //         // }
    //     }
    //     return view('admin.dashboard', compact('qr_plans', 'nfc_plans', 'notifications', 'qrs', 'users', 'nfc_cards', 'nfc_pending', 'qr_pending', 'nfc_completion_percentage', 'qr_completion_percentage', 'qr_users', 'nfc_users'));
    // }
    // public function dashboard()
    // {
    //     $data = [
    //         'qrs'           => Qr::latest()->get(),
    //         'nfc_cards'     => NfcCard::latest()->get(),
    //         'barcodes'      => BarCode::latest()->get(),
    //         'virtual_cards' => VirtualCard::latest()->get(),
    //         'subscriptions' => Subscription::with('plan', 'user')->get(),
    //         'users'         => User::latest('id')->get(),
    //         'qr_plans'      => Plan::orderBy('price', 'asc')->where('type', 'qr')->get(),
    //         'nfc_plans'     => Plan::orderBy('price', 'asc')->where('type', 'nfc')->get(),
    //         'barcode_plans' => Plan::orderBy('price', 'asc')->where('type', 'barcode')->get(),
    //     ];

    //     return view('admin.dashboard', $data);
    // }

    public function dashboard()
    {
        $plans = Plan::orderBy('price', 'asc')->get();

        $data = [
            'qrs'           => Qr::latest()->take(50)->get(),  // Limit number of records
            'nfc_cards'     => NfcCard::latest()->take(50)->get(),
            'barcodes'      => BarCode::latest()->take(50)->get(),
            'virtual_cards' => VirtualCard::latest()->take(50)->get(),
            'subscriptions' => Subscription::with('plan', 'user')->get(),
            'users'         => User::latest('id')->select(['id', 'name', 'email'])->take(100)->get(),
            'qr_plans'      => $plans->where('type', 'qr'),
            'nfc_plans'     => $plans->where('type', 'nfc'),
            'barcode_plans' => $plans->where('type', 'barcode'),
        ];

        return view('admin.dashboard', $data);
    }




    public function create(): View
    {
        return view('admin.auth.login');
    }

    /**
     * Handle an incoming authentication request.
     */
    public function store(LoginRequest $request): RedirectResponse
    {
        $request->authenticate();

        $request->session()->regenerate();

        // flash()->addSuccess('You have successfully logged in.');
        return redirect()->intended(RouteServiceProvider::ADMIN_HOME)->with('success', 'You have successfully logged in.');
    }

    /**
     * Destroy an authenticated session.
     */
    public function destroy(Request $request): RedirectResponse
    {
        Auth::guard('admin')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/admin/login');
    }
}

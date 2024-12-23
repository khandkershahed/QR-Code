<?php

namespace App\Http\Controllers\User\Auth;

use Carbon\Carbon;
use App\Models\Admin\Qr;
use Illuminate\View\View;
use Jenssegers\Agent\Agent;
use App\Models\Subscription;
use Illuminate\Http\Request;
use App\Models\Admin\NfcCard;
use App\Models\UserLoginDetails;
use Illuminate\Support\Facades\Log;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;
use App\Models\Admin\UserNotification;
use App\Providers\RouteServiceProvider;
use App\Http\Requests\Auth\LoginRequest;
use App\Models\Admin\NotificationMessage;
use App\Models\VirtualCard;
use Illuminate\Support\Facades\Session;
use Stevebauman\Location\Facades\Location;

class AuthenticatedSessionController extends Controller
{
    /**
     * Display the login view.
     */
    public function dashboard()
    {
        $user = Auth::user();
        $userId = $user->id;
        $subscription = Subscription::with('plan')->where('user_id', $user->id)->active()->first();
        $notifications = UserNotification::where('user_id', $userId)->with('notificationMessage')->latest('created_at')->get();
        $qrs = Qr::with('qrScan')->where('user_id', $userId)->select('id')->get();
        $nfc_cards = NfcCard::with('nfcScan')->where('user_id', $userId)->select('id')->get();

        $qr_subscription = Subscription::with('plan')->where('user_id', $user->id)
            ->whereHas('plan', function ($query) {
                $query->where('type', 'qr');
            })->active()->first();

        $nfc_subscription = Subscription::with('plan')->where('user_id', $user->id)
            ->whereHas('plan', function ($query) {
                $query->where('type', 'nfc');
            })->active()->first();

        $barcode_subscription = Subscription::with('plan')->where('user_id', $user->id)
            ->whereHas('plan', function ($query) {
                $query->where('type', 'barcode');
            })->active()->first();

        $qr_wallet = !empty(optional($qr_subscription)->plan) ? optional($qr_subscription->plan)->qr : 10;
        $nfc_wallet = !empty(optional($nfc_subscription)->plan) ? optional($nfc_subscription->plan)->nfc : 10;

        $qr_pending = max(0, $qr_wallet - $qrs->count());
        $nfc_pending = max(0, $nfc_wallet - $nfc_cards->count());
        $qr_completion_percentage = ($qrs->count() / $qr_wallet) * 100;
        $nfc_completion_percentage = ($nfc_cards->count() / $nfc_wallet) * 100;


        $qr_unique_ips = collect();
        foreach ($qrs as $qr) {
            $qr_unique_ips = $qr_unique_ips->merge($qr->qrScan->unique('ip_address'));
        }
        $nfc_unique_ips = collect();

        foreach ($nfc_cards as $nfc_card) {
            $nfc_unique_ips = $nfc_unique_ips->merge($nfc_card->nfcScan->unique('ip_address'));
        }
        $qr_users = $qr_unique_ips;
        $nfc_users = $nfc_unique_ips;

        // $qr_users = [];
        // foreach ($qr_unique_ips as $qr_unique_ip) {
        //     $qr_user = Location::get($qr_unique_ip->ip_address);
        //     $qr_users[] = $qr_user;
        // }

        // $nfc_unique_ips = collect();

        // foreach ($nfc_cards as $nfc_card) {
        //     $nfc_unique_ips = $nfc_unique_ips->merge($nfc_card->nfcScan->unique('ip_address'));
        // }

        // $nfc_users = [];

        // foreach ($nfc_unique_ips as $nfc_unique_ip) {
        //     $nfc_user = Location::get($nfc_unique_ip->ip_address);
        //     $nfc_users[] = $nfc_user;
        // }

        return view('dashboard', compact('subscription', 'notifications', 'qrs', 'nfc_cards', 'nfc_pending', 'qr_pending', 'nfc_completion_percentage', 'qr_completion_percentage', 'qr_users', 'nfc_users'));
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
        $agent = new Agent();
        if ($agent->isDesktop()) {
            $user_device = $agent->browser();
        } else {
            $user_device = $agent->device();
        }
        UserLoginDetails::create([
            'user_id'       => Auth::user()->id,
            'ip_address'    => $request->ip(),
            'user_device'   => $user_device,
            'login_time'    => Carbon::now(),
        ]);
        // flash()->addSuccess('You have successfully logged in.');
        Session::flash('success', 'You have successfully logged in.');
        return redirect()->intended(RouteServiceProvider::HOME);
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

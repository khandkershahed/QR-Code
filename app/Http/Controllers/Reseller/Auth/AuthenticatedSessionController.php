<?php

namespace App\Http\Controllers\Reseller\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Reseller\LoginRequest;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class AuthenticatedSessionController extends Controller
{
    /**
     * Display the login view.
     */

     public function dashboard(): View
     {
         $data =[
            //  'notifications' => UserNotification::where('user_id', Auth::user()->id)->with('notificationMessage')->orderBy('created_at', 'desc')->get(),
            'user' =>Auth::guard('reseller')->user(),
         ];
         return view('reseller.dashboard', $data);
     }

    public function create(): View
    {
        return view('reseller.auth.login');
    }

    /**
     * Handle an incoming authentication request.
     */
    public function store(LoginRequest $request): RedirectResponse
    {
        $request->authenticate();

        $request->session()->regenerate();

        // flash()->addSuccess('You have successfully logged in.');
        return redirect()->intended(RouteServiceProvider::RESELLER_HOME)->with('success', 'You have successfully logged in.');
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

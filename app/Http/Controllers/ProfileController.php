<?php

namespace App\Http\Controllers;

use Illuminate\View\View;
use App\Models\Admin\Plan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;
use App\Models\Admin\UserNotification;
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests\ProfileUpdateRequest;

class ProfileController extends Controller
{
    /**
     * Display the user's profile form.
     */
    public function edit(Request $request): View
    {
        // dd($request->input('device'));

        return view('user.profile.edit', [
            'user' => $request->user(),
            'notifications' => UserNotification::where('user_id', Auth::user()->id)->with('notificationMessage')->orderBy('created_at', 'desc')->get(),
        ]);
    }

    /**
     * Update the user's profile information.
     */
    public function update(ProfileUpdateRequest $request): RedirectResponse
    {
        $request->user()->fill($request->validated());

        if ($request->user()->isDirty('email')) {
            $request->user()->email_verified_at = null;
        }

        $request->user()->save();

        return Redirect::route('profile.edit')->with('status', 'profile-updated');
    }

    /**
     * Delete the user's account.
     */
    public function destroy(Request $request)
    {
        // $request->validateWithBag('userDeletion', [
        //     'password' => ['required', 'current_password'],
        // ]);

        // $user = $request->user();

        // Auth::logout();

        // $user->delete();

        // $request->session()->invalidate();
        // $request->session()->regenerateToken();

        // return Redirect::to('/');
        $user = $request->user();
        Auth::logout();
        $user->delete();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
    }

    public function userPlan(): View
    {
        $user = Auth::user();
        $data = [
            'monthly_plans' => Plan::orderBy('price','asc')->where('billing_cycle', 'monthly')->get(),
            'yearly_plans' => Plan::orderBy('price','asc')->where('billing_cycle', 'yearly')->get(),
            'subscription' => $user->subscription('default'),
        ];

        return view('user.profile.subscription_plan', $data);
    }
}

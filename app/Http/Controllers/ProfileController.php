<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\View\View;
use App\Models\Admin\Plan;
use Illuminate\Http\Request;
use App\Events\ActivityLogged;
use Illuminate\Validation\Rule;
use Illuminate\Validation\Rules;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\RedirectResponse;
use App\Models\Admin\UserNotification;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;
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
    // public function update(ProfileUpdateRequest $request): RedirectResponse
    // {
    //     $request->user()->fill($request->validated());

    //     if ($request->user()->isDirty('email')) {
    //         $request->user()->email_verified_at = null;
    //     }

    //     $request->user()->save();

    //     return Redirect::route('profile.edit')->with('status', 'profile-updated');
    // }


    public function update(ProfileUpdateRequest $request, User $user): RedirectResponse
    {
        // dd($request->all());

        // Initialize default values
        $imagePath = 'public/user/profile_image/';
        $logoPath = 'public/user/company_logo/';
        // Handle profile image upload
        if ($request->hasFile('profile_image')) {
            $profile_image = customUpload($request->file('profile_image'), $imagePath , 'profile_image');
            if ($profile_image['status'] == 1) {
                        File::delete(public_path('/storage/user/profile_image/') . $request->user()->profile_image);
                        File::delete(public_path('/storage/user/profile_image/requestImg/') . $request->user()->profile_image);
                        File::delete(public_path('/storage/user/profile_image/thumb/') . $request->user()->profile_image);
                    }

        }else{
            $profile_image['status'] = 0;
        }

        // Handle company logo upload
        if ($request->hasFile('company_logo')) {
            $company_logo = customUpload($request->file('company_logo'), $logoPath , 'company_logo');
            if ($company_logo['status'] == 1) {
                File::delete(public_path('storage/user/company_logo/') . $request->user()->company_logo);
                File::delete(public_path('storage/user/company_logo/requestImg/') . $request->user()->company_logo);
                File::delete(public_path('storage/user/company_logo/thumb/') . $request->user()->company_logo);
            }
        }else{
            $company_logo['status'] = 0;
        }

        $request->user()->fill([
            'name'             => $request->name ?? $request->user()->name,
            'designation'      => $request->designation ?? $request->user()->designation,
            'email'            => $request->email ?? $request->user()->email,
            'company_name'     => $request->company_name ?? $request->user()->company_name,
            'phone'            => $request->phone ?? $request->user()->phone,
            'address_line_one' => $request->address_line_one ?? $request->user()->address_line_one,
            'address_line_two' => $request->address_line_two ?? $request->user()->address_line_two,
            'city'             => $request->city ?? $request->user()->city,
            'country'          => $request->country ?? $request->user()->country,
            'postal'           => $request->postal ?? $request->user()->postal,
            'facebook_id'      => $request->facebook_id ?? $request->user()->facebook_id,
            'google_id'        => $request->google_id ?? $request->user()->google_id,
            'github_id'        => $request->github_id ?? $request->user()->github_id,
            'apple_id'         => $request->apple_id ?? $request->user()->apple_id,
            'instagram_id'     => $request->instagram_id ?? $request->user()->instagram_id,
            'pinterest_id'     => $request->pinterest_id ?? $request->user()->pinterest_id,
            'linked_in_id'     => $request->linked_in_id ?? $request->user()->linked_in_id,
            'profile_image'    => $profile_image['status'] == 1 ? $profile_image['file_name']: $request->user()->profile_image,
            'company_logo'     => $company_logo['status']  == 1 ? $company_logo['file_name'] : $request->user()->company_logo,
            'password'         => $request->filled('password') ? Hash::make($request->password) : $request->user()->password,
        ]);

        // Reset email verification if email is updated
        if ($request->user()->isDirty('email')) {
            $request->user()->email_verified_at = null;
        }

        $request->user()->save();
        // event(new ActivityLogged('User updated', $user));
        return redirect()->route('profile.edit')->with('success', 'profile-updated');
    }

    /**
     * Delete a file if it exists.
     *
     * @param string $path
     * @return bool
     */


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
            'monthly_plans' => Plan::orderBy('price', 'asc')->where('billing_cycle', 'monthly')->get(),
            'yearly_plans' => Plan::orderBy('price', 'asc')->where('billing_cycle', 'yearly')->get(),
            'subscription' => $user->subscription('default'),
        ];

        return view('user.profile.subscription_plan', $data);
    }
}

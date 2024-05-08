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
    // public function update(ProfileUpdateRequest $request, User $user): RedirectResponse
    // {
    //     $request->validate([
    //         'name' => ['nullable', 'string', 'max:255'],
    //         'email' => ['nullable', 'string', 'email', 'max:255', 'unique:' . User::class . ',email,' . $user->id],
    //         'password' => ['nullable', 'confirmed', Rules\Password::defaults()],
    //     ]);

    //     $imageMainFile = $request->profile_image;
    //     $logoMainFile  = $request->company_logo;
    //     $imagefilename = 'profile_image';
    //     $logofilename = 'company_logo';
    //     $uploadPath    = storage_path('app/public/user/');
    //     if (isset($imageMainFile)) {
    //         $uploadedprofileImage = customUpload($imageMainFile, $uploadPath, $imagefilename);
    //     } else {
    //         $uploadedprofileImage = ['status' => 0];
    //     }

    //     if (isset($logoMainFile)) {
    //         $uploadedcompanyLogo = customUpload($logoMainFile, $uploadPath, $logofilename);
    //     } else {
    //         $uploadedcompanyLogo = ['status' => 0];
    //     }

    //     if ($uploadedprofileImage['status'] == 1) {
    //         File::delete(public_path('storage/user/') . $user->profile_image);
    //         File::delete(public_path('storage/user/requestImg/') . $user->profile_image);
    //         File::delete(public_path('storage/user/thumb/') . $user->profile_image);
    //     }
    //     if ($uploadedcompanyLogo['status'] == 1) {
    //         File::delete(public_path('storage/user/') . $user->company_logo);
    //         File::delete(public_path('storage/user/requestImg/') . $user->company_logo);
    //         File::delete(public_path('storage/user/thumb/') . $user->company_logo);
    //     }

    //     $request->user()->fill([
    //         'name'             => $request->name ? $request->name                        : $user->name,
    //         'designation'      => $request->designation ? $request->designation          : $user->designation,
    //         'email'            => $request->email ? $request->email                      : $user->email,
    //         'company_name'     => $request->company_name ? $request->company_name        : $user->company_name,
    //         'phone'            => $request->phone ? $request->phone                      : $user->phone,
    //         'address_line_one' => $request->address_line_one ? $request->address_line_one : $user->address_line_one,
    //         'address_line_two' => $request->address_line_two ? $request->address_line_two : $user->address_line_two,
    //         'city'             => $request->city ? $request->city                        : $user->city,
    //         'country'          => $request->country ? $request->country                  : $user->country,
    //         'postal'           => $request->postal ? $request->postal                    : $user->postal,
    //         'facebook_id'      => $request->facebook_id ? $request->facebook_id          : $user->facebook_id,
    //         'google_id'        => $request->google_id ? $request->google_id              : $user->google_id,
    //         'github_id'        => $request->github_id ? $request->github_id              : $user->github_id,
    //         'apple_id'         => $request->apple_id ? $request->apple_id                : $user->apple_id,
    //         'instagram_id'     => $request->instagram_id ? $request->instagram_id        : $user->instagram_id,
    //         'pinterest_id'     => $request->pinterest_id ? $request->pinterest_id        : $user->pinterest_id,
    //         'linked_in_id'     => $request->linked_in_id ? $request->linked_in_id        : $user->linked_in_id,
    //         'profile_image'    => $uploadedprofileImage['status'] == 1 ? $uploadedprofileImage['file_name'] : $user->profile_image,
    //         'company_logo'     => $uploadedcompanyLogo['status']   == 1 ? $uploadedcompanyLogo['file_name']  : $user->company_logo,
    //         'password' => $request->password ? Hash::make($request->password) : $user->password,
    //     ]);
    //     // $request->user()->fill($request->validated());

    //     if ($request->user()->isDirty('email')) {
    //         $request->user()->email_verified_at = null;
    //     }

    //     $request->user()->save();
    //     event(new ActivityLogged('User updated', $user));
    //     return Redirect::route('profile.edit')->with('success', 'profile-updated');
    // }


    public function update(ProfileUpdateRequest $request, User $user): RedirectResponse
    {
        $validator = Validator::make($request->all(), [
            'title'   => 'required|max:255',
            'image'   => 'image|mimes:png,jpg,jpeg|max:2048',
        ], [
            'required'    => 'The row title must be required',
            'name.max'    => 'The row title may not be greater than 255 characters.',
            'image.image' => 'The file must be an image.',
            'image.mimes' => 'The image must be a file of type: jpeg, png, jpg, gif.',
            'image.max'   => 'The image may not be greater than 2048 kilobytes.',
        ]);
        
        $request->validate([
            'name'              => ['nullable', 'string', 'max:255'],
            'profile_image'     => 'sometimes|image|mimes:jpeg,png,jpg,svg|max:2048',
            'company_logo'      => 'sometimes|image|mimes:jpeg,png,jpg,svg|max:2048',
            'email'             => ['nullable', 'string', 'email', 'max:255', Rule::unique('users')->ignore($user->id)],
            'password'          => ['nullable', 'confirmed', Rules\Password::defaults()],
        ]);
        if ($validator->fails()) {
            Session::flash('error', $validator->errors()->all());
            return redirect()->back()->withInput();
        }
        // Initialize default values
        $profile_image = $user->profile_image;
        $company_logo = $user->company_logo;

        // Handle profile image upload
        if ($request->hasFile('profile_image')) {
            $profile_image = customUpload($request->file('profile_image'), storage_path('app/public/user/'), 'profile_image');
            if ($profile_image['status'] == 1) {
                        File::delete(public_path('storage/user/') . $user->profile_image);
                        File::delete(public_path('storage/user/requestImg/') . $user->profile_image);
                        File::delete(public_path('storage/user/thumb/') . $user->profile_image);
                    }

        }

        // Handle company logo upload
        if ($request->hasFile('company_logo')) {
            $company_logo = customUpload($request->file('company_logo'), storage_path('app/public/user/'), 'company_logo');
            if ($company_logo['status'] == 1) {
                File::delete(public_path('storage/user/') . $user->company_logo);
                File::delete(public_path('storage/user/requestImg/') . $user->company_logo);
                File::delete(public_path('storage/user/thumb/') . $user->company_logo);
            }
        }

        $request->user()->fill([
            'name'             => $request->name ?? $user->name,
            'designation'      => $request->designation ?? $user->designation,
            'email'            => $request->email ?? $user->email,
            'company_name'     => $request->company_name ?? $user->company_name,
            'phone'            => $request->phone ?? $user->phone,
            'address_line_one' => $request->address_line_one ?? $user->address_line_one,
            'address_line_two' => $request->address_line_two ?? $user->address_line_two,
            'city'             => $request->city ?? $user->city,
            'country'          => $request->country ?? $user->country,
            'postal'           => $request->postal ?? $user->postal,
            'facebook_id'      => $request->facebook_id ?? $user->facebook_id,
            'google_id'        => $request->google_id ?? $user->google_id,
            'github_id'        => $request->github_id ?? $user->github_id,
            'apple_id'         => $request->apple_id ?? $user->apple_id,
            'instagram_id'     => $request->instagram_id ?? $user->instagram_id,
            'pinterest_id'     => $request->pinterest_id ?? $user->pinterest_id,
            'linked_in_id'     => $request->linked_in_id ?? $user->linked_in_id,
            'profile_image'    => $profile_image['status'] == 1 ? $profile_image['file_name']: $user->profile_image,
            'company_logo'     => $company_logo['status']  == 1 ? $company_logo['file_name'] : $user->company_logo,
            'password'         => $request->password ? Hash::make($request->password) : $user->password,
        ]);

        // Reset email verification if email is updated
        if ($request->user()->isDirty('email')) {
            $request->user()->email_verified_at = null;
        }

        $request->user()->save();
        event(new ActivityLogged('User updated', $user));
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

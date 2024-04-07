<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Models\Admin\UserNotification;
use App\Models\Admin\NotificationMessage;

class UserNotificationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Fetch all users
        $users = User::all();
        $notifications = NotificationMessage::with('users')->orderBy('created_at', 'desc')->get();
        return view('admin.pages.notification.index', compact('users', 'notifications'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        // dd($request->all());
        // Validate request
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'message' => 'required|string',
            'users' => 'required|array',
        ]);

        // Create a new notification
        $notification = NotificationMessage::create([
            'admin_id' => Auth::guard('admin')->user()->id, // Assuming you have admin authentication
            'title'    => $validatedData['title'],
            'message'  => $validatedData['message'],
            'status'   => $request->status,
        ]);

        // Attach notification to selected users
        foreach ($validatedData['users'] as $userId) {
            UserNotification::create([
                'notification_id' => $notification->id,
                'user_id' => $userId,
            ]);
        }

        return redirect()->back()->with('success', 'Notification created successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
            // Validate request
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'message' => 'required|string',
            'users' => 'required|array',
        ]);

        // Find the notification to update
        $notification = NotificationMessage::findOrFail($id);

        // Update the notification
        $notification->update([
            'title'    => $validatedData['title'],
            'message'  => $validatedData['message'],
            'status'   => $request->status,
        ]);

        // Sync the associated users
        $notification->users()->sync($validatedData['users']);

        return redirect()->back()->with('success', 'Notification updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $notification = NotificationMessage::findOrFail($id);
        $notification->delete();

        return redirect()->back()->with('success', 'Notification deleted successfully!');
    }
}

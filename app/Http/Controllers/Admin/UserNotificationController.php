<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use Illuminate\Http\Request;
use App\Models\Admin\Notification;
use App\Http\Controllers\Controller;
use App\Models\Admin\UserNotification;

class UserNotificationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Fetch all users
        $users = User::all();

        // Fetch notifications for each user
        $notificationsByUser = [];
        foreach ($users as $user) {
            $notificationsByUser[$user->id] = $user->userNotifications()->orderBy('created_at', 'desc')->get();
        }
        return view('admin.pages.notification.index', compact('notificationsByUser'));
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
        // Validate request
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'message' => 'required|string',
            'users' => 'required|array',
        ]);

        // Create a new notification
        $notification = Notification::create([
            'admin_id' => auth()->id(), // Assuming you have admin authentication
            'title' => $validatedData['title'],
            'message' => $validatedData['message'],
        ]);

        // Attach notification to selected users
        foreach ($validatedData['users'] as $userId) {
            UserNotification::create([
                'notification_id' => $notification->id,
                'user_id' => $userId,
            ]);
        }

        return redirect()->route('notifications.index')->with('success', 'Notification created successfully!');
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
        $notification = Notification::findOrFail($id);

        // Validate request
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'message' => 'required|string',
        ]);

        // Update notification
        $notification->update([
            'title' => $validatedData['title'],
            'message' => $validatedData['message'],
        ]);

        return redirect()->route('notifications.index')->with('success', 'Notification updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $notification = Notification::findOrFail($id);
        $notification->delete();

        return redirect()->route('notifications.index')->with('success', 'Notification deleted successfully!');
    }
}

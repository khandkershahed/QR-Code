<?php

namespace App\Models\Admin;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class NotificationMessage extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function userNotifications()
    {
        return $this->hasMany(UserNotification::class, 'notification_id');
    }

    public function users()
    {
        return $this->belongsToMany(User::class, 'user_notifications', 'notification_id', 'user_id')
            ->withTimestamps();
    }
}

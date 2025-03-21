<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;

use App\Models\Admin\NfcCard;
use App\Models\Admin\Qr;
use Laravel\Cashier\Billable;
use Spatie\Permission\Traits\HasRoles;
use Laravel\Sanctum\HasApiTokens;
use App\Models\Admin\UserNotification;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable, HasRoles, Billable;

    /**
     * The attributes that aren't mass assignable.
     *
     * @var array
     */
    protected $guarded = [];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];

    public function userNotifications() 
    {
        return $this->hasMany(UserNotification::class, 'user_id');
    }
    public function subscriptions()
    {
        return $this->hasMany(Subscription::class);
    }
    // public function cardProducts()
    // {
    //     return $this->hasMany(UserCardProduct::class, 'user_id');
    // }
    public function cardProducts()
    {
        return $this->hasMany(UserCardPlan::class, 'user_id');
    }
    public function qr()
    {
        return $this->hasMany(Qr::class);
    }
    public function nfc()
    {
        return $this->hasMany(NfcCard::class);
    }
    public function vcard()
    {
        return $this->hasMany(VirtualCard::class);
    }
    public function barCode()
    {
        return $this->hasMany(BarCode::class);
    }
    // public function userCardPlan()
    // {
    //     return $this->hasMany(BarCode::class);
    // }
}

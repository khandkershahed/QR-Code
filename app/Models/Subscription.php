<?php

// namespace App\Models;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Database\Eloquent\Model;

// class Subscription extends Model
// {
//     use HasFactory;
//     protected $guarded = [];
// }
namespace App\Models;

use App\Models\Admin\Plan;
use Laravel\Cashier\Subscription as CashierSubscription;

class Subscription extends CashierSubscription
{
    /**
     * The relations to eager load on every query.
     *
     * @var array
     */
    protected $with = ['items', 'plan'];

    /**
     * Get the plan associated with the subscription.
     */
    public function plan()
    {
        return $this->hasOne(Plan::class, 'stripe_plan', 'stripe_price');
    }
    public function user()
    {
        return $this->belongsTo(User::class,'user_id');
    }
}

<?php

namespace App\Models;

use App\Models\Admin\NfcCard;
use Illuminate\Database\Eloquent\Model;
use App\Models\Admin\NfcShippingDetails;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class VirtualCard extends Model
{
    use HasFactory;
    protected $guarded = [];
    public function nfc()
    {
        return $this->belongsTo(NfcCard::class, 'card_id');
    }
    public function shippingDetails()
    {
        return $this->hasOne(NfcShippingDetails::class, 'card_id');
    }
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}

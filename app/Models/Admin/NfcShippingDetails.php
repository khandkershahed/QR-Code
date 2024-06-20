<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NfcShippingDetails extends Model
{
    use HasFactory;
    protected $guarded = [];
    public function nfc()
    {
        return $this->belongsTo(NfcCard::class, 'card_id');
    }
}

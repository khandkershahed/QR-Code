<?php

namespace App\Models;

use App\Models\Admin\NfcCard;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class NfcProduct extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function nfc()
    {
        return $this->belongsTo(NfcCard::class, 'card_id');
    }
}

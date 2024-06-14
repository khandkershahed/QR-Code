<?php

namespace App\Models;

use App\Models\Admin\NfcCard;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VirtualCard extends Model
{
    use HasFactory;
    protected $guarded = [];
    public function nfc()
    {
        return $this->belongsTo(NfcCard::class, 'card_id');
    }
}

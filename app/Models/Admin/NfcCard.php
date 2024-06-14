<?php

namespace App\Models\Admin;

use App\Models\NfcScan;
use App\Models\VirtualCard;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NfcCard extends Model
{
    use HasFactory;
    protected $guarded = [];
    public function nfcData()
    {
        return $this->hasOne(NfcData::class, 'card_id');
    }
    public function nfcMessages()
    {
        return $this->hasMany(NfcIndividualMessage::class, 'nfc_id');
    }
    public function nfcScan()
    {
        return $this->hasMany(NfcScan::class, 'nfc_id');
    }
    public function virtualCard()
    {
        return $this->hasOne(VirtualCard::class, 'nfc_id');
    }
}

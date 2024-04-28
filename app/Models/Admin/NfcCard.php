<?php

namespace App\Models\Admin;

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
}

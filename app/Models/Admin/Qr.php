<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Qr extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function qrData()
    {
        return $this->hasOne(QrData::class, 'code_id');
    }
    public function qrScan()
    {
        return $this->hasMany(QrScan::class, 'code_id');
    }
}

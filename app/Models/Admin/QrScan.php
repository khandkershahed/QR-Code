<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class QrScan extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function qr()
    {
        return $this->belongsTo(Qr::class, 'code_id');
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BarCode extends Model
{
    use HasFactory;
    protected $guarded = [];
    public function barCodeImages()
    {
        return $this->hasMany(BarcodeImage::class, 'barcode_id');
    }
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}

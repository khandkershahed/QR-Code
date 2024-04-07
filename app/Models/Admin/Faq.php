<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Faq extends Model
{
    use HasFactory;
    protected $guarded = [];

    protected $categoryNames = [
        'qr_code' => 'QR Code',
        'nfc_card' => 'NFC Card',
        'subscription' => 'Subscription Plan',
        'reseller_account' => 'Reseller Account',
        'refund_policy' => 'Refund Policy',
        'others' => 'Others',
    ];

    // Method to get category name
    public function getCategoryNameAttribute()
    {
        return $this->categoryNames[$this->category] ?? 'No Category';
    }
}

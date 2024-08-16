<?php

namespace App\Models\Admin;

use App\Models\NfcBanner;
use App\Models\NfcScan;
use App\Models\NfcCompany;
use App\Models\NfcGallery;
use App\Models\NfcProduct;
use App\Models\NfcSeo;
use App\Models\NfcService;
use App\Models\VirtualCard;
use App\Models\NfcTestimonial;
use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class NfcCard extends Model
{
    use HasFactory;
    protected $guarded = [];
    public function nfcData()
    {
        return $this->hasOne(NfcData::class, 'card_id');
    }
    public function nfcCompany()
    {
        return $this->hasMany(NfcCompany::class, 'card_id');
    }
    public function nfcGallery()
    {
        return $this->hasMany(NfcGallery::class, 'card_id');
    }
    public function nfcProduct()
    {
        return $this->hasMany(NfcProduct::class, 'card_id');
    }
    public function nfcService()
    {
        return $this->hasMany(NfcService::class, 'card_id');
    }
    public function nfcTestimonial()
    {
        return $this->hasMany(NfcTestimonial::class, 'card_id');
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
        return $this->hasOne(VirtualCard::class, 'card_id');
    }
    public function nfcBanner()
    {
        return $this->hasOne(NfcBanner::class, 'card_id');
    }
    public function nfcSeo()
    {
        return $this->hasOne(NfcSeo::class, 'card_id');
    }
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
    public function shippingDetails()
    {
        return $this->hasOne(NfcShippingDetails::class, 'card_id');
    }
}

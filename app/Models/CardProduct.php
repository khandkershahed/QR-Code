<?php

namespace App\Models;

use App\Traits\HasSlug;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CardProduct extends Model
{
    use HasFactory,HasSlug;
    protected $slugSourceColumn = 'name';
    
    protected $guarded = [];
}

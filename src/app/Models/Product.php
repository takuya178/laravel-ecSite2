<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Shop;

class Product extends Model
{
    use HasFactory;

    protected $filable = [
       'name',
       'information',
       'price',
       'is_selling',
       'sort_order',
       'shop_id',
       'images' 
    ];

    public function shop()
    {
        return $this->belongsTo(Shop::class);
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\owner;
use Illuminate\Database\product;

class Shop extends Model
{
    use HasFactory;

    public function Owner()
    {
        return $this->belongsTo(Owner::class);
    }

    public function Product()
    {
        return $this->hasMany(Product::class);
    }

    protected $filable = [
        'owner_id',
        'name',
        'information',
        'filename',
        'is_selling'
    ];
}

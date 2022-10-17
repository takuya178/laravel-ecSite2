<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Product;
use App\Models\PrimaryCategory;

class SecondaryCategory extends Model
{
    use HasFactory;

    public function product()
    {
        return $this->hasMany(Product::class);
    }

    public function primary()
    {
        return $this->belongsTo(PrimaryCategory::class);
    }
}
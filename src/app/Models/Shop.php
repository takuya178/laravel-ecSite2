<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\owner;

class Shop extends Model
{
    use HasFactory;

    public function Owner()
    {
        return $this->belongsTo(Owner::class);
    }

    protected $filable = [
        'owner_id',
        'name',
        'information',
        'filename',
        'is_selling'
    ];
}

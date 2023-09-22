<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class dummyProd extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'shop_id',
        'unit',
        'price'
    ];

     public function shop(){
        return $this->belongsTo(Shop::class);
    }

    public function unit(){
        return $this->belongsTo(Unit::class);
    }
}

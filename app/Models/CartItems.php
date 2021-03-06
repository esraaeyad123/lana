<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CartItems extends Model
{
    use HasFactory;
    protected $guarded = [];


    public function products()
    {
        return $this->belongsToMany(Product::class);
    }


    public function user(){

        return $this->hasOne('App\Models\User');
    }


}

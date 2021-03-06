<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order_details extends Model
{
    use HasFactory;


    public function order()
    {
        return $this->belongsTo(Order::class);
    }


    
    public function products()
    {
        return $this->belongsTo(Products::class);
    }
          


    


 
}

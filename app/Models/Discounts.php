<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Discounts extends Model
{
    use HasFactory;
      

    protected $guarded = [];


    public function products()
    {
        return $this->hasMany(Product::class);
    }

    public function Orderdetails()
    {
        return $this->hasOneThrough(Order::class, Order_details::class,
        'mechanic_id', // Foreign key on the cars table...
        'car_id', // Foreign key on the owners table...
        'id', // Local key on the mechanics table...
        'id' // Local key on the cars table...
    
    );
    }

    public function carOwner()
    {
        return $this->hasOneThrough(
            Owner::class,
            Car::class,
            'mechanic_id', // Foreign key on the cars table...
            'car_id', // Foreign key on the owners table...
            'id', // Local key on the mechanics table...
            'id' // Local key on the cars table...
        );
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $guarded = [];


    public function users(){

        return $this->belongsTo('App\Models\User','user_id');
    }

    public function paymentType(){

        return $this->hasOne('App\Models\payment_type');
    }

    
    public function payments(){

        return $this->belongsTo(Payment::class);
    }

    


    public function order_details()
    {
        return $this->hasMany(Order_details::class);
    }

}

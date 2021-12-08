<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $guarded = [];



    public function categories()
    {
        return $this->belongsTo(Category::class);
    }

    public function discounts()
    {
        return $this->belongsTo(Discounts::class);
    }


    
    public function CartItem()
    {
        return $this->belongsTo(CartItems::class);
    }

    public function images()
    {
        return $this->hasMany(Product_images::class);
    }

    public function reviews()
    {
        return $this->hasMany(Product_review::class);
    }


    public function product_meta()
    {
        return $this->hasOne('App\Product_meta');
    } 


    public function tags() {
		return $this->belongsToMany('Tag');	
	}  


    public function sizes()
     {
    return $this->belongsToMany(Size::class);
     }

  
     public function colors()
     {
      
        return $this->belongsToMany(Color::class);
     }

     public function weights()
     {
      
        return $this->belongsToMany(Weight::class);
     }

     public function Order_details(){
        $this->hasMany(Order_details::class);
      }



      
    public function seller(){

        return $this->belongsTo('App\Models\Seller','seller_id');
    }

   
    

}

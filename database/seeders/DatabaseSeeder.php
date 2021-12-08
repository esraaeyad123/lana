<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {


     //$this->call(RoleSeeder::class);
    // $this->call(ColorSeeder::class);
    // $this->call(SizeSeeder::class);
    // $this->call(WeightSeeder::class);


 

      // \App\Models\User::factory(10)->create();


       // \App\Models\Seller::factory(1)->create();
  
    \App\Models\Product_review::factory(10)->create();
    \App\Models\Product_images::factory(10)->create();
      \App\Models\Product_meta::factory(10)->create();

   // \App\Models\Tag::factory(10)->create();

 \App\Models\Product_tag::factory(10)->create();
      //   \App\Models\CartItems::factory(10)->create();

    //   \App\Models\color_product::factory(10)->create();

   // \App\Models\Discounts::factory(10)->create();
   // \App\Models\payment_type::factory(10)->create();
 
 //  \App\Models\color_product::factory(10)->create();


 // \App\Models\size_product::factory(10)->create();

//\App\Models\weight_product::factory(10)->create();

 // \App\Models\Product::factory(10)->create();

 // \App\Models\Order::factory(10)->create();

// \App\Models\Discounts::factory(10)->create();

 //\App\Models\Order_details::factory(10)->create();


//\App\Models\CartItems::factory(10)->create();

\App\Models\Payment::factory(10)->create();

    }
}

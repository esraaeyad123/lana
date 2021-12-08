<?php

namespace Database\Factories;
use Tests\TestCase;
use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\weight_product ;
use App\Models\size_product ;
use App\Models\color_product ;
use App\Models\Weight;
use App\Models\Size;
use App\Models\Color;
use App\Models\Order ;
use App\Models\Discounts ;


use App\Models\Product ;

class Order_detailsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {         return [
            'weight_id' =>Weight::all()->random()->id ,
            'size_id' =>Size::all()->random()->id ,
            'product_id' => Product::all()->random()->id ,
            'discount_id' => Discounts::all()->random()->id ,

            'order_id' => Order::all()->random()->id ,
             'tax' => $this->faker->randomDigit,
            'discount_amount' => $this->faker->randomDigit,
            'total' => $this->faker->randomDigit,
            'price' => $this->faker->randomDigit,
            'quantity' =>$this->faker->numberBetween(1,200),
            'created_at' => now()->toDateTimeString(),
            'updated_at' => now()->toDateTimeString(),
            'color_id' =>Color::all()->random()->id ,


            


        ];
    }
}

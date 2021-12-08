<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Product ;
use App\Models\User ;
class CartItemsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'product_id' => Product::all()->random()->id ,
            'user_id' => User::all()->random()->id ,
            'shipping_fee' => $this->faker->randomDigit,
            'quantity' =>$this->faker->numberBetween(1,5),
            'created_at' => now()->toDateTimeString(),
            'updated_at' => now()->toDateTimeString(),
        ];
    }
}

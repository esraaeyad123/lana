<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User ;
use App\Models\Product ;

class Product_reviewFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id' => User::all()->random()->id ,
            'product_id' => Product::all()->random()->id ,
            'rating' => $this->faker->numberBetween(1, 5),
            'review' =>$this->faker->text,
            'created_at' => now()->toDateTimeString(),
            'updated_at' => now()->toDateTimeString(),
        ];
    }
}

<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Product ;

class Product_imagesFactory extends Factory
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
            'isDefualt' =>  $this->faker->boolean(),
            'image' =>  $this->faker->imageUrl(400, 300)



        ];
    }
}

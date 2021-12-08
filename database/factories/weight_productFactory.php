<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Product ;

use App\Models\Weight ;

class weight_productFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'weight_id' => Weight::all()->random()->id ,
            'product_id' => Product::all()->random()->id ,


        ];
    }
}

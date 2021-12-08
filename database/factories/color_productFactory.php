<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Product ;

use App\Models\Color ;

class color_productFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'color_id' => Color::all()->random()->id ,
            'product_id' => Product::all()->random()->id ,


        ];
    }
}

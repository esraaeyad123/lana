<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Product ;

use App\Models\Size ;

class size_productFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'size_id' => Size::all()->random()->id ,
            'product_id' => Product::all()->random()->id ,


        ];
    }
}

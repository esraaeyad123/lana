<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Product ;
use Illuminate\Support\Str;


class Product_metaFactory extends Factory
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
            'key' => $this->faker->unique()->word,

            'content' =>$this->faker->text,
            'created_at' => now()->toDateTimeString(),
            'updated_at' => now()->toDateTimeString(),



        ];
    }
}

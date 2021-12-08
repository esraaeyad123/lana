<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class payment_typeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->unique()->word,
           'isActive' =>  $this->faker->boolean(),
           'created_at' => now()->toDateTimeString(),
           'updated_at' => now()->toDateTimeString(),


        ];
    }
}

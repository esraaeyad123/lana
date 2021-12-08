<?php

namespace Database\Factories;
use Tests\TestCase;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;
use App\Models\payment_type;


class OrderFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id'=>User::all()->random()->id ,
           'status' =>$this->faker->boolean(),
           'sub_total' =>$this->faker->randomDigit,
           'total' =>$this->faker->randomDigit,
           'promo' =>$this->faker->randomDigit,
           'shipping'=>$this->faker->randomDigit,
           'discount'=>$this->faker->randomDigit,
           'tax'=>$this->faker->randomDigit,
            'payment_type'=>payment_type::all()->random()->id ,
            'created_at' => now()->toDateTimeString(),
            'updated_at' => now()->toDateTimeString(),
        ];
    }
}

<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Order ;

class PaymentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            
            'name' => $this->faker->text(),
            'status' =>  $this->faker->boolean(),
            'amount' => $this->faker->randomDigit,
            'response' => $this->faker->text(),
            'order_id' =>  Order::all()->random()->id ,
            'created_at' => now()->toDateTimeString(),
            'updated_at' => now()->toDateTimeString(),
        ];
    }
}

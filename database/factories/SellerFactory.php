<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User ;

class SellerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()

  

    {

       $user= User::where('role_id',1)->first()->id ;
      

        return [
            'name' => $this->faker->name(),
            'city' => $this->faker->randomElement(['Jeddah', 'Makkah', 'Riyadh']),

            'latitude' => $this->faker->latitude(),
            'logtude' => $this->faker->longitude(),
            'user_id' => $user,

            'created_at' => now()->toDateTimeString(),
            'updated_at' => now()->toDateTimeString(),
           
        ];
    }
}

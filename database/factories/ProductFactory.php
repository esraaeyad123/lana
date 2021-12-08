<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Tests\TestCase;

use App\Models\User;
use App\Models\Category ;
use App\Models\Weight ;
use App\Models\Size;
use App\Models\Color;




class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $user= User::where('role_id',1)->first()->id ;
        $user_up = $this->faker->$user ;
        $description = $this->faker->text;

      
        return [
           'name' => $this->faker->unique()->word,
            'description' =>$description,
            'price' => $this->faker->randomDigit,
            'quantity' =>$this->faker->numberBetween(0,200),
           'status' =>  $this->faker->boolean(),
            'seller_id' => 1,
            'category_id' => Category::all()->random()->id ,
            'weight_id' =>Weight::all()->random()->id ,
            'size_id' => Size::all()->random()->id ,
            'color_id' => Color::all()->random()->id ,
            'created_at' => now()->toDateTimeString(),
            'updated_at' => now()->toDateTimeString(),
        ];
    }
}

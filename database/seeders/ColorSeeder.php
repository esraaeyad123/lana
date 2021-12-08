<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
class ColorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        {
            DB::table('colors')->insert([
                'name'=>'#5d8aa8',
                'description'=>'Air Force blue'
            ]);
     
            DB::table('colors')->insert([
                'name'=>'#5d8aa8',
                'description'=>'Android Green'
         ]);
         
         DB::table('colors')->insert([
            'name'=>'#f0f8ff',
            'description'=>'Alice blue'
         ]);

         DB::table('colors')->insert([
            'name'=>'#fbceb1',
            'description'=>'Almond'
         ]);
 
         DB::table('colors')->insert([
            'name'=>'#ff9966',
            'description'=>'Atomic tangerine'
         ]);
        }
    
    }



}
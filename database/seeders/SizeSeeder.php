<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB ;
class SizeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    
    {
        {
            DB::table('sizes')->insert([
                'name'=>'XL or 1XL',
            ]);
     
            DB::table('sizes')->insert([
                'name'=>'L',
         ]);
         
         DB::table('sizes')->insert([
            'name'=>'M',
         ]);

         DB::table('sizes')->insert([
            'name'=>'S',
         ]);
 
         DB::table('sizes')->insert([
            'name'=>'XS',
         ]);
        }
    
    }



}
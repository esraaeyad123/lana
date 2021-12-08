<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB ;
class WeightSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        {
            {
                DB::table('weights')->insert([
                    'name'=>'1 kilo',
                    'description'=>'none'

                ]);
         
                DB::table('weights')->insert([
                    'name'=>'1\2 kilo',
                    'description'=>'none'

             ]);
             
             DB::table('weights')->insert([
                'name'=>'1\4 kilo',
                'description'=>'none'

             ]);
    
            
            }
        
        }
    
    
    
    }}

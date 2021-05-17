<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class categories extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
   
    public function run()
    {
        for ($i = 0; $i < 1000000; $i++) {
            DB::table('categories')->insert([
                'categori_id' => Str::random(10),
               
                'categori_name' => Str::random(55),
                
            ]);
        }
    }
   
}

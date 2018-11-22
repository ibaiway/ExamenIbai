<?php

use Illuminate\Database\Seeder;

class HotelsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	for ($i=0; $i < 5; $i++) { 
    	
        DB::table('hotels')->insert([
                'nombre' => str_random(10),
                'direccion' => str_random(10),
                'categoria' => random_int(1,9),
                'completo' => random_int(0, 1),
                'antiguedad' => random_int(1990, 2018)."/".random_int(1,12)."/".random_int(1,30),
            ]);
    	}
    }
}

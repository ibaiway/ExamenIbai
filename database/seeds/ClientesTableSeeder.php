<?php

use Illuminate\Database\Seeder;

class ClientesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	for ($i=0; $i < 10; $i++) { 
    		
        DB::table('clientes')->insert([
                'nif' => random_int(00000000,99999999).str_random(1),
                'nombre' => str_random(10),
                'apellido' => str_random(10),
                'telefono' => random_int(666666666,999999999),
            ]);
    	}
    }
}

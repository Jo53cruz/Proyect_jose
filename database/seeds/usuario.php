<?php

use Illuminate\Database\Seeder;

class usuario extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('usuario')->insert([
	    'nombre' => 'katty',
            'email' => 'josefcruzcruz@gmail.com',
            'telefono' => '2842710',
	    'descripcion' =>'Bienvenido a laravel',
        ]);

	DB::table('usuario')->insert([
	    'nombre' => 'diana',
            'email' => 'josefcruzcruz@gmail.com',
            'telefono' => '2842710',
	    'descripcion' =>'Bienvenido a laravel',
        ]);


    }
}

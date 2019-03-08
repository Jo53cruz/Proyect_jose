<?php

use Illuminate\Database\Seeder;

class contactotableseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
DB::table('contacto')->insert([
	   'id' => 1,
            'name' => 'jose',
            'correo' => 'josefcruzcruz@gmail.com',
            'telefono' => '2842710',
	    'descripcion' =>'Bienvenido a laravel',
        ]);

    }
}

<?php

use Illuminate\Database\Seeder;
use App\Usuario;

class UsuariosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Usuario::create([
            'nombres' => 'Juan Pablo',
            'apellidos'  => 'Rodriguez',
            'email'      => 'jprodriguez@prueba-geometry-clef.local',
            'empresa' => 'Geometry',
            'cargo'  => 'Publicista',
            'direccion'      => 'Calle 100 No.9A-11',
            'ciudad' => 'Bogotá',
            'telefono'  => '3131234567'
        ]);
        Usuario::create([
            'nombres' => 'Carolina',
            'apellidos'  => 'Martinez',
            'email'      => 'caromar12@gmail.com',
            'empresa' => 'Abstract Digital',
            'cargo'  => 'Diseñadora grafica',
            'direccion'      => 'Calle 50 No.20-11',
            'ciudad' => 'Cali',
            'telefono'  => '3131234569'
        ]);
        Usuario::create([
            'nombres' => 'Paula',
            'apellidos'  => 'Fernandez',
            'email'      => 'paula123@gmail.com',
            'empresa' => 'Lumina Group',
            'cargo'  => 'Publicista',
            'direccion'      => 'Calle 80 No.15-11',
            'ciudad' => 'Bogotá',
            'telefono'  => '3131114567'
        ]);
        Usuario::create([
            'nombres' => 'Roberto',
            'apellidos'  => 'Matamoros',
            'email'      => 'rmatamoros14@gmail.com',
            'empresa' => 'Media Vision',
            'cargo'  => 'Planner',
            'direccion'      => 'Calle 12 No.4-11',
            'ciudad' => 'Medellin',
            'telefono'  => '3131118888'
        ]);
        Usuario::create([
            'nombres' => 'Eduardo',
            'apellidos'  => 'Santos',
            'email'      => 'edsantos@gmail.com',
            'empresa' => 'Portales Digitales',
            'cargo'  => 'CEO',
            'direccion'      => 'Calle 127 No.7-11',
            'ciudad' => 'Bogota',
            'telefono'  => '6123456'
        ]);
        
    }
}

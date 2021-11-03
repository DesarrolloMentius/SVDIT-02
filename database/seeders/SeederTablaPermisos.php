<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class SeederTablaPermisos extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $permisos = [

            //tabla roles
            'ver-rol',
            'crear-rol',
            'editar-rol',
            'borrar-rol',

            
            //tabla empleados
            'ver-colab',
            'crear-colab',
            'editar-colab',
            'borrar-colab',
            'buscar-colab',
            'ver-cedula',
            'ver-fechaexp',
            'ver-fechanac',
            'ver-nombres',
            'ver-apellidos',
            'ver-correo',
            'ver-numcontacto',
            'ver-direccion',
            'ver-cargo',
            'ver-proceso',


            //tabla usuarios
            'ver-usuarios',
            'crear-usuarios',
            'editar-usuarios',
            'borrar-usuarios',
        ];

        foreach($permisos as $permiso){

            Permission::create(['name'=> $permiso]);

        }

    }
}

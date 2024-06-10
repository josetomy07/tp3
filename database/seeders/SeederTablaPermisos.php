<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

//spatie
use Spatie\Permission\Models\Permission;

class seederTablaPermisos extends Seeder
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

            //tabla blogs
            'ver-blog', 
            'crear-blog',  
            'editar-blog',  
            'borrar-blog',

             //tabla usuarios
             'ver-usuarios', 
             'crear-usuarios',  
             'editar-usuarios',  
             'borrar-usuarios',
        ];

        foreach($permisos as $permiso){
            Permission::create(['name' => $permiso]);
        }
    }
}
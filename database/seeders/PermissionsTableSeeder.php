<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PermissionsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('permissions')->delete();
        
        \DB::table('permissions')->insert(array (
            0 => 
            array (
                'created_at' => '2024-05-04 08:53:30',
                'guard_name' => 'web',
                'id' => 1,
                'name' => 'Ver configuración',
                'updated_at' => '2024-05-04 08:53:30',
            ),
            1 => 
            array (
                'created_at' => '2024-05-04 08:53:30',
                'guard_name' => 'web',
                'id' => 2,
                'name' => 'Crear configuración',
                'updated_at' => '2024-05-04 08:53:30',
            ),
            2 => 
            array (
                'created_at' => '2024-05-04 08:53:30',
                'guard_name' => 'web',
                'id' => 3,
                'name' => 'Editar configuración',
                'updated_at' => '2024-05-04 08:53:30',
            ),
            3 => 
            array (
                'created_at' => '2024-05-04 08:53:30',
                'guard_name' => 'web',
                'id' => 4,
                'name' => 'Eliminar configuración',
                'updated_at' => '2024-05-04 08:53:30',
            ),
            4 => 
            array (
                'created_at' => '2024-05-04 08:53:30',
                'guard_name' => 'web',
                'id' => 5,
                'name' => 'Ver opcion menu',
                'updated_at' => '2024-05-04 08:53:30',
            ),
            5 => 
            array (
                'created_at' => '2024-05-04 08:53:30',
                'guard_name' => 'web',
                'id' => 6,
                'name' => 'Crear opcion menu',
                'updated_at' => '2024-05-04 08:53:30',
            ),
            6 => 
            array (
                'created_at' => '2024-05-04 08:53:30',
                'guard_name' => 'web',
                'id' => 7,
                'name' => 'Editar opcion menu',
                'updated_at' => '2024-05-04 08:53:30',
            ),
            7 => 
            array (
                'created_at' => '2024-05-04 08:53:30',
                'guard_name' => 'web',
                'id' => 8,
                'name' => 'Eliminar opcion menu',
                'updated_at' => '2024-05-04 08:53:30',
            ),
            8 => 
            array (
                'created_at' => '2024-05-04 08:53:30',
                'guard_name' => 'web',
                'id' => 9,
                'name' => 'Ver permisos',
                'updated_at' => '2024-05-04 08:53:30',
            ),
            9 => 
            array (
                'created_at' => '2024-05-04 08:53:30',
                'guard_name' => 'web',
                'id' => 10,
                'name' => 'Crear permisos',
                'updated_at' => '2024-05-04 08:53:30',
            ),
            10 => 
            array (
                'created_at' => '2024-05-04 08:53:30',
                'guard_name' => 'web',
                'id' => 11,
                'name' => 'Editar permisos',
                'updated_at' => '2024-05-04 08:53:30',
            ),
            11 => 
            array (
                'created_at' => '2024-05-04 08:53:30',
                'guard_name' => 'web',
                'id' => 12,
                'name' => 'Eliminar permisos',
                'updated_at' => '2024-05-04 08:53:30',
            ),
            12 => 
            array (
                'created_at' => '2024-05-04 08:53:30',
                'guard_name' => 'web',
                'id' => 13,
                'name' => 'Ver roles',
                'updated_at' => '2024-05-04 08:53:30',
            ),
            13 => 
            array (
                'created_at' => '2024-05-04 08:53:30',
                'guard_name' => 'web',
                'id' => 14,
                'name' => 'Crear roles',
                'updated_at' => '2024-05-04 08:53:30',
            ),
            14 => 
            array (
                'created_at' => '2024-05-04 08:53:30',
                'guard_name' => 'web',
                'id' => 15,
                'name' => 'Editar roles',
                'updated_at' => '2024-05-04 08:53:30',
            ),
            15 => 
            array (
                'created_at' => '2024-05-04 08:53:30',
                'guard_name' => 'web',
                'id' => 16,
                'name' => 'Eliminar roles',
                'updated_at' => '2024-05-04 08:53:30',
            ),
            16 => 
            array (
                'created_at' => '2024-05-04 08:53:30',
                'guard_name' => 'web',
                'id' => 17,
                'name' => 'Ver usuarios',
                'updated_at' => '2024-05-04 08:53:30',
            ),
            17 => 
            array (
                'created_at' => '2024-05-04 08:53:30',
                'guard_name' => 'web',
                'id' => 18,
                'name' => 'Crear usuarios',
                'updated_at' => '2024-05-04 08:53:30',
            ),
            18 => 
            array (
                'created_at' => '2024-05-04 08:53:30',
                'guard_name' => 'web',
                'id' => 19,
                'name' => 'Editar usuarios',
                'updated_at' => '2024-05-04 08:53:30',
            ),
            19 => 
            array (
                'created_at' => '2024-05-04 08:53:30',
                'guard_name' => 'web',
                'id' => 20,
                'name' => 'Eliminar usuarios',
                'updated_at' => '2024-05-04 08:53:30',
            ),
            20 => 
            array (
                'created_at' => '2024-05-04 09:00:51',
                'guard_name' => 'web',
                'id' => 21,
                'name' => 'Ver Clientes',
                'updated_at' => '2024-05-04 09:00:51',
            ),
            21 => 
            array (
                'created_at' => '2024-05-04 09:00:59',
                'guard_name' => 'web',
                'id' => 22,
                'name' => 'Crear Clientes',
                'updated_at' => '2024-05-04 09:00:59',
            ),
            22 => 
            array (
                'created_at' => '2024-05-04 09:01:07',
                'guard_name' => 'web',
                'id' => 23,
                'name' => 'Editar Clientes',
                'updated_at' => '2024-05-04 09:01:07',
            ),
            23 => 
            array (
                'created_at' => '2024-05-04 09:01:17',
                'guard_name' => 'web',
                'id' => 24,
                'name' => 'Eliminar Clientes',
                'updated_at' => '2024-05-04 09:01:17',
            ),
        ));
        
        
    }
}
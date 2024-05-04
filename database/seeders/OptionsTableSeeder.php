<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class OptionsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('options')->delete();
        
        \DB::table('options')->insert(array (
            0 => 
            array (
                'color' => 'bg-teal',
                'created_at' => '2020-08-26 11:46:42',
                'deleted_at' => NULL,
                'descripcion' => NULL,
                'dev' => 0,
                'icono_l' => 'fa-chart-line',
                'icono_r' => NULL,
                'id' => 1,
                'nombre' => 'Dashboard',
                'option_id' => NULL,
                'orden' => 0,
                'ruta' => 'dashboard',
                'updated_at' => '2020-08-26 11:51:32',
            ),
            1 => 
            array (
                'color' => 'bg-teal',
                'created_at' => '2020-08-26 11:46:42',
                'deleted_at' => '2024-05-04 09:21:24',
                'descripcion' => NULL,
                'dev' => 0,
                'icono_l' => 'fa-tools',
                'icono_r' => NULL,
                'id' => 2,
                'nombre' => 'Admin',
                'option_id' => NULL,
                'orden' => 15,
                'ruta' => '',
                'updated_at' => '2024-05-04 09:21:24',
            ),
            2 => 
            array (
                'color' => 'bg-teal',
                'created_at' => '2020-08-26 11:46:42',
                'deleted_at' => NULL,
                'descripcion' => NULL,
                'dev' => 0,
                'icono_l' => 'fa-users',
                'icono_r' => NULL,
                'id' => 3,
                'nombre' => 'Usuarios',
                'option_id' => 2,
                'orden' => 0,
                'ruta' => 'users.index',
                'updated_at' => '2021-03-14 21:19:48',
            ),
            3 => 
            array (
                'color' => 'bg-info',
                'created_at' => '2020-08-26 11:46:42',
                'deleted_at' => NULL,
                'descripcion' => NULL,
                'dev' => 0,
                'icono_l' => 'fa-user-tag',
                'icono_r' => NULL,
                'id' => 4,
                'nombre' => 'Roles',
                'option_id' => 2,
                'orden' => 2,
                'ruta' => 'roles.index',
                'updated_at' => '2021-03-14 21:19:48',
            ),
            4 => 
            array (
                'color' => 'bg-teal',
                'created_at' => '2020-08-26 11:46:42',
                'deleted_at' => NULL,
                'descripcion' => NULL,
                'dev' => 0,
                'icono_l' => 'fa-key',
                'icono_r' => NULL,
                'id' => 5,
                'nombre' => 'Permisos',
                'option_id' => 2,
                'orden' => 3,
                'ruta' => 'permissions.index',
                'updated_at' => '2021-03-14 21:19:48',
            ),
            5 => 
            array (
                'color' => 'bg-teal',
                'created_at' => '2021-03-14 21:17:37',
                'deleted_at' => NULL,
                'descripcion' => NULL,
                'dev' => 0,
                'icono_l' => 'fa-cogs',
                'icono_r' => NULL,
                'id' => 6,
                'nombre' => 'Configuraciones',
                'option_id' => 2,
                'orden' => 4,
                'ruta' => 'profile.business',
                'updated_at' => '2021-03-14 21:19:48',
            ),
            6 => 
            array (
                'color' => 'bg-teal',
                'created_at' => '2021-03-14 21:11:34',
                'deleted_at' => '2024-05-04 09:21:27',
                'descripcion' => NULL,
                'dev' => 1,
                'icono_l' => 'fa-file-code',
                'icono_r' => NULL,
                'id' => 7,
                'nombre' => 'Developer',
                'option_id' => NULL,
                'orden' => 25,
                'ruta' => 'x',
                'updated_at' => '2024-05-04 09:21:27',
            ),
            7 => 
            array (
                'color' => 'bg-teal',
                'created_at' => '2020-08-26 11:46:42',
                'deleted_at' => NULL,
                'descripcion' => NULL,
                'dev' => 1,
                'icono_l' => 'fa-check-circle',
                'icono_r' => NULL,
                'id' => 8,
                'nombre' => 'Prueba API\'S',
                'option_id' => 7,
                'orden' => 21,
                'ruta' => 'dev.prueba.api',
                'updated_at' => '2021-03-14 21:16:13',
            ),
            8 => 
            array (
                'color' => 'bg-teal',
                'created_at' => '2020-08-26 11:46:42',
                'deleted_at' => NULL,
                'descripcion' => NULL,
                'dev' => 1,
                'icono_l' => 'fa-cogs',
                'icono_r' => NULL,
                'id' => 9,
                'nombre' => 'Configuraciones',
                'option_id' => 7,
                'orden' => 20,
                'ruta' => 'dev.configurations.index',
                'updated_at' => '2021-03-14 21:15:59',
            ),
            9 => 
            array (
                'color' => 'bg-teal',
                'created_at' => '2020-08-26 11:46:42',
                'deleted_at' => NULL,
                'descripcion' => NULL,
                'dev' => 1,
                'icono_l' => 'fa-passport',
                'icono_r' => NULL,
                'id' => 10,
                'nombre' => 'Clientes Passport',
                'option_id' => 7,
                'orden' => 22,
                'ruta' => 'dev.passport.clients',
                'updated_at' => '2021-03-14 21:16:22',
            ),
            10 => 
            array (
                'color' => 'bg-teal',
                'created_at' => '2020-08-26 11:46:42',
                'deleted_at' => NULL,
                'descripcion' => NULL,
                'dev' => 1,
                'icono_l' => 'fa-list',
                'icono_r' => NULL,
                'id' => 11,
                'nombre' => 'Menu',
                'option_id' => 7,
                'orden' => 1,
                'ruta' => 'options.index',
                'updated_at' => '2021-03-14 21:19:48',
            ),
            11 => 
            array (
                'color' => NULL,
                'created_at' => '2024-05-04 08:55:08',
                'deleted_at' => '2024-05-04 09:48:53',
                'descripcion' => 'Mostrar clientes',
                'dev' => 0,
                'icono_l' => 'fa-circle-notch',
                'icono_r' => NULL,
                'id' => 12,
                'nombre' => 'Clientes',
                'option_id' => 1,
                'orden' => 0,
                'ruta' => 'clientes.index',
                'updated_at' => '2024-05-04 09:48:53',
            ),
            12 => 
            array (
                'color' => NULL,
                'created_at' => '2024-05-04 09:48:10',
                'deleted_at' => '2024-05-04 09:48:50',
                'descripcion' => NULL,
                'dev' => 0,
                'icono_l' => 'fa-circle-notch',
                'icono_r' => NULL,
                'id' => 13,
                'nombre' => 'Amortizaciones',
                'option_id' => 1,
                'orden' => 2,
                'ruta' => 'amoritzaciones.index',
                'updated_at' => '2024-05-04 09:48:50',
            ),
            13 => 
            array (
                'color' => NULL,
                'created_at' => '2024-05-04 09:48:40',
                'deleted_at' => NULL,
                'descripcion' => 'SOPORTE',
                'dev' => 0,
                'icono_l' => 'fa-circle-notch',
                'icono_r' => NULL,
                'id' => 14,
                'nombre' => 'Soporte Tecnico',
                'option_id' => 1,
                'orden' => 1,
                'ruta' => 'soporte',
                'updated_at' => '2024-05-04 09:48:46',
            ),
            14 => 
            array (
                'color' => NULL,
                'created_at' => '2024-05-04 09:49:20',
                'deleted_at' => NULL,
                'descripcion' => NULL,
                'dev' => 0,
                'icono_l' => 'fa-circle-notch',
                'icono_r' => NULL,
                'id' => 15,
                'nombre' => 'Clientes Api',
                'option_id' => 14,
                'orden' => 0,
                'ruta' => 'clientes.index',
                'updated_at' => '2024-05-04 09:49:20',
            ),
            15 => 
            array (
                'color' => NULL,
                'created_at' => '2024-05-04 09:49:38',
                'deleted_at' => NULL,
                'descripcion' => NULL,
                'dev' => 0,
                'icono_l' => 'fa-circle-notch',
                'icono_r' => NULL,
                'id' => 16,
                'nombre' => 'Amortizaciones',
                'option_id' => 14,
                'orden' => 0,
                'ruta' => 'amoritzaciones.vista',
                'updated_at' => '2024-05-04 09:49:38',
            ),
            16 => 
            array (
                'color' => NULL,
                'created_at' => '2024-05-04 09:50:04',
                'deleted_at' => NULL,
                'descripcion' => NULL,
                'dev' => 0,
                'icono_l' => 'fa-circle-notch',
                'icono_r' => NULL,
                'id' => 17,
                'nombre' => 'Factorial',
                'option_id' => 14,
                'orden' => 0,
                'ruta' => 'factorial.vista',
                'updated_at' => '2024-05-04 09:50:04',
            ),
            17 => 
            array (
                'color' => NULL,
                'created_at' => '2024-05-04 09:50:31',
                'deleted_at' => NULL,
                'descripcion' => NULL,
                'dev' => 0,
                'icono_l' => 'fa-circle-notch',
                'icono_r' => NULL,
                'id' => 18,
                'nombre' => 'Entidad Relacion',
                'option_id' => 14,
                'orden' => 0,
                'ruta' => 'entidad.vista',
                'updated_at' => '2024-05-04 09:50:31',
            ),
        ));
        
        
    }
}
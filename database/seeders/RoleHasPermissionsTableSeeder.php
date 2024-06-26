<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class RoleHasPermissionsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('role_has_permissions')->delete();
        
        \DB::table('role_has_permissions')->insert(array (
            0 => 
            array (
                'permission_id' => 1,
                'role_id' => 3,
            ),
            1 => 
            array (
                'permission_id' => 2,
                'role_id' => 3,
            ),
            2 => 
            array (
                'permission_id' => 3,
                'role_id' => 3,
            ),
            3 => 
            array (
                'permission_id' => 4,
                'role_id' => 3,
            ),
            4 => 
            array (
                'permission_id' => 5,
                'role_id' => 3,
            ),
            5 => 
            array (
                'permission_id' => 6,
                'role_id' => 3,
            ),
            6 => 
            array (
                'permission_id' => 7,
                'role_id' => 3,
            ),
            7 => 
            array (
                'permission_id' => 8,
                'role_id' => 3,
            ),
            8 => 
            array (
                'permission_id' => 9,
                'role_id' => 3,
            ),
            9 => 
            array (
                'permission_id' => 10,
                'role_id' => 3,
            ),
            10 => 
            array (
                'permission_id' => 11,
                'role_id' => 3,
            ),
            11 => 
            array (
                'permission_id' => 12,
                'role_id' => 3,
            ),
            12 => 
            array (
                'permission_id' => 13,
                'role_id' => 3,
            ),
            13 => 
            array (
                'permission_id' => 14,
                'role_id' => 3,
            ),
            14 => 
            array (
                'permission_id' => 15,
                'role_id' => 3,
            ),
            15 => 
            array (
                'permission_id' => 16,
                'role_id' => 3,
            ),
            16 => 
            array (
                'permission_id' => 17,
                'role_id' => 3,
            ),
            17 => 
            array (
                'permission_id' => 18,
                'role_id' => 3,
            ),
            18 => 
            array (
                'permission_id' => 19,
                'role_id' => 3,
            ),
            19 => 
            array (
                'permission_id' => 20,
                'role_id' => 3,
            ),
            20 => 
            array (
                'permission_id' => 1,
                'role_id' => 4,
            ),
            21 => 
            array (
                'permission_id' => 2,
                'role_id' => 4,
            ),
            22 => 
            array (
                'permission_id' => 3,
                'role_id' => 4,
            ),
            23 => 
            array (
                'permission_id' => 4,
                'role_id' => 4,
            ),
            24 => 
            array (
                'permission_id' => 5,
                'role_id' => 4,
            ),
            25 => 
            array (
                'permission_id' => 6,
                'role_id' => 4,
            ),
            26 => 
            array (
                'permission_id' => 7,
                'role_id' => 4,
            ),
            27 => 
            array (
                'permission_id' => 8,
                'role_id' => 4,
            ),
            28 => 
            array (
                'permission_id' => 9,
                'role_id' => 4,
            ),
            29 => 
            array (
                'permission_id' => 10,
                'role_id' => 4,
            ),
            30 => 
            array (
                'permission_id' => 11,
                'role_id' => 4,
            ),
            31 => 
            array (
                'permission_id' => 12,
                'role_id' => 4,
            ),
            32 => 
            array (
                'permission_id' => 13,
                'role_id' => 4,
            ),
            33 => 
            array (
                'permission_id' => 14,
                'role_id' => 4,
            ),
            34 => 
            array (
                'permission_id' => 15,
                'role_id' => 4,
            ),
            35 => 
            array (
                'permission_id' => 16,
                'role_id' => 4,
            ),
            36 => 
            array (
                'permission_id' => 17,
                'role_id' => 4,
            ),
            37 => 
            array (
                'permission_id' => 18,
                'role_id' => 4,
            ),
            38 => 
            array (
                'permission_id' => 19,
                'role_id' => 4,
            ),
            39 => 
            array (
                'permission_id' => 20,
                'role_id' => 4,
            ),
            40 => 
            array (
                'permission_id' => 21,
                'role_id' => 5,
            ),
            41 => 
            array (
                'permission_id' => 22,
                'role_id' => 5,
            ),
            42 => 
            array (
                'permission_id' => 23,
                'role_id' => 5,
            ),
            43 => 
            array (
                'permission_id' => 24,
                'role_id' => 5,
            ),
        ));
        
        
    }
}
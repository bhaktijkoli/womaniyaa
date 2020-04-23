<?php

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
                'created_at' => '2020-04-23 20:30:13',
                'id' => 1,
                'key' => 'browse_admin',
                'table_name' => NULL,
                'updated_at' => '2020-04-23 20:30:13',
            ),
            1 => 
            array (
                'created_at' => '2020-04-23 20:30:13',
                'id' => 2,
                'key' => 'browse_bread',
                'table_name' => NULL,
                'updated_at' => '2020-04-23 20:30:13',
            ),
            2 => 
            array (
                'created_at' => '2020-04-23 20:30:13',
                'id' => 3,
                'key' => 'browse_database',
                'table_name' => NULL,
                'updated_at' => '2020-04-23 20:30:13',
            ),
            3 => 
            array (
                'created_at' => '2020-04-23 20:30:13',
                'id' => 4,
                'key' => 'browse_media',
                'table_name' => NULL,
                'updated_at' => '2020-04-23 20:30:13',
            ),
            4 => 
            array (
                'created_at' => '2020-04-23 20:30:13',
                'id' => 5,
                'key' => 'browse_compass',
                'table_name' => NULL,
                'updated_at' => '2020-04-23 20:30:13',
            ),
            5 => 
            array (
                'created_at' => '2020-04-23 20:30:13',
                'id' => 6,
                'key' => 'browse_menus',
                'table_name' => 'menus',
                'updated_at' => '2020-04-23 20:30:13',
            ),
            6 => 
            array (
                'created_at' => '2020-04-23 20:30:13',
                'id' => 7,
                'key' => 'read_menus',
                'table_name' => 'menus',
                'updated_at' => '2020-04-23 20:30:13',
            ),
            7 => 
            array (
                'created_at' => '2020-04-23 20:30:13',
                'id' => 8,
                'key' => 'edit_menus',
                'table_name' => 'menus',
                'updated_at' => '2020-04-23 20:30:13',
            ),
            8 => 
            array (
                'created_at' => '2020-04-23 20:30:13',
                'id' => 9,
                'key' => 'add_menus',
                'table_name' => 'menus',
                'updated_at' => '2020-04-23 20:30:13',
            ),
            9 => 
            array (
                'created_at' => '2020-04-23 20:30:13',
                'id' => 10,
                'key' => 'delete_menus',
                'table_name' => 'menus',
                'updated_at' => '2020-04-23 20:30:13',
            ),
            10 => 
            array (
                'created_at' => '2020-04-23 20:30:13',
                'id' => 11,
                'key' => 'browse_roles',
                'table_name' => 'roles',
                'updated_at' => '2020-04-23 20:30:13',
            ),
            11 => 
            array (
                'created_at' => '2020-04-23 20:30:13',
                'id' => 12,
                'key' => 'read_roles',
                'table_name' => 'roles',
                'updated_at' => '2020-04-23 20:30:13',
            ),
            12 => 
            array (
                'created_at' => '2020-04-23 20:30:13',
                'id' => 13,
                'key' => 'edit_roles',
                'table_name' => 'roles',
                'updated_at' => '2020-04-23 20:30:13',
            ),
            13 => 
            array (
                'created_at' => '2020-04-23 20:30:13',
                'id' => 14,
                'key' => 'add_roles',
                'table_name' => 'roles',
                'updated_at' => '2020-04-23 20:30:13',
            ),
            14 => 
            array (
                'created_at' => '2020-04-23 20:30:13',
                'id' => 15,
                'key' => 'delete_roles',
                'table_name' => 'roles',
                'updated_at' => '2020-04-23 20:30:13',
            ),
            15 => 
            array (
                'created_at' => '2020-04-23 20:30:13',
                'id' => 16,
                'key' => 'browse_users',
                'table_name' => 'users',
                'updated_at' => '2020-04-23 20:30:13',
            ),
            16 => 
            array (
                'created_at' => '2020-04-23 20:30:13',
                'id' => 17,
                'key' => 'read_users',
                'table_name' => 'users',
                'updated_at' => '2020-04-23 20:30:13',
            ),
            17 => 
            array (
                'created_at' => '2020-04-23 20:30:13',
                'id' => 18,
                'key' => 'edit_users',
                'table_name' => 'users',
                'updated_at' => '2020-04-23 20:30:13',
            ),
            18 => 
            array (
                'created_at' => '2020-04-23 20:30:13',
                'id' => 19,
                'key' => 'add_users',
                'table_name' => 'users',
                'updated_at' => '2020-04-23 20:30:13',
            ),
            19 => 
            array (
                'created_at' => '2020-04-23 20:30:13',
                'id' => 20,
                'key' => 'delete_users',
                'table_name' => 'users',
                'updated_at' => '2020-04-23 20:30:13',
            ),
            20 => 
            array (
                'created_at' => '2020-04-23 20:30:13',
                'id' => 21,
                'key' => 'browse_settings',
                'table_name' => 'settings',
                'updated_at' => '2020-04-23 20:30:13',
            ),
            21 => 
            array (
                'created_at' => '2020-04-23 20:30:13',
                'id' => 22,
                'key' => 'read_settings',
                'table_name' => 'settings',
                'updated_at' => '2020-04-23 20:30:13',
            ),
            22 => 
            array (
                'created_at' => '2020-04-23 20:30:13',
                'id' => 23,
                'key' => 'edit_settings',
                'table_name' => 'settings',
                'updated_at' => '2020-04-23 20:30:13',
            ),
            23 => 
            array (
                'created_at' => '2020-04-23 20:30:13',
                'id' => 24,
                'key' => 'add_settings',
                'table_name' => 'settings',
                'updated_at' => '2020-04-23 20:30:13',
            ),
            24 => 
            array (
                'created_at' => '2020-04-23 20:30:13',
                'id' => 25,
                'key' => 'delete_settings',
                'table_name' => 'settings',
                'updated_at' => '2020-04-23 20:30:13',
            ),
            25 => 
            array (
                'created_at' => '2020-04-23 20:30:13',
                'id' => 26,
                'key' => 'browse_hooks',
                'table_name' => NULL,
                'updated_at' => '2020-04-23 20:30:13',
            ),
        ));
        
        
    }
}
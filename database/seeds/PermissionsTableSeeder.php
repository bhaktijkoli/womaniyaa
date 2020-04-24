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
                'id' => 1,
                'key' => 'browse_admin',
                'table_name' => NULL,
                'created_at' => '2020-04-23 20:30:13',
                'updated_at' => '2020-04-23 20:30:13',
            ),
            1 => 
            array (
                'id' => 2,
                'key' => 'browse_bread',
                'table_name' => NULL,
                'created_at' => '2020-04-23 20:30:13',
                'updated_at' => '2020-04-23 20:30:13',
            ),
            2 => 
            array (
                'id' => 3,
                'key' => 'browse_database',
                'table_name' => NULL,
                'created_at' => '2020-04-23 20:30:13',
                'updated_at' => '2020-04-23 20:30:13',
            ),
            3 => 
            array (
                'id' => 4,
                'key' => 'browse_media',
                'table_name' => NULL,
                'created_at' => '2020-04-23 20:30:13',
                'updated_at' => '2020-04-23 20:30:13',
            ),
            4 => 
            array (
                'id' => 5,
                'key' => 'browse_compass',
                'table_name' => NULL,
                'created_at' => '2020-04-23 20:30:13',
                'updated_at' => '2020-04-23 20:30:13',
            ),
            5 => 
            array (
                'id' => 6,
                'key' => 'browse_menus',
                'table_name' => 'menus',
                'created_at' => '2020-04-23 20:30:13',
                'updated_at' => '2020-04-23 20:30:13',
            ),
            6 => 
            array (
                'id' => 7,
                'key' => 'read_menus',
                'table_name' => 'menus',
                'created_at' => '2020-04-23 20:30:13',
                'updated_at' => '2020-04-23 20:30:13',
            ),
            7 => 
            array (
                'id' => 8,
                'key' => 'edit_menus',
                'table_name' => 'menus',
                'created_at' => '2020-04-23 20:30:13',
                'updated_at' => '2020-04-23 20:30:13',
            ),
            8 => 
            array (
                'id' => 9,
                'key' => 'add_menus',
                'table_name' => 'menus',
                'created_at' => '2020-04-23 20:30:13',
                'updated_at' => '2020-04-23 20:30:13',
            ),
            9 => 
            array (
                'id' => 10,
                'key' => 'delete_menus',
                'table_name' => 'menus',
                'created_at' => '2020-04-23 20:30:13',
                'updated_at' => '2020-04-23 20:30:13',
            ),
            10 => 
            array (
                'id' => 11,
                'key' => 'browse_roles',
                'table_name' => 'roles',
                'created_at' => '2020-04-23 20:30:13',
                'updated_at' => '2020-04-23 20:30:13',
            ),
            11 => 
            array (
                'id' => 12,
                'key' => 'read_roles',
                'table_name' => 'roles',
                'created_at' => '2020-04-23 20:30:13',
                'updated_at' => '2020-04-23 20:30:13',
            ),
            12 => 
            array (
                'id' => 13,
                'key' => 'edit_roles',
                'table_name' => 'roles',
                'created_at' => '2020-04-23 20:30:13',
                'updated_at' => '2020-04-23 20:30:13',
            ),
            13 => 
            array (
                'id' => 14,
                'key' => 'add_roles',
                'table_name' => 'roles',
                'created_at' => '2020-04-23 20:30:13',
                'updated_at' => '2020-04-23 20:30:13',
            ),
            14 => 
            array (
                'id' => 15,
                'key' => 'delete_roles',
                'table_name' => 'roles',
                'created_at' => '2020-04-23 20:30:13',
                'updated_at' => '2020-04-23 20:30:13',
            ),
            15 => 
            array (
                'id' => 16,
                'key' => 'browse_users',
                'table_name' => 'users',
                'created_at' => '2020-04-23 20:30:13',
                'updated_at' => '2020-04-23 20:30:13',
            ),
            16 => 
            array (
                'id' => 17,
                'key' => 'read_users',
                'table_name' => 'users',
                'created_at' => '2020-04-23 20:30:13',
                'updated_at' => '2020-04-23 20:30:13',
            ),
            17 => 
            array (
                'id' => 18,
                'key' => 'edit_users',
                'table_name' => 'users',
                'created_at' => '2020-04-23 20:30:13',
                'updated_at' => '2020-04-23 20:30:13',
            ),
            18 => 
            array (
                'id' => 19,
                'key' => 'add_users',
                'table_name' => 'users',
                'created_at' => '2020-04-23 20:30:13',
                'updated_at' => '2020-04-23 20:30:13',
            ),
            19 => 
            array (
                'id' => 20,
                'key' => 'delete_users',
                'table_name' => 'users',
                'created_at' => '2020-04-23 20:30:13',
                'updated_at' => '2020-04-23 20:30:13',
            ),
            20 => 
            array (
                'id' => 21,
                'key' => 'browse_settings',
                'table_name' => 'settings',
                'created_at' => '2020-04-23 20:30:13',
                'updated_at' => '2020-04-23 20:30:13',
            ),
            21 => 
            array (
                'id' => 22,
                'key' => 'read_settings',
                'table_name' => 'settings',
                'created_at' => '2020-04-23 20:30:13',
                'updated_at' => '2020-04-23 20:30:13',
            ),
            22 => 
            array (
                'id' => 23,
                'key' => 'edit_settings',
                'table_name' => 'settings',
                'created_at' => '2020-04-23 20:30:13',
                'updated_at' => '2020-04-23 20:30:13',
            ),
            23 => 
            array (
                'id' => 24,
                'key' => 'add_settings',
                'table_name' => 'settings',
                'created_at' => '2020-04-23 20:30:13',
                'updated_at' => '2020-04-23 20:30:13',
            ),
            24 => 
            array (
                'id' => 25,
                'key' => 'delete_settings',
                'table_name' => 'settings',
                'created_at' => '2020-04-23 20:30:13',
                'updated_at' => '2020-04-23 20:30:13',
            ),
            25 => 
            array (
                'id' => 26,
                'key' => 'browse_hooks',
                'table_name' => NULL,
                'created_at' => '2020-04-23 20:30:13',
                'updated_at' => '2020-04-23 20:30:13',
            ),
            26 => 
            array (
                'id' => 27,
                'key' => 'browse_healths',
                'table_name' => 'healths',
                'created_at' => '2020-04-24 20:30:10',
                'updated_at' => '2020-04-24 20:30:10',
            ),
            27 => 
            array (
                'id' => 28,
                'key' => 'read_healths',
                'table_name' => 'healths',
                'created_at' => '2020-04-24 20:30:10',
                'updated_at' => '2020-04-24 20:30:10',
            ),
            28 => 
            array (
                'id' => 29,
                'key' => 'edit_healths',
                'table_name' => 'healths',
                'created_at' => '2020-04-24 20:30:10',
                'updated_at' => '2020-04-24 20:30:10',
            ),
            29 => 
            array (
                'id' => 30,
                'key' => 'add_healths',
                'table_name' => 'healths',
                'created_at' => '2020-04-24 20:30:10',
                'updated_at' => '2020-04-24 20:30:10',
            ),
            30 => 
            array (
                'id' => 31,
                'key' => 'delete_healths',
                'table_name' => 'healths',
                'created_at' => '2020-04-24 20:30:10',
                'updated_at' => '2020-04-24 20:30:10',
            ),
            31 => 
            array (
                'id' => 32,
                'key' => 'browse_fitnesses',
                'table_name' => 'fitnesses',
                'created_at' => '2020-04-24 20:31:03',
                'updated_at' => '2020-04-24 20:31:03',
            ),
            32 => 
            array (
                'id' => 33,
                'key' => 'read_fitnesses',
                'table_name' => 'fitnesses',
                'created_at' => '2020-04-24 20:31:03',
                'updated_at' => '2020-04-24 20:31:03',
            ),
            33 => 
            array (
                'id' => 34,
                'key' => 'edit_fitnesses',
                'table_name' => 'fitnesses',
                'created_at' => '2020-04-24 20:31:03',
                'updated_at' => '2020-04-24 20:31:03',
            ),
            34 => 
            array (
                'id' => 35,
                'key' => 'add_fitnesses',
                'table_name' => 'fitnesses',
                'created_at' => '2020-04-24 20:31:03',
                'updated_at' => '2020-04-24 20:31:03',
            ),
            35 => 
            array (
                'id' => 36,
                'key' => 'delete_fitnesses',
                'table_name' => 'fitnesses',
                'created_at' => '2020-04-24 20:31:03',
                'updated_at' => '2020-04-24 20:31:03',
            ),
            36 => 
            array (
                'id' => 37,
                'key' => 'browse_foods',
                'table_name' => 'foods',
                'created_at' => '2020-04-24 20:31:32',
                'updated_at' => '2020-04-24 20:31:32',
            ),
            37 => 
            array (
                'id' => 38,
                'key' => 'read_foods',
                'table_name' => 'foods',
                'created_at' => '2020-04-24 20:31:32',
                'updated_at' => '2020-04-24 20:31:32',
            ),
            38 => 
            array (
                'id' => 39,
                'key' => 'edit_foods',
                'table_name' => 'foods',
                'created_at' => '2020-04-24 20:31:32',
                'updated_at' => '2020-04-24 20:31:32',
            ),
            39 => 
            array (
                'id' => 40,
                'key' => 'add_foods',
                'table_name' => 'foods',
                'created_at' => '2020-04-24 20:31:32',
                'updated_at' => '2020-04-24 20:31:32',
            ),
            40 => 
            array (
                'id' => 41,
                'key' => 'delete_foods',
                'table_name' => 'foods',
                'created_at' => '2020-04-24 20:31:32',
                'updated_at' => '2020-04-24 20:31:32',
            ),
            41 => 
            array (
                'id' => 42,
                'key' => 'browse_yogas',
                'table_name' => 'yogas',
                'created_at' => '2020-04-24 20:32:06',
                'updated_at' => '2020-04-24 20:32:06',
            ),
            42 => 
            array (
                'id' => 43,
                'key' => 'read_yogas',
                'table_name' => 'yogas',
                'created_at' => '2020-04-24 20:32:06',
                'updated_at' => '2020-04-24 20:32:06',
            ),
            43 => 
            array (
                'id' => 44,
                'key' => 'edit_yogas',
                'table_name' => 'yogas',
                'created_at' => '2020-04-24 20:32:06',
                'updated_at' => '2020-04-24 20:32:06',
            ),
            44 => 
            array (
                'id' => 45,
                'key' => 'add_yogas',
                'table_name' => 'yogas',
                'created_at' => '2020-04-24 20:32:06',
                'updated_at' => '2020-04-24 20:32:06',
            ),
            45 => 
            array (
                'id' => 46,
                'key' => 'delete_yogas',
                'table_name' => 'yogas',
                'created_at' => '2020-04-24 20:32:06',
                'updated_at' => '2020-04-24 20:32:06',
            ),
            46 => 
            array (
                'id' => 47,
                'key' => 'browse_fitness_categories',
                'table_name' => 'fitness_categories',
                'created_at' => '2020-04-24 22:58:45',
                'updated_at' => '2020-04-24 22:58:45',
            ),
            47 => 
            array (
                'id' => 48,
                'key' => 'read_fitness_categories',
                'table_name' => 'fitness_categories',
                'created_at' => '2020-04-24 22:58:45',
                'updated_at' => '2020-04-24 22:58:45',
            ),
            48 => 
            array (
                'id' => 49,
                'key' => 'edit_fitness_categories',
                'table_name' => 'fitness_categories',
                'created_at' => '2020-04-24 22:58:45',
                'updated_at' => '2020-04-24 22:58:45',
            ),
            49 => 
            array (
                'id' => 50,
                'key' => 'add_fitness_categories',
                'table_name' => 'fitness_categories',
                'created_at' => '2020-04-24 22:58:45',
                'updated_at' => '2020-04-24 22:58:45',
            ),
            50 => 
            array (
                'id' => 51,
                'key' => 'delete_fitness_categories',
                'table_name' => 'fitness_categories',
                'created_at' => '2020-04-24 22:58:45',
                'updated_at' => '2020-04-24 22:58:45',
            ),
            51 => 
            array (
                'id' => 52,
                'key' => 'browse_food_categories',
                'table_name' => 'food_categories',
                'created_at' => '2020-04-24 22:59:03',
                'updated_at' => '2020-04-24 22:59:03',
            ),
            52 => 
            array (
                'id' => 53,
                'key' => 'read_food_categories',
                'table_name' => 'food_categories',
                'created_at' => '2020-04-24 22:59:03',
                'updated_at' => '2020-04-24 22:59:03',
            ),
            53 => 
            array (
                'id' => 54,
                'key' => 'edit_food_categories',
                'table_name' => 'food_categories',
                'created_at' => '2020-04-24 22:59:03',
                'updated_at' => '2020-04-24 22:59:03',
            ),
            54 => 
            array (
                'id' => 55,
                'key' => 'add_food_categories',
                'table_name' => 'food_categories',
                'created_at' => '2020-04-24 22:59:03',
                'updated_at' => '2020-04-24 22:59:03',
            ),
            55 => 
            array (
                'id' => 56,
                'key' => 'delete_food_categories',
                'table_name' => 'food_categories',
                'created_at' => '2020-04-24 22:59:03',
                'updated_at' => '2020-04-24 22:59:03',
            ),
            56 => 
            array (
                'id' => 57,
                'key' => 'browse_health_categories',
                'table_name' => 'health_categories',
                'created_at' => '2020-04-24 22:59:22',
                'updated_at' => '2020-04-24 22:59:22',
            ),
            57 => 
            array (
                'id' => 58,
                'key' => 'read_health_categories',
                'table_name' => 'health_categories',
                'created_at' => '2020-04-24 22:59:22',
                'updated_at' => '2020-04-24 22:59:22',
            ),
            58 => 
            array (
                'id' => 59,
                'key' => 'edit_health_categories',
                'table_name' => 'health_categories',
                'created_at' => '2020-04-24 22:59:22',
                'updated_at' => '2020-04-24 22:59:22',
            ),
            59 => 
            array (
                'id' => 60,
                'key' => 'add_health_categories',
                'table_name' => 'health_categories',
                'created_at' => '2020-04-24 22:59:22',
                'updated_at' => '2020-04-24 22:59:22',
            ),
            60 => 
            array (
                'id' => 61,
                'key' => 'delete_health_categories',
                'table_name' => 'health_categories',
                'created_at' => '2020-04-24 22:59:22',
                'updated_at' => '2020-04-24 22:59:22',
            ),
            61 => 
            array (
                'id' => 62,
                'key' => 'browse_yoga_categories',
                'table_name' => 'yoga_categories',
                'created_at' => '2020-04-24 22:59:37',
                'updated_at' => '2020-04-24 22:59:37',
            ),
            62 => 
            array (
                'id' => 63,
                'key' => 'read_yoga_categories',
                'table_name' => 'yoga_categories',
                'created_at' => '2020-04-24 22:59:37',
                'updated_at' => '2020-04-24 22:59:37',
            ),
            63 => 
            array (
                'id' => 64,
                'key' => 'edit_yoga_categories',
                'table_name' => 'yoga_categories',
                'created_at' => '2020-04-24 22:59:37',
                'updated_at' => '2020-04-24 22:59:37',
            ),
            64 => 
            array (
                'id' => 65,
                'key' => 'add_yoga_categories',
                'table_name' => 'yoga_categories',
                'created_at' => '2020-04-24 22:59:37',
                'updated_at' => '2020-04-24 22:59:37',
            ),
            65 => 
            array (
                'id' => 66,
                'key' => 'delete_yoga_categories',
                'table_name' => 'yoga_categories',
                'created_at' => '2020-04-24 22:59:37',
                'updated_at' => '2020-04-24 22:59:37',
            ),
        ));
        
        
    }
}
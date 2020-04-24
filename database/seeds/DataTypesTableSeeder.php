<?php

use Illuminate\Database\Seeder;

class DataTypesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('data_types')->delete();
        
        \DB::table('data_types')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'users',
                'slug' => 'users',
                'display_name_singular' => 'User',
                'display_name_plural' => 'Users',
                'icon' => 'voyager-person',
                'model_name' => 'TCG\\Voyager\\Models\\User',
                'policy_name' => 'TCG\\Voyager\\Policies\\UserPolicy',
                'controller' => 'TCG\\Voyager\\Http\\Controllers\\VoyagerUserController',
                'description' => '',
                'generate_permissions' => 1,
                'server_side' => 0,
                'details' => NULL,
                'created_at' => '2020-04-23 20:30:13',
                'updated_at' => '2020-04-23 20:30:13',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'menus',
                'slug' => 'menus',
                'display_name_singular' => 'Menu',
                'display_name_plural' => 'Menus',
                'icon' => 'voyager-list',
                'model_name' => 'TCG\\Voyager\\Models\\Menu',
                'policy_name' => NULL,
                'controller' => '',
                'description' => '',
                'generate_permissions' => 1,
                'server_side' => 0,
                'details' => NULL,
                'created_at' => '2020-04-23 20:30:13',
                'updated_at' => '2020-04-23 20:30:13',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'roles',
                'slug' => 'roles',
                'display_name_singular' => 'Role',
                'display_name_plural' => 'Roles',
                'icon' => 'voyager-lock',
                'model_name' => 'TCG\\Voyager\\Models\\Role',
                'policy_name' => NULL,
                'controller' => 'TCG\\Voyager\\Http\\Controllers\\VoyagerRoleController',
                'description' => '',
                'generate_permissions' => 1,
                'server_side' => 0,
                'details' => NULL,
                'created_at' => '2020-04-23 20:30:13',
                'updated_at' => '2020-04-23 20:30:13',
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'healths',
                'slug' => 'healths',
                'display_name_singular' => 'Health',
                'display_name_plural' => 'Healths',
                'icon' => 'voyager-documentation',
                'model_name' => 'App\\Health',
                'policy_name' => NULL,
                'controller' => NULL,
                'description' => NULL,
                'generate_permissions' => 1,
                'server_side' => 0,
                'details' => '{"order_column":null,"order_display_column":null,"order_direction":"asc","default_search_key":null,"scope":null}',
                'created_at' => '2020-04-24 20:30:10',
                'updated_at' => '2020-04-24 23:32:59',
            ),
            4 => 
            array (
                'id' => 5,
                'name' => 'fitnesses',
                'slug' => 'fitnesses',
                'display_name_singular' => 'Fitness',
                'display_name_plural' => 'Fitnesses',
                'icon' => 'voyager-documentation',
                'model_name' => 'App\\Fitness',
                'policy_name' => NULL,
                'controller' => NULL,
                'description' => NULL,
                'generate_permissions' => 1,
                'server_side' => 0,
                'details' => '{"order_column":null,"order_display_column":null,"order_direction":"asc","default_search_key":null,"scope":null}',
                'created_at' => '2020-04-24 20:31:03',
                'updated_at' => '2020-04-24 23:26:43',
            ),
            5 => 
            array (
                'id' => 6,
                'name' => 'foods',
                'slug' => 'foods',
                'display_name_singular' => 'Food',
                'display_name_plural' => 'Foods',
                'icon' => 'voyager-documentation',
                'model_name' => 'App\\Food',
                'policy_name' => NULL,
                'controller' => NULL,
                'description' => NULL,
                'generate_permissions' => 1,
                'server_side' => 0,
                'details' => '{"order_column":null,"order_display_column":null,"order_direction":"asc","default_search_key":null,"scope":null}',
                'created_at' => '2020-04-24 20:31:32',
                'updated_at' => '2020-04-24 23:29:38',
            ),
            6 => 
            array (
                'id' => 7,
                'name' => 'yogas',
                'slug' => 'yogas',
                'display_name_singular' => 'Yoga',
                'display_name_plural' => 'Yogas',
                'icon' => 'voyager-documentation',
                'model_name' => 'App\\Yoga',
                'policy_name' => NULL,
                'controller' => NULL,
                'description' => NULL,
                'generate_permissions' => 1,
                'server_side' => 0,
                'details' => '{"order_column":null,"order_display_column":null,"order_direction":"asc","default_search_key":null,"scope":null}',
                'created_at' => '2020-04-24 20:32:06',
                'updated_at' => '2020-04-24 23:31:54',
            ),
            7 => 
            array (
                'id' => 8,
                'name' => 'fitness_categories',
                'slug' => 'fitness-categories',
                'display_name_singular' => 'Fitness Category',
                'display_name_plural' => 'Fitness Categories',
                'icon' => 'voyager-tag',
                'model_name' => 'App\\FitnessCategory',
                'policy_name' => NULL,
                'controller' => NULL,
                'description' => NULL,
                'generate_permissions' => 1,
                'server_side' => 0,
                'details' => '{"order_column":null,"order_display_column":null,"order_direction":"asc","default_search_key":null,"scope":null}',
                'created_at' => '2020-04-24 22:58:45',
                'updated_at' => '2020-04-24 23:06:09',
            ),
            8 => 
            array (
                'id' => 9,
                'name' => 'food_categories',
                'slug' => 'food-categories',
                'display_name_singular' => 'Food Category',
                'display_name_plural' => 'Food Categories',
                'icon' => 'voyager-tag',
                'model_name' => 'App\\FoodCategory',
                'policy_name' => NULL,
                'controller' => NULL,
                'description' => NULL,
                'generate_permissions' => 1,
                'server_side' => 0,
                'details' => '{"order_column":null,"order_display_column":null,"order_direction":"asc","default_search_key":null,"scope":null}',
                'created_at' => '2020-04-24 22:59:03',
                'updated_at' => '2020-04-24 23:06:25',
            ),
            9 => 
            array (
                'id' => 10,
                'name' => 'health_categories',
                'slug' => 'health-categories',
                'display_name_singular' => 'Health Category',
                'display_name_plural' => 'Health Categories',
                'icon' => 'voyager-tag',
                'model_name' => 'App\\HealthCategory',
                'policy_name' => NULL,
                'controller' => NULL,
                'description' => NULL,
                'generate_permissions' => 1,
                'server_side' => 0,
                'details' => '{"order_column":null,"order_display_column":null,"order_direction":"asc","default_search_key":null,"scope":null}',
                'created_at' => '2020-04-24 22:59:22',
                'updated_at' => '2020-04-24 23:06:57',
            ),
            10 => 
            array (
                'id' => 11,
                'name' => 'yoga_categories',
                'slug' => 'yoga-categories',
                'display_name_singular' => 'Yoga Category',
                'display_name_plural' => 'Yoga Categories',
                'icon' => 'voyager-tag',
                'model_name' => 'App\\YogaCategory',
                'policy_name' => NULL,
                'controller' => NULL,
                'description' => NULL,
                'generate_permissions' => 1,
                'server_side' => 0,
                'details' => '{"order_column":null,"order_display_column":null,"order_direction":"asc","default_search_key":null,"scope":null}',
                'created_at' => '2020-04-24 22:59:37',
                'updated_at' => '2020-04-24 23:11:00',
            ),
        ));
        
        
    }
}
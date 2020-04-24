<?php

use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('roles')->delete();
        
        \DB::table('roles')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'admin',
                'display_name' => 'Administrator',
                'created_at' => '2020-04-23 20:30:13',
                'updated_at' => '2020-04-23 20:30:13',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'user',
                'display_name' => 'Normal User',
                'created_at' => '2020-04-23 20:30:13',
                'updated_at' => '2020-04-23 20:30:13',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'editor',
                'display_name' => 'Editor',
                'created_at' => '2020-04-23 22:12:59',
                'updated_at' => '2020-04-23 22:12:59',
            ),
        ));
        
        
    }
}
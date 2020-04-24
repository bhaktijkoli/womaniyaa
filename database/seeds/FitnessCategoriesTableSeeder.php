<?php

use Illuminate\Database\Seeder;

class FitnessCategoriesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('fitness_categories')->delete();
        
        \DB::table('fitness_categories')->insert(array (
            0 => 
            array (
                'id' => 1,
                'key' => 'lower-body',
                'name' => 'Lower Body',
                'created_at' => '2020-04-24 23:09:10',
                'updated_at' => '2020-04-24 23:09:10',
            ),
            1 => 
            array (
                'id' => 2,
                'key' => 'upper-body',
                'name' => 'Upper Body',
                'created_at' => '2020-04-24 23:09:10',
                'updated_at' => '2020-04-24 23:09:10',
            ),
            2 => 
            array (
                'id' => 3,
                'key' => 'core',
                'name' => 'Core',
                'created_at' => '2020-04-24 23:09:10',
                'updated_at' => '2020-04-24 23:09:10',
            ),
            3 => 
            array (
                'id' => 4,
                'key' => 'ployometrics',
                'name' => 'Ployometrics',
                'created_at' => '2020-04-24 23:09:10',
                'updated_at' => '2020-04-24 23:09:10',
            ),
            4 => 
            array (
                'id' => 5,
                'key' => 'locomotion',
                'name' => 'Locomotion',
                'created_at' => '2020-04-24 23:09:10',
                'updated_at' => '2020-04-24 23:09:10',
            ),
            5 => 
            array (
                'id' => 6,
                'key' => 'cardio',
                'name' => 'Cardio',
                'created_at' => '2020-04-24 23:09:10',
                'updated_at' => '2020-04-24 23:09:10',
            ),
        ));
        
        
    }
}
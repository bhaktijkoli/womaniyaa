<?php

use Illuminate\Database\Seeder;

class YogaCategoriesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('yoga_categories')->delete();
        
        \DB::table('yoga_categories')->insert(array (
            0 => 
            array (
                'id' => 1,
                'key' => 'flexibility',
                'name' => 'Flexibility',
                'created_at' => '2020-04-24 23:10:20',
                'updated_at' => '2020-04-24 23:10:20',
            ),
            1 => 
            array (
                'id' => 2,
                'key' => 'stress-reduction',
                'name' => 'Stress Reduction',
                'created_at' => '2020-04-24 23:10:20',
                'updated_at' => '2020-04-24 23:10:20',
            ),
            2 => 
            array (
                'id' => 3,
                'key' => 'digestion',
                'name' => 'Digestion',
                'created_at' => '2020-04-24 23:10:20',
                'updated_at' => '2020-04-24 23:10:20',
            ),
            3 => 
            array (
                'id' => 4,
                'key' => 'balance',
                'name' => 'Balance',
                'created_at' => '2020-04-24 23:10:20',
                'updated_at' => '2020-04-24 23:10:20',
            ),
            4 => 
            array (
                'id' => 5,
                'key' => 'strength',
                'name' => 'Strength',
                'created_at' => '2020-04-24 23:10:20',
                'updated_at' => '2020-04-24 23:10:20',
            ),
            5 => 
            array (
                'id' => 6,
                'key' => 'body-alignment',
                'name' => 'Body Alignment',
                'created_at' => '2020-04-24 23:10:20',
                'updated_at' => '2020-04-24 23:10:20',
            ),
            6 => 
            array (
                'id' => 7,
                'key' => 'concentration',
                'name' => 'Concentration',
                'created_at' => '2020-04-24 23:10:20',
                'updated_at' => '2020-04-24 23:10:20',
            ),
            7 => 
            array (
                'id' => 8,
                'key' => 'meditation',
                'name' => 'Meditation',
                'created_at' => '2020-04-24 23:10:20',
                'updated_at' => '2020-04-24 23:10:20',
            ),
        ));
        
        
    }
}
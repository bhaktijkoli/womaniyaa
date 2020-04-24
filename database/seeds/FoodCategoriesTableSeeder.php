<?php

use Illuminate\Database\Seeder;

class FoodCategoriesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('food_categories')->delete();
        
        \DB::table('food_categories')->insert(array (
            0 => 
            array (
                'id' => 1,
                'key' => 'immune-building-elements',
                'name' => 'Immune Building Elements',
                'created_at' => '2020-04-24 23:05:00',
                'updated_at' => '2020-04-24 23:05:51',
            ),
            1 => 
            array (
                'id' => 2,
                'key' => 'recipes',
                'name' => 'Recipes',
                'created_at' => '2020-04-24 23:05:33',
                'updated_at' => '2020-04-24 23:05:33',
            ),
        ));
        
        
    }
}
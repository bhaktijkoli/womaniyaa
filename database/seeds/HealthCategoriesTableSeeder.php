<?php

use Illuminate\Database\Seeder;

class HealthCategoriesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('health_categories')->delete();
        
        \DB::table('health_categories')->insert(array (
            0 => 
            array (
                'id' => 1,
                'key' => 'common-diseases',
                'name' => 'Common Diseases',
                'created_at' => '2020-04-24 23:03:00',
                'updated_at' => '2020-04-24 23:04:33',
            ),
            1 => 
            array (
                'id' => 2,
                'key' => 'feminine-diseases',
                'name' => 'Feminine Diseases',
                'created_at' => '2020-04-24 23:04:00',
                'updated_at' => '2020-04-24 23:04:00',
            ),
        ));
        
        
    }
}
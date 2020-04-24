<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Fitness extends Model
{
  public static function types() {
    return array(
      ['name' => 'Lower Body', 'key' => 'lower-body'],
      ['name' => 'Upper Body', 'key' => 'upper-body'],
      ['name' => 'Core', 'key' => 'core'],
      ['name' => 'Ployometrics', 'key' => 'ployometrics'],
      ['name' => 'Locomotion', 'key' => 'locomotion'],
      ['name' => 'Cardio', 'key' => 'cardio'],
    );
  }

  public function category()
  {
    return $this->belongsTo('App\FitnessCategory', 'category_id');
  }
}

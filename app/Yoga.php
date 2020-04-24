<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Yoga extends Model
{
  public static function types() {
    return array(
      ['name' => 'Flexibility', 'key' => 'flexibility'],
      ['name' => 'Stress Reduction', 'key' => 'stress-reduction'],
      ['name' => 'Digestion', 'key' => 'digestion'],
      ['name' => 'Balance', 'key' => 'balance'],
      ['name' => 'Strength', 'key' => 'strength'],
      ['name' => 'Body Alignment', 'key' => 'body-alignment'],
      ['name' => 'Concentration', 'key' => 'concentration'],
      ['name' => 'Meditation', 'key' => 'meditation'],
    );
  }

  public function category()
  {
    return $this->belongsTo('App\YogaCategory', 'category_id');
  }

}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Food extends Model
{
  public static function types() {
    return array(
      ['name' => 'Immune Building Elements', 'key' => 'immune-building-elements'],
      ['name' => 'Recipes', 'key' => 'recipes'],
    );
  }

  public function category()
  {
    return $this->belongsTo('App\FoodCategory', 'category_id');
  }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Health extends Model
{
  public static function types() {
    return array(
      ['name' => 'Common Diseases', 'key' => 'common-diseases'],
      ['name' => 'Feminine Diseases', 'key' => 'feminine-diseases'],
    );
  }

  public function category()
  {
    return $this->belongsTo('App\HealthCategory', 'category_id');
  }
}

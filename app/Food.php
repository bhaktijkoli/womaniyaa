<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Food extends Model
{
  public function category()
  {
    return $this->belongsTo('App\FoodCategory', 'category_id');
  }

  protected static function booted()
  {
    static::created(function ($post) {
      $post->slug = Str::slug($post->name);
      $post->save();
    });
  }
}

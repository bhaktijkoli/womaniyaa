<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Health extends Model
{
  public function category()
  {
    return $this->belongsTo('App\HealthCategory', 'category_id');
  }

  protected static function booted()
  {
    static::created(function ($post) {
      $post->slug = Str::slug($post->name);
      $post->save();
    });
  }
}

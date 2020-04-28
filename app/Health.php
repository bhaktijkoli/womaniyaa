<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use Actuallymab\LaravelComment\Contracts\Commentable;
use Actuallymab\LaravelComment\HasComments;

class Health extends Model implements Commentable
{
  use HasComments;

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

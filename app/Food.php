<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use Actuallymab\LaravelComment\Contracts\Commentable;
use Actuallymab\LaravelComment\HasComments;
use Jcc\LaravelVote\CanBeVoted;

class Food extends Model implements Commentable
{
  use HasComments, CanBeVoted;

  protected $table = 'foods';

  protected $vote = User::class;

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

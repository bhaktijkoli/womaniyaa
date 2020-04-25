<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FoodController extends Controller
{
  public function index($key, Request $request)
  {
    $category = \App\FoodCategory::where('key', $key)->firstOrFail();
    $posts = \App\Food::where('category_id', $category->id)->get();
    return view('food.index')->with([
      'category' => $category,
      'posts' => $posts,
    ]);
  }

  public function show($key, $slug, Request $request)
  {
    $post = \App\Food::where('slug', $slug)->firstOrFail();
    $category = $post->category;
    return view('food.show')->with([
      'category' => $category,
      'post' => $post,
    ]);
  }
}

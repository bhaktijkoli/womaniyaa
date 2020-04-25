<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FitnessController extends Controller
{
  public function index($key, Request $request)
  {
    $category = \App\FitnessCategory::where('key', $key)->firstOrFail();
    $posts = \App\Fitness::where('category_id', $category->id)->get();
    return view('fitness.index')->with([
      'category' => $category,
      'posts' => $posts,
    ]);
  }

  public function show($key, $slug, Request $request)
  {
    $post = \App\Fitness::where('slug', $slug)->firstOrFail();
    $category = $post->category;
    return view('fitness.show')->with([
      'category' => $category,
      'post' => $post,
    ]);
  }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HealthController extends Controller
{
  public function index($key, Request $request)
  {
    $category = \App\HealthCategory::where('key', $key)->firstOrFail();
    $posts = \App\Health::where('category_id', $category->id)->get();
    return view('health.index')->with([
      'category' => $category,
      'posts' => $posts,
    ]);
  }
  public function show($key, $slug, Request $request)
  {
    $post = \App\Health::where('slug', $slug)->firstOrFail();
    $category = $post->category;
    return view('health.show')->with([
      'category' => $category,
      'post' => $post,
    ]);
  }
}

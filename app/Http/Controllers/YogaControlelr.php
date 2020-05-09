<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class YogaControlelr extends Controller
{
  public function index($key, Request $request)
  {
    $category = \App\YogaCategory::where('key', $key)->firstOrFail();
    $posts = \App\Yoga::where('category_id', $category->id)->get();
    return view('yoga.index')->with([
      'category' => $category,
      'posts' => $posts,
    ]);
  }

  public function show($key, $slug, Request $request)
  {
    $post = \App\Yoga::where('slug', $slug)->firstOrFail();
    $category = $post->category;
    return view('yoga.show')->with([
      'category' => $category,
      'post' => $post,
    ]);
  }
}

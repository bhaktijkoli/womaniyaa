<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GeneralTipController extends Controller
{
  public function show($slug)
  {
    $tip = \App\GeneralTip::where('slug', $slug)->firstOrFail();
    return view('tip.show', [
      'tip' => $tip,
    ]);
  }
}

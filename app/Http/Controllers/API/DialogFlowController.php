<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\DialogFlowRequest;
use App\Health;
use App\DietPlan;
use Voyager;
use Log;

class DialogFlowController extends Controller
{
  public function webhook(Request $request)
  {
    $dr = new DialogFlowRequest($request);
    $parameters = $dr->parameters;
    $message = array();
    if($dr->intentName == 'Diagnosis Result' || $dr->intentName == 'Diagnosis Symptom 3') {
      $symptom = $parameters['symptom1'];
      $health = Health::where('slug', $symptom)->first();
      if($health) {
        $message = array(
          array(
            'type' => 'image',
            'rawUrl' => Voyager::image($health->image),
          ),
          array(
            'type' => 'info',
            'title' => "You may have $health->name."
          ),
          array(
            'type' => 'info',
            'title' => strip_tags($health->remedies),
          ),
          array(
            'type' => 'button',
            'text' => 'Read More',
            'link' => route('health.show', ['key' => $health->category->key, 'slug' => $health->slug]),
          )
        );
      } else {
        $message = array(
          array(
            'type' => 'info',
            'title' => "You were not able to findout."
          )
        );
      }
    }
    else {
      $age = $parameters['age'];
      $plan = DietPlan::where('max_age', '>=', $age)->where('min_age', '<=', $age)->first();
      if($plan) {
        $message = array(
          array(
            'type' => 'image',
            'rawUrl' => Voyager::image($plan->image),
          )
        );
      } else {
        $message = array(
          array(
            'type' => 'info',
            'title' => "You were not able to find for $age."
          )
        );
      }
    }

    $data = array(
      'fulfillmentMessages' => array(
        array(
          'payload' => array(
            'richContent' => array(
              $message
            )
          )
        )
      )
    );
    return json_encode($data);
  }
}

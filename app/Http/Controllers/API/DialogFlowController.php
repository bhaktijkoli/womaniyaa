<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\DialogFlowRequest;
use App\Health;
use Log;

class DialogFlowController extends Controller
{
  public function webhook(Request $request)
  {
    $dr = new DialogFlowRequest($request);
    $parameters = $dr->parameters;
    $symptom = $parameters['symptom1'];
    $data = array(
      'fulfillmentMessages' => array(
        array(
          'payload' => array(
            'richContent' => array(
              array(
                array(
                  'type' => 'info',
                  'title' => "You may have $symptom",
                )
              )
            )
          )
        )
      )
    );
    return json_encode($data);
  }
}

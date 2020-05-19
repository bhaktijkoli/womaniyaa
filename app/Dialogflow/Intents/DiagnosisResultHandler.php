<?php
namespace App\Dialogflow\Intents;

use BhaktijKoli\LaravelDialogflow\DialogflowQuickResponse;
use BhaktijKoli\LaravelDialogflow\DialogflowRequest;
use BhaktijKoli\LaravelDialogflow\DialogflowResponse;
use BhaktijKoli\LaravelDialogflow\IntentHandler;

use App\Health;
use Voyager;

class DiagnosisResultHandler extends IntentHandler
{

  /**
  * Handle Dialogflow Request.
  *
  * @param BhaktijKoli\LaravelDialogflow\DialogflowRequest $request
  * @return mixed
  */
  public function handle(DialogflowRequest $request)
  {
    $response = new DialogflowResponse($request);
    $symptom = $request->parameters['symptom1'];
    $health = Health::where('slug', $symptom)->first();
    if($health) {
      $response->addData([
        'type' => 'info',
        'title' => "Your Results"
      ]);
      $response->addData([
        'type' => 'image',
        'rawUrl' => Voyager::image($health->image),
      ])
      ->addData([
        'type' => 'info',
        'title' => $health->name
      ]);
      if(isset($request->parameters['symptom2'])) {
        $health2 = Health::where('slug', $request->parameters['symptom2'])->first();
        if($health2) {
          if($health2->id != $health->id) {
            $response->addData([
              'type' => 'image',
              'rawUrl' => Voyager::image($health2->image),
            ])
            ->addData([
              'type' => 'info',
              'title' => $health2->name
            ]);
          }
        }
      }
      if(isset($request->parameters['symptom3'])) {
        $health3 = Health::where('slug', $request->parameters['symptom3'])->first();
        if($health3) {
          if($health3->id != $health->id && $health3->id != $health->id) {
            $response->addData([
              'type' => 'image',
              'rawUrl' => Voyager::image($health3->image),
            ])
            ->addData([
              'type' => 'info',
              'title' => $health3->name
            ]);
          }
        }
      }
    } else {
      $response->addData([
        'type' => 'info',
        'title' => "We were not able to findout."
      ]);
    }
    return $response;
  }

}

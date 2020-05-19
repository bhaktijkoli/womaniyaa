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
    $healths = Health::where('symptoms', 'like', "%$symptom%");
    if(isset($request->parameters['symptom2'])) {
      $symptom = $request->parameters['symptom2'];
      $healths = $healths->orWhere('symptoms', 'like', "%$symptom%");
    }
    if(isset($request->parameters['symptom3'])) {
      $symptom = $request->parameters['symptom3'];
      $healths = $healths->orWhere('symptoms', 'like', "%$symptom%");
    }
    $healths = $healths->get();
    $response->addData([
      'type' => 'info',
      'title' => "Your diagnosis results",
    ]);
    foreach ($healths as $health) {
      $response->addData([
        'type' => 'info',
        'title' => $health->name,
        'actionLink' => route('health.show', ['key' => $health->category->key, 'slug' => $health->slug]),
      ]);
      $response->addData([
        'type' => 'divider',
      ]);
    }
    return $response;
  }

}

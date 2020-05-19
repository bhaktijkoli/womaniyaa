<?php
namespace App\Dialogflow\Intents;

use BhaktijKoli\LaravelDialogflow\DialogflowQuickResponse;
use BhaktijKoli\LaravelDialogflow\DialogflowRequest;
use BhaktijKoli\LaravelDialogflow\DialogflowResponse;
use BhaktijKoli\LaravelDialogflow\IntentHandler;

use App\DietPlan;
use Voyager;

class DietPlanIntentHandler extends IntentHandler
{

  private $bmiData = [
    array('minAge' => 5, 'maxAge' => 18, 'minBMI' => 0, 'maxBMI' => 14.7, 'name' => 'Severe Thinness'),
    array('minAge' => 18, 'maxAge' => 100, 'minBMI' => 0, 'maxBMI' => 17, 'name' => 'Severe Thinness'),

    array('minAge' => 5, 'maxAge' => 18, 'minBMI' => 14.7, 'maxBMI' => 16.3, 'name' => 'Moderate Thinness'),
    array('minAge' => 18, 'maxAge' => 100, 'minBMI' => 17, 'maxBMI' => 18.5, 'name' => 'Moderate Thinness'),

    array('minAge' => 5, 'maxAge' => 18, 'minBMI' => 16.3, 'maxBMI' => 24.8, 'name' => 'Normal'),
    array('minAge' => 18, 'maxAge' => 100, 'minBMI' => 18.5, 'maxBMI' => 25, 'name' => 'Normal'),

    array('minAge' => 5, 'maxAge' => 18, 'minBMI' => 24.8, 'maxBMI' => 29.5, 'name' => 'Overweight'),
    array('minAge' => 18, 'maxAge' => 100, 'minBMI' => 25, 'maxBMI' => 30, 'name' => 'Overweight'),

    array('minAge' => 5, 'maxAge' => 18, 'minBMI' => 29.5, 'maxBMI' => 60, 'name' => 'Obese'),
    array('minAge' => 18, 'maxAge' => 100, 'minBMI' => 30, 'maxBMI' => 60, 'name' => 'Obese'),
  ];

  /**
  * Handle Dialogflow Request.
  *
  * @param BhaktijKoli\LaravelDialogflow\DialogflowRequest $request
  * @return mixed
  */
  public function handle(DialogflowRequest $request)
  {
    $response = new DialogflowResponse($request);
    $age = $request->parameters['age'];
    $bmi = $request->parameters['bmi'];
    $plan = DietPlan::where('max_age', '>=', $age)->where('min_age', '<=', $age)->first();
    if($plan) {
      $response->addData([
        'type' => 'image',
        'rawUrl' => Voyager::image($plan->image),
      ]);
    } else {
      $response->addData([
        'type' => 'info',
        'title' => "You were not able to find for $age."
      ]);
    }
    return $response;
  }

}

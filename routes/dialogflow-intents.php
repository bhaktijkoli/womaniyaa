<?php

use BhaktijKoli\LaravelDialogflow\Facades\Fulfillment;

/*
|--------------------------------------------------------------------------
| Dialogflow Fulfillment Intents
|--------------------------------------------------------------------------
|
| Here you may register all of the intents
|
*/

Fulfillment::intent('Default Welcome Intent', 'WelcomeIntentHandler');
Fulfillment::intent('Diagnosis Result', 'DiagnosisResultHandler');
Fulfillment::intent('Diagnosis Symptom 3', 'DiagnosisResultHandler');
Fulfillment::intent('Diet Plan BMI', 'DietPlanIntentHandler');
Fulfillment::intent('Diet Plan Calculate BMI', 'DietPlanIntentHandler');

<?php

namespace App;

use Illuminate\Http\Request;

class DialogFlowRequest {

  private $request;
  public $responseId;
  public $session;
  public $queryResult;
  public $parameters;
  public $intentName;

  public function __construct(Request $request)
  {
    $this->request = $request;
    $this->responseId = $request->input('responseId');
    $this->session = $request->input('session');
    $this->queryResult = $request->input('queryResult');
    $this->parameters = $this->queryResult['parameters'];
    $this->intentName = $this->queryResult['intent']['displayName'];
  }

}

 ?>

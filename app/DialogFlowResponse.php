<?php

namespace App;

use Illuminate\Http\Request;

class DialogFlowResponse {

  private $request;
  private $responses = [];

  public function __construct(DialogFlowRequest $request)
  {
    $this->request = $request;
  }

  public function addInfo($title, $subtitle)
  {
    $data = \stdClass;
    $data->type = 'info';
    $data->title = $title;
    $data->subtitle = $subtitle;
    array_push($this->responses, $data);
    return $this;
  }

  public function build()
  {
      $data = \stdClass;
      $data->fulfillmentMessages = [];
  }


}
// 
// $data = array(
//   'fulfillmentMessages' => array(
//     array(
//       'text' => array(
//         'text' => array(
//           'Text response from webhook',
//         )
//       )
//     )
//   )
// );

 ?>

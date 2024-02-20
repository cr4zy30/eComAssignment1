<?php
namespace app\controllers;

use stdClass;

class Count extends \app\core\Controller {

   

  function index() {
    $count = new \app\models\Counter();
    $count->increment();
    $count->write();

    //do i encode or decode or just echo the variable
    echo json_decode($count);
  }

  function read() {
    $this->view('Contact/read');
  }

}

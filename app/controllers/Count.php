<?php
namespace app\controllers;

use stdClass;

class Count extends \app\core\Controller
{

  function index()
  {
    $count = new \app\models\Counter();
    $count->increment();
    $count->write();

    echo $count->__toString();
    // or echo $count
  }
}

<?php
namespace app\controllers;

class Contact extends \app\core\Controller {

  function index() {
    $this->view('Contact/index');
  }

  function read() {
    $this->view('Contact/read');
  }

}
<?php
namespace app\controllers;

class Contact extends \app\core\Controller {

  function index() { 
    $this->view('Contact/index');
  }

  function read() {
    $messages = \app\models\Message::getAll();
    $this->view('Contact/read', $messages);
  }

  function sendMessage() {
   
    $messageObj = new \app\models\Message();
    $messageObj->email = $_POST['email'];
    $messageObj->message = $_POST['message'];
    $messageObj->IP = $_SERVER['REMOTE_ADDR'];
    $messageObj->write();

    header('location:/Contact/read');
  }

}

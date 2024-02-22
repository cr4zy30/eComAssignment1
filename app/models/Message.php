<?php
namespace app\models;

Class Message{

    // prev variables were wrong in the assignment doc, 
    public $email;
    public $message;
    public $IP;

    public function __construct($object = null) {
        if($object == null) return;
        $this->email = $object->email;
        $this->message = $object->message;
        $this->IP = $object->IP;
    }

    public function read() {

        //for this method i followed the instructions
        //but when i looked at the class material i feel like
        //im missing steps but idk
        $filename = 'resources/messages.txt';
        $messages = file($filename);
        return $messages;
    }

    public function write(){
        $filename = 'resources/messages.txt';
        
        $file_handle = fopen($filename, 'a');
        flock($file_handle, LOCK_EX);
        $message = json_encode($this);
        
        fwrite($file_handle, $message . "\n");
		flock($file_handle, LOCK_UN);

        fclose($file_handle);
    }

    public static function getAll() {
        $filename = 'resources/messages.txt';
        $messages = file($filename);

        foreach ($messages as $key => $value) {
            $object = json_decode($value);
            $messageObj = new \app\models\Message($object);
            $messages[$key] = $messageObj;
        }

        return $messages;
    }

}
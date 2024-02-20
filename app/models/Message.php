<?php
namespace app\models;

Class Message{
    $name;
    $email;
    $IP;

    public function read(){

        //for this method i followed the instructions
        //but when i looked at the class material i feel like
        //im missing steps but idk
        $filename = '/resources/messages.txt';
        $messages = file($filename);
        return $messages


    }

    public function write(){
        $message = json_encode($this);
        $filename = '/resources/messages.txt';

        $file_handle = fopen($filename, 'a');
        flock($file_handle, LOCK_EX);

        fwrite($file_handle, $message . "\n");
        fclose($filename);

    }

}
<?php
namespace app\models;

class Counter
{

  public $count;

  public function __construct()
  {

    $filename = 'resources/counter.txt';

    if (file_exists($filename)) {

      $file_handle = fopen($filename, 'r');
      flock($file_handle, LOCK_EX);

      $count = fread($file_handle, filesize($filename));

      flock($file_handle, LOCK_UN);
      fclose($file_handle);

    } else {
      $count = '{"count":0}';
    }

    $this->count = json_decode($count)->count;
  }

  public function increment()
  {
    $this->count++;
  }

  public function write()
  {
    $filename = 'resources/counter.txt';
    //json encoding object into count variable
    $count = json_encode($this);
    //opening file for writing
    $file_handle = fopen($filename, 'w');
    //locking file for writing
    flock($file_handle, LOCK_EX);
    //writing with contents of count
    fwrite($file_handle, $count);
    fclose($file_handle);
  }


  public function __toString()
  {
    return json_encode($this);
  }
}
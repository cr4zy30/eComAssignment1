<?php
namespace app\models;

class Counter{

  public $count;
  
  public function __construct(){
        //put file into variable
        $filename = '/resources/counter.txt'
        


        //not sure if the null statement is right or if just ($file_handle is better)
        if($file_handle != null){
            //open eeyah
            $file_handle = fopen($filename,'r');
            //lock eeyah but idk if its ex or un we did ex in class so
            flock($file_handle, LOCK_EX);
            //read file into count variable i dont think this is right but anyway
            //closin
            fclose($filename);
        } else {
            $count = '{"count":0}';
        }

        //decodin it idk im confused on this
        $count = json_decode($this);

		
  }

  public function increment(){
        $this.$count++;
  }

  public function write(){
    $filename = '/resources/counter.txt';
    //json encoding object into count variable
    $count = json_encode($this);
    //opening file for writing
    $file_handle = fopen($filename,'w');
    //locking file for writing
    flock($file_handle, LOCK_EX);
    //writing with contents of count
    fwrite($file_handle, $count . "\n");
    fclose($file_handle);
  }


  public function __toString(){
    //ez
    return json_encode($this);
  }
}
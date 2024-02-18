<?php
namespace app\core;

class Controller{
	function view($name, $data=null){
		//load the view files to present them to the Web user
		include('app/views/' . $name . '.php');
	}
}
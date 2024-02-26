<?php
namespace app\core;

class Controller
{
	function view($name, $data = null)
	{

		$contentView = 'app/views/' . $name . '.php';
		include('app/views/Navigation/navbar.php');

	}
}
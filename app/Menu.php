<?php

namespace App;

class Menu
{
	public $data; // array of menu items

	public function __construct()
	{
		$this->data  = include(__DIR__ . '/../data/menu.php');		
	}	
	
}
<?php

namespace App;

class ImageCollection
{
	protected $data; 

	public function __construct()
	{
		$this->data  = include(__DIR__ . '/../data/images.php');
		
	}

	public function get($location)
	{
		return $this->data[$location];
	}	
	
}
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
		if (array_key_exists($location, $this->data)) {
			return $this->data[$location];
		}
		
		return [];		
	}	
	
}
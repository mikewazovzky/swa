<?php

namespace App;

use App\Location;

class LocationCollection
{
	public $data; // array of App\Location objects with 'id' keyes

	public function __construct()
	{
		$data  = include(__DIR__ . '/../data/locations.php');
		foreach($data as $item) {
			$this->data[$item['id']] = new Location($item);
		}
	}	
	
}
<?php

namespace App;

class Location
{
	public $id;
	public $title;
	public $img;
	public $page;
	public $description;
	public $color;

	public function __construct(array $data)
	{
		$this->id 			= $data['id'];
		$this->title 		= $data['title'];
		$this->img 			= $data['img'];
		$this->page 		= $data['page'];
		$this->description 	= $data['description'];
		$this->color		= $data['color'];
	}	
	
}
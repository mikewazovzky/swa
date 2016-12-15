<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class Location extends Model
{
    // allow mass assignment
	protected $fillable = [
		'title',
		'description',
		'page',
		'image',		
		'published_at',
	];
	
	protected $dates = ['published_at'];
	
	public function setPublishedAtAttribute($date) 
	{
		$this->attributes['published_at'] = Carbon::createFromFormat('Y-m-d', $date);		
	}
	
	/**
	 * Returns user for the Article
	 */
	public function user()
	{
		return $this->belongsTo('App\User');
	}
	
	public static function color() {	
		static $colors = ['#ff6f00', '#ff9500', '#ffc108', '#27a15e', '#51de38', '#c3d932', '#7a79c6', '#7d7bff', '#6d6aff'];
		static $index = 0;	
		
		$color = $colors[$index];
		$index++;
		if ($index >= count($colors)) {
			$index = 0;
		}
		return $color;
	}
	/**
	 * Create/update location files // changes/resets $this->page and $this->image
	 */
	public function loadPageFile($pageFile, $pageName)
	{
		// upload Page File
		if($pageFile) {   
			return $this->uploadPage($pageFile, $pageName . '.blade.php');
		} 
		return false;
	}	
	
	public function loadImageFile($imageFile, $imageName)
	{
		// upload Image File
		if($imageFile) {
			return $this->uploadImage($imageFile, $imageName);						
		}
		return false;
	}	
	public function uploadPage($file, $pageName)
	{
		$path = '/resources/views/locations/locations/';
		return fileUpload($file, $path, $pageName);
	}		
	
	public function uploadImage($file, $imageName)
	{
		$path = '/public/media/';
		return fileUpload($file, $path, $imageName);
	}
	
	
}

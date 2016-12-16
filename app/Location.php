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
	
	public function fillData($input)
	{
		$name = generateFileName($input['title'], 10); 
		$pageName = $this->page ? : $name;	
		$imageName = $this->image ? : $name . '.jpg';
		
		$this->fill($input); 		
		
		if(isset($input['page'])) {   
			if($this->loadPageFile($input['page'], $pageName)) {			
				$this->page = $pageName;                                       
			}
		}
		
		if(isset($input['image'])) { 	
			if($this->loadImageFile($input['image'], $imageName)) {				
				$this->image = $imageName;
			}
		}	
	}	
	
	/**
     * Read location [html] page as a string
     *
     * @return string
     */
	public function getContents()
	{
		$path = '/resources/views/locations/locations/';
		
		if (!$this->page) {
			return '';
		} 		
		return file_get_contents(base_path() . $path . $this->page . '.html');
	}
	
	/**
     * Override Model::destroy method, delete page and image files
     *
     * @return string
     */
	public function delete() 
	{
		if($this->page) {			
			$filePage = base_path() . '/resources/views/locations/locations/' . $this->page . '.html';
			unlink($filePage);
		}
		
		// delete location image file
		if($this->image) {
			$fileImage = base_path() . '/public/media/' . $this->image;
			unlink($fileImage);
		}
		
		return parent::delete();		
	}	
			
	
	/**
	 * Create/update location files // changes/resets $this->page and $this->image
	 */
	public function loadPageFile($pageFile, $pageName)
	{
		$pagePath = '/resources/views/locations/locations/';
		
		if($pageFile) {   
			return fileUpload($pageFile, $pagePath, $pageName . '.html');
		} 
		return false;
	}	
	
	public function loadImageFile($imageFile, $imageName)
	{
		$imagePath = '/public/media/';
		
		if($imageFile) {
			return fileUpload($imageFile, $imagePath, $imageName);						
		}
		return false;
	}	
}

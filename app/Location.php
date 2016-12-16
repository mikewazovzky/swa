<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class Location extends Model
{
    /**
     * The path to store user pages.
     *
     * @const string
     */	
	const PATH_PAGES  = '/resources/views/locations/locations/';
	
    /**
     * The path to store user page cover images.
     *
     * @const string
     */		
	const PATH_IMAGES = '/public/media/';
	
	/**
     * The attributes that are mass assignable.
     *
     * @var array
     */
	protected $fillable = [
		'title',
		'description',
		'page',
		'image',		
		'published_at',
	];
	
    /**
     * The attributes that are treated as datetime Carbon\Carbon objects.
     *
     * @var array
     */	
	protected $dates = ['published_at'];
	
    /**
     * Converts attribute to Carbon\Carbon object.
     *
     * @param $date
     */			
	public function setPublishedAtAttribute($date) 
	{
		$this->attributes['published_at'] = Carbon::createFromFormat('Y-m-d', $date);		
	}
	
	/**
	 * Returns user for the Article
	 *
	 * @return Illuminate\Database\Eloquent\Relations\BelongsTo (??)
	 */
	public function user()
	{
		return $this->belongsTo('App\User');
	}
	
	/**
	 * Defines color for  the Location plate on a main page
	 *
	 * @return string 
	 */	
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
	 * Fills object properties with input data
	 * 
	 * @param array $input
	 * @return string 
	 */		
	public function fillData($input)
	{
		$name = generateFileName($input['title'], 10); 
		$pageName = $this->page ? : $name;	
		$imageName = $this->image ? : $name . '.jpg';
		
		$this->fill($input); 		
		
		// upload page file
		if(isset($input['page'])) {   
			if(fileUpload($input['page'], self::PATH_PAGES, $pageName . '.html')) { // ($input['page'], $pageName)) {			
				$this->page = $pageName;                                       
			}
		}
		
		// upload omage file
		if(isset($input['image'])) { 	
			if(fileUpload($input['image'], self::PATH_IMAGES, $imageName)) { //loadImageFile($input['image'], $imageName)) {				
				$this->image = $imageName;
			}
		}	
	}	
	
	/**
     * Read location [html/text] page as a string
     *
     * @return string
     */
	public function getContents()
	{
		if (!$this->page) {
			return '';
		} 		
		return file_get_contents(base_path() . self::PATH_PAGES . $this->page . '.html');
	}
	
	/**
     * Override Model::delete method, delete page and image files, call parent::delete
     *
     * @return string
     */
	public function delete() 
	{
		// delete location page file
		if($this->page) {			
			$filePage = base_path() . self::PATH_PAGES . $this->page . '.html';
			unlink($filePage);
		}
		
		// delete location image file
		if($this->image) {
			$fileImage = base_path() . self::PATH_IMAGES . $this->image;
			unlink($fileImage);
		}
		
		return parent::delete();		
	}					
}

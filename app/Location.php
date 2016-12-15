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
	 * Load location files: page and image
	 */
	public function loadFiles($request)
	{	
		$name = generateFileName($request['title'], 10); 
	
		if($request['page']) {    														// если пользователем выбрана страница
			if($this->loadPageFile($request['page'], $name)) {							// если удалось загрузить ее файл на сервер
				$this->page = $name;													// записать ссылку на файл (имя) в loaction->page 
			}
		}
		
		if($request['image']) { 														// если пользователем выбрано изображение
			$imageName = $name . '.' . $request['image']->getClientOriginalExtension(); // если удалось загрузить его файл на сервер
			if($this->loadImageFile($request['image'], $imageName)) {					// записать ссылку на файл (имя) в loaction->image
				$this->image = $imageName;
			}
		}	
	}	
	
	/**
	 * Create/update location files // changes/resets $this->page and $this->image
	 */
	public function loadPageFile($pageFile, $pageName)
	{
		$pagePath = '/resources/views/locations/locations/';
		
		if($pageFile) {   
			return fileUpload($pageFile, $pagePath, $pageName . '.blade.php');
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

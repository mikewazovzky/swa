<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;
	
    /**
     * The path to store avatar image files.
     *
     * @const string
     */	
	const PATH_IMAGES = '/public/media/avatar/';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'avatar'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
	
	public function articles()
	{
		return $this->hasMany('App\Article');
	}
	
	public function locations()
	{
		return $this->hasMany('App\Location');
	}	
	
	public function isAdmin() 
	{
		return ($this->id == 1);
	}
	
	/**
     * Override Model::delete() method, delete image file
     *
     * @return string
     */
	public function delete() 
	{
		if($this->avatar) {
			$fileImage = base_path() . self::PATH_IMAGES . $this->avatar;
			unlink($fileImage);
		}		
		// поменять местами. Удаление файла после успешного удаления объекта из базы
		return parent::delete();		
	}	

	/**
	 * Fills object properties with input data
	 * 
	 * @param array $input
	 * @return string 
	 */		
	public function fillData($input)
	{
		$name = generateFileName($input['email'], 10); 
		$imageName = $this->avatar ? : $name . '.jpg';
		
		$this->fill($input); 
		
		$this->password = bcrypt($input['password']);
		
		if(isset($input['avatar'])) { 	
			if(fileUpload($input['avatar'], self::PATH_IMAGES, $imageName)) {				
				$this->avatar = $imageName;
			}
		}	
	}	
}

<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $fillable = [
		'title',
		'body',
		'published_at',
	];
	
	protected $dates = ['published_at'];
	
	/**
	 * Scope
	 *
	 * Limits query to articles that have been published
	 */
 	public function scopePublished($query)
	{
		$query->where('published_at', '<=', Carbon::now());
	}
	
	/**
	 * Scope
	 *
	 * Limits query to articles that have not been published yet
	 */
 	public function scopeUnpublished($query)
	{
		$query->where('published_at', '>', Carbon::now());
	}	
	
	
 	public function setPublishedAtAttribute($date) 
	{
		$this->attributes['published_at'] = Carbon::createFromFormat('Y-m-d', $date);		
	}
	
	
	/**
	 * Returns user for the Article
	 *
	 *
	 */
	public function user()
	{
		return $this->belongsTo('App\User');
	}
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Location;
use App\LocationCollection;

class PagesController extends Controller
{    

	public function main()
	{
		
		$l = new LocationCollection;
		
		//return view('pages.main')->with('location', $l->data['sequoia']);
		return view('pages.main')->with('locations', $l->data);
		
	}
	
    public function about()
	{
		return view('pages.about');
	}
	
	public function contact()
	{
		return view('pages.contact');
	}	
	
	public function location($location)
	{
		//return view('pages.locations.' . $location);
		
		return view('pages.locations.' . $location, compact('location'));
		
	}
}

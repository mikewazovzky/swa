<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{    

	public function main()
	{
		return view('pages.main');
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

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Location;
use App\LocationCollection;
use App\Mailer;

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
	
	public function handleMessage(Request $request)
	{
		$mailer = new Mailer();
		//$arr = ['to' => 'mike.wazovzky@gmail.com', 'subj' => '3333 Alarm!!!', 'body' => 'Test 33333333333!!!'];
		$mailer->sendToAdmin($request->all());
		
		return redirect('main');
	}
	
	public function location($location)
	{
		return view('pages.locations.' . $location, compact('location'));
		//return $location;
		
	}
}

<?php

namespace App\Http\Controllers;

use App\Location;
use App\ImageCollection;
use App\Http\Requests\LocationRequest;

use Illuminate\Support\Facades\Auth;

class LocationsController extends Controller
{
	/**
     * Constructor, add authorization middleware to controller
     */    
	public function __construct()
	{
		$this->middleware('admin', ['except' => ['index', 'show']]);
	}	
	
	/**
     * Display a listing of the locations.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
		$locations = Location::all();
		
		return view('locations.index', ['locations' => $locations]);
    }

    /**
     * Show the form for creating a new location.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('locations.create');
    }

    /**
     * Store a newly created location in database.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(LocationRequest $request)
    {
		$location = new Location();
		
		$location->fillData($request->all()); 
		
		Auth::user()->locations()->save($location);
				
		return redirect('locations'); 
    }

    /**
     * Display the specified location.
     *
     * @param  \App\Location  $location
     * @return \Illuminate\Http\Response
     */
    public function show(Location $location)
    {
		// Temporary! обработка страничек администратора, формат: .blade.php, images: array	via ImageCollection
		if ($location->id < 9) {			
			$collection = new ImageCollection();
			$images = $collection->get($location->page);			
			
			return view('locations.locations.' . $location->page, compact('images'));	
		
		// обработка страничек пользователей, формат: .html, images: embedded  links
		} else {					
			$contents = $location->getContents();  // Security! Need to process content!?
			
			return view('locations.locations.default', compact('location', 'contents'));
		}
	}

    /**
     * Show the form for editing the specified location.
     *
     * @param  \App\Location $location
     * @return \Illuminate\Http\Response
     */
    public function edit(Location $location)
    {
		return view('locations.edit', compact('location'));
    }

    /**
     * Update the specified location in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Location $location
     * @return \Illuminate\Http\Response
     */
    public function update(LocationRequest $request, Location $location)
    {
		$location->fillData($request->all()); 		
		
		$location->save(); 

		return redirect('locations'); 		
    }

    /**
     * Remove the specified location from storage.
     *
     * @param  \App\Location $location
     * @return \Illuminate\Http\Response
     */
    public function destroy(Location $location)
    {        
		$location->delete();
		
		return redirect('locations');
    }		
}

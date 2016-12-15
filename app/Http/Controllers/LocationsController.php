<?php

namespace App\Http\Controllers;

use App\Location;
use App\ImageCollection;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LocationsController extends Controller
{
    
	public function __construct()
	{
		$this->middleware('admin', ['except' => ['index', 'show']]);
	}	
	
	/**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
		$locations = Location::all();
		
		return view('locations.index', ['locations' => $locations]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('locations.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
		$location = new Location();
		
		$location->fillData($request->all()); 
		
		Auth::user()->locations()->save($location);
				
		return redirect('locations'); 
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Location $location)
    {
		$collection = new ImageCollection();
		$images = $collection->get($location->page);
	
		return view('locations.locations.' . ($location->page ? : 'default'), compact('images'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Location $location)
    {
		return view('locations.edit', compact('location'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Location $location)
    {
		$location->fillData($request->all()); 		
		
		$location->save(); 

		return redirect('locations'); 		
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Location $location)
    {        
		// delete location page file
		if($location->page) {			
			$filePage = base_path() . '/resources/views/locations/locations/' . $location->page . '.blade.php';
			unlink($filePage);
		}
		
		// delete location image file
		if($location->image) {
			$fileImage = base_path() . '/public/media/' . $location->image;
			unlink($fileImage);
		}
		
		$location->delete();
		
		return redirect('locations');
    }
	
	public function uploadPage($file, $pageName)
	{
		$path = '/resources/views/locations/locations/';
		fileUpload($file, $path, $pageName);
		return $pageName;
	}		
	
	public function uploadImage($file, $imageName)
	{
		$path = '/public/media/';
		fileUpload($file, $path, $imageName);
		return $imageName;
	}			
}

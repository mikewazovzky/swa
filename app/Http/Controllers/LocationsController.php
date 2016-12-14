<?php

namespace App\Http\Controllers;

use App\Location;
use App\ImageCollection;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LocationsController extends Controller
{
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
		// generate file name for page and image		
		$name = generateFileName($request['title'], 10); 
		
		$pageFile = $request->file('page');
		$imageFile = $request->file('image');
		
		$pageName = $name . '.blade.php';
		$imageName = $name . '.' . $imageFile->getClientOriginalExtension();
		
		// upload page and image files
		$this->uploadPage($pageFile, $pageName);		
		$this->uploadImage($imageFile, $imageName);
		
		$location = new Location($request->all());
		$location->image = $imageName;
		$location->page = $name;  //  единообразие ?!!
		
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
		return view('locations.locations.' . $location->page, compact('images'));
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
		$input = $request->all();
		
		if(isset($request['page'])) {
			$pageFile = $request->file('page');
			$this->uploadPage($pageFile, $location->page . '.blade.php');
			unset($input['page']);
		}
		
		// костыль
		
		
		
		if(isset($request['image'])) {
			$imageFile = $request->file('image');
			$this->uploadImage($imageFile, $location->image);
			unset($input['image']);
		}
		
		$location->update($input); // ???может ли измениться page and image???

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

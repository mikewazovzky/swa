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
		$name = $this->generateFileName($request['title']); 
		
		// upload page and image files
		$pageName  = $this->uploadPage($request->file('page'), $name);		
		$imageName = $this->uploadImage($request->file('image'), $name);
		
		$location = new Location($request->all());
		$location->image = $imageName;
		$location->page = $name;
		
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
        return $location;
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
	
	public function uploadPage($file, $name)
	{
		$pageName = $name . '.blade.php';
		$path = '/resources/views/locations/locations/';
		$this->fileUpload($file, $pageName, $path);
		return $pageName;
	}		
	
	public function uploadImage($file, $name)
	{
		$imageName = $name . '.' . $file->getClientOriginalExtension();
		$path = '/public/media/';
		$this->fileUpload($file, $imageName, $path);
		return $imageName;
	}	
	
	public function fileUpload($file, $name, $path)
	{
		$filePath = base_path() . $path;
		$fileName = $filePath . $name;
		
		if (file_exists($fileName)) {
			unlink($fileName);
		}
	
		return $file->move($filePath, $name);
	}	
	
	public function generateFileName($base) 
	{
		$maxLength = 10;
		$chars = str_split(bcrypt($base));
		$str = '';
		
		foreach($chars as $ch) {
			if (ctype_alnum ($ch)) {
				$str .= $ch;				
			}
			
			if (strlen($str) >= $maxLength) {
				break;
			}
		}		
		return $str;		
	}
	
}

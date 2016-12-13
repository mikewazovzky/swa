<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UsersController extends Controller
{
	public function __construct()
	{
		$this->middleware('admin', ['except' => ['edit', 'update']]);
	}
	
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();
		
		return view('users.index', ['users' => $users]);
    }

	/**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        return view('users.show', compact('user'));
    }
	
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('users.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input = $request->all();
		
		//upload User Image
		if(isset($input['avatar'])) {
			$input['avatar'] = $this->uploadUserPhoto($request->file('avatar'), $input['email']);
		}
		
		$input['password'] = bcrypt($input['password']);
		
		$user = new User($input);
		
		$user->save();
				
		return redirect('users'); 
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        return view('users.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
	{
		$input = $request->all();
		
		//upload User Image
		if(isset($input['avatar'])) {
			$input['avatar'] = $this->uploadUserPhoto($request->file('avatar'), $input['email']);
		}
		
		$input['password'] = bcrypt($input['password']);
		$user->update($input);
		
		return redirect('users');
	}

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        $user->delete();
		
		return redirect('users');
    }
	
	/**
     * Upload User Image
     *
     * @param Object $file - Laravel object with uploaded file data
	 * @param string $fileName - name for uploaded file
     * @return uploaded file name with extention if success, null if errors
     */		
	private function uploadUserPhoto($file, $nameBase) 
	{
		$nameLength = 10;
		$imageName = substr(bcrypt($nameBase), 0, $nameLength) . '.' . $file->getClientOriginalExtension();
		$imagePath = base_path() . '/public/media/avatar/';
		//$imageName = $userId . '.' . $file->getClientOriginalExtension();
		$fileName = $imagePath . $imageName;		
	
		if (file_exists($fileName)) {
			unlink($fileName);
		}
		if ($file->move($imagePath, $imageName)) {
			return $imageName;
		} else {
			return null;
		}		
	}
}

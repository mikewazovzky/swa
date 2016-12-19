<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Http\Requests\UserRequest;

class UsersController extends Controller
{
	/**
     * Constructor, add authorization middleware to controller
     */  
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
     * @param  \User $user
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
    public function store(UserRequest $request)
    {
		// костыль - убрать в UserRequest!!!
		$this->validate($request, [
 			'email' => 'required|email|unique:users,email',
		]);		
		
		$user = new User();
		
		$user->fillData($request->all()); 
		
		$user->save();
				
		return redirect('users'); 
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\User $user
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
     * @param  \App\User $user
     * @return \Illuminate\Http\Response
     */
    public function update(UserRequest $request, User $user)
	{
		$user->fillData($request->all()); 		
		
		$user->save(); 

		return redirect('users');
	}

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\User $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        $user->delete();
		
		return redirect('users');
    }
}

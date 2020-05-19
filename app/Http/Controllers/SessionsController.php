<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
 
use Illuminate\Support\Facades\Auth;

//https://vegibit.com/how-to-create-user-registration-in-laravel/

class SessionsController extends Controller
{
	public function __construct( )
	{
		$this->middleware('guest',['except' => 'destroy']);
	}

    public function create()
    {
    	return view('sessions.create');
    }

    public function store(Request $request)
    {

	  if(!auth()->attempt(request(['email','password'])) )
	  {
	  	return back()->withErrors([
	  	'message'  => 'Please check your credentials and try again'	
	  	]);
	  } 

   	  return redirect()->home();
    }

 	public function destroy() 
    {
    	auth()->logout();

    	return redirect('/');
    }
}

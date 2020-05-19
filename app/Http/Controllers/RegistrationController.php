<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User; 
  
use App\Mail\WelcomeOnRegister;   

class RegistrationController extends Controller
{
    
    public function create()
    {
    	return view('registration.create');
    }

    public function store()
    {
    	$this->validate(request(),[

    	'name' => 'required',	

    	'email' => 'required|email',	

    	'password' => 'required|confirmed'

    	]);

    	$user = User::create(request(['name','email','password']));

    	auth()->login($user);

        // \Mail::to($user)->send(new WelcomeOnRegister($user));

        session()->flash('message','Thank you so much to signing up!');

    	return redirect()->home();	
    }
}

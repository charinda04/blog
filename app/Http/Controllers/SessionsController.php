<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionsController extends Controller
{
    //

	public function __construct(){

		$this->middleware('guest', ['except' => 'destroy']);	
	}


    public function create(){
        return view('sessions.create');
    }



    public function store(){
        
        //attempt to authenticate and sign in the user 
        if(!auth()->attempt(request(['email']))){

        	return back()->withErrors([
        		'message' => 'please check your credentials and try again'
        	]);
        }




        //if not redirect back 




        //if so. sign them in 




        //redirect to the home page 
        return redirect()->home();
    }



    public function destroy(){
        auth()->logout();

        return redirect()->home();
    }
}

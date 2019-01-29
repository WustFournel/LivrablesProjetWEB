<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class connexionController extends Controller
{
   

   function formulaire(){
   	
   	if(!auth()->check()){
  	return view('connexion');
  	
  }

   	return view('homeConnected');
   }


	function connexion(){

		request()->validate([
			'email'=> ['required','email'],
			'password' => ['required'],

		]);

		$result = auth()->attempt([
			'mail'=> request('email'),
			'password' => request('password'),

		]);

		if($result) {
			return redirect('/');
		}

		return back()->withInput()->withErrors([
			'password'=> 'Vos identifiants sont incorrects',
		]);
	}
   	
   

}


// verifier si connecté


 // if(! auth()->check()){
 //  	return redirect('/home')->withErrors([]);
 //  }
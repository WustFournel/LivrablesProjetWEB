<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Providers\Users;

class inscriptionController extends Controller
{
	    function create(){
			return view('inscription');
	    }



       function store(){
		request()->validate([
		'email' => ['required', 'email'],
		'password' => [ 'required', 
						'min:8', 
						'regex:/[a-z]/',      // must contain at least one lowercase letter
			            'regex:/[A-Z]/',      // must contain at least one uppercase letter
			            'regex:/[0-9]/',      // must contain at least one digit
			            'regex:/[@$!%*#?&]/',
			            'confirmed',
			        	],
		'password_confirmation' => ['required'],
		]);


	   $user = \App\Users::create([
	   		'nom'=>request('nom'),
			'prenom'=>request('prenom'),
			'centre'=>request('centre'),
			'rank'=>request('rank'),
			'mail'=>request('email'),
			'password'=>bcrypt(request('password')),
		]); 

return view('connexion');

    }
}
 
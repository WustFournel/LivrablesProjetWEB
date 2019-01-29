<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class ideesController extends Controller
{
    function like(Request $request){
 

										$id=Auth::user()->id;
										$id_idee = $request->ididee;
										$idlike= count( DB::connection('mysql2')->select("SELECT `id_users` FROM likeidees WHERE `id_users`='$id' AND `id_idees`='$id_idee' "));
												if (empty($verifylike)) 
												{
											
													 DB::connection('mysql2')->insert('insert into likeidees (id_users,id_idees) values(?,?)',[$id,$id_idee]);
													
													return redirect('/evenements')->with('message','vous avez aimé une idée');
												}else{
															

														 	return redirect('/evenements')->with('message','vous avez deja aimé cet idée');

													 }

											

			}


}

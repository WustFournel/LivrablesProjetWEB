<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class boutiqueController extends Controller
{
	function trier(Request $request)
	{
		$var = $request->trier;

		if ($var =='asc' && auth()->check()) 
		{ 
			$boutique= DB::connection('mysql2')->select("call prixasc();");
			return view('boutique', [
				'boutique' => $boutique,]);
		}else{
			$boutique= DB::connection('mysql2')->select("call prixasc();");
			return view('boutiquesansco', [
				'boutique' => $boutique,]);
		}


		if ($var =='desc' && auth()->check()) 
		{
			$boutique= DB::connection('mysql2')->select("call prixdesc();");
			return view('boutique', [
				'boutique' => $boutique,]);
		}else{
			$boutique= DB::connection('mysql2')->select("call prixasc();");
			return view('boutiquesansco', [
				'boutique' => $boutique,]);
		}



		if ($var =='nameasc' && auth()->check())
		{
			$boutique= DB::connection('mysql2')->select("call nameasc();");
			return view('boutique', [
				'boutique' => $boutique,]);
		}else{
			$boutique= DB::connection('mysql2')->select("call prixasc();");
			return view('boutiquesansco', [
				'boutique' => $boutique,]);
		}




		if ($var =='mventes' && auth()->check()) 
		{
			$boutique= DB::connection('mysql2')->select("call mventes();");
			return view('boutique', [
				'boutique' => $boutique,]);
		}else{
			$boutique= DB::connection('mysql2')->select("call prixasc();");
			return view('boutiquesansco', [
				'boutique' => $boutique,]);
		}


		if ($var =='normal' && auth()->check()) 
		{
			return redirect('/shop');

		}else {

			return redirect('/shopnoc');
		}
	}

	function create()
	{
		$boutique= DB::connection('mysql2')->select("call boutique();");
		return view('boutique', [
			'boutique' => $boutique,]);
	}

function createNoCon()
	{
		$boutique= DB::connection('mysql2')->select("call boutique();");
		return view('boutiquesansco', [
			'boutique' => $boutique,]);
	}



	function addcart(Request $request)
	{
		 if(! auth()->check()){
     return redirect('/connexion')->withErrors([
      'email' => "Vous devez etre connecté pour ajouter des articles au panier"

    ]);
  }
  
		$id=Auth::user()->id;
		$verifycart= count (DB::connection('mysql2')->select("SELECT `id_users` FROM panier WHERE `id_users`='$id' "));
		$idproduit= $request->idproduit;
		
		if (!empty($verifycart)) 
		{
			$idcart= DB::connection('mysql2')->select("SELECT `id` FROM panier WHERE `id_users`='$id' ");
			$cart = $idcart[0]->id;
			 DB::connection('mysql2')->insert('insert into contenir (id,id_panier) values(?,?)',[$idproduit,$cart]);
			
			return redirect('/shop')->with('message','Article ajouté au panier');
		}else{
					DB::connection('mysql2')->insert('insert into panier (id_users) values(?)',[$id]);
				 	$idcart= DB::connection('mysql2')->select("SELECT `id` FROM panier WHERE `id_users`='$id' ");
				 	$cart = $idcart[0]->id;
				 	DB::connection('mysql2')->insert('insert into contenir (id,id_panier) values(?,?)',[$idproduit,$idcart]);

				 	return redirect('/shop')->with('message','Article ajouté au panier');

			}
		   
	}
	

}

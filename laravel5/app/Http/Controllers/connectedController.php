<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class connectedController extends Controller
{
    function boutique(){

      if(! auth()->check()){
     return redirect('/shopnoc');
  }
 return redirect('/shop');
    }

    function evenements(){
  if(! auth()->check()){
    return redirect('/connexion')->withErrors([
      'email' => "Vous devez etre connecté pour voir cette page"

    ]);
  }

 return view('evenements');

    }




 
    function pastEvents()
{
  if(! auth()->check())
  {
    return redirect('/connexion')->withErrors([
      'email' => "Vous devez etre connecté pour voir cette page" ]);
  }
  $evenements= DB::connection('mysql2')->select("call passe();");
  return view('pastEvents', [
    'evenements' => $evenements,]);
}


function futureEvents()
{
  if(! auth()->check())
  {
    return redirect('/connexion')->withErrors([
      'email' => "Vous devez etre connecté pour voir cette page" ]);
  }
  $evenements= DB::connection('mysql2')->select("call futur();");
  return view('futureEvents', [
    'evenements' => $evenements,]);
}

function encoursEvents()
{
  if(! auth()->check())
  {
    return redirect('/connexion')->withErrors([
      'email' => "Vous devez etre connecté pour voir cette page" ]);
  }
  $evenements= DB::connection('mysql2')->select("call encours();");
  return view('encoursEvents', [
    'evenements' => $evenements,]);
}

     function boiteidees()
  {
      if(! auth()->check())
      {
        return redirect('/connexion')->withErrors([
        'email' => "Vous devez etre connecté pour voir cette page" ]);
      }
       $idees= DB::connection('mysql2')->select("call idees();");
      return view('boiteidees', [
        'idees' => $idees,]);
  }


       function formulaireIdees()
  {
      if(! auth()->check())
      {
        return redirect('/connexion')->withErrors([
        'email' => "Vous devez etre connecté pour voir cette page" ]);
      }
        return view('formulaireIdees');
  }

  
  
  function home()
  {
    if(auth()->check())
    {
    return view('homeConnected');
    }
    return view('home');
  }


    
    function deconnect()
    {
          auth()->logout();
          return redirect('/');
    }


}

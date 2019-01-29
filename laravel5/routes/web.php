<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/', 'connectedController@home');
 
  
Route::get('/deconnexion', 'connectedController@deconnect');
Route::get('/evenements', 'connectedController@evenements');
Route::get('/pastEvents', 'connectedController@pastEvents');
Route::get('/pastEvents', 'connectedController@pastEvents');
Route::get('/futureEvents', 'connectedController@futureEvents');
Route::get('/encoursEvents', 'connectedController@encoursEvents');
Route::get('/boiteidees', 'connectedController@boiteidees');
Route::get('/formulaireIdees', 'connectedController@formulaireIdees');


Route::get('/connexion', 'connexionController@formulaire');
Route::post('/connexion', 'connexionController@connexion');

Route::get('/inscription', 'inscriptionController@create');
Route::post('/inscription', 'inscriptionController@store');

Route::get('/boutique', 'connectedController@boutique');

Route::get('/shop','boutiqueController@create');
Route::get('/shopnoc','boutiqueController@createNoCon');
Route::post('/shop','boutiqueController@trier');


Route::post('/addcart','boutiqueController@addcart');

Route::post('/getimage','InsertionImageController@getImage');



Route::get('/idees', 'ideesController@like');

Route::get('/commentaire', 'connectedController@commentaire');
 
Route::get('/cgv', function(){

 	return view('cgv');
 });

Route::get('/rgpd', function(){

 	return view('rgpd');
 });

Route::get('/mentions', function(){

 	return view('mentions');


 });






  
 


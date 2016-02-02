<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function() {

	return view('accueil_bootstrap');

});

Route::get('home', 'HomeController@index');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);

Route::get('/ajout', function() {

	return view('ajout_perle_bootstrap');

});

Route::get('/accueil', function() {

	return view('accueil_bootstrap');

});

use App\Perle;
use Illuminate\Http\Request;

Route::any('valider_ajout_perle', function(Request $request) {
	

$perle = new Perle();
$perle->nomperle = $request->input('nomperle');
$perle->description = $request->input('description');
//$perle->anecdote = $request->input('anecdote');
$perle->latitude = $request->input('latitude');
$perle->longitude = $request->input('longitude');

$perle->save();

	return view('accueil_bootstrap');
});
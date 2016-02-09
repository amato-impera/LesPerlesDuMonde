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
use App\Perle;
use App\Categorie;
use App\Pays;
use App\Continent;
use Illuminate\Http\Request;

Route::get('/', function() {

	$perles = Perle::get();
	return view('accueil_bootstrap');

});

Route::get('home', 'HomeController@index');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);



Route::get('/ajout', function() {

	$categories = Categorie::get();
	return view('ajout_perle_bootstrap',['categories' => $categories]);

});

Route::get('/accueil', function() {
$perles = Perle::get();
	return view('accueil_bootstrap');

});



Route::any('valider_ajout_perle', function(Request $request) {
	

$perle = new Perle();
$perle->nomperle = $request->input('nomperle');
$perle->idcategorie = $request->input('idcategorie');
$perle->latitude = $request->input('latitude');
$perle->longitude = $request->input('longitude');


$perle->save();

	return view('accueil_bootstrap');
});


Route::get('/marqueurs', function() {

	$perles = Perle::get();
	
	echo json_encode($perles);


});

Route::get('/perle{idperle}', function($idperle) {

	$perle = Perle::find($idperle);

	return view('perle_bootstrap', ['perle' =>$perle]);

});

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

Route::any('valider_ajout', function() {

	return view('formulaire_ajout_perle_bootstrap');

});
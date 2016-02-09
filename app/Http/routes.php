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
use App\User;
use App\Perle;
use App\Categorie;
use App\Pays;
use App\Continent;
use Illuminate\Http\Request;

// ---------------------------------- USERS ------------------------------------------
// Vérification des données de connexion
Route::post('connexion', function(Request $request) {
// attempt : methode de la classe Auth pour vérifier les identifiants
    if (Auth::attempt(['pseudo' => $request->pseudo, 'password' => $request->password])) {
        return view('accueil_bootstrap', ['message' => 'Vous etes maitenant connecte' . Auth::user()->pseudo]);
    } else {
        return view('accueil_bootstrap', ['message' => 'Echec de la connexion']);
    }
});
// deconnexion  
Route::any('deconnexion', function() {
    Auth::logout(); // methode de la classe Auth pour se deconnecter
    return view('index_site_bootstrap', ['message' => 'Vous avez ete deconnecte']);
});
// affichage du formulaire d'ajout d'une nouvelle inscription
Route::any('inscription', function() {
    return view('inscription_bootstrap');
});

// ajout d'un nouvel utilisateur dans la bd
Route::post('valid_inscription', function(Request $request) {
    $user = new User;
    $user->pseudo = $request->pseudo;
    $user->nom = $request->nom;
    $user->prenom = $request->prenom;
    $user->datenaissance = $request->datenaissance;
    $user->email = $request->email;
    $user->ville = $request->ville;
    $user->pays = $request->pays;
    $user->password = Hash::make($request->password); // cryptage mot de passe
    $user->save();
    return view('index_site_bootstrap', ['message' => 'votre compte est bien cree, vous pouvez vous connecter']);
});

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

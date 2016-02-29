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
use App\Photo;
use App\Anecdote;
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


// Affiche la page d'accueil
Route::get('/', function() {

	$perles = Perle::get();
	return view('accueil_bootstrap');

});

Route::get('home', 'HomeController@index');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);


// Affiche la page d'ajout d'une perle
Route::get('/ajout', function() {

	$categories = Categorie::get();
	return view('ajout_perle_bootstrap',['categories' => $categories]);

});


// Affiche la page d'accueil
Route::get('/accueil', function() {
$perles = Perle::get();
	return view('accueil_bootstrap');
 
});


// Valide l'ajout d'une perle et enregistre les donnees dans la bdd
Route::any('valider_ajout_perle', function(Request $request) {
	

$perle = new Perle();
$perle->nomperle = $request->input('nomperle');
$perle->idcategorie = $request->input('idcategorie');
$perle->latitude = $request->input('latitude');
$perle->longitude = $request->input('longitude');
$perle->pays = $request->input('pays');
$perle->continent = $request->input('continent');


$perle->save();

	return view('accueil_bootstrap');
});


// Utilisateur de PHP en API Rest, affiche au format json la liste de toutes les perles pour ensuite les afficher sur la map 
Route::get('/marqueurs', function() {

	$perles = Perle::get();
	
	echo json_encode($perles);


});

// Affiche la page d'une perle 
Route::get('/perle{idperle}', function($idperle) {

	$perle = Perle::find($idperle); // recupere la perle demandée
    $anecdotes= DB::table('anecdotes') // recupere les anecdotes sur la perle et les classe aléatoirement
                    ->select(['*'])
                    ->where('idperle', $idperle)
                    ->orderBy('dateanecdote', 'desc') 
                    ->get();      
    $photos= DB::table('photos') // recupere les anecdotes sur la perle et les classe aléatoirement
                    ->select(['*'])
                    ->where('idperle', $idperle)
                    ->orderBy(DB::raw('RAND()'))
                    ->get();               
	return view('perle_bootstrap', ['perle' =>$perle, 'anecdotes' => $anecdotes, 'photos' => $photos]);

});



/* ------------ Ajout d'une photo ------------- */
Route::any('valider_ajout_photo', function(Request $request) {
    $date = date("Y-m-d");
    $heure = date("H:i:s");
    
    $photo=new Photo();
    $photo->nomphoto= $request->photo;
    $photo->idperle= $request->input('idperle');
    $photo->datephoto= $date;
    $photo->heurephoto= $heure;
    

   //On récupère le fichier photo dans un objet file

    //$request->input('photo');
    $file = Input::file('photo');
    
    //chemin du fichier
    //$path = Input::file('photo')->getRealPath();
    //echo $path;


    $destinationPath='Photos';
    $name = Input::file('photo')->getClientOriginalName();
    Input::file('photo')->move($destinationPath, $name);

    $photo->nomphoto=$name;
    if ($photo->save()) {
        return view('accueil_bootstrap');
    }

});

/* ------------ Ajout d'une anecdote ------------- */
Route::any('valider_ajout_anecdote', function(Request $request) {
    $date = date("Y-m-d");
    $heure = date("H:i:s");
    
    $anecdote=new Anecdote();
    $anecdote->anecdote= $request->anecdote;
    $anecdote->idperle= $request->input('idperle');
    $anecdote->dateanecdote= $date;
    $anecdote->heureanecdote= $heure;

    if ($anecdote->save()) {
        return view('accueil_bootstrap');
    }

});


// Rècupere aléatoirement des photos dans la base de données afin de la afficher sur la page d'accueil (bandeau à droite)
Route::get('/photosaleatoires', function() {
    $photos = Photo::orderBy(DB::raw('RAND()'))->get();
   /* $photos= DB::table('photos')
    ->select(['nomphoto'])
    ->orderBy('RAND()');  */  
    echo json_encode($photos);
});
 



 // Affiche la page de consultation
Route::get('/consulter', function() {
$perles = Perle::get();
    return view('consulter_perle');
 
});

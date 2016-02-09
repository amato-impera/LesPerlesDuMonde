<?php namespace App\Http\Controllers; 

namespace App\Perle;


class PerleController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Welcome Controller
	|--------------------------------------------------------------------------
	|
	| This controller renders the "marketing page" for the application and
	| is configured to only allow guests. Like most of the other sample
	| controllers, you are free to modify or remove it as you desire.
	|
	*/

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		$this->middleware('guest');
	}

	/**
	 * Show the application welcome screen to the user.
	 *
	 * @return Response
	 */

 	public function index($idperle) {
        $perle = new Perle;
        $perle = $Perle->where('idperle', $idperle)->get();
        return View::make('perle.perle', array('perle' => $perle));
    }
}
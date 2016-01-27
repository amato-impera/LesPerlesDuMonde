@extends('index_site_bootstrap')

@section('section')

	<div id="div"class="row">
				
		<div class="text-center" id="carte" style="width:80%; height:500px"></div>
				
	</div>


	<form action="valider_ajout">
		<input type="submit" class="btn btn center-block" id="ajout_marqueur" value="Ajouter cette perle">

	</form>
@stop
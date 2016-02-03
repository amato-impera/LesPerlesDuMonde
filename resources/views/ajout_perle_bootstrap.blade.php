@extends('index_site_bootstrap')

@section('section')

	<div id="ajout"class="row">
				
		<div class="col-xs-7 col-sm-7 col-md-7 col-lg-7 col-lg-offset-1 " id="carte" style="height:550px"></div>



		<div class="col-xs-3 col-sm-3 col-md-3col-lg-3">

		<h3>Ajouter votre perle</h3>

		
		<form name="ajout_perle" action="valider_ajout_perle" >
			


		<div class="form-group">
			<label>Nom de la perle : </label>
			<div class="col‐md‐4"><input type="text" name="nomperle" class="form‐control"></div>
		</div>

		<div class="form-group">
			<label>Pays : </label>
			<select name="idpays">
				@foreach ($pays as $pays2)
				<option value="{{$pays2->idpays}}">{{$pays2->nompays}}</option>
				@endforeach
			</select>
		</div>

		<div class="form-group">
			<label>Votre pays ne fait pas encore partie de nos destinations ? </label>
			<div class="col‐md‐4"><input type="text" placeholder="Nouveau Pays" name="" class="form‐control"></div>
		</div>

		<div class="form-group">
			<label>Catégorie : </label>
			<select name="idcategorie">
				@foreach ($categories as $categorie)
				<option value="{{$categorie->idcategorie}}">{{$categorie->nomcategorie}}</option>
				@endforeach
			</select>
		</div>

		<div class="form-group">
			<label>Description</label>
			<div class="col‐md‐4"><textarea name="description" rows="5" cols="50" placeholder="Description du site touristique"></textarea></div>
		</div>

	
		
		<div class="col‐md‐4"><input type="text" id="latitude" name="latitude" class="form‐control"></div>
		<div class="col‐md‐4"><input type="text" id="longitude" name="longitude" class="form‐control"></div>
		

		<input type="submit" class="btn btn center-block" id="ajout_perle" value="Ajouter cette perle">



		</form>	

		</div>
	</div>


	


	<script type="text/javascript" src="Javascript/googlemap.js"></script>
@stop
@extends('index_site_bootstrap')

@section('section')

	<div id="ajout"class="row">
				
		<div class="col-xs-7 col-sm-7 col-md-7 col-lg-7 col-lg-offset-1 " id="carte" style="height:550px"></div>



		<div class="col-xs-3 col-sm-3 col-md-3col-lg-3">

		<h3>Ajouter votre perle</h3>

		
		<form name="ajout_perle" action="valider_ajout_perle" >
			


		<div class="form-group">
			<label>Nom de la perle : </label>
			<div class="col‐md‐4"><input type="text" name="nomperle" class="form‐control" required></div>
		</div>

		<div class="form-group">
			<label>Pays : </label>
			<div class="col‐md‐4"><input type="text" class="form‐control" required></div>
		</div>

		<div class="form-group">
			<label>Catégorie : </label>
			<select>
				<option>blabla</option>
				<option>blabla 2</option>
				<option>blabla 3</option>
			</select>
		</div>

		<div class="form-group">
			<label>Description</label>
			<div class="col‐md‐4"><textarea name="description" rows="5" cols="50" placeholder="Description du site touristique"></textarea></div>
		</div>

		

		<div class="form-group">
			<label>Anecdote sur la perle : </label>
			<div class="col‐md‐4"><textarea name="anecdote" rows="3" cols="50" placeholder="Une anecdote sur le site touristique"></textarea></div>
		</div>

		<div class="form-group">
			<label>Ajouter une photo de votre voyage : </label>
			<input type="file">
		</div>

		
		<div class="col‐md‐4"><input type="text" id="latitude" name="latitude" class="form‐control"></div>
		<div class="col‐md‐4"><input type="text" id="longitude" name="longitude" class="form‐control"></div>
		

		<input type="submit" class="btn btn center-block" id="ajout_perle" value="Ajouter cette perle">



		</form>	

		</div>
	</div>


	


	<script type="text/javascript" src="Javascript/googlemap.js"></script>
@stop
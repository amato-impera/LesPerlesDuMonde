@extends('index_site_bootstrap')


@section('section')

	<div class="row">

		<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 col-md-offset-4">
		
			<h3>Ajout d'une nouvelle perle</h3>

	<form class="centred">

		<div class="form-group">
			<label>Nom de la perle : </label>
			<div class="col‐md‐4"><input type="text" class="form‐control" required></div>
		</div>

		<div class="form-group">
			<label>Pays : </label>
			<div class="col‐md‐4"><input type="text" class="form‐control" required></div>
		</div>

		<div class="form-group">
			<label>Description</label>
			<div class="col‐md‐4"><textarea name="textarea" rows="5" cols="50">Description du site touristique</textarea></div>
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
			<label>Ajouter une photo de votre voyage : </label>
			<input type="file">
		</div>

		<input type="submit" class="btn btn center-block" id="ajout_perle" value="Ajouter cette perle">

	</form>

	</div>

	</div>
@stop 
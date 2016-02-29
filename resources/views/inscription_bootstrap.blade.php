@extends('index_site_bootstrap')
@section('section')  

	<header>
		<h3>Nouvelle inscription</h3>
	</header>
		<form action="valid_inscription" method="post" class="form-horizontal" role="form" >
			
				<div class="form-group">
			    	<label class="control-label col-sm-2" for="pseudo">Pseudo :</label>
			    	<div class="col-sm-10">
			     		<input type="text" class="form-control" id="pseudo" placeholder="pseudo" name="pseudo">
			    	</div>
			  	</div>

			  	<div class="form-group">
			    	<label class="control-label col-sm-2" for="nom">Nom :</label>
			    	<div class="col-sm-10">
			     		<input type="text" class="form-control" id="nom" placeholder="Nom" name="nom">
			    	</div>
			  	</div>

			  	<div class="form-group">
			    	<label class="control-label col-sm-2" for="prenom">Prénom :</label>
			    	<div class="col-sm-10">
			     		<input type="text" class="form-control" id="prenom" placeholder="Prénom" name="prenom">
			    	</div>
			  	</div>

			  	<div class="form-group">
			    	<label class="control-label col-sm-2" for="datenaissance">Date de naissance :</label>
			    	<div class="col-sm-10">
			     		<input type="date" class="form-control" id="datenaissance" placeholder="Date de naissance" name="datenaissance">
			    	</div>
			  	</div>

			  	<div class="form-group">
			    	<label class="control-label col-sm-2" for="email">Email:</label>
			    	<div class="col-sm-10">
			      		<input type="email" class="form-control" id="email" placeholder="Email">
			    	</div>
			  	</div>

			  	<div class="form-group">
			    	<label class="control-label col-sm-2" for="ville">Ville :</label>
			    	<div class="col-sm-10">
			     		<input type="text" class="form-control" id="ville" placeholder="Ville" name="ville">
			    	</div>
			  	</div>

			  	<div class="form-group">
			    	<label class="control-label col-sm-2" for="pays">Pays :</label>
			    	<div class="col-sm-10">
			     		<input type="text" class="form-control" id="pays" placeholder="Pays" name="pays">
			    	</div>
			  	</div>

			  	<div class="form-group">
			    	<label class="control-label col-sm-2" for="motdepasse">Mot de passe:</label>
			    	<div class="col-sm-10"> 
			      		<input type="password" class="form-control" id="motdepasse" placeholder="Mot de passe" name="motdepasse">
			    	</div>
			  	</div>

			  	<div class="form-group"> 
			    	<div class="col-sm-offset-2 col-sm-10">
				    	<input type="hidden" name="_token" value="{{ csrf_token() }}">
				    	<a href="site" id="annuler" class="btn">Annuler</a>
			      		<input type="submit" class="btn btn-default" id="ajouter" value="Valider" />
			    	</div>
			  	</div>

		</form>
@stop
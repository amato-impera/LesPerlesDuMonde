@extends('index_site_bootstrap')
@section('section')  
<div class="row">
	<header>
		<h3>Nouvelle inscription</h3>
	</header>
	   
	<div class="col‐md‐12">
		<form id="Form" action="valid_inscription" method="post" class="form‐horizontal">
			<div class="form‐group">
			    <label for="pseudo" class="control‐label col‐md‐2" >Pseudo </label>
			    <div class="col‐md‐4">
			    	<input type="text" name="pseudo" id="pseudo" class="form‐control" placeholder="pseudo" required />
			    </div>
			</div>
			<div class="form‐group">
			    <label for="nom" class="control‐label col‐md‐2" >Nom </label>
			    <div class="col‐md‐4">
			    	<input type="text" name="nom" id="nom" class="form‐control" placeholder="nom" required />
			    </div>
			</div>
			<div class="form‐group">
			    <label for="prenom" class="control‐label col‐md‐2" >Prénom </label>
			    <div class="col‐md‐4">
			    	<input type="text" name="prenom" id="prenom" class="form‐control" placeholder="prénom" required />
			    </div>
			</div>
			<div class="form‐group">
			    <label for="datenaissance" class="control‐label col‐md‐2" >Date de naissance </label>
			    <div class="col‐md‐4">
			    	<input type="date" name="datenaissance" id="datenaissance" class="form‐control" placeholder="Date de naissance" required />
			    </div>
			</div>
			<div class="form‐group">
			    <label for="email" class="control‐label col‐md‐2" >Email </label>
			    <div class="col‐md‐4">
			    	<input type="email" name="email" id="email" class="form‐control" placeholder="email" required />
			    </div>
			</div>
			<div class="form‐group">
			    <label for="ville" class="control‐label col‐md‐2" >Ville </label>
			    <div class="col‐md‐4">
			    	<input type="text" name="ville" id="ville" class="form‐control" placeholder="ville" required />
			    </div>
			</div>
			<div class="form‐group">
			    <label for="pays" class="control‐label col‐md‐2" >Pays </label>
			    <div class="col‐md‐4">
			    	<input type="text" name="pays" id="pays" class="form‐control" placeholder="pays" required />
			    </div>
			</div>
			<div class="form‐group">
		    	<label for="motdepasse" class="control‐label col‐md‐2">Mot de passe </label>
		    	<div class="col‐md‐4">
		    		<input type="password" name="motdepasse" id="motdepasse" class="form‐control" placeholder="motdepasse" required/>
		   		</div>
			</div>
			<div class="form‐group">
		    	<label class= "col‐md‐2"></label>
		    	<div class="col‐md‐4">
		    		<input type="hidden" name="_token" value="{{ csrf_token() }}">
		    		<a href="site" id="annuler" class="btn">Annuler</a>
		    		<input type="submit" class="btn btn‐primary" id="ajouter" value="Valider"/>
		    	</div>
			</div>
		</form>
	</div>
</div>
@stop
@extends('index_site_bootstrap')

@section('section')

	
	<div id="div"class="row">
				<div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
					<div id="formulaire_recherche">
						<h2>Rechercher une perle</h2>
						<form>
							<label>Continent :</label><br/>
							<input type="checkbox" name="amerique_nord" id="amerique_nord"/> Amérique du Nord
							<input type="checkbox" name="amerique_nord" id="amerique_nord"/> Asie<br/>
							<input type="checkbox" name="amerique_nord" id="amerique_nord"/> Amérique du Sud
							<input type="checkbox" name="amerique_nord" id="amerique_nord"/> Europe<br/>
							<input type="checkbox" name="amerique_nord" id="amerique_nord"/> Océanie<Br/><br/>

							<label>Pays : </label>
								<select>
									<option>France</option>
									<option>France</option>
									<option>France</option>
									<option>France</option>
									<option>France</option>
								</select><br/><br/>

							<label>Catégories :</label><br/>
							<input type="checkbox" name="amerique_nord" id="amerique_nord"/> Catégorie 1
							<input type="checkbox" name="amerique_nord" id="amerique_nord"/> Catégorie 2<br/>
							<input type="checkbox" name="amerique_nord" id="amerique_nord"/> Catégorie 3
							<input type="checkbox" name="amerique_nord" id="amerique_nord"/> Catégorie 4<br/>
							<input type="checkbox" name="amerique_nord" id="amerique_nord"/> Catégorie 5<Br/><br/>

							<input type="submit" class="btn btn center-block"id="Rechercher" value="Rechercher">
						</form>
						
					</div>
				</div>
				<div class="col-xs-8 col-sm-8 col-md-8 col-lg-6 col-md-offset-1">


					<h1 id="titre_consultation">&nbsp;{{$perle->nomperle}}</h1>
					<div class="col-lg-6" id="carte" style="height:250px"></div>
					<div id="images_perles">
						<img class="col-lg-3" style="height: 125px;" src="Photos/paysage2.JPG">
						<img class="col-lg-3" style="height: 125px;" src="Photos/paysage3.JPG">
						<img class="col-lg-3" style="height: 125px;" src="Photos/paysage1.jpg">
						<img class="col-lg-3" style="height: 125px;" src="Photos/paysage4.jpg">
					</div>


				@if (Auth::user())
					<div class="col-lg-12"id="formulaires">

					<form class="col-lg-6" smethod="post" action="valider_ajout_anecdote">
						<textarea type="text" id="anecdote" name="anecdote" rows="3" cols="40" placeholder="Ecrivez votre anecdote.."></textarea>
						<input type="hidden"name="idperle" value="{{$perle->id}}"/>
						<input type="hidden" name="_token" value="{{ csrf_token() }}"><br/><br/>
						<input type="submit" class="btn btn center-block" id="ajout1" value="PARTAGEZ UNE ANECDOTE"/>
					</form>
					<form class="col-lg-6" id="ajout_photo"enctype="multipart/form-data" method="post" action="valider_ajout_photo">
						<br/><input type="file" name="photo"/>
						<input type="hidden" name="idperle" value="{{$perle->id}}">
						<input type="hidden" name="_token" value="{{ csrf_token() }}"><br/><br/>
						<input type="submit" class="btn btn center-block" id="ajout2" value="AJOUTEZ UNE PHOTO"/>
					</form>
					</div>

				@else 
					<div class="col-lg-12"id="ajout_pasco">
						<p>&nbsp;Vous n'êtes pas connecté, pour ajouter une anecdote et/ou une photo, veuillez vous connecter ou vous inscrire si vous ne possédez pas de compte</p>
					</div>

				@endif
					<div id="anecdotes">
						@foreach($anecdotes as $anecdote)
							<div id="anecdote">
								<p><b>{{$anecdote->anecdote}}</b></p>
								<p>Ajouté le {{$anecdote->dateanecdote}}</p>
							</div>
						@endforeach
					</div>
					
				</div>
				
				<div class="col-xs-2 col-sm-2 col-md-2 col-lg-2 col-md-offset-1">
					<div id="photos_voyage">
						<h2>Quelques photos de voyage</h2>
							<div id="photos" class="container">
								<script type="text/javascript" src="Javascript/photosaleatoires.js"></script>
							</div>

					</div>

					<div id="selections">
						<h2>Votre sélection</h2>
						
						<div class="selection">
							<p>Sélection 1</p>
							<form>
								<input type="submit" class="btn btn center-block"id="Consulter" value="Consulter">
							</form>
						</div>

						<div class="selection">
							<p>Sélection 2</p>
							<form>
								<input type="submit" class="btn btn center-block"id="Consulter" value="Consulter">
							</form>
						</div>
					</div>

				</div>
	<script type="text/javascript" src="Javascript/googlemapperle.js"></script>
	
@stop
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

					<div id="carteaccueil" style="height:400px"></div>

				</div>
				
				<div class="col-xs-2 col-sm-2 col-md-2 col-lg-2 col-md-offset-1">
					<div id="photos_voyage">
						<h2>Quelques photos de voyage</h2>
							<div id="photos" class="container">
								<!--<img class="col-xs-6 col-sm-6 col-md-6 col-lg-6 img-responsive" src="Images/paysage.jpeg">
								<img class="col-xs-6 col-sm-6 col-md-6 col-lg-6 img-responsive" src="Images/paysage.jpeg">
								<img class="col-xs-6 col-sm-6 col-md-6 col-lg-6 img-responsive" src="Images/paysage.jpeg">
								<img class="col-xs-6 col-sm-6 col-md-6 col-lg-6 img-responsive" src="Images/paysage.jpeg">
								<img class="col-xs-6 col-sm-6 col-md-6 col-lg-6 img-responsive" src="Images/paysage.jpeg">
								<img class="col-xs-6 col-sm-6 col-md-6 col-lg-6 img-responsive" src="Images/paysage.jpeg">-->
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
			</div>



		<script type="text/javascript" src="Javascript/googlemapaccueil.js"></script>


@stop

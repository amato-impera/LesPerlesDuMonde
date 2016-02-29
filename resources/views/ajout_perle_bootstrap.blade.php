@extends('index_site_bootstrap')

@section('section')

	<div id="ajout"class="row">
				
		<div class="col-xs-7 col-sm-7 col-md-7 col-lg-7 col-lg-offset-1 " id="carte" style="height:550px"></div>



		<div class="col-xs-3 col-sm-3 col-md-3col-lg-3">

		<h3>Ajouter votre perle</h3>

		
		<form name="ajout_perle" action="valider_ajout_perle" >
			
				<div class="form-group">
			    	<div class="col-sm-10">
			     		<input type="text" class="form-control" placeholder="Nom de la perle" name="nomperle">
			    	</div>
			  	</div>
				</br></br></br>
			  	<div class="form-group">
			  		<label class="control-label col-xm-2" >Catégorie : </label>
			    	<select name="idcategorie">
						@foreach ($categories as $categorie)
						<option value="{{$categorie->idcategorie}}">{{$categorie->nomcategorie}}</option>
					@endforeach
					</select>
			  	</div>


		
		
		<div class="col‐md‐4"><input type="hidden" id="latitude" name="latitude" class="form‐control"></div>
		<div class="col‐md‐4"><input type="hidden" id="longitude" name="longitude" class="form‐control"></div>
		<div class="col‐md‐4"><input type="hidden" id="pays" name="pays" class="form‐control"></div>
		<div class="col‐md‐4"><input type="hidden" id="continent" name="continent" class="form‐control"></div>	

		<input type="submit" class="btn btn center-block" id="ajout_perle" value="Ajouter cette perle">



		</form>	

		</div>
	</div>


	


	<script type="text/javascript" src="Javascript/googlemap.js"></script>
@stop
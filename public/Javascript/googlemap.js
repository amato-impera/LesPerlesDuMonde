//-----------------  SCRIPT PRINCIPAL -------------------------
window.addEventListener("load", init);


function init(event) {

		if (navigator.geolocation)
  navigator.geolocation.getCurrentPosition(actionSiSucces);
else
  console.log("Votre navigateur ne prend pas en compte la géolocalisation");
}
   
// role : ?
// parametres : ?
// retour : ?
function actionSiSucces(position){
  
  var latitude = position.coords.latitude;
  var longitude = position.coords.longitude;
 	


				var latlng = new google.maps.LatLng(latitude, longitude);
				//objet contenant des propriétés avec des identificateurs prédéfinis dans Google Maps permettant
				//de définir des options d'affichage de notre carte
				var options = {
					center: latlng,
					zoom: 7,
					mapTypeId: google.maps.MapTypeId.ROADMAP
				};
				
				//constructeur de la carte qui prend en paramêtre le conteneur HTML
				//dans lequel la carte doit s'afficher et les options
			var carte = new google.maps.Map(document.getElementById("carte"), options);

			carte.addListener('click', function(e) { // repère le click pour l'ajout
    		placeMarkerAndPanTo(e.latLng, carte);
 			 });
			}

				
var firstClick = 1;	// compteur pour ne placer qu'un seul marqueur à l'ajout d'une perle



function placeMarkerAndPanTo(latLng, carte) { // ajouter le marquer

if(firstClick==1){
var marker = new google.maps.Marker({
    position: latLng,
    draggable:true,
    animation: google.maps.Animation.DROP,
    map: carte
});
  carte.panTo(latLng);

  firstClick = 0;

  // Update current position info.
  updateMarkerPosition(latLng);
  geocodePosition(latLng);
  
 
  
  google.maps.event.addListener(marker, 'drag', function() {
    updateMarkerPosition(marker.getPosition());
  });
  
  google.maps.event.addListener(marker, 'dragend', function() {
    geocodePosition(marker.getPosition());
  });
	}

}

var geocoder = new google.maps.Geocoder();

function geocodePosition(pos) {
  geocoder.geocode({
    latLng: pos
   });
}


function updateMarkerPosition(latLng) {
  //console.log(latLng.lng());
  //console.log(latLng.lat());
  var lat = latLng.lat();
  var lon = latLng.lng();
 
    
  document.ajout_perle.latitude.value = lat;
  document.ajout_perle.longitude.value = lon;
 }

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

	
			}


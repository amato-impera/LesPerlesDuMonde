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
      var carteaccueil = new google.maps.Map(document.getElementById("carteaccueil"), options);

     
 //$.get("http://vsp149406.nfrance.com/~16_amato/lesperlesdumonde/public/marqueurs", creermarqueur,"json");
    $.ajax({
       url   : 'http://vsp149406.nfrance.com/~16_amato/lesperlesdumonde/public/marqueurs',              
       dataType : "json",  
        success  : function(data){

                  
                 $.each(data, function(index, val) {
                    
                    var lat = val.latitude;
                    var lon = val.longitude;
                        var marker = new google.maps.Marker({
                             position : new google.maps.LatLng(lat, lon),
                             map      : carteaccueil
                           });
                             
                          
      });
  }
});


                }


/*
function creermarqueur(donneesJSON, carteaccueil) {



var i = 0;

for (i; i<donneesJSON.length; i++) {


var lat = donneesJSON[i].latitude;
var lng = donneesJSON[i].longitude;
console.log("blabl");

var id = donneesJSON[i].id;
new google.maps.Marker({
    position: new google.maps.LatLng(lat[1], lng[1]),
    animation: google.maps.Animation.DROP,
    title : "Marqueur-"+i,
    map: carteaccueil
  });


}
}
*/

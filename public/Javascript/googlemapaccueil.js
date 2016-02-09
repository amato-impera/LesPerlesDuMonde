//-----------------  SCRIPT PRINCIPAL -------------------------
window.addEventListener("load", init);


function init(event) {

    if (navigator.geolocation)
        navigator.geolocation.getCurrentPosition(actionSiSucces);
    else
        console.log("Votre navigateur ne prend pas en compte la gÃ©olocalisation");




}

// role : ?
// parametres : ?
// retour : ?
function actionSiSucces(position) {

    var latitude = position.coords.latitude;
    var longitude = position.coords.longitude;



    var latlng = new google.maps.LatLng(latitude, longitude);
    //objet contenant des propriÃ©tÃ©s avec des identificateurs prÃ©dÃ©finis dans Google Maps permettant
    //de dÃ©finir des options d'affichage de notre carte
    var options = {
        center: latlng,
        zoom: 7,
        mapTypeId: google.maps.MapTypeId.ROADMAP
    };

    //constructeur de la carte qui prend en paramÃªtre le conteneur HTML
    //dans lequel la carte doit s'afficher et les options
    var carteaccueil = new google.maps.Map(document.getElementById("carteaccueil"), options);



    $.ajax({
        url: 'http://vsp149406.nfrance.com/~16_amato/lesperlesdumonde/public/marqueurs',
        dataType: "json",
        success: function (data) {

            oInfo = new google.maps.InfoWindow();

            $.each(data, function (index, val) {

                var lat = val.latitude;
                var lon = val.longitude;

                var marker = new google.maps.Marker({
                    position: new google.maps.LatLng(lat, lon),
                    map: carteaccueil
                });
                // crÃ©ation d'une infobulle en attente d'affichage


                google.maps.event.addListener(marker, 'click', function (data) {
                    // affichage position du marker
                    var id=val.id;
                    oInfo.setContent(val.nomperle +'<br/><a href="http://vsp149406.nfrance.com/~16_amato/lesperlesdumonde/public/perle'+id+'">Consulter la perle</a>');
                    oInfo.open(carteaccueil, marker);
                });
            });
        }
    });


}

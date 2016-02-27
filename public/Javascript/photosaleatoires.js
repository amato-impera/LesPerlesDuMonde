 $.ajax({
        url: 'http://vsp149406.nfrance.com/~16_amato/lesperlesdumonde/public/photosaleatoires',
        dataType: "json",
        success: function (data) {

            $.each(data, function (index, val) {

                $("#photos").append("<img id='photoaccueil' class='col-xs-6 col-sm-6 col-md-6 col-lg-6 img-responsive'src='Photos/"+val.nomphoto+"'/>"); 
    });


}

});

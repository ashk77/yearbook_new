<!DOCTYPE html>
<html>
<head>
  <title>Geocoding service</title>
  <meta name="viewport" content="initial-scale=1.0, user-scalable=no">
  <meta charset="utf-8">
  <style>
      /* Always set the map height explicitly to define the size of the div
      * element that contains the map. */
      #map {
        height: 100%;
      }
      /* Optional: Makes the sample page fill the window. */
      html, body {
        height: 100%;
        margin: 0;
        padding: 0;
      }
      #floating-panel {
        position: absolute;
        top: 10px;
        left: 25%;
        z-index: 5;
        background-color: #fff;
        padding: 5px;
        border: 1px solid #999;
        text-align: center;
        font-family: 'Roboto','sans-serif';
        line-height: 30px;
        padding-left: 10px;
      }
    </style>
  </head>
  <body>
    <div id="floating-panel">
     <!-- <input id="address" type="textbox" value="Sydney, NSW">
      <input id="submit" type="button" value="Geocode">-->
    </div>
    <div id="map"></div>
    <script>
      function initMap() {
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 5,
          center: {lat: 20.5937, lng: 78.9629}
        });
        var geocoder = new google.maps.Geocoder();
        geocodeAddress(geocoder, map);
/*        document.getElementById('submit').addEventListener('click', function() {
          geocodeAddress(geocoder, map);
        });*/
      }

      function geocodeAddress(geocoder, resultsMap) {
       // var address = document.getElementById('address').value;
       var locations = <?php echo $locations;?>;
       var addresses = [];
       for (var i = 0; i < locations.length; i++) {
        addresses[i] = locations[i].city+', '+locations[i].country;
      }

      for(var i = addresses.length - 1; i >= 0; i--) {
       console.log(addresses[i]);
       geocoder.geocode({'address': addresses[i]}, function(results, status) {
        if (status === 'OK') {
          resultsMap.setCenter(results[0].geometry.location);
          var marker = new google.maps.Marker({
            map: resultsMap,
            position: results[0].geometry.location
          });
        } else {
        //alert('Geocode was not successful for the following reason: ' + status);
      }
    });
     }

   }
 </script>
 <script async defer
 src="https://maps.googleapis.com/maps/api/js?key=
AIzaSyB_-mZyrrPNOmvprL6_mT3ftUCVyPjTT_o
&callback=initMap">
</script>
</body>
</html>
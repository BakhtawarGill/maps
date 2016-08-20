<?php 

// namespace Maps;

class Maps {
	
	function __construct($params)
	{
		
		$this->intializeMap($params);
	}

	public function intializeMap($params)
	{
		$key = $params['key'];
		$marker = $params['marker']['latlng'];
		$markerTitle = $params['marker']['title'];
		echo '<!DOCTYPE html>
<html>
  <head>
    <title>Simple Map</title>
    <meta name="viewport" content="initial-scale=1.0">
    <meta charset="utf-8">
    <style>
      html, body {
        height: 100%;
        margin: 0;
        padding: 0;
      }
      #map {
        height: 100%;
      }
    </style>
  </head>
  <body>
    <div id="map"></div>
    <script>
      var map;
      function initMap() {
        var myLatLng = '.$marker.';

        var map = new google.maps.Map(document.getElementById("map"), {
          zoom: 4,
          center: myLatLng
        });

        var marker = new google.maps.Marker({
          position: myLatLng,
          map: map,
          title: "'.$markerTitle.'"
        });
      }
    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key='.$key.'&callback=initMap"
    async defer></script>
  </body>
</html>';
	}
}


 ?>
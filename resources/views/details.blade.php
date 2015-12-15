@extends('layout.layout')

@section('t', 'Page Title')

@section('content')
<link rel="stylesheet" href="assets/css/bootstrap.css">
<link rel="stylesheet" href="assets/css/bootstrap-responsive.css">
<link rel="stylesheet" href="assets/css/app.css">
<link rel="stylesheet" href="assets/css/maps.css">
<link rel="stylesheet"  href="assets/css/bootstrap-arrow-buttons.css">
<link rel="stylesheet" href="assets/css/jquery-ui.css">

        <div style="position: relative; height:465px; width: 100%; background-size: 100% 450px; background-image:url(https://images.unsplash.com/photo-1414358154612-ae3d3c120004?crop=entropy&fit=crop&fm=jpg&h=650&ixjsv=2.1.0&ixlib=rb-0.3.5&q=80&w=1375")>
            
                
                    <div class="row-fluid" style="position: absolute; bottom:0">
                      <div id="coding" class="span4 section" style="border-color:green;border-style:solid;border-width:1px;">
                          <h4>Restaurante Dos Sales</h4>
                          <h5>Este es un restaurante otro rollo, buen servicion y excelentes precios</h5>
                      </div>
                    </div>
                <button id="mapaBotton", style="position: absolute; bottom: 10; right: 15px" type="button"  class="btn btn-warning btn-arrow-right">Vamos</button>
        </div>
        <div id="dialog" style="display: none">
          <div id="floating-panel">
              <b>Mode of Travel: </b>
              <select id="mode">
                 <option value="DRIVING">Driving</option>
                 <option value="WALKING">Walking</option>
                 <option value="BICYCLING">Bicycling</option>
                <option value="TRANSIT">Transit</option>
                </select>
               </div>
          <div id="map-canvas", style="height: 400px; width: 590px; background-color: #CCC; position: absolute; float: left" ></div>
</div>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAH1WzYCyl09yCDQD4iDRBrBDAHAsC-5_A&libraries=places" type="text/javascript"></script>
<script type="text/javascript" src="assets/js/jquery-ui.js"></script>
<script type="text/javascript" src="assets/js/jquery-ui..min.js"></script>

<script>
 $(function() {
   $("#mapaBotton").click(function () {
     $("#dialog").dialog({
                    modal: true,
                    title: "Touch&Go",
                    width: 610,
                    height: 450,
                    
                    open: function () {
                      var marker1, marker2;
                      var directionsDisplay = new google.maps.DirectionsRenderer;
                      var directionsService = new google.maps.DirectionsService;
                        var mapOptions = {
                            center: new google.maps.LatLng(14.097997, -87.187934),
                            zoom: 12,
                            mapTypeId: google.maps.MapTypeId.ROADMAP
                        }
                        var map = new google.maps.Map($("#map-canvas")[0], mapOptions);
                        directionsDisplay.setMap(map);
                        
                        marker1 = new google.maps.Marker({
                          position: mapOptions.center,
                          map: map,
                          title: 'Restaurantes Dos Sales'
                          });
                        var infoWindow = new google.maps.InfoWindow({map: map});
                        
                          // Try HTML5 geolocation.
                          if (navigator.geolocation) {
                          navigator.geolocation.getCurrentPosition(function(position) {
                          var pos = {
                             lat: position.coords.latitude,
                             lng: position.coords.longitude
                           };
                           
                          marker2 = new google.maps.Marker({
                          position: pos,
                          map: map,
                          title: 'Aqui Estoy'
                          });
                           
                           }, function() {
                               handleLocationError(true, infoWindow, map.getCenter());
                           });
                           } else {
                            // Browser doesn't support Geolocation
                             handleLocationError(false, infoWindow, map.getCenter());
                          }

                          function handleLocationError(browserHasGeolocation, infoWindow, pos) {
                            infoWindow.setPosition(pos);
                            infoWindow.setContent(browserHasGeolocation ?
                                'Error: The Geolocation service failed.' :
                                'Error: Your browser doesn\'t support geolocation.');
                          }
                          
                          calculateAndDisplayRoute(directionsService, directionsDisplay);
                          document.getElementById('mode').addEventListener('change', function() {
                                  calculateAndDisplayRoute(directionsService, directionsDisplay);
                            });

                      function calculateAndDisplayRoute(directionsService, directionsDisplay) {
                            var selectedMode = document.getElementById('mode').value;
                            directionsService.route({
                                origin: marker1.position, 
                                destination: marker2.position, 
                                 travelMode: google.maps.TravelMode[selectedMode]
                              }, function(response, status) {
    if (status == google.maps.DirectionsStatus.OK) {
      directionsDisplay.setDirections(response);
    } else {
      window.alert('Directions request failed due to ' + status);
    }
  });
}

                    }//fin de la funcion
                });
            });
  });
  </script>  
  

@stop
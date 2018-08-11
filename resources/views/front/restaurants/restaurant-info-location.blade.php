<!DOCTYPE HTML>
<!--
	Helios by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Korean Restaurant Locator</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="{{asset('assets/css/main.css')}}" />
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
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
    </style>
  </head>
  <body>
		<a href="{{route('restaurant.info',$restaurant->id)}}" class="button" style="position: absolute; z-index: 10; width: 120px;">Back</a>
    <div id="map">
    	
    </div>


		<!-- Scripts -->
			
				<script>
				 //  function initMap() {

				 //    var uluru = {lat:{{$restaurant->latitude}}, lng: {{$restaurant->longitude}}};
				 //    var map = new google.maps.Map(document.getElementById('map'), {
				 //      zoom: 17,
				 //      center: uluru
				 //    });
				 //    var marker = new google.maps.Marker({
				 //      position: uluru,
				 //      map: map
				 //    });
			  //     }
					function initMap() {

						// if (navigator.geolocation) {
						//         navigator.geolocation.getCurrentPosition(showPosition);
						//     } else { 
						//         x.innerHTML = "Geolocation is not supported by this browser.";
						//     }
						// var geoLat, geoLng;
						// function showPosition(position) {
						//     document.getElementById('lat').value = "{lat:" + position.coords.latitude + ",lng:" + position.coords.longitude + "}";
						// }
						// var currLocation = document.getElementById('lat').value;
						// alert(currLocation);
					  	var directionsDisplay = new google.maps.DirectionsRenderer;
				        var directionsService = new google.maps.DirectionsService;
				        var map = new google.maps.Map(document.getElementById('map'), {
				          zoom: 13,
				          center: {lat: 15.150020, lng: 120.577834}
				        });
				        directionsDisplay.setMap(map);

				        var start = {lat:15.150020, lng: 120.577834};
				        var end = {lat:{{$restaurant->latitude}}, lng: {{$restaurant->longitude}}};
				        directionsService.route({
				          origin: start,
				          destination: end,
				          travelMode: 'DRIVING'
				        }, function(response, status) {
				          if (status === 'OK') {
				            directionsDisplay.setDirections(response);
				          } else {
				            window.alert('Directions request failed due to ' + status);
				          }
				        });
					}
				</script>
			<script async defer
    		src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAEu6-Ik5V0hLMjpgKcM42QgfDb0W30O40&callback=initMap">
    		</script>
			<script src="{{asset('assets/js/jquery.min.js')}}"></script>
			<script src="{{asset('assets/js/jquery.dropotron.min.js')}}"></script>
			<script src="{{asset('assets/js/jquery.scrolly.min.js')}}"></script>
			<script src="{{asset('assets/js/jquery.onvisible.min.js')}}"></script>
			<script src="{{asset('assets/js/skel.min.js')}}"></script>
			<script src="{{asset('assets/js/util.js')}}"></script>
			<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
		
			
    		
	</body>
</html>






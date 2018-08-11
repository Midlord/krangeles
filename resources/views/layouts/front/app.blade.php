<!DOCTYPE HTML>
<html>
	<head>
		<title>Korean Restaurant Locator - @yield('title')</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="{{asset('front/assets/css/main.css')}}" />
	</head>
	<body class="homepage">
		<div id="page-wrapper">

			<!-- Header -->
				@include('layouts.front.header')

			
			@yield('content')
			@include('layouts.front.footer')

		</div>

		<!-- Scripts -->
			<script src="{{asset('front/assets/js/jquery.min.js')}}"></script>
			<script src="{{asset('front/assets/js/jquery.dropotron.min.js')}}"></script>
			<script src="{{asset('front/assets/js/skel.min.js')}}"></script>
			<script src="{{asset('front/assets/js/skel-viewport.min.js')}}"></script>
			<script src="{{asset('front/assets/js/util.js')}}"></script>
			<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js')}}"></script><![endif]-->
			<script src="{{asset('front/assets/js/main.js')}}"></script>
			{{-- modal --}}
			<script src="{{asset('front/assets/js/modal.min.js')}}"></script>

			<script>
		      function initMap() {
		        var uluru = {lat: -25.363, lng: 131.044};
		        var map = new google.maps.Map(document.getElementById('map'), {
		          zoom: 4,
		          center: uluru
		        });
		        var marker = new google.maps.Marker({
		          position: uluru,
		          map: map
		        });
		      }
		</script>

	</body>
</html>


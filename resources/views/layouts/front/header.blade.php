<div id="header-wrapper">
	<div id="header" class="container">
		<!-- Logo -->
		<h1 id="logo"><a href="{{url('/')}}" style="color:#e8efff;">KRLocator</a></h1>
		<p style="color:#e8efff;">A korean restaurant locator in Angeles City.</p>

	<!-- Nav -->
		<nav id="nav">
			<ul>
				<li><a class="icon fa-home" href="{{url('/')}}"><span style="color:#e8efff;">Home</span></a></li>
				<li>
					<a href="#" class="icon fa-bar-chart-o"><span style="color:#e8efff;">Restaurants</span></a>
					<ul>
						@foreach($restaurants as $restaurant)
						<li><a href="{{route('restaurant.info',$restaurant->id)}}">{{$restaurant->name}}</a></li>
						@endforeach
					</ul>
				</li>
				<li>
				@if(auth()->check())
				<a class="icon fa-cog" href="{{ route('logout') }}" 
				       onclick="event.preventDefault();
				                     document.getElementById('logout-form').submit();"><span style="color:#e8efff;">{{ __('Logout') }}</span></a>
				<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
			             {{ csrf_field() }}

				</form>
				@endif
				</li>
			</ul>
		</nav>
	</div>
</div>
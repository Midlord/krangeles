@extends('layouts.front.app')

@section('content')
<!-- Features -->
<div id="features-wrapper">
	<section id="features" class="container">
		<header>
			<h2>List of Restaurants</h2>
		</header>
		<div class="row">
			@foreach($restaurants as $restaurant)
			
			<div class="4u 12u(mobile)">
				<!-- Feature -->
					<section>
						<a href="{{route('restaurant.info',$restaurant->id)}}" class="image featured"><img src="{{ asset('/storage') }}/{{ $restaurant['cover1'] }}" alt="" /></a>
						<header>
							<h3><a href="{{route('restaurant.info',$restaurant->id)}}">{{$restaurant->name}}</a></h3>
						</header>
						<p>{{ str_limit($restaurant->about, 30, ' ...') }}</p>
					</section>
			</div>
			@endforeach
		</div>
	</section>
</div>


@endsection
@extends('layouts.front.app')

@section('content')
<!-- Features -->
<div id="features-wrapper">
	<section id="features" class="container">
		<header>
			<h2>Most review restaurants in Angeles City!</h2>
		</header>
		<div class="row">
			@forelse($restaurants as $restaurant)
			@foreach($restaurant->photos as $photo)
			
			<div class="3u 12u(mobile)">
				<section>
					<a href="{{route('restaurant.info',$restaurant->id)}}" class="image featured"><img src="{{ asset('storage/uploads/images/$photo->image') }}" class="img-responsive" alt="" /></a>
					<header>
						<h3><a href="{{route('restaurant.info',$restaurant->id)}}">{{$restaurant->name}}</a></h3>
					</header>
					<p>{{ str_limit($restaurant->about, 12, ' ...') }}</p>
				</section>
				
			</div>
			@endforeach
			@empty
			<div class="4u 12u(mobile)">
				<section>
					<p>No Data.</p>
				</section>
			</div>
			@endforelse
		</div>
		<ul class="actions">
			<li><a href="{{route('restaurant.list')}}" class="button icon fa-file">See More</a></li>
		</ul>
	</section>
</div>


@endsection
@extends('layouts.front.app')
@section('title', 'Restaurant Info')
@section('content')
<!-- Main -->
<div id="main-wrapper">
	<div id="main" class="container">
		<div class="row">
			<!-- Content -->

				<div id="content" class="8u 12u(mobile)">

					<!-- Post -->
						<article class="box post">
							<header>
								<h2 style="color:#000000;">{{$restaurant->name}}</h2>
							</header>
							<span class="image featured"><img src="{{ asset('/storage') }}/{{ $restaurant['cover1'] }}" alt="" /></span>
							<h3 style="color:#000000;">About {{$restaurant->name}}</h3>
							<p style="color:#000000;">{{$restaurant->about}}</p>
							<h3 style="color:#000000;">Opening Hours</h3>
							@if($restaurant->open_hour && $restaurant->close_hour == "none")
							<p style="color:#000000;">- OPEN 24 Hours</p>
							@else
							<p style="color:#000000;">-{{$restaurant->open_hour}} to {{$restaurant->close_hour}}</p>
							@endif
							<h3 style="color:#000000;">Website</h3>
							@if($restaurant->url == "none")
							<p style="color:#000000;">- None</p>
							@else
							<p>- <a href="{{$restaurant->url}}" style="color:#000000;" target="_blank">{{$restaurant->url}}</a></p>
							@endif
						</article>
					<a href="{{route('restaurant.info.location',$restaurant->id)}}" class="button">Go to Direction</a>
				</div>

			<!-- Sidebar -->
				<div id="sidebar" class="4u 12u(mobile)">

					<!-- Excerpts -->
						<section>
							<ul class="divided">
								<h2 style="color:#000000;">Comments & Review</h2>
								@foreach($restaurant->comments as $restaurant)
								<li>
									<!-- Excerpt -->
										<article class="box excerpt">
											<header>
												
												<span class="date" style="color:#000000;">{{ $restaurant->created_at->format('m/d/Y') }}</span>
												<h3 style="color:#000000;">{{$restaurant->user_name}}</h3>
												<h4 style="color:#000000;">{{$restaurant->rate}}</h4>
											</header>
											<p style="color:#000000;">{{$restaurant->comment}}</p>
										</article>
								</li>
								@endforeach
							</ul>
						</section>
					<!-- Highlights -->
						
						<section>
							<ul class="divided">
								<li>
									<!-- Highlight -->
										<article class="box highlight">
											<header>
												<h3><a href="#">Review and Comments</a></h3>
											</header>
											<a href="#" class="image left"><img src="{{ asset('images/reviewgg.png') }}" alt="" /></a>
											<ul class="actions">
												<ul class="actions">
													<li><a href="{{route('restaurant.info.comment',$restaurant->id)}}" class="button icon fa-file">Write a Review</a></li>
												</ul>

											</ul>
										</article>
								</li>
							</ul>
						</section>
				</div>
		</div>
	</div>
</div>
@endsection
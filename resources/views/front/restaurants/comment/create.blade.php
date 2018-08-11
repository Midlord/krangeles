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
							<h2>Review in {{$restaurant->name}}</h2>
						</header>
					@include('layouts.errors-and-messages')
                 <form action="{{ route('store.comment',$restaurant->id) }}" method="post" class="form-horizontal form-label-left" enctype="multipart/form-data" novalidate>
                   {{ csrf_field() }}
                   <input type="hidden" name="restaurant_id" value="{{$restaurant->id}}">
                   <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                  <div class="item form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Rate <span class="required">*</span>
                    </label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                      <fieldset class="rating form-control col-md-7 col-xs-12">
                        <input type="radio" id="star5" name="rate" value="5" /><label class = "full" for="star5" title="Awesome - 5 stars"></label>
                        <input type="radio" id="star4half" name="rate" value="4 and a half" /><label class="half" for="star4half" title="Pretty good - 4.5 stars"></label>
                        <input type="radio" id="star4" name="rate" value="4" /><label class = "full" for="star4" title="Pretty good - 4 stars"></label>
                        <input type="radio" id="star3half" name="rate" value="3 and a half" /><label class="half" for="star3half" title="Meh - 3.5 stars"></label>
                        <input type="radio" id="star3" name="rate" value="3" /><label class = "full" for="star3" title="Meh - 3 stars"></label>
                        <input type="radio" id="star2half" name="rate" value="2 and a half" /><label class="half" for="star2half" title="Kinda bad - 2.5 stars"></label>
                        <input type="radio" id="star2" name="rate" value="2" /><label class = "full" for="star2" title="Kinda bad - 2 stars"></label>
                        <input type="radio" id="star1half" name="rate" value="1 and a half" /><label class="half" for="star1half" title="Meh - 1.5 stars"></label>
                        <input type="radio" id="star1" name="rate" value="1" /><label class = "full" for="star1" title="Sucks big time - 1 star"></label>
                        <input type="radio" id="starhalf" name="rate" value="half" /><label class="half" for="starhalf" title="Sucks big time - 0.5 stars"></label>
                      </fieldset>
                    </div>
                  </div>    
                <div class="item form-group">
                  <div class="col-md-6 col-sm-6 col-xs-12">
                    <textarea id="textarea" required="required" name="comment" class="form-control col-md-7 col-xs-12" style="resize: none;" placeholder="Your Message"></textarea>
                  </div>
                </div>             
                <button id="send" type="submit" class="btn btn-success">Submit</button>
              </form>
					</article>
			</div>
		</div>
	</div>
</div>
@endsection
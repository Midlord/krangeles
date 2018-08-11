@extends('layouts.admin.app')

@section('content')
<section class="content">
        
    <div class="row">
        <div class="col-md-12">

                <div class="x_panel">
                  <div class="x_title">
                    <h2>Edit Product <small>Products</small></h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                        <ul class="dropdown-menu" role="menu">
                        </ul>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <br />
                      @include('layouts.errors-and-messages')
                    <form action="{{ route('admin.restaurants.update',$restaurant->id) }}" method="post" class="form-horizontal form-label-left" enctype="multipart/form-data" novalidate>
                        {{ csrf_field() }}
                        <input type="hidden" name="_method" value="put">
                        <input type="hidden" name="restaurant" value="{{ $restaurant->id }}" >
                  <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Name <span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="255" data-validate-words="1" name="name" placeholder="Restaurant Name" required="required" type="text" value="{!!$restaurant->name ?: old('name')!!}">
                      </div>
                  </div>
                  <div class="item form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Description <span class="required">*</span>
                    </label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                      <input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="50" data-validate-words="1" name="description" placeholder="Restaurant Description" required="required" type="text" value="{!!$restaurant->description ?: old('description')!!}">
                    </div>
                  </div>
                  <div class="item form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Address <span class="required">*</span>
                    </label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                      <input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="100" data-validate-words="1" name="address" placeholder="Restaurant Address" required="required" type="text" value="{!!$restaurant->address ?: old('address')!!}">
                    </div>
                  </div>
                  <div class="item form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Latitude <span class="required">*</span>
                    </label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                      <input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="15" data-validate-words="1" name="latitude" placeholder="Restaurant Latitude" required="required" type="text" value="{!!$restaurant->latitude ?: old('latitude')!!}">
                    </div>
                  </div>
                  <div class="item form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Longitude <span class="required">*</span>
                    </label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                      <input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="15" data-validate-words="1" name="longitude" placeholder="Restaurant Longitude" required="required" type="text" value="{!!$restaurant->longitude ?: old('longitude')!!}">
                    </div>
                  </div>
                  <div class="item form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Contact Number <span class="required">*</span>
                    </label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                      <input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="15" data-validate-words="1" name="contact_no" placeholder="Contact Number" required="required" type="text" value="{!!$restaurant->contact_no ?: old('contact_no')!!}">
                    </div>
                  </div>
                  <div class="item form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Opening Hours <span class="required">*</span>
                    </label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                      <input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="15" data-validate-words="1" name="open_hour" placeholder="Opening Hours" required="required" type="text" value="{!!$restaurant->open_hour ?: old('open_hour')!!}">
                    </div>
                  </div>
                  <div class="item form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Closing Hours <span class="required">*</span>
                    </label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                      <input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="15" data-validate-words="1" name="close_hour" placeholder="Opening Hours" required="required" type="text" value="{!!$restaurant->close_hour ?: old('close_hour')!!}">
                    </div>
                  </div>
                  <div class="item form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="website">Website URL <span class="required">*</span>
                    </label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                      <input type="url" id="website" name="url" required="required" placeholder="www.example.com" class="form-control col-md-7 col-xs-12" value="{!!$restaurant->url ?: old('url')!!}">
                    </div>
                  </div>

                  <div class="item form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="textarea">About <span class="required">*</span>
                    </label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                      <textarea id="textarea" required="required" name="about" class="form-control col-md-7 col-xs-12" style="resize: none;" placeholder="About the Restaurant">{!!$restaurant->about ?: old('about')!!}</textarea>
                    </div>
                  </div>
                  <div class="item form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12">(Note: Hold CTRL to select multiple image. It only allows JPG, JPEG, or PNG. Maximum File Size is 500kb)</label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                      <input type="file" name="image[]" accept="image/*" class="form-control" multiple="multiple">
                    </div>
                  </div>
                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-9 col-sm-9 col-xs-12 col-md-offset-3">
                          <a href="{{route('admin.restaurants.index')}}" type="button" class="btn btn-primary">Cancel</a>
                          <button type="submit" class="btn btn-success">Submit</button>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
        </div>
</section>
@endsection





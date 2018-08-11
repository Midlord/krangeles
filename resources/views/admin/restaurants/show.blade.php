@extends('layouts.admin.app')
@section('content')
  @include('layouts.modal')
    <div class="clearfix"></div>
        @include('layouts.errors-and-messages')
        <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
            <div class="x_title">
            <ul class="nav navbar-right panel_toolbox">
                <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                </li>
                
                <li><a class="close-link"><i class="fa fa-close"></i></a>
                </li>
            </ul>
            <div class="clearfix"></div>
            </div>
            <div class="x_content">
            <div class="table-responsive">

                <table class="table">
                    <thead>
                        <th class="col-md-1">Name</th>
                        <th class="col-md-1">Description</th>
                        <th class="col-md-1">Address</th>
                        <th class="col-md-1">Latitude</th>
                        <th class="col-md-1">Longitude</th>
                        <th class="col-md-1">Contact No. </th>
                        <th class="col-md-1">Open Hour</th>
                        <th class="col-md-1">Close Hour</th>
                        <th class="col-md-1">Url</th>
                    </thead>
                <tbody>
                <tr>
                    <td>{{ $restaurant->name }}</td>
                    <td>{{ $restaurant->description }}</td>
                    <td>{{ $restaurant->address }}</td>
                    <td>{{ $restaurant->latitude }}</td>
                    <td>{{ $restaurant->longitude }}</td>
                    <td>{{ $restaurant->contact_no }}</td>
                    <td>{{ $restaurant->open_hour }}</td>
                    <td>{{ $restaurant->close_hour }}</td>
                    <td>{{ $restaurant->url }}</td>
                </tr>
                </tbody>
                </table>
                <table class="table">
                    <thead>
                        <th class="col-md-12">About the Company</th>
                    </thead>
                <tbody>
                <tr>
                    <td>{{ $restaurant->about }}</td>
                </tr>
                </tbody>
                </table>
            <div class="col-md-12">
                <hr>
                <h3>Photos</h3>
                @foreach ($restaurant->photos as $photo)
                <div class="col-md-3">
                    @if (isset($photo->image))
                        <img src="{{ asset("storage/uploads/images/$photo->image") }}" style="width: 650px; height: 150px;" class="img-responsive">
                    @endif
                </div>
                @endforeach
            </div>
            </div>
            <div class="box-footer">
                <div class="btn-group">
                    <a href="{{ route('admin.restaurants.index') }}" class="btn btn-default btn-sm">Back</a>
                </div>
            </div>    
                
            </div>
        </div>
        </div>
@endsection
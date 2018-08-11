@extends('layouts.admin.app')
@section('content')
  @include('layouts.modal')
        <div class="clearfix"></div>
              @include('layouts.errors-and-messages')
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Restaurant <small>List of Restaurant</small></h2>

                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                <a class="btn btn-primary pull-right"  href="{{route('admin.restaurants.create')}}">Add Restaurant</a>
                  <div class="x_content">
                    <div class="table-responsive">
 
                        <table class="table">
                            <thead>
                                <th class="col-md-2">Id</th>
                                <th class="col-md-2">Name</th>
                                <th class="col-md-2">Restaurant Owner</th>
                                <th class="col-md-2">Description</th>
                                <th class="col-md-2">Address</th>
                                <th class="col-md-2">Action</th>
                            </thead>
                        <tbody>
                        @foreach ($restaurants as $restaurant)
                        <tr>
                            <td>{{ $restaurant->id }}</td>
                            <td><a href="{{route('admin.restaurants.show',$restaurant->id)}}">{{ $restaurant->name }}</a></td>
                            <td>{{ $restaurant->user->fullName }}</td>
                            <td>{{ $restaurant->description }}</td>
                            <td>{{ $restaurant->address }}</td>
                            <td>
                            <form action="{{ route('admin.restaurants.destroy', $restaurant->id) }}" method="post" class="form-horizontal">
                                {{ csrf_field() }}
                                <input type="hidden" name="_method" value="delete">
                                <div class="btn-group">
                                    <a href="{{ route('admin.restaurants.edit', $restaurant->id) }}" class="btn btn-primary btn-sm"><i class="fa fa-edit"></i> Edit</a>
                                    <button class="btn btn-danger btn-sm" type="button" data-toggle="modal" data-target="#confirmDelete" data-title="Delete" data-message="Are you sure you want to delete ?"><i class="fa fa-times"></i>Remove</button>
                                </div>
                            </form>                  
                            </td>
                        </tr>
                        @endforeach
                        </tbody>
                        </table>
                    </div>
                            
                        
                  </div>
                </div>
              </div>
@endsection
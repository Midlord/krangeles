@extends('layouts.admin.app')
@section('content')
  @include('layouts.modal')
        <div class="clearfix"></div>
              @include('layouts.errors-and-messages')
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Restaurant Archive <small>List of Restaurant Archive</small></h2>

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
                                <th class="col-md-2">Name</th>
                                <th class="col-md-2">Description</th>
                                <th class="col-md-2">Address</th>
                                <th class="col-md-2">Action</th>
                            </thead>
                        <tbody>
                        @foreach ($restaurants as $restaurant)
                        <tr>
                            <td>{{ $restaurant->name }}</td>
                            <td>{{ $restaurant->description }}</td>
                            <td>{{ $restaurant->address }}</td>
                            <td>
                              <form action="{{ route('admin.restaurants.restore', $restaurant->id) }}" method="POST" class="form-horizontal">

                              <input name="_method" type="hidden" value="PUT">
                              {{ csrf_field() }}

                              <div class="btn-group">
                                <button class="btn btn-success btn-sm edit" type="button" data-toggle="modal" data-target="#confirmDelete" data-title="Restore" data-message="Are you sure you want to restore ?"><i class="fa fa-check"></i>Restore</button>
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
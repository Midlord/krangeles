@extends('layouts.admin.app')
@section('content')
  <div class="clearfix"></div>
  @include('layouts.errors-and-messages')
  <div class="col-md-12 col-sm-12 col-xs-12">
    <div class="x_panel">
      <div class="x_title">
        <h2>Admin <small>Owner</small></h2>

        <ul class="nav navbar-right panel_toolbox">
          <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
          </li>
          
          <li><a class="close-link"><i class="fa fa-close"></i></a>
          </li>
        </ul>
        <div class="clearfix"></div>
      </div>
      <a class="btn btn-primary pull-right"  href="{{route('admin.users.create')}}">Add User</a>
      <div class="x_content">
        <div class="table-responsive">

            <table class="table">
                <thead>
                    <th class="col-md-2">Fullname</th>
                    <th class="col-md-2">Role</th>
                    <th class="col-md-2">Email</th>
                    <th class="col-md-2">Username</th>
                    <th class="col-md-2">Phone</th>
                    <th class="col-md-2">Action</th>
                </thead>
            <tbody>
            @if($users)
            @foreach ($users as $user)
            <tr>
                <td><a href="{{route('admin.users.show',$user->id)}}">{{ $user->fullName }}</a></td>
                <td>{{ $user->role }}</td>
                <td>{{ $user->email }}</td>
                <td>{{ $user->username }}</td>
                <td>{{ $user->phone }}</td>
                <td>
                    <a class="dropdown-item" href="{{ route('admin.users.edit',$user->id) }}">Update</a>
                    <a href="{{route('admin.users.destroy',$user)}}" class="text-danger anchor_delete" data-method="delete" >Delete</a>
                </td>
            </tr>
            @endforeach
            @endif
            </tbody>
            </table>
        </div>
      </div>
    </div>
  </div>
@endsection
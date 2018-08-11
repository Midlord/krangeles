@extends('layouts.admin.app')

@section('content')
<section class="content">
<div class="row">
    <div class="col-md-12">
        <div class="x_panel">
            <div class="x_title">
            <h2>Update User</h2>
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
                <form action="{{ route('admin.users.update',$user->id) }}" method="post" class="form-horizontal form-label-left" enctype="multipart/form-data" novalidate>
                {{ csrf_field() }}
                <div class="item form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Role<span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <select id="role" class="form-control col-md-7 col-xs-12" name="role" required="required"> 
                    <option value="">Select Role</option>
                    <option value="owner" {{ ($user->role == 'owner') ? 'selected' : '' }}>{{ ucfirst($user->role) }}</option>
                    </select>
                </div>
                </div>
                <div class="item form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">First Name <span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <input id="firstName" class="form-control col-md-7 col-xs-12" name="firstName" placeholder="First Name" required="required" type="text" value="{{ $user->firstName ? : old('firstName') }}">
                </div>
                </div>
                <div class="item form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Middle Name
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <input id="middleName" class="form-control col-md-7 col-xs-12"name="middleName" placeholder="Middle Name" type="text" value="{{ $user->middleName ? : old('middleName') }}">
                </div>
                </div>
                <div class="item form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Last Name <span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <input id="lastName" class="form-control col-md-7 col-xs-12"name="lastName" placeholder="Last Name" required="required" type="text" value="{{ $user->lastName ? : old('lastName') }}">
                </div>
                </div>
                <div class="item form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Email <span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <input id="email" class="form-control col-md-7 col-xs-12"name="email" placeholder="Email" required="required" type="email" value="{{ $user->email ? : old('email') }}">
                </div>
                </div>
                <div class="item form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Username <span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <input id="username" class="form-control col-md-7 col-xs-12"name="username" placeholder="Username" required="required" type="text" value="{{ $user->username ? : old('username') }}">
                </div>
                </div>
                <div class="item form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Phone <span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <input id="phone" class="form-control col-md-7 col-xs-12"name="phone" placeholder="Phone" required="required" type="text" value="{{ $user->phone ? : old('phone') }}">
                </div>
                </div>
                <div class="ln_solid"></div>
                <div class="form-group">
                <div class="col-md-6 col-md-offset-3">
                    <a href="{{route('admin.users.index')}}" type="button" class="btn btn-primary">Cancel</a>
                    <button id="send" type="submit" class="btn btn-success">Submit</button>
                </div>
                </div>
            </form>
            </div>
        </div>
        </div>
    </div>
</section>
@endsection




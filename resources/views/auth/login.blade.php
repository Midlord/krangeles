<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Korean Restaurant Log In</title>

    <!-- Bootstrap -->
    <link href="{{asset('template/vendors/bootstrap/dist/css/bootstrap.min.css')}}" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="{{asset('template/vendors/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
    <!-- NProgress -->
    <link href="{{asset('template/vendors/nprogress/nprogress.css')}}" rel="stylesheet">
    <!-- Animate.css -->
    <link href="{{asset('template/vendors/animate.css/animate.min.css')}}" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="{{asset('template/build/css/custom.min.css')}}" rel="stylesheet">
    <!-- Custom Css -->
    <link href="{{ asset('css/krlocator.css') }}" rel="stylesheet">
  </head>
  <body class="login" style="background: url(../web/images/bann.jpg)no-repeat;
  position:relative;
  font-family: 'Open Sans', sans-serif;
  background-size:cover;
  background-position:center;
  background-attachment:fixed;">
    <div id="all">
      <a class="hiddenanchor" id="signup"></a>
      <a class="hiddenanchor" id="signin"></a>

      <div class="login_wrapper">
        <div class="animate form login_form">

          <section class="login_content" id="login">
            <form method="POST" action="{{ route('login') }}"> 
              {{ csrf_field() }}
              <h1 style="color:#FFFFFF;">Login Form</h1>
              <div>
                @include('layouts.errors-and-messages')
                @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    @if (session('warning'))
                        <div class="alert alert-warning">
                            {{ session('warning') }}
                        </div>
                    @endif
                <input id="email" style="color:#000000;" type="text" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="usernameOrEmail" placeholder="Enter your E-Mail Address" value="{{ old('email') }}" required autofocus>
              </div>
              <div>
                <input id="password" style="color:#000000;" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" placeholder="Enter your Password" name="password" required>

                @if ($errors->has('password'))
                <span class="invalid-feedback">
                    <strong>{{ $errors->first('password') }}</strong>
                </span>
                @endif
                <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> {{ __('Remember Me') }}
              </div>
                

              <div>
                <input type="submit" value="Login" / id="loginbutton"> 
                <a class="reset_pass" href="{{route('password.request')}}" style="color:#FFFFFF;">Lost your password?</a>
              </div>
              <div>
                {!! app('captcha')->display($attributes = [], $lang = null); !!}
                  @if ($errors->has('g-recaptcha-response'))
                      <span class="help-block">
                          <strong>{{ $errors->first('g-recaptcha-response') }}</strong>
                      </span>
                  @endif
              </div>
              

              <div class="clearfix"></div>

              <div class="separator">
                <p class="change_link" style="color:#FFFFFF;">New to site?
                  <a href="#signup" class="to_register" style="color:#FFFFFF;"> Create Account </a>
                </p>

                <div class="clearfix"></div>
                <br />

                <div id="koreanword">
                  <h1 style="color:#FFFFFF;"><i class="fa fa-paw"></i> Korean Restaurants in Angeles City</h1>
                  <p style="color:#FFFFFF;">©<?php echo date("Y"); ?> All Rights Reserved.Privacy and Terms</p>
                </div>
              </div>
            </form>
          </section>
        </div>

        <div id="register" class="animate form registration_form">
          <section class="login_content" id="login">
            <form method="POST" action="{{ route('register') }}" autocomplete="on">
                        @csrf                    
              <h1 style="color:#FFFFFF;">Create Account</h1>
              <div>
                 <input id="name" type="text" class="form-control{{ $errors->has('firstName') ? ' is-invalid' : '' }}" style="color:#000000;" placeholder="First Name" name="firstName" value="{{ old('firstName') }}" required autofocus>
              </div>
              <div>
                <input id="name" type="text" class="form-control{{ $errors->has('middleName') ? ' is-invalid' : '' }}" style="color:#000000;" placeholder="Middle Name" name="middleName" value="{{ old('middleName') }}">
             </div>
             <div>
              <input id="name" type="text" class="form-control{{ $errors->has('LastName') ? ' is-invalid' : '' }}" style="color:#000000;" placeholder="Last Name" name="lastName" value="{{ old('lastName') }}" required>
             </div>
             <div>
                <select name="role" id="" class="role form-control{{ $errors->has('role') ? ' is-invalid' : '' }}">
                  <option value="">Select Type</option>
                  <option value="user">User</option>
                  <option value="owner">Restaurant Owner</option>
                </select>
             </div>
              <div>
                <input id="email" style="color:#000000;" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" placeholder="E-Mail Address" required>

                @if ($errors->has('email'))
                    <span class="invalid-feedback">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                @endif
              </div>
              <div>
                <input id="password" style="color:#000000;" type="password" name="password" data-validate-length="6,8" class="form-control col-md-7 col-xs-12 {{ $errors->has('password') ? ' is-invalid' : '' }}" required="required" placeholder="Password">
                @if ($errors->has('password'))
                          <span class="invalid-feedback">
                              <strong>{{ $errors->first('password') }}</strong>
                          </span>
                @endif
              </div>
              <div>
                <input id="password_confirmation" style="color:#000000;" type="password" name="password_confirmation" data-validate-linked="password" placeholder="Confirm Password" class="form-control col-md-7 col-xs-12" required="required">
              </div>
              <div>
                <input type="submit" value="Submit" / id="submitbutton"> 
              </div>

              <div class="clearfix"></div>

              <div class="separator">
                <p class="change_link" style="color:#FFFFFF;">Already a member ?
                  <a href="#signin" class="to_register" style="color:#FFFFFF;"> Log in </a>
                </p>

                <div class="clearfix"></div>
                <br />

                <div>
                  <h1 style="color:#FFFFFF;"><i class="fa fa-paw"></i> Korean Restaurants in Angeles City</h1>
                  <p style="color:#FFFFFF;">©<?php echo date("Y"); ?> All Rights Reserved. Privacy and Terms</p>
                </div>
              </div>
            </form>
          </section>
        </div>
      </div>
    </div>
  </body>
</html>

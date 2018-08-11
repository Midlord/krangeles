<div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="{{url('/admin')}}" class="site_title"><i class="fa fa-paw"></i> <span>KRL</span></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile clearfix">
              <div class="profile_pic">
                <img src="{{ asset('template/production/images/img.jpg') }}" alt="..." class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <span>Welcome, 
                  <br>{{ $user->fullName }}
                <h2></h2>
              </div>
              <div class="clearfix"></div>
            </div>
            <!-- /menu profile quick info -->

            <br />
            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3>General</h3>
                <ul class="nav side-menu">
                  <li><a><i class="fa fa-product-hunt"></i> Restaurants <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="{{route('admin.restaurants.index')}}">List of Restaurants</a></li>
                    </ul>
                  </li>
                </ul>
              </div>
              <div class="menu_section">
                <h3>Others</h3>
                <ul class="nav side-menu">
                  <li><a><i class="fa fa-archive"></i> Archive <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="{{route('admin.restaurants.archive')}}">Restaurants</a></li>
                    </ul>
                  </li>         
                </ul>
                <ul class="nav side-menu">
                    <li><a><i class="fa fa-cog"></i>Settings<span class="fa fa-chevron-down"></span></a>
                      <ul class="nav child_menu">
                        <li><a href="{{route('admin.logs.index')}}">Logs</a></li>
                          <li><a href="{{route('admin.users.index')}}">Owner</a></li>
                          <li><a href="{{route('admin.employees.index')}}">Admin</a></li>
                      </ul>
                    </li>
                  </ul>
              </div>

            </div>
            <!-- /sidebar menu -->

            <!-- /menu footer buttons -->
            <div class="sidebar-footer hidden-small">
              <a data-toggle="tooltip" data-placement="top" title="Settings">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Lock">
                <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Logout" href="login.html">
                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
              </a>
            </div>
            <!-- /menu footer buttons -->
          </div>
        </div>
<header class="main-header">
    <a href="{{route('home_show_path')}}" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini animated  lightSpeedIn"><b>M</b>App</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg animated  lightSpeedIn"><b>Medikaria</b></span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
        <!-- Sidebar toggle button-->
        <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </a>
        <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
                <!-- User Account: style can be found in dropdown.less -->
                <li class="dropdown user user-menu">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                    <img src="{{ asset('img/users/'.$currentUser->foto) }}" class="user-image" alt="User Image">
                    <span class="hidden-xs">{{ $currentUser->nombre }}</span>
                  </a>
                  <ul class="dropdown-menu">
                    <!-- User image -->
                    <li class="user-header">
                      <img src="{{ asset('img/users/'.$currentUser->foto) }}" class="img-circle" alt="User Image">

                      <p>
                        {{ $currentUser->nombre }}
                        <small>Miembro desde: {{ date_format($currentUser->created_at,'Y-m-d') }}</small>
                      </p>
                    </li>
                    <!-- Menu Body -->
                    <li class="user-body">
                      <div class="row">
                        <!--<div class="col-xs-4 text-center">
                          <a href="#">Followers</a>
                        </div>
                        <div class="col-xs-4 text-center">
                          <a href="#">Sales</a>
                        </div>
                        <div class="col-xs-4 text-center">
                          <a href="#">Friends</a>
                        </div>-->
                      </div>
                      <!-- /.row -->
                    </li>
                    <!-- Menu Footer-->
                    <li class="user-footer">
                      <div class="pull-left">
                        <a href="{{route('user_show_profile_path',$currentUser->id)}}" class="btn btn-default btn-flat">Perfil</a>
                      </div>
                      <div class="pull-right">
                        @if($currentUser)
                          <a href="{{route('auth_destroy_path')}}" class="btn btn-default btn-flat">Salir</a>
                        @endif
                      </div>
                    </li>
                  </ul>
                </li>
                <li>
                    @if($currentUser)
                      <a href="{{route('auth_destroy_path')}}" data-toggle="btn btn-default btn-flat" class="fa fa-sign-out"></a>
                    @endif
                </li>
            </ul>
        </div>
    </nav>
</header>

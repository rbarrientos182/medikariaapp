<header class="main-header">
    <a href="/{{ Session::get('pathUrl') }}" class="logo"><b>Invoice </b>App</a>
    <nav class="navbar navbar-static-top" role="navigation">
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
                <li class="useruser-menu">
                    @if(Auth::user()->type=='admin')
                        <a href="/auth/logout">
                            Salir <i class="fa fa-sign-out"></i>
                        </a>
                    @endif

                </li>
            </ul>
        </div>
    </nav>
</header>

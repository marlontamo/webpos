<!-- Header Navbar: style can be found in header.less -->
<nav class="navbar navbar-static-top">
    <!-- Sidebar toggle button-->
    <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
    <span class="sr-only">Toggle navigation</span>
    </a>

    <div class="navbar-custom-menu">
    <ul class="nav navbar-nav">
        <!-- Messages: style can be found in dropdown.less-->
        <li class="dropdown messages-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <i class="fa fa-envelope-o"></i>
                <span class="label label-info">10</span>
            </a>
            <ul class="dropdown-menu">
                <li class="header">You have 10 notifications</li>
                <li>
                    <!-- inner menu: contains the actual data -->
                    <ul class="menu">
                        <li>
                        <a href="#">
                            <i class="fa fa-users text-aqua"></i> 5 new members joined today
                        </a>
                        </li>
                        <li>
                        <a href="#">
                            <i class="fa fa-warning text-yellow"></i> Very long description here that may not fit into the
                            page and may cause design problems
                        </a>
                        </li>
                        <li>
                        <a href="#">
                            <i class="fa fa-users text-red"></i> 5 new members joined
                        </a>
                        </li>
                    </ul>
                </li>
                <li class="footer"><a href="#">View all</a></li>
            </ul>
        </li>
        <!-- User Account: style can be found in dropdown.less -->
        <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <img src="/img/user2-160x160.jpg" class="user-image" alt="User Image">
                <span class="hidden-xs"></span>
            </a>
            <ul class="dropdown-menu">
                <!-- User image -->
                <li class="user-header">
                <img src="/img/user2-160x160.jpg" class="img-circle" alt="User Image">
                <p>
                    
                    <small>Administrator</small>
                </p>
            </li>
            <!-- Menu Footer-->
            <li class="user-footer">
            <div class="pull-left">
                <a href="/profile/" class="btn btn-default btn-flat">Profile</a>
            </div>
            <div class="pull-right">
                <a href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();"
                    class="btn btn-default btn-flat">
                    Sign out
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    {{ csrf_field() }}
                </form>
            </div>
            </li>
        </ul>
        </li>
        <!-- Control Sidebar Toggle Button -->
        <li>
        <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
        </li>
    </ul>
    </div>
</nav>
  
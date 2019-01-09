<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="/img/user2-160x160.jpg" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
                <p></p>
                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>

        <!-- search form -->
        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="Search...">
                <span class="input-group-btn">
                    <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                    </button>
                </span>
            </div>
        </form>

        <ul class="sidebar-menu">
            <li class="active treeview">
                <a href="/backend">
                    <i class="fa fa-tachometer"></i> <span>Dashboard</span>
                </a>
            </li>
            <li class="treeview">
                <a href="/backend/branch">
                    <i class="fa fa-map-marker"></i> <span>Branch / Location</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li class="active"><a href="/backend/branch"><i class="fa fa-circle-o"></i> Branch List</a></li>
                    <li><a href="/backend/branch/create"><i class="fa fa-circle-o"></i> Add Branch</a></li>
                </ul>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-shopping-bag"></i> <span>Products</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li class="active"><a href="/backend/products"><i class="fa fa-circle-o"></i> Products List</a></li>
                    <li><a href="/backend/products/create"><i class="fa fa-circle-o"></i> Add Product</a></li>
                </ul>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-user"></i> <span>Groups / Users</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li class="active"><a href="/backend/groups"><i class="fa fa-circle-o"></i> Groups List</a></li>
                    <li><a href="/backend/groups/create"><i class="fa fa-circle-o"></i> Add Group</a></li>
                    <li class="divider"></li>
                    <li><a href="/backend/users"><i class="fa fa-circle-o"></i> Users List</a></li>
                    <li><a href="/createnewuser"><i class="fa fa-circle-o"></i> Add User</a></li>
                    <li class="divider"></li>
                </ul>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-line-chart"></i> <span>Reports</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li class="active"><a href="/backend/reports/trail"><i class="fa fa-circle-o"></i> Audit Trail</a></li>
                    <li><a href="/backend/reports/products"><i class="fa fa-circle-o"></i> Products Report</a></li>
                    <li><a href="/backend/reports/sales"><i class="fa fa-circle-o"></i> Sales Report</a></li>
                </ul>
            </li>
            <li class="treeview">
                <a href="/backend/pos">
                    <i class="fa fa-calculator"></i> <span>POS </span>
                </a>
            </li>
        </ul>
    </section>
</aside>


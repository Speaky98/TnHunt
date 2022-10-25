<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
        <img src="{{asset("dist/img/AdminLTELogo.png")}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">Admin</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="{{asset("dist/img/user2-160x160.jpg")}}" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">Qui va à la chasse<br>perd sa place</a>
            </div>
        </div>

        <!-- SidebarSearch Form -->
        <div class="form-inline">
            <div class="input-group" data-widget="sidebar-search">
                <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
                <div class="input-group-append">
                    <button class="btn btn-sidebar">
                        <i class="fas fa-search fa-fw"></i>
                    </button>
                </div>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <li class="nav-item">

                    <a href="{{route("backpage")}}" class="nav-link">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Dashboard
                        </p>
                    </a>
                </li>

                <li class="nav-item">
                            <a href="#" class="nav-link">

                        <i class="nav-icon fas fa-table"></i>
                        <p>
                            Tables
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{route("productpage")}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Product</p>
                            </a>
                        </li>
                        <li class="nav-item">
                                <a href="{{route("rayonpage")}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Rayon</p>
                            </a>
                        </li>
                        <li class="nav-item">
                                <a href="{{route("animals.index")}}" class="nav-link">
                                            <i class="far fa-circle nav-icon"></i>
                                            <p>Animal</p>
                                        </a>
                        </li>
                        <li class="nav-item">
                                <a href="{{route("chiens.index")}}" class="nav-link">
                                            <i class="far fa-circle nav-icon"></i>
                                            <p>Dog</p>
                                        </a>
                        </li>
                        <li class="nav-item">
                    <a href="{{ url('event') }}" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>
                           Events

                        </p>
                    </a>

                </li>
                <li class="nav-item">
                    <a href="{{ url('address') }}" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>
                           Address

                        </p>
                    </a>

                </li>
                <li class="nav-item">
                    <a href="{{ url('progchasse') }}" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>
                           Hunt Program

                        </p>
                    </a>

                </li>
                <li class="nav-item">
                    <a href="{{ url('participerprog') }}" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>
                           Participation

                        </p>
                    </a>

                </li>
                    </ul>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>

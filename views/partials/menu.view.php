<body class="hold-transition sidebar-mini">
    <div class="wrapper">
        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="../../index3.html" class="nav-link">Inicio</a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="#" class="nav-link">Contact</a>
                </li>
            </ul>

            <!-- Search form -->

            <form class="form-inline">
                <div class="input-group input-group-sm">
                    <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
                    <div class="input-group-append">
                        <button class="btn btn-navbar" type="submit">
                            <i class="fas fa-search"></i>
                        </button>
                        <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                            <i class="fas fa-times"></i>
                        </button>
                    </div>
                </div>
            </form>

            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">
                <!-- Navbar Search -->
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="logout" class="nav-link">Logout</a>
                </li>

            </ul>
        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="views/index3.html" class="brand-link">
                <img src="views/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
                <span class="brand-text font-weight-light">Pasteleria la artesana</span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar" style="height: 94vh;">
                <!-- Sidebar user (optional) -->
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image">
                        <img src="views/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
                    </div>
                    <div class="info">
                        <a href="#" class="d-block">Administrador</a>
                    </div>
                </div>

                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                        <!-- Add icons to the links using the .nav-icon class
                                with font-awesome or any other icon font library -->

                        <li class="nav-item has-treeview">
                            <a href="pedidos" class="nav-link">
                                <i class="nav-icon fas fa-truck"></i>
                                <p>
                                    Proveedores <i class="right fas fa-angle left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="newprovider" class="nav-link">
                                        <i class="fas fa-shopping-basket nav-icon"></i>
                                        <p>Nuevo proveedor</p>
                                    </a>
                                </li>

                                <li class="nav-item">
                                    <a href="proveedores" class="nav-link">
                                        <i class="fas fa-store basket nav-icon"></i>
                                        <p>Proveedores</p>
                                    </a>
                                </li>

                                <li class="nav-item">
                                    <a href="informesProveedor" class="nav-link">
                                        <i class="fas fa-book-open nav-icon"></i>
                                        <p>Informe</p>
                                    </a>
                                </li>
                            </ul>
                        </li>



                        <li class="nav-item has-treeview">
                            <a href="pedidos" class="nav-link">
                                <i class="nav-icon fas fa-box"></i>
                                <p>
                                    Productos <i class="right fas fa-angle left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="newproductos" class="nav-link">
                                        <i class="fas fa-shopping-basket nav-icon"></i>
                                        <p>Nuevo producto</p>
                                    </a>
                                </li>

                                <li class="nav-item">
                                    <a href="productos" class="nav-link">
                                        <i class="fas fa-store basket nav-icon"></i>
                                        <p>productos</p>
                                    </a>
                                </li>

                                <li class="nav-item">
                                    <a href="informes" class="nav-link">
                                        <i class="fas fa-book-open nav-icon"></i>
                                        <p>Informe</p>
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
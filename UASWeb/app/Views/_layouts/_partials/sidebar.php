<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="home" class="brand-link">
        <img src="adminLTE/img/RS.jpg" alt="Logo RS" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">RS Fahmi Prayoga</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="adminLTE/img/fahmi.jpg" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">
                    <?php
                    if (session()->get('id')) {
                        echo session()->get('fullname');
                    } else {
                        echo "Pengunjung";
                    }
                    ?></a>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                <li class="nav-item">
                    <a href="/" class="nav-link active">
                        <i class="nav-icon fas "></i>
                        <p>
                            Dashboard
                        </p>
                    </a>
                    <?php if (session()->get('id') && session()->get('role') == 1) { ?>
                        <a href="/antrian" class="nav-link">
                            <i class="nav-icon fas fa-tachometer-alt"></i>
                            <p>
                                Antrian
                            </p>
                        </a>
                    <?php } ?>
                    <?php if (session()->get('id') && session()->get('role') == 0) { ?>
                        <a href="/agenda" class="nav-link">
                            <i class="nav-icon fas fa-pen"></i>
                            <p>
                                Agenda
                            </p>
                        </a>
                        <a href="/laporan" class="nav-link">
                            <i class="nav-icon fas fa-book"></i>
                            <p>
                                Laporan
                            </p>
                        </a>
                        <a href="/loket" class="nav-link">
                            <i class="nav-icon fas fa-school"></i>
                            <p>
                                Daftar loket
                            </p>
                        </a>
                        <a href="/pelayan" class="nav-link">
                            <i class="nav-icon fas fa-users"></i>
                            <p>
                                User Dan Pelayanan
                            </p>
                        </a>
                    <?php } ?>

                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-danger sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="dashboard_admin">
                <div class="sidebar-brand-icon">
                    <i class="fas fa-user-lock"></i>
                </div>
                <div class="sidebar-brand-text mx-1">ADMIN KIOS AS SABIQUUN</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="<?php echo base_url('admin/dashboard_admin') ?>">
                    <i class="fa fa-desktop"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Point Of Sale -->
            <li class="nav-item active">
                <a class="nav-link" href="<?php echo base_url('admin/transaksi_admin') ?>">
                    <i class="fas fa-cart-arrow-down"></i>
                    <span>Point Of Sale</span></a>
            </li>
            <!-- Nav Item - Sales List -->
            <!-- <li class="nav-item active">
                <a class="nav-link" href="<?php echo base_url('admin/Sales_List') ?>">
                    <i class="fa fa-th-list"></i>
                    <span>Sales List</span></a>
            </li> -->

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item active">
                <a class="nav-link" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true"
                    aria-controls="collapseTwo">
                    <i class="fas fa-briefcase"></i>
                    <span>Product</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item active"
                            href="<?php echo base_url('admin/data_barang/tambah_aksi') ?>">Add New</a>
                        <a class="collapse-item" href="<?php echo base_url('admin/data_barang') ?>">Product List</a>
                        <a class="collapse-item" href="<?php echo base_url('admin/kategori_barang') ?>">Product
                            Category</a>
                    </div>
                </div>
            </li>

            <!-- Nav Item - Pages Collapse Menu -->
            <!-- <li class="nav-item active">
                <a class="nav-link" href="#" data-toggle="collapse" data-target="#collapseThree" aria-expanded="true"
                    aria-controls="collapseTwo">
                    <i class="fas fa-archive"></i>
                    <span>Stock Management</span>
                </a>
                <div id="collapseThree" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item active" href="buttons.html">Add New</a>
                        <a class="collapse-item" href="cards.html">Add New Transfer</a>
                    </div>
                </div>
            </li> -->

            <!-- Nav Item - Pages Collapse Menu -->
            <!-- <li class="nav-item active">
                <a class="nav-link" href="#" data-toggle="collapse" data-target="#collapseFour" aria-expanded="true"
                    aria-controls="collapseTwo">
                    <i class="fas fa-cart-arrow-down"></i>
                    <span>Store/Warehouses</span>
                </a>
                <div id="collapseFour" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item active" href="buttons.html">Add New</a>
                        <a class="collapse-item" href="cards.html">All Stores</a>
                    </div>
                </div>
            </li> -->

            <!-- Nav Item - Pages Collapse Menu -->
            <!-- <li class="nav-item active">
                <a class="nav-link" href="#" data-toggle="collapse" data-target="#collapseFive" aria-expanded="true"
                    aria-controls="collapseTwo">
                    <i class="fas fa-users"></i>
                    <span>Suppliers</span>
                </a>
                <div id="collapseFive" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item active" href="buttons.html">Add New</a>
                        <a class="collapse-item" href="<?php echo base_url('admin/data_suppliers') ?>">Suppliers
                            list</a>
                    </div>
                </div>
            </li> -->

            <!-- Nav Item - Pages Collapse Menu -->
            <!-- <li class="nav-item active">
                <a class="nav-link" href="#" data-toggle="collapse" data-target="#collapseSix" aria-expanded="true"
                    aria-controls="collapseTwo">
                    <i class="fas fa-users"></i>
                    <span>Customers</span>
                </a>
                <div id="collapseSix" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item active" href="buttons.html">Add New</a>
                        <a class="collapse-item" href="<?php echo base_url('admin/data_customers') ?>">All Customers</a>
                    </div>
                </div>
            </li> -->

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item active">
                <a class="nav-link" href="#" data-toggle="collapse" data-target="#collapseSeven" aria-expanded="true"
                    aria-controls="collapseTwo">
                    <i class="fas fa-portrait"></i>
                    <span>System Users</span>
                </a>
                <div id="collapseSeven" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item active" href="<?php echo base_url('admin/data_user/tambah_aksi') ?>">Add
                            New</a>
                        <a class="collapse-item" href="<?php echo base_url('admin/data_user') ?>">All Users</a>
                    </div>
                </div>
            </li>

            <!-- Nav Item - Pages Collapse Menu -->
            <!-- <li class="nav-item active">
                <a class="nav-link" href="#" data-toggle="collapse" data-target="#collapsAdmin" aria-expanded="true"
                    aria-controls="collapseTwo">
                    <i class="fas fa-tools"></i>
                    <span>Administration</span>
                </a>
                <div id="collapsAdmin" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item active" href="buttons.html">System Settings</a>
                        <a class="collapse-item" href="buttons.html">Database Backup</a>
                        <a class="collapse-item" href="buttons.html">Database Restore</a>
                    </div>
                </div>
            </li> -->

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item active">
                <a class="nav-link" href="#" data-toggle="collapse" data-target="#collapsReport" aria-expanded="true"
                    aria-controls="collapseTwo">
                    <i class="fas fa-clipboard"></i>
                    <span>Report</span>
                </a>
                <div id="collapsReport" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item active"
                            href="<?php echo base_url('admin/transaksi_admin/laporan') ?>">Report
                            History</a>
                        <a class="collapse-item" href="<?php echo base_url('admin/laporan_pdf') ?>">PDF Report</a>
                        <a class="collapse-item" href="<?php echo base_url('admin/laporan_excel') ?>">Excel Report</a>
                        <!-- <a class="collapse-item" href="#">Sales Report</a>
                        <a class="collapse-item" href="#">Transfer Report</a>
                        <a class="collapse-item" href="#">Sales Report By Seller</a> -->
                    </div>
                </div>
            </li>


            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-primary bg-white topbar mb-4 static-top shadow">


                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <div class="navbar nav">
                            <ul class="nav navbar-nav navbar-right">
                                <li class="checkout">
                                    <a href="<?php echo base_url('admin/transaksi_admin/tambah_keranjang') ?>">
                                        <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                        <span class="checkout_items"><?= $this->cart->total_items(); ?></span>
                                    </a>
                                </li>
                            </ul>

                            <div class="topbar-divider d-none d-sm-block"></div>

                            <!-- Nav Item - User Information -->
                            <li class="nav-item dropdown no-arrow">
                                <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <span class="mr-2 d-none d-lg-inline text-danger-600">Oedien</span>
                                    <img class="img-profile rounded-circle"
                                        src="https://img.icons8.com/bubbles/50/000000/user.png">
                                </a>
                                <!-- Dropdown - User Information -->
                                <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                    aria-labelledby="userDropdown">
                                    <a class="dropdown-item" href="#">
                                        <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                        Profil
                                    </a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                        <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                        Keluar
                                    </a>
                                </div>
                            </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->


                <!-- Logout Modal-->
                <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Yakin Ingin Keluar?</h5>
                                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                </button>
                            </div>
                            <div class="modal-body">Pilih "Keluar" di bawah ini jika kamu telah yakin.</div>
                            <div class="modal-footer">
                                <button class="btn btn-secondary" type="button" data-dismiss="modal">Kembali</button>
                                <a class="btn btn-primary" href="<?php echo base_url('auth/logout') ?>">Keluar</a>
                            </div>
                        </div>
                    </div>
                </div>
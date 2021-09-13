<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                <div class="sidebar-brand-icon rotate-n-15">
                <i class="far fa-square"></i>
                </div>
                <div class="sidebar-brand-text mx-3">Blackbox</div>
            </a>
            
            <!-- Divider -->
            <hr class="sidebar-divider my-0">
            <hr>
            <!-- Heading -->
            <div class="sidebar-heading">
                Profile
            </div>
             <!-- Nav Item - Charts -->
             <li class="nav-item">
                <a class="nav-link" href="charts.html">
                <i class="far fa-user"></i>
                    
                    <span>My Profile</span></a>
            </li>
            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Manage News
            </div>

            <!-- Nav Item - Charts -->
            <li class="nav-item">
                <a class="nav-link" href="admin/create_news">
                <i class="far fa-newspaper"></i>
                    <span>News</span></a>
            </li>
            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

                <!-- Heading -->
                <div class="sidebar-heading">
                Master
            </div>
            
            <li class="nav-item">
                <a class="nav-link" href="dashboard/news">
                <i class="fas fa-tasks"></i>
                    <span>Master News</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="charts.html">
                <i class="fas fa-user-cog"></i>
                    <span>Manage User</span></a>
            </li>
            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">
            <!-- Nav Item - Tables -->
            <li class="nav-item">
                <a class="nav-link" href="<?= base_url('auth/logout') ?>">
                <i class="fas fa-sign-out-alt"></i>
                    <span>Logout</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
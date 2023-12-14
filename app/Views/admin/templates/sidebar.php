<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?= base_url('admin') ?>">
        <div class="sidebar-brand-icon">
            <i class="fas fa-map-marked-alt"></i>
        </div>
        <div class="sidebar-brand-text mx-3">DolanRek</div>
    </a>


    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Management
    </div>

    <!-- Nav Item - User List -->
    <li class="nav-item">
        <a class="nav-link" href="<?= base_url('admin/user') ?>">
            <i class="fas fa-users"></i>
            <span>User</span></a>
    </li>

    <!-- Nav Item - User List -->
    <li class="nav-item">
        <a class="nav-link" href="<?= base_url('admin/wisata') ?>">
            <i class="fas fa-map-marker-alt"></i>
            <span>Wisata</span></a>
    </li>

    <!-- Nav Item - User List -->
    <li class="nav-item">
        <a class="nav-link" href="<?= base_url('admin/transaction') ?>">
            <i class="far fa-credit-card"></i>
            <span>Transaction</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <li class="nav-item">
        <a class="nav-link" href="<?= base_url('') ?>">
            <i class="fas fa-sign-out-alt"></i>
            <span>Website</span></a>
    </li>
    <!-- Nav Item - Logout -->
    <li class="nav-item">
        <a class="nav-link" href="<?= base_url('logout') ?>">
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
<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?= base_url('admin') ?>">
        <div class="sidebar-brand-icon">
            <i class="fas fa-mail-bulk"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Arsip Surat</sup></div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Administrator
    </div>

    <!-- Nav Item - Dashboard -->
    <li class="nav-item">
        <a class="nav-link" href="<?= base_url('admin/') ?>">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Pemisah antara Administrator dengan Database -->
    <!-- Pemisah antara Administrator dengan Database -->
    <!-- Pemisah antara Administrator dengan Database -->

    <!-- Heading -->
    <div class="sidebar-heading">
        Database
    </div>

    <!-- Nav Item - Surat -->
    <li class="nav-item">
        <a class="nav-link" href="<?= base_url('surat') ?>">
            <i class="fas fa-envelope"></i>
            <span>Surat</span></a>
    </li>

    <!-- Nav Item - Disposisi -->
    <li class="nav-item">
        <a class="nav-link" href="<?= base_url('disposisi') ?>">
            <i class="fas fa-envelope-open-text"></i>
            <span>Disposisi</span></a>
    </li>

    <!-- Nav Item - Jenis Surat -->
    <li class="nav-item">
        <a class="nav-link" href="<?= base_url('jenis_surat') ?>">
            <i class="fas fa-envelope-square"></i>
            <span>Jenis Surat</span></a>
    </li>

    <!-- Nav Item - Total Akun -->
    <li class="nav-item">
        <a class="nav-link" href="<?= base_url('akun') ?>">
            <i class="fas fa-user"></i>
            <span>List Akun</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Pemisah antara Database dengan Akun -->
    <!-- Pemisah antara Database dengan Akun -->
    <!-- Pemisah antara Database dengan Akun -->

    <!-- Heading -->
    <div class="sidebar-heading">
        Akun Anda
    </div>

    <!-- Nav Item - Edit Akun -->
    <li class="nav-item">
        <a class="nav-link" href="<?= base_url('akun/edit') ?>">
            <i class="fas fa-user-edit"></i>
            <span>Edit Akun</span></a>

    </li>

    <!-- Nav Item - Logout -->
    <li class="nav-item">
        <a class="nav-link" href="<?= base_url('auth/logout') ?>" data-toggle="modal" data-target="#logoutModal">
            <i class="fas fa-sign-out-alt"></i>
            <span>Logout</span></a>

    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>
<!-- End of Sidebar -->
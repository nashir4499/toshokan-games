<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?= base_url('menu/') ?>">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Halo <?= $user['level'] ?></div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Home -->
    <li class="nav-item <?= ($this->uri->segment(2) === 'index') ? 'active' : '' ?> <?= ($this->uri->segment(2) === null) ? 'active' : '' ?>">
        <a class="nav-link" href="<?= base_url('menu/index') ?>">
            <i class="fas fa-fw fa-home"></i>
            <span>Home</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Profil -->
    <li class="nav-item <?= ($this->uri->segment(2) === 'profil') ? 'active' : '' ?>">
        <a class="nav-link" href="<?= base_url('menu/profil') ?>">
            <i class="fas fa-fw fa-user"></i>
            <span>Profile</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Fitur
    </div>

    <!-- Nav Item - tambah -->
    <li class="nav-item <?= ($this->uri->segment(2) === 'tambah') ? 'active' : '' ?>">
        <a class="nav-link" href="<?= base_url('menu/tambah') ?>">
            <i class="fas fa-fw fa-plus"></i>
            <span>Tambah</span></a>
    </li>

    <!-- Nav Item - ubah -->
    <li class="nav-item <?= ($this->uri->segment(2) === 'ubah') ? 'active' : '' ?>">
        <a class="nav-link" href="<?= base_url('menu/ubah') ?>">
            <i class="fas fa-fw fa-pen"></i>
            <span>Ubah</span></a>
    </li>

    <!-- Nav Item - hapus -->
    <li class="nav-item <?= ($this->uri->segment(2) === 'hapus') ? 'active' : '' ?>">
        <a class="nav-link" href="<?= base_url('menu/hapus') ?>">
            <i class="fas fa-fw fa-eraser"></i>
            <span>Hapus</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Profil -->
    <li class="nav-item <?= ($this->uri->segment(2) === 'genre') ? 'active' : '' ?>">
        <a class="nav-link" href="<?= base_url('menu/genre') ?>">
            <i class="fas fa-fw fa-dice"></i>
            <span>Edit Genre</span></a>
    </li>

    <!-- Nav Item - Profil -->
    <li class="nav-item <?= ($this->uri->segment(2) === 'rating') ? 'active' : '' ?>">
        <a class="nav-link" href="<?= base_url('menu/rating') ?>">
            <i class="fas fa-fw fa-star"></i>
            <span>Edit Rating</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Nav Item - logout -->
    <li class="nav-item">
        <a class="nav-link" href="#" data-toggle="modal" data-target="#logoutModal">
            <i class="fas fa-fw fa-sign-out-alt"></i>
            <span>Logout</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>
<!-- End of Sidebar -->